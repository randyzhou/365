<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:12:00
         compiled from "D:\rcw\uploads\app\template\member\com\comtpl.htm" */ ?>
<?php /*%%SmartyHeaderCode:13560653285f9d9ae05f3200-83719078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14d3ad34244f75e93fce92fb49abebac597f97d7' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\comtpl.htm',
      1 => 1576479784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13560653285f9d9ae05f3200-83719078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'now_url' => 0,
    'list' => 0,
    'style' => 0,
    'config' => 0,
    'statis' => 0,
    't' => 0,
    'buytpl' => 0,
    'uid' => 0,
    'bannernum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9ae060e586_84726542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9ae060e586_84726542')) {function content_5f9d9ae060e586_84726542($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
    <div class="admin_mainbody">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="com_tit"><span class="com_tit_span">企业模板</span><i class="com_admin_ask"></i></div>
        <div class=right_box>
            <div class=admincont_box>
                <div class="com_body">
                <div class="com_new_tip"> 
          <span class="com_new_tip_h">温馨小提示</span>购买后可以更换横幅图片，展示企业形象！  </div>
       <div class="com_m_search">
             <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$uid`'),$_smarty_tpl);?>
" target="_blank" class="com_m_tj" style="margin-left:0px;">预览公司网站</a>
             
        </div>  
                    <div class=admin_textbox_02>
                    
                    <div class="comtpl_box">
                    <div class="comtpl_box_c">
                        <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                        <form id="myform" name="form1" method="post" target="supportiframe" action="<?php echo $_smarty_tpl->tpl_vars['now_url']->value;?>
&act=settpl">
                            <input type="hidden" value="savetpl" name="savetpl" />
                            <?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->_loop = true;
?>
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['style']->value['name'];?>
" name="tplname<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
" />
                            <div class="compl_list">
                                 <div class="compl_list_box">
                                <div class="compl_list_pic"> <img alt="<?php echo $_smarty_tpl->tpl_vars['style']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['style']->value['pic'];?>
"> </div>
                                <div class="compl_list_b_box">
                                <div class="comtpl_name">
                                  <?php echo $_smarty_tpl->tpl_vars['style']->value['name'];?>
         
                                    </div>
                                     <div class="compl_list_p" id="list_tpl_<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
">
                                    <b class="comtpl_b">
                                            <?php if ($_smarty_tpl->tpl_vars['style']->value['price']!=0) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['style']->value['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>

                                            <?php } else { ?>
                                            免费
                                            <?php }?>
                                        </b>
                                    </div>
                                   
                                    <div class="compl_list_b_opt">
                                   
                          
                                        <?php $_smarty_tpl->tpl_vars["t"] = new Smarty_variable($_smarty_tpl->tpl_vars['style']->value['url'], null, 0);?>
                                        <?php if ($_smarty_tpl->tpl_vars['style']->value['url']=='default') {?>
											<?php if ($_smarty_tpl->tpl_vars['statis']->value['comtpl']=='0'||$_smarty_tpl->tpl_vars['statis']->value['comtpl']=='default') {?>

<span class="com_bth cblue" style="background:#f8f8f8">使用中</span>
											<a href="index.php?c=banner" class="com_bth cblue">更换横幅</a>








											<?php } else { ?>
											<a href="javascript:void(0);" onclick="return checktpl('<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
');" class="com_bth cblue">使用</a>
											<?php }?>
                                            <input type='hidden' id='buytpl_<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
' value='1'>
                                        <?php } elseif (in_array($_smarty_tpl->tpl_vars['t']->value,$_smarty_tpl->tpl_vars['buytpl']->value)) {?>
											<input type='hidden' id='buytpl_<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
' value='1'>
											<?php if ($_smarty_tpl->tpl_vars['statis']->value['comtpl']==$_smarty_tpl->tpl_vars['style']->value['url']) {?>


<span class="com_bth cblue" style="background:#f8f8f8">使用中</span>
											<a href="index.php?c=banner" class="com_bth cblue">更换横幅</a>



											<?php } else { ?>
											<a href="javascript:void(0);" onclick="return checktpl('<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
');" class="com_bth cblue">使用</a>
											<?php }?>
                                        <?php } else { ?>
											<input type='hidden' id='buytpl_<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
' value='0'>
											<a href="javascript:void(0);" onclick="return checktpl('<?php echo $_smarty_tpl->tpl_vars['style']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['style']->value['price'];?>
');" class="com_bth cblue"><?php if ($_smarty_tpl->tpl_vars['style']->value['price']!=0) {?>购买<?php } else { ?>使用<?php }?></a>
                                        <?php }?>
                                          <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['uid']->value,'style'=>$_smarty_tpl->tpl_vars['style']->value['url']),$_smarty_tpl);?>
" target="_blank" class="com_bth cblue">预览</a>
                                    </div>
                                </div>
                            </div>
                      </div>
                            <?php } ?>
                            <input type="hidden" name="tpl" id="tplid" value="" />
                            <input type="hidden" name="bannernum" value="<?php echo $_smarty_tpl->tpl_vars['bannernum']->value;?>
" />
                        </form>
                    </div>  </div>
                </div>
            </div>
        </div>       </div>
        <?php echo '<script'; ?>
 language="javascript">
            $(document).ready(function () {
                $(".com_admin_ask").hover(function () {
                    layer.tips("为自己的公司选择一个合适的展示风格！", this, {
                        guide: 1,
                        style: ['background-color:#5EA7DC; color:#fff;top:-7px', '#5EA7DC']
                    });
					$(".xubox_layer").addClass("xubox_tips_border");
                }, function () { layer.closeTips(); });
            });
        <?php echo '</script'; ?>
>
    </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
