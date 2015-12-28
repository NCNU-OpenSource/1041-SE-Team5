-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2015 at 10:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `bread`
--

CREATE TABLE IF NOT EXISTS `bread` (
  `bid` int(11) NOT NULL,
  `bname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `baketime` int(11) NOT NULL,
  `m_num` int(11) NOT NULL,
  `sellmoney` int(11) NOT NULL,
  `avallevel` int(11) NOT NULL,
  `bakeexp` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bread`
--

INSERT INTO `bread` (`bid`, `bname`, `baketime`, `m_num`, `sellmoney`, `avallevel`, `bakeexp`) VALUES
(1, '甜甜圈', 120, 2, 15, 1, 5),
(2, '紅豆麵包', 120, 3, 100, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `ovenplayer`
--

CREATE TABLE IF NOT EXISTS `ovenplayer` (
  `oid` int(11) NOT NULL,
  `pname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid` int(11) NOT NULL,
  `btime` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ovenplayer`
--

INSERT INTO `ovenplayer` (`oid`, `pname`, `bid`, `btime`, `status`) VALUES
(1, 'a', 0, 0, 0),
(2, 'a', 0, 0, 0),
(3, 'a', 0, 0, 3),
(4, 'a', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `pid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `exp` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '1',
  `coin` int(11) NOT NULL DEFAULT '30',
  `material` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`pid`, `pname`, `pwd`, `exp`, `level`, `coin`, `material`) VALUES
('111', 'a', '111', 72, 40, 999000, 999952);

-- --------------------------------------------------------

--
-- Table structure for table `playerbread`
--

CREATE TABLE IF NOT EXISTS `playerbread` (
  `pbid` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid` int(11) NOT NULL,
  `pname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playerbread`
--

INSERT INTO `playerbread` (`pbid`, `bid`, `pname`, `bnum`) VALUES
('a_1', 1, 'a', 3),
('a_2', 2, 'a', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bread`
--
ALTER TABLE `bread`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `ovenplayer`
--
ALTER TABLE `ovenplayer`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `playerbread`
--
ALTER TABLE `playerbread`
  ADD PRIMARY KEY (`pbid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bread`
--
ALTER TABLE `bread`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
