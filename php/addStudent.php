<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Required fields validation
    if (
        isset($_POST['academic_year']) && isset($_POST['admission_number']) && isset($_POST['admission_date']) &&
        isset($_POST['roll_number']) && isset($_POST['status']) && isset($_POST['first_name']) &&
        isset($_POST['last_name']) && isset($_POST['father_name']) && isset($_POST['mother_name']) &&
        isset($_POST['guardian_name']) && isset($_POST['class']) && isset($_POST['section']) &&
        isset($_POST['gender']) && isset($_POST['dob']) &&
        isset($_POST['current_addressOfStudent']) && isset($_POST['permanent_addressOfStudent']) &&
        isset($_POST['districtOfStudent']) && isset($_POST['provinceOfStudent']) &&
        isset($_POST['transportationRoute']) && isset($_POST['vehicleNumber']) && isset($_POST['pickUpPoint']) &&
        isset($_POST['hostel']) && isset($_POST['hostelRoomNumber']) &&
        isset($_POST['allergiesOfStudent']) && isset($_POST['medicationOfStudent']) &&
        isset($_POST['previousSchoolName']) && isset($_POST['previousSchoolAddress']) &&
        isset($_POST['bankName']) && isset($_POST['branchOfBank']) && isset($_POST['ifscNumber'])
    ) {
        // Basic validations for name fields
        if (
            !preg_match("/^[a-zA-Z\s'-]+$/", $_POST['first_name']) ||
            !preg_match("/^[a-zA-Z\s'-]+$/", $_POST['last_name']) ||
            !preg_match("/^[a-zA-Z\s'-]+$/", $_POST['father_name']) ||
            !preg_match("/^[a-zA-Z\s'-]+$/", $_POST['mother_name']) ||
            !preg_match("/^[a-zA-Z\s'-]+$/", $_POST['guardian_name']) ||
            !preg_match("/^[a-zA-Z\s'-]+$/", $_POST['previousSchoolName']) ||
            !preg_match("/^[a-zA-Z\s'-]+$/", $_POST['bankName']) ||
            !preg_match("/^[a-zA-Z\s'-]+$/", $_POST['branchOfBank'])
        ) {
            echo "Only letters, spaces, hyphens, and apostrophes are allowed in First name, Last name, and other name fields.";
            exit;
        } else {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $father_name = $_POST['father_name'];
            $mother_name = $_POST['mother_name'];
            $guardian_name = $_POST['guardian_name'];
            $previousSchoolName = $_POST['previousSchoolName'];
            $bankName = $_POST['bankName'];
            $branchOfBank = $_POST['branchOfBank'];
        }

        if (!preg_match("/^[0-9]+$/", $_POST['ifscNumber'])) {
            echo "Please enter only numbers for IFSC Number.";
            exit;
        } else {
            $ifscNumber = $_POST['ifscNumber'];
        }

        // Contact number validation: must be exactly 10 digits
        if (
            !preg_match("/^\d{10}$/", $_POST['primary_contact']) ||
            !preg_match("/^\d{10}$/", $_POST['father_contact']) ||
            !preg_match("/^\d{10}$/", $_POST['mother_contact']) ||
            !preg_match("/^\d{10}$/", $_POST['guardian_contact'])
        ) {
            echo "All contact numbers must be exactly 10 digits.";
            exit;
        } else {
            $primary_contact = $_POST['primary_contact'];
            $father_contact = $_POST['father_contact'];
            $mother_contact = $_POST['mother_contact'];
            $guardian_contact = $_POST['guardian_contact'];
        }

        // Assigning basic values to variables
        $academic_year = $_POST['academic_year'];
        $admission_number = $_POST['admission_number'];
        $admission_date = $_POST['admission_date'];
        $roll_number = $_POST['roll_number'];
        $status = $_POST['status'];
        $class = $_POST['class'];
        $section = $_POST['section'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $current_addressOfStudent = $_POST['current_addressOfStudent'];
        $permanent_addressOfStudent = $_POST['permanent_addressOfStudent'];
        $districtOfStudent = $_POST['districtOfStudent'];
        $provinceOfStudent = $_POST['provinceOfStudent'];
        $transportationRoute = $_POST['transportationRoute'];
        $vehicleNumber = $_POST['vehicleNumber'];
        $pickUpPoint = $_POST['pickUpPoint'];
        $hostel = $_POST['hostel'];
        $hostelRoomNumber = $_POST['hostelRoomNumber'];
        $allergiesOfStudent = $_POST['allergiesOfStudent'];
        $medicationOfStudent = $_POST['medicationOfStudent'];
        $previousSchoolAddress = $_POST['previousSchoolAddress'];

        // Email validation for optional fields
        $email = isset($_POST['email']) &&
            filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : "";
        $fatherEmail = isset($_POST['father_email']) &&
            filter_var($_POST['father_email'], FILTER_VALIDATE_EMAIL) ? $_POST['father_email'] : "";
        $motherEmail = isset($_POST['mother_email']) &&
            filter_var($_POST['mother_email'], FILTER_VALIDATE_EMAIL) ? $_POST['mother_email'] : "";
        $guardianEmail = isset($_POST['guardian_email']) &&
            filter_var($_POST['guardian_email'], FILTER_VALIDATE_EMAIL) ? $_POST['guardian_email'] : "";

        // Optional fields handling
        $blood_group = $_POST['blood_group'] ?? "";
        $caste = $_POST['caste'] ?? "";
        $house = $_POST['house'] ?? "";
        $religion = $_POST['religion'] ?? "";
        $feesGroup = $_POST['feesGroup'] ?? "";
        $mother_tongue = $_POST['mother_tongue'] ?? "";
        $languages_known = $_POST['languages_known'] ?? "";
        $father_occupation = $_POST['father_occupation'] ?? "";
        $mother_occupation = $_POST['mother_occupation'] ?? "";
        $guardian_occupation = $_POST['guardian_occupation'] ?? "";
        $guardian_relation = $_POST['guardian_relation'] ?? "";
        $guardian_address = $_POST['guardian_address'] ?? "";
        $otherInfo = $_POST['otherInfo'] ?? "";
    } else {
        echo "Some required fields are missing.";
        exit;
    }

    // Database connection
    $mysqli = db_connect();

    if (!$mysqli) {
        echo "Database connection failed: " . $mysqli->connect_error;
        exit;
    }

    // Prepared SQL statement for student details
    $stmt = $mysqli->prepare("INSERT INTO `addstudent`(`ID`, `imageOfStudent`, `academicYear`, 
    `admissionNumber`, `admissionDate`, `rollNumber`, `studentStatus`, `fnameOfStudent`, 
    `lnameOfStudent`, `class`, `section`, `gender`, `dateOfBirth`, `bloodGroup`, `house`, 
    `religion`, `feesGroup`, `caste`, `primaryContact`, `emailOfstudent`, `motherTongue`, 
    `languageKnown`, `imageOfFather`, `fatherName`, `emailOfFather`, `fatherContact`, 
    `fatherProfession`, `imageOfMother`, `motherName`, `emailOfMother`, `motherContact`, 
    `motherProfession`, `guardianName`, `guardianRelation`, `guardianContact`, 
    `guardianEmail`, `guardianOccupation`, `guardianAddress`, `imageOfGuardian`, `currentAddressOfStudent`, 
    `permanentAddressOfStudent`, `districtOfStudent`, `provinceOfStudent`, `transportRoute`, `vehicleNumber`, `pickUpPoint`, `hostel`, `hostelRoomNumber`, 
    `documentOfBirthCertificate`, `documentOfTransferCertificate`, `allergiesOfStudent`, 
    `medicationOfStudent`, `previousSchoolName`, `previousSchoolAddress`, `bankName`, `branchOfBank`, `ifscNumber`, `otherInfo`) 
    VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        echo "Error in SQL statement preparation: " . $mysqli->error;
        exit;
    }

    // Handle image uploads
    function uploadImage($file, $folder, $maxFileSize)
    {
        if ($file['size'] > $maxFileSize) {
            return null;
        }

        $fileName = basename($file["name"]);
        $target_file = $folder . uniqid() . '_' . $fileName;
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return substr($target_file, 3);  // Remove first 3 chars (../) for DB storage
        }
        return null;
    }

    $image_folder = '../studentDocuments/profilePictures/';
    if (!file_exists($image_folder)) {
        mkdir($image_folder, 0755, true);
    }
    $maxFileSize = 4 * 1024 * 1024; // 4MB limit

    $imageOfStudent = !empty($_FILES["image"]["name"]) ? uploadImage($_FILES["image"], $image_folder, $maxFileSize) : null;
    $imageOfFather = !empty($_FILES["father_image"]["name"]) ? uploadImage($_FILES["father_image"], $image_folder, $maxFileSize) : null;
    $imageOfMother = !empty($_FILES["mother_image"]["name"]) ? uploadImage($_FILES["mother_image"], $image_folder, $maxFileSize) : null;
    $imageOfGuardian = !empty($_FILES["guardian_image"]["name"]) ? uploadImage($_FILES["guardian_image"], $image_folder, $maxFileSize) : null;
    $birthCertificate = !empty($_FILES["birthCertificate"]["name"]) ? uploadImage($_FILES["birthCertificate"], $image_folder, $maxFileSize) : null;
    $transferCertificate = !empty($_FILES["transferCertificate"]["name"]) ? uploadImage($_FILES["transferCertificate"], $image_folder, $maxFileSize) : null;
    // Execute the prepared statement
    if ($stmt->bind_param(
        "sssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
        $imageOfStudent,
        $academic_year,
        $admission_number,
        $admission_date,
        $roll_number,
        $status,
        $first_name,
        $last_name,
        $class,
        $section,
        $gender,
        $dob,
        $blood_group,
        $house,
        $religion,
        $feesGroup,
        $caste,
        $primary_contact,
        $email,
        $mother_tongue,
        $languages_known,
        $imageOfFather,
        $father_name,
        $fatherEmail,
        $father_contact,
        $father_occupation,
        $imageOfMother,
        $mother_name,
        $motherEmail,
        $mother_contact,
        $mother_occupation,
        $guardian_name,
        $guardian_relation,
        $guardian_contact,
        $guardianEmail,
        $guardian_occupation,
        $guardian_address,
        $imageOfGuardian,
        $current_addressOfStudent,
        $permanent_addressOfStudent,
        $districtOfStudent,
        $provinceOfStudent,
        $transportationRoute,
        $vehicleNumber,
        $pickUpPoint,
        $hostel,
        $hostelRoomNumber,
        $birthCertificate,
        $transferCertificate,
        $allergiesOfStudent,
        $medicationOfStudent,
        $previousSchoolName,
        $previousSchoolAddress,
        $bankName,
        $branchOfBank,
        $ifscNumber,
        $otherInfo
    )) {
        $stmt->execute();
        echo "Record inserted successfully.";
    } else {
        echo "Error binding parameters: " . $stmt->error;
    }

    // Closing the statement and connection
    $stmt->close();
    $mysqli->close();
}
