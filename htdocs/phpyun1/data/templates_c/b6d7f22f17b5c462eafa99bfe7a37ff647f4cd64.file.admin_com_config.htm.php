<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 17:10:21
         compiled from "D:\rcw\uploads\app\template\admin\admin_com_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:6080698045f9d29fded1e52-39222132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d7f22f17b5c462eafa99bfe7a37ff647f4cd64' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_com_config.htm',
      1 => 1576560625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6080698045f9d29fded1e52-39222132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'qy_rows' => 0,
    'v' => 0,
    'com_link_no' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d29fdf155e2_64491548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d29fdf155e2_64491548')) {function content_5f9d29fdf155e2_64491548($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<style>
.layui-form-item{ margin-bottom:0px;}
</style>
    <body class="body_ifm">
        <form class="layui-form">
            <div class="infoboxp">
                <div class="tabs_info">
                    <ul>
                        <li class="curr">
                            <a href="index.php?m=admin_comset">企业设置</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin_comset&c=logo">头像设置</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin_comset&c=set"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin_comset&c=comspend">消费设置</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin_comset&c=rating">套餐设置</a>
                        </li>
                        
                    </ul>
                </div>

                <div class="admin_new_tip">
                    <a href="javascript:;" class="admin_new_tip_close"></a>
                    <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
                    <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                    <div class="admin_new_tip_list_cont">
                        <div class="admin_new_tip_list">管理员可以设置网站企业用户相关（职位、企业审核、手机强制认证等）设置操作，通过该设置实现网站部分功能开启或关闭功能！</div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="main_tag mt10">
                    <div class="tag_box">
                        <div>
                            <table width="100%" class="table_form">
                                <tr class="admin_table_trbg">
                                    <th width="260" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
                                    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
                                </tr>
                                <tr>
                                    <th width="220">开启企业会员审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_status" value="0" title="审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_status']==0) {?>checked<?php }?>>
                                                <input type="radio" name="com_status" value="1" title="不审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_status']==1) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
								<tr>
                                    <th width="220">企业LOGO审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_logo_status" value="1" title="审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_logo_status']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_logo_status" value="2" title="不审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_logo_status']==2) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">企业环境审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_show_status" value="1" title="审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_show_status']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_show_status" value="0" title="不审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_show_status']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">企业横幅审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_banner_status" value="1" title="审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_banner_status']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_banner_status" value="0" title="不审核" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_banner_status']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
								<tr class="admin_table_trbg">
                                    <th width="220">强制完善信息：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_enforce_info" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_info']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_enforce_info" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_info']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th width="220">强制邮箱认证：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_enforce_emailcert" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_emailcert']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_enforce_emailcert" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_emailcert']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">强制手机认证：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_enforce_mobilecert" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_mobilecert']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_enforce_mobilecert" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_mobilecert']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th width="220">强制营业执照认证：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_enforce_licensecert" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_licensecert']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_enforce_licensecert" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_licensecert']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">强制设置地理位置：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_enforce_setposition" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_setposition']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_enforce_setposition" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_enforce_setposition']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th width="220">开启求职咨询：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_message" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_message']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_message" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_message']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr class="admin_table_trbg">
                                    <th width="220">企业搜索器数量：</th>
                                    <td><input class="input-text tips_class input_text_rp" type="text" name="com_finder" id="com_finder" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['com_finder'];?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" />个
                                        <span class="admin_web_tip">数量太多，发送订阅邮件会很慢，为空则不限</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">企业职位发布审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_job_status" value="0" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_job_status']==0) {?>checked<?php }?>>
                                                <input type="radio" name="com_job_status" value="1" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_job_status']==1) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="admin_table_trbg">
                                    <th width="220">兼职职位发布审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_partjob_status" value="0" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_partjob_status']==0) {?>checked<?php }?>>
                                                <input type="radio" name="com_partjob_status" value="1" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_partjob_status']==1) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">企业认证审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_cert_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_cert_status']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_cert_status" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_cert_status']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th width="220">已认证企业免职位审核：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_free_status" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_free_status']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_free_status" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_free_status']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">会员到期提醒：</th>
                                    <td><input class="input-text tips_class input_text_rp" type="text" name="sy_maturityday" id="sy_maturityday" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_maturityday'];?>
