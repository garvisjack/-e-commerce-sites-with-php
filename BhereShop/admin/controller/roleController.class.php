<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/3
 * Time: 20:50
 */
require "./controller/Controller.php";
require './model/roleModel.class.php';
class RoleController extends Controller{

    //下面是select方法，是牵引到前台brand.html;
    public function select(){       //设置一个方法
        $bm = new RoleModel();     //实例化BrandModel，也就是连接到模型
        $arr = $bm->selectPage();   //调用BrandModel模型里面的selectPage方法<-它返回是是一个二维数组，
        $page = $bm->page();//调用BrandModel模型里面的Page方法
        $GLOBALS['smarty']->assign('page', $page);//assgin函数表示传值，前面的page就是在前台使用的对象或者叫数组，后面的$page就是上面一行代码实例化出来的对象
        $GLOBALS['smarty']->assign('arr', $arr);
        $GLOBALS['smarty']->display('role/role.html');//调用brand里面的brand.html模板
    }

    //下面是distribution方法，用于分配权限
    public function distribution(){
        if(empty($_POST)){
             $obj = new RoleModel();
            $arrx = $obj->select("select node_id from bhs_access where role_id={$_GET['id']}");
            if(!empty($arrx)){
                foreach($arrx as $value){
                    $arrz[] = $value['node_id'];
                }
            }else{
                $arrz[] = "";
            }
            $GLOBALS['smarty']->assign('arr',$obj->select("select * from bhs_role where id={$_GET['id']}"));
            $GLOBALS['smarty']->assign('arrz',$arrz);
            $GLOBALS['smarty']->assign('arry',$obj->select("select * from bhs_node"));
            $GLOBALS['smarty']->display('role/role_distribution.html');
        }else{
            $obj = new RoleModel();
            $bool = $obj->distribution();
            if($bool){
                $this->skip('?c=role&a=select',1);
            }else{
                $this->skip('?c=role&a=select',0);
            }
        }
    }



    public function selectadmin(){
            $rm = new RoleModel();
            $arr = $rm->selectadmin();
            if(!empty($arr)){
                $GLOBALS['smarty']->assign('arr',$arr);
            }else{
                $arr = array(
                    array('username'=>"还没有成员",'name'=>'')
                    );
                $GLOBALS['smarty']->assign('arr',$arr);
            }
            $GLOBALS['smarty']->display('role/role_selectadmin.html');

    }


    //下面是添加add方法，其实它没有做业务，只是接待。通俗一点就是跑腿的
    public function add(){  //设置一个方法
        if(empty($_POST)){  //如果前台$_POST传过来是空的，就执行它里面的代码   如果不是就执行else里面的代码
            $obj = new RoleModel();
            $arry = $obj->select("select id,pid,name from bhs_node");
            $arrx = $obj->select("SELECT id FROM `bhs_node` where pid=18");
            if(!empty($arrx)){
                foreach($arrx as $value){
                    $arrq[] = $value['id'];
                }
            }else{
                $arrq[] = "";
            }
            $GLOBALS['smarty']->assign('arrx',$arrq);
            $GLOBALS['smarty']->assign('arry',$arry);
            $GLOBALS['smarty']->assign('arrz',$obj->select("select * from bhs_node where pid={$arry[0]['id']}"));
            $GLOBALS['smarty']->display('role/role_add.html');//调用brand里面的brand_add.html模板
        }else {
            $obj = new RoleModel();   //实例化BrandModel模型给到obj变量
            $bool = $obj->add();    //调用obj也就是BrandModel模型 里面的add方法给到变量bool
          //  $bool2 = $obj->distribution();
            if($bool){      //判断bool变量是否有值，有就执行里面的代码 ；没有就执行else里面的代码
                $this->skip('?c=role&a=select',1);
            }else{
                $this->skip('?c=role&a=select',0);
            }
        }
    }
    
    //search搜索
    public function search(){
        if(!empty($_REQUEST)) {
            $str = $_REQUEST['keywords'];
            $obj = new RoleModel();
            $arr = $obj->select("select * from bhs_role where name like '%$str%' order by id desc limit 0,7");
            $page = $obj->page();
            $GLOBALS['smarty']->assign('page', $page);
            $GLOBALS['smarty']->assign('arr', $arr);
            $GLOBALS['smarty']->display('role/role.html');
        }
    }

    //下面的updata方法，是用来修改的
    public function editor(){
        if(empty($_POST)) { //判断一下是不是空的，是就执行里面的代码，  不是就执行else里面的代码
            $obj = new RoleModel();    //实例化BrandModel模型，通俗点就是连接到BrandModel模型  ；如果不连接怎么做处理呢？
            $arr = $obj->updataselect();//调用obj也就是BrandModel模型里面的updataselect方法<—它是根据ID传过来的那一行记录，变成一个对象
            if (!empty($_GET['id'])) {//判断从brand.html传过来的id是否有值，
                $GLOBALS['smarty']->assign("arr", $arr);    //意思就是把上面$arr对象的值传给前台用的对象 而前台对象的名字就是assgin函数的第一个值；
                $GLOBALS['smarty']->display('role/role_editor.html');//然后调用brand里面的brand_updata.html模板；
            }
        }else{      //已证明post传过来不是空的，就执行eles里面的代码；
            $obj = new RoleModel();    //先连接到BrandModel模型
            $bool = $obj->updata();      //在调用obj里面的updata方法；返回的是一个对象，然后把值给到$arr
            if($bool){                   //判断一下$arr是否有值，有值就修改成功，没有就执行else里的代码；
                $this->skip('?c=role&a=select',1);
            }else{
                $this->skip('?c=role&a=select',0);
            }
        }
    }

    //下面的delete方法，用来做删除的
    public function delete(){
         $obj = new RoleModel();//老套路，还是先连接到模型 方便使用里面的方法
         $bool = $obj->delete("delete from bhs_role where id={$_GET['id']} ");//调用delete方法，返回的是一sql语句是不是正确的，给到bool变量
        if($bool){      //判断bool里面是装的trun 还是false，是trun就执行里面的代码，是false就执行else里面的代码；
            $this->skip('?c=role&a=select',1);

        }else{
            $this->skip('?c=role&a=select',0);
        }
    }

    public function deleteAll(){    //设置一个方法
        if(!empty($_REQUEST['id'])){
          //判断
            $n = 0;
            $arr = $_REQUEST['id'];
            $obj = new RoleModel();
            foreach($arr as $value){
                $sql = "delete from bhs_role where id={$value}";
                $bool = $obj->delete($sql);
                if($bool){
                    $n += 1;
                }else{
                    $n += 0;
                }
            }
            echo $n;
        }
    }
    public function skip($url,$bool){
        if($bool){
            $skip = array(
                'result'=>'成功!',
                'url'=>$url
            );
        }
        else{
            $skip = array(
                'result'=>'失败!',
                'url'=>$url
            );
        }
        $GLOBALS['smarty']->assign("skip",$skip);
        $GLOBALS['smarty']->display("skip/skip.html");
    }

}