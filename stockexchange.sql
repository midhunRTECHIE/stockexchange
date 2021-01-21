-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2021 at 04:01 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockexchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminUserId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`adminUserId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companystockdetails`
--

DROP TABLE IF EXISTS `companystockdetails`;
CREATE TABLE IF NOT EXISTS `companystockdetails` (
  `companyStockDetailId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companySymbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketCap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currentMarketPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stockPe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dividentYield` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debtToEquity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserves` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`companyStockDetailId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companystockdetails`
--

INSERT INTO `companystockdetails` (`companyStockDetailId`, `companyName`, `companySymbol`, `marketCap`, `currentMarketPrice`, `stockPe`, `dividentYield`, `roce`, `roe`, `debtToEquity`, `eps`, `reserves`, `debt`, `created_at`, `updated_at`) VALUES
(1, 'company', 'ABC', '689121', '689686', '69864', '35355', '2535', '23535', '55346', '34234', 'reserves 111', 'debt 123', NULL, NULL),
(2, 'company1', 'ABCD', '689111', '689684', '69867', '353558', '2535', '453453', '45253', '654879', 'reserves 1156', 'debt 123752', NULL, NULL),
(3, 'company12', 'EFGH', '689121', '689645', '6986545', '3535545', '25355', '235353', '5534655', '3423434', 'reserves 1535', 'debt 12543', NULL, NULL),
(4, 'company6', 'CCMPPU', '454353', '689683', '69864334', '3545', '253533', '23535', '45253334', '3423434', 'reserve3446', 'debt 12343', NULL, NULL),
(5, 'company7', 'CCMPIU', '454333', '689636', '698644363', '354563', '253536', '235363', '45253334', '342363', 'reserve3446', 'd4t44', NULL, NULL),
(6, 'APPLE', 'APL', '68435', '68968655', '698673', '35355854', '25354', '23535543', '4525333', '3423434', 'reserve3446', 'debt 433', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stockusers`
--

DROP TABLE IF EXISTS `stockusers`;
CREATE TABLE IF NOT EXISTS `stockusers` (
  `adminUserId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`adminUserId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stockusers`
--

INSERT INTO `stockusers` (`adminUserId`, `username`, `password`) VALUES
(1, 'user', 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
