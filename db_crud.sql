-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 08:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `emp_image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isDeleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`emp_id`, `emp_name`, `address`, `phone`, `dob`, `emp_image`, `email`, `isDeleted`) VALUES
(22, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(23, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(24, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(25, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(26, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(27, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(28, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(29, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(30, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(31, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(32, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(33, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(34, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(35, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(36, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(37, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(38, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(39, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(40, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(41, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(42, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(43, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(44, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(45, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(46, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(47, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(48, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(49, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(50, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(51, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(52, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0'),
(53, 'deewab', 'pune', 5987456123, '2020-09-22', 'http://localhost/key/uploads/image_5f6998afaea08.ico', 'as@gmail.com', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
