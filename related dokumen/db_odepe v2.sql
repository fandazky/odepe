-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2015 at 10:26 AM
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
`id_area` int(11) NOT NULL,
  `nama_area` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id_area`, `nama_area`) VALUES
(1, 'Metro'),
(2, 'Batu'),
(3, 'Kepanjen');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
`ID_DAFTAR` int(11) NOT NULL,
  `ID_ODP` int(11) NOT NULL,
  `ID_ERROR` int(11) NOT NULL,
  `TGL_SURVEY` date NOT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `VALID_TAG` varchar(15) NOT NULL,
  `LATITUDE` varchar(20) DEFAULT NULL,
  `LONGITUDE` varchar(20) DEFAULT NULL,
  `LABEL` varchar(15) NOT NULL,
  `AVAILABILITY` varchar(2) NOT NULL,
  `BANGUNAN` varchar(2) NOT NULL,
  `KURANG_DARI_500JT` smallint(6) DEFAULT '0',
  `ANTARA_500JT_SD_1M` smallint(6) DEFAULT '0',
  `LEBIH_DARI_1M` smallint(6) DEFAULT '0',
  `PERKAMPUNGAN` smallint(6) DEFAULT '0',
  `RUKO` smallint(6) DEFAULT '0',
  `KANTOR_KECIL` smallint(6) DEFAULT '0',
  `KANTOR_BESAR` smallint(6) DEFAULT '0',
  `PERGURUAN_TINGGI` smallint(6) DEFAULT '0',
  `KETERANGAN` mediumtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`ID_DAFTAR`, `ID_ODP`, `ID_ERROR`, `TGL_SURVEY`, `TGL_INPUT`, `VALID_TAG`, `LATITUDE`, `LONGITUDE`, `LABEL`, `AVAILABILITY`, `BANGUNAN`, `KURANG_DARI_500JT`, `ANTARA_500JT_SD_1M`, `LEBIH_DARI_1M`, `PERKAMPUNGAN`, `RUKO`, `KANTOR_KECIL`, `KANTOR_BESAR`, `PERGURUAN_TINGGI`, `KETERANGAN`) VALUES
(4, 3, 2, '2015-07-01', '2015-07-01 04:18:09', 'Ya', '-7', '112', 'Ada', '5', '4', 0, 0, 0, 0, 0, 0, 0, 0, 'Y'),
(5, 9, 3, '2015-07-01', '2015-07-01 04:35:29', 'Tidak', '-7.239', '112.3887', 'Ada', '3', '4', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `error`
--

CREATE TABLE IF NOT EXISTS `error` (
`ID_ERROR` int(11) NOT NULL,
  `NAMA_ERROR` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `error`
--

INSERT INTO `error` (`ID_ERROR`, `NAMA_ERROR`) VALUES
(1, 'No Error'),
(2, 'Tidak Ada di Lokasi'),
(3, 'Tidak Ada di Starclick'),
(4, 'Wrong Label'),
(5, 'ID dan Kluster beda, tetapi koordinat sama'),
(6, 'Salah Posisi');

-- --------------------------------------------------------

--
-- Table structure for table `kluster`
--

CREATE TABLE IF NOT EXISTS `kluster` (
`ID_KLUSTER` int(11) NOT NULL,
  `NAMA_KLUSTER` varchar(100) NOT NULL,
  `ID_SET_OPERATION` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kluster`
--

INSERT INTO `kluster` (`ID_KLUSTER`, `NAMA_KLUSTER`, `ID_SET_OPERATION`) VALUES
(1, 'AHASS HONDA TLOGOMAS', '1'),
(2, 'AHMAD YANI ADIREJO KEPANJEN', '2');

-- --------------------------------------------------------

--
-- Table structure for table `kompetitor`
--

