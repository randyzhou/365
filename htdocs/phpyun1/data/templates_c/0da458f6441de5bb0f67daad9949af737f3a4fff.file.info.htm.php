<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:03:34
         compiled from "D:\rcw\uploads\app\template\member\com\info.htm" */ ?>
<?php /*%%SmartyHeaderCode:12724450035f9d98e6ac0382-19457724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0da458f6441de5bb0f67daad9949af737f3a4fff' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\info.htm',
      1 => 1591690142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12724450035f9d98e6ac0382-19457724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'user_style' => 0,
    'row' => 0,
    'cert' => 0,
    'industry_index' => 0,
    'v' => 0,
    'industry_name' => 0,
    'comdata' => 0,
    'comclass_name' => 0,
    'city_type' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'tv' => 0,
    'company' => 0,
    'addjobnum' => 0,
    'uid' => 0,
    'isremind' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d98e6b31784_07464220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d98e6b31784_07464220')) {function content_5f9d98e6b31784_07464220($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/binding.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

	var userstyle	=	'<?php echo $_smarty_tpl->tpl_vars['user_style']->value;?>
';
	var setPosition	=	'<?php echo $_smarty_tpl->tpl_vars['config']->value['com_enforce_setposition'];?>
';
	
	function checkIsUsed(typeStr){

		 var checkStr = $("#"+typeStr).val();
		 if(checkStr){
			 $.ajax({
				type: "POST",
				async: false,
				url: "index.php?c=info&act=ajaxCheck",
				data: {
					typeStr:typeStr,
					checkStr:checkStr
				},
				success: function(data) {
					
					var data	= 	eval('('+data+')');
					if(data.errcode == 8){
						if(typeStr == 'name'){
							layer.msg('企业名称已存在，请重新填写！', 2, 8);
				            return false;
						}else if(typeStr == 'linktel'){
							layer.msg('手机号码已存在，请重新填写！', 2, 8);
				            return false;
						}	
					}	
				}	 
			});
		}
	}
  	function checknext(){
      	var isform= checkform();
      	if(isform==false){
      		return false;
      	}
		window.scrollTo(0,0);
        $("#cominfonext").hide();
		$("#cominfoblack").show();
  	}
  	function checkform(){
  		var cionly	=	$.trim($("#cionly").val());
  		if(cionly=='1'){
			var citycheck = check_form(document.myform.provinceid.value=="",'by_cityid');
		}else{
			var citycheck = check_form(document.myform.cityid.value=="",'by_cityid');
		}
  		

  		var ifcheck =check_form(document.myform.address.value=="",'by_address') &
  		citycheck &
        check_form(document.myform.mun.value=="",'by_mun') &
        check_form(document.myform.pr.value=="",'by_pr') &
        check_form(document.myform.hy.value=="",'by_hy') &
        check_form(document.myform.name.value=="",'by_name');
 
        if(ifcheck==0){ return false; } 

        var x 	=	$.trim($("#map_x").val());
	    var y 	=	$.trim($("#map_y").val());
	    if(setPosition == '1' && x == '' && y == ''){
	    	layer.msg('请设置企业地图！', 2, 8);
            return false;
	    }
        
		var html	= 	editor.getContent();
        
		if(html == ''){
            layer.msg('企业简介不能为空！', 2, 8);
            return false;
        }
        
		if(document.myform.linkman.value == ''){
            layer.msg($('#by_linkman').html(),2,8);
            return false;
        }
        
		<?php if ($_smarty_tpl->tpl_vars['row']->value['moblie_status']==1) {?>
          	ifmoblie = true;
        <?php } else { ?>
          	ifmoblie = isjsMobile(document.myform.linktel.value);
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['row']->value['email_status']==1) {?>
          	ifemail = true; 
        <?php } else { ?>
          	var mail=document.myform.linkmail.value;
	     	if(mail==""){
	       		ifemail = true;
	      	}else{
	       		ifemail = check_email(mail);
	     	}
        <?php }?>
       
        if(document.myform.phonetwo.value!=''){
          	if(document.myform.phoneone.value==''){
          		
            	layer.msg('请填写区号！', 2, 8);return false;
          	}else if(document.myform.phoneone.value.length>4){
            	
          		layer.msg('请正确填写区号！', 2, 8);return false;
          	}else if(document.myform.phonethree.value){
            	
          		var linkphone = document.myform.phoneone.value+'-'+document.myform.phonetwo.value+'-'+document.myform.phonethree.value;
          	}else{
            	
          		var linkphone = document.myform.phoneone.value+'-'+document.myform.phonetwo.value;
          	}
        }
        
        if(ifemail==false){
        	
             layer.msg('企业邮箱格式错误！', 2, 8);return false; 
        }
        if(!document.myform.linktel.value){
        	
          	layer.msg('请填写联系手机！', 2, 8);return false; 
        }
        if(ifmoblie==false && document.myform.linktel.value!=''){
        	
          	layer.msg('联系手机格式不正确！', 2, 8);return false;
        }
        if(linkphone){
          	if(!isjsTell(linkphone) && linkphone!=""){
          		
            	layer.msg('固话格式不正确！', 2, 8);return false;
          	}
        }
  	}

  	function checkblack(){
  		
  		window.scrollTo(0,0);
      	$("#cominfonext").show();
      	$("#cominfoblack").hide();
  	}

  	
	function checkpostcom(){
		var isform= checkform();
      	if(isform==false){
      		return false;
      	}
	    var chk_value 		= 	[];
	    var name          	=  	$.trim($("#name").val());
	    var hy            	=  	$.trim($("#hy").val());
	    var pr            	= 	$.trim($("#pr").val());
	    var mun           	= 	$.trim($("#mun").val());
	    var provinceid    	=  	$.trim($("#provinceid").val());
	    var cityid        	= 	$.trim($("#cityid").val());
	    var three_cityid  	= 	$.trim($("#three_cityid").val());
	    var address       	=	$.trim($("#address").val());
	    var x       		=	$.trim($("#map_x").val());
	    var y       		=	$.trim($("#map_y").val());
	    var content 		= 	editor.getContent();
	    var linkman 		= 	$.trim($("#linkman").val());
	    var linkjob 		= 	$.trim($("#linkjob").val());
	    var linktel 		= 	$.trim($("#linktel").val());
	    var phoneone 		= 	$.trim($("#phoneone").val());
	    var phonetwo 		= 	$.trim($("#phonetwo").val());
	    var phonethree 		= 	$.trim($("#phonethree").val());
	    var linkmail 		= 	$.trim($("#linkmail").val());
	    var shortname 		= 	$.trim($("#shortname").val());
	    var sdate 			= 	$.trim($("#sdate").val());
	    var moneytype 		= 	$.trim($("#moneytype").val());
	    var money 			= 	$.trim($("#money").val());
	    
	    var linkqq			=	$.trim($("#linkqq").val());
		if(linkqq != '' && isQQ(linkqq) == false){
			
			layer.msg('QQ格式不正确！', 2, 8);return false; 
		}
		
		var website			=	$.trim($("#website").val());
		if(website!=''){
			if(check_url(website)==false){
		
				layer.msg('企业网址格式不正确！', 2, 8);return false;
			}
		}
		
	    var busstops 		= 	$.trim($("#busstops").val());
	    var infostatus 		= 	$.trim($("#infostatus").val());
		var i 				= 	0;
	    
		$('input[name="welfare[]"]:checked').each(function() {
			
	    	chk_value.push($(this).val());
	       	i++;
	   	});
		
	   	var welfare  		=	chk_value;
	    
	   	/* 强制认证条件 */
	   	var   yyzz_n 		=  	'<?php echo $_smarty_tpl->tpl_vars['config']->value['com_enforce_licensecert'];?>
