<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:13:41
         compiled from "D:\rcw\uploads\app\template\wap\member\user\transfer.htm" */ ?>
<?php /*%%SmartyHeaderCode:10946258185fa5a06543e885-95930487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6993579fadd32b4908d492fa6e75dc78d33364c2' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\transfer.htm',
      1 => 1576479789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10946258185fa5a06543e885-95930487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5a065445613_45661666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5a065445613_45661666')) {function content_5fa5a065445613_45661666($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<section class="">
<div class="transfer_ts">提示：账户分离后数据无法恢复，该账号下所有与当前身份相关的数据都将迁入新账户
</div>
<div class="transfer_stepbox">
        <ul class="transfer_stepbox_list">
        <li class="transfer_stepcur"><span class="transfer_stepbox_n">1</span><em class="transfer_stepbox_name">核对信息</em><i class="transfer_stepbox_line"></i></li>
     
        <li><span class="transfer_stepbox_n">2</span><em class="transfer_stepbox_name">账号验证 </em><i class="transfer_stepbox_line"></i></li>
       
        <li><span class="transfer_stepbox_n">ok<i class="transfer_stepbox_cgicon"></i></span><em class="transfer_stepbox_name">迁移成功</em></li>
        </ul>
        </div>
<div class="clear"></div>

<div class="transfer_textlistbox">
        
		<div class="transfer_lxbox mt10">
		
		
		<div class="transfer_textxz">
			
			<div class="transfer_lx" data-bd = "moblie"><span>解绑手机<input type='hidden' id='bdmoblie' value=''></span></div>
			<div class="transfer_lx" data-bd = "email"><span>解绑邮箱<input type='hidden' id='bdemail'  value='' ></span></div>
			<div class="transfer_lx" data-bd = "wxid"><span>解绑微信<input type='hidden' id='bdwxid'  value='' ></span></div>
			<div class="transfer_lx" data-bd = "qqid"><span>解绑QQ<input type='hidden' id='bdqqid'  value='' ></span></div>
			<div class="transfer_lx" data-bd = "sinaid"><span>解绑微博<input type='hidden' id='bdsinaid'  value=''></span></div>
		</div>
		</div>
		<div class="transfer_textlist mt10"><span class="transfer_textlist_n"> 当前账号密码 <font color="#f00">*</font> </span><input type="password" name="oldpass" value="" class="transfer_text" placeholder="请输入当前账户密码"></div>

          <div class="transfer_textlist"><span class="transfer_textlist_n"> 新账户用户名 <font color="#f00">*</font> </span><input type="text" name="username" value="" class="transfer_text" placeholder="请设置新账户用户名"></div>

           <div class="transfer_textlist"><span class="transfer_textlist_n">新账户密码 <font color="#f00">*</font> </span><input type="password" name="password" value="" class="transfer_text" placeholder="请设置新账户密码"></div>

            <div class="transfer_tip">数据迁移后，可登录新账户，绑定手机、微信等</div>
			

		
   </div>



<div class="mui-collapse-content">
	
	
		<div class="yunset_bth_box">
			<button class="mui-btn mui-btn-primary" type="button" onclick="checktrsform();">确认</button>&nbsp;&nbsp;
 		</div>
	

</div>



</section>
<?php echo '<script'; ?>
>
	$(document).ready(function() {

		
		
		$('.transfer_lx').click(function(event) {
			var databd = $(this).attr('data-bd');
			if($(this).hasClass("transfer_lx_cur")){
				$(this).removeClass('transfer_lx_cur');
				$('#bd'+databd).val('');
			}else{
				$(this).addClass('transfer_lx_cur');
				$('#bd'+databd).val(databd);
			}

		});
	});
	
	function checktrsform() {
		var oldpass 	= 	$.trim($('input[name="oldpass"]').val());
		var username 	= 	$.trim($('input[name="username"]').val());
		var password 	= 	$.trim($('input[name="password"]').val());
		
		
		if(oldpass == '') {
			layermsg('请输入当前账户密码!');return false;

		}
		if(username == '') {
			layermsg('请设置新用户名！');return false;
		}else if(username.length<2||username.length>16){
			layermsg('请输入2至16位不包含特殊字符的用户名！');return false;
			
		}
		if(password == '') {
			layermsg('请设置6至20位新密码!');return false;

		}else if(password.length<6 || password.length>20 ){
			
			 layermsg('请正确设置6至20位新密码!');return false;
		}
		
		layer.open({
			type: 2
			,content: '数据迁移中，请稍候...'
		  });
		var bdtype = new Array();
			
		if($('#bdmoblie').val()!=''){
			bdtype.push('moblie');
		}
		if($('#bdemail').val()!=''){
			bdtype.push('email');
		}
		if($('#bdqqid').val()!=''){
			bdtype.push('qqid');
		}
		if($('#bdwxid').val()!=''){
			bdtype.push('wxid');
		}
		if($('#bdsinaid').val()!=''){
			bdtype.push('sinaid');
		}
		
		$.post(wapurl + "member/index.php?c=transfersave", {
			oldpass : oldpass,
			
			username : username,
			password : password,
			bdtype : bdtype
		}, function(data) {
			layer.closeAll();
			var data = eval('(' + data + ')');
			
			if (data.errcode == 1 ) {
				
				layermsg('账户分离成功，请使用新账户重新登录！',2,function(){window.location.href='<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
'});
				
				return false;
			} else if (data.msg) {
				layermsg(data.msg);
				return false;
			} else {
				layermsg('账户分离失败');
				return false;
			}
		});
	}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
