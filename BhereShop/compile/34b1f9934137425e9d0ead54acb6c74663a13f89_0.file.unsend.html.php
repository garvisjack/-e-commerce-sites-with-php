<?php
/* Smarty version 3.1.30, created on 2017-04-01 17:16:15
  from "/usr/lamp/apache2/htdocs/template/pi/unsend.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58df6fdf0d0e37_78419575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34b1f9934137425e9d0ead54acb6c74663a13f89' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pi/unsend.html',
      1 => 1491038057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58df6fdf0d0e37_78419575 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cut')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.cut.php';
?>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
	<!--<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/safe/aywmq_qt.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/safe/da_opt.js"><?php echo '</script'; ?>
>-->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" href="./public/css/pi/safe/css.css" />
	<link rel="stylesheet" href="./public/css/pi/safe/common.min.css" />
	<link rel="stylesheet" href="./public/css/pi/safe/ms-style.min.css" />
	<link rel="stylesheet" href="./public/css/pi/safe/personal_member.min.css" />
	<link rel="stylesheet" href="./public/css/pi/safe/Snaddress.min.css" />
	<link rel="stylesheet" href="./public/css/pi/sui.css" />
	<link rel="stylesheet" href="./public/css/pi/css.css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/jquery-1.9.1.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/sui.js" ><?php echo '</script'; ?>
>
	<style>
		a{
			color: #000000;
		}
		.fenye{
			border: 1px #ccc solid;
			padding: 2px;
			width: 20px;
			margin-left: 10px;
		}
		.sui-table th, .sui-table td {
			padding: 16px 8px;
			line-height: 18px;
			text-align: center;
			vertical-align: middle;
			border-top: 1px solid #e6e6e6;

		}
		.sui-nav.nav-tabs > .active > a {
			font-weight: bold;
			border: 0px;
			background-color: #F37B1D;
			/* border-bottom-color: transparent; */
			cursor: default;
			font-weight: bold;
			color: #fff;
		}
		.sui-nav.nav-tabs > li > a {
			color: #333333;
			line-height: 18px;
			-webkit-border-radius: 3px 3px 0 0;
			-moz-border-radius: 3px 3px 0 0;
			border-radius: 3px 3px 0 0;
			border: 0px;
			/*border-bottom: 1px #ccc solid;*/
			height: 30px;
			width: 110px;
			text-align: center;
			padding-top: 10px;
			font-size: 14px;
		}
		.sui-nav.nav-tabs {
			border-bottom: 1px solid #e9e9e9;
			padding-left: 5px;
		}
		.sui-nav.nav-tabs > .active > a:hover {
			font-weight: bold;
			border: 0px;
			background-color: #F37B1D;
			/* border-bottom-color: transparent; */
			cursor: default;
			font-weight: bold;
			color: #fff;
		}
		.sui-nav.nav-tabs > li {
			margin-bottom: 0px;
			background-color: #F8F8F8;
		}
		.pingspan {
			display: inline-block;
			width: 3px;
			text-align: center;
			height: 3px;
			background-color: #000000;
			border-radius: 50%;
			margin-right: 5px;
			margin-bottom: 3px;
			margin-top: 7px;
		}
	</style>
</head>

<body class="ms-body">
<div id="" class="ng-top-banner"></div>
<div class="ng-toolbar">
	<!--顶部导航的位置-->

	<div id="menu">
		<ul>
			<li><a href="?c=index&a=index">WELCOME BHERESHOP</a>
				<div>
					<ul>
						<li><a href="default.htm">新用户注册</a></li>
						<li><a href="default.htm"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
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
						<li><a href="default.htm">卖家服务中心</a></li>
						<li><a href="default.htm">体验培训中心</a></li>
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
			<li><a href="categories.html" style='color:#EA2F2F'>Hi~<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
			<li><a href="categories.html" style='color:#EA2F2F'>注册帐号</a></li>
		</ul>
	</div>
</div>

