<?php
/**
 * Created by PhpStorm.
 * User: EDUASK
 * Date: 2017/3/4
 * Time: 13:42
 */class CategoryModel{
    /**
     * @return array|bool  返回的是 经过分页处理的数组
     */
    public function selectPage(){
        $total = $this->getTotal();
        $pg = new Page($total,7);
        $arr = $this->select("select * from bhs_category order by id desc limit ".$pg->limitpage.",".$pg->show);
        if(!empty($arr)){
            return $arr;
        }
    }
    public function selectPage1($ppo){
        $total = $this->getTotal();
        $pg = new Page($total,7);
        $arr = $this->select("select * from bhs_category where concat(name) LIKE '%$ppo%' order by id desc limit ".$pg->limitpage.",".$pg->show);
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
        $name = addslashes($_POST['name']);
        $type_name = addslashes($_POST['type_name']);
        $isnav = addslashes($_POST['isnav']);
        $boolData= Db::getInstance()->query("insert into bhs_category value(null,'{$name}','{$_POST['pid']}','{$isnav}','{$type_name}')");
        if($boolData){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id=null){
        if(!empty($id)&&is_numeric($id)){
            if($this->check($id)){
                echo "<script>alert('有子类商品不能删！');location.href='?c=category&a=select'</script>";
                 return false;
            }else{
                return Db::getInstance()->query("delete from bhs_category where id={$id}");
            }
        }else{
            return false;
        }
    }
    public function check($id=null){
        $arr = $this->select("select * from bhs_category");
        foreach($arr as $value){
            if($value['pid']==$id){
                 return true;
                break;
            }
        }
               return false;
    }
    public function deleteall($sql){

        return Db::getInstance()->query($sql);
    }
    public function update(){
        $name = addslashes($_POST['name']);
        $type_name = addslashes($_POST['type_name']);
        $isnav = addslashes($_POST['isnav']);
        $boolData= Db::getInstance()->query("update bhs_category set name='{$name}',pid='{$_POST['pid']}',isnav='{$isnav}',type_name='{$type_name}' where id={$_POST['id']}");
        if($boolData){
            return true;
        }else{
            return false;
        }
    }
    public function getTotal(){
        $db = Db::getInstance();
        $count = $db->query("select count(*) total from bhs_category");
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
        $pageData = $pg->showPage("&c=category&a=select"); //字符串
        return $pageData;

    }
    public function __call($fn,$param){
            exit ("no this method.");
    }
}