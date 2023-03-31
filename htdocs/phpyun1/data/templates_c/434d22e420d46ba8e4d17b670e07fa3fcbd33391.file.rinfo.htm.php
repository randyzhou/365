<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-11 15:25:39
         compiled from "D:\rcw\uploads\app\template\wap\member\user\rinfo.htm" */ ?>
<?php /*%%SmartyHeaderCode:5754983295fab91f350a160-56848671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '434d22e420d46ba8e4d17b670e07fa3fcbd33391' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\member\\user\\rinfo.htm',
      1 => 1576479743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5754983295fab91f350a160-56848671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'rows' => 0,
    'v' => 0,
    'eid' => 0,
    'fr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fab91f355a4a0_76796646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fab91f355a4a0_76796646')) {function content_5fab91f355a4a0_76796646($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<style>
    .resume-cont_wate_list dd {
        padding-left: 0px;
    }
    
    .resume_xg_a {
        padding: 5px 30px;
        display: inline-block;
        color: #fff;
    }
</style>
<?php if ($_smarty_tpl->tpl_vars['type']->value=='skill') {?>

<div class="resume-cont">

    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <div class="add_resume_box">
        <ul class="add_resume_list">
            <li><span class="add_resume_list_name">技能名称：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</dd>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['longtime']) {?>
            <li><span class="add_resume_list_name">掌握时间：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['longtime'];?>
年</li>
            <?php }?>
			<li><span class="add_resume_list_name">熟练程度：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['ing_n'];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['pic']) {?>
            <li><span class="add_resume_list_name">技能证书：</span>
            <div class="add_resume_img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"></div></li>
            <?php }?>
        </ul>

        <div class="add_resume_cz">
            <a class="add_resume_cz_bth add_resume_cz_bth_line" href="index.php?c=addresumeson&type=skill&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
            
			<a class="add_resume_cz_bth" href="javascript:void(0);" onclick="layer_del('确定删除技能证书?','index.php?c=delResumeFb&type=skill&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a>
        </div>

    </div>
    <?php } ?>

    <div class="add_resume_tjbth">
        <a class="add_resume_tj" href="index.php?c=addresumeson&type=skill&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">+ 添加职业技能</a>
    </div>
    <div class="add_resume_cz_fh">
        <a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">完成并返回 >></a>
    </div>

</div>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='work') {?>
<div class="resume-cont">

    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <div class="add_resume_box">
        <ul class="add_resume_list">
            <li><span class="add_resume_list_name">单位名称：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
            <li><span class="add_resume_list_name">工作时间：</span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['sdate'],"%Y-%m");?>
 至 <?php if ($_smarty_tpl->tpl_vars['v']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></li>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['title']) {?>
            <li><span class="add_resume_list_name">担任职位：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
            <?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value['content']) {?>
            <li><span class="add_resume_list_name">工作内容：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</li>
            <?php }?>
        </ul>
        <div class="add_resume_cz">
            <a class="add_resume_cz_bth add_resume_cz_bth_line" href="index.php?c=addresumeson&type=work&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
            <a class="add_resume_cz_bth" href="javascript:void(0);" onclick="layer_del('删除此份工作经历？','index.php?c=delResumeFb&type=work&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a>
        </div>
    </div>
    <?php } ?>
    <div class="add_resume_tjbth">
        <a class="add_resume_tj" href="index.php?c=addresumeson&type=work&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">+ 添加工作经历</a>

        <div class="add_resume_cz_fh">
            <a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">完成并返回>></a>
        </div>
    </div>

</div>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='project') {?>
<div class="resume-cont">

    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <div class="add_resume_box">
        <ul class="add_resume_list">
            <li><span class="add_resume_list_name">项目名称：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['title']) {?>
            <li><span class="add_resume_list_name">担任职位：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
            <?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value['content']) {?>
            <li><span class="add_resume_list_name">项目内容：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</li>
            <?php }?>
            <li><span class="add_resume_list_name">项目时间：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['sdate_n'];?>
 至 <?php echo $_smarty_tpl->tpl_vars['v']->value['edate_n'];?>
</li>
        </ul>
        <div class="add_resume_cz">
            <a class="add_resume_cz_bth add_resume_cz_bth_line" href="index.php?c=addresumeson&type=project&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
            <a class="add_resume_cz_bth" href="javascript:void(0);" onclick="layer_del('删除此份项目经历？','index.php?c=delResumeFb&type=project&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a>
        </div>
    </div>
    <?php } ?>

    <div class="add_resume_tjbth">
        <a class="add_resume_tj" href="index.php?c=addresumeson&type=project&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">+ 添加项目经历</a>
    </div>
    <div class="add_resume_cz_fh">
        <a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">完成并返回>></a>
    </div>

</div>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='training') {?>
<div class="resume-cont">

    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <div class="add_resume_box">
        <ul class="add_resume_list">
            <li><span class="add_resume_list_name">培训中心：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
            <li><span class="add_resume_list_name">培训时间：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['sdate_n'];?>
 至 <?php echo $_smarty_tpl->tpl_vars['v']->value['edate_n'];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['title']) {?>
            <li><span class="add_resume_list_name">培训方向：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 </li>
            <?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value['content']) {?>
            <li><span class="add_resume_list_name">培训描述：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</li>
            <?php }?>
        </ul>
        <div class="add_resume_cz">
            <a class="add_resume_cz_bth add_resume_cz_bth_line" href="index.php?c=addresumeson&type=training&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
            <a class="add_resume_cz_bth" href="javascript:void(0);" onclick="layer_del('删除次份培训经历？','index.php?c=delResumeFb&type=training&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a>
        </div>
    </div>
    <?php } ?>

    <div class="add_resume_tjbth">
        <a class="add_resume_tj" href="index.php?c=addresumeson&type=training&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">+ 添加培训经历</a>
    </div>
    <div class="add_resume_cz_fh">
        <a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">完成并返回>></a>
    </div>

</div>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='edu') {?>
<div class="resume-cont">

    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <div class="add_resume_box">
        <ul class="add_resume_list">
            <li><span class="add_resume_list_name">学校名称：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
            <li><span class="add_resume_list_name">在校时间：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['sdate_n'];?>
 至 <?php echo $_smarty_tpl->tpl_vars['v']->value['edate_n'];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['specialty']) {?>
            <li><span class="add_resume_list_name">所学专业：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['specialty'];?>
</li>
            <?php }?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['education_n']) {?>
            <li><span class="add_resume_list_name">最高学历：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['education_n'];?>
</li>
            <?php }?>
        </ul>
        <div class="add_resume_cz">
            <a class=" add_resume_cz_bth add_resume_cz_bth_line" href="index.php?c=addresumeson&type=edu&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
            <a class="add_resume_cz_bth" href="javascript:void(0);" onclick="layer_del('删除次份教育经历？','index.php?c=delResumeFb&type=edu&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a>
        </div>
    </div>
    <?php } ?>

    <div class="add_resume_tjbth">
        <a class="add_resume_tj" href="index.php?c=addresumeson&type=edu&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">+ 添加教育经历</a>
    </div>
    <div class="add_resume_cz_fh">
        <a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">完成并返回>></a>
    </div>

</div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='other') {?>
<div class="resume-cont">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <div class="add_resume_box">
        <ul class="add_resume_list">
            <li><span class="add_resume_list_name">其他标题：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['content']) {?><li><span class="add_resume_list_name">其他描述：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</li><?php }?>
        </ul>

        <div class="add_resume_cz">
            <a class="add_resume_cz_bth add_resume_cz_bth_line" href="index.php?c=addresumeson&type=other&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
            <a class="add_resume_cz_bth" href="javascript:void(0);" onclick="layer_del('确定删除其他描述信息？','index.php?c=delResumeFb&type=other&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a>
        </div>
    </div>
    <?php } ?>
    <div class="add_resume_tjbth">
        <a class="add_resume_tj" href="index.php?c=addresumeson&type=other&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">+ 添加其他信息</a>
    </div>
    <div class="add_resume_cz_fh">
        <a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">完成并返回>></a>
    </div>

</div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='show') {?>
<div class="resume-cont">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <div class="add_resume_box">
        <ul class="add_resume_list">
            <li><span class="add_resume_list_name">作品标题：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
            <li><span class="add_resume_list_name">作品排序：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['picurl']) {?>
            <li><span class="add_resume_list_name">作品图片：</span>
             <div class="add_resume_img"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"></div></li>
            <?php }?>
        </ul>

        <div class="add_resume_cz">
            <a class="add_resume_cz_bth add_resume_cz_bth_line" href="index.php?c=addresumeson&type=show&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
            <a class="add_resume_cz_bth" href="javascript:void(0);" onclick="layer_del('确定删除此作品？','index.php?c=delResumeFb&type=show&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a>
        </div>
    </div>
    <?php } ?>
    <div class="add_resume_tjbth">
        <a class="add_resume_tj" href="index.php?c=addresumeson&type=show&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">+ 添加作品</a>
    </div>
    <div class="add_resume_cz_fh">
        <a href="index.php?c=resume&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;
if ($_smarty_tpl->tpl_vars['fr']->value=='1') {?>&fr=1<?php }?>">完成并返回>></a>
    </div>

</div>
<?php }?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
