-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2022 at 03:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcnp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

DROP TABLE IF EXISTS `admininfo`;
CREATE TABLE IF NOT EXISTS `admininfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `name`, `contact`, `email`, `username`, `password`) VALUES
(1, 'admin', '9876543210', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblcnp`
--

DROP TABLE IF EXISTS `tblcnp`;
CREATE TABLE IF NOT EXISTS `tblcnp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `prize` float DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcnp`
--

INSERT INTO `tblcnp` (`id`, `name`, `prize`, `description`, `image`, `status`) VALUES
(2, 'Sweet Bonbon', 200, 'Sweet BonBon 200php per 12pcs', './images/upload/7.jpg', 'Available'),
(3, 'Redvelvet', 150, '150php per slice', './images/upload/7.jpg', 'Available'),
(4, 'Sweet Grape Tarts', 95.5, 'Sweetened Grape tarts 95php per 3pcs', './images/upload/2017-08-18 19.33.46.jpg', 'Available'),
(5, 'Dog', 12333, 'asdakjhs asdf dsf sdfdsf  wetwetwetwetsdggsg sdgsdgsdgh d rwetgergsd sdfafsaf', './images/upload/2.jpg', 'Available'),
(6, 'asdasdsad', 500, 'asdasdasdsa sadsadsadasf dsfdsfdsfdsf dsfdsfdsf', './images/upload/Screenshot (286).png', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `tblorders`
--

DROP TABLE IF EXISTS `tblorders`;
CREATE TABLE IF NOT EXISTS `tblorders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `cnpoid` int(11) DEFAULT NULL,
  `oqty` int(11) DEFAULT NULL,
  `ostatus` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `otype` varchar(50) DEFAULT NULL,
  `datepickup` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorders`
--

INSERT INTO `tblorders` (`id`, `cname`, `address`, `contact`, `cnpoid`, `oqty`, `ostatus`, `timestamp`, `otype`, `datepickup`) VALUES
(10, 'Jeancen Sayoc', 'Tacloban City', '09369420867', 4, 1, 'new', '2016-10-13 15:09:46', 'Pick-up', '2016-10-14'),
(11, 'H', 'Shahunagar, Patel Chowk, jaysingpur', '9403853669', 3, 1, 'new', '2022-03-10 05:56:00', 'Pick-up', '2022-12-31'),
(12, 'Harshal Chougule', 'Shahunagar, Patel Chowk, jaysingpur', '9403853669', 4, 12, 'new', '2022-03-10 05:56:41', 'Deliver', '2022-01-31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
