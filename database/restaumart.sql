-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2015 at 07:59 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaumart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manager`
--

CREATE TABLE IF NOT EXISTS `tbl_manager` (
  `managerID` int(4) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `Res_Name` varchar(80) NOT NULL,
  `Res_Address` varchar(80) NOT NULL,
  `Res_Email` varchar(80) NOT NULL,
  `Res_Contact` int(10) NOT NULL,
  `Zip` int(4) NOT NULL,
  `City` varchar(10) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Photo` varchar(10) NOT NULL,
  PRIMARY KEY (`managerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_manager`
--

INSERT INTO `tbl_manager` (`managerID`, `firstname`, `lastname`, `address`, `email`, `contactnumber`, `Res_Name`, `Res_Address`, `Res_Email`, `Res_Contact`, `Zip`, `City`, `State`, `Photo`) VALUES
(7, 'dinusha', 'perera', 'kadana', 'dp@gmail.com', 711154564, 'hamilton', 'kadana', 'ham@gmail.com', 113435647, 1232, 'nugegoda', 'west', ''),
(8, 'lalith', 'perera', 'n0.32, ravan, kirulapona', 'lalith@gmail.com', 754327424, 'pitzza hut', 'no.5,first lane, colombo03', 'pitzzahut@gmail.com', 114357653, 54001, 'colombo', 'western', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pass`
--

CREATE TABLE IF NOT EXISTS `tbl_pass` (
  `userID` int(4) NOT NULL DEFAULT '0',
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pass`
--

INSERT INTO `tbl_pass` (`userID`, `username`, `password`) VALUES
(7, 'dinu', '6acdbd7df3785f028ef4af288ffea024'),
(8, 'lalith', 'ae30d9afb3683b9a6f182c3245d4204c'),
(28, 'anusha', '81dc9bdb52d04dc20036dbd8313ed055'),
(29, 'thilanka', '3105a44750ecd8b07b6aea71f790f3dd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `userID` int(4) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `contactnumber` int(2) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `firstname`, `lastname`, `address`, `email`, `contactnumber`) VALUES
(28, 'anusha', 'umayangani', 'matara', 'an@gmail.com', 774354563),
(29, 'thilanka', 'bowala', '34,Nalandarama road,Nugegoda', 'thippi@gmail.com', 712343234);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
