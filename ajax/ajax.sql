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
-- Table structure for table `ajax`
--

DROP TABLE IF EXISTS `ajax`;
CREATE TABLE IF NOT EXISTS `ajax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `name`, `email`, `phone`) VALUES
(176, 'fghj', 'wertyui', '32456'),
(178, 'aaa', 'aaaa', '0000'),
(179, 'ergjh', 'dfg@wedfg.srdfg', '2345'),
(180, 'ertyhujk', 'tryrty@gmail.com', '2345'),
(175, 'asdf', 'asdfg12345', '45678'),
(173, '2345r', '234', '7890546'),
(174, 'ersdtfgh', 'wrest', '2222');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
