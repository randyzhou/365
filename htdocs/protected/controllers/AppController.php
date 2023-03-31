<?php

class AppController extends Controller
{
	public function actionList($userid='',$keywords=null)
	{
		if(empty($userid)) return false;
		if(!is_numeric($userid)) return false;

		$mysql = "select w.*,m.id,m.certified,m.webid,m.userid from app_mine as m left join app as w on m.webid = w.id where m.userid = '$userid' order by m.hits desc,m.bids desc,m.id desc";
		$myapps = Yii::app()->db->createCommand($mysql)->queryAll();
		$myappids = "";

		foreach ($myapps as $index => $myapp) {
			if($myappids) $myappids = $myappids.",".$myapp['webid'];
			else $myappids = $myapp['webid'];
		}
		$notmyapps = '';
		if(!empty($myappids)) $notmyapps = " and id not in ($myappids)";

		$searchString = "";
		if(!is_null($keywords)){
			$searchString = " and (webtype like '%".urldecode($keywords)."%' or webname like '%$keywords%' or webintro like '%$keywords%' or keywords like '%$keywords%')";
		}
		$sql = "select * from app where id > 0 $notmyapps $searchString order by certified desc,hits desc,bids desc,id desc limit 500";
		$leftapps = Yii::app()->db->createCommand($sql)->queryAll();
		//$apps = array_merge($myapps,$leftapps);
		echo CJSON::encode(array('status'=>200,'result'=>1,'apps'=>$leftapps,'myapps'=>$myapps));
	}

	public function actionListAdmin()
	{
		$sql = "select * from app where id > 0 order by certified desc,hits desc,bids desc,id desc limit 500";
		$apps = Yii::app()->db->createCommand($sql)->queryAll();
		echo CJSON::encode(array('status'=>200,'result'=>1,'apps'=>$apps));
	}


	public function actionCreate($userid='')
	{
		if(!isset($_POST['web'])){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'内容为空！'));
			exit;
		}
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没有登录！'));
			exit;
		}
		$username = Yii::app()->user->name;

		$web = $_POST['web'];
		$webname = $web["webname"];
		$webintro = $web["webintro"];
		$keywords = $web["keywords"];
		$weburl = $web["weburl"];
		$avatar = $web["avatar"];
		$webcode = '';
		$webtype = '';

		$sql = "select * from app where webname='$webname' and weburl='$weburl'";
		$app = Yii::app()->db->createCommand($sql)->queryRow();
		if($app){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'该App已经存在！'));
			exit;
		}

		$insertSql = "insert into app (`id`, `webname`, `weburl`, `webintro`, `keywords`, `regtime`, `webcode`, `webtype`, `hits`, `bids`, `certified`, `username`, `avatar`) values (NULL, '$webname', '$weburl', '$webintro', '$keywords', CURRENT_TIMESTAMP, '$webcode', '$webtype', '0', '0', '0', '$username','$avatar');";
		$insertResult = Yii::app()->db->createCommand($insertSql)->execute();
		if(empty($insertResult)) {
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'添加未成功！'));
			exit;
		}
		echo CJSON::encode(array('status'=>200,'result'=>1,'msg'=>'添加成功！'));
	}

	public function actionUpdate($userid='')
	{
		if(!isset($_POST['web'])){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'内容为空！'));
			exit;
		}

		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没有登录！'));
			exit;
		}

		$web = $_POST['web'];
		$id = $web["id"];
		if(empty($id)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没有指定ID！'));
			exit;
		}

		$webname = $web["webname"];
		$weburl = $web["weburl"];
		$certified = $web["certified"];
		$webintro = isset($web["webintro"])?$web["webintro"]:'';
		$keywords = isset($web["keywords"])?$web["keywords"]:'';
		$avatar = isset($web["avatar"])?$web["avatar"]:'';
		
		$sql = "select * from app where id='$id'";
		$app = Yii::app()->db->createCommand($sql)->queryRow();
		if(empty($app)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没找到该应用的ID！'));
			exit;
		}

		$updateSql = "update app set webname = '$webname', certified = $certified, webintro = '$webintro', weburl = '$weburl', keywords = '$keywords', avatar = '$avatar' where id = $id;";
		$updateResult = Yii::app()->db->createCommand($updateSql)->execute();
		if($updateResult) {
			echo CJSON::encode(array('status'=>200,'result'=>1,'msg'=>'修改成功！'));
			exit;
		}
		echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'修改未成功！'));
	}

	public function actionDelete($webid,$userid='')
	{
		if(!is_numeric($webid)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没有指定ID！'));
			exit;
		}
		
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没有登录！'));
			exit;
		}

		$deleteSql = "delete from `app` where id = $webid";
		$deleteResult = Yii::app()->db->createCommand($deleteSql)->execute();
		if(empty($deleteResult)) {
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'删除未成功！'));
			exit;
		}
		echo CJSON::encode(array('status'=>200,'result'=>1,'msg'=>'删除成功！'));
	}

	public function actionAddMyApp($webid,$userid='')
	{
		if(!is_numeric($webid)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没有指定ID！'));
			exit;
		}
		
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没有登录！'));
			exit;
		}

		$sql = "select * from app where id='$webid'";
		$app = Yii::app()->db->createCommand($sql)->queryRow();
		if(empty($app)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没找到该应用的ID！'));
			exit;
		}

		$mysql = "select * from app_mine where webid = '$webid' and userid = '$userid'";
		$myapp = Yii::app()->db->createCommand($mysql)->queryRow();
		if($myapp){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'您已安装过该App！'));
			exit;
		}

		$insertSql = "insert into `app_mine` (`id`, `webid`, `regtime`, `hits`, `bids`, `certified`, `userid`) values (NULL, '$webid', CURRENT_TIMESTAMP, '0', '0', '0', '$userid');";
		$InsertResult = Yii::app()->db->createCommand($insertSql)->execute();
		if(empty($InsertResult)) {
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'安装未成功！'));
			exit;
		}
		echo CJSON::encode(array('status'=>200,'result'=>1,'msg'=>'安装成功！'));
	}

	public function actionDeleteMyApp($webid,$userid='')
	{
		if(!is_numeric($webid)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没有指定ID！'));
			exit;
		}
		
		if(!is_numeric($userid)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'没有登录！'));
			exit;
		}

		$mysql = "select * from app_mine where webid = '$webid' and userid = '$userid'";
		$myapp = Yii::app()->db->createCommand($mysql)->queryRow();
		if(empty($myapp)){
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'您没安装该App！'));
			exit;
		}
		$id = $myapp["id"];
		$deleteSql = "delete from `app_mine` where id = $id";
		$deleteResult = Yii::app()->db->createCommand($deleteSql)->execute();
		if(empty($deleteResult)) {
			echo CJSON::encode(array('status'=>0,'result'=>0,'msg'=>'卸载未成功！'));
			exit;
		}
		echo CJSON::encode(array('status'=>200,'result'=>1,'msg'=>'卸载成功！'));
	}

}
