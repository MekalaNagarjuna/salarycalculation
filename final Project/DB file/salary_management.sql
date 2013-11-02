-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2013 at 03:09 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `salary management`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(30) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Phone` int(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Designation` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  PRIMARY KEY (`employee_id`,`Phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `uname` varchar(30) NOT NULL,
  `da` int(40) NOT NULL,
  `ta` int(40) NOT NULL,
  `hra` int(40) NOT NULL,
  `basic` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`uname`, `da`, `ta`, `hra`, `basic`) VALUES
('chanti', 45, 34, 120, 1000),
('miki', 13, 56, 56, 8976),
('nagarjuna', 100, 50, 100, 15000),
('manju', 300, 100, 200, 20000),
('deepak', 200, 150, 100, 25000),
('bangar', 300, 200, 200, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `uid` int(30) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `upass` varchar(40) NOT NULL,
  `uemail` varchar(40) NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`uid`, `uname`, `upass`, `uemail`) VALUES
(1, 'deepak', 'dkc', '1123'),
(2, 'chanti', 'chantii', 'chantiii'),
(3, 'gbhgb', '123', '566'),
(4, 'chanti', 'ram', 'chanti@gmail.com'),
(5, 'manju', 'manju', 'm@gmail.com'),
(6, 'ram', 'ram', 'r@yahoo.com'),
(7, 'siva', 's', 's@gmail.com'),
(8, 'ra', 'r', 'hjhjhh'),
(9, 'krishna', 'k', 'k@gmail.com'),
(10, 'bushan', 'b', 'b@gmail.com'),
(11, 'ramu', 'r', 'r@gmail.com'),
(12, 'nagarjuna', 'n', 'n@gmail.com'),
(13, 'manju', 'manju', 'm@yahoo.com'),
(14, 'deepak', 'd', 'd@gmail.com'),
(15, 'bangar', 'b', 'b@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
