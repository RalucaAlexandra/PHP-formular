-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: aug. 29, 2020 la 04:55 PM
-- Versiune server: 5.7.26
-- Versiune PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `retete`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `preparat`
--

DROP TABLE IF EXISTS `preparat`;
CREATE TABLE IF NOT EXISTS `preparat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `denumire2` varchar(150) NOT NULL,
  `gramaj` int(55) NOT NULL,
  `descriere2` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `preparat`
--

INSERT INTO `preparat` (`id`, `denumire2`, `gramaj`, `descriere2`) VALUES
(37, 'preparat 1', 25, 'descriere1'),
(38, 'preparat 2', 400, 'descriere2'),
(39, 'preparat 2', 20, 'descriere2'),
(40, 'preparat 2', 15, 'descriere2'),
(41, 'preparat 3', 12, 'descriere 3'),
(42, 'preparat 3', 260, 'descriere 3'),
(43, 'preparat 3', 200, 'descriere 3'),
(44, 'preparat 4', 400, 'descriere 4'),
(45, 'preparat 4', 5, 'descriere 4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
