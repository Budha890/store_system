<?php
error_reporting(E_ALL);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $currentDate = date('Y-m-d');

    // Check if a record with the same rule violation description and current date already exists
    $checkQuery = "SELECT COUNT(*) AS count FROM vehicles_and_fines WHERE rule_violation_description = '$ruleViolationDescription' AND DATE(rule_violation_date) = '$currentDate'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult && $checkResult->fetch_assoc()['count'] > 0) {
        $json = array("statusCode" => 400, "message" => "Duplicate entry for the same violation on the current date.");
        echo json_encode($json, JSON_PRETTY_PRINT);
        die();
    }

    // Proceed with insertion
    $insertQuery = "INSERT INTO vehicles_and_fines (vehicle_no, rule_violation_description, fine_amount, payment_status) VALUES ('$vehicleNumber', '$ruleViolationDescription', $fineAmount, '$paymentStatus')";

    if ($conn->query($insertQuery) === TRUE) {
        $json = array("statusCode" => 200, "message" => "Fine added successfully.");
        echo json_encode($json, JSON_PRETTY_PRINT);
    } else {
        $json = array("statusCode" => 500, "message" => "Error adding fine: " . $conn->error);
        echo json_encode($json, JSON_PRETTY_PRINT);
    }

    // Close the database connection
    $conn->close();
} else {
    http_response_code(403); // Forbidden
    echo "Access denied.";
}
?>
