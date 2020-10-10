-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 04:29 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipms.karuna`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_id` int(100) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `id_type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_modified` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_id`, `user_id`, `id_type`, `name`, `class`, `action`, `date_modified`) VALUES
(1, NULL, '', 'seiya', 'Visitor', 'Delete', '07-02-2020 07:47:32'),
(2, 1, 'user_id', 'TRYVI', 'Visitor', 'Add', '07-02-2020 07:57:24'),
(3, NULL, '', 'TRYVI', 'Visitor', 'Delete', '07-02-2020 08:02:27'),
(4, 18, 'user_id', 'Moordale', 'Manager', 'Add', '07-02-2020 08:03:42'),
(5, NULL, '', 'beatrice', 'Owner', 'Delete', '07-02-2020 08:12:51'),
(6, NULL, '', 'Manager', 'Manager', 'Delete', '14-02-2020 11:18:23'),
(7, 0, 'user_id', 'mansplain', 'Manager', 'Add', '14-02-2020 11:19:10'),
(8, 0, 'user_id', 'asdasds', 'Staff', 'Add', '14-02-2020 13:49:31'),
(9, NULL, '', 'An Example of a Google Bar Chart', 'Notification', 'Delete', '14-02-2020 14:14:12'),
(10, 15, 'user_id', 'whatthewhat', 'Manager', 'Update', '14-02-2020 14:14:43'),
(11, 15, 'user_id', 'whatthewhat', 'Manager', 'Update', '14-02-2020 14:16:14'),
(12, NULL, '', 'LogBook.pdf', 'Service Contract', 'Delete', '15-02-2020 09:01:45'),
(13, NULL, '', 'Tanoti System UI (V2).pdf', 'Service Contract', 'Delete', '17-02-2020 14:30:12'),
(14, NULL, '', 'New Doc 2020-01-03 09.21.57_1.pdf', 'Service Contract', 'Delete', '17-02-2020 14:30:16'),
(15, NULL, '', 'New Doc 2020-01-03 09.21.57_1 (1).pdf', 'Service Contract', 'Delete', '17-02-2020 14:34:53'),
(16, 0, 'user_id', 'IPMS UI Design (V4).pdf', 'Service Contract', 'Add', '17-02-2020 14:35:15'),
(17, 35, 'user_id', 'Tulips.jpg', 'Service Contract', 'Update', '17-02-2020 07:35:49'),
(18, 35, 'user_id', 'Lighthouse.jpg', 'Service Contract', 'Update', '17-02-2020 14:37:34'),
(19, 18, 'user_id', 'Manager', 'Manager', 'Add', '18-02-2020 14:06:33'),
(20, NULL, '', '', 'Handbook', 'Delete', '19-02-2020 12:01:28'),
(21, 18, 'user_id', 'Manager', 'Manager', 'Update', '20-02-2020 09:06:26'),
(22, NULL, '', 'Paraforce Sdn Bhd', 'Service Contract', 'Delete', '20-02-2020 09:50:57'),
(23, 5, 'user_id', '', 'Insurance', 'Update', '20-02-2020 10:19:47'),
(24, 52, 'user_id', '', 'Service Contract', 'Update', '20-02-2020 10:20:13'),
(25, 4, 'user_id', '', 'Agreement', 'Update', '20-02-2020 10:20:23'),
(26, 11, 'user_id', '', 'Handbook', 'Update', '20-02-2020 10:20:46'),
(27, 0, 'user_id', 'mansplain', 'Agreement', 'Add', '20-02-2020 15:38:12'),
(28, 0, 'user_id', 'Backwarp', 'Notification', 'Add', '20-02-2020 15:51:20'),
(29, NULL, '', 'mansplain', 'Agreement', 'Delete', '20-02-2020 16:14:10'),
(30, 0, 'user_id', 'R-test', 'Handbook', 'Add', '21-02-2020 08:21:31'),
(31, 0, 'user_id', '3', 'Notification', 'Add', '21-02-2020 11:09:58'),
(32, 0, 'user_id', 'test', 'Notification', 'Add', '21-02-2020 11:10:07'),
(33, 0, 'user_id', 'karuna', 'Notification', 'Add', '21-02-2020 11:10:22'),
(34, 0, 'user_id', 'Backwarp', 'Notification', 'Add', '21-02-2020 11:22:16'),
(35, NULL, '', 'test', 'Notification', 'Delete', '21-02-2020 11:22:30'),
(36, 0, 'user_id', 'WARP TO GEFFEN PLZ', 'Notification', 'Add', '21-02-2020 11:22:38'),
(37, 0, 'user_id', '2', 'Notification', 'Add', '21-02-2020 11:26:37'),
(38, 0, 'user_id', '4', 'Notification', 'Add', '21-02-2020 11:26:40'),
(39, 0, 'user_id', '12', 'Notification', 'Add', '21-02-2020 11:26:43'),
(40, NULL, '', '3', 'Notification', 'Delete', '21-02-2020 11:26:58'),
(41, NULL, '', '12', 'Notification', 'Delete', '21-02-2020 11:27:20'),
(42, NULL, '', '4', 'Notification', 'Delete', '21-02-2020 11:27:22'),
(43, NULL, '', '2', 'Notification', 'Delete', '21-02-2020 11:27:23'),
(44, 0, 'user_id', '12 ave streer', 'Notification', 'Add', '21-02-2020 11:27:36'),
(45, 0, 'user_id', '56 Monica', 'Notification', 'Add', '21-02-2020 11:27:46'),
(46, NULL, '', '56 Monica', 'Notification', 'Delete', '21-02-2020 11:28:43'),
(47, NULL, '', '12 ave streer', 'Notification', 'Delete', '21-02-2020 11:28:44'),
(48, NULL, '', 'WARP TO GEFFEN PLZ', 'Notification', 'Delete', '21-02-2020 11:28:45'),
(49, NULL, '', 'Backwarp', 'Notification', 'Delete', '21-02-2020 11:28:46'),
(50, NULL, '', 'karuna', 'Notification', 'Delete', '21-02-2020 11:28:48'),
(51, 14, 'user_id', 'seiya', 'Visitor Permission', 'Approved', '24-02-2020 16:47:48'),
(52, 2, 'user_id', 'damian', 'Facility', 'Book', '25-02-2020 08:36:40'),
(53, 2, 'user_id', 'tegra', 'Facility', 'Book', '25-02-2020 08:42:17'),
(54, 2, 'user_id', 'looogkee', 'Facility', 'Book', '25-02-2020 08:43:27'),
(55, 2, 'user_id', 'seiya', 'Facility', 'Book', '25-02-2020 08:43:58'),
(56, 2, 'user_id', 'seiya', 'Facility', 'Book', '25-02-2020 08:46:24'),
(57, 14, 'user_id', 'seiya', 'Visitor Permission', 'Approved', '25-02-2020 09:10:19'),
(58, 14, 'user_id', 'seiya', 'Visitor Permission', 'Approved', '25-02-2020 09:21:07'),
(59, 14, 'user_id', 'seiya', 'Visitor Permission', 'Rejected', '25-02-2020 09:21:21'),
(60, 1, 'user_id', '', 'Facility', 'Rejected', '25-02-2020 10:08:29'),
(61, 14, 'user_id', 'seiya', 'Visitor Permission', 'Rejected', '25-02-2020 10:08:54'),
(62, 0, 'user_id', 'Khoo Khien Sia', 'Visitor', 'Add', '27-02-2020 15:42:07'),
(63, 0, 'user_id', 'Kho Khien Sia', 'Visitor', 'Add', '27-02-2020 15:43:03'),
(64, 0, 'user_id', 'aasd', 'Visitor', 'Add', '27-02-2020 15:43:56'),
(65, 0, 'user_id', 'sdadasd', 'Visitor', 'Add', '27-02-2020 15:46:03'),
(66, 0, 'user_id', 'WARP TO GEFFEN PLZ', 'Monthly Term Services & PPM', 'Add', '28-02-2020 08:16:41'),
(67, 0, 'user_id', 'WARP TO GEFFEN PLZ', 'Monthly Term Services & PPM', 'Add', '28-02-2020 08:16:58'),
(68, 0, 'user_id', 'WARP TO GEFFEN PLZ', 'Monthly Term Services & PPM', 'Add', '28-02-2020 08:17:53'),
(69, 0, 'user_id', 'WARP TO GEFFEN PLZ', 'Monthly Term Services & PPM', 'Add', '28-02-2020 08:18:02'),
(70, 0, 'user_id', 'Backwarp', 'Monthly Term Services & PPM', 'Add', '28-02-2020 08:46:36'),
(71, 0, 'user_id', 'NO NEED WARP ANM', 'Monthly Term Services & PPM', 'Update', '28-02-2020 09:25:43'),
(72, 0, 'user_id', 'NO NEED WARP ANM', 'Monthly Term Services & PPM', 'Update', '28-02-2020 09:26:36'),
(73, 0, 'user_id', 'NO NEED WARP ANM', 'Monthly Term Services & PPM', 'Update', '28-02-2020 09:26:50'),
(74, 0, 'user_id', 'Backwarp', 'Monthly Term Services & PPM', 'Add', '28-02-2020 09:48:33'),
(75, 0, 'user_id', 'Warp to Prontera ASAP', 'Monthly Term Services & PPM', 'Add', '28-02-2020 16:12:04'),
(76, 15, 'user_id', 'sdadasd', 'Visitor Permission', 'Rejected', '28-02-2020 16:51:33'),
(77, 14, 'user_id', 'seiya', 'Visitor Permission', 'Rejected', '28-02-2020 16:53:55'),
(78, 0, 'user_id', 'Warp to Prontera ASAP', 'Monthly Term Services & PPM', 'Update', '02-03-2020 08:23:23'),
(79, 0, 'user_id', 'Backwarp', 'Monthly Term Services & PPM', 'Add', '02-03-2020 09:08:59'),
(80, 2, 'user_id', 'seiya', 'Facility', 'Book', '02-03-2020 10:42:19'),
(81, 16, 'user_id', 'asdsd', 'Visitor', 'Add', '02-03-2020 11:06:23'),
(82, 17, 'user_id', 'tresddfs', 'Visitor', 'Add', '02-03-2020 11:07:15'),
(83, 47, 'user_id', '', 'Service Contract', 'Update', '02-03-2020 11:50:38'),
(84, 50, 'user_id', '', 'Service Contract', 'Update', '03-03-2020 11:16:21'),
(85, 50, 'user_id', '', 'Service Contract', 'Update', '03-03-2020 11:17:20'),
(86, 49, 'user_id', '', 'Service Contract', 'Update', '03-03-2020 11:24:10'),
(87, 48, 'user_id', '', 'Service Contract', 'Update', '03-03-2020 11:28:41'),
(88, 47, 'user_id', '', 'Service Contract', 'Update', '03-03-2020 11:32:23'),
(89, 47, 'user_id', '', 'Service Contract', 'Update', '03-03-2020 11:32:41'),
(90, 49, 'user_id', '', 'Service Contract', 'Update', '03-03-2020 11:37:44'),
(91, 0, 'user_id', 'Pemeriksaan Bangunan Secara Berkala ', 'Scheduled/Periodic Maintenance', 'Edit', '03-03-2020 14:33:40'),
(92, 0, 'user_id', 'asdad', 'Service Contract', 'Add', '03-03-2020 14:44:11'),
(93, 0, 'user_id', 'WARP TO GEFFEN PLZ', 'Notification', 'Add', '03-03-2020 15:13:31'),
(94, 0, 'user_id', 'asd', 'Notification', 'Add', '03-03-2020 15:14:26'),
(95, 2, 'user_id', '', 'Facility', 'Approved', '03-03-2020 15:19:06'),
(96, 0, 'user_id', 'd3dasd', 'Notification', 'Add', '03-03-2020 16:26:17'),
(97, 0, 'user_id', 'Backwarp', 'Notification', 'Add', '03-03-2020 16:28:28'),
(98, 17, 'user_id', 'tresddfs', 'Visitor Permission', 'Approved', '04-03-2020 11:09:06'),
(99, 16, 'user_id', 'asdsd', 'Visitor Permission', 'Rejected', '04-03-2020 11:34:49'),
(100, 0, 'user_id', 'Board Game Room', 'Facility', 'Update', '04-03-2020 15:51:34'),
(101, 0, 'user_id', 'Board Game Room', 'Facility', 'Update', '04-03-2020 15:51:41'),
(102, 0, 'user_id', 'Board Game Room', 'Facility', 'Update', '04-03-2020 15:51:45'),
(103, 0, 'user_id', 'Board Game Room', 'Facility', 'Update', '04-03-2020 15:51:50'),
(104, 0, 'user_id', 'Board Game Room', 'Facility', 'Update', '04-03-2020 15:51:52'),
(105, 0, 'user_id', 'Board Game Room', 'Facility', 'Update', '04-03-2020 15:51:58'),
(106, 0, 'user_id', 'Board Game Room', 'Facility', 'Update', '04-03-2020 15:52:03'),
(107, 0, 'user_id', 'Board Game Room', 'Facility', 'Update', '04-03-2020 15:53:48'),
(108, 0, 'user_id', 'Board Game Room', 'Facility', 'Update', '04-03-2020 15:54:12'),
(109, 0, 'user_id', 'Board Game Room', 'Facility', 'Update', '04-03-2020 15:54:17'),
(110, 0, 'user_id', 'what board', 'Facility', 'Update', '04-03-2020 15:54:26'),
(111, 19, 'user_id', 'seiya', 'Manager', 'Add', '05-03-2020 08:58:15'),
(112, 20, 'user_id', 'mana-chan', 'Manager', 'Add', '05-03-2020 09:02:19'),
(113, 21, 'user_id', 'mana-chan', 'Manager', 'Add', '05-03-2020 09:04:08'),
(114, 22, 'user_id', 'mana-chan', 'Manager', 'Add', '05-03-2020 09:07:44'),
(115, 23, 'user_id', 'Maximus', 'Owner', 'Add', '09-03-2020 08:44:08'),
(116, NULL, '', 'asdad', 'Service Contract', 'Delete', '10-03-2020 08:50:05'),
(117, 0, 'user_id', 'Mashup Room', 'Facility', 'Add', '10-03-2020 10:26:41'),
(118, 0, 'user_id', 'Audio Room', 'Facility', 'Add', '10-03-2020 10:43:10'),
(119, 17, 'user_id', 'tresddfs', 'Visitor Permission', 'Approved', '13-03-2020 09:28:48'),
(120, 0, 'user_id', '', 'Asset', 'Add', '16-03-2020 08:36:32'),
(121, 0, 'user_id', '', 'Asset', 'Add', '16-03-2020 08:37:23'),
(122, 0, 'user_id', '', 'Asset', 'Add', '16-03-2020 08:38:08'),
(123, 0, 'user_id', 'Air-cond Unit', 'Asset', 'Add', '16-03-2020 08:39:18'),
(124, 0, 'user_id', 'Air-cond Unit', 'Asset', 'Add', '16-03-2020 08:40:52'),
(125, 0, 'user_id', 'Air-cond Unit', 'Asset', 'Add', '16-03-2020 08:42:11'),
(126, 0, 'user_id', 'Air-cond Unit', 'Asset', 'Add', '16-03-2020 08:43:06'),
(127, 0, 'user_id', 'Air-cond Unit', 'Asset', 'Add', '16-03-2020 08:45:38'),
(128, 0, 'user_id', 'Refuse Compactor', 'Asset', 'Add', '16-03-2020 13:18:14'),
(129, 0, 'user_id', 'Generator Set', 'Asset', 'Add', '16-03-2020 13:29:27'),
(130, 0, 'user_id', 'AMF Board Set', 'Asset', 'Add', '16-03-2020 13:31:33'),
(131, 0, 'user_id', 'AMF Board Set', 'Asset', 'Add', '16-03-2020 13:32:13'),
(132, 0, 'user_id', 'AMF Board Set', 'Asset', 'Add', '16-03-2020 13:32:34'),
(133, 0, 'user_id', 'AMF Board Set', 'Asset', 'Add', '16-03-2020 13:33:01'),
(134, 0, 'user_id', 'Pest Control & Therma Fogging Services', 'Monthly Term Services & PPM', 'Update', '16-03-2020 15:24:02'),
(135, 0, 'user_id', 'Pest Control & Therma Fogging Services', 'Monthly Term Services & PPM', 'Update', '16-03-2020 16:10:36'),
(136, 24, 'user_id', 'Kureha', 'Owner', 'Add', '17-03-2020 10:11:51'),
(137, 7, 'user_id', 'taint', 'Visitor Permission', 'Approved', '19-03-2020 09:37:56'),
(138, 7, 'user_id', 'taint', 'Visitor Permission', 'Approved', '19-03-2020 10:19:35'),
(139, 7, 'user_id', 'taint', 'Visitor Permission', 'Approved', '19-03-2020 10:22:08'),
(140, 25, 'user_id', 'Gooseman', 'Tenant', 'Add', '19-03-2020 14:50:05'),
(141, NULL, '', 'tresddfs', 'Visitor', 'Delete', '20-03-2020 08:22:11'),
(142, NULL, '', 'asdsd', 'Visitor', 'Delete', '20-03-2020 08:22:14'),
(143, NULL, '', 'sdadasd', 'Visitor', 'Delete', '20-03-2020 08:22:15'),
(144, NULL, '', 'seiya', 'Visitor', 'Delete', '20-03-2020 08:22:17'),
(145, 7, 'user_id', 'taint', 'Visitor', 'Update', '20-03-2020 08:56:38'),
(146, 7, 'user_id', 'taint', 'Visitor', 'Update', '20-03-2020 08:56:59'),
(147, 7, 'user_id', 'taint', 'Visitor', 'Update', '20-03-2020 08:57:59'),
(148, 7, 'user_id', 'tainted', 'Visitor', 'Update', '20-03-2020 08:58:06'),
(149, 7, 'user_id', 'tainted', 'Visitor', 'Update', '20-03-2020 08:58:11'),
(150, 7, 'user_id', 'tainted', 'Visitor', 'Update', '20-03-2020 08:58:19'),
(151, 7, 'user_id', 'tainted', 'Visitor', 'Update', '20-03-2020 08:58:27'),
(152, 7, 'user_id', 'tainted', 'Visitor', 'Update', '20-03-2020 08:59:01'),
(153, NULL, '', 'tainted', 'Visitor', 'Delete', '20-03-2020 11:55:42'),
(154, 0, 'user_id', 'Maxi', 'Visitor', 'Add', '20-03-2020 16:22:40'),
(155, NULL, '', '', 'Handbook', 'Delete', '21-03-2020 08:07:39'),
(156, 27, 'user_id', 'New Guy', 'Manager', 'Add', '24-04-2020 09:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `adhoc`
--

CREATE TABLE `adhoc` (
  `ad_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `refer_no` varchar(255) NOT NULL,
  `schedule_date` varchar(255) NOT NULL,
  `due_date` varchar(255) NOT NULL,
  `perform` varchar(255) NOT NULL,
  `date_complete` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adhoc`
--

INSERT INTO `adhoc` (`ad_id`, `description`, `refer_no`, `schedule_date`, `due_date`, `perform`, `date_complete`, `remarks`) VALUES
(2, 'Backwarp', 'sad223', '2020-03-02', '2020-03-10', 'Yes', '2020-03-13', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `agreement_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `name` varchar(225) NOT NULL,
  `document` varbinary(225) NOT NULL,
  `description` text NOT NULL,
  `remarks` text NOT NULL,
  `date_updated` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`agreement_id`, `start_date`, `expiry_date`, `name`, `document`, `description`, `remarks`, `date_updated`) VALUES
