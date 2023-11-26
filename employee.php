<?php
include("menu.php");
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
            <div class="col-12">
            <h1>Employee form</h1>

            <form method="post" action="employeeinsert.php" >
                <div>
                    <label class="form-label"> Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div>
                    <label class="form-label"> password</label>
                    <input type="password" class="form-control" name="password">

                </div>

                <div>
                    <label class="form-label"> CNIC</label>
                    <input type="text" class="form-control" name="cnic">
                </div>
             
                <div>
                    <label class="form-label"> Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                
                <div>
                    <label class="form-label"> City</label>
                    <input type="text" class="form-control" name="city">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="sub"> Save</button>
                </div>

            </form> 
        </div>
       
        </div>
    </body>
</html>