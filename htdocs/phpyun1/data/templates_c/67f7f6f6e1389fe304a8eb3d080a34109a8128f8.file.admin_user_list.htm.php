<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-19 16:07:03
         compiled from "D:\rcw\uploads\app\template\admin\admin_user_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:19907962605fb627a72e44a0-98843806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67f7f6f6e1389fe304a8eb3d080a34109a8128f8' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_user_list.htm',
      1 => 1576897820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19907962605fb627a72e44a0-98843806',
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
  'unifunc' => 'content_5fb627a7302b86_41138739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb627a7302b86_41138739')) {function content_5fb627a7302b86_41138739($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
				<div class="admin_new_tip_list">管理员列表主要显示该网站所有管理员用户，包括分站管理员可以设置不同的管理员权限！</div>
			</div>
		</div>

		<div class="clear"></div>
		
		<div class="admin_new_search_box">
			<a href="index.php?m=admin_user&c=add" class="admin_new_cz_tj">+ 添加管理员</a>
		</div>

		<div class="clear"></div>

		<div class="table-list">
			<div class="admin_table_border">
				<table width="100%">
					<thead>
						<tr class="admin_table_top">
							<th width="7%">编号</th>
							<th width="10%" align="left">登录名</th>
							<th width="10%" align="left">权限</th>
							<th width="10%" align="left">真实姓名</th>
							<th width="15%" align="left">联系方式</th>
							<th width="12%" class="admin_table_th_bg" align="left">操作</th>
						</tr>
					</thead>
					
					<tbody>
				  
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<tr>
							<td height="17" align="center" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
							<td align="left" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
							<td align="left" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['group_name'];?>
</td>
							<td align="left" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
							<td align="left" style="cursor:pointer;">
								<?php if ($_smarty_tpl->tpl_vars['v']->value['moblie']) {?> <div class="mt5">手机：<?php echo $_smarty_tpl->tpl_vars['v']->value['moblie'];?>
</div><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value['weixin']) {?><div class="mt5">微信： <?php echo $_smarty_tpl->tpl_vars['v']->value['weixin'];?>
</div><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value['qq']) {?> <div class="mt5">QQ： <?php echo $_smarty_tpl->tpl_vars['v']->value['qq'];?>
</div><?php }?>
							</td>
							<td  align="left">
								<a href="index.php?m=admin_user&c=add&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  class="admin_new_c_bth">修改</a>
								<a href="javascript:;" onClick="layer_del('确定要删除？','index.php?m=admin_user&c=deluser&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>	
							</td>
						</tr>
						<?php } ?>

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
								<td colspan="3" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</body>
</html><?php }} ?>
