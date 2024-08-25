<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Change this if your MySQL password is different
$dbname = "rent";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
        // Redirect to another page after successful registration
        header("Location: log.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close prepared statement
    $stmt->close();
}

// Close database connection
$conn->close();
?>
