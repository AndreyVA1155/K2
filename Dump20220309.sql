-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: k2
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `head` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `topic` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'post 1','text post 1','full text post 1',NULL,NULL,NULL),(2,'post 2','text post 2','full text post 2',NULL,NULL,NULL),(3,'post 3','text post 3','full text post 3',NULL,NULL,NULL),(4,'post 4','text post 4','full text post 4',NULL,NULL,NULL),(5,'post 5','text post 5','full text post 5',NULL,NULL,NULL);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime(2) DEFAULT NULL,
  `user_id` int DEFAULT NULL COMMENT 'ИД пользователя написавшего комментарий',
  `post_id` int DEFAULT NULL COMMENT 'id поста к которому оставлен комментарий',
  `status` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci COMMENT 'статус комментария (на модерации/утвержден)',
  PRIMARY KEY (`id`),
  KEY `to_user_idx` (`user_id`),
  KEY `to_post_idx` (`post_id`),
  CONSTRAINT `to_post` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `to_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'comment 1','2020-01-01 00:00:00.00',1,1,'утвержден'),(2,'comment 2','2020-02-02 00:00:00.00',2,2,'на модерации'),(3,'comment 3','2020-03-03 00:00:00.00',3,3,'утвержден'),(4,'comment 4','2020-04-04 00:00:00.00',4,4,'на модерации'),(5,'comment 5','2020-05-05 00:00:00.00',1,5,'утвержден');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `param_site`
--

DROP TABLE IF EXISTS `param_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `param_site` (
  `id` int NOT NULL AUTO_INCREMENT,
  `limit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `param_site`
--

LOCK TABLES `param_site` WRITE;
/*!40000 ALTER TABLE `param_site` DISABLE KEYS */;
INSERT INTO `param_site` VALUES (1,'10');
/*!40000 ALTER TABLE `param_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `head` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `topic` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data_create` date DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `to_user_create_post_idx` (`user_id`),
  CONSTRAINT `to_user_create_post` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'post 1','text post 1','full text post 1','2022-01-01',1,'img_post_1','image\\posts\\img_post_1.jpg'),(2,'post 2','text post 2','full text post 2','2022-02-02',2,'img_post_2','image\\posts\\img_post_2.jpg'),(3,'post 3','text post 3','full text post 3','2022-03-03',3,'img_post_3','image\\posts\\img_post_3.jpg'),(4,'post 4','text post 4','full text post 4','2022-04-04',1,'img_post_4','image\\posts\\img_post_4.jpg'),(5,'post 5','text post 5','full text post 5','2022-05-05',2,'img_post_5','image\\posts\\img_post_5.jpg');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_user`
--

DROP TABLE IF EXISTS `status_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_user`
--

LOCK TABLES `status_user` WRITE;
/*!40000 ALTER TABLE `status_user` DISABLE KEYS */;
INSERT INTO `status_user` VALUES (1,'admin'),(2,'content_manager'),(3,'registeredUser'),(4,'unregisteredUser');
/*!40000 ALTER TABLE `status_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription`
--

DROP TABLE IF EXISTS `subscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_post` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `to_user_idx` (`id_user`),
  KEY `to_post_idx` (`id_post`),
  CONSTRAINT `POST` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`),
  CONSTRAINT `USER` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription`
--

LOCK TABLES `subscription` WRITE;
/*!40000 ALTER TABLE `subscription` DISABLE KEYS */;
INSERT INTO `subscription` VALUES (1,3,2),(2,4,3),(3,5,4),(4,1,5),(5,2,1);
/*!40000 ALTER TABLE `subscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `avatar_path` varchar(255) DEFAULT NULL,
  `description` text,
  `status_user` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status_idx` (`status_user`),
  CONSTRAINT `status` FOREIGN KEY (`status_user`) REFERENCES `status_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ivan','ivanov','ivanov@mail.com','$2y$10$dlkJSmgmiNTEgXPIvwIGVu/8cukX56di8zI0m8wYU.YEnU1nfXCMu',NULL,NULL,'description user 1',1),(2,'aleksandr','aleksandrov','aleksandrov@mail.com','$2y$10$dlkJSmgmiNTEgXPIvwIGVu/8cukX56di8zI0m8wYU.YEnU1nfXCMu',NULL,NULL,'description user 2',2),(3,'petr','petrov','petrov@mail.com','$2y$10$dlkJSmgmiNTEgXPIvwIGVu/8cukX56di8zI0m8wYU.YEnU1nfXCMu',NULL,NULL,'description user 3',3),(4,'semen','semenov','semenov@mail.com','$2y$10$dlkJSmgmiNTEgXPIvwIGVu/8cukX56di8zI0m8wYU.YEnU1nfXCMu',NULL,NULL,'description user 4',4),(5,'andrey','andreev','andreev@mail.com','$10$dlkJSmgmiNTEgXPIvwIGVu/8cukX56di8zI0m8wYU.YEnU1nfXCMu',NULL,NULL,'description user 5',1);
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

-- Dump completed on 2022-03-09 19:25:56
