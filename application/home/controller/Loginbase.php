<?php
namespace app\home\controller;
use app\home\controller\Basic;
class Loginbase extends Basic{
	Public function _initialize(){
    header("Content-Type:text/html;charset=UTF-8"); 
    parent::_initialize();/**/ 
     //session('user_auth_mem',null);
     if(!session('user_auth_mem')){
		if($_GET['state']=='123'){
        //网页获取openid第二步，获取用户openid
            $codeurl='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$this->appid.'&secret='.$this->appSecret.'&code='.$_GET['code'].'&grant_type=authorization_code';
            $resulta=$this->curlpost($codeurl);
            $openidarr= json_decode($resulta, true);
        //第二步结束，返回数据$openidarr
            $openid= $openidarr["openid"];
            session('open_id',$openid);
            $where['open_id']=$openid;
            $userlist = model('Home_member')->where($where)->find();
            if($userlist){				
				session('user_auth_mem',$userlist);
				session('wx_uid', $userlist->id);
            }else{
                // 第三步end
                $userinfourl='https://api.weixin.qq.com/sns/userinfo?access_token='.$openidarr['access_token'].'&openid='.$openid.'&lang=zh_CN';
                $resultd=$this->curlpost($userinfourl);
                $openidarr= json_decode($resultd, true);
                // 第四步end，将用户写入数据库，并进行登录
                $where['open_id']=$openidarr['openid'];
                $where['contact_name']=$openidarr['nickname'];
                $where['avatar']=$openidarr['headimgurl'];
                $where['create_time']=time();
				$where['status']= 1;
                $id = model('Home_member')->add($where);
                session('user_auth_mem', $openidarr);
                session('wx_uid', $id);
                unset($where);
            }
           unset($userlist);
        }else{
            //$url=urlencode("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
            //dump("https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$this->appid."&redirect_uri=".$url."&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect");exit;
            //dump("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);exit;
            //header("Location: https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$this->appid."&redirect_uri=".$url."&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect");
            //exit;
        }
		
        }

	}
 
   

}