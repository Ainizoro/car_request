-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2023 pada 12.49
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_request`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `section` varchar(50) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `alasan` varchar(1000) NOT NULL,
  `keberangkatan` varchar(200) NOT NULL,
  `status_spv` varchar(100) DEFAULT NULL,
  `status_manager` varchar(100) DEFAULT NULL,
  `status_ga` varchar(100) DEFAULT NULL,
  `security` varchar(100) DEFAULT NULL,
  `notif_supervisor` int(11) NOT NULL DEFAULT 0,
  `notif_manager` int(11) NOT NULL DEFAULT 0,
  `notif_ga` int(11) NOT NULL DEFAULT 0,
  `notif_user` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nik`, `nama`, `section`, `tujuan`, `alasan`, `keberangkatan`, `status_spv`, `status_manager`, `status_ga`, `security`, `notif_supervisor`, `notif_manager`, `notif_ga`, `notif_user`) VALUES
(1, '522125', 'aini', 'Assy', 'plan 3', 'prius', '10:45', 'diterima', 'diterima', 'diterima', NULL, 1, 1, 1, 1),
(2, '221985', 'diana', 'Assy', 'plan 3', 'prius', '10:45', 'ditolak', 'diterima', 'ditolak', NULL, 1, 1, 1, 1),
(3, '1234', 'Coba', 'HR', 'Tujuan', 'Alasan', '19:00', 'diterima', 'diterima', 'diterima', NULL, 1, 1, 1, 1),
(7, '123', 'Ilham', 'CC', 'Tujuan', 'Alasan', '13:00', 'diterima', 'diterima', 'ditolak', NULL, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(200) NOT NULL,
  `plan1` varchar(200) NOT NULL,
  `plan3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `plan1`, `plan3`) VALUES
(12, '08:45', '09:00'),
(0, '09:45', '10:45'),
(0, '07:15', '07:30'),
(0, '08:45', '09:00'),
(0, '09:45', '10:00'),
(0, '10:45', '11:00'),
(0, '11:45', '12:00'),
(0, '13:00', '13:15'),
(0, '14:00', '14:15'),
(0, '15:00', '15:15'),
(0, '16:00', '16:15'),
(0, '17:30', '17:45'),
(0, '', ''),
(0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(200) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `hak_akses` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'nur aini', 'sumitomo', 'admin'),
(2, 'zoro', 'sumitomo', 'manager'),
(3, 'imam', 'sumitomo', 'supervisor'),
(4, 'asmuin', 'sumitomo', 'manager'),
(5, 'zoroga', 'sumitomo', 'GA'),
(6, 'aini', 'aini123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
