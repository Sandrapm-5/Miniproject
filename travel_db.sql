-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 11:30 AM
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
(1, 'sandra@gmail.com', '1234', 'admin', 0, 0),
(2, 'salini@gmail.com', 'qwerty', '', 0, 0),
(3, 'sarun@gmail.com', '4545', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_tb`
--

CREATE TABLE `package_tb` (
  `package_id` int(10) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_tb`
--

INSERT INTO `package_tb` (`package_id`, `package_name`, `discription`, `price`, `booking_id`) VALUES
(16, 'equrope', 'filght+stays', 50000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `place_tb`
--

CREATE TABLE `place_tb` (
  `place_id` int(10) NOT NULL,
  `place_name` varchar(20) NOT NULL,
  `pdiscription` varchar(200) NOT NULL,
  `image` blob NOT NULL,
  `c_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register_td`
--

CREATE TABLE `register_td` (
  `reg_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `cpassword` varchar(8) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_td`
--

INSERT INTO `register_td` (`reg_id`, `username`, `email`, `contact`, `password`, `cpassword`, `status`) VALUES
(1, 'sandra pm', 'sandra@gmail.com', '2147483647', '1234', '1234', 0),
(2, 'anu', 'anu@gmail.com', '2147483647', '123456', '123456', 0),
(3, 'anu', 'anu@gmail.com', '2147483647', '123456', '123456', 0),
(6, 'aaaa', 'airish@gmail.in', '7890563478', 'asdf', 'asdf', 0),
(7, 'salini', 'salini@gmail.com', '9067887654', 'qwerty', 'qwerty', 0),
(8, 'saru', 'sarun@gmail.com', '7510510000', '4545', '4545', 0);

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
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`);

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
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package_tb`
--
ALTER TABLE `package_tb`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `place_tb`
--
ALTER TABLE `place_tb`
  MODIFY `place_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `register_td`
--
ALTER TABLE `register_td`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stays_tb`
--
ALTER TABLE `stays_tb`
  MODIFY `hotel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD CONSTRAINT `login_tb_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `register_td` (`reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
