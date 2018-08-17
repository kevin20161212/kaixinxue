<?php
// +----------------------------------------------------------------------
// | CoreThink [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.corethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: <youfai@youfai.cn> <http://www.corethink.cn>
// +----------------------------------------------------------------------
namespace app\home\controller;

/**
 * 幻灯片控制器
 * @author <youfai@youfai.cn>
 */
class Slider extends Home
{
    /**
     * 幻灯片列表
     * @author <youfai@youfai.cn>
     */
    public function index($limit = 5, $page = 1, $order = 'sort desc,id desc')
    {
        $map['status'] = 1;
        $list          = D("Admin/Slider")->getList($limit, $page, $order, $map);
        $this->success('幻灯片列表', '', array('data' => $list));
    }
}
