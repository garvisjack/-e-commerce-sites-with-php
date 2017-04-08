<?php
/* Smarty version 3.1.30, created on 2017-03-22 10:38:32
  from "C:\wamp\www\Bhere shop\admin\template\login\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d254281a25b1_95945402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92c7d3213c3f33fde6066199ba73337266568f13' => 
    array (
      0 => 'C:\\wamp\\www\\Bhere shop\\admin\\template\\login\\index.html',
      1 => 1490178781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d254281a25b1_95945402 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>登录</title>  
    <link rel="stylesheet" href="../public/admin/css/pintuer.css">
    <link rel="stylesheet" href="../public/admin/css/admin.css">
    <?php echo '<script'; ?>
 src="../public/admin/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../public/admin/js/pintuer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../public/js/goods-detail/jquery.min.js"><?php echo '</script'; ?>
>
    <style type="text/css">
    .code{
        float:left;
        height:43px;
        display:block;
        font-size: 20px;
        font-weight: bold;
        line-height: 43px;
        cursor:pointer;
    }
    </style> 
</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form action="?c=login&a=check" method="post">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>后台管理系统</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="hidden"/>
                            <input type="text" class="input input-big" name="username" placeholder="登录账号" data-validate="required:请填写账号" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="password" placeholder="登录密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="hidden" name="postcode" value="">
                            <input type="text" class="input input-big" name="postcode" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" style="float: left;width: 220px;"/>
                            <img src="?c=login&a=vc" alt="验证码" onclick="this.src='?c=login&a=vc&id='+Math.random()"/>
                            <span id="yes" style="display: none"><img src="../public/admin/images/yes.gif"/></span>
                            <span id="no" style="display: none"><img src="../public/admin/images/no.gif"/></span>
                        </div>
                    </div>
                    <a href="" target="_blank" style="float:right;margin-top:5px;"></a>
                </div>
                <div style="margin-top:6px;padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录"></div>
            </div>
            </form>          
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $("input[name=postcode]").keyup(function(){
            $.getJSON('?c=login&a=getCode',{code:$(this).val()},function(msg){
                    if(msg==1){
                        $('#yes').show();
                        $('#no').hide();
                    }else{
                        $('#yes').hide();
                        $('#no').show();
                    }
            })
        })
    })

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
