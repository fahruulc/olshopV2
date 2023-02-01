-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 01:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `firstshop`
--

CREATE TABLE `firstshop` (
  `id` int(11) NOT NULL,
  `productName` varchar(300) NOT NULL,
  `productCategory` varchar(200) NOT NULL,
  `productImage` varchar(300) NOT NULL,
  `productPrice` varchar(100) NOT NULL,
  `productOwner` varchar(500) NOT NULL,
  `productLink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `firstshop`
--

INSERT INTO `firstshop` (`id`, `productName`, `productCategory`, `productImage`, `productPrice`, `productOwner`, `productLink`) VALUES
(12, 'Outer Simple Kece', 'outer', '63d8bcb516ba5.jpg', '65.000', 'fahrul', '404'),
(13, 'Sweater Polos', 'outer', '63d8bd0c0d460.jpg', '50.000', 'fahrul', '404'),
(14, 'Kemeja Casual', 'shirt', '63d8bd530dd54.jpg', '70.000', 'fahrul', '404'),
(15, 'Kemeja Formal', 'shirt', '63d8bdca0922a.jpg', '40.000', 'fahrul', '404'),
(16, 'Outer Rajut', 'terlaris', '63d8be1acfbc1.jpg', '50.000', 'fadil', '404'),
(17, 'Outer Formal Simple', 'terlaris', '63d8be644867b.jpg', '45.000', 'fadil', '404'),
(18, 'Pashmina Silk', 'terlaris', '63d8beb32f787.jpeg', '34.000', 'fadil', '404'),
(19, 'kemeja Hitam Polos', 'terlaris', '63d8bef299418.jpg', '50.000', 'fadil', '404');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilePicture` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `profilePicture`) VALUES
(1, 'fahrul', 'allahmahatahu', 'masyaallahganteng.jpg'),
(2, 'fadil', 'allahmahatahu', 'bismillah.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firstshop`
--
ALTER TABLE `firstshop`
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
-- AUTO_INCREMENT for table `firstshop`
--
ALTER TABLE `firstshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
