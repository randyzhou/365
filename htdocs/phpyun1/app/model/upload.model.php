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

/**
注意设置网站服务器的php.ini以下两项为合适的值：
（一般通过现在的手机手机拍照，照片大小都好几兆，可能大于2M）

upload_max_filesize = 8m ; 允许上传文件大小的最大值。默认为2M
post_max_size = 8m ; 通过表单POST给PHP的所能接收的最大值，包括表单里的所有值。默认为8M

*/
class upload_model extends model{
	private $watermark = 1;
    /**
     * 5.0 新上传类
     * @param file/上传文件 ;  dir/上传路径;  type/上传用途(logo表示头像);  base/base4图片;  preview/pc预览即上传; 
     * thumb缩率图参数数组，包含width，height，newNamePre，addpreview ;
     * watermark :本类私有属性watermark设置
     */
    function newUpload($data = array('file'=>null,'dir'=>null,'type'=>null,'base'=>null,'preview'=>null,'thumb'=>array(),'watermark'=>1)){
        
        $return  =  array();
        if(isset($data['watermark'])){
        	$this->watermark	=	$data['watermark'];
        }

        if (isset($this->config['sy_oss']) && $this->config['sy_oss'] == 1){
            
            $thumb  =  array();
            
            if ($data['dir'] == 'logo'){
                
                $dir  =  'data/logo';
            }else{
                $dir  =  'data/upload/'.$data['dir'];
            }
            if ($data['type'] == 'logo' && $data['file']){
                
                $imginfo  =  getimagesize($data['file']['tmp_name']);
                
                
                if($imginfo[0]>300 || $imginfo[1]>300){
                    $thumb['crop']  =  300;
                }
            }
            $upload  =  $this -> ossUpload();
            
            if ($data['file']){
                
                $return  =  $upload->uploadImg($data['file'], $dir, $thumb);
                
            }elseif ($data['base']){
                
                $return  =  $upload->imageBase($data['base'], $dir, APP_PATH);
            }
            
        }else {
            
            if ($data['dir'] == 'logo'){
                
                $dir  =  APP_PATH.'data/logo/';
                
            }else{
                
                $dir  =  APP_PATH.'data/upload/'.$data['dir'].'/';
            }
            
            $upload  =  $this -> Upload_pic($dir);
            
            if ($data['base']){
                
                $pic  =  $upload -> imageBase($data['base']);
                
                
            }else{
                
                $pic  =  $upload -> picture($data['file']);
            }
            
            
            $picmsg  =  $this->picmsg($pic);
            
            if(!empty($picmsg['msg'])){
                
                $return['msg']  =  '上传失败：'.$picmsg['msg'];
                
            }else {
                
                if ($data['type'] == 'logo'){
                    
                    $imginfo  =  getimagesize($pic);
                    
                    if($imginfo['width']>300 || $imginfo['height']>300){
                        
                        $return['picurl']  =  $upload -> makeThumb($pic, 300, 300, '_S_', true);
                        
                    }else{
                        
                        $return['picurl']  =  $pic;
                    }
                }else{
                    if($data['type'] == 'thumb'){

                    	$return['picurl']  =  $upload -> makeThumb(
                    		$pic, 
                    		$data['thumb']['width'], 
                    		$data['thumb']['height'],
                    		$data['thumb']['newNamePre'], 
                    		$data['thumb']['addpreview']
                    	);

                    }elseif($data['type'] == 'news'){
                    	
						$return['picurl']  =  $pic;
						$return['thumburl']=$upload->news_makeThumb($pic,200,133,'_S_');
                    }else{
                    	$return['picurl']  =  $pic;
                    }
                }
                if ($data['dir'] == 'logo'){
                    
                    $return['picurl']  = str_replace(APP_PATH.'data', 'data', $return['picurl']);
                    
                }else{
                    
                    $return['picurl']  = str_replace(APP_PATH.'data', './data', $return['picurl']);
                    
                    if($return['thumburl']){
                        
                        $return['thumburl']  = str_replace(APP_PATH.'data', './data', $return['thumburl']);
                        
                    }
                }
            }
        }
        return $return;
    }
    
