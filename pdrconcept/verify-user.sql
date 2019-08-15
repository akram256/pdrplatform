-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2019 at 10:56 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `verify-user`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `verified`, `token`, `password`) VALUES
(10, 'samuel okodi', 'samuel_okodi@hotmail.com', 0, '062ea99417f0a0c350dcaef50b488ac1a0c96ab0c7c881b3e6337b8980518cbc302defb2ad30f3ca7af448c2b469fea36e48', '$2y$10$olCRzRJiemmkKdSoamM5LOOjM/9h/urDT.Zb59QoguBwbIYzNl8Zi'),
(11, 'WRW', 'ashirafmawejje2@gmail.com', 0, 'c0c7c76d30bd3dcaefc96f40275bdc0a', '8c5c34399e5f3f21c15d3e2725f3c04d');
