-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 05:59 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `postcode` int(10) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `lastName`, `userName`, `birthday`, `email`, `gender`, `phoneNumber`, `address`, `country`, `city`, `postcode`, `password`) VALUES
(3, 'Abid', 'uddin', 'Abid_uddin', '2017-08-07', 'akash@gmail.com', 'Male', '3430493483', 'fddf dff dfd', 'bangladesh', 'chittagong', 1234, 'aaaaa'),
(4, 'ghghgh', 'hghg', 'ghghgh_hghg', '0000-00-00', 'naeim@gmail.com', 'Male', '33434', 'fgf', 'fgfg', 'ss', 34, ''),
(14, 'ffffffffffffffffffff', 'ffffffffffffffffffff', 'fffffffffffffffffffff_ffffffff', '0000-00-00', 'eeeeeeeeeeeeeee', 'Male', '22222222', 'ddddddddd', 'ddddddddd', 'ddddddd', 222, '11'),
(15, 'jaka', 'papa', 'jaka_papa', '0000-00-00', 'a@dfdf.com', 'Male', '24334', 'dfdfdfdf', 'bd', 'ctg', 2222, '23'),
(17, 'fapa', 'kkkkk', 'fapa_kkkkk', '0000-00-00', 'abid@gmail.com', 'Male', '222222', 'sdssds', 'BD', 'CTG', 2222, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `firstName` (`firstName`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phoneNumber` (`phoneNumber`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