';
	    var   moblie_n 		=  	'<?php echo $_smarty_tpl->tpl_vars['config']->value['com_enforce_mobilecert'];?>
';
	    var   email_n 		=  	'<?php echo $_smarty_tpl->tpl_vars['config']->value['com_enforce_emailcert'];?>
';
	    var   map_n 		=  	'<?php echo $_smarty_tpl->tpl_vars['config']->value['com_enforce_setposition'];?>
';
	   	
	    $.post("index.php?c=info&act=save",{name:name,hy:hy,pr:pr,mun:mun,provinceid:provinceid,cityid:cityid,three_cityid:three_cityid,address:address,x:x,y:y,content:content,linkman:linkman,linkjob:linkjob,linktel:linktel,phoneone:phoneone,phonetwo:phonetwo,phonethree:phonethree,linkmail:linkmail,shortname:shortname,sdate:sdate,moneytype:moneytype,money:money,website:website,linkqq:linkqq,website:website,busstops:busstops,infostatus:infostatus,welfare:welfare},function(data){
	 		
	    	var data = eval('(' + data + ')');
	    	
	 		if(data.errcode==9){
	        	
	 			//第一次完善基本信息资料
	    		if(data.integralnum==1){	
	           		$('#firstComInfo').show();
	       		}
	 			
	 			if(yyzz_n == '1' && !data.yyzz_i){
	 				
	 				$('#zzrz_msg').html('企业尚未进行资质认证，将无法发布职位');
	 				$('#zzrz_a').show();
	 				$('#zzrz_a').html('开始资质认证');
	 			}else if(moblie_n == '1' && data.moblie_i == '0'){
	 				
	 				$('#zzrz_msg').html('企业尚未进行手机认证，将无法发布职位');
	 				$('#zzrz_a').show();
	 				$('#zzrz_a').html('开始手机认证');
	 			}else if(email_n == '1' && data.email_i == '0'){
	 				
	 				$('#zzrz_msg').html('企业尚未进行邮箱认证，将无法发布职位');
	 				$('#zzrz_a').show();
	 				$('#zzrz_a').html('开始邮箱认证');
	 			}else if(map_n == '1' && data.map_i == '0'){
	 				
	 				$('#zzrz_msg').html('企业尚未进行地图设置，将无法发布职位');
	 				$('#map_a').show();
	 			}else{
	 				
	 				if(data.yyzz_i != '1'){
	 					
	 					$('#zzrz_msg').html('企业资质验证，提升招聘效果哦');
	 					$('#zzrz_a').show();
	 					$('#zzrz_a').html('开始资质认证');
	 				}else if(data.moblie_i == '0'){
	 					
	 					$('#zzrz_msg').html('企业手机认证，提升招聘效果哦');
	 					$('#zzrz_a').show();
	 					$('#zzrz_a').html('开始手机认证');
	 				}else if(data.email_i == '0'){
	 					
	 					$('#zzrz_msg').html('企业邮箱认证，提升招聘效果哦');
	 					$('#zzrz_a').show();
	 					$('#zzrz_a').html('开始邮箱认证');
	 				}else{
	 					
	 					$('#zzrz_msg').html('发布职位吸引优秀人才上门');
	 				}
	 			
	    			if(data.addjobnum == 1){
	    				$('#job_a').hide();
	    				$('#job_first').show();
					}else{
						$('#job_a').show();
	    				$('#job_first').hide();
					}
	 			}
				
	 			 
	           	var msglayer = layer.open({
	           		type: 1,
	              	skin: 'yun_skin',
	             	title: false,
	              	closeBtn : 0,
	              	content: $('#comInfoNotice') 
	            }); 
	           	
	        }else{
	        	
	          	layer.msg(data.msg, 2, 8);
	        }
		});

	} 	
