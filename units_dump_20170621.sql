-- MySQL dump 10.13  Distrib 5.5.54, for Linux (x86_64)
--
-- Host: localhost    Database: fvsb
-- ------------------------------------------------------
-- Server version	5.5.54

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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `meta_k` varchar(255) DEFAULT NULL,
  `meta_d` varchar(255) DEFAULT NULL,
  `text_` text,
  `date_` datetime DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `fb_id` int(11) NOT NULL,
  `tw_id` int(11) NOT NULL,
  `place` varchar(500) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES 
(1,'Кубок України імені генерала Кульчицького, ІІІ ранг','Кубок України імені генерала Кульчицького, ІІІ ранг','Кубок України імені генерала Кульчицького, ІІІ ранг','Кубок України імені генерала Кульчицького, ІІІ ранг','Кубок України імені генерала Кульчицького, ІІІ ранг','2017-10-13 00:00:00','1.png',0,0,'м.Харків',1),
-- (2,'Методичні збори для інструкторів','Методичні збори для інструкторів','Методичні збори для інструкторів','Методичні збори для інструкторів','2017-10-26 00:00:00','2.png',0,0,'м.Харків',2),
(3,'Чемпіонат світу (дорослі, юніори, юнаки)','Чемпіонат світу (дорослі, юніори, юнаки)','Чемпіонат світу (дорослі, юніори, юнаки)','Чемпіонат світу (дорослі, юніори, юнаки)','Чемпіонат світу (дорослі, юніори, юнаки)','2017-11-24 00:00:00','3.png',0,0,'м.Харків',1),
(4,'Технічна поясова атестація','Технічна поясова атестація','Технічна поясова атестація','Технічна поясова атестація','Технічна поясова атестація','2017-12-23 00:00:00','4.png',0,0,'Регіони',4);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `meta_t` varchar(255) DEFAULT NULL,
  `meta_d` varchar(255) DEFAULT NULL,
  `text_` text,
  `date_` datetime DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Dubrovin','Чемпіонат України 2017','12-14 травня 2017 у м. Харкові пройшов Чемпіонат України','Чемпіонат України ВСБ','Чемпіонат України ВСБ','12-14 травня 2017 у м. Харкові пройшов Чемпіонат України','2017-05-12 00:00:00','1.png',1),(2,'Dubrovin','Чемпіонат світу 2016','З 18 по 20 листопада 2016 року в місті Харкові відбувся 11-й Чемпіонат Світу','Чемпіонат Світу ВСБ','Чемпіонат Світу ВСБ','З 18 по 20 листопада 2016 року в місті Харкові відбувся 11-й Чемпіонат Світу','2016-11-18 00:00:00','2.png',1),(3,'Dubrovin','Національний семінар 2016','28 серпня 2016 року у м.Харькові було проведено Національний семінар для Інструкторів по ВСБ','Національний семінар 2016','Національний семінар 2016','28 серпня 2016 року у м.Харькові було проведено Національний семінар для Інструкторів по ВСБ','2016-08-28 00:00:00','3.png',3),(4,'Dubrovin','Кубок України 2016','8 жовтня 2016 в м. Одеса відбувся Кубок України пам`яті Героя України Генерал-майора Кульчицького Сергія Петровича','Кубок України 2016','Кубок України 2016','8 жовтня 2016 в м. Одеса відбувся Кубок України пам`яті Героя України Генерал-майора Кульчицького Сергія Петровича','2016-10-08 00:00:00','4.png',1),(5,'Dubrovin','Національні літні збори 2016','В Херсонській області смт.Лазурне було провдено 10-денні національні збори','Національні літні збори 2016','Національні літні збори 2016','В Херсонській області смт.Лазурне було провдено 10-денні національні збори','2016-06-19 00:00:00','5.png',2),(6,'Dubrovin','Чемпіонат України 2016','13-15 травня 2016 у м. Харкові пройшов Чемпіонат України','Чемпіонат України ВСБ','Чемпіонат України ВСБ','13-15 травня 2016 у м. Харкові пройшов Чемпіонат України','2016-05-13 00:00:00','6.png',1),(7,'Dubrovin','Кубок України 2015','16 жовтня 2015 в м. Одеса відбувся Кубок України ','Кубок України 2016','Кубок України 2016','16 жовтня 2015 в м. Одеса відбувся Кубок України','2015-10-16 00:00:00','7.png',1),(8,'Dubrovin','Кубок України 2014','21 грудня 2014 в м. Черкаси відбувся Кубок України ','Кубок України 2016','Кубок України 2016','21 грудня 2014 в м. Одеса відбувся Кубок України','2014-12-21 00:00:00','8.png',1),(9,'Адміністратор','Технічні поясові атестації 2017','В регіональних підрозділах Федерації пройшли технічні поясові атестації спортсменів','Технічні поясові атестації 2017','Технічні поясові атестації 2017','В регіональних підрозділах Федерації пройшли технічні поясові атестації спортсменів на учнівські та інструкторські пояси.','2017-06-03 00:00:00','9.png',4);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_category`
