<?php
include("config.php");
if(!$conn)
{
    die (" connection fail ". mysqli_connect_error());
}

if(isset($_POST['sub']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    $cnic=$_POST['cnic'];
    $email=$_POST['email'];
    $city=$_POST['city'];

  
$qry="UPDATE employee SET name='$name', password='$password',cnic='$cnic', email='$email' , city='$city' WHERE id='$id'";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:employeeview.php");
}
else{
    echo "error";
}
mysqli_close($conn);


}
?>