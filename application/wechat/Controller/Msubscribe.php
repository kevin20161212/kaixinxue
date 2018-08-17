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
namespace app\wechat\controller;
use think\Controller;
use think\Request;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Msubscribe extends Controller
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index(){
        return view('mobile/keywordlist');
    }


    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function add(){
        return view('mobile/addkeyword');
    }


    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function push_set(){
        $uid = input('param.uid');
        if(request()->isPost()){
            $push_time_type =input('param.push_time_type');
            $push_type =input('param.type');
            $push_time = input('param.push_time');
            $data = [
                'push_time_type' => $push_time_type,
                'push_type' => $push_type,
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
}
