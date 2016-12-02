-- MySQL dump 10.13  Distrib 5.6.30, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: test_db
-- ------------------------------------------------------
-- Server version	5.6.30-1+deb.sury.org~trusty+2

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `aluno` varchar(120) NOT NULL,
  `turno` varchar(5) NOT NULL,
  `periodo` varchar(12) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(7) NOT NULL,
  `justificativa` text NOT NULL,
  `campus` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (22,'',1,'2016-12-01 19:13:49','2016-12-02 11:24:47',2,'Sérgio Bandeira','Manhã','3º','20151infig0180','09278694460','7333544','Justificando previamente a ausência do dia 02/12/2016, pois irei fazer uma cirurgia na gengiva no horário de aula. Apresentarei o atestado médico ao retornar ao curso.','Igarassu'),(27,'',1,'2016-12-02 11:23:02','2016-12-02 11:23:02',5,'Adauto','manha','3º','20151infig0326','11309763437','9335551','Aviso previamente a falta no dia 07/12/2016 pois estarei em consulta médica. Apresentarei o atestado médico na volta.','Igarassu');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(10) NOT NULL,
  `rght` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,2,'Justificativa de Faltas','Utilizado para enviar ao sistema as faltas que o aluno mandar.','2016-12-01 12:34:46','2016-12-01 12:59:53');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phinxlog`
--

LOCK TABLES `phinxlog` WRITE;
/*!40000 ALTER TABLE `phinxlog` DISABLE KEYS */;
INSERT INTO `phinxlog` VALUES (20161124123824,'CreateCategories','2016-11-24 17:04:32','2016-11-24 17:04:32'),(20161124124123,'CreateArticles','2016-11-24 17:04:32','2016-11-24 17:04:32'),(20161124145439,'AddUserIdToArticles','2016-11-24 17:54:59','2016-11-24 17:54:59');
/*!40000 ALTER TABLE `phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Grugal','$2y$10$/QJTB6doBfmMh7OwIzFSOO..uK/tcUhUSUOHCxNoEkNUt3AyAZ/Ki','Admin','2016-11-24 15:15:42','2016-11-24 15:15:42'),(3,'Adauto','$2y$10$wyWi6pdBXE5.Zw2EWj03wOjc6Yid8cWB6FKaAgLs7n6iMVu5rdxqm','Author','2016-12-01 12:05:40','2016-12-01 12:05:40'),(4,'Banser','$2y$10$xpfMfLBM9iKVyce5qEzJ.e/69nUMGQstcOI02Eu14MW2C0JqEH0Py','Aluno','2016-12-01 13:30:31','2016-12-01 19:17:24'),(5,'Angela','$2y$10$tcSGclEw/FByMYIN1IB5iOG8AomYwjAIqyn006BdrOaIgobCNXhQi','Admin','2016-12-01 19:43:47','2016-12-01 19:43:47'),(6,'serumaninho','$2y$10$W7JnCL93dgp8tyh9ZW5zEOpSI4c6C.b4cuXYwg6ufs5uKq3WfoF4a','Admin','2016-12-01 20:00:40','2016-12-01 20:00:40'),(7,'Inacio Neto','$2y$10$kPuoOKQJjKtYkdOAZ1Fy8.55257YPofQHgN4rYO/gWj342WkUqahW','Aluno','2016-12-01 20:07:06','2016-12-01 20:07:06'),(8,'Alexandre','$2y$10$R/T/aeAWqGaZNQ/0vAlwQerEclvJ2hqnWrPyFXVQGPN0WEYqDJRdm','Aluno','2016-12-01 20:11:04','2016-12-01 20:11:04'),(9,'qwertyui','$2y$10$SaVD.ynFdHTkmWb8nTC1wOO0L2dx8syPMNNi0yteTQ7YNJEKVV24S','Aluno','2016-12-01 20:21:25','2016-12-01 20:21:25'),(10,'Diance','$2y$10$wuVdZKPJK.OLcIgv61plmOuykyOcLdyR8gm7bdPBC5IbNBVuAusqS','Aluno','2016-12-01 20:26:35','2016-12-01 20:26:35'),(11,'ramonmsf','$2y$10$CYQ7ddM7fkt5nYVUjcGNlO1KSpQkWGDNewmmrTkAYLF4jMyd23Q7O','Admin','2016-12-02 11:26:33','2016-12-02 11:26:33'),(12,'adsl','$2y$10$6KBL.7XNUM0Ijr2/0AYHheuF48W6CmAPNzeVDAb7fzX8jn9dqhgpe','Admin','2016-12-02 11:33:54','2016-12-02 11:33:54');
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

-- Dump completed on 2016-12-02  9:14:02
