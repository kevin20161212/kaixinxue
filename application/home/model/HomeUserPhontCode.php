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
 * 验证码
 * @author youfai.cn <280962430@qq.com>
 */
class HomeUserPhontCode extends Model{
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author youfai.cn <280962430@qq.com>
     */
    protected $tableName = 'Home_User_Phont_code';

    /**
    *新增
    */
    public function add($data){
        $this->data($data);
        $this->allowField(true)->save();
        return $this->id;
    }

    /**
     * 检查验证码是否过期
     */
    public function checkCode($phone){
        $map['mobile'] = $phone;
        $map['create_time'] = array('>',time()-60);
        return $this->where($map)->order('id desc')->value('code'); 
    }
    /**
     * 获取多条数据
     */
    public function getLists($map=[],$order='',$page=1,$pageSize=10){
        return $this->where($map)->order($order)->limit($pageSize)->page($page)->select();
    }

    /**
     * 获取一条数据
     */
    public function getInfo($map=[]){
        $data = $this->where($map)->order('id desc')->find();
        if($data){
            $data = $data->toArray();
        }
        return $data;
    }

    /**
     * 修改更新数据
     */
    public function edit($data=[],$id){
        return $this->allowField(true)->save($data,['id' => $id]);
    }

}
