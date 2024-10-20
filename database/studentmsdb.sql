-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 07:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `ID` int(11) NOT NULL,
  `imageOfStudent` varchar(225) NOT NULL,
  `academicYear` varchar(25) NOT NULL,
  `admissionNumber` varchar(50) NOT NULL,
  `admissionDate` date NOT NULL,
  `rollNumber` varchar(30) NOT NULL,
  `studentStatus` varchar(10) NOT NULL,
  `fnameOfStudent` varchar(50) NOT NULL,
  `lnameOfStudent` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `bloodGroup` varchar(3) NOT NULL,
  `house` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `caste` varchar(40) NOT NULL,
  `primaryContact` varchar(15) NOT NULL,
  `emailOfstudent` varchar(100) NOT NULL,
  `motherTongue` varchar(50) NOT NULL,
  `languageKnown` varchar(100) NOT NULL,
  `imageOfFather` varchar(225) NOT NULL,
  `fatherName` varchar(100) NOT NULL,
  `emailOfFather` varchar(100) NOT NULL,
  `fatherConatct` varchar(20) NOT NULL,
  `fatherProfession` varchar(40) NOT NULL,
  `imageOfMother` varchar(225) NOT NULL,
  `motherName` varchar(100) NOT NULL,
  `emailOfMother` varchar(100) NOT NULL,
  `motherConatct` varchar(20) NOT NULL,
  `guardianSelector` varchar(30) NOT NULL,
  `guardianName` varchar(100) NOT NULL,
  `guardianRelation` varchar(30) NOT NULL,
  `guardianConatct` varchar(20) NOT NULL,
  `guardianEmail` varchar(100) NOT NULL,
  `guardianOccupation` varchar(60) NOT NULL,
  `guardianAddress` varchar(60) NOT NULL,
  `imageOfGuardian` varchar(225) NOT NULL,
  `currentAddressOfStudent` varchar(60) NOT NULL,
  `permanentAddressOfStudent` varchar(60) NOT NULL,
  `transportRoute` varchar(30) NOT NULL,
  `vehicleNumber` varchar(15) NOT NULL,
  `pickUpPoint` varchar(30) NOT NULL,
  `hostel` varchar(30) NOT NULL,
  `hostelRoomNumber` varchar(10) NOT NULL,
  `documentOfBirthCertificate` varchar(225) NOT NULL,
  `documentOfTransferCertificate` varchar(225) NOT NULL,
  `medicalConditionSelected` varchar(30) NOT NULL,
  `allergiesOfStudent` varchar(50) NOT NULL,
  `medicationOfStudent` varchar(60) NOT NULL,
  `previousSchoolName` varchar(100) NOT NULL,
  `previousSchoolAddress` varchar(100) NOT NULL,
  `bankName` varchar(100) NOT NULL,
  `branchOfBank` varchar(100) NOT NULL,
  `ifscNumber` varchar(40) NOT NULL,
  `otherInfo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addstudent`
--
ALTER TABLE `addstudent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
