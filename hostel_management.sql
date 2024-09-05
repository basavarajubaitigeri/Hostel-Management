-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 04:32 PM
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
-- Database: `hostel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Email`, `password`, `Phone`) VALUES
('22438cm008@gmail.com', 'basava', '9019786178'),
('22438cm002@gmail.com', 'abu', '9908948588');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecomplaint`
--

CREATE TABLE `onlinecomplaint` (
  `Name` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Complaint` varchar(100) NOT NULL,
  `group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `onlinecomplaint`
--

INSERT INTO `onlinecomplaint` (`Name`, `ID`, `Branch`, `Complaint`, `group`) VALUES
('M.deepak', '21438-ccm-011', 'CME', 'WE have been facing issue of power loss and water problem', 'Diploma');

-- --------------------------------------------------------

--
-- Table structure for table `online_fee`
--

CREATE TABLE `online_fee` (
  `Id` varchar(30) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `transaction_ID` varchar(30) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_fee`
--

INSERT INTO `online_fee` (`Id`, `Name`, `Branch`, `transaction_ID`, `amount`) VALUES
('21438-cm-010', 'k.vamsi', 'CME', '965482926903', '30,000'),
('21438-cm-011', 'M.deepak', 'CME', '965482926903', '20,0000'),
('21438-cm-017', 'D.hussain vali', 'CME', '965482926903', '50,000');

-- --------------------------------------------------------

--
-- Table structure for table `outingpermission`
--

CREATE TABLE `outingpermission` (
  `Id` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Phonenumber` varchar(20) NOT NULL,
  `Reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outingpermission`
--

INSERT INTO `outingpermission` (`Id`, `Name`, `Branch`, `Phonenumber`, `Reason`) VALUES
('21438-cm-011', 'M.deepak', 'CME', '9652462235', 'Headache');

-- --------------------------------------------------------

--
-- Table structure for table `staffdata`
--

CREATE TABLE `staffdata` (
  `Name` varchar(100) NOT NULL,
  `Phonenumber` varchar(100) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffdata`
--

INSERT INTO `staffdata` (`Name`, `Phonenumber`, `Branch`, `Course`, `Subject`) VALUES
('Prasad reddy', '81259 45887', 'CME', 'Diploma', 'BCE'),
('Jeevan', '9866284725', 'CME', 'Diploma', 'c++');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `online_fee`
--
ALTER TABLE `online_fee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `outingpermission`
--
ALTER TABLE `outingpermission`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
