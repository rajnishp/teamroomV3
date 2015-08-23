-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2015 at 09:32 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ninjasTeamRoom2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blobs`
--

CREATE TABLE IF NOT EXISTS `blobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stmt` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE IF NOT EXISTS `challenges` (
  `id` int(17) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `project_id` int(16) NOT NULL DEFAULT '0',
  `blob_id` int(11) NOT NULL DEFAULT '0',
  `org_id` int(5) NOT NULL DEFAULT '1',
  `title` varchar(100) NOT NULL,
  `stmt` varchar(1000) NOT NULL,
  `type` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `likes` int(8) DEFAULT NULL,
  `dislikes` int(8) DEFAULT NULL,
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `challenge_ownership`
--

CREATE TABLE IF NOT EXISTS `challenge_ownership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `challenge_id` int(17) NOT NULL,
  `ownership_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  `submission_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=61 ;

-- --------------------------------------------------------

--
-- Table structure for table `challenge_responses`
--

CREATE TABLE IF NOT EXISTS `challenge_responses` (
  `id` int(17) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `challenge_id` int(16) NOT NULL,
  `blob_id` int(11) NOT NULL DEFAULT '0',
  `stmt` varchar(1000) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=89 ;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(17) NOT NULL AUTO_INCREMENT,
  `from` int(15) NOT NULL,
  `to` int(15) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_creater` int(15) NOT NULL,
  `event_type` int(2) NOT NULL,
  `p_c_id` int(16) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3380 ;

-- --------------------------------------------------------

--
-- Table structure for table `investment_info`
--

CREATE TABLE IF NOT EXISTS `investment_info` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `project_id` int(16) NOT NULL,
  `investment` int(15) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `involve_in`
--

CREATE TABLE IF NOT EXISTS `involve_in` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `p_c_id` int(16) NOT NULL,
  `event_type` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`p_c_id`,`event_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5758 ;

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `id` int(17) NOT NULL AUTO_INCREMENT,
  `u_p_c_id` int(17) NOT NULL,
  `type` int(1) NOT NULL,
  `words` varchar(300) NOT NULL,
  `relevence` int(2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `known_peoples`
--

CREATE TABLE IF NOT EXISTS `known_peoples` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `requesting_id` int(15) NOT NULL,
  `knowing_id` int(15) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `requesting_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_action_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `requesting_id` (`requesting_id`,`knowing_id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=59 ;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `challenge_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `challenge_id_2` (`challenge_id`,`user_id`),
  KEY `challenge_id` (`challenge_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=120 ;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `notice_url` varchar(500) NOT NULL,
  `user_id` int(15) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `organisations`
--

CREATE TABLE IF NOT EXISTS `organisations` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `plan_id` int(5) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE IF NOT EXISTS `professions` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `blob_id` int(11) NOT NULL DEFAULT '0',
  `project_title` varchar(100) NOT NULL,
  `stmt` varchar(1000) NOT NULL,
  `type` enum('Classified','Private','Public','Deleted') NOT NULL,
  `org_id` int(5) NOT NULL DEFAULT '1',
  `order` int(1) NOT NULL DEFAULT '0',
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_value` int(15) NOT NULL,
  `fund_needed` int(15) NOT NULL,
  `last_update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=72 ;

-- --------------------------------------------------------

--
-- Table structure for table `project_responses`
--

CREATE TABLE IF NOT EXISTS `project_responses` (
  `id` int(17) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `project_id` int(16) NOT NULL,
  `blob_id` int(11) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL,
  `stmt` varchar(1000) NOT NULL,
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=40 ;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE IF NOT EXISTS `reminders` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `remind_to` int(15) NOT NULL,
  `message` varchar(300) NOT NULL,
  `display_on_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL DEFAULT '0',
  `creation_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=49 ;

-- --------------------------------------------------------

--
-- Table structure for table `spems`
--

CREATE TABLE IF NOT EXISTS `spems` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `spemmed_id` int(17) NOT NULL,
  `type` int(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE IF NOT EXISTS `targets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `type` int(1) NOT NULL DEFAULT '1',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `project_id` int(16) NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `team_owner` int(15) NOT NULL DEFAULT '0',
  `team_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_status` int(1) NOT NULL DEFAULT '1',
  `leave_team` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`project_id`,`team_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=442 ;

-- --------------------------------------------------------

--
-- Table structure for table `team_tasks`
--

CREATE TABLE IF NOT EXISTS `team_tasks` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `project_id` int(16) NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `challenge_id` int(16) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_id` (`project_id`,`team_name`,`challenge_id`),
  UNIQUE KEY `project_id_2` (`project_id`,`team_name`,`challenge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_access_aid`
--

CREATE TABLE IF NOT EXISTS `user_access_aid` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `hash_key` varchar(40) NOT NULL,
  `status` int(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`hash_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=178 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_external_profiles`
--

CREATE TABLE IF NOT EXISTS `user_external_profiles` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `ext_url` varchar(80) NOT NULL,
  `ext_username` varchar(30) NOT NULL,
  `ext_email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(16) NOT NULL DEFAULT '1',
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rank` enum('Dabbling','Aspiring','Novice','Passable','Experienced','Competent','Proficient','Skilled','Excellent','Professional','Accomplished','Great','Veteran','Revered','Master','Grand Master','Legendary','NINJA') NOT NULL,
  `user_type` enum('collaborator','fundsearcher','collaboratorFundsearcher','investor','collaboratorInvester','fundsearcherInvestor','collaboratorInvestorFundsearcher') NOT NULL,
  `org_id` int(5) NOT NULL DEFAULT '1',
  `capital` int(15) NOT NULL,
  `page_access` int(2) NOT NULL,
  `working_org_name` varchar(50) NOT NULL,
  `living_town` varchar(40) NOT NULL,
  `about_user` varchar(350) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=200 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_professions`
--

CREATE TABLE IF NOT EXISTS `user_professions` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `profession_id` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`profession_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE IF NOT EXISTS `user_skills` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `skill_id` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`skill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=79 ;


--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int( 16 ) NOT NULL AUTO_INCREMENT ,
  `user_id` int( 15 ) NOT NULL ,
  `institute` varchar( 100 ) NOT NULL ,
  `degree` varchar( 100 ) NOT NULL ,
  `branch` varchar( 100 ) NOT NULL ,
  `from` YEAR( 4 ) NOT NULL ,
  `to` YEAR( 4 ) NOT NULL ,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `last_update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY ( `id` )
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT =1;


--
-- Table structure for table `job_preference`
--

CREATE TABLE IF NOT EXISTS `job_preference` (
  `id` int( 16 ) NOT NULL AUTO_INCREMENT ,
  `user_id` int( 15 ) NOT NULL ,
  `current_ctc` varchar( 100 ) NOT NULL ,
  `expected_ctc` varchar( 100 ) NOT NULL ,
  `notice_period` varchar( 10 ) NOT NULL ,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `last_update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY ( `id` ),
  UNIQUE KEY user_id (`user_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT =1;

--
-- Table structure for table `working_history`
--

CREATE TABLE IF NOT EXISTS `working_history` (
  `id` int( 16 ) NOT NULL AUTO_INCREMENT ,
  `user_id` int( 15 ) NOT NULL ,
  `company_name` varchar( 100 ) NOT NULL ,
  `designation` varchar( 100 ) NOT NULL ,
  `from` date NOT NULL ,
  `to` date NOT NULL ,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `last_update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY ( `id` )
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT =1;

--
-- Table structure for table `working_locations`
--

CREATE TABLE IF NOT EXISTS `working_locations` (
  `id` int( 4 ) NOT NULL AUTO_INCREMENT ,
  `location_name` varchar( 100 ) NOT NULL ,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY ( `id`, `location_name` )
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT =1;

--
-- Table structure for table `technical_strength`
--

CREATE TABLE IF NOT EXISTS `technical_strength` (
  `id` int( 16 ) NOT NULL AUTO_INCREMENT ,
  `user_id` int( 15 ) NOT NULL ,
  `strength` varchar( 500 ) NOT NULL ,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `last_update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY ( `id` )
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT =1;

ALTER TABLE projects 
  ADD technical_skills varchar( 500 ) ,
  ADD my_role varchar( 500 ) ,
  ADD team_size int( 2 ) ,
  ADD duration_from date,
  ADD duration_to date ;

/* Alter table job_prefenrennce , delete location_id, its ambigious */

ALTER TABLE `job_preference` DROP `location_id` ;
ALTER TABLE `job_preference` ADD UNIQUE (`user_id`);

--
-- Table structure for table `user_locations`
--

CREATE TABLE IF NOT EXISTS `user_locations` (
  `id` int( 16 ) NOT NULL AUTO_INCREMENT ,
  `user_id` int( 15 ) NOT NULL ,
  `location_id` varchar( 4 ) NOT NULL ,
  `priority` varchar( 2 ) NOT NULL ,
  PRIMARY KEY ( `id` ),
  UNIQUE KEY user_location_id (`user_id`, `location_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT =1;

--
-- Table structure for table `user_social_links`
--

CREATE TABLE IF NOT EXISTS `user_social_links` (
  `id` int( 16 ) NOT NULL AUTO_INCREMENT ,
  `user_id` int( 15 ) NOT NULL ,
  `link_url` varchar( 200 ) NOT NULL ,
  `type` enum ('Facebook', 'Twitter', 'Linkedin' ) NOT NULL ,
  PRIMARY KEY ( `id` ),
  UNIQUE KEY user_id_type (`user_id`, `type`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT =1;

--
-- Table structure for table `user_collaborative_role`
--

CREATE TABLE IF NOT EXISTS `user_collaborative_role` (
  `id` int( 16 ) NOT NULL AUTO_INCREMENT ,
  `user_id` int( 15 ) NOT NULL ,
  `type` enum ('Engineer', 'Doctor', 'Lawyer', 'ProjectManager','UxDesigner','ResearchScholar' ) NOT NULL DEFAULT 'Engineer',
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `last_update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY ( `id` ),
  UNIQUE KEY user_id_type (`user_id`, `type`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT =1;

--
-- Alter project table to add `status`
--

ALTER TABLE `projects` ADD `status` ENUM( 'Ongoing', 'Completed', 'YetToStart' ) NOT NULL ;

ALTER TABLE `user_info` CHANGE `user_type` `user_type` ENUM( 'collaborator', 'fundsearcher', 'collaboratorFundsearcher', 'investor', 'collaboratorInvester', 'fundsearcherInvestor', 'collaboratorInvestorFundsearcher', 'jobSearch' ) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
