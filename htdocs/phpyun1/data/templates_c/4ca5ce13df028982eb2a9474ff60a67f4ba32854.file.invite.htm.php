<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 17:39:26
         compiled from "D:\rcw\uploads\app\template\member\com\invite.htm" */ ?>
<?php /*%%SmartyHeaderCode:542703105fb78eceb1dd75-64720690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ca5ce13df028982eb2a9474ff60a67f4ba32854' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\invite.htm',
      1 => 1576734981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '542703105fb78eceb1dd75-64720690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'now_url' => 0,
    'rows' => 0,
    'v' => 0,
    'statis' => 0,
    'com_look' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb78eceb3f1a5_63302624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb78eceb3f1a5_63302624')) {function content_5fb78eceb3f1a5_63302624($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_function_Url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.Url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
<div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="com_tit"> <span class="com_tit_span">面试邀请</span> </div>
  <div class=right_box>
    <div class=admincont_box>
      
      <div class="com_body">
      <div class="com_new_tip"> 
          <span class="com_new_tip_h">温馨小提示</span>面试邀请若求职者没有回复，可下载简历后，拨打电话进行联系   </div>
          
      
        <div class="clear"></div>
        <div class="joblist_search">
          <form action="index.php" method="get">
            <div class="joblist_search_box">
              <input name="c" type="hidden" value="<?php echo $_GET['c'];?>
">
              <input name="keyword" id="keyword" type="text" class="joblist_search_box_text" value="<?php echo $_GET['keyword'];?>
" placeholder="请输入简历关键字">
              <input name="" type="submit" class="joblist_search_bth" value="搜索">
            </div>
          </form>
        </div>
        <div class="clear"></div>
        <div class=admin_textbox_04>
          <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
          <form action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del" method="post" target="supportiframe" id='myform' class="layui-form">
            <div id="job_checkbokid" >
            <table class="com_received_resume mt20">
            <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
            <tr>
              <th width="20">&nbsp;</th>
              <th>基本信息</th>
              <th>面试职位</th>
             <th>联系电话</th>
            <th> 邀请时间</th>
              <th>状态 </th>
              <th width="160">操作</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <tr>
              <td width="20"><input type="checkbox" name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"   class="com_Release_job_qx_check" lay-skin="primary"></td>
             
              <td>
              
              <div class=""><?php if (!$_smarty_tpl->tpl_vars['v']->value['eid']) {?><font color="red">简历已删除</font><?php } else { ?><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['eid']),$_smarty_tpl);?>
" target=_blank class="yun_m_jobname_a" id='name<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'><?php if ($_smarty_tpl->tpl_vars['v']->value['down']==1) {
echo $_smarty_tpl->tpl_vars['v']->value['realname'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['name'];
}?></a><?php }?></div>
              <div class="invite_info"> <span class="invite_user_job">意向：<?php echo $_smarty_tpl->tpl_vars['v']->value['jobclassname'];?>
</span> </div>
                <div class="invite_info"><?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
经验<span class="com_received_userinfo_line">|</span><?php echo $_smarty_tpl->tpl_vars['v']->value['edu'];?>
学历</div></td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
   
                 </td>
				<td align="center">
					<?php if ($_smarty_tpl->tpl_vars['v']->value['down']=="1"||in_array($_smarty_tpl->tpl_vars['statis']->value['rating'],$_smarty_tpl->tpl_vars['com_look']->value)) {?> 

						<span class="com_received_tel"><?php echo $_smarty_tpl->tpl_vars['v']->value['telphone'];?>
</span>

					<?php } elseif ($_smarty_tpl->tpl_vars['statis']->value['down_resume']>0) {?>
												
						<a class="com_received_tellook" href="javascript:void(0);" onclick="isDownResume('<?php echo $_smarty_tpl->tpl_vars['v']->value['eid'];?>
','<?php echo smarty_function_Url(array('m'=>'ajax','c'=>'for_link'),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['statis']->value['down_resume'];?>
')">查看联系方式</a>
					
					<?php } else { ?> 

						<a class="com_received_tellook" href="javascript:void(0);" onclick="downResume('<?php echo $_smarty_tpl->tpl_vars['v']->value['eid'];?>
','<?php echo smarty_function_Url(array('m'=>'ajax','c'=>'for_link'),$_smarty_tpl);?>
')">查看联系方式</a>

					<?php }?> 
                 </td>
              <td align="center"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['datetime'],'%Y-%m-%d');?>

              </td>
              <td align="center"> 
              		<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="1") {?> 
              				<span class="tip_no"><i class="tip_no_icon"></i>对方未回复</span> 
              		<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="2") {?>
                			已查看
                	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="3") {?> 
                			<font color="#008000">已同意</font> 
                	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="4") {?> 
                			<font color="#FF00000">已拒绝</font> 
                	<?php }?> 
              </td>
              <td align="center"><a href="javascript:getcont('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="com_bth cblue">邀请函</a> <a href="javascript:void(0)" onclick="layer_del('确定要删除？', '<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="com_bth cblue">删除</a></td>
            </tr>
            <?php } ?>
            <tr>
              <td colspan="7" class=""><div class="com_Release_job_bot">
                <span class="com_Release_job_qx">
                <input id='checkAll'  type="checkbox"  lay-filter="allcom" lay-skin="primary" class="com_Release_job_qx_check">
                全选</span>
                <INPUT  class="c_btn_02" type="button" name="subdel" value="批量删除" onclick="return really('delid[]');"></div>
                <div class="diggg" ><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div></td>
            </tr>
            <?php } elseif ($_GET['keyword']!='') {?>
            <tr>
              <td colspan="7" class="table_end"><div class="msg_no">
                  <p>没有搜索邀请记录。</p>
                  <a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit" target="_blank">我要主动找人才</a> </div></td>
            </tr>
            <?php } else { ?>
            <tr>
              <td colspan="7" class="table_end"><div class="msg_no">
                  <p> 亲爱的用户，目前您还没有邀请人才面试记录！</p>
                  <a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit" target="_blank">我要主动找人才</a> </div></td>
            </tr>
            <?php }?>
       
          </table>
        </div> 
          </form>
      </div>
    </div>
  </div>
</div>
<!-- 邀请函弹出框 Start -->
<div id="getcont" style="width:100%; display:none;">
  <div class="aud_face">
    <div class="audition_list"><span class="audition_list_span"></span></div>
    <div  style="padding:10px;">
      <div class="invitation_user">尊敬的 <span class="invitation_user_name" id='manname'></span> 您好!</div>
      <div class="invitation_cont">&nbsp;&nbsp;&nbsp;&nbsp;经过人力资源部的初步筛选,我们认为您基本具备 <i class="invitation_cont_job"  id="jobname"></i> 岗位的任职资格，因此正式邀请您来我公司参加面试。</div>
      <div class="invitation_cont_tip">具体详见如下：</div>
      <div class="invitation_cont_p"><span class="invitation_cont_pn">【面试时间】</span><em class="audition_list_e" id="intertime"></em></div>
      <div class="invitation_cont_p"><span class="invitation_cont_pn">【面试地址】</span><em class="audition_list_e" id="address"></em></div>
      <div class="invitation_cont_p nocontent"><span class="invitation_cont_pn">【面试备注】</span><em class="" id="content"></em></div>
      <div class="invitation_cont_p"><span class="invitation_cont_pn">【联系方式】</span><em class="audition_list_e" id="linkman"></em> ( TEL：<em class="invitation_cont_tel" id="linktel"></em> )</div>
    </div>
    <div class="invitation_cont_jy">
      <div class="invitation_cont_d">特此邀请&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
      <div class="invitation_cont_d"><em class="" id="comname"></em>&nbsp;&nbsp;&nbsp;&nbsp;</div>
      <div class="invitation_cont_d"><em class="" id="datetime"></em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    </div>
  </div>
</div>
<!-- 邀请函弹出框 End --> 
<?php echo '<script'; ?>
>
	layui.use(['form','layer', 'laydate'], function(){
    	var $ = layui.$,
			form = layui.form,
			laydate = layui.laydate,
			layer = layui.layer;
    	
    	form.on('checkbox(allcom)', function (data) {
       	 	$("input[name='delid[]']").each(function () {
            	this.checked = data.elem.checked;
        	});
 
        	form.render('checkbox');
      	});
    });
    function getcont(id) {
        $.post("index.php?c=invite&act=ajax", { id: id }, function (data) {
            var data = eval('(' + data + ')');
            $("#comname").html(data.comname);
            $("#jobname").html(data.jobname);
            $("#manname").html($('#name'+id).text());
            $("#linkman").html(data.linkman);
            $("#linktel").html(data.linktel);
            $("#intertime").html(data.intertime);
            $("#address").html(data.address);
			if(data.content){
				$("#content").html(data.content);
			}else{
				$(".nocontent").attr("style","display: none;");
			}
            
            $("#datetime").html(data.datetime);
            $.layer({
                type: 1,
                title: '面试邀请函',
                shade: [0],
                closeBtn: [0, true],
                border: [10, 0.3, '#000', true],
                area: ['600px', 'auto'],
                page: { dom: "#getcont" }
            });
        })
    }
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
