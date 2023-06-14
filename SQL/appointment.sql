-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2023 at 03:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_db`
--

CREATE TABLE `appoinment_db` (
  `finame` varchar(60) NOT NULL,
  `laname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phonenum` varchar(80) NOT NULL,
  `services` varchar(50) NOT NULL,
  `oppointmentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinment_db`
--

INSERT INTO `appoinment_db` (`finame`, `laname`, `email`, `phonenum`, `services`, `oppointmentDate`) VALUES
('Huyen', 'Luong', 'luonghuyen@gmail.com', '475987567', 'Fullset-acrylic', '2023-06-15'),
('Nathan', 'Nguyen', 'brian@gmail.com', '437-345-9876', 'Manicure', '2023-06-22'),
('Phuc', 'Nguyen', 'phucnl1998@gmail.com', '4375570884', 'Manicure', '2023-06-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment_db`
--
ALTER TABLE `appoinment_db`
  ADD PRIMARY KEY (`finame`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
