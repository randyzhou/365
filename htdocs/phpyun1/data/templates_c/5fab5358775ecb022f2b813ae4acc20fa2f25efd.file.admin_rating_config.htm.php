<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 02:44:50
         compiled from "D:\rcw\uploads\app\template\admin\admin_rating_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:18982570305fa599a22c0350-72674704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fab5358775ecb022f2b813ae4acc20fa2f25efd' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_rating_config.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18982570305fa599a22c0350-72674704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'qy_rows' => 0,
    'v' => 0,
    'com_look' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa599a22f2842_78360939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa599a22f2842_78360939')) {function content_5fa599a22f2842_78360939($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
                        <li>
                            <a href="index.php?m=admin_comset&c=set"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
设置</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin_comset&c=comspend">消费设置</a>
                        </li>
                        <li class="curr">
                            <a href="index.php?m=admin_comset&c=rating">套餐设置</a>
                        </li>
                    </ul>
                </div>

                <div class="admin_new_tip">
                    <a href="javascript:;" class="admin_new_tip_close"></a>
                    <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
                    <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                    <div class="admin_new_tip_list_cont">
                        <div class="admin_new_tip_list">注：该页面的功能设置，不会对现有的数据生效，只对后产生的数据生效，请根据需要，谨慎设置。</div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="main_tag mt10">
                    <div class="tag_box">
                        <div>
                            <table width="100%" class="table_form">
                                <tr class="admin_table_trbg">
                                    <th width="200" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
                                    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
                                </tr>
                                <tr class="admin_table_trbg">
                                    <th width="200">企业会员模式：</th>
                                    <td>

                                        <div class="admin_rating_config_box">
                                            <div class="admin_rating_config_box_list">
                                                <input type="radio" name="com_vip_type" lay-filter="com_vip_type" value="1" title="时间模式" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_vip_type" lay-filter="com_vip_type" value="2" title="套餐模式" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==2) {?>checked<?php }?>>
                                                <input type="radio" name="com_vip_type" lay-filter="com_vip_type" value="0" title="同时开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_type']==0) {?>checked<?php }?>>
                                                <div class="clear"></div>
                                                <span class="admin_web_tip" style="margin-left:0px;">注：时间模式，在设置的时间内，不受套餐数限制，但是有每日上限操作。</span>
                                                <div class="clear"></div>
                                                <span class="admin_web_tip" style="margin-left:0px;">注：套餐模式，在设置的时间内，受套餐数限制，用完即止。</span>
                                            </div>
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <th width="200">套餐消费模式：</th>
                                    <td>
                                        <div class="admin_rating_config_box">
                                            <div class="admin_rating_config_box_list">
                                                <input type="radio" name="com_integral_online" value="1" title="抵扣消费" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_integral_online" value="2" title="金额消费" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==2) {?>checked<?php }?>>
                                                <input type="radio" name="com_integral_online" value="3" title="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
消费" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==3) {?>checked<?php }?>>
                                                <input type="radio" name="com_integral_online" value="4" title="套餐消费" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==4) {?>checked<?php }?>>
                                                <div class="clear"></div>
                                                <span class="admin_web_tip" style="margin-left:0px;">抵扣消费：账户积分抵扣部分或者全部金额操作！在会员套餐使用完的情况下，会员可以通过<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
抵扣金额，或者购买会员的方式进行消费的模式</span>
                                                <div class="clear"></div>
                                                <span class="admin_web_tip" style="margin-left:0px;">金额消费：在会员套餐使用完的情况下，会员通过消费金额，或者购买会员的方式进行套餐相关的操作</span>
                                                <div class="clear"></div>
                                                <span class="admin_web_tip" style="margin-left:0px;"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
