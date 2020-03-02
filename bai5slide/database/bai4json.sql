-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 11:59 AM
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
-- Database: `bai4json`
--

-- --------------------------------------------------------

--
-- Table structure for table `homepageattr`
--

CREATE TABLE `homepageattr` (
  `id` int(11) NOT NULL,
  `attr_name` varchar(255) NOT NULL,
  `attr_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepageattr`
--

INSERT INTO `homepageattr` (`id`, `attr_name`, `attr_value`) VALUES
(1, 'sliders_topbanner', '[{\"title\":\"title 1\",\"description\":\"Desription 1\",\"btnLink\":\"Button Link 1\",\"btnText\":\"Button Text 1\",\"slideImage\":\"http:\\/\\/localhost.bai5slide\\/uploads\\/5.png\"},{\"title\":\"Title 2\",\"description\":\"Desription2\",\"btnLink\":\"Button Link 2\",\"btnText\":\"Button Text 2\",\"slideImage\":\"http:\\/\\/localhost.bai5slide\\/uploads\\/9.jpg\"},{\"title\":\"title 3\",\"description\":\"Desription 3\",\"btnLink\":\"Button Link 3\",\"btnText\":\"Button Text 3\",\"slideImage\":\"http:\\/\\/localhost.bai5slide\\/uploads\\/11.jpg\"},{\"title\":\"Ui\\/MW-46 ui contact groups\",\"description\":\"A Unbelieveable Saga of a Teacher And a Monkey\",\"btnLink\":\"111111111111\",\"btnText\":\"aaa\",\"slideImage\":\"http:\\/\\/localhost.bai5slide\\/uploads\\/60a2d8e117a4a986cddfec324f65afd4.png\"},{\"title\":null,\"description\":null,\"btnLink\":null,\"btnText\":null,\"slideImage\":\"http:\\/\\/localhost.bai5slide\\/uploads\\/\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `newscategory`
--

CREATE TABLE `newscategory` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newscategory`
--

INSERT INTO `newscategory` (`id`, `category_name`) VALUES
(247, 'category1'),
(250, 'category55555555');

-- --------------------------------------------------------

--
-- Table structure for table `newscontent`
--

CREATE TABLE `newscontent` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_category` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newscontent`
--

INSERT INTO `newscontent` (`id`, `title`, `id_category`, `content`, `created_at`) VALUES
(3, 'title1', 0, 'content1', 1583137841),
(4, 'title1', 0, 'content1', 1583137843);

--
-- Triggers `newscontent`
--
DELIMITER $$
CREATE TRIGGER `auto insert time create` BEFORE INSERT ON `newscontent` FOR EACH ROW BEGIN
SET NEW.created_at = UNIX_TIMESTAMP();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `name`, `data`) VALUES
(9, 'contact', '[{\"name\":null,\"phone\":null}]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homepageattr`
--
ALTER TABLE `homepageattr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newscategory`
--
ALTER TABLE `newscategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newscontent`
--
ALTER TABLE `newscontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homepageattr`
--
ALTER TABLE `homepageattr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newscategory`
--
ALTER TABLE `newscategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `newscontent`
--
ALTER TABLE `newscontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
