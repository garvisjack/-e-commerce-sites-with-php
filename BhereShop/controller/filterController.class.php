<?php


require './model/goodsModel.class.php';
require'./libs/Pagey.class.php';
class FilterController{
    public function index(){
        $fm = new GoodsModel();
         /*$GLOBALS['smarty']->caching = true;
        $GLOBALS['smarty']->cache_lifetime = 600;
        $url=md5($_SERVER['REQUEST_URI']);//将当前页面的URL(包含?后面的所有参数)进行md5加密*/
        if(!empty($_GET['cateid'])) {
            @$GLOBALS['smarty']->assign("user", $_COOKIE['username']);
            $id = $_GET['cateid'];
            //所属分类
            $goods = $fm->select("select id,title,price,mkt_price,vip_price,spic,type_id from bhs_goods where cate_id={$id} and isshelve=1");
            if($goods){
                $typeid = $goods[0]['type_id'];
            }else{
                $typeid = "";
            }
 					
            //商品分类的div展示
            //筛选类型
            $sql_t = "select t.* from bhs_goods g inner join bhs_type t on g.type_id=t.id where g.cate_id={$id}";
            $type = $fm->select($sql_t);
            @$GLOBALS['smarty']->assign("type", $type);
            $GLOBALS['smarty']->assign("id", $id);

            //品牌
            $sql_b = "select b.pic from bhs_goods g inner join bhs_brand b on g.brand_id=b.id where g.cate_id={$id} GROUP by b.pic";
            $brand = $fm->select($sql_b);
            @$GLOBALS['smarty']->assign("brand", $brand);

            //主页底部文章展示
            $article = $fm->select("select a.*,ar.type from bhs_article a INNER JOIN bhs_article_type ar on a.type_id=ar.id");
            $article = $fm->article($article);
            $GLOBALS['smarty']->assign("article",$article);

            //筛选页属性
            $sql_a = "select a.* from bhs_type t inner join bhs_attr a on t.id=a.type_id inner join bhs_value v on a.id=v.attr_id where t.id={$typeid} GROUP BY attr limit 0,5";
            $attr = $fm->select($sql_a);
            @$GLOBALS['smarty']->assign("attr", $attr);


            //筛选页属性值
            $sql_v = "select v.* from bhs_type t inner join bhs_attr a on t.id=a.type_id inner join bhs_value v on a.id=v.attr_id where t.id={$typeid} group by v.value";
            $values = $fm->select($sql_v);
            @$GLOBALS['smarty']->assign("values", $values);

            //商品
            $goodstype = $fm->selectPage();
            @$GLOBALS['smarty']->assign("goodstype", $goodstype);
            
            //猜你喜欢商品
            $rand = mt_rand(0,9);
            $goodsguess = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 limit $rand,4");
            @$GLOBALS['smarty']->assign("goodsguess", $goodsguess);

            //分页
            $page = $fm->page();
            $GLOBALS['smarty']->assign("page", $page);
            @$GLOBALS['smarty']->assign("cateid", $id);

          
             //购物车
		          if(!isset($_SESSION['shopcar'])||empty($_SESSION['shopcar'])){
		        	$GLOBALS['smarty']->assign("shopcar","");
		        }else{
		        		$GLOBALS['smarty']->assign("shopcar",$_SESSION['shopcar']);
		        }
		        //购物车商品数量
		        if(isset($_SESSION['num'])){
		                    $GLOBALS['smarty']->assign('num',$_SESSION['num']);
		                }else{
		                    $GLOBALS['smarty']->assign('num',0);
		                }

        
            
            
	            //数据库取数据
	            @$GLOBALS['smarty']->display("filter/filter.html");
	        		
            }
    }
    
