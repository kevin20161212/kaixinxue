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
        'name'        => 'Site',
        'title'       => '站点管理',
        'icon'        => 'fa fa-flask',
        'icon_color'  => '#F9B440',
        'description' => '站点管理',
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
                'url'   => 'Shop/Index/index',
                'color'  => '#398CD2',
            ),
        ),
        'main' => array(
            '0' => array(
                'title' => '测试导航',
                'icon'  => 'fa fa-flask',
                'url'   => 'Shop/Index/index',
            ),
        ),
    ),

    // 后台菜单及权限节点配置
    // 后台菜单及权限节点配置
    'admin_menu' => array(
        '1' => array(
            'pid'   => '0',
            'title' => '站点管理',
            'icon'  => 'fa fa-flask',
        ),
        '2' => array(
            'pid'   => '1',
            'title' => '站内统计',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '3' => array(
            'pid'   => '2',
            'title' => '站内统计',
            'icon'  => 'fa fa-bullhorn',
            'url'   => 'Site/Index/index',
        ),

        '5' => array(
            'pid'   => '1',
            'title' => '供需管理',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '6' => array(
            'pid'   => '5',
            'title' => '供需管理',
            'icon'  => 'fa fa-volume-up',
            'url'   => 'home/supply/index',
            
        ),
        '7' => array(
            'pid'   => '1',
            'title' => '会员管理',
            'icon'  => 'fa fa-folder-open-o',
            
        ),
        '8' => array(
            'pid'   => '7',
            'title' => '会员管理',
            'icon'  => 'fa fa-location-arrow',
            'url'   => 'Site/Member/index',  
        ),
         '9' => array(
            'pid'   => '1',
            'title' => '热搜词管理',
            'icon'  => 'fa fa-folder-open-o',
            
        ),
        '10' => array(
            'pid'   => '9',
            'title' => '热搜词管理',
            'icon'  => 'fa fa-location-arrow',
            'url'   => 'Site/word/index',  
        ),
        '11' => array(
            'pid'   => '1',
            'title' => '省市管理',
            'icon'  => 'fa fa-folder-open-o',
            
        ),
        '12' => array(
            'pid'   => '11',
            'title' => '省市管理',
            'icon'  => 'fa fa-location-arrow',
            'url'   => 'Site/district/index',  
        ),
        '14' => array(
            'pid'   => '11',
            'title' => '地区管理',
            'icon'  => 'fa fa-location-arrow',
            'url'   => 'Site/area/index',  
        ),
        '15' => array(
            'pid'   => '11',
            'title' => '市区管理',
            'icon'  => 'fa fa-location-arrow',
            'url'   => 'Site/city/index',  
        ),
        '13' => array(
            'pid'   => '9',
            'title' => '订阅关键词组',
            'icon'  => 'fa fa-location-arrow',
            'url'   => 'Site/subscription/index',  
        ),
    ),
);
