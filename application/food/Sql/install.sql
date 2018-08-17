-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?01 �?04 �?04:34
-- 服务器版本: 5.5.53
-- PHP 版本: 5.5.38

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
(4, 0, 0, 2, '标题？', '', '', '0', 1, 0, '份', 0, 0, 1, 2, '6', '', '新品', 5, '                                撒地方释放 水电费                        ', 0, 0, 0, 1, '描述', '232434', '', '', '0', '0', '0', 0, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `yf_food_goods_category`
--

INSERT INTO `yf_food_goods_category` (`id`, `uniacid`, `sid`, `title`, `status`, `sort`, `min_fee`, `elemeId`, `create_time`) VALUES
(1, 2, 2, '小吃', 1, 0, 9, '0', 0),
(2, 2, 2, '热菜', 1, 0, 0, '0', 0),
(3, 2, 2, '热荐', 1, 0, 0, '0', 0);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
