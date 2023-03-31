<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:12:43
         compiled from "D:\rcw\uploads\app\template\member\com\zhaopinhui.htm" */ ?>
<?php /*%%SmartyHeaderCode:2179937905f9d9b0b679ce5-71935364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb810209695d50fbda0c3bdfd0117726a78768a3' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\zhaopinhui.htm',
      1 => 1576479741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2179937905f9d9b0b679ce5-71935364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'now_url' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9b0b68f202_44693915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9b0b68f202_44693915')) {function content_5f9d9b0b68f202_44693915($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
>
	$(function() {
		$(".statusbody").click(function() {
			var id = $(this).attr("pid");
			var bodys = $("#statusbody" + id).val();
			if(bodys){
				$("#showbody").html(bodys);
			}else{
				$("#showbody").html("暂无说明、请联系管理员");
			}
			$.layer({
				type : 1,
				title : '审核说明',
				closeBtn : [ 0, true ],
				border : [ 10, 0.3, '#000', true ],
				area : [ '380px', 'auto' ],
				page : {
					dom : "#infobox2"
				}
			});
		});

	});
<?php echo '</script'; ?>
>

<div class="w1000">
	<div class="admin_mainbody">
		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div class="com_tit">
			<span class="com_tit_span">招聘会记录</span>
		</div>
		
		<div class=right_box>
			<div class=admincont_box>
				<div class="com_body">
		
					<div class="com_new_tip">
						<span class="com_new_tip_h">温馨小提示</span>我们将在24小时内审核你参会的职位，请耐心等待，如需快速审核，请拨打客服热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>

					</div>

					<div class="clear"></div>
					
					<table class="com_table mt20">
						<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
						<tr>
							<th>招聘会名称</th>
							<th>地点</th>
							<th>时间</th>
							<th>状态</th>
							<th width="200">操作</th>
						</tr>
						<?php }?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<tr>
							<td><a href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'show','id'=>'`$v.zid`'),$_smarty_tpl);?>
" class="cblue" target=_blank><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
							<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</td>
							<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],'%Y-%m-%d');?>
</td>
							
							<td align="center">
								<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
									<font color="green">已审核</font>
								<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
									<span class="tip_no"><i class="tip_no_icon"></i>未通过</span>
								<?php } else { ?>
									<span class="tip_no"><i class="tip_no_icon"></i>未审核</span>
								<?php }?>
								
								<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
									<a href="javascript:;" class="wtg_ly cblue statusbody" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">说明</a>
								<?php }?>
							</td>
							
							<td align="center">
								<input type="hidden" id="statusbody<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['statusbody'];?>
" /> 
								<a href="javascript:;" class="com_bth cblue zphstatus" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['jobid'];?>
" zid="<?php echo $_smarty_tpl->tpl_vars['v']->value['zid'];?>
">查看详情</a> 
								<?php if ($_smarty_tpl->tpl_vars['v']->value['notstart']==1) {?>
								<a href="javascript:void(0)" onclick="layer_del('确定要取消参会？', '<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="com_bth cblue">取消</a>
								<?php }?>
							</td>
						</tr>
						<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
							<tr>
								<td colspan="8" class="table_end">
									<div class="com_msg_no">
										<p>亲爱的用户，目前您还没有参加的招聘会信息</p>
										<a class="com_msg_no_bth com_submit" href="<?php echo smarty_function_url(array('m'=>'zph'),$_smarty_tpl);?>
" target="_blank">查看招聘会信息</a>
									</div>
								</td>
							</tr>
						<?php } ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
						<tr>
							<td colspan="8" class="table_end"><div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div></td>
						</tr>
                               <?php }?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="infobox" style="display: none;">
	<table class="zph_tck_pd" style="width: 380px;">
		<tr>
			<td align="right"><div style="width: 50px;">名称：</div></td>
			<td id="title"></td>
		</tr>
		<tr>
			<td align="right">时间：</td>
			<td><span id='stime'></span>至<span id='etime'></span></td>
		</tr>
		<tr>
			<td align="right">场地：</td>
			<td id='sid'></td>
		</tr>
		<tr>
			<td align="right">区位：</td>
			<td id='cid'></td>
		</tr>
		<tr>
			<td align="right">展位：</td>
			<td id='bid'></td>
		</tr>
		<tr>
			<td align="right">地点：</td>
			<td id='address'></td>
		</tr>
		
	</table>
</div>
<div class="admin_Operating_sh" id="infobox2" style="padding: 10px; width: 350px; display: none;">
	<div class="admin_Operating_text" style="padding: 5px; height: auto; color: #C30; width: 330px; font-size: 14px; line-height: 23px; white-space: normal; word-break: break-all;" id="showbody"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
