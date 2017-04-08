<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-3-7
 * Time: 上午11:25
 */
class ArticleModel
{
    public function select($sql)
    {
        $resData= Db::getInstance()->query($sql);
        $arr = Db::getInstance()->fetchAll($resData);
        if(!empty($arr)){
            return $arr;
        }else{
            return false;
        }

    }

    public function add()
    {
        $con = addslashes($_POST['con']);
        $type_id = addslashes($_POST['type']);
        $isshow = addslashes($_POST['isshow']);
        $boolData= Db::getInstance()->query("insert into bhs_article value(null,'{$con}',{$type_id},'{$isshow}',now())");
        if($boolData){
            return true;
        }else{
            return false;
        }
    }

    public function update()
    {
        $con = addslashes($_POST['con']);
        $type_id = addslashes($_POST['type']);
        $isshow = addslashes($_POST['isshow']);
        $addtime = date('Y-m-d,H:m:s');
        $boolData= Db::getInstance()->query("update bhs_article set con='{$con}',type_id='{$type_id}',isshow='{$isshow}',addtime='{$addtime}' where id='{$_POST['id']}'");
        if($boolData){
            return true;
        }else{
            return false;
        }
    }
    public function selectPage(){//返回一个带查询条件的数组；
        $total = $this->getTotal();
        $pg = new Page($total,10);
        $arr = $this->select("select * from bhs_article order by id desc limit ".$pg->limitpage.",".$pg->show);
        if(!empty($arr)){
            return $arr;
        }
    }
    public function getTotal(){
        $db = Db::getInstance();
        $count = $db->query("select count(*) total from bhs_article");
        if (!empty($count)) {
            $arrCount = mysql_fetch_assoc($count);
            $total = $arrCount['total'];
        }
        return $total;//求出表总记录数，
    }
    public function page(){//输出字符
        $total = $this->getTotal();
        $pg = new Page($total,7);
        $pageData = $pg->showPage("&c=article&a=select"); //字符串
        return $pageData;

    }
    public function delete($id=null){
        if(!empty($id)&&is_numeric($id)){
           return Db::getInstance()->query("delete from bhs_article where id={$id}");
        }else{
            return false;
        }
    }
    public function deleteall($sql){

           return Db::getInstance()->query($sql);
    }
}