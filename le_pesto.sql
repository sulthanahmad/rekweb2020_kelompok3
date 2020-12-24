-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 03:50 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `le_pesto`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(3, 'admin', 'manage'),
(4, 'user', 'profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(3, 4),
(4, 3),
(4, 8),
(4, 9),
(4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-13 23:30:57', 1),
(2, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-13 23:32:04', 1),
(3, '::1', 'sulthanahmad255@gmail.com', NULL, '2020-12-13 23:34:52', 0),
(4, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-13 23:37:02', 1),
(5, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-13 23:46:29', 1),
(6, '::1', 'sulthanahmad255@gmail.com', NULL, '2020-12-14 00:09:00', 0),
(7, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 00:09:04', 1),
(8, '::1', 'sulthanahmad255@gmail.com', NULL, '2020-12-14 00:10:22', 0),
(9, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 00:10:28', 1),
(10, '::1', 'sulthanahmad32@yahoo.com', NULL, '2020-12-14 00:56:57', 0),
(11, '::1', 'sulthanahmad32@yahoo.com', NULL, '2020-12-14 00:57:03', 0),
(12, '::1', 'sulthanahmad32@yahoo.com', NULL, '2020-12-14 00:57:22', 0),
(13, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 00:57:30', 1),
(14, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 01:07:14', 1),
(15, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-14 01:18:24', 1),
(16, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-14 01:19:25', 1),
(17, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 01:23:30', 1),
(18, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-14 01:23:36', 1),
(19, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 01:26:22', 1),
(20, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-14 01:26:30', 1),
(21, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-14 02:06:14', 1),
(22, '::1', 'eti.sofariah16@gmail.com', NULL, '2020-12-14 04:32:38', 0),
(23, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-14 04:32:50', 1),
(24, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 04:33:08', 1),
(25, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 04:33:50', 1),
(26, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-14 04:33:57', 1),
(27, '::1', 'sulthanahmad255@gmail.com', NULL, '2020-12-14 04:36:38', 0),
(28, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 04:36:42', 1),
(29, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-14 04:36:48', 1),
(30, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 04:37:01', 1),
(31, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 04:37:56', 1),
(32, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-14 04:38:03', 1),
(33, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 04:38:23', 1),
(34, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 04:39:44', 1),
(35, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-14 04:39:51', 1),
(36, '::1', 'sulthanahmad255@gmail.com', 1, '2020-12-14 04:46:59', 1),
(37, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-14 04:50:53', 1),
(38, '::1', 'sulthanahmad255@gmail.com', NULL, '2020-12-14 04:51:12', 0),
(39, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-14 04:51:18', 1),
(40, '::1', 'sulthanahmad32@yahoo.com', 5, '2020-12-14 04:54:18', 1),
(41, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-14 04:54:25', 1),
(42, '::1', 'sulthanahmad32@yahoo.com', 5, '2020-12-14 04:55:59', 1),
(43, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-14 05:06:28', 1),
(44, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 05:46:26', 1),
(45, '::1', 'sulthanahmad32@yahoo.com', NULL, '2020-12-15 05:47:54', 0),
(46, '::1', 'sulthanahmad32@yahoo.com', 5, '2020-12-15 05:48:00', 1),
(47, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 05:49:55', 1),
(48, '::1', 'sulthanahmad32@yahoo.com', 5, '2020-12-15 05:50:08', 1),
(49, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 05:51:58', 1),
(50, '::1', 'sulthanahmad255@gmail.com', NULL, '2020-12-15 08:18:40', 0),
(51, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 08:18:44', 1),
(52, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-15 09:31:59', 1),
(53, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 09:32:08', 1),
(54, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 09:34:42', 1),
(55, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 09:35:55', 1),
(56, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-15 09:40:36', 1),
(57, '::1', 'sulthanahmad32@yahoo.com', 5, '2020-12-15 09:42:22', 1),
(58, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 09:42:50', 1),
(59, '::1', 'sulthanahmad_', NULL, '2020-12-15 09:45:00', 0),
(60, '::1', 'sulthanahmad_', NULL, '2020-12-15 09:45:31', 0),
(61, '::1', 'sulthanahmad38@gmail.com', 7, '2020-12-15 09:47:44', 1),
(62, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 09:48:05', 1),
(63, '::1', 'sulthanahmad38@gmail.com', 7, '2020-12-15 09:49:22', 1),
(64, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 09:49:43', 1),
(65, '::1', 'sulthanahmad38@gmail.com', 7, '2020-12-15 09:58:25', 1),
(66, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-15 09:58:48', 1),
(67, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-15 09:59:09', 1),
(68, '::1', 'sulthanahmad32@yahoo.com', 5, '2020-12-15 09:59:45', 1),
(69, '::1', 'sulthanahmad38@gmail.com', 7, '2020-12-15 10:00:07', 1),
(70, '::1', 'sulthanahmad255@gmail.com', NULL, '2020-12-16 00:41:45', 0),
(71, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-16 00:41:49', 1),
(72, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-16 00:42:04', 1),
(73, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-16 00:42:12', 1),
(74, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-16 02:01:46', 1),
(75, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-16 02:06:15', 1),
(76, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-16 02:06:42', 1),
(77, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-16 09:19:10', 1),
(78, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-16 22:23:09', 1),
(79, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-17 00:56:58', 1),
(80, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-17 06:05:13', 1),
(81, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-18 07:46:02', 1),
(82, '::1', 'sulthanahmad255@gmail.com', NULL, '2020-12-18 23:22:40', 0),
(83, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-18 23:22:44', 1),
(84, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-19 03:46:59', 1),
(85, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-19 10:29:46', 1),
(86, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-19 10:30:32', 1),
(87, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-19 10:32:00', 1),
(88, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-19 10:41:14', 1),
(89, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-19 10:50:20', 1),
(90, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-19 10:54:22', 1),
(91, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-19 11:00:31', 1),
(92, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-19 11:00:44', 1),
(93, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-19 12:41:40', 1),
(94, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-19 20:33:22', 1),
(95, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-19 23:34:37', 1),
(96, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-20 04:02:10', 1),
(97, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-20 06:08:01', 1),
(98, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-20 06:23:49', 1),
(99, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-20 06:26:16', 1),
(100, '::1', 'sulthanahmad255@gmail.com', NULL, '2020-12-20 07:21:30', 0),
(101, '::1', 'sulthanahmad255@gmail.com', NULL, '2020-12-20 07:21:36', 0),
(102, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-20 07:21:43', 1),
(103, '::1', 'eti.sofariah16@gmail.com', 3, '2020-12-20 07:32:04', 1),
(104, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-20 07:48:38', 1),
(105, '::1', 'rizkisss@gmail.com', 9, '2020-12-20 07:53:07', 1),
(106, '::1', 'rizkisssss', NULL, '2020-12-20 21:16:59', 0),
(107, '::1', 'rizkisssss', NULL, '2020-12-20 21:17:09', 0),
(108, '::1', 'rizkisssss', NULL, '2020-12-20 21:17:15', 0),
(109, '::1', 'rizkisss@gmail.com', NULL, '2020-12-20 21:18:19', 0),
(110, '::1', 'ahmadsulthan255@gmail.com', 10, '2020-12-20 21:19:05', 1),
(111, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-20 21:31:39', 1),
(112, '::1', 'ahmadsulthan255@gmail.com', 10, '2020-12-20 21:32:11', 1),
(113, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-21 00:22:30', 1),
(114, '::1', 'sulthanahmad255@gmail.com', 4, '2020-12-21 08:51:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(2, 'manage-profile', 'Manage User\'s Profile'),
(3, 'manage-admin', 'manage all users');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `daerah`, `kota`, `lat`, `lon`) VALUES
(1, 'Riau', 'Bandung', '-6.90595995952876', '107.61867943982247'),
(2, 'Dago', 'Bandung', '-6.881022103047859', '107.61594015330482'),
(3, 'Lengkong', 'Bandung', '-6.9263503', '107.6105525'),
(4, 'Sukajadi', 'Bandung', '-6.8855844', '107.594644'),
(5, 'Ciumbeluit', 'Bandung', '-6.874602', '107.6024417'),
(6, 'Gegerkalong', 'Bandung', '-6.8658061', '107.5821177'),
(7, 'Braga', 'Bandung', '-6.9175586', '107.6071775'),
(9, 'Kiaracondong', 'Bandung', '-6.938584', '107.6404513'),
(10, 'UjungBerung', 'Bandung', '-6.907876', '107.6851203'),
(11, 'Cidadap', 'Bandung', '-6.8411523', '107.4650144'),
(12, 'Margacinta', 'Bandung', '-6.955088', '107.645777\r\n'),
(13, 'Batununggal', 'Bandung', '-6.9581104', '107.6344541'),
(14, 'Dago Pakar ', 'Bandung', '-6.8633266', '107.6224821'),
(15, 'Buahbatu', 'Bandung', '-6.9480181', '107.6384658'),
(16, 'Sumurbandung', 'Bandung', '-6.9143996', '107.6083082'),
(17, 'Lembang', 'Bandung', '-6.8194497', '107.6182479'),
(18, 'Sersan Bajuri', 'Bandung', '-6.856498', '107.5913501'),
(19, 'Bandung Wetan', 'Bandung', '-6.9053977', '107.6095733'),
(20, 'Cihampelas', 'Bandung', '-6.8929306', '107.6020011'),
(21, 'Pasteur', 'Bandung', '-6.8897181', '107.5906853'),
(22, 'Cihampelas', 'Bandung', '-6.8929306', '107.6020011'),
(23, 'Pasteur', 'Bandung', '-6.8897181', '107.5906853'),
(24, 'Cikutra', 'Bandung', '-6.9036358', '107.6347196'),
(25, 'Cicendo', 'Bandung', '-6.9012365', '107.5629043'),
(26, 'Andir', 'Bandung', '-6.9060395', '107.5647679'),
(27, 'Pasirkaliki', 'Bandung', '-6.9073701', '107.5923527'),
(28, 'Surapati', 'Bandung', '-6.8992239', '107.6238588'),
(29, 'Pungkur', 'Bandung', '-6.9298216', '107.6057083'),
(30, 'Astanaanyar', 'Bandung', '-6.9385801', '107.5846448'),
(31, 'Pasir Koja', 'Bandung', '-6.9264005', '107.5910783'),
(32, 'Sarijadi', 'Bandung', '-6.8751396', '107.5679997'),
(33, 'Cibiru', 'Bandung', '-6.914959', '107.7067703');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1607340958, 1);

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id` int(11) NOT NULL,
  `nama_restoran` varchar(255) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id`, `nama_restoran`, `daerah`, `kota`) VALUES
(1, 'KFC', 'Ciumbeluit', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'eti.sofariah16@gmail.com', 'belikabobs', NULL, 'default.svg', '$2y$10$M/gpWXvkh3Ec5LKvbjDjAedeS4Hpx2DM9CuGrlw/HqRzkBva2mhwG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-14 01:17:26', '2020-12-14 01:17:26', NULL),
(4, 'sulthanahmad255@gmail.com', 'sulthanahmad', NULL, 'profile2.jpg', '$2y$10$pNNQM1zaLlK.8cA.40BW3uStJdRjB1NGMLyiCzBDLp/QpwyVfsNTu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-14 04:49:36', '2020-12-14 04:49:36', NULL),
(8, 'rizki@gmail.com', 'rizkissss', NULL, 'default.svg', '$2y$10$TEic0p7TFovRb1231xdWc.umerNwQ5elw47GPKcyyZz4RmVd/4vUy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-20 07:51:53', '2020-12-20 07:51:53', NULL),
(9, 'rizkisss@gmail.com', 'rizkisssss', NULL, 'default.svg', '$2y$10$lU4KHCib50Yp/2tFwJNoIeXlTXBKVvxrZ24/zWJzHytTgxw9t1TxC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-20 07:52:52', '2020-12-20 07:52:52', NULL),
(10, 'ahmadsulthan255@gmail.com', 'ahmadsulthan', NULL, 'default.svg', '$2y$10$umoEXjJ1bX23Ofg19UaCRuAN6plXZ6GyaWIyGyCSZoa9rp71.eCUu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-20 21:18:51', '2020-12-20 21:18:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daerah` (`daerah`),
  ADD KEY `kota` (`kota`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `restoran`
--
ALTER TABLE `restoran`
  ADD CONSTRAINT `restoran_ibfk_1` FOREIGN KEY (`id`) REFERENCES `lokasi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
