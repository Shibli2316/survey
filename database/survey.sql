-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 08:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `ars`
--

CREATE TABLE `ars` (
  `a_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(257) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ars`
--

INSERT INTO `ars` (`a_id`, `uname`, `password`, `email`) VALUES
(1, '2', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `voul`
--

CREATE TABLE `voul` (
  `v_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(257) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `employed` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voul`
--

INSERT INTO `voul` (`v_id`, `username`, `password`, `fname`, `lname`, `details`, `address`, `email`, `phone`, `employed`) VALUES
(2, '3', '1', 'shibli', '1', '1', '1', 'arshibli19@gmail.com', '1', '1'),
(3, '5', '5', '5', '5', '5', '5', '5@gmail.com', '5', '23-05-2002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ars`
--
ALTER TABLE `ars`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `voul`
--
ALTER TABLE `voul`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ars`
--
ALTER TABLE `ars`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voul`
--
ALTER TABLE `voul`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
