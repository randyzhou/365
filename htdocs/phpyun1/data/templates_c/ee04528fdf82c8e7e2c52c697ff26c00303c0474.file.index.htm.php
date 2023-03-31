<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:10:34
         compiled from "D:\rcw\uploads\app\template\wap\member\user\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:349921045fa59faa1c5926-47700331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee04528fdf82c8e7e2c52c697ff26c00303c0474' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\index.htm',
      1 => 1576583345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '349921045fa59faa1c5926-47700331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'signstate' => 0,
    'username' => 0,
    'user' => 0,
    'config' => 0,
    'expect' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa59faa1e5e95_02054248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa59faa1e5e95_02054248')) {function content_5fa59faa1e5e95_02054248($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
    .header_h {
        display: none;
    }
	body{ background:#f2f2f2}
</style>

<div class="yun_user_newmember_header">
<div class="yun_user_newmember_cz">  
<span class="yun_user_newmember_qd">   <?php if ($_smarty_tpl->tpl_vars['signstate']->value==1) {?>
                     <a href="javascript:void(0);" onClick="signok();"><span class="yun_usermember_qdbth">已签到</span></a> <?php } else { ?>
                    <a href="javascript:void(0);" onClick="sign();"><span class="yun_usermember_qdbth">签到</span></a>
                    <?php }?>
                    </span>
                    <a href="index.php?c=sysnews" class="yun_user_newmember_msg"><i class="yun_com_membersysnews_n" id="sysmsgnum"></i></a><a href="index.php?c=set" class="yun_user_newmember_set"></a></div>
<div class="yun_user_newmember_username"> <a href="index.php?c=set"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></div>
<div class="yun_user_newmember_resume">
<a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['user']->value['def_job'];?>
">编辑在线简历&gt;</a>

<div class="yun_user_newmember_pic"> <a href="index.php?c=photo">
    <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==1) {?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"> 
    <?php } else { ?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);"> 
    <?php }?>
</a></div>
</div>
<div class="yun_user_newmember_databox">
<ul>
 
<li>
<?php if ($_smarty_tpl->tpl_vars['user']->value['def_job']>0) {?>
<a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['user']->value['def_job'];?>
"><span class="yun_user_newmember_data"><?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%</span>我的简历</a>
<?php } else { ?>
<a href="index.php?c=addresume"><span class="yun_user_newmember_data"><?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%</span>我的简历</a>
<?php }?>
</li>   
<li><a href="index.php?c=invite&back=1"><span class="yun_user_newmember_data" id="yqnum"></span>面试通知<i class="yun_usermember_tj_n_new" id="wkyqnum"></i></a></li>        
<li><a href="index.php?c=sq&back=1"><span class="yun_user_newmember_data" id="sq_jobnum"></span>投递记录</a></li>   

</ul>

 <li>
            
                
                
</div>
</div>
<div class="clear"></div>
		<div class="clear"></div>
			<div class="sx_tip_box">
				<div class="sx_tip_box_p">
					<div class="sx_tip">
						<div class="sx_tip_cont">
							<!--无简历情况-->
                            <?php if (!$_smarty_tpl->tpl_vars['user']->value['def_job']) {?>
							<div>
								<div class="sx_tip_name">简历是求职第一步</div>
								<div class="sx_tip_p">您还没有创建简历</div>
								<a class="sx_tip_bth" href="index.php?c=addresume">立即创建</a>
							</div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status']=='2') {?>
							<!--简历隐藏情况-->
							<div>
								<div class="sx_tip_name">您的简历处于隐藏状态</div>
								<div class="sx_tip_p">开放简历让企业主动找您</div>
								
									<a  href="index.php?c=privacy" class="sx_tip_bth">立即开放</a>
								
							</div>
                            <?php } else { ?>
							<!--有简历情况-->
							<div>
								<div class="sx_tip_name">刷新您的简历，提升排名</div>
								<div class="sx_tip_p">引起企业关注，提高邀请率</div>
								<a class="sx_tip_bth"   href="javascript:;" id="refresh" data-id="<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
">立即刷新</a>
							</div>
                            <?php }?>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="user_newnav">
				<div class="user_newnav_cont">
					<a href="index.php?c=collect&back=1" class="user_newnav_list">
						<i class="user_newnav_icon user_newnav_icon_sc"></i> 收藏夹
					</a>
					<a href="index.php?c=atncom" class="user_newnav_list">
						<i class="user_newnav_icon user_newnav_icon_gz"></i>我的关注
					</a>
					<a href="index.php?c=commsg" class="user_newnav_list">
					<i class="user_newnav_icon user_newnav_icon_wqy"></i>问企业
					</a>
					<a href="index.php?c=look" class="user_newnav_list">
					<i class="user_newnav_icon user_newnav_icon_look"></i>谁看了我
					</a>
				</div>
			</div>
			<div class="clear"></div>
            
          

