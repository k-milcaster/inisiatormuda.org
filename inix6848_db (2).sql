-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2015 at 06:28 PM
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
  `title` longtext NOT NULL,
  `content` longtext NOT NULL,
  `postdate` datetime NOT NULL,
  `published` varchar(1) NOT NULL DEFAULT 'N',
  `recommended` varchar(1) NOT NULL DEFAULT 'N',
  `user_id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_article_user1_idx` (`user_id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `id_category`, `title`, `content`, `postdate`, `published`, `recommended`, `user_id_user`) VALUES
(5, 2, '<h1>Test Data</h1>', 'Drive Test adalah pengukuran yang dilakukan untuk &nbsp;mengamati dan &nbsp;melakukan optimasi agar dihasilkan kriteria performansi jaringan. &nbsp;Yang &nbsp;diamati biasanya kuat daya pancar dan daya terima, tingkat kegagalan &nbsp;akses &nbsp;(originating dan terminating), tingkat panggilan yang gagal (drop call) serta &nbsp;FER. Drive Test di sini di amati dari sisi penerima (MS) dan dilakukan dengan &nbsp;menggunakan software yang terintegrasi dengan laptop, pada prinsipnya &nbsp;sama dengan alat drive test lain yaitu terhubung dengan handphone dan GPS &nbsp;(Global Positioning Satellite) yang digunakan untuk membantu menentukan letak &nbsp;dan koordinat posisi MS atau &nbsp;handphone yang digunakan pada saat bergerak.&nbsp;<br>', '2015-09-12 10:39:06', '1', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `id_career` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `content` text,
  `publish` int(11) NOT NULL DEFAULT '0',
  `datetime` datetime NOT NULL,
  `id_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_career`),
  UNIQUE KEY `id_career_2` (`id_career`),
  KEY `id_career` (`id_career`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id_career`, `title`, `content`, `publish`, `datetime`, `id_user_id`) VALUES
(6, 'Test Data', 'Drive Test adalah pengukuran yang dilakukan untuk &nbsp;mengamati dan &nbsp;melakukan optimasi agar dihasilkan kriteria performansi jaringan. &nbsp;Yang &nbsp;diamati biasanya kuat daya pancar dan daya terima, tingkat kegagalan &nbsp;akses &nbsp;(originating dan terminating), tingkat panggilan yang gagal (drop call) serta &nbsp;FER. Drive Test di sini di amati dari sisi penerima (MS) dan dilakukan dengan &nbsp;menggunakan software yang terintegrasi dengan laptop, pada prinsipnya &nbsp;sama dengan alat drive test lain yaitu terhubung dengan handphone dan GPS &nbsp;(Global Positioning Satellite) yang digunakan untuk membantu menentukan letak &nbsp;dan koordinat posisi MS atau &nbsp;handphone yang digunakan pada saat bergerak.&nbsp;<br>', 0, '2015-09-11 13:05:30', 1);

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
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_img`, `id_article`, `img`) VALUES
(10, 4, 'init1TESTDATA'),
(11, 4, 'init2TESTDATA'),
(12, 4, 'init3TESTDATA'),
(13, 5, 'init1TestData'),
(14, 5, 'init2TestData'),
(15, 5, 'init3TestData');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `id_programs` varchar(45) NOT NULL,
  `name_programs` varchar(45) NOT NULL,
  `date_programs` date NOT NULL,
  `location_programs` varchar(45) NOT NULL,
  `description_programs` longtext,
  `posteddate_programs` datetime NOT NULL,
  `img_programs` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_programs`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id_programs`, `name_programs`, `date_programs`, `location_programs`, `description_programs`, `posteddate_programs`, `img_programs`) VALUES
('20150904170743', 'Test Data', '2015-09-13', 'Surabaya', 'Drive Test adalah pengukuran yang dilakukan untuk mengamati dan melakukan optimasi agar dihasilkan kriteria performansi jaringan. Yang diamati biasanya kuat daya pancar dan daya terima, tingkat kegagalan akses (originating dan terminating), tingkat panggilan yang gagal (drop call) serta FER. Drive Test di sini di amati dari sisi penerima (MS) dan dilakukan dengan menggunakan software yang terintegrasi dengan laptop, pada prinsipnya sama dengan alat drive test lain yaitu terhubung dengan handphone dan GPS (Global Positioning Satellite) yang digunakan untuk membantu menentukan letak dan koordinat posisi MS atau handphone yang digunakan pada saat bergerak.', '2015-09-04 17:08:48', 'IMG20150904170743.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id_staff` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `bio` varchar(600) NOT NULL,
  `img` varchar(45) NOT NULL,
  `division` varchar(45) NOT NULL,
  `user_id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_staff`),
  KEY `fk_staff_user_idx` (`user_id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `name`, `bio`, `img`, `division`, `user_id_user`) VALUES
(1, 'Damian Agata Yuvens', 'Damian memberikan perhatian terhadap isu hak asasi manusia dan kebijakan publik. Kesibukannya sebagai Junior Associate di Lubis, Santosa & Maramis tidak menghalangi Damian tetap berkontribusi pada almamater yang mana Damian juga merupakan pelatih debat hukum bagi delegasi Indonesian Law Debate Society FHUI.', 'advisordamian', 'Advisor', NULL),
(2, 'Rangga Widigda', 'Rangga tidak hanya mumpuni dalam hal hukum perbankan, investasi, dan hukum kekayaan intelektual. FHUI Angkatan 2008 ini, semasanya menjadi mahasiswa, juga turut aktif dalam kegiatan seperti menjadi delegasi FHUI untuk Manfred Lach International Moot Court Competition di India tahun 2012.', 'advisorrangga', 'Advisor', NULL),
(6, 'Ohyongyi Marino', 'Aktivis lingkungan, dua kata yang menggambarkan sosok Ohiongyi. Minat Ohyong dalam hal aspek hukum kehutanan dan penegakan hukum lingkungan-sumber daya alam membawa Ohyong terlibat dalam banyak penelitian terkait isu ini.', 'init20150910102002.jpg', 'Initiator', NULL),
(8, 'Aninta Ekanila Mamoedi', 'Jurnalisme dan sosial-politik adalah bidang yang digeluti oleh Aninta. Alumni FISIP UI ini pernah menjadi Chief Editor dari FISIPERS UI yang merupakan salah satu organisasi pers mahasiswa terkemuka di UI.', 'init20150910103907.jpg', 'Initiator', NULL),
(9, 'Della Sri Wahyuni', 'Cinta Della terhadap riset tidak ada duanya. Riset yang Della terlibat di dalamnya melingkupi isu seperti penyadang disabilitas, pengawasan hakim, hingga penyusunan strategi nasional untuk access to justice.', 'init20150910103929.jpg', 'Initiator', NULL),
(10, 'Elsa Marliana', 'Elsa merupakan pejuang sejati dalam advokasi buruh migran dan isu inklusi sosial. Hal ini dibuktikan Elsa dengan terlibat di advokasi buruh migran di Hong Kong, Singapura dan Taiwan, bahkan sempat bekerja sama dengan ILO dan kementerian.', 'init20150910104141.jpg', 'Initiator', NULL);

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
(1, 'administrator', 'K-softDev', '2015-07-21 00:00:00', '2015-09-12 10:05:39', 'administrator');

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