<?php echo '</script'; ?>
> 

<div class="w1000">
	<div class="admin_mainbody"> 
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    	<div class="com_tit"><span class="com_tit_span">企业资料</span></div>
    	<div class=right_box>
			<div class=admincont_box>

		        <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
		        <form id="infoform" name="myform" method="post" target="supportiframe"  autocomplete="off" enctype="multipart/form-data" class="layui-form">
					
					<div class="job_list_tit">
						<ul class="">
							<li class="job_list_tit_cur"><a href="index.php?c=info">基本信息</a></li>
							<li><a href="index.php?c=map">企业地图</a></li>
							<li><a href="index.php?c=news">企业新闻</a></li>
							<li><a href="index.php?c=show">企业环境</a></li>
							<li><a href="index.php?c=product">企业产品</a></li>
						</ul>
					</div>
					
					<input type="hidden" id="layupload_type" value="2"/>
					<input type="hidden" id="laynoupload" value="1"/>
					
					<div class="clear"></div>
		
		      		<div class="com_release_box" id="cominfonext">
						<ul>
						
							
								
						
							<li style="z-index:10"><div class="info_logo_box ">		
									<img id="logo" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
" width="120" height="120" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
','2')"/>
									<div class="">
										<button type="button" class="yun_bth_pic mt10 adminupload" lay-data="{imgid: 'logo',path: 'company',uid: '<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
