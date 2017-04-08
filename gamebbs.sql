/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : gamebbs

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2017-03-22 20:30:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `game_adminuser`
-- ----------------------------
DROP TABLE IF EXISTS `game_adminuser`;
CREATE TABLE `game_adminuser` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `game_name` varchar(22) NOT NULL,
  `game_pwd` varchar(32) NOT NULL,
  `game_loginip` varchar(15) NOT NULL,
  `game_logintime` int(11) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_adminuser
-- ----------------------------

-- ----------------------------
-- Table structure for `game_articlecategory`
-- ----------------------------
DROP TABLE IF EXISTS `game_articlecategory`;
CREATE TABLE `game_articlecategory` (
  `game_id` int(10) NOT NULL AUTO_INCREMENT,
  `game_name` varchar(30) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_articlecategory
-- ----------------------------
INSERT INTO `game_articlecategory` VALUES ('1', '公告');
INSERT INTO `game_articlecategory` VALUES ('2', '新闻');
INSERT INTO `game_articlecategory` VALUES ('3', '攻略');

-- ----------------------------
-- Table structure for `game_comment`
-- ----------------------------
DROP TABLE IF EXISTS `game_comment`;
CREATE TABLE `game_comment` (
  `game_id` int(10) NOT NULL,
  `game_userid` int(10) NOT NULL,
  `game_content` varchar(60) NOT NULL,
  `game_articleid` int(10) NOT NULL,
  `game_gameid` int(10) NOT NULL,
  `game_ctime` int(50) NOT NULL,
  `game_fatherid` int(10) DEFAULT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `game_dnfarticle`
-- ----------------------------
DROP TABLE IF EXISTS `game_dnfarticle`;
CREATE TABLE `game_dnfarticle` (
  `game_dnfid` int(10) NOT NULL AUTO_INCREMENT,
  `game_dnftitle` varchar(50) NOT NULL,
  `game_dnfcontent` text NOT NULL,
  `game_dnfauthor` varchar(10) NOT NULL,
  `game_dnfptime` date NOT NULL,
  `game_dnfctime` int(11) NOT NULL,
  `game_dnfutime` int(11) NOT NULL,
  `game_dnfhits` int(10) NOT NULL,
  `game_dnfdescription` varchar(50) NOT NULL,
  `game_dnfpicture` varchar(50) NOT NULL,
  `game_mid` int(5) NOT NULL,
  `game_dnfgameid` int(5) NOT NULL,
  PRIMARY KEY (`game_dnfid`),
  UNIQUE KEY `name` (`game_dnfid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_dnfarticle
-- ----------------------------

-- ----------------------------
-- Table structure for `game_gamecategory`
-- ----------------------------
DROP TABLE IF EXISTS `game_gamecategory`;
CREATE TABLE `game_gamecategory` (
  `game_id` int(10) NOT NULL AUTO_INCREMENT,
  `game_name` varchar(22) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_gamecategory
-- ----------------------------
INSERT INTO `game_gamecategory` VALUES ('1', '地下城与勇士');
INSERT INTO `game_gamecategory` VALUES ('2', '剑灵');
INSERT INTO `game_gamecategory` VALUES ('3', '英雄联盟');
INSERT INTO `game_gamecategory` VALUES ('4', '炉石传说');

-- ----------------------------
-- Table structure for `game_jlarticle`
-- ----------------------------
DROP TABLE IF EXISTS `game_jlarticle`;
CREATE TABLE `game_jlarticle` (
  `game_jlid` int(10) NOT NULL AUTO_INCREMENT,
  `game_jltitle` varchar(50) NOT NULL,
  `game_jlcontent` text NOT NULL,
  `game_jlauthor` varchar(10) NOT NULL,
  `game_jlptime` date NOT NULL,
  `game_jlctime` int(11) NOT NULL,
  `game_jlutime` int(11) NOT NULL,
  `game_jlhits` int(10) NOT NULL,
  `game_jldescription` varchar(50) NOT NULL,
  `game_jlpicture` varchar(50) NOT NULL,
  `game_mid` int(5) NOT NULL,
  `game_jlgameid` int(5) NOT NULL,
  PRIMARY KEY (`game_jlid`),
  UNIQUE KEY `name` (`game_jlid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_jlarticle
-- ----------------------------

-- ----------------------------
-- Table structure for `game_lolarticle`
-- ----------------------------
DROP TABLE IF EXISTS `game_lolarticle`;
CREATE TABLE `game_lolarticle` (
  `game_lolid` int(10) NOT NULL AUTO_INCREMENT,
  `game_loltitle` varchar(50) NOT NULL,
  `game_lolcontent` text NOT NULL,
  `game_lolauthor` varchar(10) NOT NULL,
  `game_lolptime` date NOT NULL,
  `game_lolctime` int(11) NOT NULL,
  `game_lolutime` int(11) NOT NULL,
  `game_lolhits` int(10) NOT NULL,
  `game_loldescription` varchar(50) NOT NULL,
  `game_lolpicture` varchar(50) NOT NULL,
  `game_mid` int(5) NOT NULL,
  `game_lolgameid` int(5) NOT NULL,
  PRIMARY KEY (`game_lolid`),
  UNIQUE KEY `name` (`game_lolid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_lolarticle
-- ----------------------------

-- ----------------------------
-- Table structure for `game_lsarticle`
-- ----------------------------
DROP TABLE IF EXISTS `game_lsarticle`;
CREATE TABLE `game_lsarticle` (
  `game_lsid` int(10) NOT NULL AUTO_INCREMENT,
  `game_lstitle` varchar(50) NOT NULL,
  `game_lscontent` text NOT NULL,
  `game_lsauthor` varchar(10) NOT NULL,
  `game_lsptime` date NOT NULL,
  `game_lsctime` int(11) NOT NULL,
  `game_lsutime` int(11) NOT NULL,
  `game_lshits` int(10) NOT NULL,
  `game_lsdescription` varchar(50) NOT NULL,
  `game_lspicture` varchar(50) NOT NULL,
  `game_mid` int(5) NOT NULL,
  `game_lsgameid` int(5) NOT NULL,
  PRIMARY KEY (`game_lsid`),
  UNIQUE KEY `name` (`game_lsid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_lsarticle
-- ----------------------------

-- ----------------------------
-- Table structure for `game_user`
-- ----------------------------
DROP TABLE IF EXISTS `game_user`;
CREATE TABLE `game_user` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `game_name` varchar(22) NOT NULL,
  `game_pwd` varchar(32) NOT NULL,
  `game_email` varchar(30) NOT NULL,
  `game_phone` char(11) NOT NULL,
  `game_loginip` varchar(15) NOT NULL,
  `game_logintime` int(11) NOT NULL,
  `game_face` varchar(50) NOT NULL,
  `game_ctime` int(11) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_user
-- ----------------------------
