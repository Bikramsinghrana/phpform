<?php
// Database server configuration
$servername = "localhost";
$username = "root";
$password = "";

// Connect to MySQL database server
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connection successful" . "<br>";     
}

// Create database
$sql = "CREATE DATABASE formdata";
$databs = mysqli_query($conn, $sql);

if ($databs) {
    echo "Database created successfully" . "<br>";
} 
else {
    echo "Error creating database: " . $conn->error;
}

// Select the new database
$conn->select_db("formdata");

// Create a new table with different constraints
$sql1 = "CREATE TABLE Employee (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    emp_name VARCHAR(200) NOT NULL,
    dept VARCHAR(10) NOT NULL,
    email VARCHAR(100) UNIQUE  KEY NOT NULL,
    dob TIMESTAMP NOT NULL,
    salary FLOAT  NOT NULL,
    mobile_num INT(10) NOT NULL
)";

$result = mysqli_query($conn, $sql1);

if ($result) {
    echo "Table created successfully" . "<br>";
}
else {
    echo "Error creating table: " . mysqli_error($conn);
}