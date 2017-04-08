<?php
/* Smarty version 3.1.30, created on 2017-03-31 02:49:51
  from "/usr/lamp/apache2/htdocs/template/index/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd534fe39b16_24966351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ebd758f5deff2d6b15e02dcfa6e12d41344c458' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/template/index/index.html',
      1 => 1490887369,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 600,
),true)) {
function content_58dd534fe39b16_24966351 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Bhere Shop</title>
	<link rel="stylesheet" type="text/css" href="./public/css/index/index.css">
	<link rel="stylesheet" type="text/css" href="./public/css/index/css.css" />
	<link rel="stylesheet" type="text/css" href="./public/css/index/style.css">
	<script type="text/javascript" src="./public/js/index/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="./public/js/index/index.js"></script>
	<script type="text/javascript" src="./public/js/index/jquery.nivo.slider.pack.js"></script>
  <style>
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
  	}
  	.xxk_ul{
  	width:93%;
  	height:20%;
  	margin:15px;
  	box-shadow: 4px 4px 6px #ccc;
  	transition:all .3s;
  	}
  	.stand-input{
  		width:364px;
  		height:40px;
  	}
  	.xxk_ul:hover{
  		
  	box-shadow: 3px 3px 3px #888;	
  		
  		}
 .on{
            display:inline-block;width: 25px;height: 25px;background-color: red;text-align: center;line-height: 25px;color: #eeeeee;font-weight: bold;border-radius: 50%;
        }
        
  </style>
</head>
<body>
<!--首页顶部导航条部分-->
<div id="menu">
<ul>  
<li><a href="#">WELCOME BHERESHOP</a>
<div>        
<ul>	
<li><a href="?c=lr&a=select">新用户注册</a></li>
<li><a href="default.htm">一键登录Bhere</a></li>
</ul>
</div>
</li>
<li><a href="?c=pi&a=index">个人中心</a>
<div>
<ul>	
<li><a href="default.htm">已买到的商品</a></li>
<li><a href="default.htm">个性化设置</a></li>
</ul>
</div>
</li>
<li><a href="categories.html">收藏夹</a>
<div>
<ul>	
<li><a href="default.htm">收藏的商品</a></li>
<li><a href="default.htm">收藏的店铺</a></li>
</ul>
</div>
</li>
<li><a href="categories.html">卖家中心</a>
<div>
<ul>	
<li><a href="default.htm">免费开店</a></li>
<li><a href="default.htm">已经卖出的商品</a></li>
<li><a href="default.htm">出售中的商品</a></li>

</ul>
</div>
</li>
<li><a href="categories.html">联系客服</a>
<div>
<ul>	
<li><a href="default.htm">消费者客服</a></li>
<li><a href="default.htm">卖家客服</a></li>
</ul>
</div>
</li>
<li><a href="?c=lr&a=select" style='color:#EA2F2F'>登录/注册Bhere</a><li><a href="?c=car&a=show" style='color:#EA2F2F'>我的购物车</a>
    <li><a href="?c=lr&a=logout" style='color:#EA2F2F'>退出登录</a>
</div>
</li>
</div>
		
<!--商品分类和轮播图-->
<section id="top_second">
<!--无限分类导航-->
<div class="header-wrap">
			<div class="navwrap">
				<div id="nav1">
					<div class="navbar">
						<a class="current" href="#">首页</a>
						<a href="#">推荐</a>
						<a href="#">Bhere闪购</a>
						<a href="#">海购专区</a>
						<a href="#">免运费</a>
						<a href="#">Bhere生活超市</a>
						<a href="#">每日精选</a>
					</div>
					<div class="pros subpage">
						<h2>全部商品分类</h2>
                        <!--无限分类导航部分-->
						<ul class="prosul" id="proinfo">
                            							<li class="goods">
								<a class="ti" href="?c=filter&a=index&cateid=92">
                                    进口食品</a>
								<a class="hot" href="?c=filter&a=index&cateid=352">
                                    水果</a>
								<a href="?c=filter&a=index&cateid=97">
                                    海购</a>
								<div class="prosmore hide">
                                    									<span><em><a href="?c=filter&a=index&cateid=93">
                                        进口饼干
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=94">
                                        威化饼
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=104">
                                        进口糖果
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=106">
                                        海鲜
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=107">
                                        Bhere海购
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=126">
                                        进口牛奶
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=127">
                                        进口酒
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=128">
                                        进口冲饮
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=129">
                                        进口粮油
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=130">
                                        海购
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=131">
                                        乳品烘焙
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=133">
                                        汤圆水饺
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=134">
                                        票劵
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=135">
                                        肉类
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=136">
                                        海鲜
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=137">
                                        蔬菜
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=138">
                                        速食
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=139">
                                        咖啡
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=140">
                                        糕点
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=141">
                                        鱼类
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=142">
                                        牛肉
                                    </a></em></span>
                                    
								</div>
							</li>
                            							<li class="goods">
								<a class="ti" href="?c=filter&a=index&cateid=98">
                                    食品</a>
								<a class="hot" href="?c=filter&a=index&cateid=99">
                                    饮料</a>
								<a href="?c=filter&a=index&cateid=100">
                                    酒</a>
								<div class="prosmore hide">
                                    									<span><em><a href="?c=filter&a=index&cateid=108">
                                        米/油/杂粮
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=109">
                                        方便速食
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=110">
                                        饮料/饮品/茶
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=143">
                                        饼干
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=144">
                                        南北杂货
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=145">
                                        罐头食品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=146">
                                        方便速食
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=147">
                                        方便面
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=148">
                                        火腿肠
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=149">
                                        休闲零食
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=150">
                                        烧烤调料
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=151">
                                        特产中国
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=152">
                                        水产罐头
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=153">
                                        乌龙茶
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=154">
                                        绿茶
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=155">
                                        葡萄酒
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=156">
                                        起泡酒
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=157">
                                        啤酒
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=158">
                                        碳酸饮料
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=159">
                                        功能饮料
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=160">
                                        速溶咖啡
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=161">
                                        牛奶乳品
                                    </a></em></span>
                                    
								</div>
							</li>
                            							<li class="goods">
								<a class="ti" href="?c=filter&a=index&cateid=101">
                                    家装</a>
								<a class="hot" href="?c=filter&a=index&cateid=102">
                                    宠物</a>
								<a href="?c=filter&a=index&cateid=95">
                                    家居</a>
								<div class="prosmore hide">
                                    									<span><em><a href="?c=filter&a=index&cateid=117">
                                        床上用品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=118">
                                        宠物用品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=162">
                                        家纺布艺
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=163">
                                        厨具锅具
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=164">
                                        餐具水具
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=165">
                                        家装建材
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=166">
                                        智能家居
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=167">
                                        家饰
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=168">
                                        四件套
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=169">
                                        枕头枕芯
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=170">
                                        春秋被
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=171">
                                        毛巾浴巾
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=172">
                                        地毯
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=173">
                                        窗帘
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=174">
                                        平底锅
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=175">
                                        刀具剪刀
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=176">
                                        炒锅
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=177">
                                        保温杯
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=178">
                                        密封罐
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=179">
                                        酒具
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=180">
                                        吸顶灯
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=181">
                                        宠物保健
                                    </a></em></span>
                                    
								</div>
							</li>
                            							<li class="goods">
								<a class="ti" href="?c=filter&a=index&cateid=113">
                                    洗护</a>
								<a class="hot" href="?c=filter&a=index&cateid=112">
                                    个人护理</a>
								<a href="?c=filter&a=index&cateid=111">
                                    美妆</a>
								<div class="prosmore hide">
                                    									<span><em><a href="?c=filter&a=index&cateid=114">
                                        美发/护发
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=115">
                                        面部护肤
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=116">
                                        口腔护理
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=122">
                                        沐浴用品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=182">
                                        女性护理
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=183">
                                        面部护理
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=184">
                                        美容工具
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=186">
                                        护垫
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=187">
                                        美甲工具
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=188">
                                        睫毛膏
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=189">
                                        面膜
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=190">
                                        爽肤水
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=191">
                                        牙膏
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=192">
                                        电动牙刷
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=193">
                                        洗发水
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=194">
                                        洗护套装
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=195">
                                        沐浴露
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=196">
                                        沐浴套装
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=197">
                                        洗手液
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=199">
                                        弹力素
                                    </a></em></span>
                                    
								</div>
							</li>
                            							<li class="goods">
								<a class="ti" href="?c=filter&a=index&cateid=123">
                                    男装</a>
								<a class="hot" href="?c=filter&a=index&cateid=124">
                                    女装内衣</a>
								<a href="?c=filter&a=index&cateid=125">
                                    珠宝</a>
								<div class="prosmore hide">
                                    									<span><em><a href="?c=filter&a=index&cateid=200">
                                        精品男装
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=201">
                                        推荐男装
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=202">
                                        女士内衣
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=203">
                                        女士精选上装
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=204">
                                        特色女装
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=205">
                                        腕表眼镜
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=206">
                                        珠宝饰品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=207">
                                        女士裙装
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=208">
                                        男装馆
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=209">
                                        风衣
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=210">
                                        夹克
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=211">
                                        2017新品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=212">
                                        品牌特卖
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=213">
                                        爸爸装
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=215">
                                        情侣睡衣
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=216">
                                        国表
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=217">
                                        黄金
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=218">
                                        翡翠玉石
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=219">
                                        知名女装品牌
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=220">
                                        雅鹿
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=221">
                                        男士内衣
                                    </a></em></span>
                                    
								</div>
							</li>
                            							<li class="goods">
								<a class="ti" href="?c=filter&a=index&cateid=224">
                                    户外运动</a>
								<a class="hot" href="?c=filter&a=index&cateid=223">
                                    箱包</a>
								<a href="?c=filter&a=index&cateid=222">
                                    鞋靴</a>
								<div class="prosmore hide">
                                    									<span><em><a href="?c=filter&a=index&cateid=225">
                                        女靴
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=226">
                                        男鞋
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=227">
                                        女包
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=228">
                                        男包
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=229">
                                        户外装备
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=230">
                                        运动鞋服
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=231">
                                        健身球具
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=232">
                                        钱包/皮具
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=233">
                                        功能箱包
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=234">
                                        平底鞋
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=235">
                                        高跟鞋
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=236">
                                        休闲鞋
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=237">
                                        正装鞋
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=238">
                                        单肩包
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=239">
                                        手提包
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=240">
                                        双肩包
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=241">
                                        公文包
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=242">
                                        旅行包
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=243">
                                        冲锋衣裤
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=244">
                                        综合训练鞋
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=245">
                                        跑步机
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=246">
                                        自行车
                                    </a></em></span>
                                    
								</div>
							</li>
                            							<li class="goods">
								<a class="ti" href="?c=filter&a=index&cateid=248">
                                    数码</a>
								<a class="hot" href="?c=filter&a=index&cateid=249">
                                    电脑办公</a>
								<a href="?c=filter&a=index&cateid=247">
                                    手机</a>
								<div class="prosmore hide">
                                    									<span><em><a href="?c=filter&a=index&cateid=250">
                                        手机通讯
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=251">
                                        大牌手机
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=252">
                                        手机/数码配件
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=253">
                                        影音/电子教育
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=254">
                                        智能产品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=255">
                                        电玩/外设
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=256">
                                        电脑整机
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=257">
                                        办公用品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=258">
                                        iphone7
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=259">
                                        苹果
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=260">
                                        蓝牙耳机
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=261">
                                        数码相机
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=262">
                                        智能手环
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=263">
                                        鼠键套装
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=264">
                                        笔记本
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=265">
                                        台式机
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=266">
                                        投影机
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=267">
                                        体感车
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=268">
                                        扫描仪
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=269">
                                        固态硬盘
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=270">
                                        单反
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=271">
                                        华为
                                    </a></em></span>
                                    
								</div>
							</li>
                            							<li class="goods">
								<a class="ti" href="?c=filter&a=index&cateid=272">
                                    大家电</a>
								<a class="hot" href="?c=filter&a=index&cateid=273">
                                    小家电</a>
								<a href="?c=filter&a=index&cateid=274">
                                    汽车</a>
								<div class="prosmore hide">
                                    									<span><em><a href="?c=filter&a=index&cateid=275">
                                        大家电
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=276">
                                        秋冬电器
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=277">
                                        生活电器
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=278">
                                        中式厨房小家电
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=279">
                                        西式厨房小家电
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=280">
                                        厨卫电器
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=281">
                                        汽车
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=282">
                                        行车记录仪
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=283">
                                        车载电器
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=284">
                                        个护健康
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=285">
                                        平板电视
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=286">
                                        空调
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=287">
                                        暖风机/取暖机
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=288">
                                        豆浆机
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=289">
                                        电火锅
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=290">
                                        空气净化器
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=291">
                                        微波炉
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=292">
                                        榨汁机
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=293">
                                        剃须刀
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=294">
                                        按摩枕
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=295">
                                        电热水器
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=296">
                                        烟灶套餐
                                    </a></em></span>
                                    
								</div>
							</li>
                            							<li class="goods">
								<a class="ti" href="?c=filter&a=index&cateid=299">
                                    成人</a>
								<a class="hot" href="?c=filter&a=index&cateid=298">
                                    医药</a>
								<a href="?c=filter&a=index&cateid=297">
                                    保健滋补</a>
								<div class="prosmore hide">
                                    									<span><em><a href="?c=filter&a=index&cateid=300">
                                        进口保健品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=301">
                                        基础营养
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=302">
                                        传统滋补
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=303">
                                        男士保健/女士保养
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=304">
                                        健康服务
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=305">
                                        常见症状
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=306">
                                        中西药品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=308">
                                        维生素
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=309">
                                        钙片
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=310">
                                        增强免疫力
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=311">
                                        失眠
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=312">
                                        骨质疏松
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=313">
                                        消化系统
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=314">
                                        心脑血管
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=315">
                                        感冒
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=316">
                                        蜂蜜
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=317">
                                        补肾健体
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=318">
                                        美白祛斑
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=319">
                                        男性体检
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=320">
                                        美容整形
                                    </a></em></span>
                                    
								</div>
							</li>
                            							<li class="goods">
								<a class="ti" href="?c=filter&a=index&cateid=323">
                                    母婴</a>
								<a class="hot" href="?c=filter&a=index&cateid=324">
                                    玩具</a>
								<a href="?c=filter&a=index&cateid=325">
                                    童装</a>
								<div class="prosmore hide">
                                    									<span><em><a href="?c=filter&a=index&cateid=326">
                                        奶粉
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=327">
                                        洗护清洁
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=328">
                                        婴儿食品
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=329">
                                        益智玩具
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=330">
                                        童装/童靴
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=331">
                                        童车床/安全防护
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=332">
                                        有机奶粉
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=333">
                                        羊奶粉
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=334">
                                        宝宝洗浴
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=335">
                                        日常护理
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=336">
                                        米粉粥
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=337">
                                        益生菌
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=338">
                                        积木
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=339">
                                        婴儿床
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=340">
                                        尿裤/湿巾
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=342">
                                        婴儿湿巾
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=343">
                                        毛衣
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=344">
                                        冬鞋
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=345">
                                        婴儿服饰
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=347">
                                        连体衣
                                    </a></em></span>
                                    									<span><em><a href="?c=filter&a=index&cateid=348">
                                        婴儿枕
                                    </a></em></span>
                                    
								</div>
							</li>
                            

						</ul>
					</div>
				</div>
			</div>
		</div>		


<div id="wrapper">
<div class="slider-wrapper theme-orman">
<div class="ribbon"></div>
<div id="slider" class="nivoSlider" style="border: 1px solid #444;box-shadow: 0 0 5px 0 #080808;">
<a href="default.htm"><img src="./public/img/index/nav/lb01.jpg" alt="" title="更多精彩" /></a>
<a href="default.htm"><img src="./public/img/index/nav/lb02.jpg" alt="" title="更多优惠" /></a>
<a href="default.htm"><img src="./public/img/index/nav/lb03.jpg" alt="" title="更多详情" /></a>
<a href="default.htm"><img src="./public/img/index/nav/lb04.jpg" alt="" title="欢迎选购" /></a>
<a href="default.htm"><img src="./public/img/index/nav/lb05.jpg" alt="" title="机不可失" /></a>
</div>
<br>
<div class="controlNav_box"></div>
</div>
</div>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>




<!--轮播-->

</section>

	<!--主体部分-->
	<div id="main">
		<header>
			<img src="./public/img/index/logo.png" alt="logo" width='210' height="110"/>
				<div class="head_mid">
					<ul>
						<li>
							<div id="search">
								<div class="search_main">
								<a href="">商品<em></em></a>
                <form action="?c=filter&a=search" method="post" name="form">
								<input id="head_search" name="search"  style="color:#777"  type="text" >
                <button id="s_button" name="gosearch" type="submit">搜索</button>
                </form>
								</div>
								<div class="search_bottom">
								<a href="">满199减100</a>
								<a href="">海购</a>
								<a href="">零食</a>
								<a href="">服装</a>
								<a href="">手机</a>
								<a href="">旅游健身</a>
								<a href="">华为</a>
								<a href="">酱油</a>
								<a href="">洗衣皂</a>
								<a href="">牛奶</a>
								<a href="">户外运动</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div id="cart">
					<div class="heading" style="z-index:10000;">	
					<a href ="?c=car&a=show" style="padding:2px;color:#EA2F2F;font-size:bold;font-size: 15px;color:thistle;font-family: monospace;">我的购物车<img src="./public/img/goods-detail/images/74602894_240.png" width="25px"height="25px"/>
					</a><span id="cart_total" class="on">0</span></a>
					<div id=cart_xxk>
						
														<img src="./public/img/logo/empty.jpg" width="250px" height="125px" style="margin-top: 95px;margin-left: 75px;"/>
													
					</div>		
						</div>
					<div class="content"></div>
				</div>  
		</header>

		<!--中间宣传图片部分-->
		<section id="imgbanner">
		</section>
		<!--wrap包装广告部分-->

		<section id="wrap01">
			<div class="wrap_a">
				<div class="wrap_a_top">
					<a href="javascript:;" class="top_bar"></a>
					<a href="javascript:;"></a>
					<a href="javascript:;"></a>
				</div>
				<div class="wrap_a_zs"></div>
			</div>
			<div class="wrap_b">
				<div class="wrap_b_con">
					<ul>
                        						<li><a href="?c=gd&a=index&id=78">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/
mpic_58c7a7028833b.png" alt=""></div>
								<span></span>
								<p class="dis_name">进口零食</p>
								<p class="dis_sale">0.01起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=79">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58c9172d0044f.png" alt=""></div>
								<span></span>
								<p class="dis_name">进口饼干糕点</p>
								<p class="dis_sale">14.80起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=81">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58ca7de589c6e.png" alt=""></div>
								<span></span>
								<p class="dis_name">新品上市！ </p>
								<p class="dis_sale">0.01起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=82">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58cca95799482.png" alt=""></div>
								<span></span>
								<p class="dis_name">海外原装正品</p>
								<p class="dis_sale">169.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=88">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58cfc29eb77bc.png" alt=""></div>
								<span></span>
								<p class="dis_name">女包barbie韩版</p>
								<p class="dis_sale">59.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=91">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58cfca291e747.png" alt=""></div>
								<span></span>
								<p class="dis_name">针织开衫男</p>
								<p class="dis_sale">279.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=95">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58cfd392851bc.png" alt=""></div>
								<span></span>
								<p class="dis_name">【品质格力，3.15放心购，全场下单立减 】</p>
								<p class="dis_sale">2699.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=100">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58dbb0c6b81f2.png" alt=""></div>
								<span></span>
								<p class="dis_name">新品上市 </p>
								<p class="dis_sale">3800.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=105">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58dc922679f0e.png" alt=""></div>
								<span></span>
								<p class="dis_name">华为P9</p>
								<p class="dis_sale">2859.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=107">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58dc97a43e077.png" alt=""></div>
								<span></span>
								<p class="dis_name">双镜头，大内存，长续航！ </p>
								<p class="dis_sale">1318.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=112">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58dca4e9c088b.png" alt=""></div>
								<span></span>
								<p class="dis_name">心率监测 来电提醒</p>
								<p class="dis_sale">149.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=124">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58dcd1047a650.png" alt=""></div>
								<span></span>
								<p class="dis_name">2016秋装新款</p>
								<p class="dis_sale">49.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=125">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58dcd12c01d10.png" alt=""></div>
								<span></span>
								<p class="dis_name"> 浓香型 52度</p>
								<p class="dis_sale">899.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=127">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58dcd48b7c541.png" alt=""></div>
								<span></span>
								<p class="dis_name">短袖衬衫</p>
								<p class="dis_sale">209.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=129">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58dcd6f56e0ef.png" alt=""></div>
								<span></span>
								<p class="dis_name">小米体感车 防滑真空轮胎，镁铝合金轮毂 都用在一辆平衡车上！ </p>
								<p class="dis_sale">1999.00起购</p>
							</a></li>
                        						<li><a href="?c=gd&a=index&id=130">
								<div class="dis_img"><img width="140" height="140" src="./public/uploads/goods-zoom/mpic_58dcd926d4c4a.png" alt=""></div>
								<span></span>
								<p class="dis_name">原厂正品！精益之作 尽在小米</p>
								<p class="dis_sale">199.00起购</p>
							</a></li>
                        

					</ul>

				</div>
				<a href="javascript:;" class="next_btn" style="outline: medium none;"><em></em></a>
				<a href="javascript:;" class="prev_btn" style="outline: medium none;"><em></em></a>
			</div>
		</section>

		<!--wrpa02部分的图片选择栏-->
		<section id="wrap02">
			<div class="big_pic">
				<a href="?c=gd&a=index&id=106">
					<img src="./public/uploads/goods-zoom/mpic_58dc9413d3ba8.png" alt=""></a>
			</div>
			<div class="small_pic_left">
				<div class="left_top">
					<a href="?c=gd&a=index&id=109">
					<strong>Apple 苹果手表2代 Watch Series 2 iwatch 智能手表 MP06</strong>
					<em> 内置 GPS 心率传感器 感应器 </em>
					<img src="./public/uploads/goods-zoom/mpic_58dca023c757a.png" alt=""></a>
				</div>
				<div class="left_down">
					<a href="?c=gd&a=index&id=110">
					<strong>智能摄像机</strong>
					<em>米家（MIJIA）小白智能摄像机</em>
					<img src="./public/uploads/goods-zoom/mpic_58dca27a50a2b.png" alt=""></a>
				</div>
			</div>
			<div class="small_pic_middle">
				<div class="middle_top">
						<a href="?c=gd&a=index&id=112">
					<strong>心率监测 来电提醒</strong>
					<em>小米手环2</em>
					<img src="./public/uploads/goods-zoom/mpic_58dca4e9c088b.png" alt=""></a>
				</div>
				<div class="middle_down">
						<a href="?c=gd&a=index&id=114">
					<strong> 品质保证</strong>
					<em>厂家直供 9.9mm 薄，可轻松放入衬衫兜里 小巧轻薄 </em>
					<img src="./public/uploads/goods-zoom/mpic_58dca8dc45174.png" alt=""></a>
				</div>
			</div>
			<div class="big_pic">
				<a href="?c=gd&a=index&id=116">
					<img src="./public/uploads/goods-zoom/mpic_58dcab796a8cb.png" alt=""></a>
			</div>
			<div class="small_pic_right">
				<div class="right_top">
						<a href="?c=gd&a=index&id=129">
					<strong>小米体感车 防滑真空轮胎，镁铝合金轮毂 都用在一辆平衡车上！ </strong>
					<em>小米Ninebot九号平衡车</em>
					<img src="./public/uploads/goods-zoom/mpic_58dcd6f56e0ef.png" alt=""></a>
				</div>
				<div class="right_down">
						<a href="?c=gd&a=index&id=130">
					<strong>原厂正品！精益之作 尽在小米</strong>
					<em>新蓝牙音响 无线迷你便携音箱小米车载音响 金色</em>
					<img src="./public/uploads/goods-zoom/mpic_58dcd926d4c4a.png" alt=""></a>
				</div>
			</div>
		</section>

		<div id="beforegoods01"><img src="./public/img/index/goods/wrap02_big01.jpg" alt="清风返场特惠"/></div>


		<!--进口食品部分-->
		<section id="good01" class="floor">
			<div class="top_con">
				<div class="top_con01">
					<a title="进口" class="bt" target="_blank" href="http://channel.yhd.com/jinkou" data-tc="ad.0.0.16072-14649577.1" data-ref="16072_14649577_1">进口</a>
					<a title="食品" class="bt" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%A3%9F%E5%93%81/" data-tc="ad.0.0.16072-25206008.2" data-ref="16072_25206008_2">食品</a>
					<a title="唯有零食不可辜" class="floor_subtitle_wrap" target="_blank" href="http://list.yhd.com/themeBuy.do?themeId=1194" data-tc="ad.0.0.18661-39582172.1" data-ref="18661_39582172_1">
						<em></em>
						<div class="floor_subtitle">
						唯有零食不可辜
						<i></i>
						<span>唯有零食不可辜</span>
						</div>
					</a>
				</div>
				<div class="top_con02">
					<a title="进口酒" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0da-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%85%92/">进口酒</a>|
					<a title="进口冲饮" target="_blank" href="http://list.yhd.com/c22841-0-81174/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/">进口冲饮</a>|
					<a title="进口直采" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k1%E5%8F%B7%E7%9B%B4%E9%87%87/">进口直采</a>|
					<a title="进口茶" target="_blank" href="http://list.yhd.com/c33859-0-81349">进口茶</a>|
					<a title="方便面" target="_blank" href="http://list.yhd.com/c33711-0-81330/">方便面</a>|
					<a title="进口零食" target="_blank" href="http://list.yhd.com/c22860-0-81206/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/">进口零食</a>
				</div>
			</div>
			<div class="a_con">
				<ul class="tag" >
					<a title="进口牛奶" target="_blank" href="http://list.yhd.com/c22881-0-81279/" data-tc="ad.0.0.16073-37616855.1" data-ref="16073_37616855_1">进口牛奶</a>
					<a title="进口饼干" target="_blank" href="http://list.yhd.com/c22887-0-81291/" data-tc="ad.0.0.16073-37616856.2" data-ref="16073_37616856_2">进口饼干</a>
					<a title="进口巧克力" target="_blank" href="http://list.yhd.com/c33827-0-81091/b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16073-37616857.3" data-ref="16073_37616857_3">进口巧克力</a>
					<a title="进口坚果" target="_blank" href="http://list.yhd.com/c33797-0-81144/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16073-37616858.4" data-ref="16073_37616858_4">进口坚果</a>
					<a title="进口咖啡" target="_blank" href="http://list.yhd.com/c22846-0-81182/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16073-37616859.5" data-ref="16073_37616859_5">进口咖啡</a>
					<a title="进口粮油" target="_blank" href="http://list.yhd.com/c22865-0-89427/" data-tc="ad.0.0.16073-37616860.6" data-ref="16073_37616860_6">进口粮油</a>
				</ul>
				<a title="年末狂欢" class="pic" target="_blank" href="http://tracker.yhd.com/ad-dolphin-go/go?v=AF6C9mXOBg77NitE60K9mdOnquxz61wGM_zUUOz13Kl5F_TITT2FA3t1_vYiyAFsgad4S5MWOJpAXgQlJrWJE3l5RGcGwU6-GKdUrbtcR-8Dt_PrRjAFWbUXFrPhx9NlgSMl3W-Ze1XAe-I9Q6UObWbuEJwsZwMGbiYFl-yJjJsferFlYOzZSwxgvY3cP90dyVzQBFa7eP7PPSW3Dl9HSQJlIxSZacBSfMpKVjToHVWaiD4bUrhTAiXmmRqJPvB9VYch3Vd8Njm4_xS5_a4NCg..">
					<h3 class="h3css">年末狂欢</h3>
					<h4>进口德啤爆款直降</h4>
					<img src="./public/img/index/goods/good01/good01_01.jpg" alt="年末狂欢" height="160" width="190">
				</a>
			</div>
			<div class="b_con">
				<div id="jinkou_lunbo" class="goods_lunbo">
					<ul style="left: 0px;" class="img_box" >
						<a title="进口CNY 12.26-1.2"  target="_blank" href="http://cms.yhd.com/sale/yPBXFWXsBDO">
						<img src="./public/img/index/goods/good01/good01_lunbo01.jpg" alt="进口CNY 12.26-1.2" height="360" width="330">
						</a>
						<a title="1号酒会所"  target="_blank" href="http://cms.yhd.com/sale/scCqCzftfnj">
						<img src="./public/img/index/goods/good01/good01_lunbo02.jpg" alt="1号酒会所" height="360" width="330">
						</a>
						<a title="圣诞必备" target="_blank" href="http://cms.yhd.com/sale/MGGcurHEISS">
						<img src="./public/img/index/goods/good01/good01_lunbo03.jpg" alt="圣诞必备" height="360" width="330">
						</a>
					</ul>
					<ul class="trig_box">
						<li>
						<a style="outline: medium none;" class=""><span></span></a>
						<a class=""><span></span></a>
						<a class="cur"><span></span></a>
						</li>
					</ul>
				</div>			
			</div>
			<div class="c_con">
				<a class="pic" title="东远罐头 6.5元" target="_blank" href="http://t.yhd.com/100-0-2003-1-1.html">
					<h3>进口品质团</h3>
					<h4>东远罐头 6.5元</h4>
					<img src="./public/img/index/goods/good01/good01_c_01.jpg" alt="进口品质团" height="110" width="190">
				</a>
				<a class="pic" title="进口特惠" target="_blank" href="http://www.yhd.com/ctg/p/pt1726927-pl1922827">
					<h3>188减88</h3>
					<h4>进口特惠</h4>
					<img src="./public/img/index/goods/good01/good01_c_02.jpg" alt="188减88" height="110" width="190">
				</a>
			</div>
			<div class="d_con">
				<a class="pic" title="1元抢" target="_blank" href="http://t.yhd.com/detailBrand/38745">
					<h3>进口牛奶</h3>
					<h4>1元抢</h4>
					<img src="./public/img/index/goods/good01/good01_d.jpg" alt="进口牛奶" height="290" width="190">
				</a>
			</div>
			<div class="e_con">
				<a class="pic" title="圣诞来袭 0.1元起" target="_blank" href="http://cms.yhd.com/sale/ENbwSSYNTXm">
					<h3>进口咖啡冲饮中心</h3>
					<h4>圣诞来袭 0.1元起</h4>
					<img src="./public/img/index/goods/good01/good01_e_01.jpg" alt="进口咖啡冲饮中心" height="110" width="190">
				</a>
				<a class="pic" title="双人甜蜜 买1送1" target="_blank" href="http://cms.yhd.com/sale/cRWCzmqqfsj">
					<h3>进口糖巧中心</h3>
					<h4>双人甜蜜 买1送1</h4>
					<img src="./public/img/index/goods/good01/good01_e_02.jpg" alt="进口糖巧中心" height="110" width="190">
				</a>
			</div>
		</section>
		<!--活色生鲜部分-->
		<section id="good02" class="floor">
			<div class="top_con">
				<div class="top_con01">
					<a title="活色" class="bt" target="_blank" href="http://channel.yhd.com/jinkou" data-tc="ad.0.0.16072-14649577.1" data-ref="16072_14649577_1">活色</a>
					<a title="生鲜" class="bt" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%A3%9F%E5%93%81/" data-tc="ad.0.0.16072-25206008.2" data-ref="16072_25206008_2">生鲜</a>
					<a title="南北年货经典榜" class="floor_subtitle_wrap" target="_blank" href="http://list.yhd.com/themeBuy.do?themeId=1194" data-tc="ad.0.0.18661-39582172.1" data-ref="18661_39582172_1">
						<em></em>
						<div class="floor_subtitle">
						南北年货经典榜
						<i></i>
						<span>南北年货经典榜</span>
						</div>
					</a>
				</div>
				<div class="top_con02">
					<a title="票券礼券" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0da-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%85%92/">票券礼券</a>|
					<a title="肉类熏腊" target="_blank" href="http://list.yhd.com/c22841-0-81174/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/">肉类熏腊</a>|
					<a title="速冻食品" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k1%E5%8F%B7%E7%9B%B4%E9%87%87/">速冻食品</a>|
					<a title="低温乳品" target="_blank" href="http://list.yhd.com/c33859-0-81349">低温乳品</a>|
					<a title="冷面熟食" target="_blank" href="http://list.yhd.com/c33711-0-81330/">冷面熟食</a>|
					<a title="烘焙甜品" target="_blank" href="http://list.yhd.com/c22860-0-81206/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/">烘焙甜品</a>
				</div>
			</div>
			<div class="a_con">
				<ul class="tag" >
					<a title="车厘子" target="_blank" href="http://list.yhd.com/c22881-0-81279/" >车厘子</a>
					<a title="新鲜水果" target="_blank" href="http://list.yhd.com/c22887-0-81291/" >新鲜水果</a>
					<a title="速冻点心" target="_blank" href="http://list.yhd.com/c33827-0-81091/b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-k/">速冻点心</a>
					<a title="海鲜水产" target="_blank" href="http://list.yhd.com/c33797-0-81144/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/">海鲜水产</a>
					<a title="品质肉类" target="_blank" href="http://list.yhd.com/c22846-0-81182/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/">品质肉类</a>
					<a title="鲜活蛋类" target="_blank" href="http://list.yhd.com/c22865-0-89427/">鲜活蛋类</a>
				</ul>
				<a title="活色生鲜" class="pic" target="_blank" href="http://tracker.yhd.com/ad-dolphin-go/go?v=AF6C9mXOBg77NitE60K9mdOnquxz61wGM_zUUOz13Kl5F_TITT2FA3t1_vYiyAFsgad4S5MWOJpAXgQlJrWJE3l5RGcGwU6-GKdUrbtcR-8Dt_PrRjAFWbUXFrPhx9NlgSMl3W-Ze1XAe-I9Q6UObWbuEJwsZwMGbiYFl-yJjJsferFlYOzZSwxgvY3cP90dyVzQBFa7eP7PPSW3Dl9HSQJlIxSZacBSfMpKVjToHVWaiD4bUrhTAiXmmRqJPvB9VYch3Vd8Njm4_xS5_a4NCg..">
					<h3 class="h3css">活色生鲜</h3>
					<h4>生鲜好货抢</h4>
					<img src="./public/img/index/goods/good02/good02_a.jpg" alt="生鲜好货抢" height="160" width="190">
				</a>
			</div>
			<div class="b_con">
				<div id="huose_lunbo" class="goods_lunbo">
					<ul style="left: 0px;" class="img_box" >
						<a title="进口CNY 12.26-1.2"  target="_blank" href="http://cms.yhd.com/sale/yPBXFWXsBDO">
						<img src="./public/img/index/goods/good02/good02_lunbo01.jpg" alt="进口CNY 12.26-1.2" height="360" width="330">
						</a>
						<a title="1号酒会所"  target="_blank" href="http://cms.yhd.com/sale/scCqCzftfnj">
						<img src="./public/img/index/goods/good02/good02_lunbo02.jpg" alt="1号酒会所" height="360" width="330">
						</a>
						<a title="圣诞必备" target="_blank" href="http://cms.yhd.com/sale/MGGcurHEISS">
						<img src="./public/img/index/goods/good02/good02_lunbo03.jpg" alt="圣诞必备" height="360" width="330">
						</a>
					</ul>
					<ul class="trig_box">
						<li>
						<a style="outline: medium none;" class=""><span></span></a>
						<a class=""><span></span></a>
						<a class="cur"><span></span></a>
						</li>
					</ul>
				</div>			
			</div>
			<div class="c_con">
				<a class="pic" title="东远罐头 6.5元" target="_blank" href="http://t.yhd.com/100-0-2003-1-1.html">
					<h3>辞旧迎新 水果礼盒</h3>
					<h4>0元限量抢</h4>
					<img src="./public/img/index/goods/good02/good02_c_01.jpg" alt="进口品质团" height="110" width="190">
				</a>
				<a class="pic" title="进口特惠" target="_blank" href="http://www.yhd.com/ctg/p/pt1726927-pl1922827">
					<h3>恒都专场</h3>
					<h4>疯狂囤货 四重好礼</h4>
					<img src="./public/img/index/goods/good02/good02_c_02.jpg" alt="188减88" height="110" width="190">
				</a>
			</div>
			<div class="d_con">
				<a class="pic" title="1元抢" target="_blank" href="http://t.yhd.com/detailBrand/38745">
					<h3>活色生鲜排行榜 HOT！</h3>
					<h4>菲力牛排10份1300g 115元</h4>
					<img src="./public/img/index/goods/good02/good02_d.jpg" alt="进口牛奶" height="290" width="190">
				</a>
			</div>
			<div class="e_con">
				<a class="pic" title="圣诞来袭 0.1元起" target="_blank" href="http://cms.yhd.com/sale/ENbwSSYNTXm">
					<h3>新鲜蔬菜水果时令</h3>
					<h4>为你搜罗鲜果</h4>
					<img src="./public/img/index/goods/good02/good02_e_01.jpg" alt="进口咖啡冲饮中心" height="110" width="190">
				</a>
				<a class="pic" title="双人甜蜜 买1送1" target="_blank" href="http://cms.yhd.com/sale/cRWCzmqqfsj">
					<h3>回家吃饭狂欢继续</h3>
					<h4>满100减5元</h4>
					<img src="./public/img/index/goods/good02/good02_e_02.jpg" alt="进口糖巧中心" height="110" width="190">
				</a>
			</div>
		</section>

		<!--食品饮料部分-->
		<section id="good03" class="floor">
			<div class="top_con">
				<div class="top_con01">
					<a title="食品饮料" class="bt" target="_blank" href="http://channel.yhd.com/jinkou" data-tc="ad.0.0.16072-14649577.1" data-ref="16072_14649577_1">食品</a>
					<a title="生鲜" class="bt" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%A3%9F%E5%93%81/" data-tc="ad.0.0.16072-25206008.2" data-ref="16072_25206008_2">饮料</a>
					<a title="年货囤酒正当时" class="floor_subtitle_wrap" target="_blank" href="http://list.yhd.com/themeBuy.do?themeId=1194" data-tc="ad.0.0.18661-39582172.1" data-ref="18661_39582172_1">
						<em></em>
						<div class="floor_subtitle">
						年货囤酒正当时
						<i></i>
						<span>年货囤酒正当时</span>
						</div>
					</a>
				</div>
				<div class="top_con02">
					<a title="厨房调料" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0da-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%85%92/">厨房调料</a>|
					<a title="牛奶" target="_blank" href="http://list.yhd.com/c22841-0-81174/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/">牛奶</a>|
					<a title="白酒" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k1%E5%8F%B7%E7%9B%B4%E9%87%87/">白酒</a>|
					<a title="方便速食" target="_blank" href="http://list.yhd.com/c33859-0-81349">方便速食</a>|
					<a title=" 饮料" target="_blank" href="http://list.yhd.com/c33711-0-81330/">饮料</a>|
					<a title="糖果巧克力" target="_blank" href="http://list.yhd.com/c22860-0-81206/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/">糖果巧克力</a>
				</div>
			</div>
			<div class="a_con">
				<ul class="tag" >
					<a title="粮油" target="_blank" href="http://list.yhd.com/c22881-0-81279/" >粮油</a>
					<a title=" 休闲零食" target="_blank" href="http://list.yhd.com/c22887-0-81291/">休闲零食</a>
					<a title="饼干糕点" target="_blank" href="http://list.yhd.com/c33827-0-81091/b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-k/">饼干糕点</a>
					<a title="水&饮料" target="_blank" href="http://list.yhd.com/c33797-0-81144/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/">水&饮料</a>
					<a title="牛奶乳品" target="_blank" href="http://list.yhd.com/c22846-0-81182/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/">牛奶乳品</a>
					<a title="保健滋补" target="_blank" href="http://list.yhd.com/c22865-0-89427/">保健滋补</a>
				</ul>
				<a title="麦斯威尔意犹未尽" class="pic" target="_blank" href="http://tracker.yhd.com/ad-dolphin-go/go?v=AF6C9mXOBg77NitE60K9mdOnquxz61wGM_zUUOz13Kl5F_TITT2FA3t1_vYiyAFsgad4S5MWOJpAXgQlJrWJE3l5RGcGwU6-GKdUrbtcR-8Dt_PrRjAFWbUXFrPhx9NlgSMl3W-Ze1XAe-I9Q6UObWbuEJwsZwMGbiYFl-yJjJsferFlYOzZSwxgvY3cP90dyVzQBFa7eP7PPSW3Dl9HSQJlIxSZacBSfMpKVjToHVWaiD4bUrhTAiXmmRqJPvB9VYch3Vd8Njm4_xS5_a4NCg..">
					<h3 class="h3css">麦斯威尔意犹未尽</h3>
					<h4>爆款直降</h4>
					<img src="./public/img/index/goods/good03/good03_a.jpg" alt="爆款直降" height="160" width="190">
				</a>
			</div>
			<div class="b_con">
				<div id="spyl_lunbo" class="goods_lunbo">
					<ul style="left: 0px;" class="img_box" >
						<a title="进口CNY 12.26-1.2"  target="_blank" href="http://cms.yhd.com/sale/yPBXFWXsBDO">
						<img src="./public/img/index/goods/good03/good03_lunbo01.jpg" alt="进口CNY 12.26-1.2" height="360" width="330">
						</a>
						<a title="1号酒会所"  target="_blank" href="http://cms.yhd.com/sale/scCqCzftfnj">
						<img src="./public/img/index/goods/good03/good03_lunbo02.jpg" alt="1号酒会所" height="360" width="330">
						</a>
						<a title="圣诞必备" target="_blank" href="http://cms.yhd.com/sale/MGGcurHEISS">
						<img src="./public/img/index/goods/good03/good03_lunbo03.jpg" alt="圣诞必备" height="360" width="330">
						</a>
					</ul>
					<ul class="trig_box">
						<li>
						<a style="outline: medium none;" class=""><span></span></a>
						<a class=""><span></span></a>
						<a class="cur"><span></span></a>
						</li>
					</ul>
				</div>			
			</div>
			<div class="c_con">
				<a class="pic" title="糖果巧克力" target="_blank" href="http://t.yhd.com/100-0-2003-1-1.html">
					<h3>糖果巧克力</h3>
					<h4>第2件半价</h4>
					<img src="./public/img/index/goods/good03/good03_c_01.jpg" alt="进口品质团" height="110" width="190">
				</a>
				<a class="pic" title="1号酒窖" target="_blank" href="http://www.yhd.com/ctg/p/pt1726927-pl1922827">
					<h3>1号酒窖</h3>
					<h4>1号酒窖</h4>
					<img src="./public/img/index/goods/good03/good03_c_02.jpg" alt="188减88" height="110" width="190">
				</a>
			</div>
			<div class="d_con">
				<a class="pic" title="爆款5折起" target="_blank" href="http://t.yhd.com/detailBrand/38745">
					<h3>食品跨年送好礼</h3>
					<h4>爆款5折起</h4>
					<img src="./public/img/index/goods/good03/good03_d.jpg" alt="进口牛奶" height="290" width="190">
				</a>
			</div>
			<div class="e_con">
				<a class="pic" title="大牌直降惠聚" target="_blank" href="http://cms.yhd.com/sale/ENbwSSYNTXm">
					<h3>大牌直降惠聚</h3>
					<h4>咖啡 温暖起航</h4>
					<img src="./public/img/index/goods/good03/good03_e_01.jpg" alt="进口咖啡冲饮中心" height="110" width="190">
				</a>
				<a class="pic" title="保健年货节" target="_blank" href="http://cms.yhd.com/sale/cRWCzmqqfsj">
					<h3>保健年货节</h3>
					<h4>满99减30</h4>
					<img src="./public/img/index/goods/good03/good03_e_02.jpg" alt="进口糖巧中心" height="110" width="190">
				</a>
			</div>
		</section>
		<!--个户厨卫部分-->
		<section id="good04" class="floor">
			<div class="top_con">
				<div class="top_con01">
					<a title="食品饮料" class="bt" target="_blank" href="http://channel.yhd.com/jinkou" data-tc="ad.0.0.16072-14649577.1" data-ref="16072_14649577_1">个护</a>
					<a title="生鲜" class="bt" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%A3%9F%E5%93%81/" data-tc="ad.0.0.16072-25206008.2" data-ref="16072_25206008_2">厨卫</a>
					<a title="年货囤酒正当时" class="floor_subtitle_wrap" target="_blank" href="http://list.yhd.com/themeBuy.do?themeId=1194" data-tc="ad.0.0.18661-39582172.1" data-ref="18661_39582172_1">
						<em></em>
						<div class="floor_subtitle">
						洁癖星人的神器
						<i></i>
						<span>洁癖星人的神器</span>
						</div>
					</a>
				</div>
				<div class="top_con02">
					<a title="护手霜" target="_blank" href="http://list.yhd.com/c7688-0-84494/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16094-41012386.1" data-ref="16094_41012386_1">护手霜</a>|
					<a title="冬季护发" target="_blank" href="http://list.yhd.com/c0-0-132364/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16094-41012390.2" data-ref="16094_41012390_2">冬季护发</a>|
					<a title="纸品" target="_blank" href="http://search.yhd.com/c0-0/k%25E7%25BA%25B8%25E5%2593%2581/1/" data-tc="ad.0.0.16094-42018636.3" data-ref="16094_42018636_3">纸品</a>|
					<a title="换季衣物洗护" target="_blank" href="http://search.yhd.com/c0-0/k%25E8%25A1%25A3%25E7%2589%25A9%25E6%25B8%2585%25E6%25B4%2581/1/" data-tc="ad.0.0.16094-42018637.4" data-ref="16094_42018637_4">换季衣物洗护</a>|
					<a title="滋润面膜" target="_blank" href="http://list.yhd.com/c0-0-132386/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16094-41012393.5" data-ref="16094_41012393_5">滋润面膜</a>|
					<a title="驱蚊驱虫" target="_blank" href="http://list.yhd.com/vc4235-0-0/" data-tc="ad.0.0.16094-42018639.6" data-ref="16094_42018639_6">驱蚊驱虫</a>
				</div>
			</div>
			<div class="a_con">
				<ul class="tag" >
					<a title="发水沐浴" target="_blank" href="http://list.yhd.com/vc3384/c0/b/a-s1-v4-p1-price-d0-mid0-f0d-k">发水沐浴
					</a>
					<a title="女性护理" target="_blank" href="http://list.yhd.com/c5077-0-84472/">女性护理</a>
					<a title="口腔护理" target="_blank" href="http://list.yhd.com/c5072-0-84463/">口腔护理</a>
					<a title="纸品湿巾" target="_blank" href="http://list.yhd.com/c5176-0-84546/">纸品湿巾</a>
					<a title="衣物洗护" target="_blank" href="http://list.yhd.com/c29561-0-84640/">衣物洗护</a>
					<a title="家庭清洁" target="_blank" href="http://search.yhd.com/c0-0/k%25E5%25AE%25B6%25E5%25BA%25AD%25E6%25B8%2585%25E6%25B4%2581/1/">家庭清洁</a>
					</ul>
					<a title="麦斯威尔意犹未尽" class="pic" target="_blank">
					<h3 class="h3css">威露士年货节</h3>
					<h4>满188减88</h4>
					<img src="./public/img/index/goods/good04/good04_a.jpg" alt="爆款直降" height="160" width="190">
				</a>
			</div>
			<div class="b_con">
				<div id="ghcw_lunbo" class="goods_lunbo">
					<ul style="left: 0px;" class="img_box" >
						<a title="进口CNY 12.26-1.2"  target="_blank" href="http://cms.yhd.com/sale/yPBXFWXsBDO">
						<img src="./public/img/index/goods/good04/good04_lunbo01.jpg" alt="进口CNY 12.26-1.2" height="360" width="330">
						</a>
						<a title="1号酒会所"  target="_blank" href="http://cms.yhd.com/sale/scCqCzftfnj">
						<img src="./public/img/index/goods/good04/good04_lunbo02.jpg" alt="1号酒会所" height="360" width="330">
						</a>
						<a title="圣诞必备" target="_blank" href="http://cms.yhd.com/sale/MGGcurHEISS">
						<img src="./public/img/index/goods/good04/good04_lunbo03.jpg" alt="圣诞必备" height="360" width="330">
						</a>
					</ul>
					<ul class="trig_box">
						<li>
						<a style="outline: medium none;" class=""><span></span></a>
						<a class=""><span></span></a>
						<a class="cur"><span></span></a>
						</li>
					</ul>
				</div>			
			</div>
			<div class="c_con">
				<a class="pic" title="自营纸品中心" target="_blank" href="http://t.yhd.com/100-0-2003-1-1.html">
					<h3>自营纸品中心</h3>
					<h4>1.8折起</h4>
					<img src="./public/img/index/goods/good04/good04_c_01.jpg" alt="进口品质团" height="110" width="190">
				</a>
				<a class="pic" title="1号酒窖" target="_blank" href="http://www.yhd.com/ctg/p/pt1726927-pl1922827">
					<h3>衣物家庭清洁3折起抢</h3>
					<h4>再享1元限量抢</h4>
					<img src="./public/img/index/goods/good04/good04_c_02.jpg" alt="188减88" height="110" width="190">
				</a>
			</div>
			<div class="d_con">
				<a class="pic" title="爆款5折起" target="_blank" href="http://t.yhd.com/detailBrand/38745">
					<h3>1元限量抢</h3>
					<h4>个护美妆</h4>
					<img src="./public/img/index/goods/good04/good04_d.jpg" alt="进口牛奶" height="290" width="190">
				</a>
			</div>
			<div class="e_con">
				<a class="pic" title="大牌直降惠聚" target="_blank" href="http://cms.yhd.com/sale/ENbwSSYNTXm">
					<h3>188减88</h3>
					<h4>牙牙健康白又壮</h4>
					<img src="./public/img/index/goods/good04/good04_e_01.jpg" alt="进口咖啡冲饮中心" height="110" width="190">
				</a>
				<a class="pic" title="保健年货节" target="_blank" href="http://cms.yhd.com/sale/cRWCzmqqfsj">
					<h3>冬日温暖洗出来</h3>
					<h4>奥妙金纺满99减33</h4>
					<img src="./public/img/index/goods/good04/good04_e_02.jpg" alt="进口糖巧中心" height="110" width="190">
				</a>
			</div>
		</section>

		<!--母婴玩具部分-->
		<section id="good05" class="floor">
			<div class="top_con">
				<div class="top_con01">
					<a title="活色" class="bt" target="_blank" href="http://channel.yhd.com/jinkou" data-tc="ad.0.0.16072-14649577.1" data-ref="16072_14649577_1">母婴</a>
					<a title="生鲜" class="bt" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%A3%9F%E5%93%81/" data-tc="ad.0.0.16072-25206008.2" data-ref="16072_25206008_2">玩具</a>
					<a title="宝宝冬季不怕冷" class="floor_subtitle_wrap" target="_blank" href="http://list.yhd.com/themeBuy.do?themeId=1194" data-tc="ad.0.0.18661-39582172.1" data-ref="18661_39582172_1">
						<em></em>
						<div class="floor_subtitle">
						宝宝冬季不怕冷
						<i></i>
						<span>宝宝冬季不怕冷</span>
						</div>
					</a>
				</div>
				<div class="top_con02">
					<a title="好奇" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0da-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%85%92/">好奇</a>|
					<a title="营养米粉" target="_blank" href="http://list.yhd.com/c22841-0-81174/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/">营养米粉</a>|
					<a title="奶瓶奶嘴" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k1%E5%8F%B7%E7%9B%B4%E9%87%87/">奶瓶奶嘴</a>|
					<a title="秋冬护理" target="_blank" href="http://list.yhd.com/c33859-0-81349">秋冬护理</a>|
					<a title=" 拉拉裤" target="_blank" href="http://list.yhd.com/c33711-0-81330/"> 拉拉裤</a>|
					<a title="妈咪护理" target="_blank" href="http://list.yhd.com/c22860-0-81206/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/">妈咪护理</a>
				</div>
			</div>
			<div class="a_con">
				<ul class="tag" >
					<a title="车厘子" target="_blank" href="http://list.yhd.com/c22881-0-81279/">洗护清洁</a>
					<a title="新鲜水果" target="_blank" href="http://list.yhd.com/c22887-0-81291/">哺育喂养</a>
					<a title="孕妈用品" target="_blank" href="http://list.yhd.com/c33827-0-81091/b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-k/">孕妈用品</a>
					<a title="玩具天地" target="_blank" href="http://list.yhd.com/c33797-0-81144/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/">玩具天地</a>
					<a title="婴幼儿食品" target="_blank" href="http://list.yhd.com/c22846-0-81182/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/">婴幼儿食品</a>
					<a title="新客福利" target="_blank" href="http://list.yhd.com/c22865-0-89427/">新客福利</a>
				</ul>
				<a title="洗护中心" class="pic" target="_blank" href="http://tracker.yhd.com/ad-dolphin-go/go?v=AF6C9mXOBg77NitE60K9mdOnquxz61wGM_zUUOz13Kl5F_TITT2FA3t1_vYiyAFsgad4S5MWOJpAXgQlJrWJE3l5RGcGwU6-GKdUrbtcR-8Dt_PrRjAFWbUXFrPhx9NlgSMl3W-Ze1XAe-I9Q6UObWbuEJwsZwMGbiYFl-yJjJsferFlYOzZSwxgvY3cP90dyVzQBFa7eP7PPSW3Dl9HSQJlIxSZacBSfMpKVjToHVWaiD4bUrhTAiXmmRqJPvB9VYch3Vd8Njm4_xS5_a4NCg..">
					<h3 class="h3css">洗护中心</h3>
					<h4>满99减33</h4>
					<img src="./public/img/index/goods/good05/good05_a.jpg" alt="满99减33" height="160" width="190">
				</a>
			</div>
			<div class="b_con">
				<div id="mywj_lunbo" class="goods_lunbo">
					<ul style="left: 0px;" class="img_box" >
						<a title="进口CNY 12.26-1.2"  target="_blank" href="http://cms.yhd.com/sale/yPBXFWXsBDO">
						<img src="./public/img/index/goods/good05/good05_luobo01.jpg" alt="进口CNY 12.26-1.2" height="360" width="330">
						</a>
						<a title="1号酒会所"  target="_blank" href="http://cms.yhd.com/sale/scCqCzftfnj">
						<img src="./public/img/index/goods/good05/good05_lunbo02.jpg" alt="1号酒会所" height="360" width="330">
						</a>
						<a title="圣诞必备" target="_blank" href="http://cms.yhd.com/sale/MGGcurHEISS">
						<img src="./public/img/index/goods/good05/good05_lunbo03.jpg" alt="圣诞必备" height="360" width="330">
						</a>
					</ul>
					<ul class="trig_box">
						<li>
						<a style="outline: medium none;" class=""><span></span></a>
						<a class=""><span></span></a>
						<a class="cur"><span></span></a>
						</li>
					</ul>
				</div>	
			</div>
			<div class="c_con">
				<a class="pic" title="纸尿裤中心" target="_blank" href="http://t.yhd.com/100-0-2003-1-1.html">
					<h3>纸尿裤中心</h3>
					<h4>满199减100</h4>
					<img src="./public/img/index/goods/good05/good05_c_01.jpg" alt="进口品质团" height="110" width="190">
				</a>
				<a class="pic" title="进口特惠" target="_blank" href="http://www.yhd.com/ctg/p/pt1726927-pl1922827">
					<h3>奶粉中心</h3>
					<h4>第2件6折</h4>
					<img src="./public/img/index/goods/good05/good05_c_02.jpg" alt="188减88" height="110" width="190">
				</a>
			</div>
			<div class="d_con">
				<a class="pic" title="1元抢" target="_blank" href="http://t.yhd.com/detailBrand/38745">
					<h3>辅食中心</h3>
					<h4>1元限量抢</h4>
					<img src="./public/img/index/goods/good05/good05_d.jpg" alt="进口牛奶" height="290" width="190">
				</a>
			</div>
			<div class="e_con">
				<a class="pic" title="圣诞来袭 0.1元起" target="_blank" href="http://cms.yhd.com/sale/ENbwSSYNTXm">
					<h3>199减100</h3>
					<h4>新年好孕</h4>
					<img src="./public/img/index/goods/good05/good05_e_01.jpg" alt="进口咖啡冲饮中心" height="110" width="190">
				</a>
				<a class="pic" title="双人甜蜜 买1送1" target="_blank" href="http://cms.yhd.com/sale/cRWCzmqqfsj">
					<h3>2折限量抢</h3>
					<h4>满99-10</h4>
					<img src="./public/img/index/goods/good05/good05_e_02.jpg" alt="进口糖巧中心" height="110" width="190">
				</a>
			</div>
		</section>
		<!--家居馆部分-->
		<section id="good06" class="floor">
			<div class="top_con">
				<div class="top_con01">
					<a title="活色" class="bt" target="_blank" href="http://channel.yhd.com/jinkou" data-tc="ad.0.0.16072-14649577.1" data-ref="16072_14649577_1">家居馆</a>
					<a title="冬季里的家庭咖啡屋" class="floor_subtitle_wrap" target="_blank" href="http://list.yhd.com/themeBuy.do?themeId=1194">
						<em></em>
						<div class="floor_subtitle">
						冬季里的家庭咖啡屋
						<i></i>
						<span>冬季里的家庭咖啡屋</span>
						</div>
					</a>
				</div>
				<div class="top_con02">
					<a title="好奇" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0da-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%85%92/">居家拖鞋</a>|
					<a title="营养米粉" target="_blank" href="http://list.yhd.com/c22841-0-81174/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/">口罩</a>|
					<a title="奶瓶奶嘴" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k1%E5%8F%B7%E7%9B%B4%E9%87%87/">暖宝宝</a>|
					<a title="秋冬护理" target="_blank" href="http://list.yhd.com/c33859-0-81349">保温杯</a>|
					<a title=" 拉拉裤" target="_blank" href="http://list.yhd.com/c33711-0-81330/"> 秋冬被</a>|
					<a title="妈咪护理" target="_blank" href="http://list.yhd.com/c22860-0-81206/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/">居家收纳</a>
				</div>
			</div>
			<div class="a_con">
				<ul class="tag" >
					<a title="车厘子" target="_blank" href="http://list.yhd.com/c22881-0-81279/">餐具水具</a>
					<a title="新鲜水果" target="_blank" href="http://list.yhd.com/c22887-0-81291/">厨具锅具</a>
					<a title="孕妈用品" target="_blank" href="http://list.yhd.com/c33827-0-81091/b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-k/">床上用品</a>
					<a title="玩具天地" target="_blank" href="http://list.yhd.com/c33797-0-81144/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/">家纺布艺</a>
					<a title="婴幼儿食品" target="_blank" href="http://list.yhd.com/c22846-0-81182/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/"> 家装建材</a>
					<a title="新客福利" target="_blank" href="http://list.yhd.com/c22865-0-89427/">宠物用品</a>
				</ul>
				<a title="洗护中心" class="pic" target="_blank" href="http://tracker.yhd.com/ad-dolphin-go/go?v=AF6C9mXOBg77NitE60K9mdOnquxz61wGM_zUUOz13Kl5F_TITT2FA3t1_vYiyAFsgad4S5MWOJpAXgQlJrWJE3l5RGcGwU6-GKdUrbtcR-8Dt_PrRjAFWbUXFrPhx9NlgSMl3W-Ze1XAe-I9Q6UObWbuEJwsZwMGbiYFl-yJjJsferFlYOzZSwxgvY3cP90dyVzQBFa7eP7PPSW3Dl9HSQJlIxSZacBSfMpKVjToHVWaiD4bUrhTAiXmmRqJPvB9VYch3Vd8Njm4_xS5_a4NCg..">
					<h3 class="h3css">萌宠迎双旦</h3>
					<h4>限时抢购</h4>
					<img src="./public/img/index/goods/good06/good06_a.jpg" alt="满99减33" height="160" width="190">
				</a>
			</div>
			<div class="b_con">
				<div id="jiaju_lunbo" class="goods_lunbo">
					<ul style="left: 0px;" class="img_box" >
						<a title="进口CNY 12.26-1.2"  target="_blank" href="http://cms.yhd.com/sale/yPBXFWXsBDO">
						<img src="./public/img/index/goods/good06/good06_luobo01.jpg" alt="进口CNY 12.26-1.2" height="360" width="330">
						</a>
						<a title="1号酒会所"  target="_blank" href="http://cms.yhd.com/sale/scCqCzftfnj">
						<img src="./public/img/index/goods/good06/good06_luobo02.jpg" alt="1号酒会所" height="360" width="330"/>
						</a>
						<a title="圣诞必备" target="_blank" href="http://cms.yhd.com/sale/MGGcurHEISS">
						<img src="./public/img/index/goods/good06/good06_luobo03.jpg" alt="" height="360" width="330">
						</a>
					</ul>
					<ul class="trig_box">
						<li>
						<a style="outline: medium none;" class=""><span></span></a>
						<a class=""><span></span></a>
						<a class="cur"><span></span></a>
						</li>
					</ul>
				</div>	
			</div>
			<div class="c_con">
				<a class="pic" title="纸尿裤中心" target="_blank" href="http://t.yhd.com/100-0-2003-1-1.html">
					<h3>暖冬盛惠</h3>
					<h4>满199赠好礼</h4>
					<img src="./public/img/index/goods/good06/good06_c_01.jpg" alt="进口品质团" height="110" width="190">
				</a>
				<a class="pic" title="进口特惠" target="_blank" href="http://www.yhd.com/ctg/p/pt1726927-pl1922827">
					<h3>尚品家装钜惠日</h3>
					<h4>品牌钜惠 低价不停</h4>
					<img src="./public/img/index/goods/good06/good06_c_02.jpg" alt="188减88" height="110" width="190">
				</a>
			</div>
			<div class="d_con">
				<a class="pic" title="1元抢" target="_blank" href="http://t.yhd.com/detailBrand/38745">
					<h3>富安娜家纺品牌盛典</h3>
					<h4>1元起秒四件套</h4>
					<img src="./public/img/index/goods/good06/good06_d.jpg" alt="进口牛奶" height="290" width="190">
				</a>
			</div>
			<div class="e_con">
				<a class="pic" title="圣诞来袭 0.1元起" target="_blank" href="http://cms.yhd.com/sale/ENbwSSYNTXm">
					<h3>景德镇陶瓷场</h3>
					<h4>跨年好礼速给你</h4>
					<img src="./public/img/index/goods/good06/good06_e_01.jpg" alt="进口咖啡冲饮中心" height="110" width="190">
				</a>
				<a class="pic" title="双人甜蜜 买1送1" target="_blank" href="http://cms.yhd.com/sale/cRWCzmqqfsj">
					<h3>萌宠 总动员</h3>
					<h4>满199减80，90减40</h4>
					<img src="./public/img/index/goods/good06/good06_e_02.jpg" alt="进口糖巧中心" height="110" width="190">
				</a>
			</div>
		</section>
		<!--流行百货部分-->
		<section id="good07" class="floor02">
			<div class="top_con">
				<div class="top_con01">
					<a class="bt" href="http://lady.yhd.com" data-tc="ad.0.0.16107-40238684.1" data-ref="16107_40238684_1" title="流行百货" target="_blank">流行百货</a>
					<a title="和过去的一年说再见" class="floor_subtitle_wrap" target="_blank" href="http://cms.yhd.com/sale/LOHcuQrgIwO" >
					<em></em>
					<div class="floor_subtitle">
					和过去的一年说再见
					<i></i>
					<span>和过去的一年说再见</span>
					</div>
					</a>
				</div>
				<div class="top_con02">
					<a title="好奇" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0da-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%85%92/">秋连衣裙</a>|
					<a title="营养米粉" target="_blank" href="http://list.yhd.com/c22841-0-81174/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/">羽绒服男</a>|
					<a title="奶瓶奶嘴" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k1%E5%8F%B7%E7%9B%B4%E9%87%87/">太阳镜</a>|
					<a title="秋冬护理" target="_blank" href="http://list.yhd.com/c33859-0-81349">秋冬短靴</a>|
					<a title=" 拉拉裤" target="_blank" href="http://list.yhd.com/c33711-0-81330/"> 女包新品</a>|
					<a title="妈咪护理" target="_blank" href="http://list.yhd.com/c22860-0-81206/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/">冲锋衣裤</a>
				</div>
			</div>
			<div class="a_con">
				<ul class="tag">
					<a href="http://lady.yhd.com/" data-tc="ad.0.0.16108-40238779.1" data-ref="16108_40238779_1" title="女装新品" target="_blank">女装新品</a>
					<a href="http://man.yhd.com/" data-tc="ad.0.0.16108-40238806.2" data-ref="16108_40238806_2" title="品质男装" target="_blank">品质男装</a>
					<a href="http://list.yhd.com/c22906-0-84292/b/a-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16108-37526521.3" data-ref="16108_37526521_3" title="大牌箱包" target="_blank">大牌箱包</a>
					<a href="http://sport.yhd.com/" data-tc="ad.0.0.16108-40238801.4" data-ref="16108_40238801_4" title="运动户外" target="_blank">运动户外</a>
					<a href="http://list.yhd.com/c32258-0-84328/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16108-37526522.5" data-ref="16108_37526522_5" title="珠宝饰品" target="_blank">珠宝饰品</a>
					<a href="http://shoes.yhd.com" data-tc="ad.0.0.16108-39426354.6" data-ref="16108_39426354_6" title="男女鞋靴" target="_blank">男女鞋靴</a>
				</ul>
				<a id="a_con_down" class="pic" href="http://item.yhd.com/item/65961486" title="iPhone7 真低价" target="_blank">
				<ul class="down_ul">
					<li>
					<img src="./public/img/index/goods/good07/good07_a_01.jpg" alt="">
					<img src="./public/img/index/goods/good07/good07_a_02.jpg" alt="">
					<img src="./public/img/index/goods/good07/good07_a_03.jpg" alt="">
					<img src="./public/img/index/goods/good07/good07_a_04.png" alt="">
					</li>
				</ul>
				</a>
			</div>
			<div class="b_con">
				<div id="pop_lunbo" class="goods_lunbo">
					<ul style="left: 0px;" class="img_box" >
						<a title="进口CNY 12.26-1.2"  target="_blank" href="http://cms.yhd.com/sale/yPBXFWXsBDO">
						<img src="./public/img/index/goods/good07/good07_lunbo01.jpg" alt="进口CNY 12.26-1.2" height="360" width="330">
						</a>
						<a title="1号酒会所"  target="_blank" href="http://cms.yhd.com/sale/scCqCzftfnj">
						<img src="./public/img/index/goods/good07/good07_lunbo02.jpg" alt="1号酒会所" height="360" width="330"/>
						</a>
						<a title="圣诞必备" target="_blank" href="http://cms.yhd.com/sale/MGGcurHEISS">
						<img src="./public/img/index/goods/good07/good07_lunbo03.jpg" alt="圣诞必备" height="360" width="330">
						</a>
					</ul>
					<ul class="trig_box">
						<li>
						<a style="outline: medium none;" class=""><span></span></a>
						<a class=""><span></span></a>
						<a class="cur"><span></span></a>
						</li>
					</ul>
				</div>	
			</div>
			<div class="g_con">
				<a class="pic" title="女装跨年狂欢购" target="_blank" href="http://lady.yhd.com/" data-recordtracker="1" data-tc="ad.0.0.17588-41866672.1" data-ref="17588_41866672_1">
				<h3>时尚女装</h3>
				<h4>女装跨年狂欢购</h4>
				<img src="./public/img/index/goods/good07/good07_g.jpg" alt="时尚女装" height="290" width="190">
				</a>
			</div>
			<div class="d_con">
				<a class="pic" title="箱包配饰 1折起" target="_blank" href="http://bag.yhd.com/" data-recordtracker="1" data-tc="ad.0.0.17590-41981606.1" data-ref="17590_41981606_1">
				<h3>年终大促</h3>
				<h4>箱包配饰 1折起</h4>
				<img src="./public/img/index/goods/good07/good07_d.jpg" alt="年终大促" height="290" width="190">
				</a>
			</div>
			<div class="e_con">
				<a class="pic" title="特别的润给特别的你" target="_blank" href="http://t.yhd.com/detailBrand/38444">
				<h3>全场1元起</h3>
				<h4>特别的润给特别的你</h4>
				<img src="./public/img/index/goods/good07/good07_e_01.jpg" alt="全场1元起" height="110" width="190">
				</a>
			</div>
			<div class="f_con">
				<div class="f1">
					<a class="pic" title="专柜正品234元起"  target="_blank" href="http://s.yhd.com/list/42210" data-recordtracker="1">
					<h3 class="pop_f_h3">施华洛世奇年终特卖</h3>
					<h4>专柜正品234元起</h4>
					<img  src="./public/img/index/goods/good07/good07_f1.png" alt="施华洛世奇年终特卖" height="110" width="190">
					</a>
				</div>
				<div class="f2">
					<a class="pic2" href="http://shoes.yhd.com/" title="冬季穿搭拼心机" target="_blank">
					<div class="f1">
					<h3>男女鞋靴馆</h3>
					<h4>冬季穿搭拼心机</h4>
					<em class="sale_txt">专柜大牌1折起</em>
					</div>
					<img alt="男女鞋靴馆" src="./public/img/index/goods/good07/good07_f2.jpg" height="166" width="130">
					</a>
				</div>
				<div class="f3">
					<a class="pic" title="低至3折起" target="_blank" href="http://sport.yhd.com/">
					<h3>运动大牌 年终盛典</h3>
					<h4>低至3折起</h4>
					<img src="./public/img/index/goods/good07/good07_f3.jpg" alt="运动大牌 年终盛典" height="110" width="190">
					</a>
				</div>
				<div class="f4">
					<a class="pic" title="全场19.9元起" target="_blank" href="http://s.yhd.com/list/42369">
					<h3>时尚手表年终特卖</h3>
					<h4>全场19.9元起</h4>
					<img src="./public/img/index/goods/good07/good07_f4.jpg" alt="时尚手表年终特卖" height="110" width="190">
					</a>
				</div>
				<div class="f5">
					<a class="pic" title="领券立减100" target="_blank" href="http://cms.yhd.com/sale/yyLcIIuQuHB">
					<h3>0元限量秒</h3>
					<h4>领券立减100</h4>
					<img src="./public/img/index/goods/good07/good07_f5.jpg" alt="0元限量秒" height="290" width="190">
					</a>
				</div>
			</div>
		</section>
		<!--手机家电-->
		<section id="good08" class="floor02">
			<div class="top_con">
				<div class="top_con01">
					<a class="bt" href="http://lady.yhd.com" data-tc="ad.0.0.16107-40238684.1" data-ref="16107_40238684_1" title="流行百货" target="_blank">手机家电</a>
					<a title="和过去的一年说再见" class="floor_subtitle_wrap" target="_blank" href="http://cms.yhd.com/sale/LOHcuQrgIwO" >
					<em></em>
					<div class="floor_subtitle">
					那些年我败过的耳机
					<i></i>
					<span>那些年我败过的耳机</span>
					</div>
					</a>
				</div>
				<div class="top_con02">
					<a title="好奇" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0da-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%85%92/">iPhone7</a>|
					<a title="营养米粉" target="_blank" href="http://list.yhd.com/c22841-0-81174/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/">畅享6S</a>|
					<a title="奶瓶奶嘴" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k1%E5%8F%B7%E7%9B%B4%E9%87%87/">游戏本</a>|
					<a title="秋冬护理" target="_blank" href="http://list.yhd.com/c33859-0-81349">kindle</a>|
					<a title=" 拉拉裤" target="_blank" href="http://list.yhd.com/c33711-0-81330/"> 家电特惠直降</a>|
					<a title="妈咪护理" target="_blank" href="http://list.yhd.com/c22860-0-81206/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/">特价大家电</a>
				</div>
			</div>
			<div class="a_con">
				<ul class="tag">
					<a href="http://lady.yhd.com/" data-tc="ad.0.0.16108-40238779.1" data-ref="16108_40238779_1" title="女装新品" target="_blank">手机</a>
					<a href="http://man.yhd.com/" data-tc="ad.0.0.16108-40238806.2" data-ref="16108_40238806_2" title="品质男装" target="_blank">合约机送300话费</a>
					<a href="http://list.yhd.com/c22906-0-84292/b/a-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16108-37526521.3" data-ref="16108_37526521_3" title="大牌箱包" target="_blank">平板电脑</a>
					<a href="http://sport.yhd.com/" data-tc="ad.0.0.16108-40238801.4" data-ref="16108_40238801_4" title="运动户外" target="_blank">小米手环2</a>
					<a href="http://list.yhd.com/c32258-0-84328/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16108-37526522.5" data-ref="16108_37526522_5" title="珠宝饰品" target="_blank">空气净化器</a>
					<a href="http://shoes.yhd.com" data-tc="ad.0.0.16108-39426354.6" data-ref="16108_39426354_6" title="男女鞋靴" target="_blank">平板电视</a>
				</ul>
				<a id="a_con_down" class="pic" href="http://item.yhd.com/item/65961486" title="iPhone7 真低价" target="_blank">
				<h3 class="down_h3">128G 5788元起</h3>
				<h4>iPhone7 真低价</h4>
				<img src="./public/img/index/goods/good08/good08_a.jpg" alt="时尚女装">
				</a>
			</div>
			<div class="b_con">
				<div id="sjjd_lunbo" class="goods_lunbo">
					<ul style="left: 0px;" class="img_box" >
						<a title="进口CNY 12.26-1.2"  target="_blank" href="http://cms.yhd.com/sale/yPBXFWXsBDO">
						<img src="./public/img/index/goods/good08/good08_lunbo01.jpg" alt="进口CNY 12.26-1.2" height="360" width="330">
						</a>
						<a title="1号酒会所"  target="_blank" href="http://cms.yhd.com/sale/scCqCzftfnj">
						<img src="./public/img/index/goods/good08/good08_lunbo02.jpg" alt="1号酒会所" height="360" width="330"/>
						</a>
						<a title="圣诞必备" target="_blank" href="http://cms.yhd.com/sale/MGGcurHEISS">
						<img src="./public/img/index/goods/good08/good08_lunbo03.jpg" alt="圣诞必备" height="360" width="330">
						</a>
					</ul>
					<ul class="trig_box">
						<li>
						<a class=""><span></span></a>
						<a class=""><span></span></a>
						<a class=""><span></span></a>
						</li>
					</ul>
				</div>	
			</div>
			<div class="g_con">
				<a class="pic" title="女装跨年狂欢购" target="_blank" href="http://lady.yhd.com/" data-recordtracker="1">
				<h3>0元购 斐讯路由器</h3>
				<h4 class="h4css">wifi 穿墙王</h4>
				<img src="./public/img/index/goods/good08/good08_g.jpg" alt="时尚女装">
				</a>
			</div>
			<div class="c_con">
				<a class="pic" title="箱包配饰 1折起" target="_blank" href="http://bag.yhd.com/" data-recordtracker="1" data-tc="ad.0.0.17590-41981606.1" data-ref="17590_41981606_1">
				<img src="./public/img/index/goods/good08/good08_c_01.jpg" alt="年终大促">
				<h3>华为P9 4+64G 全网通</h3>
				<h4>￥3388</h4>
				</a>
				<a class="pic" title="特别的润给特别的你" target="_blank" href="http://t.yhd.com/detailBrand/38444">
				<img src="./public/img/index/goods/good08/good08_c_02.jpg" alt="全场1元起">
				<h3 class="h3css">Apple 苹果 iPad Mini2 32G</h3>
				<h4>￥1788</h4>
				</a>
			</div>
			<div class="c_con">
				<a class="pic" title="特别的润给特别的你" target="_blank" href="http://t.yhd.com/detailBrand/38444">
				<img src="./public/img/index/goods/good08/good08_e_01.jpg" alt="全场1元起">
				<h3>【中国电信购机送费】Apple 苹果 iPhone 7 Plus 128G 金色 移动联通电信4G手机</h3>
				<h4>￥6688</h4>
				</a>
				<a class="pic" title="特别的润给特别的你" target="_blank" href="http://t.yhd.com/detailBrand/38444">
				<img src="./public/img/index/goods/good08/good08_e_02.jpg" alt="全场1元起">
				<h3 class="h3css">Apple 苹果手表 Watch Series 1 iwatch 智能手表 MP022CH/A (38毫米深空灰色铝金属表壳搭配黑色运动型表带)</h3>
				<h4>￥2078</h4>
				</a>
			</div>
			<div class="f_con">
				<div class="f1">
					<p class="f1_p">1号店电器独家权益</p>
					<div class="f1_img" data-kccnt="2" >
					<a href="http://cms.yhd.com/sale/ovxwSNSpTto" title="苹果专卖店">
					<img alt="苹果专卖店" src="./public/img/index/goods/good08/good08_f1_01.jpg">
					</a>
					<a href="http://cms.yhd.com/sale/iMScyyEguTM" title="以旧换新" data-ref="16127_41866467_2" target="_blank">
					<img alt="以旧换新" src="./public/img/index/goods/good08/good08_f1_02.jpg">
					</a>
					</div>
				</div>
				<div class="f2">
					<a class="pic2" href="http://shoes.yhd.com/" title="冬季穿搭拼心机" target="_blank">
					<div class="f1">
					<h3>压轴年货迎新年</h3>
					<h4>全场低至29元起</h4>
					<em class="sale_txt">两件88折</em>
					</div>
					<img alt="男女鞋靴馆" src="./public/img/index/goods/good08/good08_f2.jpg">
					</a>
				</div>
				<div class="c_con">
					<a class="pic" title="低至3折起" target="_blank" href="http://sport.yhd.com/">
					<img src="./public/img/index/goods/good08/good08_f3_01.jpg" alt="运动大牌 年终盛典">
					<h3>美的红玉电水壶</h3>
					<h4>￥89</h4>
					</a>
				</div>
				<div class="c_con">
					<a class="pic" title="全场19.9元起" target="_blank" href="http://s.yhd.com/list/42369">
					<img src="./public/img/index/goods/good08/good08_f4.jpg" alt="时尚手表年终特卖">
					<h3>朗康足浴盆 数码恒温加热</h3>
					<h4>￥159</h4>
					</a>
				</div>
				<div class="c_con">
					<a class="pic" title="领券立减100" target="_blank" href="http://cms.yhd.com/sale/yyLcIIuQuHB">
					<img src="./public/img/index/goods/good08/good08_f3_02.jpg" alt="0元限量秒">
					<h3>奔腾电饭煲4L智能迷你饭锅3-4人</h3>
					<h4>￥159</h4>
					</a>
				</div>
			</div>
		<!--团部分-->
		<section id="good09" class="floor">
			<div class="top_con">
				<div class="top_con01">
					<a class="bt" href="http://lady.yhd.com" data-tc="ad.0.0.16107-40238684.1" data-ref="16107_40238684_1" title="流行百货" target="_blank">精彩团购</a>
				</div>
				<div class="top_con02">
					<a title="好奇" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0da-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%85%92/">大牌纸尿裤</a>|
					<a title="营养米粉" target="_blank" href="http://list.yhd.com/c22841-0-81174/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/">新鲜水果</a>|
					<a title="奶瓶奶嘴" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k1%E5%8F%B7%E7%9B%B4%E9%87%87/">进口牛奶</a>|
					<a title="秋冬护理" target="_blank" href="http://list.yhd.com/c33859-0-81349">iPhone疯抢</a>|
					<a title=" 拉拉裤" target="_blank" href="http://list.yhd.com/c33711-0-81330/">个人护理</a>|
					<a title="妈咪护理" target="_blank" href="http://list.yhd.com/c22860-0-81206/b/a-s1-v4-p1-price-d0-f06-m1-rt0-pid-mid0-k/">生活电器</a>
				</div>
			</div>
			<div class="a_con">
				<ul class="tag">
					<a href="http://lady.yhd.com/" data-tc="ad.0.0.16108-40238779.1" data-ref="16108_40238779_1" title="女装新品" target="_blank">进口食品</a>
					<a href="http://man.yhd.com/" data-tc="ad.0.0.16108-40238806.2" data-ref="16108_40238806_2" title="品质男装" target="_blank">美食保健</a>
					<a href="http://list.yhd.com/c22906-0-84292/b/a-s1-v4-p1-price-d0-f0-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16108-37526521.3" data-ref="16108_37526521_3" title="大牌箱包" target="_blank">家居日用</a>
					<a href="http://sport.yhd.com/" data-tc="ad.0.0.16108-40238801.4" data-ref="16108_40238801_4" title="运动户外" target="_blank">美妆护肤</a>
					<a href="http://list.yhd.com/c32258-0-84328/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16108-37526522.5" data-ref="16108_37526522_5" title="珠宝饰品" target="_blank">精品女装</a>
					<a href="http://shoes.yhd.com" data-tc="ad.0.0.16108-39426354.6" data-ref="16108_39426354_6" title="男女鞋靴" target="_blank">手机数码</a>
				</ul>
				<a id="a_con_down" class="pic" href="http://item.yhd.com/item/65961486" title="iPhone7 真低价" target="_blank">
				<h3 class="down_h3">新年新颜 为爱而妆</h3>
				<h4>新年新颜 为爱而妆</h4>
				<img src="./public/img/index/goods/good09/good09_01.jpg" alt="时尚女装">
				</a>
			</div>
			<div class="k_con">
				<a href="http://t.yhd.com/detailBrand/38718" data-grouponbrandid="38718" title="美的自营品牌团" target="_blank">
				<img alt="美的自营品牌团" src="./public/img/index/goods/good09/good09_02.jpg" height="180" width="330">
				<span><b>3.2</b>折起</span>
				<em><i>1994</i>人已购买</em>
				</a>
				<a href="http://t.yhd.com/detailBrand/38507" data-grouponbrandid="38507" title="百草味品牌团" target="_blank">
				<img alt="百草味品牌团" src="./public/img/index/goods/good09/good09_03.jpg" height="180" width="330">
				<span><b>0.5</b>折起</span>
				<em><i>71346</i>人已购买</em>
				</a>
			</div>
			<div class="c_con pro_con">
			<a href="http://t.yhd.com/detail/4043508" title="好想你 【买一送一】枣夹核桃 红枣夹核桃仁218g核桃夹心枣和田枣夹核桃" target="_blank">
			<img alt="好想你 【买一送一】枣夹核桃 红枣夹核桃仁218g核桃夹心枣和田枣夹核桃" src="./public/img/index/goods/good09/good09_04.jpg">
			<p class="p1">好想你 【买一送一】枣夹核桃 红枣夹核桃仁218g核桃夹心枣和田枣夹核桃</p>
			<p class="p2">
				<em><i>4277</i>人已购买</em>
				¥<b>36.8</b>
				<span>参考价:</span>
				<del style="text-decoration:none;">¥108</del>
				</p>
			</a>
			<a href="http://t.yhd.com/detail/4023102" title="花王/Merries XL38拉拉裤 日本原装进口花王妙而舒拉拉裤 38片装" target="_blank">
			<img alt="花王/Merries XL38拉拉裤 日本原装进口花王妙而舒拉拉裤 38片装" src="./public/img/index/goods/good09/good09_05.png">
			<p class="p1">花王/Merries XL38拉拉裤 日本原装进口花王妙而舒拉拉裤 38片装</p>
			<p class="p2">
				<em><i>59</i>人已购买</em>
				¥<b>97</b><span>参考价:</span>
				<del style="text-decoration:none;">¥158</del>
				</p>
			</a>
			</div>
			<div class="c_con pro_con">
				<a href="http://t.yhd.com/detail/4043508" title="好想你 【买一送一】枣夹核桃 红枣夹核桃仁218g核桃夹心枣和田枣夹核桃" target="_blank">
				<img alt="好想你 【买一送一】枣夹核桃 红枣夹核桃仁218g核桃夹心枣和田枣夹核桃" src="./public/img/index/goods/good09/good09_06.jpg">
				<p class="p1">Bld barraisle/巴啦岛 冬季男士加厚外套 男装新款保暖加厚抗寒羽绒棉服男 团购</p>
				<p class="p2">
					<em><i>605</i>人已购买</em>
					¥<b>89</b>
					<span>参考价:</span>
					<del style="text-decoration:none;">¥599</del>
					</p>
				</a>
				<a href="http://t.yhd.com/detail/4023102" title="花王/Merries XL38拉拉裤 日本原装进口花王妙而舒拉拉裤 38片装" target="_blank">
				<img alt="花王/Merries XL38拉拉裤 日本原装进口花王妙而舒拉拉裤 38片装" src="./public/img/index/goods/good09/good09_07.jpg">
				<p class="p1">圣罗兰 YSL迷魅方管口红唇膏1.3g小样滋润保湿持久不脱色</p>
				<p class="p2">
					<em><i>516</i>人已购买</em>
					¥<b>85</b><span>参考价:</span>
					<del style="text-decoration:none;">¥288</del>
					</p>
				</a>
			</div>
			<div class="c_con pro_con">
				<a href="http://t.yhd.com/detail/4043508" title="好想你 【买一送一】枣夹核桃 红枣夹核桃仁218g核桃夹心枣和田枣夹核桃" target="_blank">
				<img alt="好想你 【买一送一】枣夹核桃 红枣夹核桃仁218g核桃夹心枣和田枣夹核桃" src="./public/img/index/goods/good09/good09_08.jpg">
				<p class="p1">Tempo /得宝纸巾软包抽纸 无味4层软抽100抽*（16+2）包箱装 餐巾纸面巾纸 【新品上市】</p>
				<p class="p2">
					<em><i>450</i>人已购买</em>
					¥<b>69.9</b>
					<span>参考价:</span>
					<del style="text-decoration:none;">¥170</del>
					</p>
				</a>
				<a href="http://t.yhd.com/detail/4023102" title="花王/Merries XL38拉拉裤 日本原装进口花王妙而舒拉拉裤 38片装" target="_blank">
				<img alt="花王/Merries XL38拉拉裤 日本原装进口花王妙而舒拉拉裤 38片装" src="./public/img/index/goods/good09/good09_09.jpg">
				<p class="p1">欧井UJing OJK330空气净化器家用杀菌除甲醛二手烟PM2.5除臭卧室办公室轻音负离子</p>
				<p class="p2">
					<em><i>56</i>人已购买</em>
					¥<b>699</b><span>参考价:</span>
					<del style="text-decoration:none;">¥1080</del>
					</p>
				</a>
			</div>
		</section>

<section id="good10" class="floor">
<div class="container">
<div class="text_box_left">海购专区</div>
<div class="box-product">
<div>
<div class="showhim">
<div class="image">
<a href="product.html"><img src="./public/img/index/images/product_holder.jpg" alt="iMac" />
<div class="showme">
<div class="description_featured" style="min-height:110px;">
<p>Just when you thought iMac had everything, now there is even more. More powerful Intel Core 2 Duo processors. And more memory standard. ...</p>
</div>
</div>
</a>
<div class="name"><a href="#">iMac</a></div>
<div class="priced">
<ul>
<li>119.50</li>
<li><a href="#">欢迎选购</a></li>
</ul>
 </div>
<div style="margin-top:24px;"></div>
</div>

</div>
</div>
</div>
		<!--tab end -->
</section>


			<footer class="ft_wrap" >
				<div class="icart-footer" style="height: 329px;">
					<div class="icart-footer-top">
						<div style="width:1000px; margin:0 auto;">
						</div>
					</div>
					<div class="icart-footer-container" style="margin-top: 60px;">
												<div class="column_footer">
							<h3>售后保障</h3>
							<ul>
																<li><a href="#">退换货政策</a></li>
																<li><a href="#">退换货流程</a></li>
																<li><a href="#">退款说明</a></li>
																<li><a href="#">售后服务</a></li>
								
							</ul>
						</div>
												<div class="column_footer">
							<h3>配送服务</h3>
							<ul>
																<li><a href="#">配送范围及运费</a></li>
																<li><a href="#">配送进度查询</a></li>
																<li><a href="#">自提服务</a></li>
																<li><a href="#">商品验货与签收</a></li>
								
							</ul>
						</div>
												<div class="column_footer">
							<h3>支付方式</h3>
							<ul>
																<li><a href="#">货到付款</a></li>
																<li><a href="#">网上支付</a></li>
																<li><a href="#">银行转账</a></li>
																<li><a href="#">其他支付</a></li>
								
							</ul>
						</div>
												<div class="column_footer">
							<h3>新手入门</h3>
							<ul>
																<li><a href="#">购物流程</a></li>
																<li><a href="#">会员制度</a></li>
																<li><a href="#">订单查询</a></li>
																<li><a href="#">常见问题</a></li>
																<li><a href="#">发票制度</a></li>
								
							</ul>
						</div>
						

						<div class="column_footer" style="margin-right:0px;">
							<h3>Social</h3>
							<ul class="social">
								<li class="twitter"><a href="../../twitter.com/twitter">Twitter Username</a></li>
								<li class="facebook"><a href="../../facebook.com/Username/default.htm">Facebook</a></li>
								<li class="rss"><a href="#">RSS Feed</a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="icart-footer-bottom" style="margin-top: 70px;">
						<div style="width:1000px; margin:0 auto;">
							<div class="icart-logo-footer"><a href="index.php"><img src="images/logo-footer.png" alt="Footer Logo"></a></div>
							<ul>
								<li style="float:right;padding-top:10px;list-style:none;"><a href="#">&copy; Copyright &copy; <a target="_blank" href="http://www.huiyi8.com/moban/"></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</footer>
			<!--两边导航-->


</body>
</html><?php }
}
