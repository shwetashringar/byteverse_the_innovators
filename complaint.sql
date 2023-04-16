-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 11:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `AID` int(11) NOT NULL,
  `AdEmail` varchar(40) NOT NULL,
  `AdPassword` varchar(255) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`AID`, `AdEmail`, `AdPassword`, `Created_at`) VALUES
(2, 'dsfsdf@gmail.com', '$2y$10$uMvOjeQDIwFJ95E5Xh46KObxyv8Tpmch2GJWIR5RHqDEQqC5e1F.u', '2023-04-13 16:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FID` int(11) NOT NULL,
  `UserID` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Feedback` longtext NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FID`, `UserID`, `Name`, `Email`, `Feedback`, `Created_at`) VALUES
(1, '8', 'asda', 'asdas', 'asdasd', '2023-04-13 16:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `STID` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Mobile` varchar(40) NOT NULL,
  `Place` varchar(40) NOT NULL,
  `Dept` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`STID`, `Name`, `Email`, `Password`, `Mobile`, `Place`, `Dept`, `created_at`) VALUES
(1, '0', 'vikas.roy619@gmail.com', '', '7894651324', 'Sultanpuri', 'Rain Water', '2023-04-13 17:26:02'),
(2, '0', 'sdfsdf', '', 'sdfsdf', 'Sultanpuri', 'Street Light', '2023-04-13 17:26:44'),
(3, 'v', 'vikas.roy619@gmail.com', '1', '7894561234', 'Sultanpuri', 'Street Light', '2023-04-13 17:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(40) NOT NULL,
  `Address` longtext NOT NULL,
  `City` varchar(40) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Mobile`, `Address`, `City`, `Password`, `created_at`) VALUES
(8, 'esfsd', 'dsfsdf@gmail.com', '7894561234', 'A/205 Sultanpuri', 'New Delhi', '$2y$10$uMvOjeQDIwFJ95E5Xh46KObxyv8Tpmch2GJWIR5RHqDEQqC5e1F.u', '2023-04-11 12:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_2`
--

CREATE TABLE `user_2` (
  `UserID2` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `City` varchar(40) NOT NULL,
  `Feedback` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_complain`
--

CREATE TABLE `user_complain` (
  `CID` int(11) NOT NULL,
  `UserID` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `land` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `place` varchar(255) NOT NULL,
  `location` varchar(40) NOT NULL,
  `CType` varchar(40) NOT NULL,
  `complain` longtext NOT NULL,
  `complain_level` varchar(40) NOT NULL,
  `Proof` varchar(40) NOT NULL,
  `Com_proof` varchar(40) NOT NULL,
  `Status` varchar(2) NOT NULL,
  `Com_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_complain`
--

INSERT INTO `user_complain` (`CID`, `UserID`, `name`, `land`, `address`, `place`, `location`, `CType`, `complain`, `complain_level`, `Proof`, `Com_proof`, `Status`, `Com_date`) VALUES
(1, '8', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'Sultanpuri', 'web Designing', 'Rain Water', 'sdfsdffdsf', 'web Designing', 'ANUJ.png', '', '0', '2023-04-13 18:04:42'),
(2, '8', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'Peeragadhi', 'Road Reconstruction', 'sdfsdfsdf', 'High', '2-768x768.png', '', '0', '2023-04-13 16:14:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`STID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_2`
--
ALTER TABLE `user_2`
  ADD PRIMARY KEY (`UserID2`);

--
-- Indexes for table `user_complain`
--
ALTER TABLE `user_complain`
  ADD PRIMARY KEY (`CID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `STID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_2`
--
ALTER TABLE `user_2`
  MODIFY `UserID2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_complain`
--
ALTER TABLE `user_complain`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
