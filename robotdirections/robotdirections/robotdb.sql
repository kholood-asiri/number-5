-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 12:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `robot_actions`
--

CREATE TABLE `robot_actions` (
  `id` int(6) UNSIGNED NOT NULL,
  `action` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `robot_actions`
--

INSERT INTO `robot_actions` (`id`, `action`, `reg_date`) VALUES
(1, 'left', '2024-07-05 22:11:48'),
(2, 'right', '2024-07-05 22:11:53'),
(3, 'backward', '2024-07-05 22:11:56'),
(4, 'forward', '2024-07-05 22:11:59'),
(5, 'stop', '2024-07-05 22:12:10'),
(6, 'left', '2024-07-05 22:14:24'),
(7, 'backward', '2024-07-05 22:15:55'),
(8, 'left', '2024-07-05 22:20:58'),
(9, 'stop', '2024-07-05 22:28:44'),
(10, 'right', '2024-07-05 22:31:25'),
(11, 'stop', '2024-07-05 22:38:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `robot_actions`
--
ALTER TABLE `robot_actions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `robot_actions`
--
ALTER TABLE `robot_actions`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
