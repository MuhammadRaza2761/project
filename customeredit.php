<?php

include('config.php');
include('menu.php');

$id= $_GET ['id'];
$qry="SELECT * FROM customer where id='$id'";
$result=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($result);

?>




<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login</title></br>;
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3"> </div>
            <div class="col-6" >
            <h1> CustomerEdit User</h1>

            <form method="post" action="customerupdate.php" >
            <div>
                    
                    <input type="hidden"   class="form-control" name="id" value ="<?php echo $row['id']?>" >
                </div>

                <div>
                    <label class="form-label">  Name</label>
                    <input type="text" class="form-control" name="name"  value ="<?php echo $row['name']?>" >
                </div>

                <div>
                    <label class="form-label"> contact</label>
                    <input type="text" class="form-control" name="contact"  value ="<?php echo $row['contact']?>" >

                </div>
                <div>
                    <label class="form-label"> order</label>
                    <input type="text" class="form-control" name="items"  value ="<?php echo $row['items']?>" >
                </div>
             
                
                <div>
                    <button type="submit" class="btn btn-success" name="sub"> Update</button>
                </div>

            </form> 
        </div>
       
        </div>
    </body>
</html>