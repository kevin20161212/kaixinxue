
$("#scrollmain").css("height",($("body").height()-45)+"px")
//myScroll.refresh()

var blv={
		    
             isOver:false,//是否全部加载完毕。
             loadZt:false,
	}

myScroll = new IScroll('#scrollmain', { probeType: 3, mouseWheel: true });
myScroll.on('scrollEnd',scrollOver);
myScroll.on('scroll',scrollMove);
  //myScroll.bounce=true;
function scrollMove(){
	mysc.moveCB()
	if(this.y>60)
	{
		blv.loadZt=true; $("#pullDown img").addClass("zd");
	}
	else
	{
		if(blv.loadZt)
		{
			$("#pullDown img").removeClass("zd").addClass("fzd");
			//alert(this.y)
			if(this.y>20)
			{
				location.reload()
			}
		}
	}
}
function scrollOver(){
	if(this.y<this.maxScrollY+5)
	{
        
		if(blv.isOver){return;}
		$(".gif").show()
	    nextpage()
		
	}
	
}

function nextpage(){
	$.ajax({
			type:"post",
			url:mysc.url,
			data:mysc.params+"&page="+mysc.page,
			success:function(res){
				
				res=JSON.parse(res)
				
				if(res.status=="1")//表示还有数据
				{
					$(".gif").hide();
					mysc.overCB(res);
					myScroll.refresh()
					mysc.page++;
				}
				else
				{
					blv.isOver=true;
					$(".gif").html(	'<div class="over" style="padding:20px 0px; width:70%; margin:0 auto;"><label></label><span>我是有底线的！</span><label></label></div>')
					myScroll.refresh()
				}
			},
			error:function(){
				alert("网终异常")
				blv.isOver=true;
				$(".gif").hide();
			}
		});
}
 nextpage()