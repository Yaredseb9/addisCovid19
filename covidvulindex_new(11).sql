-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 11:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidvulindex_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indicator_id` bigint(20) UNSIGNED NOT NULL,
  `ketena_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcity_id` bigint(20) UNSIGNED DEFAULT NULL,
  `woreda_id` bigint(20) UNSIGNED DEFAULT NULL,
  `value` varchar(50) NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pationt` varchar(50) DEFAULT NULL,
  `office_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `indicator_id`, `ketena_id`, `subcity_id`, `woreda_id`, `value`, `user_id`, `pationt`, `office_id`, `created_at`, `updated_at`) VALUES
(174, 59, 8, 2, 8, '0', 4, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(175, 59, 9, 2, 8, '0', 4, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(176, 59, 10, 2, 9, '0', 4, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(177, 59, 11, 2, 9, '0', 4, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(178, 59, 12, 1, 10, '1000', 6, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(179, 59, 13, 1, 10, '500', 6, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(180, 59, 14, 1, 11, '256', 8, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(181, 59, 15, 1, 11, '286', 8, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(182, 59, 16, 3, 12, '0', 4, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(183, 59, 17, 3, 12, '0', 4, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(184, 59, 18, 3, 13, '600', 10, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(185, 59, 19, 3, 13, '800', 10, NULL, NULL, NULL, '2021-06-30 12:22:50'),
(192, 60, 8, 2, 8, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(193, 60, 9, 2, 8, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(194, 60, 10, 2, 9, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(195, 60, 11, 2, 9, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(196, 60, 12, 1, 10, '60', 6, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(197, 60, 13, 1, 10, '40', 6, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(198, 60, 14, 1, 11, '215', 8, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(199, 60, 15, 1, 11, '266', 8, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(200, 60, 16, 3, 12, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(201, 60, 17, 3, 12, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(202, 60, 18, 3, 13, '600', 10, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(203, 60, 19, 3, 13, '400', 10, NULL, NULL, NULL, '2021-06-30 12:23:29'),
(210, 61, 8, 2, 8, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(211, 61, 9, 2, 8, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(212, 61, 10, 2, 9, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(213, 61, 11, 2, 9, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(214, 61, 12, 1, 10, '500', 6, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(215, 61, 13, 1, 10, '300', 6, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(216, 61, 14, 1, 11, '332', 8, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(217, 61, 15, 1, 11, '256', 8, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(218, 61, 16, 3, 12, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(219, 61, 17, 3, 12, '0', 4, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(220, 61, 18, 3, 13, '10', 10, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(221, 61, 19, 3, 13, '40', 10, NULL, NULL, NULL, '2021-06-30 12:23:47'),
(246, 63, 8, 2, 8, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(247, 63, 9, 2, 8, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(248, 63, 10, 2, 9, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(249, 63, 11, 2, 9, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(250, 63, 12, 1, 10, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(251, 63, 13, 1, 10, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(252, 63, 14, 1, 11, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(253, 63, 15, 1, 11, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(254, 63, 16, 3, 12, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(255, 63, 17, 3, 12, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(256, 63, 18, 3, 13, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33'),
(257, 63, 19, 3, 13, '0', 4, NULL, NULL, NULL, '2021-07-04 20:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
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
-- Table structure for table `indicators`
--

DROP TABLE IF EXISTS `indicators`;
CREATE TABLE `indicators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'community',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indicators`
--

INSERT INTO `indicators` (`id`, `name`, `discription`, `catagory`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(59, 'Proportion of male population', 'Proportion of male population', 'community', 1, '2021-06-30 12:22:50', NULL, 4),
(60, 'Proportion of adults', 'Proportion of adults ( age >= 15) who had not attained school/who cannot read or write', 'community', 0, '2021-06-30 12:23:29', NULL, 4),
(61, 'Proportion of un employed', 'Proportion of un employed', 'community', 1, '2021-06-30 12:23:47', NULL, 4),
(63, 'testt', 'testt', 'community', 1, '2021-07-04 20:27:33', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ketena`
--

DROP TABLE IF EXISTS `ketena`;
CREATE TABLE `ketena` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ketana_name` varchar(50) NOT NULL,
  `woreda_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcity_id` bigint(20) UNSIGNED DEFAULT NULL,
  `review` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketena`
--

