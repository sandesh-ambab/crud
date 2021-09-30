<?php
        $limit = 4;
        if(!isset($_GET['page'])){
            $page = 1;
        }
        else{
            $page = $_GET['page'];
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
                    // echo "</td>";
                    // echo "<td>";
                        echo '<a href="index.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip">DELETE</a>';
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
                    echo "<a class = 'active' href='index.php?page=".$i."'>".$i." </a>";   
                }               
                else {   
                    echo "<a href='index.php?page=".$i."'>".$i." </a>";     
                }   
            }  
        echo "</div>";            
        mysqli_free_result($result);
        }else{
            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
        }  
    ?>