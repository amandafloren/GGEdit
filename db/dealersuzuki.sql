-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2016 at 04:32 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealersuzuki`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambarmobillengkap`
--

CREATE TABLE `gambarmobillengkap` (
  `idGambar` int(11) NOT NULL,
  `idMobilAsli` int(11) NOT NULL,
  `namaGambar` varchar(100) NOT NULL,
  `linkGambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listmobil`
--

CREATE TABLE `listmobil` (
  `idMobil` int(11) NOT NULL,
  `namaMobil` int(11) NOT NULL,
  `tipeMobil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `idMobil` int(11) NOT NULL,
  `namaMobil` varchar(30) NOT NULL,
  `spesifikasi` varchar(100) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `gambarUtama` varchar(100) NOT NULL,
  `gambarPromo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambarmobillengkap`
--
ALTER TABLE `gambarmobillengkap`
  ADD PRIMARY KEY (`idGambar`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`idMobil`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambarmobillengkap`
--
ALTER TABLE `gambarmobillengkap`
  MODIFY `idGambar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `idMobil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
