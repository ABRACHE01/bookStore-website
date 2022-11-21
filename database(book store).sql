-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 10:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `phoneNumber`, `email`, `user_password`) VALUES
(1, 'mohamed', 'abrache', 45645645, 'abrache200 ', '$2y$10$GFWa21AuG5x2SXRP2WqG1ORnwvwSPw.rrc9EwuEHdft.qAmOBBW3y'),
(2, 'mohamed', 'abrache', 45645645, 'abrache200 ', '$2y$10$wqYYaQt/CaoGe119a4xfqefgHjLm0bsnEfQ/Cp9OdWhycLqk0rmN2'),
(3, 'mohamed', 'abrache', 45645645, 'abrache200 ', '$2y$10$t8EUF0.VCpHRaCA87PJu3u6a7vrzo3G.hR.JN9D9Ggk9.R93S.F0C'),
(4, 'mohamed', 'abrache', 45645645, 'abrache200 ', 'tarek'),
(5, 'mohamed', 'abrache', 45645645, 'abrache200 ', '$2y$10$bAd6v4UFItPpZFEUoRu.iuo9qq1NLSO0ePUczg4P6/.dam1BqDCnG'),
(6, 'mohamed', 'abrache', 45645645, 'abrache200 ', '$2y$10$yu8KJZfeiLjvRBIyOxXA8uX5Sq4TRhf5fsL0jHCrglxxPcoHeeMVS'),
(7, 'mohamed', 'abrache', 45645645, 'abrache200 ', '$2y$10$cZ7XlMs8kIAIMvW1htcDp.nfr4eO0XG61t0TYSsNdQVjpxaKugoFu'),
(8, 'mohamed', 'abrache', 45645645, 'abrache200 ', '$2y$10$YFlB3GSawBP1YdSk5tHD0OyMj/djDr7ACEGVhG2kQG5VPztlNoZ3O');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `writer_name` varchar(255) DEFAULT NULL,
  `book_type` varchar(255) NOT NULL,
  `book_date` date DEFAULT NULL,
  `about` text DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `writer_name`, `book_type`, `book_date`, `about`, `quantity`, `price`) VALUES
(6, 'dfgdfgd', 'dfgdfg', 'wxcxw', '2022-11-19', 'xcvsdfsdf', 100, 456),
(7, 'Molestias laborum do', 'Perspiciatis ration', 'Doloremque aut volup', '1986-03-13', 'In voluptate magni a', 72, 369);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
