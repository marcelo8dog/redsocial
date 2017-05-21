-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Current Database: `javascript`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `javascript` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `javascript`;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `id_publicacion` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `texto_comentario` varchar(800) DEFAULT NULL,
  `tiempo_comentario` datetime DEFAULT NULL,
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT INTO `comentario` VALUES (1,1,2,'x2','2017-02-15 20:05:05'),(2,1,3,'x3 y todos a final','2017-03-16 21:12:25'),(3,3,2,'Hhhmmm 7u7 I don\'t think so, babeeee','2017-03-01 05:06:20'),(4,2,2,'Yo te amooo','2017-02-20 11:20:26'),(5,2,3,'Wooo, wooo, tranquilo vaquero','2017-02-21 23:26:35'),(6,4,2,'Ste naco','2017-04-12 20:20:20'),(7,5,4,'Jaja Madero kh?®?','2017-05-26 21:21:21'),(8,6,1,'No, pos la verdad no','2017-04-10 04:15:14'),(9,6,3,'Paaaaara nada jeje >:v','2017-05-10 15:02:26'),(10,6,2,'?æiiiooooo','2017-05-11 08:20:30'),(11,7,1,'Lo que s?¡ alegra respecto del intento rid?¡culo de Ripley por mercantilizar un movimiento social m?ís que necesario, es que no estamos dormidos. Fueron diversos los medios que repudiaron la acci??n, trayendo a la memoria el ataque lesbof??bico en la sucursal del Costdel lugar a la pareja de mujeres. Les tengo malas noticias, estimados altos mandos de Ripley: no les vamos a prestar ropa.','2017-05-19 19:30:20'),(12,7,2,'Im Rahmen eines Joint-Venture mit der National University of Singapore hat die TU M??nchen eine Niederlassung in Singapur er?Âffnet. Das TUM ASIA ÔÇô German Institute of Science and Tech ETH Z??rich, University of Cambridge, UC Berkeley, MIT, Hebrew University Jerusalem, Technion Haifa, SJTU.','2017-05-16 20:06:30'),(13,8,2,'Ste rid?¡culo','2017-05-17 08:30:30');
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicacion` (
  `id_publicacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `texto_publicacion` varchar(800) DEFAULT NULL,
  `tiempo_publicacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_publicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicacion`
--

LOCK TABLES `publicacion` WRITE;
/*!40000 ALTER TABLE `publicacion` DISABLE KEYS */;
INSERT INTO `publicacion` VALUES (1,1,'Alguien que me ayude con lo de Canabal????','2017-02-15 17:20:03'),(2,4,'Por qu?® ella no me ama? :\'v','2017-02-17 10:05:20'),(3,4,'Es porque soy feo??','2017-02-23 15:05:23'),(4,2,'io s0yy ?£nic0 y d3f2erinte :s mi pacman est?í torcido, igual que mi alma (JAJA bueno, Alma no est?í torcida)','2017-03-25 14:02:50'),(5,3,'El problema de las redes sociales es que llega un punto en el que ya no tienes ni idea de qu?® publicar, o simplemente te dan ganas de odiar a todos y botar (biba el boto libre :v) todo :v. BTW, alguien ya vio Los Guardianes de la Galaxia 2?? Sale uno de estos: :V pero gigante JAJAJA','2017-03-25 16:22:59'),(6,1,'G??eno, pues Mauricio, Alma, Adri?ín, Lucatero, Ram??n y yo sabemos que podr?ín lograr que esto se vea bonito morros','2017-03-30 09:30:05'),(7,2,'No se trata de echarle la culpa exclusiva a una marca que decide regalar poleras, se trata de analizar por qu?® lo hacen y desde d??nde lo hacen. jeres que compren en sus tiendas sean idealmente talla 38; si en toda su historia han exhibido comerciales donde pontifican ser de los cinco continentes y no tienen a ning??n ni??o mapuche o gordo, por ejemplo. Las  la ciudad.','2017-04-15 22:18:26'),(8,3,'Son las 4:20!!! OMG','2017-05-20 04:20:25');
/*!40000 ALTER TABLE `publicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(10) DEFAULT NULL,
  `password` char(8) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'mcmanus','kc5Ld@rT'),(2,'elpelucas','PelOTE5$'),(3,'elminimau','s0yM@urr'),(4,'lucaloco','9am3rTU%');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-18 11:17:42
