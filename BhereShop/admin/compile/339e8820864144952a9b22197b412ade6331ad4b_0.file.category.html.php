<?php
/* Smarty version 3.1.30, created on 2017-03-23 14:09:52
  from "F:\wamp\www\Bhere shop\admin\template\category\category.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d3d7302e9a14_68493331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '339e8820864144952a9b22197b412ade6331ad4b' => 
    array (
      0 => 'F:\\wamp\\www\\Bhere shop\\admin\\template\\category\\category.html',
      1 => 1489145352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d3d7302e9a14_68493331 (Smarty_Internal_Template $_smarty_tpl) {
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
<!--产品展示内容模块-->
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">BhereShop-商品分类</strong></div>
    <div class="padding border-bottom">
            <a class="button border-yellow" href="?c=category&a=add" style="font-size:14px;">添加分类</a>
        <form style="float:right;" action="?c=category&a=like" method="post">
            <button type="submit" class="button border-main" style="float:right;margin-right:50px"><span class="icon-plus-square-o"></span> 修改检索</button>
            <input style="float:right;width: 120px;height:30px;" type="text" class="input w50" value="" name="search"/>
        </form>
    </div>
    <table class="table table-hover text-center">

        <tr >
            <th width="15%"><span id='spot'>ID</span></th>
            <th width="20%">分类名称</th>
            <th width="15%"><a href="javascript:void(0);">上一级ID</th>
            <th width="15%">是否在导航栏显示</th>
            <th width="15%">所属类型</th>
            <th width="20%">操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <tr>
            <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['pid'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['isnav'] == 1) {?>
            <td><img src="../public/admin/images/yes.gif"></td>
            <?php } else { ?>
            <td><img src="../public/admin/images/no.gif"></td>
            <?php }?>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['type_name'];?>
</td>
            <td><div class="button-group">
                <a class="button border-main" href="?c=category&a=editor&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span class="icon-edit"></span> 修改</a>
                <a class="button border-red" href="javascript:void(0)" onclick="deleteCates(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
            <td colspan="6">
                <!--分页内容部分-->
                <div class="pagelist">
                   <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                </div>
            </td>
        </tr>
    </table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
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

    function deleteCates($id){
        if(confirm("确认删除吗?")){
            location.href = '?c=category&a=delete&id='+$id;
        }else{
            location.href = '?c=category&a=select';
        }
    }
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
            $.getJSON("?c=category&a=deleteall",{id:art_array},function(msg){
                if (msg ==1) {
                    alert("操作成功");
                    location.reload();
                } else {
                    location.reload();
                }
            });
        }
        else{
            alert("请选择您要删除的内容!");
            return false;
        }
    }
    /*分页类的跳转函数*/
    function go(){
        var page = document.getElementById('page');
        location.href = "?c=category&a=select&p="+page.value+"#spot";
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
