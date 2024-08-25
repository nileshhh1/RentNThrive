<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted"; // Debugging output
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Your database connection details
    $servername = "localhost";
    $db_username = "root"; // Changed variable name to avoid conflict
    $db_password = ""; // Changed variable name to avoid conflict
    $dbname = "rent";

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepared statement to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, redirect to index page
        //echo "Invalid email or password. Please try again.";
        exit();
    } else {
        // User does not exist or incorrect credentials
        
        header("Location: index.html");
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