(2, '2019-01-01', '2020-12-31', 'Pylon Signages Licenses ', 0x534552564943452050524f56494445522e786c7378, 'MBPJ Jabatan Kawalan Bangunan', 'Step 1 Submission (by Prof Eng Compliance to Requirement) STATUS : COMPLETED ', '19-02-2020'),
(3, '2019-09-22', '2020-09-21', 'Diesel Storage License ', 0x534552564943452050524f56494445522e786c7378, 'KPDNKK', 'Renewal Certificate was successful. Collection of New Certicate on 18 July 2019', '19-02-2020'),
(4, '2019-06-14', '2019-12-31', 'Management Office Business Licens ', 0x534552564943452050524f56494445522e786c7378, 'MBPJ Jabatan Pelesenan ', '-', '20-02-2020');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `ann_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `audiences` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `as_id` int(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `due` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assess_list`
--

CREATE TABLE `assess_list` (
  `assess_id` int(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `due` date NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assess_list`
--

INSERT INTO `assess_list` (`assess_id`, `invoice_no`, `unit_id`, `invoice_date`, `due`, `date_from`, `date_to`, `amount`, `tax_id`, `total`, `status`) VALUES
(1, 'MC-INV00000076', 284, '2020-03-30', '2020-04-15', '2020-04-01', '2020-04-30', '500', 0, '500.00', 'pending'),
(2, 'MC-INV00000077', 284, '2020-03-30', '2020-04-15', '2020-04-01', '2020-04-30', '500', 0, '500.00', 'pending'),
(3, 'MC-INV00000078', 284, '2020-04-30', '2020-05-15', '2020-05-01', '2020-05-31', '500', 0, '500.00', 'pending'),
(4, 'MC-INV00000079', 284, '2020-05-30', '2020-06-15', '2020-06-01', '2020-06-30', '500', 0, '500.00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `a_id` int(255) NOT NULL,
  `floor_id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `activation` varchar(255) NOT NULL,
  `disposal` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `alert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`a_id`, `floor_id`, `category`, `name`, `location`, `code`, `activation`, `disposal`, `serial_no`, `model`, `brand`, `department`, `pic`, `alert`) VALUES
(2, 303, 'Compactor', 'Refuse Compactor', '4', '', '2011-10-12', '', '-', 'Transportable Spiral Compactor', '-', '-', '-', '-'),
(4, 318, 'Generator Set            ', 'AMF Board Set            ', '9', '16-ML   ', '10/12/2011', '', 'PW/4197/2009/08            ', 'POWERHAUS          ', 'Powerwell            ', '-            ', '-            ', '-            '),
(5, 330, 'Energy Compressor', 'The Nuclear Reactor', '2', '2-CL', '2020-03-03', '', 'AC-1337', 'Nuked', 'Nuke-Em', 'Death', '', '8');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `block_id` int(255) NOT NULL,
  `development_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_of_floors` int(255) NOT NULL,
  `manager_id` int(11) DEFAULT NULL COMMENT 'user_id',
  `staff_id` int(11) DEFAULT NULL COMMENT 'user_id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`block_id`, `development_id`, `name`, `no_of_floors`, `manager_id`, `staff_id`) VALUES
(68, 22, 'A', 5, 0, NULL),
(69, 22, 'B', 5, 0, NULL),
(70, 22, 'C', 5, 0, NULL),
(71, 23, 'A', 3, 0, NULL),
(72, 23, 'A', 3, 0, NULL),
(73, 23, 'B', 3, 0, NULL),
(74, 23, 'C', 3, 0, NULL),
(88, 30, 'TOWER', 26, 22, 16),
(89, 30, 'PODIUM', 6, 0, NULL),
(97, 34, 'A', 5, 27, NULL),
(98, 34, 'B', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `block_staffs`
--

CREATE TABLE `block_staffs` (
  `bs_id` int(255) NOT NULL,
  `block_id` int(255) NOT NULL,
  `staff_id` int(255) NOT NULL COMMENT 'user_id',
  `designation` varchar(255) NOT NULL,
  `date_assigned` date NOT NULL,
  `date_terminated` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(255) NOT NULL,
  `facility_id` int(255) NOT NULL,
  `booker_id` int(255) NOT NULL COMMENT 'user_id',
  `booker_name` varchar(255) NOT NULL,
  `start_datetime` date NOT NULL,
  `end_datetime` date NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `invoice_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `facility_id`, `booker_id`, `booker_name`, `start_datetime`, `end_datetime`, `purpose`, `invoice_id`, `status`, `reason`) VALUES
(2, 4, 2, 'seiya', '2020-03-02', '2020-03-11', '1313123', 0, 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `charge_id` int(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `due` date NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`charge_id`, `invoice_no`, `unit_id`, `invoice_date`, `due`, `date_from`, `date_to`, `amount`, `tax_id`, `total`, `status`) VALUES
(1, 'MC-INV00000076', 783, '2020-03-30', '2020-04-15', '2020-04-01', '2020-04-30', '500', 0, '500.00', 'complete'),
(2, 'MC-INV00000077', 284, '2020-03-30', '2020-04-15', '2020-04-01', '2020-04-30', '789', 0, '789.00', 'complete'),
(3, 'MC-INV00000078', 284, '2020-04-30', '2020-05-15', '2020-05-01', '2020-05-31', '25231', 0, '25231.00', 'complete'),
(4, 'MC-INV00000079', 284, '2020-05-30', '2020-06-15', '2020-06-01', '2020-06-30', '500', 0, '500.00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

CREATE TABLE `contractors` (
  `contractor_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `license_file` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `developments`
--

CREATE TABLE `developments` (
  `development_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner_id` int(255) NOT NULL COMMENT 'user_id',
  `address` varchar(255) NOT NULL,
  `nob` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developments`
--

INSERT INTO `developments` (`development_id`, `name`, `owner_id`, `address`, `nob`) VALUES
(30, 'PJX HM TOWER', 0, 'SHAH ALAM, Selangor', '2'),
(34, 'Test Management Body', 0, 'The Alley', '2');

-- --------------------------------------------------------

--
-- Table structure for table `due_soon`
--

CREATE TABLE `due_soon` (
  `due_id` int(11) NOT NULL,
  `id_no` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `due_soon`
--

INSERT INTO `due_soon` (`due_id`, `id_no`, `title`, `description`, `type`, `expiry_date`) VALUES
(5, 47, 'Wellstead Sdn Bhd', 'Cleaning Services & Consumable Deployment ', 'Service Contract', '2020-03-05'),
(6, 48, 'Mitsubishi Malaysia Sdn Bhd', 'Comprehensive Lift Maintenance', 'Service Contract', '2020-03-05'),
(8, 22, 'asdad', 'asdasdsasdsd', 'Service Contract', '2020-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `electric_bills`
--

CREATE TABLE `electric_bills` (
  `eb_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `due_date` date NOT NULL,
  `bill_from` date NOT NULL,
  `bill_to` date NOT NULL,
  `old_meter` int(11) NOT NULL,
  `new_meter` int(11) NOT NULL,
  `charge_amount` float NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` float NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electric_bills`
--

INSERT INTO `electric_bills` (`eb_id`, `unit_id`, `invoice_no`, `date`, `due_date`, `bill_from`, `bill_to`, `old_meter`, `new_meter`, `charge_amount`, `tax_id`, `total`, `status`) VALUES
(1, 144, 'EB-INV00000001', '2020-03-30', '2020-03-16', '2020-03-01', '2020-03-31', 453, 634, 1067, 0, 1067, 'pending'),
(2, 145, 'EB-INV00000002', '2020-03-30', '2020-03-16', '2020-03-01', '2020-03-31', 534, 656, 654, 0, 654, 'pending'),
(3, 147, 'EB-INV00000003', '2020-03-30', '2020-03-16', '2020-03-01', '2020-03-31', 362, 533, 997, 0, 997, 'pending'),
(4, 284, 'EB-INV00000004', '2020-03-31', '2020-03-31', '2020-03-01', '2020-03-31', 200, 234, 170, 1, 180.2, 'pending'),
(5, 285, 'EB-INV00000005', '2020-03-31', '2020-03-31', '2020-03-01', '2020-03-31', 124, 534, 2300, 1, 2438, 'pending'),
(6, 286, 'EB-INV00000006', '2020-03-31', '2020-03-31', '2020-03-01', '2020-03-31', 52, 132, 400, 1, 424, 'pending'),
(7, 288, 'EB-INV00000007', '2020-03-31', '2020-03-31', '2020-03-01', '2020-03-31', 533, 555, 110, 1, 116.6, 'pending'),
(9, 783, 'EB-INV00000009', '2020-04-02', '2020-05-01', '2020-04-01', '2020-04-30', 152, 323, 33004, 1, 34984.2, 'pending'),
(10, 784, 'EB-INV00000010', '2020-04-02', '2020-05-01', '2020-04-01', '2020-04-30', 524, 654, 19720, 1, 20903.2, 'pending'),
(11, 785, 'EB-INV00000011', '2020-04-02', '2020-05-01', '2020-04-01', '2020-04-30', 525, 685, 29440, 1, 31206.4, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `electric_charge`
--

CREATE TABLE `electric_charge` (
  `ec_id` int(11) NOT NULL,
  `units_from` int(11) NOT NULL,
  `units_to` int(11) NOT NULL,
  `rate` float NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electric_charge`
--

INSERT INTO `electric_charge` (`ec_id`, `units_from`, `units_to`, `rate`, `cat_id`) VALUES
(27, 1, 124, 50, 8),
(32, 1, 100, 100, 2),
(33, 101, 200, 324, 2),
(34, 143, 155, 23, 1),
(35, 156, 190, 25, 1),
(36, 191, 200, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `ec_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_contact`
--

INSERT INTO `emergency_contact` (`ec_id`, `user_id`, `name`, `phone`, `address`, `email`) VALUES
(1, 18, 'EMC', '013-242-1241', 'Jalan EMC', 'emc@email.com'),
(2, 19, 'hikari-chan', '015-223-5664', '132-43-Ave', 'Micchi@mail.com'),
(5, 22, 'toast-kun', '033-223-1123', 'NIHON', 'toast@mail.com'),
(6, 23, 'Blitzkrieg', '017-433-2241', 'Khazt', 'Krieg@mail.com'),
(7, 24, 'Hachi', '016-223-4432', 'Nihon', 'hachi@mail.com'),
(8, 25, 'Geesemen', '055-332-3321', 'Yorker', 'thegeese@mail.com'),
(9, 2, 'owneremc', '013-223-4412', 'owneradd', 'owneremc@mail.com'),
(10, 27, 'murainu-kun', '013-223-4432', '132-43-Ave', 'inu@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facility_id` int(255) NOT NULL,
  `floor_id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `booking_required` int(255) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facility_id`, `floor_id`, `category`, `name`, `booking_required`, `availability`) VALUES
(1, 280, 'Health', 'Gym', 1, 'Yes'),
(2, 280, 'Fun', 'VR Room', 1, 'Yes'),
(4, 280, 'Educational', 'Library Viewing Room', 1, 'Yes'),
(5, 280, 'Office', 'Meeting Room', 1, 'Yes'),
(9, 285, 'Fun', 'Audio Room', 1, 'Yes'),
(10, 302, 'Common', 'Resting Area', 0, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL,
  `reply_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `user_id`, `unit_id`, `report_id`, `type`, `title`, `description`, `date`, `reply`, `reply_datetime`) VALUES
(5, 2, 550, 14, 'report', 'Meltdown', 'THE GENERATOR UNIT IS MELTING DOWN LITERALLY', '2020-03-20 11:49', '', ''),
(6, 2, 550, 0, 'comment', 'Air', 'good air', '2020-03-20 11:51', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fire_insurance`
--

CREATE TABLE `fire_insurance` (
  `fire_id` int(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `due` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fire_insurance`
--

INSERT INTO `fire_insurance` (`fire_id`, `unit_id`, `date_from`, `date_to`, `due`, `amount`, `tax_id`, `total`) VALUES
(1, 783, '2020-04-01', '2020-10-01', '2020-04-30', '23.50', 0, '23.50');

-- --------------------------------------------------------

--
-- Table structure for table `fire_list`
--

CREATE TABLE `fire_list` (
  `charge_id` int(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `due` date NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fire_list`
--

INSERT INTO `fire_list` (`charge_id`, `invoice_no`, `unit_id`, `invoice_date`, `due`, `date_from`, `date_to`, `amount`, `tax_id`, `total`, `status`) VALUES
(1, 'MC-INV00000076', 284, '2020-03-30', '2020-04-15', '2020-04-01', '2020-04-30', '500', 0, '500.00', 'pending'),
(2, 'MC-INV00000077', 284, '2020-03-30', '2020-04-15', '2020-04-01', '2020-04-30', '500', 0, '500.00', 'pending'),
(3, 'MC-INV00000078', 284, '2020-04-30', '2020-05-15', '2020-05-01', '2020-05-31', '500', 0, '500.00', 'pending'),
(4, 'MC-INV00000079', 284, '2020-05-30', '2020-06-15', '2020-06-01', '2020-06-30', '500', 0, '500.00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `floor_id` int(255) NOT NULL,
  `development_id` int(255) NOT NULL,
  `block_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `no_of_units` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`floor_id`, `development_id`, `block_id`, `name`, `units`, `no_of_units`) VALUES
(222, 22, 68, '1', '1', 13),
(223, 22, 68, '2', '1', 13),
(224, 22, 68, '3', '1', 13),
(225, 22, 68, '4', '1', 13),
(226, 22, 68, '5', '1', 13),
(227, 22, 69, '1', '1', 13),
(228, 22, 69, '2', '1', 13),
(229, 22, 69, '3', '1', 13),
(230, 22, 69, '4', '1', 13),
(231, 22, 69, '5', '1', 13),
(232, 22, 70, '1', '1', 13),
(233, 22, 70, '2', '1', 13),
(234, 22, 70, '3', '1', 13),
(235, 22, 70, '4', '1', 13),
(236, 22, 70, '5', '1', 13),
(237, 23, 71, '1', '1', 3),
(238, 23, 71, '1', '1', 3),
(239, 23, 71, '2', '1', 3),
(240, 23, 71, '3', '1', 3),
(241, 23, 73, '1', '1', 6),
(242, 23, 73, '2', '1', 6),
(243, 23, 73, '3', '1', 6),
(244, 23, 74, '1', '1', 9),
(245, 23, 74, '2', '1', 9),
(246, 23, 74, '3', '1', 9),
(302, 30, 88, 'G', '1', 10),
(303, 30, 88, '1', '1', 10),
(304, 30, 88, '2', '1', 10),
(305, 30, 88, '3', '1', 10),
(306, 30, 88, '4', '1', 10),
(307, 30, 88, '5', '1', 10),
(308, 30, 88, '6', '1', 10),
(309, 30, 88, '7', '1', 10),
(310, 30, 88, '8', '1', 10),
(311, 30, 88, '9', '1', 10),
(312, 30, 88, '10', '1', 10),
(313, 30, 88, '11', '1', 10),
(314, 30, 88, '12', '1', 10),
(315, 30, 88, '13', '1', 10),
(316, 30, 88, '14', '1', 10),
(317, 30, 88, '15', '1', 10),
(318, 30, 88, '16', '1', 10),
(319, 30, 88, '17', '1', 10),
(320, 30, 88, '18', '1', 10),
(321, 30, 88, '19', '1', 10),
(322, 30, 88, '20', '1', 10),
(323, 30, 88, '21', '1', 10),
(324, 30, 88, '22', '1', 10),
(325, 30, 88, '23', '1', 10),
(326, 30, 88, '24', '1', 10),
(327, 30, 88, '25', '1', 10),
(328, 30, 89, 'G', '1', 25),
(329, 30, 89, '1', '1', 25),
(330, 30, 89, '2', '1', 25),
(331, 30, 89, '3', '1', 25),
(332, 30, 89, '4', '1', 25),
(333, 30, 89, '5', '1', 25),
(361, 34, 97, '1', '1', 5),
(362, 34, 97, '2', '1', 5),
(363, 34, 97, '3', '1', 5),
(364, 34, 97, '4', '1', 5),
(365, 34, 97, '5', '1', 5),
(366, 34, 98, '1', '1', 5),
(367, 34, 98, '2', '1', 5),
(368, 34, 98, '3', '1', 5),
(369, 34, 98, '4', '1', 5),
(370, 34, 98, '5', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `funds_id` int(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `due` date NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `handbook`
--

CREATE TABLE `handbook` (
  `hb_id` int(255) NOT NULL,
  `name` varchar(225) NOT NULL,
  `document` varbinary(255) NOT NULL,
  `description` text NOT NULL,
  `date_updated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handbook`
--

INSERT INTO `handbook` (`hb_id`, `name`, `document`, `description`, `date_updated`) VALUES
(11, 'Repair & Maintenance Work Orde', 0x342e205265706169722026204d61696e74656e616e636520576f726b204f726465722e706466, '-', '20-02-2020 10:20:46'),
(12, 'Material Off Site', 0x332e204d6174657269616c204f666620536974652e646f63, '-', '19-02-2020 15:07:45'),
(13, 'Tenant Complaint form', 0x322e2054656e616e7420436f6d706c61696e7420666f726d2e706466, '-', '19-02-2020 15:08:19'),
(14, 'PJX-HM Shah Tower Tenant By-Laws - R5', 0x312e20504a582d484d205368616820546f7765722054656e616e742042792d4c617773202d2052352e646f63, '-', '19-02-2020 15:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE `incidents` (
  `inci_id` int(255) NOT NULL,
  `incident` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `action_tkn` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`inci_id`, `incident`, `details`, `action_tkn`, `date_created`) VALUES
(1, 'Wet Floor', 'Block C, 3rd Floor', 'Help', '04-02-2020 10:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insurance_id` int(11) NOT NULL,
  `service_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `document` varbinary(255) NOT NULL,
  `vendor` text NOT NULL,
  `remarks` text NOT NULL,
  `fee` varchar(255) NOT NULL,
  `date_updated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insurance_id`, `service_date`, `expiry_date`, `name`, `document`, `vendor`, `remarks`, `fee`, `date_updated`) VALUES
(12, '2019-06-27', '2020-06-26', 'Fire & Perils ', '', 'Zurich General Insurance Malaysia Berhad ', '-', '56523.93', '28-02-2020 15:05:18'),
(13, '2019-06-27', '2020-06-26', 'Burglary ', '', 'Zurich General Insurance Malaysia Berhad ', '-', '460.50', '28-02-2020 15:07:36'),
(14, '2019-06-27', '2020-06-26', 'Money ', '', 'Zurich General Insurance Malaysia Berhad ', '-', '55.05', '28-02-2020 15:09:22'),
(15, '2019-06-27', '2020-06-26', 'Plate Glass', '', 'Zurich General Insurance Malaysia Berhad ', '-', '415.45', '28-02-2020 15:10:25'),
(16, '2019-06-27', '2020-06-26', 'Public Liability ', '', 'Zurich General Insurance Malaysia Berhad ', '-', '460.50', '28-02-2020 15:12:46'),
(17, '2019-06-27', '2020-06-26', 'Machinery & Equipment All Risks ', '', 'Zurich General Insurance Malaysia Berhad ', '-', '347.88', '28-02-2020 15:13:55'),
(18, '2019-06-27', '2020-06-26', 'Machinery Breakdown ', '', 'Zurich General Insurance Malaysia Berhad ', '-', '347.88', '28-02-2020 15:15:00'),
(19, '2019-06-27', '2020-06-26', 'JMB Professional Indemnity  (Error and Omission) ', '', 'Zurich General Insurance Malaysia Berhad ', '-', '685.75', '28-02-2020 15:16:37'),
(20, '2019-06-27', '2020-06-26', 'Equipments All Risks (Lease & Purchase Bi-Polar Air Terminal) ', '', 'Zurich General Insurance Malaysia Berhad ', '-', '460.50', '28-02-2020 15:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(255) NOT NULL,
  `charges_id` int(255) NOT NULL,
  `date_created` date NOT NULL,
  `subtotal` int(255) NOT NULL,
  `late_charges_total` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `receipt` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_settings`
--

CREATE TABLE `invoice_settings` (
  `iset_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `example` varchar(255) NOT NULL,
  `last_inv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_settings`
--

INSERT INTO `invoice_settings` (`iset_id`, `code`, `name`, `width`, `example`, `last_inv`) VALUES
(1, 'FIRE-INV', 'fire insurance', 7, 'FIRE-INV0000001', 0),
(2, 'QR-INV', 'quit rent', 7, 'QR-INV0000001', 0),
(3, 'AS-INV', 'assessments', 7, 'AS-INV0000001', 0),
(4, 'MC-INV', 'management charges', 7, 'MC-INV0000001', 79),
(5, 'EB-INV', 'electric bills', 7, 'EB-INV0000001', 11),
(6, 'WB-INV', 'water bills', 7, 'WB-INV0000001', 8),
(7, 'SF-INV', 'sinking funds', 7, 'SF-INV0000001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `license_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `authority` varchar(255) NOT NULL,
  `commence_date` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `date_updated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`license_id`, `description`, `authority`, `commence_date`, `expiry_date`, `fee`, `remarks`, `date_updated`) VALUES
(4, 'Fire Certificate Renewal (FC)', 'Bomba Malaysia ', '2019-09-23', '2020-09-22', '200', '-', '28-02-2020 11:01:13'),
(5, 'Fire Extinguisher Renewal', 'Bomba Malaysia ', '2019-05-25', '2020-05-24', 't.b.a', 'Subject to quantity and quoted rate ', '28-02-2020 11:02:35'),
(6, 'CO2 System Weighting ', 'Bomba Malaysia ', '2016-12-17', '2021-12-16', 't.b.a', 'Subject to quantity and quoted rate ', '28-02-2020 11:03:56'),
(7, 'CO2 System Hydrostatic Test ', 'Bomba Malaysia ', '2011-11-01', '2021-09-30', 't.b.a', 'Subject to quantity and quoted rate ', '28-02-2020 11:05:02'),
(8, 'HT / LV / Generator Set Registration', 'Suruhanjaya Tenaga (ST)', '2019-12-21', '2020-12-20', '3000', '-', '28-02-2020 11:06:12'),
(9, 'HT / LV / AMF Protection Relays Calibration ', 'Suruhanjaya Tenaga (ST)', '2020-02-01', '2022-01-31', 't.b.a', 'Subject to quantity and quoted rate ', '28-02-2020 11:07:34'),
(10, 'Lifts CF (PL-A - PL-F)', 'Jabatan Keselamatan Dan Kesihatan Pekerjaan Selangor (JKKP) ', '2019-04-04', '2020-08-22', '2280', 'Total Amount payable @ RM3800.00', '28-02-2020 11:12:57'),
(11, 'Lifts CF (CP-1 - CP-3) ', 'Jabatan Keselamatan Dan Kesihatan Pekerjaan Selangor (JKKP) ', '2019-04-04', '2020-08-22', '1140', 'Total Amount payable @ RM3800.00', '28-02-2020 11:14:20'),
(12, 'Lift CF (SL-1) ', 'Jabatan Keselamatan Dan Kesihatan Pekerjaan Selangor (JKKP) ', '2019-04-04', '2020-08-22', '380', 'Total Amount payable @ RM3800.00', '28-02-2020 11:22:17'),
(13, 'Pylon Signages Licenses (JKB)', 'MBPJ Jabatan Kawalan Bangunan', '2020-01-01', '2020-12-31', '250', '-', '28-02-2020 11:23:19'),
(14, 'Pylon Signages Licenses (JPB)', 'MBPJ Jabatan Perancang Bandar ', '2020-01-01', '2020-12-31', '200', '-', '28-02-2020 11:23:58'),
(15, 'Pylon Signages Licenses (JL)', 'MBPJ Jabatan Pelesenan ', '2020-01-01', '2020-12-31', '1400', '-', '28-02-2020 11:24:37'),
(16, 'Business License (Office) ', 'MBPJ Jabatan Pelesenan ', '2020-01-01', '2020-12-31', '205', '-', '28-02-2020 11:25:25'),
(17, '\"Diesel Storage License  \"', 'KPDNKK', '2019-09-22', '2020-09-21', '-', 'No cost of renewal ', '28-02-2020 11:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `location_abbr`
--

CREATE TABLE `location_abbr` (
  `loc_id` int(11) NOT NULL,
  `development_id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location_abbr`
--

INSERT INTO `location_abbr` (`loc_id`, `development_id`, `location`, `code`) VALUES
(1, 30, 'Fire Pump Room', 'FPR'),
(2, 30, 'Common Lobby', 'CL'),
(3, 30, 'MDF', 'MDF'),
(4, 30, 'Refuse Chamber', 'RC'),
(5, 30, 'Generator Set Room', 'GS'),
(6, 30, 'Consumer HT', 'CHT'),
(7, 30, 'Car Park Lobby', 'CPL'),
(8, 30, 'Control Room', 'CR'),
(9, 30, 'Main Lobby', 'ML'),
(10, 30, 'Loading Bay', 'LB'),
(11, 30, 'Consumer LV (MSB-1)', 'CLV'),
(12, 30, 'BMO Office', 'BMO'),
(13, 30, 'Consumer LV (MSB-2)', 'CLV'),
(14, 30, 'EAF Fan Room', 'EAF'),
(15, 30, 'Surau', 'SR'),
(16, 30, 'AC Ledge', 'AC'),
(17, 30, 'WC', 'WC'),
(18, 30, 'Wet Riser Transfer Pump Room', 'WRPR'),
(19, 30, 'Water Tank Room', 'WTR'),
(20, 30, 'Hose Reel Room', 'HRR'),
(21, 30, 'Lift Motor Room', 'LMR'),
(22, 30, 'Domestic Pump Room', 'DPR');

-- --------------------------------------------------------

--
-- Table structure for table `lpc_set`
--

CREATE TABLE `lpc_set` (
  `lpc_set_id` int(10) NOT NULL,
  `unit_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `interest_rate` float NOT NULL DEFAULT 0,
  `minimum` float NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lpc_set`
--

INSERT INTO `lpc_set` (`lpc_set_id`, `unit_id`, `name`, `interest_rate`, `minimum`, `status`) VALUES
(1, 783, 'Fire Insurance', 2, 2, 1),
(2, 783, 'Quit Rent', 3, 5, 1),
(3, 783, 'Assessments', 5, 3, 1),
(4, 783, 'Management Charges', 8, 4, 1),
(5, 783, 'Sinking Funds', 0, 0, 0),
(6, 783, 'Electric Bill', 0, 0, 0),
(7, 783, 'Water Bill', 0, 0, 0),
(8, 784, 'Fire Insurance', 0, 0, 0),
(9, 784, 'Quit Rent', 0, 0, 0),
(10, 784, 'Assessments', 0, 0, 0),
(11, 784, 'Management Charges', 0, 0, 0),
(12, 784, 'Sinking Funds', 0, 0, 0),
(13, 784, 'Electric Bill', 0, 0, 0),
(14, 784, 'Water Bill', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `management_charges`
--

CREATE TABLE `management_charges` (
  `mc_id` int(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `invoice_start` date NOT NULL,
  `recur` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management_charges`
--

INSERT INTO `management_charges` (`mc_id`, `unit_id`, `invoice_start`, `recur`, `due`, `amount`, `tax_id`, `total`) VALUES
(1, 284, '2020-06-30', 'quarterly', '15', '500', 0, '500.00'),
(2, 783, '2020-04-15', 'monthly', '15', '150', 1, '159.00');

-- --------------------------------------------------------

--
-- Table structure for table `manager_block_pivot`
--

CREATE TABLE `manager_block_pivot` (
  `mbp_id` int(255) NOT NULL,
  `manager_id` int(255) NOT NULL COMMENT 'user_id',
  `block_id` int(255) NOT NULL,
  `date_assigned` date NOT NULL,
  `date_terminated` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manage_body`
--

CREATE TABLE `manage_body` (
  `body_id` int(11) NOT NULL,
  `development_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_body`
--

INSERT INTO `manage_body` (`body_id`, `development_id`, `name`, `address`, `email`, `phone`, `fax`) VALUES
(2, 34, 'The Management Body', 'No. 27, Monument Ave, Central Park, NYC, 10030 New York, Brits', 'manage@mail.com', '082-5522232', '082-5522233'),
(3, 30, 'Joint Management Body', 'BUILDING MANAGEMENT OFFICE, LEVEL 3, PJX-HM SHAH TOWER, NO.16A, PERSIARAN BARAT, 46050 PJ, SELANGOR.', 'jmb@mail.com', '03-74910922', '03-74910922');

-- --------------------------------------------------------

--
-- Table structure for table `minimum_charge`
--

CREATE TABLE `minimum_charge` (
  `min_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `min_type` varchar(255) NOT NULL,
  `min_value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minimum_charge`
--

INSERT INTO `minimum_charge` (`min_id`, `cat_id`, `min_type`, `min_value`) VALUES
(1, 0, 'electric', 10),
(2, 0, 'water', 5),
(5, 8, 'electric', 10),
(6, 2, 'water', 25),
(7, 1, 'water', 22),
(10, 2, 'electric', 50),
(11, 1, 'electric', 10);

-- --------------------------------------------------------

--
-- Table structure for table `mt_ppm`
--

CREATE TABLE `mt_ppm` (
  `mtpm_id` int(11) NOT NULL,
  `term_ppm` varchar(255) NOT NULL,
  `service_vendor` varchar(255) NOT NULL,
  `intervals` varchar(255) NOT NULL,
  `schedule_date` varchar(255) NOT NULL,
  `due_date` varchar(255) NOT NULL,
  `perform` varchar(255) NOT NULL,
  `date_of_visit` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mt_ppm`
--

INSERT INTO `mt_ppm` (`mtpm_id`, `term_ppm`, `service_vendor`, `intervals`, `schedule_date`, `due_date`, `perform`, `date_of_visit`, `remarks`) VALUES
(2, 'Pest Control & Therma Fogging Services', 'Urban Pest Control Sdn Bhd', 'Monthly', '2020-03-06', '2020-03-08', 'Yes', '2020-03-25', 'none'),
(3, 'Air-Conditioning System General Maintenance Services ', 'Menang Engineering Sdn Bhd', 'Monthly ', '', '', 'Yes', '', ''),
(4, 'Cleaning Services & Consumable Deployment ', 'Wellstead Sdn Bhd', 'Monthly ', '', '', 'Yes', '', ''),
(5, 'Comprehensive Lift Maintenance Services ', 'Mitsubishi Malaysia Sdn Bhd', 'Monthly ', '', '', 'Yes', '', ''),
(6, 'Fire Protection System General Maintenance Services ', 'Nelton Engineering Sdn Bhd ', 'Monthly ', '', '', 'Yes', '', ''),
(7, 'Bomba Link Communication System Maintenance Services ', 'iSCADA Net Sdn Bhd', 'Quaterly ', '', '', 'Yes', '', ''),
(8, 'ELV (CCTV, PA, Fireman Intercom), VMS, BAS Maintenance Services ', 'QA Systems Integration Sdn Bhd', 'Monthly ', '', '', 'Yes', '', ''),
(9, 'Comprehensive Pedestrian Barrier Gate, Swing Gate, Visitor Drop Box Maintenance Services', 'Dormakaba Malaysia Sdn Bhd', 'Monthly ', '', '', 'Yes', '', ''),
(10, 'Superving Engineer Services  \n11KV Competent Control Services ', 'Euroforce Sdn Bhd ', 'Monthly ', '', '', 'Yes', '', ''),
(11, 'Landscape General Maintenance Services ', 'Lanskap Rekaan Terra', 'Monthly ', '', '', 'Yes', '', ''),
(12, 'Potted Plant Supply & Maintenance  Services ', 'Mawah Merah Sungai Buloh Nursery \n', 'Monthly ', '', '', 'Yes', '', ''),
(13, 'Refuse Disposal Services', 'Wellgon (M) Sdn Bhd ', 'Monthly ', '', '', 'Yes', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `parking_space`
--

CREATE TABLE `parking_space` (
  `ps_id` int(255) NOT NULL,
  `unit_id` int(255) NOT NULL,
  `parking_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `pd_id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ic` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `emergency_contact` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`pd_id`, `user_id`, `name`, `ic`, `phone`, `address`, `emergency_contact`, `date_created`) VALUES
(1, '1', 'Khoo', '1', '197777777', 'Jalan Angkor Watt', '12345678', '12345678'),
(2, '2', 'ownerdemo', '2', '2147483647', 'Jalan Angkor Watt', '12345678', '01-01-2020 16:59:59'),
(3, '3', 'tenantdemo', '3', '197777777', 'Jalan Angkor Watt', '123456789', '03-01-2020 16:59:59'),
(7, '7', 'beatrice', '5', '127775522', 'No.520, lorong 3 Jalan Verdict', '127775522', '09-01-2020 09:44:33'),
(9, '9', 'Steve', '7', '127775522', 'No.520, lorong 3 Jalan Verdict', '127775522', '09-01-2020 14:11:22'),
(13, '13', 'Manager-Test', '123132821', '1988877722', 'Jalan Angkor Wiffle', '1234567856', '13-01-2020 13:34:46'),
(16, '16', 'Abyss', '12345678', '012-000-4455', 'No.520, lorong 3 Jalan Verdict', '012-000-4456', '14-01-2020 11:01:57'),
(18, '18', 'Manager', '980717177321', '012-234-2451', 'Jalan Test', '', '20-02-2020 09:06:26'),
(19, '19', 'seiya', '1213332441', '012-888-5500', 'werwerewrw', '', '05-03-2020 08:58:15'),
(22, '22', 'mana-chan', '990323231123', '012-332-2212', 'next road', '', '05-03-2020 09:07:44'),
(23, '23', 'Maximus', '123456121234', '016-223-5543', 'Kurzst', '', '09-03-2020 08:44:08'),
(24, '24', 'Kureha', '980718136713', '013-332-4432', 'Nihon', '', '17-03-2020 10:11:51'),
(25, '25', 'Gooseman', '12343231223', '015-443-2231', 'York', '', '19-03-2020 14:50:05'),
(26, '27', 'New Guy', '970212132342', '234-234-2342', 'turbine', '', '24-04-2020 09:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `qrent_list`
--

CREATE TABLE `qrent_list` (
  `qlist_id` int(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `due` date NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qrent_list`
--

INSERT INTO `qrent_list` (`qlist_id`, `invoice_no`, `unit_id`, `invoice_date`, `due`, `date_from`, `date_to`, `amount`, `tax_id`, `total`, `status`) VALUES
(1, 'MC-INV00000076', 284, '2020-03-30', '2020-04-15', '2020-04-01', '2020-04-30', '500', 0, '500.00', 'pending'),
(2, 'MC-INV00000077', 284, '2020-03-30', '2020-04-15', '2020-04-01', '2020-04-30', '500', 0, '500.00', 'pending'),
(3, 'MC-INV00000078', 284, '2020-04-30', '2020-05-15', '2020-05-01', '2020-05-31', '500', 0, '500.00', 'pending'),
(4, 'MC-INV00000079', 284, '2020-05-30', '2020-06-15', '2020-06-01', '2020-06-30', '500', 0, '500.00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `quit_rent`
--

CREATE TABLE `quit_rent` (
  `qrent_id` int(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `due` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quit_rent`
--

INSERT INTO `quit_rent` (`qrent_id`, `unit_id`, `date_from`, `date_to`, `due`, `amount`, `tax_id`, `total`) VALUES
(7, 783, '2020-04-01', '2020-04-30', '2020-04-01', '23', 1, '24.38'),
(8, 784, '2020-04-01', '2020-04-30', '2020-04-01', '24', 1, '25.44'),
(9, 785, '2020-04-01', '2020-04-30', '2020-04-01', '24', 1, '25.44'),
(10, 786, '2020-04-01', '2020-04-30', '2020-04-01', '25', 1, '26.50'),
(11, 787, '2020-04-01', '2020-04-30', '2020-04-01', '26', 1, '27.56'),
(12, 788, '2020-04-01', '2020-04-30', '2020-04-01', '243', 1, '257.58'),
(13, 789, '2020-04-01', '2020-04-30', '2020-04-01', '2532', 1, '2683.92'),
(14, 790, '2020-04-01', '2020-04-30', '2020-04-01', '24', 1, '25.44'),
(15, 791, '2020-04-01', '2020-04-30', '2020-04-01', '234', 1, '248.04'),
(16, 792, '2020-04-01', '2020-04-30', '2020-04-01', '2521', 1, '2672.26'),
(17, 793, '2020-04-01', '2020-04-30', '2020-04-01', '424', 1, '449.44'),
(18, 794, '2020-04-01', '2020-04-30', '2020-04-01', '2343', 1, '2483.58'),
(19, 795, '2020-04-01', '2020-04-30', '2020-04-01', '234', 1, '248.04'),
(20, 796, '2020-04-01', '2020-04-30', '2020-04-01', '12312', 1, '13050.72'),
(21, 797, '2020-04-01', '2020-04-30', '2020-04-01', '100', 1, '106.00');

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `quotation_id` int(255) NOT NULL,
  `contractor_id` int(255) NOT NULL COMMENT 'user_id',
  `wo_id` int(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `rental_id` int(255) NOT NULL,
  `tenant_id` int(255) NOT NULL COMMENT 'user_id',
  `unit_id` int(255) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `fees` int(255) NOT NULL,
  `deposit` int(255) NOT NULL,
  `water_deposit` int(255) NOT NULL,
  `electricity_deposit` int(255) NOT NULL,
  `car_plate` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(255) NOT NULL,
  `unit_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `unit_id`, `title`, `description`, `datetime`) VALUES
(14, 550, 'Meltdown', 'THE GENERATOR UNIT IS MELTING DOWN LITERALLY', '2020-03-20 11:49'),
(15, 549, 'Meltdown', 'whateves', '2020-03-20 14:55');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `security_id` int(255) NOT NULL,
  `development_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `date_joined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`security_id`, `development_id`, `user_id`, `name`, `company`, `date_joined`) VALUES
(6, 28, 0, 'New Guy', 'TSG Entertainment', '2020-07-01'),
(7, 28, 0, 'in the world', 'of magic and swords', '2020-03-17'),
(8, 28, 0, 'max', 'maxin', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `service_contract`
--

CREATE TABLE `service_contract` (
  `service_id` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `name` varchar(225) NOT NULL,
  `document` varbinary(225) NOT NULL,
  `description` text NOT NULL,
  `remarks` text NOT NULL,
  `date_updated` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_contract`
--

INSERT INTO `service_contract` (`service_id`, `start_date`, `end_date`, `frequency`, `name`, `document`, `description`, `remarks`, `date_updated`) VALUES
(6, '2019-10-15', '2020-10-14', 'Monthly', 'Paraforce Sdn Bhd', '', 'Security Services ', '', '28-02-2020 11:28:02'),
(7, '2019-10-01', '2020-09-30', 'Monthly', 'Urban Pest Control Sdn Bhd', '', 'Pest Control & Therma Fogging Services', '', '28-02-2020 11:28:52'),
(8, '2019-07-01', '2020-06-30', 'Monthly', 'Menang Engineering Sdn Bhd', '', 'Air-Conditioning System General Maintenance', '', '28-02-2020 11:31:45'),
(9, '2019-10-05', '2020-10-04', 'Monthly', 'Wellstead Sdn Bhd', '', 'Cleaning Services & Consumable Deployment ', '', '28-02-2020 11:33:04'),
(10, '2019-06-01', '2020-05-31', 'Monthly', 'Mitsubishi Malaysia Sdn Bhd', '', '\"Comprehensive Lift Maintenance  \"', '', '28-02-2020 11:34:01'),
(11, '2019-11-01', '2020-10-31', 'Monthly', 'Nelton Engineering Sdn Bhd ', '', 'Fire Protection System General Maintenance', '', '28-02-2020 11:36:09'),
(12, '2019-09-19', '2020-09-18', 'Monthly', 'iSCADA Net Sdn Bhd', '', 'Bomba Link Communication System & Competent Atteandance, IBOSS Test', '', '28-02-2020 11:36:44'),
(13, '2019-09-01', '2020-08-31', 'Monthly', 'QA Systems Integration Sdn Bhd', '', 'CCTV System, PA System, Card Access & Visitor Management System, Building Automation System, Fireman Intercom System and SMATV System General Maintenance', '', '28-02-2020 11:37:29'),
(14, '2018-12-01', '2020-11-30', 'Monthly', 'Dormakaba Malaysia Sdn Bhd', '', 'Comprehensive Pedestrian Barrier Gate, Swing Gate, Visitor Drop Box Maintenance Services', '', '28-02-2020 11:40:09'),
(15, '2017-11-01', '', 'Monthly', 'Euroforce Sdn Bhd ', '', 'Superving Engineer Services ', '', '28-02-2020 11:46:23'),
(16, '2017-11-01', '', 'Monthly', 'Euroforce Sdn Bhd ', '', '11KV Competent Control Services ', '', '28-02-2020 11:59:33'),
(17, '2019-10-16', '2020-10-15', 'Monthly', 'Lanskap Rekaan Terra', '', 'Landscape General Maintenance', '', '28-02-2020 12:00:31'),
(18, '2019-03-01', '2020-03-31', 'Monthly', '\"Mawah Merah Sungai Buloh Nursery  \"', '', 'Potted Plant Supply & Maintenance ', '', '28-02-2020 12:02:00'),
(19, '2017-10-17', '2020-10-16', 'Monthly', 'Docu Solution Sdn Bhd ', '', 'Photocopier Rental ', '', '28-02-2020 12:02:58'),
(20, '2019-11-15', '2020-11-14', 'Monthly', 'Wellgon (M) Sdn Bhd ', '', 'Refuse Disposal Services', '', '28-02-2020 12:05:20'),
(21, '2019-10-01', '2021-10-31', 'Yearly', 'Supreme Power Engineering ', '', 'Generator Set Maintenance Services ', '', '28-02-2020 12:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `sinking_funds`
--

CREATE TABLE `sinking_funds` (
  `sf_id` int(255) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `invoice_start` date NOT NULL,
  `recur` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinking_funds`
--

INSERT INTO `sinking_funds` (`sf_id`, `unit_id`, `invoice_start`, `recur`, `due`, `amount`, `tax_id`, `total`) VALUES
(1, 184, '2020-04-22', '', '15', '25', 1, '26.50'),
(2, 185, '2020-04-22', '', '15', '363', 1, '384.78'),
(3, 186, '2020-04-22', '', '15', '534', 1, '566.04'),
(4, 187, '2020-04-22', '', '15', '545', 1, '577.70'),
(5, 188, '2020-04-22', '', '15', '66', 1, '69.96');

-- --------------------------------------------------------

--
-- Table structure for table `sp_maintenance`
--

CREATE TABLE `sp_maintenance` (
  `spm_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `service_date` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `routine` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `date_updated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_maintenance`
--

INSERT INTO `sp_maintenance` (`spm_id`, `description`, `service_date`, `expiry_date`, `routine`, `remarks`, `date_updated`) VALUES
(8, 'Fire Safety Seminar & Talk ', '2019-07-31', '2020-07-30', '1', '-', '28-02-2020 16:01:42'),
(11, 'Fire Evacuation Drill ', '2019-08-21', '2020-08-20', '1', '-', '28-02-2020 16:13:34'),
(12, 'Service of LC Booster Pump, VSD Pump, Submersible Pump', '2019-10-09', '2020-10-08', '1', '-', '28-02-2020 16:16:06'),
(13, 'Service  of L10Booster Pump, VSD Pump', '2019-10-09', '2020-10-08', '1', '-', '28-02-2020 16:17:03'),
(14, 'Service of L34 VSD Pump ', '2019-10-09', '2020-10-08', '1', '-', '28-02-2020 16:18:31'),
(15, 'Service of Generator Set ', '2019-10-15', '2020-10-31', '1', '-', '28-02-2020 16:21:17'),
(16, 'Top up Fuel Tank (Generator Set)', '', '2020-03-31', '1', '-', '28-02-2020 16:21:39'),
(17, 'Cleaning of L9 Storage & Transfer Tank ', '2019-09-30', '2021-09-29', '2', '-', '28-02-2020 16:23:02'),
(18, 'Cleaning of L35 Balancing Storage Tank ', '2019-09-30', '2021-09-29', '2', '-', '28-02-2020 16:23:57'),
(19, 'Cleaning of LC Domestic Suction Tank ', '2017-09-30', '2022-09-29', '5', '-', '28-02-2020 16:25:32'),
(20, 'Determination of Reinstatement Value (Fire & Perils) ', '2018-06-27', '2023-06-26', '5', '-', '28-02-2020 16:27:49'),
(21, 'Pemeriksaan Bangunan Secara Berkala ', '', '2020-03-26', '10', '-', '03-03-2020 14:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `tax_settings`
--

CREATE TABLE `tax_settings` (
  `tax_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_settings`
--

INSERT INTO `tax_settings` (`tax_id`, `code`, `name`, `rate`) VALUES
(1, 'GST', 'GST', 6);

-- --------------------------------------------------------

--
-- Table structure for table `ucategory_abbr`
--

CREATE TABLE `ucategory_abbr` (
  `ucat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ucategory_abbr`
--

INSERT INTO `ucategory_abbr` (`ucat_id`, `name`, `code`) VALUES
(1, 'Commercial', 'COMM'),
(2, 'Apartment', 'APT'),
(3, 'Condominium', 'CONDO'),
(4, 'Government Office', 'GOVT'),
(5, 'Residential', 'RESI'),
(6, 'Shipping', 'SHIP'),
(7, 'Social Welfare', 'SOCIAL'),
(8, 'House of Worship', 'WORS');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unit_id` int(255) NOT NULL,
  `development_id` int(255) NOT NULL,
  `block_id` int(255) NOT NULL,
  `floor_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner_id` int(255) DEFAULT NULL COMMENT 'user_id',
  `tenant_id` int(255) DEFAULT NULL COMMENT 'user_id',
  `agent_id` int(255) DEFAULT NULL COMMENT 'user_id',
  `no_of_rooms` int(255) DEFAULT NULL,
  `no_of_bathrooms` int(255) DEFAULT NULL,
  `no_of_windows` int(255) DEFAULT NULL,
  `allocated_area` int(11) NOT NULL,
  `total_area` int(11) NOT NULL,
  `ucat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_id`, `development_id`, `block_id`, `floor_id`, `name`, `owner_id`, `tenant_id`, `agent_id`, `no_of_rooms`, `no_of_bathrooms`, `no_of_windows`, `allocated_area`, `total_area`, `ucat_id`) VALUES
(1, 23, 71, 237, 'A-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(2, 23, 71, 237, 'A-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(3, 23, 71, 237, 'A-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(4, 23, 71, 239, 'A-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(5, 23, 71, 239, 'A-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(6, 23, 71, 239, 'A-6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(7, 23, 71, 240, 'A-7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(8, 23, 71, 240, 'A-8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(9, 23, 71, 240, 'A-9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(10, 23, 73, 241, 'B-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(11, 23, 73, 241, 'B-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(12, 23, 73, 241, 'B-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(13, 23, 73, 241, 'B-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(14, 23, 73, 241, 'B-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(15, 23, 73, 241, 'B-6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(16, 23, 73, 242, 'B-7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(17, 23, 73, 242, 'B-8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(18, 23, 73, 242, 'B-9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(19, 23, 73, 242, 'B-10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(20, 23, 73, 242, 'B-11', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(21, 23, 73, 242, 'B-12', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(22, 23, 73, 243, 'B-13', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(23, 23, 73, 243, 'B-14', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(24, 23, 73, 243, 'B-15', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(25, 23, 73, 243, 'B-16', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(26, 23, 73, 243, 'B-17', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(27, 23, 73, 243, 'B-18', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(28, 23, 74, 244, 'C-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(29, 23, 74, 244, 'C-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(30, 23, 74, 244, 'C-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(31, 23, 74, 244, 'C-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(32, 23, 74, 244, 'C-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(33, 23, 74, 244, 'C-6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(34, 23, 74, 244, 'C-7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(35, 23, 74, 244, 'C-8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(36, 23, 74, 244, 'C-9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(37, 23, 74, 245, 'C-10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(38, 23, 74, 245, 'C-11', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(39, 23, 74, 245, 'C-12', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(40, 23, 74, 245, 'C-13', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(41, 23, 74, 245, 'C-14', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(42, 23, 74, 245, 'C-15', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(43, 23, 74, 245, 'C-16', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(44, 23, 74, 245, 'C-17', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(45, 23, 74, 245, 'C-18', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(46, 23, 74, 246, 'C-19', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(47, 23, 74, 246, 'C-20', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(48, 23, 74, 246, 'C-21', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(49, 23, 74, 246, 'C-22', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(50, 23, 74, 246, 'C-23', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(51, 23, 74, 246, 'C-24', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(52, 23, 74, 246, 'C-25', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(53, 23, 74, 246, 'C-26', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(54, 23, 74, 246, 'C-27', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(284, 30, 88, 302, 'G+1', 24, NULL, NULL, NULL, NULL, NULL, 1234, 1234, 2),
(285, 30, 88, 302, 'G+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(286, 30, 88, 302, 'G+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(287, 30, 88, 302, 'G+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(288, 30, 88, 302, 'G+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(289, 30, 88, 302, 'G+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(290, 30, 88, 302, 'G+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(291, 30, 88, 302, 'G+8', NULL, 25, NULL, NULL, NULL, NULL, 345, 1000, 0),
(292, 30, 88, 302, 'G+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(293, 30, 88, 302, 'G+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(294, 30, 88, 303, '1+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(295, 30, 88, 303, '1+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(296, 30, 88, 303, '1+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(297, 30, 88, 303, '1+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(298, 30, 88, 303, '1+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(299, 30, 88, 303, '1+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(300, 30, 88, 303, '1+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(301, 30, 88, 303, '1+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(302, 30, 88, 303, '1+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(303, 30, 88, 303, '1+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(304, 30, 88, 304, '2+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(305, 30, 88, 304, '2+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(306, 30, 88, 304, '2+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(307, 30, 88, 304, '2+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(308, 30, 88, 304, '2+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(309, 30, 88, 304, '2+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(310, 30, 88, 304, '2+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(311, 30, 88, 304, '2+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(312, 30, 88, 304, '2+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(313, 30, 88, 304, '2+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(314, 30, 88, 305, '3+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(315, 30, 88, 305, '3+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(316, 30, 88, 305, '3+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(317, 30, 88, 305, '3+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(318, 30, 88, 305, '3+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(319, 30, 88, 305, '3+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(320, 30, 88, 305, '3+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(321, 30, 88, 305, '3+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(322, 30, 88, 305, '3+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(323, 30, 88, 305, '3+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(324, 30, 88, 306, '4+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(325, 30, 88, 306, '4+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(326, 30, 88, 306, '4+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(327, 30, 88, 306, '4+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(328, 30, 88, 306, '4+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(329, 30, 88, 306, '4+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(330, 30, 88, 306, '4+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(331, 30, 88, 306, '4+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(332, 30, 88, 306, '4+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(333, 30, 88, 306, '4+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(334, 30, 88, 307, '5+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(335, 30, 88, 307, '5+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(336, 30, 88, 307, '5+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(337, 30, 88, 307, '5+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(338, 30, 88, 307, '5+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(339, 30, 88, 307, '5+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(340, 30, 88, 307, '5+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(341, 30, 88, 307, '5+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(342, 30, 88, 307, '5+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(343, 30, 88, 307, '5+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(344, 30, 88, 308, '6+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(345, 30, 88, 308, '6+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(346, 30, 88, 308, '6+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(347, 30, 88, 308, '6+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(348, 30, 88, 308, '6+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(349, 30, 88, 308, '6+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(350, 30, 88, 308, '6+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(351, 30, 88, 308, '6+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(352, 30, 88, 308, '6+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(353, 30, 88, 308, '6+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(354, 30, 88, 309, '7+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(355, 30, 88, 309, '7+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(356, 30, 88, 309, '7+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(357, 30, 88, 309, '7+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(358, 30, 88, 309, '7+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(359, 30, 88, 309, '7+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(360, 30, 88, 309, '7+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(361, 30, 88, 309, '7+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(362, 30, 88, 309, '7+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(363, 30, 88, 309, '7+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(364, 30, 88, 310, '8+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(365, 30, 88, 310, '8+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(366, 30, 88, 310, '8+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(367, 30, 88, 310, '8+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(368, 30, 88, 310, '8+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(369, 30, 88, 310, '8+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(370, 30, 88, 310, '8+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(371, 30, 88, 310, '8+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(372, 30, 88, 310, '8+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(373, 30, 88, 310, '8+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(374, 30, 88, 311, '9+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(375, 30, 88, 311, '9+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(376, 30, 88, 311, '9+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(377, 30, 88, 311, '9+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(378, 30, 88, 311, '9+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(379, 30, 88, 311, '9+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(380, 30, 88, 311, '9+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(381, 30, 88, 311, '9+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(382, 30, 88, 311, '9+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(383, 30, 88, 311, '9+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(384, 30, 88, 312, '10+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(385, 30, 88, 312, '10+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(386, 30, 88, 312, '10+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(387, 30, 88, 312, '10+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(388, 30, 88, 312, '10+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(389, 30, 88, 312, '10+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(390, 30, 88, 312, '10+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(391, 30, 88, 312, '10+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(392, 30, 88, 312, '10+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(393, 30, 88, 312, '10+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(394, 30, 88, 313, '11+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(395, 30, 88, 313, '11+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(396, 30, 88, 313, '11+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(397, 30, 88, 313, '11+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(398, 30, 88, 313, '11+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(399, 30, 88, 313, '11+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(400, 30, 88, 313, '11+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(401, 30, 88, 313, '11+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(402, 30, 88, 313, '11+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(403, 30, 88, 313, '11+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(404, 30, 88, 314, '12+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(405, 30, 88, 314, '12+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(406, 30, 88, 314, '12+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(407, 30, 88, 314, '12+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(408, 30, 88, 314, '12+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(409, 30, 88, 314, '12+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(410, 30, 88, 314, '12+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(411, 30, 88, 314, '12+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(412, 30, 88, 314, '12+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(413, 30, 88, 314, '12+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(414, 30, 88, 315, '13+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(415, 30, 88, 315, '13+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(416, 30, 88, 315, '13+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(417, 30, 88, 315, '13+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(418, 30, 88, 315, '13+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(419, 30, 88, 315, '13+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(420, 30, 88, 315, '13+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(421, 30, 88, 315, '13+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(422, 30, 88, 315, '13+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(423, 30, 88, 315, '13+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(424, 30, 88, 316, '14+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(425, 30, 88, 316, '14+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(426, 30, 88, 316, '14+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(427, 30, 88, 316, '14+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(428, 30, 88, 316, '14+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(429, 30, 88, 316, '14+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(430, 30, 88, 316, '14+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(431, 30, 88, 316, '14+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(432, 30, 88, 316, '14+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(433, 30, 88, 316, '14+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(434, 30, 88, 317, '15+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(435, 30, 88, 317, '15+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(436, 30, 88, 317, '15+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(437, 30, 88, 317, '15+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(438, 30, 88, 317, '15+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(439, 30, 88, 317, '15+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(440, 30, 88, 317, '15+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(441, 30, 88, 317, '15+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(442, 30, 88, 317, '15+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(443, 30, 88, 317, '15+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(444, 30, 88, 318, '16+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(445, 30, 88, 318, '16+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(446, 30, 88, 318, '16+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(447, 30, 88, 318, '16+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(448, 30, 88, 318, '16+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(449, 30, 88, 318, '16+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(450, 30, 88, 318, '16+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(451, 30, 88, 318, '16+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(452, 30, 88, 318, '16+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(453, 30, 88, 318, '16+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(454, 30, 88, 319, '17+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(455, 30, 88, 319, '17+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(456, 30, 88, 319, '17+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(457, 30, 88, 319, '17+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(458, 30, 88, 319, '17+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(459, 30, 88, 319, '17+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(460, 30, 88, 319, '17+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(461, 30, 88, 319, '17+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(462, 30, 88, 319, '17+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(463, 30, 88, 319, '17+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(464, 30, 88, 320, '18+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(465, 30, 88, 320, '18+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(466, 30, 88, 320, '18+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(467, 30, 88, 320, '18+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(468, 30, 88, 320, '18+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(469, 30, 88, 320, '18+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(470, 30, 88, 320, '18+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(471, 30, 88, 320, '18+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(472, 30, 88, 320, '18+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(473, 30, 88, 320, '18+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(474, 30, 88, 321, '19+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(475, 30, 88, 321, '19+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(476, 30, 88, 321, '19+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(477, 30, 88, 321, '19+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(478, 30, 88, 321, '19+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(479, 30, 88, 321, '19+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(480, 30, 88, 321, '19+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(481, 30, 88, 321, '19+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(482, 30, 88, 321, '19+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(483, 30, 88, 321, '19+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(484, 30, 88, 322, '20+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(485, 30, 88, 322, '20+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(486, 30, 88, 322, '20+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(487, 30, 88, 322, '20+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(488, 30, 88, 322, '20+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(489, 30, 88, 322, '20+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(490, 30, 88, 322, '20+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(491, 30, 88, 322, '20+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(492, 30, 88, 322, '20+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(493, 30, 88, 322, '20+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(494, 30, 88, 323, '21+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(495, 30, 88, 323, '21+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(496, 30, 88, 323, '21+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(497, 30, 88, 323, '21+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(498, 30, 88, 323, '21+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(499, 30, 88, 323, '21+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(500, 30, 88, 323, '21+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(501, 30, 88, 323, '21+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(502, 30, 88, 323, '21+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(503, 30, 88, 323, '21+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(504, 30, 88, 324, '22+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(505, 30, 88, 324, '22+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(506, 30, 88, 324, '22+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(507, 30, 88, 324, '22+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(508, 30, 88, 324, '22+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(509, 30, 88, 324, '22+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(510, 30, 88, 324, '22+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(511, 30, 88, 324, '22+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(512, 30, 88, 324, '22+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(513, 30, 88, 324, '22+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(514, 30, 88, 325, '23+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(515, 30, 88, 325, '23+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(516, 30, 88, 325, '23+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(517, 30, 88, 325, '23+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(518, 30, 88, 325, '23+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(519, 30, 88, 325, '23+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(520, 30, 88, 325, '23+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(521, 30, 88, 325, '23+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(522, 30, 88, 325, '23+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(523, 30, 88, 325, '23+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(524, 30, 88, 326, '24+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(525, 30, 88, 326, '24+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(526, 30, 88, 326, '24+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(527, 30, 88, 326, '24+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(528, 30, 88, 326, '24+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(529, 30, 88, 326, '24+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(530, 30, 88, 326, '24+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(531, 30, 88, 326, '24+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(532, 30, 88, 326, '24+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(533, 30, 88, 326, '24+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(534, 30, 88, 327, '25+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(535, 30, 88, 327, '25+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(536, 30, 88, 327, '25+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(537, 30, 88, 327, '25+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(538, 30, 88, 327, '25+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(539, 30, 88, 327, '25+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(540, 30, 88, 327, '25+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(541, 30, 88, 327, '25+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(542, 30, 88, 327, '25+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(543, 30, 88, 327, '25+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(544, 30, 89, 328, 'G+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(545, 30, 89, 328, 'G+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(546, 30, 89, 328, 'G+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(547, 30, 89, 328, 'G+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(548, 30, 89, 328, 'G+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(549, 30, 89, 328, 'G+6', 2, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(550, 30, 89, 328, 'G+7', 2, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(551, 30, 89, 328, 'G+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(552, 30, 89, 328, 'G+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(553, 30, 89, 328, 'G+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(554, 30, 89, 328, 'G+11', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(555, 30, 89, 328, 'G+12', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(556, 30, 89, 328, 'G+13', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(557, 30, 89, 328, 'G+14', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(558, 30, 89, 328, 'G+15', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(559, 30, 89, 328, 'G+16', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(560, 30, 89, 328, 'G+17', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(561, 30, 89, 328, 'G+18', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(562, 30, 89, 328, 'G+19', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(563, 30, 89, 328, 'G+20', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(564, 30, 89, 328, 'G+21', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(565, 30, 89, 328, 'G+22', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(566, 30, 89, 328, 'G+23', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(567, 30, 89, 328, 'G+24', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(568, 30, 89, 328, 'G+25', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(569, 30, 89, 329, '1+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(570, 30, 89, 329, '1+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(571, 30, 89, 329, '1+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(572, 30, 89, 329, '1+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(573, 30, 89, 329, '1+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(574, 30, 89, 329, '1+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(575, 30, 89, 329, '1+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(576, 30, 89, 329, '1+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(577, 30, 89, 329, '1+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(578, 30, 89, 329, '1+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(579, 30, 89, 329, '1+11', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(580, 30, 89, 329, '1+12', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(581, 30, 89, 329, '1+13', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(582, 30, 89, 329, '1+14', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(583, 30, 89, 329, '1+15', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(584, 30, 89, 329, '1+16', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(585, 30, 89, 329, '1+17', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(586, 30, 89, 329, '1+18', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(587, 30, 89, 329, '1+19', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(588, 30, 89, 329, '1+20', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(589, 30, 89, 329, '1+21', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(590, 30, 89, 329, '1+22', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(591, 30, 89, 329, '1+23', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(592, 30, 89, 329, '1+24', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(593, 30, 89, 329, '1+25', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(594, 30, 89, 330, '2+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(595, 30, 89, 330, '2+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(596, 30, 89, 330, '2+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(597, 30, 89, 330, '2+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(598, 30, 89, 330, '2+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(599, 30, 89, 330, '2+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(600, 30, 89, 330, '2+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(601, 30, 89, 330, '2+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(602, 30, 89, 330, '2+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(603, 30, 89, 330, '2+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(604, 30, 89, 330, '2+11', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(605, 30, 89, 330, '2+12', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(606, 30, 89, 330, '2+13', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(607, 30, 89, 330, '2+14', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(608, 30, 89, 330, '2+15', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(609, 30, 89, 330, '2+16', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(610, 30, 89, 330, '2+17', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(611, 30, 89, 330, '2+18', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(612, 30, 89, 330, '2+19', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(613, 30, 89, 330, '2+20', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(614, 30, 89, 330, '2+21', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(615, 30, 89, 330, '2+22', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(616, 30, 89, 330, '2+23', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(617, 30, 89, 330, '2+24', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(618, 30, 89, 330, '2+25', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(619, 30, 89, 331, '3+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(620, 30, 89, 331, '3+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(621, 30, 89, 331, '3+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(622, 30, 89, 331, '3+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(623, 30, 89, 331, '3+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(624, 30, 89, 331, '3+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(625, 30, 89, 331, '3+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(626, 30, 89, 331, '3+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(627, 30, 89, 331, '3+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(628, 30, 89, 331, '3+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(629, 30, 89, 331, '3+11', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(630, 30, 89, 331, '3+12', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(631, 30, 89, 331, '3+13', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(632, 30, 89, 331, '3+14', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(633, 30, 89, 331, '3+15', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(634, 30, 89, 331, '3+16', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(635, 30, 89, 331, '3+17', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(636, 30, 89, 331, '3+18', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(637, 30, 89, 331, '3+19', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(638, 30, 89, 331, '3+20', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(639, 30, 89, 331, '3+21', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(640, 30, 89, 331, '3+22', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(641, 30, 89, 331, '3+23', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(642, 30, 89, 331, '3+24', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(643, 30, 89, 331, '3+25', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(644, 30, 89, 332, '4+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(645, 30, 89, 332, '4+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(646, 30, 89, 332, '4+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(647, 30, 89, 332, '4+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(648, 30, 89, 332, '4+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(649, 30, 89, 332, '4+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(650, 30, 89, 332, '4+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(651, 30, 89, 332, '4+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(652, 30, 89, 332, '4+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(653, 30, 89, 332, '4+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(654, 30, 89, 332, '4+11', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(655, 30, 89, 332, '4+12', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(656, 30, 89, 332, '4+13', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(657, 30, 89, 332, '4+14', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(658, 30, 89, 332, '4+15', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(659, 30, 89, 332, '4+16', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(660, 30, 89, 332, '4+17', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(661, 30, 89, 332, '4+18', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(662, 30, 89, 332, '4+19', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(663, 30, 89, 332, '4+20', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(664, 30, 89, 332, '4+21', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(665, 30, 89, 332, '4+22', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(666, 30, 89, 332, '4+23', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(667, 30, 89, 332, '4+24', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(668, 30, 89, 332, '4+25', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(669, 30, 89, 333, '5+1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(670, 30, 89, 333, '5+2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(671, 30, 89, 333, '5+3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(672, 30, 89, 333, '5+4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(673, 30, 89, 333, '5+5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(674, 30, 89, 333, '5+6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(675, 30, 89, 333, '5+7', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(676, 30, 89, 333, '5+8', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(677, 30, 89, 333, '5+9', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(678, 30, 89, 333, '5+10', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(679, 30, 89, 333, '5+11', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(680, 30, 89, 333, '5+12', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(681, 30, 89, 333, '5+13', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(682, 30, 89, 333, '5+14', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(683, 30, 89, 333, '5+15', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(684, 30, 89, 333, '5+16', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(685, 30, 89, 333, '5+17', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(686, 30, 89, 333, '5+18', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(687, 30, 89, 333, '5+19', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(688, 30, 89, 333, '5+20', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(689, 30, 89, 333, '5+21', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(690, 30, 89, 333, '5+22', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(691, 30, 89, 333, '5+23', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(692, 30, 89, 333, '5+24', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(693, 30, 89, 333, '5+25', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(783, 34, 97, 361, '1-1', 2, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(784, 34, 97, 361, '1-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(785, 34, 97, 361, '1-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(786, 34, 97, 361, '1-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(787, 34, 97, 361, '1-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(788, 34, 97, 362, '2-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(789, 34, 97, 362, '2-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(790, 34, 97, 362, '2-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(791, 34, 97, 362, '2-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(792, 34, 97, 362, '2-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(793, 34, 97, 363, '3-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(794, 34, 97, 363, '3-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(795, 34, 97, 363, '3-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(796, 34, 97, 363, '3-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(797, 34, 97, 363, '3-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(798, 34, 97, 364, '4-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(799, 34, 97, 364, '4-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(800, 34, 97, 364, '4-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(801, 34, 97, 364, '4-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(802, 34, 97, 364, '4-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(803, 34, 97, 365, '5-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(804, 34, 97, 365, '5-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(805, 34, 97, 365, '5-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(806, 34, 97, 365, '5-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(807, 34, 97, 365, '5-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(808, 34, 98, 366, '1-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(809, 34, 98, 366, '1-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(810, 34, 98, 366, '1-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(811, 34, 98, 366, '1-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(812, 34, 98, 366, '1-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(813, 34, 98, 367, '2-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(814, 34, 98, 367, '2-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(815, 34, 98, 367, '2-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(816, 34, 98, 367, '2-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(817, 34, 98, 367, '2-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(818, 34, 98, 368, '3-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(819, 34, 98, 368, '3-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(820, 34, 98, 368, '3-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(821, 34, 98, 368, '3-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(822, 34, 98, 368, '3-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(823, 34, 98, 369, '4-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(824, 34, 98, 369, '4-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(825, 34, 98, 369, '4-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(826, 34, 98, 369, '4-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(827, 34, 98, 369, '4-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(828, 34, 98, 370, '5-1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(829, 34, 98, 370, '5-2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(830, 34, 98, 370, '5-3', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(831, 34, 98, 370, '5-4', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(832, 34, 98, 370, '5-5', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `unit_co_ownership`
--

CREATE TABLE `unit_co_ownership` (
  `unitco_id` int(255) NOT NULL,
  `unit_id` int(255) NOT NULL,
  `co_owner_id` int(255) NOT NULL COMMENT 'user_id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `access_rights` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `access_rights`, `role`, `status`) VALUES
(1, 'khoo@ipms.com', '4297F44B13955235245B2497399D7A93', '1', 'superadmin', 'active'),
(2, 'ownerdemo@ipms.asia', 'E10ADC3949BA59ABBE56E057F20F883E', '1', 'owner', 'active'),
(3, 'tenantdemo@ipms.asia', 'E10ADC3949BA59ABBE56E057F20F883E', '1', 'tenant', 'active'),
(7, 'Jordan_smith@yahoo.con', 'E10ADC3949BA59ABBE56E057F20F883E', '1', 'owner', 'active'),
(9, 'steve@ipms.asia', 'E10ADC3949BA59ABBE56E057F20F883E', '1', 'owner', 'active'),
(13, 'managerdemo@ipms.asia', '51F6F76C0E2C5A77B4DB47236654A64D', '1', 'manager', 'active'),
(16, 'abyss@marianaTrench.com', '25D55AD283AA400AF464C76D713C07AD', '1', 'staff', 'active'),
(18, 'testing@email.com', 'ED3D2C21991E3BEF5E069713AF9FA6CA', '1', 'manager', 'active'),
(19, 'seiya-kun@mail.com', '4AD42E1718D9B7CB41D88F8A9B770820', '1', 'managersa', 'active'),
(22, 'manaria@mail.com', '549DFB184EA2638B468E6015405256AF', '1', 'managersa', 'active'),
(23, 'mrmax@mail.com', 'ED7A04BC3977041A638A4B1FD06F21E0', '1', 'owner', 'active'),
(24, 'kureha@mail.com', 'B8E50F13087129EBEE130F5512F94D58', '1', 'owner', 'active'),
(25, 'thegoose@mail.com', '3C2C57BAF8A00BCB88FF0A0A86CFC33D', '1', 'tenant', 'active'),
(26, 'max@mail.com', 'E10ADC3949BA59ABBE56E057F20F883E', '1', 'security', 'active'),
(27, 'bob@gmail.com', 'F7E5BA185F4CDC42F75FB7795EC9BF93', '1', 'managersa', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `visitor_id` int(255) NOT NULL,
  `unit_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ic` int(255) NOT NULL,
  `datetime_of_visit` varchar(255) NOT NULL,
  `visit_purpose` text NOT NULL,
  `entry_point` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `car_plate` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `reason` text NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`visitor_id`, `unit_id`, `name`, `ic`, `datetime_of_visit`, `visit_purpose`, `entry_point`, `image`, `car_plate`, `status`, `reason`, `remarks`) VALUES
(18, '549', 'Maxi', 2147483647, '2020-03-21', 'Non Non', 'Visitor Barrier', 'cola.jfif', '', 'Pending', '', 'Neko');

-- --------------------------------------------------------

--
-- Table structure for table `water_bills`
--

CREATE TABLE `water_bills` (
  `wb_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `due_date` date NOT NULL,
  `bill_from` date NOT NULL,
  `bill_to` date NOT NULL,
  `old_meter` int(11) NOT NULL,
  `new_meter` int(11) NOT NULL,
  `charge_amount` float NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total` float NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `water_bills`
--

INSERT INTO `water_bills` (`wb_id`, `unit_id`, `invoice_no`, `date`, `due_date`, `bill_from`, `bill_to`, `old_meter`, `new_meter`, `charge_amount`, `tax_id`, `total`, `status`) VALUES
(1, 144, 'WB-INV00000003', '2020-03-30', '2020-03-15', '2020-03-01', '2020-03-31', 5124, 5244, 700, 0, 700, 'pending'),
(2, 145, 'WB-INV00000004', '2020-03-30', '2020-03-15', '2020-03-01', '2020-03-31', 51243, 63423, 1500, 0, 1500, 'pending'),
(3, 696, 'WB-INV00000005', '2020-03-31', '2020-03-17', '2020-03-01', '2020-03-31', 242, 433, 573, 0, 573, 'pending'),
(4, 697, 'WB-INV00000006', '2020-03-31', '2020-03-17', '2020-03-01', '2020-03-31', 242, 323, 243, 0, 243, 'pending'),
(5, 698, 'WB-INV00000007', '2020-03-31', '2020-03-17', '2020-03-01', '2020-03-31', 423, 533, 330, 0, 330, 'pending'),
(6, 147, 'WB-INV00000008', '2020-03-31', '2020-03-11', '2020-03-25', '2020-03-31', 244, 544, 600, 0, 600, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `water_charge`
--

CREATE TABLE `water_charge` (
  `wc_id` int(11) NOT NULL,
  `units_from` int(11) NOT NULL,
  `units_to` int(11) NOT NULL,
  `rate` float NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `water_charge`
--

INSERT INTO `water_charge` (`wc_id`, `units_from`, `units_to`, `rate`, `cat_id`) VALUES
(1, 1, 100, 5, 0),
(2, 101, 200, 10, 0),
(3, 1, 100, 5, 2),
(4, 1, 200, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `work_order`
--

CREATE TABLE `work_order` (
  `wo_id` int(255) NOT NULL,
  `creator_id` int(255) NOT NULL COMMENT 'user_id',
  `report_id` int(255) NOT NULL,
  `datetime_created` varchar(255) NOT NULL,
  `quotation_deadline` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `quotation` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_order`
--

INSERT INTO `work_order` (`wo_id`, `creator_id`, `report_id`, `datetime_created`, `quotation_deadline`, `start_date`, `end_date`, `category`, `remarks`, `payment_status`, `quotation`, `photo`, `pic`, `status`) VALUES
(6, 2, 15, '2020-03-20 14:55', '2020-03-21', '2020-03-20', '2020-03-21', 'Aircond', '', '', '', '', '', 'Closed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `adhoc`
--
ALTER TABLE `adhoc`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`agreement_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ann_id`);

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`as_id`),
  ADD UNIQUE KEY `unit_id` (`unit_id`);

--
-- Indexes for table `assess_list`
--
ALTER TABLE `assess_list`
  ADD PRIMARY KEY (`assess_id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `block_staffs`
--
ALTER TABLE `block_staffs`
  ADD PRIMARY KEY (`bs_id`),
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`charge_id`);

--
-- Indexes for table `contractors`
--
ALTER TABLE `contractors`
  ADD PRIMARY KEY (`contractor_id`);

--
-- Indexes for table `developments`
--
ALTER TABLE `developments`
  ADD PRIMARY KEY (`development_id`);

--
-- Indexes for table `due_soon`
--
ALTER TABLE `due_soon`
  ADD PRIMARY KEY (`due_id`);

--
-- Indexes for table `electric_bills`
--
ALTER TABLE `electric_bills`
  ADD PRIMARY KEY (`eb_id`);

--
-- Indexes for table `electric_charge`
--
ALTER TABLE `electric_charge`
  ADD PRIMARY KEY (`ec_id`);

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD PRIMARY KEY (`ec_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `fire_insurance`
--
ALTER TABLE `fire_insurance`
  ADD PRIMARY KEY (`fire_id`),
  ADD UNIQUE KEY `unit_id` (`unit_id`);

--
-- Indexes for table `fire_list`
--
ALTER TABLE `fire_list`
  ADD PRIMARY KEY (`charge_id`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`floor_id`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`funds_id`);

--
-- Indexes for table `handbook`
--
ALTER TABLE `handbook`
  ADD PRIMARY KEY (`hb_id`);

--
-- Indexes for table `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`inci_id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insurance_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `invoice_settings`
--
ALTER TABLE `invoice_settings`
  ADD PRIMARY KEY (`iset_id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`license_id`);

--
-- Indexes for table `location_abbr`
--
ALTER TABLE `location_abbr`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `lpc_set`
--
ALTER TABLE `lpc_set`
  ADD PRIMARY KEY (`lpc_set_id`);

--
-- Indexes for table `management_charges`
--
ALTER TABLE `management_charges`
  ADD PRIMARY KEY (`mc_id`),
  ADD UNIQUE KEY `unit_id` (`unit_id`);

--
-- Indexes for table `manager_block_pivot`
--
ALTER TABLE `manager_block_pivot`
  ADD PRIMARY KEY (`mbp_id`);

--
-- Indexes for table `manage_body`
--
ALTER TABLE `manage_body`
  ADD PRIMARY KEY (`body_id`);

--
-- Indexes for table `minimum_charge`
--
ALTER TABLE `minimum_charge`
  ADD PRIMARY KEY (`min_id`);

--
-- Indexes for table `mt_ppm`
--
ALTER TABLE `mt_ppm`
  ADD PRIMARY KEY (`mtpm_id`);

--
-- Indexes for table `parking_space`
--
ALTER TABLE `parking_space`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`pd_id`),
  ADD UNIQUE KEY `ic` (`ic`);

--
-- Indexes for table `qrent_list`
--
ALTER TABLE `qrent_list`
  ADD PRIMARY KEY (`qlist_id`);

--
-- Indexes for table `quit_rent`
--
ALTER TABLE `quit_rent`
  ADD PRIMARY KEY (`qrent_id`),
  ADD UNIQUE KEY `unit_id` (`unit_id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`quotation_id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`rental_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`security_id`);

--
-- Indexes for table `service_contract`
--
ALTER TABLE `service_contract`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `sinking_funds`
--
ALTER TABLE `sinking_funds`
  ADD PRIMARY KEY (`sf_id`),
  ADD UNIQUE KEY `unit_id` (`unit_id`);

--
-- Indexes for table `sp_maintenance`
--
ALTER TABLE `sp_maintenance`
  ADD PRIMARY KEY (`spm_id`);

--
-- Indexes for table `tax_settings`
--
ALTER TABLE `tax_settings`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `ucategory_abbr`
--
ALTER TABLE `ucategory_abbr`
  ADD PRIMARY KEY (`ucat_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `unit_co_ownership`
--
ALTER TABLE `unit_co_ownership`
  ADD PRIMARY KEY (`unitco_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitor_id`);

--
-- Indexes for table `water_bills`
--
ALTER TABLE `water_bills`
  ADD PRIMARY KEY (`wb_id`);

--
-- Indexes for table `water_charge`
--
ALTER TABLE `water_charge`
  ADD PRIMARY KEY (`wc_id`);

--
-- Indexes for table `work_order`
--
ALTER TABLE `work_order`
  ADD PRIMARY KEY (`wo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `adhoc`
--
ALTER TABLE `adhoc`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `agreement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ann_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `as_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assess_list`
--
ALTER TABLE `assess_list`
  MODIFY `assess_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `block_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `charge_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `developments`
--
ALTER TABLE `developments`
  MODIFY `development_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `due_soon`
--
ALTER TABLE `due_soon`
  MODIFY `due_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `electric_bills`
--
ALTER TABLE `electric_bills`
  MODIFY `eb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `electric_charge`
--
ALTER TABLE `electric_charge`
  MODIFY `ec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  MODIFY `ec_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facility_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fire_insurance`
--
ALTER TABLE `fire_insurance`
  MODIFY `fire_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fire_list`
--
ALTER TABLE `fire_list`
  MODIFY `charge_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `floor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=371;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `funds_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `handbook`
--
ALTER TABLE `handbook`
  MODIFY `hb_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `incidents`
--
ALTER TABLE `incidents`
  MODIFY `inci_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `insurance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `invoice_settings`
--
ALTER TABLE `invoice_settings`
  MODIFY `iset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `license_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `location_abbr`
--
ALTER TABLE `location_abbr`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lpc_set`
--
ALTER TABLE `lpc_set`
  MODIFY `lpc_set_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `management_charges`
--
ALTER TABLE `management_charges`
  MODIFY `mc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_body`
--
ALTER TABLE `manage_body`
  MODIFY `body_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `minimum_charge`
--
ALTER TABLE `minimum_charge`
  MODIFY `min_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mt_ppm`
--
ALTER TABLE `mt_ppm`
  MODIFY `mtpm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `pd_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `qrent_list`
--
ALTER TABLE `qrent_list`
  MODIFY `qlist_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quit_rent`
--
ALTER TABLE `quit_rent`
  MODIFY `qrent_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `security_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_contract`
--
ALTER TABLE `service_contract`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sinking_funds`
--
ALTER TABLE `sinking_funds`
  MODIFY `sf_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sp_maintenance`
--
ALTER TABLE `sp_maintenance`
  MODIFY `spm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tax_settings`
--
ALTER TABLE `tax_settings`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ucategory_abbr`
--
ALTER TABLE `ucategory_abbr`
  MODIFY `ucat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unit_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=833;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `visitor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `water_bills`
--
ALTER TABLE `water_bills`
  MODIFY `wb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `water_charge`
--
ALTER TABLE `water_charge`
  MODIFY `wc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `work_order`
--
ALTER TABLE `work_order`
  MODIFY `wo_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `service_due` ON SCHEDULE EVERY 1 DAY STARTS '2020-03-03 14:48:05' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'inserts into due soon' DO BEGIN
	DECLARE i INT DEFAULT 0;
    DECLARE n INT DEFAULT 0;
    SET i = 0;
    SELECT COUNT(*) FROM service_contract INTO n;
	
    WHILE i < n DO
    	SET @due_period = (SELECT DATE_SUB(end_date, INTERVAL 7 DAY) FROM service_contract LIMIT i, 1);
        SET @id = (SELECT service_id FROM service_contract LIMIT i, 1);
        SET @name = (SELECT name FROM service_contract LIMIT i, 1);
        IF CURDATE() > @due_period THEN
            INSERT INTO due_soon (id_no, title, description, expiry_date, type) SELECT * FROM (SELECT service_id, name, description, end_date, 'Service Contract' FROM service_contract LIMIT i, 1) as tmp WHERE NOT EXISTS(SELECT * FROM due_soon WHERE due_soon.id_no = @id AND due_soon.title = @name);
    END IF;
    SET i = i + 1;
    END WHILE;
END$$

CREATE DEFINER=`root`@`localhost` EVENT `agree_due` ON SCHEDULE EVERY 1 DAY STARTS '2020-03-03 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
	DECLARE i INT DEFAULT 0;
    DECLARE n INT DEFAULT 0;
    SET i = 0;
    SELECT COUNT(*) FROM agreement INTO n;
	
    WHILE i < n DO
    	SET @due_period = (SELECT DATE_SUB(expiry_date, INTERVAL 7 DAY) FROM agreement LIMIT i, 1);
        SET @id = (SELECT agreement_id FROM agreement LIMIT i, 1);
        SET @name = (SELECT name FROM agreement LIMIT i, 1);
        IF CURDATE() > @due_period THEN
                INSERT INTO due_soon (id_no, title, description, expiry_date, type) SELECT * FROM (SELECT agreement_id, name, description, expiry_date, 'Agreement' FROM agreement LIMIT i, 1) as tmp WHERE NOT EXISTS(SELECT * FROM due_soon WHERE due_soon.id_no = @id AND due_soon.title = @name);
    END IF;
    SET i = i + 1;
    END WHILE;
END$$

CREATE DEFINER=`root`@`localhost` EVENT `insurance_due` ON SCHEDULE EVERY 1 DAY STARTS '2020-03-03 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
	DECLARE i INT DEFAULT 0;
    DECLARE n INT DEFAULT 0;
    SET i = 0;
    SELECT COUNT(*) FROM insurance INTO n;
	
    WHILE i < n DO
    	SET @due_period = (SELECT DATE_SUB(expiry_date, INTERVAL 7 DAY) FROM insurance LIMIT i, 1);
        SET @id = (SELECT insurance_id FROM insurance LIMIT i, 1);
        SET @name = (SELECT name FROM insurance LIMIT i, 1);
        IF CURDATE() > @due_period THEN
            INSERT INTO due_soon (id_no, title, description, expiry_date, type) SELECT * FROM (SELECT insurance_id, name, description, expiry_date, 'Insurance' FROM insurance LIMIT i, 1) as tmp WHERE NOT EXISTS(SELECT * FROM due_soon WHERE due_soon.id_no = @id AND due_soon.title = @name);
    END IF;
    SET i = i + 1;
    END WHILE;
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
