<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 03:04:02
         compiled from "D:\rcw\uploads\app\template\member\user\commsg.htm" */ ?>
<?php /*%%SmartyHeaderCode:9646371655f9db522374970-50470852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb37e64a801ae1ef0dc437996295b4fba5cc83b' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\commsg.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9646371655f9db522374970-50470852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'log' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9db522391336_83283312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9db522391336_83283312')) {function content_5f9db522391336_83283312($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
    
            <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">求职咨询</span> <i class="member_right_h1_icon user_bg"></i></div>
        <div  class="resume_Prompt_box">
        <div  class="resume_Prompt"><i class="resume_Prompt_icon"></i>求职咨询,请耐心等待企业回复！</div></div>
       
       
       
       
       
        <div id="gms_showclew"></div>
        <div id="" class="resume_box_list">
        <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
            <div class="job_Consulting_tit">
                <span class="job_Consulting_span job_Consulting_jobname">职位名称</span>
                <span class="job_Consulting_span job_Consulting_comname">企业名称</span>
                <span class="job_Consulting_span job_Consulting_jobtime">咨询时间</span>
                <span class="job_Consulting_span job_Consulting_jobcz">操作</span>
            </div>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
            <div class="job_Consulting_list ">
            
            <div class="job_Consulting_span  job_Consulting_jobname">
            <?php if ($_smarty_tpl->tpl_vars['log']->value['job_name']) {?>
           
                    <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$log.jobid`'),$_smarty_tpl);?>
" class="job_Consulting_jobname_a" target="_blank"><?php echo $_smarty_tpl->tpl_vars['log']->value['job_name'];?>
</a> 
                   
                  <?php } else { ?> 
                    无
                   <?php }?>    
                    </div>
            
            
            
               
                 <div class="job_Consulting_span job_Consulting_comname">

                    
                   <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$log.job_uid`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['log']->value['com_name'];?>
</a>
                      
                
                </div>
                  <div class="job_Consulting_span job_Consulting_jobtime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['datetime'],'%Y-%m-%d');?>
</div>
                 <div class="job_Consulting_span job_Consulting_jobcz">
                    <a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=commsg&act=del&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
');" class="List_dete cblue">删除</a>
                </div>
                <div class="job_Consulting_box">
                    <i class="List_Title_span_zx_icon"></i>
                    
                    
                    
                   <div class="job_Consulting_my">
                   <div class="job_Consulting_my_box">
                   <span class="job_Consulting_my_ask">我的咨询：</span><?php echo $_smarty_tpl->tpl_vars['log']->value['content'];?>
</div>
                   </div>
                   <span class="List_Title_content_Advisory_r">
                    <?php if ($_smarty_tpl->tpl_vars['log']->value['reply']!='') {?>
                    <a href="javascript:;" class="" id="<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
"></a>
                    <?php } else { ?>
                      <div class="job_Consulting_my">  <div class=""><span class="job_Consulting_zt"><i class="job_Consulting_zticon"></i>该企业尚未回复，请耐心等待,您也可以拨打该企业电话进行电话咨询</span></div></div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['log']->value['reply']!='') {?>
                       <div class="job_Consulting_my">
                     <div class="job_Consulting_com">
                        <i class="job_Consulting_icon"></i>
                    <div class="" id="msg<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
">
                    企业回复：<?php echo $_smarty_tpl->tpl_vars['log']->value['reply'];?>

                       <div class="job_Consulting_hftime">  回复时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['reply_time'],'%Y-%m-%d');?>
</div>
                        
                    </div> </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
            <div class="msg_no"> 您还没有咨询信息。</div>
            <?php } ?>
        </div>
        <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
