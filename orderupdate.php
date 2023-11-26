<?php
include("config.php");
if(!$conn)
{
    die (" connection fail ". mysqli_connect_error());
}

if(isset($_POST['sub']))
{
    $id=$_POST['id'];
    $customername=$_POST['customername'];
    $menu=$_POST['menu'];
    $contact=$_POST['contact'];
    $payment=$_POST['payment'];
    

  
$qry="UPDATE odr SET customername='$customername',menu='$menu', contact='$contact',payment='$payment' WHERE id='$id'";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:orderview.php");
}
else{
    echo "error";
}
mysqli_close($conn);


}
?>