-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2013 at 11:24 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contactcentre`
--
CREATE DATABASE IF NOT EXISTS `contactcentre` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `contactcentre`;

-- --------------------------------------------------------

--
-- Table structure for table `tcontact`
--

CREATE TABLE IF NOT EXISTS `tcontact` (
  `ContactID` int(11) NOT NULL DEFAULT '0',
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcontact`
--

INSERT INTO `tcontact` (`ContactID`, `Name`, `Address`, `Town`, `State`, `PostCode`, `Phone`, `MobilePhone`, `Email`, `UserID`) VALUES
(0, '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tevent`
--

CREATE TABLE IF NOT EXISTS `tevent` (
  `EventID` int(11) NOT NULL DEFAULT '0',
  `Notes` varchar(255) NOT NULL,
  `DateEntered` date NOT NULL,
  `TimeEntered` time NOT NULL,
  `ContactID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tevent`
--

INSERT INTO `tevent` (`EventID`, `Notes`, `DateEntered`, `TimeEntered`, `ContactID`) VALUES
(0, 'Progress of web site and need to review code by November 30, 2013. ', '2013-08-08', '09:18:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tlogin`
--

CREATE TABLE IF NOT EXISTS `tlogin` (
  `UserID` int(11) NOT NULL DEFAULT '0',
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DateAccessed` date NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlogin`
--

INSERT INTO `tlogin` (`UserID`, `UserName`, `Email`, `DateAccessed`) VALUES
(0, 'StarTrekCafe', 'startrekcafe@gmail.com', '2013-08-08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
