<?php

include 'db.php';

$query = "SELECT * FROM crud";
$result = $conn->query($query);

$conn->close();

?>

