<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 02:58:12
         compiled from "D:\rcw\uploads\app\template\admin\admin_uc.htm" */ ?>
<?php /*%%SmartyHeaderCode:8716820135fa59cc4b80688-42558709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e46cd35a826e4acf286e1b847ff1db1f50980b73' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_uc.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8716820135fa59cc4b80688-42558709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'ucinfo' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59cc4b93f68_55678069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59cc4b93f68_55678069')) {function content_5fa59cc4b93f68_55678069($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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
   <li class="curr"> <a href="index.php?m=admin_uc" class="">整合UCenter</a></li>
      <li class=""><a href="index.php?m=admin_uc&c=pw" class="">整合PHPWIND</a></li>
    </ul>
  </div>
  
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list"> <b>提示：</b>如果整合失败导致后台无法进入或者出现前台用户混乱，请将根目录下/data/plus/config.php 打开找到 sy_uc_type  将ucenter置空,再登录后台关闭UC。相关教程 【<a href='http://www.phpyun.com/bbs/thread-4209-1-1.html' target="_blank">点击查看</a>】</div>
</div>
</div>
<div class="clear"></div>

<?php echo '<script'; ?>
>
function checkucform(){
	if(myform.UC_CONNECT.value=='' || myform.UC_DBHOST.value=='' || myform.UC_DBUSER.value==''|| myform.UC_DBNAME.value==''|| myform.UC_DBCHARSET.value==''|| myform.UC_DBTABLEPRE.value==''|| myform.UC_KEY.value==''|| myform.UC_API.value==''|| myform.UC_APPID.value==''|| myform.UC_APP.value=='')
	{
		layer.msg('请确认信息填写完善！', 2, 8);
		return false;
	}
}
<?php echo '</script'; ?>
>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<div class="tag_box mt10">
<form method="post" action="index.php?m=admin_uc&c=save" name="myform" target="supportiframe" onsubmit="return checkucform();" class="layui-form">
	<table width="100%" class="table_form">
      <tbody>
  <tr class="admin_table_trbg">
    <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>   
  </tr>     </tbody>
         <tr>
            <th width="220">开启：</th>
            <td  >
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input type="radio" name="sy_uc_type" value="uc_center" id="RadioGroup1_12" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_uc_type']=="uc_center") {?>checked<?php }?> title="开启">
                   <input type="radio" name="sy_uc_type" value="" id="RadioGroup1_13" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_uc_type']!="uc_center") {?>checked<?php }?> title="关闭">
                 </div>
               </div>
            </div>
            </td>
        </tr>
            <tr>
            <th width="220">数据库地址 UC_DBHOST：</th>
            <td style="background:#fff;"><input type="text" name="UC_DBHOST" class="input-text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['ucinfo']->value['UC_DBHOST'];?>
"> 
            <span class="admin_web_tip">如：localhost</span></td>
            </tr>
            <tr>
            <th>数据库用户名 UC_DBUSER：</th>
             <td style=" background:#fff;"><input type="text"  name="UC_DBUSER" class="input-text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['ucinfo']->value['UC_DBUSER'];?>
"> <span class="admin_web_tip">ucenter数据库用户名</span></td>
            </tr>
            <tr>
           <th>数据库密码 UC_DBPW：</th>
            <td style=" background:#fff;"><input type="text" name="UC_DBPW" class="input-text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['ucinfo']->value['UC_DBPW'];?>
"> 
            <span class="admin_web_tip">ucenter数据库密码</span></td>
            </tr>
            <tr>
           <th>数据库名称 UC_DBNAME：</th>
             <td style=" background:#fff;"><input type="text" name="UC_DBNAME" class="input-text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['ucinfo']->value['UC_DBNAME'];?>
"> 
             <span class="admin_web_tip">如：ucenter</span></td>
            </tr>
            <tr>
         <th>数据表前缀 UC_DBTABLEPRE：</th>
            <td style=" background:#fff;"><input type="text" name="UC_DBTABLEPRE_NEW" class="input-text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['ucinfo']->value['UC_DBTABLEPRE_NEW'];?>
"> <span class="admin_web_tip">如：pre_ucenter_</span></td>
            </tr>
            <tr>
           <th>通信密钥 UC_KEY：</th>
             <td style=" background:#fff;"><input type="text" name="UC_KEY" class="input-text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['ucinfo']->value['UC_KEY'];?>
"> <span class="admin_web_tip">如：phpyun123456</span></td>
            </tr>
            <tr>
           <th>Ucenter地址 UC_API：</th>
            <td style=" background:#fff;"><input type="text" name="UC_API" class="input-text" size="60" value="<?php echo $_smarty_tpl->tpl_vars['ucinfo']->value['UC_API'];?>
"> <span class="admin_web_tip">如：http://localhost/ucenter</span></td>
            </tr>
            <tr>
         <th>数据库连接编码（utf8）：</th>
             <td style="background:#fff;">
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input type="radio" name="UC_CHARSET" value="utf8" id="RadioGroup1_12" <?php if ($_smarty_tpl->tpl_vars['ucinfo']->value['UC_CHARSET']=="utf8") {?>checked<?php }?> title="utf8">
                   <input type="radio" name="UC_CHARSET" value="gbk" id="RadioGroup1_13" <?php if ($_smarty_tpl->tpl_vars['ucinfo']->value['UC_CHARSET']=="gbk") {?>checked<?php }?> title="gbk">
                 </div>
               </div>
            </div>
            </td>
        </tr>
            <tr>
            <th>应用ID UC_APPID：</th>
             <td style=" background:#fff;"><input type="text" name="UC_APPID" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['ucinfo']->value['UC_APPID'];?>
"> <span class="admin_web_tip">如：7</span></td>
            </tr>
            <tr>
          <th>UC APP UC_APP：</th>
             <td style=" background:#fff;"><input type="text" name="UC_APP" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['ucinfo']->value['UC_APP'];?>
"> <span class="admin_web_tip">如：20</span></td>
            </tr>
			 <tr>
          <th>UC Email：</th>
             <td style=" background:#fff;"><input type="text" name="UC_EMAIL" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['ucinfo']->value['UC_EMAIL'];?>
"> <span class="admin_web_tip">说明：UC强制填写邮箱，注册时未开启邮箱填写的情况下使用当前设置的默认邮箱</span></td>
            </tr>
            <tr>
                <td align="center" colspan="2" style=" background:#fff;">
                 <input class="layui-btn layui-btn-normal" type="submit" name="submit" value="&nbsp;保存&nbsp;"  />  
                </td>
            </tr>
	</table> 
	<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</form>
</div> 
</div> 
<?php echo '<script'; ?>
> 
layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;
});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
