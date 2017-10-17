-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2017 at 03:46 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productstore`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `chart_bar`
--
CREATE TABLE `chart_bar` (
`products` varchar(256)
,`count` bigint(21)
,`year` int(4)
,`month` varchar(9)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chart_line`
--
CREATE TABLE `chart_line` (
`count` bigint(21)
,`year` int(4)
,`month` varchar(9)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chart_pie`
--
CREATE TABLE `chart_pie` (
`products` varchar(256)
,`count` bigint(21)
,`rate` varchar(128)
,`year` int(4)
);

-- --------------------------------------------------------

--
-- Table structure for table `t_products`
--

CREATE TABLE `t_products` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `desc` varchar(512) NOT NULL,
  `category` varchar(256) NOT NULL,
  `img` varchar(256) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `img_slider` varchar(256) NOT NULL,
  `count_play` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `coint` int(10) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_products`
--

INSERT INTO `t_products` (`id`, `name`, `desc`, `category`, `img`, `banner`, `img_slider`, `count_play`, `created_at`, `updated_at`, `coint`, `url`) VALUES
(1, 'Brickout', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Puzzle', '/img_product/product_icon_1.png', '', '/img_product/firemanfooster.png', 10, '2017-07-02 04:20:07', '0000-00-00 00:00:00', 10, 'http://www.tapcubestudios.com/products/brickout/'),
(2, 'Funny Soccer', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Racing', '/img_product/product_icon_2.png', '', '/img_product/superfat.jpg', 10, '2017-07-02 04:20:09', '0000-00-00 00:00:00', 20, 'http://www.tapcubestudios.com/products/funnysoccer/'),
(3, 'Let''s Park', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Adventure', '/img_product/product_icon_3.png', '', '/img_product/superfat.jpg', 11, '2017-07-02 04:20:12', '2017-07-01 21:17:27', 15, 'http://www.tapcubestudios.com/products/letspark/'),
(4, 'Minigolf', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Action', '/img_product/product_icon_4.png', '', '/img_product/superfat.jpg', 10, '2017-07-02 04:20:16', '0000-00-00 00:00:00', 10, 'http://www.tapcubestudios.com/products/minigolf/'),
(5, 'Slowdown', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Sports', '/img_product/product_icon_5.png', '', '/img_product/lumberjack.jpg', 17, '2017-07-02 05:41:52', '2017-07-01 22:41:52', 35, 'http://tapcubestudios.com/products/slowdown/'),
(6, 'Tank Defender', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Action', '/img_product/product_icon_6.png', '', '/img_product/superfat.jpg', 26, '2017-07-02 05:16:55', '2017-07-01 22:16:55', 20, 'http://www.tapcubestudios.com/products/tankdefender/'),
(7, 'Tetris', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Racing', '/img_product/product_icon_7.png', '', '/img_product/superfat.jpg', 27, '2017-07-02 05:46:40', '2017-07-01 22:46:40', 10, 'http://www.tapcubestudios.com/products/tetris/'),
(8, 'Indiara and the skull gold', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Adventure', '/img_product/product_icon_8.png', '', '/img_product/superfat.jpg', 12, '2017-07-02 05:16:34', '2017-07-01 22:16:34', 35, 'http://tapcubestudios.com/products/indiaraandtheskullgold/');

-- --------------------------------------------------------

--
-- Stand-in structure for view `t_products_rate`
--
CREATE TABLE `t_products_rate` (
`id_product` int(11)
,`avg_rate` double(19,2)
,`user_rate` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `t_play_products`
--

CREATE TABLE `t_play_products` (
  `id` int(11) NOT NULL,
  `idplayer` int(11) NOT NULL,
  `idproducts` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `score` int(11) NOT NULL,
  `subscription` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_play_products`
--

INSERT INTO `t_play_products` (`id`, `idplayer`, `idproducts`, `created_at`, `updated_at`, `score`, `subscription`) VALUES
(1, 6, 1, '2017-06-17 00:00:00', '2017-06-17 00:00:00', 10, 5),
(2, 1, 2, '2017-06-17 00:00:00', '2017-06-17 00:00:00', 7, 3),
(3, 6, 3, '2017-06-17 16:18:24', '2017-06-17 16:18:24', 0, 5),
(4, 1, 3, '2018-02-01 00:00:00', '2018-02-01 00:00:00', 20, 2),
(5, 6, 1, '2017-07-02 03:45:19', '2017-07-02 03:45:19', 0, 5),
(6, 6, 7, '2017-07-02 04:01:44', '2017-07-02 04:01:44', 0, 5),
(7, 6, 6, '2017-07-02 04:16:29', '2017-07-02 04:16:29', 0, 5),
(8, 6, 8, '2017-07-02 05:16:30', '2017-07-02 05:16:30', 0, 5),
(9, 6, 5, '2017-07-02 05:38:49', '2017-07-02 05:38:49', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `t_rate`
--

CREATE TABLE `t_rate` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rate` varchar(128) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `comment` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rate`
--

INSERT INTO `t_rate` (`id`, `id_product`, `id_user`, `rate`, `user_name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '5', 'indri', 'indriy@gmail.com', 'Thank you, Your Product is now live on Appy Pie Herbal Store', '2017-07-02 04:17:15', '0000-00-00 00:00:00'),
(2, 2, 1, '3', 'indriaads', 'indrdiyas@gmail.com', 'Thank you', '2017-07-02 04:17:13', '0000-00-00 00:00:00'),
(3, 4, 1, '2', 'indrids', 'indrisd@gmail.com', 'Thank you', '2017-07-02 04:17:11', '0000-00-00 00:00:00'),
(4, 2, 1, '3', 'indrids', 'indrdis@gmail.com', 'Thank you', '2017-07-02 04:17:08', '0000-00-00 00:00:00'),
(16, 1, 2, '3', 'Indiyani', 'indri.cs49@gmail.com', 'Rate for Ticc Tacc Toee', '2017-07-02 04:21:13', '2017-06-11 01:09:54'),
(17, 3, 2, '1', 'Indiyani', 'indri.cs49@gmail.com', 'rate 1', '2017-07-02 04:21:16', '2017-06-11 01:10:27'),
(18, 2, 2, '1.25', 'Indiyani', 'indri.cs49@gmail.com', 'Rate decimal', '2017-07-02 04:21:18', '2017-06-11 01:11:20'),
(19, 8, 6, '4', 'Hendrik', 'drikdoank@gmail.com', 'Rame bangett...', '2017-07-01 22:08:49', '2017-07-01 22:08:49'),
(20, 8, 6, '4', 'Hendrik', 'drikdoank@gmail.com', 'Rame bangett...', '2017-07-01 22:11:04', '2017-07-01 22:11:04'),
(21, 8, 6, '4', 'Hendrik', 'drikdoank@gmail.com', 'Rame bangett...', '2017-07-01 22:14:18', '2017-07-01 22:14:18'),
(22, 8, 6, '4', 'Hendrik', 'drikdoank@gmail.com', 'Rame bangett...', '2017-07-01 22:15:54', '2017-07-01 22:15:54'),
(23, 6, 6, '3', 'Hendrik', 'drikdoank@gmail.com', 'Lumayaaan...', '2017-07-01 22:17:30', '2017-07-01 22:17:30'),
(24, 6, 6, '3', 'Hendrik', 'drikdoank@gmail.com', 'Lumayaaan...', '2017-07-01 22:17:45', '2017-07-01 22:17:45'),
(25, 6, 6, '2', 'Hendrik', 'drikdoank@gmail.com', 'Goreeeng', '2017-07-01 22:18:01', '2017-07-01 22:18:01'),
(26, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:21:02', '2017-07-01 22:21:02'),
(27, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:21:56', '2017-07-01 22:21:56'),
(28, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:22:29', '2017-07-01 22:22:29'),
(29, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:22:53', '2017-07-01 22:22:53'),
(30, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:23:22', '2017-07-01 22:23:22'),
(31, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:23:48', '2017-07-01 22:23:48'),
(32, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:24:01', '2017-07-01 22:24:01'),
(33, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:25:00', '2017-07-01 22:25:00'),
(34, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:26:12', '2017-07-01 22:26:12'),
(35, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:26:22', '2017-07-01 22:26:22'),
(36, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:26:45', '2017-07-01 22:26:45'),
(37, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:27:51', '2017-07-01 22:27:51'),
(38, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:28:03', '2017-07-01 22:28:03'),
(39, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:28:11', '2017-07-01 22:28:11'),
(40, 6, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sdsdsd', '2017-07-01 22:28:20', '2017-07-01 22:28:20'),
(41, 7, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sds', '2017-07-01 22:28:42', '2017-07-01 22:28:42'),
(42, 7, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sds', '2017-07-01 22:29:19', '2017-07-01 22:29:19'),
(43, 7, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sds', '2017-07-01 22:30:22', '2017-07-01 22:30:22'),
(44, 7, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sds', '2017-07-01 22:30:46', '2017-07-01 22:30:46'),
(45, 7, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sds', '2017-07-01 22:30:53', '2017-07-01 22:30:53'),
(46, 7, 6, '1', 'Hendrik', 'drikdoank@gmail.com', 'sds', '2017-07-01 22:32:16', '2017-07-01 22:32:16'),
(47, 5, 6, '4', 'Hendrik', 'drikdoank@gmail.com', 'Manrtaappp', '2017-07-01 22:40:09', '2017-07-01 22:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `remember_token` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `activated` varchar(128) NOT NULL,
  `coint` int(11) NOT NULL DEFAULT '299'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `img`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `activated`, `coint`) VALUES
(1, 'Indiyani', 'indri.cs49@gmail.com', '/img_profil/indri.jpg', '1', '$2a$04$rDJT81iyK13CoYpxadkIAus.TRCGOoO6fIRhIBtPhWuIB.VAuIxjC', '0tjP6zvM0b74mHcVrYj7VPDfcvgcmNZPDLxSS5U8shKT9vhfIQOJVqTvf76B', '2017-06-11 11:31:55', '2017-06-11 04:31:55', '1', 299),
(2, 'dda', 'indriyani.cs49@gmail.com', 'C:\\xampp\\tmp\\php785.tmp', '2', '$2y$10$1c/5xcNjiUUqOvoLuKjEsOMLgijBnSNkgOcnfHpcSQkx5.xvJdAfC', 'GaWhr6fZIfns0HVav9MJNVyHc3w5ojr8qBhq6q1XyL9uR72w23FKlkkt1rvt', '2017-06-11 11:33:00', '2017-06-11 04:33:00', '1', 299),
(6, 'Hendrik', 'drikdoank@gmail.com', '/img_profil/Screen Shot 2017-06-17 at 5.43.15 PM.png', '2', '$2y$10$eP1528frOO2tKIYvJFpkxO8RyiKzVyDSahF/uhGVlB5.zrrfalnhO', 'DtxUhFzGGTYTUSzTJLm9mIVx6WmPD7FsNZKtVFZUlvcTkOAwkv4Gy7YR9mWP', '2017-07-02 05:46:40', '2017-07-01 22:46:40', '1', 209);

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE `user_activations` (
  `Id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `activated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_activations`
--

INSERT INTO `user_activations` (`Id`, `user_id`, `token`, `created_at`, `activated`) VALUES
(5, 1, '1d077bb8900a01f5445e6c6f93f00470ce63ce868cc20436927956077a0a653d', '2017-06-10 21:30:13', NULL),
(6, 2, '8a3ab48a7b8caae8e509c858409daf183cf6b36ee21ce961a2a0965d46a61271', '2017-06-11 01:53:56', NULL),
(7, 6, 'f7c80b8068ebefed64aa9e4a7c6b055ee5f4664a0089164dcc67972fe36d6d29', '2017-06-17 05:28:52', NULL);

-- --------------------------------------------------------

--
-- Structure for view `chart_bar`
--
DROP TABLE IF EXISTS `chart_bar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chart_bar`  AS  select `t_products`.`name` AS `products`,count(`t_play_products`.`id`) AS `count`,year(`t_play_products`.`created_at`) AS `year`,monthname(`t_play_products`.`created_at`) AS `month` from (`t_play_products` join `t_products` on((`t_products`.`id` = `t_play_products`.`idproducts`))) group by `t_play_products`.`idproducts`,year(`t_play_products`.`created_at`),monthname(`t_play_products`.`created_at`) ;

-- --------------------------------------------------------

--
-- Structure for view `chart_line`
--
DROP TABLE IF EXISTS `chart_line`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chart_line`  AS  select count(`t_play_products`.`id`) AS `count`,year(`t_play_products`.`created_at`) AS `year`,monthname(`t_play_products`.`created_at`) AS `month` from `t_play_products` group by monthname(`t_play_products`.`created_at`),year(`t_play_products`.`created_at`) ;

-- --------------------------------------------------------

--
-- Structure for view `chart_pie`
--
DROP TABLE IF EXISTS `chart_pie`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chart_pie`  AS  select `t_products`.`name` AS `products`,count(`t_rate`.`rate`) AS `count`,`t_rate`.`rate` AS `rate`,year(`t_rate`.`created_at`) AS `year` from (`t_rate` join `t_products` on((`t_products`.`id` = `t_rate`.`id_product`))) group by `t_rate`.`rate`,year(`t_rate`.`created_at`) ;

-- --------------------------------------------------------

--
-- Structure for view `t_products_rate`
--
DROP TABLE IF EXISTS `t_products_rate`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `t_products_rate`  AS  select `t_rate`.`id_product` AS `id_product`,round(avg(`t_rate`.`rate`),2) AS `avg_rate`,count(`t_rate`.`email`) AS `user_rate` from `t_rate` group by `t_rate`.`id_product` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_products`
--
ALTER TABLE `t_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_play_products`
--
ALTER TABLE `t_play_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_rate`
--
ALTER TABLE `t_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_products`
--
ALTER TABLE `t_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_play_products`
--
ALTER TABLE `t_play_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `t_rate`
--
ALTER TABLE `t_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_activations`
--
ALTER TABLE `user_activations`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
