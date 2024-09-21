-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 10:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spinella`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `uuid`, `status`, `created_at`, `updated_at`) VALUES
(1, 'metii', '6a182a16e66268d7ce85fcfe945df787', 'mahdi.salari79@yahoo.com\r\n', '31e9f2a8-bae5-485c-9bdc-971fd0de95ce\r\n', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_21_155556_create_admins_table', 1),
(5, '2024_09_21_160049_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hhaM2tU9WPTzflm6lHgREjSCluQN7CC3ifgHDaDf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3VJdkl3VTd0aFdqdDVveWZxUHU5cmN3OFF0Z0oxYUxYaDFBT0xtaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726946691);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) NOT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`json`)),
  `lang` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `page`, `json`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'home', '{\"slider\":{\"slider1\":{\"title\":\"Spinella\",\"subtitle\":\"Saffron\",\"text\":\"Experience purity with Spinella; Where authenticity and quality come together in each strand of saffron.\",\"image\":\"slide-1.jpg\"},\"slider2\":{\"title\":\"Spinella\",\"subtitle\":\"Saffron\",\"text\":\"Experience purity with Spinella; Where authenticity and quality come together in each strand of saffron.\",\"image\":\"slide-2.jpg\"},\"slider3\":{\"title\":\"Spinella\",\"subtitle\":\"Saffron\",\"text\":\"Experience purity with Spinella; Where authenticity and quality come together in each strand of saffron.\",\"image\":\"slide-3.jpg\"}},\"interview\":{\"title\":\"Discovereeeee\",\"subtitle\":\"our story\",\"text\":\"Spinella+is+the+Latin+root+of+the+word+spinel%2C+which+means+ruby.+The+reason+for+this+name%2C+apart+from+the+color%2C+is+the+valuable+similarity+of+ruby+%E2%80%8B%E2%80%8Band+saffron+as+the+most+expensive+spices+in+the+world%2C+as+well+as+the+many+healing+properties+of+saffron+and+ruby%2C+which+have+been+known+for+a+long+time+in+our+history+and+culture.\",\"image\":\"bg-1.jpg\"},\"why\":{\"why1\":{\"title\":\"Unique packaging\",\"text\":\"Our+unique+packaging+preserves+the+freshness+and+quality+of+our+products%2C+ensuring+an+exceptional+experience+from+first+glance+to+final+taste.\"},\"why2\":{\"title\":\"Premium quality\",\"text\":\"Our+premium+quality+products+are+crafted+with+the+highest+standards%2C+delivering+unmatched+flavor+and+excellence+in+every+detail.\"},\"why3\":{\"title\":\"Direct Supply\",\"text\":\"We%252Bensure%252Bdirect%252Bsupply%252Bfrom%252Bfarm%252Bto%252Byou%25252C%252Bguaranteeing%252Bfreshness%252Band%252Bauthenticity%252Bin%252Bevery%252Bproduct.\"},\"why4\":{\"title\":\"Product with your brand\",\"text\":\"Upon%252Byour%252Brequest%25252C%252Bwe%252Bhave%252Bthe%252Bability%252Bto%252Bpackage%252Ball%252Bour%252Bproducts%252Bwith%252Byour%252Bown%252Bbrand%252Band%252Bpresent%252Bthem%252Bto%252Byou.\"}},\"banner\":{\"banner1\":{\"title\":\"Premium\",\"text\":\"Saffron\",\"image\":\"bg-2.jpg\"},\"banner2\":{\"title\":\"Spinella\",\"text\":\"From Our Fields to Your Table\",\"image\":\"bg-4.jpg\"}},\"products\":{\"title\":\"Saffron\",\"image\":\"bg-3.jpg\",\"product1\":{\"name\":\"Ordinary Saffron\",\"desc\":\"A classic blend of saffron\"},\"product2\":{\"name\":\"Precious Saffron\",\"desc\":\"Good quality of saffron with extras\"},\"product3\":{\"name\":\"Super Precious Saffron\",\"desc\":\"High quality of saffron with extras\"},\"product4\":{\"name\":\"Gift saffron\",\"desc\":\"Saffron with extras for gift\"},\"product5\":{\"name\":\"Pushal saffron\",\"desc\":\"Saffron with extras for pushal\"}},\"desc\":{\"text\":\"Spinella+is+a+leading+company+specializing+in+the+production+and+export+of+premium+agricultural+products%2C+including+saffron%2C+dried+fruits%2C+spices%2C+and+nuts.+Our+name%2C+derived+from+the+Latin+word+%27spinel%2C%27+meaning+ruby%2C+reflects+the+rich+color+and+high+value+of+our+offerings.+Utilizing+top-notch+production+and+packaging+methods%2C+we+deliver+high-quality+products+to+global+markets+while+adhering+to+sustainability+and+environmental+respect.+At+Spinella%2C+our+dedicated+and+experienced+team+is+committed+to+providing+exceptional+products+and+services+to+earn+the+trust+and+satisfaction+of+our+customers.\",\"image\":\"bg-5.jpg\"},\"gallery\":{\"image1\":\"pf%20(1)\",\"image2\":\"pf%20(2)\",\"image3\":\"pf%20(3)\",\"image4\":\"pf%20(4)\",\"image5\":\"pf%20(5)\",\"image6\":\"pf%20(6)\"},\"recipe\":{\"title\":\"Recipe\",\"subtitle\":\"Foods with saffron\",\"text\":\"In+this+section%2C+recipes+for+cooking+some+dishes+with+saffron+have+been+taught.+Click+to+view+these+recipes.\",\"image\":\"bg-side-1.jpg\"},\"slogan\":{\"title\":\"Spinella offers Original and premium selection products.\"},\"footer\":{\"contact\":{\"address\":\"No. 3, 2nd floor, Shahab St., West Mehrdad Alley, Qaitarieh-Pourheidari-Tehran\",\"phone\":\"+98 900 68 900 84\",\"email\":\"info@spinellasaffron.com\"},\"info\":{\"logo\":\"footer-logo1.png\",\"desc\":\"Spinella exports premium Iranian saffron, dried fruits, spices, and nuts. We are committed to delivering the highest quality products to our customers worldwide.\"},\"social\":{\"fb\":\"https://facebook.com/spinellasaffron\",\"ig\":\"https://instagram.com/spinellasaffron\",\"wa\":\"https://wa.me/989006890084\",\"tg\":\"https://t.me/+989006890084\",\"sk\":\"skype:+989006890084?call\"}}}', 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
