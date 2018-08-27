<?php

namespace app\api\controller;
/**
 * 工具
 */
class Tool extends Base{
	
	/**
	 * 地区
	 * @return [type] [description]
	 */
	public function district(){
		$level_one = db('merchant_district')->field('id,name,upid')->where('level',1)->select();
		$level_two = db('merchant_district')->field('id,name,upid')->where('level',2)->select();
		$level_three = db('merchant_district')->field('id,name,upid')->where('level',3)->select();
		$index2 = 0;
		foreach ($level_two as &$valu) {
			foreach ($level_three as $v) {
				if($valu['id'] == $v['upid']){
					$v['index'] = $index2;
					$index2++;
					$valu['sub'][] = $v;
				}
			}
			$index2 = 0;
		}
		$index = 0;
		$index1 = 0;
		foreach ($level_one as &$value) {
			$value['index'] = $index;
			$index++;
			foreach ($level_two as  &$val) {
				if($value['id'] == $val['upid']){
					$val['index'] = $index1;
					$value['sub'][] = $val; 
					$index1++;
				}
			}
			$index1 = 0;
		}
		//$level_one = json_encode($level_one,JSON_UNESCAPED_UNICODE);
		return $this->data($level_one,1,'获取数据成功');
	}

	/**
	 * 获取地区名
	 */
	public function get_district_name($id){
		$data = model('Tool')->get_district_name($id);
		return $data;
	}
	
}