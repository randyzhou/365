<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-08 03:51:40
         compiled from "D:\rcw\uploads\app\template\wap\member\public\remind.htm" */ ?>
<?php /*%%SmartyHeaderCode:20350308605fa6faccb1ada8-80993919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14ec5343ca4e781b1eacbeb75344ee5996bc8da6' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\public\\remind.htm',
      1 => 1587549599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20350308605fa6faccb1ada8-80993919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'remind' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa6faccb1f394_37367006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa6faccb1f394_37367006')) {function content_5fa6faccb1f394_37367006($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['remind']->value['info']) {?>


<?php echo '<script'; ?>
>
var wapurl  = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/wap';
var url     = '<?php echo $_smarty_tpl->tpl_vars['remind']->value['url'];?>
';
var info    = '<?php echo $_smarty_tpl->tpl_vars['remind']->value['info'];?>
';
var btninfo = '<?php echo $_smarty_tpl->tpl_vars['remind']->value['btn'];?>
';
var userchange='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_user_change'];?>
';
if(userchange==1){
	layer.open({
	  
	 
	  title: [
		  '温馨提示',
		  'background-color: #FF4351; color:#fff;'
		],
	  border		: 	[10, 0.3, '#000', true],
	  content: info,
	  btn: [btninfo,'切换身份'],
	  shadeClose: false,
	  yes: function(){

			location.href=url;
	  },
	  no:function(){
		
		changeutype('noclose');
	  
	  }
	});
}else{
	layer.open({
	  
	 
	  title: [
		  '温馨提示',
		  'background-color: #FF4351; color:#fff;'
		],
	  border		: 	[10, 0.3, '#000', true],
	  content: info,
	  btn: [btninfo],
	  shadeClose: false,
	  yes: function(){

			location.href=url;
	  },
	  no:function(){
		
		changeutype('noclose');
	  
	  }
	});
}
<?php echo '</script'; ?>
>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/public/changeutype.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
