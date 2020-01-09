-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 08:26 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bai1dulieu`
--

-- --------------------------------------------------------

--
-- Table structure for table `so_sim`
--

CREATE TABLE `so_sim` (
  `id` int(11) NOT NULL,
  `so` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `so_sim`
--

INSERT INTO `so_sim` (`id`, `so`, `gia`) VALUES
(1, '0000000000', '1000000'),
(6, '11111111111111111111111', '2000000'),
(8, '333333', '3000000'),
(9, '000000000', '66666666666'),
(10, '1111111111111111111111', '112222222222222222222222222'),
(11, '000000000', '66666666666'),
(12, '222222222', '333333333333'),
(13, '222222222', '333333333333'),
(14, '222222222', '333333333333'),
(15, '222222222', '333333333333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `so_sim`
--
ALTER TABLE `so_sim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `so_sim`
--
ALTER TABLE `so_sim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
