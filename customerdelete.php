<?php
    include('config.php');
    $id= $_GET['id'];

    $qry="DELETE FROM customer WHERE id ='$id'";
    $result=mysqli_query($conn,$qry);
    if($result)
    { 
     header("location: customerview.php");
    }
    else{
        echo "error";
    }
    mysqli_close($conn);
    ?>