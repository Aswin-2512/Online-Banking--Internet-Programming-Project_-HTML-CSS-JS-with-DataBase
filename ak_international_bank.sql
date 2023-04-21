-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 05:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ak international bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `atm_details`
--

CREATE TABLE `atm_details` (
  `Account_Number` varchar(12) NOT NULL,
  `Card Number` char(16) NOT NULL,
  `Exp_Month` varchar(2) NOT NULL,
  `Exp_Year` varchar(2) NOT NULL,
  `CVV` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atm_details`
--

INSERT INTO `atm_details` (`Account_Number`, `Card Number`, `Exp_Month`, `Exp_Year`, `CVV`) VALUES
('123456789044', '1234567890123452', '10', '31', '753'),
('123456789123', '1234567890123456', '6', '29', '852'),
('123456789022', '1234567890123459', '10', '30', '963'),
('123456789011', '7894561230258963', '5', '29', '852');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `Client_Name` varchar(50) NOT NULL,
  `Account_Number` varchar(12) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Balance` int(11) NOT NULL,
  `Mobile_Number` varchar(10) NOT NULL,
  `Card_Number` varchar(20) NOT NULL,
  `Exp_Month` varchar(2) NOT NULL,
  `Exp_Year` char(2) NOT NULL,
  `Cvv` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Client_Name`, `Account_Number`, `Branch`, `Balance`, `Mobile_Number`, `Card_Number`, `Exp_Month`, `Exp_Year`, `Cvv`) VALUES
('aaaaa', '123456789011', 'chennai', 1113400, '1111111111', '7894561230258963', '5', '29', '852'),
('bbbbb', '123456789022', 'Chennai', 1067492, '2222222222', '1234567890123459', '10', '30', '963'),
('ccccc', '123456789033', 'Chennai', 10000000, '3333333333', '1234567890123453', '8', '30', '852'),
('ddddd', '123456789044', 'Chennai', 9950000, '444444444', '1234567890123452', '10', '31', '753');

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `S_No` int(11) NOT NULL,
  `User_Id` varchar(20) NOT NULL,
  `Login_Password` varchar(20) NOT NULL,
  `Transaction_Password` varchar(20) NOT NULL,
  `Question` varchar(50) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`S_No`, `User_Id`, `Login_Password`, `Transaction_Password`, `Question`, `Answer`) VALUES
(3, 'aaaaa122', '741852', '963852', 'What is the name of your primary school', 'xyz'),
(4, 'bbbbbb23', '741852', '963852', 'What is the name of your primary school', 'awty'),
(5, 'ccccc123', '963852', '741852', 'What is the name of your primary school', 'school'),
(2, 'test1', '123456', '789456', 'What is the name of your first pet', 'Dood'),
(1, 'xxxxxx', '000000', '000000', 'xx', 'xxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `S_No` int(11) NOT NULL,
  `Account_Number` varchar(12) NOT NULL,
  `Phone Code` varchar(3) NOT NULL,
  `Phone Number` varchar(10) NOT NULL,
  `User_Id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`S_No`, `Account_Number`, `Phone Code`, `Phone Number`, `User_Id`) VALUES
(1, '000000000000', '000', '0000000000', 'xxxxxx'),
(3, '123456789011', '934', '+91', 'aaaaa122'),
(4, '123456789022', '812', '+91', 'bbbbbb23'),
(5, '123456789044', '909', '+91', 'ccccc123'),
(2, '123456789123', '934', '+91', 'test1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atm_details`
--
ALTER TABLE `atm_details`
  ADD PRIMARY KEY (`Card Number`),
  ADD UNIQUE KEY `Card Number` (`Card Number`),
  ADD UNIQUE KEY `User_Id` (`Account_Number`);

--
-- Indexes for table `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`User_Id`),
  ADD UNIQUE KEY `User Id` (`User_Id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`Account_Number`),
  ADD UNIQUE KEY `Account Number` (`Account_Number`,`User_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
