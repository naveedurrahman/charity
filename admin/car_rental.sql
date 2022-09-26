-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 15, 2019 at 05:39 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izazweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`) VALUES
(8, 'Peshawar'),
(9, 'Charsadda'),
(17, '8'),
(20, '17');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_date` date DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `fess` varchar(200) DEFAULT NULL,
  `to_area_id` int(10) DEFAULT NULL,
  `from_area_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_date`, `type_id`, `fess`, `to_area_id`, `from_area_id`) VALUES
(12, '2019-09-29', 12, '100', 8, 9),
(22, '2019-10-12', 12, '60', 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `phone`, `whatsapp`, `address`, `user_id`) VALUES
(6, 'Aizaz Khan', '03151207603', '03151207603', 'CHD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `city`, `name`, `vehicle`) VALUES
(1, 'PHP', 'Android', 'amir'),
(9, 'PHP', 'PHP', 'jjj'),
(8, 'PHP', 'PHP', 'izaz'),
(7, 'Android', 'Android', 'amir'),
(10, 'Honda civic', 'Peshaware', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `router`
--

DROP TABLE IF EXISTS `router`;
CREATE TABLE IF NOT EXISTS `router` (
  `router_id` int(11) NOT NULL AUTO_INCREMENT,
  `from_area_id` int(11) DEFAULT NULL,
  `to_area_id` int(11) DEFAULT NULL,
  `fess` varchar(100) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`router_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `router`
--

INSERT INTO `router` (`router_id`, `from_area_id`, `to_area_id`, `fess`, `type_id`) VALUES
(14, 9, 8, '100', 12);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type`, `type_name`) VALUES
(12, 'PER DAY');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`) VALUES
(1, 'admin', '123'),
(2, 'izaz', 'khan');

-- --------------------------------------------------------

--
-- Table structure for table `vehical`
--

DROP TABLE IF EXISTS `vehical`;
CREATE TABLE IF NOT EXISTS `vehical` (
  `vehical` int(11) NOT NULL AUTO_INCREMENT,
  `vehical_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`vehical`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehical`
--

INSERT INTO `vehical` (`vehical`, `vehical_name`) VALUES
(6, 'Alto'),
(7, 'Honda City');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
