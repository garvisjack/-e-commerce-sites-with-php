<?php
/* Smarty version 3.1.30, created on 2017-03-28 22:01:22
  from "/usr/lamp/apache2/htdocs/admin/template/role/role_distribution.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da6cb27d01b5_94657603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a19e4d92166368e3fdd800071f4db354eff07c05' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/role/role_distribution.html',
      1 => 1490709529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da6cb27d01b5_94657603 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>BhereShop-分配权限</strong></div>
  <div class="body-content">

    <form method="post" class="form-x" action="?c=role&a=distribution">
      <div class="form-group">
        <div class="">
          <h3>角色名称：<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['name'];?>
</h3>
        </div>
      </div>

            <dl>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arry']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                 <?php if ($_smarty_tpl->tpl_vars['value']->value['pid'] == 1) {?>
            <dt>
                <input type="checkbox" name="nodeid[]" id="checkall" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php echo smarty_modifier_biabli($_smarty_tpl->tpl_vars['arrz']->value,$_smarty_tpl->tpl_vars['value']->value['id']);?>
/><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

            </dt>
                <dd>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arry']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['pid'] == $_smarty_tpl->tpl_vars['value']->value['id']) {?>
                            <input type="checkbox" name="nodeid[]" class="checka22" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" <?php echo smarty_modifier_biabli($_smarty_tpl->tpl_vars['arrz']->value,$_smarty_tpl->tpl_vars['val']->value['id']);?>
/><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>

                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </dd>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </dl>

        <input type="hidden" name="roleid" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
" />
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
        $("input[class='checka22'],input[id='checka11']").each(function(){
            if(this.checked){
                this.checked = false;
            }
            else {
                this.checked = true;
            }
        });
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
