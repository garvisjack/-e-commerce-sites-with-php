<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14
 * Time: 12:08
 */
 class CarModel{
     //根据ID查出对应商品
   public function returnarr($sql){
      $obj =  Db::getInstance();
       $res = $obj->query($sql);
       $arr = $obj->fetchAll($res);
       return $arr;
   }
     //加入购物车
     public function addcar($arr){
         $car = new Cart;
         return $car ->addItem($arr);
     }
     public function add($id){
         $car = new Cart;
        return $car->changeNum($id,true);//加数量

     }
     public function minus($id){
         $car = new Cart;
         return $car->changeNum($id,false);//减数量
     }
     public function delete($id){
         $car = new Cart();
         return $car->deleteItem($id);
     }
 }