<?php
/* Smarty version 3.1.30, created on 2017-03-30 01:03:14
  from "/usr/lamp/apache2/htdocs/template/pay/payback.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbe8d281f3a6_73811283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b26ccd054c799b2b3ff112185ac0bb82645af2ac' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pay/payback.html',
      1 => 1490715775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dbe8d281f3a6_73811283 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />

    <title>Bhere Shop 结算页</title>

    <link href="./public/css/pay/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./public/css/index/css.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="./public/js/index/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
<body>

<div class="top-bar">
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
            <li><a href="?c=lr&a=select" style='color:#EA2F2F'>欢迎!<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
            <li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a></li>
            <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
            </ul>
    </div>
    </li>
</div>
</div>
<div class="nav-menu">
    <div class="wrap">
        <div class="logo">
            <a href="index.php" name="top">
            <img width="150" height="67" src="./public/logo/logo.png" />
        </a>
        </div>
    </div>
</div>
<div class="clear0 "></div>
<div class="block box" style="margin-top: -24px;margin-bottom:-20px">
    <div id="ur_here">
        <div class="path"><div>当前位置: <a href=".">首页</a> <code>&gt;</code>支付页面</div></div> </div>
</div>

<div class="blank"></div>
<div class="block">


        <div class="flowBox">
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tr>
                    <th bgcolor="#f0f0f0"><span class="light" style='font-size:24px;color: #E33131'>恭喜您!支付成功!</span></th>
                </tr>
                <tr>
                    <td>您可以<a style='color: #E33131' href="?c=index&a=index">返回首页</a>或<a href="?c=pi&a=index" style='color: #E33131'>个人中心</a>
                        <h4 class="smaller" style="font-size: 12px;margin: 4px auto">页面自动 <a id="href" href="?c=index&a=index">跳转</a> 等待时间：<b id="wait">5</b>ms</h4></td>
                </tr>

            </table>
        </div>
        <div class="blank"></div>

        </div>





</div>

<div class="foot-body">
    <div class="clear10"></div>

    <div class="blank"></div>


    </div>
    <div class="clear10"></div>
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
