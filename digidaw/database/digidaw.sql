-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 05:53 PM
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
-- Database: `digidaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudanggaram`
--

CREATE TABLE `gudanggaram` (
  `id_produk` int(11) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `harga_barang` int(5) NOT NULL,
  `stok_barang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudanggaram`
--

INSERT INTO `gudanggaram` (`id_produk`, `nama_barang`, `brand`, `harga_barang`, `stok_barang`) VALUES
(1, 'Gudang Garam Filter', 'GudangGaram', 20000, 10),
(7, 'Surya Pro Mild', 'Surya', 18000, 20),
(8, 'GG Mild', 'GG', 14000, 30),
(10, 'Tembakau Racikan', 'Longlat', 5000, 26),
(13, 'Filter', 'GudangGaram', 18000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `gudanggaram2`
--

CREATE TABLE `gudanggaram2` (
  `id_produk` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `harga_barang` int(5) NOT NULL,
  `stok_barang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudanggaram2`
--

INSERT INTO `gudanggaram2` (`id_produk`, `nama_barang`, `brand`, `harga_barang`, `stok_barang`) VALUES
(2, 'Surya Pro Mild', 'Surya', 18000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudanggaram`
--
ALTER TABLE `gudanggaram`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `gudanggaram2`
--
ALTER TABLE `gudanggaram2`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gudanggaram`
--
ALTER TABLE `gudanggaram`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
