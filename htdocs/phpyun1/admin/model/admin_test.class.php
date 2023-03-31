<?php

class admin_test_controller extends adminCommon{

	
    function index_action(){
	$testM    =   $this -> MODEL('test');        
        $where  =   $urlarr =   array();
        if($_GET['keyword']){
            $where['name']    =  array('like',$keyword);
        }
	$List	=	$testM -> getList($where,array('cache'=>1,'utype'=>'admin'));
	$CacheList    =   $List['cache'];
	session_start();
	$_SESSION['resumeXls'] = $where;
        
        $this -> yunset(array('rows'=>$List['list'],'userdata'=>$CacheList['userdata'],'userclass_name'=>$CacheList['userclass_name']));
	$this->yuntpl(array('test'));
    }
	

}
?>