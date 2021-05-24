-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 06:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviebooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$Wg4hN1WGGMOpyd5.R03n6O1IQPcC8VzkHVKMORFVxx9pD7YR0oxrO', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booknows`
--

CREATE TABLE `booknows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_id` bigint(20) NOT NULL,
  `m_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numoftkt` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booknows`
--

INSERT INTO `booknows` (`id`, `m_id`, `m_name`, `person_name`, `numoftkt`, `created_at`, `updated_at`) VALUES
(2, 19, 'Dangal', 'Poojan', 4, '2021-05-23 23:00:22', '2021-05-23 23:00:22');

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
(4, '2021_05_17_092301_create_movies_table', 1),
(5, '2021_05_17_121801_create_starcasts_table', 2),
(6, '2021_05_17_130601_create_admins_table', 2),
(7, '2021_05_18_083430_create_starcasts_table', 3),
(8, '2021_05_19_040843_create_theatres_table', 4),
(9, '2021_05_21_120754_update_column_name_movies_table', 5),
(10, '2021_05_23_090602_create_booknows_table', 6),
(11, '2021_05_23_165214_create_booknows_table', 7),
(12, '2021_05_23_165754_create_booknows_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_year` date NOT NULL,
  `runtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cast_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`m_id`, `title`, `overview`, `image`, `release_year`, `runtime`, `cast_member`, `created_at`, `updated_at`) VALUES
(1, 'Bajrangi Bhaijaan', 'A young mute girl from Pakistan loses herself in India with noo way to head back.', 'bajrangi.jpg', '2015-07-17', '1 year', 'Salman Khan,Kareena Kapoor Khan', '2021-05-17 05:40:58', '2021-05-21 04:23:49'),
(13, 'War', 'Kabir, a secret agent, goes rogue after a mission to catch a terrorist goes awry.', 'war.jpg', '2019-10-02', '1 year', 'Hrithik Roshan, Tiger Shroff', '2021-05-19 03:01:46', '2021-05-19 03:01:46'),
(14, 'Chhichhore', 'A middle-aged man, to take a trip down memory lane and reminisce his college days along with his friends, who were labelled as losers.', 'chhichhore.jpg', '2019-09-06', '8 months', 'Shushant Singh Rajput,Shraddha Kapoor', '2021-05-19 03:05:22', '2021-05-19 03:05:22'),
(15, 'M.S. Dhoni: The Untold Story', 'M S Dhoni, a boy from Ranchi, aspires to play cricket for India.', 'msd.jpg', '2016-09-30', '1 year', 'Shushant Singh Rajput,Disha Patani', '2021-05-19 03:07:23', '2021-05-19 03:07:23'),
(16, 'Laxmi', 'Aasif visits his wife\'s parents\' house and happens to go to a ground that is supposedly haunted.', 'laxmi.jpg', '2020-11-09', '6 months', 'Akshay Kumar,Kiara Advani', '2021-05-19 03:09:19', '2021-05-19 03:09:19'),
(17, 'Kesari', 'Havildar Ishar Singh, a soldier in the British Indian Army, leads 21 Sikh soldiers in a fight against 10,000 Pashtun invaders', 'kesari.jpg', '2019-03-21', '1 year', 'Akshay Kumar,Parineeti Chopra', '2021-05-19 03:39:00', '2021-05-19 03:39:00'),
(18, 'Kedarnath', 'Mansoor, a reserved Muslim porter, falls in love with Mukku, the beautiful and rebellious daughter of a Hindu priest.', 'kedarnath.jpg', '2018-12-17', '6 months', 'Shushant singh Rajput,Sara Ali Khan', '2021-05-19 03:49:36', '2021-05-19 03:49:36'),
(19, 'Dangal', 'Mahavir Singh Phogat, a former wrestler, decides to fulfil his dream of winning a gold medal for his country.', 'dangal.jpg', '2016-12-23', '6 months', 'Aamir Khan,Sanya Malhotra', '2021-05-19 04:10:57', '2021-05-23 06:13:46');

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
-- Table structure for table `starcasts`
--

CREATE TABLE `starcasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `worked_movie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `starcasts`
--

INSERT INTO `starcasts` (`id`, `name`, `bio`, `birth_date`, `worked_movie`, `created_at`, `updated_at`) VALUES
(5, 'Salman Khan', 'Actor', '1974-01-12', 'Bajrangi Bhaijaan,Kick,Wanted', '2021-05-18 11:21:09', '2021-05-18 11:21:09'),
(6, 'Akshay Kumar', 'Actor', '1976-03-04', 'Rustom,Housefull 4,Laxmii', '2021-05-18 11:25:51', '2021-05-23 21:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `theatres`
--

CREATE TABLE `theatres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theatres`
--

INSERT INTO `theatres` (`id`, `name`, `area`, `city`, `created_at`, `updated_at`) VALUES
(1, 'PVR', 'Motera', 'Ahmedabad', '2021-05-18 23:33:01', '2021-05-19 00:29:58');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin@gmail.com', NULL, '$2y$10$3zpJrVeYej6.lFFQW8NxQOCqPU.XSjFu6uy3t9PLUYwazWk4UsYfm', NULL, NULL, NULL),
(5, 'Poojan', 'poojan@gmail.com', NULL, '$2y$10$6/tirHg7rfaE7MCCZ2nTCeg3.Lub.lW6kdK6KkxKfRuICZsqIaqeC', NULL, '2021-05-19 04:44:59', '2021-05-19 04:44:59'),
(6, 'Raj', 'raj@gmail.com', NULL, '$2y$10$DMrZndxkaL5CJOnhCT8wvuJoRTQUqbn0hh1ayfgH9JClo/qNFlSx.', NULL, '2021-05-20 05:52:07', '2021-05-20 05:52:07'),
(7, 'jayrajsinh', 'j@gmail.com', NULL, '$2y$10$qDIEcfhGcdOj9eGVnshsuel2njfouvkSjG50v92vhWb25/hLjJPJS', NULL, '2021-05-20 06:49:41', '2021-05-20 06:49:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `booknows`
--
ALTER TABLE `booknows`
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
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `starcasts`
--
ALTER TABLE `starcasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theatres`
--
ALTER TABLE `theatres`
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
-- AUTO_INCREMENT for table `booknows`
--
ALTER TABLE `booknows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `m_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `starcasts`
--
ALTER TABLE `starcasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `theatres`
--
ALTER TABLE `theatres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
