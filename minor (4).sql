-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 02:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minor`
--

-- --------------------------------------------------------

--
-- Table structure for table `authe`
--

CREATE TABLE `authe` (
  `name` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authe`
--

INSERT INTO `authe` (`name`, `password`, `created_at`, `updated_at`) VALUES
('admin', '$2y$10$HmacK.Qj1SGzRWjJQ5d7hOxantD1RCz.NzHbzVIJJUn1OGQm0PbZe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `mtype` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `mlink` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `name`, `mtype`, `description`, `mlink`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pathaan', 'action, Romance', 'The fate of humanity hangs in the balance as the U.S. President and citizens decide if these aliens are to be trusted ...or feared.', 'https://www.youtube.com/embed/vqu4z34wENw?si=RcGtPPsNNnPr8m2Y', '1724048216pathaan.jpg', '2024-08-19 00:46:56', '2024-08-19 00:46:56'),
(2, 'War', 'action, Romance', 'Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.', 'https://www.youtube.com/embed/tQ0mzXRk-oM?si=ctdY12spkWAdsC0I', '1724048650War.jpg', '2024-08-19 00:54:10', '2024-08-19 00:54:10'),
(3, 'Kalki 2898 AD', 'action, Romance', 'In 1977, paranormal investigators Ed (Patrick Wilson) and Lorraine Warren come out of a self-imposed sabbatical to travel to Enfield, a borough in north ...', 'https://www.youtube.com/embed/aninoDcPWo4?si=tiNMjTQFs90zD8TR', '1724048808kalki.jpg', '2024-08-19 00:56:48', '2024-08-19 00:56:48'),
(4, 'Conjuring 2', 'Horror', 'Six children, genetically cross-bred with avian DNA, take flight around the country to discover their origins. Along the way, their mysterious past is ...', 'https://www.youtube.com/embed/VFsmuRPClr4?si=HSwZTTcXYILMoaUJ', '17240489687.jpg', '2024-08-19 00:59:28', '2024-08-19 00:59:28'),
(5, 'Pushpa 2', 'Action, Mistry', 'Bullied as a teen for being overweight, Bob Stone (Dwayne Johnson) shows up to his high school reunion looking fit and muscular. Claiming to be on a top-secret ...', 'https://www.youtube.com/embed/pKctjlxbFDQ?si=FYG9_ySD6WHrU4CH', '1724049133pushpa-2.png', '2024-08-19 01:02:13', '2024-08-19 01:02:13'),
(6, 'Fighter', 'action, Romance', 'In the film\'s epilogue, Scrat keeps struggling to control the alien ship until it crashes on Mars, destroying all life on the planet.', 'https://www.youtube.com/embed/6amIq_mP4xM?si=qJ0I5Qzn-Ht5_UxZ', '1724049240Fighter.jpg', '2024-08-19 01:04:00', '2024-08-19 01:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Action', '2024-08-11 02:38:00', '2024-08-11 02:38:00'),
(2, 'Horror', '2024-08-11 03:00:45', '2024-08-11 03:00:45'),
(3, 'Anime', '2024-08-27 09:58:02', '2024-08-27 09:58:02'),
(4, 'Kids', '2024-08-27 09:58:11', '2024-08-27 09:58:11'),
(5, 'Comedy', '2024-08-27 09:58:18', '2024-08-27 09:58:18'),
(6, 'Fantasy', '2024-08-27 09:58:56', '2024-08-27 09:58:56'),
(7, 'Drama', '2024-08-27 09:59:03', '2024-08-27 09:59:03'),
(8, 'Mystery & Thrillers', '2024-08-27 09:59:52', '2024-08-27 09:59:52'),
(9, 'Science fiction', '2024-08-27 10:00:16', '2024-08-27 10:00:16'),
(10, 'Romance', '2024-08-27 10:00:59', '2024-08-27 10:00:59');

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
(5, '2024_08_11_074349_category', 2),
(6, '2024_08_11_104125_movies', 3),
(7, '2024_08_13_144927_authe', 4),
(8, '2024_08_18_180415_create_carousels_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mname` varchar(255) NOT NULL,
  `mtype` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL,
  `mlink` varchar(700) NOT NULL,
  `mprice` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `mname`, `mtype`, `description`, `image`, `mlink`, `mprice`, `created_at`, `updated_at`) VALUES
