-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 11 日 09:06
-- 服务器版本: 5.6.21-log
-- PHP 版本: 5.5.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `youfan_youfan`
--

-- --------------------------------------------------------

--
-- 表的结构 `yf_addon_link`
--

CREATE TABLE IF NOT EXISTS `yf_addon_link` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `logo` varchar(255) NOT NULL DEFAULT '' COMMENT 'logo',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '链接',
  `type` int(3) unsigned NOT NULL DEFAULT '0' COMMENT '类型',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `yf_addon_link`
--

INSERT INTO `yf_addon_link` (`id`, `title`, `logo`, `url`, `type`, `create_time`, `update_time`, `sort`, `status`) VALUES
(1, '青云', '/addon/Link/img/qingcloud.png', 'http://qingcloud.com', 2, 1481175884, 1481175884, 0, 1),
(2, '氪空间', '/addon/Link/img/krspace.png', 'http://krspace.cn', 2, 1481175884, 1481175884, 0, 1),
(3, '阿里云', '/addon/Link/img/aliyun.png', 'http://aliyun.com', 2, 1481175884, 1481175884, 0, 1),
(4, 'Coding', '/addon/Link/img/coding.png', 'http://coding.net', 2, 1481175884, 1481175884, 0, 1),
(5, '七牛云', '/addon/Link/img/qiniu.png', 'http://qiniu.com', 2, 1481175884, 1481175884, 0, 1),
(6, 'Ucloud', '/addon/Link/img/ucloud.png', 'http://ucloud.cn', 2, 1481175884, 1481175884, 0, 1),
(7, '开源中国', '/addon/Link/img/oschina.png', 'http://oschina.net', 2, 1481175884, 1481175884, 0, 1),
(8, '极光推送', '/addon/Link/img/jiguang.png', 'http://jiguang.cn', 2, 1481175884, 1481175884, 0, 1),
(9, 'Bootstrap中文网', '', 'http://www.bootcss.com', 1, 1481175884, 1481175884, 0, 1),
(10, '猿团', '', 'http://www.yuantuan.com', 1, 1481175884, 1481175884, 0, 1),
(11, '36氪', '', 'http://36kr.com', 1, 1481175884, 1481175884, 0, 1),
(12, '程序员客栈', '', 'http://www.proginn.com', 1, 1481175884, 1481175884, 0, 1),
(13, 'Leangoo敏捷协作工具', '', 'http://www.leangoo.com', 1, 1481175884, 1481175884, 0, 1),
(14, '百度软件开放平台', '', 'http://open.rj.baidu.com', 1, 1481175884, 1481175884, 0, 1),
(15, '快递100', '', 'http://kuaidi100.com', 1, 1481175884, 1481175884, 0, 1),
(16, 'Framework7', '', 'http://framework7.taobao.org', 1, 1481175884, 1481175884, 0, 1),
(17, 'Cordova', '', 'http://cordova.apache.org', 1, 1481175884, 1481175884, 0, 1),
(18, 'ThinkPHP', '', 'http://thinkphp.cn', 1, 1481175884, 1481175884, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_access`
--

CREATE TABLE IF NOT EXISTS `yf_admin_access` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `uid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `group` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '管理员用户组',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台管理员与用户组对应关系表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `yf_admin_access`
--

INSERT INTO `yf_admin_access` (`id`, `uid`, `group`, `create_time`, `update_time`, `sort`, `status`) VALUES
(1, 1, 1, 1438651748, 1438651748, 0, 1),
(2, 3, 3, 1519978119, 1519978563, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_addon`
--

CREATE TABLE IF NOT EXISTS `yf_admin_addon` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(32) DEFAULT NULL COMMENT '插件名或标识',
  `title` varchar(32) NOT NULL DEFAULT '' COMMENT '中文名',
  `description` text NOT NULL COMMENT '插件描述',
  `config` text COMMENT '配置',
  `author` varchar(32) NOT NULL DEFAULT '' COMMENT '作者',
  `version` varchar(8) NOT NULL DEFAULT '' COMMENT '版本号',
  `adminlist` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '是否有后台列表',
  `type` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '插件类型',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '安装时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='插件表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `yf_admin_addon`
--

INSERT INTO `yf_admin_addon` (`id`, `name`, `title`, `description`, `config`, `author`, `version`, `adminlist`, `type`, `create_time`, `update_time`, `sort`, `status`) VALUES
(1, 'Frog', '青蛙挂件', '有什么能帮您的么？', '{"status":"1","frog_say":"\\u6253100\\u5143\\u5230\\u6211\\u652f\\u4ed8\\u5b9d\\u6211\\u4eec\\u8fd8\\u662f\\u597d\\u670b\\u53cb~"}', '@', '1.0.0', 0, 0, 1484561439, 1484561439, 0, 1),
(2, 'Link', '友情链接插件', '友情链接插件', 'null', '@', '1.0.0', 1, 0, 1484561441, 1484561441, 0, 1),
(3, 'RocketToTop', '小火箭返回顶部', '小火箭返回顶部', '{"status":"1"}', '@', '1.0.0', 0, 0, 1484561441, 1484561441, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_config`
--

CREATE TABLE IF NOT EXISTS `yf_admin_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `title` varchar(32) NOT NULL DEFAULT '' COMMENT '配置标题',
  `name` varchar(32) DEFAULT NULL COMMENT '配置名称',
  `value` text NOT NULL COMMENT '配置值',
  `group` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '配置分组',
  `type` varchar(16) NOT NULL DEFAULT '' COMMENT '配置类型',
  `options` varchar(255) NOT NULL DEFAULT '' COMMENT '配置额外值',
  `tip` varchar(100) NOT NULL DEFAULT '' COMMENT '配置说明',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='系统配置表' AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `yf_admin_config`
--

INSERT INTO `yf_admin_config` (`id`, `title`, `name`, `value`, `group`, `type`, `options`, `tip`, `create_time`, `update_time`, `sort`, `status`) VALUES
(1, '站点开关', 'TOGGLE_WEB_SITE', '1', 1, 'toggle', '0:关闭\r\n1:开启', '站点关闭后将不能访问', 1378898976, 1513928810, 1, 1),
(2, '网站标题', 'WEB_SITE_TITLE', '有范科技', 1, 'text', '', '网站标题前台显示标题', 1378898976, 1379235274, 2, 1),
(3, '网站口号', 'WEB_SITE_SLOGAN', '', 1, 'text', '', '网站口号、宣传标语、一句话介绍', 1434081649, 1513684908, 3, 1),
(4, '网站LOGO', 'WEB_SITE_LOGO', '3', 1, 'picture', '', '网站LOGO', 1407003397, 1513684585, 4, 1),
(5, '网站反色LOGO', 'WEB_SITE_LOGO_INVERSE', '', 1, 'picture', '', '匹配深色背景上的LOGO', 1476700797, 1476700797, 5, 1),
(6, '网站描述', 'WEB_SITE_DESCRIPTION', '', 1, 'textarea', '', '网站搜索引擎描述', 1378898976, 1379235841, 6, 1),
(7, '网站关键字', 'WEB_SITE_KEYWORD', '微信小程序开发、微信应用号开发、', 1, 'textarea', '', '网站搜索引擎关键字', 1378898976, 1381390100, 7, 1),
(8, '版权信息', 'WEB_SITE_COPYRIGHT', 'Copyright ©山东有范网络科技有限公司 All rights reserved.', 1, 'text', '', '设置在网站底部显示的版权信息，如“版权所有 © 2014-2015 科斯克网络科技”', 1406991855, 1406992583, 8, 1),
(9, '网站备案号', 'WEB_SITE_ICP', '鲁ICP备1502009号', 1, 'text', '', '设置在网站底部显示的备案号，如“苏ICP备1502009号"', 1378900335, 1415983236, 9, 1),
(10, '站点统计', 'WEB_SITE_STATISTICS', '', 1, 'textarea', '', '支持百度、Google、cnzz等所有Javascript的统计代码', 1378900335, 1415983236, 10, 1),
(11, '公司名称', 'COMPANY_TITLE', '山东有范网络科技有限公司', 3, 'text', '', '', 1481014715, 1481014715, 1, 1),
(12, '公司地址', 'COMPANY_ADDRESS', '济南市历下区盛景广场B座1502', 3, 'text', '', '', 1481014768, 1481014768, 2, 1),
(13, '公司邮箱', 'COMPANY_EMAIL', 'youfai@youfai.cn', 3, 'text', '', '', 1481014914, 1481014914, 3, 1),
(14, '公司电话', 'COMPANY_PHONE', '1330531', 3, 'text', '', '', 1481014961, 1481014961, 4, 1),
(15, '公司QQ', 'COMPANY_QQ', '280962430', 3, 'text', '', '', 1481015016, 1481015016, 5, 1),
(16, '公司QQ群', 'COMPANY_QQQUN', '', 3, 'text', '', '', 1481015198, 1481015198, 6, 1),
(17, '网站二维码', 'QR_CODE', '', 3, 'picture', '', '', 1481009623, 1481009623, 7, 1),
(18, 'IOS二维码', 'QR_IOS', '', 3, 'picture', '', '', 1481009623, 1481009623, 8, 1),
(19, '安卓二维码', 'QR_ANDROID', '', 3, 'picture', '', '', 1481009921, 1481009921, 9, 1),
(20, '微信二维码', 'QR_WEIXIN', '', 3, 'picture', '', '', 1481009959, 1481009959, 10, 1),
(21, '文件上传大小', 'UPLOAD_FILE_SIZE', '2', 5, 'num', '', '文件上传大小单位：MB', 1428681031, 1428681031, 1, 1),
(22, '图片上传大小', 'UPLOAD_IMAGE_SIZE', '0.5', 5, 'num', '', '图片上传大小单位：MB', 1428681071, 1428681071, 2, 1),
(23, '后台多标签', 'ADMIN_TABS', '0', 5, 'toggle', '0:关闭\r\n1:开启', '', 1453445526, 1453445526, 3, 1),
(24, '分页数量', 'ADMIN_PAGE_ROWS', '10', 5, 'num', '', '分页时每页的记录数', 1434019462, 1434019481, 4, 1),
(25, '后台主题', 'ADMIN_THEME', 'admin', 5, 'select', 'admin:默认主题\r\naliyun:阿里云风格', '后台界面主题', 1436678171, 1436690570, 5, 1),
(26, '导航分组', 'NAV_GROUP_LIST', 'top:顶部导航\r\nmain:主导航\r\nbottom:底部导航\r\nwap_bottom:Wap底部导航', 5, 'array', '', '导航分组', 1458382037, 1458382061, 6, 1),
(27, '配置分组', 'CONFIG_GROUP_LIST', '1:基本\r\n3:扩展\r\n5:系统\r\n7:部署', 5, 'array', '', '配置分组', 1379228036, 1426930700, 7, 1),
(28, '开发模式', 'DEVELOP_MODE', '1', 7, 'toggle', '1:开启\r\n0:关闭', '开发模式下会显示菜单管理、配置管理、数据字典等开发者工具', 1432393583, 1432393583, 1, 1),
(29, '页面Trace', 'APP_TRACE', '0', 7, 'toggle', '0:关闭\r\n1:开启', '是否显示页面Trace信息', 1387165685, 1387165685, 2, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_group`
--

CREATE TABLE IF NOT EXISTS `yf_admin_group` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '部门ID',
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上级部门ID',
  `title` varchar(31) NOT NULL DEFAULT '' COMMENT '部门名称',
  `icon` varchar(31) NOT NULL DEFAULT '' COMMENT '图标',
  `menu_auth` text NOT NULL COMMENT '权限列表',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序（同级有效）',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  `model_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='部门信息表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `yf_admin_group`
--

INSERT INTO `yf_admin_group` (`id`, `pid`, `title`, `icon`, `menu_auth`, `create_time`, `update_time`, `sort`, `status`, `model_name`) VALUES
(1, 0, '超级管理员', '', '', 1426881003, 1427552428, 0, 1, NULL),
(2, 2, '运营', 'fa-star-o', '{"Shop":["1","2","3","4","5","6","7","8","9","10"]}', 1512475752, 1519978516, 0, 1, NULL),
(3, 0, 'yunying', '', '{"Shop":["1","2","3","4","5","6","7","8","9","10"]}', 1519978538, 1519978538, 0, 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_hook`
--

CREATE TABLE IF NOT EXISTS `yf_admin_hook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '钩子ID',
  `name` varchar(32) DEFAULT NULL COMMENT '钩子名称',
  `description` text NOT NULL COMMENT '描述',
  `addons` varchar(255) NOT NULL DEFAULT '' COMMENT '钩子挂载的插件',
  `type` tinyint(4) unsigned NOT NULL DEFAULT '1' COMMENT '类型',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='钩子表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `yf_admin_hook`
--

INSERT INTO `yf_admin_hook` (`id`, `name`, `description`, `addons`, `type`, `create_time`, `update_time`, `status`) VALUES
(1, 'AdminIndex', '后台首页小工具', '后台首页小工具', 1, 1446522155, 1446522155, 1),
(2, 'FormBuilderExtend', 'FormBuilder类型扩展Builder', '', 1, 1447831268, 1447831268, 1),
(3, 'UploadFile', '上传文件钩子', '', 1, 1407681961, 1407681961, 1),
(4, 'PageHeader', '页面header钩子，一般用于加载插件CSS文件和代码', '', 1, 1407681961, 1407681961, 1),
(5, 'PageFooter', '页面footer钩子，一般用于加载插件CSS文件和代码', 'Frog,RocketToTop', 1, 1407681961, 1407681961, 1),
(6, 'CommonHook', '通用钩子，自定义用途，一般用来定制特殊功能', '', 1, 1456147822, 1456147822, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_module`
--

CREATE TABLE IF NOT EXISTS `yf_admin_module` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(31) DEFAULT NULL COMMENT '名称',
  `title` varchar(63) NOT NULL DEFAULT '' COMMENT '标题',
  `logo` varchar(63) NOT NULL DEFAULT '' COMMENT '图片图标',
  `icon` varchar(31) NOT NULL DEFAULT '' COMMENT '字体图标',
  `icon_color` varchar(7) NOT NULL DEFAULT '' COMMENT '字体图标颜色',
  `description` varchar(127) NOT NULL DEFAULT '' COMMENT '描述',
  `developer` varchar(31) NOT NULL DEFAULT '' COMMENT '开发者',
  `version` varchar(7) NOT NULL DEFAULT '' COMMENT '版本',
  `user_nav` text NOT NULL COMMENT '个人中心导航',
  `config` text NOT NULL COMMENT '配置',
  `role_config` text,
  `admin_menu` text NOT NULL COMMENT '菜单节点',
  `role_menu` text,
  `is_system` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否允许卸载',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='模块功能表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `yf_admin_module`
--

INSERT INTO `yf_admin_module` (`id`, `name`, `title`, `logo`, `icon`, `icon_color`, `description`, `developer`, `version`, `user_nav`, `config`, `role_config`, `admin_menu`, `role_menu`, `is_system`, `create_time`, `update_time`, `sort`, `status`) VALUES
(1, 'Admin', '系统', '', 'fa fa-cog', '#3CA6F1', '核心系统', '山东有范网络科技有限公司', '2.0.0', '', '', NULL, '{"1":{"pid":"0","title":"\\u7cfb\\u7edf","icon":"fa fa-cog","level":"system","id":"1"},"2":{"pid":"1","title":"\\u7cfb\\u7edf\\u529f\\u80fd","icon":"fa fa-folder-open-o","id":"2"},"3":{"pid":"2","title":"\\u7cfb\\u7edf\\u8bbe\\u7f6e","icon":"fa fa-wrench","url":"Admin\\/Config\\/group","id":"3"},"4":{"pid":"3","title":"\\u4fee\\u6539\\u8bbe\\u7f6e","url":"Admin\\/Config\\/groupSave","id":"4"},"5":{"pid":"2","title":"\\u5bfc\\u822a\\u7ba1\\u7406","icon":"fa fa-map-signs","url":"Admin\\/Nav\\/index","id":"5"},"6":{"pid":"5","title":"\\u65b0\\u589e","url":"Admin\\/Nav\\/add","id":"6"},"7":{"pid":"5","title":"\\u7f16\\u8f91","url":"Admin\\/Nav\\/edit","id":"7"},"8":{"pid":"5","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Nav\\/setStatus","id":"8"},"9":{"pid":"2","title":"\\u5e7b\\u706f\\u7ba1\\u7406","icon":"fa fa-image","url":"Admin\\/Slider\\/index","id":"9"},"10":{"pid":"9","title":"\\u65b0\\u589e","url":"Admin\\/Slider\\/add","id":"10"},"11":{"pid":"9","title":"\\u7f16\\u8f91","url":"Admin\\/Slider\\/edit","id":"11"},"12":{"pid":"9","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Slider\\/setStatus","id":"12"},"13":{"pid":"2","title":"\\u914d\\u7f6e\\u7ba1\\u7406","icon":"fa fa-cogs","url":"Admin\\/Config\\/index","id":"13"},"14":{"pid":"13","title":"\\u65b0\\u589e","url":"Admin\\/Config\\/add","id":"14"},"15":{"pid":"13","title":"\\u7f16\\u8f91","url":"Admin\\/Config\\/edit","id":"15"},"16":{"pid":"13","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Config\\/setStatus","id":"16"},"17":{"pid":"2","title":"\\u4e0a\\u4f20\\u7ba1\\u7406","icon":"fa fa-upload","url":"Admin\\/Upload\\/index","id":"17"},"18":{"pid":"17","title":"\\u4e0a\\u4f20\\u6587\\u4ef6","url":"Admin\\/Upload\\/upload","id":"18"},"19":{"pid":"17","title":"\\u5220\\u9664\\u6587\\u4ef6","url":"Admin\\/Upload\\/delete","id":"19"},"20":{"pid":"17","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Upload\\/setStatus","id":"20"},"21":{"pid":"17","title":"\\u4e0b\\u8f7d\\u8fdc\\u7a0b\\u56fe\\u7247","url":"Admin\\/Upload\\/downremoteimg","id":"21"},"22":{"pid":"17","title":"\\u6587\\u4ef6\\u6d4f\\u89c8","url":"Admin\\/Upload\\/fileManager","id":"22"},"23":{"pid":"1","title":"\\u7cfb\\u7edf\\u6743\\u9650","icon":"fa fa-folder-open-o","id":"23"},"24":{"pid":"23","title":"\\u7528\\u6237\\u7ba1\\u7406","icon":"fa fa-user","url":"Admin\\/User\\/index","id":"24"},"25":{"pid":"24","title":"\\u65b0\\u589e","url":"Admin\\/User\\/add","id":"25"},"26":{"pid":"24","title":"\\u7f16\\u8f91","url":"Admin\\/User\\/edit","id":"26"},"27":{"pid":"24","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/User\\/setStatus","id":"27"},"28":{"pid":"23","title":"\\u7ba1\\u7406\\u5458\\u7ba1\\u7406","icon":"fa fa-lock","url":"Admin\\/Access\\/index","id":"28"},"29":{"pid":"28","title":"\\u65b0\\u589e","url":"Admin\\/Access\\/add","id":"29"},"30":{"pid":"28","title":"\\u7f16\\u8f91","url":"Admin\\/Access\\/edit","id":"30"},"31":{"pid":"28","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Access\\/setStatus","id":"31"},"32":{"pid":"23","title":"\\u7528\\u6237\\u7ec4\\u7ba1\\u7406","icon":"fa fa-sitemap","url":"Admin\\/Group\\/index","id":"32"},"33":{"pid":"32","title":"\\u65b0\\u589e","url":"Admin\\/Group\\/add","id":"33"},"34":{"pid":"32","title":"\\u7f16\\u8f91","url":"Admin\\/Group\\/edit","id":"34"},"35":{"pid":"32","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Group\\/setStatus","id":"35"},"36":{"pid":"1","title":"\\u6269\\u5c55\\u4e2d\\u5fc3","icon":"fa fa-folder-open-o","id":"36"},"44":{"pid":"36","title":"\\u529f\\u80fd\\u6a21\\u5757","icon":"fa fa-th-large","url":"Admin\\/Module\\/index","id":"44"},"45":{"pid":"44","title":"\\u5b89\\u88c5","url":"Admin\\/Module\\/install","id":"45"},"46":{"pid":"44","title":"\\u5378\\u8f7d","url":"Admin\\/Module\\/uninstall","id":"46"},"47":{"pid":"44","title":"\\u66f4\\u65b0\\u4fe1\\u606f","url":"Admin\\/Module\\/updateInfo","id":"47"},"48":{"pid":"44","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Module\\/setStatus","id":"48"},"49":{"pid":"36","title":"\\u63d2\\u4ef6\\u7ba1\\u7406","icon":"fa fa-th","url":"Admin\\/Addon\\/index","id":"49"},"50":{"pid":"49","title":"\\u5b89\\u88c5","url":"Admin\\/Addon\\/install","id":"50"},"51":{"pid":"49","title":"\\u5378\\u8f7d","url":"Admin\\/Addon\\/uninstall","id":"51"},"52":{"pid":"49","title":"\\u8fd0\\u884c","url":"Admin\\/Addon\\/execute","id":"52"},"53":{"pid":"49","title":"\\u8bbe\\u7f6e","url":"Admin\\/Addon\\/config","id":"53"},"54":{"pid":"49","title":"\\u540e\\u53f0\\u7ba1\\u7406","url":"Admin\\/Addon\\/adminList","id":"54"},"55":{"pid":"54","title":"\\u65b0\\u589e\\u6570\\u636e","url":"Admin\\/Addon\\/adminAdd","id":"55"},"56":{"pid":"54","title":"\\u7f16\\u8f91\\u6570\\u636e","url":"Admin\\/Addon\\/adminEdit","id":"56"},"57":{"pid":"54","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Addon\\/setStatus","id":"57"},"58":{"pid":"36","title":"\\u81ea\\u5b9a\\u4e49\\u9875\\u9762","icon":"fa fa-th","url":"Admin\\/Diypage\\/index","id":"58"},"59":{"pid":"36","title":"\\u5185\\u5bb9\\u7ba1\\u7406","icon":"fa fa-th","url":"Admin\\/Post\\/index","id":"59"}}', '', 1, 1438651748, 1520229968, 0, 1),
(2, 'Shop', '商城模块', '', 'fa fa-flask', '#F9B440', '商城模块模块', '山东有范网络科技有限公司', '1.6.2', '{"center":[{"title":"\\u6d4b\\u8bd5\\u5bfc\\u822a","icon":"fa fa-flask","url":"Shop\\/Index\\/index","color":"#398CD2"}],"main":[{"title":"\\u6d4b\\u8bd5\\u5bfc\\u822a","icon":"fa fa-flask","url":"Shop\\/Index\\/index"}]}', '{"group":{"type":"group","options":{"Base":{"title":"\\u57fa\\u672c","options":{"title":{"title":"\\u6a21\\u5757\\u540d\\u79f0","type":"text","value":"","tip":"\\u7528\\u4e8e\\u81ea\\u5b9a\\u4e49\\u6a21\\u5757\\u540d\\u79f0","is_dev":"1"},"logo":{"title":"\\u6a21\\u5757logo","type":"picture","value":"","tip":"\\u7528\\u4e8e\\u81ea\\u5b9a\\u4e49\\u6a21\\u5757logo","is_dev":"1"}}},"Wexin":{"title":"\\u5e93\\u5b58\\u914d\\u7f6e","options":{"WeixinKey":{"title":"\\u5fae\\u4fe1APPKEY\\uff1a","type":"text","value":"","tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/open.weixin.qq.com\\/"},"WeixinSecret":{"title":"\\u5fae\\u4fe1APPSECRET\\uff1a","type":"text","value":"","tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/open.weixin.qq.com\\/"}}},"Qq":{"title":"\\u53c2\\u6570","options":{"QqKey":{"title":"QQ\\u4e92\\u8054APPKEY\\uff1a","type":"text","value":"","tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/connect.qq.com"},"QqSecret":{"title":"QQ\\u4e92\\u8054APPSECRET\\uff1a","type":"text","value":"","tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/connect.qq.com"}}},"Sina":{"title":"\\u8be6\\u60c5","options":{"SinaKey":{"title":"\\u65b0\\u6d6aAPPKEY\\uff1a","type":"text","value":"","tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/open.weibo.com\\/"},"SinaSecret":{"title":"\\u65b0\\u6d6aAPPSECRET\\uff1a","type":"text","value":"","tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/open.weibo.com\\/"}}},"Renren":{"title":"\\u8d2d\\u4e70\\u6743\\u9650","options":{"RenrenKey":{"title":"\\u4eba\\u4ebaAPPKEY\\uff1a","type":"text","value":"","tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/dev.renren.com\\/"},"RenrenSecret":{"title":"\\u4eba\\u4ebaAPPSECRET\\uff1a","type":"text","value":"","tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/dev.renren.com\\/"}}},"Github":{"title":"\\u8425\\u9500\\u6743\\u9650","options":{"GithubKey":{"title":"GithubAPPKEY\\uff1a","type":"text","value":"","tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttps:\\/\\/github.com\\/settings\\/applications"},"GithubSecret":{"title":"GithubAPPSECRET\\uff1a","type":"text","value":"","tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttps:\\/\\/github.com\\/settings\\/applications"}}}}}}', '{"Store":{"group":{"type":"group","options":{"Base":{"title":"\\u57fa\\u672c","options":{"title":{"title":"\\u6a21\\u5757\\u540d\\u79f0","type":"text","value":null,"tip":"\\u7528\\u4e8e\\u81ea\\u5b9a\\u4e49\\u6a21\\u5757\\u540d\\u79f0","is_dev":"1"},"logo":{"title":"\\u6a21\\u5757logo","type":"picture","value":null,"tip":"\\u7528\\u4e8e\\u81ea\\u5b9a\\u4e49\\u6a21\\u5757logo","is_dev":"1"},"3435eftrde":{"title":"sdfsfd","type":"price","value":null,"tip":"sfsfs","is_dev":0,"sort":"sgdsf","options":"sdfdsf"},"DSF":{"title":"\\u4ef7\\u683c","type":"num","value":null,"tip":"\\u5e1d\\u56fd\\u996d\\u5e97\\u8428\\u82ac\\u5927\\u4e8b","is_dev":0,"sort":"","options":""}}},"Wexin":{"title":"\\u5e93\\u5b58\\u914d\\u7f6e","options":{"WeixinKey":{"title":"\\u5fae\\u4fe1APPKEY\\uff1a","type":"text","value":null,"tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/open.weixin.qq.com\\/"},"WeixinSecret":{"title":"\\u5fae\\u4fe1APPSECRET\\uff1a","type":"text","value":null,"tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/open.weixin.qq.com\\/"}}},"Qq":{"title":"\\u53c2\\u6570","options":{"QqKey":{"title":"QQ\\u4e92\\u8054APPKEY\\uff1a","type":"text","value":null,"tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/connect.qq.com"},"QqSecret":{"title":"QQ\\u4e92\\u8054APPSECRET\\uff1a","type":"text","value":null,"tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/connect.qq.com"},"ABC":{"title":"\\u5b89\\u5b89","type":"num","value":"987987","tip":"\\u6765\\u4e86","is_dev":0,"sort":"","options":""}}},"Sina":{"title":"\\u8be6\\u60c5","options":{"SinaKey":{"title":"\\u65b0\\u6d6aAPPKEY\\uff1a","type":"text","value":null,"tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/open.weibo.com\\/"},"SinaSecret":{"title":"\\u65b0\\u6d6aAPPSECRET\\uff1a","type":"text","value":null,"tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/open.weibo.com\\/"}}},"Renren":{"title":"\\u8d2d\\u4e70\\u6743\\u9650","options":{"RenrenKey":{"title":"\\u4eba\\u4ebaAPPKEY\\uff1a","type":"text","value":null,"tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/dev.renren.com\\/"},"RenrenSecret":{"title":"\\u4eba\\u4ebaAPPSECRET\\uff1a","type":"text","value":null,"tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttp:\\/\\/dev.renren.com\\/"}}},"Github":{"title":"\\u8425\\u9500\\u6743\\u9650","options":{"GithubKey":{"title":"GithubAPPKEY\\uff1a","type":"text","value":null,"tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttps:\\/\\/github.com\\/settings\\/applications"},"GithubSecret":{"title":"GithubAPPSECRET\\uff1a","type":"text","value":null,"tip":"\\u7533\\u8bf7\\u5730\\u5740\\uff1ahttps:\\/\\/github.com\\/settings\\/applications"}}}}}}}', '{"1":{"pid":"0","title":"\\u5546\\u57ce\\u6a21\\u5757","icon":"fa fa-flask","id":"1"},"2":{"pid":"1","title":"\\u5546\\u57ce\\u6a21\\u5757\\u7ba1\\u7406","icon":"fa fa-folder-open-o","id":"2"},"3":{"pid":"2","title":"\\u5546\\u57ce\\u914d\\u7f6e","icon":"fa fa-wrench","url":"Shop\\/Index\\/module_config","id":"3"},"11":{"pid":"2","title":"\\u914d\\u7f6e\\u7ba1\\u7406","icon":"fa fa-list","url":"Shop\\/Index\\/module_config_set","id":"11"},"4":{"pid":"2","title":"\\u5546\\u57ce\\u6a21\\u5757\\u5217\\u8868","icon":"fa fa-list","url":"Shop\\/Index\\/index","id":"4"},"5":{"pid":"4","title":"\\u65b0\\u589e","url":"Shop\\/Index\\/add","id":"5"},"6":{"pid":"4","title":"\\u7f16\\u8f91","url":"Shop\\/Index\\/edit","id":"6"},"7":{"pid":"4","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Shop\\/Index\\/setStatus","id":"7"},"8":{"pid":"2","title":"\\u4f1a\\u5458\\u7ba1\\u7406","url":"Shop\\/Member\\/index","id":"8"},"9":{"pid":"2","title":"\\u5546\\u54c1\\u7ba1\\u7406","url":"Shop\\/Goods\\/index","id":"9"},"10":{"pid":"2","title":"\\u5206\\u7c7b\\u7ba1\\u7406","url":"Shop\\/Category\\/index","id":"10"}}', '{"Store":{"1":{"pid":"0","title":"\\u5546\\u57ce\\u6a21\\u5757","icon":"fa fa-flask","id":"1"},"2":{"pid":"1","title":"\\u5546\\u57ce\\u6a21\\u5757\\u7ba1\\u7406","icon":"fa fa-folder-open-o","id":"2"},"3":{"pid":"2","title":"\\u5546\\u57ce\\u914d\\u7f6e","icon":"fa fa-wrench","url":"Shop\\/Index\\/module_config","id":"3"},"11":{"pid":"2","title":"\\u914d\\u7f6e\\u7ba1\\u7406","icon":"fa fa-list","url":"Shop\\/Index\\/module_config_set","id":"11"},"4":{"pid":"2","title":"\\u5546\\u57ce\\u6a21\\u5757\\u5217\\u8868","icon":"fa fa-list","url":"Shop\\/Index\\/index","id":"4"},"5":{"pid":"4","title":"\\u65b0\\u589e","url":"Shop\\/Index\\/add","id":"5"},"6":{"pid":"4","title":"\\u7f16\\u8f91","url":"Shop\\/Index\\/edit","id":"6"},"7":{"pid":"4","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Shop\\/Index\\/setStatus","id":"7"},"8":{"pid":"2","title":"\\u4f1a\\u5458\\u7ba1\\u7406","url":"Shop\\/Member\\/index","id":"8"},"9":{"pid":"2","title":"\\u5546\\u54c1\\u7ba1\\u7406","url":"Shop\\/Goods\\/index","id":"9"},"10":{"pid":"2","title":"\\u5206\\u7c7b\\u7ba1\\u7406","url":"Shop\\/Category\\/index","id":"10"}}}', 0, 1512707550, 1522134315, 0, 1),
(3, 'Food', '智慧餐饮', '', 'fa fa-flask', '#F9B440', '智慧餐饮模块', '山东有范网络科技有限公司', '1.6.2', '{"center":[{"title":"\\u6d4b\\u8bd5\\u5bfc\\u822a","icon":"fa fa-flask","url":"Food\\/Index\\/index","color":"#398CD2"}],"main":[{"title":"\\u6d4b\\u8bd5\\u5bfc\\u822a","icon":"fa fa-flask","url":"Food\\/Index\\/index"}]}', '{"title":{"title":"\\u6a21\\u5757\\u540d\\u79f0","type":"text","value":"","tip":"\\u7528\\u4e8e\\u81ea\\u5b9a\\u4e49\\u6a21\\u5757\\u540d\\u79f0","is_dev":"1"},"logo":{"title":"\\u6a21\\u5757logo","type":"picture","value":"","tip":"\\u7528\\u4e8e\\u81ea\\u5b9a\\u4e49\\u6a21\\u5757logo","is_dev":"1"}}', NULL, '{"1":{"pid":"0","title":"\\u9910\\u996e\\u6a21\\u5757","icon":"fa fa-flask","id":"1"},"2":{"pid":"1","title":"\\u9910\\u996e\\u6a21\\u5757\\u7ba1\\u7406","icon":"fa fa-folder-open-o","id":"2"},"3":{"pid":"2","title":"\\u9910\\u996e\\u6a21\\u5757\\u8bbe\\u7f6e","icon":"fa fa-wrench","url":"Food\\/Index\\/module_config","id":"3"},"4":{"pid":"2","title":"\\u9910\\u996e\\u6a21\\u5757\\u5217\\u8868","icon":"fa fa-list","url":"Food\\/Index\\/index","id":"4"},"5":{"pid":"4","title":"\\u65b0\\u589e","url":"Food\\/Index\\/add","id":"5"},"6":{"pid":"4","title":"\\u7f16\\u8f91","url":"Food\\/Index\\/edit","id":"6"},"7":{"pid":"4","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Food\\/Index\\/setStatus","id":"7"},"8":{"pid":"2","title":"\\u4f1a\\u5458\\u7ba1\\u7406","url":"Food\\/Member\\/index","id":"8"},"9":{"pid":"2","title":"\\u5546\\u54c1\\u7ba1\\u7406","url":"Food\\/Goods\\/index","id":"9"},"10":{"pid":"2","title":"\\u5206\\u7c7b\\u7ba1\\u7406","url":"Food\\/Category\\/index","id":"10"}}', '', 0, 1514818101, 1520180543, 0, 1),
(4, 'Book', '开发文档', '', 'fa fa-flask', '#F9B440', '开发文档', '山东有范网络科技有限公司', '1.6.2', '', '{"title":{"title":"\\u6a21\\u5757\\u540d\\u79f0","type":"text","value":"","tip":"\\u7528\\u4e8e\\u81ea\\u5b9a\\u4e49\\u6a21\\u5757\\u540d\\u79f0","is_dev":"1"},"logo":{"title":"\\u6a21\\u5757logo","type":"picture","value":"","tip":"\\u7528\\u4e8e\\u81ea\\u5b9a\\u4e49\\u6a21\\u5757logo","is_dev":"1"}}', NULL, '{"1":{"pid":"0","title":"\\u5f00\\u53d1\\u6587\\u6863","icon":"fa fa-flask","id":"1"},"2":{"pid":"1","title":"\\u5f00\\u53d1\\u6587\\u6863","icon":"fa fa-folder-open-o","id":"2"},"3":{"pid":"2","title":"\\u5f00\\u53d1\\u6587\\u6863\\u8bbe\\u7f6e","icon":"fa fa-wrench","url":"Book\\/Index\\/module_config","id":"3"},"4":{"pid":"2","title":"\\u5f00\\u53d1\\u6587\\u6863\\u5217\\u8868","icon":"fa fa-list","url":"Book\\/Index\\/index","id":"4"},"5":{"pid":"4","title":"\\u65b0\\u589e","url":"Book\\/Index\\/add","id":"5"},"6":{"pid":"4","title":"\\u7f16\\u8f91","url":"Book\\/Index\\/edit","id":"6"},"7":{"pid":"4","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Book\\/Index\\/setStatus","id":"7"},"8":{"pid":"2","title":"\\u9605\\u8bfb","url":"Book\\/Page\\/index","id":"8"}}', '', 0, 1515035551, 1522134314, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_nav`
--

CREATE TABLE IF NOT EXISTS `yf_admin_nav` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `group` varchar(11) NOT NULL DEFAULT '' COMMENT '分组',
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父ID',
  `title` varchar(31) NOT NULL DEFAULT '' COMMENT '导航标题',
  `type` varchar(15) NOT NULL DEFAULT '' COMMENT '导航类型',
  `value` text COMMENT '导航值',
  `target` varchar(11) NOT NULL DEFAULT '' COMMENT '打开方式',
  `icon` varchar(32) NOT NULL DEFAULT '' COMMENT '图标',
  `lists_template` varchar(63) NOT NULL DEFAULT '' COMMENT '列表页模板',
  `detail_template` varchar(63) NOT NULL DEFAULT '' COMMENT '详情页模板',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='前台导航表' AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `yf_admin_nav`
--

INSERT INTO `yf_admin_nav` (`id`, `group`, `pid`, `title`, `type`, `value`, `target`, `icon`, `lists_template`, `detail_template`, `create_time`, `update_time`, `sort`, `status`) VALUES
(1, 'bottom', 0, '关于', 'page', '', '', '', '', '', 1449742225, 1449742255, 0, 1),
(2, 'bottom', 1, '关于我们', 'page', '', '', '', '', '', 1449742312, 1449742312, 0, 1),
(4, 'bottom', 1, '服务产品', 'page', '', '', '', '', '', 1449742597, 1449742651, 0, 1),
(5, 'bottom', 1, '商务合作', 'page', '', '', '', '', '', 1449742664, 1449742664, 0, 1),
(6, 'bottom', 1, '加入我们', 'page', '', '', '', '', '', 1449742678, 1449742697, 0, 1),
(7, 'bottom', 0, '帮助', 'page', '', '', '', '', '', 1449742688, 1449742688, 0, 1),
(8, 'bottom', 7, '用户协议', 'page', '', '', '', '', '', 1449742706, 1449742706, 0, 1),
(9, 'bottom', 7, '意见反馈', 'page', '', '', '', '', '', 1449742716, 1449742716, 0, 1),
(10, 'bottom', 7, '常见问题', 'page', '', '', '', '', '', 1449742728, 1449742728, 0, 1),
(11, 'bottom', 0, '联系方式', 'page', '', '', '', '', '', 1449742742, 1449742742, 0, 1),
(12, 'bottom', 11, '联系我们', 'page', '', '', '', '', '', 1449742752, 1449742752, 0, 1),
(13, 'bottom', 11, '新浪微博', 'page', '', '', '', '', '', 1449742802, 1449742802, 0, 1),
(14, 'main', 0, '首页', 'link', '', '', '', '', '', 1457084559, 1472993801, 0, 1),
(15, 'main', 0, '产品中心', 'page', '', '', '', '', '', 1457084559, 1457084559, 0, 1),
(16, 'main', 0, '客户服务', 'page', '', '', '', '', '', 1457084572, 1457084572, 0, 1),
(17, 'main', 0, '案例展示', 'page', '', '', '', '', '', 1457084583, 1457084583, 0, 1),
(18, 'main', 0, '新闻动态', 'page', '', '', '', '', '', 1457084714, 1457084714, 0, 1),
(20, 'wap_bottom', 0, '首页', 'link', '', '', 'fa-home', '', '', 1458382401, 1458382401, 0, 1),
(21, 'wap_bottom', 0, '消息', 'module', 'Im', '', 'fa-commenting-o', '', '', 1458382603, 1461381689, 0, 1),
(22, 'wap_bottom', 0, '钱包', 'module', 'Wallet', '', 'fa-wallet', '', '', 1458382637, 1461381704, 0, 1),
(23, 'wap_bottom', 0, '我的', 'module', 'User', '', 'fa-user', '', '', 1458382814, 1461207462, 0, 1),
(24, 'main', 15, '子类', 'post', NULL, '', 'fa-star', 'lists', 'detail', 1512475196, 1514023700, 0, 1),
(25, 'top', 0, '123', 'module', 'Admin', '', '', '', '', 1512475519, 1512475519, 0, 1),
(26, 'top', 0, '商城模块', 'module', 'Shop', '', 'fa fa-flask', '', '', 1512707550, 1512707550, 0, 1),
(27, 'top', 0, '智慧餐饮', 'module', 'Dish', '', 'fa fa-flask', '', '', 1512707556, 1512707556, 0, 1),
(28, 'top', 0, '智慧餐饮', 'module', 'Food', '', 'fa fa-flask', '', '', 1514818101, 1514818101, 0, 1),
(29, 'top', 0, '开发文档', 'module', 'Book', '', 'fa fa-flask', '', '', 1515035551, 1515035551, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_post`
--

CREATE TABLE IF NOT EXISTS `yf_admin_post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `cid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '分类ID',
  `title` varchar(127) NOT NULL DEFAULT '' COMMENT '标题',
  `cover` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '封面',
  `abstract` varchar(255) DEFAULT '' COMMENT '摘要',
  `content` text COMMENT '内容',
  `view_count` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '阅读',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='文章列表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `yf_admin_post`
--

INSERT INTO `yf_admin_post` (`id`, `cid`, `title`, `cover`, `abstract`, `content`, `view_count`, `create_time`, `update_time`, `sort`, `status`) VALUES
(1, 0, '123', 0, 'wefwf', 'sdfsfsf', 0, 1513659819, 1513659819, 1, 1),
(2, 0, 'ewr', 0, '423424', '23424', 0, 1513659844, 1513659844, 2342, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_session`
--

CREATE TABLE IF NOT EXISTS `yf_admin_session` (
  `session_id` varchar(255) NOT NULL,
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  `uid` int(11) unsigned NOT NULL COMMENT '用户ID',
  `update_time` int(11) unsigned NOT NULL COMMENT '更新时间',
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='session存储表';

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_slider`
--

CREATE TABLE IF NOT EXISTS `yf_admin_slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '幻灯ID',
  `title` char(80) NOT NULL DEFAULT '' COMMENT '标题',
  `cover` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '封面ID',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '点击链接',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='幻灯切换表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `yf_admin_slider`
--

INSERT INTO `yf_admin_slider` (`id`, `title`, `cover`, `url`, `create_time`, `update_time`, `sort`, `status`) VALUES
(1, '幻灯片12', 4, '', 1512792139, 1512792139, 0, 1),
(2, '幻灯片21', 4, '', 1512792157, 1512792157, 0, 0),
(3, '幻灯片3', 6, '', 0, 0, 0, 0),
(4, '幻灯片4', 7, '', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_upload`
--

CREATE TABLE IF NOT EXISTS `yf_admin_upload` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'UID',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '文件名',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '文件路径',
  `url` varchar(255) DEFAULT '' COMMENT '文件链接',
  `ext` char(4) NOT NULL DEFAULT '' COMMENT '文件类型',
  `size` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文件大小',
  `md5` char(32) DEFAULT '' COMMENT '文件md5',
  `sha1` char(40) DEFAULT '' COMMENT '文件sha1编码',
  `location` varchar(15) NOT NULL DEFAULT '' COMMENT '文件存储位置',
  `download` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '下载次数',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上传时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='文件上传表' AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `yf_admin_upload`
--

INSERT INTO `yf_admin_upload` (`id`, `uid`, `name`, `path`, `url`, `ext`, `size`, `md5`, `sha1`, `location`, `download`, `create_time`, `update_time`, `sort`, `status`) VALUES
(3, 1, 'heng.png', '/uploads/admin/image/2017-12-05/5a2680e37f6ae.png', '', 'png', 77487, '33210850fd7ac1bd8d499a415c94edd3', '9907378368f2b1f49c54ca045d987ac29e5fab64', 'Local', 0, 1512472803, 1512472803, 0, 1),
(4, 1, '1_14.png', '/uploads/admin/image/2017-12-09/5a2b5fba9f810.png', '', 'png', 85722, '8a82e6c43440ba84eebd643d6c5ebcff', 'e687b72ee5aa31ebfbe5af86c9e411ad80adf73a', 'Local', 0, 1512791994, 1512791994, 0, 1),
(5, 1, 'qrcode_for_gh_ed87be20d9d9_258.jpg', '/uploads/admin/image/2017-12-19/5a3903bd9a8b3.jpg', '', 'jpg', 26626, '388ef5de2540c128d1c0eb0f163b3b91', '28aedc1a0af88372cd9422a614c0d24fc3442ede', 'Local', 0, 1513685949, 1513685949, 0, 1),
(6, 1, '折扣券_折扣券_2017-12-20 (1).jpg', '/uploads/admin/image/2017-12-20/5a3a5c9be6ede.jpg', '', 'jpg', 39488, 'b4ca36475b40170567552e8624057e99', '59aa09fb88a86cd0ac4f2ed0b09b6223409feb54', 'Local', 0, 1513774235, 1513774235, 0, 1),
(7, 1, '折扣券_折扣券_2017-12-20.jpg', '/uploads/admin/image/2017-12-20/5a3a5cc13e36d.jpg', '', 'jpg', 38737, '3b335ac0c56c6ce5c70bb1af4c014802', '6e55527e07358d42678f86791eba511d99da9f17', 'Local', 0, 1513774273, 1513774273, 0, 1),
(8, 1, '2_副本.png', '/uploads/shop/image/2017-12-23/5a3e5f4d7c703.png', '', 'png', 3352, 'f4879cb97e187b4e0adc7298baaada9b', '20a16b6d03c93c183b9aca8b3b029a490da83e92', 'Local', 0, 1514037069, 1514037069, 0, 1),
(9, 1, 'QQ截图20180104113637.png', '/uploads/book/image/2018-01-04/5a4da17e1b26d.png', '', 'png', 26534, 'ddf8ae5c3153abab73a0e2c6fc3dc310', '8c943f8602c4399c73499a046cb9d49ccb1a4b94', 'Local', 0, 1515037054, 1515037054, 0, 1),
(10, 1, '微信图片_20180104223321.png', '/uploads/book/image/2018-01-04/5a4e3b575dd9c.png', '', 'png', 18746, 'a1860836bc6108c73356d615c33703de', 'b15974725c5e5ac5ec684ff443dd0e5a840fb3cf', 'Local', 0, 1515076439, 1515076439, 0, 1),
(11, 1, 'QQ截图20180118111300.png', '/uploads/book/image/2018-01-18/5a6010b7c3620.png', '', 'png', 8200, '57ca1991601a437b6c44b113519268ad', '3ed4516680b31685186712d24bfc0ca4d677dd91', 'Local', 0, 1516245175, 1516245175, 0, 1),
(12, 1, 'QQ截图20180126210346.png', '/uploads/book/image/2018-01-26/5a6b273958652.png', '', 'png', 78263, '24b55cab7c5a94145ea5364df5f59b6c', '8e42a88405aad4d32e3752b32dd16926703cddb1', 'Local', 0, 1516971833, 1516971833, 0, 1),
(13, 1, '改版(1)1.jpg', '/uploads/shop/image/2018-03-03/5a9a8d3325168.jpg', '', 'jpg', 102130, '1ba3c654e21813bfe645bf793763d28f', 'a78ba704ce64e2bbf4ef6ed2c17582b32ea7eb88', 'Local', 0, 1520078131, 1520078131, 0, 1),
(14, 1, '测试反馈文档.doc', '/uploads/food/file/2018-03-10/5aa3a179ce415.doc', '', 'doc', 439296, '40ce94b7b244c7b5b651c2445748a6df', 'bc1019aec8a79348d0d4405c5aaf8106cffddc0f', 'Local', 0, 1520673145, 1520673145, 0, 1),
(15, 1, '360截图16440811102129106.png', '/uploads/admin/image/2018-05-07/5aefd6a06de6e.png', '', 'png', 250770, '955bf5a6d46a1a93eea4a5cf143a32c6', '24397a036126411c233c5be43d945d0bef5b0181', 'Local', 0, 1525667488, 1525667488, 0, 1),
(16, 1, 'dangao.png', '/uploads/admin/image/2018-05-07/5aefd73e7030d.png', '', 'png', 248762, '0f8ff33c79a9b9b1625e59b9d39c31ae', '769eb430638724c57e242a879d6a4f08483234ca', 'Local', 0, 1525667646, 1525667646, 0, 1),
(17, 1, 'hotdot.png', '/uploads/admin/image/2018-05-07/5aefd7653cb82.png', '', 'png', 3572, '05760949ab6da828866926bf7326ecb7', 'ffc357558a59952b7c63064d3e07f74bb952112a', 'Local', 0, 1525667685, 1525667685, 0, 1),
(18, 1, '08f790529822720eb1faa1be77cb0a46f21fabba.jpg', '/uploads/admin/image/2018-05-07/5aefd78a1fc1a.jpg', '', 'jpg', 140310, '61cdd9363993bfb203047fe8d9c91df5', 'cd897ad529cab1bba45489f053803fd4c0169bba', 'Local', 0, 1525667722, 1525667722, 0, 1),
(19, 1, '37d3d539b6003af37401eb21392ac65c1038b633.jpg', 'http://demo.youfai.cn/uploads/admin/image/2018-05-07/5aefd7cdde01e.jpg', '', 'jpg', 299832, '1f2620b3733fef57e8877afe2ce60886', '449ef1a4f59d5f6f0aa41425b52145a3c1cacfd7', 'Local', 0, 1525667789, 1525667789, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_admin_user`
--

CREATE TABLE IF NOT EXISTS `yf_admin_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'UID',
  `user_type` int(11) NOT NULL DEFAULT '1' COMMENT '用户类型',
  `nickname` varchar(63) DEFAULT NULL COMMENT '昵称',
  `username` varchar(31) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(63) NOT NULL DEFAULT '' COMMENT '密码',
  `email` varchar(63) NOT NULL DEFAULT '' COMMENT '邮箱',
  `email_bind` tinyint(1) NOT NULL DEFAULT '0' COMMENT '邮箱验证',
  `mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `mobile_bind` tinyint(1) NOT NULL DEFAULT '0' COMMENT '邮箱验证',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `score` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '积分',
  `money` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `reg_type` varchar(15) NOT NULL DEFAULT '' COMMENT '注册方式',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户账号表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `yf_admin_user`
--

INSERT INTO `yf_admin_user` (`id`, `user_type`, `nickname`, `username`, `password`, `email`, `email_bind`, `mobile`, `mobile_bind`, `avatar`, `score`, `money`, `reg_ip`, `reg_type`, `create_time`, `update_time`, `status`) VALUES
(1, 1, '超级管理员', 'admin', '8889bd70a6c18477b3b1b67caa6b74f3', '', 0, '', 0, '0', 0, '0.00', 0, '', 1438651748, 1514469104, 1),
(2, 1, '运营', 'admins', '53d0f564ba2f2da58023e3fe482824bf', '', 0, '', 0, '4', 0, '0.00', 2130706433, 'admin', 1512792106, 1512792106, 1),
(3, 1, 'admin1', 'admin1', '9b7458face4a7411736531eb51516e37', '42343242@qq.com', 0, '', 0, '', 0, '0.00', 2424004033, 'admin', 1519978101, 1519978101, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_book_index`
--

CREATE TABLE IF NOT EXISTS `yf_book_index` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(127) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  `pid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='默认数据表' AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `yf_book_index`
--

INSERT INTO `yf_book_index` (`id`, `title`, `content`, `create_time`, `update_time`, `sort`, `status`, `pid`) VALUES
(1, 'FormBuilder使用', '', 0, 0, 0, 1, 0),
(2, 'setMetaTitle()', '<p>\r\n	<span style="font-size:32px;">setMetaTitle()</span> \r\n</p>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"="">\r\n<p>\r\n	用来设置页面的标题(html的head标签里的title)，页面标题一般在浏览器标签显示 但是由于1.1版本采用了多标签后台（功能页面嵌入iframe），所以暂时后台部分实际上是看不到浏览器标签上的标题产生变化的。\r\n</p>\r\n	</blockquote>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	参数\r\n		</h3>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param $meta_title 网页标题\r\n			</p>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"="">\r\n			<p>\r\n				标题只需要传值给$meta_title一个字符串即可\r\n			</p>\r\n				</blockquote>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	用法示例\r\n					</h3>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立表单页面\r\n$builder = new \\yfthink\\builder\\FormBuilder();\r\n$builder-&gt;setMetaTitle(''发布新闻'');</code></pre>', 0, 0, 0, 1, 1),
(3, 'setTabNav()', '<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"=""><strong><span style="font-size:32px;">setTabNav()</span></strong><strong><span style="font-size:32px;"></span></strong> \r\n	</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	当一个表单页有多个TAB切换需求的时候就可以用到这个方法了，典型的比如CMS模块的栏目分类里可以设置多个分组。\r\n</p>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	参数\r\n	</h3>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param array $tab_list Tab列表 @param string $current_tab 当前TAB（对应TAB列表数组的KEY）\r\n		</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	$tablist是一个二维数组：数组结构示例：\r\n	</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">$tab_list = array(\r\n    ''1'' =&gt; array(\r\n        ''title'' =&gt; ''Tab1标题'',\r\n        ''href''   =&gt; U(''index'', array(''group'' =&gt; 1)),\r\n    ),\r\n    ''2'' =&gt; array(\r\n        ''title'' =&gt; ''Tab2标题'',\r\n        ''href''   =&gt; U(''index'', array(''group'' =&gt; 2)),\r\n    )\r\n)</code></pre>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param int $current_tab 当前tab\r\n		</p>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	用法示例\r\n			</h3>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 设置Tab导航数据列表\r\n    $config_group_list = C(''CONFIG_GROUP_LIST'');  // 获取配置分组\r\n    foreach ($config_group_list as $key =&gt; $val) {\r\n        $tab_list[$key][''title''] = $val;\r\n        $tab_list[$key][''href'']  = U(''group'', array(''group'' =&gt; $key));\r\n    }\r\n\r\n    // 使用FormBuilder快速建立表单页面。\r\n    $builder = new \\yfthink\\builder\\FormBuilder();\r\n    $builder-&gt;setMetaTitle(''系统设置'')       // 设置页面标题\r\n            -&gt;SetTabNav($tab_list, $group)  // 设置Tab按钮列表\r\n            -&gt;setPostUrl(U(''groupSave''))    // 设置表单提交地址\r\n            -&gt;setExtraItems($data_list)     // 直接设置表单数据\r\n            -&gt;display();</code></pre>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	效果如下： <img src="/tp-lingyun/uploads/book/image/2018-01-04/5a4da17e1b26d.png" alt="" /> \r\n				</p>', 0, 0, 0, 1, 1),
(4, 'setExtraItems', '<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setExtraItems ($extra_items)\r\n	</h2>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	这个方法与addFormItem是一个系列的，此方法用于批量添加已经提前按规范构造好的数组来添加表单项目（具体格式可以参考第三方登录插件的config.php），比如后台的插件配置就是实用此方法，为什么要使用此方法，因为像后台插件这种，每个插件的配置字段都是不一样的，都存储在数据库里或者文件系统里，所以你没办法用addFormItem去一个个去添加，只能用setExtraItems这种办法一次性把数据传递给FormBuilder，这种办法不但支持一维TAB还支持多TAB表单，与SetTabNav实际不一样，这个TAB是在同一个页面里的切换，而SetTabNav实际上是一个链接跳转了而已。\r\n		</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	当然了setExtraItems和addFormItem是支持一起同时使用的。\r\n	</p>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	参数\r\n		</h3>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param $extra_items 标单项数组（格式可以第三方登录插件的config.php）\r\n			</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	类似下面这样：\r\n		</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">array(\r\n        ''title''=&gt;''开启同步登录：'',\r\n        ''type''=&gt;''checkbox'',\r\n        ''options''=&gt;array(\r\n            ''Weixin''=&gt;''微信'',\r\n            ''Qq''=&gt;''QQ'',\r\n            ''Sina''=&gt;''新浪'',\r\n            ''Renren''=&gt;''人人'',\r\n            ''Github''=&gt;''Github'',\r\n        ),\r\n    ),\r\n    ''meta''=&gt;array(\r\n        ''title''=&gt;''接口验证代码：'',\r\n        ''type''=&gt;''textarea'',\r\n        ''value''=&gt;'''',\r\n        ''tip''=&gt;''需要在Meta标签中写入验证信息时，拷贝代码到这里。''\r\n    ),\r\n    ''group''=&gt;array(\r\n        ''type''=&gt;''group'',\r\n        ''options''=&gt;array(\r\n            ''Wexin''=&gt;array(\r\n                ''title''=&gt;''微信配置'',\r\n                ''options''=&gt;array(\r\n                    ''WeixinKey''=&gt;array(\r\n                        ''title''=&gt;''微信APPKEY：'',\r\n                        ''type''=&gt;''text'',\r\n                        ''value''=&gt;'''',\r\n                        ''tip''=&gt;''申请地址：http://open.weixin.qq.com/'',\r\n                    ),\r\n                    ''WeixinSecret''=&gt;array(\r\n                        ''title''=&gt;''微信APPSECRET：'',\r\n                        ''type''=&gt;''text'',\r\n                        ''value''=&gt;'''',\r\n                        ''tip''=&gt;''申请地址：http://open.weixin.qq.com/'',\r\n                    )\r\n                )\r\n            ),\r\n            ''Qq''=&gt;array(\r\n                ''title''=&gt;''QQ配置'',\r\n                ''options''=&gt;array(\r\n                    ''QqKey''=&gt;array(\r\n                        ''title''=&gt;''QQ互联APPKEY：'',\r\n                        ''type''=&gt;''text'',\r\n                        ''value''=&gt;'''',\r\n                        ''tip''=&gt;''申请地址：http://connect.qq.com'',\r\n                    ),\r\n                    ''QqSecret''=&gt;array(\r\n                        ''title''=&gt;''QQ互联APPSECRET：'',\r\n                        ''type''=&gt;''text'',\r\n                        ''value''=&gt;'''',\r\n                        ''tip''=&gt;''申请地址：http://connect.qq.com'',\r\n                    )\r\n                ),\r\n             ),\r\n            ''Sina''=&gt;array(\r\n                ''title''=&gt;''新浪配置'',\r\n                ''options''=&gt;array(\r\n                    ''SinaKey''=&gt;array(\r\n                        ''title''=&gt;''新浪APPKEY：'',\r\n                        ''type''=&gt;''text'',\r\n                        ''value''=&gt;'''',\r\n                        ''tip''=&gt;''申请地址：http://open.weibo.com/'',\r\n                    ),\r\n                    ''SinaSecret''=&gt;array(\r\n                        ''title''=&gt;''新浪APPSECRET：'',\r\n                        ''type''=&gt;''text'',\r\n                        ''value''=&gt;'''',\r\n                        ''tip''=&gt;''申请地址：http://open.weibo.com/'',\r\n                    )\r\n                ),\r\n            ),\r\n            ''Renren''=&gt;array(\r\n                ''title''=&gt;''人人配置'',\r\n                ''options''=&gt;array(\r\n                    ''RenrenKey''=&gt;array(\r\n                        ''title''=&gt;''人人APPKEY：'',\r\n                        ''type''=&gt;''text'',\r\n                        ''value''=&gt;'''',\r\n                        ''tip''=&gt;''申请地址：http://dev.renren.com/'',\r\n                    ),\r\n                    ''RenrenSecret''=&gt;array(\r\n                        ''title''=&gt;''人人APPSECRET：'',\r\n                        ''type''=&gt;''text'',\r\n                        ''value''=&gt;'''',\r\n                        ''tip''=&gt;''申请地址：http://dev.renren.com/'',\r\n                    )\r\n                )\r\n            ),\r\n            ''Github''=&gt;array(\r\n                ''title''=&gt;''Github配置'',\r\n                ''options''=&gt;array(\r\n                    ''GithubKey''=&gt;array(\r\n                        ''title''=&gt;''GithubAPPKEY：'',\r\n                        ''type''=&gt;''text'',\r\n                        ''value''=&gt;'''',\r\n                        ''tip''=&gt;''申请地址：https://github.com/settings/applications'',\r\n                    ),\r\n                    ''GithubSecret''=&gt;array(\r\n                        ''title''=&gt;''GithubAPPSECRET：'',\r\n                        ''type''=&gt;''text'',\r\n                        ''value''=&gt;'''',\r\n                        ''tip''=&gt;''申请地址：https://github.com/settings/applications'',\r\n                    )\r\n                )\r\n            )\r\n        )\r\n    )\r\n);</code></pre>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	用法示例\r\n	</h3>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">$db_config = $addon[''config''];\r\n            $addon[''config''] = include $data-&gt;config_file;\r\n            if ($db_config) {\r\n                $db_config = json_decode($db_config, true);\r\n                foreach ($addon[''config''] as $key =&gt; $value) {\r\n                    if ($value[''type''] != ''group'') {\r\n                        $addon[''config''][$key][''value''] = $db_config[$key];\r\n                    } else {\r\n                        foreach ($value[''options''] as $gourp =&gt; $options) {\r\n                            foreach ($options[''options''] as $gkey =&gt; $value) {\r\n                                $addon[''config''][$key][''options''][$gourp][''options''][$gkey][''value''] = $db_config[$gkey];\r\n                            }\r\n                        }\r\n                    }\r\n                }\r\n            }\r\n            // 构造表单名\r\n            foreach ($addon[''config''] as $key =&gt; $val) {\r\n                if ($val[''type''] == ''group'') {\r\n                    foreach ($val[''options''] as $key2 =&gt; $val2) {\r\n                        foreach ($val2[''options''] as $key3 =&gt; $val3) {\r\n                            $addon[''config''][$key][''options''][$key2][''options''][$key3][''name''] = ''config[''.$key3.'']'';\r\n                        }\r\n                    }\r\n                } else {\r\n                    $addon[''config''][$key][''name''] = ''config[''.$key.'']'';\r\n                }\r\n            }\r\n            $this-&gt;assign(''data'', $addon);\r\n            $this-&gt;assign(''form_items'', $addon[''config'']);\r\n            if ($addon[''custom_config'']) {\r\n                $this-&gt;assign(''custom_config'', $this-&gt;fetch($addon[''addon_path''].$addon[''custom_config'']));\r\n                $this-&gt;display($addon[''addon_path''].$addon[''custom_config'']);\r\n            } else {\r\n                //使用FormBuilder快速建立表单页面。\r\n               $builder = new \\yfthink\\builder\\FormBuilder();\r\n                $builder-&gt;setMetaTitle(''插件设置'')  //设置页面标题\r\n                        -&gt;setPostUrl(U(''config'')) //设置表单提交地址\r\n                        -&gt;addFormItem(''id'', ''hidden'', ''ID'', ''ID'')\r\n                        -&gt;setExtraItems($addon[''config'']) //直接设置表单数据\r\n                        -&gt;setFormData($addon)\r\n                        -&gt;display();\r\n            }</code></pre>', 0, 0, 0, 1, 1),
(5, 'setPostUrl ()', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setPostUrl ($post_url)\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	既然是表单，免不了要指定一个POST数据接收地址，一般是当前方法\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n			</h2>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param string $post_url 地址\r\n				</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n					</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用FormBuilder快速建立表单页面。\r\n        $builder = new \\yfthink\\builder\\FormBuilder();\r\n        $builder-&gt;setMetaTitle(''新增导航'')  // 设置页面标题\r\n                -&gt;setPostUrl(U('''', array(''group'' =&gt; $group)))     // 设置表单提交地址\r\n                -&gt;display();</code></pre>', 0, 0, 0, 1, 1),
(6, 'addFormItem', '<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"=""><span style="font-size: 32px;" white-space:normal;background-color:#eeeeee;font-size:32px;"="">addFormItem</span><span style="font-size:32px;">()</span> \r\n	</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来添加一个表单项目 注意：如果需要给标单项设置默认值，请参考setFormData章节\r\n</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数：\r\n	</h2>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param $name 字段名称 @param $type 字段类型（支持的类型在下面）\r\n		</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">可设置的值有：\r\nhidden    ： 隐藏字段，一般于修改信息页面存储如数据ID等隐藏信息\r\nstatic    ： 静态字段，无法修改，也不会随着表单提交后台，仅仅是显示用\r\nnum       ： 整数类型\r\nprice     ： 价格类型0.00\r\ntext      ： 一行文本，最常用的类型\r\ntextarea  ： 多行文本，常用于类似文章简介等\r\narray     ： 数组类型，这个比较特殊，它存储的value不能直接使用，需要使用parse_attr()函数格式化为数组才可以使用\r\npassword  ： 密码类型\r\nradio     ： 单选框，注意单选框需要在第五个参数指定选项列表\r\ncheckbox  ： 复选框，注意复选框需要在第五个参数指定选项列表\r\nselect    ： 下拉框，注意下拉框需要在第五个参数指定选项列表\r\ndate      ： 日期类型，精确到天\r\ndatetime  ： 日期类型，精确到秒\r\npicture   ： 上传一张图片\r\npictures  ： 上传多张图片\r\nfile      ： 上传一个文件\r\nfiles     ： 上传多个文件\r\nmedia     ： 上传一个媒体文件\r\nmedias    ： 上传多个媒体文件\r\nkindeditor： kindeditor可视化编辑器\r\neditormd  ： Markdown编辑器\r\nlinkage   ： 三级联动类型，默认是中国的省市区（县）联动，可以通过配置第6个参数自己指定数据源\r\nbdmap     ： 百度地图类型(国内访问)，百度地图类型可以配置第六个参数来与一个text字段联动，用户在text字段里输入地点，及时不断的更新地图自动定位\r\ngmap      ： 谷歌地图类型(国外访问)，谷歌地图类型可以配置第六个参数来与一个text字段联动，用户在text字段里输入地点，及时不断的更新地图自动定位\r\nmapbox    ： Mapbox地图类型(国内外均可访问)，Mapbox地图类型可以配置第六个参数来与一个text字段联动，用户在text字段里输入地点，及时不断的更新地图自动定位\r\ntags      ： 标签TAG类型\r\nboard     ： 拖动排序用的不多，目前主要是CMS文档模型里的字段排序是用了</code></pre>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param $title 字段名，比如：文章封面\r\n	</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param $tip 字段说明，比如：图片大小小于1M这样\r\n		</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">可选</code>@param $options radio／checkbox／select三种类型必须配置此参数，格式是一个key-&gt;value的一维数组\r\n	</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">可选</code>@param $extra 这个参数属于多功能参数，针对每种类型使用都不一样\r\n		</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	$extra是一个字符串，那么对所有类型的作用都是一样的，只是用来给表单项目包围的div加一个css的自定义class $extra是一个数组： 三级联动： 首先自定义一个三级联动的数组如下：\r\n	</p>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	key=value模式\r\n		</h3>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">/**\r\n     * 区域\r\n     */\r\n    public function suburb($id) {\r\n        $list[''0''] = array(\r\n            ''p'' =&gt; ''曼哈顿Manhattan'',\r\n            ''c'' =&gt; array(\r\n                ''0''        =&gt; array(\r\n                    ''n'' =&gt; ''下城Downtown'',\r\n                    ''a'' =&gt; array(\r\n                        ''0''        =&gt; array(\r\n                            ''s'' =&gt; ''测试1'',\r\n                        ),\r\n                        ''1''        =&gt; array(\r\n                            ''s'' =&gt; ''测试2'',\r\n                        )\r\n                    )\r\n                ),\r\n                ''1''   =&gt; array(\r\n                    ''n'' =&gt; ''中城Midtown'',\r\n                )\r\n            )\r\n        );\r\n        $list[''1''] = array(\r\n            ''p'' =&gt; ''新泽西NewJersey'',\r\n            ''c'' =&gt; array(\r\n                ''0''        =&gt; array(\r\n                    ''n'' =&gt; ''Newport'',\r\n                ),\r\n                ''1''        =&gt; array(\r\n                    ''n'' =&gt; ''Jersey City'',\r\n                )\r\n            )\r\n        );\r\n        $list[''2''] = array(\r\n            ''p'' =&gt; ''布鲁克林Brooklyn'',\r\n        );\r\n        $list[''3''] = array(\r\n            ''p'' =&gt; ''皇后区Queens'',\r\n            ''c'' =&gt; array(\r\n                ''0''        =&gt; array(\r\n                    ''n'' =&gt; ''长岛市Long Island City'',\r\n                ),\r\n                ''1''        =&gt; array(\r\n                    ''n'' =&gt; ''艾姆赫斯特Elmhurst'',\r\n                )\r\n            )\r\n        );\r\n        $list[''4''] = array(\r\n            ''p'' =&gt; ''其他区域'',\r\n        );\r\n\r\n        return $id ? $list[$id] : $list;\r\n    }</code></pre>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	key!=value模式\r\n	</h3>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">/**\r\n     * 区域\r\n     */\r\n    public function suburb($id) {\r\n        $list[''0''] = array(\r\n            ''p'' =&gt; array(\r\n                ''key'' =&gt; ''mhd'',\r\n                ''value'' =&gt; ''曼哈顿Manhattan'',\r\n            ),\r\n            ''c'' =&gt; array(\r\n                ''0'' =&gt; array(\r\n                    ''n'' =&gt; array(\r\n                        ''key'' =&gt; ''xcq'',\r\n                        ''value'' =&gt; ''下城Downtown'',\r\n                    ),\r\n                    ''a'' =&gt; array(\r\n                        ''0'' =&gt; array(\r\n                            ''s'' =&gt; array(\r\n                                ''key'' =&gt; ''test_key'',\r\n                                ''value'' =&gt; ''test_value'',\r\n                            ),\r\n                        ),\r\n                    )\r\n                ),\r\n                ''1''  =&gt; array(\r\n                    ''n'' =&gt; array(\r\n                        ''key'' =&gt; ''zcq'',\r\n                        ''value'' =&gt; ''中城Downtown'',\r\n                    ),\r\n                    ''a'' =&gt; array(\r\n                        ''0''  =&gt; array(\r\n                            ''s'' =&gt; array(\r\n                                ''key'' =&gt; ''test_key2'',\r\n                                ''value'' =&gt; ''test_value2'',\r\n                            ),\r\n                        ),\r\n                    )\r\n                )\r\n            )\r\n        );\r\n        $list[''1''] = array(\r\n            ''p'' =&gt; ''新泽西NewJersey'',\r\n            ''c'' =&gt; array(\r\n                ''0'' =&gt; array(\r\n                    ''n'' =&gt; ''Newport'',\r\n                ),\r\n                ''1'' =&gt; array(\r\n                    ''n'' =&gt; ''Jersey City'',\r\n                )\r\n            )\r\n        );\r\n        $list[''2''] = array(\r\n            ''p'' =&gt; ''布鲁克林Brooklyn'',\r\n        );\r\n        $list[''3''] = array(\r\n            ''p'' =&gt; ''皇后区Queens'',\r\n            ''c'' =&gt; array(\r\n                ''0''  =&gt; array(\r\n                    ''n'' =&gt; ''长岛市Long Island City'',\r\n                ),\r\n                ''1''  =&gt; array(\r\n                    ''n'' =&gt; ''艾姆赫斯特Elmhurst'',\r\n                )\r\n            )\r\n        );\r\n        $list[''4''] = array(\r\n            ''p'' =&gt; ''其他区域'',\r\n        );\r\n\r\n        return $id ? $list[$id] : $list;\r\n    }</code></pre>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	然后：\r\n		</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">$rent = D(''Rent'');\r\n$temp[''self''][''citylist''] = $rent-&gt;suburb();\r\n-&gt;addFormItem(''suburb'', ''linkage'', ''区域'', ''区域'', null, $temp)</code></pre>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	即可实现三级联动自定义\r\n	</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	百度地图：\r\n		</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">-&gt;addFormItem("address", "text", "详细地址", "如：南京市鼓楼区广东路38号")\r\n-&gt;addFormItem("address_gps", "bdmap", "地图位置", "地图位置", null, array(''self'' =&gt; array(''city'' =&gt; ''武汉'', ''auto'' =&gt; ''address''))) </code></pre>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	上面这样就能实现地图默认定位城市为武汉，并且自动随着用户在address里输入文字不断刷新自动定位。\r\n	</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	其他待扩展或自定义...\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用FormBuilder快速建立表单页面。\r\n$rent = D(''Rent'');\r\n$temp[''self''][''citylist''] = $rent-&gt;suburb();\r\n$builder = new \\yfthink\\builder\\FormBuilder();\r\n$builder-&gt;setMetaTitle(''新增房源'')  // 设置页面标题\r\n    -&gt;setPostUrl(U(''add''))     // 设置表单提交地址\r\n    -&gt;addFormItem(''title'', ''text'', ''标题'', ''房源标题'')\r\n    -&gt;addFormItem(''number'',''text'',''房源编号'',''如：V001'')\r\n    -&gt;addFormItem(''suburb'', ''linkage'', ''区域'', ''区域'', null, $temp)\r\n    -&gt;addFormItem(''address'', ''text'', ''详细地址'', ''详细地址'')\r\n    -&gt;addFormItem(''address_gps'', ''bdmap'', ''地图位置'',''地图位置'')\r\n    -&gt;addFormItem(''bedroom_num'', ''select'', ''卧室数量'', ''0'', $rent-&gt;bedroom_num())\r\n    -&gt;addFormItem(''bathroom_num'', ''select'', ''卫浴数量'', ''0'', $rent-&gt;bathroom_num())\r\n    -&gt;addFormItem(''price'', ''text'', ''月租价'', ''0.00'')\r\n    -&gt;addFormItem(''room_source'',''text'',''房屋来源'',''房东自有房源／转租房源'')\r\n    -&gt;addFormItem(''rentdate_type'',''checkbox'',''租期类型'','''',$rent-&gt;rentdate_type())\r\n    -&gt;addFormItem(''rent_type'',''select'',''出租类型'','''',$rent-&gt;rent_type())\r\n    -&gt;addFormItem(''source_type'',''select'',''房源类型'','''',$rent-&gt;source_type())\r\n    -&gt;addFormItem(''furniture'',''select'',''有无家具'','''',$rent-&gt;furniture())\r\n    -&gt;addFormItem(''rent_date'',''date'',''可出租日期'','''')\r\n    -&gt;addFormItem(''area_sqft'',''num'',''面积（sqft）'',''sqft'')\r\n    -&gt;addFormItem(''area_floor'',''text'',''面积（层）'',''层'')\r\n    -&gt;addFormItem(''year'',''num'',''年代'',''年'')\r\n    -&gt;addFormItem(''to_station'',''text'',''步行至公交所需时间'',''min'')\r\n    -&gt;addFormItem(''common'', ''checkbox'', ''配置设施'', ''配置设施'', $rent-&gt;common())\r\n    -&gt;addFormItem(''description'',''textarea'',''房源描述'',''房源描述'')\r\n    -&gt;addFormItem(''cover'', ''picture'', ''封面'', ''封面'')\r\n    -&gt;addFormItem("images", "pictures", "物品图集", "物品图集")\r\n    -&gt;display();\r\n}</code></pre>', 0, 0, 0, 1, 1),
(7, 'setFormData', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setFormData\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来设置表单项目的默认值\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n			</h2>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param array $form_data 一维数组\r\n				</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	数组的key就是你addFormItem\r\n			</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n		</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用FormBuilder快速建立表单页面。\r\n    $builder = new \\yfthink\\builder\\FormBuilder();\r\n    $builder-&gt;setMetaTitle(''准备安装模块'')  // 设置页面标题\r\n            -&gt;setPostUrl(U(''install''))     // 设置表单提交地址\r\n            -&gt;addFormItem(''name'', ''hidden'', ''name'', ''name'')\r\n            -&gt;addFormItem(''clear'', ''radio'', ''是否清除历史数据'', ''是否清除历史数据'', array(''1'' =&gt; ''是'', ''0'' =&gt; ''否''))\r\n            -&gt;setFormData(array(''name'' =&gt; $name))\r\n            -&gt;display();</code></pre>', 0, 0, 0, 1, 1),
(8, 'setExtraHtml', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setExtraHtml\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	这个是比较粗暴的用法，尽量避免使用，但有的时候不得不用，主要是一些特殊的内容或者JS逻辑。 这个在FormBuilder里还是比较有用的一个方法，可以自己手动处理一个表单项之间所需的联动，比如CMS模块新增分类的时候需要根据分类类型的选择，来动态显示和隐藏页面的其它表单项目。\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function setExtraHtml ($extra_html){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n		</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n		<thead>\r\n			<tr>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					类型\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					是否必须\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					说明\r\n				</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n					$extra_html\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n					html和js字符串\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n			</table>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n				</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\FormBuilder();\r\n$builder-&gt;setMetaTitle(''新闻列表'');\r\n        -&gt;setExtraHtml(''注意：部分第三方金融机构可能会收取手续费，实际金额以到账为准。alert(''测试'');'');</code></pre>', 0, 0, 0, 1, 1),
(9, 'setAjaxSubmit', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setAjaxSubmit\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	这个方法主要是调试用的，因为FormBuilder默认是ajax提交的，在开发的时候调试不方便，可以用这个方法关掉ajax提交。\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n			</h2>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param bool $ajax_submit true或false\r\n				</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n					</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\FormBuilder();\r\n$builder-&gt;setMetaTitle(''新闻列表'');\r\n        -&gt;setAjaxSubmit(false);</code></pre>', 0, 0, 0, 1, 1),
(10, 'setTemplate', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setTemplate\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来设置表单的的模版，默认模版是Application/Common/util/yfthink/builder/layout/admin/form.html 这个方法目前主要用于个人中心的特殊布局，因为个人中心的左侧是有导航菜单的，如果直接使用默认的Builder模版会导致左侧没有导航，所以通过这个方法来单独指定模板 比如C(''USER_CENTER_FORM'')配置是Application/User/View/Builder/form.html\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n			</h2>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param $template 模板名类似 index/page\r\n				</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	其实就是TP的display()支持的格式（控制器名＋方法名）\r\n			</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n		</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\FormBuilder();\r\n$builder-&gt;setMetaTitle(''修改个人信息'')\r\n        -&gt;setTableDataPage($page-&gt;show())\r\n        -&gt;setTemplate(C(''USER_CENTER_FORM''))\r\n        -&gt;display();</code></pre>', 0, 0, 0, 1, 1),
(11, 'FormBuilder扩展', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	FormBuilder扩展\r\n	</h1>\r\n<ul style="margin-bottom:14px;padding-left:28px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	<li>\r\n		可以根据需要拓展FormBuilder字段\r\n	</li>\r\n		</ul>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	添加FormBuilder字段\r\n			</h2>\r\n<ul style="margin-bottom:14px;padding-left:28px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n			<li>\r\n				打开Application\\Common\\util\\yfthink\\builder\\&nbsp;<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">config.php</code>文件\r\n				<ul style="margin-bottom:14px;padding-left:28px;">\r\n					<li>\r\n						并且在return数组的form_item_type数组内添加拓展的FormBuilder信息\r\n					</li>\r\n					<li>\r\n						字段名（英文），字段说明（中文），字段属性（数据类型，长度）\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code class="language-javascript" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">return array(\r\n''form_item_type'' =&gt; array(\r\n''字段名''=&gt; array(''字段说明'', ''varchar(225) NOT NULL'')\r\n)\r\n)</code></pre>\r\n					</li>\r\n				</ul>\r\n			</li>\r\n			<li>\r\n				打开Application\\Common\\util\\<span style="color:#657180;white-space:normal;">yfthink</span>\\builder\\&nbsp;<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">formbuilder.html</code>文件\r\n				<ul style="margin-bottom:14px;padding-left:28px;">\r\n					<li>\r\n						在&nbsp;<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">25行</code>左右的switch标签中添加相应格式的拓展字段数据\r\n					</li>\r\n					<li>\r\n						{}中填写字段功用说明（汉字），file的里写引入字段html文件的路径\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code class="language-javascript" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"=""><switch name="form.type">\r\n{// 字段说明 }\r\n<include file="[builderpath]/widget/字段名.html" type=""></include></switch></code></pre>\r\n					</li>\r\n				</ul>\r\n			</li>\r\n			<li>\r\n				在&nbsp;<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">121行</code>左右的switch标签内也要添加相同格式的拓展字段数据\r\n			</li>\r\n				</ul>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	编写字段Html文件\r\n					</h2>\r\n<ul style="margin-bottom:14px;padding-left:28px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n					<li>\r\n						添加完字段后，打开Application\\Common\\util\\<span style="color:#657180;white-space:normal;">yfthink</span>\\builder\\&nbsp;<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">widget</code>文件夹\r\n					</li>\r\n					<li>\r\n						在文件夹内创建<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">字段名.html</code>文件\r\n						<ul style="margin-bottom:14px;padding-left:28px;">\r\n							<li>\r\n								在html文件内添加如下代码，case标签内的value写英文字段名,也可以从别的文件复制\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code class="language-javascript" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"=""><case value="字段名">\r\n\r\n								<div class="form-group item_{$[type]form.name} {$[type]form.extra.class|default=''''}">\r\n									<label class="left control-label"> <!--?php if($[type]form[''extra''][''must'']): ?--> <span style="color:red;">*</span> <!--?php endif; ?--> <span>{$[type]form.title}：</span> </label> \r\n									<div class="right">\r\n										\r\n									</div>\r\n\r\n								</div>\r\n</case></code></pre>\r\n							</li>\r\n						</ul>\r\n					</li>\r\n					<li>\r\n						在 <div class="right" 标签内就可以编写formbuilder字段所引入的form表单代码。<="" li="">\r\n							</div>\r\n								</li>\r\n									</ul>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	数据调用\r\n										</h2>\r\n<h4 style="font-family:" color:#657180;margin-bottom:14px;font-size:1.25em;white-space:normal;"="">\r\n	{$[type]form.name} ：form表单的name名\r\n											</h4>\r\n<h4 style="font-family:" color:#657180;margin-bottom:14px;font-size:1.25em;white-space:normal;"="">\r\n	{$[type]form.value|default=''''} ：form表单的默认值\r\n										</h4>\r\n<h4 style="font-family:" color:#657180;margin-bottom:14px;font-size:1.25em;white-space:normal;"="">\r\n	{$[type]form.tip|default=''''} ：form表单的提示信息\r\n											</h4>', 0, 0, 0, 0, 1),
(12, 'ListBuilder使用', '                            ', 0, 0, 0, 0, 0);
INSERT INTO `yf_book_index` (`id`, `title`, `content`, `create_time`, `update_time`, `sort`, `status`, `pid`) VALUES
(13, 'setMetaTitle', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setMetaTitle\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来设置页面的标题(html的head标签里的title)，页面标题一般在浏览器标签显示 但是由于1.1版本采用了多标签后台（功能页面嵌入iframe），所以暂时后台部分实际上是看不到浏览器标签上的标题产生变化的。\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function  setMetaTitle($meta_title){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n		</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n		<thead>\r\n			<tr>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数类型\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					是否必须\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					说明\r\n				</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n					$meta_title\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n					网页的标题\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n			</table>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n				</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n$builder-&gt;setMetaTitle(''新闻列表'');</code></pre>', 0, 0, 0, 0, 12),
(14, 'addTopButton', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	addTopButton\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来在页面数据列表上面的工具栏位置添加一个按钮\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function  addTopButton($type,$attr){}</code></pre>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	参数\r\n				</h3>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n				<thead>\r\n					<tr>\r\n						<th style="padding:3px 12px;border:1px solid #888888;">\r\n							参数\r\n						</th>\r\n						<th style="padding:3px 12px;border:1px solid #888888;">\r\n							参数类型\r\n						</th>\r\n						<th style="padding:3px 12px;border:1px solid #888888;">\r\n							是否必须\r\n						</th>\r\n						<th style="padding:3px 12px;border:1px solid #888888;">\r\n							说明\r\n						</th>\r\n					</tr>\r\n				</thead>\r\n				<tbody>\r\n					<tr>\r\n						<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n							$type\r\n						</td>\r\n						<td style="padding:3px 12px;border:1px solid #888888;">\r\n							string\r\n						</td>\r\n						<td style="padding:3px 12px;border:1px solid #888888;">\r\n							是\r\n						</td>\r\n						<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;">\r\n							按钮类型，主要有add/resume/forbid/recycle/restore/delete/self几种取值\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="padding:3px 12px;border:1px solid #888888;">\r\n							$attr\r\n						</td>\r\n						<td style="padding:3px 12px;border:1px solid #888888;">\r\n							array\r\n						</td>\r\n						<td style="padding:3px 12px;border:1px solid #888888;">\r\n							否\r\n						</td>\r\n						<td style="padding:3px 12px;border:1px solid #888888;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n							按钮属性，一个定了标题/链接/CSS类名等的属性描述数组，当type为self时需要\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n					</table>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	预定义按钮\r\n						</h2>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	为了大家使用更加方便，我们事先预定义了几种经常用到的按钮 主要有add/resume/forbid/recycle/restore/delete六种预定义按钮 其中resume/forbid/recycle/restore这4种类型有一个使用前提，那就是对应的数据表必须要有一个<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">status</code>字段\r\n							</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	使用示例：\r\n						</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code class="language-php" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n$builder-&gt;setMetaTitle(''文章列表'')\r\n        -&gt;addTopButton(''addnew'')     // 新增按钮\r\n        -&gt;addTopButton(''resume'',array(''model''=&gt;''food_goods_category''))  // 启用按钮（status从0到1）\r\n        -&gt;addTopButton(''forbid'',array(''model''=&gt;''food_goods_category''))  // 禁用按钮（status从1到0）\r\n        -&gt;addTopButton(''recycle'',array(''model''=&gt;''food_goods_category'')) // 回收按钮（status从1到-1）\r\n        -&gt;addTopButton(''restore'',array(''model''=&gt;''food_goods_category'')) // 恢复按钮（status从-1到1）\r\n        -&gt;addTopButton(''delete'',array(''model''=&gt;''food_goods_category'')); // 删除按钮（删了就找不回了）</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	自定义按钮\r\n					</h2>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	第一原则使用上面的预定义按钮，如果有特殊需求不能满足则使用此自定义按钮方法。 第一步：自定义按钮时首先需要给函数的第一个参数传值为<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">self</code>，只有设置了self才表示即将添加一个自定义按钮 第二步：定义一个数组类似array(''title''=&gt;''按钮名称'', href=''按钮链接'', ''class''=&gt;''按钮CSS类名'')，然后把数组传给此函数的第二个参数\r\n						</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	示例：\r\n					</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code class="language-php" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"=""> $attr[''title''] = ''新增'';\r\n $attr[''class''] = ''btn btn-primary'';\r\n $attr[''href'']  = U(''Admin/Article/add'');\r\n\r\n // 使用Builder快速建立列表页面。\r\n $builder = new \\yfthink\\builder\\ListBuilder();\r\n $builder-&gt;setMetaTitle(''文章列表'')\r\n         -&gt;addTopButton(''self'', $attr);</code></pre>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"="">\r\n					<p>\r\n						<br />\r\n					</p>\r\n						</blockquote>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"=""><span style="color:#E53333;">调用模态框编辑</span>\r\n					</blockquote>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"=""><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$attrs[''title''] = ''批量分配型号'';</span><br />\r\n<span style="font-size:14px;"> $attrs[''href''] &nbsp;= U(''fenpeixinghao'',array(''modal''=&gt;true));</span><br />\r\n<span style="font-size:14px;"> $attrs[''data-toggle''] &nbsp;= ''modal'';</span><br />\r\n<span style="font-size:14px;"> $attrs[''data-target''] &nbsp;= ''#myModal'';</span><br />\r\n<span style="font-size:14px;"> $attrs[''data-keyboard''] &nbsp;= ''false'';</span><br />\r\n<span style="font-size:14px;"> $attrs[''class''] &nbsp; &nbsp; &nbsp; = ''btn btn-danger-outline btn-pill'';</span><br />\r\n<span style="font-size:14px;"> 若需获取列表页的ids选中值，需在编辑配置中设置</span><span style="font-size:14px;white-space:normal;background-color:#F2F2F2;color:#E53333;">setAjaxSubmit</span><span style="font-size:14px;color:#E53333;">提交方式，完整示例如下</span><br />\r\n						</blockquote>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"=""><span style="font-size:14px;">public function PageIdsModalEdit()</span><br />\r\n<span style="font-size:14px;"> {</span><br />\r\n<span style="font-size:14px;"> if (request()-&gt;isPost()) {</span><br />\r\n<span style="font-size:14px;"> $goods = intval(input(''param.goods''));</span><br />\r\n<span style="font-size:14px;"> $ids = input(''param.ids/a'');</span><br />\r\n<span style="font-size:14px;"> $this-&gt;success(''设置成功'');</span><br />\r\n<span style="font-size:14px;"> }else{</span><br />\r\n<span style="font-size:14px;"> $builder = new \\yfthink\\builder\\FormBuilder();</span><br />\r\n<span style="font-size:14px;"> $builder-&gt;setMetaTitle(''分配商品型号'') // 设置页面标题</span><br />\r\n<span style="font-size:14px;"> -&gt;setPostUrl(U(''xinghao'')) // 设置表单提交地址</span><br />\r\n<span style="font-size:14px;"> -&gt;addFormItem(''goods'', ''select'', ''选择商品'','''',$datas)</span><br />\r\n<span style="font-size:14px;"> -&gt;addFormItem(''is_fugai'', ''toggle'', ''是否覆盖'')</span><br />\r\n<span style="font-size:14px;"> -&gt;setAjaxSubmit(''pageform'')</span><br />\r\n<span style="font-size:14px;"> -&gt;display();</span><br />\r\n<span style="font-size:14px;"> }</span><br />\r\n<span style="font-size:14px;"> }</span><br />\r\n<br />\r\n<br />\r\n					</blockquote>', 0, 0, 0, 0, 12),
(15, 'setSearch', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setSearch\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来设置列表右上角的搜索框搜索提交地址（一般就是当前方法的地址）和placeholder\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function  setSearch($title, $url){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数：\r\n		</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n		<thead>\r\n			<tr>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数类型\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					是否必须\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					说明\r\n				</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n					$title\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;">\r\n					搜索框中的文字描述placeholder\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					$url\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					array\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n					搜索框搜索提交地址，多条件搜索功用这个属性，也就是说，如果需要设置搜索地址，必须用这个方法\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n			</table>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n				</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n$builder-&gt;setSearch(\r\n                ''请输入ID/配置名称/配置标题'',\r\n                U(''index'', array(''group'' =&gt; $group))\r\n            )</code></pre>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	搜索要生效后台需要相应匹配的语句比如：\r\n					</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">/**\r\n * 配置列表\r\n * @param $tab 配置分组ID\r\n */\r\npublic function index($group = 1) {\r\n    // 搜索\r\n    $keyword = I(''keyword'', '''', ''string'');\r\n    $condition = array(''like'',''%''.$keyword.''%'');\r\n    $map[''id|name|title''] = array(\r\n        $condition,\r\n        $condition,\r\n        $condition,\r\n        ''_multi''=&gt;true\r\n    );\r\n    ...\r\n}</code></pre>', 0, 0, 0, 0, 12),
(16, 'setTabNav', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:&quot;line-height:1.2;color:#657180;border-bottom:1px solid #EEEEEE;white-space:normal;">\r\n	setTabNav\r\n</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:&quot;font-size:15.96px;white-space:normal;">\r\n	当一个列表页有多个TAB切换需求的时候就可以用到这个方法了，典型的比如CMS模块的栏目分类里可以设置多个分组。&nbsp;\r\n</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:&quot;font-size:15.96px;white-space:normal;">\r\n	<img src="/tp-lingyun/uploads/book/image/2018-01-04/5a4da17e1b26d.png" alt="" />\r\n</p>\r\n<h2 style="font-family:&quot;line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px solid #EEEEEE;white-space:normal;">\r\n	方法原型\r\n</h2>\r\n<pre style="font-family:Consolas, &quot;font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#F7F7F7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"><code style="font-family:Consolas, &quot;font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;">function  setTabNav($tab_list, $current_tab){}</code></pre>\r\n<h2 style="font-family:&quot;line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px solid #EEEEEE;white-space:normal;">\r\n	参数\r\n</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:&quot;font-size:15.96px;">\r\n	<thead>\r\n		<tr>\r\n			<th style="padding:3px 12px;border:1px solid #888888;">\r\n				参数\r\n			</th>\r\n			<th style="padding:3px 12px;border:1px solid #888888;">\r\n				类型\r\n			</th>\r\n			<th style="padding:3px 12px;border:1px solid #888888;">\r\n				是否必须\r\n			</th>\r\n			<th style="padding:3px 12px;border:1px solid #888888;">\r\n				说明\r\n			</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n				$tab_list\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				array\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				是\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;">\r\n				Tab列表是一个二维数组，结构如下\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				$current_tab\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				string\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				是\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n				当前TAB（对应TAB列表数组的KEY）\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p style="margin-bottom:14px;color:#657180;font-family:&quot;font-size:15.96px;white-space:normal;">\r\n	Tab列表结构：\r\n</p>\r\n<pre style="font-family:Consolas, &quot;font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#F7F7F7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"><code style="font-family:Consolas, &quot;font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;">$tab_list = array(\r\n    ''1'' =&gt; array(\r\n        ''title'' =&gt; ''Tab1标题'',\r\n        ''href''   =&gt; U(''index'', array(''group'' =&gt; 1)),\r\n    ),\r\n    ''2'' =&gt; array(\r\n        ''title'' =&gt; ''Tab2标题'',\r\n        ''href''   =&gt; U(''index'', array(''group'' =&gt; 2)),\r\n    )\r\n)</code></pre>\r\n<h2 style="font-family:&quot;line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px solid #EEEEEE;white-space:normal;">\r\n	用法示例\r\n</h2>\r\n<pre style="font-family:Consolas, &quot;font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#F7F7F7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"><code style="font-family:Consolas, &quot;font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;">// 设置Tab导航数据列表\r\n$config_group_list = C(''CONFIG_GROUP_LIST'');  // 获取配置分组\r\nforeach ($config_group_list as $key =&gt; $val) {\r\n$tab_list[$key][''title''] = $val;\r\n$tab_list[$key][''href'']  = U(''index'', array(''group'' =&gt; $key));\r\n}\r\n// 使用Builder快速建立列表页面。\r\n$builder = new \\Common\\Builder\\ListBuilder();\r\n$builder-&gt;setMetaTitle(''配置列表'')   // 设置页面标题\r\n            -&gt;addTopButton(''addnew'')   // 添加新增按钮\r\n            -&gt;addTopButton(''resume'')   // 添加启用按钮\r\n            -&gt;addTopButton(''forbid'')     // 添加禁用按钮\r\n            -&gt;addTopButton(''delete'')    // 添加删除按钮\r\n            -&gt;setSearch(''请输入ID/配置名称/配置标题'', U(''index'', array(''group'' =&gt; $group)))\r\n            -&gt;setTabNav($tab_list, $group)  // 设置页面Tab导航\r\n            -&gt;display();</code></pre>', 0, 0, 0, 0, 12),
(17, 'addTableColumn', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	addTableColumn\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来添加数据列表一列\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function addTableColumn($name, $title, $type = null, $param = null, $width = null){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数：\r\n		</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n		<thead>\r\n			<tr>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					类型\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					是否必须\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					说明\r\n				</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n					$name\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;">\r\n					字段名称，一般情况下与数据库字段名一致，现支持<code style="font-family:Consolas, " font-size:14.364px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">project_info.user_info.nickname</code>格式的多维数据显示\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					$title\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					列标题，就是生成页面列表的那一列的标题\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					$type\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					否\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					自动在生成页面前对数据进行处理，默认值是text,即原封不动，可以设置的值列表如下\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					$param\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string或array\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					否\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					如果$type设为为callback，则必须设置此项\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					$width\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					否\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n					表格列宽度：满足自定义表格列宽度的需求，使用实例：-&gt;addTableColumn(''title'', ''标题'', '''', '''', ''20%'')\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n			</table>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	$type可设置的值\r\n				</h3>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">status   ： 会将1，0，-1转换成fa图标\r\nbyte     ： 会将字节数转换为以KB为单位\r\nicon     ： 会显示为fa图标\r\ndate     ： 会将int格式的数字转换为日期如2016-02-26\r\ndatetime ： 会将int格式的数字转换为日期如2016-02-26 12:12:12\r\navatar   ： 会将图片的ID转化为图片显示（与picture相比此项多了固定的图片宽高40X40）\r\npicture  ： 会将图片的ID转化为图片显示\r\npictures ： 会将一组图片的ID转化为一组图片显示\r\ntype     ： Formbuilder的类型由英文转换为中文显示\r\ncallback ： 回调，为了满足更多自定义的数据转换，特设置了回调方式供大家自定义，该项需要配合第四个参数一起使用</code></pre>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	$param可设置的值\r\n			</h3>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	该参数可以有两种写法：\r\n				</p>\r\n<ol style="margin-bottom:14px;padding-left:28px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n				<li>\r\n					该参数是一个公共函数的名称及是一个字符串比如： -&gt;addTableColumn(''type'', ''类型'', ''callback'', ''get_book_title''), 那需要在common.php里有一个同名的函数get_book_title\r\n				</li>\r\n				<li>\r\n					该参数是一个数组时，比如-&gt;addTableColumn(''type'', ''类型'', ''callback'', array(D(''FriendlyLink''), ''link_type''))，那么link_type是FriendlyLinkModel.class.php里的一个public方法。\r\n				</li>\r\n					</ol>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"="">\r\n					<p>\r\n						推荐大家使用第二种方法，能把方法放进类里就放进类里以便于结构清晰。\r\n					</p>\r\n						</blockquote>\r\n<h4 style="font-family:" color:#657180;margin-bottom:14px;font-size:1.25em;white-space:normal;"="">\r\n	用法示例\r\n							</h4>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n-&gt;addTableColumn(''type'', ''类型'', ''callback'', array(D(''FriendlyLink''), ''link_type''))</code></pre>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	对应的FriendlyLinkModel.class.php里的回调方法如：\r\n								</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code class="language-php" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"=""> // +----------------------------------------------------------------------\r\nnamespace Cms\\Model;\r\nuse Think\\Model;\r\n\r\nclass FriendlyLinkModel extends Model {\r\n    /**\r\n     * 模块名称\r\n     */\r\n    public $moduleName = ''Cms'';\r\n    /**\r\n     * 数据库真实表名\r\n     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称\r\n     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀\r\n     */\r\n    protected $tableName = ''cms_friendly_link'';\r\n    /**\r\n     * 自动验证规则\r\n     */\r\n    protected $_validate = array(\r\n        array(''title'', ''require'', ''标题不能为空'', self::MUST_VALIDATE, ''regex'', self::MODEL_BOTH),\r\n        array(''title'', ''1,80'', ''标题长度为1-80个字符'', self::EXISTS_VALIDATE, ''length''),\r\n        array(''title'', '''', ''标题已经存在'', self::VALUE_VALIDATE, ''unique'', self::MODEL_BOTH),\r\n        array(''url'', ''require'', ''链接不能为空'', self::MUST_VALIDATE, ''regex'', self::MODEL_BOTH),\r\n        array(''url'', ''1,255'', ''链接长度为1-25个字符'', self::EXISTS_VALIDATE, ''length''),\r\n        array(''url'', '''', ''链接已经存在'', self::VALUE_VALIDATE, ''unique'', self::MODEL_BOTH),\r\n    );\r\n    /**\r\n     * 自动完成规则\r\n     */\r\n    protected $_auto = array(\r\n        array(''create_time'', ''time'', self::MODEL_INSERT, ''function''),\r\n        array(''update_time'', ''time'', self::MODEL_BOTH, ''function''),\r\n        array(''status'', ''1'', self::MODEL_INSERT),\r\n    );\r\n    /**\r\n     * 链接类型\r\n     */\r\n    public function link_type($id) {\r\n        $list[''1''] = ''友情链接'';\r\n        $list[''2''] = ''合作伙伴'';\r\n        return $id ? $list[$id] : $list;\r\n    }\r\n}</code></pre>', 0, 0, 0, 0, 12),
(18, 'setTableDataList', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setTableDataList\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来设置列表显示的数据\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function setTableDataList($table_data_list){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数：\r\n		</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n		<thead>\r\n			<tr>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					类型\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					是否必须\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					说明\r\n				</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n					$table_data_list\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					array\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n					待显示的数据数组，一般是用select方法取出的二位数组\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n			</table>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n				</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">$data_list = D(''Access'') -&gt;select();\r\n// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n$builder-&gt;setMetaTitle(''管理员列表'')  // 设置页面标题\r\n        -&gt;addTableColumn(''id'', ''ID'')\r\n        -&gt;addTableColumn(''username'', ''用户名'')\r\n        -&gt;setTableDataList($data_list)     // 数据列表</code></pre>', 0, 0, 0, 0, 12),
(19, 'setTableDataListKey', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setTableDataListKey\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来指定待显示的数据数组的主键字段（索引）名称\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function setTableDataListKey($table_data_list_key){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数：\r\n		</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n		<thead>\r\n			<tr>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					类型\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					是否必须\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					说明\r\n				</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n					$table_data_list_key\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					否\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n					待显示的数据数组的主键字段（索引）名称，默认为id，如果您的主键不是id需要设置此项\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n			</table>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n				</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">$data_list = D(''Access'') -&gt;select();\r\n// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n$builder-&gt;setMetaTitle(''管理员列表'')  // 设置页面标题\r\n        -&gt;addTableColumn(''id'', ''ID'')\r\n        -&gt;addTableColumn(''username'', ''用户名'')\r\n        -&gt;setTableDataList($data_list)     // 数据列表\r\n        -&gt;setTableDataListKey(''new_id'')    // 主键ID</code></pre>', 0, 0, 0, 0, 12);
INSERT INTO `yf_book_index` (`id`, `title`, `content`, `create_time`, `update_time`, `sort`, `status`, `pid`) VALUES
(20, 'addRightButton', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	addRightButton\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来在页面数据列表右侧的操作栏位置添加一个按钮\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function addRightButton($type, $attribute = null){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数：\r\n		</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n		<thead>\r\n			<tr>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					类型\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					是否必须\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					说明\r\n				</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n					$type\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;">\r\n					按钮类型，edit/forbid/recycle/restore/delete/self六种取值\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					$attribute\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					array\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					否\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n					按钮属性，一个定了标题/链接/CSS类名等的属性描述数组\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n			</table>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	$attribute格式如下\r\n				</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">$attr[''name'']  = ''edit2'';\r\n$attr[''title''] = ''编辑2'';\r\n$attr[''class''] = ''label label-primary'';\r\n$attr[''href'']  = U(''edit'', array(''id'' =&gt; ''__data_id__''));</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	预定义按钮\r\n					</h2>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"="">\r\n					<p>\r\n						为了大家使用更加方便，我们事先预定义了几种经常用到的按钮 主要有edit/forbid/recycle/restore/delete五种预定义按钮 其中forbid/recycle/restore/delete这4种类型有一个使用前提，那就是对应的数据表必须要有一个<code style="font-family:Consolas, " font-size:15.75px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">status</code>字段\r\n					</p>\r\n						</blockquote>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">status:-1  删除状态\r\nstatus:0  禁用状态\r\nstatus:1  正常状态</code></pre>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	使用示例：\r\n							</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code class="language-php" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n$builder-&gt;setMetaTitle(''文章列表'') </code> \r\n							<p>\r\n								<code class="language-php" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">        -&gt;addRightButton(''edit'')    // 编辑按钮</code> \r\n							</p>\r\n\r\n							<p>\r\n								<code class="language-php" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"=""><span style="font-family:Menlo, Monaco, Consolas, " font-size:13px;white-space:pre-wrap;background-color:#f5f5f5;"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&gt;addRightButton(''<span style="font-family:Menlo, Monaco, Consolas, " font-size:13px;white-space:pre-wrap;background-color:#f5f5f5;"="">editmodal</span>'')    // 模态框编辑按钮</span></code> \r\n							</p>\r\n<code class="language-php" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">        -&gt;addRightButton(''forbid'')  // 禁用按钮/启用按钮（根据status自动判断）\r\n        -&gt;addRightButton(''recycle'') // 回收按钮（status从1到-1）\r\n        -&gt;addRightButton(''restore'') // 恢复按钮（status从-1到1）\r\n        -&gt;addRightButton(''delete''); // 删除按钮（删了就找不回了）</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	自定义按钮\r\n								</h2>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"="">\r\n								<p>\r\n									第一原则使用上面的预定义按钮，如果有特殊需求不能满足则使用此自定义按钮方法。 第一步：自定义按钮时首先需要给函数的第一个参数传值为<code style="font-family:Consolas, " font-size:15.75px;padding:0px="" 0.4em;background-color:#f7f7f7;display:inline-block;word-break:break-all;white-space:pre;line-height:1.3;"="">self</code>，只有设置了self才表示即将添加一个自定义按钮 第二步：定义一个数组类似array(''title''=&gt;''按钮名称'', href=''按钮链接'', ''class''=&gt;''按钮CSS类名'')，然后把数组传给此函数的第二个参数\r\n								</p>\r\n									</blockquote>\r\n<h3 style="font-family:" line-height:1.43;color:#657180;margin-bottom:14px;font-size:1.5em;white-space:normal;"="">\r\n	注意：\r\n										</h3>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"="">\r\n										<p>\r\n											因为右侧按钮是针对某条记录的，所以ID是经常要用到的，比如编辑按钮。 这里因为在Listbuilder运行渲染页面是无法得到具体ID的，所以ListBuilder内置了__data_id__来作为替换变量，只要在链接里有会在数据foreach遍历阶段被替换成真实的ID\r\n										</p>\r\n										<p>\r\n											如果以model模态框打开，则在href中添加 ''modal''=&gt;true\r\n										</p>\r\n											</blockquote>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	示例：\r\n												</p>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code class="language-php" style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"=""> $attr[''name'']  = ''edit2'';\r\n $attr[''title''] = ''编辑2'';\r\n $attr[''class''] = ''label label-primary'';\r\n $attr[''href'']  = U(''edit'', array(''id'' =&gt; ''__data_id__'',''modal''=&gt;true));\r\n\r\n // 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n $builder-&gt;setMetaTitle(''文章列表'')\r\n         -&gt;addRightButton(''edit'');\r\n         -&gt;addRightButton(''self'', $attr);</code></pre>\r\n<blockquote style="padding:5px 5px 5px 15px;margin-bottom:14px;border-left-width:4px;border-left-color:#3399FF;color:#777777;background-color:#F2F2F2;font-family:" white-space:normal;"="">\r\n												<p>\r\n													-&gt;addRightButton(''self'', $attr)其实作用跟-&gt;addRightButton(''edit'')是一样的作用，只不过后者是预定义好的，比前者使用方便。\r\n												</p>\r\n													</blockquote>', 0, 0, 0, 0, 12),
(21, 'setTableDataPage', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setTableDataPage\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来设置数据列表的分页\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function setTableDataPage($table_data_page){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n		</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n		<thead>\r\n			<tr>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					类型\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					是否必须\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					说明\r\n				</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n					$table_data_page\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					array\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n					分页数据\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n			</table>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n				</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">$page = new Page(D(''Type'')-&gt;where($map)-&gt;count(), C(''ADMIN_PAGE_ROWS''));\r\n\r\n// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n$builder-&gt;setMetaTitle(''新闻列表'')\r\n        -&gt;setTableDataPage($page-&gt;show());</code></pre>', 0, 0, 0, 0, 12),
(22, 'alterTableData', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	alterTableData\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用于在Builder生成页面前仍然有机会修改指定的数据\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function alterTableData ($condition, $alter_data){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n		</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n		<thead>\r\n			<tr>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					类型\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					是否必须\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					说明\r\n				</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n					$condition\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					array\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;">\r\n					修改条件，修改条件是一个数组，其中:key: 数据的字段名value: 数据的旧数据值\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					$alter_data\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					array\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n					用来代替旧数据的新数据\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n			</table>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n				</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">$right_button[''no''][''title''] = ''超级管理员无需操作'';\r\n$right_button[''no''][''attribute''] = ''class="label label-warning" href="#"'';\r\n\r\n// 使用Builder快速建立列表页面。\r\n    $builder = new \\yfthink\\builder\\ListBuilder();\r\n    $builder-&gt;setMetaTitle(''部门列表'')  // 设置页面标题\r\n            -&gt;addTopButton(''addnew'')   // 添加新增按钮\r\n            -&gt;addTopButton(''resume'')   // 添加启用按钮\r\n            -&gt;addTopButton(''forbid'')   // 添加禁用按钮\r\n            -&gt;addTopButton(''delete'')   // 添加删除按钮\r\n            -&gt;setSearch(''请输入ID/部门名称'', U(''index''))\r\n            -&gt;addTableColumn(''id'', ''ID'')\r\n            -&gt;addTableColumn(''title_show'', ''标题'')\r\n            -&gt;addTableColumn(''icon'', ''图标'', ''icon'')\r\n            -&gt;addTableColumn(''sort'', ''排序'')\r\n            -&gt;addTableColumn(''status'', ''状态'', ''status'')\r\n            -&gt;addTableColumn(''right_button'', ''操作'', ''btn'')\r\n            -&gt;setTableDataList($data_list)  // 数据列表\r\n            -&gt;addRightButton(''edit'')        // 添加编辑按钮\r\n            -&gt;addRightButton(''forbid'')      // 添加禁用/启用按钮\r\n            -&gt;addRightButton(''delete'')      // 添加删除按钮\r\n            -&gt;alterTableData(  // 修改列表数据\r\n                array(''key'' =&gt; ''id'', ''value'' =&gt; ''1''),\r\n                array(''right_button'' =&gt; $right_button)\r\n            )\r\n            -&gt;display();</code></pre>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	效果如下：\r\n					</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"=""> <img class="lazy lazy-fadein img-responsive" src="https://www.lingyun.net/Uploads/2016-04-11/570b671c72627.png" style="display:inline-block;" /> \r\n				</p>', 0, 0, 0, 0, 12),
(23, 'setExtraHtml ()', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setExtraHtml ($extra_html)\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	这个是比较粗暴的用法，尽量避免使用，但有的时候不得不用，主要是一些特殊的内容或者JS逻辑\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n			</h2>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	@param string $extra_html html和js字符串\r\n				</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	就像一小段额外的html和js字符串加在列表的下面\r\n			</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n		</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n$builder-&gt;setMetaTitle(''新闻列表'');\r\n        -&gt;setExtraHtml(''注意：部分第三方金融机构可能会收取手续费，实际金额以到账为准。alert(''测试'');'');</code></pre>', 0, 0, 0, 0, 12),
(24, 'setTemplate', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	setTemplate\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	用来设置数据列表的的模版，默认模版是Application/Common/Builder/Layout/Admin/list.html 这个方法目前主要用于个人中心的特殊布局，因为个人中心的左侧是有导航菜单的，如果直接使用默认的Builder模版会导致左侧没有导航，所以通过这个方法来单独指定模板 比如C(''USER_CENTER_LIST'')配置是Application/User/View/Builder/list.html\r\n		</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function  setTemplate ($template){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n		</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n		<thead>\r\n			<tr>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					参数\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					类型\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					是否必须\r\n				</th>\r\n				<th style="padding:3px 12px;border:1px solid #888888;">\r\n					说明\r\n				</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n					$template\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					string\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;">\r\n					是\r\n				</td>\r\n				<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n					模板名类似：index/page，其实就是TP的display()支持的格式（控制器名＋方法名）\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n			</table>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n				</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n$builder-&gt;setMetaTitle(''个人中心'')\r\n        -&gt;setTableDataPage($page-&gt;show())\r\n        -&gt;setTemplate(C(''USER_CENTER_LIST''))\r\n        -&gt;display();</code></pre>', 0, 0, 0, 0, 12),
(25, 'addSearchItem', '<h1 style="font-size:2.25em;margin-bottom:14px;font-family:" line-height:1.2;color:#657180;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	addSearchItem\r\n	</h1>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	注意如果设置了此方法，那么setSearch的文本框搜索会自动隐藏，setSearch的url作为搜索提交地址属性仍然有效。\r\n		</p>\r\n<p style="margin-bottom:14px;color:#657180;font-family:" font-size:15.96px;white-space:normal;"="">\r\n	多条件搜索，在列表顶部显示多个类型条件用于数据的高效筛选，可选的类型有text、radio、select、date、 datetime、dateranger等\r\n	</p>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	方法原型\r\n		</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">function  addSearchItem ($template){}</code></pre>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	参数\r\n	</h2>\r\n<table style="background-color:#FFFFFF;margin-bottom:14px;table-layout:fixed;color:#657180;font-family:" font-size:15.96px;"="">\r\n	<thead>\r\n		<tr>\r\n			<th style="padding:3px 12px;border:1px solid #888888;">\r\n				参数\r\n			</th>\r\n			<th style="padding:3px 12px;border:1px solid #888888;">\r\n				类型\r\n			</th>\r\n			<th style="padding:3px 12px;border:1px solid #888888;">\r\n				是否必须\r\n			</th>\r\n			<th style="padding:3px 12px;border:1px solid #888888;">\r\n				说明\r\n			</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style="padding:3px 12px;border:1px solid #888888;border-top-left-radius:3px;">\r\n				$name\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				string\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				是\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;border-top-right-radius:3px;">\r\n				字段名称\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				$type\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				string\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				是\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				表单类型(可以取值的类型text、radio、select、date、 datetime、dateranger)\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				$title\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				string\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				是\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				表单标题\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				$options\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				array\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;">\r\n				否\r\n			</td>\r\n			<td style="padding:3px 12px;border:1px solid #888888;border-bottom-left-radius:3px;border-bottom-right-radius:3px;">\r\n				表单options（radio、select等类型的选项类似array(''username'' =&gt; ''用户名'', ''email'' =&gt; ''邮箱'', ''mobile'' =&gt; ''手机号'')）\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n		</table>\r\n<h2 style="font-family:" line-height:1.225;color:#657180;margin-bottom:14px;font-size:1.75em;padding-bottom:0.3em;border-bottom:1px="" solid="" #eeeeee;white-space:normal;"="">\r\n	用法示例\r\n			</h2>\r\n<pre style="font-family:Consolas, " font-size:13.566px;padding:16px;margin-bottom:14px;line-height:1.45;color:#657180;background-color:#f7f7f7;border-width:0px;border-style:initial;border-color:initial;border-radius:3px;"=""><code style="font-family:Consolas, " font-size:13.566px;border-radius:4px;white-space:pre;display:inline;word-break:break-all;line-height:inherit;max-width:100%;margin:0px;overflow:initial;border:0px;"="">// 使用Builder快速建立列表页面。\r\n$builder = new \\yfthink\\builder\\ListBuilder();\r\n$builder-&gt;setMetaTitle(''用户列表'')\r\n        -&gt;setTableDataPage($page-&gt;show())\r\n        -&gt;addSearchItem(''status'', ''select'', ''状态'' ,''状态'', array(''1'' =&gt; ''正常'', ''0'' =&gt; ''已禁用'', ''-1'' =&gt; ''已删除''))\r\n        -&gt;addSearchItem(''reg_type'', ''select'', ''注册来源'' ,''注册时间'', array(''username'' =&gt; ''用户名'', ''email'' =&gt; ''邮箱'', ''mobile'' =&gt; ''手机号''))\r\n        -&gt;addSearchItem(''create_time'', ''dateranger'', ''注册时间'' ''注册时间'')\r\n        -&gt;addSearchItem(''keyword'', ''text'', ''关键字'',''用户名/邮箱/手机号等'')\r\n        -&gt;display();\r\n\r\n// 与多条件筛选匹配的控制器代码参考如下：\r\n// 多条件筛选\r\nif (isset($_GET[''status''])) {\r\n    $map[''status''] = $_GET[''status''];\r\n} else {\r\n    $_GET[''status''] = ''1'';\r\n    $map[''status''] = $_GET[''status''];\r\n}\r\nif ($_GET[''reg_type'']) {\r\n    $map[''reg_type''] = $_GET[''reg_type''];\r\n}\r\nif ($_GET[''create_time'']) {\r\n    $create_time = explode(''~'', $_GET[''create_time'']);\r\n    $map[''create_time''] = array(array(''gt'', strtotime($create_time[0])),array(''lt'', strtotime($create_time[1]) + 86400));\r\n}\r\n$keyword   = I(''keyword'', '''', ''string'');\r\n$condition = array(''like'',''%''.$keyword.''%'');\r\n$map[''id|username|nickname|email|mobile''] = array(\r\n    $condition,\r\n    $condition,\r\n    $condition,\r\n    $condition,\r\n    $condition,\r\n    ''_multi''=&gt;true\r\n);</code></pre>', 0, 0, 0, 0, 12),
(26, 'addFormNav()', '<p>\r\n	<span style="font-size: 32px;" white-space:normal;background-color:#eeeeee;font-size:32px;"="">&nbsp;addFormNav()</span><span style="font-size:32px;"></span> \r\n</p>\r\n<p>\r\n	$formNav[''_aa'']=''扩展'';<br />\r\n// 使用FormBuilder快速建立表单页面<br />\r\n$builder = new \\yfthink\\builder\\FormBuilder();\r\n</p>\r\n<p>\r\n	$builder-&gt;setMetaTitle("新增") &nbsp;// 设置页面标题\r\n</p>\r\n-&gt;setPostUrl(U("add")) &nbsp; &nbsp; &nbsp;// 设置表单提交地址<br />\r\n-&gt;addFormNav($formNav)<br />\r\n-&gt;addFormItem("title", "text", "商品名称", "商品名称")<br />\r\n-&gt;addFormItem(''old_price'', ''num'', ''商品原价'', ''商品原价'','''','''','''',''_aa'')<br />\r\n-&gt;addFormItem(''unitname'', ''text'', ''商品单位'', ''默认为/份'')<br />\r\n-&gt;setFormData(array(''unitname'' =&gt; ''份''))<br />\r\n<p>\r\n	-&gt;display();\r\n</p>\r\n<p>\r\n	预览效果：\r\n</p>\r\n<p>\r\n	<img src="/tp-lingyun/uploads/book/image/2018-01-04/5a4e3b575dd9c.png" alt="" /> \r\n</p>', 0, 0, 0, 0, 1),
(27, '框架规范', '', 0, 0, 0, 0, 0),
(28, '环境配置', '<h1>\r\n	<strong>nginx环境配置</strong> \r\n</h1>\r\n<p>\r\n	<br />\r\n</p>\r\n<pre class="prettyprint lang-bsh">server {\r\n   listen       80;\r\n   server_name  demo.youfai.cn;\r\n  \r\n   location / {\r\n      root /alidata/www/demo.youfai.cn/;\r\n      index  index.html index.htm index.php;\r\n     \r\n      try_files $uri  @rewrite;\r\n      location ~ \\.php$ {\r\n         try_files $uri =404;\r\n         fastcgi_pass   127.0.0.1:9000;\r\n         fastcgi_index  index.php;\r\n         fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;\r\n         include        fastcgi_params;\r\n      }\r\n   }\r\n    location @rewrite {\r\n      rewrite ^/admin.php(.*)$ /admin.php?s=$1 last;\r\n      rewrite ^/index.php(.*)$ /index.php?s=$1 last; \r\n      rewrite . /index.php?s=$uri last;\r\n     }\r\n   #error_page  404              /404.html;\r\n   # redirect server error pages to the static page /50x.html\r\n   #\r\n  \r\n   error_page   500 502 503 504  /50x.html;\r\n   location = /50x.html {\r\n      root   html;\r\n   }\r\n   location ~ /\\.(svn|git) {\r\n      deny all;\r\n   }  &nbsp;&nbsp;&nbsp;&nbsp;access_log &nbsp;/alidata/log/nginx/access/demo.log;\r\n}</pre>\r\n<p>\r\n	<br />\r\n</p>', 0, 0, 0, 0, 27),
(29, '多入口支持', '<h1>\r\n	多入口支持\r\n</h1>\r\n<p>\r\n	添加 api.php 入口\r\n</p>\r\n<p>\r\n	在nginx-conf-vhosts-name.conf添加 &nbsp;\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n<pre class="prettyprint lang-bsh">location @rewrite {\r\n      rewrite ^/admin.php(.*)$ /admin.php?s=$1 last;\r\n      rewrite ^/index.php(.*)$ /index.php?s=$1 last; \r\n      rewrite ^/api.php(.*)$ /api.php?s=$1 last; \r\n      rewrite . /index.php?s=$uri last;\r\n }</pre>\r\n</p>\r\n<p>\r\n	在application/common/behavior/ &nbsp; 中添加\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<pre class="prettyprint lang-php"> // 如果是后台并且不是Admin模块则设置默认控制器层为Admin\r\n        if (MODULE_MARK === ''Admin'' &amp;&amp; request()-&gt;module() !== '''' &amp;&amp; request()-&gt;module() !== ''admin'') {\r\n            $system_config[''url_controller_layer'']  = ''admin'';\r\n            $system_config[''template''][''view_path''] = APP_DIR . request()-&gt;module() . ''/view/admin/'';\r\n        }elseif(MODULE_MARK === ''Api'' &amp;&amp; request()-&gt;module() !== '''' &amp;&amp; request()-&gt;module() !== ''api''){\r\n             $system_config[''url_controller_layer'']  = ''api'';\r\n            $system_config[''template''][''view_path''] = APP_DIR . request()-&gt;module() . ''/view/api/'';\r\n        }</pre>\r\n<p>\r\n	访问http://demo.youfai.cn/api.php/book/index/index 默认加载文件目录为：\r\n</p>\r\n<p>\r\n	视图加载为 &nbsp;/application/book/view/api/**/**\r\n</p>\r\n<p>\r\n	<img src="/uploads/book/image/2018-01-18/5a6010b7c3620.png" alt="" />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 0, 0, 0, 0, 27),
(30, '常见问题', '                            ', 0, 0, 0, 0, 0),
(31, 'post提交数组处理', '<p style="font-family:&quot;white-space:normal;">\r\n	<span style="font-size:32px;">post提交数组处理</span>\r\n</p>\r\n<p style="font-family:&quot;white-space:normal;">\r\n	提交数据为：\r\n</p>\r\n<ol class="children expanded" style="white-space:normal;min-width:0px;min-height:0px;list-style-type:none;padding-left:10px;padding-bottom:5px;color:#222222;font-family:&quot;font-size:12px;">\r\n	<li style="min-width:0px;min-height:12px;text-overflow:ellipsis;white-space:nowrap;position:relative;display:block;align-items:center;margin-top:1px;margin-left:10px;">\r\n		<div class="header-name" style="min-width:0px;min-height:0px;color:#545454;display:inline-block;margin-right:0.5em;font-weight:bold;vertical-align:top;white-space:pre-wrap;">\r\n			ids[]:1\r\n		</div>\r\n	</li>\r\n	<li style="min-width:0px;min-height:12px;text-overflow:ellipsis;white-space:nowrap;position:relative;display:block;align-items:center;margin-top:1px;margin-left:10px;">\r\n		<p style="margin-right:0.5em;min-width:0px;min-height:0px;color:#545454;display:inline-block;font-weight:bold;vertical-align:top;white-space:pre-wrap;">\r\n			ids[]:2\r\n		</p>\r\n	</li>\r\n	<li style="min-width:0px;min-height:12px;text-overflow:ellipsis;white-space:nowrap;position:relative;display:block;align-items:center;margin-top:1px;margin-left:10px;">\r\n		<p style="margin-right:0.5em;min-width:0px;min-height:0px;color:#545454;display:inline-block;font-weight:bold;vertical-align:top;white-space:pre-wrap;">\r\n			<span style="white-space:normal;">常见报错：variable type error:array &nbsp;</span> \r\n		</p>\r\n	</li>\r\n</ol>\r\n<p style="font-family:&quot;white-space:normal;">\r\n	解决办法：POST提交的数据为某一项数组，获取数据应为：I(''ids/a'')（强制类型转换）或 input(''ids/a''); 或&nbsp;<span class="hljs-attribute" font-size:12.6px;white-space:pre;background-color:rgba(128,="" 128,="" 0.0470588);"="" style="margin: 0px; padding: 0px; color: rgb(0, 136, 0);">Request</span><span font-size:12.6px;white-space:pre;background-color:rgba(128,="" 128,="" 0.0470588);"="">::instance</span><span class="hljs-function" font-size:12.6px;white-space:pre;background-color:rgba(128,="" 128,="" 0.0470588);"="" style="margin: 0px; padding: 0px;"><span class="hljs-params" style="margin:0px;padding:0px;color:#660066;">()</span>-&gt;</span><span font-size:12.6px;white-space:pre;background-color:rgba(128,="" 128,="" 0.0470588);"="">post(''</span><span class="hljs-string" font-size:12.6px;white-space:pre;background-color:rgba(128,="" 128,="" 0.0470588);"="" style="margin: 0px; padding: 0px; color: rgb(0, 136, 0);">ids/a''</span><span font-size:12.6px;white-space:pre;background-color:rgba(128,="" 128,="" 0.0470588);"="">);或&nbsp;<span font-size:16px;white-space:normal;"="" style="color: rgb(63, 63, 63);">$request-&gt;post(''data/a''):</span></span>\r\n</p>', 0, 0, 0, 0, 30),
(32, '模块主题', '<p>\r\n	例：增加商户模块后台模板\r\n</p>\r\n<p>\r\n	目录 &nbsp;application/shanghu/\r\n</p>\r\n<p>\r\n	根目录增加shanghu.php入口\r\n</p>\r\n<p>\r\n	定义模块标记\r\n</p>\r\n<p>\r\n	define(''MODULE_MARK'', ''Shanghu'');\r\n</p>\r\n<p>\r\n	在buider主题下添加\r\n</p>\r\n<p>\r\n	application/common/util/yfthink/builder/layout/shanghu目录，创建list.html,form.html页面模板\r\n</p>\r\n<p>\r\n	在/application/common/controller/Controller.php &nbsp; display函数中添加\r\n</p>\r\n<p>\r\n	$this-&gt;assign(''_shanghu_public_layout'', C(''SHANGHU_PUBLIC_LAYOUT'')); // 商户页面公共继承模版\r\n</p>\r\n<p>\r\n	//<span style="white-space:normal;">&nbsp;C(''SHANGHU_PUBLIC_LAYOUT'')为\r\n<pre style="color:#000000;">/application/shanghu/view/public/layout.html</pre>\r\n</span>\r\n</p>', 0, 0, 0, 0, 27),
(33, 'setSearchFormData', '<p>\r\n	<span style="font-size:2.25em;">setSearchFormData</span>\r\n</p>\r\n<p>\r\n</p>\r\n<p>\r\n	设置多条件搜索的value值，数组类型\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<pre class="prettyprint lang-php">$attr[''name'']  = ''查看'';\r\n         $attr[''title''] = ''查看'';\r\n         $attr[''class''] = ''label label-primary'';\r\n         $attr[''href'']  = U(''edit'', array(''id'' =&gt; ''__data_id__''));\r\n        $builder = new \\yfthink\\builder\\ListBuilder();\r\n        $builder-&gt;setMetaTitle(''订单列表'') // 设置页面标题\r\n            // -&gt;setSearch(''请输入ID/模型标题'', U(''index''))\r\n            -&gt;addTableColumn(''id'', ''ID'')\r\n            -&gt;addTableColumn(''ordersn'', ''订单号'')\r\n            -&gt;addTableColumn(''from_user'', ''会员名'')\r\n            -&gt;addTableColumn(''totalprice'', ''订单价格'')\r\n            -&gt;addTableColumn(''discounted_money'', ''实付价格'')\r\n            -&gt;addTableColumn(''status'', ''订单状态'', ''status'')\r\n            -&gt;addTableColumn(''ispay'', ''支付状态'')\r\n            -&gt;addTableColumn(''dateline'', ''下单时间'', ''time'')\r\n            -&gt;addTableColumn(''waimaiplatform'', ''订单平台'')\r\n            -&gt;addTableColumn(''right_button'', ''操作'', ''btn'')\r\n            -&gt;setTableDataList($data_list[''datas'']) // 数据列表\r\n            -&gt;setTableDataPage($data_list[''page'']) // 数据列表分页\r\n            -&gt;addSearchItem(''cid'', ''select'', ''订单平台'', ''订单平台'', $wm_platform)\r\n            -&gt;addSearchItem(''waimaiplatform'', ''select'', ''支付状态'', ''支付状态'', array(''1'' =&gt; ''已支付'', ''0'' =&gt; ''未支付''))\r\n            -&gt;addSearchItem(''status'', ''select'', ''订单状态'' ,''订单状态'', array(''1'' =&gt; ''正常'', ''0'' =&gt; ''已禁用'', ''-1'' =&gt; ''已删除''))\r\n            -&gt;addSearchItem(''dateline'', ''date'', ''下单时间'' ,''注册时间'')\r\n            -&gt;addSearchItem(''keyword'', ''text'', ''关键字'',''订单号/手机号等'')\r\n            -&gt;setSearchFormData(array(''keyword''-&gt;''sdsdd''))\r\n            -&gt;addRightButton("self",$attr)           // 添加编辑按钮\r\n            -&gt;addRightButton(''edit'') // 添加编辑按钮\r\n            -&gt;addRightButton(''forbid'',array(''model''=&gt;''admin_slider'')) // 添加禁用/启用按钮\r\n            -&gt;addRightButton(''delete'') // 添加删除按钮\r\n            -&gt;display();</pre>\r\n<p>\r\n	<br />\r\n</p>', 0, 0, 0, 0, 12),
(34, '后台不显示导航', '<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	若控制器中使用&nbsp;_initialize()函数，需继承父类\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n<pre class="prettyprint lang-php">public function _initialize()\r\n    {\r\n         parent::_initialize();\r\n        \r\n    }</pre>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src="/uploads/book/image/2018-01-26/5a6b273958652.png" alt="" />\r\n</p>', 0, 0, 0, 0, 30),
(35, '常用函数', '                            ', 0, 0, 0, 0, 0),
(36, '常用函数列表', '<p>\r\n	curl 请求\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<pre class="prettyprint lang-php">$dataob = \\yfthink\\Http::curlPost($url, $data,true)  \r\n// param  $url  请求地址，默认get\r\n// param   $data  数组$data  存在则post\r\n// true   json格式提交  默认false</pre>\r\n<pre class="prettyprint lang-php">$data = json_decode($dataob,true);</pre>\r\n<pre class="prettyprint lang-php"> </pre>\r\n<p>\r\n	字典排序\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<pre class="prettyprint lang-php">\\Arrsort\\Arrsort::reva_sort_with_Value($sign,''asc'')   //按照value值排序，默认升序，仅返回value</pre>\r\n<pre class="prettyprint lang-php">\r\n\r\n<pre class="prettyprint lang-php" style="font-size:12.6px;line-height:1.42857;">\\Arrsort\\Arrsort::sort_with_Value($sign,''desc'')   //按照value值排序，默认升序,保留key</pre>\r\n</pre>\r\n<pre class="prettyprint lang-php">\\Arrsort\\Arrsort::sort_with_key($sign , ''desc'')  //按照key值排序，默认升序,保留key\r\n</pre>\r\n<p>\r\n	<br />\r\n</p>', 0, 0, 0, 0, 35),
(37, '设置的用户组无法访问模块权限问题', '修改系统下的applicaton/admin/model/Group.php &nbsp;第62行附近的&nbsp;if (in_array($current_menu[''id''], $group_auth[request()-&gt;module()])) 为&nbsp;if (in_array($current_menu[''id''], $group_auth[ucfirst(request()-&gt;module())]))&nbsp;', 0, 0, 0, 0, 30),
(38, '修改默认模块', '修改/application/common/config/config.php 文件中的114行<br />', 0, 0, 0, 0, 30);

-- --------------------------------------------------------

--
-- 表的结构 `yf_dish_index`
--

CREATE TABLE IF NOT EXISTS `yf_dish_index` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(127) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='默认数据表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_food_goods`
--

CREATE TABLE IF NOT EXISTS `yf_food_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `sid` int(10) unsigned NOT NULL DEFAULT '0',
  `cid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(30) NOT NULL,
  `price` varchar(500) NOT NULL,
  `discount_price` varchar(500) NOT NULL,
  `box_price` varchar(10) NOT NULL DEFAULT '0',
  `min_buy_limit` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '最少购买数量',
  `is_options` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `unitname` varchar(10) NOT NULL DEFAULT '份',
  `total` int(10) NOT NULL DEFAULT '0',
  `sailed` int(10) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `is_hot` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(255) NOT NULL,
  `slides` varchar(1000) NOT NULL,
  `label` varchar(5) NOT NULL,
  `sort` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `comment_total` int(10) unsigned NOT NULL DEFAULT '0',
  `comment_good` int(10) unsigned NOT NULL DEFAULT '0',
  `print_label` int(10) unsigned NOT NULL DEFAULT '0',
  `total_update_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `content` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `attrs` varchar(1000) NOT NULL,
  `old_price` varchar(10) NOT NULL,
  `elemeId` varchar(50) NOT NULL DEFAULT '0',
  `meituanId` varchar(50) NOT NULL DEFAULT '0',
  `openplateformCode` varchar(50) NOT NULL DEFAULT '0',
  `total_warning` int(10) unsigned NOT NULL DEFAULT '0',
  `create_time` int(12) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `sid` (`sid`),
  KEY `cid` (`cid`),
  KEY `title` (`title`),
  KEY `is_hot` (`is_hot`),
  KEY `status` (`status`),
  KEY `displayorder` (`sort`),
  KEY `elemeId` (`elemeId`),
  KEY `meituanId` (`meituanId`),
  KEY `openplateformCode` (`openplateformCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `yf_food_goods`
--

INSERT INTO `yf_food_goods` (`id`, `uniacid`, `sid`, `cid`, `title`, `price`, `discount_price`, `box_price`, `min_buy_limit`, `is_options`, `unitname`, `total`, `sailed`, `status`, `is_hot`, `thumb`, `slides`, `label`, `sort`, `description`, `comment_total`, `comment_good`, `print_label`, `total_update_type`, `content`, `number`, `attrs`, `old_price`, `elemeId`, `meituanId`, `openplateformCode`, `total_warning`, `create_time`) VALUES
(1, 2, 2, 1, '商品1', '50', '', '1', 1, 1, '份', -1, 0, 1, 1, '6', 'a:2:{i:0;s:51:"images/2/2018/01/e3SQ4OQgFTuRgt4WEt4gaq54299d1e.jpg";i:1;s:51:"images/2/2018/01/R74lncmUpq4pQ2aaA22A4AWnD76Pq6.jpg";}', '热卖', 0, '                <p><span style="color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">商品详情</span><span style="color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">商品详情</span><span style="color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">商品详情</span><span style="color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">商品详情</span><span style="color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">商品详情</span><span style="color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">商品详情</span><span style="color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">商品详情</span><span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px;">商品详情</span><span style="color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">商品详情</span><span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px;">商品详情</span><span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-family: Helvetica, STHeiti, "Microsoft YaHei", Verdana, Arial, Tahoma, sans-serif; font-size: 14px;">商品详情</span></p>            ', 0, 0, 0, 1, '商品简单描述', '商品编号', 'a:2:{i:0;a:2:{s:4:"name";s:6:"微辣";s:5:"label";a:1:{i:0;s:9:"微辣111";}}i:1;a:2:{s:4:"name";s:6:"麻辣";s:5:"label";a:1:{i:0;s:10:"麻辣1111";}}}', '60', '0', '0', '0', 55, 0),
(2, 2, 2, 2, '1', '', '', '0', 1, 0, '份', 0, 0, 1, 2, '5', '', '新品', 0, '水电费水电费师德师风', 0, 0, 0, 1, '描述？？？', '5454545', '', '', '0', '-', '-', 0, 0),
(4, 0, 0, 2, '标题？', '2.00', '', '1.00', 1, 0, '份', 88, 0, 1, 2, '6', '', '新品', 5, '                                                                                撒地方释放 水电费                                                            ', 0, 0, 0, 1, '描述', '232434', '', '5.00', '0', '0', '0', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `yf_food_goods_category`
--

CREATE TABLE IF NOT EXISTS `yf_food_goods_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `sid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(20) NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `min_fee` int(10) unsigned NOT NULL DEFAULT '0',
  `elemeId` varchar(50) NOT NULL DEFAULT '0',
  `create_time` int(12) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `sid` (`sid`),
  KEY `status` (`status`),
  KEY `displayorder` (`sort`),
  KEY `elemeId` (`elemeId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `yf_food_goods_category`
--

INSERT INTO `yf_food_goods_category` (`id`, `uniacid`, `sid`, `title`, `status`, `sort`, `min_fee`, `elemeId`, `create_time`) VALUES
(1, 2, 2, '小吃', 1, 0, 9, '0', 0),
(2, 2, 2, '热菜', 1, 0, 0, '0', 0),
(3, 2, 2, '热荐', 1, 0, 0, '0', 0),
(5, 0, 0, '123', 1, 0, 0, '0', 0);

-- --------------------------------------------------------

--
-- 表的结构 `yf_food_goods_options`
--

CREATE TABLE IF NOT EXISTS `yf_food_goods_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0',
  `sid` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `total` int(10) NOT NULL DEFAULT '-1',
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `total_warning` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `sid` (`sid`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `yf_food_goods_options`
--

INSERT INTO `yf_food_goods_options` (`id`, `uniacid`, `sid`, `goods_id`, `name`, `price`, `total`, `displayorder`, `total_warning`) VALUES
(1, 2, 2, 1, '大份', '55', 9999, 0, 0),
(2, 2, 2, 1, '小份', '45', 55555, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `yf_food_index`
--

CREATE TABLE IF NOT EXISTS `yf_food_index` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(127) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='默认数据表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_category`
--

CREATE TABLE IF NOT EXISTS `yf_shop_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `title` varchar(50) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT '0',
  `isrecommand` int(10) DEFAULT '0',
  `description` varchar(500) DEFAULT NULL,
  `sort` tinyint(3) unsigned DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `ishome` tinyint(3) DEFAULT '0',
  `advimg` varchar(255) DEFAULT '',
  `advurl` varchar(500) DEFAULT '',
  `level` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_displayorder` (`sort`),
  KEY `idx_enabled` (`status`),
  KEY `idx_parentid` (`pid`),
  KEY `idx_isrecommand` (`isrecommand`),
  KEY `idx_ishome` (`ishome`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1198 ;

--
-- 转存表中的数据 `yf_shop_category`
--

INSERT INTO `yf_shop_category` (`id`, `uniacid`, `title`, `thumb`, `pid`, `isrecommand`, `description`, `sort`, `status`, `ishome`, `advimg`, `advurl`, `level`) VALUES
(1174, 1, '一级分类', '', 0, 0, '', 0, 1, 0, '', '', 1),
(1175, 1, '23', '', 0, 0, '', 0, 1, 0, '', '', 1),
(1176, 1, '121', '', 1174, 0, '', 0, 1, 0, '', '', 2),
(1177, 0, '分类2', '5', 1174, 0, '分类描述', 0, 1, 0, '', 'http://youfai.cn', NULL),
(1187, 0, '分类7', '5', 1174, 0, '分类描述', 0, 1, 0, '', 'http://youfai.cn', NULL),
(1191, 0, '阿斯顿3', '', 1190, 0, '阿斯顿', 0, 1, 0, '', '', NULL),
(1180, 0, '分类3', '5', 1174, 0, '分类描述', 0, 1, 0, '', 'http://youfai.cn', NULL),
(1192, 0, '分类3-3', '', 1189, 0, '水电费', 0, 1, 0, '', '', NULL),
(1185, 0, '分类6', '5', 1174, 0, '分类描述', 0, 1, 0, '', 'http://youfai.cn', NULL),
(1183, 0, '分类4', '5', 1174, 0, '分类描述', 0, 1, 0, '', 'http://youfai.cn', NULL),
(1184, 0, '分类5', '5', 1174, 0, '分类描述', 0, 1, 0, '', 'http://youfai.cn', NULL),
(1188, 0, '分类2', '8', 1174, 0, '分类描述', 2, 1, 0, '', '123', NULL),
(1189, 0, '分类3', '5', 1174, 0, '分类描述', 8, 1, 0, '', 'http://youfai.cn', NULL),
(1190, 0, '分类6', '', 0, 0, '', 3, 1, 0, '', '', NULL),
(1193, 0, '123', '', 0, 0, '', 0, 1, 0, '', '', NULL),
(1195, 0, '分类', '', 0, 0, '撒发达', 0, 1, 0, '', '', NULL),
(1196, 0, '子分类', '', 0, 0, '', 0, 1, 0, '', '', NULL),
(1197, 0, '分类3-3-1', '', 0, 0, '', 0, 1, 0, '', '', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_diypage`
--

CREATE TABLE IF NOT EXISTS `yf_shop_diypage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `data` longtext NOT NULL,
  `createtime` int(11) NOT NULL DEFAULT '0',
  `lastedittime` int(11) NOT NULL DEFAULT '0',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `diymenu` int(11) NOT NULL DEFAULT '0',
  `merch` int(11) NOT NULL DEFAULT '0',
  `diyadv` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_type` (`type`),
  KEY `idx_keyword` (`keyword`),
  KEY `idx_lastedittime` (`lastedittime`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_diypage_menu`
--

CREATE TABLE IF NOT EXISTS `yf_shop_diypage_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `data` text NOT NULL,
  `createtime` int(11) NOT NULL DEFAULT '0',
  `lastedittime` int(11) NOT NULL DEFAULT '0',
  `merch` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_createtime` (`createtime`),
  KEY `idx_lastedittime` (`lastedittime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_diypage_template`
--

CREATE TABLE IF NOT EXISTS `yf_shop_diypage_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(3) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `data` longtext NOT NULL,
  `preview` varchar(255) NOT NULL DEFAULT '',
  `tplid` int(11) DEFAULT '0',
  `cate` int(11) DEFAULT '0',
  `deleted` tinyint(3) DEFAULT '0',
  `merch` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_type` (`type`),
  KEY `idx_cate` (`cate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goods`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `pcate` int(11) DEFAULT '0',
  `ccate` int(11) DEFAULT '0',
  `type` tinyint(1) DEFAULT '1',
  `status` tinyint(1) DEFAULT '1',
  `sort` int(11) DEFAULT '0',
  `title` varchar(100) DEFAULT '',
  `thumb` varchar(255) DEFAULT '',
  `unit` varchar(5) DEFAULT '',
  `description` varchar(1000) DEFAULT NULL,
  `content` text,
  `goodssn` varchar(50) DEFAULT '',
  `productsn` varchar(50) DEFAULT '',
  `productprice` decimal(10,2) DEFAULT '0.00',
  `marketprice` decimal(10,2) DEFAULT '0.00',
  `costprice` decimal(10,2) DEFAULT '0.00',
  `originalprice` decimal(10,2) DEFAULT '0.00',
  `total` int(10) DEFAULT '0',
  `totalcnf` int(11) DEFAULT '0',
  `sales` int(11) DEFAULT '0',
  `salesreal` int(11) DEFAULT '0',
  `spec` varchar(5000) DEFAULT '',
  `create_time` int(11) DEFAULT '0',
  `weight` decimal(10,2) DEFAULT '0.00',
  `credit` varchar(255) DEFAULT NULL,
  `maxbuy` int(11) DEFAULT '0',
  `usermaxbuy` int(11) DEFAULT '0',
  `hasoption` int(11) DEFAULT '0',
  `dispatch` int(11) DEFAULT '0',
  `thumb_url` text,
  `isnew` tinyint(1) DEFAULT '0',
  `ishot` tinyint(1) DEFAULT '0',
  `isdiscount` tinyint(1) DEFAULT '0',
  `isrecommand` tinyint(1) DEFAULT '0',
  `issendfree` tinyint(1) DEFAULT '0',
  `istime` tinyint(1) DEFAULT '0',
  `iscomment` tinyint(1) DEFAULT '0',
  `timestart` int(11) DEFAULT '0',
  `timeend` int(11) DEFAULT '0',
  `viewcount` int(11) DEFAULT '0',
  `deleted` tinyint(3) DEFAULT '0',
  `hascommission` tinyint(3) DEFAULT '0',
  `commission1_rate` decimal(10,2) DEFAULT '0.00',
  `commission1_pay` decimal(10,2) DEFAULT '0.00',
  `commission2_rate` decimal(10,2) DEFAULT '0.00',
  `commission2_pay` decimal(10,2) DEFAULT '0.00',
  `commission3_rate` decimal(10,2) DEFAULT '0.00',
  `commission3_pay` decimal(10,2) DEFAULT '0.00',
  `score` decimal(10,2) DEFAULT '0.00',
  `taobaoid` varchar(255) DEFAULT '',
  `taotaoid` varchar(255) DEFAULT '',
  `taobaourl` varchar(255) DEFAULT '',
  `updatetime` int(11) DEFAULT '0',
  `share_title` varchar(255) DEFAULT '',
  `share_icon` varchar(255) DEFAULT '',
  `cash` tinyint(3) DEFAULT '0',
  `commission_thumb` varchar(255) DEFAULT '',
  `isnodiscount` tinyint(3) DEFAULT '0',
  `showlevels` text,
  `buylevels` text,
  `showgroups` text,
  `buygroups` text,
  `isverify` tinyint(3) DEFAULT '0',
  `storeids` text,
  `noticeopenid` varchar(255) DEFAULT '',
  `tcate` int(11) DEFAULT '0',
  `noticetype` text,
  `needfollow` tinyint(3) DEFAULT '0',
  `followtip` varchar(255) DEFAULT '',
  `followurl` varchar(255) DEFAULT '',
  `deduct` decimal(10,2) DEFAULT '0.00',
  `virtual` int(11) DEFAULT '0',
  `ccates` text,
  `discounts` text,
  `nocommission` tinyint(3) DEFAULT '0',
  `hidecommission` tinyint(3) DEFAULT '0',
  `pcates` text,
  `tcates` text,
  `cates` text,
  `artid` int(11) DEFAULT '0',
  `detail_logo` varchar(255) DEFAULT '',
  `detail_shopname` varchar(255) DEFAULT '',
  `detail_btntext1` varchar(255) DEFAULT '',
  `detail_btnurl1` varchar(255) DEFAULT '',
  `detail_btntext2` varchar(255) DEFAULT '',
  `detail_btnurl2` varchar(255) DEFAULT '',
  `detail_totaltitle` varchar(255) DEFAULT '',
  `saleupdate42392` tinyint(3) DEFAULT '0',
  `deduct2` decimal(10,2) DEFAULT '0.00',
  `ednum` int(11) DEFAULT '0',
  `edmoney` decimal(10,2) DEFAULT '0.00',
  `edareas` text,
  `diyformtype` tinyint(1) DEFAULT '0',
  `diyformid` int(11) DEFAULT '0',
  `diymode` tinyint(1) DEFAULT '0',
  `dispatchtype` tinyint(1) DEFAULT '0',
  `dispatchid` int(11) DEFAULT '0',
  `dispatchprice` decimal(10,2) DEFAULT '0.00',
  `manydeduct` tinyint(1) DEFAULT '0',
  `shorttitle` varchar(255) DEFAULT '',
  `isdiscount_title` varchar(255) DEFAULT '',
  `isdiscount_time` int(11) DEFAULT '0',
  `isdiscount_discounts` text,
  `commission` text,
  `saleupdate37975` tinyint(3) DEFAULT '0',
  `shopid` int(11) DEFAULT '0',
  `allcates` text,
  `minbuy` int(11) DEFAULT '0',
  `invoice` tinyint(3) DEFAULT '0',
  `repair` tinyint(3) DEFAULT '0',
  `seven` tinyint(3) DEFAULT '0',
  `money` varchar(255) DEFAULT '',
  `minprice` decimal(10,2) DEFAULT '0.00',
  `maxprice` decimal(10,2) DEFAULT '0.00',
  `province` varchar(255) DEFAULT '',
  `city` varchar(255) DEFAULT '',
  `buyshow` tinyint(1) DEFAULT '0',
  `buycontent` text,
  `saleupdate51117` tinyint(3) DEFAULT '0',
  `virtualsend` tinyint(1) DEFAULT '0',
  `virtualsendcontent` text,
  `verifytype` tinyint(1) DEFAULT '0',
  `diyfields` text,
  `diysaveid` int(11) DEFAULT '0',
  `diysave` tinyint(1) DEFAULT '0',
  `quality` tinyint(3) DEFAULT '0',
  `groupstype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `showtotal` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `subtitle` varchar(255) DEFAULT '',
  `minpriceupdated` tinyint(1) DEFAULT '0',
  `sharebtn` tinyint(1) NOT NULL DEFAULT '0',
  `catesinit3` text,
  `showtotaladd` tinyint(1) DEFAULT '0',
  `merchid` int(11) DEFAULT '0',
  `checked` tinyint(3) DEFAULT '0',
  `thumb_first` tinyint(3) DEFAULT '0',
  `merchsale` tinyint(1) DEFAULT '0',
  `keywords` varchar(255) DEFAULT '',
  `catch_id` varchar(255) DEFAULT '',
  `catch_url` varchar(255) DEFAULT '',
  `catch_source` varchar(255) DEFAULT '',
  `saleupdate40170` tinyint(3) DEFAULT '0',
  `saleupdate35843` tinyint(3) DEFAULT '0',
  `labelname` text,
  `autoreceive` int(11) DEFAULT '0',
  `cannotrefund` tinyint(3) DEFAULT '0',
  `saleupdate33219` tinyint(3) DEFAULT '0',
  `bargain` int(11) DEFAULT '0',
  `buyagain` decimal(10,2) DEFAULT '0.00',
  `buyagain_islong` tinyint(1) DEFAULT '0',
  `buyagain_condition` tinyint(1) DEFAULT '0',
  `buyagain_sale` tinyint(1) DEFAULT '0',
  `buyagain_commission` text,
  `saleupdate32484` tinyint(3) DEFAULT '0',
  `saleupdate36586` tinyint(3) DEFAULT '0',
  `diypage` int(11) DEFAULT NULL,
  `cashier` tinyint(1) DEFAULT '0',
  `saleupdate53481` tinyint(3) DEFAULT '0',
  `saleupdate30424` tinyint(3) DEFAULT '0',
  `isendtime` tinyint(3) NOT NULL DEFAULT '0',
  `usetime` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `merchdisplayorder` int(11) NOT NULL DEFAULT '0',
  `exchange_stock` int(11) DEFAULT '0',
  `exchange_postage` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ispresell` tinyint(3) NOT NULL DEFAULT '0',
  `presellprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `presellover` tinyint(3) NOT NULL DEFAULT '0',
  `presellovertime` int(11) NOT NULL,
  `presellstart` tinyint(3) NOT NULL DEFAULT '0',
  `preselltimestart` int(11) NOT NULL DEFAULT '0',
  `presellend` tinyint(3) NOT NULL DEFAULT '0',
  `preselltimeend` int(11) NOT NULL DEFAULT '0',
  `presellsendtype` tinyint(3) NOT NULL DEFAULT '0',
  `presellsendstatrttime` int(11) NOT NULL DEFAULT '0',
  `presellsendtime` int(11) NOT NULL DEFAULT '0',
  `edareas_code` text NOT NULL,
  `unite_total` tinyint(3) NOT NULL DEFAULT '0',
  `buyagain_price` decimal(10,2) DEFAULT '0.00',
  `threen` varchar(255) DEFAULT '',
  `intervalfloor` tinyint(1) DEFAULT '0',
  `intervalprice` varchar(512) DEFAULT '',
  `isfullback` tinyint(3) NOT NULL DEFAULT '0',
  `isstatustime` tinyint(3) NOT NULL DEFAULT '0',
  `statustimestart` int(10) NOT NULL DEFAULT '0',
  `statustimeend` int(10) NOT NULL DEFAULT '0',
  `nosearch` tinyint(1) NOT NULL DEFAULT '0',
  `showsales` tinyint(3) NOT NULL DEFAULT '1',
  `islive` int(11) NOT NULL DEFAULT '0',
  `liveprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `opencard` tinyint(1) DEFAULT '0',
  `cardid` varchar(255) DEFAULT '',
  `verifygoodsnum` int(11) DEFAULT '1',
  `verifygoodsdays` int(11) DEFAULT '1',
  `verifygoodslimittype` tinyint(1) DEFAULT '0',
  `verifygoodslimitdate` int(11) DEFAULT '0',
  `minliveprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `maxliveprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `dowpayment` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tempid` int(11) NOT NULL DEFAULT '0',
  `isstoreprice` tinyint(11) NOT NULL DEFAULT '0',
  `beforehours` int(11) NOT NULL DEFAULT '0',
  `saleupdate` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_pcate` (`pcate`),
  KEY `idx_ccate` (`ccate`),
  KEY `idx_isnew` (`isnew`),
  KEY `idx_ishot` (`ishot`),
  KEY `idx_isdiscount` (`isdiscount`),
  KEY `idx_isrecommand` (`isrecommand`),
  KEY `idx_iscomment` (`iscomment`),
  KEY `idx_issendfree` (`issendfree`),
  KEY `idx_istime` (`istime`),
  KEY `idx_deleted` (`deleted`),
  KEY `idx_tcate` (`tcate`),
  KEY `idx_scate` (`tcate`),
  KEY `idx_merchid` (`merchid`),
  KEY `idx_checked` (`checked`),
  KEY `idx_productsn` (`productsn`),
  FULLTEXT KEY `idx_buylevels` (`buylevels`),
  FULLTEXT KEY `idx_showgroups` (`showgroups`),
  FULLTEXT KEY `idx_buygroups` (`buygroups`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=199 ;

--
-- 转存表中的数据 `yf_shop_goods`
--

INSERT INTO `yf_shop_goods` (`id`, `uniacid`, `pcate`, `ccate`, `type`, `status`, `sort`, `title`, `thumb`, `unit`, `description`, `content`, `goodssn`, `productsn`, `productprice`, `marketprice`, `costprice`, `originalprice`, `total`, `totalcnf`, `sales`, `salesreal`, `spec`, `create_time`, `weight`, `credit`, `maxbuy`, `usermaxbuy`, `hasoption`, `dispatch`, `thumb_url`, `isnew`, `ishot`, `isdiscount`, `isrecommand`, `issendfree`, `istime`, `iscomment`, `timestart`, `timeend`, `viewcount`, `deleted`, `hascommission`, `commission1_rate`, `commission1_pay`, `commission2_rate`, `commission2_pay`, `commission3_rate`, `commission3_pay`, `score`, `taobaoid`, `taotaoid`, `taobaourl`, `updatetime`, `share_title`, `share_icon`, `cash`, `commission_thumb`, `isnodiscount`, `showlevels`, `buylevels`, `showgroups`, `buygroups`, `isverify`, `storeids`, `noticeopenid`, `tcate`, `noticetype`, `needfollow`, `followtip`, `followurl`, `deduct`, `virtual`, `ccates`, `discounts`, `nocommission`, `hidecommission`, `pcates`, `tcates`, `cates`, `artid`, `detail_logo`, `detail_shopname`, `detail_btntext1`, `detail_btnurl1`, `detail_btntext2`, `detail_btnurl2`, `detail_totaltitle`, `saleupdate42392`, `deduct2`, `ednum`, `edmoney`, `edareas`, `diyformtype`, `diyformid`, `diymode`, `dispatchtype`, `dispatchid`, `dispatchprice`, `manydeduct`, `shorttitle`, `isdiscount_title`, `isdiscount_time`, `isdiscount_discounts`, `commission`, `saleupdate37975`, `shopid`, `allcates`, `minbuy`, `invoice`, `repair`, `seven`, `money`, `minprice`, `maxprice`, `province`, `city`, `buyshow`, `buycontent`, `saleupdate51117`, `virtualsend`, `virtualsendcontent`, `verifytype`, `diyfields`, `diysaveid`, `diysave`, `quality`, `groupstype`, `showtotal`, `subtitle`, `minpriceupdated`, `sharebtn`, `catesinit3`, `showtotaladd`, `merchid`, `checked`, `thumb_first`, `merchsale`, `keywords`, `catch_id`, `catch_url`, `catch_source`, `saleupdate40170`, `saleupdate35843`, `labelname`, `autoreceive`, `cannotrefund`, `saleupdate33219`, `bargain`, `buyagain`, `buyagain_islong`, `buyagain_condition`, `buyagain_sale`, `buyagain_commission`, `saleupdate32484`, `saleupdate36586`, `diypage`, `cashier`, `saleupdate53481`, `saleupdate30424`, `isendtime`, `usetime`, `endtime`, `merchdisplayorder`, `exchange_stock`, `exchange_postage`, `ispresell`, `presellprice`, `presellover`, `presellovertime`, `presellstart`, `preselltimestart`, `presellend`, `preselltimeend`, `presellsendtype`, `presellsendstatrttime`, `presellsendtime`, `edareas_code`, `unite_total`, `buyagain_price`, `threen`, `intervalfloor`, `intervalprice`, `isfullback`, `isstatustime`, `statustimestart`, `statustimeend`, `nosearch`, `showsales`, `islive`, `liveprice`, `opencard`, `cardid`, `verifygoodsnum`, `verifygoodsdays`, `verifygoodslimittype`, `verifygoodslimitdate`, `minliveprice`, `maxliveprice`, `dowpayment`, `tempid`, `isstoreprice`, `beforehours`, `saleupdate`) VALUES
(198, 1, 1174, 0, 1, 1, 99, '商品名称', '4', '', '', '<p>详情123</p>', '', '', '1000.00', '100.00', '10.00', '0.00', 200, 0, 100, 0, '', 1511869408, '0.00', '', 1000, 5, 1, 0, 'a:1:{i:1;s:51:"images/1/2017/07/kesikzB8K0ibiEc0ziKGNHvk86icNs.gif";}', 1, 1, 0, 1, 1, 0, 0, 1511868960, 1512473760, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '', 0, '', '', 0, '', 1, '0', '0', '0', '0', 2, '', '', 0, '', 0, '', '', '0.00', 0, '', '{"type":1,"default":{"option393":"","option394":""}}', 0, 0, '1174,1175', '', '1174,1175', 0, '', '', '', '', '', '', '', 0, '0.00', 100, '1000.00', '', 2, 0, 0, 0, 0, '0.00', 0, '商品短标题', '', 1511868960, '{"type":1,"default":{"option393":"","option394":""}}', '{"type":0,"default":{"option393":[],"option394":[]}}', 0, 0, NULL, 2, 1, 1, 1, '', '5000.00', '10000.00', '河北省', '邯郸市', 1, '<div style="box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; font-weight: bold; text-align: center; white-space: normal; background-color: rgb(248, 248, 248);"><h4 style="box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: inherit; line-height: 50px; color: inherit; font-size: 12px;">购买后可见</h4><div class="col-sm-2 pull-right" style="box-sizing: border-box; list-style: none; margin: 0px; padding: 0px 10px; position: relative; min-height: 1px; float: right; width: 35.6875px;"><div class="switchery switchery-small checked" style="box-sizing: content-box; list-style: none; margin: 0px; padding: 0px; border: 1px solid rgb(26, 179, 148); border-radius: 20px; cursor: pointer; display: inline-block; height: 20px; position: relative; vertical-align: middle; width: 33px; user-select: none; background-clip: content-box; box-shadow: rgb(26, 179, 148) 0px 0px 0px 16px inset; transition: border 0.4s, box-shadow 0.4s, -webkit-box-shadow 0.4s, background-color 1.2s; background-color: rgb(26, 179, 148);"><small style="box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-size: 12px; background: rgb(255, 255, 255); border-radius: 100%; box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 3px; height: 20px; position: absolute; top: 0px; width: 20px; left: 13px; transition: background-color 0.4s, left 0.2s;"></small></div></div></div><p><span style="box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; text-align: center; background-color: rgb(248, 248, 248); font-size: 12px; display: block;">开启后购买过的商品才会显示</span></p><p><br/></p>', 0, 0, '', 2, 'a:2:{s:7:"diyaaaa";a:6:{s:9:"data_type";s:1:"0";s:7:"tp_name";s:12:"身份证号";s:7:"tp_must";i:1;s:13:"tp_is_default";s:1:"1";s:10:"tp_default";s:1:"0";s:11:"placeholder";s:21:"请输入身份证号";}s:5:"diyaa";a:6:{s:9:"data_type";s:1:"0";s:7:"tp_name";s:6:"姓名";s:7:"tp_must";i:1;s:13:"tp_is_default";s:1:"2";s:10:"tp_default";s:0:"";s:11:"placeholder";s:0:"";}}', 7, 1, 1, 0, 0, '副标题', 0, 0, NULL, 0, 0, 0, 1, 0, '关键词', '', '', '', 0, 0, 'N;', 7, 0, 0, 0, '1000.00', 1, 0, 1, NULL, 0, 0, 0, 1, 0, 0, 0, 100, 1511868960, 0, 0, '0.00', 1, '100.00', 1, 100, 1, 1510745820, 0, 0, 1, 1511868960, 85, '', 0, '0.00', '', 0, '', 0, 0, 1511868960, 1514460960, 0, 1, 0, '0.00', 0, '', 1, 1, 0, 0, '0.00', '0.00', '0.00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goodscode_good`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goodscode_good` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `goodsid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `qrcode` varchar(255) NOT NULL,
  `status` tinyint(3) NOT NULL,
  `displayorder` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goods_cards`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goods_cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `card_id` varchar(255) DEFAULT NULL,
  `card_title` varchar(255) DEFAULT NULL,
  `card_brand_name` varchar(255) DEFAULT NULL,
  `card_totalquantity` int(11) DEFAULT NULL,
  `card_quantity` int(11) DEFAULT NULL,
  `card_logoimg` varchar(255) DEFAULT NULL,
  `card_logowxurl` varchar(255) DEFAULT NULL,
  `card_backgroundtype` tinyint(1) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `card_backgroundimg` varchar(255) DEFAULT NULL,
  `card_backgroundwxurl` varchar(255) DEFAULT NULL,
  `prerogative` varchar(255) DEFAULT NULL,
  `card_description` varchar(255) DEFAULT NULL,
  `freewifi` tinyint(1) DEFAULT NULL,
  `withpet` tinyint(1) DEFAULT NULL,
  `freepark` tinyint(1) DEFAULT NULL,
  `deliver` tinyint(1) DEFAULT NULL,
  `custom_cell1` tinyint(1) DEFAULT NULL,
  `custom_cell1_name` varchar(255) DEFAULT NULL,
  `custom_cell1_tips` varchar(255) DEFAULT NULL,
  `custom_cell1_url` varchar(255) DEFAULT NULL,
  `color2` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goods_comment`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goods_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `goodsid` int(10) DEFAULT '0',
  `openid` varchar(50) DEFAULT '',
  `nickname` varchar(50) DEFAULT '',
  `headimgurl` varchar(255) DEFAULT '',
  `content` varchar(255) DEFAULT '',
  `createtime` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_goodsid` (`goodsid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goods_group`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goods_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `goodsids` varchar(255) NOT NULL DEFAULT '',
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `merchid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_enabled` (`enabled`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goods_label`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goods_label` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `label` varchar(255) NOT NULL DEFAULT '',
  `labelname` text NOT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '0',
  `displayorder` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goods_labelstyle`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goods_labelstyle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `style` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goods_option`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goods_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `goodsid` int(10) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `thumb` varchar(60) DEFAULT '',
  `productprice` decimal(10,2) DEFAULT '0.00',
  `marketprice` decimal(10,2) DEFAULT '0.00',
  `costprice` decimal(10,2) DEFAULT '0.00',
  `stock` int(11) DEFAULT '0',
  `weight` decimal(10,2) DEFAULT '0.00',
  `displayorder` int(11) DEFAULT '0',
  `specs` text,
  `skuId` varchar(255) DEFAULT '',
  `goodssn` varchar(255) DEFAULT '',
  `productsn` varchar(255) DEFAULT '',
  `virtual` int(11) DEFAULT '0',
  `exchange_stock` int(11) DEFAULT '0',
  `exchange_postage` decimal(10,2) NOT NULL DEFAULT '0.00',
  `presellprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `day` int(3) NOT NULL,
  `allfullbackprice` decimal(10,2) NOT NULL,
  `fullbackprice` decimal(10,2) NOT NULL,
  `allfullbackratio` decimal(10,2) DEFAULT NULL,
  `fullbackratio` decimal(10,2) DEFAULT NULL,
  `isfullback` tinyint(3) NOT NULL,
  `islive` int(11) NOT NULL,
  `liveprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_goodsid` (`goodsid`),
  KEY `idx_displayorder` (`displayorder`),
  KEY `idx_productsn` (`productsn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=395 ;

--
-- 转存表中的数据 `yf_shop_goods_option`
--

INSERT INTO `yf_shop_goods_option` (`id`, `uniacid`, `goodsid`, `title`, `thumb`, `productprice`, `marketprice`, `costprice`, `stock`, `weight`, `displayorder`, `specs`, `skuId`, `goodssn`, `productsn`, `virtual`, `exchange_stock`, `exchange_postage`, `presellprice`, `day`, `allfullbackprice`, `fullbackprice`, `allfullbackratio`, `fullbackratio`, `isfullback`, `islive`, `liveprice`) VALUES
(393, 1, 198, '黑色', '', '50000.00', '5000.00', '1220.00', 100, '343.00', 0, '283', '', '5154545454', '34534534545', 0, 0, '0.00', '1000.00', 0, '0.00', '0.00', NULL, NULL, 0, 0, '0.00'),
(394, 1, 198, '白色', '', '500000.00', '10000.00', '1220.00', 100, '343.00', 0, '284', '', '5154545454', '34534534545', 0, 0, '0.00', '2000.00', 0, '0.00', '0.00', NULL, NULL, 0, 0, '0.00');

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goods_param`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goods_param` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `goodsid` int(10) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `value` text,
  `displayorder` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_goodsid` (`goodsid`),
  KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1088 ;

--
-- 转存表中的数据 `yf_shop_goods_param`
--

INSERT INTO `yf_shop_goods_param` (`id`, `uniacid`, `goodsid`, `title`, `value`, `displayorder`) VALUES
(1085, 1, 198, '参数名称1', '参数值1', 0),
(1086, 1, 198, '参数名称2', '参数值2', 1),
(1087, 1, 198, '参数值3', '参数值3', 2);

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goods_spec`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goods_spec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `goodsid` int(11) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `description` varchar(1000) DEFAULT '',
  `displaytype` tinyint(3) DEFAULT '0',
  `content` text,
  `displayorder` int(11) DEFAULT '0',
  `propId` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_goodsid` (`goodsid`),
  KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

--
-- 转存表中的数据 `yf_shop_goods_spec`
--

INSERT INTO `yf_shop_goods_spec` (`id`, `uniacid`, `goodsid`, `title`, `description`, `displaytype`, `content`, `displayorder`, `propId`) VALUES
(91, 1, 198, '颜色', '', 0, 'a:2:{i:0;s:3:"283";i:1;s:3:"284";}', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_goods_spec_item`
--

CREATE TABLE IF NOT EXISTS `yf_shop_goods_spec_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `specid` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT '',
  `thumb` varchar(255) DEFAULT '',
  `show` int(11) DEFAULT '0',
  `displayorder` int(11) DEFAULT '0',
  `valueId` varchar(255) DEFAULT '',
  `virtual` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_specid` (`specid`),
  KEY `idx_show` (`show`),
  KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=285 ;

--
-- 转存表中的数据 `yf_shop_goods_spec_item`
--

INSERT INTO `yf_shop_goods_spec_item` (`id`, `uniacid`, `specid`, `title`, `thumb`, `show`, `displayorder`, `valueId`, `virtual`) VALUES
(283, 1, 91, '黑色', '', 1, 0, '', 0),
(284, 1, 91, '白色', '', 1, 1, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_index`
--

CREATE TABLE IF NOT EXISTS `yf_shop_index` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(127) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='默认数据表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `yf_shop_index`
--

INSERT INTO `yf_shop_index` (`id`, `title`, `content`, `create_time`, `update_time`, `sort`, `status`) VALUES
(1, '456', '65465456', 1512738476, 1512738476, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT '0',
  `groupid` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `agentid` int(11) DEFAULT '0',
  `openid` varchar(50) DEFAULT '',
  `realname` varchar(20) DEFAULT '',
  `mobile` varchar(11) DEFAULT '',
  `pwd` varchar(32) DEFAULT '',
  `weixin` varchar(100) DEFAULT '',
  `content` text,
  `createtime` int(10) DEFAULT '0',
  `agenttime` int(10) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `isagent` tinyint(1) DEFAULT '0',
  `clickcount` int(11) DEFAULT '0',
  `agentlevel` int(11) DEFAULT '0',
  `noticeset` text,
  `nickname` varchar(255) DEFAULT '',
  `credit1` decimal(10,2) DEFAULT '0.00',
  `credit2` decimal(10,2) DEFAULT '0.00',
  `birthyear` varchar(255) DEFAULT '',
  `birthmonth` varchar(255) DEFAULT '',
  `birthday` varchar(255) DEFAULT '',
  `gender` tinyint(3) DEFAULT '0',
  `avatar` varchar(255) DEFAULT '',
  `province` varchar(255) DEFAULT '',
  `city` varchar(255) DEFAULT '',
  `area` varchar(255) DEFAULT '',
  `childtime` int(11) DEFAULT '0',
  `inviter` int(11) DEFAULT '0',
  `agentnotupgrade` int(11) DEFAULT '0',
  `agentselectgoods` tinyint(3) DEFAULT '0',
  `agentblack` int(11) DEFAULT '0',
  `fixagentid` tinyint(3) DEFAULT '0',
  `diymemberid` int(11) DEFAULT '0',
  `diymemberfields` text,
  `diymemberdata` text,
  `diymemberdataid` int(11) DEFAULT '0',
  `diycommissionid` int(11) DEFAULT '0',
  `diycommissionfields` text,
  `diycommissiondata` text,
  `diycommissiondataid` int(11) DEFAULT '0',
  `isblack` int(11) DEFAULT '0',
  `username` varchar(255) DEFAULT '',
  `commission_total` decimal(10,2) DEFAULT '0.00',
  `endtime2` int(11) DEFAULT '0',
  `ispartner` tinyint(3) DEFAULT '0',
  `partnertime` int(11) DEFAULT '0',
  `partnerstatus` tinyint(3) DEFAULT '0',
  `partnerblack` tinyint(3) DEFAULT '0',
  `partnerlevel` int(11) DEFAULT '0',
  `partnernotupgrade` tinyint(3) DEFAULT '0',
  `diyglobonusid` int(11) DEFAULT '0',
  `diyglobonusdata` text,
  `diyglobonusfields` text,
  `isaagent` tinyint(3) DEFAULT '0',
  `aagentlevel` int(11) DEFAULT '0',
  `aagenttime` int(11) DEFAULT '0',
  `aagentstatus` tinyint(3) DEFAULT '0',
  `aagentblack` tinyint(3) DEFAULT '0',
  `aagentnotupgrade` tinyint(3) DEFAULT '0',
  `aagenttype` tinyint(3) DEFAULT '0',
  `aagentprovinces` text,
  `aagentcitys` text,
  `aagentareas` text,
  `diyaagentid` int(11) DEFAULT '0',
  `diyaagentdata` text,
  `diyaagentfields` text,
  `salt` varchar(32) DEFAULT NULL,
  `mobileverify` tinyint(3) DEFAULT '0',
  `mobileuser` tinyint(3) DEFAULT '0',
  `carrier_mobile` varchar(11) DEFAULT '0',
  `isauthor` tinyint(1) DEFAULT '0',
  `authortime` int(11) DEFAULT '0',
  `authorstatus` tinyint(1) DEFAULT '0',
  `authorblack` tinyint(1) DEFAULT '0',
  `authorlevel` int(11) DEFAULT '0',
  `authornotupgrade` tinyint(1) DEFAULT '0',
  `diyauthorid` int(11) DEFAULT '0',
  `diyauthordata` text,
  `diyauthorfields` text,
  `authorid` int(11) DEFAULT '0',
  `comefrom` varchar(20) DEFAULT NULL,
  `openid_qq` varchar(50) DEFAULT NULL,
  `openid_wx` varchar(50) DEFAULT NULL,
  `diymaxcredit` tinyint(3) DEFAULT '0',
  `maxcredit` int(11) DEFAULT '0',
  `datavalue` varchar(50) NOT NULL DEFAULT '',
  `openid_wa` varchar(50) DEFAULT NULL,
  `nickname_wechat` varchar(255) DEFAULT '',
  `avatar_wechat` varchar(255) DEFAULT '',
  `updateaddress` tinyint(1) NOT NULL DEFAULT '0',
  `membercardid` varchar(255) DEFAULT '',
  `membercardcode` varchar(255) DEFAULT '',
  `membershipnumber` varchar(255) DEFAULT '',
  `membercardactive` tinyint(1) DEFAULT '0',
  `commission` decimal(10,2) DEFAULT '0.00',
  `commission_pay` decimal(10,2) DEFAULT '0.00',
  `idnumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_shareid` (`agentid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_status` (`status`),
  KEY `idx_agenttime` (`agenttime`),
  KEY `idx_isagent` (`isagent`),
  KEY `idx_uid` (`uid`),
  KEY `idx_groupid` (`groupid`),
  KEY `idx_level` (`level`),
  KEY `idx_mobile` (`mobile`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2188 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_address`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `openid` varchar(50) DEFAULT '0',
  `realname` varchar(20) DEFAULT '',
  `mobile` varchar(11) DEFAULT '',
  `province` varchar(30) DEFAULT '',
  `city` varchar(30) DEFAULT '',
  `area` varchar(30) DEFAULT '',
  `address` varchar(300) DEFAULT '',
  `isdefault` tinyint(1) DEFAULT '0',
  `zipcode` varchar(255) DEFAULT '',
  `deleted` tinyint(1) DEFAULT '0',
  `street` varchar(50) NOT NULL DEFAULT '',
  `datavalue` varchar(50) NOT NULL DEFAULT '',
  `streetdatavalue` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_isdefault` (`isdefault`),
  KEY `idx_deleted` (`deleted`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_cart`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `openid` varchar(100) DEFAULT '',
  `goodsid` int(11) DEFAULT '0',
  `total` int(11) DEFAULT '0',
  `marketprice` decimal(10,2) DEFAULT '0.00',
  `deleted` tinyint(1) DEFAULT '0',
  `optionid` int(11) DEFAULT '0',
  `createtime` int(11) DEFAULT '0',
  `diyformdataid` int(11) DEFAULT '0',
  `diyformdata` text,
  `diyformfields` text,
  `diyformid` int(11) DEFAULT '0',
  `selected` tinyint(1) DEFAULT '1',
  `selectedadd` tinyint(1) DEFAULT '1',
  `merchid` int(11) DEFAULT '0',
  `isnewstore` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_goodsid` (`goodsid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_deleted` (`deleted`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_favorite`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_favorite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `goodsid` int(10) DEFAULT '0',
  `openid` varchar(50) DEFAULT '',
  `deleted` tinyint(1) DEFAULT '0',
  `createtime` int(11) DEFAULT '0',
  `merchid` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_goodsid` (`goodsid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_deleted` (`deleted`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_group`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `groupname` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_history`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `goodsid` int(10) DEFAULT '0',
  `openid` varchar(50) DEFAULT '',
  `deleted` tinyint(1) DEFAULT '0',
  `createtime` int(11) DEFAULT '0',
  `times` int(11) DEFAULT '0',
  `merchid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_goodsid` (`goodsid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_deleted` (`deleted`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2234 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_level`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `level` int(11) DEFAULT '0',
  `levelname` varchar(50) DEFAULT '',
  `ordermoney` decimal(10,2) DEFAULT '0.00',
  `ordercount` int(10) DEFAULT '0',
  `discount` decimal(10,2) DEFAULT '0.00',
  `enabled` tinyint(3) DEFAULT '0',
  `enabledadd` tinyint(1) DEFAULT '0',
  `buygoods` tinyint(1) NOT NULL DEFAULT '0',
  `goodsids` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_log`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `openid` varchar(255) DEFAULT '',
  `type` tinyint(3) DEFAULT NULL,
  `logno` varchar(255) DEFAULT '',
  `title` varchar(255) DEFAULT '',
  `createtime` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `money` decimal(10,2) DEFAULT '0.00',
  `rechargetype` varchar(255) DEFAULT '',
  `gives` decimal(10,2) DEFAULT NULL,
  `couponid` int(11) DEFAULT '0',
  `transid` varchar(255) DEFAULT '',
  `realmoney` decimal(10,2) DEFAULT '0.00',
  `charge` decimal(10,2) DEFAULT '0.00',
  `deductionmoney` decimal(10,2) DEFAULT '0.00',
  `isborrow` tinyint(3) DEFAULT '0',
  `borrowopenid` varchar(100) DEFAULT '',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `apppay` tinyint(3) NOT NULL DEFAULT '0',
  `alipay` varchar(50) NOT NULL DEFAULT '',
  `bankname` varchar(50) NOT NULL DEFAULT '',
  `bankcard` varchar(50) NOT NULL DEFAULT '',
  `realname` varchar(50) NOT NULL DEFAULT '',
  `applytype` tinyint(3) NOT NULL DEFAULT '0',
  `sendmoney` decimal(10,2) DEFAULT '0.00',
  `senddata` text,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_type` (`type`),
  KEY `idx_createtime` (`createtime`),
  KEY `idx_status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=106 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_mergelog`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_mergelog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `mergetime` int(11) NOT NULL DEFAULT '0',
  `openid_a` varchar(30) NOT NULL,
  `openid_b` varchar(30) NOT NULL,
  `mid_a` int(11) NOT NULL,
  `mid_b` int(11) NOT NULL,
  `detail_a` text,
  `detail_b` text,
  `detail_c` text,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_mid_a` (`mid_a`),
  KEY `idx_mid_b` (`mid_b`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_message_template`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_message_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT '',
  `template_id` varchar(255) DEFAULT '',
  `first` text NOT NULL,
  `firstcolor` varchar(255) DEFAULT '',
  `data` text NOT NULL,
  `remark` text NOT NULL,
  `remarkcolor` varchar(255) DEFAULT '',
  `url` varchar(255) NOT NULL,
  `createtime` int(11) DEFAULT '0',
  `sendtimes` int(11) DEFAULT '0',
  `sendcount` int(11) DEFAULT '0',
  `typecode` varchar(30) DEFAULT '',
  `messagetype` tinyint(1) DEFAULT '0',
  `send_desc` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_message_template_default`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_message_template_default` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typecode` varchar(255) DEFAULT NULL,
  `uniacid` int(11) DEFAULT NULL,
  `templateid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_message_template_type`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_message_template_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `typecode` varchar(255) DEFAULT NULL,
  `templatecode` varchar(255) DEFAULT NULL,
  `templateid` varchar(255) DEFAULT NULL,
  `templatename` varchar(255) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `showtotaladd` tinyint(1) DEFAULT '0',
  `typegroup` varchar(255) DEFAULT '',
  `groupname` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `yf_shop_member_message_template_type`
--

INSERT INTO `yf_shop_member_message_template_type` (`id`, `name`, `typecode`, `templatecode`, `templateid`, `templatename`, `content`, `showtotaladd`, `typegroup`, `groupname`) VALUES
(1, '订单付款通知', 'saler_pay', 'OPENTM405584202', 'xldHFTObiLLm7AK544PzW4bFJGgbS0o8Po4cXOgYEis', '订单付款通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}商品名称：{{keyword2.DATA}}商品数量：{{keyword3.DATA}}支付金额：{{keyword4.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(2, '自提订单提交成功通知', 'carrier', 'OPENTM201594720', 'W6-XbT9l2Wb9FUUISss9yVZdPU8iEmEes9IZfvNZnbc', '订单付款通知', '{{first.DATA}}自提码：{{keyword1.DATA}}商品详情：{{keyword2.DATA}}提货地址：{{keyword3.DATA}}提货时间：{{keyword4.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(3, '订单取消通知', 'cancel', 'OPENTM201764653', 'EA6fL2052fvAs7F9w0Dx_UGbVuXmDFqLcrdT4IukWEY', '订单关闭提醒', '{{first.DATA}}订单商品：{{keyword1.DATA}}订单编号：{{keyword2.DATA}}下单时间：{{keyword3.DATA}}订单金额：{{keyword4.DATA}}关闭时间：{{keyword5.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(4, '订单即将取消通知', 'willcancel', 'OPENTM201764653', 'EA6fL2052fvAs7F9w0Dx_UGbVuXmDFqLcrdT4IukWEY', '订单关闭提醒', '{{first.DATA}}订单商品：{{keyword1.DATA}}订单编号：{{keyword2.DATA}}下单时间：{{keyword3.DATA}}订单金额：{{keyword4.DATA}}关闭时间：{{keyword5.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(5, '订单支付成功通知', 'pay', 'OPENTM405584202', 'xldHFTObiLLm7AK544PzW4bFJGgbS0o8Po4cXOgYEis', '订单支付通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}商品名称：{{keyword2.DATA}}商品数量：{{keyword3.DATA}}支付金额：{{keyword4.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(6, '订单发货通知', 'send', 'OPENTM401874827', 'c0Db6XJBYJ0PcdDyDR5YsoGKy6zfvnQrNM97Ml2hBt4', '订单发货通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}快递公司：{{keyword2.DATA}}快递单号：{{keyword3.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(7, '自动发货通知(虚拟物品及卡密)', 'virtualsend', 'OPENTM207793687', 'c2kQ5Pf7QkBUXhAVQRGpRusO1BS2uu_IBjPlIZ7IbYo', '自动发货通知', '{{first.DATA}}商品名称：{{keyword1.DATA}}订单号：{{keyword2.DATA}}订单金额：{{keyword3.DATA}}卡密信息：{{keyword4.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(8, '订单状态更新(修改收货地址)(修改价格)', 'orderstatus', 'TM00017', 'v6w5z7I8FMki08ndnGnfHSyx46eyYq9m_cIZUcvwCgU', '订单付款通知', '{{first.DATA}}订单编号: {{OrderSn.DATA}}订单状态: {{OrderStatus.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(9, '退款成功通知', 'refund1', 'TM00430', 'ez-VqnyVFEX6msJfoegrwMK2qZ6Va02sbOWvaHIMFNw', '退款成功通知', '{{first.DATA}}退款金额：{{orderProductPrice.DATA}}商品详情：{{orderProductName.DATA}}订单编号：{{orderName.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(10, '换货成功通知', 'refund3', 'OPENTM200605630', 'uS1mhnM85BtUum0s5xmlfEhnDGupvYqUkjK0A5o0sb8', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(11, '退款申请驳回通知', 'refund2', 'OPENTM200605630', 'uS1mhnM85BtUum0s5xmlfEhnDGupvYqUkjK0A5o0sb8', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(12, '充值成功通知', 'recharge_ok', 'OPENTM207727673', 'PWycmpCcbBEOuB99kZK6Lb_S_Ve6rZoigooR8lHtRHk', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(13, '提现成功通知', 'withdraw_ok', 'OPENTM207422808', 'dpgcRnw1OrF_Beo7kgkK_0ThxcEY3nxpGHUPZ9Q4Yt0', '提现通知', '{{first.DATA}}申请提现金额：{{keyword1.DATA}}取提现手续费：{{keyword2.DATA}}实际到账金额：{{keyword3.DATA}}提现渠道：{{keyword4.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(14, '会员升级通知(任务处理通知)', 'upgrade', 'OPENTM200605630', 'UhLLmFRFoJB21zWe8Ue6s2Wbs6-hwAIcywjXFPEgAfk', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(15, '充值成功通知（后台管理员手动）', 'backrecharge_ok', 'OPENTM207727673', '8cH0W4PS46ttwb0NKaOsWlZXzp68pFkvhmz8Cx1TFYI', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(16, '积分变动提醒', 'backpoint_ok', 'OPENTM207509450', 't4X8tcZsZRfiLaxvlZSd9QTgmQTZRpy110DgoJeu4DU', '积分变动提醒', '{{first.DATA}}获得时间：{{keyword1.DATA}}获得积分：{{keyword2.DATA}}获得原因：{{keyword3.DATA}}当前积分：{{keyword4.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(17, '换货发货通知', 'refund4', 'OPENTM401874827', 'c0Db6XJBYJ0PcdDyDR5YsoGKy6zfvnQrNM97Ml2hBt4', '订单发货通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}快递公司：{{keyword2.DATA}}快递单号：{{keyword3.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(18, '砍价活动通知', 'bargain_message', 'OPENTM200605630', NULL, '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', 0, 'bargain', '砍价消息通知'),
(19, '拼团活动通知', 'groups', NULL, NULL, NULL, NULL, 0, 'groups', '拼团消息通知'),
(20, '人人分销通知', 'commission', NULL, NULL, NULL, NULL, 0, 'commission', '分销消息通知'),
(21, '商品付款通知', 'saler_goodpay', 'OPENTM200605630', '', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(22, '砍到底价通知', 'bargain_fprice', 'OPENTM200605630', '', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', 0, 'bargain', '砍价消息通知'),
(23, '订单收货通知(卖家)', 'saler_finish', 'OPENTM200605630', '', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', 0, 'sys', '系统消息通知'),
(24, '余额兑换成功通知', 'exchange_balance', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', 0, 'exchange', '兑换中心消息通知'),
(25, '积分兑换成功通知', 'exchange_score', 'OPENTM207509450', '', '积分变动提醒', '{{first.DATA}}获得时间：{{keyword1.DATA}}获得积分：{{keyword2.DATA}}获得原因：{{keyword3.DATA}}当前积分：{{keyword4.DATA}}{{remark.DATA}}', 0, 'exchange', '兑换中心消息通知'),
(26, '兑换中心余额充值通知', 'exchange_recharge', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', 0, 'exchange', '兑换中心消息通知'),
(27, '游戏中心通知', 'lottery_get', 'OPENTM200605630', '', '任务处理通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}通知类型：{{keyword2.DATA}}{{remark.DATA}}', 0, 'lottery', '抽奖消息通知');

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_printer`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_printer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT '',
  `type` tinyint(3) DEFAULT '0',
  `print_data` text,
  `createtime` int(11) DEFAULT '0',
  `merchid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`) USING BTREE,
  KEY `idx_createtime` (`createtime`) USING BTREE,
  KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_printer_template`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_printer_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT '',
  `type` tinyint(3) DEFAULT '0',
  `print_title` varchar(255) DEFAULT '',
  `print_style` varchar(255) DEFAULT '',
  `print_data` text,
  `code` varchar(500) DEFAULT '',
  `qrcode` varchar(500) DEFAULT '',
  `createtime` int(11) DEFAULT '0',
  `merchid` int(11) DEFAULT '0',
  `goodssn` tinyint(1) NOT NULL DEFAULT '0',
  `productsn` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`) USING BTREE,
  KEY `idx_createtime` (`createtime`) USING BTREE,
  KEY `idx_merchid` (`merchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `yf_shop_member_rank`
--

CREATE TABLE IF NOT EXISTS `yf_shop_member_rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
