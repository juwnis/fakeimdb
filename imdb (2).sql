-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 23 maj 2017 kl 08:33
-- Serverversion: 5.6.30
-- PHP-version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `imdb`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `firstName` varchar(23) NOT NULL,
  `lastName` varchar(23) NOT NULL,
  `birthYear` int(10) unsigned NOT NULL,
  `coverPhoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `actors`
--

INSERT INTO `actors` (`id`, `firstName`, `lastName`, `birthYear`, `coverPhoto`) VALUES
(1, 'Heath', 'Ledger', 1979, 'https://images-production.global.ssl.fastly.net/uploads/posts/image/92003/heath-ledger.jpg'),
(2, 'Morgan', 'Freeman', 1937, 'https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/02/23/16/Morgan-Freeman-London-Has-Fallen.jpg'),
(3, 'Al ', 'Pacino', 1940, 'http://the-talks.com/wp-content/uploads/2015/08/Al-Pacino-01-1.jpg'),
(4, 'Val', 'Kilmer', 1959, 'http://i1.wp.com/peopledotcom.files.wordpress.com/2017/01/val-kilmer-1.jpg?crop=0px%2C0px%2C2000px%2C1333px&resize=2000%2C1333&ssl=1'),
(5, 'Marlon', 'Brandon', 1924, 'https://mycomeup.com/wp-content/uploads/2016/04/godfather-criminal-side-view-marlon-brando.jpg'),
(6, 'Keanu', 'Reeves', 1964, 'https://s-media-cache-ak0.pinimg.com/originals/d5/ac/61/d5ac61dbef2f1970f93a237592583e4e.jpg'),
(7, 'Carrie-Ann', 'Moss', 1967, 'https://pmcdeadline2.files.wordpress.com/2010/12/carrieanne.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur `actor_movie`
--

CREATE TABLE IF NOT EXISTS `actor_movie` (
  `movie_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `actor_movie`
--

INSERT INTO `actor_movie` (`movie_id`, `actor_id`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(4, 3),
(4, 5),
(3, 6),
(3, 7);

-- --------------------------------------------------------

--
-- Tabellstruktur `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL DEFAULT '0',
  `category_name` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'action'),
(2, 'comedy'),
(3, 'thriller');

-- --------------------------------------------------------

--
-- Tabellstruktur `directors`
--

CREATE TABLE IF NOT EXISTS `directors` (
  `id` int(11) NOT NULL DEFAULT '0',
  `firstName` varchar(23) NOT NULL,
  `lastName` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `directors`
--

INSERT INTO `directors` (`id`, `firstName`, `lastName`) VALUES
(1, 'Robert De', 'Niro'),
(2, 'Christopher', 'Nolan'),
(3, 'Lilly', 'wachowski'),
(4, 'lana', 'wachowski'),
(5, 'Steven ', 'Spielberg'),
(6, 'Michael', 'Mann');

-- --------------------------------------------------------

--
-- Tabellstruktur `Movies`
--

CREATE TABLE IF NOT EXISTS `Movies` (
  `id` int(11) unsigned NOT NULL,
  `cateegory_id` int(11) unsigned NOT NULL,
  `director_id` int(11) NOT NULL,
  `title` varchar(23) NOT NULL,
  `coverPhoto` text,
  `releaseYear` int(11) DEFAULT NULL,
  `writer` varchar(23) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `Movies`
--

INSERT INTO `Movies` (`id`, `cateegory_id`, `director_id`, `title`, `coverPhoto`, `releaseYear`, `writer`) VALUES
(1, 1, 2, 'the dark night', 'http://comiconverse.com/wp-content/uploads/2016/10/The-Dark-Knight.jpg', 2008, 'Jonathan Nolan'),
(2, 0, 6, 'heat', 'https://jacksfilmstuff.files.wordpress.com/2015/12/heat_1995_1191x842_2061067408.jpg', 1996, 'Robert De'),
(3, 3, 4, 'Matrix', 'https://www.themarysue.com/wp-content/uploads/2016/04/matrix.jpg', 1999, ''),
(4, 2, 5, 'Gudfadern', 'https://mz-prod.s3.amazonaws.com/uploads/photo/file/302711/large_a611a7373ab2c5acdce327e140ab3fe5-the-godfather-1.jpg', 1972, '');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `actor_id` (`actor_id`);

--
-- Index för tabell `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `d-id` (`director_id`),
  ADD KEY `d-id_2` (`director_id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `Movies`
--
ALTER TABLE `Movies`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
