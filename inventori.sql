-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 06:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `idMerk` int(11) NOT NULL,
  `namaBarang` varchar(255) NOT NULL,
  `hargaBarang` int(11) NOT NULL,
  `stokBarang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `idMerk`, `namaBarang`, `hargaBarang`, `stokBarang`) VALUES
(11, 2, 'ASUS ROG PHONE 2', 200000001, 12),
(12, 1, 'ASUS ROG PHONE 2', 20000000, 2),
(13, 1, 'ASUS ROG PHONE 3', 9999993, 3),
(14, 1, 'ASUS ROG PHONE 4', 9999994, 4),
(15, 1, 'ASUS ROG PHONE 5', 9999995, 5),
(16, 2, 'SAMSUNG GALAXY J', 9999991, 1),
(17, 2, 'SAMSUNG GALAXY J2', 9999992, 2),
(18, 2, 'SAMSUNG GALAXY J3', 9999993, 3),
(19, 2, 'SAMSUNG GALAXY J4', 9999994, 4),
(20, 2, 'SAMSUNG GALAXY J5', 9999995, 5),
(22, 0, '', 0, 0),
(23, 0, '', 0, 0),
(24, 0, '', 0, 0),
(25, 0, '', 0, 0),
(26, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `idMerk` int(11) NOT NULL,
  `namaMerk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`idMerk`, `namaMerk`) VALUES
(1, 'Asus'),
(2, 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` enum('MANAGER','KARYAWAN','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `jabatan`) VALUES
(1, 'nar', '202cb962ac59075b964b07152d234b70', 'MANAGER'),
(2, 'ana', '202cb962ac59075b964b07152d234b70', 'KARYAWAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`idMerk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `idMerk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
