
$(function(){

		//无限分类
			var $subblock = $(".subpage"), $head=$subblock.find('h2'), $ul = $("#proinfo"), $lis = $ul.find("li"), inter=false;
			
			$head.click(function(e){
				e.stopPropagation();
				if(!inter){
					$ul.show();
				}else{
					$ul.hide();
				}
				inter=!inter;
			});
			
			$ul.click(function(event){
				event.stopPropagation();
			});
			
			$(document).click(function(){
				
			});

			$lis.hover(function(){
				if(!$(this).hasClass('nochild')){
					$(this).addClass("prosahover");
					$(this).find(".prosmore").removeClass('hide');
				}
			},function(){
				if(!$(this).hasClass('nochild')){
					if($(this).hasClass("prosahover")){
						$(this).removeClass("prosahover");
					}
					$(this).find(".prosmore").addClass('hide');
				}
			});
		
	//button搜素按钮绑定筛选页面
	
	
	//给导航条做选项卡切换
	$("#topnav .login a").hover(function(){
		$("#n1").show();
		$(this).css({border:"1px solid #ccc"});
	},function(event){
		var event = event||window.event;
		if(event.clientX>154){
		$("#n1").fadeOut();
		}
		$(this).css({border:"none"});

	});
	$("#n1").hover(function(){
		$(this).show();
	},function(){
		$(this).fadeOut();
	});
	//选项卡li移进移出的处理
	var $nav_li = $("#topnav ul li");
	var $nav_div = $("nav>div:gt(2)");
	var $li_em = $("#topnav ul li em");
		$nav_li.hover(function(){
			var index = $nav_li.index(this);           //获取li的索引值，灵活变化
			$nav_div.eq(index).show();
			$li_em.eq(index).css({backgroundPosition:"-210px 0px"});
		},function(event){
			var event = event||window.event;
			var index = $nav_li.index(this); 
			$li_em.eq(index).css({backgroundPosition:"-190px 0px"});
			if(event.clientY>25){
				$nav_div.eq(index).show();
			}else{ 
				$nav_div.eq(index).fadeOut();
		}
		});
		$nav_div.hover(function(){
		$(this).show();
		},function(){
			$(this).fadeOut();
		});



//中间大的轮播图部分
	var lbimg = $("#lunboBig img");
	var libox = $("#cfbox ul li");
	var n = 0;
	//箭头点击事件
		$(".arrowright").click(function(){
			n++;     //全局变量
			if(n>8){
				n=0;
			}
			libox.eq(n).addClass("bgcol").siblings().removeClass("bgcol");
			lbimg.eq(n).fadeIn().siblings().hide();
		});

		$(".arrowleft").click(function(){
			n--;     //全局变量
			if(n<0){
				n=8;
			}
			libox.eq(n).addClass("bgcol").siblings().removeClass("bgcol");
			lbimg.eq(n).fadeIn().siblings().hide();
		});
		
		libox.mouseover(function(){
			$(this).addClass("bgcol").siblings().removeClass("bgcol");
			var index = libox.index(this);
			n = index;                    //当我触发over事件时，把当下的索引给n，这样n的定时器相加就不会变。
			lbimg.eq(index).show().siblings().hide();
		})

		var timer01 = setInterval(big_next,4000);
			function big_next(){
				n++;                                                      //全局变量
				if(n>8){
					n=0;
				}
				var index = libox.index(this);
				libox.eq(n).addClass("bgcol").siblings().removeClass("bgcol");
				lbimg.eq(n).fadeIn().siblings().hide();
			}
		lbimg.hover(function(){
			clearInterval(timer01);
		},function(){
			timer01 = setInterval(big_next,4000);  //全局定时器
		});
		
	//wrap01里的专属活动宣传栏，点击滚动效果
		var ulleft = 0;
		var n = 0;
		var $wrap_ul = $(".wrap_b_con>ul");
		var $top_a = $(".wrap_a_top a");
		$(".next_btn").click(function(){
			ulleft-=1044;
			if(ulleft<=-3132){
				ulleft = 0;
			}
			n++;
			if(n>2){
				n = 0;
			}
			$wrap_ul.animate({left:ulleft+"px"},500);
			$top_a.eq(n).addClass("top_bar").siblings().removeClass("top_bar");
		})
		$(".prev_btn").click(function(){
			ulleft+=1044;
			if(ulleft>0){
				ulleft = -2088;
			}
			n--;
			if(n<0){
				n = 2;
			}
			$wrap_ul.animate({left:ulleft+"px"},500);
			$top_a.eq(n).addClass("top_bar").siblings().removeClass("top_bar");
		})
	
		//good01-good09中间的进度条式轮播图
		//进口食品轮播
		
			var $jinkou_ul = $("#jinkou_lunbo .img_box");
			var $jinkou_li = $("#jinkou_lunbo .trig_box li a");
			var $jinkou_span = $("#jinkou_lunbo .trig_box li a span");
				$jinkou_li.hover(function(){
					clearInterval(jinkouTag);
					var index = $jinkou_li.index(this);
					$jinkou_span.eq(index).css({width:"30px"});
				},function(){
					var index = $jinkou_li.index(this);
					$jinkou_span.eq(index).css({width:"0%"});;
				});
				$jinkou_span.mouseout(function(){
					var index = $jinkou_li.index(this);
					$(this).eq(index).css({width:"0%"});
				})
				//单独对每一个小轮播项目进行定时器，因为span的下标都遍历的话，没办法单独操控
				var jinkouTag = setInterval(jinkouNext,3500); 
				var a = -1;        
				function jinkouNext(){
					a++;
					if(a>2){
						a = 0;
						$jinkou_span.css({width:"0%"});;
					}
					var Left = -a*330;
					$jinkou_ul.animate({left:Left+"px"},1000);
					$jinkou_span.eq(a).animate({width:"30px"},3500);
				}
					$("#jinkou_lunbo").hover(function(){
						clearInterval(jinkouTag);
					},function(){	
					var jinkouTag = setInterval(jinkouNext,3500);
					});
			//活色生鲜部分 huose_lunbo
			var $huose_ul = $("#huose_lunbo .img_box");
			var $huose_li = $("#huose_lunbo .trig_box li a");
			var $huose_span = $("#huose_lunbo .trig_box li a span");
				$huose_li.hover(function(){
					clearInterval(huoseTag);
					var index = $huose_li.index(this);
					$huose_span.eq(index).css({width:"30px"});
				},function(){
					var index = $huose_li.index(this);
					$huose_span.eq(index).css({width:"0%"});;
				});
				$huose_span.mouseout(function(){
					var index = $huose_li.index(this);
					$(this).eq(index).css({width:"0%"});
				})
				//单独对每一个小轮播项目进行定时器，因为span的下标都遍历的话，没办法单独操控
				var huoseTag = setInterval(huoseNext,3500);    
				var b = -1;      
				function huoseNext(){
					b++;
					if(b>2){
						b = 0;
						$huose_span.css({width:"0%"});;
					}
					var Left = -b*330;
					$huose_ul.animate({left:Left+"px"},1000);
					$huose_span.eq(b).animate({width:"30px"},3500);
				}
					$("#huose_lunbo").hover(function(){
						clearInterval(huoseTag);
					},function(){	
					var huoseTag = setInterval(huoseNext,3500);
					});
			//食品饮料部分 spyl_lunbo
			var $spyl_ul = $("#spyl_lunbo .img_box");
			var $spyl_li = $("#spyl_lunbo .trig_box li a");
			var $spyl_span = $("#spyl_lunbo .trig_box li a span");
				$spyl_li.hover(function(){
					clearInterval(spylTag);
					var index = $spyl_li.index(this);
					$spyl_span.eq(index).css({width:"30px"});
				},function(){
					var index = $spyl_li.index(this);
					$spyl_span.eq(index).css({width:"0%"});;
				});
				$spyl_span.mouseout(function(){
					var index = $spyl_li.index(this);
					$(this).eq(index).css({width:"0%"});
				})
				//单独对每一个小轮播项目进行定时器，因为span的下标都遍历的话，没办法单独操控
				var spylTag = setInterval(spylNext,3500);
				var c = -1;          
				function spylNext(){
					c++;
					if(c>2){
						c = 0;
						$spyl_span.css({width:"0%"});;
					}
					var Left = -c*330;
					$spyl_ul.animate({left:Left+"px"},1000);
					$spyl_span.eq(c).animate({width:"30px"},3500);
				}
					$("#spyl_lunbo").hover(function(){
						clearInterval(spylTag);
					},function(){	
					var spylTag = setInterval(spylNext,3500);
					});
			//个户厨卫部分 ghcw_lunbo
			var $ghcw_ul = $("#ghcw_lunbo .img_box");
			var $ghcw_li = $("#ghcw_lunbo .trig_box li a");
			var $ghcw_span = $("#ghcw_lunbo .trig_box li a span");
				$ghcw_li.hover(function(){
					clearInterval(ghcwTag);
					var index = $ghcw_li.index(this);
					$ghcw_span.eq(index).css({width:"30px"});
				},function(){
					var index = $ghcw_li.index(this);
					$ghcw_span.eq(index).css({width:"0%"});;
				});
				$ghcw_span.mouseout(function(){
					var index = $ghcw_li.index(this);
					$(this).eq(index).css({width:"0%"});
				})
				//单独对每一个小轮播项目进行定时器，因为span的下标都遍历的话，没办法单独操控
				var ghcwTag = setInterval(ghcwNext,3500); 
				var d = -1;         
				function ghcwNext(){
					d++;
					if(d>2){
			 			d = 0;
						$ghcw_span.css({width:"0%"});;
					}
					var Left = -d*330;
					$ghcw_ul.animate({left:Left+"px"},1000);
					$ghcw_span.eq(d).animate({width:"30px"},3500);
				}
					$("#ghcw_lunbo").hover(function(){
						clearInterval(ghcwTag);
					},function(){	
					var ghcwTag = setInterval(ghcwNext,3500);
					});
			//母婴玩具部分 mywj_lunbo
			var $mywj_ul = $("#mywj_lunbo .img_box");
			var $mywj_li = $("#mywj_lunbo .trig_box li a");
			var $mywj_span = $("#mywj_lunbo .trig_box li a span");
				$mywj_li.hover(function(){
					clearInterval(mywjTag);
					var index = $mywj_li.index(this);
					$mywj_span.eq(index).css({width:"30px"});
				},function(){
					var index = $mywj_li.index(this);
					$mywj_span.eq(index).css({width:"0%"});;
				});
				$mywj_span.mouseout(function(){
					var index = $mywj_li.index(this);
					$(this).eq(index).css({width:"0%"});
				})
				//单独对每一个小轮播项目进行定时器，因为span的下标都遍历的话，没办法单独操控
				var mywjTag = setInterval(mywjNext,3500);  
				var e = -1;        
				function mywjNext(){
					e++;
					if(e>2){
						e = 0;
						$mywj_span.css({width:"0%"});;
					}
					var Left = -e*330;
					$mywj_ul.animate({left:Left+"px"},1000);
					$mywj_span.eq(e).animate({width:"30px"},3500);
				}
					$("#mywj_lunbo").hover(function(){
						clearInterval(mywjTag);
					},function(){	
					var mywjTag = setInterval(mywjNext,3500);
					});
			//家具馆部分 jiaju_lunbo
			var $jiaju_ul = $("#jiaju_lunbo .img_box");
			var $jiaju_li = $("#jiaju_lunbo .trig_box li a");
			var $jiaju_span = $("#jiaju_lunbo .trig_box li a span");
				$jiaju_li.hover(function(){
					clearInterval(jiajuTag);
					var index = $jiaju_li.index(this);
					$jiaju_span.eq(index).css({width:"30px"});
				},function(){
					var index = $jiaju_li.index(this);
					$jiaju_span.eq(index).css({width:"0%"});;
				});
				$jiaju_span.mouseout(function(){
					var index = $jiaju_li.index(this);
					$(this).eq(index).css({width:"0%"});
				})
				//单独对每一个小轮播项目进行定时器，因为span的下标都遍历的话，没办法单独操控
				var jiajuTag = setInterval(jiajuNext,3500);   
				var f = -1;       
				function jiajuNext(){
					f++;
					if(f>2){
						f = 0;
						$jiaju_span.css({width:"0%"});;
					}
					var Left = -f*330;
					$jiaju_ul.animate({left:Left+"px"},1000);
					$jiaju_span.eq(f).animate({width:"30px"},3500);
				}
					$("#jiaju_lunbo").hover(function(){
						clearInterval(jiajuTag);
					},function(){	
					var jiajuTag = setInterval(jiajuNext,3500);
					});
			//流行百货部分 pop_lunbo
			var $pop_ul = $("#pop_lunbo .img_box");
			var $pop_li = $("#pop_lunbo .trig_box li a");
			var $pop_span = $("#pop_lunbo .trig_box li a span");
				$pop_li.hover(function(){
					clearInterval(popTag);
					var index = $pop_li.index(this);
					$pop_span.eq(index).css({width:"30px"});
				},function(){
					var index = $pop_li.index(this);
					$pop_span.eq(index).css({width:"0%"});;
				});
				$pop_span.mouseout(function(){
					var index = $pop_li.index(this);
					$(this).eq(index).css({width:"0%"});
				})
				//单独对每一个小轮播项目进行定时器，因为span的下标都遍历的话，没办法单独操控
				var popTag = setInterval(popNext,3500);  
				var g = -1;        
				function popNext(){
					g++;
					if(g>2){
						g = 0;
						$pop_span.css({width:"0%"});;
					}
					var Left = -g*330;
					$pop_ul.animate({left:Left+"px"},1000);
					$pop_span.eq(g).animate({width:"30px"},3500);
				}
					$("#pop_lunbo").hover(function(){
						clearInterval(popTag);
					},function(){	
					var popTag = setInterval(popNext,3500);
					});
			//手机家电部分 sjjd_lunbo	
			var $sjjd_ul = $("#sjjd_lunbo .img_box");
			var $sjjd_li = $("#sjjd_lunbo .trig_box li a");
			var $sjjd_span = $("#sjjd_lunbo .trig_box li a span");
				$sjjd_li.hover(function(){
					clearInterval(sjjdTag);
					var index = $sjjd_li.index(this);
					$sjjd_span.eq(index).css({width:"30px"});
				},function(){
					var index = $sjjd_li.index(this);
					$sjjd_span.eq(index).css({width:"0%"});;
				});
				$sjjd_span.mouseout(function(){
					var index = $sjjd_li.index(this);
					$(this).eq(index).css({width:"0%"});
				})
				//单独对每一个小轮播项目进行定时器，因为span的下标都遍历的话，没办法单独操控
				var sjjdTag = setInterval(sjjdNext,3500);
				var h = -1;         
				function sjjdNext(){
					h++;
					if(h>2){
						h = 0;
						$sjjd_span.css({width:"0%"});;
					}
					var Left = -h*330;
					$sjjd_ul.animate({left:Left+"px"},1000);
					$sjjd_span.eq(h).animate({width:"30px"},3500);
				}
					$("#sjjd_lunbo").hover(function(){
						clearInterval(sjjdTag);
					},function(){	
					var sjjdTag = setInterval(sjjdNext,3500);
					});	

			//闪购部分选项卡
			var $sgli = $(".sg_tab li a");
			var $sgdiv = $(".sg_tabcontent");
			var $arrow = $(".tab_arrow");
				$sgli.hover(function(){
					var index = $sgli.index(this);
					$arrow.animate({left:30+68*index+"px"},300);
					$sgdiv.eq(index).show().siblings().hide();
				})
			//左侧楼梯下拉变换效果
			var $floorLeft = $("#floorleft");
			var $floorshow = $("#floorleft a i");
			$(window).scroll(function(){         //给浏览器窗口绑定滚动事件
				var scrolltop = document.body.scrollTop||document.documentElement.scrollTop;
				if(scrolltop>=1600){
					$floorLeft.fadeIn();
				}
				if(scrolltop<1600){
					$floorLeft.fadeOut();
				}
				if(scrolltop>=1600&&scrolltop<2000){
					$floorshow.eq(0).hide();
				}
				if(scrolltop>=2000&&scrolltop<2400){
					$floorshow.eq(0).show();
					$floorshow.eq(1).hide();
				}
				if(scrolltop>=2400&&scrolltop<2800){
					$floorshow.eq(0).show();
					$floorshow.eq(1).show();
					$floorshow.eq(2).hide();
				}
				if(scrolltop>=2800&&scrolltop<3200){
					$floorshow.eq(0).show();
					$floorshow.eq(1).show();
					$floorshow.eq(2).show();
					$floorshow.eq(3).hide();
				}
				if(scrolltop>=3200&&scrolltop<3600){
					$floorshow.eq(0).show();
					$floorshow.eq(1).show();
					$floorshow.eq(2).show();
					$floorshow.eq(3).show();
					$floorshow.eq(4).hide();
				}
				if(scrolltop>=3600&&scrolltop<4000){
					$floorshow.eq(0).show();
					$floorshow.eq(1).show();
					$floorshow.eq(2).show();
					$floorshow.eq(3).show();
					$floorshow.eq(4).show();
					$floorshow.eq(5).hide();
				}
				if(scrolltop>=5100&&scrolltop<5300){
					$floorshow.eq(0).show();
					$floorshow.eq(1).show();
					$floorshow.eq(2).show();
					$floorshow.eq(3).show();
					$floorshow.eq(4).show();
					$floorshow.eq(5).show();
					$floorshow.eq(6).hide();
				}
				if(scrolltop>=5300&&scrolltop<5600){
					$floorshow.eq(0).show();
					$floorshow.eq(1).show();
					$floorshow.eq(2).show();
					$floorshow.eq(3).show();
					$floorshow.eq(4).show();
					$floorshow.eq(5).show();
					$floorshow.eq(6).show();
					$floorshow.eq(7).hide();
				}
			});

			//右侧导航条效果
			var $rticon = $("#nav_right .rt_icon");
			var $rtcon = $("#nav_right .rt_con");
				$rticon.hover(function(){
					var index = $rticon.index(this);
					$rtcon.eq(index).animate({left:"-62px"},500);
				},function(event){
					var event = event||window.event;
					var index = $rticon.index(this);
					if(event.clientX>=1260&&event.clientX<=1314){
						$rtcon.eq(index).animate({left:"-62px"},500);
					}else{
					$rtcon.eq(index).animate({left:"35px"},500);
					}
				});
				$rtcon.mouseout(function(){
					var index = $rticon.index(this);
					$rtcon.eq(index).animate({left:"35px"},500);
				})
				
				$rticon.eq(5).click(function(){
					$("html").scrollTop(300);
				})

				//遮罩层部分
			var $zzc = $("#zzc");
			var $welimg = $(".welimg");
			$(window).resize(function(){
				var newwidth = this.innerWidth;
				var newheight = this.innerHeight;
				$zzc.css({height:newheight+"px",width:newwidth+"px"});
			});
			var $cross = $(".welimg .welcross");
				$cross.click(function(){
					$zzc.hide();
					$welimg.hide();
				});
})











