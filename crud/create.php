<?php 

		if (isset($_POST['submit'])) {
            $name = trim($_POST['name']);
            $description = trim($_POST['description']);
            try{
                $obj->create($name, $description);
                echo "Data added";
            }
            catch(Exception $e){
                echo $e->getMessage();

            }
        }
?>