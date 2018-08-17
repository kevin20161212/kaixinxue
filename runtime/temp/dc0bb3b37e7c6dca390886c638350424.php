<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"/mnt/www/lixiakonggu.youfai.cn/application/home/view/mobile3/list1.html";i:1534207069;s:67:"/mnt/www/lixiakonggu.youfai.cn/application/home/view/temp/base.html";i:1529565694;}*/ ?>
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
		
<style type="text/css">

#modelView{background-color:#DDDDDD;z-index:0;opacity:0.7;height: 100%;width: 100%;position: relative;}
.playvideo{padding-top: auto;z-index: 9999;position: relative;}
.zy_media{z-index: 999999999}
.qianjian{width:20px;height:20px;}
.cuoles>a{padding:0;}
.cuoles img{height:140px;}
.cuoles{padding:0 3%;}
.bdaiwu{width:70%;overflow:hidden;white-space: nowrap;text-overflow: ellipsis;}
.wangxia{margin-top:5px;}
.news>a{border:1px solid #eee;display:block;padding:2%;margin:1% 0;}
.wrapper01 .scroller li a{line-height:1rem;}
.wrapper01{height:1rem;border-bottom:1px solid #eee;}
.askdwi{background:#FFF;}
.xinake{padding-bottom:0;height:280px;}
.xiangmu{padding:15px 3%;}
.cuoles{padding:2% 3%;}
.wangxia{padding-left:5%;}
.zheisi{border-bottom:1px solid #EEE;}
.cuoles>a{border:1px solid #EEE;padding-bottom:1%;}
.shuigan{background-color:#F1F2F2;display:flex;}
.shuigan>a{width:33%;padding:3% 0;text-align:center;font-size:16px;}
.acir{color:#3AB91E;}
.keyide{display:flex;padding:4%;border-bottom:1px solid #ababab;}
.haiode{font-size:14px;padding:0 2%;width:67.5%;padding-left:3%;}
.diandain{
overflow: hidden;
width:93%;
white-space: nowrap;
text-overflow: ellipsis;

}
  @media screen and (max-width: 969px){

header .logo {height:0.5rem!important;}
}
.duohang{display: -webkit-box;
-webkit-box-orient;
text-overflow: ellipsis; 
overflow : hidden;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp: 2;
-webkit-box-orient: vertical;overflow: hidden;}
</style>
 <link rel="stylesheet" href="//g.alicdn.com/de/prismplayer/2.6.0/skins/default/aliplayer-min.css">
     <script type="text/javascript" src="//g.alicdn.com/de/prismplayer/2.6.0/aliplayer-min.js"></script>

		
<body  onmousewheel="return false;">
  <div class="device">
    <a class="arrow-left" href="#"></a> 
    <a class="arrow-right" href="#"></a>
    <div class="swiper-container">
      <div class="swiper-wrapper">
      <?php if(is_array($top_list) || $top_list instanceof \think\Collection || $top_list instanceof \think\Paginator): $i = 0; $__LIST__ = $top_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <div class="swiper-slide"><a href="<?php echo url('news_detail',['id'=>$item['id']]); ?>"> <img src="<?php echo $item['thumb']; ?>"  style="width:100%;height:100%;"></a> </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
    </div>
    <div class="pagination"></div>
  </div>
<div class="shuigan">
  <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
  <a href="<?php echo url('page1',['type'=>20,'cate'=>$item['id']]); ?>" <?php if($item['id'] == $cate_id): ?>class="acir"<?php endif; ?>><?php echo $item['title']; ?></a>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  <!-- <a href="#">集团活动</a>
  <a href="#">党务学习</a> -->
</div>
<div>
  <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
   <a href="<?php echo url('news_detail',['id'=>$item['id']]); ?>" class="keyide">
   	 <img src="<?php echo $item['thumb']; ?>" style="height:60px;width:120px;">
     <div class="haiode">
     	<div class="diandain"><?php echo $item['title']; ?></div>
        <div style="font-size:12px;color:#999;line-height:1.6;" class="duohang"><?php echo $item['textarea']; ?></div>
     </div>
   </a>
   <?php endforeach; endif; else: echo "" ;endif; ?>	

</div>
</body>
<script type="text/javascript">
// window.onload(){
//     if(location.href.indexOf('#reloaded')==-1){
//     location.href=location.href+"#reloaded";
//     location.reload();
//     }
//     }
  var url= "<?php echo $video; ?>";
  var ki="http://"+url
  console.log(2132134);
  console.log("<?php echo $video; ?>");
$(function(){
  //demo示例一到四 通过lass调取，一句可以搞定，用于页面中可能有多个导航的情况
  $('.wrapper').navbarscroll();
});
  var mySwiper = new Swiper('.swiper-container',{
    pagination:'.pagination',
    loop:true,
    grabCursor:true,
    paginationClickable:true
  })
  $('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
</script>


		
	</body>
</html>

