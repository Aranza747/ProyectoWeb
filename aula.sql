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
  `Alumno_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Foro_ID` int(11) NOT NULL,
  `Tablon_ID` int(11) NOT NULL,
  `No_Cuenta` int(11) NOT NULL,
  `Nombre` char(100) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Grupo_ID` int(11) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  PRIMARY KEY (`Alumno_ID`),
  UNIQUE KEY `No_Cuenta` (`No_Cuenta`),
  UNIQUE KEY `Usuario` (`Usuario`),
  UNIQUE KEY `Correo` (`Correo`),
  KEY `Foro_ID` (`Foro_ID`),
  KEY `Tablon_ID` (`Tablon_ID`),
  KEY `Grupo_ID` (`Grupo_ID`),
  CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Foro_ID`) REFERENCES `foro` (`Foro_ID`),
  CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`Tablon_ID`) REFERENCES `tablon` (`Tablon_ID`),
  CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`Grupo_ID`) REFERENCES `grupo` (`Grupo_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archivo`
--

DROP TABLE IF EXISTS `archivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archivo` (
  `Archivo_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ruta` varchar(100) NOT NULL,
  `Fecha_entrega` datetime NOT NULL,
  PRIMARY KEY (`Archivo_ID`),
  UNIQUE KEY `Ruta` (`Ruta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archivo`
--

LOCK TABLES `archivo` WRITE;
/*!40000 ALTER TABLE `archivo` DISABLE KEYS */;
/*!40000 ALTER TABLE `archivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calendario`
--

DROP TABLE IF EXISTS `calendario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendario` (
  `Calendario_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Calendario_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendario`
--

LOCK TABLES `calendario` WRITE;
/*!40000 ALTER TABLE `calendario` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentario` (
  `Comentario_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Comentario` char(200) NOT NULL,
  `Fecha_del_comentario` datetime NOT NULL,
  PRIMARY KEY (`Comentario_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foro`
--

DROP TABLE IF EXISTS `foro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foro` (
  `Foro_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Comentario_ID` int(11) NOT NULL,
  PRIMARY KEY (`Foro_ID`),
  KEY `Comentario_ID` (`Comentario_ID`),
  CONSTRAINT `foro_ibfk_1` FOREIGN KEY (`Comentario_ID`) REFERENCES `comentario` (`Comentario_ID`)
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
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `Grupo_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Grupo` tinyint(5) NOT NULL,
  PRIMARY KEY (`Grupo_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia` (
  `Materia_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Link_Reunion` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Grupo_ID` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Calificacion_final` tinyint(5) NOT NULL,
  PRIMARY KEY (`Materia_ID`),
  KEY `Grupo_ID` (`Grupo_ID`),
  CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`Grupo_ID`) REFERENCES `grupo` (`Grupo_ID`)
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
  `Modulo_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Materia_ID` int(11) NOT NULL,
  `Calificacion` tinyint(5) NOT NULL,
  PRIMARY KEY (`Modulo_ID`),
  KEY `Materia_ID` (`Materia_ID`),
  CONSTRAINT `modulo_ibfk_1` FOREIGN KEY (`Materia_ID`) REFERENCES `materia` (`Materia_ID`)
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
-- Table structure for table `tablon`
--

DROP TABLE IF EXISTS `tablon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablon` (
  `Tablon_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Archivo_ID` int(11) NOT NULL,
  PRIMARY KEY (`Tablon_ID`),
  KEY `Archivo_ID` (`Archivo_ID`),
  CONSTRAINT `tablon_ibfk_1` FOREIGN KEY (`Archivo_ID`) REFERENCES `archivo` (`Archivo_ID`)
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
  `Tarea_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Modulo_ID` int(11) NOT NULL,
  `Calendario_ID` int(11) NOT NULL,
  `Archivo_ID` int(11) NOT NULL,
  `Comentario_ID` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Calificacion` tinyint(5) NOT NULL,
  PRIMARY KEY (`Tarea_ID`),
  KEY `Modulo_ID` (`Modulo_ID`),
  KEY `Calendario_ID` (`Calendario_ID`),
  KEY `Archivo_ID` (`Archivo_ID`),
  KEY `Comentario_ID` (`Comentario_ID`),
  CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`Modulo_ID`) REFERENCES `modulo` (`Modulo_ID`),
  CONSTRAINT `tarea_ibfk_2` FOREIGN KEY (`Calendario_ID`) REFERENCES `calendario` (`Calendario_ID`),
  CONSTRAINT `tarea_ibfk_3` FOREIGN KEY (`Archivo_ID`) REFERENCES `archivo` (`Archivo_ID`),
  CONSTRAINT `tarea_ibfk_4` FOREIGN KEY (`Comentario_ID`) REFERENCES `comentario` (`Comentario_ID`)
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

-- Dump completed on 2022-05-18 18:31:41
