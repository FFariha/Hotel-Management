-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 01:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marriott`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ID_NO` varchar(255) NOT NULL,
  `Payment` varchar(255) NOT NULL,
  `Check_in` date NOT NULL,
  `Check_out` date NOT NULL,
  `Room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`Id`, `Username`, `Phone_no`, `Address`, `ID_NO`, `Payment`, `Check_in`, `Check_out`, `Room_no`) VALUES
(9, 'rahin', '01911294876', 'Dhaka', '00000000000000000000', 'Cash', '2020-09-28', '2020-10-01', 103),
(10, 'rahin', '01911294876', 'Dhaka', '00000000000000000000', 'Cash', '2020-09-29', '2020-10-07', 201),
(11, 'rahin', '01911294876', 'Dhaka', '00000000000000000000', 'Cash', '2020-09-28', '2020-10-06', 302),
(12, 'rahin', '01911294876', 'Dhaka', '00000000000000000000', 'Cash', '2020-10-07', '2020-10-10', 104),
(13, 'rahin', '01911294876', 'Dhaka', '00000000000000000000', 'Cash', '2020-09-14', '2020-10-07', 105),
(14, 'rahin', '01911294876', 'Dhaka', '00000000000000000000', 'Cash', '2020-09-29', '2020-10-03', 106),
(15, 'rahin', '01911294876', 'Dhaka', '01125413135', 'Cash', '2020-09-30', '2020-10-06', 301);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Id` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Room_no` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Id`, `Type`, `Room_no`, `Status`) VALUES
(1, 'Single', 101, 'Empty'),
(2, 'Single', 102, 'Empty'),
(3, 'Single', 103, 'Booked'),
(4, 'Single', 104, 'Booked'),
(5, 'Single', 105, 'Booked'),
(6, 'Single', 106, 'Booked'),
(7, 'Double', 201, 'Booked'),
(8, 'Double', 202, 'Empty'),
(9, 'Double', 203, 'Empty'),
(10, 'Double', 301, 'Booked'),
(11, 'Double', 302, 'Booked'),
(12, 'Double', 303, 'Empty'),
(13, 'Luxury', 401, 'Empty'),
(14, 'Luxury', 402, 'Empty'),
(15, 'Luxury', 501, 'Empty'),
(16, 'Luxury', 502, 'Empty'),
(17, 'Luxury', 601, 'Empty'),
(18, 'Luxury', 602, 'Empty');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `First_name`, `Last_name`, `Username`, `Email`, `Password`, `Status`) VALUES
(5, 'labib', 'Taz', 'labib', 'labibtaz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(7, 'rahin', 'atiq', 'rahin', 'rahinatiq@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
