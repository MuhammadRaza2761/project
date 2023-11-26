<?php
include("config.php");
if(isset($_POST['sub']))
{
    $customername=$_POST['customername'];
    $menu=$_POST['menu'];
    $contact=$_POST['contact'];
    $payment=$_POST['payment'];
    

$qry="INSERT INTO odr (customername,menu, contact, payment) VALUES ('$customername','$menu','$contact','$payment')";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:orderview.php");
}
else{
    echo "error check";
}
mysqli_close($conn);


}
?>