    //首页search商品搜索
    public function search(){
        $fm = new GoodsModel();
        if(!empty($_POST['search'])) {
            //匹配
            $search = htmlentities(addslashes($_POST['search']));
            $goods = $fm->select("select id,title,cate_id,type_id,keyword,short_descr,remark from bhs_goods where isshelve=1 and concat(id,title,keyword,short_descr,remark) like '%$search%'");
            if($goods){
                $num = count($goods);
                $index = mt_rand(0,$num-1);
                $id = $goods[$index]['cate_id'];
                $typeid = $goods[$index]['type_id'];
            }else{
                echo "<script>location.href='?c=filter&a=error'</script>";
            }

            //商品分类的div展示
            //筛选类型
            $sql_t = "select t.* from bhs_goods g inner join bhs_type t on g.type_id=t.id where g.cate_id={$id}";
            $type = $fm->select($sql_t);
            @$GLOBALS['smarty']->assign("type", $type);
            $GLOBALS['smarty']->assign("id", $id);

            //品牌
            $sql_b = "select b.pic from bhs_goods g inner join bhs_brand b on g.brand_id=b.id where g.cate_id={$id} GROUP by b.pic";
            $brand = $fm->select($sql_b);
            @$GLOBALS['smarty']->assign("brand", $brand);

            //主页底部文章展示
            $article = $fm->select("select a.*,ar.type from bhs_article a INNER JOIN bhs_article_type ar on a.type_id=ar.id");
            $article = $fm->article($article);
            $GLOBALS['smarty']->assign("article",$article);

            //筛选页属性
            $sql_a = "select a.* from bhs_type t inner join bhs_attr a on t.id=a.type_id inner join bhs_value v on a.id=v.attr_id where t.id={$typeid} GROUP BY attr limit 0,5";
            $attr = $fm->select($sql_a);
            @$GLOBALS['smarty']->assign("attr", $attr);


            //筛选页属性值
            $sql_v = "select v.* from bhs_type t inner join bhs_attr a on t.id=a.type_id inner join bhs_value v on a.id=v.attr_id where t.id={$typeid} group by v.value limit 0,8";
            $values = $fm->select($sql_v);
            @$GLOBALS['smarty']->assign("values", $values);

            //商品
            $sql_g = "select id,title,price,mpic from bhs_goods where cate_id={$id} and isshelve=1 limit 0,8";
            $goodstype = $fm->select($sql_g);
            if($goodstype){
                @$GLOBALS['smarty']->assign("goodstype", $goodstype);
            }else{
                echo "<script>location.href='?c=filter&a=error'</script>";
            }

            //猜你喜欢商品
            $rand = mt_rand(0,9);
            $goodsguess = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 limit $rand,4");
            @$GLOBALS['smarty']->assign("goodsguess", $goodsguess);

            //分页
            $page = $fm->page();
            $GLOBALS['smarty']->assign("page", $page);
            @$GLOBALS['smarty']->assign("cateid", $id);

            //数量
            if(isset($_SESSION['num'])){
                $GLOBALS['smarty']->assign('num',$_SESSION['num']);
            }else{
                $GLOBALS['smarty']->assign('num',0);
            }

            //展示模板
            @$GLOBALS['smarty']->display("filter/filter.html");
        }else{
           echo "<script>location.href='?c=filter&a=error'</script>";
        }
    }
    //出现错误，调用空模板
    public function error(){
    	 //购物车
		          if(!isset($_SESSION['shopcar'])||empty($_SESSION['shopcar'])){
		        	$GLOBALS['smarty']->assign("shopcar","");
		        }else{
		        		$GLOBALS['smarty']->assign("shopcar",$_SESSION['shopcar']);
		        }
		        //购物车商品数量
		        if(isset($_SESSION['num'])){
		                    $GLOBALS['smarty']->assign('num',$_SESSION['num']);
		                }else{
		                    $GLOBALS['smarty']->assign('num',0);
		                }
        $GLOBALS['smarty']->display("filter/filterx.html");
    }


