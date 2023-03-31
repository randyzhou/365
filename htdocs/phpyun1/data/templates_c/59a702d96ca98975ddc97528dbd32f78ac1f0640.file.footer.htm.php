<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:03:34
         compiled from "D:\rcw\uploads\app\template\member\com\footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:20459126155f9d98e6bbee49-23796037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59a702d96ca98975ddc97528dbd32f78ac1f0640' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\footer.htm',
      1 => 1578911159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20459126155f9d98e6bbee49-23796037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d98e6bc3097_00622634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d98e6bc3097_00622634')) {function content_5f9d98e6bc3097_00622634($_smarty_tpl) {?>

<!-- layui 当前显示弹出框index-->
<input type='hidden' id="layindex" value="">

<div class="clear"></div>

<div class=footer>
    <div class=w900>
        <div class=footernav>
            <div class="footer_bot_p"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];
echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
 </div>
            <div class="footer_bot_p">地址:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webadd'];?>
 电话(Tel):<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
 EMAIL:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webemail'];?>
</div>
            <div class="footer_bot_p">Powered by<a target="_blank" href="http://www.phpyun.com">PHPYun.</a></div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div id="uclogin" style="display:none"></div>

<div class="clear"></div>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/default/public_search/public_tips.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/member/public/changeutype.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
</body>

</html><?php }} ?>
