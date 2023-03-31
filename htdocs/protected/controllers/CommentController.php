<?php

class CommentController extends Controller
{
	public function actionCreate($userid,$username,$usersex)
	{
		$model = new Comment;
		if(!isset($_POST['content']) || !isset($_POST['ownerid']) || !isset($_POST['typeid'])){
			echo CJSON::encode(array("status"=>1, "message"=>"提交数据不全！"));
			exit;
		}
		$ownerid = $_POST['ownerid'];

		if(isset($_POST['title'])) $model->title = $_POST['title'];
		$model->content = $_POST['content'];
		$model->ownerid = $ownerid;
		$model->userid = $userid;
		$model->username = $username;
		$model->usersex = $usersex;
		$model->datetime = date("Y-m-d H:i:s");
		$model->typeid = $_POST['typeid'];
		if($model->save()){
			$sql = "SELECT comment.*
					FROM comment
					WHERE comment.ownerid = $model->ownerid and comment.typeid = $model->typeid
					ORDER BY comment.id desc";
			$comments = Yii::app()->db->createCommand($sql)->queryAll();

			$owner = [];
			if($_POST['typeid'] == 4){
				$owner = Article::model()->findByPk($ownerid);
				$owner->comments = count($comments);
				$owner->save();
			}
			if($_POST['typeid'] == 5){
				$owner = Product::model()->findByPk($ownerid);
				$owner->comments = count($comments);
				$owner->save();
			}
			if($_POST['typeid'] == 6){
				$retweet = Retweet::model()->findByPk($ownerid);
				$retweet->comments = count($comments);
				$retweet->save();

				if($retweet->typeid == 4)
					$retweetsql = "select article.*,retweet.userid as retweet_userid,retweet.username as retweet_username,retweet.usersex as retweet_usersex,retweet.content as retweet_content,retweet.id as retweetid,retweet.create_time as retweet_create_time,retweet.comments as retweet_comments from retweet left join article on retweet.owner_id = article.id where retweet.id = $ownerid";
				if($retweet->typeid == 5)
					$retweetsql = "select product.*,retweet.userid as retweet_userid,retweet.username as retweet_username,retweet.usersex as retweet_usersex,retweet.content as retweet_content,retweet.id as retweetid,retweet.create_time as retweet_create_time,retweet.comments as retweet_comments from retweet left join product on retweet.owner_id = product.id where retweet.id = $ownerid";
				$owner = Yii::app()->db->createCommand($retweetsql)->queryRow();
			}
			
			echo CJSON::encode(array("status"=>200, "message"=>"添加评论成功！", 'owner'=>$owner, "comments"=>$comments));
			exit;
		}
		echo CJSON::encode(array("status"=>1, "message"=>"添加评论失败！"));
	}

	public function actionPayment($userid,$username,$usersex)
	{
		if(!$_POST["payment"] || !$_POST["commentid"] || !$_POST["typeid"]){
			echo CJSON::encode(array('status'=>1, 'message'=>'信息不全！'));
			exit;
		}
		$typeid = $_POST["typeid"];
		$comment = $this->loadModel($_POST['commentid']);
		$shop= Shop::model()->findByPk($comment->ownerid);
		if($shop->userid != $userid){
			echo CJSON::encode(array('status'=>1, 'message'=>'您不是该店铺的管理员！'));
			exit;
		}
		$comment->payuserid = $userid;
		$comment->payusername = $username;
		$comment->payusersex = $usersex;
		$comment->payment = $_POST['payment'];
		$comment->paymentreply = $_POST['paymentreply'];
		$comment->paydatetime = date("Y-m-d H:i:s");
		$comment->save();

		$sql = "SELECT comment.id,comment.title,comment.content,comment.datetime,
				comment.payment,comment.paydatetime,comment.payuserid,
				comment.payusername,comment.payusersex,comment.paymentreply,
				user.userid,user.username,user.usersex,user.userbirthday,
				user.education,user.avatar
				FROM comment
				LEFT JOIN user
				ON comment.userid = user.userid
				WHERE comment.ownerid = $shop->id and comment.typeid = $typeid
				ORDER BY comment.id desc";
		$comments = Yii::app()->db->createCommand($sql)->queryAll();		
		echo CJSON::encode(array('status'=>200, 'message'=>'奖励成功！', 'comments'=>$comments));
	}


	public function loadModel($id)
	{
		$model=Comment::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}
