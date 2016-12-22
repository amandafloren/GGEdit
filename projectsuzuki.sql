-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Des 2016 pada 16.36
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsuzuki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambarmobillengkap`
--

CREATE TABLE `gambarmobillengkap` (
  `idGambar` int(11) NOT NULL,
  `idMobilAsli` int(11) NOT NULL,
  `namaGambar` varchar(100) NOT NULL,
  `linkGambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `idMobil` int(11) NOT NULL,
  `namaMobil` varchar(30) NOT NULL,
  `spesifikasi` varchar(100) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `gambarUtama` varchar(100) NOT NULL,
  `gambarPromo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`idMobil`, `namaMobil`, `spesifikasi`, `jenis`, `warna`, `gambarUtama`, `gambarPromo`) VALUES
(1, 'Suzuki SX4 S-Cross', '', 'Hatchback', '', 'images/placeholders/sx4scross/sx4scross.jpg', 'images/placeholders/suzukisx4scross'),
(2, 'Suzuki Ciaz', '', 'Sedan', '', 'images/placeholders/ciaz/ciaz.jpg', 'images/placeholders/suzukiciaz/'),
(3, 'Suzuki Celerio', '', 'City Car', '', 'images/placeholders/celerio/celerio.jpg', 'images/placeholders/suzukicelerio/'),
(4, 'Suzuki Grand Vitara 2.4', '', 'SUV', '', 'images/placeholders/grandvitara/grandvitara.jpg', 'images/placeholders/suzukigrandvitara/'),
(5, 'Suzuki Swift GS', '', 'Hatchback', '', 'images/placeholders/swiftgs/swiftgs.jpg', 'images/placeholders/suzukiswiftgs/'),
(7, 'Suzuki APV', '', 'MPV', '', 'images/placeholders/apv/apv.jpg', 'images/placeholders/suzukiapv/'),
(8, 'Suzuki Wagon R', '', 'City Car', '', 'images/placeholders/wagonr/wagonr.jpg', 'images/placeholders/suzukiwagonr'),
(9, 'Suzuki New Ertiga', '', 'MPV', '', 'images/placeholders/newertiga/newertiga.jpg', 'images/placeholders/suzukinewertiga/'),
(10, 'Suzuki Ertiga Dreza', '', 'MPV', '', 'images/placeholders/ertigadreza/ertigadreza.jpg', 'images/placeholders/suzukiertigadreza'),
(13, 'Suzuki Swift GX', '', 'Hatchback', '', 'images/placeholders/swiftgx/swiftgx.jpg', 'images/placeholders/suzukiswiftgx/'),
(14, 'Carry 1500', '', 'commercial', '', 'images/placeholders/carry1500/carry1500.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipemobil`
--

CREATE TABLE `tipemobil` (
  `id` int(11) NOT NULL,
  `namaMobil` varchar(30) NOT NULL,
  `tipeMobil` varchar(20) NOT NULL,
  `jenisLain` varchar(30) DEFAULT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipemobil`
--

INSERT INTO `tipemobil` (`id`, `namaMobil`, `tipeMobil`, `jenisLain`, `harga`) VALUES
(29, 'Suzuki SX4 S-Cross', 'AT', '', 259900000),
(30, 'Suzuki SX4 S-Cross', 'MT', '', 246900000),
(31, 'Suzuki Ciaz', 'AT', '', 289500000),
(32, 'Suzuki Ciaz', 'MT', '', 279500000),
(33, 'Suzuki Celerio', 'CVT', '', 167700000),
(34, 'Suzuki Celerio', 'MT', '', 155000000),
(35, 'Suzuki Grand Vitara 2.4', 'AT', '', 369000000),
(36, 'Suzuki Grand Vitara 2.4', 'MT', '', 358000000),
(37, 'Suzuki Swift GS', 'AT', '', 233500000),
(38, 'Suzuki Swift GS', 'MT', '', 224500000),
(39, 'Suzuki Swift GX', 'AT', '', 218500000),
(40, 'Suzuki Swift GX', 'MT', '', 209500000),
(41, 'Suzuki Splash 1.2 GL', 'AT', '', 160900000),
(42, 'Suzuki Splash 1.2 GL', 'MT', '', 150300000),
(43, 'Suzuki APV', 'SGX R17 AT', '', 232200000),
(44, 'Suzuki APV', 'SGX R17 MT', '', 218200000),
(45, 'Suzuki APV', 'SGX R15 MT', '', 228200000),
(46, 'Suzuki APV', 'SGX R15 AT', '', 214200000),
(47, 'Suzuki APV', 'SGX MT', '', 195000000),
(48, 'Suzuki APV', 'GX MT', '', 192500000),
(49, 'Suzuki APV', 'GL MT', '', 180000000),
(50, 'Suzuki APV', 'GE PS MT', '', 172500000),
(51, 'Suzuki Wagon R', 'GS Airbag AGS', '', 133000000),
(52, 'Suzuki Wagon R', 'GS Airbag MT', '', 124500000),
(53, 'Suzuki Wagon R', 'GL Airbag AGS', '', 124000000),
(54, 'Suzuki Wagon R', 'GL Airbag MT', '', 115500000),
(55, 'Suzuki Wagon R', 'GA Airbag MT', '', 103000000),
(76, 'Suzuki New Ertiga', 'Airbag ABS GA - MT', '', 184000000),
(77, 'Suzuki New Ertiga', 'Airbag ABS GL - MT', '', 200500000),
(78, 'Suzuki New Ertiga', 'Airbag ABS GL - AT', '', 213000000),
(79, 'Suzuki New Ertiga', 'Airbag ABS GX - MT', '', 212000000),
(80, 'Suzuki New Ertiga', 'Airbag ABS GX - AT', '', 224500000),
(81, 'Suzuki Ertiga Dreza', 'MT', '', 217900000),
(82, 'Suzuki Ertiga Dreza', 'AT', '', 230500000),
(83, 'Suzuki Ertiga Dreza', 'GS - MT', '', 224900000),
(84, 'Suzuki Ertiga Dreza', 'GS - AT', '', 237500000),
(85, 'Suzuki APV', 'Mega Carry', 'pickup', 0),
(87, 'Carry 1500', 'Futura', '', 0),
(88, 'Carry 1500', 'Futura', '', 0),
(89, 'Suzuki APV', 'standar', 'ambulan', 0),
(90, 'Suzuki APV', 'international', 'ambulan', 0);

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
  ADD PRIMARY KEY (`idMobil`),
  ADD UNIQUE KEY `namaMobil` (`namaMobil`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `tipemobil`
--
ALTER TABLE `tipemobil`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `idMobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipemobil`
--
ALTER TABLE `tipemobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
