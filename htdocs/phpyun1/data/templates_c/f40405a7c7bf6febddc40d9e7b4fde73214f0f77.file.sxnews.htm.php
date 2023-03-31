<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:10:47
         compiled from "D:\rcw\uploads\app\template\wap\member\user\sxnews.htm" */ ?>
<?php /*%%SmartyHeaderCode:15455752125fa59fb7196770-50234030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f40405a7c7bf6febddc40d9e7b4fde73214f0f77' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\sxnews.htm',
      1 => 1576479743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15455752125fa59fb7196770-50234030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59fb71ad2e6_58960244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59fb71ad2e6_58960244')) {function content_5fa59fb71ad2e6_58960244($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<section class="main_member_cot_box">
	<div class="wap_member_comp_h1"><span>私信</span></div>
	<?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>		
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>		
			<div class="com_member_hr">				
				<div class="com_member_hr_name"> 
					<a  class="wap_member_com_name  com_member_hr_cblue">管理员</a>
				</div>
						
				<div class="com_member_user_box">
					<div class="com_member_hr_tj">
						<div class="com_member_hr_p1">
						  <div class="com_member_hr_p1"><span class="member_c9">内容：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</div>
						</div>
					</div>
			
					<div class="com_member_hr_p1">
						<span class="member_c9">日期：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d %H:%M");?>
 </span>
					</div>
					
					<div class="com_member_hr_cz">
						<em class="user_size">
							<a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=delsxnews&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="yun_member_hr_bth">删除</a>
						</em> 
					</div> 
				</div> 
			</div>
		<?php } ?>
		
	<?php } else { ?> 
		
		<div class="wap_member_no">
			没有私信记录。
		</div> 
	
	<?php }?> 
</section>
<div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
