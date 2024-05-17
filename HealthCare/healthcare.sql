-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 03:16 PM
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
  `content` varchar(10000) NOT NULL,
  `information` varchar(225) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `id_personalization`, `title`, `content`, `information`, `id_user`) VALUES
(2, 6, 'Push Ups', '<li>Start in a plank position. Your core should be tight, shoulders pulled down and back, and your neck neutral.</li> <li>Bend your elbows and begin to lower your body down to the floor. When your chest grazes it, extend your elbows and return to the start. Focus on keeping your elbows close to your body during the movement.</li> <li>Complete 3 sets of as many reps as possible.</li>', '3 sets - 20x reps', 11),
(12, 4, 'Single Leg Deadlifts', '<li>Begin standing with a dumbbell in your right hand, and your knees slightly bent.</li> <li>Hinging at the hips, begin to kick your left leg straight back behind you, lowering the dumbbell down toward the ground.</li> <li>When you reach a comfortable height with your left leg, slowly return to the starting position in a controlled motion, squeezing your right glute. Ensure that your pelvis stays square to the ground during the movement.</li> <li>Repeat 10 to 12 reps before moving the weight to your left hand and repeating the same steps on the left leg. It is suggested to do 3 sets of 10-12 reps per side.</li>', '3 sets - 2x reps/side', 12);

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
(4, 2, 12, 'Strength', 'Bodyweight Exercises'),
(6, 1, 11, 'Cardio', 'Running, Cycling');

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
(7, 16, 'premium plan', '20000', 'active'),
(8, 18, 'premium plan', '20000', 'active'),
(22, 33, 'premium plan', '20000', 'active'),
(30, 34, 'premium plan', '50000', 'active'),
(31, 35, 'premium plan', '50000', 'active'),
(32, 36, 'premium plan', '20000', 'active'),
(33, 37, 'premium plan', '20000', 'active'),
(34, 38, 'premium plan', '20000', 'active'),
(35, 39, 'premium plan', '50000', 'active'),
(36, 41, 'premium plan', '20000', 'active'),
(37, 42, 'premium plan', '50000', 'active'),
(39, 40, 'free plan', '0', 'active'),
(48, 49, 'free plan', '0', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `email`, `password`, `level`) VALUES
(11, 'user', 'user', 'user@gmail.com', 'user', 'user'),
(12, 'user1234', 'user1234', 'userprem@gmail.com', '1234', 'user'),
(16, 'rafen', 'rafen', 'rafen@gmail.com', '1234', 'user'),
(18, 'popon', 'popon', 'popon@gmail.com', '1234', 'user'),
(33, 'ra', 'ra', 'ra@email.com', '1234', 'user'),
(34, 'ojan', 'ojan', 'ojan@gmail.com', '1234', 'user'),
(35, 'hali', 'hali', 'hali@gmail.com', '1234', 'user'),
(36, 'rio', 'rio', 'rio@gmail.com', '1234', 'user'),
(37, 'salman', 'salman', 'salman@gmail.com', '1234', 'user'),
(38, 'qaysar', 'qaysar', 'qaysar@gmail.com', '1234', 'user'),
(39, 'fayyadh', 'fayyadh', 'fayyadh@gmail.com', '1234', 'user'),
(40, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin'),
(41, 'yoshi', 'yoshi', 'yoshi@gmail.com', '1234', 'user'),
(42, 'zhafif', 'zhafif', 'zhafif@gmail.com', '1234', 'user'),
(49, 'nonprem', 'nonprem', 'nonprem@gmail.com', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `fk_personalization` (`id_personalization`),
  ADD KEY `fk_user` (`id_user`);

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
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personalization`
--
ALTER TABLE `personalization`
  MODIFY `id_personalization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id_subscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_personalization` FOREIGN KEY (`id_personalization`) REFERENCES `personalization` (`id_personalization`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

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