消费：在会员套餐使用完的情况下，会员通过购买消费账户积分，或者购买会员的方式进行套餐相关的操作</span>
                                                <div class="clear"></div>
                                                <span class="admin_web_tip" style="margin-left:0px;">套餐消费：在会员套餐使用完的情况下，会员仅可购买会员才可以继续进行套餐内操作</span>
                                            </div>

                                        </div>

                                    </td>
                                </tr>

								<tr>
                                    <th width="200">会员套餐消费模式：</th>
                                    <td>
                                        <div class="admin_rating_config_box">
                                            <div class="admin_rating_config_box_list">
                                                
												<input type="radio" name="member_meal" value="0" title="跟随服务消费模式" <?php if ($_smarty_tpl->tpl_vars['config']->value['member_meal']==0) {?>checked<?php }?>>
                                                
												<input type="radio" name="member_meal" value="1" title="强制金额消费" <?php if ($_smarty_tpl->tpl_vars['config']->value['member_meal']==1) {?>checked<?php }?>>
                                                
                                                <div class="clear"></div>
                                                <span class="admin_web_tip" style="margin-left:0px;">强制金额消费：无论服务消费模式如何设定，企业在升级、续费会员时，必须使用金额进行消费。</span>
                                                <div class="clear"></div>
                                                <span class="admin_web_tip" style="margin-left:0px;">说明：会员服务作为招聘网主要收入来源，您可能需要差异化地设定来切合运营需求，该设置目的是让站长在设定积分消费模式的情况下不影响主体营收。</span>
                                                
                                            </div>

                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <th width="200">购买会员套餐累加：</th>
                                    <td>
                                        <div class="admin_rating_config_box">

                                            <div class="admin_rating_config_box_list">
                                                <input type="radio" name="package_data_acc" value="1" title="开启" <?php if ($_smarty_tpl->tpl_vars['config']->value['package_data_acc']==1) {?>checked<?php }?>>
                                                <input type="radio" name="package_data_acc" value="2" title="关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['package_data_acc']==2) {?>checked<?php }?>>
                                                <span class="admin_web_tip">会员在套餐未到期的情况下，重复购买，是否累加数量或日期。</span>
                                            </div>
                                        </div>

                                    </td>
                                </tr>

                                <tr class="admin_table_trbg">
                                    <th width="200">企业注册默认等级：</th>
                                    <?php if (is_array($_smarty_tpl->tpl_vars['qy_rows']->value)) {?>
                                    <td>

                                        <div class="admin_rating_config_box">
                                            <div class="layui-input-block">
                                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['qy_rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                                <input type="radio" name="com_rating" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_rating']==$_smarty_tpl->tpl_vars['v']->value['id']) {?>checked<?php }?>> <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                    <?php } else { ?>
                                    <td>
                                        <div class="iradio_flat_height">
                                            暂无等级，
                                            <a href="index.php?m=userconfig&c=comclass" style="color:red;">添加会员等级</a>
                                            <input type="hidden" name="com_rating" value="0">
                                        </div>
                                    </td>
                                    <?php }?>
                                </tr>
                                <tr>
                                    <th width="200">会员到期后默认为：</th>
                                    <td>
                                        <div class="admin_rating_config_box">
                                            <div class="admin_rating_config_box_list">
                                                <input type="radio" name="com_vip_done" value="1" title="系统会员" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_done']==1) {?>checked<?php }?>>
                                                <input type="radio" name="com_vip_done" value="0" title="过期会员" <?php if ($_smarty_tpl->tpl_vars['config']->value['com_vip_done']==0) {?>checked<?php }?>>
                                                <span class="admin_web_tip">‘系统会员’，即企业注册默认等级会员</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th width="200">免费查看投递简历：</th>
                                    <?php if (is_array($_smarty_tpl->tpl_vars['qy_rows']->value)) {?>
                                    <td>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['qy_rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                                <input type="checkbox" name="com_look" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['com_look']->value)) {?>checked<?php }?>> <?php } ?>

                                                <span class="admin_web_tip">求职者主动投递简历给企业，该企业是否可以免费查看，选择对应会员类别，则可以免费查看。</span>
                                            </div>
                                        </div>
                                    </td>
                                    <?php } else { ?>
                                    <td>
                                        <div class="iradio_flat_height">
                                            暂无等级，
                                            <a href="index.php?m=userconfig&c=comclass" style="color:red;">添加会员等级</a>
                                            <input type="hidden" name="com_rating" value="0">
                                        </div>
                                    </td>
                                    <?php }?>

                                </tr>
                                <tr>
                                    <tr class="admin_table_trbg">
                                        <th>&nbsp;</th>
                                        <td align="left">
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
                    layui.use(['form'], function() {
                        var form = layui.form,
                            $ = layui.$;

                        form.on('radio(com_vip_type)', function(data) {
                            if(data.value == 2) {
                                $("#timeVipLimit").hide();
                            } else {
                                $("#timeVipLimit").show();
                            }
                        })
                    });
                    $(function() {
                        $("#mconfig").click(function() {
                            var com_look = "";
                            $('input[name="com_look"]:checked').each(function() {
                                if(com_look == "") {
                                    com_look = $(this).val();
                                } else {
                                    com_look = com_look + "," + $(this).val();
                                }
                            });
							loadlayer();
                            $.post("index.php?m=admin_comset&c=save", {
                                config: $("#mconfig").val(),
                                com_rating: $("input[name=com_rating]:checked").val(),
                                com_integral_online: $("input[name=com_integral_online]:checked").val(),
                                member_meal: $("input[name=member_meal]:checked").val(),
                                package_data_acc: $("input[name=package_data_acc]:checked").val(),
                                com_vip_type: $("input[name=com_vip_type]:checked").val(),
                                com_vip_done: $("input[name=com_vip_done]:checked").val(),
                                 

                                isDayActionAllCheck: $("#isDayActionAllCheck").attr('checked') ? 1 : 0,
                                isDayActionZeroCostCheck: $("#isDayActionZeroCostCheck").attr('checked') ? 1 : 0,
                                com_look: com_look,

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
