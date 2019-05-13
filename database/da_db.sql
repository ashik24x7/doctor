-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 09:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `da_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `da_appointment`
--

CREATE TABLE `da_appointment` (
  `appointment_id` int(12) NOT NULL,
  `doctor_name` varchar(150) NOT NULL,
  `patient_name` varchar(150) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `appointment_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `da_appointment`
--

INSERT INTO `da_appointment` (`appointment_id`, `doctor_name`, `patient_name`, `phone_num`, `email`, `address`, `appointment_date`) VALUES
(1, 'Rahi Chowdory', 'Mahbub', '01629733236', 'redhatmahbub@gmail.com', 'Dhaka, Dhaka', '2019-05-10'),
(2, 'Rithisha Khan', '', '017xxxxxxxx', 'test@test.com', 'Gaibandha', ''),
(3, 'Asharul Islam', 'sayeed', '0182547547', 'sayeed@gmail.com', 'dhaka', '2019-05-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `da_appointment`
--
ALTER TABLE `da_appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `da_appointment`
--
ALTER TABLE `da_appointment`
  MODIFY `appointment_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
