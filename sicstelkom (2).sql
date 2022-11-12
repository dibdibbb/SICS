-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 07:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sicstelkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `gambar` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `nama_lengkap`, `gambar`) VALUES
(190063, 'diba', 'ashrifa', 'diba ashrifa', ''),
(190063, 'diba', 'ashrifa', 'diba ashrifa', ''),
(0, 'mochi', 'momochi', '', ''),
(0, 'fika', 'fikaaa', '', ''),
(0, 'gege', '202cb962ac59075b964b07152d234b70', '', ''),
(0, 'dibdibbb', '', '', ''),
(0, 'dibdibbb', '$2y$10$fN856FY0MGUEPL.iWL.wBeOEgE/qDlcTXBcdx/oShUb', '', ''),
(0, 'testes', '$2y$10$riCcCRdo1K3sx9/S8OWRpuobLM6I4KkNegDr6dTjJA8', '', ''),
(0, 'testes', '$2y$10$7/ia43vbAWtzZzUdYIrDie7bvuj3WAz8GzbudBPCic8', '', ''),
(0, 'coba', '$2y$10$YtqWhMwUGyp4YigfhEed.eC93IrVXohJA6FYyCpM886', '', ''),
(0, 'tes123', '$2y$10$QTa3TC5E55zmuffvRQJxKO.avZ00FehJWIc2epEbYYb', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `berhenti_berlangganan`
--

CREATE TABLE `berhenti_berlangganan` (
  `id` int(5) NOT NULL,
  `nama pelanggan` varchar(100) NOT NULL,
  `nama pemohon` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `contact person` int(20) NOT NULL,
  `no. internet` int(15) NOT NULL,
  `alasan` varchar(300) NOT NULL,
  `deposit` varchar(150) NOT NULL,
  `pembayaran` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `calling`
--

CREATE TABLE `calling` (
  `id` int(3) NOT NULL,
  `no. internet` int(20) NOT NULL,
  `contact person` int(20) NOT NULL,
  `nama customer call` varchar(150) NOT NULL,
  `nama user call` varchar(150) NOT NULL,
  `hasil call` varchar(150) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `waktu` datetime NOT NULL,
  `payment date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calling`
--

INSERT INTO `calling` (`id`, `no. internet`, `contact person`, `nama customer call`, `nama user call`, `hasil call`, `keterangan`, `waktu`, `payment date`) VALUES
(3, 713070, 2147483647, 'syana', 'diba', 'Diluar Service Area', 'trilililiiii', '0000-00-00 00:00:00', '2022-11-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(3) NOT NULL,
  `no. internet` int(20) NOT NULL,
  `nama lengkap` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `contact person` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `no. internet`, `nama lengkap`, `alamat`, `contact person`) VALUES
(3, 713070, 'difa', 'jl. riau', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(5) NOT NULL,
  `nama pelanggan` varchar(150) NOT NULL,
  `nama pelapor` varchar(20) NOT NULL,
  `contact person` int(20) NOT NULL,
  `relasi` enum('pemilik','suami/istri','orang tua','anak','anggota keluarga lain','teman','tetangga') NOT NULL,
  `no. internet` int(20) NOT NULL,
  `masalah` enum('tagihan','gangguan','psb','retensi') NOT NULL,
  `uraian` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id`, `nama pelanggan`, `nama pelapor`, `contact person`, `relasi`, `no. internet`, `masalah`, `uraian`) VALUES
(12, 'wiwil', 'teteeteee', 2147483647, 'pemilik', 656565, 'tagihan', 'mahall');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'diba', 'telkom', 'telkom123', 'admin'),
(2, 'difa', 'telekomunikasi', 'telekomunikasi123', 'user'),
(7, 'diba', 'dibdibbb', '69fb4d6cdcf5b86652bc', 'admin'),
(8, 'diba', 'dibdibbb', '69fb4d6cdcf5b86652bc', 'admin'),
(9, '', 'dibdibbb', '69fb4d6cdcf5b86652bc', 'admin'),
(10, '', 'dibdibbb', '69fb4d6cdcf5b86652bc', 'admin'),
(11, '', 'dibdibbb', 'ashrifa', 'admin'),
(12, '', 'ed', 'edi', 'admin'),
(13, '', 'ed', 'edi', 'admin'),
(14, '', 'mochi', 'momochi', 'admin'),
(15, '', 'fika', 'fikaaa', 'admin'),
(16, '', 'gege', '202cb962ac59075b964b', 'admin'),
(17, '', 'dibdibbb', '', 'admin'),
(18, '', 'dibdibbb', '$2y$10$fN856FY0MGUEP', 'admin'),
(20, '', 'testes', '$2y$10$7/ia43vbAWtzZzUdYIrDie7bvuj3WAz8GzbudBPCic8', 'admin'),
(21, '', 'coba', '$2y$10$YtqWhMwUGyp4YigfhEed.eC93IrVXohJA6FYyCpM886/Jt5DrfkmO', 'admin'),
(22, '', 'tes123', '$2y$10$QTa3TC5E55zmuffvRQJxKO.avZ00FehJWIc2epEbYYbJNKFHDwCYu', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berhenti_berlangganan`
--
ALTER TABLE `berhenti_berlangganan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calling`
--
ALTER TABLE `calling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no. internet` (`no. internet`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no. internet` (`no. internet`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berhenti_berlangganan`
--
ALTER TABLE `berhenti_berlangganan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `calling`
--
ALTER TABLE `calling`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calling`
--
ALTER TABLE `calling`
  ADD CONSTRAINT `calling_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `calling_ibfk_2` FOREIGN KEY (`no. internet`) REFERENCES `customer` (`no. internet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
