-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 05:53 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-pos-tahu-coding`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_products`
--

CREATE TABLE `history_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtyChange` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_products`
--

INSERT INTO `history_products` (`id`, `product_id`, `user_id`, `qty`, `qtyChange`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '3', '0', 'created product', '2020-05-17 06:43:48', '2020-05-17 06:43:48'),
(2, 2, 1, '3', '0', 'created product', '2020-05-17 06:44:07', '2020-05-17 06:44:07'),
(3, 3, 1, '3', '0', 'created product', '2020-05-17 06:44:47', '2020-05-17 06:44:47'),
(4, 4, 1, '2', '0', 'created product', '2020-05-17 06:45:10', '2020-05-17 06:45:10'),
(5, 5, 1, '4', '0', 'created product', '2020-05-17 06:45:37', '2020-05-17 06:45:37'),
(6, 6, 1, '2', '0', 'created product', '2020-05-17 06:45:53', '2020-05-17 06:45:53'),
(7, 7, 1, '4', '0', 'created product', '2020-05-17 06:46:22', '2020-05-17 06:46:22'),
(8, 8, 1, '2', '0', 'created product', '2020-05-17 06:46:39', '2020-05-17 06:46:39'),
(9, 9, 1, '3', '0', 'created product', '2020-05-17 06:47:05', '2020-05-17 06:47:05'),
(10, 10, 1, '3', '0', 'created product', '2020-05-17 06:47:26', '2020-05-17 06:47:26'),
(11, 11, 1, '2', '0', 'created product', '2020-05-17 06:48:05', '2020-05-17 06:48:05'),
(12, 12, 1, '3', '0', 'created product', '2020-05-17 06:48:36', '2020-05-17 06:48:36'),
(13, 13, 1, '2', '0', 'created product', '2020-05-17 06:48:57', '2020-05-17 06:48:57'),
(14, 13, 1, '2', '2', 'change product qty from admin', '2020-05-17 06:49:47', '2020-05-17 06:49:47'),
(15, 13, 1, '4', '-1', 'change product qty from admin', '2020-05-17 06:49:54', '2020-05-17 06:49:54'),
(16, 12, 1, '3', '-1', 'decrease from transaction', '2020-05-17 06:53:04', '2020-05-17 06:53:04'),
(17, 8, 1, '2', '-1', 'decrease from transaction', '2020-05-17 06:53:04', '2020-05-17 06:53:04'),
(18, 6, 1, '2', '-2', 'decrease from transaction', '2020-05-17 06:53:04', '2020-05-17 06:53:04'),
(19, 13, 1, '3', '-1', 'decrease from transaction', '2020-05-17 06:54:05', '2020-05-17 06:54:05'),
(20, 3, 1, '3', '-1', 'decrease from transaction', '2020-05-17 06:54:05', '2020-05-17 06:54:05'),
(21, 9, 1, '3', '-1', 'decrease from transaction', '2020-05-17 06:54:05', '2020-05-17 06:54:05'),
(22, 11, 1, '2', '-1', 'decrease from transaction', '2020-05-17 06:54:17', '2020-05-17 06:54:17'),
(23, 10, 1, '3', '-1', 'decrease from transaction', '2020-05-17 06:54:17', '2020-05-17 06:54:17'),
(24, 8, 1, '1', '-1', 'decrease from transaction', '2020-05-17 06:54:30', '2020-05-17 06:54:30'),
(25, 2, 1, '3', '-1', 'decrease from transaction', '2020-05-17 06:54:30', '2020-05-17 06:54:30');

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
(4, '2020_05_16_070107_create_products_table', 1),
(5, '2020_05_16_072227_create_transcations_table', 1),
(6, '2020_05_16_072533_create_product_transation_table', 1),
(7, '2020_05_16_120622_create_history_products_table', 1);

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
('adeardiyansah125@gmail.com', '$2y$10$3ODrdUxBFPC4/OucjWsCH..mBNimgLklYHpGi6PxyttD68vIWc0Ou', '2021-08-10 01:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `qty`, `description`, `created_at`, `updated_at`) VALUES
(21, 'tongkol', 400000, 'uploads/images/1628696993tongkol.jpg', 10, 'Ikan tongkol mudah diperoleh karena ikan tersebut menyebar di seluruh pantai Indonesia. Ikan tongkol berasal dari jenis ikan scombried (ikan pelagis) yang hidup membentuk gerombolan.\r\n\r\nIkan tongkol berwarna agak gelap dan langsing, panjang ikan tongkol rata-rata sekitar 60 cm. Bagian punggung tongkol berwarna biru gelap metalik dengan pola garis-garis. Tongkol lebih banyak dikonsumsi masyarakat Jawa dan Sumatera.', NULL, '2021-08-11 08:49:53'),
(22, 'Ikan Cakalang', 20000, 'uploads/images/1628697008Cakalang.JPG', 12, 'Cakalang memiliki warna lebih terang dibanding tongkol, sehingga sering disebut “tongkol putih”. Perbedaan utamanya terletak pada bentukan badannya yang lebih gemuk dibanding tongkol.\r\n\r\nWarnanya biru keunguan hingga gelap. Cakalang merupakan santapan favorit Sulawesi dan Maluku. Cakalang rica-rica suwir sering ditemukan di wilayah ini, mulai dari bubur manado sampai dengan nasi kuning Ambon.', NULL, '2021-08-11 08:50:08'),
(23, 'Ikan Tuna', 100000, 'uploads/images/1628697023Tuna.jpg', 10, 'Indonesia merupakan salah satu penghasil ikan tuna  terbesar di dunia. Tuna dikenal memiliki nilai komersial tinggi karena berukuran besar. Tuna dewasa beratnya mulai 35 hingga 350 kilogram. Daging tuna biasanya berwarna merah muda ke merah.\r\n\r\nTuna segar selain untuk sushi dan sashimi, juga sering diolah dengan bumbu balado, kuah kuning, saus teriyaki, saus tiram, sup, hingga tongseng. Tuna juga termasuk paling mudah dicari olahannya seperti baso, abon, ikan kering, atau dikalengkan dengan mayonnaise.', NULL, '2021-08-11 08:50:23'),
(24, 'Ikan Teri', 10000, 'uploads/images/1628697033teri.JPG', 20, 'Walau biasanya berukuran kecil, ikan teri memiliki banyak manfaat. Ikan teri disebut-sebut bagus untuk kesehatan jantung, tulang dan mengatur gula darah karena tinggi kandungan kalsium, asam lemak omega 3 dan rendah kandungan lemak jenuh serta karbohidratnya.', NULL, '2021-08-11 08:50:33'),
(25, 'Ikan Kakap', 200000, 'uploads/images/1628697048kakap.JPG', 5, 'Kakap merah disebut-sebut sebagai favorit dari chef profesional karena mudah dipadupadankan dengan aneka bumbu dan dagingnya yang tebal serta duri yang mengumpul di tengah. Cita rasanya juga lebih kuat dibanding kakap putih. Selain dikenal dengan olahan gulai kepala kakap, kakap juga sering disajikan untuk sup atau ikan bakar.', NULL, '2021-08-11 08:50:48'),
(26, 'Ikan Kembung', 50000, 'uploads/images/1628697070kembung.JPG', 5, 'Berasal dari keluarga yang sama dengan ikan tongkol, tuna, dan cakalang, ikan kembung ini berukuran lebih kecil dibandingkan yang lainnya. Namun secara harga, ikan kembung ini jauh lebih murah. Selain digoreng, ikan kembung sering diolah tim sambal matah, pepes dan pesmol.', NULL, '2021-08-11 08:51:10'),
(27, 'Ikan Tenggiri', 20000, 'uploads/images/1628697083tenggiri.JPG', 19, 'Ada banyak sekali makanan khas Indonesia yang menggunakan ikan tenggiri sebagai bahan dasarnya. Seperti pempek, tekwan, tahu bakso ikan, kerupuk, kemplang, siomay, dan otak-otak. Tenggiri juga sedap dimasak dengan bumbu lempah khas Bangka Belitung (baca selengkapnya disini mengenai lezatnya cita rasa lempah khas Babel), gulai, tauco, pindang atau saos tomat.', NULL, '2021-08-11 08:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_transation`
--

