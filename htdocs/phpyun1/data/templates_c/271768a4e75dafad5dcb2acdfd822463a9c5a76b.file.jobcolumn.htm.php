<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 09:06:20
         compiled from "D:\rcw\uploads\app\template\wap\member\com\jobcolumn.htm" */ ?>
<?php /*%%SmartyHeaderCode:3700638545fb7168c9bdb76-41762551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '271768a4e75dafad5dcb2acdfd822463a9c5a76b' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\com\\jobcolumn.htm',
      1 => 1576479788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3700638545fb7168c9bdb76-41762551',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb7168c9c16e8_79666863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb7168c9c16e8_79666863')) {function content_5fb7168c9c16e8_79666863($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<ul class="yunset ">
	<li><a href="index.php?c=job">全职管理<span class="yunset_tip">发布职位</span></a></li>
	<li><a href="index.php?c=part">兼职管理<span class="yunset_tip">发布兼职</span></a></li>
</ul>


<ul class="yunset mt15">
	<li><a href="index.php?c=zhaopinhui">招聘会记录</a></li>
	<li><a href="index.php?c=special">专题招聘</a></li>
</ul>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
