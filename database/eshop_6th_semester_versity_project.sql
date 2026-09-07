-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2022 at 03:05 PM
-- Server version: 10.3.37-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ridoypau_shengen_oversesh_soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `district_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `district_id`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'Savar', 21, 1, '2021-12-01 04:30:27', '2021-12-01 04:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_image` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `position` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_image` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `is_featured` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent_id`, `position`, `image`, `banner`, `description`, `meta_title`, `meta_image`, `meta_description`, `is_featured`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'Men Collection', 0, 1, '1662808645.png', 'banner_1662808645.png', NULL, NULL, NULL, NULL, 0, 1, '2021-10-26 10:21:42', '2022-09-10 05:19:41'),
(6, 'Summer Collection', 0, 2, '1662809008.png', 'banner_1662809008.png', NULL, NULL, NULL, NULL, 1, 1, '2021-10-26 10:23:04', '2022-09-10 05:23:28'),
(7, 'Women Collection', 0, 3, '1662809053.png', 'banner_1662809053.png', NULL, NULL, NULL, NULL, 0, 1, '2021-10-26 10:24:06', '2022-09-10 05:24:13'),
(8, 'Winter Collection', 0, 4, '1662809104.png', 'banner_1662809104.png', NULL, NULL, NULL, NULL, 0, 1, '2021-10-26 10:25:03', '2022-09-10 05:25:04'),
(9, 'PREMIUM DATES WITH NUTS', 0, 5, '1635225982.jpg', 'banner_1635225982.jpg', NULL, NULL, NULL, NULL, 0, 1, '2021-10-26 10:26:22', '2021-10-26 10:26:22'),
(10, 'MORE HEALTHY PRODUCTS', 0, 6, '1635226046.jpg', 'banner_1635226046.jpg', NULL, NULL, NULL, NULL, 0, 1, '2021-10-26 10:27:26', '2021-10-26 10:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `discount` double DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `single_use` int(11) NOT NULL DEFAULT 0,
  `affiliate_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `discount`, `amount`, `valid_from`, `valid_to`, `single_use`, `affiliate_id`, `created_at`, `updated_at`) VALUES
(2, 'Test', 'FARAIT', NULL, 500, '2021-09-13', '2021-09-28', 0, NULL, '2021-09-13 01:38:01', '2021-09-13 01:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 'Barguna', 1, '2021-11-30 04:35:10', '2021-11-30 04:35:10'),
(5, 'Barishal', 1, '2021-11-30 04:35:53', '2021-11-30 04:35:53'),
(6, 'Bhola', 1, '2021-11-30 04:36:24', '2021-11-30 04:36:24'),
(7, 'Jhalokathi', 1, '2021-11-30 04:37:21', '2021-11-30 04:37:21'),
(8, 'Patuakhali', 1, '2021-11-30 04:37:40', '2021-11-30 04:37:40'),
(9, 'Pirojpur', 1, '2021-11-30 04:37:57', '2021-11-30 04:37:57'),
(10, 'B.baria', 1, '2021-11-30 04:38:24', '2021-11-30 04:38:24'),
(11, 'Bandarban', 1, '2021-11-30 04:39:14', '2021-11-30 04:39:14'),
(12, 'Chandpur', 1, '2021-11-30 04:39:42', '2021-11-30 04:39:42'),
(13, 'Chattogram', 1, '2021-11-30 04:40:24', '2021-11-30 04:40:24'),
(14, 'bazarCox\'s', 1, '2021-11-30 04:41:13', '2021-11-30 04:41:13'),
(15, 'Cumilla', 1, '2021-11-30 04:42:25', '2021-11-30 04:42:25'),
(16, 'Feni', 1, '2021-11-30 04:43:18', '2021-11-30 04:43:18'),
(17, 'Khagrachari', 1, '2021-11-30 04:43:59', '2021-11-30 04:43:59'),
(18, 'Laxmipur', 1, '2021-11-30 04:44:29', '2021-11-30 04:44:29'),
(19, 'Noakhali', 1, '2021-11-30 04:44:48', '2021-11-30 04:44:48'),
(20, 'Rangamati', 1, '2021-11-30 04:45:22', '2021-11-30 04:45:22'),
(21, 'Dhaka', 1, '2021-11-30 04:45:50', '2021-11-30 04:45:50'),
(22, 'Faridpur', 1, '2021-11-30 04:46:32', '2021-11-30 04:46:32'),
(23, 'Gazipur', 1, '2021-11-30 04:50:21', '2021-11-30 04:50:21'),
(24, 'Gopalganj', 1, '2021-11-30 05:00:45', '2021-11-30 05:00:45'),
(25, 'Kishoreganj', 1, '2021-11-30 05:01:07', '2021-11-30 05:01:07'),
(26, 'Madaripur', 1, '2021-11-30 05:01:56', '2021-11-30 05:01:56'),
(27, 'Manikganj', 1, '2021-11-30 05:02:10', '2021-11-30 05:02:10'),
(28, 'Munshiganj', 1, '2021-11-30 05:02:24', '2021-11-30 05:02:24'),
(29, 'Narayanganj', 1, '2021-11-30 05:03:07', '2021-11-30 05:03:07'),
(30, 'Narshingdi', 1, '2021-11-30 05:03:21', '2021-11-30 05:03:21'),
(31, 'Rajbari', 1, '2021-11-30 05:03:39', '2021-11-30 05:03:39'),
(32, 'Shariatpur', 1, '2021-11-30 05:04:16', '2021-11-30 05:04:16'),
(33, 'Tangail', 1, '2021-11-30 05:04:28', '2021-11-30 05:04:28'),
(34, 'Bagerhat', 1, '2021-11-30 05:04:56', '2021-11-30 05:04:56'),
(35, 'Chuadanga', 1, '2021-11-30 05:05:13', '2021-11-30 05:05:13'),
(36, 'Jashore', 1, '2021-11-30 05:05:29', '2021-11-30 05:05:29'),
(37, 'Jhenaidah', 1, '2021-11-30 05:05:59', '2021-11-30 05:05:59'),
(38, 'Khulna', 1, '2021-11-30 05:06:15', '2021-11-30 05:06:15'),
(39, 'Kushtia', 1, '2021-11-30 05:07:28', '2021-11-30 05:07:28'),
(40, 'Magura', 1, '2021-11-30 05:07:49', '2021-11-30 05:07:49'),
(41, 'Meherpur', 1, '2021-11-30 05:08:04', '2021-11-30 05:08:04'),
(42, 'Narail', 1, '2021-11-30 05:08:23', '2021-11-30 05:08:23'),
(43, 'Satkhira', 1, '2021-11-30 05:09:14', '2021-11-30 05:09:14'),
(44, 'Jamalpur', 1, '2021-11-30 05:09:30', '2021-11-30 05:09:30'),
(45, 'Mymensingh', 1, '2021-11-30 05:09:46', '2021-11-30 05:09:46'),
(46, 'Netrokona', 1, '2021-11-30 05:10:15', '2021-11-30 05:10:15'),
(47, 'Sherpur', 1, '2021-11-30 05:10:30', '2021-11-30 05:10:30'),
(48, 'Bogura', 1, '2021-11-30 05:10:54', '2021-11-30 05:10:54'),
(49, 'C. nawabganj', 1, '2021-11-30 05:11:12', '2021-11-30 05:11:12'),
(50, 'Joypurhat', 1, '2021-11-30 05:11:32', '2021-11-30 05:11:32'),
(51, 'Naogaon', 1, '2021-11-30 05:11:52', '2021-11-30 05:11:52'),
(52, 'Natore', 1, '2021-11-30 05:12:12', '2021-11-30 05:12:12'),
(53, 'Pabna', 1, '2021-11-30 05:12:36', '2021-11-30 05:12:36'),
(54, 'Rajshahi', 1, '2021-11-30 05:13:03', '2021-11-30 05:13:03'),
(55, 'Sirajganj', 1, '2021-11-30 05:13:18', '2021-11-30 05:13:18'),
(56, 'Dinajpur', 1, '2021-11-30 05:13:54', '2021-11-30 05:13:54'),
(57, 'Gaibandha', 1, '2021-11-30 05:14:20', '2021-11-30 05:14:20'),
(58, 'Kurigram', 1, '2021-11-30 05:14:47', '2021-11-30 05:14:47'),
(59, 'Lalmonirhat', 1, '2021-11-30 05:15:00', '2021-11-30 05:15:00'),
(60, 'Nilphamari', 1, '2021-11-30 05:15:16', '2021-11-30 05:15:16'),
(61, 'Panchagarh', 1, '2021-11-30 05:15:42', '2021-11-30 05:15:42'),
(62, 'Rangpur', 1, '2021-11-30 05:16:15', '2021-11-30 05:16:15'),
(63, 'Thakurgaon', 1, '2021-11-30 05:16:41', '2021-11-30 05:16:41'),
(64, 'Habiganj', 1, '2021-11-30 05:16:55', '2021-11-30 05:16:55'),
(65, 'Moulvibazar', 1, '2021-11-30 05:17:12', '2021-11-30 05:17:12'),
(66, 'Sunamganj', 1, '2021-11-30 05:17:36', '2021-11-30 05:17:36'),
(67, 'Sylhet', 1, '2021-11-30 05:17:49', '2021-11-30 05:17:49');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(13, '16373388680.jpg', NULL, '2021-11-19 22:21:08', '2021-11-19 22:21:08'),
(14, '16373388900.jpg', NULL, '2021-11-19 22:21:30', '2021-11-19 22:21:30'),
(16, '16373390540.jpg', NULL, '2021-11-19 22:24:14', '2021-11-19 22:24:14'),
(17, '16373390541.jpg', NULL, '2021-11-19 22:24:14', '2021-11-19 22:24:14');

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
(5, '2021_09_02_044447_create_categories_table', 1),
(6, '2021_09_02_044656_create_brands_table', 1),
(7, '2021_09_02_044732_create_variations_table', 1),
(8, '2021_09_02_044751_create_options_table', 1),
(9, '2021_09_02_044817_create_products_table', 1),
(10, '2021_09_02_044851_create_order_statuses_table', 1),
(11, '2021_09_02_044914_create_orders_table', 1),
(12, '2021_09_02_044940_create_order_products_table', 1),
(14, '2021_09_02_051208_create_wishlists_table', 1),
(15, '2021_09_02_051557_create_wallets_table', 1),
(16, '2021_09_02_051617_create_wallet_entries_table', 1),
(17, '2021_09_02_051658_create_pages_table', 1),
(18, '2021_09_02_051950_create_settings_table', 1),
(19, '2021_09_02_061946_create_product_variations_table', 1),
(20, '2021_09_06_100447_create_product_images_table', 2),
(21, '2021_09_13_064102_create_coupons_table', 3),
(22, '2021_09_15_090230_create_sliders_table', 4),
(23, '2021_09_20_101516_create_subscribers_table', 5),
(24, '2021_09_26_064736_create_galleries_table', 6),
(25, '2021_10_25_121017_create_districts_table', 7),
(26, '2021_10_25_121041_create_areas_table', 7),
(27, '2021_10_26_092554_create_registration_points_table', 7),
(28, '2021_10_26_115910_create_seller_requests_table', 7),
(29, '2021_11_01_050431_create_payments_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `variation_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `district_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `shipping_address` text DEFAULT NULL,
  `delivery_boy_id` int(11) DEFAULT NULL,
  `delivery_charge` double DEFAULT NULL,
  `vat` double DEFAULT NULL,
  `order_status_id` int(11) NOT NULL DEFAULT 1,
  `payment_status` varchar(255) NOT NULL DEFAULT '0',
  `payment_method` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `sender_phone` varchar(255) DEFAULT NULL,
  `sender_amount` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `referral_id` int(11) DEFAULT NULL,
  `referral_amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `customer_id`, `price`, `name`, `email`, `phone`, `city`, `district_id`, `area_id`, `shipping_address`, `delivery_boy_id`, `delivery_charge`, `vat`, `order_status_id`, `payment_status`, `payment_method`, `transaction_id`, `sender_phone`, `sender_amount`, `note`, `referral_id`, `referral_amount`, `created_at`, `updated_at`) VALUES
