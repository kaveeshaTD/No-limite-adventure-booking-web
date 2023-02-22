-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 07:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `pakage` int(11) DEFAULT NULL,
  `nicOrPassport` varchar(20) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `contactNum` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `BookDate` varchar(30) DEFAULT NULL,
  `bookedTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `Guid_name` varchar(255) NOT NULL,
  `Driver_name` varchar(255) NOT NULL,
  `Vehicle_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `pakage`, `nicOrPassport`, `UserID`, `contactNum`, `address`, `BookDate`, `bookedTime`, `Guid_name`, `Driver_name`, `Vehicle_id`, `status`) VALUES
(16, 0, '12345678', 8, 712345678, 'Matara', '2022-07-09', '2022-06-28 17:51:39', 'Romain', 'Romesh', 10003, 'CONFIRMED'),
(17, 1, '12345678', 8, 712345678, 'Matara', '2022-07-09', '2022-06-28 17:52:11', '', '', 0, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contactNum` int(11) DEFAULT NULL,
  `message` varchar(500) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `contactNum`, `message`, `time`) VALUES
(8, 'Piyumi Shanika', 'shanika123@gmail.com', NULL, 'Hi, Can you send more details', '2022-06-28 17:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Emp_id` int(11) NOT NULL,
  `Driver_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Emp_id`, `Driver_id`) VALUES
(1001, 105),
(1002, 106),
(1003, 107);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_id` int(11) NOT NULL,
  `Emp_name` varchar(255) NOT NULL,
  `Work_time` varchar(255) NOT NULL,
  `Emp_dob` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_id`, `Emp_name`, `Work_time`, `Emp_dob`) VALUES
(1001, 'Romesh', '24 hrs', '1980/10/22'),
(1002, 'Max', '24 hrs', '1990/12/12'),
(1003, 'Jake', '24 hrs', '1978/9/10'),
(3001, 'Duke', '24 hrs', '1996/12/14'),
(3002, 'Romain', '24 hrs', '1988/12/1'),
(3003, 'Fin', '24 hrs', '1995/5/23');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `Emp_id` int(11) NOT NULL,
  `Guide_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`Emp_id`, `Guide_id`) VALUES
(3001, 205),
(3002, 206),
(3003, 207);

-- --------------------------------------------------------

--
-- Table structure for table `pakages`
--

CREATE TABLE `pakages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `currency` varchar(25) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakages`
--

INSERT INTO `pakages` (`id`, `name`, `price`, `currency`, `Description`) VALUES
(1, 'Local_Personal', 18000, 'RS', 'Sky Diving\r\nWater Rafting\r\nFlying Rawana\r\nATV\r\nEquipment\r\nFood & Drinks\r\nGuides'),
(2, 'Local_Basic', 25000, 'RS', 'Sky Diving\r\nRafting\r\nFlying Rawana\r\nCamping\r\nKayaking\r\nJeski Ride\r\nATV\r\nEquipment\r\nFood & Drinks\r\nGuides'),
(3, 'Local_Standard', 28000, 'RS', 'Paintball Fire\r\nJeski Ride\r\nRock Climbing\r\nWater Rafting\r\nEquipment\r\nFood & Drinks\r\nGuides'),
(4, 'Foreign_Personal', 30, '$', 'Sky Diving\r\nWater Rafting\r\nFlying Rawana\r\nATV\r\nEquipment\r\nFood & Drinks\r\nGuides'),
(5, 'Foreign_Standard', 80, '$', 'Sky Diving\r\nRafting\r\nFlying Rawana\r\nCamping\r\nKayaking\r\nJeski Ride\r\nATV\r\nEquipment\r\nFood & Drinks\r\nGuide'),
(6, 'Foreign_Basic', 70, '$', 'Paintball Fire\r\nJeski Ride\r\nRock Climbing\r\nWater Rafting\r\nEquipment\r\nFood & Drinks\r\nGuides');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(5) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(8, 'Piyumi', 'Shanika', 'shanika123@gmail.com', 'shanika1234', 'USER'),
(9, 'Adventure', 'Admin', 'admin@gmail.com', '1234', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `Vehicle_id` int(11) NOT NULL,
  `Vehial_no` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`Vehicle_id`, `Vehial_no`) VALUES
(10002, 10),
(10003, 12),
(10004, 14),
(10005, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `pakages`
--
ALTER TABLE `pakages`
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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pakages`
--
ALTER TABLE `pakages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
