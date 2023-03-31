<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 09:24:31
         compiled from "D:\rcw\uploads\app\template\member\com\talent_pool.htm" */ ?>
<?php /*%%SmartyHeaderCode:3545607705fab3d4fb74044-09441194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5d51c174b724c47bbaa586c36ce4826602ea862' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\talent_pool.htm',
      1 => 1587896120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3545607705fab3d4fb74044-09441194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'now_url' => 0,
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab3d4fb8fec9_62332062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab3d4fb8fec9_62332062')) {function content_5fab3d4fb8fec9_62332062($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
<div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="com_tit"><span class="com_tit_span">我的简历</span></div>  <div class=right_box>
    <div class=admincont_box>
   
     <div class="job_list_tit">
         <ul class="">
         <li <?php if ($_GET['c']=="hr") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=hr">收到简历</a></li>
         <li <?php if ($_GET['c']=="down") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=down">已下载简历</a></li>
         <li <?php if ($_GET['c']=="talent_pool") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=talent_pool">收藏简历</a></li>
         <li <?php if ($_GET['c']=="look_resume") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=look_resume">浏览简历</a></li>
         <li <?php if ($_GET['c']=="record") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=record">网站推荐简历</a></li>
         </ul>
         </div>
           <div class="clear"></div>
      <div class="com_body">
       <div class="joblist_search">
           <form action="index.php" method="get">
              <div class="joblist_search_box">
                 <input name="c" type="hidden" value="talent_pool">
                 <input name="keyword" type="text" class="joblist_search_box_text" placeholder="请输入简历关键字" value="<?php echo $_GET['keyword'];?>
">
               <input name="" type="submit" class="joblist_search_bth" value="搜索">
              </div>
            </form>
          </div>
          <div class="clear"></div>
          
        <div class=admin_textbox_04>
          <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
          <form action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del" target="supportiframe" method="post" id='myform' class="layui-form">
       
            <table class="com_table mt20" id="job_checkbokid"> 
               <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
                <tr>
                <th width="20">&nbsp;</th>
                <th>姓名</th>
                <th>求职意向</th>
                <th>工作经验 </th>
                <th>期望薪资</th>
                <th>收藏时间</th>
                 <th>邀请面试</th>
                <th width="120">操作</th>
              </tr>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
               <tr>
                <td>
                  <input type="checkbox" name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"   class="com_Release_job_qx_check" style="margin-top:2px;" lay-skin="primary">
                  </td> 
                   <td>  
                   <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`'),$_smarty_tpl);?>
" class="com_Release_name" target=_blank><?php if ($_smarty_tpl->tpl_vars['v']->value['down']==1) {
echo $_smarty_tpl->tpl_vars['v']->value['username_n'];
} else {
echo $_smarty_tpl->tpl_vars['v']->value['name'];
}?></a></td> 
                  <td align="center"><span class="invite_user_job"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
&nbsp;</span></td> 
                 <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
</td> 
                   <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['salary'];?>
&nbsp;</td> 
                  <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],'%Y-%m-%d');?>
&nbsp;</td> 
                   <td align="center"> 
						<?php if ($_smarty_tpl->tpl_vars['v']->value['userid_msg']==1) {?> 
							<font color="red">已邀请</font> 
						<?php } else { ?> 
							<a href="javascript:void(0);" onclick="inviteResume(this)" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" class="com_received_username_yqms" style="position:relative; "> 邀请面试</a> <?php }?> </td> 

                   <td align="center"><a href="javascript:;" class="com_bth cblue" onclick="remark('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['remark'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
');">备注</a><a href="javascript:void(0)" onclick="layer_del('确定要删除？','<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="com_bth cblue">删除</a></td> 
                </tr>
                <?php } ?>
                 <tr>
                <td colspan="8" class="">
                <div>
                  <div class="com_Release_job_bot"> <span class="com_Release_job_qx">
                    <input id='checkAll'  type="checkbox" lay-filter="allcom" lay-skin="primary" class="com_Release_job_qx_check">
                    全选</span>
                    <input  class="c_btn_02" type="button" name="subdel" value="批量删除" onclick="return really('delid[]');">
                  </div>
                  <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                </div>
                </td>
              </tr>
                <?php } elseif ($_GET['keyword']!='') {?>
                 <tr>
                <td colspan="7" class="table_end">
                 <div class="msg_no">
                   <p>没有搜索到简历记录！</p>
                   <a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit"  target="_blank">主动找人才</a></div>
                   </td>
              </tr>
                <?php } else { ?>
                 <tr>
                <td colspan="7" class="table_end">
                <div class="msg_no">
                   <p>亲爱的用户，目前还没有收藏简历记录！</p>
                   <a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit"  target="_blank">主动找人才</a></div>
                   </td>
              </tr>
                <?php }?> 
                </table>
            <div> </div>
          </form>
          <div class="clear"></div>
          <div class="infoboxp22" id="infobox" style="display:none; ">
            <div>
              <form action="index.php?c=talent_pool&act=remark" method="post" id="formstatus" target="supportiframe">
                <input name="id" value="0" type="hidden">
                <input name="rname" value="0" type="hidden">
                <div class="bz_textarea" >
                  <textarea id="remark"  name="remark" class="bz_textarea_text"></textarea>
                </div>
                <div class="bz_textarea_bot" >
                  <button type="submit" name='submit' value='1' class="com_pop_bth_qd" >确认</button>
                  &nbsp;&nbsp;
                  <button type="button" id='zxxCancelBtn'  class="com_pop_bth_qx">取消</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
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
function remark(id,remark,name){
	$("input[name=id]").val(id);
	$("#remark").val(remark);
	$("input[name=rname]").val(name); 
	$.layer({
		type : 1,
		title :'备注', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['300px','200px'],
		page : {dom :"#infobox"}
	});
}
$(document).ready(function(){ 
	$('#zxxCancelBtn').click(function(){
		layer.closeAll();
	}); 
}); 
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/yqms.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
