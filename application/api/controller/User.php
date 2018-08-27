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
				return $this->data([],4,'手机号已注册');
			}else{
				return $this->data($result,1,'注册成功');
			}
		}else{
			return $this->error('注册失败');
		}
	}


	/**
	 * 用户登录
	 */
	public function login(){
		$mobile = input('mobile');
		$password = input('password');
		if(!$mobile){
			return $this->error('请输入账号');
		}
		if(!$password){
			return $this->error('请输入正确密码');
		}else{
			$info = model('user')->get_user_info(['mobile'=>$mobile]);
			if($info){
				if(user_md5($password)!=$info['password']){
					return $this->error('密码错误');
			    }
			}else{
				return $this->data([],2,'该账号还未注册,请选注册');
			}
		}
		$result = model('user')->login($mobile,user_md5($password));
		if($result){
			if($result == 3){
				return $this->error('用户被禁用');
			}
			return $this->data($result,1,'登录成功');
		}else{
			return $this->error('登录失败');
		}
	}
	
}