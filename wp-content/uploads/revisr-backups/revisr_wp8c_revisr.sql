
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
DROP TABLE IF EXISTS `wp8c_revisr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp8c_revisr` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text COLLATE utf8mb4_unicode_ci,
  `event` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp8c_revisr` WRITE;
/*!40000 ALTER TABLE `wp8c_revisr` DISABLE KEYS */;
INSERT INTO `wp8c_revisr` VALUES (1,'2018-03-24 04:22:11','Successfully created a new repository.','init','Admin'),(2,'2018-03-24 04:27:14','Error staging files.','error','Revisr Bot'),(3,'2018-03-24 04:27:14','Successfully backed up the database.','backup','Revisr Bot'),(4,'2018-03-24 04:27:14','The weekly backup was successful.','backup','Revisr Bot'),(5,'2018-03-24 04:29:06','There was an error committing the changes to the local repository.','error','Admin'),(6,'2018-03-24 04:29:22','Committed <a href=\"https://socialcyclinglex.org/wp-admin/admin.php?page=revisr_view_commit&commit=01d7ff6&success=true\">#01d7ff6</a> to the local repository.','commit','Admin'),(7,'2018-03-24 04:29:22','Error pushing changes to the remote repository.','error','Admin'),(8,'2018-03-24 04:30:55','Created new branch: Carl-Fucking-around','branch','Admin'),(9,'2018-03-24 04:30:55','Checked out branch: Carl-Fucking-around.','branch','Admin'),(10,'2018-03-24 04:37:56','Checked out branch: master.','branch','Admin'),(11,'2018-03-24 04:38:31','Error pushing changes to the remote repository.','error','Admin'),(12,'2018-03-24 04:38:31','Reverted to commit <a href=\"https://socialcyclinglex.org/wp-admin/admin.php?page=revisr_view_commit&commit=01d7ff6\">#01d7ff6</a>.','revert','Admin'),(13,'2018-03-24 04:39:22','Deleted branch Carl-Fucking-around.','branch','Admin'),(14,'2018-03-24 04:41:19','There was an error committing the changes to the local repository.','error','Admin'),(15,'2018-03-26 16:02:31','Committed <a href=\"https://socialcyclinglex.org/wp-admin/admin.php?page=revisr_view_commit&commit=c6c4dcb&success=true\">#c6c4dcb</a> to the local repository.','commit','Admin'),(16,'2018-03-26 16:02:31','Error pushing changes to the remote repository.','error','Admin'),(17,'2018-03-26 16:17:35','There was an error committing the changes to the local repository.','error','Admin'),(18,'2018-03-30 01:45:45','Committed <a href=\"https://socialcyclinglex.org/wp-admin/admin.php?page=revisr_view_commit&commit=4e13a70&success=true\">#4e13a70</a> to the local repository.','commit','Admin'),(19,'2018-03-30 01:45:45','Error pushing changes to the remote repository.','error','Admin'),(20,'2018-03-30 02:53:42','Created new branch: fucking-with-themes','branch','Admin'),(21,'2018-03-30 02:53:42','Checked out branch: fucking-with-themes.','branch','Admin'),(22,'2018-03-30 14:24:44','Committed <a href=\"https://socialcyclinglex.org/wp-admin/admin.php?page=revisr_view_commit&commit=b26aa10&success=true\">#b26aa10</a> to the local repository.','commit','Admin'),(23,'2018-03-30 14:24:44','Error pushing changes to the remote repository.','error','Admin'),(24,'2018-03-30 14:25:08','Checked out branch: master.','branch','Admin'),(25,'2018-03-30 14:31:31','Checked out branch: fucking-with-themes.','branch','Admin'),(26,'2018-03-30 14:32:29','Checked out branch: master.','branch','Admin'),(27,'2018-03-30 14:36:07','Checked out branch: fucking-with-themes.','branch','Admin'),(28,'2018-03-30 14:48:52','Checked out branch: master.','branch','Admin');
/*!40000 ALTER TABLE `wp8c_revisr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

