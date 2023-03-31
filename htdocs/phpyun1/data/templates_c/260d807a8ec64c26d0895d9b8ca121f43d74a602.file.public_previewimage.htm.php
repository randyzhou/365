<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:11:11
         compiled from "D:\rcw\uploads\app\template\wap\public_previewimage.htm" */ ?>
<?php /*%%SmartyHeaderCode:6582797865fa59fcf55c935-28420801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '260d807a8ec64c26d0895d9b8ca121f43d74a602' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\public_previewimage.htm',
      1 => 1576496927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6582797865fa59fcf55c935-28420801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config_wapdomain' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59fcf5637c2_07835179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59fcf5637c2_07835179')) {function content_5fa59fcf5637c2_07835179($_smarty_tpl) {?><?php if ($_GET['c']=='ltresume'||$_GET['c']=='ltjob') {?>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" /> 
<?php }?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.previewimage.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.zoom.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.previewimage.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function() {
        //企业详情页
        $(".muipreview").find('img').each(function() {
            $(this).attr('data-preview-src', '');
            $(this).attr('data-preview-group', '1');
        });
		mui.previewImage();
		
    })
<?php echo '</script'; ?>
><?php }} ?>
