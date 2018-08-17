<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:49:"./application/wechat/view/admin/config/index.html";i:1528079470;s:50:"./application/wechat/view/admin/public/layout.html";i:1532939615;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title><?php echo $meta_title; ?>｜<?php echo C('WEB_SITE_TITLE'); ?>后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="author" content="<?php echo C('WEB_SITE_TITLE'); ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="generator" content="CoreThink">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php echo C('WEB_SITE_TITLE'); ?>">
    <meta name="format-detection" content="telephone=no,email=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="apple-touch-icon" type="image/x-icon" href="__ROOT__/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="__ROOT__/logo.png">
    <link rel="stylesheet" type="text/css" href="__LYUI__/css/lyui.min.css">
    <link rel="stylesheet" type="text/css" href="__ADMIN_CSS__/<?php if(C('ADMIN_THEME')){echo C('ADMIN_THEME');}else{echo 'admin';} ?>.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/animate/animate.min.css">
    <link href="/public/static/plugs/layui/css/layui.css?v=20180601" rel="stylesheet">
        <link href="/public/static/theme/css/console.css?v=20180601" rel="stylesheet">
        <link href="/public/static/theme/css/animate.css?v=20180601" rel="stylesheet">
         <!-- <link href="/public/static/plugs/bootstrap/css/bootstrap.min.css?v=<?php echo date('ymd'); ?>" rel="stylesheet"> -->
        <script src="/public/static/plugs/jquery/pace.min.js"></script>
        <script src="/public/static/plugs/layui/layui.all.js"></script>
        <script src="/public/static/admin.js"></script>
        <script src="/public/static/plugs/require/require.js"></script>
        <script src="/public/static/app.js"></script>
    
    <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.jQuery || document.write('<script type="text/javascript" src="__PUBLIC__/libs/jquery/1.x/jquery.min.js"><\/script>');
        window.yfthink = {
            "app_debug"     : "<?php echo C('app_debug'); ?>",
            "app_debug_msg" : "调试模式已关闭",
            "top_home_page" : "<?php echo C('TOP_HOME_PAGE'); ?>",
            "home_page"     : "<?php echo C('HOME_PAGE'); ?>",
            "var_root "     : "__ROOT__",
            "default_img"   : "<?php echo get_cover('', 'default'); ?>"
        }
    </script>
