<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:51:44
         compiled from "D:\rcw\uploads\app\template\admin\web_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:16176422295f9d25a02cc201-66841018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a39ebab4cb782c1ee5fc5e33eade65eb9546dcae' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\web_config.htm',
      1 => 1576747925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16176422295f9d25a02cc201-66841018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'cache' => 0,
    'v' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d25a02f5184_00709768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d25a02f5184_00709768')) {function content_5f9d25a02f5184_00709768($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">页面设置功能：实现“伪静态设置、前台列表最大展示数量、外部链接”等进行设置！伪静态可以增强网站收录友好度！运营者大部分都是开启的！</div>
</div>
</div>
<div class="clear"></div>
<div style="height:10px;"></div>

  <div class="main_tag">
    <div class="clear"></div>
    <div class="tag_box">
      <div>
        <form method="post" class="layui-form">
          <table width="100%" class="table_form">
            <tr>
              <th width="220" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
              <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
            </tr>

            <tr class="admin_table_trbg">
              <th width="220">伪静态设置：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input type="checkbox" name="sy_seo_rewrite" lay-skin="switch" lay-text="开启|关闭"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_seo_rewrite']=="1") {?>
                       checked
                        <?php }?>
                        />
                    </div>
                   <span class="admin_web_tip">
                      修改伪静态之前要先根据服务器添加伪静态规则
                   </span>
                  </div>
                </div>
              </td>
            </tr> 

            <tr>
              <th width="220">头部浮动导航：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input type="checkbox" name="sy_header_fix" lay-skin="switch" lay-text="开启|关闭"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_header_fix']=="1") {?>
                       checked
                        <?php }?>
                        />
                    </div>
                  </div>
                </div>
              </td>
            </tr> 
            <tr>
              <th width="220">首页底部浮动提示条：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input type="checkbox" name="sy_footer_fix" lay-skin="switch" lay-text="开启|关闭"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_footer_fix']=="1") {?>
                       checked
                        <?php }?>
                        />
                    </div>
                  </div>
                </div>
              </td>
            </tr> 

             <tr class="admin_table_trbg">
              <th width="220">新闻显示形式：</th>
              <td>
                  <div class="layui-form-item">
                    <div class="layui-input-block">
                      <div class="layui-input-inline">
                        <input name="sy_news_rewrite" value="1" title="动态"
                          <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_news_rewrite']=="1") {?>
                           checked 
                          <?php }?>
                           type="radio"/>
                        <input name="sy_news_rewrite" value="2" title="静态"
                          <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_news_rewrite']=="2") {?>
                           checked 
                          <?php }?>
                         type="radio"/>
                       </div>
                      <span class="admin_web_tip">
                        修改为静态，访问时显示静态页内容，提升效率
                     </span>
                    </div>
                  </div>

              </td>
            </tr>   

            <tr>
              <th width="220">友情链接申请：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input type="checkbox" name="sy_linksq" lay-skin="switch" lay-text="开启|关闭"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_linksq']=="1") {?>
                       checked
                        <?php }?>
                        />
                    </div>
                  </div>
                </div>
              </td>
            </tr>
               <tr class="admin_table_trbg">
              <th width="220">切换身份类型：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input type="checkbox" name="sy_user_change" lay-skin="switch" lay-text="开启|关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_change']=="1") {?> checked <?php }?> />
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="admin_table_trbg">
              <th width="220">手机端自动跳转到wap：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input type="checkbox" name="sy_wap_jump" lay-skin="switch" lay-text="开启|关闭" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wap_jump']=="1") {?> checked <?php }?> />
                    </div>
                  </div>
                </div>
              </td>
            </tr>

			<tr class="admin_table_trbg">
              <th width="220">PC端允许访问WAP端：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input type="checkbox" name="sy_pc_jump_wap" lay-skin="switch" lay-text="开启|关闭"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_pc_jump_wap']=="1") {?>
                       checked
                        <?php }?>
                        />
                    </div>
                  </div>
                </div>
              </td>
            </tr>
			
			<tr class="admin_table_trbg">
              <th width="220">h5分享：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input type="checkbox" name="sy_h5_share" lay-skin="switch" lay-text="开启|关闭"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_h5_share']=="1") {?>
                       checked
                        <?php }?>
                        />
                    </div>
                  </div>
                </div>
              </td>
            </tr>
			
            <tr >
                <th width="220"><font color="red">找人才页面默认显示类别</font>：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input name="sy_default_userclass" value="1" title="是"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_default_userclass']=="1") {?>
                         checked 
                        <?php }?>
                         type="radio"/>
                      <input name="sy_default_userclass" value="2" title="否"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_default_userclass']=="2") {?>
                         checked 
                        <?php }?>
                       type="radio"/>
                    </div>
                    <span class="admin_web_tip">
                      若选择"否"，则直接显示简历列表
                   </span>
                  </div>
                </div>
              </td>
            </tr>

            <tr class="admin_table_trbg">
                <th width="220"><font color="red">找工作页面默认显示类别</font>：</th>
              <td>
               <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input name="sy_default_comclass" value="1" title="是"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_default_comclass']=="1") {?>
                         checked 
                        <?php }?>
                         type="radio"/>
                      <input name="sy_default_comclass" value="2" title="否"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_default_comclass']=="2") {?>
                         checked 
                        <?php }?>
                       type="radio"/>
                    </div>
                   <span class="admin_web_tip">
                      若选择"否"，则直接显示职位列表
                  </span>
                  </div>
                </div>
              </td>
            </tr> 

            <tr class="admin_table_trbg">
              <th width="220">前台列表最大展示数量：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
						<div class="layui-input-inline">
						<input name="sy_indexpage" id="sy_indexpage" lay-verify="required|number" 
                       placeholder="请输入" autocomplete="off" class="layui-input" type="text" 
                       value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_indexpage'];?>
