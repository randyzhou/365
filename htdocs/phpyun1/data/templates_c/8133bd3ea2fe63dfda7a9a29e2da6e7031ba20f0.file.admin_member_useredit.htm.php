<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-06 18:52:00
         compiled from "D:\rcw\uploads\app\template\admin\admin_member_useredit.htm" */ ?>
<?php /*%%SmartyHeaderCode:13855018285fa52ad007e994-56023870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8133bd3ea2fe63dfda7a9a29e2da6e7031ba20f0' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_member_useredit.htm',
      1 => 1576479745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13855018285fa52ad007e994-56023870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'member' => 0,
    'row' => 0,
    'user_sex' => 0,
    'j' => 0,
    'v' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'lasturl' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa52ad0101a04_55012221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa52ad0101a04_55012221')) {function content_5fa52ad0101a04_55012221($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
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
					<div class="admin_new_tip_list">该页面展示了网站个人会员信息。</div>
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
					<form class="layui-form" name="myform" target="supportiframe" action="index.php?m=user_member&c=editSave" method="post" onsubmit="return useredit()" enctype="multipart/form-data">
						<table width="100%" class="table_form table_form_thr" style="background:#fff;">
							<tr>
								<td colspan="4" bgcolor="#f0f6fb">
									<div class="admin_bold">账号信息</div>
								</td>
							</tr>
							<tr>
								<th width="140">用户名：</th>
								<td>
									<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
" name="username" id="username" class="admin_comedity_text">
									<a href="javascript:;" onClick="editname('<?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
');" class="admin_comedity_text_a">修改用户名</a>
								</td>
							</tr>
							<tr>
								<th width="160">密码：</th>
								<td><input type="text" value="" name="password" class="admin_comedity_text">
									<span class="admin_web_tip">不修改请留空!</span></td>
							</tr>
							<tr>
								<td colspan="4" bgcolor="#f0f6fb">
									<div class="admin_bold">基本资料</div>
								</td>
							</tr>
							<tr>
								<th>姓名：</th>
								<td><input name="name" type="text" maxlength="50" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" /></td>
							</tr>
							<tr>
								<th>性别：</th>
								<td>
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<select name="sex" lay-filter="" id="sex">
												<option>请选择</option>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==$_smarty_tpl->tpl_vars['j']->value) {?> selected <?php }?>> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

												</option>
												<?php } ?>
											</select>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>出生年月：</th>
								<td colspan="3">
									<input name="birthday" id="birthday" type="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['birthday'];?>
" class="input-text" />
								</td>
							</tr>
							<tr class="admin_table_trbg">
								<th>工作经验：</th>
								<td>
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<select name="exp" id="exp" lay-verify="">
												<option>请选择</option>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
												<?php } ?>
											</select>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>教育程度：</th>
								<td>
									<div class="layui-form-item">
										<div class="layui-input-block">
											<div class="layui-input-inline">
												<select name="edu" id="edu" lay-verify="">
													<option>请选择</option>
													<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['edu']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
								</td>
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
								<th>户籍所在地：</th>
								<td><input name="domicile" type="text" class="input-text" maxlength="255" size="40" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['domicile'];?>
" /></td>
							</tr>
							<tr>
								<th>现居住地：</th>
								<td><input name="living" type="text" class="input-text" maxlength="255" size="40" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['living'];?>
" /></td>
							</tr>
							<tr>
								<th>婚姻状况：</th>
								<td>
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<select name="marriage" id="marriage" lay-verify="">
												<option>请选择</option>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['marriage']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
												<?php } ?>
											</select>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>身高：</th>
								<td>
									<input type="text" name="height" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['height'];?>
" size="10" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" />CM 
								</td>
							</tr>
							<tr class="admin_table_trbg">
								<th>民族：</th>
								<td><input type="text" name="nationality" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['nationality'];?>
" size="15" /></td>
							</tr>
							<tr>
								<th>体重：</th>
								<td>
									<input type="text" name="weight" class="admin_comedity_text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['weight'];?>
" size="12" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" />kg 
								</td>
							</tr>
							<tr>
								<th>证件号码：</th>
								<td><input name="idcard" type="text" size="30" class="input-text" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idcard'];?>
" onKeyUp="this.value=this.value.replace(/[^0-9Xx.]/g,'')" /></td>
							</tr>
							<tr class="admin_table_trbg">
								<th>详细地址：</th>
								<td><input name="address" type="text" class="input-text" maxlength="255" size="40" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" /></td>
							</tr>
							<tr>
								<th>个人主页/博客：</th>
								<td><input name="homepage" type="text" class="input-text" maxlength="255" size="40" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['homepage'];?>
" /></td>
							</tr>
							<tr class="admin_table_trbg">
								<th>QQ：</th>
								<td colspan="4"><input name="qq" type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['qq'];?>
" /></td>
							</tr>
							<tr class="admin_table_trbg">
								<th width="160">个人二维码：</th>
								<td colspan="4">
									<button type="button" class="yun_bth_pic noupload" lay-data="{imgid: 'ewm'}">上传图片</button>
									<input type="hidden" id="laynoupload" value="1"/>
									<img id="ewm" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['wxewm'];?>
" width="60" height="60" <?php if (!$_smarty_tpl->tpl_vars['row']->value['wxewm']) {?>class="none"<?php }?>>
								</td> 
							</tr> 
							<tr class="admin_table_trbg">
								<th>自我介绍：</th>
								<td colspan="3"><textarea name="description" id="description" class="admin_comdit_textarea"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</textarea></td>
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
		<?php echo '<script'; ?>
>
			var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
			layui.use(['layer', 'form', 'laydate'], function() {
				var layer = layui.layer,
					form = layui.form,
					laydate = layui.laydate,
					$ = layui.$;
					
					laydate.render({
						elem: '#birthday',
						max: '2018-12-31',
						value: '<?php if ($_smarty_tpl->tpl_vars['row']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['row']->value['birthday'];
} else { ?>1988-08-08<?php }?>'
					});
			});
			
			function useredit(){
				loadlayer();
			}
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
	</body>
</html>
<?php }} ?>
