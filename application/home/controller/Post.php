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
use think\Controller;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Post extends Controller
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function post(){ 
        $type = input('param.type');
        if(request()->isPost()){
            $uid = session('uid');
            $data = input('param.');
            $data['uid'] = $uid;
            $model = model('HomeDemands');
            $id = $model->add($data);
            if($id){
                return $this->success('发表成功');
            }else{
                return $this->error('发表失败');
            }
        }
        $this->assign('type',$type); 
        return view('post');
    }

    public function post_detail(){
        $id = input('param.id');
        $detail = model('HomeDemands')->getDetail($id);
        $this->assign('detail',$detail);
        return view('post/postdetail');
    }

    public function post_list(){
        $data = input('param.');
        if(!$data['type']){
            $data['type'] = 1;
        }
        $condition['type'] = $data['type'];
        $order='id desc';
        $lists = model('HomeDemands')->getLists($page_size=2,$condition,$order);
        $this->assign('type',$data['type']);
        $this->assign('list',$lists);
        return view('post/postlist');
    }

}
