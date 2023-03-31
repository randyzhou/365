<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:03:34
         compiled from "D:\rcw\uploads\app\template\\member\public\changeutype.htm" */ ?>
<?php /*%%SmartyHeaderCode:16663288365f9d98e6c631d5-71640378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46aec881818d00882cbf99dc502f28b9cdeb8c04' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\\\member\\public\\changeutype.htm',
      1 => 1577255110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16663288365f9d98e6c631d5-71640378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d98e6c6c575_17917772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d98e6c6c575_17917772')) {function content_5f9d98e6c6c575_17917772($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/member/public/style/changeutype.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css"/>
<!--切换类型-->

<div class="user_role_box none">

<div class="user_role">当前身份：<?php if ($_COOKIE['usertype']==1) {?>求职者<?php } elseif ($_COOKIE['usertype']==2) {?>招聘企业<?php }?></div>
<div class="user_role_pic"></div>
<div class="user_role_bth <?php if ($_COOKIE['usertype']==1) {?> none <?php }?>"><a href="javascript:;" onclick="changUsertypeFun(1);" class="user_role_bth_b">个人求职</a></div>
<div class="user_role_bth <?php if ($_COOKIE['usertype']==2) {?> none <?php }?>"><a href="javascript:;" onclick="changUsertypeFun(2);" class="user_role_bth_b">招聘企业</a></div>


</div>
<div class="" id="infoboxusertype" style="display:none; ">
  <div>
    <input name="applyusertype" id="applyusertype" value="0" type="hidden">
       <input name="usertype" id="usertype" value="<?php echo $_COOKIE['usertype'];?>
" type="hidden">
      <div class="identity_textarea" >
        <textarea id="applybody"  name="applybody" placeholder="请说明您需要切换身份的原因" class="bz_textarea_text"></textarea>
      </div>
      <div class="identity_bth" >
        <button type="button"  onclick="domaincheck();"  class="identity_bth_qd">确定</button>
      &nbsp;&nbsp;
      <button type="button" id='applybtn'  class="identity_bth_qx">取消</button>
      </div>
  </div>
</div>
<!-------已拒绝   start -------->
<div class="" id="applyyjj" style="display:none; ">
  <div>
  
      <div class="identity_jtip" >
        <div id="applyyjjsm"></div>
      </div>
      <div class="identity_sqbth" >
      <button type="button" id='newsapply' onclick="newsapplyt();" class="identity_sq" >重新申请</button>
 
        <button type="button" id='applybtnyjj' onclick="applybtnyjjt();"  class="identity_qx">取消</button>    </div>
  </div>
</div>
<!-------已拒绝   end -------->
<!-------待审核   start -------->
<div class="" id="applydqr" style="display:none; ">
  <div>

      <div class="identity_cgtip" >
        <div id="applydshsm"></div>
         
      </div>
      <div class="identity_cgwxtip">
        你可关注微信快速接收审核信息
      </div>
     <div class="identity_cgwxewm">
						<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="120" height="120">
					</div>
                        <div class="identity_cgtel">
        如需快速审核，可拨打热线：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>

      </div>
  </div>
</div>
<!-------待审核 end -------->
<?php echo '<script'; ?>
>
layui.use('layer', function(){
	var layer = layui.layer;

});  
$(document).ready(function(){ 
	$('#applybtn').click(function(){
		layer.closeAll();
	}); 
  $('#applybtndsh').click(function(){
		layer.closeAll();
	});
}); 
    function newsapplyt(){
      $.post("<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/index.php?c=applystype",{rand:Math.random()},function(data){
        layer.closeAll();
        var data=eval('('+data+')');
        if(data['errcode']==2){
          layer.open({
          type: 1,
          skin: 'yun_skin',
          title: false,
          closeBtn : 1,
          area : [ '390px', 'auto' ],
          content: $('.user_role_box') 
          });
        }else{
           var data=eval('('+data+')');
              parent.layer.msg(data.msg, 2,8, function(){
              window.location.href = data.url;
              window.event.returnValue = false;
           });
        }
      });

    }
    function applybtnyjjt(){
       $.post("<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/index.php?c=applystype",{rand:Math.random()},function(data){
        layer.closeAll();
      });
    }
function changeutype(){
  $.post("<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/index.php?c=applytype",{rand:Math.random()},function(data){
     if(data){
        var data=eval('('+data+')');
        if(data.errcode==1){
          parent.layer.msg(data.msg, 2,8, function(){
            window.location.href = data.url;
            window.event.returnValue = false;
          });
        }else if(data.errcode==2){
          $("#applydshsm").html(data.msg);
          if(data.wxopenid || data.wxid){
            $("#wxbingding").css("display","none");             
          }else{
            $("#wxbingding").css("display","block");    
          }
          $.layer({
            type: 1,
            title :'温馨提示', 
            closeBtn : [0 , true],
            border : [10 , 0.3 , '#000', true],
            area : ['400px','auto'],
            page : {dom :"#applydqr"}
          });
        }else if(data.errcode==3){
         $("#applyyjjsm").html(data.msg);
          $.layer({
            type: 1,
            title :'拒绝说明', 
            closeBtn : [0 , true],
            border : [10 , 0.3 , '#000', true],
            area : ['300px','auto'],
            page : {dom :"#applyyjj"}
          });
        }else{
          layer.open({
            type: 1,
            skin: 'yun_skin',
            title: false,
            closeBtn : 1,
            area : [ '390px', 'auto' ],
            content: $('.user_role_box') 
          });
        }
      }else{
        layer.open({
          type: 1,
          skin: 'yun_skin',
          title: false,
          closeBtn : 1,
          area : [ '390px', 'auto' ],
          content: $('.user_role_box') 
        });
      }
    });
  }

//切换身份
function changUsertypeFun(usertype){
  var usertype  =     usertype;
  $("#applyusertype").val(usertype);
  $.layer({
    type : 1,
		title :'申请说明', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['300px','auto'],
		page : {dom :"#infoboxusertype"}
  })
}
function domaincheck(){
  var usertype        = $('#usertype').val();
  var applyusertype   = $('#applyusertype').val();
  var applybody       = $.trim($("textarea[name='applybody']").val());
  if(applyusertype==""){
     parent.layer.msg('请选择转换类型！', 2, 8);return false;
  }else if(usertype==applyusertype){
    parent.layer.msg('转换类型与当前类型一致，无须转换！', 2, 8);return false;
  }
  if(applybody==""){
    parent.layer.msg('请填写申请说明！', 2, 8);return false;
  }
  $.post("<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/index.php?c=changeusertype",{usertype:usertype,applyusertype:applyusertype,applybody:applybody},function(data){
      var data=eval('('+data+')');
      parent.layer.msg(data.msg, 2,9, function(){
        window.location.href = data.url;
        window.event.returnValue = false;
      });
  });
}
<?php echo '</script'; ?>
><?php }} ?>
