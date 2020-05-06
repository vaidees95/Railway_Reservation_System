-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2015 at 07:07 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `railway`
--
CREATE DATABASE IF NOT EXISTS `railway` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `railway`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `contact`
--

TRUNCATE TABLE `contact`;
--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('vaidees', 'vaideesbe@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `login`
--

TRUNCATE TABLE `login`;
--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('cse', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `sques` longtext NOT NULL,
  `answer` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `mstatus` text NOT NULL,
  `day` int(50) NOT NULL,
  `month` text NOT NULL,
  `year` int(50) NOT NULL,
  `occupation` text NOT NULL,
  `aadharcard` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `nationality` text NOT NULL,
  `resaddress1` text NOT NULL,
  `resaddress2` text NOT NULL,
  `resaddress3` text NOT NULL,
  `rescountry` text NOT NULL,
  `respinCode` int(50) NOT NULL,
  `resstate` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `signup`
--

TRUNCATE TABLE `signup`;
--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `password`, `sques`, `answer`, `fname`, `lname`, `gender`, `mstatus`, `day`, `month`, `year`, `occupation`, `aadharcard`, `email`, `mobile`, `nationality`, `resaddress1`, `resaddress2`, `resaddress3`, `rescountry`, `respinCode`, `resstate`, `city`) VALUES
('vaidees', 'vaidees', 'Who was your childhood hero?', 'vaidees', 'vaidees', 'waran', '0', '0', 1, '2', 1997, '0', 56674282, 'vaideesbe@gmail.com', '968856645', 'Bangladesh', '1-187,kosavan thottam', 'thindamangalam', 'namakkal', 'India', 637201, 'tamilnadu', 'namakkal'),
('hello', 'help', 'What is your pets name?', 'vaidees', 'VAIDEESWARAN', 'waran', '1', '1', 1, '1', 1997, '0', 56674282, 'vaideesbe@gmail.com', '', '', '', '', '', '', 0, '', ''),
('Vineeth', 'Kalai', '1', 'sengunthar', 'Vineeth', 'Krishnan', '0', '', 29, '5', 1995, '5', 0, 'rvineekalai@gmail.com', '8903406991', 'India', '', '', '', '', 0, '', 'erode'),
('asfdsf', '', '11', '', '', '', '0', '', 0, '0', 0, '10', 0, '', '', '', '', '', '', '', 0, '', ''),
('mani', 'mani', '0', 'kaliyannan', 'mani', 'k', '1', 'married', 30, '5', 1960, '6', 1873, 'vaidees95@gmail.com', '9789759561', 'India', 'keerambur', 'THINDAMANGALAM(PO)', 'NAMAKKAL', 'India', 637201, 'TAMIL NADU', 'namakkal'),
('mani', '', '0', 'kaliyannan', 'mani', 'k', '1', 'married', 30, '5', 1960, '6', 1873, 'vaidees95@gmail.com', '9789759561', 'India', 'keerambur', 'THINDAMANGALAM(PO)', 'NAMAKKAL', 'India', 0, 'TAMIL NADU', 'namakkal'),
('asfs', '', '11', '', '', '', '0', '00', 0, '0', 0, '10', 0, '', '', '', '', '', '', '', 0, '', ''),
('uma', 'leaders', '2', 'father', 'uma', 'muthupallaniappan', '1', 'unmarried', 6, '8', 1994, '5', 1, 'we@gmail.com', '9933444', 'India', '23asddfg', 'qwerty', '630002', 'India', 630002, 'TAMIL NADU', 'sivaganf'),
('valarmathi', 'mydadishero', '0', 'pappu', 'valar', 'mathi', '1', 'unmarried', 31, '8', 1995, '5', 2653, 'valar.mr@gmail.com', '1636276', 'India', 'puliampatti', 'erode', '', 'India', 482337, 'single', 'erode'),
('cse', 'admin', 'What is your pets name?', 'cse', 'cse', 'cse', 'Female', 'married', 1, '1', 1997, 'Government', 2147483647, 'vaideesbe@gmail.com', '968856645', 'India', '23asddfg', 'rt', '630002', 'India', 45, 'TAMIL NADU', 'namakkal'),
('Anu', 'anuu', 'Who was your childhood hero?', 'father', 'anu', 'subu', 'Female', 'unmarried', 7, '6', 1994, 'Student', 23, 'uma@gmail.com', '9900673421', 'India', 'salem', 'tamilnadu', '', 'India', 630002, 'TAMIL NADU', 'SIVAGANGAI');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `train name` text NOT NULL,
  `trainnumber` varchar(50) NOT NULL,
  `name1` text NOT NULL,
  `age1` int(50) NOT NULL,
  `gender1` text NOT NULL,
  `berth1` text NOT NULL,
  `count` int(50) NOT NULL,
  `cost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tickets`
--

TRUNCATE TABLE `tickets`;
--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`train name`, `trainnumber`, `name1`, `age1`, `gender1`, `berth1`, `count`, `cost`) VALUES
('COIMBATORE EXPRESS', '11200', 'dhoni', 36, 'male', 'upper', 2, 110),
('KERALA EXPRESS', '11669', 'kalai', 22, 'male', 'upper', 2, 980),
('KERALA EXPRESS', '11669', 'kalai', 19, 'male', 'upper', 2, 980),
('COIMBATORE EXPRESS', '11200', 'qwe`', 0, 'male', 'upper', 2, 110),
('COIMBATORE EXPRESS', '11547', '', 0, '11', '11', 46, 2530),
('KERALA EXPRESS', '11283', 'vaidees', 23, 'male', 'middle', 28, 13720),
('KERALA EXPRESS', '11283', '', 0, '11', '11', 1, 490),
('COIMBATORE EXPRESS', '11200', '', 0, '11', '11', 0, 0),
('chennai express', '11207', 'fak', 0, 'male', 'lower', 0, 0),
('chennai express', '11207', '', 0, '11', '11', 3, 1170),
('NAMAKKAL EXRESS', '11201', 'raghav', 19, 'male', 'upper', 1, 45),
('chennai express', '11207', 'anu', 23, 'Female', 'middle', 4, 1560);

