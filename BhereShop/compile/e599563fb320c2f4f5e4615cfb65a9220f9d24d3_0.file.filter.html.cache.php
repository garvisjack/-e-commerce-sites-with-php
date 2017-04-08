<?php
/* Smarty version 3.1.30, created on 2017-03-30 23:38:04
  from "/usr/lamp/apache2/htdocs/template/filter/filter.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd265cb96948_41286149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e599563fb320c2f4f5e4615cfb65a9220f9d24d3' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/filter/filter.html',
      1 => 1490887091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dd265cb96948_41286149 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cut')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.cut.php';
if (!is_callable('smarty_modifier_cutbrand')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.cutbrand.php';
$_smarty_tpl->compiled->nocache_hash = '177865753358dd265cad04f4_03926000';
?>
<!doctype html>
<html>
	<head lang="en">
		<meta charset='utf-8'>
		<title>BhereShop-筛选页</title>
		<link rel="stylesheet" type="text/css" href="./public/css/filter/sxy.css">
        <link rel="stylesheet" type="text/css" href="./public/css/filter/css.css">
        <style type=text/css>
        	   .on{
            display:inline-block;font-size: 17px; width:25px;height: 25px;background-color: red;text-align: center;line-height: 25px;color: #eeeeee;font-weight: bold;border-radius: 50%;position: absolute;top: 7px;left: 80px;}
        .heading{
        	
        	width: 100px;
					float: right;
					margin-right: 125px;
					position: relative;
        	}
        #cart_xxk{
  		width: 400px;
      height: 0px;
			float: left;
			border: 1px solid #ccc;
			position: absolute;
			top: 41px;
			background: snow;
			opacity:0;
			transition: all .5s;
			overflow: auto;
			left: -109px;
			box-shadow: 2px 2px 4px #888888;
			z-index: 10000;
			border-radius: 3%;
  	}
   .heading:hover #cart_xxk{
  		opacity:1;
  		height:320px;
  	}
  .data{
  		float:left;
  		margin: 0px;
  	}
  .xxk_ul{
  	width:95%;
  	height:27%;
  	margin:15px;
  	box-shadow: 4px 4px 6px #ccc;
  	transition:all .3s;
  	}
  	
  	.xxk_ul:hover{
  		
  	box-shadow: 3px 3px 3px #888;	
  		}     	
        </style>
	</head>
<body>
	<div id="head">
        <div id="menu">
            <ul>
                <li><a href="?c=index&a=index">WELCOME BHERESHOP</a>
                    <div>
                        <ul>
                            <li><a href="?c=lr&a=select">新用户注册</a></li>
                            <li><a href="#">一键登录Bhere</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="?c=pi&a=index">个人中心</a>
                    <div>
                        <ul>
                            <li><a href="#">已买到的商品</a></li>
                            <li><a href="#">个性化设置</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:void(0)">收藏夹</a>
                    <div>
                        <ul>
                            <li><a href="#">收藏的商品</a></li>
                            <li><a href="#">收藏的店铺</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:void(0)">卖家中心</a>
                    <div>
                        <ul>
                            <li><a href="#">免费开店</a></li>
                            <li><a href="#">已经卖出的商品</a></li>
                            <li><a href="#">出售中的商品</a></li>
                       
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:void(0)">联系客服</a>
                    <div>
                        <ul>
                            <li><a href="#">消费者客服</a></li>
                            <li><a href="#">卖家客服</a></li>
                        </ul>
                    </div>
                </li>
                <li><?php if ($_smarty_tpl->tpl_vars['user']->value != '') {?><a href="javascript:void(0)" style='color:#EA2F2F'>欢迎！<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a><?php } else { ?><a href="?c=lr&a=select" style='color:#EA2F2F'>登录/注册Bhere</a><?php }?>
<li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a>
    <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
</div>
</li>
        </div>
    </div>










	<div id="to">
        <form action="" method="post">
            <a href="?c=index&a=index"><img width="210" height="110" src="./public/img/index/logo.png"></a>
            <div id="tomid">
                <div id="tomidleft"><a href="">商品</a></div>
                <input type="hidden" name="cateid" value="<?php echo $_smarty_tpl->tpl_vars['cateid']->value;?>
">
                <input type="text" name="search" value="" class="input" placeholder="请输入相关商品名">
                <a href="javascript:void(0)" class="button" onclick="searchx($(this))">搜索</a>
            </div>
        </form>
		<ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['type_id'] == $_smarty_tpl->tpl_vars['type']->value[0]['id']) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['attr'];?>
</a></li>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
		<div id="gouwuche">
            <input min="1" type="hidden" id="quantity" name="quantity" value="1" class="form-control input-small">
            <a href ="?c=car&a=show">
               <div class="heading" >
					<a href ="?c=car&a=show" style="padding:2px;color:#EA2F2F;font-size:bold;font-size:24px"><img src="./public/img/goods-detail/images/74602894_240.png" width="40px"height="40px"/>
					<span id="cart_total" class="on" style=""><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</span>
					</a>
					<div id=cart_xxk>
					
							<?php if ($_smarty_tpl->tpl_vars['shopcar']->value != '') {?>
						 
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopcar']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
								  <dl class="xxk_ul">
								   <dd class="data">
										<a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['tpic']);?>
" style="width: 60px;height: 60px;"></a>
									</dd>
									<dd class="data" style="width: 60%;">
								<span style="font-family: inherit;color: tomato;font-size:12px;"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</span>
							     </dd>
							     <dd class="data" style="margin: 15px;color: orange;">
									<?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
件
						      </dd>
						      	</dl>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							<?php } else { ?>
							<img src="./public/img/logo/empty.jpg" width="250px" height="250px" style="margin-top: 30px;margin-left: 20px;"/>
							<?php }?>
						
						
					</div>
					</div>
                
            </a>
        </div>
	</div>





	<div id="shun">
		<div id="shunda">
			<div id="shundaleft"><a href="">所有商品分类</a></div>
			<ul>
				<li><a href="#" class="shundaa shundaa1">首页</a></li>
				<li><a href="#" class="shundaa shundaa1">新品推荐</a></li>
				<li><a href="#" class="shundaa shundaa1">折扣</a></li>
				<li><a href="#" class="shundaa">闪购</a></li>
				<li><a href="#" class="shundaa">免运费</a></li>
				<li><a href="#" class="shundaa">Bhere生活超市</a></li>
				<li><a href="#" class="shundaa">跨境海淘</a></li>
			</ul>
			<div id="shundaimg"></div>
		</div>
	</div>




<!--属性及值-->
	<div id="fiy">
		<div id="fiytop">
			<div id="fiytopleft"><span style="position: absolute;left: 52px;"><?php echo $_smarty_tpl->tpl_vars['type']->value[0]['type'];?>
</span></div>
            <div id="fiytopright">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value['type_id'] == $_smarty_tpl->tpl_vars['type']->value[0]['id']) {?>
                          <li><a href="javascript:void(0)" name="attr" onclick="attr(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,$(this))"><?php echo $_smarty_tpl->tpl_vars['value']->value['attr'];?>
</a></li>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
		</div>

		<div id="fiytop2">
			<div id="fiytop2left"><span>品牌</span></div>
			<div id="fiytop2right">
				<ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brand']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
					<li><a href="" class="fiytop2a1" id="fiytop2a11">
                            <img src="<?php echo smarty_modifier_cutbrand($_smarty_tpl->tpl_vars['value']->value['pic']);?>
" alt="品牌图片"/>
                        </a>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
            </div>
		</div>

        <div class="classWarp">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="guide_box">
                <div class="guide_attr"><?php echo $_smarty_tpl->tpl_vars['value']->value['attr'];?>
</div>
                <div class="guide_value">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['attr_id'] == $_smarty_tpl->tpl_vars['value']->value['id']) {?>
                                <li><a href="javascript:void(0)" class="fiytop3a1" name="value" onclick="value(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
,$(this))"><?php echo $_smarty_tpl->tpl_vars['v']->value['value'];?>
</a></li>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
	</div>


<!--筛选-->
	<div id="sikes">
		<div id="sikestop">
			<ul class="list">
                <input type="hidden" name="cateid" value="<?php echo $_smarty_tpl->tpl_vars['cateid']->value;?>
">
				<li><a href="javascript:void(0)" name="sale" onclick="sale($(this))">折扣</a></li>
				<li><a href="javascript:void(0)" name="new" onclick="New($(this))">新品</a></li>
				<li><a href="javascript:void(0)" name="hot" onclick="hot($(this))">热卖</a></li>
                <li><a href="javascript:void(0)" name="rcm" onclick="rcm($(this))">推荐</a></li>
				<li><a href="javascript:void(0)" name="price" onclick="pric($(this))">价格</a></li>
			</ul>
		</div>
		<div id="sikesbottom">
			<ul>
				<li><input type="checkbox" name="bobby" value="BhereShop"><a href="javascript:void(0)" name="bhereshop" onclick="bhereshop($(this))">BhereShop</a></li>
				<li><input type="checkbox" name="bobby" value="商家包邮"><a href="javascript:void(0)" name="shelve" onclick="shelve($(this))">商家包邮</a></li>
				<li><input type="checkbox" name="bobby" value="仅显示有货"><a href="javascript:void(0)" name="num" onclick="num($(this))">仅显示有货</a></li>
			</ul>
		</div>
	</div>

    <!--热卖筛选-->
    <div class="hot">
    </div>
    <div class="page1">

    </div>
    <!--商品-->
	<div id="siwen" name="siwen">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodstype']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<div class="siwentop1div1">
				<div class="siwentop1div1head">
					<a href="javascript:void(0)" class="siwentop1div1heada1">1件</a>
					<a href="javascript:void(0)" class="siwentop1div1heada2">组合装</a>
				</div>
				<a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="siwenimg"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['mpic']);?>
" width="230px" height="230px"></a>
				<div class="siwentop1div1bottom">
					<span class='price'><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</span><br>
					<a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="siwentop1div1bottoma1" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a><p style='margin: 0px;'></p>
					<a href="javascript:void(0)" class="siwentop1div1bottoma2"><img src="./public/img/filter/sxy/chu.png">满1件可参加超值换购</a>
					<a href="javascript:void(0)" class="siwentop1div1bottoma3" onclick="shopcar(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,$(this))">加入购物车</a>
                    <input min="1" type="hidden" name="quantity" value="1" class="form-control input-small">
                    <a href="javascript:void(0)" class="siwentop1div1bottoma4"><input type="checkbox" name="bobby" value="对比">对比</a>
					<a href="javascript:void(0)" class="siwentop1div1bottoma5"><i><img src="./public/img/filter/sxy/10.png" style="margin-top: 6px;"></i></a>
					<a href="javascript:void(0)" class="siwentop1div1bottoma6"><i><img src="./public/img/filter/sxy/11.png" style="margin-top: 6px"></i><span></span></a>
					<a href="javascript:void(0)" class="siwentop1div1bottoma7">BhereShop</a>
				</div>
			</div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
    <!--分页-->
    <div class="page">
        <div class="siwenbottom" style="float: left">
            <p>您对当前页面结果是否满意？</p>
            <a href="" class="siwenbottoma1">满意</a>
            <a href="" class="siwenbottoma2">不满意</a>
        </div>
        <!--<div class="pagelist"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>-->
    </div>



	<div id="eight"></div>


    <!--猜你喜欢-->
    <section id="good10" class="floor">
        <div class="container">
            <div class="text_box_left"><span>猜你喜欢</span>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" onclick="guess($(this))" style="font-size:14px;color:#e33131;">不喜欢?&nbsp;换一批</a></div>
            <div class="box-product">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsguess']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <div>
                    <div class="showhim">
                        <div class="image">
                            <a href="?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><img src="./public/uploads/goods-zoom/<?php echo smarty_modifier_cut($_smarty_tpl->tpl_vars['value']->value['mpic']);?>
" alt="iMac" />
                            </a>
                            <div class="name"><a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></div>
                            <div class="priced">
                                <ul>
                                    <li><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</li>
                                    <li><a href="javascript:void(0)" class="siwentop1div1bottoma3"  onclick="shopcar(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,$(this))">加入购物车</a></li>
                                </ul>
                            </div>
                            <div style="margin-top:24px;"></div>
                        </div>
                        <div class="showme">
                        </div></div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
        <!--tab end -->
    </section>



	<!-- 底部样式-->
	<footer class="ft_wrap">
		<div class="icart-footer">
			<div class="icart-footer-top">
				<div style="width:1000px; margin:0 auto;">
				</div>
			</div>
			<div class="icart-footer-mid">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'art', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['art']->value) {
?>
				<div class="column_footer">
					<h3><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h3>
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['art']->value, 'ar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ar']->value) {
?>
						<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['ar']->value;?>
</a></li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ul>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<div class="column_footer" style="margin-right:0px;">
					<h3>Social</h3>
					<ul class="social">
						<li class="twitter"><a href="../../twitter.com/twitter">Twitter Username</a></li>
						<li class="facebook"><a href="../../facebook.com/Username/default.htm">Facebook</a></li>
						<li class="rss"><a href="#">RSS Feed</a></li>
					</ul>
				</div>
			</div>
			<div class="icart-footer-bottom" style="margin-top: 10px;">
				<div id="twelve" style="height: 30px;">
					<ul>
						<li><a href="" class="twelvea" id="twelvea1">关于Bhere</a></li>
						<li><a href="" class="twelvea">我们的团队</a></li>
						<li><a href="" class="twelvea">联系我们</a></li>
						<li><a href="" class="twelvea">售后服务</a></li>
					</ul>
					<br>
					<p>Copyright© Bhere Shop</p>
				</div>
			</div>
		</div>
	</footer>





	<?php echo '<script'; ?>
 type="text/javascript" src="./public/js/filter/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    	         //search搜索
        function searchx(node){
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=searchx",{search:$("input[name=search]").val(),cateid:$("input[name=cateid]").val()},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                if(msg==0){
                }else{
                    $("#siwen").hide();
                    $(".hot").show();
                    for(var i=0;i<=msg.length;i++){
                        $("<div class='siwentop1div1'>" +
                        "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                        "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                        "<div class='siwentop1div1bottom'>" +
                        "<span class='price'>"+msg[i].price+"</span><br>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a>" +
                        "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                        "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                        "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                        "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                        "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                        "</div>").appendTo($(".hot"));
                    }
                    $(".hot img[name=hotimg]").hide();
                }
            },"json");
        }

        //attr属性筛选
        function attr(data,node){
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=attr",{attrid:data},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                if(msg==0){
                }else{
                    $("#siwen").hide();
                    $(".hot").show();
                    for(var i=0;i<=msg.length;i++){
                        $("<div class='siwentop1div1'>" +
                        "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                        "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                        "<div class='siwentop1div1bottom'>" +
                        "<span class='price'>"+msg[i].price+"</span><br>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a>" +
                        "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                        "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                        "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                        "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                        "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                        "</div>").appendTo($(".hot"));
                    }
                    $(".hot img[name=hotimg]").hide();
                }
            },"json")
        }

        //value值筛选
        function value(data,node){
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=value",{valueid:data},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                if(msg==0){
                }else{
                    $("#siwen").hide();
                    $(".hot").show();
                    for(var i=0;i<=msg.length;i++){
                        $("<div class='siwentop1div1'>" +
                        "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                        "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                        "<div class='siwentop1div1bottom'>" +
                        "<span class='price'>"+msg[i].price+"</span><br>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a>" +
                        "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                        "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                        "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                        "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                        "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                        "</div>").appendTo($(".hot"));
                    }
                    $(".hot img[name=hotimg]").hide();
                }
            },"json")
        }



        //Ajax折扣筛选
        function sale(node){
            $("li a[name='price']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='rcm']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='hot']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='new']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='sale']").css({'background':'#e33131','color':'#ffffff'});
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=isSale",{cateid:$('input[name=cateid]').val()},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                if(msg==0){
                }else{
                    $("a[name='sele']").css({"background":"#e33131","color":"#fff"});
                    $("#siwen").hide();
                    $(".hot").show();
                    for(var i=0;i<msg.length;i++){
                        $("<div class='siwentop1div1'>" +
                        "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                        "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                        "<div class='siwentop1div1bottom'>" +
                        "<span class='price'>"+msg[i].price+"</span><br>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a>" +
                        "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                        "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                        "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                        "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                        "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                        "</div>").appendTo($(".hot"));
                    }
                    $("img[name=hotimg]").hide();
                }
            },"json")
        }

        //Ajax新品筛选
        function New(node){
            $("li a[name='price']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='rcm']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='hot']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='new']").css({'background':'#e33131','color':'#ffffff'});
            $("li a[name='sale']").css({'background':'#ffffff','color':'#000000'});
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=isNew",{cateid:$('input[name=cateid]').val()},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                if(msg==0){
                }else{
                    $("#siwen").hide();
                    $(".hot").show();
                    for(var i=0;i<msg.length;i++){
                        $("<div class='siwentop1div1'>" +
                        "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                        "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                        "<div class='siwentop1div1bottom'>" +
                        "<span class='price'>"+msg[i].price+"</span><br>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a>" +
                        "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                        "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                        "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                        "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                        "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                        "</div>").appendTo($(".hot"));
                    }
                    $(".hot img[name=hotimg]").hide();
                }
            },"json");
        }

        //Ajax热卖筛选
        function hot(node){
            $("li a[name='price']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='rcm']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='hot']").css({'background':'#e33131','color':'#ffffff'});
            $("li a[name='new']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='sale']").css({'background':'#ffffff','color':'#000000'});
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=isHot",{cateid:$('input[name=cateid]').val()},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                    if(msg==0){
                    }else{
                    	$(".hot img[name=hotimg]").hide();
                         $("#siwen").hide();
                         $(".hot").show();
                        for(var i=0;i<msg.length;i++){
                            $("<div class='siwentop1div1'>" +
                            "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                            "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                            "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                            "<div class='siwentop1div1bottom'>" +
                            "<span class='price'>"+msg[i].price+"</span><br>" +
                            "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a> " +
                            "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                            "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                            "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                            "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                            "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                            "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                            "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                            "</div>").appendTo($(".hot"));
                        }
                        
                    }

            },"json");
        }

        //ajax推荐筛选
        function rcm(node){
            $("li a[name='price']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='rcm']").css({'background':'#e33131','color':'#ffffff'});
            $("li a[name='hot']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='new']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='sale']").css({'background':'#ffffff','color':'#000000'});
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=isRcm",{cateid:$('input[name=cateid]').val()},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                if(msg==0){
                }else{
                    $("#siwen").hide();
                    $(".hot").show();
                    for(var i=0;i<msg.length;i++){
                        $("<div class='siwentop1div1'>" +
                        "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                        "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                        "<div class='siwentop1div1bottom'>" +
                        "<span class='price'>"+msg[i].price+"</span><br>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a>" +
                        "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                        "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                        "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                        "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                        "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                        "</div>").appendTo($(".hot"));
                    }
                   $(".hot img[name=hotimg]").hide();
                }
            },"json")
        }

        //Ajax价格筛选
        function pric(node){
            $("li a[name='price']").css({'background':'#e33131','color':'#ffffff'});
            $("li a[name='rcm']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='hot']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='new']").css({'background':'#ffffff','color':'#000000'});
            $("li a[name='sale']").css({'background':'#ffffff','color':'#000000'});
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=Price",{cateid:$('input[name=cateid]').val()},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                if(msg==0){
                }else{
                    $(".hot img[name=hotimg]").hide();
                    $(".page").hide();
                    $("#siwen").hide();
                    $(".hot").show();
                    $(".page1").show();
                    for(var i=0;i<=msg.length;i++){
                        $("<div class='siwentop1div1'>" +
                        "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                        "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                        "<div class='siwentop1div1bottom'>" +
                        "<span class='price'>"+msg[i].price+"</span><br>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a>" +
                        "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                        "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                        "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                        "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                        "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                        "</div>").appendTo($(".hot"));
                    }
                }
            },"json")
        }
        /*if(i==msg.length){$("<div class='pagelist'>当前1/1页  共有14个商品" +"<a href='?p=1&c=fiter&a=index#spot'>首页</a>" +"<a href='?p=1&c=fiter&a=index#spot'>尾页</a>" +"<span style='display:inline-block;border:0;'>" +"<input id='page' style='width:35px;height:25px;text-align:center;' value='1' type='text'>" +"<button type='button' onclick='go()'>跳转</button>" +"</span>" +"</div>").appendTo($(".page1"));}*/

        //bhereshop筛选
        function bhereshop(node){
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=bhereshop",{cateid:$('input[name=cateid]').val()},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                if(msg==0){
                }else{
                    $(".hot img[name=hotimg]").hide();
                    $("#siwen").hide();
                    $(".hot").show();
                    for(var i=0;i<=msg.length;i++){
                        $("<div class='siwentop1div1'>" +
                        "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                        "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                        "<div class='siwentop1div1bottom'>" +
                        "<span class='price'>"+msg[i].price+"</span><br>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a>" +
                        "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                        "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                        "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                        "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                        "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                        "</div>").appendTo($(".hot"));
                    }
                }
            },"json")
        }

        //ajax商家包邮筛选
        function shelve(node){
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=Shelve",{cateid:$('input[name=cateid]').val()},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                if(msg==0){
                }else{
                    $(".hot img[name=hotimg]").hide();
                        $(".page").hide();
                        $("#siwen").hide();
                        $(".hot").show();
                        $(".page1").show();
                        for(var i=0;i<=msg.length;i++){
                            $("<div class='siwentop1div1'>" +
                            "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                            "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                            "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                            "<div class='siwentop1div1bottom'>" +
                            "<span class='price'>"+msg[i].price+"</span><br>" +
                            "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a>" +
                            "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                            "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                            "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                            "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                            "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                            "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                            "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                            "</div>").appendTo($(".hot"));
                        }

                }
            },"json")
        }

        //ajax仅显示有货
        function num(node){
            $(node).ajaxStart(function(){
                $(".hot img[name=hotimg]").show();
            });
            $.post("?c=filter&a=num",{cateid:$('input[name=cateid]').val()},function(msg){
                $(".hot div[class='siwentop1div1']").remove();
                if(msg==0){
                }else{
                    $(".hot img[name=hotimg]").hide();
                    $(".page").hide();
                    $("#siwen").hide();
                    $(".hot").show();
                    $(".page1").show();
                    for(var i=0;i<=msg.length;i++){
                        $("<div class='siwentop1div1'>" +
                        "<div class='siwentop1div1head'><a href='' class='siwentop1div1heada1'>1件</a>" +
                        "<a href='' class='siwentop1div1heada2'>组合装</a></div>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwenimg'><img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' width='230px' height='230px'></a>" +
                        "<div class='siwentop1div1bottom'>" +
                        "<span class='price'>"+msg[i].price+"</span><br>" +
                        "<a href='?c=gd&a=index&id="+msg[i].id+"' class='siwentop1div1bottoma1' title='"+msg[i].title+"'>"+msg[i].title+"</a>" +
                        "<p style='margin: 0px;'></p><a href='' class='siwentop1div1bottoma2'><img src='./public/img/filter/sxy/chu.png'>满1件可参加超值换购</a>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma3'  onclick='shopcar("+msg[i].id+")'>加入购物车</a>" +
                        "<input min='1' type='hidden' name='quantity' value='1' class='form-control input-small'>" +
                        "<a href='javascript:void(0)' class='siwentop1div1bottoma4'><input type='checkbox' name='bobby' value='对比'>对比</a>" +
                        "<a href='' class='siwentop1div1bottoma5'><i><img src='./public/img/filter/sxy/10.png' style='margin-top: 6px'></i></a>" +
                        "<a href='' class='siwentop1div1bottoma6'><i><img src='./public/img/filter/sxy/11.png' style='margin-top: 6px'></i><span></span></a>" +
                        "<a href='' class='siwentop1div1bottoma7'>BhereShop</a></div>" +
                        "</div>").appendTo($(".hot"));
                    }
                }
            },"json")
        }

        //猜你喜欢
        function guess(node){
            $(node).ajaxStart(function(){
                $("img[name=hotimg]").show();
            });
            $.post("?c=filter&a=guess",{cateid:$('input[name=cateid]').val()},function(msg){
                $(".box-product div").remove();
                if(msg==0){
                }else{
                    for(var i=0;i<=msg.length;i++){
                        $("<div><div class='showhim'>" +
                        "<div class='image'><a href='?c=gd&a=index&id="+msg[i].id+"'>" +
                        "<img src='./public/uploads/goods-zoom/"+msg[i][0][0]+"' alt='iMac' /></a>" +
                        "<div class='name'><a href='#'>"+msg[i].title+"</a></div>" +
                        "<div class='priced'>" +
                        "<ul><li>"+msg[i].price+"</li>" +
                        "<li><a href='javascript:void(0)' class='siwentop1div1bottoma3' onclick='shopcar("+msg[i].id+",$(this))'>加入购物车</a></li>" +
                        "</ul>" +
                        "</div>" +
                        "<div style='margin-top:24px;'></div></div>" +
                        "<div class='showme'></div></div></div>").appendTo($(".box-product"));
                    }
                    $("img[name=hotimg]").hide();
                }
            },"json");
        }

        //加入购物车
        function shopcar(data,node){
            var num = $("#quantity").val();
            $.getJSON("?c=car&a=addcar",{id1:data,num1:num},function(msg){
                $("#cart_total").text(msg);
                location.reload();
            });
       

        }

        //分页输入跳转页
        function go(){
            var page = document.getElementById('page');
            location.href = "?c=filter&a=index&p="+page.value+"#siwen";
        }
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