--

DROP TABLE IF EXISTS `news_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_category`
--

LOCK TABLES `news_category` WRITE;
/*!40000 ALTER TABLE `news_category` DISABLE KEYS */;
INSERT INTO `news_category` VALUES (1,'html','Змагання'),(2,'joomla','Збори'),(3,'wordpress','Семінари'),(4,'drupal','Атестація');
/*!40000 ALTER TABLE `news_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `units` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `short_name` text NOT NULL,
  `region` text NOT NULL,
  `head` text NOT NULL,
  `sport_rank` text NOT NULL,
  `telephone` text NOT NULL,
  `email` text NOT NULL,
  `web_adress` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `units`
--

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;
INSERT INTO `units` VALUES (1,'kv','Київська область','Пристінський Олександр Васильович','МСУ з ВСБ','(097) 405 31 93','fvsb.kiev@ukr.net','fvsb.kiev.ua'),(2,'tnp','Тернопільська область','Шамрай Евген Валентинович','КМСУ з боксу','(067) 350 40 10','fvsb.ter@gmail.com','fvsb.ter@gmail.com'),(3,'chk','Черкаська область','Анатолiй Науменко','','(050) 313 93 79, (093) 315 48 90','wjka.fska@gmail.com','fska.com.ua'),(4,'khm','Хмельницька область','Гончарук Тетяна Миколаївна','МСУ','(093) 497 22 10','t.gonharuk13@gmail.com','t.gonharuk13@gmail.com'),(5,'lv','Львівська область','Артемюк Сергій','','0937249544','art100seruj@ukr.net','https://www.facebook.com/groups/1651790441798988/'),(6,'pl','Полтавська область','Бариш Олег Миколайович','МСУ з ВСБ','(093) 828 46 89','oleg.barush@gmail.com','http://www.voin.in.ua'),(7,'dnr','Дніпропетровська область','Капітонов Андрій','МСМК','(097) 352 48 76','andruha-boom@mail.ru','andruha-boom@mail.ru'),(8,'krg','Кропивницька область','Ярошевський Андрій','','(067) 151 96 65','kempovsb@gmail.com','kempovsb@gmail.com'),(9,'khs','Херсонська область','Бутенко Генадій Анатолійович','','(098) 600 00 82','skifrb@yandex.ua','https://www.facebook.com/groups/100275970398188'),(10,'lg','Луганська область','Клюкало Геннадій Григорійович','','(066) 828 56 71','mr.klyukalo@mail.ru','mr.klyukalo@mail.ru'),(11,'zht','Житомирська область','Ратошнюк Віктор Іванович','КМСУ','(098) 420 34 98','viktor.ratoshnyuk@ukr.net','viktor.ratoshnyuk@ukr.net'),(12,'sm','Сумська область','Лата Олег','','(050) 463 13 45','latabig@ukr.net','latabig@ukr.net'),(13,'od','Одеська область','Судець Сергій Володимирович','','(093) 289 83 27','sergej-sudec@ukr.net','http://msac.od.ua'),(14,'zp','Запорізька область','Грiмов Сергій Анатолійович','','(066) 422 75 27','grimov-sergeyy@rambler.ua','grimov-sergeyy@rambler.ua'),(15,'khv','Харківська область','Рижковець Андрій Мирославович','МСУ, ЗТУ','(093) 054 71 91','rishkovets.a.m@gmail.com','rishkovets.a.m@gmail.com');
/*!40000 ALTER TABLE `units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'fvsb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-21  9:50:41
