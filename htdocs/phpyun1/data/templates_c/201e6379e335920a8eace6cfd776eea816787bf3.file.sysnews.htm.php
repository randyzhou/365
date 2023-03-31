<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:39:45
         compiled from "D:\rcw\uploads\app\template\member\user\sysnews.htm" */ ?>
<?php /*%%SmartyHeaderCode:10686019455f9da16157c457-77013350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '201e6379e335920a8eace6cfd776eea816787bf3' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\sysnews.htm',
      1 => 1576479741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10686019455f9da16157c457-77013350',
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
  'unifunc' => 'content_5f9da16158da57_18921992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da16158da57_18921992')) {function content_5f9da16158da57_18921992($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
		
		<div class="member_right_index_h1 fltL"> 
			<span class="member_right_h1_span fltL">系统消息</span> 
			<i class="member_right_h1_icon user_bg"></i>
		</div>

        <div>
		 	<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
            <form action="index.php" method="get" target="supportiframe" id='myform' class="layui-form">
				<input type="hidden" name="c" value="sysnews" />
				<input type="hidden" name="act" value="del" />
				
				<div id="gms_showclew"></div>
				
				<div class="resume_box_list">
					<?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
						<div class="sysynews_tit ">
							<div class="sysynews_span ">&nbsp;</div>
							<div class="sysynews_span sysynews_name"><em class="List_Title_span_name">内容</em></div>
							<div class="sysynews_span sysynews_time" style="width:200px;">时间</div>
							<div class="sysynews_span sysynews_cz">操作</div>
						</div>
					<?php }?>
					
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<div class="sysynews_list">
							<div class="sysynews_span " >
								<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="del[]" class="" lay-skin="primary">
							</div>
							<div class="sysynews_span sysynews_name" <?php if ($_smarty_tpl->tpl_vars['item']->value['remind_status']==0) {?>style="font-weight:bold"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];
if ($_smarty_tpl->tpl_vars['item']->value['remind_status']==0) {?> <span class="sysynews_span_nolook">未读</span> <?php }?></div>
					   		<div class="sysynews_span sysynews_time" style="width:200px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['ctime'],"%Y-%m-%d %H:%M");?>
</div>
						   	<div class="sysynews_span sysynews_cz">
							   	<a href="javascript:void(0)" onclick="showsys('<?php echo $_smarty_tpl->tpl_vars['item']->value['content_all'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['ctime'],"%Y-%m-%d %H:%M");?>
'); "> 查看</a> <span class="jobnotice_cz_line">|</span>
								<a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=sysnews&act=del&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');" class="List_dete  cblue">删除</a>
							</div>
						</div>
					<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
						<div class="clear"></div>
						<div class="msg_no"> 暂无系统消息！ </div>
						<div class="clear"></div>
					<?php } ?>
					
					<?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>   
					<div class="checkall_toyota">
						<input id='checkAll' type="checkbox" lay-filter="alluser" lay-skin="primary" class="">
						<input type="button" value="删除" class="job_operation_bth" onclick="return really('del[]');" />
						<input type="button" value="设为已读" class="job_operation_bth" onclick="return isReaded('del[]');" />
						<input type="button" value="全部标记为已读" class="job_operation_bth" onclick="return readAll();" />
					</div>
					<?php }?>
					<div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
				</div>
			</form>
        </div>
    </div>
</div>
<div id="show" style="display:none;width:100%;">
	<div class="sys_tm">
	    <p><i>时间：</i><span id="systime"></span></p>
	    <p><i>内容：</i><span id="sysshow"></span></p>
	</div>
	<div class="sys_bot" style="padding-bottom:20px;">
	<a class="sys_bot_del" href="javascript:void(0)" id="delsys"> 删除</a><a class="sys_bot_qx" href="javascript:void(0)" onclick="window.location.reload();" class="cblue">返回</a>
	</div>
</div>
<?php echo '<script'; ?>
>
	layui.use(['form','layer', 'laydate'], function(){
    	var $ = layui.$,
			form = layui.form,
			laydate = layui.laydate,
			layer = layui.layer;
    	
    	form.on('checkbox(alluser)', function (data) {
       	 	$("input[name='del[]']").each(function () {
            	this.checked = data.elem.checked;
        	});
        	form.render('checkbox');
      	});
  	});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
