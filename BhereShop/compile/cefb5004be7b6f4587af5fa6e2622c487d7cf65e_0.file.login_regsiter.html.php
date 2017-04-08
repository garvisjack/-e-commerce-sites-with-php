<?php
/* Smarty version 3.1.30, created on 2017-03-29 19:06:12
  from "/usr/lamp/apache2/htdocs/template/login_register/login_regsiter.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58db95246e0c07_15455911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cefb5004be7b6f4587af5fa6e2622c487d7cf65e' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/login_register/login_regsiter.html',
      1 => 1490601799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db95246e0c07_15455911 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>bhere登录/注册</title>
    <link rel="stylesheet" href="./public/css/lr/icon/icono.min.css"/>
    <link rel="stylesheet" href="./public/css/lr/icon/style.css"/>
    <link rel="stylesheet" href="./public/css/lr/lr_plug/styles.css"/>
    <link rel="stylesheet" type="text/css" href="./public/css/goods-detail/css.css" />
    <style type="text/css">
        #menu ul li a{
            padding:  1px 92px 12px;
        }
        body{
            background:#cccccc;
        }
        #logo{
            width:320px;
            height:180px;
            position: relative;
            left: 206px;
            top: -532px;
        }
        .login-wrap{
            width:100%;
            margin:auto;
            max-width:460px;
            min-height:670px;
            position:relative;
            box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
            left:25%;
        }
        .login-html{
            width:100%;
            height:100%;
            position:absolute;
            padding:90px 70px 50px 70px;
            background: #cccccc;
            opacity: 0.9;
        }
        .login-html .sign-in:checked + .tab,
        .login-html .sign-up:checked + .tab{
            color:#333;
            border-color:#1161ee;
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



    <div class="jq22-container" style="padding-top:100px;">
        <div class="login-wrap">
            <div class="login-html">

                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">登录</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">注册</label>

                <div class="login-form">

                    <!--登录表单-->
                    <form action="?c=lr&a=checklogin" method="post" >
                    <div class="sign-in-htm">

                        <div class="group">
                            <label for="loginname" class="label">用户名</label>
                            <input id="loginname" type="text" class="input" name="loginname" style="background:#eeeeee;color:#888;">
                        </div>
                        <div class="group">
                            <label for="loginpass" class="label">密码</label>
                            <input id="loginpass" type="password" class="input" data-type="password" name="loginpass" style="background:#eeeeee;color:#888;">
                        </div>

                        <div class="group">
                            <input type="submit" class="button" name="login" value="登录">
                        </div>

                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="?c=lr&a=getback">忘记密码？</a>
                        </div>
                    </div>
                   </form>


<!--注册表单-->

                   <form action="?c=lr&a=regsiter" method="post" onsubmit="return checkform()">
                    <div class="sign-up-htm">

                        <div class="group">
                            <label for="reguser" class="label">用户名</label>
                            <input id="reguser" type="text" class="input" name="username">
                            <span class="usertips"></span>
                        </div>

                        <div class="group">
                            <label for="regpass" class="label">密码</label>
                            <input id="regpass" type="password" class="input" data-type="password" name="password">
                            <span class="passtips"></span>
                        </div>
                        <div class="group">
                            <label for="repass" class="label">再次输入密码</label>
                            <input id="repass" type="password" class="input" data-type="password">
                            <span class="repasstips"></span>
                        </div>
                        <div class="group">
                            <label for="email" class="label">邮箱地址</label>
                            <input id="email" type="text" class="input" name="email">
                            <span class="emailtips"></span>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="注册" name="register">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-1"><a href="">已有登录账号？</a>
                           </label>
                        </div>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>

   <div id="logo">
       <a href="?c=index&a=index"><img src="./public/img/logo/logo.png" alt=""></a>
   </div>
	<?php echo '<script'; ?>
 src="./public/js/jquery/jquery-1.9.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./public/js/bgflash/canvas-particle.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    /*动态粒子背景*/

    window.onload = function(){
        var config = {
            vx: 4,
            vy:  4,
            height: 2,
            width: 2,
            count: 100,
            color: "121, 162, 185",
            stroke: "100,200,180",
            dist: 6000,
            e_dist: 20000,
            max_conn: 10
        }
        CanvasParticle(config);
    }
    var booldata = false;
    //检测用户名是否为空
    $("#loginname").blur(function(){
        var userval = $(this).val();
        if(userval==""){
          booldata = false
        }else{
            booldata = true
        }
    })
  //检测密码是否为空
    $("#loginpass").blur(function(){
        var passval = $(this).val();
        if(passval==""){
            booldata = false
        }else{
            booldata = true
        }
    })
//后台检测用户名是否存在
    $("#reguser").blur(function(){

        var reguser = $(this).val()
        if(reguser!=''){
            //只有不为空才进行交互
        $.getJSON("?c=lr&a=existuser",{user:reguser},function(msg){
            /*如果msg为0则用户名存在*/
            if(msg==0){
                $(".usertips").eq(0).show(300).css({color:'#ff0000'}).text('该用户名已经存在')
                booldata = false
            }else{
                $(".usertips").eq(0).show(300,function(){$(this).delay(2000).hide(200)}).css({color:'#00ff00'}).text('恭喜可以注册！')
                booldata = true
            }
        })
        }else{
            $(".usertips").eq(0).show(300).css({color:'#ff0000'}).text('请输入用户名')
            booldata = false
        }
    })
//检测密码

    $("#regpass").blur(function(){
        var regpass = $(this).val();
        if(regpass!=""){
            booldata=true;
            $(".passtips").eq(0).hide(200)
        }else{
            $(".passtips").eq(0).show(200).text('请输入密码！')
            booldata=false;
        }
    })

//检测再次密码是否正确
    $("#repass").blur(function(){
       var regpass =  $("#regpass").val()
          if($(this).val()!=regpass||$(this).val()==""){
              $(".repasstips").show(300).text('两次输入的密码不一致！')
              booldata=false;
          }else{
              $(".repasstips").hide(300)
              booldata=true;
          }
    })
//邮箱正则
    $("#email").blur(function(){
        var email = $(this).val();
        var reg = /^[A-Za-z0-9]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
        var bool = reg.test(email);
        if(bool){
            $(".emailtips").hide(300)
            booldata=true;
        }else{
            $(".emailtips").show(300).text('邮箱格式不正确！')
            booldata=false;
        }
    })
    function checkform(){
        var returndata = false;
        if(booldata==false){
            alert('请将错误的信息修改再尝试提交！')
            return returndata;
        }else{
            returndata = true;
            return returndata;
        }
    }
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
