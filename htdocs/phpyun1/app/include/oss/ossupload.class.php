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

require_once 'autoload.php';
require_once 'Config.php';

use OSS\OssClient;
use OSS\Core\OssException;


class ossUpload {
	
	const endpoint = Config::OSS_ENDPOINT;  
    const accessKeyId = Config::OSS_ACCESS_ID; 
    const accessKeySecret = Config::OSS_ACCESS_KEY; 
    const bucket = Config::OSS_TEST_BUCKET;  
	const userdomain = Config::OSS_USERDOMAIN;  
	
	private $ossClient;
	private $maxsize;
	private $pic_type;
	private $is_picself;
	private $is_picthumb;
		
	
	function __construct($paras = array()){
		
	    $this->maxsize      =  $paras['maxsize'];       
	    $this->pic_type     =  $paras['pic_type'];      
	    $this->is_picself   =  $paras['is_picself'];    
	    $this->is_picthumb  =  $paras['is_picthumb'];   
		$this->ossClient    =  new OssClient(self::accessKeyId, self::accessKeySecret, self::endpoint, false);
	}
	 
	public function uploadImg($file,$dir='img',$thumb=array()){
		
		$imgType=end(@explode('.',$file['name']));
		if(!$file['tmp_name']){

			$returnMsg['msg'] = '未找到相关图片';

		}elseif(!in_array(strtolower($imgType),$this->pic_type)){
			
			$returnMsg['msg'] = '上传文件类型不符';
		
		}elseif($file['size'] > $this->maxsize * 1024){ 
			
			$returnMsg['msg'] = '上传图片太大';
		
		}else{
			if($dir){
				$dir.='/'.date('Ymd').'/';
			} 

			$newImgName =time().rand(1000,9999).'.'.$imgType;
			
			$object = $dir.$newImgName; 
			
			$filePath = $file['tmp_name']; 
			
			try {
			    $this->ossClient->uploadFile(self::bucket, $object, $filePath);
			    if(!empty($thumb['crop'])){
			        $picurl = '/'.$object.'?x-oss-process=image/resize,l_'.$thumb['crop'];
    			    $picInfo = curlPost(self::userdomain.$picurl);
    			    
    			    
    			    $newImgName =time().rand(1000,9999).'.'.$imgType;
    			    
    			    $Newobject = $dir.$newImgName; 
    			    
    			    $this->ossClient->putObject(self::bucket, $Newobject, $picInfo);
    			    
    			    $this->delObject($object);
    			    
    			    $object  =  $Newobject;
				}
				if (strpos($dir, 'logo') !== false){
				    $returnMsg['picurl'] = $object;
				}else{
				    $returnMsg['picurl'] = './'.$object;
				}
				return $returnMsg;

			} catch (OssException $e) {
				$returnMsg['msg'] = $e->getMessage();
			}
		}
		return $returnMsg;
	}

 
	public function uploadDoc($file,$dir='doc'){

		$upTypes=array('doc','docx','rar','zip','txt','xls');
		
		$docType=end(@explode('.',$file['name']));
		if(!$file['tmp_name']){

			$returnMsg['error'] = '未找到相关文件';

		}elseif(!in_array(strtolower($docType),$upTypes)){
			
			$returnMsg['error'] = '仅允许上传 doc,docx,xls,rar,zip,txt格式文件';
		
		}elseif($file['size']>10*1024*1024){ 
			
			$returnMsg['error'] = '上传文件大小不能超过10M';
		
		}else{
			if($dir){
				$dir.='/'.date('Ymd').'/';
			} 
			$newDocName =time().rand(1000,9999).'.'.$docType;
			
			$object = $dir.$newDocName;
			 
			
			$filePath = $file['tmp_name']; 
			$options = array(); 
			
			try {
				$this->ossClient->uploadFile(self::bucket, $object, $filePath, $options);
				$returnMsg['docurl'] = '/'.$object;
				
			} catch (OssException $e) {
				$returnMsg['msg'] = $e->getMessage();
				
			}
			return $returnMsg;
		}
		
	}
	 
