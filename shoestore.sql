-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 05:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashiers`
--

CREATE TABLE `cashiers` (
  `id` int(10) NOT NULL,
  `kode_kasir` varchar(10) NOT NULL,
  `nama_kasir` varchar(255) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cashiers`
--

INSERT INTO `cashiers` (`id`, `kode_kasir`, `nama_kasir`, `jenis_kelamin`, `nomor_hp`, `created_at`, `updated_at`) VALUES
(1, 'K01', 'Aloy', 'L', '081366881200', '2023-12-10 15:22:21', '2023-12-10 15:22:21'),
(2, 'K02', 'Bila', 'L', '081365454321', '2023-12-10 14:33:16', '2023-12-10 14:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat_pelanggan` varchar(255) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `nama_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `nomor_hp`, `created_at`, `updated_at`) VALUES
(1, 'P01', 'Cindy Kasih', 'Jl.Sumatera', '081243560987', '2023-12-10 14:44:06', '2023-12-10 14:44:06');

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
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` int(10) NOT NULL,
  `laba` int(10) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `laba`, `created_at`, `updated_at`) VALUES
(3, 1270000, '2023-12-24', '0000-00-00 00:00:00');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(7, '2023_12_16_074332_create_sessions_table', 2);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `gambar_barang` varchar(255) NOT NULL,
  `stok_barang` int(10) NOT NULL,
  `harga_barang` int(10) NOT NULL,
  `modal_barang` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `kode_barang`, `nama_barang`, `gambar_barang`, `stok_barang`, `harga_barang`, `modal_barang`, `created_at`, `updated_at`) VALUES
(1, 'B01', 'Sneakers', 'sneakers.png', 20, 110000, 80000, '2023-12-10 01:24:44', '2023-12-11 13:39:20'),
(2, 'B02', 'Nike', 'nike.png', 10, 150000, 120000, '2023-12-10 05:08:44', '2023-12-10 05:08:44'),
(3, 'B03', 'Adidas', 'adidas.png', 50, 250000, 260000, '2023-12-10 05:09:29', '2023-12-10 05:09:29'),
(4, 'B04', 'Converse', '1702769600_converse.png', 20, 120000, 100000, '2023-12-16 23:33:20', '2023-12-16 23:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `transactions_id` varchar(10) NOT NULL,
  `total_harga` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `transactions_id`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 'T01', 500000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'T02', 720000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'T03', 240000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'T04', 670000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'T05', 360000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'T06', 240000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'T08', 220000, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` int(10) NOT NULL,
  `transactions_id` varchar(10) DEFAULT NULL,
  `kode_kasir` varchar(10) DEFAULT NULL,
  `nama_pelanggan` varchar(10) DEFAULT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `jumlah_barang` int(10) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transactions_id`, `kode_kasir`, `nama_pelanggan`, `kode_barang`, `jumlah_barang`, `gambar`, `nama_barang`, `harga`, `created_at`, `updated_at`) VALUES
(14, 'T01', 'K01', 'P01', 'B03', 2, 'adidas.png', 'Adidas', 500000, '2023-12-23 02:56:51', '2023-12-23 02:56:51'),
(15, 'T02', 'K02', 'P02', 'B03', 2, 'adidas.png', 'Adidas', 500000, '2023-12-23 02:59:48', '2023-12-23 02:59:48'),
(17, 'T02', 'K02', 'P02', 'B01', 1, 'sneakers.png', 'Sneakers', 110000, '2023-12-23 03:32:55', '2023-12-23 03:32:55'),
(18, 'T02', 'K02', 'P02', 'B01', 2, 'sneakers.png', 'Sneakers', 220000, '2023-12-23 03:37:28', '2023-12-23 03:37:28'),
(19, 'T03', 'K02', 'P03', 'B04', 2, '1702769600_converse.png', 'Converse', 240000, '2023-12-23 04:18:38', '2023-12-23 04:18:38'),
(20, 'T04', 'K03', 'P03', 'B01', 2, 'sneakers.png', 'Sneakers', 220000, '2023-12-23 05:30:30', '2023-12-23 05:30:30'),
(21, 'T05', 'K02', 'P02', 'B04', 3, '1702769600_converse.png', 'Converse', 360000, '2023-12-24 02:03:51', '2023-12-24 02:03:51'),
(22, 'T06', 'K03', 'P03', 'B04', 2, '1702769600_converse.png', 'Converse', 240000, '2023-12-24 02:21:13', '2023-12-24 02:21:13'),
(23, 'T04', 'K02', 'P01', 'B02', 3, 'nike.png', 'Nike', 450000, '2023-12-24 04:01:53', '2023-12-24 04:01:53'),
(24, 'T08', 'K02', 'P01', 'B01', 2, 'sneakers.png', 'Sneakers', 220000, '2023-12-24 04:02:53', '2023-12-24 04:02:53');

--
-- Triggers `transaction_details`
--
DELIMITER $$
CREATE TRIGGER `SET_HARGA_GAMBAR_NAMA` BEFORE INSERT ON `transaction_details` FOR EACH ROW BEGIN
    DECLARE barang_harga INT;
    DECLARE v_gambar VARCHAR(255);
    DECLARE namaB VARCHAR(255);
    
    -- Ambil harga dari tabel barang
    SELECT harga_barang,gambar_barang,nama_barang INTO barang_harga,v_gambar,namaB FROM stocks WHERE kode_barang = NEW.kode_barang;
    
    -- Hitung total harga dan set kolom total_harga di tabel transaksi
    SET NEW.harga = barang_harga * NEW.jumlah_barang;
    SET NEW.gambar = v_gambar;
    SET NEW.nama_barang = namaB;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `jumlah_total_harga` AFTER INSERT ON `transaction_details` FOR EACH ROW BEGIN
    -- Memeriksa apakah ID sudah ada di Tabel transactions
    IF EXISTS (SELECT 1 FROM transactions WHERE transactions_id = NEW.transactions_id) THEN
        -- Jika sudah ada, update total_harga
        UPDATE transactions
        SET total_harga = total_harga + NEW.harga
        WHERE transactions_id = NEW.transactions_id;
    ELSE
        -- Jika belum ada, masukkan data baru
        INSERT INTO transactions (transactions_id, total_harga)
        VALUES (NEW.transactions_id, NEW.harga);
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `set_keuntungan_hari_ini` AFTER INSERT ON `transaction_details` FOR EACH ROW BEGIN
    DECLARE tanggal DATE;
    SET tanggal = (SELECT CONVERT(created_at, DATE) FROM transaction_details WHERE id = NEW.id);

    -- Memeriksa apakah tanggal sudah ada di Tabel incomes
    IF EXISTS (SELECT 1 FROM incomes WHERE created_at = tanggal) THEN
        -- Jika sudah ada, update laba
        UPDATE incomes
        SET laba = laba + NEW.harga
        WHERE created_at = tanggal;
    ELSE
        -- Jika belum ada, masukkan data baru
        INSERT INTO incomes (created_at, laba)
        VALUES (tanggal, NEW.harga);
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 1, NULL, '$2y$12$ZlJLlxgPSW/3cr9gMw9Kq.V8BKomRzkhlwG3ZCU8CKNSi.37URxdW', NULL, NULL, NULL, NULL, '2023-12-09 16:57:44', '2023-12-09 16:57:44'),
(2, 'Raihan', 'user@gmail.com', 0, NULL, '$2y$12$t6/PR9n3yCzCM8GdM2eFl.ztyCgeijr6eMMOwO5ny8T4vPVs4qpeO', NULL, NULL, NULL, NULL, '2023-12-16 03:32:43', '2023-12-16 03:32:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashiers`
--
ALTER TABLE `cashiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CK_kode_barang_unique` (`kode_barang`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_id` (`transactions_id`),
  ADD KEY `fk_kode_barang` (`kode_barang`);

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
-- AUTO_INCREMENT for table `cashiers`
--
ALTER TABLE `cashiers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `fk_kode_barang` FOREIGN KEY (`kode_barang`) REFERENCES `stocks` (`kode_barang`),
  ADD CONSTRAINT `transaction_details_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `stocks` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
