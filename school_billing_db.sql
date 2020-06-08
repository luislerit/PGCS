-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Jun 08, 2020 at 01:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_billing_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMPLOYEE_ID` int(7) NOT NULL,
  `EMPLOYEE_NAME` varchar(30) NOT NULL,
  `DESIGNATION` varchar(20) NOT NULL,
  `CREATION_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gradelevel`
--

CREATE TABLE `gradelevel` (
  `GRADE_LEVEL_NO` int(11) NOT NULL,
  `GRADE_LEVEL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gradelevel`
--

INSERT INTO `gradelevel` (`GRADE_LEVEL_NO`, `GRADE_LEVEL`) VALUES
(1, 'Junior Nursery'),
(2, 'Senior Nursery'),
(3, 'Kindergarten'),
(4, 'Grade 1'),
(5, 'Grade 2'),
(6, 'Grade 3'),
(7, 'Grade 4'),
(8, 'Grade 5'),
(9, 'Grade 6');

-- --------------------------------------------------------

--
-- Table structure for table `modepayment`
--

CREATE TABLE `modepayment` (
  `MODE_PAYMENT_NO` int(11) NOT NULL,
  `MODE_PAYMENT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modepayment`
--

INSERT INTO `modepayment` (`MODE_PAYMENT_NO`, `MODE_PAYMENT`) VALUES
(1, 'Cash'),
(2, 'Semi-Annual'),
(3, 'Quarterly'),
(4, 'Monthly');

-- --------------------------------------------------------

--
-- Table structure for table `preferredpayment`
--

CREATE TABLE `preferredpayment` (
  `PREF_PAYMENT_NO` int(11) NOT NULL,
  `PREF_PAYMENT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preferredpayment`
--

INSERT INTO `preferredpayment` (`PREF_PAYMENT_NO`, `PREF_PAYMENT`) VALUES
(1, 'GCash'),
(2, 'Paymaya'),
(3, 'Bank of the Philippine Islands (BPI)'),
(4, 'Banco de Oro'),
(5, 'Metrobank'),
(6, 'Rizal Commercial Banking Corporation (RCBC)'),
(7, 'Eastwest');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` int(7) NOT NULL,
  `PRODUCT_NAME` varchar(30) NOT NULL,
  `AMOUNT` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STUDENT_ID` int(7) NOT NULL COMMENT 'Student Id',
  `LEARN_REF_NO` varchar(30) DEFAULT NULL COMMENT 'Learner Reference Number',
  `STUDENT_NAME` varchar(30) NOT NULL,
  `STUDENT_GRD_LVL` int(11) NOT NULL,
  `MODE_PAYMENT` int(11) NOT NULL,
  `INI_ACCT_BAL` int(12) DEFAULT NULL,
  `PREF_PAYMENT_1` int(11) NOT NULL,
  `PREF_PAYMENT_2` int(11) DEFAULT NULL,
  `STUDENT_EMAIL_ADD_1` varchar(50) NOT NULL,
  `STUDENT_EMAIL_ADD_2` varchar(50) NOT NULL,
  `CREATION_DATE` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`);

--
-- Indexes for table `gradelevel`
--
ALTER TABLE `gradelevel`
  ADD PRIMARY KEY (`GRADE_LEVEL_NO`);

--
-- Indexes for table `modepayment`
--
ALTER TABLE `modepayment`
  ADD PRIMARY KEY (`MODE_PAYMENT_NO`);

--
-- Indexes for table `preferredpayment`
--
ALTER TABLE `preferredpayment`
  ADD PRIMARY KEY (`PREF_PAYMENT_NO`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `product_id` (`PRODUCT_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `Student_Id` (`STUDENT_ID`),
  ADD KEY `MODE_PAYMENT` (`MODE_PAYMENT`),
  ADD KEY `PREF_PAYMENT_1` (`PREF_PAYMENT_1`),
  ADD KEY `PREF_PAYMENT_2` (`PREF_PAYMENT_2`),
  ADD KEY `STUDENT_GRD_LVL` (`STUDENT_GRD_LVL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EMPLOYEE_ID` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gradelevel`
--
ALTER TABLE `gradelevel`
  MODIFY `GRADE_LEVEL_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `modepayment`
--
ALTER TABLE `modepayment`
  MODIFY `MODE_PAYMENT_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `preferredpayment`
--
ALTER TABLE `preferredpayment`
  MODIFY `PREF_PAYMENT_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCT_ID` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STUDENT_ID` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Student Id', AUTO_INCREMENT=100002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `MODE_PAYMENT` FOREIGN KEY (`MODE_PAYMENT`) REFERENCES `modepayment` (`MODE_PAYMENT_NO`),
  ADD CONSTRAINT `PREF_PAYMENT_1` FOREIGN KEY (`PREF_PAYMENT_1`) REFERENCES `preferredpayment` (`PREF_PAYMENT_NO`),
  ADD CONSTRAINT `PREF_PAYMENT_2` FOREIGN KEY (`PREF_PAYMENT_2`) REFERENCES `preferredpayment` (`PREF_PAYMENT_NO`),
  ADD CONSTRAINT `STUDENT_GRD_LVL` FOREIGN KEY (`STUDENT_GRD_LVL`) REFERENCES `gradelevel` (`GRADE_LEVEL_NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
