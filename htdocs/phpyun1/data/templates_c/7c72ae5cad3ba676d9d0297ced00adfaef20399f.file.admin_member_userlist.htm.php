<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 03:06:42
         compiled from "D:\rcw\uploads\app\template\admin\admin_member_userlist.htm" */ ?>
<?php /*%%SmartyHeaderCode:16405020295f9db5c29713c1-99464748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c72ae5cad3ba676d9d0297ced00adfaef20399f' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_member_userlist.htm',
      1 => 1577782190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16405020295f9db5c29713c1-99464748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'total' => 0,
    'userrows' => 0,
    'key' => 0,
    'v' => 0,
    'source' => 0,
    'Dname' => 0,
    'email_promiss' => 0,
    'moblie_promiss' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9db5c29c47d6_09534190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9db5c29c47d6_09534190')) {function content_5f9db5c29c47d6_09534190($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/member_send_email.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="info_div" style="display:none; width: 390px; ">
            <div class="" style=" margin-top:10px; ">
                <form class="layui-form" action="index.php?m=user_member&c=status" target="supportiframe" method="post" onsubmit="return htStatus()">
                    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                        <tr>
                            <th width="80">审核操作：</th>
                            <td align="left">
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <input name="status" id="state0" value="0" title="未审核" type="radio" />
                                        <input name="status" id="state1" value="1" title="已审核" type="radio" />
										<input name="status" id="state3" value="3" title="未通过" type="radio" /> 
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>审核说明：</th>
                            <td align="left"> <textarea id="statusbody" name="statusbody" class="admin_explain_textarea"></textarea> </td>
                        </tr>
                        <tr>
                            <td colspan='2' align="center">
                                <input type="submit" value='确认' class="admin_examine_bth">
                                <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
                            </td>
                        </tr>
                    </table>
					<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
					<input name="uid" value="0" type="hidden">
                </form>
            </div>
        </div>

        <div id="userrenemail" style="display:none; width: 390px; ">
                
                 <div class="jap_honda">
                    <form class="layui-form" action="index.php?m=user_member&c=emailstatus" target="supportiframe" method="post">
                        <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                                <tr>
                                    <th width="80">邮箱：</th>
                                        <td align="left">
                                            <div class="layui-form-item">
                                                <div class="layui-input-block">
                                                    <input  type="text" class="input-text" id="useremailemail" name="useremailemail" value="">
                                            
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <tr>
                                <th width="80">认证操作：</th>
                                <td align="left">
                                    <div class="layui-form-item">
                                        <div class="layui-input-block">
                                            <input name="estatus" id="userestatus0" value="0" title="待认证" type="radio" />
                                            <input name="estatus" id="userestatus1" value="1" title="已认证" type="radio" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2' align="center">
                                    <input type="submit" onclick="loadlayer();" value='确认'  class="admin_examine_bth">
                                    <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        <input name="uid"  id="useremailuid" value="0" type="hidden">
                    </form>
                   </div>
                
            </div>
            <div id="userrenmoblie" style="display:none; width: 390px; ">
                    <div class="jap_honda">
                        <form class="layui-form" action="index.php?m=user_member&c=mobliestatus" target="supportiframe" method="post">
                            <table cellspacing='1' cellpadding='1' class="admin_examine_table">
								<tr>
									<th width="80">手机号码：</th>
									<td align="left">
										<div class="layui-form-item">
											<div class="layui-input-block">
												<input type="text" class="input-text" id="usermobliemoblie" name="usermobliemoblie" value="">
											</div>
										</div>
									</td>
								</tr>
								<tr>
                                    <th width="80">认证操作：</th>
                                    <td align="left">
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input name="mstatus" id="usermstatus0" value="0" title="待认证" type="radio" />
                                                <input name="mstatus" id="usermstatus1" value="1" title="已认证" type="radio" />
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='2' align="center">
                                        <input type="submit" onclick="loadlayer();" value='确认'  class="admin_examine_bth">
                                        <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
                                    </td>
                                </tr>
                            </table>
                            <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                            <input name="uid"  id="usermoblieuid" value="0" type="hidden">
                        </form>
                    </div>
                </div>
                    <!-------身份认证---->
                <div id="preview" style="display:none;width:360px ">
                        <div style="overflow:auto;width:360px;">
                            <form class="layui-form" action="index.php?m=user_member&c=userStatus" target="supportiframe" method="post" onsubmit="return tcdiv();">
                                <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                                        <tr>
                                                <th width="80">身份证号码：</th>
                                                <td align="left">
                                                    <div class="userididcard" id="userididcard"></div>
                                                </td>
                                            </tr>
                                    <tr>
                                        <th width="80">认证图片：</th>
                                        <td align="left">
                                            <div class="job_box_div" style="float:left;border:1px solid #eee;"></div> 
                                            <a target="_blank" href="" id='preview_url' style="line-height:70px; padding-left:10px;">查看原图</a>
                                            <a target="_blank"  id='sfzrz' style="line-height:70px; padding-left:10px;">暂无身份证照片</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="80">审核操作：</th>
                                        <td align="left">
                                            <div class="layui-form-item">
                                                <div class="layui-input-block">
                                                    <input name="r_status" id="userstatus0" value="0" title="待认证" type="radio" />
                                                    <input name="r_status" id="userstatus1" value="1" title="已认证" type="radio" />
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>审核说明：</th>
                                        <td align="left"> <textarea id="usercontent" name="statusbody" class="admin_explain_textarea"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan='2' align="center">
                                            <div class="admin_Operating_sub">
                                                <input type="submit" value='确认' class="admin_examine_bth">
                                                <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></div>
                                        </td>
                                    </tr>
                                </table>
                                <input name="uid" id="useriduid" value="0" type="hidden">
                                <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                            </form>
                        </div>
                    </div>


                     <!-------批量认证---->
                    <div id="batchrezhen" style="display:none;width:360px ">
                    <div style="overflow:auto;width:360px;">
                        <form class="layui-form" action="index.php?m=user_member&c=batchfirm" target="supportiframe" method="post">
                            <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                                <tr>
                                    <th width="80">认证类型：</th>
                                    <td align="left">
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                    <input name="username_email"    title="邮箱"        type="checkbox"   lay-skin="primary"/>
                                                    <input name="username_moblie"   title="手机"        type="checkbox"   lay-skin="primary"/>
                                                    <input name="username_idcard"   title="身份认证"     type="checkbox"   lay-skin="primary"/>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="80">认证操作：</th>
                                    <td align="left">
                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <input name="plstatus" id="batchstatis0" value="0" title="待认证" type="radio" />
                                                <input name="plstatus" id="batchstatis1" value="1" title="已认证" type="radio" />
                                            </div>
                                        </div>
                                    </td>
                                </tr>
             
                                <tr>
                                    <td colspan='2' align="center">
                                        <div class="admin_Operating_sub">
                                            <input type="submit" onclick="loadlayer();" value='确认' class="admin_examine_bth">
                                            <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></div>
                                    </td>
                                </tr>
                            </table>
                            <input name="uid" id="btachuid" value="0" type="hidden">
                            <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        </form>
                    </div>
                </div>
        <div class="infoboxp">
        	
        	<div class="tabs_info">
                <ul>
                    <li <?php if (!$_GET['c']) {?>class="curr" <?php }?>>
                        <a href="index.php?m=user_member">全部个人</a>
                    </li>
                    <li <?php if ($_GET['c']) {?>class="curr" <?php }?>>
                        <a href="index.php?m=user_member&c=writtenOffLog&utype=1">解绑记录</a>
                    </li>
					<li>
                        <a href="index.php?m=user_member&c=member_log">会员日志</a>
                    </li>
                </ul>
            </div>
        	
            <div class="admin_new_tip">
                <a href="javascript:;" class="admin_new_tip_close"></a>
                <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
                <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                <div class="admin_new_tip_list_cont">
                    <div class="admin_new_tip_list">该页面展示了网站所有的个人会员信息，可对会员进行编辑修改操作。</div>
                    <div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
                    <div class="admin_new_tip_list">当前个人用户不是已审核状态，涉及到相关数据无法进行审核操作。</div>
                    
                </div>
            </div>
            <div class="clear"></div>
            <div class="admin_new_search_box">
                <form action="index.php" name="myform" method="get">
                    <input name="m" value="user_member" type="hidden" />
                    <div class="admin_new_search_name">搜索类型：</div>
                    <div class="admin_Filter_text formselect" did='dkeytype'>
                        <input type="button" <?php if ($_GET['keytype']==''||$_GET['keytype']=='1') {?> value="用户名" <?php } elseif ($_GET['keytype']=='2') {?> value="姓名" <?php } elseif ($_GET['keytype']=='3') {?> value="手机号" <?php } elseif ($_GET['keytype']=='4') {?> value="EMAIL" <?php } elseif ($_GET['keytype']=='5') {?> value="用户ID" <?php }?> class="admin_Filter_but" id="bkeytype">

                        <input type="hidden" name="type" id="keytype" <?php if ($_GET['keytype']==''||$_GET['keytype']=='1') {?> value="1" <?php } elseif ($_GET['keytype']=='2') {?> value="2" <?php } elseif ($_GET['keytype']=='3') {?> value="3" <?php } elseif ($_GET['keytype']=='4') {?> value="4" <?php } elseif ($_GET['keytype']=='5') {?> value="5" <?php }?>/>
                        <div class="admin_Filter_text_box" style="display:none" id="dkeytype">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('1','keytype','用户名')">用户名</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('2','keytype','姓名')">姓名</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('3','keytype','手机号')">手机号</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('4','keytype','EMAIL')">EMAIL</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('5','keytype','用户ID')">用户ID</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type="text" value="" placeholder="请输入你要搜索的关键字" name='keyword' class="admin_new_text">
                    <input type="submit" value="搜索" name='search' class="admin_new_bth">
                    <a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
                    <a href="index.php?m=user_member&c=add" class="admin_new_cz_tj">+ 添加会员</a>
                </form>
                <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="clear"></div>

			<div class="admin_statistics">
            数据统计：
				<em class="admin_statistics_s">总数：<span class="ajaxuserall">0</span></em>
				<em class="admin_statistics_s">未审核：<span class="userStatusNum1">0</span></em>
				<em class="admin_statistics_s">未通过：<span class="userStatusNum2">0</span></em>
				<em class="admin_statistics_s">已锁定：<span class="userStatusNum3">0</span></em>
				搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
			</div>
			
			<div class="clear"></div>

            <div class="table-list">
                <div class="admin_table_border">
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form action="index.php?m=user_member&c=del" target="supportiframe" name="myform" method="post" id='myform'>
                        <table width="100%">
                            <thead>
                                <tr class="admin_table_top">
                                    <th style="width:20px;">
										<label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
									</th>
                                    <th align="left"> 
										<?php if ($_GET['t']=="uid"&&$_GET['order']=="asc") {?>
											<a href="index.php?m=user_member&order=desc&t=uid">用户ID<img src="images/sanj.jpg" /></a>
										<?php } else { ?>
											<a href="index.php?m=user_member&order=asc&t=uid">用户ID<img src="images/sanj2.jpg" /></a> 
										<?php }?>
									</th>
                                    <th align="left">姓名/用户名</th>
                                    <th align="left">手机号/EMAIL</th>
                                    <th align="left">个人认证</th>
									<th align="left">注册时间</th>
                                    <th>最近登录时间</th>
									<th>简历</th>
                                    <th>来源</th>
                                    <th>站点</th>
                                    <th>顾问</th>
                                    <th>审核状态</th>
									<th >操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userrows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <tr <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg" <?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
                                    <td width="20"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" email="<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
" moblie="<?php echo $_smarty_tpl->tpl_vars['v']->value['telphone'];?>
" style="margin-left:5px;;" /></td>

                                    <td align="left" class="td1" style="width:60px;">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>

                                       
                                    </td>
                                    
                                    <td align="left">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['username_n'];?>

                                        <div class="mt5">
                                            <a href="javascript:void(0)" onclick="toMember('index.php?m=user_member&c=Imitate&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['usertype'];?>
')" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a> 
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?><img src="../config/ajax_img/suo.png" alt="已锁定" width="15"><?php }?> 
										</div>
                                    </td>
                                    <td align="left">
                                        <div>
                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['telphone']) {?>
												<span class="admin_new_sj"><?php echo $_smarty_tpl->tpl_vars['v']->value['telphone'];?>
</span> 
											<?php }?>
                                        </div>
                                        <div>
                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['email']) {?>
												<span class="admin_new_yx"><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</span> 
												<a onClick="send_email('<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
');" style="color:green; cursor:pointer;">发邮件</a>
											<?php }?>
                                        </div>
                                    </td>

                                    <td>
                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['email_status_n']==1) {?>
                                            <img src="../config/ajax_img/1-1.png" title="邮箱已认证"  data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['email_status_n'];?>
"  data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  data-email="<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
"  width="20" height="20" class="user_email"> 
                                            <?php } else { ?>
                                            <img src="../config/ajax_img/1-2.png" title="邮箱未认证"  data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['email_status_n'];?>
"  data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  data-email="<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
"  width="20" height="20" class="user_email">
                                             <?php }?>
                                              <?php if ($_smarty_tpl->tpl_vars['v']->value['moblie_status']==1) {?>
                                            <img src="../config/ajax_img/2-1.png" title="手机已认证" data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['moblie_status'];?>
"  data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  data-moblie="<?php echo $_smarty_tpl->tpl_vars['v']->value['telphone'];?>
" width="20" height="20" class="user_moblie"> 
                                            <?php } else { ?>
                                            <img src="../config/ajax_img/2-2.png" title="手机未认证" data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['moblie_status'];?>
"  data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  data-moblie="<?php echo $_smarty_tpl->tpl_vars['v']->value['telphone'];?>
" width="20" height="20" class="user_moblie">
                                             <?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['v']->value['idcard_status']==1) {?>
                                            <img src="../config/ajax_img/3-1.png" title="身份已认证" data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['idcard_status'];?>
"  data-uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  data-idcard="<?php echo $_smarty_tpl->tpl_vars['v']->value['idcard'];?>
"  data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['idcard_pic'];?>
" width="20" height="20" class="user_idcard">
                                             <?php } else { ?>
                                            <img src="../config/ajax_img/3-2.png" title="身份未认证" data-status="<?php echo $_smarty_tpl->tpl_vars['v']->value['idcard_status'];?>
"  data-uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"  data-idcard="<?php echo $_smarty_tpl->tpl_vars['v']->value['idcard'];?>
"  data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['idcard_pic'];?>
" width="20" height="20" class="user_idcard">
                                             <?php }?>
                                        </td>

                                    <td class="td" align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['reg_date'],"%Y-%m-%d");?>
</td>
									
									<td align="center">
										<?php if ($_smarty_tpl->tpl_vars['v']->value['login_date']!='') {?>
											<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['login_date'],"%Y-%m-%d");?>
 
										<?php } else { ?>
											<font color="#FF0000">从未登录</font>
										<?php }?>
									</td>
                                    
									<td align="center">
                                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['def_job']!='0') {?>
											<div class="mt5">
												<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['def_job'],'look'=>'admin'),$_smarty_tpl);?>
" class="admin_cz_sc" target="_blank">预览</a>
											</div>
										<?php } else { ?>
											<a href="index.php?m=admin_resume&c=addResume&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_cz_sc">添加</a>
										<?php }?>
                                    </td>
                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['source']->value[$_smarty_tpl->tpl_vars['v']->value['source']];?>
</td>
                                    <td align="center">
                                        <div><?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['v']->value['did']];?>
</div>
                                        <div class="mt5">
                                            <a href="javascript:;" onclick="checksite('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','index.php?m=user_member&c=checksitedid');" class="admin_cz_sc">分配</a>
                                        </div>
                                    </td>
                                    <td align="center">
										<?php if ($_smarty_tpl->tpl_vars['v']->value['crm_uid']) {?>
											<div><?php echo $_smarty_tpl->tpl_vars['v']->value['crm_name'];?>
</div>
											<div>
												<a href="javascript:void(0);" onclick="checkCrm('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','index.php?m=user_member&c=checkCrm');" class="admin_company_xg_icon">
													<span class="admin_company_xg_icon">分配</span>
												</a>
											</div> 
										<?php } else { ?>
											<div>未分配</div>
											<div>
												<a href="javascript:void(0);" onclick="checkCrm('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','index.php?m=user_member&c=checkCrm');" class="admin_company_xg_icon">
													<span class="admin_company_xg_icon">分配</span>
												</a>
											</div> 
										<?php }?>
									</td>

                                    <td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['r_status']=='1') {?><span class="admin_com_Audited">已审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['r_status']=='2') {?><span class="admin_com_Lock">已锁定</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['r_status']=='3') {?><span class="admin_com_tg">未通过</span><?php } else { ?><span class="admin_com_noAudited">未审核</span><?php }?></td>
                                     
                                    <td width="180">
                                      <a href="javascript:;" class="admin_new_c_bth admin_new_c_bthsh check" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['r_status'];?>
">审核</a>
                                      <!--<a href="javascript:;" class="admin_new_c_bth admin_new_c_bthsd status" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
">锁定</a>-->
                                      <a href="index.php?m=user_member&c=member_log&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_new_c_bth admin_new_c_rz">日志</a>
                                      <a href="index.php?m=user_member&c=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_new_c_bth admin_n_sc mt5">修改</a>
                                      <a href="javascript:void(0);" onClick="resetpw('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_mmcz mt5">密码</a>
                                      <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=user_member&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
                                                           
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
                                    <td colspan="12"><label for="chkAll2">全选</label> &nbsp;
                                        <input class="admin_button" type="button" name="delsub" value="删除所选" onclick="return really('del[]')" /> <?php if ($_smarty_tpl->tpl_vars['email_promiss']->value) {?>
                                        <input class="admin_button" type="button" value="发邮件" onclick="return confirm_email('确定发邮件吗？','email_div')" /> <?php }?> <?php if ($_smarty_tpl->tpl_vars['moblie_promiss']->value) {?>
                                        <input class="admin_button" type="button" value="发信息" onclick="return confirm_email('确定发信息吗？','moblie_div')" /> <?php }?>
                                  		<input class="admin_button" type="button" name="delsub" value="批量审核"  onclick="return statusAll('del[]')"/>
                                        <input class="admin_button" type="button" name="delsub" value="批量选择分站" onClick="checksiteall('index.php?m=user_member&c=checksitedid');" />
                                        <input class="admin_button" type="button" name="delsub" value="批量分配顾问" onClick="checkCrmAll('index.php?m=user_member&c=checkCrm');" />
                                        <input class="admin_button" type="button" name="delsub" value="批量认证"  onclick="return batch('del[]')"/>
                                    </td>
								</tr>	
								<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['config']->value['sy_listnum']) {?>
									<tr>
										<?php if ($_smarty_tpl->tpl_vars['pagenum']->value==1) {?>
											<td colspan="3"> 从 1 到 <?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value>1&&$_smarty_tpl->tpl_vars['pagenum']->value<$_smarty_tpl->tpl_vars['pages']->value) {?>
											<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['pagenum']->value*$_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php } elseif ($_smarty_tpl->tpl_vars['pagenum']->value==$_smarty_tpl->tpl_vars['pages']->value) {?>
											<td colspan="3"> 从 <?php echo ($_smarty_tpl->tpl_vars['pagenum']->value-1)*$_smarty_tpl->tpl_vars['config']->value['sy_listnum']+1;?>
 到 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ，总共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</td>
										<?php }?>
										<td colspan="10" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
									</tr>
								<?php }?>
                            </tbody>
                        </table>
                        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                    </form>
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            layui.use(['layer', 'form'], function() {
                var layer = layui.layer,
                    form = layui.form,
                    $ = layui.$;
            });
			$(document).ready(function(){
				$.get("index.php?m=user_member&c=userNum", function(data) {
					var datas = eval('(' + data + ')');
					if(datas.userAllNum) {
						$('.ajaxuserall').html(datas.userAllNum);
					}
					if(datas.userStatusNum1) {
						$('.userStatusNum1').html(datas.userStatusNum1);
					}
					if(datas.userStatusNum2) {
						$('.userStatusNum2').html(datas.userStatusNum2);
					}
					if(datas.userStatusNum3) {
						$('.userStatusNum3').html(datas.userStatusNum3);
					}
				});
				
                $(".check").click(function() {
                    $("input[name=pid]").val($(this).attr("pid"));
                    var uid = $(this).attr("pid");
                    var status = $(this).attr("status");
                    if(status==2){
                      parent.layer.msg('当前用户为已锁定状态，无法进行审核操作', 2, 8);
                      return false;
                    }
                    $("#state" + status).attr("checked", true);
                    layui.use(['form'], function() {
                        var form = layui.form;
                        form.render();
                    });
                    $("input[name=uid]").val(uid);
                    $.get("index.php?m=user_member&c=lockinfo&uid=" + uid, function(msg) {
                        $("#statusbody").val($.trim(msg));
                        $.layer({
                            type: 1,
                            title: '个人用户审核',
                            closeBtn: [0, true],
                            border: [10, 0.3, '#000', true],
                            area: ['390px', '240px'],
                            page: {
                                dom: "#info_div"
                            }
                        });
                    });
                });
			});
			
			/* 批量审核 */
			function statusAll(name) {
				var chk_value =[];  
	               
                $('input[name="'+name+'"]:checked').each(function(){    
                    chk_value.push($(this).val());   
                });  
            
                if(chk_value.length==0){
                    layer.msg("请选择要批量审核的数据！",2,8);return false;
                }else{
                	$("input[name=uid]").val(chk_value);
					$("#statusbody").val('');
					$("input[name='status']").attr('checked', false);
					$.layer({
						type : 1,
						title : '个人用户审核',
						closeBtn : [ 0, true ],
						border : [ 10, 0.3, '#000', true ],
						area : [ '390px', 'auto' ],
						page : {
							dom : "#info_div"
						}
					});
                }
			}
			
          	/*邮件认证*/
            $(".user_email").click(function(data){
                var status = $(this).attr("data-status");
                var uid    = $(this).attr("data-url");
                var email  = $(this).attr("data-email");
                $('#useremailemail').val(email);
                 $('#useremailuid').val(uid);
                $("#userestatus" + status).attr("checked", true);
                layui.use([ 'form' ], function() {
                    var form = layui.form;
                    form.render();
                 });
                $.layer({
                    type : 1,
                    title : '邮箱认证',
                    closeBtn : [ 0, true ],
                    offset : [ '80px', '' ],
                    border : [ 10, 0.3, '#000', true ],
                    area : [ '350px', '240px' ],
                    page : {
                    dom : '#userrenemail'
                    }
                }); 
            
            })
               /*手机认证*/
               $(".user_moblie").click(function(data){
                var status = $(this).attr("data-status");
                var uid    = $(this).attr("data-url");
                var moblie  = $(this).attr("data-moblie");
                $('#usermobliemoblie').val(moblie);
                $('#usermoblieuid').val(uid);
                $("#usermstatus" + status).attr("checked", true);
                 layui.use([ 'form' ], function() {
                    var form = layui.form;
                    form.render();
                });
                $.layer({
                    type : 1,
                    title : '手机认证',
                    closeBtn : [ 0, true ],
                    offset : [ '80px', '' ],
                    border : [ 10, 0.3, '#000', true ],
                    area : [ '350px', '240px' ],
                    page : {
                        dom : '#userrenmoblie'
                    }
                }); 
            
            })

            
             /*身份认证*/
             $(".user_idcard").click(function(data){
                var useridstatus     = $(this).attr("data-status");//状态
                var useriduid        = $(this).attr("data-uid");//uid
                var useridcard       = $(this).attr("data-idcard");//身份证号码
                var useridurl        = $(this).attr("data-url");//身份证图片
                var pytoken=$('#pytoken').val();
                $(".job_box_div").html("<img src='"+useridurl+"' style='width:150px;height:80px' />");
	            if(useridurl){
                    $("#preview_url").attr("href",useridurl);
                    $("#preview_url").show();
                    $("#sfzrz").hide();
                }else{
                    $("#sfzrz").show();
                    $("#preview_url").hide();
                }
                
                $('#useriduid').val(useriduid);
                if(useridcard){
                    $('#userididcard').html(useridcard);
                }else{
                    $('#userididcard').html('暂无身份证号码');
                }
               
                $("#userstatus" + useridstatus).attr("checked", true);
                layui.use([ 'form' ], function() {
                    var form = layui.form;
                    form.render();
                });
                $.post("index.php?m=usercert&c=sbody", {uid: useriduid,pytoken: pytoken}, function(msg) {
					$("#usercontent").val(msg);
				});
                $.layer({
                    type : 1,
                    title : '身份认证',
                    closeBtn : [ 0, true ],
                    offset : [ '80px', '' ],
                    border : [ 10, 0.3, '#000', true ],
                    area : [ '350px', 'auto' ],
                    page : {
                    dom : '#preview'
                    }
                }); 
            })
            //批量认证
            function batch(name){
                var chk_value =[];  
               
                $('input[name="'+name+'"]:checked').each(function(){    
                    chk_value.push($(this).val());   
                });  
            
                if(chk_value.length==0){
                    layer.msg("请选择要批量认证的数据！",2,8);return false;
                }else{

                    $('#btachuid').val(chk_value);
                    $.layer({
                        type : 1,
                        title : '批量认证',
                        closeBtn : [ 0, true ],
                        offset : [ '80px', '' ],
                        border : [ 10, 0.3, '#000', true ],
                        area : [ '350px', '235px' ],
                        page : {
                            dom : '#batchrezhen'
                        }
                    }); 
                }
            }
			function toMember(url, usertype){
				if (usertype !='1'){
					if(usertype == '2'){
						parent.layer.confirm("该账户当前身份为招聘者，以求职者身份模拟进入可能导致部分功能无法正常使用，是否确认进入？", function() {
							parent.layer.closeAll();
							window.open(url);
						});
					}else{
						parent.layer.confirm("该账户当前未设置身份，以求职者身份模拟进入可能导致部分功能无法正常使用，是否确认进入？", function() {
							parent.layer.closeAll();
							window.open(url);
						});
					}
					
				}else{
					window.open(url);
				}
			}
        <?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </body>

</html><?php }} ?>
