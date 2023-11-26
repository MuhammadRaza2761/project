<?php
$conn=mysqli_connect('localhost','root','','student');
if(!$conn)
{
    die (" connection fail ". mysqli_connect_error());
}
?> 