-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2025 pada 12.39
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpm_server_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hiv`
--

CREATE TABLE `data_hiv` (
  `id` bigint(20) NOT NULL,
  `kode_gejala` varchar(255) NOT NULL,
  `gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_hiv`
--

INSERT INTO `data_hiv` (`id`, `kode_gejala`, `gejala`) VALUES
(32, 'G001', 'pekerja seks, seks bebas, pengguna narkoba'),
(33, 'G002', 'Pasangan ODHA (orang yang terkena HIV/AIDS'),
(34, 'G003', 'Memiliki garis keturunan HIV/AIDS'),
(35, 'G004', 'Terjadi penurun berat badan lebih dari 10% dari berat badan semula'),
(36, 'G005', 'Sering berkeringan pada malam hari tanpa sebab dalam jangka waktu yang lama '),
(37, 'G006', 'Terjadi pembengkakan kelenjar tanpa  sebab  '),
(38, 'G007', 'Lelah/lesu secara berkelanjutan tanpa di ketahui sebabnya '),
(39, 'G008', 'Timbul luka di sekitar mulut dan sariawan'),
(40, 'G009', 'Muncul bintil berisi air pada tubuh dan terasa nyeri (Herpes Zoster)'),
(41, 'G010', 'Mengalami infeksi saluran penafasan yang terus berulang'),
(42, 'G011', 'Mengalami anemia '),
(43, 'G012', 'muncul bercak putih pada rongga mulut, nyeri saat makan atau menelan'),
(44, 'G013', 'Demam tanpa sebab selama lebih dari 1 bulan '),
(45, 'G014', 'Mengalami gangguan syarat (kesulitan berkosentrasi/hilang ingatan'),
(46, 'G015', 'Nyeri pada sendi/otot secara berkelanjutan tanpa diketahui penyebabnya'),
(47, 'G016', 'Mudah Memar/Berdarah Tanpa Sebab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_stadium`
--

CREATE TABLE `data_stadium` (
  `id` int(11) NOT NULL,
  `kode_stadium` varchar(200) DEFAULT NULL,
  `stadium` varchar(200) DEFAULT NULL,
  `konfirmasi_kode_gejala` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_stadium`
--

INSERT INTO `data_stadium` (`id`, `kode_stadium`, `stadium`, `konfirmasi_kode_gejala`) VALUES
(1, 'P001', 'HIV Stadium 1', '\"G001\", \"G002\", \"G003\", \"G004\", \"G008\", \"G010\", \"G015\", \"G016\"'),
(2, 'P002', 'HIV Stadium 2 ', '\"G001\", \"G002\", \"G003\", \"G004\", \"G008\", \"G009\", \"G010\", \"G015\", \"G016\"'),
(3, 'P003', 'HIV Stadium 3 ', '\"G001\", \"G002\", \"G003\", \"G004\", \"G008\", \"G009\", \"G010\", \"G011\", \"G012\", \"G013\", \"G015\",\"G016\"'),
(5, 'P004', 'AIDS', '\"G001\", \"G002\", \"G005\", \"G007\", \"G008\", \"G009\", \"G012\", \"G013\", \"G014\"');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_10_20_082413_create_data_hiv', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(6, 'vebrian', 'vebrianns01@gmail.com', '6a3ffc239b1a8a30b2f42b1ada653688', 'admin', NULL, NULL),
(7, 'vebrian', 'yannscodes@it.com', '360985856c8195db5f5a720f4492dce1', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_hiv`
--
ALTER TABLE `data_hiv`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_stadium`
--
ALTER TABLE `data_stadium`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `data_hiv`
--
ALTER TABLE `data_hiv`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `data_stadium`
--
ALTER TABLE `data_stadium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
