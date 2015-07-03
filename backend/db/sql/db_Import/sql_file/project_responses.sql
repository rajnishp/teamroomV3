-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2015 at 12:45 PM
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
-- Dumping data for table `response_project`
--

INSERT INTO `project_responses` (`user_id`, `project_id`, `id`, `blob_id`, `status`, `stmt`, `creation_time`) VALUES
(11, 3, 2, 0, 1, 'everyone should check progress of this project,', '2014-12-11 17:52:31'),
(8, 3, 3, 0, 5, 'dude when this project will come', '2014-12-17 11:11:51'),
(8, 3, 4, 0, 5, 'some one add deepti in the project', '2014-12-17 11:12:31'),
(8, 3, 5, 0, 5, 'we can also talk to Rajesh', '2014-12-17 11:12:52'),
(8, 3, 6, 0, 5, 'one can also add him to', '2014-12-17 11:13:00'),
(8, 3, 7, 0, 5, 'what do you people says', '2014-12-17 11:13:07'),
(11, 3, 8, 0, 3, 'comment check for email...', '2015-02-13 12:37:11'),
(44, 5, 9, 0, 1, 'congrats for your successe', '2015-01-06 07:48:23'),
(44, 5, 10, 0, 1, 'congrats for your successe', '2015-01-06 07:48:23'),
(7, 22, 11, 0, 5, 'gusef erare', '2015-01-14 19:07:10'),
(8, 22, 12, 0, 5, 'rahul:  Introducing a powerful online platform to collaborate with like minded people and change the world, solving one problem at a time.\nCollap offers a wide range of tools to identify a challenge and assemble your own team to collaborate and crack it. Hereâ€™s to the the joy of collaborative problem solving!', '2015-01-14 19:08:15'),
(7, 25, 13, 0, 1, 'SELECT timestamp, COUNT( * ) AS Cnt FROM user_access_records WHERE timestamp <a>gt;= now( ) - INTERVAL 3 DAY GROUP BY HOUR( timestamp ) , DAY( timestamp ) ORDER BY timestamp', '2015-01-16 09:25:16'),
(7, 22, 14, 0, 5, 'pull the code', '2015-01-19 07:00:41'),
(9, 25, 15, 0, 1, 'Guys, can you widen the Projects tile on the left. It<r>s too narrow and the text is barely visible. Very inconvenient. ', '2015-01-20 03:56:32'),
(9, 28, 16, 0, 5, 'Rahul, there?', '2015-01-20 03:57:24'),
(9, 28, 17, 0, 5, 'This information about the Smart Public Advertisement System is insufficient. ', '2015-01-20 03:57:59'),
(9, 28, 18, 0, 5, 'Tell me. ', '2015-01-20 03:58:02'),
(9, 28, 19, 0, 5, 'Do you wish to make a Provisional Application or a Complete Specification?', '2015-01-20 03:58:37'),
(9, 28, 20, 0, 5, 'Provisional is the application we did last time. It gives you a 1 year window to finish the development process.', '2015-01-20 03:59:23'),
(9, 28, 21, 0, 5, 'Decide and let me know. ', '2015-01-20 03:59:59'),
(9, 28, 22, 0, 1, 'This is the disclosure for Provisional Application or a Complete Specification? ', '2015-01-20 04:00:37'),
(9, 28, 23, 0, 1, 'Disclosure insufficient for Complete Specification. ', '2015-01-20 04:01:14'),
(8, 28, 24, 0, 1, 'dude check outgoings. This is introductioln of the concept', '2015-01-20 11:50:32'),
(9, 28, 25, 0, 1, 'You wanna file the complete specification or provisional?', '2015-01-22 09:41:07'),
(9, 25, 26, 0, 1, 'Guys, the wider Project tiles looks and feels better. Good job! Can we also extend the length of the tile? A little more spacious could make a difference to the feel. ', '2015-01-22 10:05:01'),
(9, 25, 27, 0, 1, 'Despite the widening of the tile, the content is not displayed. I wanted to share the snap of the same, but that functionality is not supported in the comments. Please address the same. ', '2015-01-22 10:09:28'),
(8, 28, 28, 0, 1, 'complete specification', '2015-01-22 11:28:57'),
(7, 25, 29, 0, 1, 'There is outgoings option below the title. Check on that, There you can participate in the outgoings of project....', '2015-01-22 15:23:51'),
(9, 28, 30, 0, 1, 'Ok', '2015-01-23 07:34:02'),
(11, 3, 31, 155, 5, ' ', '2015-01-27 06:24:16'),
(109, 35, 32, 0, 5, 'test', '2015-01-28 14:12:53'),
(8, 28, 33, 0, 5, 'complete specification dude', '2015-01-28 14:21:00'),
(8, 28, 34, 0, 5, 'I will write detailed write up soon...', '2015-01-28 14:21:17'),
(8, 57, 35, 0, 5, 'Hi neeraj can you share you yesterday calculations', '2015-02-01 09:16:38'),
(11, 61, 36, 0, 5, 'hello everyone welcome to this new project..', '2015-02-05 12:13:01'),
(11, 61, 37, 0, 3, 'If anybody interested in this project, Kindly contact me ', '2015-02-05 13:30:38'),
(180, 13, 38, 0, 5, 'Hi Everyone,', '2015-04-23 20:31:04'),
(180, 13, 39, 0, 5, ' <br/> <s>I am new here. I reside in Bangalore. How will I be able to contribute?', '2015-04-23 20:31:29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
