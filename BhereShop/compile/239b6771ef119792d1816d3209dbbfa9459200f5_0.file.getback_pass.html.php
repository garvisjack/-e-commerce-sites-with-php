<?php
/* Smarty version 3.1.30, created on 2017-03-31 07:10:47
  from "/usr/lamp/apache2/htdocs/template/login_register/getback_pass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd907793de42_29475319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '239b6771ef119792d1816d3209dbbfa9459200f5' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/login_register/getback_pass.html',
      1 => 1490898027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dd907793de42_29475319 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Bhere 找回密码</title>
    <link href="./public/css/person/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./public/css/index/css.css" />
    <?php echo '<script'; ?>
 src="./public/js/jquery/jquery-1.9.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <style type="text/css">
        .borderbox{
            width: 400px;
            height: 200px;
            border: 1px solid;
            margin: 150px auto;
            border-radius: 10px;
            box-shadow: 10px 10px 5px #888888;
            -moz-box-shadow: 10px 10px 5px #888888;
            -webkit-box-shadow: 10px 10px 5px #888888;;
        }

    </style>
</head>
<body>
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
        <li><a href="?c=lr&a=select" style='color:#EA2F2F'>登录/注册Bhere</a>
        <li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a>
        <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
</div>
</li>
</div>
<h2 style=" float: left;margin-left: 37%; margin-top: 7%;font-size: 25px;font-family: monospace;color: steelblue;border-bottom: 2px solid silver;
    width: 175px;
}">邮箱验证</h2>
<div class="borderbox">
<table class="table-hover" style="margin: 49px auto;">
    <form action="?c=lr&a=getback" method="post" onsubmit="return checkemail()">
        <tbody>
        <tr>
            <td>
              <span>注册时的邮箱账号</span>
            </td>
            <td>
                <input type="email" name="email"/>
            </td>
            <td>
                <span id="emailtips"></span>
            </td>
        </tr>
        <tr>
            <td>
                <a href="javascript:void(0)" onclick="sendtoemail($(this))" class="btn btn-info btn-sm">发送邮件</a>
                   <span style="display: none"></span>
            </td>
            <td>
              <span id="oktips"></span>
            </td>
        </tr>
        <tr>
            <td>
                <span>请输入邮箱返回的验证码</span>
            </td>
            <td>
                <input type="text" name="yzm"/>
                <input type="hidden" value="" name="oyzm"/>
            </td>
            <td>
                <a href="javascript:void(0)" onclick="conemail()" class="btn btn-info btn-sm">确定</a>
            </td>
            <td>
                <span id="yzmtips"></span>
            </td>
        </tr>
        </tbody>
    </form>
</table>
</div>
<?php echo '<script'; ?>
>
    var booldata =true;
    $("input[name='email']").blur(function(){
        var reg=/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/
        var email=$(this).val();

           if(reg.test(email)){
               booldata = true;
               $("#emailtips").text('填写成功').css({color:"#008800",fontSize:'12px'})
           }else {
               booldata=false;
               $("#emailtips").text('输入的邮箱格式不正确').css({color:"#ff0000",fontSize:'12px'})
           }
    })
    //发送邮件
    function sendtoemail(node){
       if(booldata==true){
          var email =  $("input[name='email']").val();//用户邮件账号
           node.hide(100);
           var num = 60;
           var tag = setInterval(function(){
               node.next().show(100).html(num+"秒后可重新发送")
               num--
               if(num<0){
                   node.next().hide(100)
                   node.show();
                   clearInterval(tag)
               }
           },1000)
           $.post("?c=lr&a=getbackto",{email:email},function(msg){
                 if(msg!=0){
                     $("#oktips").text('邮件发送成功').css({color:"#008800",fontSize:'12px'})
                     $("input[name='oyzm']").val(msg)
                 }


           })

       }else{
          $("#oktips").text('输入的邮箱格式不正确').css({color:"#ff0000",fontSize:'12px'})
       }

    }
    //提交验证码
    function conemail(){
        var yzm = $("input[name=yzm]").val()
        var oyzm = $("input[name='oyzm']").val()
        if(yzm==oyzm){
           location.href='?c=lr&a=updatepass';
        }else{
           $("#yzmtips").text('验证码不正确').css({color:"#ff0000",fontSize:'12px'})
        }

    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
