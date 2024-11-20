<?php
require '../database/dbConnect.php';
$conn = dbConnect();

// Retrieve email and password from POST request
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL query securely
$emailSql = $conn->prepare("SELECT * FROM ecommusers WHERE email = ?");
$emailSql->bind_param("s", $email);
$emailSql->execute();
$result = $emailSql->get_result();
$Erow = $result->fetch_array(MYSQLI_ASSOC);

if (!empty($Erow)) {
    // Use password_verify if passwords are hashed in the database
    if ($password === $Erow['password']) {
        // If passwords match
        echo json_encode(['success' => 200, 'message' => 'User LoggedIn Successfully']);
    } else {
        // Incorrect password
        echo json_encode(['success' => 0, 'message' => 'Incorrect password']);
    }
} else {
    // Email not found
    echo json_encode(['success' => 404, 'message' => 'Email not found! Try Register']);
}

// Close the connection
$conn->close();

// header("location: http://localhost/ecomm/");

?>
