-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2024 at 05:04 PM
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
-- Table structure for table `addfeesgroup`
--

DROP TABLE IF EXISTS `addfeesgroup`;
CREATE TABLE IF NOT EXISTS `addfeesgroup` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `feesGroupID` varchar(30) NOT NULL,
  `feesGroup` varchar(30) NOT NULL,
  `feesGroupAmount` varchar(15) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `feesGroupStatus` varchar(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addfeesgroup`
--

INSERT INTO `addfeesgroup` (`ID`, `feesGroupID`, `feesGroup`, `feesGroupAmount`, `remark`, `feesGroupStatus`) VALUES
(5, 'GID1', 'Tuition Fee', 'Rs  1500', 'The money you pay to be taught', 'Active'),
(6, 'FGID2', 'Bus fees', 'Rs  600', 'The money you pay is not taught.', 'Inactive');

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
  `feesGroup` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`ID`, `imageOfStudent`, `academicYear`, `admissionNumber`, `admissionDate`, `rollNumber`, `studentStatus`, `fnameOfStudent`, `lnameOfStudent`, `class`, `section`, `gender`, `dateOfBirth`, `bloodGroup`, `house`, `religion`, `feesGroup`, `caste`, `primaryContact`, `emailOfstudent`, `motherTongue`, `languageKnown`, `imageOfFather`, `fatherName`, `emailOfFather`, `fatherContact`, `fatherProfession`, `imageOfMother`, `motherName`, `emailOfMother`, `motherContact`, `motherProfession`, `guardianName`, `guardianRelation`, `guardianContact`, `guardianEmail`, `guardianOccupation`, `guardianAddress`, `imageOfGuardian`, `currentAddressOfStudent`, `permanentAddressOfStudent`, `districtOfStudent`, `provinceOfStudent`, `transportRoute`, `vehicleNumber`, `pickUpPoint`, `hostel`, `hostelRoomNumber`, `documentOfBirthCertificate`, `documentOfTransferCertificate`, `allergiesOfStudent`, `medicationOfStudent`, `previousSchoolName`, `previousSchoolAddress`, `bankName`, `branchOfBank`, `ifscNumber`, `otherInfo`) VALUES
(3, 'studentDocuments/profilePictures/671a0b1e4fe48_Screenshot 2024-10-24 124154.png', 'June 2023/24', 'AD001', '2024-10-09', 'RL001', 'Active', 'Haitomns', 'Rohit', 'III', 'A', 'Male', '2024-10-03', 'O -', 'Blue', 'Muslim', 'BC', 'Kurmi', '9820998994', 'sankar8242@gmail.com', 'English', 'English, Spanish', 'studentDocuments/profilePictures/671a0b1e7932f_Screenshot 2024-10-24 142100.png', 'Harishankar kurmi', 'harishankarpatel144@gmail.com', '9852635652', 'Worker', 'studentDocuments/profilePictures/671a0b1ea5bb7_Screenshot 2024-10-23 230518.png', 'Laxmi Devi', 'laxmidevi22@gmail.com', '9822550000', 'HouseWife', 'Gaurishankar', 'Uncle', '9812110620', 'gauri122@gmail.com', 'Operator', 'Pipara-14', 'studentDocuments/profilePictures/671a0b1ecf656_Screenshot 2024-10-23 145438.png', 'Bhairahwa-14, Biratnagar', 'Parwanipur-21, Birgunj,parsa', 'Parsa', 'Madhesh Pradesh', 'NewYork', 'AM 54548', 'Cincinatti', 'Phoenix Residence', '22', 'studentDocuments/profilePictures/6719fb91afc74_haitomns.jpg', 'studentDocuments/profilePictures/6719fb91b04ae_rohan.jpg', 'Allergy, Skin Allergy', 'Medecine Name', 'Shree Nrisingh Madhyamik Vidhyalay', 'Piparamathh-14, Birgunj', 'Nepal Central Bank', 'Kathmandu', '12340008907654', 'sdzfxghgjhkjglkhl'),
(4, 'studentDocuments/profilePictures/671bb2679bc42_singh.jpg', 'June 2023/24', 'AD002', '2024-10-02', 'RL001', 'Active', 'Rohan', 'Sharma', 'III', 'B', 'Male', '2024-11-01', 'A +', 'Red', 'Sikh', 'ST', 'Kurmi', '9820998994', 'haitomnsrohan2024@gmail.com', 'English', 'English, Spanish', 'studentDocuments/profilePictures/671a14e563941_Screenshot 2024-09-06 163741.png', 'Harishankar kurmi', 'harishankarpatel144@gmail.com', '9852635652', 'Worker', 'studentDocuments/profilePictures/671a14e563bcd_Screenshot 2024-09-18 125846.png', 'Laxmi Devi', 'laxmidevi22@gmail.com', '9845190056', 'HouseWife', 'Gaurishankar', 'Uncle', '9812110620', 'gauri122@gmail.com', 'Operator', 'Pipara-14', 'studentDocuments/profilePictures/671a14e563df8_Screenshot 2024-09-13 203337.png', 'Bhairahwa-14, Biratnagar', 'Parwanipur-21, Birgunj,parsa', 'Parsa', 'Bagmati Province', 'NewYork', 'AM 54548', 'Illinois', 'Tranquil Haven', '20', 'studentDocuments/profilePictures/671a15650b031_Screenshot 2024-10-24 145309.png', 'studentDocuments/profilePictures/671a15650b26d_Screenshot (3).png', 'Allergy, Skin Allergy', 'Medecine Name', 'ghp', 'Piparamathh-14, Birgunj', 'Nepal Central Bank', 'murli', '12340008907654', 'jgfghfxddfgfgl;'),
(5, 'studentDocuments/profilePictures/671e6731eae8a_Screenshot 2024-05-28 021649.png', 'June 2023/24', 'AD003', '2024-10-15', 'RL004', 'Active', 'Haitomns', 'Rohan', 'II', 'A', 'Male', '2024-10-10', 'A+', 'Red', 'Hindu', 'GID1', 'Kurmi', '9820998994', 'sankar8242@gmail.com', 'English', 'English, Spanish', 'studentDocuments/profilePictures/671e63511e9e3_rohan.jpg', 'Harishankar kurmi', 'harishankarpatel144@gmail.com', '9852635652', 'Worker', 'studentDocuments/profilePictures/671e63511f5b4_haitomns.jpg', 'Laxmi Devi', 'laxmidevi22@gmail.com', '9822550000', 'HouseWife', 'Gaurishankar', 'Uncle', '9812110620', 'gauri122@gmail.com', 'Operator', 'Pipara-14', 'studentDocuments/profilePictures/671e63511f76e_Screenshot 2024-10-27 201740.png', 'Bhairahwa-14, Biratnagar', 'Parwanipur-21, Birgunj,parsa', 'Kathmandu', 'Bagmati Province', 'Denver', 'AM 64528', 'Cincinatti', 'Phoenix Residence', '20', 'studentDocuments/profilePictures/671e63511f9b8_Screenshot (2).png', 'studentDocuments/profilePictures/671e63511fe05_Screenshot (3).png', 'Allergy, Skin Allergy', 'Medecine Name', 'Shree Nrisingh Madhyamik Vidhyalay', 'Piparamathh-14, Birgunj', 'Nepal Central Bank', 'Kathmandu', '12340008907654', 'i m good');

-- --------------------------------------------------------

--
-- Table structure for table `addteacher`
--

DROP TABLE IF EXISTS `addteacher`;
CREATE TABLE IF NOT EXISTS `addteacher` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(15) NOT NULL,
  `teacher_image` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `primary_contact_number` varchar(10) NOT NULL,
  `qualification` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `work_experience` varchar(30) NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `permanent_address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `pan_number` varchar(10) NOT NULL,
  `class` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `date_of_joining` date NOT NULL,
  `language_known` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status_of_teacher` varchar(30) NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `mother_name` varchar(40) NOT NULL,
  `epf_no` varchar(20) NOT NULL,
  `basic_salary` decimal(10,2) NOT NULL,
  `contract_type` varchar(30) NOT NULL,
  `date_of_leaving` date NOT NULL,
  `work_shift` varchar(50) NOT NULL,
  `work_location` varchar(100) NOT NULL,
  `medical_leaves` int NOT NULL,
  `casual_leaves` int NOT NULL,
  `maternity_leaves` int NOT NULL,
  `sick_leaves` int NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `ifsc_code` varchar(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `route` varchar(100) DEFAULT NULL,
  `vehicle_number` varchar(20) DEFAULT NULL,
  `pickup_point` varchar(100) DEFAULT NULL,
  `hostel` varchar(100) DEFAULT NULL,
  `room_number` varchar(10) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `joining_letter` varchar(255) DEFAULT NULL,
  `previous_school_name` varchar(100) NOT NULL,
  `previous_school_address` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `previous_school_contact_number` varchar(12) NOT NULL,
  `other_info` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addteacher`
--

INSERT INTO `addteacher` (`ID`, `teacher_id`, `teacher_image`, `first_name`, `last_name`, `gender`, `email_address`, `primary_contact_number`, `qualification`, `work_experience`, `address`, `permanent_address`, `date_of_birth`, `pan_number`, `class`, `subject`, `date_of_joining`, `language_known`, `status_of_teacher`, `marital_status`, `blood_group`, `father_name`, `mother_name`, `epf_no`, `basic_salary`, `contract_type`, `date_of_leaving`, `work_shift`, `work_location`, `medical_leaves`, `casual_leaves`, `maternity_leaves`, `sick_leaves`, `account_name`, `account_number`, `ifsc_code`, `bank_name`, `branch_name`, `route`, `vehicle_number`, `pickup_point`, `hostel`, `room_number`, `facebook`, `instagram`, `linkedin`, `twitter_url`, `youtube`, `resume`, `joining_letter`, `previous_school_name`, `previous_school_address`, `previous_school_contact_number`, `other_info`) VALUES
(1, 'TID01', 'haitomns.jpg', 'Haitomns', 'Kurmi', 'Male', 'haitomns@gmail.com', '9825252525', 'Computer Experience', 'Typing Master', 'Parwanipur', 'Bariyarpur', '2024-10-09', '0021365489', 'I A', 'Physics', '2024-10-03', 'English, Spanish', 'Active', 'Single', 'A+', 'Harishankar kurmi', 'Laxmi Devi', '895264', 520000.00, 'Permanent', '2024-10-09', 'Morning', 'Gahawamai', 20, 20, 20, 20, 'Harishanakar Prasad kurmi', '0012236548956', '12036648952', 'Sidhharth', 'Sidhhatrth', 'Denver', 'AM 54548', 'Cincinatti', 'Radiant Towers', '22', 'www.facebook.com', 'www.instagram.com', 'www.linkedIn.com', 'www.twitter.com', 'www.youtube.com', 'boyle\'s_law_and_charle\'s_law_(1)_8633d4464ed0af57.pdf', 'avogadro_law,_combind_ras_eq_3052be3fa5f8f78e (1).pdf', 'Shree Nrisingh', 'pipara', '9865656565', 'hdsgkuwgrigvfhsjkDepending on the specific needs of your organization or system, additional informat');

-- --------------------------------------------------------

--
-- Table structure for table `classdata`
--

DROP TABLE IF EXISTS `classdata`;
CREATE TABLE IF NOT EXISTS `classdata` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `classID` varchar(10) NOT NULL,
  `className` varchar(10) NOT NULL,
  `classSection` varchar(5) NOT NULL,
  `numberOfStudent` int NOT NULL,
  `numberOfSubject` int NOT NULL,
  `classStatus` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `classdata`
--

INSERT INTO `classdata` (`ID`, `classID`, `className`, `classSection`, `numberOfStudent`, `numberOfSubject`, `classStatus`) VALUES
(2, 'C1381', 'I', 'A', 85, 5, 'Inactive'),
(3, 'C1382', 'I', 'A', 85, 5, 'Inactive'),
(4, 'C1383', 'I', 'A', 85, 5, 'Inactive'),
(5, 'C1384', 'I', 'A', 85, 5, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `smslogindata`
--

DROP TABLE IF EXISTS `smslogindata`;
CREATE TABLE IF NOT EXISTS `smslogindata` (
  `usersLoginID` int NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(320) NOT NULL,
  `userUsername` varchar(256) NOT NULL,
  `userPassword` varchar(256) NOT NULL,
  `userType` int NOT NULL,
  `userLastLogin` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`usersLoginID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `smslogindata`
--

INSERT INTO `smslogindata` (`usersLoginID`, `userEmail`, `userUsername`, `userPassword`, `userType`, `userLastLogin`) VALUES
(7, 'haitomnsrohan2024@gmail.com', 'Haitomnsrohan', '$2y$10$d1kNlD4byLrUtVAu53kSpe2RevTS0QGFlULPMqGOTa/KX2ycWqtiW', 3, '2024-10-25 23:45:20'),
(8, 'haitomrohan2024@gmail.com', 'Haito', '$2y$10$wJWA5eY2wLKmBaPg0dTrI.tKE1eSsC/cw0W6F1AjrwnUc2tqc3iG2', 3, '2024-10-27 12:22:16'),
(9, 'haitorohan2024@gmail.com', 'Hait', '$2y$10$GU3ecntnOGlmf4hBs6UBjOOzTYKx3Q6jQ/bYEgXdoQ4Xp0daw7bZG', 3, '2024-10-27 12:22:36'),
(10, 'sankar@gmail.com', 'Rohan', '$2y$10$./kSAyhwAbfDsp0PmxvJPeqHqVBngnop/rrc/IpSWtQTSZWQhpZ5C', 3, '2024-10-27 12:33:32'),
(11, 'ram@gmail.com', 'Rambabu', '$2y$10$ZJsjcHt10b3YAHxXdP9/Neq.ZS17/1pSM8VGEV2Pi1LpNjnzkqs8q', 3, '2024-10-27 12:46:10'),
(12, 'sankar12@gmail.com', 'Haitomns', '$2y$10$9raxru8cS/XV9a/pK2Rh9unu1SaRdPw6ofnwiQC7dTYSCBTcLq6ti', 3, '2024-10-27 19:34:45'),
(13, 'sankar123@gmail.com', 'Haitomnsroha', '$2y$10$erKgCBO1AmX2QMTV8iP.7.M4fXxU8/gKUxzIhaI9GEKqAdGTdihi2', 3, '2024-10-27 22:48:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
