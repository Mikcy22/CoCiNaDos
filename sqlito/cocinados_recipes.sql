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
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `time_elaboration` varchar(255) DEFAULT NULL,
  `calorias` int(11) NOT NULL,
  `num_personas` int(11) NOT NULL,
  `tipo_plato` varchar(255) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `tipo_dieta` varchar(255) NOT NULL,
  `metodo_elaboracion` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `ingrediente_especial` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES (17,'Bruschettas de Tomate y Albahaca','15',200,4,'Aperitivos y entrantes','Italiana','Vegetariana','Horneado','2024-05-09 08:45:00','Vegetales y legumbres','https://i.ibb.co/rvvWHz2/Tortilla.jpg','Una brochetas de tomate y albahaca'),(33,'Rollitos de Primavera','40',250,4,'Aperitivos y entrantes','Asiática','No vegetariana','Frito','2024-05-09 11:46:15','Vegetales y legumbres','https://i.ibb.co/nLHf9h1/1366-2000.jpg','Unos buenos rollitos de primavera'),(34,'Bruschettas Caprese','20',300,4,'Aperitivos y entrantes','Italiana','Vegetariana','Asado','2024-05-09 11:52:11','Cereales y granos','https://i.ibb.co/6Fn9pbJ/DSC-1149-970x600.jpg','Brochetas crapese , ricas y dulces'),(35,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(36,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(37,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(38,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(39,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(40,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(41,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(42,'Bruschettas de Tomate y Albahaca','15',200,4,'Aperitivos y entrantes','Italiana','Vegetariana','Frito','2024-05-09 08:45:00','Vegetales y legumbres','https://i.ibb.co/rvvWHz2/Tortilla.jpg','Una brochetas de tomate y albahaca'),(43,'Rollitos de Primavera','40',250,4,'Aperitivos y entrantes','Asiática','No vegetariana','Frito','2024-05-09 11:46:15','Vegetales y legumbres','https://i.ibb.co/nLHf9h1/1366-2000.jpg','Unos buenos rollitos de primavera'),(44,'Bruschettas Caprese','20',300,4,'Aperitivos y entrantes','Italiana','Vegetariana','Asado','2024-05-09 11:52:11','Cereales y granos','https://i.ibb.co/6Fn9pbJ/DSC-1149-970x600.jpg','Brochetas crapese , ricas y dulces'),(45,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(46,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(47,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(48,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(49,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(50,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso'),(51,'Guacamole','15',200,4,'Aperitivos y entrantes','Mexicana','Vegetariana','Otros','2024-05-09 11:56:50','Fruta','https://i.ibb.co/V3WvrKS/guacamole-casero.jpg','Tipico plato mexicano , rico y sabroso');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
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
