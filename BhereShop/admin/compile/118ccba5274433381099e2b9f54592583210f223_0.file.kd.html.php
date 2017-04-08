<?php
/* Smarty version 3.1.30, created on 2017-03-29 21:11:42
  from "/usr/lamp/apache2/htdocs/admin/template/order/kd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbb28ea0b150_04222538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '118ccba5274433381099e2b9f54592583210f223' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/order/kd.html',
      1 => 1490793099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dbb28ea0b150_04222538 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
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
        <style>
            .mytable{
                margin:0px auto;width:450px;font-size: 14px;
            }
            .mytable tr td{
                padding-top: 14px;
            }


        </style>
	</head>
	<body class="ms-body">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder">BhereShop-物流配送</strong> <a href="" style="float:right;">录入物流配送信息</a></div>
								<div style="margin:20px auto;width: 90%;height: 400px;" >
                                    <form action="?c=order&a=saveKd" method="post">
                                        <table class="mytable">
                                            <tr>
                                                <td>订单号:</td>
                                                <td><input class="stand-input" type="text" name="ordercode" value="<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
"></td>
                                            </tr>
                                            <tr>
                                                <td>快递单号:</td>
                                                <td><input class="stand-input" type="text" name="lcode" value="432262075993"></td>
                                            </tr>
                                            <tr>
                                                <td>选择快递:</td>
                                                <td>
                                       
                                                	<select name='api' class="stand-input">
                                                		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lgt']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                                		<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['lgt'];?>
</option>
                                                		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                	</select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input style="width: 65px;height: 30px;font-size: 16px;border: 1px  solid #e33131;background-color:#e33131;color:#fff;border-radius:5px;margin-left: 175px; "type="submit" name="submit" value="保存">
                                                </td>
                                            </tr>
                                          

                                        </table>

                                    </form>
								</div>
        </div>
	</body>

</html><?php }
}
