<?php
include("config.php");
if(!$conn)
{
    die (" connection fail ". mysqli_connect_error());
}

if(isset($_POST['sub']))
{
    $id=$_POST['id'];
    $day=$_POST['day'];
    $breakfast=$_POST['breakfast'];
    $lunch=$_POST['lunch'];
    $dinner=$_POST['dinner'];
    

  
$qry="UPDATE menu SET day='$day',breakfast='$breakfast', lunch='$lunch',dinner='$dinner' WHERE id='$id'";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:foodview.php");
}
else{
    echo "error";
}
mysqli_close($conn);


}
?>