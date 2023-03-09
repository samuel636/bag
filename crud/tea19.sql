-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 09, 2023 at 08:37 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tea19`
--

-- --------------------------------------------------------

--
-- Table structure for table `baginfo`
--

CREATE TABLE `baginfo` (
  `bagname` varchar(60) NOT NULL,
  `cate` varchar(60) NOT NULL,
  `bagid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `baginfo`
--

INSERT INTO `baginfo` (`bagname`, `cate`, `bagid`) VALUES
('', 'Women', 34),
('', 'Men', 35),
('medium', 'childern', 36),
('samll', 'childern', 37),
('samll', 'childern', 38),
('smal', 'childern', 39);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `Date` date NOT NULL,
  `deiD` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`Date`, `deiD`) VALUES
('2023-03-08', 24),
('2023-03-03', 25),
('2023-03-03', 26),
('2023-03-02', 27),
('2023-03-10', 28),
('2023-03-09', 29),
('2023-03-02', 30);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `adress` varchar(60) NOT NULL,
  `phone` int DEFAULT NULL,
  `userid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `email`, `adress`, `phone`, `userid`) VALUES
('able', 'samuel22008@student.hamk.fi', 'merkat', 98765432, 3),
('samita', 'samuel22008@student.hamk.fi', '4kilo', 342423, 4),
('DSA', 'samueltesema69@gmail.com', '5kilo', 3423423, 5),
('jacob escdous', 'samueltesema69@gmail.com', 'merkato', -1, 6),
('samita', 'samueltesema69@gmail.com', 'merkato', 23, 7),
('samuell', 'samyel@gmail.com', 'addis ababa', 2332, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baginfo`
--
ALTER TABLE `baginfo`
  ADD PRIMARY KEY (`bagid`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`deiD`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baginfo`
--
ALTER TABLE `baginfo`
  MODIFY `bagid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `deiD` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
