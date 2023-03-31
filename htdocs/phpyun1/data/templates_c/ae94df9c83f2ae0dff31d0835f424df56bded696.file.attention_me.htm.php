<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 17:47:16
         compiled from "D:\rcw\uploads\app\template\member\com\attention_me.htm" */ ?>
<?php /*%%SmartyHeaderCode:5294507765f9e8424baff24-26333849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae94df9c83f2ae0dff31d0835f424df56bded696' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\attention_me.htm',
      1 => 1576734981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5294507765f9e8424baff24-26333849',
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
  'unifunc' => 'content_5f9e8424bd08f4_14000109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9e8424bd08f4_14000109')) {function content_5f9e8424bd08f4_14000109($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
<div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <div class="com_tit"> <span class="com_tit_span">关注我的人才</span>
  </div><div class=right_box>
    <div class=admincont_box>
  
  
      <div class="com_body">
       <div class="com_new_tip"> 
          <span class="com_new_tip_h">温馨小提示</span>关注贵公司的人才，邀请面试成功率更高！</div>
      
          <div class="clear"></div>
       
           
      <div class="joblist_search" style="margin-top:0px; padding-bottom:0px;">
		<form action="index.php" method="get">
			<div class="joblist_search_box">
		
             <input name="c" type="hidden" value="attention_me">
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
&act=del" target="supportiframe" method="post" id='myform'>
 <table class="com_table mt20" id="job_checkbokid">
             
              <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
               <tr>
              
              <th >姓名</th>
              <th>意向职位</th>
              <th>工作经验 </th>
              <th>学历</th>
              <th>关注时间</th>
                <th>邀请面试</th>
              <th width="160">操作</th>
            </tr>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <tr>
              
                
               <td align="center">  <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`'),$_smarty_tpl);?>
"  class="com_Release_name" target=_blank><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
&nbsp;</a></td>
               <td align="center"> <span class="invite_user_job"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
&nbsp;</span></td>
               <td align="center"> <?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
</td>
               <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['edu'];?>
</td>
               <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['time'],'%Y-%m-%d');?>
</td>
                 <td align="center"> <?php if ($_smarty_tpl->tpl_vars['v']->value['userid_msg']==1) {?> 
				<font color="red">已邀请</font> 
			<?php } else { ?> 
				<a href="javascript:;" onclick="inviteResume(this)" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
" class="com_received_username_yqms" >邀请面试</a> 
			<?php }?>  </td>
               <td align="center">
			<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$v.eid`'),$_smarty_tpl);?>
" target="_blank"class=" com_bth cblue">查看简历</a>
               </td>
              </tr>
                <?php } ?>
               <tr>
                  <td colspan="8" class="table_end">
                 
                  <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                 </td>
          
                </tr>
                <?php } elseif ($_GET['keyword']!='') {?>
                 <tr>
                  <td colspan="8" class="table_end"> <div class="msg_no">没有搜索关注我企业的人才。 </div>
                    </td>
          
                </tr>
                <?php } else { ?>
                  <tr>
                  <td colspan="8" class="table_end"> <div class="msg_no">亲爱的用户，目前还没有人才关注您。
                   <p>您可以主动邀请人才面试</p>
                   <a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="com_msg_no_bth com_submit">我要主动找人才</a></div>
                     </td>
          
                </tr>
                <?php }?></table>
          </form>
        </div>
      </div></div></div>
    </div>
  </div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/yqms.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
