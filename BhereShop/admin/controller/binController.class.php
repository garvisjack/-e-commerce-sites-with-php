<?php
require "./controller/Controller.php";
require './model/binModel.class.php';
class BinController extends Controller{
    /**
     * 控制器负责调用数据，正确显示的方法,传值给模版引擎
     */
    public function select() {
        $bm = new binModel();
        $arr = $bm->selectPage();  //商品分类名称
        $page = $bm->page();     //分页数据展示，返回字符串
        $GLOBALS['smarty']->assign('arr',$arr);
        $GLOBALS['smarty']->assign('page',$page);
        $GLOBALS['smarty']->display("bin/bin.html");
    }



    /**
     * 删除模版中指定的数据
     * @return boolean
     */
    public  function delete(){
        $bm = new binModel();
        if(!empty($_GET['id'])) {
            if ($bm->delete($_GET['id'])) {
                $this->skip('?c=bin&a=select',1);
            } else {
                $this->skip('?c=bin&a=select',0);
            }
        }
        else{
            $this->skip('?c=bin&a=select',0);
        }
    }

    /**
     * 用于ajax操作批量删除
     */
    public function deleteAll(){
        $n = 0;
        if (!empty($_REQUEST)&&!empty($_REQUEST['id'])) {
            $bm = new BinModel();
            //遍历删除传值过来的数组
            foreach($_REQUEST['id'] as $val){
                if ($bm->delete($val)) {
                    $n += 0;
                } else {
                    $n += 1;
                }
            }
            echo $n;

        }
    }
    /**
     * 更新商品分类
     * @return boolean
     */
    public function update(){
        $bm = new binModel();
        if(!empty($_GET['id'])) {
            if ($bm->update($_GET['id'])) {
                $this->skip('?c=bin&a=select',1);
            } else {
                $this->skip('?c=bin&a=select',0);
            }
        }
        else{
            $this->skip('?c=bin&a=select',0);

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