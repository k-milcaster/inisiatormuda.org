-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: inix6848_db
-- ------------------------------------------------------
-- Server version	5.6.15-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `content` longtext NOT NULL,
  `postdate` datetime NOT NULL,
  `published` varchar(1) NOT NULL DEFAULT 'N',
  `recommended` varchar(1) NOT NULL DEFAULT 'N',
  `user_id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_article_user1_idx` (`user_id_user`),
  CONSTRAINT `fk_article_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,2,'<h1>TEST DATA</h1>','<br>Drive Test adalah pengukuran yang dilakukan untuk  mengamati dan \r\nmelakukan optimasi agar dihasilkan kriteria performansi jaringan.  Yang \r\ndiamati biasanya kuat daya pancar dan daya terima, tingkat kegagalan \r\nakses  (originating dan terminating), tingkat panggilan yang gagal (drop\r\n call) serta  FER. Drive Test di sini di amati dari sisi penerima (MS) \r\ndan dilakukan dengan  menggunakan software yang terintegrasi dengan \r\nlaptop, pada prinsipnya  sama dengan alat drive test lain yaitu \r\nterhubung dengan handphone dan GPS  (Global Positioning Satellite) yang \r\ndigunakan untuk membantu menentukan letak  dan koordinat posisi MS atau \r\nhandphone yang digunakan pada saat bergerak. <br><br>','2015-09-04 17:04:35','1','0',1);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(600) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Motivasi'),(2,'Pengetahuan Umum'),(3,'Quotes'),(4,'Politik'),(5,'News');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(500) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programs` (
  `id_programs` varchar(45) NOT NULL,
  `name_programs` varchar(45) NOT NULL,
  `date_programs` date NOT NULL,
  `location_programs` varchar(45) NOT NULL,
  `description_programs` longtext,
  `posteddate_programs` datetime NOT NULL,
  `img_programs` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_programs`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programs`
--

LOCK TABLES `programs` WRITE;
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` VALUES ('20150904170743','Test Data','2015-09-13','Surabaya','Drive Test adalah pengukuran yang dilakukan untuk mengamati dan melakukan optimasi agar dihasilkan kriteria performansi jaringan. Yang diamati biasanya kuat daya pancar dan daya terima, tingkat kegagalan akses (originating dan terminating), tingkat panggilan yang gagal (drop call) serta FER. Drive Test di sini di amati dari sisi penerima (MS) dan dilakukan dengan menggunakan software yang terintegrasi dengan laptop, pada prinsipnya sama dengan alat drive test lain yaitu terhubung dengan handphone dan GPS (Global Positioning Satellite) yang digunakan untuk membantu menentukan letak dan koordinat posisi MS atau handphone yang digunakan pada saat bergerak.','2015-09-04 17:08:48','IMG20150904170743.jpg');
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `bio` varchar(600) NOT NULL,
  `img` varchar(45) NOT NULL,
  `division` varchar(45) NOT NULL,
  `user_id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_staff`),
  KEY `fk_staff_user_idx` (`user_id_user`),
  CONSTRAINT `fk_staff_user` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'Damian Agata Yuvens','Damian memberikan perhatian terhadap isu hak asasi manusia dan kebijakan publik. Kesibukannya sebagai Junior Associate di Lubis, Santosa & Maramis tidak menghalangi Damian tetap berkontribusi pada almamater yang mana Damian juga merupakan pelatih debat hukum bagi delegasi Indonesian Law Debate Society FHUI.','advisordamian','Advisor',NULL),(2,'Rangga Widigda','Rangga tidak hanya mumpuni dalam hal hukum perbankan, investasi, dan hukum kekayaan intelektual. FHUI Angkatan 2008 ini, semasanya menjadi mahasiswa, juga turut aktif dalam kegiatan seperti menjadi delegasi FHUI untuk Manfred Lach International Moot Court Competition di India tahun 2012.','advisorrangga','Advisor',NULL),(6,'Ohyongyi Marino','Aktivis lingkungan, dua kata yang menggambarkan sosok Ohiongyi. Minat Ohyong dalam hal aspek hukum kehutanan dan penegakan hukum lingkungan-sumber daya alam membawa Ohyong terlibat dalam banyak penelitian terkait isu ini.','init20150910102002.jpg','Initiator',NULL),(8,'Aninta Ekanila Mamoedi','Jurnalisme dan sosial-politik adalah bidang yang digeluti oleh Aninta. Alumni FISIP UI ini pernah menjadi Chief Editor dari FISIPERS UI yang merupakan salah satu organisasi pers mahasiswa terkemuka di UI.','init20150910103907.jpg','Initiator',NULL),(9,'Della Sri Wahyuni','Cinta Della terhadap riset tidak ada duanya. Riset yang Della terlibat di dalamnya melingkupi isu seperti penyadang disabilitas, pengawasan hakim, hingga penyusunan strategi nasional untuk access to justice.','init20150910103929.jpg','Initiator',NULL),(10,'Elsa Marliana','Elsa merupakan pejuang sejati dalam advokasi buruh migran dan isu inklusi sosial. Hal ini dibuktikan Elsa dengan terlibat di advokasi buruh migran di Hong Kong, Singapura dan Taiwan, bahkan sempat bekerja sama dengan ILO dan kementerian.','init20150910104141.jpg','Initiator',NULL);
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system`
--

DROP TABLE IF EXISTS `system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_status`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system`
--

LOCK TABLES `system` WRITE;
/*!40000 ALTER TABLE `system` DISABLE KEYS */;
INSERT INTO `system` VALUES (1,'wholeweb','0'),(2,'blogs','0'),(3,'programs','0'),(4,'carees','0'),(5,'aboutus','0');
/*!40000 ALTER TABLE `system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `registered` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `role` varchar(45) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'administrator','K-softDev','2015-07-21 00:00:00','2015-09-10 09:07:11','administrator');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-10 15:46:20
