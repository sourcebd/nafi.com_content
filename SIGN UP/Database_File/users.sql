-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 06:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housingmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `date` datetime DEFAULT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `firstname`, `lastname`, `password`, `email`, `gender`, `profession`, `date`, `file`) VALUES
(1, 'Nafi', 'Mahmud', '123', 'nativetube71@gmail.com', 'Male', 'Engineer', '2020-11-17 00:17:29', ''),
(2, 'Rafi', 'Mahmud', '1234', 'nativetube72@gmail.com', 'Male', 'Doctor', '2020-11-17 00:17:29', ''),
(3, 'Safi', 'Mahmud', '12345', 'nativetube73@gmail.com', 'Male', 'Doctor', '2020-11-17 00:17:29', ''),
(7, 'Kholil', 'Rahman', '123456', 'nativetube71@gmail.com ', 'Male', 'Engineer', '2020-11-08 00:00:00', ''),
(8, 'Jahangir', 'Mia', '123', 'nafimahmud1996@gmail.com', 'Male', 'Engineer', '2020-11-08 00:00:00', ''),
(9, 'Jaman', 'Haque', '1234567', 'nafiaiubian17@gmail.com', 'Male', 'Engineer', '2020-11-09 00:00:00', ''),
(10, 'Tarek', 'Haque', '12345678', 'uzugessy-7559@yopmail.com', 'Male', 'Engineer', '2020-11-09 00:00:00', ''),
(11, 'Tanu', 'Mia', '123', 'uzugessy-7559@yopmail.com', 'Male', 'Engineer', '2020-11-09 00:00:00', ''),
(12, 'Ranu', 'Mia', '1234', 'uzugessy-7559@yopmail.com', 'Male', 'Engineer', '2020-11-09 00:00:00', ''),
(13, 'Tarek', 'Mia', '123', 'nativetube71@gmail.com ', 'Male', 'Engineer', '2020-11-10 00:00:00', ''),
(16, 'Jafor', 'Sadek', '1234', 'uzugessy-7559@yopmail.com', 'Male', 'Doctor', '2020-11-10 00:00:00', 'keymaker.exe'),
(17, 'Babu', 'Sarder', '12345', 'nativetube71@gmail.com ', 'Male', 'Doctor', '2020-11-10 00:00:00', ''),
(18, 'Shimanto', 'Das', '12', 'nativetube71@gmail.com', 'Male', 'Doctor', '2020-11-10 00:00:00', 'app.ico');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `Id` (`Id`),
  ADD UNIQUE KEY `Id_2` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
