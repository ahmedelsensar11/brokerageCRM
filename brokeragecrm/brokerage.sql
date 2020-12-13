-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 09:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brokerage`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `action_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `customer_id`, `user_id`, `action_type`, `desc`, `created_at`, `updated_at`) VALUES
(1, 4, 9, 'Follow', 'I visited Mr.Ahmed yesterday', '2020-12-12 23:54:10', '2020-12-12 23:54:10'),
(2, 4, 9, 'Call', 'I call Mr.Ahmed last day at 3:30 PM', '2020-12-12 23:55:19', '2020-12-12 23:55:19'),
(3, 3, 8, 'No Action', 'no status', '2020-12-12 23:59:44', '2020-12-12 23:59:44'),
(4, 9, 8, 'Call', 'called mr.abdelrahman', '2020-12-13 00:07:12', '2020-12-13 00:07:12'),
(5, 7, 9, 'Visit', 'i visited mr.khaled yesterday', '2020-12-13 00:18:09', '2020-12-13 00:18:09'),
(6, 6, 8, 'Call', 'called mr samy', '2020-12-13 00:54:05', '2020-12-13 00:54:05'),
(7, 8, 8, 'Follow', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', '2020-12-13 02:13:44', '2020-12-13 02:13:44'),
(8, 8, 8, 'Visit', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', '2020-12-13 02:23:10', '2020-12-13 02:23:10'),
(9, 4, 10, 'Follow', 'followed him desc followed him desc followed him desc followed him desc', '2020-12-13 03:19:34', '2020-12-13 03:19:34'),
(10, 3, 10, 'Call', 'called him desc followed him desc', '2020-12-13 03:22:36', '2020-12-13 03:22:36'),
(11, 3, 10, 'Follow', 'i followed him ....', '2020-12-13 04:42:58', '2020-12-13 04:42:58'),
(12, 3, 10, 'Visit', 'visited him', '2020-12-13 05:02:53', '2020-12-13 05:02:53'),
(13, 3, 10, 'No Action', NULL, '2020-12-13 05:10:44', '2020-12-13 05:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No Action',
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assigned_to` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `address1`, `address2`, `city`, `country`, `status`, `postal_code`, `assigned_to`, `created_at`, `updated_at`) VALUES
(1, 'Ali', 'Saleh', 'ali11@gmail.com', '+201285372766', '23, Tahreer st', 'level3', 'Cairo', 'Egypt', 'Called', '440000', 7, '2020-12-11 21:28:27', '2020-12-12 06:33:16'),
(2, 'zezo', 'Saleh', 'zezo11@gmail.com', '+201285372711', '23, Tahreer st', 'level3', 'Cairo', 'Egypt', 'No Action', '440000', NULL, '2020-12-11 21:28:39', '2020-12-11 21:28:39'),
(3, 'Kamel', 'Tharwat', 'kemo@gmail.com', '+201285372709', '11 Albahr st', 'level3', 'Tanta', 'Egypt', 'No Action', '25090', 10, '2020-12-11 21:28:51', '2020-12-13 05:10:44'),
(4, 'Ahmed', 'Saleh', 'ahmelsens11@gmail.com', '+20128537006', '23, Tahreer st', 'level3', 'Cairo', 'Egypt', 'Followed', '440000', 1, '2020-12-11 21:29:52', '2020-12-13 03:19:34'),
(5, 'Bassam', 'Aly', 'beso@gmail.com', '+201222372766', '23, Tahreer st', 'level3', 'Cairo', 'Egypt', 'Followed', '440000', 9, '2020-12-11 21:30:06', '2020-12-12 23:12:11'),
(6, 'samy', 'Abd Elazez', 'samermohamad790@gmail.com', '+20128332711', '23, Tahreer st', 'level3', 'Cairo', 'Egypt', 'Called', '440000', 8, '2020-12-12 01:26:58', '2020-12-13 00:54:05'),
(7, 'khaled', 'ahmed', 'khaled11@gmail', '+2010032711', '23, Tahreer st', 'level3', 'Cairo', 'Egypt', 'Visited', '440000', 3, '2020-12-12 01:33:55', '2020-12-13 00:18:09'),
(8, 'Hassan', 'Saleh', 'hassan@gmail.com', '+211285372766', '23, Tahreer st', 'level3', 'Cairo', 'Egypt', 'Visited', '440000', 8, '2020-12-12 02:20:16', '2020-12-13 02:23:10'),
(9, 'محمد', 'عبد الرحمن', 'mabd11@gmail.com', '+201211212766', '23, Tahreer st', 'level3', 'Cairo', 'Egypt', 'Called', '440110', 10, '2020-12-12 21:43:23', '2020-12-13 04:19:34'),
(10, 'Azza', 'Fayed', 'azza@gmail.com', '+20121112766', '23, Tahreer st', 'level3', 'Alex', 'Egypt', 'No Action', '441200', NULL, '2020-12-13 03:27:05', '2020-12-13 03:27:05'),
(11, 'Saad', 'kheled', 'saad@gmail.com', '+201222272766', '23, Tahreer st', 'level3', 'Cairo', 'Egypt', 'No Action', '440000', NULL, '2020-12-13 04:44:13', '2020-12-13 04:44:13'),
(12, 'شيماء', 'فكري', 'sh12@gmail.com', '+201283627300', 'شارع الكورنيش', 'الدرو الثالث عماره 1', 'القاهره', 'مصر', 'No Action', '202920', 11, '2020-12-13 05:28:32', '2020-12-13 05:31:27');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2020_12_11_121612_create_customers_table', 1),
(12, '2020_12_13_001255_create_actions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `is_admin`, `position`, `address`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', 'Mohamed', 'ahmelsens11@gmail.com', '$2y$10$wTlLMb1S7bBL7dbJN6QWzeRF034iYV5ga1GXe8TZXAmsjfujP85zG', 1, 'GM', '23, Tahreer st, level3', NULL, 'douXLB6mWsP1ROCzts7eA0pHltMY3foKs13IpgwIcGXuG7Li6PO2DsSBHnU8', '2020-12-11 21:28:16', '2020-12-11 21:28:16'),
(3, 'omar', 'Ahmed', 'khaled11@gmail', '$2y$10$jwZ7lPocoRkCv55zj.HIXej0ArRslL0VevLapgw9oL9DKi6uGELSu', 0, 'Sales', '23, Tahreer st, level3', NULL, NULL, '2020-12-12 02:29:24', '2020-12-12 02:29:24'),
(4, 'Zezo', 'Mohamed', 'zezo11@gmail.com', '$2y$10$SDfQukPKbpH8o6ZauxtEfO8u.pZowJ39lrm7B9ckTGw/g.RqVL.ai', 0, 'sales', '23, Tahreer st, level3', NULL, NULL, '2020-12-12 02:38:11', '2020-12-12 02:38:11'),
(6, 'Ali', 'Sameh', 'ali11@gmail.com', '$2y$10$0ozFFxjDHHI62RDZlJ4CB.lW0bTQJQnk8Xc74JoMvQ6xNK7CTXmjW', 0, 'sales', '23, Tahreer st, level3', NULL, NULL, '2020-12-12 02:55:10', '2020-12-12 02:55:10'),
(7, 'Sameer', 'Nagy', 'samermohamad790@gmail.com', '$2y$10$w56AM9uYLYQD6zeEayMjn.ZqVn5JvQapzrpqkI7fII3J3UJEBSany', 0, 'sales', '11, Tahreer st, level3', NULL, NULL, '2020-12-12 06:32:58', '2020-12-12 06:32:58'),
(8, 'Mohamed', 'Abd Elazez', 'mzezo@gmail.com', '$2y$10$srTxSY75w7bavqUWJ36PKOanPa5h2Q.NPWcNNQz4N.h.SyUeY1HPK', 0, 'General Manager', 'Cairo ,Egypt', NULL, '2NvnQ7eByfEH9O4q2yP0B8ZdtFgfmDDpx8Ok2FdBR6AhXEh1HOM3qG8eQbhN', '2020-12-12 20:50:36', '2020-12-12 20:50:36'),
(9, 'Mahmoud', 'Elgamal', 'mabd11@gmail.com', '$2y$10$en5GjWO5u.50gO5xC6AXyet5a/J7V0FiCVOTZrh0H4q7pKgKs/S.y', 0, 'Sales Manager', '23, Tahreer st, level3', NULL, 'pCUSjY0l1inugRsbD8mXGm8bP2F3QjHXNJM1beu4QxVedv2OBTqgXhy5yvjv', '2020-12-12 21:51:34', '2020-12-12 21:51:34'),
(10, 'Amr', 'Yahya', 'am75178@gmail.com', '$2y$10$jO8Y1Y/8EVYn5Zqjz6jbhOPN7j6SwCzhj7kliuSjdtOKru3ET75fq', 0, 'GM', '11 Albahr st, level3', NULL, 'YCSHJDqEYZQiQoktP0mV98SMOmnA5Cxnl1dSLIMBC1ofTabNH59JlAvTQul2', '2020-12-13 02:49:21', '2020-12-13 02:49:21'),
(11, 'Basem', 'KHaled', 'bassem11@gmail.com', '$2y$10$SIticdFgbOCslqZ1.IY4PuHdc29dII89qoWyp4HvhtBrQHSv0ChLa', 0, 'General Manager', 'Cairo, Egypt', NULL, NULL, '2020-12-13 05:30:53', '2020-12-13 05:30:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actions_customer_id_foreign` (`customer_id`),
  ADD KEY `actions_user_id_foreign` (`user_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`),
  ADD KEY `customers_assigned_to_foreign` (`assigned_to`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actions`
--
ALTER TABLE `actions`
  ADD CONSTRAINT `actions_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `actions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_assigned_to_foreign` FOREIGN KEY (`assigned_to`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
