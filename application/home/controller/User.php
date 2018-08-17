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
use app\home\controller\Base;  
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class User extends Base
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function modify(){  

        return view('modifypwd');
    }

    public function reset(){
        $data = input('param.');
        $model = model('HomeMember');
        $info = $model->getInfo(['mobile'=>$data['mobile']]);
        if(!$info){
            return $this->error('该手机号未注册账号');
        }
        if(!captcha_check($data['verifyCode'])) {
                // 校验失败
            return $this->error('验证码不正确');
        }
        $re = $this->send_code1($data['mobile']);
    }

    /**
     * 提交重置信息
     * @return [type] [description]
     */
    public function subReset(){
        $mobile = input('get.mobile');
        if(request()->isPost()){
            $data = input('post.');
            $verifyInfo = model('HomeUserPhontCode')->getInfo(['mobile'=>$data['mobile']]);
            if(isset($verifyInfo)&&($verifyInfo['code']!=$data['code'])) {
                // 校验失败
                return $this->error('短信验证码不正确');
            }
            elseif(!captcha_check($data['verifyCode'])) {
                    // 校验失败
                return $this->error('图形验证码不正确');
            }else{
                $data['last_time'] = time();
                $data['password'] = md5($data['password']);
                $model = model('HomeMember')->edit($data,['id'=>$verifyInfo['uid']]);
                if($model){
                    return $this->success('重置密码成功'); 
                }else{
                    return $this->error('重置密码失败');
                }
            }
        }
        $this->assign('mobile',$mobile);
        return view('resetpwd'); 
    }

    /**
     * 个人中心
     * @return [type] [description]
     */
    public function myinfo(){
        $uid =session('uid');
        if(request()->isPost()){
            $model = model('HomeSubscriptionGroup');
            $param = input('param.');
            $content = implode(',', $param['sub_words']);
            $order_num = $model->createOrderNum();
            $data = [
                'uid' => $uid,
                'content' => $content,
            ];
            if($param['id']>0){
                $edit_id = $model->edit($data,['id'=>$param['id']]);
                if($edit_id>0){
                    return $this->success('修改订阅成功！');
                }
            }else{
                $id = $model->add($data);
            }
            if($id){
                $model_records = model('HomePaymentRecords');
                $data_records = [
                    'order_num' => $order_num,
                    'money' => 10,
                    'group_id' => $id,
                    'uid' => $uid,
                ];
                $model_records->add($data_records);
                $wxurl = $this->pay($order_num);
                return json(['wxurl'=>$wxurl,'order_num'=>$order_num]);
            }else{
                return $this->error('订阅失败！');
            }
        }
        $data_city = model('HomeDistrict')->lists();
        $modelSub = model('HomeSubscriptionGroup');
        $where = [
            'uid'=>$uid,
        ];
        $lists = model('HomeView')->lists($uid,10,1);
        $price_standar = C("PRICE_STANDAR");
        $subData = $modelSub->lists($size=0,$where);
        $userinfo = model("HomeMember")->getInfo(['id'=>$uid]);
        $this->assign('lists',$lists['data']);
        $this->assign('price_standar',$price_standar);
        $this->assign('userinfo',$userinfo);
        $this->assign('wxurl','');
        $this->assign('data_city',$data_city);
        $this->assign('subData',$subData);
        return view('dingyue/dingyue');
    }

    /**
     * 支付
     */
    public function pay($order_id){
        ini_set('date.timezone', 'Asia/Shanghai');
        \think\Loader::import('wxpay.Autoloader');
        $notify = new \NativePay();
        //模式二
        /**
         * 流程：
         * 1、调用统一下单，取得code_url，生成二维码
         * 2、用户扫描二维码，进行支付
         * 3、支付完成之后，微信服务器会通知支付成功
         * 4、在支付成功通知中需要查单确认是否真正支付成功（见：wxpayNotify方法）
         */
        $input  = new \WxPayUnifiedOrder();
        $input->SetBody("投标助手");
        $input->SetOut_trade_no($order_id);
        $input->SetTotal_fee(0.1*100);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 300));//有效期最少5分钟
        $input->SetGoods_tag("订阅关键词");
        $url    = \think\Url::build('wxpayNotify', '', true, true);
        $input->SetNotify_url($url);
        $input->SetTrade_type("NATIVE");
        $input->SetProduct_id("100");
        $result = $notify->GetPayUrl($input);
        $url2   = $result["code_url"];
        return $url2;
    }

    /**
     * 微信通知页面。
     */
    public function wxpayNotify() {
        ini_set('date.timezone', 'Asia/Shanghai');
        \think\Loader::import('wxpay.Autoloader');
        error_reporting(E_ERROR);

        //初始化日志
        $logHandler = new \CLogFileHandler("../logs/" . date('Y-m-d') . '.log');
        \Log::Init($logHandler, 15);
        \Log::DEBUG("begin notify");
        
        //在PayNotifyCallBack中重写了NotifyProcess，会发起一个订单支付状态查询，其实也可以不去查询，因为从php://input中已经可以获取到订单状态。file_get_contents("php://input")
        //$notify = new \WxPayNotify();
        $notify = new \PayNotifyCallBack();
        $notify->Handle(false);
        $result = $notify->GetValues();
        if ($result['return_code'] == 'SUCCESS') {
            //订单支付完成，修改订单状态，发货。
        }
        \Log::DEBUG("end notify");
        \Log::INFO(str_repeat("=", 20));
    }

    /**
     * 订单查询
     */
    public function order_search(){
        $order_num = input('param.order_num');
        ini_set('date.timezone', 'Asia/Shanghai');
        \think\Loader::import('wxpay.Autoloader');
        if(isset($order_num) && $order_num!= ""){
            $order_num = $_REQUEST["order_num"];
            $input = new \WxPayOrderQuery();
            $input->SetOut_trade_no($order_num);
            $data = \WxPayApi::orderQuery($input);
            if($data["return_code"] == 'FAIL'){
                return $this->error( $order_num);
            }elseif($data["result_code"] == 'FAIL'){
                return $this->error( $order_num);
            }else{
                $res = $data['trade_state'];
                switch ($res) {
                    case 'SUCCESS':
                    //修改订单状态
                        $re = model('HomePaymentRecords')->edit(['pay_status'=>1,'pay_type'=>1],['order_num'=>$order_num]);
                        $result = model('HomePaymentRecords')->get_one(['order_num'=>$order_num]);
                        model('HomeSubscriptionGroup')->edit(['status'=>1],['id'=>$result['group_id']]);
                        return $this->success('支付成功');
                        break;
                    case 'NOYPAY':
                        return $this->error('支付失败');
                        break; 
                    default:
                        return $this->error('支付失败');
                        break;
                }
            }
        }
    }
    /**
     * 删除订阅内容
     */
    public function del_sub(){
        $id = input('param.id');
        $re = model('HomeSubscriptionGroup')->del(['id'=>$id]);
        if($re){
            return $this->success('删除成功');
        }else{
            return $this->error('删除失败');
        }
    }

    /**
     * 编辑订阅
     */
    public function edit_sub(){
        $id = input('param.id');
        $data = model('HomeSubscriptionGroup')->getOne($id);
        return json(['code'=>1,'data'=>$data]);
    }

    /**
     * 账号管理
     */
    public function resetAccount(){
        $data = input('param.');
        if(cookie($data['mobile'])!=$data['code']){
            return $this->error('短信验证码错误');
        }
        $data['last_time'] = time();
        $model = model('HomeMember');
        $info = $model->getInfo(['id'=>session('uid')]);
        if(md5($data['password'])!=$info['password']){
            return $this->error('原密码错误');
        }
        $data['password'] = md5($data['newpassword']);
        $re = $model->edit($data,['id'=>session('uid')]);
        if($re){
            return $this->success('修改成功');
        }else{
            return $this->error('修改失败');
        }
    } 
    /**
     * 推送设置
     */
    public function push_set(){
        $data = input('param.');
        $uid = session('uid');
        $model = model('HomeMember');
        $push_type = implode(',',$data['like']);
        if(!isset($data['push_time_type'])){
            $push_time_type = 2;
        }else{
            $push_time_type = $data['push_time_type'];
        }
        $data1 = [
            'push_starttime' => $data['push_starttime'],
            'push_endtime' => $data['push_endtime'],
            'push_time_type' => $push_time_type,
            'push_type' => $push_type,
        ];
        $id = $model->edit($data1,['id'=>$uid]);
        if($id){
            return $this->success('设置成功');
        }else{
            return $this->error('设置失败');
        }
    }

    public function get_ajax(){
        $uid = session('uid'); 
        $page = input('param.page',1);
        $modle = model('HomeView');
        $num=10;
        $lists = $modle->lists($uid,$num,$page);
        return json_encode(['code'=>1,'num'=>$lists['num'],'data'=>$lists['data']]);
    }

    public function get_ajax_push(){
        $uid = session('uid'); 
        $page = input('param.page',1);
        $modle = model('HomePush');
        $num=10;
        $lists = $modle->lists($uid,$num,$page);
        return json_encode(['code'=>1,'num'=>$lists['num'],'data'=>$lists['data']]);
    }
}
