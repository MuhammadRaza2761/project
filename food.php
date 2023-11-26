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
            <h1>Food form</h1>

            <form method="post" action="foodinsert.php" >
                <div>
                    <label class="form-label"> Day</label>
                    <input type="text" class="form-control" name="day">
                </div>

                <div>
                    <label class="form-label"> 	BreakFast</label>
                    <input type="text" class="form-control" name="breakfast">

                </div>

                <div>
                    <label class="form-label"> 	Lunch</label>
                    <input type="text" class="form-control" name="lunch">
                </div>

                <div>
                    <label class="form-label"> Dinner</label>
                    <input type="text" class="form-control" name="dinner">
                </div>
             
                
                <div>
                    <button type="submit" class="btn btn-success" name="sub"> Save</button>
                </div>

            </form> 
        </div>
       
        </div>
    </body>
</html>