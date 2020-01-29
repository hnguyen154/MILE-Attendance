<?php

$conn = mysqli_connect("localhost", "root", "root", "MILE");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
