-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 05:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accouchements`
--

CREATE TABLE `accouchements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `hopital_id` int(10) UNSIGNED NOT NULL,
  `etat_nn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat_pat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accouchements`
--

INSERT INTO `accouchements` (`id`, `Num_Acch`,`cin_pat`, `Nom_hop`, `Dat_accouch`,`etat_nn`, `etat_pat`, `type`, `created_at`, `updated_at`) VALUES 
(1, 'Ac1', 'p1','Sadagha','2009-09-09', 'vivant', 'vivant', 'normal', '2020-06-23 15:56:19', '2020-06-23 15:56:19'), 
(2, 'Ac2', 'p2','clinique_chiva','2012-12-12', 'vivant', 'vivant', 'normal', '2020-06-23 15:56:19', '2020-06-23 15:56:19'),
 (3, 'Ac3', 'p3','clinique de Kissi','2008-08-08', 'more', 'vivant', 'normal', '2020-06-23 15:56:19', '2020-06-23 15:56:19')
 , (4, 'Ac4', 'p4','hopital de Kiffa','2018-08-08', 'more', 'vivant', 'normal', '2020-06-23 15:56:19', '2020-06-23 15:56:19'),
  (5, 'Ac5', 'p5','hopital AL_Hokoma','2020-02-02', 'more', 'vivant', 'normal', '2020-06-23 15:56:19', '2020-06-23 15:56:19')

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Departement_nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_wilaya` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`id`, `Departement_nom`, `nom_wilaya`, `created_at`, `updated_at`) VALUES
(1, 'Aoujeft', 'Adrar', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(2, 'Atar', 'Adrar', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(3, 'Chinguity', 'Adrar', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(4, 'Ouadane', 'Adrar', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(5, 'Barkewol', 'Assaba', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(6, 'Guerou', 'Assaba', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(7, 'Boumdeid', 'Assaba', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(8, 'Kankossa', 'Assaba', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(9, 'Kiffa', 'Assaba', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(10, 'Aleg', 'Brakna', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(11, 'Boghe', 'Brakna', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(12, 'Bababe', 'Brakna', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(13, 'M\'Bagne', 'Brakna', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(14, 'Magta-lahjar', 'Brakna', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(15, 'Kaedi', 'Gorgol', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(16, 'Mbout', 'Gorgol', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(17, 'Monguel', 'Gorgol', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(18, 'Maghama', 'Gorgol', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(19, 'Ould Yenge', 'Guidimagha', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(20, 'Selibaby', 'Guidimagha', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(21, 'Amourdj', 'hod El chargui', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(22, 'Bassikounou', 'hod El chargui', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(23, 'Djigueni', 'hod El chargui', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(24, 'Nema', 'hod El chargui', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(25, 'oualata', 'hod El chargui', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(26, 'Timbedra', 'hod El chargui', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(27, 'Aiou El atrouss', 'hod El Gaharbi', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(28, 'Kobenni', 'hod El Gaharbi', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(29, 'Tamchkett', 'hod El Gaharbi', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(30, 'Tintane', 'hod El Gaharbi', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(31, 'Akjoujt', 'Inchiri', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(32, 'Dar Naim', 'Nouakchott', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(33, 'teyaret', 'Nouakchott', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(34, 'Toujounine', 'Nouakchott', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(35, 'Ksar', 'Nouakchott', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(36, 'Sebkha', 'Nouakchott', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(37, 'Tevrag Zeina', 'Nouakchott', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(38, 'Araffat', 'Nouakchott', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(39, 'El Mina', 'Nouakchott', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(40, 'Riyadh', 'Nouakchott', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(41, 'Moudjeria', 'Tagant', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(42, 'Tichit', 'Tagant', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(43, 'Tidjigdja', 'Tagant', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(44, 'Bir Moghrein', 'Tiris Zemour', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(45, 'FDerick',  'Tiris Zemour', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(46, 'Zouerate',  'Tiris Zemour', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(47, 'Boutilimit',  'TRARZA', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(48, 'Keurmacen', 'TRARZA', '2020-06-23 15:56:23', '2020-06-23 15:56:23'),
(49, 'Mededra', 'TRARZA', '2020-06-23 15:56:24', '2020-06-23 15:56:24'),
(50, 'Ouad Naga', 'TRARZA', '2020-06-23 15:56:24', '2020-06-23 15:56:24'),
(51, 'RKis', 'TRARZA', '2020-06-23 15:56:24', '2020-06-23 15:56:24'),
(52, 'Rosso', 'TRARZA', '2020-06-23 15:56:24', '2020-06-23 15:56:24'),
(53, 'Nouadhibou', 'Dakhlet Nouadhibou', '2020-06-23 15:56:24', '2020-06-23 15:56:24');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `Departement_id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hopitals`
--

INSERT INTO `hopitals` (`id`, `Num_hop`, `Departement_nom`, `Nom_hop`, `created_at`, `updated_at`) VALUES
(1, 'hop1','Araffat','Sadagha', '2020-06-23 15:56:20', '2020-06-23 15:56:20'),
(2,'hop2','Tevrag Zeina','clinique_chiva', '2020-06-23 15:56:20', '2020-06-23 15:56:20'),
(3, 'hop3','Zouerate','Hopital AL_Hokoma', '2020-06-23 15:56:20', '2020-06-23 15:56:20'),
(4, 'hop4','Nouadhibou','hopital regional de ndb', '2020-06-23 15:56:20', '2020-06-23 15:56:20'),
(5, 'hop5','Kiffa','Hopital de Kiffa', '2020-06-23 15:56:20', '2020-06-23 15:56:20'),
(6, 'hop6','Zouerate','Hopital AL_Hokoma', '2020-06-23 15:56:20', '2020-06-23 15:56:20'),
(7, 'hop7','Tevrag Zeina','clinique ibn Sina', '2020-06-23 15:56:20', '2020-06-23 15:56:20'),
(8, 'hop8','Le Ksar','Military Hospital', '2020-06-23 15:56:20', '2020-06-23 15:56:20'),
(9, 'hop9','Magta-lahjar', 'Hopital de Magta-lahjar', '2020-06-23 15:56:20', '2020-06-23 15:56:20'),
(10,'hop10','Kaedi','Hopital de Kaedi', '2020-06-23 15:56:20', '2020-06-23 15:56:20'),
(11, 'hop11','Rosso','Hopital de Rosso', '2020-06-23 15:56:21', '2020-06-23 15:56:21'),
(12, 'hop12','Toujounine','hopital de cheikh zaied', '2020-06-23 15:56:21', '2020-06-23 15:56:21'),
(13, 'hop13','teyaret', 'hopital teyaret', '2020-06-23 15:56:21', '2020-06-23 15:56:21'),
(14, 'hop14','Tevrag Zeina', 'clinique Kissi', '2020-06-23 15:56:21', '2020-06-23 15:56:21'),
(15,'hop15','Tevrag Zeina','clinique iman', '2020-06-23 15:56:21', '2020-06-23 15:56:21'),
(16, 'hop16','Le ksar', 'nationnal', '2020-06-23 15:56:21', '2020-06-23 15:56:21');

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
(4, '2020_06_21_131104_create_patients_table', 1),
(5, '2020_06_21_131144_create_nouveau_nees_table', 1),
(6, '2020_06_21_131219_create_accouchements_table', 1),
(7, '2020_06_21_133841_create_hopitals_table', 1),
(8, '2020_06_21_134146_create_regions_table', 1),
(9, '2020_06_22_171523_create_departements_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nouveau_nees`
--

