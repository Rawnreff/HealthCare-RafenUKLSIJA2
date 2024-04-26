-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 03:56 AM
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
  `id_masterkey` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` varchar(225) NOT NULL,
  `additional_information` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masterkey`
--

CREATE TABLE `masterkey` (
  `id_masterkey` int(11) NOT NULL,
  `id_personalization` int(11) NOT NULL,
  `key` varchar(225) NOT NULL,
  `trend_key` varchar(225) NOT NULL
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
(12, 'userpremium', 'userprem', 'userprem@gmail.com', '4321', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `fk_article_relation_masterkey` (`id_masterkey`);

--
-- Indexes for table `masterkey`
--
ALTER TABLE `masterkey`
  ADD PRIMARY KEY (`id_masterkey`),
  ADD KEY `fk_masterkey_relation_personalization` (`id_personalization`);

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
-- AUTO_INCREMENT for table `masterkey`
--
ALTER TABLE `masterkey`
  MODIFY `id_masterkey` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personalization`
--
ALTER TABLE `personalization`
  MODIFY `id_personalization` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id_subscription` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_relation_masterkey` FOREIGN KEY (`id_masterkey`) REFERENCES `masterkey` (`id_masterkey`);

--
-- Constraints for table `masterkey`
--
ALTER TABLE `masterkey`
  ADD CONSTRAINT `fk_masterkey_relation_personalization` FOREIGN KEY (`id_personalization`) REFERENCES `personalization` (`id_personalization`);

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
