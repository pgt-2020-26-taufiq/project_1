-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2020 pada 08.02
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aritmatika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjumlahan`
--

CREATE TABLE `penjumlahan` (
  `id` int(10) NOT NULL,
  `a` double NOT NULL,
  `b` double NOT NULL,
  `c` double NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjumlahan`
--

INSERT INTO `penjumlahan` (`id`, `a`, `b`, `c`, `keterangan`) VALUES
(30, 1, 1, 2, 'Nilai D'),
(31, 1, 1, 2, 'Nilai D'),
(32, 1, 1, 2, 'Nilai D'),
(33, 3, 3, 6, 'Nilai D'),
(34, 3, 3, 6, 'Nilai D'),
(35, 3, 3, 6, 'Nilai D'),
(36, 2, 6, 8, 'Nilai D'),
(37, 2, 6, 8, 'Nilai D'),
(38, 1, 4, 5, 'Nilai D'),
(39, 1, 9, 10, 'Nilai D'),
(40, 1, 9, 10, 'Nilai D'),
(41, 5120, 10240, 10240, 'Nilai A'),
(42, 512, 1024, 1024, 'Nilai A');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penjumlahan`
--
ALTER TABLE `penjumlahan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penjumlahan`
--
ALTER TABLE `penjumlahan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
