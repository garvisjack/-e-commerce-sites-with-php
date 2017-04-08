<?php
/* Smarty version 3.1.30, created on 2017-03-22 13:04:50
  from "C:\wamp\www\Bhere shop\admin\template\role\role.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d27672425dd8_75618762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856f79f46639fef917f11067507843ff3ac4ad64' => 
    array (
      0 => 'C:\\wamp\\www\\Bhere shop\\admin\\template\\role\\role.html',
      1 => 1489579182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d27672425dd8_75618762 (Smarty_Internal_Template $_smarty_tpl) {
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
<form method="get" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">BhereShop-角色管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-yellow icon-plus-square-o" href="?c=role&a=add"> 添加角色</a> </li>
        <li>搜索：</li>
        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a></li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
          <th style="text-align:left; padding-left:20px;">编号</th>
          <th>角色名称</th>
          <th>角色描述</th>
          <th>操作</th>
      </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <tr>
            <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" />
                <?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['descr'];?>
</td>
            <td><div class="button-group">
                    <a class="button border-main" href="?c=role&a=distribution&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                        <span class="icon-edit"></span>分配权限
                    </a>
                    <a class="button border-main" href="?c=role&a=selectadmin&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                        <span class="icon-edit"></span>查看成员
                    </a>
                    <a class="button border-main" href="?c=role&a=editor&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                     <span class="icon-edit"></span> 修改
                    </a>
                    <a class="button border-red" href="javascript:void(0)" onclick="del(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)">
                        <span class="icon-trash-o"></span> 删除
                    </a>
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
          全选</td>
          <td colspan="7" style="text-align:left;padding-left:20px;">
              <a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 删除</a>
              <a href="javascript:void(0)" style="padding:5px 15px; margin:0 10px;" class="button border-blue icon-edit" onclick="sorts()"> 排序</a>
          </td>
      <tr>
        <td colspan="8"><div class="pagelist"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div></td>
      </tr>
    </table>

  </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">

//搜索
function changesearch(){	
		
}

//单个删除
function del(data){
	if(confirm("您确定要删除吗?")){
		location.href="?c=role&a=delete&id="+data;
	}
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if(this.checked){
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
});

//批量删除
function DelSelect(){
	var Checkbox=false;
    var id_array = new Array(); //这个数组是用来装全选框里的id
	 $("input[name='id[]']").each(function(){//这行表示，遍历我input框索相对应勾选的
         //判断表单是否有选择，有则为true
	  if (this.checked==true) {  //这行表示，我所选的框，checked为true，才能执行里面的代码
        id_array.push($(this).val());//这行表示，$(this).val()是指我们所选的框里面的id值压入到id_array数组的末尾，
		Checkbox=true;
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false; //这里为什么没有大括号呢？;
		$.getJSON("?c=autogoods&a=deleteAll",{id:id_array},function(msg){
          if(msg==1){
                alert("删除成功");
              location.href='?c=autogoods&a=select';
            }else{
                alert("删除失败");
              location.href='?c=autogoods&a=select';
            }
        })
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");	
		
		return false;
	}
}

//批量置顶
function changeistop(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}


//批量移动
function changecate(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		
		return false;
	}
}

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}		
	    });
		if(i>1){ 
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{
		
			$("#listform").submit();		
		}	
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
