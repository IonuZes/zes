-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2025 at 08:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sneaker_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagini`
--

CREATE TABLE `imagini` (
  `id_imagine` int(11) NOT NULL,
  `id_sneaker` int(11) NOT NULL,
  `nume_imagine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imagini`
--

INSERT INTO `imagini` (`id_imagine`, `id_sneaker`, `nume_imagine`) VALUES
(1, 1, 'af1.png'),
(2, 2, 'tracks.png'),
(3, 3, 'Jordan1.png'),
(4, 4, 'sk8.png'),
(5, 5, 'lanvinc.png'),
(6, 6, 'BRB.png'),
(7, 7, 'diorb30.png'),
(8, 8, 'timbs.png'),
(9, 9, 'oof.png'),
(10, 10, 'CLA.png'),
(11, 11, 'ro.png'),
(12, 12, 'mm.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `street` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sneakers`
--

CREATE TABLE `sneakers` (
  `id` int(11) NOT NULL,
  `Model` text NOT NULL,
  `Marimi` text NOT NULL,
  `Pret` int(11) NOT NULL,
  `Marca` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sneakers`
--

INSERT INTO `sneakers` (`id`, `Model`, `Marimi`, `Pret`, `Marca`) VALUES
(1, 'Nike Air Force 1', '38, 39, 42, 43, 44 ', 550, 'Nike'),
(2, 'Balenciaga Track', '41, 43, 44', 3500, 'Balenciaga'),
(3, 'Nike Air Jordan 1', '38, 42, 43, 44', 750, 'Nike'),
(4, 'Louis Vuitton Skate', '37, 42, 43', 1900, 'Louis Vuitton'),
(5, 'Lanvin Curb', '40, 42, 43', 2000, 'Lanvin'),
(6, 'Off-White Be Right Back', '42, 44', 2700, 'Off-White'),
(7, 'Dior B30', '41', 2650, 'Dior'),
(8, 'Timberland 6 Inch Boot', '41, 45', 800, 'Timberland'),
(9, 'Off-White Out Of Office', '42, 44, 45', 2900, 'Off-White'),
(10, 'Christian Louboutin Astroloub', '42, 43, 44', 1200, 'Christian Louboutin'),
(11, 'Rick Owens DRKSHDW', '40, 41, 43, 44, 45', 3000, 'Rick Owens'),
(12, 'Maison Mihara Yasuhiro', '39', 4500, 'Maison Mihara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagini`
--
ALTER TABLE `imagini`
  ADD PRIMARY KEY (`id_imagine`),
  ADD KEY `id_sneaker` (`id_sneaker`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sneakers`
--
ALTER TABLE `sneakers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagini`
--
ALTER TABLE `imagini`
  MODIFY `id_imagine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sneakers`
--
ALTER TABLE `sneakers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imagini`
--
ALTER TABLE `imagini`
  ADD CONSTRAINT `imagini_ibfk_1` FOREIGN KEY (`id_sneaker`) REFERENCES `sneakers` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `sneakers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
