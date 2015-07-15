-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2015 at 04:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
`ID_AREA` int(11) NOT NULL,
  `NAMA_AREA` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`ID_AREA`, `NAMA_AREA`) VALUES
(1, 'Metro'),
(2, 'Batu'),
(3, 'Kepanjen');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
`ID_DAFTAR` int(11) NOT NULL,
  `ID_KOMPETITOR` int(11) DEFAULT NULL,
  `ID_ERROR` int(11) DEFAULT NULL,
  `ID_ODP` int(11) DEFAULT NULL,
  `TGL_SURVEY` date NOT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `VALID_TAG` varchar(10) NOT NULL,
  `LATITUDE` varchar(15) DEFAULT NULL,
  `LONGITUDE` varchar(15) DEFAULT NULL,
  `LABEL` varchar(10) NOT NULL,
  `AVAILABILITY` varchar(3) DEFAULT NULL,
  `BANGUNAN` varchar(3) DEFAULT NULL,
  `KURANG_DARI_500JT` tinyint(1) NOT NULL,
  `ANTARA_500JT_SD_1M` tinyint(1) NOT NULL,
  `LEBIH_DARI_1M` tinyint(1) NOT NULL,
  `PERKAMPUNGAN` tinyint(1) NOT NULL,
  `RUKO` tinyint(1) NOT NULL,
  `KANTOR_KECIL` tinyint(1) NOT NULL,
  `KANTOR_BESAR` tinyint(1) NOT NULL,
  `PERGURUAN_TINGGI` tinyint(1) NOT NULL,
  `KETERANGAN` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`ID_DAFTAR`, `ID_KOMPETITOR`, `ID_ERROR`, `ID_ODP`, `TGL_SURVEY`, `TGL_INPUT`, `VALID_TAG`, `LATITUDE`, `LONGITUDE`, `LABEL`, `AVAILABILITY`, `BANGUNAN`, `KURANG_DARI_500JT`, `ANTARA_500JT_SD_1M`, `LEBIH_DARI_1M`, `PERKAMPUNGAN`, `RUKO`, `KANTOR_KECIL`, `KANTOR_BESAR`, `PERGURUAN_TINGGI`, `KETERANGAN`) VALUES
