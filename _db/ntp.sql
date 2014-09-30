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
-- Table structure for table `StudentData`
--

CREATE TABLE IF NOT EXISTS `StudentData` (
  `StudentID` varchar(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `MobileNo` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `StudentData`
--

INSERT INTO `StudentData` (`StudentID`, `FirstName`, `LastName`, `MobileNo`, `City`) VALUES
('', 'sea_01', 'shiva01', 'Shiva Kumar01', 'Kanneboina01'),
('', 'sea_02', 'shiva02', 'Shiva Kumar02', 'Kanneboina02'),
('', 'sea_03', 'shiva03', 'Shiva Kumar03', 'Kanneboina03'),
('', 'sea_04', 'shiva04', 'Shiva Kumar04', 'Kanneboina04'),
('', 'sea_05', 'shiva05', 'Shiva Kumar05', 'Kanneboina05'),
('', 'sea_06', 'shiva06', 'Shiva Kumar06', 'Kanneboina06'),
('', 'sea_07', 'shiva07', 'Shiva Kumar07', 'Kanneboina07'),
('', 'sea_08', 'shiva08', 'Shiva Kumar08', 'Kanneboina08'),
('', 'sea_09', 'shiva09', 'Shiva Kumar09', 'Kanneboina09'),
('', 'sea_10', 'shiva10', 'Shiva Kumar10', 'Kanneboina10'),
('', 'sea_11', 'shiva11', 'Shiva Kumar11', 'Kanneboina11'),
('', 'sea_12', 'shiva12', 'Shiva Kumar12', 'Kanneboina12'),
('', 'sea_13', 'shiva13', 'Shiva Kumar13', 'Kanneboina13'),
('', 'sea_14', 'shiva14', 'Shiva Kumar14', 'Kanneboina14'),
('', 'sea_15', 'shiva15', 'Shiva Kumar15', 'Kanneboina15'),
('', 'sea_16', 'shiva16', 'Shiva Kumar16', 'Kanneboina16'),
('', 'sea_17', 'shiva17', 'Shiva Kumar17', 'Kanneboina17'),
('', 'sea_18', 'shiva18', 'Shiva Kumar18', 'Kanneboina18'),
('', 'sea_19', 'shiva19', 'Shiva Kumar19', 'Kanneboina19'),
('', 'sea_20', 'shiva20', 'Shiva Kumar20', 'Kanneboina20'),
('', 'sea_21', 'shiva21', 'Shiva Kumar21', 'Kanneboina21'),
('', 'sea_22', 'shiva22', 'Shiva Kumar22', 'Kanneboina22'),
('', 'sea_23', 'shiva23', 'Shiva Kumar23', 'Kanneboina23'),
('', 'sea_24', 'shiva24', 'Shiva Kumar24', 'Kanneboina24'),
('', 'sea_25', 'shiva25', 'Shiva Kumar25', 'Kanneboina25'),
('', 'sea_26', 'shiva26', 'Shiva Kumar26', 'Kanneboina26'),
('', 'sea_27', 'shiva27', 'Shiva Kumar27', 'Kanneboina27'),
('', 'sea_28', 'shiva28', 'Shiva Kumar28', 'Kanneboina28'),
('', 'sea_29', 'shiva29', 'Shiva Kumar29', 'Kanneboina29'),
('', 'sea_30', 'shiva30', 'Shiva Kumar30', 'Kanneboina30'),
('', 'sea_31', 'shiva31', 'Shiva Kumar31', 'Kanneboina31'),
('', 'sea_32', 'shiva32', 'Shiva Kumar32', 'Kanneboina32'),
('', 'sea_33', 'shiva33', 'Shiva Kumar33', 'Kanneboina33'),
('', 'sea_34', 'shiva34', 'Shiva Kumar34', 'Kanneboina34'),
('', 'sea_35', 'shiva35', 'Shiva Kumar35', 'Kanneboina35'),
('', 'sea_36', 'shiva36', 'Shiva Kumar36', 'Kanneboina36'),
('', 'sea_37', 'shiva37', 'Shiva Kumar37', 'Kanneboina37'),
('', 'sea_38', 'shiva38', 'Shiva Kumar38', 'Kanneboina38'),
('', 'sea_39', 'shiva39', 'Shiva Kumar39', 'Kanneboina39'),
('', 'sea_40', 'shiva40', 'Shiva Kumar40', 'Kanneboina40'),
('', 'sea_41', 'shiva41', 'Shiva Kumar41', 'Kanneboina41'),
('', 'sea_42', 'shiva42', 'Shiva Kumar42', 'Kanneboina42'),
('', 'sea_43', 'shiva43', 'Shiva Kumar43', 'Kanneboina43'),
('', 'sea_44', 'shiva44', 'Shiva Kumar44', 'Kanneboina44'),
('', 'sea_45', 'shiva45', 'Shiva Kumar45', 'Kanneboina45'),
('', 'sea_46', 'shiva46', 'Shiva Kumar46', 'Kanneboina46'),
('', 'sea_47', 'shiva47', 'Shiva Kumar47', 'Kanneboina47'),
('', 'sea_48', 'shiva48', 'Shiva Kumar48', 'Kanneboina48'),
('', 'sea_49', 'shiva49', 'Shiva Kumar49', 'Kanneboina49'),
('', 'sea_50', 'shiva50', 'Shiva Kumar50', 'Kanneboina50'),
('', 'sea_51', 'shiva51', 'Shiva Kumar51', 'Kanneboina51');

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
