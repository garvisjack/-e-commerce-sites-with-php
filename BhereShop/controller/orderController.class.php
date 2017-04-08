<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14
 * Time: 12:07
 */
  require './model/carModel.class.php';
 class CarController
 {
     //获取商品存入session
     public function select(){
         if(!empty($_GET['id'])&&!empty($_GET['num'])){
             $id = $_GET['id'];
             $num = $_GET['num'];
             $obj = new CarModel();
             $sql = "select id,title,tpic,price from bhs_goods where id={$id}";
             $arr = $obj->returnarr($sql)[0];//商品基本信息
             $arr['num']=(int)$num;//商品数量
             $arr['sum']=$arr['num']*$arr['price'];//小计
              $obj->addcar($arr);//添加入session
             //unset($_SESSION['shopcar']);
             //var_dump($obj->addcar($arr));
             //var_dump($_SESSION['shopcar']);
             header("Location:?c=car&a=show");
         }else{
             return false;
         }
         }


   //将存入的数组在页面展示出来
     public function show(){
         if(!empty($_SESSION['shopcar'])){
             $sum = $this->sum();
             $GLOBALS['smarty']->assign("sum",$sum);
             $GLOBALS['smarty']->assign("arr",$_SESSION['shopcar']);//session数组
             $GLOBALS['smarty']->display("car/car.html");
         }else{
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