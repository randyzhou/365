<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:13:18
         compiled from "D:\rcw\uploads\app\template\member\com\msg.htm" */ ?>
<?php /*%%SmartyHeaderCode:18960122015f9d9b2ee24704-42487134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0063844468ae45decfe603df0b7e776a4b30580' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\msg.htm',
      1 => 1579576792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18960122015f9d9b2ee24704-42487134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'msg' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9b2ee3a259_04822217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9b2ee3a259_04822217')) {function content_5f9d9b2ee3a259_04822217($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
    <div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="right_box">
               <div class="com_tit"><span class="com_tit_span">求职咨询</span></div><div class="admincont_box">
             
                <div class="clear"></div>
                <div class="com_body" >
                <div class="com_new_tip">
		
						<span class="com_new_tip_h">温馨小提示</span>回复请勿输入电话，QQ，邮箱等联系方式
					</div>
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <table class="com_table mt20">
                       <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                        <tr>
                            <th>咨询人 </th>
                            <th>企业/职位名称</th>
                            <th>咨询时间</th>
                            <th>咨询内容</th>
                            <th>回复状态 </th>
                            <th>操作</th>
                        </tr>
						<?php }?>
                     <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
                        <tr>
                            
							<td align="center">
                                <?php if ($_smarty_tpl->tpl_vars['msg']->value['eid']) {?>
									<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$msg.eid`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['msg']->value['username'];?>
</a>
								<?php } else { ?>
									<div><?php echo $_smarty_tpl->tpl_vars['msg']->value['username'];?>
</div><span class="job_hr_job_cz_line">(暂无简历)</span> 	
								<?php }?>
							</td>

                            <td align="center"> 
                            <?php if ($_smarty_tpl->tpl_vars['msg']->value['job_name']) {?>
                            
                                <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$msg.jobid`'),$_smarty_tpl);?>
" class="cblue"><?php echo $_smarty_tpl->tpl_vars['msg']->value['job_name'];?>
</a>
                                <?php } else { ?>
                                无
                                <?php }?>
                                
                                </td>
                            <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['msg']->value['datetime'],'%Y-%m-%d');?>
</td>
                            <td align="center"><?php echo mb_substr($_smarty_tpl->tpl_vars['msg']->value['content'],0,20,'utf-8');?>
</td>
                            <td align="center"> <?php if ($_smarty_tpl->tpl_vars['msg']->value['reply']!='') {?>
                                <a href="javascript:void(0)" onclick="show_reply('<?php echo $_smarty_tpl->tpl_vars['msg']->value['reply'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['msg']->value['reply_time'],'%Y-%m-%d %H:%M:%S');?>
')" style="color:#999"><span style="font-size:12px;color:#f00; text-decoration:underline; margin-left:5px;">查看我的回复</span></a> <?php } else { ?> <span onclick="reply_msg('<?php echo $_smarty_tpl->tpl_vars['msg']->value['id'];?>
');" class="com_bth cblue">回复TA</span> <?php }?> </td>
                            <td align="center">
                                <a href="javascript:void(0)" onclick="layer_del('您确定要删除？', 'index.php?c=msg&act=del&id=<?php echo $_smarty_tpl->tpl_vars['msg']->value['id'];?>
'); " class=" com_bth cblue">删除</a>
                            </td>
                        </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['msg']->_loop) {
?>
                        <tr>
                            <td colspan="6" class="table_end">
                                <div class="msg_no">亲 , 暂时还没有求职者向贵公司提出疑问哦~</div>
                            </td>
                        </tr>
                        <?php } ?>
                         <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                        <tr>
                            <td colspan="6" class="table_end">
                                <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                            </td>
                        </tr>
                           <?php }?> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    function show_reply(msg,time) {
        $("#msgs").html(msg);
        $("#msgrtime").html(time);
        var layindex = $.layer({
            type: 1,
            title: '查看回复',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['400px', 'auto'],
            page: {
                dom: "#showmsg"
            }
        });
        $("#layindex").val(layindex);
    }

    function reply_msg(id) {
		$("#msgid").val(id);
		loadlayer();
		$.post('index.php?c=msg&act=getContent',{id : id}, function(data){
			layer.closeAll('loading');
			var data = eval('(' + data + ')');
			$(".user_ask .user_ask_c").html(data.content);
			var layindex = $.layer({
				type: 1,
				title: '咨询内容',
				closeBtn: [0, true],
				border: [10, 0.3, '#000', true],
				area: ['440px', 'auto'],
				page: {
					dom: "#status_div"
				}
			});
			$("#layindex").val(layindex);
		})
	}

    function check_msg() {
        if($.trim($("#content").val()) == "") {
            layer.msg('回复内容不能为空！', 2, 8);
            return false;
        }
    }
<?php echo '</script'; ?>
>
<div id="showmsg" style="display:none; width: 400px;">
  
        <div class="user_hf_cont" >
        
            <div class="">回复内容：<span id="msgs" class="user_ask_h"></span>
            </div>
             <div class="user_hf_time">回复时间：<span id="msgrtime"></span></div>
            
        </div>
   
</div>
<div id="status_div" style="display:none; width: 440px;">
    <div class="user_ask_cont">
        <form action="index.php?c=msg&act=save" target="supportiframe" method="post" id="formstatus" onsubmit="return check_msg();">
            
                <div class="user_ask">咨询内容：<span class="user_ask_c"></span>  </div>
                
                <div class="user_ask_tit">我的回复：</div>
                <div>
                    <input type="hidden" id="msgid" name="id" value="" />
                    <textarea id="content" name="reply" class="user_ask_textarea" placeholder="回复信息，请勿输入电话，QQ，邮箱等联系方式"></textarea>
                </div>
                <div class="user_ask_bth">
                    <input type="submit" name='submit' value='提交' class="user_ask_bth_b"> 
                   <!-- &nbsp;&nbsp;<input type="button" onClick="layer.close($('#layindex').val());" class="cancel_btn" value='取消'>-->
                </div>
       
            <input name="msgid" value="0" id='msgid' type="hidden">
        </form>
    </div>
</div>     
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
