<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:10:45
         compiled from "D:\rcw\uploads\app\template\wap\member\user\sysnews.htm" */ ?>
<?php /*%%SmartyHeaderCode:14779534925fa59fb51f2ff0-08078616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '480ea3bfb541bc7ed73e0aa855236614ea188227' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\sysnews.htm',
      1 => 1576492524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14779534925fa59fb51f2ff0-08078616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wkyqnum' => 0,
    'sxrowsnum' => 0,
    'sxrows' => 0,
    'commsgnum' => 0,
    'commsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59fb51ffc11_75952512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59fb51ffc11_75952512')) {function content_5fa59fb51ffc11_75952512($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="app_news">
<div class="app_news_nav"><a href="index.php?c=sq&back=1" class="app_news_nav_a"><i class="app_news_nav_icon app_news_nav_icon_td"></i>投递进展</a></div>   
<div class="app_news_nav"><a href="index.php?c=invite" class="app_news_nav_a"><i class="app_news_nav_icon app_news_nav_icon_tz"></i>面试通知<?php if ($_smarty_tpl->tpl_vars['wkyqnum']->value) {?><i class="synews_box_tz"><?php echo $_smarty_tpl->tpl_vars['wkyqnum']->value;?>
</i><?php }?></a></div>      
<div class="app_news_nav"><a href="index.php?c=look" class="app_news_nav_a"><i class="app_news_nav_icon app_news_nav_icon_xq"></i>对我感兴趣</a></div>   
</div>


<div class="synews_box ">
    <?php if ($_smarty_tpl->tpl_vars['sxrowsnum']->value>0) {?>
    <a href="index.php?c=sxnews">
        <i class="synews_box_icon synews_box_icon_sx"></i>
        <div class="synews_box_h1">系统消息</div>
        <div class="synews_box_p"><?php echo $_smarty_tpl->tpl_vars['sxrows']->value['content_n'];?>
</div>
        <span class="synews_box_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sxrows']->value['ctime'],"%Y-%m-%d %H:%M");?>
</span> 
        <i class="synews_box_n"><?php echo $_smarty_tpl->tpl_vars['sxrowsnum']->value;?>
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
    <?php if ($_smarty_tpl->tpl_vars['commsgnum']->value) {?>
    <a href="index.php?c=commsg">
        <i class="synews_box_icon synews_box_icon_pl"></i>
        <div class="synews_box_h1">职位咨询</div>
        <div class="synews_box_p">企业<?php echo $_smarty_tpl->tpl_vars['commsg']->value['com_name'];?>
回复了你的咨询 !</div>
        <span class="synews_box_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commsg']->value['reply_time'],"%Y-%m-%d %H:%M");?>
</span> 
        <i class="synews_box_n"> <?php echo $_smarty_tpl->tpl_vars['commsgnum']->value;?>
</i>
    </a>
    <?php } else { ?>
    <a href="index.php?c=commsg">
        <i class="synews_box_icon synews_box_icon_pl"></i>
        <div class="synews_box_h1">职位咨询</div>
        <div class="synews_box_p">您还没有咨询信息~</div>
    </a>
    <?php }?>
    
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
