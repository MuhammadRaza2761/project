<?php
if(!isset($_SESSION))
{
    SESSION_START();
}
 unset($_SESSION['login']);
 header("location:login.php");
 ?>