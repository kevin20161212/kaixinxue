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
 * 用户控制器
 * @author <youfai@youfai.cn>
 */
class Word extends Admin
{
    /**
     * 用户列表
     * @author <youfai@youfai.cn>
     */
    public function index()
    {  
          // 获取列表
        $map = array();
        $keyword         = I('keyword','', 'string');
        $condition       = array('like', '%' . $keyword . '%');
        $map['id|keyword'] = array($condition);
        //$map["status"] = array("egt", "0");  // 禁用和正常状态
        $p = $_GET["p"] ? : 1;
        $model_object = D("HomeKeyword");
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
        $attr['href']  = U('Word/del', array('id' => '__data_id__','model'=>'HomeKeyword'));
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew",array('model'=>'Home_keyword'))    // 添加新增按钮
                ->addTopButton("resume",array('model'=>'Home_keyword'))  // 添加启用按钮
                ->addTopButton("forbid",array('model'=>'Home_keyword'))  // 添加禁用按钮
                ->setSearch("请输入ID/标题", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn("keyword", "标题")
                ->addTableColumn("create_time", "创建时间")
                ->addTableColumn("status", "状态", "status")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("forbid",array('model'=>'Home_keyword'))  // 添加禁用/启用按钮
                ->addRightButton("self",$attr) 
                ->display();   
    }

    /**
     * 新增用户
     * @author <youfai@youfai.cn>
     */
    public function add()
    {
        if (request()->isPost()) {
            $model_object = D('HomeKeyword');
            $data        = $_POST;
            if ($data){
                $id = $model_object->add($data);
                if ($id) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($model_object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('新增热词') //设置页面标题
                ->setPostUrl(U('add')) //设置表单提交地址
                ->addFormItem('keyword', 'text', '热词', '热词')
                ->addFormItem('sort', 'text', '排序', '排序')
                ->display();
        }
    }

    /**
     * 删除
     */
    public function del(){
        $id = input('param.id');
        $model = D('HomeKeyword');
        $re = $model::destroy($id);
        if($re){
            $this->success('删除成功', U('index'));
        }else{
            $this->error('删除失败');
        }
    }
    /**
     * 编辑用户
     * @author <youfai@youfai.cn>
     */
    public function edit($id)
    {
        if (request()->isPost()) {
            // 提交数据
            $model_object = D('HomeKeyword');
            $data = $_POST;
            if ($data) {
                $id = $data['id'];
                unset($data['id']);
                $result = $model_object->edit($data,['id'=>$id]);
                if ($result) {
                    $this->success('更新成功', U('index'));
                } else {
                    $this->error('更新失败', $model_object->getError());
                }
            } else {
                $this->error($model_object->getError());
            }
        } else {
            // 获取账号信息
            $info = D('HomeKeyword')->find($id);
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('编辑用户') // 设置页面标题
                ->addFormItem("id", "hidden", "ID", "ID")
                ->setPostUrl(U('edit')) // 设置表单提交地址
                ->addFormItem('keyword', 'text', '热词', '热词')
                ->addFormItem('sort', 'text', '排序', '排序')
                ->setFormData($info)
                ->display();
        }
    }
}