(1, 1, 1, 1, '2015-06-26', '2015-07-12 15:22:56', 'Ya', '', '', 'Ada', '', '', 0, 0, 0, 1, 1, 0, 0, 0, ''),
(2, 1, 1, 2, '2015-06-26', '2015-07-12 15:23:02', 'Ya', '', '', 'Ada', '', '', 0, 0, 0, 1, 1, 0, 0, 0, ''),
(3, 1, 1, 3, '2015-06-26', '2015-07-12 15:23:33', 'Ya', '', '', 'Ada', '', '', 0, 0, 0, 1, 1, 1, 0, 0, ''),
(4, 1, 1, 4, '2015-06-26', '2015-07-12 15:23:39', 'Ya', '', '', 'Ada', '', '', 0, 0, 0, 1, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `error`
--

CREATE TABLE IF NOT EXISTS `error` (
`ID_ERROR` int(11) NOT NULL,
  `NAMA_ERROR` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `error`
--

INSERT INTO `error` (`ID_ERROR`, `NAMA_ERROR`) VALUES
(1, 'No Error'),
(2, 'Tidak Ada di Lokasi'),
(3, 'Tidak Ada di Starclick'),
(4, 'Wrong Label'),
(5, 'Salah Posisi'),
(6, 'ID & Kluster beda, tetapi koordinat sama (IRISAN)');

-- --------------------------------------------------------

--
-- Table structure for table `kluster`
--

CREATE TABLE IF NOT EXISTS `kluster` (
`ID_KLUSTER` int(11) NOT NULL,
  `ID_SO` int(11) DEFAULT NULL,
  `NAMA_KLUSTER` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kluster`
--

INSERT INTO `kluster` (`ID_KLUSTER`, `ID_SO`, `NAMA_KLUSTER`) VALUES
(1, 1, 'AHASS HONDA TLOGOMAS'),
(2, 2, 'AHMAD YANI ADIREJO KEPANJEN');

-- --------------------------------------------------------

--
-- Table structure for table `kompetitor`
--

CREATE TABLE IF NOT EXISTS `kompetitor` (
`ID_KOMPETITOR` int(11) NOT NULL,
  `NAMA_KOMPETITOR` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetitor`
--

INSERT INTO `kompetitor` (`ID_KOMPETITOR`, `NAMA_KOMPETITOR`) VALUES
(1, 'Tidak Ada'),
(2, 'Biznet'),
(3, 'MNC'),
(4, 'Indosat'),
(5, 'First Media'),
(6, 'Innovate');

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE IF NOT EXISTS `odp` (
`ID_ODP` int(11) NOT NULL,
  `ID_KLUSTER` int(11) DEFAULT NULL,
  `NAMA_ODP` varchar(25) NOT NULL,
  `LT` varchar(15) NOT NULL,
  `LG` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odp`
--

INSERT INTO `odp` (`ID_ODP`, `ID_KLUSTER`, `NAMA_ODP`, `LT`, `LG`) VALUES
(1, 1, 'ODP-KLJ-FQ/27', '-7.930736', '112.602686'),
(2, 1, 'ODP-KLJ-FQ/28', '-7.930089', '112.602792'),
(3, 1, 'ODP-KLJ-FQ/29', '-7.9296', '112.602881'),
(4, 1, 'ODP-KLJ-FQ/30', '-7.929833', '112.602517'),
(5, 1, 'ODP-KLJ-FQ/31', '-7.930267', '112.602331'),
(6, 1, 'ODP-KLJ-FQ/32', '-7.931019', '112.6018'),
(7, 2, 'ODP-KPN-FB/19', '-8.128097', '112.570972'),
(8, 2, 'ODP-KPN-FB/20', '-8.127658', '112.571192'),
(9, 2, 'ODP-KPN-FB/21', '-8.126858', '112.571547'),
(10, 2, 'ODP-KPN-FB/22', '-8.125881', '112.572994');

-- --------------------------------------------------------

--
-- Table structure for table `registration_request`
--

CREATE TABLE IF NOT EXISTS `registration_request` (
  `username` varchar(50) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_operation`
--

CREATE TABLE IF NOT EXISTS `site_operation` (
`ID_SO` int(11) NOT NULL,
  `ID_AREA` int(11) DEFAULT NULL,
  `NAMA_SO` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_operation`
--

INSERT INTO `site_operation` (`ID_SO`, `ID_AREA`, `NAMA_SO`) VALUES
(1, 1, 'Klojen'),
(2, 3, 'Kepanjen'),
(3, 1, 'Singosari'),
(4, 1, 'Blimbing'),
(5, 1, 'Malang Kota'),
(6, 1, 'Sawojajar'),
(7, 2, 'Batu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `NIK` varchar(18) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `id_area` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `NIK`, `password`, `first_name`, `last_name`, `address`, `level`, `status`, `id_area`) VALUES
('admin', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrator', NULL, NULL, 1, 1, NULL),
('nisrinabia', '', '63ca7e6f77c76d6175cc1831b2473a96', 'Nisrina', 'Madjid', 'Jl. Safir Malang', 2, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
 ADD PRIMARY KEY (`ID_AREA`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
 ADD PRIMARY KEY (`ID_DAFTAR`), ADD KEY `FK_MEMILIKI` (`ID_ERROR`), ADD KEY `FK_SURVEY` (`ID_ODP`), ADD KEY `FK_TERDAPAT` (`ID_KOMPETITOR`);

--
-- Indexes for table `error`
--
ALTER TABLE `error`
 ADD PRIMARY KEY (`ID_ERROR`);

--
-- Indexes for table `kluster`
--
ALTER TABLE `kluster`
 ADD PRIMARY KEY (`ID_KLUSTER`), ADD KEY `FK_MILIK` (`ID_SO`);

--
-- Indexes for table `kompetitor`
--
ALTER TABLE `kompetitor`
 ADD PRIMARY KEY (`ID_KOMPETITOR`);

--
-- Indexes for table `odp`
--
ALTER TABLE `odp`
 ADD PRIMARY KEY (`ID_ODP`), ADD KEY `FK_MEPUNYAI` (`ID_KLUSTER`);

--
-- Indexes for table `registration_request`
--
ALTER TABLE `registration_request`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `site_operation`
--
ALTER TABLE `site_operation`
 ADD PRIMARY KEY (`ID_SO`), ADD KEY `FK_PUNYA` (`ID_AREA`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
MODIFY `ID_AREA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
MODIFY `ID_DAFTAR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `error`
--
ALTER TABLE `error`
MODIFY `ID_ERROR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kluster`
--
ALTER TABLE `kluster`
MODIFY `ID_KLUSTER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kompetitor`
--
ALTER TABLE `kompetitor`
MODIFY `ID_KOMPETITOR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `odp`
--
ALTER TABLE `odp`
MODIFY `ID_ODP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `site_operation`
--
ALTER TABLE `site_operation`
MODIFY `ID_SO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_ERROR`) REFERENCES `error` (`ID_ERROR`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_SURVEY` FOREIGN KEY (`ID_ODP`) REFERENCES `odp` (`ID_ODP`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_TERDAPAT` FOREIGN KEY (`ID_KOMPETITOR`) REFERENCES `kompetitor` (`ID_KOMPETITOR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kluster`
--
ALTER TABLE `kluster`
ADD CONSTRAINT `FK_MILIK` FOREIGN KEY (`ID_SO`) REFERENCES `site_operation` (`ID_SO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `odp`
--
ALTER TABLE `odp`
ADD CONSTRAINT `FK_MEPUNYAI` FOREIGN KEY (`ID_KLUSTER`) REFERENCES `kluster` (`ID_KLUSTER`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `site_operation`
--
ALTER TABLE `site_operation`
ADD CONSTRAINT `FK_PUNYA` FOREIGN KEY (`ID_AREA`) REFERENCES `area` (`ID_AREA`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
