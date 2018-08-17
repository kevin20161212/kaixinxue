<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"/mnt/www/lixiakonggu.youfai.cn/application/home/view/mobile3/detail.html";i:1534207046;}*/ ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="zh-CN" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta name="author" content="杭州博采网络科技股份有限公司-高端网站建设-http://www.bocweb.cn" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
济南历下控股集团有限公司</title>
<meta name="Keywords" content="关键字"/>
<meta name="Description" content="  "/>
<link href="http://www.guangsha.com/favicon.ico" rel="shortcut icon">

<link rel="stylesheet" href="http://www.guangsha.com/static/web/css/reset.css?v=v3" type="text/css" media="screen" charset="utf-8"><link rel="stylesheet" href="http://www.guangsha.com/static/web/css/style.css?v=v3" type="text/css" media="screen" charset="utf-8"><link rel="stylesheet" href="http://www.guangsha.com/static/web/css/phone.css?v=v3" type="text/css" media="screen" charset="utf-8"><script src="http://www.guangsha.com/static/m/js/adaptive-version2.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/jquery-1.11.3.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/jquery.easing.1.3.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/jquery.transit.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/html5.min.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/bocfe.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/plug.preload.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/web/js/revolve.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/web/js/scroll.js?v=v3" type="text/javascript" charset="utf-8"></script>
<script>
	var STATIC_URL = "http://www.guangsha.com/static/";
	var GLOBAL_URL = "http://www.guangsha.com/";
	var UPLOAD_URL = "http://www.guangsha.com/upload/";
	var SITE_URL   = "http://www.guangsha.com/index.php";
	window['adaptive'].desinWidth = 750;
	window['adaptive'].init();
</script>
<style>
	.pro-warp{border-bottom:0!important;margin-bottom:0!important;padding:0!important;}
.pro-warp .news-title{margin-bottom:0!important;}
.newsinfor{padding-top:2%;}
.bott img{width:100%;}
.pro-warp{width:100%!important;}
.news-title div{text-align: center;font-size:16px;}
	@media screen and (max-width: 969px){

header .logo {height:0.5rem!important;}
}
</style>
</head>
<body class="fc newsinf">
	<div class="loadingBg">
	<div class="loading">
		<div style="background:url(__MOBILE_IMG__/145565.gif) no-repeat left top;width:90px;height:90px; display:none;" ></div>
		<!-- <div class="m-red"></div> -->
		<img src="__MOBILE_IMG__/uio.gif" style="width:90px;height:90px;">
	</div>
