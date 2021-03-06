-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: websyslab8
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

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
-- Table structure for table `archive`
--

DROP TABLE IF EXISTS `archive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archive` (
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archive`
--

LOCK TABLES `archive` WRITE;
/*!40000 ALTER TABLE `archive` DISABLE KEYS */;
INSERT INTO `archive` VALUES ('Labs','Lab 1','Portfolios','Create a group and individual portfolio website with microformats','https://docs.google.com/document/d/1gfBFgyWVZ4HrudNXn4h_TCicEtdywLBdQxfIEZl-U98/edit'),('Labs','Lab 2','Constitution Day','Create an interactive website that displays the Constitution in a creative way','https://docs.google.com/document/d/1oOEMKBc2Dq6C69Y_pkXRipkVYB5-b-UskvswnTOiNV0/edit'),('Labs','Lab 3','ITWS Website','Create a new and improved version of the ITWS website','https://docs.google.com/document/d/1TAqC_JIZ70o3bf87aCTPtFJxXB4k-VSQzesWzNDsMJI/edit'),('Labs','Lab 4','GNH Website','Create a website for GNH to their given specifications','https://docs.google.com/document/d/1VBy44Ts1Zly14JJPiFk1LeQnqEVVVHxbZQJzgRjrVfo/edit'),('Labs','Lab 5','Frontend Optimization','Implement some optimizations for a game created in javascript','https://docs.google.com/document/d/19fi99OeR6RFPDIMtio7xAyk7EkbvWlhiQzxi5LrS8hs/edit'),('Labs','Lab 6','A better calculator','Create a PHP Calculator','https://docs.google.com/document/d/1Aur3WmROp_lYT6UIIs1HjlZrc450VoORUXVzrXajZ8c/edit'),('Labs','Lab 7','MySQL','Create a gradebook website that implements databases and PHP.','https://docs.google.com/document/d/1ILpyD9LtNgXQ_g8-9bNV9DOgjZkL25Nup69x2wX0dHg/edit'),('Labs','Lab 8','Final lab','Create a website for this course','https://docs.google.com/document/d/1SIF9NwMwpI3HgYLhjoM0kAUpI5Pwp2-QefjjfE3FxBo/edit'),('Lectures','Lecture 1','Introduction','Introduction to this course - going over expectations and schedule.','https://docs.google.com/presentation/d/1qSMVJNQK3CY7Kt2kdeSwhY_toGOaxexVRPZmvZqmg7Q/edit?usp=sharing'),('Lectures','Lecture 10','None','Presentations for GNH lab','#'),('Lectures','Lecture 11','Quiz 1 Review & Frontend optimization/UX','Reviewing for quiz 1 and Frontend Development','https://docs.google.com/presentation/d/13kknZgEpW_QjE2O4ssyhtZUi8tsLU4YU-rsSnkmhFlk/edit?usp=sharing, https://docs.google.com/presentation/d/1xnWSdl3QlAJhhYZJB-L9qulDC2VGb67Ye5jGF5A0NTk/edit?usp=sharing'),('Lectures','Lecture 12','PHP & Lab 6','Introduction to PHP.','https://docs.google.com/presentation/d/1FQrs6bCzF6lyfCXYm--leU81zl9uMwLz/edit?usp=sharing&ouid=101431771635793895949&rtpof=true&sd=true, https://docs.google.com/presentation/d/1l-idKFz6MG4l057y9kiz_aSMUcEIwJRnZvi88UBUB98/edit?usp=sharing'),('Lectures','Lecture 13','PHP, the sequel','Continuing to go over PHP and its applications.',''),('Lectures','Lecture 14','MySQL','Introducing databases.','https://docs.google.com/presentation/d/1b9FUdOQxXLWUB_tNlShdqN695tt8nwMh/edit?usp=sharing&ouid=101431771635793895949&rtpof=true&sd=true'),('Lectures','Lecture 15','PHP & MySQL','Wrapping up databases by themselves and learning how to integrate PHP with the databases.','https://docs.google.com/presentation/d/1hdchGQdRVq_vmLc4Ot1TbyDADWahZ15f/edit?usp=sharing&ouid=101431771635793895949&rtpof=true&sd=true'),('Lectures','Lecture 16','PHP & MySQL, part 2','Continuing to learn how to use PHP with databases and the uses of that.','https://docs.google.com/presentation/d/1IVV09GiwEho8KN4j3XFa9oVdIkz1t9LW/edit?usp=sharing&ouid=101431771635793895949&rtpof=true&sd=true'),('Lectures','Lecture 17','Quiz 2 review, Login and Logout','Reviewing for quiz 2, authentication with PHP/MySQL','https://docs.google.com/presentation/d/1i7WQnXzdwIccKC86zU3DmP_thmMgRpa7U2O-XjEEK88/edit?usp=sharing'),('Lectures','Lecture 18','Authorization & Looking ahead','Wrapping up authentication, starting and finishing authorization.','https://docs.google.com/presentation/d/191RL2L3t-JnjuOWvBfzYBJYbFP2TuAu4Fj6OOmB4A1E/edit?usp=sharing'),('Lectures','Lecture 2','The Basics','Introducing Unix/Apache/MySQL/PHP stack, getting everything installed on everyone\'s systems.','https://docs.google.com/presentation/d/1gvCq-nWWM4ggARP6liG94KJZeRBpaNoRm9CkmxbzWT0/edit?usp=sharing'),('Lectures','Lecture 3','Group Pages, Git, Apache','Presentation of initial group pages, introduction to git and apache, HTTP architecture/Markup languages.','https://docs.google.com/presentation/d/1ha7ZyL1FMxKoo43iFNoMByP00z7l9nTH7UMWcmH-4Tg/edit?usp=sharing, https://docs.google.com/presentation/d/1yqESGRC_v59VDIAUw1u3IsKPFFrqjrxQdD04I6cw6W0/edit?usp=sharing'),('Lectures','Lecture 4','HTML5','Continuing on HTTP architecture/Markup languages.','https://docs.google.com/presentation/d/1Mib4YI837526U_VMoOE6M9tBFY2DxWO6581VZuYzrEo/edit?usp=sharing'),('Lectures','Lecture 5','CSS','Markup languages continued: wrapping up, HTML, looking at an introduction to CSS.','https://docs.google.com/presentation/d/1usbhG9skLKmKpiMtA7udt36f2mzbscXT/edit?usp=sharing&ouid=101431771635793895949&rtpof=true&sd=true, https://docs.google.com/presentation/d/1Q5Ppt1l1BWllExUzAcfU7c03kAFmlT02-KKSouGZw7I/edit?usp=sharing'),('Lectures','Lecture 6','Advanced CSS','Looking at more advanced CSS and some aspects of it.','https://docs.google.com/presentation/d/1Vp_-_fqCBtwhlgT3HhqMbXx-7Piv7OPiQvblxyznPZE/edit?usp=sharing'),('Lectures','Lecture 7','JavaScript','Introduction to JavaScript/jQuery.','https://docs.google.com/presentation/d/108yq32gLsn9Dn6_pjdpku9YagWjpaDuVY86BHfCB1KM/edit?usp=sharing'),('Lectures','Lecture 8','AJAX & JSON','Wrapping up introduction to JavaScript, introducing AJAX and JSON file format.','https://docs.google.com/presentation/d/1CuKTZPsaJQs1DRgKbKHlObP_rTXv0HtAhm_wLFpEYfM/edit?usp=sharing'),('Lectures','Lecture 9','jQuery','AJAX with jQuery, and jQuery in general.','https://docs.google.com/presentation/d/1TOpBmwdZF1cUNfzcZ8t2DT237vvm5yFnqqi9mUzNBYw/edit?usp=sharing');
/*!40000 ALTER TABLE `archive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'james','$2y$10$0eYe3C2wHwpkSQBQSGaavOtNZpdAKRb9CTqoNfgVeXwAi2eLgZE/q');
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

-- Dump completed on 2021-11-23  5:10:30
