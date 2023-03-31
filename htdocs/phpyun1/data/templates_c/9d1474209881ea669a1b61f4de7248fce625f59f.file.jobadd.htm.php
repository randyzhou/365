<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:18:34
         compiled from "D:\rcw\uploads\app\template\member\com\jobadd.htm" */ ?>
<?php /*%%SmartyHeaderCode:7777108215f9d9c6a0172e7-43079105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d1474209881ea669a1b61f4de7248fce625f59f' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\jobadd.htm',
      1 => 1588063021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7777108215f9d9c6a0172e7-43079105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'style' => 0,
    'row' => 0,
    'company' => 0,
    'statis' => 0,
    'todayEnd' => 0,
    'jobnum' => 0,
    'jionly' => 0,
    'city_type' => 0,
    'city_index' => 0,
    'v' => 0,
    'city_name' => 0,
    'comdata' => 0,
    'j' => 0,
    'comclass_name' => 0,
    'com_sex' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
    'tv' => 0,
    'job_link' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9c6a0bf1b0_41537668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9c6a0bf1b0_41537668')) {function content_5f9d9c6a0bf1b0_41537668($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	 	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/job.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/jobparent.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/newclass.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/newclass.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 language="javascript">
			function toDate(str){
				var sd=str.split("-");
				return new Date(sd[0],sd[1],sd[2]);
			}
		
			function CheckPost(){
				var cionly	=	$.trim($("#cionly").val());

			 	if($.trim($("#name").val())==''){layer.msg('职位名称不能为空！',2,8);return false;}
				if($("#job_post").val()==''){layer.msg('职位类别不能为空！', 2, 8);return false;}

				if(cionly=='1'){
					if($("#provinceid").val()==""){
						layer.msg('工作地点不能为空！',2,8);return false;
					}
				}else{
					if($("#cityid").val()==''){layer.msg('工作地点不能为空！', 2, 8);return false;}
				}
				
				var minsalary=$.trim($("#minsalary").val());
				var maxsalary=$.trim($("#maxsalary").val());
				if($("#salary_type").attr("checked")!='checked'){
					if(minsalary==''||minsalary=='0'){
						layer.msg('请填写薪资待遇！', 2, 8);return false;
					}
					if(maxsalary){
						if(parseInt(maxsalary)<=parseInt(minsalary)){
							layer.msg('最高工资必须大于最低工资！', 2, 8);return false;
						}
					}
				}
				var description = editor.getContent();
				if($.trim(description)==''){layer.msg('职位描述不能为空！', 2, 8);return false;}
				
				var islink=$("input[name='islink']").val();
				var isemail=$("input[name='isemail']").val();
				if(!islink){
					layer.msg('请选择联系方式！', 2, 8);return false;
				}else if(islink==2){
					var link_man=$.trim($("input[name='link_man']").val());
					var link_moblie=$.trim($("input[name='link_moblie']").val());
			 		if(link_man==''||link_moblie==''){
						layer.msg('联系人及联系电话均不能为空！', 2, 8);return false;
					}
					if(link_moblie&& (isjsMobile(link_moblie)==false && !isjsTell(link_moblie))){
						layer.msg('联系电话格式错误！', 2, 8);return false;
					}
				} 
				if(isemail=='2'){
					var email=$.trim($("input[name='email']").val());
					if(email==''){
						layer.msg('请输入邮箱！', 2, 8);return false;
					}else if(check_email(email)==false){
						layer.msg('新邮箱格式错误！', 2, 8);return false;
					} 
				}
				var index = layer.load('执行中，请稍候...',0);
			} 
			
			function choice(id,type){
				if(type=='link'||type=='email'){
					if(id==1){
						$("#is"+type+"3").removeClass('com_job_tel_setlist_zt_cur');
						$("#is"+type+"2").removeClass('admin_job_style_n');
						$("#is"+type+id).addClass('admin_job_style_n');
						$("input[name='is"+type+"']").val(id);
						$("#new"+type).hide();
						$("#tblink").val(2)
					}else if(id==2){
						$("#is"+type+"3").removeClass('com_job_tel_setlist_zt_cur');
						$("#is"+type+"1").removeClass('admin_job_style_n');
						$("#is"+type+id).addClass('admin_job_style_n');
						$("input[name='is"+type+"']").val(id);
						$("#new"+type).show();
					}else if(id==3){
					  if(!$("#is"+type+id).hasClass('com_job_tel_setlist_zt_cur')){
						$("#is"+type+"1").removeClass('admin_job_style_n');
						$("#is"+type+"2").removeClass('admin_job_style_n');
						$("#is"+type+id).addClass('com_job_tel_setlist_zt_cur');
						$("input[name='is"+type+"']").val(id);
						$("#new"+type).hide();
					  }else{
						$("#is"+type+id).removeClass('com_job_tel_setlist_zt_cur');
						$("input[name='is"+type+"']").val('');
					  }
					}
				}
			}
			
			function returnmessagejob(frame_id){ 
				if(frame_id==''||frame_id==undefined){
					frame_id='supportiframe';
				}
				var message = $(window.frames[frame_id].document).find("#layer_msg").val(); 
				if(message != null){
					var url=$(window.frames[frame_id].document).find("#layer_url").val();
					var layer_time=$(window.frames[frame_id].document).find("#layer_time").val();
					var layer_st=$(window.frames[frame_id].document).find("#layer_st").val();
					var layer_url = $(window.frames[frame_id].document).find("#layer_url").val();
					var h5share='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_h5_share'];?>
';
					layer.closeAll('loading');
					if(layer_st=='9'){
						//判断是否开启职位推广并且是新增职位
						$('#jobid').val(layer_url);
						$('#jobshow').attr('href',weburl+'/job/?c=comapply&id='+layer_url);
						if(h5share==1){
							$('#sharecode').attr('src',weburl+'/index.php?m=ajax&c=pubqrcode&toc=job&toa=share&toid='+layer_url);
						}else{
							$('#sharecode').attr('src',weburl+'/index.php?m=ajax&c=pubqrcode&toc=job&toa=view&toid='+layer_url);
						}
						var jid='<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
';
						if(!jid){
							$('#jobrec').attr('onclick','jobPromote(\''+layer_url+'\',\'\', 2)');
							$('#joburgent').attr('onclick','jobPromote(\''+layer_url+'\',\'\', 3)');
							$('#jobtop').attr('onclick','jobPromote(\''+layer_url+'\',\'\', 1)');
							$('#jobauto').attr('onclick','jobPromote(\''+layer_url+'\',\'\', 5)');
							$('#rewardpay').attr('onclick','rewardlistpay(\''+layer_url+'\')');
						}
							$.layer({
								type : 1,
								move:false,
								fix: true,
								zIndex:666,
								title : '系统提示', 
								offset:['100px', ''],
								border : [10 , 0.3 , '#000', true],
								area : ['710px','330px'],
								page : {dom : '#addjob'},
								close: function(){
									<?php if (($_smarty_tpl->tpl_vars['config']->value['com_free_status']==1&&$_smarty_tpl->tpl_vars['company']->value['yyzz_status']==1)||$_smarty_tpl->tpl_vars['config']->value['com_job_status']=='1') {?>
									window.location.href = "index.php?c=job&w=1";
									<?php } else { ?>
									window.location.href = "index.php?c=job&w=0";
									<?php }?>
								}
							});
					}else{
						if(url=='1'){
							layer.msg(message, layer_time, Number(layer_st),function(){window.location.reload();window.event.returnValue = false;return false;});
						}else if(url==''){
			
							layer.msg(message, layer_time, Number(layer_st));
						}else{
							layer.msg(message, layer_time, Number(layer_st),function(){window.location.href = url;window.event.returnValue = false;return false;});
						}
					} 
				}
			}
		<?php echo '</script'; ?>
>
	
		<input type="hidden" id="comname" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
">
	  	
	  	<div class="com_tit"><span class="com_tit_span">新增职位</span></div>    
	  	
	  	<div class=right_box>
	      	<div class=admincont_box>
	    		<div class="com_body">
	          		
	          		<div class="com_new_tip">
	          			
	          			<span class="com_new_tip_h">温馨小提示</span>
	          			
						<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>$_smarty_tpl->tpl_vars['todayEnd']->value||$_smarty_tpl->tpl_vars['statis']->value['vip_etime']=="0") {?>
						
							<?php if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==1) {?>
			
								您当前是 <span class="com_new_tip_v"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
 </span><?php if ($_smarty_tpl->tpl_vars['jobnum']->value) {?>，现已发布 <?php echo $_smarty_tpl->tpl_vars['jobnum']->value;?>
 条职位<?php }?>， 您还可以发布：<?php echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];?>
条职位&nbsp;&nbsp;&nbsp;
			
							<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==2) {?>
			
								您当前是 <span class="com_new_tip_v"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</span>，到期时间是<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']!="0") {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statis']->value['vip_etime'],'%Y-%m-%d');
} else { ?>永久<?php }?>，在此之前您可以任意发布职位&nbsp;&nbsp;&nbsp;
			
							<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==0) {?>
			
								您当前是 <span class="com_new_tip_v"><?php echo $_smarty_tpl->tpl_vars['statis']->value['rating_name'];?>
</span><?php if ($_smarty_tpl->tpl_vars['jobnum']->value) {?>，现已发布 <?php echo $_smarty_tpl->tpl_vars['jobnum']->value;?>
 条职位<?php }?>， 您还可以发布：<?php echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];?>
 条职位&nbsp;&nbsp;&nbsp;
			
							<?php }?>
			
			            <?php } else { ?>
			
							您的会员已到期，为了更好的招聘人才，请先<a href="index.php?c=right" class="cblue"> 升级会员</a>！&nbsp;&nbsp;&nbsp;
						
						<?php }?>
			          	<span class="add_tit_bz">（注 带 <i class="ff0">*</i> 号为必填项）</span>
	      			</div>
	 
	        		<iframe id="supportiframejob"  name="supportiframejob" onload="returnmessagejob('supportiframejob');" style="display:none"></iframe>
	        		
	        		<form name="MyForm" target="supportiframejob" method="post" action="index.php?c=jobadd&act=save" onsubmit="return CheckPost();" class="layui-form">
	           			
	           			
	           			<div class="com_release_box" id="comjob">
				          	<ul>
				
				            	<li>
								 	<div class="com_release_name"><i class="ff0">*</i> 职位名称：</div>
							 		<div class="com_release_cont">
				             			<div class="com_release_cont_text">
											<input type="text" size="45" lay-verify="required" name="name" id='name' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" class="layui-input" placeholder="请填写职位名称信息，可填写职位属性，如：货运司机包吃住">
				                    	</div>
				  						<span id="by_name" class="errordisplay">职位名不能为空</span> 
				  					</div>
				  				</li>
				  				
				  				<li>
					        		<div class="com_release_name"><i class="ff0">*</i> 职位类别：</div>
							  		<div class="com_release_cont">
				              			<div class="com_release_cont_text" style="position:relative">
							   				<input type="hidden" name="job_post" id="job_post" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['job_post']) {
echo $_smarty_tpl->tpl_vars['row']->value['job_post'];
} elseif ($_smarty_tpl->tpl_vars['row']->value['job1_son']) {
echo $_smarty_tpl->tpl_vars['row']->value['job1_son'];
} elseif ($_smarty_tpl->tpl_vars['row']->value['job1']) {
echo $_smarty_tpl->tpl_vars['row']->value['job1'];
}?>"/>
											
											<select id="jobclass_search" name="jobclass_search" xm-select-type="jobclass" xm-select="jobclass_search" xm-select-search="" xm-select-radio="" xm-select-skin="default"  xm-select-direction="down">
						                    <option value="">输入职位类别</option>
						                    </select>
						                    <?php if ($_smarty_tpl->tpl_vars['jionly']->value!='1') {?>
						                    <div  onclick="index_job_new(1,'#workadds_job','#job_post','left:100px;top:100px; position:absolute;','1');" class="news_expect_text_new_nth" title="选择期望工作岗位"></div>
						                    <?php }?>
				                		</div>
									</div>
								</li>
				           		
				           		<li>
						    		<div class="com_release_name"><i class="ff0">*</i> 工作地点：</div>
				             		<input type="hidden" id="cionly" name="cionly" value="<?php if (empty($_smarty_tpl->tpl_vars['city_type']->value)) {?>1<?php }?>">
				             		<div class="com_release_cont">
				             		
				             			<div class="com_release_select com_release_selectw145">
										  	<div class="layui-input-inline ">
												<select name="provinceid" lay-filter="citys" id="provinceid">
											  		<option value="">请选择</option>
											  		<?php if ($_smarty_tpl->tpl_vars['row']->value['id']) {?>
												  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													  		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
												  		<?php } ?>
											  		
											  		<?php } else { ?>
											  			
											  			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													  		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['company']->value['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
												  		<?php } ?>
												  		
											  		<?php }?>
												</select>
										  	</div>
				                      	</div>
				                    
				                    	<div class="com_release_select com_release_selectw145">
										  	<div class="layui-input-inline">
												<select name="cityid" lay-filter="citys" id="cityid">
											  		<option value="">请选择</option>
											  		<?php if ($_smarty_tpl->tpl_vars['row']->value['id']) {?>
											  		
													  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													  		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
													  	<?php } ?>
												  	
												  	<?php } else { ?>
												  		
												  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['company']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													  		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['company']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
													  	<?php } ?>
												  	
												  	<?php }?>
												</select>
										  	</div>
										</div>
				                        
									  	<div class="com_release_select com_release_selectw145">
				                    		<div class="layui-input-inline" id="cityshowth" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']=='0') {?>style="display:none"<?php }?>>
												<select name="three_cityid" id="three_cityid">
											  		<option value="">请选择</option>
											  		<?php if ($_smarty_tpl->tpl_vars['row']->value['id']) {?>
													
														<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
														<?php } ?>
													<?php } else { ?>
												  		
												  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['company']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													  		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['company']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
													  	<?php } ?>
												  	
												  	<?php }?>	
												</select>
										  	</div>
								    	</div>
				              		</div>
				            	</li>
				         
				            	<li>
									<div class="com_release_name"><i class="ff0">*</i> 薪资待遇：</div>
									<div class="com_release_cont">
										<div class="com_release_cont_textw130">
											<input type="text" size="5" id="minsalary" name="minsalary" <?php if ($_smarty_tpl->tpl_vars['row']->value['minsalary']) {?>value="<?php echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];?>
"<?php }?>  onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="layui-input" placeholder="最低薪资"<?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?> disabled="disabled"<?php }?>>
											<span class="com_release_cont_dw">元/月</span>
										</div>
										
										<span class="com_release_cont_line">- </span>
					
										<div class="com_release_cont_textw130">
											<input type="text" size="5" id="maxsalary" name="maxsalary" <?php if ($_smarty_tpl->tpl_vars['row']->value['maxsalary']) {?>value="<?php echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];?>
"<?php }?> onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  class="layui-input" placeholder="最高薪资"<?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?> disabled="disabled"<?php }?>>
											<span class="com_release_cont_dw">元/月</span>
										</div>
					 					
										<input type="checkbox" id="salary_type" name="salary_type"  title="面议" value="1" <?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?> checked="checked"<?php }?> lay-filter="salary_type" lay-skin="primary" />   
									</div> 
				            	</li>
				            	
							 	<li>
					            	<div class="com_release_name"> 基本要求：</div>
					              	<div class="com_release_cont">
									  	<div class="layui-input-inline">
											<select name="exp" lay-filter="exp">
						 					  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											  	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php if ($_smarty_tpl->tpl_vars['j']->value==0&&stripos($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value],'经验')===false) {?>经验<?php }
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											  	<?php } ?>
											</select>
										</div>
                                        <div class="layui-input-inline">
											<select name="edu" lay-filter="edu">
						 					  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											  	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['edu']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php if ($_smarty_tpl->tpl_vars['j']->value==0) {?>学历<?php }
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											  	<?php } ?>
											</select>
										</div>&nbsp;&nbsp;
										<input name="is_graduate" type="checkbox" value="1" title="可接受应届生" <?php if ($_smarty_tpl->tpl_vars['row']->value['is_graduate']) {?>checked<?php }?> lay-skin="primary" />
					              	</div>
					     		</li>
					     		
							 	<li>
                                	<div class="com_release_cont" style="height:40px">
									<div class="com_release_w100">
                                    <div class="layui-input-inline">
											<select name="age" lay-filter="age">
											  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											  	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['age']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php if ($_smarty_tpl->tpl_vars['j']->value==0) {?>年龄<?php }
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											  	<?php } ?>
											</select>
										</div></div>  	
                                    <div class="com_release_w100">
                                    <div class="layui-input-inline">
											<select name="sex" lay-filter="sex">
						 						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['com_sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==$_smarty_tpl->tpl_vars['j']->value) {?> selected<?php }?>><?php if ($_smarty_tpl->tpl_vars['j']->value==3) {?>性别<?php }
echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
											  	<?php } ?>
											</select>
										</div></div>
                                          <div class="com_release_w100"><div class="layui-input-inline">
											<select name="marriage" lay-filter="marriage">
						 						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											  	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['marriage']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php if ($_smarty_tpl->tpl_vars['j']->value==0) {?>婚况<?php }
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											  	<?php } ?>
											</select>
										</div></div>
                                           <div class="com_release_w150"><div class="layui-input-inline">
											<select name="report" lay-filter="report">
					 					  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										  		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['report']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php if ($_smarty_tpl->tpl_vars['j']->value==0) {?>到岗时间<?php }
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
										  		<?php } ?>
											</select>
										</div></div>
                                         <div class="com_release_w150"><div class="layui-input-inline">
											<select name="number" lay-filter="number">
										  		<option value="">请选择</option>
										  		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										  		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['number']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php if ($_smarty_tpl->tpl_vars['j']->value==0) {?>招聘人数<?php }
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
										  		<?php } ?>
											</select>
										</div></div>
					              	</div>
				            	</li>
				            	    	
	           			
				            	<li>
									<div class="com_release_name"><i class="ff0">*</i> 职位描述：</div>
									<div class="com_release_cont">
										<div class="Description" style="display:none;">
											<div class="Description_icon">
												<i class="Description_icon_i"></i>
												<div class="Description_box" style="display:none;">
													<i class="Description_icon_i_j"></i>
													点击职位链接，为你推荐的职位要求模板复制到编辑区域内！<br>您也可以编辑，直至完美！
												</div>
											</div>
											<div class="Description_box_mb">样本：<span id="JobRequInfoTemplate"></span></div>
										</div>
										
										<div class="clear"></div>
					 					<?php echo '<script'; ?>
 id="description" name="description" type="text/plain" style="width:500px; height:100px;"> <?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
 <?php echo '</script'; ?>
>
										<span id="by_description" class="errordisplay">不能为空</span>
									</div>
				            	</li><li>
					           		<div class="com_release_name">从事行业：</div>
				               		<div class="com_release_cont">
								  		<div class="layui-input-inline" style="width:500px;">
											<select name="hy" lay-filter="hy">
											  	<option value="">请选择</option>
											  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											  	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['hy']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											  	<?php } ?>
											</select>
										</div>
				               		</div>
					            </li>	
								<li class="jobadd_list_fl">
									<div class="com_release_name">福利待遇：</div>
									<div class="layui-form-item">
										<div class="layui-input-block">
											<span class="" id="addwelfarelist">
												<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['arraywelfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tv']->key;
?>
													<input name="welfare[]" id="welfare<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['arraywelfare']&&in_array($_smarty_tpl->tpl_vars['tv']->value,$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?> checked="checked" <?php }?> type="checkbox" title="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" data-tag="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" class="changewelfare" lay-skin="primary">
												<?php } ?>
											</span>
					
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
<?php $_tmp1=ob_get_clean();?><?php if (!in_array($_tmp1,$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?>
													<input name="welfare[]" id="welfare<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" value="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['arraywelfare']&&in_array($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value],$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?> checked="checked" <?php }?> type="checkbox" title="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" data-tag="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" class="changewelfare" lay-skin="primary">
												<?php }?>
											<?php } ?>

											<div class="addwelfare_b">
												<input class="addwelfare_text" type="text" tabindex="1000" placeholder="自定义" id="addwelfare" ><a class="addwelfarebox">添加福利</a>    
											</div>
										</div>
									</div>

								</li>
								<?php if ($_smarty_tpl->tpl_vars['comdata']->value['job_lang']!=''&&count($_smarty_tpl->tpl_vars['comdata']->value['job_lang'])>0) {?>
								<li>
					              	<div class="com_release_name">语言要求：</div>
									<div class="layui-form-item">
							        	<div class="layui-input-block">
							          		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							          		<input name="lang[]" id="lang<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['row']->value['lang'])) {?> checked="checked" <?php }?> type="checkbox" lay-skin="primary">
							        		<?php } ?>
							        	</div>
							      	</div>
	            				</li>
	            				<?php }?>
				          	</ul>
			
				      		<div class="job_touch">
								<input type="hidden" name="islink" id="islink" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']) {
echo $_smarty_tpl->tpl_vars['row']->value['is_link'];
} else { ?>1<?php }?>" />
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
"  id="map_xval" name="map_xval">
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
"  id="map_yval" name="map_yval">
								
								<div class="admin_job_js_w_list fl mt10" >
									<div class="admin_job_js_list_ft mt10 fl"><span style="width:100%;"> 联系方式：</span></div>
									
									<div class="admin_job_js_list_rt fl">
										<span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']==1||$_smarty_tpl->tpl_vars['row']->value['is_link']=='') {?>admin_job_style_n<?php }?> fl" onclick="choice('1','link')" id="islink1">
											使用企业基本资料的联系方式（<?php echo $_smarty_tpl->tpl_vars['company']->value['linkman'];?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['company']->value['linktel']) {
echo $_smarty_tpl->tpl_vars['company']->value['linktel'];
} else {
echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];
}?>）
										</span>
									
										<span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']==2) {?>admin_job_style_n<?php }?> fl" onclick="choice('2','link')" id="islink2">
											使用其他联系方式
										</span>
										
										<div id="newlink" <?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']!=2) {?> style="display:none;" <?php }?> >
											<div class="job_touch_other mt10 fl">
												<div class="layui-form-item">
												
													<div class="job_touch_other_tit fl">使用新联系方式</div>
													
													<div class="layui-input-inline" style="width:130px">
														<input type="text" <?php if ($_smarty_tpl->tpl_vars['job_link']->value['link_man']&&$_smarty_tpl->tpl_vars['row']->value['is_link']=='2') {?>value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_man'];?>
"<?php }?> placeholder="请输入联系人" id="link_man" name="link_man" class="layui-input"> 
													</div>
													
													<div class="layui-input-inline"  style="width:160px">
														<input type="tel" <?php if ($_smarty_tpl->tpl_vars['job_link']->value['link_moblie']&&$_smarty_tpl->tpl_vars['row']->value['is_link']=='2') {?>value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_moblie'];?>
"<?php }?> id="link_moblie" name="link_moblie" placeholder="请输入联系电话" lay-verify="phone" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class="layui-input">
													</div>
													<div class="layui-input-inline"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['email'];?>
" placeholder="请填写新邮箱" class="layui-input" id="email" name="email">		</div>
													
													<div class="layui-input-inline"  style="width:500px;margin: 5px 0;">
													<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_address'];?>
" placeholder="请输入公司的详细地址，如：XX市XX区XX1号楼" class="layui-input" id="link_address" name="link_address"><i class="com_release_mapicon" onclick="setmap('<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_address'];?>
')"></i>		</div>
													
													<div class="layui-input-inline">
														<input name="type_switch" lay-filter="type_switch" lay-skin="switch" lay-text="开启|关闭" type="checkbox" >
														<input name="tblink" id="tblink" type="hidden" value="">
						 								<div class="layui-form-mid layui-word-aux">同步到所有职位</div>
													</div>
						 						</div>
											</div>
										</div> 
									</div>
								</div>    
							</div>
	
				        	<div class="admin_job_js_w_list mt20 fl">
	
				        		<div class="admin_job_js_list_ft fl"><span style="width:100%;">设置：</span></div>
							 	<div class="admin_job_js_list_rt fl">
							 		<div class="com_job_tel_set">
									 	<span class="com_job_tel_setlist <?php if ($_smarty_tpl->tpl_vars['row']->value['is_link']==3||($_smarty_tpl->tpl_vars['row']->value['is_link']==''&&$_smarty_tpl->tpl_vars['row']->value['infostatus']==2)) {?>com_job_tel_setlist_zt_cur<?php }?>" onclick="choice('3','link')" id="islink3"><i class="com_job_tel_setlist_zt "></i>不向求职者展示联系方式</span>
									 	<span class="com_job_tel_setlist <?php if ($_smarty_tpl->tpl_vars['row']->value['is_email']==3) {?>com_job_tel_setlist_zt_cur<?php }?>" onclick="choice('3','email')" id="isemail3"><i class="com_job_tel_setlist_zt"></i>不需要将收到的简历发送到邮箱</span>
									 	<input type="hidden" name="isemail" id="isemail" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['is_email']) {
echo $_smarty_tpl->tpl_vars['row']->value['is_email'];
} else { ?>1<?php }?>" />
							 		</div>
								</div>
							</div>   
	       
	         				<div class="clear"></div>
		         				
							<div class=admin_submit>
					          	<div class="admin_job_js_list_ft  fl"><span style="width:100%;">&nbsp;</span></div>
					          	<div class=sub_btn>
					              	<input type="hidden" id="r_status" name="r_status" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['r_status'];?>
">
					             	<input class="btn_01"  id="submitBtn" type="submit" name="submitBtn" value=" 提 交 ">
					              	<input name="jobcopy" value="<?php echo $_GET['jobcopy'];?>
" type="hidden"/>
					           		<?php if ($_GET['id']) {?>
					            		<input id="id"name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="hidden"/>
					            	<?php }?>
					             	<input id="save"name="save" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" type="hidden"/>
					          	</div> 
							</div>
							
							<div class="clear"></div>
	      				</div>
	        		</form>
	    		</div>  
	    	</div>
		</div>
	</div>
</div>  

<input type='hidden' id='jobid' value=''>
<div class="job_tck_box" id="addjob" style="display:none;">

<!--职位成功-->

<!--提示部分 start-->
<div style="width:710px; background:#fff;">
	<div class="yun_prompt_writingicon"><i class="yun_prompt_writingicon_right"></i></div>
	<div class="yun_prompt_writing">职位发布成功！</div>
	<?php if (($_smarty_tpl->tpl_vars['config']->value['com_free_status']==1&&$_smarty_tpl->tpl_vars['company']->value['yyzz_status']==1&&$_smarty_tpl->tpl_vars['company']->value['r_status']==1)||$_smarty_tpl->tpl_vars['config']->value['com_job_status']==1&&$_smarty_tpl->tpl_vars['company']->value['r_status']==1) {?>
	<div class="yun_prompt_writing_tip">职位信息已审核，您可进行以下操作</div>
	<?php } else { ?>
	<div class="yun_prompt_writing_tip">管理员审核通过后才可展示职位信息，您可进行以下操作</div>
	<?php }?>
	
	<div class="yun_prompt_writing_operation">
		<a href="javascript:void(0)"  onclick="addjob_continue('<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
');return false;" class="yun_prompt_jobtgbth">再发一条</a>
		<a id="jobshow" href="javascript:;"s class="yun_prompt_jobtgbth">查看信息</a>
		<a href="index.php?c=job&w=5" target="_blank" class="yun_prompt_jobtgbth">管理我的信息</a>
		<?php if (($_smarty_tpl->tpl_vars['config']->value['com_free_status']==1&&$_smarty_tpl->tpl_vars['company']->value['yyzz_status']==1&&$_smarty_tpl->tpl_vars['company']->value['r_status']==1)||$_smarty_tpl->tpl_vars['config']->value['com_job_status']==1) {?>
		<a href="javascript:;" class="yun_prompt_jobtgbth yun_prompt_jobtgbth_sm">
			扫码分享职位
			<div class="yun_prompt_jobtgbth_smbox none">
				<div class="yun_prompt_jobtgbth_smboxpic">
					<img id="sharecode" src="" width="60" height="60">
				</div>
				使用微信、手机QQ扫描二维码，
				<div>让微信和QQ好友推荐招人更靠</div>
			</div>
		</a>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['com_free_status']==1&&$_smarty_tpl->tpl_vars['company']->value['yyzz_status']==1&&$_smarty_tpl->tpl_vars['company']->value['r_status']==1||$_smarty_tpl->tpl_vars['company']->value['r_status']==1&&$_smarty_tpl->tpl_vars['config']->value['com_job_status']==1) {?>
	<div class="yun_prompt_jobtg_box">
		<div class="yun_prompt_jobtg">开启职位推广提升招聘效果</div>
		<ul class="yun_prompt_jobtglist">
			<li><span class="">职位推荐</span><em class="">展示在列表右侧黄金位置，带来精确的投递；高质的效果</em><a id="jobrec" href="javascript:void(0);" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['rec_time'],'%Y-%m-%d');?>
', 2)">开启</a></li>
			<li><span class="">职位紧急</span><em class="">紧急招聘，强烈提升职位曝光度</em><a id="joburgent" href="javascript:void(0)" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['urgent_time'],'%Y-%m-%d');?>
', 3)">开启</a></li>
			<li><span class="">职位置顶</span><em class="">将职位信息固定排在页面第一页，不会被其他信息挤下去</em><a id="jobtop" href="javascript:void(0)" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['xsdate'],'%Y-%m-%d');?>
', 1);">开启</a></li>       
			<li><span class="">自动刷新</span><em class="">自动刷新， 职位管理轻松更高效</em><a id="jobauto" href="javascript:void(0)" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['autodate'],'%Y-%m-%d');?>
', 5);">开启</a></li>
		</ul>
		<div class="yun_prompt_jobgzh"><div class="yun_prompt_jobgzh_img"><img src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
'  width='130' height='130'></div>关注公众号<br>随时接受简历投递</div>
	</div>
	<?php }?>
</div>
	
</div>
<!--设置企业地图弹出框-->
<div id="setmap" style="display:none;">
 	<div style="position:relative" style="width:740px;"> 
 		<input type="hidden" name="type" value="info">
     	<div class="infomap_seach"><input id="map_keyword" type="text" value="<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['three_cityid']];
echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" class="infomap_seach_text" placeholder="请输入地址" onclick="if(this.value=='请输入地址'){this.value='';}" onblur="if(this.value==''){this.value='请输入地址';}"/><input type="button" value="搜索" onclick="localsearch('全国');" class="infomap_seach_sub"/></div>
       	<table border="0" cellspacing="0" cellpadding="0" style="font-size:12px;">
        	<tr>
             	<th height="30"></th>
                <td><div id="map_container" style="width:739px;height:300px;"></div><br>
                </td>
         	</tr>
        	<tr>
           		<th>&nbsp;</th>
                <td height="40"> 
                	X轴:
                  	<input name="xvalue" id="map_x" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" readonly="readonly" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['x']) {
echo $_smarty_tpl->tpl_vars['row']->value['x'];
} else {
echo $_smarty_tpl->tpl_vars['company']->value['x'];
}?>"  class="com_info_text" style='float:none;width:260px'>
                  	&nbsp;&nbsp;
                  	Y轴:
                  	<input name="yvalue" id="map_y" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" readonly="readonly" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['y']) {
echo $_smarty_tpl->tpl_vars['row']->value['y'];
} else {
echo $_smarty_tpl->tpl_vars['company']->value['y'];
}?>"  class="com_info_text" style='float:none;width:260px'>
                  	&nbsp;&nbsp;
                  	<input type="button" name="savemap" class="btn_01" value="保存地图" onclick="checkpost();" style="width:118px">
                  	<span id="by_map" class="errordisplay">请先设置地图位置</span>
              	</td>
           	</tr>
         	<tr>
            	<th height="30"></th>
                <td>
				  	<div class="wxts_box wxts_box_mt20">
					<div class="wxts">操作说明：</div>
				   	在地图区域点击公司所在的位置，点击保存地图。</div>
				</td>
			</tr>
 		</table>
   	</div>
</div>
<!--弹出框 end--> 

<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/city.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
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
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/formSelects-v4.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/formSelects-v4.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var urgentjob = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_urgent'];?>
';
	var online = '<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
';
	var pro = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
';
	
	layui.use(['form', 'layer', 'laydate'], function(){
		var form = layui.form,
			layer = layui.layer,
			laydate = layui.laydate,
			formSelects = layui.formSelects,
			$ = layui.$;  
	
		form.on('select(moneytype)', function(data){
	      	if(data.value == 1){
		        $("#money_1").show();
		        $("#money_2").hide();
	      	}else{
		        $("#money_2").show();
		        $("#money_1").hide();
	      	}
	    });
	 
		form.on('switch(type_switch)', function(data){
	      	var v = this.checked ? 1 : 2;
	      	$("#tblink").val(v);
	    });
	
	 	form.on('checkbox(salary_type)', function(data){
			if(data.elem.checked){
				$("#minsalary").attr("disabled","disabled");
				$("#maxsalary").attr("disabled","disabled");
				$("#minsalary").val(0);
				$("#maxsalary").val(0);
			}else if(!data.elem.checked){
				$("#minsalary").removeAttr("disabled","disabled");
				$("#maxsalary").removeAttr("disabled","disabled");
				$("#minsalary").val('<?php echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];?>
');
				$("#maxsalary").val('<?php echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];?>
');
			}
		});
		formSelects.btns('jobclass_search', []);

	    formSelects.on('jobclass_search', function(id, vals, val, isAdd, isDisabled){
	        var jobvalue = [];
	        vals.forEach(function(item,index){
	          jobvalue.push(item.value);
	        })
	        $('#job_post').val(jobvalue.join(','));
			confirm_selected_jobclass_itemss(jobvalue.join(","));
	    }, true);

	    jobSearchReset();
	    
	});
	function jobSearchReset(){

	  var formSelects = layui.formSelects, 
	    jobclassArr= $("#job_post").val()!='' ? $("#job_post").val().split(",") : [],
	        jarr = [];

	    for(var i=0;i<jobclassArr.length;i++){
	      jarr.push({"name":jn[jobclassArr[i]],"value":jobclassArr[i],"selected":'selected'});
	    }
	    formSelects.data('jobclass_search', 'local', {
	        arr: jarr
	    });
	}
  	//ajax提交表单
	$(function () {
		//添加福利
		$('.addwelfarebox').click(function(){
			var welfare = 	$('#addwelfare').val();
			var error	=	0;
			
			if(welfare.length >= 2 && welfare.length <= 8){
				//判断信息是否已经存在 
				$('.changewelfare').each(function(){
					var otag = $(this).attr('data-tag');
					if(welfare == otag){
						layer.msg('相同福利已存在，请选择或重新填写！', 2,8);
						error = 1;
					}
				});
				if(error==0){
					$('#addwelfarelist').append('<input name="welfare[]" value="'+welfare+'" checked="checked"  type="checkbox" title="'+welfare+'" data-tag="'+welfare+'" class="changewelfare" lay-skin="primary">');
					layui.use(['layer', 'form'], function(){
					    var layer = layui.layer
					    	,form = layui.form
					    	,$ = layui.$;
					    form.render('checkbox');
					});
				}
				$('#addwelfare').val('');
			}else{
				layer.msg('请输入2-8个福利字符！', 2,8);
			}
		});
		
		$('.yun_prompt_jobtgbth_sm').hover(function(){
			$('.yun_prompt_jobtgbth_smbox').toggle();
		});
	});

	function addjob_continue(uid,integral_job){
		var gourl='index.php?c=jobadd';
		var url = weburl + '/index.php?m=ajax&c=ajax_day_action_check';
		
		loadlayer();
		
		$.post(url, {'type': 'jobnum'}, function(data){
			
			layer.closeAll('loading');
			
			data = eval('(' + data + ')');
			
			if(data.status == -1){
				
				layer.msg(data.msg, 2, 8);
			}else if(data.status == 1){
					
				var addurl = 'index.php?c=jobadd&act=getJobNum';
			
				loadlayer();
				
				$.post(addurl,{uid:uid},function(data1){
					
					layer.closeAll('loading');
 				
					if(data1 == 1 || (integral_job==0 && data1!=0)){
					
						window.location.href=gourl;
						window.event.returnValue = false;
						return false;
					}else if(data1 == 2){
						
						var msg='套餐已用完，继续操作将会消费'+integral_job+'元，您还可以<a href="index.php?c=right&act=added" style="color:red">购买增值包</a>，是否继续？';
						
						layer.confirm(msg, function(){
							var height="300px";
							
							$('.css_display').hide();
							var html = $('#tc_issuejob').html();
							$('.css_display').empty();
							$('#tc_issuejob').html(html);
							$('#tc_issuejob').show();
							
							$.layer({	//弹出付费窗口
								type : 1,
								title : '发布职位',
								closeBtn : [0 , true],
								border : [10 , 0.3 , '#000', true],
								area : ['800px', 'auto'],
								page : {dom : '#tcmsg'}
							});
							 
						});

					}else if(data1==0){
						var msg='会员已到期，您可以<a href="index.php?c=right" style="color:red">购买会员</a>，是否继续？';

						layer.confirm(msg, function(){
							window.location.href="index.php?c=right"; 
						});  
					}
				});
			}
		});
	}
	
	var editor = UE.getEditor('description',{
		toolbars:[[ 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],wordCount:false,elementPathEnabled:false,initialFrameHeight:200
	});

	
    function checknext(){
        if($.trim($("#name").val())==''){layer.msg('职位名称不能为空！',2,8);return false;}
        if($("#job_post").val()==''){layer.msg('职位类别不能为空！', 2, 8);return false;}
        if($("#cityid").val()==''){layer.msg('工作地点不能为空！', 2, 8);return false;}
		
        var minsalary  = $.trim($("#minsalary").val());
        var maxsalary  = $.trim($("#maxsalary").val());
        
        if($("#salary_type").attr("checked")!='checked'){
          	if(minsalary==''||minsalary=='0'){
            	layer.msg('请填写薪资待遇！', 2, 8);return false;
          	}
          	if(maxsalary){
	            if(parseInt(maxsalary)<=parseInt(minsalary)){
	              	layer.msg('最高工资必须大于最低工资！', 2, 8);return false;
	            }
          	}
        }
        
		if($("#edu").val()==''){layer.msg('教育程度不能为空！', 2, 8);return false;}
		if($("#exp").val()==''){layer.msg('工作经验不能为空！', 2, 8);return false;}
       
        var description = editor.getContent();
        if($.trim(description)==''){layer.msg('职位描述不能为空！', 2, 8);return false;}
        
        var islink=$("input[name='islink']").val();
        var isemail=$("input[name='isemail']").val();
        
        if(!islink){
        	
          	layer.msg('请选择联系方式！', 2, 8);return false;
        }else if(islink==2){
          	var link_man=$.trim($("input[name='link_man']").val());
          	var link_moblie=$.trim($("input[name='link_moblie']").val());
          	if(link_man==''||link_moblie==''){
            	layer.msg('联系人及联系电话均不能为空！', 2, 8);return false;
          	}
          	if(link_moblie&& (isjsMobile(link_moblie)==false && !isjsTell(link_moblie))){
           	 	layer.msg('联系电话格式错误！', 2, 8);return false;
          	}
        }
        
        if(isemail=='2'){
          	var email=$.trim($("input[name='email']").val());
          	if(email==''){
            	layer.msg('请输入邮箱！', 2, 8);return false;
          	}else if(check_email(email)==false){
            	layer.msg('新邮箱格式错误！', 2, 8);return false;
          	} 
        }
      	
        window.scrollTo(0,0);
        
        $("#comjob").hide();
				$("#combox").show();
    
    }
    
    function checkback(){
     	window.scrollTo(0,0);
       	$("#comjob").show();
		$("#combox").hide();
    }
	
	function getmap(){
	   	var map	=	new BMap.Map('map_container');
	   	var x 	= 	'<?php echo $_smarty_tpl->tpl_vars['config']->value['map_x'];?>
';
	   	var y 	= 	'<?php echo $_smarty_tpl->tpl_vars['config']->value['map_y'];?>
';
	
	   	if(!x || !y){
			map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);
	   	}else{
			map.centerAndZoom(new BMap.Point(x, y), 12);
		}
	   	return map;
	}

	function setmap(address){
	
		var x = $("#map_x").val();
		var y = $("#map_y").val();
		
		var layindex = $.layer({
			type : 1,
			title : '设置企业地图',
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['790px','590px'],
			page : {dom :"#setmap"}
		});
		
		$("#layindex").val(layindex);
		
		var map=getmap();
		
		setLocation('map_container',116.404,39.915,"map_x","map_y",map);
	
		if(x && y){
			
		    setLocation('map_container',x,y,"map_x","map_y",map);
		}else if(address){
			
	
		    $("#map_keyword").val("<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['company']->value['provinceid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['company']->value['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['company']->value['three_cityid']];
echo $_smarty_tpl->tpl_vars['company']->value['address'];?>
");
			address = "<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['company']->value['provinceid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['company']->value['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['company']->value['three_cityid']];
echo $_smarty_tpl->tpl_vars['company']->value['address'];?>
";
			localsearch(address.replace(/\s+/g,""),map);
	
		}else{
		    //根据IP到城市开始
			function myFun(result){
				var cityName = result.name;
				map.setCenter(cityName);
			}
			var myCity = new BMap.LocalCity();
			myCity.get(myFun);
			//根据IP到城市结结束
		}
	}

	function getLocalResult(local){
		var map_keyword	=	$.trim($("#map_keyword").val());
		var points	=	local.getResults();
		var lngLat	=	points.getPoi(0).point;
		setLocation('map_container',lngLat.lng,lngLat.lat,"map_x","map_y");
		document.getElementById("map_x").value=lngLat.lng;
		document.getElementById("map_y").value=lngLat.lat;
		
	}
	function localsearch(city){
		var map	=	getmap();
		setLocation('map_container', 116.404,39.915, 'map_x', 'map_y', map);
		
		if($("#map_keyword").val()==""){
			layer.msg('请输入地址！', 2, 8);return false;
		}
		
		var local = new BMap.LocalSearch(map, {
			renderOptions: {
				map: map
			}
		});
		local.clearResults();
		local.search($("#map_keyword").val().replace(/\s+/g,""));
		
	}
	function checkpost(){
		if($.trim($("#map_x").val())==''||$.trim($("#map_y").val())==''){
			layer.msg('请先设置地图位置！', 2, 8);return false;
		}
		var xvalue = $("#map_x").val();
		var yvalue = $("#map_y").val();

		
		$("#map_xval").val(xvalue);
		$("#map_yval").val(yvalue);

		layer.close($("#layindex").val());
		$("#setmaptip").hide();
		
	}
	function setLocation(id,x,y,xid,yid,map){
		var data=get_map_config();
		var config=eval('('+data+')');
		var rating,map_control_type,map_control_anchor;
		if(!x && !y){x=config.map_x;y=config.map_y;}
		var point = new BMap.Point(x,y);
		var marker = new BMap.Marker(point);
		var opts = {type:BMAP_NAVIGATION_CONTROL_LARGE}
		map.enableScrollWheelZoom(true);
		map.addControl(new BMap.NavigationControl(opts));
		map.centerAndZoom(point, 15);
		map.addOverlay(marker);
		map.addEventListener("click",function(e){
		   var info = new BMap.InfoWindow('', {width: 260});
			var projection = this.getMapType().getProjection();
			var lngLat = e.point;
			document.getElementById(xid).value=lngLat.lng;
			document.getElementById(yid).value=lngLat.lat;
			map.clearOverlays();
			var point = new BMap.Point(lngLat.lng,lngLat.lat);
			var marker = new BMap.Marker(point);
			map.addOverlay(marker);
		});
	}
	
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/jobserver.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
