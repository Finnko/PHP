-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 21 2019 г., 12:36
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gbphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL COMMENT 'Ссылка на картинку',
  `name` varchar(100) NOT NULL COMMENT 'Название товара',
  `price` int(11) NOT NULL COMMENT 'Цена товара'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `url`, `name`, `price`) VALUES
(1, 'img/cat-item01.jpg', 'Mango T-shirt', 52),
(2, 'img/cat-item02.jpg', 'Mango T-shirt', 62),
(3, 'img/cat-item04.jpg', 'Mango Blazer', 102),
(4, 'img/cat-item05.jpg', 'Mango T-shirt', 72),
(5, 'img/cat-item06.jpg', 'Mango T-shirt', 82),
(6, 'img/cat-item07.jpg', 'Mango T-shirt', 92),
(7, 'img/cat-item08.jpg', 'Mango Sweater', 112),
(8, 'img/cat-item09.jpg', 'Mango Sweater', 142),
(9, 'img/else-style01.jpg', 'Mango Sweater', 42);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
