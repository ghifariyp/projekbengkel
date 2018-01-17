-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2017 at 02:53 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `jadwal` varchar(16) NOT NULL,
  `nm_mobil` varchar(15) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `jns_kerusakan` varchar(20) NOT NULL,
  `estimasi` varchar(14) NOT NULL,
  `biaya` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `jadwal`, `nm_mobil`, `no_polisi`, `jns_kerusakan`, `estimasi`, `biaya`) VALUES
(16, 'andre', '12 januari 2', 'avanza', 'b 1234 dha', 'Kerusakan Mesin', '1 Hari', 'Rp. 250.000'),
(17, 'sueb', '12 januari 2', 'xenia', 'b 1234 ee', 'Penggantian Transmis', '1 Hari', 'Rp. 550.000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, 'ghifariyp', 'ghif@yp.com', 'ghifari97'),
(2, 'ahmad', 'af@gma.com', '12345');
