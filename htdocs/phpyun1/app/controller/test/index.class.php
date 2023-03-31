<?php

class index_controller extends common{
	
	function index_action(){
	   $this->yunset("resumeclassurl","唐胡子index_controller测试");
	   //$CacheM		=	$this->MODEL('cache');
           //$CacheList	=	$CacheM->GetCache(array('job','city','hy'));
          // $this->yunset($CacheList);
           $this->yunset(array('gettype'=>$_SERVER["QUERY_STRING"],'getinfo'=>$_GET));
           $this->seo("com");
	   $this->yun_tpl(array('index'));		
	}
	 
}
?>