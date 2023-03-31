<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-07 03:13:32
         compiled from "D:\rcw\uploads\app\template\wap\member\public\changeutype.htm" */ ?>
<?php /*%%SmartyHeaderCode:2277980785fa5a05c4f6044-88938263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65a3eba11bd82d58f1f7c3cd778cd34a4d4d2b68' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\public\\changeutype.htm',
      1 => 1576497000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2277980785fa5a05c4f6044-88938263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fa5a05c4ffbf2_17347158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fa5a05c4ffbf2_17347158')) {function content_5fa5a05c4ffbf2_17347158($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/member/public/style/changeutype.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css"/>
<!--切换身份-->
<div class="user_role_box none">
<div class="user_role_cont">
<div class="user_role">当前身份：<?php if ($_COOKIE['usertype']==1) {?>求职者<?php } elseif ($_COOKIE['usertype']==2) {?>招聘企业<?php }?></div>
<div class="user_role_pic"></div>

<div class="user_role_bth <?php if ($_COOKIE['usertype']==1) {?> none <?php }?>"><a href="javascript:;" onclick="changUsertypeFun(1,<?php echo $_COOKIE['usertype'];?>
);" class="user_role_bth_b">个人求职</a></div>
<div class="user_role_bth <?php if ($_COOKIE['usertype']==2) {?> none <?php }?>"><a href="javascript:;" onclick="changUsertypeFun(2,<?php echo $_COOKIE['usertype'];?>
);" class="user_role_bth_b">招聘企业</a></div>


</div>
</div>
<style>
.layui-m-layer1 .layui-m-layerchild{border-radius:10px;}
</style>

<?php echo '<script'; ?>
>
function changeutype(nocloseShade){
  $.post(wapurl+'/index.php?c=applytype',{rand:Math.random()},function(data){
    if(data){
      var data=eval('('+data+')');
      if(data.errcode==1){
        layermsg(data.msg, 2, function(){window.location.href =data.url;return false;});
      }else if(data.errcode==2){
        if(data.wxopenid || data.wxid){
          $("#wxbingding").css("display","none");             
        }else{
          $("#wxbingding").css("display","block");    
        }
        layer.open({
          type: 1,
          title: '温馨提示',
          closeBtn: [0, true],
          border: [10, 0.3, '#000', true],
          area: ['300px', 'auto'],
          content:'<div class="userchange_shuoming"><div class="identity_cgtip"><div id="applydshsm"></div></div><div class="identity_cgwxtip">你可关注微信快速接收审核信息</div><div class="identity_cgwxewm"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="120" height="120"></div><div class="identity_cgtel">如需快速审核，可拨打热线<div><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div></div></div>',
        });
        $("#applydshsm").html(data.msg);
      }else if(data.errcode==3){
        layer.open({
          type: 1,
          title: '温馨提示',
          closeBtn: [0, true],
          border: [10, 0.3, '#000', true],
          area: ['300px', 'auto'],
          content:'<div class="userchange_shuoming"><div class="identity_jtip"><div id="applyyjjsm"></div><div class="qh_bth"><button type="button" onclick="newapply()"  class="qh_bt_sq" >重新申请</button>&nbsp;&nbsp;<button type="button" id="" onclick="quxiaoapply()"  class="com_pop_bth_qx">取消</button></div></div>',
        });
        $("#applyyjjsm").html(data.msg);
      }else{
        if(nocloseShade){
          shadeClose=false;
        }else{
          shadeClose=true;
        }
        layer.open({
          type: 1,
          closeBtn: 1,
          shadeClose:shadeClose,
          border: [10, 0.3, '#000', true],
          content: $(".user_role_box").html()
        });
      }
    }else{
      if(nocloseShade){
        shadeClose=false;
      }else{
        shadeClose=true;
      }
      layer.open({
      type: 1,
      closeBtn: 1,
      shadeClose:shadeClose,
      border: [10, 0.3, '#000', true],
      content: $(".user_role_box").html()
      });
    }
  });
}
//切换身份
function changUsertypeFun(usertype,presusertype){
  if(usertype==presusertype){
      layermsg('转换会员类型与当前会员类型一致,无须申请转！');
  }else{
    layer.open({
      type: 1,
      title: '申请说明',
      closeBtn: [0, true],
      border: [10, 0.3, '#000', true],
      area: ['300px', 'auto'],
      content:'<div class="userchange_shuoming"><input id="applyusertype" name="applyusertype"  value="0" type="hidden"><input name="usertype" id="usertype" value="<?php echo $_COOKIE['usertype'];?>
" type="hidden"><div class="qh_textarea"><textarea name="applybody" placeholder="请输入您切换身份的原因"  rows="5" cols="100"   class="qh_textarea_text"></textarea></div><div class="qh_bth"><button type="button" onclick="applyuserchange()"  class="qh_bt_sq" >申请</button>&nbsp;&nbsp;<button type="button" id="" onclick="applyqxs()"  class="com_pop_bth_qx">取消</button></div></div>',
    });
    $("#applyusertype").val(usertype);
  }
}
function applyuserchange(){
  var  usertype        =     $("#usertype").val();
  var  applyusertype   =     $("#applyusertype").val();
  var  applybody       =    $.trim($("textarea[name='applybody']").val());
  if(applyusertype==""){
    layermsg('请选择转换类型！');return false;
  }else if(usertype==applyusertype){
    layermsg('转换会员类型与当前会员类型一致,无须申请转换！');return false;
  }
  if(applybody==""){
    layermsg('请填写申请说明!');return false;
  }
  $.post(wapurl+'/index.php?c=changeusertype',{applybody:applybody,applyusertype:applyusertype},function(msg){
    var data=eval('('+msg+')');
    layermsg(data.msg, 2, function(){window.location.href =data.url;return false;});
  })
}
function applyqxs() {
  layer.closeAll();
}
//重新申请
function newapply(){
  $.post(wapurl+'index.php?c=applystype',{rand:Math.random()},function(data){

    if(data['errcode']){
      var data=eval('('+data+')');
      layermsg(data.msg, 2, function(){window.location.href =data.url;return false;});
    }else{
      layer.closeAll();
      layer.open({
        type: 1,
        closeBtn: 1,
        shadeClose:true,
        border: [10, 0.3, '#000', true],
        content: $(".user_role_box").html()
      });
    }
  }); 
}
//取消申请
function quxiaoapply(){
  $.post(wapurl+'index.php?c=applystype',{rand:Math.random()},function(data){
    layer.closeAll();
  });
}

<?php echo '</script'; ?>
><?php }} ?>
