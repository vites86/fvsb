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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `units`
--

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;
INSERT INTO `units` VALUES 
(1,'kv','Київська область','Пристінський Олександр Васильович','МСУ з ВСБ','(097) 405 31 93','fvsb.kiev@ukr.net','fvsb.kiev.ua'),
(2,'tnp','Тернопільська область','Шамрай Евген Валентинович','КМСУ з боксу','(067) 350 40 10','fvsb.ter@gmail.com','fvsb.ter@gmail.com'),
(3,'chk','Черкаська область','Анатолiй Науменко','','(050) 313 93 79, (093) 315 48 90','wjka.fska@gmail.com','fska.com.ua'),
(5,'lv','Львівська область','Артемюк Сергій','','0937249544','art100seruj@ukr.net','https://www.facebook.com/groups/1651790441798988/'), 
(6,'pl','Полтавська область','Бариш Олег Миколайович','МСУ з ВСБ','(093) 828 46 89','oleg.barush@gmail.com','http://www.voin.in.ua'), 
(7,'dnr','Дніпропетровська область','Капітонов Андрій','МСМК','(097) 352 48 76','andruha-boom@mail.ru','andruha-boom@mail.ru'), 
(8,'krg','Кропивницька область','Ярошевський Андрій','','(067) 151 96 65','kempovsb@gmail.com','kempovsb@gmail.com'), 
(9,'khs','Херсонська область','Бутенко Генадій Анатолійович','','(098) 600 00 82','skifrb@yandex.ua','https://www.facebook.com/groups/100275970398188'), 
(10,'lg','Луганська область','Клюкало Геннадій Григорійович','','(066) 828 56 71','mr.klyukalo@mail.ru','mr.klyukalo@mail.ru'),
(11,'zht','Житомирська область','Ратошнюк Віктор Іванович','','(098) 420 34 98','viktor.ratoshnyuk@ukr.net','viktor.ratoshnyuk@ukr.net'),
(12,'sm','Сумська область','Лата Олег','','(050) 463 13 45','latabig@ukr.net','latabig@ukr.net'),

update `units` set short_name = 'zht' where id = 11;
update `units` set short_name = 'sm' where id = 12;

update `units` set head = 'Клюкало Геннадій Григорійович' where id = 10;
update `units` set head = 'Ратошнюк Віктор Іванович' where id = 11;
update `units` set head = 'Лата Олег' where id = 12;



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

-- Dump completed on 2017-05-29 12:10:25
