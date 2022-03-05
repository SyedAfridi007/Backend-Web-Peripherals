-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 09:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stars`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `refer` varchar(255) NOT NULL,
  `jobpost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `email`, `phone`, `degree`, `refer`, `jobpost`) VALUES
(0, 'Syed', 'syedafridi022@gmail.com', '01925785592', 'BBA', 'N/A', 'WEB DEVELOPER'),
(1, 'Syed Afridi', 'syedafridi104@gmail.com', '0125846546548', 'BSC', 'N/A', 'WEB'),
(3, 'Rony Tak', 'bean69@gmail.com', '1925785592', 'BSC', 'N/A', 'WEB DEVELOPER'),
(4, 'Karim Benx', 'bean69@gmail.com', '01925785592', 'BSC', 'N/A', 'WEB DEVELOPER'),
(5, 'Mr Bean', 'bean69@gmail.com', '01925785592', 'BSC', 'N/A', 'WEB DEVELOPER'),
(6, 'Roanldo CR7', 'syedafridi022@gmail.com', '01925785592', 'BSC', 'N/A', 'WEB DEVELOPER'),
(7, 'Richardo kaka', 'kaka8@gmail.com', '019254545585', 'BFF', 'N/A', 'WEB DEVELOPER'),
(8, 'David Beckham', 'kaka8@gmail.com', '01925785592', 'BSC', 'N/A', 'WEB DEVELOPER'),
(9, 'Tom Shelvy', 'syedafridi022@gmail.com', '01925785592', 'BSC', 'Syed Afridi', 'WEB DEVELOPER'),
(10, 'Syed Afridi', 'syedafridi022@gmail.com', '01925785592', 'BSC', 'Syed Afridi', 'WEB DEVELOPER'),
(12, 'Jhon Chena', 'syedafridi022@gmail.com', '01925785592', 'BSC', 'N/A', 'WEB DEVELOPER'),
(14, 'Arjen Robbin', 'syedafridi022@gmail.com', '01925785592', 'BSC', 'Syed Afridi', 'WEB DEVELOPER'),
(17, 'Cindarell Miss', 'syedafridi022@gmail.com', '01925785592', 'CSE', 'Syed Afridi', 'WEB DEVELOPER'),
(19, 'Miss Komola', 'komola022@gmail.com', '01925785592', 'BBA', 'Syed Afridi', 'WEB DEVELOPER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
