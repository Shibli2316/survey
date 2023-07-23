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
-- Database: `survey_done`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `c_id` int(11) NOT NULL,
  `fam_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `employment` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `aadhar` int(15) NOT NULL,
  `otherID` varchar(100) NOT NULL,
  `idNum` int(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `isWithParent` varchar(10) NOT NULL,
  `otherAddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`c_id`, `fam_id`, `name`, `gender`, `age`, `dob`, `qualification`, `employment`, `phone`, `aadhar`, `otherID`, `idNum`, `status`, `isWithParent`, `otherAddress`) VALUES
(1, 0, '1', '1', 1, '0000-00-00', '1', '1', '1', 1, '1', 1, '1', '1', '1'),
(2, 0, '2', '2', 2, '0000-00-00', '2', '2', '2', 2, '2', 2, '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `voul_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `nature` varchar(100) NOT NULL,
  `member` int(3) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `noBank` int(2) NOT NULL,
  `govtScheme` varchar(100) NOT NULL,
  `income` int(10) NOT NULL,
  `illness` varchar(100) NOT NULL,
  `child` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`voul_id`, `f_id`, `nature`, `member`, `cast`, `noBank`, `govtScheme`, `income`, `illness`, `child`) VALUES
(0, 1, 'ds', 1, 'wd', 1, 'dw', 1, 'ds', 1),
(0, 2, 'ds', 2, 'few', 2, 'w', 12, 'sdf', 2),
(0, 3, 'ds', 2, 'few', 2, 'w', 12, 'sdf', 23),
(0, 4, 'ds', 2, 'few', 2, 'w', 12, 'sdf', 23),
(0, 5, 'ds', 2, 'few', 2, 'w', 12, 'sdf', 23),
(0, 6, '3', 3, '3', 3, '3', 3, '3', 3),
(0, 7, '1', 1, '1', 1, '1', 1, '1', 1),
(1, 8, '3', 3, '3', 3, '3', 3, '3', 3),
(3, 9, '3', 3, '3', 3, '3', 3, '4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `head_id` int(11) NOT NULL,
  `fam_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `employment` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `aadhar` int(15) NOT NULL,
  `otherID` varchar(100) NOT NULL,
  `idNum` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`head_id`, `fam_id`, `name`, `gender`, `age`, `dob`, `qualification`, `employment`, `phone`, `aadhar`, `otherID`, `idNum`) VALUES
(1, 0, 'ds', 'dc', 1, '2023-04-17', 'w', 'w', '1', 1, 'w', 1),
(2, 0, 'Hamza', 'male', 1, '0000-00-00', 's', 'as', '7903042618', 1234567890, 'oID', 0),
(3, 3, '3', '3', 3, '0000-00-00', '3', '', '3', 3, '3', 3),
(4, 3, '3', '4', 3, '0000-00-00', '3', '', '3', 3, '3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `h_id` int(11) NOT NULL,
  `fam_id` int(11) NOT NULL,
  `isHouse` varchar(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `families` int(2) NOT NULL,
  `room` int(2) NOT NULL,
  `address` varchar(500) NOT NULL,
  `isElec` varchar(10) NOT NULL,
  `isWater` varchar(10) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `electronics` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`h_id`, `fam_id`, `isHouse`, `type`, `families`, `room`, `address`, `isElec`, `isWater`, `locality`, `electronics`) VALUES
(1, 0, '1', '1', 1, 1, '1', '1', '1', '1', '1'),
(2, 0, '1', '1', 1, 1, '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `spouse`
--

CREATE TABLE `spouse` (
  `s_id` int(11) NOT NULL,
  `fam_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `employment` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `aadhar` int(15) NOT NULL,
  `otherID` varchar(100) NOT NULL,
  `idNum` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spouse`
--

INSERT INTO `spouse` (`s_id`, `fam_id`, `name`, `gender`, `age`, `dob`, `qualification`, `employment`, `phone`, `aadhar`, `otherID`, `idNum`) VALUES
(1, 0, '1', '1', 1, '0000-00-00', '1', '1', '1', 1, '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `head`
--
ALTER TABLE `head`
  ADD PRIMARY KEY (`head_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `spouse`
--
ALTER TABLE `spouse`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `head`
--
ALTER TABLE `head`
  MODIFY `head_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spouse`
--
ALTER TABLE `spouse`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
