-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: response_security
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `home_abouts`
--

DROP TABLE IF EXISTS `home_abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_abouts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4  NOT NULL,
  `content` longtext CHARACTER SET utf8mb4  NOT NULL,
  `img1` varchar(100) CHARACTER SET utf8mb4  DEFAULT NULL,
  `img1_subhead` varchar(100) CHARACTER SET utf8mb4  DEFAULT NULL,
  `img2` varchar(100) CHARACTER SET utf8mb4  DEFAULT NULL,
  `img2_subhead` varchar(100) CHARACTER SET utf8mb4  DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 
;

--
-- Dumping data for table `home_abouts`
--

LOCK TABLES `home_abouts` WRITE;
/*!40000 ALTER TABLE `home_abouts` DISABLE KEYS */;
INSERT INTO `home_abouts` VALUES (1,'About Us','Response UK Security Ltd are specialists at delivering bespoke security and surveillance services, like Retail Security Services, etc. With over 50 years’ experience working within the security industry, our management team is ...',NULL,NULL,NULL,NULL,'2023-02-19 13:59:53','2023-02-19 13:59:53');
/*!40000 ALTER TABLE `home_abouts` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `about_banners`
--

DROP TABLE IF EXISTS `about_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_banners` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(15) CHARACTER SET utf8mb4  NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4  NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;


--
-- Dumping data for table `about_banners`
--

LOCK TABLES `about_banners` WRITE;
/*!40000 ALTER TABLE `about_banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `about_banners` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `page_name` varchar(50) CHARACTER SET utf8mb4  NOT NULL,
  `page_url` varchar(100) CHARACTER SET utf8mb4  DEFAULT NULL,
  `nav_style` varchar(100) CHARACTER SET utf8mb4  DEFAULT NULL,
  `nav_toggle` varchar(100) CHARACTER SET utf8mb4  DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ;


--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home','/','nav-item dropdown','nav-link ','2023-03-05 03:48:29','2023-03-05 03:48:29'),(2,'About','/about','nav-item dropdown','nav-link ','2023-03-05 03:51:56','2023-03-05 03:51:56'),(3,'Services','/services','nav-item dropdown','nav-link dropdown-toggle','2023-03-05 03:53:57','2023-03-05 03:53:57'),(4,'Projects','/project','nav-item dropdown','nav-link ','2023-03-05 03:57:12','2023-03-05 03:57:12'),(5,'Contact','/contact','nav-item dropdown','nav-link ','2023-03-05 03:58:19','2023-03-05 03:58:19'),(6,'Sign-in','/auth/login','nav-item dropdown','nav-link','2023-04-15 13:29:46','2023-04-15 13:29:46');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;



--
-- Table structure for table `home_services`
--

DROP TABLE IF EXISTS `home_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_services` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int unsigned NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4  NOT NULL,
  `content` longtext CHARACTER SET utf8mb4  NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `home_services_page_id_foreign` (`page_id`),
  CONSTRAINT `home_services_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;


--
-- Dumping data for table `home_services`
--

LOCK TABLES `home_services` WRITE;
/*!40000 ALTER TABLE `home_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `home_services` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-21  6:32:00
