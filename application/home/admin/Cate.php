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

namespace app\Home\Admin;
use app\admin\controller\Admin;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Cate extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
      //搜索
        $keyword         = I('keyword', '', 'string');
        $condition       = array('like', '%' . $keyword . '%');
        $map['title'] = array(
            $condition,
        );
        //dump($map);exit;
        $p = $_GET["p"] ? : 1;
        $model_object = D("HomeCate");
        $data_list = $model_object
                   ->page($p, C("ADMIN_PAGE_ROWS"))
                   ->where($map)
                   ->order("id desc")
                   ->select();
        foreach ($data_list as $key => &$value) {
            $value = $value->toArray();
        }
        $page = new Page(
            $model_object->where($map)->count(),
            C("ADMIN_PAGE_ROWS")
        );
        $attr['name']  = '删除';
        $attr['title'] = '删除';
        $attr['class'] = 'ajax-get label confirm label-danger-outline label-pill';
        $attr['href']  = U('Cate/del', array('id' => '__data_id__','model'=>'HomeDemands'));
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton("resume",array('model'=>'Home_Cate'))  // 添加启用按钮
                ->addTopButton("forbid",array('model'=>'Home_Cate'))  // 添加禁用按钮
                ->setSearch("请输入标题", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn("title", "标题")
                ->addTableColumn("create_time", "创建时间")
                ->addTableColumn("status", "状态", "status")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("forbid",array('model'=>'Home_Cate'))  // 添加禁用/启用按钮
                ->addRightButton("self",$attr) 
                ->display();   
    }

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $model_object = D("HomeCate");
            $data = $model_object->create(format_data());
            //dump($data);exit;
            if ($data) {
                $id = $model_object->add($data);
                if ($id) {
                    $this->success("新增成功", U("index"));
                } else {
                    $this->error("新增失败".$model_object->getError());
                }
            } else {
                $this->error($model_object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $data_list = D("HomeCate")->lists(1);
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem('pid', 'select', '分类', '0', $data_list)
                    ->addFormItem("title", "text", "标题", "标题")
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $model_object = D("HomeDemands");
            $data = format_data();
            if ($data) {
                unset($data['id']);
                $id = $model_object->edit($data,['id'=>$id]);
                if ($id !== false) {
                    $this->success("更新成功", U("index"));
                } else {
                    $this->error("更新失败".$model_object->getError());
                }
            } else {
                $this->error($model_object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem("title", "text", "标题", "标题")
                    ->addFormItem("content", "kindeditor", "内容", "内容")
                    ->addFormItem("sort", "num", "排序", "用于显示的顺序")
                    ->setFormData(D("HomeDemands")->find($id))
                    ->display();
        }
    }

    /**
     * 删除
     */
    public function del(){
        $id = input('param.id');
        $model = D('HomeCate');
        $re = $model::destroy($id);
        if($re){
            $this->success('删除成功', U('index'));
        }else{
            $this->error('删除失败');
        }
    }
}