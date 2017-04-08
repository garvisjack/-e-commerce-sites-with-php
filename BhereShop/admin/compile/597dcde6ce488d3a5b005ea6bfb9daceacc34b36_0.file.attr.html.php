<?php
/* Smarty version 3.1.30, created on 2017-03-22 10:43:23
  from "C:\wamp\www\Bhere shop\admin\template\attr\attr.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d2554bdf6b96_94707629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '597dcde6ce488d3a5b005ea6bfb9daceacc34b36' => 
    array (
      0 => 'C:\\wamp\\www\\Bhere shop\\admin\\template\\attr\\attr.html',
      1 => 1488636306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d2554bdf6b96_94707629 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="panel-head"><strong class="icon-reorder"> 商品属性</strong></div>
  <div class="padding border-bottom">
  <a class="button border-yellow" href="?c=attr&a=attradd&typeid=<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['type_id'];?>
" name="spot"><span class="icon-plus-square-o"></span>添加属性</a>

  </div>
  <table class="table table-hover text-center">
    <tr >
      <th width="20%">属性名称</th>
      <th width="20%">所属类型</th>
      <th width="45%">操作</th>
    </tr>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['attr'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</td>
      <td><div class="button-group">
      <a class="button border-main" href="?c=attr&a=attreditor&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
      <td colspan="5">
          <!--分页内容部分-->
          <div class="pagelist">
              <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

          </div>
      </td>
      </tr>
  </table>

</div>


<?php echo '<script'; ?>
 type="text/javascript">
    function deleteCates($id){
        if(confirm("确认删除吗?")){
            location.href = '?c=attr&a=attrdelete&id='+$id;
        }else{
            location.href = '?c=type&a=select&id=';
        }
    }
    function go(){
        var page = document.getElementById('page');
        location.href = "?c=attr&a=select&p="+page.value+"#spot";
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