</head>
<body class="<?php echo $_page_name; ?>">
    <div class="clearfix full-header">
        
            <?php if (!C('ADMIN_TABS')): ?>
                <!-- 顶部导航 -->
                <div class="navbar navbar-default navbar-fixed-top main-nav" role="navigation" style="height:52px !important;">
                    <div class="container-fluid">
                        <div>
                            <div class="navbar-header navbar-header-default">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-top">
                                    <span class="sr-only">切换导航</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <?php if(C('WEB_SITE_LOGO')): ?>
                                    <a class="navbar-brand" href="__ROOT__/admin.php">
                                        <img class="logo img-responsive" src="<?php echo get_cover(C('WEB_SITE_LOGO')); ?>">
                                    </a>
                                <?php else: ?>
                                    <a class="navbar-brand" href="__ROOT__/admin.php">
                                        <span><?php echo C('LOGO_DEFAULT'); ?></span>
                                    </a>
                                <?php endif; ?>
                                <!-- 一键切换后台模式 -->
                                <span class="hidden-xs btn btn-sm ajax-get pull-right m-t-sm m-r-xs" style="" href="<?php echo U('Admin/Config/toggle', array('name' => 'ADMIN_TABS')); ?>"><i class="fa fa-navicon" style="font-size: 18px;"></i></span>
                            </div>
                            <div class="navbar-header navbar-header-inverse" style="height:52px !important;">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-top">
                                    <span class="sr-only">切换导航</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <?php if(C('WEB_SITE_LOGO_INVERSE')): ?>
                                    <a class="navbar-brand" href="__ROOT__/admin.php">
                                        <img class="logo img-responsive" src="<?php echo get_cover(C('WEB_SITE_LOGO_INVERSE')); ?>">
                                    </a>
                                <?php else: ?>
                                    <a class="navbar-brand" href="__ROOT__/admin.php">
                                        <span><?php echo C('LOGO_INVERSE'); ?></span>
                                    </a>
                                <?php endif; ?>
                                <!-- 一键切换后台模式 -->
                                <span class="hidden-xs btn btn-sm ajax-get pull-right m-t-sm m-r-xs" style="" href="<?php echo U('Admin/Config/toggle', array('name' => 'ADMIN_TABS')); ?>"><i class="fa fa-navicon" style="font-size: 18px;"></i></span>
                            </div>
                            <div class="collapse navbar-collapse navbar-collapse-top">
                                <ul class="nav navbar-nav">
                                    <!-- 主导航 -->
                                   <?php if($mokuainames == admin_menu): ?>
                                   <li><a href="<?php echo U('Admin/Index/index'); ?>"><i class="fa fa-home"></i> 首页</a></li>
                                <?php endif; if (request()->isMobile()): if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <li class="dropdown <?php if($_parent_menu_list[0]['title'] == $vo['title']) echo 'active'; ?>">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa <?php echo $vo['icon']; ?>"></i>
                                                    <span><?php echo $vo['title']; ?></span>
                                                    <b class="caret"></b>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <?php if(is_array($vo['_child']) || $vo['_child'] instanceof \think\Collection || $vo['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns_first): $mod = ($i % 2 );++$i;?>
                                                        <li>
                                                            <a style="padding-left: 40px;" href="#">
                                                                <i class="<?php echo $_ns_first['icon']; ?>"></i>
                                                                <span class="nav-label"><?php echo $_ns_first['title']; ?></span>
                                                            </a>
                                                        </li>
                                                        <?php if(!(empty($_ns_first['_child']) || (($_ns_first['_child'] instanceof \think\Collection || $_ns_first['_child'] instanceof \think\Paginator ) && $_ns_first['_child']->isEmpty()))): if(is_array($_ns_first['_child']) || $_ns_first['_child'] instanceof \think\Collection || $_ns_first['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_ns_first['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns_second): $mod = ($i % 2 );++$i;?>
                                                                <li <?php if($_parent_menu_list[2]['url'] == $_ns_second['url']) echo 'class="active"'; ?>>
                                                                    <a style="padding-left: 60px;" href="<?php echo U($_ns_second['url']); ?>" >
                                                                        <i class="<?php echo $_ns_second['icon']; ?>"></i>
                                                                        <span class="nav-label"><?php echo $_ns_second['title']; ?></span>
                                                                    </a>
                                                                </li>
                                                            <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                                                </ul>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; else: if (count($_menu_list) > 6): if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($_menu_list) ? array_slice($_menu_list,0,6, true) : $_menu_list->slice(0,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <li <?php if($_parent_menu_list[0]['title'] == $vo['title']) echo 'class="active"'; ?>>
                                                    <a href="<?php echo U($vo['_child'][0]['_child'][0]['url']); ?>" target="<?php echo C(strtolower($vo['name']).'_config.target'); ?>">
                                                        <i class="fa <?php echo $vo['icon']; ?>"></i>
                                                        <span><?php echo $vo['title']; ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-th-large"></i> 更多 <b class="caret"></b>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <?php if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($_menu_list) ? array_slice($_menu_list,6,null, true) : $_menu_list->slice(6,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                        <li <?php if($_parent_menu_list[0]['title'] == $vo['title']) echo 'class="active"'; ?>>
                                                            <a href="<?php echo U($vo['_child'][0]['_child'][0]['url']); ?>" target="<?php echo C(strtolower($vo['name']).'_config.target'); ?>">
                                                                <i class="fa <?php echo $vo['icon']; ?>"></i>
                                                                <span><?php echo $vo['title']; ?></span>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </ul>
                                            </li>
                                        <?php else: if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <li <?php if($_parent_menu_list[0]['title'] == $vo['title']) echo 'class="active"'; ?>>
                                                    <a href="<?php echo U($vo['_child'][0]['_child'][0]['url']); ?>" target="<?php echo C(strtolower($vo['name']).'_config.target'); ?>">
                                                        <i class="fa <?php echo $vo['icon']; ?>"></i>
                                                        <span><?php echo $vo['title']; ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; endif; else: echo "" ;endif; endif; endif; ?>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="<?php echo U('Admin/Index/removeRuntime'); ?>" style="border: 0;text-align: left" class="btn ajax-get b-r-0 no-refresh"><i class="fa fa-trash"></i> 清空缓存</a></li>
                                    <li><a target="_blank" href="__ROOT__/"><i class="fa fa-external-link"></i> 打开前台</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-user"></i>
                                            <span><?php echo $_user_auth['username']; ?></span>
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a target="_blank" href="__ROOT__/"><i class="fa fa-external-link"></i> 打开前台</a></li>
                                            <li><a href="<?php echo U('Admin/Index/removeRuntime'); ?>" style="border: 0;text-align: left;" class="btn text-left ajax-get no-refresh"><i class="fa fa-trash"></i> 清空缓存</a></li>
                                            <li><a href="<?php echo U('Admin/Login/logout'); ?>" class="ajax-get"><i class="fa fa-sign-out"></i> 退出</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        
    </div>

    <div class="clearfix full-container" id="full-container">
        
            <?php if (!C('ADMIN_TABS')): ?>
                <div class="container-fluid with-top-navbar">
                    <div class="row" style="background: #fff;">
                        <!-- 后台左侧导航 -->
                        <?php if (!request()->isMobile()): ?>
                            <div id="sidebar" class="col-xs-12 col-sm-3 sidebar tab-content">
                                <!-- 模块菜单 -->
                                <nav class="navside navside-default" role="navigation">
                                    <?php if($_current_menu_list['_child']): ?>
                                        <ul class="nav navside-nav navside-first">
                                            <?php if(is_array($_current_menu_list['_child']) || $_current_menu_list['_child'] instanceof \think\Collection || $_current_menu_list['_child'] instanceof \think\Paginator): $fkey = 0; $__LIST__ = $_current_menu_list['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns_first): $mod = ($fkey % 2 );++$fkey;?>
                                                <li>
                                                    <a data-toggle="collapse" href="#navside-collapse-<?php echo $_ns['id']; ?>-<?php echo $fkey; ?>">
                                                        <i class="<?php echo $_ns_first['icon']; ?>"></i>
                                                        <span class="nav-label"><?php echo $_ns_first['title']; ?></span>
                                                        <span class="angle fa fa-angle-down"></span>
                                                        <span class="angle-collapse fa fa-angle-left"></span>
                                                    </a>
                                                    <?php if(!(empty($_ns_first['_child']) || (($_ns_first['_child'] instanceof \think\Collection || $_ns_first['_child'] instanceof \think\Paginator ) && $_ns_first['_child']->isEmpty()))): ?>
                                                        <ul class="nav navside-nav navside-second collapse in" id="navside-collapse-<?php echo $_ns['id']; ?>-<?php echo $fkey; ?>">
                                                            <?php if(is_array($_ns_first['_child']) || $_ns_first['_child'] instanceof \think\Collection || $_ns_first['_child'] instanceof \think\Paginator): $skey = 0; $__LIST__ = $_ns_first['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns_second): $mod = ($skey % 2 );++$skey;?>
                                                                <li <?php if($_parent_menu_list[2]['url'] == $_ns_second['url']) echo 'class="active"'; ?>>
                                                                    <a href="<?php echo U($_ns_second['url']); ?>" >
                                                                        <i class="<?php echo $_ns_second['icon']; ?>"></i>
                                                                        <span class="nav-label"><?php echo $_ns_second['title']; ?></span>
                                                                    </a>
                                                                </li>
                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    <?php endif; ?>
                                </nav>
                            </div>
                        <?php endif; ?>

                        <!-- 右侧内容 -->
                        <div id="main" class="col-xs-12 col-sm-9 main"  style="overflow-y: scroll;">
                            <!-- 面包屑导航 -->
                            <ul class="breadcrumb">
                                <li><i class="fa fa-map-marker"></i></li>
                                <?php if(is_array($_parent_menu_list) || $_parent_menu_list instanceof \think\Collection || $_parent_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_parent_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li class="text-muted"><?php echo $vo['title']; ?></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>

                            <!-- 主体内容区域 -->
                            <div class="tab-content ct-tab-content">
                                 

 <!-- <link href="/public/static/plugs/awesome/css/font-awesome.min.css?v=<?php echo date('ymd'); ?>" rel="stylesheet"> -->
        <!-- <link href="/public/static/plugs/bootstrap/css/bootstrap.min.css?v=<?php echo date('ymd'); ?>" rel="stylesheet"> -->
        
<form onsubmit="return false;" action="<?php echo request()->url(); ?>" data-auto="true" method="post" class='form-horizontal layui-form padding-top-20' style="width:90%;">

    <div class="form-group">
        <label class="col-sm-2 control-label label-required">Mode<br><span class="nowrap color-desc">接口模式</span></label>
        <div class="col-sm-8">
            <?php 
            $wechat_type=sysconf('wechat_type')?sysconf('wechat_type'):'api';
            $wechat_type=request()->get('appkey')?'thr':$wechat_type;
             ?>

		

          
            <label class="think-radio">
                <!--{if $wechat_type eq $k}-->
                <input checked type="radio" value="api" name="wechat_type">普通接口参数
                <input  type="radio" value="thr" name="wechat_type">第三方授权对接
                <!--{else}-->
                <!-- <input type="radio" value="<?php echo $k; ?>" name="wechat_type"> -->
                <!--{/if}-->
               
            </label>
          
            <p class="help-block">如果使用第三方授权对接，需要 <a target="_blank" href="https://github.com/zoujingli/ThinkService">ThinkService</a> 项目的支持。</p>
        </div>
    </div>

    <div class="hr-line-dashed"></div>

    <div class="row">
        <div class="col-sm-2 control-label">WxTest<br><span class="nowrap color-desc">功能测试</span></div>
           <div class="col-sm-10">
            <div class="pull-left padding-right-15 notselect">
                <img class="notselect" data-tips-image src="<?php echo url('@wechat/api.tools/oauth_qrc'); ?>" style="width:80px;margin-left:-4px">
                <p class="text-center" style="margin-left:-10px">网页授权</p>
            </div>
            <div class="pull-left padding-left-0 padding-right-15">
                <img class="notselect" data-tips-image src="<?php echo url('@wechat/api.tools/jssdk_qrc'); ?>" style="width:80px;">
                <p class="text-center">JSSDK签名</p>
            </div>
          <!--   <div class="pull-left padding-left-0 padding-right-15">
                <img class="notselect" data-tips-image src="<?php echo url('@wx-demo-jsapiqrc'); ?>" style="width:80px;">
                <p class="text-center">JSAPI支付</p>
            </div>
            <div class="pull-left padding-left-0 padding-right-15">
                <img class="notselect" data-tips-image src="<?php echo url('@wx-demo-scanoneqrc'); ?>" style="width:80px;">
                <p class="text-center">扫码支付①</p>
            </div>
            <div class="pull-left padding-left-0">
                <img class="notselect" data-tips-image src="<?php echo url('@wx-demo-scanqrc'); ?>" style="width:80px;">
                <p class="text-center">扫码支付②</p>
            </div> -->
        </div>
    </div>

    <div class="hr-line-dashed"></div>

    <div data-api-type="api" class="hide">
        <div class="row form-group">
            <label class="col-sm-2 control-label">Token<br><span class="nowrap color-desc">验证令牌</span></label>
            <div class="col-sm-8">
                <input type="text" name="wechat_token" required="required" title="请输入接口Token(令牌)" placeholder="Token（令牌）" value="<?php echo sysconf('wechat_token'); ?>" class="layui-input">
                <p class="help-block">公众号平台与系统对接认证Token，请优先填写此参数并保存，然后再在微信公众号平台操作对接。</p>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">AppId<br><span class="nowrap color-desc">公众号标识</span></label>
            <div class="col-sm-8">
                <input type="text" name="wechat_appid" title="请输入以wx开头的18位公众号APPID" placeholder="公众号APPID（必填）" pattern="^wx[0-9a-z]{16}$" maxlength="18" required="required" value="<?php echo sysconf('wechat_appid'); ?>" class="layui-input">
                <p class="help-block">公众号应用ID是所有接口必要参数，可以在公众号平台 [ 开发 > 基本配置 ] 页面获取。</p>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">AppSecret<br><span class="nowrap color-desc">公众号密钥</span></label>
            <div class="col-sm-8">
                <input type="text" name="wechat_appsecret" required="required" title="请输入32位公众号AppSecret" placeholder="公众号AppSecret（必填）" value="<?php echo sysconf('wechat_appsecret'); ?>" maxlength="32" pattern="^[0-9a-z]{32}$" class="layui-input">
                <p class="help-block">公众号应用密钥是所有接口必要参数，可以在公众号平台 [ 开发 > 基本配置 ] 页面授权后获取。</p>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">EncodingAESKey<br><span class="nowrap color-desc">消息加密密钥</span></label>
            <div class="col-sm-8">
                <input type="text" name="wechat_encodingaeskey" title="请输入43位消息加密密钥" placeholder="消息加密密钥，若开启了消息加密时必需填写（可选）" value="<?php echo sysconf('wechat_encodingaeskey'); ?>" maxlength="43" class="layui-input">
                <p class="help-block">公众号平台接口设置为加密模式，消息加密密钥必需填写并保持与公众号平台一致。</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">AppUri<br><span class="nowrap color-desc">消息推送接口</span></label>
            <div class='col-sm-8'>
                <input type="text" name="wechat_appurl" required value="<?php echo url('@wechat/api.push/notify','',true,true); ?>" title="请输入公众号接口通知URL" placeholder="公众号接口通知URL（必填）" class="layui-input layui-bg-gray">
                <p class="help-block">公众号服务平台接口通知URL, 公众号消息接收与回复等。</p>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </div>


    <div data-api-type="thr" class="hide">
        <?php if(!empty($data['wechat'])): ?>
        <div class="row">
            <div class="col-sm-2 control-label">QRCode<br><span class="nowrap color-desc">公众号二维码</span></div>
            <div class="col-sm-10">
                <div class="pull-left notselect">
                    <img data-tips-image src="<?php echo local_image($data['wechat']['qrcode_url']); ?>" style="width:95px;margin-left:-10px">
                </div>
                <div class="pull-left padding-left-10">
                    <p class="margin-bottom-2 nowrap">微信昵称：<?php echo $data['wechat']['nick_name']; ?></p>
                    <p class="margin-bottom-2 nowrap">微信类型：<?php if($data['wechat']['service_type'] == 2): ?>服务号<?php elseif($data['wechat']['service_type'] == 3): ?>小程序<?php else: ?>订阅号<?php endif; ?> /
                        <?php if($wechat['verify_type_info'] == -1): ?>未认证<?php else: ?><span class="color-green">已认证</span><?php endif; ?></p>
                    <p class="margin-bottom-2 nowrap">注册公司：<?php echo $data['wechat']['principal_name']; ?></p>
                    <p class=" nowrap">授权绑定：<?php echo format_datetime($data['wechat']['create_at']); ?></p>
                </div>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <?php endif; ?>
        <div class="row form-group">
            <label class="col-sm-2 control-label">Authorize<br><span class="nowrap color-desc">公众号授权绑定</span></label>
            <div class="col-sm-8">
                <button type="button" data-href='<?php echo $data['authurl']; ?>' class='layui-btn layui-btn-primary'><?php if($wechat): ?>重新绑定公众号<?php else: ?>立即绑定公众号<?php endif; ?></button>
                <p class="help-block">点击连接将跳转到微信第三方平台进行公众号授权。</p>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label class="col-sm-2 control-label">AppId<br><span class="nowrap color-desc">公众号服务标识</span></label>
            <div class='col-sm-8'>
                <input type="text" name="wechat_thr_appid" required value="<?php echo $data['appid']; ?>" title="请输入以wx开头的18位公众号APPID" placeholder="公众号APPID（必填）" pattern="^wx[0-9a-z]{16}$" maxlength="18" class="layui-input">
                <p class="help-block">公众号 appid 通过微信第三方授权自动获取. 若没有值请进行微信第三方授权。</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">AppKey<br><span class="nowrap color-desc">第三方服务密钥</span></label>
            <div class='col-sm-8'>
                <input type="text" name="wechat_thr_appkey" required value="<?php echo $data['appkey']; ?>" title="请输入32位公众号AppSecret" placeholder="公众号AppSecret（必填）" maxlength="32" pattern="^[0-9a-z]{32}$" class="layui-input">
                <p class="help-block">公众号服务平台接口密钥, 通过微信第三方授权自动获取, 若没有值请进行微信第三方授权。</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">AppUri<br><span class="nowrap color-desc">第三方推送接口</span></label>
            <div class='col-sm-8'>
                <input type="text" name="wechat_thr_appurl" required value="<?php echo url('@wechat/api.push', '', true, true); ?>" title="请输入公众号接口通知URL" placeholder="公众号接口通知URL（必填）" class="layui-input layui-bg-gray">
                <p class="help-block">公众号服务平台接口通知URL, 公众号消息接收与回复等。</p>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </div>

    <div class="col-sm-6 col-sm-offset-2">
        <div class="layui-form-item text-center">
            <button class="layui-btn" type="submit">保存配置</button>
        </div>
    </div>

</form>

<script>
    $(function () {
        updateViwe();
        $('[name="wechat_type"]').on('click', updateViwe);

        function updateViwe() {
            var type = $('[name="wechat_type"]:checked').val();
            $('[data-api-type]').not($('[data-api-type="' + type + '"]').removeClass('hide')).addClass('hide');
        }
    });
</script>

                            </div>

                            <div class="clearfix footer hidden-xs">
                                <div class="navbar navbar-default" role="navigation">
                                    <div class="container－fluid">
                                        <div class="navbar-header">
                                            <a class="navbar-brand" target="_blank" href="http://www.youfai.cn">
                                                <span>历下控股集团</span>
                                            </a>
                                        </div>
                                        <div class="collapse navbar-collapse navbar-collapse-bottom">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="http://www.youfai.cn" class="text-muted" target="_blank">
                                                        <span>版权所有 © 2014-<?php echo date("Y",time()); ?></span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a target="_blank" href="http://www.youfai.cn" class="text-muted pull-right">Powered By 历下控股集团</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                 

 <!-- <link href="/public/static/plugs/awesome/css/font-awesome.min.css?v=<?php echo date('ymd'); ?>" rel="stylesheet"> -->
        <!-- <link href="/public/static/plugs/bootstrap/css/bootstrap.min.css?v=<?php echo date('ymd'); ?>" rel="stylesheet"> -->
        
<form onsubmit="return false;" action="<?php echo request()->url(); ?>" data-auto="true" method="post" class='form-horizontal layui-form padding-top-20' style="width:90%;">

    <div class="form-group">
        <label class="col-sm-2 control-label label-required">Mode<br><span class="nowrap color-desc">接口模式</span></label>
        <div class="col-sm-8">
            <?php 
            $wechat_type=sysconf('wechat_type')?sysconf('wechat_type'):'api';
            $wechat_type=request()->get('appkey')?'thr':$wechat_type;
             ?>

		

          
            <label class="think-radio">
                <!--{if $wechat_type eq $k}-->
                <input checked type="radio" value="api" name="wechat_type">普通接口参数
                <input  type="radio" value="thr" name="wechat_type">第三方授权对接
                <!--{else}-->
                <!-- <input type="radio" value="<?php echo $k; ?>" name="wechat_type"> -->
                <!--{/if}-->
               
            </label>
          
            <p class="help-block">如果使用第三方授权对接，需要 <a target="_blank" href="https://github.com/zoujingli/ThinkService">ThinkService</a> 项目的支持。</p>
        </div>
    </div>

    <div class="hr-line-dashed"></div>

    <div class="row">
        <div class="col-sm-2 control-label">WxTest<br><span class="nowrap color-desc">功能测试</span></div>
           <div class="col-sm-10">
            <div class="pull-left padding-right-15 notselect">
                <img class="notselect" data-tips-image src="<?php echo url('@wechat/api.tools/oauth_qrc'); ?>" style="width:80px;margin-left:-4px">
                <p class="text-center" style="margin-left:-10px">网页授权</p>
            </div>
            <div class="pull-left padding-left-0 padding-right-15">
                <img class="notselect" data-tips-image src="<?php echo url('@wechat/api.tools/jssdk_qrc'); ?>" style="width:80px;">
                <p class="text-center">JSSDK签名</p>
            </div>
          <!--   <div class="pull-left padding-left-0 padding-right-15">
                <img class="notselect" data-tips-image src="<?php echo url('@wx-demo-jsapiqrc'); ?>" style="width:80px;">
                <p class="text-center">JSAPI支付</p>
            </div>
            <div class="pull-left padding-left-0 padding-right-15">
                <img class="notselect" data-tips-image src="<?php echo url('@wx-demo-scanoneqrc'); ?>" style="width:80px;">
                <p class="text-center">扫码支付①</p>
            </div>
            <div class="pull-left padding-left-0">
                <img class="notselect" data-tips-image src="<?php echo url('@wx-demo-scanqrc'); ?>" style="width:80px;">
                <p class="text-center">扫码支付②</p>
            </div> -->
        </div>
    </div>

    <div class="hr-line-dashed"></div>

    <div data-api-type="api" class="hide">
        <div class="row form-group">
            <label class="col-sm-2 control-label">Token<br><span class="nowrap color-desc">验证令牌</span></label>
            <div class="col-sm-8">
                <input type="text" name="wechat_token" required="required" title="请输入接口Token(令牌)" placeholder="Token（令牌）" value="<?php echo sysconf('wechat_token'); ?>" class="layui-input">
                <p class="help-block">公众号平台与系统对接认证Token，请优先填写此参数并保存，然后再在微信公众号平台操作对接。</p>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">AppId<br><span class="nowrap color-desc">公众号标识</span></label>
            <div class="col-sm-8">
                <input type="text" name="wechat_appid" title="请输入以wx开头的18位公众号APPID" placeholder="公众号APPID（必填）" pattern="^wx[0-9a-z]{16}$" maxlength="18" required="required" value="<?php echo sysconf('wechat_appid'); ?>" class="layui-input">
                <p class="help-block">公众号应用ID是所有接口必要参数，可以在公众号平台 [ 开发 > 基本配置 ] 页面获取。</p>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">AppSecret<br><span class="nowrap color-desc">公众号密钥</span></label>
            <div class="col-sm-8">
                <input type="text" name="wechat_appsecret" required="required" title="请输入32位公众号AppSecret" placeholder="公众号AppSecret（必填）" value="<?php echo sysconf('wechat_appsecret'); ?>" maxlength="32" pattern="^[0-9a-z]{32}$" class="layui-input">
                <p class="help-block">公众号应用密钥是所有接口必要参数，可以在公众号平台 [ 开发 > 基本配置 ] 页面授权后获取。</p>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">EncodingAESKey<br><span class="nowrap color-desc">消息加密密钥</span></label>
            <div class="col-sm-8">
                <input type="text" name="wechat_encodingaeskey" title="请输入43位消息加密密钥" placeholder="消息加密密钥，若开启了消息加密时必需填写（可选）" value="<?php echo sysconf('wechat_encodingaeskey'); ?>" maxlength="43" class="layui-input">
                <p class="help-block">公众号平台接口设置为加密模式，消息加密密钥必需填写并保持与公众号平台一致。</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">AppUri<br><span class="nowrap color-desc">消息推送接口</span></label>
            <div class='col-sm-8'>
                <input type="text" name="wechat_appurl" required value="<?php echo url('@wechat/api.push/notify','',true,true); ?>" title="请输入公众号接口通知URL" placeholder="公众号接口通知URL（必填）" class="layui-input layui-bg-gray">
                <p class="help-block">公众号服务平台接口通知URL, 公众号消息接收与回复等。</p>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </div>


    <div data-api-type="thr" class="hide">
        <?php if(!empty($data['wechat'])): ?>
        <div class="row">
            <div class="col-sm-2 control-label">QRCode<br><span class="nowrap color-desc">公众号二维码</span></div>
            <div class="col-sm-10">
                <div class="pull-left notselect">
                    <img data-tips-image src="<?php echo local_image($data['wechat']['qrcode_url']); ?>" style="width:95px;margin-left:-10px">
                </div>
                <div class="pull-left padding-left-10">
                    <p class="margin-bottom-2 nowrap">微信昵称：<?php echo $data['wechat']['nick_name']; ?></p>
                    <p class="margin-bottom-2 nowrap">微信类型：<?php if($data['wechat']['service_type'] == 2): ?>服务号<?php elseif($data['wechat']['service_type'] == 3): ?>小程序<?php else: ?>订阅号<?php endif; ?> /
                        <?php if($wechat['verify_type_info'] == -1): ?>未认证<?php else: ?><span class="color-green">已认证</span><?php endif; ?></p>
                    <p class="margin-bottom-2 nowrap">注册公司：<?php echo $data['wechat']['principal_name']; ?></p>
                    <p class=" nowrap">授权绑定：<?php echo format_datetime($data['wechat']['create_at']); ?></p>
                </div>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <?php endif; ?>
        <div class="row form-group">
            <label class="col-sm-2 control-label">Authorize<br><span class="nowrap color-desc">公众号授权绑定</span></label>
            <div class="col-sm-8">
                <button type="button" data-href='<?php echo $data['authurl']; ?>' class='layui-btn layui-btn-primary'><?php if($wechat): ?>重新绑定公众号<?php else: ?>立即绑定公众号<?php endif; ?></button>
                <p class="help-block">点击连接将跳转到微信第三方平台进行公众号授权。</p>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label class="col-sm-2 control-label">AppId<br><span class="nowrap color-desc">公众号服务标识</span></label>
            <div class='col-sm-8'>
                <input type="text" name="wechat_thr_appid" required value="<?php echo $data['appid']; ?>" title="请输入以wx开头的18位公众号APPID" placeholder="公众号APPID（必填）" pattern="^wx[0-9a-z]{16}$" maxlength="18" class="layui-input">
                <p class="help-block">公众号 appid 通过微信第三方授权自动获取. 若没有值请进行微信第三方授权。</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">AppKey<br><span class="nowrap color-desc">第三方服务密钥</span></label>
            <div class='col-sm-8'>
                <input type="text" name="wechat_thr_appkey" required value="<?php echo $data['appkey']; ?>" title="请输入32位公众号AppSecret" placeholder="公众号AppSecret（必填）" maxlength="32" pattern="^[0-9a-z]{32}$" class="layui-input">
                <p class="help-block">公众号服务平台接口密钥, 通过微信第三方授权自动获取, 若没有值请进行微信第三方授权。</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">AppUri<br><span class="nowrap color-desc">第三方推送接口</span></label>
            <div class='col-sm-8'>
                <input type="text" name="wechat_thr_appurl" required value="<?php echo url('@wechat/api.push', '', true, true); ?>" title="请输入公众号接口通知URL" placeholder="公众号接口通知URL（必填）" class="layui-input layui-bg-gray">
                <p class="help-block">公众号服务平台接口通知URL, 公众号消息接收与回复等。</p>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </div>

    <div class="col-sm-6 col-sm-offset-2">
        <div class="layui-form-item text-center">
            <button class="layui-btn" type="submit">保存配置</button>
        </div>
    </div>

</form>

<script>
    $(function () {
        updateViwe();
        $('[name="wechat_type"]').on('click', updateViwe);

        function updateViwe() {
            var type = $('[name="wechat_type"]:checked').val();
            $('[data-api-type]').not($('[data-api-type="' + type + '"]').removeClass('hide')).addClass('hide');
        }
    });
</script>

            <?php endif; ?>
        
    </div>

    <div class="clearfix full-footer">
        
    </div>

    <div class="clearfix full-script">
        <div class="container-fluid">
            <input type="hidden" id="corethink_home_img" value="__HOME_IMG__">
            <!-- <script type="text/javascript" src="__LYUI__/js/lyui.min.js"></script> -->
            <!-- <script type="text/javascript" src="__ADMIN_JS__/admin.js"></script> -->
            <script type="text/javascript">
                // 如果是多标签方式自动跳转后台首页
                var admin_tabs = '<?php echo (isset($_admin_tabs) && ($_admin_tabs !== '')?$_admin_tabs:""); ?>';
                if(admin_tabs == '1' && !(self.frameElement != null && (self.frameElement.tagName == "IFRAME" || self.frameElement.tagName == "iframe"))){
                    parent.parent.location = "<?php echo U('Admin/Index/index'); ?>";
                }
                if(admin_tabs == '0' && (self.frameElement != null && (self.frameElement.tagName == "IFRAME" || self.frameElement.tagName == "iframe"))){
                    parent.parent.location = "<?php echo U('Admin/Index/index'); ?>";
                }
            </script>
            
        </div>
    </div>
</body>
</html>
