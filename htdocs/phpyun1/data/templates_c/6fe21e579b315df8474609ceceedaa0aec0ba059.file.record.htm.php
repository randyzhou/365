<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 09:24:33
         compiled from "D:\rcw\uploads\app\template\member\com\record.htm" */ ?>
<?php /*%%SmartyHeaderCode:1478520325fab3d514aff51-93026998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fe21e579b315df8474609ceceedaa0aec0ba059' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\record.htm',
      1 => 1576479784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1478520325fab3d514aff51-93026998',
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
  'unifunc' => 'content_5fab3d514d4391_13840953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab3d514d4391_13840953')) {function content_5fab3d514d4391_13840953($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
  <div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <div class="com_tit"><span class="com_tit_span">我的简历</span></div>
      <div class=right_box>
      <div class=admincont_box>
     
      <div class="job_list_tit">
         <ul class="">
         <li <?php if ($_GET['c']=="hr") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=hr"  title="收到简历">收到简历</a></li>
         <li <?php if ($_GET['c']=="down") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=down"  title="您已下载的简历记录">已下载简历</a></li>
         <li <?php if ($_GET['c']=="talent_pool") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=talent_pool"  title="加入人才库的简历">收藏简历</a></li>
         <li <?php if ($_GET['c']=="look_resume") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=look_resume"  title="您浏览简历的记录">浏览简历</a></li>
         <li <?php if ($_GET['c']=="record") {?> class="job_list_tit_cur"<?php }?>><a href="index.php?c=record" title="网站为您推荐的简历">网站推荐简历</a></li>
         </ul>
         </div>
        <div class="com_body">      
        <div class=admin_textbox_04>
          <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
          <form action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del" target="supportiframe" method="post" id='myform' class="layui-form">
         
          <table class="com_table mt20" id="job_checkbokid" >
              <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
               
                <tr>
          <th width="20">&nbsp;</th>
          <th>姓名</th>
          <th>求职意向</th>
          <th>工作经验 </th>
          <th>期望薪资</th>
          <th>职位名称</th>
          <th>推送时间</th>
          <th width="160">操作</th>
        </tr>
       
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                   <tr>
					<td>
					<input type="checkbox" name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"   class="com_Release_job_qx_check" style="margin-top:2px;" lay-skin="primary"> </td>
				  
                <td><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`'),$_smarty_tpl);?>
" class="cblue" target=_blank><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</a></td> 
				<td align="center"><span class="yxjob_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobclassidname'];?>
</span></td> 
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
</td> 
               	<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['salary'];?>
&nbsp;</td> 
               <td align="center">
					<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$v.jobid`'),$_smarty_tpl);?>
" target="_blank" class="cblue"><?php echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>
&nbsp;</a>
				</td> 
				<td align="center"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],'%Y-%m-%d');?>
</td> 
				
				<td align="center"> 
					<?php if ($_smarty_tpl->tpl_vars['v']->value['userid_msg']==1) {?> 
						<font color="red">已邀请</font> 
					<?php } else { ?>  
						<a href="javascript:void(0);" onclick="inviteResume(this)" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['v']->value['resume_name'];?>
"class="com_received_username_yqms">邀请面试</a> 
					<?php }?>
         
				  <a href="javascript:void(0)" onclick="layer_del('确定删除该条信息？', 'index.php?c=record&act=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'); "class="com_bth cblue">删除</a> 
				 </td>
			  </tr>
                <?php } ?>
                <tr><td colspan="8" class="table_end"> 
                  <input id='checkAll'  type="checkbox"  lay-filter="allcom" class="com_Release_job_qx_check" lay-skin="primary">
                  全选</span>
                  <INPUT  class="c_btn_02" type="button" name="subdel" value="批量删除" onclick="return really('delid[]');">
                </td> </tr>
                <?php } else { ?>
                <tr><td colspan="8" class="table_end">   <div class="msg_no">
                  <p>网站暂时还没有为您推荐人才简历！  </p>
                 <a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit"  target="_blank">主动找人才</a>
                 </div> </td> </tr>
               <?php }?>
             <tr><td colspan="8" class="table_end" style="border:none">   <div class="diggg mt10 fltR"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div></td> </tr>
         
      
       </table>   
        </form>
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
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/yqms.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
