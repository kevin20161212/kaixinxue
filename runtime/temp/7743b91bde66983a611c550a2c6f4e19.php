<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"/mnt/www/lixiakonggu.youfai.cn/application/home/view/mobile3/indexl.html";i:1534213445;}*/ ?>

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
<meta name="Description" content="">
<style>
	@media screen and (max-width: 969px){

header .logo {height:0.5rem!important;}
}	@media screen and (min-width: 430px){

body{height:0.5rem!important;display:none;}
}
	@media screen and (max-width: 969px){
		header .logo {width:1.73rem;}
			.header .logo{margin-top:0.09rem;}
	}
@media screen and (max-width: 875px){
		.daodao{display:none;}
	}
	body{overflow-x:hidden;}
</style>
<span id=""/>
<link href="http://www.guangsha.com/favicon.ico" rel="shortcut icon">

<link rel="stylesheet" href="http://www.guangsha.com/static/web/css/reset.css?v=v3" type="text/css" media="screen" charset="utf-8"><link rel="stylesheet" href="http://www.guangsha.com/static/web/css/style.css?v=v3" type="text/css" media="screen" charset="utf-8"><link rel="stylesheet" href="http://www.guangsha.com/static/web/css/phone.css?v=v3" type="text/css" media="screen" charset="utf-8"><script src="http://www.guangsha.com/static/m/js/adaptive-version2.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/jquery-1.11.3.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/jquery.easing.1.3.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/jquery.transit.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/html5.min.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/bocfe.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/js/plug.preload.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/web/js/revolve.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/web/js/scroll.js?v=v3" type="text/javascript" charset="utf-8"></script>
<script>
	var STATIC_URL = "http://www.guangsha.com/static/";
	var GLOBAL_URL = "http://www.guangsha.com/";
	var UPLOAD_URL = "http://www.guangsha.com/upload/";
	var SITE_URL   = "http://www.guangsha.com/index.php";
	window['adaptive'].desinWidth = 750;
	window['adaptive'].init();

</script></head>
<body class="bg">
<div class="huiwei">
    <header class="f-cb">
	<div class="logo fl" style="width:1.73rem;"><a href="#" title=""><img src="__MOBILE_IMG__/konggu.png" alt="" style="width:100%;height:100%;"></a></div>
	<div class="f-cb right">
		<!-- <div class="serch fl"><i></i></div> -->
