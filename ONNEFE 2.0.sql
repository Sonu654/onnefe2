-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 09:11 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onnefe2`
--
CREATE DATABASE IF NOT EXISTS `onnefe2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `onnefe2`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL DEFAULT '0',
  `category_name` varchar(25) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `isActive`) VALUES
(1, 'Sport', 1),
(2, 'Politics', 1),
(3, 'IT', 1),
(4, 'Business', 1),
(5, 'Social', 1),
(6, 'Education', 1),
(7, 'Elections', 1),
(8, 'Weather', 1),
(9, 'Entertainment', 1),
(10, 'Science', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE IF NOT EXISTS `login_info` (
  `login_id` varchar(50) NOT NULL DEFAULT '',
  `login_password` varchar(200) NOT NULL,
  `signup_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isActive` tinyint(1) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`login_id`, `login_password`, `signup_time`, `isActive`, `u_id`) VALUES
('dheerajsanwal80@gmail.com', 'a152e841783914146e4bcd4f39100686', '2016-06-16 16:45:55', 1, 0),
('mayankpandey1999mp86@gmail.com', 'c83b2d5bb1fb4d93d9d064593ed6eea2', '2016-06-16 18:24:36', 1, 0),
('sanwal.suraj12@gmail.com', '08650529f4135bb74ef03f13f58c62e9', '2016-06-16 18:24:45', 1, 1),
('saxenaashi28031997@gmail.com', 'a152e841783914146e4bcd4f39100686', '2016-06-16 16:39:08', 1, 0),
('soniyabisht2222@gmail.com', '0192023a7bbd73250516f069df18b500', '2016-06-16 16:50:23', 1, 0),
('sonusanwal65@gmail.com', '0192023a7bbd73250516f069df18b500', '2016-06-16 16:25:22', 1, 2),
('ssanwal172@gmail.com', 'a152e841783914146e4bcd4f39100686', '2016-06-16 18:31:07', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

CREATE TABLE IF NOT EXISTS `login_log` (
  `login_id` char(50) DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT NULL,
  `logout_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_agent` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_log`
--

INSERT INTO `login_log` (`login_id`, `login_time`, `logout_time`, `user_agent`) VALUES
('sanwal.suraj12@gmail.com', '2016-04-18 02:11:36', '2016-04-18 02:11:36', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sonusanwal65@gmail.com', '2016-04-18 02:14:33', '2016-04-18 02:14:33', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sanwal.suraj12@gmail.com', '2016-04-18 02:16:32', '2016-04-18 02:16:32', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sanwal.suraj12@gmail.com', '2016-04-18 02:24:27', '2016-04-18 02:24:27', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sanwal.suraj12@gmail.com', '2016-04-18 02:28:56', '2016-04-18 02:28:56', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sonusanwal65@gmail.com', '2016-04-18 02:30:07', '2016-04-18 02:30:07', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sanwal.suraj12@gmail.com', '2016-04-18 02:36:14', '2016-04-18 02:36:56', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sanwal.suraj12@gmail.com', '2016-04-18 17:46:36', '2016-04-18 17:49:04', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sanwal.suraj12@gmail.com', '2016-04-18 18:15:52', '2016-04-18 19:15:52', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sanwal.suraj12@gmail.com', '2016-04-20 17:26:21', '2016-04-20 18:26:21', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sanwal.suraj12@gmail.com', '2016-04-20 17:31:40', '2016-04-20 18:31:40', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sanwal.suraj12@gmail.com', '2016-04-20 18:40:48', '2016-04-20 19:40:48', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sanwal.suraj12@gmail.com', '2016-04-21 08:36:37', '2016-04-21 08:38:37', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safa'),
('sonusanwal65@gmail.com', '2016-04-29 05:35:34', '2016-04-29 06:35:34', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-04-29 22:30:47', '2016-04-29 23:30:47', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-04-30 14:45:51', '2016-04-30 15:45:51', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-04-30 16:45:00', '2016-04-30 17:45:00', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-04-30 21:58:50', '2016-04-30 22:58:50', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-01 03:41:01', '2016-05-01 04:41:01', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-01 05:58:15', '2016-05-01 06:58:15', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-01 19:37:00', '2016-05-01 20:37:00', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-02 06:16:12', '2016-05-02 07:16:12', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-02 20:49:20', '2016-05-02 21:49:20', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-02 22:12:31', '2016-05-02 23:12:31', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-03 06:00:33', '2016-05-03 07:00:33', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-03 21:12:29', '2016-05-03 22:12:29', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sonusanwal65@gmail.com', '2016-05-03 21:56:33', '2016-05-03 22:00:17', 'Mozilla/5.0 (Linux; Android 4.4.2; ASUS_T00J Build/KVT49L) AppleWebKit/537.36 (KHTML, like Gecko) Ch'),
('sanwal.suraj12@gmail.com', '2016-05-03 22:01:00', '2016-05-03 23:01:00', 'Mozilla/5.0 (Linux; Android 4.4.2; ASUS_T00J Build/KVT49L) AppleWebKit/537.36 (KHTML, like Gecko) Ch'),
('sanwal.suraj12@gmail.com', '2016-05-03 22:23:46', '2016-05-03 23:23:46', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-04 05:52:59', '2016-05-04 06:52:59', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-04 13:46:38', '2016-05-04 14:46:38', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sonusanwal65@gmail.com', '2016-05-04 21:45:30', '2017-05-04 21:45:30', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sonusanwal65@gmail.com', '2016-05-12 07:21:38', '2016-05-12 09:35:47', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safa'),
('mayankpandey1999mp86@gmail.com', '2016-05-12 13:47:32', '2016-05-12 13:48:54', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safa'),
('sonusanwal65@gmail.com', '2016-05-13 20:48:13', '2016-05-13 21:48:13', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sonusanwal65@gmail.com', '2016-05-17 05:37:03', '2016-05-17 06:37:03', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sonusanwal65@gmail.com', '2016-05-17 23:23:16', '2016-05-26 07:14:41', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-26 07:15:25', '2016-05-26 08:15:25', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-27 06:28:38', '2016-05-27 07:28:38', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sanwal.suraj12@gmail.com', '2016-05-29 03:22:47', '2016-05-29 03:26:04', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sonusanwal65@gmail.com', '2016-06-01 18:30:03', '2016-06-01 18:33:16', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safar'),
('sonusanwal65@gmail.com', '2016-06-10 09:53:42', '2016-06-10 10:53:42', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-10 11:25:44', '2016-06-10 11:26:05', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-10 12:27:59', '2016-06-11 08:50:33', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-11 08:50:46', '2016-06-11 08:50:49', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-11 08:53:09', '2016-06-11 09:53:09', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-13 06:00:20', '2016-06-13 06:00:37', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-13 06:00:45', '2016-06-13 07:00:45', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-14 13:52:33', '2016-06-14 14:52:33', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-14 16:20:58', '2016-06-16 10:24:47', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 10:24:53', '2016-06-16 10:47:16', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 10:50:18', '2016-06-16 10:50:23', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 10:50:30', '2016-06-16 10:50:34', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 10:51:23', '2016-06-16 10:51:36', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 10:52:06', '2016-06-16 10:52:19', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 10:54:02', '2016-06-16 11:34:56', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 11:47:04', '2016-06-16 11:47:23', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 11:56:46', '2016-06-16 11:57:07', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-16 12:08:51', '2016-06-16 12:09:09', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-16 12:45:34', '2016-06-16 12:45:48', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 12:45:54', '2016-06-16 13:45:54', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-16 16:24:43', '2016-06-16 16:24:48', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 16:24:58', '2016-06-16 17:24:57', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-16 16:25:32', '2016-06-16 17:25:32', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 17:24:52', '2016-06-16 18:20:09', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-16 18:20:26', '2016-06-16 18:27:12', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 18:27:19', '2016-06-16 19:27:19', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 18:27:45', '2016-06-16 19:27:45', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 18:28:01', '2016-06-16 18:28:04', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 18:29:34', '2016-06-16 18:29:38', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-16 18:29:48', '2016-06-16 18:29:53', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sonusanwal65@gmail.com', '2016-06-16 18:32:02', '2016-06-16 19:03:23', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa'),
('sanwal.suraj12@gmail.com', '2016-06-16 19:04:41', '2016-06-16 20:04:41', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safa');

-- --------------------------------------------------------

--
-- Table structure for table `natinat`
--

CREATE TABLE IF NOT EXISTS `natinat` (
  `natInt_id` int(11) NOT NULL DEFAULT '0',
  `natInt_Name` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `natinat`
--

INSERT INTO `natinat` (`natInt_id`, `natInt_Name`) VALUES
(1, 'International'),
(0, 'National');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `nat_int` int(11) DEFAULT NULL,
  `news_heading` varchar(75) DEFAULT NULL,
  `news_content` varchar(500) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `ack_id` varchar(5) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `category_id`, `nat_int`, `news_heading`, `news_content`, `time`, `ack_id`, `isActive`) VALUES
(1, 3, 1, 'New iPad Pro 9.7 reveals about iPhone 7', 'Apple''slatest iPad, 9.7-inch iPad Pro,has been receiving rave reviews forits display.After recent tests, display specialist website DisplauMate has termed the dispaly on iPad Pro 9.7 as "truly impressive top performing mobile LCD display that we have ever tested, and it breaks many display performence records."', '2016-04-17 17:30:23', '1', 1),
(2, 3, 1, 'Facebook news feed may undergo major revamp', 'Social media website Facebook may soon add a news section to its Android and iOS smartphone apps that may look like Facebook Paper- A standalone mobile app created only for iOs.\r\nFacebook confirmed to Mashable tech website taht it is testing the new, sectioned news feed, in addition to the current format, though it is unclear if the feature would ever get an official lunch.', '2016-04-17 17:35:29', '1', 1),
(3, 1, 1, 'Australia thrash India 4-0 to win Sultan Azlan Shah Cup', 'Indian hockeyTeam failed to change their fortunes against Australia as they suffered 0-4 in the final of the Sultan Azlan Shah Cup hockey tournament on Saturday.', '2016-04-17 17:40:13', '1', 1),
(4, 2, 0, 'Vijay Goel will be fined if he violates odd-even scheme: Gopal Rai', 'NEW DELHI: Delhi Transport Minister Gopal Rai today said if BJP leader and Rajya Sabhaa MP Vijay Goel breaks the odd-even car rationing rule he will be treated like any other offender and penalised for the violation.', '2016-04-17 17:43:07', '2', 1),
(5, 1, 1, 'Manish Pandey Want to confirm his seat in TEAM.', 'after the good start at Harare Cricket Stadium last year Manish Pandey this year again want to same participation and trying to confirm his seat in team India. previous series was played under Rahane Captaincy and Manish scored 100 and 74.', '2016-06-10 12:36:38', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_ack`
--

CREATE TABLE IF NOT EXISTS `news_ack` (
  `ack_id` varchar(5) NOT NULL DEFAULT '',
  `ack_location` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_ack`
--

INSERT INTO `news_ack` (`ack_id`, `ack_location`) VALUES
('1', 'Times of India'),
('2', 'economictimes.com'),
('3', 'hret');

-- --------------------------------------------------------

--
-- Table structure for table `newsgroup`
--

CREATE TABLE IF NOT EXISTS `newsgroup` (
  `ng_id` varchar(5) NOT NULL DEFAULT '',
  `ng_title` varchar(200) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `i_time` timestamp NULL DEFAULT NULL,
  `l_time` timestamp NULL DEFAULT NULL,
  `login_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsgroup`
--

INSERT INTO `newsgroup` (`ng_id`, `ng_title`, `isActive`, `i_time`, `l_time`, `login_id`) VALUES
('1', 'NEW DELHI: Air quality in Delhi improved and was logged between moderate and poor levels as fine respirable pollutants tapered off considerably across the city on the second day of the odd-even car ra', 0, '2016-04-23 18:30:00', '2016-04-30 18:29:59', 'sonusanwal65@gmail.com'),
('2', 'Global warming:increasing pollution in day to day life increasing the decay in health and livelihood.how it can be decreased.', 0, '2016-04-30 18:30:00', '2016-05-07 18:29:59', 'sonusanwal65@gmail.com'),
('3', 'Killing of Mahatma Gandhi by Nathuram Godse,was that a right decision?', 0, '2016-05-07 18:30:00', '2016-05-15 18:29:59', 'sonusanwal65@gmail.com'),
('4', 'was the president rule in uttarakhand right decision of NMO cabinate..?', 0, '2016-05-15 18:30:00', '2016-05-22 18:29:59', 'sonusanwal65@gmail.com'),
('5', 'is the Virat is ready for hold complete captaincy of Team India? ', 0, '2016-05-22 18:30:00', '2016-05-29 18:29:59', 'sonusanwal65@gmail.com'),
('6', 'was the performance of RCB is not enough for win IPL 2016?', 0, '2016-06-29 18:30:00', '2016-07-06 18:29:59', 'sonusanwal65@gmail.com'),
('7', 'Was the MODIâ€™s foreign tour good for development of India?', 1, '2016-06-05 18:30:00', '2016-06-12 18:29:59', 'sonusanwal65@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ng_comment`
--

CREATE TABLE IF NOT EXISTS `ng_comment` (
  `c_id` int(11) NOT NULL,
  `ng_id` varchar(5) NOT NULL,
  `c_content` varchar(400) DEFAULT NULL,
  `c_time` timestamp NULL DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT '1',
  `login_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ng_comment`
--

INSERT INTO `ng_comment` (`c_id`, `ng_id`, `c_content`, `c_time`, `isActive`, `login_id`) VALUES
(1, '3', 'That was not a good decision...!!!', '2016-05-11 18:30:00', 1, 'sanwal.suraj12@gmail.com'),
(2, '3', 'bad', '2016-05-11 23:44:24', 1, 'sonusanwal65@gmail.com'),
(3, '5', 'i think he is rising one now he can be....', '2016-05-25 04:35:30', 1, 'sonusanwal65@gmail.com'),
(4, '6', 'that was good but in last match the betting of RCB is not good..', '2016-06-01 13:36:47', 1, 'sonusanwal65@gmail.com'),
(5, '6', 'yes good', '2016-06-01 13:36:24', 1, 'sonusanwal65@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE IF NOT EXISTS `user_address` (
  `login_id` varchar(50) NOT NULL DEFAULT '',
  `country` varchar(25) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `local_address` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`login_id`, `country`, `state`, `city`, `local_address`) VALUES
('dheerajsanwal80@gmail.com', 'India', 'uttarakhand', 'haldwani', 'Indera Vihar Bithoriya no 1'),
('sanwal.suraj12@gmail.com', 'india', 'Uttarakhand', 'Haldwani', 'Indra Vihar Gair Vaishali'),
('saxenaashi28031997@gmail.com', 'India', 'uttarakhand', 'haldwani', 'Amrapali'),
('soniyabisht2222@gmail.com', 'India', 'uttarakhand', 'haldwani', 'Amrapali'),
('sonusanwal65@gmail.com', 'india', 'Uttarakhand', 'Haldwani', 'Indra Vihar'),
('ssanwal172@gmail.com', 'India', 'uttarakhand', 'haldwani', 'Indera Vihar Bithoriya no 1');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `login_id` varchar(50) NOT NULL DEFAULT '',
  `user_first_name` char(15) NOT NULL,
  `user_mid_name` char(15) DEFAULT NULL,
  `user_last_name` char(15) DEFAULT NULL,
  `user_gender` char(6) NOT NULL,
  `user_contact` char(13) DEFAULT NULL,
  `rating_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`login_id`, `user_first_name`, `user_mid_name`, `user_last_name`, `user_gender`, `user_contact`, `rating_id`) VALUES
('dheerajsanwal80@gmail.com', 'dheeraj', '', 'sanwal', 'male', '7351593132', 0),
('mayankpandey1999mp86@gmail.com', 'Mayank', '', 'Pandey', 'male', '9480726550', 5),
('sanwal.suraj12@gmail.com', 'Suraj', '', 'Sanwal', 'male', '9760843156', 0),
('saxenaashi28031997@gmail.com', 'Akanksha', '', 'Saxena', 'female', '8192800990', 0),
('soniyabisht2222@gmail.com', 'Soniya', '', 'Bisht', 'female', '8439353034', 0),
('sonusanwal65@gmail.com', 'Suraj', '', 'Sanwal', 'Maleuu', '8192800989', 5),
('ssanwal172@gmail.com', 'Suraj', '', 'Sanwal', 'male', '8192800988', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_interest`
--

CREATE TABLE IF NOT EXISTS `user_interest` (
  `login_id` varchar(50) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_interest`
--

INSERT INTO `user_interest` (`login_id`, `category_id`, `isActive`) VALUES
('sanwal.suraj12@gmail.com', 1, 1),
('sanwal.suraj12@gmail.com', 2, 1),
('sonusanwal65@gmail.com', 2, 1),
('sonusanwal65@gmail.com', 3, 0),
('sanwal.suraj12@gmail.com', 3, 1),
('sanwal.suraj12@gmail.com', 4, 1),
('sanwal.suraj12@gmail.com', 5, 1),
('sanwal.suraj12@gmail.com', 6, 1),
('sanwal.suraj12@gmail.com', 7, 1),
('sanwal.suraj12@gmail.com', 8, 1),
('sanwal.suraj12@gmail.com', 9, 1),
('sanwal.suraj12@gmail.com', 10, 1),
('sonusanwal65@gmail.com', 5, 1),
('sonusanwal65@gmail.com', 6, 1),
('saxenaashi28031997@gmail.com', 2, 1),
('saxenaashi28031997@gmail.com', 5, 1),
('saxenaashi28031997@gmail.com', 6, 1),
('saxenaashi28031997@gmail.com', 7, 1),
('dheerajsanwal80@gmail.com', 4, 1),
('dheerajsanwal80@gmail.com', 5, 1),
('dheerajsanwal80@gmail.com', 8, 1),
('dheerajsanwal80@gmail.com', 9, 1),
('soniyabisht2222@gmail.com', 2, 1),
('soniyabisht2222@gmail.com', 4, 1),
('soniyabisht2222@gmail.com', 5, 1),
('soniyabisht2222@gmail.com', 8, 1),
('soniyabisht2222@gmail.com', 9, 1),
('ssanwal172@gmail.com', 2, 1),
('ssanwal172@gmail.com', 3, 1),
('ssanwal172@gmail.com', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE IF NOT EXISTS `user_rating` (
  `rating_id` int(11) NOT NULL DEFAULT '0',
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rating`
--

INSERT INTO `user_rating` (`rating_id`, `rate`) VALUES
(0, 0),
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `u_id` int(11) NOT NULL DEFAULT '0',
  `u_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`u_id`, `u_type`) VALUES
(1, 'Admin'),
(2, 'superAdmin'),
(0, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `fk_u_id_login_info` (`u_id`);

--
-- Indexes for table `login_log`
--
ALTER TABLE `login_log`
  ADD KEY `fk_login_log_id` (`login_id`);

--
-- Indexes for table `natinat`
--
ALTER TABLE `natinat`
  ADD PRIMARY KEY (`natInt_id`),
  ADD UNIQUE KEY `natInt_Name` (`natInt_Name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD UNIQUE KEY `news_heading` (`news_heading`),
  ADD KEY `fk_news_category` (`category_id`),
  ADD KEY `fk_news_ack` (`ack_id`),
  ADD KEY `nat_int` (`nat_int`);

--
-- Indexes for table `news_ack`
--
ALTER TABLE `news_ack`
  ADD PRIMARY KEY (`ack_id`);

--
-- Indexes for table `newsgroup`
--
ALTER TABLE `newsgroup`
  ADD PRIMARY KEY (`ng_id`),
  ADD UNIQUE KEY `ng_title` (`ng_title`),
  ADD KEY `fk_newsgroup_login_id` (`login_id`);

--
-- Indexes for table `ng_comment`
--
ALTER TABLE `ng_comment`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `fk_ng_commnent_login_id` (`login_id`),
  ADD KEY `ng_id` (`ng_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `user_contact` (`user_contact`),
  ADD KEY `fk_user_rating` (`rating_id`);

--
-- Indexes for table `user_interest`
--
ALTER TABLE `user_interest`
  ADD KEY `fk_user_interest_logid` (`login_id`),
  ADD KEY `fk_user_interest_catid` (`category_id`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD UNIQUE KEY `rate` (`rate`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_type` (`u_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_info`
--
ALTER TABLE `login_info`
  ADD CONSTRAINT `fk_u_id_login_info` FOREIGN KEY (`u_id`) REFERENCES `user_type` (`u_id`);

--
-- Constraints for table `login_log`
--
ALTER TABLE `login_log`
  ADD CONSTRAINT `fk_login_log_id` FOREIGN KEY (`login_id`) REFERENCES `login_info` (`login_id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_natInt` FOREIGN KEY (`nat_int`) REFERENCES `natinat` (`natInt_id`),
  ADD CONSTRAINT `fk_news_ack` FOREIGN KEY (`ack_id`) REFERENCES `news_ack` (`ack_id`),
  ADD CONSTRAINT `fk_news_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `newsgroup`
--
ALTER TABLE `newsgroup`
  ADD CONSTRAINT `fk_newsgroup_login_id` FOREIGN KEY (`login_id`) REFERENCES `login_info` (`login_id`);

--
-- Constraints for table `ng_comment`
--
ALTER TABLE `ng_comment`
  ADD CONSTRAINT `fk_ng_commnent_login_id` FOREIGN KEY (`login_id`) REFERENCES `login_info` (`login_id`),
  ADD CONSTRAINT `fk_ng_id_cmt` FOREIGN KEY (`ng_id`) REFERENCES `newsgroup` (`ng_id`);

--
-- Constraints for table `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `fk_address_login_id` FOREIGN KEY (`login_id`) REFERENCES `login_info` (`login_id`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `fk_info_login_id` FOREIGN KEY (`login_id`) REFERENCES `login_info` (`login_id`),
  ADD CONSTRAINT `fk_user_rating` FOREIGN KEY (`rating_id`) REFERENCES `user_rating` (`rating_id`);

--
-- Constraints for table `user_interest`
--
ALTER TABLE `user_interest`
  ADD CONSTRAINT `fk_user_interest_catid` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `fk_user_interest_logid` FOREIGN KEY (`login_id`) REFERENCES `login_info` (`login_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
