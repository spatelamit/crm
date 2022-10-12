-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 12:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT 0,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `sub_parent_id` int(11) NOT NULL DEFAULT 0,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `role` int(11) DEFAULT 0,
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `creation_date` datetime DEFAULT current_timestamp(),
  `status` enum('0','1') DEFAULT '1' COMMENT '1-Active,0-Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `company_id`, `parent_id`, `sub_parent_id`, `username`, `password`, `full_name`, `email`, `contact`, `dob`, `role`, `last_login`, `creation_date`, `status`) VALUES
(11, 1, 0, 0, 'prashant.bulk24sms', '123456', 'Prashant', 'prashant.bulk24sms@gmail.com', NULL, NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(12, 2, 0, 0, 'testuser', '123456', 'Test User', 'testuser@gmail.com', NULL, NULL, 3, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(13, 1, 0, 0, 'jairai', '123456', 'jai', 'jairai@gmail.com', NULL, NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(14, 1, 0, 0, 'tomcush', '123456', 'tom', 'tomcush@gmail.com', NULL, NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(15, 1, 0, 0, 'smitpatel', '123456', 'Amit', 'smitpatel@gmail.com', NULL, NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(16, 1, 11, 0, 'serveradmin', '123456', 'server', 'serveradmin@srts.in', NULL, NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(17, 1, 0, 0, 'saloniuser', '123456', 'saloni', 'saloniuser@gmail.com', NULL, NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(18, 1, 0, 0, 'ashish', '123456', 'ashish', 'ashish.singh@gmail.com', NULL, NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(20, 1, 12, 0, 'Rajat123', '123456', 'Rajat Chouhan', 'rajatchouhan@gmail.com', '9996857412', NULL, 3, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(23, 1, 12, 0, 'raj', '123456', 'Raj', 'raj@gmail.com', '7412589630', NULL, 3, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(24, 1, 12, 0, 'mymember', '123456', 'My member', 'mymember@gmail.com', '123456789', NULL, 5, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(26, 1, 12, 0, 'ashishpanwar', 'as', 'ashish', 'bulk24sms.ashishpanwar@gmail.com', '9897898989', NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(29, 1, 0, 0, 'test1011', '123456', 'test 1011', 'test1011@gmail.com', '', NULL, NULL, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(30, 1, 12, 0, 'naveen', '123456', 'Naveen', 'naveen@gmail.com', '7894561230', NULL, 3, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(31, 1, 0, 0, 'neha', 'Neha@4321', 'Pratiksha Tomar', 'neha@srts.in', '8602200100', NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(32, 1, 12, 0, 'rishu', '123456', 'Aman Singh', 'rishu@gmail.com', '8982806000', NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(33, 1, 12, 0, 'rish18delwar', '123456', 'Rishanshu Delwar', 'rish18delwar@gmail.com', '9713419185', NULL, 3, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(34, 1, 31, 38, 'pawanmakode', 'srts@101', '  Pawan Makode', 'business3@srts.in', '8602200101 ', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(35, 1, 12, 0, 'TodayTest', '123456', 'test', 'todaytest@gmail.com', '7894561230', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(36, 1, 35, 0, 'crmadmin', '123456', 'CRM admin', 'crmadmin@gmail.com', '7894561230', NULL, 4, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(37, 1, 34, 0, 'neha', '123456', 'neha', 'neha@srts.in', '101', NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(38, 1, 0, 0, 'ahsansheikh', '123456', 'Ahsan Sheikh', 'business@bulk24sms.com ', '7880003690', NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(39, 1, 31, 38, NULL, 'Nikhil#4321', '  Nikhil Garg', 'nikhil@bulk24sms.com', '9582045493  ', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(40, 1, 31, 38, NULL, 'Rahul%4321', '  Rahul Gohel', 'rahul@bulk24sms.com', '7880005190  ', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(41, 1, 31, 38, NULL, 'Mahesh@4321', '  Mahesh Naik', 'mahesh@bulk24sms.com', '7880006190  ', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(42, 1, 31, 38, NULL, 'Kumud@4321', ' Kumud Pandey', 'kumud@srts.in', '9893300050 ', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(43, 1, 31, 38, 'pratik', 'Pratik@4321', ' Pratik Shrivastav', 'pratik@bulk24sms.com', '7880004690 ', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(44, 1, 34, 0, NULL, 'p', 'Pawan Makode', 'business3@srts.in', '8602200101', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(45, 1, 115, 0, 'swap', '123456', 'test', 'hub66008@gmail.com', '', NULL, 2, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(47, 1, 45, 46, 'swap', '123456', ' Swapnil', 'swaprp51@gmail.com', '   ', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(48, 1, 45, 46, 'jay', '123456', ' jay ', 'jay@gmail.com', '9988776677 ', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(67, 1, 45, 0, 'jaya', '123456', 'Jaya', 'jaya@gmail.com', '9638521470', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '0'),
(114, 1, 45, 0, 'demo2', '123456', 'demo2', 'demo2@gmail.com', '9988776677', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '0'),
(115, 1, 123, 0, 'ceo', '1234567', 'CEO', 'CEO@gmail.com', '9130139351', NULL, 1, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(116, 1, 115, 0, NULL, '123456', 'Demo_test', 'testdemo@gmail.com', '', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(117, 1, 48, 45, 'demo6', '123456', 'jay', 'demo6@gmail.com', '1465261245', NULL, 6, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(119, 1, 115, 0, NULL, '123456', 'demo1', 'demo1@gmail.com', '3242423423', NULL, 3, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '0'),
(121, 1, 45, 0, NULL, '123456', 'demo', 'demo1@gmail.com', '', NULL, 4, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '0'),
(122, 2, 0, 0, 'swapnil', '123456', 'Swapnil Rajput', 'bulk24sms.swap@gmail.com', NULL, NULL, 31, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(123, 1, 0, 0, 'mayank', '1234567', 'Mayank', 'mayank@gmail.com', '1234567890', NULL, 33, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(125, 3, 0, 0, 'swapnil', '123456', 'swapnil', 'bul24sms.swap@gmail.com', '9130139351', NULL, 35, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(128, 1, 123, 0, NULL, '123456', 'HR', 'hr@gmail.com', '1478523690', NULL, 4, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(129, 3, 125, 0, 'bulk24sms.ashishpanwar@gmail.com', '123456', 'Ashish Panwar', 'bulk24sms.ashishpanwar@gmail.com', '9171401140   ', NULL, 37, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(130, 3, 125, 0, 'Amit@bulk24sms.com', '123456', 'Amit Patel', 'Amit@bulk24sms.com', '1234567890', NULL, 39, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(131, 3, 125, 0, 'Serveradmin@srts.in', '123456', 'Bharat Vishwakarma', 'Serveradmin@srts.in', '1234567890', NULL, 38, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(132, 3, 125, 0, 'anitrajverma@gmail.com', '123456', '  Anitraj Verma', 'anitrajverma@gmail.com', '1234567890  ', NULL, 40, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(133, 3, 125, 0, 'neha@srts.in', '123456', 'Neha', 'neha@srts.in', '1234567890', NULL, 45, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(134, 4, 0, 0, 'neha', '123456', 'neha', 'neha1@srts.in', '8602200100', NULL, 51, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(135, 3, 125, 0, 'tiwari12mayank@gmail.com', '123456', 'Mayank Sir ', 'tiwari12mayank@gmail.com', '1234567890    ', NULL, 0, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(136, 3, 125, 0, 'pankaj.manjhi@srts.in', '123456', 'Pankaj', 'pankaj.manjhi@srts.in', '1234567890', NULL, 41, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(137, 3, 125, 0, 'Mahesh.jat@srts.in', '123456', 'Mahesh', 'Mahesh.jat@srts.in', '123456789', NULL, 41, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(138, 3, 125, 0, 'saksham.gupta@srts.in', '123456', 'Saksham', 'saksham.gupta@srts.in', '123456789', NULL, 41, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(139, 3, 125, 0, 'bulk24sms.swap@gmail.com', '123456', 'Swapnil', 'bulk24sms.swap@gmail.com', '1234567890', NULL, 41, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(140, 5, 0, 0, 'mayank', '123456', 'Mayank Tiwar', 'mayank@yahoo.com', '1234567890', NULL, 55, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(141, 5, 140, 0, 'mayank12', 'Mayank1234', 'mayank tiwari', 'mayank@bulk24sms.com', '8982804000', NULL, 57, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1'),
(142, 1, 45, 0, 'dasdasd', 'Swapnil12345', 'adasda', 'bulk24sms.swap123@gmail.com', '14785236911', NULL, 49, '2022-10-10 17:56:32', '2022-10-10 18:01:02', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `company_id` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
