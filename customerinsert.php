<?php
include("config.php");
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $items=$_POST['items'];
    

$qry="INSERT INTO customer (name, contact, items) VALUES ('$name','$contact','$items')";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:customerview.php");
}
else{
    echo "error check";
}
mysqli_close($conn);


}
?>