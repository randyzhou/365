<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 16:55:32
         compiled from "D:\rcw\uploads\app\template\wap\uploadimg.htm" */ ?>
<?php /*%%SmartyHeaderCode:1644200075faba704a487e9-25412029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a71254c0239370377b9006746ecae7b604f5624' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\uploadimg.htm',
      1 => 1576479791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1644200075faba704a487e9-25412029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'wap_style' => 0,
    'backurl' => 0,
    'type' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5faba704a5cce6_49158102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5faba704a5cce6_49158102')) {function content_5faba704a5cce6_49158102($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
 - 手机人才网</title>
        <meta name="keywords" content="人才招聘,网络招聘,wap" />
        <meta name="description" content="人才招聘网wap网站" />
        <meta content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport" />
        <meta name="MobileOptimized" content="240" />
        <meta http-equiv="Expires" content="0" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="format-detection" content="telephone=no,email=no" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/yun_wap_member.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
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
            function checkIdcard(num) {
                //身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X。
                var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
                if(reg.test(num) === false) {
                    return false;
                }
            }

            function check_form_post() {
                var img = $.trim($("#pic").val());
                if(img == "") {
                    layermsg('请上传图片');
                    return false;
                }
				var imgdata = {},
					type = $.trim($("#type").val()),
					token = $.trim($("#token").val()),
					preview = $.trim($("#preview").val());
					imgdata.token = token;
					imgdata.preview = preview;
				if(type=='2'){
					var name = $.trim($('#name').val());
					var idcard = $.trim($('#idcard').val());
					if(name == '') {
                        layermsg('请填写您的姓名');
                        return false;
                    }
                    if(idcard == '') {
                        layermsg('请填写证件号码');
                        return false;
                    }
                    if(checkIdcard($.trim(idcard)) == false) {
                        layermsg('请填写正确证件号码！');
                        return false;
                    } 
					imgdata.name = name;
					imgdata.idcard = idcard;
				}else{
					var com_name = $.trim($('#com_name').val());
					if(com_name == '') {
                        layermsg('请填写公司名称');
                        return false;
                    }
					imgdata.com_name = com_name;
				}
                layer_load('上传中');
				$.post('index.php?c=upload&a=uploadimg_save',imgdata,function(data){
					layer.closeAll();
					var data=eval('('+data+')');
					
					if(data.errcode == 9) {
						$('#submit').attr('onclick','');
						$('#submit').val(data.msg);
					}
					layermsg(data.msg);return false;
				});
            }
        <?php echo '</script'; ?>
>
    </head>

    <body>
        <header>
            <div class="header_bg">
                <a class="hd-lbtn" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:history.back();<?php }?>"><i class="header_top_l iconfont"></i></a>
                <div class="header_h1">手机上传</div>
            </div>
        </header>
        <div class="main_member_body">

            <style type="text/css">
                .submit-ok {
                    color: #fff;
                    background-color: #5cb85c;
                }
            </style>
                <?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?>
                <ul class="yunset_password mt15">
					<li><span class="yunset_password_mname">您的姓名</span> <input type="text" name="name" id="name" value="" class="yunset_text"></li>
                    <li><span class="yunset_password_mname">证件号码</span> <input type="number" name="idcard" id="idcard" value="" class="yunset_text"></li>
                </ul>
				<?php } else { ?>
				 <ul class="yunset_password mt15">
                    <li><span class="yunset_password_mname">公司名称</span> <input type="text" name="com_name" id="com_name" value="" class="yunset_text"></li>
                </ul>
				
                <?php }?>

                <div class="yunset_identity_box">
                    <div class="yunset_identity">
                        <div align="center" class="yunset_identity_pic_img" id="previewshow" style="display: none;">
                            <img src="" id="previewimg" />
                        </div>
                        <div class="yunset_identity_pic">
                            <i class="yunset_identity_pic_tj"></i>
                            <input type="file" name="pic" id="pic" onchange="previewImage(this,'preview')" accept="image/*" class="yunset_identity_pic_file">
                            <input type='hidden' name='preview' value='' id='preview'>
                        </div>

                        <div class="yunset_identity_tip">上传图片</div>
                        <div class="yunset_identity_tip_c">（ 文字清晰，四角齐全 )</div>

                    </div>

                </div>
                <div class="yunset_identity_msg"><i class="yunset_identity_msg_icon"></i>格式为 <?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
不得超过<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
M</div>

                <div class="yunset_bth_box">
					<input type="hidden" id="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
					<input type="hidden" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
                    <input type="button" id="submit" onclick="check_form_post()" value="保存" class="yunset_bth">
                </div>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
