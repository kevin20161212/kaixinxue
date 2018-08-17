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
use app\wechat\controller\Loginbase;
// use app\common\controller\Controller;
use app\member\controller\Base;
// use think\Db;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Index extends Loginbase
{

    public function _initialize()
    {
        parent::_initialize();
    }
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index()
    {   dump(config('wqwqwe'));exit;
   //      if(request()->isPost()){
   //          $map['id'] = input('param.card');
   //          $map['status'] = 1;
   //          $map['type'] = 1;
   //          $map['uid'] = is_logins();
   //          $istr = D('zbk_card')->itemfinds($map);
   //          if(!$istr){
   //              $this->error('卡号已失效');
   //          }
   //          if(!input('param.tel') || !input('param.bz') || !input('param.addressid')){
   //              $this->error('请完善提交信息');
   //          }
   //          if(!input('param.addresids')){
   //              $this->error('所选区域暂未开通');
   //          }
   //          if(!input('param.imgones') || !input('param.imgtwos')){
   //              $this->error('请上传门锁拍照图');
   //          }
   //         $addres = explode("-", input('param.addresids')) ;
   //          if($addres[0] == 'undefined'){
   //              $this->error("数据错误");
   //          }elseif($addres[1] == 'undefined'){
   //               $addressid['id'] = $addres[0];
   //          }else{
   //               $addressid['id'] = $addres[1];
   //          }
   //          $isadddress = D('zbk_business_address')->itemfinds($addressid);
   //          // if($isadddress['address_id'] == 0){
   //          //     $this->error("卡号已失效");
   //          // }
   //          if(!$isadddress){
   //               $this->error("该城市暂未开通");
   //          }
   //          unset($map);
   //          $map['uid'] = is_logins();
   //          $map['card_id'] = input('param.card');
   //          $map['card'] = $istr['card'];
   //          $map['card_address_id'] = $istr['address_id'];
   //          $map['order_address_id'] = $addressid['id'];
   //          $map['address'] =  input('param.addressid').input('param.address');
   //          $map['picture'] =  serialize(array(0=>input('param.imgones'),1=>input('param.imgtwos')));
   //          $map['lx_tel'] = input('param.tel');
			// $map['lx_name'] = input('param.lx_name');
   //          $map['marks'] = input('param.bz');
   //          $map['create_time'] =  time();
   //          $res = D('zbk_appointment_order')->editcat(false,$map);
   //          if($res){
   //              $this->success('提交成功',U('times',array('id' => $res)));
   //          }else{
   //              $this->error('系统繁忙，请稍后重试');
   //          }
            
   //      }
   //      $address= D('zbk_business_address')->treelists();
   //      foreach ($address as $key => &$value) {
   //          $value['value'] = $value['id'];
   //          $value['text'] = $value['title'];
   //          foreach ($value['children'] as $k2 => &$v2) {
   //              $v2['value'] = $v2['id'];
   //              $v2['text'] = $v2['title'];
   //              foreach ($v2['children'] as $k3 => &$v3) {
   //                  $v3['value'] = $v3['id'];
   //                  $v3['text'] = $v3['title'];
   //              }
   //          }
   //      }
   //      $usercards = D('zbk_card')->getusercard();
   //      $this->assign('address',json_encode($address));
        // $this->assign('usercard',$usercards);
        $this->display();
    }
  }
