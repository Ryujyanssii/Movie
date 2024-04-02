<?php

session_start();
if(isset($_SESSION['email']))
{
    unset($_SESSION['email']);
    unset($_SESSION['name']);
    unset($_SESSION['phone']);
    unset($_SESSION['image']);
   header("location:login.php");
   exit();
}
?>