<?php

class GoodsModel {
    /**
     * 使用Db对象查询数据库数据
     * @return [数据数组]
     **/
    public function selectPage(){
        //求的分页的总页数,自定义显示条数
        $total = $this->getTotal();
        $page = new Page($total,7);//实例化分页类，和查询功能结合起来
        $data = 'id,title,artnum,price,isshelve,isnew,ishot,issale,isrcm,sort,num,addtime';
        $sql = "select ".$data." from bhs_goods where isdelete=0 order by id desc limit ".$page->limitpage.",".$page->show;
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
     * 增加商品分类数据
     * @return [boolean]
     */
    public function add(){
        $title = $this->isEmpty($_POST['title']);  //商品名称
        $uniArtnum = date('Ymd').str_pad(mt_rand(1,999999),5,'0',STR_PAD_LEFT);   //唯一货号生成
        $artnum =  empty($_POST['artnum'])?$uniArtnum:addslashes($_POST['artnum']);  //可产生唯一货号
        $cate = $this->isEmpty($_POST['cate_id']);  //商品分类
        $brand = $this->isEmpty($_POST['brand_id']);  //商品品牌
        $price = $this->isEmpty($_POST['price']);  //商品售价
        $vip_price = $this->isEmpty($_POST['vip_price']);  //会员价格
        $mkt_price = $this->isEmpty($_POST['mkt_price']);  //市场价格
        $sale_price = $this->isEmpty($_POST['sale_price']);  //促销价格
        $sale_time_start = $this->isEmpty($_POST['sale_time_start']);  //促销开始时间
        $sale_time_end = $this->isEmpty($_POST['sale_time_end']);  //促销结束时间
        $bpic = "";
        $mpic = "";
        $spic = "";
        $tpic = "";
        $descr_pic = "";
       if(!empty($_FILES['zoom_pic']['name'][0])) {
            $up = new Upload("../public/uploads/goods/");
            $up->sc($_FILES['zoom_pic']);
            $arrz = $up->getLastFile();
            $descr_pic = implode(",",$arrz);
          //得到的是图片名称数组集合
            //商品图片缩放处理
            $Imageg = new Imageg();
            //得到四种不同尺寸的商品缩略图的路径地址
            //存放四种缩略图的地址
            if(!empty($arrz)) {
                foreach ($arrz as $key => $value) {
                    $Imageg->zoom(110,$value,"tpic_");
                    $Imageg->zoom(200,$value,"spic_");
                    $Imageg->zoom(360,$value,"mpic_");
                    $Imageg->zoom(720,$value,"bpic_");
                }
            }
            //只给大图bpic加上logo水印
            //得到缩放的名称字符串集合

          foreach($Imageg->config['newfilename'] as $key=>$value){
                for($i=0;$i<count($Imageg->config['newfilename']);$i++) {
                    $index = (($i+1)-1)*4;
                    if($index==$key){
                        $tpic .= $Imageg->config['newfilename'][$key].",";
                    }

                    if($index+1==$key){
                        $spic .= $Imageg->config['newfilename'][$key].",";
                    }

                    if($index+2==$key){
                        $mpic .= $Imageg->config['newfilename'][$key].",";
                    }

                    if($index+3==$key){
                        $bpic .= $Imageg->config['newfilename'][$key].",";
                    }
                }
            }
        }
        $descr = $this->isEmpty($_POST['descr']);    //商品详细的描述
        $weight = $this->isEmpty($_POST['weight']);  //商品重量
        $num = $this->isEmpty($_POST['num']);  //库存数量
        $notice_num = $this->isEmpty($_POST['notice_num']);  //库存警告数量

        $isnew = empty($_POST['isnew'])?null:$_POST['isnew'];    //是否新品
        $ishot = empty($_POST['ishot'])?null:$_POST['ishot'];  //是否热卖
        $issale = empty($_POST['issale'])?null:$_POST['issale'];   //是否折扣
        $isrcm = empty($_POST['isrcm'])?null:$_POST['isrcm'];  //是否推荐
        $isshelve = empty($_POST['isshelve'])?null:$_POST['isshelve'];   //是否上架
        $isship = empty($_POST['isship'])?null:$_POST['isship'];   //是否免运费

        $sort = $this->isEmpty($_POST['sort']);  //推荐排序
        $keyword = $this->isEmpty($_POST['keyword']);  //商品关键词
        $short_descr = $this->isEmpty($_POST['short_descr']);  //简单描述
        $remark = $this->isEmpty($_POST['remark']);  //商家备注

        $type = $this->isEmpty($_POST['type_id']);  //商品类型，这里要具体到哪个类型对应的属性，要做处理和判断
        $album_descr = $this->isEmpty($_POST['album_descr']);  //商品相册描述
        $album = "";
            if(!empty($_FILES['album']['name'][0])) {
                //上传得到文件的地址，调用上传和图片缩放的类
                $up = new Upload('../public/uploads/album/');
                $up->sc($_FILES['album']);
                $arrAlbum = $up->getLastFile();//得到上传的相册原图地址
                $album = implode(",",$arrAlbum);
            }
        $article = $this->isEmpty($_POST['article_id']);  //文章类型*/
        //上传时间，取当前日期
        $addtime = date('Y-m-d H:m:s');
        //首先我们要明确，商品的名称，价格，分类，添加时间不能为空，其他项目可以为空
        $insertSql = "insert into bhs_goods values(null,'{$title}','{$artnum}','{$cate}','{$brand}','{$price}','{$vip_price}','{$mkt_price}','{$sale_price}','{$sale_time_start}','{$sale_time_end}','{$descr_pic}','{$bpic}','{$mpic}','{$spic}','{$tpic}','{$descr}','{$weight}','{$num}','{$notice_num}','{$isnew}','{$ishot}','{$issale}','{$isrcm}','{$isshelve}','{$isship}','{$sort}','{$keyword}','{$short_descr}','{$remark}','{$type}','{$album}','{$album_descr}','{$article}','{$addtime}',0)";
            //实例化数据库类，插入对象，返回布尔
            $db = Db::getInstance();
            $boolData = $db->query($insertSql);
            if($boolData){
                $goods_id = mysql_insert_id();//用内置函数得到添加商品后得到的ID
                //如果商品数据录入成功以后，在这基础上再录入属性值
                if (!empty($_POST['attr'])) {
                    foreach ($_POST['attr'] as $key => $value) {
                        $db->query("insert bhs_value values(null,'{$value}',{$_POST['attr_id'][$key]},{$goods_id})");
                    }
                    return true;
                }
                return true;
            }
            else{
                return false;
            }


    }

    /**
     * @param $post
     * 用于判断表单传入的值是否为空，并返回相应输入数据库里的数据
     * @return null|string
     */
    public function isEmpty($post){
        if(!empty($post)){
            $post = addslashes($post);
        }
        else{
            $post = "";
        }
        return $post;
    }

    public function addValue(){
        //在商品添加页，拿到选取的商品类型ID
        if(!empty($_POST['type_id'])) {
            $type_id = $_POST['type_id'];
            //得到对应类型的属性值，是一个二维数组
            $arr = $this->select("select * from bhs_attr where type_id=".$type_id);
            if (!empty($arr)) {
                $db = Db::getInstance();
                foreach ($arr as $key => $value) {
                    $boolData = $db->query("insert bhs_value values(null,'{$_POST[$name]}',{$value['id']})");
                    if ($boolData) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        }
        return true;

    }
    /**
     * 删除指定商品分类数据
     * @return [boolean]
     */
    public function delete($id) {
        $db = Db::getInstance();
        $boolData = $db->query("update bhs_goods set isdelete=1 where id={$id}");
            if ($boolData) {
                return true;
            } else {
                return false;
            }
    }
    /**
     * 编辑页面的数据展示
     * @return [array]
     */
    public function editor($id){
        $arr = $this->select("select * from bhs_goods where isdelete=0 and id={$id}");
        return $arr;
    }
    /**
     * 更新指定商品分类数据
     * @return [boolean]
     */
    public function update(){
        $title = $this->isEmpty($_POST['title']);  //商品名称
        $uniArtnum = date('Ymd').str_pad(mt_rand(1,999999),5,'0',STR_PAD_LEFT);;    //唯一货号生成
        $artnum =  empty($_POST['artnum'])?$uniArtnum:addslashes($_POST['artnum']);  //可产生唯一货号
        $cate = $this->isEmpty($_POST['cate_id']);  //商品分类
        $brand = $this->isEmpty($_POST['brand_id']);  //商品品牌
        $price = $this->isEmpty($_POST['price']);  //商品售价
        $vip_price = $this->isEmpty($_POST['vip_price']);  //会员价格
        $mkt_price = $this->isEmpty($_POST['mkt_price']);  //市场价格
        $sale_price = $this->isEmpty($_POST['sale_price']);  //促销价格
        $sale_time_start = $this->isEmpty($_POST['sale_time_start']);  //促销开始时间
        $sale_time_end = $this->isEmpty($_POST['sale_time_end']);  //促销结束时间
        $bpic = "";
        $mpic = "";
        $spic = "";
        $tpic = "";
        $descr_pic = "";
        //得到旧的文件地址

        if(!empty($_FILES['zoom_pic']['name'][0])) {
            $up = new Upload("../public/uploads/goods/");
            $this->unlinkDest(true); //在上传新的图片之前移除旧图片文件
            $up->sc($_FILES['zoom_pic']);
            $arrz = $up->getLastFile();
            $descr_pic = implode(",",$arrz);
            //得到的是图片名称数组集合
            //商品图片缩放处理
            $Imageg = new Imageg();
            //得到四种不同尺寸的商品缩略图的路径地址
            //存放四种缩略图的地址
            if(!empty($arrz)) {
                foreach ($arrz as $key => $value) {
                    $Imageg->zoom(110,$value,"tpic_");
                    $Imageg->zoom(200,$value,"spic_");
                    $Imageg->zoom(360,$value,"mpic_");
                    $Imageg->zoom(720,$value,"bpic_");
                }
            }
            //只给大图bpic加上logo水印
            //得到缩放的名称字符串集合

            foreach($Imageg->config['newfilename'] as $key=>$value){
                for($i=0;$i<count($Imageg->config['newfilename']);$i++) {
                    $index = (($i+1)-1)*4;
                    if($index==$key){
                        $tpic .= $Imageg->config['newfilename'][$key].",";
                    }

                    if($index+1==$key){
                        $spic .= $Imageg->config['newfilename'][$key].",";
                    }

                    if($index+2==$key){
                        $mpic .= $Imageg->config['newfilename'][$key].",";
                    }

                    if($index+3==$key){
                        $bpic .= $Imageg->config['newfilename'][$key].",";
                    }
                }
            }
        }
        $descr = $this->isEmpty($_POST['descr']);    //商品详细的描述
        $weight = $this->isEmpty($_POST['weight']);  //商品重量
        $num = $this->isEmpty($_POST['num']);  //库存数量
        $notice_num = $this->isEmpty($_POST['notice_num']);  //库存警告数量

        $isnew = empty($_POST['isnew'])?null:$_POST['isnew'];    //是否新品
        $ishot = empty($_POST['ishot'])?null:$_POST['ishot'];  //是否热卖
        $issale = empty($_POST['issale'])?null:$_POST['issale'];   //是否折扣
        $isrcm = empty($_POST['isrcm'])?null:$_POST['isrcm'];  //是否推荐
        $isshelve = empty($_POST['isshelve'])?null:$_POST['isshelve'];   //是否上架
        $isship = empty($_POST['isship'])?null:$_POST['isship'];   //是否免运费

        $sort = $this->isEmpty($_POST['sort']);  //推荐排序
        $keyword = $this->isEmpty($_POST['keyword']);  //商品关键词
        $short_descr = $this->isEmpty($_POST['short_descr']);  //简单描述
        $remark = $this->isEmpty($_POST['remark']);  //商家备注

        $type = $this->isEmpty($_POST['type_id']);  //商品类型，这里要具体到哪个类型对应的属性，要做处理和判断
        $album_descr = $this->isEmpty($_POST['album_descr']);  //商品相册描述

        $album = "";
        if(!empty($_FILES['album']['name'])) {
            //上传得到文件的地址，调用上传和图片缩放的类
            $up = new Upload('../public/uploads/album/');
            $this->unlinkDest(false);
            $up->sc($_FILES['album']);
            $arrAlbum = $up->getLastFile();//得到上传的相册原图地址
            $album = implode(",",$arrAlbum);
        }
        $article = $this->isEmpty($_POST['article_id']);  //文章类型*/
        //上传时间，取当前日期
        $addtime = date('Y-m-d H:m:s');
        //这里需要判断上传文件是否为空的情况，分别定义上传SQL语句
        //两个上传都为空的时候
        if(empty($_FILES['zoom_pic']['name'][0])&&empty($_FILES['album']['name'][0])) {
            $insertSql = "update bhs_goods set title='{$title}',artnum='{$artnum}',cate_id='{$cate}',brand_id='{$brand}',price='{$price}',vip_price='{$vip_price}',mkt_price='{$mkt_price}',sale_price='{$sale_price}',sale_time_start='{$sale_time_start}',sale_time_end='{$sale_time_end}',descr='{$descr}',weight='{$weight}',num='{$num}',notice_num='{$notice_num}',isnew='{$isnew}',ishot='{$ishot}',issale='{$issale}',isrcm='{$isrcm}',isshelve='{$isshelve}',isship='{$isship}',sort='{$sort}',keyword='{$keyword}',short_descr='{$short_descr}',remark='{$remark}',type_id='{$type}',album_descr='{$album_descr}',article_id='{$article}',addtime='{$addtime}',isdelete=0 where id={$_POST['goodsid']}";
        }
//都不为空的情况下
        if(!empty($_FILES['zoom_pic']['name'][0])&&!empty($_FILES['album']['name'][0])) {
            $insertSql = "update bhs_goods set title='{$title}',artnum='{$artnum}',cate_id='{$cate}',brand_id='{$brand}',price='{$price}',vip_price='{$vip_price}',mkt_price='{$mkt_price}',sale_price='{$sale_price}',sale_time_start='{$sale_time_start}',sale_time_end='{$sale_time_end}',descr_pic='{$descr_pic}',tpic='{$tpic}',spic='{$spic}',mpic='{$mpic}',bpic='{$bpic}',descr='{$descr}',weight='{$weight}',num='{$num}',notice_num='{$notice_num}',isnew='{$isnew}',ishot='{$ishot}',issale='{$issale}',isrcm='{$isrcm}',isshelve='{$isshelve}',isship='{$isship}',sort='{$sort}',keyword='{$keyword}',short_descr='{$short_descr}',remark='{$remark}',type_id='{$type}',album='{$album}',album_descr='{$album_descr}',article_id='{$article}',addtime='{$addtime}',isdelete=0 where id={$_POST['goodsid']}";
        }
        if(empty($_FILES['zoom_pic']['name'][0])&&!empty($_FILES['album']['name'][0])) {
            $insertSql = "update bhs_goods set title='{$title}',artnum='{$artnum}',cate_id='{$cate}',brand_id='{$brand}',price='{$price}',vip_price='{$vip_price}',mkt_price='{$mkt_price}',sale_price='{$sale_price}',sale_time_start='{$sale_time_start}',sale_time_end='{$sale_time_end}',descr='{$descr}',weight='{$weight}',num='{$num}',notice_num='{$notice_num}',isnew='{$isnew}',ishot='{$ishot}',issale='{$issale}',isrcm='{$isrcm}',isshelve='{$isshelve}',isship='{$isship}',sort='{$sort}',keyword='{$keyword}',short_descr='{$short_descr}',remark='{$remark}',type_id='{$type}',album='{$album}',album_descr='{$album_descr}',article_id='{$article}',addtime='{$addtime}',isdelete=0 where id={$_POST['goodsid']}";
        }
        if(!empty($_FILES['zoom_pic']['name'][0])&&empty($_FILES['album']['name'][0])) {
            $insertSql = "update bhs_goods set title='{$title}',artnum='{$artnum}',cate_id='{$cate}',brand_id='{$brand}',price='{$price}',vip_price='{$vip_price}',mkt_price='{$mkt_price}',sale_price='{$sale_price}',sale_time_start='{$sale_time_start}',sale_time_end='{$sale_time_end}',descr_pic='{$descr_pic}',tpic='{$tpic}',spic='{$spic}',mpic='{$mpic}',bpic='{$bpic}',descr='{$descr}',weight='{$weight}',num='{$num}',notice_num='{$notice_num}',isnew='{$isnew}',ishot='{$ishot}',issale='{$issale}',isrcm='{$isrcm}',isshelve='{$isshelve}',isship='{$isship}',sort='{$sort}',keyword='{$keyword}',short_descr='{$short_descr}',remark='{$remark}',type_id='{$type}',album_descr='{$album_descr}',article_id='{$article}',addtime='{$addtime}',isdelete=0 where id={$_POST['goodsid']}";
        }

        $db = Db::getInstance();
        $boolData = @$db->query($insertSql);
        if($boolData){
            $goods_id = $_POST['goodsid'];
            //如果商品数据录入成功以后，在这基础上再录入属性值
            if (isset($_POST['attr'])&&isset($_POST['value_id'])) {
                foreach ($_POST['attr'] as $key => $value) {
                    @$id = $_POST['value_id'][$key];
                    $db->query("update bhs_value set value='{$value}',attr_id={$_POST['attr_id'][$key]},goods_id={$goods_id} where id={$id}");
                }
                return true;
            }
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param $bool
     * @return bool
     */
    public function unlinkDest($bool){
        //得到旧的文件地址并删除原文件
        $oldDest = $this->select("select descr_pic,bpic,mpic,spic,tpic,album from bhs_goods where id=".$_POST['goodsid']);
        if($bool) {
            $old_dpic = $oldDest[0]['descr_pic'];
            $arrP = explode(",",$old_dpic);
            foreach($arrP as $val) {
                unlink($val);
            }
            $arrB = explode(",", $oldDest[0]['bpic']);
            array_pop($arrB);
            $arrM = explode(",", $oldDest[0]['mpic']);
            array_pop($arrM);
            $arrS = explode(",", $oldDest[0]['spic']);
            array_pop($arrS);
            $arrT = explode(",", $oldDest[0]['tpic']);
            array_pop($arrT);
            $after = "../public/uploads/goods-zoom/";
            foreach($arrB as $valB){
                unlink($after.$valB);
            }
            foreach($arrM as $valM){
                unlink($after.$valM);
            }
            foreach($arrS as $valS){
                unlink($after.$valS);
            }
            foreach($arrT as $valT){
                unlink($after.$valT);
            }
            return true;

        }else{
            $old_album = $oldDest[0]['album'];
            $arrP = explode(",",$old_album);
            if(!empty($old_album)) {
                foreach ($arrP as $val) {
                    unlink($val);
                }
            }
            return true;
        }
    }
    public function getTotal(){
        $db = Db::getInstance();
        $count = $db->query("select count(*) total from bhs_goods where isdelete=0");
        if (is_resource($count)) {
            $arrCount = mysql_fetch_assoc($count);
            $total = $arrCount['total'];
        }
        return $total;
    }
    public function query($sql){
        $db = Db::getInstance();
        return $db->query($sql);
    }
    /**
     * 分页数据的准备
     * @return [string]
     */
    public function page(){
        $total = $this->getTotal();
        $page = new Page($total,6);            //实例化分页类
        $pageData = $page->showPage('&c=goods&a=select');
        return $pageData;
    }
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
}
