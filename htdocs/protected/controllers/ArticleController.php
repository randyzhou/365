<?php

class ArticleController extends Controller
{
	public function actionList($ownerid=null,$typeid=null,$keywords=null,$userid,$p=0,$limit=30)
	{
		$owner = '';
		$ownersearch = '';
		if(is_numeric($ownerid)){
			$owner = Shop::model()->findByPk($ownerid);
			if(empty($owner)){
				echo CJSON::encode(array('status'=>1, data=>[]));
				exit;
			}
			$ownersearch = " and ownerid=$owner->id";
		}

		$condition = '';

		if($keywords){
			$keywords = urldecode(strip_tags($keywords));
			$condition = $condition." and title like '%".$keywords."%'";
		}		

		$offset = $p*$limit;
		$sql = "SELECT id,typeid,ownerid,owner_name,userid,username,usersex,certified,title,create_time,update_time,comments,avatar,`type`,price FROM article WHERE id>0 $ownersearch $condition ORDER BY id desc limit $offset,$limit";
		$articles = Yii::app()->db->createCommand($sql)->queryAll();
		echo CJSON::encode(array('status'=>200, 'message'=>'获取成功！', 'data'=>$articles, 'owner'=>$owner));
	}

	public function actionListAdmin($userid,$p=0,$limit=30,$ownerid=null)
	{
		$offset = $p*$limit;
		if(!is_null($ownerid)){
			$owner = Shop::model()->findByAttributes(array('userid'=>$userid,'id'=>$ownerid));
			if(!$owner){
				echo CJSON::encode(array('status'=>1, 'result'=>0, 'msg'=>'没找到文章属主', 'data'=>[]));
				exit;
			}
			$sql = "SELECT * FROM article WHERE ownerid = $ownerid ORDER BY id desc limit $offset,$limit";
		}else{
			$owner = User::model()->findByAttributes(array('userid'=>$userid));
			if(!$owner){
				echo CJSON::encode(array('status'=>1, 'result'=>0, 'msg'=>'没找到文章作者', 'data'=>[]));
				exit;
			}
			$sql = "SELECT * FROM article WHERE userid = $userid ORDER BY id desc limit $offset,$limit";
		}

		$articles = Yii::app()->db->createCommand($sql)->queryAll();
		echo CJSON::encode(array('status'=>200, 'result'=>1, 'message'=>'获取成功！', 'data'=>$articles, 'owner'=>$owner));
	}	

	public function actionView($id)
	{
		$article = $this->loadModel($id);
		if(empty($article)){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有该文章！'));
			exit;
		}
		$owner = $article->owner;
		$sql = "SELECT comment.id,comment.title,comment.content,comment.datetime,comment.userid,comment.username,comment.usersex
				FROM comment
				WHERE comment.ownerid = $id and typeid = 4
				ORDER BY comment.id desc";
		$comments = Yii::app()->db->createCommand($sql)->queryAll();

		echo CJSON::encode(array('status'=>200, 'owner'=>$owner, 'article'=>$article, 'comments'=>$comments));
	}

	 public function actionCreate($userid,$username,$usersex)
 	{
		if(!$userid) exit;
		if(is_null($_POST['title']) || is_null($_POST['content']) || is_null($_POST['owner_id']) || is_null($_POST['owner_name']) || is_null($_POST['typeid'])){
			echo CJSON::encode(array("status"=>1, "message"=>"没有标题或内容！"));
			exit;
		}

		$model = new Article;
		$typeid = $_POST['typeid'];
		$ownerid = $_POST['owner_id'];

		if(!is_numeric($ownerid)) exit;
		$store = Shop::model()->findByPk($ownerid);
		if(!$store){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有该组织实体ID'));
			exit;
		}

		if($store->typeid != "2"){
			echo CJSON::encode(array('status'=>1, 'message'=>'只有社团组织成员才能发布文章'));
			exit;
		}

		$membersql = "select id,certified from member where userid = $userid and ownerid=$store->id"; 
		$member = Yii::app()->db->createCommand($membersql)->queryRow();
		if(!$member){
			echo CJSON::encode(array('status'=>1, 'message'=>'不是该组织实体成员'));
			exit;
		}
		if($member["certified"] < $store->post_cert){
			echo CJSON::encode(array('status'=>1, 'message'=>'没有在该组织发布文章的权限'));
			exit;
		}

		$model->typeid = $typeid;
		$model->title = $_POST['title'];
		$model->content = $_POST['content'];
		if(isset($_POST['avatar'])) $model->avatar = $_POST['avatar'];
		$model->ownerid = $ownerid;
		$model->owner_name = $_POST['owner_name'];
		$model->userid = $userid;
		$model->username = $username;
		$model->usersex = $usersex;
		$model->create_time = date("Y-m-d H:i:s");
		if($model->save()){
			$sql = "SELECT * FROM article WHERE ownerid = $ownerid ORDER BY id desc";
			$articles = Yii::app()->db->createCommand($sql)->queryAll();
			echo CJSON::encode(array("status"=>200, "message"=>"发布成功！", "articles"=>$articles));
			exit;
			}
		echo CJSON::encode(array("status"=>1, "message"=>"发布失败！"));
 	}

