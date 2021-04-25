-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2021 pada 00.38
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_webservice`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matakuliah_id` bigint(20) UNSIGNED NOT NULL,
  `sks` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `matakuliah_id`, `sks`, `NIP`, `Name`, `Address`, `created_at`, `updated_at`) VALUES
(1, 6, 3, 7006001, 'Intan P G Suherman', 'Jl. KhoerAffandi', '2021-04-23 13:01:08', '2021-04-23 13:01:08'),
(2, 5, 3, 7006002, 'Rio Muhammad Anugerah', 'Bandung Raya', '2021-04-23 13:04:09', '2021-04-23 13:04:09'),
(3, 8, 1, 7006003, 'Fatimah Azzahra', 'Madinah', '2021-04-23 13:15:53', '2021-04-23 13:15:53'),
(4, 9, 2, 7006004, 'Syyidina Ali', 'Madinah', '2021-04-23 13:20:13', '2021-04-23 13:20:13'),
(5, 1, 3, 7006005, 'Satria Bhayangkara', 'Makasar', '2021-04-23 13:21:18', '2021-04-23 13:21:18'),
(6, 1, 3, 7006006, 'Permata', 'Tasikmalaya', '2021-04-25 02:00:24', '2021-04-25 03:26:20'),
(7, 9, 2, 7006007, 'Dilan', 'Malang', '2021-04-25 02:01:51', '2021-04-25 02:01:51'),
(8, 8, 1, 7006008, 'Yoga', 'Sekolah', '2021-04-25 04:11:33', '2021-04-25 04:11:33'),
(9, 5, 3, 7006009, 'Angga', 'Unsil', '2021-04-25 04:27:59', '2021-04-25 04:36:22'),
(10, 7, 1, 7006010, 'Dzikiri', 'Tasikmalaya City', '2021-04-25 04:50:20', '2021-04-25 04:50:20'),
(11, 10, 2, 7006111, 'Dimas', 'Awipari', '2021-04-25 06:06:03', '2021-04-25 06:06:03'),
(12, 1, 3, 7006112, 'Intan PGS', 'UTS WEB SERVICE - JSON TO DB', '2021-04-25 12:08:41', '2021-04-25 12:08:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama_mk`, `sks`, `created_at`, `updated_at`) VALUES
(1, 'WEB SERVICE', 3, '2021-04-23 19:38:43', '2021-04-23 19:38:43'),
(2, 'REKAYASA SISTEM INFORMASI', 3, '2021-04-23 19:38:43', '2021-04-23 19:38:43'),
(3, 'INTELIJEN BISNIS', 3, '2021-04-23 19:42:02', '2021-04-23 19:42:02'),
(4, 'DATA MINING', 3, '2021-04-23 19:42:02', '2021-04-23 19:42:02'),
(5, 'BIG DATA', 3, '2021-04-23 19:44:42', '2021-04-23 19:44:42'),
(6, 'TATA KELOLA DAN AUDIT', 3, '2021-04-23 19:44:42', '2021-04-23 19:44:42'),
(7, 'PRAKTIKUM PWEB', 1, '2021-04-23 19:46:07', '2021-04-23 19:46:07'),
(8, 'PRAKTIKUM JARKOM', 1, '2021-04-23 19:46:07', '2021-04-23 19:46:07'),
(9, 'SOSIOTEKNOLOGI', 2, '2021-04-23 20:17:26', '2021-04-23 20:17:26'),
(10, 'KPPO', 2, '2021-04-23 20:17:26', '2021-04-23 20:17:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_23_191807_create_dosen_table', 2),
(5, '2021_04_23_192255_create_matakuliah_table', 3),
(6, '2021_04_23_192607_add_matakuliah_id_to_dosen_table', 4),
(7, '2021_04_23_200021_add_sks_to_dosen_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Intan P G Suherman', 'uts_ws@gmail.com', NULL, '$2y$10$ZEgV3.RzEz2c4chUsN3XNOAm/fnDBFRBOJh3OUonSQhElSH1BGZjK', NULL, '2021-04-23 12:30:49', '2021-04-23 12:30:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`id`,`NIP`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
