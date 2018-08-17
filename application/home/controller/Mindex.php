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
namespace app\home\controller;
use app\home\controller\Loginbase;
use think\Request;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Mindex extends Loginbase
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index(){
        $banner = model('cms/CmsSlide')->lists(['status'=>1]);
        $project = model('cms/CmsArticle')->lists(['pid'=>'23'],2,1,4);
        $news = model('cms/CmsArticle')->lists(['pid'=>'24'],2,1,3,true);
        $active = model('cms/CmsArticle')->lists(['pid'=>'26'],2,1,3);
        $notice = model('cms/CmsArticle')->lists(['pid'=>'27'],2,1,3);
        $video = model('cms/CmsVideo')->getOne();
        $this->assign('video',$video['video']);
        $this->assign('title','济南历下控股集团');
        $this->assign('notice',$notice);
        $this->assign('active',$active);
        $this->assign('news',$news);
        $this->assign('project',$project);
        $this->assign('banner',$banner);
        return view('mobile/index');
    }

    public function about(){
        $data = model('cms/CmsArticle')->lists(['pid'=>28,],1);
        $this->assign('title','集团概况');
        $this->assign('data',$data);
        return view('mobile/gaikuang');
    }

    public function column(){
        $data = model('cms/CmsArticle')->where(['pid'=>29])->find();
        //dump($data);
        $this->assign('title','人才专栏');
        $this->assign('data',$data);
        return view('mobile/rencaizhuanlan');
    }

    public function branch(){
        $id = input('param.id');
       if($id>0){
  
            $where = [
                'pid' => $id,
            ];
           $data = model('cms/CmsArticle')->where($where)->order('id desc')->find();
           $this->assign('title',"下属公司");
           $this->assign('data',$data);
           return view('mobile/branch');
        }
        $cate = model('cms/CmsCategory')->listss(['status'=>1,'id'=>'36'],true);
        $this->assign('title',"下属公司");
        $this->assign('data',$data);
        $this->assign('cate',$cate);
        return view('mobile/liebiao');
    }

     public function branch1(){
        $id = input('param.id');
        $cate = model('cms/CmsCategory')->listss(['status'=>1,'id'=>'36'],true);
        if ($id) {
            $where = [
                'pid' => $id,
            ];
        }else{
            $where = [
                'pid' => $cate[0]['id'],
            ];
        }
        $data = model('cms/CmsArticle')->where($where)->order('id desc')->find();
        // $this->assign('title',"下属公司");
        // $this->assign('data',$data);
        // $this->assign('cate',$cate);
        return json(['data'=>$data,'cate'=>$cate]);
    }

    public function detail(){
        return view('mobile/xq');
    }

    public function news(){
        $page = input('param.page',1);
        $cate = input('param.cate');
        if($cate){
            $where = [
                'pid'=>$cate
            ];
            $type = false;
        }else{
            $where = [
                'pid'=>24
            ];
            $type = true;
        }
        if(request()->isPost()){
            $data = model('cms/CmsArticle')->lists($where,2,$page,6,$type);
            if($data){
                $code=1;
            }else{
                $code=0;
            }
            return json(['code'=>$code,'data'=>$data]);
        }
        $data = model('cms/CmsArticle')->lists($where,2,$page,6,$type);
        $cate = model('cms/CmsCategory')->listss(['status'=>1,'id'=>'24'],true);
        $this->assign('title','集团新闻');
        $this->assign('cate',$cate);
        $this->assign('data',$data);
        return view('mobile/news');
    }

    public function news_detail(){
        $id = input('param.id');
        $type = input('param.type',1);
        if($type ==1 ){
            $title = '内容详情';
        }else{
            $title = '项目展示详情';
        }
        $data = model('cms/CmsArticle')->where(['id'=>$id])->find();
        $data['create_time'] = date('Y-m-d H:m:s', $data['create_time']);
        $next = model('cms/CmsArticle')->where(['pid'=>$data['pid'],'id'=>array('gt',$id)])->find();
        $pre = model('cms/CmsArticle')->where(['pid'=>$data['pid'],'id'=>array('lt',$id)])->find();
        if(!$next){
            $next['id'] = 0;
        }
        if(!$pre){
            $pre['id'] = 0;
        }
        $this->assign('title',$title);
        $this->assign('next',$next);
        $this->assign('pre',$pre);
        $this->assign('data',$data);
        //$this->assign('title','新闻详情');
        return view('mobile/newsdetail');
    }

    public function Project(){
        $id = input('param.id');
        $page = input('param.page',1);
        $where = [
            'pid'=>23,
        ];
        if(request()->isPost()){
            $data = model('cms/CmsArticle')->lists($where,2,$page,6);
            if($data){
                $code=1;
            }else{
                $code=0;
            }
            return json(['code'=>$code,'data'=>$data]);
        }
        $data = model('cms/CmsArticle')->lists($where,2,$page,6);
        //dump($data);
        $this->assign('data',$data);
        $this->assign('title','项目展示');
        return view('mobile/project');
    }

    public function contact(){
        $id = input('param.id');
        $page = input('param.page',1);
        $where = [
            'pid'=>23,
        ];
        $data = model('cms/CmsArticle')->lists($where,2,$page,6);
        //dump($data);
        $this->assign('data',$data);
        $this->assign('title','联系我们');
        return view('mobile/contact');
    }

    public function subscribe(){
        $data = input('param.');
        $data1['name'] = $data['name'];
        $data1['mobile'] = $data['shouji'];
        $data1['create_time'] = $data['riqi'];
        $re = db('cms_apply')->insert($data1);
        if($re){
            return $this->success('预约成功！');
        }else{
            return $this->error('预约失败！');
        }
    }

    public function party(){
        $page = input('param.page',1);
        $cate = input('param.cate');
        if($cate){
            $where = [
               'pid'=>$cate
            ];
            $type = false;
        }else{
            $where = [
                'pid'=>46
            ];
            $type = true;
        }
        if(request()->isPost()){
            $data = model('cms/CmsArticle')->lists($where,2,$page,6,$type);
            if($data){
                $code=1;
            }else{
                $code=0;
            }
            return json(['code'=>$code,'data'=>$data]);
        }
        $data = model('cms/CmsArticle')->lists($where,2,$page,6,$type);
        $cate = model('cms/CmsCategory')->listss(['status'=>1,'id'=>'46'],true);
        //dump($cate);exit;
        $this->assign('cate',$cate);
        $this->assign('data',$data);
        $this->assign('title','党群工作');
        return view('mobile/party');
    }

     public function party_detail(){
        $id = input('param.id');
        $data = model('cms/CmsArticle')->where(['id'=>$id])->find();
        $data['create_time'] = date('Y-m-d H:m:s', $data['create_time']);
        $next = model('cms/CmsArticle')->where(['pid'=>$data['pid'],'id'=>array('gt',$id)])->find();
        $pre = model('cms/CmsArticle')->where(['pid'=>$data['pid'],'id'=>array('lt',$id)])->find();
        if(!$next){
            $next['id'] = 0;
        }
        if(!$pre){
            $pre['id'] = 0;
        }
        $this->assign('title',"信息详情");
        $this->assign('next',$next);
        $this->assign('pre',$pre);
        $this->assign('data',$data);
        return view('mobile/partydetail');
    }

    public function service(){
        $page = input('param.page',1);
        $cate = input('param.cate');
        if($cate){
            $where = [
                'pid'=>$cate
            ];
            $type = false;
        }else{
            $where = [
                'pid'=>48
            ];
            $type = true;
        }
        if(request()->isPost()){
            $data = model('cms/CmsArticle')->lists($where,2,$page,6,$type);
            if($data){
                $code=1;
            }else{
                $code=0;
            }
            return json(['code'=>$code,'data'=>$data]);
        }
        $data = model('cms/CmsArticle')->lists($where,2,$page,6,$type);
        $cate = model('cms/CmsCategory')->listss(['status'=>1,'id'=>'48'],true);
        //dump($cate);
        $this->assign('title','集团业务');
        $this->assign('cate',$cate);
        $this->assign('data',$data);
        return view('mobile/service');
    }

    public function service_detail(){
        $id = input('param.id');
        $data = model('cms/CmsArticle')->where(['id'=>$id])->find();
        $data['create_time'] = date('Y-m-d H:m:s', $data['create_time']);
        $next = model('cms/CmsArticle')->where(['pid'=>$data['pid'],'id'=>array('gt',$id)])->find();
        $pre = model('cms/CmsArticle')->where(['pid'=>$data['pid'],'id'=>array('lt',$id)])->find();
        if(!$next){
            $next['id'] = 0;
        }
        if(!$pre){
            $pre['id'] = 0;
        }
        $this->assign('title',"信息详情");
        $this->assign('next',$next);
        $this->assign('pre',$pre);
        $this->assign('data',$data);
        return view('mobile/servicedetail');
    }


    public function active(){
        $page = input('param.page',1);
        if(request()->isPost()){
            $data = model('cms/CmsArticle')->lists(['pid'=>26],2,$page,6);
            if($data){
                $code=1;
            }else{
                $code=0;
            }
            return json(['code'=>$code,'data'=>$data]);
        }
        $data = model('cms/CmsArticle')->lists(['pid'=>26],2,$page,6);
        $this->assign('title','行业动态');
        $this->assign('data',$data);
        return view('mobile/active');
    }

    public function notice(){
        $page = input('param.page',1);
        if(request()->isPost()){
            $data = model('cms/CmsArticle')->lists(['pid'=>27],2,$page,6);
            if($data){
                $code=1;
            }else{
                $code=0;
            }
            return json(['code'=>$code,'data'=>$data]);
        }
        $data = model('cms/CmsArticle')->lists(['pid'=>27],2,$page,6);
        $this->assign('title','公示公告');
        $this->assign('data',$data);
        return view('mobile/notice');
    }

    public function job_list(){
        $page = input('param.page',1);
        if(request()->isPost()){
            $data = model('cms/CmsRecruit')->lists(['status'=>1],2,$page,20);
            return json(['code'=>$code,'data'=>$data]);
        }
        $this->assign('title','人才招聘');
        $this->assign('data',$data);
        return view('mobile/job_list');
    }

    public function job_detail(){
        $id = input('param.id');
        $data = model('cms/CmsRecruit')->detail($id);
        $this->assign('title','岗位详情');
        $this->assign('data',$data);
        return view('mobile/job_detail');
    }

    public function get_map(){
        return view('mobile/ditu');
    }

    public function get_history(){
        $accesstoken = S('accesstoken');
        $url = "https://api.weixin.qq.com/cgi-bin/material/batchget_material?access_token=".$accesstoken;
        $data = [
            "type"=>'news',
            "offset"=>'',
            "count"=>20,
        ];
        $data = json_encode($data);
        //dump($data.type);exit();
        $resulta=$this->curlpost($url,$data);
        dump($resulta);exit;
    }

    public function page(){
        $type = input('param.type',1);
        switch ($type) {
            case '1':
                return view('mobile1/index');
                break;
            case '2':
                return view('mobile1/zuzhi');
                break;
            case '3':
                return view('mobile1/zhanlvxiangq');
                break;
            case '4':
                return view('mobile1/zhanlv');
                break;
            case '5':
                return view('mobile1/xiashu');
                break;
            case '6':
                return view('mobile1/hezuohuoban');
                break;
            case '7':
                return view('mobile1/gongsijianjie');
                break;
            case '8':
                return view('mobile1/xiangqing');
                break;
            case '9':
                return view('mobile1/xiangmu');
                break;
            case '10':
                return view('mobile1/huijin');
                break;
            case '11':
                return view('mobile1/dingjia');
                break;
            case '12':
                return view('mobile/liebiao');
                break;

            case '14':
                return view('mobile1/lianjie');
                break;
            default:
                # code...
                break;
        }


    }

    public function page1(){
        $type = input('param.type',1);
        switch ($type) {
            case '1':
                return view('mobile1/zsw');
                break;
            case '2':
                return view('mobile1/renmin');
                break;
            case '3':
                return view('mobile1/jinhui');
                break;
            case '4':
                return view('mobile1/zongbu');
                break;
            case '5':
                return view('mobile1/dasha');
                break;
            case '6':
                return view('mobile1/liebiao');
                break;
            case '7':
                return view('mobile1/ziyi');
                break;
            case '8':
                return view('mobile1/zier');
                break;
            case '9':
                return view('mobile1/zisan');
                break;
            case '10':
                return view('mobile1/zisi');
                break;
            case '11':
                return view('mobile1/ziwu');
                break;
            case '12':
                return view('mobile1/ziliu');
                break;
            case '13':
                return view('mobile1/ziqi');
                break;
            case '14':
                return view('mobile1/ziba');
                break;
            case '15':
                return view('mobile1/zijiu');
                break;
            case '100':
                return view('mobile3/lover');
                break;
            case '16':
            return view('mobile1/shuangjin');
                break;
                case '17':
            return view('mobile1/zhaobiao');
                break;
                  case '18':
                   $nav = db('cms_category')->where(['pid'=>24])->select();
                   $company = db('cms_category')->where(['pid'=>36])->select();
                    $dang = db('cms_category')->where(['pid'=>46])->select();
                    // $this->assign('project',$project);
                    $this->assign('dang',$dang);
                    $this->assign('company',$company);
                   $this->assign('nav',$nav);
            return view('mobile3/xiangqing');
                break;
                case '19':
            return view('mobile3/list');
                break;

            case '20':
            $page = input('param.page',1);
            $cate = input('param.cate',53);
            $top_list = db('cms_article')->where(['pid'=>['in','53,52,47']])->order('id desc')->limit(5)->select();
            foreach ($top_list as $key => &$val) {
                $val['thumb'] = get_cover($val['thumb']);        
            }
            if($cate){
                $where = [
                   'pid'=>$cate
                ];
                $type = false;
            }else{
                $where = [
                    'pid'=>46
                ];
                $type = true;
            }
            if(request()->isPost()){
                $data = model('cms/CmsArticle')->lists($where,2,$page,6,$type);
                if($data){
                    $code=1;
                }else{
                    $code=0;
                }
                return json(['code'=>$code,'data'=>$data]);
            }
            $this->assign('cate_id',$cate);
            $data = model('cms/CmsArticle')->lists($where,2,$page,6,$type);
            $cate = model('cms/CmsCategory')->listss(['status'=>1,'id'=>'46'],true);
            //dump($data);exit;
            $this->assign('top_list',$top_list);
            $this->assign('cate',$cate);
            $this->assign('data',$data);
            $this->assign('title','党务工作');
            return view('mobile3/list1');
                break;
            default:
          
                # code...
                break;
        }    
    }


    public function index1(){
        $about_data = model('cms/CmsArticle')->where(['pid'=>28,'id'=>1])->find();
        $position_data = model('cms/CmsArticle')->where(['pid'=>28,'id'=>2])->find();
        $news = model('cms/CmsArticle')->lists(['pid'=>'24'],2,1,10,true);
        //dump($news);exit;
        $nav = db('cms_category')->where(['pid'=>24])->select();
        $company = db('cms_category')->where(['pid'=>36])->select();
        $dang = db('cms_category')->where(['pid'=>46])->select();
        // $this->assign('project',$project);
        $this->assign('dang',$dang);
        $this->assign('company',$company);
        $this->assign('nav',$nav);
        $this->assign('news',$news);
        $this->assign('position_data',$position_data);
        $this->assign('about_data',$about_data);
        return view('mobile3/indexl');
    }


    public function tender(){
        $type = input('param.type',0);
        $page = input('param.page',1);
        $num = 3;
        $data = db('cms_tender')->where(['tender_status'=>$type,'authen_status'=>1])->limit(($page-1)*$num,$num)->order('id desc')->select();
        foreach ($data as $key => &$value) {
           $value['create_time'] = date("Y-m-d",$value['create_time']);
        }
        $this->assign('data',$data);
        $this->assign('type',$type);
        $this->assign('meta_title','历下控股招标平台');
        return view('mobile/tender');
    }



    public function company(){
        $this->assign('meta_title','历下控股集团');
        return view('mobile/company');
    }

    public function personnel(){
        $this->assign('meta_title','人才招聘');
        return view('mobile/personnel');
    }



    public function tender_detail(){
        $id = input('param.id');
        $data = db('cms_tender')->where(['id'=>$id])->find();
        db('cms_tender')->where(['id'=>$id])->update(['num'=>$data['num']+1]);
        $data['create_time'] = date("Y-m-d",$data['create_time']);

        $this->assign('data',$data);
        //var_dump($data);exit;
        return view('mobile/qingkasi');
    }

    public function get_lists(){
        $action = input('param.action');
        $type = input('param.type',31);
        $page = input('param.page',1);
        $num = 8;
        switch ($action) {
            case 'news':
                $nav = db('cms_category')->where(['pid'=>24])->select();
                $data = db('cms_article')->where(['pid'=>$type,'authen_status'=>1])->limit(($page-1)*$num,$num)->select();
                $fid = db('cms_category')->where(['id'=>$type])->find();
                $company = db('cms_category')->where(['pid'=>36])->select();
                $dang = db('cms_category')->where(['pid'=>46])->select();
                //dump($fid['thumb']);
                // $this->assign('project',$project);
                $this->assign('dang',$dang);
                $this->assign('company',$company);
                $this->assign('action','news');
                $this->assign('h_title',$fid['title']);
                $this->assign('fid',$fid['thumb']);
                $this->assign('type',$type);
                $this->assign('data',$data);
                $this->assign('nav',$nav);
                $this->assign('meta_title','历下控股集团');
                $this->assign('meta_title','新闻列表');
                return view('mobile3/list');
                break;
            case 'project':
                //$nav = db('cms_category')->where(['pid'=>24])->select();
                $data = db('cms_article')->where(['pid'=>23,'authen_status'=>1])->limit(($page-1)*$num,$num)->select();
                $fid = db('cms_category')->where(['id'=>30])->find();
                $nav = array();
                array_push($nav,['id'=>27,'title'=>'集团项目','thumb'=>$fid['thumb']]);
                $company = db('cms_category')->where(['pid'=>36])->select();
                $dang = db('cms_category')->where(['pid'=>46])->select();
                // $this->assign('project',$project);
                $this->assign('dang',$dang);
                $this->assign('company',$company);
                $this->assign('action','project');
                $this->assign('h_title',"集团项目");
                $this->assign('fid',$fid['thumb']);
                $this->assign('type',$type);
                $this->assign('data',$data);
                $this->assign('nav',$nav);
                $this->assign('meta_title','历下控股集团');
                $this->assign('meta_title','集团项目');
                return view('mobile3/list');
                break;
            case 'dang':
                $nav = db('cms_category')->where(['pid'=>46])->select();
                $data = db('cms_article')->where(['pid'=>$type,'authen_status'=>1])->limit(($page-1)*$num,$num)->select();
                $fid = db('cms_category')->where(['id'=>$type])->find();
                $cover = db('cms_category')->where(['id'=>46])->find();
                $company = db('cms_category')->where(['pid'=>36])->select();
                $dang = db('cms_category')->where(['pid'=>46])->select();
                $this->assign('dang',$dang);
                $this->assign('company',$company);
                $this->assign('action','dang');
                $this->assign('h_title',$fid['title']);
                $this->assign('fid',$cover['thumb']);
                $this->assign('type',$type);
                $this->assign('data',$data);
                $this->assign('nav',$nav);
                $this->assign('meta_title','历下控股集团');
                $this->assign('meta_title','党务工作');
                return view('mobile3/list');
                break;
            
            default:
                # code...
                break;
        }
    }


    public function new_detail(){
        $id = input('param.id');
        $type = input('param.type');
        $nav = db('cms_category')->where(['pid'=>24])->select();
        if($type){
            $data = db('cms_article')->where(['pid'=>$id])->find();
            //dump($data);exit;
        }else{
            $data = db('cms_article')->where(['id'=>$id])->find();
        }
        $company = db('cms_category')->where(['pid'=>36])->select();
        $dang = db('cms_category')->where(['pid'=>46])->select();
        // $this->assign('project',$project);
        $this->assign('dang',$dang);
        $this->assign('company',$company);
        $this->assign('nav',$nav);
        $this->assign('data',$data);
        return view('mobile3/detail');
    }

    public function test1(){
        return json_encode(['code1'=>1]);
    }
}