(17, '22-454687', NULL, 2970, 'Ridoy Paul', 'cse.ridoypaul@gmail.com', '+8801627382866', NULL, 21, 3, 'Shah Ali plaza', NULL, NULL, NULL, 1, '0', 'Cash on Delivery', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-10 10:21:29', '2022-09-10 10:21:29'),
(18, '22-314212', NULL, 0, 'Ridoy Paul', 'cse.ridoypaul@gmail.com', '+8801627382866', NULL, 21, 3, 'Shah Ali plaza', NULL, NULL, NULL, 1, '0', 'Cash on Delivery', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-10 10:26:02', '2022-09-10 10:26:02'),
(19, '22-367233', NULL, 829, 'Ridoy Paul', 'cse.ridoypaul@gmail.com', '+8801627382866', NULL, 21, 3, 'Shah Ali plaza', NULL, NULL, NULL, 1, '0', 'Cash on Delivery', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-10 10:26:46', '2022-09-10 10:26:46'),
(20, '22-219249', 15, 3569, 'Ridoy Paul', 'ridoypaul2580@gmail.com', '+8801627382866', NULL, 21, 3, 'Shah ali plaza', NULL, NULL, NULL, 1, '0', 'Cash on Delivery', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-10 10:29:04', '2022-09-10 10:29:04'),
(21, '22-215705', NULL, 2720, 'Ridoy Paul', 'taafarabi@gmail.com', '01627382866', NULL, 21, 3, 'MIRPUR 10', NULL, NULL, NULL, 3, '1', 'Cash on Delivery', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-28 23:42:00', '2022-09-28 23:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `variation` text DEFAULT NULL,
  `qty` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `price`, `variation`, `qty`, `created_at`, `updated_at`) VALUES
(24, 11, 23, 1350, NULL, 1, '2021-11-18 23:20:07', '2021-11-18 23:20:07'),
(25, 12, 133, 750, NULL, 1, '2021-11-25 00:52:52', '2021-11-25 00:52:52'),
(26, 12, 134, 1350, NULL, 1, '2021-11-25 00:52:52', '2021-11-25 00:52:52'),
(27, 13, 23, 1350, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(28, 13, 25, 2610, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(29, 13, 27, 716, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(30, 13, 29, 810, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(31, 13, 26, 3915, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(32, 13, 28, 6525, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(33, 13, 30, 270, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(34, 13, 151, 300, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(35, 13, 177, 315, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(36, 13, 94, 2475, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(37, 13, 249, 680, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(38, 13, 226, 207, NULL, 1, '2021-11-25 03:43:37', '2021-11-25 03:43:37'),
(39, 14, 174, 162, NULL, 1, '2021-11-26 11:15:03', '2021-11-26 11:15:03'),
(40, 14, 73, 2700, NULL, 1, '2021-11-26 11:15:03', '2021-11-26 11:15:03'),
(41, 15, 34, 1950, NULL, 1, '2021-11-27 03:47:23', '2021-11-27 03:47:23'),
(42, 16, 25, 2610, NULL, 1, '2021-11-29 23:08:36', '2021-11-29 23:08:36'),
(43, 16, 26, 3915, NULL, 1, '2021-11-29 23:08:36', '2021-11-29 23:08:36'),
(44, 17, 333, 120, NULL, 1, '2022-09-10 10:21:29', '2022-09-10 10:21:29'),
(45, 17, 331, 2500, NULL, 1, '2022-09-10 10:21:29', '2022-09-10 10:21:29'),
(46, 17, 329, 350, NULL, 1, '2022-09-10 10:21:29', '2022-09-10 10:21:29'),
(47, 19, 328, 100, NULL, 1, '2022-09-10 10:26:46', '2022-09-10 10:26:46'),
(48, 19, 330, 230, NULL, 1, '2022-09-10 10:26:46', '2022-09-10 10:26:46'),
(49, 19, 332, 499, NULL, 1, '2022-09-10 10:26:46', '2022-09-10 10:26:46'),
(50, 20, 328, 100, NULL, 1, '2022-09-10 10:29:04', '2022-09-10 10:29:04'),
(51, 20, 332, 499, NULL, 1, '2022-09-10 10:29:05', '2022-09-10 10:29:05'),
(52, 20, 329, 350, NULL, 1, '2022-09-10 10:29:05', '2022-09-10 10:29:05'),
(53, 20, 331, 2500, NULL, 1, '2022-09-10 10:29:05', '2022-09-10 10:29:05'),
(54, 20, 333, 120, NULL, 1, '2022-09-10 10:29:06', '2022-09-10 10:29:06'),
(55, 21, 331, 2500, NULL, 1, '2022-09-28 23:42:00', '2022-09-28 23:42:00'),
(56, 21, 333, 120, NULL, 1, '2022-09-28 23:42:00', '2022-09-28 23:42:00'),
(57, 21, 328, 100, NULL, 1, '2022-09-28 23:42:00', '2022-09-28 23:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `title`, `color`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Pending', 'warning', 1, '2021-09-15 08:52:10', '2021-09-15 08:52:10'),
(2, 'Accepted', 'secondary', 1, '2021-09-15 08:52:10', '2021-09-15 08:52:10'),
(3, 'In Progress', 'secondary', 1, '2021-09-15 08:52:10', '2021-09-15 08:52:10'),
(4, 'Completed', 'success', 1, '2021-09-15 08:52:10', '2021-09-15 08:52:10'),
(5, 'Canceled', 'danger', 1, '2021-09-15 08:52:10', '2021-09-15 08:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `description1` text DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `description3` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `new_arrival` varchar(255) DEFAULT NULL,
  `product_banner` varchar(255) DEFAULT NULL,
  `advertisement` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `description1`, `description2`, `description3`, `image`, `new_arrival`, `product_banner`, `advertisement`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, NULL, NULL, NULL, NULL, 'new_arrival1637408674.jpg', 'product_banner1662813167.png', 'advertisement1631703425.png', '2021-09-15 10:14:23', '2022-09-10 06:32:47'),
(2, 'All Products', NULL, NULL, NULL, NULL, '1662806327.jpg', NULL, NULL, NULL, '2021-09-15 10:15:24', '2022-09-10 04:38:47'),
(3, 'All Category', NULL, NULL, NULL, NULL, '1631706986.png', NULL, NULL, NULL, '2021-09-15 10:15:24', '2021-09-15 05:56:27'),
(4, 'About Us', '<p style=\"text-align: justify;\">We are providing the original product directly from producers. Our specialties right now are the top-notch premium quality dates of Saudi Arabia. More products from various <span style=\"font-family: tahoma, arial, helvetica, sans-serif;\">countries</span> are coming soon. The ultimate customer satisfaction is our main goal. Thanks for being with ZamZam Trading BD.<br />Saudi Arab is the first world country of number of areas and factories that produce dates, all in one country. There are more than great oases and several minor ones, in addition to (130) factories of dates. This characteristic makes Saudi Arab is the first duration for ones who know value of the healthy dates and blessings in land of the two venerable sanctuaries. Varieties of dates good value brings a real pleasure for who want to get blessings, quality and flavors of dates in different areas and oases.</p>', '<p>Customer satisfaction is our ultimate goal, our team is dedicated to help you. We guarantee the highest quality products and customer service. We take great care in responding to your individual requests. If you face any problems with our products and shipping options or we don&rsquo;t meet your expectation please inform us. We will work hard to resolve any issues as soon as possible.</p>', '<p style=\"box-sizing: inherit; margin: 0px 0px 2rem; font-weight: 400; font-size: 14px; line-height: 1.86; transition: all 0s ease 0s !important; color: #666666; font-family: Poppins, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Customer satisfaction is our ultimate goal, our team is dedicated to help you. We guarantee the highest quality products and customer service. We take great care in responding to your individual requests. If you face any problems with our products and shipping options or we don&rsquo;t meet your expectation please inform us. We will work hard to resolve any issues as soon as possible.</p>', NULL, '1662805997.jpg', NULL, 'product_banner1662806128.png', NULL, '2021-09-26 05:07:24', '2022-09-10 04:35:28'),
(5, 'Privacy Policy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 11:02:06', '2021-09-27 05:31:46'),
(6, 'Term and Conditions', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-27 11:02:06', '2021-09-27 05:33:22'),
(7, 'Offer Products', NULL, NULL, NULL, NULL, '1631706673.png', NULL, NULL, NULL, '2021-11-03 05:37:13', '2021-11-03 05:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sadeknurul5@gmail.com', '$2y$10$Hf9OPBOaNBzS7kT39EImFuKWOJtUrrX87teHGSEySjB4nyvSkJhP2', '2021-10-25 04:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `request_amount` double DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `is_paid` int(11) NOT NULL DEFAULT 0,
  `is_reject` int(11) NOT NULL DEFAULT 0,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  `discount_price` double DEFAULT NULL,
  `is_sale` int(11) NOT NULL DEFAULT 0,
  `code` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `weight` double NOT NULL DEFAULT 0,
  `type` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `variations` text DEFAULT NULL,
  `choice_options` text DEFAULT NULL,
  `current_stock` int(11) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `sold` int(100) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `brand_id`, `category_id`, `sub_category_id`, `price`, `discount_price`, `is_sale`, `code`, `unit`, `weight`, `type`, `qty`, `image`, `variations`, `choice_options`, `current_stock`, `description`, `is_active`, `sold`, `created_at`, `updated_at`) VALUES
(325, 'Olevs Men Watch', NULL, 5, NULL, 500, NULL, 0, '883D4SA', 'Piece', 50, 'single', 50, '1662810422.jpg', NULL, NULL, 0, '<p>The&nbsp;<em>Western world or the West</em>&nbsp;is a term referring to different nations, depending on the context, most often including at least part of Europe. There are many accepted definitions about what they all have in common. &nbsp;The Western world is also known as the Occident (from Latin: occidens &ldquo;sunset, West&rdquo;, as contrasted with its pendant the Orient).&nbsp; The term originally had a literal geographic meaning.</p>', 1, 0, '2022-09-10 05:38:11', '2022-09-10 05:47:02'),
(326, 'Flower Fashion Handbag', NULL, 8, NULL, 3500, 3000, 1, '883D', 'Piece', 100, 'single', 100, '1662810294.png', NULL, NULL, 0, '<ul class=\"list-group list-group-flush\">\r\n<li class=\"list-group-item\">Cash On Delivery</li>\r\n<li class=\"list-group-item\">15 Day\'s Quick Money Return</li>\r\n<li class=\"list-group-item\">100% Authentic</li>\r\n<li class=\"list-group-item\">Home Delivery Within 3 Day\'s</li>\r\n</ul>', 1, 0, '2022-09-10 05:44:54', '2022-09-10 05:47:30'),
(327, 'Men Watch Black', NULL, 5, NULL, 1500, 1200, 1, '4434', 'Piece', 1, 'single', 500, '1662810717.jpg', NULL, NULL, 0, '<ul class=\"list-group list-group-flush\">\r\n<li class=\"list-group-item\">Cash On Delivery</li>\r\n<li class=\"list-group-item\">15 Day\'s Quick Money Return</li>\r\n<li class=\"list-group-item\">100% Authentic</li>\r\n<li class=\"list-group-item\">Home Delivery Within 3 Day\'s</li>\r\n</ul>', 1, 0, '2022-09-10 05:51:57', '2022-09-10 05:51:57'),
(328, 'Kazi Tea Family Pack', NULL, 6, NULL, 100, NULL, 0, '66DE', 'gm', 20, 'single', 10, '1662811009.jpg', NULL, NULL, 0, '<ul class=\"list-group list-group-flush\">\r\n<li class=\"list-group-item\">Cash On Delivery</li>\r\n<li class=\"list-group-item\">15 Day\'s Quick Money Return</li>\r\n<li class=\"list-group-item\">100% Authentic</li>\r\n<li class=\"list-group-item\">Home Delivery Within 3 Day\'s</li>\r\n</ul>', 1, 0, '2022-09-10 05:56:49', '2022-09-10 05:56:49'),
(329, 'নেসক্যাফে ইনস্ট্যান্ট কফি', NULL, 6, NULL, 350, NULL, 0, '8890', 'gm', 10, 'single', 100, '1662811147.png', NULL, NULL, 0, '<ul class=\"list-group list-group-flush\">\r\n<li class=\"list-group-item\">Cash On Delivery</li>\r\n<li class=\"list-group-item\">15 Day\'s Quick Money Return</li>\r\n<li class=\"list-group-item\">100% Authentic</li>\r\n<li class=\"list-group-item\">Home Delivery Within 3 Day\'s</li>\r\n</ul>', 1, 0, '2022-09-10 05:59:07', '2022-09-10 05:59:07'),
(330, 'Bengal Classic Tea', NULL, 6, NULL, 230, NULL, 0, '5543', 'gm', 50, 'single', NULL, '1662811292.jpg', NULL, NULL, 0, '<ul class=\"list-group list-group-flush\">\r\n<li class=\"list-group-item\">Cash On Delivery</li>\r\n<li class=\"list-group-item\">15 Day\'s Quick Money Return</li>\r\n<li class=\"list-group-item\">100% Authentic</li>\r\n<li class=\"list-group-item\">Home Delivery Within 3 Day\'s</li>\r\n</ul>', 1, 0, '2022-09-10 06:01:32', '2022-09-10 06:01:32'),
(331, 'LOREN BABY BOOTIES', NULL, 6, NULL, 3400, 2500, 1, '9908', 'Pair', 1, 'single', 100, '1662811563.png', NULL, NULL, 0, '<ul class=\"list-group list-group-flush\">\r\n<li class=\"list-group-item\">Cash On Delivery</li>\r\n<li class=\"list-group-item\">15 Day\'s Quick Money Return</li>\r\n<li class=\"list-group-item\">100% Authentic</li>\r\n<li class=\"list-group-item\">Home Delivery Within 3 Day\'s</li>\r\n</ul>', 1, 0, '2022-09-10 06:06:03', '2022-09-10 06:06:03'),
(332, 'Premium polo t-shirt.', NULL, 6, NULL, 550, 499, 1, '9908', 'Piece', 1, 'single', 100, '1662811836.png', NULL, NULL, 0, '<ul class=\"list-group list-group-flush\">\r\n<li class=\"list-group-item\">Cash On Delivery</li>\r\n<li class=\"list-group-item\">15 Day\'s Quick Money Return</li>\r\n<li class=\"list-group-item\">100% Authentic</li>\r\n<li class=\"list-group-item\">Home Delivery Within 3 Day\'s</li>\r\n</ul>', 1, 0, '2022-09-10 06:10:36', '2022-09-10 06:10:36'),
(333, 'Baby Blanket Summer', NULL, 6, NULL, 120, NULL, 0, '1121', 'Piece', 1, 'single', NULL, '1662811978.png', NULL, NULL, 0, '<ul class=\"list-group list-group-flush\">\r\n<li class=\"list-group-item\">Cash On Delivery</li>\r\n<li class=\"list-group-item\">15 Day\'s Quick Money Return</li>\r\n<li class=\"list-group-item\">100% Authentic</li>\r\n<li class=\"list-group-item\">Home Delivery Within 3 Day\'s</li>\r\n</ul>', 1, 0, '2022-09-10 06:12:58', '2022-09-10 06:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(22, 7, '16352268350.jpg', '2021-10-26 10:40:35', '2021-10-26 10:40:35'),
(23, 8, '16352270590.jpg', '2021-10-26 10:44:19', '2021-10-26 10:44:19'),
(26, 11, '16352274970.jpg', '2021-10-26 10:51:37', '2021-10-26 10:51:37'),
(27, 12, '16352276360.jpg', '2021-10-26 10:53:56', '2021-10-26 10:53:56'),
(28, 13, '16352277420.jpg', '2021-10-26 10:55:42', '2021-10-26 10:55:42'),
(29, 14, '16352278940.png', '2021-10-26 10:58:14', '2021-10-26 10:58:14'),
(30, 15, '16352280400.jpg', '2021-10-26 11:00:40', '2021-10-26 11:00:40'),
(31, 16, '16352281410.jpg', '2021-10-26 11:02:21', '2021-10-26 11:02:21'),
(32, 17, '16352283080.jpg', '2021-10-26 11:05:08', '2021-10-26 11:05:08'),
(33, 18, '16352286550.jpg', '2021-10-26 11:10:55', '2021-10-26 11:10:55'),
(34, 19, '16352287320.jpg', '2021-10-26 11:12:12', '2021-10-26 11:12:12'),
(38, 23, '16352294220.jpg', '2021-10-26 11:23:42', '2021-10-26 11:23:42'),
(39, 24, '16352295470.jpg', '2021-10-26 11:25:47', '2021-10-26 11:25:47'),
(40, 25, '16352296370.jpg', '2021-10-26 11:27:17', '2021-10-26 11:27:17'),
(41, 26, '16352297390.jpg', '2021-10-26 11:28:59', '2021-10-26 11:28:59'),
(42, 27, '16352298990.jpg', '2021-10-26 11:31:39', '2021-10-26 11:31:39'),
(44, 29, '16352303130.jpg', '2021-10-26 11:38:33', '2021-10-26 11:38:33'),
(45, 30, '16352304090.jpg', '2021-10-26 11:40:09', '2021-10-26 11:40:09'),
(46, 31, '16352304940.jpg', '2021-10-26 11:41:34', '2021-10-26 11:41:34'),
(47, 32, '16352305780.jpg', '2021-10-26 11:42:58', '2021-10-26 11:42:58'),
(48, 33, '16352306760.jpg', '2021-10-26 11:44:36', '2021-10-26 11:44:36'),
(49, 34, '16352307500.jpg', '2021-10-26 11:45:50', '2021-10-26 11:45:50'),
(50, 35, '16352310440.jpg', '2021-10-26 11:50:44', '2021-10-26 11:50:44'),
(51, 36, '16352311440.jpg', '2021-10-26 11:52:24', '2021-10-26 11:52:24'),
(52, 37, '16352312330.jpg', '2021-10-26 11:53:53', '2021-10-26 11:53:53'),
(53, 38, '16352313100.jpg', '2021-10-26 11:55:10', '2021-10-26 11:55:10'),
(54, 39, '16352314010.jpg', '2021-10-26 11:56:41', '2021-10-26 11:56:41'),
(55, 40, '16352314670.jpg', '2021-10-26 11:57:47', '2021-10-26 11:57:47'),
(56, 41, '16352316020.jpg', '2021-10-26 12:00:02', '2021-10-26 12:00:02'),
(57, 42, '16352316840.jpg', '2021-10-26 12:01:24', '2021-10-26 12:01:24'),
(58, 43, '16352317540.jpg', '2021-10-26 12:02:34', '2021-10-26 12:02:34'),
(59, 44, '16352318300.jpg', '2021-10-26 12:03:50', '2021-10-26 12:03:50'),
(60, 45, '16352318990.jpg', '2021-10-26 12:04:59', '2021-10-26 12:04:59'),
(64, 46, '16353176470.png', '2021-10-27 11:54:07', '2021-10-27 11:54:07'),
(65, 47, '16353193950.jpg', '2021-10-27 12:23:15', '2021-10-27 12:23:15'),
(66, 48, '16353196920.jpg', '2021-10-27 12:28:12', '2021-10-27 12:28:12'),
(67, 49, '16353198100.jpg', '2021-10-27 12:30:10', '2021-10-27 12:30:10'),
(68, 50, '16353199340.jpg', '2021-10-27 12:32:14', '2021-10-27 12:32:14'),
(69, 51, '16353200330.jpg', '2021-10-27 12:33:53', '2021-10-27 12:33:53'),
(70, 52, '16353201250.jpg', '2021-10-27 12:35:25', '2021-10-27 12:35:25'),
(71, 53, '16353201970.jpg', '2021-10-27 12:36:37', '2021-10-27 12:36:37'),
(72, 54, '16353203240.jpg', '2021-10-27 12:38:44', '2021-10-27 12:38:44'),
(73, 55, '16353204070.jpg', '2021-10-27 12:40:07', '2021-10-27 12:40:07'),
(74, 56, '16353204950.jpg', '2021-10-27 12:41:35', '2021-10-27 12:41:35'),
(75, 57, '16353206540.jpg', '2021-10-27 12:44:15', '2021-10-27 12:44:15'),
(76, 58, '16353207370.jpg', '2021-10-27 12:45:38', '2021-10-27 12:45:38'),
(77, 59, '16353208340.jpg', '2021-10-27 12:47:14', '2021-10-27 12:47:14'),
(78, 60, '16353209370.jpg', '2021-10-27 12:48:57', '2021-10-27 12:48:57'),
(79, 61, '16353210270.jpg', '2021-10-27 12:50:27', '2021-10-27 12:50:27'),
(80, 62, '16353211040.jpg', '2021-10-27 12:51:44', '2021-10-27 12:51:44'),
(81, 63, '16353211840.jpg', '2021-10-27 12:53:04', '2021-10-27 12:53:04'),
(82, 64, '16353212570.jpg', '2021-10-27 12:54:17', '2021-10-27 12:54:17'),
(83, 65, '16353213200.jpg', '2021-10-27 12:55:20', '2021-10-27 12:55:20'),
(84, 66, '16354063020.jpg', '2021-10-28 12:31:42', '2021-10-28 12:31:42'),
(85, 67, '16354063570.jpg', '2021-10-28 12:32:38', '2021-10-28 12:32:38'),
(86, 68, '16354064430.jpg', '2021-10-28 12:34:03', '2021-10-28 12:34:03'),
(87, 69, '16354065230.jpg', '2021-10-28 12:35:23', '2021-10-28 12:35:23'),
(88, 70, '16354067370.jpg', '2021-10-28 12:38:57', '2021-10-28 12:38:57'),
(89, 71, '16354068000.jpg', '2021-10-28 12:40:00', '2021-10-28 12:40:00'),
(90, 72, '16354068900.jpg', '2021-10-28 12:41:30', '2021-10-28 12:41:30'),
(91, 73, '16354069660.jpg', '2021-10-28 12:42:46', '2021-10-28 12:42:46'),
(92, 74, '16354070690.jpg', '2021-10-28 12:44:29', '2021-10-28 12:44:29'),
(93, 75, '16354072500.jpg', '2021-10-28 12:47:30', '2021-10-28 12:47:30'),
(94, 76, '16354073400.jpg', '2021-10-28 12:49:00', '2021-10-28 12:49:00'),
(95, 77, '16354074100.jpg', '2021-10-28 12:50:10', '2021-10-28 12:50:10'),
(96, 78, '16354075960.jpg', '2021-10-28 12:53:16', '2021-10-28 12:53:16'),
(97, 79, '16354076740.jpg', '2021-10-28 12:54:34', '2021-10-28 12:54:34'),
(98, 80, '16354077730.jpg', '2021-10-28 12:56:14', '2021-10-28 12:56:14'),
(99, 81, '16354078570.jpg', '2021-10-28 12:57:37', '2021-10-28 12:57:37'),
(100, 82, '16354079320.jpg', '2021-10-28 12:58:53', '2021-10-28 12:58:53'),
(101, 83, '16354079930.jpg', '2021-10-28 12:59:53', '2021-10-28 12:59:53'),
(110, 90, '16354101590.png', '2021-10-28 13:35:59', '2021-10-28 13:35:59'),
(111, 89, '16354104020.png', '2021-10-28 13:40:02', '2021-10-28 13:40:02'),
(112, 88, '16354104280.png', '2021-10-28 13:40:28', '2021-10-28 13:40:28'),
(113, 87, '16354104460.png', '2021-10-28 13:40:46', '2021-10-28 13:40:46'),
(114, 86, '16354104700.png', '2021-10-28 13:41:10', '2021-10-28 13:41:10'),
(115, 85, '16354104910.png', '2021-10-28 13:41:31', '2021-10-28 13:41:31'),
(116, 84, '16354105120.png', '2021-10-28 13:41:52', '2021-10-28 13:41:52'),
(117, 91, '16354107230.png', '2021-10-28 13:45:23', '2021-10-28 13:45:23'),
(118, 92, '16354108010.png', '2021-10-28 13:46:42', '2021-10-28 13:46:42'),
(119, 93, '16354108680.png', '2021-10-28 13:47:48', '2021-10-28 13:47:48'),
(120, 94, '16354109360.png', '2021-10-28 13:48:57', '2021-10-28 13:48:57'),
(121, 95, '16355896870.jpg', '2021-10-30 15:28:08', '2021-10-30 15:28:08'),
(122, 96, '16355899470.jpg', '2021-10-30 15:32:27', '2021-10-30 15:32:27'),
(123, 97, '16355900630.jpg', '2021-10-30 15:34:23', '2021-10-30 15:34:23'),
(124, 98, '16355902090.jpg', '2021-10-30 15:36:49', '2021-10-30 15:36:49'),
(125, 99, '16355903800.jpg', '2021-10-30 15:39:40', '2021-10-30 15:39:40'),
(126, 100, '16355904600.jpg', '2021-10-30 15:41:01', '2021-10-30 15:41:01'),
(127, 101, '16355906250.jpg', '2021-10-30 15:43:45', '2021-10-30 15:43:45'),
(129, 102, '16355927260.png', '2021-10-30 16:18:46', '2021-10-30 16:18:46'),
(130, 103, '16355928330.png', '2021-10-30 16:20:33', '2021-10-30 16:20:33'),
(131, 104, '16355929060.png', '2021-10-30 16:21:46', '2021-10-30 16:21:46'),
(132, 105, '16355929650.png', '2021-10-30 16:22:45', '2021-10-30 16:22:45'),
(135, 106, '16355936140.png', '2021-10-30 16:33:34', '2021-10-30 16:33:34'),
(136, 107, '16355936990.png', '2021-10-30 16:34:59', '2021-10-30 16:34:59'),
(137, 108, '16355937740.png', '2021-10-30 16:36:14', '2021-10-30 16:36:14'),
(138, 109, '16355938510.png', '2021-10-30 16:37:31', '2021-10-30 16:37:31'),
(139, 110, '16355939160.png', '2021-10-30 16:38:36', '2021-10-30 16:38:36'),
(140, 111, '16355942030.png', '2021-10-30 16:43:23', '2021-10-30 16:43:23'),
(141, 112, '16355942720.png', '2021-10-30 16:44:32', '2021-10-30 16:44:32'),
(142, 113, '16355943450.png', '2021-10-30 16:45:45', '2021-10-30 16:45:45'),
(143, 114, '16355944120.png', '2021-10-30 16:46:52', '2021-10-30 16:46:52'),
(144, 115, '16355945270.png', '2021-10-30 16:48:48', '2021-10-30 16:48:48'),
(145, 116, '16355947010.png', '2021-10-30 16:51:41', '2021-10-30 16:51:41'),
(146, 117, '16355948330.png', '2021-10-30 16:53:53', '2021-10-30 16:53:53'),
(147, 118, '16355949570.png', '2021-10-30 16:55:58', '2021-10-30 16:55:58'),
(148, 119, '16355950350.png', '2021-10-30 16:57:15', '2021-10-30 16:57:15'),
(149, 120, '16355951390.png', '2021-10-30 16:58:59', '2021-10-30 16:58:59'),
(150, 121, '16355952320.png', '2021-10-30 17:00:32', '2021-10-30 17:00:32'),
(151, 122, '16355954350.png', '2021-10-30 17:03:55', '2021-10-30 17:03:55'),
(153, 124, '16355955710.png', '2021-10-30 17:06:11', '2021-10-30 17:06:11'),
(154, 125, '16355956390.png', '2021-10-30 17:07:19', '2021-10-30 17:07:19'),
(155, 126, '16355957140.png', '2021-10-30 17:08:34', '2021-10-30 17:08:34'),
(156, 127, '16355958060.png', '2021-10-30 17:10:06', '2021-10-30 17:10:06'),
(162, 130, '16355964130.png', '2021-10-30 17:20:13', '2021-10-30 17:20:13'),
(163, 129, '16355964320.png', '2021-10-30 17:20:32', '2021-10-30 17:20:32'),
(164, 128, '16355964510.png', '2021-10-30 17:20:51', '2021-10-30 17:20:51'),
(165, 131, '16355966050.png', '2021-10-30 17:23:25', '2021-10-30 17:23:25'),
(166, 132, '16355974370.png', '2021-10-30 17:37:17', '2021-10-30 17:37:17'),
(167, 133, '16355984250.png', '2021-10-30 17:53:45', '2021-10-30 17:53:45'),
(168, 134, '16356623520.png', '2021-10-31 11:39:12', '2021-10-31 11:39:12'),
(169, 135, '16356626630.png', '2021-10-31 11:44:23', '2021-10-31 11:44:23'),
(170, 136, '16356628910.png', '2021-10-31 11:48:12', '2021-10-31 11:48:12'),
(171, 137, '16356631070.png', '2021-10-31 11:51:47', '2021-10-31 11:51:47'),
(172, 138, '16356632490.png', '2021-10-31 11:54:09', '2021-10-31 11:54:09'),
(173, 139, '16356633950.png', '2021-10-31 11:56:35', '2021-10-31 11:56:35'),
(174, 140, '16356635390.png', '2021-10-31 11:58:59', '2021-10-31 11:58:59'),
(175, 141, '16356636780.png', '2021-10-31 12:01:18', '2021-10-31 12:01:18'),
(176, 142, '16356637490.png', '2021-10-31 12:02:29', '2021-10-31 12:02:29'),
(177, 143, '16356653660.png', '2021-10-31 12:29:26', '2021-10-31 12:29:26'),
(178, 144, '16356654350.png', '2021-10-31 12:30:35', '2021-10-31 12:30:35'),
(179, 145, '16356655720.png', '2021-10-31 12:32:52', '2021-10-31 12:32:52'),
(180, 146, '16356656340.png', '2021-10-31 12:33:54', '2021-10-31 12:33:54'),
(181, 147, '16356656790.png', '2021-10-31 12:34:39', '2021-10-31 12:34:39'),
(185, 148, '16356660080.jpg', '2021-10-31 12:40:08', '2021-10-31 12:40:08'),
(186, 149, '16356695350.png', '2021-10-31 13:38:55', '2021-10-31 13:38:55'),
(187, 150, '16356696140.png', '2021-10-31 13:40:14', '2021-10-31 13:40:14'),
(188, 151, '16356698300.png', '2021-10-31 13:43:50', '2021-10-31 13:43:50'),
(189, 152, '16356698910.png', '2021-10-31 13:44:51', '2021-10-31 13:44:51'),
(190, 153, '16356721000.png', '2021-10-31 14:21:40', '2021-10-31 14:21:40'),
(191, 154, '16356723930.png', '2021-10-31 14:26:33', '2021-10-31 14:26:33'),
(192, 155, '16356726060.png', '2021-10-31 14:30:06', '2021-10-31 14:30:06'),
(193, 156, '16356727260.png', '2021-10-31 14:32:06', '2021-10-31 14:32:06'),
(194, 157, '16356727760.png', '2021-10-31 14:32:56', '2021-10-31 14:32:56'),
(195, 158, '16356729670.png', '2021-10-31 14:36:07', '2021-10-31 14:36:07'),
(196, 159, '16356730300.png', '2021-10-31 14:37:10', '2021-10-31 14:37:10'),
(197, 160, '16356731680.png', '2021-10-31 14:39:28', '2021-10-31 14:39:28'),
(198, 161, '16356732490.png', '2021-10-31 14:40:49', '2021-10-31 14:40:49'),
(199, 162, '16356733850.png', '2021-10-31 14:43:05', '2021-10-31 14:43:05'),
(200, 163, '16356734390.png', '2021-10-31 14:43:59', '2021-10-31 14:43:59'),
(201, 164, '16356756760.jpg', '2021-10-31 15:21:16', '2021-10-31 15:21:16'),
(202, 165, '16356757990.jpg', '2021-10-31 15:23:19', '2021-10-31 15:23:19'),
(203, 166, '16356758500.jpg', '2021-10-31 15:24:10', '2021-10-31 15:24:10'),
(204, 167, '16356759180.jpg', '2021-10-31 15:25:18', '2021-10-31 15:25:18'),
(205, 168, '16356760580.jpg', '2021-10-31 15:27:38', '2021-10-31 15:27:38'),
(206, 169, '16356761640.jpg', '2021-10-31 15:29:24', '2021-10-31 15:29:24'),
(207, 170, '16356762290.jpg', '2021-10-31 15:30:29', '2021-10-31 15:30:29'),
(208, 171, '16356762670.jpg', '2021-10-31 15:31:07', '2021-10-31 15:31:07'),
(209, 172, '16356763670.jpg', '2021-10-31 15:32:47', '2021-10-31 15:32:47'),
(210, 173, '16356764260.jpg', '2021-10-31 15:33:46', '2021-10-31 15:33:46'),
(211, 174, '16356764820.jpg', '2021-10-31 15:34:42', '2021-10-31 15:34:42'),
(212, 175, '16356765370.jpg', '2021-10-31 15:35:37', '2021-10-31 15:35:37'),
(213, 176, '16356766730.jpg', '2021-10-31 15:37:53', '2021-10-31 15:37:53'),
(214, 177, '16356767930.jpg', '2021-10-31 15:39:53', '2021-10-31 15:39:53'),
(215, 178, '16356768300.jpg', '2021-10-31 15:40:30', '2021-10-31 15:40:30'),
(216, 179, '16356769040.jpg', '2021-10-31 15:41:44', '2021-10-31 15:41:44'),
(217, 180, '16356770580.jpg', '2021-10-31 15:44:18', '2021-10-31 15:44:18'),
(218, 181, '16356771080.jpg', '2021-10-31 15:45:08', '2021-10-31 15:45:08'),
(219, 182, '16356771530.jpg', '2021-10-31 15:45:53', '2021-10-31 15:45:53'),
(220, 183, '16356772060.jpg', '2021-10-31 15:46:46', '2021-10-31 15:46:46'),
(223, 184, '16356788930.png', '2021-10-31 16:14:53', '2021-10-31 16:14:53'),
(224, 185, '16356789560.png', '2021-10-31 16:15:56', '2021-10-31 16:15:56'),
(225, 186, '16356791280.png', '2021-10-31 16:18:48', '2021-10-31 16:18:48'),
(226, 187, '16356792480.png', '2021-10-31 16:20:48', '2021-10-31 16:20:48'),
(227, 188, '16356801040.jpg', '2021-10-31 16:35:04', '2021-10-31 16:35:04'),
(228, 189, '16356801790.jpg', '2021-10-31 16:36:19', '2021-10-31 16:36:19'),
(229, 190, '16356802400.jpg', '2021-10-31 16:37:20', '2021-10-31 16:37:20'),
(230, 191, '16356802940.jpg', '2021-10-31 16:38:14', '2021-10-31 16:38:14'),
(231, 192, '16356804180.jpg', '2021-10-31 16:40:18', '2021-10-31 16:40:18'),
(232, 193, '16356804760.jpg', '2021-10-31 16:41:16', '2021-10-31 16:41:16'),
(233, 194, '16356805170.jpg', '2021-10-31 16:41:57', '2021-10-31 16:41:57'),
(234, 195, '16356806510.jpg', '2021-10-31 16:44:11', '2021-10-31 16:44:11'),
(235, 196, '16356807440.jpg', '2021-10-31 16:45:44', '2021-10-31 16:45:44'),
(236, 197, '16356807890.jpg', '2021-10-31 16:46:29', '2021-10-31 16:46:29'),
(238, 198, '16356810160.png', '2021-10-31 16:50:16', '2021-10-31 16:50:16'),
(239, 199, '16356810660.png', '2021-10-31 16:51:06', '2021-10-31 16:51:06'),
(240, 200, '16356811930.png', '2021-10-31 16:53:13', '2021-10-31 16:53:13'),
(241, 201, '16356812360.png', '2021-10-31 16:53:56', '2021-10-31 16:53:56'),
(242, 202, '16356813550.jpg', '2021-10-31 16:55:55', '2021-10-31 16:55:55'),
(243, 203, '16356814450.jpg', '2021-10-31 16:57:25', '2021-10-31 16:57:25'),
(244, 204, '16356814980.jpg', '2021-10-31 16:58:18', '2021-10-31 16:58:18'),
(245, 205, '16356819470.jpg', '2021-10-31 17:05:47', '2021-10-31 17:05:47'),
(248, 206, '16356822110.jpg', '2021-10-31 17:10:11', '2021-10-31 17:10:11'),
(249, 207, '16356822370.jpg', '2021-10-31 17:10:37', '2021-10-31 17:10:37'),
(250, 208, '16356823250.jpg', '2021-10-31 17:12:05', '2021-10-31 17:12:05'),
(251, 209, '16357464280.jpg', '2021-11-01 11:00:28', '2021-11-01 11:00:28'),
(252, 210, '16357465410.jpg', '2021-11-01 11:02:21', '2021-11-01 11:02:21'),
(253, 211, '16357465890.jpg', '2021-11-01 11:03:09', '2021-11-01 11:03:09'),
(254, 212, '16357466450.jpg', '2021-11-01 11:04:05', '2021-11-01 11:04:05'),
(255, 213, '16357466930.jpg', '2021-11-01 11:04:53', '2021-11-01 11:04:53'),
(256, 214, '16357468390.jpg', '2021-11-01 11:07:19', '2021-11-01 11:07:19'),
(257, 215, '16357469020.jpg', '2021-11-01 11:08:23', '2021-11-01 11:08:23'),
(258, 216, '16357469620.jpg', '2021-11-01 11:09:22', '2021-11-01 11:09:22'),
(259, 217, '16357470730.jpg', '2021-11-01 11:11:13', '2021-11-01 11:11:13'),
(260, 218, '16357471520.jpg', '2021-11-01 11:12:32', '2021-11-01 11:12:32'),
(262, 219, '16357473120.jpg', '2021-11-01 11:15:12', '2021-11-01 11:15:12'),
(263, 220, '16357474040.jpg', '2021-11-01 11:16:44', '2021-11-01 11:16:44'),
(264, 221, '16357474760.jpg', '2021-11-01 11:17:56', '2021-11-01 11:17:56'),
(266, 223, '16357477310.jpg', '2021-11-01 11:22:11', '2021-11-01 11:22:11'),
(267, 224, '16357479240.jpg', '2021-11-01 11:25:24', '2021-11-01 11:25:24'),
(268, 225, '16357480580.jpg', '2021-11-01 11:27:38', '2021-11-01 11:27:38'),
(269, 226, '16357481680.jpg', '2021-11-01 11:29:28', '2021-11-01 11:29:28'),
(270, 227, '16357482700.jpg', '2021-11-01 11:31:10', '2021-11-01 11:31:10'),
(271, 228, '16357483280.jpg', '2021-11-01 11:32:08', '2021-11-01 11:32:08'),
(272, 229, '16357483870.jpg', '2021-11-01 11:33:07', '2021-11-01 11:33:07'),
(273, 230, '16357485050.jpg', '2021-11-01 11:35:05', '2021-11-01 11:35:05'),
(274, 231, '16357485510.jpg', '2021-11-01 11:35:51', '2021-11-01 11:35:51'),
(275, 232, '16357486310.jpg', '2021-11-01 11:37:11', '2021-11-01 11:37:11'),
(276, 233, '16357486740.jpg', '2021-11-01 11:37:54', '2021-11-01 11:37:54'),
(277, 234, '16357488130.jpg', '2021-11-01 11:40:13', '2021-11-01 11:40:13'),
(278, 235, '16357488940.jpg', '2021-11-01 11:41:34', '2021-11-01 11:41:34'),
(279, 236, '16357489510.jpg', '2021-11-01 11:42:31', '2021-11-01 11:42:31'),
(280, 237, '16357490650.jpg', '2021-11-01 11:44:25', '2021-11-01 11:44:25'),
(281, 238, '16357491210.jpg', '2021-11-01 11:45:21', '2021-11-01 11:45:21'),
(282, 239, '16357491630.jpg', '2021-11-01 11:46:03', '2021-11-01 11:46:03'),
(283, 240, '16357492690.jpg', '2021-11-01 11:47:49', '2021-11-01 11:47:49'),
(284, 241, '16357493190.jpg', '2021-11-01 11:48:39', '2021-11-01 11:48:39'),
(285, 242, '16357493590.jpg', '2021-11-01 11:49:19', '2021-11-01 11:49:19'),
(286, 243, '16357494600.jpg', '2021-11-01 11:51:00', '2021-11-01 11:51:00'),
(287, 244, '16357495070.jpg', '2021-11-01 11:51:47', '2021-11-01 11:51:47'),
(288, 245, '16357495470.jpg', '2021-11-01 11:52:27', '2021-11-01 11:52:27'),
(289, 246, '16357495870.jpg', '2021-11-01 11:53:07', '2021-11-01 11:53:07'),
(290, 247, '16357496920.jpg', '2021-11-01 11:54:52', '2021-11-01 11:54:52'),
(291, 248, '16357497330.jpg', '2021-11-01 11:55:33', '2021-11-01 11:55:33'),
(292, 249, '16357497680.jpg', '2021-11-01 11:56:08', '2021-11-01 11:56:08'),
(293, 250, '16357499550.jpg', '2021-11-01 11:59:15', '2021-11-01 11:59:15'),
(294, 251, '16357500190.jpg', '2021-11-01 12:00:19', '2021-11-01 12:00:19'),
(295, 252, '16357500560.jpg', '2021-11-01 12:00:56', '2021-11-01 12:00:56'),
(297, 253, '16357503510.jpg', '2021-11-01 12:05:51', '2021-11-01 12:05:51'),
(298, 254, '16357504270.jpg', '2021-11-01 12:07:07', '2021-11-01 12:07:07'),
(299, 255, '16357505180.jpg', '2021-11-01 12:08:38', '2021-11-01 12:08:38'),
(300, 256, '16357507250.jpg', '2021-11-01 12:12:05', '2021-11-01 12:12:05'),
(301, 257, '16357508090.jpg', '2021-11-01 12:13:29', '2021-11-01 12:13:29'),
(302, 258, '16357509060.jpg', '2021-11-01 12:15:06', '2021-11-01 12:15:06'),
(304, 259, '16357514490.png', '2021-11-01 12:24:09', '2021-11-01 12:24:09'),
(305, 260, '16357518380.png', '2021-11-01 12:30:38', '2021-11-01 12:30:38'),
(306, 261, '16357519030.png', '2021-11-01 12:31:43', '2021-11-01 12:31:43'),
(307, 262, '16357520150.jpg', '2021-11-01 12:33:35', '2021-11-01 12:33:35'),
(308, 263, '16357521290.jpg', '2021-11-01 12:35:29', '2021-11-01 12:35:29'),
(309, 264, '16357522110.jpg', '2021-11-01 12:36:51', '2021-11-01 12:36:51'),
(310, 265, '16357522540.jpg', '2021-11-01 12:37:34', '2021-11-01 12:37:34'),
(311, 266, '16357524370.jpg', '2021-11-01 12:40:37', '2021-11-01 12:40:37'),
(312, 267, '16357593780.png', '2021-11-01 14:36:18', '2021-11-01 14:36:18'),
(313, 268, '16357596870.png', '2021-11-01 14:41:27', '2021-11-01 14:41:27'),
(314, 269, '16357598520.png', '2021-11-01 14:44:12', '2021-11-01 14:44:12'),
(315, 270, '16357599290.png', '2021-11-01 14:45:29', '2021-11-01 14:45:29'),
(316, 271, '16357601200.jpg', '2021-11-01 14:48:40', '2021-11-01 14:48:40'),
(317, 272, '16357602260.jpg', '2021-11-01 14:50:26', '2021-11-01 14:50:26'),
(318, 273, '16357602760.jpg', '2021-11-01 14:51:16', '2021-11-01 14:51:16'),
(319, 274, '16357605700.jpg', '2021-11-01 14:56:10', '2021-11-01 14:56:10'),
(320, 275, '16357606740.jpg', '2021-11-01 14:57:54', '2021-11-01 14:57:54'),
(321, 276, '16357607510.jpg', '2021-11-01 14:59:11', '2021-11-01 14:59:11'),
(327, 281, '16357615410.jpg', '2021-11-01 15:12:21', '2021-11-01 15:12:21'),
(328, 280, '16357616480.png', '2021-11-01 15:14:08', '2021-11-01 15:14:08'),
(329, 279, '16357616950.png', '2021-11-01 15:14:55', '2021-11-01 15:14:55'),
(330, 278, '16357617200.png', '2021-11-01 15:15:20', '2021-11-01 15:15:20'),
(331, 277, '16357617430.png', '2021-11-01 15:15:43', '2021-11-01 15:15:43'),
(332, 282, '16357618730.jpg', '2021-11-01 15:17:53', '2021-11-01 15:17:53'),
(333, 283, '16357619300.jpg', '2021-11-01 15:18:50', '2021-11-01 15:18:50'),
(334, 284, '16357620600.png', '2021-11-01 15:21:00', '2021-11-01 15:21:00'),
(336, 285, '16357621840.png', '2021-11-01 15:23:05', '2021-11-01 15:23:05'),
(337, 286, '16357623570.png', '2021-11-01 15:25:57', '2021-11-01 15:25:57'),
(338, 287, '16357624840.jpg', '2021-11-01 15:28:04', '2021-11-01 15:28:04'),
(339, 288, '16357625680.jpg', '2021-11-01 15:29:28', '2021-11-01 15:29:28'),
(340, 289, '16357626190.jpg', '2021-11-01 15:30:19', '2021-11-01 15:30:19'),
(341, 290, '16357627540.jpg', '2021-11-01 15:32:34', '2021-11-01 15:32:34'),
(342, 291, '16357628200.jpg', '2021-11-01 15:33:41', '2021-11-01 15:33:41'),
(343, 292, '16357628620.jpg', '2021-11-01 15:34:22', '2021-11-01 15:34:22'),
(345, 293, '16357630100.png', '2021-11-01 15:36:50', '2021-11-01 15:36:50'),
(346, 294, '16357632400.png', '2021-11-01 15:40:40', '2021-11-01 15:40:40'),
(347, 295, '16357632960.png', '2021-11-01 15:41:36', '2021-11-01 15:41:36'),
(348, 296, '16357634570.png', '2021-11-01 15:44:17', '2021-11-01 15:44:17'),
(349, 297, '16357635480.png', '2021-11-01 15:45:48', '2021-11-01 15:45:48'),
(350, 298, '16357635990.png', '2021-11-01 15:46:39', '2021-11-01 15:46:39'),
(351, 299, '16362776070.png', '2021-11-07 15:33:27', '2021-11-07 15:33:27'),
(352, 300, '16362777890.png', '2021-11-07 15:36:29', '2021-11-07 15:36:29'),
(353, 301, '16362778850.png', '2021-11-07 15:38:05', '2021-11-07 15:38:05'),
(354, 302, '16362781200.jpg', '2021-11-07 15:42:00', '2021-11-07 15:42:00'),
(355, 303, '16362782150.jpg', '2021-11-07 15:43:35', '2021-11-07 15:43:35'),
(356, 304, '16362783440.jpg', '2021-11-07 15:45:44', '2021-11-07 15:45:44'),
(357, 305, '16362784870.jpg', '2021-11-07 15:48:07', '2021-11-07 15:48:07'),
(358, 306, '16362785560.jpg', '2021-11-07 15:49:16', '2021-11-07 15:49:16'),
(359, 307, '16362786310.jpg', '2021-11-07 15:50:31', '2021-11-07 15:50:31'),
(361, 308, '16362790250.png', '2021-11-07 15:57:05', '2021-11-07 15:57:05'),
(362, 309, '16362791340.png', '2021-11-07 15:58:54', '2021-11-07 15:58:54'),
(363, 310, '16362792760.jpg', '2021-11-07 16:01:16', '2021-11-07 16:01:16'),
(364, 311, '16362794010.jpg', '2021-11-07 16:03:21', '2021-11-07 16:03:21'),
(365, 312, '16362795850.jpg', '2021-11-07 16:06:25', '2021-11-07 16:06:25'),
(366, 313, '16362797160.jpg', '2021-11-07 16:08:36', '2021-11-07 16:08:36'),
(367, 314, '16362799160.jpg', '2021-11-07 16:11:56', '2021-11-07 16:11:56'),
(368, 315, '16362801560.jpg', '2021-11-07 16:15:56', '2021-11-07 16:15:56'),
(370, 316, '16362803010.jpg', '2021-11-07 16:18:21', '2021-11-07 16:18:21'),
(371, 317, '16362803590.jpg', '2021-11-07 16:19:19', '2021-11-07 16:19:19'),
(372, 318, '16362804820.jpg', '2021-11-07 16:21:22', '2021-11-07 16:21:22'),
(373, 319, '16362805670.jpg', '2021-11-07 16:22:47', '2021-11-07 16:22:47'),
(374, 320, '16362806170.jpg', '2021-11-07 16:23:37', '2021-11-07 16:23:37'),
(375, 321, '16362806670.jpg', '2021-11-07 16:24:27', '2021-11-07 16:24:27'),
(376, 322, '16362807710.jpg', '2021-11-07 16:26:11', '2021-11-07 16:26:11'),
(378, 323, '16362810260.png', '2021-11-07 16:30:26', '2021-11-07 16:30:26'),
(379, 22, '16363526790.png', '2021-11-08 12:24:39', '2021-11-08 12:24:39'),
(380, 21, '16363530140.png', '2021-11-08 12:30:14', '2021-11-08 12:30:14'),
(388, 10, '16363538030.png', '2021-11-08 12:43:23', '2021-11-08 12:43:23'),
(390, 20, '16363539870.png', '2021-11-08 12:46:27', '2021-11-08 12:46:27'),
(391, 28, '16377679960.jpg', '2021-11-24 21:33:16', '2021-11-24 21:33:16'),
(392, 222, '16377683050.jpg', '2021-11-24 21:38:25', '2021-11-24 21:38:25'),
(395, 326, '16628102940.png', '2022-09-10 05:44:54', '2022-09-10 05:44:54'),
(396, 325, '16628104220.jpg', '2022-09-10 05:47:02', '2022-09-10 05:47:02'),
(397, 327, '16628107180.jpg', '2022-09-10 05:51:58', '2022-09-10 05:51:58'),
(398, 328, '16628110090.jpg', '2022-09-10 05:56:49', '2022-09-10 05:56:49'),
(399, 329, '16628111470.png', '2022-09-10 05:59:07', '2022-09-10 05:59:07'),
(400, 330, '16628112920.jpg', '2022-09-10 06:01:32', '2022-09-10 06:01:32'),
(401, 331, '16628115640.png', '2022-09-10 06:06:04', '2022-09-10 06:06:04'),
(402, 332, '16628118390.png', '2022-09-10 06:10:39', '2022-09-10 06:10:39'),
(403, 333, '16628119830.png', '2022-09-10 06:13:03', '2022-09-10 06:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `variant` varchar(255) DEFAULT NULL,
  `price` double NOT NULL,
  `wholesale_price` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_points`
--

CREATE TABLE `registration_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `point` double DEFAULT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration_points`
--

INSERT INTO `registration_points` (`id`, `point`, `valid_from`, `valid_to`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1000, '2021-11-30', '2021-12-30', 1, '2021-11-29 23:04:54', '2021-11-29 23:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `seller_requests`
--

CREATE TABLE `seller_requests` (
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
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `vat` varchar(255) NOT NULL DEFAULT '0',
  `affiliate_commision` double NOT NULL DEFAULT 0,
  `minimum_point` double NOT NULL DEFAULT 1,
  `equivalent_point` double NOT NULL DEFAULT 1,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_tag` varchar(255) DEFAULT NULL,
  `meta_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `logo`, `favicon`, `email`, `phone`, `address`, `vat`, `affiliate_commision`, `minimum_point`, `equivalent_point`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`, `meta_title`, `meta_description`, `meta_tag`, `meta_image`, `created_at`, `updated_at`) VALUES
(1, 'E-shop', '1662802410.png', 'favicon_1662803863.png', 'info@eshop.com', '01627382866', 'Plot: 1/9, Road: 2, Block: D, Section: 15, Kafrul, Mirpur, Dhaka-1216, Bangladesh', '0', 0, 1, 1, 'https://ecom.ridoypaul.xyz/', 'https://ecom.ridoypaul.xyz/', 'https://ecom.ridoypaul.xyz/', 'https://ecom.ridoypaul.xyz/', 'https://ecom.ridoypaul.xyz/', NULL, NULL, NULL, NULL, NULL, '2022-09-10 03:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `image2`, `link`, `created_at`, `updated_at`) VALUES
(1, '1662805350.png', NULL, 'https://ecom.ridoypaul.xyz/', '2021-09-15 09:25:24', '2022-09-10 04:22:30'),
(2, '1662805454.png', NULL, 'https://ecom.ridoypaul.xyz/', '2021-09-15 09:25:24', '2022-09-10 04:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sadeknurul5@gmail.com', '2021-09-20 04:27:52', '2021-09-20 04:27:52'),
(2, 'shakilsumy@gmail.com', '2021-11-20 17:48:23', '2021-11-20 17:48:23'),
(3, 'zamzamtradingbd@hotmail.com', '2021-12-02 00:32:12', '2021-12-02 00:32:12'),
(4, 'raysa@gmail.com', '2022-09-10 03:48:35', '2022-09-10 03:48:35'),
(5, 'cse.ridoypaul@gmail.com', '2022-11-17 03:00:13', '2022-11-17 03:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 2,
  `image` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `is_wholeseller` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `referral_id` int(11) DEFAULT NULL,
  `affiliate_applied` int(11) NOT NULL DEFAULT 0,
  `is_affiliate` int(11) NOT NULL DEFAULT 0,
  `affiliate_rejection` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `phone`, `type`, `image`, `nid`, `city`, `address`, `is_wholeseller`, `is_active`, `referral_id`, `affiliate_applied`, `is_affiliate`, `affiliate_rejection`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'e-shop', NULL, 'cse.ridoypaul@gmail.com', '01705401056', 1, NULL, NULL, 'Dhaka', 'Mirpur, Dhaka-1216', 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$hfioXLX0Ooc1B4LPfdukIe2k1ngUJ4LJMkdNJNy60AsiNUEmyO5aO', 'YfJaJ23TBWKayDLZyk9kVVqlK5EWdFecNd6gFdCJjCvFzJLIiPWBV8SDFypL', '2021-09-02 03:46:21', '2021-11-18 23:57:05'),
(9, 'Kamal Uddin Hazari', NULL, 'kamal@test.com', '01254897566', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 1, 0, NULL, '$2y$10$3rk9VmT3KQlFFGDevSKgKeYZf5gEIChXn8.23A7n7FbApU/6mD5Tm', NULL, '2021-11-03 10:58:13', '2021-11-03 11:00:13'),
(10, 'sheikh shakil', NULL, 'shakilsumy@gmail.com', '01978015579', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$9L7ZZkyFvC6diSivPQizb.3FLifcTPtqEKhwKplax3gEj3OKu9x9q', NULL, '2021-11-18 23:17:07', '2021-11-18 23:17:07'),
(11, 'trtrfh', NULL, 'grectjytyxy@gmail.com', '01402339507', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$RedzDMeO2MkCI3Vl7/LfVeR9rI8MX20pkishJGaiDmKS/hJ3JitmK', NULL, '2021-11-28 02:17:00', '2021-11-28 02:17:00'),
(12, 'shakil 1', NULL, 'shakilsumy@ymail.com', '01705401059', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$.CtA8dwbI958lWXmbHgR6.3wn7dr2oRxAeJSifXATWueFUxxPtpLW', NULL, '2021-11-29 23:06:02', '2021-11-29 23:06:02'),
(13, 'Ashikul Islam', NULL, 'islamashikul123@gmail.com', '01647716548', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$OijkfES1u87odIFQNG/JWeiHucLm8Ptao960YNaEhX6FcxidL34aK', NULL, '2021-12-01 03:46:28', '2021-12-01 03:46:28'),
(14, 'Sheikh Farid', NULL, 'skfaridvaluka@gmail.com', '01714220723', 2, NULL, NULL, NULL, 'Sheikh zohuruddin CNG Filing Sation, word no 8, Bhaluka Poroshab, Mymensingh.', 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$A3nczCMTdBeWAgigtjChc./YzC.jP0UAXEN13kzVRFNOQe6JHs43y', NULL, '2021-12-02 22:46:43', '2021-12-02 22:59:55'),
(15, 'Ridoy Paul', NULL, 'ridoypaul2580@gmail.com', '+8801627382866', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$DRJHpzCJR9kDdSwvKvPa6uyTu9VWYKa/pV8qglGg.CGC0C2Q/SQay', NULL, '2022-09-10 10:28:12', '2022-09-10 10:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `variations`
--

CREATE TABLE `variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `amount` double UNSIGNED NOT NULL DEFAULT 0,
  `used_amount` double UNSIGNED NOT NULL DEFAULT 0,
  `point` double UNSIGNED NOT NULL DEFAULT 0,
  `used_point` double UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `customer_id`, `amount`, `used_amount`, `point`, `used_point`, `created_at`, `updated_at`) VALUES
(1, 8, 0, 0, 0, 0, '2021-11-03 10:56:04', '2021-11-03 10:56:04'),
(2, 9, 0, 0, 0, 0, '2021-11-03 10:58:13', '2021-11-03 10:58:13'),
(3, 10, 0, 0, 0, 0, '2021-11-18 23:17:07', '2021-11-18 23:17:07'),
(4, 11, 0, 0, 0, 0, '2021-11-28 02:17:00', '2021-11-28 02:17:00'),
(5, 12, 0, 0, 0, 0, '2021-11-29 23:06:02', '2021-11-29 23:06:02'),
(6, 13, 0, 0, 0, 0, '2021-12-01 03:46:28', '2021-12-01 03:46:28'),
(7, 14, 0, 0, 0, 0, '2021-12-02 22:46:43', '2021-12-02 22:46:43'),
(8, 15, 0, 0, 0, 0, '2022-09-10 10:28:12', '2022-09-10 10:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_entries`
--

CREATE TABLE `wallet_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wallet_id` int(10) UNSIGNED NOT NULL,
  `cash_in` double DEFAULT NULL,
  `cash_out` double DEFAULT NULL,
  `point_in` double DEFAULT NULL,
  `point_out` double DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallet_entries`
--

INSERT INTO `wallet_entries` (`id`, `wallet_id`, `cash_in`, `cash_out`, `point_in`, `point_out`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL, 0, NULL, NULL, '2021-11-03 10:58:13', '2021-11-03 10:58:13'),
(3, 3, NULL, NULL, 0, NULL, NULL, '2021-11-18 23:17:08', '2021-11-18 23:17:08'),
(4, 4, NULL, NULL, 0, NULL, NULL, '2021-11-28 02:17:00', '2021-11-28 02:17:00'),
(5, 5, NULL, NULL, 1000, NULL, NULL, '2021-11-29 23:06:02', '2021-11-29 23:06:02'),
(6, 5, 500, NULL, NULL, 500, 'Point Conversion', '2021-11-29 23:07:33', '2021-11-29 23:07:33'),
(7, 6, NULL, NULL, 1000, NULL, NULL, '2021-12-01 03:46:28', '2021-12-01 03:46:28'),
(8, 7, NULL, NULL, 1000, NULL, NULL, '2021-12-02 22:46:43', '2021-12-02 22:46:43'),
(9, 8, NULL, NULL, 0, NULL, NULL, '2022-09-10 10:28:12', '2022-09-10 10:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `customer_id`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 1, 325, '2022-09-10 05:38:39', '2022-09-10 05:38:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_points`
--
ALTER TABLE `registration_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_requests`
--
ALTER TABLE `seller_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_entries`
--
ALTER TABLE `wallet_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration_points`
--
ALTER TABLE `registration_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller_requests`
--
ALTER TABLE `seller_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wallet_entries`
--
ALTER TABLE `wallet_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
