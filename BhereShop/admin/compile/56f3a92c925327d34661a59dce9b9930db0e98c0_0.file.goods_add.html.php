<?php
/* Smarty version 3.1.30, created on 2017-03-29 17:10:30
  from "/usr/lamp/apache2/htdocs/admin/template/goods/goods_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58db7a06bd0105_66968322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56f3a92c925327d34661a59dce9b9930db0e98c0' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/goods/goods_add.html',
      1 => 1490778628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db7a06bd0105_66968322 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_tree')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.tree.php';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="../public/admin/css/pintuer.css">
<link rel="stylesheet" href="../public/admin/css/admin.css">
<?php echo '<script'; ?>
 src="../public/admin/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../public/admin/js/pintuer.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="../public/admin/editor/themes/default/default.css">
<?php echo '<script'; ?>
 charset="utf-8" src="../public/admin/editor/kindeditor-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="utf-8" src="../public/admin/editor/lang/zh_CN.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="../public/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
>
</head>
<body>
<form method="post" action="?c=goods&a=add" id="listform" enctype="multipart/form-data">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">BhereShop-添加商品</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
        <ul>
        <li> <a class="button border-yellow icon-plus-square-o" href="?c=goods&a=select" style="font-size:14px;">商品列表</a> </li>
        </ul>
    </div>
    <table class="table  text-center">
      <tr>
          <td>
          <ul class="search goods-add" id="tap">
              <li>通用信息</li>
              <li>详细描述</li>
              <li>其他信息</li>
              <li>商品属性</li>
              <li>商品相册</li>
              <li>关联文章</li>
          </ul>
          </td>
      </tr>
        <!--商品列表通用信息添加-->
        <tr>
            <td>
            <div class="content" style="display: block">
                <table class="table text-center" style="width:600px;margin: 10px auto;font-weight:bold;">
                    <tr>
                        <td>商品名称:</td>
                        <td>
                            <input style="" type="text" class="stand-input" value="" name="title"/>
                            <span class="star">*必填</span>
                        </td>
                    </tr>
                    <tr>
                        <td>商品货号:</td>
                        <td>
                            <input  type="text" class="stand-input" value="" name="artnum"/><span class="tips">若不输入商品货号，系统将自动生成一个唯一的货号</span>
                        </td>
                    </tr>
                    <tr>
                        <td>商品分类:</td>
                        <td>
                            <select id="cate_id" name='cate_id' class='stand-input' style="padding:2px 0px; border:1px solid #ddd;width:76px;height:28px;">
                                <option value="0">顶级分类</option>
                                <?php echo smarty_modifier_tree($_smarty_tpl->tpl_vars['cate']->value);?>

                            </select>
                            <button  class="button bg-yellow-light icon-check-square-o" type="button" id="add_cate">添加分类</button>
                            <span id="cate_span" style="display:none">
                            <button style="float:right;" class="button bg-gray icon-check-square-o" type="button" id="action_cate">添加</button>
                            <input style="float:right" class="stand-input" type="text" name="add_cate"/>
                            </span>
                            <span class="star">*必填</span>
                        </td>
                    </tr>
                    <tr>
                        <td>商品品牌:</td>
                        <td>
                            <select name='brand_id' class='stand-input' style="padding:2px 0px; border:1px solid #ddd;width:76px;height:28px;">
                                <option value="">品牌</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brand']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                            <button  style="margin-right:36px" class="button bg-yellow-light icon-check-square-o" type="button" id="add_brand">添加品牌</button>
                            <span id="brand_span" style="display:none;">
                            <button style="float:right;" class="button bg-gray icon-check-square-o" type="button" id="action_brand">添加</button>
                            <input style="float:right;" class="stand-input" type="text" name="add_brand"/>
                            </span>
                        </td>
                        <td>
                    </tr>
                    <tr>
                        <td>本店售价:</td>
                        <td>
                            <input style="width:150px;" type="text" class="stand-input" value="" name="price"/>
                            <span class="star">*必填</span>
                        </td>
                    </tr>
                    <tr>
                        <td>会员价格:</td>
                        <td>
                            <input style="width: 150px;" type="text" class="stand-input" value="" name="vip_price"/>
                        </td>
                    </tr>
                    <tr>
                        <td>市场售价:</td>
                        <td>
                            <input style="width: 150px;" type="text" class="stand-input" value="" name="mkt_price"/>
                        </td>
                    </tr>
                    <tr>
                        <td>促销价:</td>
                        <td>
                            <input style="width: 150px;" type="text" class="stand-input" value="" name="sale_price"/>
                        </td>
                    </tr>
                    <tr>
                        <td>促销日期:</td>
                        <td><span class="tips" style="margin-right:3px;float:left;">至
                            <input style="width: 140px;margin-top:6px;" type="text" class="stand-input Wdate" value="" name="sale_time_start" onClick="WdatePicker()"/></span>
                            <span class="tips" style="">
                            <input style="width: 140px; margin-top:6px;" type="text" class="stand-input Wdate" value="" name="sale_time_end" onClick="WdatePicker()"/></span></td>
                    </tr>
                    <tr>
                        <td>上传商品及缩略图:</td>
                        <td> <input  type="file" style="margin-left:-120px;height:30px;" value="" name="zoom_pic[]" multiple/></td>
                    </tr>
                </table>
            </div>

            <div class="content">
                <p>给商品添加一些详细的描述</p>
                <textarea placeholder="给商品添加一些详细的描述" name="descr" id="detail" class="descr" style="width:1100px;height:560px;margin:20px auto;"></textarea>
            </div>
            <!--商品其他信息部分-->
            <div class="content">
                <table class="table text-center" style="width: 600px;margin: 10px auto;font-weight:bold;">
                    <tr>
                        <td>商品重量:</td>
                        <td>
                            <input type="text" class="stand-input" value="" name="weight"/>
                        </td>
                    </tr>
                    <tr>
                        <td>商品库存数量:</td>
                        <td>
                            <input type="text" class="stand-input" value="" name="num"/>
                        </td>
                    </tr>
                    <tr>
                        <td>库存警告数量:</td>
                        <td>
                            <input type="text" class="stand-input" value="" name="notice_num"/>
                        </td>
                    </tr>
                    <tr>
                        <td>加入推荐:</td>
                        <td>
                            <input type="checkbox" value="1" name="isnew" style="margin-left: -242px;"/><span class="tips">新品</span>
                            <input type="checkbox" value="1" name="ishot"/><span class="tips">热卖</span>
                            <input type="checkbox" value="1" name="issale"/><span class="tips">折扣</span>
                            <input type="checkbox" value="1" name="isrcm"/><span class="tips">推荐</span>
                        </td>
                    </tr>
                    <tr>
                        <td>上架:</td>
                        <td>
                            <input style="margin-left: -206px;" value="1" type="checkbox" name="isshelve"/><span class="tips">打勾表示允许销售，否则不允许销售。</span>
                        </td>
                    </tr>
                    <tr>
                        <td>是否免运费:</td>
                        <td>
                            <input type="checkbox" name="isship" value="1" style="margin-left: -86px;"/><span class="tips">打勾表示此商品不会产生运费花销，否则按照正常运费计算。</span>
                        </td>
                    </tr>
                    <tr>
                        <td>推荐排序:</td>
                        <td>
                            <input type="text" class="stand-input" value="" name="sort"/>
                        </td>
                    </tr>
                    <tr>
                        <td>商品关键词:</td>
                        <td>
                            <input style="width: 150px;" type="text" class="stand-input" value="" name="keyword"/>
                        </td>
                    </tr>
                    <tr>
                    <td>商品简单描述:</td>
                    <td>
                        <textarea style="margin-left: -214px;" name="short_descr" id="" class="short_descr"></textarea>
                    </td>
                    </tr>
                    <tr>
                        <td>商家备注:</td>
                        <td>
                            <textarea style="margin-left: -214px;" name="remark" id="" class="short_descr"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
        <!--商品属性-->
            <div class="content">
                <select name='type_id' id="goods_type" class='stand-input' style="padding:2px 0px; border:1px solid #ddd;height:28px;margin-left: 350px">
                    <option value="0">请选择商品类型</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
                <span class="tips">请选择商品的所属类型，进而完善此商品的属性</span>
                <div id="box"></div>
                <div style="margin-left: 310px;margin-top: 35px;">
                    <table id="type-content"></table></div>
            </div>
        <!--商品相册部分-->
            <div class="content">
                <span class="tips" style="height:30px;margin-left: 66px">图片简单描述[+]</span>
                <input  type="text" style="height:30px;margin-left: 20px" value="" name="album_descr"/>
                <span class="tips">上传文件: </span>
                <input  type="file" style="margin-left:-56px;height:30px;" value="" name="album[]" multiple/>
            </div>
            <!--关联文章-->
            <div class="content">
                <div style="margin-left:-50px;">
                    <ul>
                        <li><input type="text" style="margin-left: 400px;" class="stand-input" value="" name="search"/>
                            <button type="submit" class="button border-main" style="float:left;"><span class="icon-plus-square-o"></span>文章检索</button>
                        </li>
                        <li> <select name='article_id' class='stand-input' style="margin:12px 0px; height:28px;margin-left:400px">
                            <option value="0" selected>上传的文章类型</option>
                        </select><br/>
                        </li>
                        <li>
                            <textarea placeholder="检索的文章概述" name="search_article" id="article" class="descr" style="width:300px;height:160px;float:left;margin-left: 400px;"></textarea>
                        </li>
                    </ul>


            </div>
        </div>
        <td>
        </tr>
    </table>
    <div class="padding border-bottom" style="margin-left: 400px;">
              <button  class="button bg-red-light icon-check-square-o" type="submit" style="width:80px;">确认</button>
              <button  class="button bg-red-light icon-check-square-o" type="reset" style="width:80px;">重置</button>
    </div>
</div>
  </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
    //选项卡操作

    $('#tap li').click(function() {
        var k = $(this).index();
        $('.content').eq(k).show().siblings().hide();
    });

    /*添加分类按钮 ,有问题待定*/
    $('#add_cate').click(function() {
        $('#cate_span').toggle();
    });

    $('#action_cate').click(function(){
        var name = $('input[name=add_cate]').val();
        $.getJSON("?c=goods&a=addcate",{name:name,pid:$('#cate_id').val()},function(msg){
            if(msg!=0){
                alert('添加成功!');
            }else{
                alert('添加失败!');
            }
        })
    })

    /*添加品牌*/
    $('#add_brand').click(function() {
        $('#brand_span').toggle();
    });

    /*编辑器引用*/
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create("#detail");
        });

    //ajax处理下拉列表，商品类型的属性展示
    $('#goods_type').change(function(){
        //用json数据传输
        $('#box p').remove();
        $('#type-content tr').remove();  //移除掉之前的标签
        //url地址，传输的数据，回调函数
        $.getJSON("?c=goods&a=getattr",{type:$(this).val()},function(msg){
            if(msg!=0){  //正确交互数据
                for (var i=0;i<msg.length;i++) {
                    var name = "value"+i;
                    $('#type-content').append(
                            "<tr><td><span class='attr-span'>"+msg[i].attr+
                            ":</span></td><td><input name='attr[]' value='' type='text' class='add-input'>" +
                            "<input type='hidden' name='attr_id[]' value='"+msg[i].id+"'></td></tr>"
                    );
                }
            }else{
               $('#box').html('<p style="color:#d00;margin:15px auto;">该类型没有录入属性!</p>');
            }
        })



    })






    //搜索
    function changesearch(){

    }


});



<?php echo '</script'; ?>
>
</body>
</html><?php }
}