	public function actionUpdate($userid)
	{
		if(!isset($_POST['updateid'])){
			echo CJSON::encode(array("status"=>1, "message"=>"没有指定ID号！"));
			exit;
		}

		if(!isset($_POST['title']) || !isset($_POST['content'])){
			echo CJSON::encode(array("status"=>1, "message"=>"没有标题或内容！"));
			exit;
		}

		$id = $_POST['updateid'];
		if(!is_numeric($id)){
			echo CJSON::encode(array("status"=>1, "message"=>"ID号错误！"));
			exit;
		}
		$model = $this->loadModel($id);

		if($model->userid != $userid){
			echo CJSON::encode(array("status"=>1, "message"=>"不是您的信息！"));
			exit;
		}

		$model->title = $_POST['title'];
		$model->content = $_POST['content'];
		$model->avatar = $_POST['avatar'];

		if($model->save()){
			echo CJSON::encode(array("status"=>200, "message"=>"修改成功", "article"=>$model));
		}else{
			echo CJSON::encode(array("status"=>200, "message"=>"修改不成功", "article"=>$model));
		}

	}

	public function actionDelete($userid)
	{
		if( !isset($_POST['id']) || !$_POST['id'] ){
			echo CJSON::encode(array("status"=>1, "message"=>"提交信息不全！"));
			exit;
		}

		$id = $_POST['id'];
		$search = '';

		if(empty($_POST['ownerid'])){
			$Article = $this->loadModel($id);
			if(empty($Article)){
				echo CJSON::encode(array('status'=>1, 'message'=>'找不到该ID信息！', 'data'=>[]));
				exit;
			}

			if($Article->userid != $userid){
				echo CJSON::encode(array('status'=>1, 'message'=>'这不是您的ID信息！', 'data'=>[]));
				exit;
			}
			$search = "and userid = $userid";
		}else{
			$owner = null;
			$ownerid = $_POST['ownerid'];
			$owner = Shop::model()->findByPk($ownerid);
			if(!$owner){
				echo CJSON::encode(array('status'=>1, 'message'=>'没有找到信息属主！', 'data'=>[]));
				exit;
			}
			if($owner->userid != $userid){
				echo CJSON::encode(array('status'=>1, 'message'=>'这个不是您的属主！', 'data'=>[]));
				exit;
			}

			$Article = $this->loadModel($id);
			if(empty($Article)){
				echo CJSON::encode(array('status'=>1, 'message'=>'找不到该ID信息！', 'data'=>[]));
				exit;
			}

			if($Article->ownerid != $owner->id){
				echo CJSON::encode(array('status'=>1, 'message'=>'这不是您的ID信息！', 'data'=>[]));
				exit;
			}
			$search = " and ownerid = $ownerid";
		}

		if($Article->delete()){
			$sql = "SELECT * FROM article WHERE id>0 $search ORDER BY id desc";
			$articles = Yii::app()->db->createCommand($sql)->queryAll();
			echo CJSON::encode(array("status"=>200, "message"=>"删除成功！", "articles"=>$articles));
			exit;
		}
		echo CJSON::encode(array("status"=>1, "message"=>"删除失败！"));
	}

	public function loadModel($id)
	{
		$model = Article::model()->findByPk($id);
		if($model===null){
			echo CJSON::encode(array("status"=>1, "message"=>"没有该文章！"));
			exit;
		}
//			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
