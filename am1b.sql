-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 22 nov 2013 om 09:59
-- Serverversie: 5.5.24-log
-- PHP-versie: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1b`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstname` varchar(20) NOT NULL,
  `infix` varchar(10) DEFAULT NULL,
  `surname` varchar(20) NOT NULL,
  `city` varchar(150) NOT NULL,
  `postalcode` varchar(6) NOT NULL,
  `street` varchar(100) NOT NULL,
  `house_number` int(2) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_name` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `game_type` varchar(35) NOT NULL,
  `favo_game` varchar(60) NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`firstname`, `infix`, `surname`, `city`, `postalcode`, `street`, `house_number`, `dob`, `sex`, `email`, `user_name`, `password`, `game_type`, `favo_game`, `marital_status`, `position`) VALUES
('rutger', 'van', 'Teutem', 'baarn', '3741WR', 'Esdoornlaan', 11, '1997-05-07', 'male', 'rutgerskateboard@gmail.com', 'rutger438', '19645', 'fps', 'nahhh', '1', 'customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
