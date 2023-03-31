<?php

class OrderController extends Controller
{
	public function actionList($userid='',$shopid='')
	{
	   	if(empty($userid)){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有登录'));
		   	exit;
		}
	   	if(!is_numeric($userid)) exit;

		if(!$shopid)
			$shop = Shop::model()->findByAttributes(array('userid'=>$userid,'typeid'=>1));
		else
			$shop = Shop::model()->findByPk($shopid);

		if($shop->userid != $userid){
			echo CJSON::encode(array('status'=>1, 'message'=>'不是您的店铺或社团'));
		   	exit;
		}

		$ordersql = "select * from orders where userid = $userid and ownerid = $shopid";
		$orders = Yii::app()->db->createCommand($ordersql)->queryAll();

		echo CJSON::encode(array('status' => 200, 'shop'=>$shop, 'orders'=>$orders));
	}

	public function actionCreate($userid='',$shopid='')
	{
	   	if(empty($userid)){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有登录'));
		   	exit;
		}
	   	if(!is_numeric($userid)) exit;

		if(!$shopid)
			$shop = Shop::model()->findByAttributes(array('userid'=>$userid,'typeid'=>1));
		else
			$shop = Shop::model()->findByPk($shopid);

		if($shop->userid != $userid){
			echo CJSON::encode(array('status'=>1, 'message'=>'不是您的店铺或社团'));
		   	exit;
		}

		$ordersql = "select * from orders where userid = $userid and ownerid = $shopid";
		$orders = Yii::app()->db->createCommand($ordersql)->queryAll();

		echo CJSON::encode(array('status' => 200, 'shop'=>$shop, 'orders'=>$orders));
	}
}
