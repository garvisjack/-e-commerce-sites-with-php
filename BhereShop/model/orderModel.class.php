<?php

class OrderModel {

    /**
     * 正常所有商品分类展示，得到一个数组集合
     * @return array
     */
    public function select($sql){
        $db = Db::getInstance();
        $res = $db->query($sql);
        if(is_resource($res)) {
            $arr = $db->fetchAll($res);
        }
        return $arr;
    }


    public function query($sql){
        $db = Db::getInstance();
        return $db->query($sql);
    }



    /**
     * 用于数据库的模糊查询
     * @return array
     * @param $_POST的值
     */
    public function like($name){
        $arr =  $this->select("select * from bhs_order where order_num like '%".$name."%'");
        return $arr;
    }

    public function work($bool=1,$jump){
        if($bool){
            echo "<script>alert('操作成功!');</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=$jump'>";
        }else{
            echo "<script>alert('操作失败!');</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=$jump'>";
        }
    }
}
