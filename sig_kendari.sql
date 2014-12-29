-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2014 at 07:56 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sig_kendari`
--

-- --------------------------------------------------------

--
-- Table structure for table `penanda`
--

CREATE TABLE IF NOT EXISTS `penanda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objek` varchar(20) DEFAULT NULL,
  `nama_objek` varchar(20) DEFAULT NULL,
  `lintang` double DEFAULT NULL,
  `bujur` double DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `penanda`
--

INSERT INTO `penanda` (`id`, `objek`, `nama_objek`, `lintang`, `bujur`, `jenis`) VALUES
(6, 'hotel', 'athaya', -3.9702465, 122.52487, 'penginapan'),
(7, 'hotel', 'Metro', -3.9688765, 122.5185185, 'penginapan'),
(8, 'mesjid', 'babussalam', -3.9414295, 122.5116441, 'peribadatan'),
(9, 'hotel', 'zenith', -3.9707924, 122.5187009, 'penginapan'),
(10, 'bank', 'bank syariah mandiri', -3.9688279, 122.5171065, 'instansi'),
(25, 'hotel', 'himalaya', -4.0015546, 122.5012654, 'penginapan'),
(27, 'mesjid', 'nurul haq', -3.999714, 122.494217, 'peribadatan'),
(28, 'bank', 'BNI', -3.9959961, 122.5023899, 'instansi'),
(29, 'mesjid', 'ar-rafiqah', -3.993513, 122.4945793, 'peribadatan'),
(30, 'hotel', 'sutan raja', -4.0074694, 122.4908886, 'penginapan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
