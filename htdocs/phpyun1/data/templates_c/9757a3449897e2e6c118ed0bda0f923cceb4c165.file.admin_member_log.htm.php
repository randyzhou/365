<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-16 22:17:20
         compiled from "D:\rcw\uploads\app\template\admin\admin_member_log.htm" */ ?>
<?php /*%%SmartyHeaderCode:9144381075fb289f0b970e7-09404491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9757a3449897e2e6c118ed0bda0f923cceb4c165' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_member_log.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9144381075fb289f0b970e7-09404491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'total' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb289f0bcda71_03620486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb289f0bcda71_03620486')) {function content_5fb289f0bcda71_03620486($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
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
		<?php echo '<script'; ?>
 type="text/javascript">
			function cktimesave() {
				var stime = $("#stime").val();
				var etime = $("#etime").val();
				if (stime && etime && toDate(stime) > toDate(etime)) {
					layer.msg("结束时间必须大于开始时间！", 2, 8);
					return false;
				}
			}
		<?php echo '</script'; ?>
>
		<title>后台管理</title>
	</head>
	<body class="body_ifm">
		<div class="infoboxp">
			<div class="tabs_info">
				<ul>
					<li <?php if ($_GET['utype']=='') {?>class="curr"<?php }?>> <a href="index.php?m=admin_memberlog">个人日志</a></li>
					<li <?php if ($_GET['utype']=="2") {?>class="curr"<?php }?>> <a href="index.php?m=admin_memberlog&utype=2">企业日志</a></li>
				</ul>
			</div>
			<div class="admin_new_tip">
				<a href="javascript:;" class="admin_new_tip_close"></a>
				<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
				<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
				<div class="admin_new_tip_list_cont">
					<div class="admin_new_tip_list">该页面展示了网站会员日志信息，可对会员日志查看删除操作。</div>
					<div class="admin_new_tip_list">可输入关键字进行搜索，也可进行详细的高级搜索。</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="admin_new_search_box">
				<form action="index.php" name="myform" method="get" onSubmit="return cktimesave()">
					<input name="m" value="admin_memberlog" type="hidden" />
					<input name="utype" value="<?php echo $_GET['utype'];?>
" type="hidden" />
					<div class="admin_new_search_name">搜索类型：</div>
					<div class="admin_Filter_text formselect" did="dtype">
						<input type="button" <?php if ($_GET['type']=='1'||$_GET['type']=='') {?> value="用户名" <?php } elseif ($_GET['type']=='2') {?> value="内容" <?php }?> class="admin_Filter_but" id="btype">
						<input type="hidden" name="type" id="type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>" />
						<div class="admin_Filter_text_box" style="display:none" id="dtype">
							<ul>
								<li><a href="javascript:void(0)" onClick="formselect('1','type','用户名')">用户名</a></li>
								<li><a href="javascript:void(0)" onClick="formselect('2','type','内容')">内容</a></li>
							</ul>
						</div>
					</div>

					<input class="admin_Filter_search" type="text" name="keyword" value="<?php echo $_GET['keyword'];?>
" size="25"style="float:left">
					<span class="admin_new_search_name">时间段：</span>
					<input class="admin_Filter_search" type="text" id="time" value="<?php echo $_GET['time'];?>
" name="time" />
					<input class="admin_Filter_bth" type="submit" name="qysearch" value="搜索" />
				</form>
			</div>
			<div class="clear"></div>
			<div class="table-list">
				<div class="admin_table_border">
					<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
					<form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
						<input name="m" value="admin_memberlog" type="hidden" />
						<input name="c" value="dellog" type="hidden" />
						<table width="100%">
							<thead>
								<tr class="admin_table_top">
									<th style="width:20px;"><label for="chkall">
											<input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' />
										</label></th>
									<?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
									<th><a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'admin_memberlog','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg" /></a></th>
									<?php } else { ?>
									<th><a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'admin_memberlog','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg" /></a></th>
									<?php }?>
									<th align="left">用户名</th>
									<th align="left">内容</th>
									<th>IP</th>
									<?php if ($_GET['t']=="ctime"&&$_GET['order']=="asc") {?>
									<th><a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'ctime','m'=>'admin_memberlog','untype'=>'order,t'),$_smarty_tpl);?>
">时间<img src="images/sanj.jpg" /></a></th>
									<?php } else { ?>
									<th><a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'ctime','m'=>'admin_memberlog','untype'=>'order,t'),$_smarty_tpl);?>
">时间<img src="images/sanj2.jpg" /></a></th>
									<?php }?>
									<th class="admin_table_th_bg">操作</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
									<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
									<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
									<td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ip'];?>
</td>
									<td class="td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d %H:%M");?>
</td>
									<td><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_memberlog&c=dellog&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
								</tr>
								<?php } ?>
								<tr>
									<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
									<td colspan="8">
										<label for="chkAll2">全选</label>&nbsp;
										<input class="admin_button" type="button" name="delsub" value="删除所选" onclick="return really('del[]')" />
										<?php if ($_GET['utype']=='') {?>
										<input class="admin_button" type="button"  value="一键删除"  onClick="layer_del('确定要清空个人日志？', 'index.php?m=admin_memberlog&c=dellog&del=alluser');"/>
										<?php } elseif ($_GET['utype']=="2") {?>
										<input class="admin_button" type="button" value="一键删除" onClick="layer_del('确定要清空企业日志？', 'index.php?m=admin_memberlog&c=dellog&del=allcom');" />
										
										<?php }?>
									</td>
								</tr>
								<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['config']->value['sy_listnum']) {?>
								<tr>
									<?php if ($_smarty_tpl->tpl_vars['pagenum']->value==1) {?>
									<td colspan="3"> 从 1 到 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
									<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value>1&&$_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['pages']->value) {?> <td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['pagenum']->value*$_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value==$_smarty_tpl->tpl_vars['pages']->value) {?>
										<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ，总共
											<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php }?>
										<td colspan="6" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
								</tr>
								<?php }?>
							</tbody>
						</table>
						<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					</form>
				</div>
			</div>
		</div>
		<?php echo '<script'; ?>
>
			layui.use(['laydate'], function() {
				var laydate = layui.laydate,
					$ = layui.$;
				laydate.render({
					elem: '#time',
					range: '~'
				});
			});
		<?php echo '</script'; ?>
>
	</body>
</html>
<?php }} ?>