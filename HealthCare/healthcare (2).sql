-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 04:00 AM
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
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `id_personalization` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` varchar(225) NOT NULL,
  `additional_information` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personalization`
--

CREATE TABLE `personalization` (
  `id_personalization` int(11) NOT NULL,
  `id_subscription` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `preferences` varchar(225) NOT NULL,
  `additional_preferences` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personalization`
--

INSERT INTO `personalization` (`id_personalization`, `id_subscription`, `id_user`, `preferences`, `additional_preferences`) VALUES
(2, 3, 9, 'Heavy Workout', 'Abs, Shoulder'),
(4, 2, 12, 'Cardio', 'Running, Cycling'),
(6, 1, 11, 'Clean Eating', 'Real Food, Vegetables'),
(8, 7, 16, 'Yoga', 'Pilates'),
(9, 8, 18, 'Swimming', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id_subscription` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `plan_price` varchar(225) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id_subscription`, `id_user`, `plan_name`, `plan_price`, `status`) VALUES
(1, 11, 'premium plan', '20000', 'active'),
(2, 12, 'premium plan', '20000', 'active'),
(3, 9, 'premium plan', '20000', 'active'),
(4, 13, 'free plan', '0', 'active'),
(5, 14, 'free plan', '0', 'active'),
(7, 16, 'premium plan', '20000', 'active'),
(8, 18, 'premium plan', '20000', 'active');

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
(9, 'admin', 'admin', 'admin@gmail.com', '1234', 'admin'),
(11, 'user', 'user', 'user@gmail.com', '1234', 'user'),
(12, 'userpremium', 'userpremium', 'userpremium@gmail.com', '4321', 'user'),
(13, 'dummy1', 'dummy1', 'dummy1@gmail.com', 'dummy', 'user'),
(14, 'dummy2', 'dummy2', 'dummy2@gmail.com', 'dummy', 'user'),
(16, 'rafen', 'rafen', 'rafenn@gmail.com', 'rafen', 'user'),
(18, 'fofon', 'fofon', 'fofon@gmail.com', 'fofon', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `fk_personalization` (`id_personalization`);

--
-- Indexes for table `personalization`
--
ALTER TABLE `personalization`
  ADD PRIMARY KEY (`id_personalization`),
  ADD KEY `fk_personalization_relation_user` (`id_user`),
  ADD KEY `fk_personalization_relation_subscription` (`id_subscription`);

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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personalization`
--
ALTER TABLE `personalization`
  MODIFY `id_personalization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id_subscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_personalization` FOREIGN KEY (`id_personalization`) REFERENCES `personalization` (`id_personalization`);

--
-- Constraints for table `personalization`
--
ALTER TABLE `personalization`
  ADD CONSTRAINT `fk_personalization_relation_subscription` FOREIGN KEY (`id_subscription`) REFERENCES `subscription` (`id_subscription`),
  ADD CONSTRAINT `fk_personalization_relation_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
