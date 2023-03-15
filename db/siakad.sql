-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 07:05 PM
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
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) DEFAULT NULL,
  `nip` char(20) DEFAULT NULL,
  `nama_dosen` varchar(200) DEFAULT NULL,
  `jenis_kelamin_dosen` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tempat_lahir_dosen` varchar(100) DEFAULT NULL,
  `tanggal_lahir_dosen` date DEFAULT NULL,
  `alamat_dosen` text DEFAULT NULL,
  `kode_pos_dosen` char(5) DEFAULT NULL,
  `no_telepon_dosen` char(13) DEFAULT NULL,
  `email_dosen` varchar(200) DEFAULT NULL,
  `kode_pt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `id` int(11) DEFAULT NULL,
  `kode_fak` int(11) DEFAULT NULL,
  `nama_fak` varchar(200) DEFAULT NULL,
  `kode_pt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) DEFAULT NULL,
  `hari` char(7) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `kode_program_studi` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) DEFAULT NULL,
  `nama_kelas` char(10) DEFAULT NULL,
  `id_program_studi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) DEFAULT NULL,
  `npm` char(20) DEFAULT NULL,
  `nama_mahasiswa` varchar(200) DEFAULT NULL,
  `jenis_kelamin_mahasiswa` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tempat_lahir_mahasiswa` varchar(200) DEFAULT NULL,
  `tanggal_lahir_mahasiswa` date DEFAULT NULL,
  `alamat_mahasiswa` text DEFAULT NULL,
  `kode_pos_mahasiswa` char(5) DEFAULT NULL,
  `no_telepon_mahasiswa` char(13) DEFAULT NULL,
  `email_mahasiswa` varchar(200) DEFAULT NULL,
  `kode_program_studi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `id_matakuliah` int(11) DEFAULT NULL,
  `nama_matakuliah` varchar(100) DEFAULT NULL,
  `sks` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) DEFAULT NULL,
  `npm` char(20) DEFAULT NULL,
  `id_mata_kuliah` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nilai` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id` int(11) DEFAULT NULL,
  `kode_prodi` int(11) DEFAULT NULL,
  `nama_prodi` varchar(200) DEFAULT NULL,
  `jenjang_pendidikan` varchar(50) DEFAULT NULL,
  `kode_pt` int(11) DEFAULT NULL,
  `kode_fak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pt`
--

CREATE TABLE `tb_pt` (
  `id_pt` int(11) NOT NULL,
  `kode_pt` int(11) DEFAULT NULL,
  `nama_pt` varchar(255) DEFAULT NULL,
  `alamat_pt` text DEFAULT NULL,
  `kode_pos_pt` char(5) DEFAULT NULL,
  `no_telepon_pt` char(13) DEFAULT NULL,
  `email_pt` varchar(255) DEFAULT NULL,
  `fax_pt` varchar(125) NOT NULL,
  `website_pt` varchar(125) NOT NULL,
  `awal_berdiri_pt` date NOT NULL,
  `logo_pt` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pt`
--

INSERT INTO `tb_pt` (`id_pt`, `kode_pt`, `nama_pt`, `alamat_pt`, `kode_pos_pt`, `no_telepon_pt`, `email_pt`, `fax_pt`, `website_pt`, `awal_berdiri_pt`, `logo_pt`) VALUES
(1, 50510, 'Universitas PGRI Yogyakarta', 'Bantul Yogyakarta', '12345', '081218436055', 'pgri.yogyakarta@gmail.com', '12345678', 'https://upt.ac.id', '2023-03-01', 'file_banner64119c2904307-20231503.png');

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
(1, '1234333212', 'Yayasan PGRI Yogyakarta', '08121843644', '12131', 'Jl. Kenangan 21', 'yayasan@gmail.com', 'https://www.upy.ac.id', 'Yogyakarta, Bantul', '55182', '2002-06-17', '2023-03-15 17:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(20) NOT NULL,
  `nama_users` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email_users` varchar(200) NOT NULL,
  `pass_users` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama_users`, `username`, `email_users`, `pass_users`, `level`, `created_at`) VALUES
(1, 'Administrator', 'admin', 'administrator@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '2023-03-13 04:26:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pt`
--
ALTER TABLE `tb_pt`
  ADD PRIMARY KEY (`id_pt`);

--
-- Indexes for table `tb_yayasan`
--
ALTER TABLE `tb_yayasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pt`
--
ALTER TABLE `tb_pt`
  MODIFY `id_pt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_yayasan`
--
ALTER TABLE `tb_yayasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
