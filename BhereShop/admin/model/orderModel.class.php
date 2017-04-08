<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/7
 * Time: 12:44
 */
    class OrderModel{
        public function select($sql){
            $obj =Db::getInstance();
            $res = $obj->query($sql);
            $arr = $obj->fetchAll($res);
            return $arr;
        }
        public function editor(){
            $obj =Db::getInstance();
            $addr = $_POST['picker']."/".$_POST['addr'];
            $sql="update bhs_order set receiver_addr='{$addr}' where id={$_POST['id']}";
            return $res = $obj->query($sql);
        }
        public function delete($id){
            $obj =Db::getInstance();
            $sql="delete from bhs_order where order_num={$id}";
            return $obj->query($sql);
        }

        public function query($sql){
            $obj = Db::getInstance();
            return $obj->query($sql);
        }
    }