    //search商品搜索
    public function searchx(){
       $fm = new GoodsModel();
       $search = htmlentities(addslashes($_REQUEST['search']));
        if(!empty($search)){
            $hot = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 and title like '%$search%' limit 0,8");
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);
        }else{
            echo 0 ;
        }
    }

    //attr属性筛选
    public function attr(){
        $fm = new GoodsModel();
        if(!empty($_REQUEST['attrid'])){
            $attrid = $_REQUEST['attrid'];
                $count = $fm->select("select count(*) total from bhs_attr a inner join bhs_type t on a.type_id=t.id inner join bhs_goods g on t.id=g.type_id where a.id={$attrid}");//查出总记录
                $total = $count[0]['total'];//总记录数
                $page = new Page($total,8);//显示条数
            $hot = $fm->select("select g.id,g.title,g.price,g.mpic from bhs_attr a inner join bhs_type t on a.type_id=t.id inner join bhs_goods g on t.id=g.type_id where a.id={$attrid} limit ".$page->limitpage.",".$page->show);
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);
        }else{
            echo 0 ;
        }
    }

    //value值筛选
    public function value(){
        $fm = new GoodsModel();
        if(!empty($_REQUEST['valueid'])){
            $valueid = $_REQUEST['valueid'];
            $count = $fm->select("select count(*) total from bhs_value va inner join bhs_goods g on va.goods_id=g.id where va.id={$valueid}");//查出总记录
            $total = $count[0]['total'];//总记录数
            $page = new Page($total,8);//显示条数
            $hot = $fm->select("select g.id,g.title,g.price,g.mpic from bhs_value va inner join bhs_goods g on va.goods_id=g.id where va.id={$valueid} limit ".$page->limitpage.",".$page->show);
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);
        }else{
            echo 0 ;
        }
    }


    //ajax折扣筛选
    public function  isSale(){
        $fm = new GoodsModel();
        if(!empty($_REQUEST['cateid'])){ //判断js传过来的cateid是不是空的；
            $cateid = $_REQUEST['cateid'];//拿到cateid以便后面使用
                $count = $fm->select("select count(*) total from bhs_goods where isshelve=1 and cate_id={$cateid}");//查出总记录数
                $total = $count[0]['total'];//总记录数
                $page = new Page($total,8);//显示条数
            $hot = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 and cate_id={$cateid} and issale=1 limit ".$page->limitpage.",".$page->show);
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);//输出 json_encode函数表示给前台模板方法里的msg，里面的值，$hot是一个数组,JSON_UNESCAPED_UNICODE表示转义为 utf-8解读
        }else{
            echo 0 ;
        }
    }

    //ajsx新品筛选
    public function  isNew(){
        $fm = new GoodsModel();
        if(!empty($_REQUEST['cateid'])){ //判断js传过来的cateid是不是空的；
            $cateid = $_REQUEST['cateid'];//拿到cateid以便后面使用
                $count = $fm->select("select count(*) total from bhs_goods where isshelve=1 and cate_id={$cateid}");//查出总记录数
                $total = $count[0]['total'];//总记录数
                $page = new Page($total,8);//显示条数
            $hot = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 and cate_id={$cateid} and issale=1 limit ".$page->limitpage.",".$page->show);
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);//输出 json_encode函数表示给前台模板方法里的msg，里面的值，$hot是一个数组,JSON_UNESCAPED_UNICODE表示转义为 utf-8解读
        }else{
            echo 0 ;
        }
    }

    //Ajax热卖筛选
   public function isHot(){
       $fm = new GoodsModel();//现new一个模型
       if(!empty($_REQUEST['cateid'])){ //判断js传过来的cateid是不是空的；
           $cateid = $_REQUEST['cateid'];//拿到cateid以便后面使用
               $count = $fm->select("select count(*) total from bhs_goods where isshelve=1 and cate_id={$cateid}");//查出总记录数
               $total = $count[0]['total'];//总记录数
               $page = new Page($total,8);//显示条数
           $hot = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 and cate_id={$cateid} and ishot=1 limit ".$page->limitpage.",".$page->show);
           for($i=0;$i<count($hot);$i++){
               array_push($hot[$i],explode(",",$hot[$i]['mpic']));
           }
         echo json_encode($hot,JSON_UNESCAPED_UNICODE);//输出 json_encode函数表示给前台模板方法里的msg，里面的值，$hot是一个数组,JSON_UNESCAPED_UNICODE表示转义为 utf-8解读
       }else{
           echo 0 ;
       }

   }

    //ajax推荐筛选
    public function isRcm(){
        $fm = new GoodsModel();//现new一个模型
        if(!empty($_REQUEST['cateid'])){ //判断js传过来的cateid是不是空的；
            $cateid = $_REQUEST['cateid'];//拿到cateid以便后面使用
                $count = $fm->select("select count(*) total from bhs_goods where isshelve=1 and cate_id={$cateid}");//查出总记录数
                $total = $count[0]['total'];//总记录数
                $page = new Page($total,8);//显示条数
            $hot = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 and cate_id={$cateid} and isrcm=1 limit ".$page->limitpage.",".$page->show);
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);//输出 json_encode函数表示给前台模板方法里的msg，里面的值，$hot是一个数组,JSON_UNESCAPED_UNICODE表示转义为 utf-8解读
        }else{
            echo 0 ;
        }
    }

    //ajax价格筛选
    public function Price(){
        $fm = new GoodsModel();//现new一个模型
        if(!empty($_REQUEST['cateid'])){ //判断js传过来的cateid是不是空的；
            $cateid = $_REQUEST['cateid'];//拿到cateid以便后面使用
                //总记录数
                $count = $fm->select("select count(*) total from bhs_goods where isshelve=1 and cate_id={$cateid}");
                $total = $count[0]['total'];
                //显示条数
                $page = new Page($total,8);
            $hot = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 and cate_id={$cateid}  order by price asc limit ".$page->limitpage.",".$page->show);
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
                //分页
                $pageData = array();
                $pageData['page'] = $page->showPage('&c=fiter&a=Price');
                array_push($hot,$pageData);
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);//输出 json_encode函数表示给前台模板方法里的msg，里面的值，$hot是一个数组,JSON_UNESCAPED_UNICODE表示转义为 utf-8解读
        }else{
            echo 0 ;
        }
    }
    
    //Bhere shop 筛选
    public function bhereshop(){
        $fm = new GoodsModel();
        $cateid = $_REQUEST['cateid'];
        if(!empty($cateid)){
        	  $rand = mt_rand(0,9);
            $hot = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 limit $rand,8");
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);
        }else{
            echo 0 ;
        }
    }

    //商家包邮
    public function Shelve(){
        $fm = new GoodsModel();//现new一个模型
        if(!empty($_REQUEST['cateid'])){ //判断js传过来的cateid是不是空的；
            $cateid = $_REQUEST['cateid'];//拿到cateid以便后面使用
                $count = $fm->select("select count(*) total from bhs_goods where isshelve=1 and cate_id={$cateid}");//查出总记录数
                $total = $count[0]['total'];//总记录数
                $page = new Page($total,8);//显示条数
            $hot = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 and cate_id={$cateid} and isshelve=1  limit ".$page->limitpage.",".$page->show);
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);//输出 json_encode函数表示给前台模板方法里的msg，里面的值，$hot是一个数组,JSON_UNESCAPED_UNICODE表示转义为 utf-8解读
        }else{
            echo 0 ;
        }
    }

    //仅显示有货
    public function num(){
        $fm = new GoodsModel();
        if(!empty($_REQUEST['cateid'])){
            $cateid = $_REQUEST['cateid'];
            $count = $fm->select("select count(*) total from bhs_goods where isshelve=1 and cate_id={$cateid}");//查出总记录数
            $total = $count[0]['total'];//总记录数
            $page = new Page($total,8);//显示条数
            $hot = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 and cate_id={$cateid} and notice_num>0  limit ".$page->limitpage.",".$page->show);
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);
        }else{
            echo 0 ;
        }
    }
    
    //猜你喜欢
    public function guess(){
        $fm = new GoodsModel();
        $cateid = $_REQUEST['cateid'];
        if(!empty($cateid)){
            $rand = mt_rand(0,9);
            $hot = $fm->select("select id,title,price,mpic from bhs_goods where isshelve=1 limit $rand,4");
            for($i=0;$i<count($hot);$i++){
                array_push($hot[$i],explode(",",$hot[$i]['mpic']));
            }
            echo json_encode($hot,JSON_UNESCAPED_UNICODE);
        }else{
            echo 0 ;
        }
    }

}