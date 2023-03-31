<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-06 18:20:53
         compiled from "D:\rcw\uploads\app\template\admin\admin_member_comadd.htm" */ ?>
<?php /*%%SmartyHeaderCode:44085595fa52385afe218-81999688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2915e41cd74deaddb770763f1dd2727f3fdf830b' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_member_comadd.htm',
      1 => 1578392215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44085595fa52385afe218-81999688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'get_info' => 0,
    'cache' => 0,
    'v' => 0,
    'row' => 0,
    'rating_list' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa52385b25640_51184339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa52385b25640_51184339')) {function content_5fa52385b25640_51184339($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 language="javascript">
            function CheckMember() {
                var cionly  =   $.trim($("#cionly").val());
                var username = $("#username").val();
                if(username == '') {
                    layer.msg('请输入用户名！', 2, 8);return false;
                }
                if($("input[name='password']").val() == '') {
                    layer.msg('请输入密码！', 2, 8);return false;
                }
				if($("input[name='name']").val() == '') {
                    layer.msg('请输入企业全称！', 2, 8);return false;
                }
				if($("#hy").val() == '') {
                    layer.msg('请选择从事行业！', 2, 8);return false;
                }
				if($("#pr").val() == '') {
                    layer.msg('请选择企业性质！', 2, 8);return false;
                }
				if($("#mun").val() == '') {
                    layer.msg('请选择企业规模！', 2, 8);return false;
                }
				if(cionly=='1'){
                    if($("#provinceid").val()==""){
                        layer.msg('请选择所在地！',2,8);return false;
                    }
                }else{
                    if($("#cityid").val() == '') {
                        layer.msg('请选择所在地！', 2, 8);return false;
                    }
                }
				if($("input[name='address']").val() == '') {
                    layer.msg('公司地址不能为空！', 2, 8);return false;
                }
				if($("input[name='linkman']").val() == '') {
                    layer.msg('请输入联系人！', 2, 8);return false;
                }
				if($("input[name='moblie']").val() == '') {
                    layer.msg('联系手机不能为空！', 2, 8);return false;
                } else {
                    var obj = $("input[name='moblie']").val();
                    if(isjsMobile(obj) == false) {
                        layer.msg('联系手机格式错误！', 2, 8);return false;
                    }
                }
                var obj = $("input[name='email']").val();
                var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                if(obj != "" && !myreg.test(obj)) {
                    layer.msg('联系邮箱格式错误！', 2, 8);return false;
                }
				if(editor.getContent()==''){
					layer.msg('请输入企业简介！', 2, 8);return false;
				}
				if(!$("input[name='rating_name']:checked ").val()) {
                    layer.msg('请选择会员套餐！', 2, 8);return false;
                }
				if($("input[name='sendmsg']:checked ").val()&&$("input[name='moblie']").val() == '') {
                    layer.msg('请输入联系手机！', 2, 8);return false;
                }
				if($("input[name='sendemail']:checked ").val()&&$("input[name='email']").val() == '') {
                    layer.msg('请输入联系邮箱！', 2, 8);return false;
                }
                loadlayer();
            }
        <?php echo '</script'; ?>
>
        <title>后台管理</title>
    </head>

    <body class="body_ifm">
        <div class="infoboxp">
            <div class="admin_new_tip">
                <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                <div class="admin_new_tip_list_cont">
                    <div class="admin_new_tip_list">该页面展示了添加企业会员信息，可添加企业会员操作。</div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="admin_add_box">
                <div class="admin_add_box_c" style="padding:0px 0 20px 0;">
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form name="myform" <?php if ($_smarty_tpl->tpl_vars['get_info']->value['type']=='') {?>target="supportiframe" <?php }?> action="index.php?m=admin_company&c=add" onSubmit="return CheckMember();" method="post" class="layui-form" autocomplete="off">
                    <div class="admin_add_box_tit">会员信息</div>
                        <div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 用&nbsp;户&nbsp; 名</div>
                            <div class="admin_add_list_right"><input type="text" value="" name="username" class="input-text" onblur="check_username();" id="username"> </div>
                        </div>
                        <div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 设置密码</div>
                            <div class="admin_add_list_right"><input type="password" value="" name="password" class="input-text" s>
                                <font color="gray"></font>
                            </div>
                        </div>
                         <div class="admin_add_box_tit" style="margin-top:20px; border-top: 1px solid #E6E6E6; ">企业信息</div>
                          <div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 企业全称</div>
                            <div class="admin_add_list_right"><input type="text" value="" name="name" class="layui-input" style="width:230px">
                                <font color="gray"></font>
                            </div>
                        </div>
                        <div class="admin_add_list">
                            <div class="admin_add_list_name">简称</div>
                            <div class="admin_add_list_right"><input type="text" value="" name="shortname" class="layui-input" style="width:230px">
                                <font color="gray"></font>
                            </div>
                        </div>
						<div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 从事行业</div>

                            <div class="admin_add_list_right">
                                <div class="">
                                    <div class="layui-input-block">
                                        <div class="layui-input-inline">
                                            <select name="hy" id="hy" lay-verify="" >
												<option value=''>请选择</option>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cache']->value['industry_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
												<?php } ?>
											</select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 企业性质</div>

                            <div class="admin_add_list_right">
                                <div class="">
                                    <div class="layui-input-block">
                                        <div class="layui-input-inline">
                                           <select name="pr" id="pr" lay-verify="" >
												<option value=''>请选择</option>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['comdata']['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cache']->value['comclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
												<?php } ?>
											</select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 企业规模</div>

                            <div class="admin_add_list_right">
                                <div class="">
                                    <div class="layui-input-block">
                                        <div class="layui-input-inline">
                                          <select name="mun" id="mun" lay-verify="" >
											<option value=''>请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['comdata']['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['cache']->value['comclass_name'][$_smarty_tpl->tpl_vars['v']->value];?>
 </option>
											<?php } ?>
										</select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 所在地</div>

                            <div class="admin_add_list_right">
                                <div class="">
                                    <div class="layui-input-block">
                                       <div class="layui-input-inline">
											<select name="provinceid" id="provinceid" lay-filter="citys">
												<option value="">请选择</option>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cache']->value['city_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
												<?php } ?>
											</select>
										</div>
										
										<div class="layui-input-inline">
											<select name="cityid" lay-filter="citys" id="cityid">
												<option value="">请选择</option>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['city_type'][$_smarty_tpl->tpl_vars['row']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cache']->value['city_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
												<?php } ?>
											</select>
										</div>
									  
										<div class="layui-input-inline">
											<select name="three_cityid" lay-filter="three_cityid" id="three_cityid">
												<option value="">请选择</option>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['city_type'][$_smarty_tpl->tpl_vars['row']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cache']->value['city_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
												<?php } ?>
											</select>
										</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
						 <div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 公司地址</div>
                            <div class="admin_add_list_right"><input type="text" value="" name="address" class="layui-input" style="width:230px">
                                <font color="gray"></font>
                            </div>
                        </div>
						 <div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 联系人</div>
                            <div class="admin_add_list_right"><input type="text" value="" name="linkman" class="layui-input" style="width:230px">
                                <font color="gray"></font>
                            </div>
                        </div>
                        
                        <div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 联系手机</div>
                            <div class="admin_add_list_right"><input type="text" value="" name="moblie" class="input-text" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')">
                                <font color="gray"></font>
                            </div>
                        </div>
                        <div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon"></span> 固定电话</div>
                            <div class="admin_add_list_right">
                                <input type="text" id="areacode" name="areacode" class="input-text" placeholder="如：0527" maxlength="7" style="width:70px;" />
                                <input type="text" placeholder="固定电话" id="telphone" class="input-text" name='telphone' maxlength="8" style="width:150px;" />
                                <input type="text" placeholder="分机号" id="exten" class="input-text" name='exten' maxlength="4" style="width:70px;" />
                                <font color="gray"></font>
                            </div>
                        </div>
                       <div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon"></span>联系邮箱</div>
                            <div class="admin_add_list_right"><input type="text" value="" name="email" class="input-text">
                                <font color="gray"></font>
                            </div>
                        </div>
                        <div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 企业简介</div>
                            <div class="admin_add_list_right"><?php echo '<script'; ?>
 id="myEditor" name="content" type="text/plain" style="width:400px;height:200px;"><?php echo '</script'; ?>
>
                            </div>
                        </div>
						 <div class="admin_add_list">
                            <div class="admin_add_list_name"> 消息通知</div>
                            <div class="admin_add_list_right" style="padding-top:5px;">
								<div class="layui-input-block">
									<input type="checkbox" name="sendmsg" value="1" title="发送短信" lay-skin="primary"> 
									<input type="checkbox" name="sendemail" value="1" title="发送邮件" lay-skin="primary"> 
								</div>
                            </div>
                        </div>
                        <div class="admin_add_list">
                            <div class="admin_add_list_name"> <input type="hidden" id="status_1" name="status" value="1">
                            </div>
                        </div>
						 <div class="admin_add_box_tit" style="margin-top:20px; border-top: 1px solid #E6E6E6; "><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
套餐</div>
						 <div class="admin_add_list">
                            <div class="admin_add_list_name">赠送<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
数量</div>
                            <div class="admin_add_list_right"><input type="text" value="" name="integral" class="layui-input" style="width:230px" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')">
                                <font color="gray"></font>
                            </div>
                        </div>
						 <div class="admin_add_list">
                            <div class="admin_add_list_name"><span class="admin_required_icon">*</span> 会员套餐</div>
                            <div class="admin_add_list_right">
								<div class="layui-input-block">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rating_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									<input type="radio" name="rating_name" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"> <?php } ?>
								</div>
                            </div>
                        </div>
						
                        <div class="admin_add_list">

                            <input class="layui-btn layui-btn-normal" type="submit" name="submit" value="&nbsp;添 加&nbsp;" />
                            <input class="admin_save_sub_qx" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" />

                        </div>
                        <input type="hidden" id="cionly" name="cionly" value="<?php if (empty($_smarty_tpl->tpl_vars['cache']->value['city_type'])) {?>1<?php }?>">
                            
                        <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['get_info']->value['type'];?>
">
                    </form>

                </div>
            </div>
        </div>
		
		<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/city.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
			var form ,url = weburl+"/index.php?m=ajax&c=get_city_option";
		 	
			layui.use(['layer', 'form'], function() {
	   			var form = layui.form,
	  				laydate = layui.laydate,
	  				$ = layui.$;
			}); 
			
			
			var editor = UE.getEditor('myEditor', {
				toolbars : [ [ 'Bold', 'italic', 'underline', 'removeformat',
						'|', 'justifyleft', 'justifycenter', 'justifyright',
						'insertorderedlist', 'insertunorderedlist' ] ],
				wordCount : false,
				elementPathEnabled : false,
				initialFrameHeight : 200
			});
		<?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
