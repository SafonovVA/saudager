-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 06 2018 г., 22:49
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `saudager`
--

-- --------------------------------------------------------

--
-- Структура таблицы `konkurs`
--

CREATE TABLE `konkurs` (
  `id_konkurs` int(11) NOT NULL,
  `naimenovanie_podrazd` varchar(255) NOT NULL,
  `naimenovanie_zakazchik` varchar(255) NOT NULL,
  `naimenovanie_konkurs` varchar(255) NOT NULL,
  `vydelennyi_limit` double UNSIGNED NOT NULL,
  `predusmotr_summ` double UNSIGNED NOT NULL,
  `plan_data_objavl` int(11) UNSIGNED NOT NULL,
  `plan_data_prov` int(11) UNSIGNED NOT NULL,
  `fact_data_objavl` int(11) UNSIGNED NOT NULL,
  `fact_data_prov` int(11) UNSIGNED NOT NULL,
  `data_itog` int(11) UNSIGNED NOT NULL,
  `summ_sost_lot` double UNSIGNED NOT NULL,
  `summ_nesost_lot` double UNSIGNED NOT NULL,
  `econom_sost_lot` double UNSIGNED NOT NULL,
  `sposob_odin_ist` double UNSIGNED NOT NULL,
  `summ_povtor` double UNSIGNED NOT NULL,
  `prim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `podrazdelenie`
--

CREATE TABLE `podrazdelenie` (
  `id_podrazd` int(11) NOT NULL,
  `naimenovanie_podrazd` varchar(255) NOT NULL,
  `opisanie_podrazd` varchar(255) NOT NULL,
  `vyshestoyashee_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `podrazdelenie`
--

INSERT INTO `podrazdelenie` (`id_podrazd`, `naimenovanie_podrazd`, `opisanie_podrazd`, `vyshestoyashee_id`) VALUES
(1, '2010', '', 1),
(2, '2014', '', 1),
(3, '2015', 'РУ \"Батыс\"', 1),
(4, '2016', '', 6),
(5, '2017', '', 2),
(6, '2018', '', 6),
(7, '2019', '', 3),
(8, '2020', '', 3),
(9, '2021', '', 2),
(10, '2022', '', 1),
(11, '2024', 'РУ \"Онтустiк\"', 1),
(12, '2025', '', 1),
(13, '2026', '3 комендатура охраны и обеспечения', 1),
(14, '2027', '', 1),
(15, '2029', '', 5),
(16, '2030', '', 5),
(17, '2031', '', 4),
(18, '2032', '', 4),
(19, '2033', '', 4),
(20, '2034', '', 4),
(21, '2035', '', 3),
(22, '2036', '', 5),
(23, '2037', '', 3),
(24, '2038', '', 3),
(25, '2039', 'РУ \"Солтустiк\"', 1),
(26, '2039 А', '', 4),
(27, '2040', 'РУ \"Шыгыс\"', 1),
(28, '2041', '', 3),
(29, '2086', '', 2),
(30, '2087', '', 5),
(31, '2088', '', 1),
(32, '2091', '', 2),
(33, '2098', '', 4),
(34, '2101', '', 2),
(35, '2125', '', 1),
(36, '2177', '', 1),
(37, '2201', 'РУ БОхр', 1),
(38, '2201 А', '', 6),
(39, '2201 Б', '', 6),
(40, '2201 Г', '', 6),
(41, '2456', 'ЦА ПС КНБ РК', 1),
(42, '2456 Б', '', 1),
(43, '2458', '', 1),
(44, '2466', 'АПС', 1),
(45, '2468', '', 1),
(46, '2484', '', 2),
(47, '2534', '', 2),
(48, '2535', '', 2),
(49, '2544', '', 1),
(50, '9807', '', 1),
(51, '9824', '', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `konkurs`
--
ALTER TABLE `konkurs`
  ADD PRIMARY KEY (`id_konkurs`),
  ADD KEY `naimenovanie_podrazd` (`naimenovanie_podrazd`);

--
-- Индексы таблицы `podrazdelenie`
--
ALTER TABLE `podrazdelenie`
  ADD PRIMARY KEY (`id_podrazd`),
  ADD UNIQUE KEY `naimenovanie_podrazd` (`naimenovanie_podrazd`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `konkurs`
--
ALTER TABLE `konkurs`
  MODIFY `id_konkurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `podrazdelenie`
--
ALTER TABLE `podrazdelenie`
  MODIFY `id_podrazd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `konkurs`
--
ALTER TABLE `konkurs`
  ADD CONSTRAINT `konkurs_ibfk_1` FOREIGN KEY (`naimenovanie_podrazd`) REFERENCES `podrazdelenie` (`naimenovanie_podrazd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
