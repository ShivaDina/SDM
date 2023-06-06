-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 05:30 PM
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
-- Database: `db_sisdm`
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absensi` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `shift` varchar(10) NOT NULL,
  `id_karyawan` varchar(5) NOT NULL,
  `id_pengajuan` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absensi`, `tanggal`, `shift`, `id_karyawan`, `id_pengajuan`) VALUES
('AB001', '2023-06-04', '2', 'K0001', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `id_gaji` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `departemen` varchar(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `potongan_gaji` int(11) NOT NULL DEFAULT 0,
  `lembur` int(11) NOT NULL DEFAULT 0,
  `id_karyawan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gaji`
--

INSERT INTO `tb_gaji` (`id_gaji`, `tanggal`, `departemen`, `jumlah`, `potongan_gaji`, `lembur`, `id_karyawan`) VALUES
('G0001', '2023-06-04', 'Admin', 3000000, 25000, 300000, 'K0001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisijin`
--

CREATE TABLE `tb_jenisijin` (
  `kode_izin` varchar(5) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenisijin`
--

INSERT INTO `tb_jenisijin` (`kode_izin`, `keterangan`) VALUES
('I0001', 'Sakit'),
('I0002', 'Menikah'),
('I0004', 'cuti');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_karyawan` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `pemilik_rekening` varchar(20) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `id_pendidikan` varchar(5) NOT NULL,
  `id_pengembangan` varchar(5) NOT NULL,
  `id_tunjangan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_karyawan`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `agama`, `status`, `email`, `no_rekening`, `pemilik_rekening`, `jabatan`, `id_pendidikan`, `id_pengembangan`, `id_tunjangan`) VALUES
('K0001', 'Mita', 'Perempuan', 'Malang', '085785565334', 'Islam', 'Mahasiswa', 'nabilapara@gmail.com', '0876112', 'Nabila', 'Karyawan', 'PE001', 'P0001', 'T0001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` varchar(5) NOT NULL,
  `tingkat_pendidikan` varchar(10) NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `institusi` varchar(15) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `tingkat_pendidikan`, `jurusan`, `institusi`, `keterangan`) VALUES
('P0003', 'SMK', 'TEI', 'SMK Negeri 2', 'Lulus'),
('PE001', 'SMK', 'TKJ', 'SMK Negeri 1', 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuanijin`
--

CREATE TABLE `tb_pengajuanijin` (
  `id_pengajuan` varchar(5) NOT NULL,
  `tanggal_izin` date NOT NULL,
  `akhir_izin` date NOT NULL,
  `kode_izin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengajuanijin`
--

INSERT INTO `tb_pengajuanijin` (`id_pengajuan`, `tanggal_izin`, `akhir_izin`, `kode_izin`) VALUES
('P0002', '2023-05-06', '2023-05-06', 'I0002'),
('P0003', '2023-05-06', '2023-05-06', 'I0004'),
('PI000', '2023-06-04', '2023-06-04', 'I0001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengembangandiri`
--

CREATE TABLE `tb_pengembangandiri` (
  `id_pengembangan` varchar(5) NOT NULL,
  `jenis_pelatihan` varchar(20) NOT NULL,
  `institusi` varchar(25) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengembangandiri`
--

INSERT INTO `tb_pengembangandiri` (`id_pengembangan`, `jenis_pelatihan`, `institusi`, `tgl_mulai`, `tgl_selesai`, `keterangan`) VALUES
('P0001', 'Sains', 'ITN', '2023-06-04', '2023-06-04', 'Lulus'),
('P0002', 'Matematika', 'ITN', '2023-04-06', '2023-06-06', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tunjangan`
--

CREATE TABLE `tb_tunjangan` (
  `id_tunjangan` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `bpjs` int(11) NOT NULL DEFAULT 0,
  `thr` int(11) NOT NULL DEFAULT 0,
  `tunjangan_haritua` int(11) NOT NULL DEFAULT 0,
  `jumlah` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tunjangan`
--

INSERT INTO `tb_tunjangan` (`id_tunjangan`, `tanggal`, `bpjs`, `thr`, `tunjangan_haritua`, `jumlah`) VALUES
('T0001', '2023-06-04', 2000000, 2000000, 5000000, 9000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'admin123', 'admin@gmail.com', NULL, '$2y$10$dDmZQTNGjmL6NbaRL5uCb.HIEuV.Y2VMeJS7NESbRhrFewcAqSOui', NULL, '2023-06-05 07:31:37', '2023-06-05 07:31:37');

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `nip` (`id_karyawan`),
  ADD KEY `id_pengajuanijin` (`id_pengajuan`);

--
-- Indexes for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `FK_tb_gaji_tb_pegawai` (`id_karyawan`);

--
-- Indexes for table `tb_jenisijin`
--
ALTER TABLE `tb_jenisijin`
  ADD PRIMARY KEY (`kode_izin`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_tunjangan` (`id_tunjangan`),
  ADD KEY `id_pendidikan` (`id_pendidikan`),
  ADD KEY `id_pengembangan` (`id_pengembangan`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tb_pengajuanijin`
--
ALTER TABLE `tb_pengajuanijin`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_ijin` (`kode_izin`);

--
-- Indexes for table `tb_pengembangandiri`
--
ALTER TABLE `tb_pengembangandiri`
  ADD PRIMARY KEY (`id_pengembangan`);

--
-- Indexes for table `tb_tunjangan`
--
ALTER TABLE `tb_tunjangan`
  ADD PRIMARY KEY (`id_tunjangan`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `FK_tb_absensi_tb_pengajuanijin` FOREIGN KEY (`id_pengajuan`) REFERENCES `tb_pengajuanijin` (`id_pengajuan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_absensi_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_pegawai` (`id_karyawan`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD CONSTRAINT `FK_tb_gaji_tb_pegawai` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_pegawai` (`id_karyawan`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`id_pendidikan`) REFERENCES `tb_pendidikan` (`id_pendidikan`),
  ADD CONSTRAINT `tb_pegawai_ibfk_2` FOREIGN KEY (`id_pengembangan`) REFERENCES `tb_pengembangandiri` (`id_pengembangan`),
  ADD CONSTRAINT `tb_pegawai_ibfk_5` FOREIGN KEY (`id_tunjangan`) REFERENCES `tb_tunjangan` (`id_tunjangan`);

--
-- Constraints for table `tb_pengajuanijin`
--
ALTER TABLE `tb_pengajuanijin`
  ADD CONSTRAINT `tb_pengajuanijin_ibfk_1` FOREIGN KEY (`kode_izin`) REFERENCES `tb_jenisijin` (`kode_izin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
