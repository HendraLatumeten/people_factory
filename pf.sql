-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2019 pada 13.11
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

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
-- Struktur dari tabel `boot_mode`
--

CREATE TABLE `boot_mode` (
  `user_id` int(12) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` int(12) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `profil` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE `pelamar` (
  `tgl_daftar` date DEFAULT NULL,
  `user_id` int(12) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nik` int(16) NOT NULL,
  `tmpt_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `rt_rw` varchar(8) DEFAULT NULL,
  `desa_kel` varchar(50) DEFAULT NULL,
  `kec` varchar(50) DEFAULT NULL,
  `kab_kota` varchar(50) DEFAULT NULL,
  `prov` varchar(50) DEFAULT NULL,
  `kd_pos` int(6) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `pendidikan_terakhir` varchar(10) DEFAULT NULL,
  `no_ijazah` varchar(20) DEFAULT NULL,
  `no_hp` int(12) DEFAULT NULL,
  `profil` varchar(225) DEFAULT NULL,
  `ktp` varchar(225) DEFAULT NULL,
  `ijazah` varchar(225) DEFAULT NULL,
  `spk_1` varchar(225) DEFAULT NULL,
  `spk_2` varchar(225) DEFAULT NULL,
  `spk_3` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `boot_mode`
--
ALTER TABLE `boot_mode`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
