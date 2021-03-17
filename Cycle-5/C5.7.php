<?php
$servername = "localhost";
$username = "20mca035";
$password = "2594";
$dbname = "20mca035";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Student (name, branch, mark)
VALUES ('alphy', 'MCA', '100')";

if (mysqli_query($conn, $sql)) {
  echo "A new record is inserted successfully !";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>