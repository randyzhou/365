<?php

class CashlogController extends Controller
{
	public function actionMyRefincomes($userid,$p=0,$limit=100)
	{
		$sql = "SELECT * FROM cash_log where userid = '$userid' or ref1_userid = '$userid' or ref2_userid = '$userid' ORDER BY id desc";
		$cash_logs = Yii::app()->db->createCommand($sql)->queryAll();
		if($cash_logs){
			echo CJSON::encode(array('status'=>200, 'result'=>2, 'cash_logs'=>$cash_logs));
			exit;
		}
		echo CJSON::encode(array('status'=>200, 'result'=>1, 'msg'=>'没有数据！'));
	}
}
