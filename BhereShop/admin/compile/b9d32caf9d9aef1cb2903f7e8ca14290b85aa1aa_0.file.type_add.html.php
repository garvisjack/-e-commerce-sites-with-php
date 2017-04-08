<?php
/* Smarty version 3.1.30, created on 2017-03-29 16:07:03
  from "/usr/lamp/apache2/htdocs/admin/template/type/type_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58db6b275a6229_20709902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9d32caf9d9aef1cb2903f7e8ca14290b85aa1aa' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/type/type_add.html',
      1 => 1490611702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db6b275a6229_20709902 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>主要信息-修改</title>
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加商品类型</strong></div>
  <div class="body-content">
      <form method="post" class="form-x" action="?c=type&a=addtype" enctype="multipart/form-data">
          <div class="form-group">
              <div class="label">
                  <label>类型名称：</label>
              </div>
              <div class="field">
                  <input type="text" class="stand-input" value="" name="type"/>
                  <div class="tips"></div>
              </div>
          </div>
          <div class="clear"></div>
          <div class="form-group">
              <div class="label">
                  <label></label>
              </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit">确定</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>
</html><?php }
}
