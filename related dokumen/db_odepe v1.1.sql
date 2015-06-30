-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2015 at 10:53 AM
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
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
`ID_DAFTAR` int(11) NOT NULL,
  `ID_TAG` smallint(6) NOT NULL,
  `ID_ODP` int(11) NOT NULL,
  `ID_ERROR` int(11) NOT NULL,
  `TGL_SURVEY` date NOT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LABEL` smallint(6) NOT NULL,
  `KETERANGAN` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `error`
--

CREATE TABLE IF NOT EXISTS `error` (
`ID_ERROR` int(11) NOT NULL,
  `NAMA_ERROR` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kluster`
--

CREATE TABLE IF NOT EXISTS `kluster` (
`ID_KLUSTER` int(11) NOT NULL,
  `NAMA_KLUSTER` varchar(100) NOT NULL,
  `WILAYAH` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kluster`
--

INSERT INTO `kluster` (`ID_KLUSTER`, `NAMA_KLUSTER`, `WILAYAH`) VALUES
(1, 'AHASS HONDA TLOGOMAS', 'Klojen'),
(2, 'AHMAD YANI ADIREJO KEPANJEN', 'Kepanjen');

-- --------------------------------------------------------

--
-- Table structure for table `kompetisi`
--

CREATE TABLE IF NOT EXISTS `kompetisi` (
  `ID_COMPETITOR` int(11) NOT NULL,
  `ID_DAFTAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kompetitor`
--

CREATE TABLE IF NOT EXISTS `kompetitor` (
`ID_COMPETITOR` int(11) NOT NULL,
  `NAMA_COMPETITOR` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE IF NOT EXISTS `odp` (
`ID_ODP` int(11) NOT NULL,
  `ID_KLUSTER` int(11) DEFAULT NULL,
  `NAMA_ODP` varchar(25) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odp`
--

INSERT INTO `odp` (`ID_ODP`, `ID_KLUSTER`, `NAMA_ODP`, `availability`) VALUES
(1, 1, 'ODP-KLJ-FQ/27', 13),
(2, 1, 'ODP-KLJ-FQ/28', 16),
(3, 1, 'ODP-KLJ-FQ/29', 15),
(4, 1, 'ODP-KLJ-FQ/30', 14),
(5, 1, 'ODP-KLJ-FQ/31', 0),
(6, 1, 'ODP-KLJ-FQ/32', 0),
(7, 2, 'ODP-KPN-FB/19', 15),
(8, 2, 'ODP-KPN-FB/20', 8),
(9, 2, 'ODP-KPN-FB/21', 16),
(10, 2, 'ODP-KPN-FB/22', 8);

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
-- Table structure for table `segmen`
--

CREATE TABLE IF NOT EXISTS `segmen` (
`ID_SEGMEN` int(11) NOT NULL,
  `KURANG_DARI_500JT` smallint(6) NOT NULL,
  `500JT_SD_1M` smallint(6) NOT NULL,
  `LEBIH_DARI_1M` smallint(6) NOT NULL,
  `PERKAMPUNGAN` smallint(6) NOT NULL,
  `RUKO` smallint(6) NOT NULL,
  `KANTOR_KECIL` smallint(6) NOT NULL,
  `KANTOR_BESAR` smallint(6) NOT NULL,
  `PERGURUAN_TINGGI` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `segmentasi`
--

CREATE TABLE IF NOT EXISTS `segmentasi` (
  `ID_SEGMEN` int(11) NOT NULL,
  `ID_DAFTAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tagging`
--

CREATE TABLE IF NOT EXISTS `tagging` (
`ID_TAG` smallint(6) NOT NULL,
  `VALID_TAG` smallint(6) NOT NULL,
  `LATITUDE` varchar(20) DEFAULT NULL,
  `LONGITUDE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
 ADD PRIMARY KEY (`ID_DAFTAR`), ADD KEY `FK_DAFTAR_MEMILIKI_ERROR` (`ID_ERROR`), ADD KEY `FK_DAFTAR_MEMPUNYAI_TAGGING` (`ID_TAG`), ADD KEY `FK_DAFTAR_OE_ODP` (`ID_ODP`);

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
-- Indexes for table `kompetisi`
--
ALTER TABLE `kompetisi`
 ADD PRIMARY KEY (`ID_COMPETITOR`,`ID_DAFTAR`), ADD KEY `FK_KOMPETIS_KOMPETISI_DAFTAR` (`ID_DAFTAR`);

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
-- Indexes for table `segmen`
--
ALTER TABLE `segmen`
 ADD PRIMARY KEY (`ID_SEGMEN`);

--
-- Indexes for table `segmentasi`
--
ALTER TABLE `segmentasi`
 ADD PRIMARY KEY (`ID_SEGMEN`,`ID_DAFTAR`), ADD KEY `FK_SEGMENTA_SEGMENTAS_DAFTAR` (`ID_DAFTAR`);

--
-- Indexes for table `tagging`
--
ALTER TABLE `tagging`
 ADD PRIMARY KEY (`ID_TAG`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
MODIFY `ID_DAFTAR` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `error`
--
ALTER TABLE `error`
MODIFY `ID_ERROR` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kluster`
--
ALTER TABLE `kluster`
MODIFY `ID_KLUSTER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kompetitor`
--
ALTER TABLE `kompetitor`
MODIFY `ID_COMPETITOR` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `odp`
--
ALTER TABLE `odp`
MODIFY `ID_ODP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `segmen`
--
ALTER TABLE `segmen`
MODIFY `ID_SEGMEN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tagging`
--
ALTER TABLE `tagging`
MODIFY `ID_TAG` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
ADD CONSTRAINT `FK_DAFTAR_MEMILIKI_ERROR` FOREIGN KEY (`ID_ERROR`) REFERENCES `error` (`ID_ERROR`),
ADD CONSTRAINT `FK_DAFTAR_MEMPUNYAI_TAGGING` FOREIGN KEY (`ID_TAG`) REFERENCES `tagging` (`ID_TAG`),
ADD CONSTRAINT `FK_DAFTAR_OE_ODP` FOREIGN KEY (`ID_ODP`) REFERENCES `odp` (`ID_ODP`);

--
-- Constraints for table `kompetisi`
--
ALTER TABLE `kompetisi`
ADD CONSTRAINT `FK_KOMPETIS_KOMPETISI_DAFTAR` FOREIGN KEY (`ID_DAFTAR`) REFERENCES `daftar` (`ID_DAFTAR`),
ADD CONSTRAINT `FK_KOMPETIS_KOMPETISI_KOMPETIT` FOREIGN KEY (`ID_COMPETITOR`) REFERENCES `kompetitor` (`ID_COMPETITOR`);

--
-- Constraints for table `odp`
--
ALTER TABLE `odp`
ADD CONSTRAINT `FK_ODP_RELATIONS_KLUSTER` FOREIGN KEY (`ID_KLUSTER`) REFERENCES `kluster` (`ID_KLUSTER`);

--
-- Constraints for table `segmentasi`
--
ALTER TABLE `segmentasi`
ADD CONSTRAINT `FK_SEGMENTA_SEGMENTAS_DAFTAR` FOREIGN KEY (`ID_DAFTAR`) REFERENCES `daftar` (`ID_DAFTAR`),
ADD CONSTRAINT `FK_SEGMENTA_SEGMENTAS_SEGMEN` FOREIGN KEY (`ID_SEGMEN`) REFERENCES `segmen` (`ID_SEGMEN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
