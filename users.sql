-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 25 2020 г., 07:15
-- Версия сервера: 5.7.25
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `homework13`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `first_name`, `last_name`, `age`, `gender`) VALUES
(1, 'first', 'first@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Ivan', 'Pershiy', 25, 'mail'),
(2, 'firsttime', 'some@ukr.com', '202cb962ac59075b964b07152d234b70', 'Andriy', 'Greate', 33, 'male'),
(3, 'second', 'somesecond@ukr.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Pavlo', 'Upyr', 36, 'male'),
(4, 'girl', 'girl@ukr.net', '47bce5c74f589f4867dbd57e9ca9f808', 'Iryna', 'Beautiful', 25, 'female'),
(5, 'four', 'four@gmail.com', 'a87ff679a2f3e71d9181a67b7542122c', 'Los', 'Rud', 12, 'female'),
(6, 'first', 'girl@ukr.net', 'c4ca4238a0b923820dcc509a6f75849b', '123', '123', 23, 'male'),
(7, 'boy', 'some@ukr.com', 'c4ca4238a0b923820dcc509a6f75849b', 'df', 'er', 33, 'male'),
(8, 'last', 'done@geek.hub', 'e4da3b7fbbce2345d7772b0674a318d5', 'Auto', 'Lanos', 11, 'female');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
