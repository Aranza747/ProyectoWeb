-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: aula
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `noDeCuenta` int(11) NOT NULL,
  `nombre` char(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `contraseña` varchar(100) NOT NULL,
  `sal` varchar(15) NOT NULL,
  PRIMARY KEY (`id_alumno`),
  UNIQUE KEY `noDeCuenta` (`noDeCuenta`),
  UNIQUE KEY `correo` (`correo`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (10,123456789,'Araceli Michel Pueblita Zacarias','aracelimichel@yahoot.com',NULL,'IntentoSisis12',''),(12,321165848,'Junito Perez','123@gmail.com',NULL,'Junaito12',''),(13,321123848,'Mateo','mateo@gmail.com',NULL,'Palito3m','');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archivotablon`
--

DROP TABLE IF EXISTS `archivotablon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archivotablon` (
  `id_archivoTablon` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(100) NOT NULL,
  `fechaEntrega` date NOT NULL,
  PRIMARY KEY (`id_archivoTablon`),
  UNIQUE KEY `ruta` (`ruta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archivotablon`
--

LOCK TABLES `archivotablon` WRITE;
/*!40000 ALTER TABLE `archivotablon` DISABLE KEYS */;
/*!40000 ALTER TABLE `archivotablon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archivotarea`
--

DROP TABLE IF EXISTS `archivotarea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archivotarea` (
  `id_archivoTarea` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(100) NOT NULL,
  `fechaEntrega` date NOT NULL,
  PRIMARY KEY (`id_archivoTarea`),
  UNIQUE KEY `ruta` (`ruta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archivotarea`
--

LOCK TABLES `archivotarea` WRITE;
/*!40000 ALTER TABLE `archivotarea` DISABLE KEYS */;
/*!40000 ALTER TABLE `archivotarea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calendarioglobal`
--

DROP TABLE IF EXISTS `calendarioglobal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendarioglobal` (
  `id_calendarioGlobal` int(11) NOT NULL AUTO_INCREMENT,
  `evento` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id_calendarioGlobal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendarioglobal`
--

LOCK TABLES `calendarioglobal` WRITE;
/*!40000 ALTER TABLE `calendarioglobal` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendarioglobal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calendariopersonal`
--

DROP TABLE IF EXISTS `calendariopersonal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendariopersonal` (
  `id_calendarioPersonal` int(11) NOT NULL AUTO_INCREMENT,
  `id_calendarioGlobal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_calendarioPersonal`),
  KEY `id_calendarioGlobal` (`id_calendarioGlobal`),
  CONSTRAINT `calendariopersonal_ibfk_1` FOREIGN KEY (`id_calendarioGlobal`) REFERENCES `calendarioglobal` (`id_calendarioGlobal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendariopersonal`
--

LOCK TABLES `calendariopersonal` WRITE;
/*!40000 ALTER TABLE `calendariopersonal` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendariopersonal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarioforo`
--

DROP TABLE IF EXISTS `comentarioforo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarioforo` (
  `id_comentarioForo` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` text NOT NULL,
  `fechaDeComentario` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id_comentarioForo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarioforo`
--

LOCK TABLES `comentarioforo` WRITE;
/*!40000 ALTER TABLE `comentarioforo` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarioforo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentariotarea`
--

DROP TABLE IF EXISTS `comentariotarea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentariotarea` (
  `id_comentarioTarea` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` text NOT NULL,
  `fechaDeComentario` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id_comentarioTarea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentariotarea`
--

LOCK TABLES `comentariotarea` WRITE;
/*!40000 ALTER TABLE `comentariotarea` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentariotarea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foro`
--

DROP TABLE IF EXISTS `foro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foro` (
  `id_foro` int(11) NOT NULL AUTO_INCREMENT,
  `id_comentarioForo` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_foro`),
  KEY `id_comentarioForo` (`id_comentarioForo`),
  KEY `id_alumno` (`id_alumno`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `foro_ibfk_1` FOREIGN KEY (`id_comentarioForo`) REFERENCES `comentarioforo` (`id_comentarioForo`),
  CONSTRAINT `foro_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  CONSTRAINT `foro_ibfk_3` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foro`
--

LOCK TABLES `foro` WRITE;
/*!40000 ALTER TABLE `foro` DISABLE KEYS */;
/*!40000 ALTER TABLE `foro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juegomemorama`
--

DROP TABLE IF EXISTS `juegomemorama`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juegomemorama` (
  `id_juegoMemorama` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia` int(11) DEFAULT NULL,
  `calificacionMemorama` decimal(5,0) NOT NULL,
  `pregunta` char(100) NOT NULL,
  `respuesta` char(200) NOT NULL,
  PRIMARY KEY (`id_juegoMemorama`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `juegomemorama_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juegomemorama`
--

LOCK TABLES `juegomemorama` WRITE;
/*!40000 ALTER TABLE `juegomemorama` DISABLE KEYS */;
/*!40000 ALTER TABLE `juegomemorama` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juegotrivia`
--

DROP TABLE IF EXISTS `juegotrivia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juegotrivia` (
  `id_juegoTrivia` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia` int(11) DEFAULT NULL,
  `calificacionTrivia` decimal(5,0) NOT NULL,
  `pregunta` char(100) NOT NULL,
  `opcion1` char(100) NOT NULL,
  `opcion2` char(100) NOT NULL,
  `opcion3` char(100) NOT NULL,
  `respuesta` char(100) NOT NULL,
  PRIMARY KEY (`id_juegoTrivia`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `juegotrivia_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juegotrivia`
--

LOCK TABLES `juegotrivia` WRITE;
/*!40000 ALTER TABLE `juegotrivia` DISABLE KEYS */;
/*!40000 ALTER TABLE `juegotrivia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `linkReunion` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `calificacionFinal` tinyint(5) NOT NULL,
  `sal` varchar(15) NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulo`
--

DROP TABLE IF EXISTS `modulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulo` (
  `id_modulo` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia` int(11) DEFAULT NULL,
  `calificacion` decimal(5,0) NOT NULL,
  PRIMARY KEY (`id_modulo`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `modulo_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulo`
--

LOCK TABLES `modulo` WRITE;
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `RFC` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `nombre` char(100) NOT NULL,
  `sal` varchar(15) NOT NULL,
  PRIMARY KEY (`id_rol`),
  UNIQUE KEY `noDeCuenta` (`RFC`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `RFC` (`RFC`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'QUMA470929F37','14@gmail.com','1234PueblitMaest','profesor',NULL,'Maestrooos','');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tablon`
--

DROP TABLE IF EXISTS `tablon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablon` (
  `id_tablon` int(11) NOT NULL AUTO_INCREMENT,
  `id_archivoTablon` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tablon`),
  KEY `id_alumno` (`id_alumno`),
  KEY `id_archivoTablon` (`id_archivoTablon`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `tablon_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  CONSTRAINT `tablon_ibfk_2` FOREIGN KEY (`id_archivoTablon`) REFERENCES `archivotablon` (`id_archivoTablon`),
  CONSTRAINT `tablon_ibfk_3` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablon`
--

LOCK TABLES `tablon` WRITE;
/*!40000 ALTER TABLE `tablon` DISABLE KEYS */;
/*!40000 ALTER TABLE `tablon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarea`
--

DROP TABLE IF EXISTS `tarea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarea` (
  `id_tarea` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) DEFAULT NULL,
  `id_calendarioPersonal` int(11) DEFAULT NULL,
  `id_archivoTarea` int(11) DEFAULT NULL,
  `id_comentarioTarea` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `calificacion` decimal(5,0) NOT NULL,
  PRIMARY KEY (`id_tarea`),
  KEY `id_modulo` (`id_modulo`),
  KEY `id_calendarioPersonal` (`id_calendarioPersonal`),
  KEY `id_archivoTarea` (`id_archivoTarea`),
  KEY `id_comentarioTarea` (`id_comentarioTarea`),
  CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id_modulo`),
  CONSTRAINT `tarea_ibfk_2` FOREIGN KEY (`id_calendarioPersonal`) REFERENCES `calendariopersonal` (`id_calendarioPersonal`),
  CONSTRAINT `tarea_ibfk_3` FOREIGN KEY (`id_archivoTarea`) REFERENCES `archivotarea` (`id_archivoTarea`),
  CONSTRAINT `tarea_ibfk_4` FOREIGN KEY (`id_comentarioTarea`) REFERENCES `comentariotarea` (`id_comentarioTarea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarea`
--

LOCK TABLES `tarea` WRITE;
/*!40000 ALTER TABLE `tarea` DISABLE KEYS */;
/*!40000 ALTER TABLE `tarea` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-02 20:17:31
