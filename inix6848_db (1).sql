-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2015 at 01:25 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inix6848_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `postdate` datetime NOT NULL,
  `published` varchar(1) NOT NULL DEFAULT 'N',
  `recommended` varchar(1) NOT NULL DEFAULT 'N',
  `user_id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_article_user1_idx` (`user_id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `id_category`, `title`, `content`, `postdate`, `published`, `recommended`, `user_id_user`) VALUES
(2, 1, '', '<h1>asdasdasdsad</h1><br>asdasdasdasdasd<br>asdasdasdasdasd<br>asdasdasdasdasd<br>asdasdasdasdasd<br>asdasdasdasdasd<br>asdasdasdasdasd<br>asdasdasdasdasd', '0000-00-00 00:00:00', 'N', 'N', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(600) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(1, 'Motivasi'),
(2, 'Pengetahuan Umum'),
(3, 'Quotes'),
(4, 'Politik'),
(5, 'News');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(500) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id_staff` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `bio` varchar(600) NOT NULL,
  `img` varchar(45) NOT NULL,
  `division` varchar(45) NOT NULL,
  `user_id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_staff`),
  KEY `fk_staff_user_idx` (`user_id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE IF NOT EXISTS `system` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_status`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`id_status`, `name`, `status`) VALUES
(1, 'wholeweb', '0'),
(2, 'blogs', '0'),
(3, 'programs', '0'),
(4, 'carees', '0'),
(5, 'aboutus', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `registered` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `role` varchar(45) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `registered`, `lastlogin`, `role`) VALUES
(1, 'administrator', 'K-softDev', '2015-07-21 00:00:00', '2015-08-28 09:54:26', 'administrator');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `fk_staff_user` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
