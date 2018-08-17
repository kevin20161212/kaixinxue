<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/mnt/www/lixiakonggu.youfai.cn/application/home/view/mobile/tender.html";i:1532666542;}*/ ?>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8"/>
		<style>
			/* CSS Document */
body {
	font-size: 12px;
	color: #666;
	background-color: #fff;
}
body, ul, h1, h2, h3, h4, h5, h6, form, p, dl, dd {
	margin: 0;
	padding: 0;
}
.clearfix:after {
	content: "/200B";
	display: block;
	height: 0;
	clear: both;
	overflow: hidden;
}
.clearfix {
 *zoom:1;
}
a {
	text-decoration: none;
	color: #000;
	cursor: pointer;
}
a:hover {
	text-decoration: none;
}
ul {
	list-style: none;
}
.fl {
	float: left;
}
.fr {
	float: right;
}
.clear {
	clear: both;
}
.hide {
	display: none;
}
.alignc {
	text-align: center;
}
* {
	box-sizing: border-box;
}
img {
	border: 0;
}
table {
	border-collapse: collapse;
}
.dawdw{display:flex;align-items: center;font-size:36px;background-color:#009300;color:#FFF;padding:3%;}
.dianjki{width:100%;display: flex;
  justify-content: space-between;  align-items: center;background-color:#FFF;}
.dianjki>div{width:50%; text-align: center;font-size:36px;padding:3%;}
.zhaobiao{border-bottom:1px solid #BC1E2D;color:#BC1E2D;}
.libiao{background-color:#009300;color:#FFF;padding:3%;font-size:36px;}
.bushuo{display: flex;
  justify-content: space-between;  align-items: center;font-size:36px;border-bottom:1px solid #EEE;margin-bottom:6%;padding-bottom:3%;}
  .baise{background-color:#FFF;padding:2%;}
  .tulaio>div{line-height:1.6;}
  .mingbao{background-color:#00b300;color:#FFF;text-align: center;padding:1%;}
  .xiangqing{color:#5b5b5b;margin-top:2%;}
  .dawf>a{border-bottom:1px solid #2c2c2c;}
  .hong{background-color:#BE1E2D;}
  .device {
  width: 640px;
  height: 300px;
  padding: 30px 40px;
  border-radius: 20px;
  background: #111;
  border: 3px solid white;
  margin: 5px auto;
  position: relative;
  box-shadow: 0px 0px 5px #000;
}
.device .arrow-left {
  background: url(img/arrows.png) no-repeat left top;
  position: absolute;
  left: 10px;
  top: 50%;
  margin-top: -15px;
  width: 17px;
  height: 30px;
}
.device .arrow-right {
  background: url(img/arrows.png) no-repeat left bottom;
  position: absolute;
  right: 10px;
  top: 50%;
  margin-top: -15px;
  width: 17px;
  height: 30px;
}
.swiper-container {
  height: 300px;
  width: 640px;
}
.content-slide {
  padding: 20px;
  color: #fff;
}
.title {
  font-size: 25px;
  margin-bottom: 10px;
}
.pagination {
  position: absolute;
  left: 0;
  text-align: center;
  bottom:5px;
  width: 100%;
}
.swiper-pagination-switch {
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 10px;
  background: #999;
  box-shadow: 0px 1px 2px #555 inset;
  margin: 0 3px;
  cursor: pointer;
}
.swiper-active-switch {
  background: #fff;
}
		</style>
		  <script type="text/javascript" src="__MOBILE_JS__/jquery-1.11.3.min.js"></script>

  
	</head>
	<body>
   
		<div class="dawdw" style="background:#BC1E2D;">
			<img src="__MOBILE_IMG__/log2o.png" class="fl">
			<div style="width:100%;text-align:center;margin-left:-3%;"><?php echo $meta_title; ?></div>
		</div>
		<div class="dianjki">
		 <div <?php if($type == 0): endif; ?> dataid="gong"> <a href="<?php echo url('Mindex/tender',['type'=>0]); ?>" <?php if($type == 0): ?>class="zhaobiao"<?php endif; ?>>招标公告</a></div>
		  <div <?php if($type == 1): ?> class="zhaobiao" <?php endif; ?>><a href="<?php echo url('Mindex/tender',['type'=>1]); ?>" <?php if($type == 1): ?>class="zhaobiao"<?php endif; ?>>中标公告</a></div>
		</div>
		<!-- <?php echo get_cover(C('TENDER_COVER')); ?> -->
	<img src="__MOBILE_IMG__/piqi.jpg" style="width:100%;">
			<div class="libiao"  style="background:#BC1E2D;">招标公告列表</div>
        <?php if($type == 0): ?>
		<div class="baise" id="yi" >
			<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
			<a href="<?php echo url('Mindex/tender_detail',['id'=>$item['id']]); ?>" class="bushuo">
				<div style="width:70%;" class="tulaio">
					<h3><?php echo $item['title']; ?></h3>
					<div>招标负责人：<?php echo $item['zuoze']; ?></div>
					<div>联系电话：<?php echo $item['mobile']; ?></div>
					<div>截止日期：<?php echo date('Y-m-d',$item['start_time']); ?></div>
				</div>
				<div style="width:30%;">
				<?php if($item['start_time']>time()){
						echo "<div class='mingbao'>报名中</div>";
					}else{
						echo "<div class='mingbao hong'>报名截止</div>";
					}
					?>
					<div class="xiangqing">>>详情</div>
				</div>
			</a>
		 	<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<?php endif; if($type == 1): ?>
		<div class="baise dawf">
			<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
			<a href="#" class="bushuo">
				<div style="width:100%;" class="tulaio">
					<h3><?php echo $item['title']; ?></h3>
					<div>中标单位：<?php echo $item['tender_com']; ?></div>
					<div>发布日期：<?php echo $item['create_time']; ?></div>	
				</div>
			</a>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	    <?php endif; ?>
		
	</body>
	<script>
           $(".dianjki>div").click(function(){
           	if($(this).attr("dataid")=="gong"){
                  $(".libiao").text("招标公告列表")
           	}else{
 $(".libiao").text("中标公告列表")
           	}
           	$(this).find().addClass("zhaobiao").siblings().removeClass("zhaobiao")
           	var index=$(this).index()
            $(".baise:eq("+index+")").css("display","block").siblings(".baise").css("display","none")
           })
	</script>
	<script src="__MOBILE_JS__/jquery-1.10.1.min.js"></script>
  <script src="http://lixiakonggu.youfai.cn/application/home/static/mobile/dist/idangerous.swiper.min.js"></script>
  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true
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
</html>