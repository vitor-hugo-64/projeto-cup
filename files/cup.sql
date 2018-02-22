# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-02-22 18:46:16
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `emailuser` varchar(45) NOT NULL,
  `passworduser` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

