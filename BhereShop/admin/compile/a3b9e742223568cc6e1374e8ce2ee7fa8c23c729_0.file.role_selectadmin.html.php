<?php
/* Smarty version 3.1.30, created on 2017-03-27 20:02:23
  from "/usr/lamp/apache2/htdocs/admin/template/role/role_selectadmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d8ff4ff2ecf3_87866679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3b9e742223568cc6e1374e8ce2ee7fa8c23c729' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/role/role_selectadmin.html',
      1 => 1489579016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d8ff4ff2ecf3_87866679 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>BhereShop-查看成员</strong></div>
  <div class="body-content">

    <form method="post" class="form-x" action="?c=role&a=distribution">
      <div class="form-group">
        <div class="">
          <h3>角色名称：<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['name'];?>
</h3>
        </div>
      </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <h4 style="margin-left: 100px;"><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</h4>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </form>
  </div>
</div>

</body></html><?php }
}
