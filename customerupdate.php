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
    $items=$_POST['items'];
    

  
$qry="UPDATE customer SET name='$name', contact='$contact',items='$items' WHERE id='$id'";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:customerview.php");
}
else{
    echo "error";
}
mysqli_close($conn);


}
?>