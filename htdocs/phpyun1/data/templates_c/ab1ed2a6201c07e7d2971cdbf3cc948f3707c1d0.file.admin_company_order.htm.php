<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 21:28:37
         compiled from "D:\rcw\uploads\app\template\admin\admin_company_order.htm" */ ?>
<?php /*%%SmartyHeaderCode:2280461575fb7c48552daf4-54583149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab1ed2a6201c07e7d2971cdbf3cc948f3707c1d0' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_company_order.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2280461575fb7c48552daf4-54583149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'ccname' => 0,
    'pytoken' => 0,
    'total' => 0,
    'rows' => 0,
    'key' => 0,
    'job' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'where' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb7c48558d540_46279677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb7c48558d540_46279677')) {function content_5fb7c48558d540_46279677($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
 
<title>后台管理</title>
</head>
<body class="body_ifm">

<div class="infoboxp"> 
	<div class="admin_new_tip">
		<a href="javascript:;" class="admin_new_tip_close"></a>
		<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
		<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
		
		<div class="admin_new_tip_list_cont">
			<?php if ($_GET['comid']!='') {?>
				<div class="admin_new_tip_list">该页面展示了网站企业用户：<font color="#f00">【<?php echo $_smarty_tpl->tpl_vars['ccname']->value;?>
】</font> 的充值订单信息，可对订单记录进行审核修改删除操作。</div>
			<?php } else { ?>
				<div class="admin_new_tip_list">该页面展示了网站所有的充值订单信息，可对充值订单进行审核修改删除操作。</div>
			<?php }?>
			<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
		</div>

	</div>
 

	<div class="clear"></div>

	<div class="admin_new_search_box"> 
		<form action="index.php" name="myform" method="get">
            <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
"> 
            <input name="m" value="company_order" type="hidden"/>   
            <input name="typezf" value="<?php echo $_GET['typezf'];?>
" type="hidden"/>   
            <input name="typedd" value="<?php echo $_GET['typedd'];?>
" type="hidden"/>   
            <input name="order_state" value="<?php echo $_GET['order_state'];?>
" type="hidden"/>
            <input name="fb" value="<?php echo $_GET['fb'];?>
" type="hidden"/>  
			<input name="comid" value="<?php echo $_GET['comid'];?>
" type="hidden"/>

			<div class="admin_new_search_name">搜索类型：</div>

    		<div class="admin_Filter_text formselect"  did='dtypeca'>
				<input type="button" value="<?php if ($_GET['typeca']=='') {?>充值单号<?php } else { ?>用户名称<?php }?>" class="admin_Filter_but"  id="btypeca">
				<input type="hidden" id='typeca' value="<?php if ($_GET['typeca']=='') {?>1<?php } else {
echo $_GET['typeca'];
}?>" name='typeca'>
				<div class="admin_Filter_text_box" style="display:none" id='dtypeca'>
					<ul>
						<li><a href="javascript:void(0)" onClick="formselect('1','typeca','充值单号')">充值单号</a></li>
						<li><a href="javascript:void(0)" onClick="formselect('2','typeca','用户名称')">用户名称</a></li>                  
				  </ul>  
				</div>
			</div>

            <input class="admin_Filter_search"  placeholder="输入你要搜索的关键字" type="text" name="keyword"  size="25" style="float:left"> 
            
			<div class="admin_new_search_name1">充值时间：</div>
            
			<input id="time" class="comy_time_text" type="text" readonly name="time_start1" style="width:100px;" value="<?php echo $_GET['time_start1'];?>
" lay-key="1">
            
			<input type="text" id="time_end" class="comy_time_text" name="time_end1" style="width:100px;"  readonly="" value="<?php echo $_GET['time_end1'];?>
" lay-key="2">
            
			<input class="admin_Filter_bth"  type="submit" name="news_search" value="检索"/>
			
			<a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj" style="float:left">高级搜索</a> 
			
			<input class="admin_button" type="button" value="导出" onClick="Export();" style="float:left;margin-left:10px;height:30px;background:#f60"/>
		</form>
		<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<div class="clear"></div>
	<div class="admin_statistics">
		<?php if ($_GET['comid']=='') {?>
			数据统计：
			<em class="admin_statistics_s">订单总金额：<span class="ajaxorderpriceall">0</span></em>
			<em class="admin_statistics_s">已付款金额：<span class="ajaxorderpricepayed">0</span></em>
			<em class="admin_statistics_s">等待确认金额：<span class="ajaxorderpricepaying">0</span></em>
			<em class="admin_statistics_s">待付款金额：<span class="ajaxorderpricepay">0</span></em>
			<!-- 支付失败金额：<span class="ajaxorderpricefail">0</span>； -->
			搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> 条数据；
		<?php } else { ?>
			数据统计：<?php echo $_smarty_tpl->tpl_vars['total']->value;?>

		<?php }?>
 	</div>    
 
<div class="clear"></div>
<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="index.php" name="myform" id='myform' method="get" target="supportiframe">
<input type="hidden" name="pytoken" id='pytoken'  value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
<input name="m" value="company_order" type="hidden"/>
<input name="c" value="del" type="hidden"/>
<table width="100%">
	<thead>
		<tr class="admin_table_top">
		   <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
            
            <th>
			<?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
			<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'company_order','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a>
            <?php } else { ?>
            <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'company_order','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a>
            <?php }?>
			</th>
			<th align="left">用户名称</th>
			<th align="left">公司名称（姓名）</th>
            <th align="left">充值单号</th>
			<th align="left">支付类型</th>
            <th align="left">订单类型</th> 
            <th align="left">
			<?php if ($_GET['t']=="order_price"&&$_GET['order']=="asc") {?>
			<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'order_price','m'=>'company_order','untype'=>'order,t'),$_smarty_tpl);?>
">付款金额<img src="images/sanj.jpg"/></a>
            <?php } else { ?>
            <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'order_price','m'=>'company_order','untype'=>'order,t'),$_smarty_tpl);?>
">付款金额<img src="images/sanj2.jpg"/></a>
            <?php }?>
			</th>
            
            <th>
			<?php if ($_GET['t']=="order_time"&&$_GET['order']=="asc") {?>
			<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'order_time','m'=>'company_order','untype'=>'order,t'),$_smarty_tpl);?>
">时间<img src="images/sanj.jpg"/></a>
            <?php } else { ?>
            <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'order_time','m'=>'company_order','untype'=>'order,t'),$_smarty_tpl);?>
">时间<img src="images/sanj2.jpg"/></a>
            <?php }?>
			</th>
			<th>状态</th>
			<th class="admin_table_th_bg">操作</th>
		</tr>
	</thead>
	<tbody>
   <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job']->key;
?>
    <tr align="center"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">
	    <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1"><span><?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
</span></td> 
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['job']->value['username'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['job']->value['comname'];?>
</td>
   	 	<td align="left"><?php echo $_smarty_tpl->tpl_vars['job']->value['order_id'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['job']->value['order_type_n'];?>
</td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['job']->value['type_n'];?>
</td>
    	<td align="left"><?php echo $_smarty_tpl->tpl_vars['job']->value['order_price'];?>
</td>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['order_time'],"%Y-%m-%d %H:%M");?>
</td>
   	 	<td><?php echo $_smarty_tpl->tpl_vars['job']->value['order_state_n'];?>
</td>
    	<td align="left" style="text-align:center;">
			<a href="index.php?m=company_order&c=edit&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"  class="admin_new_c_bth admin_new_c_bth_yl">查看</a> 
            
        	<a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=company_order&c=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc ">删除</a>
        	<?php if ($_smarty_tpl->tpl_vars['job']->value['order_state']==1||$_smarty_tpl->tpl_vars['job']->value['order_state']==3) {?>
				<br/>
				<a href="javascript:void(0)" onClick="layer_del('确认该订单将充值到用户帐户，是否确定？', 'index.php?m=company_order&c=setpay&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="admin_new_c_bth  " >确认</a>
                
				<a href="index.php?m=company_order&c=edit&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"  class="admin_new_c_bth">修改</a> 
			<?php }?>
        </td>
  </tr>
  <?php } ?>
  <tr>
  <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
  <td colspan="10" >
  <label for="chkAll2">全选</label>&nbsp;
    <input class="admin_button" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
    </td>
   </tr>
		<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['config']->value['sy_listnum']) {?>
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['pagenum']->value==1) {?>
					<td colspan="3"> 从 1 到 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
				<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value>1&&$_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['pages']->value) {?>
					<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['pagenum']->value*$_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
				<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value==$_smarty_tpl->tpl_vars['pages']->value) {?>
					<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
				<?php }?>
				<td colspan="8" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
			</tr>
		<?php }?>
  </tbody>
  </table>
</form>
</div></div>
</div>
<div id="export" style="display:none;">
	<div style=" margin-top:10px;">
    <div>
      <form action="index.php?m=company_order&c=xls" target="supportiframe" method="post" id="formstatus" class="myform"  onSubmit="return check_form();">
      <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      <input type="hidden" name="where" value="<?php echo $_smarty_tpl->tpl_vars['where']->value;?>
">
      <input name="uid" value="" type="hidden">
      <input type="hidden" name="time_start" >
      <input type="hidden" name="time_end" >
      </form>
    </div>
  </div>
</div>
<style>
.admin_resume_dc_sub1{width:350px; text-align:center;}
.admin_new_search_name1{width:60px; line-height:28px; float:left;}
</style>
<?php echo '<script'; ?>
>
function Export(){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	$("input[name=uid]").val(codewebarr);
	layer.confirm("确定导出充值记录吗？",function(){
		setTimeout(function(){$('#formstatus').submit()},0); layer.closeAll();
	});
}
layui.use(['laydate'], function(){
	var laydate = layui.laydate
	,$ = layui.$;

	laydate.render({
		elem: '#time'
	});

	laydate.render({
		elem: '#time_end'
	});
});
function check_form(){
	$("input[name=time_start]").val('');
	$("input[name=time_end]").val('');
	var time = $("#time").val();
	var time_end = $("#time_end").val();
	if(time_end != '' && time != ''){
		var date1 = new Date(time+" 00:00:00");
		var time1 = date1.getTime();
		var date2 = new Date(time_end+" 23:59:59");
		var time2 = date2.getTime();
		$("input[name=time_start]").val(time1);
		$("input[name=time_end]").val(time2);
		if(time2<=time1){
			parent.layer.msg('结束时间不能小于开始时间！', 2,8);
			return false
		}
	}else{
		if(time != ''){
			var date1 = new Date(time+" 00:00:00");
			var time1 = date1.getTime();
			$("input[name=time_start]").val(time1);
		}
		if(time_end != ''){
			var date2 = new Date(time_end+" 23:59:59");
			var time2 = date2.getTime();
			$("input[name=time_end]").val(time2);		
		}
	}
}

$(document).ready(function(){
	$.get("index.php?m=company_order&c=orderSum", function(data) {
		var datas = eval('(' + data + ')');
		if(datas.orderPriceAll) {
			$('.ajaxorderpriceall').html("￥"+datas.orderPriceAll);
		}
		if(datas.orderPayed) {
			$('.ajaxorderpricepayed').html("￥"+datas.orderPayed);
		}
		if(datas.orderPay) {
			$('.ajaxorderpricepay').html("￥"+datas.orderPay);
		}
		if(datas.orderPaying) {
			$('.ajaxorderpricepaying').html("￥"+datas.orderPaying);
		}
	});
});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
