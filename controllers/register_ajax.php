<?php
require '../database/dbConnect.php';


header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $address = $_POST['address'];

    // Connect to the database
    $conn = dbConnect();

    if ($conn) {
        
        $emailSql = $conn->prepare("SELECT * FROM ecommusers WHERE email = ?");
        $emailSql->bind_param("s", $email);
        $emailSql->execute();
        $result = $emailSql->get_result();
        $Erow = $result->fetch_array(MYSQLI_ASSOC);

        if (empty($Erow)) {
            // Use a prepared statement for secure data insertion
            $sqlInsert = $conn->prepare("INSERT INTO ecommusers (name, email, password, phone, address, created_at) VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP())");
            $sqlInsert->bind_param("sssss", $name, $email, $password, $phone, $address);

            if ($sqlInsert->execute()) {
                echo json_encode(['success' => 201, 'message' => 'User registered']);
            } else {
                echo json_encode(['success' => 500, 'message' => 'Registration failed. Please try again.']);
            }

            $sqlInsert->close();
        } else {
            echo json_encode(['success' => 409, 'message' => 'Email already exists. Please try logging in.']);
        }

        $emailSql->close();
        $conn->close();
    } else {
        echo json_encode(['success' => 500, 'message' => 'Database connection failed.']);
    }
} else {
    echo json_encode(['success' => 400, 'message' => 'Invalid request method.']);
}
?>