</div>
    <header class="f-cb">
	<div class="logo fl" style="width:1.73rem;"><a href="#" title=""><img src="__MOBILE_IMG__/konggu.png" alt="" style="width:100%;height:100%;"></a></div>
	<div class="f-cb right">
		<!-- <div class="serch fl"><i></i></div> -->
		<!-- <div class="en fl"><a href="http://guangsha.com/en/web" title="">En<i></i></a></div> -->
		<div class="nav fr">
			<p></p>
			<p></p>
			<p></p>
		</div>
	</div>
	<nav>
		<ul>
			<li><a href="http://lixiakonggu.youfai.cn/index.php/home/mindex/index1" title="" class="tit">首页</a></li>
			<li>
				<a href="javascript:;" title="" class="tit">集团概况<i></i></a>
				<div class="child">
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab1','type=18'); ?>" title="">公司简介</a>
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab2','type=18'); ?>" title="">公司定位</a>
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab3','type=18'); ?>" title="">组织架构</a>
					
					<!-- <a class="tle phone-nav" href="http://www.guangsha.com/index.php/about#ab5" title="">党群工作</a>
					<a class="tle phone-nav" href="http://www.guangsha.com/index.php/about#ab6" title="">人才专栏</a>
					<a class="tle phone-nav" href="http://www.guangsha.com/index.php/about#ab7" title="">联系我们</a> -->
				</div>
			</li>
			<li>
				<a href="javascript:;" title="" class="tit">新闻中心<i></i></a>
				<div class="child">
									<?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
									<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'news','type'=>$item['id']]); ?>" title=""><?php echo $item['title']; ?></a>
								    <?php endforeach; endif; else: echo "" ;endif; ?>
								<!-- 	<a class="tle" href="http://www.guangsha.com/index.php/productinfor/26" title="">行业新闻</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/27" title="">公示公告</a> -->
						<!-- 			<a class="tle" href="http://www.guangsha.com/index.php/productinfor/28" title="">战略合作</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/29" title="">公司调研</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/30" title="">集团培训</a> -->
									<!-- <a class="tle" href="http://www.guangsha.com/index.php/productinfor/31" title="">医疗业</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/32" title="">文化传媒业</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/33" title="">宾馆旅游业</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/35" title="">体育业</a> -->
								</div>
			</li>
			<!-- <li>
				<a href="javascript:;" title="" class="tit">集团业务<i></i></a>
				<div class="child">
					<a class="tle" href="http://www.guangsha.com/index.php/culture" title="">广厦文化</a>
					<a class="tle" href="http://www.guangsha.com/index.php/construction" title="">党群建设</a>
					<a class="tle" href="http://www.guangsha.com/index.php/staff" title="">员工活动</a>
					<a class="tle" href="http://www.guangsha.com/index.php/newspaper" title="">广厦报</a>
					<a class="tle" href="http://www.guangsha.com/index.php/people" title="">广厦人</a>
					<a class="tle" href="http://www.guangsha.com/index.php/bookcase" title="">广厦书架</a>
				</div>
			</li> -->
			<li>
				<a href="javascript:;" title="" class="tit">项目展示<i></i></a>
				<div class="child">
            						<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'project','type'=>27]); ?>" title="">集团项目</a>
									<!-- <a class="tle" href="http://www.guangsha.com/index.php/news/24" title="">汇金大厦</a>
									<a class="tle" href="http://www.guangsha.com/index.php/news/25" title="">丁家村旧村改造</a>
									<a class="tle" href="http://www.guangsha.com/index.php/leadership" title="">博鳌大厦</a>
					                <a class="tle" href="http://www.guangsha.com/index.php/videonews" title="">人民传媒大厦</a>
					                <a class="tle" href="http://www.guangsha.com/index.php/videonews" title="">双金大厦</a>
					                <a class="tle" href="http://www.guangsha.com/index.php/videonews" title="">中央商务区南区项目</a>
					                <a class="tle" href="http://www.guangsha.com/index.php/videonews" title="">中央商务区北区项目</a> -->
				</div>
			</li>
			<li>
				<a href="javascript:;" title="" class="tit">下属公司<i></i></a>
				<div class="child">
						<?php if(is_array($company) || $company instanceof \think\Collection || $company instanceof \think\Paginator): $i = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
						<a class="tle" href="<?php echo url('Mindex/new_detail',['id'=>$item['id'],'type'=>1]); ?>" title=""><?php echo $item['title']; ?></a>
					    <?php endforeach; endif; else: echo "" ;endif; ?>
					<!-- 		<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南易通城市建设集团股份有限公司</a>
				<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">山东丽山教育投资有限公司</a>
				<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南科金投资管理有限公司</a>
				<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南市名城府投资建设有限公司</a>
				    <a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南市历下区城市更新建设发展有限公司</a>
					<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南市历下区国有资产运营有限公司</a>
					<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南中央商务区投资建设有限公司</a>
					<a class="tle" href="http://www.guangsha.com/index.php/welfare" title="">济南历下绿城物业管理有限公司（参股）</a> -->

				</div>
			</li>
			<li>
				<a href="javascript:;" title="" class="tit">党群工作<i></i></a>
				<div class="child">
					<?php if(is_array($dang) || $dang instanceof \think\Collection || $dang instanceof \think\Paginator): $i = 0; $__LIST__ = $dang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
					<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'dang','type'=>47]); ?>" title=""><?php echo $item['title']; ?></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					
				</div>
			</li>
			<!-- <li>
				<a href="javascript:;" title="" class="tit">人才专栏<i></i></a>
				<div class="child">
					<a class="tle" href="http://www.guangsha.com/index.php/sports" title="">企业文化</a>
					<a class="tle" href="http://www.guangsha.com/index.php/sports?type=detail" title="">培训与发展</a>
				</div>
			</li>
			<li>
				<a href="javascript:;" title="" class="tit">联系我们<i></i></a>
				<div class="child">
					<a class="tle" href="http://www.guangsha.com/index.php/sports" title="">联系我们</a>
				
				</div>
			</li> -->
		
		</ul>
	</nav>
	<div class="serbg">
		<i></i>
		<div class="f-cb ser-cont">
			<input type="text" placeholder="Search">
			<input type="submit" value=" ">
		</div>
	</div>
