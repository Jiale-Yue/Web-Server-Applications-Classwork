-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-03-20 15:41:50
-- 服务器版本： 10.4.17-MariaDB
-- PHP 版本： 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `session4`
--

-- --------------------------------------------------------

--
-- 表的结构 `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `address_line1` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `customers`
--

INSERT INTO `customers` (`ID`, `customerName`, `Tel`, `address_line1`, `city`, `country`) VALUES
(1, 'Baane Mini Imports', '07-98 9555', 'Erling Skakkes gate 78', 'Stavern', 'Norway'),
(2, 'Volvo Model Replicas, Co', '0921-12 3555', 'Berguvsvägen  8', 'Luleå', 'Sweden'),
(3, 'La Corne D\'abondance, Co.', '(1) 42.34.2555', '265, boulevard Charonne', 'Paris', 'France'),
(4, 'AV Stores, Co.', '(171) 555-1555', 'Fauntleroy Circus', 'Manchester', 'UK'),
(5, 'Clover Collections, Co.', '+353 1862 1555', '25 Maiden Lane', 'Dublin', 'Ireland'),
(6, 'Online Mini Collectables', '6175557555', '7635 Spinnaker Dr.', 'Brickhaven', 'USA'),
(7, 'Mini Caravy', '88.60.1555', '24, place Kléber', 'Strasbourg', 'France'),
(8, 'ANG Resellers', '(91) 745 6555', 'Gran Vía, 1', 'Madrid', 'Spain'),
(9, 'giftsbymail.co.uk', '(198) 555-8888', 'Garden House', 'Cowes', 'UK'),
(10, 'Amica Models & Co.', '011-4988555', 'Via Monte Bianco 34', 'Torino', 'Italy'),
(11, 'Der Hund Imports', '030-0074555', 'Obere Str. 57', 'Berlin', 'Germany'),
(12, 'Corporate Gift Ideas Co.', '6505551386', '7734 Strong St.', 'San Francisco', 'USA'),
(13, 'Stylish Desk Decors, Co.', '(171) 555-0297', '35 King George', 'London', 'UK'),
(14, 'Tekni Collectables Inc.', '2015559350', '7476 Moss Rd.', 'Newark', 'USA'),
(15, 'Australian Gift Network, Co', '61-7-3844-6555', '31 Duncan St. West End', 'South Brisbane', 'Australia'),
(16, 'Cramer Spezialitäten, Ltd', '0555-09555', 'Maubelstr. 90', 'Brandenburg', 'Germany'),
(17, 'Classic Gift Ideas, Inc', '2155554695', '782 First Street', 'Philadelphia', 'USA'),
(18, 'Men \'R\' US Retailers, Ltd.', '2155554369', '6047 Douglas Av.', 'Los Angeles', 'USA'),
(19, 'Royale Belge', '(071) 23 67 2555', 'Boulevard Tirou, 255', 'Charleroi', 'Belgium'),
(20, 'Cruz & Sons Co.', '+63 2 555 3587', '15 McCallum Street', 'Makati City', 'Philippines'),
(21, 'Microscale Inc.', '2125551957', '5290 North Pendale Street', 'NYC', 'USA');

--
-- 转储表的索引
--

--
-- 表的索引 `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
