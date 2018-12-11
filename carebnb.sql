-- phpMyAdmin SQL Dump
-- version 4.0.10.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2018 at 12:44 AM
-- Server version: 5.1.73
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carebnb`
--
CREATE DATABASE IF NOT EXISTS `carebnb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `carebnb`;

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

DROP TABLE IF EXISTS `room_info`;
CREATE TABLE IF NOT EXISTS `room_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ownerid` int(11) NOT NULL,
  `guestid` int(11) NOT NULL DEFAULT '0',
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `pets` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `first_name` varchar(1000) NOT NULL,
  `last_name` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `birthday` varchar(1000) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` text NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
