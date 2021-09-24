<?php 
include 'db.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = " DELETE FROM crud WHERE id = $id ";
	$conn->query($query);
	// $conn.close();
	header("location: index.php");
}

?>