</div>
</div>
<header class="ms-header ms-header-inner ms-head-position">
	<article class="ms-header-menu">
		<style type="text/css">
			.nav-manage .list-nav-manage {
				position: absolute;
				padding: 15px 4px 10px 15px;
				left: 0;
				top: -15px;
				width: 90px;
				background: #FFF;
				box-shadow: 1px 1px 2px #e3e3e3, -1px 1px 2px #e3e3e3;
				z-index: 10;
			}

			.ms-nav li {
				float: left;
				position: relative;
				padding: 0 20px;
				height: 44px;
				font: 14px/26px "Microsoft YaHei";
				color: #FFF;
				cursor: pointer;
				z-index: 10;
			}
			#content{
				margin: 10px 19%;
				height: 700px;
				border: 1px solid #cccccc;
				width: 59%;
				height: 700px;
				overflow: auto;
				box-shadow: 2px 2px 3px #888888;
			}
		</style>
		<div class="header-menu">
			<div class="ms-logo">
				<a class="ms-head-logo" name="Myyigou_index_none_daohangLogo"><span style="font-size: 30px;color: #e33131;font-weight: bold; line-height: 28px;;">B</span><span style="font-size: 30px;color: #e55155;font-weight: bold; line-height: 28px;;">here</span></a>

			</div>
			<nav class="ms-nav">
				<ul>
					<li class=""><a href="" data-url="">首页</a><i class="nav-arrow"></i></li>
					<li class="nav-manage selected">
						<a href="" data-url="">账户管理<em></em></a><i class="nav-arrow"></i>
						<div class="list-nav-manage " hidden>
							<p class="nav-mge-hover">账户管理<em></em></p>
							<p><a >个人资料</a></p>
							<p><a >安全设置</a></p>
							<p><a >账号绑定</a></p>
							<p><a >地址管理</a></p>

						</div>
					</li>
					<li class="ms-nav-msg"><a>消息</a><i class="nav-arrow"></i></li>
				</ul>
				<div class="ms-search">
					<form>
						<input  type="text" value="">
					</form>
				</div>
			</nav>
		</div>

	</article>

	<article class="ms-useinfo">
		<div class="header-useinfo" id="">
			<div class="ms-avatar">
				<div class="useinfo-avatar">
					<img src="<?php echo $_smarty_tpl->tpl_vars['personimg']->value;?>
">
					<div class="edit-avatar"></div>
					<a class="text-edit-avatar">修改</a>
				</div>
				<a><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
			</div>

			<div class="ms-name-info">
				<div class="link-myinfo">
					<a>我的编号:99653</a>
				</div>
				<div class="info-member">
							<span class="name-member member-1">
        				 <i></i><a target="_blank" >注册会员</a></span>
							<span style="margin-left: 20px;">
        				 <a target="_blank" >我的资料</a></span>
				</div>
				<div class="info-safety">
							<span class="safety-lv lv-3">
        				<a >安全等级：<span>中</span></a>
							</span>
					<a class="bind-phone">
						<i style="background-image: url(./public/img/pi/修改手机.png);"></i>修改手机</a>
					<a class="bind-email">
						<i style="background-image: url(./public/img/pi/绑定邮箱.png);"></i>修改邮箱</a>
					<a class="manage-addr"><i style="background-image: url(./public/img/pi/地址管理.png);"></i>地址管理</a>
				</div>
			</div>
		</div>

	</article>
