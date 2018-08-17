<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"/mnt/www/lixiakonggu.youfai.cn/application/admin/view/login/login.html";i:1524315838;s:72:"/mnt/www/lixiakonggu.youfai.cn/application/admin/view/public/layout.html";i:1532426649;}*/ ?>
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
    
    <style type="text/css">
        .background {
            position: absolute;
            right: 0px;
            top: 0px;
            bottom: 0px;
            left: 0px;
            background: #1685d0;
            overflow: hidden;
        }
        .brand {
            width: 100%;
            margin-bottom: 50px;
            text-align: center;
        }
        .brand a {
            height: 65px;
            font-size: 50px;
            text-align: center;
        }
        .brand a:hover {
            text-decoration: none;
        }
        .brand img.logo {
            width: 100%;
            max-height: 100px;
            padding: 0 30px;
            text-align: center;
        }
        .panel-lite {
            margin: 5% auto;
            max-width: 400px;
            background: #fff;
            padding: 45px 30px;
            border-radius: 4px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        .panel-lite h4 {
            font-weight: 400;
            font-size: 24px;
            text-align: center;
            color: #1685d0;
            margin: 20px auto 35px;
        }
        .panel-lite a.link {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            color: #1685d0;
            font-size: 14px;
        }
        .form-group {
            position: relative;
            font-size: 15px;
            color: #666;
        }
        .form-group + .form-group {
            margin-top: 30px;
        }
        .form-group .form-label {
            position: absolute;
            z-index: 1;
            left: 0;
            top: 5px;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }
        .form-group .form-control {
            width: 100%;
            position: relative;
            z-index: 3;
            height: 35px;
            background: none;
            border: none;
            padding: 5px 0;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            border-bottom: 1px solid #777;
            box-shadow: none;
            border-radius: 0;
        }
        .form-group .form-control:invalid {
            outline: none;
        }
        .form-group .form-control:focus, .form-group .form-control:valid {
            outline: none;
            color: #1685d0;
            box-shadow: 0 1px #1685d0;
            border-color: #1685d0;
        }
        .form-group .form-control:focus + .form-label,
        .form-group .form-control:valid + .form-label {
            font-size: 12px;
            -ms-transform: translateY(-15px);
            -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
        }
        .floating-btn {
            background: #1685d0;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            color: #fff;
            font-size: 32px;
            border: none;
            position: absolute;
            margin: auto;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            box-shadow: 1px 0px 0px rgba(0, 0, 0, 0.3) inset;
            margin: auto;
            right: -30px;
            bottom: 90px;
            cursor: pointer;
        }
        .floating-btn:hover {
            box-shadow: 0 0 0 rgba(0, 0, 0, 0.3) inset, 0 3px 6px rgba(0, 0, 0, 0.16), 0 5px 11px rgba(0, 0, 0, 0.23);
        }
        .floating-btn:hover .icon-arrow {
            -ms-transform: rotate(45deg) scale(1.2);
            -webkit-transform: rotate(45deg) scale(1.2);
            transform: rotate(45deg) scale(1.2);
        }
        .floating-btn:focus, .floating-btn:active {
            outline: none;
        }
        .icon-arrow {
            position: relative;
            width: 13px;
            height: 13px;
            border-right: 3px solid #fff;
            border-top: 3px solid #fff;
            display: block;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            margin: auto;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }
        .icon-arrow:after {
            content: '';
            position: absolute;
            width: 18px;
            height: 3px;
            background: #fff;
            left: -5px;
            top: 5px;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        .verifyimg-box {
            padding: 0;
            border: 0;
        }
        .verifyimg-box .verifyimg {
            cursor: pointer;
            width: 130px;
            height: 41px;
            margin-top: -6px;
            border-bottom: 1px solid #777;
        }
        @media (max-width: 768px) {
            .background {
                display: none;
            }
            .panel-lite {
                box-shadow: none;
                border-color: #fff;
            }
        }
    </style>

    <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
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
        
    </div>

    <div class="clearfix full-container" id="full-container">
        
    <!-- 背景 -->
    <div class="background"></div>

    <!-- 登陆框 -->
    <div class="panel-lite">
        <div class="brand">
            <?php if(C('WEB_SITE_LOGO')): ?>
                <a href="<?php echo C('HOME_PAGE'); ?>" target="_blank">
                    <img alt="logo" class="logo img-responsive" src="<?php echo get_cover(C('WEB_SITE_LOGO')); ?>">
                </a>
            <?php else: ?>
                <a href="<?php echo C('HOME_PAGE'); ?>" target="_blank">
                    <?php echo C('LOGO_DEFAULT'); ?>
                </a>
            <?php endif; ?>
        </div>
        <h4>后台管理登录</h4>
        <form class="login-form" action="<?php echo U(''); ?>" method="post">
            <div class="form-group">
                <input type="text" required="required" class="form-control" name="username" autocomplete="off" value="<?php echo input('get.paaccountssword'); ?>">
                <label class="form-label">账　号</label>
            </div>
            <div class="form-group">
                <input type="password" required="required" class="form-control" name="password" value="<?php echo input('get.password'); ?>">
                <label class="form-label">密　码</label>
            </div>
            <!-- <div class="form-group">
                <div class="input-group">
                    <input type="text" required="required" class="form-control" name="verify">
                    <label class="form-label">验证码</label>
                    <span class="input-group-addon verifyimg-box">
                        <img class="verifyimg reload-verify" alt="验证码" src="<?php echo U('Admin/Login/verify'); ?>" title="点击刷新">
                    </span>
                </div>
            </div> -->
            <div class="form-group">
                <a type="submit" class="visible-xs btn btn-primary-outline btn-block btn-pill btn-lg ajax-post" target-form="login-form">登录</a>
            </div>
            <a class="link" target="_blank" href="<?php echo C('HOME_PAGE'); ?>">忘记密码 ? </a>
            <button type="submit" class="floating-btn ajax-post hidden-xs" target-form="login-form">
                <i class="icon-arrow"></i>
            </button>
        </form>
    </div>

    </div>

    <div class="clearfix full-footer">
        
    </div>

    <div class="clearfix full-script">
        <div class="container-fluid">
            <input type="hidden" id="corethink_home_img" value="__HOME_IMG__">
            <script type="text/javascript" src="__LYUI__/js/lyui.min.js"></script>
            <script type="text/javascript" src="__ADMIN_JS__/admin.js"></script>
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
