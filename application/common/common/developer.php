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

//开发者二次开发公共函数统一写入此文件，不要修改function.php以便于系统升级。
function authen_type($authen){
    //dump($authen);exit;
    switch ($authen) {
        case '0':
            return "<span class='btn-danger' style='width:50px;border-radius:15px;display:inline-block;text-align:center'>未审核</span>";
            break;
        case '1':
            return "<span class='btn-success'  style='width:50px;border-radius:15px;display:inline-block;text-align:center'>通过</span>";
            break;
        case '2':
            return "<span class='btn-info'  style='width:50px;border-radius:15px;display:inline-block;text-align:center'>未通过</span>";
            break;
        default:
            # code...
            break;
    }
}


function tender_type($authen){
    //dump($authen);exit;
    switch ($authen) {
        case '0':
            return "<span class='btn-danger' style='width:80px;border-radius:15px;display:inline-block;text-align:center'>招标公告</span>";
            break;
        case '1':
            return "<span class='btn-success'  style='width:80px;border-radius:15px;display:inline-block;text-align:center'>中标公告</span>";
            break;
        // case '2':
        //     return "<span class='btn-info'  style='width:50px;border-radius:15px;display:inline-block;text-align:center'>未通过</span>";
        //     break;
        default:
            # code...
            break;
    }
}