(1, 'kill', 'Action', 'This is a wonderfull action movie', 'kill.jpg', 'https://www.youtube.com/embed/y2HZqeVeBNc?si=bisXgoAmIDBvUBmp', 500, '2024-08-11 05:39:23', '2024-08-11 05:39:23'),
(2, 'Leo', 'Action', 'Action overload', 'leo.jpg', 'https://www.youtube.com/embed/qN3wfuPYTI4?si=nunTlb2_zy8kEGnq', 440, '2024-08-11 06:02:15', '2024-08-18 01:20:20'),
(4, 'Veerta the power', 'Romance', 'good acting', 'veerta.jpg', 'https://www.youtube.com/embed/Nw1wSTJyULg?si=9xYDTlSjKkk4VSqu', 0, '2024-09-06 23:43:09', '2024-09-06 23:43:09'),
(5, 'Real protector', 'Action', 'heavy action', 'real.jpg', 'https://www.youtube.com/embed/EC7g_WRLuUA?si=7kiYLUDcai8f_LeS', 0, '2024-09-06 23:44:44', '2024-09-06 23:44:44'),
(6, 'Badrinath', 'Action', 'good', 'badri.jpg', 'https://www.youtube.com/embed/SQ4QCLEF5sg?si=nNyuGWyTZkvRem8_', 0, '2024-09-06 23:46:35', '2024-09-06 23:46:35'),
(7, 'House of dead', 'Horror', 'very much horror scence', 'house.jpg', 'https://www.youtube.com/embed/rGsXo6cjKyE?si=Sll_RyPlrGNmAs1Z', 0, '2024-09-06 23:48:03', '2024-09-06 23:48:03'),
(8, 'Guardian', 'Horror', 'horror another', 'guardian.jpg', 'https://www.youtube.com/embed/k7tLllmRVu4?si=xoL8YuVnTsBvRJ2K', 0, '2024-09-06 23:49:23', '2024-09-06 23:49:23'),
(9, 'Surya', 'Action', 'action level too high', 'surya.jpg', 'https://www.youtube.com/embed/iDT-VJy5r9s?si=7zTwZfwYmylbE7tV', 249, '2024-09-06 23:51:03', '2024-09-06 23:51:03'),
(10, 'AA21', 'Action', 'Action', 'AA21.jpg', 'https://www.youtube.com/embed/AfJHOftU6j0?si=I0whlRzjCqWb2tDT', 0, '2024-09-06 23:53:03', '2024-09-06 23:53:03'),
(11, 'Antem faisla', 'Action', 'good action', 'antim.jpg', 'https://www.youtube.com/embed/F2l4zPzTw4Y?si=msNoffJHtlF6hQrp', 0, '2024-09-06 23:54:23', '2024-09-06 23:54:23'),
(12, 'Asli fire', 'Action', 'very action', 'asli.jpg', 'https://www.youtube.com/embed/AdJ4Y500XPk?si=M9honOmLM00iPmw3', 0, '2024-09-06 23:55:29', '2024-09-06 23:55:29'),
(13, 'Lucky the racer', 'Action', 'action overload', 'lucky.jpg', 'https://www.youtube.com/embed/5xsQYwZ-njs?si=JhKyTKuJk8Zjan_q', 250, '2024-09-06 23:56:43', '2024-09-06 23:56:43'),
(14, 'Dunki', 'Comedy', 'various comedy scence', 'Dunki.jpg', 'https://www.youtube.com/embed/ACKQDAlAfFE?si=PTkn_WiNp0YTeFzW', 300, '2024-09-09 01:30:37', '2024-09-09 01:30:37'),
(15, 'Raj Mahal 2', 'Horror', 'horror story', 'raj_mahal_2.jpg', 'https://www.youtube.com/embed/BlbtqljHm88?si=CsBtFe_6UOhJ-42z', 199, '2024-09-12 06:14:37', '2024-09-12 06:14:37'),
(16, 'Kanchana 2', 'Horror', 'Horror stories', 'kanchana_2.jpg', 'https://www.youtube.com/embed/aA9y1a25OnU?si=Ag_rs32T1jzV1xgV', 0, '2024-09-12 06:20:03', '2024-09-12 06:20:03'),
(17, 'Policewala Gunda 2', 'Mystery & Thrillers', 'mystry', 'policewala-gunda-2.jpg', 'https://www.youtube.com/embed/HYRZiCa5oTQ?si=wcHQTHdGGq3p8IRc', 200, '2024-09-12 06:27:51', '2024-09-12 06:27:51'),
(18, 'Rocketry', 'Science fiction', 'rocket making story', 'rocketry.jpg', 'https://www.youtube.com/embed/yEinBUJG2RI?si=h5cDErJAU-H4tIWu', 500, '2024-09-12 06:35:40', '2024-09-12 06:35:40'),
(19, 'Ra-one', 'Science fiction', 'game robots', 'raone.jpg', 'https://www.youtube.com/embed/MjE1CK5PGrk?si=yPSFRI5_z4ai5fcL', 299, '2024-09-12 06:38:12', '2024-09-12 06:38:12'),
(20, 'Robot 2.0', 'Science fiction', 'robotics', 'robot_2.0.jpg', 'https://www.youtube.com/embed/_qOl_7qfPOM?si=lMSDeyBPYtYeuRqN', 250, '2024-09-12 06:41:23', '2024-09-12 06:41:23'),
(21, 'Munnabhaiya MBBS', 'Comedy', 'comedy scence', 'munnabahiya_mbbs.jpg', 'https://www.youtube.com/embed/6lCGvu-hwX4?si=9Ny4tcJhSo9t6q2W', 0, '2024-09-12 06:45:07', '2024-09-12 06:45:07'),
(22, 'Tiger 3', 'Mystery & Thrillers', 'story', 'tiger_3.jpg', 'https://www.youtube.com/embed/vEjTUDjjU6A?si=gOeMFIr5HPLMvqNn', 199, '2024-09-12 06:47:23', '2024-09-12 06:47:23'),
(23, 'Krish', 'Science fiction', 'action also have in this movie', 'krrish.jpg', 'https://www.youtube.com/embed/0r7jHPyMP4A?si=omaw24D9pfhLj6n3', 249, '2024-09-12 06:49:55', '2024-09-12 06:49:55'),
(24, 'war', 'Action', 'action another level', 'war.jpg', 'https://www.youtube.com/embed/tQ0mzXRk-oM?si=bNpClGD4tkkjiN7Y', 200, '2024-09-12 06:53:06', '2024-09-12 06:53:06'),
(25, 'jawan', 'Action', 'action', 'jawan.jpg', 'https://www.youtube.com/embed/k8YiqM0Y-78?si=-rUQL1bvMYxqEK7e', 155, '2024-09-12 06:57:14', '2024-09-12 06:57:14'),
(26, 'Kalki 2898 AD', 'Fantasy', 'fantasy movie', 'kalki.jpg', 'https://www.youtube.com/embed/aninoDcPWo4?si=tiNMjTQFs90zD8TR', 450, '2024-09-12 07:00:04', '2024-09-12 07:00:04'),
(27, 'Pathaan', 'Action', 'action overload', 'pathaan.jpg', 'https://www.youtube.com/embed/vqu4z34wENw?si=RcGtPPsNNnPr8m2Y', 500, '2024-09-12 07:01:37', '2024-09-12 07:01:37'),
(28, 'Beast', 'Mystery & Thrillers', 'some crusius', 'Beast.jpg', 'https://www.youtube.com/embed/0q7bKjLa0Nc?si=gQ95epU4uMvb30UH', 600, '2024-09-12 07:04:47', '2024-09-12 07:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('comedyexpress767@gmail.com', '65nTQva1S8BNRsqD4fWlHAJggZJvLaD0A83OH8sxJ0RqfpLLgi2hLZMhdv4FfYZ7', '2025-01-10 06:24:08');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(500) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$HmacK.Qj1SGzRWjJQ5d7hOxantD1RCz.NzHbzVIJJUn1OGQm0PbZe', NULL, NULL, NULL),
(2, 'koley', 'koley69@gmail.com', NULL, '$2y$10$PtnopwkZB/Ib9VwPIIp3QOvVC6mFvXILWqSCUgvq2yhjuvObI9EXy', NULL, '2024-09-07 07:07:56', '2024-09-07 07:07:56'),
(3, 'mousam', 'mousam123@gmail.com', NULL, '$2y$10$cYuC8yQYoUxHe.Q8tPBONu1TTFMgA8pN/.NlZqQvEuGFpHkSRl.VO', NULL, '2024-09-09 07:30:01', '2024-09-09 07:30:01'),
(4, 'puti', 'comedyexpress767@gmail.com', NULL, '$2y$10$AbskXe4SlDME71FiRh9jtupHoy/0nZHXjQ8hasO9pH3yDaErPlN6G', NULL, '2024-12-26 07:41:04', '2024-12-26 07:41:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

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
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
