-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2017 at 01:18 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `miname` varchar(255) NOT NULL,
  `birthmonth` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `birthyear` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `surname`, `firstname`, `miname`, `birthmonth`, `birthdate`, `birthyear`, `address`) VALUES
('aaa', 'sdada@gmail.com', '123456', 'dasd', 'sda', 'a', '', '', '', ''),
('admin', 'masmasmasm', 'admin', 'asfd', 'sdfdfas', 'asf', 'SADA', 'ASFD', 'ASD', 'ASFWE'),
('jababoy', 'jababoy@wata.com', 'jababoy', '', '', '', '', '1990', '', 'jababoy st., porky city'),
('maeho', 'raphaelamielle@yahoo.com', 'maeho', 'Historillo', 'Mae', 'D', 'April', '17', '1996', '63 cotabato st.,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
