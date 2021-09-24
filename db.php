<?php 


$conn = new mysqli("localhost", "test", "test123", "login");

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

?>