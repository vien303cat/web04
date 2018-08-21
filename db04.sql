-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-08-21 09:30:22
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

-- --------------------------------------------------------

--
-- 資料表結構 `buycar`
--

CREATE TABLE `buycar` (
  `buycar_seq` int(10) UNSIGNED NOT NULL,
  `buycar_acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buycar_i3seq` int(10) NOT NULL,
  `buycar_howmuch` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `buycar`
--

INSERT INTO `buycar` (`buycar_seq`, `buycar_acc`, `buycar_i3seq`, `buycar_howmuch`) VALUES
(1, 'flandre', 10, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `buylog`
--

CREATE TABLE `buylog` (
  `buylog_seq` int(10) NOT NULL,
  `buylog_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buylog_item` int(10) NOT NULL,
  `buylog_cnt` int(10) NOT NULL,
  `buylog_money` int(10) NOT NULL,
  `buylog_total` int(10) NOT NULL,
  `buylog_accseq` int(10) NOT NULL,
  `buylog_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `buylog`
--

INSERT INTO `buylog` (`buylog_seq`, `buylog_no`, `buylog_item`, `buylog_cnt`, `buylog_money`, `buylog_total`, `buylog_accseq`, `buylog_time`) VALUES
(3, '20180802165209', 20, 1, 9999, 9999, 2, '2018-08-02 16:52:09'),
(4, '20180802165209', 12, 3, 800, 2400, 2, '2018-08-02 16:52:09'),
(7, '20180807093438', 11, 1, 685, 685, 1, '2018-08-07 09:34:38'),
(8, '20180807093438', 13, 1, 1000, 1000, 1, '2018-08-07 09:34:38'),
(9, '20180807093438', 15, 1, 28000, 28000, 1, '2018-08-07 09:34:38'),
(10, '20180807093438', 10, 1, 1200, 1200, 1, '2018-08-07 09:34:38');

-- --------------------------------------------------------

--
-- 資料表結構 `item_1`
--

CREATE TABLE `item_1` (
  `item_1_seq` int(10) UNSIGNED NOT NULL,
  `item_1_txt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `item_1`
--

INSERT INTO `item_1` (`item_1_seq`, `item_1_txt`) VALUES
(3, '流行皮件'),
(4, '流行鞋區'),
(5, '流行飾品'),
(6, '背包');

-- --------------------------------------------------------

--
-- 資料表結構 `item_2`
--

CREATE TABLE `item_2` (
  `item_2_seq` int(10) UNSIGNED NOT NULL,
  `item_2_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_2_i1` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `item_2`
--

INSERT INTO `item_2` (`item_2_seq`, `item_2_txt`, `item_2_i1`) VALUES
(3, '女用皮件', 3),
(4, '男用皮件', 3),
(5, '少女鞋區', 4),
(6, '紳士流行鞋區', 4),
(7, '時尚手錶', 5),
(8, '時尚珠寶', 5),
(9, '背包', 6);

-- --------------------------------------------------------

--
-- 資料表結構 `item_3`
--

CREATE TABLE `item_3` (
  `item_3_seq` int(10) UNSIGNED NOT NULL,
  `item_3_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_3_price` int(10) NOT NULL,
  `item_3_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_3_howmuch` int(10) NOT NULL,
  `item_3_photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_3_introduce` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_3_i1` int(10) NOT NULL,
  `item_3_i2` int(10) NOT NULL,
  `item_3_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `item_3`
--

INSERT INTO `item_3` (`item_3_seq`, `item_3_name`, `item_3_price`, `item_3_type`, `item_3_howmuch`, `item_3_photo`, `item_3_introduce`, `item_3_i1`, `item_3_i2`, `item_3_display`) VALUES
(10, '手工訂製長夾', 1200, '全牛皮', 2, '1533192669.jpg', '手工製作長夾卡片層6*2 鈔票層 *2 零錢拉鍊層 *1 \r\n採用愛馬仕相同的雙針縫法,皮件堅固耐用不脫線 \r\n材質:直革鞣(馬鞍皮)牛皮製作  \r\n手工染色 ', 3, 4, 1),
(11, '兩用式磁扣腰包', 685, '中型', 18, '1533192728.jpg', '材質:進口牛皮\r\n顏色:黑色荔枝紋+黑色珠光面皮(黑色縫線)\r\n尺寸:15cm*14cm(高)*6cm(前後)\r\n產地:臺灣', 3, 4, 1),
(12, '超薄設計男士長款真皮', 800, 'L號', 61, '1533193313.jpg', '基本:編織皮革對摺長款零錢包\r\n特色:最潮流最時尚的單品 \r\n顏色:黑色珠光面皮(黑色縫線)\r\n形狀:黑白格編織皮革對摺 ', 3, 4, 1),
(13, '經典牛皮少女帆船鞋', 1000, 'S號', 6, '1533193361.jpg', '以傳統學院派風格聞名，創始近百年工藝製鞋精神\r\n共用獨家專利氣墊技術，兼具紐約工藝精神，與舒適跑格靈魂', 4, 5, 1),
(14, '紳士流行涼鞋', 2650, 'LL', 8, '1533193419.jpg', '優雅流線方型楦頭設計，結合簡潔線條綴飾，\r\n獨特的弧度與曲線美，突顯年輕優雅品味，\r\n是年輕上班族不可或缺的鞋款！\r\n全新美國運回，現貨附鞋盒', 4, 6, 1),
(15, '寵愛天然藍寶女戒', 28000, '1克拉', 1, '1533193451.jpg', '◎典雅設計品味款\r\n◎藍寶為珍貴天然寶石之一，具有保值收藏\r\n◎專人設計製造，以貴重珠寶精緻鑲工製造', 5, 8, 1),
(16, '反折式大容量手提肩背包', 888, 'L號', 15, '1533193525.jpg', '特色:反折式的包口設計,釘釦的裝飾,讓簡單的包型更增添趣味性\r\n材質:棉布\r\n顏色:藍色\r\n尺寸:長50cm寬20cm高41cm\r\n產地:日本', 6, 9, 1),
(18, '男單肩包男', 650, '多功能', 7, '1533193634.jpg', '特色:男單肩包/電腦包/公文包/雙肩背包多用途\r\n材質:帆不\r\n顏色:黑色\r\n尺寸:深11cm寬42cm高33cm\r\n產地:香港', 6, 9, 1),
(20, '妹妹', 9999, '我的', 1, '1533195850.gif', '我的啦別買喔', 3, 3, 1);

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
-- 資料表索引 `buycar`
--
ALTER TABLE `buycar`
  ADD PRIMARY KEY (`buycar_seq`);

--
-- 資料表索引 `buylog`
--
ALTER TABLE `buylog`
  ADD PRIMARY KEY (`buylog_seq`);

--
-- 資料表索引 `item_1`
--
ALTER TABLE `item_1`
  ADD PRIMARY KEY (`item_1_seq`);

--
-- 資料表索引 `item_2`
--
ALTER TABLE `item_2`
  ADD PRIMARY KEY (`item_2_seq`);

--
-- 資料表索引 `item_3`
--
ALTER TABLE `item_3`
  ADD PRIMARY KEY (`item_3_seq`);

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

--
-- 使用資料表 AUTO_INCREMENT `buycar`
--
ALTER TABLE `buycar`
  MODIFY `buycar_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `buylog`
--
ALTER TABLE `buylog`
  MODIFY `buylog_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表 AUTO_INCREMENT `item_1`
--
ALTER TABLE `item_1`
  MODIFY `item_1_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表 AUTO_INCREMENT `item_2`
--
ALTER TABLE `item_2`
  MODIFY `item_2_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表 AUTO_INCREMENT `item_3`
--
ALTER TABLE `item_3`
  MODIFY `item_3_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
