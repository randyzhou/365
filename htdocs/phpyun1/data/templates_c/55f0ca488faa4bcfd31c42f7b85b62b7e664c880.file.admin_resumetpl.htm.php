<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 17:11:03
         compiled from "D:\rcw\uploads\app\template\admin\admin_resumetpl.htm" */ ?>
<?php /*%%SmartyHeaderCode:927307485f9d2a27c05a89-06052983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f0ca488faa4bcfd31c42f7b85b62b7e664c880' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_resumetpl.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '927307485f9d2a27c05a89-06052983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'list' => 0,
    'v' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d2a27c17275_89305034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d2a27c17275_89305034')) {function content_5f9d2a27c17275_89305034($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>  
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">可以为个人用户提供个性化简历模板,管理员把个人简历模板后上传到个人简历模板目录即可！可以设置模板价格，提供个人用户自由选择！</div>
</div>
</div>
<div class="clear"></div>
<div class="admin_new_search_box" style="padding-bottom:10px;">
<div class="admin_new_select">
<a href="index.php?m=admin_tpl&c=resumetpladd" class="admin_new_cz_tj" style="margin-left:0px;">+ 添加模板</a>
</div></div>
<div class="clear"></div>

<div class="table-list">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div class="" style="float: left; width: 260px;border:1px solid #ddd; text-align: center; padding: 15px; line-height: 180%; margin-top:10px; margin-right:5px; background:#fff">
<div style="width:100%;height:330px;">
	  <img border="1" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="238" height="315">
	 </div>
	 <strong><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</strong>
	 <br>
	风格目录名称：<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>

      <br>
      状态：<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>正在使用<?php } else { ?>已停止<?php }?>
      <br>
      <input name="" value="修改" type="submit" class="admin_button" onClick="location.href='index.php?m=admin_tpl&c=resumetpladd&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'" >
      <input name="" value="删除" type="submit" class="admin_button" onclick="layer_del('确定要删除？', 'index.php?m=admin_tpl&c=resumetpldel&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" >
	 </div>
     <?php } ?>
</div>
</div>
   <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</body>
</html><?php }} ?>
