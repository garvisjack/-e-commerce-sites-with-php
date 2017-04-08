<?php

class AdminModel{
    /**
     * @param $sql
     * @return array|bool 用于提取数组集合
     */
    public function select($sql){
        $resData = Db::getInstance()->query($sql);
        $arr = Db::getInstance()->fetchAll($resData);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }

    /**
     * @param null $sql
     * @return bool 用于增删改返回布尔值
     */
    public function query($sql=null){
            $boolData = Db::getInstance()->query($sql);
            if($boolData){
                return true;
            }else{
                return false;
            }
    }
}