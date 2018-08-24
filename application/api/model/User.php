<?php
namespace app\api\model;
use think\Model;
class User extends Model
{	
	/**
	 * 修改用户令牌token
	 * 
	 */
	public function updateToken($uid,$rand,$token){
		$result = db('app_user')->where('uid',$uid)->update(['rand'=> $rand,'token'=>$token]);
		if($result >= 0){
			return true;
		}
		return false;
	}

	/**
	 * 用户注册
	 * @param  [type] $mobile   [description]
	 * @param  [type] $password [description]
	 * @return [type]           [description]
	 */
	public function user_register($mobile,$password)
	{   
		$user = db('app_user')->where(['mobile'=>$mobile])->find();
		if($user){
			return 2;//该手机号已注册
		}
		dump(214324);exit;
		$id = db('app_user')->insertGetId(['user_name'=>$mobile,'nikname'=>$mobile,'mobile'=>$mobile,'password'=>$password]);
		if($id){
			$rand = rand_string(6);
			$token = init_token($id,$rand);
			if(!empty($token)){
				$this->updateToken($id,$rand,$token);
			}
			$userinfo = db('app_user')->where(['id'=>$id])->find();
			return $userinfo;
		}else{
			return false;
		}
		
	}
}