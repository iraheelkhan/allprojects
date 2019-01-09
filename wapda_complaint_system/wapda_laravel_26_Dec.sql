-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 02:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wapda_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` text NOT NULL,
  `city_description` text NOT NULL,
  `city_code` text NOT NULL,
  `province_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `city_description`, `city_code`, `province_id`, `created_at`, `updated_at`) VALUES
(2, 'asdf', 'asdf', 'asdf', 3, '2018-12-18 06:26:26', '2018-12-18 06:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `c_title` text NOT NULL,
  `c_description` text NOT NULL,
  `c_email` text NOT NULL,
  `c_address` text NOT NULL,
  `c_phone` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `subdivision_id` int(11) NOT NULL,
  `c_reference_no` int(11) NOT NULL,
  `c_tracking_no` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `c_title`, `c_description`, `c_email`, `c_address`, `c_phone`, `user_id`, `division_id`, `subdivision_id`, `c_reference_no`, `c_tracking_no`, `status`, `created_at`, `updated_at`) VALUES
(27, 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', 'this is the very bvasic issuei in our society. so please compalint the tfoldsdafjklasd flsadkfjsad f', 'sdlakfjklsda@gmail.com', 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', '1212134444', 2, 3, 11, 2535, '4DVdG6kY', 'solve', '2018-12-26 09:42:12', '2018-12-26 04:42:12'),
(28, 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', 'this is the very bvasic issuei in our society. so please compalint the tfoldsdafjklasd flsadkfjsad f', 'sdlakfjklsda@gmail.com', 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', '1212134444', 2, 3, 11, 2535, 'ZM7ex3nf', 'solve', '2018-12-26 05:48:34', '2018-12-26 00:48:34'),
(29, 'test for the complaints in the title.', 'why i s there an issue in paksiatan for the wpada. there akdsfja fsdak sjfsdis snf kjei anv sajfeioas sdifj \r\nsfkasjkl safwpada. have to ttake care of it. pakistan will g', 'sdlakfjklsda@gmail.com', 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', '123123132132', 2, 6, 11, 2535, '1Iz7uaS6', 'solve', '2018-12-24 14:19:38', '2018-12-24 09:19:38'),
(30, 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjksdf asdflsdkajf sdla;fjsdl;afj sl;adfjksdf asdflsdkajf sdla;fjsdl;afj sl;adfjksdf asdflsdkajf sdla;fjsdl;afj sl;adfjksdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', 'sdlakfjklsda@gmail.com', 'sdf asdflsdkajf sdla;fjsdl;afj sl;adfjk', '123123132132', 1, 6, 12, 2535, '8U7r86O4', 'open', '2018-12-26 07:37:52', '2018-12-26 02:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `division_name` text NOT NULL,
  `division_description` text NOT NULL,
  `division_code` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`, `division_description`, `division_code`, `created_at`, `updated_at`) VALUES
(3, 'ISB Division', 'islamabad division, which is the federal of the country.', 'ISB', '2018-12-24 00:13:46', '2018-12-24 00:13:46'),
(6, 'ds1111zxcxzc', 'as dfasfasfasf', 'dfaa', '2018-12-24 14:00:54', '2018-12-24 09:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'customer', 'public customer account role');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `province_name` text NOT NULL,
  `province_description` text NOT NULL,
  `province_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`, `province_description`, `province_code`) VALUES
(1, 'Punjab', 'big province of pakistan', 'PB'),
(3, 'Khyber Pukhtoon Khwa', 'afjklsdafjkl', 'KPK'),
(4, 'Sindh', 'karachi wala', 'SND'),
(7, 'Balochistan', 'Quetta wala', 'BLN'),
(8, 'Gilgit Baltistan', 'Chitral wala', 'GLT');

-- --------------------------------------------------------

--
-- Table structure for table `subdivisions`
--

CREATE TABLE `subdivisions` (
  `id` int(11) NOT NULL,
  `subdivision_name` text NOT NULL,
  `subdivision_code` text NOT NULL,
  `division_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdivisions`
--

INSERT INTO `subdivisions` (`id`, `subdivision_name`, `subdivision_code`, `division_id`, `created_at`, `updated_at`) VALUES
(11, '12300000aaaaa', 'fsdaf', 3, '2018-12-24 05:14:40', '2018-12-24 00:14:40'),
(12, 'sub divison 1', 'pak123aa', 3, '2018-12-24 05:13:57', '2018-12-24 00:13:57'),
(13, 'sub divison 12222', 'sub1', 3, '2018-12-24 08:13:48', '2018-12-24 08:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'raheel khan', 'irahilkhan@gmail.com', 'raheel', '$2y$10$/CdL/iWOVYMFcqRacGbgL.Txk2mUxMjzx5AVJGdPvEOXqDVTn90rK', 'TT2HYvSNIC0SX44v2r9PTUvGt8dgjcqiMUMMZF0mMLY84dKmF7I88uOdGIbi', 'admin', '2018-12-22 01:38:02', '2018-12-22 01:38:02'),
(2, 'mazhar kokhar', 'mazhar@gmail.com', 'mazhar', '$2y$10$e/4lOYoiNUt1OxTMTiVcdO1fNGtfQPGFrIsp2lvIjYVPn8hJuipCy', 'dzoIZL5nOCNvgoxcbBWL7hrvkxLmDU2CWNcK3R2ha7t5o0TyUJBLsS4BebDU', 'user', '2018-12-24 02:56:15', '2018-12-24 02:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 2),
(6, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdivisions`
--
ALTER TABLE `subdivisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subdivisions`
--
ALTER TABLE `subdivisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
