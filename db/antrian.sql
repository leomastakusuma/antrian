# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.20)
# Database: antrian
# Generation Time: 2018-04-05 07:11:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table client_antrian
# ------------------------------------------------------------

DROP TABLE IF EXISTS `client_antrian`;

CREATE TABLE `client_antrian` (
  `id` int(11) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `client_antrian` WRITE;
/*!40000 ALTER TABLE `client_antrian` DISABLE KEYS */;

INSERT INTO `client_antrian` (`id`, `client`)
VALUES
	(1,1),
	(2,2),
	(3,3),
	(4,4),
	(5,5),
	(6,6),
	(7,7),
	(8,8),
	(9,9);

/*!40000 ALTER TABLE `client_antrian` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table data_antrian
# ------------------------------------------------------------

DROP TABLE IF EXISTS `data_antrian`;

CREATE TABLE `data_antrian` (
  `id` varchar(11) NOT NULL DEFAULT '',
  `counter` int(11) NOT NULL,
  `waktu` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `data_antrian` WRITE;
/*!40000 ALTER TABLE `data_antrian` DISABLE KEYS */;

INSERT INTO `data_antrian` (`id`, `counter`, `waktu`, `status`)
VALUES
	('4',2,'',2),
	('2',1,'',2),
	('5',3,'',2),
	('6',4,'',2),
	('7',3,'',2),
	('10',1,'',2);

/*!40000 ALTER TABLE `data_antrian` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table data_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `data_images`;

CREATE TABLE `data_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=image,2=video',
  `description` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `data_images` WRITE;
/*!40000 ALTER TABLE `data_images` DISABLE KEYS */;

INSERT INTO `data_images` (`id`, `type`, `description`, `url`, `status`)
VALUES
	(1,1,'Image iphone','iklan1.png',1),
	(2,1,'asdasd sd','iklan2.png',2);

/*!40000 ALTER TABLE `data_images` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
