<?php 
include "dbconnection.php";
$obj = new dbconnection();
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    if($obj->delete($id)){
        echo 1;
    }else{
        echo 0;
    }
    exit();
}

?>