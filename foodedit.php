<?php

include('config.php');
include('menu.php');

$id= $_GET ['id'];
$qry="SELECT * FROM menu where id='$id'";
$result=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($result);

?>




<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3" ></div>
            <div class="col-6" >
            <h1>FoodEdit User</h1>

            <form method="post" action="foodupdate.php" >
            <div>
                    
                    <input type="hidden"   class="form-control" name="id" value ="<?php echo $row['id']?>" >
                </div>

                <div>
                    <label class="form-label"> Day</label>
                    <input type="text" class="form-control" name="day"  value ="<?php echo $row['day']?>" >
                </div>

                <div>
                    <label class="form-label"> BreakFast</label>
                    <input type="text" class="form-control" name="breakfast"  value ="<?php echo $row['breakfast']?>" >

                </div>
                <div>
                    <label class="form-label"> Lunch</label>
                    <input type="text" class="form-control" name="lunch"  value ="<?php echo $row['lunch']?>" >
                </div>

                <div>
                    <label class="form-label"> Dinner</label>
                    <input type="text" class="form-control" name="dinner"  value ="<?php echo $row['dinner']?>" >
                </div>
             
                
                <div>
                    <button type="submit" class="btn btn-success" name="sub"> Update</button>
                </div>

            </form> 
        </div>
       
        </div>
    </body>
</html>