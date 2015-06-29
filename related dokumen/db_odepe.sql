-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2015 at 07:52 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_odepe`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_request`
--

CREATE TABLE IF NOT EXISTS `registration_request` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_request`
--

INSERT INTO `registration_request` (`username`, `password`, `first_name`, `last_name`, `address`) VALUES
('alibaba', 'asdfg', 'bismillah', 'alhamdulillah', 'Oroginak'),
('cek@gmail.com', 'ccekcek', 'first', 'last', 'Bumi Marina Emas'),
('cekcek@gmail.com', 'haihai', 'firstname', 'lastname', 'California, US'),
('fafa@gmail.com', '123', 'pertamax', 'keduax', 'San Fransisco, US');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `first_name`, `last_name`, `address`, `level`, `status`) VALUES
('Admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrator', NULL, NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_request`
--
ALTER TABLE `registration_request`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