</header>
<div class="tipbg"></div>
<div class="kong"></div>


<div class="header-warp"></div>
	<div class="header-left">
		<img src="__MOBILE_IMG__/sssssss.jpg" alt="" class="bimg">
	</div>
	
	<div class="header">
		<div class="navv">
			<p></p>
			<p></p>
			<p></p>
		</div>
		<div class="nav1">
			<a href="http://lixiakonggu.youfai.cn/index.php/home/mindex/index1">首页</a>
			<a href="http://lixiakonggu.youfai.cn/index.php/home/mindex/page1.html?type=18#ab1">集团概况</a>
			<a href="http://lixiakonggu.youfai.cn/index.php/home/mindex/get_lists.html?action=news&type=31">新闻中心</a>
			<a href="http://lixiakonggu.youfai.cn/index.php/home/mindex/get_lists.html?action=project&type=27">项目展示</a>
		</div>
		<div class="nav2 f-cb">
			<i></i>
			<ul>
				<li><a href="http://lixiakonggu.youfai.cn/index.php/home/mindex/index1" title="" class="tit">首页</a></li>
			<li>
				<a href="javascript:;" title="" class="tit">集团概况<i></i></a>
				<div class="child">
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab1','type=18'); ?>" title="">公司简介</a>
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab2','type=18'); ?>" title="">公司定位</a>
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab3','type=18'); ?>" title="">组织架构</a>
					
					<!-- <a class="tle phone-nav" href="http://www.guangsha.com/index.php/about#ab5" title="">党群工作</a>
					<a class="tle phone-nav" href="http://www.guangsha.com/index.php/about#ab6" title="">人才专栏</a>
					<a class="tle phone-nav" href="http://www.guangsha.com/index.php/about#ab7" title="">联系我们</a> -->
				</div>
			</li>
			<li>
				<a href="javascript:;" title="" class="tit">新闻中心<i></i></a>
				<div class="child">
									<?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
									<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'news','type'=>$item['id']]); ?>" title=""><?php echo $item['title']; ?></a>
								    <?php endforeach; endif; else: echo "" ;endif; ?>
								<!-- 	<a class="tle" href="http://www.guangsha.com/index.php/productinfor/26" title="">行业新闻</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/27" title="">公示公告</a> -->
						<!-- 			<a class="tle" href="http://www.guangsha.com/index.php/productinfor/28" title="">战略合作</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/29" title="">公司调研</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/30" title="">集团培训</a> -->
									<!-- <a class="tle" href="http://www.guangsha.com/index.php/productinfor/31" title="">医疗业</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/32" title="">文化传媒业</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/33" title="">宾馆旅游业</a>
									<a class="tle" href="http://www.guangsha.com/index.php/productinfor/35" title="">体育业</a> -->
								</div>
			</li>
			<!-- <li>
				<a href="javascript:;" title="" class="tit">集团业务<i></i></a>
				<div class="child">
					<a class="tle" href="http://www.guangsha.com/index.php/culture" title="">广厦文化</a>
					<a class="tle" href="http://www.guangsha.com/index.php/construction" title="">党群建设</a>
					<a class="tle" href="http://www.guangsha.com/index.php/staff" title="">员工活动</a>
					<a class="tle" href="http://www.guangsha.com/index.php/newspaper" title="">广厦报</a>
					<a class="tle" href="http://www.guangsha.com/index.php/people" title="">广厦人</a>
					<a class="tle" href="http://www.guangsha.com/index.php/bookcase" title="">广厦书架</a>
				</div>
			</li> -->
			<li>
				<a href="javascript:;" title="" class="tit">项目展示<i></i></a>
				<div class="child">
            						<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'project','type'=>27]); ?>" title="">集团项目</a>
									<!-- <a class="tle" href="http://www.guangsha.com/index.php/news/24" title="">汇金大厦</a>
									<a class="tle" href="http://www.guangsha.com/index.php/news/25" title="">丁家村旧村改造</a>
									<a class="tle" href="http://www.guangsha.com/index.php/leadership" title="">博鳌大厦</a>
					                <a class="tle" href="http://www.guangsha.com/index.php/videonews" title="">人民传媒大厦</a>
					                <a class="tle" href="http://www.guangsha.com/index.php/videonews" title="">双金大厦</a>
					                <a class="tle" href="http://www.guangsha.com/index.php/videonews" title="">中央商务区南区项目</a>
					                <a class="tle" href="http://www.guangsha.com/index.php/videonews" title="">中央商务区北区项目</a> -->
				</div>
			</li>
			<li>
				<a href="javascript:;" title="" class="tit">下属公司<i></i></a>
				<div class="child">
						<?php if(is_array($company) || $company instanceof \think\Collection || $company instanceof \think\Paginator): $i = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
						<a class="tle" href="<?php echo url('Mindex/new_detail',['id'=>$item['id'],'type'=>1]); ?>" title=""><?php echo $item['title']; ?></a>
					    <?php endforeach; endif; else: echo "" ;endif; ?>
					<!-- 		<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南易通城市建设集团股份有限公司</a>
				<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">山东丽山教育投资有限公司</a>
				<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南科金投资管理有限公司</a>
				<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南市名城府投资建设有限公司</a>
				    <a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南市历下区城市更新建设发展有限公司</a>
					<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南市历下区国有资产运营有限公司</a>
					<a class="tle" href="http://www.guangsha.com/index.php/charity" title="">济南中央商务区投资建设有限公司</a>
					<a class="tle" href="http://www.guangsha.com/index.php/welfare" title="">济南历下绿城物业管理有限公司（参股）</a> -->

				</div>
			</li>
			<li>
				<a href="javascript:;" title="" class="tit">党群工作<i></i></a>
				<div class="child">
					<?php if(is_array($dang) || $dang instanceof \think\Collection || $dang instanceof \think\Paginator): $i = 0; $__LIST__ = $dang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
					<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'dang','type'=>$item['id']]); ?>" title=""><?php echo $item['title']; ?></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					
				</div>
			</li>
			</ul>
		</div>
		<!-- <div class="language"><a href="http://guangsha.com/" title="">CH</a><a href="http://guangsha.com/en/web/" title="">EN</a></div> -->
	</div>
