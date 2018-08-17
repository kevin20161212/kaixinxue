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
namespace app\admin\controller;

/**
 * 后台默认控制器
 * @author <youfai@youfai.cn>
 */
class Ceshi 
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index(){
		$file = './public/qiushibaike.sql';
		$_sql = file_get_contents($file);
		$_arr = explode(';', $_sql);
		foreach($_arr as $k=>$v){
			echo $v;
			die;
		}
		
	}

    /**
     * 删除缓存
     * @author <youfai@youfai.cn>
     */
    public function removeRuntime()
    {
        $file   = new \yfthink\File();
        $result = $file->del_dir(RUNTIME_PATH);
        if ($result) {
            $this->success("缓存清理成功");
        } else {
            $this->error("缓存清理失败");
        }
    }
}
