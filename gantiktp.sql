-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2019 pada 08.36
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gantiktp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kependudukan`
--

CREATE TABLE `kependudukan` (
  `NIK` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `RT` int(11) NOT NULL,
  `RW` int(11) NOT NULL,
  `Kelurahan` varchar(100) NOT NULL,
  `Kecamatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kependudukan`
--

INSERT INTO `kependudukan` (`NIK`, `Nama`, `Alamat`, `RT`, `RW`, `Kelurahan`, `Kecamatan`) VALUES
(12345678, 'Deni Dono', 'Jl. Rumah Deni', 2, 3, 'Putat Jaya', 'Sawahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan`
--

CREATE TABLE `permohonan` (
  `ID_Permohonan` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `RT` int(11) NOT NULL,
  `RW` int(11) NOT NULL,
  `Kelurahan` varchar(30) NOT NULL,
  `urlFoto` varchar(100) NOT NULL,
  `Alasan` varchar(200) NOT NULL,
  `NIK` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'DIPROSES'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permohonan`
--

INSERT INTO `permohonan` (`ID_Permohonan`, `Nama`, `Alamat`, `RT`, `RW`, `Kelurahan`, `urlFoto`, `Alasan`, `NIK`, `Status`) VALUES
(1, 'Vincent Tanujaya', 'Jl. Keputih Perintis 1 no 25, Surabaya', 1, 1, 'Keputih', 'TEST', 'rusak', '3323131', 'SELESAI'),
(2, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', 'public/img/fileupload/kHJHCL9YVhmiHR46VgChw6k7tNP3xu2wEM0UULpr.jpeg', 'hilang', '3323131', 'DITOLAK, Data KTP/Surat Tidak Sesuai'),
(3, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', 'img/fileupload/SGwf7VbHuNbF6GBg6tyYCyg5SX8UeP2tBcsMBDH4.jpeg', 'hilang', '3323131', 'DIPROSES'),
(4, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', 'public/zFUy60LP2c55tHNmQdIvqmaImvhnIbDXV0vShPNQ.jpeg', 'hilang', '3323131', 'DIPROSES'),
(5, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', 'public/ZsvGOz5lGiVSJYNtdVERn3PcYqNJRp3atmK9Mm0x.jpeg', 'hilang', '3323131', 'DIPROSES'),
(6, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', 'WIN_20180316_17_13_38_Pro.jpg', 'hilang', '3323131', 'DIPROSES'),
(7, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', 'WIN_20180316_17_13_38_Pro.jpg', 'hilang', '3323131', 'DIPROSES'),
(8, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', 'WIN_20180316_17_13_38_Pro.jpg', 'hilang', '3323131', 'DIPROSES'),
(9, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', '3323131_WIN_20180316_17_13_38_Pro.jpg', 'hilang', '3323131', 'DIPROSES'),
(10, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', '3323131_ivan fadhila.jpg', 'hilang', '3323131', 'DIPROSES'),
(11, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', '1_ivan fadhila.jpg', 'rusak', '1', 'DIPROSES'),
(12, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', '1_ivan fadhila.jpg', 'rusak', '1', 'DIPROSES'),
(13, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', '1_ivan fadhila.jpg', 'rusak', '1', 'DIPROSES'),
(14, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', '1_ivan fadhila.jpg', 'rusak', '1', 'DIPROSES'),
(15, 'Vincent Tanujaya', 'dsfsdfsd', 1, 1, 'Keputih', '1_ivan fadhila.jpg', 'rusak', '1', 'DIPROSES');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$7Tz4pfNKneVUZ7JK3/RdjuEa0bKxQ8cOBqkplsbuQwujQXnizKata', NULL, '2019-04-22 19:07:11', '2019-04-22 19:07:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kependudukan`
--
ALTER TABLE `kependudukan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`ID_Permohonan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `ID_Permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
