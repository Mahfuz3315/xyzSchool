-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 07:07 AM
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
-- Database: `school_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissionresults`
--

CREATE TABLE `admissionresults` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissionresults`
--

INSERT INTO `admissionresults` (`id`, `name`, `remarks`) VALUES
(584769875, 'Fahad Faisal Arpan', 'Pass'),
(25415698, 'Arif Shakil', 'Fail'),
(25415896, 'Taufiqul Islam', 'Pass'),
(36524158, 'Afrin A Heram', 'Fail'),
(85415796, 'Sakibur Rahman', 'Pass'),
(12458693, 'Sanjida Islam', 'Pass'),
(21547854, 'Abdullah Al Maruf', 'Fail'),
(25415698, 'Arif Shakil', 'Fail'),
(96854126, 'Kibria Uddin', 'Fail'),
(78456935, 'Jason Mahmud', 'Pass'),
(58697459, 'Jason Momoa', 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(46, '2022_08_05_144358_create_result_table', 1),
(54, '2022_08_05_144358_create_results_table', 2),
(55, '2014_10_12_000000_create_users_table', 3),
(56, '2014_10_12_100000_create_password_resets_table', 3),
(57, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(58, '2019_08_19_000000_create_failed_jobs_table', 3),
(59, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(60, '2022_08_02_075129_create_login_table', 3),
(61, '2022_08_02_143654_create_sessions_table', 3),
(62, '2022_08_05_145731_create_results_table', 3),
(63, '2022_08_05_154451_create_routine_table', 4),
(65, '2022_08_05_155324_create_routines_table', 5),
(66, '2022_08_08_055223_create_admission_results_table', 6),
(67, '2022_08_08_061424_create_admissionresults_table', 7),
(68, '2022_08_15_073504_create_results_table', 8),
(69, '2022_08_17_153152_create_users_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bangla` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `mathematics` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `biology` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `name`, `bangla`, `english`, `mathematics`, `physics`, `chemistry`, `biology`, `created_at`, `updated_at`) VALUES
(1, 22341069, 'Mahfuzur Rahman', 100, 100, 100, 100, 100, 100, '2022-08-15 01:36:29', '2022-08-15 01:36:29'),
(2, 22341070, 'Fahad Faisal Arpan', 90, 90, 90, 90, 90, 90, '2022-08-15 01:37:39', '2022-08-15 01:37:39'),
(4, 22341071, 'Sakibur Rahman', 85, 93, 83, 86, 63, 79, '2022-08-17 23:02:22', '2022-08-17 23:02:22'),
(5, 19101487, 'Abdullah Al Maruf', 89, 86, 83, 85, 82, 81, '2022-08-17 23:02:48', '2022-08-17 23:02:48'),
(6, 19101485, 'Fariha Oishee', 86, 87, 84, 86, 88, 89, '2022-08-17 23:03:25', '2022-08-17 23:03:25'),
(7, 22341059, 'Afrin A Heram', 88, 89, 87, 85, 83, 79, '2022-08-17 23:03:50', '2022-08-17 23:03:50'),
(8, 22341075, 'Saiki Tahsin', 96, 89, 88, 83, 81, 80, '2022-08-17 23:04:21', '2022-08-17 23:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `Day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Period_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Period_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Period_3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Period_4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Period_5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Period_6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`Day`, `Period_1`, `Period_2`, `Period_3`, `Period_4`, `Period_5`, `Period_6`) VALUES
('Saturday', 'Bangla', 'English', 'Mathematics', 'Physics', 'Chemistry', 'Biology'),
('Sunday', 'Biology', 'Physics', 'Bangla', 'Mathematics', 'Chemistry', 'English'),
('Monday', 'Mathematics', 'Bangla', 'Chemistry', 'Biology', 'Physics', 'English'),
('Tuesday', 'English', 'Chemistry', 'Physics', 'Mathematics', 'Biology', 'Bangla'),
('Wednesday', 'Bangla', 'Chemistry', 'English', 'Physics', 'Mathematics', 'Biology'),
('Thursday', 'Bangla', 'Physics', 'Biology', 'Mathematics', 'English', 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Tz2Er6ngghI30XBSFYQwOKVQhKsj8ARWEvviWCUk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYWxzaXpSZTd3THdCNEgyV2Exa1ZWMWc5REQzSEhwTVVKY3RYZDU3eiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1660799237);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `student_id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `student_id`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Mahfuzur Rahman', 'mahfuz3315@gmail.com', 'student', 22341069, NULL, '$2y$10$zwQfe/Wt2ShCVuBSXKvP9uDJPCkT2MyoHpA3nMQqFmCykHAce7S0O', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-05 08:58:45', '2022-08-05 08:58:45'),
(2, 'Fahad Faisal', 'fahad123@gmail.com', 'student', 22341070, NULL, '$2y$10$EX8yThcNrCl69Qrc9tItbuKOT3CTBEipZns3ItEwKWN0qpUqhAbdW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-08 00:52:49', '2022-08-08 00:52:49'),
(4, 'admin1', 'admin1@gmail.com', 'admin', 0, NULL, '$2y$10$zTk4YHzOycKdQrVNm8sWRO2smP2i/hFN76M8QjkY/AICJs0ApLMlK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-10 09:08:25', '2022-08-10 09:08:25'),
(5, 'Taufiqul Islam Khan', 'taufiqul@gmail.com', 'teacher', 0, NULL, '$2y$10$EaT1NeM1JOZzzL5YW/3roeB5fLosOSEuDDkda2KSz5YQaN8axC0.K', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-15 00:03:21', '2022-08-15 00:03:21'),
(8, 'Abdullah Al Maruf', 'maruf@gmail.com', 'student', 19101487, NULL, '$2y$10$sVicm.EV.GpVYr54QTJBqebSTfPqJmUoxbD9ZQJ0QOFbtL1znH4A.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:46:19', '2022-08-17 22:46:19'),
(9, 'Sakibur Rahman', 'sakib69@gmail.com', 'student', 22341071, NULL, '$2y$10$/C/wHQRmUFguFuV57v2Q4evrOUwe6YtfBjqHa0xLRXTqtBchb6hcO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:46:55', '2022-08-17 22:46:55'),
(10, 'Fariha Oishee', 'fariha@gmail.com', 'student', 19101485, NULL, '$2y$10$8yHTt4XLUBMywqLoYywIxORnSawsPjL.YmWgxSM0oXsyLn9KB8B0K', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:47:49', '2022-08-17 22:47:49'),
(11, 'Afrin A Heram', 'afrin@gmail.com', 'student', 22341059, NULL, '$2y$10$LV2YgzPLeO43nRD1dAT5sOC.epshtrDo9crI0Tz6Iu0SBPTM.6SLm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:48:41', '2022-08-17 22:48:41'),
(12, 'Sanjida Islam', 'sanjida@gmail.com', 'student', 19101589, NULL, '$2y$10$ICH.Ri7iAxvcFbjElm0jlOtg7poSLIFhOUW.cgn/SsMqm32/Q9I8e', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:49:40', '2022-08-17 22:49:40'),
(13, 'Saiki Tahsin', 'saiki@gmail.com', 'student', 22341075, NULL, '$2y$10$YYLnXrcuPpFo/eSS2/MXk.gCpTIL5TPfdzh0QinfSElI5RTZYleIW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:50:36', '2022-08-17 22:50:36'),
(14, 'Abdullah Al Amin', 'abdullah@gmail.com', 'student', 22341079, NULL, '$2y$10$DCwEmXsxtWI8mLrmKXMKReIeIKQMMsug./eeFb32HgEWzYO7DTpSe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:51:35', '2022-08-17 22:51:35'),
(15, 'Mehrab Islam', 'mehrab@gmail.com', 'student', 22341096, NULL, '$2y$10$C0U3FNDjPA91wzIsUdhZGeh5iv1xdGbxSTsAnicYv9oA2QMq25vIi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:52:22', '2022-08-17 22:52:22'),
(16, 'Arif Shakil', 'arif@gmail.com', 'teacher', 0, NULL, '$2y$10$XV5qhxd1f5SWwp7HsEJ14uDr9T0pQSMhNjbJQqy/Vy8XrF8mmRkQG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:52:49', '2022-08-17 22:52:49'),
(17, 'Tanvir Rahman', 'tanvir@gmail.com', 'teacher', 0, NULL, '$2y$10$wb1ZmZyWi5.PAv2efAdnwepssZvs9LAjWaVyYHQTGB/ACtpg.1IJ2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:53:44', '2022-08-17 22:53:44'),
(18, 'Faisal Bin Ashraf', 'faisal@gmail.com', 'teacher', 0, NULL, '$2y$10$QkO2QVD6t7E7xZ293nbZDOviHRXUEXBkSBJd5keWc6cmLlLW7w98C', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:57:15', '2022-08-17 22:57:15'),
(19, 'Arnisha Khondakar', 'arnisha@gmail.com', 'teacher', 0, NULL, '$2y$10$kQcVH3W.3vxMDSQxveFQ4.HUvEew/ffxObSayJHA8GL0jYps12pY2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17 22:59:04', '2022-08-17 22:59:04');

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
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
