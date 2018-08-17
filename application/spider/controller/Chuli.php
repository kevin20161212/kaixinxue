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
class Chuli extends Indexback
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
   
   
   
   
   
   
	/*
	将选时推送用户的选择时间段转化成当天时间戳用于判断是否该推送
	*/
	public function time_change(){
		$user = Db::name('home_member')->where(array('status'=>1,'export_status'=>1,'push_time_type'=>2))->select();
		if($user){
			foreach($user as $k=>$v){
				$starttime = date("Y-m-d").' '.$v['push_starttime'];			  
				$endtime = date("Y-m-d").' '.$v['push_endtime'];
				$data['starttime'] = strtotime($starttime);
				$data['endtime'] = strtotime($endtime);
				Db::name('home_member')->where(array('id'=>$v['id']))->update($data);
			}
		}
	}

	public function sh(){
		exec('/alidata/www/spider.youfai.cn/cedo.sh');
	}
   
   
	public function class_push(){				
		$member = D('Home/HomeMember');
		$push_users = $member->class_push_user();       
		foreach($push_users as $k=>$v){
		    $user_key = D('Home/HomeSubscriptionGroup')->user_key($v['id']);
            $push_content = D('Home/HomeContent')->push_content($v['starttime'],$v['endtime'],$user_key);
            $push_type = explode(',', $v['push_type']);
            foreach($push_type as $kay=>$value){				
				if($value == 3){//短信推送
					$num = count($push_content);					
					$this->sms_class_push($num,$v['id']);					
				}elseif($value == 2){//邮件推送
					
				}elseif($value == 1){//微信推送										
					foreach($push_content as $ke=>$va){							
						$this->wx_push($va['id'],$v['id']);
					}
				}
			}
            $where['id'] = $v['id'];
            $data['today_push'] = date("Y/m/d");
            D('Home/HomeMember')->edit($data,$where);			
		}
	}
   
   
         
}
