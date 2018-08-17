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
// 模块信息配置
return array(
    // 模块信息
    'info' => array(
        'name'        => 'Test',
        'title'       => '测试模块',
        'icon'        => 'fa fa-flask',
        'icon_color'  => '#F9B440',
        'description' => '商城模块模块',
        'developer'   => '山东有范网络科技有限公司',
        'website'     => 'http://www.youfai.cn',
        'version'     => '1.6.2',
        'dependences' => array(
            'Admin'   => '1.6.0',
        )
    ),

    // 用户中心导航
    'user_nav' => array(
        'center' => array(
            '0' => array(
                'title' => '测试导航',
                'icon'  => 'fa fa-flask',
                'url'   => 'Test/Index/index',
                'color'  => '#398CD2',
            ),
        ),
        'main' => array(
            '0' => array(
                'title' => '测试导航',
                'icon'  => 'fa fa-flask',
                'url'   => 'Test/Index/index',
            ),
        ),
    ),

    // 模块配置
    'config' => array(
        
        'group'=>array(
        'type'=>'group',
        'options'=>array(
            'Base'=>array(
                'title'=>'基本',
                'options'=>array(
                    'title' => array(
                    'title'  => '模块名称',
                    'type'   => 'text',
                    'value'  => '',
                    'tip'    => '用于自定义模块名称',
                    'is_dev' => '1',
                ),
                'logo' => array(
                    'title'  => '模块logo',
                    'type'   => 'picture',
                    'value'  => '',
                    'tip'    => '用于自定义模块logo',
                    'is_dev' => '1',
                ),
                )
            ),
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
    ),

    // 后台菜单及权限节点配置
    'admin_menu' => array(
        '1' => array(
            'pid'   => '0',
            'title' => '测试模块',
            'icon'  => 'fa fa-flask',
        ),
        '2' => array(
            'pid'   => '1',
            'title' => '测试模块管理2',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '4' => array(
            'pid'   => '2',
            'title' => '测试模块列表2',
            'icon'  => 'fa fa-list',
            'url'   => 'Test/Index/index',
        ),
        '5' => array(
            'pid'   => '4',
            'title' => '新增',
            'url'   => 'Test/Index/add',
        ),
        '6' => array(
            'pid'   => '4',
            'title' => '编辑',
            'url'   => 'Test/Index/edit',
        ),
        '7' => array(
            'pid'   => '4',
            'title' => '设置状态2',
            'url'   => 'Test/Index/setStatus',
        ),
        '8' => array(
            'pid'   => '2',
            'title' => '会员管理2',
            'url'   => 'Test/Member/index',
        ),
        '9' => array(
            'pid'   => '2',
            'title' => '测试管理2',
            'url'   => 'Test/Goods/index',
        ),
        '10' => array(
            'pid'   => '2',
            'title' => '分类管理2',
            'url'   => 'Test/Category/index',
        ),
    ),
    // 后台角色菜单及权限节点配置
    'role_menu' => array(
        'Store'=>array(
            '1' => array(
                'pid'   => '0',
                'title' => '商城模块1',
                'icon'  => 'fa fa-flask',
            ),
            '2' => array(
                'pid'   => '1',
                'title' => '商城模块管理1',
                'icon'  => 'fa fa-folder-open-o',
            ),
            '3' => array(
                'pid'   => '2',
                'title' => '商城配置',
                'icon'  => 'fa fa-wrench',
                'url'   => 'Test/Index/module_config',
            ),
            '11' => array(
                'pid'   => '2',
                'title' => '配置管理',
                'icon'  => 'fa fa-list',
                'url'   => 'Test/Index/module_config_set',
            ),
            '4' => array(
                'pid'   => '2',
                'title' => '商城模块列表',
                'icon'  => 'fa fa-list',
                'url'   => 'Test/Index/index',
            ),
            '5' => array(
                'pid'   => '4',
                'title' => '新增',
                'url'   => 'Test/Index/add',
            ),
            '6' => array(
                'pid'   => '4',
                'title' => '编辑',
                'url'   => 'Test/Index/edit',
            ),
            '7' => array(
                'pid'   => '4',
                'title' => '设置状态',
                'url'   => 'Test/Index/setStatus',
            ),
            '8' => array(
                'pid'   => '2',
                'title' => '会员管理1',
                'url'   => 'Test/Member/index',
            ),
            '9' => array(
                'pid'   => '2',
                'title' => '商品管理1',
                'url'   => 'Test/Goods/index',
            ),
            '10' => array(
                'pid'   => '2',
                'title' => '分类管理1',
                'url'   => 'Test/Category/index',
            ),
        )
    )
);
