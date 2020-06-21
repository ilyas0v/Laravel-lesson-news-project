-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: laravel_lesson_news_project
-- ------------------------------------------------------
-- Server version	5.7.29

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
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'App\\News',15,'images','vant4','o0AQbuTZGk-vant4.svg','image/svg+xml','public',5972,'[]','[]',1,'2020-06-20 08:46:10','2020-06-20 08:46:10'),(2,'App\\News',15,'images','vant3','BE16zJwkKf-vant3.svg','image/svg+xml','public',4781,'[]','[]',2,'2020-06-20 08:46:10','2020-06-20 08:46:10'),(3,'App\\News',15,'images','vant2','mndyl09Y1T-vant2.svg','image/svg+xml','public',3744,'[]','[]',3,'2020-06-20 08:46:10','2020-06-20 08:46:10'),(4,'App\\News',15,'images','vant1','CqSAhObBlW-vant1.svg','image/svg+xml','public',3536,'[]','[]',4,'2020-06-20 08:46:10','2020-06-20 08:46:10'),(5,'App\\News',15,'images','slider-6-450x600','zDcVq0PjzO-slider-6-450x600.jpg','image/jpeg','public',51486,'[]','[]',5,'2020-06-20 08:54:51','2020-06-20 08:54:51'),(6,'App\\News',15,'images','slider-5-450x600','2clgw8yopD-slider-5-450x600.jpg','image/jpeg','public',46984,'[]','[]',6,'2020-06-20 08:54:51','2020-06-20 08:54:51'),(7,'App\\News',15,'images','slider-4-450x600','nhmvUpm4i0-slider-4-450x600.jpg','image/jpeg','public',60118,'[]','[]',7,'2020-06-20 08:54:51','2020-06-20 08:54:51'),(8,'App\\News',15,'images','slider-3-450x600','mAVzIsNXB9-slider-3-450x600.jpg','image/jpeg','public',59310,'[]','[]',8,'2020-06-20 08:54:51','2020-06-20 08:54:51'),(9,'App\\News',15,'images','slider-2-450x600','lH9rkc5tZP-slider-2-450x600.jpg','image/jpeg','public',82623,'[]','[]',9,'2020-06-20 08:54:51','2020-06-20 08:54:51'),(10,'App\\News',15,'images','slider-1-1200x900','EjqhK0FydO-slider-1-1200x900.jpg','image/jpeg','public',186059,'[]','[]',10,'2020-06-20 08:54:51','2020-06-20 08:54:51');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_05_14_172022_create_news_table',1),(4,'2020_05_17_151841_add_image_field_to_news',2),(5,'2020_05_19_162725_create_news_categories_table',3),(6,'2020_05_19_163236_add_category_id_and_order_fields_to_news',4),(7,'2020_05_24_162917_create_news_comments_table',5),(8,'2020_06_20_113402_create_media_table',6),(9,'2014_10_00_000000_create_settings_table',7),(10,'2014_10_00_000001_add_group_column_on_settings_table',7),(11,'2020_06_20_124422_create_media_table',8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (11,'TEst idman xeberi','dfjasodfjasjdf','<p>kfgiojsodijgodsfg</p><p>fdg</p><p>sdfg</p><p>d</p><p>sfg</p><p>sdfg</p><p>df<br></p>','ffE1DPsmd9iycbxRrgMGAsZqM6Vd5tNqHaeVEJsu.png',0,'2020-05-21 13:01:59','2020-05-24 13:22:27',1,0),(12,'Test siyaset xeber','test test test siyaset xeberi test','<p>dfiosjadfo fgsdfogis</p><p>dfg</p><p>fg</p><p>dsfgsdfg<br></p>','TkVqx8BD5txRbi9LoFy4ESyxQOBEytQ7NQbg3CYd.png',1,'2020-05-21 13:13:59','2020-05-21 13:13:59',2,0),(13,'Test futbol xeberi','dfjsdif sdfjhsdfh sdfhusdhf dsjfhsdf','<h4><b>How to Buy Powerledger POWR</b></h4>\r\n					\r\n					<p class=\"mtb-15\">You are not able to purchase POWR with \"Fiat\" currency so you will need to first purchase another \r\n						currency - the easiest to buy are Bitcoin or Ethereum which you can do at Coinbase using a bank transfer or \r\n						debit / credit card purchase and then swap that for POWR at an exchange such as Binance.</p>\r\n					\r\n					<p class=\"mtb-15\">You will have to carry out some identity verification when signing up as they have \r\n						to adhere to strict financial guidelines. Make sure you use our link to signup you will be \r\n						credited with $10 in free bitcoin when you make your first purchase of $100 </p><p class=\"mtb-15\"><br></p><h4><b>How to Buy Powerledger POWR</b></h4>\r\n					\r\n					<p class=\"mtb-15\">You are not able to purchase POWR with \"Fiat\" currency so you will need to first purchase another \r\n						currency - the easiest to buy are Bitcoin or Ethereum which you can do at Coinbase using a bank transfer or \r\n						debit / credit card purchase and then swap that for POWR at an exchange such as Binance.</p>\r\n					\r\n					<p class=\"mtb-15\">You will have to carry out some identity verification when signing up as they have \r\n						to adhere to strict financial guidelines. Make sure you use our link to signup you will be \r\n						credited with $10 in free bitcoin when you make your first purchase of $100 </p><p class=\"mtb-15\"><br></p><h4><b>How to Buy Powerledger POWR</b></h4>\r\n					\r\n					<p class=\"mtb-15\">You are not able to purchase POWR with \"Fiat\" currency so you will need to first purchase another \r\n						currency - the easiest to buy are Bitcoin or Ethereum which you can do at Coinbase using a bank transfer or \r\n						debit / credit card purchase and then swap that for POWR at an exchange such as Binance.</p>\r\n					\r\n					<p class=\"mtb-15\">You will have to carry out some identity verification when signing up as they have \r\n						to adhere to strict financial guidelines. Make sure you use our link to signup you will be \r\n						credited with $10 in free bitcoin when you make your first purchase of $100 </p>','xcjvCNCGAIxWDcbNWahfVrZ9i9ezIIt97lKf0h07.png',1,'2020-05-21 13:15:35','2020-05-21 13:28:12',3,0),(15,'testjss','dskfjlh','<p>sdhfsjfh<br></p>','jmrhJEVzbmb0nQjZIJ6b4m5ulO1TwriGZFbk9G9l.png',1,'2020-06-20 08:46:10','2020-06-20 08:46:10',1,0),(16,'Test xeberi , idman xeberi','sklfhdfhs dfashsdfo','<p>sdlfhasdhfhsd<br></p>',NULL,1,'2020-06-21 11:55:17','2020-06-21 11:55:17',1,0),(17,'Test xeberi , idman xeberi','fdsaf','<p>jkkkg<br></p>',NULL,1,'2020-06-21 11:56:16','2020-06-21 11:56:16',1,0);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_categories`
--

