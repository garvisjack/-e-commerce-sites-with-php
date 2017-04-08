<?php
/* Smarty version 3.1.30, created on 2017-03-29 19:46:28
  from "/usr/lamp/apache2/htdocs/template/pi/change-pw1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58db9e94b5e016_01108492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6db03876340b3d1b5ae819067f2079b901f8585e' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pi/change-pw1.html',
      1 => 1490774686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db9e94b5e016_01108492 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cut')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.cut.php';
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
                <li><a href="#">收藏夹</a>
                    <div>
                        <ul>
                            <li><a href="default.htm">收藏的商品</a></li>
                            <li><a href="default.htm">收藏的店铺</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">卖家中心</a>
                    <div>
                        <ul>
                            <li><a href="default.htm">免费开店</a></li>
                            <li><a href="default.htm">已经卖出的商品</a></li>
                            <li><a href="default.htm">出售中的商品</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">联系客服</a>
                    <div>
                        <ul>
                            <li><a href="default.htm">消费者客服</a></li>
                            <li><a href="default.htm">卖家客服</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="?c=lr&a=select" style='color:#EA2F2F'>欢迎!<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
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
							<hr style="width: 273px;">
						</li>
						<li style="max-width: 80px;margin-left: 10px;"><span class="am-badge1  am-round" style="font-size: 18px;">2</span>
							<br />
							<p class="bottitle">修改登录密码</p>
						</li>
						<li style="max-width: 273px;">
							<hr>
						</li>
						<li style="max-width: 80px;margin-left: 10px;"><span class="am-badge1  am-round" style="background-image: url(./public/img/pi/duihao.png);background-repeat: no-repeat;background-position: center;background-position-x: 5px;"></span>
							<br />
							<p style="margin-left: -10px">完成</p>
						</li>
					</ul>
                    <!--输入账户名-->
                    <div class="am-tabs-bd" style="margin-left: 191px;">
                        <div data-tab-panel-0 class="am-tab-panel am-active" style="margin-top: 50px;">
                            <div class="am-g">
                                <img src="./public/img/pi/jinggao.png" />
                                <span style="font-weight:normal;margin-left: 10px;font-size: 14px;color: #3d3d3d">您正在使用  辨别购买过的商品 验证身份,请完成一下操作</span>
                            </div>

                            <div class="am-g" style="margin-top: 41px;">
                                <span style="font-weight:bold;margin-left: 10px;font-size: 16px;color: #3d3d3d">请点击您近期购买过的物品(单选)</span>
                            </div>
                            <!--图片验证部分-->
                            <div class="am-g" style="margin:20px auto;">
                                <ul class="vc-img" id="image">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rand']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <li>
                                        <a href="javascript:void(0)" data-gid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                                            <img width="120" height="120" src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['spic']);?>
"/>
                                        </a>
                                    </li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                </ul>


                            </div>
                        </div>
                    </div>
                    <div data-tab-panel-2 class="am-tab-panel ">
                        <div class="am-g" style="margin-top: 50px;">
                            <div class="am-u-sm-6 am-u-sm-offset-3 " style="text-align: center;">
                                <button type="button" class="am-btn am-btn-warning" style="width: 265px;height: 50px;font-size: 16px;border: 1px  solid transparent; border-radius:5px;margin-left: 110px; " name="yes">确定</button> </div>
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
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function(){
                /*做点击事件的样式改变，并取id值*/
                $('#image li').click(function(){

                    $(this).find('a').addClass('alight').parents().siblings().find('a').removeClass('alight');
                    /*取到被选中图片样式的id值*/
                    var gid = $(this).find('a[class=alight]').attr('data-gid');

                })

                $('button[name=yes]').click(function(){
                    var gid = $('#image li').find('a[class=alight]').attr('data-gid');
                    $.getJSON('?c=pi&a=checkMb',{gid:gid},function(msg){
                        if(msg==1){
                            location.href = '?c=pi&a=cp2';
                        }else{
                            alert('您暂未购买过此商品!');
                            location.reload();
                        }

                    })
                })

            })


        <?php echo '</script'; ?>
>
    </body>

</html><?php }
}
