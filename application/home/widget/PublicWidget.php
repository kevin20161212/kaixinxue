<?php
namespace App\Home\Widget;
use Think\Controller;
/**
 * 
 */
class PublicWidget extends Controller
{
	
	public function deng_lu(){
		$view   = new \think\View();
		return $view->fetch('temp/denglu');
	}

	public function zhuce(){
		$view   = new \think\View();
		return $view->fetch('temp/zhuce');
	}

	public function get_bottom(){
		$view   = new \think\View();
		$data = db('home_district')->where(['status'=>1,'apid'=>['>',0]])->order('intial asc')->select();
		$picture = C('QR_WEIXIN');
		$url  = db('admin_upload')->where(['id'=>$picture])->value('path');
		$this->assign('menu','hello');
		$this->assign('url',$url);
		return $view->fetch('temp/bottom');
	}

	public function get_top2(){
		$view   = new \think\View();
		$data = db('home_keyword')->where(['status'=>1])->limit(8)->order('id desc,sort desc')->select();
		$this->assign('data', $data);
		return $this->fetch('temp/top2');
	}
}