<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-11-20 00:56:31
         compiled from "D:\rcw\uploads\app\template\wap\job\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:10544052075fb6a3bfce6386-40797053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39bd04d42aa12fceb83b2c45cd765ab175130020' => 
    array (
      0 => 'D:\\rcw\\uploads\\app\\template\\wap\\job\\index.htm',
      1 => 1579251954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10544052075fb6a3bfce6386-40797053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'job_style' => 0,
    'config' => 0,
    'job' => 0,
    'wlists' => 0,
    'comclass_name' => 0,
    'link' => 0,
    'j' => 0,
    'wlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fb6a3bfd214f4_03160318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb6a3bfd214f4_03160318')) {function content_5fb6a3bfd214f4_03160318($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\rcw\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
,wap" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="email=no">
	
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['job_style']->value;?>
/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['job_style']->value;?>
/css/jquery.fullPage.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
">
	
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['job_style']->value;?>
/js/jquery-1.8.3.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['job_style']->value;?>
/js/jquery.fullPage.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
>
		$(function(){
			$('#dowebok').fullpage({
				sectionsColor: ['#212a3f', '#4BBFC3', '#7BAABE', '#e6e9ee'],
				continuousVertical: true
			});
		});
	<?php echo '</script'; ?>
>
</head>

<body>

<div id="dowebok">
	<div class="section pageone ">
    	<section class="up"><img src="<?php echo $_smarty_tpl->tpl_vars['job_style']->value;?>
/images/btn01_arrow.png" /></section>
		<div class="dazzle1">
        	<ul>
            	<li class="daz_a1">
                	<div id="first">
						<svg id="svg-canvas" >
						    <path  class="a1_title" fill-opacity="0" stroke="#FFF" stroke-width="1.5" d="m 9.0683594,21.13001 c 5.0976466,1.104595 10.8984226,1.656841 17.4023436,1.656738 l 22.425293,0 6.587402,-6.618164 c 3.234321,2.387802 6.596134,4.73155 10.08545,7.03125 1.072203,0.76182 1.608336,1.689065 1.608398,2.781739 -6.2e-5,2.408299 -1.021058,3.6124 -3.062988,3.612304 l -7.417969,0 0,103.381343 c -5.2e-5,1.93359 0.08051,3.21972 0.241699,3.8584 0.207956,1.8662 0.311959,3.29296 0.312012,4.28028 -5.3e-5,3.9697 -1.940969,5.95456 -5.822754,5.95459 -3.328168,-3e-5 -4.992229,-1.20413 -4.992187,-3.61231 -4.2e-5,-2.06544 0.09078,-4.61573 0.272461,-7.65088 0.184528,-3.22266 0.276813,-6.0044 0.276855,-8.34521 l 0,-19.96436 c -1.394572,1.99807 -3.31498,3.69875 -5.76123,5.10205 -3.269565,2.00685 -6.539093,3.75734 -9.808594,5.25147 -2.903344,1.63184 -5.73049,2.97217 -8.481446,4.02099 -1.086931,3.5625 -2.296891,5.34375 -3.629882,5.34375 -1.412123,0 -4.1338,-4.49267 -8.165039,-13.47802 3.922841,-0.7705 6.726549,-1.40624 8.411132,-1.90723 l 0,-82.234863 c -2.405286,0.09092 -4.845713,0.230076 -7.321289,0.417481 z M 29.26123,109.50843 c 1.435521,-0.75585 3.874484,-1.89842 7.316895,-3.42774 3.339808,-1.35642 6.808555,-2.87546 10.40625,-4.55713 l 0,-18.98437 -17.723145,0 z m 0,-33.776369 17.723145,0 0,-20.904785 -17.723145,0 z m 0,-27.439453 17.723145,0 0,-18.698731 -17.723145,0 z m 35.371582,-22.060547 10.327149,4.412109 18.351562,0 0,-3.55957 c -8.8e-5,-4.8456 -0.137783,-8.991104 -0.413086,-12.436524 6.448148,0.586048 11.476953,1.592394 15.086423,3.019043 1.93349,0.829209 2.90029,1.946883 2.90039,3.353028 -1e-4,1.573344 -0.96983,2.566507 -2.90918,2.979492 -1.72275,0.864358 -3.37363,1.359475 -4.95263,1.485352 l 0,5.159179 20.34668,0 4.39013,-4.412109 c 6.02917,3.304783 9.04382,5.795015 9.04395,7.470703 -1.3e-4,1.415129 -1.33314,2.950284 -3.99902,4.605469 l 0,33.864258 c -1.3e-4,2.543019 -1.85755,4.114794 -5.57227,4.715332 -2.75989,4.8e-5 -4.13977,-0.790967 -4.13965,-2.373047 l 0,-2.039063 -48.748533,0 0,1.489746 c -7e-5,1.435597 -0.848214,2.507861 -2.544434,3.216797 -1.511784,0.53911 -2.833072,0.808641 -3.963867,0.808594 -2.135803,4.7e-5 -3.203673,-0.974073 -3.203614,-2.922363 z m 9.711915,39.708984 18.966796,0 0,-12.216797 -18.966796,0 z m 28.678713,0 20.06982,0 0,-12.216797 -20.06982,0 z M 74.344727,47.05335 l 18.966796,0 0,-9.874512 -18.966796,0 z m 28.678713,-9.874512 0,9.874512 20.06982,0 0,-9.874512 z M 54.846191,80.693487 c 5.097601,1.104535 10.898377,1.656781 17.402344,1.656738 l 54.549315,0 6.5874,-6.618164 c 4.3944,2.947312 7.8485,5.293989 10.36231,7.040039 1.16294,0.864299 1.74449,1.788615 1.74463,2.772949 -1.4e-4,2.31742 -1.06801,3.47611 -3.20362,3.476074 l -49.939449,0 -7.800293,12.216797 37.313962,0 4.11328,-3.862793 c 3.13172,1.491237 5.78455,3.124533 7.9585,4.899903 0.81139,0.81154 1.21715,1.62453 1.21729,2.43896 -1.4e-4,1.77834 -1.70228,3.42336 -5.10645,4.93506 -1.30969,7.66993 -2.84338,13.72852 -4.60107,18.17578 -1.35364,4.35644 -3.02356,7.5791 -5.00977,9.66797 -1.7257,2.20311 -3.39708,3.73094 -5.01416,4.5835 -1.7755,1.04588 -3.63292,1.86033 -5.57227,2.44336 -1.6876,0.5947 -3.66074,0.89207 -5.91943,0.89209 0.0907,-2.88869 -0.24326,-4.74318 -1.00195,-5.56348 -0.4044,-0.74122 -1.34776,-1.29786 -2.83008,-1.66992 -2.862398,-0.8965 -7.650967,-1.87941 -14.365723,-2.94873 l 0.900879,-4.76367 c 12.489163,2.11522 19.643454,3.17284 21.462894,3.17285 1.03407,-1e-5 1.87636,-0.10841 2.52685,-0.3252 0.54775,-0.18457 1.20107,-0.7002 1.95996,-1.54687 0.64736,-0.64454 1.56142,-2.06251 2.74219,-4.25391 1.17469,-2.34961 2.20155,-5.42138 3.08057,-9.21533 1.01941,-3.61229 1.70935,-7.12059 2.06982,-10.5249 l -40.719725,0 c -0.917067,0.36916 -1.765211,0.55373 -2.544434,0.55371 -3.143624,2e-5 -4.7154,-0.83641 -4.715332,-2.50928 -6.8e-5,-0.54783 0.1596,-1.06199 0.479004,-1.54248 0.990165,-1.17185 2.487234,-3.79978 4.491211,-7.883788 l 4.40332,-7.369629 -9.619629,0 c -6.29596,0.08793 -10.992244,0.272497 -14.088867,0.553711 z" />
						</svg>
					</div>
                </li>
                <li class="daz_a2">
                	<div class="daz_acon2">全力助您梦想起航</div>
                </li>
                <li class="daz_a3">
                	<div class="daz_acon3">
                    	！
                    </div>
                </li>
            </ul>
        </div>
	</div>
	
    <div class="section section_slide ">
    	<section class="up"><img src="<?php echo $_smarty_tpl->tpl_vars['job_style']->value;?>
/images/btn01_arrow.png" /></section>
        <div class="tem_tit">
        	<div class="tem_tit_con">
            	<h3 style="width:70%;"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'comapply','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['jobname'];?>
</a></h3>
            </div>
        </div>
       
    	<div class="slide slide01 ">
          
			<div class="shaft">
	        	<ul>
                 	<li class="shaft_con2">
                      	<div class="shaft_det4">职位信息</div>
                  	</li>
                  	<li class="shaft_con3">
	                  	<div class="shaft_det5">
	                    	<?php if ($_smarty_tpl->tpl_vars['job']->value['salary']) {?>
	                          	<span class="shaft_pay"> 月薪：<b> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_salary'];?>
 </b></span>
	                      	<?php }?>
	                     	<?php if ($_smarty_tpl->tpl_vars['job']->value['exp']) {?>
	                          	<span>经验：<?php echo $_smarty_tpl->tpl_vars['job']->value['job_exp'];?>
</span>
	                       	<?php }?>
	                        <?php if ($_smarty_tpl->tpl_vars['job']->value['edu']) {?>
	                          	<span>学历：<?php echo $_smarty_tpl->tpl_vars['job']->value['job_edu'];?>
</span>
	                       	<?php }?>
	                     	<?php if ($_smarty_tpl->tpl_vars['job']->value['report']) {?>
	                          	<span>  到岗：<?php echo $_smarty_tpl->tpl_vars['job']->value['job_report'];?>
 </span>
	                    	<?php }?>
	                   		<?php if ($_smarty_tpl->tpl_vars['job']->value['age']) {?>
	                          	<span> 年龄：<?php echo $_smarty_tpl->tpl_vars['job']->value['job_age'];?>
</span>
	                     	<?php }?>
	                     	
	                    	<?php if ($_smarty_tpl->tpl_vars['job']->value['sex']) {?>
	                          	<span>性别：<?php echo $_smarty_tpl->tpl_vars['job']->value['job_sex'];?>
</span>
	                      	<?php }?>
	                    	<?php if ($_smarty_tpl->tpl_vars['job']->value['number']) {?>
	                          	<span> 招聘：<?php echo $_smarty_tpl->tpl_vars['job']->value['job_number'];?>
 </span>
	                     	<?php }?>
	                   		<?php if ($_smarty_tpl->tpl_vars['job']->value['marriage']) {?>
	                          	<span>  婚姻：<?php echo $_smarty_tpl->tpl_vars['job']->value['job_marriage'];?>
</span>
	                     	<?php }?>
	                     	<?php if ($_smarty_tpl->tpl_vars['job']->value['provinceid']) {?>
	                          	<span class="shaft_pay">城市：<?php echo $_smarty_tpl->tpl_vars['job']->value['job_city_one'];?>
 - <?php echo $_smarty_tpl->tpl_vars['job']->value['job_city_two'];?>
 </span>
	                     	<?php }?>
	                 	</div>
	                 	<div class="shaft_language">
				          	<?php  $_smarty_tpl->tpl_vars['wlists'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlists']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job']->value['lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlists']->key => $_smarty_tpl->tpl_vars['wlists']->value) {
$_smarty_tpl->tpl_vars['wlists']->_loop = true;
?>
				      			<?php if ($_smarty_tpl->tpl_vars['wlists']->value) {?>                        
				          			<span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['wlists']->value];?>
</span>
				          		<?php }?> 
				          	<?php } ?>
	              		</div>
	                     
	           		</li>
              	</ul>
            </div>
            
            <div class="shaft_line">
        		<div class="shaft_line_det"></div>
        	</div>
        </div>
        
        <div class="slide slide02 ">
          
			<div class="shaft bid">
              	<ul>
                 	<li class="shaft_con2">
                      	<div class="shaft_det4">职位描述</div>   
                  	</li>
                  	<li class="bid_con3">
                      	<div class="bid_det3">
                          	<?php echo mb_substr($_smarty_tpl->tpl_vars['job']->value['description'],0,180,'utf-8');
