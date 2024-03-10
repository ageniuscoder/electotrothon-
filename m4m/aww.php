<?php
error_reporting(0);
// MySQL server configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "m4m1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Email you want to retrieve
$emailToRetrieve = "mangal@gmail.com";

// SQL query to retrieve data for a specific email
$sql = "SELECT * FROM users WHERE email = '.$emailToRetrieve.'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the specific email
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "Email not found";
}

// Close connection
$conn->close();

?>
