-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 17 2018 г., 23:44
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fvsb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `access_tokens`
--

CREATE TABLE `access_tokens` (
  `id` int(11) NOT NULL,
  `soc_net` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `access_tokens`
--

INSERT INTO `access_tokens` (`id`, `soc_net`, `user_id`, `value`) VALUES
(1, 'fb', 2, 'CAAOOZBEvmT5sBAHeXRckU7FmgUlCKxQKg2aqGij9FaN0DJWhVTBboz74tGdwfk8coVCKUju8LE3ri9QpTsEhWw3ytn80DGUT5qbMllEdjJXZCXnW0pwPC6c6TicfgdwkGaJHRZCMq40ZA9MRymghNWuSiJtaADeAbt2ZAaUk6S8I7wRGvBEN7WCaEwZBAFTuE3YIAesayUJQZDZD'),
(2, 'fb', 1, 'CAAOOZBEvmT5sBALusgZCtEfrh25s5BVD4gMlXXuMVIy9VJQQqZB8Rdklt5qbPdgp1z1sQqfJvgkOAMshhkgvtAJsiomkafwFDj4qaYYhxt7aDOOLolj0ZAjfMluRKuSGkW30KE8OpNimI66M4wOr1vwsVg8HeHpjmVARLwYbXiG8ZCPTOZCEWZBHFmnQxKUM9ZCLx9WufECDvAZDZD');

-- --------------------------------------------------------

--
-- Структура таблицы `admin_entries`
--

CREATE TABLE `admin_entries` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_connect` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin_entries`
--

INSERT INTO `admin_entries` (`id`, `user_id`, `date_connect`) VALUES
(42, 2, '2018-01-15 16:59:47'),
(43, 2, '2018-01-16 21:44:50'),
(44, 2, '2018-01-16 23:32:36');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `meta_k` varchar(255) DEFAULT NULL,
  `meta_d` varchar(255) DEFAULT NULL,
  `text_` text,
  `date_` datetime DEFAULT NULL,
  `time_span` int(11) NOT NULL,
  `start_time` text NOT NULL,
  `finish_time` text NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `fb_id` int(11) NOT NULL,
  `tw_id` int(11) NOT NULL,
  `place` varchar(500) NOT NULL,
  `adress` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `meta_k`, `meta_d`, `text_`, `date_`, `time_span`, `start_time`, `finish_time`, `img`, `fb_id`, `tw_id`, `place`, `adress`, `cat_id`) VALUES