if (strlen($_smarty_tpl->tpl_vars['job']->value['description'])>180) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'comapply','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" >更多</a><?php }?>
                      	</div>
                  	</li>
              	</ul>
			</div>
            <div class="shaft_line">
        		<div class="shaft_line_det"></div>
        	</div>
        </div>
        
		<div class="slide slide03 ">
			<div class="shaft app">
				<ul>
					<li class="shaft_con2"><div class="shaft_det4">联系方式</div></li>
					
					<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==9) {?>
						<li class="app_con1">
	                  		<div class="app_det1">
								<?php if ($_smarty_tpl->tpl_vars['job']->value['linkman']) {?>
	                    			<span>联  系 人：<?php echo $_smarty_tpl->tpl_vars['job']->value['linkman'];?>
 </span>
								<?php }?>
								
								<?php if ($_smarty_tpl->tpl_vars['job']->value['linkphone']) {?>
									<span> 联系电话：<?php echo $_smarty_tpl->tpl_vars['job']->value['linkphone'];?>
</span>
								<?php }?>
								
								<?php if ($_smarty_tpl->tpl_vars['job']->value['linktel']) {?>
									<span> 联系手机：<?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
</span>
								<?php }?>
							</div>
						</li>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['link']->value['errorcode']==1||$_smarty_tpl->tpl_vars['link']->value['errorcode']==2||$_smarty_tpl->tpl_vars['link']->value['errorcode']==5||$_smarty_tpl->tpl_vars['link']->value['errorcode']==6) {?>
							<li class="app_con1">
		                  		<div class="app_det1"> 
		                    		<span><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</span> 
								</div>
							</li>
						<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']==3) {?>
							<li class="app_con1">	
								<div class="app_det1"><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</div>
								<div class="app_det1">
									<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="app_det1_aa">登录</a> 
									<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usrtype'=>1),$_smarty_tpl);?>
"  class="app_det1_bb">注册</a>
								</div>
							</li>
						<?php } elseif ($_smarty_tpl->tpl_vars['link']->value['errorcode']==4) {?>
							<li class="app_con1">	
								<div class="app_det1"><?php echo $_smarty_tpl->tpl_vars['link']->value['msg'];?>
</div>
								<div class="app_det1">
									<a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
member/index.php?c=addresume" class="app_det1_aa">创建简历</a> 
								</div>
							</li>
						<?php }?>
					<?php }?>
					<li class="app_con2">
	                  	<div class="app_det2">
	                    	联系我时请说明是在<b><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</b>上看到的
	                        <i></i>
	                    </div>
					</li>
				</ul>
			</div>
            <div class="shaft_line">
        		<div class="shaft_line_det"></div>
        	</div>          
        </div>
        <div class="slide slide04 ">
          
          <div class="shaft">
              <ul>
                  <li class="shaft_con2">
                      <div class="shaft_det4">公司简介</div>
                  </li>
                  <li class="shaft_con3">
                      <div class="shaft_det6">
                         <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
