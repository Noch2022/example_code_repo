-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2022 at 10:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int(11) NOT NULL,
  `email` varchar(33) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `first_name` varchar(33) DEFAULT NULL,
  `last_name` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `email`, `password`, `first_name`, `last_name`) VALUES
(1, 'admin@ssodexs.com', '$2a$10$z1H0WAfa3VpJc0ROMe50QehQCIgyKcsWAqdLKFIeMIBDgu4ohEAGy', 'SDX', 'SODEXS'),
(2, 'info@cbvhkh.com', '$2a$10$hRzuTmtp82rU0DPSjE3Ytu7J7cl0KFaWt.bBgktkr42hn6gpOfpOK', 'usr', 'usr'),
(3, 'admin@sodexs.com', '$2a$10$z1H0WAfa3VpJc0ROMe50QehQCIgyKcsWAqdLKFIeMIBDgu4ohEAGy', 'ssss', 'ssss'),
(4, 'vannoch@gmail.com', '$2a$10$z1H0WAfa3VpJc0ROMe50QehQCIgyKcsWAqdLKFIeMIBDgu4ohEAGy', 'Vannoch', 'Vannoch');

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `id` int(11) NOT NULL,
  `content` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`id`, `content`) VALUES
(5, '<p>This is some sample content.</p>\n\n<p>&nbsp;</p>\n<x-alert limit=\"5\" color=\"white\" backgroundcolor=\"red\" />');

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
-- Table structure for table `hibernate_sequence`
--

