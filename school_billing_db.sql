-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 08, 2020 at 10:27 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `School_Billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `EMPLOYEE_ID` int(7) NOT NULL,
  `EMPLOYEE_NAME` varchar(30) NOT NULL,
  `DESIGNATION` varchar(20) NOT NULL,
  `CREATION_DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `PRODUCT_ID` int(7) NOT NULL,
  `PRODUCT_NAME` varchar(30) NOT NULL,
  `AMOUNT` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `STUDENT_ID` int(7) NOT NULL COMMENT 'Student Id',
  `LEARN_REF_NO` varchar(30) DEFAULT NULL COMMENT 'Learner Reference Number',
  `STUDENT_NAME` varchar(30) NOT NULL,
  `STUDENT_GRD_LVL` varchar(15) NOT NULL,
  `MODE_PAYMENT` varchar(8) NOT NULL,
  `INI_ACCT_BAL` int(12) DEFAULT NULL,
  `PREF_PAYMENT_1` varchar(20) NOT NULL,
  `PREF_PAYMENT_2` varchar(20) DEFAULT NULL,
  `STUDENT_EMAIL_ADD_1` varchar(50) NOT NULL,
  `STUDENT_EMAIL_ADD_2` varchar(50) NOT NULL,
  `CREATION_DATE` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD UNIQUE KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD UNIQUE KEY `product_id` (`PRODUCT_ID`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD UNIQUE KEY `Student_Id` (`STUDENT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `EMPLOYEE_ID` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `PRODUCT_ID` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Student`
--
ALTER TABLE `Student`
  MODIFY `STUDENT_ID` int(7) NOT NULL AUTO_INCREMENT COMMENT 'Student Id';
