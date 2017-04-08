<?php
/* Smarty version 3.1.30, created on 2017-04-01 17:22:14
  from "/usr/lamp/apache2/htdocs/template/pi/my-money.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58df7146742a15_71682730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9057473053802274e384c39575ea42ed7b87f65' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pi/my-money.html',
      1 => 1491038522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58df7146742a15_71682730 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

	<head>
		<meta charset="utf-8">
		<title>Bhere shop个人中心</title>
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
			progress {
				width: 300px;
				border: 1px solid #ffffff;
				background-color: #e6e6e6;
				color: #0064B4;
				/*IE10*/
			}
			
			progress::-moz-progress-bar {
				background: #FFFFFF;
			}
			
			progress::-webkit-progress-bar {
				background: #ccc;
			}
			
			progress::-webkit-progress-value {
				background: #FF7700;
			}
			a{
				color: #000000;
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
					.sui-table th {
			    font-weight: normal;
			    line-height:40px;
			    border-bottom: 0px;
					}
					.sui-table.table-nobordered th {
    border-bottom: 1px solid #fff;
}
						.sui-table td {
			    font-weight: normal;
			    line-height:40px
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
								<div class="list-nav-manage " hidden="">
									<p class="nav-mge-hover">账户管理<em></em></p>

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
					<div class="ms-side" style="margin-top: 20px;" >
						<article class="side-menu side-menu-off">
                            <dl class="side-menu-tree" style="padding-left: 50px;">
                                <dt><img src="./public/img/pi/left/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/><a href='?c=pi&a=index'>个人中心</a></dt>
                                <dd>
                                <dt><img src="./public/img/pi/left/我的购物车.png"  style="margin-right: 10px;margin-left: -20px;"/>我的购物车</dt>
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
                                    <a href="?c=pi&a=bindacc">帐号绑定</a>

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
					<div class="main-wrap mt15" style="border: 0px;">
						<h3 style="background-color:#fafbff ;padding: 15px;width: 980px;">
	                        <strong style="font-size: 18px;color: #333333;">账户余额:<font style="font-size: 20px;color: #F37B1D;margin-left: 10px;">1045.<font style="font-size: 12px;color: #F37B1D;font-weight: bold;">98元</font></font></strong>
	                         <button style="width:70px;height:28px;background-color:#f3f3f3;margin-left:100px;padding: 5px; border: 1px #CCCCCC solid;border-radius: 5px;font-size: 12px;color: #757c7f">充值</button>
	                         <button style="width:70px;height:28px;background-color:#f3f3f3;margin-left:20px;padding: 5px; border: 1px #CCCCCC solid;border-radius: 5px;font-size: 12px;color: #757c7f">提现</button>
	                         <button style="width:70px;height:28px;background-color:#f3f3f3;margin-left:20px;padding: 5px; border: 1px #CCCCCC solid;border-radius: 5px;font-size: 12px;color: #757c7f;">转账</button>
						</h3>					
							<div class="profile-info">
								<div class="control-group clearfix " style="margin-top: 21px;width: 1010px;">
									<div >
										<span  style="margin-left:15px;">
											<font style="font-size: 14px;color: #333333; font-weight:bold;" >最近交易记录</font>
										</span>
                                        <a style="color: #007AFF;margin-left: 20px;margin-right: 20px;">充值记录</a>|<a style="color: #007AFF;margin-left: 20px;margin-right: 20px;">提现记录</a>|<a style="color: #007AFF;margin-left: 20px;">退款记录</a>
                                        <div style="float:right;display: inline;margin-left:120px;border: 1px #ccc solid;display: inline-block;background-color: #F5F5F5;height: 25px;width: 150px;"> 
                                        <input type="text" placeholder="余额收支明细"  style="width:130px;border: 0px;background-color: #fff;line-height: 25px;border-right: 1px #ccc solid;padding-left: 10px;" />
									   <img src="./public/img/pi/搜索.png"  style="height: 10px;width: 10px;" />
                                        </div> 
									 </div>
								</div>
								
							</div>
						<div style="margin-top:5px;height:50px;width:1014px; display: block;">
							<table class="sui-table table-nobordered" style="border: 1px #ccc solid;" >
								 <thead>
								<tr>
									<th><font style="font-size: 12px;margin-left:83px; ">2016.04.01</font></th>
									<th  nowrap><font style="font-size: 12px; ">退款-春秋韩国水洗毛线</font></th>
									<th   nowrap><font style="font-size: 12px; ">+0.07</font></th>
									<th nowrap ><font style="font-size: 12px;margin-left:28px; ">交易成功</font></th>
									<th   nowrap><font style="font-size: 12px;margin-left:28px; color: #007AFF;">备注</font></th>
								</tr>
								</thead>	
								<tbody>
											<tr >
												<td style="padding-left: 90px;font-size: 12px;">
											   2016-04-15
												</td>
												<td style="font-size: 12px">
													退款-春秋韩国水洗毛线
												</td>
												<td style="font-size: 12px">
												0.07
												</td>
												<td style="font-size: 12px;">
													<span style="margin-left: 28px;">交易成功</span>
												</td>
												<td style="font-size: 12px">
													<span style="margin-left: 28px;color: #007AFF;">备注</span>
												</td>
											</tr>
											<tr style="border-top: 0px;" >
												<td style="padding-left: 90px;font-size: 12px;">
													 2016-04-15
												</td>
												<td style="font-size: 12px">
													退款-春秋韩国水洗毛线
												</td>
												<td style="font-size: 12px;">
													<span >0.07</span>
												</td>
												<td style="font-size: 12px">
													<span style="margin-left: 28px;">交易成功</span>
												</td>
												<td style="font-size: 12px">
														<span style="margin-left: 28px;color: #007AFF;">备注</span>
												</td>
											</tr>
											</tbody>
										</table>	
											<p style="text-align:right;margin-top: 130px;width: 100%;">
							    	<span class="fenye"><</span><span class="fenye" style="margin-left: 10px;">1</span><span class="fenye">2</span><span class="fenye">3</span><span class="fenye">4</span><span class="fenye">5</span>.....<span class="fenye">></span>共1页，到<input type="text" value="1" style="width: 20px;margin-left: 10px;margin-right: 10px;" />页<button  style="background-color: #f95555;padding: 3px;border: 0px;color: #fff;margin-left: 10px;width: 50px;border-radius:4px;">确认</button>
							    		</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		</div>
		<div class="clear"></div>
		<div class="ng-footer">

			<textarea class="footer-dom" id="footer-dom-02">
			</textarea>
			<div class="ng-fix-bar"></div>
		</div>
		<style type="text/css">
				.fenye{
				    border: 1px #ccc solid;
				     padding: 3px; 
				    width: 20px;
			}
			.ng-footer {
				height:514px;
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
 type="text/javascript" src="./public/js/pi/safe/ms_common.min.js"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
