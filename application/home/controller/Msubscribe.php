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
namespace app\home\controller;
use app\home\controller\Loginbase;
use think\Request;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Msubscribe extends Loginbase
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index(){
        $uid  = session('wx_uid');
        $data = model('HomeSubscriptionGroup')->lists(0,['uid'=>$uid]);
        $this->assign('data',$data);
        return view('mobile/keywordlist');
    }


    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function add(){
        $list = model('HomeDistrict')->listss();
        $this->assign('list',$list);
        return view('mobile/addkeyword');
    }


    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function push_set(){
        $uid = session('wx_uid');
        if(request()->isPost()){
            $data = input('param.');
            $type = [];
            $type_str = '';
            $push_starttime = '';
            $push_endtime = '';
            if($data['start']){
                $push_starttime = $data['start'];
            }
            if($data['end']){
                $push_endtime = $data['end'];
            }
            if($data['kg0']){
                $type[] = 3; //短信  
            }
            if($data['kg1']){
                $type[] = 1;  //微信 
            }
            if($data['kg2']){
                $type[] = 2;  //邮箱 
            }
            if($type){
                $type_str = implode(',', $type);
            }
            $data = [
                'push_time_type' => $data['tsfs'],
                'push_type' => $type_str ,
                'push_starttime' =>$push_starttime,
                'push_endtime' => $push_endtime, 
                'push_time' => $push_time,
            ];
            $re = model('HomeMember')->edit($data,['id'=>$uid]);
            if($re){
                return $this->success('设置成功');
            }else{
                return $this->error('设置失败');
            }
        }
        return view('mobile/send');
    }

    /**
     * 获取地区
     */
    public function get_district(){
        $list = model('HomeDistrict')->listss();
        return json_encode(['code'=>1,'data'=>$list]);
    }

    /**
     * 提交关键词
     */
    public function sub_keyword(){
        $data = input('param.');
        $uid  = session('wx_uid');
        $dist = [];
        if($data['dq']){
            $dist = explode('*',$data['dq']);
        }
        if($data['gjz']){
            $dist[] = $data['gjz'];
        }
        $dist_str = implode(',',$dist) ? implode(',',$dist):'';
        $data1 = [
            'uid'=>$uid,
            'content' =>$dist_str,
            'status'=>1,
        ];
        $re = model('HomeSubscriptionGroup')->add($data1);
        if($re){
            return $this->success('提交成功');
        }else{
            return $this->error('提交失败');
        }
    }

}
