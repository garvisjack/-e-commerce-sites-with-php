<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/11
 * Time: 14:47
 */
   header('content-type:text/html;charset=utf-8');
   require './model/lrModel.class.php';
    class LrController{
        //检查用户名密码
        public function checklogin()
        {
            if (!empty($_POST['login'])) {
                   $obj=new LrModel();
                   $username = addslashes($_POST['loginname']);
                   $password = addslashes($_POST['loginpass']);
                   $sql = "select * from bhs_user where username='{$username}' and password='{$password}'";

                   $res = $obj->handle($sql);
                   $arr = $obj->fetcharr($res);

                   if(!empty($arr)){
                        setcookie('username',$username,time()+60*60*60);//第一个为字符串变量 第二个为键名；
                        $sql="update bhs_user set exptime=now()";
                        $obj->handle($sql);
                        echo "<script>location.href='?c=index&a=index'</script>";
                   }else{
                        echo  "<script>alert('登录失败');location.href='?c=lr&a=select';</script>";
                   }
               }

            }

        //展现登录注册页
        public  function select(){
            $GLOBALS['smarty']->display("login_register/login_regsiter.html");
        }

       //检测用户名是否存在
        public function existuser(){
             if(!empty($_REQUEST['user'])){
                 $obj=new LrModel();
                 $username = $_REQUEST['user'];
                 $sql="select username from bhs_user where username='{$username}'";
                 $res = $obj->handle($sql);
                 $arr = $obj->fetcharr($res);
                 if(!empty($arr)){
                     echo 0;
                 }else{
                     echo 1;
                 }

             }
        }
        //注册用户
        public function regsiter(){
            if (!empty($_POST['register'])){
                $obj=new LrModel();
                $username = htmlentities(addslashes($_POST['username']));
                $password = htmlentities(addslashes($_POST['password']));
                $email = htmlentities(addslashes($_POST['email']));
                //注册用户 名 密码 邮箱 注册时间
                $str="./public/img/pi/1.jpg";
                $sql="insert into bhs_user(id,username,password,email,level,regtime,image)values(null,'{$username}','{$password}','{$email}','0',now(),'{$str}')";

                $bool = $obj->handle($sql);
                if($bool){

                    echo "<script>alert('注册成功');location.href='?c=lr&a=select';</script>";
                }else{
                    echo  "<script>alert('注册失败');location.href='?c=lr&a=select';</script>";
                }
            }
        }
        //退出登录
        public function logout(){
            setcookie('username','');
  					
            header("Location:?c=index&a=index");
        }
        //找回密码
        public function getback(){

            $GLOBALS['smarty']->display("login_register/getback_pass.html");
        }
        public function getbackto(){
            //四位随机数
            $arr=range(0,9);
            $arr1=range('a','z');
            $arr2=array_merge($arr,$arr1);
            for($str='',$i=0;$i<4;$i++){
                $str.=$arr2[array_rand($arr2)];
            }
            if(!empty($_POST['email'])){

                $title='Bhere shop 用户邮箱验证码';
                //发送邮件
                   require './libs/class.phpmailer.php';
                    $mail = new PHPMailer(true); //实例化一个邮件类
                    $mail->CharSet = "utf-8"; //设置字符编码
                    $mail->IsSMTP();          //使用smtp协议
                    $mail->SMTPAuth   = true;  // 激活SMTP 授权验证
                    $mail->Port       = 25;     // 设置smtp端口号
                    $mail->Host       = "smtp.163.com"; // SMTP 服务器地址
                    $mail->Username   = "13528421600";     // SMTP 服务帐号
                    $mail->Password   = "Dji123456";            // SMTP 服务密码
                    $mail->From       = "13528421600@163.com"; //自己的邮箱
                    $mail->FromName   = "Bhere"; //自己的名字
                    $body = $str;  //发送的内容
                    $to = $_POST['email']; //发送给谁
                    $mail->AddAddress($to);
                    $mail->Subject  = $title; //发送主题
                    $mail->MsgHTML($body);
                    $mail->IsHTML(true); // 作为html发送
                    $mail->Send();
                  if($mail->Send()){
                      echo $body;
                  }else{
                      echo 0;
                  }

            }

        }
        //查找用户名验证用户名
        public function checkuser(){
            if(!empty($_REQUEST['user'])){
                $username = $_REQUEST['user'];
                $obj=new LrModel();
                $sql="select * from bhs_user where username='{$username}'";
                $res = $obj->handle($sql);
                $arr = $obj->fetcharr($res);
                if(!empty($arr)){
                    echo 1;
                }else{
                    echo 0;
                }
            }
        }
        //修改密码
        public function updatepass(){
            if(!empty($_POST)){
               $password=$_POST['password'];
               $username=$_POST['username'];
               $obj = new LrModel();
                $sql="update bhs_user set password='{$password}' where username='{$username}'";
                $bool = $obj->handle($sql);
               if($bool){
                   echo "<script>alert('修改成功');location.href='?c=lr&a=select'</script>>";
               }else{
                   echo "<script>alert('修改失败');location.href='?c=lr&a=updatepass'</script>>";
               }
            }
            $GLOBALS['smarty']->display("login_register/updatepass.html");
        }
    }