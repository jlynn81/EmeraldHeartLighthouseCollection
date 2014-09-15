# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.34)
# Database: product_database
# Generation Time: 2014-05-28 03:21:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table email_database
# ------------------------------------------------------------

DROP TABLE IF EXISTS `email_database`;

CREATE TABLE `email_database` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table product_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_details`;

CREATE TABLE `product_details` (
  `item` int(11) DEFAULT NULL,
  `product_name` varchar(250) DEFAULT NULL,
  `product_description` varchar(250) DEFAULT NULL,
  `product_amount` decimal(11,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table Products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products` (
  `item` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_amount` int(11) NOT NULL,
  `artist_designer` varchar(100) NOT NULL,
  PRIMARY KEY (`item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Products` WRITE;
/*!40000 ALTER TABLE `Products` DISABLE KEYS */;

INSERT INTO `Products` (`item`, `product_name`, `product_description`, `product_amount`, `artist_designer`)
VALUES
	(0,'Holiday Wreath','',50,'Sue Frazier'),
	(1,'Star Clown','',15,'Sue Frazier'),
	(2,'Mystical Carousel Unicorn','',40,'Sue Frazier'),
	(3,'Mystical Mask of Dreams','',200,'Sue Frazier'),
	(4,'Under Water Dream','',150,'Sue Frazier'),
	(5,'Lighthouse Hurricane Statue','',175,'Sue Frazier');

/*!40000 ALTER TABLE `Products` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
