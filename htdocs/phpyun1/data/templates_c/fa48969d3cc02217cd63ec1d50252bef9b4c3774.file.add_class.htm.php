<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-10-31 16:56:38
         compiled from "D:\rcw\uploads\app\template\admin\add_class.htm" */ ?>
<?php /*%%SmartyHeaderCode:20742975565f9d26c6589949-66875602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa48969d3cc02217cd63ec1d50252bef9b4c3774' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\admin\\add_class.htm',
      1 => 1576479798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20742975565f9d26c6589949-66875602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'position' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5f9d26c658e3e5_06072192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9d26c658e3e5_06072192')) {function content_5f9d26c658e3e5_06072192($_smarty_tpl) {?><!--有变量名弹出框-->
<div id="wname"  style="display:none; "> 
	<div class="job_box_div">  
	  <div class="job_box_inp">
      <form class="layui-form">
        <table cellspacing='1' cellpadding='1' class="admin_examine_table">
		      <tr >
            <th  width="100">类别选择：</th>
            <td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="ctype" lay-filter="ctype" value="1" title="一级分类" checked type="radio">
                  <input name="ctype" lay-filter="ctype" value="2" title="二级分类" type="radio">
                </div>
              </div>
            </td>
          </tr>
	       	<tr class='sclass'  style="display:none;">
            <th>父类：</th>
            <td> 
              <div class="layui-form-item">
                <div class="layui-input-inline">
                  <select name="nid" lay-filter="nid" id="nid_val">
                    <option value="0">请选择</option>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['position']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                    <?php } ?>
                  </select>
                </div>
              </div>                               
            </td>
          </tr>
      			<tr><th>类别名称：</th><td><textarea  id='position' class="add_class_textarea" ></textarea>	</td></tr>

      			<tr class='variable'>
              <th>调用变量名：</th>
              <td>
                <textarea id='variable' class="add_class_textarea" ></textarea>
              </td>
            </tr> 

      			<tr><td colspan='2' align="center"><div class="add_class_div"><span class="admin_web_tip">说明：可以添加多条分类（请按回车Enter键换行，一行一个)</span></div></td></tr>
      			<tr><td colspan='2'  align="center"><input class="admin_examine_bth" type="button" value="添加 " onclick="save_class()"/></td></tr>
      		</table>
        </form>
	   </div>
	</div>
</div> 

<!--有变量名弹出框end-->
<!--弹出框-->
<div id="bname"  style="display:none;"> 
	<div  class="job_box_div">  
	   <div class="job_box_inp"><form class="layui-form">
	  <table cellspacing='1' cellpadding='1' class="admin_examine_table">
			<tr >  
            <th width="100">类别选择：</th>
            <td >
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input type="radio" name="btype" value="1" title="一级类别" >
                   <input type="radio" name="btype" value="2" title="二级类别" >
                 </div>
               </div>
            </div>
            </td>
            </tr>
		    <tr class='sclass_2 sclass_3  sclass'  style="display:none;">
            <th>一级分类：</th>
            <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <select name="keyid" lay-filter="" id="keyid_val">
                      <option value="">请选择</option>
                      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['position']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                      <?php } ?>
                    </select>
                 </div>
               </div>
            </div>
            </td></tr>		
			<tr><th>类别名称：</th><td><textarea  id='classname' class="add_class_textarea"></textarea></td></tr>
 			<tr><td colspan='2' align="center"><div class="add_class_div"><span class="admin_web_tip">说明：可以添加多条分类（请按回车键换行，一行一个）</span></div></td></tr>
 			<tr><td colspan='2' align="center"class='ui_content_wrap'><input class="layui-btn layui-btn-normal" type="button" value="添加 " onClick="save_bclass()"/></td></tr> 
		</table> </form>
	   </div>
	</div>
</div> 
<!--弹出框end-->
<?php echo '<script'; ?>
 type="text/javascript"> 
$(document).ready(function(){
	$(".imghide").hover(function(){
		$(this).find('.class_xg').show();
	},function(){
		$(this).find('.class_xg').hide();
	});
})

$(document).ready(function () {
    $('body').click(function (evt) {	    
		 if($(evt.target).parents("#keyid_name").length==0 && evt.target.id != "keyid_name") {
	       $('#keyid_select').hide();
	    }
	});
})

layui.use(['form'], function(){
  var form = layui.form
    ,$ = layui.$;

  form.on('radio(ctype)' ,function(data){
    if(data.value == 1){
      $(".variable").show();
      $(".sclass").hide();
    }
    else if(data.value == 2){
      $(".variable").hide();
      $(".sclass").show();
    }
  });
  
  $("input[name='btype']").each(function(){
		$(this).next().click(function(){
			var val = $(this).prev().val();  
			$(".sclass").hide(); 
			$(".sclass_"+val).show();
		});
	});
});
<?php echo '</script'; ?>
><?php }} ?>
