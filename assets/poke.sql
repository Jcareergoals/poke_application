-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: poke
-- ------------------------------------------------------
-- Server version	5.5.41-log

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
-- Table structure for table `poked_users`
--

DROP TABLE IF EXISTS `poked_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `poked_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poked_user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_poked_users_users_idx` (`user_id`),
  CONSTRAINT `fk_poked_users_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poked_users`
--

LOCK TABLES `poked_users` WRITE;
/*!40000 ALTER TABLE `poked_users` DISABLE KEYS */;
INSERT INTO `poked_users` VALUES (9,5,'2016-01-21 12:07:49',6),(10,5,'2016-01-21 12:07:58',6),(11,6,'2016-01-21 12:08:48',5),(12,6,'2016-01-21 12:10:49',7),(13,5,'2016-01-21 12:10:52',7),(14,6,'2016-01-21 12:11:41',7),(15,7,'2016-01-21 15:20:01',6),(16,5,'2016-01-21 15:20:02',6),(17,5,'2016-01-21 15:20:05',6),(18,7,'2016-01-21 15:20:13',6),(19,7,'2016-01-21 15:20:17',6),(20,6,'2016-01-21 15:21:05',8),(21,5,'2016-01-21 15:21:07',8),(22,7,'2016-01-21 15:21:08',8),(23,7,'2016-01-21 15:21:10',8),(24,7,'2016-01-21 15:21:10',8),(25,6,'2016-01-21 15:21:11',8),(26,6,'2016-01-21 15:21:12',8),(27,6,'2016-01-21 15:21:12',8),(28,5,'2016-01-21 15:21:13',8),(29,8,'2016-01-21 15:24:48',9),(30,5,'2016-01-21 15:24:49',9),(31,7,'2016-01-21 15:24:51',9),(32,6,'2016-01-21 15:24:52',9),(33,8,'2016-01-21 15:24:53',9),(34,8,'2016-01-21 15:24:54',9),(35,8,'2016-01-21 15:24:54',9),(36,6,'2016-01-21 15:24:56',9),(37,7,'2016-01-21 15:24:57',9);
/*!40000 ALTER TABLE `poked_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'Angelita','Alita','01/21/2015','Ar92@me.com','e10adc3949ba59abbe56e057f20f883e','2016-01-21 11:56:57','2016-01-21 11:56:57'),(6,'Josue','Jetblue','01/21/2015','Jcareergoals@hotmail.com','e10adc3949ba59abbe56e057f20f883e','2016-01-21 11:57:25','2016-01-21 11:57:25'),(7,'John Carter','Johny','01/21/2015','A@b.com','e10adc3949ba59abbe56e057f20f883e','2016-01-21 12:10:44','2016-01-21 12:10:44'),(8,'Marcus','Mj','01/21/2015','A@d.com','e10adc3949ba59abbe56e057f20f883e','2016-01-21 15:21:00','2016-01-21 15:21:00'),(9,'Adriano','Ronaldinho','01/21/2015','A@e.com','e10adc3949ba59abbe56e057f20f883e','2016-01-21 15:24:46','2016-01-21 15:24:46');
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

-- Dump completed on 2016-01-21 15:37:15
