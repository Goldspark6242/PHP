-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2022 at 10:15 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thangaraj`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

DROP TABLE IF EXISTS `crud`;
CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) COLLATE utf8_croatian_ci DEFAULT NULL,
  `Email` varchar(30) COLLATE utf8_croatian_ci DEFAULT NULL,
  `Phone` varchar(15) COLLATE utf8_croatian_ci DEFAULT NULL,
  `Batch` varchar(15) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `Name`, `Email`, `Phone`, `Batch`) VALUES
(2, 'Yasarsa', 'yasar@gmail.com', '958525', '4'),
(3, 'gold', 'gold@gmail.com', '9585', '1'),
(4, 'fturtuy', 'sdfsadfsa', 'tryrtyrty', 'trytry'),
(24, 'ewrew', 'werwer', 'werwer', 'werwer'),
(19, 'fhgfh', 'fghfgh', 'fghfgh', 'fghfgh'),
(20, 'fhgfh', 'fghfgh', 'fghfgh', 'fghfgh'),
(21, 'fhgfh', 'fghfgh', 'fghfgh', 'fghfgh'),
(22, 'yasar', 'fghfgh', '9898989898', '6th'),
(23, 'karthi', 'asdfg', '1234546', '412345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
