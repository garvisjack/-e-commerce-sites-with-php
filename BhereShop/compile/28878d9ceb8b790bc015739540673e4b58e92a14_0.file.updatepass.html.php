<?php
/* Smarty version 3.1.30, created on 2017-04-01 22:19:27
  from "/usr/lamp/apache2/htdocs/template/login_register/updatepass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dfb6ef2141a8_14311924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28878d9ceb8b790bc015739540673e4b58e92a14' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/login_register/updatepass.html',
      1 => 1490615508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dfb6ef2141a8_14311924 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>修改密码</title>
    <link href="./public/css/person/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./public/css/index/css.css" />
    <?php echo '<script'; ?>
 src="./public/js/jquery/jquery-1.9.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <style type="text/css">
        .borderbox{
            border: 1px solid;
            margin: 150px auto;
            border-radius: 10px;
            box-shadow: 10px 10px 5px #888888;
            -moz-box-shadow: 10px 10px 5px #888888;
            -webkit-box-shadow: 10px 10px 5px #888888;
            width: 500px;
            height: 340px;
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
        <li><a href="categories.html">个人中心</a>
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
</div>
<h2 style="float: left;
    margin-left: 36%;
    margin-top: 7%;
    font-size: 22px;
    font-family: monospace;
    border-bottom: 2px solid skyblue;
    width: 168px;
    color: steelblue;">修改密码</h2>
<div class="borderbox">
<table class="table-hover " style="margin: 49px auto;">
    <form action="" method="post" onsubmit="return checkpw()">
        <tr style="height: 70px;">
            <td style="font-size: 16px; font-family: cursive;color: steelblue;font-weight: bold;    width: 20%;">用户名</td>
            <td><input type="text" name="username" style="height: 25px;"></td>
            <td><span id="usertips"></span></td>
        </tr>
        <tr style="height: 70px;">
            <td style="font-size: 16px; font-family: cursive;color: steelblue;font-weight: bold;    width: 20%;">新密码</td>
            <td><input type="password" name='password' style="height: 25px;"></td>
            <td style="font-size: 16px; font-family: cursive;color: steelblue;font-weight: bold;"><span id="pwtips"></span></td>
        </tr>
        <tr style="height: 70px;">
            <td style="font-size: 16px; font-family: cursive;color: steelblue;font-weight: bold;    width: 20%;">确认密码</td>
            <td><input type="password" name="repassword" style="height: 25px;"></td>
            <td><span id="repwtips"></span></td>
        </tr>
        <tr style="height:70px;">
            <td colspan="3" style="text-align: center;">
                <input type="submit" value="提交" style=" width: 100px;height: 25px;font-size: 14px;line-height: 20px;font-family: cursive;font-weight: bold;color: saddlebrown;background: snow;border-radius: 6px;"/>
            </td>
        </tr>
    </form>
</table>
</div>
<?php echo '<script'; ?>
>

    var booldata1=false;
    var booldata2=false;
    var booldata3=false;
    //验证用户
    $("input[name='username']").blur(function(){
        if($(this).val()!=""){
            var username = $(this).val();
            $.getJSON("?c=lr&a=checkuser",{user:username},function(msg){
                if(msg==1){
                    $("#usertips").text('填写正确').css({color:"#008800",fontSize:'12px'});
                    booldata1=true;
                }else{
                    $("#usertips").text('用户名不存在').css({color:"#ff0000",fontSize:'12px'});
                    booldata1=false;
                }
            })
        }else{
            $("#usertips").text('用户名不能为空').css({color:"#ff0000",fontSize:'12px'});
            booldata1=false;
        }
            }
    );
    //验证密码
    $("input[name='password']").blur(function(){
        if($(this).val()!=""){
          $("#pwtips").text('填写正确').css({color:"#008800",fontSize:'12px'});
            booldata2=true;
        }else{
            ("#pwtips").text('输入的密码不能为空').css({color:"#ff0000",fontSize:'12px'});
            booldata2=false;
        }
    })
    $("input[name=repassword]").blur(function(){
        var password = $("input[name='password']").val();
        if($(this).val()!=password||$(this).val()==""){
            $("#repwtips").text('前后密码不一致').css({color:"#ff0000",fontSize:'12px'});
            booldata3=false;
        }else{
            $("#repwtips").text('填写正确').css({color:"#008800",fontSize:'12px'});
            booldata3=true;
        }
    })
    function checkpw(){
        var data = true;
        if(booldata1==false||booldata2==false||booldata3==false){
            alert('信息填写错误')
            data=false;
        }else{
            data=true
        }
        return data;
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
