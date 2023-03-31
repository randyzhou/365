<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 21:15:56
         compiled from "D:\rcw\uploads\app\template\member\com\payment.htm" */ ?>
<?php /*%%SmartyHeaderCode:12155232235fb7c18c722372-73062669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a261c2f8f5bce94b2a71905530edc86cbbc55b28' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\payment.htm',
      1 => 1578911159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12155232235fb7c18c722372-73062669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'config' => 0,
    'rows' => 0,
    'blist' => 0,
    'v' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb7c18c752e47_32430974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb7c18c752e47_32430974')) {function content_5fb7c18c752e47_32430974($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="w1000">
    <div class="admin_mainbody">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   	<div class="com_tit"><span class="com_tit_span">收银台</span></div>
 	<div class=right_box>
    	<div class=admincont_box>
        	<div class="com_body">
            	<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
               	<form name="alipayment" class="layui-form" id="payform" action=" " method="post" onsubmit="return paymentforms();" enctype="multipart/form-data">
               		<div class="payment_boxtable">
                   		<table class="" cellpadding="1" cellspacing="1" border="0">
                    		<tr>
                         		<th>订单编号</th>
                               	<th>购买商品</th>
                               	<th>金额</th>
                           	</tr>
	                     	<tr>
	                        	<td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
<input type="hidden" name="dingdan" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
" /></td>
	                        	<td>
	                            	<?php if ($_smarty_tpl->tpl_vars['order']->value['type']==1) {?>购买会员 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='2') {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
充值 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='3') {?>银行转帐 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='4') {?>金额充值 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='5') {?>增值服务   <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='10') {?>职位置顶 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='11') {?>紧急招聘 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='12') {?>职位推荐 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='13') {?>职位自动刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='16') {?>职位刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='17') {?>兼职刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='18') {?>职位刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='19') {?>下载简历 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='20') {?>发布职位 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='21') {?>发布兼职 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='23') {?>面试邀请 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='24') {?>兼职推荐<?php }?>
                                   	<input type="hidden" name="aliorder" id="aliorder" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
" />
                                   	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" name='oid' id='oid' />
                                   	<input type="hidden" name="alimoney" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
" />
                                   	<input type="hidden" name="paytype" id="paytype" value="" />
                                   	<input type="hidden" name="subject" value="<?php if ($_smarty_tpl->tpl_vars['order']->value['type']==1) {?>购买会员 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='2') {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
充值 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='3') {?>银行转帐 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='4') {?>金额充值 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='5') {?>增值服务  <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='10') {?>职位置顶 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='11') {?>紧急招聘 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='12') {?>职位推荐 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='13') {?>职位自动刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='16') {?>职位刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='17') {?>兼职刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='18') {?>职位刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='19') {?>下载简历 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='20') {?>发布职位 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='21') {?>发布兼职  <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='23') {?>面试邀请 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='24') {?>兼职推荐 <?php }?>" />
	                         	</td>
	                        	<td>￥<?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
</td>
	                     	</tr>
                     	</table>
  						<div class="payment_boxlist_fk"> 实付款
	                    	<span class="payment_boxlist_fk_n">￥
	    						<span id="order_price"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
</span>
	                       	</span>
	                   	</div>
							
						<?php if ($_smarty_tpl->tpl_vars['config']->value['tenpay']=='1'||$_smarty_tpl->tpl_vars['config']->value['bank']=='1'||$_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
						
                           <div class="payment_boxlist_zf" id="pay_style">
                               <?php if ($_smarty_tpl->tpl_vars['config']->value['bank']=='1'&&is_array($_smarty_tpl->tpl_vars['rows']->value)&&$_smarty_tpl->tpl_vars['rows']->value) {?><span class="payment_boxlist_zf_s" id="otherpay" onclick="paycheck('otherpay');"><i class="payment_boxlist_zf_icon payment_boxlist_zf_icon_qt"></i>其他支付方式</span><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['config']->value['tenpay']=='1') {?><span class="payment_boxlist_zf_s" id="tenpay" onclick="paycheck('tenpay');"><i class="payment_boxlist_zf_icon payment_boxlist_zf_icon_cft"></i>财付通支付</span><?php }?>
                          
                               <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?><span class="payment_boxlist_zf_s" id="alipay" onclick="paycheck('alipay');"><i class="payment_boxlist_zf_icon payment_boxlist_zf_icon_zfb"></i>支付宝支付</span><?php }?>
                           </div>

                           <div class="bank_box other_pay" style="display: none;">
                               <table width="100%" border="0" cellpadding="1" cellspacing="1" class="my_table_msg" style="background:#ddd">
                                   <tr>
                                       <th width="8%" height="30" align="center" bgcolor="#F7FAFF">银行名称</th>
                                       <th width="5%" height="30" align="center" bgcolor="#F7FAFF">开户人</th>
                                       <th width="12%" align="center" bgcolor="#F7FAFF">银行帐户</th>
                                       <th width="14%" align="center" bgcolor="#F7FAFF">开户行</th>
                                   </tr>
                                   <?php if (is_array($_smarty_tpl->tpl_vars['rows']->value)) {?> <?php  $_smarty_tpl->tpl_vars['blist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blist']->key => $_smarty_tpl->tpl_vars['blist']->value) {
$_smarty_tpl->tpl_vars['blist']->_loop = true;
?>
                                   <tr>
                                       <td height="30" align="center" bgcolor="#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['blist']->value['bank_name'];?>
</td>
                                       <td height="30" align="center" bgcolor="#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['blist']->value['name'];?>
</td>
                                       <td align="center" bgcolor="#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['blist']->value['bank_number'];?>
</td>
                                       <td align="center" bgcolor="#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['blist']->value['bank_address'];?>
</td>
                                   </tr>
                                   <?php } ?> <?php } else { ?>
                                   <tr>
                                       <td colspan="4" height="26" align="center" bgcolor="#FFFFFF">暂未添加银行</td>
                                   </tr>
                                   <?php }?>
                               </table>

                               <div class="bank_list_p_box">

                                   <div class="bank_list_p">
                                       <span class="bank_list_p_s">汇款银行：</span>
        
										<div class="layui-input-inline">
											<select name="banks" lay-filter="banks">
												<option value="">请选择汇款银行</option>
						 					  	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
											  	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bank_name'];?>
+<?php echo $_smarty_tpl->tpl_vars['v']->value['bank_number'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['bank_name'];?>
</option>
											  	<?php } ?>
											</select>
											<input type="hidden" name="bank_name" id="bank_name" value="">	
										</div>
									</div>
                                   <div class="bank_list_p">
                                       <span class="bank_list_p_s">汇入账号：</span>
                                       <input type="text" id="bank_number" name="bank_number" class="bank_list_text" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" />
                                   </div>
                                   <div class="bank_list_p">
                                       <span class="bank_list_p_s">汇款金额：</span>
                                       <input type="text" id="bank_price" name="bank_price" class="bank_list_text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
" />
                                   </div>
                                   <div class="bank_list_p">
                                       <span class="bank_list_p_s">汇款时间：</span>
                                       <input type="text" id="bank_time" name="bank_time" class="bank_list_text" />
                                   </div>
                                   <div class="bank_list_p">
                                       <span class="bank_list_p_s">备注</span>
                                       <textarea name='order_remark' class="bank_textarea"></textarea>
                                   </div>
                                   <div class="bank_list_p">
                                       <span class="bank_list_p_s">上传汇款单：</span>
                                       <button type="button" class="layui-btn layui-btn-normal noupload" lay-data="{imgid: 'imgicon',parentid: 'imgparent'}">选择文件</button>
                                       <input type="hidden" id="laynoupload" value="1" />   <span id="imgparent" class=" none"> 
                                     <img id="imgicon" src="" width="38" height="38"> 
                                   </span>
                                   </div>
                                
                                   <?php echo '<script'; ?>
 type="text/javascript">
                                       layui.use(['laydate'], function() {
                                           var laydate = layui.laydate,
                                               $ = layui.$;
                                           laydate.render({
                                               elem: '#bank_time'
                                           });
                                       });
                                   <?php echo '</script'; ?>
>
                               </div>
                           </div>

                           <div class="payment_boxlist_zf_bth" id="order_pay">
                               <input type="button" value="确认支付" class="payment_boxlist_zf_bth_a" onClick="CheckForm();">
                           </div>
                            
						<?php } else { ?>
						<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
						<?php }?>
 					</div>
              	</form>
            </div>
   		</div>
	</div>
	</div>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    function paycheck(type) {
          if(type == "alipay") {
            document.getElementById('payform').action = "../api/alipay/alipayto.php";
            $("#payform").attr("target", "_blank");
            $("#alipay").addClass("payment_boxlist_zf_s_cur");
            $("#otherpay").removeClass("payment_boxlist_zf_s_cur");
            $("#tenpay").removeClass("payment_boxlist_zf_s_cur");
            $("#paytype").val("alipay");
            $(".other_pay").hide();
        } else if(type == "tenpay") {
            document.getElementById('payform').action = "../api/tenpay/index.php";
            $("#payform").attr("target", "_blank");
            $("#tenpay").addClass("payment_boxlist_zf_s_cur");
            $("#otherpay").removeClass("payment_boxlist_zf_s_cur");
            $("#alipay").removeClass("payment_boxlist_zf_s_cur");
            $("#paytype").val("tenpay");
            $(".other_pay").hide();
        } else if(type == "otherpay") {
            document.getElementById('payform').action = "index.php?c=payment&act=paybank";
            $("#payform").attr("target", "supportiframe");
            $("#otherpay").addClass("payment_boxlist_zf_s_cur");
            $("#alipay").removeClass("payment_boxlist_zf_s_cur");
            $("#tenpay").removeClass("payment_boxlist_zf_s_cur");
            $("#paytype").val("bank");
            $(".other_pay").show();
        }
		
    }

    $(function() {
        $("input[name='pay_bank']").eq(0).attr("checked", true); 
       	<?php if ($_smarty_tpl->tpl_vars['company']->value['link_null']=='') {?>
            $("input[name='linkway']").attr("checked", false);
            $("#linkway_1").attr("checked", true); 
     	<?php }?>
		
		<?php if ($_GET['paytype']=='bank') {?>
		paycheck('otherpay');
		<?php }?>
    });
    
	function CheckForm(){
		var oid		=	$("input[name=oid]").val();
		var paytype = 	$("input[name=paytype]").val(); 
		var index	=	loadlayer();
		$.ajax({
			async: false, //设置ajax同步  
			type: 'POST',  
			global:false,
			url: weburl+"/member/index.php?m=ajax&c=order_type",  
			data: {oid:oid,paytype:paytype},  
			success: function(data){
				layer.close(index);
			
 				$('#payform').submit();
			}  
		});
	}
    function paymentforms() {
    	
        var pay_bank = $("#paytype").val();
        
		if(pay_bank == '') {
		
			layer.msg('请选择支付方式！', 2, 8);
			return false;
		} else if(pay_bank == 'bank') {
			if($("#bank_name").val() == "") {
				layer.msg('请填写汇款银行！', 2, 8);
				return false;
			}
			if($("#bank_number").val() == "") {
				layer.msg('请填写汇入账号！', 2, 8);
				return false;
			}
			if($("#bank_price").val() == "") {
				layer.msg('请填写汇款金额！', 2, 8);
				return false;
			}
			if($("#bank_time").val() == "") {
				layer.msg('请填写汇款时间！', 2, 8);
				return false;
			}
		}
		
    if(pay_bank !='bank'){
 
			$.layer({
				type: 1,
				title: '提示',
				closeBtn: [0, true],
				border: [10, 0.3, '#000', true],
				area: ['450px', '280px'],
				page: {
					dom: "#payshow"
				}
			});
		}
    }



	layui.use(['form'], function() {
		var form = layui.form,
			layer = layui.layer,
			$ = layui.$;
		
		form.on('select(banks)', function(data){
			if(data.value){
				var bank = data.value.split("+");
				
				$("#bank_name").val(bank[0]);
				$("#bank_number").val(bank[1]);
				form.render('select');
			}
		});
	});
	
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
