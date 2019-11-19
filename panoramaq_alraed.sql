-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2019 at 01:09 PM
-- Server version: 10.3.17-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panoramaq_alraed`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `ar_title`, `en_title`, `ar_description`, `en_description`, `created_at`, `updated_at`) VALUES
(1, 'photos/2zjufWI6OPepW2ViSnfLc9CV2a2Ca7DTDPBwXCdv.jpeg', 'مبارة اليومgggg', 'ggg', 'ffffff', 'fffffff', '2019-07-15 10:38:31', '2019-07-15 12:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ar_name`, `en_name`, `created_at`, `updated_at`) VALUES
(2, 'القدم', 'football', '2019-07-15 07:06:04', '2019-07-15 07:09:05'),
(3, 'مصر', 'egypt', '2019-07-15 11:32:27', '2019-07-15 11:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `champions`
--

CREATE TABLE `champions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `champions`
--

INSERT INTO `champions` (`id`, `ar_title`, `en_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ihj', 'today match', 'photos/FFgQXGRYKIKDEcmdwQDIz8CYBwr5t7e90oVSHcMz.jpeg', '2019-07-16 07:57:56', '2019-07-16 08:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `ar_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, 'مصر', 'egt', '2019-07-15 11:34:33', '2019-07-15 11:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `minuit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `player_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_team_id` bigint(20) UNSIGNED NOT NULL,
  `second_team_id` bigint(20) UNSIGNED NOT NULL,
  `stadium` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `champion_id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `first_team_id`, `second_team_id`, `stadium`, `date`, `created_at`, `updated_at`, `champion_id`, `ar_name`, `en_name`) VALUES
(1, 1, 1, 'الرياضععع', '2019-07-10', '2019-07-16 12:25:48', '2019-07-16 12:27:51', 1, '', ''),
(2, 1, 1, 'الرياض', '2019-07-23', '2019-07-17 06:30:53', '2019-07-17 06:30:53', 1, 'مباراة الرائد والهلال', 'elraed and el helal');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_14_095203_create_multimedia_table', 1),
(4, '2019_07_14_095245_create_news_table', 1),
(5, '2019_07_14_095301_create_countries_table', 1),
(6, '2019_07_14_095314_create_teams_table', 1),
(8, '2019_07_14_095436_create_our_teams_table', 1),
(9, '2019_07_14_095451_create_goals_table', 1),
(10, '2019_07_14_095511_create_statistics_table', 1),
(11, '2019_07_14_095527_create_champions_table', 1),
(12, '2019_07_14_095559_create_settings_table', 1),
(13, '2019_07_14_095921_create_banners_table', 1),
(14, '2019_07_14_113051_create_partners_table', 1),
(15, '2019_07_14_114652_create_categories_table', 1),
(16, '2019_07_14_114840_add_category_id_to_news', 1),
(17, '2019_07_14_122010_create_team_players_table', 1),
(19, '2019_07_15_083827_create_tests_table', 2),
(20, '2019_07_16_085520_add_name_to_partners_table', 2),
(21, '2019_07_14_095403_create_matches_table', 3),
(22, '2019_07_14_134810_add_champion_id_to_matches', 3),
(23, '2019_07_16_113144_add_changes_to_team_players_table', 4),
(24, '2019_07_16_132745_create_results_table', 5),
(25, '2019_07_16_144613_add_palyer_id_to_goals_table', 5),
(26, '2019_07_16_145810_add_name_to_matches_table', 6),
(27, '2019_07_17_092136_add_phone_to_users', 7),
(28, '2019_07_17_141339_create_permissions_table', 8),
(29, '2019_07_17_141429_create_user_permissions_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `multimedia`
--

CREATE TABLE `multimedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multimedia`
--

INSERT INTO `multimedia` (`id`, `ar_title`, `en_title`, `ar_description`, `en_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'مبارة اليومgggg', 'ggg', 'ffffff', 'fffffff', 'photos/iE0n2NqWC1KW0dsdwiGHFAufNvXLUDm9dMcIoyRf.jpeg', '2019-07-15 12:15:59', '2019-07-15 12:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_writer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_writer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `ar_title`, `en_title`, `ar_description`, `en_description`, `ar_writer_name`, `en_writer_name`, `image`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'مبارة اليوم', 'today match', 'uuuuu', 'uuuuuuuuu', 'فاطمة', 'fatma', 'photos/kSaoHWhDGwU8LCBWpceKs4AtHhAv9CY3xlg74gHW.jpeg', '2019-07-15 09:41:58', '2019-07-15 09:48:56', 2);

-- --------------------------------------------------------

--
-- Table structure for table `our_teams`
--

CREATE TABLE `our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_teams`
--

INSERT INTO `our_teams` (`id`, `ar_name`, `en_name`, `ar_job_title`, `en_job_title`, `ar_description`, `en_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'tee', 'jjjj', 'ببب', 'بببب', 'مرحبا', 'رررررررررررر', 'photos/R9ZrNncGk8sStyXZwX8uyqVaJ9QLbJsKZu0FBAkc.jpeg', '2019-07-15 12:55:10', '2019-07-15 12:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `url`, `created_at`, `updated_at`, `ar_name`, `en_name`) VALUES
(1, 'photos/RNsSXS3dPmbvS6t9OYtqSCczfRYCjEagTVoElma4.jpeg', 'https://alhassouncenter.com/', '2019-07-16 07:15:34', '2019-07-16 07:15:52', 'نوكيااا', 'nokia');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'admins', 'أعضاء إدارة النظام', NULL, NULL),
(2, 'assistants', 'المديرين المساعدين', NULL, NULL),
(3, 'banners', 'البنرات الدعائية', NULL, NULL),
(4, 'partners', 'الرعاة', NULL, NULL),
(5, 'our-team', 'فريقنا الأول', NULL, NULL),
(6, 'multimedia', 'إدارة الوسائط المتعددة', NULL, NULL),
(7, 'categories', 'أقسام الأخبار', NULL, NULL),
(8, 'news', 'إدارة الأخبار', NULL, NULL),
(9, 'countries', 'الدول', NULL, NULL),
(10, 'teams', 'الفرق', NULL, NULL),
(11, 'players', 'لاعبي الفرق', NULL, NULL),
(12, 'champions', 'البطولات', NULL, NULL),
(13, 'matches', 'المباريات', NULL, NULL),
(14, 'goals', 'الأهداف', NULL, NULL),
(15, 'statistics', 'الأحصائيات', NULL, NULL),
(16, 'permissions', 'إدارة الصلاحيات', NULL, NULL),
(17, 'settings', 'الإعدادات العامة', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('text','text_area','social','number','image') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_team_id` bigint(20) UNSIGNED NOT NULL,
  `second_team_id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `first_team_goals` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_team_goals` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_team_corners` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_team_corners` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_team_Offside` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_team_Offside` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_team_YCard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_team_YCard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_team_RCard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_team_RCard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `first_team_id`, `second_team_id`, `match_id`, `first_team_goals`, `second_team_goals`, `first_team_corners`, `second_team_corners`, `first_team_Offside`, `second_team_Offside`, `first_team_YCard`, `second_team_YCard`, `first_team_RCard`, `second_team_RCard`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '3', '3', '3', '3', '3', '3', '3', '3', '2', '3', '2019-07-17 06:32:25', '2019-07-17 06:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `ar_name`, `en_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'مصرهه', 'egypt', 'photos/46O9waWcmhxWakWHnDMrvNOW8C0F9cd9mxfbGElU.jpeg', '2019-07-16 07:28:44', '2019-07-16 07:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `team_players`
--

CREATE TABLE `team_players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appearance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` enum('goal_keeper','defender','mid_line','attacking') COLLATE utf8mb4_unicode_ci NOT NULL,
  `goals` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_players`
--

INSERT INTO `team_players` (`id`, `team_id`, `country_id`, `ar_name`, `en_name`, `age`, `length`, `appearance`, `position`, `goals`, `created_at`, `updated_at`, `image`) VALUES
(1, 1, 1, 'محمد تريكة', 'treka', '35', '200', '20', 'attacking', NULL, '2019-07-17 07:42:34', '2019-07-17 07:42:34', 'photos/BTVrFg7Xo6L3nWApjhHesElfQJGSOVwq92AgqS77.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','assistant') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `role`, `is_active`, `remember_token`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'fatma', 'admin@admin.com', NULL, '$2y$10$DGJmwnPDban.Ogr3H3Fy0.3b8Ocza1TVVPiIaRscWpkOklzjBLUl6', 'photos/yKWbEaiVsR2PtuayiVBNY7ITedpxDVNCe3VUPyj3.jpeg', 'admin', 1, NULL, '2019-07-17 09:17:17', '2019-07-17 09:45:33', '01122170809'),
(2, 'fffff', 'fatma@test.com', NULL, '$2y$10$KKsx2bWwsxr4vblGHtNc5e17rPz.sTq8tT3JbHRvlJrlidL3euTdq', 'photos/clj5DiKv0OsZqTaBLIkd5rlA6a1juTjbxjEbPN3B.jpeg', 'assistant', 0, NULL, '2019-07-17 10:18:41', '2019-07-17 10:18:41', '01020304050'),
(3, 'admon', 'mismail80@gmail.com', NULL, '$2y$10$zOxIG8cswzIGL6Tpg/FxqulxVQHz5RfLyfdXUjUYLk6Hl0wzI635W', 'photos/fKwBQrVSGxXq1XpHsBRBphcvc3dNKq0qZHPZnWM4.jpeg', 'assistant', 0, NULL, '2019-07-17 10:19:49', '2019-07-17 10:19:49', '01122170805');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `user_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 9, NULL, NULL),
(8, 1, 10, NULL, NULL),
(9, 1, 16, NULL, NULL),
(10, 1, 11, NULL, NULL),
(11, 1, 12, NULL, NULL),
(12, 1, 13, NULL, NULL),
(13, 1, 14, NULL, NULL),
(14, 1, 16, NULL, NULL),
(15, 1, 17, NULL, NULL),
(16, 1, 1, NULL, NULL),
(17, 3, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `champions`
--
ALTER TABLE `champions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `goals_match_id_foreign` (`match_id`),
  ADD KEY `goals_team_id_foreign` (`team_id`),
  ADD KEY `goals_player_id_foreign` (`player_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matches_first_team_id_foreign` (`first_team_id`),
  ADD KEY `matches_second_team_id_foreign` (`second_team_id`),
  ADD KEY `matches_champion_id_foreign` (`champion_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_category_id_foreign` (`category_id`);

--
-- Indexes for table `our_teams`
--
ALTER TABLE `our_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statistics_first_team_id_foreign` (`first_team_id`),
  ADD KEY `statistics_second_team_id_foreign` (`second_team_id`),
  ADD KEY `statistics_match_id_foreign` (`match_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_players`
--
ALTER TABLE `team_players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_players_team_id_foreign` (`team_id`),
  ADD KEY `team_players_country_id_foreign` (`country_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_permissions_user_id_foreign` (`user_id`),
  ADD KEY `user_permissions_permission_id_foreign` (`permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `champions`
--
ALTER TABLE `champions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_teams`
--
ALTER TABLE `our_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_players`
--
ALTER TABLE `team_players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `goals`
--
ALTER TABLE `goals`
  ADD CONSTRAINT `goals_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`),
  ADD CONSTRAINT `goals_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `team_players` (`id`),
  ADD CONSTRAINT `goals_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_champion_id_foreign` FOREIGN KEY (`champion_id`) REFERENCES `champions` (`id`),
  ADD CONSTRAINT `matches_first_team_id_foreign` FOREIGN KEY (`first_team_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `matches_second_team_id_foreign` FOREIGN KEY (`second_team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `statistics`
--
ALTER TABLE `statistics`
  ADD CONSTRAINT `statistics_first_team_id_foreign` FOREIGN KEY (`first_team_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `statistics_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`),
  ADD CONSTRAINT `statistics_second_team_id_foreign` FOREIGN KEY (`second_team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `team_players`
--
ALTER TABLE `team_players`
  ADD CONSTRAINT `team_players_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `team_players_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD CONSTRAINT `user_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `user_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
