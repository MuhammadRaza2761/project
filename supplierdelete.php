<?php
    include('config.php');
    $id= $_GET['id'];

    $qry="DELETE FROM supplier WHERE id ='$id'";
    $result=mysqli_query($conn,$qry);
    if($result)
    { 
     header("location: supplierview.php");
    }
    else{
        echo "error";
    }
    mysqli_close($conn);
    ?>