',usertype: 2}">上传LOGO</button>
									</div>  
									<div style=" font-size:12px; padding-top:8px;">请用<?php if ($_smarty_tpl->tpl_vars['config']->value['pic_type']) {
echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];
} else { ?>jpg,png,jpeg,bmp,gif<?php }?>格式<br>最小尺寸：300*300像素</div>
								</div>
								<div class="com_release_name"><i class="ff0">*</i>  企业全称：</div>
								<?php if ($_smarty_tpl->tpl_vars['row']->value['yyzz_status']==1) {?>
									<label><div class="info_comname_text"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</div></label>
									<input type="hidden" id="name"  name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
								<?php } else { ?>
									<div class="com_release_textnew">
										<input type="text" size="45" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" lay-verify="required" class="com_release_textnew_text" placeholder="请与贵公司营业热照注册名保持一致" onblur="checkIsUsed('name');" />  
									</div>
									<div id="cdiv" class="com_">
										<?php if (!empty($_smarty_tpl->tpl_vars['cert']->value)) {?>
											<?php if ($_smarty_tpl->tpl_vars['cert']->value['status']==2) {?>
												<div id="dcert" class="com_info_tipbox_p">
													 
														<div class="com_info_tipbox_box">
															<i class="com_info_tip_icon"></i>
															<?php if ($_smarty_tpl->tpl_vars['cert']->value['statusbody']) {?> 
															<div id="showcomstatusbody" style="display:none;">
			                                             	<div class="rzwtg">   
			                                                <div class="rzwtg_hi">尊敬的用户你好！</div> 
			                                                 <div>您的执照认证未通过审核，未通过原因如下：</div> 
															<div class="rzwtg_yy"><?php echo $_smarty_tpl->tpl_vars['cert']->value['statusbody'];?>
请按要求重新认证审核</div>
			                                                <div class="rzwtg_bthbox"><a href="javascript:void(0)"  onclick="getyyzzcom('营业执照认证',550,310);" class="rzwtg_bth" >重新认证</a>    </div> 
			                                               </div> 
															</div>
															<?php }?>
			 												<a href="javascript:void(0)"  onclick="getyyzzcom('营业执照认证',550,310);" class="com_set_a fl" >重新认证</a>
															<span class="" style="margin-left:5px;">
																审核未通过
																<?php if ($_smarty_tpl->tpl_vars['cert']->value['statusbody']) {?> 
																<a class="infor_check" href="javascript:void(0)" onclick="showcomstatusbody();" style="color:#09F">说明</a>
																<?php }?>
															</span>
														</div>
													
												</div>
											<?php } else { ?>
												<div id="dcert" class="com_info_tipbox_p">   
													<div class="com_info_tipbox_box"><i class="com_info_tip_icon"></i>营业执照已上传，请等待审核</div>
												</div>
											<?php }?>
										<?php } else { ?>
											<div id="dcert" class="com_info_tipbox_p">   
												<div class="com_info_tipbox_box"><i class="com_info_tip_icon"></i>请与贵公司营业执照保持一致 <a href="javascript:void(0)"  onclick="getyyzzcom('营业执照认证',550,310);" class="com_set_a" ><i class="com_set_a_rzicon"></i>企业认证</a></div>
											</div>
										<?php }?>
									</div>
								<?php }?> 
								<span id="by_name" class="errordisplay">企业全称不能为空</span>
							</li>
							<li>
								<div class="com_release_name"><i class="ff0">*</i> 从事行业：</div>
								<div class="com_release_selectbox">
									<div class="layui-input-inline">
										<select name="hy" lay-filter="hy" id="hy">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['hy']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
									<span id="by_hy" class="errordisplay">请选择从事行业</span> 
								</div>
							</li>
							<li>
								<div class="com_release_name"><i class="ff0">*</i> 企业性质：</div>
								<div class="com_release_selectbox">
									<div class="layui-input-inline">
										<select name="pr" lay-filter="pr" id="pr">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['pr']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
									<span id="by_pr" class="errordisplay">企业性质不能为空！</span> 
								</div>
							</li>
							<li>
								<div class="com_release_name"><i class="ff0">*</i> 企业规模：</div>
								<div class="com_release_selectbox">
									<div class="layui-input-inline">
										<select name="mun" lay-filter="mun" id="mun">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['mun']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>
									<span id="by_mun" class="errordisplay">请选择企业规模</span> 
								</div>
							</li>
							<li>
								<input type="hidden" id="cionly" name="cionly" value="<?php if (empty($_smarty_tpl->tpl_vars['city_type']->value)) {?>1<?php }?>">
								<div class="com_release_name"><i class="ff0">*</i> 所在地区：</div>
								
								<div class="com_release_select com_release_selectw145">
									<div class="layui-input-inline">
										<select name="provinceid" lay-filter="citys" id="provinceid">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>  
								</div>
			
								<div class="com_release_select com_release_selectw145">
									<div class="layui-input-inline">
										<select name="cityid" lay-filter="citys" id="cityid">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>  
								</div>
			                    <div class="com_release_select com_release_selectw145">
									<div class="layui-input-inline" id="cityshowth" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']<1) {?>style="display:none"<?php }?>>
										<select name="three_cityid" id="three_cityid">
											<option value="">请选择</option>
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
											<?php } ?>
										</select>
									</div>  
								</div>
								<span id="by_cityid" class="errordisplay">请选择所在地</span> 
							</li>
							<li>
								<div class="com_release_name"><i class="ff0">*</i> 详细地址：</div>
								
								<div class="com_release_cont_text com_info_tip" style="width:640px">
									<input type="text" id="address" name="address" size="45" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" class="layui-input" placeholder="请输入公司的详细地址，如：XX市XX区XX1号楼" onblur="localsearch('全国');" />
									<i class="com_release_mapicon"></i>
								</div>
							
								<span id="by_address" class="errordisplay">请填写正确的公司地址</span> 
								
								<div class="clear"></div>
                                <div style="margin-top:10px;">
			                  	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
> 
			                  	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/map.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
			                  	<div id="map_container" style="width:640px;height:300px; left:0px;"></div>
			                  	<input name="x" id="map_x" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
">
			                  	<input name="y" id="map_y" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
">
								</div>
							</li>
							
							<li>
								<div class="com_release_name"><i class="ff0">*</i>  企业简介：</div>
								<div class=textbox>
			 						<?php echo '<script'; ?>
 id="content" name="content" type="text/plain" style="width:640px; height:150px;"> <?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
 <?php echo '</script'; ?>
>
								</div>
							</li>
							<li>
								<div class="com_release_name"><i class="ff0">*</i> 联  系  人：</div>
								<div class="com_release_cont_text">
									<input type="text" id="linkman" name="linkman" size="15" lay-verify="required" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];?>
" class="layui-input" placeholder="请输入您的姓名" style="width:225px;display: inline-block;"/>  
									 <input type="text" id="linkjob" name="linkjob" size="15" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkjob'];?>
