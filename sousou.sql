-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2019-05-20 11:18:07
-- 服务器版本： 5.5.62-log
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sousou`
--

-- --------------------------------------------------------

--
-- 表的结构 `flaaa1g`
--

CREATE TABLE IF NOT EXISTS `flaaa1g` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `flaaa1g`
--

INSERT INTO `flaaa1g` (`id`, `name`, `email`) VALUES
(1, 'fanbingbing', '6666@qq.com'),
(2, 'fengjie', '1111@qq.com'),
(3, 'yasuo', 'yasuo@qq.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flaaa1g`
--
ALTER TABLE `flaaa1g`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flaaa1g`
--
ALTER TABLE `flaaa1g`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
