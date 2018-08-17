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
Class District extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        // 获取列表
        $map = array();
        $keyword         = I('keyword','', 'string');
        $condition       = array('like', '%' . $keyword . '%');
        $map['id|intial|name'] = array($condition);
        $map["apid"] = array("gt","0");  // 禁用和正常状态
        $p = $_GET["p"] ? : 1;
        $model_object = D("HomeDistrict");
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
        $attr['href']  = U('District/del', array('id' => '__data_id__','model'=>'Home_District'));

        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton("resume",array('model'=>'Home_District'))  // 添加启用按钮
                ->addTopButton("forbid",array('model'=>'Home_District'))  // 添加禁用按钮
                ->setSearch("请输入ID/标题/首字母", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn("name", "标题")
                ->addTableColumn("intial", "首字母")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("status", "状态", "status")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("forbid",array('model'=>'Home_District'))  // 添加禁用/启用按钮
                //->addRightButton("delete",array('model'=>'Home_District'))  // 添加删除按钮
                ->addRightButton("self",$attr) 
                ->display();
    }

    public function del($id){
        $map['id'] = $id;
        $re = D('HomeDistrict')->del($map);
        if($re == 1){
           return $this->success('删除成功！',U('index'));
        }else{
           return $this->success('删除失败！');
        }
    }

    // /**
    //  * 新增
    //  * @author youfai.cn <280962430@qq.com>
    //  */
    public function add() {
        if (request()->isPost()) {
            $model_object = D('HomeDistrict');
            $data          = $_POST;
            $data['create_time'] = time();
            if ($data) {
                $num = $model_object->where(['name'=>$data['name']])->find();
                if($num){
                    $this->error('该省份已存在');
                }
                if ($model_object->add($data)) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($model_object->getError());
            }
        } else {
            $model = model('HomeArea');
            $data = $model->listss();
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem('apid', 'select', '地区名称', '0', $data)
                    ->addFormItem("name", "text", "省份名称", "例如：山东")
                    ->addFormItem("intial", "text", "首字母", "例如：S")
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $model_object = D("HomeDistrict");
            $data = format_data();
            $data['create_time'] = time();
            if ($data) {
                $num = $model_object->where(['name'=>$data['name'],'apid'=>$data['apid']])->find();
                if($num){
                    $this->error('该信息已存在');
                }
                $id = $data['id'];
                unset($data['id']);
                $result = $model_object->edit($data,['id'=>$id]);
                if ($id !== false) {
                    $this->success("更新成功", U("index"));
                } else {
                    $this->error("更新失败".$model_object->getError());
                }
            } else {
                $this->error($model_object->getError());
            }
        } else {
            $model = model('HomeArea');
            $data = $model->listss();
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem('apid', 'select', '地区名称', '0', $data)
                    ->addFormItem("name", "text", "省份名称", "例如：山东")
                    ->addFormItem("intial", "text", "首字母", "例如：S")
                    ->setFormData(D("HomeDistrict")->find($id))
                    ->display();
        }
    }

    /**
     * 获取列表
    */
    public function get_lists(){
        $data = $this->where(['status'=>1])->order('id desc')->select();
        foreach ($data as $key => &$value) {
            $value = $value->toArray($value);
        }
        return $data;
    }
}