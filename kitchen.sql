-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2015 at 09:58 PM
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
  `m_cost` int(11) NOT NULL,
  `sellmoney` int(11) NOT NULL,
  `avallevel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bread`
--

INSERT INTO `bread` (`bid`, `bname`, `baketime`, `m_cost`, `sellmoney`, `avallevel`) VALUES
(1, '甜甜圈', 120, 10, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ovenplayer`
--

CREATE TABLE IF NOT EXISTS `ovenplayer` (
  `oid` int(11) NOT NULL,
  `pname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid` int(11) NOT NULL,
  `btime` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `coin` int(11) NOT NULL DEFAULT '30'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`pid`, `pname`, `pwd`, `exp`, `level`, `coin`) VALUES
('111', 'a', '111', 0, 1, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `playerbread`
--

CREATE TABLE IF NOT EXISTS `playerbread` (
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `bnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playermaterial`
--

CREATE TABLE IF NOT EXISTS `playermaterial` (
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `bmnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bread`
--
ALTER TABLE `bread`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bread`
--
ALTER TABLE `bread`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