INSERT INTO `ketena` (`id`, `ketana_name`, `woreda_id`, `subcity_id`, `review`, `created_at`, `updated_at`) VALUES
(8, 'Rasdesta', 8, 2, 'Rasdesta, Woreda 1, Arada review', '2021-06-19 14:36:55', '2021-06-19 14:36:55'),
(9, 'Arada Giorgis ', 8, 2, 'Arada giorgis , Woreda 1, Arada review', '2021-06-19 14:36:55', '2021-06-19 14:36:55'),
(10, 'Kebena', 9, 2, 'kenena , Woreda 2, Arada review', '2021-06-19 14:41:51', '2021-06-19 14:41:51'),
(11, 'Rasamba', 9, 2, 'Rassamba, Woreda 2, Arada review', '2021-06-19 14:41:51', '2021-06-19 14:41:51'),
(12, 'Medihaniyalem', 10, 1, 'Medihaniyalem Wereda 1 review', '2021-06-19 19:01:10', '2021-06-19 19:01:10'),
(13, 'Rufael', 10, 1, 'Rufael Wereda 1 review', '2021-06-19 19:01:10', '2021-06-19 19:01:10'),
(14, 'Adisu Gebeya', 11, 1, 'Adisu Gebeya Wereda 2 review', '2021-06-19 19:02:54', '2021-06-19 19:02:54'),
(15, 'Kechene', 11, 1, 'Kechene Wereda 1 review', '2021-06-19 19:02:54', '2021-06-19 19:02:54'),
(16, 'Bekelobet', 12, 3, 'Bekelobet Wereda 1 Kirkos review', '2021-06-19 19:05:22', '2021-06-19 19:05:22'),
(17, 'Temenjayazi', 12, 3, 'Temenjayazi Wereda 1 Kirkos review', '2021-06-19 19:05:22', '2021-06-19 19:05:22'),
(18, 'Legehar', 13, 3, 'Legehar Wereda 2 Kirkos review', '2021-06-19 19:05:22', '2021-06-19 19:05:22'),
(19, 'Stadium', 13, 3, 'Stadium Wereda 2 Kirkos review', '2021-06-19 19:05:22', '2021-06-19 19:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2021_06_11_055500_create_data_table', 0),
(15, '2021_06_11_055500_create_failed_jobs_table', 0),
(16, '2021_06_11_055500_create_indicators_table', 0),
(17, '2021_06_11_055500_create_ketena_table', 0),
(18, '2021_06_11_055500_create_offices_table', 0),
(19, '2021_06_11_055500_create_password_resets_table', 0),
(20, '2021_06_11_055500_create_subcities_table', 0),
(21, '2021_06_11_055500_create_users_table', 0),
(22, '2021_06_11_055500_create_woreda_table', 0),
(23, '2021_06_11_055501_add_foreign_keys_to_data_table', 0),
(24, '2021_06_11_055501_add_foreign_keys_to_ketena_table', 0),
(25, '2021_06_11_055501_add_foreign_keys_to_woreda_table', 0),
(26, '2021_06_12_150157_create_data_table', 0),
(27, '2021_06_12_150157_create_failed_jobs_table', 0),
(28, '2021_06_12_150157_create_indicators_table', 0),
(29, '2021_06_12_150157_create_ketena_table', 0),
(30, '2021_06_12_150157_create_offices_table', 0),
(31, '2021_06_12_150157_create_password_resets_table', 0),
(32, '2021_06_12_150157_create_subcities_table', 0),
(33, '2021_06_12_150157_create_users_table', 0),
(34, '2021_06_12_150157_create_woreda_table', 0),
(35, '2021_06_12_150158_add_foreign_keys_to_data_table', 0),
(36, '2021_06_12_150158_add_foreign_keys_to_indicators_table', 0),
(37, '2021_06_12_150158_add_foreign_keys_to_ketena_table', 0),
(38, '2021_06_12_150158_add_foreign_keys_to_users_table', 0),
(39, '2021_06_12_150158_add_foreign_keys_to_woreda_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `office-name` int(11) NOT NULL,
  `office-location` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@covid.com', '$2y$10$JWTBySlBedTjU0Y4UrE5ke4XuoR./6FdqlwvZdXqIaqisMJ6FSWsC', '2021-06-11 05:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `subcities`
--

DROP TABLE IF EXISTS `subcities`;
CREATE TABLE `subcities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcity_name` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcities`
--

INSERT INTO `subcities` (`id`, `subcity_name`, `review`, `created_at`, `updated_at`) VALUES
(1, 'Gulele', '<h2>Gulele review<br></h2>Gulele is the most <b>vulnerable </b>subcity ;we need to watch out woreda 2 population of adults is decreasing test<br>', '2021-06-11 08:18:51', '2021-06-11 08:18:51'),
(2, 'Arada', '', '2021-06-12 19:26:13', '2021-06-12 19:26:13'),
(3, 'kirkos', ' ', '2021-06-12 19:26:13', '2021-06-12 19:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assiged_at` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `assiged_at`) VALUES
(3, 'Administrator', 'admin@covid.com', NULL, '$2y$10$hstnVtEZbJJfIIPqpHcNT.Se9lksk9auUnNKfwxYKQa2o7JYQG2qq', '1keVEshRRaRm2Kpq5J4K8XZf8NlZ5a7lQ3TZKe8ZMDKBJPzlRYYAx7RgiiPT', '2021-06-11 09:10:19', '2021-06-11 09:10:19', 'admin', NULL),
(4, 'ExpertName1', 'expert1@covid.com', NULL, '$2y$10$7Jq9R3L9C00wSu8m0QC/lueu8xkG0llt./giPXP321VQiVuTa4.Le', NULL, '2021-06-11 09:22:15', '2021-06-11 09:22:15', 'expert', NULL),
(5, 'ExpertName2', 'expert2@covid.com', NULL, '$2y$10$Z7wp/AelzHg2HR4QGKp6m.0V86lGVizoukA.zvvO9ybbcyc379iuC', NULL, '2021-06-11 16:55:17', '2021-06-11 16:55:17', 'expert', NULL),
(6, 'Encoder-Gule-Wor1', 'encoder1@covid.com', NULL, '$2y$10$.92dVAvYXtPV.N81l8zUd.XySlggzEsCqVZEAovxEUKbC9c8J1yw2', NULL, '2021-06-11 17:44:36', '2021-06-11 17:44:36', 'encoder', 10),
(8, 'Encoder-Gule-Wor2', 'encoder2@covid.com', NULL, '$2y$10$.92dVAvYXtPV.N81l8zUd.XySlggzEsCqVZEAovxEUKbC9c8J1yw2', NULL, '2021-06-11 17:44:36', '2021-06-11 17:44:36', 'encoder', 11),
(9, 'Encoder-Kirkos-Wor1', 'encoder3@covid.com', NULL, '$2y$10$.92dVAvYXtPV.N81l8zUd.XySlggzEsCqVZEAovxEUKbC9c8J1yw2', NULL, '2021-06-11 17:44:36', '2021-06-11 17:44:36', 'encoder', 12),
(10, 'Encoder-Kirkos-Wor2', 'encoder4@covid.com', NULL, '$2y$10$.92dVAvYXtPV.N81l8zUd.XySlggzEsCqVZEAovxEUKbC9c8J1yw2', NULL, '2021-06-11 17:44:36', '2021-06-11 17:44:36', 'encoder', 13),
(11, 'Encoder-Arada-Wor1', 'encoder5@covid.com', NULL, '$2y$10$.92dVAvYXtPV.N81l8zUd.XySlggzEsCqVZEAovxEUKbC9c8J1yw2', NULL, '2021-06-11 17:44:36', '2021-06-11 17:44:36', 'encoder', 8),
(12, 'Encoder-Arada-Wor2', 'encoder6@covid.com', NULL, '$2y$10$.92dVAvYXtPV.N81l8zUd.XySlggzEsCqVZEAovxEUKbC9c8J1yw2', NULL, '2021-06-11 17:44:36', '2021-06-11 17:44:36', 'encoder', 9);

