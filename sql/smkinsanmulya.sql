-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 04:55 PM
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
(21, '1616611117', 'Rifky Nur rahman', 'Laki-laki', '0822992366', 'tangerang', 'foto-guru_21.jpg', '2020-12-01 04:49:16', '2020-12-01 04:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kelas` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wali_kelas` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `tahun_ajaran`, `kelas`, `nama_kelas`, `wali_kelas`, `created_at`, `updated_at`) VALUES
(1, '2020/2021', 'X', 'B', 'Rifky Nur rahman', '2020-12-02 20:37:02', '2020-12-05 23:33:29'),
(3, '2020/2021', 'X', 'A', 'Rifky Nur rahman', '2020-12-06 07:50:12', '2020-12-06 07:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `kelassiswa`
--

CREATE TABLE `kelassiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajaran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wali_kelas` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelassiswa`
--

INSERT INTO `kelassiswa` (`id`, `nis`, `nama`, `jurusan`, `tahun_ajaran`, `kelas`, `nama_kelas`, `wali_kelas`, `created_at`, `updated_at`) VALUES
(3, 'endah amanda', 'endah amanda', 'Teknik Komputer Jaringan', '2020/2021', 'X', 'B', 'Rifky Nur rahman', '2020-12-05 23:44:45', '2020-12-05 23:44:45');

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
(1, 'Bahasa Indonesia', 'Wajib', NULL, '2020-12-02 01:40:14', '2020-12-02 21:17:00'),
(2, 'Matematika', 'Wajib', NULL, '2020-12-02 20:21:09', '2020-12-02 20:21:09');

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
  `nis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mata_pelajaran` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tugas_1` int(11) NOT NULL,
  `tugas_2` int(11) NOT NULL,
  `tugas_3` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, '123456', 'M. Firmansyah', 'Laki-laki', '08123456', 'foto-siswa_7.jpg', '1996-06-14', 'Tangerang', 'Islam', 'Tangerang', '2019/2020', '2020-12-06 08:09:54', '2020-12-06 08:13:24');

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
(15, 'endah@gmail.com', NULL, '$2y$10$/50Cb5Gjw99ANws9nv6gEegWC//2lR51nK5P2WklXakcMcqSt0odC', 'Siswa', 6, NULL, '2020-12-05 19:32:58', '2020-12-06 08:08:00'),
(16, 'Azis@gmail.com', NULL, '$2y$10$1okbimvq4nnqHdb5ynk5q.LGf7w9FfDc5/6OfkE42iHXaNfy9ja62', 'Guru', 21, NULL, '2020-12-05 23:24:09', '2020-12-06 08:06:17'),
(17, 'firman@gmail.com', NULL, '$2y$10$V5pqsM1/u7zmV7cgHUOitecCpG7doXZm0g1Nx0WQfOyQAmvhq7OcK', 'Siswa', 7, NULL, '2020-12-06 08:14:32', '2020-12-06 08:14:32');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelassiswa`
--
ALTER TABLE `kelassiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