<div class="float-box f-cb">
	<div class="top"><a href="http://lixiakonggu.youfai.cn/index.php/home/mindex/index1"><img src="__MOBILE_IMG__/weibiao.jpg" alt="" title="广厦控股集团有限公司"></a></div>
	<div class="bot">
		<div class="navv">
			<p></p>
			<p></p>
			<p></p>
		</div>
		<p class="menu">menu</p>
	</div>
</div>
<style type="text/css">
/*	.float-img{
		position: fixed;
		top: calc(30% + 205px);
		left: 0;
		width: 260px;
		z-index: 10;
	}
	.float-img img{
		display: block;
		width: 100%;
	}*/
</style>

<script type="text/javascript">
	$(function(){

		$('.header .nav2 li').hover(function(){
			var _ml=$(this).offset().left;
			var _ew=$(window).width()*0.25;
			var _wid=parseInt($(this).css('width'));
			$('.header .nav2 i').stop().animate({'width':_ml-_ew+_wid})
		})
		$('.header .nav2 li').mouseleave(function(){
			var _ml=$('.header .nav2 li').eq(0).offset().left;
			var _ew=$(window).width()*0.25;
			var _wid=parseInt($('.header .nav2 li').eq(0).css('width'));
			$('.header .nav2 i').stop().animate({'width':_ml-_ew+_wid})
		})

		$(window).resize(function(){
			$('.header .nav2 li').hover(function(){
				var _ml=$(this).offset().left;
				var _ew=$(window).width()*0.25;
				var _wid=parseInt($(this).css('width'));
				$('.header .nav2 i').stop().animate({'width':_ml-_ew+_wid})
			})
			$('.header .nav2 li').mouseleave(function(){
				var _ml=$('.header .nav2 li').eq(0).offset().left;
				var _ew=$(window).width()*0.25;
				var _wid=parseInt($('.header .nav2 li').eq(0).css('width'));
				$('.header .nav2 i').stop().animate({'width':_ml-_ew+_wid})
			})
		})

		$('.header .language a').eq(0).addClass('on');
		$('.header .language a').on('click',function(){
			$(this).addClass('on').siblings().removeClass('on')
		})
		if ($(window).width()<970) {
			var _top=$(window).height()*0.4;
			$('.flatwindow').css('top',_top+50);
		} else{
			var _top=$(window).height()*0.3;
			$('.flatwindow').css('top',_top+220);
		};
		
		
	})
