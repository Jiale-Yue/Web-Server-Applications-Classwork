-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-03-20 05:44:45
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
-- 数据库： `session3`
--

-- --------------------------------------------------------

--
-- 表的结构 `ExcercisePart2`
--

CREATE TABLE `ExcercisePart2` (
  `ID` int(11) NOT NULL,
  `Img` varchar(20) NOT NULL,
  `BookName` varchar(20) NOT NULL,
  `URL` varchar(500) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `ExcercisePart2`
--

INSERT INTO `ExcercisePart2` (`ID`, `Img`, `BookName`, `URL`, `Price`) VALUES
(1, 'imgs/1.jpg', '小王子', 'https://detail.tmall.com/item.htm?id=566992485183&ali_refid=a3_430673_1006:1104906077:N:9hoXHbU+JukmZK/xkvncXg==:c9534cc6c7a513ee63396d658b9b392d&ali_trackid=1_c9534cc6c7a513ee63396d658b9b392d&spm=a2e0b.20350158.31919782.4', 19.8),
(2, 'imgs/2.jpg', '奇妙国', 'https://detail.tmall.com/item.htm?id=603091305485&ali_refid=a3_430673_1006:1104953474:N:qRNco9xAA6A0Hi14EPN/6g==:9474f334d5fc4315a12547b17dcd1829&ali_trackid=1_9474f334d5fc4315a12547b17dcd1829&spm=a2e0b.20350158.31919782.3', 39.8),
(3, 'imgs/3.jpg', '巴黎圣母院', 'https://detail.tmall.com/item.htm?id=560077404931&ali_refid=a3_430673_1006:1104848041:N:m1EblGGfumn2mNT3Mk2x3sSqtOeNyvzN:17ea70e9c16a63797a3420ef7e14d78d&ali_trackid=1_17ea70e9c16a63797a3420ef7e14d78d&spm=a2e0b.20350158.31919782.1', 21),
(4, 'imgs/4.jpg', '茶花女', 'https://detail.tmall.com/item.htm?id=568613679791&ali_refid=a3_430673_1006:1110794030:N:b6D3iLnh4TEj3d/TCeI5Lw==:f6db3fde05101eb27c6b3208ec2c0c18&ali_trackid=1_f6db3fde05101eb27c6b3208ec2c0c18&spm=a2e0b.20350158.31919782.3', 12.5),
(5, 'imgs/5.jpg', '胡桃夹子', 'https://detail.tmall.com/item.htm?id=617449525096&ali_refid=a3_430673_1006:1109300101:N:/WBK9XoRWEZb8p6ELoOrmg==:ff3dc8536cbcd6da6944dd941f9d57eb&ali_trackid=1_ff3dc8536cbcd6da6944dd941f9d57eb&spm=a2e0b.20350158.31919782.1', 43.7),
(6, 'imgs/6.jpg', '围城', 'https://detail.tmall.com/item.htm?id=593904147240&ali_refid=a3_430673_1006:1123688980:N:1qC3rkLnGybmHbpB6nmiSg==:eee9655bee97c41dc95cca4bb69d5e2e&ali_trackid=1_eee9655bee97c41dc95cca4bb69d5e2e&spm=a2e0b.20350158.31919782.1', 29.9),
(7, 'imgs/7.jpg', '简爱', 'https://detail.tmall.com/item.htm?id=584824748144&ali_refid=a3_430673_1006:1104088974:N:lPAwIHjT7vRBGzAh71FDFw==:216eb58398bb67ce126797a1d008c3dd&ali_trackid=1_216eb58398bb67ce126797a1d008c3dd&spm=a2e0b.20350158.31919782.1', 34.61),
(8, 'imgs/8.jpg', '百年孤独', 'https://detail.tmall.com/item.htm?id=608707132017&ali_refid=a3_430673_1006:1123688980:N:qZBrxC+YwzSKnUqJw7SjPw==:f851a527990bc63edc9811735d79cac2&ali_trackid=1_f851a527990bc63edc9811735d79cac2&spm=a2e0b.20350158.31919782.1', 48),
(9, 'imgs/9.jpg', '半生缘', 'https://detail.tmall.com/item.htm?id=627748174868&ali_refid=a3_430673_1006:1319080078:N:P02XzT0TjbKW8QdQkdvzaQ==:55dc7693ca896bb0e2917dd9219f14b4&ali_trackid=1_55dc7693ca896bb0e2917dd9219f14b4&spm=a2e0b.20350158.31919782.1', 75),
(10, 'imgs/10.jpg', '呼啸山庄', 'https://detail.tmall.com/item.htm?id=560295744983&ali_refid=a3_430673_1006:1104848041:N:kandAfqnG4najUBWiGNyXQ==:8ed70430a4c4153bee66922b859e7322&ali_trackid=1_8ed70430a4c4153bee66922b859e7322&spm=a2e0b.20350158.31919782.1', 12);

--
-- 转储表的索引
--

--
-- 表的索引 `ExcercisePart2`
--
ALTER TABLE `ExcercisePart2`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
