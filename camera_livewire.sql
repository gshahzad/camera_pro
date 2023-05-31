-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 10:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camera_livewire`
--

-- --------------------------------------------------------

--
-- Table structure for table `cameras`
--

DROP TABLE IF EXISTS `cameras`;
CREATE TABLE `cameras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `camera_embed_code` varchar(255) DEFAULT NULL,
  `camera_longitude` varchar(255) DEFAULT NULL,
  `camera_latitude` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` double(14,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`id`, `name`, `description`, `camera_embed_code`, `camera_longitude`, `camera_latitude`, `full_name`, `email_address`, `contact_no`, `address`, `city`, `post_code`, `country`, `status`, `created_at`, `updated_at`, `price`) VALUES
(1, 'Camera 1', 'Birmingham Warehouse Parking', 'qweqwe', 'qwe', 'qweqweqwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-05-28 14:22:49', '2023-05-28 14:22:49', 12.00),
(2, 'Camera 2', 'Birmingham Warehouse Parking', 'qweqwe', 'qwe', 'qweqweqwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-05-28 14:22:49', '2023-05-28 14:22:49', 14.00),
(3, 'Camera 3', 'Birmingham Warehouse Parking', 'qweqwe', 'qwe', 'qweqweqwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-05-28 14:22:49', '2023-05-28 14:22:49', 15.00),
(4, 'Warehouse Parking', 'Birmingham Warehouse Parking', '456456', 'qwe', 'qweqweqwe', 'Jsaon', 'json@hotmail.com', '+44564067839', 'Birmingham', 'Birmingham', '798', 'UK', 1, '2023-05-28 15:11:21', '2023-05-28 15:11:21', 14.00);

-- --------------------------------------------------------

--
-- Table structure for table `camera_prices_packages`
--

DROP TABLE IF EXISTS `camera_prices_packages`;
CREATE TABLE `camera_prices_packages` (
  `id` int(11) UNSIGNED DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `price` double(14,2) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `camera_prices_packages`
--

INSERT INTO `camera_prices_packages` (`id`, `duration`, `price`) VALUES
(1, 5, 10.00),
(2, 10, 15.00),
(3, 15, 23.00);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
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

DROP TABLE IF EXISTS `migrations`;
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_05_27_192931_create_cameras_table', 2),
(10, '2023_05_27_192931_create_orders_products_table', 3),
(11, '2023_05_27_192931_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `order_total` double(14,2) NOT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `customer_city` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `camera_duration` int(11) DEFAULT 0,
  `user_viewed_time` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_total`, `transaction_id`, `order_date`, `customer_name`, `customer_email`, `customer_address`, `customer_city`, `post_code`, `camera_duration`, `user_viewed_time`) VALUES
(1, 15.00, 'ch_3NDmo2CED2ssmkfY0WzEgjUz', '2023-05-31 11:03:06', 'Muhammad Shahzad', 'gshahzad@hotmail.com', 'Al riaz building room no M05', 'Ajman', '798', 5, 0),
(2, 15.00, 'ch_3NDqM5CED2ssmkfY0SzVk3Qg', '2023-05-31 14:50:33', 'Muhammad Shahzad', 'gshahzad@hotmail.com', 'Al riaz building room no M05', 'Ajman', '798', 5, 0),
(3, 15.00, 'ch_3NDqRNCED2ssmkfY1P5PJOI1', '2023-05-31 14:55:58', 'Muhammad Shahzad', 'gshahzad@hotmail.com', 'Al riaz building room no M05', 'Ajman', '123', 5, 0),
(4, 15.00, 'ch_3NDqSKCED2ssmkfY1g6641ja', '2023-05-31 14:56:57', 'Muhammad Shahzad', 'gshahzad@hotmail.com', 'Al riaz building room no M05', 'Ajman', '123', 5, 0),
(5, 15.00, 'ch_3NDqTDCED2ssmkfY01fKg5Tu', '2023-05-31 14:57:52', 'Muhammad Shahzad', 'gshahzad@hotmail.com', 'Al riaz building room no M05', 'Ajman', '54000', 5, 0),
(6, 10.00, 'ch_3NDsYdCED2ssmkfY0iktYhu4', '2023-05-31 17:11:37', 'Muhammad Shahzad', 'gshahzad@hotmail.com', 'Al riaz building room no M05', 'Ajman', '789798', 5, 0),
(7, 10.00, 'ch_3NDsZECED2ssmkfY0UJE3BeB', '2023-05-31 17:12:12', 'Muhammad Shahzad', 'gshahzad@hotmail.com', 'Al riaz building room no M05', 'Ajman', '789798', 5, 0),
(8, 23.00, 'ch_3NDtYBCED2ssmkfY0SeHvxGC', '2023-05-31 18:15:12', 'Muhammad Shahzad', 'gshahzad@hotmail.com', 'Al riaz building room no M05', 'Ajman', '789798', 15, 0),
(9, 15.00, 'ch_3NDuI5CED2ssmkfY09TypxXD', '2023-05-31 19:02:37', 'Muhammad Shahzad', 'gshahzad@hotmail.com', 'Al riaz building room no M05', 'Ajman', '789798', 10, 0),
(10, 10.00, 'ch_3NDuyQCED2ssmkfY1zjEjBTh', '2023-05-31 19:46:23', 'Muhammad Shahzad', 'gshahzad@hotmail.com', 'Al riaz building room no M05', 'Ajman', '789798', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

DROP TABLE IF EXISTS `orders_products`;
CREATE TABLE `orders_products` (
  `orders_product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `product_price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`orders_product_id`, `order_id`, `product_id`, `product_price`) VALUES
(1, 1, 3, 15),
(2, 2, 3, 15),
(3, 3, 3, 15),
(4, 4, 3, 15),
(5, 5, 3, 15),
(6, 6, 3, 10),
(7, 7, 3, 10),
(8, 8, 3, 23),
(9, 9, 4, 15),
(10, 10, 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
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

DROP TABLE IF EXISTS `users`;
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
-- Indexes for table `cameras`
--
ALTER TABLE `cameras`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`orders_product_id`);

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
-- AUTO_INCREMENT for table `cameras`
--
ALTER TABLE `cameras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `orders_product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
