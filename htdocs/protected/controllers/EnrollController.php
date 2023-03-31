<?php

class EnrollController extends Controller
{
	public function actionListAdmin($userid='',$shopid=null)
	{
	   	if(empty($userid)){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有登录'));
		   	exit;
		}
	   	if(!is_numeric($userid)) exit;

		if(!is_numeric($shopid)){
			echo CJSON::encode(array('status'=>1, 'msg'=>'没有指定属主ID'));
		   	exit;
		}

		$shop = Shop::model()->findByAttributes(array('userid'=>$userid,'id'=>$shopid));

		if(empty($shop)){
			echo CJSON::encode(array('status'=>1, 'message'=>'不是您的店铺或社团'));
		   	exit;
		}

		$enrolls = $shop->enrolls;

		echo CJSON::encode(array('status' => 200, 'shop'=>$shop, 'enrolls'=>$enrolls));
	}
}
