<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2019 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class msgconfig_controller extends adminCommon{
	function index_action(){
		
		$this->yuntpl(array('admin/admin_msg_config'));
		
	}
	
	//保存
	function save_action(){
		
		$configM	=	$this->MODEL('config');
		
 		if($_POST['config']){
			
			unset($_POST['config']);
			
			$configM->setConfig($_POST);
			
			$this->web_config();
			
			$this->ACT_layer_msg( "短信配置设置成功！",9,1,2,1);
		
		}
	}
	
	//短信模板列表
	function tpl_action(){
		
		$this->yuntpl(array('admin/admin_msg_tpl'));
		
	}
	
	//短信模板设置
	function settpl_action(){
		
		include(CONFIG_PATH."db.tpl.php");
		
		$this->yunset("arr_tpl",$arr_tpl);
		
		$templatesM	=	$this->MODEL("templates");
		
		if($_POST['config']){
			
			$configNum	=	$templatesM->getNum(array('name'=>trim($_POST['name'])));
				
			$content	= 	str_replace("amp;nbsp;","nbsp;",$_POST['content']);
			
			if($configNum>0){
				
				$templatesM->upInfo(array('name'=>trim($_POST['name'])),array('content'=>$content,'title'=>trim($_POST['title'])));
				
			}else{
				
				$templatesM->addInfo(array('name'=>trim($_POST['name']),'content'=>$content,'title'=>trim($_POST['title'])));
			
			}
			
			$this->ACT_layer_msg( "短信模版配置设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
			
		}
		
		$row	=	$templatesM->getInfo(array('name'=>$_GET['name']));
		
		$this->yunset("row",$row);
		
		$this->yuntpl(array('admin/admin_settpl'));
		
	}
	
	function get_restnum_action(){
		
	    $msguser	=	trim($_POST['msguser']);
	    $url		=	'http://msg.phpyun.com/restnumnew.php';
	    $url		.=	'?msguser='.iconv('utf-8','gbk',$msguser).'';
		
	    if (extension_loaded('curl')){
			
	        $file_contents 	= 	CurlGet($url);
			
	    }else if(function_exists('file_get_contents')){
			
	        $file_contents 	= 	file_get_contents($url);
			
	    }
		
	    echo $file_contents;die;
	}
}

?>