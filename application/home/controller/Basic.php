<?php
namespace app\home\controller;
use app\common\controller\Controller;
//use app\wechat\stores\service\WechatService

class Basic extends controller {	
	protected $appid = ''; //AppID(应用ID)
    protected $token = ''; //微信后台填写的TOKEN
    protected $crypt = ''; //消息加密KEY（EncodingAESKey）
    protected $appSecret='';
    //$wechat = WechatService::WeChatReceive();
    Public function _initialize(){
        //$this->openid =$wechat->getOpenid();
		// $this->appid = C('APPID');//wxa624d75189425041
		// $this->token = C('TOKEN');
		// $this->appSecret = C('APPSECRET');
		// $this->crypt = C('KEY');
        // dump(C('APPID'));
        // dump(C('TOKEN'));
        $this->appid = 'wxd72bc052189b053b';//wxa624d75189425041
        $this->token = 'MTr8FBFWsZMs7hF';
        $this->appSecret = '04b059b64b2302c52c5272f7b2a4ee04';
        $this->crypt = 'gZYjgDNjl3tAZ0lQkRVi8H80S26fhzO5TmrzI7yXitF';
		if(!S('accesstoken')){
            $url='https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$this->appid.'&secret='.$this->appSecret;
            $result=$this->curlpost($url);
            $jsoninfo = json_decode($result, true);
            $access_token = $jsoninfo["access_token"];

            S('accesstoken',$access_token,7100);
        }
	    //dump(S('accesstoken'));exit;
    }
    public function curlpost($url,$data){
    // 二维码尺寸255*255
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }


	
}