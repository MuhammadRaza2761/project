<?php
include("config.php");
if(isset($_POST['sub']))
{
    $day=$_POST['day'];
    $breakfast=$_POST['breakfast'];
    $lunch=$_POST['lunch'];
    $dinner=$_POST['dinner'];
    

$qry="INSERT INTO menu (day,breakfast,lunch,dinner) VALUES ('$day','$breakfast','$lunch','$dinner')";
$result=mysqli_query($conn,$qry);
if($result)
{
    header("location:foodview.php");
}
else{
    echo "error check";
}
mysqli_close($conn);


}
?>