-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: ika
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(256) NOT NULL,
  `loginAttempts` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John','Doe','john@example.com','2018-01-05 16:45:22','51616516',NULL),(2,'John','Doe','john@example.com','2018-01-05 16:45:26','51616516',NULL),(3,'John','Doe','john@example.com','2018-01-05 16:45:28','51616516',NULL),(4,'John','Doe','john@example.com','2018-01-05 16:45:28','51616516',NULL),(5,'John','Doe','john@example.com','2018-01-05 16:45:29','51616516',NULL),(6,'John','Doe','john@example.com','2018-01-05 16:45:29','51616516',NULL),(7,'John','Doe','john@example.com','2018-01-05 16:45:30','51616516',NULL),(8,'John','Doe','john@example.com','2018-01-05 16:49:33','51616516',NULL),(9,':fName',':lName',':email','2018-01-05 17:19:05',':password',NULL),(10,':fName',':lName',':email','2018-01-05 17:32:49',':password',NULL),(11,':fName',':lName',':email','2018-01-05 17:34:16',':password',NULL),(12,'spyros','spyros','fsasd','2018-01-05 17:36:19','ac9cd720d97345f342f9125e5bf7c74761e3ff1abaf5221027e3ab90527195a5',NULL),(13,'spyros','spyros','fsasd','2018-01-05 18:17:24','ac9cd720d97345f342f9125e5bf7c74761e3ff1abaf5221027e3ab90527195a5',NULL),(14,'spyros','spyros','fsasd','2018-01-05 18:17:25','ac9cd720d97345f342f9125e5bf7c74761e3ff1abaf5221027e3ab90527195a5',NULL),(15,'spyros','spyros','fsasd','2018-01-05 18:17:30','ac9cd720d97345f342f9125e5bf7c74761e3ff1abaf5221027e3ab90527195a5',NULL),(16,'spyros','spyros','fsasd','2018-01-05 18:17:53','ac9cd720d97345f342f9125e5bf7c74761e3ff1abaf5221027e3ab90527195a5',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-05 20:36:19
