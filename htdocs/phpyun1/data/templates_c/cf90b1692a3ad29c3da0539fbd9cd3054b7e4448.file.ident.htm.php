<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 12:20:36
         compiled from "D:\rcw\uploads\app\template\wap\ident.htm" */ ?>
<?php /*%%SmartyHeaderCode:7655243365fab669430f9a8-87584589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf90b1692a3ad29c3da0539fbd9cd3054b7e4448' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\ident.htm',
      1 => 1576496897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7655243365fab669430f9a8-87584589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'backurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab6694323cb7_57375194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab6694323cb7_57375194')) {function content_5fab6694323cb7_57375194($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<style type="text/css">
	body {
		background: #fff
	}
	.header_h{ display:none;}
	.yun_footer{ display:none;}
</style>
<div class="login_tit">  <a class="hd-lbtn" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:goBack();<?php }?>"><i class="header_top_l"></i></a>恭喜您注册成功
<div class="regok_tit_p">请选择一个身份，激活当前账户！</div>
</div>
<div class="regok_box">	
<ul>
<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','a'=>'ident','usertype'=>1),$_smarty_tpl);?>
"><div class="regok_box_user">我是求职者</div><div class="regok_box_user_p">免费发布简历，海量职位随意挑</div><i class="regok_box_user_icon"></i></a></li>
<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','a'=>'ident','usertype'=>2),$_smarty_tpl);?>
"><div class="regok_box_user">我是招聘者</div><div class="regok_box_user_p">发布招聘信息，收取简历投递</div><i class="regok_box_user_icon regok_box_user_icon_com"></i></a></li>



</ul>

</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
