/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.1.63 : Database - hongding
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hongding` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `hongding`;

/*Table structure for table `ceshi` */

DROP TABLE IF EXISTS `ceshi`;

CREATE TABLE `ceshi` (
  `lid` int(1) NOT NULL AUTO_INCREMENT,
  `lottery` int(2) NOT NULL COMMENT '奖项',
  `lotteryNum` int(5) NOT NULL COMMENT '奖品数量',
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Table structure for table `lottery` */

DROP TABLE IF EXISTS `lottery`;

CREATE TABLE `lottery` (
  `lid` int(1) NOT NULL AUTO_INCREMENT,
  `lottery` int(2) NOT NULL COMMENT '奖项',
  `lotteryNum` int(5) NOT NULL COMMENT '奖品数量',
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Table structure for table `lottery_record` */

DROP TABLE IF EXISTS `lottery_record`;

CREATE TABLE `lottery_record` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wechatid` varchar(50) NOT NULL COMMENT '微信ID',
  `islottery` int(1) NOT NULL COMMENT '是否中奖',
  `number` int(2) NOT NULL COMMENT '奖品',
  `createtime` date NOT NULL COMMENT '中奖时间',
  `remark` varchar(200) NOT NULL DEFAULT '无' COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2641097 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
