<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-08 03:50:48
         compiled from "D:\rcw\uploads\app\template\wap\member\cheader.htm" */ ?>
<?php /*%%SmartyHeaderCode:19355702755fa6fa980c4972-96666603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1426831d774bd5bd610c4491f81882d96df64bd3' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\cheader.htm',
      1 => 1577671261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19355702755fa6fa980c4972-96666603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config_wapdomain' => 0,
    'config' => 0,
    'wap_style' => 0,
    'tplmoblie' => 0,
    'backurl' => 0,
    'header_title' => 0,
    'statis' => 0,
    'guweninfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa6fa980ddf68_78023051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa6fa980ddf68_78023051')) {function content_5fa6fa980ddf68_78023051($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta http-equiv="Cache-Control" content="no-cache" />
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
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
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
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>var wapurl = '<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
'<?php echo '</script'; ?>
>
		<title><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
 - 手机人才网</title>
	</head>

	<body>

		<header>
			<div class="comheader <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>">
				
				<a class="comheader_return <?php if (!$_smarty_tpl->tpl_vars['backurl']->value) {?>mui-action-back<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:history.back()<?php }?>"></a>
				
				<div class="comheader_tit"><?php echo $_smarty_tpl->tpl_vars['header_title']->value;?>
</div>
               	
               	<!-- 发布职位--> 
				<?php if ($_GET['c']=='job'||$_GET['c']=='jobcolumn') {?> 
				<div class="header_fa_add">
					<a href="javascript:void(0);" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['statis']->value['addjobnum'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','job','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="header_fa_add_p">发布职位</a>
				</div>
				<?php }?>
				
               	<!-- 发布兼职-->
                <?php if ($_GET['c']=='part') {?> 
				<div class="header_fa_add">
					<a href="javascript:void(0)" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['statis']->value['addjobnum'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','part','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="header_fa_add_p">发布兼职</a>
				</div>
				<?php }?>
				
               
				
			</div>
		</header>

		<div style="display:none" id="gwshow">
		
			<div class="wap_gw_box" style="top: 150px;">
			
				<div class="wap_gw_hi">你好，很高兴为您服务</div>
			
				<div class="wap_gw">
					<div class="wap_gw_pic">
						<img src="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['photo_n'];?>
" style="width: 40px; height: 40px" />
					</div>

					<div class="wap_gw_kf_name">
						<?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['uid']) {
echo $_smarty_tpl->tpl_vars['guweninfo']->value['name'];
} else { ?>网站客服<?php }?>
					</div>
					
					<div class="wap_gw_kf_fw">欢迎随时咨询</div>
				 
				</div>
				<?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['ewm_n']) {?>
			<div class="wap_gw_kf_wxpic"><img src="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['ewm_n'];?>
" style="width: 110px; height: 110px" /></div>
            <div class="wap_gw_kf_wxp">↑ 添加微信 ↑ </div>
			<?php }?>
            <div class="wap_gw_kf_dh"><a  href="tel:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
" class="wap_gw_kf_dh_a">拨打电话</a></div>
            	<?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['id']&&$_smarty_tpl->tpl_vars['guweninfo']->value['qq']) {?> 
				        <div class="wap_gw_kf_qq">	<a target="_blank" href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes&version=1&src_type=web&web_src=http://m.haishiit.com/" class="wap_gw_kf_qq_a">QQ交谈</a></div>
				<?php } else { ?> 
				        <div class="wap_gw_kf_qq">	<a target='_blank' href='mqqwpa://im/chat?chat_type=wpa&uin=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qq'];?>
&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes&version=1&src_type=web&web_src=http://m.haishiit.com/' class="wap_gw_kf_qq_a">QQ交谈</a></div>
				<?php }?>
			</div>
		</div>
		<?php echo '<script'; ?>
>
			function gwshow() {
				var gwshow = $("#gwshow").html();
				layer.open({
					type: 1,
					shadeClose: true,
					content: gwshow                                                                                                                              
				});
			}
			function addjobnum(){
				return mui.toast('发布职位数量不足');
			}
		<?php echo '</script'; ?>
>
<?php }} ?>
