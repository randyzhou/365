<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:12:29
         compiled from "D:\rcw\uploads\app\template\member\com\joblist.htm" */ ?>
<?php /*%%SmartyHeaderCode:19347275365f9d9afde7c930-47442044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '809a17517739474d8e55b99f24c67d069de5684f' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\joblist.htm',
      1 => 1581742478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19347275365f9d9afde7c930-47442044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'w1' => 0,
    'w0' => 0,
    'w3' => 0,
    'w4' => 0,
    'w5' => 0,
    'audit' => 0,
    'config' => 0,
    'addjobnum' => 0,
    'type' => 0,
    'rows' => 0,
    'job' => 0,
    'statis' => 0,
    'spid' => 0,
    'pagenav' => 0,
    'todayEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9afdedcc35_58262650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9afdedcc35_58262650')) {function content_5f9d9afdedcc35_58262650($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
  <div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_com_tit"><span class="yun_com_tit_s">职位管理</span></div>
    <div class="right_box">
      <div class="admincont_box">
        <div class="job_list_tit">
          <ul class="">
            <li <?php if ($_GET['w']=="1") {?> class="job_list_tit_cur" <?php }?>>
            <a href="index.php?c=job&w=1">招聘中的职位<span class="job_list_tit_n"><?php if ($_smarty_tpl->tpl_vars['w1']->value>0) {?>(<?php echo $_smarty_tpl->tpl_vars['w1']->value;?>
)<?php }?></span></a>
            </li>
            <li <?php if ($_GET['w']=="0") {?> class="job_list_tit_cur" <?php }?>>
            <a href="index.php?c=job&w=0">待审核职位<span class="job_list_tit_n"><?php if ($_smarty_tpl->tpl_vars['w0']->value>0) {?>(<?php echo $_smarty_tpl->tpl_vars['w0']->value;?>
)<?php }?></span></a>
            </li>
            <li <?php if ($_GET['w']=="3") {?> class="job_list_tit_cur" <?php }?>>
            <a href="index.php?c=job&w=3">未通过职位<span class="job_list_tit_n"><?php if ($_smarty_tpl->tpl_vars['w3']->value>0) {?>(<?php echo $_smarty_tpl->tpl_vars['w3']->value;?>
)<?php }?></span></a>
            </li>
            <li <?php if ($_GET['w']=="4") {?> class="job_list_tit_cur" <?php }?>>
            <a href="index.php?c=job&w=4">已下架职位<span class="job_list_tit_n"><?php if ($_smarty_tpl->tpl_vars['w4']->value>0) {?>(<?php echo $_smarty_tpl->tpl_vars['w4']->value;?>
)<?php }?></span></a>
            </li>
            <li <?php if ($_GET['w']=="5") {?> class="job_list_tit_cur" <?php }?>>
            <a href="index.php?c=job&w=5">所有职位<span class="job_list_tit_n"><?php if ($_smarty_tpl->tpl_vars['w5']->value>0) {?>(<?php echo $_smarty_tpl->tpl_vars['w5']->value;?>
)<?php }?></span></a>
            </li>
          </ul>
        </div>
        <div class="com_body"> <?php if ($_smarty_tpl->tpl_vars['audit']->value>0) {?>
          <div class="com_new_tip mt20"> <span class="com_new_tip_h">温馨小提示</span>你有 <font color="#FF0000"><?php echo $_smarty_tpl->tpl_vars['audit']->value;?>
</font> 个待审核职位，我们将在24小时内审核，如需马上审核，请联系客服：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webtel'];?>
</div>
          <?php }?>
          <div class="clear"></div>
          <div class="joblist_search" style="position:relative">
            <form action="index.php" method="get">
              <div class="joblist_search_box">
                <input name="c" type="hidden" value="job">
                <input name="w" type="hidden" value="1">
                <input name="type" type="hidden" value="<?php echo $_GET['type'];?>
">
                <input name="keyword" type="text" class="joblist_search_box_text" placeholder="请输入职位关键字">
                <input name="" type="submit" class="joblist_search_bth" value="搜索">
              </div>
            </form>
            <div class=""><a  href="javascript:void(0)"  onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;" class="com_topbth">发布职位</a></div>
            <div class="job_lookmode">查看方式 
						<a href="index.php?c=job&w=1"  id="firststyle" class="com_resume_listbox_titlook_zs <?php if ($_smarty_tpl->tpl_vars['type']->value!=2) {?>com_resume_listbox_titlook_cur<?php }?>"><i class="com_resume_listbox_titlook_zslb "></i></a> 
						<a href="index.php?c=job&w=1&type=2"  id="twostyle" class="com_resume_listbox_titlook_zs <?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?>com_resume_listbox_titlook_cur<?php }?>"><i class="com_resume_listbox_titlook_zsxx"></i></a>
					</div>
          </div>
          <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
          <form  name="MyForm" action="index.php?c=job&act=opera" target="supportiframe" method="post" id="myform"  class="layui-form">
            <div class="clear"></div>
            <div id="jobtwolook" <?php if ($_smarty_tpl->tpl_vars['type']->value!=2) {?>style="display:none;"<?php }?>>
            <table class="job_looklist_table mt20"  >
             <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
              <tr>
                <th width="25" align="center">&nbsp;</th>
                <th>职位名称</th>
                <th>应聘简历</th>
                <th>被浏览</th>
                <th>刷新日期</th>
                <th width="180">分享</th>
                <th>职位推广</th>
                <th>操作</th>
              </tr>
              <?php }?>
               <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
                <tr>
              <td width="25" align="center">
                  <input type="checkbox" name="checkboxidid[]" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="com_job_list_check"   lay-skin="primary" />
              </td>
              <td>
              <div class="job_looklist_namebox"> <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job.id`'),$_smarty_tpl);?>
" class="job_looklist_name" target="_blank"><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
</a></div>
            
              </td>
              <td  align="center"><?php echo $_smarty_tpl->tpl_vars['job']->value['jobnum'];?>
 份<br/><?php if ($_smarty_tpl->tpl_vars['job']->value['jobnum']>0) {?><a href="index.php?c=hr&jobid=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['type'];?>
" class="yun_m_job_r_l">查看</a><?php }?> </td>
             
              <td  align="center"><?php echo $_smarty_tpl->tpl_vars['job']->value['jobhits'];?>
次</td>
              <td  align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],'%Y-%m-%d');?>
</td>
              <td  align="center">
              
              <a href="javascript:void(0)" class="job_looklist_fx job_share" style="padding-left:0">分享
                <div class="job_share_img" style="display:none" > 
					<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_h5_share']==1) {?>
						<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'job','toa'=>'share','toid'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" width="130" height="130"/> 
					<?php } else { ?>
						<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'job','toa'=>'view','toid'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" width="130" height="130"/> 
					<?php }?>
                </div>
              </a>
              </td>
              <td  align="center" width="300">
              <div class="job_looklist_tgbox" style="width:300px">
              <a href="javascript:void(0);" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['rec_time']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['rec_time'],'%Y-%m-%d');
}?>', 2)" class="job_looklist_tg <?php if ($_smarty_tpl->tpl_vars['job']->value['rec_time']>time()&&$_smarty_tpl->tpl_vars['job']->value['rec']==1) {?>job_looklist_tg_kq<?php }?>">推荐</a>
              <a href="javascript:void(0);" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['urgent_time']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['urgent_time'],'%Y-%m-%d');
}?>', 3)" class="job_looklist_tg <?php if ($_smarty_tpl->tpl_vars['job']->value['urgent_time']>time()&&$_smarty_tpl->tpl_vars['job']->value['urgent']==1) {?> job_looklist_tg_kq<?php }?>">紧急</a> 
              <a href="javascript:void(0);" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['xsdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['xsdate'],'%Y-%m-%d');
}?>', 1);" class="job_looklist_tg <?php if ($_smarty_tpl->tpl_vars['job']->value['xsdate']>time()&&$_smarty_tpl->tpl_vars['job']->value['xsdate']) {?>job_looklist_tg_kq<?php }?>">置顶</a> 
              <a href="javascript:void(0);" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['autotime']>time()) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['autodate'],'%Y-%m-%d');
}?>', 5);" class="job_looklist_tg <?php if ($_smarty_tpl->tpl_vars['job']->value['autotime']>time()) {?>job_looklist_tg_kq<?php }?>">自动刷新</a> 
              </div> </td>  
               
              <td  align="center">
              <a href="index.php?c=likeresume&jobid=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="job_looklist_bth">匹配</a>
              <a href="javascript:void(0)" onclick="refreshJob('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
');" class="job_looklist_bth">刷新</a>
              <?php if ($_smarty_tpl->tpl_vars['job']->value['status']=="1") {?> <a href="javascript:onstatus('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','2');" class="job_looklist_bth">上架</a> <?php } else { ?> <a href="javascript:onstatus('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','1');" class="job_looklist_bth">下架</a> <?php }?>
              <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job.id`'),$_smarty_tpl);?>
" target="_blank" title="预览" class="job_looklist_bth">预览</a> 
              <a href="index.php?c=jobadd&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="job_looklist_bth">修改</a> 
              <a href="javascript:void(0)" onclick="layer_del('确定要删除该职位？', 'index.php?c=job&act=opera&del=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="job_looklist_bth">删除</a>
            </td>
            </tr>
              <?php }
if (!$_smarty_tpl->tpl_vars['job']->_loop) {
?>
            <tr>
              <td colspan="5" class="table_end"><div class="com_msg_no">
                  <p>亲爱的用户，目前您还没有发布职位信息</p>
                  <a href="javascript:;" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="com_msg_no_bth com_submit">发布职位</a> </div></td>
            </tr>
        
             <?php } ?>
             <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
            <tr>
              	<td align="center">
              	<input type="checkbox" lay-filter="allcomid"  lay-skin="primary" />
           		</td>
              	<td colspan="8">
	              	<div class="com_Release_job_bot" style="padding-top:0px;">
		              	<span class="com_Release_job_qx"> 全选 </span>
		                <?php if (!$_smarty_tpl->tpl_vars['spid']->value) {?>
                  <input class="c_btn_02 c_btn_02_w110" type="button" value="批量自动刷新" onclick="jobPromote('checkboxidid[]','', 5);">
		                <?php }?>
                    <input class="c_btn_02 c_btn_02_w110" type="button" value="批量刷新职位" onclick="return refreshAllJob('checkboxidid[]','<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
');">
		               	<input class="c_btn_02 c_btn_02_w110" type="button" value="批量下架职位" onclick="return allonstatusid('checkboxidid[]');">
		               	<input class="c_btn_02 c_btn_02_w110" type="button" value="批量删除职位" onclick="return really('checkboxidid[]');">
	             	</div>
	                <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
	           	</td>
            </tr>
            <?php }?>
            </table>
            </div>
            <div class="clear"></div>
            <div id="jobfirstlook"  <?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?>style="display:none;"<?php }?>>
            <table class="com_received_resume mt20" >
            <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
            <tr>
              <th width="25" align="center">&nbsp;</th>
              <th>职位名称</th>
              <th>招聘情况</th>
              <th>职位推广</th>
              <th>操作</th>
            </tr>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
            <tr>
              <td align="center">
                  <input type="checkbox" name="checkboxid[]" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="com_job_list_check"   lay-skin="primary" />
              </td>
              <td align="top"><div class="yun_m_jobname"> <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job.id`'),$_smarty_tpl);?>
" class="yun_m_jobname_a" target="_blank"><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
</a></div>
               
                 	<div class="yun_m_jobshare">
	                  	<div class="job_share"><i></i>分享到朋友圈
	                    	<div class="job_share_img" style="display:none" > 
								<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_h5_share']==1) {?>
									<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'job','toa'=>'share','toid'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" width="130" height="130"/> 
								<?php } else { ?>
									<img src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'pubqrcode','toc'=>'job','toa'=>'view','toid'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" width="130" height="130"/> 
								<?php }?>
	                    	</div>
	                  	</div>     
	           		</div> 
	          </td>
	          
              <td><div class="yun_m_jobqk">
                  <div class="">收到简历：<span class="yun_m_jobqk_n"><?php echo $_smarty_tpl->tpl_vars['job']->value['jobnum'];?>
</span> 份 <a href="index.php?c=hr&jobid=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['type'];?>
" class="yun_m_job_r_l">查看 ></a></div>
                  <div class="">被浏览：<span class="yun_m_jobqk_n"><?php echo $_smarty_tpl->tpl_vars['job']->value['jobhits'];?>
</span> 次</div>
                
                <div class="">刷新日期：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],'%Y-%m-%d');?>
</div>
                  <div class="yun_m_job_lookresume"></div>
             
                   
                </div></td>
              	
              	<td>
              		<div class="yun_m_joblist_cont" style="width:350px; margin:0 auto">
                  		
                  		<div class="yun_m_joblist_extension <?php if ($_smarty_tpl->tpl_vars['job']->value['rec_time']>time()&&$_smarty_tpl->tpl_vars['job']->value['rec']==1) {?>yun_m_joblist_extension_cur<?php }?> yun_m_joblist_extension_cur_hov" dtype="rec" pid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"> 
                  			<i class="yun_m_joblist_extension_icon"></i> 
                  			<i class="yun_m_joblist_tip_icon"></i>
                            <div class="yun_m_joblist_extension_p"><font color="">推荐</font></div>
                    		<a href="javascript:void(0);" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['rec_time']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['rec_time'],'%Y-%m-%d');
}?>', 2)" class="yun_m_joblist_extension_bth"></a>
                    	</div>
                  	
                  		<div class="yun_m_joblist_extension <?php if ($_smarty_tpl->tpl_vars['job']->value['urgent_time']>time()&&$_smarty_tpl->tpl_vars['job']->value['urgent']==1) {?> yun_m_joblist_extension_cur<?php }?>" dtype="urgent" pid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"> 
                  			<i class="yun_m_joblist_extension_icon yun_m_joblist_extension_icon_urgent"></i> 
                  			<i class="yun_m_joblist_tip_icon"></i>
                  			<div class="yun_m_joblist_extension_p"><font color="">紧急</font></div>
                  			<a href="javascript:void(0);" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['urgent_time']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['urgent_time'],'%Y-%m-%d');
}?>', 3)" class="yun_m_joblist_extension_bth"></a> 
                  		</div>
                  		
                  		<div class="yun_m_joblist_extension <?php if ($_smarty_tpl->tpl_vars['job']->value['xsdate']>time()&&$_smarty_tpl->tpl_vars['job']->value['xsdate']) {?>yun_m_joblist_extension_cur<?php }?>" dtype="jingjia" pid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"> 
                  			<i class="yun_m_joblist_extension_icon yun_m_joblist_extension_icon_zd"></i> 
                  			<i class="yun_m_joblist_tip_icon"></i> 
                  			<div class="yun_m_joblist_extension_p"><font color="">置顶</font></div>
                  			<a href="javascript:void(0);" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['xsdate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['xsdate'],'%Y-%m-%d');
}?>', 1);" class="yun_m_joblist_extension_bth"></a> 
                  		</div>
                  		
                    	<div class="yun_m_joblist_extension <?php if ($_smarty_tpl->tpl_vars['job']->value['autotime']>time()) {?>yun_m_joblist_extension_cur<?php }?>" dtype="autojob" pid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"> 
                    		<i class="yun_m_joblist_extension_icon yun_m_joblist_extension_icon_sx"></i> 
                    		<i class="yun_m_joblist_tip_icon"></i>
                    		<div class="yun_m_joblist_extension_p"><font color="">自动刷新</font></div>
                    		<a href="javascript:void(0);" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['job']->value['autotime']>time()) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['autodate'],'%Y-%m-%d');
}?>', 5);" class="yun_m_joblist_extension_bth"></a> 
                    	</div>
						
                    	
                    	<div class="yun_m_joblist_tip" id="tip<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">展示在列表右侧黄金位置，带来精确的投递；高质的效果</div>
                	</div>
                </td>
				<td width="150">
					<div class="yun_m_joblist_right"> 
						<a href="javascript:void(0)" onclick="refreshJob('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
');" class="yun_m_joblist_right_a">刷新</a>
						<?php if ($_smarty_tpl->tpl_vars['job']->value['status']=="1") {?> <a href="javascript:onstatus('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','2');" class="yun_m_joblist_right_a">上架</a> <?php } else { ?> <a href="javascript:onstatus('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','1');" class="yun_m_joblist_right_a">下架</a> <?php }?>
						<a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job.id`'),$_smarty_tpl);?>
" target="_blank" title="预览" class="yun_m_joblist_right_a">预览</a> <a href="index.php?c=jobadd&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="yun_m_joblist_right_a">修改</a> 
						<a href="index.php?c=likeresume&jobid=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="yun_m_joblist_right_a">匹配</a>
						<a href="javascript:void(0)" onclick="layer_del('确定要删除该职位？', 'index.php?c=job&act=opera&del=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="yun_m_joblist_right_a">删除</a>
					</div>
				</td>
            </tr>
            <?php }
if (!$_smarty_tpl->tpl_vars['job']->_loop) {
?>
            <tr>
              <td colspan="5" class="table_end"><div class="com_msg_no">
                  <p>亲爱的用户，目前您还没有发布职位信息</p>
                  <a href="javascript:;" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="com_msg_no_bth com_submit">发布职位</a> </div></td>
            </tr>
            <?php } ?> 
         
               <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
            <tr>
              	<td align="center">
              	<input type="checkbox" lay-filter="allcom"  lay-skin="primary" />
           		</td>
              	<td colspan="4">
	              	<div class="com_Release_job_bot" style="padding-top:0px;">
		              	<span class="com_Release_job_qx"> 全选 </span>
		                <?php if (!$_smarty_tpl->tpl_vars['spid']->value) {?>
                  <input class="c_btn_02 c_btn_02_w110" type="button" value="批量自动刷新" onclick="jobPromote('checkboxid[]','', 5);">
		                <?php }?>
                    <input class="c_btn_02 c_btn_02_w110" type="button" value="批量刷新职位" onclick="return refreshAllJob('checkboxid[]','<?php echo $_smarty_tpl->tpl_vars['statis']->value['breakjob_num'];?>
');">
		               	<input class="c_btn_02 c_btn_02_w110" type="button" value="批量下架职位" onclick="return allonstatus('checkboxid[]');">
		               	<input class="c_btn_02 c_btn_02_w110" type="button" value="批量删除职位" onclick="return really('checkboxid[]');">
	             	</div>
	                <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
	           	</td>
            </tr>
            <?php }?>
          </table>
          </div>
          
          </form>
          <div class="clear"></div>
         
          </div> </div>
          <div class="com_tip_bottom mt20">
          <div class="wxts_box wxts_box_mt30">
            <div class="wxts">温馨提示：</div>
          	1、 贵公司还可以发布（<span class="f60"><?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>$_smarty_tpl->tpl_vars['todayEnd']->value||$_smarty_tpl->tpl_vars['statis']->value['vip_etime']=="0") {
if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==1) {
echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];
} else { ?>不限<?php }
} else { ?>0<?php }?></span>）条职位信息<br>
            2、如贵公司要快速招聘人才，建议成为我们的会员，获取更多的展示机会，以帮助您快速找到满意的人才。<?php if (empty($_smarty_tpl->tpl_vars['spid']->value)) {?> <a href="index.php?c=right" class="wxts_sj" style="color:red;">立即升级</a>。<?php }?>  <br>
            3、请贵公司保证职位信息的真实性、合法性，并及时更新职位信息，如被举报或投诉，确认发布的信息违反相关规定后，本站将会关闭贵公司的招聘服务，敬请谅解！ <br>
            4、参加紧急的招聘职位;我们将在首页紧急招聘 模块显示，并有紧急图标显示。<br>
            5、参加自动刷新的招聘职位;使招聘职位信息置于列表前端，更有利于吸引客户的注意 <br>
            6、参加置顶服务的招聘职位；我们将在首页列表模块显示 ！ </div>
       
      </div>
    </div>
  </div>
</div>
<input type="hidden" id="refreshjobids" value="" />

<?php echo '<script'; ?>
>
	layui.use(['form','layer', 'laydate'], function(){
    	var $ = layui.$,
			form = layui.form,
			laydate = layui.laydate,
			layer = layui.layer;
    	
    	form.on('checkbox(allcom)', function (data) {
       	 	$("input[name='checkboxid[]']").each(function () {
            	this.checked = data.elem.checked;
        	});
        	form.render('checkbox');
      	});
      
      form.on('checkbox(allcomid)',function(data){
        $("input[name='checkboxidid[]']").each(function () {
          this.checked = data.elem.checked;
        });
        form.render('checkbox');
      });
    });
     function allonstatusid() {
        var allid = [];
        var i = 0;
        $('input[name="checkboxidid[]"]:checked').each(function() {
            allid.push($(this).val());
            i++;
        });
        if(allid.length == 0) {
            layer.msg("请选择要下架的职位！", 2, 8);
            return false;
        } else {
            onstatus(allid, 1);
        }
    }
    function allonstatus() {
        var allid = [];
        var i = 0;
        $('input[name="checkboxid[]"]:checked').each(function() {
            allid.push($(this).val());
            i++;
        });
        if(allid.length == 0) {
            layer.msg("请选择要下架的职位！", 2, 8);
            return false;
        } else {
            onstatus(allid, 1);
        }
    }

    function onstatus(id, status) { //上架 下架 设置
        $.post("index.php?c=job&act=opera", {
            id: id,
            status: status
        }, function(data) {
            if(data == 1) {
                layer.msg('设置成功！', 2, 9, function() {
                    window.location.reload();
                });
                return false;
            } else {
                layer.msg('设置失败！', 2, 8);
            }
        })
    }
	
	$(document).ready(function() {
		
 		$(".job_share").hover(function() {
     	
 			var html = $(this).find('.job_share_img').html();
            
     		layer.tips(html, this, {
                guide: 1,
				time:0,
                style: ['background-color:#5EA7DC;', '#5EA7DC']
            });
      		
        }, function() {
        	
            layer.closeAll('tips');
        });
 		
 		$(".job_whb").hover(function() {
 	     	
 			var html = $(this).find('.job_whb_img').html();
            
     		layer.tips(html, this, {
                guide: 1,
				time:0,
                style: ['background-color:#5EA7DC;', '#5EA7DC']
            });
     		
        }, function() {
        	
            layer.closeAll('tips');
        });
 		
        
        $('.yun_m_joblist_extension').hover(function() {
            var type = $(this).attr('dtype');
            var pid = $(this).attr('pid');
            
            $('.yun_m_joblist_extension').removeClass('yun_m_joblist_extension_cur_hov');
            
            $(this).addClass('yun_m_joblist_extension_cur_hov');
            
            if(type == 'rec') {
            
            	$('#tip' + pid).html('展示在列表右侧黄金位置，带来精确的投递；高质的效果');
            } else if(type == 'urgent') {
                
            	$('#tip' + pid).html('紧急招聘，强烈提升职位曝光度');
            } else if(type == 'jingjia') {
                
            	$('#tip' + pid).html('将职位信息固定排在页面第一页，不会被其他信息挤下去');
            } else if(type == 'autojob') {
                
            	$('#tip' + pid).html('自动刷新，让职位管理轻松更高效');
            }
        });
    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/jobserver.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
