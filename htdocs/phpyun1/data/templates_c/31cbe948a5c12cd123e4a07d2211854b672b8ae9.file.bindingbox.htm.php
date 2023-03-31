<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 15:36:52
         compiled from "D:\rcw\uploads\app\template\wap\member\user\bindingbox.htm" */ ?>
<?php /*%%SmartyHeaderCode:20123751675fab9494ad2bb4-68515983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31cbe948a5c12cd123e4a07d2211854b672b8ae9' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\bindingbox.htm',
      1 => 1576479789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20123751675fab9494ad2bb4-68515983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'usertype' => 0,
    'member' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab9494ade9f6_53417993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab9494ade9f6_53417993')) {function content_5fab9494ade9f6_53417993($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/binding.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var usertype = "<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
";
<?php echo '</script'; ?>
>

<section class="wap_member">

    <?php if ($_GET['type']=="email") {?>

		<ul class="yunset_password mt15">
			<li>
				<span class="yunset_password_mname">邮&nbsp;&nbsp; 箱 </span>
				<div class="yunset_sj_box_y">
					<input type="text" class="yunset_sjtext" name="email" id="emailval" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['email'];?>
" placeholder="请输入邮箱">
				</div>
			</li>
			<li>
				<span class="yunset_password_mname">验证码</span>
				<div class="yunset_sj_box_y">
                <div class="yunset_yzm">
					<input type="text" name="authcode" class="yunset_sjtext" placeholder="请输入图片验证码">
                    </div>
					<img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" class="yunset_sj_boxyzm" onclick="checkCode('vcode_img');">
				</div>
			</li>
		</ul>

		<div class="yunset_bth_box">
			<input type="button" value="发送验证邮箱" class="yunset_bth" onclick="check_email('vcode_img');">
		</div>

    <?php }?> 
	
	<?php if ($_GET['type']=="moblie") {?>

		<ul class="yunset_password mt15">
			<li>
				<span class="yunset_password_mname">手机号码 </span>
				<div class="yunset_sj_box_y">
					<input type="text" class="yunset_sjtext" name="moblie" id="moblieval" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['moblie'];?>
" placeholder="请输入手机号">
				</div>
			</li>
		</ul>

		<ul class="yunset_password mt15">
			<li>
				<span class="yunset_password_mname">图片验证码</span>
				<div class="yunset_yzm">
					<input type="text" name="authcode" class="yunset_sjtext" placeholder="请输入图片验证码">
					<img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" class="yunset_sj_boxyzm" onclick="checkCode('vcode_img');">

				</div>
			</li>
			<li>
				<span class="yunset_password_mname">短信验证码</span>
				<div class="yunset_sj_box_y">
                <div class="yunset_dxyzm">
					<input type="text" class="yunset_sjtext" maxlength="6" placeholder="请输入验证码" id="moblie_code">
                    	</div>
					<a href="javascript:void(0);" onclick="sendmoblie('vcode_img');" class="yunset_sj_yzm" id="time">获取验证码</a>
				</div>
			</li>
		</ul>
		<div class="yunset_bth_box">
			<input type="button" value="提交" class="yunset_bth" onclick="check_moblie('vcode_img');">
		</div>

    <?php }?>

    <input type="hidden" id="send" value="0" />
</section>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
