-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2019 at 12:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pf`
--

-- --------------------------------------------------------

--
-- Table structure for table `boot_mode`
--

CREATE TABLE `boot_mode` (
  `user_id` int(12) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `profil` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boot_mode`
--

INSERT INTO `boot_mode` (`user_id`, `username`, `password`, `nama`, `email`, `no_hp`, `jenis_kelamin`, `profil`) VALUES
(3, 'admin', 'admin', 'admin', 'admin@gmail.com', '342342', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `user_id` int(12) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `tmpt_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `rt_rw` varchar(8) DEFAULT NULL,
  `desa_kel` varchar(50) DEFAULT NULL,
  `kec` varchar(50) DEFAULT NULL,
  `kab_kota` varchar(50) DEFAULT NULL,
  `prov` varchar(50) DEFAULT NULL,
  `kd_pos` int(6) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `pendidikan_terakhir` varchar(10) DEFAULT NULL,
  `no_ijazah` varchar(20) DEFAULT NULL,
  `profil` varchar(225) DEFAULT NULL,
  `ktp` varchar(225) DEFAULT NULL,
  `ijazah` varchar(225) DEFAULT NULL,
  `spk_1` varchar(225) DEFAULT NULL,
  `spk_2` varchar(225) DEFAULT NULL,
  `spk_3` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`user_id`, `username`, `password`, `nama`, `email`, `no_hp`, `jenis_kelamin`, `tgl_daftar`, `nik`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `rt_rw`, `desa_kel`, `kec`, `kab_kota`, `prov`, `kd_pos`, `agama`, `pendidikan_terakhir`, `no_ijazah`, `profil`, `ktp`, `ijazah`, `spk_1`, `spk_2`, `spk_3`) VALUES
(2, 'hata', 'hata', 'hata', 'hata@gmail.com', '081218114681', 'L', '2019-11-11', '2321312334234', 'jakarta', '1996-12-06', 'Komplek Bukit Pamulang Indah blok b14 no 2', '02/04', 'Pamulang', 'Pamulang timur', 'Tangerang Selatan', 'Banten', 1515, 'islam', 'SMK', '34343433425355', 'find_user.png', 'find_user.png', 'find_user.png', 'find_user.png', 'find_user.png', 'find_user.png'),
(6, 'mareta', '123', 'Mareta Muslimawati', 'mareta@gmail.com', '8347234314', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boot_mode`
--
ALTER TABLE `boot_mode`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boot_mode`
--
ALTER TABLE `boot_mode`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
