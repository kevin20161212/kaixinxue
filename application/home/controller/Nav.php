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

use yfthink\Page;

/**
 * 导航控制器
 * @author <youfai@youfai.cn>
 */
class Nav extends Home
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index()
    {
        $this->assign('meta_title', "首页");
        $this->display();
    }

    /**
     * 单页类型
     * @author <youfai@youfai.cn>
     */
    public function page($id)
    {
        $nav_object    = D('Admin/Nav');
        $con['id']     = $id;
        $con['status'] = 1;
        $info          = $nav_object->where($con)->find();
        if (!$info) {
            $this->error('文章不存在或已禁用');
        }

        // 显示模板
        $template = 'detail';
        if ($info['detail_template']) {
            $template = $info['detail_template'];
        }

        $this->assign('info', $info);
        $this->assign('meta_title', $info['title']);
        $this->display($template);
    }

    /**
     * 文章列表
     * @author <youfai@youfai.cn>
     */
    public function lists($cid)
    {
        $nav_object    = D('Admin/Nav');
        $con['id']     = $cid;
        $con['status'] = 1;
        $info          = $nav_object->where($con)->find();
        if (!$info) {
            $this->error('文章不存在或已禁用');
        }

        // 文章列表
        $map['status'] = 1;
        $map['cid']    = $cid;
        $p             = input('get.p', 1);
        $post_object   = D('Admin/Post');
        $data_list     = $post_object
            ->where($map)
            ->page($p, C("ADMIN_PAGE_ROWS"))
            ->order("sort desc,id desc")
            ->select();
        $page = new Page(
            $post_object->where($map)->count(),
            C("ADMIN_PAGE_ROWS")
        );

        // 显示模板
        $template = 'lists';
        if ($info['lists_template']) {
            $template = $info['lists_template'];
        }

        $this->assign('data_list', $data_list);
        $this->assign('page', $page->show());
        $this->assign('meta_title', $info['title']);
        $this->display($template);
    }

    /**
     * 文章详情
     * @author <youfai@youfai.cn>
     */
    public function post($id)
    {
        $post_object   = D('Admin/Post');
        $con['id']     = $id;
        $con['status'] = 1;
        $info          = $post_object->where($con)->find();
        if (!$info) {
            $this->error('文章不存在或已禁用');
        }

        // 阅读量加1
        $result = $post_object->where(array('id' => $id))->SetInc('view_count');

        // 显示模板
        $template = 'detail';
        if ($info['detail_template']) {
            $template = $info['detail_template'];
        }

        $this->assign('info', $info);
        $this->assign('meta_title', $info['title']);
        $this->display($template);
    }

    /**
     * 系统配置
     * @author <youfai@youfai.cn>
     */
    public function config($name = '')
    {
        $data_list = C($name);
        $this->assign('data_list', $data_list);
        $this->assign('meta_title', '系统配置');
        $this->display();
    }

    /**
     * 导航
     * @author <youfai@youfai.cn>
     */
    public function nav($group = 'wap_bottom')
    {
        $data_list = D('Admin/Nav')->getNavTree(0, $group);
        $this->assign('data_list', $data_list);
        $this->assign('meta_title', '导航列表');
        $this->display();
    }

    /**
     * 模块
     * @author <youfai@youfai.cn>
     */
    public function module()
    {
        $map['status'] = 1;
        $data_list     = D('Admin/MODULE')->where($map)->select();
        $this->assign('data_list', $data_list);
        $this->assign('meta_title', '模块列表');
        $this->display();
    }
}