"
                       size="30" maxlength="255" 
                      />
						</div>
                    <span class="admin_web_tip">
                      提示：0为不限
                   </span>
                  </div>
                </div>

              </td>
            </tr>
            
			<tr class="admin_table_trbg">
              <th width="220">个人用户访问简历权限：</th>
              <td>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input type="checkbox" name="sy_user_visit_resume" lay-skin="switch" lay-text="开启|关闭"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_user_visit_resume']=="1") {?>
                       checked
                        <?php }?>
                        />
                    </div>
					<span class="admin_web_tip">
					 提示：若选择"关闭"，个人用户将无法直接访问简历信息
					</span>
					</div>
                </div>
              </td>
            </tr>

            <tr>
              <th width="220">未登录用户可访问简历数量：</th>
              <td>
              <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input name="sy_resume_visitors" id="sy_resume_visitors"
                       placeholder="请输入" autocomplete="off" class="layui-input" type="text" 
                       value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_resume_visitors'];?>
"
                       size="30" maxlength="255" 
                       onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
                    </div>
                    <span class="admin_web_tip">
                      提示：0为不限
                   </span>
                  </div>
                </div>
                </td>
            </tr> 
            
            <tr>
              <th width="220">同一IP点击广告记录间隔：</th>
              <td>
              <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input name="sy_adclick" id="sy_adclick"
                       placeholder="请输入" autocomplete="off" class="layui-input" type="text" 
                       value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_adclick'];?>
"
                       size="30" maxlength="255" 
                       onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
                    </div>小时
                    <span class="admin_web_tip">
                      提示：0为不限，其他数字为期限内只记录一次
                   </span>
                  </div>
                </div>
                </td>
            </tr>
            <tr class="admin_table_trbg">
              <th width="220">每天推荐职位/简历最大次数：</th>
              <td>
              <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input name="sy_recommend_day_num" id="sy_recommend_day_num"
                       placeholder="请输入" autocomplete="off" class="layui-input" type="text" 
                       value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_recommend_day_num'];?>
