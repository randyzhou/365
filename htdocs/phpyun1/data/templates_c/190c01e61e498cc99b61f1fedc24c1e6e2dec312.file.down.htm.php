<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 09:24:30
         compiled from "D:\rcw\uploads\app\template\member\com\down.htm" */ ?>
<?php /*%%SmartyHeaderCode:1738390315fab3d4e94c4c4-28958987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '190c01e61e498cc99b61f1fedc24c1e6e2dec312' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\down.htm',
      1 => 1576734981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1738390315fab3d4e94c4c4-28958987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'total' => 0,
    'now_url' => 0,
    'v' => 0,
    'pagenav' => 0,
    'comdata' => 0,
    'row' => 0,
    'comclass_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab3d4e973a40_79836947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab3d4e973a40_79836947')) {function content_5fab3d4e973a40_79836947($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="com_tit"><span class="com_tit_span">我的简历</span></div>
		<div class=right_box>
			
			<div class=admincont_box>
				
				
				<div class="job_list_tit">
					<ul class="">
						<li <?php if ($_GET['c']=="hr") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=hr">收到简历</a></li>
						<li <?php if ($_GET['c']=="down") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=down">已下载简历</a></li>
						<li <?php if ($_GET['c']=="talent_pool") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=talent_pool">收藏简历</a></li>
						<li <?php if ($_GET['c']=="look_resume") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=look_resume">浏览简历</a></li>
						<li <?php if ($_GET['c']=="record") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=record">网站推荐简历</a></li>
					</ul>
				</div>
				
				<div class="clear"></div>
			
									
										
							
				<div class="com_body">	
                <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
                <div class="com_new_tip mt20"> 
          <span class="com_new_tip_h">温馨小提示</span>您已下载 <span class="f60"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> 份简历 ，若遇虚假简历，可举报给平台，平台会对违规简历进行严肃处理</div>
          <?php }?>
					<div 	class="joblist_search">
						<form action="index.php" method="get">
							<div class="joblist_search_box">
								<input name="c" type="hidden" value="down">
								<input name="keyword" type="text" class="joblist_search_box_text" placeholder="请输入简历关键字" value="<?php echo $_GET['keyword'];?>
">
								<input name="" type="submit" class="joblist_search_bth" value="搜索">
							</div>
						</form>
					</div>
					
					<div class="clear"></div>
					<div class=admin_textbox_04>
						<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
						<form action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del" target="supportiframe" method="post" id='myform' class='layui-form'>
							<table class="com_table mt20" id="job_checkbokid">
								<?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
									<tr>
										<th width="20">&nbsp;</th>
										<th>姓名</th>
										<th>求职意向</th>
										<th>工作经验 </th>
										<th>期望薪资</th>
										<th>下载时间</th>
										<th>邀请面试</th>
										<th>状态</th>
										<th >操作</th>
									</tr>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									<tr>
										<td>
											<input type="checkbox" name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  class="com_Release_job_qx_check" style="margin-top:2px;" lay-skin="primary">
										</td>
										<td>
											<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`'),$_smarty_tpl);?>
"  target=_blank class="com_Release_name" >
												<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

											</a> 
											
										</td>
										<td align="center"><span class="yxjob_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
</span></td>
										<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
&nbsp;</td>
										<td align="center">
											<?php echo $_smarty_tpl->tpl_vars['v']->value['salary'];?>
&nbsp;
										</td>
										<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['downtime'],'%Y-%m-%d');?>
&nbsp;</td>
										<td align="center">
											<?php if ($_smarty_tpl->tpl_vars['v']->value['userid_msg']==1) {?> 
												<font color="#aaa">已经邀请</font> 
											<?php } else { ?> 
												<a href="javascript:;" onclick="inviteResume(this)" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" id="b" class=" com_received_username_yqms">
													邀请面试
												</a> 
											<?php }?> 
										</td>
										<td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['status']) {
echo $_smarty_tpl->tpl_vars['v']->value['status'];
} else { ?>暂无状态<?php }?></td>
										<td align="center"> 
												<a href="javascript:void(0);" class="com_bth cblue" onclick="report('<?php echo $_smarty_tpl->tpl_vars['v']->value['eid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
')" class=" com_bth cblue">举报</a>
											<a href="javascript:void(0);" class="com_bth cblue" onclick="remark('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['remark'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
');">备注</a>
											
											<a href="javascript:void(0)" onclick="layer_del('确定要删除？','<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')"  class=" com_bth cblue">删除</a> 
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td colspan="9" class="">
											<div class="com_Release_job_bot"> 
												<span class="com_Release_job_qx">
													<input id='checkAll'  type="checkbox"  lay-filter="allcom" class="com_Release_job_qx_check" lay-skin="primary">全选
												</span>
												<input class="c_btn_02"  type="button" name="subdel" value="批量删除" onclick="return Delete('delid[]');">
												<input class="c_btn_02"  type="button" name="subdel" value="批量导出" onclick="check_xls('delid[]');">
											</div>
											<div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
										</td>
									</tr>
 								  
								<?php } elseif ($_GET['keyword']!='') {?>
									<tr>
										<td colspan="9" class="table_end">
											<div class="msg_no">
												<p>没有搜索到下载简历！</p>
												<a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit">我要主动找人才</a>
											</div>
										</td>
									</tr>
								<?php } else { ?>
									<tr>
										<td colspan="9" class="table_end">
											<div class="msg_no">
												<p>亲爱的用户，目前您还没有下载简历。</p>
												<a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit">我要主动找人才</a>
											</div>
										</td>
									</tr>
								<?php }?> 
								  
								
							</table>
							<div  class="clear"></div>
						</form>
						
						<div class="clear"></div>
						<div class="infoboxp22" id="infobox" style="display:none; ">
							<div>
								<form action="index.php?c=down&act=report" method="post" class="layui-form" id="formstatus" target="supportiframe">
									
									<input name="r_uid" value="0" type="hidden">
									<input name="eid" value="0" type="hidden">
									<input name="r_name" value="0" type="hidden">
									
									<div class="jb_infobox" >
			                         	<span class="jb_infochlose"><input type="checkbox" name="reason[]" id="reason_1" lay-skin="primary" title="无人接听" value="无人接听"></span>
			                           	<span class="jb_infochlose"><input type="checkbox" name="reason[]" id="reason_2" lay-skin="primary" title="打广告" value="打广告"></span>
			                            <span class="jb_infochlose"> <input type="checkbox" name="reason[]" id="reason_3" lay-skin="primary" title="找到工作" value="找到工作"></span>
			                           	<span class="jb_infochlose"><input type="checkbox" name="reason[]" id="reason_4" lay-skin="primary" title="信息不实" value="信息不实"></span>
			                           	<span class="jb_infochlose"><input type="checkbox" name="reason[]" id="reason_5" lay-skin="primary" title="号码错误" value="号码错误"></span>
			                          	<span class="jb_infochlose"><input type="checkbox" name="reason[]" id="reason_6" lay-skin="primary" title="骗子" value="骗子"></span>
									</div>
									
									<div class="jb_infochlose_bth">
										<button type="submit" name='submit' value='1' class="submit_btn" style="margin-left:80px;">确认</button>
										&nbsp;&nbsp;
										<button type="button"  class="cancel_btn" onclick="layer.close($('#layindex').val())">取消</button>
									</div>
								</form>
							</div>
						</div>
						<div class="infoboxp22" id="remarkbox" style="display:none; ">
							<div>
								<form action="index.php?c=down&act=remark" method="post" id="formstatus" target="supportiframe" class="layui-form"> 
									<input name="remarkid" value="0" type="hidden">
									<input name="rname" value="0" type="hidden">
									<div class="jb_infobox"  >
										<div style="margin-left:10px;">状态：
										<div class="layui-input-inline">
											<select name="status" lay-filter="status">
						 						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_remark']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											  	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['status']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											  	<?php } ?>
											</select>
										</div>
										</div>
									</div>
									<div class="jb_infobox"  >
										<textarea id="remark" style="width:300px;margin:8px" name="remark" cols="30" rows="9" class="hr_textarea"></textarea>
									</div>
									<div class="jb_infobox"  style="width: 90%;">
										<button type="submit" name='submit' value='1' class="com_pop_bth_qd" style="margin-left:80px;">确认</button>
										&nbsp;&nbsp;
										<button type="button" class="com_pop_bth_qx" onclick="layer.close($('#layindex').val())">取消</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
>

layui.use(['form'], function(){
    var form = layui.form,
		$ = layui.$;  
    form.on('checkbox(allcom)', function (data) {
   	 	$("input[name='delid[]']").each(function () {
        	this.checked = data.elem.checked;
    	});
    	form.render('checkbox');
  	});
});
function Delete(name){
	var chk_value =[];    
	$('input[name="'+name+'"]:checked').each(function(){    
		chk_value.push($(this).val());   
	});   
	if(chk_value.length==0){
		layer.msg("请选择要删除的数据！",2,8);return false;
	}else{
		layer.confirm("确定删除吗？",function(){
			$("#myform").attr("action","index.php?c=down&act=del");
			setTimeout(function(){$('#myform').submit()},0); 
		});
	} 
} 
function check_xls(name){
	var chk_value =[];    
	$('input[name="'+name+'"]:checked').each(function(){    
		chk_value.push($(this).val());   
	});
	if(chk_value.length==0){
		layer.msg("请选择您要导出的数据！",2,8);return false;
	}else{
		var i = layer.confirm("确定导出吗？",function(){
			$("#myform").attr("action","index.php?c=down&act=xls");
			setTimeout(function(){$('#myform').submit()},0); 
			layer.close(i);
		});
	} 
}	
function report(eid,uid,name){
	
	$("input[name=eid]").val(eid);
	$("input[name=r_uid]").val(uid);
	$("input[name=r_name]").val(name); 
	
	var layindex = $.layer({
		type : 1,
		title :'举报', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['360px','200px'],
		page : {dom :"#infobox"}
	}); 
	$("#layindex").val(layindex);
}

function remark(id,remark,name){
	$("input[name=remarkid]").val(id);
	$("#remark").val(remark);
	$("input[name=rname]").val(name); 
	var layindex = $.layer({
		type : 1,
		title :'备注', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['320px','260px'],
		page : {dom :"#remarkbox"}
	});
	$("#layindex").val(layindex);
}
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/yqms.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
