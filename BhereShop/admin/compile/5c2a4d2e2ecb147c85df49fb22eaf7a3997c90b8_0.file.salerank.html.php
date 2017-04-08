<?php
/* Smarty version 3.1.30, created on 2017-03-27 20:03:44
  from "/usr/lamp/apache2/htdocs/admin/template/salerank/salerank.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d8ffa03e66c2_93298643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c2a4d2e2ecb147c85df49fb22eaf7a3997c90b8' => 
    array (
      0 => '/usr/lamp/apache2/htdocs/admin/template/salerank/salerank.html',
      1 => 1490612798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d8ffa03e66c2_93298643 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="panel-head"><strong class="icon-reorder">BhereShop-商品排行榜</strong></div>
        <div class="padding border-bottom">
            <from style="margin:0px" action="javascript:getList()" name="TimeInterval">
                <tr>
                    <td>开始日期</td>
                    <td><select name="start_dateYear">
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option selected="" value="2017">2017</option>
                        <option value="2018">2018</option>
                    </select>
                    </td>
                    <td><select name="start_dateMonth">
                        <option value="1">01</option>
                        <option selected="" value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    </td>
                    <td>
                        <select name="start_dateDay">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option selected="" value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </td>
                    <td>结束日期</td>
                    <td><select name="end_dateYear">
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option selected="" value="2017">2017</option>
                        <option value="2018">2018</option>
                    </select>
                    </td>
                    <td><select name="end_dateMonth">
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option selected="" value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    </td>
                    <td><select name="end_dateDay">
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option selected="" value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    </td>
                    <td><input class="button border-yellow icon-plus-square-o" type="submit" value="查询" name="submit"></td>
                </tr>
            </from>


        </div>
        <table class="table table-hover text-center">
            <tr>
                <th style="text-align:center;">ID</th>
                <th><span id='spot'>排名</span></th>
                <th>订单id</th>
                <th>总价</th>
                <th>时间</th>
                <th>操作</th>
            </tr>
            <volist name="list" id="vo">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrx']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
               <tr>
                    <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['rank'];?>
</td>
                   <td><?php echo $_smarty_tpl->tpl_vars['value']->value['order_id'];?>
</td>
                   <td><?php echo $_smarty_tpl->tpl_vars['value']->value['average'];?>
</td>
                   <td><?php echo $_smarty_tpl->tpl_vars['value']->value['addtime'];?>
</td>
                    <td><div class="button-group">
                        <a class="button border-green" href="add.html"><span class="icon-edit"></span>查看</a>
                        <a class="button border-red" href="javascript:void(0)" onclick="deleteArt(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)"><span class="icon-trash-o"></span> 删除</a>
                    </div></td>
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
            location.href = '?c=salerank&a=delete&id='+$id;
        }else{
            location.href = '?c=salerank&a=select';
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
            $.getJSON("?c=salerank&a=deleteall",{id:art_array},function(msg){
                if (msg ==1) {
                    alert("操作成功");
                    location.reload();
                } else {
                    alert("操作失败");
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
        location.href = "?c=salerank&a=select&p="+page.value+"#spot";
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
