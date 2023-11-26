<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-10" ></div>
            <div class="col-5"  >
                <h1>Login Form </h1>
                <form method="post">
                    <div>
                        <label class="form label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div>
                        <label class="form label">password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="sub">login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include ("config.php");

if(isset($_POST["sub"])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $qry="SELECT * FROM user WHERE email='$email' and password='$password'";
    $result=mysqli_query($conn,$qry);
    if(mysqli_num_rows($result)> 0){
        session_start();
        $_SESSION["login"]=true;
        $_SESSION["email"]=$email;
        header("location:index.php");
    }else{
        echo "invalid email and password";
    }
}

?>