<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Required fields validation
    $required_fields = [
        'academic_year',
        'admission_number',
        'admission_date',
        'roll_number',
        'status',
        'first_name',
        'last_name',
        'father_name',
        'mother_name',
        'guardian_name',
        'class',
        'section',
        'gender',
        'dob',
        'current_addressOfStudent',
        'permanent_addressOfStudent',
        'districtOfStudent',
        'provinceOfStudent',
        'transportationRoute',
        'vehicleNumber',
        'pickUpPoint',
        'hostel',
        'hostelRoomNumber',
        'allergiesOfStudent',
        'medicationOfStudent',
        'previousSchoolName',
        'previousSchoolAddress',
        'bankName',
        'branchOfBank',
        'ifscNumber'
    ];

    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            echo "Required field $field is missing.";
            exit;
        }
    }

    // Database connection
    $mysqli = db_connect();
    if (!$mysqli) {
        echo "Database connection failed: " . $mysqli->connect_error;
        exit;
    }

    // Prepared SQL statement for updating student details
    $stmt = $mysqli->prepare("UPDATE `addstudent` SET 
        `academicYear` = ?, `admissionDate` = ?, `rollNumber` = ?, `studentStatus` = ?,
        `fnameOfStudent` = ?, `lnameOfStudent` = ?, `class` = ?, `section` = ?, `gender` = ?,
        `dateOfBirth` = ?, `currentAddressOfStudent` = ?, `permanentAddressOfStudent` = ?,
        `districtOfStudent` = ?, `provinceOfStudent` = ?, `transportRoute` = ?, `vehicleNumber` = ?,
        `pickUpPoint` = ?, `hostel` = ?, `hostelRoomNumber` = ?,
        `allergiesOfStudent` = ?, `medicationOfStudent` = ?, `previousSchoolName` = ?, `previousSchoolAddress` = ?,
        `bankName` = ?, `branchOfBank` = ?, `ifscNumber` = ?, `primaryContact` = ?, `emailOfstudent` = ?, `motherTongue` = ?,
        `languageKnown` = ?, `fatherName` = ?, `fatherContact` = ?, `motherName` = ?, `motherContact` = ?, `guardianName` = ?,
        `guardianContact` = ?, `imageOfStudent` = IFNULL(?, `imageOfStudent`), `imageOfFather` = IFNULL(?, `imageOfFather`),
        `imageOfMother` = IFNULL(?, `imageOfMother`), `imageOfGuardian` = IFNULL(?, `imageOfGuardian`), `documentOfBirthCertificate` = IFNULL(?, `documentOfBirthCertificate`), 
        `documentOfTransferCertificate` = IFNULL(?, `documentOfTransferCertificate`)
        WHERE `admissionNumber` = ?");

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

    $maxFileSize = 4 * 1024 * 1024;  // 4 MB
    $imageOfStudent = !empty($_FILES["image"]["name"]) ? uploadImage($_FILES["image"], $image_folder, $maxFileSize) : null;
    $imageOfFather = !empty($_FILES["father_image"]["name"]) ? uploadImage($_FILES["father_image"], $image_folder, $maxFileSize) : null;
    $imageOfMother = !empty($_FILES["mother_image"]["name"]) ? uploadImage($_FILES["mother_image"], $image_folder, $maxFileSize) : null;
    $imageOfGuardian = !empty($_FILES["guardian_image"]["name"]) ? uploadImage($_FILES["guardian_image"], $image_folder, $maxFileSize) : null;
    $birthCertificate = !empty($_FILES["birthCertificate"]["name"]) ? uploadImage($_FILES["birthCertificate"], $image_folder, $maxFileSize) : null;
    $transferCertificate = !empty($_FILES["transferCertificate"]["name"]) ? uploadImage($_FILES["transferCertificate"], $image_folder, $maxFileSize) : null;

    // Assigning POST values to variables
    $academic_year = $_POST['academic_year'];
    $admission_date = $_POST['admission_date'];
    $roll_number = $_POST['roll_number'];
    $status = $_POST['status'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $current_address = $_POST['current_addressOfStudent'];
    $permanent_address = $_POST['permanent_addressOfStudent'];
    $district = $_POST['districtOfStudent'];
    $province = $_POST['provinceOfStudent'];
    $transport_route = $_POST['transportationRoute'];
    $vehicle_number = $_POST['vehicleNumber'];
    $pick_up_point = $_POST['pickUpPoint'];
    $hostel = $_POST['hostel'];
    $hostel_room_number = $_POST['hostelRoomNumber'];
    $allergies = $_POST['allergiesOfStudent'];
    $medication = $_POST['medicationOfStudent'];
    $previous_school_name = $_POST['previousSchoolName'];
    $previous_school_address = $_POST['previousSchoolAddress'];
    $bank_name = $_POST['bankName'];
    $branch_of_bank = $_POST['branchOfBank'];
    $ifsc_number = $_POST['ifscNumber'];
    $primary_contact = $_POST['primary_contact'];
    $email = $_POST['email'] ?? '';
    $mother_tongue = $_POST['mother_tongue'] ?? '';
    $languages_known = $_POST['languages_known'] ?? '';
    $father_name = $_POST['father_name'];
    $father_contact = $_POST['father_contact'];
    $mother_name = $_POST['mother_name'];
    $mother_contact = $_POST['mother_contact'];
    $guardian_name = $_POST['guardian_name'];
    $guardian_contact = $_POST['guardian_contact'];
    $admission_number = $_POST['admission_number'];

    // Bind parameters and execute the statement
    $stmt->bind_param(
        "sssssssssssssssssssssssssssssssssssssssssss",
        $academic_year,
        $admission_date,
        $roll_number,
        $status,
        $first_name,
        $last_name,
        $class,
        $section,
        $gender,
        $dob,
        $current_address,
        $permanent_address,
        $district,
        $province,
        $transport_route,
        $vehicle_number,
        $pick_up_point,
        $hostel,
        $hostel_room_number,
        $allergies,
        $medication,
        $previous_school_name,
        $previous_school_address,
        $bank_name,
        $branch_of_bank,
        $ifsc_number,
        $primary_contact,
        $email,
        $mother_tongue,
        $languages_known,
        $father_name,
        $father_contact,
        $mother_name,
        $mother_contact,
        $guardian_name,
        $guardian_contact,
        $imageOfStudent,
        $imageOfFather,
        $imageOfMother,
        $imageOfGuardian,
        $birthCertificate,
        $transferCertificate,
        $admission_number
    );


    if ($stmt->execute()) {
        echo "Student details updated successfully.";
    } else {
        echo "Error in statement execution: " . $stmt->error;
    }

    db_close($mysqli);
}
