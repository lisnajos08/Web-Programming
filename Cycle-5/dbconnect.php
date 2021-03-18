<?php
$servername = "localhost";
$username = "20mca035";
$password = "2594";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"20mca035");

// Check connection
if (!$conn) {
  die("Connection failed : " .mysqli_connect_error());
}
echo "Connected successfully !!";
?>