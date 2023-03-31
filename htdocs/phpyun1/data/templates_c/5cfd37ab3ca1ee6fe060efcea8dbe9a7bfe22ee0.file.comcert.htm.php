<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 09:04:39
         compiled from "D:\rcw\uploads\app\template\wap\member\com\comcert.htm" */ ?>
<?php /*%%SmartyHeaderCode:8986571015fb71627ad06d2-58643554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cfd37ab3ca1ee6fe060efcea8dbe9a7bfe22ee0' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\com\\comcert.htm',
      1 => 1576479788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8986571015fb71627ad06d2-58643554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'company' => 0,
    'cert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb71627ae0357_36969547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb71627ae0357_36969547')) {function content_5fb71627ae0357_36969547($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/compress.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/exif.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']==1) {?>
	<div class="yun_com_msg">当前营业执照已认证</div>
<?php } else { ?> 

	<?php if (!empty($_smarty_tpl->tpl_vars['cert']->value['check'])) {?> 

		<?php if ($_smarty_tpl->tpl_vars['cert']->value['status']==2) {?>
			<div class="yun_com_msg">审核未通过，<?php if ($_smarty_tpl->tpl_vars['cert']->value['statusbody']) {?>原因：<?php echo $_smarty_tpl->tpl_vars['cert']->value['statusbody'];?>
,<?php }?>请重新上传，如有疑问可拨打客服服务热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
		<?php } else { ?>
			<div class="yun_com_msg">营业执照已上传等待管理员审核，请耐心等待，如需快速审核可拨打客服服务热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
		<?php }?>
		 
	<?php } else { ?>
	
		<div class="yun_com_msg">未认证，当前未上传营业执照</div>
		
	<?php }?>
	 
<?php }?>

<form method="post" action="" onsubmit="return check_company_cert();">
    
    <ul class="yunset_password mt15">
        <li>
            <span class="yunset_password_mname">企业全称</span>
            <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" class="yunset_text">
        </li>
    </ul>
	
    <div class="yunset_identity_box">
    
        <div class="yunset_identity" style="height:270px;">
        
            <div align="center" class="yunset_identity_pic_img" id="previewshow" <?php if (!$_smarty_tpl->tpl_vars['cert']->value['check']) {?>style="display: none;" <?php }?>>

                <img src="<?php echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
"  id="previewimg" />

            </div>
            <div class="yunset_identity_pic">

                <input type="file" name="pic" id="pic" onchange="previewImage(this,'preview')" accept="image/*" class="yunset_identity_pic_file">
				<input type='hidden' name='preview' value='' id='preview'>

            </div>
            <i class="yunset_identity_pic_tj"></i>
            <div class="yunset_identity_tip" style="padding-top:10px;">上传营业执照</div>
            <span class="yunset_identity_tip_a">选择上传图片</span>
            <div class="yunset_identity_tip_c" style="padding-top:10px;">营业执照中的文字、图片、章印等需清晰可辨别，否则不能通过认证。 </div>

        </div>
    </div>
    <div class="yunset_identity_msg"><i class="yunset_identity_msg_icon"></i>格式为 <?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
 不得超过<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
M</div>

    <div class="yunset_bth_box">
		<input type="hidden" id="oldimg" value="<?php echo $_smarty_tpl->tpl_vars['cert']->value['check'];?>
">
        <input type="hidden" id="img" value="1">
        <input type="submit" name="submit" value="<?php if (!$_smarty_tpl->tpl_vars['cert']->value['check']) {?>保存<?php } else { ?>更新/修改<?php }?>" class="yunset_bth">
    </div>

</form>
<?php echo '<script'; ?>
 type="text/javascript">
    function check_company_cert() {
        if($.trim($("#name").val()) == '') {
            layermsg('企业全称不能为空！');
            return false;
        }
		if($.trim($("#oldimg").val()) == ''&&$("#pic").val() == ''){
			layermsg("请上传营业执照！");
			return false;
		}else{
			if($.trim($("#preview").val()) == ''){
				layermsg("请上传新的营业执照！");
				return false;
			}
		}
        return true;
    }
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
