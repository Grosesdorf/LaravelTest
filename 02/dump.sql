-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.41-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица laravelAttractGr.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы laravelAttractGr.comments: ~0 rows (приблизительно)
DELETE FROM `comments`;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `comment`, `id_user`, `id_news`, `active`, `created_at`, `updated_at`) VALUES
	(11, 'Very cool comment 01', 10, 1, 0, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(12, 'Very cool comment 02', 11, 1, 0, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(13, 'Very cool comment 03', 10, 1, 0, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(14, 'Very cool comment 04', 11, 1, 0, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(15, 'Very cool comment 05', 12, 1, 0, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(16, 'Very cool comment 06', 12, 2, 0, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(17, 'Very cool comment 07', 10, 2, 0, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(18, 'Very cool comment 08', 12, 4, 0, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(19, 'Very cool comment 09', 11, 5, 0, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(20, 'Very cool comment 10', 10, 5, 0, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(21, 'First!!!', 10, 35, 0, '2016-03-18 01:50:53', '2016-03-18 01:50:53');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


-- Дамп структуры для таблица laravelAttractGr.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы laravelAttractGr.migrations: ~3 rows (приблизительно)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2016_03_16_214918_create_users_table', 1),
	('2016_03_16_214945_create_news_table', 2),
	('2016_03_16_221353_create_comments_table', 3),
	('2016_03_17_213606_add_field_active_comments_table', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Дамп структуры для таблица laravelAttractGr.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы laravelAttractGr.news: ~0 rows (приблизительно)
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `text`, `id_user`, `created_at`, `updated_at`) VALUES
	(31, 'News 01', 'Very important news 01', 10, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(32, 'News 02', 'Very important news 02', 10, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(33, 'News 03', 'Very important news 03', 11, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(34, 'News 04', 'Very important news 04', 11, '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(35, 'News 05', 'Very important news 05', 12, '2016-03-17 21:14:13', '2016-03-17 21:14:13');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


-- Дамп структуры для таблица laravelAttractGr.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы laravelAttractGr.users: ~3 rows (приблизительно)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `created_at`, `updated_at`) VALUES
	(34, 'User01', 'Xy', 'user01gmail.com', '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(35, 'User02', 'Zs', 'user02gmail.com', '2016-03-17 21:14:13', '2016-03-17 21:14:13'),
	(36, 'User03', 'Us', 'user03gmail.com', '2016-03-17 21:14:13', '2016-03-17 21:14:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
