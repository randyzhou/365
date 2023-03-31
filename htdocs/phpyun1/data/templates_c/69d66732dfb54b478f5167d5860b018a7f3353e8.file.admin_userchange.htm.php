<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 03:06:30
         compiled from "D:\rcw\uploads\app\template\admin\admin_userchange.htm" */ ?>
<?php /*%%SmartyHeaderCode:4583961965f9db5b6806ce5-08556986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69d66732dfb54b478f5167d5860b018a7f3353e8' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\admin_userchange.htm',
      1 => 1576479745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4583961965f9db5b6806ce5-08556986',
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
    'pagenum' => 0,
    'pages' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9db5b6832f04_32442557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9db5b6832f04_32442557')) {function content_5f9db5b6832f04_32442557($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
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
        <div id="status_div" style="display:none; width: 350px; ">
            <div class="" style=" margin-top:10px; ">
                <form class="layui-form" action="index.php?m=admin_userchange&c=status" target="supportiframe" method="post" id="lockform">
                    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
                         <tr>
                            <th>当前类型：</th>
                            <td align="left"><div id="presusertype"></div></td>
                        </tr>
                           <tr>
                            <th>申请类型：</th>
                            <td align="left"><div id="applyusertype"></div></td>
                        </tr>
                        <tr>
                            <th>申请说明：</th>
                            <td align="left"><textarea id="applybody" name="applybody" class="admin_explain_textarea"></textarea> </td>
                        </tr>
                        <tr>
                            <th width="80">审核操作：</th>
                            <td align="left">
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <div class="admin_examine_right">
                                            <input name="status" id="status1" value="1" title="同意" type="radio" />
                                            <input name="status" id="status2" value="2" title="拒绝" type="radio" />
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>审核说明：</th>
                            <td align="left"> <textarea id="statusbody" name="statusbody" class="admin_explain_textarea"></textarea> </td>
                        </tr>
                        <tr>
                            <td colspan='2' align="center"><input type="button" value='确认' onClick="lockform();" class="admin_examine_bth">
                                <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'></td>
                        </tr>
                    </table>
                        <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
                        <input name="uid" value="0" type="hidden">
                        <input name="moblie" value="0" type="hidden">
                        <input name="id" value="0" type="hidden">
                </form>
            </div>
        </div>      
        <div class="infoboxp">
        
            <div class="admin_new_tip">
                <a href="javascript:;" class="admin_new_tip_close"></a>
                <a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
                <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                <div class="admin_new_tip_list_cont">
                    <div class="admin_new_tip_list">该页面展示了网站所有的会员申请转换信息。可以进行审核操作</div>
                    <div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="admin_new_search_box">
                <form action="index.php" name="myform" method="get">
                    <input name="m" value="admin_userchange" type="hidden" />
                    <div class="admin_new_search_name">搜索类型：</div>
                    <div class="admin_Filter_text formselect" did='dkeytype'>
                        <input type="button" <?php if ($_GET['keytype']==''||$_GET['keytype']=='1') {?> value="用户名" <?php } elseif ($_GET['keytype']=='2') {?> value="用户ID" <?php }?> class="admin_Filter_but" id="bkeytype">

                        <input type="hidden" name="type" id="keytype" <?php if ($_GET['keytype']==''||$_GET['keytype']=='1') {?> value="1" <?php } elseif ($_GET['keytype']=='3') {?> value="3" <?php }?>/>
                        <div class="admin_Filter_text_box" style="display:none" id="dkeytype">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('1','keytype','用户名')">用户名</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onClick="formselect('2','keytype','用户ID')">用户ID</a>
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
              <em class="admin_statistics_s">待确认：<span class="StatusNum3">0</span></em>
              搜索结果：<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>；
            </div>
            <div class="clear"></div>

            <div class="table-list">
                <div class="admin_table_border">
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form action="index.php?m=admin_userchange&c=del" target="supportiframe" name="myform" method="post" id='myform'>
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
                                        <a href="index.php?m=admin_userchange&order=desc&t=uid">用户UID<img src="images/sanj.jpg" /></a>
                                      <?php } else { ?>
                                        <a href="index.php?m=admin_userchange&order=asc&t=uid">用户UID<img src="images/sanj2.jpg" /></a> 
                                      <?php }?>
                                    </th>
                                    <th align="left">用户名</th>
                                    <th align="left">联系电话</th> 
                                     <th align="left">申请方式</th>
                                     <th align="left">当前类型</th>
                                    <th align="left">申请类型</th>
                                    <th align="left">申请时间</th>
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
                                    <td width="20"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
                                    <td align="left" class="td1" style="width:60px;">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>

                                    </td>
                                    <td align="left">
                                      <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>


                                    </td>
                                          <td align="left">
                                        <div>
                                           <span class="admin_new_sj"><?php echo $_smarty_tpl->tpl_vars['v']->value['moblie'];?>
</span> 
                                        </div>
                                    </td>
                                    <td align="left"><?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1) {?>用户申请<?php } else { ?>管理员转换<?php }?></td>
                                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['pres_usertype'];?>
</td>
                                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['apply_usertype'];?>
</td>
                                  	<td align="left">
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['apply_time'],"%Y-%m-%d");?>

                                    </td>
                                    <td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['status']=='1') {?><span class="admin_com_Audited">已确认</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']=='2') {?><span class="admin_com_tg">已拒绝</span><?php } else { ?><span class="admin_com_noAudited">待确认</span><?php }?>
                                    </td>
                                     
                                    <td align="center">
                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['status']!=1) {?>
                                        <a href="javascript:;" class="admin_new_c_bth admin_new_c_bthsh status" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" presusertype="<?php echo $_smarty_tpl->tpl_vars['v']->value['pres_usertype'];?>
" moblie="<?php echo $_smarty_tpl->tpl_vars['v']->value['moblie'];?>
" applyusertype="<?php echo $_smarty_tpl->tpl_vars['v']->value['apply_usertype'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" applybody="<?php echo $_smarty_tpl->tpl_vars['v']->value['applybody'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
">审核</a>
                                        <?php }?>
                                        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_userchange&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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
				$.get("index.php?m=admin_userchange&c=memNum", function(data) {
					var datas = eval('(' + data + ')');
					if(datas.memAllNum) {
					  $('.ajaxall').html(datas.memAllNum);
					}
					if(datas.memStatusNum3) {
					  $('.StatusNum3').html(datas.memStatusNum3);
					}
				});
                $(".status").click(function() {
                    
                    $("#presusertype").html($(this).attr("presusertype"));
                    $("#applyusertype").html($(this).attr("applyusertype"));
                    $("input[name=pid]").val($(this).attr("pid"));
                    $("input[name=moblie]").val($(this).attr("moblie"));
                    $("input[name=id]").val($(this).attr("id"));
                    $("#applybody").val($(this).attr("applybody"));
                    var uid = $(this).attr("pid");
                    var id = $(this).attr("id");
                    var status = $(this).attr("status");
                    $("#status" + status).attr("checked", true);
                    layui.use(['form'], function() {
                        var form = layui.form;
                        form.render();
                    });
                    $("input[name=uid]").val(uid);
                    $.get("index.php?m=admin_userchange&c=lockinfo&id=" + id, function(msg) {
                        $("#statusbody").val($.trim(msg));
                        status_div('申请切换身份操作', '450', '360');
                    });
                });
              });
              function lockform(){
              	var status=$("input[name='status']:checked").val();

                if(status=="" && status=='undefined'){
                  parent.layer.msg('请选择审核操作！', 2, 8);return false;
                }else if(status==2){
                  var statusbody=$.trim($("textarea[name='statusbody']").val());
                  if(statusbody==""){
                      parent.layer.msg('请填写审核说明！', 2, 8);return false;
                  }
                }
                loadlayer();
                $('#lockform').submit()
              }
        <?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </body>

</html><?php }} ?>
