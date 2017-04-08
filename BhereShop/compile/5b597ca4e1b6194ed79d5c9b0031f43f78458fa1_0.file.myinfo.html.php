<?php
/* Smarty version 3.1.30, created on 2017-04-01 17:18:45
  from "/usr/lamp/apache2/htdocs/template/pi/myinfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58df70758d2a94_56981244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b597ca4e1b6194ed79d5c9b0031f43f78458fa1' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pi/myinfo.html',
      1 => 1491038312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58df70758d2a94_56981244 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_addr')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.addr.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bhere shop 个人中心</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/pi/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="./public/css/pi/safe/css.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/common.min.css" />
		<link rel="stylesheet" href="./public/css/pi/css.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/ms-style.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/personal_member.min.css" />
		<link rel="stylesheet" href="./public/css/pi/safe/Snaddress.min.css" />
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
 language="javascript" type="text/javascript" src="./public/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
>
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
                <li><a href="categories.html" style='color:#EA2F2F'>Hi <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
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
					.titles{
						font-size: 14px;
						color: #333333;
					}
					#formbox{
                        width: 1250px;
                        height: 800px;
                        border: 1px solid aliceblue;
                        margin: 0px auto;
                        display: none;
                        border-radius: 10px;
                        box-shadow: 5px 5px 10px #888888;
                        overflow: hidden;
                        position: relative;
                    }
                    #tips{
                        position: absolute;
                        width: 300px;
                        height: 80px;
                        border: 1px solid antiquewhite;
                        left: -303px;
                        top: 325px;
                        border-radius: 10px;
                        box-shadow: 5px 5px 10px #888888;
                        font-size: 24px;
                        text-align: center;
                        line-height: 80px;
                        font-family: initial;
                        color: tomato;
                    }
                    .on{
                    position: absolute;left: 850px;top: 160px;display: block;width: 75px;height: 25px;border: 1px solid;text-align: center;line-height: 25px;border-radius: 10px;color: aliceblue;background-color: sienna;
                        -webkit-transition: all .5s;
                        -moz-transition: all .5s;
                        -ms-transition: all .5s;
                        -o-transition: all.5s;
                        transition: all .5s;
                    }
                    .on:hover{
                        background-color:#ff4500;
                        color: #fffeff;
                    }
				</style>
				<div class="header-menu">
				<div class="ms-logo">
						<a class="ms-head-logo" name="Myyigou_index_none_daohangLogo"><span style="font-size: 30px;color: #e33131;font-weight: bold; line-height: 28px;;">B</span><span style="font-size: 30px;color: #e55155;font-weight: bold; line-height: 28px;;">here</span></a>

					</div>
					<nav class="ms-nav">
						<ul>
							<li class=""><a href="" data-url="" >首页</a><i class="nav-arrow"></i></li>
							<li class="nav-manage selected">
								<a href="" data-url="" >账户管理<em></em></a><i class="nav-arrow"></i>
								<div class="list-nav-manage " hidden="">
									<p class="nav-mge-hover">账户管理<em></em></p>
									<p><a href="#">个人资料</a></p>
									<p><a href="safe.html">安全设置</a></p>
									<p><a href="bind-acc">账号绑定</a></p>
									<p><a href="address">地址管理</a></p>
								</div>
							</li>
							<li class="ms-nav-msg"><a >消息</a><i class="nav-arrow"></i></li>
						</ul>
						<div class="ms-search">
							<form >
								<input id="" type="text" value="">
									<a id="" href=""></a>
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
" style="width: 60px;height: 60px;">
						</div>
						<a ><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
					</div>

					<div class="ms-name-info">
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
							<a class="bind-phone" >
								<i style="background-image: url(./public/img/pi/修改手机.png);"></i>修改手机</a>
							<a class="bind-email" >
								<i style="background-image: url(./public/img/pi/绑定邮箱.png);"></i>修改邮箱</a>
							<a  class="manage-addr" ><i style="background-image: url(./public/img/pi/地址管理.png);"></i>地址管理</a>
						</div>
					</div>
				</div>

			</article>
		</header>
		<div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-side">
					<div class="side-neck">
						<i></i>
					</div>
					<div class="ms-side">
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
					<div class="main-wrap mt15">
						<h3>
	                        <strong>个人信息</strong>
	                    </h3>
						<div class="user-profile clearfix">
							<div class="user-profile-wrap">
								<div class="profile-avatar">
									<img src="<?php echo $_smarty_tpl->tpl_vars['personimg']->value;?>
" height="120" width="120">
								</div>
                                <table style="border-collapse: collapse;border-spacing: 0;width: 600px;float: right;margin-left: 170px;font-size: 14px;font-family: initial;color: sienna;">
                                    <tr style="height: 20px;">
                                        <td style="color: rgb(51, 51, 51);font-weight: bold;width:144px">用户名</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                                        <td style="color: rgb(51, 51, 51);font-weight: bold;width:144px">性别</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['user']->value['sex'] == '') {?>您还没有设置性别!<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['sex'];
}?></td>

                                    </tr>
                                    <tr style="height: 20px;">
                                        <td   style="color: rgb(51, 51, 51);font-weight: bold;width:144px">邮箱</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                                        <td style="color: rgb(51, 51, 51);font-weight: bold;width:144px">手机号</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['user']->value['mobile'] == '') {?>您还没有设置手机号!<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['mobile'];
}?></td>
                                    </tr>
                                    <tr style="height: 20px;">
                                        <td  style="color: rgb(51, 51, 51);font-weight: bold;width:144px">QQ</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['user']->value['qqnum'] == '') {?>您还没有设置qq号!<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['qqnum'];
}?></td>
                                        <td style="color: rgb(51, 51, 51);font-weight: bold;width:144px">座机号</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['user']->value['phone'] == '') {?>您还没有设置座机号!<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['phone'];
}?></td>
                                    </tr>
                                    <tr style="height: 20px;">
                                        <td   style="color: rgb(51, 51, 51);font-weight: bold;width:144px">邮政编码</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['user']->value['postcode'] == '') {?>您还没有设置邮政编码!<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['postcode'];
}?></td>
                                        <td  style="color: rgb(51, 51, 51);font-weight: bold;width:144px">注册时间</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['regtime'];?>
</td>
                                    </tr>
                                    <tr style="height: 40px;">
                                        <td  style="color: rgb(51, 51, 51);font-weight: bold;width:144px">地址</td>
                                        <td colspan="3"><?php if ($_smarty_tpl->tpl_vars['user']->value['address'] == '') {?>您还没有设置地址!<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['address'];
}?> </td>
                                    </tr>
                                    <tr style="height: 20px;">
                                        <td  style="color: rgb(51, 51, 51);font-weight: bold;width:144px">上一次登录时间</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['exptime'];?>
</td>
                                        <td style="color: rgb(51, 51, 51);font-weight: bold;width:144px">生日</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['user']->value['birth'] == '') {?>您还没有设置您的生日!<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['birth'];
}?> </td>
                                    </tr>
                                </table>
                                <a href="javascript:void(0)" onclick="showform()"  class="on">编辑</a>
							</div>

								</div>
							</div>
						</div>
                     <!--修改表单-->
					     <div id="formbox">
                             <div id="tips"></div>
                             <table style="margin: 100px auto;width: 600px;font-size: 14px;font-family: initial;color: slategray;">
                                 <form action="?c=pi&a=editoruser" method="post" onsubmit="return checkform()">
                                     <tr>
                                         <td>用户名</td>
                                         <td>
                                             <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"/>
                                             <span style="color: tomato;">#必填</span>
                                         </td>

                                     </tr>
                                     <tr style="height: 45px;">
                                         <td>性别</td>
                                         <td>
                                             <select name="sex">
                                                 <?php if ($_smarty_tpl->tpl_vars['user']->value['sex'] == '男') {?>
                                                 <option value="男" selected>男</option>
                                                 <option value="女">女</option>
                                                 <?php } else { ?>
                                                 <option value="男">男</option>
                                                 <option value="女" selected>女</option>
                                                 <?php }?>
                                             </select>
                                             <span style="color: tomato;">#必填</span>
                                         </td>

                                     </tr>
                                     <tr style="height: 45px;">
                                         <td>电子邮箱</td>
                                         <td>
                                            <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"/>
                                             <span style="color: tomato;">#必填</span>
                                         </td>
                                     </tr>
                                     <tr style="height: 45px;">
                                         <td>生日</td>
                                         <td>
                                             <input type="text" class="Wdate" onClick="WdatePicker()" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['birth'];?>
" name='birth' />
                                         </td>
                                     </tr>
                                     <tr style="height: 45px;">
                                         <td>QQ号</td>
                                         <td>
                                             <input type="text" name="qqnum" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['qqnum'];?>
"/>
                                         </td>
                                     </tr>
                                     <tr style="height: 45px;">
                                         <td>手机号</td>
                                          <td>
                                              <input type="Tel"  name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['mobile'];?>
"/>
                                              <span style="color: tomato;">#必填</span>
                                          </td>
                                     </tr>
                                     <tr style="height: 45px;">
                                         <td>座机号</td>
                                         <td>
                                             <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
"/>
                                         </td>
                                     </tr>
                                     <tr style="height: 45px;">
                                         <td>邮政编码</td>
                                         <td>
                                             <input type="text" name="postcode" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['postcode'];?>
"/>
                                             <span style="color: tomato;">#必填</span>
                                         </td>
                                     </tr>
                                     <tr style="height: 45px;">
                                         <td>收货地址</td>
                                         <td>
                                             <div data-toggle="distpicker" style="margin-bottom: 10px;">
                                                 <select name="province" data-province="---- 选择省 ----"></select>
                                                 <select name="city" data-city="---- 选择市 ----"></select>
                                                 <select name="region" data-district="---- 选择区 ----"></select>
                                             </div>
                                             <p>详细地址</p>
                                             
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value['address'] == '') {?>
                                                <textarea name="addr" cols="30" rows="10" style="width: 379px;height: 111px;" placeholder="您还没有设置地址"></textarea>
                                                <?php } else { ?>
                                                <textarea name="addr" cols="30" rows="10" style="width: 379px;height: 111px;"><?php echo smarty_modifier_addr($_smarty_tpl->tpl_vars['user']->value['address']);?>
</textarea>
                                                <?php }?>
                                             
                                             <span style="color: tomato;">#必填</span>
                                         </td>
                                     </tr style="height: 45px;">
                                     <tr style="height: 45px;"><td colspan="2">
                                         <input type="submit" value="提交" style="width: 100px;height: 32px;margin-left: 98px;margin-top: 20px;background-color: azure;border-radius: 6px;font-size: 15px;font-family: initial;"/>
                                     </td></tr>
                                 </form>
                                 <!--头像上传-->

                             </table>
                             <div style="position: absolute;top: 70px;right: 95px;">
                                 <h3 style="font-size: 17px;font-family: initial;color: tan;border-bottom: 1px solid antiquewhite;margin-bottom: 9px;">头像上传</h3>
                             <form action="?c=pi&a=uploads" method="post" enctype="multipart/form-data">
                                 <input type="file" name="personpic[]" multipart/>
                                 <input type="submit" value="上传头像" style="width: 100px;height: 30px;font-size: 15px;text-align: center;line-height: 26px;background-color: snow;border-radius: 5px;font-family: unset;color: sienna;"/>
                             </form>
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
 type="text/javascript">
            function showform(){
                $("#formbox").slideToggle(800);
            }

         //表单正则
       //用户名AJAX
            var booldata1 = true ;
            var booldata3 = true ;
            var booldata4 = true ;
            var booldata5 = true ;
          $("input[name='username']").blur(function(){
              if($(this).val()!=""){
                  var username = $(this).val();
                  $.getJSON("?c=pi&a=existuser",{username:username},function(msg){
                           if(msg==1){
                               $("#tips").text('恭喜！可以更改的用户名').animate({left:"-50px"},function(){
                                   $(this).delay(1000).animate({left:"-303px"},300)
                               }).css({color:"#008800",fontSize:"12px"})
                               booldata1 = true;
                           }else{
                               $("#tips").text('用户名存在 请重新输入').animate({left:"-50"},300).css({color:"#ff0000"})
                               booldata1=false;
                           }

                  })

              }else{
                  $("#tips").text('用户名不能为空').animate({left:"-50"},300).css({color:"#ff0000"})
                  booldata1=false;
              }
          })

         //手机号
            $("input[name='mobile']").blur(function(){
                if($(this).val()!=""){
                    var reg=/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/
                    if(reg.test($(this).val())){
                        $("#tips").text('填写正确！').animate({left:"-50px"},function(){
                            $(this).delay(1000).animate({left:"-303px"},300)
                        }).css({color:"#008800"})
                        booldata3 = true;
                    }else{
                        $("#tips").text('手机号格式不对！').animate({left:"-50"},300).css({color:"#ff0000"})
                        booldata3=false;
                    }
                }else{
                    $("#tips").text('手机号不能为空！').animate({left:"-50"},300).css({color:"#ff0000"})
                    booldata3=false;
                }
            })

            //邮编正则
            $("input[name='postcode']").blur(function(){
                if($(this).val()!=""){
                    var reg=/^[1-9]\d{5}(?!\d)$/
                    if(reg.test($(this).val())){
                        $("#tips").text('填写正确！').animate({left:"-50px"},function(){
                            $(this).delay(1000).animate({left:"-303px"},300)
                        }).css({color:"#008800"})
                        booldata5 = true;
                    }else{
                        $("#tips").text('邮政编码格式不对！').animate({left:"-50"},300).css({color:"#ff0000"})
                        booldata5=false;
                    }
                }else{
                    $("#tips").text('邮编不能为空！').animate({left:"-50"},300).css({color:"#ff0000"})
                    booldata5=false;
                }
            })

            function checkform(){
                var data  = false;
                if(booldata1==false||booldata3==false||booldata4==false||booldata5==false){
                    alert('输入的信息有误！')
                    data = false;
                }else{
                    if($("textarea[name='addr']").val()==""){
                        alert('详细地址必填！')
                        data = false;
                    }else{
                        data = true;
                    }

                }
                return data;
            }
        <?php echo '</script'; ?>
>
	</body>

</html><?php }
}
