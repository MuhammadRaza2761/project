
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
            <h1> MESS MANAGEMENT SYSTEM </h1>

            <form method="post" action="login.php" >
                <div>
                    <label class="form-label"> User Name</label>
                    <input type="text" class="form-control" name="username">
                    </div>

                <div>
                    <label class="form-label"> password</label>
                    <input type="text" class="form-control" name="password">

                </div>

                <div>
                    <label class="form-label"> CNIC</label>
                    <input type="text" class="form-control" name="cnic">
                </div>
             
                <div>
                    <label class="form-label"> Email</label>
                    <input type="text" class="form-control" name="email">
                    </div>
                <div>
                    <button type="submit" class="btn btn-success" name="sub"> Save</button>
                </div>

            </form> 
        </div>
       
        </div>
    </body>
</html>

<?php
include("config.php");
if(isset($_POST['sub']))
{
    $user=$_POST['username'];
    $password=$_POST['password'];
    $cnic=$_POST['cnic'];
    $email=$_POST['email'];

   

$qry="INSERT INTO user(username,password,cnic,email) VALUE ('$user','$password','$cnic','$email')";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:view.php");
}
else{
    echo "error";
}
mysqli_close($conn);


}
?>


