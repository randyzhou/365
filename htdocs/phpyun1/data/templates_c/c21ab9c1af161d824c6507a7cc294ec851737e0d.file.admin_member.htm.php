<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:52:02
         compiled from "D:\rcw\uploads\app\template\admin\admin_member.htm" */ ?>
<?php /*%%SmartyHeaderCode:15384943575f9d25b22786d3-02225728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c21ab9c1af161d824c6507a7cc294ec851737e0d' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_member.htm',
      1 => 1576583345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15384943575f9d25b22786d3-02225728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'total' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'source' => 0,
    'Dname' => 0,
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d25b22b28b6_57127954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d25b22b28b6_57127954')) {function content_5f9d25b22b28b6_57127954($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
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

        <div id="status_div" style="display:none; width: 350px; ">
            <div class="" style=" margin-top:10px; ">
                <form class="layui-form" action="index.php?m=admin_member&c=lock" target="supportiframe" method="post" id="lockform">
                    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                        <tr>
                            <th width="80">锁定操作：</th>
                            <td align="left">
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <div class="admin_examine_right">
                                            <input name="status" id="status1" value="1" title="正常" type="radio" />
                                            <input name="status" id="status2" value="2" title="锁定" type="radio" />
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>锁定说明：</th>
                            <td align="left"> <textarea id="alertcontent" name="lock_info" class="admin_explain_textarea"></textarea> </td>
                        </tr>
                        <tr>
                            <td colspan='2' align="center"><input type="button" value='确认' onClick="lockform();" class="admin_examine_bth">
                                <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></td>
                        </tr>
                    </table>
                        <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        <input name="uid" value="0" type="hidden">
                </form>
            </div>
        </div>
      <div id="status_usertype" style="display:none; width: 350px; ">
            <div class="" style=" margin-top:10px; ">
                <form class="layui-form" action="index.php?m=admin_member&c=userchange" target="supportiframe" method="post" id="typeform">
                    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                          <tr>
                            <th width="80">用户名：</th>
                            <td align="left">
                             <div id="username"></div>
                            </td>
                        </tr>
                         <tr>
                            <th width="80">当前会员：</th>
                            <td align="left">
                                <div id="usertypeid"></div>
                            </td>
                        </tr>
                        <tr>
                            <th width="80">转换会员：</th>
                            <td align="left">
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <div class="admin_examine_right">
                                            <input name="applyusertype" id="applyusertype" value="1" title="个人会员" type="radio" />
                                            <input name="applyusertype" id="applyusertype" value="2" title="企业会员" type="radio" />
                                            
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                           <tr>
                            <th>转换说明：</th>
                            <td align="left"> <textarea id="statusbody" name="statusbody" class="admin_explain_textarea"></textarea> </td>
                        </tr>
                        <tr>
                            <td colspan='2' align="center"><input type="button" value='确认' onClick="typeform();" class="admin_examine_bth">
                                <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></td>
                        </tr>
                    </table>
                        <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        <input name="uid" id="uid" value="0" type="hidden">
                        <input name="usertype" id="usertype" value="0" type="hidden">
                </form>
            </div>
        </div>          
        <div class="infoboxp">
        
            <div class="admin_new_tip">
                <a href="javascript:;" class="admin_new_tip_close"></a>
                <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
                <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                <div class="admin_new_tip_list_cont">
                    <div class="admin_new_tip_list">该页面展示了网站所有的会员信息，可对会员进行编辑修改操作。</div>
                    <div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
                    <div class="admin_new_tip_list">当前账户为已锁定状态，涉及到（个人,企业）相关数据无法进行审核操作。</div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="admin_new_search_box">
                <form action="index.php" name="myform" method="get">
                    <input name="m" value="admin_member" type="hidden" />
                    <div class="admin_new_search_name">搜索类型：</div>
                    <div class="admin_Filter_text formselect" did='dkeytype'>
                        <input type="button" <?php if ($_GET['keytype']==''||$_GET['keytype']=='1') {?> value="用户名" <?php } elseif ($_GET['keytype']=='2') {?> value="手机号"<?php } elseif ($_GET['keytype']=='3') {?> value="用户ID" <?php }?> class="admin_Filter_but" id="bkeytype">

                        <input type="hidden" name="type" id="keytype" <?php if ($_GET['keytype']==''||$_GET['keytype']=='1') {?> value="1" <?php } elseif ($_GET['keytype']=='2') {?> value="2" <?php } elseif ($_GET['keytype']=='3') {?> value="3" <?php }?>/>
                        <div class="admin_Filter_text_box" style="display:none" id="dkeytype">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('1','keytype','用户名')">用户名</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('2','keytype','手机号')">手机号</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('3','keytype','用户ID')">用户ID</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type="text" value="" placeholder="请输入你要搜索的关键字" name='keyword' class="admin_new_text">
                    <input type="submit" value="搜索" name='search' class="admin_new_bth">
                    <a href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();" class="admin_new_search_gj">高级搜索</a>
                </form>
                
                <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            
            <div class="clear"></div>
            <div class="admin_statistics">
                  数据统计：
              <em class="admin_statistics_s">总数：<span class="ajaxall">0</span></em>
              <em class="admin_statistics_s">已锁定：<span class="StatusNum3">0</span></em>
              搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
            </div>
            <div class="clear"></div>

            <div class="table-list">
                <div class="admin_table_border">
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form action="index.php?m=admin_member&c=del" target="supportiframe" name="myform" method="post" id='myform'>
						<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        <table width="100%">
                            <thead>
                                <tr class="admin_table_top">
                                    <th style="width:20px;">
                                      <label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)' /></label>
                                    </th>
                                    <th align="left"> 
                                      <?php if ($_GET['t']=="uid"&&$_GET['order']=="asc") {?>
                                        <a href="index.php?m=admin_member&order=desc&t=uid">用户ID<img src="images/sanj.jpg" /></a>
                                      <?php } else { ?>
                                        <a href="index.php?m=admin_member&order=asc&t=uid">用户ID<img src="images/sanj2.jpg" /></a> 
                                      <?php }?>
                                    </th>
                                    <th align="left">用户名</th>
                                    <th align="left">当前身份</th>
                                    <th align="left">手机号/邮箱</th> 
                                    <th align="left">登录/注册</th>  
                                    <th align="left">来源</th>
                                    <th align="left">站点</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <tr <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg" <?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
                                    <td width="20"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
                                    <td align="left" class="td1" style="width:60px;">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>

                                    </td>
                                    <td align="left">
                                      <?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>

                                       
                                    </td>
                                    <td align="left"><?php if ($_smarty_tpl->tpl_vars['v']->value['usertype']) {
if ($_smarty_tpl->tpl_vars['v']->value['usertype']==1) {?>个人会员<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['usertype']==2) {?>企业会员<?php }?>
                                      <?php if ($_smarty_tpl->tpl_vars['v']->value['pid']<1) {?>
                                      <div class="mt5">
                                            <a href="javascript:;" onclick="checkusertype('<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['moblie'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['usertype'];?>
');" class="admin_cz_sc">转换身份</a>
                                        </div>
                                        <?php }?>
                                        <?php }?>
                                    </td>
                                    
                                    <td align="left">
                                        <div>
                                           <span class="admin_new_sj"><?php echo $_smarty_tpl->tpl_vars['v']->value['moblie'];?>
</span> 
                                        </div>
                                        <div>
                                           <span class="admin_new_yx"><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</span> 
                                        </div>
            
                                    </td>

                                    <td class="td" align="left">
                                    <div><?php if ($_smarty_tpl->tpl_vars['v']->value['login_date']!='') {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['login_date'],"%Y-%m-%d");?>
 
                                    <?php } else { ?><font color="#FF0000">从未登录</font>
                                    <?php }?></div>
                                    <div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['reg_date'],"%Y-%m-%d");?>
</div>
                                    </td>
                                    <td class="td" align="left"><?php echo $_smarty_tpl->tpl_vars['source']->value[$_smarty_tpl->tpl_vars['v']->value['source']];?>
</td>
                                    <td class="td" align="left">
                                        <div><?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['v']->value['did']];?>
</div>
                                        <div class="mt5">
                                            <a href="javascript:;" onclick="checksite('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
','index.php?m=admin_member&c=checksitedid');" class="admin_cz_sc">重新分配</a>
                                        </div>
                                    </td>
                                    <td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['status']=='1') {?><span class="admin_com_Audited">已审核</span><?php } else { ?><span class="admin_com_Lock">已锁定</span><?php if ($_smarty_tpl->tpl_vars['v']->value['lock_info']) {?><a href="javascript:;" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
" class="admin_cz_sc status">查看说明</a><?php }
}?>
                                    </td>
                                     
                                    <td align="center">
                                        <a href="javascript:;" class="admin_new_c_bth admin_new_c_bthsd status" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
">锁定</a>
                                        <a href="index.php?m=admin_member&c=edit&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="admin_new_c_bth admin_n_sc mt5">修改</a><br>
                                        <a href="javascript:void(0);" onClick="resetpw('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_mmcz mt5">密码</a>
                                        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_member&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                <td align="center"><label for="chkall2"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></label></td>
                                    <td colspan="12"><label for="chkAll2">全选</label> &nbsp;
                                        <input class="admin_button" type="button" name="delsub" value="删除所选" onclick="return really('del[]')" />
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
				$(".job_name_all").hover(function(){
					var pid=$(this).attr('v');
					if($.trim(pid)!=''){
						layer.tips(pid, this, {guide: 1, style: ['background-color:#5EA7DC; color:#fff;top:-7px', '#5EA7DC']}); 
						$(".xubox_layer").addClass("xubox_tips_border");
					} 
				},function(){
					layer.closeAll('tips');
				});
				$.get("index.php?m=admin_member&c=memNum", function(data) {
					var datas = eval('(' + data + ')');
					if(datas.memAllNum) {
					  $('.ajaxall').html(datas.memAllNum);
					}
					if(datas.memStatusNum3) {
					  $('.StatusNum3').html(datas.memStatusNum3);
					}
				});
                $(".status").click(function() {
                    $("input[name=pid]").val($(this).attr("pid"));
                    var uid = $(this).attr("pid");
                    var status = $(this).attr("status");
                    $("#status" + status).attr("checked", true);
                    layui.use(['form'], function() {
                        var form = layui.form;
                        form.render();
                    });
                    $("input[name=uid]").val(uid);
                    $.get("index.php?m=admin_member&c=lockinfo&uid=" + uid, function(msg) {
                        $("#alertcontent").val($.trim(msg));
                        status_div('锁定用户', '350', '240');
                    });
                });
              });
              function lockform(){
                loadlayer();
                $('#lockform').submit()
              }
              function typeform(){
                var usertype=$("#usertype").val();
                var applyusertype=$('input[name="applyusertype"]:checked').val(); 
                if(applyusertype>0){
                  if(applyusertype==usertype){
                    parent.layer.msg('选择转换类型与当前类型一致，无须转换！', 2, 8);return false;
                  }
                }else{
                   parent.layer.msg('请选择转换类型！', 2, 8);return false;
                }
                loadlayer();
                $('#typeform').submit()
              }
              function statusform(){
                loadlayer();
                $('#statusform').submit()
              }
              
              function resetpw(uname,uid){
                var pytoken = $('#pytoken').val();
                var pwcf = parent.layer.confirm("确定要重置密码吗？",function(){
                  $.get("index.php?m=admin_member&c=reset_pw&uid="+uid+"&pytoken="+pytoken,function(data){
                    parent.layer.close(pwcf);
                    loadlayer();
                    parent.layer.alert("用户："+uname+" 密码已经重置为123456！", 9);
                    parent.layer.closeAll('loading');
                    
                  });
                });
              }
				function checkusertype(pid,moblie,username,uid,usertype){
                
                    if(usertype==1){
                      $("#usertypeid").html('个人会员');
                    }else if(usertype==2){
                      $("#usertypeid").html('企业会员');
                    }
                    $("input[name=uid]").val(uid);
                    $("input[name=moblie]").val(moblie);
                    $("input[name=usertype]").val(usertype);
                    $("#username").html(username);
					$.layer({
                        type : 1,
                        title :'转换身份',
                        closeBtn : [0 , true],
                        border : [10 , 0.3 , '#000', true],
                        area : ['350px','340px'],
                        page : {dom :"#status_usertype"}
					});
				}

        <?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </body>

</html><?php }} ?>
