-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 10:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1670`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `UseID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Usertype` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`UseID`, `Username`, `Password`, `Usertype`) VALUES
('A1', 'duong@gmail.com', '123', 'Admin'),
('B1', 'hung@gmail.com', '123', 'Staff'),
('C1', 'huy@gmail.com', '123', 'Trainer'),
('D1', 'hoang@gmail.com', '123', 'Trainee'),
('A2', 'ngoc@gmail.com', '123', 'Trainee'),
('C2', 'long@gmail.com', '123', 'Trainer'),
('C3', 'omar@gmail.com', '123', 'Trainer'),
('B2', 'bach@gmail.com', '123', 'Staff'),
('B3', 'anh@gmail.com', '123', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AdName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AdEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AdPhone` int(10) NOT NULL,
  `AdWorkplace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AdEducation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AdPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdID`, `AdName`, `AdEmail`, `AdPhone`, `AdWorkplace`, `AdEducation`, `AdPassword`) VALUES
('A1', 'Nguyen Hoang Duong', 'duongnhgch190074@fpt.edu.vn', 123456789, 'Ha Noi', 'Professor', '123@123a');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CatName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CatDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatID`, `CatName`, `CatDescription`) VALUES
('N1', 'chua nghi ra', 'add sau!!'),
('N2', 'chua nghi ra', 'add sau!!');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CourseName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CousreCate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CourseDes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Trainer` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseName`, `CousreCate`, `CourseDes`, `Trainer`) VALUES
('1619', 'Security', '123', '12343', 'Micheal Omar '),
('1649', 'Data Structures', '14', 'Data Structures and Algorithms', 'Do Hong Quan '),
('1670', 'Application Development ', '123', '12412', 'Nguyen Dinh Tran Long ');

-- --------------------------------------------------------

--
-- Table structure for table `registrainee`
--

CREATE TABLE `registrainee` (
  `TeName` varchar(255) NOT NULL,
  `CName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrainee`
--

INSERT INTO `registrainee` (`TeName`, `CName`) VALUES
('Nguyen Huy Hoang', 'Security'),
('Nguyen Phuong Ngoc', 'Application Development '),
('Nguyen Hung', 'Data Structures'),
('Truong Minh Tung', 'Security'),
('Nguyen Huy Hoang', 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `registrainer`
--

CREATE TABLE `registrainer` (
  `TrName` varchar(255) NOT NULL,
  `CeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrainer`
--

INSERT INTO `registrainer` (`TrName`, `CeName`) VALUES
('Dao Ngoc Huy', 'Security'),
('Nguyen Dinh Tran Long	', 'Application Development '),
('Micheal Omar', 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `StaffName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `StaffEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `StaffPhone` int(10) NOT NULL,
  `StaffPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `StaffEmail`, `StaffPhone`, `StaffPassword`) VALUES
('B1', 'Do Tung Hung', 'hung@gmail.com', 123456789, '123'),
('B2', 'Nguyen Huu Bach', 'bach@gmail.com', 1235790, '123'),
('B3', 'Nguyen Nam Anh', 'anh@gmail.com', 123579032, '123');

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `TraineeID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TraineeName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TraineeEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TraineePhone` int(10) NOT NULL,
  `BirthOfDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(10) NOT NULL,
  `Language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TOEIC` int(10) NOT NULL,
  `Experience` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TraineePassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`TraineeID`, `TraineeName`, `TraineeEmail`, `TraineePhone`, `BirthOfDate`, `Age`, `Language`, `TOEIC`, `Experience`, `Class`, `Location`, `TraineePassword`) VALUES
('A1', 'Nguyen Huy Hoang', 'hoang@gmail.com', 585714713, 'dasdasd', 12, 'asdsad', 123, 'asdas', 'dasdas', 'dasdasd', '123'),
('A2', 'Nguyen Phuong Ngoc', 'ngoc@gmail.com', 16, '16/10/2001', 20, 'PHP', 980, '0', '0801', 'HN', '123'),
('A3', 'Nguyen Hung', 'hung@gmail.com', 987654321, '12/12', 20, 'C#', 990, '', 'GCH0801', 'Ha Noi', '123'),
('A5', 'Truong Minh Tung ', 'tung@gmail.com', 902487395, '19/10/2001', 20, 'C#', 975, '1', '0802', 'HN', '123');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `TrainerID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TrainerName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TrainerEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TrainerPhone` int(10) NOT NULL,
  `TrainerWorkplace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TrainerPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`TrainerID`, `TrainerName`, `TrainerEmail`, `TrainerPhone`, `TrainerWorkplace`, `TrainerPassword`) VALUES
('C1', 'Dao Ngoc Huy', 'huy@gmail.com', 585714713, 'onkl', 'asdsad'),
('C2', 'Nguyen Dinh Tran Long', 'long @gmail.com', 13456789, 'HN', '123'),
('C3', 'Micheal Omar', 'omar@gmail.com', 987654321, 'HN', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`TraineeID`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`TrainerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
