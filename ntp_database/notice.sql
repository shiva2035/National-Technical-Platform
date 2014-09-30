-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 03:54 PM
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
