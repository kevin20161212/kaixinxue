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
use app\home\model\HomeComments;
use app\home\model\HomeMember;
/**
 * 默认模型
 * @author youfai.cn <280962430@qq.com>
 */
class HomeCate extends Model{
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author youfai.cn <280962430@qq.com>
     */
    protected $tableName = 'Home_Cate';
    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';
    //protected $dateFormat = 'm/d';
    protected $validate = [
        [
            'title' => 'require',
        ],
        [
            'title.require' => '标题不能为空',
        ]
    ];
    // public function HomeMember(){
    //     dump(123234);exit;
    //     return $this->belongsTo('HomeMember','uid','id');
    // }

    // public function HomeComments(){
    //     return $this->hasMany('HomeComments','demand_id','id');
    // }

    /**
     * 获取一条关联数据
     */
    // public function getDetail($id){
    //     $data = $this->find($id)->toArray();
    //     $data['home_comments'] = model('HomeComments')->where('re_id',0)->select();
    //     foreach ($data['home_comments'] as $key => &$value){
    //         $value = $value->toArray();
    //         $value['contact_name'] = model('HomeMember')->where('id',$value['uid'])->value('contact_name');
    //         $value['list']= model('HomeComments')->where(['demand_id'=>$data['id'],'re_id'=>$value['id']])->order('id desc')->select();
    //         foreach ($value['list']as $key => &$val) {
    //             $val['contact_name'] =model('HomeMember')->where('id',$val['uid'])->value('contact_name');
    //             $val['reply_name'] =model('HomeMember')->where('id',$val['re_uid'])->value('contact_name');
    //             $val['time'] = date('m/d',$val['time']);
    //         }
    //     }
    //     return $data;
    // }
    /**
    *新增
    */
    public function add($data){
        $this->data($data);
        $result = $this->allowField(true)->validate([
            'title' => 'require',
        ],
        [
            'title.require' => '标题不能为空',
        ])->save($data);
        if($result===false){
            return $this->getError();
        }else{
            return $this->id;
        }
    }


     /**
     * 按字符排序
     */
    public function lists($type=1){
        $data = $this->where(['status'=>1])->order('id asc')->select();
        $result = [];
        foreach ($data as $key => $value) {
            $result[$value['id']] = $value['title'];
        }
        return $result;
    }


    // public function getLists($page_size=3, $condition=[], $order='id desc')
    // {   if($page_size==0){
    //         $lists = $this->order($order)->where($condition)->limit(8)->select();
    //     }else{
    //         $lists = $this->order($order)->where($condition)->paginate($page_size,false,['query'=>request()->param()]);
    //     }
    //     foreach ($lists as $key => $value) {
    //         $value['contact_name'] = model('HomeMember')->getName($value['uid']);
    //     }
    //     return $lists;
    // }
    /**
     * 修改更新数据
    */
    // public function edit($data=[],$where=[]){
    //     return $this->allowField(true)->save($data,$where);
    // }
}
