-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 01:57 AM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` varchar(6) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(6, 'Ahmed', 'Mohamed', 'ahmed&gmail.com', '123', 'user', '2021-09-06', '2021-09-06'),
(7, 'Ahmed', 'Elbanna', 'ahmed&gmail.com', '1234', 'user', '2021-09-06', '2021-09-06'),
(8, 'Ahmed', 'Elbanna', 'ahmed&gmail.com', '$2y$10$6BH1hWUtayrjnuPNuwJE5.NreCTFiLuAL822TBoCIEf/wqcshSZw.', 'user', '2021-09-06', '2021-09-06'),
(9, 'Ahmed', 'Elbanna', 'bana@bana.com', '$2y$10$mxeKyXplwF6YDx2M/qZb..jzuQF23gycHHn2YQ.eygYzV05xqIwDq', 'user', '2021-09-06', '2021-09-06'),
(10, 'bebo', 'bebo', 'bebo@bebo.com', '$2y$10$Cdqairi6XGi1bRZUN1zljOGmV.mAPp5aK1Cq/llmqZnBL/42oIRZO', 'user', '2021-09-06', '2021-09-06'),
(11, 'bedo', 'bedo', 'bedo@bedo.com', '$2y$10$DOJ4rhyevxeGcEVDfD7JJOVITssEOg2zea3G48htV/MteslJUL/oe', 'user', '2021-09-06', '2021-09-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