(1, 'Кубок України імені генерала Кульчицького, ІІІ ранг', 'Кубок України імені генерала Кульчицького, ІІІ ранг', 'Кубок України імені генерала Кульчицького, ІІІ ранг', 'Кубок України імені генерала Кульчицького, ІІІ ранг', '<div style=\'width:100%;text-align:center\'><img style=\'width:100%;\' src=\'images/events/kubok2017_1.jpg\'/></div>\n<div style=\'width:100%;text-align:center\'><img style=\'width:100%;\' src=\'images/events/kubok2017_2.png\'/></div>\n<div style=\'width:100%;text-align:center\'><img style=\'width:100%;\' src=\'images/events/kubok2017_3.jpg\'/></div>\n<div style=\'width:100%;text-align:center\'><img style=\'width:100%;\' src=\'images/events/kubok2017_4.jpg\'/></div>', '2017-10-13 00:00:00', 3, '09.00', '19.00', 'images/events/1.png', 0, 0, 'м.Харків', 'м. Харкiв, комунальний заклад «Школа вищої спортивної майстерності» (вул. Динамівська, 5-А)', 1),
(3, 'Чемпіонат світу (дорослі, юніори, юнаки)', 'Чемпіонат світу (дорослі, юніори, юнаки)', 'Чемпіонат світу (дорослі, юніори, юнаки)', 'Чемпіонат світу (дорослі, юніори, юнаки)', 'Чемпіонат світу (дорослі, юніори, юнаки)\r\n<hr>\r\n<div style=\'width:100%;text-align:center\'>\r\n<img src=\'images/events/3_1.png\' >\r\n</div>\r\n<hr>\r\n<a href=\'files/World2017.zip\'>Скачать регламент</div>', '2017-11-24 00:00:00', 3, '09.00', '23.00', '3.png', 0, 0, 'м.Харків', 'м.Харків, СК ХТЗ', 1),
(4, 'Всеукраїнська технічна поясова атестація', 'Всеукраїнська технічна поясова атестація', 'Всеукраїнська  Технічна поясова атестація', 'Всеукраїнська  Технічна поясова атестація', 'Всеукраїнська технічна поясова атестація', '2017-12-16 00:00:00', 2, '2017-12-16', '2017-12-17', '4.png', 0, 0, 'м.Харків', 'м.Харків', 4),
(5, 'Міжнародний суддівський семінар', 'Міжнародний та Національний суддівський семінар', 'Міжнародний суддівський семінар', 'Міжнародний суддівський семінар', '<div style=\'width:100%;text-align:center\'><img style=\'width:100%;\' src=\'images/events/seminar_suddi2017.png\'/></div>', '2017-08-25 00:00:00', 1, '09.00', '18.00', '5.png', 0, 0, 'м.Харків', 'м. Харкiв, ЗОШ 117 (вул. Шекспіра 20)', 4),
(6, 'Всеукраїнський інструкторський семінар', 'Всеукраїнський інструкторський семінар', 'Всеукраїнський інструкторський семінар', 'Всеукраїнський інструкторський семінар', '<div style=\'width:100%;text-align:center\'><img style=\'width:100%;\' src=\'images/events/seminar_inst2017.png\'/></div>', '2017-08-26 00:00:00', 1, '09.00', '15.30', '6.png', 0, 0, 'м.Харків', 'м. Харкiв, СК «ХНУПС» (вул. Динамівська, 3-А)', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `meta_k` varchar(255) DEFAULT NULL,
  `meta_d` varchar(255) DEFAULT NULL,
  `text_` text,
  `date_` datetime DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `author`, `title`, `description`, `meta_k`, `meta_d`, `text_`, `date_`, `img`, `category_id`) VALUES
