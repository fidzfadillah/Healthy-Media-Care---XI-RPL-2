-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 10:40 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health-mc`
--

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_30_061511_create_t_callcenter', 1),
(4, '2020_05_30_062208_create_t_rs_rujukan', 2),
(5, '2020_05_30_164036_create_t_berita', 3),
(6, '2020_06_01_024334_create_model_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `t_berita`
--

CREATE TABLE `t_berita` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_berita`
--

INSERT INTO `t_berita` (`id`, `judul`, `isi`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Berita 1', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '2020-05-31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_callcenter`
--

CREATE TABLE `t_callcenter` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_center` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotline` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_callcenter`
--

INSERT INTO `t_callcenter` (`id`, `nama_kota`, `call_center`, `hotline`, `created_at`, `updated_at`) VALUES
(1, 'Kota Bandung', '119', '082119628957', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_rs_rujukan`
--

CREATE TABLE `t_rs_rujukan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_rs` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `halaman_web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_rs_rujukan`
--

INSERT INTO `t_rs_rujukan` (`id`, `nama_rs`, `alamat`, `no_telp`, `halaman_web`, `created_at`, `updated_at`) VALUES
(1, 'RSU Dr. Hasan Sadikin', 'Jl. Pasteur No. 38, Kota Bandung', '08222034953', 'https://web.rshs.or.id/', NULL, NULL),
(2, 'RSTP Dr. H. A. Rotinsulu', 'Jl. Bukit Jarian No. 40, Hegarmanah, Kota Bandung', '08222034446', 'http://rsparurotinsulu.org', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1@email.com', '$2y$10$H1yAF0qm91FKOnk8klu6QeKdRlZxPG85pPwB5GlxZPcadvXaU0saK', 'admin1', NULL, '2020-05-31 20:47:06', '2020-05-31 20:47:06'),
(2, 'hafiz@email.com', '$2y$10$fPtH/Co2PCBQxMLe/kAm7.F6rejenczGgpyecsEL/tAbBAhs9lZKm', 'hafiz', NULL, '2020-06-01 01:04:01', '2020-06-01 01:04:01'),
(3, 'admin2@email.com', '$2y$10$msprgWWurOvM.Ij9UJ8AUOykmRlVnN6W/bNcSZfUjjFS1jfBdlgXK', 'Admin 2', NULL, '2020-06-01 01:05:24', '2020-06-01 01:05:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_callcenter`
--
ALTER TABLE `t_callcenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_rs_rujukan`
--
ALTER TABLE `t_rs_rujukan`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_callcenter`
--
ALTER TABLE `t_callcenter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_rs_rujukan`
--
ALTER TABLE `t_rs_rujukan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
