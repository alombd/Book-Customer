-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2017 at 04:43 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbiecl`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL,
  `book_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `category`, `summery`, `profile_pic`, `created_at`, `updated_at`) VALUES
(13, 'tgdgfd', 'dfhgfgdh', 'fghfgdhg', '586def4bf2b1e.xlsx', '2017-01-05 01:01:31', '2017-01-05 01:01:31'),
(14, 'kkkkkkkkk', 'kkkkkkkkkkk', 'kkkkkk', '586def5d1e49a.xls', '2017-01-05 01:01:49', '2017-01-05 01:01:49'),
(15, 'ryr', 'ryrt', 'ytryrt', '58724d3aee50e.docx', '2017-01-08 08:31:22', '2017-01-08 08:31:22'),
(16, 'Engineering Mathematics', 'Electrical & Electronic Engineering books ', 'So helpful! This book ', '587c9f73235bb.docx', '2017-01-16 04:24:51', '2017-01-16 04:24:51'),
(17, 'Engineering books', 'Are you studying engineering', 'Then you have come to the right', '587d7df59aaa6.pdf', '2017-01-16 20:14:13', '2017-01-16 20:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `chamanagements`
--

CREATE TABLE IF NOT EXISTS `chamanagements` (
  `id` int(10) unsigned NOT NULL,
  `cha_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `credit_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `debtor_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chamanagements`
--

INSERT INTO `chamanagements` (`id`, `cha_number`, `credit_name`, `debtor_name`, `dob`, `created_at`, `updated_at`) VALUES
(2, '4', 'Alamgir Hossen', 'Nazmul vai', '2017-01-17 18:00:00', '2017-01-18 11:20:47', '2017-01-18 11:20:47'),
(8, '3', 'Nanmul ', 'alomgir', '2017-01-19 05:21:20', '2017-01-18 23:21:20', '2017-01-19 00:42:15'),
(9, '1', 'MD.Alamgir Hossen', 'Md.Mokhlasur Rahman', '2017-01-19 06:00:01', '2017-01-19 00:00:01', '2017-01-19 00:00:01'),
(10, '1', 'Koli ', 'Oishy', '2017-01-19 07:21:15', '2017-01-19 01:21:15', '2017-01-19 01:21:15'),
(11, '2', 'Aladduin Vai ', 'Alomgir Hossen', '2017-01-19 07:22:26', '2017-01-19 01:22:26', '2017-01-19 01:22:26'),
(12, '20', 'Zakir Vaya', 'Dev', '2017-01-19 07:23:21', '2017-01-19 01:23:21', '2017-01-19 01:23:21'),
(13, '2', 'Alpona', 'Alom', '2017-01-19 17:28:43', '2017-01-19 11:28:43', '2017-01-19 11:28:43'),
(14, '2', 'ALOM', 'ALOM', '2017-01-19 17:29:35', '2017-01-19 11:29:35', '2017-01-19 11:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `customer_name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'alomgir', '01771000096', 'alombd.bd@gmail.com', '2017-01-03 07:17:03', '2017-01-03 11:49:36'),
(5, 1, 'oishy', '01684041172', 'oishy@gmail.com', '2017-01-03 22:35:22', '2017-01-03 22:35:22'),
(7, 2, 'koli', '01873478574', 'koli@gmail.com', '2017-01-04 00:46:29', '2017-01-04 00:46:29'),
(8, 2, 'Mehedi Hasan', '01743943993', 'mededi@gmail.com', '2017-01-04 03:17:55', '2017-01-04 03:17:55'),
(9, 2, 'sdfsd', '234234234', 'dagsagsa@gmail.com', '2017-01-04 03:47:21', '2017-01-04 03:47:33'),
(10, 2, 'sjdhfs', '018236463', 'jsdh@gmail.com', '2017-01-04 03:48:34', '2017-01-04 03:48:34'),
(11, 2, 'jsdhfjsdh', '8778483984', 'sdkjfsd@gmail.com', '2017-01-04 03:48:51', '2017-01-04 03:48:51'),
(12, 2, 'sdfsd', '398475438', 'bdbdbd.@gmail.com', '2017-01-04 03:48:59', '2017-01-16 21:11:50'),
(16, 2, 'jsdhf', '834759834', 'bna@gmail.com', '2017-01-04 03:54:50', '2017-01-04 03:54:50'),
(18, 2, 'djsfhsdj', '894799847', 'msdnhfjksd@gmail.com', '2017-01-04 03:55:37', '2017-01-04 03:55:37'),
(20, 3, 'alom', '01771059373', 'alom@gmail.com', '2017-01-04 21:44:27', '2017-01-19 12:38:31'),
(21, 1, 'alpona', '01773672342', 'alpona@gmIL.com', '2017-01-19 12:37:21', '2017-01-19 12:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_12_12_110703_add_column_in_users', 1),
(4, '2016_12_14_064345_create_tests_table', 1),
(5, '2017_01_01_105846_create_customers_table', 1),
(7, '2017_01_04_155023_create_books_table', 2),
(8, '2017_01_05_104604_create_pmis_table', 3),
(10, '2017_01_12_095810_create_modules_table', 4),
(11, '2017_01_12_123252_create_privilages_table', 5),
(13, '2017_01_18_143718_create_chamanagements_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) unsigned NOT NULL,
  `role_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `controller_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `role_id`, `controller_name`, `created_at`, `updated_at`) VALUES
(1, '0', 'UsersController', '2017-01-12 05:42:09', '2017-01-12 05:42:09'),
(3, '0', 'TestsController', '2017-01-12 06:01:33', '2017-01-12 06:01:33'),
(5, '0', 'AboutusController', '2017-01-12 10:11:50', '2017-01-12 10:11:50'),
(6, '0', 'HomeCountroller', '2017-01-12 10:12:27', '2017-01-12 10:12:27'),
(9, '0', 'BooksController', '2017-01-16 00:58:12', '2017-01-16 00:58:12'),
(10, '0', 'ContactusController', '2017-01-16 00:58:35', '2017-01-16 00:58:35'),
(11, '0', 'PmisController', '2017-01-16 00:58:54', '2017-01-16 00:58:54'),
(12, '0', 'PracticesController', '2017-01-16 00:59:43', '2017-01-16 00:59:43'),
(13, '0', 'ServicesController', '2017-01-16 01:00:05', '2017-01-16 01:00:05'),
(14, '0', 'CustomerController', '2017-01-16 01:01:05', '2017-01-16 01:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pmis`
--

CREATE TABLE IF NOT EXISTS `pmis` (
  `id` int(10) unsigned NOT NULL,
  `project_name` text COLLATE utf8_unicode_ci NOT NULL,
  `problem_summery` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pmis`
--

INSERT INTO `pmis` (`id`, `project_name`, `problem_summery`, `created_at`, `updated_at`) VALUES
(7, '(SMECI).', '<p><strong><em><span style="font-size:18.0pt">(In Original)</span></em></strong></p>\n\n<p><strong><span style="font-size:14.0pt">Dynamic Information: </span></strong></p>\n\n<p><strong><u>Monthly Progress: (2014-2015)</u></strong></p>\n\n<p><strong>August&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Total has 1.75 more money.</p>\n\n<p><strong>September &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.02 more money.</p>\n\n<p><strong>October&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Total has 0.01 less money.</p>\n\n<p><strong>November&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Total has 0.02 less money.</p>\n\n<p><strong>December&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 1.72 less money.</p>\n\n<p>&nbsp;</p>\n\n<p><strong><em><span style="font-size:18.0pt">(In Revised)</span></em></strong></p>\n\n<p><strong><span style="font-size:14.0pt">Static Information:</span></strong></p>\n\n<p><strong><u>DPP/TPP Total Target: </u></strong></p>\n\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><em>Component Code &ndash; 4713 (Festival Allowances):&nbsp; </em>has 0.20 less money.</p>\n\n<p><strong><u>DPP/TPP Yearly Target:</u></strong></p>\n\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><em>1<sup>st</sup> year (2013-2014):</em> total has 0.26 more money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>2<sup>nd</sup> year (2014-2015):</em> total has 0.36 more money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>3<sup>rd</sup> year (2015-2016):</em> total has 0.14 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>4<sup>th</sup> year (2016-2017):</em> total has 0.48 less money.</p>\n\n<p><strong><u>In 4<sup>th</sup> year of DPP/TPP Yearly Target:</u></strong></p>\n\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><em>Component Code &ndash; 4701 (Dearness Allowance):</em> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4703 (Deputation Allowance):</em> has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4713 (Festival Allowance):</em> has 0.20 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4823 (Petrol, Oil and Lubricant):</em> has 0.02 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4842 (Seminar, Conference Expenses):</em> has 0.01 more money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 6815 (Computer and Accessories):</em> has 0.20 more money.</p>\n\n<p>&nbsp;</p>\n\n<p><strong><span style="font-size:14.0pt">Dynamic Information:</span></strong></p>\n\n<p><strong><u>Monthly Progress: (2014-2015)</u></strong></p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>January&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.01 more money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>February&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4845 (Entertainment Expenses)</em> amount is less</p>\n\n<p style="margin-left:1.5in">than January month. Feb value: 0.59 and Jan value: 0.93.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.56 more money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>March&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>April&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.03 more money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>May&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.05 more money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>June&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4886 (Survey)</em> amount is less than May Month</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; June value: 41.43 and May value: 50.92.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 9.50 more money.</p>\n\n<p>&nbsp;</p>\n\n<p><strong><u>Yearly Allocation (2015-2016):</u></strong></p>\n\n<ul>\n	<li><span style="font-size:14.0pt"><span style="font-family:&quot;Vrinda&quot;,&quot;sans-serif&quot;">বা</span></span><span style="font-size:14.0pt"><span style="font-family:&quot;Vrinda&quot;,&quot;sans-serif&quot;">র্ষিক বরাদ্দ বিভাজনের, মহার্ঘ ভাতা (৪৭০১) এ বরাদ্দ করা আছে ০.১০, কিন্তু </span></span><span style="font-size:14.0pt">Time Based Action Plan</span> <span style="font-size:14.0pt"><span style="font-family:&quot;Vrinda&quot;,&quot;sans-serif&quot;">&nbsp;এ দেয়া আছে ০.২৫। </span></span><span style="font-size:14.0pt">So 0.15 less amount given in this component.</span></li>\n</ul>\n\n<p style="margin-left:1.0in">&nbsp;</p>\n\n<ul>\n	<li><span style="font-size:14.0pt"><span style="font-family:&quot;Vrinda&quot;,&quot;sans-serif&quot;">বা</span></span><span style="font-size:14.0pt"><span style="font-family:&quot;Vrinda&quot;,&quot;sans-serif&quot;">র্ষিক বরাদ্দ বিভাজনের, টেলিফোন/টেলিগ্রাম (৪৮১৬) এ বরাদ্দ করা &nbsp;আছে ০.১০, কিন্তু </span></span><span style="font-size:14.0pt">Time Based Action Plan</span> <span style="font-size:14.0pt"><span style="font-family:&quot;Vrinda&quot;,&quot;sans-serif&quot;">&nbsp;এ দেয়া আছে ০.১৩। </span></span><span style="font-size:14.0pt">So 0.03 less amount given in this component.</span></li>\n	<li><span style="font-size:14.0pt"><span style="font-family:&quot;Vrinda&quot;,&quot;sans-serif&quot;">বা</span></span><span style="font-size:14.0pt"><span style="font-family:&quot;Vrinda&quot;,&quot;sans-serif&quot;">র্ষিক বরাদ্দ বিভাজনের, ব্যবস্হাপনা চার্জ (৪৮৪৮) এ বরাদ্দ করা &nbsp;আছে ০.১০, কিন্তু </span></span><span style="font-size:14.0pt">Time Based Action Plan</span> <span style="font-size:14.0pt"><span style="font-family:&quot;Vrinda&quot;,&quot;sans-serif&quot;">&nbsp;এ দেয়া আছে ০.২৫। </span></span><span style="font-size:14.0pt">So 0.15 less amount given in this component.</span></li>\n</ul>\n\n<p style="margin-left:1.0in">&nbsp;</p>\n\n<ul>\n	<li><span style="font-size:14.0pt">We have divided an amount in 2 components. (4501 and 4601).</span></li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong><u>Monthly Progress: (2015-2016)</u></strong></p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>September&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>October&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.02 more money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>November&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>December&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>January&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>March&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>April&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.04 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>May&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>June&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Component Code &ndash; 4842 (Seminar, Conference Expenses) amount is</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Less than May month.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Component Code &ndash; 4906 and 6817 -&gt; Printing problem.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.71 less money.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong><em><span style="font-size:18.0pt">(Inter Adjustment)</span></em></strong></p>\n\n<p><strong><span style="font-size:14.0pt">Static Information:</span></strong></p>\n\n<p><strong><u>DPP/TPP Yearly Target:</u></strong></p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>4<sup>th</sup> year (2015-2016):</em> total has 0.38 less money.</p>\n\n<p>5<sup>th</sup> year (2016-2017):</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4701 (Dearness Allowance):</em> has 0.04 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4703 (Deputation Allowance):</em> has 0.60 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4769 (Overtime Allowance):</em> has 0.79 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4793 (Telephone Allowance):</em> has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4886 (Survey):</em> has 9.49 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4901 (Vehicle):</em> &nbsp;has 13.32 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Component Code &ndash; 4911 (Office equipment):</em> &nbsp;has 0.55 less money.</p>\n\n<p><strong><u>Time Based Action Plan:</u></strong></p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>2016-2017 (1<sup>st</sup> quarter):</em> &nbsp;total has 0.03 more money.</p>\n\n<p>&nbsp;</p>\n\n<p><strong><u>Monthly Progress (2016-2017)</u></strong></p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>August&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Total has 0.01 less money.</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>October&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total has 0.01 more money.</p>\n', '2017-01-19 04:23:10', '2017-01-19 04:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `privilages`
--

CREATE TABLE IF NOT EXISTS `privilages` (
  `id` int(10) unsigned NOT NULL,
  `module_id` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `privilages`
--

INSERT INTO `privilages` (`id`, `module_id`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 2, 1, '2017-01-15 11:08:57', '0000-00-00 00:00:00'),
(17, 3, 1, '2017-01-15 11:08:57', '0000-00-00 00:00:00'),
(18, 6, 1, '2017-01-15 11:08:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Alomgir ', 'Software Eng', '2017-01-02 08:17:17', '2017-01-02 08:21:05'),
(2, 'gdfg', 'dfgdf', '2017-01-04 04:46:49', '2017-01-04 04:46:58'),
(3, '', '', '2017-01-04 04:50:18', '2017-01-04 04:50:18'),
(4, '', '', '2017-01-04 04:50:24', '2017-01-04 04:50:24'),
(5, '', '', '2017-01-04 04:50:28', '2017-01-04 04:50:28'),
(6, '', '', '2017-01-04 04:50:34', '2017-01-04 04:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `profile_pic` varchar(250) COLLATE utf8_unicode_ci DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `user_name`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `present_address`, `permanent_address`, `dob`, `profile_pic`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'abdullah', 'ALOMGIR', 'alomgir', 'bd@gmail.com', '01771000096', '$2y$10$mzO.9UfQNQms8gHaFT7zpenxFPuXv5S7QK0iWSjznVohmBaQpXt2S', 'asdhfjds', 'sdkjfnsd', '2017-01-01', '586df2bea52d5.png', 'bhWrlVE3OE4CEnyDv7EHAqypEHUCuu1KvJuAHwEhaU8RJVZ9rRusZ184pcMh', '2017-01-01 06:43:33', '2017-01-21 21:31:01'),
(2, 0, 'alombd', 'md', 'Alom', 'alombd.bd@gmail.com', '01771000096', '$2y$10$IzMoUpwWekeJa.5JWroLhOX2NhL1R2XUK7rk9xhuwCJ5R9I6VC0me', 'Mirpur Dahka', 'Mirpur Dahka', '2017-01-08', '587c8a074fa1b.jpg', 'cCxaaIEL4jYDAC2sHkiQVmw7gd7su64pehsZRQufwyYrTNVd5VPqKKaV3Jx4', '2017-01-03 11:51:34', '2017-01-19 04:07:22'),
(3, 0, 'alpona', 'bd', 'alom', 'alpona@gmail.com', '01774388984', '$2y$10$5BnNTeINqY0Z/Dw9JxsX0uc83vPgYFTgD905njivsqusXDNrbga2G', 'Mandha,Naogaon', 'Mandha,Naogaon', '1995-04-24', '587d91eea5682.jpg', 'zSNyEF9P1bYkb39Mjl76f9xLSyjbkmHdqldbPNeVy2XldLl8x3m5gTYOdtkZ', '2017-01-04 21:36:31', '2017-01-19 09:28:31'),
(4, NULL, 'alom', 'bd', 'bd', 'bd.bd@gmail.com', '01771000096', '$2y$10$BJBvAIYT7X0Do5ydrxJLWeMN/ZOhLBK8SkWbE9DwoVe35.erwBSKW', 'Mirpur Dhaka Bangladesh ', 'Mirpur Dhaka Bangladesh ', '2017-01-03', '58721fe299250.jpg', 'MaVdGcO7SkzpcxnmujXDDwACngzIbQ7DuCv2EMG0v2Cabjr2XHdXNmmdLQ1Q', '2017-01-08 04:40:34', '2017-01-19 03:23:26'),
(5, NULL, 'alamgir', 'bd', 'bd', 'alamgir@gmail.com', '01521492507', '$2y$10$euz0um/Mh.5evkunwRM9zup9imkQMeG2ZJHZYpGtaDqoUEGrchz4a', 'Daspara,Jukahat,Mandha,Naogaon', 'Daspara,Jukahat,Mandha,Naogaon', '2017-01-01', 'default.png', 'WNFsgjLYXnvHCPrVMdlzK9r3KQ7CNis0Mip8qFIQJQMGILbTlAGXbn3FKBhQ', '2017-01-15 04:26:39', '2017-01-15 05:15:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chamanagements`
--
ALTER TABLE `chamanagements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pmis`
--
ALTER TABLE `pmis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilages`
--
ALTER TABLE `privilages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `chamanagements`
--
ALTER TABLE `chamanagements`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pmis`
--
ALTER TABLE `pmis`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `privilages`
--
ALTER TABLE `privilages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