 	function ossUpload()
 	{
 	    include_once(LIB_PATH.'oss/ossupload.class.php');
 	    
 	    $paras   =  $this->paras();
 	    
 	    $upload  =  new ossUpload($paras);
 	    
 	    return $upload;
 	}
	
    function Upload_pic($dir='',$water='',$size='',$destination_folder='')
    {
		
		include_once(LIB_PATH.'upload.class.php');
   		
		$paras   =  $this->paras(array('dir'=>$dir,'destination_folder'=>$destination_folder));

		
        if($this->watermark=='1' && $this->config['is_watermark']==1){
        	$paras['addwatermark']  =  true;
        	$paras['position']  	=  $this->config['wmark_position'] ? $this->config['wmark_position'] : 1;
        	
        	$paras['waterimg']  	=  APP_PATH.$this->config['sy_watermark'];
        	
        }else{
        	$paras['addwatermark']  =  false;
        }
		
		$upload  =  new Upload($paras);
		
		return $upload;
	}
	
    private function paras($data = array())
    {
        
        if (isset($data['dir'])){
            
            $paras['upfiledir']  =  $data['dir'];
        }
        
        
        if($this->config['pic_maxsize']){
            $paras['maxsize']   =  (int)$this->config['pic_maxsize']*1024;
        }else{
            $paras['maxsize']   =  5*1024;
        }
        
        if($this->config['pic_type']){
            $paras['pic_type']  =  explode(',',str_replace(' ','',$this->config['pic_type']));
        }else{
            $paras['pic_type']  =  array('jpg','png','jpeg','bmp','gif');
        }
        
        $paras['is_picself']    =  $this->config['is_picself'];
        
        
        if($this->config['is_picthumb']==1){
            $paras['addpreview']  =  true;
        }else{
            $paras['addpreview']  =  false;
        }
        
        
        
        if(isset($data['destination_folder']) && $data['destination_folder']!=''){
            
            $paras['destination_folder']  =  $data['destination_folder'];
        }
        return $paras;
    }
    
 	function picmsg($status){

		$error = array('1'=>'文件太大','2'=>'文件类型不符','3'=>'同名文件已经存在','4'=>'移动文件出错,请检查upload目录权限','6'=>'非法文件，无法上传');

		if(isset($error[$status])){

		    $data['status']  =  $status;
		    $data['msg']     =  $error[$status];
		    return $data;
		    
		}else{

			return true;
		}
	}
	/**
	 * pc预览直接上传、保存图片
	 */
	function layUpload($data = array())
	{
	    $upArr  =  array(
	        'file' 		=>  $data['file'],
	        'dir'  		=>  $data['path'],
	    );
	    
	    if (!empty($data['uid']) && !empty($data['usertype']) && !empty($data['imgid'])){
	    	
	        if ($data['usertype'] == 1){
	            
	            require_once ('resume.model.php');
	            
	            $resumeM  =  new resume_model($this->db, $this->def);
	            
	            if ($data['imgid'] == 'logo'){
	                
	                $result  =  $resumeM -> upPhoto(array('uid'=>$data['uid']),array('photo'=>$data['file'],'utype'=>'user','preview'=>1));
	            }
	            
	            if ($data['imgid'] == 'ewm'){
	                
	                $result  =  $resumeM -> upEwm(array('uid'=>$data['uid']),array('photo'=>$data['file'],'utype'=>'user','preview'=>1));
	            }
	        }
	        
	        if ($data['usertype'] == 2){
	            
	            require_once ('company.model.php');
	            
	            $companyM  =  new company_model($this->db, $this->def);
	            
	            if ($data['imgid'] == 'logo'){
	                
	                $result  =  $companyM -> upLogo(array('uid'=>$data['uid']),array('photo'=>$data['file'],'utype'=>'user','preview'=>1));
	            }
	            
	            elseif ($data['imgid'] == 'ewm'){
	                
	                $result  =  $companyM -> upEwm(array('uid'=>$data['uid']),array('photo'=>$data['file'],'utype'=>'user','preview'=>1));
	            }
	        }
	         
		}elseif (!empty($data['name']) && (isset($data['path']) && $data['path'] == 'logo')){

	    	if($data['name']=='sy_watermark'){
	    		$this->watermark = 0;
	    	}
	        
	        $result  =  $this->newUpload($upArr);
	        
	        $pic  =  $result['picurl'];
	        
	        $result['picurl']     =  checkpic($pic);
	        $post[$data['name']]  =  $pic;
	        
	        require_once ('config.model.php');
	        
	        $configM  =  new config_model($this->db, $this->def);
	        
	        $configM->setConfig($post);
	        
	    }
	    
	    if (!empty($result['status']) || (isset($result['errcode']) && $result['errcode'] == 8)){
	        $return  =  array(
	            'code'  =>  1,
	            'msg'   =>  $result['msg'],
	            'data'  =>  array()
	        );
	    }else{
            
	        $return = array(
	            'code' => 0,
	            'msg'  => $result['msg'],
	            'data' => array('url'=>$result['picurl'])
	        );
	    }
	    return $return;
	}
	
