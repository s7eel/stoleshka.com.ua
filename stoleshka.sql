-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 18 2017 г., 18:26
-- Версия сервера: 5.7.18-0ubuntu0.16.04.1
-- Версия PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stoleshka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_descr` text NOT NULL,
  `img_link` text NOT NULL,
  `full_descr` longtext NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `short_descr`, `img_link`, `full_descr`, `created_at`) VALUES
(1, 'Blog post with image', 'Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum ', 'news.jpg', 'Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum ', '2017-07-14'),
(2, 'Easy Way Of Improving Ski', 'Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum ', 'news1.jpg', 'Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum ', '2017-07-15'),
(3, 'The Perfect Architecture', 'Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum ', 'news2.jpg', 'Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum Lorem ipsum dolor sit amet, ne eoser lorem quodsi option et albucius delio voluptaria cum ', '2017-07-16');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `city`, `phone`, `email`, `message`) VALUES
(2, 'sadfsdaf', '+3(324)2342342', 'Ивано-Франковск', 's7eell@gmail.com', 'asdfasdfasdfasdfsdfasfasdfasfdasdf'),
(3, 'Roman', '+3(234)2343242', 'Запорожье', 's7eell@gmail.com', ' $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full); $full = $this->db->real_escape_string($full);');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
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
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
