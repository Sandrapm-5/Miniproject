-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 01:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tb`
--

CREATE TABLE `feedback_tb` (
  `feedname` varchar(15) NOT NULL,
  `feedmail` varchar(15) NOT NULL,
  `contact` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flight_tb`
--

CREATE TABLE `flight_tb` (
  `flight_id` int(10) NOT NULL,
  `flightname` varchar(15) NOT NULL,
  `from` varchar(10) NOT NULL,
  `to` varchar(10) NOT NULL,
  `triptype` varchar(10) NOT NULL,
  `classtype` varchar(10) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `reg_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `email`, `password`, `role`, `status`, `reg_id`) VALUES
(1, 'sandra@gmail.com', 'Sandra@5', 'admin', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `package_tb`
--

CREATE TABLE `package_tb` (
  `package_id` int(10) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `place_tb`
--

CREATE TABLE `place_tb` (
  `place_id` int(10) NOT NULL,
  `place_name` varchar(20) NOT NULL,
  `pdescription` varchar(200) NOT NULL,
  `image` blob NOT NULL,
  `c_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place_tb`
--

INSERT INTO `place_tb` (`place_id`, `place_name`, `pdescription`, `image`, `c_id`, `state_id`) VALUES
(21, 'goa', 'Goa is a state on the southwestern coast of India within the Konkan region, geographically separated from the Deccan highlands by the Western Ghats.', 0x676f612e6a706567, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register_td`
--

CREATE TABLE `register_td` (
  `reg_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_td`
--

INSERT INTO `register_td` (`reg_id`, `username`, `contact`, `status`) VALUES
(1, 'sandra PM', '7510519797', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stays_tb`
--

CREATE TABLE `stays_tb` (
  `hotel_id` int(10) NOT NULL,
  `hotel_name` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `offers` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stays_tb`
--

INSERT INTO `stays_tb` (`hotel_id`, `hotel_name`, `room_type`, `offers`, `price`, `image`) VALUES
(1, 'sarovar', '', 'offers', 0, 'package1.jpg'),
(2, 'sarovar', '', 'food ', 25000, 'package1.jpg'),
(3, 'Apple Bee', 'non Ac', '50% off rate for 10 days', 50000, 'applebee.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  ADD PRIMARY KEY (`feedname`);

--
-- Indexes for table `flight_tb`
--
ALTER TABLE `flight_tb`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `package_tb`
--
ALTER TABLE `package_tb`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `place_tb`
--
ALTER TABLE `place_tb`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `register_td`
--
ALTER TABLE `register_td`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `stays_tb`
--
ALTER TABLE `stays_tb`
  ADD PRIMARY KEY (`hotel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flight_tb`
--
ALTER TABLE `flight_tb`
  MODIFY `flight_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `package_tb`
--
ALTER TABLE `package_tb`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `place_tb`
--
ALTER TABLE `place_tb`
  MODIFY `place_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `register_td`
--
ALTER TABLE `register_td`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `stays_tb`
--
ALTER TABLE `stays_tb`
  MODIFY `hotel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
