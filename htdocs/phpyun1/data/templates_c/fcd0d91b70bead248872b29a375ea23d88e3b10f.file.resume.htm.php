<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:39:53
         compiled from "D:\rcw\uploads\app\template\member\user\resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:6269230105f9da16951c451-54071455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd0d91b70bead248872b29a375ea23d88e3b10f' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\resume.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6269230105f9da16951c451-54071455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
    'resume' => 0,
    'def_job' => 0,
    'maxnum' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9da16954d5f2_95934746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9da16954d5f2_95934746')) {function content_5f9da16954d5f2_95934746($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
 type="text/javascript">

    function gourl() {
        layer.confirm('确定要创建新的简历吗？', function() {
            window.location.href = 'index.php?c=expect&act=add';
            window.event.returnValue = false;
            return false;
        });
    }

    

    

   

    function showmsg(msg) {
        $("#msgs").html(msg);
        $.layer({
            type: 1,
            title: '查看原因',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['400px', '200px'],
            page: {
                dom: "#showmsg"
            }
        });
    }
    //var user_topintegrity='<?php echo $_smarty_tpl->tpl_vars['config']->value['user_topintegrity'];?>
';
<?php echo '</script'; ?>
>
<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">

        <div class="yun_m_tit fltL"> <span class="member_right_h1_span fltL">我的简历</span> <i class="member_right_h1_icon user_bg"></i></div>
        <div class="resume_box_list">
            <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
            <div class="resume_Prompt"><i class="resume_Prompt_icon"></i>提示：所有简历均可用于投递职位；当简历隐私设置为"公开"时，仅默认简历可以被企业搜索到 </div>
            <?php }?>
            <div class="clear"></div>
            <?php  $_smarty_tpl->tpl_vars['resume'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resume']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resume']->key => $_smarty_tpl->tpl_vars['resume']->value) {
$_smarty_tpl->tpl_vars['resume']->_loop = true;
?> 
			
			<?php if ($_smarty_tpl->tpl_vars['resume']->value['id']==$_smarty_tpl->tpl_vars['def_job']->value) {?>
            <!-- default  resume---------------------->
            <div class="myresume mt20">
                <div class="myresume_left ">
                    <div class="myresume_name"> 简历名称：
                        <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['resume']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
</a>
                        <span class="myresume_default"><i  class="myresume_default_icon"></i>默认简历</span>
                    </div>
                    <div class="myresume_complete " id="tipid" rid="<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
">
                        <span class="myresume_complete_name">完整度<span class="myresume_wz_n"><?php echo $_smarty_tpl->tpl_vars['resume']->value['integrity'];?>
</span>% </span>
                        <span class="shell fltL shell_mt"><span class="shell_mt_c" style="width:<?php echo $_smarty_tpl->tpl_vars['resume']->value['integrity'];?>
%"><i class="shell_q"></i></span>
                        </span>
                        <div class="myresume_complete_tip" <?php if ($_smarty_tpl->tpl_vars['resume']->value['integrity']>=$_smarty_tpl->tpl_vars['config']->value['user_sqintegrity']) {?> style="display:none;" <?php }?> id="tiplist<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
">
                            <div class="myresume_complete_tip_box">
                                <a href="javascript:;" onclick="$('#tiplist<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
').hide();" class="myresume_complete_tip_close"></a>
                                <i class="myresume_complete_tip_box_icon"></i>
                                <div class="myresume_complete_tip_ws">你的简历完善度比较低</div>
                                <div class="myresume_complete_tip_wsts">找到满意工作的求职者，简历完整度都达到<?php echo $_smarty_tpl->tpl_vars['config']->value['user_sqintegrity'];?>
%</div>
                            </div>
                        </div>
                    </div>
                    <div class="myresume_type">
						<?php if ($_smarty_tpl->tpl_vars['resume']->value['doc']) {?>
                        <span class="myresume_type_s">类型：粘贴简历</span>
						<?php } else { ?>
						<span class="myresume_type_s">类型：标准简历</span>
						<?php }?>
                        <span class="myresume_type_s">更新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['resume']->value['lastupdate'],'%Y-%m-%d');?>
</span>
                        <span class="myresume_type_s">被浏览：<?php echo $_smarty_tpl->tpl_vars['resume']->value['hits'];?>
</span>
                    </div>

                    <div class="myresume_state">
                        <div class="myresume_state_zt">
                            状态：<?php if ($_smarty_tpl->tpl_vars['resume']->value['state']=='1') {?>
                            <span class="myresume_state_ysh">已审核</span><?php } elseif ($_smarty_tpl->tpl_vars['resume']->value['state']=='0') {?>
                            <span class="myresume_state_dsh">正在审核中</span><?php } elseif ($_smarty_tpl->tpl_vars['resume']->value['state']=='3') {?>
                            <span class="myresume_state_btg">审核不通过</span> <?php if ($_smarty_tpl->tpl_vars['resume']->value['statusbody']) {?>原因：<?php echo $_smarty_tpl->tpl_vars['resume']->value['statusbody'];
}
}?>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['resume']->value['state']=='1') {?>
                        <div class="myresume_state_cz">
                        
                            <a href="index.php?c=likejob&id=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
" class="" resumeid="<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
" type='pipei'>自动匹配职位<i class="myresume_state_tip_box_icon"></i></a>
                        </div>
                        <?php }?>
                    </div>

                </div>

                <div class="myresume_right ">
                    <div class="member_index_resume_set mt20">
                        <?php if ($_smarty_tpl->tpl_vars['resume']->value['status']==2) {?>
                        <a onClick="layer_del('', 'index.php?c=privacy&act=up&status=1');" href="javascript:void(0);"><i class="yun_user_index_r_yc"><em class="myresume_kqicon"></em></i></a>
                        <a href="index.php?c=privacy">
                            <div class="yun_user_index_set_name">简历已关闭</div>
                        </a>
                        <?php } else { ?>
                        <a onClick="layer_del('', 'index.php?c=privacy&act=up&status=2');" href="javascript:void(0);"><i class="yun_user_index_r_gk"></i></a>
                        <a href="index.php?c=privacy">
                            <div class="yun_user_index_set_name">简历已公开</div>
                        </a>
                        <?php }?>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['resume']->value['state']=='1') {?>
                    <div class="member_index_resume_t_cz_b">
                        <a href="javascript:void(0)" onclick="resumetop('<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['resume']->value['topdatetime']>0) {
echo $_smarty_tpl->tpl_vars['resume']->value['topdate'];
}?>','<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
')" class="member_index_resume_t_cz_bth ">简历置顶</a>

                        <a href="index.php?c=expect<?php if ($_smarty_tpl->tpl_vars['resume']->value['doc']) {?>q<?php }?>&e=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
