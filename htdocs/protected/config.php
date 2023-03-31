<?php
ini_set('date.timezone','Asia/Shanghai');
//error_reporting(0);

define("URL","http://365.natapp1.cc");
//define("APPID","wxa2e3fc17e154040a");
define("APPSECRET","672bc9ea22af7d1d39da2bbfbef3862d");


//define("URL","http://www.laoyouji365.com");
define("APPID","wx11d8e1d179ac2b6f");
//define("APPSECRET","3696c91814025c7a1b566fc905067c3c");


//$appid = "wx8eb125588a7213dc";
//$appsecret = "3c2884cce612a9cf23a7f0a79f2fb1da";
//$appid = "wx8bed01948f2256b4";
//$appsecret = "dcff89928f8b0aa4296d811144dd8bb7";

$con = mysql_connect("localhost","site365","mingda888");
mysql_select_db("lyj365", $con);
mysql_query("set names 'utf8'");
