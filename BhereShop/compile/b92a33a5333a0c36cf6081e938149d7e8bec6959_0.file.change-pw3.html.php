<?php
/* Smarty version 3.1.30, created on 2017-03-31 09:50:56
  from "/usr/lamp/apache2/htdocs/template/pi/change-pw3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ddb6000d0a42_88213111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b92a33a5333a0c36cf6081e938149d7e8bec6959' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pi/change-pw3.html',
      1 => 1490774843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ddb6000d0a42_88213111 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link rel="stylesheet" href="./public/css/pi/amazeui.min.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/amazeui.min.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="./public/css/pi/zpwd/sjsz.css" />
		<link rel="stylesheet" href="./public/css/pi/sui.css" />
		<link rel="stylesheet" href="./public/css/pi/css.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/sui.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="./public/css/pi/jd.css" />
		<title>Bhere shop 个人中心</title>
		<style>
			/*.bottomLine {
				border-bottom: 1px solid #ccc;
				border-top: 1px solid #ccc;
				margin-bottom: 10px;
				/*padding: 10px;*/
			/*padding-top: 10px;
				padding-bottom: 10px;
				word-spacing: 0.05rem;
				text-align: center;
				margin-top: 82px;*/
			/*width:677px ;*/
			/*line-height: ;*/
			/*}*/
			
			.bottomLine {
				border-bottom: 1px solid #ccc;
				border-top: 1px solid #ccc;
				padding-top: 8px;
				/*padding-bottom:10px;*/
			}
			
			.bot {
				margin-bottom: 50px;
				/*text-align: center;*/
				color: #7b6f5b;
			}
			
			.radio-pretty.checked > span:before {
				color: #f88600;
			}
			
			input {
				height: 62px;
			}
			
			.imgbot {
				width: 128px;
				height: 128px;
			}
		</style>
	</head>

	<body>
		<!--<div class="am-g" style="margin-top: 25px;">
			
		</div>-->
		<div class="ng-toolbar">
		<!--顶部导航的位置-->
				
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
                <li><a href="#" style='color:#EA2F2F'>欢迎!<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a></li>
                <li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a></li>
                <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
                </ul>
        </div>
    </div>

				</div>
		</div>
		<div style="background-color: #ffffff;padding-top: 30px;margin-top: 21px;">
			<div class="am-g content" style="margin-top: 45px;">
				<div data-am-widget="tabs" class="am-tabs am-tabs-d2">
					<ul class="am-tabs-nav1" style="margin-top: 20px;display:flex;list-style: none;text-align: center;">
						<li style="max-width: 95px; margin-left: 100px;"></li>
						<li style="max-width: 80px;"><span class="am-badge1 am-round am-badge-warning-active " style="background-color: #F89406;font-size: 18px;">1</span>
							<br />
							<p class="bottitle active">验证身份</p>
						</li>
						<li style="max-width: 273px;">
							<hr style="width: 273px;    border-top: 3px #F89406 solid;">
						</li>
						<li style="max-width: 80px;margin-left: 10px;"><span class="am-badge1  am-round am-badge-warning-active" style="background-color: #F89406;font-size: 18px;">2</span>
							<br />
							<p class="bottitle active">修改登录密码</p>
						</li>
						<li style="max-width: 273px;">
							<hr style="height: 3px;    border-top: 3px #F89406 solid;">
						</li>
						<li style="max-width: 80px;margin-left: 10px;"><span class="am-badge1  am-round" style="background-color: #F89406;background-image: url(./public/img/pi/duihao.png);background-repeat: no-repeat;background-position: center;background-position-x: 5px;"></span>
							<br />
							<p style="margin-left: -10px;" class="bottitle active">完成</p>
						</li>
					</ul>
					<div class="am-tabs-bd" style="height: 400px;    text-align: center;">
						<div data-tab-panel-0 class="am-tab-panel am-active" style="margin-top: 50px;">
							<div class="am-g">
								<img src="./public/img/pi/jinggao2.png" style="    margin-bottom: 10px;" />
								<span style="margin-left:10px;font-weight:bold;font-size: 18px;color: #3d3d3d">恭喜您,密码修改成功!</span>
							</div>
                            <h4 class="smaller">页面自动 <a id="href" href="?c=index&a=index">跳转</a> 等待时间：<b id="wait">5</b>ms</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="am-g " style="margin-top: 81px;text-align: center;font-size: 12px;">
			<div class="bottomLine" style="margin:0 auto;width:700px;height: 35px;">
				<span style="float: left;word-spacing:0.52rem;    text-align: center;    width: 100%;">关于我们 | 联系我们 | 商家入驻 | 友情链接 | 站点地图 | 手机商城 | 销售联盟 | 商城社区 | 企业文化 | 帮助中心 
			</span>
			</div>
		</div>
		<div class="am-g">
            <div class="bot ">
                <div style="margin:0 auto;width:700px;height: 30px;">
                    <p style="font-size: 12px;float: left;margin-left: 210px;"><span style="margin-left: 30px;">Bhere shop</span><span style="margin-left: 30px;">bhereshop@163.com</span> </p>
                </div>
            </div>
		</div>

        <?php echo '<script'; ?>
 type="text/javascript">
            (function(){
                var wait = document.getElementById('wait'),href = document.getElementById('href').href;
                var interval = setInterval(function(){
                    var time = --wait.innerHTML;
                    if(time <= 0) {
                        location.href = "?c=index&a=index";
                        clearInterval(interval);
                    };
                }, 1000);
            })();
        <?php echo '</script'; ?>
>
	</body>

</html><?php }
}
