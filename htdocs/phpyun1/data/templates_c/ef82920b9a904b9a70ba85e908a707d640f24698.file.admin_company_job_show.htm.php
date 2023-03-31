<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-18 15:13:50
         compiled from "D:\rcw\uploads\app\template\admin\admin_company_job_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:5307445325fb4c9ae7fcf17-72371763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef82920b9a904b9a70ba85e908a707d640f24698' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_company_job_show.htm',
      1 => 1578392215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5307445325fb4c9ae7fcf17-72371763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'show' => 0,
    'cache' => 0,
    'v' => 0,
    'j' => 0,
    'pytoken' => 0,
    'uid' => 0,
    'company' => 0,
    'lasturl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb4c9ae856d76_75704558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb4c9ae856d76_75704558')) {function content_5fb4c9ae856d76_75704558($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
" rel="stylesheet">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 language="javascript">var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";<?php echo '</script'; ?>
>
	
	<style>	
		* {	margin: 0;	padding: 0; }
		body, div {	margin: 0;	padding: 0; }
		.layui-form-item{ margin-bottom:0px;}
	</style>

	<title>后台管理</title>
</head>

<body class="body_ifm">

	<div class="infoboxp">
		
		<div class="admin_new_tip">
		
			<a href="javascript:;" class="admin_new_tip_close"></a> 
			<a href="javascript:;" class="admin_new_tip_open" style="display: none;"></a>
		
			<div class="admin_new_tit">
				<i class="admin_new_tit_icon"></i>操作提示
			</div>
		
			<div class="admin_new_tip_list_cont">
				<div class="admin_new_tip_list">该页面可对职位进行编辑修改操作。</div>
			</div>
			
		</div>
		
		<div class="admin_new_search_box">
			<a href="javascript:history.back();" class="admin_new_cz_tj" style="margin-left: 0px;">返回</a>
		</div>
		
		<div class="tag_box">
		
			<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display: none"></iframe>
		
			<form class="layui-form" action="" target="supportiframe" method="post" onSubmit="return check_form_job()">
				<table width="100%" class="table_form" style="background: #fff;">
					<tr>
						<td colspan="4" bgcolor="#f0f6fb"><div class="admin_bold">职位详情</div></td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['show']->value['id']) {?>
					<tr>
						<th>招聘编号：</th>
						<td><div class="yun_admin_divh"><?php echo $_smarty_tpl->tpl_vars['show']->value['id'];?>
</div></td>
					</tr>
					<?php }?>
					
					<tr class="admin_table_trbg">
						<th>招聘名称：</th>
						<td><input type="text" name="name" id="name" class="input-text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['show']->value['name'];?>
"></td>
					</tr>
					
					<tr>
						<th>从事行业：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="layui-input-inline">
										<select name="hy" id="hy" lay-verify="">
											<option>请选择</option> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['hy']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cache']->value['industry_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option> 
											<?php } ?>
										</select>
									</div>
								</div>
							</div>

						</td>
					</tr>
					
					<tr class="admin_table_trbg">
						<th>职位类别：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-inline">
									<select name="job1" id="job1" lay-filter="job1">
										<option value="">请选择</option> 
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['job1']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['cache']->value['job_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
										<?php } ?>
									</select>
								</div>
								<?php if (!empty($_smarty_tpl->tpl_vars['cache']->value['job_type'])) {?>
								<div class="layui-input-inline">
									<select name="job1_son" lay-filter="job1_son" id="job1_son">
										<option value="">请选择</option> 
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['job_type'][$_smarty_tpl->tpl_vars['show']->value['job1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['job1_son']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['cache']->value['job_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
										<?php } ?>
									</select>
								</div>
								<div class="layui-input-inline">
									<select name="job_post" lay-filter="job_post" id="job_post">
										<option value="">请选择</option> 
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['job_type'][$_smarty_tpl->tpl_vars['show']->value['job1_son']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['job_post']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['cache']->value['job_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
										<?php } ?>
									</select>
								</div>
								<?php }?>
							</div>
						</td>
					</tr>
					
					<tr>
						<th>工作地点：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-inline">
									<select name="provinceid" id="provinceid" lay-filter="citys">
										<option value="">请选择</option> 
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['cache']->value['city_name'][$_smarty_tpl->tpl_vars['v']->value];?>
 </option>
										<?php } ?>
									</select>
								</div>
								<div class="layui-input-inline">
									<select name="cityid" id="cityid" lay-filter="citys">
										<option value="">请选择</option> 
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['city_type'][$_smarty_tpl->tpl_vars['show']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['cache']->value['city_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
										<?php } ?>
									</select>
								</div>
								<div class="layui-input-inline">
									<select name="three_cityid"  id="three_cityid">
										<option value="">请选择</option> 
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['city_type'][$_smarty_tpl->tpl_vars['show']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['cache']->value['city_name'][$_smarty_tpl->tpl_vars['v']->value];?>
 </option>
										<?php } ?>
									</select>
								</div>
							</div>
						</td>
					</tr>
					
					<tr class="admin_table_trbg">
						<th width="120">薪水待遇：</th>
						<td>
							<div class="admin_job_xz_box">
								<input type="text" name="minsalary" id="minsalary" class="admin_job_xz" size="3" value="<?php if ($_smarty_tpl->tpl_vars['show']->value['minsalary']) {
echo $_smarty_tpl->tpl_vars['show']->value['minsalary'];
}?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" placeholder="最低薪资" <?php if (!$_smarty_tpl->tpl_vars['show']->value['minsalary']&&!$_smarty_tpl->tpl_vars['show']->value['maxsalary']&&$_smarty_tpl->tpl_vars['show']->value['id']) {?>disabled="disabled"<?php }?>>
								<span class="admin_job_xz_box_dw">元/月</span>
							</div> 
							<span class="admin_job_xz_box_line">-</span>
							<div class="admin_job_xz_box">
								<input type="text" name="maxsalary" id="maxsalary" class="admin_job_xz" size="5" value="<?php if ($_smarty_tpl->tpl_vars['show']->value['maxsalary']) {
echo $_smarty_tpl->tpl_vars['show']->value['maxsalary'];
}?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" placeholder="最高薪资" <?php if (!$_smarty_tpl->tpl_vars['show']->value['minsalary']&&!$_smarty_tpl->tpl_vars['show']->value['maxsalary']&&$_smarty_tpl->tpl_vars['show']->value['id']) {?>disabled="disabled"<?php }?> >
								<span class="admin_job_xz_box_dw">元/月</span>
							</div> 
							<span class="admin_job_xz_box_line"> 
								<input type="checkbox" id="salary_type" name="salary_type" title="面议" value="1" <?php if (!$_smarty_tpl->tpl_vars['show']->value['minsalary']&&!$_smarty_tpl->tpl_vars['show']->value['maxsalary']&&$_smarty_tpl->tpl_vars['show']->value['id']) {?> checked="checked" <?php }?> lay-filter="salary_type" />
							</span>
						</td>
					</tr>

					<tr class="admin_table_trbg">
						<th width="120">招聘人数：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="layui-input-inline">
										<select name="number" id="number" lay-verify="">
											<option>请选择</option> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['comdata']['job_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['number']==$_smarty_tpl->tpl_vars['v']->value) {?>selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['cache']->value['comclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option> 
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr>
						<th width="120">工作经验：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="layui-input-inline">
										<select name="exp" id="exp" lay-verify="">
											<option>请选择</option> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['comdata']['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cache']->value['comclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr class="admin_table_trbg">
						<th width="120">到岗时间：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="layui-input-inline">
										<select name="report" id="report" lay-verify="">
											<option>请选择</option> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['comdata']['job_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['report']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cache']->value['comclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option> 
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr class="admin_table_trbg">
						<th width="120">年龄要求：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="layui-input-inline">
										<select name="age" id="age" lay-verify="">
											<option>请选择</option> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['comdata']['job_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['age']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cache']->value['comclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option> 
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr>
						<th width="120">性 别：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="layui-input-inline">
										<select name="sex" lay-filter="" id="sex">
											<option>请选择</option> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['com_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['sex']==$_smarty_tpl->tpl_vars['j']->value) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option> 
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr class="admin_table_trbg">
						<th width="120">教育程度：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="layui-input-inline">
										<select name="edu" id="edu" lay-verify="">
											<option>请选择</option> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['comdata']['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['edu']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['cache']->value['comclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option> 
											<?php } ?>
										</select>
									</div>
									&nbsp;&nbsp; 
									<input name="is_graduate" title="可接受应届生"	type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['show']->value['is_graduate']) {?>checked<?php }?> />
								</div>
							</div>
						</td>
					</tr>
					
					<tr>
						<th width="120">婚姻状况：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-block">
									<div class="layui-input-inline">
										<select name="marriage" id="marriage" lay-verify="">
											<option>请选择</option> 
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['comdata']['job_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['show']->value['marriage']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cache']->value['comclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option> 
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['cache']->value['comdata']['job_lang']!=''&&count($_smarty_tpl->tpl_vars['cache']->value['comdata']['job_lang'])>0) {?>
 					<tr class="admin_table_trbg">
						<th width="120">语言要求：</th>
						<td>
							<div class="layui-form-item">
								<div class="layui-input-block">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['comdata']['job_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
										<input name="lang[]" title="<?php echo $_smarty_tpl->tpl_vars['cache']->value['comclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['show']->value['lang'])) {?> checked="checked" <?php }?> type="checkbox"> 
									<?php } ?>
								</div>
							</div>
						</td>
					</tr>
					<?php }?>
					
					<tr class="admin_table_trbg">
						<th width="120">描述职位：</th>
						<td>
							<?php echo '<script'; ?>
 id="myEditor" name="content" type="text/plain" style="width:500px;height:200px;"><?php echo $_smarty_tpl->tpl_vars['show']->value['description'];?>
<?php echo '</script'; ?>
>
						</td>
					</tr>

					<tr>
						<th width="120">浏览次数：</th>
						<td>
							<input type="text" class="input-text" name="jobhits" size="10" value="<?php echo $_smarty_tpl->tpl_vars['show']->value['jobhits'];?>
">
						</td>
					</tr>
					
					<?php if ($_smarty_tpl->tpl_vars['show']->value['id']) {?>
						<tr class="admin_table_trbg">
							<th width="120">状 态：</th>
							<td>
								<div class="yun_admin_divh">
									<?php if ($_smarty_tpl->tpl_vars['show']->value['state']==1) {?>
										<font color="blue">已审核</font>
									<?php } elseif ($_smarty_tpl->tpl_vars['show']->value['state']==3) {?>
										<font color="red">未通过</font>
									<?php } else { ?>
										<font color="red">未审核</font>
									<?php }?>
								</div>
							</td>
						</tr>
					<?php }?>
					
					<tr>
						<th width="120"></th>
						<td>
							<input type="hidden" id="cionly" name="cionly" value="<?php if (empty($_smarty_tpl->tpl_vars['cache']->value['city_type'])) {?>1<?php }?>">
							<input type="hidden" id="jionly" name="jionly" value="<?php if (empty($_smarty_tpl->tpl_vars['cache']->value['job_type'])) {?>1<?php }?>">
							<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
" /> 
							<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"> 
              <input type="hidden" name="r_status" id="r_status" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['r_status'];?>
"> 
							<?php if ($_smarty_tpl->tpl_vars['show']->value['id']) {?> 
               <input type="hidden" name="lasturl" value="<?php echo $_smarty_tpl->tpl_vars['lasturl']->value;?>
">
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['show']->value['id'];?>
">
								<input class="layui-btn layui-btn-normal" type="submit"	name="update" value="&nbsp;修 改&nbsp;" /> 
							<?php } else { ?> 
								
								<input class="layui-btn layui-btn-normal" type="submit" name="update" value="&nbsp;保 存&nbsp;" /> 
							<?php }?>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	
	<?php echo '<script'; ?>
 type="text/javascript">
	
		var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
	
		var form , getJobUrl=weburl+"/index.php?m=ajax&c=get_job_option";
		var jionly = $("#jionly").val();
		layui.use(['layer', 'form','laydate'], function(){
			var form = layui.form,
				laydate = layui.laydate,
				$ = layui.$;
		
			form.on('checkbox(salary_type)', function(data){
				if(data.elem.checked){
					$("#minsalary").attr("disabled","disabled");
					$("#maxsalary").attr("disabled","disabled");
					$("#minsalary").val(0);
					$("#maxsalary").val(0);
				}else if(!data.elem.checked){
					$("#minsalary").removeAttr("disabled","disabled");
					$("#maxsalary").removeAttr("disabled","disabled");
					$("#minsalary").val('<?php echo $_smarty_tpl->tpl_vars['show']->value['minsalary'];?>
');
					$("#maxsalary").val('<?php echo $_smarty_tpl->tpl_vars['show']->value['maxsalary'];?>
');
				}
		    });
		
			if(jionly!='1'){
				form.on('select(job1)', function(data){
					$.post(getJobUrl,{job1_son : data.value},function(html){
						$("#job1_son").html(html);
						$("#job_post").html('<option value="">请选择</option>');
						form.render();
					});
				});
				
				form.on('select(job1_son)', function(data){
					$.post(getJobUrl,{job1_son : data.value},function(html){
						$("#job_post").html(html);
						form.render();
					});
			  	});
			}
		});//end layui.use()
		
		var editor = UE.getEditor('myEditor',{
				toolbars:[['Source','|','Bold', 'italic', 'underline', 'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright','insertorderedlist', 'insertunorderedlist','emotion','simpleupload']],
				wordCount:false,
				elementPathEnabled:false,
				initialFrameHeight:200
			});
		
		function check_form_job(){
		
			var name = $.trim($("#name").val());
			var minsalary=$.trim($("#minsalary").val());
			var maxsalary=$.trim($("#maxsalary").val());
			var jionly = $("#jionly").val();
			if(name==''){
				parent.layer.msg('职位名称不能为空！',2,8);return false;
			}
			
			if(jionly=='1'){
				if($("#job1").val()==''){
					parent.layer.msg('请选择职位类别！',2,8);return false;
				}
			}else{
				if($("#job1_son").val()==''){
					parent.layer.msg('请选择职位类别！',2,8);return false;
				}
			}
	
			if($("#provinceid").val()==''){
				parent.layer.msg('请选择工作地点！',2,8);return false;
			}
			
			if($("#salary_type").attr("checked")!='checked'){
				
				if(minsalary==''||minsalary=='0'){
					parent.layer.msg('请填写工资！', 2, 8);return false;
				}
				
				if(maxsalary){
					if(parseInt(maxsalary)<=parseInt(minsalary)){
						parent.layer.msg('最高工资必须大于最低工资！', 2, 8);return false;
					}
				}
			}
			
			var content = editor.getContent(); 
			
			if(content==""){
				
				parent.layer.msg('职位描述不能为空！',2,8);return false;
				
			}else{
				
				$("#content").val(content);
				
			}
		}
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/city.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
