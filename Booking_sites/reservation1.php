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

$sql = "INSERT INTO testtable6 (Name,EmailId,indate,outdate,Adults,Children,Infants)
VALUES ('$_POST[Name]','$_POST[EmailId]','$_POST[indate]','$_POST[outdate]','$_POST[Adults]','$_POST[Children]','$_POST[Infants]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
