-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-07-26 10:36:42
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db04`
--

-- --------------------------------------------------------

--
-- 資料表結構 `a_bot`
--

CREATE TABLE `a_bot` (
  `a_bot_seq` int(10) NOT NULL,
  `a_bot_con` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_bot`
--

INSERT INTO `a_bot` (`a_bot_seq`, `a_bot_con`) VALUES
(1, '頁尾版權：陳昱瑄讚讚');

-- --------------------------------------------------------

--
-- 資料表結構 `a_consumer`
--

CREATE TABLE `a_consumer` (
  `a_consumer_seq` int(10) UNSIGNED NOT NULL,
  `a_consumer_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_consumer_acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_consumer_pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_consumer_phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_consumer_where` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_consumer_mail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_consumer_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_consumer`
--

INSERT INTO `a_consumer` (`a_consumer_seq`, `a_consumer_name`, `a_consumer_acc`, `a_consumer_pw`, `a_consumer_phone`, `a_consumer_where`, `a_consumer_mail`, `a_consumer_time`) VALUES
(1, '蘋果被蟲咬', '123', '321', '西瓜', '鳳梨', 'LLL', '2018-07-26'),
(2, '芙蘭朵露', 'flandre', 'flandre', '495', '幻想鄉', 'FlnadreScarlet@touhou.com', '2018-07-26'),
(4, '長頸鹿沒雨', 'elephant', 'elephant', '090900654321', '街角', 'elephant@yahoo.com.tw', '2018-07-26');

-- --------------------------------------------------------

--
-- 資料表結構 `a_member`
--

CREATE TABLE `a_member` (
  `a_member_seq` int(10) UNSIGNED NOT NULL,
  `a_member_acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_member_pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_member_1` int(1) NOT NULL COMMENT '商品分類',
  `a_member_2` int(1) NOT NULL COMMENT '訂單',
  `a_member_3` int(1) NOT NULL COMMENT '會員',
  `a_member_4` int(1) NOT NULL COMMENT '頁尾版權區',
  `a_member_5` int(1) NOT NULL COMMENT '最新消息'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `a_member`
--

INSERT INTO `a_member` (`a_member_seq`, `a_member_acc`, `a_member_pw`, `a_member_1`, `a_member_2`, `a_member_3`, `a_member_4`, `a_member_5`) VALUES
(5, 'admin', '1234', 1, 1, 1, 1, 1),
(6, 'flan', 'flan', 1, 1, 1, 1, 1),
(9, '123', '1234567', 1, 0, 0, 0, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `a_bot`
--
ALTER TABLE `a_bot`
  ADD PRIMARY KEY (`a_bot_seq`);

--
-- 資料表索引 `a_consumer`
--
ALTER TABLE `a_consumer`
  ADD PRIMARY KEY (`a_consumer_seq`);

--
-- 資料表索引 `a_member`
--
ALTER TABLE `a_member`
  ADD PRIMARY KEY (`a_member_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `a_bot`
--
ALTER TABLE `a_bot`
  MODIFY `a_bot_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `a_consumer`
--
ALTER TABLE `a_consumer`
  MODIFY `a_consumer_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `a_member`
--
ALTER TABLE `a_member`
  MODIFY `a_member_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
