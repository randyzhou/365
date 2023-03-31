<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-01 01:11:56
         compiled from "D:\rcw\uploads\app\template\member\com\show.htm" */ ?>
<?php /*%%SmartyHeaderCode:13286469955f9d9adc20a2f1-63748158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fb1962032c3bc0186e9d1d6de370e2d1ac76d45' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\member\\com\\show.htm',
      1 => 1576479786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13286469955f9d9adc20a2f1-63748158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'show' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d9adc213368_08695499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d9adc213368_08695499')) {function content_5f9d9adc213368_08695499($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
    <div class="admin_mainbody">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

           <div class="com_tit"><span class="com_tit_span">企业资料</span></div>
                 <div class=right_box>
            <div class=admincont_box>
            
                <div class="job_list_tit">
                    <ul class="">
                        <li>
                            <a href="index.php?c=info">基本信息</a>
                        </li>
                        <li>
                            <a href="index.php?c=map">企业地图</a>
                        </li>
                        <li>
                            <a href="index.php?c=news">企业新闻</a>
                        </li>
                        <li class="job_list_tit_cur">
                            <a href="index.php?c=show">企业环境</a>
                        </li>
                        <li>
                            <a href="index.php?c=product">企业产品</a>
                        </li>
                    </ul>
                </div>

                <div class="com_m_search">
                    <input class="com_m_tj" type="button" value="+ 上传环境图片" onclick="location.href='index.php?c=show&act=addshow'" />
                </div>
                <div class="com_body">


                    <div class="show_pic fltL">
                        <div id="trlisttwo">
                            <?php  $_smarty_tpl->tpl_vars['show'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['show']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['show']->key => $_smarty_tpl->tpl_vars['show']->value) {
$_smarty_tpl->tpl_vars['show']->_loop = true;
?>
                            <div class="show_pic_list">
                                <div class="show_pic_list_box">
                                    <div class="show_pic_list_pic">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['show']->value['picurl'];?>
" lay-src="<?php echo $_smarty_tpl->tpl_vars['show']->value['picurl'];?>
" height="150" />
                                        <div class="show_pic_list_pic_name"><?php echo $_smarty_tpl->tpl_vars['show']->value['title'];?>
</div>
                                    </div>
                                    <div class="show_pic_list_opt">
										<a href="javascript:void(0)" onclick="showpic(this)" data_url="<?php echo $_smarty_tpl->tpl_vars['show']->value['picurl'];?>
" class="com_bth cblue">查看</a>
                                        <a href="index.php?c=show&act=showpic&id=<?php echo $_smarty_tpl->tpl_vars['show']->value['id'];?>
" class=" com_bth cblue">修改</a>
                                        <a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=show&&act=del&id=<?php echo $_smarty_tpl->tpl_vars['show']->value['id'];?>
'); " class=" com_bth cblue">删除</a>
                                    </div>
                                </div>
                            </div>
                            <?php }
if (!$_smarty_tpl->tpl_vars['show']->_loop) {
?>
                            <div class="com_msg_no">
                                <p>亲爱的用户，目前您还没有上传企业环境信息，</p>
                                <p>立即上传环境信息,为招聘效果加分！</p>
                                <input class="com_msg_no_bth com_submit" type="button" value="我要上传" onclick="location.href='index.php?c=show&act=addshow'"
                                />

                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
	layui.use(['form', 'layer'], function() {
		var $ = layui.$,
			form = layui.form,
			layer = layui.layer;
		layer.photos({
		  photos: '#trlisttwo',
		  anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
		}); 
	});
	function showpic(obj){
		var url =	$(obj).attr('data_url');
		var picjson={
		  "data": [ {
			  "src": url, //原图地址
			  "thumb": url //缩略图地址
			}]
		}
		layer.photos({
			photos: picjson
			,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
		});
	}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
