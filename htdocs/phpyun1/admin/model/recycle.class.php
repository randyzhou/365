<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2019 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class recycle_controller extends adminCommon{
	function set_search(){
		$lo_time=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'半月之内','30'=>'一个月之内','90'=>'三个月之内','180'=>'半年之内');
		$search_list[]=array("param"=>"ctime","name"=>'删除时间',"value"=>$lo_time);
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$recycleM		=	$this -> MODEL('recycle');
		
		$this->set_search();
		
		extract($_GET);

		if (trim($keyword)){
			if ($type=='1')
			{
				$where['username']	=	array('like',$keyword);
			}elseif ($type=='2')
			{
				$where['body']		=	array('like',$keyword);
			}elseif ($type=='3')
			{
				$where['tablename']	=	$keyword;
			}
			$urlarr['type']			=	$type;
			$urlarr['keyword']		=	$keyword;
		}
		if($_GET['ctime']){
			if($_GET['ctime']=='1')
			{
				$where['ctime']		=	array('>=',strtotime(date("Y-m-d 00:00:00")));
			}else
			{
				$where['ctime']		=	array('>=',strtotime('-'.(int)$_GET['ctime'].'day'));
			}
			$urlarr['ctime']		=	$_GET['ctime'];
		}
		if($_GET['time']){
			$time=@explode('~',$_GET['time']);
			
			$where['ctime'][]		=	array('>=',strtotime($time[0]."00:00:00"));
			
			$where['ctime'][]		=	array('<=',strtotime($time[1]."23:59:59"));
			$urlarr['time']			=	$_GET['time'];
		}
		
		$urlarr['page']	=	"{{page}}";
		
		$pageurl		=	Url($_GET['m'],$urlarr,'admin');
		
		$pageM			=	$this  -> MODEL('page');
		$pages			=	$pageM -> pageList('recycle',$where,$pageurl,$_GET['page'],$this->config['sy_listnum']);
		
		if($pages['total'] > 0){
			
			//limit order 只有在列表查询时才需要
			if($_GET['order'])
			{
				$where['orderby']		=	$_GET['t'].','.$_GET['order'];
				$urlarr['order']		=	$_GET['order'];
				$urlarr['t']			=	$_GET['t'];
			}else{
				$where['orderby']		=	'id';
			}
			$where['limit']	=	$pages['limit'];
			
			$List	=	$recycleM -> getList($where);
			
			$this->yunset("rows" , $List);
		}
		$this->yunset("get_type", $_GET);
		
		$this->yuntpl(array('admin/admin_recycle'));
	}
	function show_action(){
		$recycleM	=	$this -> MODEL('recycle');
		
		$rows		=	$recycleM -> getInfo(array('id'=>$_GET['id']));
		
		$this->yunset("rows",unserialize($rows[body]));
		
		$this->yuntpl(array('admin/admin_recycle_show'));
	}
	function recover_action(){
		
		$recycleM	=	$this -> MODEL('recycle');
				
 		if($_GET['id']){
			
			
			$return	=	$recycleM -> recoverTb(array('id' => $_GET['id']));
 
			$this -> layer_msg($return['msg'],$return['errcode'],0,$_SERVER['HTTP_REFERER']);
		}
	}
	function del_action()
    {
        $recycleM   =   $this->MODEL('recycle');
        
        $this->check_token();
        
        if ($_GET['id'] == "alldel") {
        
            $this->db->Query("TRUNCATE `" . $this->def . "recycle`");
            $this->layer_msg("已清空回收站！", 9, 0, $_SERVER['HTTP_REFERER']);
        } else if ($_GET['del']) {
            
            $del    =   $_GET['del'];
            if (is_array($del)) {
                
                $where['id']    =   array('in', pylode(',', $del));
                $return         =   $recycleM->delRecycle($where);

                $this->layer_msg($return['msg'], $return['errcode'], 1, $_SERVER['HTTP_REFERER']);
            } else {
                
                $this->layer_msg('请选择您要删除的信息！', 8, 1, $_SERVER['HTTP_REFERER']);
            }
        } else if ($_GET['id']) {
            
            $result =   $recycleM->delRecycle(array('id' => $_GET['id']));
            
            $this -> layer_msg($result['msg'], $result['errcode'], 0, $_SERVER['HTTP_REFERER']);

        } else if ($_GET['time']) {
            
            $result =   $recycleM->delRecycle(array('ctime' => strtotime($_GET['time'])));
            $this->layer_msg($return['msg'], $return['errcode'], 0, $_SERVER['HTTP_REFERER']);
        } else {
            
            $this->layer_msg('非法操作！', 8, 0, $_SERVER['HTTP_REFERER']);
        }
    }
}
?>