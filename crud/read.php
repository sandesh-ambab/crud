<?php

        include "dbconnection.php";
        $obj = new dbconnection();
        
        $limit = 3;
        if(!isset($_POST['page'])){
            $page = 1;
        }
        else{
            $page = $_POST['page'];
        }

        $offset = ($page-1) * $limit;
        $result = $obj->readAll($offset, $limit);
        if(mysqli_num_rows($result) > 0){
        echo '<table class="table table-bordered table-striped">';
            echo "<thead class='bg-secondary'>";
                echo "<tr>";
                    echo "<th>#</th>";
                    echo "<th>Name</th>";
                    echo "<th>Designation</th>"; 
                    echo "<th>Designation</th>";                    

                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            $number = 1 + $offset;
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $number . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>";
                        echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip">EDIT</a>&nbsp&nbsp';
                        echo "<button class='btn btn-danger btn-del mx-2' data-id=".$row['id'].">Delete</button>";

                    echo "</td>";
                echo "</tr>";
            $number++;

            }
            echo "</tbody>";                            
        echo "</table>";
        echo "<div class='pagination text-center'>";
            $pages = $obj->getPage($limit);
            for($i = 1; $i <= $pages; $i++) { 
                if ($i == $page) {   
                    echo "<button class='btn btn-success pagination_link mx-2' id=".$i.">".$i."</button>";
                }               
                else {   
                    echo "<button class='btn btn-danger pagination_link mx-2' id=".$i.">".$i."</button>";

                }   
            }  
        echo "</div>";            
        mysqli_free_result($result);
        }else{
            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
        }  
    ?>