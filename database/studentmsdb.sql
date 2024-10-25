-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 24, 2024 at 07:54 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

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

DROP TABLE IF EXISTS `addstudent`;
CREATE TABLE IF NOT EXISTS `addstudent` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `imageOfStudent` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `academicYear` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `admissionNumber` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `admissionDate` date NOT NULL,
  `rollNumber` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `studentStatus` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `fnameOfStudent` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lnameOfStudent` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `section` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `dateOfBirth` date NOT NULL,
  `bloodGroup` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `house` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `religion` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `caste` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `primaryContact` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `emailOfstudent` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `motherTongue` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `languageKnown` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `imageOfFather` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `fatherName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `emailOfFather` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `fatherContact` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fatherProfession` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `imageOfMother` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `motherName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `emailOfMother` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `motherContact` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `motherProfession` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `guardianName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `guardianRelation` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `guardianContact` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `guardianEmail` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `guardianOccupation` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `guardianAddress` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `imageOfGuardian` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `currentAddressOfStudent` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `permanentAddressOfStudent` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `districtOfStudent` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `provinceOfStudent` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `transportRoute` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `vehicleNumber` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `pickUpPoint` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `hostel` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `hostelRoomNumber` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `documentOfBirthCertificate` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `documentOfTransferCertificate` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `allergiesOfStudent` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `medicationOfStudent` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `previousSchoolName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `previousSchoolAddress` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bankName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `branchOfBank` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ifscNumber` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `otherInfo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`ID`, `imageOfStudent`, `academicYear`, `admissionNumber`, `admissionDate`, `rollNumber`, `studentStatus`, `fnameOfStudent`, `lnameOfStudent`, `class`, `section`, `gender`, `dateOfBirth`, `bloodGroup`, `house`, `religion`, `category`, `caste`, `primaryContact`, `emailOfstudent`, `motherTongue`, `languageKnown`, `imageOfFather`, `fatherName`, `emailOfFather`, `fatherContact`, `fatherProfession`, `imageOfMother`, `motherName`, `emailOfMother`, `motherContact`, `motherProfession`, `guardianName`, `guardianRelation`, `guardianContact`, `guardianEmail`, `guardianOccupation`, `guardianAddress`, `imageOfGuardian`, `currentAddressOfStudent`, `permanentAddressOfStudent`, `districtOfStudent`, `provinceOfStudent`, `transportRoute`, `vehicleNumber`, `pickUpPoint`, `hostel`, `hostelRoomNumber`, `documentOfBirthCertificate`, `documentOfTransferCertificate`, `allergiesOfStudent`, `medicationOfStudent`, `previousSchoolName`, `previousSchoolAddress`, `bankName`, `branchOfBank`, `ifscNumber`, `otherInfo`) VALUES
(3, 'studentDocuments/profilePictures/6719fb91aba98_Screenshot 2024-10-23 182107.png', 'June 2023/24', 'AD001', '2024-10-09', 'RL001', 'Active', 'Haitomns', 'Rohan', 'III', 'A', 'Male', '2024-10-03', 'O -', 'Blue', 'Muslim', 'BC', 'Kurmi', '9820998994', 'sankar8242@gmail.com', 'English', 'English, Spanish', 'studentDocuments/profilePictures/6719fb91abd53_Screenshot 2024-09-06 163741.png', 'Harishankar kurmi', 'harishankarpatel144@gmail.com', '9852635652', 'Worker', 'studentDocuments/profilePictures/6719fb91af68a_Screenshot 2024-05-28 021649.png', 'Laxmi Devi', 'laxmidevi22@gmail.com', '9822550000', 'HouseWife', 'Gaurishankar', 'Uncle', '9812110620', 'gauri122@gmail.com', 'Operator', 'Pipara-14', 'studentDocuments/profilePictures/6719fb91af9fc_singh.jpg', 'Bhairahwa-14, Biratnagar', 'Parwanipur-21, Birgunj,parsa', 'Parsa', 'Madhesh Pradesh', 'Newyork', 'AM 54548', 'Cincinatti', 'Phoenix Residence', '22', 'studentDocuments/profilePictures/6719fb91afc74_haitomns.jpg', 'studentDocuments/profilePictures/6719fb91b04ae_rohan.jpg', 'Allergy, Skin Allergy', 'Medecine Name', 'Shree Nrisingh Madhyamik Vidhyalay', 'Piparamathh-14, Birgunj', 'Nepal Central Bank', 'Kathmandu', '12340008907654', 'sdzfxghgjhkjglkhl');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
