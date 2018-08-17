<?php
// +----------------------------------------------------------------------
// | 有范科技
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://www.youfai.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 有范科技 <youfai@youfai.cn>
// +----------------------------------------------------------------------
// | 版权申明：YFTHINK不是一个自由软件，是有范科技官方推出的商业源码，严禁在未经许可的情况下
// | 拷贝、复制、传播、使用山东有范科技的任意代码，如有违反，请立即删除，否则您将面临承担相应
// | 法律责任的风险。如果需要取得官方授权，请联系官方http://www.youfai.cn
// +----------------------------------------------------------------------

namespace app\spider\controller;
use app\common\controller\Ali;
use think\Controller;
use think\Request;
use think\Cache;
use phpspider\autoloader;
use phpspider\core\phpspider;
use think\Db;
use app\wechat\stores\service\WechatService;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Indexback extends Controller
{
  
	/**
     * 默认方法
     * @author <youfai@youfai.cn>
     * 获取所有网站列表-配置，创建进程，每个站点一个进程，同时抓取
     */
    public function index(){
		$file = fopen("testtt.txt","w");
		echo fwrite($file,"Hello World. Testing!");
		fclose($file);
		$configs = $this->getSiteList();
		foreach ($configs as $key => $value) {
			$pid = pcntl_fork();
			if($pid == 0){
				$this->task($value);
				exit(0); 
			}
		}
    }
    /**
     * 站点抓取
     * @author <youfai@youfai.cn>
     * 传入网站配置，进行抓取数据，过滤数据，并存储至缓存
     */
     public function task($value){
     	$spider = new phpspider($value);
		// dump($key);
		$spider->on_extract_page = function($page, $data,$ext) 
		{
		    $data = preg_replace("#<!--.*-->#" , '' , $data); 
     		$data = preg_replace("#<!－－.*－－>#" , '' , $data);
 			
			$regex="'\d{4}/\d{1,2}/\d{1,2}'is";
			if($data['article_publish_time'] != null){
				preg_match_all($regex,$data['article_publish_time'],$t);
				$data['time'] = $t[0];
			}else{
				$data['time'] = date("Y/m/d");
			}
			
			$data['url'] = $page['url'];
     		$data['areaid'] = $ext['areaid'];
     		$data['noticetype'] = $ext['noticetype'];
     		$this->set_cachedata($data);
		    return false;
		    // 返回false不处理，当前页面的字段不入数据库直接过滤
		    // 比如采集电影网站，标题匹配到“预告片”这三个字就过滤
		    //if (strpos($data['title'], "预告片") !== false)
		    //{
		    //    return false;
		    //}
		};
		$spider->start();
	 }
	 /**
     * 缓存数据
     * @author <youfai@youfai.cn>
     * 传入数据，进行缓存
     */
     public function set_cachedata($data){
     	// 缓存详细数据的key值
     	$cachedate = date('Ymd');
		// 索引表 value值，用于查找缓存的详细数据
     	$keydate = $cachedate.$data['article_title'];
     	$suoyinname = $data['noticetype'].$cachedate;
     	$datas = cache($cachedate);
     	if(!cache($keydate)){
	     	// $datas = cache('keycache');
		    $num = $datas?count($datas):0;
		    $datas[$num] = $keydate;
		    cache($suoyinname,$datas);
		    unset($datas);
     		$data['cachekeys'] = $num;
     		$data['cachename'] = $suoyinname;
     		Cache::set($keydate,$data);
			$this->add_sql($data);
		    return true;
     	}else{
     		return false;
     	}
	 }
	 

	 
	 /**
     * 获取所有站点配置列表
     * @author <youfai@youfai.cn>
     * 
     */
	 private function getSiteList(){
		$path = APP_DIR .'site/siteConfig/';
		$dirs = array_map('basename', glob($path. '*'));
		// dump($dirs);exit;
	    foreach ($dirs as $dir) {
	        $config_file = $path.$dir;
	        if (is_file($config_file)) {
	            $config[]  = include $config_file;
	        }
	        // file_put_contents(APP_DIR .request()->module() .'/siteConfig/4.php', '<?php'.PHP_EOL.'return '.var_export(include $config_file,true).';');
	        // exit;
	  	}
	    return $config;
	}
	/**
     * 数据存储
     * @author <youfai@youfai.cn>
     * 将缓存数据写入数据库
     */
     public function indexs(){
     	$data = Cache::get('keycache');
     	// dump($data);
     	// exit;
     	// $db = db('home_content');
     	foreach ($data as $keys => $values) {
     		$datas = Cache::get($values);
     		// foreach ($datas as $key => $value) {
	      //   	$data['title'] = $value['article_title'];
	      //   	$data['content'] = $value['article_content'];
	      //   	$data['time'] = $value['article_publish_time'];
	      //   	$data['url'] = $value['url'];
	      //   	$data['daykeys'] = $keys;
	      //   	$db->insert($data);
       //  	}
     	dump($datas);
     	}
     	exit;
     }
	 
	 /**
     * 实时数据存储
     * @author <youfai@youfai.cn>
     * 将缓存数据写入数据库
     */
	public function add_sql($data){
		$content = Db::name('home_content')->where(array('title'=>$data['article_title']))->find();
		 if($content){
			return false;
		 }
		if($data['article_title'] == ''){
			return false; 
		}
		$in = strstr($data['article_title'],"</");
		if($in){
			return false; 
		}
		$sq['url'] = $data['url'];
	
		if($data['time'] == null){
			$sq['create_time'] = date("Y/m/d");
		}elseif(is_array($data['time'])){
			$sq['create_time'] = $data['time'][0];
		}else{
			$sq['create_time'] = $data['time'];			
		}
		
		$sq['title'] = $data['article_title'];		 
		$sq['content'] = $data['article_content'];
		$sq['time'] = time();
		$sq['areaid'] = $data['areaid'];
		$sq['noticetype'] = $data['noticetype'];
		$add = Db::name('home_content')->insertGetId($sq);
		
		// if($add){
			// $this->push_user($add); 
		// }
		return true;
	}
	 
	 /**
     * 推送客户
     * @author <youfai@youfai.cn>
     * 将存入数据库的数据匹配对应的用户并且推送
     */
    public function push_user($id){
		$content = Db::name('home_content')->where(array('id'=>$id))->find();
		$user = $this->push_users();				
		foreach($user as $k=>$v){
			$key = Db::name('home_subscription_group')->where(array('uid'=>$v['id'],'status'=>1))->select();			
			foreach($key as $ke=>$va){
				$a[$ke] = $va['content'];
			}
			$a = array_unique(explode(',',implode(',',$a)));//用户订阅的关键词内容
				// dump($v['id']);
				// dump($a);
// dump('-------------------------------------------------------');
			$in = $this->is_in($a,$content['title']);//判断该用户是否符合推送条件 如果适合返回1 推送信息; 如果不适合 返回2
		     unset($a);
			unset($key);
			if($in == 1){//推送				
				
				$push_type = explode(',',$v['push_type']);//用户选择的推送方式				
				foreach($push_type as $key=>$val){
					$this->push_type($val,$id,$v['id']);
				}
			}
		}
		return true;
	}
	 
	public function is_in($a,$title){
		$b = array();
		foreach($a as $k=>$v){
			$in = strstr($title,$v);
			if($in){
				$b[$k]['in'] = 1;
			}						
		}		
		if($b != null){
			return 1;
		}else{
			return 2;
		}
	}
	
	public function push_type($val,$id,$uid){
		// $content = Db::name('home_content')->where(array('id'=>$id))->find();
		// $user = Db::name('home_member')->where(array('id'=>$uid))->find();
		if($val == 3){//短信推送		   
			$this->sms_push($id,$uid);			
		}elseif($val == 1){//微信推送
			$this->wx_push($id,$uid);
		}
		return true;
	}
	
	
	public function sms_push($id,$uid){//短信推送
		$content = Db::name('home_content')->where(array('id'=>$id))->find();
		$user = Db::name('home_member')->where(array('id'=>$uid))->find();
		$SMS = new Ali();    					
		$title = mb_substr($content['title'],0,20,'utf-8');
		$push = $SMS->sendSms($user['mobile'],$title,$content['create_time']);
		header('Content-Type:application/json; charset=utf-8');
		if($push){
			return true;
		}else{
			return false;
		}		
	}
	
	public function sms_class_push($num,$uid){//短信推送
		$user = Db::name('home_member')->where(array('id'=>$uid))->find();
		$SMS = new Ali();    							
		$push = $SMS->classsendSms($user['mobile'],$num,'11111');
		header('Content-Type:application/json; charset=utf-8');
		if($push){
			return true;
		}else{
			return false;
		}		
	}
	
	public function wx_push($id,$uid){//微信推送
		$content = Db::name('home_content')->where(array('id'=>$id))->find();
		$user = Db::name('home_member')->where(array('id'=>$uid))->find();
		$token = $this->token();
		$data=[ //发给原维修师傅
			'touser'=>$user['open_id'],  
			'template_id'=>'eVcxe4WfyRluH3KP34C-drBsq2RRbrc6F4D__CFRKyY',     
			'data'=>array(  
				'first'=>array('value'=>'您收到一条新的公告',"color"=>"#173177"),  
				'keyword1'=>array('value'=>null,"color"=>"#173177"),  
				'keyword2'=>array('value'=>$content['create_time'],"color"=>"#173177"),
				'keyword3'=>array('value'=>$content['title'],"color"=>"#173177"),				
				'remark'=>array('value'=>'<a href="http://spider.youfai.cn/home/index/detail.html?id='.$content['id'].'">详细内容请进入</a>',"color"=>"#173177")  
			)
		];
		$result = $this->curl_post_send_information($token,json_encode($data));
		if($result){
			$da['uid'] = $uid;
			$da['content_id'] = $id;
			$da['type_id'] = 1;
			$da['create_time'] = time();
			$inst = Db::name('home_push_record')->insertGetId($da);
			if($inst){
				return true;
			}
		}
		return false;
	}
	 
	public function curl_post_send_information($token,$vars,$second=120,$aHeader=array())  
    {  
        $ch = curl_init();  
        //超时时间  
        curl_setopt($ch,CURLOPT_TIMEOUT,$second);  
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);  
        //这里设置代理，如果有的话  
        curl_setopt($ch,CURLOPT_URL,'https://api.weixin.qq.com/cgi-bin/message/template/send?access_token='.$token);  
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);  
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);  
        if( count($aHeader) >= 1 ){  
            curl_setopt($ch, CURLOPT_HTTPHEADER, $aHeader);  
        }  
        curl_setopt($ch,CURLOPT_POST, 1);  
        curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);  
        $data = curl_exec($ch);  
        if($data){  
            curl_close($ch);  
            return $data;  
        }  
        else {  
            $error = curl_errno($ch);  
            curl_close($ch);  
            return $error;  
        }  
    }  		
    
	
	
	public function token(){
	
		
		if(!S('accesstoken')){
			$appid = WechatService::getAppid();
			$appsecret = WechatService::getAppSecret();
			$url='https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$appid.'&secret='.$appsecret;
			$result=$this->curlpost($url);
			$jsoninfo = json_decode($result, true);
			$access_token = $jsoninfo["access_token"];
			S('accesstoken',$access_token,7100);
        }
		
		return S('accesstoken');
	}

    public function curlpost($url){
    // 二维码尺寸255*255
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);  
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

    public function push_users(){
		$user1 = Db::name('home_member')->where(array('status'=>1,'export_status'=>1,'push_time_type'=>1))->select();
		$user2 = Db::name('home_member')->where(array('status'=>1,'export_status'=>1,'push_time_type'=>2,'starttime'=>array('lt',time()),'endtime'=>array('gt',time())))->select();
		$user = array_merge($user1,$user2);
		return $user;
	} 
	
	
	
	public function ceshi(){
		 // $key = Db::name('home_subscription_group')->where(array('uid'=>1,'status'=>1))->select();
		 // foreach($key as $k=>$v){
			 // $a[$k] = $v['content'];
		 // }
		 // $a = array_unique(explode(',',implode(',',$a)));
         // $user = Db::name('home_member')->where(array('id'=>1))->find();
		 // $push_type = explode(',',$user['push_type']);
		 // $token = WechatService::getWxConfig();
		 // dump($this->data());
		 // die;
		 // $SMS = new Ali();    					
		// $push = $SMS->sendSms($phone,$code); 
		// $wechat = WechatService::WeChatOauth();		
        // $token = $wechat->getAccessToken(); //accesstoken
		//WechatService::getWxConfig()//appid and secret
        //dump(WechatService::getWxConfig());die;
		$user1 = Db::name('home_member')->where(array('status'=>1,'export_status'=>1,'push_time_type'=>1))->select();
		$user2 = Db::name('home_member')->where(array('status'=>1,'export_status'=>1,'push_time_type'=>2,'starttime'=>array('lt',time()),'endtime'=>array('gt',time())))->select();
		$user = array_merge($user1,$user2);
		dump($user);
	 }
	 
	 

     	 
}
