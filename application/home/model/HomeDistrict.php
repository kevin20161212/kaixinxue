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
/**
 * 默认模型
 * @author youfai.cn <280962430@qq.com>
 */
class HomeDistrict extends Model {
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author youfai.cn <280962430@qq.com>
     */
    protected $tableName = 'Home_District';

    public function del($map){
        $re =  $this->where($map)->delete();
        if($re){
            return 1;
        }else{
            return 2;
        }
    }
    /**
    *新增
    */
    public function add($data){
        $this->data($data);
        $this->allowField(true)->save();
        return $this->id;
    }
    
    /**
     * 修改更新数据
     */
    public function edit($data=[],$where=[]){
        return $this->allowField(true)->save($data,$where);
    }

    /**
     * 按字符排序
     */
    public function lists(){
        $data = $this->where(['status'=>1])->order('intial asc')->select();
        $result = [];
        foreach ($data as $key => $value) {
            $result[$value['id']] = $value['name'];
        }
        return $result;
    }

    /**
     * 按字符排序
     */
    public function listsss(){
        $data = $this->where(['status'=>1,'apid'=>['>',0]])->order('intial asc')->select();
        $result = [];
        foreach ($data as $key => $value) {
            $result[$value['id']] = $value['name'];
        }
        return $result;
    }
    /**
     * 按字符分组
     */
    public function listss(){
        $data = $this->where(['status'=>1])->order('intial asc')->group('intial')->field('intial')->select();
        $result = [];
        foreach ($data as $key => $value) {
           $value = $value->toArray();
           $result[$value['intial']] = $this->where(['intial'=>$value['intial']])->order('id desc')->select();
           foreach ($result[$value['intial']]as $key => &$val) {
               $val = $val->toArray();
           }
        }
        return $result;
    }


    /**
     * 查询一条
     */
    public function get_one($id){
        $data = $this->where(['id'=>$id])->find();
        return $data;
    }


    /**
     * 查询一条
     */
    public function get_name($id){
        $data = $this->where(['id'=>$id])->value('name');
        return $data;
    }
}
