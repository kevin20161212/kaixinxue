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

namespace app\Test\Admin;
use app\admin\controller\Admin;
use yfthink\Page;
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
        $data_list=$this->lists('shop_goods',$map,'sort desc,id desc');
        $cat_list=D('shop_category')->treelists();
        foreach ($cat_list as $key=>$val) {
                $datalist[$val['id']] = $val['title_show'];
            }
        // $data_list=D('shop_category')->lists();
        // // dump($data_list);exit;
        // $tree      = new Tree();
        // $data_list = $tree->array2tree($data_list);
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton("resume",array('model'=>'shop_category'))  // 添加启用按钮
                ->addTopButton("forbid",array('model'=>'shop_category'))  // 添加禁用按钮
                ->search_form_items('pid', 'select', '上级分类', '上级分类', $datalist)
                ->setSearch("请输入ID/标题", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn('thumb', '图片', 'picture')
                ->addTableColumn("title", "标题")
                ->addTableColumn("cates", "分类")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("sort", "排序")
                ->addTableColumn("status", "状态", "status")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list['datas']) // 数据列表
                ->setTableDataPage($data_list['page']) // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("forbid",array('model'=>'shop_goods','title0'=>'上架','title1'=>'下架'))  // 添加禁用/启用按钮
                ->addRightButton("delete",array('model'=>'shop_goods'))  // 添加删除按钮
                ->display();
    }

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $model_object = D("shop_category");
            $data=$model_object->allowField(true)->save($_POST);
            if ($data) {
                $this->success("新增成功", U("index"));
            } else {
                $this->error("新增失败".$model_object->getError());
            }
        } else {
            // $map['status'] = array('egt', '0'); // 禁用和正常状态
            // $data_list=$this->lists('shop_category',$map,'sort desc,id desc');
            // $tree      = new Tree();
            // $data_list['datas'] = $tree->array2tree($data_list['datas']);
            $data_list=D('shop_category')->lists();
            $tree      = new Tree();
            $data_list = $tree->array2tree($data_list);
            foreach ($data_list as $key=>$val) {
                $datalist[$val['id']] = $val['title_show'];
            }
$aa=array(
    // 'base'=>array(
    //     'title'=>'开启同步登录：',
    //     'type'=>'checkbox',
    //     'options'=>array(
    //         'Weixin'=>'微信',
    //         'Qq'=>'QQ',
    //         'Sina'=>'新浪',
    //         'Renren'=>'人人',
    //         'Github'=>'Github',
    //     ),
    // ),
    // 'meta'=>array(
    //     'title'=>'接口验证代码：',
    //     'type'=>'textarea',
    //     'value'=>'',
    //     'tip'=>'需要在Meta标签中写入验证信息时，拷贝代码到这里。'
    // ),
    'group'=>array(
        'type'=>'group',
        'options'=>array(
            'Wexin'=>array(
                'title'=>'库存配置',
                'options'=>array(
                    'WeixinKey'=>array(
                        'title'=>'微信APPKEY：',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'申请地址：http://open.weixin.qq.com/',
                    ),
                    'WeixinSecret'=>array(
                        'title'=>'微信APPSECRET：',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'申请地址：http://open.weixin.qq.com/',
                    )
                )
            ),
            'Qq'=>array(
                'title'=>'参数',
                'options'=>array(
                    'QqKey'=>array(
                        'title'=>'QQ互联APPKEY：',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'申请地址：http://connect.qq.com',
                    ),
                    'QqSecret'=>array(
                        'title'=>'QQ互联APPSECRET：',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'申请地址：http://connect.qq.com',
                    )
                ),
             ),
            'Sina'=>array(
                'title'=>'详情',
                'options'=>array(
                    'SinaKey'=>array(
                        'title'=>'新浪APPKEY：',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'申请地址：http://open.weibo.com/',
                    ),
                    'SinaSecret'=>array(
                        'title'=>'新浪APPSECRET：',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'申请地址：http://open.weibo.com/',
                    )
                ),
            ),
            'Renren'=>array(
                'title'=>'购买权限',
                'options'=>array(
                    'RenrenKey'=>array(
                        'title'=>'人人APPKEY：',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'申请地址：http://dev.renren.com/',
                    ),
                    'RenrenSecret'=>array(
                        'title'=>'人人APPSECRET：',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'申请地址：http://dev.renren.com/',
                    )
                )
            ),
            'Github'=>array(
                'title'=>'营销权限',
                'options'=>array(
                    'GithubKey'=>array(
                        'title'=>'GithubAPPKEY：',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'申请地址：https://github.com/settings/applications',
                    ),
                    'GithubSecret'=>array(
                        'title'=>'GithubAPPSECRET：',
                        'type'=>'text',
                        'value'=>'',
                        'tip'=>'申请地址：https://github.com/settings/applications',
                    )
                )
            )
        )
    )
);
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->setExtraItems($aa) //直接设置表单数据
                    ->addFormItem('pid', 'select', '上级分类', '上级分类', $datalist)
                    ->addFormItem("title", "text", "分类名称", "分类名称")
                    ->addFormItem('thumb', 'picture', '图片', '切换图片')
                    ->addFormItem('description', 'textarea', '分类描述', '分类描述')
                    ->addFormItem('advurl', 'text', '外链URL地址', '支持http://格式或者TP的U函数解析格式')
                    ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $model_object = D("shop_category");
            $data=$model_object->isUpdate(true)->allowField(true)->save($_POST);
            if ($data) {
                $this->success("新增成功", U("index"));
            } else {
                $this->error("新增失败".$model_object->getError());
            }
        } else {
            $data_list=D('shop_category')->lists();
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
                    ->addFormItem('pid', 'select', '上级分类', '上级分类', $datalist)
                    ->addFormItem("title", "text", "分类名称", "分类名称")
                    ->addFormItem('thumb', 'picture', '图片', '切换图片')
                    ->addFormItem('description', 'textarea', '分类描述', '分类描述')
                    ->addFormItem('advurl', 'text', '外链URL地址', '支持http://格式或者TP的U函数解析格式')
                    ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                    ->setFormData(D("shop_category")->find($id))
                    ->display();
        }
    }
}