<?php
/* Smarty version 3.1.30, created on 2017-03-23 14:13:38
  from "F:\wamp\www\Bhere shop\admin\template\skip\skip.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d3d812e62ff6_85955575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7241508e33f8ba5294f6c7d97bb7efd4a0777c02' => 
    array (
      0 => 'F:\\wamp\\www\\Bhere shop\\admin\\template\\skip\\skip.html',
      1 => 1490278414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d3d812e62ff6_85955575 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>系统信息</title>
    <link rel="stylesheet" href="css/pintuer.css">
    <style type="text/css">
        *{ margin:0px; padding:0px;}
        .error-container{ background:#fff; border:1px solid rgb(6,120,174);  text-align:center; width:1200px; margin:0px auto;; font-family:Microsoft Yahei; padding-bottom:30px; border-top-left-radius:5px; border-top-right-radius:5px;  }
        .error-container h1{ font-size:12px; padding:12px 0; background:rgb(6,120,174); color:#fff; text-align: left;}
        .errorcon{ padding:35px auto; text-align:center; color:rgb(6,120,174); font-size:18px;}
        .errorcon i{ display:block; margin:12px auto; font-size:30px; }
        .errorcon span{color:red;}
        h4{ font-size:18px; color:#111; line-height: 35px;}
        a{color:rgb(6,120,174);}
        ul{list-style-type: none;margin: 0px;padding: 0px; }
        ul li{font-size: 12px;color: #222;margin-bottom:12px;}
        .on{color:#E66471;}
        .smaller{font-size: 12px;color: #222;margin:15px auto;}
    </style>
</head>
<body class="no-skin">
<div class="error-container">
    <table>
        <tr>
            <ul>
                <li> <h1> BhereShop 管理中心  系统信息 </h1></li>
            </ul>
        </tr>
        <tr>
            <div class="errorcon">
            <ul>
                <li><h4> <img src="../public/img/logo/123.gif" alt="" style="margin-bottom: -7px;">操作<span class="on"><?php echo $_smarty_tpl->tpl_vars['skip']->value['result'];?>
</span></h4></li>
                <li>返回 <a href="<?php echo $_smarty_tpl->tpl_vars['skip']->value['url'];?>
">上一级操作</a> </li>
                <li>或跳转<a href="?c=goods&a=select"> 商品列表</a></li>
            </ul>
            </div>
        </tr>

            <h4 class="smaller">页面自动 <a id="href" href="?c=goods&a=select">跳转</a> 等待时间：<b id="wait">5</b>ms</h4>

    </table>

</div>


<?php echo '<script'; ?>
 type="text/javascript">
  (function(){
        var wait = document.getElementById('wait'),href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = "?c=goods&a=select";
                clearInterval(interval);
            };
        }, 1000);
    })();
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
