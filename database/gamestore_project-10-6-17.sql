-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 09:25 PM
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
  `name` varchar(256) NOT NULL,
  `desc` varchar(512) NOT NULL,
  `category` varchar(256) NOT NULL,
  `img` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `t_products`
--

INSERT INTO `t_products` (`id`, `name`, `desc`, `category`, `img`) VALUES
(1, 'Ticc Tacc Toee', 'Ticc Tacc Toee', 'Puzzle', '/img_game/product_icon_1.png'),
(2, 'Extremes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Racing', '/img_game/product_icon_2.png'),
(3, 'Buzzy bird', 'Buzzy bird', 'Flappy Bird', '/img_game/product_icon_3.png'),
(4, 'Shooter Man rv', 'Shooter Man rv', 'Action', '/img_game/product_icon_4.png'),
(5, 'UltimateBasketBall', 'UltimateBasketBall', 'Sports', '/img_game/product_icon_5.png'),
(6, 'zombie killer demo', 'zombie killer demo', 'Action', '/img_game/product_icon_6.png'),
(7, 'GOKU GO SUPER', 'GOKU GO SUPER', 'Racing', '/img_game/product_icon_7.png'),
(8, 'Kolpa oyun', 'Kolpa oyun', 'Flappy Bird', '/img_game/product_icon_8.png'),
(9, 'Memory Test420', 'Memory Test420', 'Puzzle', '/img_game/product_icon_9.png'),
(10, 'JackPot for you', 'JackPot for you', 'Casino', '/img_game/product_icon_10.png'),
(11, 'Basket Fun', 'Basket Fun', 'Sports', '/img_game/product_icon_11.png'),
(12, 'Mircle Money', 'Mircle Money', 'Casino', '/img_game/product_icon_12.png');

-- --------------------------------------------------------

--
-- Stand-in structure for view `t_products_rate`
--
CREATE TABLE IF NOT EXISTS `t_products_rate` (
`id_product` int(11)
,`avg_rate` decimal(13,2)
,`user_rate` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `t_rate`
--

CREATE TABLE IF NOT EXISTS `t_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `comment` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `t_rate`
--

INSERT INTO `t_rate` (`id`, `id_product`, `rate`, `user_name`, `email`, `comment`, `created_at`) VALUES
(1, 2, 5, 'indri', 'indriy@gmail.com', 'Thank you, Your Product is now live on Appy Pie Herbal Store', '2017-06-09 19:19:16'),
(2, 2, 3, 'indriaads', 'indrdiyas@gmail.com', 'Thank you', '2017-06-09 19:19:16'),
(3, 4, 2, 'indrids', 'indrisd@gmail.com', 'Thank you', '2017-06-09 19:19:16'),
(4, 2, 3, 'indrids', 'indrdis@gmail.com', 'Thank you', '2017-06-09 19:19:16');

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
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `img`, `role`, `password`, `remember_token`, `created_at`, `update_at`) VALUES
(1, 'Indiyani', 'indri.cs49@gmail.com', 'indri.jpg', '1', '$2a$04$rDJT81iyK13CoYpxadkIAus.TRCGOoO6fIRhIBtPhWuIB.VAuIxjC', '', '2017-06-07 18:33:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure for view `t_products_rate`
--
DROP TABLE IF EXISTS `t_products_rate`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `t_products_rate` AS select `t_rate`.`id_product` AS `id_product`,round(avg(`t_rate`.`rate`),2) AS `avg_rate`,count(`t_rate`.`email`) AS `user_rate` from `t_rate` group by `t_rate`.`id_product`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
