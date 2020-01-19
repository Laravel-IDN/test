-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2020 at 05:27 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapas`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kunjungan_id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `day` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `start`, `end`, `day`, `category`) VALUES
(5, '09:30:00', '10:15:00', 'rabu', 'dewasa'),
(1, '09:30:00', '10:15:00', 'senin', 'dewasa'),
(6, '10:15:00', '11:00:00', 'rabu', 'dewasa'),
(2, '10:15:00', '11:00:00', 'senin', 'dewasa'),
(10, '13:30:00', '14:15:00', 'jumat', 'dewasa'),
(7, '13:30:00', '14:15:00', 'rabu', 'dewasa'),
(3, '13:30:00', '14:15:00', 'senin', 'dewasa'),
(11, '14:15:00', '15:00:00', 'jumat', 'dewasa'),
(8, '14:15:00', '15:00:00', 'rabu', 'dewasa'),
(4, '14:15:00', '15:00:00', 'senin', 'dewasa'),
(13, '16:00:00', '17:00:00', 'jumat', 'anak'),
(9, '16:00:00', '17:00:00', 'rabu', 'anak');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, '2020_01_17_142004_laratrust_setup_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengikut`
--

CREATE TABLE `pengikut` (
  `Id_Pengunjung` char(6) NOT NULL,
  `NIK` char(16) NOT NULL,
  `Nm_Pengikut` varchar(50) NOT NULL,
  `Jns_Kelamin` varchar(20) NOT NULL,
  `Tgl_Lahir` varchar(20) NOT NULL,
  `Agama` varchar(40) NOT NULL,
  `Almt_Lengkap` text NOT NULL,
  `No_Telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengikut`
--

INSERT INTO `pengikut` (`Id_Pengunjung`, `NIK`, `Nm_Pengikut`, `Jns_Kelamin`, `Tgl_Lahir`, `Agama`, `Almt_Lengkap`, `No_Telp`) VALUES
('0', '191024908970002', 'Ewika Ayu Realisty', 'Perempuan', '09/08/1997', 'Islam', 'Jl. Raden Abdullah No. 224', '081369056667');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `NIK` char(16) NOT NULL,
  `Nm_Pengunjung` varchar(50) NOT NULL,
  `Jns_Kelamin` varchar(20) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tgl_Lahir` varchar(20) NOT NULL,
  `Agama` varchar(40) NOT NULL,
  `Almt_Lengkap` text NOT NULL,
  `No_Telp` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `user_id`, `NIK`, `Nm_Pengunjung`, `Jns_Kelamin`, `Tempat_Lahir`, `Tgl_Lahir`, `Agama`, `Almt_Lengkap`, `No_Telp`, `Email`, `Username`, `Password`, `level`, `created_at`, `updated_at`) VALUES
(1, 1, '191024908970002', 'Ewika Ayu Realisty', 'Perempuan', 'Binjai', '09/08/1997', 'Islam', 'Jl. Raden Abdullah No. 224', '081369056667', 'ewikaayu09@gmail.com', 'ewika_ayu', '25d55ad283aa400af464c76d713c07ad', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Superadmin', NULL, NULL, NULL),
(2, 'admin', 'Admin', NULL, NULL, NULL),
(3, 'pengunjung', 'Pengunjung', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 3, 'App\\User'),
(3, 2, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', '', NULL, '$2y$10$QEY2kGEKzP0Phxd9U8FPJ.2jVTMhO7NOUeq1q9wWEuexB6R7EPc6G', NULL, '2019-12-27 06:31:39', '2019-12-27 06:31:39'),
(2, 'pengunjung', 'pengunjung@gmail.com', '', NULL, '$2y$10$QEY2kGEKzP0Phxd9U8FPJ.2jVTMhO7NOUeq1q9wWEuexB6R7EPc6G', NULL, '2019-12-27 06:31:39', '2019-12-27 06:31:39'),
(3, 'admin', 'admin@gmail.com', '', NULL, '$2y$10$QEY2kGEKzP0Phxd9U8FPJ.2jVTMhO7NOUeq1q9wWEuexB6R7EPc6G', NULL, '2019-12-27 06:31:39', '2019-12-27 06:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `wbp`
--

CREATE TABLE `wbp` (
  `id` int(11) NOT NULL,
  `kode_wbp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `perkara` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wbp`
--

INSERT INTO `wbp` (`id`, `kode_wbp`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `perkara`, `created_at`, `updated_at`) VALUES
(1, '1001', 'Ahmad', 'Binjai', '2020-01-12', 'test', 'test', '2020-01-11 18:59:25', '2020-01-11 18:59:25'),
(2, '1002', 'Wijaya Saputra', 'Binjai', '2020-01-12', 'test', 'test', '2020-01-11 19:00:01', '2020-01-11 19:00:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jadwal` (`start`,`end`,`day`,`category`) USING BTREE;

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
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
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wbp`
--
ALTER TABLE `wbp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wbp`
--
ALTER TABLE `wbp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
