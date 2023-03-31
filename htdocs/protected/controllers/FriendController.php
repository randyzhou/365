<?php
class FriendController extends Controller
{
	public function actionListAdmin($p=0,$limit=10,$userid=null,$userid1=null,$username1=null,
	$usersex1=null,$minage=null,$maxage=null,$constellation=null,$homeprovince=null,$homecity=null,
	$workprovince=null,$workcity=null,$workdistrict=null,$worktown=null,
	$marry=null,$lookingfor=null,$education=null,$school=null,$occupation=null,$jobtitle=null,
	$likearea=null,$club=null,$act=null,$order=null,$latitude_reg=null,$longitude_reg=null,$distance = null)
	{
		if(!is_numeric($userid)) exit;
		$user = User::model()->findByPk($userid);
		if(!$user){
			echo CJSON::encode(array('status'=>1, data=>[]));
			exit;
		}

		$criteria = new CDbCriteria();
		$criteria->addCondition("friendid = '".$userid."'");
		$criteria->addCondition("userid = '".$userid."'","or");
		$friends = Friend::model()->findAll($criteria);

		$members = [];
		$fuser = [];
		foreach ($friends as $key => $friend) {
			if($friend->friend_owner && $friend->user_owner){
				if($friend->userid == $userid){
					$fuser = array("userid"=>$friend->friend_owner->userid,
												 "username"=>$friend->friend_owner->username,
												 "usersex"=>$friend->friend_owner->usersex,
												 "userbirthday"=>$friend->friend_owner->userbirthday,
												 "education"=>$friend->friend_owner->education,
												 "duty"=>$friend->friend_owner->duty,
												 "jobtitle"=>$friend->friend_owner->jobtitle,
												 "marry"=>$friend->friend_owner->marry,
												 "usersex"=>$friend->friend_owner->usersex,
												 "avatar"=>$friend->friend_owner->avatar
											 );
				}else{
					$fuser = array("userid"=>$friend->user_owner->userid,
												 "username"=>$friend->user_owner->username,
												 "usersex"=>$friend->user_owner->usersex,
												 "userbirthday"=>$friend->user_owner->userbirthday,
												 "education"=>$friend->user_owner->education,
												 "duty"=>$friend->user_owner->duty,
												 "jobtitle"=>$friend->user_owner->jobtitle,
												 "marry"=>$friend->user_owner->marry,
												 "usersex"=>$friend->user_owner->usersex,
												 "avatar"=>$friend->user_owner->avatar
											 );
				}

			}
			$members[] = $fuser;
		}

		echo CJSON::encode(array('status'=>200, 'user'=>$user, 'members'=>$members));
		exit;
	}	

