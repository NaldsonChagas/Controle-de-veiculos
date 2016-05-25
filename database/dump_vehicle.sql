-- MySQL dump 10.13  Distrib 5.7.12, for Linux (x86_64)
--
-- Host: localhost    Database: Controle_de_automovel
-- ------------------------------------------------------
-- Server version	5.7.12-0ubuntu1

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
-- Table structure for table `Abastecimento`
--

DROP TABLE IF EXISTS `Abastecimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Abastecimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `combustivel` varchar(10) NOT NULL,
  `valor` double NOT NULL,
  `nome_posto` varchar(20) NOT NULL,
  `km` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Abastecimento`
--

LOCK TABLES `Abastecimento` WRITE;
/*!40000 ALTER TABLE `Abastecimento` DISABLE KEYS */;
/*!40000 ALTER TABLE `Abastecimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Carro`
--

DROP TABLE IF EXISTS `Carro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Carro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `ano` int(4) NOT NULL,
  `placa` int(7) NOT NULL,
  `foto` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Carro`
--

LOCK TABLES `Carro` WRITE;
/*!40000 ALTER TABLE `Carro` DISABLE KEYS */;
INSERT INTO `Carro` VALUES (15,'honda civic',2017,121212,'public/img/vehicles/1463710986.jpg'),(19,'Fusca 1300 L',1999,121212,'public/img/vehicles/1463711617.jpg'),(20,'Fusca 1300 L',1999,121212,'public/img/vehicles/1463711618.jpg'),(21,'Fusca 1300 L',1999,121212,'public/img/vehicles/1463711620.jpg'),(22,'Fusca 1300 L',1999,121212,'public/img/vehicles/1463711623.jpg');
/*!40000 ALTER TABLE `Carro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Manutencao`
--

DROP TABLE IF EXISTS `Manutencao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Manutencao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `km` double NOT NULL,
  `realizado` tinyint(1) NOT NULL,
  `valor` double NOT NULL,
  `local` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Manutencao`
--

LOCK TABLES `Manutencao` WRITE;
/*!40000 ALTER TABLE `Manutencao` DISABLE KEYS */;
/*!40000 ALTER TABLE `Manutencao` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-25  0:50:20
