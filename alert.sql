-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 03:54 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alert`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `id` int(10) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address` varchar(40) NOT NULL,
  `telephone` int(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`id`, `first_name`, `last_name`, `address`, `telephone`, `password`) VALUES
(1, 'Maxwell', 'okazaki', 'E115/10,KANDA HIGHWAY,ACCRA', 244629544, '2020'),
(2, 'Maxwell', 'konadu', 'E115/10,KANDA HIGHWAY,ACCRA', 244629544, '90871'),
(3, 'kofi ', 'sarpong', 'am 20 blk x, Konongo', 244480574, '3138'),
(4, 'raymond', 'dominic', 'E115/10,KANDA HIGHWAY,ACCRA', 244629678, '23145'),
(5, 'raymond', 'dominic', 'E115/10,KANDA HIGHWAY,ACCRA', 244629544, '56589'),
(6, 'raymond', 'oduro', 'E115/10,KANDA HIGHWAY,ACCRA', 244629544, '23415'),
(7, 'presnel', 'kimbembe', 'E115/10,KANDA HIGHWAY,ACCRA', 244629590, '86432'),
(8, 'kofi ', 'agyei', 'am 20 blk x, Konongo', 244480574, '2671g'),
(9, 'Max', 'suarez', 'E115/10,KANDA HIGHWAY,ACCRA', 244629544, '3120'),
(10, 'Essien', 'michael', 'E115/10,KANDA HIGHWAY,ACCRA', 244629544, 'ghtjl'),
(11, 'Alex', 'Antwi', 'GPS112456', 249435806, 'k0j0');

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE `crime` (
  `id` int(10) NOT NULL,
  `crime` text NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`id`, `crime`, `location`) VALUES
(1, 'rape', ''),
(2, 'robbery', ''),
(3, 'fraud', 'E115/10 Kanda'),
(4, 'fraud', 'E115/10 Kanda'),
(5, 'drugs', 'E115/10 Kanda'),
(6, 'fraud', 'E115/10 Kanda'),
(7, 'manslaughter', 'kawkudi'),
(8, 'murder', 'Konongo lorry park'),
(9, 'drugs', 'millenium junction konongo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crime`
--
ALTER TABLE `crime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `crime`
--
ALTER TABLE `crime`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
