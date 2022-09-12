<?php
//include_once('connect.php');

$servername = "localhost";
$username = "root";
$password = "";
$db="saran";
// Create connection
$conn = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$a = $_POST['name_l'];
$b = $_POST['email_l'];
$c = $_POST['passcode_l'];
echo $a;
echo $b;
echo $c;


$sql= "INSERT INTO login (Name,Mail,Password)
VALUES ('".$a."','".$b."','".$c."')";

//$sql = "INSERT INTO user (name, email, phone, address)
//VALUES ('John', 'john@example.com','Doe','theni')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>








