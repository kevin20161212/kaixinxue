<?php
namespace app\home\controller;
use think\Controller;

class Base extends  Controller{

    public function send_code(){
        $mobile = input("param.mobile");
        $code  = $this->generate_code();
        cookie($mobile,$code,60);
        if($_COOKIE[$mobile]){
            dump($_COOKIE);
            //给用户发短息
        }else{
            return $this->error('稍后重发');
        }
    }

    public function generate_code($length = 4) {
        return rand(pow(10,($length-1)), pow(10,$length)-1);
    }

    public function send_code1($mobile){
        $code  = $this->generate_code();
        $useInfo = model('HomeMember')->getInfo(['mobile'=>$mobile]);
        if($useInfo){
            $data = [
                'code' => $code,
                'mobile' => $mobile,
                'uid' => $useInfo['id'],
                'create_time' => time(),
            ];
            $re = model('HomeUserPhontCode')->add($data);
            return $this->success('发送成功');
        }else{
            return $this->error('稍后重发');
        }
    }
    
}