-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 03:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tukumobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `C1` varchar(255) NOT NULL,
  `C2` varchar(255) NOT NULL,
  `C3` varchar(255) NOT NULL,
  `C4` varchar(255) NOT NULL,
  `C5` varchar(255) NOT NULL,
  `kriteria_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `nama`, `C1`, `C2`, `C3`, `C4`, `C5`, `kriteria_id`, `created_at`, `updated_at`) VALUES
(1, 'Daihatsu Great New Xenia', '140', '80', '1200', '7', '25', NULL, '2023-06-21 06:26:16', '2023-06-21 06:26:16'),
(2, 'Toyota Innova', '168', '60', '2000', '7', '25', NULL, '2023-06-21 06:26:54', '2023-06-21 06:34:06'),
(3, 'Honda Brio', '155', '90', '1500', '5', '50', NULL, '2023-06-21 06:27:21', '2023-06-21 06:27:21'),
(4, 'Toyota Agya', '115', '70', '1000', '5', '50', NULL, '2023-06-21 06:28:16', '2023-06-21 06:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bobot` varchar(255) NOT NULL,
  `atribut` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriterias`
--

INSERT INTO `kriterias` (`id`, `kode`, `nama`, `bobot`, `atribut`, `created_at`, `updated_at`) VALUES
(1, 'C1', 'Harga', '3', 'cost', '2023-06-21 06:19:41', '2023-06-21 06:19:41'),
(2, 'C2', 'Tahun', '2', 'benefit', '2023-06-21 06:20:10', '2023-06-21 06:20:10'),
(3, 'C3', 'Kapasitas Mesin(cc)', '2', 'benefit', '2023-06-21 06:20:55', '2023-06-21 06:20:55'),
(4, 'C4', 'Kapasitas Penumpang', '2', 'benefit', '2023-06-21 06:21:23', '2023-06-21 06:21:23'),
(5, 'C5', 'Transmisi', '1', 'benefit', '2023-06-21 06:21:42', '2023-06-21 06:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor` char(13) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `nomor`, `subjek`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Nurliesia', 'Nurliesia@gmail.com', '089826561721', 'Kesan', 'Website sangat intetraktiv', '2023-06-28 02:33:41', '2023-06-28 02:33:41'),
(2, 'Aisyatun', 'ais@gmail.com', '088674646543', 'Pesan', 'Bagaimana cara menjual mobil disini?', '2023-06-28 04:07:12', '2023-06-28 04:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_18_150042_create_mobils_table', 1),
(6, '2023_06_21_122720_create_kriterias_table', 2),
(7, '2023_06_21_122739_create_alternatifs_table', 2),
(8, '2023_06_28_090513_create_messages_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mobils`
--

CREATE TABLE `mobils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `harga` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `kilometer` int(11) NOT NULL,
  `bahan_bakar` varchar(255) NOT NULL,
  `kapasitas_mesin` int(11) NOT NULL,
  `tipe_mobil` varchar(255) NOT NULL,
  `jml_kursi` int(11) NOT NULL,
  `transmisi` varchar(255) NOT NULL,
  `warna` enum('Merah','Silver','Abu-Abu','Hitam','Putih') NOT NULL,
  `merek` varchar(10) NOT NULL,
  `pemilik` varchar(255) NOT NULL,
  `alamat_pemilik` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `ketersediaan` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobils`
--

INSERT INTO `mobils` (`id`, `nopol`, `nama`, `slug`, `gambar`, `harga`, `tahun`, `kilometer`, `bahan_bakar`, `kapasitas_mesin`, `tipe_mobil`, `jml_kursi`, `transmisi`, `warna`, `merek`, `pemilik`, `alamat_pemilik`, `deskripsi`, `ketersediaan`, `created_at`, `updated_at`) VALUES
(25, 'G1693PYQ', 'Daihatsu Xenia', 'daihatsu-xenia', 'assets/mobil/SLyoc5WsNCDkZPFQp9fwXaH6LBCTBeygoqUx79Cq.png', 140, '2018', 129256, 'Bensin', 1200, 'MPV', 7, 'Manual', 'Silver', 'Daihatsu', 'Riky Raharjo', 'Bulakamba, Brebes', 'Kondisi Mobil Sangat baik, AC nyala, mesin mash bagus, tidak ada lecet', 'tersedia', '2023-06-28 03:47:13', '2023-06-28 03:47:13'),
(26, 'G2725KVE', 'Toyota Innova', 'toyota-innova', 'assets/mobil/tCoLK0KGkYDjDOeEsSpcTlIyel9e3JIwpqx9qFMu.png', 168, '2014', 128575, 'Bensin', 2000, 'MPV', 7, 'Manual', 'Abu-Abu', 'Toyota', 'Kartika Devi', 'Demangharjo', 'Mesin yang sudah maksimal, dijual karena butuh', 'tersedia', '2023-06-28 03:49:44', '2023-06-28 03:49:44'),
(27, 'G2113FFK', 'Honda Brio', 'honda-brio', 'assets/mobil/09A6HqLTTLYg2f2BUWSBNV9FEdLCpuGN6B6GXXBH.png', 155, '2020', 32564, 'Bensin', 1500, 'Hatchback', 5, 'Matic', 'Silver', 'Honda', 'Hasnita', 'Limbangan, Brebes', 'Kondisi Mobil sangat oke', 'tersedia', '2023-06-28 03:51:48', '2023-06-28 03:51:48'),
(28, 'G2187SKS', 'Toyota Agya', 'toyota-agya', 'assets/mobil/5IeU8CNiLOIJfrckg8cn07VCR2huHEA2I4mOZIVh.png', 115, '2016', 120571, 'Solar', 1000, 'Hatchback', 5, 'Matic', 'Merah', 'Toyota', 'Bima', 'Slawi', 'Ac Oke, Mesin Oke', 'tersedia', '2023-06-28 03:53:30', '2023-06-28 03:53:30'),
(29, 'G1500HFI', 'Daihatsu Ayla', 'daihatsu-ayla', 'assets/mobil/KAB0wmjdsy6umCmUKhjJKOmAQGrp4x9Rcz7Qo1NZ.png', 145, '2022', 10261, 'Bensin', 1200, 'Hatchback', 5, 'Matic', 'Merah', 'Daihatsu', 'Shulthon', 'Suradadi', 'Okee bangett nih mobil', 'tersedia', '2023-06-28 03:55:34', '2023-06-28 03:55:34'),
(30, 'G1056NMQ', 'Daihatsu Terios', 'daihatsu-terios', 'assets/mobil/vxGCLThZNL8fkaGrnFhTgGSRtGo6cWq0tDsXKtfN.png', 122, '2011', 137989, 'Solar', 1500, 'SUV', 7, 'Matic', 'Putih', 'Daihatsu', 'Rakhma', 'Pemalang', 'Tidak ada deskripsi', 'tersedia', '2023-06-28 03:59:01', '2023-06-28 03:59:01'),
(31, 'G2862TYY', 'Daihatsu Sigra', 'daihatsu-sigra', 'assets/mobil/F1YBHSPO5Y1ZBJ8OAApmqQxyJNsCYpdyE530BycA.png', 105, '2019', 63641, 'Bensin', 1000, 'MPV', 7, 'Manual', 'Hitam', 'Daihatsu', 'Atikah', 'Batang', 'Dijual Cepat', 'tersedia', '2023-06-28 04:01:06', '2023-06-28 04:01:06'),
(32, 'G2770SZE', 'Suzuki Ignis', 'suzuki-ignis', 'assets/mobil/hcn8anOCGPdCstgC7g4qP2MGuYbxlkh9Px6C9YnD.png', 135, '2017', 62227, 'Bensin', 1200, 'SUV', 7, 'Manual', 'Merah', 'Suzuki', 'Putra', 'Pekalongan', 'Semuanya Oke', 'tersedia', '2023-06-28 04:02:44', '2023-06-28 04:02:44'),
(33, 'G3850YQ', 'Nissan Grand Livina', 'nissan-grand-livina', 'assets/mobil/8KX2mnasgsjU3tzFh3JeDdnPqo20FSsSn7RhLf94.png', 110, '2013', 100789, 'Solar', 1500, 'Hatchback', 7, 'Matic', 'Hitam', 'Nissan', 'Ivan', 'Bojongsana', 'Semuanya Oke kecuali Ac servis dikit', 'tersedia', '2023-06-28 04:06:05', '2023-06-28 04:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fadila', 'admin@tukumobil.com', NULL, '$2y$10$iupTK1iS..JJ7jR7/BI.a.3j/MM7MSAWPQDcMKQFyWtfUElOO0Jia', 1, NULL, '2023-06-19 06:05:14', '2023-06-19 06:05:14'),
(2, 'ayasya', 'ayasya@user.com', NULL, '$2y$10$NlJ6Qoh/d/kGNnzA5nHEyOlNZIs2me09Zy00hew4uUE9IXQjATDcq', 0, NULL, '2023-06-19 06:58:41', '2023-06-19 06:58:41'),
(3, 'Aisyatun', 'ais@user1.com', NULL, '$2y$10$cGAbNwxofF8X.lJICwvIt.slRyUtxR0eqGVIX5tpp8jmwSU84umMe', 0, NULL, '2023-06-26 03:25:41', '2023-06-26 03:25:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobils`
--
ALTER TABLE `mobils`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobils_name_unique` (`nama`),
  ADD UNIQUE KEY `mobils_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mobils`
--
ALTER TABLE `mobils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
