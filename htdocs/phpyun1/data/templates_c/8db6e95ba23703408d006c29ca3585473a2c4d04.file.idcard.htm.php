<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 15:06:56
         compiled from "D:\rcw\uploads\app\template\wap\member\user\idcard.htm" */ ?>
<?php /*%%SmartyHeaderCode:2165254045fab8d90721498-42693997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8db6e95ba23703408d006c29ca3585473a2c4d04' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\idcard.htm',
      1 => 1576479788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2165254045fab8d90721498-42693997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'resume' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab8d90735632_82620922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab8d90735632_82620922')) {function content_5fab8d90735632_82620922($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
<?php echo '<script'; ?>
 type="text/javascript">
    function checkidcard() {
        var idcard = $("#idcard").val();
        if(idcard == '') {
            layermsg("请填写身份证号！");
            return false;
        }
        var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
        if(reg.test(idcard) === false) {
            layermsg("身份证号格式错误！");
            return false;
        }
		if($.trim($("#oldimg").val()) == '' && $("#pic").val() == ''){
			layermsg("请上传证件照！");
			return false;
		}else{
			if($.trim($("#preview").val()) == ''){
				layermsg("请上传新的证件照！");
				return false;
			}
		}
    }
<?php echo '</script'; ?>
>
<form id="resumeInfo" action="" method="post" onsubmit="return checkidcard();">

    <?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==1) {?>
    <div class="yun_com_msg">身份证已审核通过~，如果修改需重新审核！</div>
    <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_pic']) {?> <?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==2) {?>
    <div class="yun_com_msg">
        <?php if ($_smarty_tpl->tpl_vars['resume']->value['statusbody']) {?>审核未通过;审核说明：<?php echo $_smarty_tpl->tpl_vars['resume']->value['statusbody'];?>
，请重新上传，如有疑问可拨打客服服务热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
 <?php }?>
    </div>
    <?php } else { ?>
    <div class="yun_com_msg">管理员审核中~，请耐心等待，如需快速审核可拨打客服服务热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
    <?php }?> <?php } else { ?>
    <div class="yun_com_msg">你还没有进行实名认证</div>
    <?php }?> <?php }?>

    <ul class="yunset_password mt15">
        <li><span class="yunset_password_mname">您的姓名</span> <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
" class="yunset_text"></li>
        <li><span class="yunset_password_mname">身份证号</span> <input type="text" name="idcard" id="idcard" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['idcard'];?>
" placeholder="请输入您的身份证号" class="yunset_text"></li>
    </ul>

    <div class="yunset_identity_box">
        <div class="yunset_identity" style="height:240px">
            <div align="center" class="yunset_identity_pic_img" id="previewshow" <?php if (!$_smarty_tpl->tpl_vars['resume']->value['idcard_pic']) {?>style="display: none;" <?php }?>>

                <img src="<?php echo $_smarty_tpl->tpl_vars['resume']->value['idcard_pic'];?>
" id="previewimg" />

            </div>
            <div class="yunset_identity_pic">

                <i class="yunset_identity_pic_tj"></i>
                <input type="file" id="pic" name="pic" onchange="previewImage(this,'preview')" accept="image/*" class="yunset_identity_pic_file">
                <input type='hidden' name='preview' value='' id='preview'>
            </div>

            <div class="yunset_identity_tip">上传本人的身份证人像页照片</div>
              <span class="yunset_identity_tip_a">选择上传图片</span>
            <div class="yunset_identity_tip_c" style="padding-top:10px;">（ 文字清晰，四角齐全 )</div>

        </div>

    </div>
    <div class="yunset_identity_msg"><i class="yunset_identity_msg_icon"></i>格式为 <?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
不得超过<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
M</div>

    <div class="yunset_bth_box">
		<input type="hidden" id="oldimg" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['idcard_pic'];?>
">
        <input type="hidden" name="eid" id="eid" value="<?php echo $_GET['eid'];?>
">
        <input type="submit" name="submit" value="保存" class="yunset_bth">
    </div>

</form>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
