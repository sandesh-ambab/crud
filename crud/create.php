<?php 

    include "dbconnection.php";
    $obj = new dbconnection();

    $id = ($_POST['id']);
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if(!empty($name) && !empty($description)) {
        try{
            $obj->create($name, $description);
            echo "<div class='alert alert-success'>Data added successfully</div>";
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
    else {
        echo "<div class='alert alert-success'>Data required</div>";
    }
    exit();
?>