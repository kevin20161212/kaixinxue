<?php
namespace app\wechat\controller;
use app\wechat\controller\Base;
class Loginbase extends Base{
	// Public function _initialize(){
 //    header("Content-Type:text/html;charset=UTF-8"); 
 //    parent::_initialize();/**/ 
 //    // session('users_auth',null);
 //    // dump($_GET);
 //     if(!session('user_auth_mem')){
	// 	if($_GET['state']=='123'){
 //        //网页获取openid第二步，获取用户openid
 //            $codeurl='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$this->appid.'&secret='.$this->appSecret.'&code='.$_GET['code'].'&grant_type=authorization_code';
 //            $resulta=$this->curlpost($codeurl);
 //            $openidarr= json_decode($resulta, true);

 //        //第二步结束，返回数据$openidarr
 //            $openid= $openidarr["openid"];
 //                $where['openid']=$openid;
 //                $userlist=M('zbk_wx_users')->where($where)->find();
                
 //                if($userlist){
 //                    //用户以在数据库列表中，直接登录
 //     //                if($userlist['type']==2){
	// 				// 	$this->error('您的微信已经申请注册成为维修员了');
	// 				// }					
	// 				session('user_auth_mem',$userlist);
 //                }else{
 //                    // 第三步end
 //                    $userinfourl='https://api.weixin.qq.com/sns/userinfo?access_token='.$openidarr['access_token'].'&openid='.$openid.'&lang=zh_CN';
 //                    $resultd=$this->curlpost($userinfourl);
 //                    $openidarr= json_decode($resultd, true);
 //                // dump($openidarr);
 //                    // 第四步end，将用户写入数据库，并进行登录
 //                    $where['openid']=$openidarr['openid'];
 //                    $where['nickname']=$openidarr['nickname'];
 //                    $where['username']=$openidarr['openid'];
 //                    $where['header_img']=$openidarr['headimgurl'];
 //                    // $where['address']=$openidarr['country'].$openidarr['province'].$openidarr['city'];
 //                    $where['time']=time();
 //                    $where['status']= 0;
	// 				$where['type']= 1;
 //                    // $where['reg_ip'] = $_SERVER["REMOTE_ADDR"];
 //                    // $where['reg_type']  = "授权登录";
 //                    // session('users_auth',$openidarr);
 //                    $userlist = M('zbk_wx_users')->data($where)->add();
 //                    $openidarr['id']=$userlist;
 //                    $openidarr['nickname']=$openidarr['nickname'];
 //                    $openidarr['header_img']=$openidarr['headimgurl'];
 //                    session('user_auth_mem', $openidarr);
 //                    unset($where);
 //                }
 //               unset($userlist);
 //               // exit;
 //            }else{
 //                $url=urlencode("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
 //                dump("https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$this->appid."&redirect_uri=".$url."&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect");exit;
 //                //header("Location: https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$this->appid."&redirect_uri=".$url."&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect");
 //                exit;
 //            }
		
 //        }

	// }
 
   

}