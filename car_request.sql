-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2023 pada 03.31
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

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
  `notif_user` int(11) NOT NULL DEFAULT 0,
  `notif_security` int(11) NOT NULL DEFAULT 0,
  `notif_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nik`, `nama`, `section`, `tujuan`, `alasan`, `keberangkatan`, `status_spv`, `status_manager`, `status_ga`, `security`, `notif_supervisor`, `notif_manager`, `notif_ga`, `notif_user`, `notif_security`, `notif_admin`) VALUES
(15, '522125', 'aini', 'Assy', 'plan 3', 'CMU', '07.15', 'diterima', 'diterima', 'Diterima', NULL, 1, 1, 1, 1, 1, 0),
(16, '221985', 'diana', 'Assy', 'plan 3', 'alphard', '08.45', 'diterima', 'diterima', 'Diterima', NULL, 1, 1, 1, 1, 1, 0),
(17, '522125', 'nur aini', 'Assy', 'plan 3', 'meeting', '10.00', NULL, NULL, 'Diterima', NULL, 1, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(200) NOT NULL,
  `plan1` varchar(200) NOT NULL,
  `plan3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `plan1`, `plan3`) VALUES
(6, '07:15', '07:30'),
(7, '08:45', '09:00'),
(8, '09:45', '10:00'),
(9, '10:45', '11:00'),
(10, '11:45', '12:00'),
(11, '11:30  ', '11:45 '),
(12, '13:00', '13:15'),
(13, '13:10', '13:25'),
(14, '14:00', '14:15'),
(15, '15:00', '15:15'),
(16, '16:00', '16:15'),
(17, '17:30', '17:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'nur aini', 'sumitomo', 'admin'),
(2, 'general affairs', 'sumitomo', 'GA'),
(3, 'general affairs', 'sumitomo', 'GA'),
(4, 'sumitomo', 'sumitomo', 'security'),
(5, 're', 're', 'user'),
(6, 'asmuin', 'sumitomo', 'manager'),
(7, 'imam', 'sumitomo', 'supervisor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
