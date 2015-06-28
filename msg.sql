-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2015 at 06:39 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `msg`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(340) NOT NULL,
  `message` varchar(650) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `sender_name`, `message`, `status`) VALUES
(1, 'Lyndon abesamis', 'this is a message for newly wed', 2),
(2, 'dondon', 'asdasd', 2),
(3, 'dondon', 'this is a sample program', 2),
(4, 'dondon', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consectetur quae, tempore adipisci architecto eos laudantium quia enim autem quos modi similique, incidunt! Magni, totam deleniti eaque, harum in aspernatur!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consectetur quae, tempore adipisci architecto eos laudantium quia enim autem quos modi similique, incidunt! Magni, totam deleniti eaque, harum in aspernatur!', 2),
(5, 'sample', 'asdasda', 2),
(6, 'asd', 'sadasdasd', 2),
(7, 'asd', 'sadasdasd', 2),
(8, '', '', 1),
(9, 'azsda', 'asdas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(160) DEFAULT NULL,
  `thumb_name` varchar(32) DEFAULT NULL,
  `ext` varchar(8) DEFAULT NULL,
  `upload_date` varchar(20) DEFAULT NULL,
  `message_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `img_name`, `thumb_name`, `ext`, `upload_date`, `message_id`) VALUES
(1, '', '_thumb', '', '1423842391', 1),
(2, '935196_10201603387911996_1686426109_n_(1)', '935196_10201603387911996_1686426', '.jpg', '1423842417', 2),
(3, '', '_thumb', '', '1423845392', 3),
(4, '', '_thumb', '', '1423845820', 4),
(5, '', '_thumb', '', '1431524164', 5),
(6, '', '_thumb', '', '1431617315', 5),
(7, '', '_thumb', '', '1431617378', 6),
(8, '', '_thumb', '', '1431617933', 7),
(9, '', '_thumb', '', '1431617999', 8),
(10, '', '_thumb', '', '1431618002', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
