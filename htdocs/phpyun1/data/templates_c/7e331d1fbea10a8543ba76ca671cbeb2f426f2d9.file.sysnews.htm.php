<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-08 03:50:51
         compiled from "D:\rcw\uploads\app\template\wap\member\com\sysnews.htm" */ ?>
<?php /*%%SmartyHeaderCode:7254104215fa6fa9bd989a4-89814618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e331d1fbea10a8543ba76ca671cbeb2f426f2d9' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\com\\sysnews.htm',
      1 => 1576560625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7254104215fa6fa9bd989a4-89814618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userid_jobnum' => 0,
    'sxnum' => 0,
    'sxrows' => 0,
    'jobnum' => 0,
    'jobrows' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa6fa9bda7919_08792215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa6fa9bda7919_08792215')) {function content_5fa6fa9bda7919_08792215($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="app_news">
	<div class="app_news_nav"><a href="index.php?c=hr" class="app_news_nav_a"><i class="app_news_nav_icon app_news_nav_icon_td"></i>收到简历<?php if ($_smarty_tpl->tpl_vars['userid_jobnum']->value) {?><i class="synews_box_tz"><?php echo $_smarty_tpl->tpl_vars['userid_jobnum']->value;?>
</i><?php }?></a></div>   
	<div class="app_news_nav"><a href="index.php?c=look_job" class="app_news_nav_a"><i class="app_news_nav_icon app_news_nav_icon_msg"></i>谁看过我</a></div>      
	<div class="app_news_nav"><a href="index.php?c=attention_me" class="app_news_nav_a"><i class="app_news_nav_icon app_news_nav_icon_xq"></i>对我感兴趣</a></div>   
</div>

<div class="app_news_tit">最近沟通</div>



<div class="synews_box ">
	<?php if ($_smarty_tpl->tpl_vars['sxnum']->value) {?>
		<a href="index.php?c=sxnews">
			<i class="synews_box_icon synews_box_icon_sx"></i>
			<div class="synews_box_h1">系统消息</div>
			<div class="synews_box_p"><?php echo $_smarty_tpl->tpl_vars['sxrows']->value['content'];?>
</div>
			<span class="synews_box_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sxrows']->value['ctime'],"%Y-%m-%d %H:%M");?>
</span>
			<i class="synews_box_n"><?php echo $_smarty_tpl->tpl_vars['sxnum']->value;?>
</i>
		</a>
	<?php } else { ?>
		<a href="index.php?c=sxnews">
			<i class="synews_box_icon synews_box_icon_sx"></i>
			<div class="synews_box_h1">系统消息</div>
			<div class="synews_box_p">暂无新的通知~</div>
		</a>
	<?php }?>
</div>

<div class="synews_box ">
	<?php if ($_smarty_tpl->tpl_vars['jobnum']->value) {?>
		<a href="index.php?c=msg">
			<i class="synews_box_icon synews_box_icon_pl"></i>
			<div class="synews_box_h1">求职者咨询</div>
			<div class="synews_box_p">用户 <?php echo $_smarty_tpl->tpl_vars['jobrows']->value['username'];?>
 咨询了 <?php echo $_smarty_tpl->tpl_vars['jobrows']->value['job_name'];?>
 职位！</div>
			<span class="synews_box_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobrows']->value['datetime'],'%Y-%m-%d %H:%M');?>
</span>
			<i class="synews_box_n"><?php echo $_smarty_tpl->tpl_vars['jobnum']->value;?>
</i>
		</a>
	<?php } else { ?>
		<a href="index.php?c=msg">
			<i class="synews_box_icon synews_box_icon_pl"></i>
			<div class="synews_box_h1">求职者咨询</div>
			<div class="synews_box_p">暂无求职者咨询 ~</div>
		</a>
	<?php }?>
</div>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
