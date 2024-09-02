<?php
// Include your database connection file
include_once __DIR__ . '/db.php';

// Check if POST request is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
    $lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Check if all required fields are provided
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        echo "Error: All fields are required.";
        exit;
    }

    // Escape input data for safety
    $firstName = mysqli_real_escape_string($conn, $firstName);
    $lastName = mysqli_real_escape_string($conn, $lastName);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Check if the email already exists
    $checkEmailStmt = $conn->prepare("SELECT Email FROM customers WHERE Email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    if ($checkEmailStmt->num_rows > 0) {
        echo "Error: Email already exists.";
        $checkEmailStmt->close();
        $conn->close();
        exit;
    }

    $checkEmailStmt->close();

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO customers (FirstName, SecondName, Email, Password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

    // Execute the statement
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>