	public function actionDelete($userid)
	{
		if(empty($userid) || !is_numeric($userid)){
			echo CJSON::encode(array('stautsCode'=>1, 'status'=>200, 'result'=>0, 'message'=>'登录id错误！'));
			exit;
		}

		if(is_null($_POST["userid1"])){
			echo CJSON::encode(array('stautsCode'=>1, 'status'=>200, 'result'=>0, 'message'=>'会员id错误！'));
			exit;
		}
		$userid1 = $_POST["userid1"];
		if(!is_numeric($userid1)){
			echo CJSON::encode(array('stautsCode'=>1, 'status'=>200, 'result'=>0, 'message'=>'会员id格式错误！'));
			exit;;
		}
		if(!$userid1){
			echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>0, 'message'=>'没有指定会员ID'));
			exit;
		}

		$user=User::model()->findByPk($userid1);
		if(!$user){
			echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>0, 'message'=>'没有该指定会员'));
			exit;
		}		
		$me  =User::model()->findByPk($userid);		
		if(!$me){
			echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>0, 'message'=>'您的会员资料出错'));
			exit;
		}

		$criteria = new CDbCriteria();
		$criteria->addCondition("friendid = '".$userid."' and userid = $userid1");
		$criteria->addCondition("userid = '".$userid."' and friendid = $userid1","or");
		$result = Friend::model()->find($criteria);
		if(!$result){
			echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>0, 'message'=>'该会员不是您的好友！'));
			exit;
		}
		if($result->delete()){
			$me->friends = $me->friends-1;
			if($me->save()){
				$user->friends = $user->friends-1;
				if($user->save()){
					echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>1, 'friend'=>0, 'message'=>"取消好友操作成功！"));		
					exit;				
				}
				echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>1, 'friend'=>0, 'message'=>"取消好友成功！"));		
				exit;
			}
			echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>1, 'friend'=>0, 'message'=>'取消成功！'));
		}
		echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>0, 'message'=>'取消失败！'));
		exit;
	}	

	public function actionAdd($userid='',$username='',$usersex='')
	{
		if(empty($userid) || !is_numeric($userid)){
			echo CJSON::encode(array('stautsCode'=>1, 'status'=>200, 'result'=>0, 'message'=>'登录id错误！'));
			exit;
		}

		if(is_null($_POST["userid1"])){
			echo CJSON::encode(array('stautsCode'=>1, 'status'=>200, 'result'=>0, 'message'=>'会员id错误！'));
			exit;
		}
		$userid1 = $_POST["userid1"];
		if(!is_numeric($userid1)){
			echo CJSON::encode(array('stautsCode'=>1, 'status'=>200, 'result'=>0, 'message'=>'会员id格式错误！'));
			exit;;
		}
		if($userid1 == $userid){
			echo CJSON::encode(array('stautsCode'=>1, 'status'=>200, 'result'=>0, 'message'=>'该会员是您自己！'));
			exit;
		}

		$criteria = new CDbCriteria();
		$criteria->addCondition("friendid = '".$userid."' and userid = '".$userid1."'");
		$criteria->addCondition("userid = '".$userid."' and friendid = '".$userid1."'","or");
		$df = Friend::model()->findAll($criteria);
		if($df){
			echo CJSON::encode(array('stautsCode'=>1, 'status'=>200, 'result'=>0, 'message'=>'已经是您好友！'));
			exit;
		}

		$me = User::model()->findByPk($userid);
		$user = User::model()->findByPk($userid1);
		if($me->balance < $user->friend_amount){
			echo CJSON::encode(array('stautsCode'=>1, 'status'=>200, 'result'=>0, 'message'=>'您的余额不足以支付对方的好友费用！'));
			exit;
		}

		$friend = new Friend();
		$friend->friendid = $user->userid;
		$friend->friend = $user->username;
		$friend->friendsex = $user->usersex;
		//$friend->friendcert = 0;
		$friend->userid = $userid;
		$friend->username = $username;
		$friend->usersex = $usersex;
//		$friend->usercert = Yii::app()->user->usercert;

		if($friend->save()){
			if($user->friend_amount > 0){
				$me->balance = $me->balance - $user->friend_amount;
				$me->friends = $me->friends+1;
				if($me->save()){

					$friend_amount = $user->friend_amount;
					$user_friend_amount = $friend_amount * 0.70;

					$user->ref_income = $user->ref_income + $user_friend_amount;
					$user->balance = $user->balance + $user_friend_amount;
					$user->friends = $user->friends+1;
					if($user->save()){

						$ref1 = User::model()->findByPk($user->ref_userid);
						$ref2 = User::model()->findByPk($ref1->ref_userid);
						
						$ref1_friend_amount = $friend_amount * 0.20;
						$ref1->ref_income = $ref1->ref_income + $ref1_friend_amount;
						$ref1->balance = $ref1->balance + $ref1_friend_amount;

						$ref2_friend_amount = $friend_amount * 0.05;
						$ref2->ref_income = $ref2->ref_income + $ref2_friend_amount;
						$ref2->balance = $ref2->balance + $ref2_friend_amount;

						$ref1->save();
						$ref2->save();

						$cashlog = new Cashlog();
						$cashlog->amount = $friend_amount;

						$cashlog->userid = $user->userid;
						$cashlog->username = $user->username;
						$cashlog->user_amount = $user_friend_amount;

						$cashlog->ref1_userid = $ref1->userid;
						$cashlog->ref1_username = $ref1->username;
						$cashlog->ref1_amount = $ref1_friend_amount;

						$cashlog->ref2_userid = $ref2->userid;
						$cashlog->ref2_username = $ref2->username;
						$cashlog->ref2_amount = $ref2_friend_amount;

						$cashlog->rate = "100%";
						$cashlog->depth = 0;
						$cashlog->pay_type = "加好友";
						$cashlog->payer_userid = $me->userid;
						$cashlog->payer_username = $me->username;
						$cashlog->orderid = '';
						$cashlog->save();

						echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>1, 'friend'=>1, 'message'=>"添加好友并扣款支付成功，您的账户余额为 $me->balance 元！"));		
						exit;				
					}
					echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>1, 'friend'=>1, 'message'=>"添加好友并扣款成功，您的账户余额为 $me->balance 元！"));		
					exit;
				}
			}
			echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>1, 'friend'=>1, 'message'=>'添加好友成功！'));
			exit;
		}
		echo CJSON::encode(array('stautsCode'=>1,'status'=>200, 'result'=>0, 'message'=>'添加好友失败！'));
		exit;
	}
}
