<?php
    include('config.php');
    $id= $_GET['id'];

    $qry="DELETE FROM menu WHERE id ='$id'";
    $result=mysqli_query($conn,$qry);
    if($result)
    { 
     header("location: foodview.php");
    }
    else{
        echo "error";
    }
    mysqli_close($conn);
    ?>