<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 02:44:11
         compiled from "D:\rcw\uploads\app\template\admin\admin_comlogo.htm" */ ?>
<?php /*%%SmartyHeaderCode:1484399845fa5997ba157a3-34889518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85cfb6246fab041fce25bf0bb11091f657b29ed8' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_comlogo.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1484399845fa5997ba157a3-34889518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5997ba28922_38517766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5997ba28922_38517766')) {function content_5fa5997ba28922_38517766($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="tabs_info">
	<ul>
		<li><a href="index.php?m=admin_comset">企业设置</a></li>
		<li class="curr"><a href="index.php?m=admin_comset&c=logo">头像设置</a></li> 
		<li><a href="index.php?m=admin_comset&c=set"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</a></li> 
		<li><a href="index.php?m=admin_comset&c=comspend">消费设置</a></li>  
		<li><a href="index.php?m=admin_comset&c=rating">套餐设置</a></li>
	
	</ul>
</div>
    
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站企业头像设置管理</div>
</div>
</div>
<div class="clear"></div>
<div class="main_tag mt10">
<div class="tag_box">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form class="layui-form" action="index.php?m=admin_comset&c=logo" method="post" enctype= "multipart/form-data" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
       <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
          <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
    </tr> 
	 <tr class="admin_table_trbg">
		<th width="150">默认企业Logo：</th>
		<td>
		<button type="button" class="yun_bth_pic adminupload" lay-data="{path: 'logo',name: 'sy_unit_icon',imgid: 'imgicon'}">上传图片</button>
		<input type="hidden" id="layupload_type" value="2"/>
		<input type="hidden" name="sy_unit_icon" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
"/>
        <img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
" width="60" height="60" <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_unit_icon']) {?>class="none"<?php }?>>
		</td>
	</tr> 

	<tr class="admin_table_trbg">
		<th width="150">默认顾问头像：</th>
		<td>
		<button type="button" class="yun_bth_pic adminupload" lay-data="{path: 'logo',name: 'sy_guwen',imgid: 'imggw'}">上传图片</button>
		<input type="hidden" name="sy_guwen" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_guwen'];?>
"/>
        <img id="imggw" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_guwen'];?>
" width="64" height="64" <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_guwen']) {?>class="none"<?php }?>>
		</td>
	</tr>	
    <tr class="admin_table_trbg">
		<th width="150">默认企业横幅：</th>
		<td>
		<button type="button" class="yun_bth_pic adminupload" lay-data="{path: 'logo',name: 'sy_banner',imgid: 'imgbanner'}">上传图片</button>
		<input type="hidden" name="sy_banner" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_banner'];?>
"/>
        <img id="imgbanner" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_banner'];?>
" width="150" height="60" <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_banner']) {?>class="none"<?php }?>>
		</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="150">未上传二维码提示图：</th>
		<td>
		<button type="button" class="yun_bth_pic adminupload" lay-data="{path: 'logo',name: 'sy_member_ewm',imgid: 'imgewm'}">上传图片</button>
		<input type="hidden" name="sy_member_ewm" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_ewm'];?>
"/>
        <img id="imgewm" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_ewm'];?>
" width="60" height="60" <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_member_ewm']) {?>class="none"<?php }?>>
		</td>
	</tr>
	<tr>
		 <th style="border-bottom:none;">&nbsp;</th>
          <td align="left" style="border-bottom:none;"> 
		<input class="layui-btn layui-btn-normal"  type="submit" name="submit" value="提交" />&nbsp;&nbsp;
		<input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
	</tr>
    </table>
	<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    </form>
</div>

</div>
</div>
<?php echo '<script'; ?>
>var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 
</body>
</html><?php }} ?>
