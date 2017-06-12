-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Час створення: Чрв 09 2017 р., 16:46
-- Версія сервера: 5.6.22-log
-- Версія PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `fvsb`
--

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE IF NOT EXISTS `news` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `author`, `title`, `description`, `meta_t`, `meta_d`, `text_`, `date_`, `img`, `category_id`) VALUES
(1, 'Dubrovin', 'Чемпіонат України 2017', '12-14 травня 2017 у м. Харкові пройшов Чемпіонат України', 'Чемпіонат України ВСБ', 'Чемпіонат України ВСБ', '12-14 травня 2017 у м. Харкові пройшов Чемпіонат України', '2017-05-12 00:00:00', '1.png', 1),
(2, 'Dubrovin', 'Чемпіонат світу 2016', 'З 18 по 20 листопада 2016 року в місті Харкові відбувся 11-й Чемпіонат Світу', 'Чемпіонат Світу ВСБ', 'Чемпіонат Світу ВСБ', 'З 18 по 20 листопада 2016 року в місті Харкові відбувся 11-й Чемпіонат Світу', '2017-11-18 00:00:00', '2.png', 1),
(3, 'Dubrovin', 'Національний семінар 2016', '28 серпня 2016 року у м.Харькові було проведено Національний семінар для Інструкторів по ВСБ', 'Національний семінар 2016', 'Національний семінар 2016', '28 серпня 2016 року у м.Харькові було проведено Національний семінар для Інструкторів по ВСБ', '2016-08-28 00:00:00', '3.png', 3),
(4, 'Dubrovin', 'Кубок України 2016', '8 жовтня 2016 в м. Одеса відбувся Кубок України пам`яті Героя України Генерал-майора Кульчицького Сергія Петровича', 'Кубок України 2016', 'Кубок України 2016', '8 жовтня 2016 в м. Одеса відбувся Кубок України пам`яті Героя України Генерал-майора Кульчицького Сергія Петровича', '2016-10-08 00:00:00', '4.png', 1),
(5, 'Dubrovin', 'Національні літні збори 2016', 'В Херсонській області смт.Лазурне було провдено 10-денні національні збори', 'Національні літні збори 2016', 'Національні літні збори 2016', 'В Херсонській області смт.Лазурне було провдено 10-денні національні збори', '2016-06-19 00:00:00', '5.png', 2);

-- --------------------------------------------------------

--
-- Структура таблиці `news_category`
--

CREATE TABLE IF NOT EXISTS `news_category` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `attribute` varchar(25) NOT NULL,  `name` varchar(25) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп даних таблиці `news_category`
--

INSERT INTO `news_category` (`id`, `attribute`, `name`) VALUES(1, 'html', 'Змагання'),(2, 'joomla', 'Збори'),(3, 'wordpress', 'Семінари');

-- --------------------------------------------------------

--
-- Структура таблиці `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `short_name` text NOT NULL,
  `region` text NOT NULL,
  `head` text NOT NULL,
  `sport_rank` text NOT NULL,
  `telephone` text NOT NULL,
  `email` text NOT NULL,
  `web_adress` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп даних таблиці `units`
--

INSERT INTO `units` (`id`, `short_name`, `region`, `head`, `sport_rank`, `telephone`, `email`, `web_adress`) VALUES
(1, 'kv', 'Київська область', 'Пристінський Олександр Васильович', 'МСУ з ВСБ', '(097) 405 31 93', 'fvsb.kiev@ukr.net', 'fvsb.kiev.ua'),
(2, 'tnp', 'Тернопільська область', 'Шамрай Евген Валентинович', 'КМСУ з боксу', '(067) 350 40 10', 'fvsb.ter@gmail.com', 'fvsb.ter@gmail.com'),
(3, 'chk', 'Черкаська область', 'Анатолiй Науменко', '', '(050) 313 93 79, (093) 315 48 90', 'wjka.fska@gmail.com', 'fska.com.ua'),
(4, 'khm', 'Хмельницька область', 'Гончарук Тетяна Миколаївна', 'МСУ', '(093) 497 22 10', 't.gonharuk13@gmail.com', 't.gonharuk13@gmail.com'),
(5, 'lv', 'Львівська область', 'Артемюк Сергій', '', '0937249544', 'art100seruj@ukr.net', 'https://www.facebook.com/groups/1651790441798988/'),
(6, 'pl', 'Полтавська область', 'Бариш Олег Миколайович', 'МСУ з ВСБ', '(093) 828 46 89', 'oleg.barush@gmail.com', 'http://www.voin.in.ua'),
(7, 'dnr', 'Дніпропетровська область', 'Капітонов Андрій', 'МСМК', '(097) 352 48 76', 'andruha-boom@mail.ru', 'andruha-boom@mail.ru'),
(8, 'krg', 'Кропивницька область', 'Ярошевський Андрій', '', '(067) 151 96 65', 'kempovsb@gmail.com', 'kempovsb@gmail.com'),
(9, 'khs', 'Херсонська область', 'Бутенко Генадій Анатолійович', '', '(098) 600 00 82', 'skifrb@yandex.ua', 'https://www.facebook.com/groups/100275970398188'),
(10, 'lg', 'Луганська область', 'Клюкало Геннадій Григорійович', '', '(066) 828 56 71', 'mr.klyukalo@mail.ru', 'mr.klyukalo@mail.ru'),
(11, 'zht', 'Житомирська область', 'Ратошнюк Віктор Іванович', 'КМСУ', '(098) 420 34 98', 'viktor.ratoshnyuk@ukr.net', 'viktor.ratoshnyuk@ukr.net'),
(12, 'sm', 'Сумська область', 'Лата Олег', '', '(050) 463 13 45', 'latabig@ukr.net', 'latabig@ukr.net');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
