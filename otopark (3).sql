-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2018 at 06:13 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otopark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `firstname` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `lastname` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(55) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'test6', 'deneme2', 'deneme@deneme.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'eqwewqe', 'ewqe', 'eqweq@xn--qwe-j50a.com', '636439893642ff6abc8036b79393f661'),
(4, 'eray', 'akartuna', 'erayakartuna@gmail.com', '4297f44b13955235245b2497399d7a93'),
(6, 'Burak', 'Burak', 'burak@burak.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'dasdas', 'qdas', 'esad@eqewq.com', 'adb5c2904d94816943467ccc9af93cc1'),
(8, 'eqwe', 'ewqe', 'eqwe@eqw.com', 'f670e808bf57388988eb1043f56ffc91'),
(9, 'ewqeqw', 'eqweq', 'eqweq@eqweq.com', '636439893642ff6abc8036b79393f661'),
(11, 'test', 'test', 'test@test2.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `plate_number` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `color` varchar(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `body_type` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `plate_number`, `model`, `color`, `body_type`, `created_at`, `updated_at`) VALUES
(5, '34 Burak 34', NULL, NULL, NULL, NULL, NULL),
(6, '34 Burak 34', NULL, NULL, NULL, NULL, NULL),
(7, '34 21312 34', NULL, NULL, NULL, NULL, NULL),
(8, '34 Burak 34', NULL, NULL, NULL, NULL, NULL),
(9, '34 Deneme 34', NULL, NULL, NULL, NULL, NULL),
(12, '34NP3048', 'renault_twingo', 'white', 'sedan-compact', '2018-04-26 14:29:55', '2018-04-26 14:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `car_parkings`
--

CREATE TABLE `car_parkings` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `car_entry_date` datetime DEFAULT NULL,
  `car_release_date` datetime DEFAULT NULL,
  `parking_space_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `car_parkings`
--

INSERT INTO `car_parkings` (`id`, `car_id`, `car_entry_date`, `car_release_date`, `parking_space_id`) VALUES
(1, 12, '2018-04-26 14:42:35', '2018-04-26 00:00:00', 1),
(2, 12, '2018-04-26 14:57:05', '2018-04-26 14:58:32', 2),
(3, 12, '2018-04-26 14:57:59', NULL, 3),
(4, 12, '2018-04-26 14:58:16', '2018-04-26 00:00:00', 1),
(5, 13, '2018-04-26 16:18:45', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `capacity` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `width` double DEFAULT NULL,
  `height` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `capacity`, `width`, `height`) VALUES
(1, 'Adı', '100', 1000, 500);

-- --------------------------------------------------------

--
-- Table structure for table `plan_parking_spaces`
--

CREATE TABLE `plan_parking_spaces` (
  `id` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `plan_id` int(11) NOT NULL,
  `x_coord` double DEFAULT '0',
  `y_coord` double DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '1',
  `width` double NOT NULL,
  `height` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `plan_parking_spaces`
--

INSERT INTO `plan_parking_spaces` (`id`, `name`, `plan_id`, `x_coord`, `y_coord`, `type`, `width`, `height`) VALUES
(1, 'A1', 1, 10, 20, 1, 100, 200),
(2, 'Demo', 1, 150, 100, 1, 300, 200),
(5, 'Yol', 1, 0, 300, 2, 1200, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_id` (`id`);

--
-- Indexes for table `car_parkings`
--
ALTER TABLE `car_parkings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_parking_spaces`
--
ALTER TABLE `plan_parking_spaces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `car_parkings`
--
ALTER TABLE `car_parkings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plan_parking_spaces`
--
ALTER TABLE `plan_parking_spaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
