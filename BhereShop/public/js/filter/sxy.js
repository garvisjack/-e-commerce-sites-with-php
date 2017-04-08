/* 
* @Author: anchen
* @Date:   2016-12-23 10:15:44
* @Last Modified by:   anchen
* @Last Modified time: 2016-12-23 10:26:44
*/
$(function(){
	$("#hdmidleft").mouseover(function(){
		$("#hdmidlleftxia").css({display:"block"});
		$("#hdmidlleftxia").mouseover(function(){
			$("#hdmidlleftxia").css({display:"block"})
		})
		$("#hdmidlleftxia").mouseout(function(){
			$("#hdmidlleftxia").css({display:"none"})
		})
	})
	$("#hdmidleft").mouseout(function(){
		$("#hdmidlleftxia").css({display:"none"});
	})
	


	var index = $("#fiytop2right li").index($(this));
	$("#fiytop2right li").hover(function(){
		$(".fiytop2rightdiv").each(function(){
			if(index==$("#fiytop2rightdiv").index($(this))){
				$(".fiytop2rightdiv").css({display:"block"});
			}
			else{
				$(".fiytop2rightdiv").css({display:"none"});
			}
		});
	},function(){
		$(".fiytop2rightdiv").each(function(){
			if(index!=$("#fiytop2rightdiv").index($(this))){
				$(".fiytop2rightdiv").css({display:"none"});
			}
			else{
				$(".fiytop2rightdiv").css({display:"block"});
			}
		});
	  })

	/*$("#fiytop2right li").ready(function(){
		$(this).hover(function(){
			$(".fiytop2rightdiv").css({display:"block"});
			},function(){
			$(".fiytop2rightdiv").css({display:"none"});
				});


	})
	*/
})