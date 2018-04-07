
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
DROP TABLE IF EXISTS `wp8c_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp8c_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp8c_usermeta` WRITE;
/*!40000 ALTER TABLE `wp8c_usermeta` DISABLE KEYS */;
INSERT INTO `wp8c_usermeta` VALUES (1,1,'nickname','Admin'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'syntax_highlighting','true'),(7,1,'comment_shortcuts','false'),(8,1,'admin_color','fresh'),(9,1,'use_ssl','0'),(10,1,'show_admin_bar_front','true'),(11,1,'locale',''),(12,1,'wp8c_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(13,1,'wp8c_user_level','10'),(14,1,'dismissed_wp_pointers','theme_editor_notice'),(15,1,'show_welcome_panel','0'),(16,1,'default_password_nag',''),(17,1,'session_tokens','a:1:{s:64:\"26fde6260605131c988f087cedaa93ad6195f1773fe5a598faabccccef329cca\";a:4:{s:10:\"expiration\";i:1523135409;s:2:\"ip\";s:14:\"74.130.179.188\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36\";s:5:\"login\";i:1522962609;}}'),(29,1,'closedpostboxes_dashboard','a:1:{i:0;s:21:\"dashboard_quick_press\";}'),(30,1,'metaboxhidden_dashboard','a:1:{i:0;s:21:\"dashboard_quick_press\";}'),(31,1,'meta-box-order_dashboard','a:4:{s:6:\"normal\";s:38:\"dashboard_right_now,dashboard_activity\";s:4:\"side\";s:52:\"dashboard_quick_press,gadwp-widget,dashboard_primary\";s:7:\"column3\";s:0:\"\";s:7:\"column4\";s:0:\"\";}'),(28,1,'diarjolite_userID_notice_1','1'),(18,1,'wp8c_user-settings','libraryContent=browse&editor=html'),(19,1,'wp8c_user-settings-time','1521658456'),(20,1,'wp8c_dashboard_quick_press_last_post_id','130'),(21,1,'community-events-location','a:4:{s:11:\"description\";s:9:\"Lexington\";s:8:\"latitude\";s:10:\"38.0498000\";s:9:\"longitude\";s:11:\"-84.4585500\";s:7:\"country\";s:2:\"US\";}'),(22,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),(23,1,'metaboxhidden_nav-menus','a:1:{i:0;s:12:\"add-post_tag\";}'),(24,1,'nav_menu_recently_edited','2'),(27,1,'tgmpa_dismissed_notice_tgmpa','1'),(37,1,'aioseop_seen_about_page','2.5'),(38,1,'meta-box-order_page','a:3:{s:4:\"side\";s:36:\"postimagediv,submitdiv,pageparentdiv\";s:6:\"normal\";s:81:\"page,aiosp,revisionsdiv,postcustom,commentstatusdiv,commentsdiv,slugdiv,authordiv\";s:8:\"advanced\";s:0:\"\";}'),(39,1,'screen_layout_page','2'),(36,1,'wpseo-remove-upsell-notice','1');
/*!40000 ALTER TABLE `wp8c_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

