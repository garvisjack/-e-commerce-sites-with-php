<?php
/* Smarty version 3.1.30, created on 2017-03-30 17:07:16
  from "/usr/lamp/apache2/htdocs/template/filter/filterx.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dccac4926670_63463098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e20292cc13a8617a569acde725c2f1df3efc8e4b' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/filter/filterx.html',
      1 => 1490864790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dccac4926670_63463098 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cut')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.cut.php';
?>
<!doctype html>
<html>
	<head lang="en">
		<meta charset='utf-8'>
		<title>BhereShop-筛选页</title>
		<link rel="stylesheet" type="text/css" href="./public/css/filter/sxy.css">
        <link rel="stylesheet" type="text/css" href="./public/css/filter/css.css">
        <style type=text/css>
        	
        	 .on{
            display:inline-block;font-size: 17px; width:25px;height: 25px;background-color: red;text-align: center;line-height: 25px;color: #eeeeee;font-weight: bold;border-radius: 50%;position: absolute;top: 7px;left: 80px;}
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
  		margin: 0px;
  	}
  .xxk_ul{
  	width:95%;
  	height:27%;
  	margin:15px;
  	box-shadow: 4px 4px 6px #ccc;
  	transition:all .3s;
  	}
  	
  	.xxk_ul:hover{
  		
  	box-shadow: 3px 3px 3px #888;	
  		} 
        	
        </style>
	</head>
<body>
	<div id="head">
        <div id="menu">
            <ul>
                <li><a href="?c=index&a=index">WELCOME BHERESHOP</a>
                    <div>
                        <ul>
                            <li><a href="?c=lr&a=select">新用户注册</a></li>
                            <li><a href="#">一键登录Bhere</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="?c=pi&a=select">个人中心</a>
                    <div>
                        <ul>
                            <li><a href="#">已买到的商品</a></li>
                            <li><a href="#">个性化设置</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:void(0)">收藏夹</a>
                    <div>
                        <ul>
                            <li><a href="#">收藏的商品</a></li>
                            <li><a href="#">收藏的店铺</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:void(0)">卖家中心</a>
                    <div>
                        <ul>
                            <li><a href="#">免费开店</a></li>
                            <li><a href="#">已经卖出的商品</a></li>
                            <li><a href="#">出售中的商品</a></li>
                            <li><a href="#">卖家服务中心</a></li>
                            <li><a href="#">体验培训中心</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:void(0)">联系客服</a>
                    <div>
                        <ul>
                            <li><a href="#">消费者客服</a></li>
                            <li><a href="#">卖家客服</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="?c=lr&a=select" style='color:#EA2F2F'>登录Bhere</a></li>
                <li><a href="?c=lr&a=select" style='color:#EA2F2F'>注册帐号</a></li>
                </ul>
        </div>
    </div>










	<div id="to">
        <form action="" method="post">
            <a href="?c=index&a=index"><img width="210" height="110" src="./public/img/index/logo.png"></a>
            <div id="tomid">
                <div id="tomidleft"><a href="">商品</a></div>
                <input type="hidden" name="cateid" value="">
                <input type="text" name="search" value="" class="input" placeholder="请输入相关商品名">
                <a href="javascript:void(0)" class="button" onclick="searchx()">搜索</a>
            </div>
        </form>
		<ul>

            <li><a href=""></a></li>
		</ul>
		<div id="gouwuche">
            <input min="1" type="hidden" id="quantity" name="quantity" value="1" class="form-control input-small">
            <a href ="?c=car&a=show">
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
								  <dl class="xxk_ul">
								   <dd class="data">
										<a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" style="width: 60px;height: 60px;"></a>
									</dd>
									<dd class="data" style="width: 60%;">
								<span style="font-family: inherit;color: tomato;font-size:12px;"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</span>
							     </dd>
							     <dd class="data" style="margin: 15px;color: orange;">
									<?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
件
						      </dd>
						      	</dl>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							<?php } else { ?>
							<img src="./public/img/logo/empty.jpg" width="250px" height="250px" style="margin-top: 30px;margin-left: 20px;"/>
							<?php }?>
						
						
					</div>
					</div>
                <div class="content"></div>
            </a>
        </div>
	</div>





	<div id="shun">
		<div id="shunda">
			<div id="shundaleft"><a href="">所有商品分类</a>
            </div>
			<ul>
				<li><a href="#" class="shundaa shundaa1">首页</a></li>
				<li><a href="#" class="shundaa shundaa1">新品推荐</a></li>
				<li><a href="#" class="shundaa shundaa1">折扣</a></li>
				<li><a href="#" class="shundaa">闪购</a></li>
				<li><a href="#" class="shundaa">免运费</a></li>
				<li><a href="#" class="shundaa">Bhere生活超市</a></li>
				<li><a href="#" class="shundaa">跨境海淘</a></li>
			</ul>
			<div id="shundaimg"></div>
		</div>
	</div>
    <div style="margin:0px auto;width:800px;">
    	<p style="text-align:center">很抱歉!没有找到您需要的商品!您可以在逛逛商城!</p>
    	<h3 style="text-align: center"><a href="?c=index&a=index" id="filterxa">回到首页</a></h3>
        <img src="./public/img/logo/timg0.jpg" style="margin:5px auto">
    </div>
</body>
</html><?php }
}
