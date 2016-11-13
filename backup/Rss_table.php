<?php
$servername = "localhost";
$username = "mydata1995";
$password = "@qNGbnI{+lh*";
$dbname = "myloli";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE RSS (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
RSID VARCHAR(30) NOT NULL,
PASSWORD VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table RSS created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 