</header>
<div id="ms-center" class="personal-member">
	<div class="cont">
		<div class="cont-side">
			<div class="side-neck" style="margin-top: 20px;">
				<i></i>
			</div>
			<div class="ms-side" style="margin-top: 20px;">
				<article class="side-menu side-menu-off">
					<dl class="side-menu-tree" style="padding-left: 50px;">
						<dt><img src="./public/img/pi/left/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/><a href='?c=pi&a=index'>个人中心</a></dt>
						<dd>
						<dt><img src="./public/img/pi/left/我的购物车.png"  style="margin-right: 10px;margin-left: -20px;"/><a
								href="?c=car&a=show">我的购物车</a></dt>
						<dt><img src="./public/img/pi/left/file.png"  style="margin-right: 10px;margin-left: -20px;"/>订单管理</dt>
						<dd>
							<a href="?c=pi&a=order">购买记录</a>
						</dd>
						<dd>
							<a href="?c=pi&a=comment">我的评价</a>

						</dd>

						<dt><img src="./public/img/pi/left/file.png"  style="margin-right: 10px;margin-left: -20px;"/>账户管理</dt>
						<dd>
							<a href="?c=pi&a=myinfo">我的资料</a>
						</dd>
						<dd>
							<a href="?c=pi&a=safe">安全设置</a>

						</dd>
						<dd>
							<a href="?c=pi&a=bindacc">帐号绑定</a>

						</dd>
						<dd>
							<a href="?c=pi&a=address">地址管理</a>

						</dd>
						<dt><img src="./public/img/pi/left/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/>我的Bhere</dt>
						<dd>
									<a href="?c=pi&a=address">收货地址管理</a>
						</dd>
						<dd>
							<a href="?c=pi&a=mymoney">我的钱包</a>
						</dd>
						<dt><img src="./public/img/pi/left/v-card-3.png"  style="margin-right: 10px;margin-left: -20px;"/>售后服务</dt>
						<dd>
							<a href="?c=pi&a=rg">退换货</a>

						</dd>
						<dd>
							<a href="#">意见/投诉</a>

						</dd>
					</dl>


					<a ison="on" class="switch-side-menu icon-up-side"><i></i></a>
				</article>
			</div>
		</div>
	</div>
</div>
<h2 style="line-height: 32.94px;margin: 5px 19%;color: teal;border-bottom: 1px solid turquoise;font-size: 16px;font-family: fantasy;font-weight: bold;color: steelblue;">待收货</h2>
<div id="content">

                 <!--我的物流遍历-->								
									

                                    <?php if ($_smarty_tpl->tpl_vars['arr']->value != '') {?>
                                    
									<div style="padding: 20px 20px;border-bottom: 1px #F5F5F5 solid;height: 150px;">
										 <table style="text-align: center">
										 	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                             <tr>
                                                 <td colspan="4"> <span style="display: block;float: right;font-family: -webkit-pictograph;font-size: 14px;;">订单号：<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
</span></td>
                                             </tr>
                                             <tr>
                                                 <td style="  width:130px;">
                                               <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" /></a>
                                             </td>
                                                 <td style="width:130px;">
                                                     <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['goods_id'];?>
"><p style="font-size:12px;color: olivedrab;font-family: fantasy;"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</p></a>
											<p><span style="    font-size: 14px;font-family: initial;color: slateblue;">下单时间：</span>&nbsp;&nbsp;<i style="font-style: italic;font-family: cursive;"><?php echo $_smarty_tpl->tpl_vars['value']->value['addtime'];?>
</i></p>
                                                 </td>
                                                 <td style="width:160px">
                                                     <span style="color: tomato;font-family: fantasy;">¥<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</span><span style="    font-size: 15px;color: peru;font-family: sans-serif;margin-left: 13px;">X <?php echo $_smarty_tpl->tpl_vars['value']->value['amount'];?>

                                                     	<br/><i style='font-size:12px;'>订单派送中..</i></span>
                                                 </td>
									                         <td style="width:10%">
                                              <a href="javascript:void(0)" onclick="order(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,$(this))" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;background: #008a80;    font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;" >确认收货</a>
                                              <a href="javascript:void(0)" style="width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;background: #cccccc;    font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;display:none;" >已收货</a>
                                              <a href="?c=pi&a=logistics&order=<?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
" style="    width: 74px;height: 20px;display: block;float: right;border: 1px solid;border-radius: 7px;color: #eeeeee;margin-top: 30px;background: tomato;font-size: 12px;text-align: center;line-height: 20px;font-family: -webkit-body;">查看物流</a>
                                          </td>
                                             </tr>
                                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                         </table>
								
                                   
                                     <?php } else { ?>
                                      <p>你暂时还没有相应的物流信息</p>

                                    <?php }?>
								 </div>





</div>

<?php echo '<script'; ?>
 type="text/javascript">
	//确认收货
	function order(id,node){
		var orderid=id;//订单ID
		if(confirm('确认收货吗？')){
			$.getJSON("?c=pi&a=confirmorder",{id:orderid},function(msg){;
				if(msg==1){
					node.hide(100)
					node.next().show(200)
				}else{
					alert('确认失败')
				}
			})
		}

	}
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