</script>
<script type="text/javascript">
$(function(){
	$('header .right .en').on('click',function(){
		var hurl = $(this).data('url');
		window.location.href = hurl;
	})
	
})


</script>









        <div class="pro-warp">
            <div class="news-title">
                <div><?php echo $data['title']; ?></div>
                <p class="mintit" style="font-size:16px;text-align:center;"><?php echo date("Y-m-d H:i:s",$data['create_time']); ?></p>
            </div>
           <!--  <div class="main f-cb">
                <div class="icon bdsharebuttonbox">
                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                    <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                </div> -->
                <!-- <div class="warp">
                 </div> -->
            </div>
        </div>
        <div class="newsinfor">
            <div class="bott f-cb">
            	 <?php echo $data['content']; ?>
              <!--   <div class="left">
                                    <p>上一篇：<a href="http://www.guangsha.com/index.php/newsinfor/25/3480" title="">CBA第九轮 广厦86:91不敌卫冕冠军新疆男篮 低迷"大菠萝"自责向全队道歉</a></p>
                                                    <p>下一篇：<a href="http://www.guangsha.com/index.php/newsinfor/25/3477" title="">《体坛报》：广厦为大山里的孩子圆篮球梦 未来三年将在浙江乡村设立数十个篮球基地</a></p>
                                </div> -->
                               <!--  <a href="http://www.guangsha.com/index.php/news/25" title="" class="btns">返回</a> -->
                            </div>
        </div>
        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

    <!-- <footer>
	<p><a target="_blank" title="网站建设" href="http://www.bocweb.cn/" class="t-c">网站建设</a>：<a target="_blank" title="网站建设" href="http://www.bocweb.cn/" class="t-c">博采网络</a></p>
</footer> -->

