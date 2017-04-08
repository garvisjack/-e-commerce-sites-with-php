<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/4
 * Time: 10:59
 */
   class TypeModel{
       //将商品类型查出返回数组
       public function select($sql){
         $obj = Db::getInstance();

           $res =  $obj->query($sql);
           $arr = $obj->fetchAll($res);
           return $arr;
       }
       //属性数
      public function countattr(){
          //检测

          $sql = "select * from bhs_type";
          $arr = $this->select($sql);//检测类型是否有数组
          rsort($arr);
          foreach($arr as $value){
              $arrx[]= "select count(attr) from bhs_attr where type_id ={$value['id']} ";//sql语句
              }

          $obj = Db::getInstance();
          foreach($arrx as $val){
              $arry[] = $obj->query($val);//结果集
          }
          foreach($arry as $v){
              $arrd[] = $obj->fetchAll($v);//返回三维数组
          }
          foreach($arrd as $x){
              foreach($x as $z){
                  foreach($z as $g){
                     $arrg[] = $g;//遍历三次 提取里面的值
                 }
             }
          }
          return $arrg;
      }
            // 添加商品类型
       public function addtype(){
           $obj = Db::getInstance();
           $type = htmlentities(addslashes($_POST['type']));
           $sql = "insert into bhs_type values('null','{$type}')";
           $res = $obj->query($sql);//先将类型入库
           return $res;
       }

       //修改商品类型
       public function editor(){
           $obj = Db::getInstance();
           $type = htmlentities(addslashes($_POST['type']));
           $sql = "update bhs_type set type='{$type}' where id={$_POST['id']}";
           return $obj->query($sql);
       }
       //删除商品类型
       public function delete()
       {
           //检测类型是否有属性 有的话就不能删
           $obj = Db::getInstance();
           $sql = "select count(a.attr) sum from bhs_type t inner join bhs_attr a on a.type_id=t.id where t.id ={$_GET['id']}";//属性数
           $res = $obj->query($sql);
           $arr = $obj->fetchAll($res);
           if ($arr[0]['sum'] != 0) {
               return false;
           } else {
               $sql1 = "delete from bhs_type where id={$_GET['id']}";
               return $obj->query($sql1);
           }
       }
       public function deleteall($sql1,$sql2){
           $obj = Db::getInstance();
           $res = $obj->query($sql2);
           $arr = $obj->fetchAll($res);
           if ($arr[0]['sum'] != 0) {
               return false;
           } else {
               return $obj->query($sql1);
           }
           }

   }