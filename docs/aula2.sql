-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: aula2
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (10,123456789,'Araceli Michel Pueblita Zacarias','aracelimichel@yahoot.com',NULL,'IntentoSisis12',''),(12,321165848,'Junito Perez','123@gmail.com',NULL,'Junaito12',''),(13,321123848,'Mateo','mateo@gmail.com',NULL,'Palito3m',''),(14,312456789,'Fulanito Perez','fulanito@gmail.com',NULL,'Prueba1?',''),(15,345678912,'hola','hola@gmail.com',NULL,'Prueba2?',''),(17,345678910,'adios','adios@gmail.com',NULL,'Prueba3?',''),(18,312546789,'Pancho','pancho@gmail.com',NULL,'70f1b7d1d0430faa78707ae4531e1f4b7f7c7f2c9b6f2ee16ecd9ccc1cafa026','629a430e09b67'),(19,312458878,'Pancho Petronilo','panchito@gmail.com',NULL,'ba59ba1c9c610c7d0c343e916645103b8e11bdb8fc3f618155af32ef09079671','629c1013a64e8'),(20,398765421,'Petronila Pánfila','petri@gmail.com',NULL,'7a53fb20c280b0f6217929a8457ca0a28375556269f6676269e230e523efe291','629c20ba5db09'),(21,314725869,'Laura Pérez','laura@gmail.com',NULL,'16c4f69b70dbb37e825270c307f2cb84310ef5dac1c6aa9f61e7483cf2f52330','629c2b7c79441');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumnohasmateria`
--

DROP TABLE IF EXISTS `alumnohasmateria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnohasmateria` (
  `id_aHM` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_aHM`),
  KEY `id_alumno` (`id_alumno`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `alumnohasmateria_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  CONSTRAINT `alumnohasmateria_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnohasmateria`
--

LOCK TABLES `alumnohasmateria` WRITE;
/*!40000 ALTER TABLE `alumnohasmateria` DISABLE KEYS */;
INSERT INTO `alumnohasmateria` VALUES (1,20,9),(2,20,11),(3,20,6),(4,20,12),(5,20,8);
/*!40000 ALTER TABLE `alumnohasmateria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archivotablon`
--

DROP TABLE IF EXISTS `archivotablon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archivotablon` (
  `id_archivoTablon` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(100) DEFAULT NULL,
  `fechaCreacion` date NOT NULL,
  PRIMARY KEY (`id_archivoTablon`),
  UNIQUE KEY `ruta` (`ruta`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archivotablon`
--

LOCK TABLES `archivotablon` WRITE;
/*!40000 ALTER TABLE `archivotablon` DISABLE KEYS */;
INSERT INTO `archivotablon` VALUES (1,'../../archivosTablon/1.pdf','2022-06-08'),(2,'../../archivosTablon/2.pdf','2022-06-08'),(19,'','2022-07-11'),(20,NULL,'2022-06-08');
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
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archivotarea`
--

LOCK TABLES `archivotarea` WRITE;
/*!40000 ALTER TABLE `archivotarea` DISABLE KEYS */;
INSERT INTO `archivotarea` VALUES (1,'simulandoRuta','2001-02-03'),(29,'../../descargas/docs/EquipoNo.11-FertilizantesQuímicos-512.pdf','2022-06-03'),(30,'../../descargas/docs/EquipoNo.11 -Cuestionarioestructuradeunacélulaeucarionte-512.pdf','2022-06-03'),(31,'../../descargas/docs/Equipo 11 Referencias Bibliograficas-512.PDF .pdf','2022-06-03'),(32,'../../descargas/docs/Darwinistas_ENP6.pdf','2022-06-03'),(34,'../../descargas/docs/EquipoNo.11-ParquelosDinamos-512.pdf','2022-06-03'),(35,'','2022-06-03'),(38,'simulandoRut54a','2002-10-22'),(39,'../../descargas/docs/EquipoNo.11-Coevaluación-512.pdf','2022-06-03'),(41,'../../descargas/docs/Los interruptores del ADN_ ¿Qué es la epigenética_2do_avance.pdf','2022-06-03'),(43,'../../descargas/docs/EquipoNo.11-Mendel-512.pdf','2022-06-03'),(45,'../../descargas/docs/EquipoNo.11-GuionPodcast-512.pdf','2022-06-03'),(48,'../../descargas/docs/Equipo 11-Diferencias entre células-512.pdf','2022-06-03'),(50,'../../descargas/docs/Instrucciones para el examen del módulo 1 ciclo escolar 2021-2022.pdf','2022-06-03'),(52,'../../descargas/docs/Semana 1- Clase 2.pdf','2022-06-03'),(53,'../../descargas/docs/My favorite stars.pdf','2022-06-03'),(57,'../../descargas/img/Captura de pantalla (1).png','2022-06-04'),(58,'../../descargas/img/Captura de pantalla (75).png','2022-06-04'),(65,'../../descargas/img/Captura de pantalla (50).png','2022-06-04'),(66,'../../descargas/img/Captura de pantalla (95).png','2022-06-05'),(67,'../../descargas/docs/bitnami.css','2022-06-05'),(68,'../../descargas/docs/Abecedario Griego.docx','2022-06-08'),(82,'../../descargas/img/Prefijos y sufijos griegos.png','2022-06-08'),(83,'../../descargas/img/Captura de pantalla (46).png','2022-06-08'),(84,'../../descargas/img/Captura de pantalla (36).png','2022-06-08'),(88,'../../descargas/docs/Castro López 512-Árbol genealógico del Español.pdf','2022-06-08'),(95,'../../descargas/img/escudo129.jpg','2022-06-08'),(98,'../../descargas/docs/Equipo 11. Biomoléculas. Lípidos y Proteínas-512.pdf','2022-06-08'),(99,'../../descargas/docs/Equipo 11.Membrana celular.512 .pdf','2022-06-08'),(100,'../../descargas/img/Escudo provincia.jpg','2022-06-08');
/*!40000 ALTER TABLE `archivotarea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archivotema`
--

DROP TABLE IF EXISTS `archivotema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archivotema` (
  `id_archivoTema` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(100) NOT NULL,
  PRIMARY KEY (`id_archivoTema`),
  UNIQUE KEY `ruta` (`ruta`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archivotema`
--

LOCK TABLES `archivotema` WRITE;
/*!40000 ALTER TABLE `archivotema` DISABLE KEYS */;
INSERT INTO `archivotema` VALUES (1,'../../descargasTemas/docs/bitnami.css'),(21,'../../descargasTemas/docs/Castro-López-Valentina-Netiquetas para trabajo a distancia-512.PDF'),(20,'../../descargasTemas/docs/EquipoNo.11-GuionPodcast-512.pdf'),(17,'../../descargasTemas/docs/EquipoNo.11-ParquelosDinamos-512.pdf'),(22,'../../descargasTemas/docs/Texto prac1.txt'),(16,'../../descargasTemas/img/Captura de pantalla (11).png'),(2,'../../descargasTemas/img/Captura de pantalla (2).png'),(4,'../../descargasTemas/img/Captura de pantalla (26).png'),(7,'../../descargasTemas/img/Captura de pantalla (32).png');
/*!40000 ALTER TABLE `archivotema` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendarioglobal`
--

LOCK TABLES `calendarioglobal` WRITE;
/*!40000 ALTER TABLE `calendarioglobal` DISABLE KEYS */;
INSERT INTO `calendarioglobal` VALUES (1,'','','0000-00-00','00:00:00'),(2,'','','0000-00-00','00:00:00'),(3,'Valentina','Castro','2022-06-22','12:21:00'),(4,'azax','xaxax','2022-06-22','12:21:00'),(5,'Entrega proyecto final','Si no lo entrego muero','2022-06-23','04:22:00'),(6,'Entrega proyecto final2','hola','2022-06-08','00:00:00'),(7,'probando fecha','holas','2022-06-15','12:48:00'),(8,'Mi cumpleaños','Me pregunto por qué nací JAJAJAJAJ','2022-08-01','00:00:00'),(9,'Enseñando calendario','Hola','2022-06-08','10:38:00');
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
  `descripcion` text DEFAULT NULL,
  `contrasena` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `calificacionFinal` tinyint(5) NOT NULL,
  `sal` varchar(15) NOT NULL,
  `nombreMateria` char(100) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
INSERT INTO `materia` VALUES (6,NULL,'Un curso en el que morirás y perderás tu estabilidad emocional y horas de sueño','Curso123','../../descargas/img/img_portadaMaterias/6.Curso Web.png',0,'','Curso Web'),(7,NULL,'Un curso en el que morirás y perderás tu estabilidad emocional y horas de sueño','Curso123','../../descargas/img/img_portadaMaterias/7.Curso Web.png',0,'','Curso Web'),(8,NULL,'La única clase que me gustaba','ETE123','../../descargas/img/img_portadaMaterias/8.ETE.png',0,'','ETE'),(9,NULL,'Gracias Radón','Ojala123','../../descargas/img/img_portadaMaterias/9.Ojalá quede.png',0,'','Ojalá quede'),(10,NULL,'Holasx2','987654','../../descargas/img/img_portadaMaterias/10.png',0,'','Holas'),(11,NULL,'Que no nos toque Beltrán ','Quimica123','../../descargas/img/img_portadaMaterias/11.jpg',0,'','Química V'),(12,NULL,'Animalitos','Bio123','../../descargas/img/img_portadaMaterias/12.jpg',0,'','Biología III');
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
  `nombreMod` char(100) NOT NULL,
  PRIMARY KEY (`id_modulo`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `modulo_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulo`
--

LOCK TABLES `modulo` WRITE;
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
INSERT INTO `modulo` VALUES (1,NULL,0,'Módulo 1'),(2,NULL,0,'Módulo 3'),(3,NULL,0,'modula5'),(4,9,0,'Primer módulo'),(5,9,0,'Segundo modulo'),(6,9,0,'tercer modulo'),(7,7,0,'Primer módulo'),(8,11,0,'Modulo quimiquesco'),(9,7,0,'Curso Web2'),(10,12,0,'BIologia 123456huuhuuhuhuhuhuuhuhuhu'),(11,12,0,'Segundo modulo');
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntasfrecuentes`
--

DROP TABLE IF EXISTS `preguntasfrecuentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntasfrecuentes` (
  `id_preguntasFrecuentes` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) DEFAULT NULL,
  `preguntaFrecuente` char(200) DEFAULT NULL,
  `respuesta` text DEFAULT NULL,
  PRIMARY KEY (`id_preguntasFrecuentes`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `preguntasfrecuentes_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntasfrecuentes`
--

LOCK TABLES `preguntasfrecuentes` WRITE;
/*!40000 ALTER TABLE `preguntasfrecuentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntasfrecuentes` ENABLE KEYS */;
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
  `contrasena` varchar(100) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'QUMA470929F37','14@gmail.com','1234PueblitMaest','profesor',NULL,'Maestrooos',''),(2,'QUMA470929F38','sutanito@gmail.com','e43521103ab51b2e2d0ca9ba0a851087d222880d69a3294fd0186eab21b1cd71','profesor',NULL,'Sutanito Pérez','629a4020b9be6'),(3,'QUMA470929F36','gusgus@gmail.com','f8bb7ab08924769d272dcae8ae74a06420472ff4f86fa62010c5fce070112882','Administrador',NULL,'Gus Chávez','629c28b0dd1ef'),(4,'QUMA470929F35','juanita@gmail.com','4564decb13e836fcd77f8f688f1bd74608d8c1eb18471bd51bc56b71dc94bdd9','Profesor',12,'Juana la Iguana','629c298ad1a95'),(5,'QUMA470929F34','pepito@gmail.com','e75ba1b7d2bc37d01565458bcf961801a8f544570f1348276a2fa35e27e27dc5','Moderador',NULL,'Pepito Hernández','629c2a0f11c2b');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rolhasmateria`
--

DROP TABLE IF EXISTS `rolhasmateria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rolhasmateria` (
  `id_rHM` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rHM`),
  KEY `id_rol` (`id_rol`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `rolhasmateria_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`),
  CONSTRAINT `rolhasmateria_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rolhasmateria`
--

LOCK TABLES `rolhasmateria` WRITE;
/*!40000 ALTER TABLE `rolhasmateria` DISABLE KEYS */;
INSERT INTO `rolhasmateria` VALUES (1,4,6),(2,4,7),(3,4,8),(4,4,9),(5,4,10),(6,4,11),(7,4,12);
/*!40000 ALTER TABLE `rolhasmateria` ENABLE KEYS */;
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
  `likes` int(11) DEFAULT NULL,
  `materia` char(200) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `reportes` int(11) NOT NULL,
  PRIMARY KEY (`id_tablon`),
  KEY `id_alumno` (`id_alumno`),
  KEY `id_archivoTablon` (`id_archivoTablon`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `tablon_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  CONSTRAINT `tablon_ibfk_2` FOREIGN KEY (`id_archivoTablon`) REFERENCES `archivotablon` (`id_archivoTablon`),
  CONSTRAINT `tablon_ibfk_3` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablon`
--

LOCK TABLES `tablon` WRITE;
/*!40000 ALTER TABLE `tablon` DISABLE KEYS */;
INSERT INTO `tablon` VALUES (24,20,20,NULL,0,'Biologia','hola',0);
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
  `descripcion` text NOT NULL,
  `nombreTarea` char(200) NOT NULL,
  PRIMARY KEY (`id_tarea`),
  KEY `id_modulo` (`id_modulo`),
  KEY `id_calendarioPersonal` (`id_calendarioPersonal`),
  KEY `id_archivoTarea` (`id_archivoTarea`),
  KEY `id_comentarioTarea` (`id_comentarioTarea`),
  CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id_modulo`),
  CONSTRAINT `tarea_ibfk_2` FOREIGN KEY (`id_calendarioPersonal`) REFERENCES `calendariopersonal` (`id_calendarioPersonal`),
  CONSTRAINT `tarea_ibfk_3` FOREIGN KEY (`id_archivoTarea`) REFERENCES `archivotarea` (`id_archivoTarea`),
  CONSTRAINT `tarea_ibfk_4` FOREIGN KEY (`id_comentarioTarea`) REFERENCES `comentariotarea` (`id_comentarioTarea`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarea`
--

LOCK TABLES `tarea` WRITE;
/*!40000 ALTER TABLE `tarea` DISABLE KEYS */;
INSERT INTO `tarea` VALUES (1,NULL,NULL,1,NULL,'2025-04-22','12:20:00',10,'hola',''),(2,NULL,NULL,NULL,NULL,'2026-04-22','12:20:00',9,'adios',''),(3,NULL,NULL,29,NULL,'0000-00-00','20:00:00',0,'hola',''),(4,NULL,NULL,34,NULL,'2022-06-21','04:03:00',0,'hola',''),(5,NULL,NULL,35,NULL,'0000-00-00','00:00:00',0,'',''),(6,NULL,NULL,39,NULL,'2022-06-21','04:03:00',0,'hola',''),(7,NULL,NULL,41,NULL,'2022-06-13','23:38:00',0,'hola',''),(8,NULL,NULL,43,NULL,'2022-06-13','23:38:00',0,'hola',''),(9,NULL,NULL,45,NULL,'2022-07-01','03:43:00',0,'sxscsc',''),(10,NULL,NULL,38,NULL,'2003-06-20','11:44:00',0,'prueba 18084',''),(11,NULL,NULL,50,NULL,'2022-06-17','19:53:00',0,'intento 100',''),(12,NULL,NULL,52,NULL,'2022-06-17','19:53:00',5,'intento 100',''),(13,NULL,NULL,53,NULL,'2022-06-14','12:53:00',0,'intento 1002',''),(14,NULL,NULL,57,NULL,'2022-06-04','18:43:00',0,'ddfsfs se guarda?swdwdw',''),(15,NULL,NULL,58,NULL,'2022-06-14','23:43:00',0,'Subiendo muchos archivos',''),(16,NULL,NULL,65,NULL,'2022-06-28','01:54:00',0,'Cambiando a php x2',''),(17,NULL,NULL,66,NULL,'2022-06-22','00:10:00',0,'COMO TAS',''),(18,NULL,NULL,67,NULL,'2022-06-22','01:05:00',0,'Agregando nombre','Nombre'),(19,5,NULL,82,NULL,'2022-06-14','10:42:00',0,'ya sales?','porfa'),(24,6,NULL,98,NULL,'2022-06-17','13:21:00',0,'Por favor que esta prueba me haga feliz','Tarea feliz'),(25,6,NULL,99,NULL,'2022-06-09','22:03:00',0,'Porque no se despliegan','Tarea triste'),(26,10,NULL,100,NULL,'2022-06-23','20:17:00',0,'jijiejdijeidjiejiejde','Bio');
/*!40000 ALTER TABLE `tarea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tema`
--

DROP TABLE IF EXISTS `tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tema` (
  `id_tema` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) DEFAULT NULL,
  `id_archivoTema` int(11) DEFAULT NULL,
  `descripcion` mediumtext NOT NULL,
  `fecha` date NOT NULL,
  `nombreTema` char(200) NOT NULL,
  PRIMARY KEY (`id_tema`),
  KEY `id_modulo` (`id_modulo`),
  KEY `id_archivoTema` (`id_archivoTema`),
  CONSTRAINT `tema_ibfk_1` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id_modulo`),
  CONSTRAINT `tema_ibfk_2` FOREIGN KEY (`id_archivoTema`) REFERENCES `archivotema` (`id_archivoTema`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tema`
--

LOCK TABLES `tema` WRITE;
/*!40000 ALTER TABLE `tema` DISABLE KEYS */;
INSERT INTO `tema` VALUES (1,NULL,1,'Prueba 2 de muchas','2022-06-05','Tema'),(5,5,16,'Ya no quiero jugar a esto del curso web','2022-06-08','Tema mil ochomil'),(7,6,20,'Por favor que me salga ya o chillo','2022-06-08','Tema feliz'),(8,6,21,'No se nada de dinosaurios','2022-06-08','Dinosaurios'),(9,11,22,'Hola Ya sales?','2022-06-08','Biologia 2');
/*!40000 ALTER TABLE `tema` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-08 22:33:23
