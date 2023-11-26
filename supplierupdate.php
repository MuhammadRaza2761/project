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
    $contact=$_POST['contact'];
    $payment=$_POST['payment'];
    

  
$qry="UPDATE supplier SET name='$name', contact='$contact',payment='$payment' WHERE id='$id'";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:supplierview.php");
}
else{
    echo "error";
}
mysqli_close($conn);


}
?>