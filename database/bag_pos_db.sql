-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2026 at 06:00 AM
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
-- Database: `bag_pos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Juan Dela Cruz', 'juan07@gmail.com', '09647845679', '2026-10-10 22:28:13'),
(2, 'Kate Larinay', 'larona05@gmail.com', '09807065171', '2026-10-10 22:28:13'),
(3, 'John Hernadez', 'jbh@gmail.com', '09035567121', '2026-10-10 22:28:13'),
(4, 'Sara Duterte', 'saradutae@gmail.com', '09887766554', '2026-10-10 22:28:13'),
(5, 'Martin Romualdez', 'sickleav3@gmail.com', '09313167543', '2026-10-10 22:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `avatar`, `created_at`) VALUES
(1, 'admin06', '$2y$10$r47qzknSHpcFpjwhqDdLROC7YiwTcqeVQaeWJFJvLNjXNxorazfvG', 'Allyssa Yasona', NULL, '2026-10-10 22:28:13'),
(2, 'admin07', '$2y$10$zezWWvYab/g80bgA2IS.yuR4VgL81IKeR7lSCwCSJfYQRsL7CxxWG', 'Adrina Rosario', NULL, '2026-10-10 22:28:13'),
(3, 'manager01', '$2y$10$7BOQDIR6DjgrK9FQ3v31puoBJGiMarpsmjObJvGJDTRoGas4I5TIW', 'Frances Santos', NULL, '2026-10-10 22:28:13'),
(4, 'cashier01', '$2y$10$rUsngF6jy7lV9VsBveV6jed2NMprLqcTEsUU.gMqukmSimU0FxP0.', 'Mikee Ramos', NULL, '2026-10-10 22:28:13'),
(5, 'cashier02', '$2y$10$BEwvyh3VUaQtbQszjsGRG.FY1oUzVYkFB2UVsTrehnokl8wwDwCAi', 'Richard Gomez', NULL, '2026-10-10 22:28:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