(1, 'Dubrovin', 'Чемпіонат України 2017', '12-14 травня 2017 у м. Харкові пройшов Чемпіонат України', 'Чемпіонат України ВСБ', 'Чемпіонат України ВСБ', '12-14 травня 2017 у м. Харкові пройшов Чемпіонат України', '2017-05-12 00:00:00', '1.png', 1),
(2, 'Dubrovin', 'Чемпіонат світу 2016', 'З 18 по 20 листопада 2016 року в місті Харкові відбувся 10-й Чемпіонат Світу', 'Чемпіонат Світу ВСБ', 'Чемпіонат Світу ВСБ', 'З 18 по 20 листопада 2016 року в місті Харкові відбувся 10-й Чемпіонат Світу', '2016-11-18 00:00:00', '2.png', 1),
(3, 'Dubrovin', 'Національний семінар 2016', '28 серпня 2016 року у м.Харькові було проведено Національний семінар для Інструкторів по ВСБ', 'Національний семінар 2016', 'Національний семінар 2016', '28 серпня 2016 року у м.Харькові було проведено Національний семінар для Інструкторів по ВСБ', '2016-08-28 00:00:00', '3.png', 3),
(4, 'Dubrovin', 'Кубок України 2016', '8 жовтня 2016 в м. Одеса відбувся Кубок України пам`яті Героя України Генерал-майора Кульчицького Сергія Петровича', 'Кубок України 2016', 'Кубок України 2016', '8 жовтня 2016 в м. Одеса відбувся Кубок України пам`яті Героя України Генерал-майора Кульчицького Сергія Петровича', '2016-10-08 00:00:00', '4.png', 1),
(5, 'Dubrovin', 'Національні літні збори 2016', 'В Херсонській області смт.Лазурне було провдено 10-денні національні збори', 'Національні літні збори 2016', 'Національні літні збори 2016', 'В Херсонській області смт.Лазурне було провдено 10-денні національні збори', '2016-06-19 00:00:00', '5.png', 2),
(10, 'Admin', 'Кубок України 2017', '13-15 жовтня 2017 року у м. Харкові відбувся Кубок України з військово-спортивних багатоборств імені Героя України генерала Кульчицького.', 'Кубок України з військово-спортивних багатоборств 2017', 'Кубок України з військово-спортивних багатоборств 2017', '<p>13-15 жовтня 2017 року у м. Харкові відбувся Кубок України з військово-спортивних багатоборств імені Героя України генерала Кульчицького.<p>\r\n<p>Змагання проходили на базі «Школи вищої спортивної майстерності» (вул. Динамівська, 5-А).<p>\r\n<p>До участі у змаганнях було допущено 11 збірних команд областей (всього 103 спортсменa).<p>\r\n<p>Поєдинки виявились дуже цікавими і напруженими. До останнього поєдинку зберігалась інтрига та боротьба за призові командні місця.<p>\r\n<p>У підсумку:</p>\r\n<ul>\r\n<li>1-ше командне місце: збірна команда Київської області (тренер Пристінський О.В.)</li>\r\n<li>2-ге командне місце: збірна команда Кіровограднської області (тренер Ярошевський А.В. )</li>\r\n<li>3-тє командне місце: збірна команда Харківської області (тренер - Безверхий А.В. )</li>\r\n</ul>\r\n\r\n<p>Вітаємо переможців і учасників змагань!</p>\r\n\r\n<p>\"У всіх битвах важливо перемогти. Але навіть поразка може навчити багато чому, \r\nщо має бути використано для перемоги в майбутніх боях\", - (Масутацу Ояма).</p>\r\n<hr>\r\n<div>\r\n<b>Історична довідка</b>\r\n\r\n<p>29 травня 2014 року в зоні бойових дій, у місті Слов\'янськ Донецької області загинув генерал-майор Сергій Кульчицький.</p>\r\n\r\n<p>Вертоліт Мі-8, на якому знаходився Сергій Петрович, збили проросійські терористи неподалік гори Карачун. Це був його четвертий виліт на Карачун і останній день перед відпусткою. Тоді загинуло 12 чоловік – шість військовослужбовців Нацгвардії України, включаючи екіпаж гелікоптеру, та шість – представників спецпідрозділу МВС України.</p>\r\n\r\n<p>За свою службу на війні Багатьом недосвідченим бійцям генерал врятував життя. За це його називали другим батьком і янголом-охоронцем.</p>\r\n</div>\r\n<div style=\'width:100%; text-align:center\'>\r\n<h2>Відео<h2>\r\n<div style=\"position:relative;height:0;padding-bottom:56.25%\"><iframe src=\"https://www.youtube.com/embed/NICGMjnVaMI?ecver=2\" width=\"640\" height=\"360\" frameborder=\"0\" style=\"position:absolute;width:100%;height:100%;left:0\" allowfullscreen></iframe></div>\r\n\r\n\r\n</div>', '2017-10-12 00:00:00', '10.png', 1),
(11, 'Dubrovin', 'Чемпіонат світу 2017', 'З 24 по 26 листопада 2017 року в місті Харкові відбувся 11-й Чемпіонат Світу', 'Чемпіонат Світу,всб,msac', 'Чемпіонат Світу 2017', '<p>З 24 по 26 листопада 2017 року в місті Харкові на базі спорткомплексів ХТЗ та ХУПСу пройшов 11-й Чемпіонат Світу з військово-спортивних багатоборств.</p>\r\n<p>Організаторами змагань виступили громадська організація \"Всеукраїнська федерація військово-спортивних багатоборств\" та громадська спілка «Міжнародна організація Військово - спортивних багатоборств».</p>\r\n<p>Участь у змаганнях взяли 535 спортсменів із 19 країн світу.</p>\r\n\r\n<p>Церемонію відкриття розпочав Президент Міжнародної спілки «Військово - спортивних багатоборств», майстер спорту України, заслужений тренер України, майстер 10-го дану Зайцев Сергій Васильович, котрий привітав учасників змагань і вручив пам`ятні відзнаки почесним гостям змагань та почесні вищі дани керівникам закордонних підрозділів.</p>\r\n\r\n<p>До слова був запрошений Начальник Управління у справах  молоді та спорту Харківської обласної державної адміністрації та Президент Міжнародної федераціїї CH-1 Мехди, який вручив чорний пояс 8 дан Зайцеву Сергію Васильовичу.</p>\r\n\r\n\r\n<p>Протягом усього чемпіонату спортсмени демонстрували високий рівень підготовки, хорошу техніку і сильну жагу до перемог.</p>\r\n\r\n<p>У загальному заліку:</p>\r\n<ul>\r\n<li>1-ше командне місце: збірна України\r\n<li>2-ге командне місце: збірна Ірану\r\n<li>3-тє командне місце: збірна Білорусії\r\n</ul>\r\n\r\n<p>На урочистій церемонії закриття відбулося нагородження переможців та створення спільного фото чемпіонів.</p>\r\n\r\n<p>Вітаємо спортсменів!</p>', '2017-11-27 00:00:00', '11.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `attribute` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_category`
--

INSERT INTO `news_category` (`id`, `attribute`, `name`) VALUES
(1, 'html', 'Змагання'),
(2, 'joomla', 'Збори'),
(3, 'wordpress', 'Семінари'),
(4, 'drupal', 'Атестація');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `title` text NOT NULL,
  `src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `text`, `title`, `src`) VALUES
(1, 'Головна', '<div style=\"text-align: center;width:100%;\">\r\n                     <h1>Ласкаво просимо на сторінку Адміністратора!</h1>\r\n                     <img style=\"align:center; height:550px;\" src=\"assets/img/webtools.jpg\"/>\r\n                </div><br><br>', 'Головна', 'index.php'),
(2, 'Помилка', '<div style=\"width:100%;text-align:center;\">\r\n                     <h1>Упс! Помилочка! </h1>\r\n                     <img src=\"assets/img/error.jpg\" style=\"height:500px;\"/><br><br>\r\n                     <label style=\"width:100%; text-align: center\">                      \r\n                       <span style=\"color:red;\"><?php echo isset($_GET[\"error\"]) ? $_GET[\"error\"] : \"\"; ?></span>                       \r\n                     </label> \r\n              </div>        \r\n                       <br><br><br><br><br><br>', 'Помилка', 'error.php'),
(3, 'Додати новину', ' <form action=\"handler.php\" method=\"post\" enctype=\"multipart/form-data\">\r\n                              <table>\r\n                              <tr>\r\n                              <td>Назва</td>\r\n                              <td><textarea name=\"title\" id=\"title\" cols=\"100\" rows=\"2\" required></textarea></td>\r\n                              </tr>\r\n                              <tr>\r\n                              <td>Короткий опис</td>\r\n                              <td><textarea name=\"description\" id=\"description\"  cols=\"100\" rows=\"2\" required></textarea></td>\r\n                              </tr>\r\n                              <tr>\r\n                              <td>Ключові слова</td>\r\n                              <td><textarea name=\"meta_k\" id=\"meta_k\" cols=\"100\" rows=\"2\" required></textarea></td>\r\n                              </tr><center> <tr>\r\n                              <td>Ключовий опис</td>\r\n                              <td><textarea name=\"meta_d\" id=\"meta_d\" cols=\"100\" rows=\"2\" required></textarea></td>\r\n                              </tr></center>\r\n                              <tr>\r\n                              <td>Автор</td>\r\n                              <td><textarea name=\"author\" id=\"author\" cols=\"100\" rows=\"2\" required></textarea></td>\r\n                              </tr>\r\n                              <tr>\r\n                              <td>Текст статьи</td>\r\n                              <td><textarea name=\"text\" id=\"text\" cols=\"100\" rows=\"20\" required></textarea></td>\r\n                              </tr>\r\n                               <tr>\r\n                              <td>Картинка (370x300)&nbsp;&nbsp;&nbsp;&nbsp;<br>формат .png </td>\r\n                              <td> <input type=\'file\' name=\'myfile\' id=\'myfile\' required></td>\r\n                              </tr>\r\n                              <tr>\r\n                              <td><br><br>\r\n                                <input type=\"hidden\" name=\"handler\"  id=\"handler\" value=\"add_news\"/>\r\n                                <input type=\"submit\" value=\"Додати\"><br><br></td>\r\n                              </tr>\r\n                              </table>                              \r\n               </form><br><br>', 'Додавання новин', 'add_news.php'),
(4, 'Видалити новину', '<form action=\"handler.php\" method=\"post\"> \r\n                   <input type=\"hidden\" name=\"handler\"  id=\"handler\" value=\"del_news\"/>\r\n                   <?php \r\n                   $result = mysql_query(\"SELECT title, id, img FROM news\",$db);\r\n                   $myrow = mysql_fetch_array($result);\r\n                   do \r\n                   {\r\n                   printf (\"<p><input name=\'id\' type=\'radio\' value=\'%s\'>\r\n                            <lable>%s</lable></p>\r\n                            <input name=\'img_src\' type=\'hidden\' value=\'%s\'>\",\r\n                            $myrow[\"id\"],$myrow[\"title\"],$myrow[\"img\"]);\r\n                   }\r\n                   while ($myrow = mysql_fetch_array($result));\r\n                   ?>\r\n                   \r\n                   <p><input name=\"submit\" type=\"submit\" value=\"Видалити\"></p>\r\n                   </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>', 'Видалення новин', 'del_news.php'),
(5, 'Редагувати новину', 'бла бла', 'Редагування новин', 'edit_news.php'),
(6, 'Додати фотографії в новину', 'бла бла', 'Додавання фотографій в галерею новин', 'add_newsPhoto.php'),
(7, 'Видалити фотографії з галереї новини', 'Видалити фотографії з новини', 'Видалення фото з галереї новин', 'del_newsPhoto.php'),
(8, 'Додати подію', '', 'Додавання статей', 'add_article.php'),
(9, 'Редагувати подію', '', 'Редагування статті', 'edit_articles.php'),
(10, 'Видалити подію', '', 'Видалення статті', 'del_articles.php'),
(11, 'Додати спортсмена', 'одати спортсмена', 'Додати спортсмена', 'add_sportsman.php'),
(12, 'Редагування спортсмена', 'Редагувати спортсмена', 'Редагувати спортсмена', 'edit_desc.php'),
(13, 'Видалити видалити спортсмена', 'Видалення спортсмена', 'Видалення спортсмена', 'del_desc.php');

-- --------------------------------------------------------

--
-- Структура таблицы `paticiepents`
--

CREATE TABLE `paticiepents` (
  `id` int(5) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `secondName` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `unitId` int(11) NOT NULL,
  `roleId` varchar(255) NOT NULL,
  `sport_rankId` int(11) DEFAULT NULL,
  `suddiv_rankId` int(11) DEFAULT NULL,
  `coachId` int(11) DEFAULT NULL,
  `ztu` tinyint(1) DEFAULT NULL,
  `coach` tinyint(1) DEFAULT NULL,
  `description` text,
  `telephone` text NOT NULL,
  `identCode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `paticiepents`
--

INSERT INTO `paticiepents` (`id`, `img`, `firstName`, `lastName`, `secondName`, `weight`, `unitId`, `roleId`, `sport_rankId`, `suddiv_rankId`, `coachId`, `ztu`, `coach`, `description`, `telephone`, `identCode`) VALUES
(1, 'images/paticiepents/1.png', 'Дубровін', 'Віктор', 'Михайлович', '70', 1, '3', 3, 2, NULL, 0, 1, '', '0938298791', '3153123754'),
(2, 'images/paticiepents/2.png', 'Дубровін', 'Віктор', 'Михайлович', '70', 1, '3', 3, 2, NULL, 0, 1, '', '0938298791', '3153123754');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(150) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `role`, `description`) VALUES
(1, 'administrators', 'Администратор'),
(2, 'developer', 'Разработчик'),
(3, 'user', 'Пользователь'),
(4, 'manager', 'секретарь');

