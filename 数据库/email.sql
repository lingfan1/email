-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-06-10 11:03:31
-- 服务器版本： 10.4.22-MariaDB
-- PHP 版本： 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `email`
--

-- --------------------------------------------------------

--
-- 表的结构 `emailmsg`
--

CREATE TABLE `emailmsg` (
  `emailno` int(11) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `content` text DEFAULT NULL,
  `datesorr` datetime NOT NULL,
  `attachment` varchar(1000) DEFAULT NULL,
  `STATUS` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `emailmsg`
--

INSERT INTO `emailmsg` (`emailno`, `sender`, `receiver`, `subject`, `content`, `datesorr`, `attachment`, `STATUS`) VALUES
(1465, 'fanmao03@163.com', 'fanmao03@163.com;', '落后', '落后不一定挨打，那是因为今天我不想打你', '2022-05-30 04:24:00', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `usermsg`
--

CREATE TABLE `usermsg` (
  `emailaddr` varchar(18) NOT NULL,
  `psd` varchar(32) DEFAULT NULL,
  `phoneno` varchar(11) DEFAULT NULL,
  `zhucedate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `usermsg`
--

INSERT INTO `usermsg` (`emailaddr`, `psd`, `phoneno`, `zhucedate`) VALUES
('fanmao01', '123456', '', '2022-05-26 05:22:00'),
('fanmao03', '123456', '18708409597', '2022-05-12 09:30:00'),
('zhangpeipei', 'peipeill', '13876521342', '2018-04-09 10:04:00');

--
-- 转储表的索引
--

--
-- 表的索引 `emailmsg`
--
ALTER TABLE `emailmsg`
  ADD PRIMARY KEY (`emailno`);

--
-- 表的索引 `usermsg`
--
ALTER TABLE `usermsg`
  ADD PRIMARY KEY (`emailaddr`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `emailmsg`
--
ALTER TABLE `emailmsg`
  MODIFY `emailno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1474;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