-- --------------------------------------------------------

--
-- Table structure for table `trainlist`
--

DROP TABLE IF EXISTS `trainlist`;
CREATE TABLE IF NOT EXISTS `trainlist` (
  `fstation` text NOT NULL,
  `tstation` text NOT NULL,
  `date` text NOT NULL,
  `trainnumber` text NOT NULL,
  `trainname` text NOT NULL,
  `available` int(50) NOT NULL,
  `cost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `trainlist`
--

TRUNCATE TABLE `trainlist`;
--
-- Dumping data for table `trainlist`
--

INSERT INTO `trainlist` (`fstation`, `tstation`, `date`, `trainnumber`, `trainname`, `available`, `cost`) VALUES
('chennai', 'erode', '28/03/2015', '11668', 'chennai express', 43, 390),
('chennai', 'coimbatore', '26/03/2015', '11669', 'KERALA EXPRESS', 0, 490),
('erode', 'kerala', '28/03/2015', '11283', 'KERALA EXPRESS', 0, 320),
('erode', 'coimbatore', '28/03/2015', '11200', 'COIMBATORE EXPRESS', 0, 55),
('erode', 'namakkal', '28/03/2015', '11201', 'NAMAKKAL EXRESS', 49, 45),
('erode', 'chennai', '28/03/2015', '11207', 'chennai express', 43, 360),
('coimbatore', 'erode', '28/03/2015', '11547', 'COIMBATORE EXPRESS', 0, 70),
('kerala', 'erode', '28/03/2015', '11578', 'KERALA EXPRESS', 50, 490);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
