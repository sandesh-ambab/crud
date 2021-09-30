<?php 
include 'dbconnection.php'; 
$obj = new dbconnection();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $obj->read($id);
}


if(isset($_POST['update'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    try{
        $obj->update($id, $name, $description);
        echo "Data updated";
        header('location:index.php');
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo 
                            $data['name'];?>">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" value="<?php echo $data['description'];?>">
                        </div>
                        <input type="submit" name="update" class="btn btn-primary" value="Update">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>