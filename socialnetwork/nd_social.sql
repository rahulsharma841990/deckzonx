-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2015 at 02:41 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nd_social`
--

-- --------------------------------------------------------

--
-- Table structure for table `nd_register`
--

CREATE TABLE IF NOT EXISTS `nd_register` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(30) NOT NULL,
  `user_email_id` varchar(80) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_gender` varchar(30) NOT NULL,
  `reg_date` date NOT NULL,
  `user_activate` varchar(20) NOT NULL,
  `activate_code` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nd_register`
--

INSERT INTO `nd_register` (`id`, `user_first_name`, `user_email_id`, `user_pass`, `user_gender`, `reg_date`, `user_activate`, `activate_code`, `status`) VALUES
(2, 'Rahul', 'rahulsharma841990@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', '2015-01-27', '1', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE IF NOT EXISTS `userprofile` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `street` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `about_my_self` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
