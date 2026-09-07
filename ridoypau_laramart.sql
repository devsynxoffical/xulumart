-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2026 at 06:34 PM
-- Server version: 11.4.11-MariaDB
-- PHP Version: 8.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ridoypau_laramart`
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
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `author`, `date`, `tags`, `meta_title`, `meta_description`, `meta_keywords`, `meta_image`, `created_at`, `updated_at`) VALUES
(2, '5 Unusual Ways to Use an Umbrella', '1676697283.jpg', '<p>We take&nbsp;umbrellas&nbsp;for granted as handy accessories that protect us from the rain (especially in the UK), but we rarely think about them when we aren&rsquo;t hurriedly searching through a bag to find one, or kicking ourselves for forgetting one.</p>\r\n<p>However, the humble umbrella has a very&nbsp;long and noble history. The word &lsquo;umbrella&rsquo; comes from the Latin root &lsquo;umbra&rsquo;, which means shade or shadow, and there is evidence that they were in use more than 4,000 years ago in civilizations as far apart as China, Greece, Egypt, and Assyria. The Chinese were the first people to wax or lacquer paper umbrellas in order to use them in the rain, and they started to become popular in the western world during the 16<sup>th</sup>&nbsp;and 17<sup>th</sup>&nbsp;century, especially as protection from the damp climates of northern Europe with which we are still so familiar.</p>\r\n<p>Umbrellas are fascinating objects that we tend to use and lose with careless abandon &ndash; more than&nbsp;10,000 are mislaid each year&nbsp;on the London Underground alone.</p>\r\n<p>At&nbsp;Umbrella Workshop, we think it&rsquo;s high time we start thinking differently about umbrellas and how they can be a bigger part of our lives, rather than just an afterthought that we only think about when it starts to rain. Here then, are our 5 unusual ways to use an umbrella.</p>\r\n<h2><strong>1. As a Sun Shade</strong></h2>\r\n<p>The original use for an umbrella was as a sunshade, rather than as protection from wet weather. Ancient Egyptians constructed shades from feathers, palm fronds and stretched papyrus, which were attached to chariots or held over the heads of royalty by servants.</p>\r\n<p>Noblewomen in ancient Greece had female slaves carry parasols to protect them from the hot Mediterranean sun, but also as fashion accessories too.</p>\r\n<p>Using your umbrella as protection from the sun is an excellent idea, especially if you&rsquo;re in an area that doesn&rsquo;t offer shade from trees or buildings, such as at the beach or in open countryside. As well as stopping you from getting too hot, staying in the shade helps to prevent you getting sunburn, which isn&rsquo;t only extremely uncomfortable but can lead to very serious conditions such as skin cancer.</p>\r\n<p>Whilst a colorful umbrella might feel like a more summery choice, a black one is actually best as it absorbs the heat and keeps you cool beneath it.</p>\r\n<p>Hopeful its really good and very much important for us. If you want to buy umbrella with wholsale. <a href=\"../../../\">King Umbrella</a> is the best Umbrella Manufacturers and greatest supplier in Bangladesh.</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-17 23:14:43', '2023-06-11 06:28:32'),
(3, 'Submitting artwork for umbrella printing', '1676697355.jpg', '<p>The great thing about our printed umbrellas is that we can reproduce most things. From&nbsp;fine art&nbsp;and&nbsp;photographs&nbsp;to&nbsp;metallics, you just need to tell us what it is you&rsquo;re interested in printing and send us the artwork.</p>\r\n<p>Submitting artwork for umbrella printing can be tricky to get to grips with if you&rsquo;re not accustomed to printing on anything other than on your office printer. Printing on other surfaces isn&rsquo;t like printing on paper and so it&rsquo;s important to understand the requirements and the jargon before you begin the design phase. It might not be your job to understand how we print umbrellas, so we can help you if you&rsquo;re interested in learning the detail behind the jargon.</p>\r\n<p>If it&rsquo;s your job to create the artwork, then here are a few things here that might help you. &nbsp;You may be accustomed to preparing artwork for print, so bear with us while we explain it quite simply for those who don&rsquo;t know. &nbsp;</p>\r\n<h2>What is umbrella artwork?</h2>\r\n<p>Umbrella artwork refers to your logo or the design you want on your umbrella. You might have previously referred to the artwork as something you look at on the wall in a gallery. It will usually be created in Adobe Illustrator or Photoshop and saved as a specific file type (either a PSD or AI file). Exact colors to suit your brand identity or design will have been incorporated into the artwork before being correctly matched against the universal Pantone color matching system. Download our free Pantone references tool.&nbsp;</p>\r\n<p>By the way! are you want to start a Umbrella Business? <a href=\"../../../\">King Umbrella</a> can be your trust. This is the Best Umbrella Manufacturers and Supplier Company in Bangladesh</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-17 23:15:55', '2023-06-11 06:24:10'),
(4, 'Parts of an umbrella from KingUmbrella', '1676697400.jpg', '<p>We&rsquo;ve outlined a clear diagram and description of each of these parts of an umbrella to help you understand which parts can be customized and how an umbrella is made.</p>\r\n<p>The canopy of the umbrella is made up of 8 panel sections, which can be printed and decorated with any design. This is the part that keeps you dry or sheltered from the sun. The canopy is usually made from pongee which is high grade polyester that is treated with an acrylic coating on the underside and a scotch-guard finish on the top. The pongee can withstand heavy rain, dries quickly, folds easily and is available in many colours. Each panel is individually cut, printed and sewn to the rib.&nbsp;</p>\r\n<p>Digital or screen printing artwork onto the panels&nbsp;is possible and in most cases, happens prior to the umbrella being constructed. The fabric can also be Pantone matched and dyed prior to cutting to shape.&nbsp;</p>\r\n<p>The external canopy is the top of the umbrella that faces the rain or sun. The internal canopy, which can also be&nbsp;printed or dyed, is the inside of the umbrella that the user sees when they look up when the umbrella is open.</p>\r\n<p>Once made from cane or whale bone, the shaft of a modern umbrella is now made from either fibreglass, wood, steel or aluminium. Each material has its own advantages. Fibreglass won&rsquo;t rot or corrode and is extremely robust. It also holds it shape and won&rsquo;t expand or contract with the cold or heat with ease.&nbsp;</p>\r\n<p>An umbrella made from fiberglass offers longevity and won&rsquo;t bend or break easily. It won&rsquo;t absorb water and won&rsquo;t corrode over time like steel or aluminum. Our&nbsp;golf umbrellas&nbsp;use fiberglass poles and ribs.&nbsp;</p>\r\n<p>Wood poles are traditionally chosen for&nbsp;walker umbrellas&nbsp;and are a strong choice for an umbrella pole. Wood walkers are usually made from ash trees including Rowan wood which is common in Asia. Wood shaping machines such as lathes and turning machines create the proper shape for a pole.&nbsp;</p>\r\n<p>Telescopic umbrellas utilize aluminum poles for a light and effective folding action. The pole of a telescopic umbrella is constructed differently to a non-folding umbrella and has three parts to it, with the two narrower parts fitting snugly inside the largest section when folded down.&nbsp;</p>\r\n<p>Hopefull you get a better idea from this blog. If you want to start a small business with umbrella. No tension! <a href=\"../../../\">King Umbrella</a> is the best umbrella manufacturers and supplier you may tell wholesaler company in bangladesh.</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-17 23:16:40', '2023-06-11 06:26:14'),
(5, 'Umbrellas in Religious Ceremonies', '1676697449.jpg', '<p>In the 21<sup>st</sup>&nbsp;century Britain we largely view umbrellas as wholly practical items that protect us from the rain. They are also very disposable things in the modern age, with a depressing&nbsp;1.1 billion umbrellas&nbsp;thrown away worldwide each year.</p>\r\n<p>It wasn&rsquo;t always this way though. The umbrella has a&nbsp;very noble past, starting out like a parasol to protect people from the sun in Ancient Egypt. The earliest known are seen in Egyptian art dating back to the Fifth Dynasty, around 2450 BC. The Egyptians used umbrellas both for practical and ornamental purposes, with many temple wall paintings and reliefs showing a servant holding a parasol over a god during a procession.</p>\r\n<p>Due to the expense and expertise needed to manufacture them in ancient times, umbrellas and parasols became objects of power and status, and were used to protect important people such as gods, royalty and religious leaders (a world away from their current ubiquity). This led to many religions adopting parasols and umbrellas as part of their ceremonies.</p>\r\n<p>In this article we&rsquo;ll take a closer look at how the different religions have used umbrellas in the past and right up to the present day.</p>\r\n<h2><strong>Ancient Greece</strong></h2>\r\n<p>The people of Ancient Greece believed in multiple deities (polytheism), and umbrellas featured in ceremonies devoted to several different gods and goddesses.</p>\r\n<p>During the festival of the Skirophoria, which marked the end of the old year in May or June, a white parasol was carried from the Acropolis to the Temple of Phalerus by the priestesses of goddess Athena. White parasols were also associated with gods Demeter and Persephone, who represented the harvest, and they were also used when praying to the gods of fertility.</p>\r\n<p>Brightly coloured umbrellas were carried by followers of Dionysus, god of wine and pleasure, in festivals and processions. This may have led to their popularity with women as tools for mating rituals &ndash; to either flirt with or ward off men &ndash; and then as a fashion accessory. Umbrellas that could open and close were mentioned in the writings of comic playwright Aristophanes who lived during the 5<sup>th</sup>&nbsp;century BC.</p>\r\n<h2><strong>Oriental Orthodox Churches</strong></h2>\r\n<p>The Oriental Orthodox Churches are a group of Christian churches that have between 60 and 70 million members worldwide. They are some of the oldest churches in the world and have played a part in shaping the history and culture of countries including Armenia, Egypt, Eritrea, Ethiopia, Sudan, and the Middle East. In some of these churches, umbrellas are carried as part of their public worship to show honor to an important person, such as a bishop, or a holy object. By the way if you want to start an umbrella business you can contact with <a href=\"http://www.kingumbrellabd.com\">King Umbrella</a>. This is the best Umbrella Manufacturers Company in Bangladesh</p>\r\n<p>&nbsp;</p>', NULL, NULL, NULL, 'Umbrellas in Religious Ceremonies', 'Umbrellas in Religious Ceremonies', 'Discover the symbolic significance of umbrellas in religious ceremonies worldwide, exploring their cultural relevance and spiritual connotations.', NULL, '2023-02-17 23:17:29', '2023-06-11 06:10:32');

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

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `image`, `description`, `meta_title`, `meta_image`, `meta_description`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'Laramart', '1703308253.png', NULL, NULL, NULL, NULL, 1, '2023-02-15 23:54:20', '2023-12-22 23:10:54'),
(6, 'Xulu Mart', '1729262282.png', NULL, NULL, NULL, NULL, 1, '2024-10-18 08:38:02', '2024-10-18 08:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variations` varchar(255) DEFAULT NULL,
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
  `meta_title` longtext DEFAULT NULL,
  `meta_image` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `meta_keywords` longtext DEFAULT NULL,
  `is_featured` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent_id`, `position`, `image`, `banner`, `description`, `meta_title`, `meta_image`, `meta_description`, `meta_keywords`, `is_featured`, `is_active`, `created_at`, `updated_at`) VALUES
(12, 'Bamboo Mat', 0, 1, '1703156237.jpg', 'banner_1703157009.png', NULL, NULL, NULL, NULL, NULL, 0, 1, '2023-02-16 03:13:25', '2023-12-21 05:10:21'),
(13, 'Floor Mat', 0, 1, '1703156377.jpg', 'banner_1703157075.png', NULL, NULL, NULL, NULL, NULL, 0, 1, '2023-02-16 03:19:56', '2023-12-21 05:11:15'),
(14, 'Hand Made Bags', 0, 3, '1703156431.jpg', 'banner_1703157090.png', NULL, NULL, NULL, NULL, NULL, 0, 1, '2023-02-16 03:20:48', '2023-12-21 05:11:31'),
(15, 'Jute Bags', 0, 4, '1703156471.jpg', 'banner_1703157112.png', NULL, NULL, NULL, NULL, NULL, 0, 1, '2023-02-16 03:54:06', '2023-12-21 05:11:52'),
(16, 'Jute Basket', 0, 5, '1703156619.jpg', 'banner_1703157191.png', NULL, NULL, NULL, NULL, NULL, 0, 1, '2023-02-16 03:54:55', '2023-12-21 05:13:11'),
(17, 'Plants Basket', 0, 6, '1703156584.jpg', 'banner_1703157223.png', NULL, NULL, NULL, NULL, NULL, 0, 1, '2023-02-16 03:56:27', '2023-12-21 05:13:43'),
(18, 'Table mat', 0, 7, '1703156718.jpg', 'banner_1703157249.png', NULL, NULL, NULL, NULL, NULL, 0, 1, '2023-02-16 03:58:47', '2023-12-21 05:14:09'),
(19, 'Others', 0, 8, '1703156785.jpg', 'banner_1703157271.png', NULL, NULL, NULL, NULL, NULL, 0, 1, '2023-02-16 03:59:33', '2023-12-21 05:14:31'),
(22, 'food', 18, 1, '1728995983.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2024-10-15 06:39:43', '2024-10-15 06:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `change_colors`
--

CREATE TABLE `change_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `bg_color` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `change_colors`
--

INSERT INTO `change_colors` (`id`, `color`, `bg_color`, `created_at`, `updated_at`) VALUES
(1, '#292929', '#dedede', '2024-12-21 12:13:26', '2024-12-21 06:15:43'),
(2, '#f7f7f7', '#ed0c0c', '2024-12-19 12:14:22', '2024-12-12 12:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext DEFAULT NULL,
  `body` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, 'How are your handcrafted products different from mass-produced items in stores?', '<p>Unlike mass-produced items, our handcrafted products are made with passion, creativity, and attention to detail. Each piece is crafted individually, allowing for customization and personalization. By supporting our artisans, you\'re not just buying a product; you\'re investing in a piece of artistry and tradition.</p>', '2024-12-15 05:17:05', '2024-12-15 05:17:05'),
