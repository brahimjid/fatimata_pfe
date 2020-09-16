-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 09:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natalite`
--

-- --------------------------------------------------------

--
-- Table structure for table `accouchements`
--

CREATE TABLE `accouchements` (
  `id` int(10) UNSIGNED NOT NULL,
  `Num_Acch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin_pat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hopital_id` int(11) NOT NULL,
  `etat_nn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dat_accouch` timestamp NOT NULL DEFAULT current_timestamp(),
  `etat_pat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accouchements`
--

INSERT INTO `accouchements` (`id`, `Num_Acch`, `cin_pat`, `hopital_id`, `etat_nn`, `Dat_accouch`, `etat_pat`, `type`, `created_at`, `updated_at`) VALUES
(1, '10', '1', 1, 'vivant', '2020-08-09 17:38:41', 'vivant', 'normal', '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(2, '3', '1', 2, 'vivant', '2020-08-09 17:38:41', 'vivant', 'normal', '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(3, '2', '2', 3, 'more', '2020-08-09 17:38:41', 'vivant', 'cesariat', '2020-12-09 17:38:41', '2020-08-09 17:38:41'),
(4, '8', '3', 1, 'more', '2020-08-09 17:38:41', 'vivant', 'cesariat', '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(5, '7', '3', 1, 'more', '2020-08-09 17:38:41', 'vivant', 'cesariat', '2020-08-09 17:38:41', '2020-08-09 17:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wilaya_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`id`, `nom`, `wilaya_id`, `created_at`, `updated_at`) VALUES
(1, 'Aoujeft', 1, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(2, 'Atar', 1, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(3, 'Chinguity', 1, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(4, 'Ouadane', 1, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(5, 'Barkewol', 2, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(6, 'Guerou', 2, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(7, 'Boumdeid', 2, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(8, 'Kankossa', 2, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(9, 'Kiffa', 2, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(10, 'Aleg', 3, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(11, 'Boghe', 3, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(12, 'Bababe', 3, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(13, 'Bagne', 3, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(14, 'Magta_lahjar', 3, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(15, 'Kaedi', 5, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(16, 'Mbout', 5, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(17, 'Monguel', 5, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(18, 'Maghama', 5, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(19, 'Ould Yenge', 6, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(20, 'Selibaby', 6, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(21, 'Amourdj', 7, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(22, 'Bassikounou', 7, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(23, 'Djigueni', 7, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(24, 'Nema', 7, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(25, 'oualata', 7, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(26, 'Timbedra', 7, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(27, 'Aiou El atrouss', 8, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(28, 'Kobenni', 8, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(29, 'Tamchkett', 8, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(30, 'Tintane', 8, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(31, 'Akjoujt', 9, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(32, 'Dar Naim', 10, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(33, 'teyaret', 10, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(34, 'Toujounine', 10, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(35, 'Ksar', 10, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(36, 'Sebkha', 10, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(37, 'Tevrag Zeina', 10, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(38, 'Araffat', 10, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(39, 'El Mina', 10, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(40, 'Riyadh', 10, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(41, 'Moudjeria', 11, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(42, 'Tichit', 11, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(43, 'Tidjigdja', 11, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(44, 'Bir Moghrein', 12, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(45, 'FDerick', 12, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(46, 'Zouerate', 12, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(47, 'Boutilimit', 13, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(48, 'Keurmacen', 13, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(49, 'Mededra', 13, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(50, 'Ouad Naga', 13, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(51, 'RKis', 13, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(52, 'Rosso', 13, '2020-08-09 19:24:09', '2020-08-09 19:24:09'),
(261, 'nouadhibou', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hopitals`
--

CREATE TABLE `hopitals` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hopitals`
--

INSERT INTO `hopitals` (`id`, `nom`, `departement_id`, `created_at`, `updated_at`) VALUES
(1, 'H_aoujeft', 1, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(2, 'H_atar', 2, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(3, 'H_chinguiti', 3, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(4, 'H_ouadane', 4, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(5, 'H_barkewol', 5, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(6, 'H_kankossa', 6, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(7, 'H_kiffa', 7, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(8, 'H_guerou', 8, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(9, 'H_boumeid', 9, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(10, 'H_boghe', 10, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(11, 'H_bababe', 11, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(12, 'H_mbagne', 12, '2020-08-13 11:19:10', '2020-08-13 11:19:10'),
(13, 'H_magtalhjar', 13, '2020-08-13 11:19:11', '2020-08-13 11:19:11'),
(14, 'Zaid', 14, '2020-08-13 11:19:11', '2020-08-13 11:19:11'),
(15, 'nationnal', 15, '2020-08-13 11:19:11', '2020-08-13 11:19:11'),
(16, 'Sava', 16, '2020-08-13 11:19:11', '2020-08-13 11:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2019_08_19_000000_create_failed_jobs_table', 1),
(40, '2020_06_21_131104_create_patients_table', 1),
(41, '2020_06_21_131144_create_nouveau_nees_table', 1),
(42, '2020_06_21_131219_create_accouchements_table', 1),
(43, '2020_06_21_133841_create_hopitals_table', 1),
(44, '2020_06_22_171523_create_departements_table', 1),
(45, '2020_06_24_194156_create_wilayas_table', 1),
(46, '2020_06_26_193442_create_roles_table', 1),
(47, '2020_06_26_194043_create_user_roles_table', 1),
(48, '2020_06_28_181046_create_role_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nouveau_nees`
--