CREATE TABLE `hibernate_sequence` (
  `next_val` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hibernate_sequence`
--

INSERT INTO `hibernate_sequence` (`next_val`) VALUES
(5);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_01_020855_allmigration', 2),
(6, '2022_10_11_025804_create_terminologies_table', 3);

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
-- Table structure for table `privilledges`
--

CREATE TABLE `privilledges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `slug` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL DEFAULT '',
  `creator_id` int(11) NOT NULL DEFAULT 0,
  `updator_id` int(11) NOT NULL DEFAULT 0,
  `group_id` int(11) NOT NULL DEFAULT 0,
  `status` varchar(191) NOT NULL DEFAULT 'pending',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privilledges`
--

INSERT INTO `privilledges` (`id`, `parent_id`, `slug`, `title`, `creator_id`, `updator_id`, `group_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(139, 117, 'ml_setting_languages', 'SDX Localization', 1, 0, 0, 'publish', NULL, '2021-03-30 09:29:06', '2021-03-30 09:29:06'),
(2, 138, 'index_languages', 'List All Languages', 1, 1, 0, 'publish', NULL, '2019-09-10 20:38:42', '2021-03-30 09:30:44'),
(3, 138, 'create_language', 'Add New Language', 1, 1, 0, 'publish', NULL, '2019-09-10 20:40:19', '2021-03-30 09:32:45'),
(5, 1, 'update_language', 'Update LanguageSDX', 11, 0, 0, 'deleted', NULL, '2019-09-10 20:41:40', '2019-09-10 20:41:40'),
(6, 0, 'setting_roles', 'Setting Roles', 2, 0, 0, 'publish', NULL, '2019-09-10 20:43:02', '2019-09-10 20:43:02'),
(7, 6, 'index_roles', 'List All Roles', 2, 0, 0, 'publish', NULL, '2019-09-10 20:43:22', '2019-09-10 20:43:22'),
(8, 6, 'create_role', 'Add New Role', 2, 0, 0, 'publish', NULL, '2019-09-10 20:43:40', '2019-09-10 20:43:40'),
(10, 6, 'update_role', 'Update Role', 2, 1, 0, 'publish', NULL, '2019-09-10 20:44:26', '2019-09-10 21:14:50'),
(11, 6, 'delete_roles', 'Delete Role', 2, 1, 0, 'publish', NULL, '2019-09-10 20:44:52', '2019-11-23 03:26:19'),
(12, 138, 'delete_languages', 'Delete Language', 2, 1, 0, 'publish', NULL, '2019-09-10 20:45:31', '2021-03-30 09:32:32'),
(13, 0, 'setting_accounts', 'Setting User Accounts', 2, 0, 0, 'publish', NULL, '2019-09-10 23:06:37', '2019-09-10 23:06:37'),
(14, 13, 'index_accounts', 'List All Accounts', 2, 0, 0, 'publish', NULL, '2019-09-10 23:06:55', '2019-09-10 23:06:55'),
(16, 13, 'create_account', 'Add New User Account', 2, 0, 0, 'publish', NULL, '2019-09-10 23:07:49', '2019-09-10 23:07:49'),
(17, 13, 'update_account', 'Update User Account', 2, 0, 0, 'publish', NULL, '2019-09-10 23:08:11', '2019-09-10 23:08:11'),
(18, 13, 'delete_account', 'Delete User Account', 2, 1, 0, 'publish', NULL, '2019-09-10 23:08:27', '2019-09-16 21:29:56'),
(19, 0, 'setting_privilledges', 'Setting Privilledges', 2, 0, 0, 'publish', NULL, '2019-09-10 23:09:36', '2019-09-10 23:09:36'),
(20, 19, 'index_privilledges', 'List All Privilledges', 2, 0, 0, 'publish', NULL, '2019-09-10 23:09:59', '2019-09-10 23:09:59'),
(21, 19, 'create_privilledge', 'Add New Privilledge', 2, 0, 0, 'publish', NULL, '2019-09-10 23:10:21', '2019-09-10 23:10:21'),
(29, 19, 'show_privilledge', 'Show Privilledge', 2, 0, 0, 'publish', NULL, '2019-09-16 21:40:52', '2019-09-16 21:40:52'),
(23, 19, 'update_privilledge', 'Update Privilledge', 2, 0, 0, 'publish', NULL, '2019-09-10 23:10:56', '2019-09-10 23:10:56'),
(24, 19, 'delete_privilledges', 'Delete Privilledge', 2, 1, 0, 'publish', NULL, '2019-09-10 23:11:17', '2020-01-21 02:33:19'),
(25, 0, 'setting_permissions', 'Permission Setting', 2, 0, 0, 'publish', NULL, '2019-09-13 21:45:53', '2019-09-13 21:45:53'),
(26, 25, 'index_permissions', 'List All Permissions', 2, 0, 0, 'publish', NULL, '2019-09-13 21:46:19', '2019-09-13 21:46:19'),
(27, 25, 'set_permissions', 'Set Permissions', 2, 0, 0, 'publish', NULL, '2019-09-13 21:46:35', '2019-09-13 21:46:35'),
(28, 138, 'show_language', 'Show Language', 2, 1, 0, 'publish', NULL, '2019-09-15 19:15:11', '2021-03-30 09:32:18'),
(30, 6, 'show_role', 'Show Role', 2, 0, 0, 'publish', NULL, '2019-09-16 21:58:33', '2019-09-16 21:58:33'),
(31, 13, 'show_account', 'Show Account', 2, 0, 0, 'publish', NULL, '2019-09-16 22:02:23', '2019-09-16 22:02:23'),
(32, 0, 'setting_taxonomys', 'Taxonomy Setting', 2, 0, 0, 'publish', NULL, '2019-09-19 19:45:05', '2019-09-19 19:45:05'),
(33, 32, 'index_taxonomys', 'List All Taxonomies', 2, 0, 0, 'publish', NULL, '2019-09-19 19:46:29', '2019-09-19 19:46:29'),
(34, 32, 'create_taxonomy', 'Add New Taxonomy', 2, 0, 0, 'publish', NULL, '2019-09-19 19:47:44', '2019-09-19 19:47:44'),
(35, 32, 'update_taxonomy', 'Update Taxonomy', 2, 0, 0, 'publish', NULL, '2019-09-19 19:48:09', '2019-09-19 19:48:09'),
(36, 32, 'delete_taxonomys', 'Delete Taxonomy', 2, 1, 0, 'publish', NULL, '2019-09-19 19:48:30', '2020-01-20 07:58:58'),
(37, 32, 'show_taxonomy', 'Show Taxonomy', 2, 0, 0, 'publish', NULL, '2019-09-19 19:48:54', '2019-09-19 19:48:54'),
(109, 104, 'delete_fonts', 'Delete Font', 2, 0, 0, 'publish', NULL, '2020-03-02 03:13:26', '2020-03-02 03:13:26'),
(108, 104, 'demo_font', 'Demo Font', 2, 0, 0, 'publish', NULL, '2020-03-02 03:13:11', '2020-03-02 03:13:11'),
(107, 104, 'update_font', 'Update Font', 2, 0, 0, 'publish', NULL, '2020-03-02 03:12:58', '2020-03-02 03:12:58'),
(106, 104, 'create_font', 'Add New Font', 2, 0, 0, 'publish', NULL, '2020-03-02 03:12:40', '2020-03-02 03:12:40'),
(105, 104, 'index_fonts', 'List All Fonts', 2, 0, 0, 'publish', NULL, '2020-03-02 03:12:27', '2020-03-02 03:12:27'),
(104, 0, 'setting_fonts', 'Setting Fonts', 2, 0, 0, 'publish', NULL, '2020-03-02 03:11:58', '2020-03-02 03:11:58'),
(103, 98, 'delete_clients', 'Delete Client', 2, 0, 0, 'publish', NULL, '2020-01-21 02:54:05', '2020-01-21 02:54:05'),
(102, 98, 'show_client', 'Show Client', 2, 0, 0, 'publish', NULL, '2020-01-21 02:53:50', '2020-01-21 02:53:50'),
(101, 98, 'update_client', 'Update Client', 2, 0, 0, 'publish', NULL, '2020-01-21 02:53:38', '2020-01-21 02:53:38'),
(100, 98, 'create_client', 'Add New Client', 2, 0, 0, 'publish', NULL, '2020-01-21 02:53:24', '2020-01-21 02:53:24'),
(99, 98, 'index_clients', 'List All Clients', 2, 0, 0, 'publish', NULL, '2020-01-21 02:53:07', '2020-01-21 02:53:07'),
(98, 0, 'setting_clients', 'Setting Clients', 2, 0, 0, 'publish', NULL, '2020-01-21 02:50:50', '2020-01-21 02:50:50'),
(97, 92, 'delete_layouts', 'Delete Layout', 2, 0, 0, 'publish', NULL, '2020-01-21 02:44:36', '2020-01-21 02:44:36'),
(96, 92, 'show_layout', 'Show Layout', 2, 0, 0, 'publish', NULL, '2020-01-21 02:44:25', '2020-01-21 02:44:25'),
(95, 92, 'update_layout', 'Update Layout', 2, 0, 0, 'publish', NULL, '2020-01-21 02:44:12', '2020-01-21 02:44:12'),
(94, 92, 'create_layout', 'Add New Layout', 2, 0, 0, 'publish', NULL, '2020-01-21 02:43:57', '2020-01-21 02:43:57'),
(93, 92, 'index_layouts', 'List All Layouts', 2, 0, 0, 'publish', NULL, '2020-01-21 02:43:38', '2020-01-21 02:43:38'),
(92, 0, 'setting_layouts', 'Setting Layouts', 2, 0, 0, 'publish', NULL, '2020-01-21 02:42:52', '2020-01-21 02:42:52'),
(110, 0, 'setting_logs', 'Setting UserLogs', 2, 0, 0, 'publish', NULL, '2020-05-28 08:21:53', '2020-05-28 08:21:53'),
(111, 110, 'index_logs', 'List All Logs', 2, 0, 0, 'publish', NULL, '2020-05-28 08:22:14', '2020-05-28 08:22:14'),
(112, 110, 'show_log', 'Show Log', 2, 0, 0, 'publish', NULL, '2020-05-28 08:22:32', '2020-05-28 08:22:32'),
(113, 110, 'delete_logs', 'Delete Log', 2, 0, 0, 'publish', NULL, '2020-05-28 08:22:57', '2020-05-28 08:22:57'),
(114, 104, 'setting_assignfonts', 'Assign Font', 2, 1, 0, 'publish', NULL, '2020-05-28 08:25:35', '2021-03-30 09:02:24'),
(117, 0, 'setting_mlayouts', 'Layout Menu', 2, 1, 0, 'publish', NULL, '2020-05-28 08:28:18', '2021-03-30 08:32:26'),
(118, 0, 'setting_dashboards', 'Dashboard', 2, 1, 0, 'publish', NULL, '2020-05-28 08:30:06', '2021-03-30 09:13:48'),
(135, 117, 'ml_setting_dashboards', 'Dashboard', 2, 1, 0, 'publish', NULL, '2021-03-30 08:36:20', '2021-03-30 09:08:09'),
(120, 117, 'ml_setting_users', 'User Management', 2, 1, 0, 'publish', NULL, '2020-05-28 08:30:58', '2021-03-30 09:18:47'),
(121, 117, 'ml_setting_roles', 'User Roles', 2, 1, 120, 'publish', NULL, '2020-05-28 08:31:10', '2021-03-30 08:44:35'),
(122, 117, 'ml_setting_accounts', 'User Accounts', 2, 1, 120, 'publish', NULL, '2020-05-28 08:31:21', '2021-03-30 08:45:08'),
(123, 117, 'ml_setting_privilledges', 'User Privilledges', 2, 1, 120, 'publish', NULL, '2020-05-28 08:31:37', '2021-03-30 08:45:26'),
(124, 117, 'ml_setting_logs', 'User Logs', 2, 1, 120, 'publish', NULL, '2020-05-28 08:31:48', '2021-03-30 08:45:51'),
(125, 117, 'ml_setting_taxonomys', 'Taxonomys', 2, 1, 0, 'publish', NULL, '2020-05-28 08:34:32', '2021-03-30 08:46:30'),
(126, 117, 'ml_setting_clients', 'Clients', 2, 1, 0, 'publish', NULL, '2020-05-28 08:34:41', '2021-03-30 08:47:21'),
(127, 117, 'ml_setting_layouts', 'Layouts', 2, 1, 0, 'publish', NULL, '2020-05-28 08:34:51', '2021-03-30 08:47:38'),
(128, 117, 'font_management', 'Font Management', 2, 0, 0, 'publish', NULL, '2020-05-28 08:35:06', '2020-05-28 08:35:06'),
(129, 117, 'ml_setting_fonts', 'Font Setting', 2, 1, 128, 'publish', NULL, '2020-05-28 08:35:25', '2021-03-30 08:49:44'),
(141, 117, 'ml_setting_sale_templates', 'Sale Templates', 2, 1, 0, 'publish', NULL, '2021-03-30 09:52:52', '2021-03-30 09:53:02'),
(140, 0, 'setting_sale_templates', 'Sale Templates', 2, 0, 0, 'publish', NULL, '2021-03-30 09:52:34', '2021-03-30 09:52:34'),
(137, 118, 'index_dashboards', 'Home Dashboard', 2, 0, 0, 'publish', NULL, '2021-03-30 09:14:29', '2021-03-30 09:14:29'),
(133, 0, 'vendor_management', 'Vendor Management', 2, 1, 0, 'publish', NULL, '2021-03-23 06:49:37', '2021-09-28 04:54:53'),
(138, 0, 'setting_languages', 'Localization', 2, 0, 0, 'publish', NULL, '2021-03-30 09:28:42', '2021-03-30 09:28:42'),
(142, 140, 'sale_template_booked', 'Booked', 2, 0, 0, 'publish', NULL, '2021-03-30 09:54:14', '2021-03-30 09:54:14'),
(143, 140, 'sale_template_verified', 'Verified', 2, 0, 0, 'publish', NULL, '2021-03-30 09:54:38', '2021-03-30 09:54:38'),
(144, 140, 'sale_template_approved', 'Approved', 2, 0, 0, 'publish', NULL, '2021-03-30 09:54:55', '2021-03-30 09:54:55'),
(145, 140, 'sale_template_rejected', 'Rejected', 2, 0, 0, 'publish', NULL, '2021-03-30 09:55:10', '2021-03-30 09:55:10'),
(146, 140, 'sale_template_commented', 'Commented', 2, 0, 0, 'publish', NULL, '2021-03-30 09:55:39', '2021-03-30 09:55:39'),
(174, 171, 'reserve_connection', 'Reserve Connections', 2, 0, 0, 'publish', NULL, '2021-09-28 08:28:27', '2021-09-28 08:28:27'),
(172, 171, 'index_connections', 'List All Connections', 2, 0, 0, 'publish', NULL, '2021-09-28 08:26:00', '2021-09-28 08:26:00'),
(150, 117, 'ml_setting_configurations', 'Configurations', 2, 1, 169, 'publish', NULL, '2021-09-28 03:05:16', '2021-09-28 04:58:08'),
(151, 117, 'ml_setting_authorizations', 'Authorizations', 2, 1, 169, 'publish', NULL, '2021-09-28 03:06:52', '2021-09-28 04:58:04'),
(152, 117, 'ml_setting_packages', 'Packages', 2, 1, 169, 'publish', NULL, '2021-09-28 03:07:14', '2021-09-28 04:58:02'),
(153, 117, 'ml_setting_reset_dbs', 'Reset DB', 2, 1, 169, 'publish', NULL, '2021-09-28 03:07:49', '2021-09-28 04:57:58'),
(154, 117, 'ml_setting_reset_files', 'Reset Files', 2, 1, 169, 'publish', NULL, '2021-09-28 03:08:27', '2021-09-28 04:57:37'),
(155, 0, 'setting_configurations', 'Setting Configurations', 2, 0, 0, 'publish', NULL, '2021-09-28 03:25:02', '2021-09-28 03:25:02'),
(156, 155, 'index_configurations', 'List All Configurations', 2, 0, 0, 'publish', NULL, '2021-09-28 03:26:07', '2021-09-28 03:26:07'),
(160, 0, 'setting_authorizations', 'Setting Authorizations', 2, 0, 0, 'publish', NULL, '2021-09-28 04:09:04', '2021-09-28 04:09:04'),
(158, 155, 'show_configuration', 'Show Configuration', 2, 0, 0, 'publish', NULL, '2021-09-28 03:40:39', '2021-09-28 03:40:39'),
(159, 155, 'update_configuration', 'Update Configuration', 2, 1, 0, 'publish', NULL, '2021-09-28 03:42:16', '2021-09-28 03:44:26'),
(161, 0, 'setting_packages', 'Setting Packages', 2, 0, 0, 'publish', NULL, '2021-09-28 04:09:34', '2021-09-28 04:09:34'),
(162, 0, 'setting_reset_dbs', 'Setting Reset DB', 2, 0, 0, 'publish', NULL, '2021-09-28 04:10:01', '2021-09-28 04:10:01'),
(163, 0, 'setting_reset_files', 'Setting Reset Files', 2, 0, 0, 'publish', NULL, '2021-09-28 04:10:22', '2021-09-28 04:10:22'),
(164, 160, 'update_authorization', 'Update Configuration', 2, 1, 0, 'publish', NULL, '2021-09-28 04:11:38', '2021-09-28 04:13:58'),
(166, 161, 'update_package', 'Update Package', 2, 0, 0, 'publish', NULL, '2021-09-28 04:17:01', '2021-09-28 04:17:01'),
(169, 117, 'ml_vendor_management', 'Vendor Management', 2, 0, 0, 'publish', NULL, '2021-09-28 04:53:16', '2021-09-28 04:53:16'),
(167, 162, 'update_reset_db', 'Update Reset DB', 2, 1, 0, 'publish', NULL, '2021-09-28 04:18:14', '2021-09-28 04:18:54'),
(168, 163, 'update_reset_file', 'Update Reset Files', 2, 0, 0, 'publish', NULL, '2021-09-28 04:18:42', '2021-09-28 04:18:42'),
(170, 117, 'ml_setting_connections', 'Technical Support', 2, 1, 0, 'publish', NULL, '2021-09-28 05:12:44', '2021-09-28 08:43:00'),
(171, 0, 'setting_connections', 'Setting Connection', 2, 1, 0, 'publish', NULL, '2021-09-28 05:13:18', '2021-09-28 08:43:22'),
(173, 171, 'list_closed_connections', 'Show All Closed Connections', 2, 1, 0, 'publish', NULL, '2021-09-28 08:27:36', '2021-09-28 08:29:08'),
(175, 117, 'ml_setting_administrators', 'Administrator', 2, 1, 0, 'publish', NULL, '2021-09-28 08:32:00', '2021-09-28 08:32:11'),
(176, 0, 'ml_setting_encryptions', 'Setting Encryptions', 2, 1, 175, 'publish', NULL, '2021-09-28 08:33:20', '2021-09-28 08:40:56'),
(177, 117, 'ml_setting_zip_managers', 'Setting Zip Manager', 2, 1, 175, 'publish', NULL, '2021-09-28 08:34:45', '2021-09-28 08:35:00'),
(178, 0, 'setting_zip_managers', 'Setting Zip Manager', 2, 0, 0, 'publish', NULL, '2021-09-28 08:35:37', '2021-09-28 08:35:37'),
(179, 0, 'setting_encryptions', 'Setting Encryption', 2, 1, 0, 'publish', NULL, '2021-09-28 08:35:55', '2021-09-28 08:41:32'),
(180, 178, 'index_zip_managers', 'List All Zip Manager', 2, 0, 0, 'publish', NULL, '2021-09-28 08:37:09', '2021-09-28 08:37:09'),
(181, 178, 'zip_managers', 'Allow Zip Files', 2, 1, 0, 'publish', NULL, '2021-09-28 08:39:17', '2021-09-28 08:41:48'),
(182, 179, 'index_encryptions', 'List All Encryptions', 2, 1, 0, 'publish', NULL, '2021-09-28 08:40:34', '2021-09-28 08:41:18'),
(183, 117, 'ml_setting_notifications', 'Notification', 2, 1, 0, 'publish', NULL, '2021-09-28 09:06:23', '2021-09-28 09:16:03'),
(184, 117, 'ml_setting_notification_historys', 'Notification Historys', 2, 1, 183, 'publish', NULL, '2021-09-28 09:07:24', '2021-09-28 09:12:33'),
(185, 117, 'ml_setting_chat_notification_historys', 'Chat Notification Historys', 2, 1, 183, 'publish', NULL, '2021-09-28 09:09:11', '2021-09-28 09:10:35'),
(186, 0, 'setting_chat_notification_historys', 'Setting Chat Notification Historys', 2, 0, 0, 'publish', NULL, '2021-09-28 09:11:56', '2021-09-28 09:11:56'),
(187, 0, 'setting_notification_historys', 'Setting Notification Historys', 2, 0, 0, 'publish', NULL, '2021-09-28 09:13:05', '2021-09-28 09:13:05'),
(188, 187, 'index_notification_historys', 'List All Notification History', 2, 0, 0, 'publish', NULL, '2021-09-28 09:14:24', '2021-09-28 09:14:24'),
(189, 186, 'index_chat_notification_historys', 'List All Chat Notification Historys', 2, 1, 0, 'publish', NULL, '2021-09-28 09:15:04', '2021-09-28 09:19:58'),
(190, 0, 'my_test1', 'My Test1', 2, 0, 0, 'pending', NULL, '2022-06-29 09:15:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role_entity`
--

CREATE TABLE `role_entity` (
  `id` bigint(20) NOT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_name` varchar(50) DEFAULT NULL,
  `grade_id` int(11) NOT NULL DEFAULT 0,
  `author` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_name`, `grade_id`, `author`, `status`, `created_at`, `updated_at`) VALUES
(1, '10A', 10, 1, 1, '2022-12-01 10:01:45', '2022-12-01 10:01:45'),
(2, '10B', 10, 1, 1, '2022-12-01 10:01:45', '2022-12-01 10:01:45'),
(3, '10C', 10, 1, 0, '2022-12-01 10:01:45', '2022-12-01 10:01:45'),
(4, '10D', 10, 1, 0, '2022-12-01 10:01:45', '2022-12-01 10:01:45'),
(5, '10E', 10, 1, 0, '2022-12-01 10:01:45', '2022-12-01 10:01:45'),
(6, '10F', 10, 1, 0, '2022-12-01 10:01:45', '2022-12-01 10:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `room_detail`
--

CREATE TABLE `room_detail` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `thumnail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `thumnail`) VALUES
(1, 'My topic title 11111', 'This is the description of topic 1', '1.jpg'),
(2, 'My teksksksk 2222', 'kskf sksk  ksfsrfieksls', NULL),
(3, 'Test 33333', 'skfwieriwsklfsls', NULL),
(4, 'Test4', 'sfstytryueyrtyyrr', NULL),
(5, 'AMy topic title 1', 'This is the description of topic 1', NULL),
(6, 'My topic title 11', 'This is the description of topic 1', NULL),
(7, 'My topic title 6', 'This is the description of topic 1', NULL),
(8, 'Test 88888', 'slslslsl', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `client_secret` varchar(100) DEFAULT NULL,
  `api_token` varchar(100) DEFAULT NULL,
  `refresh_token` varchar(100) DEFAULT NULL,
  `database_name` varchar(100) DEFAULT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `updator_id` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `last_login_at` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login_ip` varchar(30) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `type` varchar(30) NOT NULL DEFAULT 'sodexs_dashboard'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `client_secret`, `api_token`, `refresh_token`, `database_name`, `project_name`, `creator_id`, `updator_id`, `created_at`, `updated_at`, `status`, `profile`, `last_login_at`, `last_login_ip`, `parent_id`, `type`) VALUES
(2, 1, 'sodexsinfo', 'info@sodexs.com', '$2y$10$KTjOQ93Qd7VpaE..YxsQgu9hcWYm0poV2ZBsH6m7whAy4P4UbmS8y', '57816d7297a09338b48da00c8e8b3aec', '57816d7297a09338b48da00c8e8b3aec', '57816d7297a09338b48da00c8e8b3aec', 'SsD5wJ4Hk7CbR', 'SsD5wJ4Hk7CbR', 1, 0, '2019-12-04 16:24:48', '2022-05-25 17:57:37', 'publish', '125114871623039944.webp', '2022-05-25 17:57:37', '127.0.0.1', 0, 'client'),
(9, 1, 'administrator', 'info@cbvhkh.com', '$2y$10$uXKho6sCHkl8QnXmyYLR1.KczWUkHFFRociYRvoaje0HlqO9OJ24q', 'kslfas87sfsv59aY98989ab39KloZ1PremUT', 'kslfas87sfsv59aY98989ab39KloZ1PremUT', 'kslfas87sfsv59aY98989ab39KloZ1PremUT', 'cbj30ubywvh', 'cbj30ubywvh', 1, 0, '2019-12-04 16:24:48', '2022-05-26 09:23:38', 'publish', '726544291609140069.webp', '2022-05-26 09:23:38', '127.0.0.1', 0, 'client'),
(11, 2, 'menglong', 'menglong@io.cm', '$2y$10$IePI4q87W8RwpRO1YQVwge0QxwYEL5jupxZUXtf0Sw4567.bnL7p6', '49690d5b2602af257b879ad3b713d049', '49690d5b2602af257b879ad3b713d049', '49690d5b2602af257b879ad3b713d049', 'SsD5wJ4Hk7CbR', 'SsD5wJ4Hk7CbR', 2, 0, '2021-07-21 16:44:25', '2021-09-03 09:32:41', 'publish', '1626860665.jpg', '2021-09-03 09:32:41', '167.179.37.4', 2, 'client'),
(12, 1, 'cbvh1', 'cbvh1@cbvhkh.com', '$2y$10$d/OcrQ0ITUPVi83V0Xgw9.e9WxS1J8jKFG8QaXd7tNGZxgvKWXuOq', '23f053bc3fe2d6bd199c7556adc28380', '23f053bc3fe2d6bd199c7556adc28380', '23f053bc3fe2d6bd199c7556adc28380', 'cbj30ubywvh', 'cbj30ubywvh', 9, 0, '2021-07-26 14:58:55', '2021-08-18 12:41:12', 'publish', NULL, '2021-08-18 12:41:12', '110.74.195.17', 9, 'client'),
(13, 1, 'cbvh2', 'cbvh2@cbvhkh.com', '$2y$10$sGRS0A.tnlPL7eZyuvyuBOASc63PFiI8OcWLuYicxwQem6gNbxWM2', 'd59a3f83908e36fdf16f3e1e7c895e55', 'd59a3f83908e36fdf16f3e1e7c895e55', 'd59a3f83908e36fdf16f3e1e7c895e55', 'cbj30ubywvh', 'cbj30ubywvh', 9, 0, '2021-07-26 15:14:02', '2022-04-21 16:38:51', 'publish', '1627287242.jpg', '2021-09-01 13:57:16', '110.74.195.17', 9, 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `privilledges`
--
ALTER TABLE `privilledges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `privilledges_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_entity`
--
ALTER TABLE `role_entity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privilledges`
--
ALTER TABLE `privilledges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_entity`
--
ALTER TABLE `role_entity`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
