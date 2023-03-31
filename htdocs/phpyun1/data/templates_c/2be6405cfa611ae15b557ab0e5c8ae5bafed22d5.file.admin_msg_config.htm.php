<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 02:57:08
         compiled from "D:\rcw\uploads\app\template\admin\admin_msg_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:20101680665fa59c849f5aa1-89714063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2be6405cfa611ae15b557ab0e5c8ae5bafed22d5' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_msg_config.htm',
      1 => 1576479745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20101680665fa59c849f5aa1-89714063',
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
  'unifunc' => 'content_5fa59c84a06c39_86718581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59c84a06c39_86718581')) {function content_5fa59c84a06c39_86718581($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="Pragma" content="no-cache" /> 
<meta http-equiv="Cache-Control" content="no-cache" /> 
<meta http-equiv="Expires" content="0" />
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
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">请先注册帐户 短信内容支持长短信，最多500个字，65个字按一条短信计费。</div>
</div>
</div>
<div class="clear"></div>
<div style="height:10px;"></div>

<div class="main_tag">
<div class="tag_box">
 <div>
    <form action="" method="post" class="layui-form">
    <table width="100%" class="table_form" >
         <tr>
                 <th width="200" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
          <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
         </tr>
		<tr class="admin_table_trbg">
            <th width="200">是否开启：</th>
            <td> 
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input id="sy_msg_isopen_1" type="radio" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']=='1') {?>checked=""<?php }?> value="1" name="sy_msg_isopen" title="开启" >
                   <input id="sy_msg_isopen_2" type="radio" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen']!='1') {?>checked=""<?php }?> value="2" name="sy_msg_isopen" title="关闭" >
                 </div>
               </div>
            </div>
			</td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="200">帐户：</th>
            <td><input class="input-text tips_class" type="text" name="sy_msguser" id="sy_msguser" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_msguser'];?>
" size="30" maxlength="255" />  </td>
        </tr>
 		<tr>
            <th width="200">密码：</th>
            <td><input class="input-text tips_class" type="password" name="sy_msgpw" id="sy_msgpw" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_msgpw'];?>
" size="30" maxlength="255"/>  
        </tr>
        <tr class="admin_table_trbg">
            <th width="200">KEY：</th>
            <td><input class="input-text tips_class" type="text" name="sy_msgkey" id="sy_msgkey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_msgkey'];?>
" size="50" maxlength="255"/>    
        </tr>
        <tr>
            <th width="200">单次号码量：</th>
            <td><input class="input-text input_text_rp" type="text" name="sy_msgsendnum" id="sy_msgsendnum" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_msgsendnum'];?>
" size="30" maxlength="255"/>条    <span class="admin_web_tip">最小数为1。</span></td>
        </tr> 
 		<tr  class="admin_table_trbg">
            <th width="200">同一IP一天发送短信：</th>
            <td><input class="input-text  input_text_rp" type="text" name="ip_msgnum" id="ip_msgnum" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['ip_msgnum'];?>
" size="30" maxlength="255"/>条</td>
        </tr>
 		<tr>
            <th width="160">同一手机号一天发送短信：</th>
            <td><input class="input-text input_text_rp" type="text" name="moblie_msgnum" id="moblie_msgnum" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['moblie_msgnum'];?>
" size="30" maxlength="255"/>条</td>
        </tr>
		<tr>
            <th width="160">同一手机号认证类短信发送频率：</th>
            <td><input class="input-text input_text_rp" type="text" name="cert_msgtime" id="cert_msgtime" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['cert_msgtime'];?>
" size="30" maxlength="255"/>分钟</td>
        </tr>
		 <tr>
            <th width="160">剩余短信数量：</th>
            <td><input class="input-text input_text_rp" type="text" name="rest_msgnum" id="rest_msgnum" value="0" disabled="disabled"/>条</td>
        </tr>
		 <tr>
            <th width="160">天眼查数量：</th>
            <td><input class="input-text input_text_rp" type="text" name="rest_businessnum" id="rest_businessnum" value="0" disabled="disabled"/>条</td>
        </tr>
         <tr  class="admin_table_trbg">
            <th width="200">购买短信：</th>
            <td><div class="yun_admin_divh"><a href="http://msg.phpyun.com/" target="_blank" style=" color:#CC3300; text-decoration:underline; "> 购买地址</a></div></td>
         </tr>
         
         <tr>
        	<th width="200" bgcolor="#f0f6fb" colspan=2><span class="admin_bold">短信验证码</span></th>
          </tr>
          <tr  class="admin_table_trbg">
            <th width="200">短信验证码时效：</th>
           	<td><input class="input-text input_text_rp" type="text" name="moblie_codetime" id="moblie_codetime" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['moblie_codetime'];?>
" size="30" maxlength="60"/>分钟 <span class="admin_web_tip">短信时效问题，建议大于两分钟。</span></td>
         </tr>
  		 <tr>
            <td colspan="2" align="center"><input class="layui-btn layui-btn-normal" id="config" type="button" name="msgconfig" value="提交" />&nbsp;&nbsp;<input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
        </tr>
        
    </table>
    <input type="hidden" id="pytoken" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    </form>

</div>

</div>
</div>
<?php echo '<script'; ?>
> 
layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;
});

$(function(){
	$("#config").click(function(){
	
		var msgtime = $("#moblie_codetime").val();
		
		if(parseInt(msgtime) < 2){
			
			parent.layer.msg('短信验证时效因大于两分钟！',2,8); return false;
			
		}else{
			
			loadlayer();
			
			$.post("index.php?m=msgconfig&c=save",{
				config : $("#config").val(),
				sy_msguser : $("#sy_msguser").val(),
				sy_msg_isopen : $("input[name=sy_msg_isopen]:checked").val(), 
				sy_msgkey :$("#sy_msgkey").val(),
				pytoken : $("#pytoken").val(),
				sy_msgpw : $("#sy_msgpw").val(),
				sy_msgsendnum : $("#sy_msgsendnum").val(),
				ip_msgnum : $("#ip_msgnum").val(),
				moblie_msgnum : $("#moblie_msgnum").val(),
				cert_msgtime : $("#cert_msgtime").val(),
				moblie_codetime : $("#moblie_codetime").val(),
				integral_msg_proportion : $("#integral_msg_proportion").val()
			},function(data,textStatus){
				parent.layer.closeAll('loading');
				config_msg(data);
			});
			
		}
	});
	
	$.post("index.php?m=msgconfig&c=get_restnum",{pytoken : $("#pytoken").val(),msguser : $("#sy_msguser").val()},function(data){
		data = eval('('+data+')');
	    if(data){
			if(data.msgnum){
				$("#rest_msgnum").val(data.msgnum);
			}else{
				$("#rest_msgnum").val(0);
			}
			$("#rest_businessnum").val(data.businessnum);
	    }
	});
})
<?php echo '</script'; ?>
>
</div>
</body>
</html><?php }} ?>
