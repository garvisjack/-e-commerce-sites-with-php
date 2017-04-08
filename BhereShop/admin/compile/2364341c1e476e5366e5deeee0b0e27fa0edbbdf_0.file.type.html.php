<?php
/* Smarty version 3.1.30, created on 2017-03-27 19:07:59
  from "/usr/lamp/apache2/htdocs/admin/template/type/type.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d8f28f9aedb2_14855339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2364341c1e476e5366e5deeee0b0e27fa0edbbdf' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/type/type.html',
      1 => 1490611868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d8f28f9aedb2_14855339 (Smarty_Internal_Template $_smarty_tpl) {
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
<!--产品展示内容模块-->
<a href="#" name="spot"></a>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder">BhereShop-商品类型</strong></div>
   <div class="padding border-bottom">
      <a href="?c=type&a=addtype" class="button border-yellow" style="font-size:14px;">添加类型</a>
      <form style="float:right;" action="?c=type&a=like" method="post">
          <button type="submit" class="button border-main" style="float:right;margin-right:50px"><span class="border-main icon-search"></span> 搜索</button>
          <input style="float:right;width: 120px;height:30px;" type="text" class="stand-input" value="" name="search"/>
      </form>
  </div>
  <table class="table table-hover text-center">
    <tr >
      <th width="15%"><a href="javascript:void(0);" id='spot'>ID</a></th>
       <th width="30%">类型名称</th>
        <th width="30%">属性数</th>
       <th width="55%">操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>

    <tr>
        <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['arrx']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</td>

      <td><div class="button-group">
      <a class="button border-green" style="color:#22CC77;" href="?c=attr&a=select&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span class="icon-edit"></span>属性列表</a>
      <a class="button border-main" href="?c=type&a=editortype&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" href="javascript:void(0)" onclick="deleteCates(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)"><span class="icon-trash-o"></span> 删除</a>
      </div></td>

    </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <tr>
      <tr>
          <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
              全选 </td>
          <td colspan="7" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o"  onclick="DelSelect()">删除</a> <a href="javascript:void(0)" class="button border-blue icon-edit" onclick="sorts()"> 排序</a></td>
      </tr>
      <td colspan="5">

      <div class="pagelist">

      </div>
      </td>
      </tr>
  </table>
    <div class="pagelist">
        <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

    </div>

</div>



<?php echo '<script'; ?>
 type="text/javascript">
    function deleteCates($id){
        if(confirm("确认删除吗?")){
            location.href = '?c=type&a=deletetype&id='+$id;
        }else{
            location.href = '?c=type&a=select';
        }
    }
    function go(){
        var page = document.getElementById('page');//取到类里面的input
        location.href = "?c=type&a=select&p="+page.value+"#spot";//输入的页数就是所跳转的页数 加锚点

    }
    $("#checkall").click(function(){
        $("input[name='id[]']").each(function(){
            if (this.checked) {//如果没被选中 则全部选 如果选中了就全部取消
                this.checked = false;//
            }
            else {
                this.checked = true;
            }
        });
    })
     function DelSelect(){
       if(confirm('确认将所选的删除吗？')) {
           var delarr =[];
           $("input[name='id[]'").each(function(){
               if(this.checked){
                  delarr.push($(this).val())
               }
           })

           $.getJSON("?c=type&a=deletes",{id:delarr},function(msq){
                       if(msq==0){
                           alert('分类里有属性 无法删除！')
                       }else{
                           location.href="?c=type&a=select";
                       }
           })
       }
     }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
