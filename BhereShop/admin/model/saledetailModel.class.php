<?php
/**
 * Created by PhpStorm.
 * User: EDUASK
 * Date: 2017/3/19
 * Time: 14:02
 */
class SaledetailModel{
    public function selectPage(){
        $total = $this->getTotal();
        $pg = new Page($total,7);  
        $arr = $this->select("select id,title,price,num from bhs_goods where isshelve=1 limit ".$pg->limitpage.",".$pg->show);
        if(!empty($arr)){
            return $arr;
        }
    }
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
   


    public function getTotal(){
        $db = Db::getInstance();
        $count = $db->query("select count(*) total from bhs_goods");
        if (!empty($count)) {
            $arrCount = mysql_fetch_assoc($count);
            $total = $arrCount['total'];
        }
        return $total;//求出表总记录数，
    }

    /**
     * @param $total  返回一个分页的字符串，用于前台显示
     */
    public function page(){
        $total = $this->getTotal();
        $pg = new Page($total,7);
        $pageData = $pg->showPage("&c=saledetail&a=select"); //字符串
        return $pageData;

    }
    
    public function query($sql){
        $db = Db::getInstance();
        return $db->query($sql);
    }
    public function __call($fn,$param){
        exit ("no this method.");
    }
}