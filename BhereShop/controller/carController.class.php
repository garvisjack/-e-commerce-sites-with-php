<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14
 * Time: 12:07
 */
 	require './model/carModel.class.php';
 	require './model/goodsModel.class.php';
 class CarController
 {
     //获取商品存入session 直接结算
     public function select(){
         if(!empty($_GET['id'])&&!empty($_GET['num'])){
             $id = $_GET['id'];
             $num = $_GET['num'];
             $obj = new CarModel();
             $sql = "select id,title,tpic,price,mkt_price from bhs_goods where id={$id}";
             $arr = $obj->returnarr($sql)[0];//商品基本信息
             $arr['num']=(int)$num;//商品数量
             $obj->addcar($arr);//添加入session
             header("Location:?c=car&a=show");
         }else{
             return false;
         }
         }
  //加入购物车
     public function addcar(){
         if(!empty($_REQUEST['id1'])&&!empty($_REQUEST['num1'])){
               $id = $_GET['id1'];
               $num = $_GET['num1'];
               $obj = new CarModel();
               $sql = "select id,title,tpic,price,mkt_price from bhs_goods where id={$id}";
               $arr = $obj->returnarr($sql)[0];//商品基本信息
               $arr['num']=(int)$num;//商品数量
               $obj->addcar($arr);//添加入session
               $_SESSION['num']=count($_SESSION['shopcar']);
               echo  json_encode(count($_SESSION['shopcar']));
         }else{
             return false;
         }
     }
   //将存入的数组在页面展示出来
     public function show(){
         if(!empty($_SESSION['shopcar'])){
             $sum = $this->sum();
             //页面底部文章展示；
             $cm = new GoodsModel();
             $article = $cm->select("select a.*,ar.type from bhs_article a INNER JOIN bhs_article_type ar on a.type_id=ar.id");
             $article = $cm->article($article);
             $GLOBALS['smarty']->assign("article",$article);
             $GLOBALS['smarty']->assign("sum",$sum);
             $GLOBALS['smarty']->assign("arr",$_SESSION['shopcar']);//session数组
              if(isset($_COOKIE['username'])){
             $GLOBALS['smarty']->assign("user",$_COOKIE['username']);
           }else{
           	 $GLOBALS['smarty']->assign("user","");
           	}   
           	$GLOBALS['smarty']->display("car/car.html");      
         }else{
             //页面底部文章展示；
             $cm = new GoodsModel();
             $article = $cm->select("select a.*,ar.type from bhs_article a INNER JOIN bhs_article_type ar on a.type_id=ar.id");
             $article = $cm->article($article);
             if(isset($_COOKIE['username'])){
             $GLOBALS['smarty']->assign("user",$_COOKIE['username']);
           }else{
           	 $GLOBALS['smarty']->assign("user","");
           	}
             $GLOBALS['smarty']->assign("article",$article);
             $GLOBALS['smarty']->display("car/car1.html");
         }

     }


     //加商品
   public function add(){
       if (!empty($_REQUEST['add'])) {
           $obj = new CarModel();
           $obj->add($_REQUEST['add']);
              foreach($_SESSION['shopcar'] as $value ){
                    if($value['id']==$_REQUEST['add']){

                         $arr[] = $value['num'];//数量
                         $arr[] = $value['price']*$value['num'];//小计
                         $arr[] = $this->sum();
                        break;
                    }
              }
                 echo json_encode($arr);
       }
   }
     //减商品
     public function minus(){
       if(!empty($_REQUEST['minus'])){
           $obj = new CarModel();
           $obj->minus($_REQUEST['minus']);
           foreach($_SESSION['shopcar'] as $key=>$value){
               if($value['id']==$_REQUEST['minus']){

                       $arr[]= $value['num'];//数量
                       $arr[]=$value['num']*$value['price'];//小计
                       $arr[] = $this->sum();
                       break;
               }

           }
           echo json_encode($arr);
       }

     }

     //删除
     public function del(){
        if(!empty($_GET['del'])) {
            $obj = new CarModel();
            $obj->delete($_GET['del']);
            if (!empty($_SESSION['shopcar'])) {//
                echo 1;//session 还有数组
            } else {
                echo 0;//已经删光数组
                $_SESSION['num']=0;
            }
        }
     }
     //批量删除
     function delselect(){
         if(!empty($_REQUEST['id'])){
             $arr = $_REQUEST['id'];
             $obj = new CarModel();
             foreach($arr as $value){
                 $bool = $obj->delete($value);
             }
             if($bool){
                 echo 1;
             }else{
                 echo 0;
             }
             
             if (empty($_SESSION['shopcar'])) {//
                 $_SESSION['num']=0;
             }else{
             	$_SESSION['num']=count($_SESSION['shopcar']);
             	}





         }
     }
     //总价
     public function sum(){
         foreach($_SESSION['shopcar'] as $value){
             $arr[]=$value['price']*$value['num'];//拿到所有小计

         }
         $sum = array_sum($arr);
         return $sum;
     }
 }