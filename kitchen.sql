-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015 �?12 ??09 ??13:55
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
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `m_num` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `bread`
--

INSERT INTO `bread` (`id`, `m_num`, `time`) VALUES
('吐司', 1, 10);

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `manager`
--

INSERT INTO `manager` (`id`, `pwd`) VALUES
('Bob', '0000');

-- --------------------------------------------------------

--
-- 資料表結構 `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `exp` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '1',
  `coin` int(11) NOT NULL DEFAULT '10',
  `material` int(11) NOT NULL DEFAULT '0',
  `oven` int(11) NOT NULL DEFAULT '1',
  `baked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `player`
--

INSERT INTO `player` (`id`, `pwd`, `exp`, `level`, `coin`, `material`, `oven`, `baked`) VALUES
('Peter', '555', 0, 1, 10, 0, 1, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `bread`
--
ALTER TABLE `bread`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