"
                       size="30" maxlength="255" 
                       onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
                    </div>
                    <span class="admin_web_tip">
                      提示：0为不限
                   </span>
                  </div>
                </div>
              </td>
            </tr>

            <tr class="admin_table_trbg">
              <th width="220">推荐职位/简历最小时间间隔(单位：秒)：</th>
              <td>
              <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input name="sy_recommend_interval" id="sy_recommend_interval"
                       placeholder="请输入" autocomplete="off" class="layui-input" type="text" 
                       value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_recommend_interval'];?>
"
                       size="30" maxlength="255" 
                       onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
                    </div>
                    <span class="admin_web_tip">
                      提示：0为不限
                   </span>
                  </div>
                </div>
              </td>
            </tr>

            

            <tr>
              <th width="220"><font color="red">百度自动推送功能</font>：</th>
              <td> 
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input name="sy_zhanzhang_baidu" value="1" title="是"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_zhanzhang_baidu']=="1") {?>
                         checked 
                        <?php }?>
                         type="radio"/>
                      <input name="sy_zhanzhang_baidu" value="2" title="否"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_zhanzhang_baidu']=="2") {?>
                         checked 
                        <?php }?>
                       type="radio"/>
                    </div>
                  </div>
                </div>   
              </td>
            </tr>

            <tr class="admin_table_trbg">
              <th width="220">新闻内链（职位关键字）：</th>
              <td> 
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
                      <input name="sy_outlinks" value="1" title="是"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_outlinks']=="1") {?>
                         checked 
                        <?php }?>
                         type="radio"/>
                      <input name="sy_outlinks" value="2" title="否"
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_outlinks']=="2") {?>
                         checked 
                        <?php }?>
                       type="radio"/>
                    </div>
					<span class="admin_web_tip">
                      提示：该设置可以改变新闻内容信息，涉及网站职位关键字内容添加链接
					</span>
                  </div>

                </div>
              </td>
            </tr>
              
            <tr>
              <th width="220">特别申明：</th>
              <td><textarea type="radio" name="sy_shenming" id="sy_shenming" class="web_text_textarea" ><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_shenming'];?>
 </textarea><span class="admin_web_tip">如：用人单位不得以任何名义收取求职者任何形式的费用</span>
                  </td>
            </tr>
              <tr class="admin_table_trbg">
              <th width="220">职位简历点击器：</th>
              <td><input class="input-text tips_class input_text_rp" type="text"  value="1" size="10" disabled = "disabled" />-<input class="input-text tips_class input_text_rp" style='margin-left: 10px;' type="text" name="sy_job_hits" id="sy_job_hits" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_job_hits'];?>
" size="10" /><span class="admin_web_tip">最小为1，最大为100，每次在1-X范围随机增加</span></td>
            </tr>
            <tr class="admin_table_trbg">
              	<th width="220">列表页区域默认设置：</th>
              	<td colspan="3">
					<div class="layui-input-inline">
						<select name="sy_web_city_one" id="sy_web_city_one" lay-filter="citys">
							<option value="">请选择</option> 
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_city_one']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cache']->value['city_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
							<?php } ?>
						</select>
					</div>

					<div class="layui-input-inline">
						<select name="sy_web_city_two" id="sy_web_city_two" lay-filter="citys" >
							<option value="">请选择</option> 
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache']->value['city_type'][$_smarty_tpl->tpl_vars['config']->value['sy_web_city_one']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_city_two']==$_smarty_tpl->tpl_vars['v']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cache']->value['city_name'][$_smarty_tpl->tpl_vars['v']->value];?>
</option>
							<?php } ?>
						</select>
					</div>
					<span class="admin_web_tip">如：前台职位、简历、企业列表区域默认查询设置</span>
				</td>
          	</tr>
            
             <th>&nbsp;</th>
          <td align="left">
                  <input class="layui-btn layui-btn-normal" id="config" lay-submit="" lay-filter="demo1" type="button" name="config" value="提交" />&nbsp;&nbsp;
                  <input class="layui-btn layui-btn-normal" type="reset" value="重置" /></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>

<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
		
