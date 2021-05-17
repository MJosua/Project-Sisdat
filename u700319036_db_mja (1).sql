-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2021 at 06:46 PM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u700319036_db_mja`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `deskripsi` varchar(300) NOT NULL,
  `idrm` int(11) NOT NULL,
  `namarm` varchar(100) NOT NULL,
  `jambuka` varchar(11) NOT NULL,
  `nomorhp` varchar(500) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `x` int(11) NOT NULL,
  `p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`deskripsi`, `idrm`, `namarm`, `jambuka`, `nomorhp`, `gambar`, `x`, `p`) VALUES
('', 26, 'RM Padang Basamo', '08.00 - 02.', '021789555465', 'preview-restaurant-delicious-banner-template-premium-vector-1619525109.jpg', 2, 19),
('', 27, 'RM Padang Basamo', '08.00 - 02.', '021789555465', 'Capture.PNG', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `nama` varchar(15) NOT NULL,
  `ID` int(11) NOT NULL,
  `idrm` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `email` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `notelp` char(12) NOT NULL,
  `idgame` char(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`email`, `nama`, `alamat`, `notelp`, `idgame`, `jumlah`) VALUES
('admin@gmail.com', 'admin', 'Sumedang', '081122334455', 'Dota', 99),
('admin@gmail.com', 'admin', 'Medan, Indonesia', '082277901625', 'Dota', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ID` int(4) DEFAULT NULL,
  `x` int(11) NOT NULL,
  `p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nama`, `username`, `password`, `email`, `ID`, `x`, `p`) VALUES
('admin', 'admin', 'admin', 'admin@gmail.com', 1, 0, 0),
('siapalagi', 'akucintapweb', 'sok', 'apajadeh', 2, 0, 0),
('Azka', 'azka', 'azka', 'azka@gmail.com', NULL, 0, 0),
('mja', 'apaaja', 'password', 'mjagmail', 3, 0, 0),
('mutia', 'mutiadamute', '123456', 'mutia@gmail.com', NULL, 0, 0),
('Raihan Muhammad', 'Raihan1610X', 'buttflicker1A', 'raihan.muhammad1298@gmail.com', NULL, 0, 0),
('Siapa', 'apawe', 'pweb', 'siapa@gmail.com', 4, 0, 0),
('sdsss', 'Baru', 'Baru', 'ss', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `nama`, `id`) VALUES
('admin', 'admin123', 'admin', 'si admin', 1),
('user', 'user123', 'pengguna', 'si pengguna', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`idrm`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD KEY `email` (`email`),
  ADD KEY `idrm` (`idrm`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD KEY `Anti Hapus` (`email`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `idrm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD CONSTRAINT `tb_log_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tb_user` (`email`),
  ADD CONSTRAINT `tb_log_ibfk_2` FOREIGN KEY (`idrm`) REFERENCES `tb_barang` (`idrm`);

--
-- Constraints for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD CONSTRAINT `Anti Hapus` FOREIGN KEY (`email`) REFERENCES `tb_user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
