<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 09:13:51
         compiled from "D:\rcw\uploads\app\template\wap\member\com\job_tg.htm" */ ?>
<?php /*%%SmartyHeaderCode:14860491565fb7184f8dd8f6-68904041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6621aefc2dc9b8ceca48cabc81b1f7225456201b' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\com\\job_tg.htm',
      1 => 1576583345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14860491565fb7184f8dd8f6-68904041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'job' => 0,
    'statis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb7184f8ef288_92935688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb7184f8ef288_92935688')) {function content_5fb7184f8ef288_92935688($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />

<div class="jobadd_ok">职位发布成功</div>
<div class="jobadd_ok_bth">
	<a href="index.php?c=job" class="jobadd_ok_bth_a jobadd_ok_bth_a_gl">管理信息</a>
	<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'comapply','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" class="jobadd_ok_bth_a jobadd_ok_bth_a_look">查看信息</a>
	<a href="javascript:void(0)" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['statis']->value['addjobnum'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','job','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="jobadd_ok_bth_a jobadd_ok_bth_a_zf">再发一条</a>
	<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'share','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" class="jobadd_ok_bth_a jobadd_ok_bth_a_fx">分享职位</a>
</div>

<div class="jobadd_ok_settip">为了吸引更多求职者的关注，建议您设置</div>
<ul class="jobadd_ok_setlist">
	 
	<li>
		<a href="javascript:void(0)" onclick="forserver('3')"><i class="jobadd_ok_setlist_icon jobadd_ok_setlist_icontj"></i><span class="jobadd_ok_setlist_name">职位推荐</span><em class="jobadd_ok_setlist_tip">迅速提高招聘效果</em></a>
	</li>
	<li>
		<a href="javascript:void(0)" onclick="forserver('2')"><i class="jobadd_ok_setlist_icon jobadd_ok_setlist_iconzd"></i><span class="jobadd_ok_setlist_name">职位置顶</span><em class="jobadd_ok_setlist_tip">立即提升职位排名</em></a>
	</li>
	<li>
		<a href="javascript:void(0)" onclick="forserver('4')"><i class="jobadd_ok_setlist_icon"></i><span class="jobadd_ok_setlist_name">职位紧急</span><em class="jobadd_ok_setlist_tip">强烈提升职位曝光度</em></a>
	</li>
	 
	<li>
		<a href="javascript:void(0)" onclick="forserver('1')"><i class="jobadd_ok_setlist_icon jobadd_ok_setlist_icon_sx"></i><span class="jobadd_ok_setlist_name">自动刷新</span><em class="jobadd_ok_setlist_tip">让职位管理轻松更高效</em></a>
	</li>
 
</ul>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/com/job_tg_tck.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