</a>
                      </div>
                      <div class="shaft_det5 shaft_det7">
                        <?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['job']->value['content']),0,220,'utf-8');?>

                        <?php if (strlen($_smarty_tpl->tpl_vars['job']->value['content'])>220) {?><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
" >更多</a><?php }?>
                       </div>
                  </li>
                  
              </ul>
            </div>
            <div class="shaft_line">
        		<div class="shaft_line_det"></div>
        	</div>       
        </div>    
        
        <div class="slip">
        	<span>&lt;</span>
            <span>向</span>
            <span>左</span>
            <span>滑</span>
            <span>动</span>
        </div>
             
    </div>
    <div class="section pagefour ">
    	<section class="up"><img src="<?php echo $_smarty_tpl->tpl_vars['job_style']->value;?>
/images/btn01_arrow.png" /></section>
        <div class="dazzle4">
        	<ul>
          <?php if ($_smarty_tpl->tpl_vars['job']->value['arraywelfare']) {?>
            <?php  $_smarty_tpl->tpl_vars['wlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlist']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job']->value['arraywelfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlist']->key => $_smarty_tpl->tpl_vars['wlist']->value) {
$_smarty_tpl->tpl_vars['wlist']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['wlist']->key;
?>
            	<li class="daz_f1 daz_f<?php echo 1+$_smarty_tpl->tpl_vars['j']->value++;?>
">
                	<div class="daz_fcon1 daz_fcon<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
">
                    	<div class="daz_fdet1 daz_fdet<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wlist']->value;?>
</div>
                    </div>
                </li>
                <?php } ?>
                <?php } else { ?>
                <li class="daz_f1">
                	<div class="daz_fcon1">
                    	<div class="daz_fdet1">无福利待遇</div>
                    </div>
                </li>
                <?php }?>
                <li class="daz_g3">
                	<div class="daz_gcon3">
                    	
                    </div>
                </li>
                <li class="daz_g4">
                	<div class="daz_gcon4">
                    	<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'comapply','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
">申请此职位</a>
                    </div>
                </li>
            </ul>
        </div>		
	</div>
    
	<div class="section section_gift ">
    	<section class="up"><img src="<?php echo $_smarty_tpl->tpl_vars['job_style']->value;?>
/images/btn01_arrow.png" /></section>
       	<div class="section_gift_t_touch"><div class="section_gift_t_touch_t">联系方式</div>Contact Information</div>
	  	<ul class="section_touch_ul">
			<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
#tel">查看联系方式</a></li>
			<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
#job">查看该公司其他职位</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
">查看<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</a></li>
		</ul>
	</div>
</div>
    
    
<!--微信分享专用---->
<div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_ossurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
"></div>
</body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/nativeshare.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html><?php }} ?>
