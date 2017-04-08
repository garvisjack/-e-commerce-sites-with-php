<?php
/* Smarty version 3.1.30, created on 2017-04-01 21:08:27
  from "/usr/lamp/apache2/htdocs/template/goods-detail/goods-detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dfa64b576b15_40446970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f44f4adbb09ecaf01758a66ec04668053d5edcb4' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/goods-detail/goods-detail.html',
      1 => 1491046855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dfa64b576b15_40446970 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cut')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.cut.php';
if (!is_callable('smarty_modifier_time')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.time.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>BhereShop-商品详情页</title>
<link href="./public/css/goods-detail/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="./public/css/goods-detail/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href="./public/css/goods-detail/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./public/css/goods-detail/css.css" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Swim Wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./public/js/goods-detail/jquery.min.js"><?php echo '</script'; ?>
>

<!-- cart -->
		<?php echo '<script'; ?>
 src="./public/js/goods-detail/simpleCart.min.js"> <?php echo '</script'; ?>
>
	<!-- cart -->
<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/goods-detail/bootstrap-3.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./public/js/goods-detail/imagezoom.js"><?php echo '</script'; ?>
>

						<!-- FlexSlider -->
  <?php echo '<script'; ?>
 defer src="./public/js/goods-detail/jquery.flexslider.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="./public/css/goods-detail/flexslider.css" type="text/css" media="screen" />
	<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pay/js/distpicker.data.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pay/js/distpicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pay/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
<?php echo '</script'; ?>
>
    <style type="text/css">
        .on{
            display:inline-block;font-size: 17px; width:25px;height: 25px;background-color: red;text-align: center;line-height: 25px;color: #eeeeee;font-weight: bold;border-radius: 50%;
        }
        .heading{
        	
        	width: 100px;
					float: right;
					margin-right: 125px;
					position: relative;
        	}
        #cart_xxk{
  		width: 400px;
      height: 0px;
			float: left;
			border: 1px solid #ccc;
			position: absolute;
			top: 41px;
			background: snow;
			opacity:0;
			transition: all .5s;
			overflow: auto;
			left: -109px;
			box-shadow: 2px 2px 4px #888888;
			z-index: 10000;
			border-radius: 3%;
  	}
   .heading:hover #cart_xxk{
  		opacity:1;
  		height:320px;
  	}
  		.data{
  		float:left;
  	}
  	.xxk_ul{
  	width:93%;
  	height:25%;
  	margin:15px;
  	box-shadow: 4px 4px 6px #ccc;
  	transition:all .3s;
  	}
  	.xxk_ul li{
  		list-style-type:none;
  		}
  	.xxk_ul:hover{
  		
  	box-shadow: 3px 3px 3px #888;	
  		
  		}
  		
  	a{
  		font-size:14px;
  	}
    </style>
</head>
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
<div id="menu">
<ul>  
<li><a href="?c=index&a=index">WELCOME BHERESHOP</a>
<div>        
<ul>	
<li><a href="?c=lr&a=select">新用户注册</a></li>
<li><a href="default.htm">一键登录Bhere</a></li>
</ul>
</div>
</li>
<li><a href="?c=pi&a=index">个人中心</a>
<div>
<ul>	
<li><a href="default.htm">已买到的商品</a></li>
<li><a href="default.htm">个性化设置</a></li>
</ul>
</div>
</li>
<li><a href="categories.html">收藏夹</a>
<div>
<ul>	
<li><a href="default.htm">收藏的商品</a></li>
<li><a href="default.htm">收藏的店铺</a></li>
</ul>
</div>
</li>
<li><a href="categories.html">卖家中心</a>
<div>
<ul>	
<li><a href="default.htm">免费开店</a></li>
<li><a href="default.htm">已经卖出的商品</a></li>
<li><a href="default.htm">出售中的商品</a></li>
</ul>
</div>
</li>
<li><a href="categories.html">联系客服</a>
<div>
<ul>	
<li><a href="default.htm">消费者客服</a></li>
<li><a href="default.htm">卖家客服</a></li>
</ul>
</div>
</li>
    <li><?php if ($_smarty_tpl->tpl_vars['user']->value != '') {?><a href="javascript:void(0)" style='color:#EA2F2F'>欢迎！<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a><?php } else { ?><a href="?c=lr&a=select" style='color:#EA2F2F'>登录/注册Bhere</a><?php }?><li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a>
    <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
</div>
</li>
</div>
             
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="header-bottom">
					<div class="container">
<!--/.content-->
<div class="content white">
	<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <h1 class="navbar-brand">
                <!--LOGO-->
                <a href="?c=index&a=index"><img width="208" height="108" src="././public/img/goods-detail/logo.png"/></a>
            </h1>
	    </div>
	    <!--/.navbar-header-->
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href="index.html">首页</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">新品推荐<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					           
				            </div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">折扣 <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					           <ul class="multi-column-dropdown">
						            <li><a class="list" href="products.html"></a></li>

					            </ul>
				            </div>
				            <div class="col-sm-4">
					             <ul class="multi-column-dropdown">
						            <li><a class="list"  href="products.html"></a></li>

					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						            <li><a  class="list" href="products.html"></a></li>


					            </ul>
				            </div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Bhere闪购<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						            <li><a class="list" href="products.html"></a></li>

					            </ul>
				            </div>
				            <div class="col-sm-4">
					             <ul class="multi-column-dropdown">
						            <li><a  class="list" href="products.html"></a></li>

					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						            <li><a class="list" href="products.html"></a></li>

					            </ul>
				            </div>
			            </div>
		            </ul>
		        </li>
					<li><a href="products.html">海购专区</a></li>
					<li><a href="products.html">Bhere生活超市</a></li>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
			   <div class="search-box">
					<div id="sb-search" class="sb-search">
						<form>
							<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						</form>
					</div>
				</div>
				<div id="cart">
					<div class="heading" >
					<a href ="?c=car&a=show" style="padding:2px;color:#EA2F2F;font-size:bold;font-size:24px"><img src="./public/img/goods-detail/images/74602894_240.png" width="40px"height="40px"/>
					<span id="cart_total" class="on" style=""><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</span>
					</a>
					<div id=cart_xxk>
						
							<?php if ($_smarty_tpl->tpl_vars['shopcar']->value != '') {?>
						 
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopcar']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
								  <ul class="xxk_ul">
								   <li class="data">
										<a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" style="width: 60px;height: 60px;"></a>
									</li>
									<li class="data" style="width: 60%;margin: 15px 15px;">
								<span style="font-family: inherit;color: tomato;font-size:12px;"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</span>
							     </li>
							     <li class="data" style="margin: 15px;color: orange;">
									<?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
件
						      </li>
						      	</ul>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							<?php } else { ?>
							<img src="./public/img/logo/empty.jpg" width="250px" height="125px" style="margin-top: 95px;margin-left: 75px;"/>
							<?php }?>
						
						
					</div>
					</div>
					
				</div>  
			
<!-- search-scripts -->
					<?php echo '<script'; ?>
 src="./public/js/goods-detail/classie.js"><?php echo '</script'; ?>
>
					<?php echo '<script'; ?>
 src="./public/js/goods-detail/uisearch.js"><?php echo '</script'; ?>
>
						<?php echo '<script'; ?>
>
							new UISearch( document.getElementById( 'sb-search' ) );
						<?php echo '</script'; ?>
>
					<!-- //search-scripts -->
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--header-->
	<div class="content">
		<div class="single">
			<div class="container">
				<div class="single-grids">
					<div class="col-md-4 single-grid1" style='width: 300px;'>
						<h3>猜你喜欢</h3>
							<ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['maylike']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
								<li>
                                    <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><div style="overflow: hidden;width: 110px;white-space: nowrap;font-size:12px;"> <?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</div>
                                        <img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['val']->value['tpic']);?>
" alt="1" width="90" height="90"/>
                                    </a>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</ul>
					</div>
					<div class="col-md-4 single-grid">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['gd']->value[0]['bpic']);?>
">
									<div class="thumb-image"> <img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['gd']->value[0]['bpic']);?>
" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['gd']->value[0]['bpic'],1);?>
">
									 <div class="thumb-image"> <img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['gd']->value[0]['bpic'],1);?>
" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['gd']->value[0]['bpic'],2);?>
">
								   <div class="thumb-image"> <img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['gd']->value[0]['bpic'],2);?>
" data-imagezoom="true" class="img-responsive"> </div>
								</li>
                                <li data-thumb="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['gd']->value[0]['bpic'],3);?>
">
                                    <div class="thumb-image"> <img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['gd']->value[0]['bpic'],3);?>
" data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                            </ul>
						</div>
					</div>
                    <form action="">
					<div class="col-md-4 single-grid simpleCart_shelfItem">		
						<h3 style="font-size:18px;font-weight: bold"><?php echo $_smarty_tpl->tpl_vars['gd']->value[0]['title'];?>
</h3>
						<p>该商品今日<i class='light-tips' style='font-size:14px'>已被浏览<?php echo $_smarty_tpl->tpl_vars['spotnum']->value;?>
次</i></p>
							<div class="galry" style='font-size:14px'>
								<p><?php echo $_smarty_tpl->tpl_vars['gd']->value[0]['short_descr'];?>
<p>
								<div class="prices">
									<h5 class="item_price">特惠:<span class='light-price'>￥<?php echo $_smarty_tpl->tpl_vars['gd']->value[0]['price'];?>
</span></h5>
								</div>
								<div class="clearfix"></div>
							</div>
							<ul class="size">
								<li><span class='light-tips'>已售</span></li>
								<li></li>
							</ul>
                            <ul class="size">
                                <li>库存</li>
                                <li><span class='light-tips'>还剩余<?php echo $_smarty_tpl->tpl_vars['gd']->value[0]['num'];?>
</span></li>
                            </ul>
							<ul class="size">
								<li>促销</li>
								<li><span class='light-tips'><?php echo $_smarty_tpl->tpl_vars['gd']->value[0]['remark'];?>
</span></li>
							</ul>
                            <ul class="size">
                                <li>重量</li>
                                <li><span class='light-tips'><?php echo $_smarty_tpl->tpl_vars['gd']->value[0]['weight'];?>
</span></li>
                            </ul>
							<ul class="size">
								<li>送货至
									<div data-toggle="distpicker">
										<select data-province="---- 选择省 ----" style="width: 80px;"></select>
										<select data-city="---- 选择市 ----" style="width: 100px;"></select>
										<select data-district="---- 选择区 ----" style="width: 80px;"></select>
									</div>
                                    <?php if ($_smarty_tpl->tpl_vars['gd']->value[0]['isship'] == 1) {?>
                                    <span class='light-tips'>免运费,偏远地区除外</span>
                                    <?php } else { ?>
                                    <span class='light-tips'>此商品需买家自行承担运费</span>
                                    <?php }?>
                                </li>
								<li></li>
							</ul>
								<ul class="size">
									<h3></h3>
										<li><a href="#"></a></li>

								</ul>

								<p class="qty" style="font-weight: bold"> 数量 :  </p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
							<div class="btn_form">
                                <a href="javascript:void(0)" onclick="addcar(<?php echo $_smarty_tpl->tpl_vars['gd']->value[0]['id'];?>
)" class="add-cart item_add">立即购买</a>
                                <a href="javascript:void(0)"class="add-cart item_add" onclick="shopcar(<?php echo $_smarty_tpl->tpl_vars['gd']->value[0]['id'];?>
,$(this))">加入购物车</a>
                                <img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['gd']->value[0]['bpic'],3);?>
" alt="" style="float: right;width: 40px;height: 40px;opacity: 0.5;position: absolute; left: 168px;top: 415px;display: none">
							</div>

							<div class="tag">
								<p>商品分类: <a href="#"><?php echo $_smarty_tpl->tpl_vars['attr']->value[0]['type'];?>
</a></p>
								<p>相关标签: <a href="#"><?php echo $_smarty_tpl->tpl_vars['gd']->value[0]['keyword'];?>
 </a></p>
							</div>
					</div>
                    </form>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
<!-- collapse -->
		<div class="collpse">
		<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            规格参数
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <table width="800" cellpadding="0" cellspacing="0" border="1" style="border: 1px solid #666;text-align: left;color:#111;">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attr']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                            <tr style="font-size: 14px;font-weight: bold">
                                <td><?php echo $_smarty_tpl->tpl_vars['val']->value['attr'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['key']->value]['value'];?>
</td>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                        </table>
                    </div>
                </div>
            </div>
		<div style='margin-top:-50px;' class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
			  <h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				 商品详情
				</a>
			  </h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			  <div class="panel-body" style="margin-left: 20px">
                  <?php echo $_smarty_tpl->tpl_vars['gd']->value[0]['descr'];?>

			  </div>
			</div>
		  </div>

		  <div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingThree">
			  <h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				  用户评论
				</a>
			  </h4>
			</div>
			<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			  <div class="panel-body">
                  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="gid"/>
                  <table>
                      <tr style="border-bottom: 1px dashed #ccc">
                          <td colspan="4">
                              <p style="font-size: 16px;color: #222;font-weight: bold">好评度</p>
                              <p style="font-size: 20px;color: #e33131;font-weight: bolder"><?php echo $_smarty_tpl->tpl_vars['per']->value;?>
%</p>
                          </td>
                      </tr>
                      <tr>
                          <td colspan="4">
                              <div class="com-top">
                                  <a href="javascript:void(0)"><input type="radio" name="comment" value="0"/>全部评价(<?php echo $_smarty_tpl->tpl_vars['comTotal']->value;?>
)</a>
                                  <a href="javascript:void(0)"><input type="radio" name="comment" value="5"/>好评(<?php echo $_smarty_tpl->tpl_vars['good']->value;?>
)</a>
                                  <a href="javascript:void(0)"><input type="radio" name="comment" value="3"/>中评(<?php echo $_smarty_tpl->tpl_vars['soso']->value;?>
)</a>
                                  <a href="javascript:void(0)"><input type="radio" name="comment" value="1"/>差评(<?php echo $_smarty_tpl->tpl_vars['bad']->value;?>
)</a>

                              </div>
                          </td>
                      </tr>
                  </table>
         <div id="load" style="margin-left: 250px;display:none;"><img src="./public/img/logo/load.gif"/></div>
				 <div id="com1" class="comment" style="overflow:auto">
                     <table>
                         <!--评论信息部分-->
                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                         <tr style="border-bottom: 1px solid #ccc">
                             <td><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['image'];?>
" title="买家头像" width="50" height="50" style="border-radius: 50%;">
                                 <div><?php echo $_smarty_tpl->tpl_vars['value']->value['user_name'];?>
</div>
                             </td>
                             <td colspan="3">

                                 <?php if ($_smarty_tpl->tpl_vars['value']->value['comment_rank'] == 5) {?>
                                 <div class="comment-star star5"></div>
                                 <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['comment_rank'] <= 2) {?>
                                 <div class="comment-star star1"></div>
                                 <?php } else { ?>
                                 <div class="comment-star star3"></div>
                                 <?php }?>

                                 <p class="comment-con"><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</p>
                                 <div class="pic-list J-pic-list">
                                     <a class="J-thumb-img" href="#none" ></a>
                                 </div>
                                 <div class="comment-message">
                                     <div class="order-info">
                                         <span><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</span>
                                         <span><?php echo smarty_modifier_time($_smarty_tpl->tpl_vars['value']->value['addtime']);?>
</span>
                                     </div>
                                     <div class="comment-op">
                                         <a class="J-nice" href="#" >
                                         <i class="sprite-praise"></i>0</a>
                                     </div>
                                 </div>
                             </td>
                         </tr>
                         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                     </table>
                 </div>
                  <div class="comment" id="com2"></div>
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingFour">
			  <h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				 售后服务
				</a>
			  </h4>
			</div>
			<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			  <div class="panel-body">
				售后服务
			  </div>
			</div>
		  </div>
		</div>
	</div>
</div>
<!-- collapse -->
		<div class="related-products">
			<div class="container">
				<h3>相关推荐信息</h3>
				<div class="product-model-sec single-product-grids">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rcm']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
					<div class="product-grid single-product">
						<a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
						<div class="more-product"><span><?php echo $_smarty_tpl->tpl_vars['value']->value['keyword'];?>
</span></div>
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['mpic']);?>
" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button> + </button>
							</h4>
							</div>
						</div>
						</a>

						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</h4>
								<span class="item_price">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</span>
								<div class="ofr">
								  <p class="pric1"><del><?php echo $_smarty_tpl->tpl_vars['value']->value['mkt_price'];?>
</del></p>
						          <p class="disc"></p>
								</div>
								<div class="clearfix"> </div>
							</div>												
						</div>
					</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
</div>
	<!--footer-->
	<footer class="ft_wrap">
		<div class="icart-footer">
			<div class="icart-footer-top">
				<div style="width:1000px; margin:0 auto;">
				</div>
			</div>
			<div class="icart-footer-container">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'art', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['art']->value) {
?>
				<div class="column_footer">
					<h3><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h3>
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['art']->value, 'ar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ar']->value) {
?>
						<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['ar']->value;?>
</a></li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ul>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				<div class="column_footer" style="margin-right:0px;">
					<h3>Social</h3>
					<ul class="social">
						<li class="twitter"><a href="../../twitter.com/twitter">Twitter Username</a></li>
						<li class="facebook"><a href="../../facebook.com/Username/default.htm">Facebook</a></li>
						<li class="rss"><a href="#">RSS Feed</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="icart-footer-bottom">
				<div style="width:1000px; margin:0 auto;">
					<div class="icart-logo-footer"><a href="index.php"><img src="images/logo-footer.png" alt="Footer Logo"></a></div>
					<ul>
						<li style="float:right;padding-top:10px;list-style:none;"><a href="#">&copy; Copyright &copy; <a target="_blank" href="http://www.huiyi8.com/moban/"></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<!--两边导航-->
	<!--footer-->
    <?php echo '<script'; ?>
 type="text/javascript">

            //结算
            function addcar(data){
                var num = $("#quantity").val()
                location.href="?c=car&a=select&id="+data+"&num="+num
            }
            //加入购物车
            function shopcar(data,node){
                var num = $("#quantity").val()
                $.getJSON("?c=car&a=addcar",{id1:data,num1:num},function(msg){
                    $("#cart_total").text(msg);
                })
                node.next().fadeIn(300).animate({top:'-135px',left:'250px',width:'80px',height:'80px'},1500,function(){
                    $(this).fadeOut(300)
                    $(this).css({left:'168px',top:'415px',width:'40px',height:'40px'})
                    $(".on").animate({height:'20px',lineHeight:'20px'},150,function(){
                        $(".on").animate({height:'25px',lineHeight:'25px'},150,function(){
                        	     location.reload();
                        	})
                                
                    })
                })

            }

        $(function(){
            /**
             * 评论等级的ajax处理
             */
            $('input[type=radio]').click(function(){
                $('#com1').hide();
                $('#com2 table').remove();  //移除掉之前的标签
                $(this).ajaxStart(function(){
                	
                	$("#load").show(100)
                	})
                $.getJSON('?c=gd&a=com',{rank:$(this).val(),id:$('input[name=gid]').val()},function(msg){

                    if(msg!=0){
                        for(var i=0;i<msg.length;i++){
                            $('#com2').append("<table><tr style='border-bottom: 1px solid #ccc'><td><img src='"+msg[i].image+"' title='买家头像' width='50' height='50' style='border-radius: 50%;'><div>"+msg[i].user_name+"</div></td><td colspan='3'><div class='comment-star star"+msg[i].comment_rank+"'></div><p class='comment-con'>"+msg[i].content+"</p><div class='pic-list J-pic-list'><a class='J-thumb-img'href='#none' ></a></div><div class='comment-message'><div class='order-info'> <span>"+msg[i].title+"</span><span>"+msg[i].addtime+"</span></div><div class='comment-op'><a class='J-nice' href='javascript:void(0)'><span class='sprite-praise'></span>0</a></div></div></td></tr></table>");
                        $("#load").hide(100)
                        }
                    }
                })


            })



        })



    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
