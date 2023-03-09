-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 10 2023 г., 02:00
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
-- База данных: `warehouse`
--

-- --------------------------------------------------------

--
-- Структура таблицы `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int NOT NULL,
  `number` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `product` varchar(100) NOT NULL,
  `count` int NOT NULL,
  `price` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `deliveries`
--

INSERT INTO `deliveries` (`id`, `number`, `product`, `count`, `price`, `date`) VALUES
(4, '1', 'Колбаса', 300, 5000, '2021-01-01'),
(6, 't-500', 'Пармезан', 10, 6000, '2021-01-02'),
(7, '12-TP-777', 'Левый носок', 100, 500, '2021-01-13'),
(8, '12-TP-778', 'Левый носок', 50, 300, '2021-01-14'),
(9, '12-TP-779', 'Левый носок', 77, 539, '2021-01-20'),
(10, '12-TP-877', 'Левый носок', 32, 176, '2021-01-30'),
(11, '12-TP-977', 'Левый носок', 94, 554, '2021-02-01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
