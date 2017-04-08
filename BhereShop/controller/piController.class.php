<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/12
 * Time: 11:40
 */
 header('content-type:text/html;charset=utf-8');
require "./model/piModel.class.php";
require "./controller/Controller.php";
  class PiController extends Controller {
      #因为个人中心的页面较多，我把可能需要的都罗列在下面了，我们一个页面用一个方法展示，看好注释
      #之前你写的我注释在下面，大部分可以拿来用的，只是效果和ajax另说,我要体现.html里的样式可拿去用

      /**
       * 个人中心主页内容
       */
      public function index(){


          $user = $_COOKIE['username'];  //用户名
          $GLOBALS['smarty']->assign("username",$user);
          $nopay = $this->nopay();//未支付订单信息
          $arr = $this->mailship();//物流信息
          $img = $this->userimg();//个人头像
          $record = $this->buyrecord();//购买记录
          $comment = $this->showcomment();//评论展现
          $mylike = $this->mylike();
          if (!empty($mylike)) {
              $GLOBALS['smarty']->assign("mylike", $mylike);
          } else {
              $GLOBALS['smarty']->assign("mylike", "");
          }
          if (!empty($comment)) {
              $GLOBALS['smarty']->assign("comment", $comment);
          } else {
              $GLOBALS['smarty']->assign("comment", "");
          }
          if (!empty($record)) {
              $GLOBALS['smarty']->assign("recordx", $record);
          } else {
              $GLOBALS['smarty']->assign("recordx", "");
          }

          if (!empty($nopay)) {
              $GLOBALS['smarty']->assign("nopay", $nopay);
          } else {
              $GLOBALS['smarty']->assign("nopay", "");
          }

          if (!empty($arr)) {
              $GLOBALS['smarty']->assign("arr", $arr);
          } else {
              $GLOBALS['smarty']->assign("arr", "");
          }
          if(isset($_SESSION['shopcar'])){
              $GLOBALS['smarty']->assign("shopcar",$_SESSION['shopcar']);
          }else{
              $GLOBALS['smarty']->assign("shopcar", "");
          }
          $datestr = date("Y") . "年" . date("m") . "月" . date("d") . "日";
          $GLOBALS['smarty']->assign("date", $datestr);
          $GLOBALS['smarty']->assign("personimg", $img);
          $GLOBALS['smarty']->display("pi/index.html");

      }
        //待发货
      public function unsend(){
          $user = $_COOKIE['username'];  //用户名
          $GLOBALS['smarty']->assign("username",$user);
          $img = $this->userimg();//个人头像
          $arr = $this->mailship();//物流信息
          if (!empty($arr)) {
              $GLOBALS['smarty']->assign("arr", $arr);
          } else {
              $GLOBALS['smarty']->assign("arr", "");
          }
          $GLOBALS['smarty']->assign("personimg", $img);
          $GLOBALS['smarty']->display("pi/unsend.html");
      }
      
      /**
       * 购买记录内容
       */
      public function order(){
          $user = $_COOKIE['username'];  //用户名
          $img = $this->userimg();//个人头像
          $record = $this->buyrecord();//购买记录
          if (!empty($record)) {
              $GLOBALS['smarty']->assign("recordx", $record);
          } else {
              $GLOBALS['smarty']->assign("recordx", "");
          }
          $GLOBALS['smarty']->assign("personimg", $img);
          $GLOBALS['smarty']->assign("username",$user);
          $GLOBALS['smarty']->display("pi/order.html");
      }

      /**
       * 你可借用的样式
       */
      public function youcanuse(){
          $GLOBALS['smarty']->display("pi/you-can-use.html");
      }
      /*
       * 我的评价内容
       */
      public function comment(){
          $user = $_COOKIE['username'];  //用户名
          $img = $this->userimg();//个人头像
          $comment = $this->showcomment();//评论展现
          if (!empty($comment)) {
              $GLOBALS['smarty']->assign("comment", $comment);
          } else {
              $GLOBALS['smarty']->assign("comment", "");
          }
          $GLOBALS['smarty']->assign("personimg", $img);
          $GLOBALS['smarty']->assign("username",$user);
          $GLOBALS['smarty']->display("pi/comment.html");
      }



      /**
       * 我的资料中心
       */
      public function myinfo(){
          $user = $this->checkuser()[0];
          $img = $this->userimg();//个人头像
          $GLOBALS['smarty']->assign("user", $user);
          $GLOBALS['smarty']->assign("personimg", $img);
          $GLOBALS['smarty']->assign("username", $_COOKIE['username']);
          $GLOBALS['smarty']->display("pi/myinfo.html");
      }

      /**
       * 安全设置中心，用来改密码或者手机等,我帮你弄
       */
      public function safe(){
          if(!empty($_COOKIE['username'])){
              $gd = new gdModel();
              $user = $_COOKIE['username'];  //用户名
              //取出需要的用户信息
              $safe = $gd->select("select id,username,email,mobile,level,image from bhs_user where username='{$user}'");
              $GLOBALS['smarty']->assign("user",$user);
              $GLOBALS['smarty']->assign("safe",$safe);
          }

          $GLOBALS['smarty']->display("pi/safe.html");
      }

      /**
       * 帐号绑定，暂时放着，先不做，可当空模版利用
       */
      public function bindacc(){
          $img = $this->userimg();//个人头像
          $GLOBALS['smarty']->assign("personimg", $img);
          $GLOBALS['smarty']->assign("username", $_COOKIE['username']);
          $GLOBALS['smarty']->display("pi/bind-acc.html");
      }

          /**
       * 地址管理
       */
      public function address(){
          //收货地址
          $obj = new PiModel();
          $sql="select a.* from bhs_address a inner join bhs_user u on u.id = a.user_id where u.username='{$_COOKIE['username']}'";
          $arr =  $obj->returnarr($sql);
          if(!empty($arr)){//检测用户是否添加过
              $sql1="select count(a.id) xx from bhs_address a inner join bhs_user u on u.id = a.user_id where u.username='{$_COOKIE['username']}'";
              $sum = $obj->returnarr($sql1)[0]['xx'];//已添加收货地址数
              $GLOBALS['smarty']->assign("sum", $sum);
              $GLOBALS['smarty']->assign("arr", $arr);
          }else{
              $GLOBALS['smarty']->assign("sum", 0);
              $GLOBALS['smarty']->assign("arr","");
          }

          $img = $this->userimg();//个人头像
          $GLOBALS['smarty']->assign("personimg", $img);
          $GLOBALS['smarty']->assign("username", $_COOKIE['username']);
          $GLOBALS['smarty']->display("pi/address.html");
      }

      /**
       * 添加收货地址
       */
      public function add_address(){
          //拿到user_id
          $obj = new PiModel();
          $sql = "select id from bhs_user where username='{$_COOKIE['username']}'";
          $id = $obj->returnarr($sql)[0]['id'];
          if(!empty($_POST)){
              $p=$_POST['p'];//省
              $c=$_POST['c'];//市
              $r=$_POST['r'];//区
              $detail=addslashes(htmlentities($_POST['detail']));
              $name=addslashes(htmlentities($_POST['name']));
              $postcode=$_POST['postcode'];
              $mobile=$_POST['mobile'];
              //是否设为默认地址
             if(in_array(1,$_POST)){
                 //在判断是否是第一次添加
              $sql="select * from bhs_address where user_id={$id}";
              $frist = $obj->returnarr($sql);
                 if(!empty($frist)){//如果不是第一次添加
                     $sql="update bhs_address set addrdefault=0 where user_id={$id}";
                     $obj->update($sql);
                     $addsql="insert into bhs_address values(null,'{$p}','{$c}','{$r}','{$detail}','{$name}','{$mobile}','{$postcode}',{$id},1)";
                     $bool = $obj->update($addsql);
                     if($bool){
                         echo "<script>alert('添加成功');location.href='?c=pi&a=address'</script>";
                     }else{
                         echo "<script>alert('添加失败');location.href='?c=pi&a=address'</script>";
                     }
                 }else{//第一次添加
                     $addsql="insert into bhs_address values(null,'{$p}','{$c}','{$r}','{$detail}','{$name}','{$mobile}','{$postcode}',{$id},1)";
                     $bool = $obj->update($addsql);
                     if($bool){
                         echo "<script>alert('添加成功');location.href='?c=pi&a=address'</script>";
                     }else{
                         echo "<script>alert('添加失败');location.href='?c=pi&a=address'</script>";
                     }
                 }
             }else{
                 $addsql="insert into bhs_address values(null,'{$p}','{$c}','{$r}','{$detail}','{$name}','{$mobile}','{$postcode}',{$id},0)";
                 $bool = $obj->update($addsql);
                 if($bool){
                     echo "<script>alert('添加成功');location.href='?c=pi&a=address'</script>";
                 }else{
                     echo "<script>alert('添加失败');location.href='?c=pi&a=address'</script>";
                 }
             }

          }
      }
      //修改地址展现
      public function editor_address(){
          if(!empty($_GET['id'])){
              $obj = new PiModel();
              $sql="select * from bhs_address where id={$_GET['id']}";
              $arr =  $obj->returnarr($sql)[0];
              $img = $this->userimg();//个人头像
              $GLOBALS['smarty']->assign("arr", $arr);
              $GLOBALS['smarty']->assign("personimg", $img);
              $GLOBALS['smarty']->assign("username", $_COOKIE['username']);
              $GLOBALS['smarty']->display("pi/editoraddr.html");
          }
          }
      //修改地址
      public function editor_address_editor(){
          if(!empty($_POST)){
              $obj = new PiModel();
              $sql = "select id from bhs_user where username='{$_COOKIE['username']}'";
              $userid = $obj->returnarr($sql)[0]['id'];
              $p=$_POST['p'];//省
              $c=$_POST['c'];//市
              $r=$_POST['r'];//区
              $detail=addslashes(htmlentities($_POST['detail']));
              $name=addslashes(htmlentities($_POST['name']));
              $postcode=$_POST['postcode'];
              $mobile=$_POST['mobile'];
              $id=$_POST['id'];
              if($_POST['default']=='1'){//判断是否设置为默认地址
                  $sql="update bhs_address set addrdefault=0 where user_id={$userid}";
                  $obj->update($sql);//先初始化
                  $updatesql="update bhs_address set pro='{$p}',city='{$c}',region='{$r}',detail='{$detail}',receiver='{$name}',contact='{$mobile}',postcode='{$postcode}',addrdefault=1 where id={$id}";
                  $bool = $obj->update($updatesql);
                  if($bool){
                      echo "<script>alert('修改成功');location.href='?c=pi&a=address'</script>";
                  }else{
                      echo "<script>alert('修改失败');location.href='?c=pi&a=address'</script>";
                  }
              }else{
                  $updatesql="update bhs_address set pro='{$p}',city='{$c}',region='{$r}',detail='{$detail}',receiver='{$name}',contact='{$mobile}',postcode='{$postcode}',addrdefault=0 where id={$id}";
                  $bool = $obj->update($updatesql);
                  if($bool){
                      echo "<script>alert('修改成功');location.href='?c=pi&a=address'</script>";
                  }else{
                      echo "<script>alert('修改失败');location.href='?c=pi&a=address'</script>";
                  }
              }
          }
      }
      //删除收货地址
      public function delete_address(){
          if(!empty($_GET['id'])){
              $obj = new PiModel();
              $sql ="delete from bhs_address where id={$_GET['id']}";
              $bool = $obj->update($sql);
              if($bool){
                  echo "<script>location.href='?c=pi&a=address'</script>";
              }else{
                  echo "<script>location.href='?c=pi&a=address'</script>";
              }
          }
      }

      /**
       * 我的钱包部分，待定不急
       */
      public function mymoney(){
          $img = $this->userimg();//个人头像
          $GLOBALS['smarty']->assign("personimg", $img);
          $GLOBALS['smarty']->assign("username", $_COOKIE['username']);
          $GLOBALS['smarty']->display("pi/my-money.html");
      }

      /**
       * 退换货部分，这个业务可以有
       */
      public function rg(){
          $img = $this->userimg();//个人头像
          $GLOBALS['smarty']->assign("personimg", $img);
          $GLOBALS['smarty']->assign("username", $_COOKIE['username']);
          $GLOBALS['smarty']->display("pi/return-goods.html");
      }

     /**
      * 以下是修改密码的环节1，2，3，这部分我帮你做了
      *
      */
      public function cp1(){
          if(!empty($_COOKIE['username'])) {
              $user = $_COOKIE['username'];  //用户名
              $GLOBALS['smarty']->assign("user", $user);
              $gd = new gdModel();
              //得到该用户近期买过的商品，随机抽出一个
              $ever = $gd->select("SELECT g.id id,spic from bhs_order o
INNER JOIN bhs_user u on u.id=o.user_id
INNER JOIN bhs_goods g on g.id=o.goods_id
where username='{$user}'");
              if(!empty($ever)){
              $key = mt_rand(0,count($ever)-1);
              $ever1 = $ever[$key]; //用户曾经购买过的一个数组
              $ever2 = array($ever1);
              //随机选出8个商品用于干扰选择
              $total = $gd->select("select count(id) total from bhs_goods");
              $least = $total[0]['total']-9;
              $limit = mt_rand(0,$least);
              $rand = $gd->select("SELECT id,spic from bhs_goods limit {$limit},9");

                  array_splice($rand,mt_rand(0,7),1,$ever2); //随机截取后用新的数组替换，达到随机插入的效果
              }else{
                  echo "<script>location.href='?c=pi&a=cp2'</script>";
              }
              $GLOBALS['smarty']->assign("rand",$rand);

          }
          $GLOBALS['smarty']->display("pi/change-pw1.html");
      }

      public function cp2(){
          $user = $_COOKIE['username'];  //用户名
          $GLOBALS['smarty']->assign("user", $user);
          $GLOBALS['smarty']->display("pi/change-pw2.html");
      }

      public function cp3(){
          $user = $_COOKIE['username'];  //用户名
          $GLOBALS['smarty']->assign("user", $user);
          $GLOBALS['smarty']->display("pi/change-pw3.html");
      }

      public function updatePw(){
          if(!empty($_POST['oldpw'])&&!empty($_POST['newpw'])&&!empty($_POST['newpw-again'])&&!empty($_COOKIE['username'])){
              $opw = addslashes(trim($_POST['oldpw']));
              $npw = addslashes(trim($_POST['newpw']));
              $user = $_COOKIE['username'];  //用户名
              $gd = new gdModel();
              $check = $gd->select("select username,password from bhs_user where password='{$opw}' and username='{$user}'");
                if(!empty($check)){
                    $bool = $gd->query("update bhs_user set password='{$npw}' where username='{$user}'");
                    if($bool){
                        header('Location:?c=pi&a=cp3');
                    }else{
                        echo "<script>alert('修改失败!');location.href='?c=pi&a=cp2';</script>";
                    }
                }else{
                    echo "<script>alert('修改失败!');location.href='?c=pi&a=cp2';</script>";
                }

          }else{
              echo "<script>alert('信息填写不完整!');location.href='?c=pi&a=cp2';</script>";
          }
      }
      /**
       * 修改手机 待定
       */
      public function cmb1(){
          if(!empty($_COOKIE['username'])) {
              $user = $_COOKIE['username'];  //用户名
              $GLOBALS['smarty']->assign("user", $user);
              $gd = new gdModel();
              //得到该用户近期买过的商品，随机抽出一个
              $ever = $gd->select("SELECT g.id id,spic from bhs_order o
INNER JOIN bhs_user u on u.id=o.user_id
INNER JOIN bhs_goods g on g.id=o.goods_id
where username='{$user}'");
              if(!empty($ever)){
              $key = mt_rand(0,count($ever)-1);
              $ever1 = $ever[$key]; //用户曾经购买过的一个数组
              $ever2 = array($ever1);
              //随机选出8个商品用于干扰选择
              $total = $gd->select("select count(id) total from bhs_goods");
              $least = $total[0]['total']-9;
              $limit = mt_rand(0,$least);
              $rand = $gd->select("SELECT id,spic from bhs_goods limit {$limit},9");

                  array_splice($rand,mt_rand(0,7),1,$ever2); //随机截取后用新的数组替换，达到随机插入的效果
              }else{
                  echo "<script>location.href='?c=pi&a=cmb2'</script>";
              }
              $GLOBALS['smarty']->assign("rand",$rand);

          }
          $GLOBALS['smarty']->display("pi/change-mb1.html");
      }
//获取手机验证码模板
      public function cmb2(){
          $user = $_COOKIE['username'];  //用户名
          $GLOBALS['smarty']->assign("user", $user);
          $GLOBALS['smarty']->display("pi/change-mb2.html");

      }


//发送手机验证码
    public function sendto(){
        if(!empty($_POST['mobile'])){
            $randata = $this->randdata();
            $content = "【bhere】您的验证码为".$randata."请妥善保管，不要告诉任何人！";
            $post_data['userid'] = 15155;
            $post_data['account'] = 'dd1652';
            $post_data['password'] = '123456';
            $post_data['content'] = $content;
            //多个手机号码用英文半角豆号‘,’分隔
            $post_data['mobile'] =$_POST['mobile'];
            $url='http://www.qf106.com/sms.aspx?action=send';
            $o='';
            foreach ($post_data as $k=>$v)
            {
                //短信内容需要用urlencode编码，否则可能收到乱码
                $o.="$k=".urlencode($v).'&';
            }
            $post_data=substr($o,0,-1);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果需要将结果直接返回到变量里，那加上这句。
            $result = curl_exec($ch);
            $_SESSION['phonedata']=$randata;
            echo $result;
        }
    }

    public function randdata(){
        $arr=range(0,9);
        for($str='',$i=0;$i<4;$i++){
            $str.=$arr[array_rand($arr)];
        }
        return $str;
    }
    //验证验证码
    public function checkphone(){
        if(!empty($_REQUEST['data'])){
            if($_REQUEST['data']==$_SESSION['phonedata']){
                echo 1;
            }else{
                echo 0;
            }

        }
    }
    public function updatemobile(){
        if(!empty($_REQUEST['mobile'])){
            $mobile = $_REQUEST['mobile'];
            $obj = new PiModel();
            $bool = $sql = "update bhs_user set mobile='{$mobile}' where username='{$_COOKIE['username']}'";
            if($bool){
                echo 1;
            }else{
                echo 0;
            }
        }
    }

      public function cmb3(){
          $user = $_COOKIE['username'];  //用户名
          $GLOBALS['smarty']->assign("user", $user);
          $GLOBALS['smarty']->display("pi/change-mb3.html");
      }


      //未支付的订单信息
      public function nopay()
      {
          $obj = new PiModel();

          $sql = "select  g.title,g.tpic,g.price,o.*,u.username from bhs_order o INNER JOIN bhs_goods g on o.goods_id=g.id INNER JOIN bhs_user u on o.user_id=u.id where u.username='{$_COOKIE['username']}' and o.order_status=0 order by o.id desc  ";

          $arr = $obj->returnarr($sql);
          return $arr;

      }

      //去支付
    

      //删除未支付订单
      public function delorder()
      {
          if (!empty($_REQUEST['ordernum'])) {
              $obj = new PiModel();
              $sql = "delete from bhs_order where order_num='{$_REQUEST['ordernum']}'";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }

          }
      }

      //已支付未收货的物流信息
      public function mailship()
      {
          $obj = new PiModel();

          $sql = "select  g.title,g.tpic,g.price,o.*,u.username from bhs_order o INNER JOIN bhs_goods g on o.goods_id=g.id INNER JOIN bhs_user u on o.user_id=u.id where u.username='{$_COOKIE['username']}' and o.order_status=6 or o.order_status=1 order by o.id desc  ";

          $arr = $obj->returnarr($sql);
          return $arr;

      }


      // 购买记录
      public function buyrecord()
      {
          $sql = "select  g.title,g.tpic,g.price,o.*,u.username from bhs_order o INNER JOIN bhs_goods g on o.goods_id=g.id INNER JOIN bhs_user u on o.user_id=u.id where u.username='{$_COOKIE['username']}' and o.order_status=2 order by o.id desc  ";
          $obj = new PiModel();
          $arr = $obj->returnarr($sql);
          return $arr;
      }

      //删除购买记录
      public function delrecord()
      {
          if (!empty($_REQUEST['id'])) {
              $obj = new PiModel();
              $sql = "delete from bhs_order where id='{$_REQUEST['id']}'";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }

          }
      }

      //用户头像
      public function userimg()
      {
          $sql = "select image from bhs_user where username='{$_COOKIE['username']}'";
          $obj = new PiModel();
          $personimg = $obj->returnarr($sql);
          return $personimg[0]['image'];
      }

      //确认收货
      public function confirmorder()
      {
          if (!empty($_REQUEST['id'])) {
              $obj = new PiModel();
              $sql = "update bhs_order set order_status='2',overtime=now() where id={$_REQUEST['id']}";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }

          }
      }

      //提交商品评论
      public function tocomment()
      {
          if (!empty($_REQUEST['id'])) {
              $obj = new PiModel();
              //查出对应的订单ID和用户评论存不存在 如果不存在 就添加
              //查出订单号ID
              $goodsid = $_REQUEST['id'];//商品ID
              $orderid = $_REQUEST['orderid'];//订单号ID
              $userid = 1;  //当该ID为0的时候，代表是管理员的评论控制
              $content = addslashes(htmlentities($_REQUEST['content']));//评价内容
              $rank = $_REQUEST['rank'];//评价等级
              $username = $_COOKIE['username'];//评价客户
              $addtime = time();//评价时间
              $ip = $_SERVER['REMOTE_ADDR'];//评价的ip
              $sql0 = "select * from bhs_comment where order_id={$orderid} ";//查看有没有这个数组
              $arr1 = $obj->returnarr($sql0);
              if (!empty($arr1)) {
                  echo 0;
              } else {
                  $sql = "insert into bhs_comment values('null','{$username}',0,{$goodsid},'{$content}',{$rank},{$addtime},'{$ip}',1,0,{$userid},{$orderid})";
                  $bool = $obj->update($sql);
                  if ($bool) {
                      $sql1 = "update bhs_order set comment_status=1 where id={$orderid}";
                      $obj->update($sql1);
                      echo 1;
                  } else {
                      echo 0;
                  }
              }
          }

      }

      //评论展现
      public function showcomment()
      {
          $sql = "select cc.*,g.title,g.tpic from bhs_comment cc inner join bhs_goods g on g.id=cc.goods_id where cc.user_id=1 and cc.user_name='{$_COOKIE['username']}' order by id desc";
          $obj = new PiModel();
          $arr = $obj->returnarr($sql);
          return $arr;
      }

      //删除评论
      public function delc()
      {
          if (!empty($_REQUEST['id'])) {
              $obj = new PiModel();
              $sql = "delete from bhs_comment where id={$_REQUEST['id']}";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }
          }
      }
     //猜你喜欢
    public function mylike(){
        //拿到该用户最近购买一次物品ID
        $obj = new PiModel();
        $goodssql = "select o.goods_id from bhs_order o inner join bhs_user u on u.id=o.user_id where u.username='{$_COOKIE['username']}' order by o.id desc";
         $goodsidx = $obj ->returnarr($goodssql);
        if(!empty($goodsidx)){
            $goodsid=$goodsidx[0]['goods_id'];
        //根据拿到的ID找分类
        $catesql = "select type_id from bhs_goods where id={$goodsid}";
        $cateid = $obj->returnarr($catesql)[0]['type_id'];
        //遍历分类所属商品
        $likesql = "select title,price,tpic,id from bhs_goods where type_id={$cateid} limit 0,6";
            return $like = $obj->returnarr($likesql);
        }else{
            return $str="";
        }
    }
      //查出用户信息
      public function checkuser()
      {
          $sql = "select * from bhs_user where username='{$_COOKIE['username']}' ";//以后传cookie的值即可
          $obj = new PiModel();
          //
          return $obj->returnarr($sql);
      }

      //更改用户信息
      public function editoruser()
      {
          if (!empty($_POST)) {
              $username = htmlentities(addslashes($_POST['username']));
              $sex = addslashes($_POST['sex']);
              $email = htmlentities(addslashes($_POST['email']));
              $birth = $_POST['birth'];
              $qq = $_POST['qqnum'];
              $mobile = $_POST['mobile'];
              $phone = $_POST['phone'];
              $code = $_POST['postcode'];
              $address = $_POST['province'] . "-" . $_POST['city'] . "-" . $_POST['region'] . "-" . $_POST['addr'];
              $obj = new PiModel();
              $sql = "update bhs_user set username='{$username}',sex='{$sex}',email='{$email}',birth='{$birth}',qqnum='{$qq}',mobile='{$mobile}',phone='{$phone}',postcode='{$code}',address='{$address}' where username='{$_COOKIE['username']}'";
              $bool = $obj->update($sql);
              if ($bool) {
                  setcookie("username","");
                  setcookie("username",$username);
                  echo "<script>location.href='?c=pi&a=myinfo'</script>";
              } else {
                  echo "<script>alert('修改失败');location.href='?c=pi&a=myinfo'</script>";
              }
          }
      }

      //验证用户名是否已存在
      public function existuser()
      {
          if (!empty($_REQUEST['username'])) {
              $username = addslashes($_REQUEST['username']);
              $obj = new PiModel();
              $sql = "select id from bhs_user where username='{$username}'";
              $bool = $obj->returnarr($sql);
              if ($bool) {
                  echo 0;
              } else {
                  echo 1;
              }
          }

      }


      //上传头像
      public function uploads()
      {
          if (!empty($_FILES['personpic']['tmp_name'][0])) {
              $obj = new PiModel();
              $str = $obj->uploads();//头像上传路径
              $sql = "select image from bhs_user where username='{$_COOKIE['username']}'";
              $arr = $obj->returnarr($sql)[0]['image'];
              $addr = "./public/img/personalindeximg/1.jpg";
              if ($arr == $addr) {
                  $update = "update bhs_user set image='{$str}' where username='{$_COOKIE['username']}'";
                  $bool = $obj->update($update);
                  if ($bool) {
                      echo "<script>alert('上传成功');location.href='?c=pi&a=myinfo'</script>";
                  } else {
                      echo "<script>alert('上传失败');location.href='?c=pi&a=myinfo'</script>";
                  }

              } else {
                  unlink($arr);
                  $update = "update bhs_user set image='{$str}' where username='{$_COOKIE['username']}'";
                  $bool = $obj->update($update);
                  if ($bool) {
                      echo "<script>alert('上传成功');location.href='?c=pi&a=myinfo'</script>";
                  } else {
                      echo "<script>alert('上传失败');location.href='?c=pi&a=myinfo'</script>";
                  }
              }

        }else{
        	 echo "<script>alert('上传失败');location.href='?c=pi&a=myinfo'</script>";
        	}
      }

      /**
       * 物流信息模拟查询
       */
      public function kd(){
          $user = $_COOKIE['username'];  //用户名
          $GLOBALS['smarty']->assign("user", $user);
          $GLOBALS['smarty']->display("pi/kd.html");
      }

      /**
       * 快递跟踪查询结果展示  数据 YTO,809945371445
       */
     public function logistics(){
          require 'logistics.php';
          $user = $_COOKIE['username'];  //用户名
          $GLOBALS['smarty']->assign("user", $user);
          //得到快递发货的信息
          if(isset($_GET['order'])) {

              $gd = new gdModel();
              $kd = $gd->select("select * from bhs_kd where ordernum=".$_GET['order']);
              if(empty($kd)){
                  $GLOBALS['smarty']->display("pi/nolog.html");
                  exit;
              }else {
                  //初始化一些必要的数据

                  $lcode = $kd[0]['kdnum'];
                  $api = $kd[0]['kdcode'];
                  $orderCode = $kd[0]['ordernum'];
                  $prepare = array();
                  $prepare['OrderCode'] = $orderCode;    //订单号
                  $prepare['ShipperCode'] = $api;        //商家决定发的快递号编码,默认圆通
                  $prepare['LogisticCode'] = $lcode;//查询时的快递单号
                  $requestData = json_encode($prepare);  //以json数据接受,该数据作为函数的参数使用

                  $logisticResult = getOrderTracesByJson($requestData); //返回的是一个JSON格式的数据
                  $result = json_decode($logisticResult, true);   //转换成数组输出
                  $ship = $result['ShipperCode'];
                  $lcode = $result['LogisticCode'];
                  $GLOBALS['smarty']->assign("ship", $ship);
                  $GLOBALS['smarty']->assign("lcode", $lcode);
                  //这里的$result是一个有字符串，有数组的三维数组 AcceptTime,AcceptStation
                  $info = $result['Traces'];
                  $GLOBALS['smarty']->assign("info", $info);
              }
        }


          $GLOBALS['smarty']->display("pi/logistics.html");
      }


      /**
       * 用于图片验证码的检测
       */
      public function checkMb(){
            if(!empty($_REQUEST['gid'])){
                $gid = $_REQUEST['gid'];
                $user = $_COOKIE['username'];  //用户名
                $gd = new gdModel();
                //得到该用户近期买过的商品，随机抽出一个
                $ever = $gd->select("SELECT g.id id from bhs_order o
INNER JOIN bhs_user u on u.id=o.user_id
INNER JOIN bhs_goods g on g.id=o.goods_id
where username='{$user}'");
                $Gid = array();
                foreach($ever as $value){
                    $Gid[] = $value['id'];
                }
                if(in_array($gid,$Gid)){
                    echo 1;
                }else{
                    echo 0;
                }
            }
      }


      /*public function select()
      {

          //生成时间日期
          $arrweek = array("日", "一", "二", "三", "四", "五", "六");
          $ymd = date("Y-m-d");
          $week = $arrweek[date("w")];
          $datestr = "今天是{$ymd},星期{$week}";
          $arr = $this->checkuser();
          $order = $this->ordershow();
          $buy = $this->buyrecord();
          $comment = $this->showcomment();
          if (!empty($order)) {
              $GLOBALS['smarty']->assign("order", $order);
          } else {
              $GLOBALS['smarty']->assign("order", "");
          }
          if (!empty($buy)) {
              $GLOBALS['smarty']->assign("buy", $buy);
          } else {
              $GLOBALS['smarty']->assign("buy", "");
          }
          if (!empty($comment)) {
              $GLOBALS['smarty']->assign("comment", $comment);
          } else {
              $GLOBALS['smarty']->assign("comment", "");
          }
          //用户头像
          $sql ="select image from bhs_user where username='{$_COOKIE['username']}'";
          $obj=new PiModel();
          $personimg = $obj->returnarr($sql);
          if(!empty($personimg[0]['image'])){
              $GLOBALS['smarty']->assign("personimg",$personimg[0]['image'] );
          }else{
              $str="./public/img/personalindeximg/1.jpg";
              $GLOBALS['smarty']->assign("personimg",$str);
          }

          $GLOBALS['smarty']->assign("user", $_COOKIE['username']);
          $GLOBALS['smarty']->assign("arr", $arr);
          $GLOBALS['smarty']->assign("str", $datestr);
          $GLOBALS['smarty']->display("PersonIndex/index.html");
      }

      //查出用户信息
      public function checkuser()
      {
          $sql = "select * from bhs_user where username='{$_COOKIE['username']}' ";//以后传cookie的值即可
          $obj = new PiModel();
          //
          return $obj->returnarr($sql);
      }

      //更改用户信息
      public function editoruser()

      {
          $obj = new PiModel();
          $sql1 = "select id from bhs_user where username='{$_COOKIE['username']}'";//拿到该用户的id
          $arr2 = $obj->returnarr($sql1);

          if (!empty($_REQUEST['user'])) {//检测用户名 更新用户名
              $username = htmlentities(addslashes($_REQUEST['user']));
              $sql0 = "select * from bhs_user where username='{$username}'";//先查看有没这个名字
              $arr1 = $obj->returnarr($sql0);

              if (!empty($arr1)) {
                  echo 0;
              } else {
                  $sql2 = "update bhs_user set username='{$username}' where id={$arr2[0]['id']}";//更新该用户的用户名
                  $bool = $obj->update($sql2);
                  if ($bool) {
                      setcookie('username', '');
                      setcookie('username', $username, time() + 60 * 60 * 60);
                      echo 1;
                  } else {
                      echo 0;
                  }
              }
          }
          if (!empty($_REQUEST['sex'])) {//更新性别

              $sql3 = "update bhs_user set sex='{$_REQUEST['sex']}' where id={$arr2[0]['id']}";
              $bool1 = $obj->update($sql3);

              if ($bool1) {
                  echo 1;
              } else {
                  echo 0;
              }
          }
          if (!empty($_REQUEST['email'])) {
              $sql = "update bhs_user set email='{$_REQUEST['email']}' where id ={$arr2[0]['id']}";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }

          }
          if (!empty($_REQUEST['qq'])) {
              $sql = "update bhs_user set qqnum='{$_REQUEST['qq']}'  where id = {$arr2[0]['id']}";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }
          }
          if (!empty($_REQUEST['mobile'])) {
              $sql = "update bhs_user set mobile='{$_REQUEST['mobile']}'  where id = {$arr2[0]['id']}";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }
          }
          if (!empty($_REQUEST['birth'])) {
              $sql = "update bhs_user set birth='{$_REQUEST['birth']}'  where id = {$arr2[0]['id']}";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }

          }
          if (!empty($_GET['addr'])) {
              $addr = htmlentities(addslashes($_GET['addr']));
              $sql = "update bhs_user set address='{$addr}'  where id = {$arr2[0]['id']}";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }
          }
          if (!empty($_GET['addr1'])) {
              $addr = htmlentities(addslashes($_GET['addr1']));
              $sql = "update bhs_user set address='{$addr}'  where id = {$arr2[0]['id']}";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }

          }
          if (!empty($_GET['str'])) {
              $str = htmlentities(addslashes($_GET['str']));
              $sql = "update bhs_user set postcode='{$str}'  where id = {$arr2[0]['id']}";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }

          }
          if(!empty($_REQUEST['newpass'])){
              $str = htmlentities(addslashes($_GET['newpass']));
              $sql = "update bhs_user set password='{$str}'  where id = {$arr2[0]['id']}";
              $bool = $obj->update($sql);
              if ($bool) {
                  echo 1;
              } else {
                  echo 0;
              }
          }

      }

      //订单展示
      public function ordershow()
      {
          //商品订单
          $sql = "select  o.*,u.username,g.title,g.tpic,g.price from bhs_order o inner join bhs_goods g on o.goods_id=g.id  INNER JOIN bhs_user u on o.user_id=u.id where u.username='{$_COOKIE['username']}'";
          $obj = new PiModel();
          $arr = $obj->returnarr($sql);//订单
          return $arr;
      }
      //去支付
      public function topay(){
          if(!empty($_REQUEST['id'])){
              $orderid = $_REQUEST['id'];//订单ID
              $obj=new PiModel();
              $sql="update bhs_order set order_status='1' where id={$orderid}";
              $bool = $obj->update($sql);
              if($bool){
                  echo 1;
              }else{
                  echo 0;
              }
          }
      }
    //确认收货
      public function confirmorder(){
            if(!empty($_REQUEST['id'])){
              $obj=new PiModel();
              $sql="update bhs_order set order_status='2',overtime=now() where id={$_REQUEST['id']}";
              $bool = $obj->update($sql);
               if($bool){
                   echo 1;
               }else{
                   echo 0;
               }

            }
      }
    //删除购买记录
    public function delcomment(){
        if(!empty($_REQUEST['id'])){
            $obj=new PiModel();
            $sql ="delete from bhs_order where id={$_REQUEST['id']}";
            $bool = $obj->update($sql);
            if($bool){
                echo 1;
            }else{
                echo 0;
            }
        }
        }

    //购买记录
       public function buyrecord(){
           $sql="select  g.title,g.tpic,g.price,o.*,u.username from bhs_order o INNER JOIN bhs_goods g on o.goods_id=g.id INNER JOIN bhs_user u on o.user_id=u.id where u.username='{$_COOKIE['username']}' and o.order_status='2' ";
           $obj=new PiModel();
           $arr = $obj->returnarr($sql);
           return $arr;
       }

      //提交商品评论
      public function comment(){
          if(!empty($_REQUEST['id'])){

              $obj =new PiModel();
              //查出对应的订单ID和用户评论存不存在 如果不存在 就添加
              //查出订单号ID
              $goodsid = $_REQUEST['id'];//商品ID
              $orderid = $_REQUEST['orderid'];//订单号ID
              $userid = 1;  //当该ID为0的时候，代表是管理员的评论控制
              $content= addslashes(htmlentities($_REQUEST['content']));//评价内容
              $rank = $_REQUEST['rank'];//评价等级
              $username = $_COOKIE['username'];//评价客户
              $addtime = time();//评价时间
              $ip = $_SERVER['REMOTE_ADDR'];//评价的ip
              $sql0 = "select * from bhs_comment where order_id={$orderid} ";//查看有没有这个数组
              $arr1 = $obj->returnarr($sql0);
              if(!empty($arr1)){
                  echo 0;
              }else{
                  $sql="insert into bhs_comment values('null','{$username}',0,{$goodsid},'{$content}',{$rank},{$addtime},'{$ip}',1,0,{$userid},{$orderid})";
                  $sql1="update bhs_order set comment_status=1 where id={$orderid}";
                  $bool=$obj->update($sql);

                  if($bool){
                      $obj->update($sql1);
                      echo 1;
                  }else{
                      echo 0;
                  }

              }

          }

      }
      //评论展现
      public function showcomment(){
          $sql="select cc.*,g.title,g.tpic from bhs_comment cc inner join bhs_goods g on g.id=cc.goods_id where cc.user_name='{$_COOKIE['username']}'";
           $obj =  new PiModel();
           $arr =$obj->returnarr($sql);
          return $arr;
      }
     //删除评论
      public function delc(){
          if(!empty($_REQUEST['id'])){
              $obj=new PiModel();
              $sql ="delete from bhs_comment where id={$_REQUEST['id']}";
              $bool = $obj->update($sql);
              if($bool){
                  echo 1;
              }else{
                  echo 0;
              }
          }
      }
      //旧密码检测
      public function checkoldpass(){
          if(!empty($_REQUEST['old'])){
              $oldpass  = addslashes($_REQUEST['old']);
              $obj=new PiModel();
              $sql = "select * from bhs_user where username='{$_COOKIE['username']}' and password='{$oldpass}'";
              $arr = $obj->returnarr($sql);
              if(!empty($arr)){
                  echo 1;
              }else{
                  echo 0;
              }

          }
      }
      //上传头像
      public function uploads(){
         if(!empty($_FILES['personpic']['tmp_name'])){
            $obj= new PiModel();
             $str = $obj->uploads();//头像上传路径
             $sql ="select image from bhs_user where username='{$_COOKIE['username']}'";
             $arr = $obj->returnarr($sql);


            if(!empty($arr)){//原来的图片路径
                      unlink($arr[0]['image']);//现删除原来的图片 在执行更新
                      $update="update bhs_user set image='{$str}' where username='{$_COOKIE['username']}'";
                      $bool = $obj->update($update);
                  }

             }else{
                 $insert="insert into  bhs_user image value($str) where username='{$_COOKIE['username']}' ";
                 $bool = $obj->update($insert);
             }
         if($bool){
             echo "<script>alert('上传成功');location.href='?c=pi&a=select'</script>";
          }

         }*/

  }