	public function delObject($fileUrl)
	{
		if(is_array($fileUrl)){
			$object=array();
			foreach($fileUrl as $value){
				if(strstr($value,'@')){
					$fileUrls = explode('@',$value);
					$object[] = $fileUrls[0];
				}else{
					$object[] = $value;
				}
			}
			if($object&&is_array($object)){
				foreach($object as $k=>$v){
					$v=str_replace('//','',$v);
					if(substr($v,0,1)=='/'){
						$v=substr($v,1);
					}
					$object[$k]=$v;
				}
			}
			try{
				$this->ossClient->deleteObjects(self::bucket, $object);

				return true;

			} catch(OssException $e) {

				return false;
				
			}
		}else{
		
			if(strstr($fileUrl,'@')){
				$fileUrls = explode('@',$fileUrl);
				$object = $fileUrls[0];
			}else{
				$object = $fileUrl;
			}
			$object=str_replace('//','',$object);
			if(substr($object,0,1)=='/'){
				$object=substr($object,1);
			}
			try{
				$this->ossClient->deleteObject(self::bucket, $object);

				return true;

			} catch(OssException $e) {

				return false;
				
			}
		}
	}
	 
	function copyObject($from_object, $to_object)
	{
		$to_object=str_replace('//','',$to_object);
		if(substr($to_object,0,1)=='/'){
			$to_object=substr($to_object,1);
		}
		$options = array();
		try{
			$this->ossClient->copyObject(self::bucket, $from_object, self::bucket, $to_object, $options);


			return true;
		} catch(OssException $e) {

			return false;
		}
	}
	function cutPic($img,$dir,$x,$y,$width,$height,$scale=1){		
		
		$object = $dir.'/'.date('Ymd').'/'.end(explode('/',$img));

		if($dir){
			$dir.='/'.date('Ymd').'/';
		} 
		$imgType=end(@explode('.',$object));
		$newImgName =time().rand(1000,9999).'.'.$imgType;
	
		$file = $dir.$newImgName; 

		$newImageWidth = $width;
		$newImageHeight = $height;
	
		try {
				
				
				$picInfo = curlPost(self::userdomain.'/'.$object.'?x-oss-process=image/crop,w_'.$width.',h_'.$height.',x_'.$x.',y_'.$y);

				$this->ossClient->putObject(self::bucket, $file, $picInfo);
				
				$returnMsg['picurl'] = './'.$file;

				$this->delObject($object);
				return $returnMsg;
			} catch (OssException $e) {
				$returnMsg['error'] = $e->getMessage();
				
				return $returnMsg;
			}
	}
 
	function imageBase($data, $dir = 'img', $local = ''){
	    
	    preg_match('/^(data:\s*image\/(\w+);base64,)/', $data, $result);
	    
	    $uimage=str_replace($result[1], '', str_replace('#','+',$data));
	    
	    if(in_array(strtolower($result[2]),$this->pic_type)){
	        $new_file = time().rand(1000,9999).'.'.$result[2];
	    }else{
	        $new_file = time().rand(1000,9999).'.jpg';
	    }
	    
	    $im = imagecreatefromstring(base64_decode($uimage));
	    
	    if ($im !== false) {
	        
	        $dir.='/';
	        
	        $object = $dir.$new_file;
	        
	        $destination = $local.$object;
	        
	        if(!file_exists($local.$dir)){
	            @mkdir($local.$dir,0777,true);
	        }

	        
	        $re = file_put_contents($destination, base64_decode($uimage));
	        
	        chmod($destination,0777);
	        
	        if($re){
	            try {
	                $this->ossClient->uploadFile(self::bucket, $object, $destination);
	                
	                unlink_pic($destination);
	                
	                if (strpos($dir, 'logo') !== false){
	                    $returnMsg['picurl'] = $object;
	                }else{
	                    $returnMsg['picurl'] = './'.$object;
	                }
	                
	            } catch (OssException $e) {
	                $returnMsg['msg'] = $e->getMessage();
	            }
	        }else{
	            $returnMsg['msg'] = '写入文件出错';
	        }
	    }else{
	        $returnMsg['msg'] = '不合法的图片内容';
	    }
	    
	    return $returnMsg;
	}
	 
	public function uploadLocalImg($file)
	{
	    if (strpos($file, 'data/upload') !== false){
	        
	        $object  =  strstr($file, 'data/upload');

	        try {
	            
	            $this->ossClient->uploadFile(self::bucket, $object, $file);
	            
	        } catch (OssException $e) {
	            $returnMsg['msg'] = $e->getMessage();
	            
	        }
	        return $returnMsg;
	    }
	}
	
}
?>