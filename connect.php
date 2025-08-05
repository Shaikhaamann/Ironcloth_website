<?php

// Connect to database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $entry_time = date("Y-m-d H:i:s");

    // Validate form data
    if (empty($username) || empty($password) || empty($confirm_password)) {
        echo "Please fill in all required fields.";
    } elseif ($password != $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Store user data in database
        $sql = "INSERT INTO users (username, password, entry_time) VALUES ('$username', '$password', '$entry_time')";
        if ($conn->query($sql) === TRUE) {
            echo "User created successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close database connection
$conn->close();

?>
