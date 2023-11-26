<?php
include("menu.php");
include("config.php");
if(!$conn)
{
    die (" connection fail ". mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
            <div class="container">
                <h1> Order list</h1>
                <table class ="table table-striped">
                    <tr>
                        <td> id</td>
                        <td> Customer Name</td>
                        <td> Menu</td>
                        <td> Contact</td>
                        <td> Payment</td>
                        <td> Action</td>
                        

                    </tr>

                        <?php
                        $qry="SELECT * FROM odr";
                        $result = mysqli_query($conn,$qry);
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row= mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>". $row['id']."</td>";
                                echo "<td>". $row['customername']."</td>";
                                echo "<td>". $row['menu']."</td>";
                                echo "<td>". $row['contact']."</td>";
                                echo "<td>". $row['payment']."</td>";
                                
                                echo "<td> <a href='orderdelete.php?id= ".$row['id']." ' class='btn btn-danger'> Delete </a>";
                                echo " <a href='orderedit.php?id= ".$row['id']." ' class='btn btn-success'> Edit </a></td>";

                                echo "</tr>";
                            }
                        }
                        else{
                            echo "record not found";
                        }
                        mysqli_close($conn)
                        
                        ?>
                </table>

            </div>

    </body>
</html>