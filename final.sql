-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2017 at 10:27 AM
-- Server version: 5.5.55-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `played` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_team_name_unique` (`team_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `team_name`, `group`, `played`, `win`, `lose`, `draw`, `points`, `created_at`, `updated_at`) VALUES
(1, 'Djkstra United', 'A', 1, 1, 0, 0, 3, NULL, NULL),
(2, 'FC Hudai', 'B', 0, 0, 0, 0, 0, NULL, NULL),
(3, 'FC Dolbal', 'C', 0, 0, 0, 0, 0, NULL, NULL),
(4, 'FC Disco Boyz', 'D', 0, 0, 0, 0, 0, NULL, NULL),
(5, 'Race71', 'A', 1, 1, 0, 0, 0, NULL, NULL),
(6, 'FC Real Madrid', 'B', 0, 0, 0, 0, 0, NULL, NULL),
(7, 'Vega Boyz', 'C', 0, 0, 0, 0, 0, NULL, NULL),
(8, 'FC Vegabond', 'D', 0, 0, 0, 0, 0, NULL, NULL),
(9, 'FC Lal Tong', 'A', 1, 0, 0, 1, 1, NULL, NULL),
(10, 'FC Dhumketu', 'B', 0, 0, 0, 0, 0, NULL, NULL),
(11, 'FC Kopa', 'C', 0, 0, 0, 0, 0, NULL, NULL),
(12, 'FC CoreI7', 'D', 0, 0, 0, 0, 0, NULL, NULL),
(13, 'FC Tarbaiyan', 'A', 1, 0, 0, 1, 1, NULL, NULL),
(14, 'FC Juary', 'B', 0, 0, 0, 0, 0, NULL, NULL),
(15, 'FC IBoyz', 'C', 0, 0, 0, 0, 0, NULL, NULL),
(16, 'FC Aladeen', 'D', 0, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE IF NOT EXISTS `leagues` (
  `league_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`league_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`league_id`, `year`, `title`, `image`, `sponsor`, `created_at`, `updated_at`) VALUES
(2, 2017, 'Champions League 2017', '44537.jpg', 'MAHA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_26_004510_create_news_table', 1),
(4, '2017_04_26_004531_create_leagues_table', 1),
(5, '2017_04_26_004633_create_teams_table', 1),
(6, '2017_04_26_004645_create_players_table', 1),
(7, '2017_04_26_004721_create_schedules_table', 1),
(8, '2017_05_07_214014_create_groups_table', 1),
(9, '2017_05_08_184424_create_results_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `headline` text COLLATE utf8_unicode_ci NOT NULL,
  `full_news` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nick_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registration` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_preference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sold_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `league_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `players_registration_unique` (`registration`),
  KEY `players_league_id_foreign` (`league_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `full_name`, `nick_name`, `registration`, `position`, `team_preference`, `sold_to`, `status`, `league_id`, `created_at`, `updated_at`) VALUES
(1, 'Obydul Islam Khan', 'Shazid', 2012331039, 'CF', 'Manchester City', 'none', 'not verified', 2, NULL, NULL),
(2, 'Habibur Rahman', 'Shopon', 2012331029, 'GK', 'Juventus', 'none', 'not verified', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `match_id` int(10) unsigned NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `goal_1` int(11) NOT NULL,
  `goal_2` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `results_match_id_foreign` (`match_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `match_id`, `result`, `goal_1`, `goal_2`, `created_at`, `updated_at`) VALUES
(6, 4, 'Djkstra United', 2, 1, NULL, NULL),
(7, 4, 'Djkstra United', 2, 1, NULL, NULL),
(8, 4, 'Djkstra United', 3, 2, NULL, NULL),
(9, 4, 'Djkstra United', 3, 2, NULL, NULL),
(10, 4, 'Djkstra United', 3, 2, NULL, NULL),
(11, 4, 'Djkstra United', 3, 2, NULL, NULL),
(12, 4, 'Djkstra United', 3, 1, NULL, NULL),
(13, 5, 'draw', 1, 1, NULL, NULL),
(14, 5, 'FC Lal Tong', 1, 1, NULL, NULL),
(15, 5, 'draw', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `match_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `league_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`match_id`),
  KEY `schedules_league_id_foreign` (`league_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`match_id`, `team_1`, `team_2`, `status`, `date`, `type`, `league_id`, `created_at`, `updated_at`) VALUES
(4, 'Djkstra United', 'Race71', 'played', '2017-12-12', 'A', 2, NULL, NULL),
(5, 'FC Lal Tong', 'FC Tarbaiyan', 'played', '2017-12-13', 'A', 2, NULL, NULL),
(6, 'FC Hudai', 'FC Real Madrid', 'not played', '2017-12-12', 'B', 2, NULL, NULL),
(8, 'FC Dhumketu', 'FC Juary', 'not played', '2017-12-13', 'B', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `league_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `teams_team_name_unique` (`team_name`),
  KEY `teams_league_id_foreign` (`league_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `contact_number`, `email`, `status`, `league_id`, `created_at`, `updated_at`) VALUES
(1, 'Djkstra United', 1758339722, 'shazid@student.sust.edu', 'not verified', 2, NULL, NULL),
(2, 'FC Hudai', 1676592247, 'hudai@gmail.com', 'not verified', 2, NULL, NULL),
(3, 'FC Dolbal', 1676592247, 'dolbal@gmail.com', 'not verified', 2, NULL, NULL),
(4, 'FC Disco Boyz', 1676592247, 'disco@gmail.com', 'not verified', 2, NULL, NULL),
(5, 'Race71', 1676592247, 'race71@gmail.com', 'not verified', 2, NULL, NULL),
(6, 'FC Real Madrid', 1676592247, 'real@gmail.com', 'not verified', 2, NULL, NULL),
(7, 'Vega Boyz', 1676592247, 'vega@gmail.com', 'not verified', 2, NULL, NULL),
(8, 'FC Vegabond', 1676592247, 'vegabond@gmail.com', 'not verified', 2, NULL, NULL),
(9, 'FC Lal Tong', 1676592247, 'laltong@gmail.com', 'not verified', 2, NULL, NULL),
(10, 'FC Dhumketu', 1676592247, 'dhumketu@gmail.com', 'not verified', 2, NULL, NULL),
(11, 'FC Kopa', 1676592247, 'kopa@gmail.com', 'not verified', 2, NULL, NULL),
(12, 'FC CoreI7', 1676592247, 'corei7@gamil.com', 'not verified', 2, NULL, NULL),
(13, 'FC Tarbaiyan', 1676592247, 'tarbaiyan@gmail.com', 'not verified', 2, NULL, NULL),
(14, 'FC Juary', 1676592247, 'juary@gmail.com', 'not verified', 2, NULL, NULL),
(15, 'FC IBoyz', 1676592247, 'iboyz@gmail.com', 'not verified', 2, NULL, NULL),
(16, 'FC Aladeen', 1676592247, 'aladeen@gmail.com', 'not verified', 2, NULL, NULL),
(17, 'Hudai', 123456789, 'dhumketu@gmail.com', 'not verified', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'shazid1971@gmail.com', '$2y$10$08q4LJ4g5CmFAH9bNXKno./zAjwuRod9k..zf70vRwLz/xCNzQHfW', '6otbUdUaTJ3peHbyt31oErfwmDp325KcUNbNlnjdJReOFGM0DblY8cHrBo3P', '2017-05-08 16:01:16', '2017-05-08 16:01:16'),
(2, 'shazid', 'shazid@student.sust.edu', '$2y$10$UGfRy73OhALJFOF0.DReveqEY5Sx0ZZokyzykiydQCZYbX9z6uSmK', 'UOVMKmV5zYvHsdDGgMXVo2gVwfzYPXTNOvxqxoK88LQ2pu9GIVCngKsHaYj2', '2017-05-08 16:01:42', '2017-05-08 16:01:42');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_team_name_foreign` FOREIGN KEY (`team_name`) REFERENCES `teams` (`team_name`) ON DELETE CASCADE;

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_league_id_foreign` FOREIGN KEY (`league_id`) REFERENCES `leagues` (`league_id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `schedules` (`match_id`) ON DELETE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_league_id_foreign` FOREIGN KEY (`league_id`) REFERENCES `leagues` (`league_id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_league_id_foreign` FOREIGN KEY (`league_id`) REFERENCES `leagues` (`league_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
