-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: bck
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Inalco');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_clave` varchar(250) NOT NULL,
  `fecha` datetime NOT NULL,
  `tamano_archivos` bigint(20) NOT NULL COMMENT 'En bytes',
  `tamano_db` bigint(20) NOT NULL COMMENT 'en bytes',
  `tiempo_ejec` int(11) DEFAULT '0',
  `estado` enum('PENDIENTE','REVISADO') DEFAULT 'PENDIENTE',
  PRIMARY KEY (`id`),
  KEY `fk_log_proyecto1_idx` (`proyecto_clave`),
  CONSTRAINT `fk_log_proyecto1` FOREIGN KEY (`proyecto_clave`) REFERENCES `proyecto` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (1,'dbbb3d98b79120d3cccf0b83f7da2191','2014-02-06 14:47:11',1236589974,789854516,0,'PENDIENTE'),(3,'dbbb3d98b79120d3cccf0b83f7da2191','2014-02-06 15:06:27',106248335,1836838,0,'PENDIENTE'),(4,'dbbb3d98b79120d3cccf0b83f7da2191','2014-02-06 15:22:30',106248335,1836838,16,'PENDIENTE'),(5,'dbbb3d98b79120d3cccf0b83f7da2191','2014-02-06 15:34:54',106248335,1836838,16,'PENDIENTE');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `logs_view`
--

DROP TABLE IF EXISTS `logs_view`;
/*!50001 DROP VIEW IF EXISTS `logs_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `logs_view` (
  `id_cliente` tinyint NOT NULL,
  `nombre_proyecto` tinyint NOT NULL,
  `id` tinyint NOT NULL,
  `proyecto_clave` tinyint NOT NULL,
  `fecha` tinyint NOT NULL,
  `tamano_archivos` tinyint NOT NULL,
  `tamano_db` tinyint NOT NULL,
  `tiempo_ejec` tinyint NOT NULL,
  `estado` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyecto` (
  `clave` varchar(250) NOT NULL COMMENT 'hash md5 del nombre del proyecto',
  `cliente_id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `frecuencia` enum('DIARIO','SEMANAL','MENSUAL','C/DOS DIAS','C/TRES DIAS','C/CUATRO DIAS') NOT NULL DEFAULT 'DIARIO',
  PRIMARY KEY (`clave`),
  KEY `fk_proyecto_cliente_idx` (`cliente_id`),
  CONSTRAINT `fk_proyecto_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyecto`
--

LOCK TABLES `proyecto` WRITE;
/*!40000 ALTER TABLE `proyecto` DISABLE KEYS */;
INSERT INTO `proyecto` VALUES ('dbbb3d98b79120d3cccf0b83f7da2191',1,'Inalco Site','DIARIO');
/*!40000 ALTER TABLE `proyecto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `logs_view`
--

/*!50001 DROP TABLE IF EXISTS `logs_view`*/;
/*!50001 DROP VIEW IF EXISTS `logs_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`10.0.0.105` SQL SECURITY DEFINER */
/*!50001 VIEW `logs_view` AS select `c`.`id` AS `id_cliente`,`p`.`nombre` AS `nombre_proyecto`,`l`.`id` AS `id`,`l`.`proyecto_clave` AS `proyecto_clave`,`l`.`fecha` AS `fecha`,`l`.`tamano_archivos` AS `tamano_archivos`,`l`.`tamano_db` AS `tamano_db`,`l`.`tiempo_ejec` AS `tiempo_ejec`,`l`.`estado` AS `estado` from ((`cliente` `c` join `log` `l`) join `proyecto` `p`) where ((`l`.`proyecto_clave` = `p`.`clave`) and (`p`.`cliente_id` = `c`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-02-06 16:11:37