-- --------------------------------------------------------

--
-- Структура таблицы `sport_ranks`
--

CREATE TABLE `sport_ranks` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sport_ranks`
--

INSERT INTO `sport_ranks` (`id`, `name`) VALUES
(1, 'МСУ'),
(2, 'КМСУ'),
(3, 'МСУМК'),
(4, 'ЗМСУ'),
(5, '1 р.'),
(6, '2 р.'),
(7, '3 р.'),
(8, '1 д.р.'),
(9, '2 д.р.'),
(10, '3 д.р.');

-- --------------------------------------------------------

--
-- Структура таблицы `suddivRanks`
--

CREATE TABLE `suddivRanks` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `suddivRanks`
--

INSERT INTO `suddivRanks` (`id`, `name`) VALUES
(1, 'суддя I категорії'),
(2, 'суддя II категорії'),
(3, 'суддя Національної категорії'),
(4, 'суддя Міжнародної категорії');

-- --------------------------------------------------------

--
-- Структура таблицы `units`
--

CREATE TABLE `units` (
  `id` int(4) NOT NULL,
  `short_name` text NOT NULL,
  `region` text NOT NULL,
  `head` text NOT NULL,
  `sport_rank` text NOT NULL,
  `telephone` text NOT NULL,
  `email` text NOT NULL,
  `web_adress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `units`
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
(9, 'khs', 'Херсонська область', 'Бутенко Генадій Анатолійович', '', '(098) 600 00 82', 'skskif66@gmail.com', 'https://www.facebook.com/groups/100275970398188'),
(10, 'lg', 'Луганська область', 'Клюкало Геннадій Григорійович', '', '(066) 828 56 71', 'mr.klyukalo@mail.ru', 'mr.klyukalo@mail.ru'),
(11, 'zht', 'Житомирська область', 'Ратошнюк Віктор Іванович', 'КМСУ', '(098) 420 34 98', 'viktor.ratoshnyuk@ukr.net', 'viktor.ratoshnyuk@ukr.net'),
(12, 'sm', 'Сумська область', 'Лата Олег', '', '(050) 463 13 45', 'latabig@ukr.net', 'latabig@ukr.net'),
(13, 'od', 'Одеська область', 'Судець Сергій Володимирович', '', '(093) 289 83 27', 'sergej-sudec@ukr.net', 'http://msac.od.ua'),
(14, 'zp', 'Запорізька область', 'Грімов Сергій Анатолійович', '', '(066) 422 75 27', 'grimov-sergeyy@rambler.ua', 'grimov-sergeyy@rambler.ua'),
(15, 'khv', 'Харківська область', 'Рижковець Андрій Мирославович', 'МСУ, ЗТУ', '(093) 054 71 91', 'rishkovets.a.m@gmail.com', 'rishkovets.a.m@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `userlist`
--

CREATE TABLE `userlist` (
  `id` int(11) NOT NULL,
  `login` varchar(250) DEFAULT NULL,
  `pass` varchar(150) DEFAULT NULL,
  `rus_name` varchar(250) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `userlist`
--

INSERT INTO `userlist` (`id`, `login`, `pass`, `rus_name`, `role_id`) VALUES
(1, 'zaitcev', 'c13cfb625439e6b06ef425c5b3097e12', 'Сергій Зайцев', 1),
(2, 'dubrovin', '4e874b09b46597d4f8204b6b4def03a7', 'Віктор Дубровін', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `access_tokens`
--
ALTER TABLE `access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admin_entries`
--
ALTER TABLE `admin_entries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `paticiepents`
--
ALTER TABLE `paticiepents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sport_ranks`
--
ALTER TABLE `sport_ranks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `suddivRanks`
--
ALTER TABLE `suddivRanks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userlist`
--
ALTER TABLE `userlist`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `access_tokens`
--
ALTER TABLE `access_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `admin_entries`
--
ALTER TABLE `admin_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `paticiepents`
--
ALTER TABLE `paticiepents`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `sport_ranks`
--
ALTER TABLE `sport_ranks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `suddivRanks`
--
ALTER TABLE `suddivRanks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `units`
--
ALTER TABLE `units`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
