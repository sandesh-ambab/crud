<?php 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try{
        $obj->delete($id);
        echo "Data deleted";
        header("location: index.php");
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}

?>