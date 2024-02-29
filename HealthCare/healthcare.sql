-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 04:09 AM
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
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_workout`
--

CREATE TABLE `daily_workout` (
  `id_workout` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(225) DEFAULT NULL,
  `duration` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `healthy_food`
--

CREATE TABLE `healthy_food` (
  `id_food` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(225) DEFAULT NULL,
  `recipe` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sleep_program`
--

CREATE TABLE `sleep_program` (
  `id_program` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(225) DEFAULT NULL,
  `tips` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id_subscription` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `plan_description` varchar(225) NOT NULL,
  `plan_price` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `email`, `password`, `level`) VALUES
(1, 'user', 'user', 'user@gmail.com', '1234', 'user'),
(2, 'admin', 'admin', 'admin@gmail.com', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_workout`
--
ALTER TABLE `daily_workout`
  ADD PRIMARY KEY (`id_workout`);

--
-- Indexes for table `healthy_food`
--
ALTER TABLE `healthy_food`
  ADD PRIMARY KEY (`id_food`);

--
-- Indexes for table `sleep_program`
--
ALTER TABLE `sleep_program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id_subscription`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_workout`
--
ALTER TABLE `daily_workout`
  MODIFY `id_workout` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `healthy_food`
--
ALTER TABLE `healthy_food`
  MODIFY `id_food` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sleep_program`
--
ALTER TABLE `sleep_program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id_subscription` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
