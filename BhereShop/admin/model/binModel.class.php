<?php

class BinModel {
    /**
     * 使用Db对象查询数据库数据
     * @return [数据数组]
     **/
    public function selectPage(){
        //求的分页的总页数,自定义显示条数
        $total = $this->getTotal();
        $page = new Page($total,7);//实例化分页类，和查询功能结合起来
        $data = 'id,title,artnum,price';
        $sql = "select ".$data." from bhs_goods where isdelete=1 order by id desc limit ".$page->limitpage.",".$page->show;
        $arr = $this->select($sql);
        return $arr;
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


    /**
     * 删除指定商品分类数据
     * @return [boolean]
     */
    public function delete($id) {
        $db = Db::getInstance();

            $boolData = $db->query("delete from bhs_goods where isdelete=1 and id={$id}");
            if ($boolData) {
                return true;
            } else {
                return false;
            }
    }

    /**
     * 还原指定商品分类数据
     * @return [boolean]
     */
    public function update($id){
        $db = Db::getInstance();
        $boolData = $db->query("update bhs_goods set isdelete=0 where id={$id}");
        if($boolData){
            return true;
        }else{
            return false;
        }
    }
    public function getTotal(){
        $db = Db::getInstance();
        $count = $db->query("select count(*) total from bhs_goods where isdelete=1");
        if (is_resource($count)) {
            $arrCount = mysql_fetch_assoc($count);
            $total = $arrCount['total'];
        }
        return $total;
    }
    /**
     * 分页数据的准备
     * @return [string]
     */
    public function page(){
        $total = $this->getTotal();
        $page = new Page($total,6);            //实例化分页类
        $pageData = $page->showPage('&c=bin&a=select');
        return $pageData;
    }
    /**
     * 用于数据库的模糊查询
     * @return array
     * @param $_POST的值
     */
    public function like($name){
        $arr =  $this->select("select * from bhs_goods where isdelete=1 and title like '%".$name."%'");
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
