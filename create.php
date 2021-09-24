<?php

include 'db.php';

if(isset($_POST['submit'])){
	$name = trim($_POST['name']);
	$description = trim($_POST['description']);
	$query = "insert into crud (name,  description) values ('$name', '$description')";
	$conn->query($query);

	$conn->close();	
	header("location: index.php");
}

?>