-- --------------------------------------------------------

--
-- Table structure for table `woreda`
--

DROP TABLE IF EXISTS `woreda`;
CREATE TABLE `woreda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `woreda_name` varchar(50) NOT NULL,
  `subcity_id` bigint(20) UNSIGNED NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `woreda`
--

INSERT INTO `woreda` (`id`, `woreda_name`, `subcity_id`, `review`, `created_at`, `updated_at`) VALUES
(8, 'Arada Woreda 1', 2, 'Arada_woreda 1 review', '2021-06-19 14:28:27', '2021-06-19 14:28:27'),
(9, 'Arada Woreda 2', 2, 'Arada Woreda 2 review', '2021-06-19 14:28:27', '2021-06-19 14:28:27'),
(10, 'Gulele Woreda 1', 1, 'Gulele Woreda 1 review', '2021-06-19 14:30:21', '2021-06-19 14:30:21'),
(11, 'Gulele Woreda 2', 1, 'Gulele Woreda 2 review', '2021-06-19 14:30:21', '2021-06-19 14:30:21'),
(12, 'Kirkos Woreda 1', 3, 'Kirkos Woreda 1 review', '2021-06-19 14:30:21', '2021-06-19 14:30:21'),
(13, 'Kirkos Woreda 2', 3, 'Kirkos Woreda 1 review', '2021-06-19 14:34:20', '2021-06-19 14:34:20');

--
-- Triggers `woreda`
--
DROP TRIGGER IF EXISTS `woreda_ir_initialization`;
DELIMITER $$
CREATE TRIGGER `woreda_ir_initialization` AFTER INSERT ON `woreda` FOR EACH ROW INSERT INTO `woreda_ri`( `woreda_id`) VALUES (NEW.id)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `woreda_ri_on_update`;
DELIMITER $$
CREATE TRIGGER `woreda_ri_on_update` AFTER UPDATE ON `woreda` FOR EACH ROW INSERT INTO `woreda_ri`( `woreda_id`) VALUES (NEW.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `woreda_ri`
--

DROP TABLE IF EXISTS `woreda_ri`;
CREATE TABLE `woreda_ri` (
  `id` bigint(20) NOT NULL,
  `woreda_id` bigint(20) UNSIGNED NOT NULL,
  `RI` varchar(500) NOT NULL DEFAULT '0',
  `woreda_max` double NOT NULL DEFAULT 0,
  `woreda_min` double NOT NULL DEFAULT 0,
  `vulnerability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `woreda_ri`
