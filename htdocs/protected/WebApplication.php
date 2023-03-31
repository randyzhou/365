<?php
class WebApplication extends CWebApplication{
	function init(){
		//print_r($_SESSION);
		//print_r($_COOKIE);
		//exit;
		//Yii::app()->session["filePath"] = Yii::app()->session["filePath"]."";
		//Yii::app()->session["filePath"] = "/home/zrj/366";
		// Yii::app()->session["filePath"] = "/opt/lampp/365";
		Yii::app()->session["filePath"] = "/Applications/XAMPP/365";
		//
		// if(!isset($_SESSION['unionid']) && !isset($_SESSION['openid'])){
		// 	echo CJSON::encode(array('status'=>1,'msg'=>'没有登录，请重新登录！'));
		// 	exit;
		// }
		//
		// $openid = "";
		// $unionid = "";
		// if(isset($_SESSION['openid'])) $openid = $_SESSION["openid"];
		// if(isset($_SESSION['unionid'])) $unionid = $_SESSION['unionid'];
		//
		// $tokenString1 = "juyou365".$openid;
		// $tokenString = "juyou365".$unionid;
		// $token = "";
		// if(isset($_GET['token'])) $token = $_GET['token'];
		// elseif(isset($_POST['token'])) $token = $_POST['token'];
		//
		// if(md5($tokenString) != $token && md5($tokenString1) != $token){
		// 	echo CJSON::encode(array('status'=>1, 'msg'=>'请携带请求token！'));
		// 	exit;
		// }
//        header('content-type:application:json;charset=utf8');
//         header('Access-Control-Allow-Origin: http://localhost');
//         header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS, HEAD');
// //        header('Access-Control-Allow-Headers: x-requested-with,content-type');
//         header("Access-Control-Allow-Credentials: true");
//         header("Cache-control: private");
	}

	function init1(){
		//Yii::app()->session["filePath"] = Yii::app()->session["filePath"]."";
		//Yii::app()->session["filePath"] = "/home/zrj/366";
		Yii::app()->session["filePath"] = "/opt/lampp/365";
		//Yii::app()->session["filePath"] = "/Applications/XAMPP/365";

		if(!isset($_SESSION['unionid']) && !isset($_SESSION['openid'])){
			echo CJSON::encode(array('status'=>1,'msg'=>'没有登录，请重新登录！'));
			exit;
		}

		$openid = "";
		$unionid = "";
		if(isset($_SESSION['openid'])) $openid = $_SESSION["openid"];
		if(isset($_SESSION['unionid'])) $unionid = $_SESSION['unionid'];

		$tokenString1 = "juyou365".$openid;
		$tokenString = "juyou365".$unionid;
		$token = "";
		if(isset($_GET['token'])) $token = $_GET['token'];
		elseif(isset($_POST['token'])) $token = $_POST['token'];

		if(md5($tokenString) != $token && md5($tokenString1) != $token){
			echo CJSON::encode(array('status'=>1, 'msg'=>'请携带请求token！'));
			exit;
		}

	}

	// public function __construct($config=null)
 //    {
 //        parent::__construct($config);
 //        register_shutdown_function(array($this, 'print_err'));
 //    }

 //    public function print_err()
 //    {
 //    	exit;
 //        if (YII_ENABLE_ERROR_HANDLER && ($error = error_get_last())) {
 //            $this->handleError($error['type'], $error['message'], $error['file'], $error['line']);
 //            die();
 //        }
 //    }

}

class WJSON extends CJSON {
    protected static function nameValue($name, $value) {
        return self::encode(strval($name)) . ':' . self::encode($value);
    }

 	public static function saveBase64Pic($base64,$filepath,$suffix,$imgid=null){
 		$imgfile = explode(',',$base64);
 		if(count($imgfile)==1){
 			return array('res'=>0,'imgid'=>0);
 		}
 		$imgfile = $imgfile[1];
  		list($t1, $t2) = explode(' ', microtime());
  		$imgid = !empty($imgid)?$imgid:(float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);
		$res = file_put_contents($filepath.$imgid.'.'.$suffix, base64_decode($imgfile));
		return array('res'=>$res,'imgid'=>$imgid);
 	}

