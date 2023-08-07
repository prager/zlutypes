-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: db5005775576.hosting-data.io
-- Generation Time: Jul 16, 2023 at 10:55 PM
-- Server version: 10.5.17-MariaDB-1:10.5.17+maria~deb10-log
-- PHP Version: 7.0.33-0+deb9u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs4858794`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_type` int(11) NOT NULL DEFAULT 0,
  `type_code` tinyint(4) NOT NULL,
  `role` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pass` varchar(512) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fname` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lname` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `facebook` varchar(128) COLLATE latin1_general_ci DEFAULT NULL,
  `twitter` varchar(128) COLLATE latin1_general_ci DEFAULT NULL,
  `linkedin` varchar(128) COLLATE latin1_general_ci DEFAULT NULL,
  `callsign` varchar(12) COLLATE latin1_general_ci DEFAULT 'none',
  `phone` varchar(32) COLLATE latin1_general_ci DEFAULT '''000-000-0000''',
  `street` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(128) COLLATE latin1_general_ci DEFAULT NULL,
  `state_cd` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `zip_cd` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `authorized` tinyint(4) NOT NULL DEFAULT 0,
  `verifystr` varchar(128) COLLATE latin1_general_ci DEFAULT NULL,
  `email_key` varchar(128) COLLATE latin1_general_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `position` varchar(512) COLLATE latin1_general_ci DEFAULT NULL,
  `pos_code` tinyint(4) DEFAULT 0,
  `image_loc` varchar(512) COLLATE latin1_general_ci NOT NULL DEFAULT '/assets/img/team-member.gif',
  `profile` varchar(64) COLLATE latin1_general_ci DEFAULT NULL,
  `ip` varchar(64) COLLATE latin1_general_ci DEFAULT NULL,
  `comment` varchar(1024) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_user_types` (`type_code`),
  KEY `id_user_types_2` (`type_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2_czech_cs COLLATE=latin2_czech_cs ROW_FORMAT=DYNAMIC;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
