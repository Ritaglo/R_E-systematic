-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 11:53 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `id` int(11) NOT NULL,
  `county_name` varchar(78) NOT NULL,
  `county_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diocese`
--

CREATE TABLE `diocese` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `county_id` int(11) NOT NULL,
  `bishop_id` int(11) NOT NULL,
  `address` varchar(80) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE `event_types` (
  `id` int(11) NOT NULL,
  `description` varchar(70) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parish`
--

CREATE TABLE `parish` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `diocese_id` int(11) NOT NULL,
  `subcounty_id` int(11) NOT NULL,
  `priest_id` int(11) NOT NULL,
  `address` varchar(80) NOT NULL,
  `coordinates` varchar(120) DEFAULT NULL,
  `picture` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcounty`
--

CREATE TABLE `subcounty` (
  `id` int(11) NOT NULL,
  `subcounty_name` varchar(65) NOT NULL,
  `county_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rita', 'echessa@gmail.com', '$2y$10$HuDDORydc4h.S97D0knmMeUvj7CXgj3Gep2DHuZ.fNZPNP79XJqse', '17S9tcYBgsdwU2lcAJdPuw6tsjpHujdOo9O6yZznhcgNLApLP3XBD9zaf5uf', '2018-05-05 06:56:21', '2018-05-05 06:56:21'),
(2, 'Gloria', 'ritagloria@gmail.com', '$2y$10$0g82kgBVUiGCMubsH55l5u62IV57MSvla92GbI4uGl9gzisoWVzei', 'mG4sEbkYWG', '2018-05-10 04:51:35', '2018-05-10 04:51:35'),
(3, 'evans', 'evans@gmail.com', '$2y$10$3D9d5k5QO04DoVC9InvUDOFLE6DskL1RylmSnF5hh6yoZHj9j9szi', 'HaZoE76fPO08liMWQtEX7roz97JNtsd38Utg0Dhyl6QLTyjVGTIp9y9tQ0qZ', '2018-05-10 06:40:31', '2018-05-10 06:40:31'),
(4, 'joel', 'joelevans14@gmail.com', '$2y$10$tK3PktMcnVAx.LNdr1gBkucEo8JPTuk6lO6IrmmEyNy2G/wfPFj0S', '0CqDo6Q8dV8Dw0x1AfIsAAFnRHtYqn1lurCZDRnwJO11xMvgYwNNo17Ep6Rn', '2018-05-10 06:42:27', '2018-05-10 06:42:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diocese`
--
ALTER TABLE `diocese`
  ADD PRIMARY KEY (`id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `bishop_id` (`bishop_id`);

--
-- Indexes for table `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parish`
--
ALTER TABLE `parish`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diocese_id` (`diocese_id`),
  ADD KEY `subcounty_id` (`subcounty_id`),
  ADD KEY `priest_id` (`priest_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcounty`
--
ALTER TABLE `subcounty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `county_id` (`county_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diocese`
--
ALTER TABLE `diocese`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_types`
--
ALTER TABLE `event_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parish`
--
ALTER TABLE `parish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcounty`
--
ALTER TABLE `subcounty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diocese`
--
ALTER TABLE `diocese`
  ADD CONSTRAINT `diocese_ibfk_1` FOREIGN KEY (`county_id`) REFERENCES `counties` (`id`);

--
-- Constraints for table `parish`
--
ALTER TABLE `parish`
  ADD CONSTRAINT `parish_ibfk_1` FOREIGN KEY (`diocese_id`) REFERENCES `diocese` (`id`),
  ADD CONSTRAINT `parish_ibfk_2` FOREIGN KEY (`subcounty_id`) REFERENCES `subcounty` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
