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
        $category = $_POST['category'] ?? "";
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
    `religion`, `category`, `caste`, `primaryContact`, `emailOfstudent`, `motherTongue`, 
    `languageKnown`, `imageOfFather`, `fatherName`, `emailOfFather`, `fatherContact`, 
    `fatherProfession`, `imageOfMother`, `motherName`, `emailOfMother`, `motherContact`, 
    `motherProfession`, `guardianName`, `guardianRelation`, `guardianContact`, 
    `guardianEmail`, `guardianOccupation`, `guardianAddress`, `imageOfGuardian`, `currentAddressOfStudent`, 
    `permanentAddressOfStudent`, `districtOfStudent`, `provinceOfStudent`, `transportRoute`, `vehicleNumber`, `pickUpPoint`, `hostel`, `hostelRoomNumber`, 
    `documentOfBirthCertificate`, `documentOfTransferCertificate`, `allergiesOfStudent`, 
    `medicationOfStudent`, `previousSchoolName`, `previousSchoolAddress`, `bankName`, `branchOfBank`, `ifscNumber`, `otherInfo`) 
    VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        echo "Error in SQL statement preparation: " . $mysqli->error;
        exit;
    }

    // Handle image uploads
    $main_folder = '../studentDocuments/';
    $image_folder = $main_folder . 'profilePictures/';

    if (!file_exists($image_folder)) {
        mkdir($image_folder, 0755, true); // Create the folder if it doesn't exist
    }

    $maxFileSize = 4 * 1024 * 1024; // 4MB limit

    // Student image upload
    if (isset($_FILES['imageOfStudent']) && $_FILES['imageOfStudent']['error'] == UPLOAD_ERR_OK) {
        $imageOfStudent = $_FILES['imageOfStudent'];
        $imageOfStudentName = uniqid('student_', true) . '.' . pathinfo($imageOfStudent['name'], PATHINFO_EXTENSION);
        if ($imageOfStudent['size'] > $maxFileSize) {
            echo "Image size exceeds 4MB.";
            exit;
        }
        move_uploaded_file($imageOfStudent['tmp_name'], $image_folder . $imageOfStudentName);
    } else {
        echo "Student image upload error.";
        exit;
    }

    // Father's image upload
    if (isset($_FILES['imageOfFather']) && $_FILES['imageOfFather']['error'] == UPLOAD_ERR_OK) {
        $imageOfFather = $_FILES['imageOfFather'];
        $imageOfFatherName = uniqid('father_', true) . '.' . pathinfo($imageOfFather['name'], PATHINFO_EXTENSION);
        if ($imageOfFather['size'] > $maxFileSize) {
            echo "Father's image size exceeds 4MB.";
            exit;
        }
        move_uploaded_file($imageOfFather['tmp_name'], $image_folder . $imageOfFatherName);
    } else {
        echo "Father's image upload error.";
        exit;
    }

    // Mother's image upload
    if (isset($_FILES['imageOfMother']) && $_FILES['imageOfMother']['error'] == UPLOAD_ERR_OK) {
        $imageOfMother = $_FILES['imageOfMother'];
        $imageOfMotherName = uniqid('mother_', true) . '.' . pathinfo($imageOfMother['name'], PATHINFO_EXTENSION);
        if ($imageOfMother['size'] > $maxFileSize) {
            echo "Mother's image size exceeds 4MB.";
            exit;
        }
        move_uploaded_file($imageOfMother['tmp_name'], $image_folder . $imageOfMotherName);
    } else {
        echo "Mother's image upload error.";
        exit;
    }

    // Guardian's image upload
    if (isset($_FILES['imageOfGuardian']) && $_FILES['imageOfGuardian']['error'] == UPLOAD_ERR_OK) {
        $imageOfGuardian = $_FILES['imageOfGuardian'];
        $imageOfGuardianName = uniqid('guardian_', true) . '.' . pathinfo($imageOfGuardian['name'], PATHINFO_EXTENSION);
        if ($imageOfGuardian['size'] > $maxFileSize) {
            echo "Guardian's image size exceeds 4MB.";
            exit;
        }
        move_uploaded_file($imageOfGuardian['tmp_name'], $image_folder . $imageOfGuardianName);
    } else {
        echo "Guardian's image upload error.";
        exit;
    }

    // Execute the prepared statement
    if ($stmt->bind_param(
        "sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
        $imageOfStudentName,
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
        $category,
        $caste,
        $primary_contact,
        $email,
        $mother_tongue,
        $languages_known,
        $imageOfFatherName,
        $father_name,
        $fatherEmail,
        $father_contact,
        $father_occupation,
        $imageOfMotherName,
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
        $imageOfGuardianName,
        $current_addressOfStudent,
        $permanent_addressOfStudent,
        $districtOfStudent,
        $provinceOfStudent,
        $transportationRoute,
        $vehicleNumber,
        $pickUpPoint,
        $hostel,
        $hostelRoomNumber,
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
?>
