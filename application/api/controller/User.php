<?php

namespace app\api\controller;
/**
 * 用户类
 */
class User extends Base{
	
	/**
	 * 用户注册
	 * @return [type] [description]
	 */
	public function register(){
		$mobile = input('mobile',0);
		//$verification_code = input('verification_code','');
		$password = input('password','');
		$password_again = input('password_again','');
		if(!is_mobile($mobile)){
			return $this->error('请输入正确手机号码');
		}
		if(!$password){
			return $this->error('请输入正确密码');
		}
		if($password != $password_again){
			return $this->error('两次密码不一致');
		}
		//$result = Sms::auth_code($mobile,$verification_code);
	 	//if(!$result) return $this->error('验证码错误');
		$result = model('user')->user_register($mobile,$password);
		if($result){
			if($result == 2){
				return $this->result([],4,'手机号已注册');
			}else{
				return $this->result($result,1,'注册成功');
			}
		}else{
			return $this->error('注册失败');
		}
	}
	
}