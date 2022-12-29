-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 06:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tuition_request`
--

CREATE TABLE `tuition_request` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `course` varchar(15) NOT NULL,
  `area` varchar(15) NOT NULL,
  `section` varchar(15) NOT NULL,
  `code` varchar(15) NOT NULL,
  `subject` varchar(14) NOT NULL,
  `contact` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobileno` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`username`, `password`, `fname`, `email`, `gender`, `mobileno`, `dob`, `address`) VALUES
('siam123', 's12345', 'Md Mehedy Hasan Siam', 'mehedisiam11@gmail.com', 'male', '01719192189', '2022-04-11', 'bshundhura,dhaka ,bangladesh'),
('tehan12', 't12345', '', 'tehan10@gmail.com', 'male', '01783179639', '2022-04-04', 'puran dhaka,Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tuition_request`
--
ALTER TABLE `tuition_request`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
