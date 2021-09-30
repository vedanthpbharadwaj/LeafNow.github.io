-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 03:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leafnow_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mail` varchar(25) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Id`, `Name`, `Mail`, `Address`, `Password`) VALUES
(2, 'Tejaswini', 'tej@gmail.com', 'Banglore', 'admin'),
(5, 'Vedanth', 'vedanth@gmail.com', '#12, Banglore', 'vedanth'),
(6, 'Ananya', 'ananya@gmail.com', '#34, Banglore', 'ananya');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `Plant_Id` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`Plant_Id`, `Type`, `Name`, `Price`, `Quantity`) VALUES
(101, 'Cactus', 'Bunny Ear Cactus', 200, 23),
(102, 'Cactus', 'Acanthocalycium Thionanthum', 250, 25),
(103, 'Cactus', 'Burros Tail', 350, 24),
(104, 'Cactus', 'Flaming Katy', 350, 30),
(105, 'Cactus', 'Christmas Cactus', 400, 22),
(106, 'Cactus', 'Devils Backbone', 250, 30),
(107, 'Bonsai', 'Black Olive Bonsai', 600, 23),
(108, 'Bonsai', 'Juniper Bonsai', 550, 20),
(109, 'Bonsai', 'Banyan Ficus Bonsai', 800, 15),
(110, 'Bonsai', 'Cherry Bonsai', 1200, 10),
(111, 'Bonsai', 'Bald Cypress Bonsai', 750, 20),
(112, 'Bonsai', 'Maple Bonsai', 950, 24),
(113, 'Flowering Plant', 'Bromeliad', 200, 30),
(114, 'Flowering Plant', 'Kaffir Lily', 200, 35),
(115, 'Flowering Plant', 'Gloxinia', 250, 20),
(116, 'Flowering Plant', 'Cyclamen', 150, 25),
(117, 'Flowering Plant', 'Crown of Thorns', 150, 40),
(118, 'Flowering Plant', 'Lavendar', 250, 30),
(119, 'Seeds', 'Bamboo', 20, 50),
(120, 'Seeds', 'Jasmine', 20, 49),
(121, 'Seeds', 'Gerbera Daisies', 25, 60),
(122, 'Seeds', 'Organic Basil', 25, 60),
(123, 'Seeds', 'Petunia', 30, 60),
(124, 'Seeds', 'Bellis Monstrosa', 30, 58),
(125, '', '', 0, 0),
(126, '-', '-', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Transaction_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Plant_Id` int(11) DEFAULT NULL,
  `Type` varchar(10) NOT NULL,
  `Total_Amount` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Transaction_Id`, `Customer_Id`, `Plant_Id`, `Type`, `Total_Amount`, `Date_Time`) VALUES
(35, 2, 101, 'Donate', 120, '2021-09-29 21:20:50'),
(40, 2, 125, 'Donate', 120, '2021-09-29 21:25:38'),
(41, 2, 125, 'Donate', 340, '2021-09-29 21:27:21'),
(43, 2, 101, 'Buy', 410, '2021-09-29 23:05:25'),
(44, 2, 102, 'Gift', 260, '2021-09-29 23:06:35'),
(45, 2, 124, 'Buy', 70, '2021-09-30 00:37:23'),
(46, 2, 125, 'Donate', 50, '2021-09-30 12:31:25'),
(47, 5, 125, 'Donate', 122, '2021-09-30 13:30:02'),
(48, 5, 107, 'Buy', 1210, '2021-09-30 13:31:20'),
(49, 5, 120, 'Gift', 30, '2021-09-30 13:34:33'),
(51, 6, 125, 'Donate', 340, '2021-09-30 18:23:56'),
(52, 6, 103, 'Buy', 360, '2021-09-30 18:27:39'),
(53, 6, 112, 'Gift', 960, '2021-09-30 18:29:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`Plant_Id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`Transaction_Id`),
  ADD KEY `Customer_Id` (`Customer_Id`),
  ADD KEY `Plant_Id` (`Plant_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `Plant_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `Transaction_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Customer_Id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`Plant_Id`) REFERENCES `plant` (`Plant_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
