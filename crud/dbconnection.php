<?php 

class dbconnection
{
	private $conn;
	public function __construct()
	{
		$servername = "localhost";
		$username = "test";
		$password = "test123";
		$db = "login";

		//create connection
		$this->conn = new mysqli($servername, $username, $password, $db);

		//check connection
		if ($this->conn->connect_error) {
			echo "Failed To connect database" . mysqli_connect_error();
		}
	}

	public function create($name, $description){
        $sql = " INSERT INTO crud (name, description) VALUES ('$name', '$description')";
		$result = $this->conn->query($sql);
		return $result;
	}

	public function getPage ($limit){
		$sql = "SELECT * FROM crud";
		$result = $this->conn->query($sql);
		$number_of_result = mysqli_num_rows($result); 
        $total_page = ceil($number_of_result / $limit);

		return $total_page;
	}

	public function readAll($offset, $limit){
		$sql = "SELECT * FROM crud LIMIT $offset, $limit";
		$result = $this->conn->query($sql);
		return $result;

	}

	public function read($id){
		$sql = " SELECT * FROM crud WHERE id = '$id' ";
		$result=$this->conn->query($sql);
		$data=mysqli_fetch_assoc($result);
		return $data;
	}

	public function update($id, $name, $description){
    	$id = $_GET['id'];
		$sql = " UPDATE crud SET name = '$name', description = '$description' WHERE id = '$id' ";
		$result = $this->conn->query($sql);
		return $result;
	}

	public function delete($id){
		$sql = " DELETE FROM crud WHERE id='$id' ";
		$result = $this->conn->query($sql);
		return $result;

	}

}

?>