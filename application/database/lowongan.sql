-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 01:01 PM
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
(1, 'geryn25', 'Administrasi&Koordinasi', 'S1Akuntansi', '5 Bulan', '2019-04-11', 4, 80, 3, 'tidak ada', ''),
(2, 'geryn25', 'Administrasi&Koordinasi', 'S1MBTI', '5 Bulan', '2019-04-11', 4, 80, 3, 'tidak ada', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