" class="layui-input" placeholder="职位称呼：如 经理 "style="width:160px;display: inline-block;margin-left:10px;"//>
								</div>
								
								<span id="by_linkman" class="errordisplay">请填写招聘联系人</span> 
							</li>
							<li>
								<div class="com_release_name"><i class="ff0">*</i> 联系手机：</div>
								<div class="com_release_cont_text">
									<div id="bdphone"> 
										<?php if ($_smarty_tpl->tpl_vars['row']->value['moblie_status']==1) {?>
										<div class="com_release_bd">
											<input type="text" size="35" id="linktel" name="linktel" lay-verify="phone" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
" class="com_release_bd_text" readonly="readonly" />
											<a href="javascript:void(0)" onclick="getshow('moblie','绑定手机号码');" class="com_release_bd_a">更换号码</a>
											
										</div>
										<?php } else { ?>
										<div class="com_release_textnew">
											<input type="text" id="linktel" name="linktel" size="25" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class="com_release_textnew_text" placeholder="请输入手机号码" onblur="checkIsUsed('linktel');"/>   
											<a href="javascript:void(0)" onclick="getshow('moblie','绑定手机号码');" class="com_release_textnew_a">绑定手机</a>
										</div>
										<span id="by_linktel" class="errordisplay">手机格式不正确</span>
										<?php }?> 
									</div>   
								</div>
							
							</li>
			
							<li>
								<div class="com_release_name">固定电话：</div>
								<div class=textbox>
									<input type="text" id="phoneone" name="phoneone" style="width:155px" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phoneone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="com_info_text" placeholder="区号" maxlength="4"/><span class="com_info_text_r">-</span><input type="text" id="phonetwo" placeholder="座机号" name="phonetwo"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phonetwo'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" maxlength="8" class="com_info_text com_info_text_120"/><span class="com_info_text_r">-</span> <input type="text" id="phonethree" placeholder="分机号" name="phonethree"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phonethree'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="com_info_text com_info_text_60"/>
								</div>
							</li>
							<li>
								<div class="com_release_name"> 企业邮箱：</div>
								<div class="com_release_cont_text" id="bdmail"> 
									<?php if ($_smarty_tpl->tpl_vars['row']->value['email_status']==1) {?>
										<div class="com_release_bd">
										<input type="text" id="linkmail" name="linkmail" size="35" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
" class="com_release_bd_text"  readonly="readonly"/>
									
												<a href="javascript:void(0)"  onclick="getshow('email','绑定邮箱');" class="com_release_bd_a">更换邮箱</a>
										
										</div>
									<?php } else { ?>
									<div class="com_release_textnew">
										<input type="text" id="linkmail" name="linkmail" size="35" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
" class="com_release_textnew_text"placeholder="请输入您工作中使用的邮箱用于接受简历" />
										
											
												<a href="javascript:void(0)"  onclick="getshow('email','绑定邮箱');" class="com_release_textnew_a">绑定邮箱</a>
										
										</div>
									<?php }?> 
									<span id="by_linkmail" class="errordisplay">企业邮箱格式错误</span> 
								</div>
							</li>
			        		<li>
								<input class="btn_01" style="_margin-left:-3px" type="button" onclick="checkpostcom()" value="保存信息">
								<input class="bth_return"type="button" onclick="checknext()" value="下一步>">
							</li>
			        	</ul>
		        	</div>
		     		<div class="com_release_box" id="cominfoblack"  style="display:none;">        
				   		<div class="com_release_box_h1"><span class="com_release_box_h1_n">完善信息</span><em class="com_release_box_h1_z">完善基本信息可以让求职者更好的了解您的企业~</em></div>
					
						<ul>
							<li>
								<div class="com_release_name">企业简称</div>
								<div class="com_release_cont_text">
									<input type="text" size="45" id="shortname" name="shortname" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['shortname'];?>
" lay-verify="required" class="layui-input"/>
								</div>
								<span id="by_shortname" class="errordisplay">简称不能为空</span>
							</li>
							
							<li>
								<div class="com_release_name"> 创办时间</div>
			 					<input type="text" name="sdate" id="sdate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sdate'];?>
" class="com_info_text">
							</li>
							<li>
								<div class="com_release_name"> 注册资金</div>
								
								<div class="com_release_select com_release_selectw145">
									<div class="layui-input-inline">
										<select name="moneytype" lay-filter="moneytype" id="moneytype">
											<option value="">请选择</option>
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==1) {?> selected<?php }?>>人民币</option>
											<option value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==2) {?> selected<?php }?>>美元</option>
										</select>
			 						</div>
								</div>
			
								<div class="layui-input-inline">
									<input type="text" id="money" name="money" size="10" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="com_info_text com_info_text_120" />
			 						<span class='moneyname' id="money_1" <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']!='1') {?>style="display:none;"<?php }?>>万元</span>
			 						<span class='moneyname' id="money_2" <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']!='2') {?>style="display:none;"<?php }?>>万美元</span>
								</div>
							</li>
							<li>
								<div class="com_release_name"> 联 系 QQ</div>
								<div class=textbox>
									<input type="text" id="linkqq" name="linkqq" size="15" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkqq'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" maxlength='12' class="com_info_text"/>
								</div>
							</li>
							<li>
								<div class="com_release_name"> 企业网址</div>
								<div class="textbox">
									<input type="text" id="website" name="website" size="35" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['website'];?>
" class="com_info_text"/>
									如：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
 
								</div>
							</li>
							<li>
								<div class="com_release_name"> 公交站点</div>
								<div class="textbox">
									<textarea name="busstops" id="busstops" class="com_info_textarea" rows="3"><?php echo $_smarty_tpl->tpl_vars['row']->value['busstops'];?>
</textarea>
								</div>
							</li>
							<li>
								<div class="com_release_name"> 联系方式</div>
								<div class="com_release_selectbox">
									<div class="layui-input-inline">
										<select name="infostatus" lay-filter="infostatus" id="infostatus">
											<option value="">请选择</option>
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['infostatus']==1) {?> selected<?php }?>>公开</option>
											<option value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value['infostatus']==2) {?> selected<?php }?>>不公开</option>
										</select>
									</div>   
								</div>
							</li>
							<li>
								<div class="com_release_name"> 公司二维码</div>
								<button type="button" class="yun_bth_pic adminupload" lay-data="{imgid: 'ewm',parentid: 'imgparent',path: 'company','uid': '<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
