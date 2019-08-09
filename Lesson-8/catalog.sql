-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 09, 2019 at 04:08 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(5, 1, 11, 4),
(7, 1, 13, 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(1, 'pupkin', '827ccb0eea8a706c4c34a16891f84e7b', 'pupkin@mail.ru'),
(2, 'ivanov', '827ccb0eea8a706c4c34a16891f84e7b', 'ivanov@mail.ru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
