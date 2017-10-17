-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2017 at 07:05 PM
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
  `coint` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_products`
--

INSERT INTO `t_products` (`id`, `name`, `desc`, `category`, `img`, `banner`, `img_slider`, `count_play`, `created_at`, `updated_at`, `coint`) VALUES
(1, 'Ticc Tacc Toee', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Puzzle', '/img_game/product_icon_1.png', '', '/img_game/firemanfooster.png', 10, '2017-06-17 14:33:44', '0000-00-00 00:00:00', 0),
(2, 'Extremes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Racing', '/img_game/product_icon_2.png', '', '/img_game/superfat.jpg', 10, '2017-06-17 14:33:44', '0000-00-00 00:00:00', 0),
(3, 'Buzzy bird', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Adventure', '/img_game/product_icon_3.png', '', '/img_game/superfat.jpg', 10, '2017-06-17 14:33:44', '0000-00-00 00:00:00', 0),
(4, 'Shooter Man rv', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Action', '/img_game/product_icon_4.png', '', '/img_game/superfat.jpg', 10, '2017-06-17 14:33:44', '0000-00-00 00:00:00', 0),
(5, 'Ultimate Basket', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Sports', '/img_game/product_icon_5.png', '', '/img_game/lumberjack.jpg', 10, '2017-06-23 06:58:18', '0000-00-00 00:00:00', 0),
(6, 'zombie kille', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Action', '/img_game/product_icon_6.png', '', '/img_game/superfat.jpg', 10, '2017-06-23 06:59:16', '0000-00-00 00:00:00', 0),
(7, 'GOKU SUPER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Racing', '/img_game/product_icon_7.png', '', '/img_game/superfat.jpg', 10, '2017-06-23 06:58:27', '0000-00-00 00:00:00', 0),
(8, 'Kolpa oyun', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Adventure', '/img_game/product_icon_8.png', '', '/img_game/superfat.jpg', 10, '2017-06-17 14:33:44', '0000-00-00 00:00:00', 0),
(9, 'Memory Test420', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Puzzle', '/img_game/product_icon_9.png', '', '/img_game/superfat.jpg', 10, '2017-06-17 14:33:44', '0000-00-00 00:00:00', 0),
(10, 'JackPot for you', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Casino', '/img_game/product_icon_10.png', '', '/img_game/superfat.jpg', 10, '2017-06-17 14:33:44', '0000-00-00 00:00:00', 0),
(11, 'Basket Fun', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Sports', '/img_game/product_icon_11.png', '', '/img_game/superfat.jpg', 10, '2017-06-17 14:33:44', '0000-00-00 00:00:00', 0),
(12, 'Mircle Money', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'Casino', '/img_game/product_icon_12.png', '', '/img_game/superfat.jpg', 17, '2017-06-17 16:21:31', '2017-06-17 09:21:31', 0),
(13, 'Feeding Lele', 'Maraban Lele', 'Action', '/img_game/product_icon-13product_icon_7.png', '/img_game/product_icon-13firemanfooster.png', '', 0, '2017-06-24 09:46:30', '2017-06-24 09:46:30', 0);

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
(1, 6, 17, '2017-06-17 00:00:00', '2017-06-17 00:00:00', 10, 5),
(2, 1, 17, '2017-06-17 00:00:00', '2017-06-17 00:00:00', 7, 3),
(3, 6, 12, '2017-06-17 16:18:24', '2017-06-17 16:18:24', 0, 5),
(4, 1, 1, '2018-02-01 00:00:00', '2018-02-01 00:00:00', 20, 2);

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
(1, 2, 0, '5', 'indri', 'indriy@gmail.com', 'Thank you, Your Product is now live on Appy Pie Herbal Store', '2017-06-09 19:19:16', '0000-00-00 00:00:00'),
(2, 2, 0, '3', 'indriaads', 'indrdiyas@gmail.com', 'Thank you', '2017-06-09 19:19:16', '0000-00-00 00:00:00'),
(3, 4, 0, '2', 'indrids', 'indrisd@gmail.com', 'Thank you', '2017-06-09 19:19:16', '0000-00-00 00:00:00'),
(4, 2, 0, '3', 'indrids', 'indrdis@gmail.com', 'Thank you', '2017-06-09 19:19:16', '0000-00-00 00:00:00'),
(16, 1, 1, '3', 'Indiyani', 'indri.cs49@gmail.com', 'Rate for Ticc Tacc Toee', '2017-06-11 01:09:54', '2017-06-11 01:09:54'),
(17, 3, 1, '1', 'Indiyani', 'indri.cs49@gmail.com', 'rate 1', '2017-06-11 01:10:27', '2017-06-11 01:10:27'),
(18, 17, 1, '1.25', 'Indiyani', 'indri.cs49@gmail.com', 'Rate decimal', '2017-06-17 14:01:19', '2017-06-11 01:11:20');

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
  `activated` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `img`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `activated`) VALUES
(1, 'Indiyani', 'indri.cs49@gmail.com', '/img_profil/indri.jpg', '1', '$2a$04$rDJT81iyK13CoYpxadkIAus.TRCGOoO6fIRhIBtPhWuIB.VAuIxjC', '0tjP6zvM0b74mHcVrYj7VPDfcvgcmNZPDLxSS5U8shKT9vhfIQOJVqTvf76B', '2017-06-11 11:31:55', '2017-06-11 04:31:55', '1'),
(2, 'dda', 'indriyani.cs49@gmail.com', 'C:\\xampp\\tmp\\php785.tmp', '2', '$2y$10$1c/5xcNjiUUqOvoLuKjEsOMLgijBnSNkgOcnfHpcSQkx5.xvJdAfC', 'GaWhr6fZIfns0HVav9MJNVyHc3w5ojr8qBhq6q1XyL9uR72w23FKlkkt1rvt', '2017-06-11 11:33:00', '2017-06-11 04:33:00', '1'),
(6, 'Hendrik', 'drikdoank@gmail.com', '/img_profil/Screen Shot 2017-06-17 at 5.43.15 PM.png', '1', '$2y$10$eP1528frOO2tKIYvJFpkxO8RyiKzVyDSahF/uhGVlB5.zrrfalnhO', 'QptC1ke8MBvBdesoHNwzarSRHBFN9XGxhYQyH8qGT9cNZx6qcOEruUYgFjWv', '2017-06-24 16:58:00', '2017-06-24 09:58:00', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `t_play_products`
--
ALTER TABLE `t_play_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_rate`
--
ALTER TABLE `t_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
