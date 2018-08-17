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

namespace app\Home\Model;
use think\Model;
use app\home\model\HomeMember;
use think\Db;
/**
 * 默认模型
 * @author youfai.cn <280962430@qq.com>
 */
class HomeSubscriptionGroup extends Model{
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author youfai.cn <280962430@qq.com>
     */
    protected $tableName = 'Home_Subscription_Group';
    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_time';
    /**
    *新增
    */
    public function add($data){
        $this->data($data);
        $this->allowField(true)->save();
        return $this->id;
    }

    public function del($map){
       $re =  $this->where($map)->delete();
        if($re){
            return 1;
        }else{
            return 2;
        }
    }

    /**
     * 修改更新数据
     */
    public function edit($data=[],$where=[]){
        return $this->allowField(true)->save($data,$where);
    }

    /**
     * 列表
     */
    public function lists($page_size=3, $condition=[], $order='id desc',$type=1){
        $lists = $this->order($order)->where($condition);
        if($page_size==0){
            $data = $lists->select();
            if($type==1){
              foreach ($data as $key => &$value) {
                  $value['content_str'] = $value['content'];
                  $value['content'] = explode(',',$value['content']);
              }
            }
        }else{
            $data = $lists->paginate($page_size,false,['query'=>request()->param()]);
        }
        return $data;
    }
    /**
     * 创建订单号
     */
    public function createOrderNum(){
        $order_num = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        return $order_num;
    }

    /**
     * 获取用户名
     */
    public function get_username($id){
        $model = model('HomeMember');
        return $model->getName($id);
    }


    /**
     * 支付状态
     */
    public function pay_status($id){
       switch ($id) {
           case '0':
               return "未支付";
               break;
           case '1':
               return "已支付";
               break;
           default:
               # code...
               break;
       }
    }
   
    /**
     * 查询一条
     */
    public function getOne($id){
      $data = $this->where(['id'=>$id])->find();
      $re = $data->toArray();
      return $re;
    }
    /**
     * 支付类型
     */
    public function pay_type($id){
       switch ($id) {
            case '0':
               return "未知";
               break;
            case '1':
               return "微信";
               break;
            case '1':
               return "支付宝";
               break;
           default:
               # code...
               break;
       }
    }
	/*
	用户订阅的关键词
	*/
	public function user_key($id){
		$key = Db::name('home_subscription_group')->where(array('uid'=>$id))->select();
		foreach($key as $k=>$v){
			$return[$k] = $v['content'];
		}		
		$return = array_unique(explode(',',implode(',',$return)));//用户订阅的关键词内容		
		return $return;
	}
}
