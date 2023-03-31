<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:13:17
         compiled from "D:\rcw\uploads\app\template\member\com\sysnews.htm" */ ?>
<?php /*%%SmartyHeaderCode:17925435085f9d9b2d86b212-83248560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e740f02459307c14dcc1d31e6cd2e302b38d7f85' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\sysnews.htm',
      1 => 1576479741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17925435085f9d9b2d86b212-83248560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'item' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9b2d87b1a6_84600491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9b2d87b1a6_84600491')) {function content_5f9d9b2d87b1a6_84600491($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="com_tit"><span class="com_tit_span">系统消息</span></div>
		
		<div class=right_box>
			<div class=admincont_box>

				<div class="com_body">
					<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display: none"></iframe>
					<form action="index.php?c=sysnews&act=del" name="myform" method="post" target="supportiframe" id='myform' class="layui-form">
						<div class='admin_note2'>
							<table class="com_table">
								
								<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
								<tr>
									<th></th>
									<th>编号</th>
									<th align="left">内容</th>
									<th>时间</th>
									<th width="160">操作</th>
								</tr>
								<?php }?>
								
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								<tr>
									<td align="center">
										<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="com_job_list_check" name='del[]' rel="del_chk" lay-skin="primary" />
									</td>
									<td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
									<td <?php if ($_smarty_tpl->tpl_vars['item']->value['remind_status']==0) {?>style="font-weight:bold"<?php }?>>
										<div style="width: 580px;"> <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];
if ($_smarty_tpl->tpl_vars['item']->value['remind_status']==0) {?> <span class="not_read">未读</span> <?php }?></div>
									</td>
									<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['ctime'],"%Y-%m-%d %H:%M");?>
</td>
									<td align="center">
										<a href="javascript:void(0)" onclick="showsys('<?php echo $_smarty_tpl->tpl_vars['item']->value['content_all'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['ctime'],"%Y-%m-%d %H:%M");?>
'); " class=" com_bth cblue"> 查看</a> 
										<a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=sysnews&act=del&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); "
										class=" com_bth cblue"> 删除</a>
									</td>
								</tr>
								<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
								<tr>
									<td colspan="5" class="table_end">
										<div class="msg_no">暂无信息！</div>
									</td>
								</tr>
								<?php } ?> 
								
								<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
								<tr>
									<td colspan="5">
										<div class="com_Release_job_bot ">
											<span class="com_Release_job_qx" style='padding-left:3px;'> 
												<input id='checkAll' type="checkbox" lay-filter="allcom" class="com_Release_job_qx_check" lay-skin="primary"> 全选
											</span> 
											<input type="button" name="delsub" class='c_btn_02' value="删除所选" onclick="return really('del[]');" /> 
											<input type="button" class='c_btn_02' value="批量阅读" onclick="return isReaded('del[]');" />
											<input type="button" class='c_btn_02' value="全部标记已读" onclick="return readAll();" />
										</div>
										<div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
									</td>
								</tr>
								<?php }?>
							</table>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="show" style="display: none; width: 100%;">
	<div class="sys_tm">
		<p>
			<i>时间：</i><span id="systime"></span>
		</p>
		<p>
			<i>内容：</i><span id="sysshow"></span>
		</p>
	</div>
	<div class="sys_bot" style="padding-bottom: 20px;">
		<a class="sys_bot_del" href="javascript:void(0)" id="delsys"> 删除</a> 
		<a class="sys_bot_qx" href="javascript:void(0)" onclick="window.location.reload();" class="cblue">关闭</a>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript">

	layui.use(['form','layer', 'laydate'], function(){
    	var $ = layui.$,
			form = layui.form,
			laydate = layui.laydate,
			layer = layui.layer;
    	
    	form.on('checkbox(allcom)', function (data) {
       	 	$("input[name='del[]']").each(function () {
            	this.checked = data.elem.checked;
        	});
        	form.render('checkbox');
      	});
        
    });
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
