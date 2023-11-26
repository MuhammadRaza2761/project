<?php
    include('config.php');
    $id= $_GET['id'];

    $qry="DELETE FROM odr WHERE id ='$id'";
    $result=mysqli_query($conn,$qry);
    if($result)
    { 
     header("location: orderview.php");
    }
    else{
        echo "error";
    }
    mysqli_close($conn);
    ?>