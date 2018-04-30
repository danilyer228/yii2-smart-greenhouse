-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 30 2018 г., 12:08
-- Версия сервера: 5.7.22-0ubuntu0.16.04.1
-- Версия PHP: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `greenhouse`
--

-- --------------------------------------------------------

--
-- Структура таблицы `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `command_on` varchar(2) DEFAULT NULL,
  `command_off` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `device`
--

INSERT INTO `device` (`id`, `command_on`, `command_off`) VALUES
(1, '2', '1'),
(2, '4', '3'),
(3, '6', '5'),
(4, '8', '7');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1524835991),
('m130524_201442_init', 1524835997),
('m180305_110630_create_temp_table', 1524835997),
('m180328_120357_create_device_table', 1524835997),
('m180328_121405_create_todo_table', 1524835997),
('m180420_133916_create_moisture_table', 1524835997);

-- --------------------------------------------------------

--
-- Структура таблицы `moisture`
--

CREATE TABLE `moisture` (
  `id` int(11) NOT NULL,
  `moisure` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `moisture`
--

INSERT INTO `moisture` (`id`, `moisure`, `time`) VALUES
(1, 11, '2018-04-27 14:01:27'),
(2, 13, '2018-04-27 14:12:47'),
(3, 12, '2018-04-27 14:20:47'),
(4, 11, '2018-04-27 14:21:48'),
(5, 11, '2018-04-27 14:28:25'),
(6, 14, '2018-04-27 14:30:13'),
(7, 14, '2018-04-27 14:31:02'),
(8, 10, '2018-04-27 14:32:18'),
(9, 15, '2018-04-27 14:34:41'),
(10, 15, '2018-04-27 14:35:08'),
(11, 11, '2018-04-27 14:36:31'),
(12, 13, '2018-04-27 14:37:16'),
(13, 12, '2018-04-27 14:38:03'),
(14, 11, '2018-04-27 14:38:20'),
(15, 14, '2018-04-27 14:38:33'),
(16, 12, '2018-04-27 14:39:57'),
(17, 10, '2018-04-27 14:41:05'),
(18, 12, '2018-04-27 14:41:18'),
(19, 13, '2018-04-27 14:42:16'),
(20, 11, '2018-04-27 14:43:10'),
(21, 15, '2018-04-30 08:50:09'),
(22, 11, '2018-04-30 08:52:06');

-- --------------------------------------------------------

--
-- Структура таблицы `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `temp` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `temp`
--

INSERT INTO `temp` (`id`, `temp`, `time`) VALUES
(1, 23, '2018-04-27 14:01:27'),
(2, 24, '2018-04-27 14:12:47'),
(3, 1, '2018-04-27 14:39:57'),
(4, 23, '2018-04-27 14:43:10'),
(5, 0, '2018-04-30 08:50:09'),
(6, 24, '2018-04-30 08:52:06');

-- --------------------------------------------------------

--
-- Структура таблицы `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `task` varchar(255) CHARACTER SET utf8 NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `device_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `todo`
--

INSERT INTO `todo` (`id`, `task`, `from`, `to`, `device_id`) VALUES
(1, 'Полив', '09:06:00', '09:07:00', 1),
(2, 'Утепление', '09:00:00', '09:03:00', 2),
(3, 'Свет1', '09:00:00', '09:01:00', 3),
(4, 'Свет2', '09:00:00', '09:02:00', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `moisture`
--
ALTER TABLE `moisture`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-todo-device_id` (`device_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `moisture`
--
ALTER TABLE `moisture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `fk-todo-device_id` FOREIGN KEY (`device_id`) REFERENCES `device` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
