-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2019 at 01:49 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learningplatform`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisers_tbl`
--

DROP TABLE IF EXISTS `advisers_tbl`;
CREATE TABLE IF NOT EXISTS `advisers_tbl` (
  `adv_id` int(10) NOT NULL AUTO_INCREMENT,
  `professor` varchar(255) NOT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisers_tbl`
--

INSERT INTO `advisers_tbl` (`adv_id`, `professor`) VALUES
(1, 'Prof. Darwin Vargas'),
(2, 'Prof. Fernando Renegado'),
(3, 'Prof. Julius Sareno'),
(4, 'Prof. Maria Carmela Francisco'),
(5, 'Prof. May Garcia'),
(6, 'Prof. Peragrino Amador'),
(7, 'Prof. Renato Butch Bituonan'),
(8, 'Prof. Wellanie Molino');

-- --------------------------------------------------------

--
-- Table structure for table `courses_tbl`
--

DROP TABLE IF EXISTS `courses_tbl`;
CREATE TABLE IF NOT EXISTS `courses_tbl` (
  `course_id` int(10) NOT NULL AUTO_INCREMENT,
  `course` varchar(100) NOT NULL,
  `abbrev` varchar(100) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_tbl`
--

INSERT INTO `courses_tbl` (`course_id`, `course`, `abbrev`) VALUES
(1, 'Bachelor of Science in Computer Science', 'BSCS'),
(2, 'Bachelor of Science in Information Technology', 'BSIT'),
(3, 'Bachelor of Science in Information System', 'BSIS'),
(4, 'Bachelor in Applied Science Major in Laboratory Technology', 'BAS-LT'),
(5, 'Bachelor of Science in Environmental Science', 'BS-ES');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(24) NOT NULL AUTO_INCREMENT,
  `title` varchar(244) NOT NULL,
  `course` varchar(244) NOT NULL,
  `filename` varchar(244) NOT NULL,
  `uploader` varchar(244) NOT NULL,
  `path` varchar(244) NOT NULL,
  `dateuploaded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects_tbl`
--

DROP TABLE IF EXISTS `projects_tbl`;
CREATE TABLE IF NOT EXISTS `projects_tbl` (
  `proj_id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `course_id` int(10) NOT NULL,
  `abstract` longtext NOT NULL,
  `year` int(4) NOT NULL,
  `author` varchar(255) NOT NULL,
  `adv_id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `date_uploaded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`proj_id`),
  KEY `adv_id` (`adv_id`),
  KEY `course_id` (`course_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

DROP TABLE IF EXISTS `users_tbl`;
CREATE TABLE IF NOT EXISTS `users_tbl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects_tbl`
--
ALTER TABLE `projects_tbl`
  ADD CONSTRAINT `projects_tbl_ibfk_1` FOREIGN KEY (`adv_id`) REFERENCES `advisers_tbl` (`adv_id`),
  ADD CONSTRAINT `projects_tbl_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses_tbl` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
