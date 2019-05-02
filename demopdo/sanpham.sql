-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2019 at 03:40 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanpham`
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dienthoai`
--

INSERT INTO `dienthoai` (`id`, `ten`, `hieu`, `gia`, `urlanh`) VALUES
(4, 'Samsung', 'SumsungS9', 7000000, 'SamsungS9+.png'),
(3, 'Samsung', 'SumsungA8', 5000000, 'SamsungA8.png'),
(6, 'Samsung', 'SumsungJ7Prime', 9000000, 'SamsungJ7Prime.png'),
(7, 'Samsung', 'SumsungNote8', 12000000, 'SamsungNote8.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
