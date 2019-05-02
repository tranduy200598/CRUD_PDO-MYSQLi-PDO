-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 18, 2019 at 08:50 AM
-- Server version: 5.7.23
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `dienthoai`
--

DROP TABLE IF EXISTS `dienthoai`;
CREATE TABLE IF NOT EXISTS `dienthoai` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `urlanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dienthoai`
--

INSERT INTO `dienthoai` (`id`, `ten`, `hieu`, `gia`, `urlanh`) VALUES
(3, 'Oppo', 'OppoF7', 6000000, 'OppoF7.png'),
(6, 'Oppo', 'OppoA71K', 11000000, 'OppoA71K.png'),
(7, 'Oppo', 'OppoA71', 8000000, 'OppoA71.png'),
(13, 'OppoF3', 'Oppo', 4500000, 'OppoF3.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