<!-- 		<div class="en fl"><a href="http://guangsha.com/en/web" title="">En<i></i></a></div> -->
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
				</div>
			</li>
			<li>
				<a href="javascript:;" title="" class="tit">新闻中心<i></i></a>
				<div class="child">
									<volist name='nav' id='item'>
									<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'news','type'=>$item['id']]); ?>" title=""><?php echo $item['title']; ?></a>
							
								</div>
			</li>
		
			<li>
				<a href="javascript:;" title="" class="tit">项目展示<i></i></a>
				<div class="child">
            						<a class="tle" href="<?php echo url('mindex/get_lists',['action'=>'project','type'=>27]); ?>" title="">集团项目</a>
									
				</div>
			</li>
			<li>
				<a href="javascript:;" title="" class="tit">下属公司<i></i></a>
				<div class="child">
						<?php if(is_array($company) || $company instanceof \think\Collection || $company instanceof \think\Paginator): $i = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
						<a class="tle" href="<?php echo url('Mindex/new_detail',['id'=>$item['id'],'type'=>1]); ?>" title=""><?php echo $item['title']; ?></a>
					    <?php endforeach; endif; else: echo "" ;endif; ?>
					

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
</div>
<style type="text/css">

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









    <div class="banner">
     <div style="  position: relative;" class="daodao">
         <img src="__MOBILE_IMG__/ch.jpg" style=" position: absolute;left:0;top:0;height:1030px;">
     </div>
		<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='swflash.cab#version=7,0,19,0" tppabs="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width= '100%'  height='100%' class="pc-banner">
		    <param name='movie' value='http://www.guangsha.com/static/web/swf/index.swf?v=v3'>
		    <param name='quality' value='high'>
		    <param name='wmode' value='transparent'>
		    <param name='allowfullscreen' value='true'>
		    <embed  allowfullscreen='true' src='http://www.guangsha.com/static/web/swf/index.swf?v=v3&&url=/index.php/xml/config_xml'  quality='high' wmode='transparent' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' width='100%' height='100%'>
		</object>
		<div class="model-ban">
			<img src="http://www.guangsha.com/upload/2017/04/01/14910444539623ljm3d.jpg" alt="">
			<div class="warp">
				<h2>company culture<i></i></h2>
				<p class="mintit">市场化 专业化 品牌化</p>
				<a href="javascript:;" title="" class="btns"><i></i></a>
			</div>
		</div>
    </div>
	
	<div class="iab">
		<div class="warp f-cb">
			<div class="box">
				 <h2>Company profile</h2>
				 <h3>公司简介</h3>
				 <div class="cent">
				 	<p><?php echo $about_data['textarea']; ?></p>
				 </div>
				 <a class="btns" href="<?php echo url('Mindex/page1#ab1','type=18'); ?>" title="">learn more</a>
				 <div class="details">
				 	<img src="__MOBILE_IMG__/55.jpg" alt="">
				 </div>
			</div>
			<div class="pic">
				<div class="video-pc">
					<img src="http://lixiakonggu.youfai.cn/application/home/static/mobile/img/huijin.jpg" alt="">
					<a href="javascript:;" class="btns"></a>
				</div>
				<div class="video-ph">
					<video preload="none" poster="http://lixiakonggu.youfai.cn/application/home/static/mobile/img/huijin.jpg" src="http://lixiakonggu.youfai.cn/uploads/cms/media/2018-06-20/5b2a0a1712712.mp4"  controls="controls" style="background:url(http://lixiakonggu.youfai.cn/application/home/static/mobile/img/huijin.jpg) 50% 50%/cover no-repeat"></video>
				</div>
				<div class="bot f-cb">
					<ul>
						<li>
							<p class="math"><span id="math1">9</span>+</p>
							<span class="intro">二级公司</span>
						</li>
						<li>
							<p class="math" ><span id="math2">9</span>+</p>
							<span class="intro">人员工</span>
						</li>
						<li>
							<p class="math"><span  id="math3">500</span>+</p>
							<span class="intro">万工程面积</span>
						</li>
						<li>
							<p class="math" ><span id="math4">9</span>+</p>
							<span class="intro">商务地块</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- 视屏载入显示位置 -->
	<div class="prop-zhez"></div>
	<div class="prop-vidiocont"></div>
	
	<div class="iproduct">
		<div class="title">
			<div class="mian">
				<h2>集团业务</h2>
				<div class="cent">
					
				</div>
			</div>
		</div>
		<div class="pic">
			<img src="http://www.guangsha.com/upload/2017/03/31/149094675751658ju7o.jpg" alt="">
			<div class="main">
				<h2>城市开发建设</h2>
				<div class="cent">
				</div>
				<div href="" title="" class="btns"><i></i></div>
			</div>
		</div>
		<div class="loadingBg">
	<div class="loading">
		<div style="background:url(__MOBILE_IMG__/qq.gif) no-repeat left top;width:90px;height:90px;display:none; " ></div>
		<!-- <div class="m-red"></div> -->
		<img src="__MOBILE_IMG__/uio.gif" style="width:90px;height:90px;">
	</div>
