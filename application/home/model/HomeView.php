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
use app\home\model\HomeDistrict;
/**
 * 默认模型
 * @author youfai.cn <280962430@qq.com>
 */
class HomeView extends Model {
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author youfai.cn <280962430@qq.com>
     */
    protected $tableName = 'Home_View';
    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_time';

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

    public function lists($uid,$num=20,$page=1){
        $data = db("home_view")->alias('v')->join('__HOME_CONTENT__ c ','v.tend_id= c.id')->where(['v.uid'=>$uid])->order('v.id desc')->limit($num)->page($page)->field('c.id,c.title,c.areaid,c.time,c.create_time')->select();
        $num = db("home_view")->alias('v')->join('__HOME_CONTENT__ c ','v.tend_id= c.id')->where(['v.uid'=>$uid])->count();
        //$data=$data->toArray();
        foreach ($data as $key => &$value) {
            $res = model('Home_district')->get_one($value['areaid']);
            $value['areaid'] = $res['name'];
            $value['time'] = $this->count_time($value['time']);
            $value['title'] = $this->GetPartStr($value['title'],20);
        }
        $result = [
            'data'=> $data,
            'num' => $num,
        ];
        return $result;
    }

    /**
     * 截取字符串
     */
    public function GetPartStr($str,$len)//$str字符串   $len 控制长度
    {
        $one=0;
        $partstr='';
        for($i=0;$i<$len;$i++)
        { 
            $sstr=substr($str,$one,1);
            if(ord($sstr)>224){
                 $partstr.=substr($str,$one,3);
                 $one+=3;
            }elseif(ord($sstr)>192){
                $partstr.=substr($str,$one,2);
                $one+=2;
            }elseif(ord($sstr)<192){
                $partstr.=substr($str,$one,1);
                $one+=1;
            }
        }
        if(strlen($str)<$one){
           return $partstr;}else{
        return $partstr.'....';
        }
    }
    /**
     * 按条件获取一条数据
     */
    public function get_one($where){
        $data = $this->where($where)->find();
        return $data;
    }
     /**
     * 计算时间周期
     */
    public function count_time($time){
        $mid = intval((time()-$time)/3600);
        if($mid<24){
            if($mid<1){
                return date('H:m',$time);
            }else{
               return $mid."小时前"; 
            }
        }else{
            $mid = intval((time()-$time)/(3600*24));
            return $mid."天以前";
        }

    }
}
