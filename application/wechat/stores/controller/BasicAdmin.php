<?php

// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2017 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.ctolog.com
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

namespace app\wechat\stores\controller;

use  app\wechat\stores\service\DataService;
use think\Controller;
use think\Db;
use think\db\Query;

/**
 * 后台权限基础控制器
 * Class BasicAdmin
 * @package controller
 */
class BasicAdmin extends Controller
{
 /**
     * 页面标题
     * @var string
     */
    public $title;

    /**
     * 默认操作数据表
     * @var string
     */
    public $table;
    protected function _initialize()
    {
        // 登录检测
        // \think\Hook::add('appp_init','app\\admin\\behavior\\InitConfig');
        // \think\Hook::listen('appp_init');
        // dump(12345);exit;
        // if (!is_login()) {
        //     //还没登录跳转到登录页面
        //     $this->redirect('admin/Login/login');
        // }

        // 获取当前访问地址
        $current_url = request()->module() . '/' . request()->controller() . '/' . request()->action();

        // 权限检测，首页不需要权限
        // if ('admin/index/index' !== strtolower($current_url)) {
        //     if (!model('admin/Group')->checkMenuAuth()) {
        //         $this->error('权限不足！', url('admin/Index/index'));
        //     }
        //     $this->assign('_admin_tabs', config('admin_tabs'));
        // }
        // dump(config('admin_tabs'));exit;
        // 获取所有导航
        $module_object = model('admin/Module');
        
        $menu_list     = $module_object->getAllMenu();

        $this->assign('_menu_list', $menu_list); // 后台主菜单
         
        // 获取左侧导航
        if (!config('admin_tabs')) {
            $parent_menu_list = $module_object->getParentMenu();
            // dump($parent_menu_list);exit;
            if (isset($parent_menu_list[0]['top'])) {
                $current_menu_list = $menu_list[$parent_menu_list[0]['top']];
            } else {
                $current_menu_list = $menu_list[ucfirst(request()->module())];
            }
            // dump($current_menu_list);exit;
            $this->assign('_current_menu_list', $current_menu_list); // 后台左侧菜单
            $this->assign('_parent_menu_list', $parent_menu_list); // 后台父级菜单
        }
    }

    /**
     * 用户登录检测
     * @author <youfai@youfai.cn>
     */
    protected function is_login()
    {
        //用户登录检测
        $uid = is_login();
        if ($uid) {
            return $uid;
        } else {
            if (request()->isAjax()) {
                $this->error('请先登录系统', url('admin/Login/login', '', true, true), array('login' => 1));
            } else {
                redirect(url('admin/Login/login', '', true, true));
            }
        }
    }
    /**
     * 表单默认操作
     * @param Query $dbQuery 数据库查询对象
     * @param string $tplFile 显示模板名字
     * @param string $pkField 更新主键规则
     * @param array $where 查询规则
     * @param array $extendData 扩展数据
     * @return array|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\Exception
     */
    protected function _form($dbQuery = null, $tplFile = '', $pkField = '', $where = [], $extendData = [])
    {   //dump($where);exit;
        $db = is_null($dbQuery) ? Db::name($this->table) : (is_string($dbQuery) ? Db::name($dbQuery) : $dbQuery);
        $pk = empty($pkField) ? ($db->getPk() ? $db->getPk() : 'id') : $pkField;
        $pkValue = $this->request->request($pk, isset($where[$pk]) ? $where[$pk] : (isset($extendData[$pk]) ? $extendData[$pk] : null));
        // 非POST请求, 获取数据并显示表单页面
        if (!$this->request->isPost()) {
            $vo = ($pkValue !== null) ? array_merge((array)$db->where($pk, $pkValue)->where($where)->find(), $extendData) : $extendData;
            if (false !== $this->_callback('_form_filter', $vo, [])) {
                empty($this->title) || $this->assign('title', $this->title);
               $this->assign('vos',$vo);

                return $this->fetch($tplFile);
            }
            return $vo;
        }
        // POST请求, 数据自动存库
        $data = array_merge($this->request->post(), $extendData);
        if (false !== $this->_callback('_form_filter', $data, [])) {
            $result = DataService::save($db, $data, $pk, $where);
            if (false !== $this->_callback('_form_result', $result, $data)) {
                if ($result !== false) {
                    $this->success('恭喜, 数据保存成功!', '');
                }
                $this->error('数据保存失败, 请稍候再试!');
            }
        }
    }

