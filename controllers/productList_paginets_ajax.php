<?php
require '../database/dbConnect.php';
header('Content-Type: application/json');

// Establish the database connection
$conn = dbConnect();

function fetchAllUser($conn){

    $sql = "SELECT productName as name, description, Price as price FROM products";
    $result = $conn->query($sql);

    
    // Check if the query was successful
    if (!$result) {
        echo json_encode([
            "success" => 0,
            "message" => "Database query failed: " . $conn->error,
        ]);
        exit;
    }

    $productlist = array();
    while ($rows = mysqli_fetch_assoc($result)) {
        $productlist[] = $rows;
    }

    // Prepare the result in DataTables format
    $response = array(
        "draw" => 1,  // Use "draw" instead of "sEcho" for modern DataTables
        "recordsTotal" => count($productlist),
        "recordsFiltered" => count($productlist),
        "data" => $productlist  // Use "data" instead of "aaData"
    );

    // Output the result in JSON format
    echo json_encode($response);
    exit;
}

// Call the function with the global connection
fetchAllUser($conn);

// Close the connection
$conn->close();
?>