', 'usertype': 2}">上传二维码</button>
			    				<div class="com_release_nameewm_img <?php if (!$_smarty_tpl->tpl_vars['row']->value['comqcode']) {?>none<?php }?>" id="imgparent"> 
									<img id="ewm" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['comqcode'];?>
" width="40" height="40">
								</div>
							</li>
							<li class="jobadd_list_fl">
								<div class="com_release_name">福利待遇</div>
			 					<div class="layui-form-item">
									<div class="layui-input-block">
										<span class="" id="addwelfarelist">
											<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['arraywelfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tv']->key;
?>
												<input id="welfare[]" name="welfare[]" id="welfare<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['tv']->value,$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?> checked="checked" <?php }?> type="checkbox" title="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" data-tag="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" class="changewelfare" lay-skin="primary">
											<?php } ?>
										</span>
			
			 							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			 								<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
<?php $_tmp1=ob_get_clean();?><?php if (!in_array($_tmp1,$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?>
												<input id="welfare[]"  name="welfare[]" id="welfare<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" value="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value],$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?> checked="checked" <?php }?> type="checkbox" title="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" data-tag="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" class="changewelfare" lay-skin="primary">
											<?php }?>
										<?php } ?>
										<div class="addwelfare_b">
											<input class="addwelfare_text" type="text" tabindex="1000" id="addwelfare" onblur="checkWelfare('addwelfare');" ><a class="addwelfarebox">添加福利</a>    
										</div>
									</div>
								</div>
							</li>
							<li>
			        
								<input class="btn_01" style="_margin-left:-3px" type="button" onclick="checkpostcom()" value="保存信息">
								<input class="bth_return" type="button" onclick="checkblack()" value="< 返回上一步">
							</li>
			            </ul>
		            	<div class="clear"></div>
		          	</div>
				  	<div class="clear"></div>
		        </form>
				<div class="clear"></div>
	      	</div>
	    </div>
  	</div>
</div>  

<div class="clear"></div>

<div id="yyzz" style=" display:none;">
	<div class="license_box">
		<div class="license_tip">提示：营业执照中的公司名称与招聘账号的公司名称保持一致，扫描件中的注册号,企业名称，年检章等需清晰可辨，否则不能通过认证</div>
		<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
   		<form id="certform" name="MyForm" target="supportiframe" method="post" action="index.php?c=binding&act=savecert" enctype="multipart/form-data">
			<div class="license_left">
				<div class="license_tit">方式一：本地上传</div>
				<div class="license_list">
					<span class="license_list_name"><i class="Binding_pop_box_list_left_i">*</i>公司名称</span>
					<input  type="text" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" name="company_name" id="company_name" class="license_left_text">
				</div>
				
				<div class="license_list">
					<span class="license_list_name"><i class="Binding_pop_box_list_left_i">*</i>上传副本</span>
					<button type="button" class="yun_bth_pic noupload" lay-data="{parentid: 'imgparent1',imgid: 'certyyzz'}">上传图片</button>
					
					<input type="hidden" id="old_cert" value="<?php echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
"/>
					<div id="imgparent1" class="licensefile_box_img <?php if (!$_smarty_tpl->tpl_vars['cert']->value['old_check']) {?>none<?php }?>">
						<img id="certyyzz" src="<?php echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
" width="40" height="40"/>        	
						<a target="_blank" id="checka" href="<?php echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
" class="Binding_pop_box_msg_cont_pic_p">查看原图</a>
					</div>
					<div class="licensefile_box_tip">最大<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
M,支持<?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
格式</div>
				</div>
				<div class="license_list">
					<input class="license_list_bth" onclick="certform()" type="button" value="提交">
				</div>
			</div>
		</form>
		<div class="license_right">
			<div class="license_tit">方式二：手机拍照上传</div>
			<div class="license_ewm">
				<img src="<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>1),$_smarty_tpl);?>
" alt="手机扫码拍照上传" width="130" height="130" />
			</div>
			<div class="license_right_p"> 扫描二维码 </div>
			<div class="">  打开我-修改资料-点击我要认证 </div>
		</div>
	</div>
</div>
<!--绑定手机弹出框-->
<div id="moblie" style=" display:none;">
  	<div class="Binding_pop_box" style="padding:10px;width:480px;background:#fff;">
  		<div class="Binding_pop_box_list" style=" display:block">
   			<span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>手机号码：</span>
  			<input type="text" name="moblie" class="Binding_pop_box_list_text" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['linktel'];?>
