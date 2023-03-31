<?php

class ChatController extends Controller
{
	public function actionSendPublicChatData($userid='',$username='',$usersex=0)
	{
		if(empty($userid)) return false;
		if(!is_numeric($userid)) return false;
		$toid = $_POST["toid"];
		$tousername = $_POST["tousername"];
		$msg = $_POST["msg"];
		$roomtype = $_POST["roomtype"];

		$model = new MsgPublic();

		$model->userid = $userid;
		$model->username = $username;
		$model->usersex = $usersex;
		$model->certified = 0;
		$model->userip = '123';

		$model->toid = $toid;
		$model->tousername = $tousername;
		$model->msg = $msg;
		$model->roomtype = $roomtype;

		$model->sendtime = date("Y-m-d H:i:s",time());

		if($model->save()){
			echo CJSON::encode(array('status'=>200, 'results'=>1, 'data'=>$model, 'msg'=>'公聊保存成功！'));
		}
	}

	public function actionSendPrivateChatData($userid='',$username='',$usersex=0)
	{
		if(empty($userid)) return false;
		if(!is_numeric($userid)) return false;

		$toid = $_POST["toid"];
		$tousername = $_POST["tousername"];
		$tousersex = $_POST["tousersex"];
		$tocert = 1;
		$readState = $_POST["readState"];
		$msg = $_POST["msg"];

		$model = new MsgPrivate();

		$model->userid = $userid;
		$model->username = $username;
		$model->usersex = $usersex;
		$model->usercert = 0;
		$model->userip = '123';

		$model->toid = $toid;
		$model->tousername = $tousername;
		$model->tousercert = $tocert;
		$model->tousersex = $tousersex;
		$model->readState = $readState;
		$model->msg = $msg;

		$model->certified = 0;
		$model->onmessage = 'hi';
		$model->sendtime = date("Y-m-d H:i:s",time());

		if($model->save()){
			echo CJSON::encode(array('status'=>200, 'results'=>1, 'data'=>$model, 'msg'=>'私聊保存成功！'));
		}
	}

	public function actionNewMsgs($lastTime,$userid='')
	{
		if(empty($userid)){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有登录'));
			exit;
		}
		if(!is_numeric($userid)) return false;

		$lastTime = date('Y-m-d H:i:s',$lastTime/1000);

		$storeMsgs = [];
		$groupMsgs = [];		

		$stores = Yii::app()->db->createCommand("select member.*, shop.id as storeid from member left join shop on member.ownerid = shop.id where shop.typeid = 1 and member.userid='$userid'")->queryAll();
		$storeidsArr = array();
		if($stores){
			foreach ($stores as $key => $store) {
				array_push($storeidsArr,$store["storeid"]);
			}
			$storeids = implode(",",$storeidsArr);
			$storeMsgs = Yii::app()->db->createCommand("select * from msg_public where toid in ($storeids) and sendtime > '$lastTime' and roomtype = 'Store' order by sendtime asc")->queryAll();
		}
		
		$personalMsgs = Yii::app()->db->createCommand("select * from msg_private where (toid = '$userid' or userid = '$userid') and sendtime > '$lastTime' order by sendtime asc")->queryAll();
		
		
		echo CJSON::encode(array('status'=>200, 'storeMsgs'=>$storeMsgs, 'groupMsgs'=>[], 'personalMsgs'=>$personalMsgs));
	}
}
