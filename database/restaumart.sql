-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2015 at 09:28 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaumart`
--
CREATE DATABASE IF NOT EXISTS `restaumart` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `restaumart`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `userID` int(4) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(80) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `firstname`, `lastname`, `username`, `address`, `email`, `password`) VALUES
(1, '', '', 'admin', '', '', 'admin'),
(2, '', '', 'customer', '', '', 'customer'),
(3, '', '', 'kasun', '', '', 'kasun'),
(4, '', '', 'malsha', '', '', '95125eb514ddf59c69b495ed52408faab6051d85'),
(5, '', '', 'ayesha', '', '', 'f0aed3c79215f89d83a2258d044997d0f2b08946'),
(7, 'chamara', '', 'chamara', '', '', '3582a25652ffd37222ccda439cab3ac92a0d3038'),
(8, 'gayan', 'madusanka', 'gayan', '145/9 colombo 7', 'gayan@gmail.com', '134b20fff068bebd6014c15d1bf2f3bec3fdc8a6'),
(17, 'gayan', 'ertert', 'customer1', '145/9 colombo 7', 'admin@gmail.com', 'e2ea3c6b50c654e7c809c252b97d94386fb283fc'),
(18, 'thilina', 'jayasingha', 'thilinajaye', '145/9 colombo 7/5', 'thilina@gmail.com', 'thilina'),
(19, 'piumi', 'prasanga', 'piumi', '145/9 colombo 7,kk', 'piumi@gmail.com', '60a40077d053650f5365092406f3f4891877eb77');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
