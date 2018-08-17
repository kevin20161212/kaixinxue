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

namespace app\spider\controller;
use think\Controller;
use think\Request;
// use think\Cache;
use phpspider\autoloader;
use phpspider\core\phpspider;
use think\Db;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Chuli extends Controller
{
	private static $cont = '';
	private static $is = 0;
   public function duqu(){
		$file = './public/qiushibaike.sql';
		if(file_exists($file)){
			$_sql = file_get_contents($file);
			$_arr = explode('");', $_sql);
			foreach($_arr as $k=>$v){
				$arr = explode('("', $v);
				$content = explode('","', $arr[1]);				
				$db[$k]['title'] = $this->qu_kong($content[0]);
				$db[$k]['content'] =$this->qu_kong($content[1]);				
				$db[$k]['time'] = $this->qu_kong($content[2]);
				$db[$k]['url'] = $this->qu_kong($content[3]);				
				if($db[$k]['title'] == null || $db[$k]['content'] == null || $db[$k]['time'] == null || $db[$k]['url'] == null){
					array_splice($db,$k);//删除数组中的空数组
				}
				 if(strstr($db[$k]['content'],"<!－")){
					 array_splice($db,$k);
				 }
				
			}
	
			foreach($db as $k=>$v){
				$find = Db::name('home_content')->where(array('title'=>array(array('eq',$v['title']),array('like','%'.$v['title'].'%'), 'or')))->find();
				if(!$find){
					$add = M('home_content')->add(array('title'=>$v['title'],'content'=>$v['content'],'time'=>$v['time'],'url'=>$v['url']));
				}
			}
			
		}else{
			return false;
		}
		
   }
   
   
   public function qu_kong($value){  //去除字符串首尾空格
		$value = mb_ereg_replace('^(　| )+', '', $value);
		$value = mb_ereg_replace('(　| )+$', '', $value);
		$value = mb_ereg_replace('　　', "\n　　", $value);
		return $value;
   }
   
   // public function c(){
	   // $value = '1<!－－>1';
	   // $a = $this->ceshi($value);
	   // echo $a;
   // }
   
   // public function ceshi($value){
		
		// if(strstr($value,"<!－")){			
			// $most_star = 1;
			// $most_ebd = strlen($value);
			// $star = strpos($value,"<");
	
            // $end = 	strpos($value,">");			
            // $s = substr($value,$most_star,$star);
			// $e = substr($value,$end,$most_ebd);									
            // $value = $s.$e;	
		 
		    // $this->ceshi($value);
		 // }else{
			  // return $value;
		 // }
		 
		// //echo substr("Hello world",1,8)."<br>"
   // }
}
