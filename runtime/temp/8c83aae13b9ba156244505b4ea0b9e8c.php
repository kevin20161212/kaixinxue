<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:47:"./application/cms/view/admin/tender/detail.html";i:1532071841;}*/ ?>
<style>
    .biatm{margin-top:2%;}
	.biatm>div{margin-bottom:2%;}
	.biatm input{width:80%;border-radius:8px;border:0;border:1px solid #9c9c9c;height:35px;}
	.dawkkw{width:100px;height:70px;margin-top:10%;}
	.biatm .sad{width:80%;height:400px;overflow-y:auto;}
	.jdkawi{margin-top:-1%;display:inline-block;}
	.dawnik{display:flex;}
	.shehe{width:20%;background-color:#117fcf;color:#FFF;}
	.dnaiwdh button{border:0;margin:0 10%;height:30px;border-radius:10px;}
	.dnaiwdh{margin-top:5%;}
</style>
<div class="content" style="height:800px;margin:0 auto;padding:5%;">
	<div><span>内容详情</span></div>
	<div class="biatm">
		<div><span>标题：</span><input type="text" name="title" value="<?php echo $title; ?>" /></div>
		<div><span>描述：</span><input type="text" name="title" value="<?php echo $textarea; ?>" /></div>
		<!-- <div class="dawkkw"><span>图片：</span><img src="<?php echo get_cover($thumb); ?>" alt="" style="width:200px;height:120px;margin-top:-66px;margin-left: 43px;"></div> -->
		<div class="dawnik"><span class="jdkawi">内容：</span><div class="sad"><?php echo $content; ?></div></div>
		<?php if($authen_status ==2): ?>
		<div><span>不通过原因：</span><input type="text" name="reason" value="<?php echo $reason; ?>" /></div>
		<?php endif; if($authen_status == 0): ?>
		<div class="dnaiwdh"><button type="" class="shehe">审核</button><button type="" class="shehe jiekgou" style="color:#fff;background-color:#e96656;" >审核不通过</button></div>
		<?php elseif($authen_status ==1): ?>
			<div class="dnaiwdh"><button type="" class="shehe jiekgou" style="color:#fff;background-color:#e96656;" >审核不通过</button></div>
		<?php elseif($authen_status ==2): ?>
			<div class="dnaiwdh"><button type="" class="shehe">审核</button><button type="" class="shehe jiekgou" style="color:#fff;background-color:#e96656;" >审核不通过</button></div>
		<?php endif; ?>

	</div>		
</div>
<script>
	var id = "<?php echo $id; ?>";
	$(".jiekgou").click(function(){
		  //弹出一个输入框，输入一段文字，可以提交 
	    var name = prompt("不通过原因", ""); //将输入的内容赋给变量 name ， 
	    //这里需要注意的是，prompt有两个参数，前面是提示的话，后面是当对话框出来后，在对话框里的默认值 
	    if (name)//如果返回的有内容 
	    { 
	    	$.ajax({
	  		url: '<?php echo url("unaudit"); ?>',
	  		type: 'POST',
	  		dataType: 'json',
	  		data: {id:id,name:name},
	  		success:function(re){
	  			console.log(re.code);
	  			if(re.code==1){
	  				window.location.reload();
	  			}else{
	  				layer.msg(re.msg);
	  			}
	  			console.log(re);
	  		},
	  		error:function(rer){
	  			console.log(rer);
	  		}
	  	})
	    } 
 
	})

	$(".shehe").click(function(event) {
		console.log(id);
		$.ajax({
	  		url: '<?php echo url("audit"); ?>',
	  		type: 'POST',
	  		dataType: 'json',
	  		data: {id:id},
	  		success:function(re){
	  			console.log(re.code);
	  			if(re.code==1){
	  				window.location.reload();
	  			}else{
	  				layer.msg(re.msg);
	  			}
	  			console.log(re);
	  		},
	  		error:function(rer){
	  			console.log(rer);
	  		}
	  	})
	});

</script>