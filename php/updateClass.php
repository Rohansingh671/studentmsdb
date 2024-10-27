<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if required fields are present and not empty
    if (!empty($_POST['classID']) && !empty($_POST['className']) && !empty($_POST['classSection']) && isset($_POST['numberOfStudent']) && isset($_POST['numberOfSubject'])) {
        
        // Assign variables after basic sanitization
        $classID = htmlspecialchars(trim($_POST['classID']));
        $className = htmlspecialchars(trim($_POST['className']));
        $classSection = htmlspecialchars(trim($_POST['classSection']));
        $numberOfStudent = htmlspecialchars(trim($_POST['numberOfStudent']));
        $numberOfSubject = htmlspecialchars(trim($_POST['numberOfSubject']));
        
        // Set classStatus as 'Active' if the switch is on, otherwise 'Inactive'
        $classStatus = isset($_POST['classStatus']) && $_POST['classStatus'] === 'on' ? 'Active' : 'Inactive';

        // Validate Class ID and Class Name (only letters, numbers, spaces allowed)
        if (!preg_match("/^[a-zA-Z0-9\s]+$/", $classID) || !preg_match("/^[a-zA-Z0-9\s]+$/", $className)) {
            echo "Class ID and Class Name can only contain letters, numbers, and spaces.";
            exit;
        }

        // Validate numberOfStudent and numberOfSubject (only numbers allowed)
        if (!is_numeric($numberOfStudent) || !is_numeric($numberOfSubject)) {
            echo "Number of Students and Number of Subjects must be numeric values.";
            exit;
        }

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo "Database connection failed: " . $mysqli->connect_error;
            exit;
        }

        // Prepare the SQL statement for updating
        $stmt = $mysqli->prepare("UPDATE `classdata` SET `className` = ?, `classSection` = ?, `classStatus` = ?, `numberOfStudent` = ?, `numberOfSubject` = ? WHERE `classID` = ?");
        if ($stmt === false) {
            echo "Error preparing statement: " . $mysqli->error;
            exit;
        }

        // Bind parameters and execute statement
        $stmt->bind_param("sssiii", $className, $classSection, $classStatus, $numberOfStudent, $numberOfSubject, $classID);
        if ($stmt->execute()) {
            echo "Class updated successfully.";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        // Close statement and database connection
        $stmt->close();
        $mysqli->close();

    } else {
        echo "Required fields are missing.";
    }
} else {
    echo "Invalid request method.";
}
?>
