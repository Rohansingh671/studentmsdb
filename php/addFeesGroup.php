<?php

require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if required fields are present and not empty
    if (!empty($_POST['feesGroup']) && !empty($_POST['feesAmount']) && isset($_POST['remark'])) {
        
        // Assign variables after basic sanitization
        $feesGroup = htmlspecialchars(trim($_POST['feesGroup']));
        $feesAmount = htmlspecialchars(trim($_POST['feesAmount']));
        $remark = htmlspecialchars(trim($_POST['remark']));
        
        // Set feesGroupStatus as 'Active' if the switch is on, otherwise 'Inactive'
        $feesGroupStatus = isset($_POST['feesGroupStatus']) && $_POST['feesGroupStatus'] === 'on' ? 'Active' : 'Inactive';

        // Validate feesGroup (only letters, numbers, spaces allowed)
        if (!preg_match("/^[a-zA-Z0-9\s]+$/", $feesGroup)) {
            echo "Fees Group can only contain letters, numbers, and spaces.";
            exit;
        }

        // Validate feesAmount (only numbers allowed)
        if (!is_numeric($feesAmount)) {
            echo "Fees Amount must be a numeric value.";
            exit;
        }

        // Database connection
        $mysqli = db_connect();
        if (!$mysqli) {
            echo "Database connection failed: " . $mysqli->connect_error;
            exit;
        }

        // Prepare the SQL statement with new fields
        $stmt = $mysqli->prepare("INSERT INTO `classdata` (`ID`, `feesGroup`, `feesAmount`, `remark`, `feesGroupStatus`) VALUES (NULL, ?, ?, ?, ?)");
        if ($stmt === false) {
            echo "Error preparing statement: " . $mysqli->error;
            exit;
        }

        // Bind parameters and execute statement
        $stmt->bind_param("siss", $feesGroup, $feesAmount, $remark, $feesGroupStatus);
        if ($stmt->execute()) {
            echo "Fees group added successfully.";
        } else {
            echo "Error inserting record: " . $stmt->error;
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
