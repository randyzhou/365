<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:13:32
         compiled from "D:\rcw\uploads\app\template\wap\member\user\set.htm" */ ?>
<?php /*%%SmartyHeaderCode:11507106525fa5a05c4d6af1-50801761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a6a92684f96969b2117c711cd7eedff0493e75a' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\set.htm',
      1 => 1576479743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11507106525fa5a05c4d6af1-50801761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resume' => 0,
    'config' => 0,
    'username' => 0,
    'setname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5a05c4ec388_61380759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5a05c4ec388_61380759')) {function content_5fa5a05c4ec388_61380759($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<!--账号设置-->
<div class="yunset_box">
	<a href="index.php?c=info" class="yunset_box_photo">
		<?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']==1) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);">
		<?php } else { ?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);">
		<?php }?>
		<div class=""><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
		<div class="yunset_box_info">完善基本资料</div>
	</a>
</div>

<ul class="yunset mt15">
	<li>
		<a href="index.php?c=idcard">
			实名认证 			
			<?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==1) {?>
				<span class="yunset_tip">身份已认证</span>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_pic']) {?>
    				<?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==2) {?>
    					<span class="yunset_tip">审核未通过</span>
    				<?php } else { ?>
			    		<span class="yunset_tip">等待管理员审核</span>
			        <?php }?>
			    <?php } else { ?> 
			    	<span class="yunset_tip">未认证</span>
			    <?php }?>
			<?php }?>
		</a>
	</li>
    
</ul>

<ul class="yunset mt15">
	<li class="yunset_yx">
		<a href="index.php?c=bindingbox&type=moblie">
			<span class="yunset_list_maxheight">手机</span>
		<span class="yunset_tip ">
				（<?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']==1) {?>已绑定<?php } else { ?>未验证<?php }?>）
				 <?php if ($_smarty_tpl->tpl_vars['resume']->value['telphone']) {?> <?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
 <?php } else { ?> 
				  <?php }?>     <div class=""> 手机用于登录和找回密码请谨慎填写</div>
			</span>
		</a>
	</li>
	
	<li class="yunset_yx">
		<a href="index.php?c=bindingbox&type=email">
			<span class="yunset_list_maxheight">邮箱</span>
			<span class="yunset_tip ">
				（<?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>已绑定<?php } else { ?>未绑定<?php }?>）
				 <?php if ($_smarty_tpl->tpl_vars['resume']->value['email']) {?>  <?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
  <?php } else { ?> <?php }?>  
                 <div class=""> 邮箱用于登录和找回密码请谨慎填写</div>
 			</span>
		</a>
	</li>
	<li><a href="index.php?c=binding">社交账号绑定</a></li>
</ul>

<ul class="yunset mt15">
	<li><a href="index.php?c=privacy">隐私设置</a></li>
</ul>

<ul class="yunset mt15">
	<li><a href="index.php?c=password">密码设置</a></li>
    
    <?php if ($_smarty_tpl->tpl_vars['setname']->value) {?>
    	<li><a href="index.php?c=setname">用户名修改	<div class="yunset_tip ">您有一次修改账户名的机会</div></a></li>
	<?php }?>
  <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']==1) {?>
	<li><a href="javascript:;" onclick="changeutype();">切换身份<span class="yunset_tip">我要招人</span></a></li>
	<?php }?>
  <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'advice'),$_smarty_tpl);?>
">反馈与建议</a></li>

	<li><a href="index.php?c=transfer">账户分离</a></li>
</ul>

<div class="yunset_logout mt15">
	<a	href="javascript:;" onclick="islogout('<?php echo smarty_function_url(array('m'=>'wap','c'=>'loginout'),$_smarty_tpl);?>
','确认退出吗？');">退出登录</a>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/public/changeutype.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
