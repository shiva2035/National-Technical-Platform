-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 03:53 PM
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
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `uname` varchar(10) DEFAULT NULL,
  `pass1` varchar(15) DEFAULT NULL,
  `first` varchar(13) DEFAULT NULL,
  `last` varchar(20) DEFAULT NULL,
  `father` varchar(20) DEFAULT NULL,
  `mother` varchar(8) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `blood` varchar(3) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `fath_email` varchar(30) DEFAULT NULL,
  `moth_email` varchar(30) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `fath_mobile` varchar(10) DEFAULT NULL,
  `emergency_mob` varchar(10) DEFAULT NULL,
  `present_addr` varchar(50) DEFAULT NULL,
  `permanent_addr` varchar(50) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL,
  `tutor_id` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`uname`, `pass1`, `first`, `last`, `father`, `mother`, `dob`, `blood`, `email`, `fath_email`, `moth_email`, `mobile`, `fath_mobile`, `emergency_mob`, `present_addr`, `permanent_addr`, `class`, `tutor_id`) VALUES
('admin', 'admin', 'Shiva Kumar', 'K', 'Administration', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `cid` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `hlink` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`cid`, `title`, `message`, `hlink`, `link`, `date`, `time`, `type`) VALUES
('BSR1', 'End Semester Results Announced Just Now', 'Hi students results of autumn semester are declared. Please follow the below link for more details.', 'http://10.31.3.9/Examination', '-', '2014-05-19', '01:00 AM', 'Examination');

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
('B082035', 'shiva2035', 'Shiva Kumar', 'K', 'Krishnaiah', '1993-01-29', 'shiva2035.iiit@gmail.com', '9963808956', 'nagaram, jajireddy gudem, nalgonda', 'rgukt-basar,mudhole, adilabad', '312', 'fac_01');