<div class="footer">
<div class="mian f-cb">
		<div class="left fl">
			<ul>
				<li>
					<a href="<?php echo url('Mindex/page1#ab1','type=18'); ?>" class="title" title="">集团概况</a>
				
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab1','type=18'); ?>" title="">公司简介</a>
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab2','type=18'); ?>" title="">公司定位</a>
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab3','type=18'); ?>" title="">组织架构</a>
					
					<!-- <a class="tle phone-nav" href="http://www.guangsha.com/index.php/about#ab5" title="">党群工作</a>
					<a class="tle phone-nav" href="http://www.guangsha.com/index.php/about#ab6" title="">人才专栏</a>
					<a class="tle phone-nav" href="http://www.guangsha.com/index.php/about#ab7" title="">联系我们</a> -->
				
				</li>
				<li>
					<a href="<?php echo url('mindex/get_lists',['action'=>'news','type'=>31]); ?>" class="title" title="">新闻中心</a>				
					<?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
					<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'news','type'=>$item['id']]); ?>" title=""><?php echo $item['title']; ?></a>
				    <?php endforeach; endif; else: echo "" ;endif; ?>
								
				</li>
				<li>
					<a href="<?php echo url('mindex/get_lists',['action'=>'project','type'=>27]); ?>" class="title" title="">项目展示</a>
					<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'project','type'=>27]); ?>" title="">集团项目</a>
				</li>
				<!-- <li>
					<a href="http://www.guangsha.com/index.php/news" class="title" title="">下属公司</a>
            						<a class="tle" href="http://www.guangsha.com/index.php/news/23" title="">集团新闻</a>
									<a class="tle" href="http://www.guangsha.com/index.php/news/24" title="">子公司新闻</a>
									<a class="tle" href="http://www.guangsha.com/index.php/news/25" title="">媒体关注</a>
									<a href="http://www.guangsha.com/index.php/leadership" title="">领导活动</a>
					 <a href="http://www.guangsha.com/index.php/videonews" title="">视新闻</a> 
				</li> -->
				<li>
					<a href="<?php echo url('mindex/get_lists',['action'=>'dang','type'=>47]); ?>" class="title" title="">党群工作</a>
					<?php if(is_array($dang) || $dang instanceof \think\Collection || $dang instanceof \think\Paginator): $i = 0; $__LIST__ = $dang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
					<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'dang','type'=>$item['id']]); ?>" title=""><?php echo $item['title']; ?></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</li>
			
			</ul>
		</div>
		<div class="right fr">
					<div class="sel">
				<p class="tit">友情链接<i></i></p>
			<!-- 	<div class="cent">
									<a target="_blank" href="http://www.guangshaxy.com/" title="">广厦学院</a>
									<a target="_blank" href="http://www.dy3j.com/Article/Index.asp" title="">东阳三建</a>
									<a target="_blank" href="http://www.gsgf.com/" title="">浙江广厦</a>
									<a target="_blank" href="http://www.shmksz.com/" title="">上海明凯市政股份有限公司</a>
									<a target="_blank" href="http://www.guangshaxy.com/" title="">浙江广厦建设职业技术学院</a>
									<a target="_blank" href="http://www.gsahcy.com/" title="">广厦建设集团有限责任公司安徽分公司</a>
									<a target="_blank" href="http://www.zjgswy.cn/" title="">浙江广厦物业管理有限公司</a>
									<a target="_blank" href="http://www.otchz.com/" title="">杭州海外旅游有限公司</a>
									<a target="_blank" href="http://www.guangshajs.com/" title="">广厦建设集团有限责任公司</a>
									<a target="_blank" href="http://www.guanghongjs.com/" title="">浙江广宏建设有限公司</a>
									<a target="_blank" href="http://www.dygfyy.com/" title="">东阳广福医院</a>
									<a target="_blank" href="http://www.guangshajs.com/" title="">广厦建设集团有限责任公司</a>
									<a target="_blank" href="http://www.tianduchenghotel.com/" title="">浙江天都城酒店有限公司</a>
									<a target="_blank" href="http://www.hz-jg.com/" title="">杭州建工集团有限责任公司</a>
									<a target="_blank" href="http://www.gshb6j.cn/" title="">广厦湖北第六建设工程有限责任公司</a>
									<a target="_blank" href="http://www.sxlqjt.com/article" title="">陕西路桥集团有限公司</a>
									<a target="_blank" href="http://dhzytz.312green.com/" title="">通和置业投资有限公司</a>
									<a target="_blank" href="http://www.superkitchen.cn/" title="">杭州速派餐饮管理有限公司</a>
								</div> -->
			</div>
					<div class="pic f-cb">
				<div class="flr">
					<img src="__MOBILE_IMG__/gongz.jpg" />
					<h2>关注微信公众号</h2>
				</div>
				<div class="flr">
					<img src="__MOBILE_IMG__/ssss.jpg"/>
					<h2>关注集团宣传页</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="bot">
		
		<p class="f-cb" style="position: relative;"><a target="_blank" title="技术支持:骏萨信息" href="http://www.junsasoft.com" class="t-c" style="color:#77797b"><?php echo config('WEB_SITE_COPYRIGHT'); ?></a><span class="bot-f">
		
	<!-- 	<script language='javaScript' src='http://zjnet.zjaic.gov.cn/bsjs/330000/33000000008863.js'></script>
		<a target='_blank' id="my"  href=''><img src='http://idinfo.zjaic.gov.cn/images/i_lo2.gif' border='0'></a> -->

		</span><?php echo config('WEB_SITE_ICP'); ?> 技术支持:骏萨信息<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");</script></p>
	</div>

</div>
	

</div>
<script>
	$(function(){
		$('.footer .mian .right .sel').hover(function(){
			$('.footer .mian .right .sel .cent').stop().slideToggle();
		})
		setTimeout("document.getElementById('my').href='http://idinfo.zjaic.gov.cn/bscx.do?method=hddoc&id=33000000008863'",3000); 
	})

</script><script src="http://www.guangsha.com/static/web/js/main.js?v=v3" type="text/javascript" charset="utf-8"></script><script>
$(function(){
    
    $('header  nav ul li').eq(2).addClass('on');   
})
</script>
</body>
</html>