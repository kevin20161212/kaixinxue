<?php

// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2017 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.ctolog.com
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

namespace app\admin\controller;
use admin\Uploader\controller;
/**
 * 插件助手控制器
 * Class Plugs
 * @package app\admin\controller
 * @author Anyon <zoujingli@qq.com>
 * @date 2017/02/21
 */
class Ueeditor extends Admin
{
    public function index(){
        //header('Access-Control-Allow-Origin: http://www.baidu.com'); //设置http://www.baidu.com允许跨域访问
        //header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With'); //设置允许的跨域header
        date_default_timezone_set("Asia/chongqing");
        error_reporting(E_ERROR);
        header("Content-Type: text/html; charset=utf-8");

        $CONFIG = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents("./public/ueditor1433/php/config.json")), true);
        $action = $_GET['action'];

        switch ($action) {
            case 'config':
                $result =  json_encode($CONFIG);
                break;
            /* 上传图片 */
            case 'uploadimage':
            // dump($CONFIG);exit;
                $fieldName = $CONFIG['imageFieldName'];
                $result = $this->upFile($fieldName);
                break;
            /* 上传涂鸦 */
            case 'uploadscrawl':
                $config = array(
                    "pathFormat" => $CONFIG['scrawlPathFormat'],
                    "maxSize" => $CONFIG['scrawlMaxSize'],
                    "allowFiles" => $CONFIG['scrawlAllowFiles'],
                    "oriName" => "scrawl.png"
                );
                $fieldName = $CONFIG['scrawlFieldName'];
                $base64 = "base64";
                $result = $this->upBase64($config,$fieldName);
                break;
            /* 上传视频 */
            case 'uploadvideo':
                $fieldName = $CONFIG['videoFieldName'];
                $result = $this->upFile($fieldName);
                break;
            /* 上传文件 */
            case 'uploadfile':
                $fieldName = $CONFIG['fileFieldName'];
                $result = $this->upFile($fieldName);
                break;
            /* 列出图片 */
            case 'listimage':
                $allowFiles = $CONFIG['imageManagerAllowFiles'];
                $listSize = $CONFIG['imageManagerListSize'];
                $path = $CONFIG['imageManagerListPath'];
                $get =$_GET;
                $result =$this->fileList($allowFiles,$listSize,$get);
                break;
            /* 列出文件 */
            case 'listfile':
                $allowFiles = $CONFIG['fileManagerAllowFiles'];
                $listSize = $CONFIG['fileManagerListSize'];
                $path = $CONFIG['fileManagerListPath'];
                $get = $_GET;
                $result = $this->fileList($allowFiles,$listSize,$get);
                break;
            /* 抓取远程文件 */
            case 'catchimage':
                $config = array(
                    "pathFormat" => $CONFIG['catcherPathFormat'],
                    "maxSize" => $CONFIG['catcherMaxSize'],
                    "allowFiles" => $CONFIG['catcherAllowFiles'],
                    "oriName" => "remote.png"
                );
                $fieldName = $CONFIG['catcherFieldName'];
                /* 抓取远程图片 */
                $list = array();
                isset($_POST[$fieldName]) ? $source = $_POST[$fieldName] : $source = $_GET[$fieldName];
                
                foreach($source as $imgUrl){
                    $info = json_decode($this->saveRemote($config,$imgUrl),true);
                    array_push($list, array(
                        "state" => $info["state"],
                        "url" => $info["url"],
                        "size" => $info["size"],
                        "title" => htmlspecialchars($info["title"]),
                        "original" => htmlspecialchars($info["original"]),
                        "source" => htmlspecialchars($imgUrl)
                    ));
                }

                $result = json_encode(array(
                    'state' => count($list) ? 'SUCCESS':'ERROR',
                    'list' => $list
                ));
                break;
            default:
                $result = json_encode(array(
                    'state' => '请求地址出错'
                ));
                break;
        }

        /* 输出结果 */
        if(isset($_GET["callback"])){
            if(preg_match("/^[\w_]+$/", $_GET["callback"])){
                echo htmlspecialchars($_GET["callback"]).'('.$result.')';
            }else{
                echo json_encode(array(
                    'state' => 'callback参数不合法'
                ));
            }
        }else{
            echo $result;
        }
    }
    
    //上传文件
    public function upFile(){
        // $file = request()->file($fieldName);
        // dump($_FILES);
        // exit;
        $CONFIG = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents("./public/ueditor1433/php/config.json")), true);
        $fieldName = $CONFIG['imageFieldName'];
        $file = request()->file($fieldName);
        // dump($_FILES);
        // dump($file);
        // exit;
        $info = $file->move(ROOT_PATH.'public'.DS.'uploads');
        if($info){//上传成功
            $fname='/public/uploads/'.str_replace('\\','/',$info->getSaveName());
            //dump($_FILES);dump($info);dump($fname);//exit;
            $imgArr = explode(',', 'jpg,gif,png,jpeg,bmp,ttf,tif');
            $imgExt= strtolower($info->getExtension());
            $isImg = in_array($imgExt,$imgArr);
            
            // if($isImg){//如果是图片，开始处理
            //  $image = Image::open($file);
            //  $thumbnail = 1;
            //  $water = 1;
                
            //  //在这里你可以根据你需要，调用ThinkPHP5的图片处理方法了
            //  if($water == 1){//文字水印
            //      $image->text('df81.com','./public/font/4.ttf',180,'#ff0000')->save('.'.$fname);
            //  }
            //  if($water ==2 ){//图片水印
            //      $image->water('./public/img/df81.png',9,100)->save('.'.$fname);
            //  }   
            //  if($thumbnail == 1){//生成缩略图
            //      $image->thumb(500,500,1)->save('.'.$fname);
            //  }
            // }
            
            $data=array(
                'state' => 'SUCCESS',
                'url' => $fname,
                'title' => $info->getFilename(),
                'original' => $info->getFilename(),
                'type' => '.' . $info->getExtension(),
                'size' => $info->getSize(),
            );
        }else{
            $data=array(
                'state' => $info->getError(),
            );
        }
        return json_encode($data);
    }

    //列出图片
    private function fileList($allowFiles,$listSize,$get){
        $dirname = './public/uploads/';
        $allowFiles = substr(str_replace(".","|",join("",$allowFiles)),1);

        /* 获取参数 */
        $size = isset($get['size']) ? htmlspecialchars($get['size']) : $listSize;
        $start = isset($get['start']) ? htmlspecialchars($get['start']) : 0;
        $end = $start + $size;

        /* 获取文件列表 */
        $path = $dirname;
        $files = $this->getFiles($path,$allowFiles);
        if(!count($files)){
            return json_encode(array(
                "state" => "no match file",
                "list" => array(),
                "start" => $start,
                "total" => count($files)
            ));
        }

        /* 获取指定范围的列表 */
        $len = count($files);
        for($i = min($end, $len) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i--){
            $list[] = $files[$i];
        }

        /* 返回数据 */
        $result = json_encode(array(
            "state" => "SUCCESS",
            "list" => $list,
            "start" => $start,
            "total" => count($files)
        ));

        return $result;
    }

    /*
     * 遍历获取目录下的指定类型的文件
     * @param $path
     * @param array $files
     * @return array
    */
    private function getFiles($path,$allowFiles,&$files = array()){
        if(!is_dir($path)) return null;
        if(substr($path,strlen($path)-1) != '/') $path .= '/';
        $handle = opendir($path);
            
        while(false !== ($file = readdir($handle))){
            if($file != '.' && $file != '..'){
                $path2 = $path.$file;
                if(is_dir($path2)){
                    $this->getFiles($path2,$allowFiles,$files);
                }else{
                    if(preg_match("/\.(".$allowFiles.")$/i",$file)){
                        $files[] = array(
                            'url' => substr($path2,1),
                            'mtime' => filemtime($path2)
                        );
                    }
                }
            }
        }
        
        return $files;
    }

    //抓取远程图片
    private function saveRemote($config,$fieldName){
        $imgUrl = htmlspecialchars($fieldName);
        $imgUrl = str_replace("&amp;","&",$imgUrl);

        //http开头验证
        if(strpos($imgUrl,"http") !== 0){
            $data=array(
                'state' => '链接不是http链接',
            );
            return json_encode($data);
        }
        //获取请求头并检测死链
        $heads = get_headers($imgUrl);
        if(!(stristr($heads[0],"200") && stristr($heads[0],"OK"))){
            $data=array(
                'state' => '链接不可用',
            );
            return json_encode($data);
        }
        //格式验证(扩展名验证和Content-Type验证)
        $fileType = strtolower(strrchr($imgUrl,'.'));
        if(!in_array($fileType,$config['allowFiles']) || stristr($heads['Content-Type'],"image")){
            $data=array(
                'state' => '链接contentType不正确',
            );
            return json_encode($data);
        }

        //打开输出缓冲区并获取远程图片
        ob_start();
        $context = stream_context_create(
            array('http' => array(
                'follow_location' => false // don't follow redirects
            ))
        );
        readfile($imgUrl,false,$context);
        $img = ob_get_contents();
        ob_end_clean();
        preg_match("/[\/]([^\/]*)[\.]?[^\.\/]*$/",$imgUrl,$m);

        $dirname = './public/uploads/remote/';
        $file['oriName'] = $m ? $m[1] : "";
        $file['filesize'] = strlen($img);
        $file['ext'] = strtolower(strrchr($config['oriName'],'.'));
        $file['name'] = uniqid().$file['ext'];
        $file['fullName'] = $dirname.$file['name'];
        $fullName = $file['fullName'];

        //检查文件大小是否超出限制
        if($file['filesize'] >= ($config["maxSize"])){
            $data=array(
                'state' => '文件大小超出网站限制',
            );
            return json_encode($data);
        }

        //创建目录失败
        if(!file_exists($dirname) && !mkdir($dirname,0777,true)){
            $data=array(
                'state' => '目录创建失败',
            );
            return json_encode($data);
        }else if(!is_writeable($dirname)){
            $data=array(
                'state' => '目录没有写权限',
            );
            return json_encode($data);
        }

        //移动文件
        if(!(file_put_contents($fullName, $img) && file_exists($fullName))){ //移动失败
            $data=array(
                'state' => '写入文件内容错误',
            );
            return json_encode($data);
        }else{ //移动成功
            $data=array(
                'state' => 'SUCCESS',
                'url' => substr($file['fullName'],1),
                'title' => $file['name'],
                'original' => $file['oriName'],
                'type' => $file['ext'],
                'size' => $file['filesize'],
            );
        }
        
        return json_encode($data);
    }

    /*
     * 处理base64编码的图片上传
     * 例如：涂鸦图片上传
    */
    private function upBase64($config,$fieldName){
        $base64Data = $_POST[$fieldName];
        $img = base64_decode($base64Data);

        $dirname = './public/uploads/scrawl/';
        $file['filesize'] = strlen($img);
        $file['oriName'] = $config['oriName'];
        $file['ext'] = strtolower(strrchr($config['oriName'],'.'));
        $file['name'] = uniqid().$file['ext'];
        $file['fullName'] = $dirname.$file['name'];
        $fullName = $file['fullName'];

        //检查文件大小是否超出限制
        if($file['filesize'] >= ($config["maxSize"])){
            $data=array(
                'state' => '文件大小超出网站限制',
            );
            return json_encode($data);
        }

        //创建目录失败
        if(!file_exists($dirname) && !mkdir($dirname,0777,true)){
            $data=array(
                'state' => '目录创建失败',
            );
            return json_encode($data);
        }else if(!is_writeable($dirname)){
            $data=array(
                'state' => '目录没有写权限',
            );
            return json_encode($data);
        }

        //移动文件
        if(!(file_put_contents($fullName, $img) && file_exists($fullName))){ //移动失败
            $data=array(
                'state' => '写入文件内容错误',
            );
        }else{ //移动成功          
            $data=array(
                'state' => 'SUCCESS',
                'url' => substr($file['fullName'],1),
                'title' => $file['name'],
                'original' => $file['oriName'],
                'type' => $file['ext'],
                'size' => $file['filesize'],
            );
        }
        
        return json_encode($data);
    }
    
    // public function ueditor(){
    //     //$up = new Uploader();
    //     //dump($up);
    //   $CONFIG = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents("http://lixiakonggu.youfai.cn/public/libs/ueditor/config.json")), true);
    //   $action = input('param.action');
    //   switch ($action) {
    //         case 'config':
    //             $result =  json_encode($CONFIG);
    //             break;
    //         /* 上传图片 */
    //         case 'uploadimage':
    //         /* 上传涂鸦 */
    //         case 'uploadscrawl':
    //         /* 上传视频 */
    //         case 'uploadvideo':
    //         /* 上传文件 */
    //         case 'uploadfile':
    //             $result = $this->action_upload();
    //             //$result = include("action_upload.php");
    //             break;

    //         /* 列出图片 */
    //         case 'listimage':
    //             $result = $this->action_list();
    //             //$result = include("action_list.php");
    //             break;
    //         /* 列出文件 */
    //         case 'listfile':
    //             $result = $this->action_list();
    //             //$result = include("action_list.php");
    //             break;

    //         /* 抓取远程文件 */
    //         case 'catchimage':
    //             $result = $this->action_crawler();

    //             //$result = include("action_crawler.php");
    //             break;

    //         default:
    //             $result = json_encode(array(
    //                 'state'=> '请求地址出错'
    //             ));
    //             break;
    //     }
    //     /* 输出结果 */
    //     array_key_exists('callback',input('param.'));
    //     if (array_key_exists('callback',input('param.'))) {
    //         if (preg_match("/^[\w_]+$/", input('param.callback'))) {
    //             echo htmlspecialchars(input('param.callback')) . '(' . $result . ')';
    //         } else {
    //             echo json_encode(array(
    //                 'state'=> 'callback参数不合法'
    //             ));
    //         }
    //     } else {
    //         echo $result;
    //     }

    // }

    // public function action_upload(){
    //     $base64 = "upload";
    //     switch (htmlspecialchars(input('param.action'))) {
    //         case 'uploadimage':
    //             $config = array(
    //                 "pathFormat" => $CONFIG['imagePathFormat'],
    //                 "maxSize" => $CONFIG['imageMaxSize'],
    //                 "allowFiles" => $CONFIG['imageAllowFiles']
    //             );
    //             $fieldName = $CONFIG['imageFieldName'];
    //             break;
    //         case 'uploadscrawl':
    //             $config = array(
    //                 "pathFormat" => $CONFIG['scrawlPathFormat'],
    //                 "maxSize" => $CONFIG['scrawlMaxSize'],
    //                 "allowFiles" => $CONFIG['scrawlAllowFiles'],
    //                 "oriName" => "scrawl.png"
    //             );
    //             $fieldName = $CONFIG['scrawlFieldName'];
    //             $base64 = "base64";
    //             break;
    //         case 'uploadvideo':
    //             $config = array(
    //                 "pathFormat" => $CONFIG['videoPathFormat'],
    //                 "maxSize" => $CONFIG['videoMaxSize'],
    //                 "allowFiles" => $CONFIG['videoAllowFiles']
    //             );
    //             $fieldName = $CONFIG['videoFieldName'];
    //             break;
    //         case 'uploadfile':
    //         default:
    //             $config = array(
    //                 "pathFormat" => $CONFIG['filePathFormat'],
    //                 "maxSize" => $CONFIG['fileMaxSize'],
    //                 "allowFiles" => $CONFIG['fileAllowFiles']
    //             );
    //             $fieldName = $CONFIG['fileFieldName'];
    //             break;
    //     }

    //     /* 生成上传实例对象并完成上传 */
    //     $up = new Uploader($fieldName, $config, $base64);

    //     *
    //      * 得到上传文件所对应的各个参数,数组结构
    //      * array(
    //      *     "state" => "",          //上传状态，上传成功时必须返回"SUCCESS"
    //      *     "url" => "",            //返回的地址
    //      *     "title" => "",          //新文件名
    //      *     "original" => "",       //原始文件名
    //      *     "type" => ""            //文件类型
    //      *     "size" => "",           //文件大小
    //      * )
         

    //     /* 返回数据 */
    //     return json_encode($up->getFileInfo());

    // }

    // public function action_list(){
    //     /* 判断类型 */
    //     switch (input('param.action')) {
    //         /* 列出文件 */
    //         case 'listfile':
    //             $allowFiles = $CONFIG['fileManagerAllowFiles'];
    //             $listSize = $CONFIG['fileManagerListSize'];
    //             $path = $CONFIG['fileManagerListPath'];
    //             break;
    //         /* 列出图片 */
    //         case 'listimage':
    //         default:
    //             $allowFiles = $CONFIG['imageManagerAllowFiles'];
    //             $listSize = $CONFIG['imageManagerListSize'];
    //             $path = $CONFIG['imageManagerListPath'];
    //     }
    //     $allowFiles = substr(str_replace(".", "|", join("", $allowFiles)), 1);

    //     /* 获取参数 */
    //     $size = !empty(input('param.size')) ? htmlspecialchars(input('param.size')) : $listSize;
    //     $start = !empty(input('param.size')) ? htmlspecialchars(input('param.start')) : 0;
    //     $end = $start + $size;

    //     /* 获取文件列表 */
    //     $path = $_SERVER['DOCUMENT_ROOT'] . (substr($path, 0, 1) == "/" ? "":"/") . $path;
    //     $files = $this->getfiles($path, $allowFiles);
    //     if (!count($files)) {
    //         return json_encode(array(
    //             "state" => "no match file",
    //             "list" => array(),
    //             "start" => $start,
    //             "total" => count($files)
    //         ));
    //     }

    //     /* 获取指定范围的列表 */
    //     $len = count($files);
    //     for ($i = min($end, $len) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i--){
    //         $list[] = $files[$i];
    //     }
    //     //倒序
    //     //for ($i = $end, $list = array(); $i < $len && $i < $end; $i++){
    //     //    $list[] = $files[$i];
    //     //}

    //     /* 返回数据 */
    //     $result = json_encode(array(
    //         "state" => "SUCCESS",
    //         "list" => $list,
    //         "start" => $start,
    //         "total" => count($files)
    //     ));

    //     return $result;

    // }

    // public function action_crawler(){
    //     $config = array(
    //         "pathFormat" => $CONFIG['catcherPathFormat'],
    //         "maxSize" => $CONFIG['catcherMaxSize'],
    //         "allowFiles" => $CONFIG['catcherAllowFiles'],
    //         "oriName" => "remote.png"
    //     );
    //     $fieldName = $CONFIG['catcherFieldName'];

    //     /* 抓取远程图片 */
    //     $list = array();
    //     if (isset($_POST[$fieldName])) {
    //         $source = $_POST[$fieldName];
    //     } else {
    //         $source = $_GET[$fieldName];
    //     }
    //     foreach ($source as $imgUrl) {
    //         $item = new Uploader($imgUrl, $config, "remote");
    //         $info = $item->getFileInfo();
    //         array_push($list, array(
    //             "state" => $info["state"],
    //             "url" => $info["url"],
    //             "size" => $info["size"],
    //             "title" => htmlspecialchars($info["title"]),
    //             "original" => htmlspecialchars($info["original"]),
    //             "source" => htmlspecialchars($imgUrl)
    //         ));
    //     }

    //     /* 返回抓取数据 */
    //     return json_encode(array(
    //         'state'=> count($list) ? 'SUCCESS':'ERROR',
    //         'list'=> $list
    //     ));
    // }

    // public function getfiles($path, $allowFiles, &$files = array())
    // {
    //     if (!is_dir($path)) return null;
    //     if(substr($path, strlen($path) - 1) != '/') $path .= '/';
    //     $handle = opendir($path);
    //     while (false !== ($file = readdir($handle))) {
    //         if ($file != '.' && $file != '..') {
    //             $path2 = $path . $file;
    //             if (is_dir($path2)) {
    //                 getfiles($path2, $allowFiles, $files);
    //             } else {
    //                 if (preg_match("/\.(".$allowFiles.")$/i", $file)) {
    //                     $files[] = array(
    //                         'url'=> substr($path2, strlen($_SERVER['DOCUMENT_ROOT'])),
    //                         'mtime'=> filemtime($path2)
    //                     );
    //                 }
    //             }
    //         }
    //     }
    //     return $files;
    // }

}