CREATE TABLE `nouveau_nees` (
  `id` int(10) UNSIGNED NOT NULL,
  `Num_ne` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Num_Acch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin_pat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dat_naiss` date NOT NULL,
  `poids` int(11) NOT NULL,
  `sexe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nouveau_nees`
--

INSERT INTO `nouveau_nees` (`id`, `Num_ne`, `Num_Acch`, `cin_pat`, `Dat_naiss`, `poids`, `sexe`, `observation`, `created_at`, `updated_at`) VALUES
(1, '5', '10', '12', '2020-08-09', 2, 'masculin', 'iLorempsum dolor sit amet, consectetur adipisicing elit. Architecto commodi molestiae sequi', '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(2, '6', '10', '12', '2020-08-09', 2, 'masculin', 'iLorempsum dolor sit amet, consectetur adipisicing elit. Architecto commodi molestiae sequi', '2020-08-09 17:38:42', '2020-08-09 17:38:42'),
(3, '7', '10', '12', '2020-08-09', 2, 'feminin', 'iLorempsum dolor sit amet, consectetur adipisicing elit. Architecto commodi molestiae sequi', '2020-08-09 17:38:42', '2020-08-09 17:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `hopital_id` int(11) NOT NULL,
  `cin_pat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `telephone` int(11) NOT NULL,
  `nom_mari` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree_gross` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `hopital_id`, `cin_pat`, `nom`, `prenom`, `age`, `telephone`, `nom_mari`, `situation`, `observation`, `duree_gross`, `poids`, `created_at`, `updated_at`) VALUES
(1, 1, '879652', 'ramata', 'sidi', 23, 49000000, 'oumar', 'mariee', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores modi quidem recusandae.', 8, 78, '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(2, 6, '888847', 'fati', 'ali', 23, 49000000, 'sidi', 'mariee', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores modi quidem recusandae.', 8, 78, '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(3, 10, '555789', 'oumou', 'oumar', 30, 23454546, 'thiam', 'selibataire', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores modi quidem recusandae.', 8, 60, '2020-08-09 17:38:41', '2020-08-09 17:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(2, 'medecin', '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(3, 'accoucheuse', '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(4, 'DRAS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 3, 3, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 3, 3, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 3, 3, NULL, NULL),
(7, 2, 2, NULL, NULL),
(8, 3, 3, NULL, NULL),
(9, 2, 2, NULL, NULL),
(10, 3, 3, NULL, NULL),
(11, 2, 2, NULL, NULL),
(12, 3, 3, NULL, NULL),
(13, 2, 2, NULL, NULL),
(14, 3, 3, NULL, NULL),
(15, 2, 2, NULL, NULL),
(16, 3, 3, NULL, NULL),
(17, 2, 2, NULL, NULL),
(18, 3, 3, NULL, NULL),
(19, 2, 2, NULL, NULL),
(20, 3, 3, NULL, NULL),
(21, 2, 2, NULL, NULL),
(22, 3, 3, NULL, NULL),
(23, 2, 2, NULL, NULL),
(24, 3, 3, NULL, NULL),
(25, 2, 2, NULL, NULL),
(26, 3, 3, NULL, NULL),
(27, 2, 2, NULL, NULL),
(28, 3, 3, NULL, NULL),
(29, 4, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hopital_id` int(11) DEFAULT NULL,
  `wilaya_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `hopital_id`, `wilaya_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 0, NULL, 'admin@gnn.com', '2020-08-09 17:38:41', '$2y$10$rMEoyTJdXL15B6YjLYGEBOvzw6m3b.dcGbnMlyumGYPinAvopFyGS', NULL, '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(2, 'medecin', 1, NULL, 'medecin@gnn.com', '2020-08-09 17:38:41', '$2y$10$rMEoyTJdXL15B6YjLYGEBOvzw6m3b.dcGbnMlyumGYPinAvopFyGS', NULL, '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(3, 'zizi', 0, NULL, 'zizi@gnn.com', '2020-08-09 17:38:41', '$2y$10$E1e062aK2mnVStsfxABFweNW.OlvYHOUBeMXnMDHB72xxeaBXY4rK', NULL, '2020-08-09 17:38:41', '2020-08-09 17:38:41'),
(7, 'gfc', NULL, 3, 'dras22@gnn.com', NULL, '$2y$10$9W4CmdizRtv9vrIUqplb3O55cQfa/rBN6K4DaPkaMc1tloBY5KfI2', NULL, '2020-08-27 17:22:14', '2020-08-27 17:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wilayas`
--

CREATE TABLE `wilayas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_wilaya` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilayas`
--

INSERT INTO `wilayas` (`id`, `nom_wilaya`, `created_at`, `updated_at`) VALUES
(1, 'Adrar', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(2, 'Assaba', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(3, 'Brakna', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(4, 'Dakhlet Nouadhibou', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(5, 'Gorgol', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(6, 'Guidimagha', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(7, 'Hodh ech chargui', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(8, 'Hodh El Gaharbi', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(9, 'Inchiri', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(10, 'Nouakchott', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(11, 'Tagant', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(12, 'Tiris Zemour', '2020-08-09 18:50:48', '2020-08-09 18:50:48'),
(14, 'Trarza\r\n', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accouchements`
--
ALTER TABLE `accouchements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accouchements_num_acch_unique` (`Num_Acch`);

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hopitals`
--
ALTER TABLE `hopitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nouveau_nees`
--
ALTER TABLE `nouveau_nees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nouveau_nees_num_ne_unique` (`Num_ne`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_cin_pat_unique` (`cin_pat`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayas`
--
ALTER TABLE `wilayas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wilayas_nom_wilaya_unique` (`nom_wilaya`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accouchements`
--
ALTER TABLE `accouchements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hopitals`
--
ALTER TABLE `hopitals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `nouveau_nees`
--
ALTER TABLE `nouveau_nees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wilayas`
--
ALTER TABLE `wilayas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