</div>
		<div class="warp">
			<div class="swiper-container">
			    <i class="g"></i>
			    <div class="swiper-wrapper">
			    	<div class="swiper-slide" data-link="http://www.guangsha.com/index.php/productinfor/10" data-img="http://www.guangsha.com/upload/2017/03/31/149094675751658ju7o.jpg" data-tit="城市开发建设" data-p="  ">
				        <div class="pci">
							<img src="__MOBILE_IMG__/1.png" alt="" class="gray">
							<p class="green"><img src="__MOBILE_IMG__/11.png" alt="" ></p>
				        </div>
				        <div class="tit">城市开发建设</div>
				        <i></i>
				        <em></em>
			      	</div>
			    	<div class="swiper-slide"  data-img="http://www.guangsha.com/upload/2017/03/31/14909472265612gzz9r.jpg" data-tit="基础设施建设" data-p="                ">
				        <div class="pci">
							<img src="__MOBILE_IMG__/2.png" alt="" class="gray">
							<p class="green"><img src="__MOBILE_IMG__/22.png" alt="" ></p>
				        </div>
				        <div class="tit">基础设施建设</div>
				        <i></i>
				        <em></em>
			        </div>
			    	<div class="swiper-slide"  data-img="__MOBILE_IMG__/qi.jpg" data-tit="产业发展" data-p="            ">
				        <div class="pci">
							<img src="__MOBILE_IMG__/3.png" alt="" class="gray">
							<p class="green"><img src="__MOBILE_IMG__/33.png" alt="" ></p>
				        </div>
				        <div class="tit">产业发展</div>
				        <i></i>
				        <em></em>
			        </div>
			    	<div class="swiper-slide"  data-img="http://www.guangsha.com/upload/2017/04/14/14921623581154ho4lv.jpg" data-tit="对外招商" data-p="                       ">
				        <div class="pci">
							<img src="__MOBILE_IMG__/4.png" alt="" class="gray">
							<p class="green"><img src="__MOBILE_IMG__/44.png" alt="" ></p>
				        </div>
				        <div class="tit">对外招商</div>
				        <i></i>
				        <em></em>
			        </div>
			    	<div class="swiper-slide"  data-img="__MOBILE_IMG__/tutu.jpg" data-tit="投资融资" data-p="                                            ">
				        <div class="pci">
							<img src="__MOBILE_IMG__/5.png" alt="" class="gray">
							<p class="green"><img src="__MOBILE_IMG__/55.png" alt="" ></p>
				        </div>
				        <div class="tit">投资融资</div>
				        <i></i>
				        <em></em>
			        </div>
			    	<div class="swiper-slide"  data-img="__MOBILE_IMG__/333.jpg" data-tit="资产运营" data-p="               ">
				        <div class="pci">
							<img src="__MOBILE_IMG__/6.png" alt="" class="gray">
							<p class="green"><img src="__MOBILE_IMG__/66.png" alt="" ></p>
				        </div>
				        <div class="tit">资产运营</div>
				        <i></i>
				        <em></em>
			        </div>
			     </div>
			    <div class="pagination" style="display:none"></div>
			  </div>
			  <a class="arrow-left" href="#"></a> 
			  <a class="arrow-right" href="#"></a>
			</div>
		</div>
			</div>

	<div class="isocial">
		<div class="warp f-cb">
			<div class="pic">
				<img src="__MOBILE_IMG__/tu.png" alt="">
			</div>
			<div class="box">
				
				<h2>Company Location<i></i></h2>
				<p class="mintit">公司定位</p>
				<p class="cent"><?php echo $position_data['textarea']; ?></p>
				<a href="<?php echo url('Mindex/page1#ab2','type=18'); ?>" title="" class="btns">learn more</a>
			</div>
		</div>
	</div>
    <div class="inews" style="display:none">
		<div class="title">
			<h2>新闻中心</h2>
			
		</div>
		<div class="mian f-cb">
			<ul>
				
			</ul>
		</div>
	</div>
    <div class="iin">
		<div class="title">
			<h2>新闻中心</h2>
			
		</div>
		<div class="flexslider">
		  <ul class="slides">
		  	<?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<li>
		    	<a href="<?php echo url('Mindex/new_detail',['id'=>$vo['id']]); ?>" title="">
					<div class="pic">
						<img src="<?php echo $vo['thumb']; ?>" alt="">
						<p class="time" style="width: 80px;height: 25px; line-height: 25px"><?php echo $vo['create_time']; ?></p>
					</div>
					<div class="box">
						<h2><?php echo $vo['title']; ?></h2>
						<p class="cent"><?php echo $vo['textarea']; ?></p>
					</div>
				</a>
		       
		    </li>
		   <?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
		</ul>
		</div>
	</div>

    <div class="container demo-1">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
        </div>
    </div>
    </div>
  

<div class="footer">
<div class="mian f-cb">
		<div class="left fl">
			<ul>
				<li>
					<a href="<?php echo url('Mindex/page1#ab1','type=18'); ?>" class="title" title="">集团概况</a>
				
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab1','type=18'); ?>" title="">公司简介</a>
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab2','type=18'); ?>" title="">公司定位</a>
					<a class="tle phone-nav" href="<?php echo url('Mindex/page1#ab3','type=18'); ?>" title="">组织架构</a>
					
					
				
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
				<!-- <div class="cent">
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
<script>
	$(function(){
		$('.footer .mian .right .sel').hover(function(){
			$('.footer .mian .right .sel .cent').stop().slideToggle();
		})
		setTimeout("document.getElementById('my').href='http://idinfo.zjaic.gov.cn/bscx.do?method=hddoc&id=33000000008863'",3000); 
	})

