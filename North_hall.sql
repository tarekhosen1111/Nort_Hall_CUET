-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2023 at 12:53 PM
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
-- Database: `North_hall`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `Aid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`Aid`, `email`, `password`) VALUES
(1, 'provost@cuet.ac.bd', 'c33367701511b4f6020ec61ded352059');

-- --------------------------------------------------------

--
-- Table structure for table `broom`
--

CREATE TABLE `broom` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `broom`
--

INSERT INTO `broom` (`id`, `email`, `room_no`) VALUES
(1, 'tarekhosen1111@gmail.com', '103');

-- --------------------------------------------------------

--
-- Table structure for table `Game`
--

CREATE TABLE `Game` (
  `id` int(255) NOT NULL,
  `game_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Game`
--

INSERT INTO `Game` (`id`, `game_name`) VALUES
(2, 'Cricket'),
(3, 'Football'),
(4, 'Volleyball');

-- --------------------------------------------------------

--
-- Table structure for table `game_aplay`
--

CREATE TABLE `game_aplay` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `email`, `password`) VALUES
(1, 'tarekhosen1111@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'abc@gmail.com', '2be9bd7a3434f7038ca27d1918de58bd'),
(4, 'kamalnagar@gmail.com', '64ca5a90512672173fee0cf651f6d92f');

-- --------------------------------------------------------

--
-- Table structure for table `Temp_transaction`
--

CREATE TABLE `Temp_transaction` (
  `email_id` varchar(50) NOT NULL,
  `transaction_id` varchar(250) NOT NULL,
  `Acc_No` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `account` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `transaction_id`, `account`, `email`) VALUES
(1, '1234', '01615553513', 'tarekhosen1111@gmail.com'),
(2, '8976', '01615866841', 'u1904084@student.cuet.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `vacant_room`
--

CREATE TABLE `vacant_room` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacant_room`
--

INSERT INTO `vacant_room` (`id`, `room_no`) VALUES
(4, 104),
(5, 105),
(6, 106),
(7, 107),
(8, 109),
(9, 110),
(11, 453),
(12, 890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `broom`
--
ALTER TABLE `broom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Game`
--
ALTER TABLE `Game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_aplay`
--
ALTER TABLE `game_aplay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Temp_transaction`
--
ALTER TABLE `Temp_transaction`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacant_room`
--
ALTER TABLE `vacant_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `Aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `broom`
--
ALTER TABLE `broom`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Game`
--
ALTER TABLE `Game`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `game_aplay`
--
ALTER TABLE `game_aplay`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vacant_room`
--
ALTER TABLE `vacant_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
