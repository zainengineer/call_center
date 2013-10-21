/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : contactcentre

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-10-06 17:18:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tcontact`
-- ----------------------------
DROP TABLE IF EXISTS `tcontact`;
CREATE TABLE `tcontact` (
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

-- ----------------------------
-- Records of tcontact
-- ----------------------------
INSERT INTO `tcontact` VALUES ('0', '', '', '', '', '', '', '', '', null);

-- ----------------------------
-- Table structure for `tevent`
-- ----------------------------
DROP TABLE IF EXISTS `tevent`;
CREATE TABLE `tevent` (
  `EventID` int(11) NOT NULL DEFAULT '0',
  `Notes` varchar(255) NOT NULL,
  `DateEntered` date NOT NULL,
  `TimeEntered` time NOT NULL,
  `ContactID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tevent
-- ----------------------------
INSERT INTO `tevent` VALUES ('0', 'Progress of web site and need to review code by November 30, 2013. ', '2013-08-08', '09:18:00', null);

-- ----------------------------
-- Table structure for `tlogin`
-- ----------------------------
DROP TABLE IF EXISTS `tlogin`;
CREATE TABLE `tlogin` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `DateAccessed` date NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tlogin
-- ----------------------------
INSERT INTO `tlogin` VALUES ('1', 'StarTrekCafe', 'startrekcafe@gmail.com', null, '2013-08-08');
INSERT INTO `tlogin` VALUES ('2', 'UserName', 'email', 'password', '0000-00-00');
