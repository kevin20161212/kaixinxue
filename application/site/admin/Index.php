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

namespace app\site\Admin;
use app\admin\controller\Admin;
use yfthink\Page;
use yfthink\Tree;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Index extends Admin
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index(){
    	// dump(APP_DIR);exit;
    	$path = APP_DIR .request()->module() .'/siteConfig/';
		$dirs = array_map('basename', glob($path. '*'));
        foreach ($dirs as $dir) {
            $config_file = $path.$dir;
            if (is_file($config_file)) {
                $config[]  = include $config_file;
            }
            file_put_contents(APP_DIR .request()->module() .'/siteConfig/4.php', '<?php'.PHP_EOL.'return '.var_export(include $config_file,true).';');
            // exit;
        }
        dump($config);

	}
	
}
