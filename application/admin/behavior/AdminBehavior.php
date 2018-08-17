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
namespace app\admin\behavior;
defined('THINK_PATH') or exit();

/**
 * 根据不同情况读取数据库的配置信息并与本地配置合并
 * 本行为扩展很重要会影响核心系统前后台、模块功能及模版主题使用
 * 如非必要或者并不是十分了解系统架构不推荐更改
 * @author <youfai@youfai.cn>
 */
class AdminBehavior
{
    /**
     * 行为扩展的执行入口必须是run
     * @author <youfai@youfai.cn>
     */
    public function run(&$content)
    {	//dump($content);
        //dump(123134);exit;
        $index = new \app\home\controller\Index;
        dump($index);exit;
        $index->index();
        //action('Home/index/index');
    }
}
