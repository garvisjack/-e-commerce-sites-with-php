<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/3
 * Time: 20:50
 */
require "./controller/Controller.php";
require './model/nodeModel.class.php';
class NodeController extends Controller{

    //下面是select方法，是牵引到前台brand.html;
    public function select(){
        $bm = new NodeModel();
        $arr = $bm->selectPage();
        $page = $bm->page();
        $GLOBALS['smarty']->assign('page', $page);
        $GLOBALS['smarty']->assign('arr', $arr);
        $GLOBALS['smarty']->display('node/node.html');
        }

    //下面是添加add方法，其实它没有做业务，只是接待。通俗一点就是跑腿的
    public function add(){
        if(empty($_POST)){
            $bm = new NodeModel();
            $GLOBALS['smarty']->assign('arr',$bm->select('select * from bhs_node'));
            $GLOBALS['smarty']->display('node/node_add.html');
        }
        else {
            $obj = new NodeModel();
            $bool = $obj->add();
                if($bool){
                    $this->skip('?c=node&a=select',1);
                }else{
                    $this->skip('?c=node&a=select',0);
                }
        }
    }
    
    //search搜索
    public function search(){
        if(!empty($_REQUEST)) {
            $str = $_REQUEST['keywords'];
            $obj = new NodeModel();
            $arr = $obj->select("select * from bhs_node where name like '%$str%' order by id desc limit 0,7");
            $page = $obj->page();
            $GLOBALS['smarty']->assign('page', $page);
            $GLOBALS['smarty']->assign('arr', $arr);
            $GLOBALS['smarty']->display('node/node.html');
        }
    }

    //下面的editor方法，是用来修改的
    public function editor(){
        if(empty($_POST)) {
            $obj = new NodeModel();
            $arr = $obj->updataselect();
            $GLOBALS['smarty']->assign("arr", $arr);
            $arrx = $obj->select("select * from bhs_node");
            $GLOBALS['smarty']->assign("arrx", $arrx);
            $GLOBALS['smarty']->display('node/node_editor.html');
        }else{
            $obj = new NodeModel();
            $bool = $obj->updata();
            if($bool){
                $this->skip('?c=node&a=select',1);
            }else{
                $this->skip('?c=node&a=select',0);
            }
        }
    }

    //下面的delete方法，用来做删除的
    public function delete(){
         $obj = new NodeModel();
         $bool = $obj->delete("delete from bhs_node where id={$_GET['id']} ");
        if($bool){
            $this->skip('?c=node&a=select',1);

        }else{
            $this->skip('?c=node&a=select',0);
        }
    }

    //全选删除，遍历删除
    public function deleteAll(){
        if(!empty($_REQUEST['id'])){
          //判断
            $n = 0;
            $arr = $_REQUEST['id'];
            $obj = new NodeModel();
            foreach($arr as $value){
                $sql = "delete from bhs_node where id={$value}";
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