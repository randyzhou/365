<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:13:24
         compiled from "D:\rcw\uploads\app\template\member\com\yqms.htm" */ ?>
<?php /*%%SmartyHeaderCode:14580400665f9d9b349e0312-16577493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9a92ee5cae684c2cce89ad99935a62b4ed36bf4' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\yqms.htm',
      1 => 1576479785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14580400665f9d9b349e0312-16577493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_job' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9b349e79b9_51881990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9b349e79b9_51881990')) {function content_5f9d9b349e79b9_51881990($_smarty_tpl) {?><div id='job_box' style="display:none;float:left">
	<div class="com_resume_yqbox" style="width:500px">
		<dl style="z-index:1000">
			<dt>面试职位：</dt>
			<dd>
				<div class="Interview_text_box">
					<input type="button" value="请选择" class="Interview_text_box_t" id="name" onclick="search_show('job_name');">
					<input type="hidden" id="nameid" name="name" value="">
					<div class="Interview_text_box_list none" id="job_name" style="display: none;">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['company_job']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>  
								<li>
									<a href="javascript:;" onclick="selecteInviteJob('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', 'name', '<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['link_man'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['link_moblie'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
');"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['name'],0,12,'utf-8');?>
</a>
								</li>    
							<?php } ?> 
						</ul>
					</div>
				</div>
			</dd>
		</dl>
		<dl><dt>联系人：</dt><dd><input size='20'  id='linkman' value='' class="resume_yqbox_text"></dd></dl>
		<dl><dt>联系电话：</dt><dd><input size='20'  id='linktel' value='' class="resume_yqbox_text"></dd></dl>
		<dl><dt>面试时间：</dt><dd><input size='34' id='intertime' value='' class="resume_yqbox_text"></dd></dl>
		<dl><dt>面试地址：</dt><dd><input size='34' id='address' value='' class="resume_yqbox_text resume_yqbox_textadd"></dd></dl>
		<dl><dt>面试备注：</dt><dd> <textarea id="content" cols="40" rows="5" class="resume_yqbox_textarea"></textarea></dd></dl>
		<dl id="resume_job" style="height:50px;">
			<dt>&nbsp;</dt>
			<dd> 
				<input type="hidden" id="uid" value="">
				<input type="hidden" id="username" value="">
				<input class="resume_sub_yq" id="click_invite" type="button" value="邀请面试"  >
			</dd>
		</dl>
	</div>
</div>

<?php echo '<script'; ?>
>
	layui.use(['laydate'], function(){
		var laydate = layui.laydate;
		  laydate.render({
		  elem: '#intertime'
		  ,type: 'datetime'
		  ,format:'yyyy-MM-dd HH:mm:ss'
		});
	});

	function selecteInviteJob(id,type,name,man,tel,address){
		$("#job_"+type).hide();
		$("#"+type).val(name);
		$("#"+type+"id").val(id);
		$("#linkman").val(man);
		$("#linktel").val(tel);
		$("#address").val(address);
	}
<?php echo '</script'; ?>
>
<?php }} ?>