">
   		</div>
	 	
	 	<div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>验证码：</span>
	 		<input type="text" name="phoneimg_code" maxlength="6" class="Binding_pop_box_list_text">
	 		<img id="pcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" style=" margin:0 5px 5px 5px; vertical-align:middle;">
	 		<a href="javascript:void(0);" onclick="checkCode('pcode_img');">看不清</a>
	 	</div>
		<div class="Binding_pop_box_list">
			<span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>手机校验码：</span>
			<div class="Binding_pop_right">
				<input type="text" id="moblie_code" class="Binding_pop_box_list_text">
				<a href="javascript:;" onclick="sendmoblie('pcode_img');" class="Binding_pop_box_magbth" id="time">获取短信校验码</a>
			</div>
	    </div>
    	<div class="Binding_pop_box_list">  <input class="Binding_pop_bth" onclick="check_moblie();" type="button" value="提交"> </div>
    	
    	<div class="Binding_pop_tip">收不到短信验证码?</div>
    	<div class="Binding_pop_tip_p">
    	1.短信验证码有效时效为120秒，超过120秒请点击重新发送；<br>
    	2.如您手机无法收取短信或者收取延迟，请关机重启或者联系运营商处理；<br/>
    	3.如以上措施还无法解决，请确认用户名，手机号以及邮箱联系我司客服
    	</div>
  	</div>
</div>
<!--绑定邮箱弹出框-->
<div id="email" style="display:none;">
   	<div class="Binding_pop_box" style="padding:10px;width:480px;background:#fff">
    	<div >
	      	<div class="Binding_pop_box_list">
	      		<span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>我的邮箱：</span>
	        	<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['linkmail'];?>
" class="Binding_pop_box_list_text Binding_pop_box_list_textw200">
	      	</div>
	      	<div class="Binding_pop_box_list">
	      		<span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>验证码：</span>
	        	<input type="text" name="email_code" maxlength="6" class="Binding_pop_box_list_text">
	        	<img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" style=" margin:0 5px 5px 5px; vertical-align:middle;">
	        	<a href="javascript:void(0);" onclick="checkCode('vcode_img');">看不清</a>
	        </div>
	       	<div class="Binding_pop_box_list"><input class=" Binding_pop_bth" type="button" onclick="sendbemail('vcode_img');" value="发送验证邮件"> </div>
			<div class="Binding_pop_tip">没收到邮件？</div>
			<div class="Binding_pop_tip_p">
			1. 请检查您的垃圾箱或者广告箱，邮件有可能被误认为垃圾或者广告邮件；<br/>
			2.验证邮件24小时内有效，请尽快登录您的邮箱点击验证链接完成验证
		    </div>
    	</div>
  	</div>
</div>
<input type="hidden" id="info" value="1" />
<!--弹出框 end--> 

