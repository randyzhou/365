<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-06 18:40:11
         compiled from "D:\rcw\uploads\app\template\resume\wordresume.htm" */ ?>
<?php /*%%SmartyHeaderCode:17583039275fa5280b145539-37412332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b899f66339d267587bd07f1a95d4a162719ef3a0' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\resume\\wordresume.htm',
      1 => 1576479773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17583039275fa5280b145539-37412332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'Info' => 0,
    'UserMember' => 0,
    'key' => 0,
    'v' => 0,
    'one' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5280b1a5e19_26740815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5280b1a5e19_26740815')) {function content_5fa5280b1a5e19_26740815($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><html xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:w="urn:schemas-microsoft-com:office:word"
      xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
      xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<xml>
<w:WordDocument>
<w:View>Print</w:View>
</w:WordDocument>
</xml>
<title>简历</title>
</head>
<body style="background:#dfdfdf;width:100%; margin:0 auto">

<table width="100%" border="0" class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px">
  <tr>
    <td><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];?>
"></td>
    <td style="font-size:12px; margin:0 auto;border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px">
    电话：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>

   </td>
  </tr>
</table>
<br/>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="resume_tmpl4" bgcolor="#fff" style="font-size:12px; margin:0 auto;border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px">
  <tbody>
     <tr style="background:#ffffff">
  <td>
   <table width="100%" cellspacing="5" cellpadding="0" class="resume_table_bg" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px">
              <tbody>
                <tr style="background:#ffffff">
              <td colspan="5" height="38" align="center" ><b style="font-size:16px;">个人简历</b></td>
              </tr>	
                <tr style="background:#ffffff">
                  <td width="70" height="38"   align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">姓&nbsp;&nbsp;名</td>
                  <td align="center"><?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>

                    <?php if ($_smarty_tpl->tpl_vars['UserMember']->value['source']==6&&$_smarty_tpl->tpl_vars['UserMember']->value['claim']==0&&$_smarty_tpl->tpl_vars['UserMember']->value['email']!='') {?> <a class="resume_rz " href="javascript:void(0);" onClick="claim('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'claim','uid'=>$_smarty_tpl->tpl_vars['Info']->value['uid']),$_smarty_tpl);?>
')">认领</a> <?php }?></td>
                  <td width="70" height="38" align="center" class="resume_table_blod"style=" font-weight:bold; font-size:12px; background:#ededed">性&nbsp;&nbsp;别</td>
                  <td align="center" ><?php echo $_smarty_tpl->tpl_vars['Info']->value['job_sex'];?>
</td>
                  <td width="100" height="140"  align="center" rowspan="3"><img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" width="70" height="70"/></td>
                </tr>
                   <tr style="background:#ffffff">
                  <td width="70" height="38"  align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">年&nbsp;&nbsp;龄</td>
                  <td h align="center" ><?php echo $_smarty_tpl->tpl_vars['Info']->value['age'];?>
</td>
                  <td width="70"height="38"  align="center"  class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">所在城市</td>
                  <td class="tmpl_mod_hoverBg " align="center" ><?php echo $_smarty_tpl->tpl_vars['Info']->value['living'];?>
</td>
                </tr>
                    <tr style="background:#ffffff">
                  <td width="70" height="38"  align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">最高学历</td>
                  <td class="tmpl_mod_hoverBg "  align="center"  height="22"><?php echo $_smarty_tpl->tpl_vars['Info']->value['useredu'];?>
 </td>
                  <td width="70" align="center"height="38"   class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">工作年限</td>
                  <td class="tmpl_mod_hoverBg " height="38" align="center" ><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_exp'];?>
 </td>
                </tr>
              </tbody>
            </table>
      <?php if ($_smarty_tpl->tpl_vars['Info']->value['basic_info']=='1') {?>
	  <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_marriage']||$_smarty_tpl->tpl_vars['Info']->value['domicile']||$_smarty_tpl->tpl_vars['Info']->value['weight']||$_smarty_tpl->tpl_vars['Info']->value['height']||$_smarty_tpl->tpl_vars['Info']->value['nationality']) {?>
      <table width="100%" border="0" cellspacing="0" cellpadding="5" class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px">
        <tbody>
               <tr style="background:#ffffff">
		   <td width="70"  height="38"  align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">基本情况</td>
            <td><div class="one_vita_Basic_info_c"> 
				<?php if ($_smarty_tpl->tpl_vars['Info']->value['user_marriage']) {?><span class="one_vita_Identity"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_marriage'];?>
</span> <span class="yun_resume_info_line">|</span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Info']->value['domicile']) {?><span class="one_vita_Identity">户籍：<?php echo $_smarty_tpl->tpl_vars['Info']->value['domicile'];?>
 </span> <span class="yun_resume_info_line">|</span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Info']->value['weight']||$_smarty_tpl->tpl_vars['Info']->value['height']) {?><span class="one_vita_Identity"><?php if ($_smarty_tpl->tpl_vars['Info']->value['height']) {
echo $_smarty_tpl->tpl_vars['Info']->value['height'];?>
CM/<?php }
if ($_smarty_tpl->tpl_vars['Info']->value['weight']) {?> <?php echo $_smarty_tpl->tpl_vars['Info']->value['weight'];?>
KG<?php }?> </span> <span class="yun_resume_info_line">|</span><?php }?>    
                <?php if ($_smarty_tpl->tpl_vars['Info']->value['nationality']) {?><span class="one_vita_Identity"><?php echo $_smarty_tpl->tpl_vars['Info']->value['nationality'];?>
</span><?php }?> </div>
			</td>
			</tr>
        </tbody>
      </table>
	   <?php }?>
      <?php }?>
     <table width="100%" border="0" cellspacing="0" cellpadding="5" class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px">
            <tbody>
                 <tr style="background:#ffffff">
                <td width="70"  class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">求职意向</td>
                <td class="resume_table_td_p" style="line-height:25px;">
                  <div>意向岗位：<?php echo $_smarty_tpl->tpl_vars['Info']->value['customjob'];?>
</div>
                  <div>从事行业：<?php echo $_smarty_tpl->tpl_vars['Info']->value['hy'];?>
</div>
                  <div>工作地点：									
                  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['expectcity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
										<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?> 
											<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;
										<?php }?> 
                  <?php } ?>
                  <div>期望薪资：<?php echo $_smarty_tpl->tpl_vars['Info']->value['salary'];?>
</div>
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['report']) {?><div>到岗时间：<?php echo $_smarty_tpl->tpl_vars['Info']->value['report'];?>
</div><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['jobstatus']) {?><div>求职状态：<?php echo $_smarty_tpl->tpl_vars['Info']->value['jobstatus'];?>
</div><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['type']) {?><div>期望工作性质：<?php echo $_smarty_tpl->tpl_vars['Info']->value['type'];?>
</div><?php }?>
                  <div class="yun_resume_job_intention_list_end">工作职能：<?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
</div>
                </td>
              </tr>
            </tbody>
          </table>
          <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_work'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_work'])) {?> 
          <!--工作经历-->
          
          <table width="100%" border="0" cellspacing="0" cellpadding="5" class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px" >
            <tbody>
                 <tr style="background:#ffffff">
                <td width="70"   align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed" >工作经历</td>
                <td class="resume_table_td_p"  style="line-height:25px;"><div class="yun_resume_tabulation"> <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                    <div class="yun_resume_exp_list ">
                      <div class="yun_resume_exp_timt"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
-<?php if ($_smarty_tpl->tpl_vars['one']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");
} else { ?>至今<?php }?>&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</b>&nbsp;&nbsp;<span class="yun_resume_exp_name_job"><b><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</b></span> </div>
                      <?php if ($_smarty_tpl->tpl_vars['one']->value['content']) {?><div class="yun_resume_exp_p">描述：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
</div><?php }?>
                    </div>
                    <?php } ?> </div>
              </tr>
            </tbody>
          </table>
          <?php }?>
          <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_edu'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_edu'])) {?> 
          <!--教育经历-->
          
          <table width="100%" border="0" cellspacing="0" cellpadding="5" class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px" >
            <tbody>
                 <tr style="background:#ffffff">
                <td width="70"   align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">教育经历</td>
                <td  class="resume_table_td_p"  style="line-height:25px;"><div class=""> <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                    <div class="yun_resume_exp_list ">
                      <div class="yun_resume_exp_timt"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
-<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");?>
&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</b>&nbsp;&nbsp;<span class="yun_resume_exp_name_job"><b><?php echo $_smarty_tpl->tpl_vars['one']->value['specialty'];?>
</b></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['one']->value['education_n'];?>
学历</div>
                    </div>
                    <?php } ?> </div></td>
              </tr>
            </tbody>
          </table>
          <?php }?>
          <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_tra'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_tra'])) {?> 
          <!--培训经历-->
          
          <table width="100%" border="0" cellspacing="0" cellpadding="5" class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px" >
            <tbody>
                 <tr style="background:#ffffff">
                <td width="70"   align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">培训经历</td>
                <td  class="resume_table_td_p"  style="line-height:25px;"><div class=""> <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_tra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                    <div class="yun_resume_exp_list  ">
                      <div class="yun_resume_exp_timt"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");?>
&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</b>&nbsp;&nbsp;<span class="yun_resume_exp_name_job"><b><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</b></span></div>
                      <div class="yun_resume_exp_p"> 描述：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
 </div>
                    </div>
                    <?php } ?> </div></td>
              </tr>
            </tbody>
          </table>
          <?php }?>
          <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_skill'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_skill'])) {?> 
          <!--专业技能-->
          
          <table width="100%" border="0" cellspacing="0" cellpadding="5" class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px" >
            <tbody>
                 <tr style="background:#ffffff">
                <td width="70"   align="center" class="resume_table_blod"  style=" font-weight:bold; font-size:12px; background:#ededed">职业技能</td>
                <td  class="resume_table_td_p" style="line-height:25px;"><div class="resume_skill resume_skill_table"> <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                    <div class=""> <i class="resume_skill_icon"></i>
                      <div  class=" "> 技能名称：<b><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</b><?php if ($_smarty_tpl->tpl_vars['one']->value['longtime']) {?><span class="yun_resume_exp_name_job">&nbsp;&nbsp;掌握时间：<?php echo $_smarty_tpl->tpl_vars['one']->value['longtime'];?>
年</span><?php }?></div>
                     <?php if ($_smarty_tpl->tpl_vars['one']->value['picurl']) {?> <div class=" zs_imgbox">技能证书：<img src="<?php echo $_smarty_tpl->tpl_vars['one']->value['picurl'];?>
"  width="95" height="70"  style="vertical-align:middle"></div><?php }?>
                    </div>
                    <?php } ?> </div></td>
              </tr>
            </tbody>
          </table>
          <?php }?>
          <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_xm'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_xm'])) {?> 
          <!--项目经验-->
          
          <table width="100%" border="0" cellspacing="0" cellpadding="5" class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px" >
            <tbody>
                 <tr style="background:#ffffff">
                <td width="70"   align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">项目经验</td>
                <td class="resume_table_td_p"  style="line-height:25px;"><div class=""> <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_xm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                    <div class="yun_resume_exp_list ">
                      <div class="yun_resume_exp_timt"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['sdate'],"%Y.%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one']->value['edate'],"%Y.%m");?>
&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</b>&nbsp;&nbsp;<span class="yun_resume_exp_name_job"><b><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</b></span></div>
                      <div class="yun_resume_exp_p"> <?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
 </div>
                    </div>
                    <?php } ?> </div></td>
              </tr>
            </tbody>
          </table>
          <?php }?>
          
          <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_other'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_other'])) {?> 
          <!--附加信息-->
          
          <table width="100%" border="0" cellspacing="0" cellpadding="5" class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px" >
            <tbody>
                   <tr style="background:#ffffff">
                <td width="70"   align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">其他信息</td>
                <td class="resume_table_td_p" style="line-height:25px;"><div class="resume_skill resume_skill_table"> <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                    <div class=""> <i class="resume_skill_icon"></i>标题：<b><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</b>
                      <?php if ($_smarty_tpl->tpl_vars['one']->value['content']) {?><div class="yun_resume_exp_p">内容：<?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
</div><?php }?>
                    </div>
                    <?php } ?> </div></td>
              </tr>
            </tbody>
          </table>
          <?php }?> 
          <!-- 我的作品--> 
          <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_show'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_show'])) {?>
          <table width="100%" border="0" cellspacing="0" cellpadding="5"  class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px" >
            <tbody>
                  <tr style="background:#ffffff">
                <td width="70"   align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">我的作品</td>
                <td  class="resume_table_td_p"  style="line-height:25px;"><div class="fairs_introduction_p" >
                    <div class="fairs_introduction_img"> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" width="180" height="130" style="margin-right:5px;" />&nbsp;
                      <?php } ?> </div>
                  </div>
                  </div></td>
              </tr>
            </tbody>
          </table>
          <?php }?> 
          
          <?php if (!empty($_smarty_tpl->tpl_vars['Info']->value['description'])) {?> 
          <!--自我评价-->
          
          <table width="100%" border="0"cellspacing="0" cellpadding="5" class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px" >
            <tbody>
                 <tr style="background:#ffffff">
                <td width="70"   align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">自我评价</td>
                <td  class="resume_table_td_p" style="line-height:25px;"><div class="resume_skill resume_skill_table">
                    <div class=""><i class="resume_skill_icon"></i>
                      <div class="yun_resume_exp_p"><?php echo $_smarty_tpl->tpl_vars['Info']->value['description'];?>
</div>
                    </div>
                  </div>
                  
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['arrayTag']) {?>
                 <div class="yun_resume_exp_p">
		
		   <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['arrayTag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		  <span class="resume_user_bq"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
		  <?php } ?>
		  
		  </div><?php }?>
                  </td>
              </tr>
            </tbody>
          </table>
          <?php }?> 
          
          <!--联系方式-->
          
          <table width="100%" border="0" cellspacing="0" cellpadding="5"  class="resume_table_bg resume_table_bg_nt" style="border-collapse:collapse; background:#ffffff; margin:0 auto; font-family:微软雅黑; font-size:12px" >
            <tbody>
                  <tr style="background:#ffffff">
                <td width="70"   align="center" class="resume_table_blod" style=" font-weight:bold; font-size:12px; background:#ededed">联系方式</td>
                <td  class="resume_table_td_p" style="line-height:25px;"> 
                  
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['telphone']) {?>
                  <div class="one_vita_Intention one_vita_Intention_w420"><i class="one_vita_Intention_i one_vita_red"></i>手机：<?php echo $_smarty_tpl->tpl_vars['Info']->value['telphone'];?>
</div>
                  <?php }?>
                  
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['telhome']) {?>
                  <div class="one_vita_Intention"><i class="one_vita_Intention_i one_vita_red"></i>座机：<?php echo $_smarty_tpl->tpl_vars['Info']->value['telhome'];?>
 </div>
                  <?php }?>
                  
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['email']) {?>
                  <div class="one_vita_Intention one_vita_Intention_w420"><i class="one_vita_Intention_i one_vita_red"></i>电子邮箱：<?php echo $_smarty_tpl->tpl_vars['Info']->value['email'];?>
 </div>
                  <?php }?>
                  
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['wxewm']) {?>
                  <div class="one_vita_Intention"><i class="one_vita_Intention_i one_vita_red"></i>个人二维码： 
                  <img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['wxewm'];?>
"  width="58" height="38" />
                  </div>
                  <?php }?>
                  
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['homepage']) {?>
                  <div class="one_vita_Intention"><i class="one_vita_Intention_i one_vita_red"></i>个人主页：<?php echo $_smarty_tpl->tpl_vars['Info']->value['homepage'];?>
</div>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['qq']) {?>
				  <div class="one_vita_Intention"><i class="one_vita_Intention_i one_vita_red"></i>联系Q Q：<?php echo $_smarty_tpl->tpl_vars['Info']->value['qq'];?>
</div>
  				  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['address']) {?>
                  <div class="one_vita_Intention one_vita_Intention_w420"><i class="one_vita_Intention_i one_vita_red"></i>详细地址：<?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];?>
</div>
                  <?php }?>
                  
                  
                  <?php if ($_smarty_tpl->tpl_vars['Info']->value['idcard']) {?>
                  <div class="one_vita_Intention one_vita_Intention_w420"><i class="one_vita_Intention_i one_vita_red"></i><span>身份证号</span>
                   <span class="one_vita_Identity"> <?php echo $_smarty_tpl->tpl_vars['Info']->value['idcard'];?>

                     </span> </div>
                  <?php }?> 
                 </div>
                  </td>
              </tr>
            </tbody>
          </table>
          
          
          </td>
      </tr>
        </tbody>
      
  </table>
  <br/>
  <br/>
  <div style="text-align:center; line-height:30px;">
  	<img  src="<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode']) {
echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];
}?>"   width="120" height="120">
    <br/>
    关注微信公众号获取更多人才招聘信息
  </div>
</body>
</html>
<?php }} ?>
