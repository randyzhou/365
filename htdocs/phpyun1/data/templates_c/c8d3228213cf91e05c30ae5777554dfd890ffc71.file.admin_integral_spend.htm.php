<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 20:44:45
         compiled from "D:\rcw\uploads\app\template\admin\admin_integral_spend.htm" */ ?>
<?php /*%%SmartyHeaderCode:9956374175fa696bde71235-76309232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d3228213cf91e05c30ae5777554dfd890ffc71' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_integral_spend.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9956374175fa696bde71235-76309232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa696bde7ba94_26763937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa696bde7ba94_26763937')) {function content_5fa696bde7ba94_26763937($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
	</head>
	<body class="body_ifm">
		<form class="layui-form">
			<div class="infoboxp">
				<div class="tabs_info">
					<ul>
						<li><a href="index.php?m=admin_userset">个人设置</a></li>
						<li><a href="index.php?m=admin_userset&c=logo">头像设置</a></li>
						<li><a href="index.php?m=admin_userset&c=set"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</a></li>
						<li class="curr"><a href="index.php?m=admin_userset&c=userspend">消费设置</a></li>
					</ul>
				</div>
				<div class="admin_new_tip">
					<a href="javascript:;" class="admin_new_tip_close"></a>
					<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
					<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
					<div class="admin_new_tip_list_cont">
						<div class="admin_new_tip_list">该页面展示了网站个人消费设置管理</div>
					</div>
				</div>

				<div class="main_tag mt10">
					<div class="clear"></div>
					<div class="tag_box">
						<div>
							<table width="100%" class="table_form">
								<tr class="admin_table_trbg">
									<th width="220" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
									<td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
								</tr>
								<tr>
									<th width="220">个人简历置顶费用：</th>
									<td>
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="text" name="integral_resume_top" id="integral_resume_top" required lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
" autocomplete="off" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" class="input-text" onBlur="payintegral(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');">
												元 / 天
											</div>
										</div>
									</td>
								</tr>
	
								<tr class="admin_table_trbg">
									<th>&nbsp;</th>
									<td align="left">
										<input class="layui-btn layui-btn-normal" id="integral" type="button" name="config" value="提交" />&nbsp;&nbsp;
										<input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			<?php echo '<script'; ?>
>
				var proportion = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';
				layui.use(['layer', 'form'], function() {
					var layer = layui.layer,
						form = layui.form,
						$ = layui.$;
				});
				$(function() {
					$("#integral").click(function() {
						loadlayer();
						$.post("index.php?m=admin_userset&c=saveSpend", {
							config: $("#integral").val(),
							integral_resume_top_type: 2,
							integral_resume_top: $("#integral_resume_top").val(),
							pytoken: $("#pytoken").val()
						}, function(data, textStatus) {
							parent.layer.closeAll('loading');
							config_msg(data);
						});
					});
				})
			<?php echo '</script'; ?>
>
		</form>
	</body>
</html>
<?php }} ?>
