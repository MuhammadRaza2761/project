<?php
include("config.php");
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $cnic=$_POST['cnic'];
    $email=$_POST['email'];
    $city=$_POST['city'];

   

$qry="INSERT INTO employee (name, password, cnic, email, city) VALUES ('$name','$password','$cnic','$email','$city')";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:employeeview.php");
}
else{
    echo "error check";
}
mysqli_close($conn);


}
?>