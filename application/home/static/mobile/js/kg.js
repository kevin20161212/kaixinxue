// JavaScript Document
(function ($)
{
	$.fn.kg=function(opi)
	{
		var self=
		{
			kgzt:'',
			obj:'',
			inputObj:'',
		}
		var kg=$.extend(self,opi);
		init()
		function init(){if(kg.kgzt){kgk()}else{kgg()}}
		function kgk()
		{
			
			kg.obj.firstChild.style.marginLeft="35px"
				kg.obj.style.backgroundColor="#6bde5d";
				kg.obj.style.border="1px solid #6bde5d"
				kg.obj.lastChild.style.left="0px";
				kg.obj.lastChild.innerHTML="开"
				document.getElementById(kg.inputObj).value="1"
				return true;
		}
		function kgg()
		{
			kg.obj.firstChild.style.marginLeft="0px"
				kg.obj.firstChild.style.marginLeft="0px"
				kg.obj.style.backgroundColor="gray";
				kg.obj.style.border="1px solid gray";
				kg.obj.lastChild.style.left="25px"
				kg.obj.lastChild.innerHTML="关"
				document.getElementById(kg.inputObj).value="0"
		}
		$(kg.obj).click(function(event)
		{
			var e=event
			if(e.target.nodeName=="SPAN"||e.target.nodeName=="LABEL")
			{
				kg.obj=e.target.parentNode
			}
			else
			{
				kg.obj=e.target
			}
			var x=kg.obj.firstChild.style.marginLeft
			if(x=="0px")
			{
				kgk()
			}
			else
			{
			   kgg()
			}
		})
	}
	
})(jQuery);

