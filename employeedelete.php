<?php
    include('config.php');
    $id= $_GET['id'];

    $qry="DELETE FROM employee WHERE id ='$id'";
    $result=mysqli_query($conn,$qry);
    if($result)
    { 
     header("location: employeeview.php");
    }
    else{
        echo "error";
    }
    mysqli_close($conn);
    ?>