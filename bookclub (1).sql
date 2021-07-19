-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 03:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_activations`
--

CREATE TABLE `admin_activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `forbidden` tinyint(1) NOT NULL DEFAULT 0,
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `activated`, `forbidden`, `language`, `deleted_at`, `created_at`, `updated_at`, `last_login_at`) VALUES
(1, 'Administrator', 'Administrator', 'administrator@brackets.sk', '$2a$10$2BPN4BAN/llN.QD58O8OWudiV32meKJjxXYdTHIvLVvrOxkr9D7tK', '8pyLSX4QPcHp238trMyIZvARBHmttOzBqbT6Rb50kKxGbqzJ8hiQcuViqseo', 1, 0, 'en', NULL, '2021-07-07 22:39:24', '2021-07-17 10:10:13', '2021-07-17 10:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `book_cat`
--

CREATE TABLE `book_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `Book_Titel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booK_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booK_Summry` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_cat`
--

INSERT INTO `book_cat` (`id`, `Book_Titel`, `booK_type`, `booK_Summry`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'Work security', 'Database', 'Fuull aieladioa adjfoiajeoajlkdfifd', 1, '2021-07-10 19:08:02', '2021-07-10 20:31:31'),
(2, 'Java Tutorial', 'Graphics', '<p>This aidi a aida;dfja lkodifja lfdjlajdoajodifjojdoiia</p><ol><li>idoado aoijdoajdofa</li><li>aodijoajfod</li></ol>', 1, '2021-07-10 20:40:25', '2021-07-10 20:41:07'),
(3, 'CISCO Networking', 'System(IMS)', '<p>This is  a full certification athat woo lkajfiod jflajdofial fkalkfjioasdnflk</p>', 1, '2021-07-17 10:14:06', '2021-07-17 10:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

CREATE TABLE `book_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `Book_catigory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`id`, `Book_catigory`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'web design materials', 1, NULL, NULL),
(2, 'Cyber Security', 1, NULL, '2021-07-17 10:11:35'),
(3, 'Networking materials', 1, NULL, NULL),
(4, 'Technology Trends', 1, NULL, NULL),
(5, 'Graphics', 1, NULL, NULL),
(6, 'Database', 1, NULL, NULL),
(7, 'Informatin management', 1, NULL, NULL),
(8, 'System(IMS)', 1, NULL, NULL),
(9, 'Software Design and Analysis', 1, NULL, NULL),
(10, 'Data Analysis', 1, NULL, NULL),
(11, 'System maintenance', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_upload`
--

CREATE TABLE `book_upload` (
  `id` int(10) UNSIGNED NOT NULL,
  `Book_Titel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booK_Summry` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_upload`
--

INSERT INTO `book_upload` (`id`, `Book_Titel`, `booK_Summry`, `book_type`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'Gate way netwerk', 'thoadl;a fajofjad lajdoijfdoajdlk', 'system', 0, '2021-07-10 08:14:56', '2021-07-10 08:14:56'),
(2, 'System Designs', 'This aid fafauodj ladfaojdaldjfopjoij ajoajdioaoiloioja odlk', 'system', 0, '2021-07-10 13:30:16', '2021-07-10 13:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `user_comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_name`, `user_id`, `book_id`, `user_comments`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'Yaya', '1', NULL, '<p>in thoad alfd aoifaofjlafoai fodaldfoaidlalkefljadoia</p>', 1, '2021-07-11 13:39:36', '2021-07-11 13:39:36'),
(2, 'Yaya', '1', NULL, '<p>kl fdajfa;ljj;flajsfdioio adjfaojfdlajkad<strong>jadkadkfadkakldfjklfd</strong></p>', 1, '2021-07-11 13:42:48', '2021-07-11 13:42:48'),
(3, 'Yaya', '1', NULL, '<p>kl fdajfa;ljj;flajsfdioio adjfaojfdlajkad<strong>jadkadkfadkakldfjklfd</strong></p>', 1, '2021-07-11 13:43:38', '2021-07-11 13:43:38'),
(5, 'Yaya', '1', NULL, '<p>kl fdajfa;ljj;flajsfdioio adjfaojfdlajkad<strong>jadkadkfadkakldfjklfd</strong></p>', 1, '2021-07-11 13:44:46', '2021-07-11 13:44:46'),
(7, 'Yaya', '1', NULL, '<p>Fhhull aioenla aoijeala oinalkdlajg algkjaglkdajklajkfldjoialndk</p>', 1, '2021-07-11 17:33:31', '2021-07-11 17:33:31'),
(8, 'Yaya', '1', 4, '<p>,kllnlnklnlknlk;kjnko ojio ojio;jijojiojiojiojoh oihiooihi</p>', 1, '2021-07-11 17:37:06', '2021-07-11 17:37:06'),
(9, 'Yaya', '1', 5, '<p>This java&nbsp; tutoraial is wonderful in all note oafdl jfajoidf ladjf</p>', 1, '2021-07-11 20:33:24', '2021-07-11 20:33:24');

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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1, 'f5f0de9e-a095-4bd0-a10c-3f70ef48b6dc', 'avatar', 'avatar', 'avatar.png', 'image/png', 'media', 'media', 23924, '[]', '[]', '{\"thumb_200\":true,\"thumb_75\":true,\"thumb_150\":true}', '[]', 1, '2021-07-07 22:39:24', '2021-07-07 22:39:25'),
(2, 'App\\Models\\BookUpload', 1, '11737dc2-d67d-431c-8be3-91435d9eac8b', 'books', 'LvinJsST6XHIaxCccTe8GpbsuVT73OsCmieGWDPv', 'LvinJsST6XHIaxCccTe8GpbsuVT73OsCmieGWDPv.jpg', 'image/jpeg', 'media', 'media', 49870, '[]', '{\"name\":\"borfire.JPG\",\"file_name\":\"borfire.JPG\",\"width\":640,\"height\":642}', '[]', '[]', 2, '2021-07-10 08:14:57', '2021-07-10 08:14:57'),
(3, 'App\\Models\\BookUpload', 2, 'fa838975-7697-484c-88f4-217f8475ce15', 'books', 'RYAFiKrt67E4BTlHg25D4ncypSQ2SExXYTeeT0St', 'RYAFiKrt67E4BTlHg25D4ncypSQ2SExXYTeeT0St.png', 'image/png', 'media', 'media', 147779, '[]', '{\"name\":\"Photo_1578484475617.png\",\"file_name\":\"Photo_1578484475617.png\",\"width\":720,\"height\":432}', '[]', '[]', 3, '2021-07-10 13:30:16', '2021-07-10 13:30:16'),
(4, 'App\\Models\\BookCat', 1, '9f1c44fc-578e-41e3-a542-bf4b872f6b3f', 'Ebooks', 'rWRcwumK7H0PlUEGtfQztOQtL3KAuLsDDJLouvDL', 'rWRcwumK7H0PlUEGtfQztOQtL3KAuLsDDJLouvDL.jpg', 'image/jpeg', 'media', 'media', 99362, '[]', '{\"name\":\"about1.jpg\",\"file_name\":\"about1.jpg\",\"width\":1040,\"height\":780}', '[]', '[]', 4, '2021-07-10 19:08:02', '2021-07-10 19:08:02'),
(5, 'App\\Models\\BookCat', 2, '95034e5e-8d38-4d95-a58f-cdb7942ea8a3', 'Ebooks', 'xxHFWA0RWxvnaQguiRVhYzEJBBtuMHr28zQ2fqCO', 'xxHFWA0RWxvnaQguiRVhYzEJBBtuMHr28zQ2fqCO.pdf', 'application/pdf', 'media', 'media', 1174583, '[]', '{\"name\":\"20-days-of-2d-CAD-exercises-Part-I.pdf\",\"file_name\":\"20-days-of-2d-CAD-exercises-Part-I.pdf\"}', '[]', '[]', 5, '2021-07-10 20:40:25', '2021-07-10 20:40:25'),
(6, 'App\\Models\\BookCat', 3, 'f8d94bc6-afd5-430b-83f1-81b01b34ce59', 'Ebooks', 'IRUdVjYknBCQ4znHExOnJq3iNlej0CQ3cFgIVUqW', 'IRUdVjYknBCQ4znHExOnJq3iNlej0CQ3cFgIVUqW.pdf', 'application/pdf', 'media', 'media', 657695, '[]', '{\"name\":\"Anglican International Mission School.pdf\",\"file_name\":\"Anglican International Mission School.pdf\"}', '[]', '[]', 6, '2021-07-17 10:14:07', '2021-07-17 10:14:07');

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
(3, '2017_08_24_000000_create_activations_table', 1),
(4, '2017_08_24_000000_create_admin_activations_table', 1),
(5, '2017_08_24_000000_create_admin_password_resets_table', 1),
(6, '2017_08_24_000000_create_admin_users_table', 1),
(7, '2018_07_18_000000_create_wysiwyg_media_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_10_21_000000_add_last_login_at_timestamp_to_admin_users_table', 1),
(10, '2021_07_07_233920_create_media_table', 1),
(11, '2021_07_07_233920_create_permission_tables', 1),
(12, '2021_07_07_233925_fill_default_admin_user_and_permissions', 1),
(13, '2021_07_07_233920_create_translations_table', 2),
(14, '2021_07_07_235041_add_users_feild', 3),
(15, '2021_07_08_173554_book_class_table', 4),
(16, '2021_07_08_175135_fill_permissions_for_book-type', 5),
(17, '2021_07_09_220407_book_table', 6),
(18, '2021_07_09_224048_fill_permissions_for_book-upload', 7),
(19, '2021_07_10_190620_book_cat_table', 8),
(20, '2021_07_10_193037_fill_permissions_for_book-cat', 9),
(21, '2021_07_11_030114_comment_table', 10),
(22, '2021_07_11_031225_fill_permissions_for_comment', 11),
(23, '2021_07_11_200156_recipet', 12),
(24, '2021_07_11_201324_fill_permissions_for_receipt', 13),
(25, '2021_07_17_111808_computer__studen', 14),
(26, '2021_07_17_112214_fill_permissions_for_student', 15);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24'),
(2, 'admin.translation.index', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24'),
(3, 'admin.translation.edit', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24'),
(4, 'admin.translation.rescan', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24'),
(5, 'admin.admin-user.index', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24'),
(6, 'admin.admin-user.create', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24'),
(7, 'admin.admin-user.edit', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24'),
(8, 'admin.admin-user.delete', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24'),
(9, 'admin.upload', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24'),
(10, 'admin.admin-user.impersonal-login', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24'),
(11, 'admin.book-type', 'admin', '2021-07-08 16:51:39', '2021-07-08 16:51:39'),
(12, 'admin.book-type.index', 'admin', '2021-07-08 16:51:39', '2021-07-08 16:51:39'),
(13, 'admin.book-type.create', 'admin', '2021-07-08 16:51:39', '2021-07-08 16:51:39'),
(14, 'admin.book-type.show', 'admin', '2021-07-08 16:51:39', '2021-07-08 16:51:39'),
(15, 'admin.book-type.edit', 'admin', '2021-07-08 16:51:39', '2021-07-08 16:51:39'),
(16, 'admin.book-type.delete', 'admin', '2021-07-08 16:51:39', '2021-07-08 16:51:39'),
(17, 'admin.book-type.bulk-delete', 'admin', '2021-07-08 16:51:39', '2021-07-08 16:51:39'),
(18, 'admin.book-upload', 'admin', '2021-07-09 21:40:54', '2021-07-09 21:40:54'),
(19, 'admin.book-upload.index', 'admin', '2021-07-09 21:40:54', '2021-07-09 21:40:54'),
(20, 'admin.book-upload.create', 'admin', '2021-07-09 21:40:54', '2021-07-09 21:40:54'),
(21, 'admin.book-upload.show', 'admin', '2021-07-09 21:40:54', '2021-07-09 21:40:54'),
(22, 'admin.book-upload.edit', 'admin', '2021-07-09 21:40:54', '2021-07-09 21:40:54'),
(23, 'admin.book-upload.delete', 'admin', '2021-07-09 21:40:54', '2021-07-09 21:40:54'),
(24, 'admin.book-upload.bulk-delete', 'admin', '2021-07-09 21:40:54', '2021-07-09 21:40:54'),
(25, 'admin.book-cat', 'admin', '2021-07-10 18:30:41', '2021-07-10 18:30:41'),
(26, 'admin.book-cat.index', 'admin', '2021-07-10 18:30:41', '2021-07-10 18:30:41'),
(27, 'admin.book-cat.create', 'admin', '2021-07-10 18:30:41', '2021-07-10 18:30:41'),
(28, 'admin.book-cat.show', 'admin', '2021-07-10 18:30:41', '2021-07-10 18:30:41'),
(29, 'admin.book-cat.edit', 'admin', '2021-07-10 18:30:41', '2021-07-10 18:30:41'),
(30, 'admin.book-cat.delete', 'admin', '2021-07-10 18:30:41', '2021-07-10 18:30:41'),
(31, 'admin.book-cat.bulk-delete', 'admin', '2021-07-10 18:30:41', '2021-07-10 18:30:41'),
(32, 'admin.comment', 'admin', '2021-07-11 02:12:29', '2021-07-11 02:12:29'),
(33, 'admin.comment.index', 'admin', '2021-07-11 02:12:29', '2021-07-11 02:12:29'),
(34, 'admin.comment.create', 'admin', '2021-07-11 02:12:29', '2021-07-11 02:12:29'),
(35, 'admin.comment.show', 'admin', '2021-07-11 02:12:29', '2021-07-11 02:12:29'),
(36, 'admin.comment.edit', 'admin', '2021-07-11 02:12:29', '2021-07-11 02:12:29'),
(37, 'admin.comment.delete', 'admin', '2021-07-11 02:12:29', '2021-07-11 02:12:29'),
(38, 'admin.comment.bulk-delete', 'admin', '2021-07-11 02:12:29', '2021-07-11 02:12:29'),
(39, 'admin.receipt', 'admin', '2021-07-11 19:14:30', '2021-07-11 19:14:30'),
(40, 'admin.receipt.index', 'admin', '2021-07-11 19:14:30', '2021-07-11 19:14:30'),
(41, 'admin.receipt.create', 'admin', '2021-07-11 19:14:30', '2021-07-11 19:14:30'),
(42, 'admin.receipt.show', 'admin', '2021-07-11 19:14:30', '2021-07-11 19:14:30'),
(43, 'admin.receipt.edit', 'admin', '2021-07-11 19:14:30', '2021-07-11 19:14:30'),
(44, 'admin.receipt.delete', 'admin', '2021-07-11 19:14:30', '2021-07-11 19:14:30'),
(45, 'admin.receipt.bulk-delete', 'admin', '2021-07-11 19:14:30', '2021-07-11 19:14:30'),
(46, 'admin.student', 'admin', '2021-07-17 10:22:22', '2021-07-17 10:22:22'),
(47, 'admin.student.index', 'admin', '2021-07-17 10:22:22', '2021-07-17 10:22:22'),
(48, 'admin.student.create', 'admin', '2021-07-17 10:22:22', '2021-07-17 10:22:22'),
(49, 'admin.student.show', 'admin', '2021-07-17 10:22:22', '2021-07-17 10:22:22'),
(50, 'admin.student.edit', 'admin', '2021-07-17 10:22:22', '2021-07-17 10:22:22'),
(51, 'admin.student.delete', 'admin', '2021-07-17 10:22:22', '2021-07-17 10:22:22'),
(52, 'admin.student.bulk-delete', 'admin', '2021-07-17 10:22:22', '2021-07-17 10:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Reg_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `Receipt_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `first_name`, `last_name`, `Department`, `Reg_no`, `phoneNum`, `trans_id`, `amount`, `fees`, `Receipt_plan`, `user_id`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'Yaya', 'Bello', 'Comuper sci', '24987775', '046338465', '7698768754453', 500000, 700, 'Computer Sci', 1, 1, '2021-07-12 11:18:38', '2021-07-12 11:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '2021-07-07 22:39:24', '2021-07-07 22:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `First` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reg_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `First`, `Reg_num`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'Ebuka', '4567821', 1, '2021-07-17 10:24:44', '2021-07-17 10:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '*',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`text`)),
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metadata`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `namespace`, `group`, `key`, `text`, `metadata`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brackets/admin-ui', 'admin', 'operation.succeeded', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(2, 'brackets/admin-ui', 'admin', 'operation.failed', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(3, 'brackets/admin-ui', 'admin', 'operation.not_allowed', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(4, '*', 'admin', 'admin-user.columns.first_name', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(5, '*', 'admin', 'admin-user.columns.last_name', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(6, '*', 'admin', 'admin-user.columns.email', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(7, '*', 'admin', 'admin-user.columns.password', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(8, '*', 'admin', 'admin-user.columns.password_repeat', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(9, '*', 'admin', 'admin-user.columns.activated', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(10, '*', 'admin', 'admin-user.columns.forbidden', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(11, '*', 'admin', 'admin-user.columns.language', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(12, 'brackets/admin-ui', 'admin', 'forms.select_an_option', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(13, '*', 'admin', 'admin-user.columns.roles', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(14, 'brackets/admin-ui', 'admin', 'forms.select_options', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(15, '*', 'admin', 'admin-user.actions.create', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(16, 'brackets/admin-ui', 'admin', 'btn.save', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(17, '*', 'admin', 'admin-user.actions.edit', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(18, '*', 'admin', 'admin-user.actions.index', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(19, 'brackets/admin-ui', 'admin', 'placeholder.search', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(20, 'brackets/admin-ui', 'admin', 'btn.search', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(21, '*', 'admin', 'admin-user.columns.id', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(22, '*', 'admin', 'admin-user.columns.last_login_at', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(23, 'brackets/admin-ui', 'admin', 'btn.edit', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(24, 'brackets/admin-ui', 'admin', 'btn.delete', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(25, 'brackets/admin-ui', 'admin', 'pagination.overview', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(26, 'brackets/admin-ui', 'admin', 'index.no_items', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(27, 'brackets/admin-ui', 'admin', 'index.try_changing_items', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(28, 'brackets/admin-ui', 'admin', 'btn.new', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(29, 'brackets/admin-ui', 'admin', 'profile_dropdown.account', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(30, 'brackets/admin-auth', 'admin', 'profile_dropdown.profile', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(31, 'brackets/admin-auth', 'admin', 'profile_dropdown.password', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(32, 'brackets/admin-auth', 'admin', 'profile_dropdown.logout', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(33, 'brackets/admin-ui', 'admin', 'sidebar.content', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(34, 'brackets/admin-ui', 'admin', 'sidebar.settings', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(35, '*', 'admin', 'admin-user.actions.edit_password', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(36, '*', 'admin', 'admin-user.actions.edit_profile', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(37, 'brackets/admin-auth', 'admin', 'activation_form.title', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(38, 'brackets/admin-auth', 'admin', 'activation_form.note', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(39, 'brackets/admin-auth', 'admin', 'auth_global.email', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(40, 'brackets/admin-auth', 'admin', 'activation_form.button', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(41, 'brackets/admin-auth', 'admin', 'login.title', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(42, 'brackets/admin-auth', 'admin', 'login.sign_in_text', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(43, 'brackets/admin-auth', 'admin', 'auth_global.password', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(44, 'brackets/admin-auth', 'admin', 'login.button', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(45, 'brackets/admin-auth', 'admin', 'login.forgot_password', '[]', NULL, '2021-07-07 22:40:06', '2021-07-07 22:40:06', NULL),
(46, 'brackets/admin-auth', 'admin', 'forgot_password.title', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(47, 'brackets/admin-auth', 'admin', 'forgot_password.note', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(48, 'brackets/admin-auth', 'admin', 'forgot_password.button', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(49, 'brackets/admin-auth', 'admin', 'password_reset.title', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(50, 'brackets/admin-auth', 'admin', 'password_reset.note', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(51, 'brackets/admin-auth', 'admin', 'auth_global.password_confirm', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(52, 'brackets/admin-auth', 'admin', 'password_reset.button', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(53, 'brackets/admin-auth', 'activations', 'email.line', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(54, 'brackets/admin-auth', 'activations', 'email.action', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(55, 'brackets/admin-auth', 'activations', 'email.notRequested', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(56, 'brackets/admin-auth', 'admin', 'activations.activated', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(57, 'brackets/admin-auth', 'admin', 'activations.invalid_request', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(58, 'brackets/admin-auth', 'admin', 'activations.disabled', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(59, 'brackets/admin-auth', 'admin', 'activations.sent', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(60, 'brackets/admin-auth', 'admin', 'passwords.sent', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(61, 'brackets/admin-auth', 'admin', 'passwords.reset', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(62, 'brackets/admin-auth', 'admin', 'passwords.invalid_token', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(63, 'brackets/admin-auth', 'admin', 'passwords.invalid_user', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(64, 'brackets/admin-auth', 'admin', 'passwords.invalid_password', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(65, 'brackets/admin-auth', 'resets', 'email.line', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(66, 'brackets/admin-auth', 'resets', 'email.action', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(67, 'brackets/admin-auth', 'resets', 'email.notRequested', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(68, '*', 'auth', 'failed', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(69, '*', 'auth', 'throttle', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(70, '*', '*', 'Manage access', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(71, '*', '*', 'Translations', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL),
(72, '*', '*', 'Configuration', '[]', NULL, '2021-07-07 22:40:07', '2021-07-07 22:40:07', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reg_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_status` tinyint(1) NOT NULL DEFAULT 0,
  `avater_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_through` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_css_Student` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `last_name`, `phoneNum`, `Reg_num`, `department`, `DOB`, `gender`, `paid_status`, `avater_name`, `course`, `pay_through`, `card_pin`, `is_css_Student`) VALUES
(1, 'Yaya', 'obinna111@gmail.com', NULL, '$2y$10$WRbWt9x6DZIEmEEaaZyb7OnqNjVy6ueBMzLiThAdRRC/RG81ARL8i', NULL, '2021-07-08 16:13:37', '2021-07-17 10:06:56', 'Bello', '046338465', '5717388', 'computer sic', '2013-02-08', 'Male', 1, '1626520016_IMG_20200203_105119_8.jpg', NULL, NULL, NULL, 0),
(2, 'Ebuka', 'ebuka01@gmail.com', NULL, '$2y$10$VniLgJycW/kJ551bCtzWkeDDaH2qNp61Izbv2SRIojqsCP.McpkVS', NULL, '2021-07-14 09:54:13', '2021-07-15 07:50:35', 'Chukwaka', '01436745', '647838', 'Maathmatics', '1997-02-14', 'Female', 0, '1626301830_passpot.jpg', NULL, NULL, NULL, 0),
(3, 'Joy', 'chiboy@gmail.com', NULL, '$2y$10$n0YaXNNMS.mAlsijzul8mOFnIiRi6QbBiOVMwQvF.g.gg3In1PrF2', NULL, '2021-07-17 10:02:07', '2021-07-17 10:02:07', 'Mercy', '54163359', '2628732', 'Mathematics', '2013-05-17', 'Female', 0, '1626519727_IMG_20200802_180909_671.jpg', NULL, NULL, NULL, 0),
(4, 'Yaya', 'admin@demo.com', NULL, '$2y$10$XkT5fl1IIB3BsDuvCQydl.ZvyKlO94G20B0i6MW6dBqlisY8GLSKy', NULL, '2021-07-17 11:11:53', '2021-07-17 11:11:53', 'Bello', '046338465', '4567821', 'jljljlj', '2021-07-18', 'Female', 0, 'No_image.jpg', NULL, NULL, NULL, 1),
(5, 'Goodluck', 'goodboy@yahoo.com', NULL, '$2y$10$Y0JA7Vxbj081OvQ3mtw6i.QDE0j5RDpr.sY1VbJLCFOabLk16lrey', NULL, '2021-07-17 11:13:55', '2021-07-17 11:13:55', 'Gold', '046338465', '4567821', 'Social works', '2011-03-17', 'Female', 0, '1626524035_FB_IMG_1562969652174.jpg', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wysiwyg_media`
--

CREATE TABLE `wysiwyg_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wysiwygable_id` int(10) UNSIGNED DEFAULT NULL,
  `wysiwygable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD KEY `activations_email_index` (`email`);

--
-- Indexes for table `admin_activations`
--
ALTER TABLE `admin_activations`
  ADD KEY `admin_activations_email_index` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- Indexes for table `book_cat`
--
ALTER TABLE `book_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_type`
--
ALTER TABLE `book_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_upload`
--
ALTER TABLE `book_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

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
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_namespace_index` (`namespace`),
  ADD KEY `translations_group_index` (`group`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wysiwyg_media_wysiwygable_id_index` (`wysiwygable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_cat`
--
ALTER TABLE `book_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_type`
--
ALTER TABLE `book_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `book_upload`
--
ALTER TABLE `book_upload`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
