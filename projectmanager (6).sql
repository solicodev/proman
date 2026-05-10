-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2026 at 12:55 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `causer_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `batch_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=1422 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 56, 'App\\Models\\User', 15, '{\"old\": {\"status\": \"3\"}, \"attributes\": {\"status\": \"1\"}}', NULL, '2025-11-09 07:07:34', '2025-11-09 07:07:34'),
(2, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-09T10:24:12.000000Z\", \"confirm_code\": \"964319\"}, \"attributes\": {\"updated_at\": \"2025-11-09T12:54:17.000000Z\", \"confirm_code\": \"966501\"}}', NULL, '2025-11-09 09:24:17', '2025-11-09 09:24:17'),
(3, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-09T12:54:17.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-09T12:54:23.000000Z\"}}', NULL, '2025-11-09 09:24:23', '2025-11-09 09:24:23'),
(4, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-09T12:54:23.000000Z\", \"confirm_code\": \"966501\"}, \"attributes\": {\"updated_at\": \"2025-11-10T04:55:26.000000Z\", \"confirm_code\": \"477886\"}}', NULL, '2025-11-10 01:25:26', '2025-11-10 01:25:26'),
(5, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-10T04:55:26.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-10T04:55:33.000000Z\"}}', NULL, '2025-11-10 01:25:33', '2025-11-10 01:25:33'),
(6, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 4, 'App\\Models\\User', 15, '{\"old\": {\"status\": \"3\"}, \"attributes\": {\"status\": \"1\"}}', NULL, '2025-11-09 07:07:34', '2025-11-09 07:07:34'),
(7, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-10T04:55:33.000000Z\", \"confirm_code\": \"477886\"}, \"attributes\": {\"updated_at\": \"2025-11-11T06:20:30.000000Z\", \"confirm_code\": \"991375\"}}', NULL, '2025-11-11 02:50:30', '2025-11-11 02:50:30'),
(8, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-11T06:20:30.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-11T06:22:15.000000Z\"}}', NULL, '2025-11-11 02:52:15', '2025-11-11 02:52:15'),
(9, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-11T06:22:15.000000Z\", \"confirm_code\": \"991375\"}, \"attributes\": {\"updated_at\": \"2025-11-12T04:46:03.000000Z\", \"confirm_code\": \"486010\"}}', NULL, '2025-11-12 01:16:03', '2025-11-12 01:16:03'),
(10, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-12T04:46:03.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-12T04:46:12.000000Z\"}}', NULL, '2025-11-12 01:16:12', '2025-11-12 01:16:12'),
(11, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-12T04:46:12.000000Z\", \"confirm_code\": \"486010\"}, \"attributes\": {\"updated_at\": \"2025-11-12T08:12:37.000000Z\", \"confirm_code\": \"952089\"}}', NULL, '2025-11-12 04:42:37', '2025-11-12 04:42:37'),
(12, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-12T08:12:37.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-12T08:12:58.000000Z\"}}', NULL, '2025-11-12 04:42:58', '2025-11-12 04:42:58'),
(13, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-12T08:12:58.000000Z\", \"confirm_code\": \"952089\"}, \"attributes\": {\"updated_at\": \"2025-11-12T10:51:34.000000Z\", \"confirm_code\": \"445767\"}}', NULL, '2025-11-12 07:21:34', '2025-11-12 07:21:34'),
(14, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-12T10:51:34.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-12T10:52:04.000000Z\"}}', NULL, '2025-11-12 07:22:04', '2025-11-12 07:22:04'),
(15, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-12T10:52:04.000000Z\", \"confirm_code\": \"445767\"}, \"attributes\": {\"updated_at\": \"2025-11-15T04:39:22.000000Z\", \"confirm_code\": \"128338\"}}', NULL, '2025-11-15 01:09:22', '2025-11-15 01:09:22'),
(16, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-15T04:39:22.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-15T04:39:27.000000Z\"}}', NULL, '2025-11-15 01:09:27', '2025-11-15 01:09:27'),
(17, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-15T04:39:27.000000Z\", \"confirm_code\": \"128338\"}, \"attributes\": {\"updated_at\": \"2025-11-16T05:03:52.000000Z\", \"confirm_code\": \"847063\"}}', NULL, '2025-11-16 01:33:52', '2025-11-16 01:33:52'),
(18, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-16T05:03:52.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-16T05:03:57.000000Z\"}}', NULL, '2025-11-16 01:33:57', '2025-11-16 01:33:57'),
(19, 'task', 'task has been created', 'App\\Models\\Task', 'created', 70, 'App\\Models\\User', 15, '{\"attributes\": {\"title\": \"زیرتسک یکشنیه\", \"status\": \"0\", \"duration\": 16, \"end_date\": \"1404/09/14\", \"priority\": \"1\", \"parent_id\": 69, \"task_code\": \"T_527794\", \"created_at\": \"2025-11-16T10:41:17.000000Z\", \"deleted_at\": null, \"manager_id\": 15, \"project_id\": 5, \"start_date\": \"1404/08/29 14:09:00\", \"updated_at\": \"2025-11-16T10:41:17.000000Z\", \"watcher_id\": 12, \"description\": \"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.\", \"manager_check\": \"1\", \"manager_verify\": \"0\"}}', NULL, '2025-11-16 07:11:17', '2025-11-16 07:11:17'),
(20, 'task', 'task has been created', 'App\\Models\\Task', 'created', 71, 'App\\Models\\User', 15, '{\"attributes\": {\"title\": \"زیر تسک یکشنبه 2\", \"status\": \"0\", \"duration\": 13, \"end_date\": \"1404/09/11\", \"priority\": \"2\", \"parent_id\": 69, \"task_code\": \"T_175401\", \"created_at\": \"2025-11-16T10:42:10.000000Z\", \"deleted_at\": null, \"manager_id\": 12, \"project_id\": 5, \"start_date\": \"1404/08/29 14:11:00\", \"updated_at\": \"2025-11-16T10:42:10.000000Z\", \"watcher_id\": 13, \"description\": \"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.\", \"manager_check\": \"1\", \"manager_verify\": \"0\"}}', NULL, '2025-11-16 07:12:10', '2025-11-16 07:12:10'),
(21, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-08T10:38:18.000000Z\", \"confirm_code\": \"952461\"}, \"attributes\": {\"updated_at\": \"2025-11-16T13:11:41.000000Z\", \"confirm_code\": \"587712\"}}', NULL, '2025-11-16 09:41:41', '2025-11-16 09:41:41'),
(22, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-16T13:11:41.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-16T13:11:44.000000Z\"}}', NULL, '2025-11-16 09:41:44', '2025-11-16 09:41:44'),
(23, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 18, 'App\\Models\\User', 15, '{\"attributes\": {\"check\": \"0\", \"title\": \"چک لیست\", \"task_id\": 16, \"created_at\": \"2025-11-16T13:31:25.000000Z\", \"updated_at\": \"2025-11-16T13:31:25.000000Z\"}}', NULL, '2025-11-16 10:01:25', '2025-11-16 10:01:25'),
(24, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 19, 'App\\Models\\User', 15, '{\"attributes\": {\"check\": \"0\", \"title\": \"چک لیست 2\", \"task_id\": 16, \"created_at\": \"2025-11-16T13:31:33.000000Z\", \"updated_at\": \"2025-11-16T13:31:33.000000Z\"}}', NULL, '2025-11-16 10:01:33', '2025-11-16 10:01:33'),
(25, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-16T05:03:57.000000Z\", \"confirm_code\": \"847063\"}, \"attributes\": {\"updated_at\": \"2025-11-17T05:02:38.000000Z\", \"confirm_code\": \"152630\"}}', NULL, '2025-11-17 01:32:38', '2025-11-17 01:32:38'),
(26, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-17T05:02:38.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-17T05:02:45.000000Z\"}}', NULL, '2025-11-17 01:32:45', '2025-11-17 01:32:45'),
(27, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-17T05:02:45.000000Z\", \"confirm_code\": \"152630\"}, \"attributes\": {\"updated_at\": \"2025-11-17T11:07:10.000000Z\", \"confirm_code\": \"375730\"}}', NULL, '2025-11-17 07:37:10', '2025-11-17 07:37:10'),
(28, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-17T11:07:10.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-17T11:07:15.000000Z\"}}', NULL, '2025-11-17 07:37:15', '2025-11-17 07:37:15'),
(29, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-16T13:11:44.000000Z\", \"confirm_code\": \"587712\"}, \"attributes\": {\"updated_at\": \"2025-11-17T11:25:32.000000Z\", \"confirm_code\": \"319260\"}}', NULL, '2025-11-17 07:55:32', '2025-11-17 07:55:32'),
(30, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-17T11:25:32.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-17T11:25:36.000000Z\"}}', NULL, '2025-11-17 07:55:36', '2025-11-17 07:55:36'),
(31, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-17T11:07:15.000000Z\", \"confirm_code\": \"375730\"}, \"attributes\": {\"updated_at\": \"2025-11-18T05:03:22.000000Z\", \"confirm_code\": \"258840\"}}', NULL, '2025-11-18 01:33:22', '2025-11-18 01:33:22'),
(32, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-18T05:03:22.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-18T05:03:28.000000Z\"}}', NULL, '2025-11-18 01:33:28', '2025-11-18 01:33:28'),
(33, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-17T11:25:36.000000Z\", \"confirm_code\": \"319260\"}, \"attributes\": {\"updated_at\": \"2025-11-18T10:17:48.000000Z\", \"confirm_code\": \"504241\"}}', NULL, '2025-11-18 06:47:48', '2025-11-18 06:47:48'),
(34, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-18T10:17:48.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-18T10:17:53.000000Z\"}}', NULL, '2025-11-18 06:47:53', '2025-11-18 06:47:53'),
(35, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-18T05:03:28.000000Z\", \"confirm_code\": \"258840\"}, \"attributes\": {\"updated_at\": \"2025-11-19T04:59:11.000000Z\", \"confirm_code\": \"629872\"}}', NULL, '2025-11-19 01:29:11', '2025-11-19 01:29:11'),
(36, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-19T04:59:11.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-19T04:59:17.000000Z\"}}', NULL, '2025-11-19 01:29:17', '2025-11-19 01:29:17'),
(37, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-19T04:59:17.000000Z\", \"confirm_code\": \"629872\"}, \"attributes\": {\"updated_at\": \"2025-11-22T05:01:54.000000Z\", \"confirm_code\": \"314323\"}}', NULL, '2025-11-22 01:31:54', '2025-11-22 01:31:54'),
(38, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-22T05:01:54.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-22T05:02:09.000000Z\"}}', NULL, '2025-11-22 01:32:09', '2025-11-22 01:32:09'),
(40, 'task', 'task has been created', 'App\\Models\\Task', 'created', 73, 'App\\Models\\User', 15, '{\"attributes\": {\"title\": \"تست امروز\", \"status\": \"0\", \"duration\": 10, \"end_date\": \"1404/09/11\", \"priority\": \"1\", \"parent_id\": null, \"task_code\": \"T_546499\", \"created_at\": \"2025-11-22T05:09:52.000000Z\", \"deleted_at\": null, \"manager_id\": null, \"project_id\": 4, \"start_date\": \"1404/09/01\", \"updated_at\": \"2025-11-22T05:09:52.000000Z\", \"watcher_id\": 15, \"description\": \"تست\", \"manager_check\": \"0\", \"manager_verify\": \"0\"}}', NULL, '2025-11-22 01:39:52', '2025-11-22 01:39:52'),
(48, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-18T10:17:53.000000Z\", \"confirm_code\": \"504241\"}, \"attributes\": {\"updated_at\": \"2025-11-25T08:40:17.000000Z\", \"confirm_code\": \"211427\"}}', NULL, '2025-11-25 05:10:17', '2025-11-25 05:10:17'),
(49, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-25T08:40:17.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-25T08:40:22.000000Z\"}}', NULL, '2025-11-25 05:10:22', '2025-11-25 05:10:22'),
(50, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-22T05:02:09.000000Z\", \"confirm_code\": \"314323\"}, \"attributes\": {\"updated_at\": \"2025-11-26T05:33:52.000000Z\", \"confirm_code\": \"143887\"}}', NULL, '2025-11-26 02:03:52', '2025-11-26 02:03:52'),
(51, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-26T05:33:52.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-26T05:34:01.000000Z\"}}', NULL, '2025-11-26 02:04:01', '2025-11-26 02:04:01'),
(52, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-25T08:40:22.000000Z\", \"confirm_code\": \"211427\"}, \"attributes\": {\"updated_at\": \"2025-11-26T08:40:20.000000Z\", \"confirm_code\": \"630263\"}}', NULL, '2025-11-26 05:10:20', '2025-11-26 05:10:20'),
(53, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-26T08:40:20.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-26T08:40:26.000000Z\"}}', NULL, '2025-11-26 05:10:26', '2025-11-26 05:10:26'),
(54, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-26T08:40:26.000000Z\", \"confirm_code\": \"630263\"}, \"attributes\": {\"updated_at\": \"2025-11-29T04:47:39.000000Z\", \"confirm_code\": \"360756\"}}', NULL, '2025-11-29 01:17:39', '2025-11-29 01:17:39'),
(55, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-29T04:47:39.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-29T04:47:44.000000Z\"}}', NULL, '2025-11-29 01:17:44', '2025-11-29 01:17:44'),
(56, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-26T05:34:01.000000Z\", \"confirm_code\": \"143887\"}, \"attributes\": {\"updated_at\": \"2025-11-29T08:42:44.000000Z\", \"confirm_code\": \"970838\"}}', NULL, '2025-11-29 05:12:44', '2025-11-29 05:12:44'),
(57, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-29T08:42:44.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-29T08:43:08.000000Z\"}}', NULL, '2025-11-29 05:13:08', '2025-11-29 05:13:08'),
(58, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 55, 'App\\Models\\User', 15, '{\"old\": {\"status\": \"2\", \"updated_at\": \"2025-11-02T11:29:00.000000Z\"}, \"attributes\": {\"status\": \"1\", \"updated_at\": \"2025-11-29T09:08:30.000000Z\"}}', NULL, '2025-11-29 05:38:30', '2025-11-29 05:38:30'),
(59, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 20, 'App\\Models\\User', 15, '{\"attributes\": {\"check\": \"0\", \"title\": \"چک\", \"task_id\": 55, \"created_at\": \"2025-11-29T09:08:36.000000Z\", \"updated_at\": \"2025-11-29T09:08:36.000000Z\"}}', NULL, '2025-11-29 05:38:36', '2025-11-29 05:38:36'),
(60, 'TaskCheckList', 'TaskCheckList has been deleted', 'App\\Models\\TaskChecklist', 'deleted', 20, 'App\\Models\\User', 15, '{\"old\": {\"check\": \"0\", \"title\": \"چک\", \"task_id\": 55, \"created_at\": \"2025-11-29T09:08:36.000000Z\", \"updated_at\": \"2025-11-29T09:08:36.000000Z\"}}', NULL, '2025-11-29 05:39:35', '2025-11-29 05:39:35'),
(61, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 69, 'App\\Models\\User', 15, '{\"old\": {\"status\": \"0\", \"updated_at\": \"2025-11-03T10:32:01.000000Z\"}, \"attributes\": {\"status\": \"1\", \"updated_at\": \"2025-11-29T10:12:50.000000Z\"}}', NULL, '2025-11-29 06:42:50', '2025-11-29 06:42:50'),
(62, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 69, 'App\\Models\\User', 15, '{\"old\": {\"status\": \"1\", \"updated_at\": \"2025-11-29T10:12:50.000000Z\"}, \"attributes\": {\"status\": \"0\", \"updated_at\": \"2025-11-29T10:12:54.000000Z\"}}', NULL, '2025-11-29 06:42:54', '2025-11-29 06:42:54'),
(65, 'project', 'task has been created', 'App\\Models\\Project', 'created', 36, 'App\\Models\\User', 15, '{\"attributes\": {\"name\": \"ظسقلظسبظسرل\", \"status\": \"0\", \"brand_id\": null, \"end_date\": \"1404/09/27 14:00:00\", \"created_at\": \"2025-11-29T10:30:35.000000Z\", \"deleted_at\": null, \"manager_id\": 15, \"start_date\": \"1404/09/25 14:00:00\", \"updated_at\": \"2025-11-29T10:30:35.000000Z\", \"category_id\": 1, \"project_code\": \"P_132579\", \"department_id\": 1, \"start_todo_date\": null}}', NULL, '2025-11-29 07:00:35', '2025-11-29 07:00:35'),
(66, 'project', 'task has been created', 'App\\Models\\Project', 'created', 37, 'App\\Models\\User', 15, '{\"attributes\": {\"name\": \"ظسقلظسبظسرل\", \"status\": \"0\", \"brand_id\": null, \"end_date\": \"1404/09/27 14:00:00\", \"created_at\": \"2025-11-29T10:30:42.000000Z\", \"deleted_at\": null, \"manager_id\": 15, \"start_date\": \"1404/09/25 14:00:00\", \"updated_at\": \"2025-11-29T10:30:42.000000Z\", \"category_id\": 1, \"project_code\": \"P_722275\", \"department_id\": 1, \"start_todo_date\": null}}', NULL, '2025-11-29 07:00:42', '2025-11-29 07:00:42'),
(68, 'task', 'task has been created', 'App\\Models\\Task', 'created', 82, 'App\\Models\\User', 15, '{\"attributes\": {\"title\": \"sfvbsfvbsfvb\", \"status\": \"0\", \"duration\": 15, \"end_date\": \"1404/10/09\", \"priority\": \"2\", \"parent_id\": null, \"task_code\": \"T_402283\", \"created_at\": \"2025-11-29T10:50:32.000000Z\", \"deleted_at\": null, \"manager_id\": null, \"project_id\": 37, \"start_date\": \"1404/09/24\", \"updated_at\": \"2025-11-29T10:50:32.000000Z\", \"watcher_id\": 15, \"description\": \"sfsfsf\", \"manager_check\": \"0\", \"manager_verify\": \"0\"}}', NULL, '2025-11-29 07:20:32', '2025-11-29 07:20:32'),
(69, 'task', 'task has been created', 'App\\Models\\Task', 'created', 83, 'App\\Models\\User', 15, '{\"attributes\": {\"title\": \"dfvbdfvdfv\", \"status\": \"0\", \"duration\": 14, \"end_date\": \"1404/10/09\", \"priority\": \"1\", \"parent_id\": null, \"task_code\": \"T_316197\", \"created_at\": \"2025-11-29T10:50:52.000000Z\", \"deleted_at\": null, \"manager_id\": 12, \"project_id\": 37, \"start_date\": \"1404/09/25\", \"updated_at\": \"2025-11-29T10:50:52.000000Z\", \"watcher_id\": 15, \"description\": \"svfsvsvsvfsv\", \"manager_check\": \"1\", \"manager_verify\": \"0\"}}', NULL, '2025-11-29 07:20:52', '2025-11-29 07:20:52'),
(70, 'task', 'task has been created', 'App\\Models\\Task', 'created', 84, 'App\\Models\\User', 15, '{\"attributes\": {\"title\": \"sdsdvsdv\", \"status\": \"0\", \"duration\": 12, \"end_date\": \"1404/10/07\", \"priority\": \"2\", \"parent_id\": 83, \"task_code\": \"T_500793\", \"created_at\": \"2025-11-29T10:51:25.000000Z\", \"deleted_at\": null, \"manager_id\": 15, \"project_id\": 37, \"start_date\": \"1404/09/25 14:21:00\", \"updated_at\": \"2025-11-29T10:51:25.000000Z\", \"watcher_id\": 14, \"description\": \"dfbdfbdfb\", \"manager_check\": \"1\", \"manager_verify\": \"0\"}}', NULL, '2025-11-29 07:21:25', '2025-11-29 07:21:25'),
(71, 'task', 'task has been created', 'App\\Models\\Task', 'created', 85, 'App\\Models\\User', 15, '{\"attributes\": {\"title\": \"sdfbgsfbsfb\", \"status\": \"0\", \"duration\": 10, \"end_date\": \"1404/10/04\", \"priority\": \"1\", \"parent_id\": 83, \"task_code\": \"T_819414\", \"created_at\": \"2025-11-29T10:51:53.000000Z\", \"deleted_at\": null, \"manager_id\": 12, \"project_id\": 37, \"start_date\": \"1404/09/24 14:21:00\", \"updated_at\": \"2025-11-29T10:51:53.000000Z\", \"watcher_id\": 14, \"description\": \"sfvsfvsvf\", \"manager_check\": \"1\", \"manager_verify\": \"0\"}}', NULL, '2025-11-29 07:21:53', '2025-11-29 07:21:53'),
(72, 'task', 'task has been created', 'App\\Models\\Task', 'created', 86, 'App\\Models\\User', 15, '{\"attributes\": {\"title\": \"tujkgujgtjugyj\", \"status\": \"0\", \"duration\": 5, \"end_date\": \"1404/09/15\", \"priority\": \"1\", \"parent_id\": 83, \"task_code\": \"T_973624\", \"created_at\": \"2025-11-29T10:56:55.000000Z\", \"deleted_at\": null, \"manager_id\": 15, \"project_id\": 37, \"start_date\": \"1404/09/10 14:26:00\", \"updated_at\": \"2025-11-29T10:56:55.000000Z\", \"watcher_id\": 14, \"description\": \"drgdrgdrgd\", \"manager_check\": \"1\", \"manager_verify\": \"0\"}}', NULL, '2025-11-29 07:26:55', '2025-11-29 07:26:55'),
(73, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 21, 'App\\Models\\User', 15, '{\"attributes\": {\"check\": \"0\", \"title\": \"ikjiojojm\", \"task_id\": 86, \"created_at\": \"2025-11-29T10:59:09.000000Z\", \"updated_at\": \"2025-11-29T10:59:09.000000Z\"}}', NULL, '2025-11-29 07:29:09', '2025-11-29 07:29:09'),
(74, 'TaskCheckList', 'TaskCheckList has been deleted', 'App\\Models\\TaskChecklist', 'deleted', 21, 'App\\Models\\User', 15, '{\"old\": {\"check\": \"0\", \"title\": \"ikjiojojm\", \"task_id\": 86, \"created_at\": \"2025-11-29T10:59:09.000000Z\", \"updated_at\": \"2025-11-29T10:59:09.000000Z\"}}', NULL, '2025-11-29 07:29:12', '2025-11-29 07:29:12'),
(75, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 86, 'App\\Models\\User', 15, '{\"old\": {\"status\": \"0\", \"updated_at\": \"2025-11-29T10:56:55.000000Z\"}, \"attributes\": {\"status\": \"2\", \"updated_at\": \"2025-11-29T10:59:15.000000Z\"}}', NULL, '2025-11-29 07:29:15', '2025-11-29 07:29:15'),
(76, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-29T04:47:44.000000Z\", \"confirm_code\": \"360756\"}, \"attributes\": {\"updated_at\": \"2025-11-29T11:52:44.000000Z\", \"confirm_code\": \"651816\"}}', NULL, '2025-11-29 08:22:44', '2025-11-29 08:22:44'),
(77, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-29T11:52:44.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-29T11:53:01.000000Z\"}}', NULL, '2025-11-29 08:23:01', '2025-11-29 08:23:01'),
(78, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-29T08:43:08.000000Z\", \"confirm_code\": \"970838\"}, \"attributes\": {\"updated_at\": \"2025-11-30T06:10:18.000000Z\", \"confirm_code\": \"414842\"}}', NULL, '2025-11-30 02:40:18', '2025-11-30 02:40:18'),
(79, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-30T06:10:18.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-30T06:10:49.000000Z\"}}', NULL, '2025-11-30 02:40:49', '2025-11-30 02:40:49'),
(80, 'task', 'task has been created', 'App\\Models\\Task', 'created', 87, 'App\\Models\\User', 15, '{\"attributes\": {\"title\": \"ryhrhrh\", \"status\": \"0\", \"duration\": 10, \"end_date\": \"1404/09/27\", \"priority\": \"1\", \"parent_id\": 4, \"task_code\": \"T_320626\", \"created_at\": \"2025-11-30T06:15:13.000000Z\", \"deleted_at\": null, \"manager_id\": 15, \"project_id\": 4, \"start_date\": \"1404/09/17 09:44:00\", \"updated_at\": \"2025-11-30T06:15:13.000000Z\", \"watcher_id\": 15, \"description\": \"ddthdetheth\", \"manager_check\": \"1\", \"manager_verify\": \"0\"}}', NULL, '2025-11-30 02:45:13', '2025-11-30 02:45:13'),
(81, 'task', 'task has been created', 'App\\Models\\Task', 'created', 88, 'App\\Models\\User', 15, '{\"attributes\": {\"title\": \"svsfvsfvsfvsfvsvf\", \"status\": \"0\", \"duration\": 12, \"end_date\": \"1404/10/06\", \"priority\": \"1\", \"parent_id\": 73, \"task_code\": \"T_148951\", \"created_at\": \"2025-11-30T07:23:59.000000Z\", \"deleted_at\": null, \"manager_id\": 15, \"project_id\": 4, \"start_date\": \"1404/09/24 10:53:00\", \"updated_at\": \"2025-11-30T07:23:59.000000Z\", \"watcher_id\": 15, \"description\": \"sfvsfvsvfs\", \"manager_check\": \"1\", \"manager_verify\": \"0\"}}', NULL, '2025-11-30 03:53:59', '2025-11-30 03:53:59'),
(82, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-29T11:53:01.000000Z\", \"confirm_code\": \"651816\"}, \"attributes\": {\"updated_at\": \"2025-11-30T07:31:35.000000Z\", \"confirm_code\": \"347598\"}}', NULL, '2025-11-30 04:01:35', '2025-11-30 04:01:35'),
(83, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-30T07:31:35.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-30T07:31:42.000000Z\"}}', NULL, '2025-11-30 04:01:42', '2025-11-30 04:01:42'),
(84, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-30T07:31:42.000000Z\", \"confirm_code\": \"347598\"}, \"attributes\": {\"updated_at\": \"2025-11-30T07:34:23.000000Z\", \"confirm_code\": \"300475\"}}', NULL, '2025-11-30 04:04:23', '2025-11-30 04:04:23'),
(85, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-30T07:34:23.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-30T07:34:32.000000Z\"}}', NULL, '2025-11-30 04:04:32', '2025-11-30 04:04:32'),
(86, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-30T07:34:32.000000Z\", \"confirm_code\": \"300475\"}, \"attributes\": {\"updated_at\": \"2025-11-30T07:36:02.000000Z\", \"confirm_code\": \"290927\"}}', NULL, '2025-11-30 04:06:02', '2025-11-30 04:06:02'),
(87, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-30T07:36:02.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-30T07:36:08.000000Z\"}}', NULL, '2025-11-30 04:06:08', '2025-11-30 04:06:08'),
(88, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-30T07:36:08.000000Z\", \"confirm_code\": \"290927\"}, \"attributes\": {\"updated_at\": \"2025-11-30T10:56:30.000000Z\", \"confirm_code\": \"689076\"}}', NULL, '2025-11-30 07:26:30', '2025-11-30 07:26:30'),
(89, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-30T10:56:30.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-11-30T10:56:41.000000Z\"}}', NULL, '2025-11-30 07:26:41', '2025-11-30 07:26:41'),
(90, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-30T06:10:49.000000Z\", \"confirm_code\": \"414842\"}, \"attributes\": {\"updated_at\": \"2025-12-01T08:07:48.000000Z\", \"confirm_code\": \"275810\"}}', NULL, '2025-12-01 04:37:48', '2025-12-01 04:37:48'),
(91, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-01T08:07:48.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-12-01T08:07:57.000000Z\"}}', NULL, '2025-12-01 04:37:57', '2025-12-01 04:37:57'),
(92, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-11-30T10:56:41.000000Z\", \"confirm_code\": \"689076\"}, \"attributes\": {\"updated_at\": \"2025-12-01T08:10:33.000000Z\", \"confirm_code\": \"874677\"}}', NULL, '2025-12-01 04:40:33', '2025-12-01 04:40:33'),
(93, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-01T08:10:33.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-12-01T08:10:39.000000Z\"}}', NULL, '2025-12-01 04:40:39', '2025-12-01 04:40:39'),
(94, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-01T08:10:39.000000Z\", \"confirm_code\": \"874677\"}, \"attributes\": {\"updated_at\": \"2025-12-01T11:26:05.000000Z\", \"confirm_code\": \"469653\"}}', NULL, '2025-12-01 07:56:05', '2025-12-01 07:56:05'),
(95, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-01T11:26:05.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-12-01T11:26:15.000000Z\"}}', NULL, '2025-12-01 07:56:15', '2025-12-01 07:56:15'),
(96, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-01T11:26:15.000000Z\", \"confirm_code\": \"469653\"}, \"attributes\": {\"updated_at\": \"2025-12-02T05:34:00.000000Z\", \"confirm_code\": \"997611\"}}', NULL, '2025-12-02 02:04:00', '2025-12-02 02:04:00'),
(97, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-02T05:34:00.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-12-02T05:34:16.000000Z\"}}', NULL, '2025-12-02 02:04:16', '2025-12-02 02:04:16'),
(449, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-01T08:07:57.000000Z\", \"confirm_code\": \"275810\"}, \"attributes\": {\"updated_at\": \"2025-12-02T10:26:45.000000Z\", \"confirm_code\": \"702736\"}}', NULL, '2025-12-02 06:56:45', '2025-12-02 06:56:45'),
(450, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-02T10:26:45.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-12-02T10:27:25.000000Z\"}}', NULL, '2025-12-02 06:57:25', '2025-12-02 06:57:25'),
(499, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-02T10:27:25.000000Z\", \"confirm_code\": \"702736\"}, \"attributes\": {\"updated_at\": \"2025-12-02T11:08:01.000000Z\", \"confirm_code\": \"251215\"}}', NULL, '2025-12-02 07:38:01', '2025-12-02 07:38:01'),
(500, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-02T11:08:01.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-12-02T11:08:14.000000Z\"}}', NULL, '2025-12-02 07:38:14', '2025-12-02 07:38:14'),
(501, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-02T11:08:14.000000Z\", \"confirm_code\": \"251215\"}, \"attributes\": {\"updated_at\": \"2025-12-03T05:39:39.000000Z\", \"confirm_code\": \"326630\"}}', NULL, '2025-12-03 02:09:39', '2025-12-03 02:09:39'),
(502, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"old\": {\"updated_at\": \"2025-12-03T05:39:39.000000Z\"}, \"attributes\": {\"updated_at\": \"2025-12-03T05:39:56.000000Z\"}}', NULL, '2025-12-03 02:09:56', '2025-12-03 02:09:56'),
(503, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"454555\",\"updated_at\":\"2025-12-03T08:33:34.000000Z\"},\"old\":{\"confirm_code\":\"326630\",\"updated_at\":\"2025-12-03T05:39:56.000000Z\"}}', NULL, '2025-12-03 05:03:34', '2025-12-03 05:03:34'),
(504, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-03T08:34:02.000000Z\"},\"old\":{\"updated_at\":\"2025-12-03T08:33:34.000000Z\"}}', NULL, '2025-12-03 05:04:03', '2025-12-03 05:04:03'),
(505, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"592807\",\"updated_at\":\"2025-12-03T08:46:46.000000Z\"},\"old\":{\"confirm_code\":\"454555\",\"updated_at\":\"2025-12-03T08:34:02.000000Z\"}}', NULL, '2025-12-03 05:16:46', '2025-12-03 05:16:46'),
(506, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-03T08:47:47.000000Z\"},\"old\":{\"updated_at\":\"2025-12-03T08:46:46.000000Z\"}}', NULL, '2025-12-03 05:17:47', '2025-12-03 05:17:47'),
(507, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"115875\",\"updated_at\":\"2025-12-03T10:58:18.000000Z\"},\"old\":{\"confirm_code\":\"592807\",\"updated_at\":\"2025-12-03T08:47:47.000000Z\"}}', NULL, '2025-12-03 07:28:18', '2025-12-03 07:28:18'),
(508, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-03T10:58:36.000000Z\"},\"old\":{\"updated_at\":\"2025-12-03T10:58:18.000000Z\"}}', NULL, '2025-12-03 07:28:36', '2025-12-03 07:28:36'),
(509, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"887821\",\"updated_at\":\"2025-12-03T13:03:40.000000Z\"},\"old\":{\"confirm_code\":\"115875\",\"updated_at\":\"2025-12-03T10:58:36.000000Z\"}}', NULL, '2025-12-03 09:33:40', '2025-12-03 09:33:40'),
(510, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-03T13:04:06.000000Z\"},\"old\":{\"updated_at\":\"2025-12-03T13:03:40.000000Z\"}}', NULL, '2025-12-03 09:34:06', '2025-12-03 09:34:06'),
(511, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"306189\",\"updated_at\":\"2025-12-06T05:50:27.000000Z\"},\"old\":{\"confirm_code\":\"887821\",\"updated_at\":\"2025-12-03T13:04:06.000000Z\"}}', NULL, '2025-12-06 02:20:27', '2025-12-06 02:20:27'),
(512, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"711063\",\"updated_at\":\"2025-12-06T05:51:21.000000Z\"},\"old\":{\"confirm_code\":\"306189\",\"updated_at\":\"2025-12-06T05:50:27.000000Z\"}}', NULL, '2025-12-06 02:21:21', '2025-12-06 02:21:21'),
(513, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-06T05:51:30.000000Z\"},\"old\":{\"updated_at\":\"2025-12-06T05:51:21.000000Z\"}}', NULL, '2025-12-06 02:21:30', '2025-12-06 02:21:30'),
(514, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"400314\",\"updated_at\":\"2025-12-06T10:53:30.000000Z\"},\"old\":{\"confirm_code\":\"997611\",\"updated_at\":\"2025-12-02T05:34:16.000000Z\"}}', NULL, '2025-12-06 07:23:31', '2025-12-06 07:23:31'),
(515, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"458695\",\"updated_at\":\"2025-12-06T10:54:25.000000Z\"},\"old\":{\"confirm_code\":\"400314\",\"updated_at\":\"2025-12-06T10:53:30.000000Z\"}}', NULL, '2025-12-06 07:24:25', '2025-12-06 07:24:25'),
(516, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"698584\",\"updated_at\":\"2025-12-06T10:54:53.000000Z\"},\"old\":{\"confirm_code\":\"458695\",\"updated_at\":\"2025-12-06T10:54:25.000000Z\"}}', NULL, '2025-12-06 07:24:53', '2025-12-06 07:24:53'),
(517, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"344298\",\"updated_at\":\"2025-12-06T10:57:59.000000Z\"},\"old\":{\"confirm_code\":\"698584\",\"updated_at\":\"2025-12-06T10:54:53.000000Z\"}}', NULL, '2025-12-06 07:27:59', '2025-12-06 07:27:59'),
(518, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-06T10:58:19.000000Z\"},\"old\":{\"updated_at\":\"2025-12-06T10:57:59.000000Z\"}}', NULL, '2025-12-06 07:28:19', '2025-12-06 07:28:19'),
(519, 'User', 'task has been updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"627746\",\"updated_at\":\"2025-12-07T04:50:25.000000Z\"},\"old\":{\"confirm_code\":\"711063\",\"updated_at\":\"2025-12-06T05:51:30.000000Z\"}}', NULL, '2025-12-07 01:20:25', '2025-12-07 01:20:25'),
(520, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-07T05:26:53.000000Z\"},\"old\":{\"updated_at\":\"2025-12-07T04:50:25.000000Z\"}}', NULL, '2025-12-07 01:56:54', '2025-12-07 01:56:54'),
(521, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"770885\",\"updated_at\":\"2025-12-07T09:24:34.000000Z\"},\"old\":{\"confirm_code\":\"627746\",\"updated_at\":\"2025-12-07T05:26:53.000000Z\"}}', NULL, '2025-12-07 05:54:34', '2025-12-07 05:54:34'),
(522, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-07T09:24:42.000000Z\"},\"old\":{\"updated_at\":\"2025-12-07T09:24:34.000000Z\"}}', NULL, '2025-12-07 05:54:42', '2025-12-07 05:54:42'),
(523, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"394702\",\"updated_at\":\"2025-12-07T09:29:23.000000Z\"},\"old\":{\"confirm_code\":\"344298\",\"updated_at\":\"2025-12-06T10:58:19.000000Z\"}}', NULL, '2025-12-07 05:59:23', '2025-12-07 05:59:23'),
(524, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-07T09:29:38.000000Z\"},\"old\":{\"updated_at\":\"2025-12-07T09:29:23.000000Z\"}}', NULL, '2025-12-07 05:59:38', '2025-12-07 05:59:38'),
(525, 'User', 'user created', 'App\\Models\\User', 'created', 16, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0622\\u0642\\u0627\\u06cc\",\"last_name\":\"\\u0633\\u0644\\u06cc\\u0645\\u0627\\u0646\\u06cc\",\"mobile\":\"09121234567\",\"confirm_code\":null,\"personal_id\":\"111111\",\"status\":\"0\",\"position_id\":6,\"photo_id\":null,\"email\":\"soly@solico-ms.com\",\"created_at\":\"2025-12-07T09:32:31.000000Z\",\"updated_at\":\"2025-12-07T09:32:31.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 06:02:31', '2025-12-07 06:02:31'),
(526, 'User', 'user updated', 'App\\Models\\User', 'updated', 16, 'App\\Models\\User', 1, '{\"attributes\":{\"status\":\"1\",\"updated_at\":\"2025-12-07T09:32:39.000000Z\"},\"old\":{\"status\":\"0\",\"updated_at\":\"2025-12-07T09:32:31.000000Z\"}}', NULL, '2025-12-07 06:02:39', '2025-12-07 06:02:39'),
(527, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 5, 'App\\Models\\User', 15, '{\"attributes\":{\"status\":\"2\",\"updated_at\":\"2025-12-07T09:40:22.000000Z\"},\"old\":{\"status\":\"0\",\"updated_at\":\"2025-10-19T07:52:35.000000Z\"}}', NULL, '2025-12-07 06:10:22', '2025-12-07 06:10:22'),
(528, 'User', 'user created', 'App\\Models\\User', 'created', 17, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0698\\u0627\\u0644\\u0647\",\"last_name\":\"\\u0634\\u0627\\u062f\\u0645\\u0627\\u0646\\u06cc\",\"mobile\":\"09123481675\",\"confirm_code\":null,\"personal_id\":\"22222\",\"status\":\"0\",\"position_id\":7,\"photo_id\":null,\"email\":\"j.shadmani@solico-group.ir\",\"created_at\":\"2025-12-07T09:45:57.000000Z\",\"updated_at\":\"2025-12-07T09:45:57.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 06:15:57', '2025-12-07 06:15:57'),
(529, 'User', 'user updated', 'App\\Models\\User', 'updated', 17, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"779989\",\"updated_at\":\"2025-12-07T09:46:33.000000Z\"},\"old\":{\"confirm_code\":null,\"updated_at\":\"2025-12-07T09:45:57.000000Z\"}}', NULL, '2025-12-07 06:16:33', '2025-12-07 06:16:33'),
(530, 'User', 'user updated', 'App\\Models\\User', 'updated', 17, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-07T09:46:51.000000Z\"},\"old\":{\"updated_at\":\"2025-12-07T09:46:33.000000Z\"}}', NULL, '2025-12-07 06:16:51', '2025-12-07 06:16:51'),
(531, 'project', 'task has been created', 'App\\Models\\Project', 'created', 38, 'App\\Models\\User', 17, '{\"attributes\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u062a\\u0633\\u062a\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/09\\/17 13:34:00\",\"end_date\":\"1404\\/09\\/24 13:34:00\",\"manager_id\":17,\"category_id\":1,\"department_id\":2,\"brand_id\":null,\"project_code\":\"P_734067\",\"deleted_at\":null,\"updated_at\":\"2025-12-07T10:04:53.000000Z\",\"created_at\":\"2025-12-07T10:04:53.000000Z\"}}', NULL, '2025-12-07 06:34:53', '2025-12-07 06:34:53'),
(532, 'User', 'user updated', 'App\\Models\\User', 'updated', 17, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"923618\",\"updated_at\":\"2025-12-07T10:35:46.000000Z\"},\"old\":{\"confirm_code\":\"779989\",\"updated_at\":\"2025-12-07T09:46:51.000000Z\"}}', NULL, '2025-12-07 07:05:46', '2025-12-07 07:05:46'),
(533, 'User', 'user updated', 'App\\Models\\User', 'updated', 17, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-07T10:38:02.000000Z\"},\"old\":{\"updated_at\":\"2025-12-07T10:35:46.000000Z\"}}', NULL, '2025-12-07 07:08:02', '2025-12-07 07:08:02'),
(534, 'project', 'task has been created', 'App\\Models\\Project', 'created', 39, 'App\\Models\\User', 17, '{\"attributes\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/17 14:09:00\",\"end_date\":\"1404\\/09\\/20 14:10:00\",\"manager_id\":17,\"category_id\":1,\"department_id\":1,\"brand_id\":null,\"project_code\":\"P_784893\",\"deleted_at\":null,\"updated_at\":\"2025-12-07T10:46:35.000000Z\",\"created_at\":\"2025-12-07T10:46:35.000000Z\"}}', NULL, '2025-12-07 07:16:35', '2025-12-07 07:16:35'),
(535, 'project', 'task has been created', 'App\\Models\\Project', 'created', 40, 'App\\Models\\User', 17, '{\"attributes\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/17 14:09:00\",\"end_date\":\"1404\\/09\\/20 14:10:00\",\"manager_id\":17,\"category_id\":1,\"department_id\":1,\"brand_id\":null,\"project_code\":\"P_968970\",\"deleted_at\":null,\"updated_at\":\"2025-12-07T10:47:36.000000Z\",\"created_at\":\"2025-12-07T10:47:36.000000Z\"}}', NULL, '2025-12-07 07:17:36', '2025-12-07 07:17:36'),
(536, 'project', 'task has been created', 'App\\Models\\Project', 'created', 41, 'App\\Models\\User', 17, '{\"attributes\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/17 14:09:00\",\"end_date\":\"1404\\/09\\/20 14:10:00\",\"manager_id\":17,\"category_id\":1,\"department_id\":1,\"brand_id\":null,\"project_code\":\"P_937762\",\"deleted_at\":null,\"updated_at\":\"2025-12-07T10:48:44.000000Z\",\"created_at\":\"2025-12-07T10:48:44.000000Z\"}}', NULL, '2025-12-07 07:18:44', '2025-12-07 07:18:44'),
(537, 'project', 'task has been created', 'App\\Models\\Project', 'created', 42, 'App\\Models\\User', 17, '{\"attributes\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/17 14:09:00\",\"end_date\":\"1404\\/09\\/20 14:10:00\",\"manager_id\":17,\"category_id\":1,\"department_id\":1,\"brand_id\":null,\"project_code\":\"P_823541\",\"deleted_at\":null,\"updated_at\":\"2025-12-07T10:49:28.000000Z\",\"created_at\":\"2025-12-07T10:49:28.000000Z\"}}', NULL, '2025-12-07 07:19:28', '2025-12-07 07:19:28'),
(538, 'User', 'user created', 'App\\Models\\User', 'created', 18, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u062d\\u0645\\u062f\",\"last_name\":\"\\u0627\\u0648\\u062a\\u0627\\u062f\\u06cc\",\"mobile\":\"09211234567\",\"confirm_code\":null,\"personal_id\":\"33333\",\"status\":\"0\",\"position_id\":8,\"photo_id\":null,\"email\":\"m.otadi@solico-group.ir\",\"created_at\":\"2025-12-07T10:59:06.000000Z\",\"updated_at\":\"2025-12-07T10:59:06.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 07:29:06', '2025-12-07 07:29:06'),
(539, 'project', 'task has been created', 'App\\Models\\Project', 'created', 43, 'App\\Models\\User', 17, '{\"attributes\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"fbdbsdfbdfbdfb\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/09\\/16 14:53:00\",\"end_date\":null,\"manager_id\":17,\"category_id\":null,\"department_id\":19,\"brand_id\":null,\"project_code\":\"P_569124\",\"deleted_at\":null,\"updated_at\":\"2025-12-07T11:24:23.000000Z\",\"created_at\":\"2025-12-07T11:24:23.000000Z\"}}', NULL, '2025-12-07 07:54:23', '2025-12-07 07:54:23'),
(540, 'project', 'task has been deleted', 'App\\Models\\Project', 'deleted', 43, 'App\\Models\\User', 17, '{\"old\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"fbdbsdfbdfbdfb\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/09\\/16 14:53:00\",\"end_date\":null,\"manager_id\":17,\"category_id\":null,\"department_id\":19,\"brand_id\":null,\"project_code\":\"P_569124\",\"deleted_at\":\"2025-12-07T11:24:38.000000Z\",\"updated_at\":\"2025-12-07T11:24:38.000000Z\",\"created_at\":\"2025-12-07T11:24:23.000000Z\"}}', NULL, '2025-12-07 07:54:38', '2025-12-07 07:54:38'),
(541, 'project', 'task has been deleted', 'App\\Models\\Project', 'deleted', 42, 'App\\Models\\User', 17, '{\"old\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/17 14:09:00\",\"end_date\":\"1404\\/09\\/20 14:10:00\",\"manager_id\":17,\"category_id\":1,\"department_id\":1,\"brand_id\":null,\"project_code\":\"P_823541\",\"deleted_at\":\"2025-12-07T11:24:42.000000Z\",\"updated_at\":\"2025-12-07T11:24:42.000000Z\",\"created_at\":\"2025-12-07T10:49:28.000000Z\"}}', NULL, '2025-12-07 07:54:42', '2025-12-07 07:54:42'),
(542, 'project', 'task has been deleted', 'App\\Models\\Project', 'deleted', 41, 'App\\Models\\User', 17, '{\"old\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/17 14:09:00\",\"end_date\":\"1404\\/09\\/20 14:10:00\",\"manager_id\":17,\"category_id\":1,\"department_id\":1,\"brand_id\":null,\"project_code\":\"P_937762\",\"deleted_at\":\"2025-12-07T11:24:45.000000Z\",\"updated_at\":\"2025-12-07T11:24:45.000000Z\",\"created_at\":\"2025-12-07T10:48:44.000000Z\"}}', NULL, '2025-12-07 07:54:45', '2025-12-07 07:54:45');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(543, 'project', 'task has been deleted', 'App\\Models\\Project', 'deleted', 40, 'App\\Models\\User', 17, '{\"old\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/17 14:09:00\",\"end_date\":\"1404\\/09\\/20 14:10:00\",\"manager_id\":17,\"category_id\":1,\"department_id\":1,\"brand_id\":null,\"project_code\":\"P_968970\",\"deleted_at\":\"2025-12-07T11:24:48.000000Z\",\"updated_at\":\"2025-12-07T11:24:48.000000Z\",\"created_at\":\"2025-12-07T10:47:36.000000Z\"}}', NULL, '2025-12-07 07:54:48', '2025-12-07 07:54:48'),
(544, 'project', 'task has been deleted', 'App\\Models\\Project', 'deleted', 39, 'App\\Models\\User', 17, '{\"old\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/17 14:09:00\",\"end_date\":\"1404\\/09\\/20 14:10:00\",\"manager_id\":17,\"category_id\":1,\"department_id\":1,\"brand_id\":null,\"project_code\":\"P_784893\",\"deleted_at\":\"2025-12-07T11:24:52.000000Z\",\"updated_at\":\"2025-12-07T11:24:52.000000Z\",\"created_at\":\"2025-12-07T10:46:35.000000Z\"}}', NULL, '2025-12-07 07:54:52', '2025-12-07 07:54:52'),
(545, 'project', 'task has been deleted', 'App\\Models\\Project', 'deleted', 38, 'App\\Models\\User', 17, '{\"old\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u062a\\u0633\\u062a\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/09\\/17 13:34:00\",\"end_date\":\"1404\\/09\\/24 13:34:00\",\"manager_id\":17,\"category_id\":1,\"department_id\":2,\"brand_id\":null,\"project_code\":\"P_734067\",\"deleted_at\":\"2025-12-07T11:24:55.000000Z\",\"updated_at\":\"2025-12-07T11:24:55.000000Z\",\"created_at\":\"2025-12-07T10:04:53.000000Z\"}}', NULL, '2025-12-07 07:54:55', '2025-12-07 07:54:55'),
(546, 'project', 'task has been created', 'App\\Models\\Project', 'created', 44, 'App\\Models\\User', 17, '{\"attributes\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/09\\/17 14:55:00\",\"end_date\":null,\"manager_id\":17,\"category_id\":null,\"department_id\":19,\"brand_id\":null,\"project_code\":\"P_661034\",\"deleted_at\":null,\"updated_at\":\"2025-12-07T11:25:27.000000Z\",\"created_at\":\"2025-12-07T11:25:27.000000Z\"}}', NULL, '2025-12-07 07:55:27', '2025-12-07 07:55:27'),
(547, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 44, 'App\\Models\\User', 17, '{\"attributes\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-07T11:26:18.000000Z\"},\"old\":{\"approve_verify\":null,\"updated_at\":\"2025-12-07T11:25:27.000000Z\"}}', NULL, '2025-12-07 07:56:18', '2025-12-07 07:56:18'),
(548, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 44, 'App\\Models\\User', 17, '{\"attributes\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-12-07T11:26:22.000000Z\"},\"old\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-07T11:26:18.000000Z\"}}', NULL, '2025-12-07 07:56:22', '2025-12-07 07:56:22'),
(549, 'User', 'user updated', 'App\\Models\\User', 'updated', 18, 'App\\Models\\User', 1, '{\"attributes\":{\"status\":\"1\",\"updated_at\":\"2025-12-07T11:39:34.000000Z\"},\"old\":{\"status\":\"0\",\"updated_at\":\"2025-12-07T10:59:06.000000Z\"}}', NULL, '2025-12-07 08:09:34', '2025-12-07 08:09:34'),
(550, 'User', 'user updated', 'App\\Models\\User', 'updated', 17, 'App\\Models\\User', 1, '{\"attributes\":{\"status\":\"1\",\"updated_at\":\"2025-12-07T11:42:46.000000Z\"},\"old\":{\"status\":\"0\",\"updated_at\":\"2025-12-07T10:38:02.000000Z\"}}', NULL, '2025-12-07 08:12:46', '2025-12-07 08:12:46'),
(551, 'project', 'task has been created', 'App\\Models\\Project', 'created', 45, 'App\\Models\\User', 17, '{\"attributes\":{\"approving_manager\":18,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/17 15:39:00\",\"end_date\":null,\"manager_id\":17,\"category_id\":null,\"department_id\":19,\"brand_id\":null,\"project_code\":\"P_758009\",\"deleted_at\":null,\"updated_at\":\"2025-12-07T12:12:01.000000Z\",\"created_at\":\"2025-12-07T12:12:01.000000Z\"}}', NULL, '2025-12-07 08:42:01', '2025-12-07 08:42:01'),
(552, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 44, 'App\\Models\\User', 17, '{\"attributes\":{\"status\":\"2\",\"updated_at\":\"2025-12-07T12:25:46.000000Z\"},\"old\":{\"status\":\"0\",\"updated_at\":\"2025-12-07T11:26:22.000000Z\"}}', NULL, '2025-12-07 08:55:46', '2025-12-07 08:55:46'),
(553, 'task', 'task has been created', 'App\\Models\\Task', 'created', 89, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a\",\"description\":null,\"task_code\":\"T_790085\",\"status\":\"0\",\"duration\":14,\"priority\":\"2\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/30\",\"created_at\":\"2025-12-07T13:04:13.000000Z\",\"updated_at\":\"2025-12-07T13:04:13.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:34:13', '2025-12-07 09:34:13'),
(554, 'task', 'task has been created', 'App\\Models\\Task', 'created', 90, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"dfbdbdfb\",\"description\":null,\"task_code\":\"T_626633\",\"status\":\"0\",\"duration\":14,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/30\",\"created_at\":\"2025-12-07T13:08:32.000000Z\",\"updated_at\":\"2025-12-07T13:08:32.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:38:32', '2025-12-07 09:38:32'),
(555, 'task', 'task has been created', 'App\\Models\\Task', 'created', 91, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"\\u0631\\u0628\\u0633\\u06cc\\u0631\\u0633\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_761838\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/17\",\"end_date\":\"1404\\/09\\/27\",\"created_at\":\"2025-12-07T13:10:49.000000Z\",\"updated_at\":\"2025-12-07T13:10:49.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:40:49', '2025-12-07 09:40:49'),
(556, 'task', 'task has been created', 'App\\Models\\Task', 'created', 92, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a\",\"description\":null,\"task_code\":\"T_844544\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:14:31.000000Z\",\"updated_at\":\"2025-12-07T13:14:31.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:44:31', '2025-12-07 09:44:31'),
(557, 'task', 'task has been created', 'App\\Models\\Task', 'created', 93, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sdvsdv\",\"description\":null,\"task_code\":\"T_356218\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:20:04.000000Z\",\"updated_at\":\"2025-12-07T13:20:04.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:50:04', '2025-12-07 09:50:04'),
(558, 'task', 'task has been created', 'App\\Models\\Task', 'created', 94, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sdvsdv\",\"description\":null,\"task_code\":\"T_358878\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:20:54.000000Z\",\"updated_at\":\"2025-12-07T13:20:54.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:50:54', '2025-12-07 09:50:54'),
(559, 'task', 'task has been created', 'App\\Models\\Task', 'created', 95, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sdvsdv\",\"description\":null,\"task_code\":\"T_355438\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:21:42.000000Z\",\"updated_at\":\"2025-12-07T13:21:42.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:51:42', '2025-12-07 09:51:42'),
(560, 'task', 'task has been created', 'App\\Models\\Task', 'created', 96, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sdvsdv\",\"description\":null,\"task_code\":\"T_997334\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:21:58.000000Z\",\"updated_at\":\"2025-12-07T13:21:58.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:51:58', '2025-12-07 09:51:58'),
(561, 'task', 'task has been created', 'App\\Models\\Task', 'created', 97, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sdvsdv\",\"description\":null,\"task_code\":\"T_348637\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:22:19.000000Z\",\"updated_at\":\"2025-12-07T13:22:19.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:52:19', '2025-12-07 09:52:19'),
(562, 'task', 'task has been created', 'App\\Models\\Task', 'created', 98, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sdvsdv\",\"description\":null,\"task_code\":\"T_445716\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:23:57.000000Z\",\"updated_at\":\"2025-12-07T13:23:57.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:53:57', '2025-12-07 09:53:57'),
(563, 'task', 'task has been created', 'App\\Models\\Task', 'created', 99, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sdvsdv\",\"description\":null,\"task_code\":\"T_976303\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:24:17.000000Z\",\"updated_at\":\"2025-12-07T13:24:17.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:54:17', '2025-12-07 09:54:17'),
(564, 'task', 'task has been created', 'App\\Models\\Task', 'created', 100, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sdvsdv\",\"description\":null,\"task_code\":\"T_615502\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:24:32.000000Z\",\"updated_at\":\"2025-12-07T13:24:32.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:54:32', '2025-12-07 09:54:32'),
(565, 'task', 'task has been created', 'App\\Models\\Task', 'created', 101, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sdvsdv\",\"description\":null,\"task_code\":\"T_560160\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:24:45.000000Z\",\"updated_at\":\"2025-12-07T13:24:45.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:54:45', '2025-12-07 09:54:45'),
(566, 'task', 'task has been created', 'App\\Models\\Task', 'created', 102, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"gnhdfnhdgndfg\",\"description\":null,\"task_code\":\"T_974675\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/16\",\"end_date\":\"1404\\/09\\/26\",\"created_at\":\"2025-12-07T13:25:52.000000Z\",\"updated_at\":\"2025-12-07T13:25:52.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:55:52', '2025-12-07 09:55:52'),
(567, 'task', 'task has been created', 'App\\Models\\Task', 'created', 103, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sfbsfsfvbsf\",\"description\":null,\"task_code\":\"T_822407\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":17,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/17\",\"end_date\":\"1404\\/09\\/27\",\"created_at\":\"2025-12-07T13:28:25.000000Z\",\"updated_at\":\"2025-12-07T13:28:25.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:58:25', '2025-12-07 09:58:25'),
(568, 'task', 'task has been created', 'App\\Models\\Task', 'created', 104, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"sfbsfsfvbsf\",\"description\":null,\"task_code\":\"T_947117\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":17,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/17\",\"end_date\":\"1404\\/09\\/27\",\"created_at\":\"2025-12-07T13:28:36.000000Z\",\"updated_at\":\"2025-12-07T13:28:36.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 09:58:36', '2025-12-07 09:58:36'),
(569, 'task', 'task has been created', 'App\\Models\\Task', 'created', 105, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"fgnfgbnfgn\",\"description\":null,\"task_code\":\"T_117121\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/10\",\"end_date\":\"1404\\/09\\/20\",\"created_at\":\"2025-12-07T13:31:13.000000Z\",\"updated_at\":\"2025-12-07T13:31:13.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 10:01:13', '2025-12-07 10:01:13'),
(570, 'task', 'task has been created', 'App\\Models\\Task', 'created', 106, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"fgnfgbnfgn\",\"description\":null,\"task_code\":\"T_793987\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/10\",\"end_date\":\"1404\\/09\\/20\",\"created_at\":\"2025-12-07T13:34:12.000000Z\",\"updated_at\":\"2025-12-07T13:34:12.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 10:04:12', '2025-12-07 10:04:12'),
(571, 'task', 'task has been created', 'App\\Models\\Task', 'created', 107, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"fgnfgbnfgn\",\"description\":null,\"task_code\":\"T_651667\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/10\",\"end_date\":\"1404\\/09\\/20\",\"created_at\":\"2025-12-07T13:34:17.000000Z\",\"updated_at\":\"2025-12-07T13:34:17.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 10:04:17', '2025-12-07 10:04:17'),
(572, 'task', 'task has been created', 'App\\Models\\Task', 'created', 108, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a\",\"description\":null,\"task_code\":\"T_755434\",\"status\":\"0\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/17\",\"end_date\":\"1404\\/09\\/27\",\"created_at\":\"2025-12-07T13:49:18.000000Z\",\"updated_at\":\"2025-12-07T13:49:18.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 10:19:18', '2025-12-07 10:19:18'),
(573, 'task', 'task has been created', 'App\\Models\\Task', 'created', 109, 'App\\Models\\User', 17, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a\",\"description\":null,\"task_code\":\"T_172634\",\"status\":\"0\",\"duration\":2,\"priority\":\"2\",\"parent_id\":null,\"project_id\":44,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":18,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/18\",\"end_date\":\"1404\\/09\\/20\",\"created_at\":\"2025-12-07T13:50:14.000000Z\",\"updated_at\":\"2025-12-07T13:50:14.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-07 10:20:14', '2025-12-07 10:20:14'),
(574, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"323189\",\"updated_at\":\"2025-12-08T08:31:27.000000Z\"},\"old\":{\"confirm_code\":\"770885\",\"updated_at\":\"2025-12-07T09:24:42.000000Z\"}}', NULL, '2025-12-08 05:01:27', '2025-12-08 05:01:27'),
(575, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"828818\",\"updated_at\":\"2025-12-08T08:32:05.000000Z\"},\"old\":{\"confirm_code\":\"323189\",\"updated_at\":\"2025-12-08T08:31:27.000000Z\"}}', NULL, '2025-12-08 05:02:05', '2025-12-08 05:02:05'),
(576, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"410777\",\"updated_at\":\"2025-12-08T08:44:18.000000Z\"},\"old\":{\"confirm_code\":\"828818\",\"updated_at\":\"2025-12-08T08:32:05.000000Z\"}}', NULL, '2025-12-08 05:14:18', '2025-12-08 05:14:18'),
(577, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"488229\",\"updated_at\":\"2025-12-08T08:46:03.000000Z\"},\"old\":{\"confirm_code\":\"410777\",\"updated_at\":\"2025-12-08T08:44:18.000000Z\"}}', NULL, '2025-12-08 05:16:04', '2025-12-08 05:16:04'),
(578, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"208940\",\"updated_at\":\"2025-12-08T08:47:57.000000Z\"},\"old\":{\"confirm_code\":\"488229\",\"updated_at\":\"2025-12-08T08:46:03.000000Z\"}}', NULL, '2025-12-08 05:17:57', '2025-12-08 05:17:57'),
(579, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"811181\",\"updated_at\":\"2025-12-08T08:48:09.000000Z\"},\"old\":{\"confirm_code\":\"208940\",\"updated_at\":\"2025-12-08T08:47:57.000000Z\"}}', NULL, '2025-12-08 05:18:09', '2025-12-08 05:18:09'),
(580, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"416424\",\"updated_at\":\"2025-12-08T08:49:37.000000Z\"},\"old\":{\"confirm_code\":\"811181\",\"updated_at\":\"2025-12-08T08:48:09.000000Z\"}}', NULL, '2025-12-08 05:19:37', '2025-12-08 05:19:37'),
(581, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"681651\",\"updated_at\":\"2025-12-08T08:51:03.000000Z\"},\"old\":{\"confirm_code\":\"416424\",\"updated_at\":\"2025-12-08T08:49:37.000000Z\"}}', NULL, '2025-12-08 05:21:03', '2025-12-08 05:21:03'),
(582, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"875092\",\"updated_at\":\"2025-12-08T09:03:40.000000Z\"},\"old\":{\"confirm_code\":\"681651\",\"updated_at\":\"2025-12-08T08:51:03.000000Z\"}}', NULL, '2025-12-08 05:33:40', '2025-12-08 05:33:40'),
(583, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"844511\",\"updated_at\":\"2025-12-08T09:04:54.000000Z\"},\"old\":{\"confirm_code\":\"875092\",\"updated_at\":\"2025-12-08T09:03:40.000000Z\"}}', NULL, '2025-12-08 05:34:54', '2025-12-08 05:34:54'),
(584, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"780146\",\"updated_at\":\"2025-12-08T10:03:54.000000Z\"},\"old\":{\"confirm_code\":\"844511\",\"updated_at\":\"2025-12-08T09:04:54.000000Z\"}}', NULL, '2025-12-08 06:33:54', '2025-12-08 06:33:54'),
(585, 'User', 'user updated', 'App\\Models\\User', 'updated', 5, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"559182\",\"updated_at\":\"2025-12-08T10:05:08.000000Z\"},\"old\":{\"confirm_code\":\"419718\",\"updated_at\":\"2025-10-15T07:52:12.000000Z\"}}', NULL, '2025-12-08 06:35:08', '2025-12-08 06:35:08'),
(586, 'User', 'user updated', 'App\\Models\\User', 'updated', 5, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"924940\",\"updated_at\":\"2025-12-08T10:05:51.000000Z\"},\"old\":{\"confirm_code\":\"559182\",\"updated_at\":\"2025-12-08T10:05:08.000000Z\"}}', NULL, '2025-12-08 06:35:51', '2025-12-08 06:35:51'),
(587, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"526819\",\"updated_at\":\"2025-12-08T10:10:43.000000Z\"},\"old\":{\"confirm_code\":\"780146\",\"updated_at\":\"2025-12-08T10:03:54.000000Z\"}}', NULL, '2025-12-08 06:40:43', '2025-12-08 06:40:43'),
(588, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"556673\",\"updated_at\":\"2025-12-08T10:11:13.000000Z\"},\"old\":{\"confirm_code\":\"526819\",\"updated_at\":\"2025-12-08T10:10:43.000000Z\"}}', NULL, '2025-12-08 06:41:13', '2025-12-08 06:41:13'),
(589, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"324645\",\"updated_at\":\"2025-12-08T10:12:58.000000Z\"},\"old\":{\"confirm_code\":\"556673\",\"updated_at\":\"2025-12-08T10:11:13.000000Z\"}}', NULL, '2025-12-08 06:42:58', '2025-12-08 06:42:58'),
(590, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"536964\",\"updated_at\":\"2025-12-08T10:13:18.000000Z\"},\"old\":{\"confirm_code\":\"324645\",\"updated_at\":\"2025-12-08T10:12:58.000000Z\"}}', NULL, '2025-12-08 06:43:18', '2025-12-08 06:43:18'),
(591, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"745135\",\"updated_at\":\"2025-12-08T10:16:37.000000Z\"},\"old\":{\"confirm_code\":\"536964\",\"updated_at\":\"2025-12-08T10:13:18.000000Z\"}}', NULL, '2025-12-08 06:46:37', '2025-12-08 06:46:37'),
(592, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"290611\",\"updated_at\":\"2025-12-08T10:17:01.000000Z\"},\"old\":{\"confirm_code\":\"745135\",\"updated_at\":\"2025-12-08T10:16:37.000000Z\"}}', NULL, '2025-12-08 06:47:01', '2025-12-08 06:47:01'),
(593, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"269599\",\"updated_at\":\"2025-12-08T10:17:47.000000Z\"},\"old\":{\"confirm_code\":\"394702\",\"updated_at\":\"2025-12-07T09:29:38.000000Z\"}}', NULL, '2025-12-08 06:47:47', '2025-12-08 06:47:47'),
(594, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"114277\",\"updated_at\":\"2025-12-08T11:19:12.000000Z\"},\"old\":{\"confirm_code\":\"290611\",\"updated_at\":\"2025-12-08T10:17:01.000000Z\"}}', NULL, '2025-12-08 07:49:12', '2025-12-08 07:49:12'),
(595, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-08T11:19:53.000000Z\"},\"old\":{\"updated_at\":\"2025-12-08T11:19:12.000000Z\"}}', NULL, '2025-12-08 07:49:53', '2025-12-08 07:49:53'),
(596, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"131595\",\"updated_at\":\"2025-12-08T11:36:26.000000Z\"},\"old\":{\"confirm_code\":\"114277\",\"updated_at\":\"2025-12-08T11:19:53.000000Z\"}}', NULL, '2025-12-08 08:06:26', '2025-12-08 08:06:26'),
(597, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"754112\",\"updated_at\":\"2025-12-08T11:37:07.000000Z\"},\"old\":{\"confirm_code\":\"131595\",\"updated_at\":\"2025-12-08T11:36:26.000000Z\"}}', NULL, '2025-12-08 08:07:07', '2025-12-08 08:07:07'),
(598, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"386178\",\"updated_at\":\"2025-12-08T11:39:56.000000Z\"},\"old\":{\"confirm_code\":\"754112\",\"updated_at\":\"2025-12-08T11:37:07.000000Z\"}}', NULL, '2025-12-08 08:09:56', '2025-12-08 08:09:56'),
(599, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"719263\",\"updated_at\":\"2025-12-13T06:10:41.000000Z\"},\"old\":{\"confirm_code\":\"269599\",\"updated_at\":\"2025-12-08T10:17:47.000000Z\"}}', NULL, '2025-12-13 02:40:41', '2025-12-13 02:40:41'),
(600, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-13T06:10:59.000000Z\"},\"old\":{\"updated_at\":\"2025-12-13T06:10:41.000000Z\"}}', NULL, '2025-12-13 02:41:00', '2025-12-13 02:41:00'),
(601, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"899104\",\"updated_at\":\"2025-12-13T06:23:08.000000Z\"},\"old\":{\"confirm_code\":\"386178\",\"updated_at\":\"2025-12-08T11:39:56.000000Z\"}}', NULL, '2025-12-13 02:53:08', '2025-12-13 02:53:08'),
(602, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-13T06:23:37.000000Z\"},\"old\":{\"updated_at\":\"2025-12-13T06:23:08.000000Z\"}}', NULL, '2025-12-13 02:53:37', '2025-12-13 02:53:37'),
(603, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"442039\",\"updated_at\":\"2025-12-13T12:22:34.000000Z\"},\"old\":{\"confirm_code\":\"719263\",\"updated_at\":\"2025-12-13T06:10:59.000000Z\"}}', NULL, '2025-12-13 08:52:34', '2025-12-13 08:52:34'),
(604, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-13T12:22:41.000000Z\"},\"old\":{\"updated_at\":\"2025-12-13T12:22:34.000000Z\"}}', NULL, '2025-12-13 08:52:41', '2025-12-13 08:52:41'),
(605, 'User', 'user created', 'App\\Models\\User', 'created', 19, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u062d\\u0645\\u062f\",\"last_name\":\"\\u0627\\u0648\\u062a\\u0627\\u062f\\u06cc\",\"mobile\":\"09212388428\",\"confirm_code\":null,\"personal_id\":\"168143\",\"status\":\"0\",\"position_id\":8,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:38.000000Z\",\"updated_at\":\"2025-12-13T12:23:38.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:38', '2025-12-13 08:53:38'),
(606, 'User', 'user created', 'App\\Models\\User', 'created', 20, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0698\\u0627\\u0644\\u0647\",\"last_name\":\"\\u0634\\u0627\\u062f\\u0645\\u0627\\u0646\\u06cc\",\"mobile\":\"09123481675\",\"confirm_code\":null,\"personal_id\":\"451982\",\"status\":\"0\",\"position_id\":7,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:38.000000Z\",\"updated_at\":\"2025-12-13T12:23:38.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:38', '2025-12-13 08:53:38'),
(607, 'User', 'user created', 'App\\Models\\User', 'created', 21, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0644\\u0646\\u0627\\u0632 \",\"last_name\":\"\\u062d\\u0627\\u062a\\u0645\\u06cc\",\"mobile\":\"09122389505\",\"confirm_code\":null,\"personal_id\":\"867648\",\"status\":\"0\",\"position_id\":11,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:38.000000Z\",\"updated_at\":\"2025-12-13T12:23:38.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:38', '2025-12-13 08:53:38'),
(608, 'User', 'user created', 'App\\Models\\User', 'created', 22, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0644\\u06cc\\u0631\\u0636\\u0627 \",\"last_name\":\"\\u0645\\u06cc\\u0627\\u0646\\u062c\\u06cc\",\"mobile\":\"   09124494006\",\"confirm_code\":null,\"personal_id\":\"555619\",\"status\":\"0\",\"position_id\":12,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:39.000000Z\",\"updated_at\":\"2025-12-13T12:23:39.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:39', '2025-12-13 08:53:39'),
(609, 'User', 'user created', 'App\\Models\\User', 'created', 23, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0631\\u06cc\\u0628\\u0627\",\"last_name\":\"\\u0627\\u062d\\u0645\\u062f\\u06cc\\u0627\\u0646\",\"mobile\":\"   09122339375\",\"confirm_code\":null,\"personal_id\":\"504785\",\"status\":\"0\",\"position_id\":73,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:39.000000Z\",\"updated_at\":\"2025-12-13T12:23:39.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:39', '2025-12-13 08:53:39'),
(610, 'User', 'user created', 'App\\Models\\User', 'created', 24, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0647\\u0646\\u0627\\u0632\",\"last_name\":\"\\u0622\\u0632\\u0627\\u062f\",\"mobile\":\"   09121577616\",\"confirm_code\":null,\"personal_id\":\"244219\",\"status\":\"0\",\"position_id\":13,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:39.000000Z\",\"updated_at\":\"2025-12-13T12:23:39.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:39', '2025-12-13 08:53:39'),
(611, 'User', 'user created', 'App\\Models\\User', 'created', 25, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0634\\u0642\\u0627\\u06cc\\u0642\",\"last_name\":\"\\u0644\\u0637\\u0641\\u06cc\",\"mobile\":\"09306104151\",\"confirm_code\":null,\"personal_id\":\"365882\",\"status\":\"0\",\"position_id\":14,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:39.000000Z\",\"updated_at\":\"2025-12-13T12:23:39.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:39', '2025-12-13 08:53:39'),
(612, 'User', 'user created', 'App\\Models\\User', 'created', 26, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0627\\u0626\\u0632\\u0647\",\"last_name\":\"\\u0627\\u0628\\u0631\\u0627\\u0647\\u06cc\\u0645\",\"mobile\":\"09365305239\",\"confirm_code\":null,\"personal_id\":\"600888\",\"status\":\"0\",\"position_id\":15,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:39.000000Z\",\"updated_at\":\"2025-12-13T12:23:39.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:39', '2025-12-13 08:53:39'),
(613, 'User', 'user created', 'App\\Models\\User', 'created', 27, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0646\\u0648\\u0634\\u0647\",\"last_name\":\"\\u0644\\u0637\\u0641\\u06cc \\u0645\\u0642\\u062f\\u0633\",\"mobile\":\"09122757745\",\"confirm_code\":null,\"personal_id\":\"673298\",\"status\":\"0\",\"position_id\":16,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:40.000000Z\",\"updated_at\":\"2025-12-13T12:23:40.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:40', '2025-12-13 08:53:40'),
(614, 'User', 'user created', 'App\\Models\\User', 'created', 28, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u062d\\u0627\\u0645\\u062f\",\"last_name\":\"\\u0633\\u0639\\u06cc\\u062f\\u06cc \\u0646\\u0698\\u0627\\u062f\",\"mobile\":\"09100977983\",\"confirm_code\":null,\"personal_id\":\"822378\",\"status\":\"0\",\"position_id\":17,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:40.000000Z\",\"updated_at\":\"2025-12-13T12:23:40.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:40', '2025-12-13 08:53:40'),
(615, 'User', 'user created', 'App\\Models\\User', 'created', 29, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u067e\\u0631\\u06cc\\u0633\\u0627\",\"last_name\":\"\\u0645\\u0642\\u06cc\\u0645\\u06cc\",\"mobile\":\"09127109919\",\"confirm_code\":null,\"personal_id\":\"838144\",\"status\":\"0\",\"position_id\":18,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:40.000000Z\",\"updated_at\":\"2025-12-13T12:23:40.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:40', '2025-12-13 08:53:40'),
(616, 'User', 'user created', 'App\\Models\\User', 'created', 30, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u0633\\u062a\\u0631\\u0646 \",\"last_name\":\"\\u0639\\u0644\\u06cc\\u0627\\u0646\",\"mobile\":\"09127950388\",\"confirm_code\":null,\"personal_id\":\"782402\",\"status\":\"0\",\"position_id\":19,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:40.000000Z\",\"updated_at\":\"2025-12-13T12:23:40.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:40', '2025-12-13 08:53:40'),
(617, 'User', 'user created', 'App\\Models\\User', 'created', 31, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u062a\\u0627\\u0631\\u0647 \",\"last_name\":\"\\u062c\\u0645\\u0627\\u0631\\u0627\\u0646\\u06cc\",\"mobile\":\"09125445091\",\"confirm_code\":null,\"personal_id\":\"533724\",\"status\":\"0\",\"position_id\":20,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:40.000000Z\",\"updated_at\":\"2025-12-13T12:23:40.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:40', '2025-12-13 08:53:40'),
(618, 'User', 'user created', 'App\\Models\\User', 'created', 32, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u063a\\u0632\\u0644 \",\"last_name\":\"\\u0628\\u0647\\u0631\\u0627\\u0645\\u06cc\",\"mobile\":\"09910733037\",\"confirm_code\":null,\"personal_id\":\"386436\",\"status\":\"0\",\"position_id\":21,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:41.000000Z\",\"updated_at\":\"2025-12-13T12:23:41.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:41', '2025-12-13 08:53:41'),
(619, 'User', 'user created', 'App\\Models\\User', 'created', 33, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0622\\u06cc\\u062f\\u06cc\\u0646 \",\"last_name\":\"\\u0628\\u0627\\u0648\\u0631 \",\"mobile\":\"09125264200\",\"confirm_code\":null,\"personal_id\":\"220241\",\"status\":\"0\",\"position_id\":22,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:41.000000Z\",\"updated_at\":\"2025-12-13T12:23:41.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:41', '2025-12-13 08:53:41'),
(620, 'User', 'user created', 'App\\Models\\User', 'created', 34, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0647\\u062f\\u06cc \",\"last_name\":\"\\u0634\\u06a9\\u0631\\u06cc \\u0632\\u0627\\u062f\\u0647\",\"mobile\":\"09125802352\",\"confirm_code\":null,\"personal_id\":\"666834\",\"status\":\"0\",\"position_id\":19,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:41.000000Z\",\"updated_at\":\"2025-12-13T12:23:41.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:41', '2025-12-13 08:53:41'),
(621, 'User', 'user created', 'App\\Models\\User', 'created', 35, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0632\\u0647\\u0631\\u0627 \",\"last_name\":\"\\u0639\\u0631\\u0628 \\u0632\\u0627\\u062f\\u0647\",\"mobile\":\"09337185299\",\"confirm_code\":null,\"personal_id\":\"431797\",\"status\":\"0\",\"position_id\":24,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:41.000000Z\",\"updated_at\":\"2025-12-13T12:23:41.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:41', '2025-12-13 08:53:41'),
(622, 'User', 'user created', 'App\\Models\\User', 'created', 36, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0647\\u0631\\u0646\\u0627\\u0632 \",\"last_name\":\"\\u062a\\u06cc\\u0645\\u0648\\u0631\\u06cc\",\"mobile\":\"09129533509\",\"confirm_code\":null,\"personal_id\":\"265945\",\"status\":\"0\",\"position_id\":25,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:41.000000Z\",\"updated_at\":\"2025-12-13T12:23:41.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:41', '2025-12-13 08:53:41'),
(623, 'User', 'user created', 'App\\Models\\User', 'created', 37, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u062a\\u0627\\u0631\\u0647 \",\"last_name\":\"\\u0628\\u0647\\u0644\\u0648\\u0644\\u06cc\",\"mobile\":\"9351703171\",\"confirm_code\":null,\"personal_id\":\"214482\",\"status\":\"0\",\"position_id\":26,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:42.000000Z\",\"updated_at\":\"2025-12-13T12:23:42.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:42', '2025-12-13 08:53:42'),
(624, 'User', 'user created', 'App\\Models\\User', 'created', 38, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u062d\\u06cc\\u0627\",\"last_name\":\"\\u0645\\u0648\\u06af\\u0648\\u0626\\u06cc \",\"mobile\":\"9381450291\",\"confirm_code\":null,\"personal_id\":\"298910\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:42.000000Z\",\"updated_at\":\"2025-12-13T12:23:42.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:42', '2025-12-13 08:53:42'),
(625, 'User', 'user created', 'App\\Models\\User', 'created', 39, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0634\\u06cc\\u0645\\u0627\",\"last_name\":\"\\u0631\\u06a9\\u0627\\u0628\\u062f\\u0627\\u0631\",\"mobile\":\"09128317953\",\"confirm_code\":null,\"personal_id\":\"443715\",\"status\":\"0\",\"position_id\":9,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:42.000000Z\",\"updated_at\":\"2025-12-13T12:23:42.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:42', '2025-12-13 08:53:42'),
(626, 'User', 'user created', 'App\\Models\\User', 'created', 40, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u062f\\u0627\\u0648\\u062f\",\"last_name\":\"\\u06cc\\u0648\\u0633\\u0641\\u06cc\",\"mobile\":\"09123263072\",\"confirm_code\":null,\"personal_id\":\"784551\",\"status\":\"0\",\"position_id\":28,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:42.000000Z\",\"updated_at\":\"2025-12-13T12:23:42.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:42', '2025-12-13 08:53:42'),
(627, 'User', 'user created', 'App\\Models\\User', 'created', 41, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u06cc\\u0646\\u0648\",\"last_name\":\"\\u062a\\u0634\\u06a9\\u0631\\u06cc\",\"mobile\":\"09031026307\",\"confirm_code\":null,\"personal_id\":\"985224\",\"status\":\"0\",\"position_id\":29,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:42.000000Z\",\"updated_at\":\"2025-12-13T12:23:42.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:42', '2025-12-13 08:53:42'),
(628, 'User', 'user created', 'App\\Models\\User', 'created', 42, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u062d\\u0628\\u06cc\\u0628\\u0647\",\"last_name\":\"\\u0645\\u062c\\u06cc\\u062f\\u06cc\",\"mobile\":\"09195061070\",\"confirm_code\":null,\"personal_id\":\"655978\",\"status\":\"0\",\"position_id\":30,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:43.000000Z\",\"updated_at\":\"2025-12-13T12:23:43.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:43', '2025-12-13 08:53:43'),
(629, 'User', 'user created', 'App\\Models\\User', 'created', 43, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u0633\\u062a\\u0631\\u0646\",\"last_name\":\"\\u0641\\u0627\\u0631\\u0633\\u06cc\",\"mobile\":\"09128367261\",\"confirm_code\":null,\"personal_id\":\"557636\",\"status\":\"0\",\"position_id\":31,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:43.000000Z\",\"updated_at\":\"2025-12-13T12:23:43.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:43', '2025-12-13 08:53:43'),
(630, 'User', 'user created', 'App\\Models\\User', 'created', 44, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u06cc\\u062f \\u0645\\u0631\\u062a\\u0636\\u06cc\",\"last_name\":\"\\u0637\\u0627\\u0644\\u0628 \\u067e\\u0648\\u0631 \\u0627\\u0645\\u06cc\\u0631\\u06cc\",\"mobile\":\"09126542889\",\"confirm_code\":null,\"personal_id\":\"663407\",\"status\":\"0\",\"position_id\":32,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:43.000000Z\",\"updated_at\":\"2025-12-13T12:23:43.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:43', '2025-12-13 08:53:43'),
(631, 'User', 'user created', 'App\\Models\\User', 'created', 45, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0631\\u0636\\u0627\",\"last_name\":\"\\u0627\\u0641\\u0631\\u0627\\u0632\\u06cc \\u06a9\\u0644\\u0648\\u06cc\\u0631\",\"mobile\":\"09378509036\",\"confirm_code\":null,\"personal_id\":\"838092\",\"status\":\"0\",\"position_id\":33,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:43.000000Z\",\"updated_at\":\"2025-12-13T12:23:43.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:43', '2025-12-13 08:53:43'),
(632, 'User', 'user created', 'App\\Models\\User', 'created', 46, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u0627\\u0631\\u0627\",\"last_name\":\"\\u0645\\u06cc\\u0631\\u062c\\u0639\\u0641\\u0631\\u06cc\",\"mobile\":\"09130331896\",\"confirm_code\":null,\"personal_id\":\"625095\",\"status\":\"0\",\"position_id\":33,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:43.000000Z\",\"updated_at\":\"2025-12-13T12:23:43.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:43', '2025-12-13 08:53:43'),
(633, 'User', 'user created', 'App\\Models\\User', 'created', 47, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u0633\\u062a\\u0631\\u0646\",\"last_name\":\"\\u0645\\u062d\\u0628\\u06cc\",\"mobile\":\"09226198846\",\"confirm_code\":null,\"personal_id\":\"263740\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:43.000000Z\",\"updated_at\":\"2025-12-13T12:23:43.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:43', '2025-12-13 08:53:43'),
(634, 'User', 'user created', 'App\\Models\\User', 'created', 48, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0644\\u06cc\\u06a9\\u0627\",\"last_name\":\"\\u0641\\u06cc\\u0644\\u0645\",\"mobile\":\"09198713718\",\"confirm_code\":null,\"personal_id\":\"265538\",\"status\":\"0\",\"position_id\":37,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:44.000000Z\",\"updated_at\":\"2025-12-13T12:23:44.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:44', '2025-12-13 08:53:44'),
(635, 'User', 'user created', 'App\\Models\\User', 'created', 49, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0631\\u062c\\u0627\\u0646\",\"last_name\":\"\\u062b\\u0642\\u0641\\u06cc\",\"mobile\":\"09104596634\",\"confirm_code\":null,\"personal_id\":\"577670\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:44.000000Z\",\"updated_at\":\"2025-12-13T12:23:44.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:44', '2025-12-13 08:53:44'),
(636, 'User', 'user created', 'App\\Models\\User', 'created', 50, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0631\\u06cc\\u0645 \",\"last_name\":\"\\u067e\\u0648\\u0631 \\u0635\\u062f\\u0631\\u06cc\",\"mobile\":\"09194989023\",\"confirm_code\":null,\"personal_id\":\"164127\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:44.000000Z\",\"updated_at\":\"2025-12-13T12:23:44.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:44', '2025-12-13 08:53:44'),
(637, 'User', 'user created', 'App\\Models\\User', 'created', 51, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0634\\u06cc\\u0631\\u06cc\\u0646 \",\"last_name\":\"\\u0639\\u0644\\u06cc\\u0627\\u06cc\\u06cc\",\"mobile\":\"09195077794\",\"confirm_code\":null,\"personal_id\":\"415641\",\"status\":\"0\",\"position_id\":38,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:44.000000Z\",\"updated_at\":\"2025-12-13T12:23:44.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:44', '2025-12-13 08:53:44'),
(638, 'User', 'user created', 'App\\Models\\User', 'created', 52, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u063a\\u0632\\u0627\\u0644\\u0647\",\"last_name\":\"\\u062f\\u0627\\u0646\\u0634\\u06cc\\u0627\\u0646\",\"mobile\":\"09026677345\",\"confirm_code\":null,\"personal_id\":\"666029\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:44.000000Z\",\"updated_at\":\"2025-12-13T12:23:44.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:44', '2025-12-13 08:53:44'),
(639, 'User', 'user created', 'App\\Models\\User', 'created', 53, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0631\\u0648\\u0645\\u06cc\\u0646\\u0627 \",\"last_name\":\"\\u0646\\u0635\\u06cc\\u0631\\u067e\\u0648\\u0631\",\"mobile\":\"09100137779\",\"confirm_code\":null,\"personal_id\":\"149356\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:45.000000Z\",\"updated_at\":\"2025-12-13T12:23:45.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:45', '2025-12-13 08:53:45'),
(640, 'User', 'user created', 'App\\Models\\User', 'created', 54, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0631\\u0648\\u06cc\\u0627\",\"last_name\":\"\\u0639\\u0644\\u0627\\u06cc\\u06cc\\u0627\\u0646\",\"mobile\":\"09192070992\",\"confirm_code\":null,\"personal_id\":\"200677\",\"status\":\"0\",\"position_id\":9,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:45.000000Z\",\"updated_at\":\"2025-12-13T12:23:45.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:45', '2025-12-13 08:53:45'),
(641, 'User', 'user created', 'App\\Models\\User', 'created', 55, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u062d\\u0645\\u062f\\u0639\\u0644\\u06cc\",\"last_name\":\"\\u0646\\u0627\\u0635\\u062d\\u06cc\",\"mobile\":\"09022070087\",\"confirm_code\":null,\"personal_id\":\"521425\",\"status\":\"0\",\"position_id\":40,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:45.000000Z\",\"updated_at\":\"2025-12-13T12:23:45.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:45', '2025-12-13 08:53:45'),
(642, 'User', 'user created', 'App\\Models\\User', 'created', 56, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0627\\u0637\\u0641\\u0647\",\"last_name\":\"\\u0635\\u0627\\u0628\\u0631\\u06cc \\u0628\\u06cc\\u0631\\u0648\\u0646\",\"mobile\":\"09026085958\",\"confirm_code\":null,\"personal_id\":\"310926\",\"status\":\"0\",\"position_id\":33,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:45.000000Z\",\"updated_at\":\"2025-12-13T12:23:45.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:45', '2025-12-13 08:53:45'),
(643, 'User', 'user created', 'App\\Models\\User', 'created', 57, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u00a0\\u0639\\u0644\\u06cc\\u00a0\",\"last_name\":\"\\u0627\\u062d\\u0633\\u0627\\u0646\\u06cc\\u00a0\\u06a9\\u0644\\u062c\\u0647\\u00a0\",\"mobile\":\"09126301788\",\"confirm_code\":null,\"personal_id\":\"929820\",\"status\":\"0\",\"position_id\":31,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:45.000000Z\",\"updated_at\":\"2025-12-13T12:23:45.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:45', '2025-12-13 08:53:45'),
(644, 'User', 'user created', 'App\\Models\\User', 'created', 58, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0644\\u06cc\",\"last_name\":\"\\u0646\\u0627\\u062f\\u0631\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"mobile\":\"\\u06f0\\u06f9\\u06f1\\u06f2\\u06f3\\u06f5\\u06f4\\u06f6\\u06f5\\u06f2\\u06f7\",\"confirm_code\":null,\"personal_id\":\"568711\",\"status\":\"0\",\"position_id\":42,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:46.000000Z\",\"updated_at\":\"2025-12-13T12:23:46.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:46', '2025-12-13 08:53:46'),
(645, 'User', 'user created', 'App\\Models\\User', 'created', 59, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0622\\u0631\\u0645\\u064a\\u0646\",\"last_name\":\"\\u0632\\u0646\\u062f\\u064a\",\"mobile\":\"09383437955\",\"confirm_code\":null,\"personal_id\":\"351249\",\"status\":\"0\",\"position_id\":32,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:46.000000Z\",\"updated_at\":\"2025-12-13T12:23:46.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:46', '2025-12-13 08:53:46');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(646, 'User', 'user created', 'App\\Models\\User', 'created', 60, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0637\\u064a\\u0647\",\"last_name\":\"\\u0641\\u062a\\u062d \\u0627\\u0644\\u0644\\u0647\\u064a\",\"mobile\":\"09019093803\",\"confirm_code\":null,\"personal_id\":\"999551\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:46.000000Z\",\"updated_at\":\"2025-12-13T12:23:46.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:46', '2025-12-13 08:53:46'),
(647, 'User', 'user created', 'App\\Models\\User', 'created', 61, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u0627\\u0635\\u0631\",\"last_name\":\"\\u0631\\u06cc\\u0627\\u0636\\u06cc\",\"mobile\":\"09142350135\",\"confirm_code\":null,\"personal_id\":\"720332\",\"status\":\"0\",\"position_id\":74,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:46.000000Z\",\"updated_at\":\"2025-12-13T12:23:46.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:46', '2025-12-13 08:53:46'),
(648, 'User', 'user created', 'App\\Models\\User', 'created', 62, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u06cc\\u0646\\u0627 \",\"last_name\":\"\\u062f\\u0645\\u06cc\\u0631\\u0686\\u06cc\",\"mobile\":\"09369730534\",\"confirm_code\":null,\"personal_id\":\"253647\",\"status\":\"0\",\"position_id\":43,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:46.000000Z\",\"updated_at\":\"2025-12-13T12:23:46.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:46', '2025-12-13 08:53:46'),
(649, 'User', 'user created', 'App\\Models\\User', 'created', 63, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0634\\u06a9\\u0648\\u0647 \",\"last_name\":\"\\u0644\\u0637\\u0641\\u06cc\",\"mobile\":\"09124598854\",\"confirm_code\":null,\"personal_id\":\"470255\",\"status\":\"0\",\"position_id\":44,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:47.000000Z\",\"updated_at\":\"2025-12-13T12:23:47.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:47', '2025-12-13 08:53:47'),
(650, 'User', 'user created', 'App\\Models\\User', 'created', 64, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u067e\\u0631\\u06cc\\u0633\\u0627\",\"last_name\":\"\\u0627\\u0633\\u0645\\u0627\\u0639\\u06cc\\u0644\\u06cc\",\"mobile\":\"09358843474\",\"confirm_code\":null,\"personal_id\":\"745758\",\"status\":\"0\",\"position_id\":75,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:47.000000Z\",\"updated_at\":\"2025-12-13T12:23:47.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:47', '2025-12-13 08:53:47'),
(651, 'User', 'user created', 'App\\Models\\User', 'created', 65, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0635\\u0627\\u0628\\u0631\",\"last_name\":\"\\u0645\\u0648\\u0633\\u0648\\u06cc\",\"mobile\":\"9127803603\",\"confirm_code\":null,\"personal_id\":\"187851\",\"status\":\"0\",\"position_id\":76,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:47.000000Z\",\"updated_at\":\"2025-12-13T12:23:47.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:47', '2025-12-13 08:53:47'),
(652, 'User', 'user created', 'App\\Models\\User', 'created', 66, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u063a\\u0632\\u0627\\u0644\\u0647\",\"last_name\":\"\\u06a9\\u06cc\\u0627\\u0646\\u0632\\u0627\\u062f\",\"mobile\":\"09125543849\",\"confirm_code\":null,\"personal_id\":\"363611\",\"status\":\"0\",\"position_id\":77,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:47.000000Z\",\"updated_at\":\"2025-12-13T12:23:47.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:47', '2025-12-13 08:53:47'),
(653, 'User', 'user created', 'App\\Models\\User', 'created', 67, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0637\\u06cc\\u0647\",\"last_name\":\"\\u0627\\u0645\\u0627\\u0646\\u06cc\",\"mobile\":\"09124079185\",\"confirm_code\":null,\"personal_id\":\"572695\",\"status\":\"0\",\"position_id\":45,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:47.000000Z\",\"updated_at\":\"2025-12-13T12:23:47.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:47', '2025-12-13 08:53:47'),
(654, 'User', 'user created', 'App\\Models\\User', 'created', 68, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u063a\\u0632\\u0627\\u0644\",\"last_name\":\"\\u0639\\u0644\\u06cc\\u0627\\u0646\\u0633\\u0628\",\"mobile\":\"09122116318\",\"confirm_code\":null,\"personal_id\":\"910187\",\"status\":\"0\",\"position_id\":46,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:48.000000Z\",\"updated_at\":\"2025-12-13T12:23:48.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:48', '2025-12-13 08:53:48'),
(655, 'User', 'user created', 'App\\Models\\User', 'created', 69, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0635\\u063a\\u0631\",\"last_name\":\"\\u0627\\u0645\\u06cc\\u0631\\u06cc\",\"mobile\":\"09113240344\",\"confirm_code\":null,\"personal_id\":\"219238\",\"status\":\"0\",\"position_id\":47,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:48.000000Z\",\"updated_at\":\"2025-12-13T12:23:48.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:48', '2025-12-13 08:53:48'),
(656, 'User', 'user created', 'App\\Models\\User', 'created', 70, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0634\\u0639\\u06cc\\u0628\",\"last_name\":\"\\u0627\\u0645\\u06cc\\u0631\\u06cc\",\"mobile\":\"09124725394\",\"confirm_code\":null,\"personal_id\":\"156158\",\"status\":\"0\",\"position_id\":48,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:48.000000Z\",\"updated_at\":\"2025-12-13T12:23:48.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:48', '2025-12-13 08:53:48'),
(657, 'User', 'user created', 'App\\Models\\User', 'created', 71, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0627\\u0626\\u0632\\u0647\",\"last_name\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"mobile\":\"09123498404\",\"confirm_code\":null,\"personal_id\":\"581169\",\"status\":\"0\",\"position_id\":48,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:48.000000Z\",\"updated_at\":\"2025-12-13T12:23:48.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:48', '2025-12-13 08:53:48'),
(658, 'User', 'user created', 'App\\Models\\User', 'created', 72, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0627\\u0637\\u0641\\u0647\",\"last_name\":\"\\u0628\\u0648\\u0634\\u0627\\u062f\\u06cc\",\"mobile\":\"09121234789\",\"confirm_code\":null,\"personal_id\":\"876988\",\"status\":\"0\",\"position_id\":48,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:48.000000Z\",\"updated_at\":\"2025-12-13T12:23:48.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:48', '2025-12-13 08:53:48'),
(659, 'User', 'user created', 'App\\Models\\User', 'created', 73, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u067e\\u0631\\u06cc\\u0633\\u0627\",\"last_name\":\"\\u0646\\u0639\\u0645\\u062a\\u06cc\",\"mobile\":\"09123966037\",\"confirm_code\":null,\"personal_id\":\"777020\",\"status\":\"0\",\"position_id\":48,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:49.000000Z\",\"updated_at\":\"2025-12-13T12:23:49.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:49', '2025-12-13 08:53:49'),
(660, 'User', 'user created', 'App\\Models\\User', 'created', 74, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u0627\\u0631\\u0627\",\"last_name\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"mobile\":\"09109238930\",\"confirm_code\":null,\"personal_id\":\"994917\",\"status\":\"0\",\"position_id\":49,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:49.000000Z\",\"updated_at\":\"2025-12-13T12:23:49.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:49', '2025-12-13 08:53:49'),
(661, 'User', 'user created', 'App\\Models\\User', 'created', 75, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u062d\\u0645\\u062f \\u0639\\u0644\\u06cc\",\"last_name\":\"\\u0631\\u0633\\u062a\\u0645\\u06cc\\u0627\\u0646\",\"mobile\":\"09124319046\",\"confirm_code\":null,\"personal_id\":\"310230\",\"status\":\"0\",\"position_id\":50,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:49.000000Z\",\"updated_at\":\"2025-12-13T12:23:49.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:49', '2025-12-13 08:53:49'),
(662, 'User', 'user created', 'App\\Models\\User', 'created', 76, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0627\\u0637\\u0645\\u0647\",\"last_name\":\"\\u0639\\u0628\\u062f\\u06cc\",\"mobile\":\"09129563202\",\"confirm_code\":null,\"personal_id\":\"614952\",\"status\":\"0\",\"position_id\":51,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:49.000000Z\",\"updated_at\":\"2025-12-13T12:23:49.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:49', '2025-12-13 08:53:49'),
(663, 'User', 'user created', 'App\\Models\\User', 'created', 77, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u067e\\u0648\\u06cc\\u0627\",\"last_name\":\"\\u0645\\u0648\\u0644\\u0648\\u06cc\",\"mobile\":\"09101234789\",\"confirm_code\":null,\"personal_id\":\"299413\",\"status\":\"0\",\"position_id\":52,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:49.000000Z\",\"updated_at\":\"2025-12-13T12:23:49.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:49', '2025-12-13 08:53:49'),
(664, 'User', 'user created', 'App\\Models\\User', 'created', 78, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0641\\u0634\\u06cc\\u0646\",\"last_name\":\"\\u062f\\u0631\\u062e\\u0634\\u0627\\u0646\",\"mobile\":\"09121978723\",\"confirm_code\":null,\"personal_id\":\"722679\",\"status\":\"0\",\"position_id\":53,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:50.000000Z\",\"updated_at\":\"2025-12-13T12:23:50.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:50', '2025-12-13 08:53:50'),
(665, 'User', 'user created', 'App\\Models\\User', 'created', 79, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0646\\u0635\\u0648\\u0631\\u0647\",\"last_name\":\"\\u067e\\u06cc\\u0631\\u06af\\u0632\\u06cc\",\"mobile\":\"09376731869\",\"confirm_code\":null,\"personal_id\":\"160585\",\"status\":\"0\",\"position_id\":54,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:50.000000Z\",\"updated_at\":\"2025-12-13T12:23:50.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:50', '2025-12-13 08:53:50'),
(666, 'User', 'user created', 'App\\Models\\User', 'created', 80, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0633\\u0639\\u0648\\u062f\",\"last_name\":\"\\u0648\\u062d\\u06cc\\u062f\\u0646\\u06cc\\u0627\",\"mobile\":\"09128477748\",\"confirm_code\":null,\"personal_id\":\"174315\",\"status\":\"0\",\"position_id\":55,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:50.000000Z\",\"updated_at\":\"2025-12-13T12:23:50.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:50', '2025-12-13 08:53:50'),
(667, 'User', 'user created', 'App\\Models\\User', 'created', 81, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u06a9\\u0698\\u0627\\u0644\",\"last_name\":\"\\u0647\\u0646\\u0631\\u067e\\u0631\\u0648\\u0631\",\"mobile\":\"09193118113\",\"confirm_code\":null,\"personal_id\":\"142277\",\"status\":\"0\",\"position_id\":56,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:50.000000Z\",\"updated_at\":\"2025-12-13T12:23:50.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:50', '2025-12-13 08:53:50'),
(668, 'User', 'user created', 'App\\Models\\User', 'created', 82, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0627\\u0637\\u0645\\u0647\",\"last_name\":\"\\u0622\\u0642\\u0627\\u062c\\u0627\\u0646\\u06cc\",\"mobile\":\"09121889893\",\"confirm_code\":null,\"personal_id\":\"595811\",\"status\":\"0\",\"position_id\":57,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:50.000000Z\",\"updated_at\":\"2025-12-13T12:23:50.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:50', '2025-12-13 08:53:50'),
(669, 'User', 'user created', 'App\\Models\\User', 'created', 83, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0631\\u0641\\u0627\\u0646\",\"last_name\":\"\\u0634\\u0627\\u06a9\\u0631\\u06cc\\u0646\",\"mobile\":\"09122593886\",\"confirm_code\":null,\"personal_id\":\"652084\",\"status\":\"0\",\"position_id\":58,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:51.000000Z\",\"updated_at\":\"2025-12-13T12:23:51.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:51', '2025-12-13 08:53:51'),
(670, 'User', 'user created', 'App\\Models\\User', 'created', 84, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0631\\u062d\\u0645\\u0627\\u0646\",\"last_name\":\"\\u0646\\u0648\\u0630\\u0631\\u06cc\",\"mobile\":\"09376369964\",\"confirm_code\":null,\"personal_id\":\"403677\",\"status\":\"0\",\"position_id\":59,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:51.000000Z\",\"updated_at\":\"2025-12-13T12:23:51.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:51', '2025-12-13 08:53:51'),
(671, 'User', 'user created', 'App\\Models\\User', 'created', 85, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u062d\\u0645\\u06cc\\u062f\",\"last_name\":\"\\u0632\\u0646\\u062f\\u06cc\",\"mobile\":\"09125096135\",\"confirm_code\":null,\"personal_id\":\"194895\",\"status\":\"0\",\"position_id\":60,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:51.000000Z\",\"updated_at\":\"2025-12-13T12:23:51.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:51', '2025-12-13 08:53:51'),
(672, 'User', 'user created', 'App\\Models\\User', 'created', 86, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0646\\u0635\\u0648\\u0631\",\"last_name\":\"\\u0633\\u062a\\u0627\\u0631\\u06cc\",\"mobile\":\"09359786747\",\"confirm_code\":null,\"personal_id\":\"702024\",\"status\":\"0\",\"position_id\":61,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:51.000000Z\",\"updated_at\":\"2025-12-13T12:23:51.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:51', '2025-12-13 08:53:51'),
(673, 'User', 'user created', 'App\\Models\\User', 'created', 87, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0645\\u06cc\\u062f\",\"last_name\":\"\\u0645\\u0648\\u062d\\u062f \\u0646\\u0698\\u0627\\u062f\",\"mobile\":\"09128078195\",\"confirm_code\":null,\"personal_id\":\"166634\",\"status\":\"0\",\"position_id\":62,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:51.000000Z\",\"updated_at\":\"2025-12-13T12:23:51.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:51', '2025-12-13 08:53:51'),
(674, 'User', 'user created', 'App\\Models\\User', 'created', 88, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u0631\\u06af\\u0633\",\"last_name\":\"\\u0646\\u0635\\u0631\\u06cc\",\"mobile\":\"09214598009\",\"confirm_code\":null,\"personal_id\":\"366583\",\"status\":\"0\",\"position_id\":63,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:52.000000Z\",\"updated_at\":\"2025-12-13T12:23:52.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:52', '2025-12-13 08:53:52'),
(675, 'User', 'user created', 'App\\Models\\User', 'created', 89, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0648\\u0627\\u062f\",\"last_name\":\"\\u0639\\u0633\\u062c\\u062f\\u06cc\",\"mobile\":\"09354769402\",\"confirm_code\":null,\"personal_id\":\"884142\",\"status\":\"0\",\"position_id\":64,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:52.000000Z\",\"updated_at\":\"2025-12-13T12:23:52.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:52', '2025-12-13 08:53:52'),
(676, 'User', 'user created', 'App\\Models\\User', 'created', 90, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0645\\u06cc\\u062f\",\"last_name\":\"\\u062c\\u0627\\u0631\\u0648\\u062f\\u06cc\",\"mobile\":\"09121180732\",\"confirm_code\":null,\"personal_id\":\"654888\",\"status\":\"0\",\"position_id\":65,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:52.000000Z\",\"updated_at\":\"2025-12-13T12:23:52.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:52', '2025-12-13 08:53:52'),
(677, 'User', 'user created', 'App\\Models\\User', 'created', 91, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u062d\\u0633\\u0627\\u0646\",\"last_name\":\"\\u062d\\u0627\\u0645\\u06cc\",\"mobile\":\"9128198470\",\"confirm_code\":null,\"personal_id\":\"694694\",\"status\":\"0\",\"position_id\":66,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:52.000000Z\",\"updated_at\":\"2025-12-13T12:23:52.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:52', '2025-12-13 08:53:52'),
(678, 'User', 'user created', 'App\\Models\\User', 'created', 92, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u0645\\u0627\\u0646\\u0647\",\"last_name\":\"\\u0633\\u062f\\u0647 \\u0632\\u0627\\u062f\\u0647\",\"mobile\":\"09120656367\",\"confirm_code\":null,\"personal_id\":\"510311\",\"status\":\"0\",\"position_id\":67,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:52.000000Z\",\"updated_at\":\"2025-12-13T12:23:52.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:52', '2025-12-13 08:53:52'),
(679, 'User', 'user created', 'App\\Models\\User', 'created', 93, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u06cc\\u0644\\u0648\\u0641\\u0631\",\"last_name\":\"\\u0641\\u062a\\u0627\\u062d\\u06cc\",\"mobile\":\"09120466122\",\"confirm_code\":null,\"personal_id\":\"917289\",\"status\":\"0\",\"position_id\":68,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:53.000000Z\",\"updated_at\":\"2025-12-13T12:23:53.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:53', '2025-12-13 08:53:53'),
(680, 'User', 'user created', 'App\\Models\\User', 'created', 94, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0648\\u0631\\u0627\\u0646\\u0648\\u0633 \",\"last_name\":\"\\u0627\\u0645\\u06cc\\u0646\",\"mobile\":\"09387295848\",\"confirm_code\":null,\"personal_id\":\"699627\",\"status\":\"0\",\"position_id\":69,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:53.000000Z\",\"updated_at\":\"2025-12-13T12:23:53.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:53', '2025-12-13 08:53:53'),
(681, 'User', 'user created', 'App\\Models\\User', 'created', 95, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0628\\u0647\\u0646\\u0627\\u0645\",\"last_name\":\"\\u062d\\u06cc\\u062f\\u0631\\u06cc\",\"mobile\":\"09038460627\",\"confirm_code\":null,\"personal_id\":\"823796\",\"status\":\"0\",\"position_id\":70,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:53.000000Z\",\"updated_at\":\"2025-12-13T12:23:53.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:53', '2025-12-13 08:53:53'),
(682, 'User', 'user created', 'App\\Models\\User', 'created', 96, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u06cc\\u0646\\u0627 \",\"last_name\":\"\\u0646\\u0639\\u0645\\u062a\\u06cc\",\"mobile\":\"09127095406\",\"confirm_code\":null,\"personal_id\":\"372082\",\"status\":\"0\",\"position_id\":71,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:53.000000Z\",\"updated_at\":\"2025-12-13T12:23:53.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:53', '2025-12-13 08:53:53'),
(683, 'User', 'user created', 'App\\Models\\User', 'created', 97, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u062d\\u0631\",\"last_name\":\"\\u0645\\u06a9\\u06cc\",\"mobile\":\"09124223242\",\"confirm_code\":null,\"personal_id\":\"730914\",\"status\":\"0\",\"position_id\":72,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-13T12:23:53.000000Z\",\"updated_at\":\"2025-12-13T12:23:53.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-13 08:53:53', '2025-12-13 08:53:53'),
(684, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"460712\",\"updated_at\":\"2025-12-13T12:49:43.000000Z\"},\"old\":{\"confirm_code\":\"899104\",\"updated_at\":\"2025-12-13T06:23:37.000000Z\"}}', NULL, '2025-12-13 09:19:43', '2025-12-13 09:19:43'),
(685, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-13T12:50:05.000000Z\"},\"old\":{\"updated_at\":\"2025-12-13T12:49:43.000000Z\"}}', NULL, '2025-12-13 09:20:05', '2025-12-13 09:20:05'),
(686, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-13T12:51:48.000000Z\"},\"old\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-11-29T10:30:42.000000Z\"}}', NULL, '2025-12-13 09:21:48', '2025-12-13 09:21:48'),
(687, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-12-13T12:51:49.000000Z\"},\"old\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-13T12:51:48.000000Z\"}}', NULL, '2025-12-13 09:21:49', '2025-12-13 09:21:49'),
(688, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 4, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-13T12:52:19.000000Z\"},\"old\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-10-19T07:49:17.000000Z\"}}', NULL, '2025-12-13 09:22:19', '2025-12-13 09:22:19'),
(689, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 4, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-12-13T12:52:24.000000Z\"},\"old\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-13T12:52:19.000000Z\"}}', NULL, '2025-12-13 09:22:24', '2025-12-13 09:22:24'),
(690, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"596270\",\"updated_at\":\"2025-12-14T04:35:58.000000Z\"},\"old\":{\"confirm_code\":\"460712\",\"updated_at\":\"2025-12-13T12:50:05.000000Z\"}}', NULL, '2025-12-14 01:05:58', '2025-12-14 01:05:58'),
(691, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"559284\",\"updated_at\":\"2025-12-14T04:36:07.000000Z\"},\"old\":{\"confirm_code\":\"596270\",\"updated_at\":\"2025-12-14T04:35:58.000000Z\"}}', NULL, '2025-12-14 01:06:07', '2025-12-14 01:06:07'),
(692, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-14T04:36:21.000000Z\"},\"old\":{\"updated_at\":\"2025-12-14T04:36:07.000000Z\"}}', NULL, '2025-12-14 01:06:21', '2025-12-14 01:06:21'),
(693, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 33, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-14T05:12:48.000000Z\"},\"old\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-10-29T06:45:40.000000Z\"}}', NULL, '2025-12-14 01:42:48', '2025-12-14 01:42:48'),
(694, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 32, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-14T05:17:23.000000Z\"},\"old\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-10-26T06:36:42.000000Z\"}}', NULL, '2025-12-14 01:47:23', '2025-12-14 01:47:23'),
(695, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-14T05:17:44.000000Z\"},\"old\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-12-13T12:51:49.000000Z\"}}', NULL, '2025-12-14 01:47:44', '2025-12-14 01:47:44'),
(696, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"status\":\"1\",\"updated_at\":\"2025-12-14T05:18:46.000000Z\"},\"old\":{\"status\":\"0\",\"updated_at\":\"2025-12-14T05:17:44.000000Z\"}}', NULL, '2025-12-14 01:48:46', '2025-12-14 01:48:46'),
(697, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-12-14T05:21:17.000000Z\"},\"old\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-14T05:18:46.000000Z\"}}', NULL, '2025-12-14 01:51:17', '2025-12-14 01:51:17'),
(698, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-14T05:22:29.000000Z\"},\"old\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-12-14T05:21:17.000000Z\"}}', NULL, '2025-12-14 01:52:29', '2025-12-14 01:52:29'),
(699, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-12-14T05:24:07.000000Z\"},\"old\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-14T05:22:29.000000Z\"}}', NULL, '2025-12-14 01:54:07', '2025-12-14 01:54:07'),
(700, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 33, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-12-14T05:24:18.000000Z\"},\"old\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-14T05:12:48.000000Z\"}}', NULL, '2025-12-14 01:54:18', '2025-12-14 01:54:18'),
(701, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-14T05:26:11.000000Z\"},\"old\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-12-14T05:24:07.000000Z\"}}', NULL, '2025-12-14 01:56:11', '2025-12-14 01:56:11'),
(702, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"status\":\"2\",\"updated_at\":\"2025-12-14T05:29:12.000000Z\"},\"old\":{\"status\":\"1\",\"updated_at\":\"2025-12-14T05:26:11.000000Z\"}}', NULL, '2025-12-14 01:59:12', '2025-12-14 01:59:12'),
(703, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-12-14T05:29:17.000000Z\"},\"old\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-14T05:29:12.000000Z\"}}', NULL, '2025-12-14 01:59:17', '2025-12-14 01:59:17'),
(704, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"540119\",\"updated_at\":\"2025-12-14T11:00:32.000000Z\"},\"old\":{\"confirm_code\":\"559284\",\"updated_at\":\"2025-12-14T04:36:21.000000Z\"}}', NULL, '2025-12-14 07:30:32', '2025-12-14 07:30:32'),
(705, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-14T11:00:54.000000Z\"},\"old\":{\"updated_at\":\"2025-12-14T11:00:32.000000Z\"}}', NULL, '2025-12-14 07:30:54', '2025-12-14 07:30:54'),
(706, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 36, 'App\\Models\\User', 15, '{\"attributes\":{\"approve_verify\":\"1\",\"updated_at\":\"2025-12-14T12:05:51.000000Z\"},\"old\":{\"approve_verify\":\"0\",\"updated_at\":\"2025-11-29T10:30:35.000000Z\"}}', NULL, '2025-12-14 08:35:51', '2025-12-14 08:35:51'),
(707, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 36, 'App\\Models\\User', 15, '{\"attributes\":{\"status\":\"1\",\"updated_at\":\"2025-12-14T12:06:06.000000Z\"},\"old\":{\"status\":\"0\",\"updated_at\":\"2025-12-14T12:05:51.000000Z\"}}', NULL, '2025-12-14 08:36:06', '2025-12-14 08:36:06'),
(708, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"850853\",\"updated_at\":\"2025-12-15T04:29:53.000000Z\"},\"old\":{\"confirm_code\":\"540119\",\"updated_at\":\"2025-12-14T11:00:54.000000Z\"}}', NULL, '2025-12-15 00:59:53', '2025-12-15 00:59:53'),
(709, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-15T04:30:17.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T04:29:53.000000Z\"}}', NULL, '2025-12-15 01:00:17', '2025-12-15 01:00:17'),
(710, 'User', 'user updated', 'App\\Models\\User', 'updated', 20, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"416675\",\"updated_at\":\"2025-12-15T05:39:03.000000Z\"},\"old\":{\"confirm_code\":null,\"updated_at\":\"2025-12-13T12:23:38.000000Z\"}}', NULL, '2025-12-15 02:09:03', '2025-12-15 02:09:03'),
(711, 'User', 'user updated', 'App\\Models\\User', 'updated', 20, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-15T05:39:16.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T05:39:03.000000Z\"}}', NULL, '2025-12-15 02:09:16', '2025-12-15 02:09:16'),
(712, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"569986\",\"updated_at\":\"2025-12-15T05:57:12.000000Z\"},\"old\":{\"confirm_code\":\"442039\",\"updated_at\":\"2025-12-13T12:22:41.000000Z\"}}', NULL, '2025-12-15 02:27:12', '2025-12-15 02:27:12'),
(713, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-15T05:57:23.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T05:57:12.000000Z\"}}', NULL, '2025-12-15 02:27:23', '2025-12-15 02:27:23'),
(714, 'User', 'user updated', 'App\\Models\\User', 'updated', 20, 'App\\Models\\User', 1, '{\"attributes\":{\"email\":\"sh@solico-ms.com\",\"updated_at\":\"2025-12-15T05:58:18.000000Z\"},\"old\":{\"email\":null,\"updated_at\":\"2025-12-15T05:39:16.000000Z\"}}', NULL, '2025-12-15 02:28:18', '2025-12-15 02:28:18'),
(718, 'User', 'user created', 'App\\Models\\User', 'created', 101, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u062d\\u0645\\u062f\",\"last_name\":\"\\u0627\\u0648\\u062a\\u0627\\u062f\\u06cc\",\"mobile\":\"09212388428\",\"confirm_code\":null,\"personal_id\":\"447015\",\"status\":\"0\",\"position_id\":8,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:14.000000Z\",\"updated_at\":\"2025-12-15T06:14:14.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:14', '2025-12-15 02:44:14'),
(719, 'User', 'user created', 'App\\Models\\User', 'created', 102, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0698\\u0627\\u0644\\u0647\",\"last_name\":\"\\u0634\\u0627\\u062f\\u0645\\u0627\\u0646\\u06cc\",\"mobile\":\"09123481675\",\"confirm_code\":null,\"personal_id\":\"666313\",\"status\":\"0\",\"position_id\":7,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:14.000000Z\",\"updated_at\":\"2025-12-15T06:14:14.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:14', '2025-12-15 02:44:14'),
(720, 'User', 'user created', 'App\\Models\\User', 'created', 103, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0644\\u0646\\u0627\\u0632 \",\"last_name\":\"\\u062d\\u0627\\u062a\\u0645\\u06cc\",\"mobile\":\"09122389505\",\"confirm_code\":null,\"personal_id\":\"596347\",\"status\":\"0\",\"position_id\":11,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:15.000000Z\",\"updated_at\":\"2025-12-15T06:14:15.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:15', '2025-12-15 02:44:15'),
(721, 'User', 'user created', 'App\\Models\\User', 'created', 104, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0644\\u06cc\\u0631\\u0636\\u0627 \",\"last_name\":\"\\u0645\\u06cc\\u0627\\u0646\\u062c\\u06cc\",\"mobile\":\"   09124494006\",\"confirm_code\":null,\"personal_id\":\"592614\",\"status\":\"0\",\"position_id\":12,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:15.000000Z\",\"updated_at\":\"2025-12-15T06:14:15.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:15', '2025-12-15 02:44:15'),
(722, 'User', 'user created', 'App\\Models\\User', 'created', 105, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0631\\u06cc\\u0628\\u0627\",\"last_name\":\"\\u0627\\u062d\\u0645\\u062f\\u06cc\\u0627\\u0646\",\"mobile\":\"   09122339375\",\"confirm_code\":null,\"personal_id\":\"722695\",\"status\":\"0\",\"position_id\":73,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:15.000000Z\",\"updated_at\":\"2025-12-15T06:14:15.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:15', '2025-12-15 02:44:15'),
(723, 'User', 'user created', 'App\\Models\\User', 'created', 106, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0647\\u0646\\u0627\\u0632\",\"last_name\":\"\\u0622\\u0632\\u0627\\u062f\",\"mobile\":\"   09121577616\",\"confirm_code\":null,\"personal_id\":\"550330\",\"status\":\"0\",\"position_id\":13,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:15.000000Z\",\"updated_at\":\"2025-12-15T06:14:15.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:15', '2025-12-15 02:44:15'),
(724, 'User', 'user created', 'App\\Models\\User', 'created', 107, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0634\\u0642\\u0627\\u06cc\\u0642\",\"last_name\":\"\\u0644\\u0637\\u0641\\u06cc\",\"mobile\":\"09306104151\",\"confirm_code\":null,\"personal_id\":\"920496\",\"status\":\"0\",\"position_id\":14,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:15.000000Z\",\"updated_at\":\"2025-12-15T06:14:15.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:15', '2025-12-15 02:44:15'),
(725, 'User', 'user created', 'App\\Models\\User', 'created', 108, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0627\\u0626\\u0632\\u0647\",\"last_name\":\"\\u0627\\u0628\\u0631\\u0627\\u0647\\u06cc\\u0645\",\"mobile\":\"09365305239\",\"confirm_code\":null,\"personal_id\":\"677427\",\"status\":\"0\",\"position_id\":15,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:16.000000Z\",\"updated_at\":\"2025-12-15T06:14:16.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:16', '2025-12-15 02:44:16'),
(726, 'User', 'user created', 'App\\Models\\User', 'created', 109, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0646\\u0648\\u0634\\u0647\",\"last_name\":\"\\u0644\\u0637\\u0641\\u06cc \\u0645\\u0642\\u062f\\u0633\",\"mobile\":\"09122757745\",\"confirm_code\":null,\"personal_id\":\"305732\",\"status\":\"0\",\"position_id\":16,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:16.000000Z\",\"updated_at\":\"2025-12-15T06:14:16.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:16', '2025-12-15 02:44:16'),
(727, 'User', 'user created', 'App\\Models\\User', 'created', 110, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u062d\\u0627\\u0645\\u062f\",\"last_name\":\"\\u0633\\u0639\\u06cc\\u062f\\u06cc \\u0646\\u0698\\u0627\\u062f\",\"mobile\":\"09100977983\",\"confirm_code\":null,\"personal_id\":\"526010\",\"status\":\"0\",\"position_id\":17,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:16.000000Z\",\"updated_at\":\"2025-12-15T06:14:16.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:16', '2025-12-15 02:44:16'),
(728, 'User', 'user created', 'App\\Models\\User', 'created', 111, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u067e\\u0631\\u06cc\\u0633\\u0627\",\"last_name\":\"\\u0645\\u0642\\u06cc\\u0645\\u06cc\",\"mobile\":\"09127109919\",\"confirm_code\":null,\"personal_id\":\"370011\",\"status\":\"0\",\"position_id\":18,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:16.000000Z\",\"updated_at\":\"2025-12-15T06:14:16.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:16', '2025-12-15 02:44:16'),
(729, 'User', 'user created', 'App\\Models\\User', 'created', 112, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u0633\\u062a\\u0631\\u0646 \",\"last_name\":\"\\u0639\\u0644\\u06cc\\u0627\\u0646\",\"mobile\":\"09127950388\",\"confirm_code\":null,\"personal_id\":\"228901\",\"status\":\"0\",\"position_id\":19,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:16.000000Z\",\"updated_at\":\"2025-12-15T06:14:16.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:16', '2025-12-15 02:44:16'),
(730, 'User', 'user created', 'App\\Models\\User', 'created', 113, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u062a\\u0627\\u0631\\u0647 \",\"last_name\":\"\\u062c\\u0645\\u0627\\u0631\\u0627\\u0646\\u06cc\",\"mobile\":\"09125445091\",\"confirm_code\":null,\"personal_id\":\"363787\",\"status\":\"0\",\"position_id\":20,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:17.000000Z\",\"updated_at\":\"2025-12-15T06:14:17.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:17', '2025-12-15 02:44:17'),
(731, 'User', 'user created', 'App\\Models\\User', 'created', 114, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u063a\\u0632\\u0644 \",\"last_name\":\"\\u0628\\u0647\\u0631\\u0627\\u0645\\u06cc\",\"mobile\":\"09910733037\",\"confirm_code\":null,\"personal_id\":\"588064\",\"status\":\"0\",\"position_id\":21,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:17.000000Z\",\"updated_at\":\"2025-12-15T06:14:17.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:17', '2025-12-15 02:44:17'),
(732, 'User', 'user created', 'App\\Models\\User', 'created', 115, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0622\\u06cc\\u062f\\u06cc\\u0646 \",\"last_name\":\"\\u0628\\u0627\\u0648\\u0631 \",\"mobile\":\"09125264200\",\"confirm_code\":null,\"personal_id\":\"261245\",\"status\":\"0\",\"position_id\":22,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:17.000000Z\",\"updated_at\":\"2025-12-15T06:14:17.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:17', '2025-12-15 02:44:17'),
(733, 'User', 'user created', 'App\\Models\\User', 'created', 116, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0647\\u062f\\u06cc \",\"last_name\":\"\\u0634\\u06a9\\u0631\\u06cc \\u0632\\u0627\\u062f\\u0647\",\"mobile\":\"09125802352\",\"confirm_code\":null,\"personal_id\":\"462586\",\"status\":\"0\",\"position_id\":19,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:17.000000Z\",\"updated_at\":\"2025-12-15T06:14:17.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:17', '2025-12-15 02:44:17'),
(734, 'User', 'user created', 'App\\Models\\User', 'created', 117, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0632\\u0647\\u0631\\u0627 \",\"last_name\":\"\\u0639\\u0631\\u0628 \\u0632\\u0627\\u062f\\u0647\",\"mobile\":\"09337185299\",\"confirm_code\":null,\"personal_id\":\"838230\",\"status\":\"0\",\"position_id\":24,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:17.000000Z\",\"updated_at\":\"2025-12-15T06:14:17.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:17', '2025-12-15 02:44:17'),
(735, 'User', 'user created', 'App\\Models\\User', 'created', 118, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0647\\u0631\\u0646\\u0627\\u0632 \",\"last_name\":\"\\u062a\\u06cc\\u0645\\u0648\\u0631\\u06cc\",\"mobile\":\"09129533509\",\"confirm_code\":null,\"personal_id\":\"879673\",\"status\":\"0\",\"position_id\":25,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:18.000000Z\",\"updated_at\":\"2025-12-15T06:14:18.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:18', '2025-12-15 02:44:18'),
(736, 'User', 'user created', 'App\\Models\\User', 'created', 119, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u062a\\u0627\\u0631\\u0647 \",\"last_name\":\"\\u0628\\u0647\\u0644\\u0648\\u0644\\u06cc\",\"mobile\":\"9351703171\",\"confirm_code\":null,\"personal_id\":\"417705\",\"status\":\"0\",\"position_id\":26,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:18.000000Z\",\"updated_at\":\"2025-12-15T06:14:18.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:18', '2025-12-15 02:44:18'),
(737, 'User', 'user created', 'App\\Models\\User', 'created', 120, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u062d\\u06cc\\u0627\",\"last_name\":\"\\u0645\\u0648\\u06af\\u0648\\u0626\\u06cc \",\"mobile\":\"9381450291\",\"confirm_code\":null,\"personal_id\":\"413001\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:18.000000Z\",\"updated_at\":\"2025-12-15T06:14:18.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:18', '2025-12-15 02:44:18'),
(738, 'User', 'user created', 'App\\Models\\User', 'created', 121, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0634\\u06cc\\u0645\\u0627\",\"last_name\":\"\\u0631\\u06a9\\u0627\\u0628\\u062f\\u0627\\u0631\",\"mobile\":\"09128317953\",\"confirm_code\":null,\"personal_id\":\"480859\",\"status\":\"0\",\"position_id\":9,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:18.000000Z\",\"updated_at\":\"2025-12-15T06:14:18.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:18', '2025-12-15 02:44:18'),
(739, 'User', 'user created', 'App\\Models\\User', 'created', 122, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u062f\\u0627\\u0648\\u062f\",\"last_name\":\"\\u06cc\\u0648\\u0633\\u0641\\u06cc\",\"mobile\":\"09123263072\",\"confirm_code\":null,\"personal_id\":\"186953\",\"status\":\"0\",\"position_id\":28,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:18.000000Z\",\"updated_at\":\"2025-12-15T06:14:18.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:18', '2025-12-15 02:44:18'),
(740, 'User', 'user created', 'App\\Models\\User', 'created', 123, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u06cc\\u0646\\u0648\",\"last_name\":\"\\u062a\\u0634\\u06a9\\u0631\\u06cc\",\"mobile\":\"09031026307\",\"confirm_code\":null,\"personal_id\":\"605198\",\"status\":\"0\",\"position_id\":29,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:19.000000Z\",\"updated_at\":\"2025-12-15T06:14:19.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:19', '2025-12-15 02:44:19'),
(741, 'User', 'user created', 'App\\Models\\User', 'created', 124, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u062d\\u0628\\u06cc\\u0628\\u0647\",\"last_name\":\"\\u0645\\u062c\\u06cc\\u062f\\u06cc\",\"mobile\":\"09195061070\",\"confirm_code\":null,\"personal_id\":\"463648\",\"status\":\"0\",\"position_id\":30,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:19.000000Z\",\"updated_at\":\"2025-12-15T06:14:19.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:19', '2025-12-15 02:44:19'),
(742, 'User', 'user created', 'App\\Models\\User', 'created', 125, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u0633\\u062a\\u0631\\u0646\",\"last_name\":\"\\u0641\\u0627\\u0631\\u0633\\u06cc\",\"mobile\":\"09128367261\",\"confirm_code\":null,\"personal_id\":\"927761\",\"status\":\"0\",\"position_id\":31,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:19.000000Z\",\"updated_at\":\"2025-12-15T06:14:19.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:19', '2025-12-15 02:44:19'),
(743, 'User', 'user created', 'App\\Models\\User', 'created', 126, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u06cc\\u062f \\u0645\\u0631\\u062a\\u0636\\u06cc\",\"last_name\":\"\\u0637\\u0627\\u0644\\u0628 \\u067e\\u0648\\u0631 \\u0627\\u0645\\u06cc\\u0631\\u06cc\",\"mobile\":\"09126542889\",\"confirm_code\":null,\"personal_id\":\"587193\",\"status\":\"0\",\"position_id\":32,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:19.000000Z\",\"updated_at\":\"2025-12-15T06:14:19.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:19', '2025-12-15 02:44:19'),
(744, 'User', 'user created', 'App\\Models\\User', 'created', 127, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0631\\u0636\\u0627\",\"last_name\":\"\\u0627\\u0641\\u0631\\u0627\\u0632\\u06cc \\u06a9\\u0644\\u0648\\u06cc\\u0631\",\"mobile\":\"09378509036\",\"confirm_code\":null,\"personal_id\":\"567781\",\"status\":\"0\",\"position_id\":33,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:19.000000Z\",\"updated_at\":\"2025-12-15T06:14:19.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:19', '2025-12-15 02:44:19'),
(745, 'User', 'user created', 'App\\Models\\User', 'created', 128, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u0627\\u0631\\u0627\",\"last_name\":\"\\u0645\\u06cc\\u0631\\u062c\\u0639\\u0641\\u0631\\u06cc\",\"mobile\":\"09130331896\",\"confirm_code\":null,\"personal_id\":\"458978\",\"status\":\"0\",\"position_id\":33,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:20.000000Z\",\"updated_at\":\"2025-12-15T06:14:20.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:20', '2025-12-15 02:44:20'),
(746, 'User', 'user created', 'App\\Models\\User', 'created', 129, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u0633\\u062a\\u0631\\u0646\",\"last_name\":\"\\u0645\\u062d\\u0628\\u06cc\",\"mobile\":\"09226198846\",\"confirm_code\":null,\"personal_id\":\"501741\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:20.000000Z\",\"updated_at\":\"2025-12-15T06:14:20.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:20', '2025-12-15 02:44:20'),
(747, 'User', 'user created', 'App\\Models\\User', 'created', 130, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0644\\u06cc\\u06a9\\u0627\",\"last_name\":\"\\u0641\\u06cc\\u0644\\u0645\",\"mobile\":\"09198713718\",\"confirm_code\":null,\"personal_id\":\"560807\",\"status\":\"0\",\"position_id\":37,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:20.000000Z\",\"updated_at\":\"2025-12-15T06:14:20.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:20', '2025-12-15 02:44:20'),
(748, 'User', 'user created', 'App\\Models\\User', 'created', 131, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0631\\u062c\\u0627\\u0646\",\"last_name\":\"\\u062b\\u0642\\u0641\\u06cc\",\"mobile\":\"09104596634\",\"confirm_code\":null,\"personal_id\":\"601394\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:20.000000Z\",\"updated_at\":\"2025-12-15T06:14:20.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:20', '2025-12-15 02:44:20'),
(749, 'User', 'user created', 'App\\Models\\User', 'created', 132, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0631\\u06cc\\u0645 \",\"last_name\":\"\\u067e\\u0648\\u0631 \\u0635\\u062f\\u0631\\u06cc\",\"mobile\":\"09194989023\",\"confirm_code\":null,\"personal_id\":\"749031\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:20.000000Z\",\"updated_at\":\"2025-12-15T06:14:20.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:20', '2025-12-15 02:44:20'),
(750, 'User', 'user created', 'App\\Models\\User', 'created', 133, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0634\\u06cc\\u0631\\u06cc\\u0646 \",\"last_name\":\"\\u0639\\u0644\\u06cc\\u0627\\u06cc\\u06cc\",\"mobile\":\"09195077794\",\"confirm_code\":null,\"personal_id\":\"195234\",\"status\":\"0\",\"position_id\":38,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:21.000000Z\",\"updated_at\":\"2025-12-15T06:14:21.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:21', '2025-12-15 02:44:21'),
(751, 'User', 'user created', 'App\\Models\\User', 'created', 134, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u063a\\u0632\\u0627\\u0644\\u0647\",\"last_name\":\"\\u062f\\u0627\\u0646\\u0634\\u06cc\\u0627\\u0646\",\"mobile\":\"09026677345\",\"confirm_code\":null,\"personal_id\":\"777019\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:21.000000Z\",\"updated_at\":\"2025-12-15T06:14:21.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:21', '2025-12-15 02:44:21'),
(752, 'User', 'user created', 'App\\Models\\User', 'created', 135, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0631\\u0648\\u0645\\u06cc\\u0646\\u0627 \",\"last_name\":\"\\u0646\\u0635\\u06cc\\u0631\\u067e\\u0648\\u0631\",\"mobile\":\"09100137779\",\"confirm_code\":null,\"personal_id\":\"538602\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:21.000000Z\",\"updated_at\":\"2025-12-15T06:14:21.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:21', '2025-12-15 02:44:21'),
(753, 'User', 'user created', 'App\\Models\\User', 'created', 136, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0631\\u0648\\u06cc\\u0627\",\"last_name\":\"\\u0639\\u0644\\u0627\\u06cc\\u06cc\\u0627\\u0646\",\"mobile\":\"09192070992\",\"confirm_code\":null,\"personal_id\":\"720864\",\"status\":\"0\",\"position_id\":9,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:21.000000Z\",\"updated_at\":\"2025-12-15T06:14:21.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:21', '2025-12-15 02:44:21');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(754, 'User', 'user created', 'App\\Models\\User', 'created', 137, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u062d\\u0645\\u062f\\u0639\\u0644\\u06cc\",\"last_name\":\"\\u0646\\u0627\\u0635\\u062d\\u06cc\",\"mobile\":\"09022070087\",\"confirm_code\":null,\"personal_id\":\"538134\",\"status\":\"0\",\"position_id\":40,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:21.000000Z\",\"updated_at\":\"2025-12-15T06:14:21.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:21', '2025-12-15 02:44:21'),
(755, 'User', 'user created', 'App\\Models\\User', 'created', 138, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0627\\u0637\\u0641\\u0647\",\"last_name\":\"\\u0635\\u0627\\u0628\\u0631\\u06cc \\u0628\\u06cc\\u0631\\u0648\\u0646\",\"mobile\":\"09026085958\",\"confirm_code\":null,\"personal_id\":\"614939\",\"status\":\"0\",\"position_id\":33,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:22.000000Z\",\"updated_at\":\"2025-12-15T06:14:22.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:22', '2025-12-15 02:44:22'),
(756, 'User', 'user created', 'App\\Models\\User', 'created', 139, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u00a0\\u0639\\u0644\\u06cc\\u00a0\",\"last_name\":\"\\u0627\\u062d\\u0633\\u0627\\u0646\\u06cc\\u00a0\\u06a9\\u0644\\u062c\\u0647\\u00a0\",\"mobile\":\"09126301788\",\"confirm_code\":null,\"personal_id\":\"501711\",\"status\":\"0\",\"position_id\":31,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:22.000000Z\",\"updated_at\":\"2025-12-15T06:14:22.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:22', '2025-12-15 02:44:22'),
(757, 'User', 'user created', 'App\\Models\\User', 'created', 140, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0644\\u06cc\",\"last_name\":\"\\u0646\\u0627\\u062f\\u0631\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"mobile\":\"\\u06f0\\u06f9\\u06f1\\u06f2\\u06f3\\u06f5\\u06f4\\u06f6\\u06f5\\u06f2\\u06f7\",\"confirm_code\":null,\"personal_id\":\"882182\",\"status\":\"0\",\"position_id\":42,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:22.000000Z\",\"updated_at\":\"2025-12-15T06:14:22.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:22', '2025-12-15 02:44:22'),
(758, 'User', 'user created', 'App\\Models\\User', 'created', 141, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0622\\u0631\\u0645\\u064a\\u0646\",\"last_name\":\"\\u0632\\u0646\\u062f\\u064a\",\"mobile\":\"09383437955\",\"confirm_code\":null,\"personal_id\":\"309553\",\"status\":\"0\",\"position_id\":32,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:22.000000Z\",\"updated_at\":\"2025-12-15T06:14:22.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:22', '2025-12-15 02:44:22'),
(759, 'User', 'user created', 'App\\Models\\User', 'created', 142, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0637\\u064a\\u0647\",\"last_name\":\"\\u0641\\u062a\\u062d \\u0627\\u0644\\u0644\\u0647\\u064a\",\"mobile\":\"09019093803\",\"confirm_code\":null,\"personal_id\":\"534631\",\"status\":\"0\",\"position_id\":27,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:22.000000Z\",\"updated_at\":\"2025-12-15T06:14:22.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:22', '2025-12-15 02:44:22'),
(760, 'User', 'user created', 'App\\Models\\User', 'created', 143, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u0627\\u0635\\u0631\",\"last_name\":\"\\u0631\\u06cc\\u0627\\u0636\\u06cc\",\"mobile\":\"09142350135\",\"confirm_code\":null,\"personal_id\":\"228829\",\"status\":\"0\",\"position_id\":74,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:23.000000Z\",\"updated_at\":\"2025-12-15T06:14:23.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:23', '2025-12-15 02:44:23'),
(761, 'User', 'user created', 'App\\Models\\User', 'created', 144, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u06cc\\u0646\\u0627 \",\"last_name\":\"\\u062f\\u0645\\u06cc\\u0631\\u0686\\u06cc\",\"mobile\":\"09369730534\",\"confirm_code\":null,\"personal_id\":\"328799\",\"status\":\"0\",\"position_id\":43,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:23.000000Z\",\"updated_at\":\"2025-12-15T06:14:23.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:23', '2025-12-15 02:44:23'),
(762, 'User', 'user created', 'App\\Models\\User', 'created', 145, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0634\\u06a9\\u0648\\u0647 \",\"last_name\":\"\\u0644\\u0637\\u0641\\u06cc\",\"mobile\":\"09124598854\",\"confirm_code\":null,\"personal_id\":\"660491\",\"status\":\"0\",\"position_id\":44,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:23.000000Z\",\"updated_at\":\"2025-12-15T06:14:23.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:23', '2025-12-15 02:44:23'),
(763, 'User', 'user created', 'App\\Models\\User', 'created', 146, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u067e\\u0631\\u06cc\\u0633\\u0627\",\"last_name\":\"\\u0627\\u0633\\u0645\\u0627\\u0639\\u06cc\\u0644\\u06cc\",\"mobile\":\"09358843474\",\"confirm_code\":null,\"personal_id\":\"819939\",\"status\":\"0\",\"position_id\":75,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:23.000000Z\",\"updated_at\":\"2025-12-15T06:14:23.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:23', '2025-12-15 02:44:23'),
(764, 'User', 'user created', 'App\\Models\\User', 'created', 147, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0635\\u0627\\u0628\\u0631\",\"last_name\":\"\\u0645\\u0648\\u0633\\u0648\\u06cc\",\"mobile\":\"9127803603\",\"confirm_code\":null,\"personal_id\":\"532154\",\"status\":\"0\",\"position_id\":76,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:23.000000Z\",\"updated_at\":\"2025-12-15T06:14:23.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:23', '2025-12-15 02:44:23'),
(765, 'User', 'user created', 'App\\Models\\User', 'created', 148, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u063a\\u0632\\u0627\\u0644\\u0647\",\"last_name\":\"\\u06a9\\u06cc\\u0627\\u0646\\u0632\\u0627\\u062f\",\"mobile\":\"09125543849\",\"confirm_code\":null,\"personal_id\":\"120547\",\"status\":\"0\",\"position_id\":77,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:24.000000Z\",\"updated_at\":\"2025-12-15T06:14:24.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:24', '2025-12-15 02:44:24'),
(766, 'User', 'user created', 'App\\Models\\User', 'created', 149, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0637\\u06cc\\u0647\",\"last_name\":\"\\u0627\\u0645\\u0627\\u0646\\u06cc\",\"mobile\":\"09124079185\",\"confirm_code\":null,\"personal_id\":\"305906\",\"status\":\"0\",\"position_id\":45,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:24.000000Z\",\"updated_at\":\"2025-12-15T06:14:24.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:24', '2025-12-15 02:44:24'),
(767, 'User', 'user created', 'App\\Models\\User', 'created', 150, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u063a\\u0632\\u0627\\u0644\",\"last_name\":\"\\u0639\\u0644\\u06cc\\u0627\\u0646\\u0633\\u0628\",\"mobile\":\"09122116318\",\"confirm_code\":null,\"personal_id\":\"826686\",\"status\":\"0\",\"position_id\":46,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:24.000000Z\",\"updated_at\":\"2025-12-15T06:14:24.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:24', '2025-12-15 02:44:24'),
(768, 'User', 'user created', 'App\\Models\\User', 'created', 151, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0635\\u063a\\u0631\",\"last_name\":\"\\u0627\\u0645\\u06cc\\u0631\\u06cc\",\"mobile\":\"09113240344\",\"confirm_code\":null,\"personal_id\":\"384225\",\"status\":\"0\",\"position_id\":47,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:24.000000Z\",\"updated_at\":\"2025-12-15T06:14:24.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:24', '2025-12-15 02:44:24'),
(769, 'User', 'user created', 'App\\Models\\User', 'created', 152, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0634\\u0639\\u06cc\\u0628\",\"last_name\":\"\\u0627\\u0645\\u06cc\\u0631\\u06cc\",\"mobile\":\"09124725394\",\"confirm_code\":null,\"personal_id\":\"400675\",\"status\":\"0\",\"position_id\":48,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:24.000000Z\",\"updated_at\":\"2025-12-15T06:14:24.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:24', '2025-12-15 02:44:24'),
(770, 'User', 'user created', 'App\\Models\\User', 'created', 153, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0627\\u0626\\u0632\\u0647\",\"last_name\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"mobile\":\"09123498404\",\"confirm_code\":null,\"personal_id\":\"919682\",\"status\":\"0\",\"position_id\":48,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:25.000000Z\",\"updated_at\":\"2025-12-15T06:14:25.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:25', '2025-12-15 02:44:25'),
(771, 'User', 'user created', 'App\\Models\\User', 'created', 154, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0627\\u0637\\u0641\\u0647\",\"last_name\":\"\\u0628\\u0648\\u0634\\u0627\\u062f\\u06cc\",\"mobile\":\"09121234789\",\"confirm_code\":null,\"personal_id\":\"430338\",\"status\":\"0\",\"position_id\":48,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:25.000000Z\",\"updated_at\":\"2025-12-15T06:14:25.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:25', '2025-12-15 02:44:25'),
(772, 'User', 'user created', 'App\\Models\\User', 'created', 155, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u067e\\u0631\\u06cc\\u0633\\u0627\",\"last_name\":\"\\u0646\\u0639\\u0645\\u062a\\u06cc\",\"mobile\":\"09123966037\",\"confirm_code\":null,\"personal_id\":\"528519\",\"status\":\"0\",\"position_id\":48,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:25.000000Z\",\"updated_at\":\"2025-12-15T06:14:25.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:25', '2025-12-15 02:44:25'),
(773, 'User', 'user created', 'App\\Models\\User', 'created', 156, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u0627\\u0631\\u0627\",\"last_name\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"mobile\":\"09109238930\",\"confirm_code\":null,\"personal_id\":\"814174\",\"status\":\"0\",\"position_id\":49,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:25.000000Z\",\"updated_at\":\"2025-12-15T06:14:25.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:25', '2025-12-15 02:44:25'),
(774, 'User', 'user created', 'App\\Models\\User', 'created', 157, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u062d\\u0645\\u062f \\u0639\\u0644\\u06cc\",\"last_name\":\"\\u0631\\u0633\\u062a\\u0645\\u06cc\\u0627\\u0646\",\"mobile\":\"09124319046\",\"confirm_code\":null,\"personal_id\":\"800150\",\"status\":\"0\",\"position_id\":50,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:25.000000Z\",\"updated_at\":\"2025-12-15T06:14:25.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:25', '2025-12-15 02:44:25'),
(775, 'User', 'user created', 'App\\Models\\User', 'created', 158, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0627\\u0637\\u0645\\u0647\",\"last_name\":\"\\u0639\\u0628\\u062f\\u06cc\",\"mobile\":\"09129563202\",\"confirm_code\":null,\"personal_id\":\"629506\",\"status\":\"0\",\"position_id\":51,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:26.000000Z\",\"updated_at\":\"2025-12-15T06:14:26.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:26', '2025-12-15 02:44:26'),
(776, 'User', 'user created', 'App\\Models\\User', 'created', 159, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u067e\\u0648\\u06cc\\u0627\",\"last_name\":\"\\u0645\\u0648\\u0644\\u0648\\u06cc\",\"mobile\":\"09101234789\",\"confirm_code\":null,\"personal_id\":\"328226\",\"status\":\"0\",\"position_id\":52,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:26.000000Z\",\"updated_at\":\"2025-12-15T06:14:26.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:26', '2025-12-15 02:44:26'),
(777, 'User', 'user created', 'App\\Models\\User', 'created', 160, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0641\\u0634\\u06cc\\u0646\",\"last_name\":\"\\u062f\\u0631\\u062e\\u0634\\u0627\\u0646\",\"mobile\":\"09121978723\",\"confirm_code\":null,\"personal_id\":\"793227\",\"status\":\"0\",\"position_id\":53,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:26.000000Z\",\"updated_at\":\"2025-12-15T06:14:26.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:26', '2025-12-15 02:44:26'),
(778, 'User', 'user created', 'App\\Models\\User', 'created', 161, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0646\\u0635\\u0648\\u0631\\u0647\",\"last_name\":\"\\u067e\\u06cc\\u0631\\u06af\\u0632\\u06cc\",\"mobile\":\"09376731869\",\"confirm_code\":null,\"personal_id\":\"113731\",\"status\":\"0\",\"position_id\":54,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:26.000000Z\",\"updated_at\":\"2025-12-15T06:14:26.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:26', '2025-12-15 02:44:26'),
(779, 'User', 'user created', 'App\\Models\\User', 'created', 162, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0633\\u0639\\u0648\\u062f\",\"last_name\":\"\\u0648\\u062d\\u06cc\\u062f\\u0646\\u06cc\\u0627\",\"mobile\":\"09128477748\",\"confirm_code\":null,\"personal_id\":\"597929\",\"status\":\"0\",\"position_id\":55,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:26.000000Z\",\"updated_at\":\"2025-12-15T06:14:26.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:26', '2025-12-15 02:44:26'),
(780, 'User', 'user created', 'App\\Models\\User', 'created', 163, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u06a9\\u0698\\u0627\\u0644\",\"last_name\":\"\\u0647\\u0646\\u0631\\u067e\\u0631\\u0648\\u0631\",\"mobile\":\"09193118113\",\"confirm_code\":null,\"personal_id\":\"322578\",\"status\":\"0\",\"position_id\":56,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:27.000000Z\",\"updated_at\":\"2025-12-15T06:14:27.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:27', '2025-12-15 02:44:27'),
(781, 'User', 'user created', 'App\\Models\\User', 'created', 164, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0627\\u0637\\u0645\\u0647\",\"last_name\":\"\\u0622\\u0642\\u0627\\u062c\\u0627\\u0646\\u06cc\",\"mobile\":\"09121889893\",\"confirm_code\":null,\"personal_id\":\"670747\",\"status\":\"0\",\"position_id\":57,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:27.000000Z\",\"updated_at\":\"2025-12-15T06:14:27.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:27', '2025-12-15 02:44:27'),
(782, 'User', 'user created', 'App\\Models\\User', 'created', 165, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0639\\u0631\\u0641\\u0627\\u0646\",\"last_name\":\"\\u0634\\u0627\\u06a9\\u0631\\u06cc\\u0646\",\"mobile\":\"09122593886\",\"confirm_code\":null,\"personal_id\":\"765380\",\"status\":\"0\",\"position_id\":58,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:27.000000Z\",\"updated_at\":\"2025-12-15T06:14:27.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:27', '2025-12-15 02:44:27'),
(783, 'User', 'user created', 'App\\Models\\User', 'created', 166, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0631\\u062d\\u0645\\u0627\\u0646\",\"last_name\":\"\\u0646\\u0648\\u0630\\u0631\\u06cc\",\"mobile\":\"09376369964\",\"confirm_code\":null,\"personal_id\":\"240763\",\"status\":\"0\",\"position_id\":59,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:27.000000Z\",\"updated_at\":\"2025-12-15T06:14:27.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:27', '2025-12-15 02:44:27'),
(784, 'User', 'user created', 'App\\Models\\User', 'created', 167, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u062d\\u0645\\u06cc\\u062f\",\"last_name\":\"\\u0632\\u0646\\u062f\\u06cc\",\"mobile\":\"09125096135\",\"confirm_code\":null,\"personal_id\":\"651710\",\"status\":\"0\",\"position_id\":60,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:27.000000Z\",\"updated_at\":\"2025-12-15T06:14:27.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:27', '2025-12-15 02:44:27'),
(785, 'User', 'user created', 'App\\Models\\User', 'created', 168, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0646\\u0635\\u0648\\u0631\",\"last_name\":\"\\u0633\\u062a\\u0627\\u0631\\u06cc\",\"mobile\":\"09359786747\",\"confirm_code\":null,\"personal_id\":\"858072\",\"status\":\"0\",\"position_id\":61,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:28.000000Z\",\"updated_at\":\"2025-12-15T06:14:28.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:28', '2025-12-15 02:44:28'),
(786, 'User', 'user created', 'App\\Models\\User', 'created', 169, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0645\\u06cc\\u062f\",\"last_name\":\"\\u0645\\u0648\\u062d\\u062f \\u0646\\u0698\\u0627\\u062f\",\"mobile\":\"09128078195\",\"confirm_code\":null,\"personal_id\":\"881121\",\"status\":\"0\",\"position_id\":62,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:28.000000Z\",\"updated_at\":\"2025-12-15T06:14:28.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:28', '2025-12-15 02:44:28'),
(787, 'User', 'user created', 'App\\Models\\User', 'created', 170, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u0631\\u06af\\u0633\",\"last_name\":\"\\u0646\\u0635\\u0631\\u06cc\",\"mobile\":\"09214598009\",\"confirm_code\":null,\"personal_id\":\"181731\",\"status\":\"0\",\"position_id\":63,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:28.000000Z\",\"updated_at\":\"2025-12-15T06:14:28.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:28', '2025-12-15 02:44:28'),
(788, 'User', 'user created', 'App\\Models\\User', 'created', 171, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0648\\u0627\\u062f\",\"last_name\":\"\\u0639\\u0633\\u062c\\u062f\\u06cc\",\"mobile\":\"09354769402\",\"confirm_code\":null,\"personal_id\":\"210575\",\"status\":\"0\",\"position_id\":64,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:28.000000Z\",\"updated_at\":\"2025-12-15T06:14:28.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:28', '2025-12-15 02:44:28'),
(789, 'User', 'user created', 'App\\Models\\User', 'created', 172, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0645\\u06cc\\u062f\",\"last_name\":\"\\u062c\\u0627\\u0631\\u0648\\u062f\\u06cc\",\"mobile\":\"09121180732\",\"confirm_code\":null,\"personal_id\":\"769001\",\"status\":\"0\",\"position_id\":65,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:28.000000Z\",\"updated_at\":\"2025-12-15T06:14:28.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:28', '2025-12-15 02:44:28'),
(790, 'User', 'user created', 'App\\Models\\User', 'created', 173, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u062d\\u0633\\u0627\\u0646\",\"last_name\":\"\\u062d\\u0627\\u0645\\u06cc\",\"mobile\":\"9128198470\",\"confirm_code\":null,\"personal_id\":\"811017\",\"status\":\"0\",\"position_id\":66,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:29.000000Z\",\"updated_at\":\"2025-12-15T06:14:29.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:29', '2025-12-15 02:44:29'),
(791, 'User', 'user created', 'App\\Models\\User', 'created', 174, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u0645\\u0627\\u0646\\u0647\",\"last_name\":\"\\u0633\\u062f\\u0647 \\u0632\\u0627\\u062f\\u0647\",\"mobile\":\"09120656367\",\"confirm_code\":null,\"personal_id\":\"558925\",\"status\":\"0\",\"position_id\":67,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:29.000000Z\",\"updated_at\":\"2025-12-15T06:14:29.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:29', '2025-12-15 02:44:29'),
(792, 'User', 'user created', 'App\\Models\\User', 'created', 175, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0646\\u06cc\\u0644\\u0648\\u0641\\u0631\",\"last_name\":\"\\u0641\\u062a\\u0627\\u062d\\u06cc\",\"mobile\":\"09120466122\",\"confirm_code\":null,\"personal_id\":\"515785\",\"status\":\"0\",\"position_id\":68,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:29.000000Z\",\"updated_at\":\"2025-12-15T06:14:29.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:29', '2025-12-15 02:44:29'),
(793, 'User', 'user created', 'App\\Models\\User', 'created', 176, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0627\\u0648\\u0631\\u0627\\u0646\\u0648\\u0633 \",\"last_name\":\"\\u0627\\u0645\\u06cc\\u0646\",\"mobile\":\"09387295848\",\"confirm_code\":null,\"personal_id\":\"819529\",\"status\":\"0\",\"position_id\":69,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:29.000000Z\",\"updated_at\":\"2025-12-15T06:14:29.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:29', '2025-12-15 02:44:29'),
(794, 'User', 'user created', 'App\\Models\\User', 'created', 177, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0628\\u0647\\u0646\\u0627\\u0645\",\"last_name\":\"\\u062d\\u06cc\\u062f\\u0631\\u06cc\",\"mobile\":\"09038460627\",\"confirm_code\":null,\"personal_id\":\"602530\",\"status\":\"0\",\"position_id\":70,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:29.000000Z\",\"updated_at\":\"2025-12-15T06:14:29.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:29', '2025-12-15 02:44:29'),
(795, 'User', 'user created', 'App\\Models\\User', 'created', 178, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u06cc\\u0646\\u0627 \",\"last_name\":\"\\u0646\\u0639\\u0645\\u062a\\u06cc\",\"mobile\":\"09127095406\",\"confirm_code\":null,\"personal_id\":\"526935\",\"status\":\"0\",\"position_id\":71,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:30.000000Z\",\"updated_at\":\"2025-12-15T06:14:30.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:30', '2025-12-15 02:44:30'),
(796, 'User', 'user created', 'App\\Models\\User', 'created', 179, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0633\\u062d\\u0631\",\"last_name\":\"\\u0645\\u06a9\\u06cc\",\"mobile\":\"09124223242\",\"confirm_code\":null,\"personal_id\":\"359920\",\"status\":\"0\",\"position_id\":72,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:14:30.000000Z\",\"updated_at\":\"2025-12-15T06:14:30.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:44:30', '2025-12-15 02:44:30'),
(797, 'User', 'user created', 'App\\Models\\User', 'created', 180, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0631\\u06cc\\u0646\\u0627\\u0632\",\"last_name\":\"\\u062d\\u0642\\u06cc\\u0642\\u06cc\",\"mobile\":\"09370068263\",\"confirm_code\":null,\"personal_id\":\"113618\",\"status\":\"1\",\"position_id\":41,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:16:48.000000Z\",\"updated_at\":\"2025-12-15T06:16:48.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:46:48', '2025-12-15 02:46:48'),
(798, 'User', 'user created', 'App\\Models\\User', 'created', 181, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0641\\u0631\\u062a\\u0627\\u0634\",\"last_name\":\"\\u0622\\u0630\\u0631\\u0633\\u06cc\\u0646\\u0627\",\"mobile\":\"09355870998\",\"confirm_code\":null,\"personal_id\":\"284566\",\"status\":\"1\",\"position_id\":34,\"photo_id\":null,\"email\":null,\"created_at\":\"2025-12-15T06:18:11.000000Z\",\"updated_at\":\"2025-12-15T06:18:11.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 02:48:11', '2025-12-15 02:48:11'),
(799, 'User', 'user updated', 'App\\Models\\User', 'updated', 102, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"638765\",\"updated_at\":\"2025-12-15T06:18:54.000000Z\"},\"old\":{\"confirm_code\":null,\"updated_at\":\"2025-12-15T06:14:14.000000Z\"}}', NULL, '2025-12-15 02:48:55', '2025-12-15 02:48:55'),
(800, 'User', 'user updated', 'App\\Models\\User', 'updated', 102, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-15T06:19:04.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T06:18:54.000000Z\"}}', NULL, '2025-12-15 02:49:04', '2025-12-15 02:49:04'),
(801, 'User', 'user updated', 'App\\Models\\User', 'updated', 14, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"680571\",\"updated_at\":\"2025-12-15T07:41:32.000000Z\"},\"old\":{\"confirm_code\":null,\"updated_at\":\"2025-10-19T11:18:49.000000Z\"}}', NULL, '2025-12-15 04:11:32', '2025-12-15 04:11:32'),
(802, 'User', 'user updated', 'App\\Models\\User', 'updated', 14, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-15T07:41:43.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T07:41:32.000000Z\"}}', NULL, '2025-12-15 04:11:43', '2025-12-15 04:11:43'),
(803, 'User', 'user updated', 'App\\Models\\User', 'updated', 14, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"235420\",\"updated_at\":\"2025-12-15T07:42:53.000000Z\"},\"old\":{\"confirm_code\":\"680571\",\"updated_at\":\"2025-12-15T07:41:43.000000Z\"}}', NULL, '2025-12-15 04:12:53', '2025-12-15 04:12:53'),
(804, 'User', 'user updated', 'App\\Models\\User', 'updated', 14, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-15T07:43:00.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T07:42:53.000000Z\"}}', NULL, '2025-12-15 04:13:01', '2025-12-15 04:13:01'),
(805, 'User', 'user updated', 'App\\Models\\User', 'updated', 102, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"578978\",\"updated_at\":\"2025-12-15T08:21:08.000000Z\"},\"old\":{\"confirm_code\":\"638765\",\"updated_at\":\"2025-12-15T06:19:04.000000Z\"}}', NULL, '2025-12-15 04:51:08', '2025-12-15 04:51:08'),
(806, 'User', 'user updated', 'App\\Models\\User', 'updated', 102, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-15T08:21:16.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T08:21:08.000000Z\"}}', NULL, '2025-12-15 04:51:16', '2025-12-15 04:51:16'),
(807, 'project', 'task has been created', 'App\\Models\\Project', 'created', 47, 'App\\Models\\User', 102, '{\"attributes\":{\"approving_manager\":101,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/24 11:57:00\",\"end_date\":null,\"manager_id\":102,\"category_id\":null,\"department_id\":19,\"brand_id\":null,\"project_code\":\"P_204786\",\"deleted_at\":null,\"updated_at\":\"2025-12-15T08:28:43.000000Z\",\"created_at\":\"2025-12-15T08:28:43.000000Z\"}}', NULL, '2025-12-15 04:58:43', '2025-12-15 04:58:43'),
(808, 'task', 'task has been created', 'App\\Models\\Task', 'created', 110, 'App\\Models\\User', 102, '{\"attributes\":{\"title\":\"\\u067e\\u06cc\\u06af\\u06cc\\u0631\\u06cc \\u0645\\u062d\\u0635\\u0648\\u0644\\u062a \\u0647\\u06cc\\u0631\\u0648\",\"description\":null,\"task_code\":\"T_462909\",\"status\":\"0\",\"duration\":2,\"priority\":\"1\",\"parent_id\":null,\"project_id\":47,\"manager_check\":\"1\",\"manager_id\":101,\"watcher_id\":102,\"manager_verify\":\"0\",\"start_date\":\"1404\\/09\\/23\",\"end_date\":\"1404\\/09\\/25\",\"created_at\":\"2025-12-15T08:30:11.000000Z\",\"updated_at\":\"2025-12-15T08:30:11.000000Z\",\"deleted_at\":null}}', NULL, '2025-12-15 05:00:11', '2025-12-15 05:00:11'),
(809, 'User', 'user updated', 'App\\Models\\User', 'updated', 101, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"950683\",\"updated_at\":\"2025-12-15T08:31:47.000000Z\"},\"old\":{\"confirm_code\":null,\"updated_at\":\"2025-12-15T06:14:14.000000Z\"}}', NULL, '2025-12-15 05:01:47', '2025-12-15 05:01:47'),
(810, 'User', 'user updated', 'App\\Models\\User', 'updated', 101, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2025-12-15T08:31:57.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T08:31:47.000000Z\"}}', NULL, '2025-12-15 05:01:57', '2025-12-15 05:01:57'),
(811, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"360932\",\"updated_at\":\"2026-04-18T05:33:09.000000Z\"},\"old\":{\"confirm_code\":\"569986\",\"updated_at\":\"2025-12-15T05:57:23.000000Z\"}}', NULL, '2026-04-18 02:03:09', '2026-04-18 02:03:09'),
(812, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-18T05:33:43.000000Z\"},\"old\":{\"updated_at\":\"2026-04-18T05:33:09.000000Z\"}}', NULL, '2026-04-18 02:03:43', '2026-04-18 02:03:43'),
(813, 'User', 'user updated', 'App\\Models\\User', 'updated', 180, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"890933\",\"updated_at\":\"2026-04-18T07:54:17.000000Z\"},\"old\":{\"confirm_code\":null,\"updated_at\":\"2025-12-15T06:16:48.000000Z\"}}', NULL, '2026-04-18 04:24:17', '2026-04-18 04:24:17'),
(814, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"518443\",\"updated_at\":\"2026-04-18T07:54:48.000000Z\"},\"old\":{\"confirm_code\":\"850853\",\"updated_at\":\"2025-12-15T04:30:17.000000Z\"}}', NULL, '2026-04-18 04:24:48', '2026-04-18 04:24:48'),
(815, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-18T07:54:57.000000Z\"},\"old\":{\"updated_at\":\"2026-04-18T07:54:48.000000Z\"}}', NULL, '2026-04-18 04:24:57', '2026-04-18 04:24:57'),
(816, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"531708\",\"updated_at\":\"2026-04-19T05:46:16.000000Z\"},\"old\":{\"confirm_code\":\"518443\",\"updated_at\":\"2026-04-18T07:54:57.000000Z\"}}', NULL, '2026-04-19 02:16:16', '2026-04-19 02:16:16'),
(817, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"294931\",\"updated_at\":\"2026-04-19T05:57:34.000000Z\"},\"old\":{\"confirm_code\":\"531708\",\"updated_at\":\"2026-04-19T05:46:16.000000Z\"}}', NULL, '2026-04-19 02:27:34', '2026-04-19 02:27:34'),
(818, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-19T05:58:10.000000Z\"},\"old\":{\"updated_at\":\"2026-04-19T05:57:34.000000Z\"}}', NULL, '2026-04-19 02:28:10', '2026-04-19 02:28:10'),
(819, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 22, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a\",\"check\":\"0\",\"task_id\":73,\"created_at\":\"2026-04-19T06:01:16.000000Z\",\"updated_at\":\"2026-04-19T06:01:16.000000Z\"}}', NULL, '2026-04-19 02:31:16', '2026-04-19 02:31:16'),
(820, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 23, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a 2\",\"check\":\"0\",\"task_id\":73,\"created_at\":\"2026-04-19T06:01:42.000000Z\",\"updated_at\":\"2026-04-19T06:01:42.000000Z\"}}', NULL, '2026-04-19 02:31:42', '2026-04-19 02:31:42'),
(821, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 24, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a 3\",\"check\":\"0\",\"task_id\":73,\"created_at\":\"2026-04-19T06:01:49.000000Z\",\"updated_at\":\"2026-04-19T06:01:49.000000Z\"}}', NULL, '2026-04-19 02:31:49', '2026-04-19 02:31:49'),
(822, 'User', 'user updated', 'App\\Models\\User', 'updated', 12, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-19T08:40:12.000000Z\"},\"old\":{\"updated_at\":\"2025-10-18T10:23:01.000000Z\"}}', NULL, '2026-04-19 05:10:12', '2026-04-19 05:10:12'),
(823, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"634996\",\"updated_at\":\"2026-04-19T11:16:32.000000Z\"},\"old\":{\"confirm_code\":\"294931\",\"updated_at\":\"2026-04-19T05:58:10.000000Z\"}}', NULL, '2026-04-19 07:46:32', '2026-04-19 07:46:32'),
(824, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-19T11:16:43.000000Z\"},\"old\":{\"updated_at\":\"2026-04-19T11:16:32.000000Z\"}}', NULL, '2026-04-19 07:46:43', '2026-04-19 07:46:43'),
(825, 'task', 'task has been created', 'App\\Models\\Task', 'created', 111, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a \\u062a\\u0633\\u06a9 \\u0628\\u062f\\u0648\\u0646 \\u067e\\u0631\\u0648\\u0698\\u0647\",\"description\":\"\\u062a\\u0633\\u0633\\u0633\\u0633\\u0633\\u0633\\u0633\\u0633\\u0633\\u0633\\u0633\\u0633\\u062a\",\"task_code\":\"T_350632\",\"status\":\"0\",\"duration\":3,\"priority\":\"2\",\"parent_id\":null,\"project_id\":null,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":null,\"manager_verify\":\"0\",\"start_date\":\"1405\\/01\\/30\",\"end_date\":\"1405\\/02\\/02\",\"created_at\":\"2026-04-19T11:32:11.000000Z\",\"updated_at\":\"2026-04-19T11:32:11.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-19 08:02:11', '2026-04-19 08:02:11'),
(826, 'User', 'user updated', 'App\\Models\\User', 'updated', 180, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"361149\",\"updated_at\":\"2026-04-19T12:10:07.000000Z\"},\"old\":{\"confirm_code\":\"890933\",\"updated_at\":\"2026-04-18T07:54:17.000000Z\"}}', NULL, '2026-04-19 08:40:07', '2026-04-19 08:40:07'),
(827, 'User', 'user updated', 'App\\Models\\User', 'updated', 180, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-19T12:10:37.000000Z\"},\"old\":{\"updated_at\":\"2026-04-19T12:10:07.000000Z\"}}', NULL, '2026-04-19 08:40:37', '2026-04-19 08:40:37'),
(828, 'task', 'task has been created', 'App\\Models\\Task', 'created', 112, 'App\\Models\\User', 180, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a \\u062a\\u0633\\u06a9 \\u0641\\u0646\\u06cc\",\"description\":\"\\u062a\\u0633\\u062a \\u062a\\u0633\\u06a9 \\u0641\\u0646\\u06cc\",\"task_code\":\"T_417357\",\"status\":\"0\",\"duration\":3,\"priority\":\"2\",\"parent_id\":null,\"project_id\":null,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":null,\"manager_verify\":\"0\",\"start_date\":\"1405\\/01\\/30\",\"end_date\":\"1405\\/02\\/02\",\"created_at\":\"2026-04-19T12:14:59.000000Z\",\"updated_at\":\"2026-04-19T12:14:59.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-19 08:44:59', '2026-04-19 08:44:59'),
(829, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 25, 'App\\Models\\User', 180, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a 1\",\"check\":\"0\",\"task_id\":111,\"created_at\":\"2026-04-19T12:15:47.000000Z\",\"updated_at\":\"2026-04-19T12:15:47.000000Z\"}}', NULL, '2026-04-19 08:45:47', '2026-04-19 08:45:47'),
(830, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 26, 'App\\Models\\User', 180, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a 2\",\"check\":\"0\",\"task_id\":111,\"created_at\":\"2026-04-19T12:15:57.000000Z\",\"updated_at\":\"2026-04-19T12:15:57.000000Z\"}}', NULL, '2026-04-19 08:45:57', '2026-04-19 08:45:57'),
(831, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 27, 'App\\Models\\User', 180, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a 3\",\"check\":\"0\",\"task_id\":111,\"created_at\":\"2026-04-19T12:16:04.000000Z\",\"updated_at\":\"2026-04-19T12:16:04.000000Z\"}}', NULL, '2026-04-19 08:46:04', '2026-04-19 08:46:04'),
(832, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 28, 'App\\Models\\User', 180, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a 4\",\"check\":\"0\",\"task_id\":111,\"created_at\":\"2026-04-19T12:16:11.000000Z\",\"updated_at\":\"2026-04-19T12:16:11.000000Z\"}}', NULL, '2026-04-19 08:46:11', '2026-04-19 08:46:11'),
(833, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 29, 'App\\Models\\User', 180, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a 5\",\"check\":\"0\",\"task_id\":111,\"created_at\":\"2026-04-19T12:16:24.000000Z\",\"updated_at\":\"2026-04-19T12:16:24.000000Z\"}}', NULL, '2026-04-19 08:46:24', '2026-04-19 08:46:24'),
(834, 'TaskCheckList', 'TaskCheckList has been deleted', 'App\\Models\\TaskChecklist', 'deleted', 29, 'App\\Models\\User', 180, '{\"old\":{\"title\":\"\\u062a\\u0633\\u062a 5\",\"check\":\"0\",\"task_id\":111,\"created_at\":\"2026-04-19T12:16:24.000000Z\",\"updated_at\":\"2026-04-19T12:16:24.000000Z\"}}', NULL, '2026-04-19 08:46:28', '2026-04-19 08:46:28'),
(835, 'User', 'user updated', 'App\\Models\\User', 'updated', 180, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"320058\",\"updated_at\":\"2026-04-22T05:18:05.000000Z\"},\"old\":{\"confirm_code\":\"361149\",\"updated_at\":\"2026-04-19T12:10:37.000000Z\"}}', NULL, '2026-04-22 01:48:05', '2026-04-22 01:48:05'),
(836, 'User', 'user updated', 'App\\Models\\User', 'updated', 180, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-22T05:19:19.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T05:18:05.000000Z\"}}', NULL, '2026-04-22 01:49:19', '2026-04-22 01:49:19'),
(837, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"706503\",\"updated_at\":\"2026-04-22T05:25:02.000000Z\"},\"old\":{\"confirm_code\":\"634996\",\"updated_at\":\"2026-04-19T11:16:43.000000Z\"}}', NULL, '2026-04-22 01:55:02', '2026-04-22 01:55:02'),
(838, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-22T05:25:18.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T05:25:02.000000Z\"}}', NULL, '2026-04-22 01:55:18', '2026-04-22 01:55:18'),
(839, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"860448\",\"updated_at\":\"2026-04-22T05:39:50.000000Z\"},\"old\":{\"confirm_code\":\"706503\",\"updated_at\":\"2026-04-22T05:25:18.000000Z\"}}', NULL, '2026-04-22 02:09:50', '2026-04-22 02:09:50'),
(840, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-22T05:40:48.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T05:39:50.000000Z\"}}', NULL, '2026-04-22 02:10:48', '2026-04-22 02:10:48'),
(841, 'project', 'task has been updated', 'App\\Models\\Project', 'updated', 4, 'App\\Models\\User', 15, '{\"attributes\":{\"status\":\"1\",\"updated_at\":\"2026-04-22T05:52:19.000000Z\"},\"old\":{\"status\":\"3\",\"updated_at\":\"2025-12-13T12:52:24.000000Z\"}}', NULL, '2026-04-22 02:22:19', '2026-04-22 02:22:19'),
(842, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 30, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u0627\\u0633\\u062d\",\"check\":\"0\",\"task_id\":4,\"created_at\":\"2026-04-22T06:29:49.000000Z\",\"updated_at\":\"2026-04-22T06:29:49.000000Z\"}}', NULL, '2026-04-22 02:59:49', '2026-04-22 02:59:49'),
(843, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 31, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u0627\\u06cc\\u062c\\u0627\\u062f \\u062f\\u06cc\\u062a\\u0627\\u0628\\u06cc\\u0633\",\"check\":\"0\",\"task_id\":4,\"created_at\":\"2026-04-22T06:30:21.000000Z\",\"updated_at\":\"2026-04-22T06:30:21.000000Z\"}}', NULL, '2026-04-22 03:00:21', '2026-04-22 03:00:21'),
(844, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 32, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u0627\\u06cc\\u062c\\u0627\\u062f \\u062f\\u06cc\\u062a\\u0627\\u0628\\u06cc\\u0633\",\"check\":\"0\",\"task_id\":4,\"created_at\":\"2026-04-22T06:30:22.000000Z\",\"updated_at\":\"2026-04-22T06:30:22.000000Z\"}}', NULL, '2026-04-22 03:00:22', '2026-04-22 03:00:22'),
(845, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 33, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u0627\\u06cc\\u062c\\u0627\\u062f \\u062f\\u06cc\\u062a\\u0627\\u0628\\u06cc\\u0633\",\"check\":\"0\",\"task_id\":4,\"created_at\":\"2026-04-22T06:30:22.000000Z\",\"updated_at\":\"2026-04-22T06:30:22.000000Z\"}}', NULL, '2026-04-22 03:00:22', '2026-04-22 03:00:22'),
(846, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 34, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u0627\\u06cc\\u062c\\u0627\\u062f \\u062f\\u06cc\\u062a\\u0627\\u0628\\u06cc\\u0633\",\"check\":\"0\",\"task_id\":4,\"created_at\":\"2026-04-22T06:30:55.000000Z\",\"updated_at\":\"2026-04-22T06:30:55.000000Z\"}}', NULL, '2026-04-22 03:00:55', '2026-04-22 03:00:55'),
(847, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 35, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u0627\\u06cc\\u062c\\u0627\\u062f \\u062f\\u06cc\\u062a\\u0627\\u0628\\u06cc\\u0633\",\"check\":\"0\",\"task_id\":4,\"created_at\":\"2026-04-22T06:30:55.000000Z\",\"updated_at\":\"2026-04-22T06:30:55.000000Z\"}}', NULL, '2026-04-22 03:00:55', '2026-04-22 03:00:55'),
(848, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 36, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u0627\\u06cc\\u062c\\u0627\\u062f \\u062f\\u06cc\\u062a\\u0627\\u0628\\u06cc\\u0633\",\"check\":\"0\",\"task_id\":4,\"created_at\":\"2026-04-22T06:30:56.000000Z\",\"updated_at\":\"2026-04-22T06:30:56.000000Z\"}}', NULL, '2026-04-22 03:00:56', '2026-04-22 03:00:56'),
(849, 'TaskCheckList', 'TaskCheckList has been created', 'App\\Models\\TaskChecklist', 'created', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"title\":\"\\u0627\\u06cc\\u062c\\u0627\\u062f \\u062f\\u06cc\\u062a\\u0627\\u0628\\u06cc\\u0633\",\"check\":\"0\",\"task_id\":4,\"created_at\":\"2026-04-22T06:30:56.000000Z\",\"updated_at\":\"2026-04-22T06:30:56.000000Z\"}}', NULL, '2026-04-22 03:00:56', '2026-04-22 03:00:56'),
(850, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"849849\",\"updated_at\":\"2026-04-22T07:00:18.000000Z\"},\"old\":{\"confirm_code\":\"360932\",\"updated_at\":\"2026-04-18T05:33:43.000000Z\"}}', NULL, '2026-04-22 03:30:18', '2026-04-22 03:30:18'),
(851, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-22T07:00:29.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T07:00:18.000000Z\"}}', NULL, '2026-04-22 03:30:29', '2026-04-22 03:30:29'),
(852, 'User', 'user updated', 'App\\Models\\User', 'updated', 180, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"827019\",\"updated_at\":\"2026-04-22T07:43:18.000000Z\"},\"old\":{\"confirm_code\":\"320058\",\"updated_at\":\"2026-04-22T05:19:19.000000Z\"}}', NULL, '2026-04-22 04:13:18', '2026-04-22 04:13:18'),
(853, 'User', 'user updated', 'App\\Models\\User', 'updated', 180, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"721003\",\"updated_at\":\"2026-04-22T07:44:39.000000Z\"},\"old\":{\"confirm_code\":\"827019\",\"updated_at\":\"2026-04-22T07:43:18.000000Z\"}}', NULL, '2026-04-22 04:14:39', '2026-04-22 04:14:39'),
(854, 'User', 'user updated', 'App\\Models\\User', 'updated', 180, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-22T07:45:17.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T07:44:39.000000Z\"}}', NULL, '2026-04-22 04:15:18', '2026-04-22 04:15:18'),
(855, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"532736\",\"updated_at\":\"2026-04-22T08:12:31.000000Z\"},\"old\":{\"confirm_code\":null,\"updated_at\":\"2025-12-15T06:14:22.000000Z\"}}', NULL, '2026-04-22 04:42:31', '2026-04-22 04:42:31'),
(856, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-22T08:12:47.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T08:12:31.000000Z\"}}', NULL, '2026-04-22 04:42:47', '2026-04-22 04:42:47'),
(857, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"233285\",\"updated_at\":\"2026-04-22T08:19:02.000000Z\"},\"old\":{\"confirm_code\":\"532736\",\"updated_at\":\"2026-04-22T08:12:47.000000Z\"}}', NULL, '2026-04-22 04:49:02', '2026-04-22 04:49:02'),
(858, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-22T08:19:28.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T08:19:02.000000Z\"}}', NULL, '2026-04-22 04:49:28', '2026-04-22 04:49:28'),
(859, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"723718\",\"updated_at\":\"2026-04-22T08:26:35.000000Z\"},\"old\":{\"confirm_code\":\"233285\",\"updated_at\":\"2026-04-22T08:19:28.000000Z\"}}', NULL, '2026-04-22 04:56:35', '2026-04-22 04:56:35'),
(860, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-22T08:26:48.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T08:26:35.000000Z\"}}', NULL, '2026-04-22 04:56:48', '2026-04-22 04:56:48'),
(861, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"607910\",\"updated_at\":\"2026-04-22T08:34:47.000000Z\"},\"old\":{\"confirm_code\":\"723718\",\"updated_at\":\"2026-04-22T08:26:48.000000Z\"}}', NULL, '2026-04-22 05:04:47', '2026-04-22 05:04:47'),
(862, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"639704\",\"updated_at\":\"2026-04-22T08:36:04.000000Z\"},\"old\":{\"confirm_code\":\"607910\",\"updated_at\":\"2026-04-22T08:34:47.000000Z\"}}', NULL, '2026-04-22 05:06:04', '2026-04-22 05:06:04'),
(863, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"948770\",\"updated_at\":\"2026-04-22T08:37:32.000000Z\"},\"old\":{\"confirm_code\":\"639704\",\"updated_at\":\"2026-04-22T08:36:04.000000Z\"}}', NULL, '2026-04-22 05:07:32', '2026-04-22 05:07:32'),
(864, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"750361\",\"updated_at\":\"2026-04-22T08:47:13.000000Z\"},\"old\":{\"confirm_code\":\"948770\",\"updated_at\":\"2026-04-22T08:37:32.000000Z\"}}', NULL, '2026-04-22 05:17:13', '2026-04-22 05:17:13'),
(865, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-22T08:48:06.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T08:47:13.000000Z\"}}', NULL, '2026-04-22 05:18:06', '2026-04-22 05:18:06'),
(866, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"116270\",\"updated_at\":\"2026-04-22T09:19:18.000000Z\"},\"old\":{\"confirm_code\":\"750361\",\"updated_at\":\"2026-04-22T08:48:06.000000Z\"}}', NULL, '2026-04-22 05:49:18', '2026-04-22 05:49:18'),
(867, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"updated_at\":\"2026-04-22T09:19:26.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T09:19:18.000000Z\"}}', NULL, '2026-04-22 05:49:26', '2026-04-22 05:49:26'),
(868, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"465631\",\"updated_at\":\"2026-04-22T09:56:20.000000Z\"},\"old\":{\"confirm_code\":\"116270\",\"updated_at\":\"2026-04-22T09:19:26.000000Z\"}}', NULL, '2026-04-22 06:26:20', '2026-04-22 06:26:20'),
(869, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, NULL, NULL, '{\"attributes\":{\"confirm_code\":\"930621\",\"updated_at\":\"2026-04-22T09:58:32.000000Z\"},\"old\":{\"confirm_code\":\"465631\",\"updated_at\":\"2026-04-22T09:56:20.000000Z\"}}', NULL, '2026-04-22 06:28:32', '2026-04-22 06:28:32'),
(870, 'User', 'user updated', 'App\\Models\\User', 'updated', 181, 'App\\Models\\User', 1, '{\"attributes\":{\"updated_at\":\"2026-04-22T10:47:52.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T06:18:11.000000Z\"}}', NULL, '2026-04-22 07:17:52', '2026-04-22 07:17:52'),
(871, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"position_id\":1,\"updated_at\":\"2026-04-22T11:07:28.000000Z\"},\"old\":{\"position_id\":3,\"updated_at\":\"2026-04-22T07:00:29.000000Z\"}}', NULL, '2026-04-22 07:37:28', '2026-04-22 07:37:28'),
(872, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"updated_at\":\"2026-04-22T11:09:37.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T11:07:28.000000Z\"}}', NULL, '2026-04-22 07:39:37', '2026-04-22 07:39:37'),
(873, 'User', 'user updated', 'App\\Models\\User', 'updated', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"updated_at\":\"2026-04-22T11:13:18.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T11:09:37.000000Z\"}}', NULL, '2026-04-22 07:43:18', '2026-04-22 07:43:18'),
(874, 'User', 'user updated', 'App\\Models\\User', 'updated', 183, 'App\\Models\\User', 1, '{\"attributes\":{\"updated_at\":\"2026-04-22T11:17:31.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T09:58:32.000000Z\"}}', NULL, '2026-04-22 07:47:31', '2026-04-22 07:47:31'),
(875, 'User', 'user updated', 'App\\Models\\User', 'updated', 141, 'App\\Models\\User', 1, '{\"attributes\":{\"updated_at\":\"2026-04-25T04:28:48.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T06:14:22.000000Z\"}}', NULL, '2026-04-25 00:58:48', '2026-04-25 00:58:48');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(876, 'User', 'user updated', 'App\\Models\\User', 'updated', 15, 'App\\Models\\User', 1, '{\"attributes\":{\"updated_at\":\"2026-04-25T06:59:20.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T05:40:48.000000Z\"}}', NULL, '2026-04-25 03:29:20', '2026-04-25 03:29:20'),
(881, 'project', 'project has been created', 'App\\Models\\Project', 'created', 52, 'App\\Models\\User', 15, '{\"attributes\":{\"approving_manager\":122,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u062a\\u0633\\u062a\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1405\\/02\\/05 09:26:00\",\"end_date\":\"1405\\/08\\/30 16:30:00\",\"manager_id\":15,\"category_id\":4,\"department_id\":7,\"implementeunit_id\":8,\"brand_id\":null,\"project_code\":\"P_212940\",\"deleted_at\":null,\"updated_at\":\"2026-04-25T09:59:25.000000Z\",\"created_at\":\"2026-04-25T09:59:25.000000Z\"}}', NULL, '2026-04-25 06:29:25', '2026-04-25 06:29:25'),
(882, 'project', 'project has been created', 'App\\Models\\Project', 'created', 53, 'App\\Models\\User', 141, '{\"attributes\":{\"approving_manager\":122,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u06cc\\u0648\\u0648\\u06cc\\u0646\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1405\\/02\\/05 09:00:00\",\"end_date\":\"1405\\/08\\/30 16:30:00\",\"manager_id\":141,\"category_id\":4,\"department_id\":20,\"implementeunit_id\":8,\"brand_id\":33,\"project_code\":\"P_366341\",\"deleted_at\":null,\"updated_at\":\"2026-04-25T10:12:37.000000Z\",\"created_at\":\"2026-04-25T10:12:37.000000Z\"}}', NULL, '2026-04-25 06:42:37', '2026-04-25 06:42:37'),
(883, 'project', 'project has been created', 'App\\Models\\Project', 'created', 54, 'App\\Models\\User', 1, '{\"attributes\":{\"approving_manager\":null,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u0646\\u062a\\u0633\\u0631\\u0630\\u062f\\u0633\\u062a\\u0646\\u0628\\u0631\\u062f\\u0633\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1405\\/02\\/05 14:48:00\",\"end_date\":\"1405\\/02\\/26 14:48:00\",\"manager_id\":122,\"category_id\":4,\"department_id\":7,\"implementeunit_id\":8,\"brand_id\":33,\"project_code\":\"P_219920\",\"deleted_at\":null,\"updated_at\":\"2026-04-25T11:20:55.000000Z\",\"created_at\":\"2026-04-25T11:20:55.000000Z\"}}', NULL, '2026-04-25 07:50:55', '2026-04-25 07:50:55'),
(884, 'project', 'project has been updated', 'App\\Models\\Project', 'updated', 53, 'App\\Models\\User', 141, '{\"attributes\":{\"status\":\"4\",\"updated_at\":\"2026-04-25T11:26:05.000000Z\"},\"old\":{\"status\":\"0\",\"updated_at\":\"2026-04-25T10:12:37.000000Z\"}}', NULL, '2026-04-25 07:56:05', '2026-04-25 07:56:05'),
(885, 'project', 'project has been created', 'App\\Models\\Project', 'created', 55, 'App\\Models\\User', 183, '{\"attributes\":{\"approving_manager\":null,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u06cc\\u0648\\u0648\\u06cc\\u0646\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1405\\/02\\/05 09:00:00\",\"end_date\":\"1405\\/08\\/30 16:30:00\",\"manager_id\":122,\"category_id\":4,\"department_id\":7,\"implementeunit_id\":8,\"brand_id\":33,\"project_code\":\"P_722192\",\"deleted_at\":null,\"updated_at\":\"2026-04-25T11:26:41.000000Z\",\"created_at\":\"2026-04-25T11:26:41.000000Z\"}}', NULL, '2026-04-25 07:56:41', '2026-04-25 07:56:41'),
(886, 'project', 'project has been deleted', 'App\\Models\\Project', 'deleted', 53, 'App\\Models\\User', 183, '{\"old\":{\"approving_manager\":122,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u06cc\\u0648\\u0648\\u06cc\\u0646\",\"status\":\"4\",\"start_todo_date\":null,\"start_date\":\"1405\\/02\\/05 09:00:00\",\"end_date\":\"1405\\/08\\/30 16:30:00\",\"manager_id\":141,\"category_id\":4,\"department_id\":20,\"implementeunit_id\":8,\"brand_id\":33,\"project_code\":\"P_366341\",\"deleted_at\":\"2026-04-25T11:27:10.000000Z\",\"updated_at\":\"2026-04-25T11:27:10.000000Z\",\"created_at\":\"2026-04-25T10:12:37.000000Z\"}}', NULL, '2026-04-25 07:57:10', '2026-04-25 07:57:10'),
(887, 'User', 'user updated', 'App\\Models\\User', 'updated', 181, 'App\\Models\\User', 1, '{\"attributes\":{\"updated_at\":\"2026-04-26T07:57:27.000000Z\"},\"old\":{\"updated_at\":\"2026-04-22T10:47:52.000000Z\"}}', NULL, '2026-04-26 04:27:27', '2026-04-26 04:27:27'),
(888, 'project', 'project has been updated', 'App\\Models\\Project', 'updated', 55, 'App\\Models\\User', 1, '{\"attributes\":{\"manager_id\":181,\"updated_at\":\"2026-04-26T09:56:14.000000Z\"},\"old\":{\"manager_id\":122,\"updated_at\":\"2026-04-25T11:26:41.000000Z\"}}', NULL, '2026-04-26 06:26:14', '2026-04-26 06:26:14'),
(889, 'User', 'user updated', 'App\\Models\\User', 'updated', 122, 'App\\Models\\User', 1, '{\"attributes\":{\"updated_at\":\"2026-04-27T05:10:17.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T06:14:18.000000Z\"}}', NULL, '2026-04-27 01:40:17', '2026-04-27 01:40:17'),
(890, 'User', 'user updated', 'App\\Models\\User', 'updated', 122, 'App\\Models\\User', 1, '{\"attributes\":{\"updated_at\":\"2026-04-27T05:33:46.000000Z\"},\"old\":{\"updated_at\":\"2026-04-27T05:10:17.000000Z\"}}', NULL, '2026-04-27 02:03:46', '2026-04-27 02:03:46'),
(891, 'User', 'user updated', 'App\\Models\\User', 'updated', 122, 'App\\Models\\User', 1, '{\"attributes\":{\"email\":\"d.yousefi@solico-group.ir\",\"updated_at\":\"2026-04-27T05:35:51.000000Z\"},\"old\":{\"email\":null,\"updated_at\":\"2026-04-27T05:33:46.000000Z\"}}', NULL, '2026-04-27 02:05:51', '2026-04-27 02:05:51'),
(892, 'User', 'user created', 'App\\Models\\User', 'created', 184, 'App\\Models\\User', 1, '{\"attributes\":{\"first_name\":\"\\u0645\\u0647\\u0633\\u0627\",\"last_name\":\"\\u0627\\u0645\\u0627\\u0645\\u06cc\",\"mobile\":\"09337763263\",\"confirm_code\":null,\"personal_id\":\"5465464\",\"status\":\"0\",\"position_id\":39,\"photo_id\":null,\"email\":\"m.emamighamsari@solico-group.com\",\"created_at\":\"2026-04-27T09:35:55.000000Z\",\"updated_at\":\"2026-04-27T09:35:55.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 06:05:55', '2026-04-27 06:05:55'),
(893, 'User', 'user updated', 'App\\Models\\User', 'updated', 184, 'App\\Models\\User', 1, '{\"attributes\":{\"status\":\"1\",\"updated_at\":\"2026-04-27T09:37:16.000000Z\"},\"old\":{\"status\":\"0\",\"updated_at\":\"2026-04-27T09:35:55.000000Z\"}}', NULL, '2026-04-27 06:07:16', '2026-04-27 06:07:16'),
(894, 'project', 'project has been deleted', 'App\\Models\\Project', 'deleted', 2, 'App\\Models\\User', 1, '{\"old\":{\"approving_manager\":16,\"approve_need\":\"0\",\"approve_verify\":\"0\",\"name\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062a\\u0633\\u062a\\u06cc\",\"status\":\"1\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/03 11:08:00\",\"end_date\":\"1404\\/07\\/30 11:08:00\",\"manager_id\":12,\"category_id\":1,\"department_id\":1,\"implementeunit_id\":null,\"brand_id\":1,\"project_code\":\"P_889161\",\"deleted_at\":\"2026-04-27T09:37:47.000000Z\",\"updated_at\":\"2026-04-27T09:37:47.000000Z\",\"created_at\":\"2025-10-19T07:44:46.000000Z\"}}', NULL, '2026-04-27 06:07:47', '2026-04-27 06:07:47'),
(895, 'project', 'project has been deleted', 'App\\Models\\Project', 'deleted', 3, 'App\\Models\\User', 1, '{\"old\":{\"approving_manager\":16,\"approve_need\":\"0\",\"approve_verify\":\"0\",\"name\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062a\\u0633\\u062a\\u06cc\",\"status\":\"2\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/03 11:08:00\",\"end_date\":\"1404\\/07\\/30 11:08:00\",\"manager_id\":12,\"category_id\":1,\"department_id\":1,\"implementeunit_id\":null,\"brand_id\":1,\"project_code\":\"P_893690\",\"deleted_at\":\"2026-04-27T09:38:20.000000Z\",\"updated_at\":\"2026-04-27T09:38:20.000000Z\",\"created_at\":\"2025-10-19T07:48:15.000000Z\"}}', NULL, '2026-04-27 06:08:20', '2026-04-27 06:08:20'),
(896, 'project', 'project has been deleted', 'App\\Models\\Project', 'deleted', 4, 'App\\Models\\User', 1, '{\"old\":{\"approving_manager\":16,\"approve_need\":\"0\",\"approve_verify\":\"0\",\"name\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062a\\u0633\\u062a\\u06cc\",\"status\":\"1\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/03 11:08:00\",\"end_date\":\"1404\\/07\\/30 11:08:00\",\"manager_id\":15,\"category_id\":1,\"department_id\":1,\"implementeunit_id\":null,\"brand_id\":1,\"project_code\":\"P_578382\",\"deleted_at\":\"2026-04-27T09:38:47.000000Z\",\"updated_at\":\"2026-04-27T09:38:47.000000Z\",\"created_at\":\"2025-10-19T07:49:17.000000Z\"}}', NULL, '2026-04-27 06:08:47', '2026-04-27 06:08:47'),
(897, 'project', 'project has been deleted', 'App\\Models\\Project', 'deleted', 47, 'App\\Models\\User', 1, '{\"old\":{\"approving_manager\":101,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0632\\u0646\\u062a\\u06cc\\u0634\\u0646 \\u06af\\u0631\\u0648\\u0647 \\u0633\\u0648\\u0644\\u06cc\\u06a9\\u0648\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1404\\/08\\/24 11:57:00\",\"end_date\":null,\"manager_id\":102,\"category_id\":null,\"department_id\":19,\"implementeunit_id\":null,\"brand_id\":null,\"project_code\":\"P_204786\",\"deleted_at\":\"2026-04-27T09:39:17.000000Z\",\"updated_at\":\"2026-04-27T09:39:17.000000Z\",\"created_at\":\"2025-12-15T08:28:43.000000Z\"}}', NULL, '2026-04-27 06:09:17', '2026-04-27 06:09:17'),
(898, 'project', 'project has been deleted', 'App\\Models\\Project', 'deleted', 52, 'App\\Models\\User', 1, '{\"old\":{\"approving_manager\":122,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u062a\\u0633\\u062a\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1405\\/02\\/05 09:26:00\",\"end_date\":\"1405\\/08\\/30 16:30:00\",\"manager_id\":15,\"category_id\":4,\"department_id\":7,\"implementeunit_id\":8,\"brand_id\":null,\"project_code\":\"P_212940\",\"deleted_at\":\"2026-04-27T09:39:58.000000Z\",\"updated_at\":\"2026-04-27T09:39:58.000000Z\",\"created_at\":\"2026-04-25T09:59:25.000000Z\"}}', NULL, '2026-04-27 06:09:58', '2026-04-27 06:09:58'),
(899, 'project', 'project has been deleted', 'App\\Models\\Project', 'deleted', 54, 'App\\Models\\User', 1, '{\"old\":{\"approving_manager\":null,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u0646\\u062a\\u0633\\u0631\\u0630\\u062f\\u0633\\u062a\\u0646\\u0628\\u0631\\u062f\\u0633\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"1405\\/02\\/05 14:48:00\",\"end_date\":\"1405\\/02\\/26 14:48:00\",\"manager_id\":122,\"category_id\":4,\"department_id\":7,\"implementeunit_id\":8,\"brand_id\":33,\"project_code\":\"P_219920\",\"deleted_at\":\"2026-04-27T09:40:30.000000Z\",\"updated_at\":\"2026-04-27T09:40:30.000000Z\",\"created_at\":\"2026-04-25T11:20:55.000000Z\"}}', NULL, '2026-04-27 06:10:30', '2026-04-27 06:10:30'),
(900, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 2, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u062a\\u0633\\u06a9 \\u062a\\u0633\\u062a\\u06cc2\",\"description\":\"\\u0644\\u0648\\u0631\\u0645 \\u0627\\u06cc\\u067e\\u0633\\u0648\\u0645 \\u0645\\u062a\\u0646 \\u0633\\u0627\\u062e\\u062a\\u06af\\u06cc \\u0628\\u0627 \\u062a\\u0648\\u0644\\u06cc\\u062f \\u0633\\u0627\\u062f\\u06af\\u06cc \\u0646\\u0627\\u0645\\u0641\\u0647\\u0648\\u0645 \\u0627\\u0632 \\u0635\\u0646\\u0639\\u062a \\u0686\\u0627\\u067e\\u060c \\u0648 \\u0628\\u0627 \\u0627\\u0633\\u062a\\u0641\\u0627\\u062f\\u0647 \\u0627\\u0632 \\u0637\\u0631\\u0627\\u062d\\u0627\\u0646 \\u06af\\u0631\\u0627\\u0641\\u06cc\\u06a9 \\u0627\\u0633\\u062a\\u060c \\u0686\\u0627\\u067e\\u06af\\u0631\\u0647\\u0627 \\u0648 \\u0645\\u062a\\u0648\\u0646 \\u0628\\u0644\\u06a9\\u0647 \\u0631\\u0648\\u0632\\u0646\\u0627\\u0645\\u0647 \\u0648 \\u0645\\u062c\\u0644\\u0647 \\u062f\\u0631 \\u0633\\u062a\\u0648\\u0646 \\u0648 \\u0633\\u0637\\u0631\\u0622\\u0646\\u0686\\u0646\\u0627\\u0646 \\u06a9\\u0647 \\u0644\\u0627\\u0632\\u0645 \\u0627\\u0633\\u062a\\u060c \\u0648 \\u0628\\u0631\\u0627\\u06cc \\u0634\\u0631\\u0627\\u06cc\\u0637 \\u0641\\u0639\\u0644\\u06cc \\u062a\\u06a9\\u0646\\u0648\\u0644\\u0648\\u0698\\u06cc \\u0645\\u0648\\u0631\\u062f \\u0646\\u06cc\\u0627\\u0632\\u060c \\u0648 \\u06a9\\u0627\\u0631\\u0628\\u0631\\u062f\\u0647\\u0627\\u06cc \\u0645\\u062a\\u0646\\u0648\\u0639 \\u0628\\u0627 \\u0647\\u062f\\u0641 \\u0628\\u0647\\u0628\\u0648\\u062f \\u0627\\u0628\\u0632\\u0627\\u0631\\u0647\\u0627\\u06cc \\u06a9\\u0627\\u0631\\u0628\\u0631\\u062f\\u06cc \\u0645\\u06cc \\u0628\\u0627\\u0634\\u062f\\u060c \\u06a9\\u062a\\u0627\\u0628\\u0647\\u0627\\u06cc \\u0632\\u06cc\\u0627\\u062f\\u06cc \\u062f\\u0631 \\u0634\\u0635\\u062a \\u0648 \\u0633\\u0647 \\u062f\\u0631\\u0635\\u062f \\u06af\\u0630\\u0634\\u062a\\u0647 \\u062d\\u0627\\u0644 \\u0648 \\u0622\\u06cc\\u0646\\u062f\\u0647\\u060c \\u0634\\u0646\\u0627\\u062e\\u062a \\u0641\\u0631\\u0627\\u0648\\u0627\\u0646 \\u062c\\u0627\\u0645\\u0639\\u0647 \\u0648 \\u0645\\u062a\\u062e\\u0635\\u0635\\u0627\\u0646 \\u0631\\u0627 \\u0645\\u06cc \\u0637\\u0644\\u0628\\u062f\\u060c \\u062a\\u0627 \\u0628\\u0627 \\u0646\\u0631\\u0645 \\u0627\\u0641\\u0632\\u0627\\u0631\\u0647\\u0627 \\u0634\\u0646\\u0627\\u062e\\u062a \\u0628\\u06cc\\u0634\\u062a\\u0631\\u06cc \\u0631\\u0627 \\u0628\\u0631\\u0627\\u06cc \\u0637\\u0631\\u0627\\u062d\\u0627\\u0646 \\u0631\\u0627\\u06cc\\u0627\\u0646\\u0647 \\u0627\\u06cc \\u0639\\u0644\\u06cc \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635 \\u0637\\u0631\\u0627\\u062d\\u0627\\u0646 \\u062e\\u0644\\u0627\\u0642\\u06cc\\u060c \\u0648 \\u0641\\u0631\\u0647\\u0646\\u06af \\u067e\\u06cc\\u0634\\u0631\\u0648 \\u062f\\u0631 \\u0632\\u0628\\u0627\\u0646 \\u0641\\u0627\\u0631\\u0633\\u06cc \\u0627\\u06cc\\u062c\\u0627\\u062f \\u06a9\\u0631\\u062f\\u060c \\u062f\\u0631 \\u0627\\u06cc\\u0646 \\u0635\\u0648\\u0631\\u062a \\u0645\\u06cc \\u062a\\u0648\\u0627\\u0646 \\u0627\\u0645\\u06cc\\u062f \\u062f\\u0627\\u0634\\u062a \\u06a9\\u0647 \\u062a\\u0645\\u0627\\u0645 \\u0648 \\u062f\\u0634\\u0648\\u0627\\u0631\\u06cc \\u0645\\u0648\\u062c\\u0648\\u062f \\u062f\\u0631 \\u0627\\u0631\\u0627\\u0626\\u0647 \\u0631\\u0627\\u0647\\u06a9\\u0627\\u0631\\u0647\\u0627\\u060c \\u0648 \\u0634\\u0631\\u0627\\u06cc\\u0637 \\u0633\\u062e\\u062a \\u062a\\u0627\\u06cc\\u067e \\u0628\\u0647 \\u067e\\u0627\\u06cc\\u0627\\u0646 \\u0631\\u0633\\u062f \\u0648 \\u0632\\u0645\\u0627\\u0646 \\u0645\\u0648\\u0631\\u062f \\u0646\\u06cc\\u0627\\u0632 \\u0634\\u0627\\u0645\\u0644 \\u062d\\u0631\\u0648\\u0641\\u0686\\u06cc\\u0646\\u06cc \\u062f\\u0633\\u062a\\u0627\\u0648\\u0631\\u062f\\u0647\\u0627\\u06cc \\u0627\\u0635\\u0644\\u06cc\\u060c \\u0648 \\u062c\\u0648\\u0627\\u0628\\u06af\\u0648\\u06cc \\u0633\\u0648\\u0627\\u0644\\u0627\\u062a \\u067e\\u06cc\\u0648\\u0633\\u062a\\u0647 \\u0627\\u0647\\u0644 \\u062f\\u0646\\u06cc\\u0627\\u06cc \\u0645\\u0648\\u062c\\u0648\\u062f \\u0637\\u0631\\u0627\\u062d\\u06cc \\u0627\\u0633\\u0627\\u0633\\u0627 \\u0645\\u0648\\u0631\\u062f \\u0627\\u0633\\u062a\\u0641\\u0627\\u062f\\u0647 \\u0642\\u0631\\u0627\\u0631 \\u06af\\u06cc\\u0631\\u062f.\",\"task_code\":\"T_259626\",\"status\":\"1\",\"duration\":10,\"priority\":\"1\",\"parent_id\":null,\"project_id\":3,\"manager_check\":\"0\",\"manager_id\":12,\"watcher_id\":14,\"manager_verify\":\"0\",\"start_date\":\"1404\\/07\\/30 16:16:00\",\"end_date\":null,\"created_at\":\"2025-10-20T12:48:31.000000Z\",\"updated_at\":\"2026-04-27T09:42:56.000000Z\",\"deleted_at\":\"2026-04-27T09:42:56.000000Z\"}}', NULL, '2026-04-27 06:12:56', '2026-04-27 06:12:56'),
(901, 'User', 'user created', 'App\\Models\\User', 'created', 185, 'App\\Models\\User', 183, '{\"attributes\":{\"first_name\":\"\\u0628\\u0647\\u0627\\u0631\\u0647\",\"last_name\":\"\\u0627\\u0633\\u0644\\u0627\\u0645\\u06cc\",\"mobile\":\"09373942679+\",\"confirm_code\":null,\"personal_id\":\"145162\",\"status\":\"0\",\"position_id\":78,\"photo_id\":null,\"email\":\"b.eslami@solico-group.ir\",\"created_at\":\"2026-04-27T10:22:01.000000Z\",\"updated_at\":\"2026-04-27T10:22:01.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 06:52:01', '2026-04-27 06:52:01'),
(902, 'User', 'user updated', 'App\\Models\\User', 'updated', 185, 'App\\Models\\User', 183, '{\"attributes\":{\"status\":\"1\",\"updated_at\":\"2026-04-27T10:22:29.000000Z\"},\"old\":{\"status\":\"0\",\"updated_at\":\"2026-04-27T10:22:01.000000Z\"}}', NULL, '2026-04-27 06:52:29', '2026-04-27 06:52:29'),
(903, 'User', 'user updated', 'App\\Models\\User', 'updated', 185, 'App\\Models\\User', 183, '{\"attributes\":{\"mobile\":\"09373942679\",\"updated_at\":\"2026-04-27T10:23:48.000000Z\"},\"old\":{\"mobile\":\"09373942679+\",\"updated_at\":\"2026-04-27T10:22:29.000000Z\"}}', NULL, '2026-04-27 06:53:48', '2026-04-27 06:53:48'),
(904, 'task', 'task has been created', 'App\\Models\\Task', 'created', 113, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_576799\",\"status\":\"0\",\"duration\":null,\"priority\":\"1\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":\"1405\\/02\\/05 08:00:00\",\"end_date\":\"1405\\/02\\/22 08:00:00\",\"created_at\":\"2026-04-27T10:40:39.000000Z\",\"updated_at\":\"2026-04-27T10:40:39.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 07:10:39', '2026-04-27 07:10:39'),
(905, 'task', 'task has been created', 'App\\Models\\Task', 'created', 114, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632\",\"description\":null,\"task_code\":\"T_661534\",\"status\":\"0\",\"duration\":null,\"priority\":\"1\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":\"1405\\/02\\/22 08:00:00\",\"end_date\":\"1405\\/03\\/09 08:00:00\",\"created_at\":\"2026-04-27T10:58:47.000000Z\",\"updated_at\":\"2026-04-27T10:58:47.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 07:28:47', '2026-04-27 07:28:47'),
(906, 'task', 'task has been created', 'App\\Models\\Task', 'created', 115, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u0648\\u0627\\u06cc\\u0631\\u0641\\u0631\\u06cc\\u0645 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_292190\",\"status\":\"0\",\"duration\":null,\"priority\":\"1\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":\"1405\\/03\\/09 14:32:00\",\"end_date\":\"1405\\/03\\/31 14:33:00\",\"created_at\":\"2026-04-27T11:04:11.000000Z\",\"updated_at\":\"2026-04-27T11:04:11.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 07:34:11', '2026-04-27 07:34:11'),
(907, 'task', 'task has been created', 'App\\Models\\Task', 'created', 116, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u0648\\u0627\\u06cc\\u0631\\u0641\\u0631\\u06cc\\u0645 \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632\",\"description\":null,\"task_code\":\"T_826449\",\"status\":\"0\",\"duration\":null,\"priority\":\"1\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":\"1405\\/04\\/02 14:40:00\",\"end_date\":\"1405\\/02\\/26 14:40:00\",\"created_at\":\"2026-04-27T11:11:55.000000Z\",\"updated_at\":\"2026-04-27T11:11:55.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 07:41:55', '2026-04-27 07:41:55'),
(908, 'task', 'task has been created', 'App\\Models\\Task', 'created', 117, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"dbddgdfg\",\"description\":\"gbhdgdgdgdfgdfg\",\"task_code\":\"T_243631\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"1405\\/02\\/07 14:42:00\",\"end_date\":\"1405\\/02\\/23 14:42:00\",\"created_at\":\"2026-04-27T11:12:23.000000Z\",\"updated_at\":\"2026-04-27T11:12:23.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 07:42:23', '2026-04-27 07:42:23'),
(909, 'task', 'task has been created', 'App\\Models\\Task', 'created', 118, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"dbddgdfg\",\"description\":\"gbhdgdgdgdfgdfg\",\"task_code\":\"T_675836\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"1405\\/02\\/07 14:42:00\",\"end_date\":\"1405\\/02\\/23 14:42:00\",\"created_at\":\"2026-04-27T11:17:26.000000Z\",\"updated_at\":\"2026-04-27T11:17:26.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 07:47:26', '2026-04-27 07:47:26'),
(910, 'task', 'task has been created', 'App\\Models\\Task', 'created', 119, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"dbddgdfg\",\"description\":\"gbhdgdgdgdfgdfg\",\"task_code\":\"T_234250\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"1405\\/02\\/07 14:42:00\",\"end_date\":\"1405\\/02\\/23 14:42:00\",\"created_at\":\"2026-04-27T11:18:17.000000Z\",\"updated_at\":\"2026-04-27T11:18:17.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 07:48:17', '2026-04-27 07:48:17'),
(911, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 117, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"dbddgdfg\",\"description\":\"gbhdgdgdgdfgdfg\",\"task_code\":\"T_243631\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"1405\\/02\\/07 14:42:00\",\"end_date\":\"1405\\/02\\/23 14:42:00\",\"created_at\":\"2026-04-27T11:12:23.000000Z\",\"updated_at\":\"2026-04-27T11:21:32.000000Z\",\"deleted_at\":\"2026-04-27T11:21:32.000000Z\"}}', NULL, '2026-04-27 07:51:32', '2026-04-27 07:51:32'),
(912, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 118, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"dbddgdfg\",\"description\":\"gbhdgdgdgdfgdfg\",\"task_code\":\"T_675836\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"1405\\/02\\/07 14:42:00\",\"end_date\":\"1405\\/02\\/23 14:42:00\",\"created_at\":\"2026-04-27T11:17:26.000000Z\",\"updated_at\":\"2026-04-27T11:22:03.000000Z\",\"deleted_at\":\"2026-04-27T11:22:03.000000Z\"}}', NULL, '2026-04-27 07:52:03', '2026-04-27 07:52:03'),
(913, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 119, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"dbddgdfg\",\"description\":\"gbhdgdgdgdfgdfg\",\"task_code\":\"T_234250\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"1405\\/02\\/07 14:42:00\",\"end_date\":\"1405\\/02\\/23 14:42:00\",\"created_at\":\"2026-04-27T11:18:17.000000Z\",\"updated_at\":\"2026-04-27T11:22:11.000000Z\",\"deleted_at\":\"2026-04-27T11:22:11.000000Z\"}}', NULL, '2026-04-27 07:52:11', '2026-04-27 07:52:11'),
(914, 'task', 'task has been created', 'App\\Models\\Task', 'created', 120, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0648\\u0633\\u0639\\u0647 \\u0628\\u06a9\\u200c\\u0627\\u0650\\u0646\\u062f + \\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0622\\u06cc \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_693479\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"1405\\/04\\/27 14:53:00\",\"end_date\":\"1405\\/05\\/20 14:53:00\",\"created_at\":\"2026-04-27T11:24:57.000000Z\",\"updated_at\":\"2026-04-27T11:24:57.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 07:54:57', '2026-04-27 07:54:57'),
(915, 'task', 'task has been created', 'App\\Models\\Task', 'created', 121, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0648\\u0633\\u0639\\u0647 \\u0628\\u06a9\\u200c\\u0627\\u0650\\u0646\\u062f + \\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0622\\u06cc \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632\",\"description\":null,\"task_code\":\"T_989196\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"1405\\/05\\/21 14:57:00\",\"end_date\":\"1405\\/06\\/14 14:57:00\",\"created_at\":\"2026-04-27T11:33:44.000000Z\",\"updated_at\":\"2026-04-27T11:33:44.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 08:03:44', '2026-04-27 08:03:44'),
(916, 'task', 'task has been created', 'App\\Models\\Task', 'created', 122, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0648\\u0633\\u0639\\u0647 \\u0628\\u06a9\\u200c\\u0627\\u0650\\u0646\\u062f + \\u062a\\u0648\\u0633\\u0639\\u0647 \\u0641\\u0631\\u0627\\u0646\\u062a\\u200c\\u0627\\u0650\\u0646\\u062f + \\u0637\\u0631\\u0627\\u062d\\u06cc \\u0635\\u0641\\u062d\\u0627\\u062a \\u0628\\u0627\\u0642\\u06cc\\u0645\\u0627\\u0646\\u062f\\u0647\",\"description\":null,\"task_code\":\"T_766121\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"1405\\/06\\/15 15:07:00\",\"end_date\":\"1405\\/07\\/18 15:07:00\",\"created_at\":\"2026-04-27T11:39:28.000000Z\",\"updated_at\":\"2026-04-27T11:39:28.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 08:09:28', '2026-04-27 08:09:28'),
(917, 'task', 'task has been created', 'App\\Models\\Task', 'created', 123, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0633\\u062a \\u0648 \\u0644\\u0627\\u0646\\u0686\",\"description\":null,\"task_code\":\"T_468963\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"1405\\/07\\/19 15:11:00\",\"end_date\":\"1405\\/08\\/07 15:11:00\",\"created_at\":\"2026-04-27T11:41:51.000000Z\",\"updated_at\":\"2026-04-27T11:41:51.000000Z\",\"deleted_at\":null}}', NULL, '2026-04-27 08:11:51', '2026-04-27 08:11:51'),
(918, 'User', 'user updated', 'App\\Models\\User', 'updated', 124, 'App\\Models\\User', 183, '{\"attributes\":{\"email\":\"09233296981\",\"updated_at\":\"2026-04-28T08:33:13.000000Z\"},\"old\":{\"email\":null,\"updated_at\":\"2025-12-15T06:14:19.000000Z\"}}', NULL, '2026-04-28 05:03:13', '2026-04-28 05:03:13'),
(919, 'User', 'user updated', 'App\\Models\\User', 'updated', 121, 'App\\Models\\User', 183, '{\"attributes\":{\"personal_id\":\"166383\",\"email\":\"sh.rekabdar@solico-group.com\",\"updated_at\":\"2026-04-29T07:04:42.000000Z\"},\"old\":{\"personal_id\":\"480859\",\"email\":null,\"updated_at\":\"2025-12-15T06:14:18.000000Z\"}}', NULL, '2026-04-29 03:34:42', '2026-04-29 03:34:42'),
(920, 'User', 'user updated', 'App\\Models\\User', 'updated', 126, 'App\\Models\\User', 1, '{\"attributes\":{\"updated_at\":\"2026-05-02T04:37:57.000000Z\"},\"old\":{\"updated_at\":\"2025-12-15T06:14:19.000000Z\"}}', NULL, '2026-05-02 01:07:57', '2026-05-02 01:07:57'),
(921, 'project', 'project has been deleted', 'App\\Models\\Project', 'deleted', 55, 'App\\Models\\User', 1, '{\"old\":{\"approving_manager\":null,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u06cc\\u0648\\u0648\\u06cc\\u0646\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"0000-00-00 00:00:00\",\"end_date\":\"0000-00-00 00:00:00\",\"manager_id\":181,\"category_id\":4,\"department_id\":7,\"implementeunit_id\":8,\"brand_id\":33,\"project_code\":\"P_722192\",\"deleted_at\":\"2026-05-02T07:20:30.000000Z\",\"updated_at\":\"2026-05-02T07:20:30.000000Z\",\"created_at\":\"2026-04-25T11:26:41.000000Z\"}}', NULL, '2026-05-02 03:50:30', '2026-05-02 03:50:30'),
(922, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 113, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_576799\",\"status\":\"0\",\"duration\":null,\"priority\":\"1\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":\"0000-00-00 00:00:00\",\"end_date\":null,\"created_at\":\"2026-04-27T10:40:39.000000Z\",\"updated_at\":\"2026-05-02T07:20:40.000000Z\",\"deleted_at\":\"2026-05-02T07:20:40.000000Z\"}}', NULL, '2026-05-02 03:50:40', '2026-05-02 03:50:40'),
(923, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 114, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632\",\"description\":null,\"task_code\":\"T_661534\",\"status\":\"0\",\"duration\":null,\"priority\":\"1\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":\"0000-00-00 00:00:00\",\"end_date\":null,\"created_at\":\"2026-04-27T10:58:47.000000Z\",\"updated_at\":\"2026-05-02T07:20:44.000000Z\",\"deleted_at\":\"2026-05-02T07:20:44.000000Z\"}}', NULL, '2026-05-02 03:50:44', '2026-05-02 03:50:44'),
(924, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 115, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u0648\\u0627\\u06cc\\u0631\\u0641\\u0631\\u06cc\\u0645 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_292190\",\"status\":\"0\",\"duration\":null,\"priority\":\"1\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":\"0000-00-00 00:00:00\",\"end_date\":null,\"created_at\":\"2026-04-27T11:04:11.000000Z\",\"updated_at\":\"2026-05-02T07:20:48.000000Z\",\"deleted_at\":\"2026-05-02T07:20:48.000000Z\"}}', NULL, '2026-05-02 03:50:48', '2026-05-02 03:50:48'),
(925, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 116, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u0648\\u0627\\u06cc\\u0631\\u0641\\u0631\\u06cc\\u0645 \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632\",\"description\":null,\"task_code\":\"T_826449\",\"status\":\"0\",\"duration\":null,\"priority\":\"1\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":\"0000-00-00 00:00:00\",\"end_date\":null,\"created_at\":\"2026-04-27T11:11:55.000000Z\",\"updated_at\":\"2026-05-02T07:20:53.000000Z\",\"deleted_at\":\"2026-05-02T07:20:53.000000Z\"}}', NULL, '2026-05-02 03:50:53', '2026-05-02 03:50:53'),
(926, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 120, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u062a\\u0648\\u0633\\u0639\\u0647 \\u0628\\u06a9\\u200c\\u0627\\u0650\\u0646\\u062f + \\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0622\\u06cc \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_693479\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"0000-00-00 00:00:00\",\"end_date\":null,\"created_at\":\"2026-04-27T11:24:57.000000Z\",\"updated_at\":\"2026-05-02T07:20:57.000000Z\",\"deleted_at\":\"2026-05-02T07:20:57.000000Z\"}}', NULL, '2026-05-02 03:50:57', '2026-05-02 03:50:57'),
(927, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 121, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u062a\\u0648\\u0633\\u0639\\u0647 \\u0628\\u06a9\\u200c\\u0627\\u0650\\u0646\\u062f + \\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0622\\u06cc \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632\",\"description\":null,\"task_code\":\"T_989196\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"0000-00-00 00:00:00\",\"end_date\":null,\"created_at\":\"2026-04-27T11:33:44.000000Z\",\"updated_at\":\"2026-05-02T07:21:01.000000Z\",\"deleted_at\":\"2026-05-02T07:21:01.000000Z\"}}', NULL, '2026-05-02 03:51:01', '2026-05-02 03:51:01'),
(928, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 122, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u062a\\u0648\\u0633\\u0639\\u0647 \\u0628\\u06a9\\u200c\\u0627\\u0650\\u0646\\u062f + \\u062a\\u0648\\u0633\\u0639\\u0647 \\u0641\\u0631\\u0627\\u0646\\u062a\\u200c\\u0627\\u0650\\u0646\\u062f + \\u0637\\u0631\\u0627\\u062d\\u06cc \\u0635\\u0641\\u062d\\u0627\\u062a \\u0628\\u0627\\u0642\\u06cc\\u0645\\u0627\\u0646\\u062f\\u0647\",\"description\":null,\"task_code\":\"T_766121\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"0000-00-00 00:00:00\",\"end_date\":null,\"created_at\":\"2026-04-27T11:39:28.000000Z\",\"updated_at\":\"2026-05-02T07:21:12.000000Z\",\"deleted_at\":\"2026-05-02T07:21:12.000000Z\"}}', NULL, '2026-05-02 03:51:12', '2026-05-02 03:51:12'),
(929, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 123, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u062a\\u0633\\u062a \\u0648 \\u0644\\u0627\\u0646\\u0686\",\"description\":null,\"task_code\":\"T_468963\",\"status\":\"0\",\"duration\":null,\"priority\":\"2\",\"parent_id\":null,\"project_id\":55,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"0000-00-00 00:00:00\",\"end_date\":null,\"created_at\":\"2026-04-27T11:41:51.000000Z\",\"updated_at\":\"2026-05-02T07:21:17.000000Z\",\"deleted_at\":\"2026-05-02T07:21:17.000000Z\"}}', NULL, '2026-05-02 03:51:17', '2026-05-02 03:51:17'),
(930, 'project', 'project has been created', 'App\\Models\\Project', 'created', 56, 'App\\Models\\User', 181, '{\"attributes\":{\"approving_manager\":null,\"approve_need\":null,\"approve_verify\":null,\"name\":\"\\u06cc\\u0648\\u0648\\u06cc\\u0646\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"2026-04-25 11:00:00\",\"end_date\":\"2026-04-25 11:00:00\",\"manager_id\":181,\"category_id\":2,\"department_id\":20,\"implementeunit_id\":8,\"brand_id\":33,\"project_code\":\"P_561732\",\"deleted_at\":null,\"updated_at\":\"2026-05-02T07:32:10.000000Z\",\"created_at\":\"2026-05-02T07:32:10.000000Z\"}}', NULL, '2026-05-02 04:02:10', '2026-05-02 04:02:10'),
(931, 'task', 'task has been created', 'App\\Models\\Task', 'created', 124, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_467573\",\"status\":\"0\",\"duration\":2,\"priority\":\"1\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"1\",\"manager_id\":181,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-02T07:39:56.000000Z\",\"updated_at\":\"2026-05-02T07:39:56.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-02 04:09:56', '2026-05-02 04:09:56'),
(932, 'task', 'task has been created', 'App\\Models\\Task', 'created', 125, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_197511\",\"status\":\"0\",\"duration\":2,\"priority\":\"1\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"1\",\"manager_id\":181,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-02T07:42:20.000000Z\",\"updated_at\":\"2026-05-02T07:42:20.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-02 04:12:20', '2026-05-02 04:12:20'),
(933, 'task', 'task has been created', 'App\\Models\\Task', 'created', 126, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_380273\",\"status\":\"0\",\"duration\":2,\"priority\":\"1\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"1\",\"manager_id\":181,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-02T07:42:41.000000Z\",\"updated_at\":\"2026-05-02T07:42:41.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-02 04:12:41', '2026-05-02 04:12:41'),
(934, 'task', 'task has been created', 'App\\Models\\Task', 'created', 127, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_273796\",\"status\":\"0\",\"duration\":2,\"priority\":\"1\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"1\",\"manager_id\":181,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-02T07:43:18.000000Z\",\"updated_at\":\"2026-05-02T07:43:18.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-02 04:13:18', '2026-05-02 04:13:18'),
(935, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 124, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-04-25 11:00:00\",\"end_date\":\"2026-05-09 11:00:00\",\"updated_at\":\"2026-05-02T07:43:18.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-02T07:39:56.000000Z\"}}', NULL, '2026-05-02 04:13:18', '2026-05-02 04:13:18'),
(936, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 125, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-04-25 11:00:00\",\"end_date\":\"2026-05-09 11:00:00\",\"updated_at\":\"2026-05-02T07:43:18.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-02T07:42:20.000000Z\"}}', NULL, '2026-05-02 04:13:18', '2026-05-02 04:13:18'),
(937, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 126, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-04-25 11:00:00\",\"end_date\":\"2026-05-09 11:00:00\",\"updated_at\":\"2026-05-02T07:43:18.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-02T07:42:41.000000Z\"}}', NULL, '2026-05-02 04:13:18', '2026-05-02 04:13:18'),
(938, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 127, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-04-25 11:00:00\",\"end_date\":\"2026-05-09 11:00:00\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-02 04:13:18', '2026-05-02 04:13:18'),
(939, 'task', 'task has been created', 'App\\Models\\Task', 'created', 128, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_415065\",\"status\":\"0\",\"duration\":2,\"priority\":\"1\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-03T04:51:12.000000Z\",\"updated_at\":\"2026-05-03T04:51:12.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 01:21:12', '2026-05-03 01:21:12'),
(940, 'task', 'task has been created', 'App\\Models\\Task', 'created', 129, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_144393\",\"status\":\"0\",\"duration\":2,\"priority\":\"1\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-03T04:51:58.000000Z\",\"updated_at\":\"2026-05-03T04:51:58.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 01:21:58', '2026-05-03 01:21:58'),
(941, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 128, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-04-25 11:00:00\",\"end_date\":\"2026-05-09 11:00:00\",\"updated_at\":\"2026-05-03T04:51:58.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-03T04:51:12.000000Z\"}}', NULL, '2026-05-03 01:21:58', '2026-05-03 01:21:58'),
(942, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 129, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-04-25 11:00:00\",\"end_date\":\"2026-05-09 11:00:00\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 01:21:58', '2026-05-03 01:21:58'),
(943, 'task', 'task has been created', 'App\\Models\\Task', 'created', 130, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0627\\u06cc\\u06cc\\u062f \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0627\\u0632 \\u0633\\u0645\\u062a \\u0628\\u06cc\\u0632\\u0646\\u0633\",\"description\":null,\"task_code\":\"T_213175\",\"status\":\"0\",\"duration\":3,\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-03T04:59:27.000000Z\",\"updated_at\":\"2026-05-03T04:59:27.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 01:29:27', '2026-05-03 01:29:27'),
(944, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 6, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":129,\"successor_id\":130,\"relation_Type\":null,\"created_at\":\"2026-05-03T04:59:27.000000Z\",\"updated_at\":\"2026-05-03T04:59:27.000000Z\"}}', NULL, '2026-05-03 01:29:27', '2026-05-03 01:29:27'),
(945, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 128, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T04:59:27.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T04:51:58.000000Z\"}}', NULL, '2026-05-03 01:29:27', '2026-05-03 01:29:27'),
(946, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 129, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T04:59:27.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T04:51:58.000000Z\"}}', NULL, '2026-05-03 01:29:27', '2026-05-03 01:29:27'),
(947, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 130, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-05-09 11:00:00\",\"end_date\":\"2026-05-12 11:00:00\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 01:29:27', '2026-05-03 01:29:27'),
(948, 'task', 'task has been created', 'App\\Models\\Task', 'created', 131, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632\",\"description\":null,\"task_code\":\"T_863071\",\"status\":\"0\",\"duration\":2,\"priority\":\"1\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-03T05:00:21.000000Z\",\"updated_at\":\"2026-05-03T05:00:21.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 01:30:21', '2026-05-03 01:30:21'),
(949, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 7, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":130,\"successor_id\":131,\"relation_Type\":null,\"created_at\":\"2026-05-03T05:00:21.000000Z\",\"updated_at\":\"2026-05-03T05:00:21.000000Z\"}}', NULL, '2026-05-03 01:30:21', '2026-05-03 01:30:21'),
(950, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 128, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:00:21.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T04:59:27.000000Z\"}}', NULL, '2026-05-03 01:30:21', '2026-05-03 01:30:21'),
(951, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 129, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:00:21.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T04:59:27.000000Z\"}}', NULL, '2026-05-03 01:30:21', '2026-05-03 01:30:21'),
(952, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 130, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:00:21.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T04:59:27.000000Z\"}}', NULL, '2026-05-03 01:30:21', '2026-05-03 01:30:21'),
(953, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 131, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-05-12 11:00:00\",\"end_date\":\"2026-05-26 11:00:00\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 01:30:21', '2026-05-03 01:30:21'),
(954, 'task', 'task has been created', 'App\\Models\\Task', 'created', 132, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0627\\u06cc\\u06cc\\u062f \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632 \\u0627\\u0632 \\u0633\\u0645\\u062a \\u0628\\u06cc\\u0632\\u0646\\u0633\",\"description\":null,\"task_code\":\"T_192360\",\"status\":\"0\",\"duration\":3,\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-03T05:02:35.000000Z\",\"updated_at\":\"2026-05-03T05:02:35.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 01:32:35', '2026-05-03 01:32:35'),
(955, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 8, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":131,\"successor_id\":132,\"relation_Type\":null,\"created_at\":\"2026-05-03T05:02:35.000000Z\",\"updated_at\":\"2026-05-03T05:02:35.000000Z\"}}', NULL, '2026-05-03 01:32:35', '2026-05-03 01:32:35'),
(956, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 128, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:02:35.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:00:21.000000Z\"}}', NULL, '2026-05-03 01:32:35', '2026-05-03 01:32:35'),
(957, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 129, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:02:35.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:00:21.000000Z\"}}', NULL, '2026-05-03 01:32:35', '2026-05-03 01:32:35'),
(958, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 130, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:02:35.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:00:21.000000Z\"}}', NULL, '2026-05-03 01:32:35', '2026-05-03 01:32:35'),
(959, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 131, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:02:35.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:00:21.000000Z\"}}', NULL, '2026-05-03 01:32:35', '2026-05-03 01:32:35'),
(960, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 132, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-05-26 11:00:00\",\"end_date\":\"2026-05-29 11:00:00\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 01:32:35', '2026-05-03 01:32:35'),
(961, 'task', 'task has been created', 'App\\Models\\Task', 'created', 133, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u0648\\u0627\\u06cc\\u0631\\u0641\\u0631\\u06cc\\u0645 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_584864\",\"status\":\"0\",\"duration\":3,\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-03T05:04:17.000000Z\",\"updated_at\":\"2026-05-03T05:04:17.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 01:34:17', '2026-05-03 01:34:17'),
(962, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 9, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":132,\"successor_id\":133,\"relation_Type\":null,\"created_at\":\"2026-05-03T05:04:18.000000Z\",\"updated_at\":\"2026-05-03T05:04:18.000000Z\"}}', NULL, '2026-05-03 01:34:18', '2026-05-03 01:34:18'),
(963, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 128, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:02:35.000000Z\"}}', NULL, '2026-05-03 01:34:18', '2026-05-03 01:34:18'),
(964, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 129, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:02:35.000000Z\"}}', NULL, '2026-05-03 01:34:18', '2026-05-03 01:34:18');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(965, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 130, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:02:35.000000Z\"}}', NULL, '2026-05-03 01:34:18', '2026-05-03 01:34:18'),
(966, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 131, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:02:35.000000Z\"}}', NULL, '2026-05-03 01:34:18', '2026-05-03 01:34:18'),
(967, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 132, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:02:35.000000Z\"}}', NULL, '2026-05-03 01:34:18', '2026-05-03 01:34:18'),
(968, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 133, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-05-29 11:00:00\",\"end_date\":\"2026-06-19 11:00:00\",\"updated_at\":\"2026-05-03T05:04:18.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-03T05:04:17.000000Z\"}}', NULL, '2026-05-03 01:34:18', '2026-05-03 01:34:18'),
(969, 'task', 'task has been created', 'App\\Models\\Task', 'created', 134, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0627\\u06cc\\u06cc\\u062f \\u0648\\u0627\\u06cc\\u0631\\u0641\\u0631\\u06cc\\u0645 \\u0645\\u0634\\u062a\\u0631\\u06cc \\u0627\\u0632 \\u0633\\u0645\\u062a \\u0628\\u06cc\\u0632\\u0646\\u0633\",\"description\":null,\"task_code\":\"T_379870\",\"status\":\"0\",\"duration\":5,\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-03T05:05:21.000000Z\",\"updated_at\":\"2026-05-03T05:05:21.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 01:35:21', '2026-05-03 01:35:21'),
(970, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 10, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":133,\"successor_id\":134,\"relation_Type\":null,\"created_at\":\"2026-05-03T05:05:22.000000Z\",\"updated_at\":\"2026-05-03T05:05:22.000000Z\"}}', NULL, '2026-05-03 01:35:22', '2026-05-03 01:35:22'),
(971, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 128, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"}}', NULL, '2026-05-03 01:35:22', '2026-05-03 01:35:22'),
(972, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 129, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"}}', NULL, '2026-05-03 01:35:22', '2026-05-03 01:35:22'),
(973, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 130, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"}}', NULL, '2026-05-03 01:35:22', '2026-05-03 01:35:22'),
(974, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 131, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"}}', NULL, '2026-05-03 01:35:22', '2026-05-03 01:35:22'),
(975, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 132, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"}}', NULL, '2026-05-03 01:35:22', '2026-05-03 01:35:22'),
(976, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 133, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:04:18.000000Z\"}}', NULL, '2026-05-03 01:35:22', '2026-05-03 01:35:22'),
(977, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 134, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-06-19 11:00:00\",\"end_date\":\"2026-06-24 11:00:00\",\"updated_at\":\"2026-05-03T05:05:22.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-03T05:05:21.000000Z\"}}', NULL, '2026-05-03 01:35:22', '2026-05-03 01:35:22'),
(978, 'task', 'task has been created', 'App\\Models\\Task', 'created', 135, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u0648\\u0627\\u06cc\\u0631\\u0641\\u0631\\u06cc\\u0645 \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632\",\"description\":null,\"task_code\":\"T_974371\",\"status\":\"0\",\"duration\":3,\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-03T05:06:19.000000Z\",\"updated_at\":\"2026-05-03T05:06:19.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(979, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 11, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":134,\"successor_id\":135,\"relation_Type\":null,\"created_at\":\"2026-05-03T05:06:19.000000Z\",\"updated_at\":\"2026-05-03T05:06:19.000000Z\"}}', NULL, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(980, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 128, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"}}', NULL, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(981, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 129, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"}}', NULL, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(982, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 130, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"}}', NULL, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(983, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 131, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"}}', NULL, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(984, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 132, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"}}', NULL, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(985, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 133, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"}}', NULL, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(986, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 134, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:05:22.000000Z\"}}', NULL, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(987, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 135, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-06-24 11:00:00\",\"end_date\":\"2026-07-15 11:00:00\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(988, 'task', 'task has been created', 'App\\Models\\Task', 'created', 136, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0627\\u06cc\\u06cc\\u062f \\u0648\\u0627\\u06cc\\u0631\\u0641\\u0631\\u06cc\\u0645 \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632 \\u0627\\u0632 \\u0633\\u0645\\u062a \\u0628\\u06cc\\u0632\\u0646\\u0633\",\"description\":null,\"task_code\":\"T_702858\",\"status\":\"0\",\"duration\":5,\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"created_at\":\"2026-05-03T05:07:51.000000Z\",\"updated_at\":\"2026-05-03T05:07:51.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(989, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 12, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":135,\"successor_id\":136,\"relation_Type\":null,\"created_at\":\"2026-05-03T05:07:51.000000Z\",\"updated_at\":\"2026-05-03T05:07:51.000000Z\"}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(990, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 128, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:07:51.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(991, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 129, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:07:51.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(992, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 130, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:07:51.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(993, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 131, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:07:51.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(994, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 132, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:07:51.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(995, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 133, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:07:51.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(996, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 134, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:07:51.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(997, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 135, 'App\\Models\\User', 181, '{\"attributes\":{\"updated_at\":\"2026-05-03T05:07:51.000000Z\"},\"old\":{\"updated_at\":\"2026-05-03T05:06:19.000000Z\"}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(998, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 136, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-07-15 11:00:00\",\"end_date\":\"2026-07-20 11:00:00\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(999, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 128, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0632\\u0631\\u0641\\u0644\\u0648 \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_415065\",\"status\":\"0\",\"duration\":2,\"priority\":\"1\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":145,\"manager_verify\":\"0\",\"start_date\":\"2026-04-25 11:00:00\",\"end_date\":\"2026-05-09 11:00:00\",\"created_at\":\"2026-05-03T04:51:12.000000Z\",\"updated_at\":\"2026-05-03T05:08:11.000000Z\",\"deleted_at\":\"2026-05-03T05:08:11.000000Z\"}}', NULL, '2026-05-03 01:38:11', '2026-05-03 01:38:11'),
(1000, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 134, 'App\\Models\\User', 1, '{\"attributes\":{\"task_code\":\"T_131068\",\"project_id\":null,\"updated_at\":\"2026-05-03T05:18:04.000000Z\"},\"old\":{\"task_code\":\"T_379870\",\"project_id\":56,\"updated_at\":\"2026-05-03T05:07:51.000000Z\"}}', NULL, '2026-05-03 01:48:04', '2026-05-03 01:48:04'),
(1001, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 134, 'App\\Models\\User', 1, '{\"attributes\":{\"task_code\":\"T_734375\",\"updated_at\":\"2026-05-03T05:18:35.000000Z\"},\"old\":{\"task_code\":\"T_131068\",\"updated_at\":\"2026-05-03T05:18:04.000000Z\"}}', NULL, '2026-05-03 01:48:35', '2026-05-03 01:48:35'),
(1002, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 134, 'App\\Models\\User', 1, '{\"attributes\":{\"task_code\":\"T_627277\",\"updated_at\":\"2026-05-03T05:23:25.000000Z\"},\"old\":{\"task_code\":\"T_734375\",\"updated_at\":\"2026-05-03T05:18:35.000000Z\"}}', NULL, '2026-05-03 01:53:25', '2026-05-03 01:53:25'),
(1003, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 134, 'App\\Models\\User', 1, '{\"attributes\":{\"task_code\":\"T_694184\",\"updated_at\":\"2026-05-03T05:23:47.000000Z\"},\"old\":{\"task_code\":\"T_627277\",\"updated_at\":\"2026-05-03T05:23:25.000000Z\"}}', NULL, '2026-05-03 01:53:47', '2026-05-03 01:53:47'),
(1004, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 134, 'App\\Models\\User', 1, '{\"attributes\":{\"task_code\":\"T_703463\",\"updated_at\":\"2026-05-03T05:24:46.000000Z\"},\"old\":{\"task_code\":\"T_694184\",\"updated_at\":\"2026-05-03T05:23:47.000000Z\"}}', NULL, '2026-05-03 01:54:46', '2026-05-03 01:54:46'),
(1005, 'task', 'task has been created', 'App\\Models\\Task', 'created', 137, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0622\\u06cc \\u0645\\u0634\\u062a\\u0631\\u06cc\",\"description\":null,\"task_code\":\"T_991143\",\"status\":\"0\",\"duration\":3,\"duration_type\":\"week\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"between_date\":null,\"created_at\":\"2026-05-03T05:52:47.000000Z\",\"updated_at\":\"2026-05-03T05:52:47.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 02:22:47', '2026-05-03 02:22:47'),
(1006, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 13, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":136,\"successor_id\":137,\"relation_Type\":null,\"created_at\":\"2026-05-03T05:52:47.000000Z\",\"updated_at\":\"2026-05-03T05:52:47.000000Z\"}}', NULL, '2026-05-03 02:22:47', '2026-05-03 02:22:47'),
(1007, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 137, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-07-20T11:00:00.000000Z\",\"end_date\":\"2026-08-10T11:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 02:22:47', '2026-05-03 02:22:47'),
(1008, 'task', 'task has been created', 'App\\Models\\Task', 'created', 138, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0627\\u06cc\\u06cc\\u062f \\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0622\\u06cc \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632 \\u062a\\u0648\\u0633\\u0637 \\u0628\\u06cc\\u0632\\u0646\\u0633\",\"description\":null,\"task_code\":\"T_414947\",\"status\":\"0\",\"duration\":3,\"duration_type\":\"week\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"between_date\":null,\"created_at\":\"2026-05-03T05:56:46.000000Z\",\"updated_at\":\"2026-05-03T05:56:46.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 02:26:46', '2026-05-03 02:26:46'),
(1009, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 14, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":137,\"successor_id\":138,\"relation_Type\":null,\"created_at\":\"2026-05-03T05:56:46.000000Z\",\"updated_at\":\"2026-05-03T05:56:46.000000Z\"}}', NULL, '2026-05-03 02:26:46', '2026-05-03 02:26:46'),
(1010, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 138, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-08-10T11:00:00.000000Z\",\"end_date\":\"2026-08-31T11:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 02:26:46', '2026-05-03 02:26:46'),
(1011, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 132, 'App\\Models\\User', 1, '{\"attributes\":{\"task_code\":\"T_185609\",\"updated_at\":\"2026-05-03T05:57:02.000000Z\"},\"old\":{\"task_code\":\"T_192360\",\"updated_at\":\"2026-05-03T05:07:51.000000Z\"}}', NULL, '2026-05-03 02:27:02', '2026-05-03 02:27:02'),
(1012, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 138, 'App\\Models\\User', 1, '{\"old\":{\"title\":\"\\u062a\\u0627\\u06cc\\u06cc\\u062f \\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0622\\u06cc \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632 \\u062a\\u0648\\u0633\\u0637 \\u0628\\u06cc\\u0632\\u0646\\u0633\",\"description\":null,\"task_code\":\"T_414947\",\"status\":\"0\",\"duration\":3,\"duration_type\":\"week\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":\"2026-08-10T11:00:00.000000Z\",\"end_date\":\"2026-08-31T11:00:00.000000Z\",\"between_date\":null,\"created_at\":\"2026-05-03T05:56:46.000000Z\",\"updated_at\":\"2026-05-03T05:58:11.000000Z\",\"deleted_at\":\"2026-05-03T05:58:11.000000Z\"}}', NULL, '2026-05-03 02:28:11', '2026-05-03 02:28:11'),
(1013, 'task', 'task has been created', 'App\\Models\\Task', 'created', 139, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0627\\u06cc\\u06cc\\u062f \\u06cc\\u0648\\u0622\\u06cc \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632 \\u062a\\u0648\\u0633\\u0637 \\u0628\\u06cc\\u0632\\u0646\\u0633\",\"description\":null,\"task_code\":\"T_128452\",\"status\":\"0\",\"duration\":5,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"between_date\":null,\"created_at\":\"2026-05-03T06:00:45.000000Z\",\"updated_at\":\"2026-05-03T06:00:45.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 02:30:45', '2026-05-03 02:30:45'),
(1014, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 15, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":137,\"successor_id\":139,\"relation_Type\":null,\"created_at\":\"2026-05-03T06:00:45.000000Z\",\"updated_at\":\"2026-05-03T06:00:45.000000Z\"}}', NULL, '2026-05-03 02:30:45', '2026-05-03 02:30:45'),
(1015, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 139, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-08-10T11:00:00.000000Z\",\"end_date\":\"2026-08-15T11:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 02:30:45', '2026-05-03 02:30:45'),
(1016, 'task', 'task has been created', 'App\\Models\\Task', 'created', 140, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u06cc\\u0648\\u0622\\u06cc \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632\",\"description\":null,\"task_code\":\"T_532901\",\"status\":\"0\",\"duration\":3,\"duration_type\":\"week\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"between_date\":null,\"created_at\":\"2026-05-03T06:01:39.000000Z\",\"updated_at\":\"2026-05-03T06:01:39.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 02:31:39', '2026-05-03 02:31:39'),
(1017, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 16, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":139,\"successor_id\":140,\"relation_Type\":null,\"created_at\":\"2026-05-03T06:01:39.000000Z\",\"updated_at\":\"2026-05-03T06:01:39.000000Z\"}}', NULL, '2026-05-03 02:31:39', '2026-05-03 02:31:39'),
(1018, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 140, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-08-15T11:00:00.000000Z\",\"end_date\":\"2026-09-05T11:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 02:31:39', '2026-05-03 02:31:39'),
(1019, 'task', 'task has been created', 'App\\Models\\Task', 'created', 141, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0627\\u06cc\\u06cc\\u062f \\u06cc\\u0648\\u0622\\u06cc \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632 \\u062a\\u0648\\u0633\\u0637 \\u0628\\u06cc\\u0632\\u0646\\u0633\",\"description\":null,\"task_code\":\"T_590441\",\"status\":\"0\",\"duration\":5,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"between_date\":null,\"created_at\":\"2026-05-03T06:02:43.000000Z\",\"updated_at\":\"2026-05-03T06:02:43.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 02:32:43', '2026-05-03 02:32:43'),
(1020, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 17, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":140,\"successor_id\":141,\"relation_Type\":null,\"created_at\":\"2026-05-03T06:02:43.000000Z\",\"updated_at\":\"2026-05-03T06:02:43.000000Z\"}}', NULL, '2026-05-03 02:32:43', '2026-05-03 02:32:43'),
(1021, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 141, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-09-05T11:00:00.000000Z\",\"end_date\":\"2026-09-10T11:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 02:32:43', '2026-05-03 02:32:43'),
(1022, 'task', 'task has been created', 'App\\Models\\Task', 'created', 142, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0648\\u0633\\u0639\\u0647 \\u0628\\u06a9\\u200c\\u0627\\u0650\\u0646\\u062f\",\"description\":null,\"task_code\":\"T_842999\",\"status\":\"0\",\"duration\":10,\"duration_type\":\"week\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"between_date\":null,\"created_at\":\"2026-05-03T06:04:32.000000Z\",\"updated_at\":\"2026-05-03T06:04:32.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 02:34:32', '2026-05-03 02:34:32'),
(1023, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 18, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":137,\"successor_id\":142,\"relation_Type\":null,\"created_at\":\"2026-05-03T06:04:32.000000Z\",\"updated_at\":\"2026-05-03T06:04:32.000000Z\"}}', NULL, '2026-05-03 02:34:32', '2026-05-03 02:34:32'),
(1024, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 142, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-07-20T11:00:00.000000Z\",\"end_date\":\"2026-09-28T11:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 02:34:32', '2026-05-03 02:34:32'),
(1025, 'task', 'task has been created', 'App\\Models\\Task', 'created', 143, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0648\\u0633\\u0639\\u0647 \\u0641\\u0631\\u0627\\u0646\\u062a \\u0627\\u0646\\u062f\",\"description\":null,\"task_code\":\"T_754332\",\"status\":\"0\",\"duration\":3,\"duration_type\":\"week\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"between_date\":null,\"created_at\":\"2026-05-03T06:05:39.000000Z\",\"updated_at\":\"2026-05-03T06:05:39.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 02:35:39', '2026-05-03 02:35:39'),
(1026, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 19, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":139,\"successor_id\":143,\"relation_Type\":null,\"created_at\":\"2026-05-03T06:05:39.000000Z\",\"updated_at\":\"2026-05-03T06:05:39.000000Z\"}}', NULL, '2026-05-03 02:35:39', '2026-05-03 02:35:39'),
(1027, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 143, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-08-15T11:00:00.000000Z\",\"end_date\":\"2026-09-05T11:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 02:35:39', '2026-05-03 02:35:39'),
(1028, 'task', 'task has been created', 'App\\Models\\Task', 'created', 144, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0648\\u0633\\u0639\\u0647 \\u0641\\u0631\\u0627\\u0646\\u062a \\u0627\\u0646\\u062f \\u0633\\u0631\\u0622\\u0634\\u067e\\u0632\",\"description\":null,\"task_code\":\"T_985362\",\"status\":\"0\",\"duration\":3,\"duration_type\":\"week\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"between_date\":null,\"created_at\":\"2026-05-03T06:07:02.000000Z\",\"updated_at\":\"2026-05-03T06:07:02.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 02:37:02', '2026-05-03 02:37:02'),
(1029, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 20, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":141,\"successor_id\":144,\"relation_Type\":null,\"created_at\":\"2026-05-03T06:07:02.000000Z\",\"updated_at\":\"2026-05-03T06:07:02.000000Z\"}}', NULL, '2026-05-03 02:37:02', '2026-05-03 02:37:02'),
(1030, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 144, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-09-10T11:00:00.000000Z\",\"end_date\":\"2026-10-01T11:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 02:37:02', '2026-05-03 02:37:02'),
(1031, 'task', 'task has been created', 'App\\Models\\Task', 'created', 145, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u0637\\u0631\\u0627\\u062d\\u06cc \\u0635\\u0641\\u062d\\u0627\\u062a \\u0628\\u0627\\u0642\\u06cc\\u0645\\u0627\\u0646\\u062f\\u0647\",\"description\":null,\"task_code\":\"T_893919\",\"status\":\"0\",\"duration\":4,\"duration_type\":\"week\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"between_date\":null,\"created_at\":\"2026-05-03T06:09:08.000000Z\",\"updated_at\":\"2026-05-03T06:09:08.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 02:39:08', '2026-05-03 02:39:08'),
(1032, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 21, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":141,\"successor_id\":145,\"relation_Type\":null,\"created_at\":\"2026-05-03T06:09:08.000000Z\",\"updated_at\":\"2026-05-03T06:09:08.000000Z\"}}', NULL, '2026-05-03 02:39:08', '2026-05-03 02:39:08'),
(1033, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 145, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-09-10T11:00:00.000000Z\",\"end_date\":\"2026-10-08T11:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 02:39:08', '2026-05-03 02:39:08'),
(1034, 'task', 'task has been created', 'App\\Models\\Task', 'created', 146, 'App\\Models\\User', 181, '{\"attributes\":{\"title\":\"\\u062a\\u0648\\u0633\\u0639\\u0647 \\u0641\\u0631\\u0627\\u0646\\u062a\\u200c\\u0627\\u0650\\u0646\\u062f\",\"description\":null,\"task_code\":\"T_242606\",\"status\":\"0\",\"duration\":4,\"duration_type\":\"week\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":56,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"between_date\":null,\"created_at\":\"2026-05-03T06:09:45.000000Z\",\"updated_at\":\"2026-05-03T06:09:45.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-03 02:39:45', '2026-05-03 02:39:45'),
(1035, 'task dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 22, 'App\\Models\\User', 181, '{\"attributes\":{\"predecessor_id\":145,\"successor_id\":146,\"relation_Type\":null,\"created_at\":\"2026-05-03T06:09:45.000000Z\",\"updated_at\":\"2026-05-03T06:09:45.000000Z\"}}', NULL, '2026-05-03 02:39:45', '2026-05-03 02:39:45'),
(1036, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 146, 'App\\Models\\User', 181, '{\"attributes\":{\"start_date\":\"2026-09-10T11:00:00.000000Z\",\"end_date\":\"2026-10-08T11:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-03 02:39:45', '2026-05-03 02:39:45'),
(1037, 'project', 'project has been created', 'App\\Models\\Project', 'created', 57, 'App\\Models\\User', 181, '{\"attributes\":{\"between_date\":null,\"approving_manager\":122,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u062a\\u0633\\u062a \\u0646\\u0648\\u062a\\u06cc\\u0641\\u06cc\\u06a9\\u06cc\\u0634\\u0646 \\u0628\\u0631\\u0627\\u06cc \\u062a\\u0627\\u06cc\\u06cc\\u062f \\u0645\\u062f\\u06cc\\u0631\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"2026-05-06 09:24:00\",\"end_date\":\"2026-05-06 09:24:00\",\"manager_id\":181,\"category_id\":2,\"department_id\":13,\"implementeunit_id\":8,\"brand_id\":1,\"project_code\":\"P_981099\",\"deleted_at\":null,\"updated_at\":\"2026-05-06T05:55:22.000000Z\",\"created_at\":\"2026-05-06T05:55:22.000000Z\"}}', NULL, '2026-05-06 02:25:23', '2026-05-06 02:25:23'),
(1038, 'project', 'project has been created', 'App\\Models\\Project', 'created', 58, 'App\\Models\\User', 181, '{\"attributes\":{\"between_date\":null,\"approving_manager\":1,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u062a\\u0633\\u062a \\u0646\\u0648\\u062a\\u06cc\\u0641\\u06cc\\u06a9\\u06cc\\u0634\\u0646\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"2026-05-13 10:16:00\",\"end_date\":\"2026-05-13 10:16:00\",\"manager_id\":181,\"category_id\":2,\"department_id\":13,\"implementeunit_id\":8,\"brand_id\":1,\"project_code\":\"P_591272\",\"deleted_at\":null,\"updated_at\":\"2026-05-06T06:47:03.000000Z\",\"created_at\":\"2026-05-06T06:47:03.000000Z\"}}', NULL, '2026-05-06 03:17:03', '2026-05-06 03:17:03'),
(1039, 'project', 'project has been deleted', 'App\\Models\\Project', 'deleted', 58, 'App\\Models\\User', 1, '{\"old\":{\"between_date\":null,\"approving_manager\":1,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u062a\\u0633\\u062a \\u0646\\u0648\\u062a\\u06cc\\u0641\\u06cc\\u06a9\\u06cc\\u0634\\u0646\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"2026-05-13 10:16:00\",\"end_date\":\"2026-05-13 10:16:00\",\"manager_id\":181,\"category_id\":2,\"department_id\":13,\"implementeunit_id\":8,\"brand_id\":1,\"project_code\":\"P_591272\",\"deleted_at\":\"2026-05-06T10:51:05.000000Z\",\"updated_at\":\"2026-05-06T10:51:05.000000Z\",\"created_at\":\"2026-05-06T06:47:03.000000Z\"}}', NULL, '2026-05-06 07:21:05', '2026-05-06 07:21:05'),
(1040, 'project', 'project has been created', 'App\\Models\\Project', 'created', 59, 'App\\Models\\User', 181, '{\"attributes\":{\"between_date\":null,\"approving_manager\":1,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"bdfhgdgd\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"2026-05-06 16:05:00\",\"end_date\":\"2026-05-06 16:05:00\",\"manager_id\":181,\"category_id\":2,\"department_id\":1,\"implementeunit_id\":5,\"brand_id\":1,\"project_code\":\"P_463147\",\"deleted_at\":null,\"updated_at\":\"2026-05-06T12:35:53.000000Z\",\"created_at\":\"2026-05-06T12:35:53.000000Z\"}}', NULL, '2026-05-06 09:05:53', '2026-05-06 09:05:53'),
(1041, 'project', 'project has been updated', 'App\\Models\\Project', 'updated', 59, 'App\\Models\\User', 1, '{\"attributes\":{\"approving_manager\":null,\"start_date\":\"2026-05-07 16:05:00\",\"end_date\":\"2026-05-13 16:05:00\",\"manager_id\":1,\"updated_at\":\"2026-05-07T04:54:33.000000Z\"},\"old\":{\"approving_manager\":1,\"start_date\":\"2026-05-06 16:05:00\",\"end_date\":\"2026-05-06 16:05:00\",\"manager_id\":181,\"updated_at\":\"2026-05-06T12:35:53.000000Z\"}}', NULL, '2026-05-07 01:24:33', '2026-05-07 01:24:33'),
(1042, 'project', 'project has been created', 'App\\Models\\Project', 'created', 60, 'App\\Models\\User', 15, '{\"attributes\":{\"between_date\":null,\"approving_manager\":1,\"approve_need\":\"0\",\"approve_verify\":null,\"name\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\",\"status\":\"0\",\"start_todo_date\":null,\"start_date\":\"2026-05-09 08:00:00\",\"end_date\":\"2026-07-22 08:00:00\",\"manager_id\":15,\"category_id\":4,\"department_id\":12,\"implementeunit_id\":5,\"brand_id\":14,\"project_code\":\"P_521486\",\"deleted_at\":null,\"updated_at\":\"2026-05-09T04:33:16.000000Z\",\"created_at\":\"2026-05-09T04:33:16.000000Z\"}}', NULL, '2026-05-09 01:03:16', '2026-05-09 01:03:16'),
(1043, 'project', 'project has been updated', 'App\\Models\\Project', 'updated', 60, 'App\\Models\\User', 1, '{\"attributes\":{\"approving_manager\":null,\"manager_id\":1,\"updated_at\":\"2026-05-09T04:56:20.000000Z\"},\"old\":{\"approving_manager\":1,\"manager_id\":15,\"updated_at\":\"2026-05-09T04:33:16.000000Z\"}}', NULL, '2026-05-09 01:26:20', '2026-05-09 01:26:20'),
(1044, 'task', 'task has been created', 'App\\Models\\Task', 'created', 147, 'App\\Models\\User', 15, '{\"attributes\":{\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 1\",\"description\":null,\"task_code\":\"T_406134\",\"status\":\"0\",\"duration\":2,\"duration_type\":\"hours\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-09T04:56:56.000000Z\",\"updated_at\":\"2026-05-09T04:56:56.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-09 01:26:56', '2026-05-09 01:26:56'),
(1045, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 147, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-09T10:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-09 01:26:56', '2026-05-09 01:26:56'),
(1046, 'project', 'project has been updated', 'App\\Models\\Project', 'updated', 60, 'App\\Models\\User', 1, '{\"attributes\":{\"approving_manager\":180,\"manager_id\":12,\"updated_at\":\"2026-05-09T05:07:54.000000Z\"},\"old\":{\"approving_manager\":null,\"manager_id\":1,\"updated_at\":\"2026-05-09T04:56:20.000000Z\"}}', NULL, '2026-05-09 01:37:54', '2026-05-09 01:37:54'),
(1047, 'project', 'project has been updated', 'App\\Models\\Project', 'updated', 60, 'App\\Models\\User', 1, '{\"attributes\":{\"manager_id\":15,\"updated_at\":\"2026-05-09T05:08:27.000000Z\"},\"old\":{\"manager_id\":12,\"updated_at\":\"2026-05-09T05:07:54.000000Z\"}}', NULL, '2026-05-09 01:38:27', '2026-05-09 01:38:27'),
(1048, 'User', 'user updated', 'App\\Models\\User', 'updated', 180, 'App\\Models\\User', 1, '{\"attributes\":{\"daily_capacity_hours\":8,\"updated_at\":\"2026-05-09T08:13:38.000000Z\"},\"old\":{\"daily_capacity_hours\":null,\"updated_at\":\"2026-04-22T07:45:17.000000Z\"}}', NULL, '2026-05-09 04:43:38', '2026-05-09 04:43:38'),
(1049, 'task', 'task has been created', 'App\\Models\\Task', 'created', 148, 'App\\Models\\User', 15, '{\"attributes\":{\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 2\",\"description\":\"\\u062a\\u0633\\u062a\",\"task_code\":\"T_154271\",\"status\":\"0\",\"duration\":12,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-09T12:27:05.000000Z\",\"updated_at\":\"2026-05-09T12:27:05.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-09 08:57:05', '2026-05-09 08:57:05'),
(1050, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 147, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":null,\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-09T12:27:05.000000Z\"},\"old\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-09T10:00:00.000000Z\",\"updated_at\":\"2026-05-09T04:56:56.000000Z\"}}', NULL, '2026-05-09 08:57:05', '2026-05-09 08:57:05'),
(1051, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 148, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\"},\"old\":{\"end_date\":null}}', NULL, '2026-05-09 08:57:05', '2026-05-09 08:57:05'),
(1052, 'task', 'task has been created', 'App\\Models\\Task', 'created', 149, 'App\\Models\\User', 15, '{\"attributes\":{\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 3\",\"description\":null,\"task_code\":\"T_637907\",\"status\":\"0\",\"duration\":12,\"duration_type\":\"hours\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-09T12:49:40.000000Z\",\"updated_at\":\"2026-05-09T12:49:40.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-09 09:19:40', '2026-05-09 09:19:40'),
(1053, 'task', 'task has been created', 'App\\Models\\Task', 'created', 150, 'App\\Models\\User', 15, '{\"attributes\":{\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 3\",\"description\":null,\"task_code\":\"T_343689\",\"status\":\"0\",\"duration\":12,\"duration_type\":\"hours\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-09T12:49:59.000000Z\",\"updated_at\":\"2026-05-09T12:49:59.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-09 09:19:59', '2026-05-09 09:19:59'),
(1054, 'task', 'task has been created', 'App\\Models\\Task', 'created', 151, 'App\\Models\\User', 15, '{\"attributes\":{\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 3\",\"description\":null,\"task_code\":\"T_266525\",\"status\":\"0\",\"duration\":12,\"duration_type\":\"hours\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-09T12:50:11.000000Z\",\"updated_at\":\"2026-05-09T12:50:11.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-09 09:20:11', '2026-05-09 09:20:11'),
(1055, 'task', 'task has been created', 'App\\Models\\Task', 'created', 152, 'App\\Models\\User', 15, '{\"attributes\":{\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 3\",\"description\":null,\"task_code\":\"T_766926\",\"status\":\"0\",\"duration\":12,\"duration_type\":\"hours\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-09T12:50:35.000000Z\",\"updated_at\":\"2026-05-09T12:50:35.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-09 09:20:35', '2026-05-09 09:20:35'),
(1056, 'task', 'task has been created', 'App\\Models\\Task', 'created', 153, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_241347\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T08:21:02.000000Z\",\"updated_at\":\"2026-05-10T08:21:02.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 04:51:02', '2026-05-10 04:51:02'),
(1057, 'task', 'task has been created', 'App\\Models\\Task', 'created', 154, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_187673\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T08:21:26.000000Z\",\"updated_at\":\"2026-05-10T08:21:26.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 04:51:26', '2026-05-10 04:51:26'),
(1058, 'task', 'task has been created', 'App\\Models\\Task', 'created', 155, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_763739\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T08:23:56.000000Z\",\"updated_at\":\"2026-05-10T08:23:56.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 04:53:56', '2026-05-10 04:53:56'),
(1059, 'task', 'task has been created', 'App\\Models\\Task', 'created', 156, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_639773\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T08:25:52.000000Z\",\"updated_at\":\"2026-05-10T08:25:52.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 04:55:52', '2026-05-10 04:55:52'),
(1060, 'task', 'task has been created', 'App\\Models\\Task', 'created', 157, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_152313\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T08:26:05.000000Z\",\"updated_at\":\"2026-05-10T08:26:05.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 04:56:05', '2026-05-10 04:56:05'),
(1061, 'task', 'task has been created', 'App\\Models\\Task', 'created', 158, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_403002\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T09:49:10.000000Z\",\"updated_at\":\"2026-05-10T09:49:10.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 06:19:10', '2026-05-10 06:19:10'),
(1062, 'task', 'task has been created', 'App\\Models\\Task', 'created', 159, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_932636\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T09:49:39.000000Z\",\"updated_at\":\"2026-05-10T09:49:39.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 06:19:39', '2026-05-10 06:19:39'),
(1063, 'task', 'task has been created', 'App\\Models\\Task', 'created', 160, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_485187\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T09:54:05.000000Z\",\"updated_at\":\"2026-05-10T09:54:05.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 06:24:05', '2026-05-10 06:24:05'),
(1064, 'task', 'task has been created', 'App\\Models\\Task', 'created', 161, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_645178\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T09:54:27.000000Z\",\"updated_at\":\"2026-05-10T09:54:27.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 06:24:27', '2026-05-10 06:24:27');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1065, 'task', 'task has been created', 'App\\Models\\Task', 'created', 162, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_925010\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T09:55:32.000000Z\",\"updated_at\":\"2026-05-10T09:55:32.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 06:25:32', '2026-05-10 06:25:32'),
(1066, 'task', 'task has been created', 'App\\Models\\Task', 'created', 163, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":0,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_235413\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T09:55:47.000000Z\",\"updated_at\":\"2026-05-10T09:55:47.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 06:25:47', '2026-05-10 06:25:47'),
(1067, 'task', 'task has been created', 'App\\Models\\Task', 'created', 164, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":60,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_382697\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T09:58:01.000000Z\",\"updated_at\":\"2026-05-10T09:58:01.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 06:28:01', '2026-05-10 06:28:01'),
(1068, 'task', 'task has been created', 'App\\Models\\Task', 'created', 165, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":60,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u06cc\\u06cc\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\\u0633\\u06cc\\u0631\",\"description\":null,\"task_code\":\"T_783529\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T09:58:03.000000Z\",\"updated_at\":\"2026-05-10T09:58:03.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 06:28:03', '2026-05-10 06:28:03'),
(1069, 'task', 'task has been created', 'App\\Models\\Task', 'created', 166, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":60,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"jssssssst\",\"description\":\"jsj\",\"task_code\":\"T_363780\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":181,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1070, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 147, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1071, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 148, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1072, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 149, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1073, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 150, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1074, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 151, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1075, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 152, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1076, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 153, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1077, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 154, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1078, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 155, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1079, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 156, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1080, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 157, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1081, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 158, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1082, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 159, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1083, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 160, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1084, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 161, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1085, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 162, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1086, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 163, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1087, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 1, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1088, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 2, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1089, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 3, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1090, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 4, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1091, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 5, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1092, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 6, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1093, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 7, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1094, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 8, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1095, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 9, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1096, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 10, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1097, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 11, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1098, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 12, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1099, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 13, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1100, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 14, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1101, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 15, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1102, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 16, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1103, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 17, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1104, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 18, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1105, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 19, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1106, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 20, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1107, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 21, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1108, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 22, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1109, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 23, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1110, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 24, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1111, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 164, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-20T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1112, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 25, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1113, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 26, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1114, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 27, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1115, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 28, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1116, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 29, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1117, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 30, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1118, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 31, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1119, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 32, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1120, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 33, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1121, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 34, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1122, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 35, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1123, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 36, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1124, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1125, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 38, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1126, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 39, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1127, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 40, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1128, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 41, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1129, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 42, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1130, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 43, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1131, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 44, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1132, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 45, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1133, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 46, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1134, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 47, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1135, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 48, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1136, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 165, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-20T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T09:58:03.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1137, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 49, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1138, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 50, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1139, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 51, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1140, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 52, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1141, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 53, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1142, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 54, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1143, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 55, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1144, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 56, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1145, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 57, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1146, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 58, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1147, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 59, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1148, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 60, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1149, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 61, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1150, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 62, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1151, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 63, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1152, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 64, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1153, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 65, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1154, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 66, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1155, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 67, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1156, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 68, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T10:25:40.000000Z\",\"updated_at\":\"2026-05-10T10:25:40.000000Z\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1157, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 166, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-18T08:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
(1158, 'task', 'task has been created', 'App\\Models\\Task', 'created', 167, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_666169\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T10:46:29.000000Z\",\"updated_at\":\"2026-05-10T10:46:29.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 07:16:29', '2026-05-10 07:16:29'),
(1159, 'task', 'task has been created', 'App\\Models\\Task', 'created', 168, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_417832\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T10:47:04.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1160, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 147, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1161, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 148, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1162, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 149, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1163, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 150, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1164, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 151, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1165, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 152, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1166, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 153, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1167, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 154, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1168, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 155, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1169, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 156, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1170, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 157, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1171, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 158, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1172, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 159, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1173, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 160, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1174, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 161, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1175, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 162, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1176, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 163, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T10:47:04.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:46:29.000000Z\"}}', NULL, '2026-05-10 07:17:04', '2026-05-10 07:17:04'),
(1177, 'task', 'task has been created', 'App\\Models\\Task', 'created', 169, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_304245\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T10:58:03.000000Z\",\"updated_at\":\"2026-05-10T10:58:03.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 07:28:03', '2026-05-10 07:28:03'),
(1178, 'task', 'task has been created', 'App\\Models\\Task', 'created', 170, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_382012\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T11:06:06.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1179, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 147, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1180, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 148, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1181, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 149, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1182, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 150, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1183, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 151, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1184, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 152, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1185, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 153, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1186, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 154, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1187, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 155, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1188, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 156, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1189, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 157, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1190, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 158, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1191, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 159, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1192, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 160, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1193, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 161, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1194, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 162, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1195, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 163, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:06:06.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T10:58:03.000000Z\"}}', NULL, '2026-05-10 07:36:06', '2026-05-10 07:36:06'),
(1196, 'task', 'task has been created', 'App\\Models\\Task', 'created', 171, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_375678\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T11:07:35.000000Z\",\"updated_at\":\"2026-05-10T11:07:35.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 07:37:35', '2026-05-10 07:37:35'),
(1197, 'task', 'task has been created', 'App\\Models\\Task', 'created', 172, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_139584\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T11:07:55.000000Z\",\"updated_at\":\"2026-05-10T11:07:55.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 07:37:55', '2026-05-10 07:37:55'),
(1198, 'task', 'task has been created', 'App\\Models\\Task', 'created', 173, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_307745\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T11:08:52.000000Z\",\"updated_at\":\"2026-05-10T11:08:52.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 07:38:52', '2026-05-10 07:38:52'),
(1199, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 147, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1200, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 148, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1201, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 149, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1202, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 150, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1203, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 151, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1204, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 152, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1205, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 153, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1206, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 154, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1207, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 155, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1208, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 156, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1209, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 157, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1210, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 158, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1211, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 159, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1212, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 160, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1213, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 161, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1214, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 162, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1215, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 163, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:07:55.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1216, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 1, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T11:08:53.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1217, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 2, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T11:08:53.000000Z\",\"updated_at\":\"2026-05-10T11:08:53.000000Z\"}}', NULL, '2026-05-10 07:38:53', '2026-05-10 07:38:53'),
(1218, 'task', 'task has been created', 'App\\Models\\Task', 'created', 174, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_829942\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T11:17:01.000000Z\",\"updated_at\":\"2026-05-10T11:17:01.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 07:47:01', '2026-05-10 07:47:01'),
(1219, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 4, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T11:17:01.000000Z\",\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 07:47:01', '2026-05-10 07:47:01'),
(1220, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 5, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T11:17:01.000000Z\",\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 07:47:01', '2026-05-10 07:47:01'),
(1221, 'task', 'task has been created', 'App\\Models\\Task', 'created', 175, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_984555\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T11:41:53.000000Z\",\"updated_at\":\"2026-05-10T11:41:53.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 08:11:53', '2026-05-10 08:11:53'),
(1222, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 147, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:53', '2026-05-10 08:11:53'),
(1223, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 148, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:53', '2026-05-10 08:11:53'),
(1224, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 149, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:53', '2026-05-10 08:11:53'),
(1225, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 150, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:53', '2026-05-10 08:11:53'),
(1226, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 151, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:53', '2026-05-10 08:11:53'),
(1227, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 152, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:53', '2026-05-10 08:11:53'),
(1228, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 153, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:53', '2026-05-10 08:11:53'),
(1229, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 154, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:53', '2026-05-10 08:11:53'),
(1230, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 155, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:53.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:53', '2026-05-10 08:11:53'),
(1231, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 156, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:54.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:54', '2026-05-10 08:11:54'),
(1232, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 157, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:54.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:54', '2026-05-10 08:11:54'),
(1233, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 158, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:54.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:54', '2026-05-10 08:11:54'),
(1234, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 159, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:54.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:54', '2026-05-10 08:11:54'),
(1235, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 160, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:54.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:54', '2026-05-10 08:11:54'),
(1236, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 161, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:54.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:54', '2026-05-10 08:11:54'),
(1237, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 162, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:54.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:54', '2026-05-10 08:11:54'),
(1238, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 163, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T11:41:54.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T11:17:01.000000Z\"}}', NULL, '2026-05-10 08:11:54', '2026-05-10 08:11:54'),
(1239, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 7, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T11:41:54.000000Z\",\"updated_at\":\"2026-05-10T11:41:54.000000Z\"}}', NULL, '2026-05-10 08:11:54', '2026-05-10 08:11:54'),
(1240, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 8, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T11:41:54.000000Z\",\"updated_at\":\"2026-05-10T11:41:54.000000Z\"}}', NULL, '2026-05-10 08:11:54', '2026-05-10 08:11:54'),
(1241, 'task', 'task has been created', 'App\\Models\\Task', 'created', 176, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_511295\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T12:02:38.000000Z\",\"updated_at\":\"2026-05-10T12:02:38.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 08:32:38', '2026-05-10 08:32:38'),
(1242, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 1, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:02:39.000000Z\",\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:32:39', '2026-05-10 08:32:39'),
(1243, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 2, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:02:39.000000Z\",\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:32:39', '2026-05-10 08:32:39'),
(1244, 'task', 'task has been created', 'App\\Models\\Task', 'created', 177, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":10,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":null,\"task_code\":\"T_817339\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"1\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":180,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1245, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 147, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1246, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 148, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1247, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 149, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1248, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 150, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1249, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 151, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1250, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 152, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1251, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 153, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1252, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 154, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1253, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 155, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1254, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 156, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1255, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 157, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1256, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 158, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1257, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 159, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1258, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 160, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1259, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 161, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1260, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 162, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1261, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 163, 'App\\Models\\User', 15, '{\"attributes\":{\"end_date\":\"2026-05-08T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1262, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 1, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1263, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 2, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1264, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 3, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1265, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 4, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1266, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 5, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1267, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 6, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1268, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 7, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1269, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 8, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1270, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 9, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1271, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 10, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1272, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 11, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1273, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 12, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1274, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 13, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1275, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 14, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1276, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 15, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1277, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 16, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1278, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 17, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1279, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 18, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1280, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 19, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1281, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 20, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1282, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 21, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1283, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 22, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1284, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 23, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":184,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1285, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 24, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":164,\"user_id\":180,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1286, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 164, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-20T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1287, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 25, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1288, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 26, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1289, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 27, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1290, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 28, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1291, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 29, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1292, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 30, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1293, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 31, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1294, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 32, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1295, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 33, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1296, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 34, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1297, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 35, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1298, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 36, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1299, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 37, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1300, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 38, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1301, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 39, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1302, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 40, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1303, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 41, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1304, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 42, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1305, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 43, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1306, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 44, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1307, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 45, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1308, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 46, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1309, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 47, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":184,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1310, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 48, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":165,\"user_id\":180,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1311, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 165, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-20T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1312, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 49, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1313, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 50, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1314, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 51, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1315, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 52, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1316, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 53, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1317, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 54, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1318, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 55, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1319, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 56, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1320, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 57, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1321, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 58, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1322, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 59, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1323, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 60, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1324, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 61, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1325, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 62, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1326, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 63, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1327, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 64, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1328, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 65, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1329, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 66, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1330, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 67, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":184,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1331, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 68, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":166,\"user_id\":180,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1332, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 166, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-18T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1333, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 69, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":167,\"user_id\":181,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1334, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 70, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":167,\"user_id\":181,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1335, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 71, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":167,\"user_id\":181,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1336, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 72, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":167,\"user_id\":181,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1337, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 73, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":167,\"user_id\":181,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1338, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 167, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-13T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1339, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 74, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":168,\"user_id\":181,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1340, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 75, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":168,\"user_id\":181,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1341, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 76, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":168,\"user_id\":181,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1342, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 77, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":168,\"user_id\":181,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1343, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 78, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":168,\"user_id\":181,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1344, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 168, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-13T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1345, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 79, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":169,\"user_id\":181,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1346, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 80, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":169,\"user_id\":181,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1347, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 81, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":169,\"user_id\":181,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1348, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 82, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":169,\"user_id\":181,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:44', '2026-05-10 08:34:44'),
(1349, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 83, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":169,\"user_id\":181,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:44.000000Z\",\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1350, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 169, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-13T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1351, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 84, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":170,\"user_id\":181,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1352, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 85, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":170,\"user_id\":181,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1353, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 86, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":170,\"user_id\":181,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1354, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 87, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":170,\"user_id\":181,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1355, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 88, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":170,\"user_id\":181,\"work_date\":\"2026-05-13T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1356, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 170, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-13T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1357, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 89, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":171,\"user_id\":181,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1358, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 90, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":171,\"user_id\":181,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1359, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 91, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":171,\"user_id\":181,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1360, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 92, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":171,\"user_id\":181,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1361, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 93, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":171,\"user_id\":181,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1362, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 171, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-14T08:00:00.000000Z\",\"end_date\":\"2026-05-18T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1363, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 94, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":172,\"user_id\":181,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1364, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 95, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":172,\"user_id\":181,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1365, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 96, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":172,\"user_id\":181,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1366, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 97, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":172,\"user_id\":181,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1367, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 98, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":172,\"user_id\":181,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1368, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 172, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-14T08:00:00.000000Z\",\"end_date\":\"2026-05-18T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1369, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 99, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":173,\"user_id\":181,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1370, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 100, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":173,\"user_id\":181,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1371, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 101, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":173,\"user_id\":181,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1372, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 102, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":173,\"user_id\":181,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1373, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 103, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":173,\"user_id\":181,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1374, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 173, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-14T08:00:00.000000Z\",\"end_date\":\"2026-05-18T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1375, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 104, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":174,\"user_id\":181,\"work_date\":\"2026-05-14T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1376, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 105, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":174,\"user_id\":181,\"work_date\":\"2026-05-15T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1377, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 106, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":174,\"user_id\":181,\"work_date\":\"2026-05-16T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1378, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 107, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":174,\"user_id\":181,\"work_date\":\"2026-05-17T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1379, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 108, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":174,\"user_id\":181,\"work_date\":\"2026-05-18T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1380, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 174, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-14T08:00:00.000000Z\",\"end_date\":\"2026-05-18T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1381, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 109, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":175,\"user_id\":181,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1382, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 110, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":175,\"user_id\":184,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1383, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 111, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":175,\"user_id\":181,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1384, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 112, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":175,\"user_id\":184,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1385, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 113, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":175,\"user_id\":181,\"work_date\":\"2026-05-21T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1386, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 175, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-19T08:00:00.000000Z\",\"end_date\":\"2026-05-21T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1387, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 114, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":176,\"user_id\":181,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1388, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 115, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":176,\"user_id\":181,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1389, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 116, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":176,\"user_id\":181,\"work_date\":\"2026-05-21T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1390, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 117, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":176,\"user_id\":184,\"work_date\":\"2026-05-21T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1391, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 118, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":176,\"user_id\":181,\"work_date\":\"2026-05-22T00:00:00.000000Z\",\"hours\":1,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1392, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 176, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-19T08:00:00.000000Z\",\"end_date\":\"2026-05-22T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:02:39.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1393, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 119, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":177,\"user_id\":181,\"work_date\":\"2026-05-19T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1394, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 120, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":177,\"user_id\":181,\"work_date\":\"2026-05-20T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1395, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 121, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":177,\"user_id\":181,\"work_date\":\"2026-05-21T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1396, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 122, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":177,\"user_id\":184,\"work_date\":\"2026-05-21T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1397, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 123, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":177,\"user_id\":181,\"work_date\":\"2026-05-22T00:00:00.000000Z\",\"hours\":1,\"created_at\":\"2026-05-10T12:04:45.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1398, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 177, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-19T08:00:00.000000Z\",\"end_date\":\"2026-05-22T08:00:00.000000Z\",\"updated_at\":\"2026-05-10T12:04:45.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null,\"updated_at\":\"2026-05-10T12:04:44.000000Z\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
(1399, 'task', 'task has been created', 'App\\Models\\Task', 'created', 178, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":90,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 1\",\"description\":null,\"task_code\":\"T_187327\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":181,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T12:07:36.000000Z\",\"updated_at\":\"2026-05-10T12:07:36.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 08:37:36', '2026-05-10 08:37:36'),
(1400, 'task', 'task has been created', 'App\\Models\\Task', 'created', 179, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":90,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 1\",\"description\":null,\"task_code\":\"T_715723\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":181,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T12:08:01.000000Z\",\"updated_at\":\"2026-05-10T12:08:01.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 08:38:01', '2026-05-10 08:38:01'),
(1401, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 179, 'App\\Models\\User', 1, '{\"old\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":90,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 1\",\"description\":null,\"task_code\":\"T_715723\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":181,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T12:08:01.000000Z\",\"updated_at\":\"2026-05-10T12:12:43.000000Z\",\"deleted_at\":\"2026-05-10T12:12:43.000000Z\"}}', NULL, '2026-05-10 08:42:43', '2026-05-10 08:42:43'),
(1402, 'task', 'task has been deleted', 'App\\Models\\Task', 'deleted', 178, 'App\\Models\\User', 1, '{\"old\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":90,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 1\",\"description\":null,\"task_code\":\"T_187327\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":181,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T12:07:36.000000Z\",\"updated_at\":\"2026-05-10T12:12:49.000000Z\",\"deleted_at\":\"2026-05-10T12:12:49.000000Z\"}}', NULL, '2026-05-10 08:42:49', '2026-05-10 08:42:49'),
(1403, 'task', 'task has been created', 'App\\Models\\Task', 'created', 180, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":14,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u062a \\u062a\\u0627\\u0631\\u06cc\\u062e \\u0648\\u0633\\u0627\\u0639\\u062a \\u0648 \\u0647\\u0645\\u0647 \\u0686\\u06cc\",\"description\":\"\\u062a\\u0633\\u062a\",\"task_code\":\"T_930936\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"0\",\"manager_id\":null,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T12:36:27.000000Z\",\"updated_at\":\"2026-05-10T12:36:27.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
(1404, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 1, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":180,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:36:27.000000Z\",\"updated_at\":\"2026-05-10T12:36:27.000000Z\"}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
(1405, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 2, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":180,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:36:27.000000Z\",\"updated_at\":\"2026-05-10T12:36:27.000000Z\"}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
(1406, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 3, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":180,\"user_id\":180,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:36:27.000000Z\",\"updated_at\":\"2026-05-10T12:36:27.000000Z\"}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
(1407, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 4, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":180,\"user_id\":184,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:36:27.000000Z\",\"updated_at\":\"2026-05-10T12:36:27.000000Z\"}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
(1408, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 180, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-09T08:00:00.000000Z\",\"end_date\":\"2026-05-10T08:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
(1409, 'task', 'task has been created', 'App\\Models\\Task', 'created', 181, 'App\\Models\\User', 15, '{\"attributes\":{\"remaining_hours\":null,\"actual_start_date\":null,\"actual_end_date\":null,\"estimated_hours\":20,\"daily_hours\":null,\"planned_hours\":null,\"department_id\":null,\"implementeunit_id\":null,\"title\":\"\\u062a\\u0633\\u06a9 \\u062f\\u0648\\u0645 \\u0628\\u0631\\u0627\\u06cc \\u062a\\u0633\\u062a \\u062a\\u0627\\u0631\\u06cc\\u062e \\u0648 \\u0633\\u0627\\u0639\\u062a\",\"description\":\"\\u062a\\u0633\\u062a\",\"task_code\":\"T_306592\",\"status\":\"0\",\"duration\":null,\"duration_type\":\"day\",\"priority\":\"2\",\"parent_id\":null,\"project_id\":60,\"manager_check\":\"1\",\"manager_id\":1,\"watcher_id\":181,\"manager_verify\":\"0\",\"start_date\":null,\"end_date\":null,\"start_todo_date\":null,\"between_date\":null,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\",\"deleted_at\":null}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1410, 'Task Dependency', 'Task Dependency has been created', 'App\\Models\\TaskDependency', 'created', 23, 'App\\Models\\User', 15, '{\"attributes\":{\"predecessor_id\":180,\"successor_id\":181,\"relation_Type\":null,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1411, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 5, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":180,\"user_id\":180,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1412, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 6, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":180,\"user_id\":184,\"work_date\":\"2026-05-09T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1413, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 7, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":180,\"user_id\":180,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1414, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 8, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":180,\"user_id\":184,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1415, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 9, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":181,\"user_id\":180,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1416, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 10, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":181,\"user_id\":184,\"work_date\":\"2026-05-10T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1417, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 11, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":181,\"user_id\":180,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1418, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 12, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":181,\"user_id\":184,\"work_date\":\"2026-05-11T00:00:00.000000Z\",\"hours\":3,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1419, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 13, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":181,\"user_id\":180,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":4,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1420, 'task', 'task has been created', 'App\\Models\\TaskAllocation', 'created', 14, 'App\\Models\\User', 15, '{\"attributes\":{\"task_id\":181,\"user_id\":184,\"work_date\":\"2026-05-12T00:00:00.000000Z\",\"hours\":2,\"created_at\":\"2026-05-10T12:40:59.000000Z\",\"updated_at\":\"2026-05-10T12:40:59.000000Z\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(1421, 'task', 'task has been updated', 'App\\Models\\Task', 'updated', 181, 'App\\Models\\User', 15, '{\"attributes\":{\"start_date\":\"2026-05-10T08:00:00.000000Z\",\"end_date\":\"2026-05-12T08:00:00.000000Z\"},\"old\":{\"start_date\":null,\"end_date\":null}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int DEFAULT NULL,
  `photo_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `brands_photo_id_foreign` (`photo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `parent_id`, `photo_id`, `created_at`, `updated_at`) VALUES
(1, 'کاله', 1, 2, NULL, '2025-12-06 09:23:33'),
(2, 'لیو', NULL, NULL, '2025-12-06 08:44:32', '2025-12-06 08:44:32'),
(3, 'دلخامه', NULL, NULL, '2025-12-06 09:01:20', '2025-12-06 09:01:20'),
(4, 'سون', NULL, NULL, '2025-12-06 09:02:26', '2025-12-06 09:02:26'),
(5, 'ناری', NULL, NULL, '2025-12-06 09:02:35', '2025-12-06 09:02:35'),
(6, 'لاکتیویا', NULL, NULL, '2025-12-06 09:03:06', '2025-12-06 09:03:06'),
(7, 'سوربن', NULL, NULL, '2025-12-06 09:03:47', '2025-12-06 09:03:47'),
(8, 'jijis', NULL, NULL, '2025-12-06 09:04:30', '2025-12-06 09:04:30'),
(9, 'ویلی', NULL, NULL, '2025-12-06 09:04:46', '2025-12-06 09:04:46'),
(10, 'آنا', NULL, NULL, '2025-12-06 09:05:08', '2025-12-06 09:05:08'),
(11, 'کاریکو', NULL, NULL, '2025-12-06 09:05:25', '2025-12-06 09:05:25'),
(12, 'پنج ستاره آمل', NULL, NULL, '2025-12-06 09:05:47', '2025-12-06 09:05:47'),
(13, 'اماه', NULL, NULL, '2025-12-06 09:05:57', '2025-12-06 09:05:57'),
(14, 'تی فتا', NULL, NULL, '2025-12-06 09:06:10', '2025-12-06 09:06:10'),
(15, 'دلیس', NULL, NULL, '2025-12-06 09:06:24', '2025-12-06 09:06:24'),
(16, 'لاکی یو', NULL, NULL, '2025-12-06 09:06:35', '2025-12-06 09:06:35'),
(17, 'شمس', NULL, NULL, '2025-12-06 09:06:49', '2025-12-06 09:06:49'),
(18, 'آرگو', NULL, NULL, '2025-12-06 09:07:23', '2025-12-06 09:07:23'),
(19, 'کاسل', NULL, NULL, '2025-12-06 09:09:47', '2025-12-06 09:09:47'),
(20, 'لاکی فروت', NULL, NULL, '2025-12-06 09:10:03', '2025-12-06 09:10:03'),
(21, 'کاسل اسپارکل', NULL, NULL, '2025-12-06 09:10:21', '2025-12-06 09:10:21'),
(22, 'لاکیدو', NULL, NULL, '2025-12-06 09:10:32', '2025-12-06 09:10:32'),
(23, 'شمرون', NULL, NULL, '2025-12-06 09:10:44', '2025-12-06 09:10:44'),
(24, 'NRJ', NULL, NULL, '2025-12-06 09:10:56', '2025-12-06 09:10:56'),
(25, 'سولاته', NULL, NULL, '2025-12-06 09:11:27', '2025-12-06 09:11:27'),
(26, 'سوکافه', NULL, NULL, '2025-12-06 09:11:41', '2025-12-06 09:11:41'),
(27, 'ماجان', NULL, NULL, '2025-12-06 09:11:50', '2025-12-06 09:11:50'),
(28, 'دونو', NULL, NULL, '2025-12-06 09:12:01', '2025-12-06 09:12:01'),
(29, 'بریموند', NULL, NULL, '2025-12-06 09:12:24', '2025-12-06 09:12:24'),
(30, 'جیتو', NULL, NULL, '2025-12-06 09:12:44', '2025-12-06 09:12:44'),
(31, 'فوردو', NULL, NULL, '2025-12-06 09:12:59', '2025-12-06 09:12:59'),
(32, 'رندو', NULL, NULL, '2025-12-06 09:13:10', '2025-12-06 09:13:10'),
(33, 'پمینا', NULL, NULL, '2026-04-25 04:46:00', '2026-04-25 04:46:00'),
(34, 'کاپو', NULL, NULL, '2026-04-27 04:39:59', '2026-04-27 04:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:3:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";}s:11:\"permissions\";a:38:{i:0;a:3:{s:1:\"a\";i:13;s:1:\"b\";s:18:\"manager_projectAdd\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:14;s:1:\"b\";s:19:\"manager_projectEdit\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:15;s:1:\"b\";s:19:\"manager_projectShow\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:16;s:1:\"b\";s:21:\"manager_projectDelete\";s:1:\"c\";s:3:\"web\";}i:4;a:3:{s:1:\"a\";i:17;s:1:\"b\";s:24:\"manager_projectOptionAdd\";s:1:\"c\";s:3:\"web\";}i:5;a:3:{s:1:\"a\";i:18;s:1:\"b\";s:22:\"manager_projectOptions\";s:1:\"c\";s:3:\"web\";}i:6;a:3:{s:1:\"a\";i:19;s:1:\"b\";s:24:\"manager_projectTotalInfo\";s:1:\"c\";s:3:\"web\";}i:7;a:3:{s:1:\"a\";i:20;s:1:\"b\";s:13:\"manager_tasks\";s:1:\"c\";s:3:\"web\";}i:8;a:3:{s:1:\"a\";i:21;s:1:\"b\";s:15:\"manager_taskAdd\";s:1:\"c\";s:3:\"web\";}i:9;a:3:{s:1:\"a\";i:22;s:1:\"b\";s:22:\"manager_taskSubTaskAdd\";s:1:\"c\";s:3:\"web\";}i:10;a:3:{s:1:\"a\";i:23;s:1:\"b\";s:16:\"manager_taskShow\";s:1:\"c\";s:3:\"web\";}i:11;a:3:{s:1:\"a\";i:24;s:1:\"b\";s:22:\"manager_taskDependency\";s:1:\"c\";s:3:\"web\";}i:12;a:3:{s:1:\"a\";i:25;s:1:\"b\";s:24:\"manager_taskStatusUpdate\";s:1:\"c\";s:3:\"web\";}i:13;a:3:{s:1:\"a\";i:26;s:1:\"b\";s:13:\"manager_files\";s:1:\"c\";s:3:\"web\";}i:14;a:3:{s:1:\"a\";i:27;s:1:\"b\";s:15:\"manager_members\";s:1:\"c\";s:3:\"web\";}i:15;a:3:{s:1:\"a\";i:28;s:1:\"b\";s:14:\"manager_access\";s:1:\"c\";s:3:\"web\";}i:16;a:3:{s:1:\"a\";i:29;s:1:\"b\";s:15:\"manager_tickets\";s:1:\"c\";s:3:\"web\";}i:17;a:3:{s:1:\"a\";i:30;s:1:\"b\";s:16:\"manager_comments\";s:1:\"c\";s:3:\"web\";}i:18;a:3:{s:1:\"a\";i:31;s:1:\"b\";s:15:\"manager_reports\";s:1:\"c\";s:3:\"web\";}i:19;a:3:{s:1:\"a\";i:33;s:1:\"b\";s:20:\"manager_TaskTimeLine\";s:1:\"c\";s:3:\"web\";}i:20;a:3:{s:1:\"a\";i:34;s:1:\"b\";s:19:\"manager_TaskArchive\";s:1:\"c\";s:3:\"web\";}i:21;a:3:{s:1:\"a\";i:35;s:1:\"b\";s:15:\"manager_profile\";s:1:\"c\";s:3:\"web\";}i:22;a:3:{s:1:\"a\";i:36;s:1:\"b\";s:20:\"manager_notification\";s:1:\"c\";s:3:\"web\";}i:23;a:3:{s:1:\"a\";i:37;s:1:\"b\";s:18:\"member_projectShow\";s:1:\"c\";s:3:\"web\";}i:24;a:3:{s:1:\"a\";i:38;s:1:\"b\";s:23:\"member_projectTotalInfo\";s:1:\"c\";s:3:\"web\";}i:25;a:3:{s:1:\"a\";i:39;s:1:\"b\";s:12:\"member_tasks\";s:1:\"c\";s:3:\"web\";}i:26;a:3:{s:1:\"a\";i:40;s:1:\"b\";s:15:\"member_taskShow\";s:1:\"c\";s:3:\"web\";}i:27;a:3:{s:1:\"a\";i:41;s:1:\"b\";s:23:\"member_taskStatusUpdate\";s:1:\"c\";s:3:\"web\";}i:28;a:3:{s:1:\"a\";i:42;s:1:\"b\";s:14:\"member_tickets\";s:1:\"c\";s:3:\"web\";}i:29;a:3:{s:1:\"a\";i:43;s:1:\"b\";s:15:\"member_comments\";s:1:\"c\";s:3:\"web\";}i:30;a:3:{s:1:\"a\";i:44;s:1:\"b\";s:14:\"member_members\";s:1:\"c\";s:3:\"web\";}i:31;a:3:{s:1:\"a\";i:45;s:1:\"b\";s:14:\"member_profile\";s:1:\"c\";s:3:\"web\";}i:32;a:3:{s:1:\"a\";i:46;s:1:\"b\";s:12:\"assign_tasks\";s:1:\"c\";s:3:\"web\";}i:33;a:3:{s:1:\"a\";i:47;s:1:\"b\";s:15:\"assign_taskShow\";s:1:\"c\";s:3:\"web\";}i:34;a:3:{s:1:\"a\";i:48;s:1:\"b\";s:23:\"assign_taskStatusUpdate\";s:1:\"c\";s:3:\"web\";}i:35;a:3:{s:1:\"a\";i:50;s:1:\"b\";s:14:\"assign_tickets\";s:1:\"c\";s:3:\"web\";}i:36;a:3:{s:1:\"a\";i:51;s:1:\"b\";s:15:\"assign_comments\";s:1:\"c\";s:3:\"web\";}i:37;a:3:{s:1:\"a\";i:52;s:1:\"b\";s:14:\"assign_profile\";s:1:\"c\";s:3:\"web\";}}s:5:\"roles\";a:0:{}}', 1778478754);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
CREATE TABLE IF NOT EXISTS `campaigns` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date_j` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date_g` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forecast_end_time_j` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forecast_end_time_g` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_end_date_j` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_end_date_g` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=>hold , 1=>in progress , 2=>active , 3=>done , 4=>postponed , 5=>rejected',
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `brand_id` bigint UNSIGNED NOT NULL,
  `agancy_id` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `campaigns_campaign_code_unique` (`campaign_code`),
  KEY `campaigns_user_id_foreign` (`user_id`),
  KEY `campaigns_brand_id_foreign` (`brand_id`),
  KEY `campaigns_agancy_id_foreign` (`agancy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=400 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_agancies`
--

DROP TABLE IF EXISTS `campaign_agancies`;
CREATE TABLE IF NOT EXISTS `campaign_agancies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaign_agancies`
--

INSERT INTO `campaign_agancies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'trend', '2025-11-26 06:49:56', '2025-11-26 06:53:44'),
(2, 'PGt', '2025-11-26 06:53:55', '2025-11-26 06:54:56'),
(3, 'magnet', '2025-11-26 06:54:07', '2025-11-26 06:54:07'),
(4, 'Fourmind', '2025-11-26 06:54:24', '2025-11-26 06:54:24'),
(5, 'Magnolia', '2025-11-26 06:54:45', '2025-11-26 06:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_brands`
--

DROP TABLE IF EXISTS `campaign_brands`;
CREATE TABLE IF NOT EXISTS `campaign_brands` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaign_brands`
--

INSERT INTO `campaign_brands` (`id`, `name`, `color`, `created_at`, `updated_at`) VALUES
(1, 'kallehpro', 'danger', '2025-11-26 08:36:54', '2025-11-26 08:42:02'),
(2, 'Kallehbrand', 'success', '2025-11-26 08:37:29', '2025-11-26 08:42:27'),
(3, 'Pemina', 'warning', '2025-11-26 08:38:31', '2025-11-26 08:42:42'),
(4, 'Majan', 'success', '2025-11-26 08:38:51', '2025-11-26 08:43:01'),
(5, 'Kallehicecream', 'info', '2025-11-26 08:39:30', '2025-11-26 08:44:41'),
(6, 'Delis', 'primary', '2025-11-26 08:39:53', '2025-11-26 08:44:51'),
(7, 'Ajil', 'success', '2025-11-26 08:46:10', '2025-11-26 08:46:10'),
(8, 'cheese house', 'warning', '2025-11-26 08:46:53', '2025-11-26 08:46:53'),
(9, 'Capo', 'dark', '2025-11-26 08:47:34', '2025-11-26 08:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_influencer`
--

DROP TABLE IF EXISTS `campaign_influencer`;
CREATE TABLE IF NOT EXISTS `campaign_influencer` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `campaign_id` bigint UNSIGNED NOT NULL,
  `influencer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `campaign_influencer_campaign_id_foreign` (`campaign_id`),
  KEY `campaign_influencer_influencer_id_foreign` (`influencer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'کمپین', NULL, '2025-10-19 01:59:45', '2025-10-19 02:08:27'),
(2, 'وب', 1, '2026-04-25 04:29:43', '2026-04-25 04:29:43'),
(3, 'نرم افزار', 2, '2026-04-25 04:40:13', '2026-04-25 04:40:13'),
(4, 'سایت', 2, '2026-04-25 04:40:42', '2026-04-25 04:40:42'),
(5, 'پلتفرم', 2, '2026-04-25 04:41:45', '2026-04-25 04:41:45'),
(6, 'سوشال مدیا', 5, '2026-04-29 01:46:41', '2026-04-29 01:46:41'),
(7, 'محتوا', 6, '2026-04-29 05:38:03', '2026-04-29 05:38:03'),
(9, 'سئو', 7, '2026-04-29 05:40:38', '2026-04-29 05:40:38'),
(10, 'باز طراحی سئو', NULL, '2026-04-29 05:40:43', '2026-04-29 05:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `comments_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments_id` bigint UNSIGNED NOT NULL,
  `parent_id` int DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0=>new,1=>accepted,2=>rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_comments_type_comments_id_index` (`comments_type`,`comments_id`),
  KEY `comments_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comments_type`, `comments_id`, `parent_id`, `user_id`, `name`, `email`, `mobile`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Task', 1, NULL, 1, NULL, NULL, NULL, 'Mouse, turning to Alice, they all looked puzzled.) \'He must have prizes.\' \'But who is to do so. \'Shall we try another.', '0', '2025-11-05 08:01:12', '2025-11-08 03:18:12'),
(2, 'App\\Models\\Task', 1, NULL, 1, NULL, NULL, NULL, 'And argued each case with my wife; And the muscular strength, which it gave to my right size: the next verse,\' the.', '0', '2025-11-05 18:51:12', '2025-11-08 03:18:12'),
(3, 'App\\Models\\Task', 1, NULL, 1, NULL, NULL, NULL, 'Lory, with a great many teeth, so she went on, spreading out the words: \'Where\'s the other two were using it as a.', '0', '2025-11-07 20:28:12', '2025-11-08 03:18:12'),
(4, 'App\\Models\\Task', 1, NULL, 1, NULL, NULL, NULL, 'Down, down, down. Would the fall was over. However, when they liked, so that altogether, for the fan and the White.', '0', '2025-11-05 21:25:12', '2025-11-08 03:18:12'),
(5, 'App\\Models\\Task', 1, NULL, 1, NULL, NULL, NULL, 'Alice, \'shall I NEVER get any older than you, and don\'t speak a word till I\'ve finished.\' So they couldn\'t get them.', '0', '2025-11-07 07:29:12', '2025-11-08 03:18:12'),
(6, 'App\\Models\\Task', 1, NULL, 1, NULL, NULL, NULL, 'All the time at the March Hare. Visit either you like: they\'re both mad.\' \'But I don\'t know,\' he went on to her ear.', '0', '2025-11-07 03:13:12', '2025-11-08 03:18:12'),
(11, 'App\\Models\\Task', 3, NULL, 13, NULL, NULL, NULL, 'Duchess, the Duchess! Oh! won\'t she be savage if I\'ve been changed in the trial done,\' she thought, \'it\'s sure to kill.', '0', '2025-11-07 12:33:12', '2025-11-08 03:18:12'),
(12, 'App\\Models\\Task', 3, NULL, 13, NULL, NULL, NULL, 'I do,\' said Alice indignantly, and she very soon came to the company generally, \'You are old,\' said the Lory hastily.', '0', '2025-11-06 00:28:12', '2025-11-08 03:18:12'),
(13, 'App\\Models\\Task', 3, NULL, 13, NULL, NULL, NULL, 'So she stood watching them, and then keep tight hold of it; then Alice, thinking it was only a pack of cards, after.', '0', '2025-11-06 15:49:12', '2025-11-08 03:18:12'),
(14, 'App\\Models\\Task', 3, NULL, 13, NULL, NULL, NULL, 'Alice in a whisper, half afraid that it was labelled \'ORANGE MARMALADE\', but to open them again, and she did not like.', '0', '2025-11-07 07:21:12', '2025-11-08 03:18:12'),
(15, 'App\\Models\\Task', 3, NULL, 13, NULL, NULL, NULL, 'Rabbit asked. \'No, I give it up,\' Alice replied: \'what\'s the answer?\' \'I haven\'t opened it yet,\' said the Queen, who.', '0', '2025-11-05 08:50:12', '2025-11-08 03:18:12'),
(16, 'App\\Models\\Task', 3, NULL, 13, NULL, NULL, NULL, 'I\'LL soon make you a present of everything I\'ve said as yet.\' \'A cheap sort of chance of this, so that it felt quite.', '0', '2025-11-06 12:55:12', '2025-11-08 03:18:12'),
(22, 'App\\Models\\Task', 9, NULL, 13, NULL, NULL, NULL, 'I hate cats and dogs.\' It was so much frightened to say \'Drink me,\' but the Mouse had changed his mind, and was.', '0', '2025-11-07 19:41:12', '2025-11-08 03:18:12'),
(23, 'App\\Models\\Task', 9, NULL, 13, NULL, NULL, NULL, 'Alice herself, and fanned herself with one eye; but to open them again, and looking anxiously about her. \'Oh, do let.', '0', '2025-11-05 09:11:12', '2025-11-08 03:18:12'),
(24, 'App\\Models\\Task', 9, NULL, 13, NULL, NULL, NULL, 'I like\"!\' \'You might just as well she might, what a dear little puppy it was!\' said Alice, a little quicker. \'What a.', '0', '2025-11-06 02:28:12', '2025-11-08 03:18:12'),
(25, 'App\\Models\\Task', 11, NULL, 15, NULL, NULL, NULL, 'This of course, Alice could see, as they used to do:-- \'How doth the little--\"\' and she hastily dried her eyes filled.', '0', '2025-11-07 22:18:12', '2025-11-08 03:18:12'),
(26, 'App\\Models\\Task', 11, NULL, 15, NULL, NULL, NULL, 'Cheshire Cat, she was coming back to yesterday, because I was going off into a graceful zigzag, and was just going to.', '0', '2025-11-04 18:48:12', '2025-11-08 03:18:12'),
(27, 'App\\Models\\Task', 11, NULL, 15, NULL, NULL, NULL, 'MINE.\' The Queen turned angrily away from him, and said \'What else had you to death.\"\' \'You are old,\' said the King.', '0', '2025-11-07 05:55:12', '2025-11-08 03:18:12'),
(28, 'App\\Models\\Task', 12, NULL, 12, NULL, NULL, NULL, 'I don\'t believe it,\' said Five, in a moment. \'Let\'s go on for some time busily writing in his confusion he bit a large.', '0', '2025-11-07 09:16:12', '2025-11-08 03:18:12'),
(29, 'App\\Models\\Task', 12, NULL, 12, NULL, NULL, NULL, 'Pigeon had finished. \'As if I would talk on such a new pair of boots every Christmas.\' And she began shrinking.', '0', '2025-11-04 22:05:12', '2025-11-08 03:18:12'),
(30, 'App\\Models\\Task', 12, NULL, 12, NULL, NULL, NULL, 'Hatter trembled so, that Alice quite jumped; but she heard her sentence three of the officers of the cattle in the.', '0', '2025-11-07 14:50:12', '2025-11-08 03:18:12'),
(31, 'App\\Models\\Task', 12, NULL, 12, NULL, NULL, NULL, 'I can\'t take LESS,\' said the Caterpillar. \'Well, perhaps your feelings may be ONE.\' \'One, indeed!\' said the Hatter, \'I.', '0', '2025-11-08 00:32:12', '2025-11-08 03:18:12'),
(37, 'App\\Models\\Task', 15, NULL, 13, NULL, NULL, NULL, 'King eagerly, and he says it\'s so useful, it\'s worth a hundred pounds! He says it kills all the children she knew that.', '0', '2025-11-05 22:44:12', '2025-11-08 03:18:12'),
(38, 'App\\Models\\Task', 15, NULL, 13, NULL, NULL, NULL, 'Alice caught the flamingo and brought it back, the fight was over, and she felt certain it must make me larger, it.', '0', '2025-11-08 02:14:12', '2025-11-08 03:18:12'),
(39, 'App\\Models\\Task', 15, NULL, 13, NULL, NULL, NULL, 'Long Tale They were just beginning to write this down on her toes when they passed too close, and waving their.', '0', '2025-11-04 18:21:12', '2025-11-08 03:18:12'),
(40, 'App\\Models\\Task', 15, NULL, 13, NULL, NULL, NULL, 'English,\' thought Alice; but she did not like the largest telescope that ever was! Good-bye, feet!\' (for when she.', '0', '2025-11-05 15:08:12', '2025-11-08 03:18:12'),
(41, 'App\\Models\\Task', 15, NULL, 13, NULL, NULL, NULL, 'Rabbit\'s voice along--\'Catch him, you by the carrier,\' she thought; \'and how funny it\'ll seem to have been ill.\' \'So.', '0', '2025-11-05 03:17:12', '2025-11-08 03:18:12'),
(46, 'App\\Models\\Task', 17, NULL, 1, NULL, NULL, NULL, 'They all sat down at her side. She was close behind us, and he\'s treading on my tail. See how eagerly the lobsters to.', '0', '2025-11-04 17:11:12', '2025-11-08 03:18:12'),
(47, 'App\\Models\\Task', 17, NULL, 1, NULL, NULL, NULL, 'I never knew whether it was done. They had a door leading right into it. \'That\'s very curious!\' she thought. \'But.', '0', '2025-11-06 14:09:12', '2025-11-08 03:18:12'),
(48, 'App\\Models\\Task', 17, NULL, 1, NULL, NULL, NULL, 'I THINK,\' said Alice. \'Why, you don\'t even know what it meant till now.\' \'If that\'s all I can go back and finish your.', '0', '2025-11-06 20:40:12', '2025-11-08 03:18:12'),
(49, 'App\\Models\\Task', 17, NULL, 1, NULL, NULL, NULL, 'ONE respectable person!\' Soon her eye fell upon a Gryphon, lying fast asleep in the act of crawling away: besides all.', '0', '2025-11-06 11:56:12', '2025-11-08 03:18:12'),
(50, 'App\\Models\\Task', 17, NULL, 1, NULL, NULL, NULL, 'The executioner\'s argument was, that her idea of the Gryphon, sighing in his confusion he bit a large piece out of the.', '0', '2025-11-05 01:35:12', '2025-11-08 03:18:12'),
(51, 'App\\Models\\Task', 17, NULL, 1, NULL, NULL, NULL, 'So they had been for some time busily writing in his turn; and both footmen, Alice noticed, had powdered hair that.', '0', '2025-11-07 02:45:12', '2025-11-08 03:18:12'),
(54, 'App\\Models\\Task', 46, NULL, 15, NULL, NULL, NULL, 'Why, I wouldn\'t say anything about it, you know.\' \'And what an ignorant little girl or a worm. The question is, what?\'.', '0', '2025-11-05 01:56:12', '2025-11-08 03:18:12'),
(55, 'App\\Models\\Task', 46, NULL, 15, NULL, NULL, NULL, 'Alice, \'it would be very likely true.) Down, down, down. Would the fall was over. Alice was more than that, if you.', '0', '2025-11-06 01:04:12', '2025-11-08 03:18:12'),
(56, 'App\\Models\\Task', 46, NULL, 15, NULL, NULL, NULL, 'I will just explain to you to learn?\' \'Well, there was no label this time it vanished quite slowly, beginning with the.', '0', '2025-11-07 06:30:12', '2025-11-08 03:18:12'),
(57, 'App\\Models\\Task', 46, NULL, 15, NULL, NULL, NULL, 'I\'ll eat it,\' said Alice aloud, addressing nobody in particular. \'She\'d soon fetch it here, lad!--Here, put \'em up at.', '0', '2025-11-06 17:04:12', '2025-11-08 03:18:12'),
(58, 'App\\Models\\Task', 46, NULL, 15, NULL, NULL, NULL, 'HE was.\' \'I never thought about it,\' said Alice as he came, \'Oh! the Duchess, who seemed ready to talk to.\' \'How are.', '0', '2025-11-07 22:56:12', '2025-11-08 03:18:12'),
(65, 'App\\Models\\Task', 49, NULL, 15, NULL, NULL, NULL, 'King. The White Rabbit put on one of the lefthand bit. * * * * * * * \'Come, my head\'s free at last!\' said Alice very.', '0', '2025-11-06 05:38:12', '2025-11-08 03:18:12'),
(66, 'App\\Models\\Task', 49, NULL, 15, NULL, NULL, NULL, 'Turtle--we used to read fairy-tales, I fancied that kind of sob, \'I\'ve tried every way, and then quietly marched off.', '0', '2025-11-06 11:56:12', '2025-11-08 03:18:12'),
(67, 'App\\Models\\Task', 50, NULL, 12, NULL, NULL, NULL, 'I wonder?\' And here poor Alice began to repeat it, but her head impatiently; and, turning to Alice, flinging the baby.', '0', '2025-11-06 20:04:12', '2025-11-08 03:18:12'),
(68, 'App\\Models\\Task', 50, NULL, 12, NULL, NULL, NULL, 'There was a child,\' said the Caterpillar. \'I\'m afraid I\'ve offended it again!\' For the Mouse had changed his mind, and.', '0', '2025-11-06 13:47:12', '2025-11-08 03:18:12'),
(69, 'App\\Models\\Task', 52, NULL, 1, NULL, NULL, NULL, 'King. \'It began with the bread-knife.\' The March Hare and his buttons, and turns out his toes.\' [later editions.', '0', '2025-11-06 16:47:12', '2025-11-08 03:18:12'),
(70, 'App\\Models\\Task', 52, NULL, 1, NULL, NULL, NULL, 'Alice. \'Why?\' \'IT DOES THE BOOTS AND SHOES.\' the Gryphon went on. Her listeners were perfectly quiet till she was.', '0', '2025-11-06 15:41:12', '2025-11-08 03:18:12'),
(71, 'App\\Models\\Task', 52, NULL, 1, NULL, NULL, NULL, 'As she said aloud. \'I must be a queer thing, to be done, I wonder?\' And here Alice began in a sorrowful tone, \'I\'m.', '0', '2025-11-05 03:06:12', '2025-11-08 03:18:12'),
(72, 'App\\Models\\Task', 53, NULL, 13, NULL, NULL, NULL, 'Gryphon. \'Then, you know,\' said the Caterpillar took the watch and looked at the righthand bit again, and the.', '0', '2025-11-08 01:07:12', '2025-11-08 03:18:12'),
(73, 'App\\Models\\Task', 53, NULL, 13, NULL, NULL, NULL, 'It was the Hatter. \'You might just as well say,\' added the Gryphon, and the sound of a procession,\' thought she, \'what.', '0', '2025-11-07 21:52:12', '2025-11-08 03:18:12'),
(74, 'App\\Models\\Task', 53, NULL, 13, NULL, NULL, NULL, 'This time there were a Duck and a crash of broken glass. \'What a pity it wouldn\'t stay!\' sighed the Lory, as soon as.', '0', '2025-11-07 17:08:12', '2025-11-08 03:18:12'),
(75, 'App\\Models\\Task', 54, NULL, 15, NULL, NULL, NULL, 'I should frighten them out with trying, the poor child, \'for I never understood what it meant till now.\' \'If that\'s.', '0', '2025-11-05 18:03:12', '2025-11-08 03:18:12'),
(76, 'App\\Models\\Task', 54, NULL, 15, NULL, NULL, NULL, 'Queen. \'Never!\' said the Duchess, who seemed too much frightened that she had peeped into the wood. \'It\'s the Cheshire.', '0', '2025-11-05 07:44:12', '2025-11-08 03:18:12'),
(77, 'App\\Models\\Task', 54, NULL, 15, NULL, NULL, NULL, 'Alice soon began talking again. \'Dinah\'ll miss me very much confused, \'I don\'t think they play at all know whether it.', '0', '2025-11-07 13:08:12', '2025-11-08 03:18:12'),
(78, 'App\\Models\\Task', 54, NULL, 15, NULL, NULL, NULL, 'Alice began to repeat it, but her head on her toes when they had a large dish of tarts upon it: they looked so good.', '0', '2025-11-06 16:50:12', '2025-11-08 03:18:12'),
(79, 'App\\Models\\Task', 54, NULL, 15, NULL, NULL, NULL, 'The Queen had ordered. They very soon finished it off. \'If everybody minded their own business,\' the Duchess by this.', '0', '2025-11-05 22:28:12', '2025-11-08 03:18:12'),
(88, 'App\\Models\\Task', 57, NULL, 13, NULL, NULL, NULL, 'VERY turn-up nose, much more like a stalk out of the window, and one foot up the fan and gloves, and, as the hall was.', '0', '2025-11-05 10:59:12', '2025-11-08 03:18:12'),
(89, 'App\\Models\\Task', 57, NULL, 13, NULL, NULL, NULL, 'At this moment the door between us. For instance, suppose it doesn\'t understand English,\' thought Alice; \'but a grin.', '0', '2025-11-05 04:16:12', '2025-11-08 03:18:12'),
(90, 'App\\Models\\Task', 69, NULL, 1, NULL, NULL, NULL, 'Hatter. \'Stolen!\' the King said, with a knife, it usually bleeds; and she tried the effect of lying down with one.', '0', '2025-11-07 14:31:12', '2025-11-08 03:18:12'),
(91, 'App\\Models\\Task', 69, NULL, 1, NULL, NULL, NULL, 'This answer so confused poor Alice, \'when one wasn\'t always growing larger and smaller, and being ordered about by.', '0', '2025-11-07 06:37:12', '2025-11-08 03:18:12'),
(92, 'App\\Models\\Task', 69, NULL, 1, NULL, NULL, NULL, 'Alice felt dreadfully puzzled. The Hatter\'s remark seemed to Alice severely. \'What are they doing?\' Alice whispered to.', '0', '2025-11-07 02:50:12', '2025-11-08 03:18:12'),
(93, 'App\\Models\\Task', 69, NULL, 1, NULL, NULL, NULL, 'Improve his shining tail, And pour the waters of the cupboards as she could. \'The game\'s going on between the.', '0', '2025-11-05 11:03:12', '2025-11-08 03:18:12'),
(94, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'سلام تست', '0', '2025-11-08 03:58:41', '2025-11-08 03:58:41'),
(95, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'تست کامنت', '0', '2025-11-08 04:12:34', '2025-11-08 04:12:34'),
(96, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'تست', '0', '2025-11-08 04:31:17', '2025-11-08 04:31:17'),
(97, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'یییایییای', '0', '2025-11-08 04:33:09', '2025-11-08 04:33:09'),
(98, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'تسسسسسسسسسسسسست', '0', '2025-11-08 04:33:23', '2025-11-08 04:33:23'),
(99, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'تادتخهتخهتخهح', '0', '2025-11-08 04:38:35', '2025-11-08 04:38:35'),
(100, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:45', '2025-11-29 05:38:45'),
(101, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:45', '2025-11-29 05:38:45'),
(102, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:47', '2025-11-29 05:38:47'),
(103, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:47', '2025-11-29 05:38:47'),
(104, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:47', '2025-11-29 05:38:47'),
(105, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:47', '2025-11-29 05:38:47'),
(106, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:48', '2025-11-29 05:38:48'),
(107, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:48', '2025-11-29 05:38:48'),
(108, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:48', '2025-11-29 05:38:48'),
(109, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:48', '2025-11-29 05:38:48'),
(110, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:48', '2025-11-29 05:38:48'),
(111, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:48', '2025-11-29 05:38:48'),
(112, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:58', '2025-11-29 05:38:58'),
(113, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:58', '2025-11-29 05:38:58'),
(114, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:59', '2025-11-29 05:38:59'),
(115, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:59', '2025-11-29 05:38:59'),
(116, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:59', '2025-11-29 05:38:59'),
(117, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:59', '2025-11-29 05:38:59'),
(118, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:59', '2025-11-29 05:38:59'),
(119, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:59', '2025-11-29 05:38:59'),
(120, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:59', '2025-11-29 05:38:59'),
(121, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'کامنت', '0', '2025-11-29 05:38:59', '2025-11-29 05:38:59'),
(122, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'نتدتند', '0', '2025-11-29 05:42:29', '2025-11-29 05:42:29'),
(123, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'sfsfvsfvsv', '0', '2025-11-30 03:53:04', '2025-11-30 03:53:04'),
(124, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'sfsfvsfvsv', '0', '2025-11-30 03:53:04', '2025-11-30 03:53:04'),
(125, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'تست', '0', '2026-04-19 02:32:10', '2026-04-19 02:32:10'),
(126, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'تست', '0', '2026-04-19 02:32:10', '2026-04-19 02:32:10'),
(127, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'تست', '0', '2026-04-19 02:33:55', '2026-04-19 02:33:55'),
(128, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'تست', '0', '2026-04-19 02:33:55', '2026-04-19 02:33:55'),
(129, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'تست', '0', '2026-04-19 02:33:59', '2026-04-19 02:33:59'),
(130, 'App\\Models\\Task', 4, NULL, 15, NULL, NULL, NULL, 'تست', '0', '2026-04-19 02:33:59', '2026-04-19 02:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'شیر', NULL, '2025-10-13 02:42:55', '2025-12-06 08:27:33'),
(2, 'چربی', NULL, '2025-10-13 02:46:42', '2025-12-06 08:30:57'),
(3, 'ماست', NULL, '2025-10-13 02:47:50', '2025-12-06 08:31:38'),
(4, 'قنادی', NULL, '2025-10-13 02:48:02', '2025-12-06 08:31:49'),
(5, 'پنیر', NULL, '2025-12-06 08:32:01', '2025-12-06 08:32:01'),
(6, 'دسر', NULL, '2025-12-06 08:35:45', '2025-12-06 08:35:45'),
(7, 'پمینا', NULL, '2025-12-06 08:35:55', '2025-12-06 08:35:55'),
(8, 'کاپو', NULL, '2025-12-06 08:36:08', '2025-12-06 08:36:08'),
(9, 'کاتلا', NULL, '2025-12-06 08:36:19', '2025-12-06 08:36:19'),
(10, 'نوشیدنی', NULL, '2025-12-06 08:36:29', '2025-12-06 08:36:29'),
(11, 'سس', NULL, '2025-12-06 08:38:39', '2025-12-06 08:38:39'),
(12, 'کاله پرو - غذای ورزشکاران', NULL, '2025-12-06 08:40:45', '2025-12-06 08:40:45'),
(13, 'کاله پرو - مکمل', NULL, '2025-12-06 08:41:00', '2025-12-06 08:41:00'),
(14, 'قهوه', NULL, '2025-12-06 08:41:15', '2025-12-06 08:41:15'),
(15, 'غذای کودک', NULL, '2025-12-06 08:41:29', '2025-12-06 08:41:29'),
(16, 'سلینو', NULL, '2025-12-06 08:41:41', '2025-12-06 08:41:41'),
(17, 'آژیل', NULL, '2025-12-06 08:41:52', '2025-12-06 08:41:52'),
(18, 'بستنی', NULL, '2025-12-06 08:42:02', '2025-12-06 08:42:02'),
(19, 'مارکتینگ', NULL, '2025-12-07 07:34:27', '2025-12-07 07:34:27'),
(20, 'دیجیتال', 19, '2025-12-07 07:34:41', '2025-12-07 07:34:41'),
(21, 'CRM', 19, '2025-12-07 07:35:00', '2025-12-07 07:35:00'),
(22, 'آکادمی سولیکو', 19, '2025-12-07 07:35:19', '2025-12-07 07:35:19'),
(23, 'تحقیقات بازار', 19, '2025-12-07 07:35:31', '2025-12-07 07:35:31'),
(24, 'تبلیغات', 19, '2025-12-07 07:35:46', '2025-12-07 07:35:46'),
(25, 'دوغ', NULL, '2025-12-13 06:51:27', '2025-12-13 06:51:27'),
(26, 'آتی بال', 19, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department_brand`
--

DROP TABLE IF EXISTS `department_brand`;
CREATE TABLE IF NOT EXISTS `department_brand` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `department_id` bigint UNSIGNED DEFAULT NULL,
  `brand_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department_brand_department_id_foreign` (`department_id`),
  KEY `department_brand_brand_id_foreign` (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_brand`
--

INSERT INTO `department_brand` (`id`, `department_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(2, 1, 5, NULL, NULL),
(3, 1, 1, NULL, NULL),
(4, 1, 2, NULL, NULL),
(5, 1, 3, NULL, NULL),
(6, 2, 2, NULL, NULL),
(7, 3, 2, NULL, NULL),
(8, 4, 3, NULL, NULL),
(9, 5, 3, NULL, NULL),
(10, 6, 3, NULL, NULL),
(11, 7, 4, NULL, NULL),
(12, 8, 4, NULL, NULL),
(13, 9, 5, NULL, NULL),
(14, 10, 5, NULL, NULL),
(15, 11, 5, NULL, NULL),
(16, 12, 5, NULL, NULL),
(17, 13, 5, NULL, NULL),
(18, 14, 5, NULL, NULL),
(19, 15, 6, NULL, NULL),
(20, 16, 10, NULL, NULL),
(21, 17, 10, NULL, NULL),
(22, 18, 10, NULL, NULL),
(38, 23, 25, NULL, NULL),
(39, 25, 23, NULL, NULL),
(40, 25, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `connection` text COLLATE utf8mb4_general_ci NOT NULL,
  `queue` text COLLATE utf8mb4_general_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `implemente_units`
--

DROP TABLE IF EXISTS `implemente_units`;
CREATE TABLE IF NOT EXISTS `implemente_units` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `implemente_units`
--

INSERT INTO `implemente_units` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'مارکتینگ', NULL, '2026-04-22 08:45:47', '2026-04-22 08:45:47'),
(2, 'دیجیتال', 1, '2026-04-22 08:48:39', '2026-04-22 08:48:39'),
(3, 'تحقیقات بازار', 1, '2026-04-22 08:48:51', '2026-04-22 08:48:51'),
(4, 'آفلاین', 1, '2026-04-22 08:49:02', '2026-04-22 08:49:02'),
(5, 'CRM', 1, '2026-04-22 08:49:15', '2026-04-22 08:49:15'),
(6, 'آکادمی سولیکو', 1, '2026-04-22 08:49:38', '2026-04-22 08:49:38'),
(7, 'آتی بال', 1, '2026-04-22 08:49:52', '2026-04-22 08:49:52'),
(8, 'وب', 2, '2026-04-22 08:50:34', '2026-04-22 08:50:34'),
(9, 'content', 2, '2026-04-22 08:50:49', '2026-04-22 08:50:49'),
(10, 'campaign', 2, '2026-04-22 08:51:07', '2026-04-22 08:51:07'),
(11, 'social media', 2, '2026-04-22 08:51:26', '2026-04-22 08:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `influencers`
--

DROP TABLE IF EXISTS `influencers`;
CREATE TABLE IF NOT EXISTS `influencers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `instagram_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `credibility` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=574 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `influencers`
--

INSERT INTO `influencers` (`id`, `instagram_id`, `comment`, `credibility`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'imarketor_', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(2, 'mobi_land__', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(3, 'mr.taster', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(4, 'shailimahmoudi', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(5, 'mahdi_food_taster', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(6, 'aziz.mhmdi', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(7, 'zahrabiparvam', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(8, 'milad_taster', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(9, 'amir_food_review', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(10, 'food.spy.ir', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(11, 'farhadpaz', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(12, 'sadegh.booghy', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(13, 'hassan_reyvandi', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(14, 'amoo_roohi_foodlover', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(15, 'milad_khahhh', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(16, 'mohamadaminkarimpor', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(17, 'Erfan\n  Alirezai', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(18, 'ashkan.shadkami', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(19, 'pedramkazemiiiiii', 'بلک  لیست ', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(20, 'mbna.i', 'no comment yet', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(21, 'faeze_zz', 'no comment yet', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(22, 'sherma_pgn', 'no comment yet', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(23, 'faeze_nesaei', 'no comment yet', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(24, 'irajtaheriii', 'no comment yet', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(25, 'my.hasti', 'no comment yet', '0', NULL, '2025-11-29 04:38:04', '2025-11-29 04:38:04'),
(26, 'maramdreva', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(27, 'khashayarvaziri', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(28, 'mr_tabee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(29, 'immiliii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(30, 'atieh.kamaliii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(31, 'arsin_familly', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(32, 'atena_dashtii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(33, 'melikanikkhah_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(34, 'superreview_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(35, 'fatemepiroozram', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(36, 'tasty.art', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(37, 'imarylife', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(38, 'panizasadi_cook', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(39, 'mocook.h', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(40, 'mozhgan.akbarpor', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(41, 'cookalireza', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(42, 'khooneye.foroogh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(43, 'minipordel', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(44, 'roko.show', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(45, 'sepideh_lifee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(46, 'samirabyky', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(47, 'behnam__gholami', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(48, 'kamandoonz', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(49, 'samar.chef', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(50, 'zar_nex', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(51, 'saladekhoshhal', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(52, 'sahar_lovely_home', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(53, 'leila_vakiili', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(54, 'fatemehbostaak', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(55, 'gandom.gilak', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(56, 'sara.paniz.66', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(57, 'itselmirakhani', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(58, 'mitranemat', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(59, 'nasrin.home', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(60, 'shooshtarian.family', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(61, 'sorour_family', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(62, 'elhamtahmasebiii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(63, 'marmar_familly', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(64, 'nastaran.akbariiii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(65, 'nazgoleman', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(66, 'neda_aneli24', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(67, 'morvaridmoujedi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(68, 'aseman.family', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(69, 'masi_diary', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(70, 'aidaa_naderii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(71, 'mamane.negin.radin', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(72, 'vihan.ayhan.familyy', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(73, 'mano_niniha', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(74, 'mahya.rahimi71', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(75, 'madar_va_koodak2', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(76, 'parisa.korouni', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(77, 'elmira.jalali_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(78, 'lovely_home_nana', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(79, 'zizi.amraie', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(80, 'fereshteh.kiia', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(81, 'mahdiye__lifestyle', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(82, '4gholoha_1400', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(83, 'mehrshadgolmakanian', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(84, 'about_donix', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(85, 'ziziharandi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(86, 'baran.and.tara', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(87, 'sevin.familly', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(88, 'elsaabdollahii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(89, 'avin_babaei', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(90, 'baran.nasrollahi.17', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(91, 'berkeh.abin', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(92, 'ashpazi.foodspy', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(93, 'cook.mag', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(94, 'tisel_yum', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(95, 'ako__food', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(96, 'atiiye__', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(97, 'keyhan.1', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(98, 'chef.bikhatar', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(99, 'navab.ebrahimiii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(100, 'feresh____t', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(101, 'khaterehdiary', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(102, 'goli_nazarii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(103, 'parastoo.jabbari', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(104, 'elnaz_jafaariiii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(105, 'hadissgh_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(106, 'aida_babaee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(107, 'photoby.fateme', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(108, 'yadi.food', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(109, 'amenehkazemi.ak', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(110, 'eli.sahebgharan', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(111, 'safa.diaryy', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(112, 'delaram.style', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(113, 'melikalife1', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(114, 'itsme_farnoosh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(115, 'shiva.homee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(116, 'mohi_lifestyle_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(117, 'zahraa.sweet.homee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(118, 'saharbeygii_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(119, 'melika._.lifestyle', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(120, 'ghazalii_amir', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(121, 'parastooreview', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(122, 'mobinhealler', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(123, 'nimaebrahimi_1', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(124, 'maryis_life', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(125, 'mrchef.iran', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(126, 'poopak_food', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(127, 'chefardalan', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(128, 'amirhosinkeshavarz', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(129, 'khoshkhorak', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(130, 'shivanosrati', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(131, 'kamelia_roodneshin', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(132, 'mr.foodx', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(133, 'the.yl', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(134, '33yac', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(135, 'mnr_nsh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(136, 'sarashapoori', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(137, 'arashghoseiri', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(138, 'minorbeatbox', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(139, 'benyamincoffee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(140, 'pghfhm', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(141, 'saharchef', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(142, 'amin.labafi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(143, 'setareehn', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(144, 'peymood', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(145, 'sepidehkhaghanii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(146, 'parastoo.qbani1', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(147, 'raazshamss', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(148, 'amiinmoghadam', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(149, 'mahsacooks', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(150, 'saeiiide_loovarz', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(151, 'arqavanafshari', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(152, 'melbourne_sarashpaz', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(153, 'paria.mortaji', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(154, 'parmistaster', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(155, 'parisam_reviews', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(156, 'chinobysara', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(157, 'its.forozan', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(158, 'arezo_kashanii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(159, 'marjan.kiiaa', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(160, 'the.zarra', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(161, 'sarah.oghabi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(162, 'khashioniloo', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(163, 'ghazaleh.cooking', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(164, 'soheil.cooks', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(165, 'movingdiet', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(166, 'somayeh_mohammadi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(167, 'pardiskhalilii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(168, 'jalali_diett', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(169, 'foodgrambyelham', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(170, 'fitopia__', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(171, 'dr.maryam.mahmoudi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(172, 'the_real_nutrition', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(173, 'jibgym', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(174, 'docmehdirebel', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(175, 'dr_saharbourbour', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(176, 'dr_rashidbeygi_diet', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(177, 'dr.somayeh_mohammadi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(178, 'damoon_ashtary', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(179, 'hamidmokhtari', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(180, 'dailymetanat', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(181, 'hildagholamian', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(182, 'maryam.toosi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(183, 'zahrajoodaki_official', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(184, 'saeed_mousavi23', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(185, 'mrregym', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(186, 'mohammadkhakbaz125', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(187, 'mahdyarrashvand', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(188, 'mahshidiet', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(189, 'yaasamin_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(190, 'kimiaazar_fitness', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(191, 'seyedmahdi_mirjalili', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(192, 'mortezasedaghat', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(193, 'aytak_salamat15', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(194, 'aminazarneshin_coach', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(195, 'fitmissinsta', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(196, 'mahsastyle', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(197, 'fit_with_tah', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(198, 'tisel_products', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(199, 'mahtabhome', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(200, 'mahsasaberi8', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(201, 'amirjasemi_fit', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(202, 'atenagolfeshani', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(203, 'modaressii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(204, 'foroozanyf', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(205, 'mr_fitmajid', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(206, 'shayansedighi_official', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(207, 'drabaghaei', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(208, 'mostahub', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(209, 'romina_salek_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(210, 'selinaetemadi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(211, 'paydartan', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(212, 'mahshadgoodarzii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(213, 'merxjsw', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(214, 'mahdi_olfati_gymnastics', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(215, 'dietbyarta', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(216, 'elandfitt', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(217, 'pardis_abdolmohammadi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(218, 'behrozfaar', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(219, 'marjansalahshouri', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(220, 'bardia_saadat.6', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(221, 'morteza_sharifi12', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(222, 'poriya_khanzadeh9', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(223, 'iamirkamyab', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(224, 'navid.health', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(225, 'rozbh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(226, 'nooshafarinmoosavi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(227, 'amirezaebrahime', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(228, 'leosaeid.adrenaline', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(229, 'isensi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(230, 'diet_with.mona', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(231, 'ariansalimi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(232, 'aytak_salamat', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(233, 'zahrakiani_official', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(234, 'niimashams', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(235, 'majiid_saeedi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(236, 'nahid.kiyani_official', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(237, 'barcodebeatbox', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(238, 'hamideh_esmailnezhad', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(239, 'hosein_.fit', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(240, 'kimfit_diet', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(241, 'nazanin.diet.ir', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(242, 'stubbornzaraa', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(243, 'mortezasedaqat', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(244, 'morsalyyy', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(245, 'amin_ellenor', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(246, 'ali.bakhtiari_fit', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(247, 'hossein_attarbashi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(248, 'mohammadrezaa_abrishami', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(249, 'erfan.eghbalii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(250, 'mofit__team', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(251, 'lean_arash', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(252, 'hamedmakvandii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(253, 'afsi.fit', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(254, 'parsaquf', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(255, 'parhamveysi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(256, 'majidsaeedifit', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(257, 'mehdiiak47', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(258, 'itahaaaaa', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(259, 'armaghan.daily', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(260, 'babak_eshaqi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(261, 'zahra.newstyle', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(262, 'about_suli', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(263, 'pariakhalili_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(264, 'glory.fitland', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(265, 'chemcooks', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(266, 'firozehrabanifard', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(267, 'fitlife.sorayya', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(268, 'farahghasemlou', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(269, 'bonappetitbynasrin', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(270, 'zahra_mostafaeee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(271, 'asallifestylee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(272, 'mamareza_17', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(273, 'mr.regym', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(274, 'parastoreview', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(275, 'workout_athletics', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(276, 'amirabbaskavandi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(277, 'mehdi_sultanii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(278, 'shahinmolaei', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(279, 'mr.podcastt', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(280, 'hengame_mansorkhaki', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(281, 'pariamoradi_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(282, 'poopakmoradi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(283, '_atreyhaan_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(284, 'sayehahmadzaadeh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(285, 'miladhoseiiini', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(286, 'azi.saburi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(287, 'rezaigdr', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(288, 'safoura.mountain', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(289, 'fozhaaaan', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(290, 'farzanehfasihi1', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(291, 'shgha1_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(292, 'sepideh_cheff', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(293, 'feresh____', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(294, 'tala.si', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(295, 'vaa.nil', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(296, 'sepid.story', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(297, 'nafis_style', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(298, 'zahra_moslleh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(299, 'fiuz.food', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(300, 'hiva_food_gallery', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(301, 'assalyousefiii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(302, 'sogolmisaghii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(303, 'taladis.tafazoli', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(304, 'minikaren_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(305, 'leylibaharlou', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(306, 'sararreview', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(307, 'shop.bazi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(308, 'eliirax', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(309, 'linoo.tea', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(310, 'jibotitoon', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(311, 'negin_musavi_nail', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(312, 'sogandbzad', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(313, 'zahra_lifebook', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(314, 'foodfarmooni', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(315, 'mitrayosefi_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(316, 'gelarehmehri', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(317, 'dorsa_chatriiii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(318, 'hope.styl', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(319, 'hmn.iranmanesh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(320, 'mozhgan.kitchen', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(321, 'saharshams_cooking', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(322, 'afsanlife', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(323, 'chef.hanam', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(324, 'faeze_nesaei/', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(325, 'soheila_ghezelbash', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(326, 'about_shaamim', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(327, 'mary.food.mood', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(328, 'saaraa_khansari', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(329, 'helia_saffar', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(330, 'mohihb', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(331, 'hele.life', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(332, 'shaghayegh_bakhshizadeh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(333, 'hosseinsharaf', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(334, 'heshmat_tamtaraagh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(335, 'zohrehsor', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(336, 'sabadehghaaan__', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(337, 'balmypeony', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(338, 'ailinghane', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(339, 'dorsa_pgn', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(340, 'negintazang', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(341, 'impouyaan', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(342, 'zemor__', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(343, '_melshin_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(344, 'melika_asdzd', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(345, 'itsbanidalili', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(346, 'saarraaee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(347, 'mahtab.shadii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(348, 'amirfazeli__', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(349, 'nazanin_faaard', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(350, 'matinehnajafi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(351, 'soodehparsa', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(352, 'salar_mojadam', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(353, 'hamidebrahimnia', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(354, 'cafefocaccia', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(355, 'sahra.farzin', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(356, 'saeideh_tifood', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(357, 'benkhoram', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(358, 'setareh_abadian', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(359, 'mamonalife', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(360, 'daniyal_food', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(361, 'parisa.yazdaniiiii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(362, 'delsa_mirzaeiiii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(363, 'diyakothechef', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(364, 'navidghiassi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(365, 'leilyzomorodian', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(366, 'maryamsasa', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(367, 'peransakhamseh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(368, 'setarehparsa', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(369, 'elhamjnt', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(370, 'fateeme_hosseini', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(371, 'raha_rose_farsaee2', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(372, '_maayiiii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(373, 'zinevesht', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(374, 'maahsas.area', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(375, 'fahime__byt', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(376, 'dr.talebipoor', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(377, 'gandom.heydariii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(378, 'saharyazdani.diet', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(379, 'mhlashahmiri', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(380, 'liaam_family', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(381, 'farimah_daily_life', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(382, 'mimo.by.mina', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(383, 'fatemeh_mohamdzade', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(384, 'hassan_rostami', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(385, 'rural_cuisine', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(386, 'marjanchef.ir', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(387, 'mayi_life', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(388, 'country_meals_vlog', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(389, 'soudeh_cakes', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(390, 'toobayaghobi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(391, 'reyhan.style', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(392, 'esfahanblogger_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(393, 'mohaddeseh_sy', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(394, 'mulan.kitchen', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(395, 'farhad_hassaniii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(396, 'ali__ziyarati', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(397, 'kavowcamp', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(398, 'dorsamajiidi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(399, 'tina_travel_art', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(400, 'nazaninmoayerii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(401, 'tifanny_stylee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(402, 'royaahamzehlo', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(403, 'unicorns_tour', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(404, 'morteza.akbarlou', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(405, 'roya_a_food', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(406, 'ncmmua', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(407, 'rosha_qm', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(408, 'anahita__hashemzade', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(409, 'paria_shokraneh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(410, 'kopol.taster', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(411, 'mahoor.nazarii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(412, 'elnaz jaffari', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(413, 'sawmaan_ps', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(414, 'vahid_boush', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(415, 'mehradshabani', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(416, 'diyana.rh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(417, 'pouyanights', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(418, 'alirezababaei__official', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(419, 'mohadsedehghan', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(420, 'leili_ghamkhar', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(421, 'besun_healthyfood', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(422, 'faeze__diet', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(423, 'fioreh.online', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(424, 'kala.check', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(425, 'super review', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(426, 'parastoo review', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(427, 'roko show', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(428, 'aydavtndaily', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(429, 'reyhooon_daily', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(430, 'setayesh_hoseyni', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(431, 'melika.minivlog', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(432, 'bahari.glv', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(433, 'maryamaanee', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(434, 'mahsa_motahariann', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(435, 'hedieh_moazzezi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(436, 'parisanpixy', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(437, 'shima.peikaar', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(438, 'wishihesari', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(439, 'khatooneshqi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(440, 'zarichii_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(441, 'kowsar.lifestyle', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(442, 'amirhoseinkeshavarz', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(443, 'salarmojadam', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(444, 'samdelavar', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(445, 'parisa.yazdaniiiiii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(446, '___aroosh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(447, 'feresh___t', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(448, 'alimona.trips', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(449, 'pouriya', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(450, 'irajtaherii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(451, 'thetaraneh', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(452, 'yadi_food', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(453, '38phz', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(454, 'delaramsouri', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(455, 'aliyegane', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(456, 'soheilkhalili', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(457, 'mahnegar_vakili', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(458, 'kamand.azf', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(459, 'saman.grmi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(460, 'pouryia', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(461, 'gol_anar', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(462, 'farzadkhalili406', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(463, 'kimiyayaz', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(464, '_samdelavar_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(465, 'mahaan.mehranii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(466, 'byardalan', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(467, 'maandani', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(468, 'samdelavar_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(469, 'mozamaniii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(470, 'nasim.noorelahii', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(471, 'mdrzkiani', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(472, 'mojganghorbani', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(473, 'armin_ketabi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(474, 'aerialsepid', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(475, 'kimiayazdian', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(476, 'azardooookht', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(477, 'sogand.kamani', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(478, '_saniik_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(479, 'thepanizgm', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(480, 'sarina_rhmn', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(481, 'sogolshakeri', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(482, 'hassanvand.fateme', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(483, 'dellfam', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(484, 'zara_abedi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(485, 'mahfamzzz', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(486, 'alalecorner', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(487, 'alexmehrabi', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(488, 'ranly.b', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(489, 'arman_aaf', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(490, '_fashii_', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(491, 'hosynsiri', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(492, 'farzin.rahmani1', 'no comment yet', '0', NULL, '2025-11-29 04:38:05', '2025-11-29 04:38:05'),
(493, 'ar5shiya', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(494, 'parikaaaaa', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(495, 'kimia.behboodi', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(496, '_zarichi_', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(497, 'amirsamarahaa', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(498, 'gisoo.motahari', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(499, 'rainbari', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(500, 'saadati_familly', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(501, 'afsane.zahmatkesh', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(502, 'barana__family', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(503, 'maryam_azmoodeeh', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(504, 'javaher.life', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(505, 'zeynab_.6333', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(506, '5gholoha.minodashti_1402', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(507, 'khayati_khanomfateme', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(508, 'fatemeh.bano51', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(509, 'sara.banoo.75', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(510, 'ranaomid_20', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(511, 'sama.moori', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(512, 'kardasti_rahat', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(513, 'kardasti.saz', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(514, 'fanashpaziii', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(515, 'tarfand.akasi', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(516, 'khanedarie.bartar', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(517, '_qoncheh', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06');
INSERT INTO `influencers` (`id`, `instagram_id`, `comment`, `credibility`, `deleted_at`, `created_at`, `updated_at`) VALUES
(518, 'ashpazie_golbano', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(519, 'ashpazi__bebin', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(520, 'khanome.shiik', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(521, 'ashpazi.saeede', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(522, 'ashpazi_khob', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(523, 'masoumehrasouli', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(524, 'ashpazi_ba_shima', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(525, 'ashpazdoon', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(526, 'tarfaandoon', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(527, 'tanorpaz', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(528, 'beauti.mag', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(529, 'pluss_mag', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(530, '_baft_mo', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(531, 'banovaneh_', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(532, 'taziin_khalaghiyat', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(533, 'kargahekoodak', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(534, 'pigofact', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(535, 'select.pedia', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(536, 'fereshteh._.esmaeilii', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(537, 'pegah_saberzadeh', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(538, 'ahmadmehrabn', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(539, 'athena.eftekharifar', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(540, 'hamed.shahanii', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(541, 'shahrzad_tik_tok', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(542, 'tina.haghani', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(543, 'hesambabil', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(544, 'melodirahmati', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(545, 'amirmirzaie', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(546, 'homan.iranmanesh', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(547, 'mohammadaminseif', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(548, 'sadat.onvani', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(549, 'bahareparastar', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(550, 'khodephati', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(551, 'dorfact', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(552, 'tiksmag', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(553, 'histofeed', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(554, 'alzaimer__', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(555, 'klonomi', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(556, 'raze_jahan', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(557, 'math_4_kids', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(558, 'ayamidooni', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(559, 'the_fak_tis', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(560, 'khanedarie_novin', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(561, 'sosfact', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(562, 'not.pedia', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(563, 'moonsun.vibez', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(564, 'kimia.behboudi', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(565, 'vv0rld', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(566, 'manimozakka', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(567, 'mahyarhassan', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(568, 'gitaa.home', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(569, 'sabamorshedii', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(570, 'khanom_o_aghay.m_', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(571, 'adelkhaan', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06'),
(572, 'sabamorshedi', 'no comment yet', '0', NULL, '2025-11-29 04:38:06', '2025-11-29 04:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `influencer_dates`
--

DROP TABLE IF EXISTS `influencer_dates`;
CREATE TABLE IF NOT EXISTS `influencer_dates` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `influencer_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `forecast_date_j` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forecast_date_g` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date_j` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date_g` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `influencer_dates_influencer_id_foreign` (`influencer_id`),
  KEY `influencer_dates_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `influencer_infos`
--

DROP TABLE IF EXISTS `influencer_infos`;
CREATE TABLE IF NOT EXISTS `influencer_infos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `influencer_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `page_link` text COLLATE utf8mb4_unicode_ci,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `followers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ER` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'نرخ تعامل',
  `average_like` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `average_comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '0=>in list , 1=>pending , 2=>published',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `influencer_infos_influencer_id_foreign` (`influencer_id`),
  KEY `influencer_infos_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `influencer_posts`
--

DROP TABLE IF EXISTS `influencer_posts`;
CREATE TABLE IF NOT EXISTS `influencer_posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `influencer_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `post_id` text COLLATE utf8mb4_unicode_ci,
  `views` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interaction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_activity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `save_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `influencer_posts_influencer_id_foreign` (`influencer_id`),
  KEY `influencer_posts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `influencer_prices`
--

DROP TABLE IF EXISTS `influencer_prices`;
CREATE TABLE IF NOT EXISTS `influencer_prices` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `influencer_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `post_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `influencer_prices_influencer_id_foreign` (`influencer_id`),
  KEY `influencer_prices_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `influencer_stories`
--

DROP TABLE IF EXISTS `influencer_stories`;
CREATE TABLE IF NOT EXISTS `influencer_stories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `influencer_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `story_link` text COLLATE utf8mb4_unicode_ci,
  `views` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interaction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_activity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `save_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `influencer_stories_influencer_id_foreign` (`influencer_id`),
  KEY `influencer_stories_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_general_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_11_060309_create_permission_tables', 1),
(5, '2025_10_11_121422_add_last_name_to_users_table', 1),
(6, '2025_10_11_122639_create_positions_table', 1),
(7, '2025_10_11_122749_add_position_id_to_users_table', 1),
(8, '2025_10_11_132127_create_categories_table', 1),
(9, '2025_10_11_132502_create_photos_table', 1),
(10, '2025_10_11_132724_create_projects_table', 1),
(11, '2025_10_12_085022_create_departments_table', 1),
(12, '2025_10_12_085502_add_department_id_to_projects_table', 1),
(13, '2025_10_14_113201_add_confirm_code_to_users_table', 2),
(14, '2025_10_14_125639_add_mobile_verified_at_to_users_table', 3),
(16, '2025_10_18_113722_add_start_todo_date_to_projects_table', 4),
(19, '2025_10_18_132039_add_parent_id_to_categories_table', 5),
(20, '2025_10_19_054543_create_project_user_table', 5),
(21, '2025_10_19_060037_create_project_photo_table', 6),
(27, '2025_10_19_112130_create_tasks_table', 7),
(28, '2025_10_19_115217_create_task_user_table', 7),
(29, '2025_10_19_115733_create_task_photo_table', 7),
(30, '2025_10_20_075538_add_duration_to_tasks_table', 8),
(31, '2025_10_20_075826_create_task_dependencies_table', 9),
(32, '2025_10_21_123948_add_photo_id_to_users_table', 10),
(33, '2025_10_22_113408_create_brands_table', 11),
(34, '2025_10_22_115822_add_brand_id_to_projects_table', 12),
(35, '2025_10_25_112148_add_description_add_to_projects_table', 13),
(39, '2025_10_28_073918_create_project_dependencies_table', 14),
(40, '2025_11_01_105928_add_manager_check_to_tasks_table', 14),
(42, '2025_11_02_114048_add_manager_verify_to_tasks_table', 15),
(43, '2025_11_02_115835_add_task_code_to_tasks_table', 16),
(44, '2025_11_03_075026_create_comments_table', 17),
(45, '2025_11_04_125137_create_task_checklists_table', 18),
(46, '2025_11_04_132757_add_check_to_task_checklists_table', 19),
(47, '2025_11_09_100932_create_activity_log_table', 20),
(48, '2025_11_09_100933_add_event_column_to_activity_log_table', 20),
(49, '2025_11_09_100934_add_batch_uuid_column_to_activity_log_table', 20),
(50, '2025_11_11_120509_create_tickets_table', 21),
(51, '2025_11_11_121457_create_ticket_departments_table', 21),
(52, '2025_11_11_121531_create_ticket_attachments_table', 21),
(53, '2025_11_11_121622_create_ticket_messages_table', 21),
(54, '2025_11_11_122746_create_ticket_departments_table', 22),
(55, '2025_11_11_122832_create_ticket_attachments_table', 22),
(56, '2025_11_11_123011_create_ticket_messages_table', 22),
(57, '2025_11_12_130920_create_seens_table', 23),
(58, '2025_11_16_051927_add_progress_to_tasks_table', 24),
(59, '2025_11_16_105641_add_progress_to_projects_table', 25),
(60, '2025_11_26_064030_create_influencers_table', 26),
(62, '2025_11_26_072927_create_campaign_brands_table', 27),
(63, '2025_11_26_074154_create_campaign_agancies_table', 28),
(65, '2025_11_26_074340_create_campaigns_table', 29),
(66, '2025_11_30_125201_create_influencer_dates_table', 30),
(67, '2025_11_30_125952_create_influencer_infos_table', 31),
(68, '2025_11_30_131129_create_influencer_prices_table', 32),
(69, '2025_11_30_133743_create_influencer_posts_table', 33),
(70, '2025_11_30_134134_create_influencer_stories_table', 34),
(71, '2025_11_30_134527_create_campaign_influencer_table', 35),
(72, '2025_12_01_082256_add_user_id_to_influencer_dates', 36),
(73, '2025_12_01_082528_add_user_id_to_influencer_infos_table', 37),
(74, '2025_12_01_082758_add_user_id_to_influencer_prices_table', 38),
(75, '2025_12_01_083012_add_user_id_to_influencer_posts_table', 39),
(76, '2025_12_01_083152_add_user_id_to_influencer_stories_table', 40),
(77, '2025_12_01_130522_add_campaign_code_to_campaigns_table', 41),
(78, '2025_12_14_121955_create_project_manager_admins_table', 42),
(79, '2025_12_14_125401_create_project_manager_admins_table', 43),
(80, '2025_12_14_125747_create_project_manager_admins_table', 44),
(81, '2026_01_11_080038_create_project_approves_table', 45),
(82, '2026_01_12_052605_add_date_to_project_approves_table', 45),
(83, '2026_04_25_070351_create_teams_table', 45),
(84, '2026_05_05_092807_add_start_todo_date_to_tasks_table', 46),
(85, '2026_05_06_112308_add_implementeunit_id_to_tasks_table', 47),
(86, '2026_05_06_113515_add_department_id_to_tasks_table', 48),
(88, '2026_05_09_070512_add_daily_hours_to_tasks_table', 49),
(89, '2026_05_09_072326_add_daily_capacity_hours_to_users_table', 50),
(90, '2026_05_09_101807_add_hours_per_day_to_task_users_table', 51),
(91, '2026_05_09_101959_create_task_user_worklogs_table', 52),
(92, '2026_05_09_110028_add_estimated_hours_to_tasks_table', 53),
(93, '2026_05_09_112731_create_task_allocations_table', 54),
(95, '2026_05_10_052134_add_remaining_hours_to_tasks_table', 55),
(96, '--2026_05_09_112731_create_task_allocations_table', 56),
(97, '2026_05_10_114510_add_uniqe_to_task_allocations_table', 56),
(99, '2026_05_10_120006_create_task_allocations_table', 57),
(100, '2026_05_10_122557_add_uniqe_to_task_users_table', 58);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(13, 'App\\Models\\User', 1),
(14, 'App\\Models\\User', 1),
(15, 'App\\Models\\User', 1),
(16, 'App\\Models\\User', 1),
(17, 'App\\Models\\User', 1),
(18, 'App\\Models\\User', 1),
(19, 'App\\Models\\User', 1),
(20, 'App\\Models\\User', 1),
(21, 'App\\Models\\User', 1),
(22, 'App\\Models\\User', 1),
(23, 'App\\Models\\User', 1),
(24, 'App\\Models\\User', 1),
(25, 'App\\Models\\User', 1),
(26, 'App\\Models\\User', 1),
(27, 'App\\Models\\User', 1),
(28, 'App\\Models\\User', 1),
(29, 'App\\Models\\User', 1),
(30, 'App\\Models\\User', 1),
(31, 'App\\Models\\User', 1),
(33, 'App\\Models\\User', 1),
(34, 'App\\Models\\User', 1),
(35, 'App\\Models\\User', 1),
(36, 'App\\Models\\User', 1),
(37, 'App\\Models\\User', 12),
(38, 'App\\Models\\User', 12),
(39, 'App\\Models\\User', 12),
(40, 'App\\Models\\User', 12),
(41, 'App\\Models\\User', 12),
(43, 'App\\Models\\User', 12),
(44, 'App\\Models\\User', 12),
(45, 'App\\Models\\User', 12),
(46, 'App\\Models\\User', 12),
(47, 'App\\Models\\User', 12),
(48, 'App\\Models\\User', 12),
(51, 'App\\Models\\User', 12),
(13, 'App\\Models\\User', 13),
(16, 'App\\Models\\User', 13),
(19, 'App\\Models\\User', 13),
(22, 'App\\Models\\User', 13),
(25, 'App\\Models\\User', 13),
(26, 'App\\Models\\User', 13),
(27, 'App\\Models\\User', 13),
(28, 'App\\Models\\User', 13),
(29, 'App\\Models\\User', 13),
(30, 'App\\Models\\User', 13),
(31, 'App\\Models\\User', 13),
(33, 'App\\Models\\User', 13),
(34, 'App\\Models\\User', 13),
(35, 'App\\Models\\User', 13),
(36, 'App\\Models\\User', 13),
(38, 'App\\Models\\User', 13),
(41, 'App\\Models\\User', 13),
(44, 'App\\Models\\User', 13),
(25, 'App\\Models\\User', 14),
(26, 'App\\Models\\User', 14),
(27, 'App\\Models\\User', 14),
(28, 'App\\Models\\User', 14),
(29, 'App\\Models\\User', 14),
(30, 'App\\Models\\User', 14),
(31, 'App\\Models\\User', 14),
(33, 'App\\Models\\User', 14),
(34, 'App\\Models\\User', 14),
(35, 'App\\Models\\User', 14),
(36, 'App\\Models\\User', 14),
(37, 'App\\Models\\User', 14),
(38, 'App\\Models\\User', 14),
(39, 'App\\Models\\User', 14),
(40, 'App\\Models\\User', 14),
(41, 'App\\Models\\User', 14),
(42, 'App\\Models\\User', 14),
(43, 'App\\Models\\User', 14),
(44, 'App\\Models\\User', 14),
(45, 'App\\Models\\User', 14),
(13, 'App\\Models\\User', 15),
(14, 'App\\Models\\User', 15),
(15, 'App\\Models\\User', 15),
(16, 'App\\Models\\User', 15),
(17, 'App\\Models\\User', 15),
(18, 'App\\Models\\User', 15),
(19, 'App\\Models\\User', 15),
(20, 'App\\Models\\User', 15),
(21, 'App\\Models\\User', 15),
(22, 'App\\Models\\User', 15),
(23, 'App\\Models\\User', 15),
(24, 'App\\Models\\User', 15),
(25, 'App\\Models\\User', 15),
(26, 'App\\Models\\User', 15),
(27, 'App\\Models\\User', 15),
(28, 'App\\Models\\User', 15),
(29, 'App\\Models\\User', 15),
(30, 'App\\Models\\User', 15),
(31, 'App\\Models\\User', 15),
(33, 'App\\Models\\User', 15),
(34, 'App\\Models\\User', 15),
(35, 'App\\Models\\User', 15),
(36, 'App\\Models\\User', 15),
(13, 'App\\Models\\User', 16),
(14, 'App\\Models\\User', 16),
(15, 'App\\Models\\User', 16),
(16, 'App\\Models\\User', 16),
(17, 'App\\Models\\User', 16),
(18, 'App\\Models\\User', 16),
(19, 'App\\Models\\User', 16),
(20, 'App\\Models\\User', 16),
(21, 'App\\Models\\User', 16),
(22, 'App\\Models\\User', 16),
(23, 'App\\Models\\User', 16),
(24, 'App\\Models\\User', 16),
(25, 'App\\Models\\User', 16),
(26, 'App\\Models\\User', 16),
(27, 'App\\Models\\User', 16),
(28, 'App\\Models\\User', 16),
(29, 'App\\Models\\User', 16),
(30, 'App\\Models\\User', 16),
(31, 'App\\Models\\User', 16),
(33, 'App\\Models\\User', 16),
(34, 'App\\Models\\User', 16),
(35, 'App\\Models\\User', 16),
(36, 'App\\Models\\User', 16),
(13, 'App\\Models\\User', 17),
(14, 'App\\Models\\User', 17),
(15, 'App\\Models\\User', 17),
(16, 'App\\Models\\User', 17),
(17, 'App\\Models\\User', 17),
(18, 'App\\Models\\User', 17),
(19, 'App\\Models\\User', 17),
(20, 'App\\Models\\User', 17),
(21, 'App\\Models\\User', 17),
(22, 'App\\Models\\User', 17),
(23, 'App\\Models\\User', 17),
(24, 'App\\Models\\User', 17),
(25, 'App\\Models\\User', 17),
(26, 'App\\Models\\User', 17),
(27, 'App\\Models\\User', 17),
(28, 'App\\Models\\User', 17),
(29, 'App\\Models\\User', 17),
(30, 'App\\Models\\User', 17),
(31, 'App\\Models\\User', 17),
(33, 'App\\Models\\User', 17),
(34, 'App\\Models\\User', 17),
(35, 'App\\Models\\User', 17),
(36, 'App\\Models\\User', 17),
(13, 'App\\Models\\User', 18),
(14, 'App\\Models\\User', 18),
(15, 'App\\Models\\User', 18),
(16, 'App\\Models\\User', 18),
(17, 'App\\Models\\User', 18),
(18, 'App\\Models\\User', 18),
(19, 'App\\Models\\User', 18),
(20, 'App\\Models\\User', 18),
(21, 'App\\Models\\User', 18),
(22, 'App\\Models\\User', 18),
(23, 'App\\Models\\User', 18),
(24, 'App\\Models\\User', 18),
(25, 'App\\Models\\User', 18),
(26, 'App\\Models\\User', 18),
(27, 'App\\Models\\User', 18),
(28, 'App\\Models\\User', 18),
(29, 'App\\Models\\User', 18),
(30, 'App\\Models\\User', 18),
(31, 'App\\Models\\User', 18),
(33, 'App\\Models\\User', 18),
(34, 'App\\Models\\User', 18),
(35, 'App\\Models\\User', 18),
(36, 'App\\Models\\User', 18),
(13, 'App\\Models\\User', 20),
(14, 'App\\Models\\User', 20),
(15, 'App\\Models\\User', 20),
(16, 'App\\Models\\User', 20),
(17, 'App\\Models\\User', 20),
(18, 'App\\Models\\User', 20),
(19, 'App\\Models\\User', 20),
(20, 'App\\Models\\User', 20),
(21, 'App\\Models\\User', 20),
(22, 'App\\Models\\User', 20),
(23, 'App\\Models\\User', 20),
(24, 'App\\Models\\User', 20),
(25, 'App\\Models\\User', 20),
(26, 'App\\Models\\User', 20),
(27, 'App\\Models\\User', 20),
(28, 'App\\Models\\User', 20),
(29, 'App\\Models\\User', 20),
(30, 'App\\Models\\User', 20),
(31, 'App\\Models\\User', 20),
(33, 'App\\Models\\User', 20),
(34, 'App\\Models\\User', 20),
(35, 'App\\Models\\User', 20),
(36, 'App\\Models\\User', 20),
(13, 'App\\Models\\User', 101),
(14, 'App\\Models\\User', 101),
(15, 'App\\Models\\User', 101),
(16, 'App\\Models\\User', 101),
(17, 'App\\Models\\User', 101),
(18, 'App\\Models\\User', 101),
(19, 'App\\Models\\User', 101),
(20, 'App\\Models\\User', 101),
(21, 'App\\Models\\User', 101),
(22, 'App\\Models\\User', 101),
(23, 'App\\Models\\User', 101),
(24, 'App\\Models\\User', 101),
(25, 'App\\Models\\User', 101),
(26, 'App\\Models\\User', 101),
(27, 'App\\Models\\User', 101),
(28, 'App\\Models\\User', 101),
(29, 'App\\Models\\User', 101),
(30, 'App\\Models\\User', 101),
(31, 'App\\Models\\User', 101),
(33, 'App\\Models\\User', 101),
(34, 'App\\Models\\User', 101),
(35, 'App\\Models\\User', 101),
(36, 'App\\Models\\User', 101),
(13, 'App\\Models\\User', 102),
(14, 'App\\Models\\User', 102),
(15, 'App\\Models\\User', 102),
(16, 'App\\Models\\User', 102),
(17, 'App\\Models\\User', 102),
(18, 'App\\Models\\User', 102),
(19, 'App\\Models\\User', 102),
(20, 'App\\Models\\User', 102),
(21, 'App\\Models\\User', 102),
(22, 'App\\Models\\User', 102),
(23, 'App\\Models\\User', 102),
(24, 'App\\Models\\User', 102),
(25, 'App\\Models\\User', 102),
(26, 'App\\Models\\User', 102),
(27, 'App\\Models\\User', 102),
(28, 'App\\Models\\User', 102),
(29, 'App\\Models\\User', 102),
(30, 'App\\Models\\User', 102),
(31, 'App\\Models\\User', 102),
(33, 'App\\Models\\User', 102),
(34, 'App\\Models\\User', 102),
(35, 'App\\Models\\User', 102),
(36, 'App\\Models\\User', 102),
(46, 'App\\Models\\User', 103),
(47, 'App\\Models\\User', 103),
(48, 'App\\Models\\User', 103),
(50, 'App\\Models\\User', 103),
(51, 'App\\Models\\User', 103),
(52, 'App\\Models\\User', 103),
(46, 'App\\Models\\User', 104),
(47, 'App\\Models\\User', 104),
(48, 'App\\Models\\User', 104),
(50, 'App\\Models\\User', 104),
(51, 'App\\Models\\User', 104),
(52, 'App\\Models\\User', 104),
(46, 'App\\Models\\User', 105),
(47, 'App\\Models\\User', 105),
(48, 'App\\Models\\User', 105),
(50, 'App\\Models\\User', 105),
(51, 'App\\Models\\User', 105),
(52, 'App\\Models\\User', 105),
(46, 'App\\Models\\User', 106),
(47, 'App\\Models\\User', 106),
(48, 'App\\Models\\User', 106),
(50, 'App\\Models\\User', 106),
(51, 'App\\Models\\User', 106),
(52, 'App\\Models\\User', 106),
(46, 'App\\Models\\User', 107),
(47, 'App\\Models\\User', 107),
(48, 'App\\Models\\User', 107),
(50, 'App\\Models\\User', 107),
(51, 'App\\Models\\User', 107),
(52, 'App\\Models\\User', 107),
(46, 'App\\Models\\User', 108),
(47, 'App\\Models\\User', 108),
(48, 'App\\Models\\User', 108),
(50, 'App\\Models\\User', 108),
(51, 'App\\Models\\User', 108),
(52, 'App\\Models\\User', 108),
(46, 'App\\Models\\User', 109),
(47, 'App\\Models\\User', 109),
(48, 'App\\Models\\User', 109),
(50, 'App\\Models\\User', 109),
(51, 'App\\Models\\User', 109),
(52, 'App\\Models\\User', 109),
(46, 'App\\Models\\User', 110),
(47, 'App\\Models\\User', 110),
(48, 'App\\Models\\User', 110),
(50, 'App\\Models\\User', 110),
(51, 'App\\Models\\User', 110),
(52, 'App\\Models\\User', 110),
(46, 'App\\Models\\User', 111),
(47, 'App\\Models\\User', 111),
(48, 'App\\Models\\User', 111),
(50, 'App\\Models\\User', 111),
(51, 'App\\Models\\User', 111),
(52, 'App\\Models\\User', 111),
(46, 'App\\Models\\User', 112),
(47, 'App\\Models\\User', 112),
(48, 'App\\Models\\User', 112),
(50, 'App\\Models\\User', 112),
(51, 'App\\Models\\User', 112),
(52, 'App\\Models\\User', 112),
(46, 'App\\Models\\User', 113),
(47, 'App\\Models\\User', 113),
(48, 'App\\Models\\User', 113),
(50, 'App\\Models\\User', 113),
(51, 'App\\Models\\User', 113),
(52, 'App\\Models\\User', 113),
(46, 'App\\Models\\User', 114),
(47, 'App\\Models\\User', 114),
(48, 'App\\Models\\User', 114),
(50, 'App\\Models\\User', 114),
(51, 'App\\Models\\User', 114),
(52, 'App\\Models\\User', 114),
(46, 'App\\Models\\User', 115),
(47, 'App\\Models\\User', 115),
(48, 'App\\Models\\User', 115),
(50, 'App\\Models\\User', 115),
(51, 'App\\Models\\User', 115),
(52, 'App\\Models\\User', 115),
(46, 'App\\Models\\User', 116),
(47, 'App\\Models\\User', 116),
(48, 'App\\Models\\User', 116),
(50, 'App\\Models\\User', 116),
(51, 'App\\Models\\User', 116),
(52, 'App\\Models\\User', 116),
(46, 'App\\Models\\User', 117),
(47, 'App\\Models\\User', 117),
(48, 'App\\Models\\User', 117),
(50, 'App\\Models\\User', 117),
(51, 'App\\Models\\User', 117),
(52, 'App\\Models\\User', 117),
(46, 'App\\Models\\User', 118),
(47, 'App\\Models\\User', 118),
(48, 'App\\Models\\User', 118),
(50, 'App\\Models\\User', 118),
(51, 'App\\Models\\User', 118),
(52, 'App\\Models\\User', 118),
(46, 'App\\Models\\User', 119),
(47, 'App\\Models\\User', 119),
(48, 'App\\Models\\User', 119),
(50, 'App\\Models\\User', 119),
(51, 'App\\Models\\User', 119),
(52, 'App\\Models\\User', 119),
(46, 'App\\Models\\User', 120),
(47, 'App\\Models\\User', 120),
(48, 'App\\Models\\User', 120),
(50, 'App\\Models\\User', 120),
(51, 'App\\Models\\User', 120),
(52, 'App\\Models\\User', 120),
(46, 'App\\Models\\User', 121),
(47, 'App\\Models\\User', 121),
(48, 'App\\Models\\User', 121),
(50, 'App\\Models\\User', 121),
(51, 'App\\Models\\User', 121),
(52, 'App\\Models\\User', 121),
(46, 'App\\Models\\User', 123),
(47, 'App\\Models\\User', 123),
(48, 'App\\Models\\User', 123),
(50, 'App\\Models\\User', 123),
(51, 'App\\Models\\User', 123),
(52, 'App\\Models\\User', 123),
(13, 'App\\Models\\User', 124),
(14, 'App\\Models\\User', 124),
(15, 'App\\Models\\User', 124),
(16, 'App\\Models\\User', 124),
(17, 'App\\Models\\User', 124),
(18, 'App\\Models\\User', 124),
(19, 'App\\Models\\User', 124),
(20, 'App\\Models\\User', 124),
(21, 'App\\Models\\User', 124),
(22, 'App\\Models\\User', 124),
(23, 'App\\Models\\User', 124),
(24, 'App\\Models\\User', 124),
(25, 'App\\Models\\User', 124),
(26, 'App\\Models\\User', 124),
(27, 'App\\Models\\User', 124),
(28, 'App\\Models\\User', 124),
(29, 'App\\Models\\User', 124),
(30, 'App\\Models\\User', 124),
(31, 'App\\Models\\User', 124),
(33, 'App\\Models\\User', 124),
(34, 'App\\Models\\User', 124),
(35, 'App\\Models\\User', 124),
(36, 'App\\Models\\User', 124),
(46, 'App\\Models\\User', 125),
(47, 'App\\Models\\User', 125),
(48, 'App\\Models\\User', 125),
(50, 'App\\Models\\User', 125),
(51, 'App\\Models\\User', 125),
(52, 'App\\Models\\User', 125),
(13, 'App\\Models\\User', 126),
(14, 'App\\Models\\User', 126),
(15, 'App\\Models\\User', 126),
(16, 'App\\Models\\User', 126),
(17, 'App\\Models\\User', 126),
(18, 'App\\Models\\User', 126),
(19, 'App\\Models\\User', 126),
(20, 'App\\Models\\User', 126),
(21, 'App\\Models\\User', 126),
(22, 'App\\Models\\User', 126),
(23, 'App\\Models\\User', 126),
(24, 'App\\Models\\User', 126),
(25, 'App\\Models\\User', 126),
(26, 'App\\Models\\User', 126),
(27, 'App\\Models\\User', 126),
(28, 'App\\Models\\User', 126),
(29, 'App\\Models\\User', 126),
(30, 'App\\Models\\User', 126),
(31, 'App\\Models\\User', 126),
(33, 'App\\Models\\User', 126),
(34, 'App\\Models\\User', 126),
(35, 'App\\Models\\User', 126),
(36, 'App\\Models\\User', 126),
(46, 'App\\Models\\User', 127),
(47, 'App\\Models\\User', 127),
(48, 'App\\Models\\User', 127),
(50, 'App\\Models\\User', 127),
(51, 'App\\Models\\User', 127),
(52, 'App\\Models\\User', 127),
(46, 'App\\Models\\User', 128),
(47, 'App\\Models\\User', 128),
(48, 'App\\Models\\User', 128),
(50, 'App\\Models\\User', 128),
(51, 'App\\Models\\User', 128),
(52, 'App\\Models\\User', 128),
(46, 'App\\Models\\User', 129),
(47, 'App\\Models\\User', 129),
(48, 'App\\Models\\User', 129),
(50, 'App\\Models\\User', 129),
(51, 'App\\Models\\User', 129),
(52, 'App\\Models\\User', 129),
(46, 'App\\Models\\User', 130),
(47, 'App\\Models\\User', 130),
(48, 'App\\Models\\User', 130),
(50, 'App\\Models\\User', 130),
(51, 'App\\Models\\User', 130),
(52, 'App\\Models\\User', 130),
(46, 'App\\Models\\User', 131),
(47, 'App\\Models\\User', 131),
(48, 'App\\Models\\User', 131),
(50, 'App\\Models\\User', 131),
(51, 'App\\Models\\User', 131),
(52, 'App\\Models\\User', 131),
(46, 'App\\Models\\User', 132),
(47, 'App\\Models\\User', 132),
(48, 'App\\Models\\User', 132),
(50, 'App\\Models\\User', 132),
(51, 'App\\Models\\User', 132),
(52, 'App\\Models\\User', 132),
(46, 'App\\Models\\User', 133),
(47, 'App\\Models\\User', 133),
(48, 'App\\Models\\User', 133),
(50, 'App\\Models\\User', 133),
(51, 'App\\Models\\User', 133),
(52, 'App\\Models\\User', 133),
(46, 'App\\Models\\User', 134),
(47, 'App\\Models\\User', 134),
(48, 'App\\Models\\User', 134),
(50, 'App\\Models\\User', 134),
(51, 'App\\Models\\User', 134),
(52, 'App\\Models\\User', 134),
(46, 'App\\Models\\User', 135),
(47, 'App\\Models\\User', 135),
(48, 'App\\Models\\User', 135),
(50, 'App\\Models\\User', 135),
(51, 'App\\Models\\User', 135),
(52, 'App\\Models\\User', 135),
(46, 'App\\Models\\User', 136),
(47, 'App\\Models\\User', 136),
(48, 'App\\Models\\User', 136),
(50, 'App\\Models\\User', 136),
(51, 'App\\Models\\User', 136),
(52, 'App\\Models\\User', 136),
(46, 'App\\Models\\User', 137),
(47, 'App\\Models\\User', 137),
(48, 'App\\Models\\User', 137),
(50, 'App\\Models\\User', 137),
(51, 'App\\Models\\User', 137),
(52, 'App\\Models\\User', 137),
(46, 'App\\Models\\User', 138),
(47, 'App\\Models\\User', 138),
(48, 'App\\Models\\User', 138),
(50, 'App\\Models\\User', 138),
(51, 'App\\Models\\User', 138),
(52, 'App\\Models\\User', 138),
(46, 'App\\Models\\User', 139),
(47, 'App\\Models\\User', 139),
(48, 'App\\Models\\User', 139),
(50, 'App\\Models\\User', 139),
(51, 'App\\Models\\User', 139),
(52, 'App\\Models\\User', 139),
(46, 'App\\Models\\User', 140),
(47, 'App\\Models\\User', 140),
(48, 'App\\Models\\User', 140),
(50, 'App\\Models\\User', 140),
(51, 'App\\Models\\User', 140),
(52, 'App\\Models\\User', 140),
(13, 'App\\Models\\User', 141),
(14, 'App\\Models\\User', 141),
(15, 'App\\Models\\User', 141),
(16, 'App\\Models\\User', 141),
(17, 'App\\Models\\User', 141),
(18, 'App\\Models\\User', 141),
(19, 'App\\Models\\User', 141),
(20, 'App\\Models\\User', 141),
(21, 'App\\Models\\User', 141),
(22, 'App\\Models\\User', 141),
(23, 'App\\Models\\User', 141),
(24, 'App\\Models\\User', 141),
(25, 'App\\Models\\User', 141),
(26, 'App\\Models\\User', 141),
(27, 'App\\Models\\User', 141),
(28, 'App\\Models\\User', 141),
(29, 'App\\Models\\User', 141),
(30, 'App\\Models\\User', 141),
(31, 'App\\Models\\User', 141),
(33, 'App\\Models\\User', 141),
(34, 'App\\Models\\User', 141),
(35, 'App\\Models\\User', 141),
(36, 'App\\Models\\User', 141),
(46, 'App\\Models\\User', 142),
(47, 'App\\Models\\User', 142),
(48, 'App\\Models\\User', 142),
(50, 'App\\Models\\User', 142),
(51, 'App\\Models\\User', 142),
(52, 'App\\Models\\User', 142),
(46, 'App\\Models\\User', 143),
(47, 'App\\Models\\User', 143),
(48, 'App\\Models\\User', 143),
(50, 'App\\Models\\User', 143),
(51, 'App\\Models\\User', 143),
(52, 'App\\Models\\User', 143),
(46, 'App\\Models\\User', 144),
(47, 'App\\Models\\User', 144),
(48, 'App\\Models\\User', 144),
(50, 'App\\Models\\User', 144),
(51, 'App\\Models\\User', 144),
(52, 'App\\Models\\User', 144),
(46, 'App\\Models\\User', 145),
(47, 'App\\Models\\User', 145),
(48, 'App\\Models\\User', 145),
(50, 'App\\Models\\User', 145),
(51, 'App\\Models\\User', 145),
(52, 'App\\Models\\User', 145),
(46, 'App\\Models\\User', 146),
(47, 'App\\Models\\User', 146),
(48, 'App\\Models\\User', 146),
(50, 'App\\Models\\User', 146),
(51, 'App\\Models\\User', 146),
(52, 'App\\Models\\User', 146),
(46, 'App\\Models\\User', 147),
(47, 'App\\Models\\User', 147),
(48, 'App\\Models\\User', 147),
(50, 'App\\Models\\User', 147),
(51, 'App\\Models\\User', 147),
(52, 'App\\Models\\User', 147),
(46, 'App\\Models\\User', 148),
(47, 'App\\Models\\User', 148),
(48, 'App\\Models\\User', 148),
(50, 'App\\Models\\User', 148),
(51, 'App\\Models\\User', 148),
(52, 'App\\Models\\User', 148),
(46, 'App\\Models\\User', 149),
(47, 'App\\Models\\User', 149),
(48, 'App\\Models\\User', 149),
(50, 'App\\Models\\User', 149),
(51, 'App\\Models\\User', 149),
(52, 'App\\Models\\User', 149),
(46, 'App\\Models\\User', 150),
(47, 'App\\Models\\User', 150),
(48, 'App\\Models\\User', 150),
(50, 'App\\Models\\User', 150),
(51, 'App\\Models\\User', 150),
(52, 'App\\Models\\User', 150),
(46, 'App\\Models\\User', 151),
(47, 'App\\Models\\User', 151),
(48, 'App\\Models\\User', 151),
(50, 'App\\Models\\User', 151),
(51, 'App\\Models\\User', 151),
(52, 'App\\Models\\User', 151),
(46, 'App\\Models\\User', 152),
(47, 'App\\Models\\User', 152),
(48, 'App\\Models\\User', 152),
(50, 'App\\Models\\User', 152),
(51, 'App\\Models\\User', 152),
(52, 'App\\Models\\User', 152),
(46, 'App\\Models\\User', 153),
(47, 'App\\Models\\User', 153),
(48, 'App\\Models\\User', 153),
(50, 'App\\Models\\User', 153),
(51, 'App\\Models\\User', 153),
(52, 'App\\Models\\User', 153),
(46, 'App\\Models\\User', 154),
(47, 'App\\Models\\User', 154),
(48, 'App\\Models\\User', 154),
(50, 'App\\Models\\User', 154),
(51, 'App\\Models\\User', 154),
(52, 'App\\Models\\User', 154),
(46, 'App\\Models\\User', 155),
(47, 'App\\Models\\User', 155),
(48, 'App\\Models\\User', 155),
(50, 'App\\Models\\User', 155),
(51, 'App\\Models\\User', 155),
(52, 'App\\Models\\User', 155),
(46, 'App\\Models\\User', 156),
(47, 'App\\Models\\User', 156),
(48, 'App\\Models\\User', 156),
(50, 'App\\Models\\User', 156),
(51, 'App\\Models\\User', 156),
(52, 'App\\Models\\User', 156),
(46, 'App\\Models\\User', 157),
(47, 'App\\Models\\User', 157),
(48, 'App\\Models\\User', 157),
(50, 'App\\Models\\User', 157),
(51, 'App\\Models\\User', 157),
(52, 'App\\Models\\User', 157),
(46, 'App\\Models\\User', 158),
(47, 'App\\Models\\User', 158),
(48, 'App\\Models\\User', 158),
(50, 'App\\Models\\User', 158),
(51, 'App\\Models\\User', 158),
(52, 'App\\Models\\User', 158),
(46, 'App\\Models\\User', 159),
(47, 'App\\Models\\User', 159),
(48, 'App\\Models\\User', 159),
(50, 'App\\Models\\User', 159),
(51, 'App\\Models\\User', 159),
(52, 'App\\Models\\User', 159),
(46, 'App\\Models\\User', 160),
(47, 'App\\Models\\User', 160),
(48, 'App\\Models\\User', 160),
(50, 'App\\Models\\User', 160),
(51, 'App\\Models\\User', 160),
(52, 'App\\Models\\User', 160),
(46, 'App\\Models\\User', 161),
(47, 'App\\Models\\User', 161),
(48, 'App\\Models\\User', 161),
(50, 'App\\Models\\User', 161),
(51, 'App\\Models\\User', 161),
(52, 'App\\Models\\User', 161),
(46, 'App\\Models\\User', 162),
(47, 'App\\Models\\User', 162),
(48, 'App\\Models\\User', 162),
(50, 'App\\Models\\User', 162),
(51, 'App\\Models\\User', 162),
(52, 'App\\Models\\User', 162),
(46, 'App\\Models\\User', 163),
(47, 'App\\Models\\User', 163),
(48, 'App\\Models\\User', 163),
(50, 'App\\Models\\User', 163),
(51, 'App\\Models\\User', 163),
(52, 'App\\Models\\User', 163),
(46, 'App\\Models\\User', 164),
(47, 'App\\Models\\User', 164),
(48, 'App\\Models\\User', 164),
(50, 'App\\Models\\User', 164),
(51, 'App\\Models\\User', 164),
(52, 'App\\Models\\User', 164),
(46, 'App\\Models\\User', 165),
(47, 'App\\Models\\User', 165),
(48, 'App\\Models\\User', 165),
(50, 'App\\Models\\User', 165),
(51, 'App\\Models\\User', 165),
(52, 'App\\Models\\User', 165),
(46, 'App\\Models\\User', 166),
(47, 'App\\Models\\User', 166),
(48, 'App\\Models\\User', 166),
(50, 'App\\Models\\User', 166),
(51, 'App\\Models\\User', 166),
(52, 'App\\Models\\User', 166),
(46, 'App\\Models\\User', 167),
(47, 'App\\Models\\User', 167),
(48, 'App\\Models\\User', 167),
(50, 'App\\Models\\User', 167),
(51, 'App\\Models\\User', 167),
(52, 'App\\Models\\User', 167),
(46, 'App\\Models\\User', 168),
(47, 'App\\Models\\User', 168),
(48, 'App\\Models\\User', 168),
(50, 'App\\Models\\User', 168),
(51, 'App\\Models\\User', 168),
(52, 'App\\Models\\User', 168),
(46, 'App\\Models\\User', 169),
(47, 'App\\Models\\User', 169),
(48, 'App\\Models\\User', 169),
(50, 'App\\Models\\User', 169),
(51, 'App\\Models\\User', 169),
(52, 'App\\Models\\User', 169),
(46, 'App\\Models\\User', 170),
(47, 'App\\Models\\User', 170),
(48, 'App\\Models\\User', 170),
(50, 'App\\Models\\User', 170),
(51, 'App\\Models\\User', 170),
(52, 'App\\Models\\User', 170),
(46, 'App\\Models\\User', 171),
(47, 'App\\Models\\User', 171),
(48, 'App\\Models\\User', 171),
(50, 'App\\Models\\User', 171),
(51, 'App\\Models\\User', 171),
(52, 'App\\Models\\User', 171),
(46, 'App\\Models\\User', 172),
(47, 'App\\Models\\User', 172),
(48, 'App\\Models\\User', 172),
(50, 'App\\Models\\User', 172),
(51, 'App\\Models\\User', 172),
(52, 'App\\Models\\User', 172),
(46, 'App\\Models\\User', 173),
(47, 'App\\Models\\User', 173),
(48, 'App\\Models\\User', 173),
(50, 'App\\Models\\User', 173),
(51, 'App\\Models\\User', 173),
(52, 'App\\Models\\User', 173),
(46, 'App\\Models\\User', 174),
(47, 'App\\Models\\User', 174),
(48, 'App\\Models\\User', 174),
(50, 'App\\Models\\User', 174),
(51, 'App\\Models\\User', 174),
(52, 'App\\Models\\User', 174),
(46, 'App\\Models\\User', 175),
(47, 'App\\Models\\User', 175),
(48, 'App\\Models\\User', 175),
(50, 'App\\Models\\User', 175),
(51, 'App\\Models\\User', 175),
(52, 'App\\Models\\User', 175),
(46, 'App\\Models\\User', 176),
(47, 'App\\Models\\User', 176),
(48, 'App\\Models\\User', 176),
(50, 'App\\Models\\User', 176),
(51, 'App\\Models\\User', 176),
(52, 'App\\Models\\User', 176),
(46, 'App\\Models\\User', 177),
(47, 'App\\Models\\User', 177),
(48, 'App\\Models\\User', 177),
(50, 'App\\Models\\User', 177),
(51, 'App\\Models\\User', 177),
(52, 'App\\Models\\User', 177),
(46, 'App\\Models\\User', 178),
(47, 'App\\Models\\User', 178),
(48, 'App\\Models\\User', 178),
(50, 'App\\Models\\User', 178),
(51, 'App\\Models\\User', 178),
(52, 'App\\Models\\User', 178),
(46, 'App\\Models\\User', 179),
(47, 'App\\Models\\User', 179),
(48, 'App\\Models\\User', 179),
(50, 'App\\Models\\User', 179),
(51, 'App\\Models\\User', 179),
(52, 'App\\Models\\User', 179),
(46, 'App\\Models\\User', 180),
(47, 'App\\Models\\User', 180),
(48, 'App\\Models\\User', 180),
(50, 'App\\Models\\User', 180),
(51, 'App\\Models\\User', 180),
(52, 'App\\Models\\User', 180),
(13, 'App\\Models\\User', 181),
(14, 'App\\Models\\User', 181),
(15, 'App\\Models\\User', 181),
(16, 'App\\Models\\User', 181),
(17, 'App\\Models\\User', 181),
(18, 'App\\Models\\User', 181),
(19, 'App\\Models\\User', 181),
(20, 'App\\Models\\User', 181),
(21, 'App\\Models\\User', 181),
(22, 'App\\Models\\User', 181),
(23, 'App\\Models\\User', 181),
(24, 'App\\Models\\User', 181),
(25, 'App\\Models\\User', 181),
(26, 'App\\Models\\User', 181),
(27, 'App\\Models\\User', 181),
(28, 'App\\Models\\User', 181),
(29, 'App\\Models\\User', 181),
(30, 'App\\Models\\User', 181),
(31, 'App\\Models\\User', 181),
(33, 'App\\Models\\User', 181),
(34, 'App\\Models\\User', 181),
(35, 'App\\Models\\User', 181),
(36, 'App\\Models\\User', 181),
(46, 'App\\Models\\User', 184),
(47, 'App\\Models\\User', 184),
(48, 'App\\Models\\User', 184),
(50, 'App\\Models\\User', 184),
(51, 'App\\Models\\User', 184),
(52, 'App\\Models\\User', 184),
(13, 'App\\Models\\User', 185),
(14, 'App\\Models\\User', 185),
(15, 'App\\Models\\User', 185),
(16, 'App\\Models\\User', 185),
(17, 'App\\Models\\User', 185),
(18, 'App\\Models\\User', 185),
(19, 'App\\Models\\User', 185),
(20, 'App\\Models\\User', 185),
(21, 'App\\Models\\User', 185),
(22, 'App\\Models\\User', 185),
(23, 'App\\Models\\User', 185),
(24, 'App\\Models\\User', 185),
(25, 'App\\Models\\User', 185),
(26, 'App\\Models\\User', 185),
(27, 'App\\Models\\User', 185),
(28, 'App\\Models\\User', 185),
(29, 'App\\Models\\User', 185),
(30, 'App\\Models\\User', 185),
(31, 'App\\Models\\User', 185),
(33, 'App\\Models\\User', 185),
(34, 'App\\Models\\User', 185),
(35, 'App\\Models\\User', 185),
(36, 'App\\Models\\User', 185);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 12),
(4, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 18),
(2, 'App\\Models\\User', 19),
(2, 'App\\Models\\User', 20),
(4, 'App\\Models\\User', 21),
(4, 'App\\Models\\User', 22),
(4, 'App\\Models\\User', 23),
(4, 'App\\Models\\User', 24),
(4, 'App\\Models\\User', 25),
(4, 'App\\Models\\User', 26),
(4, 'App\\Models\\User', 27),
(4, 'App\\Models\\User', 28),
(4, 'App\\Models\\User', 29),
(4, 'App\\Models\\User', 30),
(4, 'App\\Models\\User', 31),
(4, 'App\\Models\\User', 32),
(4, 'App\\Models\\User', 33),
(4, 'App\\Models\\User', 34),
(4, 'App\\Models\\User', 35),
(4, 'App\\Models\\User', 36),
(4, 'App\\Models\\User', 37),
(4, 'App\\Models\\User', 38),
(4, 'App\\Models\\User', 39),
(2, 'App\\Models\\User', 40),
(4, 'App\\Models\\User', 41),
(4, 'App\\Models\\User', 42),
(4, 'App\\Models\\User', 43),
(4, 'App\\Models\\User', 44),
(4, 'App\\Models\\User', 45),
(4, 'App\\Models\\User', 46),
(4, 'App\\Models\\User', 47),
(4, 'App\\Models\\User', 48),
(4, 'App\\Models\\User', 49),
(4, 'App\\Models\\User', 50),
(4, 'App\\Models\\User', 51),
(4, 'App\\Models\\User', 52),
(4, 'App\\Models\\User', 53),
(4, 'App\\Models\\User', 54),
(4, 'App\\Models\\User', 55),
(4, 'App\\Models\\User', 56),
(4, 'App\\Models\\User', 57),
(4, 'App\\Models\\User', 58),
(4, 'App\\Models\\User', 59),
(4, 'App\\Models\\User', 60),
(4, 'App\\Models\\User', 61),
(4, 'App\\Models\\User', 62),
(4, 'App\\Models\\User', 63),
(4, 'App\\Models\\User', 64),
(4, 'App\\Models\\User', 65),
(4, 'App\\Models\\User', 66),
(4, 'App\\Models\\User', 67),
(4, 'App\\Models\\User', 68),
(4, 'App\\Models\\User', 69),
(4, 'App\\Models\\User', 70),
(4, 'App\\Models\\User', 71),
(4, 'App\\Models\\User', 72),
(4, 'App\\Models\\User', 73),
(4, 'App\\Models\\User', 74),
(4, 'App\\Models\\User', 75),
(4, 'App\\Models\\User', 76),
(4, 'App\\Models\\User', 77),
(4, 'App\\Models\\User', 78),
(4, 'App\\Models\\User', 79),
(4, 'App\\Models\\User', 80),
(4, 'App\\Models\\User', 81),
(4, 'App\\Models\\User', 82),
(4, 'App\\Models\\User', 83),
(4, 'App\\Models\\User', 84),
(4, 'App\\Models\\User', 85),
(4, 'App\\Models\\User', 86),
(4, 'App\\Models\\User', 87),
(4, 'App\\Models\\User', 88),
(4, 'App\\Models\\User', 89),
(4, 'App\\Models\\User', 90),
(4, 'App\\Models\\User', 91),
(4, 'App\\Models\\User', 92),
(4, 'App\\Models\\User', 93),
(4, 'App\\Models\\User', 94),
(4, 'App\\Models\\User', 95),
(4, 'App\\Models\\User', 96),
(4, 'App\\Models\\User', 97),
(2, 'App\\Models\\User', 101),
(2, 'App\\Models\\User', 102),
(4, 'App\\Models\\User', 103),
(4, 'App\\Models\\User', 104),
(4, 'App\\Models\\User', 105),
(4, 'App\\Models\\User', 106),
(4, 'App\\Models\\User', 107),
(4, 'App\\Models\\User', 108),
(4, 'App\\Models\\User', 109),
(4, 'App\\Models\\User', 110),
(4, 'App\\Models\\User', 111),
(4, 'App\\Models\\User', 112),
(4, 'App\\Models\\User', 113),
(4, 'App\\Models\\User', 114),
(4, 'App\\Models\\User', 115),
(4, 'App\\Models\\User', 116),
(4, 'App\\Models\\User', 117),
(4, 'App\\Models\\User', 118),
(4, 'App\\Models\\User', 119),
(4, 'App\\Models\\User', 120),
(4, 'App\\Models\\User', 121),
(6, 'App\\Models\\User', 122),
(4, 'App\\Models\\User', 123),
(2, 'App\\Models\\User', 124),
(4, 'App\\Models\\User', 124),
(4, 'App\\Models\\User', 125),
(2, 'App\\Models\\User', 126),
(4, 'App\\Models\\User', 126),
(4, 'App\\Models\\User', 127),
(4, 'App\\Models\\User', 128),
(4, 'App\\Models\\User', 129),
(4, 'App\\Models\\User', 130),
(4, 'App\\Models\\User', 131),
(4, 'App\\Models\\User', 132),
(4, 'App\\Models\\User', 133),
(4, 'App\\Models\\User', 134),
(4, 'App\\Models\\User', 135),
(4, 'App\\Models\\User', 136),
(4, 'App\\Models\\User', 137),
(4, 'App\\Models\\User', 138),
(4, 'App\\Models\\User', 139),
(4, 'App\\Models\\User', 140),
(2, 'App\\Models\\User', 141),
(4, 'App\\Models\\User', 141),
(4, 'App\\Models\\User', 142),
(4, 'App\\Models\\User', 143),
(4, 'App\\Models\\User', 144),
(4, 'App\\Models\\User', 145),
(4, 'App\\Models\\User', 146),
(4, 'App\\Models\\User', 147),
(4, 'App\\Models\\User', 148),
(4, 'App\\Models\\User', 149),
(4, 'App\\Models\\User', 150),
(4, 'App\\Models\\User', 151),
(4, 'App\\Models\\User', 152),
(4, 'App\\Models\\User', 153),
(4, 'App\\Models\\User', 154),
(4, 'App\\Models\\User', 155),
(4, 'App\\Models\\User', 156),
(4, 'App\\Models\\User', 157),
(4, 'App\\Models\\User', 158),
(4, 'App\\Models\\User', 159),
(4, 'App\\Models\\User', 160),
(4, 'App\\Models\\User', 161),
(4, 'App\\Models\\User', 162),
(4, 'App\\Models\\User', 163),
(4, 'App\\Models\\User', 164),
(4, 'App\\Models\\User', 165),
(4, 'App\\Models\\User', 166),
(4, 'App\\Models\\User', 167),
(4, 'App\\Models\\User', 168),
(4, 'App\\Models\\User', 169),
(4, 'App\\Models\\User', 170),
(4, 'App\\Models\\User', 171),
(4, 'App\\Models\\User', 172),
(4, 'App\\Models\\User', 173),
(4, 'App\\Models\\User', 174),
(4, 'App\\Models\\User', 175),
(4, 'App\\Models\\User', 176),
(4, 'App\\Models\\User', 177),
(4, 'App\\Models\\User', 178),
(4, 'App\\Models\\User', 179),
(4, 'App\\Models\\User', 180),
(2, 'App\\Models\\User', 181),
(4, 'App\\Models\\User', 181),
(6, 'App\\Models\\User', 183),
(4, 'App\\Models\\User', 184),
(2, 'App\\Models\\User', 185);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0bac38ae-a07d-4bcc-9395-669bb90f7503', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 1, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":148,\"task_code\":\"T_154271\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 08:57:05', '2026-05-09 08:57:05'),
('0c322a02-fc22-47d7-939a-b2ed2b261515', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 183, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":181,\"task_code\":\"T_306592\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
('0f2f7dae-51e0-4c1f-b348-082f489f0998', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 183, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":177,\"task_code\":\"T_817339\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
('16f21fe3-57cd-4fa8-a777-9b304908d240', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 122, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":147,\"task_code\":\"T_406134\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 01:26:56', '2026-05-09 01:26:56'),
('1bf917c6-bed0-4de0-b1cb-4901916e9662', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 183, '{\"type\":\"project_approve\",\"data\":{\"project_id\":58,\"project_code\":\"P_591272\",\"start_date\":{\"date\":\"2026-05-13 10:16:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-13 10:16:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-06 03:17:03', '2026-05-06 03:17:03'),
('1cbf4d1e-ccb3-453e-98ef-ab384c7df94c', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 122, '{\"type\":\"project_approve\",\"data\":{\"project_id\":59,\"project_code\":\"P_463147\",\"start_date\":{\"date\":\"2026-05-06 16:05:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 16:05:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"5\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-06 09:05:54', '2026-05-06 09:05:54'),
('1d0d6518-3020-41ee-9c70-d72793e104ee', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 184, '{\"type\":\"project_approve\",\"data\":{\"project_id\":57,\"project_code\":\"P_981099\",\"start_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\"}}', NULL, '2026-05-06 02:25:23', '2026-05-06 02:25:23'),
('2d7a7fae-5b89-4795-a39a-49e4405f0a39', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 183, '{\"type\":\"project_approve\",\"data\":{\"project_id\":60,\"project_code\":\"P_521486\",\"start_date\":{\"date\":\"2026-05-09 08:00:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-07-22 08:00:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"5\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 01:03:16', '2026-05-09 01:03:16'),
('2fd67d87-c3c5-4c1b-8904-e0b0bf0c3a2e', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 180, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":148,\"task_code\":\"T_154271\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 08:57:05', '2026-05-09 08:57:05'),
('31e4ae54-06c1-4a9f-b30a-14afd8cb3540', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 122, '{\"type\":\"project_approve\",\"data\":{\"project_id\":60,\"project_code\":\"P_521486\",\"start_date\":{\"date\":\"2026-05-09 08:00:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-07-22 08:00:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"5\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 01:03:16', '2026-05-09 01:03:16'),
('32f66991-791f-4b4e-8b2c-697d4969b2d6', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 180, '{\"type\":\"project_approve\",\"data\":{\"project_id\":59,\"project_code\":\"P_463147\",\"start_date\":{\"date\":\"2026-05-06 16:05:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 16:05:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"5\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-06 09:05:54', '2026-05-06 09:05:54'),
('383dd511-8746-4a1f-85ab-3a9a1a9cdd1a', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 122, '{\"type\":\"project_approve\",\"data\":{\"project_id\":57,\"project_code\":\"P_981099\",\"start_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\"}}', NULL, '2026-05-06 02:25:23', '2026-05-06 02:25:23'),
('3840c1b0-f637-43f7-ab4f-51ff6f58eb9a', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 183, '{\"type\":\"project_approve\",\"data\":{\"project_id\":57,\"project_code\":\"P_981099\",\"start_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\"}}', NULL, '2026-05-06 02:25:23', '2026-05-06 02:25:23'),
('396f5fb3-b630-47a9-9ad7-d8fbbe73821a', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 183, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":166,\"task_code\":\"T_363780\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
('471ccdca-3de1-426d-b187-614dd4fedd02', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 1, '{\"type\":\"project_approve\",\"data\":{\"project_id\":58,\"project_code\":\"P_591272\",\"start_date\":{\"date\":\"2026-05-13 10:16:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-13 10:16:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-06 03:17:03', '2026-05-06 03:17:03'),
('47330f7c-6cdb-4c38-9101-8524f18b00f2', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 1, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":147,\"task_code\":\"T_406134\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 01:26:56', '2026-05-09 01:26:56'),
('4e13e0d3-cfdc-4759-a2c0-bfb544d70036', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 1, '{\"type\":\"project_approve\",\"data\":{\"project_id\":60,\"project_code\":\"P_521486\",\"start_date\":{\"date\":\"2026-05-09 08:00:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-07-22 08:00:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"5\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 01:03:16', '2026-05-09 01:03:16'),
('56d58ff0-a870-4c6c-a3cd-46f5f7cddb1d', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 181, '{\"type\":\"project_approve\",\"data\":{\"project_id\":57,\"project_code\":\"P_981099\",\"start_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\"}}', NULL, '2026-05-06 02:25:23', '2026-05-06 02:25:23'),
('57b723d6-be5b-4f50-a041-e7d72193d349', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 180, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":166,\"task_code\":\"T_363780\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
('5a03d35c-03f2-462d-b6d8-8c9671da253d', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 122, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":180,\"task_code\":\"T_930936\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
('624d6eb6-4e5d-45d4-84e6-282ac31ab262', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 122, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":148,\"task_code\":\"T_154271\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 08:57:05', '2026-05-09 08:57:05'),
('6277789b-7278-4856-ba6e-ebe9ed7b71ac', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 1, '{\"type\":\"project_approve\",\"data\":{\"project_id\":59,\"project_code\":\"P_463147\",\"start_date\":{\"date\":\"2026-05-06 16:05:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 16:05:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"5\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-06 09:05:54', '2026-05-06 09:05:54'),
('70dd8dec-0a6f-4088-9f59-70a8a57878bd', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 1, '{\"type\":\"project_approve\",\"data\":{\"project_id\":57,\"project_code\":\"P_981099\",\"start_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\"}}', NULL, '2026-05-06 02:25:23', '2026-05-06 02:25:23'),
('7c8332ce-8787-4b74-b936-95394e3fb430', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 181, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":148,\"task_code\":\"T_154271\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 08:57:05', '2026-05-09 08:57:05'),
('7ed772a8-5921-4c71-b899-ea87f4f583b4', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 180, '{\"type\":\"project_approve\",\"data\":{\"project_id\":57,\"project_code\":\"P_981099\",\"start_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\"}}', NULL, '2026-05-06 02:25:23', '2026-05-06 02:25:23'),
('88deec14-d542-4dd2-b515-9c31efb1cb4b', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 1, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":166,\"task_code\":\"T_363780\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
('9412a6f2-aa74-40b4-95c1-a493bb40d5c4', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 184, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":180,\"task_code\":\"T_930936\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
('975e0c4a-03c4-4843-aeca-f7e11d06b8f0', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 180, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":180,\"task_code\":\"T_930936\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
('9d332fb1-a800-47a6-ae05-5a00fbf7baa8', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 184, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":166,\"task_code\":\"T_363780\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40'),
('a5271285-8fe7-405d-a101-e7f7a6fec339', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 181, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":177,\"task_code\":\"T_817339\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
('ae6253c9-31d5-42b2-81c2-e1211390d4b1', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 122, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":177,\"task_code\":\"T_817339\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
('b0c6c588-27b5-40ba-a812-99aabf4d02e6', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 184, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":181,\"task_code\":\"T_306592\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
('b8923207-a074-46ac-9a1e-2e3820a268fa', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 1, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":177,\"task_code\":\"T_817339\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
('c1a5c479-d362-4d63-83d9-c32e2bd7c82a', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 183, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":148,\"task_code\":\"T_154271\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 08:57:05', '2026-05-09 08:57:05'),
('c3820dcc-d87e-4bec-8379-50ce3970e0f3', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 180, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":181,\"task_code\":\"T_306592\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
('c48dd44d-7aad-4daf-b0cf-edc05a45cfca', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 1, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":181,\"task_code\":\"T_306592\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
('c5840d54-7f6c-48a5-ae1c-089153e56c73', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 121, '{\"type\":\"project_approve\",\"data\":{\"project_id\":60,\"project_code\":\"P_521486\",\"start_date\":{\"date\":\"2026-05-09 08:00:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-07-22 08:00:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"5\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 01:03:16', '2026-05-09 01:03:16'),
('c8ca1536-7e09-4c26-be0f-0d22d4991948', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 183, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":180,\"task_code\":\"T_930936\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
('cace003e-5285-4d85-987d-f6349ffee14e', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 122, '{\"type\":\"project_approve\",\"data\":{\"project_id\":58,\"project_code\":\"P_591272\",\"start_date\":{\"date\":\"2026-05-13 10:16:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-13 10:16:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-06 03:17:03', '2026-05-06 03:17:03'),
('cc5dd6bc-05e1-42aa-899d-dd84edd38fe8', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 180, '{\"type\":\"project_approve\",\"data\":{\"project_id\":60,\"project_code\":\"P_521486\",\"start_date\":{\"date\":\"2026-05-09 08:00:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-07-22 08:00:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"5\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 01:03:16', '2026-05-09 01:03:16'),
('e3fc2519-5fc9-43f6-a9fc-5838fc348e8d', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 122, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":181,\"task_code\":\"T_306592\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
('e4789cad-f381-4d95-ba8c-1a40f8a73240', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 1, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":180,\"task_code\":\"T_930936\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
('e4d5f344-c43a-4585-b2a0-eb0b2de90421', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 180, '{\"type\":\"project_approve\",\"data\":{\"project_id\":58,\"project_code\":\"P_591272\",\"start_date\":{\"date\":\"2026-05-13 10:16:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-13 10:16:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-06 03:17:03', '2026-05-06 03:17:03'),
('e4dc9556-9ccb-4768-8b07-840e2c7dd5f4', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 184, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":177,\"task_code\":\"T_817339\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 08:34:45', '2026-05-10 08:34:45'),
('e983a00b-2515-4e9d-8e39-e3f48a30a0de', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 183, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":147,\"task_code\":\"T_406134\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 01:26:56', '2026-05-09 01:26:56'),
('f014109a-d878-4bc9-bbda-939a8c95d5cc', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 180, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":147,\"task_code\":\"T_406134\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-09 01:26:56', '2026-05-09 01:26:56'),
('f070472d-8546-4ec4-86a1-1267647cc6b4', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 137, '{\"type\":\"project_approve\",\"data\":{\"project_id\":57,\"project_code\":\"P_981099\",\"start_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 09:24:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"8\"}}', NULL, '2026-05-06 02:25:23', '2026-05-06 02:25:23'),
('f9879604-8d87-489d-b83b-b28556a469a2', 'App\\Notifications\\ProjectApproveNotification', 'App\\Models\\User', 183, '{\"type\":\"project_approve\",\"data\":{\"project_id\":59,\"project_code\":\"P_463147\",\"start_date\":{\"date\":\"2026-05-06 16:05:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"end_date\":{\"date\":\"2026-05-06 16:05:00.000000\",\"timezone_type\":3,\"timezone\":\"UTC\"},\"implementeunit_id\":\"5\",\"message\":\"\\u067e\\u0631\\u0648\\u0698\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-06 09:05:54', '2026-05-06 09:05:54'),
('fd7aac0f-2f8d-49aa-9cb6-de116f8e573f', 'App\\Notifications\\TaskAssignedNotification', 'App\\Models\\User', 122, '{\"type\":\"task_assigned\",\"data\":{\"task_id\":166,\"task_code\":\"T_363780\",\"start_date\":null,\"end_date\":null,\"project_id\":\"60\",\"message\":\"\\u062a\\u0633\\u06a9 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0631\\u0627\\u06cc \\u067e\\u0631\\u0648\\u0698\\u0647 \\u067e\\u0631\\u0648\\u0698\\u0647 \\u0686\\u06a9 \\u06a9\\u0631\\u062f\\u0646 \\u0631\\u0648\\u0646\\u062f\\u0627\\u06cc\\u062c\\u0627\\u062f \\u0634\\u062f\\u0647 \\u0627\\u0633\\u062a\"}}', NULL, '2026-05-10 06:55:40', '2026-05-10 06:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `guard_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(13, 'manager_projectAdd', 'web', '2025-10-13 08:55:54', '2025-10-13 08:55:54'),
(14, 'manager_projectEdit', 'web', '2025-10-13 08:55:54', '2025-10-13 08:55:54'),
(15, 'manager_projectShow', 'web', '2025-10-13 08:55:54', '2025-10-13 08:55:54'),
(16, 'manager_projectDelete', 'web', '2025-10-13 08:55:54', '2025-10-13 08:55:54'),
(17, 'manager_projectOptionAdd', 'web', '2025-10-13 08:55:54', '2025-10-13 08:55:54'),
(18, 'manager_projectOptions', 'web', '2025-10-13 08:55:54', '2025-10-13 08:55:54'),
(19, 'manager_projectTotalInfo', 'web', '2025-10-13 08:55:54', '2025-10-13 08:55:54'),
(20, 'manager_tasks', 'web', '2025-10-13 08:55:54', '2025-10-13 08:55:54'),
(21, 'manager_taskAdd', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(22, 'manager_taskSubTaskAdd', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(23, 'manager_taskShow', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(24, 'manager_taskDependency', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(25, 'manager_taskStatusUpdate', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(26, 'manager_files', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(27, 'manager_members', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(28, 'manager_access', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(29, 'manager_tickets', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(30, 'manager_comments', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(31, 'manager_reports', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(33, 'manager_TaskTimeLine', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(34, 'manager_TaskArchive', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(35, 'manager_profile', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(36, 'manager_notification', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(37, 'member_projectShow', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(38, 'member_projectTotalInfo', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(39, 'member_tasks', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(40, 'member_taskShow', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(41, 'member_taskStatusUpdate', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(42, 'member_tickets', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(43, 'member_comments', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(44, 'member_members', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(45, 'member_profile', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(46, 'assign_tasks', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(47, 'assign_taskShow', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(48, 'assign_taskStatusUpdate', 'web', '2025-10-13 08:55:55', '2025-10-13 08:55:55'),
(50, 'assign_tickets', 'web', NULL, NULL),
(51, 'assign_comments', 'web', NULL, NULL),
(52, 'assign_profile', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `path` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `photos_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `path`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/projects/4802a336785f9b00f7cc45411e8dd67b.webp', 'C:\\wamp64\\tmp\\php1DA7.tmp', 1, '2025-10-19 04:14:46', '2025-10-19 04:14:46'),
(2, 'assets/uploads/projects/a2337b19426795c815c63c0d38c75ceb.webp', 'C:\\wamp64\\tmp\\php4E9F.tmp', 1, '2025-10-19 04:18:15', '2025-10-19 04:18:15'),
(3, 'assets/uploads/projects/09ed07cabb33b7782f4522b3d2c93611.jpg', 'C:\\wamp64\\tmp\\php4EA0.tmp', 1, '2025-10-19 04:18:15', '2025-10-19 04:18:15'),
(4, 'assets/uploads/projects/e8a21f24e526073a92e8658bc1bf74fb.webp', 'C:\\wamp64\\tmp\\php4258.tmp', 1, '2025-10-19 04:19:17', '2025-10-19 04:19:17'),
(5, 'assets/uploads/projects/8e06ade4ff7f95a9ca728e883d2af825.jpg', 'C:\\wamp64\\tmp\\php4259.tmp', 1, '2025-10-19 04:19:17', '2025-10-19 04:19:17'),
(8, 'assets/uploads/projects/68588278c6c5c2a4039e6015e165f7d1.jpg', 'C:\\wamp64\\tmp\\php3B87.tmp', 1, '2025-10-19 05:36:49', '2025-10-19 05:36:49'),
(9, 'assets/uploads/projects/2cfa5ddb34780cda871cd21e1b93c926.jpg', 'C:\\wamp64\\tmp\\php3B97.tmp', 1, '2025-10-19 05:36:49', '2025-10-19 05:36:49'),
(10, 'assets/uploads/projects/ad6ce78ffd4fc581cc1b9755a2bb275e.jpg', 'C:\\wamp64\\tmp\\php3B98.tmp', 1, '2025-10-19 05:36:49', '2025-10-19 05:36:49'),
(11, 'assets/uploads/tasks/0234d1e90881dd13e0c9b6be45f01c91.webp', 'C:\\wamp64\\tmp\\phpFE78.tmp', 1, '2025-10-20 09:17:52', '2025-10-20 09:17:52'),
(12, 'assets/uploads/tasks/03055a53912f1a24702ff20ccea6db3b.jpg', 'C:\\wamp64\\tmp\\phpFE79.tmp', 1, '2025-10-20 09:17:52', '2025-10-20 09:17:52'),
(13, 'assets/uploads/tasks/be65ee2de5cce7185fca517e3dcb85a4.jpg', 'C:\\wamp64\\tmp\\phpFE89.tmp', 1, '2025-10-20 09:17:52', '2025-10-20 09:17:52'),
(14, 'assets/uploads/tasks/510fab32d59fa56db2cecaecd7057acf.webp', 'C:\\wamp64\\tmp\\php95B9.tmp', 1, '2025-10-20 09:18:31', '2025-10-20 09:18:31'),
(15, 'assets/uploads/tasks/7e9fccc2b0c896b7a32f22450d56754c.jpg', 'C:\\wamp64\\tmp\\php95BA.tmp', 1, '2025-10-20 09:18:31', '2025-10-20 09:18:31'),
(16, 'assets/uploads/tasks/b75b75321136d0e379e1c150beb2e93a.jpg', 'C:\\wamp64\\tmp\\php95CB.tmp', 1, '2025-10-20 09:18:31', '2025-10-20 09:18:31'),
(17, 'assets/uploads/tasks/f95205a53752038699131ae42ae8bae7.webp', 'C:\\wamp64\\tmp\\phpB9CF.tmp', 1, '2025-10-20 09:18:40', '2025-10-20 09:18:40'),
(18, 'assets/uploads/tasks/b9d66ae83b020196f03e676bfd5e53b5.jpg', 'C:\\wamp64\\tmp\\phpB9DF.tmp', 1, '2025-10-20 09:18:40', '2025-10-20 09:18:40'),
(19, 'assets/uploads/tasks/ae21c41ff13cd55e96f7c1a72f4f0fcd.jpg', 'C:\\wamp64\\tmp\\phpB9E0.tmp', 1, '2025-10-20 09:18:40', '2025-10-20 09:18:40'),
(20, 'assets/uploads/tasks/7ab7168953c8d81920c28b07a9b45bfb.jpg', 'C:\\wamp64\\tmp\\phpBDF0.tmp', 1, '2025-10-21 02:09:02', '2025-10-21 02:09:02'),
(57, 'uploads/projects/7f5ffa34a06a033b98bc24fd5a21335c.jpg', NULL, 15, '2025-10-26 02:39:40', '2025-10-26 02:39:40'),
(58, 'uploads/projects/13f0c6cf6cbd219c09f28e8dc51e77fb.jpg', NULL, 15, '2025-10-26 02:39:40', '2025-10-26 02:39:40'),
(59, 'uploads/projects/0a8912687aab2f020f8c6de60f7af4cb.jpg', NULL, 15, '2025-10-26 02:41:15', '2025-10-26 02:41:15'),
(60, 'uploads/projects/4021566e7e67b1db82baa10aca18f61d.jpg', NULL, 15, '2025-10-26 02:41:15', '2025-10-26 02:41:15'),
(61, 'uploads/projects/8c412323afe32f38f6226c807dea5dcb.jpg', NULL, 15, '2025-10-26 02:42:51', '2025-10-26 02:42:51'),
(62, 'uploads/projects/8de99d904d9375164f719f6dc91d5e2e.jpg', NULL, 15, '2025-10-26 02:42:51', '2025-10-26 02:42:51'),
(63, 'uploads/projects/ada11b0c7127c35cdcb34d9bf6ea7ab5.jpg', NULL, 15, '2025-10-26 02:43:46', '2025-10-26 02:43:46'),
(64, 'uploads/projects/5c1f509570937583e67c0abefc4f09e9.jpg', NULL, 15, '2025-10-26 02:43:46', '2025-10-26 02:43:46'),
(65, 'uploads/projects/e58db701d11e0556faddd4ed403f1ce9.jpg', NULL, 15, '2025-10-26 02:44:15', '2025-10-26 02:44:15'),
(66, 'uploads/projects/a988a2cddc61989f5a4d929d4fdbe95f.jpg', NULL, 15, '2025-10-26 02:44:15', '2025-10-26 02:44:15'),
(67, 'uploads/projects/c07a856a7d59a1007a995e4bb163124d.webp', NULL, 15, '2025-10-26 03:04:11', '2025-10-26 03:04:11'),
(68, 'uploads/projects/e833a1008cc6caf5bba615d3df1f7fd6.jpg', NULL, 15, '2025-10-26 03:04:11', '2025-10-26 03:04:11'),
(69, 'uploads/projects/8d274d648549a8bf22f1a377f61ed878.webp', NULL, 15, '2025-10-26 03:05:02', '2025-10-26 03:05:02'),
(70, 'uploads/projects/ee59e87b93f81195d8a9d4a0a3acbfd1.jpg', NULL, 15, '2025-10-26 03:05:02', '2025-10-26 03:05:02'),
(71, 'uploads/projects/06363ddf35ccd69f58c9e4c92bcd8fa2.webp', NULL, 15, '2025-10-26 03:05:15', '2025-10-26 03:05:15'),
(72, 'uploads/projects/619350b817620325ec3d4afb5ccb98f8.jpg', NULL, 15, '2025-10-26 03:05:15', '2025-10-26 03:05:15'),
(73, 'uploads/projects/9afae6eb27e7b8a78376bdfed72f6b30.webp', NULL, 15, '2025-10-26 03:06:42', '2025-10-26 03:06:42'),
(74, 'uploads/projects/655fba29298903f9398dba8415094f99.jpg', NULL, 15, '2025-10-26 03:06:42', '2025-10-26 03:06:42'),
(75, 'uploads/projects/ff50003d0f84cde992d9250cfd86416c.jpg', NULL, 15, '2025-10-29 03:15:40', '2025-10-29 03:15:40'),
(82, 'uploads/tasks/79033cacdc72f8000410330f4f2caaca.jpg', 'C:\\wamp64\\tmp\\php85D5.tmp', 15, '2025-11-01 08:01:07', '2025-11-01 08:01:07'),
(83, 'uploads/tasks/fa4ead540fd18da2e2d4e0e1b87fd047.jpg', 'C:\\wamp64\\tmp\\php85D6.tmp', 15, '2025-11-01 08:01:07', '2025-11-01 08:01:07'),
(84, 'uploads/tasks/4cd6dd3266ac250f7cfd7a3322c78818.jpg', 'C:\\wamp64\\tmp\\php85D7.tmp', 15, '2025-11-01 08:01:07', '2025-11-01 08:01:07'),
(85, 'uploads/tasks/03fa0f8b98a671b7c3f7ead384cac447.jpg', 'C:\\wamp64\\tmp\\phpD733.tmp', 15, '2025-11-01 09:57:15', '2025-11-01 09:57:15'),
(86, 'uploads/tasks/6f3f79ccc5c6fbd54c6528ea8a52ae63.jpg', 'C:\\wamp64\\tmp\\phpD734.tmp', 15, '2025-11-01 09:57:15', '2025-11-01 09:57:15'),
(87, 'uploads/tasks/d6c02d62ff4d70ecfedd6f43bd62084b.jpg', 'C:\\wamp64\\tmp\\php47F3.tmp', 15, '2025-11-01 10:04:17', '2025-11-01 10:04:17'),
(88, 'uploads/tasks/c208c7df90e66ef263e8aae10a29e5ca.jpg', 'C:\\wamp64\\tmp\\phpD79E.tmp', 15, '2025-11-02 01:39:52', '2025-11-02 01:39:52'),
(89, 'uploads/tasks/239453147be2a96bc259036a92e218c1.jpg', 'C:\\wamp64\\tmp\\phpD79F.tmp', 15, '2025-11-02 01:39:52', '2025-11-02 01:39:52'),
(90, 'uploads/tasks/12d4343d301c008dbd446bdc44645b97.jpg', 'C:\\wamp64\\tmp\\phpD7A0.tmp', 15, '2025-11-02 01:39:52', '2025-11-02 01:39:52'),
(91, 'uploads/tasks/a08468c062ad431017675e62d53d309e.jpg', 'C:\\wamp64\\tmp\\php2EC0.tmp', 15, '2025-11-02 01:42:26', '2025-11-02 01:42:26'),
(92, 'uploads/tasks/db2a3fcc898fb7e3132a94a1028a513f.jpg', 'C:\\wamp64\\tmp\\php2ED1.tmp', 15, '2025-11-02 01:42:26', '2025-11-02 01:42:26'),
(93, 'uploads/tasks/a3b37c05f2df27a36f566336a4648a3a.jpg', 'C:\\wamp64\\tmp\\php16BA.tmp', 15, '2025-11-02 01:52:09', '2025-11-02 01:52:09'),
(94, 'uploads/tasks/07c1993e4a2cefc2369672ce64a41b00.jpg', 'C:\\wamp64\\tmp\\php16BB.tmp', 15, '2025-11-02 01:52:09', '2025-11-02 01:52:09'),
(95, 'uploads/tasks/2f5b1d4055b69676bed6d272624ab32e.jpg', 'C:\\wamp64\\tmp\\php61E4.tmp', 15, '2025-11-02 01:54:40', '2025-11-02 01:54:40'),
(96, 'uploads/tasks/42606964528042bd8bf68f84a3984487.jpg', 'C:\\wamp64\\tmp\\php61E5.tmp', 15, '2025-11-02 01:54:40', '2025-11-02 01:54:40'),
(97, 'uploads/tasks/1d93fa5999e3fba8cb61a5696cd51750.jpg', 'C:\\wamp64\\tmp\\phpE569.tmp', 15, '2025-11-02 01:56:19', '2025-11-02 01:56:19'),
(98, 'uploads/tasks/26baca7012d48c93bc48e0cc81f924ee.jpg', 'C:\\wamp64\\tmp\\phpF652.tmp', 15, '2025-11-02 02:07:19', '2025-11-02 02:07:19'),
(119, 'uploads/tasks/5df59279c9d0fb960a0b94ed472d0069.jpg', 'C:\\wamp64\\tmp\\phpFB40.tmp', 15, '2025-11-02 04:30:25', '2025-11-02 04:30:25'),
(120, 'uploads/tasks/b465c75f25f1b24ce09aff4a48233c80.jpg', 'C:\\wamp64\\tmp\\phpE030.tmp', 15, '2025-11-02 04:39:02', '2025-11-02 04:39:02'),
(121, 'uploads/tasks/649edc6659a0b17b247a4cea13382ecd.jpg', 'C:\\wamp64\\tmp\\php8AC0.tmp', 15, '2025-11-02 04:41:57', '2025-11-02 04:41:57'),
(122, 'uploads/tasks/b7149a843b38ec8c6b1866a147808eb4.webp', 'C:\\wamp64\\tmp\\php3F90.tmp', 15, '2025-11-02 04:44:54', '2025-11-02 04:44:54'),
(123, 'uploads/tasks/4cd555091344b3d71966dd728d3ad328.jpg', 'C:\\wamp64\\tmp\\php3296.tmp', 15, '2025-11-02 07:28:47', '2025-11-02 07:28:47'),
(125, 'uploads/tasks/bfe0523e769fc676f15968bb7e490f72.jpg', 'C:\\wamp64\\tmp\\phpE0BB.tmp', 15, '2025-11-02 07:32:48', '2025-11-02 07:32:48'),
(126, 'uploads/tasks/8259a98e70492e9ab1d2eaf6249eab4d.jpg', 'C:\\wamp64\\tmp\\phpE0BC.tmp', 15, '2025-11-02 07:32:48', '2025-11-02 07:32:48'),
(127, 'uploads/tasks/0ed4afb1383a8d4b2dc231c86e6e2cd2.jpg', 'C:\\wamp64\\tmp\\phpE0BD.tmp', 15, '2025-11-02 07:32:48', '2025-11-02 07:32:48'),
(128, 'uploads/tasks/4d4efc6074ebaef0f02495a52b44b488.jpg', 'C:\\wamp64\\tmp\\phpE0BE.tmp', 15, '2025-11-02 07:32:48', '2025-11-02 07:32:48'),
(129, 'uploads/tasks/f1bd341852804940ae87864cb995c2ec.jpg', 'C:\\wamp64\\tmp\\php930B.tmp', 15, '2025-11-02 07:40:07', '2025-11-02 07:40:07'),
(130, 'uploads/tasks/f84f02e19f327881f29689d50bf4ca4e.png', 'C:\\wamp64\\tmp\\phpF6C0.tmp', 15, '2025-11-02 07:49:17', '2025-11-02 07:49:17'),
(131, 'uploads/tasks/b53432e164c0dc8d9969dcffb205b432.jpg', 'C:\\wamp64\\tmp\\phpDC48.tmp', 15, '2025-11-02 07:59:00', '2025-11-02 07:59:00'),
(132, 'uploads/tasks/c3fad1012b4ef0ccfb34515f68354990.jpg', 'C:\\wamp64\\tmp\\phpB033.tmp', 15, '2025-11-02 07:59:54', '2025-11-02 07:59:54'),
(133, 'uploads/tasks/3971857fea2c450dcae3ac3c76fc62e4.jpg', 'C:\\wamp64\\tmp\\phpD23E.tmp', 15, '2025-11-02 08:01:08', '2025-11-02 08:01:08'),
(144, 'uploads/tasks/1d4a8772e2485312a79a940ff240eca4.jpg', 'C:\\wamp64\\tmp\\php67FD.tmp', 15, '2025-11-03 07:02:01', '2025-11-03 07:02:01'),
(145, 'uploads/df85c5616770490ac074f09afe75742f.png', 'C:\\wamp64\\tmp\\phpE467.tmp', 15, '2025-11-12 04:34:35', '2025-11-12 04:34:35'),
(146, 'uploads/9b80c95f46461676047b7065e4890dcc.jpg', 'C:\\wamp64\\tmp\\php3013.tmp', 15, '2025-11-12 04:36:00', '2025-11-12 04:36:00'),
(147, 'uploads/be4e6992d81ed898ad3a70d14ed1a6ae.jpg', 'C:\\wamp64\\tmp\\phpB6A0.tmp', 15, '2025-11-12 04:38:46', '2025-11-12 04:38:46'),
(148, 'uploads/20271593d68396f1fe1b96dee4e5b93d.jpg', 'C:\\wamp64\\tmp\\phpB69F.tmp', 15, '2025-11-12 04:38:46', '2025-11-12 04:38:46'),
(149, 'uploads/3de8b229a1bdb24c7f277fc45a08c9c5.jpg', 'C:\\wamp64\\tmp\\php118F.tmp', 15, '2025-11-12 04:43:31', '2025-11-12 04:43:31'),
(150, 'uploads/f1f9834854dc635be5b062383ca16ee2.jpg', 'C:\\wamp64\\tmp\\php11A0.tmp', 15, '2025-11-12 04:43:31', '2025-11-12 04:43:31'),
(151, 'uploads/ee73efb27ec34a04da9a2428c8b971ad.png', 'C:\\wamp64\\tmp\\php1350.tmp', 15, '2025-11-12 04:52:16', '2025-11-12 04:52:16'),
(152, 'uploads/9c9946df3c4f249d157679b5dff0ed57.jpg', 'C:\\wamp64\\tmp\\php7D84.tmp', 15, '2025-11-12 04:52:43', '2025-11-12 04:52:43'),
(153, 'uploads/69cb15e116304e22221cd81d2d412f82.jpg', 'C:\\wamp64\\tmp\\phpF66.tmp', 15, '2025-11-12 04:53:20', '2025-11-12 04:53:20'),
(154, 'uploads/19c47b03f3e37c210fdf4fbed58332fd.jpg', 'C:\\wamp64\\tmp\\phpF65.tmp', 15, '2025-11-12 04:53:20', '2025-11-12 04:53:20'),
(155, 'uploads/c0a4272d8a383707d53eacad0b1137ef.jpg', 'C:\\wamp64\\tmp\\php853A.tmp', 15, '2025-11-12 04:56:02', '2025-11-12 04:56:02'),
(156, 'uploads/643424e92142eacc8f60bdf561fac081.jpg', 'C:\\wamp64\\tmp\\php8539.tmp', 15, '2025-11-12 04:56:02', '2025-11-12 04:56:02'),
(157, 'uploads/204fb77292bbedcbdc065a00d8391428.jpg', 'C:\\wamp64\\tmp\\php1E56.tmp', 15, '2025-11-12 04:58:52', '2025-11-12 04:58:52'),
(158, 'uploads/43f555ea2e4f10a956b95753d5428bfa.jpg', 'C:\\wamp64\\tmp\\php1E55.tmp', 15, '2025-11-12 04:58:52', '2025-11-12 04:58:52'),
(159, 'uploads/3699f5b6aa648a52f190cce04406bd25.jpg', 'C:\\wamp64\\tmp\\php817C.tmp', 15, '2025-11-12 05:01:28', '2025-11-12 05:01:28'),
(160, 'uploads/99054d39f9b13533354187a437e0fb82.jpg', 'C:\\wamp64\\tmp\\php817D.tmp', 15, '2025-11-12 05:01:28', '2025-11-12 05:01:28'),
(161, 'uploads/3eaaf1fd89bee279d2445113815758de.jpg', 'C:\\wamp64\\tmp\\phpADC5.tmp', 15, '2025-11-12 05:03:51', '2025-11-12 05:03:51'),
(162, 'uploads/de9246587aef1ce1fb57d31a4733b1d4.jpg', 'C:\\wamp64\\tmp\\phpADB5.tmp', 15, '2025-11-12 05:03:51', '2025-11-12 05:03:51'),
(163, 'uploads/8071622513e4a430fa638a870e884c65.png', 'C:\\wamp64\\tmp\\phpD708.tmp', 15, '2025-11-12 09:58:56', '2025-11-12 09:58:56'),
(164, 'uploads/e25b39d4c9003cd567e5ec044c5a7a98.jpg', 'C:\\wamp64\\tmp\\phpD707.tmp', 15, '2025-11-12 09:58:56', '2025-11-12 09:58:56'),
(165, 'uploads/tasks/96193ac7efa2bd1dc73b4c9d9b30ad59.jpg', 'C:\\wamp64\\tmp\\phpD91D.tmp', 15, '2025-11-16 07:11:17', '2025-11-16 07:11:17'),
(166, 'uploads/tasks/ffdad883269e6a7e2b3bdc74fff6732d.jpg', 'C:\\wamp64\\tmp\\phpD97C.tmp', 15, '2025-11-16 07:11:17', '2025-11-16 07:11:17'),
(167, 'uploads/tasks/c12be610b9304e93757fdddf75cb1243.jpg', 'C:\\wamp64\\tmp\\phpA73D.tmp', 15, '2025-11-16 07:12:10', '2025-11-16 07:12:10'),
(168, 'uploads/tasks/32a1d670612fba2cee7d94d8698cc0df.jpg', 'C:\\wamp64\\tmp\\phpA79C.tmp', 15, '2025-11-16 07:12:10', '2025-11-16 07:12:10'),
(170, 'uploads/tasks/a90fe657d938cc9c95ddf163e87d8ab0.jpg', 'C:\\wamp64\\tmp\\phpEA8A.tmp', 15, '2025-11-22 01:39:52', '2025-11-22 01:39:52'),
(179, 'uploads/projects/70e794c5a2b5b88b40e313212ce45ac4.jpg', NULL, 15, '2025-11-29 07:00:35', '2025-11-29 07:00:35'),
(180, 'uploads/projects/e648349edd2c0ab6beb7157201f4af91.jpg', NULL, 15, '2025-11-29 07:00:42', '2025-11-29 07:00:42'),
(182, 'uploads/tasks/637d7519b789c4b2c5958774d209ace1.jpg', 'C:\\wamp64\\tmp\\phpEFB1.tmp', 15, '2025-11-29 07:20:32', '2025-11-29 07:20:32'),
(183, 'uploads/tasks/14e5035d4324a188762aa716d2e39449.jpg', 'C:\\wamp64\\tmp\\php3F78.tmp', 15, '2025-11-29 07:20:52', '2025-11-29 07:20:52'),
(184, 'uploads/tasks/cc29454ee1c170301eae432c6c1a2fa4.jpg', 'C:\\wamp64\\tmp\\phpBFC5.tmp', 15, '2025-11-29 07:21:25', '2025-11-29 07:21:25'),
(185, 'uploads/tasks/78fa7cb80302d5311b5ead0f24fcc466.png', 'C:\\wamp64\\tmp\\php2F78.tmp', 15, '2025-11-29 07:21:53', '2025-11-29 07:21:53'),
(186, 'uploads/tasks/433ca0411f4997cd15160ce814d96dcb.jpg', 'C:\\wamp64\\tmp\\phpC9E1.tmp', 15, '2025-11-29 07:26:55', '2025-11-29 07:26:55'),
(187, 'uploads/tasks/6d139e29f9b13f92aa16ec74e4ebee21.jpg', 'C:\\wamp64\\tmp\\php3CDB.tmp', 15, '2025-11-30 02:45:13', '2025-11-30 02:45:13'),
(188, 'uploads/tasks/a5824ef8d841ad29493496208494feed.png', 'C:\\wamp64\\tmp\\php32B8.tmp', 15, '2025-11-30 03:53:59', '2025-11-30 03:53:59'),
(189, 'uploads/projects/9c919e882d73bcf41eb2c0f9fde105e1.jpg', NULL, 17, '2025-12-07 06:34:53', '2025-12-07 06:34:53'),
(190, 'uploads/projects/840e6503e1dcb66fb25ca076c48dff4f.pdf', NULL, 17, '2025-12-07 08:42:01', '2025-12-07 08:42:01'),
(191, 'uploads/tasks/96e9f5850de110fbb5e37a0bc7eb5edb.jpg', '/tmp/phpGNgIFq', 17, '2025-12-07 09:34:13', '2025-12-07 09:34:13'),
(192, 'uploads/tasks/ede153e652c9756f6fcebe0b568818a2.jpg', '/tmp/phpzmoGt4', 17, '2025-12-07 09:38:32', '2025-12-07 09:38:32'),
(193, 'uploads/tasks/4410536cef1b3f56e01862d534440e87.jpg', '/tmp/phpUoGNFi', 17, '2025-12-07 09:40:49', '2025-12-07 09:40:49'),
(194, 'uploads/tasks/a3146a21a4ea65f3f0f46e74a8f3f68d.jpg', '/tmp/phpaM3J6q', 17, '2025-12-07 09:44:31', '2025-12-07 09:44:31'),
(195, 'uploads/tasks/81baddf0bc1930ffaa6a641297e48e0f.jpg', '/tmp/phpQ6Nnh7', 17, '2025-12-07 09:50:54', '2025-12-07 09:50:54'),
(196, 'uploads/tasks/5bf4b7110d5bda6ad606cad53acea604.jpg', '/tmp/phpBwL3oQ', 17, '2025-12-07 09:51:42', '2025-12-07 09:51:42'),
(197, 'uploads/tasks/ca0d37d0360c4e605a4fc2d46074ed48.jpg', '/tmp/phpmXw85l', 17, '2025-12-07 09:51:58', '2025-12-07 09:51:58'),
(198, 'uploads/tasks/e507532daa740c0f348e07cffdf0dde0.jpg', '/tmp/phptpOb7v', 17, '2025-12-07 09:52:19', '2025-12-07 09:52:19'),
(199, 'uploads/tasks/5a2430a33f6a4537d600009972c585b2.jpg', '/tmp/phpJsmIof', 17, '2025-12-07 09:54:17', '2025-12-07 09:54:17'),
(200, 'uploads/tasks/35ba4842eef97723e0165790f201e7cc.jpg', '/tmp/phpdskjn4', 17, '2025-12-07 09:54:32', '2025-12-07 09:54:32'),
(201, 'uploads/tasks/909fca5577bafce05ed005960d53a1e5.jpg', '/tmp/phphwIK9u', 17, '2025-12-07 09:54:45', '2025-12-07 09:54:45'),
(202, 'uploads/tasks/84454696b00933e5068bed3215d66ae4.jpg', '/tmp/phpZ2O0Ex', 17, '2025-12-07 09:55:52', '2025-12-07 09:55:52'),
(203, 'uploads/tasks/84eb986dd8c0760339654318a2b8a628.jpg', '/tmp/phpw19fwV', 17, '2025-12-07 09:58:25', '2025-12-07 09:58:25'),
(204, 'uploads/tasks/185491e7e36864f309f13dc908bdd023.jpg', '/tmp/phpU51yFr', 17, '2025-12-07 09:58:36', '2025-12-07 09:58:36'),
(205, 'uploads/tasks/6d2e6ef89a957d3e3cbebc089e553207.jpg', '/tmp/phpyzignr', 17, '2025-12-07 10:01:13', '2025-12-07 10:01:13'),
(206, 'uploads/tasks/b3ada0669737fcf8d8337cd6101a193f.jpg', '/tmp/php3OZdyy', 17, '2025-12-07 10:04:12', '2025-12-07 10:04:12'),
(207, 'uploads/tasks/15711366d5ec6d7274945404bbaa8717.jpg', '/tmp/phppHVz45', 17, '2025-12-07 10:04:17', '2025-12-07 10:04:17'),
(208, 'uploads/tasks/d7f03517f4cf40dc73ff900b9376fd7e.jpg', '/tmp/php8tHezM', 17, '2025-12-07 10:19:18', '2025-12-07 10:19:18'),
(209, 'uploads/tasks/7612460f9955238f8921c11bc2bff448.png', '/tmp/phpc1HobV', 15, '2026-04-19 08:02:11', '2026-04-19 08:02:11'),
(210, 'uploads/tasks/0a2a3ddc0ee686171b2fe5fd83f246a0.jpg', '/tmp/php4f1yuI', 180, '2026-04-19 08:44:59', '2026-04-19 08:44:59'),
(211, 'uploads/projects/8264bb63182117ce16cbff264232d5a2.jpg', NULL, 1, '2026-04-25 07:50:55', '2026-04-25 07:50:55'),
(212, 'uploads/tasks/a3d41ecb6e0b85e631ba1aff6ff83ca4.png', '/tmp/phpnXEtzp', 181, '2026-04-27 07:10:39', '2026-04-27 07:10:39'),
(213, 'uploads/tasks/9d67da480145f450a3131b4712613f48.png', '/tmp/phpHm6sIe', 181, '2026-04-27 07:28:47', '2026-04-27 07:28:47'),
(214, 'uploads/tasks/0e14a5718b894c1a3aa173ca55dc778d.png', '/tmp/phpB7F3Qx', 181, '2026-04-27 07:34:11', '2026-04-27 07:34:11'),
(215, 'uploads/tasks/2d6b4dd3fafa421de66cf8768fa01c22.png', '/tmp/phplxGx9b', 181, '2026-04-27 07:41:55', '2026-04-27 07:41:55'),
(216, 'uploads/tasks/4ab0dbc72e2122907014a2772e24a339.png', '/tmp/phplNbKu9', 181, '2026-04-27 07:54:57', '2026-04-27 07:54:57'),
(217, 'uploads/tasks/37d8ef851af1850b838338cc015f33e3.png', '/tmp/phpTfgI5H', 181, '2026-04-27 08:03:44', '2026-04-27 08:03:44'),
(218, 'uploads/tasks/66690a103be844b8df2f402832decee7.png', '/tmp/phpf6Ee9s', 181, '2026-04-27 08:09:28', '2026-04-27 08:09:28'),
(219, 'uploads/tasks/6aa7c257033d04606655e0d047fd0549.png', '/tmp/phpV4aIgI', 181, '2026-04-27 08:11:51', '2026-04-27 08:11:51'),
(220, 'uploads/projects/2f47fcca88a4d12a0bb31d70e47e73fb.png', NULL, 15, '2026-05-09 01:03:16', '2026-05-09 01:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
CREATE TABLE IF NOT EXISTS `positions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'مدیر سولیکو', '2025-10-12 09:16:22', '2025-10-12 09:16:22'),
(2, 'مدیر مارکتینگ', '2025-10-12 09:16:29', '2025-10-12 09:16:29'),
(5, 'برنامه نویس', '2025-10-13 04:27:46', '2025-10-13 04:27:46'),
(6, 'بنیان گذار', '2025-12-07 06:01:37', '2025-12-07 06:01:37'),
(7, 'دستیار مدیر بازاریابی', '2025-12-07 06:14:00', '2025-12-07 06:14:00'),
(8, 'مدیر بازاریابی', '2025-12-07 07:27:47', '2025-12-07 07:27:47'),
(9, 'Content Specialist', '2025-12-13 03:38:44', '2025-12-13 03:40:17'),
(10, 'Marketing Director Assistant', '2025-12-13 03:40:07', '2025-12-13 03:40:07'),
(11, 'CRM Manager', '2025-12-13 03:40:46', '2025-12-13 03:40:46'),
(12, 'Print and Packaging Design Manager', '2025-12-13 03:41:55', '2025-12-13 03:41:55'),
(13, 'مدیرعامل آتی بال', '2025-12-13 03:43:13', '2025-12-13 03:43:13'),
(14, 'مدير پيش از چاپ و ارشيو', '2025-12-13 03:43:56', '2025-12-13 03:43:56'),
(15, 'Control Project Specialist', '2025-12-13 03:44:44', '2025-12-13 03:44:44'),
(16, 'Events Planner', '2025-12-13 03:50:16', '2025-12-13 03:50:16'),
(17, 'ATL Advertising Head', '2025-12-13 03:50:23', '2025-12-13 03:50:23'),
(18, 'Outdoor Media Planner', '2025-12-13 03:50:30', '2025-12-13 03:50:30'),
(19, 'Marketing Research Senior Specialist', '2025-12-13 03:50:37', '2025-12-13 03:50:37'),
(20, 'Marketing Research Specialist', '2025-12-13 03:51:28', '2025-12-13 03:51:28'),
(21, 'Marketing Research Analysis Supervisor', '2025-12-13 03:52:01', '2025-12-13 03:52:01'),
(22, 'Marketing Research Development Expert', '2025-12-13 03:53:40', '2025-12-13 03:53:40'),
(24, 'Field Research Supervisor-Region 5', '2025-12-13 03:55:24', '2025-12-13 03:55:24'),
(25, 'Market Research Operation Head', '2025-12-13 04:26:56', '2025-12-13 04:26:56'),
(26, 'Marketing Research Analysis Specialist', '2025-12-13 04:28:02', '2025-12-13 04:28:02'),
(27, 'Social Media Senior Specialist', '2025-12-13 04:28:55', '2025-12-13 04:28:55'),
(28, 'Digital Marketing Manager', '2025-12-13 04:29:22', '2025-12-13 04:29:22'),
(29, 'Performance Marketer', '2025-12-13 04:30:02', '2025-12-13 04:30:02'),
(30, 'Content Marketing Head', '2025-12-13 04:30:37', '2025-12-13 04:30:37'),
(31, 'Senior Graphic Designer', '2025-12-13 04:31:08', '2025-12-13 04:31:08'),
(32, 'Campaign Manager', '2025-12-13 04:31:48', '2025-12-13 04:31:48'),
(33, 'Social Media Specialist', '2025-12-13 04:34:09', '2025-12-13 04:34:09'),
(34, 'Software Development Senior Supervisor', '2025-12-13 04:34:37', '2025-12-13 04:34:37'),
(37, 'Graphic Designer', '2025-12-13 04:37:11', '2025-12-13 04:37:11'),
(38, 'SEO Specialist', '2025-12-13 04:43:12', '2025-12-13 04:43:12'),
(39, 'Senior Front-End Developer', '2025-12-13 04:43:45', '2025-12-13 04:43:45'),
(40, 'Front-End Developer', '2025-12-13 04:45:25', '2025-12-13 04:45:25'),
(41, 'Senior Back-End Developer', '2025-12-13 04:45:59', '2025-12-13 04:45:59'),
(42, 'Photographer', '2025-12-13 04:48:28', '2025-12-13 04:48:28'),
(43, 'UI Specialist', '2025-12-13 04:50:42', '2025-12-13 04:50:42'),
(44, 'UI/UX Supervisor', '2025-12-13 04:51:13', '2025-12-13 04:51:13'),
(45, 'مدير کسب و کار ماست', '2025-12-13 04:53:16', '2025-12-13 04:53:16'),
(46, 'مدير بازاريابي بيزنس ماست', '2025-12-13 04:53:53', '2025-12-13 04:53:53'),
(47, 'مدير بيزنس پنير', '2025-12-13 04:54:35', '2025-12-13 04:54:35'),
(48, 'مدير برند بيزنس پنير', '2025-12-13 04:55:22', '2025-12-13 04:55:22'),
(49, 'مدير برند بيزنس چربي', '2025-12-13 06:10:24', '2025-12-13 06:10:24'),
(50, 'مدير بيزنس چربي', '2025-12-13 06:10:48', '2025-12-13 06:10:48'),
(51, 'مدير بازاريابي فروشگاهي مالت', '2025-12-13 06:11:29', '2025-12-13 06:11:29'),
(52, 'مدير بيزنس آب', '2025-12-13 06:12:22', '2025-12-13 06:12:22'),
(53, 'مدير بيزنس مالت', '2025-12-13 06:13:03', '2025-12-13 06:13:03'),
(54, 'مدير بازاريابي کسب وکار آماده و آردي', '2025-12-13 06:13:46', '2025-12-13 06:13:46'),
(55, 'مدير ارشد برند پمينا', '2025-12-13 06:14:21', '2025-12-13 06:14:21'),
(56, 'مدير برند پمينا', '2025-12-13 06:15:36', '2025-12-13 06:15:36'),
(57, 'مدير بازاريابي کسب و کار بستني', '2025-12-13 06:16:36', '2025-12-13 06:16:36'),
(58, 'مدير برند بيزنس قنادي', '2025-12-13 06:17:24', '2025-12-13 06:17:24'),
(59, 'مدير بازاريابي بيزنس غذاي کودک و سلامت', '2025-12-13 06:18:17', '2025-12-13 06:18:17'),
(60, 'مدير بيزنس غذاي کودک و سلامت', '2025-12-13 06:18:41', '2025-12-13 06:18:41'),
(61, 'مدير بازاريابي بيزنس غذاي ورزشکاران', '2025-12-13 06:19:25', '2025-12-13 06:19:25'),
(62, 'مدير بيزنس غذاي ورزشکاران', '2025-12-13 06:20:01', '2025-12-13 06:20:01'),
(63, 'کارشناس ارشد بازاريابي بيزنس مکمل ورزشي', '2025-12-13 06:20:44', '2025-12-13 06:20:44'),
(64, 'مدير بيزنس مکمل هاي ورزشي', '2025-12-13 06:21:34', '2025-12-13 06:21:34'),
(65, 'مدير بيزنس قهوه', '2025-12-13 06:22:06', '2025-12-13 06:22:06'),
(66, 'مدير بيزنس دسر', '2025-12-13 06:22:39', '2025-12-13 06:22:39'),
(67, 'مدير بيزنس فرآورده هاي برپايه گياه', '2025-12-13 06:23:19', '2025-12-13 06:23:19'),
(68, 'Plant Based Business Marketing Manager', '2025-12-13 06:24:06', '2025-12-13 06:24:06'),
(69, 'مدير برند نوشيدني لبني', '2025-12-13 06:24:47', '2025-12-13 06:24:47'),
(70, 'مدير کسب و کار کاتلا', '2025-12-13 06:25:20', '2025-12-13 06:25:20'),
(71, 'مدير محصول کاتلا', '2025-12-13 06:25:48', '2025-12-13 06:25:48'),
(72, 'مدير کسب و کار ناري', '2025-12-13 06:26:15', '2025-12-13 06:26:15'),
(73, 'سرپرست اکانت', '2025-12-13 06:58:24', '2025-12-13 06:58:24'),
(74, 'تدوینگر', '2025-12-13 07:06:06', '2025-12-13 07:06:06'),
(75, 'مدیر کسب و کار آشپزی', '2025-12-13 07:06:45', '2025-12-13 07:06:45'),
(76, 'مدیر روابط عمومی و تبلیغات', '2025-12-13 07:07:02', '2025-12-13 07:07:02'),
(77, 'مدیر بازاریابی بیزنس شیر', '2025-12-13 07:07:37', '2025-12-13 07:07:37'),
(78, 'سرپرست تیم سوشال مدیا', '2026-04-27 06:48:09', '2026-04-27 06:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_code` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `between_date` varchar(191) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'یک پروژه در بازه زمانی شروع و پایانش در هر روز چقدر زمان لازم دارم',
  `implementeunit_id` bigint UNSIGNED DEFAULT NULL COMMENT 'واحد انجام دهنده پروژه',
  `status` enum('0','1','2','3','4') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0' COMMENT '0=>pending , 1=>in_progress,2=>completed , 3=>on_hold , 4=>canceled\r\n',
  `inform` enum('0','1') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `approving_manager` bigint UNSIGNED DEFAULT NULL COMMENT 'مدیر تایید کننده',
  `approve_need` enum('0','1') COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '0=>yes , 1=>no',
  `approve_verify` enum('0','1') COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '0=>yes , 1=>no',
  `manager_id` bigint UNSIGNED NOT NULL COMMENT 'مدیر ایجاد کننده پروژه',
  `category_id` bigint UNSIGNED DEFAULT NULL COMMENT 'دسته بندی مربوط به پروژه',
  `department_id` bigint UNSIGNED NOT NULL COMMENT 'دپارتمان مربوط به پروژه',
  `start_todo_date` timestamp NULL DEFAULT NULL COMMENT 'با استفاده از تاریخ شروع اولین تسک محاسبه میشود',
  `brand_id` bigint UNSIGNED DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_general_ci,
  `progress` int NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_manager_id_foreign` (`manager_id`),
  KEY `projects_category_id_foreign` (`category_id`),
  KEY `projects_department_id_foreign` (`department_id`),
  KEY `projects_brand_id_foreign` (`brand_id`),
  KEY `projects_approving_manager_foreign` (`approving_manager`),
  KEY `projects_implementeunit_id_foreign` (`implementeunit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_code`, `name`, `start_date`, `end_date`, `between_date`, `implementeunit_id`, `status`, `inform`, `approving_manager`, `approve_need`, `approve_verify`, `manager_id`, `category_id`, `department_id`, `start_todo_date`, `brand_id`, `description`, `progress`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'P_131349', 'پروژه تستی', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, '0', NULL, 15, '0', '0', 12, 1, 1, NULL, 1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است', 0, '2025-10-19 05:37:15', '2025-10-19 04:13:13', '2025-10-19 05:37:15'),
(2, 'P_889161', 'پروژه تستی', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, '1', NULL, 16, '0', '0', 12, 1, 1, NULL, 1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است', 0, '2026-04-27 06:07:47', '2025-10-19 04:14:46', '2026-04-27 06:07:47'),
(3, 'P_893690', 'پروژه تستی', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, '2', NULL, 16, '0', '0', 12, 1, 1, NULL, 1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است', 0, '2026-04-27 06:08:20', '2025-10-19 04:18:15', '2026-04-27 06:08:20'),
(4, 'P_578382', 'پروژه تستی', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, '1', NULL, 16, '0', '0', 15, 1, 1, NULL, 1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است', 0, '2026-04-27 06:08:47', '2025-10-19 04:19:17', '2026-04-27 06:08:47'),
(47, 'P_204786', 'پرزنتیشن گروه سولیکو', '0000-00-00 00:00:00', NULL, NULL, NULL, '0', '0', 101, '0', NULL, 102, NULL, 19, NULL, NULL, NULL, 0, '2026-04-27 06:09:17', '2025-12-15 04:58:43', '2026-04-27 06:09:17'),
(52, 'P_212940', 'تست', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 8, '0', NULL, 122, '0', NULL, 15, 4, 7, NULL, NULL, NULL, 0, '2026-04-27 06:09:58', '2026-04-25 06:29:25', '2026-04-27 06:09:58'),
(53, 'P_366341', 'یووین', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 8, '4', NULL, 122, '0', NULL, 141, 4, 20, NULL, 33, NULL, 0, '2026-04-25 07:57:10', '2026-04-25 06:42:37', '2026-04-25 07:57:10'),
(54, 'P_219920', 'نتسرذدستنبردس', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 8, '0', '0', NULL, '0', NULL, 122, 4, 7, NULL, 33, NULL, 0, '2026-04-27 06:10:30', '2026-04-25 07:50:55', '2026-04-27 06:10:30'),
(55, 'P_722192', 'یووین', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 8, '0', '0', NULL, '0', NULL, 181, 4, 7, NULL, 33, NULL, 0, '2026-05-02 03:50:30', '2026-04-25 07:56:41', '2026-05-02 03:50:30'),
(56, 'P_561732', 'یووین', '2026-04-25 07:30:00', '2026-04-25 07:30:00', NULL, 8, '0', '0', NULL, NULL, NULL, 181, 2, 20, NULL, 33, NULL, 0, NULL, '2026-05-02 04:02:10', '2026-05-02 04:02:10'),
(57, 'P_981099', 'تست نوتیفیکیشن برای تایید مدیر', '2026-05-06 05:54:00', '2026-05-06 05:54:00', NULL, 8, '0', '0', 122, '0', NULL, 181, 2, 13, NULL, 1, NULL, 0, NULL, '2026-05-06 02:25:22', '2026-05-06 02:25:22'),
(58, 'P_591272', 'تست نوتیفیکیشن', '2026-05-13 06:46:00', '2026-05-13 06:46:00', NULL, 8, '0', '0', 1, '0', NULL, 181, 2, 13, NULL, 1, NULL, 0, '2026-05-06 07:21:05', '2026-05-06 03:17:03', '2026-05-06 07:21:05'),
(59, 'P_463147', 'bdfhgdgd', '2026-05-07 12:35:00', '2026-05-13 12:35:00', NULL, 5, '0', '0', NULL, '0', NULL, 1, 2, 1, NULL, 1, NULL, 0, NULL, '2026-05-06 09:05:53', '2026-05-07 01:24:33'),
(60, 'P_521486', 'پروژه چک کردن روند', '2026-05-09 04:30:00', '2026-07-22 04:30:00', NULL, 5, '0', '0', 180, '0', NULL, 15, 4, 12, NULL, 14, NULL, 0, NULL, '2026-05-09 01:03:16', '2026-05-09 01:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `project_approves`
--

DROP TABLE IF EXISTS `project_approves`;
CREATE TABLE IF NOT EXISTS `project_approves` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_id` bigint UNSIGNED DEFAULT NULL,
  `project_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_approves_photo_id_foreign` (`photo_id`),
  KEY `project_approves_project_id_foreign` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_dependencies`
--

DROP TABLE IF EXISTS `project_dependencies`;
CREATE TABLE IF NOT EXISTS `project_dependencies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `project_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_dependencies_project_id_foreign` (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_dependencies`
--

INSERT INTO `project_dependencies` (`id`, `title`, `description`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'Pr', 'تست جزییات آپشن', 4, '2025-11-10 07:33:46', '2025-11-10 07:38:36'),
(2, 'po', 'تست جزییات آپشن', 4, '2025-11-10 07:33:46', '2025-11-10 07:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `project_manager_admins`
--

DROP TABLE IF EXISTS `project_manager_admins`;
CREATE TABLE IF NOT EXISTS `project_manager_admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_manager_id` bigint UNSIGNED DEFAULT NULL,
  `admin_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_manager_admins_admin_id_foreign` (`admin_id`),
  KEY `project_manager_admins_project_manager_id_foreign` (`project_manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_photo`
--

DROP TABLE IF EXISTS `project_photo`;
CREATE TABLE IF NOT EXISTS `project_photo` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` bigint UNSIGNED NOT NULL,
  `photo_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_photo_project_id_foreign` (`project_id`),
  KEY `project_photo_photo_id_foreign` (`photo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_photo`
--

INSERT INTO `project_photo` (`id`, `project_id`, `photo_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 3, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 4, 5, NULL, NULL),
(47, 24, 57, NULL, NULL),
(48, 24, 58, NULL, NULL),
(49, 25, 59, NULL, NULL),
(50, 25, 60, NULL, NULL),
(51, 26, 61, NULL, NULL),
(52, 26, 62, NULL, NULL),
(53, 27, 63, NULL, NULL),
(54, 27, 64, NULL, NULL),
(55, 28, 65, NULL, NULL),
(56, 28, 66, NULL, NULL),
(57, 29, 67, NULL, NULL),
(58, 29, 68, NULL, NULL),
(59, 30, 69, NULL, NULL),
(60, 30, 70, NULL, NULL),
(61, 31, 71, NULL, NULL),
(62, 31, 72, NULL, NULL),
(63, 32, 73, NULL, NULL),
(64, 32, 74, NULL, NULL),
(65, 33, 75, NULL, NULL),
(69, 36, 179, NULL, NULL),
(70, 37, 180, NULL, NULL),
(71, 38, 189, NULL, NULL),
(72, 45, 190, NULL, NULL),
(73, 54, 211, NULL, NULL),
(74, 60, 220, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_user`
--

DROP TABLE IF EXISTS `project_user`;
CREATE TABLE IF NOT EXISTS `project_user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_user_project_id_foreign` (`project_id`),
  KEY `project_user_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_user`
--

INSERT INTO `project_user` (`id`, `project_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 4, 13, NULL, NULL),
(3, 5, 14, NULL, NULL),
(4, 5, 13, NULL, NULL),
(27, 24, 14, NULL, NULL),
(28, 24, 13, NULL, NULL),
(29, 25, 14, NULL, NULL),
(30, 25, 13, NULL, NULL),
(31, 26, 14, NULL, NULL),
(32, 26, 13, NULL, NULL),
(33, 27, 14, NULL, NULL),
(34, 27, 13, NULL, NULL),
(35, 28, 14, NULL, NULL),
(36, 28, 13, NULL, NULL),
(37, 29, 14, NULL, NULL),
(38, 29, 13, NULL, NULL),
(39, 30, 14, NULL, NULL),
(40, 30, 13, NULL, NULL),
(41, 31, 14, NULL, NULL),
(42, 31, 13, NULL, NULL),
(43, 32, 14, NULL, NULL),
(44, 32, 13, NULL, NULL),
(45, 33, 14, NULL, NULL),
(46, 33, 13, NULL, NULL),
(49, 36, 13, NULL, NULL),
(50, 37, 13, NULL, NULL),
(51, 38, 14, NULL, NULL),
(52, 43, 14, NULL, NULL),
(53, 44, 14, NULL, NULL),
(54, 45, 13, NULL, NULL),
(55, 47, 104, NULL, NULL),
(56, 47, 102, NULL, NULL),
(73, 52, 181, NULL, NULL),
(74, 52, 180, NULL, NULL),
(75, 53, 181, NULL, NULL),
(76, 53, 180, NULL, NULL),
(77, 53, 145, NULL, NULL),
(78, 53, 137, NULL, NULL),
(79, 54, 181, NULL, NULL),
(80, 54, 180, NULL, NULL),
(81, 55, 181, NULL, NULL),
(82, 55, 180, NULL, NULL),
(83, 55, 145, NULL, NULL),
(84, 55, 137, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_users`
--

DROP TABLE IF EXISTS `project_users`;
CREATE TABLE IF NOT EXISTS `project_users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `progress` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `started_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_users_project_id_foreign` (`project_id`),
  KEY `project_users_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_users`
--

INSERT INTO `project_users` (`id`, `project_id`, `user_id`, `progress`, `status`, `started_at`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 55, 181, 0, '0', NULL, NULL, NULL, NULL),
(2, 55, 180, 0, '0', NULL, NULL, NULL, NULL),
(3, 55, 145, 0, '0', NULL, NULL, NULL, NULL),
(4, 55, 137, 0, '0', NULL, NULL, NULL, NULL),
(5, 55, 184, 0, '0', NULL, NULL, NULL, NULL),
(6, 56, 184, 0, '0', NULL, NULL, NULL, NULL),
(7, 56, 181, 0, '0', NULL, NULL, NULL, NULL),
(8, 56, 180, 0, '0', NULL, NULL, NULL, NULL),
(9, 56, 137, 0, '0', NULL, NULL, NULL, NULL),
(10, 57, 184, 0, '0', NULL, NULL, NULL, NULL),
(11, 57, 181, 0, '0', NULL, NULL, NULL, NULL),
(12, 57, 180, 0, '0', NULL, NULL, NULL, NULL),
(13, 57, 137, 0, '0', NULL, NULL, NULL, NULL),
(14, 58, 180, 0, '0', NULL, NULL, NULL, NULL),
(15, 58, 183, 0, '0', NULL, NULL, NULL, NULL),
(16, 59, 180, 0, '0', NULL, NULL, NULL, NULL),
(17, 60, 180, 0, '0', NULL, NULL, NULL, NULL),
(18, 60, 121, 0, '0', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `guard_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', NULL, NULL),
(2, 'Manager', 'web', NULL, NULL),
(3, 'Member', 'web', NULL, NULL),
(4, 'Assignee', 'web', NULL, NULL),
(5, 'User', 'web', NULL, NULL),
(6, 'Admin Panel', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seens`
--

DROP TABLE IF EXISTS `seens`;
CREATE TABLE IF NOT EXISTS `seens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `seenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seenable_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seens_user_id_foreign` (`user_id`),
  KEY `seens_seenable_type_seenable_id_index` (`seenable_type`,`seenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seens`
--

INSERT INTO `seens` (`id`, `user_id`, `seenable_type`, `seenable_id`, `created_at`, `updated_at`) VALUES
(1, 15, 'App\\Models\\TicketMessage', 3, '2025-11-12 09:41:14', '2025-11-12 09:41:14'),
(2, 15, 'App\\Models\\TicketMessage', 7, '2025-11-12 09:59:03', '2025-11-12 09:59:03'),
(3, 15, 'App\\Models\\TicketMessage', 1, '2025-11-12 10:08:49', '2025-11-12 10:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_general_ci,
  `payload` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('537bJVyAvzzrq0CXpwUx2RXtJcO3d5crP60clg8u', 15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36 Edg/147.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiY3VWdW1YVWRBa1lyeWRMR1BKNktjY1V2cTZkODFMaHFQRXNjQmY1RSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MjoiaHR0cDovL3Byb21hbi5jb2QvZGFzaGJvYXJkL3Rhc2svY3JlYXRlLzYwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9wcm9tYW4uY29kL2Rhc2hib2FyZC9wcm9qZWN0L3Rhc2tzLzYwIjt9czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxNTt9', 1778416860),
('Oz7yyrKKtekAv6hpfheIrCv7Ag0d0TE6FF5Sr9TV', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36 OPR/130.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidjYyTFJVR3dWMTdzNUxtSWVHVUJJTTNCNzI2TGdSS01QVWVEMmFvSSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMzoiaHR0cDovL3Byb21hbi5jb2QvYWRtaW4iO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMzoiaHR0cDovL3Byb21hbi5jb2QvYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE4OiJmbGFzaGVyOjplbnZlbG9wZXMiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1778415169);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `task_code` varchar(191) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `status` enum('0','1','2','3') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0' COMMENT '0=>pending,1=>todo,2=>in_progress,3=>Done',
  `estimated_hours` int NOT NULL DEFAULT '0',
  `remaining_hours` decimal(8,2) DEFAULT NULL,
  `duration` int DEFAULT NULL,
  `duration_type` enum('minute','hours','day','week','month','year') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'day',
  `daily_hours` int DEFAULT NULL COMMENT 'روزی چند ساعت برای تسک در نظر گرفته شود',
  `planned_hours` int DEFAULT NULL COMMENT 'مجموع ساعتی که برای این تسک در نظر گرفته شده است',
  `priority` enum('0','1','2') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0' COMMENT '0=>low,1=>medium,2=>high',
  `parent_id` int DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `actual_start_date` timestamp NULL DEFAULT NULL,
  `actual_end_date` timestamp NULL DEFAULT NULL,
  `start_todo_date` timestamp NULL DEFAULT NULL COMMENT 'بر اساس شروع واقعی تسک محاسبه میشود',
  `between_date` varchar(191) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'یک تسک در بازه زمانی شروع و پایانش در هر روز چقدر زمان لازم دارم',
  `completed_at` varchar(191) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_id` bigint UNSIGNED DEFAULT NULL,
  `implementeunit_id` bigint UNSIGNED DEFAULT NULL COMMENT 'واحد انجام دهنده تسک',
  `department_id` bigint UNSIGNED DEFAULT NULL COMMENT 'واحد سفارش دهنده تسک',
  `manager_check` enum('1','0') COLLATE utf8mb4_general_ci DEFAULT '0' COMMENT 'آیا تسک توسط مدیر تایید شود یانه',
  `manager_id` bigint UNSIGNED DEFAULT NULL COMMENT 'مدیرتایید کننده',
  `manager_verify` enum('0','1') COLLATE utf8mb4_general_ci DEFAULT '0' COMMENT 'تیک تایید مدیر مربوطه',
  `watcher_id` bigint UNSIGNED DEFAULT NULL COMMENT 'ناظر کاربر',
  `progress` int NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tasks_task_code_unique` (`task_code`),
  KEY `tasks_manager_id_foreign` (`manager_id`),
  KEY `tasks_watcher_id_foreign` (`watcher_id`),
  KEY `tasks_project_id_foreign` (`project_id`),
  KEY `tasks_user_id_foreign` (`user_id`),
  KEY `tasks_implementeunit_id_foreign` (`implementeunit_id`),
  KEY `tasks_department_id_foreign` (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `task_code`, `title`, `description`, `status`, `estimated_hours`, `remaining_hours`, `duration`, `duration_type`, `daily_hours`, `planned_hours`, `priority`, `parent_id`, `start_date`, `end_date`, `actual_start_date`, `actual_end_date`, `start_todo_date`, `between_date`, `completed_at`, `project_id`, `implementeunit_id`, `department_id`, `manager_check`, `manager_id`, `manager_verify`, `watcher_id`, `progress`, `deleted_at`, `created_at`, `updated_at`) VALUES
(128, 181, 'T_415065', 'طراحی یوزرفلو مشتری', NULL, '0', 0, NULL, 2, 'week', NULL, NULL, '1', NULL, '2026-04-25 07:30:00', '2026-05-09 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 145, 0, '2026-05-03 01:38:11', '2026-05-03 01:21:12', '2026-05-03 01:38:11'),
(129, 181, 'T_144393', 'طراحی یوزرفلو مشتری', NULL, '0', 0, NULL, 2, 'week', NULL, NULL, '1', NULL, '2026-04-25 07:30:00', '2026-05-09 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 145, 0, NULL, '2026-05-03 01:21:58', '2026-05-03 01:37:51'),
(130, 181, 'T_213175', 'تایید یوزرفلو از سمت بیزنس', NULL, '0', 0, NULL, 3, 'day', NULL, NULL, '2', NULL, '2026-05-09 07:30:00', '2026-05-12 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 01:29:27', '2026-05-03 01:37:51'),
(131, 181, 'T_863071', 'طراحی یوزرفلو سرآشپز', NULL, '0', 0, NULL, 2, 'week', NULL, NULL, '1', NULL, '2026-05-12 07:30:00', '2026-05-26 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 145, 0, NULL, '2026-05-03 01:30:21', '2026-05-03 01:37:51'),
(132, 1, 'T_185609', 'تایید یوزرفلو سرآشپز از سمت بیزنس', NULL, '0', 0, NULL, 3, 'day', NULL, NULL, '2', NULL, '2026-05-26 07:30:00', '2026-05-29 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 01:32:35', '2026-05-03 02:27:02'),
(133, 181, 'T_584864', 'طراحی وایرفریم مشتری', NULL, '0', 0, NULL, 3, 'week', NULL, NULL, '2', NULL, '2026-05-29 07:30:00', '2026-06-19 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 01:34:17', '2026-05-03 01:37:51'),
(134, 1, 'T_703463', 'تایید وایرفریم مشتری از سمت بیزنس', NULL, '0', 0, NULL, 5, 'day', NULL, NULL, '2', NULL, '2026-06-19 07:30:00', '2026-06-24 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 01:35:21', '2026-05-03 01:54:46'),
(135, 181, 'T_974371', 'طراحی وایرفریم سرآشپز', NULL, '0', 0, NULL, 3, 'week', NULL, NULL, '2', NULL, '2026-06-24 07:30:00', '2026-07-15 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 01:36:19', '2026-05-03 01:37:51'),
(136, 181, 'T_702858', 'تایید وایرفریم سرآشپز از سمت بیزنس', NULL, '0', 0, NULL, 5, 'day', NULL, NULL, '2', NULL, '2026-07-15 07:30:00', '2026-07-20 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(137, 181, 'T_991143', 'طراحی یوآی مشتری', NULL, '0', 0, NULL, 3, 'week', NULL, NULL, '2', NULL, '2026-07-20 07:30:00', '2026-08-10 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 02:22:47', '2026-05-03 02:22:47'),
(138, 181, 'T_414947', 'تایید طراحی یوآی سرآشپز توسط بیزنس', NULL, '0', 0, NULL, 3, 'week', NULL, NULL, '2', NULL, '2026-08-10 07:30:00', '2026-08-31 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, '2026-05-03 02:28:11', '2026-05-03 02:26:46', '2026-05-03 02:28:11'),
(139, 181, 'T_128452', 'تایید یوآی سرآشپز توسط بیزنس', NULL, '0', 0, NULL, 5, 'day', NULL, NULL, '1', NULL, '2026-08-10 07:30:00', '2026-08-15 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 02:30:45', '2026-05-03 02:30:45'),
(140, 181, 'T_532901', 'طراحی یوآی سرآشپز', NULL, '0', 0, NULL, 3, 'week', NULL, NULL, '2', NULL, '2026-08-15 07:30:00', '2026-09-05 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 02:31:39', '2026-05-03 02:31:39'),
(141, 181, 'T_590441', 'تایید یوآی سرآشپز توسط بیزنس', NULL, '0', 0, NULL, 5, 'day', NULL, NULL, '2', NULL, '2026-09-05 07:30:00', '2026-09-10 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 02:32:43', '2026-05-03 02:32:43'),
(142, 181, 'T_842999', 'توسعه بک‌اِند', NULL, '0', 0, NULL, 10, 'week', NULL, NULL, '2', NULL, '2026-07-20 07:30:00', '2026-09-28 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 02:34:32', '2026-05-03 02:34:32'),
(143, 181, 'T_754332', 'توسعه فرانت اند', NULL, '0', 0, NULL, 3, 'week', NULL, NULL, '2', NULL, '2026-08-15 07:30:00', '2026-09-05 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 02:35:39', '2026-05-03 02:35:39'),
(144, 181, 'T_985362', 'توسعه فرانت اند سرآشپز', NULL, '0', 0, NULL, 3, 'week', NULL, NULL, '2', NULL, '2026-09-10 07:30:00', '2026-10-01 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 02:37:02', '2026-05-03 02:37:02'),
(145, 181, 'T_893919', 'طراحی صفحات باقیمانده', NULL, '0', 0, NULL, 4, 'week', NULL, NULL, '2', NULL, '2026-09-10 07:30:00', '2026-10-08 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 02:39:08', '2026-05-03 02:39:08'),
(146, 181, 'T_242606', 'توسعه فرانت‌اِند', NULL, '0', 0, NULL, 4, 'week', NULL, NULL, '2', NULL, '2026-09-10 07:30:00', '2026-10-08 07:30:00', NULL, NULL, NULL, NULL, NULL, 56, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-03 02:39:45', '2026-05-03 02:39:45'),
(178, 15, 'T_187327', 'تسک 1', NULL, '0', 90, NULL, NULL, 'day', NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, NULL, NULL, '1', 181, '0', 181, 0, '2026-05-10 08:42:49', '2026-05-10 08:37:36', '2026-05-10 08:42:49'),
(179, 15, 'T_715723', 'تسک 1', NULL, '0', 90, NULL, NULL, 'day', NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, NULL, NULL, '1', 181, '0', 181, 0, '2026-05-10 08:42:43', '2026-05-10 08:38:01', '2026-05-10 08:42:43'),
(180, 15, 'T_930936', 'تست تاریخ وساعت و همه چی', 'تست', '0', 14, NULL, NULL, 'day', NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, NULL, NULL, '0', NULL, '0', 181, 0, NULL, '2026-05-10 09:06:27', '2026-05-10 09:10:59'),
(181, 15, 'T_306592', 'تسک دوم برای تست تاریخ و ساعت', 'تست', '0', 20, NULL, NULL, 'day', NULL, NULL, '2', NULL, '2026-05-10 04:30:00', '2026-05-12 04:30:00', NULL, NULL, NULL, NULL, NULL, 60, NULL, NULL, '1', 1, '0', 181, 0, NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `task_allocations`
--

DROP TABLE IF EXISTS `task_allocations`;
CREATE TABLE IF NOT EXISTS `task_allocations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `task_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `work_date` date NOT NULL,
  `hours` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `task_allocations_task_id_user_id_work_date_unique` (`task_id`,`user_id`,`work_date`),
  KEY `task_allocations_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_allocations`
--

INSERT INTO `task_allocations` (`id`, `task_id`, `user_id`, `work_date`, `hours`, `created_at`, `updated_at`) VALUES
(5, 180, 180, '2026-05-09', 4.00, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(6, 180, 184, '2026-05-09', 3.00, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(7, 180, 180, '2026-05-10', 4.00, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(8, 180, 184, '2026-05-10', 3.00, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(9, 181, 180, '2026-05-10', 4.00, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(10, 181, 184, '2026-05-10', 3.00, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(11, 181, 180, '2026-05-11', 4.00, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(12, 181, 184, '2026-05-11', 3.00, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(13, 181, 180, '2026-05-12', 4.00, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(14, 181, 184, '2026-05-12', 2.00, '2026-05-10 09:10:59', '2026-05-10 09:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `task_checklists`
--

DROP TABLE IF EXISTS `task_checklists`;
CREATE TABLE IF NOT EXISTS `task_checklists` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=>no , 1=>yes',
  `task_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `task_checklists_task_id_foreign` (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_dependencies`
--

DROP TABLE IF EXISTS `task_dependencies`;
CREATE TABLE IF NOT EXISTS `task_dependencies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `predecessor_id` bigint UNSIGNED NOT NULL,
  `successor_id` bigint UNSIGNED NOT NULL,
  `relation_type` enum('FS','FF','SS','SF') COLLATE utf8mb4_general_ci NOT NULL COMMENT 'FS=>finish to start , FF=>finish to finish , SS=>start to start , SF=>start to finish',
  `lag` int DEFAULT '0' COMMENT 'تاخیر در انجام تسک',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `task_dependenceies_predecessor_id_successor_id_unique` (`predecessor_id`,`successor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_dependencies`
--

INSERT INTO `task_dependencies` (`id`, `predecessor_id`, `successor_id`, `relation_type`, `lag`, `created_at`, `updated_at`) VALUES
(1, 4, 55, 'FS', 2, NULL, NULL),
(2, 55, 4, 'FS', 2, NULL, NULL),
(3, 16, 15, 'FF', 2, NULL, NULL),
(4, 15, 16, 'FF', 2, NULL, NULL),
(5, 70, 69, 'FS', 1, NULL, NULL),
(6, 129, 130, 'FS', 0, '2026-05-03 01:29:27', '2026-05-03 01:29:27'),
(7, 130, 131, 'FS', 0, '2026-05-03 01:30:21', '2026-05-03 01:30:21'),
(8, 131, 132, 'FS', 0, '2026-05-03 01:32:35', '2026-05-03 01:32:35'),
(9, 132, 133, 'FS', 0, '2026-05-03 01:34:18', '2026-05-03 01:34:18'),
(10, 133, 134, 'FS', 0, '2026-05-03 01:35:22', '2026-05-03 01:35:22'),
(11, 134, 135, 'FS', 0, '2026-05-03 01:36:19', '2026-05-03 01:36:19'),
(12, 135, 136, 'FS', 0, '2026-05-03 01:37:51', '2026-05-03 01:37:51'),
(13, 136, 137, 'FS', 0, '2026-05-03 02:22:47', '2026-05-03 02:22:47'),
(14, 137, 138, 'FS', 0, '2026-05-03 02:26:46', '2026-05-03 02:26:46'),
(15, 137, 139, 'FS', 0, '2026-05-03 02:30:45', '2026-05-03 02:30:45'),
(16, 139, 140, 'FS', 0, '2026-05-03 02:31:39', '2026-05-03 02:31:39'),
(17, 140, 141, 'FS', 0, '2026-05-03 02:32:43', '2026-05-03 02:32:43'),
(18, 137, 142, 'SS', 0, '2026-05-03 02:34:32', '2026-05-03 02:34:32'),
(19, 139, 143, 'FS', 0, '2026-05-03 02:35:39', '2026-05-03 02:35:39'),
(20, 141, 144, 'FS', 0, '2026-05-03 02:37:02', '2026-05-03 02:37:02'),
(21, 141, 145, 'FS', 0, '2026-05-03 02:39:08', '2026-05-03 02:39:08'),
(22, 145, 146, 'SS', 0, '2026-05-03 02:39:45', '2026-05-03 02:39:45'),
(23, 180, 181, 'FS', 0, '2026-05-10 09:10:59', '2026-05-10 09:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `task_photo`
--

DROP TABLE IF EXISTS `task_photo`;
CREATE TABLE IF NOT EXISTS `task_photo` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `task_id` bigint UNSIGNED DEFAULT NULL,
  `photo_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `task_photo_task_id_foreign` (`task_id`),
  KEY `task_photo_photo_id_foreign` (`photo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_photo`
--

INSERT INTO `task_photo` (`id`, `task_id`, `photo_id`, `created_at`, `updated_at`) VALUES
(120, 113, 212, NULL, NULL),
(121, 114, 213, NULL, NULL),
(122, 115, 214, NULL, NULL),
(123, 116, 215, NULL, NULL),
(124, 120, 216, NULL, NULL),
(125, 121, 217, NULL, NULL),
(126, 122, 218, NULL, NULL),
(127, 123, 219, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_user`
--

DROP TABLE IF EXISTS `task_user`;
CREATE TABLE IF NOT EXISTS `task_user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `task_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `task_user_task_id_foreign` (`task_id`),
  KEY `task_user_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_users`
--

DROP TABLE IF EXISTS `task_users`;
CREATE TABLE IF NOT EXISTS `task_users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `task_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `progress` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `hours_per_day` int NOT NULL DEFAULT '0' COMMENT 'ساعت در روز',
  `allocated_hours` int NOT NULL DEFAULT '0' COMMENT 'ساعت اختصاصی',
  `started_at` timestamp NULL DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `task_users_task_id_user_id_unique` (`task_id`,`user_id`),
  KEY `task_users_task_id_foreign` (`task_id`),
  KEY `task_users_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_users`
--

INSERT INTO `task_users` (`id`, `task_id`, `user_id`, `progress`, `status`, `hours_per_day`, `allocated_hours`, `started_at`, `completed_at`, `created_at`, `updated_at`) VALUES
(23, 129, 137, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(24, 130, 163, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(25, 130, 162, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(26, 131, 137, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(28, 133, 137, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(30, 135, 137, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(31, 136, 163, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(32, 136, 162, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(33, 134, 163, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(34, 134, 162, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(37, 137, 137, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(38, 138, 163, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(39, 138, 162, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(40, 132, 163, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(41, 132, 162, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(42, 139, 163, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(43, 139, 162, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(44, 140, 137, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(45, 141, 163, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(46, 141, 162, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(47, 142, 184, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(48, 142, 180, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(49, 143, 184, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(50, 144, 184, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(51, 145, 137, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(52, 146, 184, 0, '0', 0, 0, NULL, NULL, NULL, NULL),
(109, 179, 184, 0, '0', 3, 0, NULL, NULL, '2026-05-10 08:38:01', '2026-05-10 08:38:01'),
(110, 179, 180, 0, '0', 4, 0, NULL, NULL, '2026-05-10 08:38:01', '2026-05-10 08:38:01'),
(111, 180, 184, 0, '0', 3, 0, NULL, NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
(112, 180, 180, 0, '0', 4, 0, NULL, NULL, '2026-05-10 09:06:27', '2026-05-10 09:06:27'),
(113, 181, 184, 0, '0', 3, 0, NULL, NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59'),
(114, 181, 180, 0, '0', 4, 0, NULL, NULL, '2026-05-10 09:10:59', '2026-05-10 09:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `task_user_worklogs`
--

DROP TABLE IF EXISTS `task_user_worklogs`;
CREATE TABLE IF NOT EXISTS `task_user_worklogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `task_user_id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `hours` int NOT NULL COMMENT 'چقدر کار انجام شده اون روز',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `task_user_worklogs_task_user_id_foreign` (`task_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` bigint UNSIGNED DEFAULT NULL COMMENT 'واحد متعلق به تیم',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_unit_id_foreign` (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `department_id` bigint UNSIGNED DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` enum('low','medium','high') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'low',
  `status` enum('new','pending','answered','waiting','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tickets_user_id_foreign` (`user_id`),
  KEY `tickets_department_id_foreign` (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_attachments`
--

DROP TABLE IF EXISTS `ticket_attachments`;
CREATE TABLE IF NOT EXISTS `ticket_attachments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `ticket_message_id` bigint UNSIGNED DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ticket_attachments_ticket_message_id_foreign` (`ticket_message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_departments`
--

DROP TABLE IF EXISTS `ticket_departments`;
CREATE TABLE IF NOT EXISTS `ticket_departments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_departments`
--

INSERT INTO `ticket_departments` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'پشتیبانی', 'active', NULL, NULL),
(2, 'فنی', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_messages`
--

DROP TABLE IF EXISTS `ticket_messages`;
CREATE TABLE IF NOT EXISTS `ticket_messages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `ticket_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ticket_messages_ticket_id_foreign` (`ticket_id`),
  KEY `ticket_messages_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `confirm_code` varchar(191) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile_verified_at` timestamp NULL DEFAULT NULL,
  `personal_id` varchar(191) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'کد پرسنلی',
  `daily_capacity_hours` int DEFAULT NULL COMMENT 'مجموع ساعت کاری در روز ',
  `status` enum('0','1','2') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `department_id` bigint UNSIGNED DEFAULT NULL,
  `position_id` bigint UNSIGNED NOT NULL,
  `photo_id` bigint UNSIGNED DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `password_text` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_mobile_unique` (`mobile`),
  UNIQUE KEY `users_personal_id_unique` (`personal_id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_position_id_foreign` (`position_id`),
  KEY `users_photo_id_foreign` (`photo_id`),
  KEY `users_department_id_foreign` (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `confirm_code`, `mobile_verified_at`, `personal_id`, `daily_capacity_hours`, `status`, `department_id`, `position_id`, `photo_id`, `email`, `email_verified_at`, `password`, `password_text`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'فریناز', 'حقیقی', '09109420271', '849849', '2026-04-22 03:30:29', '212344', 8, '1', NULL, 1, 20, 'farinaz.haghighi314@gmail.com', '2025-10-13 07:56:24', '$2y$12$lQQdge9UZ0DD9X4jQ/y5UenAb0gCxKXq7xoJfIyakZvincUBe/hpe', '@farinaz314', NULL, NULL, '2026-04-22 07:43:18', NULL),
(12, 'آتریس', 'پرو', '', NULL, '2026-04-19 05:10:12', '356245', 8, '1', NULL, 2, NULL, 'at3124@gmail.com', NULL, '$2y$12$kikh.2sikGFlX4he5ujrs.WNSf01MHEI5JLVJ7t.86chv3INwRddW', NULL, NULL, '2025-10-15 08:35:49', '2026-04-19 05:10:12', NULL),
(13, 'عضو 1', 'پروژه', '091012345678', NULL, NULL, '3213215', 8, '1', NULL, 5, 20, 'info@solico123.com', NULL, '$2y$12$6j61Yw1DEGvXwK7TMHqFm.6yuNvhF5OVhsFSg07SdlLtD0xUnFgUy', NULL, NULL, '2025-10-19 02:47:38', '2025-10-19 02:58:46', NULL),
(15, 'مدیر', 'آتریس', '00001234567', '860448', '2026-04-22 02:10:48', '65465', 8, '1', NULL, 2, NULL, 'atris.314@gmail.com', NULL, '$2y$12$ULCStuv8HGcmVaZ47QowKOymxxUDYkYC7wRVR95JEEExQCw8WJVdy', 'jHnb^$ARNb', NULL, '2025-10-21 04:41:54', '2026-04-25 03:29:20', NULL),
(16, 'آقای', 'سلیمانی', '09121234567', NULL, NULL, '111111', 8, '1', NULL, 6, NULL, 'soly@solico-ms.com', NULL, '$2y$12$1BCF4AzyNJes3fuAYISPue9fMIQ.i4IftYw29U/6PzYpxYLYwk9LS', NULL, NULL, '2025-12-07 06:02:31', '2025-12-07 06:02:39', NULL),
(101, 'محمد', 'اوتادی', '09212388428', '950683', '2025-12-15 05:01:57', '447015', 8, '1', 19, 8, NULL, NULL, NULL, '$2y$12$jaYSjoTLBEQrFWzBc/Dg5Ou5pXDonAvSWTa6GTt8rFe95jDNrC9si', NULL, NULL, '2025-12-15 02:44:14', '2025-12-15 05:01:57', NULL),
(102, 'ژاله', 'شادمانی', '09123481675', '578978', '2025-12-15 04:51:16', '666313', 8, '1', 19, 7, NULL, NULL, NULL, '$2y$12$B0bWDwCzjAkk1ADaB/j4ru/ogp9lTlGy6K9N0MQSnjox12u7KCM8K', NULL, NULL, '2025-12-15 02:44:14', '2025-12-15 04:51:16', NULL),
(103, 'الناز ', 'حاتمی', '09122389505', NULL, NULL, '596347', 8, '1', 21, 11, NULL, NULL, NULL, '$2y$12$PRSKAXG1zmxr5FvVxfiCOOrrzeI4O7.2WxlaamSh5jBXXOKbTAfmm', NULL, NULL, '2025-12-15 02:44:15', '2025-12-15 02:44:15', NULL),
(104, 'علیرضا ', 'میانجی', '   09124494006', NULL, NULL, '592614', 8, '1', 26, 12, NULL, NULL, NULL, '$2y$12$StwoEenzsKqJxWIY4OqL/e/.c3Fh083mU8gk3rb2dwQAb1Fl3nkLS', NULL, NULL, '2025-12-15 02:44:15', '2025-12-15 02:44:15', NULL),
(105, 'فریبا', 'احمدیان', '   09122339375', NULL, NULL, '722695', 8, '1', 26, 73, NULL, NULL, NULL, '$2y$12$LyTWcYbK5izM2/XNg9eKM.QNOHIql3o/cltTGNcvn8lV1FTZdWdvm', NULL, NULL, '2025-12-15 02:44:15', '2025-12-15 02:44:15', NULL),
(106, 'مهناز', 'آزاد', '   09121577616', NULL, NULL, '550330', 8, '1', 26, 13, NULL, NULL, NULL, '$2y$12$S8i2kQ0xGPkdKANPymYJUOBC2k1oJqpvOxy6yvuu5FMr/m.aL0AH2', NULL, NULL, '2025-12-15 02:44:15', '2025-12-15 02:44:15', NULL),
(107, 'شقایق', 'لطفی', '09306104151', NULL, NULL, '920496', 8, '1', 26, 14, NULL, NULL, NULL, '$2y$12$ObKPzbY3uj3fJZ4wmVzmOO5HeOKugsDUk84QjrpjwxDUEiMo.oA9S', NULL, NULL, '2025-12-15 02:44:15', '2025-12-15 02:44:15', NULL),
(108, 'فائزه', 'ابراهیم', '09365305239', NULL, NULL, '677427', 8, '1', 24, 15, NULL, NULL, NULL, '$2y$12$CFrAmBra./2.xpODELJSjet5uF7BpJ0AeVvTU8oQHCiHNgQ01N7/u', NULL, NULL, '2025-12-15 02:44:16', '2025-12-15 02:44:16', NULL),
(109, 'انوشه', 'لطفی مقدس', '09122757745', NULL, NULL, '305732', 8, '1', 24, 16, NULL, NULL, NULL, '$2y$12$xqMV06ubtchUSXsvTkIj/.EJcy9eKw.If1LXVGzO53onNCE6D8iJ2', NULL, NULL, '2025-12-15 02:44:16', '2025-12-15 02:44:16', NULL),
(110, 'حامد', 'سعیدی نژاد', '09100977983', NULL, NULL, '526010', 8, '1', 24, 17, NULL, NULL, NULL, '$2y$12$Szy7RocG2tg39ojGI8n3ReA6WYBsTftX1eLJ5rU8YAwhZrsLc1EVa', NULL, NULL, '2025-12-15 02:44:16', '2025-12-15 02:44:16', NULL),
(111, 'پریسا', 'مقیمی', '09127109919', NULL, NULL, '370011', 8, '1', 24, 18, NULL, NULL, NULL, '$2y$12$/q2sb8pClMdgh/ZJ0YvCt.JeChG182XBJyyUh22nEE1yeGRqK4B9K', NULL, NULL, '2025-12-15 02:44:16', '2025-12-15 02:44:16', NULL),
(112, 'نسترن ', 'علیان', '09127950388', NULL, NULL, '228901', 8, '1', 23, 19, NULL, NULL, NULL, '$2y$12$0zt1Ysx.eZ1mx2n.KxLgjufngjpLkPgr/vFMjhVlR8FZ3YzuCVxZ6', NULL, NULL, '2025-12-15 02:44:16', '2025-12-15 02:44:16', NULL),
(113, 'ستاره ', 'جمارانی', '09125445091', NULL, NULL, '363787', 8, '1', 23, 20, NULL, NULL, NULL, '$2y$12$NLQWlNU1EMjQDmQDB3aFfe3qGMGQnO5sBt3VTTzX7IJyER14U.Tq2', NULL, NULL, '2025-12-15 02:44:17', '2025-12-15 02:44:17', NULL),
(114, 'غزل ', 'بهرامی', '09910733037', NULL, NULL, '588064', 8, '1', 23, 21, NULL, NULL, NULL, '$2y$12$HmVpIHrtIc7azf2HiB0ScehScIaukBoiQoDdU3srr1VYiUiRnpFCW', NULL, NULL, '2025-12-15 02:44:17', '2025-12-15 02:44:17', NULL),
(115, 'آیدین ', 'باور ', '09125264200', NULL, NULL, '261245', 8, '1', 23, 22, NULL, NULL, NULL, '$2y$12$kHYrxpP7XbAcgzaJVend4OcGOseQL/R0hMGttEJreGr9Aj6eN7RlK', NULL, NULL, '2025-12-15 02:44:17', '2025-12-15 02:44:17', NULL),
(116, 'مهدی ', 'شکری زاده', '09125802352', NULL, NULL, '462586', 8, '1', 23, 19, NULL, NULL, NULL, '$2y$12$1IWl8l7fkWOB/RDPWxFyveFWZ49fq.ulMRpJySoOgVUIs6oH5Qo6m', NULL, NULL, '2025-12-15 02:44:17', '2025-12-15 02:44:17', NULL),
(117, 'زهرا ', 'عرب زاده', '09337185299', NULL, NULL, '838230', 8, '1', 23, 24, NULL, NULL, NULL, '$2y$12$QrXvvLJrocN5Kpe2HxsyxulrzfbFpkVc9nDhliK3J6Bn6u3gI9F06', NULL, NULL, '2025-12-15 02:44:17', '2025-12-15 02:44:17', NULL),
(118, 'مهرناز ', 'تیموری', '09129533509', NULL, NULL, '879673', 8, '1', 23, 25, NULL, NULL, NULL, '$2y$12$UFmWRwEJM4Z3N5De7JzC1ufFCz//etR.YDN3P5cRdAd/oHDp1j0pu', NULL, NULL, '2025-12-15 02:44:18', '2025-12-15 02:44:18', NULL),
(119, 'ستاره ', 'بهلولی', '9351703171', NULL, NULL, '417705', 8, '1', 23, 26, NULL, NULL, NULL, '$2y$12$Tei2ooJM8wiUXKB0bVt3NO0bYah1Zag8zt4SHFDwT/O3Itfc7GAKi', NULL, NULL, '2025-12-15 02:44:18', '2025-12-15 02:44:18', NULL),
(120, 'محیا', 'موگوئی ', '9381450291', NULL, NULL, '413001', 8, '1', 20, 27, NULL, NULL, NULL, '$2y$12$XWvs1rycq0xVjItAN1zllOHTEv7.gyKUQYNluzHfp/kSPCndaj7.a', NULL, NULL, '2025-12-15 02:44:18', '2025-12-15 02:44:18', NULL),
(121, 'شیما', 'رکابدار', '09128317953', NULL, NULL, '166383', 8, '1', 20, 9, NULL, 'sh.rekabdar@solico-group.com', NULL, '$2y$12$9DXQVZI8Wb.SSM3HjzOjwuLgk5O5SVdyQyMu8TD4s931T7yHLhp7G', 'Kct(#^EOPT', NULL, '2025-12-15 02:44:18', '2026-04-29 03:34:42', NULL),
(122, 'داود', 'یوسفی', '09123263072', NULL, NULL, '186953', 8, '1', 20, 28, NULL, 'd.yousefi@solico-group.ir', NULL, '$2y$12$a.OKtZGPm3MVEYvYGoCk3.Nv8dNseAokCeAOTpI.0gH5cuvRSiOtu', 'efW5!SY8Qt', NULL, '2025-12-15 02:44:18', '2026-04-27 02:05:51', NULL),
(123, 'مینو', 'تشکری', '09031026307', NULL, NULL, '605198', 8, '1', 20, 29, NULL, NULL, NULL, '$2y$12$fOZSFXtcSkkyuVGHFC69d.L/Du/NxvCJEf5Y4RZWkl0IDWpnfWjra', NULL, NULL, '2025-12-15 02:44:19', '2025-12-15 02:44:19', NULL),
(124, 'حبیبه', 'مجیدی', '09195061070', NULL, NULL, '463648', 8, '1', 20, 30, NULL, '09233296981', NULL, '$2y$12$.NVsd3lfqkJ8ZoWwymbLQO4iiDHfYyJYElNUZndT6TPIXJU6X6D7W', 'Kct(#^EOPT', NULL, '2025-12-15 02:44:19', '2026-04-28 05:03:13', NULL),
(125, 'نسترن', 'فارسی', '09128367261', NULL, NULL, '927761', 8, '1', 20, 31, NULL, NULL, NULL, '$2y$12$n2TVsMk0U7RHIdnL7L5c6eLNOFdiNpmpAiSsoZ8HRQJUuqlTf9z8O', NULL, NULL, '2025-12-15 02:44:19', '2025-12-15 02:44:19', NULL),
(126, 'سید مرتضی', 'طالب پور امیری', '09126542889', NULL, NULL, '587193', 8, '1', 20, 32, NULL, NULL, NULL, '$2y$12$DjpsRWSzbA7GehlGNnKdbOZpvTy/lx.fFkxwT.S.dnZwZHJN83yy6', '7g5znvQhla', NULL, '2025-12-15 02:44:19', '2026-05-02 01:07:57', NULL),
(127, 'رضا', 'افرازی کلویر', '09378509036', NULL, NULL, '567781', 8, '1', 20, 33, NULL, NULL, NULL, '$2y$12$MLyai/CAFHiF5gpX6T9NKu/H6WMqx6kaSs1wlbHChM12v6r0u.Nbe', NULL, NULL, '2025-12-15 02:44:19', '2025-12-15 02:44:19', NULL),
(128, 'سارا', 'میرجعفری', '09130331896', NULL, NULL, '458978', 8, '1', 20, 33, NULL, NULL, NULL, '$2y$12$iZcie7OH1rzAVFXgVkRp4eXBMvrrGV37BI1QaibUYAbOPEY6feOTe', NULL, NULL, '2025-12-15 02:44:20', '2025-12-15 02:44:20', NULL),
(129, 'نسترن', 'محبی', '09226198846', NULL, NULL, '501741', 8, '1', 20, 27, NULL, NULL, NULL, '$2y$12$tEcGWKLQqeVA2biI0Ss2GO1m9saN.0QhD1900lU3EVusBphWBl/pm', NULL, NULL, '2025-12-15 02:44:20', '2025-12-15 02:44:20', NULL),
(130, 'ملیکا', 'فیلم', '09198713718', NULL, NULL, '560807', 8, '1', 20, 37, NULL, NULL, NULL, '$2y$12$Hp0FDXYwj5oh60VWGaQlDuzz0lTmaTZBZ0.mZfDsM2wSXzPC1KE0C', NULL, NULL, '2025-12-15 02:44:20', '2025-12-15 02:44:20', NULL),
(131, 'مرجان', 'ثقفی', '09104596634', NULL, NULL, '601394', 8, '1', 20, 27, NULL, NULL, NULL, '$2y$12$dLtIDmRBK7yeXQP6IX0bqOxTBACI302Zlr4LgwZhfcYkaf0DEntDm', NULL, NULL, '2025-12-15 02:44:20', '2025-12-15 02:44:20', NULL),
(132, 'مریم ', 'پور صدری', '09194989023', NULL, NULL, '749031', 8, '1', 20, 27, NULL, NULL, NULL, '$2y$12$xzK3yXFAvi8OWTkX9FIJxuGjdbt2OsN22iKKLhLiukpDKh.0ON8I.', NULL, NULL, '2025-12-15 02:44:20', '2025-12-15 02:44:20', NULL),
(133, 'شیرین ', 'علیایی', '09195077794', NULL, NULL, '195234', 8, '1', 20, 38, NULL, NULL, NULL, '$2y$12$cC96i89pddJVrnm02bq1m.sGrTRugsLXwsJpD3EtUiHi0roFm/94e', NULL, NULL, '2025-12-15 02:44:21', '2025-12-15 02:44:21', NULL),
(134, 'غزاله', 'دانشیان', '09026677345', NULL, NULL, '777019', 8, '1', 20, 27, NULL, NULL, NULL, '$2y$12$54KIKMwsyS1K5rVNkXIDDeBJmGEfAdkHthMLhJDUltWfbrdbeFVci', NULL, NULL, '2025-12-15 02:44:21', '2025-12-15 02:44:21', NULL),
(135, 'رومینا ', 'نصیرپور', '09100137779', NULL, NULL, '538602', 8, '1', 20, 27, NULL, NULL, NULL, '$2y$12$t032HMgornwgMa4p/oQz8ey7dkoKykvnijrDkccKhYAU42vyUXxDa', NULL, NULL, '2025-12-15 02:44:21', '2025-12-15 02:44:21', NULL),
(136, 'رویا', 'علاییان', '09192070992', NULL, NULL, '720864', 8, '1', 20, 9, NULL, NULL, NULL, '$2y$12$1hBsCAItV4P3nEGLE5Zl8OyadNiglw3vuuhyh8CwJPrsCaSsZ8U6i', NULL, NULL, '2025-12-15 02:44:21', '2025-12-15 02:44:21', NULL),
(137, 'محمدعلی', 'ناصحی', '09022070087', NULL, NULL, '538134', 8, '1', 20, 40, NULL, NULL, NULL, '$2y$12$0bqLU5Tflw28vKYjm1TcuOrd8b/BBsCeYyzbZi/WgvZxiKR3QuZUq', NULL, NULL, '2025-12-15 02:44:21', '2025-12-15 02:44:21', NULL),
(138, 'عاطفه', 'صابری بیرون', '09026085958', NULL, NULL, '614939', 8, '1', 20, 33, NULL, NULL, NULL, '$2y$12$JNeRf20m5VWjLdv8nDS3R.PPuGCWalOgIjbRcusmszvVkv7ojJqu.', NULL, NULL, '2025-12-15 02:44:22', '2025-12-15 02:44:22', NULL),
(139, ' علی ', 'احسانی کلجه ', '09126301788', NULL, NULL, '501711', 8, '1', 20, 31, NULL, NULL, NULL, '$2y$12$cMqGrWXVwxnMj1bwNRLwfOTn9cO/UpGZ2oCLPztMi2Ax4rBly5m22', NULL, NULL, '2025-12-15 02:44:22', '2025-12-15 02:44:22', NULL),
(140, 'علی', 'نادرمحمدی', '۰۹۱۲۳۵۴۶۵۲۷', NULL, NULL, '882182', 8, '1', 20, 42, NULL, NULL, NULL, '$2y$12$HG3gHuuEyG95yCmci1CWO.SJQpNH5.vZrrHAzPcvlR/1fF4IEB5Im', NULL, NULL, '2025-12-15 02:44:22', '2025-12-15 02:44:22', NULL),
(141, 'آرمين', 'زندي', '09383437955', NULL, NULL, '309553', 8, '1', 20, 32, NULL, NULL, NULL, '$2y$12$dIHsWvuumsESLKaif5CMU.IXb9SpFi/GKmlqN..SI0xxZ204QuywG', 'L)LoQ#Hvx0', NULL, '2025-12-15 02:44:22', '2026-04-25 00:58:48', NULL),
(142, 'عطيه', 'فتح اللهي', '09019093803', NULL, NULL, '534631', 8, '1', 20, 27, NULL, NULL, NULL, '$2y$12$pPmqIYKGmtvkgGvrcWzLDuTk3eVzx7dNKIDsCHBq2xagcMrL0DQZG', NULL, NULL, '2025-12-15 02:44:22', '2025-12-15 02:44:22', NULL),
(143, 'ناصر', 'ریاضی', '09142350135', NULL, NULL, '228829', 8, '1', 20, 74, NULL, NULL, NULL, '$2y$12$TUF3bLw.51Rr53rszGQST.45lIwhQvpUXOe/WJ/aFOxRDXbZo6R26', NULL, NULL, '2025-12-15 02:44:23', '2025-12-15 02:44:23', NULL),
(144, 'مینا ', 'دمیرچی', '09369730534', NULL, NULL, '328799', 8, '1', 20, 43, NULL, NULL, NULL, '$2y$12$k2iuW.Hw3Wd1fMZ3ilJDyu99S8Lcxfh5eehVFUySlJEfPR6DqHY6a', NULL, NULL, '2025-12-15 02:44:23', '2025-12-15 02:44:23', NULL),
(145, 'شکوه ', 'لطفی', '09124598854', NULL, NULL, '660491', 8, '1', 20, 44, NULL, NULL, NULL, '$2y$12$pOig6b5.27rkBrdI4ameluS29WRO1lh00ar55psD1F6QHr6Sib3ZO', NULL, NULL, '2025-12-15 02:44:23', '2025-12-15 02:44:23', NULL),
(146, 'پریسا', 'اسماعیلی', '09358843474', NULL, NULL, '819939', 8, '1', 22, 75, NULL, NULL, NULL, '$2y$12$J0Q52JTiS11h.B1A5JuzKuc0EMdJJznqS93Z8Qvyn1.K4HPiO6B06', NULL, NULL, '2025-12-15 02:44:23', '2025-12-15 02:44:23', NULL),
(147, 'صابر', 'موسوی', '9127803603', NULL, NULL, '532154', 8, '1', 24, 76, NULL, NULL, NULL, '$2y$12$LwKRx6V09OmiJvLrULsK2uW053XOMLG/uSttI7tlJ9.i8aT6Hrl3W', NULL, NULL, '2025-12-15 02:44:23', '2025-12-15 02:44:23', NULL),
(148, 'غزاله', 'کیانزاد', '09125543849', NULL, NULL, '120547', 8, '1', 1, 77, NULL, NULL, NULL, '$2y$12$eo0I8CjAGbpM393n4TVYne4y8n99Ixr.qMvZQmb5xpROVRl9KCFBC', NULL, NULL, '2025-12-15 02:44:24', '2025-12-15 02:44:24', NULL),
(149, 'عطیه', 'امانی', '09124079185', NULL, NULL, '305906', 8, '1', 3, 45, NULL, NULL, NULL, '$2y$12$TPgNJcRAc0XdIZ.wX92reet82B6IDpMo/szERwQSCPSN4J8KbGHhS', NULL, NULL, '2025-12-15 02:44:24', '2025-12-15 02:44:24', NULL),
(150, 'غزال', 'علیانسب', '09122116318', NULL, NULL, '826686', 8, '1', 3, 46, NULL, NULL, NULL, '$2y$12$l3QE/QxO3hg55PyZoorrJeaUH6M99dw/LF1PpO15nPk91Pt6sBRja', NULL, NULL, '2025-12-15 02:44:24', '2025-12-15 02:44:24', NULL),
(151, 'اصغر', 'امیری', '09113240344', NULL, NULL, '384225', 8, '1', 5, 47, NULL, NULL, NULL, '$2y$12$vGsVMq6fpokRz3Okhu1x1.aSCikuUo/M0LOkpl6YvBNhLuwh0t30C', NULL, NULL, '2025-12-15 02:44:24', '2025-12-15 02:44:24', NULL),
(152, 'شعیب', 'امیری', '09124725394', NULL, NULL, '400675', 8, '1', 5, 48, NULL, NULL, NULL, '$2y$12$mUDAQ9MjNVNlWk9g.cSoTOSWVQGPBGTCLdVmOMH7bD4Rqsia9y5j2', NULL, NULL, '2025-12-15 02:44:24', '2025-12-15 02:44:24', NULL),
(153, 'فائزه', 'محمدی', '09123498404', NULL, NULL, '919682', 8, '1', 5, 48, NULL, NULL, NULL, '$2y$12$IFUMh4ykbJXnPWR7PlER4uV43E4QwuuS0PO5IpT3DQcCTkRGuxwh6', NULL, NULL, '2025-12-15 02:44:25', '2025-12-15 02:44:25', NULL),
(154, 'عاطفه', 'بوشادی', '09121234789', NULL, NULL, '430338', 8, '1', 5, 48, NULL, NULL, NULL, '$2y$12$UYyoFKOmuP35FaK1BbOb0.PDShvEQVTNKPxurWwPh3828CRLvRz96', NULL, NULL, '2025-12-15 02:44:25', '2025-12-15 02:44:25', NULL),
(155, 'پریسا', 'نعمتی', '09123966037', NULL, NULL, '528519', 8, '1', 5, 48, NULL, NULL, NULL, '$2y$12$MR7kdUTKEvdvamR/H3TCq.2X5szBXVBbM9TT/jjRDvMf0Xhma1552', NULL, NULL, '2025-12-15 02:44:25', '2025-12-15 02:44:25', NULL),
(156, 'سارا', 'محمدی', '09109238930', NULL, NULL, '814174', 8, '1', 2, 49, NULL, NULL, NULL, '$2y$12$WvCDYYnoKq4KYe5fuW8oZuY0HBIJc/MMkWjEGi8dG2UUD1XhnoL5u', NULL, NULL, '2025-12-15 02:44:25', '2025-12-15 02:44:25', NULL),
(157, 'محمد علی', 'رستمیان', '09124319046', NULL, NULL, '800150', 8, '1', 2, 50, NULL, NULL, NULL, '$2y$12$KQpfQB/V1eXyJxNO1f9c9uBQ1T4ZZETSVLrEdif3MHr7LjtGkpiH.', NULL, NULL, '2025-12-15 02:44:25', '2025-12-15 02:44:25', NULL),
(158, 'فاطمه', 'عبدی', '09129563202', NULL, NULL, '629506', 8, '1', 10, 51, NULL, NULL, NULL, '$2y$12$c7O3LkXh.xJ.2Z6S7n6hreS6IFRKPSPnH3rAXPVomV0RbDqHeM0P2', NULL, NULL, '2025-12-15 02:44:26', '2025-12-15 02:44:26', NULL),
(159, 'پویا', 'مولوی', '09101234789', NULL, NULL, '328226', 8, '1', 10, 52, NULL, NULL, NULL, '$2y$12$wEWMxB1MJzFPYVyoPjZraOMEaUPhswZxdhOQ/hpA3RLlG2d2cFkY2', NULL, NULL, '2025-12-15 02:44:26', '2025-12-15 02:44:26', NULL),
(160, 'افشین', 'درخشان', '09121978723', NULL, NULL, '793227', 8, '1', 10, 53, NULL, NULL, NULL, '$2y$12$nkc/9Lpc2K513DGdddyt8.7wi4fV/s6wbbYyJZlF8KjcEccUpFhXO', NULL, NULL, '2025-12-15 02:44:26', '2025-12-15 02:44:26', NULL),
(161, 'منصوره', 'پیرگزی', '09376731869', NULL, NULL, '113731', 8, '1', 8, 54, NULL, NULL, NULL, '$2y$12$a.au4FTUQ05onk5bJrR54OIHmhx9mKUA.zxw3xdxRI/SMdMM/afZG', NULL, NULL, '2025-12-15 02:44:26', '2025-12-15 02:44:26', NULL),
(162, 'مسعود', 'وحیدنیا', '09128477748', NULL, NULL, '597929', 8, '1', 7, 55, NULL, NULL, NULL, '$2y$12$QgPjmsvgZ4FMVwMiQfQzROVkTo7LSRw0vlpAmENmxunbJWuD.jkHq', NULL, NULL, '2025-12-15 02:44:26', '2025-12-15 02:44:26', NULL),
(163, 'کژال', 'هنرپرور', '09193118113', NULL, NULL, '322578', 8, '1', 7, 56, NULL, NULL, NULL, '$2y$12$zyt8bN42BuddvubPzHXIv.qSQkKNqg0a2.xOOaABm4t9gnd99MDki', NULL, NULL, '2025-12-15 02:44:27', '2025-12-15 02:44:27', NULL),
(164, 'فاطمه', 'آقاجانی', '09121889893', NULL, NULL, '670747', 8, '1', 18, 57, NULL, NULL, NULL, '$2y$12$WXpR9xOsxexEvN5VvZ8ucO7Gi15Ug7M.Cio5vpGDqaEPSlOZ3pro2', NULL, NULL, '2025-12-15 02:44:27', '2025-12-15 02:44:27', NULL),
(165, 'عرفان', 'شاکرین', '09122593886', NULL, NULL, '765380', 8, '1', 4, 58, NULL, NULL, NULL, '$2y$12$RFyBxhyb5HKmjCJVwPYoF.VD5B0QKOyvEgN39v9s.hWFZ.p3gqCHC', NULL, NULL, '2025-12-15 02:44:27', '2025-12-15 02:44:27', NULL),
(166, 'رحمان', 'نوذری', '09376369964', NULL, NULL, '240763', 8, '1', 15, 59, NULL, NULL, NULL, '$2y$12$a/vf6MKP1rs797Gy5gVIhuofPtOp5rgWYjHMs7FaincGBvgeHYL1G', NULL, NULL, '2025-12-15 02:44:27', '2025-12-15 02:44:27', NULL),
(167, 'حمید', 'زندی', '09125096135', NULL, NULL, '651710', 8, '1', 15, 60, NULL, NULL, NULL, '$2y$12$MGUfALSz1JP441mKVwZ8GuRjNNMbwaPbnbHM4F0rY9sktufCPC4iC', NULL, NULL, '2025-12-15 02:44:27', '2025-12-15 02:44:27', NULL),
(168, 'منصور', 'ستاری', '09359786747', NULL, NULL, '858072', 8, '1', 12, 61, NULL, NULL, NULL, '$2y$12$SnQ75fbNQzZNZ5G8dBB/6.cWSnBbWrjU.KJdTSPtcvEH1pDV8udYi', NULL, NULL, '2025-12-15 02:44:28', '2025-12-15 02:44:28', NULL),
(169, 'امید', 'موحد نژاد', '09128078195', NULL, NULL, '881121', 8, '1', 12, 62, NULL, NULL, NULL, '$2y$12$XglewS0nl3KkGnhruxQvn./3Wcjj/cWkUHlcSB4/pmLN1xHEBPzf2', NULL, NULL, '2025-12-15 02:44:28', '2025-12-15 02:44:28', NULL),
(170, 'نرگس', 'نصری', '09214598009', NULL, NULL, '181731', 8, '1', 13, 63, NULL, NULL, NULL, '$2y$12$Ux3/4j8NE8dyOXZxyk5VbuKFdtLUIQcs3rJg8oCjmwQ7xSSfTLaSi', NULL, NULL, '2025-12-15 02:44:28', '2025-12-15 02:44:28', NULL),
(171, 'فواد', 'عسجدی', '09354769402', NULL, NULL, '210575', 8, '1', 13, 64, NULL, NULL, NULL, '$2y$12$QHenizER3dvogD3B9mkCdubRAuDYk7c8v4cjgBqNQgo7CmiZwG/9a', NULL, NULL, '2025-12-15 02:44:28', '2025-12-15 02:44:28', NULL),
(172, 'امید', 'جارودی', '09121180732', NULL, NULL, '769001', 8, '1', 14, 65, NULL, NULL, NULL, '$2y$12$vFZZwG3TNkdIAagHM9K/we25JsGGcxZ9OUqSXfApcUQlqeCrY4l1y', NULL, NULL, '2025-12-15 02:44:28', '2025-12-15 02:44:28', NULL),
(173, 'احسان', 'حامی', '9128198470', NULL, NULL, '811017', 8, '1', 6, 66, NULL, NULL, NULL, '$2y$12$5L2qzZzjzEedFixT5TR3sOqPE5cb0QPwYD8GKYwdjXcdBe1LVENZW', NULL, NULL, '2025-12-15 02:44:29', '2025-12-15 02:44:29', NULL),
(174, 'سمانه', 'سده زاده', '09120656367', NULL, NULL, '558925', 8, '1', 17, 67, NULL, NULL, NULL, '$2y$12$2nOSFxfpgdIaRA3/WoJvxOimpEVB13MUpa6kIUylCpPsIRZM4Dj5m', NULL, NULL, '2025-12-15 02:44:29', '2025-12-15 02:44:29', NULL),
(175, 'نیلوفر', 'فتاحی', '09120466122', NULL, NULL, '515785', 8, '1', 17, 68, NULL, NULL, NULL, '$2y$12$ajzvggi15qSWBNkfttR0VejqqzIQXYOE2429FvlXqK76oHv21AlAa', NULL, NULL, '2025-12-15 02:44:29', '2025-12-15 02:44:29', NULL),
(176, 'اورانوس ', 'امین', '09387295848', NULL, NULL, '819529', 8, '1', 25, 69, NULL, NULL, NULL, '$2y$12$TVnc9dOGGWLXJSHMbjomwOP/mDyIs2js6XrewWmGMyHa39/boYW/.', NULL, NULL, '2025-12-15 02:44:29', '2025-12-15 02:44:29', NULL),
(177, 'بهنام', 'حیدری', '09038460627', NULL, NULL, '602530', 8, '1', 9, 70, NULL, NULL, NULL, '$2y$12$ulEnTOgPfSnxE2uhj/jGCuIFjjGvlafsQ5bGrQ0qXW0dJMmVHAare', NULL, NULL, '2025-12-15 02:44:29', '2025-12-15 02:44:29', NULL),
(178, 'مینا ', 'نعمتی', '09127095406', NULL, NULL, '526935', 8, '1', 9, 71, NULL, NULL, NULL, '$2y$12$1.kIwWPB0VHNJ9jJw3E90u3tQ8sBbQPSXN9Op9T7LCHXONNykAxlu', NULL, NULL, '2025-12-15 02:44:30', '2025-12-15 02:44:30', NULL),
(179, 'سحر', 'مکی', '09124223242', NULL, NULL, '359920', 8, '1', 3, 72, NULL, NULL, NULL, '$2y$12$yp7uz7QG8o75Vf7wB7cePe8ZP0d5qXqvCw2h4rFsuVYjE1dtrv5j2', NULL, NULL, '2025-12-15 02:44:30', '2025-12-15 02:44:30', NULL),
(180, 'فریناز', 'حقیقی', '09370068263', '721003', '2026-04-22 04:15:17', '113618', 8, '1', 20, 41, NULL, NULL, NULL, '$2y$12$mN8bsZP1pjh1fajkcNkt6e7R6sOAtBW/l0DfmS64iM4HGcDghNNS6', 'Ji*t7#WRc#', NULL, '2025-12-15 02:46:48', '2026-05-09 04:43:38', NULL),
(181, 'فرتاش', 'آذرسینا', '09355870998', NULL, NULL, '284566', 8, '1', 20, 34, NULL, NULL, NULL, '$2y$12$oVE3YYE781U4.SLQ1khaJeWwbVmQ7DBEb5vdZJ4dAQT8VdUFB4kEy', 'A@2dfoNyj6', NULL, '2025-12-15 02:48:11', '2026-04-26 04:27:27', NULL),
(183, 'آرمين', 'زندي', '09233296981', '930621', '2026-04-22 05:49:26', '309553-', 8, '1', 20, 32, NULL, 'ar.zandi@solico-group.ir', NULL, '$2y$12$bA6Lp0EJa1ZQgRnZKsAXzuYbGYO3vbpe/RtxwLHjZNXlduYPCyImS', 'Kct(#^EOPT', NULL, '2025-12-15 02:44:22', '2026-04-22 07:47:31', NULL),
(184, 'مهسا', 'امامی', '09337763263', NULL, NULL, '5465464', 8, '1', NULL, 39, NULL, 'm.emamighamsari@solico-group.com', NULL, '$2y$12$/F8XtByaZ0TfWQ/TwoDfaOkSW5aPXiGLh8Gc1Q8a0cGe1AIDmFVrC', '@*MKH(^XiM', NULL, '2026-04-27 06:05:55', '2026-04-27 06:07:16', NULL),
(185, 'بهاره', 'اسلامی', '09373942679', NULL, NULL, '145162', 8, '1', NULL, 78, NULL, 'b.eslami@solico-group.ir', NULL, '$2y$12$RYPpdTHNnN1mx3y7iE.tneSy4EZRxfzInT620bxI8eM6l3gjsLR4u', '!p1R5*Tqdu', NULL, '2026-04-27 06:52:01', '2026-04-27 06:53:48', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `campaigns_agancy_id_foreign` FOREIGN KEY (`agancy_id`) REFERENCES `campaign_agancies` (`id`),
  ADD CONSTRAINT `campaigns_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `campaign_brands` (`id`),
  ADD CONSTRAINT `campaigns_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `campaign_influencer`
--
ALTER TABLE `campaign_influencer`
  ADD CONSTRAINT `campaign_influencer_campaign_id_foreign` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`id`),
  ADD CONSTRAINT `campaign_influencer_influencer_id_foreign` FOREIGN KEY (`influencer_id`) REFERENCES `influencers` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `department_brand`
--
ALTER TABLE `department_brand`
  ADD CONSTRAINT `department_brand_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `department_brand_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `influencer_dates`
--
ALTER TABLE `influencer_dates`
  ADD CONSTRAINT `influencer_dates_influencer_id_foreign` FOREIGN KEY (`influencer_id`) REFERENCES `influencers` (`id`),
  ADD CONSTRAINT `influencer_dates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `influencer_infos`
--
ALTER TABLE `influencer_infos`
  ADD CONSTRAINT `influencer_infos_influencer_id_foreign` FOREIGN KEY (`influencer_id`) REFERENCES `influencers` (`id`),
  ADD CONSTRAINT `influencer_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `influencer_posts`
--
ALTER TABLE `influencer_posts`
  ADD CONSTRAINT `influencer_posts_influencer_id_foreign` FOREIGN KEY (`influencer_id`) REFERENCES `influencers` (`id`),
  ADD CONSTRAINT `influencer_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `influencer_prices`
--
ALTER TABLE `influencer_prices`
  ADD CONSTRAINT `influencer_prices_influencer_id_foreign` FOREIGN KEY (`influencer_id`) REFERENCES `influencers` (`id`),
  ADD CONSTRAINT `influencer_prices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `influencer_stories`
--
ALTER TABLE `influencer_stories`
  ADD CONSTRAINT `influencer_stories_influencer_id_foreign` FOREIGN KEY (`influencer_id`) REFERENCES `influencers` (`id`),
  ADD CONSTRAINT `influencer_stories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_model_id_model_type_index` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_approving_manager_foreign` FOREIGN KEY (`approving_manager`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `projects_implementeunit_id_foreign` FOREIGN KEY (`implementeunit_id`) REFERENCES `implemente_units` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_approves`
--
ALTER TABLE `project_approves`
  ADD CONSTRAINT `project_approves_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_approves_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_manager_admins`
--
ALTER TABLE `project_manager_admins`
  ADD CONSTRAINT `project_manager_admins_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_manager_admins_project_manager_id_foreign` FOREIGN KEY (`project_manager_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_users`
--
ALTER TABLE `project_users`
  ADD CONSTRAINT `project_users_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `project_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tasks_implementeunit_id_foreign` FOREIGN KEY (`implementeunit_id`) REFERENCES `implemente_units` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tasks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `task_allocations`
--
ALTER TABLE `task_allocations`
  ADD CONSTRAINT `task_allocations_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `task_allocations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `task_checklists`
--
ALTER TABLE `task_checklists`
  ADD CONSTRAINT `task_checklists_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `task_users`
--
ALTER TABLE `task_users`
  ADD CONSTRAINT `task_users_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `task_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `task_user_worklogs`
--
ALTER TABLE `task_user_worklogs`
  ADD CONSTRAINT `task_user_worklogs_task_user_id_foreign` FOREIGN KEY (`task_user_id`) REFERENCES `task_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `implemente_units` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  ADD CONSTRAINT `ticket_attachments_ticket_message_id_foreign` FOREIGN KEY (`ticket_message_id`) REFERENCES `ticket_messages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ticket_messages`
--
ALTER TABLE `ticket_messages`
  ADD CONSTRAINT `ticket_messages_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
