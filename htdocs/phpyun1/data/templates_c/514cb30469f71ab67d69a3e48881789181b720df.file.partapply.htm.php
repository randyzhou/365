<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:13:07
         compiled from "D:\rcw\uploads\app\template\member\com\partapply.htm" */ ?>
<?php /*%%SmartyHeaderCode:15056829735f9d9b230f4487-80395901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '514cb30469f71ab67d69a3e48881789181b720df' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\partapply.htm',
      1 => 1576479786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15056829735f9d9b230f4487-80395901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'jobname' => 0,
    'JobList' => 0,
    'one' => 0,
    'StateList' => 0,
    'now_url' => 0,
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9b231128a5_75897843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9b231128a5_75897843')) {function content_5f9d9b231128a5_75897843($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
	<div class="admin_mainbody"> 
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	
		<div class="com_tit"> <span class="com_tit_span">兼职报名</span> </div> 
    	
		<div class=right_box>
   			<div class=admincont_box>
    			<div class="com_body">
         			
         			<div class="com_new_tip"> 
          				<span class="com_new_tip_h">温馨小提示</span>共有 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 位求职者报名贵公司发布的兼职 
          			</div>
           
			  		<div class=admin_textbox_04>
			       		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
			          	<div class="hr_tip_box">
			          		<div class="hr_subMetx">
								
								<span class="hr_subMetx_span fltL">招聘职位：</span>
								
								<div class="text_seclet text_seclet_cur2 re">
			                		<input id="qypr" class="SpFormLBut text_seclet_w250" type="button" onclick="search_show('job_qypr');" <?php if ($_smarty_tpl->tpl_vars['jobname']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['jobname']->value;?>
"<?php } else { ?>value="全部职位"<?php }?> />
			                		
			                		<div id="job_qypr" class="cus-sel-opt-panel" style="display: none;">
					                  	<ul class="Search_Condition_box_list">
					                    	<li><a href="index.php?c=partapply&status=<?php echo $_GET['status'];?>
">全部职位</a></li>
					                  		<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['JobList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
					                        	<li> <a href="index.php?c=partapply&jobid=<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
&status=<?php echo $_GET['status'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a> </li>
                                <?php } ?>
                              </ul>
					                </div>
			              		</div>
							</div>
							
					     	<div class="hr_subMetx"> 
					         	<span class="hr_subMetx_span fltL">简历状态：</span>
				               	<a href="index.php?c=partapply&jobid=<?php echo $_GET['jobid'];?>
" class="hr_subMetx_a <?php if ($_GET['status']=='') {?>hr_subMetx_cur<?php }?>">不限</a>
				              	<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['StateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
				                	<a <?php if ($_GET['status']==$_smarty_tpl->tpl_vars['one']->value['id']) {?>class="hr_subMetx_cur"<?php }?> href="index.php?c=partapply&jobid=<?php echo $_GET['jobid'];?>
&status=<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</a>
				                <?php } ?>
							</div>
						</div>
					  
			       		<div class="clear"></div>
			          
						<form action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=del" target="supportiframe" method="post" id='myform' class='layui-form'> 
			      			<div class="clear"></div>
			           	
			           		<table class="com_table mt20">
				            	<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
				               	<tr> 
				                	<th>&nbsp;</th> 
				                 	<th>兼职名称</th> 
				                 	<th>姓名</th> 
				                 	<th>手机号码</th> 
				                	<th>性别</th> 
				                	<th>学历</th> 
				                	<th>申请时间</th> 
				                  	<th>标记状态</th> 
				                	<th>操作</th> 
				             	</tr>
								<?php }?>
				                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				              	<tr> 
				              		<td> <input type="checkbox" name="delid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" lay-skin="primary"> </td>
				                   	<td> <a href="<?php echo smarty_function_url(array('m'=>'part','c'=>'show','id'=>'`$v.jobid`'),$_smarty_tpl);?>
" target="_blank" class="uesr_name_a"><?php echo $_smarty_tpl->tpl_vars['v']->value['partname'];?>
</a></td> 
				                  	<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['name_n'];?>
&nbsp;</td>
				                   	<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['telphone'];?>
 &nbsp;</td> 
				                   	<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['sex_n'];?>
&nbsp;</td> 
								   	<td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['edu_n'];?>
&nbsp;</td> 
				                   	<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],'%Y-%m-%d');?>
 &nbsp;</td> 
				                  	<td align="center">  
				                    	<span class="com_mem_hr_list_bj <?php if ($_smarty_tpl->tpl_vars['v']->value['status']=='1') {?>com_mem_hr_list_bj_cur com_mem_hr_list_red<?php }?>" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' status='1'>  <i class="com_mem_hr_list_icon"></i>未查看<i class="com_mem_hr_no_icon"></i></span>
				                    	<span class="com_mem_hr_list_bj <?php if ($_smarty_tpl->tpl_vars['v']->value['status']=='2') {?>com_mem_hr_list_bj_cur<?php }?>" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' status='2'>  <i class="com_mem_hr_list_icon"></i>已查看</span>     
								   		<span class="com_mem_hr_list_bj <?php if ($_smarty_tpl->tpl_vars['v']->value['status']=='3') {?>com_mem_hr_list_bj_cur<?php }?>" name='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' status='3'>  <i class="com_mem_hr_list_icon"></i>已联系  </span>    
				            		</td>  
				            		<td align="center">
				       					<a href="javascript:void(0)" onclick="layer_del('确定删除该条信息？', 'index.php?c=partapply&act=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
'); " class="com_bth cblue">删除</a>
				             		</td>
				              	</tr>
				              	
				                 <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
				              	<tr>
					                <td colspan="9" class="table_end">
					                	<div class="msg_no">亲，暂时还没有求职者报名您发布的兼职职位哦~</div>
					                </td>
				                </tr>
				                <?php } ?>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
                                <tr>
				                	<td colspan="9" class="">
				                		<div class="com_Release_job_bot"> <span class="com_Release_job_qx">
					                  		<input id='checkAll'  type="checkbox" lay-filter="allcom" class="com_Release_job_qx_check" lay-skin="primary">全选</span>
					                  		<input class="c_btn_02" type="button" name="subdel" value="批量删除" onclick="return really('delid[]');" />
				                		</div>
                                        <div class="diggg mt10 fltR"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
				                	</td>
				                </tr> 
				             	  <?php }?>
                             
				      		</table>
						</form>
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
$(document).ready(function(){
	$(".com_mem_hr_list_bj").click(function(){
		var status=$(this).attr('status');
		var id=$(this).attr('name');
		$.post("index.php?c=partapply&act=status",{id:id,status:status},function(data){
			location.reload();
		});
	});
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
