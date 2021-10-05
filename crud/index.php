
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
        <form id="crud" method="POST">
            <input type="text" class= "text-center" name="name" id="name" placeholder="Your name" required>
            <input type="text" class= "text-center" name="description" id="description" placeholder="Your description" required>
            <button class="btn btn-primary" id="submit" type="submit" name= "submit">ADD</button><br><br>

        </form>
    <div id="msg"></div>
    <div id="pagination"></div>
   
                
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="crudajax.js"></script>
    
</body>
</html>

