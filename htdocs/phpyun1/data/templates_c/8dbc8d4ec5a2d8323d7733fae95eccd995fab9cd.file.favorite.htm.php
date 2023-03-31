<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-02 02:32:23
         compiled from "D:\rcw\uploads\app\template\member\user\favorite.htm" */ ?>
<?php /*%%SmartyHeaderCode:5622502465f9eff3704eca1-70781001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dbc8d4ec5a2d8323d7733fae95eccd995fab9cd' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\favorite.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5622502465f9eff3704eca1-70781001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgnum' => 0,
    'rows' => 0,
    'job' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9eff37069685_53795146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9eff37069685_53795146')) {function content_5f9eff37069685_53795146($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
    
     <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">我的职位</span> <i class="member_right_h1_icon user_bg"></i></div>
    <div id="gms_showclew"></div>
    <form action="index.php" method="get" target="supportiframe" id='myform' class="layui-form">
      <input type="hidden" name="c" value="favorite" />
      <input type="hidden" name="act" value="del" />
     <div class="job_list_tit"> <ul class="">
	<li <?php if ($_GET['c']=='invite') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=invite">面试通知</a><?php if ($_smarty_tpl->tpl_vars['msgnum']->value) {?><i class="job_list_tit_cur"><?php echo $_smarty_tpl->tpl_vars['msgnum']->value;?>
</i><?php }?></li>
      <li <?php if ($_GET['c']=='job') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=job">申请的职位</a></li>
      <li <?php if ($_GET['c']=='favorite') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=favorite">职位收藏</a></li>
      <li <?php if ($_GET['c']=='look_job') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=look_job">浏览的职位 </a></li>
	</ul> </div>
	<div class="resume_box_list  mt20"><?php if (empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
        <div class="msg_no">
          <p>亲爱的用户，您还没有收藏过职位</p>
          <p>你可以去搜索职位，并将心仪的职位添加到收藏夹中！</p>
          <a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" target="_blank" class="msg_no_sq uesr_submit">立即搜索心仪的职位>></a> </div>
        <?php } else { ?>

		    <div class="job_collection_tit">
         <div class="job_collection_span job_collection_span_checkbox">&nbsp;</div>
          <div class="job_collection_span job_collection_job">收藏的职位</div>
          <div class="job_collection_span job_collection_job">企业名称</div>
          <div class="job_collection_span job_collection_xz">薪资待遇</div>
           <div class="job_collection_span job_collection_add">工作地点</div>
           <div class="job_collection_span job_collection_zt">招聘状态</div> 
             <div class="job_collection_span job_collection_cz">操作</div> 
           </div>
        <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
  <div class="job_collection_list">

  <div class="job_collection_span job_collection_span_checkbox">  <input type="checkbox" name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" lay-skin="primary" class="interview_application_checkbox_input"></div>

       <div class="job_collection_span job_collection_job">

		
          <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job.job_id`'),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
" class="interview_application_name"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
</a> 
         
		  </div>
 <div class="job_collection_span job_collection_job">
          <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$job.com_id`'),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
"class=""><?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
 </a></div>
		<div class="job_collection_span job_collection_xz"> 
			&nbsp;<?php echo $_smarty_tpl->tpl_vars['job']->value['salary'];?>

		</div>
           <div class="job_collection_span job_collection_add">&nbsp;<?php echo $_smarty_tpl->tpl_vars['job']->value['cityname'];?>
</div>
           <div class="job_collection_span job_collection_zt">&nbsp;<?php echo $_smarty_tpl->tpl_vars['job']->value['statename'];?>
</div> 
             <div class="job_collection_span job_collection_cz"> <a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=favorite&act=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="re_sc cblue">删除</a> </div> 

           </div>

        <?php } ?>
        <?php }?> 
		</div>
      <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
       <div class="job_operation_bot">
        <input id="checkAll" type="checkbox" lay-filter="alluser" lay-skin="primary" class="job_operation_botcheckbox">
      
        <input type="button" name="subdel" value="批量删除" onclick="return really('del[]');" class="job_operation_bth">
      </div>


      <div class="diggg" style="float:right; margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
      <?php }?>
    </form>
  </div>
</div>
<?php echo '<script'; ?>
>
	layui.use(['form','layer', 'laydate'], function(){
    	var $ = layui.$,
			form = layui.form,
			laydate = layui.laydate,
			layer = layui.layer;
    	
    	form.on('checkbox(alluser)', function (data) {
       	 	$("input[name='del[]']").each(function () {
            	this.checked = data.elem.checked;
        	});
        	form.render('checkbox');
      	});
  	});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
