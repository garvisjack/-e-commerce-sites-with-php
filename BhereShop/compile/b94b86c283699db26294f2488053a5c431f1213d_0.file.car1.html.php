<?php
/* Smarty version 3.1.30, created on 2017-03-29 18:33:07
  from "/usr/lamp/apache2/htdocs/template/car/car1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58db8d637c9212_21656955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b94b86c283699db26294f2488053a5c431f1213d' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/car/car1.html',
      1 => 1490721044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db8d637c9212_21656955 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bhere shop 购物车页面</title>
    <link href="./public/css/car/myCart.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./public/css/index/css.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="./public/js/jquery/jquery-1.9.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./public/js/car/car.js"><?php echo '</script'; ?>
>
    <style type="text/css">
        img{
            border:0px;
            vertical-align:middle;
            margin-left: 10px;
        }
        *{
            font-size: 14px;
        }
        #content{
            width:1000px;
            margin:10px auto 5px auto;
            clear:both;
        }
        #navlist{
            width:1000px;
            margin:0px auto 0px auto;
            height:23px;
        }
        #nav{
            margin:10px auto 10px auto;
            width:1000px;
            clear:both;
            border-bottom:1px solid #222222;
        }
        body{
            background:#ffffff;
        }
    </style>
</head>

<body>

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
        <li><?php if ($_smarty_tpl->tpl_vars['user']->value != '') {?><a href="javascript:void(0)" style='color:#EA2F2F'>欢迎！<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a><?php } else { ?><a href="?c=lr&a=select" style='color:#EA2F2F'>登录/注册Bhere</a><?php }?>
<li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a>
    <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
</div>
</li></ul>
</div>
</li>
</div>
<div id="header" style='float:left;margin-left:12px;'><img src="./public/img/logo/logo.png" width="110px" height="60px" alt="logo" /></div>
<div id="nav" style='font-size:12px'>您的位置：<a href="#">首页</a> > <a href="#">我的Bhere</a> > <a href="#">我的购物车</a></div>
<div id="navlist">
    <ul>
        <li class="navlist_red_left"></li>
        <li class="navlist_red" style="width: 237px;">1. 查看购物车</li>
        <li class="navlist_red_arrow"></li>
        <li class="navlist_gray">2. 确认订单信息</li>
        <li class="navlist_gray_arrow"></li>
        <li class="navlist_gray">3. 付款到支付宝</li>
        <li class="navlist_gray_arrow"></li>
        <li class="navlist_gray">4. 确认收货</li>
        <li class="navlist_gray_arrow"></li>
        <li class="navlist_gray" style=" width: 261px;">5. 评价</li>
        <li class="navlist_gray_right"></li>
    </ul>
</div>

<div id="content">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="shopping">
        <form action="" method="post" name="myform">
            <tr>
                <td class="title_1"><input id="allCheckBox" type="checkbox" value="" onclick="selectAll()" />全选</td>
                <td class="title_2" colspan="2">店铺宝贝</td>
                <td class="title_3">获积分</td>
                <td class="title_4">单价（元）</td>
                <td class="title_5">数量</td>
                <td class="title_6">小计（元）</td>
                <td class="title_7">操作</td>
            </tr>
            <tr>
                <td colspan="8" class="line"></td>
            </tr>

           <div style="width:800px;height:400px">
               <div style="font-size:16px;font-family: Tahoma;margin-left: 335px;">您的购物车还是空的，赶紧行动吧！<a href="?c=index&a=index" style="font-size: 16px">继续购物</a></div>
                <div><img src="./public/img/logo/empty.jpg"  style="margin-left: 200px"></div>
           </div>
            <tr>
                <td  colspan="3"><a href="javascript:deleteSelectRow()"><img src="./public/img/car/taobao_del.jpg" alt="delete"/></a></td>
                <td colspan="5" class="shopend">商品总价（不含运费）：<label id="total" class="yellow"></label> 元<br />
                    可获积分 <label class="yellow" id="integral"></label> 点<br />
                    <input name=" " type="image" src="./public/img/car/taobao_subtn.jpg" /></td>
            </tr>
        </form>
    </table>
    <div style="text-align:center;">

    </div>
</div>
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
            <div class="column_footer" style="margin-left: 60px;">
                <h3><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h3>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['art']->value, 'ar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ar']->value) {
?>
                    <li style="margin-left: 0px;"><a href="#"><?php echo $_smarty_tpl->tpl_vars['ar']->value;?>
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


            <div class="column_footer" style="margin-left: 30px;">
                <h3>Social</h3>
                <ul class="social">
                    <li class="twitter"style="margin-left: 0px;"><a href="../../twitter.com/twitter">Twitter Username</a></li>
                    <li class="facebook"style="margin-left: 0px;"><a href="../../facebook.com/Username/default.htm">Facebook</a></li>
                    <li class="rss"style="margin-left: 0px;"><a href="#">RSS Feed</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="icart-footer-bottom" >
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

</body>
</html>
<?php }
}
