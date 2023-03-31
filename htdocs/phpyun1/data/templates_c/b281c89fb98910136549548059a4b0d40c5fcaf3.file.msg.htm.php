<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-09 15:01:15
         compiled from "D:\rcw\uploads\app\template\wap\msg.htm" */ ?>
<?php /*%%SmartyHeaderCode:2675719465fa8e93b07cef5-68945171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b281c89fb98910136549548059a4b0d40c5fcaf3' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\msg.htm',
      1 => 1576479791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2675719465fa8e93b07cef5-68945171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'config' => 0,
    'tm' => 0,
    'msg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa8e93b08b3e4_67863220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa8e93b08b3e4_67863220')) {function content_5fa8e93b08b3e4_67863220($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
,wap" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <meta name="renderer" content="webkit" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/job.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
    </head>

    <body onLoad="TimeOut('<?php echo $_smarty_tpl->tpl_vars['tm']->value;?>
')">

        
        <div class="msg_nogood"><i class="msg_nogood_icon"></i><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
        
        <div class="msg_nogood_ts"><span id="times"><?php echo $_smarty_tpl->tpl_vars['tm']->value;?>
</span> 秒后自动跳转，如果没有跳转，请点击立即跳转</div>
          <div class="msg_nogood_cz"> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="msg_nogood_cz_bth">立即跳转</a></div>
     
 
 
 <style>.header_bg{ background:#fff}</style>
 
    </body>
    
    <?php echo '<script'; ?>
>
        function TimeOut(i) {
            if(i > 1) {
                i = i - 1;
                $("#times").html(i);
                setTimeout("TimeOut(" + i + ");", 1000);
            } else {
                window.location.href = '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
            }
        }
    <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
