<?php
require_once 'databaseConnection.php';
$mysqli = db_connect();

// Prepare the SQL statement to fetch distinct classes from the database
$stmt = $mysqli->prepare("SELECT `feesGroupID`, `feesGroup`, `feesGroupAmount`, `remark`, `feesGroupStatus` FROM `addfeesgroup`");

$stmt->execute();
$stmt->store_result();

// Bind the result to a variable
$stmt->bind_result(
    $feesGroupID,
    $feesGroup,
    $feesGroupAmount,
    $remark,
    $feesGroupStatus
);

// Create an empty array to store classes
$groups = array();

// Fetch each class and add it to the array
while ($stmt->fetch()) {
    $group = array(
        'feesGroupID' => $feesGroupID,
        'feesGroup' => $feesGroup,
        'feesGroupAmount' => $feesGroupAmount,
        'remark' => $remark,
        'feesGroupStatus' => $feesGroupStatus
    );


    $groups[] = $group;
}

// Close the statement and database connection
$stmt->close();
db_close($mysqli);
