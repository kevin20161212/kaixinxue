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
use app\common\controller\Ali;
use think\Controller;
use think\Request;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Index extends Controller
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index(){
        exit;
        $page1 = C('WEB_INTRODUCE');
        $page2 = C('WEB_INTRODUCE2');
        $page3 = C('WEB_INTRODUCE3');
        $hotKey  = input('param.hotKey');
        $extraKey = input('param.extraKey');
        $data = input('param.');
        $model = model('HomeContent');
        $keyword = db('home_keyword')->where(['status'=>1])->limit(8)->order('id desc,sort desc')->select();
        $select_time = ['近一周'=>strtotime('-7 days'),'近一月'=>strtotime("-1 month"),'近三月'=>strtotime("-3 month"),'近一年'=>strtotime("-1 year")];
        $info_type = ['招标','中标','变更'];
        $where = [];
        $where['status'] = 1;
        if($hotKey){
            $where['title'] = ['like','%'.$hotKey.'%'];
        }
        if($data['cityName']){
            $where['areaid'] = $data['cityName'];
        }
        if($data['timeType']){
            $where['time'] = array('gt',$select_time[$data['timeType']]);
        }
        if($mesType){
             $where['noticetype'] = $mesType;
        }
        $lists = $model->get_lists($where);
        $count = $model->where($where)->count();
        $data_city = model('HomeDistrict')->lists();
        $post1 = model('HomeDemands')->getLists(0,['type'=>1],'id desc');
        $post2 = model('HomeDemands')->getLists(0,['type'=>2],'id desc');
        $sub_group = model("HomeSubscriptionGroup")->lists(0,['uid'=>session('uid')],'',2);
        $sub_group = isset($sub_group) ? $sub_group : [];
        $this->assign('page1',$page1);
        $this->assign('page2',$page2);
        $this->assign('page3',$page3);
        $this->assign('count',$count);
        $this->assign('sub_group',$sub_group);
        $this->assign('post1',$post1);
        $this->assign('post2',$post2);
        $this->assign('data_city',$data_city);
        $this->assign('info_type',$info_type);
        $this->assign('select_time',$select_time);
        $this->assign('keyword',$keyword);
        $this->assign('list',$lists);
        $this->assign('extraKey',$extraKey);
        $this->assign('meta_title', "首页");


        $this->assign('hotKey', $hotKey);
        return view('index');
    }

    public function detail(){
        $id = input('param.id');
        $uid = session('uid');
        if($uid){
            $info = [
                'uid' => $uid,
                'tend_id' => $id,
            ];
            model("HomeView")->del($info);
            $re = model("HomeView")->add($info);
        }
        $data = model('HomeContent')->detail($id);
        $info = model('HomeContent')->get_one($id);
        $where = [
            'status' => 1,
            'areaid' => $info['areaid'],
            'noticetype'=>$info['noticetype'],
        ];
        $picture = C('QR_WEIXIN');
        $url  = db('admin_upload')->where(['id'=>$picture])->value('path');
        $this->assign('url',$url);
        $similar = model('HomeContent')->get_lists($where,10);
        //dump($similar);
        $this->assign('similar',$similar);
        $this->assign('data',$data);
        return view('index/tenderdetail');  
    }

    public function send_code(){
        $mobile = input("param.mobile");
        $code  = $this->generate_code();
        cookie($mobile,$code,60);
        if($_COOKIE[$mobile]){
            dump($_COOKIE);
            $SMS = new Ali();
            $data = $SMS->sendSms1($mobile,$code);
            //dump($data);   
            //给用户发短息
        }else{
            return $this->error('稍后重发');
        }
    }

    public function generate_code($length = 4) {
        return rand(pow(10,($length-1)), pow(10,$length)-1);
    }

    /**
     * @return 注册
     */
    public function register(){
        $data = input('param.');
        $data['password'] = md5($data['password']);
        $map['mobile'] = $data['mobile'];
        $model = model('HomeMember');
        if(isset($_COOKIE[$data['mobile']])){
            $data['create_time'] = time();
            if($_COOKIE[$data['mobile']]==$data['code']){
                $num = $model->getInfo($map);
                if($num){
                    return $this->error('该手机号已存在');
                }else{
                    $id = $model->add($data);
                    if($id){
                        return $this->success('注册成功');
                    }else{
                        return $this->error('注册失败');
                    }
                }
            }else{
                return $this->error('验证码错误');
            }
        }else{
            return $this->error('验证码错误');
        }
    }

    public function login(){
        $mobile = input('param.mobile');
        $password = input('param.password');
        if(!$mobile){
            return $this->error('用户或密码错误');
        }
        $model = model('HomeMember');
        $map=[
            'mobile'=>$mobile,
            'password'=>md5($password),
        ];
        $re = $model->getInfo($map);
        if($re){
            session('username',$re['contact_name']);
            session('uid',$re['id']);
            return $this->success('登录成功');
        }else{
            return $this->error('用户或密码错误');
        }
    }
    public function logout(){
        session('uid',null);
        session('username',null);
        $this->redirect('index');
    }

    public function test(){
        dump($_COOKIE);
    }




    public function isMobile() { 
      // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
      if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
        return true;
      } 
      // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
      if (isset($_SERVER['HTTP_VIA'])) { 
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
      } 
      // 脑残法，判断手机发送的客户端标志,兼容性有待提高。其中'MicroMessenger'是电脑微信
      if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile','MicroMessenger'); 
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
          return true;
        } 
      } 
      // 协议法，因为有可能不准确，放到最后判断
      if (isset ($_SERVER['HTTP_ACCEPT'])) { 
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
          return true;
        } 
      } 
      return false;
    }

}
