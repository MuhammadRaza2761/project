<?php

include('config.php');
include('menu.php');

$id= $_GET ['id'];
$qry="SELECT * FROM odr where id='$id'";
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
                <div class="col-3" > </div>
            <div class="col-6" >
            <h1>OrderEdit User</h1>

            <form method="post" action="orderupdate.php" >
            <div>
                    
                    <input type="hidden"   class="form-control" name="id" value ="<?php echo $row['id']?>" >
                </div>

                <div>
                    <label class="form-label">  Customer Name</label>
                    <input type="text" class="form-control" name="customername"  value ="<?php echo $row['customername']?>" >
                </div>

                <div>
                    <label class="form-label"> Menu</label>
                    <input type="text" class="form-control" name="menu"  value ="<?php echo $row['menu']?>" >

                </div>
                <div>
                    <label class="form-label"> Contact</label>
                    <input type="text" class="form-control" name="contact"  value ="<?php echo $row['contact']?>" >
                </div>

                <div>
                    <label class="form-label"> Payment</label>
                    <input type="text" class="form-control" name="payment"  value ="<?php echo $row['payment']?>" >
                </div>
             
                
                <div>
                    <button type="submit" class="btn btn-success" name="sub"> Update</button>
                </div>

            </form> 
        </div>
       
        </div>
    </body>
</html>