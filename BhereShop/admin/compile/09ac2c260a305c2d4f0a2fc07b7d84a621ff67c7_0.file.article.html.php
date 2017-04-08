<?php
/* Smarty version 3.1.30, created on 2017-03-22 10:38:49
  from "C:\wamp\www\Bhere shop\admin\template\article\article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d25439eb27b2_37920394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09ac2c260a305c2d4f0a2fc07b7d84a621ff67c7' => 
    array (
      0 => 'C:\\wamp\\www\\Bhere shop\\admin\\template\\article\\article.html',
      1 => 1489142910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d25439eb27b2_37920394 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<div class="panel admin-panel">
<form method="post" action="" id="listform">
    <div class="panel-head"><strong class="icon-reorder">BhereShop-文章列表</strong></div>
    <div class="padding border-bottom">
    <a class="button border-yellow icon-plus-square-o" href="?c=article&a=add" style="font-size:14px;"> 添加文章</a>
    </div>
        <table class="table table-hover text-center">
            <tr>
                <th style="text-align:center;">ID</th>
                <th><span id='spot'>文章标题</span></th>
                <th>文章类型</th>
                <th>是否在导航栏展示</th>
                <th>发布时间</th>
                <th>操作</th>
            </tr>
            <volist name="list" id="vo"><!--商品信息遍历-->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                <tr>
                    <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['con'];?>
</td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrx']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value['id'] == $_smarty_tpl->tpl_vars['val']->value['type_id']) {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</td>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php if ($_smarty_tpl->tpl_vars['val']->value['isshow'] == 1) {?>
                    <td><img src="../public/admin/images/yes.gif"></td>
                    <?php } else { ?>
                    <td><img src="../public/admin/images/no.gif"></td>
                    <?php }?>
                    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['addtime'];?>
</td>
                    <td><div class="button-group">
                        <a class="button border-green" href="add.html"><span class="icon-edit"></span>查看</a>
                        <a class="button border-main" href="?c=article&a=editor&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><span class="icon-edit"></span>修改</a>
                        <a class="button border-red" href="javascript:void(0)" onclick="deleteArt(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"><span class="icon-trash-o"></span> 删除</a>
                         </div></td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <tr>
                    <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
                        全选 </td>
                    <td colspan="7" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o"  onclick="DelSelect()">删除</a> <a href="javascript:void(0)" class="button border-blue icon-edit" onclick="sorts()"> 排序</a></td>
                </tr>
                <tr>
                    <td colspan="12">
                        <!--分页字符串部分-->
                        <div class="pagelist">
                            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                        </div>
                    </td>
                </tr>
            </volist>
        </table>
    </div>
</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function deleteArt($id){
        if(confirm("确认删除吗?")){
            location.href = '?c=article&a=delete&id='+$id;
        }else{
            location.href = '?c=article&a=select';
        }
    }

    //全选
    $("#checkall").click(function(){
        $("input[name='id[]']").each(function(){
            if (this.checked) {
                this.checked = false;
            }
            else {
                this.checked = true;
            }
        });
    })

    //批量删除
    function DelSelect(){
        var Checkbox=false;
        var art_array= new Array();
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                art_array.push($(this).val());
                Checkbox=true;
            }
        });
        if (Checkbox) {
            var t = confirm("您确认要删除选中的内容吗？");
            if (t == false) return false;
            $.getJSON("?c=article&a=deleteall",{id:art_array},function(msg){
             if (msg ==1) {
                    alert("操作成功");
                    location.reload();
                } else {
                    alert("操作失败");
                 location.reload();
                }
            });
        }
        else{
            alert("请选择您要删除的内容!");
            return false;
        }
    }
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
