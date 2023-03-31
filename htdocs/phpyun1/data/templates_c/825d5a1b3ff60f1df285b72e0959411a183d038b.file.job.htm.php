<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 12:52:48
         compiled from "D:\rcw\uploads\app\template\wap\member\user\job.htm" */ ?>
<?php /*%%SmartyHeaderCode:19005688315fb74ba096bfe2-97181688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '825d5a1b3ff60f1df285b72e0959411a183d038b' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\job.htm',
      1 => 1576583345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19005688315fb74ba096bfe2-97181688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wkyqnum' => 0,
    'invitenum' => 0,
    'sqnum' => 0,
    'collectnum' => 0,
    'atnnum' => 0,
    'lookjobnum' => 0,
    'looknum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb74ba097a801_84904603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb74ba097a801_84904603')) {function content_5fb74ba097a801_84904603($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

<ul class="yunset mt15">
	<li><a href="index.php?c=invite">面试通知<span class="yunset_list_newmsg"><?php if ($_smarty_tpl->tpl_vars['wkyqnum']->value) {
echo $_smarty_tpl->tpl_vars['wkyqnum']->value;
}?></span><span class="yun_mnav_tip">有<?php echo $_smarty_tpl->tpl_vars['invitenum']->value;?>
条</span></a></li>
	<li><a href="index.php?c=sq">申请的职位<span class="yun_mnav_tip">有<?php echo $_smarty_tpl->tpl_vars['sqnum']->value;?>
条</span></a></li>
	<li><a href="index.php?c=collect">收藏的职位<span class="yun_mnav_tip">有<?php echo $_smarty_tpl->tpl_vars['collectnum']->value;?>
条</span></a></li>
    <li><a href="index.php?c=atncom">我的关注<span class="yun_mnav_tip">有<?php echo $_smarty_tpl->tpl_vars['atnnum']->value;?>
条</span></a></li>
    </ul>
    <ul class="yunset mt15">
	<li><a href="index.php?c=look_job">职位浏览记录<span class="yun_mnav_tip">有<?php echo $_smarty_tpl->tpl_vars['lookjobnum']->value;?>
条</span></a></li>
	<li><a href="index.php?c=look">谁看过我的简历<span class="yun_mnav_tip">有<?php echo $_smarty_tpl->tpl_vars['looknum']->value;?>
条</span></a></li>
</ul>
<ul class="yunset mt15">
    <li>
        <a href="index.php?c=partapply">兼职管理</a>
    </li>
    
</ul>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
