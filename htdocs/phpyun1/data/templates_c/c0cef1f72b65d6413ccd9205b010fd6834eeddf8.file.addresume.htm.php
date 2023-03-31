<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 12:20:40
         compiled from "D:\rcw\uploads\app\template\wap\member\user\addresume.htm" */ ?>
<?php /*%%SmartyHeaderCode:3409905105fab66984126a3-94745527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0cef1f72b65d6413ccd9205b010fd6834eeddf8' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\addresume.htm',
      1 => 1604075526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3409905105fab66984126a3-94745527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'wap_style' => 0,
    'config_wapdomain' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'resume' => 0,
    'user_sex' => 0,
    'row' => 0,
    'job_type' => 0,
    'job_index' => 0,
    'v' => 0,
    'job_name' => 0,
    'key' => 0,
    'vv' => 0,
    'twok' => 0,
    'job_classid' => 0,
    'city_type' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'city_classid' => 0,
    'j' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
    'layer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab66984b3e34_34553118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab66984b3e34_34553118')) {function content_5fab66984b3e34_34553118($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/css/cmc.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<div class="wap_member_comp_h1"><span>创建简历</span></div>
<div id="app" class="mui-views">
	<div class="mui-view">
		<div class="mui-pages"></div>
	</div>
</div>
<!--页面主结构结束-->
<!--单页面开始-->
<div id="main" class="mui-page">
	<!--页面主内容区开始-->
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				
				<div class="yunset_addresume_tit">
					<div class="yunset_addresume_tit_p">求职意向</div>
					<div class="yunset_addresume_tittip">简历是求职第一步，优质的简历才能更快找到满意工作！</div>
				</div>
				<ul class="yunset_list">
					<li class="yunset_list_text mt10"><span class="yunset_list_name">期望岗位<i class="yunset_list_bt">*</i></span>
						<div class="yunset_list_commentary"> <input type="text" name="name" id="name" value="" placeholder="比如：销售总监,销售经理" class=""></div>
					</li>
					
					<li>
						<a href="#jobclasshtml"><span class="yunset_list_name">工作职能<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary" id="jobnameshow">请选择工作职能</span></a>
						<input type="hidden" name="job_classid" id="job_classid" value="" />
					</li>
                    <li class="mt10"><span class="yunset_list_name">从事行业</span>
						<div class="yunset_list_commentary"> <button id='hyPicker' class="mui-btn mui-btn-block" type='button'>不限</button>
							<input type="hidden" id="hy" name="hy" value="0"></div>
					</li>
					<li>
						<a href="#cityclasshtml"><span class="yunset_list_name">期望城市<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary" id="citynameshow">请选择期望城市</span></a>
						<input type="hidden" name="city_classid" id="city_classid" value="" />
					</li>
					<li>
						<a href="#salaryhtml"><span class="yunset_list_name">期望薪资<i class="yunset_list_bt">*</i></span > <span class="yunset_list_commentary" id="salaryshow">请输入期望薪资</span></a>
					</li>
					
					<li class="mt10"><span class="yunset_list_name">工作性质<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary">
						<button id='typePicker' class="mui-btn mui-btn-block" type='button'><?php if ($_smarty_tpl->tpl_vars['userdata']->value['user_type']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['userdata']->value['user_type'][0]];
} else { ?>请选择工作性质<?php }?></button>
						<input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_type'][0];?>
">
						</span></li>
					<li><span class="yunset_list_name">到岗时间<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary">
						<button id='reportPicker' class="mui-btn mui-btn-block" type='button'><?php if ($_smarty_tpl->tpl_vars['userdata']->value['user_report']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['userdata']->value['user_report'][0]];
} else { ?>请选择到岗时间<?php }?></button>
						<input type="hidden" id="report" name="report" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_report'][0];?>
">
						</span></li>
					<li><span class="yunset_list_name">求职状态<i class="yunset_list_bt">*</i></span ><span class="yunset_list_commentary">
						<button id='jobstatusPicker' class="mui-btn mui-btn-block" type='button'><?php if ($_smarty_tpl->tpl_vars['userdata']->value['user_jobstatus']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['userdata']->value['user_jobstatus'][0]];
} else { ?>请选择求职状态<?php }?></button>
						<input type="hidden" id="jobstatus" name="jobstatus" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_jobstatus'][0];?>
">
						</span></li>
				</ul>
				
				<input type="hidden" id="rand" name="rand" value="" />
				<div class="yunset_bth_box">
					<a href="#addnextinfohtml" class="yun_wap_info_brief_tit_bc addnextinfo">下一步</a>
                </div>
			</div>
		</div>
	</div>
</div>
<div id="addnextinfohtml" class="mui-page">
    <div class="mui-page-content">
      <div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div class="yunset_addresume_tit"><div class="yunset_addresume_tit_p">基本信息</div>
                 <div class="yunset_addresume_tittip">简历是求职第一步，优质的简历才能更快找到满意工作！</div>
                 </div>
				<ul class="yunset_list  mt10">
					<li class="yunset_list_text"><span class="yunset_list_name">姓名<i class="yunset_list_bt">*</i></span>
						<div class="yunset_list_commentary"> <input type="text" name="uname" id="uname" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==1) {?>readonly<?php }?> placeholder="请输入真实姓名" class=""></div>
					</li>
					<li class=""><span class="yunset_list_name">性别<i class="yunset_list_bt">*</i></span>
						<div class="yunset_list_commentary"><button id='sexPicker' class="mui-btn mui-btn-block" type='button' data-sex="<?php echo $_smarty_tpl->tpl_vars['resume']->value['sex'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']==1||$_smarty_tpl->tpl_vars['resume']->value['sex']==2) {
echo $_smarty_tpl->tpl_vars['user_sex']->value[$_smarty_tpl->tpl_vars['resume']->value['sex']];
} else { ?>请选择性别<?php }?></button>
							<input type="hidden" id="sex" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['sex'];?>
"></div>
					</li>
					<li class=""><span class="yunset_list_name">出生年月<i class="yunset_list_bt">*</i></span>
						<div class="yunset_list_commentary"><button id='birthdayUserPicker' data-options='{"type":"date","value":"<?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1988-08-08<?php }?>","beginYear":1955,"endYear":2010}' class="btn mui-btn mui-btn-block"><?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1989-10-10<?php }?></button>
							<input type="hidden" id="birthday" name="birthday" value="<?php if ($_smarty_tpl->tpl_vars['resume']->value['birthday']) {
echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];
} else { ?>1989-10-10<?php }?>"></div>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">现居住地<i class="yunset_list_bt">*</i></span>
						<div class="yunset_list_commentary"> <input type="text" name="living" id="living" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['living'];?>
" placeholder="请输入现居住地" class=""></div>
					</li>

					<li class="mt10"><span class="yunset_list_name">最高学历<i class="yunset_list_bt">*</i></span>
						<div class="yunset_list_commentary"> <button id='eduPicker' class="mui-btn mui-btn-block" type='button' data-edu="<?php echo $_smarty_tpl->tpl_vars['resume']->value['edu'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['edu']];
} else { ?>请选择最高学历<?php }?></button>
							<input type="hidden" id="edu" name="edu" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['edu'];?>
">
						</div>
					</li>

					<li class=""><span class="yunset_list_name">工作经验<i class="yunset_list_bt">*</i></span>
						<div class="yunset_list_commentary"> <button id='expPicker' class="mui-btn mui-btn-block" type='button' data-exp="<?php echo $_smarty_tpl->tpl_vars['resume']->value['exp'];?>
"><?php if ($_smarty_tpl->tpl_vars['resume']->value['exp']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['exp']];
} else { ?>请选择工作经验<?php }?></button>
							<input type="hidden" id="exp" name="exp" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['exp'];?>
"></div>
					</li>
					<li class="yunset_list_text mt10"><span class="yunset_list_name">手机<i class="yunset_list_bt">*</i></span><span class="yunset_list_commentary">
						<?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']==1) {?>
						（已绑定）<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
 
						<input type="hidden" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
">
						<?php } else { ?>
						<input type="number" name="telphone" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class=""placeholder="请输入手机号码" >
						<?php }?> 
						</span></li>
					<li class="yunset_list_text">
						<span class="yunset_list_name">邮箱</span>
						<span class="yunset_list_commentary ">
						 <?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>
						（已验证）<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>

							<input type="hidden" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
">
						<?php } else { ?>
							 <div class=""><input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
" class="" placeholder="请输入联系邮箱" ></div>
						<?php }?> 
						
						</span>
					</li>

				</ul>
				<div class="yunset_bth_box">
					<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']!='1'&&$_smarty_tpl->tpl_vars['config']->value['resume_create_edu']!='1'&&$_smarty_tpl->tpl_vars['config']->value['resume_create_project']!='1') {?>
						<button id="resumesubmit" type="button" class="mui-btn mui-btn-block mui-btn-primary" style="margin-top: 20px;">保 存</button>
					<?php } else { ?>
				
					<a href="#addnexttwohtml" class="yun_wap_info_brief_tit_bc addnexttwo">下一步</a>
					<?php }?>
					<a class="yun_wap_bth_back mui-action-back">返回上一步</a>
                </div>
  			</div>
		</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']=='1'||$_smarty_tpl->tpl_vars['config']->value['resume_create_edu']=='1'||$_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']=='1') {?>
  <div id="addnexttwohtml" class="mui-page">
    <div class="mui-page-content">
      <div class="mui-scroll-wrapper">
        <div class="mui-scroll">
				<div class="yunset_addresume_tit">
                <div class="yunset_addresume_tit_p">工作经历</div>
               <div class="yunset_addresume_tittip"> 80%的企业通过工作经历来了解您的真实情况</div>
              
                </div> 
                <div id="isexpshow" style="display:none;"class="resumetj_tj">
             
                <span class="resumetj_tj_name">是否有工作经历</span>
                 <div class="resumetj_tj_box">
                 	<span class=""><label style="padding:2px 15px;"><input type="radio" name="iscreateexp" id="iscreateexp1" value="1" checked="checked"> 有</label></span>
               		<span class=""><label style="padding:2px 15px;"><input type="radio" name="iscreateexp" id="iscreateexp2" value="2"> 无</label></span>
                </div>
              
                
              
              
               </div>
				<div id="rwork">
					<ul id="rw" class="yunset_list">
						<li class="yunset_list_text mt10"><span class="yunset_list_name">公司名称</span>
							<div class="yunset_list_commentary">
								<input type="text" id="workname" name="workname" value="" placeholder="请填写公司名称" class="">
							</div>
						</li>
						<li class="yunset_list_text"><span class="yunset_list_name">担任职位</span>
							<div class="yunset_list_commentary">
								<input type="text" name="worktitle" id="worktitle" value="" placeholder="请填写担任职位" class=""></div>
						</li>
						<li>
							<a href="#worktimehtml"  data-rand=""><span class="yunset_list_name">在职时间</span>
								<div class="yunset_list_commentary" id="worktimeshow"> 请选择在职时间</div>
								<input type="hidden" id="workSdate" name="workSdate" />
								<input type="hidden" id="workEdate" name="workEdate" />
								<input type='hidden' id='toToday' name='toToday' />
							</a>
						</li>
						<li>
							<a href="#workcontenthtml" data-rand=""><span class="yunset_list_name">工作内容</span>
								<div class="yunset_list_commentary" id="workcontentshow"> 请填写工作职责</div>
								<input type='hidden' id='workContent' name='workContent' />
							</a>
						</li>
					</ul>
					
				</div>
				
				<div class="tj_new newhtml">
                您也可以添加多个工作经历
					<a class="tj_new_bth addnewhtml" data-type="work">+添加</a> 
				</div>
       		<div class="yunset_bth_box" >
           <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']=='1'||$_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?>   
            <a href="#addnexttwoeduhtml" class="yun_wap_info_brief_tit_bc addnexttwoexp ">下一步</a>           
					 <?php } else { ?>
            <button id="resumesubmit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
           <?php }?>
           <a class="yun_wap_bth_back mui-action-back">返回上一步</a>
        </div>
				
  			</div>
		</div>
	</div>
</div>
<?php }?>  
<?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']=='1') {?>
  <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']!='1') {?>
  <div id="addnexttwohtml" class="mui-page">
  <?php } else { ?>  
  <div id="addnexttwoeduhtml" class="mui-page">
  <?php }?>
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">   
                <div class="yunset_addresume_tit">
                <div class="yunset_addresume_tit_p">毕业院校</div>
               <div class="yunset_addresume_tittip"> 企业需要了解您的教育经历，请认真填写！</div>  
               </div>
               <div id="isedushow"  class="resumetj_tj">
               
                <span class="resumetj_tj_name">是否有教育经历</span>
                 <div class="resumetj_tj_box">
                 <span class=""><label style="padding:2px 10px;"><input type="radio" name="iscreateedu" id="iscreateedu1" value="1" checked="checked"> 有</label></span>
               <span class=""><label style="padding:2px 10px;"><input type="radio" name="iscreateedu" id="iscreateedu2" value="2"> 无</label></span>
                </div>
                    </div>
				<div id="redu">
					<ul id="re" class="yunset_list">
						<li class="yunset_list_text mt10"><span class="yunset_list_name">学校名称</span>
							<div class="yunset_list_commentary">
								<input type="text" id="eduname" name="eduname" value="" placeholder="请填写学校名称" class=""></div>
						</li>
						<li>
							<a href="#edutimehtml"><span class="yunset_list_name">在校时间</span>
								<div class="yunset_list_commentary" id="edutimeshow"> 请选择在校时间</div>
								<input type='hidden' id='eduSdate' name='eduSdate' />
								<input type='hidden' id='eduEdate' name='eduEdate' />
							</a>
						</li>
						<li><span class="yunset_list_name">毕业学历</span > <span class="yunset_list_commentary" ><button  class="mui-btn mui-btn-block reedupick" data-rand=''  data-education='' data-type='education'  type='button'><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['education']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['education']];
} else { ?>请选择毕业学历<?php }?></button>
							<input type="hidden" id="education" name="education" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['education'];?>
">
								</span>
						</li>
						<li class="yunset_list_text"><span class="yunset_list_name">所学专业</span>
							<div class="yunset_list_commentary"> <input type="text" id="eduspec" name="eduspec" value="" placeholder="请填写所学专业" class=""></div>
						</li>

					</ul>
				</div>
				<div class="tj_new newhtml">
                您也可以添加多个教育经历
					<a class="tj_new_bth  addnewhtml" data-type="edu">+添加</a> 
				</div>
               		<div class="yunset_bth_box" >
           <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?>   
            <a href="#addnexttwoprojecthtml" class="yun_wap_info_brief_tit_bc addnexttwoedu">下一步</a>           
					 <?php } else { ?>
            <button id="resumesubmit" type="button" class="mui-btn mui-btn-block mui-btn-primary">保 存</button>
           <?php }?>
           <a class="yun_wap_bth_back mui-action-back">返回上一步</a>
        </div>
         	</div>
        </div>
      </div>
    </div> 
   <?php }?> 
      <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?>
       <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']!='1'&&$_smarty_tpl->tpl_vars['config']->value['resume_create_edu']!=1) {?>
          <div id="addnexttwohtml" class="mui-page">
          <?php } else { ?>  
          <div id="addnexttwoprojecthtml" class="mui-page">
          <?php }?>
          <div class="mui-page-content">
            <div class="mui-scroll-wrapper">
              <div class="mui-scroll">  
                <div class="yunset_addresume_tit">
                <div class="yunset_addresume_tit_p">项目经历</div>
               <div class="yunset_addresume_tittip"> 请描述您主导或参与过项目，以便企业更加了解您的能力！</div>
                </div>
                <div id="rproject">
	                <ul id="rp" class="yunset_list">
	                  <li class="yunset_list_text mt10"><span class="yunset_list_name">项目名称</span>
	                    <div class="yunset_list_commentary">
	                      <input type="text" name="proname" id="proname" value="" placeholder="请填写项目名称" class=""></div>
	                  </li>
	                  <li class="yunset_list_text"><span class="yunset_list_name">担任职位</span>
	                    <div class="yunset_list_commentary">
	                      <input type="text" name="protitle" id="protitle" value="" placeholder="请填写担任职位" class=""></div>
	                  </li>
	                  <li>
	                    <a href="#protimehtml"><span class="yunset_list_name">项目时间</span>
	                      <div class="yunset_list_commentary" id="protimeshow"> 请选择项目时间</div>
	                      <input type='hidden' id='proSdate' name='proSdate' />
	                      <input type='hidden' id='proEdate' name='proEdate' />
	                    </a>
	                  </li>

	                  <li>
	                    <a href="#procontenthtml"><span class="yunset_list_name">项目内容</span>
	                      <div class="yunset_list_commentary" id="procontentshow"> 请填写项目内容</div>
	                      <input type='hidden' id='proContent' name='proContent' />
	                    </a>
	                  </li>
	                </ul>
	            </div>
	           <div class="tj_new newhtml">
                您也可以添加多个项目经历
					<a class="tj_new_bth addnewhtml" data-type="project">+添加</a> 
				</div>
                       <div class="yunset_bth_box">

            <button id="resumesubmit" type="button" class="mui-btn mui-btn-block mui-btn-primary" >保 存</button>

           <a class="yun_wap_bth_back mui-action-back">返回上一步</a>
        </div>
                
                   </div>
                </div>
              </div>
              </div>	
		 
      <?php }?>
<?php }?>
<!--单页面结束-->
<div id="procontenthtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div class="yun_wap_addresume_box_group">
                 <div class="yun_wap_addresume_box_nexttit">项目内容</div>
					<div class="yun_wap_addresume_box_control_text">
						<textarea name="procontent" id="procontent" style="width:100%;height:200px;" class="yun_wap_addresume_texttextAreaMsg" ></textarea>
					</div>
                    <div class="yunset_bth_box">	<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>	</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="workcontenthtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_nexttit">工作内容</div>
					<div class="yun_wap_addresume_box_control_text">
						<textarea name="workcontent" id="workcontent" style="width:100%;height:200px;" class="yun_wap_addresume_texttextAreaMsg"></textarea>
					</div>
                          <div class="yunset_bth_box">	<a class="yun_wap_info_brief_tit_bc mui-action-back" >确定</a>	</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="protimehtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<ul class="yunset_list mt15">
					<li><span class="yunset_list_name">开始时间</span > <span class="yunset_list_commentary"><button id='prosdateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择开始时间</button>
					<input type="hidden" id="prosdate" name="prosdate" value=""></span>

					</li>
					<li><span class="yunset_list_name">结束时间</span > <span class="yunset_list_commentary"><button id='proedateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择结束时间</button>
					<input type="hidden" id="proedate" name="proedate" value=""></span>
					</li>
				</ul>
				<div class="yunset_bth_box"><a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a></div>
			</div>
		</div>
	</div>
</div>
<div id="edutimehtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<ul class="yunset_list mt15">
					<li><span class="yunset_list_name">入校时间</span > <span class="yunset_list_commentary"><button id='edusdateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择入校时间</button>
					<input type="hidden" id="edusdate" name="edusdate" value=""></span>

					</li>
					<li><span class="yunset_list_name">离校时间</span > <span class="yunset_list_commentary"><button id='eduedateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":2099}'  class="btn mui-btn mui-btn-block">请选择离校时间</button>
					<input type="hidden" id="eduedate" name="eduedate" value=""></span>
					</li>
				</ul>
					<div class="yunset_bth_box"><a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>	</div>
			</div>
		</div>
	</div>
</div>
<div id="worktimehtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll">
				<ul class="yunset_list mt15">
					<li><span class="yunset_list_name">入职时间</span > <span class="yunset_list_commentary"><button id='worksdateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择入职时间</button>
					<input type="hidden" id="worksdate" name="worksdate" value=""></span>

					</li>
					<li><span class="yunset_list_name">离职时间</span > <span class="yunset_list_commentary"><button id='workedateComPicker' data-options='{"type":"month","beginYear":1955,"endYear":<?php echo smarty_modifier_date_format(time(),"%Y");?>
}'  class="btn mui-btn mui-btn-block">请选择离职时间</button>
					<input type="hidden" id="workedate" name="workedate" value=""></span>
					</li>
					<li class="yunset_list_text">
						<span class="yunset_list_name" style="width:150px;">至今<em class="yunset_xttip"></em></span>
						<div class="yunset_kg_box">
							<div class="yunset_kg">
								<div id="totodaySwitch" class="mui-switch mui-switch-mini totoday">
									<div class="mui-switch-handle"></div>
								</div>
								<input type="hidden" id="totoday" name="totoday" value="">
							</div>
						</div>
					</li>
				</ul>
					<div class="yunset_bth_box"><a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a>	</div>
			</div>
		</div>
	</div>
</div>
<!-- 职位-->
<div id="jobclasshtml" class="mui-page">
	<div class="mui-page-content">
		<div style="height:570px;">
			<div class="zn_search">
	        	<div class="zn_search_text_c">
	        		<div class="zn_search_text">
	        			<input id="jclass_svalue" type="text" value="" data-type='jobclass' placeholder="请输入职位类别" class="zn_search_t inputListener">
	        		</div>
	        	</div>
	        </div>
	        <div id="jobclass_search" class="zn_searchbox " style="display:none;">
	        	<div id="jobclass_searhtml" class="mui-input-row mui-checkbox classTap">
	        		
					
				</div>

		    </div> 
			<div class="grade_tit">选择工作职能 (可多选)</div>
			<?php if (empty($_smarty_tpl->tpl_vars['job_type']->value)) {?>
	   		<div class="grade-eject grade-w-roll">
				<ul class="grade-w" id="jobone">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li class="jobone" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
">
						<div class="mui-input-row mui-checkbox">
							<label><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</label>
							<input class="jobonebox jobcheck<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" id="jobone<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="checkbox" style="width:10px"/>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
	       
	        <?php } else { ?>
			<div class="grade-eject grade-w-roll">
				<ul class="grade-w" id="jobone">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
					<?php } ?>
				</ul>
				<ul class="grade-t" id="jobtwo">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['job_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['twok'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['twok']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
							<?php if (!empty($_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['vv']->value])) {?>
							<li class="jobtwo job<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</li>
							<?php } else { ?>
							<li class="jobtwo job<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><div class="mui-input-row mui-checkbox"><label><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</label><input class="jobtwobox jobcheck<?php echo $_smarty_tpl->tpl_vars['twok']->value;?>
" id="jobtwo<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="checkbox" style="width:150px"/></div></li>
							<?php }?>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				</ul>
				<ul class="grade-s" id="jobthree">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['job_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
							<?php if (!empty($_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['vv']->value])) {?>
							<li id="jobtwo<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="jobthree job<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label>全部</label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" id="jobcheckAll<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="checkAll"/></div></li>
							<?php }?>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (!in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['job_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<li class="jobthree job<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</label><input class="jobthreebox jobcheck<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="jobthree<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="checkbox"/></div></li>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				</ul>
			</div>
			<?php }?>
			<div class="grade_chlose_box">
				<div class="grade_chlose_box_c">
					<span class="grade_chlose_box_c_name">已选</span>
					<div class="mui-slider">
						<div class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted" style="background:#fff;height:20px;">
							<div id="jobchoosed" class="mui-scroll" style="background:#fff;height:20px;">
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_classid']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<a class="grade_chlose_box_a" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<a class="grade_chlose_bth mui-action-back">确定 <span id="jobpencent" class="<?php if (!$_smarty_tpl->tpl_vars['job_classid']->value) {?>none<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['job_classid']->value);?>
/5</span></a>
			</div>
		</div>
	</div>
</div>
<!-- 城市多选-->
<div id="cityclasshtml" class="mui-page">
	<div class="mui-page-content">
		<div style="height:570px;">
			<div class="zn_search">
	        	<div class="zn_search_text_c">
	        		<div class="zn_search_text">
	        			<input id="cclass_svalue" type="text" value="" data-type='cityclass' placeholder="请输入城市类别" class="zn_search_t inputListener">
	        		</div>
	        	</div>
	        </div>
	        <div id="cityclass_search" class="zn_searchbox " style="display:none;">
	        	<div id="cityclass_searhtml" class="mui-input-row mui-checkbox classTap">
	        		
					
				</div>

		    </div> 
			<div class="grade_tit">选择城市(可多选)</div>
			<?php if (empty($_smarty_tpl->tpl_vars['city_type']->value)) {?>
	   		<div class="grade-eject grade-w-roll">
				<ul class="grade-w" id="cityone">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li class="cityone" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
">
						<div class="mui-input-row mui-checkbox">
							<label><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</label>
							<input class="cityonebox citycheck<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" id="cityone<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="checkbox" style="width:10px"/>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
	       
	        <?php } else { ?>
			<div class="grade-eject grade-w-roll">
				<ul class="grade-w" id="cityone">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
					<?php } ?>
				</ul>
				<ul class="grade-t" id="citytwo">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['city_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['twok'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['twok']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
							<?php if (!empty($_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['vv']->value])) {?>
							<li class="citytwo city<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</li>
							<?php } else { ?>
							<li class="citytwo city<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><div class="mui-input-row mui-checkbox"><label><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</label><input class="citytwobox citycheck<?php echo $_smarty_tpl->tpl_vars['twok']->value;?>
" id="citytwo<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="checkbox" style="width:150px"/></div></li>
							<?php }?>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				</ul>
				<ul class="grade-s" id="citythree">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['city_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
							<?php if (!empty($_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['vv']->value])) {?>
							<li id="citytwo<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="citythree city<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label>全部</label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" id="citycheckAll<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" class="checkAll"/></div></li>
							<?php }?>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if (!in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['city_index']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
						<li class="citythree city<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 none"><div class="mui-input-row mui-checkbox"><label><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
</label><input class="citythreebox citycheck<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="citythree<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="checkbox"/></div></li>
						<?php } ?>	
					<?php }?>
				<?php } ?>
				</ul>
			</div>
			<?php }?>
			<div class="grade_chlose_box">
				<div class="grade_chlose_box_c">
					<span class="grade_chlose_box_c_name">已选</span>
					<div class="mui-slider">
						<div class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted" style="background:#fff;height:20px;">
							<div id="citychoosed" class="mui-scroll" style="background:#fff;height:20px;">
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_classid']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<a class="grade_chlose_box_a"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<a class="grade_chlose_bth mui-action-back">确定<span id="citypencent" class="<?php if (!$_smarty_tpl->tpl_vars['city_classid']->value) {?>none<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['city_classid']->value);?>
/5</span></a>
			</div>
		</div>
	</div>
</div>
<div id="salaryhtml" class="mui-page">
	<div class="mui-page-content">
		<div class="mui-scroll-wrapper">
			<div class="mui-scroll wap_member">
				<ul class="yunset_list">
					<li class="yunset_list_text"><span class="yunset_list_name">最低薪资</span>
						<div class="yunset_list_xzbox">
							<input type="number" id="minsalary" value="" placeholder="请输入最低薪资" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
							<span class="yunset_list_xz">元/月</span>
						</div>
					</li>
					<li class="yunset_list_text"><span class="yunset_list_name">最高薪资<em class="yunset_xttip">(选填)</em></span>
						<div class="yunset_list_xzbox">
							<input type="number" id="maxsalary" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" value="" placeholder="请输入最高薪资">

							<span class="yunset_list_xz">元/月</span> </div>
					</li>
				</ul>
			<div class="yunset_bth_box">	<a class="yun_wap_info_brief_tit_bc mui-action-back">确定</a></div>
			</div>
		</div>
	</div>
</div>

<input type='hidden' id='resume_edu' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_edu'];?>
'>
<input type='hidden' id='resume_exp' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_exp'];?>
'>
<input type='hidden' id='resume_pro' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_project'];?>
'>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.picker.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.poppicker.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/js/mui/mui.view.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
	var sexData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_sex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
	sexData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'
	})
	'<?php } ?>'
	var eduData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
	eduData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var expData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'
	expData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>';
	var hyData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	hyData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var typeData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	typeData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var reportData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	reportData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	var jobstatusData = [];
	'<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_jobstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>'
	jobstatusData.push({
		value: '<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',
		text: '<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
'
	})
	'<?php } ?>'
	mui.init();
	var viewApi = mui('#app').view({
		defaultPage: '#main'
	});
	
	var view = viewApi.view;
	(function($) {
		//初始化单页的区域滚动
		mui('.mui-scroll-wrapper').scroll({
			scrollY: true, //是否竖向滚动
			scrollX: false, //是否横向滚动
			startX: 0, //初始化时滚动至x
			startY: 0, //初始化时滚动至y
			indicators: false, //是否显示滚动条
			deceleration: 0.0006, //阻尼系数,系数越小滑动越灵敏
			// bounce: true //是否启用回弹
		});
		//处理view的后退与webview后退
		var oldBack = $.back;
		$.back = function() {
			if(viewApi.canBack()) { //如果view可以后退，则执行view的后退
				viewApi.back();
			} else { //执行webview后退
				oldBack();
			}
		};
	})(mui);
	
	view.addEventListener('pageBeforeShow', function(e) {
		document.activeElement.blur();
		var rand = document.getElementById('rand').value;
		var page = e.detail.page.id;
		if(page == 'workcontenthtml'){
			var content = document.getElementById('workContent'+rand).value;
			document.getElementById('workcontent').value = content;
		}
		if(page == 'worktimehtml'){
			var worksdate = document.getElementById('workSdate'+rand).value;
			var workedate = document.getElementById('workEdate'+rand).value;
			var totoday = document.getElementById('toToday'+rand).value;

			document.getElementById('worksdate').value = worksdate;
			document.getElementById('workedate').value = workedate;
			
			document.getElementById('worksdateComPicker').innerText = worksdate ? worksdate : '请选择入职时间';
			document.getElementById('workedateComPicker').innerText = workedate ? workedate : '请选择离职时间';
			
			if(totoday==1){
				document.getElementById('workedateComPicker').disabled=true;
				document.getElementById('totoday').value = totoday;
				document.getElementById('totodaySwitch').classList.add('mui-active');
			}else{
				document.getElementById('workedateComPicker').disabled=false;
			}
			
		}
		if(page == 'edutimehtml'){
			var edusdate = document.getElementById('eduSdate'+rand).value;
			var eduedate = document.getElementById('eduEdate'+rand).value;

			document.getElementById('edusdate').value = edusdate;
			document.getElementById('eduedate').value = eduedate;
			
			document.getElementById('edusdateComPicker').innerText = edusdate ? edusdate : '请选择入校时间';
			document.getElementById('eduedateComPicker').innerText = eduedate ? eduedate : '请选择离校时间';
			
		}
		if(page == 'protimehtml'){
			var prosdate = document.getElementById('proSdate'+rand).value;
			var proedate = document.getElementById('proEdate'+rand).value;

			document.getElementById('prosdate').value = prosdate;
			document.getElementById('proedate').value = proedate;
			
			document.getElementById('prosdateComPicker').innerText = prosdate ? prosdate : '请选择开始时间';
			document.getElementById('proedateComPicker').innerText = proedate ? proedate : '请选择结束时间';
			
		}
		if(page == 'procontenthtml'){
			var content = document.getElementById('proContent'+rand).value;
			document.getElementById('procontent').value = content;
		}
		
	});
	view.addEventListener('pageBeforeBack', function(e) {
		var salaryshow = ''
		var minsalary = document.getElementById('minsalary').value;
		var maxsalary = document.getElementById('maxsalary').value;
		var rand = document.getElementById('rand').value;
		var page = e.detail.page.id;
		if(minsalary) {
			salaryshow = minsalary;
			if(maxsalary) {
				salaryshow += '-' + maxsalary +'元/月';
			} else {
				salaryshow += '元以上/月';
			}
			if(parseInt(maxsalary)>0 && parseInt(maxsalary) < parseInt(minsalary)) {
				document.getElementById('minsalary').value = '';
				document.getElementById('maxsalary').value = '';
				document.getElementById('salaryshow').innerText = '';
				return mui.toast('最低薪资不能比最高薪资高，请重新填写');
			}
			document.getElementById('salaryshow').innerText = salaryshow;
		}
		var worksdate = document.getElementById('worksdate').value;
		var workedate = document.getElementById('workedate').value;
		var totoday = document.getElementById('totoday').value;
		if(worksdate && (workedate||totoday)) {

			if(totoday){
				document.getElementById('worktimeshow'+rand).innerText = worksdate + '-至今';
			}else{
				document.getElementById('worktimeshow'+rand).innerText = worksdate + '-' + workedate;
			}
			
			document.getElementById('workSdate'+rand).value = worksdate;
			document.getElementById('workEdate'+rand).value = workedate;
			document.getElementById('toToday'+rand).value = totoday;

			document.getElementById('worksdate').value = '';
			document.getElementById('workedate').value = '';
			document.getElementById('totoday').value = '';

			document.getElementById('totodaySwitch').classList.remove('mui-active');

			if(worksdate > workedate){
				mui.toast('离职时间不得小于入职时间！');return false;
			}
		}
		var workcontent = document.getElementById('workcontent').value;
		if(workcontent) {
			document.getElementById('workcontentshow'+rand).innerText = workcontent;
			document.getElementById('workContent'+rand).value = workcontent;
			document.getElementById('workcontent').value = '';
		}
		var edusdate = document.getElementById('edusdate').value;
		var eduedate = document.getElementById('eduedate').value;
		if(edusdate) {
			if(eduedate){
				document.getElementById('edutimeshow'+rand).innerText = edusdate + '-' + eduedate;
			}else{
				document.getElementById('edutimeshow'+rand).innerText = edusdate;
			}
			document.getElementById('eduSdate'+rand).value = edusdate;
			document.getElementById('eduEdate'+rand).value = eduedate;

			document.getElementById('edusdate').value = '';
			document.getElementById('eduedate').value = '';

			if(edusdate > eduedate){
				mui.toast('离校时间不得小于入校时间');return false;
			}
		}
		var prosdate = document.getElementById('prosdate').value;
		var proedate = document.getElementById('proedate').value;
		if(prosdate && proedate) {
			document.getElementById('protimeshow'+rand).innerText = prosdate + '-' + proedate;

			document.getElementById('proSdate'+rand).value = prosdate;
			document.getElementById('proEdate'+rand).value = proedate;

			document.getElementById('prosdate').value = '';
			document.getElementById('proedate').value = '';

			if(prosdate > proedate){
				mui.toast('项目结束时间不得小于开始时间');return false;
			}
		}
		var procontent = document.getElementById('procontent').value;
		if(procontent) {
			document.getElementById('procontentshow'+rand).innerText = procontent;
			document.getElementById('proContent'+rand).value = procontent;
			document.getElementById('procontent').value = '';
		}

		
		if(rand!=''){
			document.getElementById('rand').value = '';
		}
		if(page == 'cityclasshtml'){
			var city_classid = document.getElementById('city_classid').value;

			var cityclassarr = city_classid.split(','),
				living = $.trim(document.getElementById('living').value);
			if(cityclassarr.length>0 && living==''){
				document.getElementById('living').value = cn[cityclassarr[0]];
			}
		}
	});
	mui('.totoday').each(function() {
		this.addEventListener('toggle', function(event) {
			if(event.detail.isActive){
				document.getElementById('workedateComPicker').disabled=true;
				document.getElementById('totoday').value=1;
			}else{
				document.getElementById('totoday').value='';
				document.getElementById('workedateComPicker').disabled=false;
			}
			document.getElementById('workedate').value = "<?php echo smarty_modifier_date_format(time(),'%Y-%m');?>
";
			document.getElementById('workedateComPicker').innerText="<?php echo smarty_modifier_date_format(time(),'%Y-%m');?>
";

		});
	});
	$(function() {
		if(document.getElementById('main')){
			document.getElementById('main').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('addnexthtml')){
			document.getElementById('addnexthtml').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		if(document.getElementById('addnexttwoexphtml')){
			 document.getElementById('addnexttwoexphtml').addEventListener('touchmove', function (e) { e.preventDefault();}, {passive: false});
		}
		mui('.newhtml').on('tap', '.addnewhtml',  function(e) {

			var type = this.getAttribute('data-type');
			var random=parseInt(Math.random()*1000); 
			var html = '';
			if(type == 'work'){
				html+="<ul id='rw"+random+"' class='yunset_list'>";
				html+="		<div class='sc_new'>";
				html+="			<a class='sc_new_bth delnewhtml' data-type='rw' data-rand='"+random+"' >删除</a>";
				html+="		</div>";
				html+="		<li class='yunset_list_text'><span class='yunset_list_name'>公司名称</span>";
				html+="			<div class='yunset_list_commentary'>";
				html+="				<input type='text' id='workname"+random+"' name='workname' value='' placeholder='请填写公司名称' class=''>";
				html+="			</div>";
				html+="		</li>";
				html+="		<li class='yunset_list_text'><span class='yunset_list_name'>担任职位</span>";
				html+="			<div class='yunset_list_commentary'>";
				html+="				<input type='text' name='worktitle' id='worktitle"+random+"' value='' placeholder='请填写担任职位' class=''></div>";
				html+="		</li>";
				html+="		<li>";
				html+="			<a href='#worktimehtml' class='getrand' data-rand='"+random+"'><span class='yunset_list_name'>在职时间</span>";
				html+="				<div class='yunset_list_commentary' id='worktimeshow"+random+"'> 请选择在职时间</div>";
				html+="				<input type='hidden' id='workSdate"+random+"' name='workSdate' /><input type='hidden' id='workEdate"+random+"' name='workEdate' /><input type='hidden' id='toToday"+random+"' name='toToday' />";
				html+="			</a>";
				html+="		</li>";
				html+="		<li>";
				html+="			<a href='#workcontenthtml' class='getrand' data-rand='"+random+"'><span class='yunset_list_name'>工作内容</span>";
				html+="				<div class='yunset_list_commentary' id='workcontentshow"+random+"'> 请填写工作职责</div><input type='hidden' id='workContent"+random+"' name='workContent' />";
				html+="			</a>";
				html+="		</li>";
				html+="</ul>";
			}
			if(type == 'edu'){
				html+="<ul id='re"+random+"' class='yunset_list'>";
				html+="		<div class='sc_new'>";
				html+="			<a class=' delnewhtml' data-type='re' data-rand='"+random+"' >删除</a>";
				html+="		</div>";
				html+="		<li class='yunset_list_text'><span class='yunset_list_name'>学校名称</span>";
				html+="			<div class='yunset_list_commentary'>";
				html+="				<input type='text' id='eduname"+random+"' name='eduname' value='' placeholder='请填写学校名称' class=''></div>";
				html+="		</li>";
				html+="		<li>"
				html+="			<a href='#edutimehtml' class='getrand' data-rand='"+random+"'><span class='yunset_list_name'>在校时间</span>";
				html+="				<div class='yunset_list_commentary' id='edutimeshow"+random+"'> 请选择在校时间</div><input type='hidden' id='eduSdate"+random+"' name='eduSdate' /><input type='hidden' id='eduEdate"+random+"' name='eduEdate' />";
				html+="			</a>";
				html+="		</li>";
				html+="		<li><span class='yunset_list_name'>毕业学历</span >";
				html+="			<span class='yunset_list_commentary' >";
				html+="				<button  data-rand='"+random+"' data-type='education' data-education=''  class='mui-btn mui-btn-block reedupick' type='button'>请选择毕业学历</button>";
				html+="				<input type='hidden' id='education"+random+"' name='education' value='<?php echo $_smarty_tpl->tpl_vars['row']->value['education'];?>
'></span>";
				html+="		</li>";
				html+="		<li class='yunset_list_text'><span class='yunset_list_name'>所学专业</span>";
				html+="			<div class='yunset_list_commentary'> <input type='text' id='eduspec"+random+"' name='eduspec' value='' placeholder='请填写所学专业' class=''></div>";
				html+="		</li>";
				html+="</ul>";
			}
			if(type == 'project'){
				html+="<ul id='rp"+random+"' class='yunset_list'>";
				 html+="		<div class='sc_new'>";
				html+="			<a class=' delnewhtml' data-type='rp' data-rand='"+random+"' >删除</a>";
				html+="		</div>";
	            html+="      <li class='yunset_list_text'><span class='yunset_list_name'>项目名称</span>";
	            html+="        <div class='yunset_list_commentary'>";
	            html+="          <input type='text' name='proname' id='proname"+random+"' value='' placeholder='请填写项目名称' class=''></div>";
	            html+="      </li>";
	            html+="      <li class='yunset_list_text'><span class='yunset_list_name'>担任职位</span>";
	            html+="        <div class='yunset_list_commentary'>";
	            html+="          <input type='text' name='protitle' id='protitle"+random+"' value='' placeholder='请填写担任职位' class=''></div>";
	            html+="      </li>";
	            html+="      <li>";
	            html+="        <a href='#protimehtml'  class='getrand' data-rand='"+random+"'><span class='yunset_list_name'>项目时间</span>";
	            html+="          <div class='yunset_list_commentary' id='protimeshow"+random+"'> 请选择项目时间</div><input type='hidden' id='proSdate"+random+"' name='proSdate' /><input type='hidden' id='proEdate"+random+"' name='proEdate' />";
	            html+="        </a>";
	            html+="      </li>";

	            html+="      <li>";
	            html+="        <a href='#procontenthtml' class='getrand' data-rand='"+random+"'><span class='yunset_list_name'>项目内容</span>";
	            html+="          <div class='yunset_list_commentary' id='procontentshow"+random+"'> 请填写项目内容</div><input type='hidden' id='proContent"+random+"' name='proContent' />";
	            html+="        </a>";
	            html+="      </li>";
	            html+="</ul>";
			}
			$("#r"+type).append(html);
		});
		mui('.mui-scroll').on('tap', '.delnewhtml', function() {
			var rand=this.getAttribute('data-rand');
			var type=this.getAttribute('data-type');
			$("#"+type+rand).remove();
		});
		mui('.mui-scroll').on('tap', '.getrand', function() {
			var rand=this.getAttribute('data-rand');
			document.getElementById('rand').value = rand;
		});
    //addnexttwoexp
		/*mui('.yunset_bth_box').on('tap', '.addnext',  function() {
			var uname = $.trim(document.getElementById('uname').value),
				sex = $.trim(document.getElementById('sex').value),
				birthday = $.trim(document.getElementById('birthday').value),
				edu = $.trim(document.getElementById('edu').value),
				exp = $.trim(document.getElementById('exp').value),
				telphone = $.trim(document.getElementById('telphone').value),
				email = $.trim(document.getElementById('email').value),
				living = $.trim(document.getElementById('living').value);
			if(uname == "") {
				mui.toast('请输入真实姓名！');return false;
			}
			if(sex== '') {
				 mui.toast('请选择性别！');return false;
			}
			if(birthday== '') {
				 mui.toast('请选择出生年月！');return false;
			}
			if(living== '') {
				 mui.toast('请输入现居住地！');return false;
			}
			if(edu== '') {
				 mui.toast('请选择最高学历！');return false;
			}
			if(exp== '') {
				 mui.toast('请选择工作经验！');return false;
			}
			if(telphone== '') {
				 mui.toast('请输入手机号码！');return false;
			} else {
				var reg = /^[1][3456789]\d{9}$/; //验证手机号码  
				 if(!reg.test(telphone)){
					 mui.toast('手机号码格式错误！');return false;
				 }
			}
			var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			if(email!="" && !myreg.test(email)){
				 mui.toast('邮箱格式错误！');return false;
			}
		})*/
		mui('.yunset_bth_box').on('tap', '.addnextinfo',  function() {
			var name = $.trim(document.getElementById('name').value),
				hy = $.trim(document.getElementById('hy').value),
				job_classid = $.trim(document.getElementById('job_classid').value),
				city_classid = $.trim(document.getElementById('city_classid').value),
				minsalary = $.trim(document.getElementById('minsalary').value),
				maxsalary = $.trim(document.getElementById('maxsalary').value),
				report = $.trim(document.getElementById('report').value),
				type = $.trim(document.getElementById('type').value),
				jobstatus = $.trim(document.getElementById('jobstatus').value);
			if(name== "") {
				 mui.toast('请输入期望岗位！');return false;
			}
			
			if(job_classid== "") {
				 mui.toast('请选择工作职能！');return false;
			}
			if(minsalary== "") {
				 mui.toast('请输入期望薪资！');return false;
			}
			if(maxsalary) {
				if(parseInt(maxsalary)>0 && parseInt(maxsalary) <= parseInt(minsalary)) {
					 mui.toast('最高薪资必须大于最低薪资！');return false;
				}
			}
			if(city_classid == "") {
				 mui.toast('请选择期望城市！');return false;
			}
			if(type== "") {
				 mui.toast('请选择工作性质！');return false;
			}
			if(report== "") {
				mui.toast('请选择到岗时间！');return false;
			}
			if(jobstatus== "") {
				mui.toast('请选择求职状态！');return false;
			}
		})
		mui('.yunset_bth_box').on('tap', '.addnexttwo',  function() {
			var uname = $.trim(document.getElementById('uname').value),
				sex = $.trim(document.getElementById('sex').value),
				birthday = $.trim(document.getElementById('birthday').value),
				edu = $.trim(document.getElementById('edu').value),
				exp = $.trim(document.getElementById('exp').value),
				telphone = $.trim(document.getElementById('telphone').value),
				email = $.trim(document.getElementById('email').value),
				living = $.trim(document.getElementById('living').value);
			if(uname == "") {
				mui.toast('请输入真实姓名！');return false;
			}
			if(sex== '') {
				 mui.toast('请选择性别！');return false;
			}
			if(birthday== '') {
				 mui.toast('请选择出生年月！');return false;
			}
			if(living== '' || living == 'undefined') {
				 mui.toast('请输入现居住地！');return false;
			}
			if(edu== '') {
				 mui.toast('请选择最高学历！');return false;
			}
			if(exp== '') {
				 mui.toast('请选择工作经验！');return false;
			}
			if(telphone== '') {
				 mui.toast('请输入手机号码！');return false;
			} else {
				var reg = /^[1][3456789]\d{9}$/; //验证手机号码  
				 if(!reg.test(telphone)){
					 mui.toast('手机号码格式错误！');return false;
				 }
			}
			var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			if(email!="" && !myreg.test(email)){
				 mui.toast('邮箱格式错误！');return false;
			}
			var educreate='<?php echo $_smarty_tpl->tpl_vars['config']->value['educreate'];?>
';
      var iscreateedu=$("input[name='iscreateedu']:checked").val();
			var expcreate='<?php echo $_smarty_tpl->tpl_vars['config']->value['expcreate'];?>
';
       var iscreateexp=$("input[name='iscreateexp']:checked").val();
			if(educreate.indexOf(edu)>-1){
				$('#isedushow').show();
         if(iscreateedu==2){
          $('#redu').hide();
        }else{
          $('#redu').show();
        }
			}else{
				$('#isedushow').hide();
				$('#redu').show();
        $("#iscreateedu1").attr('checked',true);
			}
			if(expcreate.indexOf(exp)>-1){
        if(iscreateexp==2){
          $('#rwork').hide();
        }else{
          $('#rwork').show();
        }
				$('#isexpshow').show();
			}else{
				$('#isexpshow').hide();
				$('#rwork').show();
        $("#iscreateexp1").attr('checked',true);
			}
		})
    mui('.yunset_bth_box').on('tap', '.addnexttwoexp',  function() {
		var iscreateexp=$("input[name='iscreateexp']:checked").val();
		if(iscreateexp!='2'){
    	var workname=document.getElementsByName('workname');
		for(var i=0;i<workname.length;i++){
			if(workname[i].value == '') {
		 		mui.toast('请填写第'+ (i+1) +'份工作经历的公司名称！');return false;
			}
        }
        var worktitle=document.getElementsByName('worktitle');
		for(var i=0;i<worktitle.length;i++){
			if(worktitle[i].value == '') {

				mui.toast('请填写第'+ (i+1) +'份工作经历的担任职位！');return false;

			}
        }
        var worksdate=document.getElementsByName('workSdate');
        var workedate=document.getElementsByName('workEdate');
        var totoday=document.getElementsByName('toToday');
		for(var i=0;i<worksdate.length;i++){
			if(worksdate[i].value == '') {
				mui.toast('请选择第'+ (i+1) +'份工作经历的入职时间！');return false;
			}
			if(totoday[i].value == '' && workedate[i].value == '') {
				mui.toast('请选择第'+ (i+1) +'份工作经历的离职时间！');return false;
			}
			if(worksdate[i].value > workedate[i].value ) {
				mui.toast('第'+(i+1)+'份工作经历的离职时间不得小于入职时间！');return false;
			}
        }
		}
	})
     mui('.yunset_bth_box').on('tap', '.addnexttwoedu',  function() {
		var iscreateedu=$("input[name='iscreateedu']:checked").val();
		if(iscreateedu!='2'){
     	var eduname=document.getElementsByName('eduname');
		for(var i=0;i<eduname.length;i++){
			if(eduname[i].value == '') {
		 		mui.toast('请填写第'+ (i+1) +'份教育经历的学校名称！');return false;
			}
        }
        var edusdate=document.getElementsByName('eduSdate');
		for(var i=0;i<edusdate.length;i++){
			if(edusdate[i].value == '') {
		 		mui.toast('请选择第'+ (i+1) +'份教育经历的入学时间！');return false;
			}
        }
        var eduedate=document.getElementsByName('eduEdate');
		for(var i=0;i<eduedate.length;i++){
			if(eduedate[i].value == '') {
		 		mui.toast('请选择第'+ (i+1) +'份教育经历的离校或预计离校时间！');return false;
			}
			if(eduedate[i].value <= edusdate[i].value) {
		 		mui.toast('第'+ (i+1) +'份教育经历的离校时间不得小于入学时间！');return false;
			}
        }
        var education=document.getElementsByName('education');
		for(var i=0;i<education.length;i++){
			if(education[i].value == '') {
		 		mui.toast('请选择第'+ (i+1) +'份教育经历的毕业学历！');return false;
			}
        }
        var eduspec=document.getElementsByName('eduspec');
		for(var i=0;i<eduspec.length;i++){
			if(eduspec[i].value == '') {
		 		mui.toast('请填写第'+ (i+1) +'份教育经历的所学专业！');return false;
			}
        }
        }
		})
 		mui('.yunset_bth_box').on('tap', '#resumesubmit', addresume);
	});
	$(document).ready(function() {
		$("input[name='iscreateexp']").click(function() {
			var val = $(this).val();
			if(val==2){
			$('#rwork').hide();
			}else{
			$('#rwork').show();
			}
		});
		$("input[name='iscreateedu']").click(function() {
			var val = $(this).val();
			if(val==2){
			$('#redu').hide();
			}else{
			$('#redu').show();
			}
		});
	});
	// var jn = [];
	// '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>';
	// jn['<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
']='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
';
	// '<?php } ?>';
	// var cn = [];
	// '<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>';
	// cn['<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
']='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
';
	// '<?php } ?>';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/job.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/jobparent.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/cityparent.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/category.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/publicselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/cmc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['layer']->value) {?>
	<input id="layermsg" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['msg'];?>
" type="hidden">
	<input id="layerurl" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['url'];?>
" type="hidden">
	<?php echo '<script'; ?>
>
	    $(document).ready(function() {
	        islayer();
	    });
	<?php echo '</script'; ?>
>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/public/remind.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
