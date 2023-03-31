<?php

class SiteController extends Controller
{
	public $layout='none';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
				array('allow',  // allow all users to perform 'index' and 'view' actions
						'actions'=>array('UserJoin','CheckUsername','LoginUsername','addmobile','getVericode','addvericode','checkvericode','isLogin', 'login'),
						'users'=>array('*'),
				),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions'=>array('admin', 'logout'),
						'users'=>array('@'),
				),
				array('allow', // allow admin user to perform 'admin' and 'delete' actions
						'actions'=>array('delete'),
						'users'=>array('admin'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}


	public function actionGetVericode($userid)
	{
		if(empty($userid)){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'会员id为空'));
			return false;
		}
		if(!is_numeric($userid)){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'会员id格式错误'));
			return false;
		}

		$sql = "select * from login_mobile where userid = $userid";
		$res = Yii::app()->db->createCommand($sql)->queryAll();

		if($res){
			echo CJSON::encode(array('statusCode'=>1,'mobile'=>$res[0]["mobile"]));
			return false;
		}
		echo CJSON::encode(array('statusCode'=>0,'msg'=>'尚未关联手机'));
	}

	public function actionAddmobile($userid)
	{
		if(empty($userid)){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"没有登录"));
			return false;
		}
		if(!is_numeric($userid)){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"登录错误"));
			return false;
		}

		if(!$_POST["mobile"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"请填正确的手机号码！"));
			exit;
		}
		if(!$_POST["vericode"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"请填正确的验证码！"));
			exit;
		}
		if(!$_POST["password"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"没有填写登录密码！"));
			exit;
		}
		$mobile = $_POST["mobile"];
		$vericode = $_POST["vericode"];
		$password = md5($_POST["password"]);
		
		$sql = "select * from login_mobile_cache where mobile = $mobile and veri_code = $vericode";
		$res = Yii::app()->db->createCommand($sql)->queryAll();
		if(!$res){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"验证码或手机号码有误,请重新填写！"));
			exit;
		}
		$mobileSql = "select * from login_mobile where mobile = $mobile";
		$mobileRes = Yii::app()->db->createCommand($mobileSql)->queryAll();
		if($mobileRes){
			$mobileUpSql = "update login_mobile set userid = $userid, password = '$password', create_date = CURRENT_TIMESTAMP where mobile = $mobile";
			$mobileUpRes = Yii::app()->db->createCommand($mobileUpSql)->execute();
			if($mobileUpRes){
				echo CJSON::encode(array('statusCode'=>1,'msg'=>"关联手机号码更改成功！"));
				exit;
			}
		}
		$sql = "select * from login_mobile where userid = $userid";
		$res = Yii::app()->db->createCommand($sql)->queryAll();
		if($res){
			$upSql = "update login_mobile set mobile = $mobile, password = '$password', create_date = CURRENT_TIMESTAMP where userid = $userid";
			$upRes = Yii::app()->db->createCommand($upSql)->execute();
			if($upRes){
				echo CJSON::encode(array('statusCode'=>1,'msg'=>"关联手机号码更改成功！"));
				exit;
			}
		}
		$insertSql = "insert into login_mobile (`id`,`mobile`,`password`,`userid`,`create_date`,`join_type`) values('',$mobile,'$password',$userid,CURRENT_TIMESTAMP,'验证码');";
		$insertRes = Yii::app()->db->createCommand($insertSql)->execute();
		if($insertRes){
			echo CJSON::encode(array('statusCode'=>1,'msg'=>"关联手机号码成功！"));
			exit;
		}
		echo CJSON::encode(array('statusCode'=>0,'msg'=>"注册不成功！"));
	}

	public function actionCheckUsername($username1)
	{
		$username1 = urldecode($username1);
		$sql = "select userid from user where username = '$username1'";
		$user = Yii::app()->db->createCommand($sql)->queryRow();
		if($user){
			echo CJSON::encode(array('statusCode'=>1,'result'=>1,'msg'=>'该会员名已被注册'));
			exit;
		}
		echo CJSON::encode(array('statusCode'=>0,'result'=>0));
	}

	public function actionLoginUsername()
	{
		if(!$_POST["username"] || !$_POST["password"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'用户名或密码不全！'));
			exit;
		}
		if(!$_POST["username"] && $_POST["logintype"] == "login_username"){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'请填写用户名！'));
			exit;
		}
		if(!$_POST["password"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'请填写密码！'));
			exit;
		}
		
		$username = $_POST["username"];
		$password = md5($_POST["password"]);

		$sql = "select * from user where username = '$username' and password = '$password'";
		$user = Yii::app()->db->createCommand($sql)->queryRow();

		if(!$user){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'用户名或密码错误！'));
			exit;
		}

		if($user){
			echo CJSON::encode(array('statusCode'=>1,'data'=>array('userid'=>$user['userid'],'username'=>$user['username'],'usersex'=>$user['usersex'],'latitude_reg'=>$user['latitude_reg'],'longitude_reg'=>$user['longitude_reg'])));
			exit;
		}
	}

	public function actionLoginMobile()
	{
		if(!$_POST){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'手机号码或密码不全！'));
			exit;
		}
		if(!$_POST["mobile"] && $_POST["logintype"] == "login_mobile"){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'请填写手机号码！'));
			exit;
		}
		if(!$_POST["password"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'请填写密码！'));
			exit;
		}

		$mobile = $_POST["mobile"];
		$password = md5($_POST["password"]);
		if(!is_numeric($mobile)){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'非法手机号码！'));
			exit;
		}
		$sql = "select * from login_mobile where mobile = $mobile and password = '$password'";
		$res = Yii::app()->db->createCommand($sql)->queryRow();
		if(!$res){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'手机或密码错误！'));
			exit;
		}

		$userid = $res["userid"];
		if($userid < 1) {
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'请先关联或创建用户！'));
			exit;
		}

		$usersql = "select * from user where userid = $userid";
		$user = Yii::app()->db->createCommand($usersql)->queryRow();
		if(!$user){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'手机登录错误'));
			exit;
		}
		echo CJSON::encode(array('statusCode'=>1,'data'=>array('userid'=>$user['userid'],'username'=>$user['username'],'usersex'=>$user['usersex'],'latitude_reg'=>$user['latitude_reg'],'longitude_reg'=>$user['longitude_reg'])));
	}

	public function actionLoginVericode()
	{
		if(!$_POST["mobile"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'请填写手机号码！'));
			exit;
		}
		if(!$_POST["vericode"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'请填写正确的验证码！'));
			exit;
		}

		$mobile = $_POST["mobile"];
		$vericode = $_POST["vericode"];
		if(!is_numeric($mobile) || !is_numeric($vericode)){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'非法手机号码或验证码！'));
			exit;
		}
		$sql = "select * from login_mobile_cache where mobile = $mobile and veri_code = '$vericode'";
		$res = Yii::app()->db->createCommand($sql)->queryRow();
		if(!$res){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'手机号码或验证码错误！'));
			exit;
		}

		$sql = "select * from login_mobile where mobile = $mobile";
		$res = Yii::app()->db->createCommand($sql)->queryRow();
		if(!$res){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'手机号码没注册！'));
			exit;
		}

		$userid = $res["userid"];
		if($userid < 1) {
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'请先关联或创建用户！'));
			exit;
		}

		$userSql = "select * from user where userid = $userid";
		$user = Yii::app()->db->createCommand($userSql)->queryRow();
		if(!$user) {
			echo CJSON::encode(array('statusCode'=>0,'msg'=>'没找到相关用户！'));
			exit;
		}
		echo CJSON::encode(array('statusCode'=>1,'data'=>array('userid'=>$user['userid'],'username'=>$user['username'],'usersex'=>$user['usersex'],'latitude_reg'=>$user['latitude_reg'],'longitude_reg'=>$user['longitude_reg'])));
		exit;
	}

	public function actionAddvericode()
	{
		if(!$_POST["mobile"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"请填正确的手机号码！"));
			exit;
		}
		$mobile = $_POST["mobile"];
		// $userip = Yii::app()->request->getUserHostAddress();
		// print_r($userip);
		// exit;
		$userip = "127";

		$delSql = "delete from login_mobile_cache where create_date < DATE_SUB(NOW(),INTERVAL 300 SECOND)";
		Yii::app()->db->createCommand($delSql)->execute();
		$sql = "select * from login_mobile_cache where mobile = $mobile";
		$res = Yii::app()->db->createCommand($sql)->queryAll();
		if($res){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"请求太快，请5分钟后再发！"));
			exit;
		}
		$vericode = rand(1001,9999);

		$insertSql = "insert into login_mobile_cache (`mobile`,`veri_code`,`create_date`,`userip`) values('$mobile','$vericode',CURRENT_TIMESTAMP,$userip);";
		$insertRes = Yii::app()->db->createCommand($insertSql)->execute();
		if($insertRes){
			echo CJSON::encode(array('statusCode'=>1,'msg'=>"验证码已发送！"));
			exit;
		}
	}

	public function actionCheckvericode($mobile,$vericode)
	{
		if(!$vericode || !$mobile){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"请填正确的手机号码和验证码！"));
			exit;
		}

		$sql = "select * from login_mobile_cache where mobile = $mobile and veri_code = $vericode";
		$res = Yii::app()->db->createCommand($sql)->queryAll();
		if($res){
			echo CJSON::encode(array('statusCode'=>1,'msg'=>"验证码正确！"));
			exit;
		}
		echo CJSON::encode(array('statusCode'=>0,'msg'=>"验证码不正确！"));
	}

	public function actionMobilejoincheck()
	{
		if(empty($_POST["mobile"])){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"请填正确的手机号码！"));
			exit;
		}

		$mobile = $_POST["mobile"];
		$mobileSql = "select * from login_mobile where mobile = $mobile";
		$mobileRes = Yii::app()->db->createCommand($mobileSql)->queryAll();
		if($mobileRes){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"该号码已被注册！"));
			exit;
		}

		$userip = "127";
		$delSql = "delete from login_mobile_cache where create_date < DATE_SUB(NOW(),INTERVAL 300 SECOND)";
		Yii::app()->db->createCommand($delSql)->execute();
		$sql = "select * from login_mobile_cache where mobile = $mobile";
		$res = Yii::app()->db->createCommand($sql)->queryAll();
		if($res){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"请求太快，请5分钟后再发！"));
			exit;
		}
		$vericode = rand(1001,9999);

		$insertSql = "insert into login_mobile_cache (`mobile`,`veri_code`,`create_date`,`userip`) values('$mobile','$vericode',CURRENT_TIMESTAMP,$userip);";
		$insertRes = Yii::app()->db->createCommand($insertSql)->execute();
		if($insertRes){
			echo CJSON::encode(array('statusCode'=>1,'msg'=>"验证码已发送！"));
			exit;
		}		
		
	}

	public function actionUserJoin()
	{
		if(!$_POST["username"] || !$_POST["password"]){
			echo CJSON::encode(array('statusCode' => 0, 'result'=>0, 'message'=>'注册资料不全！'));
			exit;
		}

		$username = strip_tags($_POST["username"]);
		
		$model = new User;
		$du = User::model()->findByAttributes(array("username"=>$username));
		if($du){
			echo CJSON::encode(array('statusCode' => 0, 'result'=>0, 'message'=>'该会员名已被注册！'));
			exit;
		}

		$model->username = $username;
		$model->usersex = $_POST["usersex"];
		$model->password = md5($_POST["password"]);
		$model->joindate = date("Y-m-d",time());
		$model->lastlogin = $model->joindate;

		if($model->save()){
			echo CJSON::encode(array('statusCode' => 200, 'result'=>1, 'message'=>'注册成功！'));
			exit;
		}

		echo CJSON::encode(array('statusCode' => 0, 'result'=>0, 'message'=>'注册失败！'));
	}


	public function actionMobilejoin()
	{
		if(!$_POST["mobile"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"请填正确的手机号码！"));
			exit;
		}
		if(!$_POST["vericode"]){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"请填正确的验证码！"));
			exit;
		}
		
		$mobile = $_POST["mobile"];
		$vericode = $_POST["vericode"];
		
		$sql = "select * from login_mobile_cache where mobile = $mobile and veri_code = $vericode";
		$res = Yii::app()->db->createCommand($sql)->queryAll();
		if(!$res){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"验证码或手机号码有误,请重新填写！"));
			exit;
		}
		$mobileSql = "select * from login_mobile where mobile = $mobile";
		$mobileRes = Yii::app()->db->createCommand($mobileSql)->queryAll();
		if($mobileRes){
			echo CJSON::encode(array('statusCode'=>0,'msg'=>"该号码已被注册！"));
			exit;
		}
		$insertSql = "insert into login_mobile (`id`,`mobile`,`password`,`userid`,`create_date`,`join_type`) values('',$mobile,'','',CURRENT_TIMESTAMP,'验证码');";
		$insertRes = Yii::app()->db->createCommand($insertSql)->execute();
		if($insertRes){
			echo CJSON::encode(array('statusCode'=>1,'msg'=>"注册号码成功！"));
			exit;
		}
		echo CJSON::encode(array('statusCode'=>0,'msg'=>"注册不成功！"));
	}

	public function actionGetCitys($ProvinceName)
	{
//		$province = Yii::app()->db->createCommand("SELECT ProvinceID FROM S_Province WHERE ProvinceName = '$ProvinceName'")->queryAll();
		$ProvinceName = urldecode($ProvinceName);
		$province = Yii::app()->getDb()->createCommand()
        ->select('ProvinceID')
        ->from('S_Province')
        ->where('ProvinceName = :ProvinceName', [
            ':ProvinceName' => $ProvinceName
        ])
		->queryAll();

		$ProvinceID = $province[0]["ProvinceID"];
		$sql = "SELECT * FROM S_City WHERE ProvinceID = '$ProvinceID' ORDER BY CityID asc";
		$citys = Yii::app()->db->createCommand($sql)->queryAll();
		echo CJSON::encode(array("status"=>200, "citys"=>$citys));
	}

	public function actionGetDistricts($CityName)
	{
//		$city = Yii::app()->db->createCommand("SELECT CityID FROM S_City WHERE CityName = '$CityName'")->queryAll();
		$CityName = urldecode($CityName);
		$city = Yii::app()->getDb()->createCommand()
        ->select('CityID')
        ->from('S_City')
        ->where('CityName = :CityName', [
            ':CityName' => $CityName
        ])
        ->queryAll();
		$CityID = $city[0]["CityID"];
		$sql = "SELECT * FROM S_District WHERE CityID = $CityID ORDER BY DistrictID asc";
		$districts = Yii::app()->db->createCommand($sql)->queryAll();
		echo CJSON::encode(array("status"=>200, "districts"=>$districts));
	}

}
