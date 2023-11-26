<?php
include("config.php");
if(isset($_POST['sub']))
{
    $id=$_POST['id'];
    $user=$_POST['username'];
    $password=$_POST['password'];
    $cnic=$_POST['cnic'];
    $email=$_POST['email'];

  
$qry="UPDATE user SET username='$user', password='$password',cnic='$cnic', email='$email' WHERE id='$id'";
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