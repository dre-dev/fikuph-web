<?php

$host = "database-fik.cluster-cdyj7ejcvtdg.us-east-1.rds.amazonaws.com:3306";
$userName = "admin";
$password = "K53wasvwaa!";
$dbName = "contactform";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>