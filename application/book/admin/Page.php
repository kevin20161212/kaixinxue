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

namespace app\Book\Admin;
use app\admin\controller\Admin;
// use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Page extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        // 获取列表
        $data_list=D('book_index')->treelists();
        $data=D('book_index')->finds(1);
        $this->assign('list', $data_list);
        $this->assign('data', $data);
        $this->assign('meta_title', '编辑部门');
        $this->display();
    }
    public function pages($id) {
        $data=D('book_index')->finds($id);
        $this->assign('data', $data);
        $this->display();
    }

    public function uploder(){

        //dump(2432);exit;
        $this->display('images');
    }
    public function upfile(){

        dump($_FILES);exit;
    }
}