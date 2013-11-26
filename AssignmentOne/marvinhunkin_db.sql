-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 69.163.163.74:
-- Generation Time: Nov 25, 2013 at 08:55 PM
-- Server version: 5.1.53-log
-- PHP Version: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marvinhunkin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tcontact`
--

DROP TABLE IF EXISTS `tcontact`;
CREATE TABLE IF NOT EXISTS `tcontact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `state` varchar(3) NOT NULL,
  `post_code` varchar(4) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `mobile_phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tcontact`
--

INSERT INTO `tcontact` (`contact_id`, `name`, `address`, `town`, `state`, `post_code`, `phone`, `mobile_phone`, `email`, `user_id`) VALUES
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

DROP TABLE IF EXISTS `tevent`;
CREATE TABLE IF NOT EXISTS `tevent` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `notes` varchar(255) NOT NULL,
  `date_entered` date NOT NULL,
  `time_entered` time NOT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tevent`
--

INSERT INTO `tevent` (`event_id`, `notes`, `date_entered`, `time_entered`, `contact_id`, `user_id`) VALUES
(1, 'Progress of web site and need to review code by November 30, 2013. ', '2013-08-08', '09:18:00', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tlogin`
--

DROP TABLE IF EXISTS `tlogin`;
CREATE TABLE IF NOT EXISTS `tlogin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_accessed` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tlogin`
--

INSERT INTO `tlogin` (`user_id`, `user_name`, `email`, `password`, `date_accessed`) VALUES
(1, 'StarTrekCafe', 'startrekcafe@gmail.com', 'password', '2013-08-08'),
(2, 'UserName', 'email@yahoo.com', 'password', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
