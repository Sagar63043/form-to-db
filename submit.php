<?php
$conn = new mysqli("localhost", "root", "", "formtodb");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO contacts (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Contact saved successfully.";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
