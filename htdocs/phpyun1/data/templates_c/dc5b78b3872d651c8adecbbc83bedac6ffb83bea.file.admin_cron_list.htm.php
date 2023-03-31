<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 11:59:12
         compiled from "D:\rcw\uploads\app\template\admin\admin_cron_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:6322537365fab6190eab577-53350418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc5b78b3872d651c8adecbbc83bedac6ffb83bea' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_cron_list.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6322537365fab6190eab577-53350418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'rows' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab6190f1b0c4_52769579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab6190f1b0c4_52769579')) {function content_5fab6190f1b0c4_52769579($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
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
	<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
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
				<div class="admin_new_tip_list">
					管理员可以通过“计划任务”实现自动刷新职位、简历刷新和生成XML操作。计划任务可以设置计划类型按“天、周、月”方式去执行！
				</div>
			</div>
		</div>

		<div class="clear"></div>
		
		<div class="admin_new_search_box">
			<div class="admin_new_select">
				<a href="index.php?m=cron&c=add" class="admin_new_cz_tj" style="margin-left:0px;">+ 添加任务</a>
			</div>

			<div class="clear"></div>
			<div style="height:10px;"></div>

			<div class="table-list">
				<div class="admin_table_border">
					<form action="" name="myform" method="get">
						<input type="hidden" name="pytoken" id='pytoken'  value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
						
						<table width="100%">
							<thead>
								<tr class="admin_table_top">
									<th align="left"><div style="padding-left:10px;">任务名称</div></th>
									<th align="left">执行文件</th>
									<th align="left">执行类型</th>
									<th align="left">是否启用</th>
									<th align="left">上次执行时间</th>
									<th align="left">下次执行时间</th>
									<th width="180">操作</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									<tr align="left">
										<td align="left" class="td1"><div style="padding-left:10px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div></td>
										<td  align="left" class="ud"><?php echo $_smarty_tpl->tpl_vars['v']->value['dir'];?>
</td>
										<td class="ud" align="left">
											<?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1) {?>每周<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['type']==2) {?>每月<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['type']==3) {?>每天<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['type']==4) {?>每隔N秒<?php }?>
										</td>
										<td class="od" align="left"> 
											<?php if ($_smarty_tpl->tpl_vars['v']->value['display']==1) {?>是<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['display']==2) {?>否<?php }?>
										</td>
										<td  align="left" class="ud">
											<?php if ($_smarty_tpl->tpl_vars['v']->value['nowtime']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['nowtime'],"%Y-%m-%d %H:%M");
} else { ?>- -<?php }?>
										</td>
										<td  align="left" class="ud">
											<?php if ($_smarty_tpl->tpl_vars['v']->value['nexttime']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['nexttime'],"%Y-%m-%d %H:%M");
} else { ?>- -<?php }?>
										</td>
										<td align="center"> 
											
											<?php if ($_smarty_tpl->tpl_vars['v']->value['display']==1) {?>
												<a href="javascript:void(0)" onclick="layer_del('确定现在执行该任务？', 'index.php?m=cron&c=run&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth">执行</a>
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['display']==2) {?>
												<a href="javascript:void(0)" onclick="layer_del('该任务尚未启用！', 'index.php?m=cron');" class="admin_new_c_bth">执行</a>
											<?php }?>
											<a href="index.php?m=cron&c=add&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"class="admin_new_c_bth">修改</a> 
											<a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?m=cron&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>
