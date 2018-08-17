<?php
namespace app\wechat\controller;
use app\common\controller\Controller;

class Base extends controller {	
	protected $appid = ''; //AppID(应用ID)
    protected $token = ''; //微信后台填写的TOKEN
    protected $crypt = ''; //消息加密KEY（EncodingAESKey）
    protected $appSecret='';
  //   Public function _initialize(){
		// // $this->appid = C('APPID');//wxa624d75189425041
		// // $this->token = C('TOKEN');
		// // $this->appSecret = C('APPSECRET');
		// // $this->crypt = C('KEY');
  //       $this->appid = 'wxa624d75189425041';//wxa624d75189425041
  //       $this->token = 'P07H89dBC7aR7tbAWg7mlemZwBgtqfdh';
  //       $this->appSecret = '77f31d8ef661e2e9ef73b0585f7b0522';
  //       $this->crypt = 'JzHfjop02w9xy7OIrRWAlV4hOKZx02PHj0CKZ4LpDCV';
		// if(!S('accesstoken')){
  //           $url='https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$this->appid.'&secret='.$this->appSecret;
  //           $result=$this->curlpost($url);
  //           $jsoninfo = json_decode($result, true);
  //           $access_token = $jsoninfo["access_token"];

  //           S('accesstoken',$access_token,7100);
  //       }
		// //dump(S('accesstoken'));exit;
  //   }
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