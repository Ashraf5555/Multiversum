-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 11:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiversum`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `FullName`, `email`, `subject`, `created`) VALUES
(4, 'Colin Chaplin', 'colinchaplin@example.com', 'sadwad', '2019-05-08 17:29:00'),
(6, 'Arnold Hall', 'arnoldhall@example.com', 'Manager', '2019-05-09 19:17:00'),
(7, 'Toni Adams', 'alvah1981@example.com', 'pay something', '2019-05-09 19:19:00'),
(8, 'Donald Perry', 'donald1983@example.com', 'Employee', '2019-05-09 19:20:00'),
(9, 'Joe McKinney', 'nadia.doole0@example.com', 'Employee', '2019-05-09 19:20:00'),
(10, 'Angela Horst', 'angela1977@example.com', 'Assistant', '2019-05-09 19:21:00'),
(11, 'James Jameson', 'james1965@example.com', 'Assistant', '2019-05-09 19:32:00'),
(12, 'Daniel Deacon', 'danieldeacon@example.com', 'Manager', '2019-05-09 19:33:00'),
(13, 'Ahmed A Alothman', 'ahmedalothman966@gmail.com', 'bnjlb,', '2021-03-25 16:05:00'),
(119366, 'Ahmed A AlothmanAlothman', 'ahmedalothman966@gmail.com', 'ssg', '2021-03-31 12:36:57'),
(119367, 'xzAlothman', 'ahmedalothman966@gmail.com', 'zxc', '2021-04-07 22:37:27'),
(119368, 'AhmedAlothman', 'ahmedalothman966@gmail.com', 'ik had een  probleem  met  een product', '2021-04-09 12:31:27'),
(119369, 'zxczxc', 'ahmedalothman966@gmail.com', 'xczxc', '2021-04-12 17:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `EAN` int(11) NOT NULL,
  `kleur` varchar(255) DEFAULT NULL,
  `Merk` varchar(255) DEFAULT NULL,
  `Verbinding` varchar(255) DEFAULT NULL,
  `Aansluitingen` varchar(255) DEFAULT NULL,
  `Refreshrate` varchar(255) DEFAULT NULL,
  `Gezichtsveld` varchar(255) DEFAULT NULL,
  `Resolutie` varchar(255) DEFAULT NULL,
  `newproduct` varchar(255) NOT NULL,
  `sales` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productPrice`, `EAN`, `kleur`, `Merk`, `Verbinding`, `Aansluitingen`, `Refreshrate`, `Gezichtsveld`, `Resolutie`, `newproduct`, `sales`, `img`, `created`) VALUES
(2, 'HP Reverb', 399, 95, 'red', 'Sony', 'Touchpad Control', '5.46', 'LCD', 'dfd', '1.83 Pounds', '0', '1', 'img/HP Reverb.jpeg', '2021-04-03 00:29:16'),
(3, 'Sony Carl Zeiss VR One.', 399, 95, 'red', 'Sony', 'Touchpad Control', '5.46', 'LCD', 'dfd', '1.83 Pounds', '0', '1', 'img/Carl Zeiss VR One.png ', '2021-04-03 00:29:37'),
(4, 'Samsung Galaxy Gear VR.', 399, 95, 'red', 'Samsung', 'Touchpad Control', '5.46', 'LCD', 'dfd', '1.83 Pounds', '0', '1', 'img/Samsung Galaxy Gear VR.jpeg ', '2021-04-03 00:26:13'),
(5, 'Sony PlayStation', 399, 95, 'red', 'Sony', 'Touchpad Control', '5.46', 'LCD', 'dfd', '1.83 Pounds', '0', '1', 'img/Sony PlayStation.png ', '2021-04-03 00:18:22'),
(6, 'Samsung New Gear VR + Gear VR Controller', 399, 95, 'green', 'Samsung', 'Touchpad Control', '5.46', 'LCD', 'dfd', '1.83 Pounds', '0', '1', 'img/Samsung New Gear VR + Gear VR Controller.png ', '2021-04-03 00:26:13'),
(7, 'Samsung Galaxy Gear VR.', 399, 95, 'red', 'Samsung', 'Touchpad Control', '5.46', 'LCD', 'dfd', '1.83 Pounds', '0', '1', 'img/Samsung Galaxy Gear VR.jpeg ', '2021-04-03 00:30:33'),
(8, 'VR-Headset-Compatible.jpg', 399, 95, 'red', 'Sony', 'Touchpad Control', '5.46', 'LCD', 'dfd', '1.83 Pounds', '1', '1', 'VR-Headset-Compatible.jpg ', '2021-04-03 00:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `item_number` varchar(255) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency_code` varchar(55) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `status`, `created_at`, `updated_at`, `password`) VALUES
(1, 'Stephen', 'Ilori', 'stephenilori458@gmail.com', 1, '2020-03-10 00:55:15', '2020-03-10 00:55:15', ''),
(2, 'Stephen', 'Ilori', 'stephenilori459@gmail.com', 1, '2020-03-15 14:05:18', '2020-03-15 14:05:18', '$2y$10$9WZFNf8FKmxlwW2ZkdQOReZKnZLTV8uDIy0sKA0hLK5tXKEgKq1LO'),
(3, 'Harry', 'Wonder', 'stephenilori448@gmail.com', 1, '2020-03-15 14:06:41', '2020-03-15 14:06:41', '$2y$10$cRq23QYY0krRFWfdzhtEquUdD3ujfDXu0u6Ed6ZvGI1tHihNfR3ae'),
(4, 'Max', 'Williams', 'stephenilori678@gmail.com', 1, '2020-03-15 14:07:19', '2020-03-15 14:07:19', '$2y$10$jNDWlIOgPdB46VnXDZfgIuafjbmVoF./TYQX.XwccYODoi5bSgiTO'),
(6, 'Simon', 'West', 'simonwest459@aol.com', 1, '2020-04-07 19:53:32', '2020-04-07 19:53:32', '$2y$10$rLXMCd2qxWIMQv3cybqGZeL72sCQS6DGrVxphGqL6QAr4NN0ZPt5i'),
(7, 'Jack', 'Bren', 'jackybrem458@aol.com', 1, '2020-04-07 19:54:11', '2020-04-07 19:54:11', '$2y$10$6QWmGT0HYAcK.igqkMGufu4KZa9ZbHkfFhYd8hTvuTNCSdsT.vRNC'),
(8, 'Nolan', 'Black', 'nolanblack458@aol.com', 1, '2020-04-07 19:56:04', '2020-04-07 19:56:04', '$2y$10$Y2Aoclsik9NFz7qrYmg7eu0QOeF6knm3275uDdi5qeNh7aJ/jMtUa'),
(9, 'Harrison', 'Wells', 'pixietechdevtest@aol.com', 1, '2020-04-07 20:00:03', '2020-04-07 20:00:03', '$2y$10$waqqOEsf2x30nEt5PWYvtu7KrdteS/9Xo9RtJ.P.bYYpbMNJk/C5i'),
(10, 'Harrison', 'Wells', 'ajsjsja@aol.com', 1, '2020-04-07 20:01:15', '2020-04-07 20:01:15', '$2y$10$8KRRIY59usZ.3RxV6dTN5Ot9eZxpBPBd.BaWKkqmWf82dCIOBPxty'),
(16, 'Ahmed', 'Alothman', 'ahmedalothman966@gmail.com', 1, '2021-03-26 13:32:20', '2021-03-26 13:32:20', '$2y$10$x1isinL1W/2CHKC3nUmNjuAd8CEFn62b3Mqj8E9WtLFGFav5Q42bG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119370;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
