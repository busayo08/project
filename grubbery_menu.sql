-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 09:54 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@grubbery.com', 'admin01');

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

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `requester_id` varchar(200) NOT NULL,
  `menu_id` varchar(200) NOT NULL,
  `order_date` date NOT NULL,
  `order_qty` varchar(200) NOT NULL,
  `order_status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `requester_id`, `menu_id`, `order_date`, `order_qty`, `order_status`) VALUES
(1, '1', '17', '2018-12-10', '7', '1'),
(2, '1', '17', '2018-12-10', '1', '1'),
(3, '3', '5', '0000-00-00', '3', '0'),
(4, '3', '5', '0000-00-00', '3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  `profile_pics` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `phone`, `address`, `password`, `profile_pics`) VALUES
(1, 'Busayo', 'AKinsola', 'akinsolabusayo@gmail.com', 2147483647, 'itele road, ota Ogun state.\r\n6a, maria subulade street, itele road.', '1234', 'Meal_18317223031831722303_CU.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
