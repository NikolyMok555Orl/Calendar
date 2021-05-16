-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 16 2021 г., 13:11
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_calendar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `note`
--

CREATE TABLE `note` (
  `id_note` int(11) NOT NULL,
  `dateNote` date NOT NULL,
  `header` varchar(40) NOT NULL COMMENT 'Заголовок',
  `text` varchar(255) NOT NULL COMMENT 'Основной текст'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `note`
--

INSERT INTO `note` (`id_note`, `dateNote`, `header`, `text`) VALUES
(1, '2021-05-13', 'Капец', 'пвыпы'),
(2, '2021-05-15', '555', '332'),
(3, '2021-05-30', 'Капец', '43'),
(4, '2021-05-30', 'Капец', '43'),
(5, '2021-05-30', 'Капец', '43'),
(6, '2021-05-30', 'Капец', '43'),
(7, '2021-05-30', 'Капец', '43'),
(8, '2021-05-30', 'Капец', '43'),
(9, '2021-05-30', 'Капец', '43'),
(10, '2021-05-30', 'Капец', '43'),
(11, '2021-05-30', 'Капец', '43');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
