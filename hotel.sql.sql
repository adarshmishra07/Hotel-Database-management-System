-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2019 at 12:09 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11099697_hotel_acube`
--
CREATE DATABASE IF NOT EXISTS `id11099697_hotel_acube` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id11099697_hotel_acube`;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `cust_id` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mobile_number` double NOT NULL,
  `no_of_members` int(3) NOT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `mode_of_payment` enum('Cash','Online') DEFAULT NULL,
  `room_id` enum('101','102','103','104') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`cust_id`, `name`, `mobile_number`, `no_of_members`, `email_id`, `check_in`, `check_out`, `mode_of_payment`, `room_id`) VALUES
(1, 'Adarsh Mishra', 7977248626, 2, 'afitnesscontact@gmail.com', '2019-10-02', '2019-10-05', 'Online', '101'),
(30, 'ajay mishra', 7894561230, 2, 'ajaymishra729@gmail.com', '2019-10-04', '2019-10-06', 'Online', '104'),
(31, 'abhishek tripathi', 132131411, 2, 'lelouch8353@gmail.com', '2019-10-10', '2019-10-04', 'Cash', '103'),
(32, 'Ajinkya Chavan', 9876543210, 2, 'ajinkyachavan@gmail.com', '2019-10-03', '2019-10-10', 'Cash', '103'),
(33, 'Abhishek Jain', 9769575914, 2, 'abhisjain18@gmail.com', '2019-10-04', '2019-10-11', 'Cash', '104'),
(34, 'Sandeep', 987965876, 2, 'sandy@pandy.com', '2019-10-05', '2019-10-06', 'Online', '104'),
(35, 'Amit', 9363993739, 4, 'amit@gmail.com', '2019-10-03', '2019-10-08', 'Online', '102'),
(36, 'Hardik deshmukh', 8457842786, 4, 'smarthardik@yahoo.com', '2019-10-04', '2019-10-10', 'Cash', '104'),
(37, 'Hardik deshmukh', 8457842786, 4, 'smarthardik@yahoo.com', '2019-10-04', '2019-10-10', 'Cash', '104'),
(38, 'jitendra', 5566988231, 2, 'jitu@dubey.com', '2019-10-04', '2019-10-06', 'Online', '104'),
(39, 'raj', 9876543210, 1, 'as@ad.com', '2019-10-05', '2019-10-12', 'Online', '103'),
(40, 'MISHRA ADARSH UMESHC', 7666170676, 1, 'adarsh9923@gmail.com', '2019-10-02', '2019-10-04', 'Cash', '103'),
(41, 'MISHRA ADARSH UMESHC', 7666170676, 1, 'adarsh9923@gmail.com', '2019-10-02', '2019-10-04', 'Cash', '103'),
(42, 'amit', 1234567890, 1, 'am@g.com', '2019-10-11', '2019-10-13', 'Cash', '102');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(8) NOT NULL,
  `room_type` varchar(30) DEFAULT NULL,
  `room_rent` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `room_rent`) VALUES
(101, 'Single simple', 3000),
(102, 'Single deluxe', 5000),
(103, 'Double simple', 4800),
(104, 'Double deluxe', 6800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `cust_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
