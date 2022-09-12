-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Sep 2022 pada 06.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl_database_3`
--

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_09_04_030324_create_pengaduans_table', 1),
(12, '2022_09_04_030534_create_tanggapans_table', 1);

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
-- Struktur dari tabel `pengaduans`
--

CREATE TABLE `pengaduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `alamat_pelapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pelapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pelaku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pelaku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kronologis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum diproses',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaduans`
--

INSERT INTO `pengaduans` (`id`, `user_nik`, `name`, `user_id`, `alamat_pelapor`, `email`, `no_hp`, `opd`, `jabatan_pelapor`, `nama_pelaku`, `jabatan_pelaku`, `kronologis`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '3567876567', 'Ucup', 1, 'Jakarta', 'ucup@gmail.com', '087656783876', 'Bogor', 'Kepala Bidang', 'Bambang', 'Staff', 'fghjkvcvbnm', 'Sedang di Proses', NULL, '2022-09-04 18:39:41', '2022-09-04 18:39:41'),
(2, '3567876567', 'Ucup', 1, 'Bogor', 'ucup@gmail.com', '079397468', 'Bandung', 'Kepala Bidang', 'Susi', 'Staff', 'ghjkhghjk', 'Selesai', NULL, '2022-09-04 18:54:54', '2022-09-04 18:54:54'),
(3, '3567876567', 'Ucup', 1, 'Purwokerto', 'ucup@gmail.com', '0899689869', 'Purwokerto', 'Kepala Bidang', 'Asep', 'Staff', 'fghjkkhg', 'Belum diproses', NULL, '2022-09-04 18:59:11', '2022-09-04 18:59:11'),
(4, '3567876567', 'Ucup', 1, 'Pekalongan', 'ucup@gmail.com', '08773890768', 'Pekalongan', 'Kepala Bidang', 'Ujang', 'Staff', 'fghjkjhgghjk', 'Belum diproses', '2022-09-06 06:53:37', '2022-09-04 19:02:58', '2022-09-06 06:53:37'),
(5, '12345678901', 'kai', 2, 'kalimanah', 'kai@gmail.com', '12345678901', 'kalimanah', 'pns', 'supri', 'maling', 'maling motor pada siang hari', 'Belum diproses', NULL, '2022-09-04 20:57:34', '2022-09-04 20:57:34'),
(6, '12345678901', 'kai', 2, 'Purbalingga Wetan', 'kai@gmail.com', '0812345678901', 'Pegawai Bank BNI', 'Kepala Cabang', 'Sutrisno', 'Serabutan', 'membobol atm dijalan mt.haryono tepatnya sebelah mixue. jam kejadian pada pukul dini hari sekitar jam 02.00 korban membobol atm yang bernominal 50rban, korban menggunakan linggis sebagai media untuk merusak mesin', 'Belum diproses', '2022-09-09 02:57:41', '2022-09-04 21:10:11', '2022-09-09 02:57:41'),
(7, '5579386797', 'Khanif', 11, 'Purwokerto', 'khanif@gmail.com', '08547624896', 'Purbalingga', 'Ketua', 'Rafli', 'Staff', 'korupsi', 'Sedang di Proses', NULL, '2022-09-09 02:55:20', '2022-09-09 02:55:20'),
(8, '3567876567', 'Ucup', 1, 'Pekalongan', 'ucup@gmail.com', '0856823899', 'Pekalongan', 'Kepala', 'Ujang', 'Staff', 'Korupsi 3M', 'Belum diproses', NULL, '2022-09-12 04:19:08', '2022-09-12 04:19:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapans`
--

CREATE TABLE `tanggapans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengaduan_id` int(11) NOT NULL,
  `tanggapan` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `petugas_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tanggapans`
--

INSERT INTO `tanggapans` (`id`, `pengaduan_id`, `tanggapan`, `petugas_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Akan ditindak lanjuti', 5, '2022-09-06 08:44:31', '2022-09-06 08:44:31'),
(2, 2, 'ok', 5, '2022-09-06 08:45:00', '2022-09-06 08:45:00'),
(3, 7, 'dalam proses', 5, '2022-09-09 02:57:34', '2022-09-09 02:57:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nik`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, '3567876567', 'Ucup', 'ucup@gmail.com', '09876567836', NULL, '$2y$10$oA1wsf0IATKvn.Od/Gt1QuZrXNaURrjptf/UP3Em0WAqcViYW4hjO', NULL, '2022-09-04 18:39:01', '2022-09-04 18:39:01', 'USER'),
(2, '12345678901', 'kai', 'kai@gmail.com', '12345678901', NULL, '$2y$10$BvqgZmyGRTk4vsjyXUkGt.3nftA0QuUwtLuIJSGklW86Brlg4zxJ2', NULL, '2022-09-04 20:55:31', '2022-09-04 20:55:31', 'USER'),
(4, '1257754757', 'Admin', 'admin@gmail.com', '08347247968', NULL, '$2y$10$bxn7y1sVrcKsG7jZanWyjek9zwH1PVFCs6ribW7CUWDcDMVU2mEDC', NULL, '2022-09-05 07:55:23', '2022-09-05 07:55:23', 'ADMIN'),
(5, '357825701', 'Admin1', 'admin1@gmail.com', '0855739257819', NULL, '$2y$10$QWUeATkbRqNr7M/nJ21OXeu1GbO0JaNLZuDfkAqYyM4/rECILkyKi', NULL, '2022-09-05 10:46:04', '2022-09-05 10:46:04', 'ADMIN'),
(9, '2547876278', 'Admin2', 'admin2@gmail.com', '0812446789', NULL, '$2y$10$SrRHsr7BxPDcA/ll7TWy2uQQHi7miyR8XkSk0jGBRpZ/mWNbbVxBa', NULL, '2022-09-08 06:15:38', '2022-09-08 06:15:38', 'ADMIN'),
(10, '6789954689', 'User21', 'user21@gmail.com', '0812458989', NULL, '$2y$10$EUjunM42Vr6msNqnMcGOYurqVq1MEN3xiYLfObIVbLqJddN05Ns6i', NULL, '2022-09-08 06:15:38', '2022-09-08 06:15:38', 'USER'),
(11, '5579386797', 'Khanif', 'khanif@gmail.com', '08548996489', NULL, '$2y$10$XUGd/5yl1WiULVaWPWy3NOT7xa7RBHHYmDtYAuGIpvNg6ADoEA0gG', NULL, '2022-09-09 02:53:40', '2022-09-09 02:53:40', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tanggapans`
--
ALTER TABLE `tanggapans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tanggapans`
--
ALTER TABLE `tanggapans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
