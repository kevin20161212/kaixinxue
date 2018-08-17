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
class District extends Controller
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index()
    {   dump("地区");exit;
        //$this->display();exit;
        $this->assign('meta_title', "首页");
        //return $this->fetch('index');
        return view('index');
    }

}
