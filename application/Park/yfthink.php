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
        'name'        => 'Park',
        'title'       => '微信开放平台',
        'icon'        => 'fa fa-flask',
        'icon_color'  => '#F9B440',
        'description' => '微信开放平台',
        'developer'   => '山东有范网络科技有限公司',
        'website'     => 'http://www.youfai.cn',
        'version'     => '1.6.2',
        'dependences' => array(
            'Admin'   => '1.1.0',
        )
    ),
    // 模块配置
    'config' => array(
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
    ),

    // 后台菜单及权限节点配置
    'admin_menu' => array(
        '1' => array(
            'pid'   => '0',
            'title' => '微信开放平台',
            'icon'  => 'fa fa-flask',
        ),
        '2' => array(
            'pid'   => '1',
            'title' => '微信开放平台',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '3' => array(
            'pid'   => '2',
            'title' => '用户管理',
            'url'   => 'Park/Index/index',
        ),
         '4' => array(
            'pid'   => '2',
            'title' => '考生信息',
            'url'   => 'Jiaoshi/Examinee/index',
        ),
        '5' => array(
            'pid'   => '2',
            'title' => '考试计划管理',
            'url'   => 'Jiaoshi/Plan/index',
        ),
        '7' => array(
            'pid'   => '2',
            'title' => '专业管理',
            'url'   => 'Jiaoshi/Career/index',
        ),
        '8' => array(
            'pid'   => '2',
            'title' => '消息管理',
            'url'   => 'Jiaoshi/Advices/index',
        ),
        '9' => array(
            'pid'   => '2',
            'title' => '接口配置',
            'url'   => 'Jiaoshi/Type/index',
        ),

        
        '100' => array(
            'pid'   => '2',
            'title' => '系统设置',
            'url'   => 'Jiaoshi/Config/index',
        ),
    ),

    


);
