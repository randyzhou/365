<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 21:28:35
         compiled from "D:\rcw\uploads\app\template\admin\admin_recharge.htm" */ ?>
<?php /*%%SmartyHeaderCode:7262360015fb7c4838ca424-41382176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9134516341fe5a5932ce84f7e07767080561e2c8' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_recharge.htm',
      1 => 1576479745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7262360015fb7c4838ca424-41382176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'rating_list' => 0,
    'ratings' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb7c4838db8a1_47983678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb7c4838db8a1_47983678')) {function content_5fb7c4838db8a1_47983678($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
		<title>后台管理</title>
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

	</head>

	<body class="body_ifm">
		<div class="infoboxp">
			<div class="tabs_info">
				<ul>
					<li class="curr" data-div="recharge">
						<a><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
充值</a>
					</li>
					<li class="" data-div="comvip">
						<a>企业会员开通套餐</a>
					</li>
				</ul>
			</div>
			<div class="admin_new_tip">
				<a href="javascript:;" class="admin_new_tip_close"></a>
				<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
				<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
				<div class="admin_new_tip_list_cont">
					<div class="admin_new_tip_list recharge">充值时，请正确填写用户名和要充值的<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
。确认用户名的正确性。</div>
					<div class="admin_new_tip_list comvip none">开通会员时，请确认用户名的正确性，并谨慎填写开通价格，关系到网站的收入。</div>
				</div>
			</div>
			<div class="clear"></div>

			<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
			<div id="recharge" class="tag_box mt10">
				<form name="myform" action="index.php?m=recharge" method="post" target="supportiframe" onSubmit="return check()" class="layui-form">
					<table width="100%" class="table_form">
						<tr>
							<td colspan="2" bgcolor="#f0f6fb">
								<div class="admin_bold">会员充值</div>
							</td>
						</tr>
						<tr>
							<th width="140">充值用户名：</th>
							<td>
								<div class="layui-form-item">
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<input class="layui-input input-text" type="text" name="userarr" id='userarr' size="40" value="" />
										</div>
										<div class="layui-form-mid layui-word-aux">多个用户名用逗号隔开</div>
									</div>
								</div>
							</td>
						</tr>
						<tr class="admin_table_trbg">
							<th width="140">充值方式：</th>
							<td>
								<div class="layui-form-item">
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<input type="radio" name="fs" value="1" id="fs_0" checked title="增加">
											<input type="radio" name="fs" value="2" id="fs_1" title="扣除">
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr class="int" id="integral_tr">
							<th height="30"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
(<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];?>
)：</th>
							<td>
								<div class="layui-form-item">
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<input type="text" name="price_int" id="price_int" size="20" maxlength="16" value="" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" class="input-text">
										</div>
									</div>
								</div>
								
							</td>
						</tr>
						<tr class="admin_table_trbg">
							<th height="30">备　　注：</th>
							<td><textarea name="remark" rows=2 cols=40 wrap="physical" class="admin_comdit_textarea"></textarea></td>
						</tr>
						<tr>
							<th></th>
							<td>
								<input class="layui-btn layui-btn-normal" type="submit" name="insert" value="&nbsp;充　值&nbsp;" />
							</td>
						</tr>
					</table>
					<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				</form>
			</div>
			<div id="comvip" class="tag_box mt10 none">
				<form name="myform" action="index.php?m=recharge&c=comvip" method="post" target="supportiframe" onSubmit="return comvip()" class="layui-form">
					<table width="100%" class="table_form">
						<tr>
							<td colspan="2" bgcolor="#f0f6fb">
								<div class="admin_bold">企业会员开通套餐</div>
							</td>
						</tr>
						<tr>
							<th width="140">开通用户名：</th>
							<td>
								<div class="admin_kt_uservip">
									<div class="layui-form-item">
										<div class="layui-input-block">
											<div class="layui-input-inline">
												<input class="layui-input input-text" type="text" name="username" id='username' size="40" value="" oninput="clearusername()"/>
											</div>
											<div id="addvipuser" class="admin_kt_uservip_box none">
											</div>
											<div onclick="namesearch()" class="admin_kt_uservip_bth">检索</div>
											
										</div>
									</div>
								</div>
                                <span class="admin_web_tip">单次只能为一个会员开通套餐</span>
							</td>
						</tr>
						<tr>
							<th width="140">开通企业名称：</th>
							<td>
								<div class="admin_kt_uservip">
									<div class="layui-form-item">
										<div class="layui-input-block">
											<div class="layui-input-inline">
												<input class="layui-input input-text" type="text" name="comname" id='comname' size="40" value="" oninput="clearcomname()"/>
											</div>
											<div id="addvipcom" class="admin_kt_uservip_box none">
											</div>
											<div onclick="comsearch()" class="admin_kt_uservip_bth">检索</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr class="admin_table_trbg">
							<th width="140">是否累加：</th>
							<td>
								<div class="layui-form-item">
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<input type="radio" name="leijia" value="1" id="leijia_0" title="是">
											<input type="radio" name="leijia" value="2" id="leijia_1" checked title="否">
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr class="admin_table_trbg">
							<th width="140">开通等级：</th>
							<td>
								<div class="layui-input-block" style=" float:left">
									<div class="layui-input-inline">
										<select name="ratingid" id="ratingid" lay-filter="vipprice">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['ratings'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ratings']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rating_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ratings']->key => $_smarty_tpl->tpl_vars['ratings']->value) {
$_smarty_tpl->tpl_vars['ratings']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['ratings']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ratings']->value['name'];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							</td>
						</tr>
						<tr class="int">
							<th height="30">价格：</th>
							<td>
								<div class="layui-form-item">
									<div class="layui-input-block">
										<div class="layui-input-inline">
											<input type="text" name="vipprice" id="vipprice" size="20" maxlength="16" value="" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" class="input-text">元
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr class="admin_table_trbg">
							<th height="30">备　　注：</th>
							<td><textarea name="remark" rows=2 cols=40 wrap="physical" class="admin_comdit_textarea"></textarea></td>
						</tr>
						<tr>
							<th></th>
							<td>
								<input class="layui-btn layui-btn-normal" type="submit" value="&nbsp;开　通&nbsp;" />
							</td>
						</tr>
					</table>
					<input type="hidden" id="pytoken" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				</form>
			</div>
		</div>
		<?php echo '<script'; ?>
>
			var vipData = [];
			'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rating_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>';
			vipData.push({
				id: '<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
',
				price: '<?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>
'
			});
			'<?php } ?>';

			layui.use(['layer', 'form'], function() {
				var layer = layui.layer,
					form = layui.form,
					$ = layui.$;
				form.on('select(vipprice)', function(data) {
					if(data.value) {
						for(var i in vipData) {
							if(vipData[i].id == data.value) {
								$("#vipprice").val(vipData[i].price);
							}
						}
					}
				});
			});
			$(function() {
				var switchtag = $("div.tabs_info ul li");
				switchtag.click(function() {
					$(this).addClass("curr").siblings().removeClass("curr");
					var index = this.getAttribute('data-div');
					$(".tag_box").addClass('none');
					$("#" + index).removeClass('none');
					$(".admin_new_tip_list").addClass('none');
					$("." + index).removeClass('none');
				});
			})

			function check() {
				if($("#userarr").val() == '') {
					parent.layer.msg('请输入用户名！', 2, 8);
					return false;
				}
				if($("#price_int").val() < 1) {
					parent.layer.msg('请输入<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
！', 2, 8);
					return false;
				}
			}

			function comvip() {
				if($("#username").val() == '' && $("#comname").val() == '') {
					parent.layer.msg('请输入用户名或企业名称', 2, 8);
					return false;
				}
				if($("#vipprice").val() < 1) {
					parent.layer.msg('请输入开通价格！', 2, 8);
					return false;
				}
				if($("#ratingid").val() == '') {
					parent.layer.msg('请选择开通等级！', 2, 8);
					return false;
				}
			}

			function namesearch() {
				var username = $("#username").val();
				if(username == '') {
					parent.layer.msg('请输入用户名！', 2, 8);
					return false;
				}
				var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
				var pytoken = $("#pytoken").val();
				$.post("index.php?m=recharge&c=searchname", {
					username: username,
					pytoken: pytoken
				}, function(data) {
					var data = eval('(' + data + ')');
					if(data.error == 0) {
						var html = '<ul>';
						for(var i in data.namelist) {
							html += '<li><a href="javascript:void(0)" onclick="setuser(this)" data-comname="'+data.namelist[i].comname+'">' + data.namelist[i].username + '</a></li>';
						}
						html+='</ul>';
						$("#addvipuser").removeClass('none');
						$("#addvipuser").html(html);
					}else{
						parent.layer.msg('企业用户名不存在',2,8);
					}
				})
			}
			function comsearch() {
				var comname = $("#comname").val();
				if(comname == '') {
					parent.layer.msg('请输入企业名称！', 2, 8);
					return false;
				}
				var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
				var pytoken = $("#pytoken").val();
				$.post("index.php?m=recharge&c=searchcom", {
					comname: comname,
					pytoken: pytoken
				}, function(data) {
					var data = eval('(' + data + ')');
					if(data.error == 0) {
						var html = '<ul>';
						for(var i in data.namelist) {
							html += '<li><a href="javascript:void(0)" onclick="setcom(this)" data-username="'+data.namelist[i].username+'">' + data.namelist[i].comname + '</a></li>';
						}
						html+='</ul>';
						$("#addvipcom").removeClass('none');
						$("#addvipcom").html(html);
					}else{
						parent.layer.msg('企业名称不存在',2,8);
					}
				})
			}
			function setuser(obj){
				var username = obj.innerText;
				$("#username").val(username);
				var comname = obj.getAttribute('data-comname');
				$("#comname").val(comname);
				$("#addvipuser").addClass('none');
				$("#addvipuser").html('');
			}
			function setcom(obj){
				var comname = obj.innerText;
				$("#comname").val(comname);
				var username = obj.getAttribute('data-username');
				$("#username").val(username);
				$("#addvipcom").addClass('none');
				$("#addvipcom").html('');
			}
			function clearusername(){
				$("#comname").val('');
				$("#addvipuser").addClass('none');
				$("#addvipuser").html('');
			}
			function clearcomname(){
				$("#username").val('');
				$("#addvipcom").addClass('none');
				$("#addvipcom").html('');
			}
		<?php echo '</script'; ?>
>
	</body>

</html><?php }} ?>
