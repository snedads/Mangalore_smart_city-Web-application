-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2018 at 04:54 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smart_city`
--
CREATE DATABASE IF NOT EXISTS `smart_city` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smart_city`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin111');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `phone`, `email`, `message`, `cdate`) VALUES
(1, 'seema', 8899007766, 'seema@gmail.com', 'Mangalore is a developing city', '2018-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `etitle` varchar(30) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `edescp` longtext NOT NULL,
  `posted_by` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `postdate` date NOT NULL,
  `eventdate` date NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `etitle`, `venue`, `image`, `edescp`, `posted_by`, `id`, `postdate`, `eventdate`) VALUES
(4, 'Kankanady Road Cleaning', 'kankanady', '60869-road.jpg', 'Please do come all', 'ram', 1, '2018-11-11', '2018-11-30'),
(5, 'Beach Cleaning', 'Ullal Beach', '67132-beach.jpeg', 'We are requesting all the youngsters to be there', 'ram', 1, '2018-11-11', '2018-11-27'),
(6, 'Cleanliness campaign', 'hampankatta', '94420-cleanliness.jpeg', 'Awareness campaign', 'ram', 1, '2018-11-11', '2018-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `loopholes`
--

CREATE TABLE IF NOT EXISTS `loopholes` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `datetime` datetime NOT NULL,
  `mname` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `loopholes`
--

INSERT INTO `loopholes` (`lid`, `mid`, `content`, `datetime`, `mname`, `status`) VALUES
(1, 1, 'About road repair', '2018-11-11 20:20:55', 'ram', 'sender');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mname` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `mname`, `contact`, `gender`, `address`, `dob`, `age`, `image`, `occupation`, `status`, `email`, `pwd`) VALUES
(1, 'ram', 9988007765, 'male', 'kankanady', '1980-06-06', 38, '21064-t2.jpg', 'Lecturer', 'approved', 'ram@gmail.com', 'ram111'),
(2, 'seema', 8899007763, 'male', 'kankanady', '1999-08-12', 19, '31436-76670-team1.jpg', 'student', 'approved', 'seema@gmail.com', 'seema123');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`pid`, `eid`, `name`, `contact`, `email`) VALUES
(1, 3, 'seema', 9900887763, 'seema@gmail.com'),
(2, 4, 'seema', 9900887763, 'seema@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `rp_id` int(11) NOT NULL AUTO_INCREMENT,
  `lid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `reply` longtext NOT NULL,
  `datetime` datetime NOT NULL,
  `mname` varchar(30) NOT NULL,
  PRIMARY KEY (`rp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`rp_id`, `lid`, `mid`, `reply`, `datetime`, `mname`) VALUES
(1, 1, 2, 'its horrible', '2018-11-11 21:55:00', 'seema'),
(2, 1, 1, 'We have to form a group inorder to arrange a awareness', '2018-11-11 22:12:03', 'ram');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
