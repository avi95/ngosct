<?php
$servername = "us-cdbr-azure-west-c.cloudapp.net";
$username = "b8e78756f0c692";
$password = "a11b2002";
$dbname = "database_cy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE CS_DOORSTEP (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
phone VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
area VARCHAR(30) NOT NULL,
street VARCHAR(80) NOT NULL,
problem VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table RSS created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 