CREATE TABLE `nouveau_nees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accouchement_id` int(10) UNSIGNED NOT NULL,
  `poids` int(11) NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nouveau_nees`
--
INSERT INTO `nouveau_nees` (`id`, `Num_ne`,`Num_accouch`,`cin_pat`,`Dat_naiss`, `poids`, `sexe`, `observation`, `created_at`, `updated_at`) VALUES
(1, 'n1','Ac1', 'p1','2009-09-09', 2,'masculin', 'gggg', '2020-06-23 15:56:19', '2020-06-23 15:56:19'),
(2,'n2', 'Ac2', 'p2','2012-12-12',   2,'masculin', 'ttt', '2020-06-23 15:56:19', '2020-06-23 15:56:19'),
(3, 'n3','Ac3', 'p3', '2008-08-08',3,'masculin', 'gggg', '2020-06-23 15:56:19', '2020-06-23 15:56:19'),
(4,'n4', 'Ac4', 'p4','2018-08-08',  2,'feminin', 'ttt', '2020-06-23 15:56:19', '2020-06-23 15:56:19'),
(5, 'n5','Ac5', 'p5','2020-02-02',3, 'feminin', 'iiiii', '2020-06-23 15:56:19', '2020-06-23 15:56:19');

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `telephone` int(11) NOT NULL,
  `nom_mari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree_gross` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `cin_pat`,`nom`, `prenom`,  `age`, `telephone`, `nom_mari`, `observation`, `duree_gross`, `poids`, `created_at`, `updated_at`) VALUES
(1,'p1', 'mine', 'sidi',  23, 49000000, 'mohamed', 'obsr', 8, 78, '2020-06-23 15:56:18', '2020-06-23 15:56:18'),
(2, 'p2','mouna', 'moulay', 23, 49000000, 'sidi', 'obser1', 8, 78, '2020-06-23 15:56:18', '2020-06-23 15:56:18'),
(3,'p3', 'ramata', 'sidi',  23, 49000000, 'oumar', 'obsr', 8, 78, '2020-06-23 15:56:18', '2020-06-23 15:56:18'),
(4, 'p4','fati', 'zeidan', 23, 49000000, 'sidi', 'obser1', 8, 78, '2020-06-23 15:56:18', '2020-06-23 15:56:18'),
(5, 'p5','oumou', 'ahmed', 30, 23454546, 'thiam', 'obser3', 8, 60, '2020-06-23 15:56:18', '2020-06-23 15:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--
INSERT INTO `wilayas` (`id`, `nom_wilaya`, `created_at`, `updated_at`) VALUES
(1, 'Hodh ech chargui', '2020-06-23 15:56:24', '2020-06-23 15:56:24'),
(2, 'Hodh El Gaharbi', '2020-06-23 15:56:24', '2020-06-23 15:56:24'),
(3, 'Assaba', '2020-06-23 15:56:24', '2020-06-23 15:56:24'),
(4,'GORGOL' , '2020-06-23 15:56:25', '2020-06-23 15:56:25'),
(5, 'Brakna', '2020-06-23 15:56:25', '2020-06-23 15:56:25'),
(6, 'TRARZA', '2020-06-23 15:56:25', '2020-06-23 15:56:25'),
(7,'Adrar' , '2020-06-23 15:56:25', '2020-06-23 15:56:25'),
(8,'Dakhlet Nouadhibou' , '2020-06-23 15:56:25', '2020-06-23 15:56:25'),
(9, 'TagantT', '2020-06-23 15:56:25', '2020-06-23 15:56:25'),
(10, 'Guidimagha', '2020-06-23 15:56:25', '2020-06-23 15:56:25'),
(11, 'Tiris Zemour', '2020-06-23 15:56:25', '2020-06-23 15:56:25'),
(12, 'Inchiri', '2020-06-23 15:56:26', '2020-06-23 15:56:26'),
(13, 'Nouakchott', '2020-06-23 15:56:26', '2020-06-23 15:56:26');

INSERT INTO `departements` (`id`, `Departement_nom`, `nom_Reg`, `created_at`, `updated_at`) VALUES
(1, 'depatar', 'Adrar', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(2, 'depkiffa','Assaba', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(3, 'depbrkn', 'Brakna', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(4, 'depndb', 'Dakhlet Nouadhibou', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(5, 'depgrgl',  'Gorgol', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(6, 'depguid','Guidimagha', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(7, 'depnema','Hodh ech chargui', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(8, 'depaioun', 'Hodh El Gaharbi', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(9, 'depinch','Inchiri', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(10, 'depnktt', 'Nouakchott', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(11, 'deptgnt', 'Tagant', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(12, 'deptrz','Tiris Zemour', '2020-06-23 15:56:22', '2020-06-23 15:56:22'),
(13, 'deptgnt', 'Tagant', '2020-06-23 15:56:22', '2020-06-23 15:56:22');
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
(1, 'Admin Admin', 'admin@gnn.com', '2020-06-23 15:56:17', '$2y$10$47rFdCSyu2A5ZessHz1hMeEBXIobcXBKlgTsyQYCTwWpyp3YSdc4S', NULL, '2020-06-23 15:56:17', '2020-06-23 15:56:17'),
(2, 'toxel', 'toxel@gnn.com', '2020-06-23 15:56:17', '$2y$10$.1Ia3XvIEdzlHpatTMDqeutA7cnbB/ZjHD9rVerGWk7SR1dMDOwRO', NULL, '2020-06-23 15:56:17', '2020-06-23 15:56:17'),
(3, 'kheyrate', 'kheyrate@gnn.com', '2020-06-23 15:56:17', '$2y$10$IuA1fztJeDSb66UUOc7l7eQretlBCERu0ozmT38zPmV9c3mXRT5v.', NULL, '2020-06-23 15:56:17', '2020-06-23 15:56:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accouchements`
--
ALTER TABLE `accouchements`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
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
-- AUTO_INCREMENT for table `accouchements`
--
ALTER TABLE `accouchements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hopitals`
--
ALTER TABLE `hopitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nouveau_nees`
--
ALTER TABLE `nouveau_nees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
