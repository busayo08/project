-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 08:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grubbery_menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(200) NOT NULL,
  `date_time` datetime(6) NOT NULL,
  `menu_image` varchar(1000) NOT NULL,
  `menu_price` varchar(200) NOT NULL,
  `menu_status` int(200) NOT NULL,
  `menu_cat` varchar(200) NOT NULL,
  `admin_id` int(200) NOT NULL,
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`),
  UNIQUE KEY `id_3` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `date_time`, `menu_image`, `menu_price`, `menu_status`, `menu_cat`, `admin_id`) VALUES
(17, 'Citizen Meal', '2018-12-09 00:00:00.000000', 'Meal_2802521428025214_CU.jpg', '1350', 1, '1', 1),
(21, 'Flame Grilled Chicken', '2018-12-09 00:00:00.000000', 'Meal_590757102590757102_CU.jpg', '3900', 1, '1', 1),
(22, 'Double Chickwizz Meal', '2018-12-09 00:00:00.000000', 'Meal_764201465764201465_CU.jpg', '1750', 1, '1', 1),
(23, 'Express Meal', '2018-12-09 00:00:00.000000', 'Meal_974414925974414925_CU.jpg', '1000', 1, '1', 1),
(24, 'Chicken Pie', '2018-12-09 00:00:00.000000', 'Meal_549852178549852178_CU.jpg', '350', 1, '2', 1),
(25, 'Meat Pie', '2018-12-09 00:00:00.000000', 'Meal_12033400371203340037_CU.jpg', '350', 1, '2', 1),
(26, 'Amma-Jamma Spaghetti', '2018-12-09 00:00:00.000000', 'Meal_18851745631885174563_CU.png', '450', 1, '2', 1),
(27, 'Moin-Moin', '2018-12-09 00:00:00.000000', 'Meal_1491408714914087_CU.jpg', '300', 1, '2', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
