<?php
/* Smarty version 3.1.30, created on 2017-03-29 16:15:08
  from "/usr/lamp/apache2/htdocs/admin/template/role/role_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58db6d0cd60667_41259521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e3a6ea653259d04e99c6b0a21b260b8fae6b639' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/role/role_add.html',
      1 => 1490775178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db6d0cd60667_41259521 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_biabli')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.biabli.php';
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>BhereShop-增加角色</strong></div>
  <div class="body-content">

    <form method="post" class="form-x" action="?c=role&a=add">
      <div class="form-group">
        <div class="label">
          <label>角色名称：</label>
        </div>
        <div class="field">
          <input type="text" class="stand-input" value="" name="name" data-validate="required:请输入角色名称" />
          <div class="tips"></div>
        </div>
      </div>


        <div class="form-group">
            <div class="label">
                <label>角色描述：</label>
            </div>
            <div class="field">
                <textarea name="descr" class="stand-input" data-validate="required:请输入角色描述" style="height:100px"></textarea>
                <div class="tips"></div>
            </div>
        </div>
        <table class="table table-hover text-center">
            <dl>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arry']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['pid'] == 1) {?>
                <dt style="float: left;">
                    <input type="checkbox" name="nodeid[]" id="checkall" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" checked/><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

                <dd>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arry']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['val']->value['pid'] == $_smarty_tpl->tpl_vars['value']->value['id']) {?>
                    <input type="checkbox" name="nodeid[]" class="checka22" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" <?php echo smarty_modifier_biabli($_smarty_tpl->tpl_vars['arrx']->value,$_smarty_tpl->tpl_vars['val']->value['id']);?>
/><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>

                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </dd>
                </dt>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </dl>
        </table>
        <input type="hidden" name="roleid" value="" />
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

<?php echo '<script'; ?>
 type="text/javascript">
    //全选
    $("#checkall").click(function(){
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arry']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arry']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['val']->value['pid'] == $_smarty_tpl->tpl_vars['value']->value['id']) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arry']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['pid'] == $_smarty_tpl->tpl_vars['val']->value['id']) {?>
                        $("input[class='checka22']").each(function(){
                            if(this.checked){
                                this.checked = false;
                            }
                            else {
                                this.checked = true;
                            }
                        });
                        <?php }?>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    });



<?php echo '</script'; ?>
>
</body>
</html><?php }
}
