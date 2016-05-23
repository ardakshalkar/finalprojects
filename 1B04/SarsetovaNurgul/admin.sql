-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 23 2016 г., 08:05
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `admin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `adminn`
--

CREATE TABLE `adminn` (
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `adminn`
--

INSERT INTO `adminn` (`name`, `surname`) VALUES
('Nurgul', 'Sarsetova'),
('Nurgul', 'Sarsetova');

-- --------------------------------------------------------

--
-- Структура таблицы `adminnn`
--

CREATE TABLE `adminnn` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `adminnn`
--

INSERT INTO `adminnn` (`Username`, `Password`) VALUES
('Nurgul', '123456');

-- --------------------------------------------------------

--
-- Структура таблицы `pict`
--

CREATE TABLE `pict` (
  `id` int(30) NOT NULL,
  `menuitem` varchar(100) NOT NULL,
  `menupic` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `namee` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `pict`
--

INSERT INTO `pict` (`id`, `menuitem`, `menupic`, `pic2`, `namee`, `cost`) VALUES
(1, 'diamond', 'imggg/dianec.jpg', 'imggg/4link22.jpg', 'diamond necklace1', 2000),
(2, 'diamond', 'imgg/dianec.jpg', 'imggg/2link22.jpg', 'Pear Cluster Pendant', 3000),
(3, 'diamond', 'imggg/imgg/dianec.jpg', 'imggg/3link22.jpg', ' White Gold and Diamond Pendant', 2500),
(4, 'wedding', 'imggg/wdbr0.jpg', 'imggg/4link2.jpg', 'Wedding Ring In Platinum', 3000),
(5, 'wedding', 'imggg/wdbr0.jpg', 'imggg/3link33.jpg', ' Wedding Ring In 18 Carat White Gold', 2300),
(6, 'wedding', 'imggg/wdbr0.jpg', 'imggg/3link2.jpg', 'Wedding Ring In 950 Palladium', 3600),
(7, 'watch', 'imggg/1link111.jpg', 'imggg/2link111.jpg', 'Gucci YA134504 Guccissima Ladies Watch', 2540),
(8, 'watch', 'imggg/1link111.jpg', 'imggg/3link111.jpg', 'meless Bi-Colour Ladies Watch', 2500),
(9, 'watch', 'imggg/1link111.jpg', 'imggg/4link111.jpg', 'Gucci Ladies Watch', 1500);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `password`) VALUES
(0, 'liugyv', 'scvbn', 'sdfghj', '71e42a3d35170a47dc9a9d9ac1841f3f'),
(5, 'poijuyghjk', 'mjhgfghj', 'pkjiugyvbnm', 'kjhg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pict`
--
ALTER TABLE `pict`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD UNIQUE KEY `id_4` (`id`),
  ADD UNIQUE KEY `id_5` (`id`),
  ADD UNIQUE KEY `id_6` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
