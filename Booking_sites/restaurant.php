<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sampledb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
DEFINE('room','$_POST[room]');

DEFINE('item','$_POST[item]');
DEFINE('hello','$_POST[hello]');

$sql = "INSERT INTO testtable5 (room,item,hello)
VALUES ('$_POST[room]','$_POST[item]','$_POST[hello]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

