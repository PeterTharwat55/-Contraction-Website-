-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2020 at 10:23 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction`
--
CREATE DATABASE IF NOT EXISTS `construction` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `construction`;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `client` varchar(30) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `progress` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `client`, `year`, `progress`) VALUES
(1, 'starbucks', 'shae3', 2016, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`) VALUES
('PeterTharwat', '123456', 'Peter'),
('', '123', 'Peter'),
('PeterTharwat', '123', 'Peter'),
('X', '123', 'X');
--
-- Database: `mypeter`
--
CREATE DATABASE IF NOT EXISTS `mypeter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mypeter`;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `client` varchar(30) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `progress` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `client`, `year`, `progress`) VALUES
(5, 'Starbucks - Crystal Tower, Kuwait', 'M.H Alshaya Co. W.L.L', 2016, 'progress'),
(4, 'Debenhams - Avenues Mall, Kuwait', 'M.H Alshaya Co. W.L.L', 2017, 'Completed'),
(6, 'Costa Coffee - Airport, Kuwait', 'Al Ghanim Industries, L.L.C.', 2014, 'Completed'),
(7, 'Ooredo Rebranding - Avenues, Kuwait', 'Wataniya Telecom', 2013, 'Completed'),
(8, 'Babel Al Corniche - Kuwait', 'M.H Alshaya Co. W.L.L', 2018, 'progress'),
(9, 'Private Chalet - Julaia , Kuwait', 'Sheikh Salem Al Sabah', 2018, 'Progress'),
(10, 'Bouchon Bakery-Aveues Mall PH-3, Kuwait', 'M.H Alshaya Co. W.L.L', 2017, 'Progress'),
(16, 'Vodafone', 'Caro', 2014, 'completed'),
(15, 'starbucks`', 'shae3', 2015, 'progress');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(40) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `user`, `password`) VALUES
('Peter', 'peter', '123456'),
('Peter', 'peters', 'p123'),
('peter', 'p', '123'),
('peter', '', '');
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
