-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 26 2019 г., 21:38
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

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(15) NOT NULL,
  `url` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL,
  `count` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `url`, `name`, `count`) VALUES
(1, 'img/main-slide01.png', 'Strawberry', 13),
(2, 'img/main-slide02.png', 'Choco', 1),
(3, 'img/main-slide03.png', 'Vanilla', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `fio` varchar(75) NOT NULL,
  `login` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата первой регистрации'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `login`, `password`, `date`) VALUES
(1, 'AHR', 'Alex', '33e701c033bf73fa94156289b733a385', '2019-05-26 21:27:27'),
(2, 'Aleksei Khabirov', 'alexkhab85', 'c92445434eae6c6aa3f168020a4f552f', '2019-05-26 21:28:11'),
(3, 'Anastasia Khabirova', 'AnastasKhab', '33e701c033bf73fa94156289b733a385', '2019-05-26 21:29:13');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
