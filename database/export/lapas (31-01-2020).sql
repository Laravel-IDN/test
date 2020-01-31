-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2020 at 04:20 PM
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
  `kunjungan_id` varchar(11) NOT NULL,
  `waktu_kunjungan` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `kunjungan_id`, `waktu_kunjungan`, `rating`, `kritik`, `saran`, `created_at`, `updated_at`) VALUES
(1, 'KS75', 'rabu, 16:00 - 17:00', 3, 'Reprehenderit culpa delectus ut eaque voluptatem aperiam eveniet.', 'Voluptas nam omnis maxime repudiandae eos cumque.', NULL, NULL),
(2, 'KS588', 'jumat, 14:15 - 15:00', 4, 'Dolorum id deserunt hic similique.', 'Numquam ut accusamus molestiae repellat. Id assumenda deleniti possimus provident eligendi nam sit.', NULL, NULL),
(3, 'KS318', 'rabu, 16:00 - 17:00', 4, 'Assumenda necessitatibus voluptatibus ut facere harum sapiente. Quaerat odit laborum et minus nihil exercitationem consequuntur.', 'Aliquid aperiam sint quod quo. Eum omnis voluptatem mollitia qui suscipit ut.', NULL, NULL),
(4, 'KS769', 'jumat, 13:30 - 14:15', 1, 'Et dolorem corporis dolorum quos.', 'Sunt provident consequuntur voluptatem sit laborum vero pariatur.', NULL, NULL),
(5, 'KS633', 'rabu, 14:15 - 15:00', 5, 'Maiores est quas sit. Consequatur aliquam alias velit laborum velit qui molestias.', 'Suscipit rerum architecto voluptas praesentium maxime.', NULL, NULL),
(6, 'KS990', 'senin, 09:30 - 10:15', 2, 'Totam molestiae quis est qui rerum cumque enim veniam. Error ad fugit dolores omnis quis.', 'Ut minus aspernatur aperiam et nihil accusamus ut.', NULL, NULL),
(7, 'KS660', 'rabu, 13:30 - 14:15', 5, 'Iusto molestiae cumque nobis ipsam. Sapiente et eveniet expedita aspernatur perferendis quam accusantium.', 'Voluptatibus minima sed consequatur voluptatem non. Nihil pariatur illo ratione.', NULL, NULL),
(8, 'KS882', 'rabu, 14:15 - 15:00', 1, 'Quo est nihil magnam fugit corporis occaecati. Veniam inventore saepe autem aliquid ipsa.', 'Dicta quibusdam facere placeat enim praesentium est iusto.', NULL, NULL),
(9, 'KS328', 'jumat, 13:30 - 14:15', 3, 'Dignissimos non eligendi excepturi nihil. Doloremque porro et voluptas similique ab tenetur non.', 'Inventore beatae ab similique eius facilis. Fuga omnis minus et incidunt accusantium ut modi.', NULL, NULL),
(10, 'KS747', 'senin, 09:30 - 10:15', 5, 'Ut vitae illum qui sed.', 'Ut temporibus dolorem aut quod harum ipsam omnis dolor.', NULL, NULL),
(11, 'KS537', 'rabu, 10:15 - 11:00', 2, 'Voluptatem est itaque aut porro.', 'Quasi odio sint consectetur aut sed et eveniet.', NULL, NULL),
(12, 'KS15', 'rabu, 09:30 - 10:15', 5, 'Aut voluptas omnis est quis itaque delectus ut omnis.', 'Eum voluptas facilis nisi soluta suscipit qui. Expedita sed ratione mollitia quam eum cumque tempora.', NULL, NULL),
(13, 'KS996', 'rabu, 14:15 - 15:00', 5, 'Sit earum rerum odit eveniet. Et aliquid facere quis non cum ut.', 'Dolores corrupti architecto et libero autem excepturi similique quas. Eveniet quia voluptas recusandae dicta maxime.', NULL, NULL),
(14, 'KS829', 'senin, 14:15 - 15:00', 5, 'Enim sequi voluptatem quia. Molestias aperiam expedita placeat aliquam.', 'Cupiditate pariatur esse velit qui architecto non eveniet dolores.', NULL, NULL),
(15, 'KS97', 'jumat, 16:00 - 17:00', 1, 'Id est veniam atque perspiciatis et ab. Itaque ut omnis nihil tempora velit nulla.', 'Iure nisi quam reiciendis rerum fugiat rerum recusandae. Qui culpa sint odit sapiente enim.', NULL, NULL),
(16, 'KS354', 'senin, 13:30 - 14:15', 3, 'Quod quo totam tenetur accusamus eos quibusdam.', 'Distinctio deserunt dolor nihil molestiae inventore et aliquam adipisci. Ad dolorem aut iste alias.', NULL, NULL),
(17, 'KS13', 'senin, 14:15 - 15:00', 3, 'Reprehenderit quo blanditiis qui autem et. Sit aperiam nobis quod in at harum accusamus autem.', 'At ipsum sint porro reprehenderit libero ex ut.', NULL, NULL),
(18, 'KS479', 'jumat, 14:15 - 15:00', 1, 'Pariatur harum cum qui quisquam nihil totam. Ducimus atque consectetur esse laudantium tempore est quae numquam.', 'Explicabo et assumenda eligendi quia aut. Et veniam perspiciatis est.', NULL, NULL),
(19, 'KS898', 'senin, 10:15 - 11:00', 4, 'Nihil esse corporis voluptas consequuntur delectus provident. Sapiente qui est qui aspernatur quis modi aperiam.', 'Dolorem quia ut numquam et unde asperiores qui. Et dicta veritatis totam illum repudiandae.', NULL, NULL),
(20, 'KS502', 'senin, 13:30 - 14:15', 2, 'Aperiam possimus excepturi et officia aut quibusdam consequatur dolores.', 'Iste ipsa adipisci esse at voluptatem. Inventore quo ipsa sapiente sequi dolores.', NULL, NULL),
(21, 'KS551', 'senin, 09:30 - 10:15', 3, 'Non in et amet voluptatum.', 'Sit minus rerum voluptatem. Hic beatae veritatis autem numquam.', NULL, NULL),
(22, 'KS911', 'senin, 13:30 - 14:15', 5, 'Quidem id nesciunt error id dolorem quibusdam. Doloremque modi non porro quidem.', 'Soluta impedit voluptate ratione sed quo. Voluptatibus odit vel voluptate illo minima perspiciatis fuga.', NULL, NULL),
(23, 'KS406', 'jumat, 13:30 - 14:15', 5, 'Ut rerum tempora veritatis ducimus minima. Voluptatem voluptatem aliquid molestias est.', 'Sit illum vitae repudiandae. Et aut et occaecati ipsam sequi error minima.', NULL, NULL),
(24, 'KS444', 'jumat, 14:15 - 15:00', 2, 'Ipsam facere facere eveniet itaque voluptatibus. Est vero eum aperiam error est recusandae et.', 'Sunt quod laborum veniam provident tenetur sint facilis.', NULL, NULL),
(25, 'KS336', 'rabu, 10:15 - 11:00', 4, 'Voluptas voluptas error id esse ut consequuntur et.', 'Quia ut aliquid mollitia. Repellat nesciunt nesciunt tempora expedita aut impedit.', NULL, NULL),
(26, 'KS759', 'senin, 09:30 - 10:15', 2, 'Nesciunt amet ut tempore asperiores possimus. Qui quidem consectetur nihil voluptatem quo.', 'Expedita quod quibusdam non quaerat.', NULL, NULL),
(27, 'KS323', 'rabu, 16:00 - 17:00', 5, 'Nobis velit non a cumque doloremque.', 'Quod sunt sint accusantium voluptates. Laudantium minus tempore deserunt animi perspiciatis.', NULL, NULL),
(28, 'KS466', 'jumat, 13:30 - 14:15', 2, 'Doloribus et ipsa rerum enim id reprehenderit qui. Iure dicta sequi quis autem dolorem.', 'Ut accusamus et tempora veniam officiis.', NULL, NULL),
(29, 'KS676', 'rabu, 09:30 - 10:15', 2, 'Non qui unde ab harum et fuga. Dignissimos velit dicta et.', 'Labore iusto et reiciendis aperiam cum eligendi. Nihil deleniti mollitia aut itaque similique vel.', NULL, NULL),
(30, 'KS900', 'senin, 09:30 - 10:15', 4, 'Praesentium vel exercitationem vel libero harum. Fugit laudantium adipisci occaecati eligendi.', 'Iure soluta est quod rerum.', NULL, NULL);

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
  `category` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `schedule_at` date NOT NULL,
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
(2, 9, 'App\\User'),
(2, 10, 'App\\User'),
(2, 11, 'App\\User'),
(2, 12, 'App\\User'),
(2, 13, 'App\\User'),
(2, 14, 'App\\User'),
(2, 15, 'App\\User'),
(2, 16, 'App\\User'),
(2, 17, 'App\\User'),
(2, 18, 'App\\User'),
(2, 19, 'App\\User'),
(2, 20, 'App\\User'),
(2, 21, 'App\\User'),
(2, 22, 'App\\User'),
(2, 23, 'App\\User'),
(2, 24, 'App\\User'),
(2, 25, 'App\\User'),
(2, 26, 'App\\User'),
(2, 27, 'App\\User'),
(2, 28, 'App\\User'),
(2, 29, 'App\\User'),
(2, 30, 'App\\User'),
(2, 31, 'App\\User'),
(2, 32, 'App\\User'),
(2, 33, 'App\\User'),
(2, 34, 'App\\User'),
(2, 35, 'App\\User'),
(2, 36, 'App\\User'),
(2, 37, 'App\\User'),
(2, 38, 'App\\User'),
(2, 39, 'App\\User'),
(2, 40, 'App\\User'),
(2, 41, 'App\\User'),
(2, 42, 'App\\User'),
(2, 43, 'App\\User'),
(2, 44, 'App\\User'),
(2, 45, 'App\\User'),
(2, 46, 'App\\User'),
(2, 47, 'App\\User'),
(2, 48, 'App\\User'),
(2, 49, 'App\\User'),
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
(3, 'admin', 'admin@gmail.com', '', NULL, '$2y$10$QEY2kGEKzP0Phxd9U8FPJ.2jVTMhO7NOUeq1q9wWEuexB6R7EPc6G', NULL, '2019-12-27 06:31:39', '2019-12-27 06:31:39'),
(9, 'Dina Oktaviani', 'simbolon.siti@astuti.id', '', NULL, '$2y$10$efrevIKlSrSE8zYnOSf.Geu2YF/27W08K3S3J3wRr0NCz1r0eQ2JK', NULL, NULL, NULL),
(10, 'Perkasa Wira Mustofa M.Farm', 'fwinarsih@gmail.com', '', NULL, '$2y$10$KhQDGacyTN6eFi/c4RBV5..jSsVlWWrRhR.7HMQB9cmh1jQyqlbt2', NULL, NULL, NULL),
(11, 'Sabri Hidayanto S.Gz', 'nuraini.dina@utama.name', '', NULL, '$2y$10$GAuZxLj0ehG672mndYneGOZxKtn2.SpFDc5E4vZ/mwy0tCrAQBPbW', NULL, NULL, NULL),
(12, 'Indah Rahmawati', 'nasrullah13@gmail.com', '', NULL, '$2y$10$In9ywDLfTTOp4xEi4UqDl.7Cz/5CDPcQgIJedOARyyyOUo2I54Qkm', NULL, NULL, NULL),
(13, 'Kartika Kusmawati', 'syahrini23@prakasa.desa.id', '', NULL, '$2y$10$pi2J5HycXqCPIUjiMlfHauoLM9eMf.fiuchzQwDUW8dEMVHBBDJMi', NULL, NULL, NULL),
(14, 'Humaira Uyainah', 'csaragih@sitompul.biz', '', NULL, '$2y$10$56LgCrAtIKdhCwNgwmWTW.CF5TdExBjQAuNpgLKB3kT3EOx9AwOLe', NULL, NULL, NULL),
(15, 'Mahesa Sitompul S.IP', 'halima45@yahoo.com', '', NULL, '$2y$10$Hzuq/uaPgq9465D8tgJLtOwoy6i0sBp7EAHJVTY7TWtHA62ax6aA2', NULL, NULL, NULL),
(16, 'Legawa Ardianto', 'intan.waluyo@permata.desa.id', '', NULL, '$2y$10$OB9mS8oBMKMGKsHKgwJmre5a4czzK8w1U0I4RWK6KYjBkJzlNpq2C', NULL, NULL, NULL),
(17, 'Safina Farah Hariyah S.Sos', 'mardhiyah.puspa@yahoo.co.id', '', NULL, '$2y$10$zDUqz4rth6B4TtQXZrBJB.tarjvx1RIO.aWhByEzqSuypm62V3TXS', NULL, NULL, NULL),
(18, 'Novi Nurdiyanti', 'lasmono.habibi@wasita.info', '', NULL, '$2y$10$nGf7mkOxXgX7Lj836fXRAupEFJJKu/mBl.P.cdr0/dAXidkkeJip.', NULL, NULL, NULL),
(19, 'Saiful Sihombing', 'kenzie.wasita@gmail.co.id', '', NULL, '$2y$10$P6DmQVJ2IoXXcAcLe4q7Iek/3Zi1FpUaIbXg6Yn.Ok6S7F.QKZBNW', NULL, NULL, NULL),
(20, 'Fitriani Ami Nurdiyanti', 'yhassanah@yahoo.co.id', '', NULL, '$2y$10$FLcK0CdyZtNNHDXevy3VtOSRjK7Yy7ILNzyTUWgdBwJhga4fOHFhW', NULL, NULL, NULL),
(21, 'Shakila Permata', 'rina66@gmail.co.id', '', NULL, '$2y$10$gRlaFFZH6pLqzprc1788aOW0Ck4s.zqb1ue3O.wuSml3jwChtgXTe', NULL, NULL, NULL),
(22, 'Ella Yuliarti', 'gmandasari@uyainah.sch.id', '', NULL, '$2y$10$5eclKK1t5on.YLfWE5zEe.dpPsrnZ2GEAF4/7jKmJd9nM/eZbjSra', NULL, NULL, NULL),
(23, 'Nova Lestari', 'mandala.bagiya@gmail.com', '', NULL, '$2y$10$kA5ERXDJWgNvcDfa.2TIDuHuc/CoYoDijUqtB9kqKA2K1MLP1tls6', NULL, NULL, NULL),
(24, 'Lutfan Simbolon S.IP', 'satya.hasanah@yahoo.co.id', '', NULL, '$2y$10$nHWd.zF9fKrCku5xmF8DveRRq19k.3nWzarEDYWZl8H0OOcufW6KG', NULL, NULL, NULL),
(25, 'Erik Yoga Lazuardi S.T.', 'jumari98@permadi.my.id', '', NULL, '$2y$10$vgNjdasgWuebcG.9z/VPN.ofHRmdCnydngorpJ4YAffARnOW6RXeO', NULL, NULL, NULL),
(26, 'Keisha Purnawati', 'lamar89@yahoo.com', '', NULL, '$2y$10$lXk03zRURom6toSMfQIdoOkd/4jNIJdb4dlypePeWEePB8E0bgphu', NULL, NULL, NULL),
(27, 'Pia Ella Puspita', 'silvia71@hariyah.asia', '', NULL, '$2y$10$NDcG1BH77LYRb0hZ8FzHOub9UPlPELiI7HJ4p/9qt68RXwoW2z5QS', NULL, NULL, NULL),
(28, 'Gamanto Widodo S.H.', 'latika91@yolanda.in', '', NULL, '$2y$10$FRoEc.VNxcW6BioMVcLdR.VOWSVl/KvvbQ6/rExX371Flqro2WgGu', NULL, NULL, NULL),
(29, 'Panji Rajasa', 'yani39@ardianto.tv', '', NULL, '$2y$10$2c7Gs.bZNe3Ev..PWEIFYO6INbVO/xvslU36JjaOG.H9tX5eXR2me', NULL, NULL, NULL),
(30, 'Siti Septi Suryatmi', 'salsabila.sihotang@yahoo.co.id', '', NULL, '$2y$10$aCouUR.R4EFDX./gePq5euAAeKrJPwwGap8sTFD2vy2lqGib0Ulga', NULL, NULL, NULL),
(31, 'Cayadi Saefullah S.I.Kom', 'gsusanti@prasetya.sch.id', '', NULL, '$2y$10$KTFcZipA1sLmAw2H23JMG.cSl8h2bp07m.R00F2ERkOivr7AZDRhW', NULL, NULL, NULL),
(32, 'Ajeng Cornelia Lestari M.Ak', 'spudjiastuti@gmail.com', '', NULL, '$2y$10$JpAWsW/sUR5vXH7Gj2H/dunW.2dqyq1eiKqW.QiuqZ/pE2LRX0zha', NULL, NULL, NULL),
(33, 'Widya Laksmiwati M.M.', 'gaman29@gmail.com', '', NULL, '$2y$10$OzPig.X6iiP7EdZBkJcexeT4a1YffE.JvKX9U4QvbYncZLKtzYM02', NULL, NULL, NULL),
(34, 'Zamira Rahmawati', 'dhidayat@gmail.com', '', NULL, '$2y$10$JCydw.Gs05KcHd9OlHtBneOD3o6skADWWgdAN380.tSbJCw4AAHeG', NULL, NULL, NULL),
(35, 'Panca Ramadan', 'yuniar.devi@tarihoran.asia', '', NULL, '$2y$10$aouAtEpOCVwisMH6f2CTz.Z2rT6V5DXJ/MXGuWzDS.n33FU5QTmNe', NULL, NULL, NULL),
(36, 'Zulfa Nuraini', 'mardhiyah.cawisono@winarno.name', '', NULL, '$2y$10$lnC4vM3jGEibzxVS/GNISemAHROImcjR6uqezHGj5iw0T5BMStWk.', NULL, NULL, NULL),
(37, 'Mutia Safitri', 'opan03@rahayu.biz', '', NULL, '$2y$10$B7BXE6qCy5UF.R8J2xhDNeFjKV1W1w7PpfsxtGohODTiU5/2nBZqu', NULL, NULL, NULL),
(38, 'Nova Riyanti', 'osimbolon@hutasoit.org', '', NULL, '$2y$10$nnLD/TbJ8RakTy4OrtmjOO81ADnJqsPPPACpsEifN3jpEZRx2UAKW', NULL, NULL, NULL),
(39, 'Citra Wastuti', 'eli92@oktaviani.web.id', '', NULL, '$2y$10$aeVYa5PDtTnVq8LfLNruF.MMuP0eVI5lDMutagq1ZcH0Yf8BgGHXW', NULL, NULL, NULL),
(40, 'Wira Nashiruddin', 'kusuma34@gmail.com', '', NULL, '$2y$10$Xs78N4xhAVJ/5BL2vN.hp.0Za8wqe4LuxuFOLJCW4/c8NhccN4kbm', NULL, NULL, NULL),
(41, 'Lala Pudjiastuti', 'namaga.asmuni@gmail.co.id', '', NULL, '$2y$10$OaVY1CXJx64ioc4bowGYk.bklzXyHkUd4ORP5ReWqHHCOyhCAfw8.', NULL, NULL, NULL),
(42, 'Kuncara Viman Hardiansyah', 'gambira.nababan@dabukke.tv', '', NULL, '$2y$10$uf3Z1qAclGPIhSPcO6ca9OQI/V3lRM7q/Z8btan.kCGC3NGJeOj9a', NULL, NULL, NULL),
(43, 'Ciaobella Melani', 'bagya.padmasari@winarno.web.id', '', NULL, '$2y$10$plQ0yiSBP/sWMgNFxyQV0e/W6GToDhC3mvSuRUT4vmE24y6uZiMbO', NULL, NULL, NULL),
(44, 'Lili Indah Laksmiwati S.Pd', 'puji.napitupulu@gmail.com', '', NULL, '$2y$10$EaTx6D9/SDu3IQXLCrNlV.QLjOqSmJ3dz38NS9nzq1I26hRaZvwuK', NULL, NULL, NULL),
(45, 'Safina Chelsea Padmasari', 'mustika07@widiastuti.co.id', '', NULL, '$2y$10$o2kODkSYhghPiQmtE8sqTuUWsa1ItHE.Obe.5/MMCIudhX9FtmOkq', NULL, NULL, NULL),
(46, 'Jaya Sitompul', 'gandi.tarihoran@gmail.co.id', '', NULL, '$2y$10$zFXVWxrmrZRuL6RzLE1adeKrZvXPq8oK51sdsUCJf/a2/AojJAjOG', NULL, NULL, NULL),
(47, 'Jasmin Suryatmi M.M.', 'cawisadi06@zulaika.go.id', '', NULL, '$2y$10$9KjQvV.bGFLe9l.jdyQSQ.kbesZt3JA7fHW3p6.wZ/HdvsinuisMi', NULL, NULL, NULL),
(48, 'Ina Endah Anggraini S.Kom', 'calista.saragih@maryati.my.id', '', NULL, '$2y$10$O2EUwlxEor9gf5hRVmmATOUqxL5qRynHUuSaz5Ghfqz0BBumj31pa', NULL, NULL, NULL),
(49, 'Umi Rahmawati', 'chandra86@gmail.co.id', '', NULL, '$2y$10$DxQzdTl0SSc11GR2sDPrNOqfvD7MgiMcGJQxNDszhO1es015H0Cmm', NULL, NULL, NULL);

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
  `agama` varchar(50) DEFAULT NULL,
  `perkara` varchar(100) NOT NULL,
  `jenis_kejahatan` varchar(11) NOT NULL,
  `vonis` varchar(11) NOT NULL,
  `foto` text,
  `tgl_berperkara` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wbp`
--

INSERT INTO `wbp` (`id`, `kode_wbp`, `nama`, `tempat_lahir`, `tanggal_lahir`, `agama`, `perkara`, `jenis_kejahatan`, `vonis`, `foto`, `tgl_berperkara`, `created_at`, `updated_at`) VALUES
(26, 'WBP536', 'Vanya Devi', 'Sawahlunto', '1989-02-15', 'Kristen', 'Pencurian', 'PidSus', '5 Tahun', 'https://lorempixel.com/640/480/?28842', '1982-09-10', '0000-00-00 00:00:00', NULL),
(27, 'WBP680', 'Cinthia Mala', 'Malang', '1999-12-06', 'Islam', 'Korupsi', 'PidSus', '1 Tahun', 'https://lorempixel.com/640/480/?31375', '1985-02-21', '0000-00-00 00:00:00', NULL),
(28, 'WBP417', 'Latika Jelita', 'Cirebon', '1978-11-21', 'Kristen', 'Pembunuhan', 'PiDum', '9 Tahun', 'https://lorempixel.com/640/480/?74743', '1996-01-05', '0000-00-00 00:00:00', NULL),
(29, 'WBP737', 'Dalima Iriana', 'Kediri', '1972-09-17', 'Buddha', 'Korupsi', 'PidSus', '9 Tahun', 'https://lorempixel.com/640/480/?13358', '1993-10-28', '0000-00-00 00:00:00', NULL),
(30, 'WBP28', 'Humaira Uchita', 'Sungai Penuh', '1982-06-05', 'Islam', 'Pembunuhan', 'PiDum', '8 Tahun', 'https://lorempixel.com/640/480/?85869', '1973-07-11', '0000-00-00 00:00:00', NULL),
(31, 'WBP956', 'Alika Faizah', 'Probolinggo', '2000-06-06', 'Buddha', 'Pembunuhan', 'PidSus', '8 Tahun', 'https://lorempixel.com/640/480/?49448', '1990-08-24', '0000-00-00 00:00:00', NULL),
(32, 'WBP108', 'Gina Farhunnisa', 'Pekalongan', '2016-09-11', 'Kristen', 'Pembunuhan', 'PidSus', '10 Tahun', 'https://lorempixel.com/640/480/?75005', '1975-02-15', '0000-00-00 00:00:00', NULL),
(33, 'WBP579', 'Halima Queen', 'Pariaman', '2006-09-23', 'Katolik', 'Pembunuhan', 'PiDum', '5 Tahun', 'https://lorempixel.com/640/480/?47553', '2018-10-15', '0000-00-00 00:00:00', NULL),
(34, 'WBP677', 'Oliva Tania', 'Kendari', '2000-11-27', 'Islam', 'Korupsi', 'PidSus', '1 Tahun', 'https://lorempixel.com/640/480/?62599', '2018-08-28', '0000-00-00 00:00:00', NULL),
(35, 'WBP148', 'Uli Queen', 'Banda Aceh', '2010-03-07', 'Kristen', 'Pembunuhan', 'PidSus', '4 Tahun', 'https://lorempixel.com/640/480/?89119', '1979-08-20', '0000-00-00 00:00:00', NULL),
(36, 'WBP848', 'Salimah Calista', 'Administrasi Jakarta Timur', '2012-02-08', 'Kristen', 'Pembunuhan', 'PiDum', '8 Tahun', 'https://lorempixel.com/640/480/?35955', '1993-06-04', '0000-00-00 00:00:00', NULL),
(37, 'WBP872', 'Rahayu Paulin', 'Yogyakarta', '2014-10-29', 'Katolik', 'Pencurian', 'PiDum', '4 Tahun', 'https://lorempixel.com/640/480/?27360', '1988-03-08', '0000-00-00 00:00:00', NULL),
(38, 'WBP924', 'Ani Diana', 'Cimahi', '2002-01-25', 'Islam', 'Korupsi', 'PiDum', '4 Tahun', 'https://lorempixel.com/640/480/?74912', '1979-12-24', '0000-00-00 00:00:00', NULL),
(39, 'WBP78', 'Tari Lalita', 'Tidore Kepulauan', '1986-09-10', 'Buddha', 'Pencurian', 'PidSus', '1 Tahun', 'https://lorempixel.com/640/480/?92757', '1992-04-25', '0000-00-00 00:00:00', NULL),
(40, 'WBP300', 'Elvina Jamalia', 'Gunungsitoli', '1973-01-23', 'Katolik', 'Pencurian', 'PidSus', '1 Tahun', 'https://lorempixel.com/640/480/?44694', '1988-07-24', '0000-00-00 00:00:00', NULL),
(41, 'WBP642', 'Padmi Hilda', 'Dumai', '2010-11-12', 'Buddha', 'Pencurian', 'PiDum', '5 Tahun', 'https://lorempixel.com/640/480/?71862', '2003-04-03', '0000-00-00 00:00:00', NULL),
(42, 'WBP722', 'Cornelia Septi', 'Depok', '2010-04-02', 'Islam', 'Korupsi', 'PidSus', '1 Tahun', 'https://lorempixel.com/640/480/?95457', '1980-12-11', '0000-00-00 00:00:00', NULL),
(43, 'WBP746', 'Dalima Titi', 'Depok', '1992-03-17', 'Katolik', 'Korupsi', 'PidSus', '1 Tahun', 'https://lorempixel.com/640/480/?38786', '1994-12-20', '0000-00-00 00:00:00', NULL),
(44, 'WBP477', 'Hana Zamira', 'Tangerang', '1994-06-24', 'Islam', 'Pencurian', 'PiDum', '3 Tahun', 'https://lorempixel.com/640/480/?22185', '2010-10-28', '0000-00-00 00:00:00', NULL),
(45, 'WBP516', 'Zizi Maria', 'Magelang', '1990-06-01', 'Katolik', 'Pembunuhan', 'PiDum', '6 Tahun', 'https://lorempixel.com/640/480/?25802', '1988-05-01', '0000-00-00 00:00:00', NULL),
(46, 'WBP729', 'Raina Zulaikha', 'Makassar', '1971-03-21', 'Islam', 'Korupsi', 'PiDum', '10 Tahun', 'https://lorempixel.com/640/480/?37642', '1972-10-23', '0000-00-00 00:00:00', NULL),
(47, 'WBP713', 'Wani Intan', 'Dumai', '1985-07-08', 'Islam', 'Pembunuhan', 'PidSus', '4 Tahun', 'https://lorempixel.com/640/480/?56714', '1973-06-08', '0000-00-00 00:00:00', NULL),
(48, 'WBP457', 'Tiara Latika', 'Payakumbuh', '2000-08-06', 'Buddha', 'Pencurian', 'PiDum', '5 Tahun', 'https://lorempixel.com/640/480/?34513', '1976-04-16', '0000-00-00 00:00:00', NULL),
(49, 'WBP80', 'Victoria Jane', 'Tarakan', '1979-10-30', 'Katolik', 'Pembunuhan', 'PidSus', '5 Tahun', 'https://lorempixel.com/640/480/?30338', '1977-06-18', '0000-00-00 00:00:00', NULL),
(50, 'WBP674', 'Hani Ulva', 'Singkawang', '2012-09-29', 'Kristen', 'Pencurian', 'PiDum', '7 Tahun', 'https://lorempixel.com/640/480/?22792', '1988-01-28', '0000-00-00 00:00:00', NULL),
(51, 'WBP310', 'Ana Hamima', 'Palembang', '1997-02-09', 'Kristen', 'Korupsi', 'PiDum', '6 Tahun', 'https://lorempixel.com/640/480/?59998', '1991-05-26', '0000-00-00 00:00:00', NULL),
(52, 'WBP605', 'Dinda Yani', 'Administrasi Jakarta Pusat', '1987-05-24', 'Kristen', 'Pencurian', 'PidSus', '4 Tahun', 'https://lorempixel.com/640/480/?20260', '1979-10-09', '0000-00-00 00:00:00', NULL),
(53, 'WBP546', 'Julia Eka', 'Pematangsiantar', '1995-01-18', 'Katolik', 'Pencurian', 'PiDum', '3 Tahun', 'https://lorempixel.com/640/480/?77052', '2012-08-18', '0000-00-00 00:00:00', NULL),
(54, 'WBP535', 'Cinta Widya', 'Semarang', '1996-12-19', 'Islam', 'Pencurian', 'PidSus', '4 Tahun', 'https://lorempixel.com/640/480/?27190', '1998-10-03', '0000-00-00 00:00:00', NULL),
(55, 'WBP33', 'Kamila Endah', 'Administrasi Jakarta Barat', '1994-07-30', 'Kristen', 'Pencurian', 'PidSus', '6 Tahun', 'https://lorempixel.com/640/480/?49086', '2011-11-09', '0000-00-00 00:00:00', NULL),
(56, 'WBP327', 'Maria Syahrini', 'Banjarmasin', '2011-08-18', 'Buddha', 'Pencurian', 'PiDum', '2 Tahun', 'https://lorempixel.com/640/480/?47287', '2003-11-13', '0000-00-00 00:00:00', NULL),
(57, 'WBP546', 'Janet Hana', 'Pontianak', '1983-10-07', 'Islam', 'Korupsi', 'PidSus', '5 Tahun', 'https://lorempixel.com/640/480/?88948', '1985-10-30', '0000-00-00 00:00:00', NULL),
(58, 'WBP26', 'Siska Mila', 'Sukabumi', '2012-10-25', 'Islam', 'Pembunuhan', 'PidSus', '9 Tahun', 'https://lorempixel.com/640/480/?10758', '1981-03-18', '0000-00-00 00:00:00', NULL),
(59, 'WBP305', 'Dalima Jane', 'Palopo', '1970-01-23', 'Islam', 'Pencurian', 'PiDum', '1 Tahun', 'https://lorempixel.com/640/480/?95244', '2007-05-07', '0000-00-00 00:00:00', NULL),
(60, 'WBP259', 'Calista Fitriani', 'Jayapura', '1999-03-28', 'Islam', 'Pembunuhan', 'PiDum', '10 Tahun', 'https://lorempixel.com/640/480/?38503', '1984-01-05', '0000-00-00 00:00:00', NULL),
(61, 'WBP258', 'Zelda Puspa', 'Kupang', '1998-12-27', 'Buddha', 'Pencurian', 'PiDum', '5 Tahun', 'https://lorempixel.com/640/480/?30260', '1996-04-09', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `wbp`
--
ALTER TABLE `wbp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
