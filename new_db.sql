-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 01 2023 г., 14:02
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `protocol_table`
--

CREATE TABLE `protocol_table` (
  `id` int NOT NULL,
  `data` date NOT NULL,
  `worker` varchar(255) NOT NULL,
  `indication` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `protocol_table`
--

INSERT INTO `protocol_table` (`id`, `data`, `worker`, `indication`) VALUES
(1, '2023-06-02', 'Иванов Иван Иванович', 'Нет'),
(2, '2023-06-01', 'Петров Николай Сергеевич', 'Да'),
(3, '2023-05-18', 'Краснов Антон Федорович', 'Да'),
(4, '2023-05-31', 'Киреев Владимир Антонович', 'Нет'),
(5, '2023-06-23', 'Киреев Владимир Семенович', 'Да'),
(26, '2023-06-09', 'Иванов Иван Иванович', 'Нет'),
(27, '2023-06-09', 'Иванов Иван Иванович', 'Нет'),
(28, '2023-06-02', 'Иванов Иван Иванович', 'Нет'),
(29, '2023-06-02', 'Иванов Иван Иванович', 'Нет'),
(30, '2023-10-27', 'Киреев Павел Антоааанович', 'Да'),
(31, '2023-10-27', 'Киреев Павел Антоааанович', 'Да'),
(34, '2023-10-19', 'Киреев Владимир Семеновичdsf', 'Да');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`) VALUES
(1, 'fsedfsd@mail.ru', 'николас', ''),
(3, 'fsedfsd@maios.cid', 'николасggggg', 'ffff');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `protocol_table`
--
ALTER TABLE `protocol_table`
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
-- AUTO_INCREMENT для таблицы `protocol_table`
--
ALTER TABLE `protocol_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
