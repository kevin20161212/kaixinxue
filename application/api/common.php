<?php

/**
 * 系统解密方法
 * @param  string $data 要解密的字符串 （必须是think_encrypt方法加密的字符串）
 * @param  string $key  加密密钥
 */
function think_decrypt($data, $key = ''){
	$key    = md5(empty($key) ? 'ThinkPHP' : $key);
	$data   = str_replace(array('-','_'),array('+','/'),$data);
	$mod4   = strlen($data) % 4;
	if ($mod4) {
		$data .= substr('====', $mod4);
	}
	$data   = base64_decode($data);
	$expire = substr($data,0,10);
	$data   = substr($data,10);

	if($expire > 0 && $expire < time()) {
		return '';
	}
	$x      = 0;
	$len    = strlen($data);
	$l      = strlen($key);
	$char   = $str = '';

	for ($i = 0; $i < $len; $i++) {
		if ($x == $l) $x = 0;
		$char .= substr($key, $x, 1);
		$x++;
	}

	for ($i = 0; $i < $len; $i++) {
		if (ord(substr($data, $i, 1))<ord(substr($char, $i, 1))) {
			$str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
		}else{
			$str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
		}
	}
	return base64_decode($str);
}

function getUserInfo($token,$fields){
	$str = think_decrypt($token);
	if(empty($str)){
		return false;
	}
	$result = db('app_user')->where(['token'=>$token]);
	if(!empty($fields)){
		$fields_arr = $fields;
		if(!is_array($fields)){
			$fields_arr = explode(",", $fields);	
		}
		if(!in_array("uid", $fields_arr)){
			$fields_arr[] = 'uid';
		}
		if(!in_array("rand", $fields_arr)){
			$fields_arr[] = 'rand';
		}
		$result = $result->field($fields_arr);
	}
	$result = $result->find();
	if(md5($result['uid'] . $result['rand']) != $str){
		return false;
	}
	if(!empty($fields)){
		return $result;
	}
	return $result['uid'];
}

/**
 * 手机号验证
 */
function is_mobile($mobile){
	if(empty($mobile)){
		return false;
	}
	return preg_match('/^1[345789]\d{9}$/', $mobile) ? true : false;
}