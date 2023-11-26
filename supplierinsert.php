<?php
include("config.php");
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $payment=$_POST['payment'];
    

$qry="INSERT INTO supplier (name, contact, payment) VALUES ('$name','$contact','$payment')";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:supplierview.php");
}
else{
    echo "error check";
}
mysqli_close($conn);


}
?>