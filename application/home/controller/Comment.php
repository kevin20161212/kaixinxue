<?php
namespace app\home\controller;
use app\home\controller\Base; 
/**
 * 回复留言
 */
Class Comment extends Base {
	public function reply(){
		$data = input('param.');
		$data['uid'] = session('uid');
		$id = model('HomeComments')->add($data);
		if($id){
			return $this->success('发表成功');
		}else{
			return $this->error('发表失败');
		}
		dump($id);
	}
} 