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
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abouts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int unsigned DEFAULT NULL,
  `title_f` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_s` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `founder` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `abouts_page_id_foreign` (`page_id`),
  CONSTRAINT `abouts_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,2,'Who We Are','Response UK Security Ltd are specialists at delivering bespoke security and surveillance services, like Retail Security Services, etc. With over 50 years’ experience working within the security industry, our management team is committed to guaranteeing your peace of mind. While the methods and technology have changed over time, particularly the reliance on CCTV and alarms, the importance of loss prevention has remained the same. Being one of the respected Construction Guarding Companies In Colchester, we pride ourselves on ensuring that the safety of you, your business and your staff is never breached and look to achieve maximum impact in the most cost effective way for all our clients.Our integrated approach As with all security companies, loss prevention is at the core of what we do – but being able to deliver this in the most financially efficient way is what makes us stand out from other security firms. We fit alarms, provide CCTV and supply security guards to monitor and patrol, and by turning these key security services into one, we can maximise their impact on any site. By providing better overall coverage in one service, we are able to cut down the risk of a breach and make cost savings across any contract.Our bespoke services We understand that each of our client’s requirements are unique. This is why we offer tailored security solutions to meet their specific security need. We recognise when a physical presence is all that is needed to act as a deterrent, or where a guard dog unit would be more appropriate.We are sensitive to the fact that some clients may require highly visible security – while others prefer it kept at a distance or integrated with their organisation. We always listen to what the client wants – and deliver what they need, as well as responding and adapting as their requirements evolve. Our security guards','Lincense and Certified','We adhere to standard BS 7855, which stipulates the dos and don’ts of the security industry. All our staff are SIA licensed and appropriately selected to work in any part of the UK and at any sized organisation. We are also able to promise that our guards have been trained in health and safety, first aid and fire safety awareness. When providing guards for a construction site, each will have the Construction Skills Certification Scheme card (CSCS) giving our clients the confidence that they have the right personnel to work on their site. We carry out risk assessments on every site and identify any training requirements for our clients to ensure that they adhere to the necessary legal requirements and protection of their staff and ours - which we are able to provide. When a security guard is required to be the first point of contact for the client’s customers or suppliers, we select our guards with care – ensuring that they are sensitive to the work environment and that they represent both the client, and us, in the best possible way. Our business is run from a 24-hour control unit, which delivers a round-the-clock manned response','Daniel','2023-02-19 10:35:34','2023-02-19 10:35:34');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-21  6:20:25
