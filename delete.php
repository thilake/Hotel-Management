<html>
<head>
<body bgcolor="skyblue">
<style>
p{
   color: white;
   font-size:70px;
}
h{
  color: white;
  font-size:40px;
}
a{
  color: white;
}
</style>
</head>
<body>
<?php
$firstname=$_POST["firstname"];
$conn = new mysqli('localhost', 'root', '', 'ir');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (count($_POST)>0) {
    $conn->query(" DELETE FROM `ticket` WHERE `firstname`='$firstname' ");
    echo "<center> <br> <br> <br>";
    echo "<p> record DELETED successfull  </p>";
    echo "</br> </br> </br> </center>";
  } else{
    echo" <p> update failed </p>";
 }
$conn->close();
?>
</html>
</body>