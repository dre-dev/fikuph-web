<?php
$host = "database-fik.cluster-cdyj7ejcvtdg.us-east-1.rds.amazonaws.com:3306";
$userName = "admin";
$password = "K53wasvwaa!";
$dbName = "contactform";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

$sql="INSERT INTO contacts (name, email, message) VALUES ('".$name."','".$email."', '".$message."')";

if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
    } else {
        echo "Thank you! We will contact you soon";
        }
?>