<?php
//session_set_cookie_params(1800 , '/', '.juyou365.com');
//session_start();
//error_reporting(0);
date_default_timezone_set('Asia/Shanghai');
$yii=dirname(__FILE__).'/../yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
//defined('YII_DEBUG') or define('YII_DEBUG',true);
//define('YII_ENABLE_ERROR_HANDLER', false);
//define('YII_ENABLE_EXCEPTION_HANDLER', false);

require_once($yii);
require_once(dirname(__FILE__).'/protected/WebApplication.php');

Yii::createApplication('WebApplication',$config)->run();
