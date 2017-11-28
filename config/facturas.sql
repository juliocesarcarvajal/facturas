-- MySQL dump 10.13  Distrib 5.7.20, for macos10.12 (x86_64)
--
-- Host: localhost    Database: facturas
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(64) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `cedula` varchar(32) NOT NULL,
  `telefono` varchar(32) NOT NULL,
  `direccion` varchar(32) NOT NULL,
  `sexo` varchar(16) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Julio','Carvajal','80878617','3002838419','Carrera 116 # 22 a 45','Masculino','julio.carvajal@outlook.com'),(2,'Juan David','Muñoz Cabrera','1233455677','3134225597','Calle 61 b # 34-56','Masculino','juan.munoz@gmail.com'),(3,'Ana María','Alzate','1077855559','3134225597','Carrera 61 b # 34-56','Femenino','ana.alzate@gmail.com'),(4,'Deiby','López','1455677899','3112446789','Calle 78 sur # 45 -89','Masculino','deiby.lopez@gmail.com'),(5,'Iván Enrrique','Luzardo','80977655','3006775423','Trasversal 45 # 66 - 77','Masculino','ivan.luzardo@gmail.com'),(7,'Andrea','Noguera','603452964','3333333','CARREA 25 # 63-47','Femenino','andrea.noguera@gmail.com'),(8,'Ibo','Cerra','6618711','3333333','CARREA 25 # 63-47','Femenino','andrea.noguera@gmail.com');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consolidados`
--

DROP TABLE IF EXISTS `consolidados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consolidados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `cargo_basico` float(9,2) NOT NULL,
  `cargo_variable` float(9,2) DEFAULT NULL,
  `estrato` int(11) NOT NULL,
  `numero_horas` int(11) DEFAULT NULL,
  `valor_hora` float(9,2) DEFAULT NULL,
  `sub_total_horas` float(9,2) DEFAULT NULL,
  `numero_minutos` int(11) DEFAULT NULL,
  `valor_minuto` float(9,2) DEFAULT NULL,
  `sub_total_minutos` float(9,2) DEFAULT NULL,
  `numero_kb` int(11) DEFAULT NULL,
  `valor_kb` float(9,2) DEFAULT NULL,
  `sub_total_kb` float(9,2) DEFAULT NULL,
  `total` float(9,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cliente_id` (`cliente_id`),
  CONSTRAINT `consolidados_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consolidados`
--

LOCK TABLES `consolidados` WRITE;
/*!40000 ALTER TABLE `consolidados` DISABLE KEYS */;
/*!40000 ALTER TABLE `consolidados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturas`
--

DROP TABLE IF EXISTS `facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `servicio_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `tiempo` float(5,2) DEFAULT NULL,
  `unidad_medida` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `servicio_id` (`servicio_id`),
  KEY `cliente_id` (`cliente_id`),
  CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` VALUES (1,'2017-11-27 21:06:50',3,1,40.00,'Minutos'),(2,'2017-11-27 21:07:40',9,1,5.00,'Horas'),(3,'2017-11-27 21:08:04',15,1,350.00,'Kb'),(4,'2017-11-27 22:21:11',4,2,45.00,'Minutos'),(5,'2017-11-27 22:21:27',10,2,100.00,'Horas'),(6,'2017-11-27 22:21:59',16,2,200.00,'Kb');
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `valor` float(9,2) DEFAULT NULL,
  `estrato` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (1,'Telefonía Estrato 1',5.00,1),(2,'Telefonía Estrato 2',20.00,2),(3,'Telefonía Estrato 3',100.00,3),(4,'Telefonía Estrato 4',400.00,4),(5,'Telefonía Estrato 5',1000.00,5),(6,'Telefonía Estrato 6',2000.00,6),(7,'Television Estrato 1',200.00,1),(8,'Television Estrato 2',1000.00,2),(9,'Television Estrato 3',4000.00,3),(10,'Television Estrato 4',8000.00,4),(11,'Television Estrato 5',12000.00,5),(12,'Television Estrato 6',15000.00,6),(13,'Internet Banda Ancha Estrato 1',20.00,1),(14,'Internet Banda Ancha Estrato 2',80.00,2),(15,'Internet Banda Ancha Estrato 3',150.00,3),(16,'Internet Banda Ancha Estrato 4',220.00,4),(17,'Internet Banda Ancha Estrato 5',350.00,5),(18,'Internet Banda Ancha Estrato 6',480.00,6);
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','4aae984230416ba76f98be2fd11e1aa71d90630a','julio.carvajal@outlook.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-27 20:49:24
