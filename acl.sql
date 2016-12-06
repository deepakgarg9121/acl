-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2016 at 03:26 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.32-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acl`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(2, 'Subscriber', 'subciber only', '2016-04-19 05:41:49', '2016-04-19 05:41:49'),
(4, 'abc', 'dfsdsf', '2016-04-19 05:45:12', '2016-04-19 05:45:12'),
(5, 'zzzzz', 'gfdgfdg', '2016-04-19 05:45:20', '2016-04-19 05:45:20'),
(6, 'abcds', 'fdsfds', '2016-04-19 05:57:47', '2016-04-19 05:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `group_permission`
--

CREATE TABLE IF NOT EXISTS `group_permission` (
  `group_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `permission_group_permission_id_foreign` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `group_permission`
--

INSERT INTO `group_permission` (`group_id`, `permission_id`) VALUES
(6, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `group_role`
--

CREATE TABLE IF NOT EXISTS `group_role` (
  `group_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  KEY `group_role_group_id_foreign` (`group_id`),
  KEY `group_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `group_role`
--

INSERT INTO `group_role` (`group_id`, `role_id`) VALUES
(2, 18),
(6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_12_122023_roles_and_permissions', 1),
('2016_04_19_100553_create_groups_table', 2),
('2016_04_20_054515_create_role_group_tabel', 3),
('2016_04_21_120144_create_permission_group', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'add_class', 'Class', '2016-04-14 04:46:08', '2016-04-14 04:46:08'),
(2, 'edit_class', 'Class', '2016-04-14 04:49:39', '2016-04-14 04:49:39'),
(3, 'view_class', 'Class', NULL, NULL),
(7, 'delete_class', 'Class', NULL, NULL),
(8, 'add_student', 'Student', NULL, NULL),
(9, 'edit_student', 'Student', NULL, NULL),
(10, 'view_student', 'Student', NULL, NULL),
(11, 'delete_student', 'Student', NULL, NULL),
(12, 'add_employee', 'Employee', NULL, NULL),
(13, 'edit_employee', 'Employee', NULL, NULL),
(14, 'view_employee', 'Employee', NULL, NULL),
(15, 'delete_employee', 'Employee', NULL, NULL),
(16, 'add_award', 'Award', NULL, NULL),
(17, 'edit_award', 'Award', NULL, NULL),
(18, 'view_award', 'Award', NULL, NULL),
(19, 'delete_award', 'Award', NULL, NULL),
(21, 'add_sale', 'Sale', NULL, NULL),
(22, 'edit_sale', 'Sale', NULL, NULL),
(23, 'view_sale', 'Sale', NULL, NULL),
(24, 'delete_sale', 'Sale', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `role_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(5, 1),
(6, 1),
(15, 1),
(16, 1),
(21, 1),
(22, 1),
(23, 1),
(6, 2),
(15, 2),
(21, 2),
(22, 2),
(23, 2),
(5, 3),
(6, 3),
(16, 7),
(17, 8),
(21, 8),
(22, 8),
(23, 8),
(6, 9),
(16, 9),
(16, 10),
(21, 12),
(22, 12),
(23, 12),
(6, 14),
(21, 16),
(22, 16),
(23, 16),
(5, 18),
(5, 19),
(6, 19),
(21, 21),
(22, 21),
(23, 21);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'fdsgf',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(5, 'admin12', 'This is admin Role', '2016-04-14 04:46:08', '2016-04-19 02:05:18'),
(6, 'super admin', 'This is  super admin Role', '2016-04-14 04:49:39', '2016-04-14 04:49:39'),
(15, 'admin3', 'test34', '2016-04-19 03:47:57', '2016-04-19 03:47:57'),
(16, 'admin4', 'terst56', '2016-04-19 04:16:44', '2016-04-19 04:16:44'),
(17, 'role1', 'gfdgfg', '2016-04-19 04:17:10', '2016-04-19 04:17:10'),
(18, 'role2', 'gfdgfg', '2016-04-19 04:17:51', '2016-04-19 04:17:51'),
(19, 'role3', 'gfdgfg', '2016-04-19 04:18:09', '2016-04-19 04:18:09'),
(20, 'role4', 'fsdgfdgfdg', '2016-04-20 04:39:06', '2016-04-20 04:39:06'),
(21, 'role5', 'fsgf', '2016-04-20 06:21:16', '2016-04-20 06:21:16'),
(22, 'role6', 'gfsdgdfg', '2016-04-20 06:21:28', '2016-04-20 06:21:28'),
(23, 'role7', 'gfdgfd', '2016-04-20 06:21:38', '2016-04-20 06:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `role_user_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(5, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$59pMp8uFZgAZEv9LFIQz0uhuQJEVT/6ZnqHR/vIzddiNxCiSQTKhO', 1, 'P7UFcyLIM2h5JwSLRKBBZQKs1lH0QGurZSYMkCRUBggn7vi6k3k1T5mOqKNh', '2016-04-14 04:09:45', '2016-04-22 01:02:25'),
(2, 'super admin', 'superadmin@admin.com', '$2y$10$FxfWIC9t0K7XvbACEM0SreWd5bXsYWEgqieY0Cyq80LxDw.jQtf6.', 1, 'gVs1OiFw143BLfVhDdWmz7pE7fGIPXFlOi9VHbZa7Qsdjjb3TG8F5akndPt8', '2016-04-14 05:01:13', '2016-04-15 00:20:06');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `group_permission`
--
ALTER TABLE `group_permission`
  ADD CONSTRAINT `permission_group_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_group_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `group_role`
--
ALTER TABLE `group_role`
  ADD CONSTRAINT `group_role_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `group_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
