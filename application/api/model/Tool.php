<?php
namespace app\api\model;
use think\Model;
class Tool extends Model
{	
	/**
	 *获取地区
	 * 
	 */
	public function get_district_name($id){
		$data = db('merchant_district')->where(['id'=>$id])->find();
		return $data['name'];
	}
	
}