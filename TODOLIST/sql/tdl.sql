-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 03:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `E_mail` varchar(75) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Username`, `Password`, `Fname`, `Lname`, `E_mail`, `Type`) VALUES
('admin', '123456', 'admin', 'admin', 'admin@admin.com', '9');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `name` varchar(70) COLLATE utf8_thai_520_w2 NOT NULL,
  `date` varchar(15) COLLATE utf8_thai_520_w2 NOT NULL,
  `detail` varchar(500) COLLATE utf8_thai_520_w2 NOT NULL,
  `done` varchar(10) COLLATE utf8_thai_520_w2 NOT NULL,
  `EmployeeNo` varchar(20) COLLATE utf8_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`name`, `date`, `detail`, `done`, `EmployeeNo`) VALUES
('à¸ªà¹ˆà¸‡à¸‡à¸²à¸™à¸­à¸²à¸ˆà¸²à¸£à¸¢à¹Œà¹€à¸•à¸´à¸¡', '2017-10-22', 'rherjetj', 'Pending', 'admin'),
('Test Done', '2017-10-12', 'Done againts.', 'Done', 'admin'),
('Test Pending', '2017-10-10', 'About pending', 'Pending', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Username`,`E_mail`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
