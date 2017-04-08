<?php
/* Smarty version 3.1.30, created on 2017-03-27 15:00:08
  from "/usr/lamp/apache2/htdocs/admin/template/category/category_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d8b878107636_87350790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '458441a84ef4065a7b58c4c4c7c7f00f3bbd38fc' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/category/category_add.html',
      1 => 1489493352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d8b878107636_87350790 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_tree')) require_once '/usr/lamp/apache2/htdocs/libs/plugins/modifier.tree.php';
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
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="?c=category&a=add" enctype="multipart/form-data">
            <div class="form-group">
                <div class="label">
                    <label>上级分类：</label>
                </div>
                <div class="field">
                    <!--下拉菜单部分-->
                    <select name='pid' class='stand-input'>

                        <option value="0">顶级分类</option>
                        <?php echo smarty_modifier_tree($_smarty_tpl->tpl_vars['arr']->value);?>

                    </select>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>新增分类：</label>
                </div>
                <div class="field">
                    <input type="text" class="stand-input" value="" name="name"/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>所属类型：</label>
                </div>
                <div class="field">
                    <select name='type_name' class='stand-input'>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>是否在导航栏显示：</label>
                </div>
                <div class="field">
                     <input type="radio" name="isnav" VALUE="1" checked/>是
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
                    <button class="button bg-main icon-check-square-o" type="submit" name="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function deleteCates($id){
        if(confirm("确认删除吗?")){
            location.href = '?c=category&a=delete&id='+$id;
        }else{
            location.href = '?c=category&a=select';
        }
    }
    function go(){
        var page = document.getElementById('page');
        location.href = "?c=category&a=select&p="+page.value+"#spot";
    }
</body>
</html><?php }
}
