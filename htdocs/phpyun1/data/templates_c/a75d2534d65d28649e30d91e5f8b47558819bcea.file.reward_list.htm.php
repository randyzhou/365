<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-19 15:07:28
         compiled from "D:\rcw\uploads\app\template\member\user\reward_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:18817954835fb619b0365216-76887881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a75d2534d65d28649e30d91e5f8b47558819bcea' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\user\\reward_list.htm',
      1 => 1576479787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18817954835fb619b0365216-76887881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
    'log' => 0,
    'num' => 0,
    'statis' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb619b0384763_81918236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb619b0384763_81918236')) {function content_5fb619b0384763_81918236($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
    
         <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
管理</span> <i class="member_right_h1_icon user_bg"></i></div>
          <div class="job_list_tit"> 
        <ul class="">
	<li ><a href="index.php?c=integral"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
任务</a></li>
      <li><a href="index.php?c=integral_reduce">消费规则</a></li>
 <li class="job_list_tit_cur"><a href="index.php?c=reward_list"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换</a></li>
	</ul> 
    </div>
    
    <div class="reward_box">
      <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
   <div class="reward_tit">
   <div class="reward_tit_name reward_spname"><span class="reward_sp_pd">商品名称</span></div>
   <div class="reward_tit_name reward_spje">消费<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
   </div>
   <div class="reward_tit_name reward_spsl">兑换数量   </div>
    <div class="reward_tit_name reward_sptime">兑换日期  </div>
   <div class="reward_tit_name reward_spzt">状态   </div>
   </div>
     <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
     
    <div class="reward_list">
   <div class="reward_tit_name reward_spname"><span class="train_bm_sp_pd"><a href="<?php echo smarty_function_url(array('m'=>'redeem','c'=>'show','id'=>$_smarty_tpl->tpl_vars['log']->value['gid']),$_smarty_tpl);?>
" target="_blank" class="reward_a"><?php echo $_smarty_tpl->tpl_vars['log']->value['name'];?>
</a></span></div>
   <div class="reward_tit_name reward_spje"><?php echo $_smarty_tpl->tpl_vars['log']->value['integral'];?>
 </div>
   <div class="reward_tit_name reward_spsl"><?php echo $_smarty_tpl->tpl_vars['log']->value['num'];?>
 件   </div>
    <div class="reward_tit_name reward_sptime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['ctime'],'%Y-%m-%d %H:%M:%S');?>
  </div>
   <div class="reward_tit_name reward_spzt"><?php if ($_smarty_tpl->tpl_vars['log']->value['status']=="0") {?> <span class="wate_verify">审核中</span>
   <a href="javascript:void(0)" onclick="layer_del('确定要取消？', 'index.php?c=reward_list&act=del&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
');" class="cblue">取消兑换</a> 
   <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['status']=="1") {?> <span class="y_verify">已通过</span> <?php } elseif ($_smarty_tpl->tpl_vars['log']->value['status']=="2") {?> 
   <span class="n_verify">未通过</span><?php if ($_smarty_tpl->tpl_vars['log']->value['statusbody']) {?><a href="javascript:void(0)" onclick="layer.open({title:'查看原因',content: '<?php echo $_smarty_tpl->tpl_vars['log']->value['statusbody'];?>
'});" class="cblue">原因</a><?php }?> <?php }?>   </div>
                
                <div class="reward_other">备注：<?php echo $_smarty_tpl->tpl_vars['log']->value['body'];?>
<span class="reward_tel">电话：<?php echo $_smarty_tpl->tpl_vars['log']->value['linktel'];?>
</span><span class="">联系人：<?php echo $_smarty_tpl->tpl_vars['log']->value['linkman'];?>
</span></div>
                <?php if ($_smarty_tpl->tpl_vars['log']->value['express']) {?>
               <div class="reward_other"> 快递公司：<?php echo $_smarty_tpl->tpl_vars['log']->value['express'];?>

                <?php }
if ($_smarty_tpl->tpl_vars['log']->value['expnum']) {?>
               <span class="reward_tel"> 单号：<?php echo $_smarty_tpl->tpl_vars['log']->value['expnum'];?>
</span>
                </div>
                <?php }?>
   </div>
       
           
             <?php } ?>
           <div class="reward_wxts"> 
                <div class="wxts">温馨提示：</div>
               您已兑换 <span style="color:#f60;"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</span> 份礼品，还有<span style="color:#f60;"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
。 <a href="<?php echo smarty_function_url(array('m'=>'redeem'),$_smarty_tpl);?>
" class="cblue"  target="_blank" >我要兑换</a><br>
            </div>   </div>
            <?php } else { ?>
            <div class="msg_no">您共有<span style="color:#f60;"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
，还没有兑换记录，<a class="cblue" href="<?php echo smarty_function_url(array('m'=>'redeem'),$_smarty_tpl);?>
" target="_blank">现在就去兑换</a>。</div>
         <?php }?> 
    
    <div>
      <div id="gms_showclew"></div>
     
          <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
        </div>
      </div> </div>
  
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