CREATE TABLE `product_transation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `invoices_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_transation`
--

INSERT INTO `product_transation` (`id`, `product_id`, `invoices_number`, `qty`, `created_at`, `updated_at`) VALUES
(1, 12, 'INV-000001', 1, '2020-05-17 06:53:05', '2020-05-17 06:53:05'),
(2, 8, 'INV-000001', 1, '2020-05-17 06:53:05', '2020-05-17 06:53:05'),
(3, 6, 'INV-000001', 2, '2020-05-17 06:53:05', '2020-05-17 06:53:05'),
(4, 13, 'INV-000002', 1, '2020-05-17 06:54:05', '2020-05-17 06:54:05'),
(5, 3, 'INV-000002', 1, '2020-05-17 06:54:05', '2020-05-17 06:54:05'),
(6, 9, 'INV-000002', 1, '2020-05-17 06:54:05', '2020-05-17 06:54:05'),
(7, 11, 'INV-000003', 1, '2020-05-17 06:54:17', '2020-05-17 06:54:17'),
(8, 10, 'INV-000003', 1, '2020-05-17 06:54:17', '2020-05-17 06:54:17'),
(9, 8, 'INV-000004', 1, '2020-05-17 06:54:30', '2020-05-17 06:54:30'),
(10, 2, 'INV-000004', 1, '2020-05-17 06:54:30', '2020-05-17 06:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `transcations`
--

CREATE TABLE `transcations` (
  `invoices_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pay` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transcations`
--

INSERT INTO `transcations` (`invoices_number`, `user_id`, `pay`, `total`, `created_at`, `updated_at`) VALUES
('INV-000001', 1, 46000000, 45760000, '2020-05-17 06:53:04', '2020-05-17 06:53:04'),
('INV-000002', 1, 31000000, 30250000, '2020-05-17 06:54:05', '2020-05-17 06:54:05'),
('INV-000003', 1, 20000000, 19250000, '2020-05-17 06:54:17', '2020-05-17 06:54:17'),
('INV-000004', 1, 18000000, 17600000, '2020-05-17 06:54:30', '2020-05-17 06:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `no_telepon`) VALUES
(2, 'Ade Ardiyansah', 'adeardiyansah125@gmail.com', NULL, '$2y$10$2VPiCDQP.X3qUCV4QbSDgu.UC1C1O68Smn7mdVKbHDKCkLbIM7GgS', '3vFxu8yXyPVdX4hXd1VCNbHkRpt0PnHD6emQriCFJgaEIYNicZ92g9kONazn', '2021-08-10 02:19:34', '2021-08-10 02:19:34', ''),
(3, 'Ardiyansah', 'adeardiansyah484@gmail.com', NULL, '$2y$10$02fHCAcHHcrwIUHKND/Tien/QVPw.hyEP264YMOKhJnRjjlK6MK2u', NULL, '2021-08-11 03:54:27', '2021-08-11 03:54:27', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_products`
--
ALTER TABLE `history_products`
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
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_transation`
--
ALTER TABLE `product_transation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
