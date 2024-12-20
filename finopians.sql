-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 06:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finopians`
--

-- --------------------------------------------------------

--
-- Table structure for table `userstable`
--

CREATE TABLE `userstable` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userstable`
--

INSERT INTO `userstable` (`id`, `username`, `password`) VALUES
(1, 'Jwl', '$2y$10$yVDIrjnWYkRkOMX6.f/fb.boFPgNNm9d1FRmoNFY.E2w2UgougrLO'),
(3, 'Joe', '$2y$10$JsaT5lsD3UgYYJ1q.KOg7evLU3sG9veWvl4RvHfqVZWZB6y44bgJi');

-- --------------------------------------------------------

--
-- Table structure for table `widgetstable`
--

CREATE TABLE `widgetstable` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userstable`
--
ALTER TABLE `userstable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `widgetstable`
--
ALTER TABLE `widgetstable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userstable`
--
ALTER TABLE `userstable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `widgetstable`
--
ALTER TABLE `widgetstable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `widgetstable`
--
ALTER TABLE `widgetstable`
  ADD CONSTRAINT `widgetstable_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userstable` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
