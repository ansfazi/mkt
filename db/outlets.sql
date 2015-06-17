-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2014 at 05:58 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mkt`
--

-- --------------------------------------------------------

--
-- Table structure for table `outlets`
--

CREATE TABLE IF NOT EXISTS `outlets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) NOT NULL,
  `name` varchar(300) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `owner_first_name` varchar(50) NOT NULL,
  `owner_last_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `web` varchar(200) NOT NULL,
  `fb_page_url` varchar(300) NOT NULL,
  `mall` varchar(100) NOT NULL,
  `lat` double NOT NULL,
  `long` double NOT NULL,
  `accuracy` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `outlets`
--

INSERT INTO `outlets` (`id`, `uid`, `name`, `slug`, `owner_first_name`, `owner_last_name`, `phone`, `address`, `web`, `fb_page_url`, `mall`, `lat`, `long`, `accuracy`, `status`) VALUES
(7, 0, '0', '0', 'Zohaib', 'Hassan', '128767687', 'P-690, St # 07, B-block, Rasool Nagar, Faisalabad', 'http://google.com', 'http://facebook.com/mypage', 'My Mall', 0, 0, 0, 'Pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