(3, 'What unique handcrafted items can I find on your website?', '<div class=\"accordion-item\">\r\n<div id=\"panelsStayOpen-collapse0\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-heading0\">\r\n<div class=\"accordion-body\">\r\n<p>Our website offers a diverse range of handcrafted products, including intricately designed jewelry, personalized home decor, artisanal pottery, bespoke clothing, and much more. Each item is carefully crafted by skilled artisans, ensuring its uniqueness and quality.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"accordion-item\">\r\n<h2 id=\"panelsStayOpen-headingTwo1\" class=\"accordion-header\"></h2>\r\n</div>', '2024-12-15 05:18:01', '2024-12-15 05:18:01'),
(4, 'How can I place an order?', '<p>Placing an order is easy! Browse our website, select the items you love, choose your size, and add them to your cart. Proceed to checkout, enter your shipping and payment details, and confirm your order.</p>\r\n<p>&nbsp;</p>', '2024-12-16 07:20:40', '2024-12-16 07:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `flash_sale_offers`
--

CREATE TABLE `flash_sale_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `start_date_time` varchar(255) NOT NULL,
  `end_date_time` varchar(255) NOT NULL,
  `featured` varchar(255) NOT NULL,
  `background_color` varchar(255) NOT NULL,
  `text_color` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flash_sale_offer_products`
--

CREATE TABLE `flash_sale_offer_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flash_sale_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `home_abouts`
--

CREATE TABLE `home_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_abouts`
--

INSERT INTO `home_abouts` (`id`, `title`, `description`, `youtube_link`, `created_at`, `updated_at`) VALUES
(1, 'Art Meets Artisan.', '<p>It&rsquo;s all about the joy when finally you have done something beautiful on your own and observe it with quite a great deal of proud &amp; successful feeling.</p>', 'https://www.youtube.com/embed/21hU4oCpxuA?si=6wNdDO2NP5fM0u0F', '2024-12-15 05:13:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_page_four_banners`
--

CREATE TABLE `home_page_four_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(29, '2021_11_01_050431_create_payments_table', 7),
(30, '2014_10_12_200000_add_two_factor_columns_to_users_table', 8),
(31, '2022_11_18_063812_create_permission_tables', 8),
(32, '2022_11_18_073751_create_flash_sale_offers_table', 8),
(33, '2022_11_18_074225_create_flash_sale_offer_products_table', 8),
(34, '2022_11_18_074637_create_carts_table', 8),
(35, '2022_11_18_074858_create_blogs_table', 8),
(36, '2022_11_24_182330_create_product_stocks_table', 8),
(37, '2022_11_24_182820_create_attributes_table', 8),
(38, '2022_11_24_183022_create_colors_table', 8),
(39, '2022_11_24_183836_create_uploads_table', 8),
(40, '2022_12_11_094944_create_home_page_four_banners_table', 8),
(41, '2022_12_23_155218_create_sessions_table', 8),
(42, '2023_02_16_075925_create_blogs_table', 9),
(43, '2023_12_30_112514_create_queries_table', 10),
(44, '2024_12_07_103746_add_short_description_to_products_table', 11),
(45, '2024_12_07_111446_create_change_colors_table', 11),
(46, '2024_12_08_063239_create_home_abouts_table', 11),
(47, '2024_12_08_081744_add_is_special_to_products_table', 11),
(48, '2024_12_15_061414_add_deal_of_day_to_products_table', 11),
(49, '2024_12_15_064217_add_deal_of_day_count_to_products_table', 11),
(50, '2024_12_15_065434_create_faqs_table', 11),
(51, '2024_12_17_063512_add_flash_sale_to_products_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `district_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
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
(29, '24-693165', 1, 1920, 'Laramart', 'admin@gmail.com', '01705401056', NULL, NULL, NULL, 'Mirpur, Dhaka-1216', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-08 06:26:02', '2024-02-08 06:26:02'),
(30, '24-831452', NULL, 7000, 'Ridoy Paul', 'cse.ridoypaul@gmail.com', '01627382866', NULL, NULL, NULL, 'Shah Ali plaza', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-29 00:08:20', '2024-04-29 00:08:20'),
(31, '24-152649', NULL, 9000, 'Ridoy Paul', 'cse.ridoypaul@gmail.com', '01627382866', NULL, NULL, NULL, 'Shah Ali plaza', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-18 02:48:26', '2024-05-18 02:48:26'),
(32, '24-662845', NULL, 0, NULL, 'kendrick.dean1994@yahoo.com', '8341882538', NULL, NULL, NULL, 'egYmOqrEa', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-13 20:08:52', '2024-10-13 20:08:52'),
(33, '24-552404', NULL, 0, NULL, 'kendrick.dean1994@yahoo.com', '8341882538', NULL, NULL, NULL, 'egYmOqrEa', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-13 20:08:57', '2024-10-13 20:08:57'),
(34, '24-389703', NULL, 780, NULL, NULL, '01521359898', NULL, NULL, NULL, 'Mirpur', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-15 02:28:22', '2024-10-15 02:28:22'),
(35, '24-063947', 37, 2950, 'Hafizul', 'hafizulalam11@gmail.com', '01521359898', NULL, NULL, NULL, 'Mirpur', NULL, NULL, NULL, 4, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-15 04:59:56', '2024-10-15 06:33:31'),
(36, '24-190156', 1, 1200, 'Laramart', 'admin@gmail.com', '01705401056', NULL, NULL, NULL, 'Mirpur, Dhaka-1216', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-18 09:04:28', '2024-10-18 09:04:28'),
(37, '24-229455', NULL, 0, NULL, 'sheltoabna36@gmail.com', '4457235681', NULL, NULL, NULL, 'GTnUeiOBiF', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-26 18:37:07', '2024-10-26 18:37:07'),
(38, '24-543437', NULL, 0, NULL, 'sheltoabna36@gmail.com', '4457235681', NULL, NULL, NULL, 'GTnUeiOBiF', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-26 18:37:11', '2024-10-26 18:37:11'),
(39, '24-695216', NULL, 0, NULL, 'djb6rtp9e@yahoo.com', '9633586362', NULL, NULL, NULL, 'uLKYWmkXBSunrAu', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-22 17:54:35', '2024-11-22 17:54:35'),
(40, '24-951035', NULL, 0, NULL, 'djb6rtp9e@yahoo.com', '9633586362', NULL, NULL, NULL, 'uLKYWmkXBSunrAu', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-22 17:54:39', '2024-11-22 17:54:39'),
(41, '24-359474', 49, 7800, 'hafizul', 'faith.hafizul@gmail.com', '01673338948', NULL, NULL, NULL, 'mirpur 12', NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-16 07:00:34', '2024-12-16 07:00:34');

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
(72, 29, 422, 960, NULL, 2, '2024-02-08 06:26:02', '2024-02-08 06:26:02'),
(73, 30, 416, 1000, NULL, 7, '2024-04-29 00:08:20', '2024-04-29 00:08:20'),
(74, 31, 421, 9000, NULL, 1, '2024-05-18 02:48:26', '2024-05-18 02:48:26'),
(75, 34, 418, 780, NULL, 1, '2024-10-15 02:28:22', '2024-10-15 02:28:22'),
(76, 35, 417, 950, NULL, 1, '2024-10-15 04:59:56', '2024-10-15 04:59:56'),
(77, 35, 420, 2000, NULL, 1, '2024-10-15 04:59:56', '2024-10-15 04:59:56'),
(78, 36, 424, 1200, NULL, 1, '2024-10-18 09:04:28', '2024-10-18 09:04:28'),
(79, 41, 418, 780, NULL, 10, '2024-12-16 07:00:34', '2024-12-16 07:00:34');

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
  `meta_title` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `meta_keywords` longtext DEFAULT NULL,
  `meta_image` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `description1`, `description2`, `description3`, `image`, `new_arrival`, `product_banner`, `advertisement`, `meta_title`, `meta_description`, `meta_keywords`, `meta_image`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, NULL, NULL, NULL, NULL, 'new_arrival1676868439.png', 'product_banner1676868686.png', 'advertisement1676868440.png', 'King Umbrella | Umbrella Manufacturers in Bangladesh', 'King Umbrella is a top Umbrella Manufacturers Company in Bangladesh, offering high-quality umbrellas, raincoats, and bags. Customize with your logo today!', 'Umbrella manufacturers Company in bangladesh, King Umbrella, umbrella factory in bangladesh, raincoat, Umbrella Manufacturers In Bangladesh, Umbrella Company in bangladesh', NULL, '2021-09-15 10:14:23', '2023-08-07 04:05:54'),
(2, 'All Products', NULL, NULL, NULL, NULL, '1676868453.png', NULL, NULL, NULL, 'All Products | King Umbrella', 'Discover the premium quality of King Umbrella, the leading umbrella factory in BD. Find reliable solutions for your umbrella needs at Umbrella Company BD.', 'Umbrella Company Bd, Umbrella factory in bd', NULL, '2021-09-15 10:15:24', '2023-06-11 23:20:04'),
(3, 'All Category', NULL, NULL, NULL, NULL, '1631706986.png', NULL, NULL, NULL, 'Categories| King Umbrella', 'Discover the premium quality of King Umbrella, the leading umbrella factory in BD. Find reliable solutions for your umbrella needs at Umbrella Company BD.', NULL, NULL, '2021-09-15 10:15:24', '2023-06-11 23:22:20'),
(4, 'About Us', '<p>Welcome to <strong>XULU Mart</strong>, your ultimate destination for stylish, high-quality clothing designed for every occasion. At XULU Mart, we believe that fashion is more than just clothing&mdash;it\'s a form of self-expression. That&rsquo;s why we are committed to providing you with timeless, trend-forward pieces that empower you to feel confident, comfortable, and effortlessly stylish.</p>\r\n<p><strong>Our Story</strong><br />Founded with a passion for innovation and style, XULU Mart was created to redefine the online shopping experience. We offer a curated selection of clothing that blends comfort, quality, and affordability, ensuring that everyone can embrace their individuality without compromise. From chic casual wear to versatile wardrobe staples, XULU Mart celebrates the perfect fusion of fashion and functionality.</p>\r\n<p><strong>Our Promise</strong><br />We take pride in delivering exceptional quality, customer-focused service, and thoughtfully crafted designs. Each piece in our collection reflects our commitment to sustainability, modern aesthetics, and attention to detail&mdash;because you deserve the best.</p>\r\n<p><strong>Why Choose XULU Mart?</strong></p>\r\n<ul>\r\n<li><strong>Effortless Shopping</strong>: A seamless online experience tailored for your convenience.</li>\r\n<li><strong>Stylish Variety</strong>: A diverse range of fashion for every mood, moment, and lifestyle.</li>\r\n<li><strong>Quality You Trust</strong>: Superior fabrics, ethical craftsmanship, and timeless appeal.</li>\r\n</ul>\r\n<p>At XULU Mart, we are more than a brand&mdash;we&rsquo;re a community that celebrates individuality, creativity, and confidence. Join us in redefining everyday fashion and explore clothing that speaks <em>your</em> style.</p>\r\n<p><strong>XULU Mart: Where Comfort Meets Chic.</strong></p>', '<p>Our vision is to become a leading name in online fashion, inspiring confidence and self-expression through thoughtfully designed clothing. We strive to build a global community where style meets sustainability, ensuring that every purchase contributes to a better, more inclusive fashion future. At XULU Mart, we envision a world where looking good and feeling good go hand in hand.</p>', '<div class=\"flex flex-grow flex-col gap-3\">\r\n<div class=\"min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert light\">\r\n<p>At <strong>XULU Mart</strong>, our mission is to empower individuals to express their unique style through affordable, high-quality fashion. We are dedicated to curating timeless and trend-driven clothing that blends comfort, confidence, and creativity. By prioritizing customer satisfaction, ethical sourcing, and innovation, we aim to make fashion accessible and enjoyable for everyone, everywhere.</p>\r\n</div>\r\n</div>\r\n</div>', NULL, '1676695793.jpg', NULL, 'product_banner1676695649.jpg', NULL, 'About Us | King Umbrella', 'King Umbrella: Leading Umbrella Mfg. Co. in Bangladesh. Custom logo printing available. Daily production capacity of 6,000 umbrellas. Contact us today!', NULL, NULL, '2021-09-26 05:07:24', '2024-12-16 07:18:18'),
(5, 'Privacy Policy', '<p>Laramart is committed to protecting the privacy of our customers and website users. This Privacy Policy outlines the types of information we collect, how we use that information, and the steps we take to ensure that your personal information is kept confidential and secure.</p>\r\n<p>Information We Collect: We collect personal information such as name, email address, and phone number when you place an order or contact us through our website. We also collect anonymous information about your browsing habits on our website, such as your IP address, browser type, and pages visited.</p>\r\n<p>How We Use Your Information: We use your personal information to process orders, provide customer service, and respond to inquiries. We may also use your information to send promotional emails or newsletters, but you can opt out of these communications at any time. We use anonymous browsing information to improve our website and user experience.</p>\r\n<p>Sharing Your Information: We do not sell, trade, or share your personal information with third parties, except as necessary to fulfill orders or comply with legal requirements. We may share anonymous browsing information with our website analytics providers.</p>\r\n<p>Security: We take reasonable steps to ensure that your personal information is kept secure and confidential. However, no system can guarantee 100% security, and we cannot be responsible for unauthorized access to information that is beyond our control.</p>\r\n<p>Changes to this Policy: Laramart may update this Privacy Policy from time to time. We encourage you to review this Policy periodically to stay informed of our privacy practices.</p>\r\n<p>Contact Us: If you have any questions or concerns about this Privacy Policy, please contact us at [insert contact information.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Privacy Policy - Laramart', 'Discover how Laramart protects your privacy. Read our Privacy Policy to learn how we keep your personal information secure and confidential. Contact us with any questions.', 'Laramart privacy, Laramart', NULL, '2021-09-27 11:02:06', '2024-02-08 04:40:00'),
(6, 'Term and Conditions', '<div class=\"flex-1 overflow-hidden\">\r\n<div class=\"react-scroll-to-bottom--css-fdydv-79elbk h-full dark:bg-gray-800\">\r\n<div class=\"react-scroll-to-bottom--css-fdydv-1n7m0yu\">\r\n<div class=\"flex flex-col items-center text-sm dark:bg-gray-800\">\r\n<div class=\"group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 bg-gray-50 dark:bg-[#444654]\">\r\n<div class=\"text-base gap-4 md:gap-6 md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0 m-auto\">\r\n<div class=\"relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]\">\r\n<div class=\"flex flex-grow flex-col gap-3\">\r\n<div class=\"min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert light\">\r\n<ol>\r\n<li>\r\n<p>Pricing: Prices for all products and services are subject to change without prior notice.</p>\r\n</li>\r\n<li>\r\n<p>Payment: All payments for products and services must be made in advance, unless otherwise agreed upon in writing.</p>\r\n</li>\r\n<li>\r\n<p>Shipping: Shipping and handling fees will be charged in addition to the cost of the product, and will be calculated based on the shipping address and method selected.</p>\r\n</li>\r\n<li>\r\n<p>Returns and Refunds: Products may be returned within 7 days of receipt for a refund or exchange. Refunds will only be issued for products that are returned in their original condition, with all packaging and tags intact.</p>\r\n</li>\r\n<li>\r\n<p>Warranty: All products come with a standard warranty of 90 days from the date of purchase. This warranty covers defects in materials and workmanship only, and does not cover normal wear and tear or damage caused by misuse, abuse, or neglect.</p>\r\n</li>\r\n<li>\r\n<p>Intellectual Property: All trademarks, logos, and service marks displayed on our products or website are the property of King Umbrella. Use of these marks without our express written permission is strictly prohibited.</p>\r\n</li>\r\n<li>\r\n<p>Limitation of Liability: King Umbrella shall not be liable for any damages, including but not limited to direct, indirect, incidental, or consequential damages arising from the use or inability to use our products or services.</p>\r\n</li>\r\n<li>\r\n<p>Governing Law: These terms and conditions shall be governed by and construed in accordance with the laws of Bangladesh.</p>\r\n</li>\r\n<li>\r\n<p>Modification: King Umbrella reserves the right to modify these terms and conditions at any time, without prior notice. Customers are encouraged to review these terms and conditions regularly.</p>\r\n</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"flex justify-between\">\r\n<div class=\"text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-3 md:gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 dark:bg-gray-800\">\r\n<div class=\"text-base gap-4 md:gap-6 md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0 m-auto\">\r\n<div class=\"w-[30px] flex flex-col relative items-end\">\r\n<div class=\"relative flex\"><img alt=\"\" aria-hidden=\"true\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Term and Conditions | King Umbrella', 'King Umbrella is a leading manufacturer of high-quality umbrellas, raincoats, and bags in Bangladesh. We offer printing services and a wide range of products to suit your needs', 'king umbrella term and condition', NULL, '2021-09-27 11:02:06', '2023-06-11 05:48:37'),
(7, 'Offer Products', NULL, NULL, NULL, NULL, '1631706673.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-03 05:37:13', '2021-11-03 05:37:13');

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
('sadeknurul5@gmail.com', '$2y$10$Hf9OPBOaNBzS7kT39EImFuKWOJtUrrX87teHGSEySjB4nyvSkJhP2', '2021-10-25 04:26:01'),
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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
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
  `size` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `febric` text DEFAULT NULL,
  `tubs` text DEFAULT NULL,
  `handel` text DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `is_sale` int(11) NOT NULL DEFAULT 0,
  `code` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `weight` double NOT NULL DEFAULT 0,
  `type` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `hover_image` varchar(255) DEFAULT NULL,
  `variations` text DEFAULT NULL,
  `choice_options` text DEFAULT NULL,
  `current_stock` int(11) NOT NULL DEFAULT 0,
  `features` longtext DEFAULT NULL,
  `description` text DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_new` int(10) DEFAULT NULL,
  `deal_of_day` varchar(255) DEFAULT NULL,
  `flash_sale` tinyint(1) NOT NULL DEFAULT 0,
  `deal_of_day_count` date DEFAULT NULL,
  `is_special` varchar(255) DEFAULT NULL,
  `sold` int(100) NOT NULL DEFAULT 0,
  `tags` longtext DEFAULT NULL,
  `meta_title` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `meta_keywords` longtext DEFAULT NULL,
  `meta_image` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `brand_id`, `category_id`, `sub_category_id`, `size`, `color`, `febric`, `tubs`, `handel`, `price`, `discount_price`, `is_sale`, `code`, `unit`, `weight`, `type`, `qty`, `image`, `hover_image`, `variations`, `choice_options`, `current_stock`, `features`, `description`, `short_description`, `is_active`, `is_new`, `deal_of_day`, `flash_sale`, `deal_of_day_count`, `is_special`, `sold`, `tags`, `meta_title`, `meta_description`, `meta_keywords`, `meta_image`, `created_at`, `updated_at`) VALUES
(415, 'special-floor mat', 5, 13, NULL, NULL, NULL, NULL, NULL, NULL, 1200, 800, 1, 'MKC60K', NULL, 0, 'single', NULL, '1703313141.jpg', '1703313141.jpg', NULL, NULL, 0, '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">Company</td>\r\n<td style=\"width: 50%;\">&nbsp;Laramart</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Size</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Febric</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Tubs</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Handel</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Product Description Goes Here&nbsp;</p>', NULL, 1, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2023-12-23 00:32:21', '2023-12-23 00:32:21'),
(416, 'Plants basket 01d', 5, 17, NULL, NULL, NULL, NULL, NULL, NULL, 1200, 1000, 1, '9KT0E3', NULL, 0, 'single', NULL, '1703313667.jpg', '1703313667.jpg', NULL, NULL, 0, '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">Company</td>\r\n<td style=\"width: 50%;\">&nbsp;King Umbrella</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Size</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Febric</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Tubs</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Handel</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Embrace the natural beauty of the outdoors with our Plants Basket from the Rustic Charm Collection. Crafted with a blend of natural materials and modern design sensibilities, this basket is not just a home for your plants but a statement piece that enhances any living space.</p>', NULL, 1, NULL, NULL, 0, NULL, NULL, 0, 'new', 'asdf', 'safs', 'sdfa', NULL, '2023-12-23 00:41:07', '2024-10-18 08:57:19'),
(417, 'Hand Made jute bag', 5, 15, NULL, NULL, NULL, NULL, NULL, NULL, 1200, 950, 1, 'HPX12X', NULL, 0, 'single', NULL, '1703314023.jpg', 'hover_1703314023.jpg', NULL, NULL, 0, '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">Company</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Size</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Febric</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Tubs</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Handel</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Product description goes here .</p>', NULL, 1, NULL, NULL, 0, NULL, NULL, 0, 'New', NULL, NULL, NULL, NULL, '2023-12-23 00:47:03', '2023-12-23 00:47:03'),
(418, 'jute basket', 5, 16, NULL, NULL, NULL, NULL, NULL, NULL, 780, NULL, 0, 'NWH8R1', NULL, 0, 'single', 100, '1703314956.jpg', 'hover_1703314956.jpg', NULL, NULL, 0, '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">Company</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Size</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Febric</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Tubs</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Handel</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Product description goes here .</p>', NULL, 1, NULL, NULL, 0, NULL, NULL, 0, 'New', NULL, NULL, NULL, NULL, '2023-12-23 01:02:36', '2024-12-16 06:59:32'),
(419, 'Bamboo mat', 5, 12, NULL, NULL, NULL, NULL, NULL, NULL, 400, NULL, 0, '80AXGA', NULL, 0, 'single', NULL, '1703323541.jpg', 'hover_1703323541.jpg', NULL, NULL, 0, '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">Company</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Size</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Febric</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Tubs</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Handel</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Here goes product description&nbsp;</p>', NULL, 1, 1, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2023-12-23 03:25:41', '2024-12-21 23:05:38'),
(420, 'Amazing Items', 5, 19, NULL, NULL, NULL, NULL, NULL, NULL, 2000, 450, 0, 'X914B3', NULL, 0, 'single', NULL, '1703324658.jpg', 'hover_1703324658.jpg', NULL, NULL, 0, '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">Company</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Size</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Febric</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Tubs</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Handel</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, NULL, 1, 1, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2023-12-23 03:44:19', '2023-12-23 03:44:19'),
(421, 'Hand Made jute product', 5, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9000, 1, '9FRUBW', NULL, 0, 'single', NULL, '1703506290.jpg', 'hover_1703506290.jpg', NULL, NULL, 0, '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">Company</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Size</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Febric</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Tubs</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Handel</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Test description&nbsp;</p>', NULL, 1, 1, NULL, 0, NULL, NULL, 0, 'tags,', 'title', 'description', 'keywords', NULL, '2023-12-25 06:11:30', '2024-02-08 06:42:39'),
(422, 'Hand made busket', 5, 16, NULL, NULL, NULL, NULL, NULL, NULL, 1200, 960, 1, 'DGS9V0', NULL, 0, 'single', NULL, '1703506484.jpg', 'hover_1703506484.jpg', NULL, NULL, 0, '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">Company</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Size</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Febric</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Tubs</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Handel</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p><strong>Handcrafted Woven Basket - Natural Charm for Everyday Use</strong></p>\r\n<p>Discover the elegance of simplicity with this beautifully handcrafted woven basket. Made from durable, natural materials, this basket brings a rustic yet timeless charm to your home. Its sturdy double handles ensure easy carrying, while the spacious interior offers ample room for everything from fresh produce and picnic essentials to home decor accents.</p>\r\n<p>Whether used as a functional storage piece, a stylish market companion, or a decorative centerpiece, this versatile basket seamlessly complements any space. Its natural finish and intricate weaving add warmth and texture, making it the perfect blend of practicality and style.</p>\r\n<p><strong>Key Features:</strong></p>\r\n<ul>\r\n<li><strong>Handwoven Craftsmanship</strong>: Made with care using quality materials for durability.</li>\r\n<li><strong>Spacious Design</strong>: Ideal for groceries, organizing, or displaying decorative items.</li>\r\n<li><strong>Double Handles</strong>: Easy to carry and perfect for on-the-go use.</li>\r\n<li><strong>Timeless Aesthetic</strong>: Natural tones to suit modern, rustic, or traditional spaces.</li>\r\n</ul>\r\n<p>Add this functional work of art to your collection and bring home a touch of natural beauty today!</p>', '<p><strong>Key Features:</strong></p>\r\n<ul>\r\n<li><strong>Handwoven Craftsmanship</strong>: Made with care using quality materials for durability.</li>\r\n<li><strong>Spacious Design</strong>: Ideal for groceries, organizing, or displaying decorative items.</li>\r\n<li><strong>Double Handles</strong>: Easy to carry and perfect for on-the-go use.</li>\r\n<li><strong>Timeless Aesthetic</strong>: Natural tones to suit modern, rustic, or traditional spaces.</li>\r\n</ul>\r\n<p>&nbsp;</p>', 1, 1, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2023-12-25 06:14:44', '2024-12-16 07:07:35'),
(423, 'Hand Made jute bag', 5, 15, NULL, NULL, NULL, NULL, NULL, NULL, 1200, NULL, 0, 'TT0AMT', NULL, 0, 'single', NULL, '1703507057.jpg', 'hover_1703507057.jpg', NULL, NULL, 0, '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">Company</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Size</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Febric</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Tubs</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Handel</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, NULL, 1, 1, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2023-12-25 06:24:17', '2023-12-25 06:24:17'),
(424, 'Hand Made jute bag', 5, 15, NULL, NULL, NULL, NULL, NULL, NULL, 1230, 1200, 1, 'LMNIE4', NULL, 0, 'single', NULL, '1703507230.jpg', 'hover_1703507230.jpg', NULL, NULL, 0, '<table class=\"table table-bordered\" style=\"border-collapse: collapse; width: 100%;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">Company</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Size</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Febric</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Tubs</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">Handel</td>\r\n<td style=\"width: 50%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>This quilt is a labor of love, meticulously pieced together and stitched by hand. The vibrant patchwork or intricate patterns showcase the artisan\'s attention to detail and creativity. Its warmth and coziness make it a cherished heirloom for generations.</p>', NULL, 1, NULL, '1', 0, NULL, '1', 0, 'hand made', 'hand made', 'hand made', 'hand made', NULL, '2023-12-25 06:27:10', '2024-12-16 07:11:00'),
(427, 'Minima ea architecto', 6, 16, NULL, NULL, NULL, NULL, NULL, NULL, 450, NULL, 1, 'NCJZQ6', NULL, 0, 'single', 15, '1707563371.jpeg', 'hover_1707563371.jpeg', NULL, NULL, 0, NULL, '<p>sdfhgfhjdf hfghdf h</p>', '<p>sort</p>', 1, NULL, '1', 0, '2024-12-26', '1', 0, 'In quae excepturi a', 'Aliquid provident i', 'Error at rem similiq', 'Aute id enim sed tot', NULL, '2024-02-10 05:09:31', '2024-12-21 06:04:11');

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
(408, 337, '16765395850.jpg', '2023-02-16 03:26:25', '2023-02-16 03:26:25'),
(409, 338, '16765397740.jpg', '2023-02-16 03:29:34', '2023-02-16 03:29:34'),
(410, 338, '16765397741.jpg', '2023-02-16 03:29:34', '2023-02-16 03:29:34'),
(411, 339, '16765398950.jpg', '2023-02-16 03:31:35', '2023-02-16 03:31:35'),
(412, 339, '16765398951.jpg', '2023-02-16 03:31:35', '2023-02-16 03:31:35'),
(413, 340, '16765400000.jpg', '2023-02-16 03:33:20', '2023-02-16 03:33:20'),
(414, 340, '16765400001.jpg', '2023-02-16 03:33:20', '2023-02-16 03:33:20'),
(415, 340, '16765400002.jpg', '2023-02-16 03:33:20', '2023-02-16 03:33:20'),
(416, 341, '16765421230.jpg', '2023-02-16 04:08:43', '2023-02-16 04:08:43'),
(417, 342, '16765427860.jpg', '2023-02-16 04:19:46', '2023-02-16 04:19:46'),
(418, 342, '16765427861.jpg', '2023-02-16 04:19:46', '2023-02-16 04:19:46'),
(419, 343, '16765435730.jpg', '2023-02-16 04:32:53', '2023-02-16 04:32:53'),
(420, 344, '16765444010.png', '2023-02-16 04:46:41', '2023-02-16 04:46:41'),
(421, 345, '16765451460.jpg', '2023-02-16 04:59:06', '2023-02-16 04:59:06'),
(422, 346, '16765453800.jpg', '2023-02-16 05:03:00', '2023-02-16 05:03:00'),
(423, 347, '16765455380.png', '2023-02-16 05:05:38', '2023-02-16 05:05:38'),
(424, 348, '16765457220.png', '2023-02-16 05:08:42', '2023-02-16 05:08:42'),
(425, 349, '16765459340.png', '2023-02-16 05:12:14', '2023-02-16 05:12:14'),
(426, 350, '16765460600.png', '2023-02-16 05:14:20', '2023-02-16 05:14:20'),
(427, 351, '16765462660.png', '2023-02-16 05:17:46', '2023-02-16 05:17:46'),
(428, 352, '16765465280.jpg', '2023-02-16 05:22:08', '2023-02-16 05:22:08'),
(429, 353, '16765466870.png', '2023-02-16 05:24:47', '2023-02-16 05:24:47'),
(430, 354, '16765468100.png', '2023-02-16 05:26:50', '2023-02-16 05:26:50'),
(431, 355, '16765469710.png', '2023-02-16 05:29:31', '2023-02-16 05:29:31'),
(432, 356, '16765470870.png', '2023-02-16 05:31:27', '2023-02-16 05:31:27'),
(433, 357, '16765474170.jpg', '2023-02-16 05:36:57', '2023-02-16 05:36:57'),
(434, 358, '16765475250.png', '2023-02-16 05:38:45', '2023-02-16 05:38:45'),
(435, 359, '16765476440.jpg', '2023-02-16 05:40:44', '2023-02-16 05:40:44'),
(436, 359, '16765476441.png', '2023-02-16 05:40:44', '2023-02-16 05:40:44'),
(437, 360, '16765477760.png', '2023-02-16 05:42:56', '2023-02-16 05:42:56'),
(438, 361, '16765478720.png', '2023-02-16 05:44:32', '2023-02-16 05:44:32'),
(439, 362, '16765480230.jpg', '2023-02-16 05:47:03', '2023-02-16 05:47:03'),
(442, 365, '16765486590.jpg', '2023-02-16 05:57:39', '2023-02-16 05:57:39'),
(443, 365, '16765486591.jpg', '2023-02-16 05:57:39', '2023-02-16 05:57:39'),
(444, 366, '16765488430.jpg', '2023-02-16 06:00:43', '2023-02-16 06:00:43'),
(445, 366, '16765488431.jpg', '2023-02-16 06:00:43', '2023-02-16 06:00:43'),
(446, 367, '16765489590.jpg', '2023-02-16 06:02:39', '2023-02-16 06:02:39'),
(447, 368, '16765491050.jpg', '2023-02-16 06:05:05', '2023-02-16 06:05:05'),
(448, 369, '16765503780.jpg', '2023-02-16 06:26:18', '2023-02-16 06:26:18'),
(449, 370, '16765504820.jpg', '2023-02-16 06:28:02', '2023-02-16 06:28:02'),
(450, 371, '16765505780.jpg', '2023-02-16 06:29:38', '2023-02-16 06:29:38'),
(451, 372, '16765507770.jpg', '2023-02-16 06:32:57', '2023-02-16 06:32:57'),
(452, 373, '16765509160.jpg', '2023-02-16 06:35:16', '2023-02-16 06:35:16'),
(453, 374, '16765510290.jpg', '2023-02-16 06:37:09', '2023-02-16 06:37:09'),
(454, 375, '16765511100.jpg', '2023-02-16 06:38:30', '2023-02-16 06:38:30'),
(455, 376, '16765516230.jpg', '2023-02-16 06:47:03', '2023-02-16 06:47:03'),
(456, 376, '16765516231.png', '2023-02-16 06:47:03', '2023-02-16 06:47:03'),
(457, 377, '16765524310.png', '2023-02-16 07:00:31', '2023-02-16 07:00:31'),
(458, 378, '16765526630.png', '2023-02-16 07:04:23', '2023-02-16 07:04:23'),
(459, 379, '16765527970.jpg', '2023-02-16 07:06:37', '2023-02-16 07:06:37'),
(460, 379, '16765527971.jpg', '2023-02-16 07:06:37', '2023-02-16 07:06:37'),
(461, 380, '16765530380.jpg', '2023-02-16 07:10:38', '2023-02-16 07:10:38'),
(462, 380, '16765530381.jpg', '2023-02-16 07:10:38', '2023-02-16 07:10:38'),
(463, 380, '16765530382.png', '2023-02-16 07:10:38', '2023-02-16 07:10:38'),
(464, 381, '16765531790.jpg', '2023-02-16 07:12:59', '2023-02-16 07:12:59'),
(465, 381, '16765531791.png', '2023-02-16 07:12:59', '2023-02-16 07:12:59'),
(466, 382, '16765532660.png', '2023-02-16 07:14:26', '2023-02-16 07:14:26'),
(467, 383, '16765533770.jpg', '2023-02-16 07:16:17', '2023-02-16 07:16:17'),
(468, 383, '16765533771.jpg', '2023-02-16 07:16:17', '2023-02-16 07:16:17'),
(469, 383, '16765533772.png', '2023-02-16 07:16:17', '2023-02-16 07:16:17'),
(470, 384, '16766965990.png', '2023-02-17 23:03:19', '2023-02-17 23:03:19'),
(471, 385, '16766967000.png', '2023-02-17 23:05:00', '2023-02-17 23:05:00'),
(472, 386, '16766968040.png', '2023-02-17 23:06:44', '2023-02-17 23:06:44'),
(473, 387, '16766968920.png', '2023-02-17 23:08:12', '2023-02-17 23:08:12'),
(474, 388, '16766969760.png', '2023-02-17 23:09:36', '2023-02-17 23:09:36'),
(475, 389, '16766970470.png', '2023-02-17 23:10:47', '2023-02-17 23:10:47'),
(476, 390, '16766971360.png', '2023-02-17 23:12:16', '2023-02-17 23:12:16'),
(477, 391, '16766972200.png', '2023-02-17 23:13:40', '2023-02-17 23:13:40'),
(478, 392, '16766976460.png', '2023-02-17 23:20:46', '2023-02-17 23:20:46'),
(479, 393, '16766977410.png', '2023-02-17 23:22:21', '2023-02-17 23:22:21'),
(480, 394, '16766978150.png', '2023-02-17 23:23:35', '2023-02-17 23:23:35'),
(481, 395, '16766979270.jpg', '2023-02-17 23:25:27', '2023-02-17 23:25:27'),
(482, 396, '16766980100.png', '2023-02-17 23:26:50', '2023-02-17 23:26:50'),
(483, 397, '16766981230.png', '2023-02-17 23:28:43', '2023-02-17 23:28:43'),
(484, 398, '16766982670.jpg', '2023-02-17 23:31:07', '2023-02-17 23:31:07'),
(485, 399, '16766984180.jpg', '2023-02-17 23:33:38', '2023-02-17 23:33:38'),
(486, 400, '16766985470.jpg', '2023-02-17 23:35:47', '2023-02-17 23:35:47'),
(487, 401, '16766986410.jpg', '2023-02-17 23:37:21', '2023-02-17 23:37:21'),
(488, 402, '16766987840.png', '2023-02-17 23:39:44', '2023-02-17 23:39:44'),
(489, 403, '16766989030.jpg', '2023-02-17 23:41:43', '2023-02-17 23:41:43'),
(491, 404, '16766990700.jpg', '2023-02-17 23:44:30', '2023-02-17 23:44:30'),
(492, 405, '16766991500.png', '2023-02-17 23:45:50', '2023-02-17 23:45:50'),
(493, 406, '16766992390.png', '2023-02-17 23:47:19', '2023-02-17 23:47:19'),
(494, 407, '16766993840.jpg', '2023-02-17 23:49:44', '2023-02-17 23:49:44'),
(495, 408, '16766994870.png', '2023-02-17 23:51:27', '2023-02-17 23:51:27'),
(496, 409, '16766995470.png', '2023-02-17 23:52:27', '2023-02-17 23:52:27'),
(497, 410, '16766996630.jpg', '2023-02-17 23:54:23', '2023-02-17 23:54:23'),
(498, 363, '16848215770.jpg', '2023-05-22 23:59:37', '2023-05-22 23:59:37'),
(519, 415, '17033131410.jpg', '2023-12-23 00:32:21', '2023-12-23 00:32:21'),
(520, 415, '17033131411.jpg', '2023-12-23 00:32:21', '2023-12-23 00:32:21'),
(521, 416, '17033136670.jpg', '2023-12-23 00:41:07', '2023-12-23 00:41:07'),
(522, 416, '17033136671.jpg', '2023-12-23 00:41:07', '2023-12-23 00:41:07'),
(523, 416, '17033136672.jpg', '2023-12-23 00:41:07', '2023-12-23 00:41:07'),
(524, 417, '17033140230.jpg', '2023-12-23 00:47:03', '2023-12-23 00:47:03'),
(525, 417, '17033140231.jpg', '2023-12-23 00:47:04', '2023-12-23 00:47:04'),
(526, 418, '17033149560.jpg', '2023-12-23 01:02:36', '2023-12-23 01:02:36'),
(527, 418, '17033149561.jpg', '2023-12-23 01:02:36', '2023-12-23 01:02:36'),
(528, 419, '17033235410.jpg', '2023-12-23 03:25:41', '2023-12-23 03:25:41'),
(529, 419, '17033235411.jpg', '2023-12-23 03:25:41', '2023-12-23 03:25:41'),
(530, 420, '17033246590.jpg', '2023-12-23 03:44:19', '2023-12-23 03:44:19'),
(531, 420, '17033246591.jpg', '2023-12-23 03:44:19', '2023-12-23 03:44:19'),
(532, 421, '17035062900.jpg', '2023-12-25 06:11:30', '2023-12-25 06:11:30'),
(533, 421, '17035062901.jpg', '2023-12-25 06:11:30', '2023-12-25 06:11:30'),
(534, 422, '17035064840.jpg', '2023-12-25 06:14:44', '2023-12-25 06:14:44'),
(535, 422, '17035064841.jpg', '2023-12-25 06:14:44', '2023-12-25 06:14:44'),
(536, 423, '17035070570.jpg', '2023-12-25 06:24:17', '2023-12-25 06:24:17'),
(537, 423, '17035070571.jpg', '2023-12-25 06:24:17', '2023-12-25 06:24:17'),
(538, 424, '17035072300.jpg', '2023-12-25 06:27:10', '2023-12-25 06:27:10'),
(539, 424, '17035072301.jpg', '2023-12-25 06:27:10', '2023-12-25 06:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `variant` varchar(255) DEFAULT NULL,
  `variant_output` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Jason Mccarty', 'beheqoq@mailinator.com', '+1 (302) 715-4484', 'Laborum officiis asp', 'Rem deleniti quas mi', '2023-12-30 06:25:46', '2023-12-30 06:25:46'),
(2, 'Uriel Mcdonald', 'damaco@mailinator.com', '+1 (873) 155-6476', 'Et laboriosam totam', 'Voluptatem voluptas', '2023-12-30 06:26:42', '2023-12-30 06:26:42'),
(3, 'Kirk Guerrero', 'todoheri@mailinator.com', '+1 (932) 586-1082', 'Eum placeat accusan', 'Et cupidatat perspic', '2023-12-30 06:27:33', '2023-12-30 06:27:33'),
(4, 'Bianca Levine', 'hydyh@mailinator.com', '+1 (978) 499-7302', 'Soluta rerum labore', 'Non laboris ut delec', '2023-12-30 06:43:54', '2023-12-30 06:43:54'),
(5, 'Dorothea Whatley', 'whatley.dorothea47@gmail.com', 'Qkvoupwn', 'Don\'t Miss Out: Supercharge Your YouTube Presence Now!', 'Dear Creator,\r\n\r\nAre you looking to take your YouTube channel to the next level and increase your visibility across both YouTube and Google Search? Look no further! My partner and I are excited to introduce you to our comprehensive video SEO optimization service tailored to maximize your growth potential.\r\n\r\nAs certified YouTube growth experts, we understand the importance of optimizing every aspect of your videos and channel to ensure they reach their fullest potential. With our proven track record and dedication to staying ahead of the curve in technology and trends, we guarantee to implement the most powerful, vital, and essential features to elevate your presence on these platforms.\r\n\r\n=>> https://optimize-youtube-video-seo.blogspot.com/ \r\n\r\nOur service includes:\r\n\r\n1. Keywords Research: We conduct in-depth research to identify the most relevant and high-performing keywords in your niche, ensuring your content is perfectly aligned with what your audience is searching for.\r\n   \r\n2. Video Optimization: From thumbnails to end screens, we optimize every element of your videos to captivate your audience and encourage engagement.\r\n\r\n3. Title & Description Optimization: Crafting compelling titles and descriptions that not only attract viewers but also enhance your videos\' discoverability through search.\r\n\r\n4. Meta Tag Optimization: Utilizing advanced techniques, we optimize meta tags to further enhance your videos\' visibility and reach.\r\n\r\n=>> https://optimize-youtube-video-seo.blogspot.com/\r\n\r\nWe pride ourselves on utilizing the latest advancements in technology, AI, and industry-leading keyword tools, combined with our years of experience, to deliver unparalleled results for our clients.\r\n\r\nIn addition to our optimization services, we provide a personalized screengrab video that outlines all the changes made to your videos, ensuring complete transparency and understanding. Furthermore, we offer the option for an onboarding call to discuss our strategies and address any questions or concerns you may have.\r\n\r\nDon\'t let your valuable content go unnoticed in the vast sea of online video content. Partner with us, and let\'s unlock the full potential of your YouTube channel together.\r\n\r\n=>> https://optimize-youtube-video-seo.blogspot.com/\r\n\r\nTo learn more about our services and how we can help you achieve your goals, please reply to this email or schedule a call at your convenience.\r\n\r\nThank you for considering us as your trusted partners in YouTube growth.\r\n\r\nWarm regards,\r\n\r\n[Dorothea]', '2024-04-30 12:28:21', '2024-04-30 12:28:21'),
(6, 'Brooks Mobley', 'brooks.mobley63@msn.com', '6186597608', 'Ì†ΩÌ≥± This App Gets Us Bitc0in For ZERO Cost?', 'Hey, would you like to get some Bitc0in..\r\n\r\nWithout actually paying for it?\r\n\r\nSound like an impossible task to pull off?\r\n\r\nWell I‚Äôm here to tell you that this is NOT the case\r\n\r\n=>> Go here to see the secret for getting Bitc0in & Ethereum\r\n\r\n=>> https://bitcoin-coinz.blogspot.com/\r\n\r\nNothing like this has been accomplished before..\r\n\r\nWith this brand new system‚Ä¶ \r\n\r\n..you have the ability to turn ANY phone or \r\ncomputer into a crypt0 extraction machine.\r\n\r\nWant to see it in action?\r\n\r\n=>> https://bitcoin-coinz.blogspot.com/\r\n\r\nThis is one of those things you ‚Äúwish‚Äù \r\nyou had your hands on much earlier..\r\n\r\nCheers,\r\n\r\n[Brooks]', '2024-05-02 18:18:24', '2024-05-02 18:18:24'),
(7, 'Search Engine Index', 'info@domainsubmit.info', '9154749360', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://www.domainsubmit.info/', '2024-05-02 20:40:38', '2024-05-02 20:40:38'),
(8, 'Ina Ellwood', 'ina.ellwood39@hotmail.com', '907278641', 'Create High-Quality Audioboks, Voiceover, Podcast WITHOUT Writing A Single Word', 'Dear %domain_as_name%  Members,\r\n\r\nDo you believe in the power of storytelling for xulumart.com ? Picture this: a world where any text, URL, or article can seamlessly transform into captivating audiobooks or podcasts with just a few clicks. It sounds like something out of a science fiction novel, doesn\'t it? Well, allow me to introduce you to the protagonist of this tale: Ecco.\r\n\r\n=>> https://coursiify.blogspot.com/\r\n\r\nEcco isn\'t just another AI tool; it\'s a game-changer in the realm of content creation. Powered by ChatGPT4, Ecco brings your words to life in 660 different voices and 80 languages. Whether you\'re a seasoned content creator or just starting your journey, Ecco opens doors to endless possibilities.\r\n\r\n=>> https://coursiify.blogspot.com/\r\n\r\nBut here\'s the twist: Ecco isn\'t just about creating content; it\'s about turning that content into profit. With a built-in marketplace boasting 2.3 million active users, you can effortlessly share your creations with the world and receive instant payments. Imagine the potential for your brand or business!\r\n\r\nDon\'t just take my word for it. Experience the magic of Ecco for yourself with our exclusive coupon code, Ecco5OFF. Be among the first 12 to claim your discount and unlock VIP access to additional bonuses.\r\n\r\n=>> https://coursiify.blogspot.com/\r\n\r\nClick here to embark on your storytelling adventure with Ecco. Remember, every great story has a beginning - make yours with Ecco today.\r\n\r\nWarm regards,\r\n\r\n[Ina Ellwood]', '2024-05-06 07:16:22', '2024-05-06 07:16:22'),
(9, 'Search Engine Index', 'info@domainsubmit.info', '8179157565', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://www.domainsubmit.info/', '2024-05-09 00:23:52', '2024-05-09 00:23:52'),
(10, 'Search Engine Index', 'info@domainsubmit.info', '4651622', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://www.domainsubmit.info/', '2024-05-16 06:02:56', '2024-05-16 06:02:56'),
(11, 'Rosario Ammons', 'rosario.ammons@outlook.com', '485396053', 'Ì†ΩÌ≤• Last Chance to Save! Get Your Infinite Hosting Today! Ì†ºÌæâ', 'Hey there,\r\n\r\nTired of monthly fees for xulumart.com hosting and storage? Imagine paying once for seamless hosting. Ì†ΩÌ¥•\r\n\r\nIntroducing INFINITE HUB‚Ä¶.. \r\n\r\n‚áíReady to secure your spot in Infinite Hub? Click here now! Ì†ΩÌ∫Ä\r\n\r\n=>> https://infinite-hub-hosting.blogspot.com/\r\n\r\nDon\'t forget to claim your 30% discount using coupon code \"INFINITE\" before it expires. Ì†ΩÌ≤∞\r\n\r\nInfinite Hub isn\'t just another hosting solution. It\'s a robust platform offering lightning-fast servers, minimal downtime, and everything you need for your hosting requirements. Ì†ºÌºü\r\n\r\nSwitching to Infinite Hub means:\r\n\r\nÌ†ΩÌ∫Ä Fast and reliable hosting for individuals and businesses  \r\nÌ†ΩÌ≤∞ Pay one small fee for lifetime high-speed hosting  \r\nÌ†ΩÌª†Ô∏è Access to a customizable cloud hosting platform with 1-click installation apps  \r\nÌ†ΩÌ¥ß Built-in website builder for effortless website creation  \r\nÌ†ΩÌ¥í 100% safety with SSL-encrypted connections  \r\nÌ†ΩÌµí Complete access to your websites and files with 99.999% uptime  \r\n‚öñÔ∏è Zero-risk hosting with a one-time payment for lifetime access  \r\n\r\nPlus, with our 24/7 customer support, you can maximize your lifetime earnings worry-free. Ì†ºÌæâ\r\n\r\n‚áíGrab your spot with instantaneous special bonuses for free..\r\n\r\n=>> https://infinite-hub-hosting.blogspot.com/\r\n\r\nSnatch a 30% discount with coupon code \"INFINITE\" before it\'s too late.\r\n\r\nAnd that\'s not all! During our special launch period, purchasing Infinite Hub unlocks these incredible bonuses at no extra cost:\r\n\r\nÌ†ºÌæÅ Bonus#1: Infinite Hub Apps Version - Create unlimited mobile apps for iOS & Android with our brand new 1-click cloud-based mobile app builder!  \r\nÌ†ºÌæÅ Bonus#2: Infinite Hub Puzzle Version - Generate passive income by publishing puzzle books on Amazon KPD with our 1-click app.  \r\nÌ†ºÌæÅ Bonus#3: Infinite Hub StockHub - Access the world\'s largest collection of stock images, videos, vectors, GIFs, animations, memes, and audios, along with an inbuilt image & video editor.  \r\nÌ†ºÌæÅ Bonus#4: Infinite Hub CB Site Version - Drive free buyer traffic and effortlessly create ClickBank money sites loaded with pre-made articles!  \r\nÌ†ºÌæÅ Bonus#5: Infinite Hub Jobsite Version - Build beginner-friendly, profitable job search sites in just 90 seconds, with two income streams!  \r\n\r\nBut wait, there\'s more! We\'ve also curated some amazing free bonuses to complement your Infinite Hub purchase:\r\n\r\nÌ†ºÌæÅ Content Syndication  \r\nÌ†ºÌæÅ Evergreen Lead Business  \r\nÌ†ºÌæÅ Virtual Networking Success  \r\nÌ†ºÌæÅ The Insiders Guide To Niche Research  \r\nÌ†ºÌæÅ Instant Conversion Mastery  \r\nÌ†ºÌæÅ Doubling Your Sales  \r\nÌ†ºÌæÅ Viral Marketing  \r\nÌ†ºÌæÅ 365 Power Sales Methods  \r\nÌ†ºÌæÅ Social Media Genius  \r\nÌ†ºÌæÅ Ensuring Product Quality  \r\n\r\nExclusive Bonuses:(Full Funnel)\r\n\r\n1. Ì†ΩÌ≤ù Free Membership: Join Exclusive Facebook Group for Personal Support!\r\n2. Ì†ΩÌ≤ù Live Training: Learn Six-Figure Business Secrets in Secret Live Sessions!\r\n3. Ì†ΩÌ≤ù Exile Profit: Discover How to Make $33 with Every Image Upload!\r\n4. Ì†ΩÌ≤ù Kingpin: Drive Laser-Targeted Traffic with Bridge & Landing Page Builder!\r\n5. Ì†ΩÌ≤ù VERVE: Unlock the $8 BILLION LinkedIn Loophole - Earn $500/hour with a Done-For-You System!\r\n6. Ì†ΩÌ≤ù NFT Finder: Discover and Sell Profitable NFTs in Minutes with 1-Click App!\r\n7. Ì†ΩÌ≤ù Thumbnail Creator: Design Magnetic Thumbnails for All Platforms in 3 Clicks with AI!\r\n8. Ì†ΩÌ≤ù Ai Lead Gen: Unlimited Email Marketing for Life with ChatGPT Autoresponder!\r\n9. Ì†ΩÌ≤ù AI CB profitz: Generate Free Traffic & ClickBank Money Sites with ChatGPT!\r\n10. Ì†ΩÌ≤ù GoogAi: Instant AI Answers & Creations with Google\'s Latest AI Tech!\r\n\r\nAnd don\'t forget, when you grab Infinite Hub, you\'ll receive two free OTOs:\r\n\r\nÌ†ºÌæÅ Free OTOs with Your Purchase! Ì†ºÌæÅ  \r\nOTO4 - Infinite Traffic  \r\nOTO5 - Profit Niche  \r\n\r\nSnatch a 30% discount with coupon code \"INFINITE\" before it\'s too late.\r\n\r\n‚áíDon\'t wait any longer‚Äîsecure your spot and claim your free bonuses today!\r\n\r\n=>> https://infinite-hub-hosting.blogspot.com/\r\n\r\nDon‚Äôt wait, Grab it before it ends‚Ä¶\r\n\r\nTo your success,  \r\n[Rosario Ammons]', '2024-05-17 10:35:34', '2024-05-17 10:35:34'),
(12, 'Search Engine Index', 'submissions@searchindex.site', '1158237182', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://www.domainsubmit.pro', '2024-05-23 10:13:00', '2024-05-23 10:13:00'),
(13, 'Milton Calkins', 'calkins.milton@gmail.com', '3064928936', 'Boost Your Website\'s Performance with Expert On-Page SEO Optimization!', 'Dear Xulumart,\r\n\r\nAre you looking to enhance your website\'s visibility and drive more traffic? Our agency specializes in comprehensive on-page SEO optimization services tailored for WordPress, Shopify, Wix, and Squarespace platforms. With our expertise, we can help your website rank higher in search results and attract the audience you deserve.\r\n\r\n=>> https://weareseosupremacy.blogspot.com/\r\n\r\n### Why Choose Our On-Page SEO Services?\r\n\r\n1. Customized Strategies: We develop SEO strategies specifically tailored to your website\'s platform and industry.\r\n2. Technical Excellence: Our team ensures that all technical aspects of your site, from meta tags to internal linking, are fully optimized.\r\n3. Content Optimization: We enhance your website\'s content with targeted keywords, ensuring it meets search engine guidelines.\r\n4. Performance Tracking: We provide detailed reports on your website\'s performance and the impact of our optimization efforts.\r\n\r\n=>> https://weareseosupremacy.blogspot.com/\r\n\r\n### What We Offer\r\n\r\n- Keyword Research: Identifying the best keywords to target for your niche.\r\n- Meta Tag Optimization: Crafting compelling meta titles and descriptions.\r\n- Content Enhancement: Improving the quality and relevance of your content.\r\n- Technical SEO: Addressing site speed, mobile-friendliness, and other technical factors.\r\n- Internal Linking: Structuring your site for optimal crawlability and user experience...\r\n\r\n=>> https://weareseosupremacy.blogspot.com/\r\n\r\n### Platforms We Specialize In\r\n\r\n- WordPress: Tailored SEO solutions for your WordPress site.\r\n- Shopify: Boost your online store\'s visibility and sales.\r\n- Wix: Enhance your Wix website\'s search engine ranking.\r\n- Squarespace: Optimize your Squarespace site for better traffic and engagement.\r\n\r\n### Let‚Äôs Elevate Your Online Presence!\r\n\r\nPartner with us to transform your website into a powerful marketing tool. Our proven SEO strategies will help you achieve higher search rankings, increased traffic, and more conversions.\r\n\r\nReady to get started? Contact us today to learn more about our on-page SEO optimization services and how we can help your business grow.\r\n\r\nBest regards,\r\n\r\n[Milton Calkins]', '2024-05-29 04:40:40', '2024-05-29 04:40:40'),
(14, 'Search Engine Index', 'submissions@searchindex.site', '3464943467', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://www.domainsubmit.pro', '2024-05-30 08:08:21', '2024-05-30 08:08:21'),
(15, 'TobiasKip', 'no.reply.GerhardtBonnet@gmail.com', '84374938946', 'Make the most of your products and services with the best advertising!', 'Hi-ya! xulumart.com \r\n \r\nDid you know that it is possible to send appeals utterly lawful? We submit a new unique way of sending appeals through feedback forms. \r\nBy using Communication Forms, messages are more likely to be seen as important, which reduces the chance of them being marked as spam. \r\nTr—É out our service without paying a d—ñme! \r\nWe can send up to 50,000 messages on your command. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis letter is automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2024-06-09 16:09:14', '2024-06-09 16:09:14'),
(16, 'Willie Kneebone', 'willie.kneebone20@yahoo.com', '267074787', 'xulumart.com This Secret Weapon is Getting EVERYONE Page 1 Rankings (Even Beginners!)', 'Hey Xulumart,\r\n,\r\nThere\'s a silent revolution happening online. People (even those with ZERO SEO experience! ) are crushing it on Google, dominating search results, and attracting a flood of free traffic.\r\n\r\nHow? They\'re using a secret weapon...\r\n(Don\'t worry, it\'s not some shady black-hat trick!)\r\nIntroducing SEOBUDDY AI : The key to effortless page one rankings for even the most competitive keywords.\r\n\r\nRank Now =>> https://seobuddy-ranks-any-sites.blogspot.com/\r\n\r\nHere\'s why SEOBUDDY is different:\r\n\r\nAutomatic Optimization: Our powerful AI takes care of the technical SEO mumbo jumbo, putting you at the top of search results without lifting a finger.\r\nContent Made Easy: We provide data-driven content strategies so you can attract high-converting traffic.\r\nLong-Term Success: Forget temporary spikes. [Your Solution] delivers sustainable growth that keeps your website thriving.\r\n\r\nStill skeptical?  Here\'s what real people are saying:\r\n\r\n\"SEOBuddy helped my website jump from page three to number one in just a few weeks! It\'s amazing!\" - Sarah Lee, Business Owner\r\n\"I never thought I\'d understand SEO, but SEOBuddy made it easy. Now my website gets tons of organic traffic!\" - John Smith, Entrepreneur\r\n\r\nReady to join the page one revolution?\r\n\r\nClick here to learn more =>> https://seobuddy-ranks-any-sites.blogspot.com/\r\n\r\nP.S.  Spots are limited! Don\'t wait to unlock the power of automatic page one rankings and watch your website explode with organic traffic.\r\n\r\nMake it happen today!\r\n\r\n\r\n[Willie Kneebone]', '2024-06-19 10:28:54', '2024-06-19 10:28:54'),
(17, 'Mike Dunce', 'mikedyew@gmail.com', '87793146824', 'FREE fast ranks for xulumart.com', 'Hi there \r\n \r\nJust checked your Site_name\'s baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.badlinkscleanup.com/ \r\n \r\n \r\nRegards \r\nMike Dunce\r\n \r\nDigital SEO Experts \r\nhttps://www.badlinkscleanup.com/whatsapp-us/', '2024-06-19 21:49:46', '2024-06-19 21:49:46'),
(18, 'Mike Bosworth', 'mikeneathe@gmail.com', '86739233539', 'Collaboration request', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.co/join-affiliates/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Bosworth\r\n \r\nMonkey Digital \r\nhttps://www.monkeydigital.co/whatsapp-affiliates/', '2024-06-21 12:55:10', '2024-06-21 12:55:10'),
(19, 'Mike Gilson', 'peterdyew@gmail.com', '86356145933', 'Whitehat SEO for xulumart.com', 'Hi \r\n \r\nI have just analyzed  xulumart.com for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will improve your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.co/unbeatable-seo/ \r\n \r\nRegards \r\nMike Gilson\r\n \r\nDigital X SEO Experts \r\nhttps://www.digital-x-press.co/whatsapp-us/', '2024-06-24 21:52:08', '2024-06-24 21:52:08'),
(20, 'Diana Cruz', 'ricardo.hitchcock@googlemail.com', '1234567890', NULL, 'Hey team xulumart.com,\r\n\r\nI was checking your website \"xulumart.com\" and see you have a good design and it looks nice, but it‚Äôs not ranking on Google and other major search engines.\r\n\r\nWe‚Äôre SEO Expert and we helped over 350+ businesses rank on the (1st Page on Google).\r\n\r\nIf interested, May I send you a charges & strategy?\r\n\r\nKind Regards,\r\nDiana Cruz', '2024-07-01 06:10:42', '2024-07-01 06:10:42'),
(21, 'K Paul', 'letsgetuoptimize@gmail.com', '(949) 508-0277', 'Re: Webpage & Marketing inquiries', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n? Top ranking on Google search!\r\n? Improve website clicks and views!\r\n? Increase Your Leads, clients & Revenue!\r\n\r\nI\'ll be happy to send you a free proposal and pricing list.\r\n\r\nWell wishes,\r\nK Paul\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚Äúunsubscribe‚Äù', '2024-07-02 11:35:22', '2024-07-02 11:35:22'),
(22, 'Georgia Smith', 'georgia@getonglobe.com', '(917) 310-3348', 'Re : SEO Assistance', 'Hey [xulumart.com],\r\n\r\nI was checking your website and find out you have a good design and it looks awesome, but it‚Äôs not ranking on Google and other major search engines.\r\n \r\nWe can place your website on Google\'s 1st page. Yahoo, Facebook, LinkedIn, YouTube, Instagram, Pinterest etc.).\r\n \r\nI would be pleased to provide you with \"charges,\" \"Proposals,\" details of past work!\r\n \r\nThank you,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCell: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us opt-out in.!', '2024-07-04 02:29:45', '2024-07-04 02:29:45'),
(23, 'Mike Durham', 'mikeneathe@gmail.com', '89244213282', 'NEW: semrush backlinks available on sale', 'Hello \r\nThis is Mike Durham\r\nfrom Strictly Digital \r\n \r\nLet me present to you our latest discovered from the SEO environment. \r\nWe have noticed that getting backlinks from websites that have high SEO metrics values doesn\'t always help, and in fact, what is more important is to have backlinks from sites that are actually ranking for many keywords. \r\n \r\nThus, we have built this service especially to meet these new discoveries and the results are astonishing. \r\n \r\nPlease check more details here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\n \r\n \r\nRegards, \r\nStrictly Digital SEO Team \r\n \r\nWhatsapp us for more details: \r\nhttps://www.strictlydigital.net/whatsapp-us/', '2024-07-05 04:21:57', '2024-07-05 04:21:57'),
(24, 'Mani J', 'myseoranks.com@gmail.com', '1  347 560-8971', 'One question - xulumart.com', 'Hey team,\r\n\r\nI was going through your website & I personally see a lot of potential in your website & business. \r\n\r\nWe can increase targeted views to your website so that it appears on Google\'s first page. Bing, Yahoo, AOL, etc.\r\n\r\nIf interested. May I send you a package/proposal.?\r\n\r\nWell wishes,\r\nMani J | Sr SEO consultant\r\n\r\n\r\n\r\n If you\'re not Interested in our Services, please send us \"NO Thank You\".\r\n\r\n\r\n      xulumart.com', '2024-07-05 06:15:00', '2024-07-05 06:15:00'),
(25, 'Mike Erickson', 'mikedyew@gmail.com', '83919249922', 'Social ads country traffic', 'Hello, \r\n \r\nHey, I\'m Mike from Monkey Digital. We offer a highly popular service that costs only 10$ per 5000 social ads visits. \r\n \r\nMore info:¬† \r\nhttps://www.monkey-seo.com/get-started/ \r\n \r\nTracking will be sent the same day, the advertisement goes live within a few hours, effective and cheap marketing, try it out, it will be worth every penny. \r\n \r\nRegards \r\nMonkey Digital \r\nhttps://www.monkey-seo.com/whatsapp-us/', '2024-07-08 01:11:10', '2024-07-08 01:11:10'),
(26, 'Kush', 'digitalxplode1@gmail.com', '1 469-663-1569', NULL, 'Hey xulumart.com,\r\n\r\nI hope you are doing good!\r\n\r\nI was going through your website on behalf of this email. It has a good design and it looks awesome, but it‚Äôs not ranking in top on Google and other major search engines.\r\n\r\nI‚Äôm an SEO Expert and I helped over 250 businesses rank on the (1st Page on Google). My charges are very compatible.\r\n\r\nTo enhance your website\'s visibility and ranking, consider implementing strategies such as improving on-site SEO, adding LSI keywords, monitoring technical SEO, aligning content with search intent, reducing bounce time, targeting additional keywords, publishing high-quality content.\r\n\r\nI would be happy to send you \"charges\", ‚ÄúProposal‚Äù Past work Details, \"Our Packages\", and take Complete Responsibility for improving your Presence etc.\r\n\r\nThanks & Regards,\r\nKush S\r\nSr SEO consultant\r\nPh. No: 1 469-663-1569\r\n\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚Äúopt-out‚Äù', '2024-07-08 10:39:01', '2024-07-08 10:39:01'),
(27, 'JoshuaSEx', 'no.reply.EdwardSchulz@gmail.com', '86144813413', 'Sharing comments via the feedback form.', 'What‚Äôs up? \r\n \r\nDid you know that it is possible to send business offer lawfully? We suggest a novel way of sending appeals through feedback forms. \r\nAlso, messages sent through Feedback Forms don\'t get into spam as such messages are considered to be of great importance. \r\nYou can now test out our service without having to pay. \r\nWe are able to transmit up to 50,000 messages in your name. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis letter is automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2024-07-09 11:59:27', '2024-07-09 11:59:27'),
(28, 'Jay Paul', 'webbgrow3@gmail.com', '1234567890', 'Re: Innovative Website Redevelopment Proposal', 'Dear Sir/Maam,\r\n\r\nwww.xulumart.com\r\n\r\nYour business deserves a website that\'s just as impressive. Struggling with lagging conversion or poor engagement? Using the latest technology to generate additional revenue and beat your opponents.\r\n\r\nMy team and I specialize in crafting websites that not just look good but perform even better.  \r\n\r\nWanna take that leap from \'just another website\' to a revenue machine? \r\n\r\nI would be happy to send you ‚ÄúProposal‚Äù Past work Details, \"Our Packages\"!\r\n\r\nWarm regards,\r\nJay Paul (Web Solution Manager)\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚ÄúOpt-Out‚Äù', '2024-07-14 07:07:06', '2024-07-14 07:07:06'),
(29, 'Search Engine Index', 'submissions@searchindex.site', '531135436', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregister.info/', '2024-07-14 22:03:05', '2024-07-14 22:03:05'),
(30, 'Mike Murphy', 'mikedyew@gmail.com', '84744887276', 'Improve your website`s ranks totally free', 'Hi there, \r\n \r\nWhile checking your xulumart.com for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\nIt really works, get a free backlinks clean up with us today \r\n \r\n \r\nRegards \r\nMike Murphy\r\n \r\nWhatsapp: https://www.hilkom-digital.de/whatsapp-us/', '2024-07-16 06:29:50', '2024-07-16 06:29:50'),
(31, 'Sam Morris', 'applicationdevelopment03@gmail.com', '1234567890', 'Re: Web Design & Development Services', 'Hey xulumart.com,\r\n\r\nWhile exploring your website, I devised an innovative plan to revamp it with cutting-edge technology, aiming to increase revenue and gain a competitive edge.\r\n\r\nI am a skilled web developer able to tackle nearly any challenge you present, offering services at prices accessible to most.\r\n\r\nI am pleased to provide you with \"Quotes,\" \"Proposals,\" details of past work, \"Our Packages,\" and \"Offers\"!\r\n\r\nThanks in advance,\r\nSam Morris (Business Development Executive)', '2024-07-16 16:07:35', '2024-07-16 16:07:35'),
(32, 'Search Engine Index', 'milne.bruce@hotmail.com', '5148838536', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregister.info/', '2024-07-26 10:28:45', '2024-07-26 10:28:45'),
(33, 'Mike Austin', 'peterdyew@gmail.com', '85972641852', 'Whitehat SEO for xulumart.com', 'Good Day \r\n \r\nI have just took a look on your SEO for  xulumart.com for  the current search visibility and saw that your website could use a push. \r\n \r\nWe will improve your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digitalxpresscom.net/monthly-seo/ \r\n \r\nRegards \r\nMike Austin\r\n \r\nDigital X SEO Experts \r\nhttps://www.digitalxpresscom.net/whatsapp-us/', '2024-07-26 10:35:04', '2024-07-26 10:35:04'),
(34, 'Search Engine Index', 'arturo.capra@outlook.com', '643390096', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregister.info/', '2024-07-28 08:59:08', '2024-07-28 08:59:08'),
(35, 'Maricela Muhammad', 'muhammad.maricela@msn.com', '3199073693', 'Discover the Secret to Earning $5,000/Week Without Any Effort! Ì†ΩÌ∫Ä', 'Hi Xulumart,\r\n\r\nAre you ready to dive into a revolutionary way of earning passive income? Introducing Auto-Affiliate AI ‚Äì the only automated affiliate system that can generate $5,000/week without sales funnels, email marketing, or advertising.\r\n\r\n=>>> https://auto-affiliate-ai.blogspot.com\r\n\r\nÌ†ΩÌ¥π Zero technical skills required.\r\nÌ†ΩÌ¥π Run your business in just 2 hours per week.\r\nÌ†ΩÌ¥π All traffic comes from free sources.\r\n\r\nI‚Äôve taken the fastest, most beginner-friendly commission strategy and trained a ChatGPT system to implement it all for you. Imagine earning money while you sleep, with everything handled by AI!\r\n\r\nCurious to see how it works? Click here to watch a live demo.\r\n\r\n=>>> https://auto-affiliate-ai.blogspot.com\r\n\r\nDon\'t miss out on this chance to transform your financial future!\r\n\r\nBest,\r\n[Maricela Muhammad]', '2024-07-31 01:09:00', '2024-07-31 01:09:00'),
(36, 'Mike Goodman', 'mikeneathe@gmail.com', '88118881796', 'NEW: semrush backlinks available on sale', 'Hello \r\nThis is Mike Goodman\r\nfrom Strictly Digital \r\n \r\nLet me present to you our latest discovered from the SEO environment. \r\nWe have noticed that getting backlinks from websites that have high SEO metrics values doesn\'t always help, and in fact, what is more important is to have backlinks from sites that are actually ranking for many keywords. \r\n \r\nThus, we have built this service especially to meet these new discoveries and the results are astonishing. \r\n \r\nPlease check more details here: \r\nhttps://www.strictly-digital.net/semrush-backlinks/ \r\n \r\n \r\n \r\nRegards, \r\nStrictly Digital SEO Team \r\n \r\nWhatsapp us for more details: \r\nhttps://www.strictly-digital.net/whatsapp-us/', '2024-07-31 01:33:59', '2024-07-31 01:33:59'),
(37, 'Mike Edwards', 'mikedyew@gmail.com', '87177777196', 'Increase rankings with a SEO friendly web design', 'Hi there \r\nI just checked xulumart.com ranks and am sorry to bring this up, but it lacks in many areas. \r\n \r\nUnfortunately, building a bunch of links won\'t solve the issue in this case, and a more comprehensive strategy is required. Google has undergone significant changes over the past year, making it nearly impossible to compete for favorable rankings without a well-designed website. \r\n \r\nWe recommend a search engine-friendly website layout to resolve all issues and propel your site to the top. \r\n \r\nYou can check more details here:https://www.speed-seo.org/web-design/ \r\n \r\nThanks for your consideration \r\nMike Edwards\r\nSpeed Designs \r\nhttps://www.speed-seo.org/whatsapp-us/', '2024-08-06 03:16:33', '2024-08-06 03:16:33'),
(38, 'Search Engine Index', 'longstreet.dino@googlemail.com', '7825700848', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregistry.net/', '2024-08-07 10:58:53', '2024-08-07 10:58:53'),
(39, 'Nitin Chaudhary', 'sales@rankinghat.co', '(209) 813-5119', 'Re: SEO - Results', 'Hello there,\r\n\r\nYour website\'s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I\'ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site \"www.xulumart.com\", though, I noticed some mistakes that you\'ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results.\r\n\r\nWould you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIf this is something you are interested in, then allow me to send you a No Obligation Audit Report for your review. We will fix those errors with no extra cost if you choose any one of our monthly marketing plans.\r\n\r\nHave a nice day!\r\n\r\nRegards,\r\nNitin Chaudhary | International Project Manager                                                    \r\nEmail:- sales@rankinghat.co            \r\nContact Number:- +1- (209) 813-5119', '2024-08-07 20:51:33', '2024-08-07 20:51:33'),
(40, 'Mike Walkman', 'mikedyew@gmail.com', '85561845949', 'Social ads country traffic', 'Hello, \r\n \r\nHey, I\'m Mike from Monkey Digital. We offer a highly popular service that costs only 10$ per 5000 social ads visits. \r\n \r\nMore info:¬† \r\nhttps://www.monkey-seo.com/get-started/ \r\n \r\nTracking will be sent the same day, the advertisement goes live within a few hours, effective and cheap marketing, try it out, it will be worth every penny. \r\n \r\nRegards \r\nMonkey Digital \r\nhttps://www.monkey-seo.com/whatsapp-us/', '2024-08-08 05:37:39', '2024-08-08 05:37:39'),
(41, 'Georgia Smith', 'georgia@getonglobe.com', '(917) 310-3348', 'Re: Want to more clients and customers?', 'Hey [xulumart.com],\r\n\r\nI was checking your website and find out you have a good design and it looks awesome, but it‚Äôs not ranking on Google and other major search engines.\r\n \r\nWe can place your website on Google\'s 1st page. Yahoo, Facebook, LinkedIn, YouTube, Instagram, Pinterest etc.).\r\n \r\nI would be pleased to provide you with \"charges,\" \"Proposals,\" details of past work!\r\n \r\nThank you,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCell: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us \"opt-out\"', '2024-08-08 11:13:24', '2024-08-08 11:13:24'),
(42, 'Georgia Smith', 'georgia@getonglobe.com', '(917) 310-3348', 'SEO expansion for website', 'Hey [xulumart.com],\r\n\r\nI was checking your website and find out you have a good design and it looks awesome, but it‚Äôs not ranking on Google and other major search engines.\r\n \r\nWe can place your website on Google\'s 1st page. Yahoo, Facebook, LinkedIn, YouTube, Instagram, Pinterest etc.).\r\n \r\nI would be pleased to provide you with \"charges,\" \"Proposals,\" details of past work!\r\n \r\nThank you,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCell: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us  \"opt-out\"', '2024-08-09 01:43:01', '2024-08-09 01:43:01'),
(43, 'Georgia Smith', 'georgia@getonglobe.com', '(917) 310-3348', 'Re: The visibility and SEO of your website', 'Hey [xulumart.com],\r\n\r\nI was checking your website and find out you have a good design and it looks awesome, but it‚Äôs not ranking on Google and other major search engines.\r\n \r\nWe can place your website on Google\'s 1st page. Yahoo, Facebook, LinkedIn, YouTube, Instagram, Pinterest etc.).\r\n \r\nI would be pleased to provide you with \"charges,\" \"Proposals,\" details of past work!\r\n \r\nThank you,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCell: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us \"opt-out\"', '2024-08-09 04:31:15', '2024-08-09 04:31:15'),
(44, 'Mani J', 'myseoranks.com@gmail.com', '1 347 560 8971', NULL, 'Greeting of the day,\r\n\r\nwww.xulumart.com\r\n \r\nI was checking your website and saw you have a good design and it looks awesome, but it\'s  not ranking on Google and other major search engines.\r\n \r\nWith your permission I would like to send you a SEO Report with Charges showing you a few things to greatly improve these website/keyword search results.\r\n \r\nThese things are not difficult, and my report will be very specific.\r\n \r\nIt will show you exactly what needs to be done to move you up in the rankings dramatically. \r\n \r\nIf interested kindly share your phone number with suitaable time to call you!\r\n \r\nThanks \r\nMani J\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚ÄúNo thank you‚Äù', '2024-08-09 04:38:30', '2024-08-09 04:38:30'),
(45, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '(267) 972-1898', 'Re: Drive more qualified traffic', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nLet me know if you are interested, then I can send our Packages and Pricelist\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let\'s Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: (267) 972-1898', '2024-08-09 06:44:26', '2024-08-09 06:44:26'),
(46, 'Bemi Brooks', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: Do you want to manage your website?', 'Hi there \"xulumart.com\"\r\n\r\n\"I just wanted to know if you require a better solution to manage SEO, SMO, SMM, PPC Campaigns, keyword research, reporting etc.\"\r\n\r\nWe can increase targeted traffic to your website so that it appears on Google\'s first page. Bing, Yahoo, AOL, etc.\r\n\r\nDo you want to appear on the front page, then?\r\n\r\nNote: - Please give us your phone number/ WhatsApp so that we can connect quickly to discuss it.\r\n\r\nKind Regards\r\nBemi Brook', '2024-08-09 10:09:12', '2024-08-09 10:09:12'),
(47, 'Georgia Smith', 'georgia@getonglobe.com', '(917) 310-3348', 'Re: The visibility and SEO of your website', 'Hey [xulumart.com],\r\n\r\nI was checking your website and find out you have a good design and it looks awesome, but it‚Äôs not ranking on Google and other major search engines.\r\n \r\nWe can place your website on Google\'s 1st page. Yahoo, Facebook, LinkedIn, YouTube, Instagram, Pinterest etc.).\r\n \r\nI would be pleased to provide you with \"charges,\" \"Proposals,\" details of past work!\r\n \r\nThank you,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCell: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us \"opt-out\"', '2024-08-09 14:01:22', '2024-08-09 14:01:22'),
(48, 'Mani J', 'myseoranks.com@gmail.com', '1 347 560 8971', 'Re: Increase traffic to your website', 'Greeting of the day,\r\n\r\nwww.xulumart.com\r\n \r\nI was checking your website and saw you have a good design and it looks awesome, but it\'s  not ranking on Google and other major search engines.\r\n \r\nWith your permission I would like to send you a SEO Report with Charges showing you a few things to greatly improve these website/keyword search results.\r\n \r\nThese things are not difficult, and my report will be very specific.\r\n \r\nIt will show you exactly what needs to be done to move you up in the rankings dramatically. \r\n \r\nIf interested. kindly share your phone number with suitaable time to call you!\r\n \r\nThanks \r\nMani J\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚ÄúNo thank you‚Äù', '2024-08-09 15:13:34', '2024-08-09 15:13:34'),
(49, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '(267) 972-1898', 'Re: Drive more qualified traffic', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nLet me know if you are interested, then I can send our Packages and Pricelist\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let\'s Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: (267) 972-1898', '2024-08-11 02:44:12', '2024-08-11 02:44:12'),
(50, 'Georgia Smith', 'georgia@getonglobe.com', '(917) 310-3348', 'Re: The visibility and SEO of your website', 'Hey [xulumart.com],\r\n\r\nI was checking your website and find out you have a good design and it looks awesome, but it‚Äôs not ranking on Google and other major search engines.\r\n \r\nWe can place your website on Google\'s 1st page. Yahoo, Facebook, LinkedIn, YouTube, Instagram, Pinterest etc.).\r\n \r\nI would be pleased to provide you with \"charges,\" \"Proposals,\" details of past work!\r\n \r\nThank you,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCell: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us  \"opt-out\"', '2024-08-11 05:20:06', '2024-08-11 05:20:06'),
(51, 'Georgia Smith', 'georgia@getonglobe.com', '(917) 310-3348', 'Re: Increase SEO and Driving Online Presence', 'Hey [xulumart.com],\r\n\r\nI was checking your website and find out you have a good design and it looks awesome, but it‚Äôs not ranking on Google and other major search engines.\r\n \r\nWe can place your website on Google\'s 1st page. Yahoo, Facebook, LinkedIn, YouTube, Instagram, Pinterest etc.).\r\n \r\nI would be pleased to provide you with \"charges,\" \"Proposals,\" details of past work!\r\n \r\nThank you,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCell: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us  \"opt-out\"', '2024-08-11 06:50:17', '2024-08-11 06:50:17'),
(52, 'Amit Sharma', 'webpageoptimized@gmail.com', '213 262 0124', 'Re: Do you want to manage your website?', 'Hey,\r\n\r\nAs I can see you have a newly launched website (xulumart.com)!\r\n\r\n\"Do you want to Optimize your website for search engines with an SEO setup, all for a one-time setup cost?\"\r\n\r\nIf interested, just hit \"Reply\". \r\n\r\nRegards,\r\nAmit Sharma | Sr Business Developer\r\nWebpageoptimized.com\r\nWhatsApp - +1 213 262 0124', '2024-08-12 01:17:21', '2024-08-12 01:17:21'),
(53, 'Amit Sharma', 'webpageoptimized@gmail.com', '213 262 0124', 'Re: Do you want to manage your website?', 'Hey,\r\n\r\nAs I can see you have a newly launched website (xulumart.com)!\r\n\r\n\"Do you want to Optimize your website for search engines with an SEO setup, all for a one-time setup cost?\"\r\n\r\nIf interested, just hit \"Reply\". \r\n\r\nRegards,\r\nAmit Sharma | Sr Business Developer\r\nWebpageoptimized.com\r\nWhatsApp - +1 213 262 0124', '2024-08-12 04:26:25', '2024-08-12 04:26:25'),
(54, 'Mani J', 'info@myseoranks.com', '1 347 560 8971', NULL, 'Greeting of the day,\r\n\r\nwww.xulumart.com\r\n \r\nI was checking your website and saw you have a good design and it looks awesome, but it\'s  not ranking on Google and other major search engines.\r\n \r\nWith your permission I would like to send you a SEO Report with Charges showing you a few things to greatly improve these website/keyword search results.\r\n \r\nThese things are not difficult, and my report will be very specific.\r\n \r\nIt will show you exactly what needs to be done to move you up in the rankings dramatically. \r\n \r\nIf interested kindly share your phone number with suitaable time to call you!\r\n \r\nThanks \r\nMani J\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚ÄúNo thank you‚Äù', '2024-08-13 02:13:46', '2024-08-13 02:13:46'),
(55, 'Georgia Smith', 'georgia@getonglobe.com', '(917) 310-3348', 'Re: SEO - Results', 'Hey [xulumart.com],\r\n\r\nI was checking your website and find out you have a good design and it looks awesome, but it‚Äôs not ranking on Google and other major search engines.\r\n \r\nWe can place your website on Google\'s 1st page. Yahoo, Facebook, LinkedIn, YouTube, Instagram, Pinterest etc.).\r\n \r\nI would be pleased to provide you with \"charges,\" \"Proposals,\" details of past work!\r\n \r\nThank you,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCell: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us  \"opt-out\"', '2024-08-13 07:08:05', '2024-08-13 07:08:05'),
(56, 'Georgia Smith', 'georgia@getonglobe.com', '(917) 310-3348', 'Re: Increase traffic to your website', 'Hey [xulumart.com],\r\n\r\nI was checking your website and find out you have a good design and it looks awesome, but it‚Äôs not ranking on Google and other major search engines.\r\n \r\nWe can place your website on Google\'s 1st page. Yahoo, Facebook, LinkedIn, YouTube, Instagram, Pinterest etc.).\r\n \r\nI would be pleased to provide you with \"charges,\" \"Proposals,\" details of past work!\r\n \r\nThank you,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCell: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us  \"opt-out\"', '2024-08-13 09:19:49', '2024-08-13 09:19:49'),
(57, 'Sam Morris', 'applicationdevelopment03@gmail.com', '1234567890', 'Re: Web Design & Development Services', 'Hi\r\n\r\nAs I can see you have a newly launched website (xulumart.com)!\r\n\r\nI\'m reaching out to see if there is anything that would like to upgrade, maintenance, or redesign on your site with more search engine friendly? \r\n\r\nI am a web designer / developer that can do just about anything you can imagine at Let me know what you think.\r\n\r\nI\'d like to work with you on your website, see what it would be like for us to revamp/redesign your current design/build.\r\n\r\nI\'m waiting for your prompt reply.\r\n\r\nThanks,\r\nSam\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us \"opt-out\"', '2024-08-13 11:50:53', '2024-08-13 11:50:53'),
(58, 'Georgia Smith', 'georgia@getonglobe.com', '(917) 310-3348', 'Re: Webpage & Marketing inquiries', 'Hey [xulumart.com],\r\n\r\nI was checking your website and find out you have a good design and it looks awesome, but it‚Äôs not ranking on Google and other major search engines.\r\n \r\nWe can place your website on Google\'s 1st page. Yahoo, Facebook, LinkedIn, YouTube, Instagram, Pinterest etc.).\r\n \r\nI would be pleased to provide you with \"charges,\" \"Proposals,\" details of past work!\r\n \r\nThank you,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCell: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us  \"opt-out\"', '2024-08-14 01:06:43', '2024-08-14 01:06:43'),
(59, 'Sam Morris', 'applicationdevelopment03@gmail.com', '1234567890', 'Re: Web Design & Development Services', 'Hey,\r\n\r\nAs I can see you have a newly launched website (xulumart.com)!\r\n\r\nI\'m reaching out to see if there is anything that would like to upgrade, maintenance, or redesign on your site with more search engine friendly? \r\n\r\nI am a web designer / developer that can do just about anything you can imagine at Let me know what you think.\r\n\r\nI\'d like to work with you on your website, see what it would be like for us to revamp/redesign your current design/build.\r\n\r\nI\'m waiting for your prompt reply.\r\n\r\nThanks,\r\nSam Morris\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us \"opt-out\"', '2024-08-14 01:47:04', '2024-08-14 01:47:04'),
(60, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '(267)¬†972-1898', 'Re: SEO Packages and Costs', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n? Top ranking on Google search!\r\n? Improve website clicks and views!\r\n? Increase Your Leads, clients & Revenue!\r\n\r\nIf interested, May I send you a proposal & charges?\r\n\r\nRegards,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone:¬†(267)¬†972-1898\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚Äúunsubscribe‚Äù', '2024-08-14 11:32:01', '2024-08-14 11:32:01');
INSERT INTO `queries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(61, 'Mike Philips', 'mikedyew@gmail.com', '85799113972', 'Improve your website`s ranks totally free', 'Hi there, \r\n \r\nWhile checking your xulumart.com for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.freeseocleanups.com/get-started/ \r\n \r\nIt really works, get a free backlinks clean up with us today \r\n \r\n \r\nRegards \r\nMike Philips\r\n \r\nWhatsapp:https://www.freeseocleanups.com/whatapp-us/', '2024-08-14 16:21:01', '2024-08-14 16:21:01'),
(62, 'Mike Fleming', 'mikeneathe@gmail.com', '87633468434', 'Collaboration request', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.earn35percent.com/get-started/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Fleming\r\n \r\nMonkey Digital \r\nhttps://www.earn35percent.com/whatsapp-affiliates/', '2024-08-15 02:28:15', '2024-08-15 02:28:15'),
(63, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Re: Drive more qualified traffic', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nI can send you more details on the packages/Portfolio/past work details.\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: 9497671355\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚Äúunsubscribe‚Äù', '2024-08-16 08:59:16', '2024-08-16 08:59:16'),
(64, 'Sam Morris', 'applicationdevelopment03@gmail.com', '1234567890', 'Re: Web Design & Development Services', 'Hey,\r\n\r\nAs I can see you have a newly launched website (xulumart.com)!\r\n\r\nI\'m reaching out to see if there is anything that would like to upgrade, maintenance, or redesign on your site with more search engine friendly? \r\n\r\nI am a web designer / developer that can do just about anything you can imagine at Let me know what you think.\r\n\r\nI\'d like to work with you on your website, see what it would be like for us to revamp/redesign your current design/build.\r\n\r\nI\'m waiting for your prompt reply.\r\n\r\nThanks,\r\nSam Morris\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us \"opt-out\"', '2024-08-18 02:00:00', '2024-08-18 02:00:00'),
(65, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Re: SEO Packages and Costs', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n? Top ranking on Google search!\r\n? Improve website clicks and views!\r\n? Increase Your Leads, clients & Revenue!\r\n\r\nIf interested, May I send you a proposal & charges?\r\n\r\nRegards,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone:¬†9497671355\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚Äúunsubscribe‚Äù', '2024-08-18 07:24:47', '2024-08-18 07:24:47'),
(66, 'Mike Scott', 'mikeneathe@gmail.com', '87655285598', 'NEW: semrush backlinks available on sale', 'Hello \r\nThis is Mike Scott\r\nfrom Strictly Digital \r\n \r\nLet me present to you our latest discovered from the SEO environment. \r\nWe have noticed that getting backlinks from websites that have high SEO metrics values doesn\'t always help, and in fact, what is more important is to have backlinks from sites that are actually ranking for many keywords. \r\n \r\nThus, we have built this service especially to meet these new discoveries and the results are astonishing. \r\n \r\nPlease check more details here: \r\nhttps://www.strictlyseonet.com/semrush-backlinks/ \r\n \r\n \r\n \r\nRegards, \r\nStrictly Digital SEO Team \r\n \r\nWhatsapp us for more details: \r\nhttps://www.strictlyseonet.com/whatsapp-us/', '2024-08-19 17:39:14', '2024-08-19 17:39:14'),
(67, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Re: Let\'s Improve Your SEO Rankings!', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nLet me know if you are interested, then I can send our Packages and Pricelist\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: 9497671355\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚Äúunsubscribe‚Äù', '2024-08-20 09:25:46', '2024-08-20 09:25:46'),
(68, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Re: Drive more qualified traffic', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nLet me know if you are interested, then I can send our Packages and Pricelist\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let\'s Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: 9497671355', '2024-08-20 12:50:24', '2024-08-20 12:50:24'),
(69, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Re: Drive more qualified traffic', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nLet me know if you are interested, then I can send our Packages and Pricelist\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let\'s Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: 9497671355', '2024-08-21 01:25:02', '2024-08-21 01:25:02'),
(70, 'Sam Morris', 'applicationdevelopment03@gmail.com', '1234567890', 'Re: Web Design & Development Services', 'Hi,\r\n\r\nAs I can see you have a newly launched website (xulumart.com)!\r\n\r\nI\'m reaching out to see if there is anything that would like to upgrade, maintenance, or redesign on your site with more search engine friendly? \r\n\r\nI am a web designer / developer that can do just about anything you can imagine at Let me know what you think.\r\n\r\nI\'d like to work with you on your website, see what it would be like for us to revamp/redesign your current design/build.\r\n\r\nI\'m waiting for your prompt reply.\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚ÄúOpt-Out‚Äù', '2024-08-21 02:09:41', '2024-08-21 02:09:41'),
(71, 'Sam Morris', 'applicationdevelopment03@gmail.com', '1234567890', 'Re: Web Design & Development Services', 'Hi\r\n\r\nAs I can see you have a newly launched website (xulumart.com)!\r\n\r\nI\'m reaching out to see if there is anything that would like to upgrade, maintenance, or redesign on your site with more search engine friendly? \r\n\r\nI am a web designer / developer that can do just about anything you can imagine at Let me know what you think.\r\n\r\nI\'d like to work with you on your website, see what it would be like for us to revamp/redesign your current design/build.\r\n\r\nI\'m waiting for your prompt reply.\r\n\r\nThanks,\r\nSam\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you‚Äôre not Interested in our Services, send us \"opt-out\"', '2024-08-21 10:33:41', '2024-08-21 10:33:41'),
(72, 'Mike Gilson', 'peterdyew@gmail.com', '85283725391', 'Whitehat SEO for xulumart.com', 'Howdy \r\n \r\nI have just checked  xulumart.com for the ranking keywords and saw that your website could use a boost. \r\n \r\nWe will increase your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digitalxpresscom.net/monthly-seo/ \r\n \r\nRegards \r\nMike Gilson\r\n \r\nDigital X SEO Experts \r\nhttps://www.digitalxpresscom.net/whatsapp-us/', '2024-08-22 06:14:53', '2024-08-22 06:14:53'),
(73, 'RaymondMaisa', 'no.reply.WalterSimonson@gmail.com', '86293377921', 'An extraordinary new technique of advertising.', 'Howdy! xulumart.com \r\n \r\nDid you know that it is possible to send proposal absolutely legal and securely? \r\nWhen such messages are sent, no personal data is used, and messages are sent to forms specifically designed to receive, process, and respond to messages and appeals. Contact Form messages are not likely to end up in spam, as they\'re recognized as important. \r\nTaste our service for free! \r\nWe will provide up to 50,000 messages for you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis letter is automatically generated. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\nWe only use chat for communication.', '2024-08-23 02:06:16', '2024-08-23 02:06:16'),
(74, 'Denaddeld', 'che.ba.ku.lin.a.ka.rase.v.na.@gmail.com', '82912719869', 'Mysimba - Quick and Easy Weight Lass', 'Mysimba - Quick and Easy Weight Lass \r\n \r\nMysimba is a medicine used along with diet and exercise to help manage weight in adults: \r\n \r\nwho are obese (have a body-mass index - BMI - of 30 or more); \r\nwho are overweight (have a BMI between 27 and 30) and have weight-related complications such as diabetes, abnormally high levels of fat in the blood, or high blood pressure. \r\nBMI is a measurement that indicates body weight relative to height. \r\n \r\nMysimba contains the active substances naltrexone and bupropion. \r\n \r\nhttps://cutt.ly/RezL73vz', '2024-08-25 18:26:22', '2024-08-25 18:26:22'),
(75, 'Brianna Belton', 'pageranktechnology@gmail.com', '1201201200', 'Re: Website Design & Development', 'Greeting of the day,\r\n\r\nwww.xulumart.com\r\n \r\nWe offer the following Services at affordable Cost:\r\n\r\nLike: - Website Design, Graphic Design & Re-Design. Web Development, Mobile Apps Development or want some additional features with latest technological trends?\r\n\r\nAre you thinking to upgrade or build new website/mobile app? Or if you want to get idea, how much it would cost you?\r\n\r\nReply me back with your requirements.\r\n\r\nKindest Regards,\r\nBrianna Belton\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚ÄúNo thank you‚Äù', '2024-08-26 02:32:44', '2024-08-26 02:32:44'),
(76, 'Amit Sharma', 'webpageoptimized@gmail.com', '213 262 0124', 'Re: Do you want to manage your website?', 'Hello xulumart.com ,\r\n\r\nWe can help you rank your website number 1 in Google which would make your website a lead machine for your business.\r\n\r\nWe can increase targeted traffic to your website [xulumart.com] so that it appears on Google\'s first page. Bing, Yahoo, AOL, etc.\r\n\r\nWhat can I offer to change your mind? I\'m confident we can help our businesses grow.\r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-08-27 07:56:41', '2024-08-27 07:56:41'),
(77, 'Search Engine Index', 'gregorio.talley@googlemail.com', '3202924157', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregistry.net/', '2024-08-27 11:43:51', '2024-08-27 11:43:51'),
(78, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Re: SEO Services', 'Hey xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n? Top ranking on Google search!\r\n? Improve website clicks and views!\r\n? Increase Your Leads, clients & Revenue!\r\n\r\nIf you are interested, I will send you our SEO Packages and Cost.\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone:¬†9497671355\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚Äúunsubscribe‚Äù', '2024-08-27 14:42:54', '2024-08-27 14:42:54'),
(79, 'Amit Sharma', 'webpageoptimized@gmail.com', '213 262 0124', 'Re: Do you want to manage your website?', 'Hello xulumart.com ,\r\n\r\nDo you want? Grow your business by SEO(search engine optimization) services.\r\n\r\nWe can increase targeted traffic to your website [xulumart.com] so that it appears on Google\'s first page. Bing, Yahoo, AOL, etc.\r\n\r\nWhat can I offer to change your mind? I\'m confident we can help our businesses grow.\r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-08-28 01:06:47', '2024-08-28 01:06:47'),
(80, 'Bemi Brooks', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: Do you want to manage your website?', 'Hello xulumart.com ,\r\n\r\nI came across your contact information on Google.com, and after looking at your website, I saw that it has a beautiful design, but that it does not rank well on Google, AOL, Yahoo, or Bing. \r\n\r\nWe can increase targeted traffic to your website [xulumart.com] so that it appears on Google\'s first page. Bing, Yahoo, AOL, etc.\r\n\r\nI\'d be glad to go over our plan with you.\r\nPlease give us your phone number/ WhatsApp so that we can connect quickly to discuss it.\r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-08-28 03:41:42', '2024-08-28 03:41:42'),
(81, 'Bemi Brook', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-08-28 05:42:03', '2024-08-28 05:42:03'),
(82, 'Bemi Brook', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-08-29 07:56:38', '2024-08-29 07:56:38'),
(83, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'SEO expansion for website', 'Hey xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n? Top ranking on Google search!\r\n? Improve website clicks and views!\r\n? Increase Your Leads, clients & Revenue!\r\n\r\nI\'ll be happy to send you a free proposal and pricing list.\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone:¬†9497671355\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚Äúunsubscribe‚Äù', '2024-08-29 14:06:01', '2024-08-29 14:06:01'),
(84, 'Bemi Brook', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-08-30 05:10:25', '2024-08-30 05:10:25'),
(85, 'Bemi Brooks', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-08-30 09:25:28', '2024-08-30 09:25:28'),
(86, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Re: SEO Packages and Costs', 'Hey xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n? Top ranking on Google search!\r\n? Improve website clicks and views!\r\n? Increase Your Leads, clients & Revenue!\r\n\r\nInterested? Please provide your name, contact information, and email.\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone:¬†9497671355\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚Äúunsubscribe‚Äù', '2024-08-30 14:01:50', '2024-08-30 14:01:50'),
(87, 'Bemi Brook', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-09-01 05:31:42', '2024-09-01 05:31:42'),
(88, 'Brianna Belton', 'pageranktechnology@gmail.com', '1201201200', 'Re: Website Design & Development', 'Greeting of the day,\r\n\r\nwww.xulumart.com\r\n \r\nWe offer the following Services at affordable Cost:\r\n\r\nLike: - Website Design, Graphic Design & Re-Design. Web Development, Mobile Apps Development or want some additional features with latest technological trends?\r\n\r\nAre you thinking to upgrade or build new website/mobile app? Or if you want to get idea, how much it would cost you?\r\n\r\nReply me back with your requirements.\r\n\r\nKindest Regards,\r\nBrianna Belton\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚ÄúNo thank you‚Äù', '2024-09-02 03:32:59', '2024-09-02 03:32:59'),
(89, 'Nitin Chaudhary', 'sales@rankinghat.co', '(209) 813-5119', 'Re: Webpage & Marketing inquiries', 'Hello there,\r\n\r\nYour website\'s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I\'ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site \"www.xulumart.com\", though, I noticed some mistakes that you\'ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results.\r\n\r\nWould you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIf this is something you are interested in, then allow me to send you a No Obligation Audit Report for your review. We will fix those errors with no extra cost if you choose any one of our monthly marketing plans.\r\n\r\nHave a nice day!\r\n\r\nRegards,\r\nNitin Chaudhary | International Project Manager                                                    \r\nEmail:- sales@rankinghat.co            \r\nContact Number:- +1- (209) 813-5119', '2024-09-03 01:49:24', '2024-09-03 01:49:24'),
(90, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Hi xulumart.com Admin!', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nInterested? Please provide your name, contact information, and email.\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: 9497671355', '2024-09-03 02:30:55', '2024-09-03 02:30:55'),
(91, 'Bemi Brooks', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-09-03 04:14:31', '2024-09-03 04:14:31'),
(92, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Hello xulumart.com Webmaster!', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nInterested? Please provide your name, contact information, and email.\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: 9497671355', '2024-09-03 06:57:21', '2024-09-03 06:57:21'),
(93, 'Bemi Brooks', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-09-03 08:53:28', '2024-09-03 08:53:28'),
(94, 'Bemi Brooks', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-09-04 04:53:44', '2024-09-04 04:53:44'),
(95, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Hello xulumart.com Owner!', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nInterested? Please provide your name, contact information, and email.\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: 9497671355', '2024-09-05 01:21:18', '2024-09-05 01:21:18'),
(96, 'Bemi Brooks', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-09-05 05:16:35', '2024-09-05 05:16:35'),
(97, 'Mike Bradberry', 'mikedyew@gmail.com', '84255735633', 'Social ads country traffic', 'Hello, \r\n \r\nHey, I\'m Mike from Monkey Digital. We offer a highly popular service that costs only 10$ per 5000 social ads visits. \r\n \r\nMore info:¬† \r\nhttps://www.seomonkey.net/country-visits/ \r\n \r\nTracking will be sent the same day, the advertisement goes live within a few hours, effective and cheap marketing, try it out, it will be worth every penny. \r\n \r\nRegards \r\nMonkey Digital \r\nhttps://www.seomonkey.net/whatsapp-us/', '2024-09-05 05:28:14', '2024-09-05 05:28:14'),
(98, 'Greg Di Bruno', 'letsgetuoptimize@gmail.com', '9497671355', 'Re: Want to attract more clients and customers?', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n? Top ranking on Google search!\r\n? Improve website clicks and views!\r\n? Increase Your Leads, clients & Revenue!\r\n\r\nIf interested, May I send you a proposal & charges?\r\n\r\nRegards,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone:¬†9497671355\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚Äúunsubscribe‚Äù', '2024-09-05 07:50:52', '2024-09-05 07:50:52'),
(99, 'Bemi Brook', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-09-05 08:09:08', '2024-09-05 08:09:08'),
(100, 'Greg Di Bruno', 'info@letsgetuoptimize.com', '9497671355', 'Hi xulumart.com Admin!', 'Hey team xulumart.com,\r\n\r\nI was looking at your website and realized that despite having a good design; it was not ranking high on any of the Search Engines (Google, Yahoo & Bing) for most of the keywords related to your business.\r\n\r\nWe can place your website on Google\'s 1st page.\r\n\r\n*  Top ranking on Google search!\r\n*  Improve website clicks and views!\r\n*  Increase Your Leads, clients & Revenue!\r\n\r\nInterested? Please provide your name, contact information, and email.\r\n\r\nWell wishes,\r\nGreg Di Bruno\r\nSenior Services Consultant - Let‚Äôs Get You Optimize\r\nEmail: info@letsgetuoptimize.com\r\nPhone: 9497671355', '2024-09-05 13:51:33', '2024-09-05 13:51:33'),
(101, 'Bemi Brook', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-09-06 06:42:55', '2024-09-06 06:42:55'),
(102, 'Brianna Belton', 'pageranktechnology@gmail.com', '1201201200', 'Re: Website Design & Development', 'Greeting of the day,\r\n\r\nwww.xulumart.com\r\n \r\nWe offer the following Services at affordable Cost:\r\n\r\nLike: - Website Design, Graphic Design & Re-Design. Web Development, Mobile Apps Development or want some additional features with latest technological trends?\r\n\r\nAre you thinking to upgrade or build new website/mobile app? Or if you want to get idea, how much it would cost you?\r\n\r\nReply me back with your requirements.\r\n\r\nKindest Regards,\r\nBrianna Belton\r\n\r\n\r\n\r\n\r\n\r\nIf you don‚Äôt want me to contact you again about this, reply with ‚ÄúNo thank you‚Äù', '2024-09-06 12:10:25', '2024-09-06 12:10:25'),
(103, 'Mike Taylor', 'mikedyew@gmail.com', '84629363327', 'Increase rankings with a SEO friendly web design', 'Hi there \r\nI just checked xulumart.com ranks and am sorry to bring this up, but it lacks in many areas. \r\n \r\nUnfortunately, building a bunch of links won\'t solve the issue in this case, and a more comprehensive strategy is required. Google has undergone significant changes over the past year, making it nearly impossible to compete for favorable rankings without a well-designed website. \r\n \r\nWe recommend a search engine-friendly website layout to resolve all issues and propel your site to the top. \r\n \r\nYou can check more details here:https://www.seo-speed.net/seo-friendly-webdesign/ \r\n \r\nThanks for your consideration \r\nMike Taylor\r\nSpeed Designs \r\nhttps://www.seo-speed.net/whatapp-us/', '2024-09-06 17:10:17', '2024-09-06 17:10:17'),
(104, 'DavidJeace', 'kayleighbpsteamship@gmail.com', '86995454261', 'Hello    writing about your the price', 'Hi, ·Éõ·Éò·Éú·Éì·Éù·Éì·Éê ·Éï·Éò·É™·Éù·Éì·Éî ·Éó·É•·Éï·Éî·Éú·Éò ·É§·Éê·É°·Éò.', '2024-09-07 00:37:00', '2024-09-07 00:37:00'),
(105, 'Bemi Brook', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-09-09 04:34:31', '2024-09-09 04:34:31'),
(106, 'Bemi Brook', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-09-09 09:16:05', '2024-09-09 09:16:05'),
(107, 'Bemi Brooks', 'bemibrooks.dev@gmail.com', '213 262 0124', 'Re: xulumart.com - One question your google organic results', 'Hello xulumart.com,\r\n\r\nWanted to increase your business, ranking, clients and customers? \r\n\r\nWould you like your company [ http://www.xulumart.com ] to be listed at the top of Google for multiple search phrases (Keywords) relevant to your products / services?\r\n\r\n1.      SEO - Full SEO Packages with Plan and Activities\r\n2.      SMO - Facebook, Twitter, LinkedIn, YouTube & Marketing etc.\r\n3.      PPC - Google Ads\r\n4.      Web Designing ‚Äì (Responsive, Re-Designing)\r\n\r\nWe will help them find you by putting you 1st page on Google with surety!\r\n\r\nLet me know if you are interested. We have some special proposal this season.\r\n\r\nI can send you more details on the packages/Portfolio/past work details. \r\n\r\nKind Regards\r\nBemi Brook| Sr SEO Executives\r\nWhatsApp : +1 213 262 0124\r\n\r\n\r\n\r\n\r\n\r\n If you don‚Äôt want me to contact you again about this, reply with ‚Äúno thanks‚Äù', '2024-09-10 05:32:39', '2024-09-10 05:32:39'),
(108, 'TedJeace', 'kayleighbpsteamship@gmail.com', '85794317466', 'Aloha, i write about your the price', 'Hi, ·Éõ·Éò·Éú·Éì·Éù·Éì·Éê ·Éï·Éò·É™·Éù·Éì·Éî ·Éó·É•·Éï·Éî·Éú·Éò ·É§·Éê·É°·Éò.', '2024-09-10 21:07:16', '2024-09-10 21:07:16'),
(109, 'Caroline Ashworth', 'k.ashworth@effipreneur.nl', '0031850280050', 'FYI page erro on xulumart.com', 'Hi, When I was doing reseach for a client and I noticed a small problem on Xulumart website and thought you\'d like to know. \r\n\r\nWe often use https://websitecheckhealth.com to ensure our site is in top shape and find it incredibly useful.\r\n\r\nIf you have any questions or need assistance, feel free to reach out!', '2024-09-11 13:39:47', '2024-09-11 13:39:47'),
(110, 'Mike Gustman', 'mikedyew@gmail.com', '82192485618', 'Collaboration request', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.seomonkey.net/affiliates/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Gustman\r\n \r\nMonkey Digital \r\nhttps://www.seomonkey.net/whatsapp-affiliates/', '2024-09-12 15:10:21', '2024-09-12 15:10:21'),
(111, 'Mike Higgins', 'info@professionalseocleanup.com', '84352375359', 'Improve your website`s ranks totally free', 'Hi there, \r\n \r\nWhile checking your xulumart.com for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.professionalseocleanup.com/ \r\n \r\nIt really works, get a free backlinks clean up with us today \r\n \r\n \r\nRegards \r\nMike Higgins\r\n \r\nWhatsapp:https://www.professionalseocleanup.com/whatsapp-us/ \r\nEmail us: info@professionalseocleanup.com', '2024-09-13 00:45:36', '2024-09-13 00:45:36'),
(112, 'Search Engine Index', 'tiffany.saylors@gmail.com', '883390090', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregistry.net/', '2024-09-16 11:55:18', '2024-09-16 11:55:18'),
(113, 'TedJeace', 'kayleighbpsteamship@gmail.com', '88723818275', 'Hi, i am writing about your   prices', 'Sawubona, bengifuna ukwazi intengo yakho.', '2024-09-16 17:59:13', '2024-09-16 17:59:13'),
(114, 'Louis Van Dijk', 'info@xdigital.top', '86737525976', 'Whitehat SEO for xulumart.com', 'Hi \r\n \r\nI have just verified your SEO on  xulumart.com for  the current search visibility and saw that your website could use an upgrade. \r\n \r\nWe will enhance your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.xdigital.top/unbeatable-seo/ \r\n \r\nRegards \r\nLouis Van Dijk\r\nDigital X SEO Experts \r\nhttps://www.xdigital.top/whatsapp-us/ \r\ninfo@xdigital.top', '2024-09-20 04:14:51', '2024-09-20 04:14:51'),
(115, 'Search Engine Index', 'melina.puckett@gmail.com', '796156703', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregistry.net/', '2024-09-26 11:14:55', '2024-09-26 11:14:55'),
(116, 'Shari Chatham', 'chatham.shari@outlook.com', '7818830143', 'To the xulumart.com Admin!', 'Looking to get millions of visitors to your site without high costs? For Details: http://z8dyhm.messagestoforms.xyz', '2024-10-01 17:37:55', '2024-10-01 17:37:55'),
(117, 'Edward Laurent', 'info@speedseo.top', '82593169478', 'Improve Your Website\'s Ranking with a Comprehensive Strategy', 'Hi there, \r\n \r\nI recently reviewed the rankings for xulumart.com, and I‚Äôm sorry to say that there are several areas where it\'s underperforming. \r\n \r\nUnfortunately, simply building more links won‚Äôt fix the problem. With Google‚Äôs major updates over the past year, it\'s become essential to have a well-structured, search engine-friendly website to achieve competitive rankings. \r\n \r\nWe recommend implementing a strategic website redesign to address these issues and improve your search visibility. You can find more details here: \r\nhttps://www.seofriendlydesigns.com/get-started/ \r\n \r\nThank you for considering this, \r\nEdward Laurent\r\n \r\n \r\nSpeed Designs \r\nContact Us on WhatsApp \r\nhttps://wa.link/r5quk9', '2024-10-01 22:59:26', '2024-10-01 22:59:26'),
(118, 'Search Engine Index', 'cochran.kazuko@gmail.com', '9015343931', 'Add xulumart.com to Google Search Index!', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://SearchIndexer.net/', '2024-10-05 10:47:18', '2024-10-05 10:47:18'),
(119, 'Gary Charles', 'gary-charles@dominatingkeywords.com', '8054002077', 'DominatingKeywords.com', 'Want to know how to get more traffic to your website?\r\nHere is a simple 3-step online demo:\r\n\r\n- Go to our website and click on DEMO link;\r\n- Type your website and any keyword;\r\n- Click on VIEW ONLINE DEMO and see your website banner on top of search results.\r\n\r\nInterested?\r\nIf your answer is yes then fill in the online quote and start getting tons of organic search engine traffic from your keywords.', '2024-10-12 10:27:33', '2024-10-12 10:27:33'),
(120, 'Matthew Thomas', 'no-replydyew@gmail.com', '86892521135', 'Get 10,000 Targeted Visits for Only $10!', 'Hi there, \r\n \r\nBoost your website traffic with Country Targeted Social Ads for just $10! Get 10,000 visits from your desired location and reach a highly targeted audience, perfect for driving more leads and conversions. \r\n \r\nReady to supercharge your website? Start your campaign today: \r\nhttps://www.seomonkey.net/country-visits/ \r\nOr connect with us on WhatsApp: https://wa.link/uqh66k \r\n \r\nBest regards, \r\nApe Reach Team', '2024-10-13 06:58:39', '2024-10-13 06:58:39'),
(121, 'TedJeace', 'axobajigufo34@gmail.com', '88977699357', 'Hi    writing about your   price for reseller', 'Sveiki, es gribƒìju zinƒÅt savu cenu.', '2024-10-17 22:26:57', '2024-10-17 22:26:57'),
(122, 'MD. HAFIZUL ALAM', 'hafizulalam11@gmail.com', '01521359898', 'complain', 'i am unsatisfied with your services', '2024-10-18 08:58:58', '2024-10-18 08:58:58'),
(123, 'Oliver Brown', 'info@xdigital.top', '84237226739', 'Boost Your SEO with Country Targeted Backlinks!', 'Hi there, \r\n \r\nLooking to improve your website\'s local rankings? We offer Country Targeted Backlinks to help you dominate your niche. With backlinks from high-quality, local domains, your website will see increased relevance, traffic, and authority in your chosen region. \r\n \r\nCheck out our service here: \r\nhttps://www.xdigital.top/country-backlinks/ \r\nOr chat with us on WhatsApp: https://wa.link/s6vpcy \r\n \r\nBest regards, \r\nDgital X Flow Team \r\ninfo@xdigital.top', '2024-10-19 13:25:28', '2024-10-19 13:25:28'),
(124, 'James Cook', 'jamescook312@outlook.com', '89351939335', 'URGENT loan offer at 3%', 'Dear sir/ma \r\nWe are a finance and investment company offering loans at 3% interest rate. We will be happy to make a loan available to your organisation for your project. Our terms and conditions will apply. Our term sheet/loan agreement will be sent to you for review, when we hear from you. Please reply to this email ONLY  hchoi382@gmail.com \r\n \r\nRegards. \r\nJames Cook', '2024-10-19 20:00:36', '2024-10-19 20:00:36'),
(125, 'DavidJeace', 'ibucezevuda439@gmail.com', '83936972182', 'Aloha  i write about your   price for reseller', 'Zdravo, htio sam znati va≈°u cijenu.', '2024-10-21 04:37:11', '2024-10-21 04:37:11'),
(126, 'Valeron83duh', 'menhos7@rambler.ru', '85246758761', 'Casino jackpot', 'Hello! \r\n15,000,000 Welcome Free Coins Countless AMAZING themes Try Your Luck and Play It NOW. Register here:  https://discord.gg/B5Bjg5azkF', '2024-10-23 12:56:19', '2024-10-23 12:56:19');
INSERT INTO `queries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(127, 'Lukas Jones', 'info@strictlydigital.top', '86173524439', 'Boost Your Business with High-Impact Semrush Backlinks!', 'Hi there, \r\n \r\nWant to supercharge your website\'s growth? Our Semrush Backlinks come from domains ranking for 5,000+ keywords, ensuring you get high-quality, authoritative links that will improve your SEO and help grow your business online. This is a powerful strategy to gain visibility, rank higher, and drive more traffic to your site. \r\n \r\nLearn more and order here: \r\nhttps://strictlydigital.top/semrush/ \r\nOr chat with us on WhatsApp: https://wa.link/qz8zwo \r\n \r\nBest regards, \r\nDigital Strict Team \r\ninfo@strictlydigital.top', '2024-10-24 05:38:14', '2024-10-24 05:38:14'),
(128, 'TedJeace', 'axobajigufo34@gmail.com', '86857543431', 'Hallo,   wrote about   the price for reseller', 'Salut, ech wollt √Ñre Pr√§is w√´ssen.', '2024-10-26 18:48:38', '2024-10-26 18:48:38'),
(129, 'Bakazoid', '%20sales@skyloft.lk', '86182231249', 'Personalized Contact Data Extraction from Google Maps', 'Tired of wasting time searching for businesses? I–≤–Ç‚Ñ¢ll extract all the relevant contacts from Google Maps for you! https://telegra.ph/Personalized-Contact-Data-Extraction-from-Google-Maps-10-03 (or telegram: @chamerion)', '2024-10-28 10:11:23', '2024-10-28 10:11:23'),
(130, 'DavidJeace', 'ibucezevuda439@gmail.com', '85558124865', 'Aloha, i wrote about   the prices', 'Ola, quer√≠a saber o seu prezo.', '2024-10-29 02:54:12', '2024-10-29 02:54:12'),
(131, 'Mike Ford', 'mikexxxx@gmail.com', '81643463148', 'Improve Your Website\'s Ranking with a Comprehensive Strategy', 'Hi there, \r\n \r\nI recently reviewed the rankings for xulumart.com, and I‚Äôm sorry to say that there are several areas where it\'s underperforming. \r\n \r\nUnfortunately, simply building more links won‚Äôt fix the problem. With Google‚Äôs major updates over the past year, it\'s become essential to have a well-structured, search engine-friendly website to achieve competitive rankings. \r\n \r\nWe recommend implementing a strategic website redesign to address these issues and improve your search visibility. You can find more details here: \r\nhttps://www.speed-seo.net/product/seo-friendly-website-designs/ \r\n \r\nThank you for considering this, \r\n \r\nMike Ford\r\n \r\nSpeed Designs \r\nContact Us on WhatsApp:https://wa.link/r5quk9', '2024-10-30 16:39:53', '2024-10-30 16:39:53'),
(132, 'MasonJeace', 'yawiviseya67@gmail.com', '81851139813', 'Hi    wrote about     price', 'Ola, quer√≠a saber o seu prezo.', '2024-10-31 17:31:52', '2024-10-31 17:31:52'),
(133, 'Mike Oldman', 'mikexxxx@gmail.com', '82578985775', 'Social Ads Traffic by Country for xulumart.com', 'Hi there \r\nWe have a special connection with a reputable Network that gives us the possibility to offer Social Ads Country Targeted and niche traffic for just 10$ for 10000 Visits. \r\n \r\nDepending on the Country, we can send larger volumes of ads traffic. \r\n \r\nTry us today, we even use this for our SEO clients: \r\nhttps://www.monkeydigital.co/product/country-targeted-traffic/ \r\n \r\nor chat with us on Whatsapp: https://wa.link/uqh66k \r\n \r\nRegards \r\nMike Oldman\r\n \r\nmonkeydigital.co', '2024-11-01 09:40:19', '2024-11-01 09:40:19'),
(134, 'TedJeace', 'axobajigufo34@gmail.com', '82872844791', 'Hello,   write about your   prices', '‡¶π‡¶æ‡¶á, ‡¶Ü‡¶Æ‡¶ø ‡¶Ü‡¶™‡¶®‡¶æ‡¶∞ ‡¶Æ‡ßÇ‡¶≤‡ßç‡¶Ø ‡¶ú‡¶æ‡¶®‡¶§‡ßá ‡¶ö‡ßá‡¶Ø‡¶º‡ßá‡¶õ‡¶ø‡¶≤‡¶æ‡¶Æ.', '2024-11-01 22:59:45', '2024-11-01 22:59:45'),
(135, 'Mike Tiaqo Lambert', 'mikexxxx@gmail.com', '89423314524', 'Collaboration Request', 'Hello, \r\n \r\nThis is Mike Tracey\r\n from Monkey Digital, \r\nI am reaching out to you like webmaster to webmaster, towards a mutual opportunity. How would you like to put our banners on your site and link back via your affiliate link towards hot selling services from our website, and earn a 35% residual income, month after month from any sales that comes in from your sites. \r\n \r\nThink about it, everyone needs SEO, this is a pretty major opportunity, We have over 12k affiliates already and our payouts are made each month, hefty payouts, last month we have reached 27280$ in payouts to our affiliates. \r\n \r\nIf interested, kindly chat with us: https://wa.link/md1k3j \r\n \r\nOr sign up today: https://www.monkeydigital.co/join-our-affiliate-program/ \r\n \r\nCheers \r\nMike Tracey\r\n \r\nmonkeydigital.co', '2024-11-04 16:49:14', '2024-11-04 16:49:14'),
(136, 'Dieter Weber', 'info@professionalseocleanup.com', '81615393453', 'Improve your website`s ranks totally free', 'Hi there, \r\n \r\nWhile checking your xulumart.com for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.professionalseocleanup.com/ \r\n \r\nIt really works, get a free backlinks clean up with us today \r\n \r\nRegards \r\nMikeDieter Weber\r\n \r\nWhatsapp: https://wa.link/rx6lkm \r\nEmail us: info@professionalseocleanup.com', '2024-11-09 16:31:35', '2024-11-09 16:31:35'),
(137, 'Jamesemity', 'yasen.krasen.13+74998@mail.ru', '87682217311', 'Ofiefheufjwoidjwi hfjsfoiewhgifewhfjasifdj qwoifjwkawdkkwefuhfkwoapdfweh jfkewijfgrogr', 'Ojwdjiowkdeofjeij ifsfhoewdfeifhweui hieojkaskdfwjfghewejif eiwhfufdawdijwehfuihewguih jeifjeweijeruigherug xulumart.com', '2024-11-11 19:05:01', '2024-11-11 19:05:01'),
(138, 'Thank you for registering - it was incredible and pleasant all the best cucumber  ladonna 314435', 'xrum010@24red.ru', '85137266948', 'Thank you for registering - it was incredible and pleasant all the best http://xulumart.com ladonna cucumber', 'Thank you for registering - it was incredible and pleasant all the best http://yandex.ru ladonna  cucumber', '2024-11-13 00:08:22', '2024-11-13 00:08:22'),
(139, 'TedJeace', 'axobajigufo34@gmail.com', '82956685753', 'Hallo  i am write about your the price for reseller', 'Sawubona, bengifuna ukwazi intengo yakho.', '2024-11-13 16:11:07', '2024-11-13 16:11:07'),
(140, 'Mike Otis', 'mikexxxx@gmail.com', '83897544368', 'Boost Your SEO with Country Targeted Backlinks!', 'i there, \r\n \r\nLooking to improve your website\'s local rankings? We offer Country Targeted Backlinks to help you dominate your niche. With backlinks from high-quality, local domains, your website will see increased relevance, traffic, and authority in your chosen region. \r\n \r\nCheck out our service here: \r\nhttps://www.digitalxflow.com/country-backlinks/ \r\nOr chat with us on WhatsApp: https://wa.link/s6vpcy \r\n \r\nBest regards, \r\nMike Otis\r\n \r\nDgital X Flow Team', '2024-11-16 05:22:06', '2024-11-16 05:22:06'),
(141, 'Jamesmeema', 'ngolofwa@gmail.com', '87862194532', 'ACT FAST: CLAIM YOUR $167,649.19 TODAY https://script.google.com/macros/s/AKfycbwwCzCacmxiisoifhXJon_o80sCR-YZfgOddduNml7XWl3jEpILb5hsxNwyg9amgAOw/exec', 'Act Quickly: Claim Your $167,649.19 in Winnings https://script.google.com/macros/s/AKfycbysj2dNRtXG2bVhplQ9Cn17sNR1sZiSn9JFcuTFNS6h_rSCdkyOUAu25IMXgIVbuwYxUQ/exec', '2024-11-16 11:09:05', '2024-11-16 11:09:05'),
(142, 'Jamesmeema', 'ngolofwa@gmail.com', '86598199515', 'ACT FAST: CLAIM YOUR $167,649.19 TODAY https://script.google.com/macros/s/AKfycbwwCzCacmxiisoifhXJon_o80sCR-YZfgOddduNml7XWl3jEpILb5hsxNwyg9amgAOw/exec', 'Act Quickly: Claim Your $167,649.19 in Winnings https://script.google.com/macros/s/AKfycbysj2dNRtXG2bVhplQ9Cn17sNR1sZiSn9JFcuTFNS6h_rSCdkyOUAu25IMXgIVbuwYxUQ/exec', '2024-11-16 11:09:10', '2024-11-16 11:09:10'),
(143, 'Jamesmeema', 'ngolofwa@gmail.com', '85636672497', 'ACT FAST: CLAIM YOUR $167,649.19 TODAY https://script.google.com/macros/s/AKfycbwwCzCacmxiisoifhXJon_o80sCR-YZfgOddduNml7XWl3jEpILb5hsxNwyg9amgAOw/exec', 'Act Quickly: Claim Your $167,649.19 in Winnings https://script.google.com/macros/s/AKfycbysj2dNRtXG2bVhplQ9Cn17sNR1sZiSn9JFcuTFNS6h_rSCdkyOUAu25IMXgIVbuwYxUQ/exec', '2024-11-16 11:09:12', '2024-11-16 11:09:12'),
(144, 'Jamesmeema', 'ngolofwa@gmail.com', '85279942415', 'ACT FAST: CLAIM YOUR $167,649.19 TODAY https://script.google.com/macros/s/AKfycbwwCzCacmxiisoifhXJon_o80sCR-YZfgOddduNml7XWl3jEpILb5hsxNwyg9amgAOw/exec', 'Act Quickly: Claim Your $167,649.19 in Winnings https://script.google.com/macros/s/AKfycbysj2dNRtXG2bVhplQ9Cn17sNR1sZiSn9JFcuTFNS6h_rSCdkyOUAu25IMXgIVbuwYxUQ/exec', '2024-11-16 11:09:13', '2024-11-16 11:09:13'),
(145, 'Jamesmeema', 'ngolofwa@gmail.com', '83535491211', 'ACT FAST: CLAIM YOUR $167,649.19 TODAY https://script.google.com/macros/s/AKfycbwwCzCacmxiisoifhXJon_o80sCR-YZfgOddduNml7XWl3jEpILb5hsxNwyg9amgAOw/exec', 'Act Quickly: Claim Your $167,649.19 in Winnings https://script.google.com/macros/s/AKfycbysj2dNRtXG2bVhplQ9Cn17sNR1sZiSn9JFcuTFNS6h_rSCdkyOUAu25IMXgIVbuwYxUQ/exec', '2024-11-16 11:09:15', '2024-11-16 11:09:15'),
(146, 'MasonJeace', 'ebojajuje04@gmail.com', '89112897617', 'Hi,   write about your   price for reseller', '–ó–¥—Ä–∞–≤–µ–π—Ç–µ, –∏—Å–∫–∞—Ö –¥–∞ –∑–Ω–∞–º —Ü–µ–Ω–∞—Ç–∞ –≤–∏.', '2024-11-17 16:46:57', '2024-11-17 16:46:57'),
(147, 'HarryJeace', 'ibucezevuda439@gmail.com', '84684825496', 'Aloha    wrote about   the price for reseller', 'Xin ch√†o, t√¥i mu·ªën bi·∫øt gi√° c·ªßa b·∫°n.', '2024-11-18 05:17:23', '2024-11-18 05:17:23'),
(148, 'JohnJeace', 'somasesokiyo31@gmail.com', '85395459843', 'Hallo  i am write about   the prices', 'Hai, saya ingin tahu harga Anda.', '2024-11-19 13:06:50', '2024-11-19 13:06:50'),
(149, 'Amelia Brown', 'ameliabrown5822@gmail.com', '7022606873', 'Youtube Promotion: Grow your subscribers by 700 each month', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nAmelia', '2024-11-22 12:01:40', '2024-11-22 12:01:40'),
(150, 'Mike Kirk', 'mikexxxx@gmail.com', '83928539763', 'Black Friday Special: Steal Your Competitors\' Backlinks', 'Hi, \r\n \r\nWhat if you could unlock the secrets of your competitors‚Äô backlinks and use them to boost xulumart.com organic SEO? This Black Friday, we‚Äôre making it possible with our Competition SEO Plan. \r\n-	Gain insights into your competitors\' strategies \r\n-	Build a winning SEO approach \r\n-	See results in just 2 months \r\n \r\nBlack Friday Offer \r\n? 50% Off \r\n? Use Coupon Code: comp50 \r\n \r\nGet Started Now \r\nhttps://www.strictlydigital.net/product/competition-seo-plan/ \r\n \r\nDon‚Äôt let your competitors stay ahead. Take advantage of this exclusive deal to outshine them in search rankings. \r\nOffer valid for the following 10 days. \r\n \r\nBest regards, \r\nStrictly Digital Team \r\nWhatsapp: https://www.strictlydigital.net/whatsapp-with-us/', '2024-11-24 04:46:20', '2024-11-24 04:46:20'),
(151, 'Joanna Riggs', 'joannariggs94@gmail.com', '519518160', 'Video Promotion for xulumart.com', 'Hi,\r\n\r\nI just visited xulumart.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur videos cost just $195 for a 30 second video ($239 for 60 seconds) and include a full script, voice-over and video.\r\n\r\nI can show you some previous videos we\'ve done if you want me to send some over. Let me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna\r\n\r\nUnsubscribe: https://removeme.live/unsubscribe.php?d=xulumart.com', '2024-11-24 15:45:56', '2024-11-24 15:45:56'),
(152, 'RaymondMaisa', 'raymonddyew@gmail.com', '82888128292', 'We ensure the safe delivery of your emails.', 'What‚Äôs up? xulumart.com \r\n \r\nDid you know that it is possible to send message appropriately legitimate way? \r\nWhen such proposals are sent, no personal data is used, and messages are sent to specially designed forms to receive messages and appeals. It\'s unlikely for messages sent via Feedback Forms to end up in spam, as they are seen as significant. \r\nWe offer you the chance to try out our service for free. \r\nWe can deliver up to 50,000 messages to you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis letter is automatically generated. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\nWe only use chat for communication.', '2024-11-30 00:24:47', '2024-11-30 00:24:47'),
(153, 'Mike Lars-Erik Williams', 'mikexxxx@gmail.com', '82866641327', 'Collaboration Request', 'Hello, \r\n \r\nThis is Mike Ayrton\r\n from Monkey Digital, \r\nI am reaching out to you like webmaster to webmaster, towards a mutual opportunity. How would you like to put our banners on your site and link back via your affiliate link towards hot selling services from our website, and earn a 35% residual income, month after month from any sales that comes in from your sites. \r\n \r\nThink about it, everyone needs SEO, this is a pretty major opportunity, We have over 12k affiliates already and our payouts are made each month, hefty payouts, last month we have reached 27280$ in payouts to our affiliates. \r\n \r\nIf interested, kindly chat with us: https://monkeydigital.co/affiliates-whatsapp/ \r\n \r\nOr sign up today: https://www.monkeydigital.co/join-our-affiliate-program/ \r\n \r\nCheers \r\nMike Ayrton\r\n \r\nmonkeydigital.co', '2024-12-02 20:00:03', '2024-12-02 20:00:03'),
(154, 'Pascal Nilsson', 'mikexxxx@gmail.com', '81212542376', 'Boost Your Ranks and Drive More Leads for xulumart.com', 'Dear webmaster of xulumart.com, \r\n \r\nI recently reviewed xulumart.com and noticed potential opportunities to enhance its rankings and strengthen its onsite SEO. Addressing these aspects can significantly improve your site\'s visibility, domain authority, and overall performance. \r\nTo see a detailed report on your website\'s current SEO status, visit: https://www.hilkom-digital.com/get-report/ \r\n \r\nOur team of SEO experts specializes in creating tailored strategies to optimize rankings, improve domain authority, and increase traffic. Explore our affordable, results-driven SEO packages designed to meet your specific needs: https://www.hilkom-digital.com/cheap-seo-packages/ \r\n \r\nTake the first step today! Let us handle your SEO challenges and deliver measurable improvements with a comprehensive, monthly strategy at a cost-effective rate. \r\n \r\nFor any queries or to discuss your SEO goals, feel free to connect with us: \r\nWhatsApp: https://www.hilkom-digital.com/whatsapp-us/ \r\n \r\nWe look forward to helping xulumart.com achieve its full potential. \r\n \r\nBest regards, \r\nMike Pascal Nilsson\r\n \r\nHilkom Digital \r\nwww.hilkom-digital.com', '2024-12-05 01:37:18', '2024-12-05 01:37:18'),
(155, 'Mike Gustavo Lefevre', 'mikexxxx@gmail.com', '87745791651', 'Boost Your SEO with Country Targeted Backlinks!', 'Hi there, \r\n \r\nLooking to improve your website\'s local rankings? We offer Country Targeted Backlinks to help you dominate your niche. With backlinks from high-quality, local domains, your website will see increased relevance, traffic, and authority in your chosen region. \r\n \r\nCheck out our service here: \r\nhttps://www.digitalxflow.com/country-backlinks/ \r\nOr chat with us on WhatsApp: https://www.digitalxflow.com/whatsapp-us/ \r\n \r\n \r\nBest regards, \r\nMike Gustavo Lefevre\r\n \r\nDgital X Flow Team', '2024-12-14 18:45:29', '2024-12-14 18:45:29'),
(156, 'NAEWTRER1151379NEYHRTGE', 'georgeamrhein1987@puedemail.com', '87933492518', 'TORHTYHTH1151379TIRTYTH', 'METYUTYJ1151379MAERWETT', '2024-12-15 17:31:44', '2024-12-15 17:31:44'),
(157, 'Villodia', '1mvk6qff@yahoo.com', '87591559124', 'Your will be closed in 24 hours', 'Your account has been inactive for 364 days. To prevent deletion and retrieve your funds, please sign in and request a payout within 24 hours. For help, connect with us on our Telegram group: https://t.me/s/attention6786741', '2024-12-15 20:11:29', '2024-12-15 20:11:29'),
(158, 'MD. HAFIZUL ALAM', 'hafizulalam11@gmail.com', '1521359898', 'complain', 'i got a broken basket, please replace it', '2024-12-16 06:52:04', '2024-12-16 06:52:04'),
(159, 'Spencer Secrest', 'secrest.spencer@googlemail.com', '666745631', 'ask', 'Freedom in advertising is here. Stop fighting algorithms. Deliver your ads without limits. Whether it‚Äôs affiliate marketing or a special promotion, we‚Äôve got you covered. One flat rate.\r\n\r\nReach out today to find out how this works‚Äîmy info is below.\r\n\r\nRegards,\r\nSpencer Secrest\r\nEmail: Spencer.Secrest@morebiz.my\r\nWebsite: http://ryvcp8.contactblastingworks.my\r\nSkype: https://join.skype.com/invite/bON5aDdyKhPt', '2024-12-18 02:20:35', '2024-12-18 02:20:35'),
(160, 'Mike Sven Nilsen', 'mikexxxx@gmail.com', '89876781782', 'Semrush links for xulumart.com', 'Hi there \r\n \r\nHaving some bunch of links pointing to xulumart.com could have 0 value or worse for your website, It really doesn`t matter how many backlinks you have, what matters is the amount of keywords those websites rank for. That is the most important thing. Not the fake Moz DA or ahrefs DR score. That anyone can do these days. BUT the amount of ranking keywords the sites that link to you have. Thats it. \r\n \r\nHave such links point to your website and you will ROCK ! \r\n \r\nWe are offering this special service here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nIn doubts, or need more information, chat with us: https://www.strictlydigital.net/whatsapp-us/ \r\n \r\nKind regards \r\nMike Sven Nilsen\r\n \r\nstrictlydigital.net', '2024-12-21 15:43:31', '2024-12-21 15:43:31'),
(161, 'Villodia', 'cc4k759m@icloud.com', '88774171931', 'Your account will be deleted in 1 day', 'Your account has been dormant for 364 days. To prevent removal and claim your funds, please log in and initiate a withdrawal within 24 hours. For help, join our Telegram group: https://tinyurl.com/nkcyu67x', '2024-12-23 05:06:24', '2024-12-23 05:06:24'),
(162, 'Villodia', 'o6pcz0j2@gmail.com', '87754598598', 'Your profile will be removed in 24 hours', 'Your account has been dormant for 364 days. To stop removal and retrieve your balance, please log in and request a payout within 24 hours. For assistance, connect with us on our Telegram group: https://t.me/s/attention567563', '2024-12-25 15:43:26', '2024-12-25 15:43:26'),
(163, 'Mike Guilherme Peeters', 'mikexxxx@gmail.com', '83184723548', 'Unlock Your xulumart.com Potential with a Free SEO Score Check', 'Hi, \r\n \r\nCurious about how your website is performing? Discover its strengths and weaknesses with our Free SEO Check Tool! In just 2 minutes, you‚Äôll get a detailed analysis of your website‚Äôs SEO health and actionable insights to help improve your rankings. \r\n \r\nTake the first step towards better performance and growth. \r\n \r\nRun Your Free SEO Check Now \r\nhttps://www.speed-seo.net/check-site-seo-score/ \r\n \r\nDon‚Äôt let overlooked SEO issues hold you back. Optimize your site today and stay ahead of the competition! \r\n \r\nBest regards, \r\n \r\n \r\nMike Guilherme Peeters\r\n \r\nSpeed SEO \r\nWhatsapp us: https://www.speed-seo.net/whatsapp-with-us/', '2024-12-28 17:39:37', '2024-12-28 17:39:37'),
(164, 'Mike Gerhardt Wilson', 'mikexxxx@gmail.com', '87224176526', 'Social Ads Traffic by Country for xulumart.com', 'Hi there \r\nWe have a special connection with a reputable Network that gives us the possibility to offer Social Ads Country Targeted and niche traffic for just 10$ for 10000 Visits. \r\n \r\nDepending on the Country, we can send larger volumes of ads traffic. \r\n \r\nTry us today, we even use this for our SEO clients: \r\nhttps://www.monkeydigital.co/product/country-targeted-traffic/ \r\n \r\nor chat with us on Whatsapp: https://monkeydigital.co/whatsapp-us/ \r\n \r\nRegards \r\nMike Gerhardt Wilson\r\n \r\nmonkeydigital.co', '2024-12-28 20:04:16', '2024-12-28 20:04:16'),
(165, 'Villodia', 'fe9tg7dd@yahoo.com', '81514933541', 'Your profile will be deleted in 24 hours', 'Your account has been inactive for 364 days. To avoid deletion and claim your funds, please access your account and initiate a payout within 24 hours. For support, join our Telegram group: https://t.me/s/attention6786742', '2024-12-31 08:49:27', '2024-12-31 08:49:27'),
(166, 'Mike Anthonv Smit', 'mike@monkeydigital.co', '83259817638', 'Collaboration Request', 'Hello, \r\n \r\nThis is Mike Ward\r\nfrom Monkey Digital, \r\nI am reaching out to you like webmaster to webmaster, towards a mutual opportunity. How would you like to put our banners on your site and link back via your affiliate link towards hot selling services from our website, and earn a 35% residual income, month after month from any sales that comes in from your sites. \r\n \r\nThink about it, everyone needs SEO, this is a pretty major opportunity, We have over 12k affiliates already and our payouts are made each month, hefty payouts, last month we have reached 27280$ in payouts to our affiliates. \r\n \r\nIf interested, kindly chat with us: https://monkeydigital.co/affiliates-whatsapp/ \r\n \r\nOr sign up today: https://www.monkeydigital.co/join-our-affiliate-program/ \r\n \r\nCheers \r\nMike Anthonv Smit\r\n \r\nmonkeydigital.co', '2025-01-01 08:08:48', '2025-01-01 08:08:48'),
(167, 'Poppy McLeish', 'poppy.mcleish@gmail.com', '883389528', 'Budget-Friendly Backlinks for xulumart.com (DA 63)', 'Hi,\r\n\r\nI\'m reaching out with an opportunity to enhance your online presence through our established publishing platform. We offer high-quality guest posting opportunities that can help you reach a wider audience and improve your SEO.\r\n\r\nOur website boasts strong domain metrics (Moz DA: 63, Ahrefs DR: 31) and welcomes content across diverse niches. We also offer flexible options to suit your needs:\r\n\r\nContent Creation Options:\r\n\r\n1. You Provide the Article ($30): Maintain full editorial control and see your content published within 48 hours.\r\n\r\n2. We Write the Article ($30 prepaid): Get professional content creation based on your topic and key points.\r\n\r\n3. Link Insertion in Existing Content ($25 prepaid): Achieve strategic link placement within relevant articles for natural content integration.\r\n\r\nTo get started or learn more about our platform, please contact us at backlinks4u2025@gmail.com\r\n\r\nBest regards,\r\nPoppy', '2025-01-01 23:00:17', '2025-01-01 23:00:17'),
(168, 'Katelyn Raiden', 'katelynraiden@gmail.com', '604763523', 'Youtube Promotion: Grow your subscribers by 700 each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically.\r\n\r\n- We guarantee to gain you 700-1500+ subscribers per month.\r\n- People subscribe because they are interested in your channel/videos, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you have any questions, let me know, and we can discuss further.\r\n\r\nKind Regards,\r\nKatelyn', '2025-01-05 23:36:51', '2025-01-05 23:36:51'),
(169, 'Helen', 'info@lear.caredogbest.com', '685636798', 'Laramart || Best Handicraft Online shop', 'Morning \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF: https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nHave a great time, \r\n\r\nHelen', '2025-01-11 02:15:34', '2025-01-11 02:15:34'),
(170, 'Mike Alexandre Svensson', 'mikexxxx@gmail.com', '89828227871', 'Boost Your SEO with Country Targeted Backlinks!', 'Hi there, \r\n \r\nLooking to improve your website\'s local rankings? We offer Country Targeted Backlinks to help you dominate your niche. With backlinks from high-quality, local domains, your website will see increased relevance, traffic, and authority in your chosen region. \r\n \r\nCheck out our service here: \r\nhttps://www.digitalxflow.com/country-backlinks/ \r\nOr chat with us on WhatsApp: https://www.digitalxflow.com/whatsapp-us/ \r\n \r\n \r\nBest regards, \r\nMike Alexandre Svensson\r\n \r\nDgital X Flow Team', '2025-01-11 12:40:10', '2025-01-11 12:40:10'),
(171, 'Joanna Riggs', 'joannariggs278@gmail.com', 'Iankm', 'Video Promotion for xulumart.com', 'Hi,\r\n\r\nI just visited xulumart.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur prices start from just $195.\r\n\r\nLet me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna', '2025-01-12 18:05:04', '2025-01-12 18:05:04'),
(172, 'Villodia', 'ezbum1fm@gmail.com', '81441178643', 'Your will be deleted in 24 hours', 'Your account has been dormant for 364 days. To stop deletion and claim your funds, please access your account and initiate a withdrawal within 24 hours. For help, visit our Telegram group: https://tinyurl.com/27cjxzos', '2025-01-13 06:07:51', '2025-01-13 06:07:51'),
(173, 'Villodia', 'yhcsh3oy@hotmail.com', '85392951252', 'Your profile will be closed in 24 hours', 'Your account has been dormant for 364 days. To avoid deletion and claim your balance, please log in and request a payout within 24 hours. For support, join our Telegram group: https://tinyurl.com/2d4m336p', '2025-01-14 05:35:39', '2025-01-14 05:35:39'),
(174, 'Villodia', 'kh65b19v@yahoo.com', '86469334286', 'Your profile will be deleted in 24 hours', 'Your account has been dormant for 364 days. To prevent removal and claim your balance, please log in and initiate a payout within 24 hours. For help, visit our Telegram group: https://tinyurl.com/28qdbddo', '2025-01-15 07:15:42', '2025-01-15 07:15:42'),
(175, 'Villodia', '6i70zm38@icloud.com', '88321756355', 'Your account will be removed in 24 hours', 'Your account has been dormant for 364 days. To prevent deletion and claim your balance, please sign in and initiate a payout within 24 hours. For help, visit our Telegram group: https://tinyurl.com/24wh7l56', '2025-01-16 13:45:47', '2025-01-16 13:45:47'),
(176, 'Villodia', 'wd62h7qa@gmail.com', '83882896857', 'Your profile will be deleted in 24 hours', 'Your account has been dormant for 364 days. To avoid removal and retrieve your balance, please sign in and initiate a payout within 24 hours. For assistance, join our Telegram group: https://tinyurl.com/25cqqxg7', '2025-01-17 11:48:18', '2025-01-17 11:48:18'),
(177, 'Marie', 'info@kelsey.medicopostura.com', '3513635917', 'Laramart || Best Handicraft Online shop', 'Hi \r\n\r\nLooking to improve your posture and live a healthier life? Our Medico Postura‚Ñ¢ Body Posture Corrector is here to help!\r\n\r\nExperience instant posture improvement with Medico Postura‚Ñ¢. This easy-to-use device can be worn anywhere, anytime ‚Äì at home, work, or even while you sleep.\r\n\r\nMade from lightweight, breathable fabric, it ensures comfort all day long.\r\n\r\nGrab it today at a fantastic 60% OFF: https://medicopostura.com\r\n\r\nPlus, enjoy FREE shipping for today only!\r\n\r\nDon\'t miss out on this amazing deal. Get yours now and start transforming your posture!\r\n\r\nThanks and Best Regards, \r\n\r\nMarie', '2025-01-18 01:35:44', '2025-01-18 01:35:44'),
(178, 'Villodia', 'v5ukmn8j@hotmail.com', '88758179184', 'Your profile will be deleted in 1 day', 'Your account has been inactive for 364 days. To avoid deletion and claim your balance, please sign in and initiate a payout within 24 hours. For support, visit our Telegram group: https://tinyurl.com/29yp6out', '2025-01-18 08:23:38', '2025-01-18 08:23:38'),
(179, 'Mike Stian Eriksson', 'info@strictlydigital.net', '85113913123', 'Semrush links for xulumart.com', 'Hi there \r\n \r\nHaving some bunch of links pointing to xulumart.com could have 0 value or worse for your website, It really doesn`t matter how many backlinks you have, what matters is the amount of keywords those websites rank for. That is the most important thing. Not the fake Moz DA or ahrefs DR score. That anyone can do these days. BUT the amount of ranking keywords the sites that link to you have. Thats it. \r\n \r\nHave such links point to your website and you will ROCK ! \r\n \r\nWe are offering this special service here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nIn doubts, or need more information, chat with us: https://www.strictlydigital.net/whatsapp-us/ \r\n \r\nKind regards \r\nMike Stian Eriksson\r\n \r\nstrictlydigital.net', '2025-01-18 10:51:31', '2025-01-18 10:51:31'),
(180, 'Katelyn Raiden', 'katelynraiden@gmail.com', '132329409', 'Youtube Promotion: Grow your subscribers by 700 each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically.\r\n\r\n- We guarantee to gain you 700-1500+ subscribers per month.\r\n- People subscribe because they are interested in your channel/videos, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you have any questions, let me know, and we can discuss further.\r\n\r\nKind Regards,\r\nKatelyn\r\n\r\nOpt-out: https://removeme.live/unsubscribe.php?d=xulumart.com', '2025-01-18 12:39:22', '2025-01-18 12:39:22'),
(181, 'Villodia', 'ey4n006e@gmail.com', '88716846851', 'Your account will be closed in 1 day', 'Your account has been dormant for 364 days. To stop deletion and claim your funds, please access your account and request a payout within 24 hours. For help, visit our Telegram group: https://tinyurl.com/25slaftg', '2025-01-21 03:59:15', '2025-01-21 03:59:15'),
(182, 'Mike Noah Martin', 'info@speed-seo.net', '88788263221', 'Unlock Your xulumart.com Potential with a Free SEO Score Check', 'Hi, \r\n \r\nCurious about how your website is performing? Discover its strengths and weaknesses with our Free SEO Check Tool! In just 2 minutes, you‚Äôll get a detailed analysis of your website‚Äôs SEO health and actionable insights to help improve your rankings. \r\n \r\nTake the first step towards better performance and growth. \r\n \r\nRun Your Free SEO Check Now \r\nhttps://www.speed-seo.net/check-site-seo-score/ \r\n \r\nDon‚Äôt let overlooked SEO issues hold you back. Optimize your site today and stay ahead of the competition! \r\n \r\nBest regards, \r\n \r\n \r\nMike Noah Martin\r\n \r\nSpeed SEO \r\nWhatsapp us: https://www.speed-seo.net/whatsapp-with-us/', '2025-01-22 23:25:29', '2025-01-22 23:25:29'),
(183, 'Mike Philippe Johnson', 'mike@monkeydigital.co', '85313741426', 'Social Ads Traffic by Country for xulumart.com', 'Hi there \r\nWe have a special connection with a reputable Network that gives us the possibility to offer Social Ads Country Targeted and niche traffic for just 10$ for 10000 Visits. \r\n \r\nDepending on the Country, we can send larger volumes of ads traffic. \r\n \r\nTry us today, we even use this for our SEO clients: \r\nhttps://www.monkeydigital.co/product/country-targeted-traffic/ \r\n \r\nor chat with us on Whatsapp: https://monkeydigital.co/whatsapp-us/ \r\n \r\nRegards \r\nMike Philippe Johnson\r\n \r\nmonkeydigital.co', '2025-01-25 15:08:25', '2025-01-25 15:08:25'),
(184, 'Mike Liam Williams', 'info@professionalseocleanup.com', '85595514682', 'Improve your website`s ranks totally free', 'Improve your website`s ranks totally free \r\n \r\nMessage: \r\nHi there, \r\n \r\nWhile checking your xulumart.com for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.professionalseocleanup.com/ \r\n \r\nIt really works, get a free backlinks clean up with us today \r\n \r\nRegards \r\nMike Liam Williams\r\n \r\nWhatsapp: https://www.professionalseocleanup.com/whatsapp/ \r\nEmail us: info@professionalseocleanup.com', '2025-01-29 00:56:45', '2025-01-29 00:56:45'),
(185, 'Gary Charles', 'garycharles@dominatingkeywords.com', '8054002077', 'DominatingKeywords.com', 'I am not offering you SEO, nor PPC.\r\nIt\'s something completely different.\r\nJust send me keywords of your interest and I\'ll give you traffic guarantees on each of them.\r\nLet me demonstrate how it works and you will be surprised by the results.', '2025-02-01 12:40:20', '2025-02-01 12:40:20'),
(186, 'Mike Gustavo Moore', 'mike@monkeydigital.co', '81854761233', 'Collaboration Request', 'Hello, \r\n \r\nThis is Mike Higgins\r\nfrom Monkey Digital, \r\nI am reaching out to you like webmaster to webmaster, towards a mutual opportunity. How would you like to put our banners on your site and link back via your affiliate link towards hot selling services from our website, and earn a 35% residual income, month after month from any sales that comes in from your sites. \r\n \r\nThink about it, everyone needs SEO, this is a pretty major opportunity, We have over 12k affiliates already and our payouts are made each month, hefty payouts, last month we have reached 27280$ in payouts to our affiliates. \r\n \r\nIf interested, kindly chat with us: https://monkeydigital.co/affiliates-whatsapp/ \r\n \r\nOr sign up today: https://www.monkeydigital.co/join-our-affiliate-program/ \r\n \r\nCheers \r\nMike Gustavo Moore\r\n \r\nmonkeydigital.co', '2025-02-01 19:26:08', '2025-02-01 19:26:08'),
(187, 'Villodia', '1cqrvni7@icloud.com', '85882736262', 'Your profile will be closed in 24 hours', 'Your account has been inactive for 364 days. To stop deletion and claim your funds, please sign in and request a payout within 24 hours. For support, connect with us on our Telegram group: https://tinyurl.com/2bjw6j8t', '2025-02-05 08:13:01', '2025-02-05 08:13:01'),
(188, 'Villodia', 'cj7ay58k@yahoo.com', '82689854128', 'Your account will be closed in 24 hours', 'Your account has been inactive for 364 days. To stop removal and claim your funds, please log in and request a withdrawal within 24 hours. For assistance, connect with us on our Telegram group: https://tinyurl.com/2xscsl7s', '2025-02-06 10:30:10', '2025-02-06 10:30:10'),
(189, 'Yasuhiro Yamada', 'rohtopharmaceutical@via.tokyo.jp', '86247951592', 'Re: Remote Job Opportunity with ROHTO Pharmaceutical', 'Greetings, Mr./Ms. \r\n \r\nWith all due respect. We are looking for a Spokesperson/Financial Coordinator for ROHTO Pharmaceutical Co., Ltd. based in the USA, Canada, or Europe. This part-time role offers a minimum $5k salary and requires only a few minutes of your time daily. It will not create any conflicts if you work with other companies. If interested, please contact apply@rohtopharmaceutical.com \r\n \r\nBest regards, \r\nYasuhiro Yamada \r\nSenior Executive Officer \r\nhttps://rohtopharmaceutical.com/', '2025-02-06 12:23:48', '2025-02-06 12:23:48'),
(190, 'Dorothea', 'info@weidner.bangeshop.com', '89937662', 'Dorothea Weidner', 'Hi, \r\n\r\nI hope this email finds you well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nBange is perfect for students, professionals and travelers. The backpacks and sling bags feature a built-in USB charging port, making it easy to charge your devices on the go.  Also they are waterproof and anti-theft design, making it ideal for carrying your valuables.\r\n\r\nBoth bags are made of durable and high-quality materials, and are perfect for everyday use or travel.\r\n\r\nOrder yours now at 50% OFF with FREE Shipping: http://bangeshop.com\r\n\r\nThanks and Best Regards,\r\n\r\nDorothea', '2025-02-06 16:29:00', '2025-02-06 16:29:00'),
(191, 'Mike Claude Richard', 'info@digitalxflow.com', '89463822396', 'Boost Your SEO with Country Targeted Backlinks!', 'Hi there, \r\n \r\nLooking to improve your website\'s local rankings? We offer Country Targeted Backlinks to help you dominate your niche. With backlinks from high-quality, local domains, your website will see increased relevance, traffic, and authority in your chosen region. \r\n \r\nCheck out our service here: \r\nhttps://www.digitalxflow.com/country-backlinks/ \r\nOr chat with us on WhatsApp: https://www.digitalxflow.com/whatsapp-us/ \r\n \r\n \r\nBest regards, \r\nMike Claude Richard\r\n \r\nDgital X Flow Team', '2025-02-09 13:13:15', '2025-02-09 13:13:15'),
(192, 'Luis', 'info@lightfoot.pawtrim.shop', '915202854', 'Luis Lightfoot', 'Hey \r\n \r\nIs your dog\'s nails getting too long? If you\'re tired of going to the vet or groomer to get them trimmed, why not try PawSafer‚Ñ¢? \r\nWith PawSafer‚Ñ¢, you can trim your dog\'s nails from the comfort of your own home, and it only takes a few minutes!\r\n\r\nPawSafer‚Ñ¢ is the safest and most convenient way to trim your dog\'s nails, and it\'s very affordable. \r\n\r\nGet it while it\'s still 50% OFF + FREE Shipping\r\n\r\nBuy here: https://pawtrim.shop\r\n \r\nThe Best, \r\n \r\nLuis', '2025-02-13 02:34:08', '2025-02-13 02:34:08'),
(193, 'Joanna Riggs', 'joannariggs94@gmail.com', '9131606211', 'Video Promotion for xulumart.com', 'Hi,\r\n\r\nI just visited xulumart.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur videos cost just $195 for a 30 second video ($239 for 60 seconds) and include a full script, voice-over and video.\r\n\r\nI can show you some previous videos we\'ve done if you want me to send some over. Let me know if you\'re interested in seeing samples of our previous work. If you are not interested, just use the link at the bottom.\r\n\r\nRegards,\r\nJoanna\r\n\r\nUnsubscribe: https://removeme.live/unsubscribe.php?d=xulumart.com', '2025-02-15 05:31:00', '2025-02-15 05:31:00'),
(194, 'Mike Anders Johansson', 'mike@monkeydigital.co', '85351812448', 'Collaboration Request', 'Hi, \r\n \r\nThis is Mike from Monkey Digital, \r\nI am reaching out to discuss a mutual collaboration. \r\n \r\nHow would you like to place our promotions on your site and link back via your personalized tracking link towards popular services from our website? \r\n \r\nThis way, you earn a 35% residual income, continuously from any transactions that generate from your site. \r\n \r\nThink about it, everyone benefit from SEO, so this is a big opportunity. \r\n \r\nWe already have 12k+ affiliates and our commissions are processed every month. \r\nIn the past month, we reached a significant amount in affiliate earnings to our affiliates. \r\n \r\nIf you want in, kindly message us here: \r\nhttps://monkeydigital.co/affiliates-whatsapp/ \r\n \r\nOr sign up today: \r\nhttps://www.monkeydigital.co/join-our-affiliate-program/ \r\n \r\nLooking forward, \r\nMike Anders Johansson\r\n \r\nPhone/whatsapp: +1 (775) 314-7914', '2025-02-22 12:31:09', '2025-02-22 12:31:09'),
(195, 'Nicholas Doby', 'dobyfinancial@sendnow.win', '88729725961', 'Re: Explore Funding Opportunities', 'Greetings, Mr./Ms. \r\n \r\nI‚Äôm Nicholas Doby from an investment consultancy. We connect clients globally with low or no-interest loans to help achieve your goals. Whether for personal or business/project funding, we collaborate with reputable investors to turn your proposals into reality. Share your business plan and executive summary with us at: contact@dobyfinancial.com to explore funding options. \r\n \r\nSincerely, \r\nNicholas Doby \r\nSenior Financial Consultant \r\nhttps://dobyfinancial.com', '2025-02-22 15:37:41', '2025-02-22 15:37:41'),
(196, 'Mike Enzo Brown', 'info@speed-seo.net', '86956768361', 'Unlock Your xulumart.com Potential with a Free SEO Score Check', 'Hi, \r\n \r\nWant to know how your online presence is performing? \r\nDiscover its areas of improvement with our No-Cost Site Analysis! \r\n \r\nIn just a couple of minutes, you‚Äôll get a detailed breakdown of your website‚Äôs SEO health and actionable insights to help improve your search position. \r\n \r\nBegin towards better performance and online authority. \r\n \r\nRun Your Free SEO Check Now \r\nhttps://www.speed-seo.net/check-site-seo-score/ \r\n \r\nDon‚Äôt let overlooked ranking obstacles hold you back. \r\nOptimize your website today and outrank competitors in your industry! \r\n \r\nNeed more info? Whatsapp with a SEO expert: https://www.speed-seo.net/whatsapp-with-us/ \r\n \r\nBest regards, \r\n \r\n \r\nMike Enzo Brown\r\n \r\nSpeed SEO \r\nPhone/WhatsApp: +1 (833) 454-8622', '2025-02-23 15:39:26', '2025-02-23 15:39:26'),
(197, 'AmandaNarmVatea', 'amandaaudito1@gmail.com', '89967195254', 'I‚Äôm in the mood to explore‚Ä¶ just you and me  ‚ú® ‚ú® ‚ù§Ô∏è', 'I‚Äôve been waiting to feel your touch‚Ä¶ ready? -  https://rb.gy/es66fc?epitiano', '2025-02-26 04:36:18', '2025-02-26 04:36:18'),
(198, 'Mike Sebastian Goossens', 'mike@monkeydigital.co', '87783995745', 'Boost Your Website Traffic with Geo-Targeted Social Ads ‚Äì Only $10 for 10K Visits!', 'Hello, \r\n \r\nI wanted to check in with something that could seriously improve your website‚Äôs traffic. We work with a trusted ad network that allows us to deliver real, country-targeted social ads traffic for just $10 per 10,000 visits. \r\n \r\nThis isn\'t junk clicks‚Äîit‚Äôs actual users, tailored to your chosen market and niche. \r\n \r\nWhat you get: \r\n \r\n10,000+ genuine visitors for just $10 \r\nLocalized traffic for any country \r\nScalability available based on your needs \r\nUsed by marketers‚Äîwe even use this for our SEO clients! \r\n \r\nInterested? Check out the details here: \r\nhttps://www.monkeydigital.co/product/country-targeted-traffic/ \r\n \r\nOr connect instantly on WhatsApp: \r\nhttps://monkeydigital.co/whatsapp-us/ \r\n \r\nLooking forward to helping you grow! \r\n \r\nBest, \r\nMike Sebastian Goossens\r\n \r\nPhone/whatsapp: +1 (775) 314-7914', '2025-03-01 15:33:52', '2025-03-01 15:33:52'),
(199, 'AmandaNarmVatea', 'amandaauditoc@gmail.com', '82129329975', 'Looking for me?', 'You seem interesting! Wanna chat?  \r\n \r\nMessage me there! ---> https://rb.gy/44z0k7?epitiano', '2025-03-01 21:12:04', '2025-03-01 21:12:04'),
(200, 'Mike Noah Goossens', 'info@professionalseocleanup.com', '82923838541', 'Improve your website`s ranks totally free', 'Hi there, \r\n \r\nWhile checking your xulumart.com for its ranks, I have noticed that \r\nthere are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.professionalseocleanup.com/ \r\n \r\nAsk us how we do it: \r\nhttps://www.professionalseocleanup.com/whatsapp/ \r\n \r\nRegards \r\nMike Noah Goossens\r\n \r\nPhone: +1 (855) 221-7591', '2025-03-02 22:10:43', '2025-03-02 22:10:43'),
(201, 'Kevin Barber', 'britt.howie91@hotmail.com', '2921352467', 'Day 1: Why Your Marketing Is Failing (And How To Fix It Starting Today)', 'Hi Xulumart,\r\n\r\nLet‚Äôs face it‚Äîmost marketing strategies today are ineffective, leaving business owners frustrated and wondering where all their money went. \r\n\r\nHere‚Äôs the truth: Traditional marketing doesn‚Äôt work anymore. It‚Äôs about time to shift to direct-response marketing, the proven strategy that generates results in the real world.\r\n\r\nDan Kennedy, one of the leading marketing experts, swears by direct-response marketing, and his strategies have helped thousands of business owners grow their brands. \r\n\r\nLet me show you how to apply it to your business.\r\n\r\nStep 1: Know Your Target Audience\r\n\r\nTargeting everyone is a huge mistake. You must define your ideal customer. Direct-response marketing requires you to speak directly to a specific group of people.\r\n\r\nExample 1:\r\nTarget Audience: Busy professionals\r\n\r\nOffer: ‚ÄúQuick and effective workout plans for busy professionals.‚Äù\r\n\r\nThis specific focus allows businesses to craft marketing messages that truly resonate.\r\n\r\nExample 2:\r\nTarget Audience: Aspiring entrepreneurs\r\n\r\nOffer: ‚ÄúThe ultimate guide to start your e-commerce store in 30 days‚Äîno prior experience required.‚Äù\r\n\r\nThis appeals directly to the desires of this niche, making the marketing message much stronger.\r\n\r\nStep 2: Clear and Compelling Offer\r\n\r\nA great product is only as good as the offer. The offer should solve a problem and make it impossible for your ideal customer to say no.\r\n\r\nExample 1:\r\nA fitness coach offered: ‚ÄúSign up for my program today and receive a free 1-hour coaching session, valued at $300.‚Äù This added value made the offer irresistible.\r\n\r\nExample 2:\r\nAn e-commerce store offered: ‚ÄúFree shipping on all orders over $50, plus a free product with every purchase.‚Äù The free bonus added to the deal makes it more attractive.\r\n\r\nStep 3: Track Everything\r\n\r\nIf you‚Äôre not measuring, you‚Äôre guessing. The most successful marketers track their results religiously.\r\n\r\nExample 1:\r\nA car dealership tested their email campaigns and found that subject lines with specific car models drove a 25% higher open rate than generic ones.\r\n\r\nExample 2:\r\nA SaaS company split their traffic between two landing pages: one with a video and one with text. The video version converted 40% more visitors into paying customers.\r\n\r\nYour Action Step:\r\nStart tracking your marketing results‚Äîwhether it‚Äôs email opens, clicks, or conversions. If you don‚Äôt track, you can‚Äôt improve.\r\n\r\nTomorrow, we‚Äôll dive into crafting irresistible offers and how to create something your customers can‚Äôt say no to.\r\n\r\nTo your success,\r\nKevin\r\n\r\nWho is Dan Kennedy?\r\nhttps://books.forbes.com/authors/dan-kennedy/\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=xulumart.com', '2025-03-03 06:53:38', '2025-03-03 06:53:38'),
(202, 'Mike Lars-Olof Karlsen', 'info@digital-x-press.com', '83169898767', 'Patience Pays Off ‚Äì See the Results', 'Hello, \r\n \r\nI know that many have difficulty to grasp that organic ranking growth takes patience and a strategic ongoing investment. \r\n \r\nSadly, very few webmasters have the willingness to witness the gradual yet impactful results that can completely change their business. \r\n \r\nWith frequent SEO changes, a steady, ongoing optimization plan is critical for achieving a sustainable profit. \r\n \r\nIf you believe this as the best approach, partner with us! \r\n \r\nExplore Our SEO Growth Packages \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\nChat With Us on WhatsApp \r\nhttps://www.digital-x-press.com/whatsapp-us/ \r\n \r\nWe offer unbeatable results for your investment, and you won‚Äôt regret choosing us as your SEO partner. \r\n \r\nThank you, \r\nDigital X SEO Experts \r\nPhone/WhatsApp: +1 (844) 754-1148', '2025-03-03 07:00:40', '2025-03-03 07:00:40'),
(203, 'Finn', 'info@marcello.medicopostura.com', '7709502835', 'Laramart || Best Handicraft Online shop', 'Hi \r\n\r\nLooking to improve your posture and live a healthier life? Our Medico Postura‚Ñ¢ Body Posture Corrector is here to help!\r\n\r\nExperience instant posture improvement with Medico Postura‚Ñ¢. This easy-to-use device can be worn anywhere, anytime ‚Äì at home, work, or even while you sleep.\r\n\r\nMade from lightweight, breathable fabric, it ensures comfort all day long.\r\n\r\nGrab it today at a fantastic 60% OFF: https://medicopostura.com\r\n\r\nPlus, enjoy FREE shipping for today only!\r\n\r\nDon\'t miss out on this amazing deal. Get yours now and start transforming your posture!\r\n\r\nThe Best, \r\n\r\nFinn', '2025-03-07 16:12:45', '2025-03-07 16:12:45'),
(204, 'Jayrn Marques', 'harpole.aurelia6@msn.com', '4403600588', '[1]: How to Attract Customers Like a Pro', 'Hi Xulumart,\r\n\r\nI still remember sitting at my desk, staring at my sales numbers, wondering why nothing was working. \r\n\r\nI had tried everything‚Äîrunning ads, tweaking my website, and offering discounts‚Äîbut my results were frustratingly inconsistent. \r\n\r\nOne month would bring a flood of leads, and the next? Crickets.\r\n\r\nThen, I stumbled across a simple shift in strategy that changed everything. \r\n\r\nInstead of chasing customers, I learned how to pull them in naturally‚Äîcreating messaging and systems that made my business the only logical choice. \r\n\r\nThe impact was immediate, and today, I‚Äôm sharing the exact strategies so you can do the same.\r\n\r\nLet\'s dive in: \r\nhttps://marketersmentor.com/attract-customers.php?refer=xulumart.com\r\n\r\nTalk soon,\r\nJayrn\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=xulumart.com', '2025-03-08 04:10:59', '2025-03-08 04:10:59'),
(205, 'Joanna Riggs', 'joannariggs94@gmail.com', '6881427884', 'Explainer Video for your website?', 'Hi,\r\n\r\nI just visited xulumart.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur videos cost just $195 for a 30 second video ($239 for 60 seconds) and include a full script, voice-over and video.\r\n\r\nI can show you some previous videos we\'ve done if you want me to send some over. Let me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna\r\n\r\nUnsubscribe: https://removeme.live/unsubscribe.php?d=xulumart.com', '2025-03-09 02:03:46', '2025-03-09 02:03:46');
INSERT INTO `queries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(206, 'Mike Swen Nilsson', 'info@strictlydigital.net', '82291851824', 'Semrush links for xulumart.com', 'Greetings, \r\n \r\nReceiving some bunch of links pointing to xulumart.com could have zero worth or harmful results for your business. \r\n \r\nIt really doesn‚Äôt matter the number of backlinks you have, what matters is the total of ranking terms those platforms rank for. \r\n \r\nThat is the critical element. \r\nNot the fake Domain Authority or ahrefs DR score. \r\nThese can be faked easily. \r\nBUT the number of high-traffic search terms the websites that point to your site contain. \r\nThat‚Äôs what really matters. \r\n \r\nGet these quality links link to your domain and your site will see real growth! \r\n \r\nWe are providing this powerful service here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nIn doubt, or need more information, message us here: \r\nhttps://www.strictlydigital.net/whatsapp-us/ \r\n \r\nSincerely, \r\nMike Swen Nilsson\r\n \r\nstrictlydigital.net \r\nPhone/WhatsApp: +1 (877) 566-3738', '2025-03-10 13:36:09', '2025-03-10 13:36:09'),
(207, 'MartinLet', 'vanessagotz0@gmail.com', '81958919758', 'Sehr sexy Madchen, die nur hier nach schnellem Sex suchen', 'Nur hier treffen sich sexy Girls zum Sex http://advrts.advertising.gr/adserver/www/delivery/ck.php?oaparams=2__bannerid=194__zoneid=7__cb=88c30c667e__oadest=https%3A%2F%2Ftelegra.ph%2Fbhw-03-02%3F8544?9e5wu8m9 \r\n \r\n \r\n \r\n \r\nj5jf3w4r0q4z0l1g \r\nh9mz1c5b7v8u5c9l \r\nw3sx9l1p6g3b9a2f \r\np1vn1s9p3z2e5u9b', '2025-03-10 20:14:47', '2025-03-10 20:14:47'),
(208, 'MartinLet', 'vanessagotz0@gmail.com', '85675558613', 'Sehr sexy Madchen, die nur hier nach schnellem Sex suchen', 'Nur hier treffen sich sexy Girls zum Sex http://advrts.advertising.gr/adserver/www/delivery/ck.php?oaparams=2__bannerid=194__zoneid=7__cb=88c30c667e__oadest=https%3A%2F%2Ftelegra.ph%2Fbhw-03-02%3F8544?9e5wu8m9 \r\n \r\n \r\n \r\n \r\nj5jf3w4r0q4z0l1g \r\nh9mz1c5b7v8u5c9l \r\nw3sx9l1p6g3b9a2f \r\np1vn1s9p3z2e5u9b', '2025-03-10 20:14:49', '2025-03-10 20:14:49'),
(209, 'MartinLet', 'vanessagotz0@gmail.com', '84426479224', 'Sehr sexy Madchen, die nur hier nach schnellem Sex suchen', 'Nur hier treffen sich sexy Girls zum Sex http://advrts.advertising.gr/adserver/www/delivery/ck.php?oaparams=2__bannerid=194__zoneid=7__cb=88c30c667e__oadest=https%3A%2F%2Ftelegra.ph%2Fbhw-03-02%3F8544?9e5wu8m9 \r\n \r\n \r\n \r\n \r\nj5jf3w4r0q4z0l1g \r\nh9mz1c5b7v8u5c9l \r\nw3sx9l1p6g3b9a2f \r\np1vn1s9p3z2e5u9b', '2025-03-10 20:14:51', '2025-03-10 20:14:51'),
(210, 'MartinLet', 'vanessagotz0@gmail.com', '89457828527', 'Sehr sexy Madchen, die nur hier nach schnellem Sex suchen', 'Nur hier treffen sich sexy Girls zum Sex http://advrts.advertising.gr/adserver/www/delivery/ck.php?oaparams=2__bannerid=194__zoneid=7__cb=88c30c667e__oadest=https%3A%2F%2Ftelegra.ph%2Fbhw-03-02%3F8544?9e5wu8m9 \r\n \r\n \r\n \r\n \r\nj5jf3w4r0q4z0l1g \r\nh9mz1c5b7v8u5c9l \r\nw3sx9l1p6g3b9a2f \r\np1vn1s9p3z2e5u9b', '2025-03-10 20:14:53', '2025-03-10 20:14:53'),
(211, 'MartinLet', 'vanessagotz0@gmail.com', '88454988844', 'Sehr sexy Madchen, die nur hier nach schnellem Sex suchen', 'Nur hier treffen sich sexy Girls zum Sex http://advrts.advertising.gr/adserver/www/delivery/ck.php?oaparams=2__bannerid=194__zoneid=7__cb=88c30c667e__oadest=https%3A%2F%2Ftelegra.ph%2Fbhw-03-02%3F8544?9e5wu8m9 \r\n \r\n \r\n \r\n \r\nj5jf3w4r0q4z0l1g \r\nh9mz1c5b7v8u5c9l \r\nw3sx9l1p6g3b9a2f \r\np1vn1s9p3z2e5u9b', '2025-03-10 20:14:54', '2025-03-10 20:14:54'),
(212, 'Forestgueva', 'ivo.rodrigo2001@gmail.com', '84793311857', 'URGENT! Last Chance! Withdraw Your $150,785.98 Now!', 'URGENT MESSAGE! YOUR $150,885.49 IS ABOUT TO EXPIRE! https://script.google.com/macros/s/AKfycbwhLMdhsqFEeEYCNdLqr3Rh7q3IuOoOYOGBZAm9agd2Zo4e2bkeeUPkdmwWdh_KSuMGnQ/exec/7v6u9h3y/3u7f/g/o1/7a9b0l4e/6n6y/s/2q/2d8i0g2q/5y0g/j/ey?0r6em2u3 \r\n \r\n \r\n \r\n \r\nq1iq9k0h5w0g0d3m \r\ns1uk4g7v6f3b3v1a \r\nu9uj9k0e2s6y9r3r \r\nq9ow4g7n3h9s1w9w', '2025-03-12 12:24:10', '2025-03-12 12:24:10'),
(213, 'Forestgueva', 'ivo.rodrigo2001@gmail.com', '84519846312', 'URGENT! Last Chance! Withdraw Your $150,785.98 Now!', 'URGENT MESSAGE! YOUR $150,885.49 IS ABOUT TO EXPIRE! https://script.google.com/macros/s/AKfycbwhLMdhsqFEeEYCNdLqr3Rh7q3IuOoOYOGBZAm9agd2Zo4e2bkeeUPkdmwWdh_KSuMGnQ/exec/7v6u9h3y/3u7f/g/o1/7a9b0l4e/6n6y/s/2q/2d8i0g2q/5y0g/j/ey?0r6em2u3 \r\n \r\n \r\n \r\n \r\nq1iq9k0h5w0g0d3m \r\ns1uk4g7v6f3b3v1a \r\nu9uj9k0e2s6y9r3r \r\nq9ow4g7n3h9s1w9w', '2025-03-12 12:24:12', '2025-03-12 12:24:12'),
(214, 'Forestgueva', 'ivo.rodrigo2001@gmail.com', '85849139644', 'URGENT! Last Chance! Withdraw Your $150,785.98 Now!', 'URGENT MESSAGE! YOUR $150,885.49 IS ABOUT TO EXPIRE! https://script.google.com/macros/s/AKfycbwhLMdhsqFEeEYCNdLqr3Rh7q3IuOoOYOGBZAm9agd2Zo4e2bkeeUPkdmwWdh_KSuMGnQ/exec/7v6u9h3y/3u7f/g/o1/7a9b0l4e/6n6y/s/2q/2d8i0g2q/5y0g/j/ey?0r6em2u3 \r\n \r\n \r\n \r\n \r\nq1iq9k0h5w0g0d3m \r\ns1uk4g7v6f3b3v1a \r\nu9uj9k0e2s6y9r3r \r\nq9ow4g7n3h9s1w9w', '2025-03-12 12:24:14', '2025-03-12 12:24:14'),
(215, 'Forestgueva', 'ivo.rodrigo2001@gmail.com', '88799531936', 'URGENT! Last Chance! Withdraw Your $150,785.98 Now!', 'URGENT MESSAGE! YOUR $150,885.49 IS ABOUT TO EXPIRE! https://script.google.com/macros/s/AKfycbwhLMdhsqFEeEYCNdLqr3Rh7q3IuOoOYOGBZAm9agd2Zo4e2bkeeUPkdmwWdh_KSuMGnQ/exec/7v6u9h3y/3u7f/g/o1/7a9b0l4e/6n6y/s/2q/2d8i0g2q/5y0g/j/ey?0r6em2u3 \r\n \r\n \r\n \r\n \r\nq1iq9k0h5w0g0d3m \r\ns1uk4g7v6f3b3v1a \r\nu9uj9k0e2s6y9r3r \r\nq9ow4g7n3h9s1w9w', '2025-03-12 12:24:16', '2025-03-12 12:24:16'),
(216, 'Forestgueva', 'ivo.rodrigo2001@gmail.com', '84481116556', 'URGENT! Last Chance! Withdraw Your $150,785.98 Now!', 'URGENT MESSAGE! YOUR $150,885.49 IS ABOUT TO EXPIRE! https://script.google.com/macros/s/AKfycbwhLMdhsqFEeEYCNdLqr3Rh7q3IuOoOYOGBZAm9agd2Zo4e2bkeeUPkdmwWdh_KSuMGnQ/exec/7v6u9h3y/3u7f/g/o1/7a9b0l4e/6n6y/s/2q/2d8i0g2q/5y0g/j/ey?0r6em2u3 \r\n \r\n \r\n \r\n \r\nq1iq9k0h5w0g0d3m \r\ns1uk4g7v6f3b3v1a \r\nu9uj9k0e2s6y9r3r \r\nq9ow4g7n3h9s1w9w', '2025-03-12 12:24:18', '2025-03-12 12:24:18'),
(217, 'Forestgueva', 'webearn328@gmail.com', '89537992183', 'IMPORTANT MESSAGE! RUSH IN: CLAIM YOUR $150,725.36 PRIZE URGENTLY', 'URGENT! ACT FAST: COLLECT YOUR $150,535.99 CASH REWARD https://script.google.com/macros/s/AKfycbyuJdidOUed7SNUbXhHvUv8_EhqSGh-qMMFjIBxkKaWR2BfvOrhwZ30mRlpa1AoP4Aq/exec/5r5o9h5w/3z0q/3/vi/1w7l8k4u/6c9t/i/p4/9d3h9d3i/5z9d/k/36?4x2sg0g4 \r\n \r\n \r\n \r\n \r\nh4wn3y6h9i9v0y0n \r\nn8sj9n2n7y1g0q0y \r\nh5si3q0v1e9f2l6z \r\nx2uk6e8b9n3v1w4e', '2025-03-13 10:44:40', '2025-03-13 10:44:40'),
(218, 'Forestgueva', 'webearn328@gmail.com', '89557272341', 'IMPORTANT MESSAGE! RUSH IN: CLAIM YOUR $150,725.36 PRIZE URGENTLY', 'URGENT! ACT FAST: COLLECT YOUR $150,535.99 CASH REWARD https://script.google.com/macros/s/AKfycbyuJdidOUed7SNUbXhHvUv8_EhqSGh-qMMFjIBxkKaWR2BfvOrhwZ30mRlpa1AoP4Aq/exec/5r5o9h5w/3z0q/3/vi/1w7l8k4u/6c9t/i/p4/9d3h9d3i/5z9d/k/36?4x2sg0g4 \r\n \r\n \r\n \r\n \r\nh4wn3y6h9i9v0y0n \r\nn8sj9n2n7y1g0q0y \r\nh5si3q0v1e9f2l6z \r\nx2uk6e8b9n3v1w4e', '2025-03-13 10:44:42', '2025-03-13 10:44:42'),
(219, 'Forestgueva', 'webearn328@gmail.com', '88936584122', 'IMPORTANT MESSAGE! RUSH IN: CLAIM YOUR $150,725.36 PRIZE URGENTLY', 'URGENT! ACT FAST: COLLECT YOUR $150,535.99 CASH REWARD https://script.google.com/macros/s/AKfycbyuJdidOUed7SNUbXhHvUv8_EhqSGh-qMMFjIBxkKaWR2BfvOrhwZ30mRlpa1AoP4Aq/exec/5r5o9h5w/3z0q/3/vi/1w7l8k4u/6c9t/i/p4/9d3h9d3i/5z9d/k/36?4x2sg0g4 \r\n \r\n \r\n \r\n \r\nh4wn3y6h9i9v0y0n \r\nn8sj9n2n7y1g0q0y \r\nh5si3q0v1e9f2l6z \r\nx2uk6e8b9n3v1w4e', '2025-03-13 10:44:44', '2025-03-13 10:44:44'),
(220, 'Forestgueva', 'webearn328@gmail.com', '87224338476', 'IMPORTANT MESSAGE! RUSH IN: CLAIM YOUR $150,725.36 PRIZE URGENTLY', 'URGENT! ACT FAST: COLLECT YOUR $150,535.99 CASH REWARD https://script.google.com/macros/s/AKfycbyuJdidOUed7SNUbXhHvUv8_EhqSGh-qMMFjIBxkKaWR2BfvOrhwZ30mRlpa1AoP4Aq/exec/5r5o9h5w/3z0q/3/vi/1w7l8k4u/6c9t/i/p4/9d3h9d3i/5z9d/k/36?4x2sg0g4 \r\n \r\n \r\n \r\n \r\nh4wn3y6h9i9v0y0n \r\nn8sj9n2n7y1g0q0y \r\nh5si3q0v1e9f2l6z \r\nx2uk6e8b9n3v1w4e', '2025-03-13 10:44:46', '2025-03-13 10:44:46'),
(221, 'Forestgueva', 'webearn328@gmail.com', '89143317581', 'IMPORTANT MESSAGE! RUSH IN: CLAIM YOUR $150,725.36 PRIZE URGENTLY', 'URGENT! ACT FAST: COLLECT YOUR $150,535.99 CASH REWARD https://script.google.com/macros/s/AKfycbyuJdidOUed7SNUbXhHvUv8_EhqSGh-qMMFjIBxkKaWR2BfvOrhwZ30mRlpa1AoP4Aq/exec/5r5o9h5w/3z0q/3/vi/1w7l8k4u/6c9t/i/p4/9d3h9d3i/5z9d/k/36?4x2sg0g4 \r\n \r\n \r\n \r\n \r\nh4wn3y6h9i9v0y0n \r\nn8sj9n2n7y1g0q0y \r\nh5si3q0v1e9f2l6z \r\nx2uk6e8b9n3v1w4e', '2025-03-13 10:44:48', '2025-03-13 10:44:48'),
(222, 'Mike Stefan De Jong', 'mike@monkeydigital.co', '89344383281', 'Collaboration Request', 'Hi, \r\n \r\nThis is Mike from Monkey Digital, \r\nI am reaching out regarding a exciting business deal. \r\n \r\nHow would you like to place our ads on your platform and connect via your unique affiliate link towards popular products from our platform? \r\n \r\nThis way, you receive a solid 35% residual income, month after month from any sales that generate from your website. \r\n \r\nThink about it, all businesses need SEO, so this is a big opportunity. \r\n \r\nWe already have 12k+ affiliates and our commissions are processed every month. \r\nLast month, we distributed a significant amount in commissions to our affiliates. \r\n \r\nIf you want in, kindly message us here: \r\nhttps://monkeydigital.co/affiliates-whatsapp/ \r\n \r\nOr sign up today: \r\nhttps://www.monkeydigital.co/join-our-affiliate-program/ \r\n \r\nBest Regards, \r\nMike Stefan De Jong\r\n \r\nPhone/whatsapp: +1 (775) 314-7914', '2025-03-17 13:28:16', '2025-03-17 13:28:16'),
(223, 'Amelia Brown', 'ameliabrown5822@gmail.com', '7944502284', 'YouTube Promotion: Grow your subscribers by 700-1500 each month', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nAmelia', '2025-03-17 23:55:01', '2025-03-17 23:55:01'),
(224, 'Francismaida', 'nomin.momin+108t8@mail.ru', '88393915313', 'Ncfwuwjijdwefjehue iwiqkwodeigi irwodwofjihgrjeo owofjiegheijwodkowj ihiwdowdkwojefgihg xulumart.com', 'Nfwhdkjdwj rdqskwjfej wkdwodkwkifjejr okeowjrfiejfiej rowjedowkrfiejfi jrowkorwkjrfejfi jorkdworefoijfeijfowek okdwofjiejgierjfoe xulumart.com', '2025-03-21 08:42:25', '2025-03-21 08:42:25');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0H46BZhHb2QkNCmrJZx1TaR23R5rmDJTO4brRhgu', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMllFa2tHeEl3MWpsSWJGZmRvRWQwOFlxa2pLdlRPWTFmREltbXBOZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1676354076),
('QxozXkBWsvhYWlUVbemOf0PJ2uz05iISPdMqVz7M', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmhXQnFudEhiUDU1TVlZTEJGeUhXaklub1dMbTlHd0xrYk9qeVJ6biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1676354086);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
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

INSERT INTO `settings` (`id`, `name`, `logo`, `footer_logo`, `favicon`, `email`, `phone`, `address`, `vat`, `affiliate_commision`, `minimum_point`, `equivalent_point`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`, `meta_title`, `meta_description`, `meta_tag`, `meta_image`, `created_at`, `updated_at`) VALUES
(1, 'XuLu Mart', '1729009706.gif', '1703149869.gif', 'favicon_1703308273.png', 'xulumart@gmail.com', '+8801522255587', 'Mirpur-11, Shah Ali Plaza,  Dhaka.', '0', 0, 1, 1, 'https://www.facebook.com/', 'https://www.instragram.com/', 'https://www.twitter.com/', 'https://www.youtube.com/', 'https://www.linkedin.com/', NULL, NULL, NULL, NULL, NULL, '2024-10-18 08:49:41');

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
(1, '1703155239.jpg', NULL, 'https://king.ridoypaul.xyz/products', '2021-09-15 09:25:24', '2023-12-21 04:40:39'),
(2, '1703155296.jpg', NULL, 'https://king.ridoypaul.xyz/products', '2021-09-15 09:25:24', '2023-12-21 04:41:36'),
(3, '1703155278.jpg', NULL, 'https://king.ridoypaul.xyz/products', '2021-09-15 09:25:24', '2023-12-21 04:41:18'),
(4, '1703155316.jpg', NULL, 'https://king.ridoypaul.xyz/products', '2021-09-15 09:25:24', '2023-12-21 04:41:56');

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
(5, 'cse.ridoypaul@gmail.com', '2022-11-17 03:00:13', '2022-11-17 03:00:13'),
(6, 'admin@gmail.com', '2023-02-15 06:22:06', '2023-02-15 06:22:06'),
(7, 'XPu4_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-03-07 01:50:33', '2023-03-07 01:50:33'),
(8, 'erdP_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-03-11 13:50:08', '2023-03-11 13:50:08'),
(9, 'VJJE_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-03-23 02:02:15', '2023-03-23 02:02:15'),
(10, 'rtt2_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-04-16 05:26:08', '2023-04-16 05:26:08'),
(11, '7Yf5_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-04-28 17:00:13', '2023-04-28 17:00:13'),
(12, 'akn.drb@gmail.com', '2023-05-23 11:55:59', '2023-05-23 11:55:59'),
(13, 'mahfuzshuvo2@gmail.com', '2023-05-25 12:29:44', '2023-05-25 12:29:44'),
(14, 'Erwj_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-05-28 09:26:50', '2023-05-28 09:26:50'),
(15, 'E9mv_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-06-20 14:27:12', '2023-06-20 14:27:12'),
(16, 'y65y_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-07-03 11:07:01', '2023-07-03 11:07:01'),
(17, 'c7Ln_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-07-26 05:57:00', '2023-07-26 05:57:00'),
(18, 'wUC0_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-08-13 14:35:05', '2023-08-13 14:35:05'),
(19, 'tgUO_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-09-25 16:08:48', '2023-09-25 16:08:48'),
(20, '9.01hehe9kwdtw1k0tba8gg1qzd9@mail4u.lt', '2023-11-05 23:12:27', '2023-11-05 23:12:27'),
(21, 'iJuysH.hdpjjdt@lustrum.cfd', '2023-11-10 07:05:09', '2023-11-10 07:05:09'),
(22, 'sjdHyd.bmdhqd@scranch.shop', '2023-11-17 10:42:11', '2023-11-17 10:42:11'),
(23, 'QHjpSv.dmqbhjb@lustrum.cfd', '2023-11-18 13:42:28', '2023-11-18 13:42:28'),
(24, 'S2TQ_generic_b18a5b28_kingumbrellabd.com@data-backup-store.com', '2023-11-18 18:22:18', '2023-11-18 18:22:18'),
(25, 'VSeknz.pdwmth@sabletree.foundation', '2023-11-23 20:08:44', '2023-11-23 20:08:44'),
(26, 'OYojkT.pjqdbh@bakling.click', '2023-11-26 17:01:01', '2023-11-26 17:01:01'),
(27, 'YFkfaX.qjjphdw@carnana.art', '2023-12-03 02:16:26', '2023-12-03 02:16:26'),
(28, 'MhvJbC.mbdqpm@wisefoot.club', '2023-12-08 15:43:46', '2023-12-08 15:43:46'),
(29, 'NfmyOz.dwdhpmh@silesia.life', '2023-12-09 23:17:34', '2023-12-09 23:17:34'),
(30, 'XbrQHJ.pdjchbj@scranch.shop', '2023-12-15 04:34:36', '2023-12-15 04:34:36'),
(31, 'eajbbsbbrub@dont-reply.me', '2025-02-12 19:48:22', '2025-02-12 19:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `file_original_name` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `extension` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `phone`, `type`, `image`, `nid`, `city`, `address`, `is_wholeseller`, `is_active`, `referral_id`, `affiliate_applied`, `is_affiliate`, `affiliate_rejection`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Laramart', NULL, 'admin@gmail.com', '01705401056', 1, NULL, NULL, 'Dhaka', 'Mirpur, Dhaka-1216', 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$hfioXLX0Ooc1B4LPfdukIe2k1ngUJ4LJMkdNJNy60AsiNUEmyO5aO', NULL, NULL, NULL, '2uFQOOnBSMW2OLzqEc4ckhjpranUQ4jOC9kYRhPXInhJI3j0PnTAiv3fuy5F', '2021-09-02 03:46:21', '2023-02-16 00:42:47'),
(9, 'Kamal Uddin Hazari', NULL, 'kamal@test.com', '01254897566', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 1, 0, NULL, '$2y$10$3rk9VmT3KQlFFGDevSKgKeYZf5gEIChXn8.23A7n7FbApU/6mD5Tm', NULL, NULL, NULL, NULL, '2021-11-03 10:58:13', '2021-11-03 11:00:13'),
(10, 'sheikh shakil', NULL, 'shakilsumy@gmail.com', '01978015579', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$9L7ZZkyFvC6diSivPQizb.3FLifcTPtqEKhwKplax3gEj3OKu9x9q', NULL, NULL, NULL, NULL, '2021-11-18 23:17:07', '2021-11-18 23:17:07'),
(11, 'trtrfh', NULL, 'grectjytyxy@gmail.com', '01402339507', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$RedzDMeO2MkCI3Vl7/LfVeR9rI8MX20pkishJGaiDmKS/hJ3JitmK', NULL, NULL, NULL, NULL, '2021-11-28 02:17:00', '2021-11-28 02:17:00'),
(12, 'shakil 1', NULL, 'shakilsumy@ymail.com', '01705401059', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$.CtA8dwbI958lWXmbHgR6.3wn7dr2oRxAeJSifXATWueFUxxPtpLW', NULL, NULL, NULL, NULL, '2021-11-29 23:06:02', '2021-11-29 23:06:02'),
(13, 'Ashikul Islam', NULL, 'islamashikul123@gmail.com', '01647716548', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$OijkfES1u87odIFQNG/JWeiHucLm8Ptao960YNaEhX6FcxidL34aK', NULL, NULL, NULL, NULL, '2021-12-01 03:46:28', '2021-12-01 03:46:28'),
(14, 'Sheikh Farid', NULL, 'skfaridvaluka@gmail.com', '01714220723', 2, NULL, NULL, NULL, 'Sheikh zohuruddin CNG Filing Sation, word no 8, Bhaluka Poroshab, Mymensingh.', 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$A3nczCMTdBeWAgigtjChc./YzC.jP0UAXEN13kzVRFNOQe6JHs43y', NULL, NULL, NULL, NULL, '2021-12-02 22:46:43', '2021-12-02 22:59:55'),
(15, 'Ridoy Paul', NULL, 'ridoypaul2580@gmail.com', '+8801627382866', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$DRJHpzCJR9kDdSwvKvPa6uyTu9VWYKa/pV8qglGg.CGC0C2Q/SQay', NULL, NULL, NULL, NULL, '2022-09-10 10:28:12', '2022-09-10 10:28:12'),
(16, '‡¶Æ‡¶æ‡¶π‡¶´‡ßÅ‡¶ú‡ßÅ‡¶∞ ‡¶∞‡¶π‡¶Æ‡¶æ‡¶®', NULL, 'mahfuzshuvo2@gmail.com', '01917651168', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$rwlQ9W4HDFRxmrmW/O2vy.wcEsi5qzRkpNn9IsDDQPXrUuVhsp/12', NULL, NULL, NULL, NULL, '2023-05-25 12:31:09', '2023-05-25 12:31:09'),
(17, 'PlexhaSkarp', NULL, 'opleoka@expl0it.store', '84773454714', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$.ZLwAujNsEb5JLKLQsPan.dvzS3K08/4eglWRf86dLyKaJIcT1Wq6', NULL, NULL, NULL, NULL, '2023-06-02 17:43:05', '2023-06-02 17:43:08'),
(18, 'ZapforeSkarp', NULL, 'zaporye@expl0it.store', '83724533954', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$KyqmLeRg4TifX6m13.5.I.eq9W8KO91GH1/FwMzZdA4TxSR7VB0UW', NULL, NULL, NULL, NULL, '2023-06-03 16:25:24', '2023-06-03 16:25:27'),
(19, '1000FiX Services Ltd', NULL, 'redwan.official109@gmail.com', '+8809604300600', 2, '1687089848.jpg', NULL, NULL, '586/1(4th Floor), Begum Rokeya Sarani, Shewrapara, Mirpur, Dhaka-1216', 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$xWswVJ/RPlgaGgKbx/.DF.mU8BZSkZvDa21A0wogUHLb72KasTMbG', NULL, NULL, NULL, NULL, '2023-06-18 05:58:07', '2023-06-18 06:04:08'),
(20, 'Erwanoaperm', NULL, 'floinorkes@expl0it.store', '83674339469', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$Kn1o6UV/vnca7YPCIReO4OVx3DJiUAz72q9K1EOVTZmwQu.LF1lRq', NULL, NULL, NULL, NULL, '2023-07-12 17:03:30', '2023-07-12 17:03:34'),
(21, 'Dasolyaanymn', NULL, 'daflope2@expl0it.store', '81826392274', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$T8fYmYSMv81aY8vZOIMKNeHY4f9Jodjh52V5426CCOQ3PZ/XO3rIi', NULL, NULL, NULL, NULL, '2023-07-15 12:51:04', '2023-07-15 12:51:06'),
(22, 'zaimameno', NULL, 'moduldom.spb@gmail.com', '89832613278', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$HElIiUDl43d7sIxXhE0D/uRVvuDL543ldOvkJsU.Z/2O4i/7HGDHu', NULL, NULL, NULL, NULL, '2023-07-24 07:32:14', '2023-07-24 07:32:17'),
(23, 'FUaTJPCCFDcscX', NULL, 'KUAhde.hdpjjcc@lustrum.cfd', '067-406-68-88', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$Z2uLV/D3jPdYfgRmyQFJlebh.wkVxkxHvjfmfoUD9Dy//YMicpZpi', NULL, NULL, NULL, NULL, '2023-11-10 07:05:16', '2023-11-10 07:05:16'),
(24, 'JocxbneBkcjN', NULL, 'unULhO.bmdtcq@scranch.shop', '244-356-61-85', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$zOY1YeP6eqYezux8T2/8GevjjUWERknfVnWhm8JNsw2dvv.aB39iO', NULL, NULL, NULL, NULL, '2023-11-17 10:42:34', '2023-11-17 10:42:34'),
(25, 'Kate', NULL, 'VJQjFN.dmqbhdd@lustrum.cfd', '093-140-47-07', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$NcBiJ45jy5zxcNb2FD4ecOmEeTgHCHFsq/4//u7nJPV3NWxtQ/rI6', NULL, NULL, NULL, NULL, '2023-11-18 13:42:34', '2023-11-18 13:42:34'),
(26, 'wmltuSen', NULL, 'wmltu2oo@catcasinostyle.ru', '81878666443', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$5PCrPKB1ULRCP53gJg3kKuqx4KDFjjoYY1xASyNO31RneJpuWFGji', NULL, NULL, NULL, NULL, '2023-11-20 19:00:04', '2023-11-20 19:00:07'),
(27, 'mAXwEbVDCUEskD', NULL, 'dRRssf.pdwmbp@sabletree.foundation', '031-488-11-16', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$LJUxMNgD7.v1iAQKuRGXzOm2F6pR16TVtSQLBZcWGUr.iaf98x6Rq', NULL, NULL, NULL, NULL, '2023-11-23 20:08:54', '2023-11-23 20:08:54'),
(28, 'Augustus', NULL, 'IViowM.pjqdpd@bakling.click', '423-969-63-78', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$lBOkmUbxGz4IdN6yAvY8Ku6kaKRn9YViJa.u5WtMUj0aDac97Z/sO', NULL, NULL, NULL, NULL, '2023-11-26 17:01:05', '2023-11-26 17:01:05'),
(29, 'Korbin', NULL, 'djiUAd.qjjpcqq@carnana.art', '312-138-01-36', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$GUWoMHAFSickvg2pDABYZu30isGQecbblKP5dV8StdzVCnbc.xDYe', NULL, NULL, NULL, NULL, '2023-12-03 02:17:34', '2023-12-03 02:17:34'),
(30, 'Alistair', NULL, 'ojohxi.mbdhpq@wisefoot.club', '570-411-77-50', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$N19utPiws2CYO6qwikzswOdZWolcR3R2ktT2JVrWgCw9RSzYTaaQC', NULL, NULL, NULL, NULL, '2023-12-08 15:43:56', '2023-12-08 15:43:56'),
(31, 'VtJDdppruzVzfIfJ', NULL, 'LRYbaU.dwdhmhp@silesia.life', '528-019-10-88', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$FXWFyX.YX5wtuorkYuMslO2wq.DD2SK0DtYXQgsxL4mG9CmiIDtJ2', NULL, NULL, NULL, NULL, '2023-12-09 23:18:03', '2023-12-09 23:18:03'),
(32, 'VEDQKaVxRvD', NULL, 'EIUjeV.pdjchpt@scranch.shop', '052-720-08-71', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$BZhzkFKVy0qcw7SFJ/.hEutwrL5bxR7U3XFo62T/mG.pHMSNXunYy', NULL, NULL, NULL, NULL, '2023-12-15 04:34:44', '2023-12-15 04:34:44'),
(33, 'Md. Ali Akbar', NULL, 'aliakbartutul749@gmail.com', '01401277707', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$sMWq5mcfxkFNiztUIfK4C.IYByA4uuNSYIK1qDF4NDQrM0jWDsrkq', NULL, NULL, NULL, NULL, '2023-12-25 23:54:02', '2023-12-25 23:54:02'),
(34, 'Ali Akbar', NULL, 'user@gmail.com', '01401277799', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$hfioXLX0Ooc1B4LPfdukIe2k1ngUJ4LJMkdNJNy60AsiNUEmyO5aO', NULL, NULL, NULL, NULL, '2024-01-04 04:55:22', '2024-01-04 04:55:22'),
(35, 'iibwdhvz', NULL, 'lottenari@gmail.com', 'anifkesz', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$dqpTomwbGJcYqPOLHT9eoefhPg9jSud074ktc7m80Ts0BydyJMJTe', NULL, NULL, NULL, NULL, '2024-09-15 10:05:38', '2024-09-15 10:05:38'),
(36, 'kdapdnlc', NULL, 'crackllc373@gmail.com', '0154967301', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$ncG/vCt.Kf7ulQsL3QY34uv1DfsZSD6lV1YqTw0UmGHnS2/TTiaRO', NULL, NULL, NULL, NULL, '2024-10-08 14:42:40', '2024-10-08 14:42:40'),
(37, 'Hafizul', NULL, 'hafizulalam11@gmail.com', '01521359898', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$dgIeyaVlFtJxRQ1snM9RbOAqONpSMe.Yg1zzSYTMwu8co8EIBj3n6', NULL, NULL, NULL, NULL, '2024-10-15 04:58:51', '2024-10-15 04:58:51'),
(38, 'hOmJsDAAkNoGV', NULL, 'ashbenitezn9256@gmail.com', '7486452397', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$x6rOdmk0emPflV.hIaZDzeqpALgH0slduCN6TO17WH9/9z28uyoy.', NULL, NULL, NULL, NULL, '2024-10-19 03:06:03', '2024-10-19 03:06:03'),
(39, 'pADvSRobiZJ', NULL, 'spensergkh@gmail.com', '4197672569', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$Qygc5aVr5TmCnzeoVivYyO2bTy2MUPRNKfrOKrGNvlHE0A3rF9h2O', NULL, NULL, NULL, NULL, '2024-10-23 07:05:26', '2024-10-23 07:05:26'),
(40, 'llUrFdOIAqk', NULL, 'laeabutas@yahoo.com', '9002687708', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$VFOtFYdIYhCV6roy6AurDObNT/WwqJs2UZB7GRfQ7Lb6oTT44IWmC', NULL, NULL, NULL, NULL, '2024-11-08 01:34:17', '2024-11-08 01:34:17'),
(41, 'HeuxlWwAKTqN', NULL, 'nzdboml7dwwo@yahoo.com', '8910478685', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$Lxz37so4ANDd3/irETHrhubAk9cbGi4zVb9i/ZwflmHgBLo6.FM96', NULL, NULL, NULL, NULL, '2024-11-08 23:54:26', '2024-11-08 23:54:26'),
(42, 'lcaIgWWGbYYNLA', NULL, 'dario.1955@yahoo.com', '3898099205', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$72jeZk6XMR6TAZyY.tQhDe041rVZfLjeTbzRXKmJfk8cDzqI8hn4C', NULL, NULL, NULL, NULL, '2024-11-09 17:56:24', '2024-11-09 17:56:24'),
(43, 'KMruPzkITlvVdka', NULL, 'russodyanfp@gmail.com', '3331074352', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$4RnTlU/4RvWCfna.Kr2UoeUO0ku04SSc3wEwdQMpZ2GVdau1/S2zm', NULL, NULL, NULL, NULL, '2024-11-10 11:14:48', '2024-11-10 11:14:48'),
(44, 'lScvMNXky', NULL, 'linfootfillers@yahoo.com', '8452257268', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$CrYuS7mHksiQMoJip9gJDOnvwMaq/6cr4RNJ83kKUBZ0mVHaF6v76', NULL, NULL, NULL, NULL, '2024-11-12 22:31:23', '2024-11-12 22:31:23'),
(45, 'vZXHtpdcvGYufY', NULL, 'vdlxhgcokftxpwcp@yahoo.com', '4506684354', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$hbp9OVki38oREVwvHmXyHelzRjT71A.iBYAKmT7VkyO/kX288Ojf2', NULL, NULL, NULL, NULL, '2024-11-13 20:18:28', '2024-11-13 20:18:28'),
(46, 'AcBINopO', NULL, 'crzivleamick@yahoo.com', '8395258475', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$3wAYWZQWuddLuNqLnCuoLOLhKMpmzwgXiNNHw1/ATyRY6q88g1XyW', NULL, NULL, NULL, NULL, '2024-11-14 17:29:07', '2024-11-14 17:29:07'),
(47, 'ZplMgQOqpjqsXhz', NULL, 'besflee606@gmail.com', '2883586175', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$Avj/FlWUt41dVdhEscuyh.D3Wysd9.PJDvdgJkWeGS8CPcEo216bu', NULL, NULL, NULL, NULL, '2024-11-15 14:52:59', '2024-11-15 14:52:59'),
(48, 'RlaLwGFJihoCn', NULL, 'cjhewmhycaiqu@yahoo.com', '8940092963', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$qWciwEjcGh7aIX/vZUCWnO7zFuuKflLxlbgwcmt2ubYSOpszC6Prm', NULL, NULL, NULL, NULL, '2024-11-17 18:13:03', '2024-11-17 18:13:03'),
(49, 'hafizul', NULL, 'faith.hafizul@gmail.com', '01673338948', 2, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, 0, 0, NULL, '$2y$10$PVZHk5pTqlkqvzLv8RMDZevns/8rX/A.xQ/FJVI8vYGRbj7rb.JnW', NULL, NULL, NULL, NULL, '2024-12-16 06:56:35', '2024-12-16 06:56:35');

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
(8, 15, 0, 0, 0, 0, '2022-09-10 10:28:12', '2022-09-10 10:28:12'),
(9, 16, 0, 0, 0, 0, '2023-05-25 12:31:09', '2023-05-25 12:31:09'),
(10, 17, 0, 0, 0, 0, '2023-06-02 17:43:05', '2023-06-02 17:43:05'),
(11, 18, 0, 0, 0, 0, '2023-06-03 16:25:24', '2023-06-03 16:25:24'),
(12, 19, 0, 0, 0, 0, '2023-06-18 05:58:07', '2023-06-18 05:58:07'),
(13, 20, 0, 0, 0, 0, '2023-07-12 17:03:30', '2023-07-12 17:03:30'),
(14, 21, 0, 0, 0, 0, '2023-07-15 12:51:04', '2023-07-15 12:51:04'),
(15, 22, 0, 0, 0, 0, '2023-07-24 07:32:14', '2023-07-24 07:32:14'),
(16, 23, 0, 0, 0, 0, '2023-11-10 07:05:16', '2023-11-10 07:05:16'),
(17, 24, 0, 0, 0, 0, '2023-11-17 10:42:34', '2023-11-17 10:42:34'),
(18, 25, 0, 0, 0, 0, '2023-11-18 13:42:34', '2023-11-18 13:42:34'),
(19, 26, 0, 0, 0, 0, '2023-11-20 19:00:04', '2023-11-20 19:00:04'),
(20, 27, 0, 0, 0, 0, '2023-11-23 20:08:54', '2023-11-23 20:08:54'),
(21, 28, 0, 0, 0, 0, '2023-11-26 17:01:05', '2023-11-26 17:01:05'),
(22, 29, 0, 0, 0, 0, '2023-12-03 02:17:34', '2023-12-03 02:17:34'),
(23, 30, 0, 0, 0, 0, '2023-12-08 15:43:56', '2023-12-08 15:43:56'),
(24, 31, 0, 0, 0, 0, '2023-12-09 23:18:03', '2023-12-09 23:18:03'),
(25, 32, 0, 0, 0, 0, '2023-12-15 04:34:44', '2023-12-15 04:34:44'),
(26, 33, 0, 0, 0, 0, '2023-12-25 23:54:02', '2023-12-25 23:54:02'),
(27, 34, 0, 0, 0, 0, '2024-01-04 04:55:22', '2024-01-04 04:55:22'),
(28, 35, 0, 0, 0, 0, '2024-09-15 10:05:38', '2024-09-15 10:05:38'),
(29, 36, 0, 0, 0, 0, '2024-10-08 14:42:40', '2024-10-08 14:42:40'),
(30, 37, 0, 0, 0, 0, '2024-10-15 04:58:51', '2024-10-15 04:58:51'),
(31, 38, 0, 0, 0, 0, '2024-10-19 03:06:03', '2024-10-19 03:06:03'),
(32, 39, 0, 0, 0, 0, '2024-10-23 07:05:26', '2024-10-23 07:05:26'),
(33, 40, 0, 0, 0, 0, '2024-11-08 01:34:17', '2024-11-08 01:34:17'),
(34, 41, 0, 0, 0, 0, '2024-11-08 23:54:26', '2024-11-08 23:54:26'),
(35, 42, 0, 0, 0, 0, '2024-11-09 17:56:24', '2024-11-09 17:56:24'),
(36, 43, 0, 0, 0, 0, '2024-11-10 11:14:48', '2024-11-10 11:14:48'),
(37, 44, 0, 0, 0, 0, '2024-11-12 22:31:23', '2024-11-12 22:31:23'),
(38, 45, 0, 0, 0, 0, '2024-11-13 20:18:28', '2024-11-13 20:18:28'),
(39, 46, 0, 0, 0, 0, '2024-11-14 17:29:07', '2024-11-14 17:29:07'),
(40, 47, 0, 0, 0, 0, '2024-11-15 14:52:59', '2024-11-15 14:52:59'),
(41, 48, 0, 0, 0, 0, '2024-11-17 18:13:03', '2024-11-17 18:13:03'),
(42, 49, 0, 0, 0, 0, '2024-12-16 06:56:35', '2024-12-16 06:56:35');

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
(9, 8, NULL, NULL, 0, NULL, NULL, '2022-09-10 10:28:12', '2022-09-10 10:28:12'),
(10, 9, NULL, NULL, 0, NULL, NULL, '2023-05-25 12:31:09', '2023-05-25 12:31:09'),
(11, 10, NULL, NULL, 0, NULL, NULL, '2023-06-02 17:43:05', '2023-06-02 17:43:05'),
(12, 11, NULL, NULL, 0, NULL, NULL, '2023-06-03 16:25:24', '2023-06-03 16:25:24'),
(13, 12, NULL, NULL, 0, NULL, NULL, '2023-06-18 05:58:07', '2023-06-18 05:58:07'),
(14, 13, NULL, NULL, 0, NULL, NULL, '2023-07-12 17:03:30', '2023-07-12 17:03:30'),
(15, 14, NULL, NULL, 0, NULL, NULL, '2023-07-15 12:51:04', '2023-07-15 12:51:04'),
(16, 15, NULL, NULL, 0, NULL, NULL, '2023-07-24 07:32:14', '2023-07-24 07:32:14'),
(17, 16, NULL, NULL, 0, NULL, NULL, '2023-11-10 07:05:16', '2023-11-10 07:05:16'),
(18, 17, NULL, NULL, 0, NULL, NULL, '2023-11-17 10:42:34', '2023-11-17 10:42:34'),
(19, 18, NULL, NULL, 0, NULL, NULL, '2023-11-18 13:42:34', '2023-11-18 13:42:34'),
(20, 19, NULL, NULL, 0, NULL, NULL, '2023-11-20 19:00:04', '2023-11-20 19:00:04'),
(21, 20, NULL, NULL, 0, NULL, NULL, '2023-11-23 20:08:54', '2023-11-23 20:08:54'),
(22, 21, NULL, NULL, 0, NULL, NULL, '2023-11-26 17:01:05', '2023-11-26 17:01:05'),
(23, 22, NULL, NULL, 0, NULL, NULL, '2023-12-03 02:17:34', '2023-12-03 02:17:34'),
(24, 23, NULL, NULL, 0, NULL, NULL, '2023-12-08 15:43:56', '2023-12-08 15:43:56'),
(25, 24, NULL, NULL, 0, NULL, NULL, '2023-12-09 23:18:04', '2023-12-09 23:18:04'),
(26, 25, NULL, NULL, 0, NULL, NULL, '2023-12-15 04:34:44', '2023-12-15 04:34:44'),
(27, 26, NULL, NULL, 0, NULL, NULL, '2023-12-25 23:54:02', '2023-12-25 23:54:02'),
(28, 27, NULL, NULL, 0, NULL, NULL, '2024-01-04 04:55:22', '2024-01-04 04:55:22'),
(29, 28, NULL, NULL, 0, NULL, NULL, '2024-09-15 10:05:38', '2024-09-15 10:05:38'),
(30, 29, NULL, NULL, 0, NULL, NULL, '2024-10-08 14:42:40', '2024-10-08 14:42:40'),
(31, 30, NULL, NULL, 0, NULL, NULL, '2024-10-15 04:58:51', '2024-10-15 04:58:51'),
(32, 31, NULL, NULL, 0, NULL, NULL, '2024-10-19 03:06:03', '2024-10-19 03:06:03'),
(33, 32, NULL, NULL, 0, NULL, NULL, '2024-10-23 07:05:26', '2024-10-23 07:05:26'),
(34, 33, NULL, NULL, 0, NULL, NULL, '2024-11-08 01:34:17', '2024-11-08 01:34:17'),
(35, 34, NULL, NULL, 0, NULL, NULL, '2024-11-08 23:54:26', '2024-11-08 23:54:26'),
(36, 35, NULL, NULL, 0, NULL, NULL, '2024-11-09 17:56:24', '2024-11-09 17:56:24'),
(37, 36, NULL, NULL, 0, NULL, NULL, '2024-11-10 11:14:48', '2024-11-10 11:14:48'),
(38, 37, NULL, NULL, 0, NULL, NULL, '2024-11-12 22:31:23', '2024-11-12 22:31:23'),
(39, 38, NULL, NULL, 0, NULL, NULL, '2024-11-13 20:18:28', '2024-11-13 20:18:28'),
(40, 39, NULL, NULL, 0, NULL, NULL, '2024-11-14 17:29:07', '2024-11-14 17:29:07'),
(41, 40, NULL, NULL, 0, NULL, NULL, '2024-11-15 14:52:59', '2024-11-15 14:52:59'),
(42, 41, NULL, NULL, 0, NULL, NULL, '2024-11-17 18:13:03', '2024-11-17 18:13:03'),
(43, 42, NULL, NULL, 0, NULL, NULL, '2024-12-16 06:56:35', '2024-12-16 06:56:35');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_customer_id_index` (`customer_id`),
  ADD KEY `carts_product_id_index` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `change_colors`
--
ALTER TABLE `change_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
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
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_sale_offers`
--
ALTER TABLE `flash_sale_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flash_sale_offers_id_index` (`id`);

--
-- Indexes for table `flash_sale_offer_products`
--
ALTER TABLE `flash_sale_offer_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flash_sale_offer_products_id_index` (`id`),
  ADD KEY `flash_sale_offer_products_flash_sale_id_index` (`flash_sale_id`),
  ADD KEY `flash_sale_offer_products_product_id_index` (`product_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_abouts`
--
ALTER TABLE `home_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_four_banners`
--
ALTER TABLE `home_page_four_banners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_stocks_product_id_index` (`product_id`),
  ADD KEY `product_stocks_variant_index` (`variant`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_points`
--
ALTER TABLE `registration_points`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `seller_requests`
--
ALTER TABLE `seller_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
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
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `change_colors`
--
ALTER TABLE `change_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flash_sale_offers`
--
ALTER TABLE `flash_sale_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flash_sale_offer_products`
--
ALTER TABLE `flash_sale_offer_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `home_abouts`
--
ALTER TABLE `home_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_page_four_banners`
--
ALTER TABLE `home_page_four_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

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
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=549;

--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `registration_points`
--
ALTER TABLE `registration_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `wallet_entries`
--
ALTER TABLE `wallet_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
