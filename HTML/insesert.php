<?php
$servername = "localhost";
$username = "saran";
$password = "saran";
$db = "intern";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "INSERT INTO user (name, email, phone, address)
VALUES ('John', 'john@example.com','Doe','theni')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
