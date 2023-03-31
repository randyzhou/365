<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:14:28
         compiled from "D:\rcw\uploads\app\template\wap\about.htm" */ ?>
<?php /*%%SmartyHeaderCode:1742496175fa5a094d81c11-29435045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ed082dc14d2191a32316812e5e70a91ec682aa' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\about.htm',
      1 => 1578550127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1742496175fa5a094d81c11-29435045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5a094d853d9_78711336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5a094d853d9_78711336')) {function content_5fa5a094d853d9_78711336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="aboyt_cont"><?php echo $_smarty_tpl->tpl_vars['content']->value['content'];?>
</div>
<style>
body{ background:#fff}
.aboyt_cont{ padding:15px; line-height:25px;}
</style>
<?php echo '<script'; ?>
>
function goBack(){
	if (navigator.userAgent.indexOf('Firefox') >= 0 ||
		navigator.userAgent.indexOf('Opera') >= 0 ||
		navigator.userAgent.indexOf('Safari') >= 0 ||
		navigator.userAgent.indexOf('Chrome') >= 0 ||
		navigator.userAgent.indexOf('WebKit') >= 0){

		if(window.history.length > 1){
			window.history.go( -1 );
		}else{
			location.href = wapurl;
		}
	}else{ //未知的浏览器
		window.history.go( -1 );
	}
}
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