<div class="clear"></div>
<div class="yun_user_newmember_c">
<ul class="yun_user_newmember_nav">
<li>
<?php if ($_smarty_tpl->tpl_vars['user']->value['def_job']>0) {?>
<a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['user']->value['def_job'];?>
"><i class="yun_usermember_nav_icon"></i>我的简历</a>
<?php } else { ?>
<a href="index.php?c=addresume"><i class="yun_usermember_nav_icon"></i>我的简历</a>
<?php }?>
</li>
<li><a href="index.php?c=jobcolumn"><i class="yun_usermember_nav_icon yun_usermember_nav_iconjob"></i>求职管理</a></li>

</ul>
<ul class="yun_user_newmember_nav">
<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_ask_web']==1) {?>
<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask'),$_smarty_tpl);?>
"><i class="yun_usermember_nav_icon yun_usermember_nav_iconask"></i>我的问答</a></li>
  <?php }?>

</ul>    
<ul class="yun_user_newmember_nav">
<li><a href="index.php?c=finance"><i class="yun_usermember_nav_icon yun_usermember_nav_iconcw"></i>财务管理</a></li>

<li><a href="index.php?c=set"><i class="yun_usermember_nav_icon yun_usermember_nav_iconzh"></i>账号设置</a></li>
  </ul>
</div>

<!--编辑基本信息引导匡-->
<div id="yingdaoone" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['user']->value['name']!=" ") {?>display:none;<?php }?>">
    <div style="width:100%; position:absolute;left:0px;top:140px;">
        <div style="padding:20px;">
            <div class="index_yd_box">
                <div class="index_yd_box_h1">亲，你还没有填写基本信息</div>
                <div class="user_resume_index_tip_p">
                    <a href="index.php?c=info" class="user_resume_index_tip_sub">编辑</a>
                </div>
                <div class="user_resume_index_tip_p2">
                    <a href="javascript:Close_yd('yingdaoone');" class="user_resume_index_tip_p2_a">下次再说</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['user']->value['name']=='') {?>
<!--创建简历引导匡-->
<div id="yingdaofour" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['expect']->value['integrity']) {?>display:none;<?php }?>">

    <div class="resume_refresh_box">
        <div class="resume_refresh_box_c">
            <div class="resume_refresh">温馨提示：</div>
            <div class="resume_refresh_p1">你没有创建简历，无法申请职位</div>
            <div class="resume_refresh_p2"> 为了更快的找到满意工作~</div>

            <div class="resume_refresh_bth">
				 
				<a href="index.php?c=addresume" class="resume_refresh_bth_a">创建简历</a>

			</div>
            <a href="javascript:Close_yd('yingdaofour');" class="resume_refresh_bth_qx"></a>

        </div>
    </div>
</div>

<?php }?> 

 
<?php if ($_smarty_tpl->tpl_vars['expect']->value['integrity']&&$_smarty_tpl->tpl_vars['expect']->value['lastupdate']<$_smarty_tpl->tpl_vars['time']->value&&$_COOKIE['exprefresh']!=1&&$_smarty_tpl->tpl_vars['config']->value['resume_sx']==2) {?> <!--刷新简历引导匡-->
    <div id="yingdaotwo" style="width:100%;height:100%; background:rgba(0,0,0,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['user']->value['name']!=" "&&$_smarty_tpl->tpl_vars['expect']->value['lastupdate']>$_smarty_tpl->tpl_vars['time']->value) {?>display:none;<?php }?>">
        <div class="resume_refresh_box">
            <div class="resume_refresh_box_c">
                <div class="resume_refresh">温馨提示：</div>
                <div class="resume_refresh_p1">不让简历石沉大海，每天坚持刷新简历</div>
                <div class="resume_refresh_p2"> 让企业在第一时间找到你~</div>

                <div class="resume_refresh_bth">
                    <a href="javascript:;" id="refresh1" data-id="<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
" class="resume_refresh_bth_a">立即刷新</a>
                </div>
                <a href="javascript:Close_yd('yingdaotwo');" class="resume_refresh_bth_qx"></a>

            </div>
        </div>
    </div>
    <?php }?>
    
    <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
        function Close_yd(id) {
            $("#" + id).hide();
        }
        mui.init({
            swipeBack: true //启用右滑关闭功能
        });
        //简历刷新
        if(document.getElementById("refresh")) {
            document.getElementById("refresh").addEventListener('tap', function() {
				layer_load('执行中，请稍候...');
                $.get(wapurl + "member/index.php?c=resumeset&update=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
", function(data) {
					layer.closeAll(); 
                    layermsg(data ? '刷新成功！' : '刷新失败！', 2, function() {
                        mui.openWindow({
                            url: wapurl + "member/",
                        });
                    });
                });
            });
        }

         if(document.getElementById("refresh1")) {
            document.getElementById("refresh1").addEventListener('tap', function() {
                layer_load('执行中，请稍候...');
                $.get(wapurl + "member/index.php?c=resumeset&update=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
", function(data) {
                    layer.closeAll(); 
                    layermsg(data ? '刷新成功！' : '刷新失败！', 2, function() {
                        mui.openWindow({
                            url: wapurl + "member/",
                        });
                    });
                });
            });
        }
		 
    <?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
