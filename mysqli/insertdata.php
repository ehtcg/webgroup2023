<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "demo" ;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Aleme', 'Tyson', 'aleme.tyson@ehtcg.com')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
  echo "New record created successfully.Last inserted ID is :".$last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>