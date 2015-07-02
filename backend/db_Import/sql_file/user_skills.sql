-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2015 at 12:25 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ninjasTeamRoom`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE IF NOT EXISTS `user_skills` (
  `user_id` int(11) NOT NULL,
  `skill_id` int(3) NOT NULL,
  PRIMARY KEY (`user_id`,`skill_id`),
  KEY `skill_id` (`skill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_skills`
--

INSERT INTO `user_skills` (`user_id`, `skill_id`) VALUES
(8, 0),
(59, 0),
(8, 1),
(11, 1),
(28, 1),
(40, 1),
(93, 1),
(156, 1),
(8, 2),
(28, 2),
(156, 2),
(8, 3),
(11, 3),
(28, 3),
(40, 3),
(93, 3),
(156, 3),
(7, 4),
(8, 4),
(11, 4),
(12, 4),
(40, 4),
(156, 4),
(8, 5),
(8, 6),
(9, 7),
(9, 8),
(9, 9),
(9, 10),
(7, 11),
(12, 11),
(28, 11),
(85, 11),
(156, 11),
(7, 12),
(11, 12),
(12, 12),
(40, 12),
(156, 12),
(7, 13),
(11, 13),
(8, 14),
(93, 14),
(8, 15),
(8, 17),
(8, 19),
(93, 19),
(12, 22),
(62, 22),
(12, 23),
(12, 24),
(62, 24),
(12, 25),
(12, 26),
(62, 26),
(12, 27),
(12, 28),
(70, 28),
(12, 29),
(62, 29),
(12, 30),
(12, 31),
(12, 32),
(59, 33),
(59, 34),
(59, 35),
(59, 38),
(59, 39),
(59, 40),
(59, 41),
(8, 42),
(62, 43),
(62, 44),
(7, 45),
(85, 45),
(109, 46),
(166, 47),
(166, 48);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
