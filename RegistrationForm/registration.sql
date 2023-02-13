-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 09:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `first`
--

CREATE TABLE `first` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `BirthDate` date NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `ffirstname` varchar(255) NOT NULL,
  `flastname` varchar(255) NOT NULL,
  `mfirstname` varchar(255) NOT NULL,
  `mlastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `StreetAddress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobilehome` int(10) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `second`
--

CREATE TABLE `second` (
  `id` int(11) NOT NULL,
  `hscinstitution` varchar(255) NOT NULL,
  `hscboard` varchar(255) NOT NULL,
  `hscscore` float NOT NULL,
  `sscinstitution` varchar(255) NOT NULL,
  `sscboard` varchar(255) NOT NULL,
  `sscscore` float NOT NULL,
  `currentlypursuing` varchar(255) NOT NULL,
  `currenteducation` varchar(255) NOT NULL,
  `overallpercentage` float NOT NULL,
  `backlogs` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `photograph` varchar(255) NOT NULL,
  `hscmarksheet` varchar(255) NOT NULL,
  `sscmarksheet` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `first`
--
ALTER TABLE `first`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `second`
--
ALTER TABLE `second`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `first`
--
ALTER TABLE `first`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `second`
--
ALTER TABLE `second`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