</script><script src="http://www.guangsha.com/static/web/js/main.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/web/js/TweenLite.min.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/web/js/EasePack.min.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/web/js/rAF.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/web/js/demo-1.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/web/js/idangerous.swiper.min.js?v=v3" type="text/javascript" charset="utf-8"></script><link rel="stylesheet" href="http://www.guangsha.com/static/web/css/idangerous.swiper.css?v=v3" type="text/css" media="screen" charset="utf-8"><link rel="stylesheet" href="http://www.guangsha.com/static/web/css/flexslider.css?v=v3" type="text/css" media="screen" charset="utf-8"><script src="http://www.guangsha.com/static/web/js/jquery.flexslider.js?v=v3" type="text/javascript" charset="utf-8"></script><script src="http://www.guangsha.com/static/web/js/countup.js?v=v3" type="text/javascript" charset="utf-8"></script><script>


$(function(){


	if ($(window).width()>970) {
		$(".banner").css("height",$(window).height())
	}else{
		$(".banner").css("height",'auto');
	};
	
	$('.iab .warp .pic .video-pc .btns').on('click',function(){
		var video_url = 'http://www.guangsha.com/index.php/videoajax/60 ';
		$.ajax({
			url:video_url,
			beforeSend:function(){
				$('.prop-vidiocont').html('加载中...')
			},
			success:function(data){
				$('.prop-zhez').fadeIn();
				$('.prop-vidiocont').fadeIn().html(data);
			}
		})
	})
	$('.inews .mian li').eq(2).addClass('on');

	var $window = $(window),
	flexslider = { vars:{} };
	 function getGridSize() {
	    return (window.innerWidth < 619) ? 1 :
	           (window.innerWidth < 970) ? 2 : 3;
	  }

	$window.load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
      slideshow: false,
      controlNav: true,
      directionNav: true,
      slideshowSpeed: 1500, 
      animationSpeed: 1000, 
      animationLoop: false,
      itemWidth: 50,
      itemMargin:0,
      minItems: getGridSize(), 
      maxItems: getGridSize(),
        start: function(slider){
          flexslider = slider;
      }
      });
    });
 
$window.resize(function() {
    var gridSize = getGridSize();
 	// console.log(gridSize);
    flexslider.vars.minItems = gridSize;
    flexslider.vars.maxItems = gridSize;
    if ($(window).width()>970) {
		$(".banner").css("height",$(window).height())
	}else{
		$(".banner").css("height",'auto')
	}

  });

	var mySwiper = new Swiper('.swiper-container',{
	    pagination: '.pagination',
	    paginationClickable: true,
	    slidesPerView: 3
	})
	$('.arrow-left').on('click', function(e){
	    e.preventDefault()
	    mySwiper.swipePrev()
	})
	$('.arrow-right').on('click', function(e){
	    e.preventDefault()
	    mySwiper.swipeNext()
	})
	$('.swiper-slide').eq(0).addClass('on');
	var _mg=$('.swiper-slide').eq(0).data('img');
	$('.iproduct .pic img').attr('src',_mg);
	
	$('.swiper-slide').on('click',function(){
	    $(this).addClass('on').siblings().removeClass('on');
		$('.iproduct .pic img').attr('src',$(this).data('img'));
		$('.iproduct .main h2').html($(this).data('tit'));
		$('.iproduct .main .cent').html($(this).data('p'));
		$('.iproduct .main .btns').attr('href',$(this).data('link'));
	})

	$('.banner .video').css('height',$(window).height());

	var demo1 = new CountUp("math1",0,9,0,2);
    var demo2 = new CountUp("math2",0,300,0,2);
    var demo3 = new CountUp("math3",0,500,0,2);
    var demo4 = new CountUp("math4",0,9,0,2);
    $(window).scroll(function() {  //屏幕滚动 入场动画
        if ($(window).scrollTop()-$(window).height()>-700) {
            demo1.start();
            demo2.start();
            demo3.start();
            demo4.start();
        }
        if($(window).scrollTop()>$(window).height()/2) {
        	$('.float-box').addClass('cut');
        	console.log(1);
        } else{
        	$('.float-box').removeClass('cut');
        	console.log(2);
        };
    })
    setTimeout(function(){
    	$('.flex-prev').html('.');
    	$('.flex-next').html('.');
    },500)
    $('header  nav ul li').eq(0).addClass('on');
    $('.banner .model-ban .warp .btns').on('click',function(){
    	 $("body,html").animate({
            scrollTop: $('.model-ban').height()
        },400);
    })

})
function movePage(){
   	 $('html,body').stop().animate({
   	 	scrollTop:$(window).height()
   	 },500)
   }
</script>
</body>
</html>