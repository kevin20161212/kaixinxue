<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"/mnt/www/lixiakonggu.youfai.cn/application/home/view/mobile/contact.html";i:1529569078;s:67:"/mnt/www/lixiakonggu.youfai.cn/application/home/view/temp/base.html";i:1529565694;}*/ ?>
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
      .shawanyiss{display:flex;}
      .konggujituan{font-size:.4rem;padding:4%;}
      .zhidias{width:16%;}
      .zhaopinxin{font-size:.4rem;}
      .fowakis{margin-left:3%;}
      .fowakis input{width:70%;height:.7rem;border:1px solid #222;}
      .fowakis label{width:20%;display: inline-block;text-align:right;}
      .fowakis>div{margin:2% 0;}
      #button{background:#EEE;padding:2% 5%;}
  </style>
  
		
<body>
  <!-- <div class="xinwenneirong">
  	<div></div>
  	<div class="xinwen">联系方式</div>
  	<a href="javascript:history.back(-1)">
  	  <img src="__MOBILE_IMG__/fanhuis.png" style="width:30px;height:30px;">
  	</a>
  </div> -->
 <div class="konggujituan">
 	<div><?php echo config('COMPANY_TITLE'); ?></div>
 	<div class="shawanyiss">
 		<div class="zhidias">电话：</div>
 		<div><a href="tel:+0531-55699600<?php echo config('COMPANY_PHONE'); ?>"><?php echo config('COMPANY_PHONE'); ?></a></div>
 	</div>
 	<div class="shawanyiss">
 		<div class="zhidias">地址：</div>
 		<div><?php echo config('COMPANY_ADDRESS'); ?></div>
 	</div>
 </div>
 <div class="dlawjodwa"><img src="__MOBILE_IMG__/huijin.jpg"></div>
 <div class="zhaopinxin">预约：</div>
 <div class="fowakis">
 	<div><label>姓名：</label><input type="text" placeholder="  请填写您的姓名" id="name"></div>
 	<div><label>手机号：</label><input type="text" id="shoujihao" placeholder="  请填写您的手机号码"pattern="^1[3-9]\d{9}$" required ></div>
 	<div><label>预约日期：</label><input placeholder="  请选择预约日期" type="date" style="background-color:#fff;" id="riqi"></div>
 	<div style="margin-left:-0.05%;margin-top:20px;padding-bottom:5%;" class="tijaios"><label>&nbsp;</label><a id="button" type="submit" href="#">提交</a></div>
 </div>


<script src="__MOBILE_JS__/layui-v2.2.6/layui/layui.js"></script>
 
</body>
<script>
layui.use('layer', function(){ //独立版的layer无需执行这一句
  var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
$(".tijaios").click(function(){
var mingzi=$("#name").val()
var shoujihao=$("#shoujihao").val()
var riqi=$("#riqi").val()
if(mingzi==""){
 layer.msg("请填写姓名");
 $("#name").focus()
 return
}
if(shoujihao==""||shoujihao.length<11){
 layer.msg("请填写正确的手机号");
 $("#shoujihao").focus()
 return
}
if(riqi==""){
layer.msg("请填写正日期");
$("#riqi").focus()
return
}
  $.ajax({
    url: 'http://lixiakonggu.youfai.cn/index.php/home/mindex/subscribe',
    type: 'post',
    dataType: 'JSON',
    data: {
      name:mingzi,
      shouji:shoujihao,
      riqi:riqi
    },
    error: function() {
      return false;
    },
    success: function(data) {
    console.log(data)
   layer.msg(data.msg);
      
    }
  })
})

  
  
   
  
});
//text.oninput=function(){
//text.setCustomValidity("");
//};
//text.oninvalid=function(){
//text.setCustomValidity("请不要输入火星的手机号好吗？");
//};
</script>

		
	</body>
</html>
