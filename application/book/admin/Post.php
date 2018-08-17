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
use yfthink\Tree;
/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Goods extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
       // 搜索
        $keyword         = I('keyword', '', 'string');
        $map['id|title']       = array('like', '%' . $keyword . '%');
        // $map['id|title'] = array($condition, $condition, '_multi' => true);

        // 获取所有分类
        $p             = input('get.p', 1);
        $map['status'] = array('egt', '0'); // 禁用和正常状态
        $data_list=$this->lists('food_goods',$map,'sort desc,id desc');
        $cat_list=D('food_goods_category')->treelists();
        foreach ($cat_list as $key=>$val) {
                $datalist[$val['id']] = $val['title_show'];
            }
         $attr['title'] = '美团导入';
         $attr['href']  = U('Food/Goods/importmeituan');
         $eleme['title'] = '饿了么导入';
         $eleme['href']  = U('Food/Goods/importeleme');
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton("resume",array('model'=>'food_goods'))  // 添加启用按钮
                ->addTopButton("forbid",array('model'=>'food_goods'))  // 添加禁用按钮
                ->addTopButton("self",$attr)  // 添加禁用按钮
                ->addTopButton("self",$eleme)  // 添加禁用按钮
                ->search_form_items('cid', 'select', '上级分类', '上级分类', $datalist)
                ->search_form_items('title', 'text', '商品标题', '商品标题')
                ->search_form_items('title', 'text', '商品标题', '商品标题')
                ->search_form_items('title', 'text', '商品标题', '商品标题')
                ->setSearch("请输入ID/标题", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn('thumb', '图片', 'picture')
                ->addTableColumn("title", "标题")
                ->addTableColumn("cid", "分类")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("sort", "排序")
                ->addTableColumn("status", "状态", "status")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list['datas']) // 数据列表
                ->setTableDataPage($data_list['page']) // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("forbid",array('model'=>'food_goods','title0'=>'上架','title1'=>'下架'))  // 添加禁用/启用按钮
                ->addRightButton("delete",array('model'=>'food_goods'))  // 添加删除按钮
                ->display();
    }

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $data = D("food_goods")->editfood(false);
            if ($data) {
                $this->success("新增成功", U("index"));
            } else {
                $this->error("新增失败".$model_object->getError());
            }
        } else {
            $data_list=D('food_goods_category')->lists();
            $tree      = new Tree();
            $data_list = $tree->array2tree($data_list);
            foreach ($data_list as $key=>$val) {
                $datalist[$val['id']] = $val['title_show'];
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem("title", "text", "商品名称", "商品名称")
                    ->addFormItem("number", "text", "商品编号", "商品编号")
                    ->addFormItem("title", 'select', '商品分类', '商品分类', $datalist)
                    ->addFormItem('thumb', 'picture', '商品缩略图', '切换图片')
                    ->addFormItem('price', 'number', '商品价格', '商品价格')
                    ->addFormItem('old_price', 'number', '商品原价', '商品原价')
                    ->addFormItem('total', 'number', '商品库存', '商品原价')
                    ->addFormItem('box_price', 'number', '餐盒价格', '餐盒价格')
                    ->addFormItem('unitname', 'text', '商品单位', '默认为/份')
                    ->addFormItem('content', 'text', '简单描述', '该信息显示在商品列表页面, 字数控制在30个以内')
                    ->addFormItem('label', 'text', '自定义标签', '可设置为：热卖，新品，爆款等。只能设置一个，不超过两个字')
                     ->addFormItem('total_update_type', 'radio', '库存更新方式', '库存更新方式', array('1' => '拍下减库存 ', '2' => '付款减库存', '3' => '永不减库存'))
                     ->addFormItem('status', 'radio', '是否上架', '是否上架', array('1' => '上架 ', '2' => '下架'))
                     ->addFormItem('is_hot', 'radio', '设置为热销', '设置为热销', array('1' => '设置 ', '2' => '不设置'))
                    ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                    ->addFormItem('description', 'kindeditor', '内容', '内容')
                    ->setFormData(array('unitname' => '份', 'status' => 1, 'is_hot' => 2, 'total_update_type' => 1))
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $data = D("food_goods")->editfood(false);
            if ($data) {
                $this->success("新增成功", U("index"));
            } else {
                $this->error("新增失败".$model_object->getError());
            }
        } else {
            $data_list=D('food_goods_category')->lists();
            $tree      = new Tree();
            $data_list = $tree->array2tree($data_list);
            foreach ($data_list as $key=>$val) {
                $datalist[$val['id']] = $val['title_show'];
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("修改")  // 设置页面标题
                    ->setPostUrl(U("edit"))      // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem("title", "text", "商品名称", "商品名称")
                    ->addFormItem("number", "text", "商品编号", "商品编号")
                    ->addFormItem("cid", 'select', '商品分类', '商品分类', $datalist)
                    ->addFormItem('thumb', 'picture', '商品缩略图', '切换图片')
                    ->addFormItem('price', 'number', '商品价格', '商品价格')
                    ->addFormItem('old_price', 'number', '商品原价', '商品原价')
                    ->addFormItem('total', 'number', '商品库存', '商品原价')
                    ->addFormItem('box_price', 'number', '餐盒价格', '餐盒价格')
                    ->addFormItem('unitname', 'text', '商品单位', '默认为/份')
                    ->addFormItem('content', 'text', '简单描述', '该信息显示在商品列表页面, 字数控制在30个以内')
                    ->addFormItem('label', 'text', '自定义标签', '可设置为：热卖，新品，爆款等。只能设置一个，不超过两个字')
                     ->addFormItem('total_update_type', 'radio', '库存更新方式', '库存更新方式', array('1' => '拍下减库存 ', '2' => '付款减库存', '3' => '永不减库存'))
                     ->addFormItem('status', 'radio', '是否上架', '是否上架', array('1' => '上架 ', '2' => '下架'))
                     ->addFormItem('is_hot', 'radio', '设置为热销', '设置为热销', array('1' => '设置 ', '2' => '不设置'))
                    ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                    ->addFormItem('description', 'kindeditor', '内容', '内容')
                    ->setFormData(D("food_goods")->find($id))
                    ->display();
        }
    }
    public function importmeituan(){

    }
    public function importeleme(){

    }
    
}