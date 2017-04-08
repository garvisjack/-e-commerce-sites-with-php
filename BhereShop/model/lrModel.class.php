<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/11
 * Time: 16:43
 */
   class LrModel{
       //数据库操作
       public function handle($sql){
           $obj = Db::getInstance();
           return $obj ->query($sql);
       }
       //根据资源返回数组
       public function fetcharr($res){
           $obj = Db::getInstance();
           return $obj->fetchAll($res);
       }
   }