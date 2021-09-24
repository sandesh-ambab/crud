<?php 
include 'db.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM crud WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$description = $n['description'];
		}
	}


// if(isset($_POST['submit'])){

	// $id = $_POST['id'];
	// $name = trim($_POST['name']);
	// $description = trim($_POST['description']);

	// $query = "UPDATE crud SET name = '$name', description = '$description' WHERE id = '$id' ";
	// $conn->query($query);

	// $conn->close();	
	// header("location: index.php");
// }


?>