" size="10" />天之内
                                    <span class="admin_web_tip">默认为30天,此设置将向站长发送邮件，请先配置站长Email</span>
                                    </td>
                                </tr>
                                   
                                
								
                                <tr class="admin_table_trbg">
                                    <th width="220">登录才能搜索简历：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_search" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_search']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_search" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_search']==0) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

								<tr>
                                    <th width="220">发布职位才可下载简历：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_lietou_job" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_lietou_job']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_lietou_job" value="0" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_lietou_job']!=1) {?>checked<?php }?>>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="admin_table_trbg">
                                    <th width="220">职位列表置顶：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="joblist_top" value="1" title="全部显示" <?php if ($_smarty_tpl->tpl_vars['config']->value['joblist_top']==1) {?>checked<?php }?>>
                                                <input type="radio" name="joblist_top" value="0" title="随机5条" <?php if ($_smarty_tpl->tpl_vars['config']->value['joblist_top']==0) {?>checked<?php }?>>
												<span class="admin_web_tip">若选择“全部显示”，则职位列表会将置顶职位全部显示完之后再显示其他职位</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr class="admin_table_trbg">
                                    <th width="220">查看企业联系方式：</th>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="radio" name="com_login_link"  value="1" title="开放" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_login_link']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_login_link"  value="2" title="不开放" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_login_link']==2) {?>checked<?php }?>>
                                                <input type="radio" name="com_login_link"  value="3" title="登录后显示" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_login_link']==3) {?>checked<?php }?>>
                                                <input type="radio" name="com_login_link"  value="4" title="拥有简历" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_login_link']==4) {?>checked<?php }?>>
                                                <input type="radio" name="com_login_link"  value="5" title="投递简历" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_login_link']==5) {?>checked<?php }?>>
                                                <span class="admin_web_tip">若选择“开放”，则进入企业自身联系方式设置条件判断</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr class="admin_table_trbg">
                                    <th width="220">屏蔽企业联系方式：</th>
                                    <?php if (is_array($_smarty_tpl->tpl_vars['qy_rows']->value)) {?>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['qy_rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                                	<input type="checkbox" name="com_link_no" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" lay-skin="primary" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['com_link_no']->value)) {?>checked<?php }?>> 
                                                <?php } ?>
                                                <span class="admin_web_tip">选中会员等级，对应的的企业联系方式即为不开放状态。</span>
                                            </div>
                                        </div>
                                    </td>
                                    <?php } else { ?>
                                    <td>
                                        <div class="iradio_flat_height">暂无等级，
                                            <a href="index.php?m=userconfig&c=comclass" style="color:red;">添加会员等级</a>
                                            <input type="hidden" name="com_rating" value="0">
                                        </div>
                                    </td>
                                    <?php }?>

                                </tr>
                                
                                <tr class="admin_table_trbg">
                                   <th style="border-bottom:none;">&nbsp;</th>
										<td align="left" style="border-bottom:none;"> 
                                        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                                        <input class="layui-btn layui-btn-normal" id="mconfig" type="button" name="config" value="提交" />&nbsp;&nbsp;
                                        <input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
                <?php echo '<script'; ?>
>
                    layui.use(['layer', 'form'], function() {
                        var layer = layui.layer,
                            form = layui.form,
                            $ = layui.$;
                    });

                    $(function() {
                        $("#mconfig").click(function() {
                        	
                        	var com_link_no	= "";

                        	$('input[name="com_link_no"]:checked').each(function() {
                                if(com_link_no == "") {
                                	com_link_no = $(this).val();
                                } else {
                                	com_link_no = com_link_no + "," + $(this).val();
                                }
                            });
							
                        	loadlayer();
                            $.post("index.php?m=admin_comset&c=save", {
                                config: $("#mconfig").val(),
                                com_enforce_info: $("input[name=com_enforce_info]:checked").val(),
                                com_enforce_emailcert: $("input[name=com_enforce_emailcert]:checked").val(),
                                com_enforce_mobilecert: $("input[name=com_enforce_mobilecert]:checked").val(),
                                com_enforce_licensecert: $("input[name=com_enforce_licensecert]:checked").val(),
                                com_enforce_setposition: $("input[name=com_enforce_setposition]:checked").val(),
                                
                                com_finder: $("#com_finder").val(),
                                com_job_status: $("input[name=com_job_status]:checked").val(),
                                com_partjob_status: $("input[name=com_partjob_status]:checked").val(),
                                com_cert_status: $("input[name=com_cert_status]:checked").val(),
                                
                                com_message: $("input[name=com_message]:checked").val(),
                                com_status: $("input[name=com_status]:checked").val(),
                                com_free_status: $("input[name=com_free_status]:checked").val(),
                                com_logo_status: $("input[name=com_logo_status]:checked").val(),
                                com_show_status: $("input[name=com_show_status]:checked").val(),
                                com_banner_status: $("input[name=com_banner_status]:checked").val(),
                                sy_maturityday: $("#sy_maturityday").val(),
                                com_search: $("input[name=com_search]:checked").val(),
                                com_lietou_job: $("input[name=com_lietou_job]:checked").val(),

                                joblist_top: $("input[name=joblist_top]:checked").val(),
                                com_login_link: $("input[name=com_login_link]:checked").val(),
                                com_link_no: com_link_no,
                                pytoken: $("#pytoken").val()
                            }, function(data, textStatus) {
								parent.layer.closeAll('loading');
                                config_msg(data);
                            });
                        });
                    })
                <?php echo '</script'; ?>
>
            </div>
        </form>
    </body>

</html><?php }} ?>
