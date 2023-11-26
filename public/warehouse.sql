-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 22.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `transaksi_barang_by_month_year` (IN `month` INT, IN `year` INT)   BEGIN
    SELECT
        tb.id AS t_barang_id,
        mb.title AS nama_barang,
        mt.title AS jenis_transaksi,
        ms.title AS status_transaksi,
        u.role AS role_user,
        tb.quantity,
        tb.created_at
    FROM
        t_barang tb
    JOIN m_barang mb ON tb.m_barang_id = mb.id
    JOIN m_transaction mt ON tb.m_transaction_id = mt.id
    JOIN m_status ms ON tb.m_status_id = ms.id
    JOIN users u ON tb.m_user_id = u.id
    WHERE
        EXTRACT(MONTH FROM tb.created_at) = month
        AND EXTRACT(YEAR FROM tb.created_at) = year;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_barang`
--

CREATE TABLE `m_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0 = tidak ada, 1 = ada',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `m_barang`
--

INSERT INTO `m_barang` (`id`, `title`, `status`, `created_at`) VALUES
(1, 'OPPO A77', 1, '2023-11-26 20:37:20'),
(2, 'iPhone Xs', 1, '2023-11-26 20:37:07'),
(3, 'Samsung A50s', 1, '2023-11-26 20:36:58'),
(7, 'Samsung Galaxy', 1, '2023-11-26 20:36:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_status`
--

CREATE TABLE `m_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 = tidak aktif, 1 = aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `m_status`
--

INSERT INTO `m_status` (`id`, `title`, `status`) VALUES
(5, 'Keluar', 1),
(6, 'Masuk', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_transaction`
--

CREATE TABLE `m_transaction` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 = tidak aktif, 1 = aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `m_transaction`
--

INSERT INTO `m_transaction` (`id`, `title`, `status`) VALUES
(2, 'Barang Masuk', 1),
(3, 'Barang Keluar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_barang`
--

CREATE TABLE `t_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `m_barang_id` int(10) UNSIGNED NOT NULL,
  `m_user_id` int(10) UNSIGNED NOT NULL,
  `m_transaction_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `description` varchar(200) DEFAULT NULL,
  `receiver` varchar(200) DEFAULT NULL,
  `m_status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_barang`
--

INSERT INTO `t_barang` (`id`, `m_barang_id`, `m_user_id`, `m_transaction_id`, `quantity`, `description`, `receiver`, `m_status_id`, `created_at`, `update_at`) VALUES
(50, 3, 2, 2, 100, 'Barang dikirim oleh Korea dengan keadaan Baik dan Sempurna', 'Mahez', 6, '2023-11-26 20:38:34', NULL),
(51, 1, 2, 2, 50, 'Dikirim Sebagai Stock', 'Mahez', 6, '2023-11-26 20:39:25', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@user.com', NULL, 'user', '$2y$12$D.45YhMKxPzjekfqJl8aM.DYrfmvkDY9xKREC5a6Tbgkt6WXFzc4i', NULL, '2023-11-03 03:37:15', '2023-11-03 03:37:15'),
(2, 'Mahez', 'admin@admin.com', NULL, 'admin', '$2y$12$jSnFHUujGGw1ITqg.Fk8YOKTvjp87POpRupcL.MMb8vCkMLpoBeQW', NULL, '2023-11-03 03:37:15', '2023-11-03 03:37:15'),
(7, 'Jidan Celeng', 'jidan@jidan.com', NULL, 'user', '$2y$12$vBYSP/UwgJz1tj5ujUWFbehk2yOSEh0Nmpf5VM3RnSN/KC/aBBaGG', NULL, '2023-11-26 13:01:58', '2023-11-26 13:01:58');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_barang_keluar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_barang_keluar` (
`title` varchar(100)
,`m_barang_id` int(10) unsigned
,`kategori` varchar(50)
,`m_transaction_id` int(10) unsigned
,`quantity` int(11)
,`m_status_id` int(10) unsigned
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_barang_masuk`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_barang_masuk` (
`title` varchar(100)
,`m_barang_id` int(10) unsigned
,`kategori` varchar(50)
,`m_transaction_id` int(10) unsigned
,`quantity` int(11)
,`m_status_id` int(10) unsigned
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_jumlah_barang`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_jumlah_barang` (
`title` varchar(100)
,`m_barang_id` int(10) unsigned
,`m_transaction_id` int(10) unsigned
,`quantity` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_jumlah_barang_admin`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_jumlah_barang_admin` (
`title` varchar(100)
,`status` tinyint(2)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_record_akhir`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_record_akhir` (
`title` varchar(100)
,`m_barang_id` int(10) unsigned
,`quantity` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_total_barang`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_total_barang` (
`m_barang_id` int(10) unsigned
,`nama_barang` varchar(100)
,`stok_barang` varchar(34)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_barang_keluar`
--
DROP TABLE IF EXISTS `v_barang_keluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_barang_keluar`  AS SELECT `a`.`title` AS `title`, `t`.`m_barang_id` AS `m_barang_id`, `b`.`title` AS `kategori`, `t`.`m_transaction_id` AS `m_transaction_id`, `t`.`quantity` AS `quantity`, `t`.`m_status_id` AS `m_status_id`, `t`.`created_at` AS `created_at` FROM ((`t_barang` `t` join `m_barang` `a` on(`a`.`id` = `t`.`m_barang_id`)) join `m_transaction` `b` on(`b`.`id` = `t`.`m_transaction_id`)) WHERE `t`.`m_transaction_id` = 3 ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_barang_masuk`
--
DROP TABLE IF EXISTS `v_barang_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_barang_masuk`  AS SELECT `a`.`title` AS `title`, `t`.`m_barang_id` AS `m_barang_id`, `b`.`title` AS `kategori`, `t`.`m_transaction_id` AS `m_transaction_id`, `t`.`quantity` AS `quantity`, `t`.`m_status_id` AS `m_status_id`, `t`.`created_at` AS `created_at` FROM ((`t_barang` `t` join `m_barang` `a` on(`a`.`id` = `t`.`m_barang_id`)) join `m_transaction` `b` on(`b`.`id` = `t`.`m_transaction_id`)) WHERE `t`.`m_transaction_id` = 2 ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_jumlah_barang`
--
DROP TABLE IF EXISTS `v_jumlah_barang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jumlah_barang`  AS SELECT `a`.`title` AS `title`, `b`.`m_barang_id` AS `m_barang_id`, `b`.`m_transaction_id` AS `m_transaction_id`, `b`.`quantity` AS `quantity` FROM (`m_barang` `a` left join `t_barang` `b` on(`a`.`id` = `b`.`m_barang_id`)) WHERE `a`.`status` = 1 AND `b`.`quantity` is not null ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_jumlah_barang_admin`
--
DROP TABLE IF EXISTS `v_jumlah_barang_admin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jumlah_barang_admin`  AS SELECT `a`.`title` AS `title`, `a`.`status` AS `status` FROM (`m_barang` `a` left join `t_barang` `b` on(`a`.`id` = `b`.`m_barang_id`)) WHERE `a`.`status` = 1 AND `a`.`id` is not null ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_record_akhir`
--
DROP TABLE IF EXISTS `v_record_akhir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_record_akhir`  AS SELECT `a`.`title` AS `title`, `b`.`m_barang_id` AS `m_barang_id`, `b`.`quantity` AS `quantity` FROM (`m_barang` `a` left join `t_barang` `b` on(`a`.`id` = `b`.`m_barang_id`)) WHERE `a`.`status` = 1 AND `b`.`quantity` is not null ORDER BY `b`.`id` DESC LIMIT 0, 5 ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_total_barang`
--
DROP TABLE IF EXISTS `v_total_barang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_barang`  AS SELECT `m_barang`.`id` AS `m_barang_id`, `m_barang`.`title` AS `nama_barang`, concat(ifnull(sum(case when `m_transaction`.`title` = 'barang masuk' then `t_barang`.`quantity` else 0 end),0) - ifnull(sum(case when `m_transaction`.`title` = 'barang keluar' then `t_barang`.`quantity` else 0 end),0)) AS `stok_barang` FROM ((`m_barang` join `t_barang` on(`m_barang`.`id` = `t_barang`.`m_barang_id`)) join `m_transaction` on(`t_barang`.`m_transaction_id` = `m_transaction`.`id`)) GROUP BY `m_barang`.`id`, `m_barang`.`title` ;

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
-- Indeks untuk tabel `m_barang`
--
ALTER TABLE `m_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_status`
--
ALTER TABLE `m_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_transaction`
--
ALTER TABLE `m_transaction`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_t_barang_m_barang` (`m_barang_id`),
  ADD KEY `FK_t_barang_m_user` (`m_user_id`),
  ADD KEY `FK_t_barang_m_status` (`m_status_id`),
  ADD KEY `FK_t_barang_m_transaction` (`m_transaction_id`) USING BTREE;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `m_barang`
--
ALTER TABLE `m_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `m_status`
--
ALTER TABLE `m_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `m_transaction`
--
ALTER TABLE `m_transaction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  ADD CONSTRAINT `FK_t_barang_m_barang` FOREIGN KEY (`m_barang_id`) REFERENCES `m_barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_t_barang_m_status` FOREIGN KEY (`m_status_id`) REFERENCES `m_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_t_barang_m_transaction` FOREIGN KEY (`m_transaction_id`) REFERENCES `m_transaction` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_t_barang_m_user` FOREIGN KEY (`m_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
