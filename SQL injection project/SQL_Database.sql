
CREATE DATABASE IF NOT EXISTS simplesqli;
USE simplesqli;


DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




LOCK TABLES `users` WRITE;

INSERT INTO `users` VALUES ('admin','password'),('duck','kfc'),('druid','druid@123'),('druk','password2');

UNLOCK TABLES;

