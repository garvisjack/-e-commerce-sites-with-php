<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/12
 * Time: 11:43
 */
 class PiModel{
     //请求数据库 返回数组
     public function returnarr($sql){
         $obj = Db::getInstance();
         $res = $obj->query($sql);
         return $obj->fetchAll($res);
     }
     //更新用户数据
     public function update($sql){
         $obj = Db::getInstance();
        return  $res = $obj->query($sql);
     }
     //用户头像上传模型
     public function uploads(){
         $up = new Upload("./public/uploads/user-img/");
         $up->sc($_FILES['personpic']);
         $arrz = $up->getLastFile();
         return $descr_pic = implode(",",$arrz);
     }
 }