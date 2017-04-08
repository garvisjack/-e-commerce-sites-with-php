<?php

class GoodsModel {
    /**
     * 使用Db对象查询数据库数据
     * @return [数据数组]
     **/
    public function selectPage(){
        //求的分页的总页数,自定义显示条数
        $total = $this->getTotal();
        $page = new Page($total,8);//实例化分页类，和查询功能结合起来
        $data = 'id,title,artnum,price,isshelve,isnew,ishot,issale,isrcm,sort,num,addtime,mpic';
        $sql = "select ".$data." from bhs_goods where cate_id={$_REQUEST['cateid']} and isshelve=1 order by id desc limit ".$page->limitpage.",".$page->show;
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
            return $db->fetchAll($res);
        }
    }

    //下面方法是用来记录goods表里的总记录数
    public function getTotal(){
        $db = Db::getInstance();    //先调用Db类 给到变量db
        @$count = $db->query("select count(*) total from bhs_goods where cate_id={$_REQUEST['cateid']}");//选取brand表里的所有记录，倒叙，count函数是总记录数，order by id desc表示根据id倒叙 返回资源
        if(!empty($count)) {    //判断一下变量brandRes是不是资源集，如果是就执行里面的代码
            $arrcount = $db->fetchAll($count);    //在调用变量db里面的fetchAll方法将 资源brandRes转换成二维数组给到$arr
            $total = $arrcount[0]['total'];
        }
        return @$total;
    }

    public function page(){
        $total = $this->getTotal();
        $page = new Page($total,8);            //实例化分页类
        $pageData = $page->showPage('&c=filter&a=index');
        return $pageData;
    }

    public function query($sql){
        $db = Db::getInstance();
        return $db->query($sql);
    }
    /**
     * 分页数据的准备
     * @return [string]
     */

    /**
     * 用于数据库的模糊查询
     * @return array
     * @param $_POST的值
     */
    public function like($name){
        $arr =  $this->select("select * from bhs_goods where isdelete=0 and title like '%".$name."%'");
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
    public function article($data){//把二维数组加工成一位数组
        foreach($data as $value){
            $arr[$value['type']][] = $value['con'];
        }return $arr;
    }
}
