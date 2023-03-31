<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:10:34
         compiled from "D:\rcw\uploads\app\template\wap\member\header.htm" */ ?>
<?php /*%%SmartyHeaderCode:11183653805fa59faa1ee569-66627100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad31eac1dd040219355cae7c9ad1b34b399addd6' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\header.htm',
      1 => 1576479742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11183653805fa59faa1ee569-66627100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'config_wapdomain' => 0,
    'wap_style' => 0,
    'tplmoblie' => 0,
    'expect' => 0,
    'backurl' => 0,
    'headertitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59faa202489_92690019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59faa202489_92690019')) {function content_5fa59faa202489_92690019($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
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
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/yun_wap_member.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            //选择快捷输入
            mui('.mui-popover').on('tap', 'li', function(e) {
                document.getElementById("name").value = document.getElementById("name").value + this.children[0].innerHTML;
                mui('.mui-popover').popover('toggle')
            })
			var pricename = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
';

            $(document).ready(function(){
                var isskip = document.getElementById('isskip');
                if(isskip){
                    isskip.addEventListener('tap', function(event) {
                        
                        var btnArray =['继续完善','跳过'];
                        mui.confirm('您的简历还没有全部完善，是否确认跳过？', '', btnArray, function(e) {
                            if(e.index==1){
                                location.href = wapurl + 'member/index.php?c=rcomplete&eid='+'<?php echo $_GET['eid'];?>
';
                            }
                        })
                    })
                }
            });
        <?php echo '</script'; ?>
>
    </head>

    <body>
        <!-- Content area -->
        <div class="body_wap">

            <header class="header_h">

                <div class="header_fixed">
                    <div class="header">

                        <div class="userheader_bg <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>">
                            <?php if ($_GET['c']=='resume'&&$_GET['fr']=='1'&&$_smarty_tpl->tpl_vars['expect']->value['integrity']<100) {?>
                            <a  id="isskip" class="userheader_return" href="javascript:void(0)" ></a>
                            <?php } else { ?>
                            <a  class="userheader_return <?php if (!$_smarty_tpl->tpl_vars['backurl']->value) {?>mui-action-back<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:history.back()<?php }?>"></a>
                            <?php }?>
                            <div class="userheader_tit"><?php echo $_smarty_tpl->tpl_vars['headertitle']->value;?>
</div>
                            <?php if ($_GET['c']=='resume'&&$_smarty_tpl->tpl_vars['expect']->value&&$_GET['fr']!='1') {?>
                              <span class="yun_usermember_resume_setjl"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['expect']->value['id']),$_smarty_tpl);?>
" class="" style="color:#fff">预览简历</a></span>
                           	
                            <?php }?>
                        </div>

                    </div>
                </div>
            </header>
        <?php }} ?>