DROP TABLE IF EXISTS `news_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_categories`
--

LOCK TABLES `news_categories` WRITE;
/*!40000 ALTER TABLE `news_categories` DISABLE KEYS */;
INSERT INTO `news_categories` VALUES (1,'Idman',1,1,NULL,'2020-05-19 12:57:56','2020-05-19 12:57:56'),(2,'Siyaset',1,2,NULL,'2020-05-19 12:58:49','2020-05-19 12:58:49'),(3,'Futbol xeberleri',1,3,1,'2020-05-19 13:22:50','2020-05-19 13:22:50'),(4,'Test category',1,0,NULL,'2020-05-24 13:30:24','2020-05-24 13:30:24'),(5,'deactive category',0,4,NULL,'2020-05-24 13:30:49','2020-05-24 13:30:49');
/*!40000 ALTER TABLE `news_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_comments`
--

DROP TABLE IF EXISTS `news_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_comments_news_id_foreign` (`news_id`),
  CONSTRAINT `news_comments_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_comments`
--

LOCK TABLES `news_comments` WRITE;
/*!40000 ALTER TABLE `news_comments` DISABLE KEYS */;
INSERT INTO `news_comments` VALUES (2,13,'Ilyas','ilyas.ilyasov.1@gmail.com','077 777 77 77','salam, feijfoafas dffodshfhdsf','2020-05-24 12:53:31','2020-05-24 12:53:31'),(3,13,'Filankes filankesov','filankes@af.az',NULL,'<!-- <a class=\"btn-brdr-grey btn-b-sm plr-15 mr-10 mt-5\" href=\"#\"><b>LIKE</b></a>\r\n									<a class=\"btn-brdr-grey btn-b-sm plr-15 mt-5\" href=\"#\"><b>REPLY</b></a> -->\r\n								</div><!-- s-right -->','2020-05-24 12:57:22','2020-05-24 12:57:22');
/*!40000 ALTER TABLE `news_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `val` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'app_name','Xeber sayti','2020-06-20 08:27:24','2020-06-20 08:30:01','default'),(2,'logo','app/Q4iDz2OZfldtUhTNvcG5FDzMW8P2b7RwPTIVvDwy.png','2020-06-20 08:27:24','2020-06-20 08:32:17','default'),(3,'facebook','https://facebook.com','2020-06-20 08:35:03','2020-06-20 08:35:03','default'),(4,'twitter','https://twitter.com','2020-06-20 08:35:03','2020-06-20 08:35:03','default');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ilyas Ilyasov','ilyas.ilyasov.1@gmail.com',NULL,'$2y$10$xxLjKfVnIthuOkXTWSANIuwB/yjM3NxA50bVnLt.Eqmvde08wl5QS','EJAeAKqOQO0EwuF7umEBa7PZ23ufdzMMNxA8BNCmuA64oJpsVdmsbXOHzPQf','2020-05-19 12:12:51','2020-05-19 12:12:51');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-21 19:58:36
