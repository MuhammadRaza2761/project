<?php

include('config.php');
include('menu.php');

$id= $_GET ['id'];
$qry="SELECT * FROM user where id='$id'";
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
                <div class="col-3" style="border:solid;"> Side Bar</div>
            <div class="col-6" style="border:solid;">
            <h1> Edit User</h1>

            <form method="post" action="update.php" >
            <div>
                    
                    <input type="hidden"   class="form-control" name="id" value ="<?php echo $row['id']?>" >
                </div>

                <div>
                    <label class="form-label"> User Name</label>
                    <input type="text" class="form-control" name="username"  value ="<?php echo $row['UserName']?>" >
                </div>

                <div>
                    <label class="form-label"> password</label>
                    <input type="text" class="form-control" name="password"  value ="<?php echo $row['Password']?>" >

                </div>

                <div>
                    <label class="form-label"> CNIC</label>
                    <input type="text" class="form-control" name="cnic"  value ="<?php echo $row['CNIC']?>" >
                </div>
             
                <div>
                    <label class="form-label"> Email</label>
                    <input type="text" class="form-control" name="email"  value ="<?php echo $row['Email']?>">
                    </div>
                <div>
                    <button type="submit" class="btn btn-success" name="sub"> Update</button>
                </div>

            </form> 
        </div>
       
        </div>
    </body>
</html>