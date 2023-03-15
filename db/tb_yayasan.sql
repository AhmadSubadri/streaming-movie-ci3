-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 07:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_yayasan`
--

CREATE TABLE `tb_yayasan` (
  `id` int(11) NOT NULL,
  `kode_badan_hukum` varchar(125) NOT NULL,
  `nama_badan_hukum` varchar(125) NOT NULL,
  `telepon_yayasan` varchar(125) NOT NULL,
  `fax_yayasan` varchar(125) NOT NULL,
  `alamat_yayasan` text NOT NULL,
  `email_yayasan` varchar(125) NOT NULL,
  `website_yayasan` varchar(125) NOT NULL,
  `kota_yayasan` varchar(225) NOT NULL,
  `pos_yayasan` char(5) NOT NULL,
  `awal_berdiri` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_yayasan`
--

INSERT INTO `tb_yayasan` (`id`, `kode_badan_hukum`, `nama_badan_hukum`, `telepon_yayasan`, `fax_yayasan`, `alamat_yayasan`, `email_yayasan`, `website_yayasan`, `kota_yayasan`, `pos_yayasan`, `awal_berdiri`, `created_at`) VALUES
(1, '12345', 'Yayasan PGRI', '081218436055', '12131', 'asdsadsds', 'yayasan@gmail.com', 'http://localhost/siakad/dashboard/data-yayasan', 'Yogyakarta', '12344', '2023-02-01', '2023-03-15 06:44:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_yayasan`
--
ALTER TABLE `tb_yayasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_yayasan`
--
ALTER TABLE `tb_yayasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