	public function thumb($dir)
	{
	    if (isset($this->config['sy_oss']) && $this->config['sy_oss'] == 1){
	        
	        
	        if($dir){
	            
	            $data['dir']   =   'data/upload/'.$dir;
	        }
	        
	        $upload  =  $this -> ossUpload();
	        
	        if(isset($_POST['x']) && isset($_POST['y'])){
	            
	            $pictures  =  $upload -> cutPic($_POST['img1'],$data['dir'],$_POST['x'],$_POST['y'],$_POST['width'],$_POST['height'],$_POST['scale']);
	            
	            $thumb[1]  =  $pictures['picurl'];
	            
	        }else{
	            
	            $thumb[1]  =  '../data/upload/'.$dir.'/'.date('Ymd').'/'.end(explode('/',$_POST['img1']));
	        }
	        
	       
	    }else{
	    	
	        include LIB_PATH.'sizer.class.php';
	        
	        $sizer	  =	 new Sizer('../data/upload/'.$dir.'/'.date('Ymd').'/', $this->config['sy_ossurl']);
	        $thumb    =  $sizer -> sizeIt();
	    }
	    return $thumb;
	}
	/**
	 * 5.0 新上传文档类
	 * @param file/上传文件 ;  dir/上传路径; 
	 * thumb缩率图参数数组，包含width，height，newNamePre，addpreview
	 */
	public function uploadDoc($data = array('file'=>null,'dir'=>null))
	{
	    
	    $return  =  array();
	    
	    $dir     =  'data/upload/'.$data['dir'];
	    
	    if (isset($this->config['sy_oss']) && $this->config['sy_oss'] == 1){
	        
	        $upload  =  $this -> ossUpload();
	        
	        $return  =  $upload -> uploadDoc($data['file'],$dir);
	        
	    }else{
	        
	        if(!is_dir(APP_PATH.$dir.'/'.date('Ymd'))){
	            
	            mkdir(APP_PATH.$dir.'/'.date('Ymd'),0777,true);
	            
	        }
	        $nametype  =  @explode('.',$data['file']['name']);
	        
	        $upload    =  $dir.'/'.date('Ymd').'/'.time().rand(1000,9999).'.'.strtolower(end($nametype));
	        
	        $pathname  =  APP_PATH.$upload;
	        
	        $result  =  move_uploaded_file($data['file']['tmp_name'],$pathname);
	        
	        if ($result){
	            
	            $return['docurl']  =  '/'.$upload;
	            
	        }else{
	            $return['msg']     =  '移动文件失败';
	        }
	    }
	    return $return;
	}
}
?>