<?php echo '<script'; ?>
 type="text/javascript">
	var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
	var form ,url = weburl+"/index.php?m=ajax&c=get_city_option";
  	layui.use(['layer', 'form'], function(){
    	var layer = layui.layer
    		,form = layui.form
    		,$ = layui.$;
    	
    	form.on('select(citys)', function(data){
      	    var html = "<option value=''>请选择</option>";
      	    if(data.value){
      	        $.each(ct[data.value], function(k, v){
      	            html += "<option value='" + v + "'>" + cn[v] + "</option>";
      	          });
      	    }
      	    if(data.elem.name=='sy_web_city_one'){
      	    	
      	      	$("#sy_web_city_two").html(html);
      	    }
      	    form.render('select');
  		});
    	
  	});

  	$(function(){
      	$(".tips_class").hover(function(){ 
        	var msg_id=$(this).attr('id'); 
       		var msg=$('#'+msg_id+' + font').html();
        	if($.trim(msg)!=''){
          		layer.tips(msg, this, {
		          	guide: 1, 
		          	style: ['background-color:#5EA7DC; color:#fff;top:-7px', '#5EA7DC']
		    	}); 
		    	$(".xubox_layer").addClass("xubox_tips_border");
		 	} 
      	},function(){
        	var msg_id=$(this).attr('id');
       	 	var msg=$('#'+msg_id+' + font').html();
        	if($.trim(msg)!=''){
          		layer.closeAll('tips');
        	} 
      	});

      	$("#config").click(function(){
			loadlayer();
	        $.post("index.php?m=web_config&c=save",{
	          	config : $("#config").val(),
	          	sy_seo_rewrite : $("input[name=sy_seo_rewrite]").is(":checked") ? 1 : 0, 
	          	sy_header_fix : $("input[name=sy_header_fix]").is(":checked") ? 1 : 0, 
			  	sy_footer_fix : $("input[name=sy_footer_fix]").is(":checked") ? 1 : 0, 
	          	sy_news_rewrite : $("input[name=sy_news_rewrite]:checked").val(), 
	          	sy_linksq : $("input[name=sy_linksq]").is(":checked") ? 1 : 0,
	          	sy_wap_jump : $("input[name=sy_wap_jump]").is(":checked") ? 1 : 0,
	          	sy_user_change : $("input[name=sy_user_change]").is(":checked") ? 1 : 0,
	          	sy_pc_jump_wap : $("input[name=sy_pc_jump_wap]").is(":checked") ? 1 : 0,
	          	sy_default_comclass : $("input[name=sy_default_comclass]:checked").val(),
	          	sy_zhanzhang_baidu : $("input[name=sy_zhanzhang_baidu]:checked").val(),
	          	sy_default_userclass : $("input[name=sy_default_userclass]:checked").val(), 
	          	sy_job_hits : $("input[name=sy_job_hits]").val(),
	          	sy_indexpage : $("#sy_indexpage").val(),
	          	sy_resume_visitors : $("#sy_resume_visitors").val(), 
			  	sy_user_visit_resume : $("input[name=sy_user_visit_resume]").is(":checked") ? 1 : 0,
			  	sy_h5_share: $("input[name=sy_h5_share]").is(":checked") ? 1 : 0,
	
	          	sy_adclick : $("#sy_adclick").val(),
	          	sy_outlinks : $("input[name=sy_outlinks]:checked").val(),
	          	sy_shenming : $("#sy_shenming").val(),
	          	sy_autoref : $("#sy_autoref").val(),
	          	sy_autorefrand : $("input[name=sy_autorefrand]:checked").val(),
	          	sy_recommend_day_num : $("#sy_recommend_day_num").val(),
	          	sy_recommend_interval : $("#sy_recommend_interval").val(),
	          	sy_web_city_one : $("#sy_web_city_one").find("option:selected").val(),
	          	sy_web_city_two : $("#sy_web_city_two").find("option:selected").val(),
	          	pytoken : $("#pytoken").val()
	   		},function(data,textStatus){
				parent.layer.closeAll('loading');
	          	config_msg(data);
			});
	  	});
	});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
