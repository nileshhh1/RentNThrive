<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rent";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO shipping_addresses (country, first_name, last_name, address, apartment, city, state, pin, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $country, $first_name, $last_name, $address, $apartment, $city, $state, $pin, $phone);

    // Set parameters
    $country = $_POST["country"];
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $address = $_POST["address"];
    $apartment = $_POST["apartment"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $pin = $_POST["pin"];
    $phone = $_POST["phone"];

    // Execute SQL statement
    if ($stmt->execute() === TRUE) {
        // Close connection
        $stmt->close();
        $conn->close();
        
        // Redirect to success.html
        header("Location: payment.html");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
