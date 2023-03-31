<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:32:46
         compiled from "D:\rcw\uploads\app\template\member\com\hr.htm" */ ?>
<?php /*%%SmartyHeaderCode:944074075f9d9fbed9c779-08915006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1c55dd730446a512326f19b2a013d15897bf7fc' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\hr.htm',
      1 => 1576734981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '944074075f9d9fbed9c779-08915006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'JobList' => 0,
    'v' => 0,
    'current' => 0,
    'userdata' => 0,
    'cache' => 0,
    'userclass_name' => 0,
    'user_sex' => 0,
    'key' => 0,
    'uptime' => 0,
    'StateList' => 0,
    'one' => 0,
    'now_url' => 0,
    'rows' => 0,
    'statis' => 0,
    'com_look' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9fbeddf0e3_38142026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9fbeddf0e3_38142026')) {function content_5f9d9fbeddf0e3_38142026($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_Url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.Url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody">
 		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	
    	<div class="com_tit"><span class="com_tit_span">我的简历</span></div>
        
        <div class='right_box'>
        	<div class='admincont_box'>
				<div class="job_list_tit">
           			<ul>
                 		<li <?php if ($_GET['c']=="hr") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=hr" title="收到简历">收到简历</a>
                        </li>
                        <li <?php if ($_GET['c']=="down") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=down" title="您已下载的简历记录">已下载简历</a>
                        </li>
                        <li <?php if ($_GET['c']=="talent_pool") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=talent_pool" title="加入人才库的简历">收藏简历</a>
                        </li>
                        <li <?php if ($_GET['c']=="look_resume") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=look_resume" title="您浏览简历的记录">浏览简历</a>
                        </li>
                        <li <?php if ($_GET['c']=="record") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=record" title="网站为您推荐的简历">网站推荐简历</a>
                        </li>
                    </ul>
                </div>

                <div class='com_body'>
                	
                	<div class="com_new_tip mt20">
						<span class="com_new_tip_h">温馨小提示</span>若遇虚假简历,可在简历详细页举报给平台，平台会对违规简历进行严肃处理
					</div>
                    
                    <div class="admin_textbox_04">
                 		<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                       	
                       	<div class="clear"></div>
         				
         				<!-- 筛选部分 -->
                       	<form class='layui-form' action="index.php" method='get' id='MyForm'> 
	                       	<input name='c' value='hr' type='hidden'>
	                       	<div class="com_received_resume_selectbox">
	                       		
	                       		<div class="com_received_resume_tdjob">
	                       		
	                       			<div class="layui-unselect layui-form-select">
	                       				<div class="layui-form-item">
											<div class="layui-input-block">
										      	<select name="jobid" lay-filter="hr_submit">
										      		<option value=''>投递职位</option>
										      		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['JobList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
										        		<option value='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
' <?php if ($_smarty_tpl->tpl_vars['current']->value['id']==$_smarty_tpl->tpl_vars['v']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
										        	<?php } ?>
										      	</select>
											</div>
										</div>
	                       			</div>
	                       		</div>
	                       		
	                       		<div class="com_received_resume_select">
	            					<div class="layui-unselect layui-form-select">
	            						<div class="layui-form-item">
											<div class="layui-input-block">
										      	<select name="resumetype" lay-filter="hr_submit">
										      		<option value=''>简历类型</option>
										        	<option value='1' title='普通简历' <?php if ($_GET['resumetype']==1) {?>selected<?php }?>>普通简历</option>
										        	<option value='2' title='优质简历' <?php if ($_GET['resumetype']==2) {?>selected<?php }?>>优质简历</option>
										      	</select>
											</div>
										</div>
	            					</div>
	            				</div> 
	            				
				             	<div class="com_received_resume_select">
				            		<div class="layui-unselect layui-form-select">
				            			
				            			<div class="layui-form-item">
											<div class="layui-input-block">
										      	<select name="exp" lay-filter="hr_submit">
										      		<option value=''>工作经验</option>
										      		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
										        		<option value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' title='<?php echo $_smarty_tpl->tpl_vars['cache']->value['userclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
' <?php if ($_GET['exp']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
										        	<?php } ?>
										      	</select>
											</div>
										</div>
				            			 
				            		</div>
				            	</div> 	 	
				 				
				 				<div class='com_received_resume_select'>
				 					<div class="layui-unselect layui-form-select">
				 						
				 						<div class="layui-form-item">
											<div class="layui-input-block">
										      	<select name="edu" lay-filter="hr_submit">
										      		<option value=''>学历要求</option>
										      		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
										        		<option value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' title='<?php echo $_smarty_tpl->tpl_vars['cache']->value['userclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
' <?php if ($_GET['edu']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
										        	<?php } ?>
										      	</select>
											</div>
										</div>
				 						 
							        </div>
							  	</div>
							  	
								<div class="com_received_resume_selectsmall">
								 	<div class="layui-unselect layui-form-select">
								 		
								 		<div class="layui-form-item">
											<div class="layui-input-block">
										      	<select name="sex" lay-filter="hr_submit">
										      		<option value=''>性别</option>
										      		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										        		<option value='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' title='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' <?php if ($_GET['sex']==$_smarty_tpl->tpl_vars['key']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
										        	<?php } ?>
										      	</select>
											</div>
										</div>
								 		 
								 	</div>
								 </div>
								 
	            				<div class="com_received_resume_select">
	            					<div class="layui-unselect layui-form-select">
	            					
	            						<div class="layui-form-item">
											<div class="layui-input-block">
										      	<select name="uptime" lay-filter="hr_submit">
										      		<option value=''>更新时间</option>
										      		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										        		<option value='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' title='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
' <?php if ($_GET['uptime']==$_smarty_tpl->tpl_vars['key']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
										        	<?php } ?>
										      	</select>
											</div>
										</div>
										
	            				 	</div>
	            				</div>
	            				 
					     		<div class="com_received_resume_search">
					              	<input type="text" placeholder="在当前条件下筛选" class="com_received_resume_search_text" name='keyword' value='<?php echo $_GET['keyword'];?>
' />
								  	<input type="submit" value="搜索" class="com_received_resume_search_bth" />
								</div>   
	                     	</div> 
	                 			
	                		<div class="clear"></div>
	                      
	                 		<div class="com_received_resume_state">
	               				简历状态：
	               				<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['StateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
									<a href="index.php?c=hr&state=<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
" <?php if ($_GET['state']==$_smarty_tpl->tpl_vars['one']->value['id']) {?>class="com_received_resume_state_cur"<?php }?>><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['one']->value['num'];?>
)</a>
								<?php } ?>
	               			</div>     
                      	</form>
                      	
          				<!-- 收到简历列表 -->
          				<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
                      	<form action='<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=hrset' target="supportiframe" method="post" id='myform' class='layui-form'>
							<table class="com_received_resume" >
								<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
								<tr>
									<th width="25" align="center"></th>
									<th>基本情况</th>
									<th>投递职位</th>
									<th>联系电话</th>
									<th>状态</th>
									<th>操作</th>
								</tr>
								<?php }?>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<tr>
									<td align="center">
										<input type="checkbox" name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="com_job_list_check" lay-skin="primary" />
									</td>
									<td>
										<div>
											<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['eid']),$_smarty_tpl);?>
" target="_blank" class="com_received_username"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
										</div>
										
										<div class="com_received_userinfo">
											<?php if ($_smarty_tpl->tpl_vars['v']->value['sex']) {
echo $_smarty_tpl->tpl_vars['v']->value['sex'];
} else { ?>保密<?php }?>
											<span class="com_received_userinfo_line">|</span><?php echo $_smarty_tpl->tpl_vars['v']->value['age'];?>
岁
											<span class="com_received_userinfo_line">|</span><?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
经验
											<span class="com_received_userinfo_line">|</span><?php echo $_smarty_tpl->tpl_vars['v']->value['edu'];?>
学历
										</div>
										<div>期望薪资：<?php echo $_smarty_tpl->tpl_vars['v']->value['salary'];?>
</div>
									</td>
									<td>
										<div>
											<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>$_smarty_tpl->tpl_vars['v']->value['job_id']),$_smarty_tpl);?>
" target="_blank" class="com_received_tdjob"><?php echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>
</a>
										</div>
										<div class="com_received_tdtime">投递时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['datetime'],'%Y-%m-%d');?>
</div>
									</td>
									
									<td align="center">
										
										<div>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['islink']==1||in_array($_smarty_tpl->tpl_vars['statis']->value['rating'],$_smarty_tpl->tpl_vars['com_look']->value)) {?>

												<a class="com_received_tellook"><?php echo $_smarty_tpl->tpl_vars['v']->value['telphone'];?>
</a>
											<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['down_resume']>0) {?>
												<a class="com_received_tellook" href="javascript:void(0);" onclick="isDownResume('<?php echo $_smarty_tpl->tpl_vars['v']->value['eid'];?>
','<?php echo smarty_function_Url(array('m'=>'ajax','c'=>'for_link'),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['statis']->value['down_resume'];?>
')">查看联系方式</a>
											<?php } else { ?>

												<a class="com_received_tellook" href="javascript:void(0);" onclick="downResume('<?php echo $_smarty_tpl->tpl_vars['v']->value['eid'];?>
','<?php echo smarty_function_Url(array('m'=>'ajax','c'=>'for_link'),$_smarty_tpl);?>
')">查看联系方式</a>
											<?php }?>		 
										</div>
										
									</td>
									
									<td align="center">
										<div>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='1') {?>
												<span class="com_received_zt com_received_zt_dcl"><i class="com_received_zt_icon"></i>待处理</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='2') {?>
												<span class="com_received_zt com_received_zt_yck"><i class="com_received_zt_icon"></i>已查看</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='3') {?>
												<span class="com_received_zt com_received_zt_dtz"><i class="com_received_zt_icon"></i>待通知</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='4') {?>
												<span class="com_received_zt com_received_zt_bhs"><i class="com_received_zt_icon"></i>不合适</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='5') {?>
												<span class="com_received_zt com_received_zt_wjt"><i class="com_received_zt_icon"></i>未接通</span>
											<?php }?>
										</div>
									</td>
									
									<td width="153">
										<div class="com_received_username_cz">
										
											<div class="com_received_username_bth">
												<?php if ($_smarty_tpl->tpl_vars['v']->value['userid_msg']==1) {?>
													<span class="com_received_username_yyq">已邀请</span>
												<?php } else { ?>
													<a href="javascript:void();" onclick="inviteResume(this)" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" jobid="<?php echo $_smarty_tpl->tpl_vars['v']->value['job_id'];?>
" jobtype='<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
' jobname="<?php echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>
" class="com_received_username_yqms" >邀请面试</a>
												<?php }?>
											</div>
										
											<div class="com_received_username_bjbox bj_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onmouseover='bjAddClass(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
);' onmouseout='bjRemoveClass(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
);' >
												<span class="com_received_username_bj">标记</span>
												<div class="com_received_username_bjbox_show">
													<a href="javascript:void(0);" onclick='changeBrowse(1,<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)' class="com_received_username_bjbox_show_a"><i class="com_received_username_dclicon"></i>待处理</a> 
													<a href="javascript:void(0);" onclick='changeBrowse(2,<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)' class="com_received_username_bjbox_show_a"><i	class="com_received_username_yckicon"></i>已查看</a> 
													<a href="javascript:void(0);" onclick='changeBrowse(4,<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)' class="com_received_username_bjbox_show_a"><i class="com_received_username_bhgicon"></i>不合适</a> 
													<a href="javascript:void(0);" onclick='changeBrowse(5,<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)' class="com_received_username_bjbox_show_a"><i	class="com_received_username_wjticon"></i>未接通</a> 
													<a href="javascript:void(0);" onclick='changeBrowse(3,<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)' class="com_received_username_bjbox_show_a"><i	class="com_received_username_dtzicon"></i>等通知</a>
												</div>
											</div>
											
											<div class="com_received_username_bth mt10">
												<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['eid']),$_smarty_tpl);?>
" target="_blank" class="com_received_username_jlmx">简历详细</a>
											</div>
											<div class="com_received_username_bthr mt10">
												<a href="javascript:void(0);" onclick="layer_del('确定要删除该条职位申请吗？', 'index.php?c=hr&act=hrset&delid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="com_received_username_bj">删除</a>
											</div>
										</div>
									</td>
									
								</tr>
								
								<?php } ?>
								<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
								<tr>
									<td align="center"><input type="checkbox"  lay-filter='allcom' lay-skin="primary" /></td>
									
									<td colspan="5">全选 
										<input class="c_btn_02" type="button" name="subdel" value="批量删除" onclick="return really('delid[]');">
										<input class="c_btn_02" type="button" name="subdel" value="批量标记" onclick="return changeBrowseAll('1','delid[]');" style="margin-left: 10px;">
										<div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
									</td>
								</tr>
                                <?php } else { ?>
                                <tr>
									<td colspan="7" class="table_end">
										<div class="msg_no">
											<p>亲爱的用户，目前您还没有收到简历。</p>
											<a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit">我要主动找人才</a>
										</div>
									</td>
								</tr>
								<?php }?>
							</table>          
	               		</form>
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
	    
		form.on('select(hr_submit)', function(data){
			$('#MyForm').submit();
 		})

 	    form.on('checkbox(allcom)', function (data) {
	        $("input[name='delid[]']").each(function () {
	            this.checked = data.elem.checked;
	        });
	        form.render('checkbox');
	 	});
	});
	
	function bjAddClass(id){
		$('.bj_'+id).addClass("com_received_username_bjboxcur");
	}
	
	function bjRemoveClass(id){
		$('.bj_'+id).removeClass("com_received_username_bjboxcur");
	}
	
	function changeBrowse(browse, id){
		$.post("index.php?c=hr&act=hrset", { id : id, browse : browse }, function(data) {
			location.reload();
		});
	}
	function changeBrowseAll(browse, name){
		var chk_value =[];    
		$('input[name="'+name+'"]:checked').each(function(){    
			chk_value.push($(this).val());   
		});   
		if(chk_value.length==0){
			layer.msg("请选择要标记的数据！",2,8);return false;
		}else{
			layer.confirm("确定标记为已读吗？",function(){
				$.post("index.php?c=hr&act=hrset",{ids:chk_value,ajax:1},function(data){
					var data = eval('('+data+')');
					if(data.errcode == '9'){
						parent.layer.msg(data.msg, 2, 9,function(){
							window.location.reload();
							window.event.returnValue = false;
							return false;
						});
						return false;
					}else{
						parent.layer.msg(data.msg, 2, 8);
						return false;
					}
				})
			});
		} 
	}
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/yqms.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
