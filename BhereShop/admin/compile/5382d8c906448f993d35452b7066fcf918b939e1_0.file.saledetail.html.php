<?php
/* Smarty version 3.1.30, created on 2017-04-02 17:27:07
  from "/usr/lamp/apache2/htdocs/admin/template/saledetail/saledetail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e0c3eb554e87_10438887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5382d8c906448f993d35452b7066fcf918b939e1' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/saledetail/saledetail.html',
      1 => 1491117093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e0c3eb554e87_10438887 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form method="post" action="" id="listform">
        <div class="panel-head"><strong class="icon-reorder">BhereShop-商品销售记录</strong></div>
        <div class="padding border-bottom">
         

        </div>
        <table class="table table-hover text-center">
            <tr>
                <th style="text-align:center;">ID</th>
                <th><span id='spot'>商品名称</span></th>
                <th>统计明细</th>
                <th>操作</th>
            </tr>
            <volist name="list" id="vo">
           			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <tr>
                    <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"/><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                    <td width="35%"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
                    <td>
                    	<div class="button-group">
            <a class="button border-green" href="?c=saledetail&a=toAmount&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span class="icon-edit"></span>销售额</a>
                        <a class="button border-main" href="?c=saledetail&a=toDeal&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span class="icon-edit"></span>成交量</a>
                        <a class="button border-red" href="?c=saledetail&a=toPer&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span class="icon-edit"></span>好评度</a>
                    </div>
                    </td>
                    <td>
                    	<div class="button-group">
                        <a class="button border-green" target='_blank' href="../?c=gd&a=index&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span class="icon-edit"></span>查看</a>
        
                    </div>
                    </td>
                </tr>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <tr>
                    <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
                        全选 </td>
                    <td colspan="7" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o"  onclick="DelSelect()">删除</a> <a href="javascript:void(0)" class="button border-blue icon-edit" onclick="sorts()"> 排序</a></td>
                </tr>
                <tr>
                    <td colspan="12">
                        <!--分页字符串部分-->
                        <div class="pagelist">
                            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                        </div>
                    </td>
                </tr>
            </volist>
        </table>
</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function deleteArt($id){
        if(confirm("确认删除吗?")){
            location.href = '?c=saledetail&a=delete&id='+$id;
        }else{
            location.href = '?c=saledetail&a=select';
        }
    }

    //全选
    $("#checkall").click(function(){
        $("input[name='id[]']").each(function(){
            if (this.checked) {
                this.checked = false;
            }
            else {
                this.checked = true;
            }
        });
    })

    //批量删除
    function DelSelect(){
        var Checkbox=false;
        var art_array= new Array();
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                art_array.push($(this).val());
                Checkbox=true;
            }
        });
        if (Checkbox) {
            var t = confirm("您确认要删除选中的内容吗？");
            if (t == false) return false;
            $.getJSON("?c=saledetail&a=deleteall",{id:art_array},function(msg){
                if (msg ==1) {
                    
                    location.reload();
                } else {
                    
                    location.reload();
                }
            });
        }
        else{
            alert("请选择您要删除的内容!");
            return false;
        }
    }
     /*分页类的跳转函数*/
    function go(){
        var page = document.getElementById('page');
        location.href = "?c=saledetail&a=select&p="+page.value+"#spot";
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
