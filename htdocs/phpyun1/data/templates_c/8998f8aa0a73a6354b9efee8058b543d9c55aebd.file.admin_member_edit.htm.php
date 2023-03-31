<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 03:06:23
         compiled from "D:\rcw\uploads\app\template\admin\admin_member_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:19775213915f9db5afb6f972-15374584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8998f8aa0a73a6354b9efee8058b543d9c55aebd' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_member_edit.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19775213915f9db5afb6f972-15374584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'member' => 0,
    'Dname' => 0,
    'lasturl' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9db5afb8c8d7_92785977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9db5afb8c8d7_92785977')) {function content_5f9db5afb8c8d7_92785977($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
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
		<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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

		<title>后台管理</title>
		<style>
			* {margin: 0;padding: 0;}
			body, div {margin: 0;padding: 0;}
		</style>
	</head>
	<body class="body_ifm">
		<div class="infoboxp">
			<div class="admin_new_tip">
				<a href="javascript:;" class="admin_new_tip_close"></a>
				<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
				<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
				<div class="admin_new_tip_list_cont">
					<div class="admin_new_tip_list">该页面展示了网站会员信息。</div>
					<div class="admin_new_tip_list">
						<span class="admin_new_comsj">
							<?php if (is_array($_smarty_tpl->tpl_vars['member']->value)) {?>
							最近登录时间：
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['member']->value['login_date'],'%Y-%m-%d');?>

							<?php }?>
						</span>
						<span class="admin_new_comsj"> <?php if (is_array($_smarty_tpl->tpl_vars['member']->value)) {?>
							注册时间：
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['member']->value['reg_date'],'%Y-%m-%d');?>

							<?php }?> </span>
						<span class="admin_new_comsj"> <?php if (is_array($_smarty_tpl->tpl_vars['member']->value)) {?>
							注册IP： <?php echo $_smarty_tpl->tpl_vars['member']->value['reg_ip'];?>

							<?php }?>
						</span>
						<span class="admin_new_comsj">
							<?php if (is_array($_smarty_tpl->tpl_vars['member']->value)) {?>
							登录IP：<?php echo $_smarty_tpl->tpl_vars['member']->value['login_ip'];?>

							<?php }?> </span>
						<span class="admin_new_comsj"> <?php if (is_array($_smarty_tpl->tpl_vars['member']->value)) {?>
							登录次数：<?php echo $_smarty_tpl->tpl_vars['member']->value['login_hits'];?>

							<?php }?> </span>
					</div>
				</div>
			</div>

			<div class="main_tag mt10">
				<div class="tag_box">
					<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
					<form class="layui-form" name="myform" target="supportiframe" action="index.php?m=admin_member&c=editSave" method="post" onsubmit="return useredit()" enctype="multipart/form-data">
						<table width="100%" class="table_form table_form_thr" style="background:#fff;">
							<tr>
								<td colspan="4" bgcolor="#f0f6fb">
									<div class="admin_bold">账号信息</div>
								</td>
							</tr>
							<tr>
								<th width="140">当前身份：</th>
								<td>
									<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['sf'];?>
" id="sf" readonly class="admin_comedity_text">
								</td>
							</tr>
							<tr>
								<th width="140">用户名：</th>
								<td>
									<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
" name="username" id="username" class="admin_comedity_text">
								</td>
							</tr>
							<tr>
								<th width="160">密码：</th>
								<td><input type="text" value="" name="password" class="admin_comedity_text">
									<span class="admin_web_tip">不修改请留空!</span></td>
							</tr>
							<tr class="admin_table_trbg">
								<th>联系手机：</th>
								<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['moblie'];?>
" name="moblie" class="input-text">
									<font color="gray"></font>
								</td>
							</tr>
							<tr>
								<th>E-mail：</th>
								<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['email'];?>
" name="email" class="input-text">
									<font color="gray"></font>
								</td>
							</tr>
							<tr>
								<th width="140">注册IP：</th>
								<td>
									<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['reg_ip'];?>
" name="reg_ip" id="reg_ip" class="admin_comedity_text">
								</td>
							</tr>
							<tr>
								<th>使用范围：</th>
								<td>
									<input type="button" value="<?php if ($_smarty_tpl->tpl_vars['member']->value['did']) {
echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['member']->value['did']];
} else { ?>总站<?php }?>" class="city_news_but" onClick="add_site('<?php echo $_smarty_tpl->tpl_vars['member']->value['did'];?>
','<?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['member']->value['did']];?>
');">
									<input type="hidden" id="did" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['did'];?>
" name="did">
								</td>
							</tr> 
							<tr>
								<th>状态：</th>
								<td colspan="3">
									<div class="layui-form-item">
										<div class="layui-input-block">
											<div class="admin_examine_right">
												<input name="status" <?php if ($_smarty_tpl->tpl_vars['member']->value['status']=='1') {?>checked<?php }?> value="1" title="正常" type="radio" />
												<input name="status" <?php if ($_smarty_tpl->tpl_vars['member']->value['status']=='2') {?>checked<?php }?> value="2" title="锁定" type="radio" />
											</div>
										</div>
									</div>
									<font color="gray"></font>
								</td>
							</tr>
							<tr>
								<th></th>
								<td colspan="3">
									<input type="hidden" name="uid" id="uid" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['uid'];?>
" />
									<input type="hidden" name="usetype" id="usetype" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['usetype'];?>
" />
									<input type="hidden" name="lasturl" value="<?php echo $_smarty_tpl->tpl_vars['lasturl']->value;?>
">
									<input class="layui-btn layui-btn-normal" type="submit" name="submit" value="&nbsp;修 改&nbsp;" />
									<input class="layui-btn layui-btn-normal" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" />
								</td>
							</tr>
						</table>
						<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					</form>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
	</body>
</html>
<?php }} ?>
