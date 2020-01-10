-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 11:01 AM
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
-- Database: `manage_members`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_list`
--

CREATE TABLE `member_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `total_order` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_list`
--

INSERT INTO `member_list` (`id`, `name`, `age`, `phone_number`, `avatar`, `facebook`, `total_order`) VALUES
(1, 'sdsaasda', '1', '1234467', 'http://localhost/php/studyphp/manage_members/Fileupload/9.jpg', '3', '4'),
(2, 'sdsaasda', '1', '1', 'http://localhost/php/studyphp/manage_members/Fileupload/9.jpg', '1', '1'),
(3, 'sdsaasda', '1', '1234467', 'http://localhost/php/studyphp/manage_members/Fileupload/1.jpg', '1', '1'),
(4, 'sdsaasda', '1', '1234467', 'http://localhost/php/studyphp/manage_members/Fileupload/', '3', '44444444444'),
(5, 'sdsaasda', '1', '1234467', 'http://localhost/php/studyphp/manage_members/Fileupload/9.jpg', '3', '3'),
(6, 'sdsaasda', '1', '1234467', 'http://localhost/php/studyphp/manage_members/Fileupload/9.jpg', '3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_list`
--
ALTER TABLE `member_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_list`
--
ALTER TABLE `member_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
