<?php
// +----------------------------------------------------------------------
// | 有范科技
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://www.youfai.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 有范科技 <youfai@youfai.cn>
// +----------------------------------------------------------------------
// | 版权申明：YFTHINK不是一个自由软件，是有范科技官方推出的商业源码，严禁在未经许可的情况下
// | 拷贝、复制、传播、使用山东有范科技的任意代码，如有违反，请立即删除，否则您将面临承担相应
// | 法律责任的风险。如果需要取得官方授权，请联系官方http://www.youfai.cn
// +----------------------------------------------------------------------
namespace app\WeChat\controller;
use think\Controller;
use think\Request;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Madd extends Controller
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index(){
        dump(1324);exit;
        $district = model('HomeArea')->lists();
        $info_type = ['公告','预告','变更','中标','国土','拟在建项目','vip项目'];
        $select_time = ['近一周'=>strtotime('-7 days'),'近一月'=>strtotime("-1 month"),'近三月'=>strtotime("-3 month"),'近一年'=>strtotime("-1 year")];
        $this->assign('info_type',$info_type);
        $this->assign('select_time',$select_time);
        $this->assign('data',$district);
        return view('mobile/search');
    }
    public function search(){
        $data = input('param.');
        $page = input('param.page');
        dump($data);
        return view('mobile/searchover');
    }

    public function detail(){
        return view('mobile/xq');
    }

    public function push_list(){
        return view('mobile/newshistory');
    }
}
