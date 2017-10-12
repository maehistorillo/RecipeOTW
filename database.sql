-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2017 at 08:38 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_email`, `admin_password`) VALUES
('1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `datadata`
--

DROP TABLE IF EXISTS `datadata`;
CREATE TABLE IF NOT EXISTS `datadata` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proto`
--

DROP TABLE IF EXISTS `proto`;
CREATE TABLE IF NOT EXISTS `proto` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proto`
--

INSERT INTO `proto` (`username`, `password`) VALUES
('qweqwe', 'wqewqe'),
('mark', 'mark'),
('mema', 'mema'),
('tbgina', 'waeqw'),
('8man', '8888');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `recipename` varchar(50) NOT NULL,
  `recipetype` varchar(20) NOT NULL,
  `recipedetails` text NOT NULL,
  `recipeimg` text NOT NULL,
  `recipecost` varchar(10) NOT NULL,
  `recipeprocedure` text NOT NULL,
  PRIMARY KEY (`recipename`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipename`, `recipetype`, `recipedetails`, `recipeimg`, `recipecost`, `recipeprocedure`) VALUES
('Adobo', 'Main Dish', 'Sweet Soy Sauce w/ Vinegar', 'filipino.jpg', '35.00', '...'),
('Rem Rem', 'Main Waifu', 'Rem is love, Rem is life.', 'Reeeeeem.png', 'not availa', 'Pat on head.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(16) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `miname` varchar(3) NOT NULL,
  `birthdate` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `surname`, `firstname`, `miname`, `birthdate`, `address`) VALUES
('srphfthnd', 'johnmarksena@gmail.c', '12345', 'Sena', 'John Mark', 'L', '02', 'Kaingin I'),
('johnmark', 'johnmarksena2@gmail.', '12345', 'Itsuka', 'Shidou', '', '02', 'Tenguu City'),
('markmark', 'mark@gmail.com', '12345', 'Sena', 'John Mark', 'L', '02/04/99', 'Kaingin I'),
('shakugannoshana', 'shakugan@gmail.com', '12345', 'Shana', 'Nietono', 'No', '0000000', 'MIsaki CIty');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

DROP TABLE IF EXISTS `users2`;
CREATE TABLE IF NOT EXISTS `users2` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `dateofbirth` varchar(10) NOT NULL,
  `postaladdress` varchar(150) NOT NULL,
  `zipcode` int(10) NOT NULL,
  PRIMARY KEY (`lastname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`firstname`, `lastname`, `phonenumber`, `dateofbirth`, `postaladdress`, `zipcode`) VALUES
('John Mark', 'Sena', '09161781389', '04-02-99', 'Kaingin I', 1700),
('Yuichiro', 'Hyakuya', '09093240810', '09-04-98', 'Saitama City', 3400),
('Renzo', 'Payod', '09151231241', '05-07-99', 'Cavite', 4103);
--
-- Database: `students`
--
CREATE DATABASE IF NOT EXISTS `students` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `students`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `idno` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `sex` varchar(1) NOT NULL,
  PRIMARY KEY (`idno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`idno`, `lname`, `fname`, `mname`, `course`, `sex`) VALUES
('12-037-001', 'Magalpok', 'Gorgonia', 'Pedro', 'BSIT', 'F'),
('12-037-002', 'Puth', 'Sue', 'Ramirez', 'BSIT', 'F'),
('12-037-003', 'Bermudo', 'Francisco', 'M', 'BSCS', 'M');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
