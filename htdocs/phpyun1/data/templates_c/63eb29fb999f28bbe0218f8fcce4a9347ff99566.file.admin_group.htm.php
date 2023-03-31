<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-16 22:17:11
         compiled from "D:\rcw\uploads\app\template\admin\admin_group.htm" */ ?>
<?php /*%%SmartyHeaderCode:18958904935fb289e795a270-75600615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63eb29fb999f28bbe0218f8fcce4a9347ff99566' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_group.htm',
      1 => 1576492525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18958904935fb289e795a270-75600615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'admin_group' => 0,
    'navigation' => 0,
    'keyone' => 0,
    'v' => 0,
    'power' => 0,
    'one_menu' => 0,
    'keytwo' => 0,
    'val' => 0,
    'two_menu' => 0,
    'value' => 0,
    'three_menu' => 0,
    'valuemodule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb289e7991359_90654750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb289e7991359_90654750')) {function content_5fb289e7991359_90654750($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link href="./images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<link href="./images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<link href="./images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
	</head>
	
	<style>
		.layui-form-checkbox span {width:100px;}
     	.fore_box_list .layui-form-checkbox span{ width:auto}
  	</style>
	
	<body class="body_ifm">
		<div class="infoboxp">

			<div class="admin_new_tip">
				<a href="javascript:;" class="admin_new_tip_close"></a>
				<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
				<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
				<div class="admin_new_tip_list_cont">
					<div class="admin_new_tip_list">管理员根据网站运营需求，添加不同类型的管理员！管理员类型分为：“超级管理员、分站管理员”用户权限组成相关设置，超级管理员可以根据运营需求设置。</div>
				</div>
			</div>
			
			<div class="clear"></div>
			
			<div style=" margin-top:15px;border:1px solid #eee; background:#fff">
				
				<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                <form name="myform" target="supportiframe" action="index.php?m=admin_user&c=savagroup" method="post" id="myform" class="layui-form">
					
					<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['admin_group']->value['id'];?>
" name="groupid" />
					<input type="hidden" name="power[]"  value="999"/>
					
                	<table class="table_form " width="100%">
						
						<tr>
							<td width="100">用户组名称</td>
							<td colspan="2" style="padding-left:10px;border-left:1px solid #eee;">
							<input type="text" name="group_name" id="realname" class="input-text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['admin_group']->value['group_name'];?>
">
							</td>
						</tr>	
						
						<tr>
                
			           		<td width="120" valign="top" style="padding-right:15px">
			                 	<!-- 一级-->
							  	<ul class="qx_namebox">
							 		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['keyone'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['keyone']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			                			<li class="qx_onelist <?php if ($_smarty_tpl->tpl_vars['keyone']->value<1) {?>qx_cur<?php }?>" data-id='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><span class="qx_onelist_s"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
							 				<input type="hidden" name="power[]" value="<?php if (in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['power']->value)) {
echo $_smarty_tpl->tpl_vars['v']->value['id'];
}?>" id="group<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >
										</li>
									<?php } ?>
							 	</ul>
			          		</td>
			                 
                 			<td valign="top"  width="120" style="border-left:1px solid #eee;border-right:1px solid #eee; padding-right:15px">
			                	<!-- 二级-->
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['keyone'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['keyone']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			                 		<ul class="qx_second move<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['keyone']->value>0) {?>none<?php }?>">
									 	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['keytwo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['one_menu']->value[$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['keytwo']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
					                 		<li class="<?php if ($_smarty_tpl->tpl_vars['keytwo']->value<1) {?>qx_second_cur<?php }?>" data-id='<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
' data-pid='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><span><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</span>
									 			<input type="hidden" name="power[]"  value="<?php if (in_array($_smarty_tpl->tpl_vars['val']->value['id'],$_smarty_tpl->tpl_vars['power']->value)) {
echo $_smarty_tpl->tpl_vars['val']->value['id'];
}?>" id="group<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" >
									 		</li>
									 	<?php } ?>
			                		</ul>
								<?php } ?>
			                </td>
			                
                  			<td valign="top">
			                 	<!-- 三级-->
							 	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['keyone'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['keyone']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									
									<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['keytwo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['one_menu']->value[$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['keytwo']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
									  	<ul class="qx_level_four  move<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['keyone']->value>0||$_smarty_tpl->tpl_vars['keytwo']->value>0) {?>none<?php }?>">
									  		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['two_menu']->value[$_smarty_tpl->tpl_vars['val']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
									  			<li class="move<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
						                          	<div class="fore_box">
														<div class="fore_box_c">
						                            		
						                            		<div class="fore_box_name"> <input type="checkbox" name="power[]" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['value']->value['id'],$_smarty_tpl->tpl_vars['power']->value)) {?>checked="checked"<?php }?> id="group<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"   t1="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" t2="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" t3=0 lay-filter="power">  </div>
															
															<?php  $_smarty_tpl->tpl_vars['valuemodule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valuemodule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['three_menu']->value[$_smarty_tpl->tpl_vars['value']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valuemodule']->key => $_smarty_tpl->tpl_vars['valuemodule']->value) {
$_smarty_tpl->tpl_vars['valuemodule']->_loop = true;
?>
								                                <span class="fore_box_list">
															 	<input type="checkbox" name="power[]" title="<?php echo $_smarty_tpl->tpl_vars['valuemodule']->value['name'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['valuemodule']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['valuemodule']->value['id'],$_smarty_tpl->tpl_vars['power']->value)) {?>checked="checked"<?php }?>  t1="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" t2="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" t3="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  id="group<?php echo $_smarty_tpl->tpl_vars['valuemodule']->value['id'];?>
" lay-skin="primary" lay-filter="power">
								                             	</span>
														 	<?php } ?>
														 	
						                                </div>
													</div>         
									  			</li>
											<?php } ?>
										</ul>
									<?php } ?>
									
							  	<?php } ?>
			              	</td>
			  			</tr>
						
						<tr>
							<td colspan="3" align="center" height="40" style="border-top:1px solid #eee;">
								<input class="layui-btn layui-btn-normal" name="add_group" type="submit" value="提交" id="dosubmit">
							</td>
						</tr>
                	</table>
              	</form>
           	</div>
           	
           	<div class="clear"></div>
           	 
		</div>
		
		<?php echo '<script'; ?>
 language="javascript">
			layui.use(['layer', 'form', 'element'], function() {
			
				var layer = layui.layer,
					form = layui.form,
					element = layui.element,
					$ = layui.$;
				
				form.on('checkbox(power)', function(data) {

					var id = data.elem.id;
					var t1 = $('#' + id).attr('t1');
					var t2 = $('#' + id).attr('t2');
					var t3 = $('#' + id).attr('t3');
				  
					if (data.elem.checked) {

						$("#group" + t1).val(t1);
						$("#group" + t2).val(t2);
						
						if(t3 == 0){
						
							$('.move' + data.elem.value + ' input[type="checkbox"]').each(function() {
							
								$(this).attr("checked", true);
							});
						}else{
							
							$("#group" + t3).attr("checked", true);
						}
 
						form.render();

					} else {
						
						var t1checked = 0;
						var t2checked = 0;
						var t3checked = 0;
						
						if(t3 ==0){
							$('.move' + data.elem.value + ' input[type="checkbox"]').each(function() {
							
								$(this).attr("checked", false);
							});
						}
						
						$('.move' + t2 + ' input[type="checkbox"]:checked').each(function() {
							t2checked = 1;
							return false;
						});
						
						$('.move' + t3 + ' input[type="checkbox"]:checked').each(function() {
							t3checked = 1;
							return false;
						});
						
						if (t2checked != 1) {
							$("#group" + t2).val('');
						}
						
						$('.move' + t1 + ' input[type="hidden"]').each(function() {
						
							if($(this).val()!=''){

								t1checked = 1;
								return false;
							}
						});
						
						if (t1checked != 1) {
							$("#group" + t1).val('');
						}
						
						form.render();
					}
				});
			});

			$(function(){
			
				$('.qx_namebox li').click(function(){

					var secid= $(this).attr('data-id');

					$('.qx_onelist').removeClass('qx_cur');
					$(this).addClass('qx_cur');

					$('.qx_second').hide();
					$('.move'+secid).show();

					var thid = $('.move'+secid).find('.qx_second_cur').attr('data-id');
					
					$('.qx_level_four').hide();
					$('.move'+thid).show();
					
				});

				$('.qx_second li').click(function(){
					
					var thid= $(this).attr('data-id');
					var pid = $(this).attr('data-pid');
					$('.move'+pid+' li').removeClass('qx_second_cur');
					$(this).addClass('qx_second_cur');

					$('.qx_level_four').hide();
					$('.move'+thid).show();
				});
			})
		<?php echo '</script'; ?>
>
	</body>
</html>
<?php }} ?>
