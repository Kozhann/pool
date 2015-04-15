-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3310
-- Время создания: Апр 06 2015 г., 22:35
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `pool`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext CHARACTER SET utf8mb4 NOT NULL,
  `showhide` enum('show','hide') CHARACTER SET utf8mb4 NOT NULL,
  `class` tinytext CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `showhide`, `class`) VALUES
(1, 'Детективы', 'show', 'btn btn-info'),
(2, 'Романы', 'show', 'btn btn-info'),
(3, 'Фантастика', 'show', 'btn btn-info'),
(4, 'Проза', 'show', 'btn btn-info'),
(5, 'Образование и наука', 'show', 'btn btn-info'),
(6, 'История', 'show', 'btn btn-info'),
(7, 'Детские книги', 'show', 'btn btn-info'),
(8, 'Компьютеры и интернет', 'show', 'btn btn-info'),
(9, 'Бизнес', 'show', 'btn btn-info'),
(10, 'Здоровье', 'show', 'btn btn-info'),
(11, 'Стихи', 'show', 'btn btn-info'),
(12, 'Биографии', 'show', 'btn btn-info'),
(13, 'Ужасы', 'show', 'btn btn-info'),
(14, 'Зарубежная литература', 'show', 'btn btn-info');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
