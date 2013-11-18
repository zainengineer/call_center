-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2013 at 06:36 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contactcentre`
--

-- --------------------------------------------------------

--
-- Table structure for table `tcontact`
--

CREATE TABLE IF NOT EXISTS `tcontact` (
  `ContactID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Town` varchar(255) NOT NULL,
  `State` varchar(3) NOT NULL,
  `PostCode` varchar(4) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `MobilePhone` varchar(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ContactID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tcontact`
--

INSERT INTO `tcontact` (`ContactID`, `Name`, `Address`, `Town`, `State`, `PostCode`, `Phone`, `MobilePhone`, `Email`, `UserID`) VALUES
(2, 'David', 'Peshawar', 'II', 'QLD', '2500', '9141334', '9141334', 'check@test.com', 0),
(4, 'testd', 'testd', 'testd', 'waa', '6233', '2165485145e', '465145484s', 'as@g.come', 1),
(5, 'ali', 'phillpine', 'notown', '', 'd', 'd', '', 'd', 0),
(6, 'khan', 'pesh', 'pes', '', '0332', '34245', '345345', 'wer@E.O', 0),
(7, 'FFFFFFF', 'dsf', 'd', '', 'd', 'd', '', 'd', 0),
(8, 'FFFFFFF', 'dsf', 'd', '', 'd', 'd', '', 'd', 0),
(9, 'Salman', 'Down street', 'Dumpd', '', '8500', '123456789', '45678946', 'test@te.com', 0),
(10, 'Salman', 'Down street', 'Dumpd', '', '8500', '123456789', '45678946', 'test@te.com', 0),
(11, '', '', '', 'ACT', '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
