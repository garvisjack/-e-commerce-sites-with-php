<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-3-7
 * Time: 上午11:25
 */
class ArticletypeModel{
    public function selectPage(){
        $total = $this->getTotal();
        $pg = new Page($total,10);
        $arr = $this->select("select * from bhs_article_type order by id desc limit ".$pg->limitpage.",".$pg->show);
        if(!empty($arr)){
            return $arr;
        }
    }

    public function select($sql){
        $resData= Db::getInstance()->query($sql);
        $arr = Db::getInstance()->fetchAll($resData);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }
    }
    public function add(){
        $type = addslashes($_POST['type']);
        $boolData= Db::getInstance()->query("insert into bhs_article_type value(null,'{$type}')");
        if($boolData){
            return true;
        }else{
            return false;
        }
    }
    public function update(){
        $type = addslashes($_POST['type']);

        $boolData= Db::getInstance()->query("update bhs_article_type set type='{$type}' where id='{$_POST['id']}'");
        if($boolData){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id=null){
        if(!empty($id)&&is_numeric($id)){
            return Db::getInstance()->query("delete from bhs_article_type where id={$id}");
        }else{
            return false;
        }
    }
    public function deleteall($sql){
        return Db::getInstance()->query($sql);
    }
    public function getTotal(){
        $db = Db::getInstance();
        $count = $db->query("select count(*) total from bhs_article_type");
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
        $pageData = $pg->showPage("&c=articletype&a=select"); //字符串
        return $pageData;

    }
    public function __call($fn,$param){
        exit ("no this method.");
    }


}