" class="member_index_resume_t_cz_bth ">修改简历</a>
                        <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['resume']->value['id']),$_smarty_tpl);?>
" target="_blank" class="member_index_resume_t_cz_bth mt15">预览简历</a>
                        <a onclick="layer_del('确定要刷新？', 'index.php?c=resume&act=refresh&id=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
');" href="javascript:void(0)" class="member_index_resume_t_cz_bth member_index_resume_t_cz_bth_hover mt15">刷新简历</a>
                    </div>
               
                    <?php } else { ?>
                    <div class="member_index_resume_t_cz_b">
                        <a href="index.php?c=expect<?php if ($_smarty_tpl->tpl_vars['resume']->value['doc']) {?>q<?php }?>&e=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
" class="member_index_resume_t_cz_bth ">修改简历</a>
                        <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['resume']->value['id']),$_smarty_tpl);?>
" target="_blank" class="member_index_resume_t_cz_bth mt15">预览简历</a>
                        <a onclick="layer_del('确定要刷新？', 'index.php?c=resume&act=refresh&id=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
');" href="javascript:void(0)" class="member_index_resume_t_cz_bth member_index_resume_t_cz_bth_hover mt15">刷新简历</a>
                        <a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=resume&act=del&id=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
');" class="member_index_resume_t_cz_bth"> 删除简历</a>
                    </div>
                    <?php }?>
                </div>

                 
            </div>

            <?php } else { ?>
            <!--  备用简历-->
            <div class="myresume mt20">

                <div class="myresume_left ">
                    <div class="myresume_name"> 简历名称：
                        <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['resume']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
</a>

                    </div>
                    <div class="myresume_complete ">
                        <span class="myresume_complete_name">完整度<span class="myresume_wz_n"><?php echo $_smarty_tpl->tpl_vars['resume']->value['integrity'];?>
</span>% </span>
                        <span class="shell fltL shell_mt"><span class="shell_mt_c" style="width:<?php echo $_smarty_tpl->tpl_vars['resume']->value['integrity'];?>
%"><i class="shell_q"></i></span>
                        </span>

                    </div>
                    <div class="myresume_type">
                        <span class="myresume_type_s">类型：<?php if ($_smarty_tpl->tpl_vars['resume']->value['doc']=='1') {?>粘贴简历<?php } else { ?>标准简历<?php }?></span>
                        <span class="myresume_type_s">更新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['resume']->value['lastupdate'],'%Y-%m-%d');?>
