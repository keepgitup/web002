-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-01-07 09:32:13
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `web02`
--

-- --------------------------------------------------------

--
-- 資料表結構 `log`
--

CREATE TABLE `log` (
  `id` int(11) UNSIGNED NOT NULL,
  `news` int(11) UNSIGNED NOT NULL,
  `user` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `log`
--

INSERT INTO `log` (`id`, `news`, `user`) VALUES
(4, 5, 'salce'),
(5, 4, 'salce'),
(8, 7, 'salce'),
(9, 1, 'salce'),
(10, 2, 'salce'),
(13, 4, 'micheal'),
(15, 7, 'micheal'),
(16, 1, 'micheal');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(1) UNSIGNED NOT NULL,
  `good` int(11) UNSIGNED NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `type`, `good`, `sh`) VALUES
(1, '缺乏運動就會導致很累所以要運動一下', '缺乏運動就會導致很累所以要運動一下\r\n讚讚讚讚讚讚自讚讚讚讚讚案讚讚讚讚讚讚讚', 1, 2, 1),
(2, '缺乏運動就會導致很累所以要運動一下', '缺乏運動就會導致很累所以要運動一下\r\n讚讚讚讚讚讚自讚讚讚讚讚案讚讚讚讚讚讚讚\r\n棒棒棒棒', 1, 1, 1),
(4, '缺乏運動就會導致很累所以要運動一下', '缺乏運動就會導致很累所以要運動一下\r\n讚讚讚讚讚讚自讚讚讚讚讚案讚讚讚讚讚讚讚\r\n棒棒棒棒', 1, 2, 1),
(5, '自製運動的作法', '自製運動的作法超棒火火火火火力麗,太多了八\r\n太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八', 2, 1, 1),
(7, '自製運動的作法', '自製運動的作法超棒火火火火火力麗,太多了八\r\n太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八太多了八', 2, 2, 1),
(9, '泌尿新知今天天氣好冷', '泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷明天會回暖嗎', 3, 0, 1),
(10, '泌尿新知今天天氣好冷', '泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷明天會回暖嗎', 3, 0, 1),
(11, '泌尿新知今天天氣好冷', '泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷明天會回暖嗎', 3, 0, 1),
(12, '泌尿新知今天天氣好冷', '泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷泌尿新知今天天氣好冷明天會回暖嗎', 3, 0, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `que`
--

CREATE TABLE `que` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) UNSIGNED NOT NULL,
  `count` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pw`, `email`) VALUES
(1, 'admin', '1234', 's22464580s@gmail.com'),
(3, 'salce', '4560', 's22464580s@gmail.com'),
(4, 'micheal', '2246', 's22464560@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `view`
--

CREATE TABLE `view` (
  `id` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `total` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `view`
--

INSERT INTO `view` (`id`, `date`, `total`) VALUES
(1, '2022-01-03', 3),
(2, '2022-01-07', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `que`
--
ALTER TABLE `que`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
