-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 02:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--

--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `user_id`, `nama`, `password`, `level`) VALUES
(1, 'user', '5f14ab8ac5735', '', 'user', 'user'),
(2, 'admin', '5f14dd1f299f8', '', 'admin', 'Admin'),
(3, 'bapak', '5f127f58e7bcd', '', 'bapak', 'User'),
(4, 'bapak', '5f127f89f21bc', '', 'bapak', 'User'),
(5, 'bapak', '5f127f9c3e825', 'bapak', 'bapak', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(10) NOT NULL,
  `saldo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(20) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga_total` decimal(10,0) NOT NULL,
  `no_hp` int(30) NOT NULL,
  `alamat` text NOT NULL,
  `nama_p` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `foto`, `harga`, `deskripsi`) VALUES
(13, 'Baju ', '5f12e238d9b22.jpg', 500000, 'Baju ini dibuat oleh designer terkenal se kecamatan\r\nBaju ini pula sangat nyaman untuk dipakai,\r\n\r\nBuat kalian yg suka bepergian bau ini sangat cocok untuk bepergian'),
(14, 'Kemeja', '5f12e2949a369.jpg', 100000, 'Kemeje untuk mendatangi acara-acara.\r\n\r\nBaju ini sangat cocok untuk mendatangi acara acara \r\nseperti sunatan, hajatan,\r\nHarg apun sangat murah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
