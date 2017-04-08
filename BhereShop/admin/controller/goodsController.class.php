<?php
require "./controller/Controller.php";
require './model/goodsModel.class.php';
class GoodsController extends Controller{
    /**
     * 控制器负责调用数据，正确显示的方法,传值给模版引擎
     */
    public function select() {
        $gm = new GoodsModel();
        $arr = $gm->selectPage();  //商品分类名称
        $page = $gm->page();     //分页数据展示，返回字符串
        $cate = $gm->select("select * from bhs_category"); //分类下拉列表
        $brand = $gm->select("select id,name from bhs_brand"); //品牌选择下拉列表
        $GLOBALS['smarty']->assign('arr',$arr);
        $GLOBALS['smarty']->assign('page',$page);
        $GLOBALS['smarty']->assign('cate',$cate);
        $GLOBALS['smarty']->assign('brand',$brand);
        $GLOBALS['smarty']->display("goods/goods_list.html");
    }

    /**
     * 展示添加部分的页面
     */
    public function addPage() {
        $gm = new GoodsModel();
        $cate = $gm->select("select * from bhs_category"); //分类下拉列表
        $type = $gm->select("select * from bhs_type");    //类型下拉列表
        $brand = $gm->select("select id,name from bhs_brand"); //品牌选择下拉列表

        $GLOBALS['smarty']->assign('cate',$cate);
        $GLOBALS['smarty']->assign('type',$type);
        $GLOBALS['smarty']->assign('brand',$brand);
        $GLOBALS['smarty']->display("goods/goods_add.html");
    }



    /**
     * 增加数据
     * @return boolean
     */
    public function add() {
        //商品表的数据添加
        $gm = new goodsModel();
        if (empty($_POST['title'])||empty($_POST['price'])||empty($_POST['cate_id'])) {
            $this->skip('?c=goods&a=select',0);
        }
        else{
            if ($gm->add()) {
                $this->skip('?c=goods&a=select',1);
            }
            else {
                $this->skip('?c=goods&a=select',0);
            }
        }
    }
    /**
     * 删除模版中指定的数据
     * @return boolean
     */
    public function delete(){
        $gm = new goodsModel();
        if(!empty($_GET['id'])) {
            if ($gm->delete($_GET['id'])) {
                $this->skip('?c=goods&a=select',1);
            } else {
                $this->skip('?c=goods&a=select',0);
            }
        }
        else{
            $this->skip('?c=goods&a=select',0);
        }
    }

    /**
     *  用于ajax处理，通过所选的类型得到对应的属性列表，并在前台展示出来
     */
    public function getAttr(){
        if(!empty($_REQUEST)) {
            $gm = new goodsModel();
            $arr = $gm->select("select * from bhs_attr where type_id={$_REQUEST['type']}");
            if(!empty($arr)){
                echo json_encode($arr,JSON_UNESCAPED_UNICODE);
            }else{
                echo 0;
            }
        }

    }

    /**
     * ajax添加商品分类
     */
    public function addCate(){
        if(!empty($_REQUEST)) {
            $gm = new GoodsModel();
            $boolData = $gm->query("insert into bhs_category values(null,'{$_REQUEST['name']}','{$_REQUEST['pid']}',1,'{$_REQUEST['name']}')");

            if($boolData){
                $arr = $gm->select("select * from bhs_category where name='{$_REQUEST['name']}'");
                echo json_encode($arr,JSON_UNESCAPED_UNICODE);
            }else{
                echo 0;
            }
        }
    }
    /**
     * 编辑页面的展示
     * @return 展示内容
     */
    public function editor() {
        $gm = new goodsModel();
        if(!empty($_GET['id'])) {
            //分类下拉列表，商品对应的分类ID外键
            $cate = $gm->select("select * from bhs_category");
            $GLOBALS['smarty']->assign('cate',$cate);
            //商品类型的联立选择
            $type = $gm->select("select * from bhs_type");
            $GLOBALS['smarty']->assign('type',$type);
            //商品品牌的联立选择
            $brand= $gm->select("select id,name from bhs_brand");
            $GLOBALS['smarty']->assign('brand',$brand);
            //文章类型的联立选择
            $article_type= $gm->select("select * from bhs_article_type");
            $GLOBALS['smarty']->assign('article_type',$article_type);
            //商品属性的联立选择
            $attr= $gm->select("SELECT a.id,a.attr from bhs_goods g INNER JOIN bhs_type t on g.type_id=t.id
INNER JOIN bhs_attr a on t.id=a.type_id where g.id=".$_GET['id']);
            $GLOBALS['smarty']->assign('attr',$attr);
            //该商品对应属性的属性值的联立选择
            $bhs_value= $gm->select("select * from bhs_value where goods_id=".$_GET['id']);
              /*  if(empty($bhs_value)){
                    $bhs_value = array(array());//空数组
                }*/
            $GLOBALS['smarty']->assign('bhs_value', $bhs_value);
            //对应ID的商品数据
            $arr = $gm->editor($_GET['id']);
            $GLOBALS['smarty']->assign('arr',$arr);

            $GLOBALS['smarty']->display("goods/goods_editor.html");
        }
    }


    /**
     * 用于ajax操作批量删除
     */
    public function deleteAll(){
        $n = 0;
        if (!empty($_REQUEST)&&!empty($_REQUEST['id'])) {
            $gm = new GoodsModel();
            //遍历删除传值过来的数组
            foreach($_REQUEST['id'] as $val){
                if ($gm->delete($val)) {
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
        $gm = new goodsModel();
        if(!empty($_POST)) {
            if ($gm->update()) {
                $this->skip('?c=goods&a=select',1);
            } else {
                $this->skip('?c=goods&a=select',0);
            }
        }
        else{
            $this->skip('?c=goods&a=select',0);
        }
    }
    /**
     * 数据模糊查询 用于搜索关键字，修改分类名称
     * @return boolean
     */
    public function like(){
        $gm = new goodsModel();
        if(!empty($_POST['search'])){
            $arr = $gm->like($_POST['search']);
            if(is_resource($arr)) {
                foreach ($arr as $value) {
                    if ($id = $value['id']) {
                        echo "<script>location.href='?c=goods&a=editor&id={$id}';</script>";
                    } else {
                        $this->skip('?c=goods&a=select',0);
                    }
                }
            }
            else{
                $this->skip('?c=goods&a=select',0);
            }
        }
        else{
            $this->skip('?c=goods&a=select',0);

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