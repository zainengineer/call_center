-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2013 at 03:03 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13
-- test

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tcontact`
--

INSERT INTO `tcontact` (`ContactID`, `Name`, `Address`, `Town`, `State`, `PostCode`, `Phone`, `MobilePhone`, `Email`, `UserID`) VALUES
(2, 'asdfsdf', 'dsf', 'd', '', 'd', 'd', '', 'd', 0),
(4, 'testd', 'testd', 'testd', 'waa', '6233', '2165485145e', '465145484s', 'as@g.come', 1),
(5, 'ali', 'phillpine', 'notown', '', 'd', 'd', '', 'd', 0),
(6, 'khan', 'pesh', 'pes', '', '0332', '34245', '345345', 'wer@E.O', 0),
(7, 'FFFFFFF', 'dsf', 'd', '', 'd', 'd', '', 'd', 0),
(8, 'FFFFFFF', 'dsf', 'd', '', 'd', 'd', '', 'd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tevent`
--

CREATE TABLE IF NOT EXISTS `tevent` (
  `EventID` int(11) NOT NULL AUTO_INCREMENT,
  `Notes` varchar(255) NOT NULL,
  `DateEntered` date NOT NULL,
  `TimeEntered` time NOT NULL,
  `ContactID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EventID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tevent`
--

INSERT INTO `tevent` (`EventID`, `Notes`, `DateEntered`, `TimeEntered`, `ContactID`) VALUES
(1, 'Progress of web site and need to review code by November 30, 2013. ', '2013-08-08', '09:18:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tlogin`
--

CREATE TABLE IF NOT EXISTS `tlogin` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `DateAccessed` date NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tlogin`
--

INSERT INTO `tlogin` (`UserID`, `UserName`, `Email`, `password`, `DateAccessed`) VALUES
(1, 'StarTrekCafe', 'startrekcafe@gmail.com', NULL, '2013-08-08'),
(2, 'UserName', 'email', 'password', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
