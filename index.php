<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    .container {
        margin: auto;
        background-color: lightgray;
        width: 800px;
        height: auto;
        padding: 25px;
        margin-top: 20px;
        align-items: center;
       
    }

    .btn {
        padding: 5px;
        margin-left: 100px;
    }

    input {
        font-size: 17px;
    }
    tr td{
        padding: 5px;
        font-size: 20px;
    }
    .container h1 {
        font-size: 25px;
        align-items: center;
    }
</style>

<body>
    <div class="container">
        <h1>CRUD Operation</h1><br>
        <form action="create.php" method="post">

            <input type="text" name="name" id="name" placeholder="Your name" required>
            <input type="text" name="description" id="description" placeholder="Your description" required>
            <input class="btn" type="submit" name= "submit" value="ADD"><br><br>

        </form>
        <!-- <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="name" value="<?php echo $name; ?>">
            <input type="text" name="desciption" value="<?php echo $description; ?>">
        </form> -->

        <table border="1">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Description</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('read.php');
                    // require_once('update.php');
                    // foreach ($result as $key => $record) {
                    //     if($record['id'] == $_GET['id']){ 
                    //         echo "<tr>
                    //                     <form action='update.php' method='POST'>
                    //                     <td><input type='text' name='name' value=".$record['name']."></td>
                    //                     <td><input type='text' name='description' value=".$record['description']."></td>
                    //                     <td><input type='submit' name='save' value='save'></td>
                    //                     </form>
                    //             </tr>";
                        
                    //     }else{
                            if($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) { 
                                    echo "<tr>
                                            <td>".$row['name']."</td>
                                            <td>".$row['description']."</td>
                                            <td>
                                                <a href='index.php?id=".$row['id']."'>Edit</a>
                                            </td>
                                            <td>
                                                <a href='delete.php?id=".$row['id']."'>Delete</a>
                                            </td>
                                        </tr>";
                               // }
                            // } 
                        }
                    }
                ?>
                
            </tbody>
         </table>
        
    </div>

</body>

</html>