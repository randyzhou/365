<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 02:02:52
         compiled from "D:\rcw\uploads\app\template\member\user\look.htm" */ ?>
<?php /*%%SmartyHeaderCode:1214309345f9da6ccd7be89-80567249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0466c8520a704bfa91df4ab0f0a85a04d100130d' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\look.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1214309345f9da6ccd7be89-80567249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'look' => 0,
    'log' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da6ccd96161_88562194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da6ccd96161_88562194')) {function content_5f9da6ccd96161_88562194($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <div class="yun_m_rightbox fltR mt20 re">
        <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">简历被浏览</span> <i class="member_right_h1_icon user_bg"></i></div>
       
<div  class="resume_Prompt_box">
<div  class="resume_Prompt"><i class="resume_Prompt_icon"></i>安全提醒：招聘企业无权收取任何费用，求职中请加强自我保护，避免上当受骗</div>
</div>
        <div class="remindbox01 mt10">
            <div id="gms_showclew"></div>
            <form action="index.php" method="get" target="supportiframe" id='myform' class="layui-form">
                <input type="hidden" name="c" value="look" />
                <input type="hidden" name="act" value="del" />
                <div class="resumelistbox01 mt10">
                    <div class="resume_box_list">
                     
                        <?php if (!empty($_smarty_tpl->tpl_vars['look']->value)) {?>
                        <div class="look_myresume_tit">
                            <div class="look_myresume_tit_checkbox">&nbsp;</div>
                            <div class="look_myresume_span look_myresume_comname">公司名称</div>
							  <div class="look_myresume_span look_myresume_jobname">在招职位</div>
                            <div class="look_myresume_span look_myresume_resumename">被浏览简历名称</div>
                            <div class="look_myresume_span look_myresume_resumetime">浏览时间</div>
                            <div class="look_myresume_span look_myresume_resumecz">操作</div>
                        </div>
                        <?php }?>
                        <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['look']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
                        <div class="look_myresume_list">
                            <div class="look_myresume_tit_checkbox">
                                <input type="checkbox" name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
" class="List_Title_span_check_b" lay-skin="primary">
                            </div>
                            <div class="look_myresume_span look_myresume_comname">
                            <?php if ($_smarty_tpl->tpl_vars['log']->value['com_name']) {?>
								<?php if ($_smarty_tpl->tpl_vars['log']->value['usertype']==2) {?>
                                <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$log.com_id`'),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['log']->value['com'];?>
" class="jobnotice_jobname_a">
                                <?php echo $_smarty_tpl->tpl_vars['log']->value['com_name'];?>

                                </a>
								<div class="look_myresume_comxz"><?php if ($_smarty_tpl->tpl_vars['log']->value['pr_n']) {
echo $_smarty_tpl->tpl_vars['log']->value['pr_n'];?>
 <span class="look_myresume_comline">|</span><?php }?> <?php echo $_smarty_tpl->tpl_vars['log']->value['mun_n'];?>
 <?php if ($_smarty_tpl->tpl_vars['log']->value['sdate']) {?> <span class="look_myresume_comline">|</span> <?php echo $_smarty_tpl->tpl_vars['log']->value['sdate'];?>
年<?php }?></div>
                                <?php } else { ?>
                                <a href="<?php echo smarty_function_url(array('m'=>'lietou','c'=>'headhunter','uid'=>'`$log.com_id`'),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['log']->value['com'];?>
" class="jobnotice_jobname_a">
                                <?php echo $_smarty_tpl->tpl_vars['log']->value['com_name'];?>

                                </a>
								<div class="look_myresume_comxz"><?php echo $_smarty_tpl->tpl_vars['log']->value['title_n'];?>
<span class="look_myresume_comline">|</span><?php echo $_smarty_tpl->tpl_vars['log']->value['lt_exp'];
if ($_smarty_tpl->tpl_vars['log']->value['time']) {?><span class="look_myresume_comline">|</span><?php echo $_smarty_tpl->tpl_vars['log']->value['time'];?>
年<?php }?></div>
                                <?php }?>
                            <?php } else { ?>暂无名称！ <div class="look_myresume_comxz">该企业还未没有完善公司信息</div><?php }?>
							
                            </div>
							<div class="look_myresume_span look_myresume_jobname look_myresume_jobbox mt15"><?php if ($_smarty_tpl->tpl_vars['log']->value['jobname']) {
echo $_smarty_tpl->tpl_vars['log']->value['jobname'];
} else { ?>暂无职位<?php }?></div>
                            <div class="look_myresume_span look_myresume_resumename mt15"><?php echo $_smarty_tpl->tpl_vars['log']->value['resume_name'];?>
&nbsp;</div>
                            <div class="look_myresume_span look_myresume_resumetime mt15"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['datetime'],'%Y-%m-%d');?>
</div>
                            <div class="look_myresume_span look_myresume_resumecz  mt15">
                                <a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=look&act=del&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
');" class="cblue">
                                删除
                                </a>
                            </div>
                        </div>
                        <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
                       <div class="msg_no">
      <p>亲爱的用户，暂无谁看过我的简历，想要获得更多的工作机会，</p>
  <p>立即搜索我感兴趣的职位投递简历吧！</p>
<a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" target="_blank" class="msg_no_sq uesr_submit">立即搜索我感兴趣的职位>></a>
</div>
                        <?php } ?>
                        <?php if ($_smarty_tpl->tpl_vars['look']->value) {?>
                         <div class="job_operation_bot">
                                <input id='checkAll' type="checkbox"  lay-filter="alluser" class="job_operation_botcheckbox" lay-skin="primary">
                        
                            <input type="button" name="subdel" value="批量删除" onclick="return really('del[]');" class="job_operation_bth">
                        </div>
                        
                        
                        
                        
                        <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                        <?php }?>
                    </div>
                </div>

            </form>
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
