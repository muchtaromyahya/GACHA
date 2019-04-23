-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 04:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gacha`
--

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `valid` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` int(11) NOT NULL,
  `ipk` double NOT NULL,
  `umum` varchar(100) NOT NULL,
  `khusus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id`, `username`, `kategori`, `jurusan`, `durasi`, `valid`, `semester`, `sks`, `ipk`, `umum`, `khusus`) VALUES
(9, 'Abdi Masyarakat', 'Sumber Daya Manusia', 'S1 Teknik Industri', '6 Bulan', '2020-11-11', 6, 4, 5, '1', '1\r\n'),
(10, 'Abdi Masyarakat', 'Administrasi & Koordinasi', 'S1 Ilmu Komunikasi', '6 Bulan', '2020-11-11', 3, 4, 5, '1', '1\r\n'),
(11, 'Abdi Masyarakat', 'Administrasi & Koordinasi', 'S1 Akuntansi', '6 Bulan', '2020-11-11', 3, 4, 5, '1', '1\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `perguruantinggi` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` int(11) NOT NULL,
  `ipk` int(11) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `lowongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `nim`, `perguruantinggi`, `jurusan`, `email`, `semester`, `sks`, `ipk`, `berkas`, `lowongan`) VALUES
(3, 'Gery n', '1301170116', 'Telkom University', 'IF', 'gery.nugroho@gmail.com', 5, 10, 4, 'l.rar', 'Abdi Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggalLahir` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `regist_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `nama`, `username`, `password`, `email`, `tempat`, `tanggalLahir`, `status`, `regist_time`) VALUES
(8, 'Gery Nugroho', 'geryn25', '315eb115d98fcbad39ffc5edebd669c9', 'gery.nugroho@gmail.com', 'Selong', '1999-03-25', 'Mitra', '2019-04-23 01:46:57'),
(9, 'Alisa', 'qwe', '6eea9b7ef19179a06954edd0f6c05ceb', 'gerty@gmail.com', '1234', '2019-04-27', 'Magang', '2019-04-23 01:42:21'),
(12, 'testuser', 'testuser', '5d9c68c6c50ed3d02a2fcf54f63993b6', 'testuser@gmail.com', 'testuser', '1999-11-11', 'Magang', '2019-04-23 14:17:59'),
(11, 'Abdi Masyarakat', 'urang', '202cb962ac59075b964b07152d234b70', 'urang@gmail.com', 'Madiuns', '1111-11-11', 'Mitra', '2019-04-23 10:10:22'),
(10, 'Yusuf Hermanti', 'yumanto', 'd41d8cd98f00b204e9800998ecf8427e', 'yumanto@gmail.com', 'Madiun', '1999-04-11', 'Magang', '2019-04-23 02:16:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
