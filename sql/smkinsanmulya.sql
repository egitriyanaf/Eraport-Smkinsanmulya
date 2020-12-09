-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 03:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkinsanmulya`
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
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `jenis_kelamin`, `telepon`, `alamat`, `photo`, `created_at`, `updated_at`) VALUES
(21, '1616611117', 'Rifky Nur rahman', 'Laki-laki', '0822992366', 'tangerang', 'foto-guru_21.jpg', '2020-12-01 04:49:16', '2020-12-01 04:50:48'),
(23, '1887894789', 'Tata Endeh', 'Perempuan', '08229937898', 'Tangerang', 'foto-guru_22.jpg', '2020-12-08 09:18:00', '2020-12-08 09:18:00'),
(24, '123456666', 'azizah', 'Perempuan', '0981762776', 'tigaraksa', NULL, '2020-12-08 22:34:51', '2020-12-08 22:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kelas` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `tahun_ajaran`, `kelas`, `nama_kelas`, `guru_id`, `created_at`, `updated_at`) VALUES
(4, '2020/2021', 'X', 'A', 21, '2020-12-08 07:48:23', '2020-12-08 07:48:23'),
(6, '2020/2021', 'X', 'C', 24, '2020-12-08 22:36:09', '2020-12-08 22:36:09'),
(7, '2020/2021', 'X', 'B', 23, '2020-12-08 22:36:20', '2020-12-08 22:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `kelassiswa`
--

CREATE TABLE `kelassiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `jurusan` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelassiswa`
--

INSERT INTO `kelassiswa` (`id`, `siswa_id`, `jurusan`, `kelas_id`, `created_at`, `updated_at`) VALUES
(5, 9, 'Teknik Komputer Jaringan', 4, '2020-12-08 22:17:02', '2020-12-08 22:17:02'),
(6, 6, 'Gatau', 7, '2020-12-08 22:37:34', '2020-12-08 22:37:34'),
(7, 10, 'Teknik Komputer Jaringan', 6, '2020-12-08 22:37:50', '2020-12-08 22:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelajaran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matapelajaran`
--

INSERT INTO `matapelajaran` (`id`, `nama_pelajaran`, `keterangan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bahasa Indonesia', 'Wajib', NULL, '2020-12-02 01:40:14', '2020-12-09 00:35:01'),
(2, 'Matematika', 'Wajib', NULL, '2020-12-02 20:21:09', '2020-12-02 20:21:09'),
(3, 'Bahasa Inggris', 'Tambahan', NULL, '2020-12-09 00:34:53', '2020-12-09 00:34:53');

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
(4, '2020_11_24_172016_create_admins_table', 2),
(5, '2020_11_30_100930_create_gurus_table', 3),
(6, '2020_11_30_102446_create_guru_table', 4),
(7, '2020_11_30_134640_create_siswa_table', 5),
(8, '2020_12_02_065253_create_matapelajaran_table', 6),
(9, '2020_12_02_091059_create_kelas_table', 7),
(10, '2020_12_02_100439_create_kelassiswa_table', 8),
(11, '2020_12_04_095241_create__nilai_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelassiswa_id` bigint(20) NOT NULL,
  `semester` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matapelajaran_id` bigint(20) UNSIGNED NOT NULL,
  `tugas_1` int(11) NOT NULL,
  `tugas_2` int(11) NOT NULL,
  `tugas_3` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `kelassiswa_id`, `semester`, `matapelajaran_id`, `tugas_1`, `tugas_2`, `tugas_3`, `uts`, `uas`, `created_at`, `updated_at`) VALUES
(5, 5, 'Genap', 1, 80, 80, 80, 80, 80, '2020-12-08 23:40:53', '2020-12-08 23:40:53'),
(6, 6, 'Genap', 2, 80, 80, 80, 80, 80, '2020-12-08 23:42:24', '2020-12-08 23:42:24');

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
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_angkatan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `jenis_kelamin`, `telepon`, `photo`, `tanggal_lahir`, `tempat_lahir`, `agama`, `alamat`, `tahun_angkatan`, `created_at`, `updated_at`) VALUES
(6, '1616611117', 'endah amanda', 'Perempuan', '0822992366', 'foto-siswa_6.jpg', '1997-06-02', 'Tangerang', 'Islam', 'Tangerang', '2019/2020', '2020-12-01 21:24:32', '2020-12-01 23:44:23'),
(9, '11111111', 'Yo', 'Laki-laki', '213124', NULL, '1998-12-07', 'Tangerang', 'Islam', 'Tangerang', '2019/2020', '2020-12-08 22:16:46', '2020-12-08 22:16:46'),
(10, '766377377', 'gundarji', 'Laki-laki', '0877726667', NULL, '1997-12-09', 'Tangerang', 'Islam', 'Tangerang', '2018/2019', '2020-12-08 22:35:48', '2020-12-08 22:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `id_personil` bigint(20) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `id_personil`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rahmat@gmail.com', NULL, '$2y$10$fX4G46ZD3Y9UWbtH4MIsU.7FjZjsmVTDRZ3gsJVOEuKeSESeMo/Ze', 'Admin', 0, NULL, '2020-11-24 00:41:40', '2020-12-05 17:02:13'),
(14, 'rifky@gmail.com', NULL, '$2y$10$27fSoBFlZIx1G7vKAD/LjueoE8155.mNvCtR1e.ItI0evCTECZDHm', 'Guru', 21, NULL, '2020-12-05 19:32:42', '2020-12-05 19:32:42'),
(15, 'endah@gmail.com', NULL, '$2y$10$xphwb98u0prkss3rGdPk2uYJPOA1QBeTlPOxF55aw3/S6dt6.zSnG', 'Siswa', 6, NULL, '2020-12-05 19:32:58', '2020-12-08 01:19:39'),
(16, 'Azis@gmail.com', NULL, '$2y$10$1okbimvq4nnqHdb5ynk5q.LGf7w9FfDc5/6OfkE42iHXaNfy9ja62', 'Guru', 21, NULL, '2020-12-05 23:24:09', '2020-12-06 08:06:17'),
(26, 'away@gmail.com', NULL, '$2y$10$o5AKazwfE9yjdZYdg24LqedCYh.FxJv/nAtY6VXWKG14JjzwRI52S', 'Admin', 0, NULL, '2020-12-09 06:20:10', '2020-12-09 06:20:10');

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
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelassiswa`
--
ALTER TABLE `kelassiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelassiswa_id` (`kelassiswa_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelassiswa`
--
ALTER TABLE `kelassiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
