<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:13:05
         compiled from "D:\rcw\uploads\app\template\member\com\part.htm" */ ?>
<?php /*%%SmartyHeaderCode:13655681795f9d9b21c7a1c5-21802844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b74e10d1ccec44d8cfb7326b7e1bd0162ed295' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\part.htm',
      1 => 1576479741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13655681795f9d9b21c7a1c5-21802844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'com_style' => 0,
    'config' => 0,
    'style' => 0,
    'statis' => 0,
    'todayEnd' => 0,
    'rows' => 0,
    'addjobnum' => 0,
    'list' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9b21c9d2d2_70234276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9b21c9d2d2_70234276')) {function content_5f9d9b21c9d2d2_70234276($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/js/part.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/class.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/class.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />

<div class="w1000">
    <div class="admin_mainbody">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 		<div class="com_tit"><span class="com_tit_span">兼职管理</span></div>
        
        <div class=right_box>
            <div class=admincont_box>
                <div class="job_list_tit">
                    <ul class="">
                        <li <?php if ($_GET['w']=="1") {?>class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=partok&w=1" title="招聘中的兼职">招聘中的兼职</a>
                        </li>
                        <li <?php if ($_GET['w']=="0") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=partok&w=0" title="待审核的兼职">待审核的兼职</a>
                        </li>
                        <li <?php if ($_GET['w']=="3") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=partok&w=3" title="未通过的兼职">未通过的兼职</a>
                        </li>
                        <li <?php if ($_GET['w']=="2") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=partok&w=2" title="过期的兼职">过期的兼职</a>
                        </li>
                        <li <?php if ($_GET['c']=="part") {?> class="job_list_tit_cur" <?php }?>>
                            <a href="index.php?c=part" title="全部兼职">全部兼职</a>
                        </li>
                    </ul>
                </div>
                
                <div class="clear"></div>
                
                <div class="com_body">
                <div class="com_new_tip mt20"> <span class="com_new_tip_h">温馨小提示</span>贵公司还可以发布（<span class="f60"><?php if ($_smarty_tpl->tpl_vars['statis']->value['vip_etime']>$_smarty_tpl->tpl_vars['todayEnd']->value||$_smarty_tpl->tpl_vars['statis']->value['vip_etime']=="0") {
if ($_smarty_tpl->tpl_vars['statis']->value['rating_type']==1) {
echo $_smarty_tpl->tpl_vars['statis']->value['job_num'];
} else { ?>不限<?php }
} else { ?>0<?php }?></span>）条兼职信息</div>
          
                    <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
	                    <div class="com_m_search" style="padding-bottom:0px;">
	                        <input class="com_m_tj" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','part','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" type="button" value="+ 发布兼职" name="input" style="margin-left:0px;">
	                    </div>
                    <?php }?>

                    <div class="clear"></div>

                    <div class="com_Release_job">
                        <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                        <form action="index.php" target="supportiframe" method="get" id='myform' class='layui-form'>
                            <input type="hidden" name="c" value="part" />
                            <input type="hidden" name="act" value="del" />
                            
                            <table class="com_table mt20">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>职位名称 </th>
                                    <th width="80">报名人数 </th>
                                    <th width="80">浏览量</th>
                                    <th width="170">时间</th>
                                    <th> 推广</th>
                                    <th width="200"> 操作</th>
                                </tr>

                                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                                <tr>
                                    <td width="30"><input type="checkbox" name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" class="com_job_list_check" lay-skin='primary'></td>
                                    <td>
                                        <a href="<?php echo smarty_function_url(array('m'=>'part','c'=>'show','id'=>'`$list.id`'),$_smarty_tpl);?>
" class="com_m_job_list_jobname_a cblue" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a>
                                    </td>

                                    <td align="center">
                                        <strong class="job_list_list_left_u"><?php echo $_smarty_tpl->tpl_vars['list']->value['applynum'];?>
</strong>人
                                        <div class="mt10">
                                            <a href="index.php?c=partapply&jobid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" class="com_bth cblue">查看</a>
                                        </div>
                                    </td>

                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['list']->value['hits'];?>
 </td>

                                    <td align="center">
                                        <div class="part_time_p">
                                            <div><?php echo $_smarty_tpl->tpl_vars['list']->value['edatetxt'];?>
</div>
                                       		更新日期：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['lastupdate'],'%Y-%m-%d');?>

                                        </div>
                                    </td>

                                    <td align="center">
                                        <div class="part_tg <?php if ($_smarty_tpl->tpl_vars['list']->value['rec_time']>time()) {?>yun_m_joblist_extension_cur<?php }?>">
                                            <i class="yun_m_joblist_extension_icon"></i>
                                            <div class="part_tg_p">推荐</div>
                                            <a href="javascript:void(0);" onclick="jobPromote('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['list']->value['rec_time']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['rec_time'],'%Y-%m-%d');
}?>', 4)" class="yun_m_joblist_extension_bth"></a>
                                        </div>
                                    </td>

                                    <td align="center">
                                        <a href="index.php?c=partadd&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" class=" com_bth cblue">修改</a>
                                        <a onclick="layer_del('确定要删除？', 'index.php?c=part&act=del&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
');" href="javascript:void(0)" class="com_bth cblue">删除</a><a href="javascript:void(0)" onclick="refreshPart('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','');" class=" com_bth cblue">刷新</a>
										
                                    </td>
                                </tr>
                                <?php }
if (!$_smarty_tpl->tpl_vars['list']->_loop) {
?>
                                <tr>
                                    <td colspan="9" class="table_end">
                                        <div class="msg_no">
                                            <p>亲，您还没有发布兼职职位哦~</p>
                                            <a href="javascript:;" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','part','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" class="com_msg_no_bth com_submit">发布兼职职位</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
                                <tr>
                                    <td colspan="8" class="">
                                        <div class="com_Release_job_bot ">
                                            <span class="com_Release_job_qx">
                                            <input id='checkAll' type="checkbox"  lay-filter='allcom' class="com_Release_job_qx_check" lay-skin='primary'> 全选</span>
                                            <input class="c_btn_02 c_btn_02_w110" type="button" value="批量延长有效期" onclick="allgotime();">
                                            <input class="c_btn_02 c_btn_02_w110" type="button" value="批量刷新职位" onclick="return refreshPart('','del[]');">
                                            <input class="c_btn_02 c_btn_02_w110" type="button" value="批量删除" onclick="return really('del[]');">
                                        </div> <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                                    </td>
 
                                </tr>
                                <?php }?>
                                
                            </table>
                        </form>

                        <div class="clear"></div>
                        <div class="wxts_box wxts_box_mt30">
                            <div class="wxts">温馨提示：</div>
                            1、如贵公司要快速招聘人才，建议升级会员，获取更多的展示机会，以帮助您快速找到满意的人才。 <br> 2、请贵公司保证职位信息的真实性、合法性，并及时更新职位信息，如被举报或投诉，确认发布的信息违反相关规定后，本站将会关闭贵公司的招聘服务，敬请谅解！
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--延期天数弹出框-->
<div id="gotime" style="display:none; width:300px; ">
    <div class="">
        <div class="job_box_msg" style="margin-left:10px;_margin-left:5px; padding:3px;border:none; background:#f8f8f8">
            <p id="gotime_edate"></p>
        </div>
        <form action='index.php?c=partok&act=opera' target="supportiframe" method="post" id='gotimef'>
            <input type="hidden" name="gotimeid" id="gotimeid" value="" />

            <div class="job_box_inp" style="padding:10px 5px 5px 20px">
                <span style="float:left; margin-right:0px;">延期天数：</span>
                <input name="day" value="" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;" />
                <span style="float:right; margin-right:0px;">天</span>
            </div>

            <span class="job_box_botton" style="width:100%;"> 
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#gotimef').submit()},0);">确定</a> 
			</span>
        </form>
    </div>
</div>
<!--延期天数弹出框end-->

<?php echo '<script'; ?>
>
	
	layui.use(['form','layer'], function(){
		var $ = layui.$,
			form = layui.form,
			layer = layui.layer;
		
		form.on('checkbox(allcom)', function (data) {
	   	 	$("input[name='del[]']").each(function () {
	        	this.checked = data.elem.checked;
	    	});
	    	form.render('checkbox');
	  	});
	});
	
    function allgotime() { //批量延期
        var allid = [];
        var i = 0;
        $('input[name="del[]"]:checked').each(function() {
            allid.push($(this).val());
            i++;
        });
        if(allid.length == 0) {
            layer.msg("请选择要延期的职位！", 2, 8);
            return false;
        } else {
            gotime(allid, i);
        }
    }

    function gotime(id, i) {
        $("#gotimeid").val(id);
        if(i) {
            $("#gotime_edate").html("本次共延期<font color='red'>" + i + "</font>个职位！");
        }
        $.layer({
            type: 1,
            title: '延期天数',
            closeBtn: [0, true],
            border: [10, 0.3, '#000', true],
            area: ['300px', '210px'],
            page: {
                dom: '#gotime'
            }
        });
    }
    $(document).ready(function() {
        $(".job_cz").hover(function() {
            var aid = $(this).attr("aid");
            $("#czlist" + aid).show();
            $(".job_cz_hover").attr("class", "");
            $("#czlist_" + aid).attr("class", "job_cz_hover");
        }, function() {
            var aid = $(this).attr("aid");
            $("#czlist" + aid).hide();
        })
    })
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/jobserver.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
