<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 03:04:39
         compiled from "D:\rcw\uploads\app\template\member\user\transfer.htm" */ ?>
<?php /*%%SmartyHeaderCode:1425300705f9db547d00f41-44302281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '735cc43d7fea69fcc188ecf363f0436494702322' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\transfer.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1425300705f9db547d00f41-44302281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9db547d04974_46800556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9db547d04974_46800556')) {function content_5f9db547d04974_46800556($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		   <div class="yun_m_rightbox fltR mt20 re">
    
         <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">账户分离</span> <i class="member_right_h1_icon user_bg"></i></div>
         <div class="resume_box_list">
	<div class="resume_Prompt"><i class="resume_Prompt_icon"></i>提示：账户分离后数据无法恢复，该账号下所有与当前身份相关的数据都将迁入新账户 </div>

<div class="clear"></div>
			    <div class="transfer_stepbox">
        <ul class="transfer_stepbox_list">
        <li class="transfer_stepcur"><span class="transfer_stepbox_n">1</span><em class="transfer_stepbox_name">核对信息</em></li>
        <li class="transfer_stepcur"><span class="transfer_stepbox_line"></span></li>
        <li><span class="transfer_stepbox_n">2</span><em class="transfer_stepbox_name">账号验证 </em></li>
        <li><span class="transfer_stepbox_line"></span></li>
        <li><span class="transfer_stepbox_n"><i class="transfer_stepbox_cgicon"></i></span><em class="transfer_stepbox_name">迁移成功</em></li>
        </ul>
        </div>
        <div class="clear"></div>
        <div class="transfer_textlistbox">
		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <form id="infoform" action="index.php?c=transfer&act=save" name="myform" method="post" target="supportiframe"  autocomplete="off"  class="layui-form" onsubmit="return checkform();">
		<div class="transfer_textlist">
		<span class="transfer_textlist_n"><font color="#f00">*</font>  解绑类型：</span>
		<div class="transfer_textxz">
		<input   name="bdtype[]"  value="moblie"  type="checkbox" title="解绑手机" data-tag="解绑手机" class="changewelfare" >
		<input   name="bdtype[]"  value="email"  type="checkbox" title="解绑邮箱" data-tag="解绑邮箱" class="changewelfare" >
		<input   name="bdtype[]"  value="wxid"  type="checkbox" title="解绑微信" data-tag="解绑微信" class="changewelfare" >
		<input   name="bdtype[]"  value="qqid"  type="checkbox" title="解绑QQ" data-tag="解绑QQ" class="changewelfare" >
		<input   name="bdtype[]"  value="sinaid"  type="checkbox" title="解绑微博" data-tag="解绑微博" class="changewelfare" >
		</div>
		</div>
		<div class="transfer_textlist"><span class="transfer_textlist_n"><font color="#f00">*</font>  当前账号密码：</span><input type="password" name="oldpass" value="" class="transfer_text" placeholder="请输入当前账户密码"></div>

          <div class="transfer_textlist"><span class="transfer_textlist_n"><font color="#f00">*</font> 新账户用户名：</span><input type="text"  name="username" value="" class="transfer_text" placeholder="请设置新账户用户名"></div>

           <div class="transfer_textlist"><span class="transfer_textlist_n"><font color="#f00">*</font>新账户密码：</span><input type="password" name="password" value="" class="transfer_text" placeholder="请设置新账户密码"></div>

            <div class="transfer_textlist"> <div class="transfer_tip">数据迁移后，可登录新账户，绑定手机、微信等</div>
				<input type="submit" name="submit" value="确认分离" class="transfer_bth">
            </div>

			</form>
   </div>
			<div class="clear"></div>
			
				</div>
			</div>
		</div>

	

 <?php echo '<script'; ?>
>
 
 layui.use(['form','layer'], function(){
	    var $ = layui.$,
			form = layui.form,
			layer = layui.layer;
  	});

	function checkform(){
				

		var oldpass = $("input[name='oldpass']").val();
		var username = $("input[name='username']").val();
		var password = $("input[name='password']").val();

		if(oldpass == '') {
			layer.msg('请输入当前账户密码!', 2, 8);return false;

		}
		if(username == '') {
			layer.msg('请输入用户名！', 2, 8);return false;
		}else if(username.length<2||username.length>16){
			layer.msg('请输入2至16位不包含特殊字符的用户名！', 2, 8);return false;
			
		}
		if(password == '') {
			layer.msg('请输入6至20位新密码!', 2, 8);return false;

		}else if(password.length<6 || password.length>20 ){
			
			  layer.msg('请输入6至20位新密码!', 2, 8);return false;
		}
		layer.msg('数据迁移中，请稍候....', {
		  icon: 16
		  ,shade: 0.5,
		  time: 20000
		});
		return true;
	}
 <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
