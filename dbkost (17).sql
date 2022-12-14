-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2022 at 07:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kostapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `fasilitas` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `fasilitas`, `created_at`, `updated_at`) VALUES
(3, 'listrik, tv, ac', '2022-11-23 08:18:12', '2022-12-11 19:06:42'),
(4, 'Kipas Angin + TV + AC + Kompor', '2022-11-26 21:57:00', '2022-11-29 22:25:50'),
(8, 'AC + TV + Meja Belajar + Wifi', '2022-12-08 04:44:43', '2022-12-08 04:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE `kost` (
  `id` int(11) NOT NULL,
  `nama_kost` varchar(45) NOT NULL,
  `luas_kamar` varchar(45) NOT NULL,
  `harga_kamar` int(11) NOT NULL,
  `alamat_kost` varchar(45) NOT NULL,
  `keterangan` varchar(45) NOT NULL,
  `id_fasilitas` int(11) DEFAULT NULL,
  `foto_kamar` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kota_id` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`id`, `nama_kost`, `luas_kamar`, `harga_kamar`, `alamat_kost`, `keterangan`, `id_fasilitas`, `foto_kamar`, `created_at`, `updated_at`, `kota_id`, `id_user`) VALUES
(5, 'Kamar Cendana', '10 x 8', 1000000, 'Jakarta Barat', 'Tersedia', 3, 'foto_kamar-10 x 8.jpg', '2022-11-24 23:47:44', '2022-11-26 22:02:56', 1, 0),
(6, 'Kamar Black', '10 x 10', 70000000, 'Jalan cijantung', 'Kosong', 4, 'foto_kamar-10 x 10.png', '2022-11-30 00:35:20', '2022-12-03 10:05:12', 1, 0),
(10, 'fffdhfhfhfdgdfgdfgdfg', '5 x 8', 70000000, 'hhdhdfhdhdhdh', 'fhfhfh', 4, '', '2022-12-06 20:04:03', '2022-12-06 20:04:54', 4, 7),
(12, 'Kost Warna Warni Kelabu', '10 x 8', 1200000, 'Kebayoran Lama', 'Tersedia', 3, NULL, '2022-12-08 06:20:35', '2022-12-08 06:20:35', 3, 1),
(17, 'sfsfs', '10 x 8', 1000000, 'ryrtyryryryryr', 'Kosong', 8, '', '2022-12-11 19:23:44', NULL, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama_kota` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama_kota`) VALUES
(1, 'Jakarta'),
(3, 'Depok'),
(4, 'Tanggerang'),
(5, 'Bekasi'),
(6, 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('asepsahrudin0399@gmail.com', '$2y$10$J2tpIDJqFMmgxoLiZk4i8uVk90GU9bLK/sHGiHwjU0cJAIetTK2iq', '2022-11-30 01:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `kode_bayar` varchar(45) NOT NULL,
  `tanggal_masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_keluar` date NOT NULL,
  `total_bayar` double NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `kode_bayar`, `tanggal_masuk`, `tanggal_keluar`, `total_bayar`, `id_kamar`, `id_user`) VALUES
(3, 'A1115', '2022-03-11 17:00:00', '2022-04-12', 700000, 4, 0),
(4, 'A124', '2022-12-08 14:46:29', '2022-11-19', 7000000000, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi_kost`
--

CREATE TABLE `rekomendasi_kost` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `kost_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekomendasi_kost`
--

INSERT INTO `rekomendasi_kost` (`id`, `created_at`, `kost_id`) VALUES
(4, '2022-12-02 17:05:22', 6),
(5, '2022-12-07 06:03:34', 10),
(6, '2022-12-07 06:05:18', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','customer','pemilik') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` bigint(20) NOT NULL,
  `foto_user` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `pekerjaan`, `telp`, `foto_user`, `alamat`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'budi santoso', 'budi@gmail.com', 'customer', 'Programmer', 24234, 'budi.jpg', NULL, NULL, 'password', NULL, '2022-11-22 10:11:57', '2022-12-10 01:27:20'),
(3, 'Wahyu Rohmanto', 'wahyu@gmail.com', 'admin', 'Programmer', 0, 'wahyu.jpg', NULL, NULL, '$2y$10$cRSS0tL1rdl9neSYIZw/vulUxz432cGxKNMYZ6XT6Rv66oB6XvEQG', NULL, '2022-11-27 02:20:29', '2022-11-27 02:20:29'),
(4, 'mariam', 'mariam@gmail.com', 'pemilik', 'jajsfkljf', 654564564, NULL, NULL, NULL, '$2y$10$a3pV2TQmoVPoK7dUdTuOBOgIr1QisJNSNSxuzyS0WZTa9Y6EFv/8.', NULL, '2022-11-27 02:24:29', '2022-12-13 23:38:01'),
(5, 'Wahyu Rohmanto', 'wahyu1@gmail.com', 'customer', 'Mahasiswa', 85156452479, NULL, NULL, NULL, '$2y$10$DfIa817NPIB65IOf.m9VuOjhKQcCjli0KPpqEkObXeFpXVhrp.YKC', NULL, '2022-12-03 06:29:08', '2022-12-03 06:29:08'),
(7, 'mariam', '', 'pemilik', 'jajsfkljf', 654564564, NULL, NULL, NULL, '$2y$10$a3pV2TQmoVPoK7dUdTuOBOgIr1QisJNSNSxuzyS0WZTa9Y6EFv/8.', NULL, '2022-12-03 06:49:33', '2022-12-03 06:49:33'),
(10, 'bambang', 'bambang@gmail.com', 'customer', 'sfsddfs', 4234, NULL, NULL, NULL, '$2y$10$KDNg1la7CoiqFYrJGWxKieNMO3MGWg6PxR3Po6fcaFcQtKD2ZeSf6', NULL, '2022-12-10 01:30:41', '2022-12-10 01:36:11'),
(11, 'siti', 'siti@gmail.com', 'customer', 'mahasiswa', 2424234, NULL, NULL, NULL, '$2y$10$Cw5us1Ds5y0uSIiWLwBybenWwMTH92ZCqPs50Q4wKomVPQBgZC2fS', NULL, '2022-12-11 06:38:11', '2022-12-11 06:38:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fasilitas` (`id_fasilitas`),
  ADD KEY `fk_kost_kota1` (`kota_id`),
  ADD KEY `fk_kost_users1_idx` (`id_user`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pembayaran_kost1` (`id_kamar`),
  ADD KEY `fk_pembayaran_users1_idx` (`id_user`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rekomendasi_kost`
--
ALTER TABLE `rekomendasi_kost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rekomendasi_kost_kost1` (`kost_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kost`
--
ALTER TABLE `kost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekomendasi_kost`
--
ALTER TABLE `rekomendasi_kost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kost`
--
ALTER TABLE `kost`
  ADD CONSTRAINT `fk_kost_kota1` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kost_users1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `kost_ibfk_2` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran_users1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rekomendasi_kost`
--
ALTER TABLE `rekomendasi_kost`
  ADD CONSTRAINT `fk_rekomendasi_kost_kost1` FOREIGN KEY (`kost_id`) REFERENCES `kost` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
