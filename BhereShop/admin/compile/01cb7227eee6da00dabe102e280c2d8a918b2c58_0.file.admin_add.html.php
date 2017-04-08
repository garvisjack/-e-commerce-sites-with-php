<?php
/* Smarty version 3.1.30, created on 2017-03-29 13:55:38
  from "/usr/lamp/apache2/htdocs/admin/template/admin/admin_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58db4c5a833e15_68022833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01cb7227eee6da00dabe102e280c2d8a918b2c58' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/admin/admin_add.html',
      1 => 1490766928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db4c5a833e15_68022833 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>BhereShop-增加用户</strong></div>
  <div class="body-content">

    <form method="post" class="form-x" action="?c=administrator&a=add" enctype="multipart/form-data">

      <div class="form-group">
        <div class="label">
          <label>账号：</label>
        </div>
        <div class="field">
          <input type="text" class="stand-input" value="" name="username" data-validate="required:请输入账号" />
          <div class="tips"></div>
        </div>
      </div>
        <div class="form-group">
            <div class="label">
                <label>密码：</label>
            </div>
            <div class="field">
                <input type="password" class="stand-input" value="" name="password" data-validate="required:请输入密码" />
                <div class="tips"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="label">
                <label>所属角色：</label>
            </div>
            <div class="field">
                <select name="roleid" class="stand-input">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
                <div class="tips"></div>
            </div>
        </div>


      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="提交" class="button bg-main icon-check-square-o">
        </div>
      </div>
    </form>
  </div>
</div>

</body></html><?php }
}
