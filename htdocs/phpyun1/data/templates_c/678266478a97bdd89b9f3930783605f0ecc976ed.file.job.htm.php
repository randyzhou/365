<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 09:29:32
         compiled from "D:\rcw\uploads\app\template\member\com\job.htm" */ ?>
<?php /*%%SmartyHeaderCode:14946003225fab3e7c66b974-48594462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '678266478a97bdd89b9f3930783605f0ecc976ed' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\job.htm',
      1 => 1579333048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14946003225fab3e7c66b974-48594462',
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
    'rows' => 0,
    'job' => 0,
    'vipIsDown' => 0,
    'addjobnum' => 0,
    'config' => 0,
    'statis' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab3e7c6994c2_55983152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab3e7c6994c2_55983152')) {function content_5fab3e7c6994c2_55983152($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
    <div class="admin_mainbody">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="yun_com_tit"><span class="yun_com_tit_s">职位管理</span></div>
        <div class=right_box>
            <div class=admincont_box>
                
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

                <div class="clear"></div>

                <div class="com_body">

                    <div class="clear"></div>
					<?php if ($_GET['w']==4||$_GET['w']==5) {?>
                    <div class="joblist_search" style="margin-bottom:20px;">
						<form action="index.php" method="get">
						  <div class="joblist_search_box">
							<input name="c" type="hidden" value="job">
							<input name="w" type="hidden" value="<?php echo $_GET['w'];?>
">
							<input name="keyword" type="text" class="joblist_search_box_text" placeholder="请输入职位关键字">
							<input name="" type="submit" class="joblist_search_bth" value="搜索">
						  </div>
						</form>
					</div>
					<?php }?>
                    <div class="com_Release_job mt20">
					
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    	<form action="index.php?c=job&act=opera" target="supportiframe" method="post" id='myform' class='layui-form'>
	                        <table class="com_table">
	                            <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
	                            <tr>
	                                <th width="20">&nbsp;</th>
	                                <th>职位名称</th>
	                                <th>收到简历</th>
	                                <th>浏览量 </th>
	                                <th><?php if ($_GET['w']==4) {?>招聘状态<?php } else { ?>审核状态 <?php }?></th>
	                                <th>更新时间</th>
	                                <th width="160">操作</th>
	                            </tr>
	                            <?php }?>
                            
                                <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
                                <tr>
                                    <td><input type="checkbox" name="checkboxid[]" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="com_Release_job_check" lay-skin="primary"></td>
                                    <td align="left">
                                        <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job.id`'),$_smarty_tpl);?>
" class="com_Release_name"><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
</a>
                                    </td>
                                    <td align="center">
                                        <a href="index.php?c=hr&jobid=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['jobnum'];?>
份</a>
                                    </td>
                                    <td align="center"> <?php echo $_smarty_tpl->tpl_vars['job']->value['jobhits'];?>
 </td>

                                    <?php if ($_GET['w']==4) {?>

                                    <td align="center">
                                        <?php if ($_smarty_tpl->tpl_vars['job']->value['status']=="1") {?> <span class="com_m_job_lis_zt" style="padding:0px 0px">已下架</span><?php }?>
                                    </td>

                                    <?php } else { ?>
                                    <td align="center">
                                        <?php if ($_smarty_tpl->tpl_vars['job']->value['state']=="0") {?> <span class="n_verify">等待审核</span><?php }?> 
										<?php if ($_smarty_tpl->tpl_vars['job']->value['state']=="1") {?> <span class="">已审核</span><?php }?> 
										<?php if ($_smarty_tpl->tpl_vars['job']->value['state']=="3") {?>
											<span class="y_verify_wtg">
												未通过<i class="y_verify_wtg_icon"></i>
												<?php if ($_smarty_tpl->tpl_vars['job']->value['statusbody']) {?>
													<div class="y_verify_wtg_yuany">说明：<?php echo $_smarty_tpl->tpl_vars['job']->value['statusbody'];?>
</div>
												<?php }?>
											</span> 
										<?php }?>
                                    </td>
                                    <?php }?>
                                    <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],'%Y-%m-%d');?>
 </td>

                                    <td align="center">
                                        
                                        <a href="index.php?c=jobadd&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="com_bth cblue" class="cblue">修改</a>
                                        <a href="javascript:void(0)" onclick="layer_del('确定要删除该职位？','index.php?c=job&act=opera&del=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="com_bth cblue">删除</a><?php if ($_smarty_tpl->tpl_vars['job']->value['status']=="1") {?> 
	                                        <?php if ($_smarty_tpl->tpl_vars['vipIsDown']->value) {?> 
	                                        <a href="javascript:void('0');" onclick="ShowToast();" class="com_received_username_yqms" style="display:block; margin-top:10px;">上架职位</a>
	                                        <?php } else { ?>
	                                        <a href="javascript:onstatus('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
','2');" class="com_received_username_yqms" style="display:block; margin-top:10px;">上架职位</a>
	                                        <?php }?> 
                                        <?php }?>
                                    </td>
                                </tr>
                                <?php }
if (!$_smarty_tpl->tpl_vars['job']->_loop) {
?>
                                <tr>
                                    <td colspan="8" class="table_end">
                                        <div class="msg_no">
                                            <p>亲爱的用户，目前您还没有相关职位</p>
                                            <a href="javascript:;" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="com_msg_no_bth com_submit">发布职位</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?> 
                                <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
                                <tr>
                                    <td colspan="8" class="">
                                        <div class="com_Release_job_bot">
                                            <span class="com_Release_job_qx">
												<input id='checkAll' type="checkbox"  lay-filter="allcom"  class="com_Release_job_qx_check" lay-skin="primary">全选
											</span> 
											<?php if ($_GET['w']=='4') {?>
												<?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']<strtotime('tomorrow')&&$_smarty_tpl->tpl_vars['statis']->value['vip_etime']!='0') {?>
                                            		<input class="c_btn_02 c_btn_02_w110" type="button" value="一键上架招聘" onclick="ShowToast();"> 
                                            	<?php } else { ?>
                                            		<input class="c_btn_02 c_btn_02_w110" type="button" value="一键上架招聘" onclick="return allonstatusopen('checkboxid[]');"> 
                                            	<?php }?>
                                            <?php }?>

                                            <input class="c_btn_02 c_btn_02_w110" type="button" value="批量删除职位" onclick="return really('checkboxid[]');">
                                        </div>
                                        <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                                    </td>
                                </tr>
                                <?php }?>
                            
                        	</table>
						</form>
                        <div class="clear"></div>
                        <div class="clear"></div>

                        <div class="wxts_box wxts_box_mt30">
                            <div class="wxts">温馨提示：</div>
                            1、如贵公司要快速招聘人才，建议成为我们的会员，获取更多的展示机会，以帮助您快速找到满意的人才。 <br> 2、请贵公司保证职位信息的真实性、合法性，并及时更新职位信息，如被举报或投诉，确认发布的信息违反相关规定后，本站将会关闭贵公司的招聘服务，敬请谅解！
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
			layer = layui.layer;
    	
    	form.on('checkbox(allcom)', function (data) {
       	 	$("input[name='checkboxid[]']").each(function () {
            	this.checked = data.elem.checked;
        	});
        	form.render('checkbox');
      	});
  	});
    
        function allonstatusopen() { //批量上架
            var allid = [];
            var i = 0;
            $('input[name="checkboxid[]"]:checked').each(function() {
                allid.push($(this).val());
                i++;
            });
            if(allid.length == 0) {
                layer.msg("请选择要上架的职位！", 2, 8);
                return false;
            } else {
                onstatus(allid, 2);
            }
        }

        function onstatus(id, status) { //上架下架设置
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

        function ShowToast() {
 			
        	var uList	=	document.getElementById('rating_type');
			
			
            var msglayer = layer.open({
                type: 1,
                title: '职位招聘',
                closeBtn: 1,
                border: [10, 0.3, '#000', true],
                area: ['810px', 'auto'],
                content: $("#tcmsg"),
                cancel:function(){
                    window.location.reload();
                }
            });
            
         } 
    <?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