</span>
                        <span class="myresume_type_s">被浏览：<?php echo $_smarty_tpl->tpl_vars['resume']->value['hits'];?>
</span>
                    </div>

                    <div class="myresume_state">
                        <div class="myresume_state_zt">
                            状态：<?php if ($_smarty_tpl->tpl_vars['resume']->value['state']=='1') {?>
                            <span class="myresume_state_ysh">已审核</span><?php } elseif ($_smarty_tpl->tpl_vars['resume']->value['state']=='0') {?>
                            <span class="myresume_state_dsh">正在审核中</span><?php } elseif ($_smarty_tpl->tpl_vars['resume']->value['state']=='3') {?>
                            <span class="myresume_state_btg">审核不通过</span> <?php if ($_smarty_tpl->tpl_vars['resume']->value['statusbody']) {?>原因：<?php echo $_smarty_tpl->tpl_vars['resume']->value['statusbody'];
}
}?>
                        </div>

                    </div>

                </div>
                <div class="myresume_right ">
                    <div class="myresume_default_set">
                        <a href="javascript:void(0);" class="myresume_default_set_a" onclick="layer_del('确定要执行？', 'index.php?c=resume&act=defaultresume&id=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
');">设为<br>默认</a>

                        <div class="myresume_default_set_p" id="demo<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
">
                            <div class="myresume_default_set_p_b">设为默认简历，才能被企业搜索查看到哦！<i class="myresume_default_set_p_icon"></i>
                                <a href="javascript:void(0)" onclick="$('#demo<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
').hide();" class="myresume_default_set_p_icon_close"></a>
                            </div>
                        </div>
                    </div>

                    <div class="myresume_right_cz_fmr">
                        <a href="index.php?c=expect<?php if ($_smarty_tpl->tpl_vars['resume']->value['doc']) {?>q<?php }?>&e=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
" class="myresume_right_cz_fmr_a">修改简历 </a>
                        <span class="myresume_right_cz_fmr_line">|</span>
                        <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['resume']->value['id']),$_smarty_tpl);?>
" class="myresume_right_cz_fmr_a">预览简历 </a>
                        <span class="myresume_right_cz_fmr_line">|</span>
                        <a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=resume&act=del&id=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
');" class="myresume_right_cz_fmr_a">删除简历 </a>
                    </div>

                </div>

            </div>

            <?php }?> <?php }
if (!$_smarty_tpl->tpl_vars['resume']->_loop) {
?>
            <div class="msg_no">您还没有简历。</div>
            <?php } ?>
            <div class="clear"></div>
            <div class="myresume_cj">
                <?php if ($_smarty_tpl->tpl_vars['maxnum']->value=='') {?> 您还可以创建 <span class="resume_cj_sz">(无数)</span> 份备用简历 <?php } else { ?> 您还可以创建 <span class="resume_cj_sz">(<?php echo $_smarty_tpl->tpl_vars['maxnum']->value;?>
)</span> 份备用简历 <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['maxnum']->value>0) {?>
                <a class=" myresume_cj_bth" title="创建新简历" href="javascript:void(0)" onclick="gourl();return false;">创建新简历</a>
                <a href="index.php?c=expectq&add=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" title="直接粘贴已有的个人简历" class=" myresume_cj_bth">在线粘贴简历</a>
                <?php } else { ?>
                <a class="myresume_cj_bth" title="创建新简历" href="javascript:void(0)" onclick="layer.msg('你的简历数已经达到系统设置的简历数了',2,8);return false;">创建新简历</a>
                <a href="javascript:void(0)" onclick="layer.msg('你的简历数已经达到系统设置的简历数了',2,8);return false;" title="直接粘贴已有的个人简历" class=" myresume_cj_bth">在线粘贴简历</a>
                <?php }?>
            </div>
            <div class="clear"></div>

        </div>
    </div>
</div>


<div id="showmsg" style="display:none; width: 400px;">
    <div id="infobox">
        <div class="admin_Operating_sh" style="padding:10px; ">
            <div class="admin_Operating_sh_h1" style="padding:5px;">审核说明：
                <div class="user_Audit_box" id="msgs"></div>
            </div>
            <div class="admin_Operating_sub" style="margin-top:10px;">
                &nbsp;&nbsp;<input type="button" onclick="layer.close($('#layindex').val());" class="com_pop_bth" value='确认'>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    layui.use(['layer', 'form', 'laydate'], function() {
        var layer = layui.layer,
            form = layui.form,
            $ = layui.$;
    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
