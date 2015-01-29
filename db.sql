-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for kacaudb
CREATE DATABASE IF NOT EXISTS `kacaudb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kacaudb`;


-- Dumping structure for table kacaudb.kawan
CREATE TABLE IF NOT EXISTS `kawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) NOT NULL DEFAULT '0',
  `cover` varchar(50) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL,
  `jk` int(11) NOT NULL DEFAULT '0',
  `tgllahir` date NOT NULL DEFAULT '0000-00-00',
  `email` varchar(150) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `tglgabung` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table kacaudb.kawan: ~-1 rows (approximately)
/*!40000 ALTER TABLE `kawan` DISABLE KEYS */;
INSERT INTO `kawan` (`id`, `foto`, `cover`, `nama`, `alamat`, `jk`, `tgllahir`, `email`, `password`, `tglgabung`) VALUES
	(1, 'IMG_1703.JPG', 'IMG_1612.JPG', 'Udin', '', 0, '0000-00-00', 'udin@gmail.com', '12345', '0000-00-00 00:00:00'),
	(2, '0', '0', 'No Name', '', 0, '0000-00-00', '0', '0', '0000-00-00 00:00:00'),
	(3, 'IMG_2551.JPG', 'IMG_2435.JPG', 'Alif', '', 0, '0000-00-00', 'alif@gmail.com', '12345', '0000-00-00 00:00:00'),
	(4, 'arya.jpg', 'arya.jpg', 'Arya', '', 0, '0000-00-00', 'arya@gmail.com', '12345', '0000-00-00 00:00:00'),
	(5, '0', '0', 'adi', '', 0, '0000-00-00', 'adi@gmail.com', '12345', '2015-01-27 18:33:07'),
	(7, '0', '0', '121', '', 0, '0000-00-00', '123', '123', '2015-01-27 18:34:58'),
	(8, '0', '0', '121', '', 0, '0000-00-00', 'abe@gmail.com', '12345', '2015-01-27 18:35:46'),
	(9, 'default.jpg', 'default.jpg', 'budi', '', 0, '0000-00-00', 'budi@gmail.com', '12345', '2015-01-27 19:00:40');
/*!40000 ALTER TABLE `kawan` ENABLE KEYS */;


-- Dumping structure for table kacaudb.komentar
CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posting` int(11) NOT NULL DEFAULT '0',
  `kawan` int(11) NOT NULL DEFAULT '0',
  `komentar` text NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table kacaudb.komentar: ~-1 rows (approximately)
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
INSERT INTO `komentar` (`id`, `posting`, `kawan`, `komentar`, `tgl`) VALUES
	(1, 1, 1, 'Waka', '0000-00-00 00:00:00'),
	(2, 1, 3, 'Kikikiki', '0000-00-00 00:00:00'),
	(3, 2, 3, 'test', '2015-01-25 14:23:30'),
	(4, 3, 3, 'wikikiki', '2015-01-25 14:24:23'),
	(5, 3, 3, 'wikikiki', '2015-01-25 14:25:44'),
	(6, 3, 3, 'wikikiki', '2015-01-25 14:26:13'),
	(7, 1, 1, 'hi hi ihi ', '2015-01-25 16:33:06'),
	(8, 6, 3, 'he', '2015-01-25 16:59:21');
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;


-- Dumping structure for table kacaudb.posting
CREATE TABLE IF NOT EXISTS `posting` (
  `id` int(31) NOT NULL AUTO_INCREMENT,
  `kawan` int(11) NOT NULL DEFAULT '0',
  `file` varchar(50) NOT NULL DEFAULT '0',
  `kalimat` text NOT NULL,
  `tgl` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `view` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table kacaudb.posting: ~-1 rows (approximately)
/*!40000 ALTER TABLE `posting` DISABLE KEYS */;
INSERT INTO `posting` (`id`, `kawan`, `file`, `kalimat`, `tgl`, `view`) VALUES
	(1, 1, 'images.jpg', '', '2015-01-24 12:12:31', 0),
	(2, 1, '6.jpg', '', '2015-01-24 12:12:31', 0),
	(3, 3, '2.jpg', '', '0000-00-00 00:00:00', 0),
	(4, 3, '3.jpg', '', '0000-00-00 00:00:00', 0),
	(5, 1, '4.jpg', '', '0000-00-00 00:00:00', 0),
	(6, 3, '5.jpg', '', '0000-00-00 00:00:00', 0);
/*!40000 ALTER TABLE `posting` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
