-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 08:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_menyurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(5) NOT NULL,
  `tanggal_sakit` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `tanggal_sakit`, `alamat`, `keterangan`, `status`) VALUES
(1, '2023-01-30', 'jl anggrek', 'Dine Ini', 'Disetujui'),
(4, '2023-02-17', 'jl anggrek', 'Ijin Tidak masuk karena sakit', 'Ditolak'),
(5, '2023-02-15', 'jl anggrek', 'Parkir', 'Ditolak'),
(10, '2023-02-20', '1', '3', 'Diproses');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nis` int(15) NOT NULL,
  `telp_ortu` int(15) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `level` enum('siswa','guru') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `nis`, `telp_ortu`, `kelas`, `status`, `level`) VALUES
(1, 'Dina', 'dinarisky@gmail.com', '1', 9888, 856789000, 'tkj', 'Disetujui', 'siswa'),
(2, 'Roni', 'roni@gmail.com', '1', 0, 0, '0', '', 'guru'),
(3, 'Coba', 'coba@gmail.com', '1', 0, 0, 'siswa', '', ''),
(4, 'test', 'test@gmail.com', '1', 1, 111, '1', 'Ditolak', 'siswa'),
(5, 'Dina Paramita', 'dini@gmail.com', '123', 1234, 2147483647, '6', 'Diproses', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
