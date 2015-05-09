CREATE DATABASE  IF NOT EXISTS `chapapresupuestos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `chapapresupuestos`;
-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (i686)
--
-- Host: 127.0.0.1    Database: chapapresupuestos
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `recorrido`
--

DROP TABLE IF EXISTS `recorrido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recorrido` (
  `paso` int(11) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  `acum` int(11) DEFAULT NULL,
  `grafica` varchar(100) DEFAULT NULL,
  `grupoCostos` int(11) DEFAULT NULL,
  `descripcion` varchar(145) DEFAULT NULL,
  `cultivo` int(11) DEFAULT NULL,
  PRIMARY KEY (`paso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recorrido`
--

LOCK TABLES `recorrido` WRITE;
/*!40000 ALTER TABLE `recorrido` DISABLE KEYS */;
INSERT INTO `recorrido` VALUES (20,NULL,1,'cultivos',NULL,NULL,NULL),(21,NULL,0,'cultivos',NULL,NULL,NULL),(22,1,1,'cultivos',NULL,NULL,NULL),(23,1,0,'cultivos',NULL,NULL,NULL),(25,1,1,'cultivos',NULL,'Tomate Bola',2),(26,1,0,'cultivos',NULL,'Tomate Bola',2),(27,1,1,'cultivos',NULL,'Bell Pepper',3),(28,1,0,'cultivos',NULL,'Bell Pepper',3),(29,2,1,'cultivos',NULL,NULL,NULL),(30,2,0,'cultivos',NULL,NULL,NULL),(31,2,1,'cultivos',NULL,'Saladette',1),(32,2,0,'cultivos',NULL,'Saladette',1),(33,2,1,'cultivos',NULL,'Tomate Bola',2),(34,2,0,'cultivos',NULL,'Tomate Bola',2),(35,2,1,'cultivos',NULL,'Bell Pepper',3),(36,2,0,'cultivos',NULL,'Bell Pepper',3),(37,2,1,'cultivos',NULL,'Tomate Grape',4),(38,2,0,'cultivos',NULL,'Tomate Grape',4);
/*!40000 ALTER TABLE `recorrido` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-09 13:18:46
