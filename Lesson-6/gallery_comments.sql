-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 01, 2019 at 10:00 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalog`
--
CREATE DATABASE IF NOT EXISTS `catalog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `catalog`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `img` varchar(255) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `img`, `info`) VALUES
(1, 'Mango people t-shirt', 52, 'item1', 'Mango people t-shirt'),
(2, 'Mango people t-shirt', 52, 'item2', 'Mango people t-shirt'),
(3, 'Mango people t-shirt', 52, 'item3', 'Mango people t-shirt'),
(4, 'Mango people t-shirt', 52, 'item4', 'Mango people t-shirt'),
(5, 'Mango people t-shirt', 52, 'item5', 'Mango people t-shirt'),
(6, 'Mango people t-shirt', 52, 'item6', 'Mango people t-shirt'),
(7, 'Mango people t-shirt', 52, 'item7', 'Mango people t-shirt'),
(8, 'Mango people t-shirt', 52, 'item8', 'Mango people t-shirt'),
(10, 'Mango people t-shirt', 52, 'item10', 'Mango people t-shirt'),
(11, 'Mango people t-shirt', 52, 'item11', 'Mango people t-shirt'),
(13, 'Mango people t-shirt', 52, 'item13', 'Mango people t-shirt'),
(14, 'Mango people t-shirt', 52, 'item14', 'Mango people t-shirt'),
(15, 'Mango people t-shirt', 52, 'item15', 'Mango people t-shirt'),
(16, 'Mango people t-shirt', 52, 'item16', 'Mango people t-shirt'),
(17, 'WOMAN LEGGINGS', 52, 'item17', 'Mango people t-shirt'),
(18, 'NICE SWEATER', 52, 'item18', 'Mango people t-shirt'),
(19, 'Mango people t-shirt', 52, 'item19', 'Mango people t-shirt'),
(20, 'Mango people t-shirt', 52, 'item20', 'Mango people t-shirt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Database: `gallery`
--
CREATE DATABASE IF NOT EXISTS `gallery` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gallery`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `title`, `message`, `cat_id`) VALUES
(1, 'Nice cat number 2', 'Nice fluffy cat', 1),
(2, 'Cool photo', 'This is a nice cat 1', 3),
(3, 'Giant cat number 2', 'Giant cat number 2', 1),
(21, 'wvwevwevewvwevew', 'wevewvwevwevewv', 2),
(22, 'best cat ever', 'cat cat', 2);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `size` int(11) NOT NULL,
  `likes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `path`, `description`, `size`, `likes`) VALUES
(1, 'cat2.png', 'normal/cat2_500_400_nofilter.png', 'cat2', 351992, 21),
(2, 'cat3.png', 'normal/cat3_500_400_nofilter.png', 'cat3', 199966, 48),
(3, 'cat1.png', 'normal/cat1_500_400_nofilter.png', 'cat1', 407913, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `images` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
