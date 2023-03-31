<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-23 11:04:54
         compiled from "/Applications/XAMPP/365/htdocs/phpyun/app/template/default/verify/verify_js.htm" */ ?>
<?php /*%%SmartyHeaderCode:19965199755fbb26d67e4335-43952393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6313d6cc8712cc5b3d87ff8356b0c8b7a03f1047' => 
    array (
      0 => '/Applications/XAMPP/365/htdocs/phpyun/app/template/default/verify/verify_js.htm',
      1 => 1606096914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19965199755fbb26d67e4335-43952393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fbb26d67fc8b1_79961290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbb26d67fc8b1_79961290')) {function content_5fbb26d67fc8b1_79961290($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/pc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['code_kind']==4) {?>
<?php echo '<script'; ?>
 src="https://cdn.dingxiang-inc.com/ctu-group/captcha-ui/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>var dxappid = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_dxappid'];?>
";<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/dingxiang/pc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['config']->value['code_kind']==5) {?>
<?php echo '<script'; ?>
 src="https://v.vaptcha.com/v3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>var vaptchaid = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_vaptcha_vid'];?>
";<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/vaptcha/pc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php }?><?php }} ?>
