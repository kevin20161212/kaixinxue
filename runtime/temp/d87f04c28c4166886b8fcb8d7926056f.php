<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"/mnt/www/lixiakonggu.youfai.cn/application/home/view/mobile/newsdetail.html";i:1529661788;s:67:"/mnt/www/lixiakonggu.youfai.cn/application/home/view/temp/base.html";i:1529565694;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="__MOBILE_DIST__/idangerous.swiper.css">
	<link  rel="stylesheet" href="__MOBILE_CSS__/css.css">
	<link rel="stylesheet" href="http://g.alicdn.com/de/prismplayer/2.6.0/skins/default/aliplayer-min.css" />
    <script charset="utf-8" type="text/javascript" src="http://g.alicdn.com/de/prismplayer/2.6.0/aliplayer-min.js"></script>
    <script type="text/javascript" src="__MOBILE_JS__/flexible.js"></script>
    <link rel="stylesheet" type="text/css" href="__MOBILE_CSS__/font-awesome.css"/>
    <script type="text/javascript" src="__MOBILE_JS__/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="__MOBILE_JS__/layui-v2.2.6/layui/css/layui.css"  media="all">
    <script type="text/javascript" src="__MOBILE_DIST__/idangerous.swiper.min.js"></script>
	<script type="text/javascript" src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="__MOBILE_JS__/iscroll.js"></script>
	<script type="text/javascript" src="__MOBILE_JS__/navbarscroll.js"></script>
	</head>
	<body>
		
		
<style>
.shouhangsuojin img{width:100%!important;text-align:center;display: block;}
.shouhangsuojin>div{width:100%;text-align:center;display: block;}
</style>
<body>
<!--   <div class="xinwenneirong"> -->
 
  	<!-- <div class="xinwen"><?php echo $title; ?></div> -->
  <!-- 	<a href="javascript:history.back(-1)">
  	  <img src="__MOBILE_IMG__/fanhuis.png" style="width:30px;height:30px;">
  	</a> -->
<!--   </div> -->
  <div class="ruzhihyuamgpmg">
  	 <div class="heyuebu"><?php echo $data['title']; ?></div>
  	 <div class="riqi"><?php echo $data['create_time']; ?></div>
  </div>
  <div>
  	<div class="shouhangsuojin"><?php echo $data['content']; ?></div>
  </div>
<!--   <div class="shangyitaiop">
    <?php if($pre['id'] > 0): ?>
    <a href="<?php echo url('news_detail',['id'=>$pre['id']]); ?>">上一条</a> 
    <?php else: ?>
    <a hrer="#">没有上一条</a>  
    <?php endif; if($next['id'] > 0): ?>
    <a href="<?php echo url('news_detail',['id'=>$next['id']]); ?>">下一条</a>
    <?php else: ?>
    <a hrer="#">没有下一条</a>  
    <?php endif; ?>
  </div> -->
</body>
<script type="text/javascript">

</script>

		
	</body>
</html>

