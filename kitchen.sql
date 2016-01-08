-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016 �?01 ??08 ??11:54
-- 伺服器版本: 5.6.24
-- PHP 版本： 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `kitchen`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bread`
--

CREATE TABLE IF NOT EXISTS `bread` (
  `bid` int(11) NOT NULL,
  `bname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `baketime` int(11) NOT NULL,
  `m_num` int(11) NOT NULL,
  `sellmoney` int(11) NOT NULL,
  `avallevel` int(11) NOT NULL,
  `bakeexp` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `bread`
--

INSERT INTO `bread` (`bid`, `bname`, `baketime`, `m_num`, `sellmoney`, `avallevel`, `bakeexp`) VALUES
(1, '薑餅人', 10, 1, 20, 1, 5),
(2, '甜甜圈', 20, 2, 35, 2, 10),
(3, '紅豆麵包', 40, 3, 55, 3, 15),
(4, '杯子蛋糕', 60, 4, 70, 4, 20),
(5, '法國麵包', 60, 5, 90, 5, 25),
(6, '牛角麵包', 80, 6, 105, 6, 30),
(7, '牛奶土司', 100, 7, 125, 7, 35),
(8, '燕麥土司', 120, 8, 140, 8, 40);

-- --------------------------------------------------------

--
-- 資料表結構 `ovenplayer`
--

CREATE TABLE IF NOT EXISTS `ovenplayer` (
  `opid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `pid` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid` int(11) NOT NULL,
  `btime` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '4'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `ovenplayer`
--

INSERT INTO `ovenplayer` (`opid`, `oid`, `pid`, `bid`, `btime`, `status`) VALUES
(1, 1, '111', 0, 0, 0),
(2, 2, '111', 0, 0, 0),
(3, 3, '111', 0, 0, 3),
(4, 4, '111', 0, 0, 3),
(5, 1, '222', 0, 0, 0),
(6, 2, '222', 0, 0, 4),
(7, 3, '222', 0, 0, 4),
(8, 4, '222', 0, 0, 4),
(9, 1, '123', 0, 0, 0),
(10, 2, '123', 0, 0, 4),
(11, 3, '123', 0, 0, 4),
(12, 4, '123', 0, 0, 4);

-- --------------------------------------------------------

--
-- 資料表結構 `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `pid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `exp` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '1',
  `coin` int(11) NOT NULL DEFAULT '500',
  `material` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `player`
--

INSERT INTO `player` (`pid`, `pname`, `pwd`, `exp`, `level`, `coin`, `material`) VALUES
('111', 'a', '111', 114, 40, 999190, 999932),
('123', 'a', '123', 15, 1, 425, 3),
('222', '222', '222', 0, 1, 30, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `playerbread`
--

CREATE TABLE IF NOT EXISTS `playerbread` (
  `pbid` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid` int(11) NOT NULL,
  `pid` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `playerbread`
--

INSERT INTO `playerbread` (`pbid`, `bid`, `pid`, `bnum`) VALUES
('111_1', 1, '111', 0),
('111_2', 2, '111', 0),
('123_1', 1, '123', 2);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `bread`
--
ALTER TABLE `bread`
  ADD PRIMARY KEY (`bid`);

--
-- 資料表索引 `ovenplayer`
--
ALTER TABLE `ovenplayer`
  ADD PRIMARY KEY (`opid`);

--
-- 資料表索引 `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`pid`);

--
-- 資料表索引 `playerbread`
--
ALTER TABLE `playerbread`
  ADD PRIMARY KEY (`pbid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `bread`
--
ALTER TABLE `bread`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- 使用資料表 AUTO_INCREMENT `ovenplayer`
--
ALTER TABLE `ovenplayer`
  MODIFY `opid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
