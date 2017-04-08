///插件最优格式 默认给的是选择器模式
;(function($,window,document,undefined){ 
   
  //默认的参数-->给用户配置的
  var _def_ ={
  	dataTop:20,
  	dataLeft:0
  }
  var  _propt_ ={
    //init用来初始化参数 dom,和变量的定义
    _init:function(options){
    		var yearNow = new Date().getFullYear(); 
    		var getMonth = new Date().getMonth()+1; 
    		var getDate = new Date().getDate(); 
    		var that = this;
        that.options = $.extend(_def_,options);
//      var time ='<div class="timeData"><span>错误信息</span><div class="year"><a href="#">上</a><input class="year_input" type="text" name="" id="" value="" /><a href="#">下</a></div><div class="month"><a href="#">上</a><input class="year_month" type="text" name="" id="" value="" /><a href="#">下</a></div><div class="day"><a href="#">上</a><input class="year_day" type="text" name="" id="" value="" /><a href="#">下</a></div></div>';
		var time ='<div class="timeData"><span>错误信息</span><div class="year"><a href="javascript:void(0);">上</a><input class="year_input" type="text" name="" id="" value="" /><a href="javascript:void(0);">下</a></div><div class="month"><a href="javascript:void(0);">上</a><input class="year_month" type="text" name="" id="" value="" /><a href="javascript:void(0);">下</a></div><div class="day"><a href="javascript:void(0);">上</a><input class="year_day" type="text" name="" id="" value="" /><a href="javascript:void(0);">下</a></div></div>';
		//dom完善
        $(time).insertAfter(that)
        //控件的位置		
		$(that).next(".timeData").css('top',that.options.dataTop+'px')
		$(that).next(".timeData").css('left',that.options.dataLeft+'px')
		
		if ($(that).val()) {//如果是有值的情况下
		 	var time = $(that).val().split('-');	 	
		 	//年
	       	$(that).next(".timeData").find(".year_input").val(time[0]).attr("yrar",time[0]);	       	
	       	//月
	       	$(that).next(".timeData").find(".year_month").val(time[1]).attr("yrar",time[1]);
	       	
	       	//日
	       	$(that).next(".timeData").find(".year_day").val(time[2]).attr("yrar",time[2]);
		 }else{
		 	//年
	       	$(that).next(".timeData").find(".year_input").val(yearNow-26).attr("yrar",yearNow);
	       	
	       	//月
	       	$(that).next(".timeData").find(".year_month").val(getMonth).attr("yrar",getMonth);
	       	
	       	//日
	       	$(that).next(".timeData").find(".year_day").val(getDate).attr("yrar",getDate);	       	
		 }		        	
    },
    //_handle 专门处理事件的
    _handle :function(){
   	 	var yearNow = new Date().getFullYear(); 
        //同级调用插件的方式this.lock,调用默认参数this.options.xx         
        //插件开始的时候要存一下tihs
        var that = this;
        //上
        var oPrev = $(that).next(".timeData").find("div >a:nth-child(1)");
        //下
        var oNext = $(that).next(".timeData").find("div >a:nth-child(3)");
        //input失去焦点
        var oInput = $(that).next(".timeData").find("div >input");
        
        //点击dom的时候插件隐藏
        $(document).bind('click',function(ev){
        		if (!$(that).next(".timeData").is(":hidden")){
        			ev.stopPropagation();//阻止冒泡
        			that.trigger("timeData");//回调ok这个方法
        			$(that).next(".timeData").hide();
        		}      	 	
        })
        $(that).next(".timeData").bind('click',function(ev){
        		ev.stopPropagation();//阻止冒泡
        })      
         $(that).bind("click",function(ev){
       	 	ev.stopPropagation();//阻止冒泡       	
        })
        //input获取焦点的时候显示
        $(that).bind("focusin",function(ev){
       	 	ev.stopPropagation();//阻止冒泡
        		$(that).next(".timeData").slideDown();
        		editInput();
        })
        
        var str ;
       oPrev.bind("click",function(){			
        	    var onum = $(this).next("input").val();      	          		
        		if ($(this).next("input").hasClass("year_input")) {//年
        			if (onum<yearNow-120) {
//      				$(that).next(".timeData").find(">span").text("年龄不合适");
        				return;
        			}
        		}
        		if ($(this).next("input").hasClass("year_month")) {//月
        			var oDay = $(that).next(".timeData").find(".year_day");//天
        			if(onum==3 && oDay.val()>28){
        				oDay.val('28');
        			}
        		}
        		
        		if (onum<2) {
        			return;
        		}
        		//<10的处理
        		if ($(this).next("input").val()<11) {
        			--onum;
        			$(this).next("input").val('0'+onum);
        			editInput();
        			return;
        		}
        		$(this).next("input").val(--onum);  
        		editInput();
       })
		//input失去焦点的时候
		oInput.bind("blur",function(){
        		var onum = $(this).val();		
			if (onum<1) {
				$(this).val($(this).attr("yrar"));
        			return;
        		}
			if ($(this).hasClass("year_input")) {//年
        			if (onum>yearNow-1 ||onum<yearNow-120) {
        				$(this).val($(this).attr("yrar"));
        				return;
        			}
        		}
			if ($(this).hasClass("year_month")) {//月
        			if (onum>11) {
        				$(this).val($(this).attr("yrar"));
        				return;
        			}
        			var oDay = $(that).next(".timeData").find(".year_day");//天
        			if(onum==2 && oDay.val()>28){
        				oDay.val('28');
        			}
        		}
			if ($(this).hasClass("year_day")) {//日

        			var months = $(that).next(".timeData").find(".year_month").val()
				console.log(months)
        			//在日的时候，必须要根据月判断有多少天
				var dayCount = 0; 			
				if (months==1||months==3||months==5||months==7||months==8||months==10||months==12) {//31
					dayCount = 31
				}
				if (months==4||months==6||months==9||months==11) {//30
					dayCount = 30
				}
				if (months==2) {//2月
					   dayCount = 28; 
	                  if ((yearNow % 4 == 0) && (yearNow % 100 != 0) || (yearNow % 400 == 0)) { 
	                      dayCount = 29; 
	                  } 
				}
				if (onum>dayCount) {
					$(this).val($(this).attr("yrar"));
					return;
				}
        			
        		}
			editInput();
		})
		
		function editInput(){
			//失去焦点的时候修改input里面的值
			str = '';
			for (var i = 0; i < oInput.length; i++) {
				str+=oInput[i].value+'-';
			}
			$(that).val(str.substring(0,str.length-1))
			$(that).attr('BBattr',str.substring(0,str.length-1))
		}
		
		
		//加
        oNext.bind("click",function(){
        		var onum = $(this).prev("input").val();
        		if ($(this).prev("input").hasClass("year_input")) {//年
        			if (onum>yearNow-1) {
        				$(that).next(".timeData").find(">span").text("您还没出生呢");
        				$(this).prev("input").val(yearNow)
        				return;
        			}
        		}
        		if ($(this).prev("input").hasClass("year_month")) {//月
        			if (onum>11) {
        				return;
        			}
        			var oDay = $(that).next(".timeData").find(".year_day");//天
        			if(onum==1 && oDay.val()>28){
        				oDay.val('28');
        			}
        		}       		
        		if ($(this).prev("input").hasClass("year_day")) {//日
        			
        			var months = $(that).next(".timeData").find(".year_month").val()

        			//在日的时候，必须要根据月判断有多少天
				var dayCount = 0; 			
				if (months==1||months==3||months==5||months==7||months==8||months==10||months==12) {//31
					dayCount = 31
				}
				if (months==4||months==6||months==9||months==11) {//30
					dayCount = 30
				}
				if (months==2) {//2月
					   dayCount = 28; 
	                  if ((yearNow % 4 == 0) && (yearNow % 100 != 0) || (yearNow % 400 == 0)) { 
	                      dayCount = 29; 
	                  } 
				}
				if (onum>dayCount-1) {
					return;
				}
        			
        		}
        		//<10的处理
        		if ($(this).prev("input").val()<9) {
        			++onum;
        			$(this).prev("input").val('0'+onum);
        			editInput();
        			return;
        		}
        		$(this).prev("input").val(++onum);
        		editInput();
        })
    }
     
  }
  //鼠标滚动翻屏插件
  $.fn.dataYear = function(options){
    $.extend(this,_propt_); //让插件继承 _propt_里面的所有方法
    this._init(options); //初始化插件方法,用户传的可以覆盖
    this._handle();
  }
  $.fn.dataYearxx = function(options){
    $.extend(this,_propt_); //让插件继承 _propt_里面的所有方法
    this._init(options); //初始化插件方法,用户传的可以覆盖
    this._handle();
  }
})(jQuery,window,document);