-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2017 at 06:53 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mishipay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('kalyan', 'kalyan@gmail.com', 'kalyan@11'),
('mishipay', 'mishipay@gmail.com', 'mishipay');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(200) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_brand` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_description` varchar(400) NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_count` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `product_id`, `product_name`, `product_brand`, `product_image`, `product_description`, `product_price`, `product_count`) VALUES
(18, 'shoes', 'CASUAL SHOES', 'Adidas', 'shoes2', 'New arrival', 1400, 6),
(19, 'shoes', 'Sports shoes', 'Puma', 'shoes3', 'New arrival', 421, 8),
(20, 'shoes', 'Sports shoes', 'Nike', 'shoes4', 'New arrival', 42, 24),
(21, 'shoes', 'Sports shoes', 'Adidas', 'shoes5', 'New arrival', 42, 6),
(24, 'flipflops', 'cheppals', 'Adidas', 'flipflops1', 'New arrival', 12, 6),
(25, 'flipflops', 'flipflops', 'Nike', 'flipflops2', 'New arrival', 25, 4),
(26, 'sandles', 'sandles', 'Adidas', 'sandles1', 'New arrival', 50, 5),
(27, 'flipflops', 'flipflops', 'Puma', 'flipflops3', 'New arrival', 23, 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `product_brand` varchar(200) DEFAULT NULL,
  `product_image` varchar(200) DEFAULT NULL,
  `product_cost` int(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `email`, `product_id`, `product_brand`, `product_image`, `product_cost`) VALUES
(1, 'kalyan1@gmail.com', 'shoes12', 'Adidas', 'shoes4', 2400),
(2, 'kalyan1@gmail.com', 'shoes11', 'Adidas', 'shoes1', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('kalyan babu', 'kalyan11@gmail.com', 'kalyan@11'),
('kalyan babu', 'kalyan1@gmail.com', 'kalyan@11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
