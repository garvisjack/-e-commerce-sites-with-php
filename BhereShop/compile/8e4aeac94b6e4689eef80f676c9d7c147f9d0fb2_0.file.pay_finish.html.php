<?php
/* Smarty version 3.1.30, created on 2017-03-30 01:00:04
  from "/usr/lamp/apache2/htdocs/template/pay/pay_finish.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbe8145c8081_01523402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e4aeac94b6e4689eef80f676c9d7c147f9d0fb2' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/pay/pay_finish.html',
      1 => 1490713674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dbe8145c8081_01523402 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="path"><div>当前位置: <a href=".">首页</a> <code>&gt;</code> 购物流程</div></div> </div>
</div>

<div class="blank"></div>
<div class="block">



    <form action="https://pay3.chinabank.com.cn/PayGate" method="post" name="theForm" id="theForm">
        <div class="flowBox">
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tr>
                    <th bgcolor="#f0f0f0">感谢您在本店购物！您的订单已提交成功，请记住您的订单号:<span class="light" style='color: #E33131'><?php echo $_smarty_tpl->tpl_vars['order_num']->value;?>
</span></th>
                </tr>

                <tr>
                    <td bgcolor="#f0f0f0">您选定的支付方式为:<span class="light"><?php echo $_smarty_tpl->tpl_vars['pay']->value[0]['pay_type'];?>
</span> 您的应付款金额为: ￥<span class="light"><?php echo $_smarty_tpl->tpl_vars['pay']->value[0]['total'];?>
</span>元</td>
                </tr>

                <tr><td><input type="submit" value="在线支付" name="pay"/></td></tr>

                <tr>
                    <td>您可以<a style='color: #E33131' href="?c=index&a=index">返回首页</a>或<a href="?c=pi&a=index" style='color: #E33131'>个人中心</a></td>
                </tr>
                <input name="v_mid" value="<?php echo $_smarty_tpl->tpl_vars['payData']->value['v_mid'];?>
" type="hidden"/>
                <input name="v_oid" value="<?php echo $_smarty_tpl->tpl_vars['payData']->value['v_oid'];?>
" type="hidden"/>
                <input name="v_amount" value="<?php echo $_smarty_tpl->tpl_vars['payData']->value['v_amount'];?>
" type="hidden"/>
                <input name="v_moneytype" value="<?php echo $_smarty_tpl->tpl_vars['payData']->value['v_moneytype'];?>
" type="hidden"/>
                <input name="v_url" value="<?php echo $_smarty_tpl->tpl_vars['payData']->value['v_url'];?>
" type="hidden"/>
                <input name="v_md5info" value="<?php echo $_smarty_tpl->tpl_vars['payData']->value['v_md5info'];?>
" type="hidden"/>

            </table>
        </div>
        <div class="blank"></div>

        </div>
    </form>





</div>

<div class="foot-body">
    <div class="clear10"></div>

    <div class="blank"></div>


    </div>
    <div class="clear10"></div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){



    })
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
