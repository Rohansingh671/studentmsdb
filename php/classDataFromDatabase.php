<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

// Prepare the SQL statement to fetch distinct classes from the database
$stmt = $mysqli->prepare("SELECT `classID`, `className`, `classSection`, `numberOfStudent`, `numberOfSubject`, `classStatus` FROM `classdata`");

$stmt->execute();
$stmt->store_result();

// Bind the result to a variable
$stmt->bind_result(
    $classID,
    $className,
    $classSection,
    $numberOfStudent,
    $numberOfSubject,
    $classStatus

);

// Create an empty array to store classes
$classes = array();

// Fetch each class and add it to the array
while ($stmt->fetch()) {
    $class = array(
        'classID' => $classID,
        'className' => $className,
        'classSection' => $classSection,
        'numberOfStudent' => $numberOfStudent,
        'numberOfSubject' => $numberOfSubject,
        'classStatus' => $classStatus
    );


    $classes[] = $class;
}

// Close the statement and database connection
$stmt->close();
db_close($mysqli);
