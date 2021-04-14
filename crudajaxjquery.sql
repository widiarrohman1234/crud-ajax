-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 08:07 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudajaxjquery`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `nama_mahasiswa`, `alamat`, `jenis_kelamin`, `tgl_masuk`, `jurusan`) VALUES
(1, 'Dewan Komputer', 'Cilacap', 'Laki-laki', '2019-01-01', 'Sistem Informasi'),
(2, 'Sule', 'Jakarta', 'Laki-laki', '2019-01-01', 'Teknik Informatika'),
(3, 'Maemunah', 'Yogyakarta', 'Perempuan', '2019-01-01', 'Sistem Informasi'),
(4, 'Siti ED', 'Semarang', 'Perempuan', '2019-01-01', 'Teknik Informatika'),
(5, 'Andre', 'Purwokerto', 'Laki-laki', '2019-01-01', 'Sistem Informasi'),
(6, 'Tukul Arwana', 'Surabaya', 'Laki-laki', '2019-01-01', 'Sistem Informasi'),
(18, 'widi arrohman', 'Jln.P.Hidayat', 'Laki-laki', '2001-12-12', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