--

INSERT INTO `woreda_ri` (`id`, `woreda_id`, `RI`, `woreda_max`, `woreda_min`, `vulnerability`) VALUES
(50, 10, '2.1', 800, 0, 'LOW'),
(51, 11, '1.5773333333333', 800, 0, 'LOW'),
(52, 8, '0', 0, 0, ''),
(53, 9, '0', 0, 0, ''),
(54, 12, '0', 0, 0, ''),
(55, 13, '1.9958333333333', 800, 0, 'LOW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idicator_id` (`indicator_id`),
  ADD KEY `C3` (`office_id`),
  ADD KEY `C2` (`subcity_id`),
  ADD KEY `C4` (`woreda_id`),
  ADD KEY `C5` (`user_id`),
  ADD KEY `ketena_id` (`ketena_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `indicators`
--
ALTER TABLE `indicators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ketena`
--
ALTER TABLE `ketena`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcity_id` (`subcity_id`),
  ADD KEY `woreda_id` (`woreda_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `subcities`
--
ALTER TABLE `subcities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `assiged_at` (`assiged_at`);

--
-- Indexes for table `woreda`
--
ALTER TABLE `woreda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcity_id` (`subcity_id`);

--
-- Indexes for table `woreda_ri`
--
ALTER TABLE `woreda_ri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `woreda_id` (`woreda_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indicators`
--
ALTER TABLE `indicators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `ketena`
--
ALTER TABLE `ketena`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `subcities`
--
ALTER TABLE `subcities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `woreda`
--
ALTER TABLE `woreda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `woreda_ri`
--
ALTER TABLE `woreda_ri`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `C1` FOREIGN KEY (`indicator_id`) REFERENCES `indicators` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `C2` FOREIGN KEY (`subcity_id`) REFERENCES `subcities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `C3` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `C4` FOREIGN KEY (`woreda_id`) REFERENCES `woreda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `C5` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`ketena_id`) REFERENCES `ketena` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `indicators`
--
ALTER TABLE `indicators`
  ADD CONSTRAINT `indicators_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ketena`
--
ALTER TABLE `ketena`
  ADD CONSTRAINT `ketena_ibfk_1` FOREIGN KEY (`subcity_id`) REFERENCES `subcities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ketena_ibfk_2` FOREIGN KEY (`woreda_id`) REFERENCES `woreda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`assiged_at`) REFERENCES `woreda` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `woreda`
--
ALTER TABLE `woreda`
  ADD CONSTRAINT `C6` FOREIGN KEY (`subcity_id`) REFERENCES `subcities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `woreda_ri`
--
ALTER TABLE `woreda_ri`
  ADD CONSTRAINT `woreda_ri_ibfk_2` FOREIGN KEY (`woreda_id`) REFERENCES `woreda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
