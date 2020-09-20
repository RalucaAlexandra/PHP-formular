-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: aug. 29, 2020 la 04:57 PM
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
-- Structură tabel pentru tabel `afisare`
--

DROP TABLE IF EXISTS `afisare`;
CREATE TABLE IF NOT EXISTS `afisare` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `preparat` varchar(150) NOT NULL,
  `ingredientsicantitate` varchar(150) NOT NULL,
  `gramaj` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `afisare`
--

INSERT INTO `afisare` (`id`, `preparat`, `ingredientsicantitate`, `gramaj`) VALUES
(62, 'preparat 1', 'ingredient 1 ', 25),
(64, 'preparat 2', 'ingredient 3 ', 20),
(63, 'preparat 2', 'ingredient 2 ', 400),
(68, 'preparat 3', 'ingredient 4 ', 200),
(67, 'preparat 3', 'ingredient 3 ', 260),
(66, 'preparat 3', 'ingredient 1 ', 12),
(70, 'preparat 4', 'ingredient 3 ', 5),
(69, 'preparat 4', 'ingredient 2 ', 400);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
