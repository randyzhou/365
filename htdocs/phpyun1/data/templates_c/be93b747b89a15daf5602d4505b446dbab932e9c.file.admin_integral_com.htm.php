<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 02:44:10
         compiled from "D:\rcw\uploads\app\template\admin\admin_integral_com.htm" */ ?>
<?php /*%%SmartyHeaderCode:8358689565fa5997ab156a3-59902969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be93b747b89a15daf5602d4505b446dbab932e9c' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_integral_com.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8358689565fa5997ab156a3-59902969',
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
  'unifunc' => 'content_5fa5997ab23999_79393541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5997ab23999_79393541')) {function content_5fa5997ab23999_79393541($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
        <form class="layui-form">
            <div class="infoboxp">
                <div class="tabs_info">
                    <ul>
                        <li>
                            <a href="index.php?m=admin_comset">企业设置</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin_comset&c=logo">头像设置</a>
                        </li>
                        <li class="curr">
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
                        <div class="admin_new_tip_list">该页面展示了网站企业<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置管理</div>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="main_tag mt10">
                    <div class="clear"></div>
                    <div class="tag_box">
                        <div>
                            <table width="100%" class="table_form">
                                <tr class="admin_table_trbg">
                                    <th width="220" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
                                    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
                                </tr>

                                <tr>
                                    <th width="220">设置企业地图：</th>
                                    <td>

                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="checkbox" name="integral_map_type" id="integral_map_type" lay-skin="switch" lay-text="加|减"  checked  disabled />

                                                <input class="input-text" type="text" name="integral_map" id="integral_map" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_map'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" /> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th width="220">上传企业横幅：</th>
                                    <td>

                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="checkbox" name="integral_banner_type" id="integral_banner_type" lay-skin="switch" lay-text="加|减" checked disabled/>

                                                <input class="input-text" type="text" name="integral_banner" id="integral_banner" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_banner'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" /> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <th width="220">认证营业执照：</th>
                                    <td>

                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input type="checkbox" name="integral_comcert_type" id="integral_comcert_type" lay-skin="switch" lay-text="加|减"  checked disabled />

                                                <input class="input-text" type="text" name="integral_comcert" id="integral_comcert" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_comcert'];?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')" /> <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th style="border-bottom:none;">&nbsp;</th>
                                    <td align="left" style="border-bottom:none;">
                                        <input class="layui-btn layui-btn-normal" id="integral" type="button" name="config" value="提交" />&nbsp;&nbsp;
                                        <input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
            <?php echo '<script'; ?>
>
                layui.use(['layer', 'form'], function() {
                    var layer = layui.layer,
                        form = layui.form,
                        $ = layui.$;
                });
                $(function() {

                    $("#integral").click(function() {
						loadlayer();
                        $.post("index.php?m=admin_comset&c=save", {
                                config: $("#integral").val(),

                                integral_map_type: $("input[name=integral_map_type]").is(":checked") ? 1 : 2,
                                integral_map: $("#integral_map").val(),

                                integral_banner_type: $("input[name=integral_banner_type]").is(":checked") ? 1 : 2,
                                integral_banner: $("#integral_banner").val(),

                                integral_comcert_type: $("input[name=integral_comcert_type]").is(":checked") ? 1 : 2,
                                integral_comcert: $("#integral_comcert").val(),

                                pytoken: $("#pytoken").val()
                            },

                            function(data, textStatus) {
								parent.layer.closeAll('loading');
                                config_msg(data);
                            });
                    });
                })
            <?php echo '</script'; ?>
>
        </form>
    </body>

</html><?php }} ?>
