-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cocinados
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pasos`
--

DROP TABLE IF EXISTS `pasos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pasos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receta_id` int(11) NOT NULL,
  `paso` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `receta_id` (`receta_id`),
  CONSTRAINT `pasos_ibfk_1` FOREIGN KEY (`receta_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasos`
--

LOCK TABLES `pasos` WRITE;
/*!40000 ALTER TABLE `pasos` DISABLE KEYS */;
INSERT INTO `pasos` VALUES (8,17,'Cortar tomates frescos en cubos pequeños.'),(9,17,'Picar finamente la albahaca y mezclar con los tomates.'),(10,17,'Tostar rebanadas de pan y cubrir con la mezcla de tomate y albahaca.'),(47,33,'Picar finamente repollo, zanahoria, pimiento y cebolla verde.'),(48,33,'Saltear las verduras en aceite de sésamo hasta que estén tiernas.'),(49,33,'Envolver las verduras salteadas en papel de arroz y freír hasta que estén doradas y crujientes.'),(50,34,'Cortar tomates cherry y mozzarella en rodajas.'),(51,34,'Tostar rebanadas de pan y untar con ajo y aceite de oliva.'),(52,34,'Colocar las rodajas de tomate y mozzarella sobre el pan tostado y espolvorear con albahaca picada.'),(53,35,'Machacar aguacates maduros en un tazón hasta obtener una consistencia suave.'),(54,35,'Agregar tomate picado, cebolla roja, cilantro y jugo de lima al aguacate machacado.'),(55,35,'Mezclar bien y sazonar con sal y pimienta al gusto.');
/*!40000 ALTER TABLE `pasos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-30  8:39:17
