<?php
/* Smarty version 3.1.30, created on 2017-03-27 20:03:18
  from "/usr/lamp/apache2/htdocs/admin/template/node/node_editor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d8ff86801824_69570718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5db99350f8dfc1bf9495787b6212769dbf2499e' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/node/node_editor.html',
      1 => 1490616191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d8ff86801824_69570718 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>BhereShop-修改节点</strong></div>
  <div class="body-content">

    <form method="post" class="form-x" action="?c=node&a=editor" enctype="multipart/form-data">
        <div class="form-group">
            <div class="label">
                <label>上一级：</label>
            </div>
            <div class="field">
                <select name="pid" class="stand-input">
                    <option value="1">后台</option>
                    <?php echo smarty_modifier_tree($_smarty_tpl->tpl_vars['arrx']->value);?>

                </select>
                <div class="tips"></div>
            </div>
        </div>

      <div class="form-group">
        <div class="label">
          <label>节点英文名称：</label>
        </div>
        <div class="field">
          <input type="text" class="stand-input" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['node'];?>
" name="node" data-validate="required:请输入商品名称" />
          <input type="hidden" class="stand-input" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
" name="id" data-validate="required:请输入商品名称" />
          <div class="tips"></div>
        </div>
      </div>

        <div class="form-group">
            <div class="label">
                <label>节点中文名称：</label>
            </div>
            <div class="field">
                <input type="text" class="stand-input" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['name'];?>
" name="name" data-validate="required:请输入上架时间" />
                <div class="tips"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="label">
                <label>节点层级：</label>
            </div>
            <div class="field">
                <select name="level" class="stand-input">
                    <option value="1">默认:后台</option>
                    <?php echo smarty_modifier_tree($_smarty_tpl->tpl_vars['arrx']->value);?>

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
