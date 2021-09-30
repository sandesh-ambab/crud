
<?php 
    include "dbconnection.php";
    $obj = new dbconnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center bg-light mt-3"> 
        
        <h1 class="bg-dark text-light">CRUD Operations using PHP</h1><br>
        <form action="index.php" method="POST">

            <input type="text" class= "text-center" name="name" id="name" placeholder="Your name" required>
            <input type="text" class= "text-center" name="description" placeholder="Your description" required>
            <button class="btn btn-primary" type="submit" name= "submit">ADD</button><br><br>

        </form>
    <?php 
       require_once('create.php');
    ?>
    <?php 
        require_once('read.php');
    ?>
    <?php 
        require_once('delete.php');
    ?> 
   
   
                
    </div>
</body>
</html>