<?php echo '<script'; ?>
>
	var map=new BMap.Map("map_container");
	setLocation('map_container',116.404,39.915,"map_x","map_y");
	$(document).ready(function() {
		<?php if (($_smarty_tpl->tpl_vars['row']->value['x']==''||$_smarty_tpl->tpl_vars['row']->value['y']=='')&&$_smarty_tpl->tpl_vars['row']->value['address']!='') {?>
			var address = "<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
";
			localsearch('<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['three_cityid']];?>
'+address.replace(/\s+/g,""));
		<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['x']!=''&&$_smarty_tpl->tpl_vars['row']->value['y']!='') {?>
			setLocation('map_container',<?php echo $_smarty_tpl->tpl_vars['row']->value['x'];?>
,<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
,"map_x","map_y");
		<?php } else { ?>
			//根据IP到城市开始
			function myFun(result){
				var cityName = result.name;
				map.setCenter(cityName);
			}
			var myCity = new BMap.LocalCity();
			myCity.get(myFun);
			//根据IP到城市结结束
		<?php }?>
	});
	
	function localsearch(city){
		if($("#address").val()=="" || $("#address").val()=="请输入公司的详细地址，如：XX市XX区XX1号楼"){
			layer.msg('请输入公司地址！', 2, 8);return false;
		}
		if(city == '全国' ){

			var provincename = $('#provinceid').find("option:selected").text().replace("请选择", "");
			
			var cityname = $('#cityid').find("option:selected").text().replace("请选择", "");

			var three_cityidname = $('#three_cityid').find("option:selected").text().replace("请选择", "");
			
			city = provincename;
			if(cityname!=provincename){
				city = city+cityname;
			}
			city = city+three_cityidname;
		}
		var local = new BMap.LocalSearch(map, {
			renderOptions: {
				map: map
			}
		});
		local.clearResults();
		
		local.search(city + $("#address").val().replace(/\s+/g,""));
	}
	 
	function setLocation(id,x,y,xid,yid){
		var data=get_map_config();
		var config=eval('('+data+')');
		var rating,map_control_type,map_control_anchor;
		if(!x && !y){x=config.map_x;y=config.map_y;}
		var point = new BMap.Point(x,y);
		var marker = new BMap.Marker(point);
		var opts = {type:BMAP_NAVIGATION_CONTROL_LARGE}
		map.enableScrollWheelZoom(true);
		map.addControl(new BMap.NavigationControl(opts));
		map.centerAndZoom(point, 15);
		map.addOverlay(marker);
		map.addEventListener("click",function(e){
		   var info = new BMap.InfoWindow('', {width: 260});
			var projection = this.getMapType().getProjection();
			var lngLat = e.point;
			document.getElementById(xid).value=lngLat.lng;
			document.getElementById(yid).value=lngLat.lat;
			map.clearOverlays();
			var point = new BMap.Point(lngLat.lng,lngLat.lat);
			var marker = new BMap.Marker(point);
			map.addOverlay(marker);
		});
	}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	function showcomstatusbody(){
		$.layer({
			type : 1,
			title : '审核说明',
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','auto'],
			page : {dom :"#showcomstatusbody"}
		});
	}
	function certform(){
		var company_name=$.trim($("#company_name").val());
		if(company_name==''){
			layer.msg('企业全称不能为空！',2,8);
			return false;
		}
	    $("#certform").submit();
		layer.load('执行中，请稍候...',0);
	}
	
	function checkWelfare(id){
		var welfare = $('#'+id).val();
		if(welfare.length>=2 && welfare.length<=8){
			//判断信息是否已经存在 
			$('.changewelfare').each(function(){
				var otag = $(this).attr('data-tag');
				if(welfare == otag){
					layer.msg('相同福利已存在，请选择或重新填写！', 2,8);
					$('#'+id).val('');
					return false;
				}
			});
			 
		}else{
			layer.msg('请输入2-8个福利字符！', 2,8);
			$('#'+id).val('');
			return false;
		}
	}
	//ajax提交表单
	$(function () {
		//添加福利
		$('.addwelfarebox').click(function(){
	
			var welfare = $('#addwelfare').val();
			
			$('#addwelfarelist').append('<input name="welfare[]" value="'+welfare+'" checked="checked"  type="checkbox" title="'+welfare+'" data-tag="'+welfare+'" class="changewelfare" lay-skin="primary">');
			
			layui.use(['layer', 'form'], function(){
				var layer = layui.layer
					,form = layui.form
					,$ = layui.$;
				form.render('checkbox');
			});

			$('#addwelfare').val('');
			 
		});
	});

	layui.use(['form','layer', 'laydate'], function(){
		var $ = layui.$,
			form = layui.form,
			laydate = layui.laydate,
			layer = layui.layer;
		
      	laydate.render({
        	elem: '#sdate'
        	,type: 'year',
        	ready: function(date){
          		$('.layui-laydate li').click(function () {
            		$('.laydate-btns-confirm').trigger('click');
          		});
       	 	},
        	change: function(value, date, endDate){
          		$('.layui-laydate li').click(function () {
            		$('.laydate-btns-confirm').trigger('click');
          		});
        	}
      	})

		form.on('select(moneytype)', function(data){
	   		if(data.value == 1){
	        	$("#money_1").show();
	        	$("#money_2").hide();
	      	}else{
	        	$("#money_2").show();
	        	$("#money_1").hide();
	      	}
	    });
  	});

  	$('#showUploadQrcode').on('mouseover', function(){
  		var that = this;
    	layer.tips( '<img src="<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>1),$_smarty_tpl);?>
" alt="手机扫码拍照上传" />', that); 
    	return false;
  	});

  	$('#showUploadQrcode').on('mouseout', function(){
    	layer.closeAll('tips');
  	});
  
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/city.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
	var editor = UE.getEditor('content',{
		toolbars:[[ 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],wordCount:false,elementPathEnabled:false,initialFrameHeight:200
	});
<?php echo '</script'; ?>
>
 
<!-- 不强制但是第一次认证 -->
<div class="yun_prompt_box" id="comInfoNotice" style="display:none;" >
	
	<div class="yun_tipsbox_tit">
		<span class="yun_tipsbox_tit_name">温馨提示</span>
		<a href="javascript:void(0)" onclick="window.location.reload();" class="yun_tipsbox_close"></a>
	</div>
 	
 	<div class="yun_prompt_writingicon"><i class="yun_prompt_writingicon_right"></i></div>
	
	<div class="yun_prompt_writing">企业资料保存成功！</div>
	
	<div class="yun_prompt_writing_obtain" id="firstComInfo" style="display:none;">
		完善企业资料获得<span class="yun_prompt_writing_obtain_n">+<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_userinfo'];?>
</span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

	</div>
	 
	<div class="yun_prompt_writing_tip" id='zzrz_msg'>企业尚未进行资质验证，将无法发布职位</div>
 	
	<div class="yun_prompt_writing_operation">
	    <a href="index.php?c=binding" id='zzrz_a' class="yun_prompt_writing_operation_bth" style='display:none;'>开始资质认证</a>
	    <a href="index.php?c=map" id='map_a' class="yun_prompt_writing_operation_bth" style='display:none;'>设置地图</a>
	    <a href="javascript:void(0)" id='job_a' onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['addjobnum']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;" class="yun_prompt_writing_operation_bth" style="display:none;">发布职位</a>
		<a href="javascript:void(0)" id='job_first' onclick="jobadd_url('1','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','','<?php echo $_smarty_tpl->tpl_vars['config']->value['com_integral_online'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');return false;" class="yun_prompt_writing_operation_bth" style="display:none;">发布职位</a>
	    <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['uid']->value),$_smarty_tpl);?>
" id='com_a' target="_blank" class="yun_prompt_writing_operation_bth">预览主页</a>
	</div>
	<!--提示部分  end-->

	
</div>
<?php if ($_smarty_tpl->tpl_vars['isremind']->value==1) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['temstyle']->value)."/member/public/remind.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