    /**
     * 列表集成处理方法
     * @param Query $dbQuery 数据库查询对象
     * @param bool $isPage 是启用分页
     * @param bool $isDisplay 是否直接输出显示
     * @param bool $total 总记录数
     * @param array $result 结果集
     * @return array|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\Exception
     */
    protected function _list($dbQuery = null, $isPage = true, $isDisplay = true, $total = false, $result = [])
    {
        $db = is_null($dbQuery) ? Db::name($this->table) : (is_string($dbQuery) ? Db::name($dbQuery) : $dbQuery);
        // 列表排序默认处理
        if ($this->request->isPost() && $this->request->post('action') === 'resort') {
            foreach ($this->request->post() as $key => $value) {
                if (preg_match('/^_\d{1,}$/', $key) && preg_match('/^\d{1,}$/', $value)) {
                    list($where, $update) = [['id' => trim($key, '_')], ['sort' => $value]];
                    if (false === Db::table($db->getTable())->where($where)->update($update)) {
                        $this->error('列表排序失败, 请稍候再试');
                    }
                }
            }
            $this->success('列表排序成功, 正在刷新列表', '');
        }
        // 列表数据查询与显示
        if (null === $db->getOptions('order')) {
            in_array('sort', $db->getTableFields($db->getTable())) && $db->order('sort asc');
        }
        if ($isPage) {
            $rows = intval($this->request->get('rows', cookie('page-rows')));
            cookie('page-rows', $rows = $rows >= 10 ? $rows : 20);
            // 分页数据处理
            $query = $this->request->get();
            $page = $db->paginate($rows, $total, ['query' => $query]);
            if (($totalNum = $page->total()) > 0) {
                list($rowHTML, $curPage, $maxNum) = [[], $page->currentPage(), $page->lastPage()];
                foreach ([10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200] as $num) {
                    list($query['rows'], $query['page']) = [$num, '1'];
                    $url = url('@admin') . '#' . $this->request->baseUrl() . '?' . http_build_query($query);
                    $rowHTML[] = "<option data-url='{$url}' " . ($rows === $num ? 'selected' : '') . " value='{$num}'>{$num}</option>";
                }
                list($pattern, $replacement) = [['|href="(.*?)"|', '|pagination|'], ['data-open="$1"', 'pagination pull-right']];
                $html = "<span class='pagination-trigger nowrap'>共 {$totalNum} 条记录，每页显示 <select data-auto-none>" . join('', $rowHTML) . "</select> 条，共 {$maxNum} 页当前显示第 {$curPage} 页。</span>";
                list($result['total'], $result['list'], $result['page']) = [$totalNum, $page->all(), $html . preg_replace($pattern, $replacement, $page->render())];
            } else {
                list($result['total'], $result['list'], $result['page']) = [$totalNum, $page->all(), $page->render()];
            }
        } else {
            $result['list'] = $db->select();
        }
        if (false !== $this->_callback('_data_filter', $result['list'], []) && $isDisplay) {
            !empty($this->title) && $this->assign('title', $this->title);
            return $this->fetch('', $result);
        }
        return $result;
    }

    /**
     * 当前对象回调成员方法
     * @param string $method
     * @param array|bool $data1
     * @param array|bool $data2
     * @return bool
     */
    protected function _callback($method, &$data1, $data2)
    {
        foreach ([$method, "_" . $this->request->action() . "{$method}"] as $_method) {
            if (method_exists($this, $_method) && false === $this->$_method($data1, $data2)) {
                return false;
            }
        }
        return true;
    }
}
