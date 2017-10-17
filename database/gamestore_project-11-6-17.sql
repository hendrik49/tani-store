-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 11:22 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `productstore_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_products`
--

CREATE TABLE IF NOT EXISTS `t_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `desc` varchar(512) NOT NULL,
  `category` varchar(256) NOT NULL,
  `img` varchar(256) NOT NULL,
  `price` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `t_products`
--

INSERT INTO `t_products` (`id`, `id_user`, `name`, `desc`, `category`, `img`, `price`, `created_at`, `updated_at`) VALUES
(1, 0, 'Ticc Tacc Toee', 'Ticc Tacc Toee', 'Puzzle', '/img_game/product_icon_1.png', '3400', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(2, 0, 'Extremes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Racing', '/img_game/product_icon_2.png', '3500', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(3, 0, 'Buzzy bird', 'Buzzy bird', 'Adventure', '/img_game/product_icon_3.png', '0', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(4, 0, 'Shooter Man rv', 'Shooter Man rv', 'Action', '/img_game/product_icon_4.png', '0', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(5, 0, 'UltimateBasketBall', 'UltimateBasketBall', 'Sports', '/img_game/product_icon_5.png', '12000', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(6, 0, 'zombie killer demo', 'zombie killer demo', 'Action', '/img_game/product_icon_6.png', '32000', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(7, 0, 'GOKU GO SUPER', 'GOKU GO SUPER', 'Racing', '/img_game/product_icon_7.png', '4000', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(8, 0, 'Kolpa oyun', 'Kolpa oyun', 'Adventure', '/img_game/product_icon_8.png', '5000', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(9, 0, 'Memory Test420', 'Memory Test420', 'Puzzle', '/img_game/product_icon_9.png', '8900', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(10, 0, 'JackPot for you', 'JackPot for you', 'Casino', '/img_game/product_icon_10.png', '8000', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(11, 0, 'Basket Fun', 'Basket Fun', 'Sports', '/img_game/product_icon_11.png', '4000', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(12, 0, 'Mircle Money', 'Mircle Money', 'Casino', '/img_game/product_icon_12.png', '3000', '2017-06-10 08:29:04', '0000-00-00 00:00:00'),
(15, 0, 'Coba', 'Coba upload product adventure', 'Adventure', '/img_game/product_icon-13IMG_8635.JPG', '2000', '2017-06-10 01:33:39', '2017-06-10 01:33:39'),
(16, 0, 'Coba Action', 'Coba Uplaod product Action', 'Action', '/img_game/product_icon-16received_1510178869010622.jpeg', '1000', '2017-06-10 01:58:31', '2017-06-10 01:58:31'),
(17, 0, 'Cobaaa', 'jdhsjhsd', 'Action', '/img_game/product_icon-17received_1510178935677282.jpeg', '3000', '2017-06-10 03:47:54', '2017-06-10 03:47:54'),
(18, 0, 'nxz', 'jx', 'Action', '/img_game/product_icon-18received_1510178855677290.jpeg', '300', '2017-06-10 04:05:53', '2017-06-10 04:05:53'),
(19, 0, 'nxz', 'jx', 'Action', '/img_game/product_icon-19received_1510178855677290.jpeg', '300', '2017-06-10 04:06:44', '2017-06-10 04:06:44'),
(20, 0, 'nxz', 'jx', 'Action', '/img_game/product_icon-20received_1510178855677290.jpeg', '300', '2017-06-10 04:07:17', '2017-06-10 04:07:17'),
(21, 0, 'nx', 'sd', 'Action', '/img_game/product_icon-21received_1510178969010612.jpeg', '23', '2017-06-10 04:09:11', '2017-06-10 04:09:11'),
(22, 0, 'nx', 'sd', 'Action', '/img_game/product_icon-22received_1510178969010612.jpeg', '23', '2017-06-10 04:11:48', '2017-06-10 04:11:48'),
(23, 0, 'nx', 'sd', 'Action', '/img_game/product_icon-23received_1510178969010612.jpeg', '23', '2017-06-10 04:12:27', '2017-06-10 04:12:27'),
(24, 0, 'Product Action', 'jsjsja', 'Action', '/img_game/product_icon-24s.PNG', '1', '2017-06-11 05:02:57', '2017-06-10 22:02:13');

-- --------------------------------------------------------

--
-- Stand-in structure for view `t_products_rate`
--
CREATE TABLE IF NOT EXISTS `t_products_rate` (
`id_product` int(11)
,`avg_rate` double(19,2)
,`user_rate` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `t_rate`
--

CREATE TABLE IF NOT EXISTS `t_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rate` varchar(128) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `comment` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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
(18, 8, 1, '1.25', 'Indiyani', 'indri.cs49@gmail.com', 'Rate decimal', '2017-06-11 01:11:20', '2017-06-11 01:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `remember_token` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `activated` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `img`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `activated`) VALUES
(1, 'Indiyani', 'indri.cs49@gmail.com', '/img-profil/indri.jpg', '1', '$2a$04$rDJT81iyK13CoYpxadkIAus.TRCGOoO6fIRhIBtPhWuIB.VAuIxjC', '2h1Qp7uYdTqXKqrgY4bUOuFBFqUdSf5mQTrvGgse0yvSaa15Ob9peh8xpPSR', '2017-06-11 08:22:51', '2017-06-11 01:22:51', '1'),
(2, 'dda', 'indriyani.cs49@gmail.com', 'C:\\xampp\\tmp\\php785.tmp', '2', '$2y$10$1c/5xcNjiUUqOvoLuKjEsOMLgijBnSNkgOcnfHpcSQkx5.xvJdAfC', 'IwOdOdIGjMCPIVHrrEXHowgXwPVN3LxeMuSFp2CU2zl7RxvThVqc87CQ6TlK', '2017-06-11 08:59:23', '2017-06-11 01:59:23', '1'),
(3, 'dsdsfs', 'aaaaaa1@gmail.com', '/img_game/C:\\xampp\\htdocs\\productstore\\public\\public\\img_profil\\product_icon_11.png', '2', '$2y$10$TOc5uw402LjJVZ1Vhh.1zuQlCANqbo.0ZoT05SVXVI77jBnYjNFxu', 'TvnkCXgId9OA0ZCkntwVRocuH4SCTNmgaSRvw8gUFp90h4AaZzRpauBFsiyo', '2017-06-11 09:13:43', '2017-06-11 02:13:43', ''),
(4, 'coba', 'coba@gmail.com', '/img_game/product_icon_9.png', '2', '$2y$10$sDzd2NvYCmZFBXxDkA7jy.blt8mUujiBH/PcxR.HhbmPsaBE/vKcC', '', '2017-06-11 02:19:12', '2017-06-11 02:19:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE IF NOT EXISTS `user_activations` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `activated` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_activations`
--

INSERT INTO `user_activations` (`Id`, `user_id`, `token`, `created_at`, `activated`) VALUES
(5, 1, '1d077bb8900a01f5445e6c6f93f00470ce63ce868cc20436927956077a0a653d', '2017-06-10 21:30:13', NULL),
(6, 2, '8a3ab48a7b8caae8e509c858409daf183cf6b36ee21ce961a2a0965d46a61271', '2017-06-11 01:53:56', NULL);

-- --------------------------------------------------------

--
-- Structure for view `t_products_rate`
--
DROP TABLE IF EXISTS `t_products_rate`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `t_products_rate` AS select `t_rate`.`id_product` AS `id_product`,round(avg(`t_rate`.`rate`),2) AS `avg_rate`,count(`t_rate`.`email`) AS `user_rate` from `t_rate` group by `t_rate`.`id_product`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
