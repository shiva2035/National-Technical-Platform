-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2014 at 06:23 PM
-- Server version: 5.5.12
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ntp`
--

-- --------------------------------------------------------

--
-- Table structure for table `studetails`
--

CREATE TABLE IF NOT EXISTS `studetails` (
  `uname` varchar(10) DEFAULT NULL,
  `pass1` varchar(15) DEFAULT NULL,
  `first` varchar(13) DEFAULT NULL,
  `last` varchar(20) DEFAULT NULL,
  `father` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `present_addr` varchar(50) DEFAULT NULL,
  `permanent_addr` varchar(50) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL,
  `tutor_id` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studetails`
--

INSERT INTO `studetails` (`uname`, `pass1`, `first`, `last`, `father`, `dob`, `email`, `mobile`, `present_addr`, `permanent_addr`, `class`, `tutor_id`) VALUES
('B082035', 'shiva2035', 'Shiva Kumar', 'K', 'Krishnaiah', '0000-00-00', 'shiva2035.iiit@gmail.com', '9963808956', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', '312', 'fac_01');
