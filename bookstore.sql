-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 06:00 PM
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
  `email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `user_password`) VALUES
(3, 'med', 'abrache', 'abrache@fgfg', '$2y$10$8tOIvvsROmDp6WnWROeWSOoARb9Q6tIClx2fMVb2JQNiLhDWd6Z22'),
(4, 'med', 'abr', 'med@gmail.com', '$2y$10$8TGT3/C8h.eeydcmQJfuMOk7MifQ04uMT88F.pI29QMoVdMgw2Hvq'),
(5, 'Nadir', 'Inab', 'Nadir@gmail.com', '$2y$10$5Vmkgafuw2vWhRFJeJM1u.AgOsyyjZUuHkR0NpxgRiSytU8TJA5W6'),
(6, 'mohamed', 'salah', 'mo@gmail.com', '$2y$10$IiY0zH7JJC1nuv9832JWYu9AFK99c6MizObybAsB8eWWlJE/BdS9a'),
(7, 'med', 'jal', 'denia@bikala', '$2y$10$rtL0r5AFbgGRl2IYi7TYb.u/P8kpe7N1.59zaff0Ig0tnmlxBuAcW'),
(8, 'med', 'abr', 'abrache@school.com', '$2y$10$VkEbIY9.H.KDzoDOboH4eeQnHrhe0ebVGRL0mGrgbN2y.ZxstdCvq');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `writer_name` varchar(255) DEFAULT NULL,
  `book_type` varchar(255) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `book_date` date DEFAULT NULL,
  `about` text DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`image`, `id`, `book_name`, `writer_name`, `book_type`, `admin_id`, `book_date`, `about`, `quantity`, `price`) VALUES
('', 8, 'Est mollit ut quibu', 'Consequatur Aut qua', 'Quisquam ut error au', NULL, '1995-02-25', 'Quidem natus pariatu', 31, 66),
('', 9, 'Voluptatum reprehend', 'Quis dolorum natus r', 'Dolores ex earum fug', NULL, '1997-11-02', 'Voluptatem illo mol', 91, 668);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
