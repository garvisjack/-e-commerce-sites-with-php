<?php
/* Smarty version 3.1.30, created on 2017-04-01 17:23:11
  from "/usr/lamp/apache2/htdocs/template/pi/return-goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58df717f13aee9_24049685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5253cf9a1f9c0c2f25309b7ed23af58b331cca1c' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pi/return-goods.html',
      1 => 1491038585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58df717f13aee9_24049685 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

	<head>
		<meta charset="utf-8">
		<title>Bhere shop 个人中心</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="./public/css/pi/safe/css.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/common.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/ms-style.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/personal_member.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/Snaddress.min.css" />
		<link rel="stylesheet" href="./public/css/pi/css.css" />
		<style>
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
                            <li><a href="?c=lr&a=select">新用户注册</a></li>
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
                <li><a href="categories.html" style='color:#EA2F2F' href="?c=lr&a=index">注册帐号</a></li>
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
								<div class="list-nav-manage " style="display: none">
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
								<input id="" type="text" value="">
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
" style="width: 60px;height:60px;">
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
															<a href="?c=pi&a=unsend">待收货</a>
														</dd>	
                               
                               
                               
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
				<div class="cont-main">
					<div class="main-wrap mt15" style="margin-top: 40px;">
						<div class="server-wrapper">
							<div class="server-tab" style="margin-top: 30px;">

								<input type="button" value="退换货申请" style=" font-weight:bold;color:#F88600;height:34px;width:110px;background:#ffffff;border:1px #F8C3B1 solid; border-bottom:0px;margin-left:10px;"></input>
								<input type="button" value="退换货记录" style="font-weight:bold;height:34px;width:110px;background:#F8F8F8;border:1px #F8C3B1 solid; border-bottom:0px;margin-left:10px;"></input>
								<input type="button" value="退款明细" style="font-weight:bold;height:34px;width:110px;background:#F8F8F8;border:1px #F8C3B1 solid;  border-bottom:0px;margin-left:10px;"></input>
								<input type="button" value="维修申请" style="font-weight:bold;height:34px;width:110px;background:#F8F8F8;border:1px #F8C3B1 solid; border-bottom:0px;margin-left:10px;"></input>
								<input type="button" value="维修记录" style="font-weight:bold;height:34px;width:110px;background:#F8F8F8;border:1px #F8C3B1 solid;  border-bottom:0px;margin-left:10px;"></input>
								<hr style="     border: 0px;border-top: 1px #f8c3b1 solid;"> </hr>
								<div class="tabcontent" style="margin-top: 30px;">
									<div class=" tabcon ">
										<div class="selected ">
											<div class="selBox ">
												<font style="font-size: 12px;color: #6d6d6d; margin-left:10px;">订单编号:</font> <input style="margin-left:13px;height:30px;width:190px; " type="text " id="orderId " class="sel-input " value=" " placeholder=" ">
												<font style="font-size: 12px;color: #6d6d6d;margin-left:40px; "> 申请时间:</font>
				                                <input  style="margin-left:30px;height:30px;width:190px; " type="text" class="uiText" id="searchKeyWord"  value="最近一个月订单" />
				                             <input  style="margin-left:30px;height:30px;width:190px; " type="text" class="uiText" id="searchKeyWord"  value="订单号" /><a href="" name="query" class="uiBtn b4"><span><strong>搜索</strong></span></a>

												
											</div>
										</div>
									</div>

								</div>

								<div style="margin-top: 30px;background:#f3f5fa;height:50px;width:100%;">
										<table class="uiTable" id="return_table" >
											<tr >
												<th  style="line-height:50px;"><font style="font-size: 14px;margin-left:39px; ">商品名称</font></th>
												<th  style="line-height:50px;"><font style="font-size: 14px;margin-left:255px; ">订单号</font></th>
												<th  style="line-height:50px;" ><font style="font-size: 14px;margin-left:148px; ">商家名称</font></th>
												<th  style="line-height:50px; " ><font style="font-size: 14px;margin-left:114px; ">下单时间</font></th>
												<th class="lastTd" colspan="2" style="line-height:50px; "><font style="font-size: 14px;margin-left:100px; ">操作</font></th>
											</tr>
										</table>
								</div>
							</div>
							<div class="no-product hide ">
								
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="clear "></div>
		<div class="ng-footer ">

			<textarea class="footer-dom " id="footer-dom-02 ">
			</textarea>
			<div class="ng-fix-bar "></div>
		</div>
		<style type="text/css ">
			.ng-footer {
				height: 130px;
				margin-top: 0;
			}
			
			.ng-s-footer {
				height: 130px;
				background: none;
				text-align: center;
			}
			
			.ng-s-footer p.ng-url-list {
				height: 25px;
				line-height: 25px;
			}
			
			.ng-s-footer p.ng-url-list a {
				color: #666666;
			}
			
			.ng-s-footer p.ng-url-list a:hover {
				color: #f60;
			}
			
			.ng-s-footer .ng-authentication {
				float: none;
				margin: 0 auto;
				height: 25px;
				width: 990px;
				margin-top: 5px;
			}
			
			.ng-s-footer p.ng-copyright {
				float: none;
				width: 100%;
			}
			
			.root1200 .ng-s-footer p.ng-copyright {
				width: 100%;
			}
		</style>
		<?php echo '<script'; ?>
 type="text/javascript " src="./public/js/pi/safe/ms_common.min.js "><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
