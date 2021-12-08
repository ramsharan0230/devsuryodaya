-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2021 at 09:20 AM
-- Server version: 10.2.34-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trekkmandu_suryodaya_dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_icon_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_icon_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_icon_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_icon_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_icon_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_icon_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fourth_icon_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fourth_icon_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_short_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_about_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_main_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_description`, `main_description`, `background_image`, `main_image`, `first_icon_title`, `first_icon_description`, `second_icon_title`, `second_icon_description`, `third_icon_title`, `third_icon_description`, `fourth_icon_title`, `fourth_icon_description`, `about_title`, `seo_title`, `seo_short_description`, `seo_about_title`, `seo_main_description`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Suryodaya Inc prides on providing world-class customer service.', 'We are a leading Healthcare company dealing with  home care medical devices/equipment and  Rehabilitation products.', 'Headquartered in Port Washington, New York, Drive DeVilbiss Healthcare manufactures a complete                 line of medical products, including mobility products, sleep and respiratory products, beds, bariatric products, wheelchairs, sleep surfaces and pressure prevention products, self-assist products, power operated wheelchairs, rehabilitation products, patient room equipment, personal care products and Mobility electrotherapy devices. Currently, the Company has corporate offices, manufacturing facilities and distribution facilities located throughout the United States, Canada, the United Kingdom, France, Germany, Romania, the Netherlands, China, Hong Kong, India and Australia. The Company markets its products to customers located throughout the United States, Canada,                 Mexico, Central and South America, Europe, the Middle East, Asia and Australia. For more information, www.drivemedical.com.', '1637846900.jpg', '1637867370.jpg', 'Company Mission', 'As Suryodaya Inc our continuing mission is working with our partners to provide one of the widest ranges of home healthcare products available today.', 'Home Care Providers', 'Our commitment to our customers sets us apart. We hear time and again from our customers that they choose Suryodaya Inc for our follow-through and customer-focused service. Our customers are at the centre of everything we do, and our success comes from their success. They benefit from Suryodaya Inc’s  customised approach to their business and our ability to help them stay ahead of the changing health care landscape', 'Our service', 'We are trusted source for home care medical and Wellness equipment rentals (Short Term/ Temporary usage). We carry a wide variety of home care medical equipment to assist with respiratory,  mobility or comfort issues   to aid in your indoor/outdoor mobility should the need arise.', 'How We Work', 'At Suryodaya, the way we  work is just above the business itself. Our employees understand the responsibility; working together toward  common goal: to advance the health care system for better health for all. We understand that together, unified we fulfill our mission and uphold our reputation as a trusted partner to our customers and their patients. Our values are foundational to all that we do, and who we are as a company.', 'About Drive Suryodaya Healthcare', 'Voluptatem dignissimos provident quasi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'About Drive Suryodaya Healthcare', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>', 1, '2021-11-25 07:36:05', '2021-12-07 06:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(299) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(299) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catalog_file` varchar(299) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`id`, `title`, `slug`, `catalog_file`, `order`, `publish`, `created_at`, `updated_at`, `product_id`) VALUES
(10, 'iGo2 Portable Oxygen Concentrator', 'igo2-portable-oxygen-concentrator', NULL, 1, 1, '2021-12-03 04:51:11', '2021-12-03 04:51:11', 10),
(11, 'iGo2 Portable Oxygen Concentrator', 'igo2-portable-oxygen-concentrator', NULL, 1, 1, '2021-12-03 04:51:17', '2021-12-03 04:51:17', 10),
(12, 'Compact 525 5 Liter Oxygen Concentrator', 'compact-525-5-liter-oxygen-concentrator', NULL, 2, 1, '2021-12-03 04:56:34', '2021-12-03 04:56:34', 10),
(13, 'Compact 1025 10 Liter Oxygen Concentrator', 'compact-1025-10-liter-oxygen-concentrator', NULL, 3, 1, '2021-12-03 04:58:57', '2021-12-03 04:58:57', 10),
(14, 'VacuAide QSU Portable Suction Unit', 'vacuaide-qsu-portable-suction-unit', NULL, 1, 1, '2021-12-03 05:06:48', '2021-12-03 05:06:48', 10),
(15, 'AirForce One Compressor Nebulizer', 'airforce-one-compressor-nebulizer', NULL, 1, 1, '2021-12-03 08:41:48', '2021-12-03 08:41:48', 10),
(16, 'HbO-Smart Fingertip Pulse Oximeter', 'hbo-smart-fingertip-pulse-oximeter', NULL, 1, 1, '2021-12-03 08:43:51', '2021-12-03 08:43:51', 10),
(17, 'Lightweight rollator Gigo 2G', 'lightweight-rollator-gigo-2g', NULL, 1, 1, '2021-12-05 10:00:14', '2021-12-05 10:00:14', 10),
(18, 'Rollator GoLite 200 XXL', 'rollator-golite-200-xxl', NULL, 2, 1, '2021-12-05 10:15:44', '2021-12-05 10:15:44', 10),
(19, 'One button folding walker', 'one-button-folding-walker', NULL, 1, 1, '2021-12-05 10:19:00', '2021-12-05 10:19:00', 10),
(20, 'Lightweight wheelchair Litec 2G (Seat width 38 cm)', 'lightweight-wheelchair-litec-2g-seat-width-38-cm', NULL, 1, 1, '2021-12-05 10:22:39', '2021-12-05 10:22:39', 10),
(21, 'Standard wheelchair Ecotec 2G (Seat width 38 cm)', 'standard-wheelchair-ecotec-2g-seat-width-38-cm', NULL, 2, 1, '2021-12-05 10:24:55', '2021-12-05 10:24:55', 10),
(22, 'Hurrycane Freedom edition, Black (Freedom edition, Black)', 'hurrycane-freedom-edition-black-freedom-edition-black', NULL, 1, 1, '2021-12-05 10:28:46', '2021-12-05 10:28:46', 10),
(23, 'Compact 1025 10 Liter Oxygen Concentrator', 'compact-1025-10-liter-oxygen-concentrator', NULL, 3, 1, '2021-12-05 10:41:07', '2021-12-05 10:41:07', 13),
(24, 'Scooter BL270 Scout', 'scooter-bl270-scout', NULL, 1, 1, '2021-12-05 11:01:48', '2021-12-05 11:01:48', 10),
(25, 'Energi Powerchair', 'energi-powerchair', NULL, 1, 1, '2021-12-07 06:34:35', '2021-12-07 06:34:35', 10),
(26, 'iBreeze Series - free breath as breeze', 'ibreeze-series-free-breath-as-breeze', NULL, 1, 1, '2021-12-07 08:22:33', '2021-12-07 08:22:33', 10),
(27, 'iBreeze Series - free breath as breeze', 'ibreeze-series-free-breath-as-breeze', '1638867504.pdf', 1, 1, '2021-12-07 08:56:24', '2021-12-07 08:58:24', 25),
(28, 'Compact 525 5 Liter Oxygen Concentrator', 'compact-525-5-liter-oxygen-concentrator', '1638867735.pdf', 2, 1, '2021-12-07 09:02:15', '2021-12-07 09:02:15', 12);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `order`, `feature_image`, `user_id`, `publish`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Respiratory', 'respiratory', 1, '1637765348.jpg', 1, 1, NULL, '2021-11-24 08:41:29', '2021-11-24 09:04:09'),
(2, 'Scooter', 'kids', 5, '1638701668.jpg', 1, 1, NULL, '2021-11-24 08:41:48', '2021-12-05 10:54:28'),
(3, 'Bath Safety', 'bath-safety', 3, '1637765426.jpg', 1, 1, NULL, '2021-11-24 08:42:03', '2021-11-24 09:05:26'),
(4, 'Patient Room', 'patient-room', 4, '1637765463.jpg', 1, 1, NULL, '2021-11-24 08:42:19', '2021-11-24 09:06:03'),
(5, 'Mobility', 'mobility', 2, '1637765482.jpg', 1, 1, NULL, '2021-11-24 08:42:41', '2021-11-25 10:45:12'),
(6, 'Kids', 'kids-2', 5, '1638858314.PNG', 1, 1, NULL, '2021-12-07 06:25:14', '2021-12-07 06:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Rojeena Malakar', 'malakarrojeena@gmail.com', 'inq', '9843051636', 'test', '2021-12-02 05:34:27', '2021-12-02 05:34:27');

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
(4, '2019_08_19_000000_create_permission_tables', 1),
(5, '2019_08_19_000000_create_posts_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2021_09_04_144825_create_blogs_table', 1),
(8, '2021_09_04_163137_create_site_settings_table', 1),
(9, '2021_09_05_021952_create_categories_table', 1),
(10, '2021_09_05_100000_create_subcategories_table', 1),
(11, '2021_09_05_141930_create_products_table', 1),
(12, '2021_09_05_150642_create_product_varients_table', 1),
(13, '2021_09_05_150731_create_product_technical_details_table', 1),
(14, '2021_09_06_144704_create_sliders_table', 1),
(15, '2021_09_07_173738_create_catalogs_table', 1),
(16, '2021_09_08_142324_create_services_table', 1),
(17, '2021_09_08_154759_create_clients_table', 1),
(18, '2021_09_08_171627_create_contacts_table', 1),
(19, '2021_09_09_161317_create_subscriptions_table', 1),
(20, '2021_09_11_165633_add_image_to_services_table', 1),
(21, '2021_09_12_153020_add_service_id_to_products_table', 1),
(22, '2021_09_14_021720_create_seo_site_settings_table', 1),
(23, '2021_09_14_030007_create_seo_blogs_table', 1),
(24, '2021_09_14_030925_create_seo_services_table', 1),
(25, '2021_09_14_032655_create_seo_categories_table', 1),
(26, '2021_09_14_033136_create_seo_product_varieties_table', 1),
(27, '2021_10_24_132811_create_testimonials_table', 1),
(28, '2021_10_28_024703_add_product_id_to_catalogs_table', 1),
(29, '2021_10_29_021838_create_videos_table', 1),
(31, '2021_11_24_031815_create_abouts_table', 2);

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
(2, 'App\\Models\\User', 1);

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
(2, 'admin.home.index', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(3, 'admin.about.index', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(4, 'admin.about.create', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(5, 'admin.about.store', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(6, 'admin.about.destroy', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(7, 'admin.about.edit', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(8, 'admin.about.update', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(9, 'admin.blog.index', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(10, 'admin.blog.create', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(11, 'admin.blog.store', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(12, 'admin.blog.destroy', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(13, 'admin.blog.edit', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(14, 'admin.blog.update', 'web', '2021-12-02 05:48:50', '2021-12-02 05:48:50'),
(15, 'admin.catalog.index', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(16, 'admin.catalog.create', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(17, 'admin.catalog.store', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(18, 'admin.catalog.destroy', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(19, 'admin.catalog.edit', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(20, 'admin.catalog.update', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(21, 'admin.category.index', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(22, 'admin.category.create', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(23, 'admin.category.store', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(24, 'admin.category.destroy', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(25, 'admin.category.edit', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(26, 'admin.category.update', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(27, 'admin.contact.index', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(28, 'admin.contact.destroy', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(29, 'admin.dashboard', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(30, 'admin.logout.perform', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(31, 'admin.permissions.index', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(32, 'admin.permissions.store', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(33, 'admin.permissions.create', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(34, 'admin.permissions.destroy', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(35, 'admin.permissions.update', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(36, 'admin.permissions.show', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(37, 'admin.permissions.edit', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(38, 'admin.posts.index', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(39, 'admin.posts.store', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(40, 'admin.posts.create', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(41, 'admin.posts.destroy', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(42, 'admin.posts.edit', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(43, 'admin.posts.show', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(44, 'admin.posts.update', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(45, 'admin.product.index', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(46, 'admin.product.create', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(47, 'admin.product.store', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(48, 'admin.product.destroy', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(49, 'admin.product.edit', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(50, 'admin.product.show', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(51, 'admin.product.update', 'web', '2021-12-02 05:48:51', '2021-12-02 05:48:51'),
(52, 'admin.roles.store', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(53, 'admin.roles.index', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(54, 'admin.roles.create', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(55, 'admin.roles.show', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(56, 'admin.roles.update', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(57, 'admin.roles.destroy', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(58, 'admin.roles.edit', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(59, 'admin.service.index', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(60, 'admin.service.create', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(61, 'admin.service.store', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(62, 'admin.service.destroy', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(63, 'admin.service.edit', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(64, 'admin.service.update', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(65, 'admin.site-setting', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(66, 'admin.site-setting.update', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(67, 'admin.slider.index', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(68, 'admin.slider.create', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(69, 'admin.slider.store', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(70, 'admin.slider.destroy', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(71, 'admin.slider.edit', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(72, 'admin.slider.update', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(73, 'admin.subcategory.index', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(74, 'admin.subcategory.create', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(75, 'admin.subcategory.store', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(76, 'admin.subcategory.destroy', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(77, 'admin.subcategory.edit', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(78, 'admin.subcategory.update', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(79, 'admin.testimonial.index', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(80, 'admin.testimonial.create', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(81, 'admin.testimonial.store', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(82, 'admin.testimonial.destroy', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(83, 'admin.testimonial.edit', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(84, 'admin.testimonial.update', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(85, 'admin.users.index', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(86, 'admin.users.create', 'web', '2021-12-02 05:48:52', '2021-12-02 05:48:52'),
(87, 'admin.users.store', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53'),
(88, 'admin.users.destroy', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53'),
(89, 'admin.users.edit', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53'),
(90, 'admin.users.show', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53'),
(91, 'admin.users.update', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53'),
(92, 'admin.video.index', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53'),
(93, 'admin.video.create', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53'),
(94, 'admin.video.store', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53'),
(95, 'admin.video.destroy', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53'),
(96, 'admin.video.edit', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53'),
(97, 'admin.video.update', 'web', '2021-12-02 05:48:53', '2021-12-02 05:48:53');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(320) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `subtitle`, `short_description`, `description`, `slug`, `published_date`, `image`, `user_id`, `subcategory_id`, `order`, `meta_title`, `meta_description`, `publish`, `created_at`, `updated_at`, `service_id`) VALUES
(10, 'iGo2 Portable Oxygen Concentrator', NULL, 'The groundbreaking iGo2 Portable Oxygen Concentrator (POC) has created a new class of product – the auto-adjusting POC. This first-of-its-kind POC uses patented SmartDose Technology.', '<p>&nbsp;Now you can enjoy life more freely without worrying about changing oxygen settings during activity. This gives you the peace of mind and the freedom you have been looking for.</p><ul><li>Federal Aviation Administration (FAA) compliant for in-flight use</li><li>Lightweight and easy to carry in its convenient over-the-shoulder carry case</li><li>Revolutionary SmartDoseTM&nbsp;Technology automatically adjusts oxygen production &amp; delivery in real time to meet patient demand</li></ul><p>For more information visit <a href=\"www.igo2poc.com\">www.igo2poc.com</a></p><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th>&nbsp;</th></tr><tr><th>Dimensions (H x W x D)</th><th>21.3 cm (8.4\") x 8.9 cm (3.5\") x 21.8 cm (8.4\")</th></tr><tr><th>Weight</th><th>2.2 kg</th></tr><tr><th>Oxygen Output</th><th>90% +4 / -3</th></tr><tr><th>Maximum O2 Production</th><th>1014ml</th></tr><tr><th>Measured Sound Level</th><th>&lt;37dBA (Setting 2)&nbsp; 20BPM</th></tr><tr><th>Battery Run Time</th><th>min. 3.5 hours (Setting 2)</th></tr><tr><th>SmartDose</th><th>1d - 4d / 5</th></tr></tbody></table></figure>', 'igo2-portable-oxygen-concentrator', NULL, '1638700752.jpg', 1, 1, 1, 'iGo2 Portable Oxygen Concentrator', '<p>The groundbreaking iGo2 Portable Oxygen Concentrator (POC) has created a new class of product – the auto-adjusting POC. This first-of-its-kind POC uses patented SmartDose Technology. Now you can enjoy life more freely without worrying about changing oxygen settings during activity. This gives you the peace of mind and the freedom you have been looking for.</p><ul><li>Federal Aviation Administration (FAA) compliant for in-flight use</li><li>Lightweight and easy to carry in its convenient over-the-shoulder carry case</li><li>Revolutionary SmartDoseTM&nbsp;Technology automatically adjusts oxygen production &amp; delivery in real time to meet patient demand</li></ul><p>For more information visit <a href=\"www.igo2poc.com\">www.igo2poc.com</a></p><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th>&nbsp;</th></tr><tr><th>Dimensions (H x W x D)</th><th>21.3 cm (8.4\") x 8.9 cm (3.5\") x 21.8 cm (8.4\")</th></tr><tr><th>Weight</th><th>2.2 kg</th></tr><tr><th>Oxygen Output</th><th>90% +4 / -3</th></tr><tr><th>Maximum O2 Production</th><th>1014ml</th></tr><tr><th>Measured Sound Level</th><th>&lt;37dBA (Setting 2)&nbsp; 20BPM</th></tr><tr><th>Battery Run Time</th><th>min. 3.5 hours (Setting 2)</th></tr><tr><th>SmartDose</th><th>1d - 4d / 5</th></tr></tbody></table></figure>', 1, '2021-12-03 04:51:11', '2021-12-05 10:39:12', NULL),
(12, 'Compact 525 5 Liter Oxygen Concentrator', NULL, 'Delivering up to 5 lpm with high oxygen concentration across all flow rates, this compact concentrator helps to increase patient comfort and lower operating costs.', '<p>Delivering up to 5 lpm with high oxygen concentration across all flow rates, this compact concentrator helps to increase patient comfort and lower operating costs.</p><ul><li>Improved sound level reduction and power consumption</li><li>OSD® sensor to continuously monitor oxygen levels</li><li>Visual and audible alarms for low oxygen levels, power failure, pressure drop and service required</li></ul><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th>&nbsp;</th></tr><tr><th>Dimensions (H x W x D)</th><th>62.2 cm x 34.2 cm x 30.4 cm</th></tr><tr><th>Flowrate</th><th>0.5 to 5 l/min</th></tr><tr><th>Oxygen Concentration</th><th>at 0.5 - 5 l/min 93% ± 3%</th></tr><tr><th>Electrical Rating</th><th>230 V, 50 Hz, 3.2A</th></tr><tr><th>Weight</th><th>16.3 kg</th></tr><tr><th>Power Consumption</th><th>approx. 290 Watt at 2 l/min | approx. 312 Watt at 5 l/min</th></tr></tbody></table></figure>', 'compact-525-5-liter-oxygen-concentrator', NULL, '1638867735.jpg', 1, 1, 2, 'Compact 525 5 Liter Oxygen Concentrator', '<p>Delivering up to 5 lpm with high oxygen concentration across all flow rates, this compact concentrator helps to increase patient comfort and lower operating costs.</p><ul><li>Improved sound level reduction and power consumption</li><li>OSD® sensor to continuously monitor oxygen levels</li><li>Visual and audible alarms for low oxygen levels, power failure, pressure drop and service required</li></ul><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th>&nbsp;</th></tr><tr><th>Dimensions (H x W x D)</th><th>62.2 cm x 34.2 cm x 30.4 cm</th></tr><tr><th>Flowrate</th><th>0.5 to 5 l/min</th></tr><tr><th>Oxygen Concentration</th><th>at 0.5 - 5 l/min 93% ± 3%</th></tr><tr><th>Electrical Rating</th><th>230 V, 50 Hz, 3.2A</th></tr><tr><th>Weight</th><th>16.3 kg</th></tr><tr><th>Power Consumption</th><th>approx. 290 Watt at 2 l/min | approx. 312 Watt at 5 l/min</th></tr></tbody></table></figure>', 1, '2021-12-03 04:56:34', '2021-12-07 09:02:15', NULL),
(13, 'Compact 1025 10 Liter Oxygen Concentrator', NULL, 'Weighing only 19 kg (42 lbs), the 10 Liter Oxygen Concentrator is one of the smallest, most compact high-volume concentrators on the market, perfect for patients who require more than 5 lpm of oxygen.', '<p>Weighing only 19 kg (42 lbs), the 10 Liter Oxygen Concentrator is one of the smallest, most compact high-volume concentrators on the market, perfect for patients who require more than 5 lpm of oxygen. Equipped with exclusive DeVilbiss Oxygen Sensing Device (OSD®) for monitoring oxygen produced, this concentrator helps to ensure user safety and product reliability.</p><p>Capable of delivering up to 96% of O2 purity from 2 to 10 LPM</p><p>Equipped with accessible patient controls, bright LEDs that can be seen from a distance, protected cannula fitting and recessed humidifier nook to prevent damage</p><p>Transfill Caddy (sold separately) with 18 x 14 inch shelf connects easily to 10L Concentrator</p><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th>&nbsp;</th></tr><tr><th>Dimensions (H x W x D)</th><th>62.2 cm x 34.2 cm x 30.4 cm</th></tr><tr><th>Flow</th><th>2 - 10 LPM</th></tr><tr><th>Outlet Pressure</th><th>20.0 +/- 1.0 psi (138 kPA +/- 7kPA)</th></tr><tr><th>Weight</th><th>19 kg</th></tr><tr><th>Oxygen Concentration</th><th>87 % - 96 %</th></tr><tr><th>Alarms (Audible and Visual)</th><th>High Pressure | High / Low fow| Low Oxygen |High gas temperature | Power failure</th></tr><tr><th>Electrical Rating</th><th>230 V, 50 Hz, 3.2 A</th></tr></tbody></table></figure>', 'compact-1025-10-liter-oxygen-concentrator', NULL, '1638700866.png', 1, 1, 3, 'Compact 1025 10 Liter Oxygen Concentrator', '<p>Weighing only 19 kg (42 lbs), the 10 Liter Oxygen Concentrator is one of the smallest, most compact high-volume concentrators on the market, perfect for patients who require more than 5 lpm of oxygen. Equipped with exclusive DeVilbiss Oxygen Sensing Device (OSD®) for monitoring oxygen produced, this concentrator helps to ensure user safety and product reliability.</p><ul><li>Capable of delivering up to 96% of O2 purity from 2 to 10 LPM</li><li>Equipped with accessible patient controls, bright LEDs that can be seen from a distance, protected cannula fitting and recessed humidifier nook to prevent damage</li><li>Transfill Caddy (sold separately) with 18 x 14 inch shelf connects easily to 10L Concentrator</li></ul><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th>&nbsp;</th></tr><tr><th>Dimensions (H x W x D)</th><th>62.2 cm x 34.2 cm x 30.4 cm</th></tr><tr><th>Flow</th><th>2 - 10 LPM</th></tr><tr><th>Outlet Pressure</th><th>20.0 +/- 1.0 psi (138 kPA +/- 7kPA)</th></tr><tr><th>Weight</th><th>19 kg</th></tr><tr><th>Oxygen Concentration</th><th>87 % - 96 %</th></tr><tr><th>Alarms (Audible and Visual)</th><th>High Pressure | High / Low fow| Low Oxygen |High gas temperature | Power failure</th></tr><tr><th>Electrical Rating</th><th>230 V, 50 Hz, 3.2 A</th></tr></tbody></table></figure>', 1, '2021-12-03 04:58:57', '2021-12-05 10:41:07', NULL),
(14, 'VacuAide QSU Portable Suction Unit', NULL, 'With a simple on/off operation and large, rotating pressure ad- justment gauge, this ultra-quiet unit allows the required suction pressure to be easily set and viewed.', '<p>With a simple on/off operation and large, rotating pressure ad- justment gauge, this ultra-quiet unit allows the required suction pressure to be easily set and viewed.</p><ul><li>Features low noise level without compromising suction performance</li><li>Accessories store and transport easily in accompanying carry bag</li><li>ISO 10079-1 conformity</li></ul><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th>&nbsp;</th></tr><tr><th>Dimensions (WxDxH)</th><th>20.3 cm (8\") x 22 cm (9\") x 21.1 cm (8\")</th></tr><tr><th>Vacuum Range</th><th>50 - 550 mmHg ± 10%</th></tr><tr><th>Air Flow</th><th>27 l/min</th></tr><tr><th>Battery Runtime (7314P-versions only)</th><th>60 min</th></tr><tr><th>Power Supply</th><th>100 - 240 V, 50/60 Hz</th></tr><tr><th>Total weight</th><th>3.0 kg (6.6 lb)</th></tr></tbody></table></figure>', 'vacuaide-qsu-portable-suction-unit', NULL, '1638508007.jpg', 1, 2, 1, 'VacuAide QSU Portable Suction Unit', '<p>With a simple on/off operation and large, rotating pressure ad- justment gauge, this ultra-quiet unit allows the required suction pressure to be easily set and viewed.</p><ul><li>Features low noise level without compromising suction performance</li><li>Accessories store and transport easily in accompanying carry bag</li><li>ISO 10079-1 conformity</li></ul><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th>&nbsp;</th></tr><tr><th>Dimensions (WxDxH)</th><th>20.3 cm (8\") x 22 cm (9\") x 21.1 cm (8\")</th></tr><tr><th>Vacuum Range</th><th>50 - 550 mmHg ± 10%</th></tr><tr><th>Air Flow</th><th>27 l/min</th></tr><tr><th>Battery Runtime (7314P-versions only)</th><th>60 min</th></tr><tr><th>Power Supply</th><th>100 - 240 V, 50/60 Hz</th></tr><tr><th>Total weight</th><th>3.0 kg (6.6 lb)</th></tr></tbody></table></figure>', 1, '2021-12-03 05:06:48', '2021-12-03 05:06:48', NULL),
(15, 'AirForce One Compressor Nebulizer', NULL, 'The AirForce One compact compressor nebulizer offers a cost-effective and reliable form of aerosol therapy.', '<p>The AirForce One compact compressor nebulizer offers a cost-effective and reliable form of aerosol therapy. The easy-to-operate and durable unit can be used on adult and pediatric patients</p><ul><li>Convenient, built-in carry handle</li><li>Comes with necessary accessories and carry bag for immediate use</li><li>2-year warranty</li></ul><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th><strong>&nbsp;AF One EU Plug</strong></th></tr><tr><th>Width</th><th>14 cm (6\")</th></tr><tr><th>Length</th><th>19 cm (7\")</th></tr><tr><th>Height</th><th>9 cm (4\")</th></tr><tr><th>Particle Size (MMAD)</th><th>&lt; 5 µm</th></tr><tr><th>Air Flow</th><th>5.1 l/min</th></tr><tr><th>Aerosol Output</th><th>0.45 ml</th></tr><tr><th>Aerosol Output Rate</th><th>&nbsp;0.02 ml/min</th></tr><tr><th>Power Supply</th><th>230V, 50Hz</th></tr><tr><th>Noise</th><th>52 dbA</th></tr><tr><th>Total Weight</th><th>1.5 kg (3.3 lb)</th></tr></tbody></table></figure>', 'airforce-one-compressor-nebulizer', NULL, '1638520907.jpg', 1, 12, 1, 'AirForce One Compressor Nebulizer', '<p>The AirForce One compact compressor nebulizer offers a cost-effective and reliable form of aerosol therapy. The easy-to-operate and durable unit can be used on adult and pediatric patients</p><ul><li>Convenient, built-in carry handle</li><li>Comes with necessary accessories and carry bag for immediate use</li><li>2-year warranty</li></ul><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th><strong>&nbsp;AF One EU Plug</strong></th></tr><tr><th>Width</th><th>14 cm (6\")</th></tr><tr><th>Length</th><th>19 cm (7\")</th></tr><tr><th>Height</th><th>9 cm (4\")</th></tr><tr><th>Particle Size (MMAD)</th><th>&lt; 5 µm</th></tr><tr><th>Air Flow</th><th>5.1 l/min</th></tr><tr><th>Aerosol Output</th><th>0.45 ml</th></tr><tr><th>Aerosol Output Rate</th><th>&nbsp;0.02 ml/min</th></tr><tr><th>Power Supply</th><th>230V, 50Hz</th></tr><tr><th>Noise</th><th>52 dbA</th></tr><tr><th>Total Weight</th><th>1.5 kg (3.3 lb)</th></tr></tbody></table></figure>', 1, '2021-12-03 08:41:48', '2021-12-03 08:41:48', NULL),
(16, 'HbO-Smart Fingertip Pulse Oximeter', NULL, 'The new HbO-Smart device is the latest finger tip pulse oximeter from Drive DeVilbiss International intended for use in homes or hospitals for non-invasive measurement of oxygen saturation, pulse rate and perfusion index.', '<p>The new HbO-Smart device is the latest finger tip pulse oximeter from Drive DeVilbiss International intended for use in homes or hospitals for non-invasive measurement of oxygen saturation, pulse rate and perfusion index.</p><p>Including adjustable settings for user alerts and four optional screen displays this new stylish device has everything you would expect from a&nbsp;modern day spot checking oximeter which can be used for both children and adults.</p><ul><li>OLED display includes heart rate bar and plethysmography waveform</li><li>Four different directional screen settings</li><li>Features battery low alert and automatic power off after 8 seconds without detecting a signal</li><li>Low power consumption (2 AAA batteries for 25 hours of operation)</li></ul><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th>&nbsp;</th></tr><tr><th>Dimensions</th><th>65 mm x 35 mm x 30 mm</th></tr><tr><th>Oxygen Saturation Range</th><th>70% - 99%</th></tr><tr><th>Accuracy</th><th>80% - 99% ± 2%</th></tr><tr><th>Pulse Rate Range</th><th>30 - 240 BPM</th></tr><tr><th>Accuracy</th><th>± 2%</th></tr><tr><th>Perfusion Index</th><th>0.3 - 20%</th></tr><tr><th>Battery</th><th>2 x AAA (25 hours)</th></tr><tr><th>Product Weight</th><th>60 g (1.4 oz)</th></tr></tbody></table></figure>', 'hbo-smart-fingertip-pulse-oximeter', NULL, '1638521030.jpg', 1, 13, 1, 'HbO-Smart Fingertip Pulse Oximeter', '<p>The new HbO-Smart device is the latest finger tip pulse oximeter from Drive DeVilbiss International intended for use in homes or hospitals for non-invasive measurement of oxygen saturation, pulse rate and perfusion index.</p><p>Including adjustable settings for user alerts and four optional screen displays this new stylish device has everything you would expect from a&nbsp;modern day spot checking oximeter which can be used for both children and adults.</p><ul><li>OLED display includes heart rate bar and plethysmography waveform</li><li>Four different directional screen settings</li><li>Features battery low alert and automatic power off after 8 seconds without detecting a signal</li><li>Low power consumption (2 AAA batteries for 25 hours of operation)</li></ul><figure class=\"table\"><table><tbody><tr><th><strong>PARAMETER</strong></th><th>&nbsp;</th></tr><tr><th>Dimensions</th><th>65 mm x 35 mm x 30 mm</th></tr><tr><th>Oxygen Saturation Range</th><th>70% - 99%</th></tr><tr><th>Accuracy</th><th>80% - 99% ± 2%</th></tr><tr><th>Pulse Rate Range</th><th>30 - 240 BPM</th></tr><tr><th>Accuracy</th><th>± 2%</th></tr><tr><th>Perfusion Index</th><th>0.3 - 20%</th></tr><tr><th>Battery</th><th>2 x AAA (25 hours)</th></tr><tr><th>Product Weight</th><th>60 g (1.4 oz)</th></tr></tbody></table></figure>', 1, '2021-12-03 08:43:51', '2021-12-03 08:43:51', NULL),
(17, 'Lightweight rollator Gigo 2G', NULL, 'More mobility, light and easy', '<ul><li>Back rest now removable and foldable</li><li>Particularly light and attractive aluminum rollator</li><li>One-hand folding mechanism ensures safe and comfortable folding</li><li>Ergonomic handles can be adjusted to 6 height positions</li><li>Max. load of basket and tray 5 kg each</li><li>Supplied as standard with basket, tray, backrest, cane holder and tilt aid</li></ul>', 'lightweight-rollator-gigo-2g', NULL, '1638698413.jpg', 1, 14, 1, 'Lightweight rollator Gigo 2G', '<ul><li>Back rest now removable and foldable</li><li>Particularly light and attractive aluminum rollator</li><li>One-hand folding mechanism ensures safe and comfortable folding</li><li>Ergonomic handles can be adjusted to 6 height positions</li><li>Max. load of basket and tray 5 kg each</li><li>Supplied as standard with basket, tray, backrest, cane holder and tilt aid</li></ul>', 1, '2021-12-05 10:00:14', '2021-12-05 10:00:14', NULL),
(18, 'Rollator GoLite 200 XXL', NULL, 'Safety and mobility even with heavy loads', '<ul><li>Wide and stable rollator for maximum requirements</li><li>Can be used indoors and outdoors</li><li>Extra-large and soft seat surface provides comfort</li><li>Cushioned, removable back support bar</li><li>Dual-function brake (for braking and parking)</li><li>Ergonomic, height-adjustable handles</li><li>Puncture-proof tires</li><li>Wheel diameter/width 195/50 mm</li><li>Max. load of basket and tray 5 kg</li><li>Supplied as standard with basket, backrest, and cane holder</li></ul><h2>Technical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Overall width</td><td>78 cm</td></tr><tr><td>Overall length</td><td>71 cm</td></tr><tr><td>Handle height</td><td>88 - 99.5 cm</td></tr><tr><td>Seat width</td><td>46 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Seat depth</td><td>35 cm</td></tr><tr><td>Seat height</td><td>- 57 cm</td></tr><tr><td>Width between handles</td><td>56 cm</td></tr><tr><td>Width between rear wheels</td><td>55 cm</td></tr><tr><td>Folded width</td><td>78 cm</td></tr><tr><td>Folded height</td><td>90 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Folded length</td><td>22 cm</td></tr><tr><td>Total weight</td><td>12.7 kg</td></tr><tr><td>Weight</td><td>12.7 kg</td></tr><tr><td>Max. Load</td><td>200 kg</td></tr><tr><td>PU Pal.</td><td>10 Pal.</td></tr></tbody></table></figure>', 'rollator-golite-200-xxl', NULL, '1638699343.png', 1, 14, 2, 'Rollator GoLite 200 XXL', '<ul><li>Wide and stable rollator for maximum requirements</li><li>Can be used indoors and outdoors</li><li>Extra-large and soft seat surface provides comfort</li><li>Cushioned, removable back support bar</li><li>Dual-function brake (for braking and parking)</li><li>Ergonomic, height-adjustable handles</li><li>Puncture-proof tires</li><li>Wheel diameter/width 195/50 mm</li><li>Max. load of basket and tray 5 kg</li><li>Supplied as standard with basket, backrest, and cane holder</li></ul><h2>Technical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Overall width</td><td>78 cm</td></tr><tr><td>Overall length</td><td>71 cm</td></tr><tr><td>Handle height</td><td>88 - 99.5 cm</td></tr><tr><td>Seat width</td><td>46 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Seat depth</td><td>35 cm</td></tr><tr><td>Seat height</td><td>- 57 cm</td></tr><tr><td>Width between handles</td><td>56 cm</td></tr><tr><td>Width between rear wheels</td><td>55 cm</td></tr><tr><td>Folded width</td><td>78 cm</td></tr><tr><td>Folded height</td><td>90 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Folded length</td><td>22 cm</td></tr><tr><td>Total weight</td><td>12.7 kg</td></tr><tr><td>Weight</td><td>12.7 kg</td></tr><tr><td>Max. Load</td><td>200 kg</td></tr><tr><td>PU Pal.</td><td>10 Pal.</td></tr></tbody></table></figure>', 1, '2021-12-05 10:15:44', '2021-12-05 10:15:44', NULL),
(19, 'One button folding walker', NULL, 'Folds easily', '<ul><li>Lightweight walking frame</li><li>Made from sturdy yet lightweight aluminium</li><li>Vinyl contoured hand grips for added comfort</li><li>Offers maximum stability and light weight at the same time</li><li>Can be used indoors and outdoors</li><li>Height adjustable to suit user requirements</li></ul><h2>echnical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Overall width</td><td>50 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Overall length</td><td>50 cm</td></tr><tr><td>Overall height</td><td>81 - 99 cm</td></tr><tr><td>Total weight</td><td>3 kg</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Max. Load</td><td>180 kg</td></tr></tbody></table></figure>', 'one-button-folding-walker', NULL, '1638699539.jpg', 1, 17, 1, 'One button folding walker', '<ul><li>Lightweight walking frame</li><li>Made from sturdy yet lightweight aluminium</li><li>Vinyl contoured hand grips for added comfort</li><li>Offers maximum stability and light weight at the same time</li><li>Can be used indoors and outdoors</li><li>Height adjustable to suit user requirements</li></ul><h2>echnical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Overall width</td><td>50 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Overall length</td><td>50 cm</td></tr><tr><td>Overall height</td><td>81 - 99 cm</td></tr><tr><td>Total weight</td><td>3 kg</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Max. Load</td><td>180 kg</td></tr></tbody></table></figure>', 1, '2021-12-05 10:18:59', '2021-12-05 10:18:59', NULL),
(20, 'Lightweight wheelchair Litec 2G (Seat width 38 cm)', NULL, 'The 2nd generation', '<ul><li>Very light and versatile wheelchair</li><li>Armrests can be swiveled away</li><li>Adjustable-angle (0° - 30°) and folding footrests as standard</li><li>Leg support height adjustable to five positions</li><li>Upholstered seat back and seat cushion</li><li>Reinforced aluminum frame for optimal stability</li><li>Height of aluminum wheel forks can be adjusted to three positions</li><li>Three-position seat height adjustment from 46 to 52 cm</li><li>Wheelbase extension possible</li><li>175 x 45 mm PU steering wheels and 24\" full rubber drive wheels</li><li>Quick-release axles as standard for fast wheel installation or removal</li><li>Crash test according to ISO 7176-19: approved for passenger transport in vehicles in combination with all approved passenger and wheelchair restraint systems</li><li>The Litec 2G with common part principle: gain flexibility and reduce your stock level – with the common part principle: many Litec 2G replacement parts and accessories are compatible with all Ecotec 2G, Litec 2G Plus, Freetec, Rotec, and Multitec wheelchairs</li></ul><h2>Technical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Overall width without drum brake</td><td>56 cm</td></tr><tr><td>Drum brake</td><td>No</td></tr><tr><td>Overall width</td><td>56 cm</td></tr><tr><td>Overall length</td><td>104 cm</td></tr><tr><td>Overall height</td><td>87 - 92 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Seat width</td><td>38 cm</td></tr><tr><td>Seat depth</td><td>42 cm</td></tr><tr><td>Seat height</td><td>47 - 52 cm</td></tr><tr><td>Backrest height</td><td>42 cm</td></tr><tr><td>Backrest angle</td><td>4 °</td></tr><tr><td>Armrest height</td><td>23.5 cm</td></tr><tr><td>Footrest adjustment</td><td>36 - 44 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Drive wheel dimensions</td><td>24\" x 1 3/8\"</td></tr><tr><td>Front wheel dimensions</td><td>190 x 38 cm</td></tr><tr><td>Folded width</td><td>30 cm</td></tr><tr><td>Total weight</td><td>13.6 kg</td></tr><tr><td>Max. Load</td><td>125 kg</td></tr><tr><td>PU Pal.</td><td>8 Pal.</td></tr></tbody></table></figure>', 'lightweight-wheelchair-litec-2g-seat-width-38-cm', NULL, '1638699759.jpg', 1, 15, 1, 'Lightweight wheelchair Litec 2G (Seat width 38 cm)', '<ul><li>Very light and versatile wheelchair</li><li>Armrests can be swiveled away</li><li>Adjustable-angle (0° - 30°) and folding footrests as standard</li><li>Leg support height adjustable to five positions</li><li>Upholstered seat back and seat cushion</li><li>Reinforced aluminum frame for optimal stability</li><li>Height of aluminum wheel forks can be adjusted to three positions</li><li>Three-position seat height adjustment from 46 to 52 cm</li><li>Wheelbase extension possible</li><li>175 x 45 mm PU steering wheels and 24\" full rubber drive wheels</li><li>Quick-release axles as standard for fast wheel installation or removal</li><li>Crash test according to ISO 7176-19: approved for passenger transport in vehicles in combination with all approved passenger and wheelchair restraint systems</li><li>The Litec 2G with common part principle: gain flexibility and reduce your stock level – with the common part principle: many Litec 2G replacement parts and accessories are compatible with all Ecotec 2G, Litec 2G Plus, Freetec, Rotec, and Multitec wheelchairs</li></ul><h2>Technical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Overall width without drum brake</td><td>56 cm</td></tr><tr><td>Drum brake</td><td>No</td></tr><tr><td>Overall width</td><td>56 cm</td></tr><tr><td>Overall length</td><td>104 cm</td></tr><tr><td>Overall height</td><td>87 - 92 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Seat width</td><td>38 cm</td></tr><tr><td>Seat depth</td><td>42 cm</td></tr><tr><td>Seat height</td><td>47 - 52 cm</td></tr><tr><td>Backrest height</td><td>42 cm</td></tr><tr><td>Backrest angle</td><td>4 °</td></tr><tr><td>Armrest height</td><td>23.5 cm</td></tr><tr><td>Footrest adjustment</td><td>36 - 44 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Drive wheel dimensions</td><td>24\" x 1 3/8\"</td></tr><tr><td>Front wheel dimensions</td><td>190 x 38 cm</td></tr><tr><td>Folded width</td><td>30 cm</td></tr><tr><td>Total weight</td><td>13.6 kg</td></tr><tr><td>Max. Load</td><td>125 kg</td></tr><tr><td>PU Pal.</td><td>8 Pal.</td></tr></tbody></table></figure>', 1, '2021-12-05 10:22:39', '2021-12-05 10:22:39', NULL),
(21, 'Standard wheelchair Ecotec 2G (Seat width 38 cm)', NULL, 'More discernible and flexible in the 2nd generation', '<ul><li>Very light and versatile wheelchair</li><li>Armrests can be swiveled away</li><li>Folding footrests with heel straps</li><li>Upholstered seat back and seat cushion</li><li>Height of aluminum wheel forks can be adjusted to three positions</li><li>Powder-coated steel hand rims</li><li>Seat height adjustment of 46 and 51 cm</li><li>Quick-release axles as standard for fast wheel installation or removal</li><li>175 x 45 mm PU steering wheels and 24\" full rubber drive wheels</li><li>Integrated brake lever extension can be extended and folded over</li><li>Crash test according to ISO 7176-19: approved for passenger transport in vehicles in combination with all approved passenger and wheelchair restraint systems</li><li>The Ecotec 2G with common part principle: gain flexibility and reduce your stock level – with the common part principle: many Ecotec 2G replacement parts and accessories are compatible with all Litec 2G, Litec 2G Plus, Freetec, Rotec, and Multitec wheelchairs</li></ul><h2>Technical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Drum brake</td><td>No</td></tr><tr><td>Overall width</td><td>56.5 cm</td></tr><tr><td>Overall length</td><td>107 cm</td></tr><tr><td>Overall height</td><td>90 - 95 cm</td></tr><tr><td>Seat width</td><td>38 cm</td></tr><tr><td>Seat depth</td><td>42 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Seat height</td><td>49 / 54 cm</td></tr><tr><td>Seat height adjustment</td><td>2</td></tr><tr><td>&nbsp;</td><td>2 °</td></tr><tr><td>Backrest height</td><td>39 cm</td></tr><tr><td>Armrest height</td><td>22.5 cm</td></tr><tr><td>Footrest adjustment</td><td>36 - 47 cm</td></tr><tr><td>Drive wheel dimensions</td><td>24\"</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Front wheel dimensions</td><td>7 x 2\" cm</td></tr><tr><td>Folded width</td><td>30 cm</td></tr><tr><td>Total weight</td><td>18.6 kg</td></tr><tr><td>Max. Load</td><td>130 kg</td></tr><tr><td>PU Pal.</td><td>8 Pal.</td></tr></tbody></table></figure>', 'standard-wheelchair-ecotec-2g-seat-width-38-cm', NULL, '1638699894.jpg', 1, 15, 2, 'Standard wheelchair Ecotec 2G (Seat width 38 cm)', '<ul><li>Very light and versatile wheelchair</li><li>Armrests can be swiveled away</li><li>Folding footrests with heel straps</li><li>Upholstered seat back and seat cushion</li><li>Height of aluminum wheel forks can be adjusted to three positions</li><li>Powder-coated steel hand rims</li><li>Seat height adjustment of 46 and 51 cm</li><li>Quick-release axles as standard for fast wheel installation or removal</li><li>175 x 45 mm PU steering wheels and 24\" full rubber drive wheels</li><li>Integrated brake lever extension can be extended and folded over</li><li>Crash test according to ISO 7176-19: approved for passenger transport in vehicles in combination with all approved passenger and wheelchair restraint systems</li><li>The Ecotec 2G with common part principle: gain flexibility and reduce your stock level – with the common part principle: many Ecotec 2G replacement parts and accessories are compatible with all Litec 2G, Litec 2G Plus, Freetec, Rotec, and Multitec wheelchairs</li></ul><h2>Technical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Drum brake</td><td>No</td></tr><tr><td>Overall width</td><td>56.5 cm</td></tr><tr><td>Overall length</td><td>107 cm</td></tr><tr><td>Overall height</td><td>90 - 95 cm</td></tr><tr><td>Seat width</td><td>38 cm</td></tr><tr><td>Seat depth</td><td>42 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Seat height</td><td>49 / 54 cm</td></tr><tr><td>Seat height adjustment</td><td>2</td></tr><tr><td>&nbsp;</td><td>2 °</td></tr><tr><td>Backrest height</td><td>39 cm</td></tr><tr><td>Armrest height</td><td>22.5 cm</td></tr><tr><td>Footrest adjustment</td><td>36 - 47 cm</td></tr><tr><td>Drive wheel dimensions</td><td>24\"</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Front wheel dimensions</td><td>7 x 2\" cm</td></tr><tr><td>Folded width</td><td>30 cm</td></tr><tr><td>Total weight</td><td>18.6 kg</td></tr><tr><td>Max. Load</td><td>130 kg</td></tr><tr><td>PU Pal.</td><td>8 Pal.</td></tr></tbody></table></figure>', 1, '2021-12-05 10:24:55', '2021-12-05 10:24:55', NULL),
(22, 'Hurrycane Freedom edition, Black (Freedom edition, Black)', NULL, 'can be folded easily', '<p>Featuring eight convenient height adjustments, a 360 degree pivoting head and a free-standing design, the Hurrycane Freedom Edition can accommodate any user.</p><ul><li>8 convenient height adjustments</li><li>Anodized aluminum shaft</li><li>Wrist strap included</li><li>Folds easily for convenient storage and travel</li></ul><h2>Technical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Handle height</td><td>77 - 95 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Total weight</td><td>500 g</td></tr><tr><td>Max. Load</td><td>159 kg</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>PU pc.</td><td>25 Stk.</td></tr></tbody></table></figure>', 'hurrycane-freedom-edition-black-freedom-edition-black', NULL, '1638700126.jpg', 1, 18, 1, 'Hurrycane Freedom edition, Black (Freedom edition, Black)', '<p>Featuring eight convenient height adjustments, a 360 degree pivoting head and a free-standing design, the Hurrycane Freedom Edition can accommodate any user.</p><ul><li>8 convenient height adjustments</li><li>Anodized aluminum shaft</li><li>Wrist strap included</li><li>Folds easily for convenient storage and travel</li></ul><h2>Technical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Handle height</td><td>77 - 95 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Total weight</td><td>500 g</td></tr><tr><td>Max. Load</td><td>159 kg</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>PU pc.</td><td>25 Stk.</td></tr></tbody></table></figure>', 1, '2021-12-05 10:28:46', '2021-12-05 10:28:46', NULL),
(23, 'Scooter BL270 Scout', NULL, 'Versatile and zippy', '<p>With the Scout, you are mobile and active at all times, for any activity. With its modern design, the maneuverable scooter is not just attractive but is also easy and versatile to drive. To ensure that you stay mobile at your destination as well, the Scout can be disassembled in just a few steps without tools and stowed conveniently in your vehicle.</p><ul><li>Simple and clear operation</li><li>Low weight</li><li>Small turning circle</li><li>Can be disassembled quickly and easily without tools</li><li>Practical for carrying along</li><li>Seat height adjustable to three positions: 54 cm, 56.5 cm, 59 cm</li><li>New: with pneumatic tires</li></ul><h2>Technical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Overall width</td><td>48 cm</td></tr><tr><td>Overall length</td><td>108 cm</td></tr><tr><td>Overall height</td><td>91 cm</td></tr><tr><td>Seat width</td><td>43 cm</td></tr><tr><td>Seat depth</td><td>36 cm</td></tr><tr><td>Seat height</td><td>44 / 56.5 - 59 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Width between armrest</td><td>40 - 50 cm</td></tr><tr><td>Speed</td><td>6 km/h</td></tr><tr><td>Battery capacity 2x</td><td>20 Ah</td></tr><tr><td>Motor capacity</td><td>270 W</td></tr><tr><td>Continuous-power</td><td>270 W</td></tr><tr><td>Peak power</td><td>500 W</td></tr><tr><td>Gradeability</td><td>14 %</td></tr><tr><td>Clearance</td><td>6 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Front tires</td><td>200 x 50 mm</td></tr><tr><td>Rear tires</td><td>200 x 50 mm</td></tr><tr><td>Total weight</td><td>43 kg</td></tr><tr><td>Weight without battery</td><td>34 kg</td></tr><tr><td>Max. Load</td><td>130 kg</td></tr><tr><td>PU Pal.</td><td>1 Pal.</td></tr></tbody></table></figure>', 'scooter-bl270-scout', NULL, '1638702108.jpg', 1, 23, 1, 'Scooter BL270 Scout', '<p>With the Scout, you are mobile and active at all times, for any activity. With its modern design, the maneuverable scooter is not just attractive but is also easy and versatile to drive. To ensure that you stay mobile at your destination as well, the Scout can be disassembled in just a few steps without tools and stowed conveniently in your vehicle.</p><ul><li>Simple and clear operation</li><li>Low weight</li><li>Small turning circle</li><li>Can be disassembled quickly and easily without tools</li><li>Practical for carrying along</li><li>Seat height adjustable to three positions: 54 cm, 56.5 cm, 59 cm</li><li>New: with pneumatic tires</li></ul><h2>Technical Data</h2><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Overall width</td><td>48 cm</td></tr><tr><td>Overall length</td><td>108 cm</td></tr><tr><td>Overall height</td><td>91 cm</td></tr><tr><td>Seat width</td><td>43 cm</td></tr><tr><td>Seat depth</td><td>36 cm</td></tr><tr><td>Seat height</td><td>44 / 56.5 - 59 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Width between armrest</td><td>40 - 50 cm</td></tr><tr><td>Speed</td><td>6 km/h</td></tr><tr><td>Battery capacity 2x</td><td>20 Ah</td></tr><tr><td>Motor capacity</td><td>270 W</td></tr><tr><td>Continuous-power</td><td>270 W</td></tr><tr><td>Peak power</td><td>500 W</td></tr><tr><td>Gradeability</td><td>14 %</td></tr><tr><td>Clearance</td><td>6 cm</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>Front tires</td><td>200 x 50 mm</td></tr><tr><td>Rear tires</td><td>200 x 50 mm</td></tr><tr><td>Total weight</td><td>43 kg</td></tr><tr><td>Weight without battery</td><td>34 kg</td></tr><tr><td>Max. Load</td><td>130 kg</td></tr><tr><td>PU Pal.</td><td>1 Pal.</td></tr></tbody></table></figure>', 1, '2021-12-05 11:01:48', '2021-12-05 11:01:48', NULL),
(24, 'Energi Powerchair', NULL, 'The Energi Lightweight Powerchairs have many excellent features normally found on more expensive chairs yet are surprisingly affordable.', '<ul><li>Maximum speed of 4mph*</li><li>Maximum range 15 miles on a full battery charge*</li><li>Rear wheel drive system for optimum manoeuvrability</li><li>Designed for indoor use and limited outdoor use</li></ul>', 'energi-powerchair', NULL, '1638858875.jpg', 1, 24, 1, 'Energi Powerchair', '<ul><li>Maximum speed of 4mph*</li><li>Maximum range 15 miles on a full battery charge*</li><li>Rear wheel drive system for optimum manoeuvrability</li><li>Designed for indoor use and limited outdoor use</li></ul>', 1, '2021-12-07 06:34:35', '2021-12-07 06:34:35', NULL),
(25, 'iBreeze Series - free breath as breeze', NULL, 'iBreeze series intelligent humidifier is designed with plug and seal water tank. System will continuously monitor the water level, and stop heating & give a visiable alert, while the water level comes low, in avoiding patient\' s discomfort leaded by dry air and delivery the maximum of safety.', '<p>iBreeze series is new generation sleep &amp; respiration therapy platform developed by resvent. It is not a stand-alone device, but systematic solutions of respiratory disorders which includes diagnosis, titration, treatment, configurable modules, full range of accessories, and IT solutions. Ergonomic design, intuitive user interface and advanced ventilation algorithm along with ResAssist, a resvent cloud based patient data management system, will bring users a real brilliant experience.</p><p>iBreeze series, change your perspective, again.</p><p><br>&nbsp;</p><p><br>&nbsp;</p>', 'ibreeze-series-free-breath-as-breeze', NULL, '1638867504.PNG', 1, 25, 1, 'iBreeze Series - free breath as breeze', '<p>iBreeze series is new generation sleep &amp; respiration therapy platform developed by resvent. It is not a stand-alone device, but systematic solutions of respiratory disorders which includes diagnosis, titration, treatment, configurable modules, full range of accessories, and IT solutions. Ergonomic design, intuitive user interface and advanced ventilation algorithm along with ResAssist, a resvent cloud based patient data management system, will bring<br>users a real brilliant experience.</p><p>iBreeze series, change your perspective, again.</p><p>iBreeze series intelligent humidifier is designed with plug and seal water tank. System will<br>continuously monitor the water level, and stop heating &amp; give a visiable alert, while the water level comes low, in avoiding patient\' s discomfort leaded by dry air and delivery the maximum<br>of safety.<br>&nbsp;</p><p><br>&nbsp;</p>', 1, '2021-12-07 08:22:33', '2021-12-07 08:58:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_technical_details`
--

CREATE TABLE `product_technical_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_varients`
--

CREATE TABLE `product_varients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'admin', 'web', '2021-12-02 05:56:48', '2021-12-02 05:56:48');

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
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(59, 2),
(60, 2),
(61, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 2),
(66, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 2),
(74, 2),
(75, 2),
(76, 2),
(77, 2),
(78, 2),
(79, 2),
(80, 2),
(81, 2),
(82, 2),
(83, 2),
(84, 2),
(85, 2),
(86, 2),
(87, 2),
(88, 2),
(89, 2),
(90, 2),
(91, 2),
(92, 2),
(93, 2),
(94, 2),
(95, 2),
(96, 2),
(97, 2);

-- --------------------------------------------------------

--
-- Table structure for table `seo_blogs`
--

CREATE TABLE `seo_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_phrase` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_blogs`
--

INSERT INTO `seo_blogs` (`id`, `meta_title`, `meta_description`, `meta_phrase`, `keyword`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'test blog', '<p>thi si test blog of nepal</p>', 'this is test bog', 'test blog', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_categories`
--

CREATE TABLE `seo_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_phrase` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_categories`
--

INSERT INTO `seo_categories` (`id`, `meta_title`, `meta_description`, `meta_phrase`, `keyword`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Oxygen Therapy', 'Oxygen Therapy', 'Oxygen Therapy', 'Oxygen Therapy', 1, NULL, NULL),
(2, 'Scooter', 'Scooter', 'Scooter', 'Scooter', 1, NULL, NULL),
(3, 'Bath Safety', 'Bath Safety', 'Bath Safety', 'Bath Safety', 1, NULL, NULL),
(4, 'Patient Room', 'Patient Room', 'Patient Room', 'Patient Room', 1, NULL, NULL),
(5, 'Mobility', 'Mobility', 'Mobility', 'Mobility', 1, NULL, NULL),
(6, 'Oxygen Therapy', 'Oxygen Therapy', 'Oxygen Therapy', 'Oxygen Therapy', 1, NULL, NULL),
(7, 'Suction Therapy', 'Suction Therapy', 'Suction Therapy', 'Suction Therapy', 1, NULL, NULL),
(17, 'Aerosol Therapy', 'Aerosol Therapy', 'Aerosol Therapy', 'Aerosol Therapy', 1, NULL, NULL),
(18, 'Canes & Crutches', 'Canes & Crutches', 'Canes & Crutches', 'Canes & Crutches', 1, NULL, NULL),
(19, 'Rollators', 'Rollators', 'Rollators', 'Rollators', 1, NULL, NULL),
(20, 'Wheelchairs', 'Wheelchairs', 'Wheelchairs', 'Wheelchairs', 1, NULL, NULL),
(21, 'Transport Chairs', 'Transport Chairs', 'Transport Chairs', 'Transport Chairs', 1, NULL, NULL),
(22, 'Walkers', 'Walkers', 'Walkers', 'Walkers', 1, NULL, NULL),
(23, 'Canes', 'Canes', 'Canes', 'Canes', 1, NULL, NULL),
(24, 'Bath', 'Bath', 'Bath', 'Bath', 1, NULL, NULL),
(25, 'Shower', 'Shower', 'Shower', 'Shower', 1, NULL, NULL),
(26, 'Toilet', 'Toilet', 'Toilet', 'Toilet', 1, NULL, NULL),
(27, 'Safety', 'Safety', 'Safety', 'Safety', 1, NULL, NULL),
(28, 'Scooter', 'Scooter', 'Scooter', 'Scooter', 1, NULL, NULL),
(29, 'Kids', 'Kids', 'Kids', 'Kids', 1, NULL, NULL),
(30, 'Power Wheelchair', 'Power Wheelchair', 'Power Wheelchair', 'Power Wheelchair', 1, NULL, NULL),
(31, 'CPAP/BIPAP Theory', 'CPAP/BIPAP Theory', 'CPAP/BIPAP Theory', 'CPAP/BIPAP Theory', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_product_varieties`
--

CREATE TABLE `seo_product_varieties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_phrase` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_services`
--

CREATE TABLE `seo_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_phrase` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_services`
--

INSERT INTO `seo_services` (`id`, `meta_title`, `meta_description`, `meta_phrase`, `keyword`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Original Spare Parts', 'Original Spare Parts', 'Original Spare Parts', 'Original Spare Parts', 1, NULL, NULL),
(2, 'Trained Technical Human Resource', 'Trained Technical Human Resource', 'Trained Technical Human Resource', 'Trained Technical Human Resource', 1, NULL, NULL),
(3, 'Special tools', 'Special tools', 'Special tools', 'Special tools', 1, NULL, NULL),
(4, 'Equipment testing and calibration', 'Equipment testing and calibration', 'Equipment testing and calibration', 'Equipment testing and calibration', 1, NULL, NULL),
(5, 'Service workplace at showroom', 'Service workplace at showroom', 'Service workplace at showroom', 'Service workplace at showroom', 1, NULL, NULL),
(6, 'Rental', '<p>Why buy when you can rent?</p>', '<p>Why buy when you can rent?</p>', 'Rental', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_site_settings`
--

CREATE TABLE `seo_site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_phrase` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_site_settings`
--

INSERT INTO `seo_site_settings` (`id`, `meta_title`, `meta_description`, `meta_phrase`, `keyword`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Suryodaya Inc Pvt. Ltd.', '<p>Suryodaya Inc</p>', 'Suryodaya Inc', 'Suryodaya Inc', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `order`, `user_id`, `publish`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Original Spare Parts', 'original-spare-parts', NULL, 1, 1, 1, '2021-11-24 09:11:32', '2021-11-24 09:11:32', '1637765792.jpg'),
(2, 'Trained Technical Human Resource', 'trained-technical-human-resource', NULL, 3, 1, 1, '2021-11-24 09:13:34', '2021-11-24 09:13:34', '1637765914.jpg'),
(4, 'Equipment testing and calibration', 'tested-measuring-equipment-calibration', NULL, 4, 1, 1, '2021-11-24 09:16:06', '2021-12-06 07:26:34', '1637867845.jpg'),
(5, 'Service workplace at showroom', 'service-workplace-at-showroom', NULL, 6, 1, 1, '2021-11-24 09:16:43', '2021-11-24 09:16:43', '1637868065.jpg'),
(6, 'Rental', 'rental', '<p>Why buy when you can rent?</p>', 2, 1, 1, '2021-12-06 07:25:27', '2021-12-06 07:25:27', '1638775526.png');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twiter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_care_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_care_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_banner1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_banner2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_banner3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `email`, `address`, `landline`, `mobile`, `location`, `location_url`, `map`, `facebook`, `twiter`, `instagram`, `customer_care_phone`, `customer_care_email`, `logo`, `service_banner1`, `service_banner2`, `service_banner3`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Suryodaya Inc', 'homecare@brgmed.com', 'Jawalakhel, Lalitpur', '01 5900594', '9863249395', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.4647633101617!2d85.31347911506128!3d27.67202688280658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f90586b3b7%3A0xbef4fa4dc3d68e16!2sSuryodaya%20INC%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1637762504598!5m2!1sen!2snp', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.4647633101617!2d85.31347911506128!3d27.67202688280658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f90586b3b7%3A0xbef4fa4dc3d68e16!2sSuryodaya%20INC%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1637762504598!5m2!1sen!2snp', 'https://www.facebook.com/suryodayainc', 'https://twitter.com/suryodaya', 'https://www.instagram.com/suryodayainc/?hl=en', '9863249395', NULL, 'Sun-05-43-52-1329198366.logo.jpg', '/tmp/phpSheCt2', '', '', 1, '2021-11-24 01:08:41', '2021-12-05 05:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `short_description`, `description`, `slug`, `image`, `user_id`, `order`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Oxymizer', NULL, NULL, 'oxymeter', '1637761638.png', 1, 1, 1, '2021-11-24 08:02:18', '2021-12-03 10:45:12'),
(2, 'Spot Checking Fingertip', NULL, NULL, 'spot-checking-fingertip', '1637761735.jpg', 1, 2, 1, '2021-11-24 08:03:55', '2021-11-24 08:03:55'),
(3, 'Compact 1025', 'The smallest and lightest 10 Litre high flow concentrator in the market', NULL, 'compact-1025', '1637761967.jpg', 1, 3, 1, '2021-11-24 08:07:47', '2021-12-03 10:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `slug`, `description`, `image`, `order`, `user_id`, `category_id`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Oxygen Therapy', 'oxygen-therapy', NULL, '1638506844.jpg', 2, 1, 1, 1, '2021-11-24 08:45:14', '2021-12-03 04:47:24'),
(2, 'Suction Therapy', 'suction-therapy', NULL, '1638506878.jpg', 1, 1, 1, 1, '2021-11-24 08:45:45', '2021-12-03 04:47:59'),
(12, 'Aerosol Therapy', 'aerosol-therapy', NULL, '1638506801.jpg', 3, 1, 1, 1, '2021-12-03 04:46:42', '2021-12-03 04:46:42'),
(13, 'Diagnostics', 'diagnostics', NULL, '1638506929.jpg', 4, 1, 1, 1, '2021-12-03 04:48:49', '2021-12-03 04:48:49'),
(14, 'Rollators', 'rollators', NULL, '1638521172.jpg', 1, 1, 5, 1, '2021-12-03 08:46:12', '2021-12-03 08:46:12'),
(15, 'Wheelchairs', 'wheelchairs', NULL, '1638521221.jpg', 2, 1, 5, 1, '2021-12-03 08:47:01', '2021-12-03 08:47:01'),
(16, 'Transport Chairs', 'transport-chairs', NULL, '1638521246.jpg', 3, 1, 5, 1, '2021-12-03 08:47:27', '2021-12-03 08:47:27'),
(17, 'Walkers', 'walkers', NULL, '1638521270.jpg', 4, 1, 5, 1, '2021-12-03 08:47:50', '2021-12-03 08:47:50'),
(18, 'Canes & Crutches', 'canes-crutches', NULL, '1638521291.jpg', 5, 1, 5, 1, '2021-12-03 08:48:11', '2021-12-07 06:27:19'),
(19, 'Bath', 'bath', NULL, '1638521621.png', 1, 1, 3, 1, '2021-12-03 08:53:41', '2021-12-03 08:53:41'),
(20, 'Shower', 'shower', NULL, '1638521708.png', 2, 1, 3, 1, '2021-12-03 08:55:08', '2021-12-03 08:55:08'),
(21, 'Toilet', 'toilet', NULL, '1638521790.jpg', 3, 1, 3, 1, '2021-12-03 08:56:30', '2021-12-03 08:56:30'),
(22, 'Safety', 'safety', NULL, '1638521874.png', 4, 1, 3, 1, '2021-12-03 08:57:54', '2021-12-03 08:57:54'),
(23, 'Scooter', 'scooter', NULL, '1638701881.jpg', 5, 1, 2, 1, '2021-12-05 10:58:01', '2021-12-05 10:58:01'),
(24, 'Power Wheelchair', 'power-wheelchair', NULL, '1638858779.jpg', 1, 1, 5, 1, '2021-12-07 06:32:59', '2021-12-07 06:32:59'),
(25, 'CPAP/BIPAP Theory', 'cpapbipap-theory', NULL, '1638865118.PNG', 5, 1, 1, 1, '2021-12-07 08:18:38', '2021-12-07 08:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` enum('verified','unverified') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$D/obR5iHGZ.6B8lzXrQ2nucFWrUvCCqnJ3EutTWjykBXeDtE3fsuu', NULL, '2021-12-02 05:56:48', '2021-12-02 05:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `order`, `link`, `description`, `slug`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Congratulationtesting', 1, 'qUp298ukvAQ', NULL, 'congratulationtesting', 1, '2021-11-24 09:26:31', '2021-11-25 08:43:40'),
(2, 'New fresh', 2, 'kkjvSAvBo58', NULL, 'new-fresh', 1, '2021-11-25 08:45:35', '2021-11-25 08:45:35'),
(6, '525 Compact Oxygen Concentrator From Drive DeVilbiss Healthcare', 3, 'https://www.youtube.com/watch?v=Ev135AlmZdQ&list=PLli3bThPNjRG3-9oBu8MFhx-nXgTWObLl', NULL, '525-compact-oxygen-concentrator-from-drive-devilbiss-healthcare', 1, '2021-12-01 06:53:15', '2021-12-01 06:53:15'),
(8, 'Hybrid-Power Mattress - Drive DeVilbiss Healthcare', 5, 'fosGM3O9vlo', '<p>The Hybrid-Power mattress combines the pressure redistribution properties of high specification foam, with alternating cell technology. The visco-elastic foam conforms to the shape of the body, while the alternating cells assist with the pressure relief. There is no requirement to move the patient off the bed to step them up to an alternating system or step them down to a static mattress.</p>', 'hybrid-power-mattress-drive-devilbiss-healthcare', 1, '2021-12-03 11:14:34', '2021-12-05 09:43:34'),
(10, 'How To Choose The Right Walker - Drive DeVilbiss', 4, 'Wu7wDutjdaE', '<p>Learn more at <a href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbkdTWUxJYTJQdDIzc2NKQWVwQktoWjdKczZSZ3xBQ3Jtc0trczI4b002S0xIN1lndXA5SktOb2pOcTkyWkpRNEJ1RXBpTmlwOVkzSm1zRVNVWlJQYmcwdG1WNGhfNmk3S2ZKYkpmRnF0d2RSVndqZjk0bUFfWGJQUXMxWC02WUFCUUIyZWhQQkMtVDFwVTM4VXAzdw&amp;q=https%3A%2F%2Fwww.drivemedical.com%2F\">https://www.drivemedical.com/</a></p>', 'how-to-choose-the-right-walker-drive-devilbiss', 1, '2021-12-05 09:43:37', '2021-12-05 09:46:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalogs_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `products_service_id_foreign` (`service_id`);

--
-- Indexes for table `product_technical_details`
--
ALTER TABLE `product_technical_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_technical_details_user_id_foreign` (`user_id`),
  ADD KEY `product_technical_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_varients`
--
ALTER TABLE `product_varients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_varients_user_id_foreign` (`user_id`),
  ADD KEY `product_varients_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `seo_blogs`
--
ALTER TABLE `seo_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_categories`
--
ALTER TABLE `seo_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_product_varieties`
--
ALTER TABLE `seo_product_varieties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_services`
--
ALTER TABLE `seo_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_site_settings`
--
ALTER TABLE `seo_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_user_id_foreign` (`user_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_user_id_foreign` (`user_id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_technical_details`
--
ALTER TABLE `product_technical_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_varients`
--
ALTER TABLE `product_varients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seo_blogs`
--
ALTER TABLE `seo_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_categories`
--
ALTER TABLE `seo_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `seo_product_varieties`
--
ALTER TABLE `seo_product_varieties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_services`
--
ALTER TABLE `seo_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seo_site_settings`
--
ALTER TABLE `seo_site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD CONSTRAINT `catalogs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_technical_details`
--
ALTER TABLE `product_technical_details`
  ADD CONSTRAINT `product_technical_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_technical_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_varients`
--
ALTER TABLE `product_varients`
  ADD CONSTRAINT `product_varients_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_varients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subcategories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
