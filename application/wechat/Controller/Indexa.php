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
namespace app\wechat\controller;
use app\weixin\controller\Loginbase;
// use app\common\controller\Controller;
// use app\member\controller\Base;
// use think\Db;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Indexa extends Loginbase
{

    public function _initialize()
    {
        parent::_initialize();
        $this->userinfo =  session('user_auth');
        $this->assign('userinfo',$this->userinfo);
        $this->assign('meta_title','在线预约平台');
        // dump($this->userinfo);
        // dump(is_logins());
        // exit;
        // $this->usercard =  db('zbk_wx_users')->where(array('id'=>1))->find();
    }
       // 获取jsticket 两小时有效
    private function getjsticket(){ // 只允许本类调用，继承的都不可以调用，公开调用就更不可以了
        $access_token = S('accesstoken');

        $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=".$access_token."&type=jsapi"; // 两小时有效
        $rurl = file_get_contents($url);
        $rurl = json_decode($rurl,true);
        if($rurl['errcode'] != 0){
            return false;
        }else{
            $jsticket = $rurl['ticket'];
            return $jsticket;
        }
    }
    // 获取 signature
    Public function getsignature($time){
        $noncestr = 'youfankeji';
        $jsapi_ticket = $this->getjsticket();
        $timestamp = $time;
        $url = 'http://zhibaoka.youfai.cn/member/indexa/index.html';
        $string1 = 'jsapi_ticket='.$jsapi_ticket.'&noncestr='.$noncestr.'&timestamp='.$timestamp.'&url='.$url;

         // dump($string1);exit;
        $signature = sha1($string1);
        return $signature;
    }
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index()
    {
  
		
		// dump();exit;
        if(request()->isPost()){
            
            $url = "http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=".$access_token."&media_id=".input('param.imgtwos');
            
            $map['id'] = input('param.card');
            $map['status'] = 1;
            $map['type'] = 1;
            $map['uid'] = is_logins();
            $istr = D('zbk_card')->itemfinds($map);
            if(!$istr){
                $this->error('卡号已失效');
            }
            if(!input('param.tel') || !input('param.bz') || !input('param.addressid')){
                $this->error('请完善提交信息');
            }
            if(!input('param.addresids')){
                $this->error('所选区域暂未开通');
            }
            if(!input('param.imgones') || !input('param.imgtwos')){
                $this->error('请上传门锁拍照图');
            }
           $addres = explode("-", input('param.addresids')) ;
            if($addres[0] == 'undefined'){
                $this->error("数据错误");
            }elseif($addres[1] == 'undefined'){
                 $addressid['id'] = $addres[0];
            }else{
                 $addressid['id'] = $addres[1];
            }
            $isadddress = D('zbk_business_address')->itemfinds($addressid);
            // if($isadddress['address_id'] == 0){
            //     $this->error("卡号已失效");
            // }
            if(!$isadddress){
                 $this->error("该城市暂未开通");
            }
            unset($map);
            $accesstoken = S('accesstoken');
			if(input('param.imgones')){
				$savePathFile1 = './uploads/zbk/'.date('YmdHis').'1.jpg';  
				$targetName = $savePathFile1;  
				$ch = curl_init();  
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');  
				$fp = fopen($targetName,'wb');  
				curl_setopt($ch,CURLOPT_URL,'http://file.api.weixin.qq.com/cgi-bin/media/get?access_token='.$accessToken.'&media_id='.input('param.imgones'));  
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			
				curl_setopt($ch,CURLOPT_FILE,$fp);  
					curl_setopt($ch,CURLOPT_HEADER,0);
								
				curl_exec($ch);  
				curl_close($ch);  
				fclose($fp);
			}
			if(input('param.imgtwos')){
				$savePathFile2 = './uploads/zbk/'.date('YmdHis').'2.jpg';  
				$targetName = $savePathFile2;  
				$ch = curl_init();  
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');  
				$fp = fopen($targetName,'wb');  
				curl_setopt($ch,CURLOPT_URL,'http://file.api.weixin.qq.com/cgi-bin/media/get?access_token='.$accessToken.'&media_id='.input('param.imgtwos'));  
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			
				curl_setopt($ch,CURLOPT_FILE,$fp);  
					curl_setopt($ch,CURLOPT_HEADER,0);
								
				curl_exec($ch);  
				curl_close($ch);  
				fclose($fp);
			}  

			
			
			
			
			$map['uid'] = is_logins();
            $map['card_id'] = input('param.card');
            $map['card'] = $istr['card'];
            $map['card_address_id'] = $istr['address_id'];
            $map['order_address_id'] = $addressid['id'];
            $map['address'] =  input('param.addressid').input('param.address');
            $map['picture'] =  serialize(array(0=>$savePathFile1,1=>$savePathFile2));
            $map['lx_tel'] = input('param.tel');
			$map['lx_name'] = input('param.lx_name');
            $map['marks'] = input('param.bz');
            $map['create_time'] =  time();
            $res = D('zbk_appointment_order')->editcat(false,$map);
            if($res){
                $this->success('提交成功',U('times',array('id' => $res)));
            }else{
                $this->error('系统繁忙，请稍后重试');
            }
            
        }
	
        $address= D('zbk_business_address')->treelists();
        foreach ($address as $key => &$value) {
            $value['value'] = $value['id'];
            $value['text'] = $value['title'];
            foreach ($value['children'] as $k2 => &$v2) {
                $v2['value'] = $v2['id'];
                $v2['text'] = $v2['title'];
                foreach ($v2['children'] as $k3 => &$v3) {
                    $v3['value'] = $v3['id'];
                    $v3['text'] = $v3['title'];
                }
            }
        }

            $config['time'] = time();
            $config['appid'] =  C('APPID');
            $config['nonceStr'] = 'youfankeji';
            $config['sign'] = $this->getsignature($config['time']);
			$config['jsapi_ticket'] = $this->getjsticket(); 
      
		
		$usercards = D('zbk_card')->getusercard();
        $this->assign('address',json_encode($address));
        $this->assign('usercard',$usercards);
        $this->assign('config',$config);
        $this->display();
    }
    // 用户选择预约时间
    public function times($id)
    {

        $res = D('zbk_appointment_order')->itemfind($id);
        if($res['uid'] != is_logins()){
            $this->error('非法访问');
        }
        if(request()->isPost()){
            // 提交订单
            $map['id'] = $id;
            $map['yuyue_time'] = input('param.yuyue_time');
            $rest = D('zbk_appointment_order')->editcat(true,$map);
            unset($map);
            $map['id'] = $res['card_id'];
            $map['type'] = 2;
            $resa = D('zbk_card')->editcat(true,$map);
            if($rest){
                $this->success('您预约时间为'.$map['yuyue_time']);
            }else{
                $this->error('系统繁忙，请稍后重试');
            }
        }
        $day = C('YUYUE_DAY');
        for ($i=0; $i <$day ; $i++) { 
            # code...
            $days[$i] = date("m/d",strtotime( $i." day"));
        }
        $hou = C('TIME_JIANGE');
        $cha =floor((C('TIME_JIANGE')['amend'] - C('TIME_JIANGE')['amstart'])*60/C('TIME_JIANGE')['jiange']);
        for ($i=0; $i <$cha ; $i++) { 
            $start = C('TIME_JIANGE')['amstart']+$i*C('TIME_JIANGE')['jiange']/60;
            $end = C('TIME_JIANGE')['amstart']+($i+1)*C('TIME_JIANGE')['jiange']/60;
            $starts = explode(".", $start);
            $ends = explode(".", $end);
            if($starts[1]){
                $starttime = $starts[0].":".substr($starts[1]*60,0,2);
            }else{
                $starttime = $starts[0].":00";
            }
            if($ends[1]){
                $endstime = $ends[0].":".substr($ends[1]*60,0,2);
            }else{
                 $endstime = $ends[0].":00";
            }
           $am[$i]['value'] = $starttime."-".$endstime;
           $am[$i]['text'] = $starttime."-".$endstime;
        }
        $cha =floor((C('TIME_JIANGE')['pmend'] - C('TIME_JIANGE')['amstart'])*60/C('TIME_JIANGE')['jiange']);
        for ($i=0; $i <$cha ; $i++) { 
            $start = C('TIME_JIANGE')['pmstart']+$i*C('TIME_JIANGE')['jiange']/60;
            $end = C('TIME_JIANGE')['apmstart']+($i+1)*C('TIME_JIANGE')['jiange']/60;
            $starts = explode(".", $start);
            $ends = explode(".", $end);
            if($starts[1]){
                $starttime = $starts[0].":".substr($starts[1]*60,0,2);
            }else{
                $starttime = $starts[0].":00";
            }
            if($ends[1]){
                $endstime = $ends[0].":".substr($ends[1]*60,0,2);
            }else{
                 $endstime = $ends[0].":00";
            }
           $pm[$i]['value'] = $starttime."-".$endstime;
           $pm[$i]['text'] = $starttime."-".$endstime;
        }
         $this->assign('am',json_encode($am));
         $this->assign('pm',json_encode($pm));
         $this->assign('sum',$sum);
         $this->assign('days',$days);

         $this->assign('id',$id);
         $this->assign('order',$res);
        $this->display();
    }
    // 校验用户输入卡是否有效
    public function jiaoyan()
    {
        if(request()->isPost()){
            $map['card'] = input('param.kahao');
            $map['password'] = input('param.kami');
            $map['status'] = 1;
            $map['type'] = 1;
            $map['uid'] = 0;
            $istr = D('zbk_card')->itemfinds($map);
            // dump($istr);exit;
            if($istr){
                $data['uid'] = is_logins();
                $data['id'] = $istr['id'];
                $res = D('zbk_card')->editcat( true,$data);
                if($res){
                    $this->success('校验成功','',array('ids'=>$istr['id']));
                }else{
                    $this->error('系统繁忙，请稍后重试');
                }
            }else{
                $this->error('卡号有误！');
            }
        }
    }
    // 上传图片
    public function uploads()
    {       

		if(request()->isPost()){
            $return = json_encode(D('Admin/Upload')->upload());
            exit($return);
            // exit;
        }
        $this->assign('shanghus',$shanghulists);
        $this->display();
    }
    // 会员中心
    public function member(){

        $sum = db('zbk_appointment_order')->where(array("uid"=>is_logins()))->count();
         $this->assign('sum',$sum);
        // dump($sum);exit;
         $this->display();
    }
   // 会员中心
    public function order1(){

        $order = db('zbk_appointment_order')->where(array("uid"=>is_logins(),'type'=>1))->select();
        $order2 = db('zbk_appointment_order')->where(array("uid"=>is_logins(),'type'=>2))->count();
        $order3 = db('zbk_appointment_order')->where(array("uid"=>is_logins(),'type'=>3))->count();
         $this->assign('order',$order);
         $this->assign('count',count($order));
         $this->assign('count2',$order2);
         $this->assign('count3',$order3);
        // dump($sum);exit;
         $this->display();
    }
    // 评价
    public function order2(){

        $order = db('zbk_appointment_order')->where(array("uid"=>is_logins(),'type'=>3))->select();
        foreach($order as $k=>$v){
			$id = $v['wx_id'];
			$wx_user = M('zbk_wx_users')->where(array('id'=>$id))->find();
			$order[$k]['wx_name'] = $wx_user['true_name'];
			$order[$k]['wx_phone'] = $wx_user['phone'];
		}
		
		$order2 = db('zbk_appointment_order')->where(array("uid"=>is_logins(),'type'=>2))->count();
        $order3 = db('zbk_appointment_order')->where(array("uid"=>is_logins(),'type'=>1))->count();
         $this->assign('order',$order);
         $this->assign('count3',count($order));
         $this->assign('count2',$order2);
         $this->assign('count',$order3);
        // dump($sum);exit;
         $this->display();
    }
    // 已接单
    public function order3(){

        $order = db('zbk_appointment_order')->where(array("uid"=>is_logins(),'type'=>2))->select();
        $order2 = db('zbk_appointment_order')->where(array("uid"=>is_logins(),'type'=>3))->count();
        $order3 = db('zbk_appointment_order')->where(array("uid"=>is_logins(),'type'=>1))->count();
         $this->assign('order',$order);
         $this->assign('count2',count($order));
         $this->assign('count3',$order2);
         $this->assign('count',$order3);
        // dump($sum);exit;
         $this->display();
    }
	
	public function pinglun($id){	
	
		$this->assign('id',$id);
		$this->display();
	}
	public function pinglunn(){
			$id = $_POST['id'];
			$data['pinglun'] = $_POST['pinglun'];
			$content = M('zbk_appointment_order')->where(array('id'=>$id))->save($data);
			if($content){
				$this->success('评论成功');
			}else{
				$this->error('评论失败！');
			}		  

	}
	  public function curlpost($url,$data){
    // 二维码尺寸255*255
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }
}
