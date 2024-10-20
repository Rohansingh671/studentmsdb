<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Required fields validation
    if (
        isset($_POST['academic_year']) && isset($_POST['admission_number']) && isset($_POST['admission_date']) &&
        isset($_POST['roll_number']) && isset($_POST['status']) && isset($_POST['first_name']) &&
        isset($_POST['last_name']) && isset($_POST['father_name']) && isset($_POST['mother_name']) &&
        isset($_POST['guardian_name']) && isset($_POST['class']) && isset($_POST['section']) &&
        isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['primary_contact']) &&
        isset($_POST['father_contact']) && isset($_POST['mother_contact']) && isset($_POST['guardian_contact']) &&
        isset($_POST['current_addressOfStudent']) && isset($_POST['permanent_addressOfStudent']) &&
        isset($_POST['districtOfStudent']) && isset($_POST['provinceOfStudent']) &&
        isset($_POST['transportationRoute']) && isset($_POST['vehicleNumber']) && isset($_POST['pickUpPoint']) && 
        isset($_POST['hostel']) && isset($_POST['hostelRoomNumber']) && 
        isset($_POST['medicalConditionSelected']) && isset($_POST['allergiesOfStudent']) && isset($_POST['medicationOfStudent']) &&
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
        $primary_contact = $_POST['primary_contact'];
        $father_contact = $_POST['father_contact'];
        $mother_contact = $_POST['mother_contact'];
        $guardian_contact = $_POST['guardian_contact'];
        $current_addressOfStudent = $_POST['current_addressOfStudent'];
        $permanent_addressOfStudent = $_POST['permanent_addressOfStudent'];
        $districtOfStudent = $_POST['districtOfStudent'];
        $provinceOfStudent = $_POST['provinceOfStudent'];
        $transportationRoute = $_POST['transportationRoute'];
        $vehicleNumber = $_POST['vehicleNumber'];
        $pickUpPoint = $_POST['pickUpPoint'];
        $hostel = $_POST['hostel'];
        $hostelRoomNumber = $_POST['hostelRoomNumber'];
        $medicalConditionSelected = $_POST['medicalConditionSelected'];
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
    `documentOfBirthCertificate`, `documentOfTransferCertificate`, `medicalConditionSelected`, `allergiesOfStudent`, 
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

    $maxFileSize = 4 * 1024 * 1024;  // 4 MB

    function generateFileName($fileName, $student_id)
    {
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        $baseFileName = "student_{$student_id}_" . uniqid();
        return "{$baseFileName}.{$fileExtension}";
    }

    function uploadFile($file, $folder, $maxFileSize, $student_id)
    {
        if ($file['size'] > $maxFileSize) {
            echo "File size exceeds the limit of 4 MB.";
            return false;
        }
        $uniqueFileName = generateFileName($file["name"], $student_id);
        $target_file = $folder . $uniqueFileName;
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return false;
        }
    }

    // Image upload section for student, father, mother, and guardian
    $student_id = $mysqli->insert_id; // Get the last inserted student ID

    // Upload student image
    $image_path = !empty($_FILES["image"]["name"]) ? uploadFile($_FILES["image"], $image_folder, $maxFileSize, $student_id) : null;
    if (!$image_path) {
        echo "Failed to upload student image.";
        exit;
    }
    $image_path = substr($image_path, 3); // Strip the first 3 characters for database storage

    // Upload father's image
    $father_image_path = !empty($_FILES["father_image"]["name"]) ? uploadFile($_FILES["father_image"], $image_folder, $maxFileSize, $student_id) : null;
    $father_image_path = $father_image_path ? substr($father_image_path, 3) : null;

    // Upload mother's image
    $mother_image_path = !empty($_FILES["mother_image"]["name"]) ? uploadFile($_FILES["mother_image"], $image_folder, $maxFileSize, $student_id) : null;
    $mother_image_path = $mother_image_path ? substr($mother_image_path, 3) : null;

    // Upload guardian's image
    $guardian_image_path = !empty($_FILES["guardian_image"]["name"]) ? uploadFile($_FILES["guardian_image"], $image_folder, $maxFileSize, $student_id) : null;
    $guardian_image_path = $guardian_image_path ? substr($guardian_image_path, 3) : null;

    // Upload birthCertificate
    $birthCertificate_image_path = !empty($_FILES["birthCertificate"]["name"]) ? uploadFile($_FILES["birthCertificate"], $image_folder, $maxFileSize, $student_id) : null;
    $birthCertificate_image_path = $birthCertificate_image_path ? substr($birthCertificate_image_path, 3) : null;

    // Upload transferCertificate
    $transferCertificate_image_path = !empty($_FILES["transferCertificate"]["name"]) ? uploadFile($_FILES["transferCertificate"], $image_folder, $maxFileSize, $student_id) : null;
    $transferCertificate_image_path = $transferCertificate_image_path ? substr($transferCertificate_image_path, 3) : null;


    // Bind parameters and execute the statement
    $stmt->bind_param(
        "ssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",  // 39 's' for 39 string parameters
        $image_path,
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
        $father_image_path,
        $father_name,
        $fatherEmail,
        $father_contact,
        $father_occupation,
        $mother_image_path,
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
        $guardian_image_path,
        $current_addressOfStudent,
        $permanent_addressOfStudent,
        $districtOfStudent,
        $provinceOfStudent,
        $transportationRoute,
        $vehicleNumber,
        $pickUpPoint,
        $hostel,
        $hostelRoomNumber,
        $birthCertificate_image_path,
        $transferCertificate_image_path,
        $medicalConditionSelected,
        $allergiesOfStudent,
        $medicationOfStudent,
        $previousSchoolName,
        $previousSchoolAddress,
        $bankName,
        $branchOfBank,
        $ifscNumber,
        $otherInfo
    );

    if ($stmt->execute()) {
        echo "Student details inserted successfully.";
    } else {
        echo "Error in statement execution: " . $stmt->error;
    }

    db_close($mysqli);
}