    public static function encode($var) {
        switch (gettype($var)) {
            case 'boolean':
                return $var ? 'true' : 'false';

            case 'NULL':
                return 'null';

            case 'integer':
                return (int)$var;

            case 'double':
            case 'float':
                return str_replace(',', '.', (float)$var); // locale-independent representation

            case 'string':
                if (($enc = strtoupper(Yii::app()->charset)) !== 'UTF-8')
                    $var = iconv($enc, 'UTF-8', $var);

                if (function_exists('json_encode'))
                    return json_encode($var);

                // STRINGS ARE EXPECTED TO BE IN ASCII OR UTF-8 FORMAT
                $ascii = '';
                $strlen_var = strlen($var);

                /*
                 * Iterate over every character in the string,
                 * escaping with a slash or encoding to UTF-8 where necessary
                 */
                for ($c = 0; $c < $strlen_var; ++$c) {

                    $ord_var_c = ord($var{$c});

                    switch (true) {
                        case $ord_var_c == 0x08:
                            $ascii .= '\b';
                            break;
                        case $ord_var_c == 0x09:
                            $ascii .= '\t';
                            break;
                        case $ord_var_c == 0x0A:
                            $ascii .= '\n';
                            break;
                        case $ord_var_c == 0x0C:
                            $ascii .= '\f';
                            break;
                        case $ord_var_c == 0x0D:
                            $ascii .= '\r';
                            break;

                        case $ord_var_c == 0x22:
                        case $ord_var_c == 0x2F:
                        case $ord_var_c == 0x5C:
                            // double quote, slash, slosh
                            $ascii .= '\\' . $var{$c};
                            break;

                        case (($ord_var_c >= 0x20) && ($ord_var_c <= 0x7F)):
                            // characters U-00000000 - U-0000007F (same as ASCII)
                            $ascii .= $var{$c};
                            break;

                        case (($ord_var_c & 0xE0) == 0xC0):
                            // characters U-00000080 - U-000007FF, mask 110XXXXX
                            // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
                            $char = pack('C*', $ord_var_c, ord($var{$c + 1}));
                            $c += 1;
                            $utf16 = self::utf8ToUTF16BE($char);
                            $ascii .= sprintf('\u%04s', bin2hex($utf16));
                            break;

                        case (($ord_var_c & 0xF0) == 0xE0):
                            // characters U-00000800 - U-0000FFFF, mask 1110XXXX
                            // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
                            $char = pack('C*', $ord_var_c,
                                ord($var{$c + 1}),
                                ord($var{$c + 2}));
                            $c += 2;
                            $utf16 = self::utf8ToUTF16BE($char);
                            $ascii .= sprintf('\u%04s', bin2hex($utf16));
                            break;

                        case (($ord_var_c & 0xF8) == 0xF0):
                            // characters U-00010000 - U-001FFFFF, mask 11110XXX
                            // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
                            $char = pack('C*', $ord_var_c,
                                ord($var{$c + 1}),
                                ord($var{$c + 2}),
                                ord($var{$c + 3}));
                            $c += 3;
                            $utf16 = self::utf8ToUTF16BE($char);
                            $ascii .= sprintf('\u%04s', bin2hex($utf16));
                            break;

                        case (($ord_var_c & 0xFC) == 0xF8):
                            // characters U-00200000 - U-03FFFFFF, mask 111110XX
                            // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
                            $char = pack('C*', $ord_var_c,
                                ord($var{$c + 1}),
                                ord($var{$c + 2}),
                                ord($var{$c + 3}),
                                ord($var{$c + 4}));
                            $c += 4;
                            $utf16 = self::utf8ToUTF16BE($char);
                            $ascii .= sprintf('\u%04s', bin2hex($utf16));
                            break;

                        case (($ord_var_c & 0xFE) == 0xFC):
                            // characters U-04000000 - U-7FFFFFFF, mask 1111110X
                            // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
                            $char = pack('C*', $ord_var_c,
                                ord($var{$c + 1}),
                                ord($var{$c + 2}),
                                ord($var{$c + 3}),
                                ord($var{$c + 4}),
                                ord($var{$c + 5}));
                            $c += 5;
                            $utf16 = self::utf8ToUTF16BE($char);
                            $ascii .= sprintf('\u%04s', bin2hex($utf16));
                            break;
                    }
                }

                return '"' . $ascii . '"';

            case 'array':

                // treat as a JSON object
                if (is_array($var) && count($var) && (array_keys($var) !== range(0, sizeof($var) - 1))) {
                    return '{' .
                    join(',', array_map(array('WJSON', 'nameValue'),
                        array_keys($var),
                        array_values($var)))
                    . '}';
                }

                // treat it like a regular array
                return '[' . join(',', array_map(array('WJSON', 'encode'), $var)) . ']';

            case 'object':
                if ($var instanceof Traversable) {
                    $vars = array();
                    foreach ($var as $k => $v)
                        $vars[$k] = $v;
                } else
                    $vars = get_object_vars($var);

                // related
                foreach ($var->relations() as $key => $related) {
                    if ($var->hasRelated($key)) {
                        $vars[$key] = $var->$key;
                    }
                }

                return '{' .
                join(',', array_map(array('WJSON', 'nameValue'),
                    array_keys($vars),
                    array_values($vars)))
                . '}';

            default:
                return '';
        }
    }

}