CREATE TABLE IF NOT EXISTS `kompetitor` (
`ID_COMPETITOR` int(11) NOT NULL,
  `NAMA_COMPETITOR` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetitor`
--

INSERT INTO `kompetitor` (`ID_COMPETITOR`, `NAMA_COMPETITOR`) VALUES
(1, 'Innovate'),
(2, 'Biznet'),
(3, 'MNC'),
(4, 'Indosat');

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE IF NOT EXISTS `odp` (
`ID_ODP` int(11) NOT NULL,
  `ID_KLUSTER` int(11) DEFAULT NULL,
  `NAMA_ODP` varchar(25) NOT NULL,
  `LT` varchar(10) NOT NULL,
  `LG` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odp`
--

INSERT INTO `odp` (`ID_ODP`, `ID_KLUSTER`, `NAMA_ODP`, `LT`, `LG`) VALUES
(2, 1, 'ODP-KLJ-FQ/28', '', ''),
(3, 1, 'ODP-KLJ-FQ/29', '', ''),
(4, 1, 'ODP-KLJ-FQ/30', '', ''),
(5, 1, 'ODP-KLJ-FQ/31', '', ''),
(6, 1, 'ODP-KLJ-FQ/32', '', ''),
(7, 2, 'ODP-KPN-FB/19', '', ''),
(8, 2, 'ODP-KPN-FB/20', '', ''),
(9, 2, 'ODP-KPN-FB/21', '', ''),
(10, 2, 'ODP-KPN-FB/22', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration_request`
--

CREATE TABLE IF NOT EXISTS `registration_request` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `set_operation`
--

CREATE TABLE IF NOT EXISTS `set_operation` (
`ID_SET_OPERATION` int(10) NOT NULL,
  `NAMA_SO` varchar(100) NOT NULL,
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_operation`
--

INSERT INTO `set_operation` (`ID_SET_OPERATION`, `NAMA_SO`, `id_area`) VALUES
(1, 'Klojen', 1),
(2, 'Kepanjen', 3),
(3, 'Singosari', 1),
(4, 'Blimbing', 1),
(5, 'Malang Kota', 1),
(6, 'Sawojajar', 1),
(7, 'Batu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `NIK` varchar(18) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `NIK`, `password`, `first_name`, `last_name`, `address`, `level`, `status`) VALUES
('Admin', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrator', NULL, NULL, 1, 1),
('nisrinabia', '', '63ca7e6f77c76d6175cc1831b2473a96', 'Nisrina', 'Madjid', 'Jl. Safir Malang', 2, 1),
('alibaba', '', 'asdfg', 'bismillah', 'alhamdulillah', 'Oroginak', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
 ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
 ADD PRIMARY KEY (`ID_DAFTAR`), ADD KEY `FK_DAFTAR_MEMILIKI_ERROR` (`ID_ERROR`), ADD KEY `FK_DAFTAR_OE_ODP` (`ID_ODP`);

--
-- Indexes for table `error`
--
ALTER TABLE `error`
 ADD PRIMARY KEY (`ID_ERROR`);

--
-- Indexes for table `kluster`
--
ALTER TABLE `kluster`
 ADD PRIMARY KEY (`ID_KLUSTER`);

--
-- Indexes for table `kompetitor`
--
ALTER TABLE `kompetitor`
 ADD PRIMARY KEY (`ID_COMPETITOR`);

--
-- Indexes for table `odp`
--
ALTER TABLE `odp`
 ADD PRIMARY KEY (`ID_ODP`), ADD KEY `FK_ODP_RELATIONS_KLUSTER` (`ID_KLUSTER`);

--
-- Indexes for table `registration_request`
--
ALTER TABLE `registration_request`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `set_operation`
--
ALTER TABLE `set_operation`
 ADD PRIMARY KEY (`ID_SET_OPERATION`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
MODIFY `ID_DAFTAR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
MODIFY `ID_COMPETITOR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `odp`
--
ALTER TABLE `odp`
MODIFY `ID_ODP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `set_operation`
--
ALTER TABLE `set_operation`
MODIFY `ID_SET_OPERATION` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
ADD CONSTRAINT `FK_DAFTAR_MEMILIKI_ERROR` FOREIGN KEY (`ID_ERROR`) REFERENCES `error` (`ID_ERROR`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_DAFTAR_OE_ODP` FOREIGN KEY (`ID_ODP`) REFERENCES `odp` (`ID_ODP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `odp`
--
ALTER TABLE `odp`
ADD CONSTRAINT `FK_ODP_RELATIONS_KLUSTER` FOREIGN KEY (`ID_KLUSTER`) REFERENCES `kluster` (`ID_KLUSTER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
