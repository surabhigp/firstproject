-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2013 at 10:53 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `firstproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id_img` int(250) NOT NULL AUTO_INCREMENT,
  `img` varchar(1024) NOT NULL,
  `user` varchar(1024) NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_img`, `img`, `user`) VALUES
(1, 'Penguins.jpg', 'admin'),
(2, 'Penguins.jpg', 'admin'),
(3, 'Lighthouse.jpg', 'admin'),
(4, 'Lighthouse.jpg', 'admin'),
(5, 'Chrysanthemum.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(250) NOT NULL AUTO_INCREMENT,
  `uname` varchar(256) NOT NULL,
  `pswd` varchar(256) NOT NULL,
  `status` int(11) NOT NULL,
  `id_signup` int(250) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `uname`, `pswd`, `status`, `id_signup`) VALUES
(1, 'mmmuy', '123', 0, 0),
(2, 'tytyytytyt', '123', 0, 0),
(3, 'jhhjgj', '123', 0, 0),
(4, 'mmmfg', '345', 0, 0),
(5, 'mmmiytey', '678', 0, 0),
(6, 'ytii', 'mmm', 0, 0),
(7, 'grtyfrg', 'tttt', 0, 65),
(8, 'grtyfrg', 'tttt', 0, 0),
(9, 'admin', 'admin123', 0, 67),
(10, 'nbvnbn', '123', 0, 0),
(11, 'admin', '123', 0, 69),
(12, 'admin', '123', 0, 70),
(13, 'admin', '123', 0, 71),
(14, 'qwqqwq', 'qwer', 0, 72),
(15, 'admin', 'rtyu', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id_signup` int(250) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `email` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_signup`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id_signup`, `fullname`, `username`, `password`, `gender`, `email`, `status`) VALUES
(52, 'gdfhgfh', 'hffgjhf', '1234', 'male', 'ewgye@qgfedh.lkil', 1),
(54, 'sagdfgh', 'mmmfdhf', 'qwe', 'male', 'fraud@hotmail.com', 1),
(56, 'fgy', 'mmmyghg', 'rrr', 'male', 'sooraj@indiamail.com', 1),
(58, 'dgdfgmdf', 'mmmdd', 'ddd', 'male', 'ddd@ff.com', 1),
(62, 'uyuity', 'ytii', 'mmm', 'male', 'ytui@ggt.iu', 1),
(65, 'gdfggf', 'grtyfrg', 'tttt', 'male', 'dryhrr@rtuhrt.kljk', 1),
(67, 'arun', 'admin', 'admin123', 'male', 'arunrs@gmail.com', 1),
(69, 'ghjhjh', 'admin', '123', 'male', 'fghhg@xe.jh', 1),
(70, 'ggjujk', 'admin', '123', 'male', 'tiger@gmail.com', 1),
(71, 'dvcvcxvx', 'admin', '123', 'male', '32f@egf.jhh', 1),
(72, 'qwwqhfghgh', 'qwqqwq', 'qwer', 'male', 'ewfette@gfegh.hjj', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
