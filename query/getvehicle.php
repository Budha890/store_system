
<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "id21127808_info";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT vehicle_no, fine_id, rule_violation_date, rule_violation_description, fine_amount, payment_status
        FROM vehicles_and_fines";
$result = $conn->query($sql);

$jsonArray = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $vehicleNo = $row['vehicle_no'];
        $fine = array(
            "fine_id" => $row['fine_id'],
            "rule_violation_date" => $row['rule_violation_date'],
            "rule_violation_description" => $row['rule_violation_description'],
            "fine_amount" => floatval($row['fine_amount']),
            "payment_status" => $row['payment_status']
        );

        if (!isset($jsonArray[$vehicleNo])) {
            $jsonArray[$vehicleNo] = array(
                "vehicle_no" => $vehicleNo,
                "fine_details" => array()
            );
        }

        $jsonArray[$vehicleNo]['fine_details'][] = $fine;
    }
}
$conn->close();



$jsonData = array_values($jsonArray);
echo json_encode($jsonData, JSON_PRETTY_PRINT);
?>
