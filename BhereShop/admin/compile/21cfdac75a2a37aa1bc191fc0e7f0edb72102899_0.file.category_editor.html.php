<?php
/* Smarty version 3.1.30, created on 2017-03-23 14:09:53
  from "F:\wamp\www\Bhere shop\admin\template\category\category_editor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d3d731e204c6_84226609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21cfdac75a2a37aa1bc191fc0e7f0edb72102899' => 
    array (
      0 => 'F:\\wamp\\www\\Bhere shop\\admin\\template\\category\\category_editor.html',
      1 => 1489145596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d3d731e204c6_84226609 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_tree')) require_once 'F:\\wamp\\www\\Bhere shop\\libs\\plugins\\modifier.tree.php';
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
    <div class="padding border-bottom">
            <a class="button border-yellow" href="?c=category&a=add">添加分类</a>
        <form style="float:right;" action="?c=category&a=like" method="post">
            <button type="submit" class="button border-main" style="float:right;margin-right:50px"><span class="icon-plus-square-o"></span> 修改检索</button>
            <input style="float:right;width: 120px;height:30px;" type="text" class="stand-input" value="" name="search"/>
        </form>
    </div>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="?c=category&a=update" enctype="multipart/form-data">
            <div class="form-group">
                <div class="label">
                    <label>上级分类：</label>
                </div>
                <div class="field">
                    <!--下拉菜单部分-->
                    <select name='pid' class='stand-input'>
                        <option value="0">顶级分类</option>
                        <?php echo smarty_modifier_tree($_smarty_tpl->tpl_vars['arr']->value,$_smarty_tpl->tpl_vars['arrx']->value[0]['pid']);?>

                    </select>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>新增分类：</label>
                </div>
                <div class="field">
                    <input type="text" class="stand-input" value="<?php echo $_smarty_tpl->tpl_vars['arrx']->value[0]['name'];?>
" name="name"/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>所属类型：</label>
                </div>
                <div class="field">
                    <input type="text" class="stand-input" value="<?php echo $_smarty_tpl->tpl_vars['arrx']->value[0]['type_name'];?>
" name="type_name"/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>是否在导航栏显示：</label>
                </div>
                <div class="field">
                    <input type="radio" name="isnav" value="1" checked/>是
                    <input name="isnav" type="radio" value="0"/>否
                    <!-- <input type="text" class="stand-input" value="" name="isnav"/>-->
                    <div class="tips"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input type="hidden"name="id"value="<?php echo $_smarty_tpl->tpl_vars['arrx']->value[0]['id'];?>
"/>
                    <button class="button bg-main icon-check-square-o" type="submit" name="submit"> 更新</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html><?php }
}
