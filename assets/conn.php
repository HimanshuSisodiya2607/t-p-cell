<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "t&p";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  echo "database error";
}

?>