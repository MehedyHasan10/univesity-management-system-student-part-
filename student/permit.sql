-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 06:19 PM
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
-- Database: `permit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permit`
--

CREATE TABLE `tbl_permit` (
  `studentID` int(11) NOT NULL,
  `studentName` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `course1` varchar(40) NOT NULL,
  `course2` varchar(40) NOT NULL,
  `course3` varchar(40) NOT NULL,
  `course4` varchar(40) NOT NULL,
  `course5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_permit`
--

INSERT INTO `tbl_permit` (`studentID`, `studentName`, `username`, `course1`, `course2`, `course3`, `course4`, `course5`) VALUES
(1, 'Md. Mehedy Hasan Siam', 'siam130', 'Web Tec', 'Compiler', 'Device Lab', 'Artificial Intelligence', 'Engineering Ethics'),
(2, '', '', 'P-301', 'P-101', 'P-211', 'P-403', 'P-995'),
(3, '', 'Signature', '', '', '', '', ''),
(4, '', '', 'Examiner', 'Examiner', 'Examiner', 'Examiner', 'Examiner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_permit`
--
ALTER TABLE `tbl_permit`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_permit`
--
ALTER TABLE `tbl_permit`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
